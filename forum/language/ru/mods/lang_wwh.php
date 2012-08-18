<?php

/**
*
* @package phpBB3 - who was here MOD
* @version $Id: lang_wwh.php 61 2007-12-17 20:15:23Z nickvergessen $
* @copyright (c) nickvergessen ( http://www.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Translated to Russian is Key <admin@alfaiomega.org> 2011
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
// for the normal sites
	'WHO_WAS_HERE'					=> 'Кто сегодня был на конференции?',
	'WHO_WAS_HERE_LATEST1'			=> 'Последний раз в',
	'WHO_WAS_HERE_LATEST2'			=> '',//used for parts like o'clock in the timedisplay (last at vw:xy "o'clock")

	'WHO_WAS_HERE_TOTAL'			=> array(
		0		=> 'Всего пользователей было онлайн <strong>0</strong> :: ',
		1		=> 'Всего пользователей было онлайн <strong>%d</strong> :: ',
		2		=> 'Всего пользователей было онлайн  <strong>%d</strong> :: ',
	),
	'WHO_WAS_HERE_REG_USERS'		=> array(
		0		=> '0 зарегистрированных',
		1		=> '%d зарегистрированных',
		2		=> '%d зарегистрированных',
	),
	'WHO_WAS_HERE_HIDDEN'			=> array(
		0		=> '0 скрытых',
		1		=> '%d скрытых',
		2		=> '%d скрытых',
	),
	'WHO_WAS_HERE_BOTS'				=> array(
		0		=> '0 ботов',
		1		=> '%d ботов',
		2		=> '%d ботов',
	),
	'WHO_WAS_HERE_GUESTS'			=> array(
		0		=> '0 гостей',
		1		=> '%d гостей',
		2		=> '%d гостей',
	),

	'WHO_WAS_HERE_WORD'				=> ' и',
	'WHO_WAS_HERE_EXP'				=> 'основано на активности пользователей за сегодня',
	'WHO_WAS_HERE_EXP_TIME'			=> 'основано на активности пользователей за ',
	'WWH_HOURS'						=> array(
		0		=> '',
		1		=> '%%s %1$s час',
		2		=> '%%s %1$s часов',
	),
	'WWH_MINUTES'					=> array(
		0		=> '',
		1		=> '%%s %1$s минута',
		2		=> '%%s %1$s минут',
	),
	'WWH_SECONDS'					=> array(
		0		=> '',
		1		=> '%%s %1$s секунда',
		2		=> '%%s %1$s секунд',
	),
	'WHO_WAS_HERE_RECORD'			=> 'Больше всего посетителей <strong>%1$s</strong> было %2$s',
	'WHO_WAS_HERE_RECORD_TIME'		=> 'Больше всего посетителей <strong>%1$s</strong> между %2$s и %3$s',
));

?>