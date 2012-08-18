<?php
/**
*
* ban_list [English]
*
* @package language
* @version $Id: ban_list.php,v 1.0.0 2008/08/29 06:50:00 rmcgirr83 Exp $
* @copyright (c) 2008 Richard McGirr 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'BANLIST'			=> 'Banned User List',
    'BANNED_BY'			=> 'By:',
	'BANNED_USERS'		=> 'Banned Users',
	'BANNED_TOTAL'		=> '<strong>%d</strong>',
    'BAN_START_DATE'	=> 'Ban start',
    'BAN_END_DATE'		=> 'Ban end',
    'ALLOW_BAN_LIST'    => 'Who can see the ban list',
    'ALLOW_BAN_LIST_EXPLAIN' => 'Defines who can see the ban list if a user is banned',
    'ALLOW_BAN_LIST_ALL_USERS'   => 'All Users',
    'ALLOW_BAN_LIST_MODS_ADMINS' => 'Mods &amp; Admins',
    'ALLOW_BAN_LIST_ADMINS'      => 'Admins Only',
    'USER_NOTES_COUNT'   => 'Notes:',
    'BAN_HOURS_LEFT' 	=> ' %s hours,',
    'BAN_MINS_LEFT'		=> ' %s minutes',
    'BAN_DAYS_LEFT'		=> ' %s days, ',
    'BAN_HOUR_LEFT' 	=> ' %s hour,',
    'BAN_MIN_LEFT'		=> ' %s minute',
    'BAN_DAY_LEFT'		=> ' %s day, ',    
    'BAN_REMAINING'		=> 'remaining',
));

?>
