<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

class ucp_mypage
{
   var $u_action;
   var $new_config;
   function main($id, $mode)
   {
		global $db, $user, $auth, $template, $table_prefix;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		$submit		= (isset($_POST['submit'])) ? true : false;
		$delete		= request_var('delete', '0');
		$page_id	= request_var('page_id', '0');
		$url		= $this->u_action . '&sid=' . $user->data['session_id'] ;
		
		include $phpbb_root_path . 'includes/functions_mypage.php';
		
		$template->assign_vars(array(
			'IN_UCP'		=> 'true',
			'MODE'			=> $mode,
			'BASIC_REDIRECT'	=> $url,
			// fix for subsilver2
			'S_UCP_ACTION'		=> $url,
			'S_FORM_ENCTYPE'	=> ($mode == 'uploads') ? ' enctype="multipart/form-data"' : '' ,
		));
		
		switch ($mode)
		{
			case 'overview':
			
				if ($delete)
				{
					if (confirm_box(true))
					{

						$sql = "SELECT owner_id FROM " . $table_prefix . "mypage WHERE mypage_id = '" . $delete . "'";
						$result = $db->sql_query($sql);
						$row = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);
					
						if ($row['owner_id'] != $user->data['user_id'])
						{
							trigger_error($user->lang['MP_NO_PERMISSION']);
						}
						
						$sql = "DELETE FROM " . MYPAGE_TABLE ." WHERE mypage_id='" . $delete . "'";
						$db->sql_query($sql);
						
						meta_refresh(3, $url);
						$message = $user->lang['MP_PAGE_DELETED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
						trigger_error($message);
					
					}
					else
					{
						$s_hidden_fields = build_hidden_fields(array(
							'delete'		=> $delete,
						));
		
						// display mode
						confirm_box(false, $user->lang['MP_DELETE_CONFIRM'], $s_hidden_fields);
					}
				}
				
				if ($submit)
				{
					// set selected id back to 0
					$sql = "UPDATE " . USERS_TABLE . " 
						SET user_selected_mypage = '0' 
							WHERE user_id = '" . $user->data['user_id'] . "'";
								
					$db->sql_query($sql);
					
					// here we need to update the order
					foreach ($_POST['order'] as $key => $value)
					{
						$sql = "UPDATE " . MYPAGE_TABLE . " 
							SET mypage_order = '" . $value . "' 
								WHERE owner_id = '" . $user->data['user_id'] . "' 
								&& mypage_id = '" . $key . "'";
								
						$db->sql_query($sql);
						
						// set selected mypage (for viewtopic)
						if ($value == '1')
						{
							$sql = "UPDATE " . USERS_TABLE . " 
								SET user_selected_mypage = '" . $key . "' 
									WHERE user_id = '" . $user->data['user_id'] . "'";
								
							$db->sql_query($sql);
						}
					}

					meta_refresh(3, $url);
					$message = $user->lang['MP_PAGE_ORDER_UPDATED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
					trigger_error($message);
				}
				
				$page_count = mp_page_count($user->data['user_id']);
				
				$template->assign_vars(array(
					'PAGES'			=> $page_count ,
					'PAGE_COUNT'		=> $page_count . ' / ' . mp_get_allowed_pages($user->data['user_id']),
					'UPLOAD_COUNT'		=> mp_uploads_count($user->data['user_id']) . ' / ' . mp_get_allowed_uploads($user->data['user_id']),
					'COMMENT_COUNT'		=> mp_comment_count($user->data['user_id']),
					'RATINGS_COUNT'		=> mp_ratings_count($user->data['user_id']),
					'SHOW_PAGE_LIST'	=> ($page_count) ? true : false ,
					'UPLOADS_ALLOWED'	=> ($auth->acl_get('u_mp_uploads_1') || $auth->acl_get('u_mp_uploads_2') || $auth->acl_get('u_mp_uploads_3')) ? true : false,
					'COMMENTS_ALLOWED'	=> ($auth->acl_get('u_mp_own_comments')) ? true : false,
					'RATINGS_ALLOWED'	=> ($auth->acl_get('u_mp_own_ratings')) ? true : false,
				));
				
				// create page list
				$sql = "SELECT * FROM " . $table_prefix . "mypage WHERE owner_id = '" . $user->data['user_id'] . "' ORDER BY mypage_order ASC";
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('pages', array(
						'PAGE_ID'	=> $row['mypage_id'],
						'PAGE_TITLE'	=> $row['mypage_title'],
						'VIEW_URL'	=> $phpbb_root_path . 'mypage.php?id=' . $row['mypage_id'] . '&sid=' . $user->data['session_id'] ,
						'EDIT_URL'	=> $phpbb_root_path . 'ucp.php?i=mypage&mode=edit&page_id=' . $row['mypage_id'] . '&sid=' . $user->data['session_id'] ,
						'DELETE_URL'	=> $this->u_action . '&delete=' . $row['mypage_id'] . '&sid=' . $user->data['session_id'] ,
						'PAGE_ORDER'	=> $row['mypage_order'],
						'COMMENTS'	=> mp_comment_count($user->data['user_id'], $row['mypage_id']),
						'RATING'	=> '<img src="' . mp_get_rating($row['mypage_id']) . '" />',
					));
				}
				$db->sql_freeresult($result);
				
				$page_title = $user->lang['MY_OVERVIEW_TITLE'];
				
			break;
			
			case 'add':
				
				$url_2 = './ucp.php?i=mypage&sid=' . $user->data['session_id'] ;
			
				if (mp_page_count($user->data['user_id']) >= mp_get_allowed_pages($user->data['user_id']))
				{
					meta_refresh(10, $url_2);
					$message = $user->lang['MP_PAGE_LIMIT_REACHED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
					trigger_error($message);
				}
			
				if ($submit)
				{
					$title	= request_var('title', 'no title', true);
					
					mp_create($user->data['user_id'], $title);

					//addition was good
					meta_refresh(3, $url_2);
					$message = $user->lang['MP_PAGE_ADDED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
					trigger_error($message);
				}
				
				$page_title = $user->lang['MY_ADD_PAGE_TITLE'];
				
			break;
			
			case 'edit':
				
				$user->add_lang('posting');

				if ($page_id)
				{
					// do the edit page stuff here
					include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);
					include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
					
					$page = mp_aquire_data($page_id);
					
					// does this person own this page?
					if ($page['owner_id'] != $user->data['user_id'])
					{
						trigger_error($user->lang['MP_NO_PERMISSION']);
					}
					
					if ($submit)
					{
						// update the page
						$message = request_var('message', '', true);
						$uid = $bitfield = $options = '';
						$parse_bbcode	= request_var('parse_bbcode', '0');
						$parse_url	= request_var('parse_url', '0');
						$parse_smiles	= request_var('parse_smiles', '0');
						generate_text_for_storage($message, $uid, $bitfield, $options, $parse_bbcode, $parse_url, $parse_smiles);
						$background_img = request_var('bg_img_url', '0', true);
						
						$sql_ary = array(
							'allow_comments'	=> ($auth->acl_get('u_mp_own_comments')) ? request_var('allow_comments', '0') : '0' ,
							'allow_ratings'		=> ($auth->acl_get('u_mp_own_ratings')) ? request_var('allow_ratings', '0') : '0' ,
							'parse_bbcode'		=> $parse_bbcode,
							'parse_html'		=> ($auth->acl_get('u_mp_use_html')) ? request_var('parse_html', '0') : '0' ,
							'parse_smiles'		=> $parse_smiles,
							'parse_url'		=> $parse_url,
							'bg_color'		=> request_var('bg_color', 'White'),
							'bg_img_url'		=> ($background_img != '') ? $background_img : '0' ,
							'bg_style'		=> request_var('bg_style', 'repeat'),
							'bg_style_fix'		=> request_var('bg_style_fix', 'scroll'),
							'fnt_size'		=> request_var('fnt_size', '0'),
							'fnt_color'		=> request_var('fnt_color', '0'),
							'mypage_title'		=> request_var('mypage_title', '0', true),
							'content'		=> $message,
							'bbcode_uid'		=> $uid,
							'bbcode_bitfield'	=> $bitfield,
							'bbcode_options'	=> $options,
						);
						
						$sql = 'UPDATE ' . MYPAGE_TABLE . '
							SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
								WHERE mypage_id = ' . (int) $page_id;

						$db->sql_query($sql);

						meta_refresh(3, $url);
						$message = $user->lang['MP_PAGE_EDITED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
						trigger_error($message);
					}
					
					$content = generate_text_for_edit($page['content'], $page['bbcode_uid'], $page['bbcode_options']);
					
					foreach ($user->lang['MYPAGE_COLORS'] as $key => $value)
					{
						$template->assign_block_vars('select_bg_color', array(
							'VAL'	=> $key,
							'SEL'	=> ($key == $page['bg_color']) ? 'selected="yes"' : '',
							'LANG'	=> $value,
						));

						$template->assign_block_vars('select_fnt_color', array(
							'VAL'	=> $key,
							'SEL'	=> ($key == $page['fnt_color']) ? 'selected="yes"' : '',
							'LANG'	=> $value,
						));
					}

					foreach ($user->lang['MYPAGE_FNT_SIZE'] as $key => $value)
					{
						$template->assign_block_vars('select_fnt_size', array(
							'VAL'	=> $key,
							'SEL'	=> ($key == $page['fnt_size']) ? 'selected="yes"' : '',
							'LANG'	=> $value,
						));
					}
					
					$template->assign_vars(array(
						'VIEW'			=> 'page_edit',
						'SHOW_ALLOW_COMMENTS'	=> ($auth->acl_get('u_mp_own_comments')) ? true : false ,
						'SHOW_ALLOW_RATINGS'	=> ($auth->acl_get('u_mp_own_ratings')) ? true : false ,
						'SHOW_PARSE_URL'	=> true,
						'SHOW_PARSE_SMILES'	=> true,
						'SHOW_PARSE_BBCODE'	=> true,
						'SHOW_PARSE_HTML'	=> ($auth->acl_get('u_mp_use_html')) ? true : false ,
						
						'S_BBCODE_ALLOWED'	=> true,
						'S_LINKS_ALLOWED'	=> true,
						'SHOW_UPLOADS'		=> (mp_get_allowed_uploads($user->data['user_id']) && mp_uploads_count($user->data['user_id']) > '0') ? true : false,
						'MP_ALLOW_COMMENTS'	=> $page['allow_comments'],
						'MP_ALLOW_RATINGS'	=> $page['allow_ratings'],
						'MP_MYPAGE_TITLE'	=> $page['mypage_title'],
						'MP_BG_IMG_URL'		=> $page['bg_img_url'],
						'MP_BG_STYLE'		=> $page['bg_style'],
						'MP_BG_STYLE_FIX'	=> $page['bg_style_fix'],
						'MP_CONTENT'		=> $content['text'],
						'MP_MYPAGE_ID'		=> $page_id,
						
						'MP_PARSE_HTML'		=> $page['parse_html'],
						'MP_PARSE_BBCODE'	=> $page['parse_bbcode'],
						'MP_PARSE_SMILES'	=> $page['parse_smiles'],
						'MP_PARSE_URL'		=> $page['parse_url'],
						
						'COMMENTS_URL'		=> addslashes($config['server_protocol'] . $config['server_name'] . $config['script_path'] . '/mypage.php?mode=comments&id=' . $page_id),
					));
					
					// get all uploads if needed
					//if ($show_uploads)
					//{
						$sql = "SELECT * FROM " . MYPAGE_UPLOADS_TABLE . " 
							WHERE owner_id = '" . $user->data['user_id'] . "'";
			
						$result = $db->sql_query($sql);
						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('uploads', array(
								'TITLE'		=> $row['upload_title'],
								'ID'		=> $row['upload_id'],
								'URL'		=> addslashes($config['server_protocol'] . $config['server_name'] . $config['script_path'] . '/mypage.php?image=' . $row['upload_id']),
							));
						}
					//}
					
					display_custom_bbcodes();
				}
				else
				{
					// do the select a page stuff here
					$template->assign_vars(array(
						'VIEW'			=> 'page_select',
					));
					
					// create page list
					$sql = "SELECT * FROM " . $table_prefix . "mypage WHERE owner_id = '" . $user->data['user_id'] . "' ORDER BY mypage_order ASC";
					$result = $db->sql_query($sql);
					while ($row = $db->sql_fetchrow($result))
					{
						$template->assign_block_vars('pages', array(
							'PAGE_ID'	=> $row['mypage_id'],
							'PAGE_TITLE'	=> $row['mypage_title'],
							'SELECT_URL'	=> $this->u_action . '&page_id=' . $row['mypage_id'] . '&sid=' . $user->data['session_id'] ,
						));
					}
					$db->sql_freeresult($result);
					
				}
				
				$page_title = $user->lang['MY_EDIT_PAGE_TITLE'];
				
			break;
			
			case 'uploads':
				
				if ($delete)
				{
					if (confirm_box(true))
					{
						// get file data
						$result = $db->sql_query("SELECT * FROM " . MYPAGE_UPLOADS_TABLE . " WHERE upload_id = '" . $delete . "'");
						$row = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);
					
						// make sure this person owns this file
						if ($row['owner_id'] != $user->data['user_id'])
						{
							trigger_error($user->lang['MP_NO_PERMISSION']);
						}
					
						// remove the actual file
						$file = $phpbb_root_path . 'images/mypage_uploads/' . $row['save_name'] ;
						if (!unlink($file))
						{
							meta_refresh(10, $url);
							$message = $user->lang['MP_FILE_NOT_DELETED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
							trigger_error($message);
						}
					
						// remove info from database
						$db->sql_query("DELETE FROM " . MYPAGE_UPLOADS_TABLE . " WHERE upload_id='" . $delete . "'");
					
						meta_refresh(3, $url);
						$message = $user->lang['MP_FILE_DELETED'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
						trigger_error($message);
					
					}
					else
					{
						$s_hidden_fields = build_hidden_fields(array(
							'delete'	=> $delete,
						));
		
						// display mode
						confirm_box(false, $user->lang['MP_DELETE_UPLOAD_CONFIRM'], $s_hidden_fields);
					}
				}
				
				if ($submit)
				{
					if ($config['mypage_upload_secure'])
					{
						$size = getimagesize($_FILES['uploadedfile']['tmp_name']);
						if (!$size)
						{
							$message = $user->lang['MP_ULD_ERROR_NOT_IMG'];
							meta_refresh(10, $url);
							trigger_error($message);
						}
					}
					else
					{
						$good_extensions = array('jpg', 'jpeg', 'gif', 'png', 'bmp');
						$ext = substr($_FILES['uploadedfile']['name'], strrpos($_FILES['uploadedfile']['name'], '.') + 1);
						if (!in_array(strtolower($ext), $good_extensions))
						{
							$message = $user->lang['MP_ULD_ERROR_NOT_IMG'];
							meta_refresh(10, $url);
							trigger_error($message);
						}
						$size['0'] = $size['1'] = $size['3'] = $size['mime'] = '0';
					}

					$bytes = filesize($_FILES['uploadedfile']['tmp_name']);
					if ($bytes && $bytes <= $config['mypage_max_uploads_size'])
					{
						// add the file here
						$upload_time	= time();
						$orig_name	= basename( $_FILES['uploadedfile']['name']);
						$extension	= substr($orig_name, strrpos($orig_name, '.') + 1);
						$name		= substr($orig_name, 0, strrpos($orig_name, '.'));
						$save_name	= $upload_time . '_' . $user->data['user_id'] . '.' . $extension;
						$target_path	= $phpbb_root_path . 'images/mypage_uploads/' . $save_name ;
					
						if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
						{
							// do the database stuff now
							$sql_ary = array (
								'owner_id'	=> $user->data['user_id'],
								'upload_title'		=> $name,
								'save_name'	=> $save_name,
								'extension'	=> $extension,
								'width'		=> $size['0'],
								'height'	=> $size['1'],
								'size_string'	=> $size['3'],
								'upload_time'	=> $upload_time,
								'mime'		=> $size['mime'],
							);
							
							$db->sql_query('INSERT INTO ' . MYPAGE_UPLOADS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary));
							
							$message = $user->lang['MP_ULD_NO_ERROR'];
							meta_refresh(3, $url);
						}
						else
						{
							$message = $user->lang['MP_ULD_ERROR_NO'];
							meta_refresh(10, $url);
						}
					}
					else
					{
						$message = $user->lang['MP_ULD_ERROR_LARGE'];
						meta_refresh(10, $url);
					}
				
					
					$message .= '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $url . '">', '</a>');
					trigger_error($message);
				}
				
				$sql = "SELECT * FROM " . MYPAGE_UPLOADS_TABLE . " 
					WHERE owner_id = '" . $user->data['user_id'] . "'";
			
				$result = $db->sql_query($sql);
				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('files', array(
						'TITLE'		=> $row['upload_title'],
						'URL'		=> $phpbb_root_path . 'images/mypage_uploads/' . $row['save_name'],
						'VIEWS'		=> $row['views'],
						'UPLOAD_TIME'	=> $user->format_date($row['upload_time']),
						'EXTENSION'	=> $row['extension'],
						'DELETE_URL'	=> $this->u_action . '&delete=' . $row['upload_id'] . '&sid=' . $user->data['session_id'] ,
						'ID'		=> $row['upload_id'],
					));
				}
				
				$template->assign_vars(array(
					'SHOWFORM'	=> (mp_uploads_count($user->data['user_id']) < mp_get_allowed_uploads($user->data['user_id'])) ? true : false ,
				));
				
				$page_title = $user->lang['MY_UPLOADS_TITLE'];
				
			break;
		}
	
		$this->page_title = $page_title ;
		$this->tpl_name = 'mypage/ucp_' . $mode ;
   }
}

?>
