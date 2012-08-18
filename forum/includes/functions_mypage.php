<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

// convert array into template variables
function mp_temp_var_create($data, $prefix)
{
	global $template;
	
	foreach ($data as $key => $value)
	{
		$template->assign_vars(array(strtoupper($prefix.$key) => $value));
	}
}

// mypage get mypage data from database
function mp_aquire_data($mp_id)
{
	global $db, $table_prefix;
	
	$sql = 'SELECT * 
		FROM ' . MYPAGE_TABLE . ' 
		WHERE mypage_id = ' . $mp_id;
	
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);
	return $row;
}

// create a new mypage
// returns error or false if no error
function mp_create($owner_id, $title)
{
	global $db, $config, $table_prefix, $user;
	
	// check page count
	//if (mp_page_count($owner_id) >= $config['mypage_allowed_pages'])
	//{
	//	return $user->lang['MP_PAGE_LIMIT_REACHED'];
	//}
	
	$content = utf8_normalize_nfc($config['mypage_default_content']);
	$uid = $bitfield = $options = '';
	$allow_bbcode = $allow_urls = $allow_smilies = true;
	generate_text_for_storage($content, $uid, $bitfield, $options, $allow_bbcode, $allow_urls, $allow_smilies);
	
	$sql_ary = array(
    		'content'		=> $content,
		'bbcode_uid'		=> $uid,
		'bbcode_bitfield'	=> $bitfield,
		'bbcode_options'	=> $options,
		'mypage_title'		=> $title,
		'owner_id'		=> $owner_id,
		'created'		=> time(),
	);

	$sql = 'INSERT INTO ' . MYPAGE_TABLE  . ' ' . $db->sql_build_array('INSERT', $sql_ary);
	if (!$db->sql_query($sql))
	{
		return $user->lang['MP_PAGE_NOT_CREATED'];
	}

	return false;
}

// count used pages
function mp_page_count($user_id = false)
{
	global $db;
	
	if ($user_id)
	{
		$sql = "SELECT mypage_id 
			FROM " . MYPAGE_TABLE . "  
				WHERE owner_id = '" . $user_id . "'";
	}
	else
	{
		$sql = "SELECT mypage_id 
			FROM " . MYPAGE_TABLE;
	}
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	if ($rows)
	{
		return count($rows);
	}
	else
	{
		return '0';
	}
}

// count uploaded files
function mp_upload_count($user_id = false)
{
	global $db, $table_prefix;
	
	if ($user_id)
	{
		$sql = "SELECT upload_id 
			FROM " . MYPAGE_UPLOADS_TABLE . " 
				WHERE owner_id = '" . $user_id . "'";
	}
	else
	{
		$sql = "SELECT upload_id 
			FROM " . MYPAGE_UPLOADS_TABLE;
	}
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	if ($rows)
	{
		return count($rows);
	}
	else
	{
		return '0';
	}
}

// count comments
function mp_comment_count($user_id = false, $page_id = false)
{
	global $db, $table_prefix;
	
	if ($user_id)
	{
		if ($page_id)
		{
			$sql = "SELECT comment_id 
				FROM " . MYPAGE_COMMENTS_TABLE . " 
					WHERE page_owner_id = '" . $user_id . "' 
					&& mypage_id = '" . $page_id . "'" ;
		}
		else
		{
			$sql = "SELECT comment_id 
				FROM " . MYPAGE_COMMENTS_TABLE . " 
					WHERE page_owner_id = '" . $user_id . "'";
		}
	}
	else
	{
		$sql = "SELECT comment_id 
			FROM " . MYPAGE_COMMENTS_TABLE;
	}
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	if ($rows)
	{
		return count($rows);
	}
	else
	{
		return '0';
	}
}

// count uploaded files
//mp_uploads_count($user->data['user_id'])
function mp_uploads_count($user_id = false)
{
	global $db, $table_prefix;
	
	if ($user_id)
	{
		$sql = "SELECT upload_id 
			FROM " . MYPAGE_UPLOADS_TABLE . " 
				WHERE owner_id = '" . $user_id . "'";
	}
	else
	{
		$sql = "SELECT upload_id 
			FROM " . MYPAGE_UPLOADS_TABLE;
	}
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	if ($rows)
	{
		return count($rows);
	}
	else
	{
		return '0';
	}
}

// count ratings
function mp_ratings_count($user_id = false)
{
	global $db, $table_prefix;
	
	if ($user_id)
	{
		$sql = "SELECT rating_id 
			FROM " . MYPAGE_RATINGS_TABLE . " 
				WHERE page_owner_id = '" . $user_id . "'";
	}
	else
	{
		$sql = "SELECT rating_id 
			FROM " . MYPAGE_RATINGS_TABLE;
	}
	$result = $db->sql_query($sql);
	$rows = $db->sql_fetchrowset($result);
	$db->sql_freeresult($result);
	if ($rows)
	{
		return count($rows);
	}
	else
	{
		return '0';
	}
}

// get rating
function mp_get_rating($page_id)
{
	global $config, $db ;
	
	$rate_cnt = '0';
	$rate_number = '0';
	
	$result = $db->sql_query("SELECT * FROM " . MYPAGE_RATINGS_TABLE . " WHERE mypage_id = '" . $page_id . "'");
	while( $row = $db->sql_fetchrow($result))
	{
		$rate_cnt++;
		$rate_number = $rate_number + $row['rating'];
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
	
	 return 'images/mypage_ratings/' . $config['mypage_rate_' . $rating] ;
}

//slightly modified from the original phpbb3 version
function mp_display_custom_bbcodes()
{
	global $db, $template;

	// Start counting from 22 for the bbcode ids (every bbcode takes two ids - opening/closing)
	$num_predefined_bbcodes = 22;

	$sql = 'SELECT bbcode_id, bbcode_tag, bbcode_helpline
		FROM ' . BBCODES_TABLE . '
		WHERE display_on_mypage = 1
		ORDER BY bbcode_tag';
	$result = $db->sql_query($sql);

	$i = 0;
	while ($row = $db->sql_fetchrow($result))
	{
		$template->assign_block_vars('custom_tags', array(
			'BBCODE_NAME'		=> "'[{$row['bbcode_tag']}]', '[/" . str_replace('=', '', $row['bbcode_tag']) . "]'",
			'BBCODE_ID'			=> $num_predefined_bbcodes + ($i * 2),
			'BBCODE_TAG'		=> $row['bbcode_tag'],
			'BBCODE_HELPLINE'	=> $row['bbcode_helpline'],
			'A_BBCODE_HELPLINE'	=> str_replace(array('&amp;', '&quot;', "'", '&lt;', '&gt;'), array('&', '"', "\'", '<', '>'), $row['bbcode_helpline']),
		));

		$i++;
	}
	$db->sql_freeresult($result);
}

// figure out how many pages a user can create
function mp_get_allowed_pages($user_id)
{
	global $auth, $config, $user ;
	
	if ($auth->acl_get('u_mp_allowed_3'))
	{
		return $config['mypage_allowed_3'] ;
	}
	elseif ($auth->acl_get('u_mp_allowed_2'))
	{
		return $config['mypage_allowed_2'] ;
	}
	elseif ($auth->acl_get('u_mp_allowed_1'))
	{
		return $config['mypage_allowed_1'] ;
	}
	
	return '0';
}


// figure out how many files a user can upload
function mp_get_allowed_uploads($user_id)
{
	global $auth, $config, $user ;
	
	if ($auth->acl_get('u_mp_uploads_3'))
	{
		return $config['mypage_allowed_uploads_3'] ;
	}
	elseif ($auth->acl_get('u_mp_uploads_2'))
	{
		return $config['mypage_allowed_uploads_2'] ;
	}
	elseif ($auth->acl_get('u_mp_uploads_1'))
	{
		return $config['mypage_allowed_uploads_1'] ;
	}

	return '0' ;
}












?>