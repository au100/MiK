<?php
/**
 * @package	Article2phpBB3 plugin
 * @subpackage	Content
 * @copyright	Darkick
 * @license		GNU/GPL
 */

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgContentArticle2phpBB3 extends JPlugin
{

	function plgContentArticle2phpBB3( &$subject, $params )
	{
		parent::__construct( $subject, $params );
	}


	/**
	 * Befor saving new article create topic in forum and add links
	 *
	 * Method is called right before content is saved into the database.
	 * Article object is passed by reference, so any changes will be saved!
	 * NOTE:  Returning false will abort the save with an error.  
	 * 	You can set the error by calling $article->setError($message)
	 *
	 * @param 	object		A JTableContent object
	 * @param 	bool		If the content is just about to be created
	 * @return	bool		If false, abort the save
	 */
	function onBeforeContentSave( &$article, $isNew )
	{
		if (!$isNew)
		{
			return true;
		}
		JPlugin::loadLanguage( 'plg_content_article2phpbb3' );
		
		global $mainframe;
		global $phpbb_root_path, $phpEx;
		global $auth, $user, $template, $cache, $db, $config;
		
		/**
		*	Получим параметры для связи плагина с форумом
		*/
		$forum_path = $this->params->get('forum_path');					//путь к форуму ('forum')
		$params_id = array();
		$params_id['categories']	= explode(',', $this->params->get('categories_id'));	//id категорий через запятую, для которых применяется плагин
		$params_id['forums']		= explode(',', $this->params->get('forums_id'));		//id  форумов через запятую, для в которых будут создаваться темы
		$params_id['users']			= explode(',', $this->params->get('users_id'));			//id пользователей phpBB3 через запятую, от имени котрых будут создаваться темы (0 - для создания от имени автора статьи)
		$viewtopic_link = $this->params->get('viewtopic_link');			//формат ссылки на создаваемую тему в форуме. Переменные $topic_id и $forum_id будут заменены
		$target = $this->params->get('target');

		$forum_id = 0;
		$topic_id = 0;
		$post_id = 0;
		
		//формат сообщения, создаваемого в форуме
		switch ($this->params->get('forum_message_type'))
		{
			case 1:
				$forum_message = $article->introtext;
			break;
			case 2:
				$forum_message = $article->fulltext;
			break;
			default:
				$forum_message = $article->introtext . $article->fulltext;
			break;
		}
		/** Optional
		$forum_message = strip_tags($forum_message);
		*/
		/** ToDo in future
		if ($this->params->get('link_to_article'))
		{
			$forum_message .= "\n". '[url=http://'.$_SERVER['HTTP_HOST'].'/?option=com_content&view=article&amp;id='.$article->id.'&amp;catid='.$article->catid.']'.JText::_('Original article').'[/url]';
		}
		*/
		
		if (!$params_id['categories']) {$params_id['categories'] = array();}
		foreach($params_id['categories'] as $key=>$id)
		{
			$params_id['categories'][$key] = intval(trim($id));
		}
		if (!$params_id['forums']) {$params_id['forums'] = array();}
		foreach($params_id['forums'] as $key=>$id)
		{
			$params_id['forums'][$key] = intval(trim($id));
		}
		if (!$params_id['users']) {$params_id['users'] = array();}
		foreach($params_id['users'] as $key=>$id)
		{
			$params_id['users'][$key] = intval(trim($id));
		}
		if (empty($params_id['categories'])||empty($params_id['forums'])||empty($params_id['users']))
		{
			return true;
		}

		if (!in_array($article->catid, $params_id['categories']))
		{
			return true;
		} else {
			$key = array_search($article->catid, $params_id['categories']);
			if (!isset($params_id['forums'][$key]))
			{
				$forum_id = end($params_id['forums']);
			} else {
				$forum_id = $params_id['forums'][$key];
			}
			if (!isset($params_id['users'][$key]))
			{
				$user_id = end($params_id['users']);
			} else {
				$user_id = $params_id['users'][$key];
			}
		}
		//No forum_id - save article and exit without forum topic
		if (!$forum_id) {
			return true;
		}

		if (!defined('IN_PHPBB'))
		{
			define('IN_PHPBB', true);
		}
		if (!defined('PHPBB_ROOT_PATH'))
		{
			define('PHPBB_ROOT_PATH', JPATH_ROOT.DS.$forum_path.DS);
		}
		define('PHPBB_DB_NEW_LINK', true);	//required for correct cooperative work

		$phpbb_root_path = PHPBB_ROOT_PATH;
		$phpEx = substr(strrchr(__FILE__, '.'), 1);
		include_once($phpbb_root_path . 'common.' . $phpEx);
		include_once($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
		include_once($phpbb_root_path . 'includes/functions_display.' . $phpEx);
		include_once($phpbb_root_path . 'includes/message_parser.' . $phpEx);
		
		//Load and create overriden user class - phpbb3_user
		include_once(JPATH_ROOT.DS.'plugins'.DS.'content'.DS.'article2phpbb3'.DS.'phpbb3_user.php');
		$user = new phpbb3_user();
		$user->session_begin($user_id);
		if (!$user->data['is_registered'])
		{
			return true;
		}
		$auth->acl($user->data);
		
		$submit = true;
		$preview = false;
		$refresh = false;
		$save = false;
		$mode = 'post';
		
		$post_data = array();
		$current_time = time();
		
		// We need to know some basic information in all cases before we do anything.
		$sql = 'SELECT *
			FROM ' . FORUMS_TABLE . "
			WHERE forum_id = $forum_id";
		$result = $db->sql_query($sql);
		$post_data = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		//No post_data - save article and exit without forum topic
		if (!post_data) {
			return true;
		}
		
		$user->setup(array('posting', 'mcp', 'viewtopic'), $post_data['forum_style']);

		// Use post_row values in favor of submitted ones...
		$forum_id	= (!empty($post_data['forum_id'])) ? (int) $post_data['forum_id'] : (int) $forum_id;
		$topic_id	= (!empty($post_data['topic_id'])) ? (int) $post_data['topic_id'] : 0;
		$post_id	= (!empty($post_data['post_id'])) ? (int) $post_data['post_id'] : 0;
		
		// Subject length limiting to 60 characters if first post...
		$template->assign_var('S_NEW_MESSAGE', true);

		// Determine some vars
		$post_data['quote_username'] = '';

		$post_data['post_subject'] = '';
		
		$message_parser = new parse_message();

		// Set some default variables
		$uninit = array('post_attachment' => 0, 'poster_id' => $user->data['user_id'], 'enable_magic_url' => 0, 'topic_status' => 0, 'topic_type' => POST_NORMAL, 'post_subject' => '', 'topic_title' => '', 'post_time' => 0, 'post_edit_reason' => '', 'notify_set' => 0);

		foreach ($uninit as $var_name => $default_value)
		{
			if (!isset($post_data[$var_name]))
			{
				$post_data[$var_name] = $default_value;
			}
		}
		unset($uninit);

		// Always check if the submitted attachment data is valid and belongs to the user.
		// Further down (especially in submit_post()) we do not check this again.
		$message_parser->get_submitted_attachment_data($post_data['poster_id']);

		$post_data['username'] = '';
		
		$post_data['enable_urls'] = $post_data['enable_magic_url'];

		if ($mode != 'edit')
		{
			$post_data['enable_sig']		= ($config['allow_sig'] && $user->optionget('attachsig')) ? true: false;
			$post_data['enable_smilies']	= ($config['allow_smilies'] && $user->optionget('smilies')) ? true : false;
			$post_data['enable_bbcode']		= ($config['allow_bbcode'] && $user->optionget('bbcode')) ? true : false;
			$post_data['enable_urls']		= true;
		}

		$post_data['enable_magic_url'] = $post_data['drafts'] = false;
		
		$check_value = (($post_data['enable_bbcode']+1) << 8) + (($post_data['enable_smilies']+1) << 4) + (($post_data['enable_urls']+1) << 2) + (($post_data['enable_sig']+1) << 1);

		// HTML, BBCode, Smilies, Images and Flash status
		$bbcode_status	= ($config['allow_bbcode'] && $auth->acl_get('f_bbcode', $forum_id)) ? true : false;
		$smilies_status	= ($bbcode_status && $config['allow_smilies'] && $auth->acl_get('f_smilies', $forum_id)) ? true : false;
		$img_status		= ($bbcode_status && $auth->acl_get('f_img', $forum_id)) ? true : false;
		$url_status		= ($config['allow_post_links']) ? true : false;
		$flash_status	= ($bbcode_status && $auth->acl_get('f_flash', $forum_id) && $config['allow_post_flash']) ? true : false;
		$quote_status	= ($auth->acl_get('f_reply', $forum_id)) ? true : false;

		$post_data['topic_cur_post_id']	= 0;
		$post_data['post_subject']		= utf8_normalize_nfc($article->title);
		$message_parser->message		= utf8_normalize_nfc($forum_message);

		$post_data['username']			= utf8_normalize_nfc($post_data['username']);
		$post_data['post_edit_reason']	= '';

		$post_data['orig_topic_type']	= $post_data['topic_type'];
		$post_data['topic_type']		= POST_NORMAL;
		$post_data['topic_time_limit']	= 0;
		$post_data['icon_id']			= 0;

		$post_data['enable_bbcode']		= true;
		$post_data['enable_smilies']	= true;
		$post_data['enable_urls']		= 1;
		$post_data['enable_sig']		= true;

		if ($config['allow_topic_notify'] && $user->data['is_registered'])
		{
			$notify = (isset($_POST['notify'])) ? true : false;
		}
		else
		{
			$notify = false;
		}

		$topic_lock			= false;
		$post_lock			= false;

		$status_switch = (($post_data['enable_bbcode']+1) << 8) + (($post_data['enable_smilies']+1) << 4) + (($post_data['enable_urls']+1) << 2) + (($post_data['enable_sig']+1) << 1);
		$status_switch = ($status_switch != $check_value);

		// Parse Attachments - before checksum is calculated
		$message_parser->parse_attachments('fileupload', $mode, $forum_id, $submit, $preview, $refresh);

		// Grab md5 'checksum' of new message
		$message_md5 = md5($message_parser->message);

		// Check checksum ... don't re-parse message if the same
		$update_message = ($mode != 'edit' || $message_md5 != $post_data['post_checksum'] || $status_switch || strlen($post_data['bbcode_uid']) < BBCODE_UID_LEN) ? true : false;

		// Parse message
		if ($update_message)
		{
			if (sizeof($message_parser->warn_msg))
			{
				$error[] = implode('<br />', $message_parser->warn_msg);
				$message_parser->warn_msg = array();
			}

			$message_parser->parse($post_data['enable_bbcode'], ($config['allow_post_links']) ? $post_data['enable_urls'] : false, $post_data['enable_smilies'], $img_status, $flash_status, $quote_status, $config['allow_post_links']);

			// On a refresh we do not care about message parsing errors
			if (sizeof($message_parser->warn_msg) && $refresh)
			{
				$message_parser->warn_msg = array();
			}
		}
		else
		{
			$message_parser->bbcode_bitfield = $post_data['bbcode_bitfield'];
		}

		// Parse subject
		if (!$preview && !$refresh && utf8_clean_string($post_data['post_subject']) === '' && ($mode == 'post' || ($mode == 'edit' && $post_data['topic_first_post_id'] == $post_id)))
		{
			$error[] = $user->lang['EMPTY_SUBJECT'];
		}

		$post_data['poll_last_vote'] = 0;
		$poll = array();

		// Store message, sync counters
		// Check if we want to de-globalize the topic... and ask for new forum
		if ($post_data['topic_type'] != POST_GLOBAL)
		{
			$sql = 'SELECT topic_type, forum_id
				FROM ' . TOPICS_TABLE . "
				WHERE topic_id = $topic_id";
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			if ($row && !$row['forum_id'] && $row['topic_type'] == POST_GLOBAL)
			{
				$to_forum_id = request_var('to_forum_id', 0);

				if ($to_forum_id)
				{
					$sql = 'SELECT forum_type
						FROM ' . FORUMS_TABLE . '
						WHERE forum_id = ' . $to_forum_id;
					$result = $db->sql_query($sql);
					$forum_type = (int) $db->sql_fetchfield('forum_type');
					$db->sql_freeresult($result);

					if ($forum_type != FORUM_POST || !$auth->acl_get('f_post', $to_forum_id))
					{
						$to_forum_id = 0;
					}
				}

				if (!$to_forum_id)
				{
					include_once($phpbb_root_path . 'includes/functions_admin.' . $phpEx);

					$template->assign_vars(array(
						'S_FORUM_SELECT'	=> make_forum_select(false, false, false, true, true, true),
						'S_UNGLOBALISE'		=> true)
					);

					$submit = false;
					$refresh = true;
				}
				else
				{
					if (!$auth->acl_get('f_post', $to_forum_id))
					{
						// This will only be triggered if the user tried to trick the forum.
						trigger_error('NOT_AUTHORISED');
					}

					$forum_id = $to_forum_id;
				}
			}
		}

		// Lock/Unlock Topic
		$change_topic_status = $post_data['topic_status'];
		$perm_lock_unlock = ($auth->acl_get('m_lock', $forum_id) || ($auth->acl_get('f_user_lock', $forum_id) && $user->data['is_registered'] && !empty($post_data['topic_poster']) && $user->data['user_id'] == $post_data['topic_poster'] && $post_data['topic_status'] == ITEM_UNLOCKED)) ? true : false;

		if ($post_data['topic_status'] == ITEM_LOCKED && !$topic_lock && $perm_lock_unlock)
		{
			$change_topic_status = ITEM_UNLOCKED;
		}
		else if ($post_data['topic_status'] == ITEM_UNLOCKED && $topic_lock && $perm_lock_unlock)
		{
			$change_topic_status = ITEM_LOCKED;
		}

		if ($change_topic_status != $post_data['topic_status'])
		{
			$sql = 'UPDATE ' . TOPICS_TABLE . "
				SET topic_status = $change_topic_status
				WHERE topic_id = $topic_id
					AND topic_moved_id = 0";
			$db->sql_query($sql);

			$user_lock = ($auth->acl_get('f_user_lock', $forum_id) && $user->data['is_registered'] && $user->data['user_id'] == $post_data['topic_poster']) ? 'USER_' : '';

			add_log('mod', $forum_id, $topic_id, 'LOG_' . $user_lock . (($change_topic_status == ITEM_LOCKED) ? 'LOCK' : 'UNLOCK'), $post_data['topic_title']);
		}

		$data = array(
			'topic_title'			=> (empty($post_data['topic_title'])) ? $post_data['post_subject'] : $post_data['topic_title'],
			'topic_first_post_id'	=> (isset($post_data['topic_first_post_id'])) ? (int) $post_data['topic_first_post_id'] : 0,
			'topic_last_post_id'	=> (isset($post_data['topic_last_post_id'])) ? (int) $post_data['topic_last_post_id'] : 0,
			'topic_time_limit'		=> (int) $post_data['topic_time_limit'],
			'topic_attachment'		=> (isset($post_data['topic_attachment'])) ? (int) $post_data['topic_attachment'] : 0,
			'post_id'				=> (int) $post_id,
			'topic_id'				=> (int) $topic_id,
			'forum_id'				=> (int) $forum_id,
			'icon_id'				=> (int) $post_data['icon_id'],
			'poster_id'				=> (int) $post_data['poster_id'],
			'enable_sig'			=> (bool) $post_data['enable_sig'],
			'enable_bbcode'			=> (bool) $post_data['enable_bbcode'],
			'enable_smilies'		=> (bool) $post_data['enable_smilies'],
			'enable_urls'			=> (bool) $post_data['enable_urls'],
			'enable_indexing'		=> (bool) $post_data['enable_indexing'],
			'message_md5'			=> (string) $message_md5,
			'post_time'				=> (isset($post_data['post_time'])) ? (int) $post_data['post_time'] : $current_time,
			'post_checksum'			=> (isset($post_data['post_checksum'])) ? (string) $post_data['post_checksum'] : '',
			'post_edit_reason'		=> $post_data['post_edit_reason'],
			'post_edit_user'		=> ($mode == 'edit') ? $user->data['user_id'] : ((isset($post_data['post_edit_user'])) ? (int) $post_data['post_edit_user'] : 0),
			'forum_parents'			=> $post_data['forum_parents'],
			'forum_name'			=> $post_data['forum_name'],
			'notify'				=> $notify,
			'notify_set'			=> $post_data['notify_set'],
			'poster_ip'				=> (isset($post_data['poster_ip'])) ? $post_data['poster_ip'] : $user->ip,
			'post_edit_locked'		=> (int) $post_data['post_edit_locked'],
			'bbcode_bitfield'		=> $message_parser->bbcode_bitfield,
			'bbcode_uid'			=> $message_parser->bbcode_uid,
			'message'				=> $message_parser->message,
			'attachment_data'		=> $message_parser->attachment_data,
			'filename_data'			=> $message_parser->filename_data,
			'topic_approved'		=> (isset($post_data['topic_approved'])) ? $post_data['topic_approved'] : false,
			'post_approved'			=> (isset($post_data['post_approved'])) ? $post_data['post_approved'] : false,
		);
		
		$redirect_url = submit_post($mode, $post_data['post_subject'], $post_data['username'], $post_data['topic_type'], $poll, $data, $update_message);
		if ((!$viewtopic_link) || ($viewtopic_link == '_'))
		{
			$viewtopic_link = str_replace( DS, '/', ('.' . substr( $redirect_url, strlen(JPATH_ROOT), strlen($redirect_url)-strlen(JPATH_ROOT) ) ) );
		} else {
			$matches = array();
			preg_match( '/[\?|\&|;]t=\d+/', $redirect_url, $matches, 0, 12);
			if (!empty($matches))
			{
				$topic_id = intval(substr( $matches[0], 3, strlen($matches[0])-2 ));
			} else {
				$topic_id = 0;
			}
			$viewtopic_link = str_replace(array('$forum_id', '$topic_id'), array($forum_id, $topic_id), $viewtopic_link);
			$viewtopic_link = htmlspecialchars($viewtopic_link);
		}
		
		$a_href = '<a href="'.$viewtopic_link.'"'.($target ? ' target="'.htmlspecialchars($target).'"' : '').'>'.JText::_('Discuss on the forum').'</a>';
		if ($this->params->get('link_to_forum_top') && $article->introtext)
		{
			$article->introtext = '<div class="link-to-forum-top">'.$a_href.'</div>' . "\n" . $article->introtext;
		}
		if ($this->params->get('link_to_forum_before_readmore') && $article->introtext)
		{
			$article->introtext .= "\n" . '<div class="link-to-forum-before-readmore">'.$a_href.'</div>' . "\n";
		}
		if ($this->params->get('link_to_forum_after_readmore') && ($article->introtext || $article->fulltext))
		{
			$article->fulltext = '<div class="link-to-forum-after-readmore">'.$a_href.'</div>' . "\n" . $article->fulltext;
		}
		if ($this->params->get('link_to_forum_bottom') && $article->fulltext)
		{
			$article->fulltext .= "\n" . '<div class="link-to-forum-bottom">'.$a_href.'</div>';
		}
		
		return true;
	}

}

?>