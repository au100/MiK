<?php
/*
*
* acp_bb3portal [Russian]
*
* @package phpBB3 Portal  a.k.a canverPortal  ( www.phpbb3portal.com )
* @version $Id: portal.php,v 1.4 2007/08/20 23:48:41 angelside Exp $
* @copyright (c) Canver Software - www.canversoft.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translation by: Палыч http://www.phpbbguru.net  06.02.2008
*/

/**
* DO NOT CHANGE
*/
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
	'ACP_PORTAL_INFO'			=> 'Информационный портал',
	'ACP_PORTAL_INFO_SETTINGS'			=> 'Общие параметры настройки',
	'ACP_PORTAL_INFO_SETTINGS_EXPLAIN'	=> 'Спасибо за ваш выбор. На этой странице вы можете настраивать портал вашей конференции. Этот экран показывает различные установки портала. Ссылки слева позволяют вам получить доступ к контролю каждого аспекта вашего портала.',

	'ACP_PORTAL_SETTINGS'				=> 'Установки портала',
	'ACP_PORTAL_SETTINGS_EXPLAIN'		=> 'Спасибо за ваш выбор. На этой странице вы можете настраивать портал вашей конференции. Этот экран показывает различные установки портала. Ссылки слева позволяют вам получить доступ к контролю каждого аспекта вашего портала.',

	// general
	'ACP_PORTAL_GENERAL_INFO'				=> 'Администрирование',
	'ACP_PORTAL_GENERAL_INFO_EXPLAIN'		=> 'Спасибо за ваш выбор. На этой странице вы можете настраивать портал вашей конференции. Этот экран показывает различные установки портала. Ссылки слева позволяют вам получить доступ к контролю каждого аспекта вашего портала.',
	'ACP_PORTAL_GENERAL_SETTINGS'			=> 'Основные установки',
	'ACP_PORTAL_GENERAL_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять основные установки.',
	'PORTAL_ADVANCED_STAT'					=> 'Блок расширенной статистики',
	'PORTAL_ADVANCED_STAT_EXPLAIN'			=> 'Отражать этот блок на портале.',
	'PORTAL_LEADERS'						=> 'Блок команды сайта',
	'PORTAL_LEADERS_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_CLOCK'							=> 'Блок часов',
	'PORTAL_CLOCK_EXPLAIN'					=> 'Отражать этот блок на портале.',
	'PORTAL_LINK_US'						=> 'Ссылки как блок',
	'PORTAL_LINK_US_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_LINKS'							=> 'Блок ссылок',
	'PORTAL_LINKS_EXPLAIN'					=> 'Отражать этот блок на портале.',
	'PORTAL_WELCOME'						=> 'Блок приглашения (центральный)',
	'PORTAL_WELCOME_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_MAX_ONLINE_FRIENDS'				=> 'Ограничение показа друзей в сети',
	'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'		=> 'Ограничение на показ друзей в сети в блоках.',

	// random member
	'PORTAL_RANDOM_MEMBER'					=> 'Случайный пользователь',
	'PORTAL_RANDOM_MEMBER_EXPLAIN'			=> 'Отражать этот блок на портале.',

	// global announcements
	'ACP_PORTAL_ANNOUNCE_INFO'					=> 'Глобальные (важные) объявления',
	'ACP_PORTAL_ANNOUNCE_SETTINGS'				=> 'Установки важных объявлений',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'		=> 'Здесь вы можете изменять опции отображения важных объявлений.',
	'PORTAL_ANNOUNCEMENTS'						=> 'Блок важные объявления',
	'PORTAL_ANNOUNCEMENTS_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_ANNOUNCEMENTS_STYLE'				=> 'Компактный стиль важных объявлений',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXPLAIN'		=> 'Используется если выбрано Да',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'			=> 'Количество объявлений',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXPLAIN'	=> '0 для снятия ограничения',
	'PORTAL_ANNOUNCEMENTS_DAY'					=> 'Число дней для показа объявления',
	'PORTAL_ANNOUNCEMENTS_DAY_EXPLAIN'			=> '0 - для снятия ограничения',
	'PORTAL_ANNOUNCEMENTS_LENGTH'				=> 'Максимальная длинна объявления',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXPLAIN'		=> '0 - для снятия ограничения',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'			=> 'ID форума для объявлений',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXPLAIN'	=> 'Форум, откуда выводятся объявления; пустое поле - для всех форумов; несколько форумов - через запятую: 1,2,5',

	// news
	'ACP_PORTAL_NEWS_INFO'				=> 'Новости',
	'ACP_PORTAL_NEWS_SETTINGS'			=> 'Установки новостей',
	'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения новостей.',
	'PORTAL_NEWS'						=> 'Блок новостей',
	'PORTAL_NEWS_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_NEWS_STYLE'					=> 'Компактный стиль для новостей',
	'PORTAL_NEWS_STYLE_EXPLAIN'			=> 'Используется, если выбрано Да.',
	'PORTAL_SHOW_ALL_NEWS'				=> 'Показать все темы в данном форуме',
	'PORTAL_SHOW_ALL_NEWS_EXPLAIN'		=> 'Включая прикреплённые темы и объявления.',
	'PORTAL_NUMBER_OF_NEWS'				=> 'Число новостей',
	'PORTAL_NUMBER_OF_NEWS_EXPLAIN'		=> '0 для снятия ограничения',
	'PORTAL_NEWS_LENGTH'				=> 'Максимальная длинна новости',
	'PORTAL_NEWS_LENGTH_EXPLAIN'		=> '0 для снятия ограничения',
	'PORTAL_NEWS_FORUM'					=> 'ID для форума новостей',
	'PORTAL_NEWS_FORUM_EXPLAIN'			=> 'Форум, откуда выводятся новости; пустое поле - для всех форумов; несколько форумов - через запятую: 1,2,5',
	'PORTAL_EXCLUDE_FORUM'				=> 'ID форумов для исключения',
	'PORTAL_EXCLUDE_FORUM_EXPLAIN'		=> 'Форум, откуда не выводятся новости; пустое поле - для всех форумов; несколько форумов - через запятую: 1,2,5',

	// recent topics
	'ACP_PORTAL_RECENT_INFO'				=> 'Последние темы',	
	'ACP_PORTAL_RECENT_SETTINGS'			=> 'Установки для последний тем',	
	'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения последних тем.',
	'PORTAL_RECENT'							=> 'Блок последних новостей',
	'PORTAL_RECENT_EXPLAIN'					=> 'Отражать этот блок на портале.',
	'PORTAL_MAX_TOPIC'						=> 'Ограничение для последний объявлений\популярных тем',
	'PORTAL_MAX_TOPIC_EXPLAIN'				=> '0 - для снятия ограничения',
	'PORTAL_RECENT_TITLE_LIMIT'				=> 'Ограничение заголовка последней темы',
	'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'		=> '0 - для снятия ограничения',

	// paypal
	'ACP_PORTAL_PAYPAL_INFO'				=> 'Paypal',	
	'ACP_PORTAL_PAYPAL_SETTINGS'			=> 'Установки Paypal',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции Paypal.',
	'PORTAL_PAY_C_BLOCK'					=> 'Рaypal блок (в центре)',
	'PORTAL_PAY_C_BLOCK_EXPLAIN'			=> 'Отражать этот блок на портале.',
	'PORTAL_PAY_S_BLOCK'					=> 'Маленький блок Рaypal',
	'PORTAL_PAY_S_BLOCK_EXPLAIN'			=> 'Отражать этот блок на портале.',
	'PORTAL_PAY_ACC'						=> 'Учетная запись Рaypal',
	'PORTAL_PAY_ACC_EXPLAIN'				=> 'Введите используемый e-mail адрес, например: xxx@xxx.com',

	// last member
	'ACP_PORTAL_MEMBERS_INFO'				=> 'Новые пользователи',
	'ACP_PORTAL_MEMBERS_SETTINGS'			=> 'Установки новых пользователей',
	'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения новых пользователей.',
	'PORTAL_LATEST_MEMBERS'					=> 'Блок новых пользователей',
	'PORTAL_LATEST_MEMBERS_EXPLAIN'			=> 'Отражать этот блок на портале.',
	'PORTAL_MAX_LAST_MEMBER'				=> 'Ограничение показа новых пользователей',
	'PORTAL_MAX_LAST_MEMBER_EXPLAIN'		=> '0 - для снятия ограничения',

	// bots
	'ACP_PORTAL_BOTS_INFO'						=> 'Боты',
	'ACP_PORTAL_BOTS_SETTINGS'					=> 'Установки визитов ботов',
	'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'			=> 'Здесь вы можете изменять опции отображения визитов ботов.',
	'PORTAL_LOAD_LAST_VISITED_BOTS'				=> 'Блок визитов ботов',
	'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'		=> 'Отражать этот блок на портале.',
	'PORTAL_LAST_VISITED_BOTS_NUMBER'			=> 'Как много ботов отражать',
	'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'	=> '0 - для снятия ограничения',

	// polls   
	'ACP_PORTAL_POLLS_INFO'				=> 'Опросы',	
	'ACP_PORTAL_POLLS_SETTINGS'			=> 'Установки опросов',
	'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции опросов.',
	'PORTAL_POLL_TOPIC'					=> 'Блоу опросов',
	'PORTAL_POLL_TOPIC_EXPLAIN'			=> 'Отражать этот блок на портале.',
	'PORTAL_POLL_TOPIC_ID'				=> 'ID форума для опросов',
	'PORTAL_POLL_TOPIC_ID_EXPLAIN'		=> 'Форум, откуда выводятся опросы; пустое поле - для всех форумов; несколько форумов - через запятую: 1,2,5',
	'PORTAL_POLL_LIMIT'					=> 'Предел показа опроса',
	'PORTAL_POLL_LIMIT_EXPLAIN'			=> 'Число опросов, которое Вы хотели бы показать на странице портала.',
	'PORTAL_POLL_ALLOW_VOTE'			=> 'Разрешить голосовать',
	'PORTAL_POLL_ALLOW_VOTE_EXPLAIN'	=> 'Allow users with the required permissions to vote from the portal page.',
	
	// most poster
	'ACP_PORTAL_MOST_POSTER_INFO'				=> 'Активные авторы',
	'ACP_PORTAL_MOST_POSTER_SETTINGS'			=> 'Установки активных авторов',
	'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения активных авторов.',
	'PORTAL_TOP_POSTERS'                  		=> 'Блок активных авторов',
	'PORTAL_TOP_POSTERS_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_MAX_MOST_POSTER'					=> 'Число авторов',
	'PORTAL_MAX_MOST_POSTER_EXPLAIN'			=> '0 - для снятия ограничения',

	// left and right collumn width 
	'ACP_PORTAL_COLLUMN_WIDTH_INFO'				=> 'Ширина колонок',
	'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'			=> 'Установки ширины левой и правой колонок',	
	'PORTAL_LEFT_COLLUMN_WIDTH'					=> 'Ширина левой колонки',
	'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'			=> 'Укажите значение в пикселях, рекомендуется 180',
	'PORTAL_RIGHT_COLLUMN_WIDTH'				=> 'Ширина правой колонки',
	'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'		=> 'Укажите значение в пикселях, рекомендуется 180',

	// attachments    
	'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'				=> 'Вложения',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'			=> 'Установки вложений',
	'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения вложений.',
	'PORTAL_ATTACHMENTS'                  				=> 'Блок вложений',
	'PORTAL_ATTACHMENTS_EXPLAIN'                  		=> 'Отражать этот блок на портале.',
	'PORTAL_ATTACHMENTS_NUMBER'							=> 'Ограничение числа вложений',
	'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'					=> '0 - для снятия ограничения',

	// wordgraph
	'ACP_PORTAL_WORDGRAPH_INFO'				=> 'Wordgraph',
	'ACP_PORTAL_WORDGRAPH_SETTINGS'			=> 'Установки Wordgraph',	
	'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения wordgraph.',
	'PORTAL_WORDGRAPH'						=> 'Блок wordgraph',
	'PORTAL_WORDGRAPH_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_WORDGRAPH_MAX_WORDS'			=> 'Число слов для отображения',
	'PORTAL_WORDGRAPH_MAX_WORDS_EXPLAIN'	=> '0 - для снятия ограничения',
	'PORTAL_WORDGRAPH_WORD_COUNTS'			=> 'Включая счётчик',
	'PORTAL_WORDGRAPH_WORD_COUNTS_EXPLAIN'	=> 'Отображать счётчик для слов, например (25).',
	'PORTAL_WORDGRAPH_RATIO'				=> 'Используемый формат отображения слов',
	'PORTAL_WORDGRAPH_RATIO_EXPLAIN'		=> 'Установите формат отображения слов (больше/меньше; по умолчанию=18)',

	// welcome message
	'ACP_PORTAL_WELCOME_INFO'				=> 'Приглашение',
	'ACP_PORTAL_WELCOME_SETTINGS'			=> 'Установки приглашения',
	'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения приглашения.',
	'PORTAL_WELCOME_INTRO'					=> 'Текст приглашения',
	'PORTAL_WELCOME_INTRO_EXPLAIN'			=> 'Укажите текст приглашения (только текст). Максимально 600 символов!',

	// ads
	'ACP_PORTAL_ADS_INFO'				=> 'Реклама',
	'ACP_PORTAL_ADS_SETTINGS'			=> 'Параметры настройки рекламы',
	'ACP_PORTAL_ADS_SETTINGS_EXPLAIN'	=> 'Here you can change your advertisement codes and certain specific options.',
	'PORTAL_ADS_SMALL'					=> 'Показать маленький блок обьявлений',
	'PORTAL_ADS_SMALL_EXPLAIN'			=> 'Показывать этот блок на портале.',
	'PORTAL_ADS_SMALL_BOX'				=> 'Код обьявления',
	'PORTAL_ADS_SMALL_BOX_EXPLAIN'		=> 'Изменить код объявлений (только текст). Максимально 600 символов!',
	'PORTAL_ADS_CENTER'					=> 'Показать центральный блок обьявлений',
	'PORTAL_ADS_CENTER_EXPLAIN'			=> 'Показывать этот блок на портале.',
	'PORTAL_ADS_CENTER_BOX'				=> 'Код обьявления',
	'PORTAL_ADS_CENTER_BOX_EXPLAIN'		=> 'Изменить код объявлений  (только текст). Максимально 600 символов!',

	
	// minicalendar
	'ACP_PORTAL_MINICALENDAR_INFO'				=> 'Мини-календарь',
	'ACP_PORTAL_MINICALENDAR_SETTINGS'			=> 'Установки календаря',
	'ACP_PORTAL_MINICALENDAR_SETTINGS_EXPLAIN'	=> 'Здесь вы можете изменять опции отображения календаря.',
	'PORTAL_MINICALENDAR'						=> 'Блок календаря',
	'PORTAL_MINICALENDAR_EXPLAIN'				=> 'Отражать этот блок на портале.',
	'PORTAL_MINICALENDAR_TODAY_COLOR'			=> 'Цвет текущей даты',
	'PORTAL_MINICALENDAR_TODAY_COLOR_EXPLAIN'	=> 'HEX код или наименование цвета, например: #FFFFFF для белого, или наменование цвета: vilolet.',
	'PORTAL_MINICALENDAR_DAY_LINK_COLOR'		=> 'Цвет ссылки',
	'PORTAL_MINICALENDAR_DAY_LINK_COLOR_EXPLAIN'=> 'HEX код или наименование цвета, например: #FFFFFF для белого, или наменование цвета: vilolet.',


	
	// change style
	'ACP_PORTAL_BOARD_STYLE_INFO'				=> 'Изментьь стиль портала',
	'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> 'Настройки стиля портала',
	'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'Здесь вы можете поменять настройки вашего стиля и изменить специфические опции.',
	

));

?>
