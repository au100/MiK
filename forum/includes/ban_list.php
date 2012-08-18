<?php
/**
*
* @package phpBB3
* @version $Id: ban_list.php,v 1.0.9 2009/07/13 05:04:00 EST RMcGirr83Exp $
* @copyright (c) Rich McGirr
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Include only once.
*/
function ban_list_set_template_vars()
{
	global $auth, $cache, $config, $db;
	global $template, $user, $phpbb_root_path, $phpEx;

	include($phpbb_root_path . 'includes/constants_ban_list.' . $phpEx);
	$allow = false;
	// is viewing by all users allowed?
	if (($config['allow_ban_list'] == ALLOW_BAN_LIST_ALL_USERS && $auth->acl_get('u_')) || ($config['allow_ban_list'] == ALLOW_BAN_LIST_MODS_ADMINS && ($auth->acl_getf_global('m_') || $auth->acl_get('a_'))) || ($config['allow_ban_list'] == ALLOW_BAN_LIST_ADMINS && $auth->acl_get('a_')))
    {
		$allow = true;
	}

	// no one is allowed
	if (!$allow)
	{
		return;
	}

	// caching and main sql if none yet
	if (($total_banned_users = $cache->get('_total_banned_users')) === false)
	{
		$sql = 'SELECT COUNT(ban_userid) AS total_banned_users
				FROM ' . BANLIST_TABLE . '
				WHERE ban_userid > 1
				AND (ban_end >= ' . time() . ' OR ban_end = 0)';
		$result = $db->sql_query($sql);
		$total_banned_users = (int) $db->sql_fetchfield('total_banned_users');
		$db->sql_freeresult($result);
				
		// cache this data for 5 minutes, this improves performance
		// and allows the count to update more accurately for expired bans
		// minimum allowed in config if not "custom" is 30 minutes
		// could change 300 to a higher number if wanted longer cache
		$cache->put('_total_banned_users', $total_banned_users, 300);
	}

	// a variable
	$ban_list = '';
	if ($total_banned_users)
	{
		$user->add_lang('mods/ban_list');
		$ban_list = sprintf($user->lang['BANNED_TOTAL'], $total_banned_users);
	}

	$template->assign_vars(array(
		'U_BANLIST'				=> append_sid("{$phpbb_root_path}ban_list.$phpEx"),
		'TOTAL_BANNED_USERS'	=> $ban_list,
	));

}

?>