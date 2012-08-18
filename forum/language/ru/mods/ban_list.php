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
    'BANLIST'			=> 'Список заблокированных пользователей',
    'BANNED_BY'			=> '',
	'BANNED_USERS'		=> 'Заблокированные пользователи:',
	'BANNED_TOTAL'		=> '<strong>%d</strong>',
    'BAN_START_DATE'	=> 'Заблокировал',
    'BAN_END_DATE'		=> 'Будет разблокирован',
    'ALLOW_BAN_LIST'    => 'Кто может видеть список заблокированных пользователей',
    'ALLOW_BAN_LIST_EXPLAIN' => 'Определяет, кто может видеть список заблокированных пользователей, если пользователь забанен',
    'ALLOW_BAN_LIST_ALL_USERS'   => 'Все пользователи',
    'ALLOW_BAN_LIST_MODS_ADMINS' => 'Модераторы &amp; Администраторы',
    'ALLOW_BAN_LIST_ADMINS'      => 'Только администраторы',
    'USER_NOTES_COUNT'   => 'Примечания:',
    'BAN_HOURS_LEFT' 	=> ' %s часов,',
    'BAN_MINS_LEFT'		=> ' %s минут',
    'BAN_DAYS_LEFT'		=> ' %s дней, ',
    'BAN_HOUR_LEFT' 	=> ' %s час,',
    'BAN_MIN_LEFT'		=> ' %s минута',
    'BAN_DAY_LEFT'		=> ' %s день, ',    
    'BAN_REMAINING'		=> 'осталось',
));

?>
