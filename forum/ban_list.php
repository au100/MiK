<?php
/**
*
* @package phpBB3
* @version $Id: ban_list.php,v 1.0.10 2009-08-14 09:11:00 EST rmcgirr83 $
* @copyright (c) Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);


$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// we need the constants
include($phpbb_root_path . 'includes/constants_ban_list.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup(array('acp/ban','memberlist','mods/ban_list'));
 
$allow = false;
// who can view this list?
if (($config['allow_ban_list'] == ALLOW_BAN_LIST_ALL_USERS && $auth->acl_get('u_')) || ($config['allow_ban_list'] == ALLOW_BAN_LIST_MODS_ADMINS && ($auth->acl_getf_global('m_') || $auth->acl_get('a_'))) || ($config['allow_ban_list'] == ALLOW_BAN_LIST_ADMINS && $auth->acl_get('a_')))
{
	$allow = true;
}
// current user not authed to see the list
if(!$allow)
{
	trigger_error('NOT_AUTHORISED');
}

// grab all user notes first
$sql = 'SELECT reportee_id
	FROM ' . LOG_TABLE . '
	WHERE log_type = ' . LOG_USERS . '
	ORDER BY reportee_id';
$result = $db->sql_query($sql);

$reports_count = array();
while ($row = $db->sql_fetchrow($result))
{
	$reports_count[] = $row['reportee_id'];
}
$db->sql_freeresult($result);
$total_reports_count = sizeof($reports_count);

// where to start
$start	= request_var('start', 0);

// set sorting options
$default_key = 'a';
$sort_key = request_var('sk', $default_key);
$sort_dir = request_var('sd', 'a');

// following shamelessly stolen from memberlist.php..thanks acydburn :)
// Sorting
$sort_key_text = array('a' => $user->lang['SORT_USERNAME'], 'b' => $user->lang['BAN_START_DATE'], 'c' => $user->lang['BAN_END_DATE']);
$sort_key_sql = array('a' => 'u.username_clean', 'b' => 'b.ban_start', 'c' => 'b.ban_end');
$sort_dir_text = array('a' => $user->lang['ASCENDING'], 'd' => $user->lang['DESCENDING']);

$s_sort_key = '';
foreach ($sort_key_text as $key => $value)
{
	$selected = ($sort_key == $key) ? ' selected="selected"' : '';
	$s_sort_key .= '<option value="' . $key . '"' . $selected . '>' . $value . '</option>';
}

$s_sort_dir = '';
foreach ($sort_dir_text as $key => $value)
{
	$selected = ($sort_dir == $key) ? ' selected="selected"' : '';
	$s_sort_dir .= '<option value="' . $key . '"' . $selected . '>' . $value . '</option>';
}

// initialize $first_char...others are below
$first_char = request_var('first_char', '');

$sql_where = ' AND b.ban_userid = u.user_id';

if ($first_char == 'other')
{
	for ($i = 97; $i < 123; $i++)
	{
		$sql_where .= ' AND u.username_clean NOT ' . $db->sql_like_expression(chr($i) . $db->any_char);
	}
}
else if ($first_char)
{
	$sql_where .= ' AND u.username_clean ' . $db->sql_like_expression(substr($first_char, 0, 1) . $db->any_char);
}

// Sorting and order
if (!isset($sort_key_sql[$sort_key]))
{
	$sort_key = $default_key;
}

$order_by = $sort_key_sql[$sort_key] . ' ' . (($sort_dir == 'a') ? 'ASC' : 'DESC');

$s_char_options = '<option value=""' . ((!$first_char) ? ' selected="selected"' : '') . '>' . $user->lang['ALL'] . '</option>';
for ($i = 97; $i < 123; $i++)
{
	$s_char_options .= '<option value="' . chr($i) . '"' . (($first_char == chr($i)) ? ' selected="selected"' : '') . '>' . chr($i-32) . '</option>';
}
$s_char_options .= '<option value="other"' . (($first_char == 'other') ? ' selected="selected"' : '') . '>' . $user->lang['OTHER'] . '</option>';

// Build a relevant pagination_url
$params = $sort_params = array();

// We do not use request_var() here directly to save some calls (not all variables are set)
$check_params = array(
	'sk'			=> array('sk', $default_key),
	'sd'			=> array('sd', 'a'),
	'username'		=> array('username', '', true),
	'ban_start'		=> array('ban_start', '', true),
	'ban_end'		=> array('ban_end','', true),
	'first_char'	=> array('first_char', ''),
);

foreach ($check_params as $key => $call)
{
	if (!isset($_REQUEST[$key]))
	{
		continue;
	}

	$param = call_user_func_array('request_var', $call);
	$param = urlencode($key) . '=' . ((is_string($param)) ? urlencode($param) : $param);
	$params[] = $param;

	if ($key != 'sk' && $key != 'sd')
	{
		$sort_params[] = $param;
	}
}

$pagination_url = append_sid("{$phpbb_root_path}ban_list.$phpEx", implode('&amp;', $params));
$sort_url = append_sid("{$phpbb_root_path}ban_list.$phpEx", implode('&amp;', $sort_params));
unset($params, $sort_params);

$template->assign_vars(array(
	'S_SORT_OPTIONS'		=> $s_sort_key
));
// end of thievery..thanks again acydburn :)

// grab some naughty users
$sql_ary = array(
	'SELECT'	=> 'b.*, u.user_id, u.username, u.username_clean, u.user_colour, u.user_warnings, u2.user_id as user_id2, u2.username as username2, u2.user_colour as user_colour2',
	'FROM'		=> array(BANLIST_TABLE => 'b', USERS_TABLE => 'u'),
	'LEFT_JOIN'	=> array(
		array(
			'FROM'	=> array(USERS_TABLE => 'u2'),
			'ON'	=> 'b.ban_banner = u2.user_id',
		),		
	),
	'WHERE'		=> '(b.ban_end >= ' . time() . '
		OR b.ban_end = 0)' . $sql_where,
	'ORDER_BY'	=> $order_by,
);
$result = $db->sql_query_limit($db->sql_build_query('SELECT', $sql_ary), $config['topics_per_page'], $start);

// for counting of banned users
$result2 = $db->sql_query($db->sql_build_query('SELECT', $sql_ary));

$row2 = $db->sql_fetchrowset($result2);
$total_banned_users = (int) count($row2);
$db->sql_freeresult($result2);

// let's free up some memory
unset($row2);

// only for those subsilver2 types?
$row_number = $start;

// we gots us some results ?
if ($row = $db->sql_fetchrow($result))
{
	do
	{
		$row_number++;
		// how many reports does the user have?
		if ($total_reports_count)
		{
			$note_count = 0;
			for ($i = 0; $i < $total_reports_count; $i++)
			{
	            if ($row['user_id'] == $reports_count[$i])
	            {
					$note_count++;
	            }
			}
		}
		
		// the user that done banned the, uhmmm, user
		$banner_link = '';
		
		if (!empty($row['user_id2']))
		{
			$banner_link = get_username_string('full', $row['user_id2'], $row['username2'], $row['user_colour2']);
		}
		
		// compute how much time is left on the users ban
		if ($row['ban_end'] != '0')
		{
			$ban_end = $row['ban_end'];
			$time_left = (int) $row['ban_end'] - time();
			$days_left = $minutes_left = $seconds_left = 0;
			$remaining_time = '';
			if ($time_left)
			{
				$days_left = floor($time_left / 86400);
				if ($days_left)
				{
					$days = $days_left > 1 ? sprintf($user->lang['BAN_DAYS_LEFT'], $days_left) : sprintf($user->lang['BAN_DAY_LEFT'], $days_left);
					$time_left = $time_left - ($days_left * 86400);
					$remaining_time .= $days;
				}
				$hours_left = floor($time_left / 3600);
				if ($hours_left)
				{
					$hours = $hours_left > 1 ? sprintf($user->lang['BAN_HOURS_LEFT'], $hours_left) : sprintf($user->lang['BAN_HOUR_LEFT'], $hours_left);
					$time_left = $time_left - ($hours_left * 3600);
					$remaining_time .= $hours;
				}
				$minutes_left = ceil($time_left / 60);
				if ($minutes_left)
				{
					$minutes = $minutes_left > 1 ? sprintf($user->lang['BAN_MINS_LEFT'], $minutes_left) : sprintf($user->lang['BAN_MIN_LEFT'], $minutes_left);
					$remaining_time .= $minutes;
				}
			}
		}
		else
		{
			$ban_end = '';
			$time_left = $remaining_time = '';
		}
		
		$ban_end_text = array(0 => $user->lang['PERMANENT'], 30 => $user->lang['30_MINS'], 60 => $user->lang['1_HOUR'], 360 => $user->lang['6_HOURS'], 1440 => $user->lang['1_DAY'], 10080 => $user->lang['7_DAYS'], 20160 => $user->lang['2_WEEKS'], 40320 => $user->lang['1_MONTH']);
		$time_length = ($ban_end) ? ($ban_end - $row['ban_start']) / 60 : 0;
		
		$ban_length = (isset($ban_end_text[$time_length])) ? $ban_end_text[$time_length] : $user->format_date($ban_end);


		$template->assign_block_vars('banlist_row', array(
			'ROW_NUMBER'			=> $row_number,
			'BAN_START'				=> $user->format_date($row['ban_start']),
			'BAN_END'				=> ($ban_end) ? $user->format_date($ban_end) : $user->lang['NEVER'],
			'BAN_TIME_LEFT'			=> ($time_left) ? $remaining_time . '&nbsp;' . $user->lang['BAN_REMAINING'] : '',
			'BAN_REASON'			=> $row['ban_give_reason'],
			'BAN_TIME_DURATION' 	=> $ban_length,
			'USER_WARNINGS_COUNT'	=> (!empty($row['user_warnings'])) ? $user->lang['WARNINGS'] . ':&nbsp;' . $row['user_warnings'] : '',
			'USER_NOTES_COUNT'		=> (!empty($note_count)) ? $note_count : '',
			'USERNAME_FULL'			=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
			'BANNER_FULL'			=> $banner_link,
			'U_NOTES'				=> ($auth->acl_getf_global('m_')) ? append_sid("{$phpbb_root_path}mcp.$phpEx",'i=notes&amp;mode=user_notes&amp;u=' . $row['user_id'], true, $user->session_id) : '',)
		);
	}
	while ($row = $db->sql_fetchrow($result));

	$db->sql_freeresult($result);
}

//generate the page
$template->assign_vars(array(
	'L_BAN_USERNAME'	=> $user->lang['USERNAME'],

	'PAGINATION'		=> generate_pagination($pagination_url, $total_banned_users, $config['topics_per_page'], $start),
	'PAGE_NUMBER'		=> on_page($total_banned_users, $config['topics_per_page'], $start),
	'TOTAL_USERS'		=> ($total_banned_users == 1) ? $user->lang['LIST_USER'] : sprintf($user->lang['LIST_USERS'], $total_banned_users),
		
	'U_SORT_USERNAME'	=> $sort_url . '&amp;sk=a&amp;sd=' . (($sort_key == 'a' && $sort_dir == 'a') ? 'd' : 'a'),
	'U_SORT_BAN_START'	=> $sort_url . '&amp;sk=b&amp;sd=' . (($sort_key == 'b' && $sort_dir == 'a') ? 'd' : 'a'),
	'U_SORT_BAN_END'	=> $sort_url . '&amp;sk=c&amp;sd=' . (($sort_key == 'c' && $sort_dir == 'a') ? 'd' : 'a'),
		
	'S_MODE_SELECT'		=> $s_sort_key,
	'S_ORDER_SELECT'	=> $s_sort_dir,
	'S_CHAR_OPTIONS'	=> $s_char_options,
	'S_MODE_ACTION'		=> $pagination_url
));

// Output the page
page_header($user->lang['BANLIST']);
	
$template->set_filenames(array(
	'body' => 'ban_list_body.html'
));

make_jumpbox(append_sid("{$phpbb_root_path}viewforum.$phpEx"));
	
page_footer();

?>