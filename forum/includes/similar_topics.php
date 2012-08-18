<?php
/** 
* I'm request you retain the copyright notice below including the link to site author.
*
* @package Advanced similar topics
* @version $Id: similar_topics.php, v 1.0.8 2010/06/22 01:10:26 Porutchik Exp $
* @copyright (c) 2008-2010 Sergey aka Porutchik, http://forum.aeroion.ru
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	// This was an AJAX request
	define('IN_PHPBB', true);
	define('PHPBB_USE_BOARD_URL_PATH', true);
	$phpbb_root_path = '../';
	$phpEx = substr(strrchr(__FILE__, '.'), 1);
	include($phpbb_root_path . 'common.' . $phpEx);
	include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

	// Start session management
	$user->session_begin();
	$auth->acl($user->data);
	$user->setup('posting');
	
	$forum_id	= request_var('f', 0);
	$topic_title = utf8_normalize_nfc(request_var('topic_title', '', true));
	if (empty($topic_title))
	{
		exit(0);
	}
	$topic_title = utf8_htmlspecialchars($topic_title);
	$AJAXrequest = true;
}
else if (isset($topic_data))
{
	$topic_title = $topic_data['topic_title'];
	$topic_id = (int) $topic_data['topic_id'];
	$AJAXrequest = false;
}
else
{
	return;
}

if (isset($forum_id) && !$AJAXrequest)
{
	$noshow_forums_ids = explode("\n", trim($config['similar_noshow_forums_ids']));
	if (in_array($forum_id, $noshow_forums_ids))
	{
		return;
	}
}

$topic_title = cleantext(utf8_strtolower($topic_title));
$min_amount_words = ($AJAXrequest) ? (int) $config['similar_topics_min_amount_words_posting'] : (int) $config['similar_topics_min_amount_words_viewtopic'];
$check_words = (sizeof(explode(' ', $topic_title)) < $min_amount_words) ? false : true;
if (!$check_words || empty($topic_title))
{
	if ($AJAXrequest) 
	{
		exit(0);
	}
	else 
	{
		return;
	}
}

// Get a list of all forums the user has permissions to read
$auth_f_read = array_keys($auth->acl_getf('f_read', true));
if ( trim($config['similar_ignore_forums_ids']) != '' )
{
	$auth_f_read = array_diff($auth_f_read, explode("\n", $config['similar_ignore_forums_ids']));
}
// Get a list of all forums the user has minimum permissions
$auth_f_read = array_diff($auth_f_read, array_keys($auth->acl_getf('!f_list', true)));

$use_sql = $AJAXrequest || !(bool) $config['similar_use_cache'];

/**
* Retrieves cached search similar topics results
*
*/
//Create unique cache name
$cache_name = '_similar_topic_' . $forum_id . '_' . $topic_id . '_' . crc32($topic_title);
if ((bool) $config['similar_use_cache'])
{
	$use_sql = (($similar_topics = $cache->get($cache_name)) === false);
}

if ($use_sql)
{
	// no search results cached for this cache name or AJAX mode
	if ( $config['similar_sort_type'] == 'time' )
	{
		$sql_sort = 't.topic_last_post_time';
	}
	else
	{
		$sql_sort = 'relevance';
	}

	$sql_match_common = 'MATCH (t.topic_title) AGAINST (\'' . $db->sql_escape($topic_title) . '\'';
	$sql_match_select = $sql_match_common . ')';

	if ( $config['similar_boolean_mode'] )
	{
		$sql_match_where = $sql_match_common . '  IN BOOLEAN MODE)';
	}
	else
	{
		$sql_match_where = $sql_match_common . ')' . (( (real) $config['similar_topics_min_relevance'] != 0 ) ? ' >= ' . (real) $config['similar_topics_min_relevance'] : '');
	}

	$sql_match_where .= ' AND ' . $db->sql_in_set('f.forum_id', $auth_f_read);

	$sql_array = array(
		'SELECT'	=> 'f.forum_id, f.forum_name, t.*, u.user_id, u.username, u.user_colour, ' . $sql_match_select . ' AS relevance',

		'FROM'		=> array(
			TOPICS_TABLE	=> 't',
		),

		'LEFT_JOIN'	=> array(
			array(
				'FROM'	=>	array(USERS_TABLE	=> 'u'),
				'ON'	=> 'u.user_id = t.topic_poster'
			),
			array(
				'FROM'	=>	array(FORUMS_TABLE	=> 'f'),
				'ON'	=> 'f.forum_id = t.forum_id'
			),
		),

		'WHERE'		=> $sql_match_where . '
			AND t.topic_status <> ' . ITEM_MOVED . ((!$AJAXrequest) ? " AND t.topic_id <> $topic_id" : ''),

		'GROUP_BY'	=> 't.topic_id',

		'ORDER_BY'	=> $sql_sort,
	);

	$sql = $db->sql_build_query('SELECT', $sql_array);
	$result = $db->sql_query_limit($sql, max((int) $config['similar_max_topics'], 1));
	$similar_topics = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	
    /**
	* Caches $similar_topics
    *
    */
	if (!$AJAXrequest && (bool) $config['similar_use_cache'] && sizeof($similar_topics))
	{
		$cache->put($cache_name, $similar_topics, (int) $config['similar_cache_time']);
	}
}

$count_similar = sizeof($similar_topics);
if ( $count_similar )
{
	$memberlist_base_url = "memberlist.$phpEx?mode=viewprofile";
	
	// Grab icons
	$icons = $cache->obtain_icons();

	if ($AJAXrequest)
	{
		// application/xhtml+xml not used because of IE
		@header('Content-type: text/html; charset=UTF-8');
		$template->assign_vars(array(
			'T_ICONS_PATH'	=> generate_board_url() . '/' . $config['icons_path'] . '/'
		));
	}
	$template->set_filenames(array(
		'similar_viewtopic' => 'similar_viewtopic.html')
	);
	$template->assign_vars(array(
		'LAST_POST_IMG'	=> $user->img('icon_topic_latest', 'VIEW_LATEST_POST'),
	));
	
	$forums_auth = array();
	foreach ($similar_topics as $similar)
	{
		$similar_forum_id = $similar['forum_id'];
		if (!in_array($similar_forum_id, $auth_f_read))
		{
			continue;
		}
		
		// Include those forums the user is having approve access to.
		if (!isset($forums_auth[$similar_forum_id]))
		{
			$forums_auth[$similar_forum_id]['m_approve'] = $auth->acl_get('m_approve', $similar_forum_id);
		}
		$similar['topic_title'] = censor_text($similar['topic_title']);
		$similar_topic_id = $similar['topic_id'];
		$replies = ($forums_auth[$similar_forum_id]['m_approve']) ? $similar['topic_replies_real'] : $similar['topic_replies'];

		$folder_img = $folder_alt = $topic_type = '';
		topic_status($similar, $replies, false, $folder_img, $folder_alt, $topic_type);

		$similar_forum_url	= append_sid("viewforum.$phpEx", "f=$similar_forum_id");
		$similar_topic_url	= append_sid("viewtopic.$phpEx", "f=$similar_forum_id&amp;t=$similar_topic_id");
		$similar_last_post_url	= append_sid("viewtopic.$phpEx", "p={$similar['topic_last_post_id']}#p{$similar['topic_last_post_id']}");
		
		$similar_user = get_username_string('full', $similar['user_id'], $similar['username'], $similar['user_colour'], $similar['username']);

		$template->assign_block_vars('similar', array(
			'TOPIC_TITLE'			=> $similar['topic_title'],
			'TOPIC_FOLDER_IMG'		=> $user->img($folder_img, $folder_alt),
			'TOPIC_FOLDER_IMG_SRC'	=> $user->img($folder_img, $folder_alt, false, '', 'src'),
			'TOPIC_ICON_IMG'		=> (!empty($icons[$similar['icon_id']])) ? $icons[$similar['icon_id']]['img'] : '',
			'TOPIC_ICON_IMG_WIDTH'	=> (!empty($icons[$similar['icon_id']])) ? $icons[$similar['icon_id']]['width'] : '',
			'TOPIC_ICON_IMG_HEIGHT'	=> (!empty($icons[$similar['icon_id']])) ? $icons[$similar['icon_id']]['height'] : '',
			'TOPIC_REPLIES'			=> $replies,
			'TOPIC_VIEWS'			=> $similar['topic_views'],
			'TOPIC_AUTHOR'			=> get_username_string('no_profile', $similar['user_id'], $similar['username'], $similar['user_colour']),
			'TOPIC_AUTHOR_FULL'		=> $similar_user,
			'TOPIC_AUTHOR_COLOUR'	=> get_username_string('colour', $similar['user_id'], $similar['username'], $similar['user_colour']),
			'FIRST_POST_TIME'		=> $user->format_date($similar['topic_time']),
			'PAGINATION'			=> topic_generate_pagination($replies, $similar_topic_url),
			'LAST_POST_AUTHOR'			=> get_username_string('no_profile', $similar['topic_last_poster_id'], $similar['topic_last_poster_name'], $similar['topic_last_poster_colour']),
			'LAST_POST_AUTHOR_COLOUR'	=> get_username_string('colour', $similar['topic_last_poster_id'], $similar['topic_last_poster_name'], $similar['topic_last_poster_colour']),
			'LAST_POST_AUTHOR_FULL'		=> get_username_string('full', $similar['topic_last_poster_id'], $similar['topic_last_poster_name'], $similar['topic_last_poster_colour']),
			'LAST_POST_TIME'		=> $user->format_date($similar['topic_last_post_time']),
			'FORUM_TITLE'			=> $similar['forum_name'],
			'S_TOPIC_TYPE'			=> $similar['topic_type'],
			'S_TOPIC_GLOBAL'		=> (!$similar_forum_id) ? true : false,
			'U_VIEW_TOPIC'			=> $similar_topic_url,
			'U_VIEW_FORUM'			=> $similar_forum_url,
			'U_LAST_POST'			=> $similar_last_post_url,
			'U_LAST_POST_AUTHOR'	=> append_sid(get_username_string('profile', $similar['topic_last_poster_id'], $similar['topic_last_poster_name'], $similar['topic_last_poster_colour'], false, $memberlist_base_url)),
			'U_TOPIC_AUTHOR'		=> append_sid(get_username_string('profile', $similar['user_id'], $similar['username'], $similar['user_colour'], false, $memberlist_base_url)),
			)
		);
	}
	if ($AJAXrequest)
	{
		$template->display('similar_viewtopic');
	}
}

/**
* Split the string into words, clean them up, remove words to ignore.
*/
function cleantext($entry)
{
	global $user, $config, $phpEx;
	
	// Remove non-alphanumeric characters
	$entry = strip_tags(utf8_case_fold_nfc($entry));
	$entry = preg_replace('/&(#*)[a-z0-9]+;/si', '', $entry);
	// Other control characters
	$entry = preg_replace('#(?:[\x00-\x1F\x7F]+|(?:\xC2[\x80-\x9F])+)#', '', $entry);
	
	$entry_list = array_unique(explode(' ', $entry));
	foreach ($entry_list as $k => $word) 
	{
		if ( (utf8_strlen($word) <= 2) ) 
		{
			unset($entry_list[$k]);
		}
	}
	
	if ( $config['similar_stopwords'] && !empty($entry_list))
	{ 
		// check against stopwords start 
		if (file_exists("{$user->lang_path}{$user->lang_name}/search_ignore_words.$phpEx"))
		{
			$stopword_list = array();
			// include the file containing ignore words
			include("{$user->lang_path}{$user->lang_name}/search_ignore_words.$phpEx");
			$stopword_list = $words;
			unset($words);
			if ( !empty($stopword_list) )
			{
				// Remove words to be ignored
				$entry_list = array_diff($entry_list, $stopword_list);
			}
		}
		// check against stopwords end
	}

	// we need to reduce multiple spaces to a single one
	$entry = trim(preg_replace('# {2,}#', ' ', implode(' ', $entry_list)));

	return $entry;
}

?>
