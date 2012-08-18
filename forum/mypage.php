<?php

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
include $phpbb_root_path. 'includes/functions_mypage.php';

// if looking for an image, just display it
$image = request_var('image', '0');
if ($image)
{
	// get image data
	$sql = "SELECT * 
		FROM " . MYPAGE_UPLOADS_TABLE . " 
		WHERE upload_id = '" . (int) $image . "'";
		
	$result = $db->sql_query($sql);
	$image_data = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	
	// update view count
	$sql = "UPDATE " . MYPAGE_UPLOADS_TABLE . "
		SET views = '" . ($image_data['views'] + '1')  ."'
			WHERE upload_id = '" . (int) $image . "'";
	$db->sql_query($sql);
	
	// display the image
	$fp = fopen($phpbb_root_path.'images/mypage_uploads/'.$image_data['save_name'], "rb");
	header("Content-type: {$image_data['mime']}");
	fpassthru($fp);
	exit;
}

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// some needed variables
$page_id	= request_var('id', '0');
$show_comments	= (isset($_GET['comment'])) ? true : false;
$show_rate	= (isset($_GET['rate'])) ? true : false;
$submit		= (isset($_POST['submit'])) ? true : false;
$comment_count	= '0';
$edit_id	= request_var('edit_comm', '0');
$delete_id	= request_var('del_comm', '0');
//$user->lang['imageset_path']
//$user->lang['img_array']['icon_post_delete']['image_filename']

if (!$page_id)
{
	$message = $user->lang['MP_NO_PAGE'];
	trigger_error($message);
}

// get all page information
$result = $db->sql_query("SELECT * FROM " . MYPAGE_TABLE . " WHERE mypage_id = '" . $page_id . "'");
$page = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

if (!$page)
{
	$message = $user->lang['MP_NO_PAGE'];
	trigger_error($message);
}

if ($submit && $show_comments && $_POST['comment'])
{
	// can this person add a comment?
	if (!$auth->acl_get('u_mp_comments'))
	{
		trigger_error($user->lang['MP_NO_PERMISSION']);
	}
	
	// here we handle adding a comment
	$uid = $bitfield = $options = '';
	$comment = request_var('comment', '0');
	generate_text_for_storage($comment, $uid, $bitfield, $options, false, true, true);
			
	$sql_ary = array(
		'user_id'		=> $user->data['user_id'],
		'comment_username'	=> $user->data['username'],
		'mypage_id'		=> $page_id,
		'comment'		=> $comment,
		'comment_time'		=> time(),
		'page_owner_id'		=> $page['owner_id'],
		'comment_uid'		=> $uid,
		'comment_bitfield'	=> $bitfield,
		'comment_options'	=> $options,
	);
			
	$db->sql_query('INSERT INTO ' . MYPAGE_COMMENTS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
			
	$url = 'mypage.php?comment=1&id=' . $page_id . '#comments';
	meta_refresh(3, $url);
	$message = $user->lang['MP_COMMENT_ADDED'] . '<br /><br /><a href="' . $url . '">' . $user->lang['MP_RETURN'] . '</a>';
	trigger_error($message);
}

if ($submit && $show_rate)
{
	// can this person add a comment?
	if (!$auth->acl_get('u_mp_ratings'))
	{
		trigger_error($user->lang['MP_NO_PERMISSION']);
	}
	
	// remove comments by this user
	$db->sql_query("DELETE FROM " . MYPAGE_RATINGS_TABLE . " WHERE mypage_id = '" . $page_id . "' && user_id = '" . $user->data['user_id'] . "'");
	
	// here we handle adding a rating
	$sql_ary = array(
		'user_id'		=> $user->data['user_id'],
		'mypage_id'		=> $page_id,
		'rating'		=> request_var('rating', '3'),
		'page_owner_id'		=> $page['owner_id'],
	);
	
	$db->sql_query('INSERT INTO ' . MYPAGE_RATINGS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
	
	$url = 'mypage.php?id=' . $page_id;
	meta_refresh(3, $url);
	$message = $user->lang['MP_RATING_ADDED'] . '<br /><br /><a href="' . $url . '">' . $user->lang['MP_RETURN'] . '</a>';
	trigger_error($message);
}

if ($submit && $edit_id && $_POST['editcomment'])
{
	// can this person edit this comment?
	$result = $db->sql_query("SELECT user_id FROM " . MYPAGE_COMMENTS_TABLE . " WHERE comment_id = '" . $edit_id . "'");
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	
	if (!$auth->acl_get('m_mp_edit') && $row['user_id'] != $user->data['user_id'])
	{
		trigger_error($user->lang['MP_NO_PERMISSION']);
	}
	
	// update the comment
	$uid = $bitfield = $options = '';
	$comment = request_var('editcomment', '0');
	generate_text_for_storage($comment, $uid, $bitfield, $options, false, true, true);
			
	$sql_ary = array(
		'comment'		=> $comment,
		'comment_uid'		=> $uid,
		'comment_bitfield'	=> $bitfield,
		'comment_options'	=> $options,
	);
	
	$db->sql_query('UPDATE ' . MYPAGE_COMMENTS_TABLE . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . " WHERE comment_id = '" . $edit_id . "'" );
			
	$url = 'mypage.php?comment=1&id=' . $page_id . '&sid=' . $user->data['session_id'] . '#comment' . $edit_id;
	meta_refresh(3, $url);
	$message = $user->lang['MP_COMMENT_UPDATED'] . '<br /><br /><a href="' . $url . '">' . $user->lang['MP_RETURN'] . '</a>';
	trigger_error($message);
}

if ($delete_id)
{
	
	//echo 'in delete'; exit;
	// can this person delete this comment?
	$result = $db->sql_query("SELECT user_id FROM " . MYPAGE_COMMENTS_TABLE . " WHERE comment_id = '" . $delete_id . "'");
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	
	if (!$auth->acl_get('m_mp_edit') && $row['user_id'] != $user->data['user_id'])
	{
		trigger_error($user->lang['MP_NO_PERMISSION']);
	}
	
	$db->sql_query("DELETE FROM " . MYPAGE_COMMENTS_TABLE . " WHERE comment_id = '" . $delete_id . "'");
	
	$url = 'mypage.php?comment=1&id=' . $page_id . '#comments';
	meta_refresh(3, $url);
	$message = $user->lang['MP_COMMENT_DELETED'] . '<br /><br /><a href="' . $url . '">' . $user->lang['MP_RETURN'] . '</a>';
	trigger_error($message);
}


require($phpbb_root_path . 'includes/functions_display.' . $phpEx);

if ($config['mypage_use_board_header'])
{
	$template->assign_block_vars('navlinks', array(
		'FORUM_NAME'	=> $page['mypage_title'],
		'U_VIEW_FORUM'	=> 'mypage.php?id=' . $page_id,
	));
}

// get rating img
$rate_img = '';
$rate_cnt = '0';
$rate_number = '0';
$rating = '0';
$user_rated = false;
$rate_text = '';
if ($page['allow_ratings'])
{
	$rate_text = $user->lang['MP_RATE_PAGE'];
	
	$result = $db->sql_query("SELECT * FROM " . MYPAGE_RATINGS_TABLE . " WHERE mypage_id = '" . $page_id . "'");
	while( $row = $db->sql_fetchrow($result))
	{
		$rate_cnt++;
		$rate_number = $rate_number + $row['rating'];
		if ($row['user_id'] == $user->data['user_id'])
		{
			$user_rated = $row['rating'];
			$rate_text = $user->lang['MP_CHANGE_RATE'];
		}
	}
	$db->sql_freeresult($result);
	
	if ($rate_cnt)
	{
		if ($rate_cnt == '1')
		{
			$rating = $rate_number;
		}
		else
		{
			$rating = round($rate_number / $rate_cnt);
		}
	}
	else
	{
		$rating = 'none';
	}
	
	$rate_img = 'images/mypage_ratings/' . $config['mypage_rate_' . $rating] ;
	
}
// create our css string
$css = 'background-color: ' . $page['bg_color'] . '; ';
$css .= 'font-size: ' .  $page['fnt_size'] . '; ';
$css .= 'color: ' . $page['fnt_color']  . '; ';
if ($page['bg_img_url'])
{
	$css .= 'background-image: url(' . $page['bg_img_url']  . '); ';
	$css .= 'background-repeat: ' .  $page['bg_style'] . ';';
	$css .= 'background-attachment: ' . $page['bg_style_fix'] . '; ';
}

// get contents
$content	= generate_text_for_display($page['content'], $page['bbcode_uid'], $page['bbcode_bitfield'], $page['bbcode_options']);
$content	= ($page['parse_html']) ? htmlspecialchars_decode($content) : $content ;

if ($page['allow_comments'])
{
	// count comments for this page
	$sql = "SELECT comment_id 
		FROM " . MYPAGE_COMMENTS_TABLE . " 
			WHERE mypage_id = '" . $page_id . "'";
					
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	$comment_count = count($rows);

	if ($show_comments)
	{
		// this needs to be changed to get user data from the id in the database instead of the username field in the mypage comments table
		$result = $db->sql_query("SELECT * FROM " . MYPAGE_COMMENTS_TABLE . " WHERE mypage_id = '" . $page_id . "'");
		while ($comment = $db->sql_fetchrow($result))
		{
			$in_edit = (($auth->acl_get('m_mp_edit') || $comment['user_id'] == $user->data['user_id']) && $edit_id == $comment['comment_id']) ? true : false ;
			if ($in_edit)
			{
				$txt = generate_text_for_edit($comment['comment'], $comment['comment_uid'], $comment['comment_options']);
				$comment_txt = $txt['text'];
			}
			else
			{
				$comment_txt = generate_text_for_display($comment['comment'], $comment['comment_uid'], $comment['comment_bitfield'], $comment['comment_options']);
			}
			$delete_url = './mypage.php?id=' . $page_id . '&del_comm=' . $comment['comment_id'] . '&sid=' . $user->data['session_id'] ;
			$edit_url = './mypage.php?id=' . $page_id . '&edit_comm=' . $comment['comment_id'] . '&sid=' . $user->data['session_id'] . '&comment=1#comment' . $comment['comment_id'] ;
			$user_name = $comment['comment_username'];
			$time = $user->format_date($comment['comment_time']);
			
			$template->assign_block_vars('comment', array(
				'USER'		=> $user_name,
				'ID'		=> $comment['comment_id'],
				'COMMENT'	=> $comment_txt,
				'TIME'		=> $time,
				'BY_STRING'	=> str_replace(array('%1', '%2'), array($user_name, $time), $user->lang['MP_COMMENT_BY_STRING']),
				'DELETE_URL'	=> ($auth->acl_get('m_mp_edit') || $comment['user_id'] == $user->data['user_id']) ? $delete_url : false ,
				'EDIT_URL'	=> ($auth->acl_get('m_mp_edit') || $comment['user_id'] == $user->data['user_id']) ? $edit_url : false ,
				'IN_EDIT'	=> $in_edit ,
			));
		}
		$db->sql_freeresult($result);
	}
}

$template->assign_vars(array(
	'USE_BOARD_HEADER'		=> $config['mypage_use_board_header'],
	'MYPAGE_CSS'			=> $css,
	'MYPAGE_TITLE'			=> $page['mypage_title'],
	'COMMENT_FORM_URL'		=> 'mypage.php?comment=1&id=' . $page_id . '&sid=' . $user->data['session_id'] . '#comments',
	'RATING_FORM_URL'		=> 'mypage.php?rate=1&id=' . $page_id . '&sid=' . $user->data['session_id'] . '#ratings',
	'SHOW_COMMENT_FORM'		=> ($auth->acl_get('u_mp_comments')) ? true : false ,
	'CONTENT'			=> $content,
	'FOOTER'			=> ($config['mypage_custom_footer']) ? htmlspecialchars_decode($config['mypage_custom_footer']) : false ,
	//'SHOW_COMMENT_BAR'		=> $page['allow_comments'] || $page['allow_ratings'],
	'COMMENTS_ALLOWED'		=> $page['allow_comments'],
	'SHOW_COMMENTS'			=> $show_comments,
	'RATINGS_ALLOWED'		=> $page['allow_ratings'],
	'SHOW_RATINGS'			=> $show_rate,
	'RATING_IMG'			=> $rate_img,
	'RATE_LINK'			=> ($page['allow_ratings'] && $auth->acl_get('u_mp_ratings')) ?  '<a href="mypage.php?rate=1&id=' . $page_id  . '&sid=' . $user->data['session_id'] . '#ratings">' .  $rate_text . '</a>' : '',
	'COMMENT_COUNT_STRING'		=> ($page['allow_comments']) ? strtr($user->lang['MP_COMMENT_COUNT_STRING'], '%', $comment_count) : '' ,
	'COMMENT_LEAVE_VIEW_URL'	=> 'mypage.php?comment=1&id=' . $page_id . '#comments',
	'RATE_IMG_0'			=> $config['mypage_rate_0'],
	'RATE_IMG_1'			=> $config['mypage_rate_1'],
	'RATE_IMG_2'			=> $config['mypage_rate_2'],
	'RATE_IMG_3'			=> $config['mypage_rate_3'],
	'RATE_IMG_4'			=> $config['mypage_rate_4'],
	'RATE_IMG_5'			=> $config['mypage_rate_5'],
	'USER_RATING'			=> ($user_rated) ? $user_rated : '3' ,
));




page_header($page['mypage_title']);
$template->set_filenames(array('body' => 'mypage/mypage.html'));
page_footer();		
			

?>
