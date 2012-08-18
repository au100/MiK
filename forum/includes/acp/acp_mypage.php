<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_mypage
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $db, $user, $auth, $template, $cache;
		global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;
		
		$submit = (isset($_POST['submit'])) ? true : false;
		
		// get all mypage config options and values
		$mypage_config = array();
		foreach ($config as $key => $value)
		{
			$pieces = explode("_", $key);
			if ($pieces['0'] != 'mypage')
			{
				continue;
			}
			$mypage_config[] = $key;
			
			if ($key == 'mypage_custom_footer')
			{
				$template->assign_vars(array(strtoupper($key) => htmlspecialchars_decode($value)));
			}
			else
			{
				$template->assign_vars(array(strtoupper($key) => $value));
			}
		}
		
		// add new data to database
		if ($submit)
		{
			foreach ($mypage_config as $key => $value)
			{
				if (isset($_POST[$value]))
				{
					$val = request_var($value, '0', true);
					set_config($value, $val);
				}
			}
			trigger_error($user->lang['MP_ACP_UPDATED'] . adm_back_link($this->u_action));
		}
		
		if ($mode == 'overview')
		{
			// count created pages
			$result = $db->sql_query( "SELECT mypage_id FROM " . MYPAGE_TABLE );
			$rows = $db->sql_fetchrowset($result);
			$db->sql_freeresult($result);
			$page_count = count($rows);
			
			// count comments
			$result = $db->sql_query( "SELECT comment_id FROM " . MYPAGE_COMMENTS_TABLE );
			$rows = $db->sql_fetchrowset($result);
			$db->sql_freeresult($result);
			$comment_count = count($rows);
			
			// count uploads
			$result = $db->sql_query( "SELECT upload_id FROM " . MYPAGE_UPLOADS_TABLE );
			$rows = $db->sql_fetchrowset($result);
			$db->sql_freeresult($result);
			$upload_count = count($rows);
			
			// count ratings
			$result = $db->sql_query( "SELECT rating_id FROM " . MYPAGE_RATINGS_TABLE );
			$rows = $db->sql_fetchrowset($result);
			$db->sql_freeresult($result);
			$rating_count = count($rows);
			
			$template->assign_vars(array(
				'PAGES'		=> $page_count,
				'COMMENTS'	=> $comment_count,
				'UPLOADS'	=> $upload_count,
				'RATINGS'	=> $rating_count,
			));
		}

		$this->tpl_name = 'mypage/acp_' . $mode;
		$this->page_title = $user->lang['MP_MYPAGE'];

	}
}

?>