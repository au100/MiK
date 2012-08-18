<?php
/** 
*
* @package phpBB3
* @version 1.0.9
* @copyright (c) 2009 RMcGirr83
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

// define constants..used in multiple files
// so do a if !defined first

// everyone can view..well at least registered users
if (!defined('ALLOW_BAN_LIST_ALL_USERS'))
{
	define('ALLOW_BAN_LIST_ALL_USERS', 0);
}
// only mods and admins can view
if (!defined('ALLOW_BAN_LIST_MODS_ADMINS'))
{
	define('ALLOW_BAN_LIST_MODS_ADMINS', 1);
}
// only admins
if (!defined('ALLOW_BAN_LIST_ADMINS'))
{
	define('ALLOW_BAN_LIST_ADMINS', 2);
}

?>