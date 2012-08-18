<?php

/**
*
* @package - NV recent topics
* @version $Id: info_acp_recenttopics.php 163 2008-09-09 02:32:58Z nickvergessen $
* @copyright (c) nickvergessen ( http://mods.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Перевел A.R.T. Translate by A.R.T.
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
	'RECENT_TOPICS'						=> 'Последние сообщения',
	'RECENT_TOPICS_MOD'					=> 'Мод Новые темы',
	'RT_CONFIG'							=> 'Настройки',
	'RT_ANTI_TOPICS'					=> 'Включить темы',
	'RT_ANTI_TOPICS_EXP'				=> 'Разделять с помощью ,<br />Если вы не хотите разделять темы, введите 0',
	'RT_NUMBER'							=> 'Новые темы',
	'RT_NUMBER_EXP'						=> 'Количество показываемых тем',
	'RT_PAGE_NUMBER'					=> 'Страницы Новых тем',
	'RT_PAGE_NUMBER_EXP'				=> 'Вы можете показывать больше тем, разбив их на страницы. Введите 0, для отключения функции.',
	'RECENT_TOPICS_LIST'				=> 'Показывать "Новые темы"',
	'RECENT_TOPICS_LIST_EXPLAIN'		=> 'Должны ли темы вноситься в указатель "Новые темы"?',
	'RT_SAVED'							=> 'Сохранить настройки',

	'RT_VIEW_ON'		=> 'Просмотр "NV Новые темы" включен',
	'RT_MEMBERLIST'		=> 'Список пользователей',
	'RT_INDEX'			=> 'Указатель',
	'RT_SEARCH'			=> 'Поиск',
	'RT_FAQ'			=> 'ЧАВО',
	'RT_MCP'			=> 'MCP (Центр модератора)',
	'RT_UCP'			=> 'UCP (Центр пользователя)',
	'RT_VIEWFORUM'		=> 'Просмотр форума',
	'RT_VIEWTOPIC'		=> 'Просмотр темы',
	'RT_VIEWONLINE'		=> 'Просмотр онлайн',
	'RT_POSTING'		=> 'Создание сообщения',
	'RT_REPORT'			=> 'Сообщение',
	'RT_OTHERS'			=> 'Другой сайт',
));

?>