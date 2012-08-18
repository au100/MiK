<?php
/*
*
* bb3portal [Rus]
*
* @package phpBB3 Portal  a.k.a canverPortal  ( www.phpbb3portal.com )
* @version $Id: portal.php,v 1.6 2008/02/09 08:18:14 angelside Exp $
* @copyright (c) Canver Software - www.canversoft.net
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translation by: !((( ALEX )))!  Alex_1204@mail.ru http://hondajazz-club.ru  19.02.2008
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
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	// General
	'PORTAL'				=> 'Портал',
	'WELCOME'				=> 'Добро пожаловать',

	// news & global announcements
	'LATEST_ANNOUNCEMENTS'	=> 'Последние объявления',
	'LATEST_NEWS'			=> 'Последние новости',
	'READ_FULL'				=> 'Читать все',
	'NO_NEWS'				=> 'Новостей нет',
	'NO_ANNOUNCEMENTS'		=> 'Объявлений нет',
	'POSTED_BY'				=> 'Автор',
	'COMMENTS'				=> 'Комментарии',
	'VIEW_COMMENTS'			=> 'Просмотреть комментарии',
	'POST_REPLY'			=> 'Написать комментарии',
	'TOPIC_VIEWS'			=> 'Просмотров',

	// who is online
	'WIO_TOTAL'			=> 'Всего',
	'WIO_REGISTERED'	=> 'Зарегистрированных',
	'WIO_HIDDEN'		=> 'Скрытых',
	'WIO_GUEST'			=> 'Гостей',
	'RECORD_ONLINE_USERS'=> 'Рекорд посещаемости: <strong>%1$s</strong><br />%2$s',

	// user menu
	'USER_MENU'			=> 'Меню пользователя',
	'UM_LOG_ME_IN'		=> 'запомнить меня',
	'UM_HIDE_ME'		=> 'скрыть меня',
	'UM_MAIN_SUBSCRIBED'=> 'Подписан',
	'UM_BOOKMARKS'		=> 'Закладки',

	// statistics
	'ST_NEW'		=> 'Новые',
	'ST_NEW_POSTS'	=> 'Новых сообщений',
	'ST_NEW_TOPICS'	=> 'Новых тем',
	'ST_NEW_ANNS'	=> 'Новых объявлений',
	'ST_NEW_STICKYS'=> 'Новых прилепленных',
	'ST_TOP'		=> 'Всего',
	'ST_TOP_ANNS'	=> 'Всего объявлений',
	'ST_TOP_STICKYS'=> 'Всего прилепленных',
	'ST_TOT_ATTACH'	=> 'Всего вложений',

	// search
	'SH'		=> 'Найти',
	'SH_SITE'	=> 'форумы',
	'SH_POSTS'	=> 'сообщения',
	'SH_AUTHOR'	=> 'автор',
	'SH_ENGINE'	=> 'поисковики',
	'SH_ADV'	=> 'расширенный поиск',
	
	// recent
	'RECENT_TOPIC'		=> 'Последние темы',
	'RECENT_ANN'		=> 'Последние объявления',
	'RECENT_HOT_TOPIC'	=> 'Последние популярные темы',

	// random member
	'RND_MEMBER'	=> 'Случайный пользователь',
	'RND_JOIN'		=> 'Зарегистрирован',
	'RND_POSTS'		=> 'Сообщений',
	'RND_OCC'		=> 'Род занятий',
	'RND_FROM'		=> 'Откуда',
	'RND_WWW'		=> 'Web-страница',

	// top poster
	'TOP_POSTER'	=> 'Больше всех написал(а)',

	// links
	'LINKS'	=> 'Ссылки',

	// latest members
	'LATEST_MEMBERS'	=> 'Новые пользователи',

	// make donation
	'DONATION' 		=> 'Помочь проекту',
	'DONATION_TEXT'	=> 'предоставляет доступные на сайте сервисы без извлечения прибыли. Любая оказанная Вами помощь будет использована для оплаты стоимости домена, хостинга и прочих расходов по содержанию сайта.',
	'PAY_MSG'		=> 'После выбора из меню суммы, которую Вы можете и хотите пожертвовать, Вы можете сделать платёж, кликнув по картинке с эмблемой PayPal.',
	'PAY_ITEM'		=> 'Внести деньги', // paypal item

	// main menu
	'M_MENU' 	=> 'Меню',
	'M_CONTENT'	=> 'Контент',
	'M_ACP'		=> 'Администраторский раздел',
	'M_HELP'	=> 'Помощь',
	'M_BBCODE'	=> 'BBCode FAQ',
	'M_TERMS'	=> 'Условия использования',
	'M_PRV'		=> 'Политика конфиденциальности',
	'M_SEARCH'	=> 'Поиск',

	// link us
	'LINK_US'		=> 'Ссылка на сайт',
	'LINK_US_TXT'	=> 'Пожалуйста разместите ссылку на  <strong>%s</strong>. Используйте следующий HTML:',

	// friends
	'FRIENDS'				=> 'Друзья',
	'FRIENDS_OFFLINE'		=> 'Не в сети',
	'FRIENDS_ONLINE'		=> 'В сети',
	'NO_FRIENDS'			=> 'Друзья пока не выбраны',
	'NO_FRIENDS_OFFLINE'	=> 'Нет друзей не в сети',
	'NO_FRIENDS_ONLINE'		=> 'Нет друзей в сети',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Последние визиты ботов',
	
	// wordgraph
	'WORDGRAPH'				=> 'График популярности слов',

	// change style
	'BOARD_STYLE'			=> 'Стиль форума',
	'STYLE_CHOOSE'			=> 'Выбрать стиль',
		
	// team
	'NO_ADMINISTRATORS_P'	=> 'Нет администраторов',
	'NO_MODERATORS_P'		=> 'Нет модераторов',

	// average Statistics
	'TOPICS_PER_DAY_OTHER'	=> 'Тем в день: <strong>%d</strong>',
	'TOPICS_PER_DAY_ZERO'	=> 'Тем в день: <strong>0</strong>',
	'POSTS_PER_DAY_OTHER'	=> 'Сообщений в день: <strong>%d</strong>',
	'POSTS_PER_DAY_ZERO'	=> 'Сообщений в день: <strong>0</strong>',
	'USERS_PER_DAY_OTHER'	=> 'Пользователей в день: <strong>%d</strong>',
	'USERS_PER_DAY_ZERO'	=> 'Пользователей в день: <strong>0</strong>',
	'TOPICS_PER_USER_OTHER'	=> 'Тем на пользователя: <strong>%d</strong>',
	'TOPICS_PER_USER_ZERO'	=> 'Тем на пользователя: <strong>0</strong>',
	'POSTS_PER_USER_OTHER'	=> 'Сообщений на пользователя: <strong>%d</strong>',
	'POSTS_PER_USER_ZERO'	=> 'Сообщений на пользователя: <strong>0</strong>',
	'POSTS_PER_TOPIC_OTHER'	=> 'Сообщений на темы: <strong>%d</strong>',
	'POSTS_PER_TOPIC_ZERO'	=> 'Сообщений на темы: <strong>0</strong>',

	// poll
	'LATEST_POLLS'			=> 'Последние опросы',
	'NO_OPTIONS'			=> 'Этот опрос не имеет никаких доступных опций.',
	'NO_POLL'				=> 'Опросов нет',
	'RETURN_PORTAL'			=> '%sВернуться на портал%s',

	// other
	'POLL'		=> 'Опрос',
	'CLOCK'		=> 'Часы',
	'SPONSOR'	=> 'Спонсоры',
	
	/**
	* DO NOT REMOVE or CHANGE
	*/
	'PORTAL_COPY'	=> '',
	)
);

// mini calendar
$lang = array_merge($lang, array(
	'Mini_Cal_calendar'		=> 'Календарь',
	'Mini_Cal_add_event'	=> 'Добавить событие',
	'Mini_Cal_events'		=> 'Приближающиеся события',
	'Mini_Cal_no_events'	=> 'Ни одного',
	'Mini_cal_this_event'	=> 'В этом месяце праздничных событий',
	'View_next_month'		=> 'следующий месяц',
	'View_previous_month'	=> 'предыдущий месяц',

// uses MySQL DATE_FORMAT - %c  long_month, numeric (1..12) - %e  Day of the long_month, numeric (0..31)
// see http://www.mysql.com/doc/D/a/Date_and_time_functions.html for more details
// currently supports: %a, %b, %c, %d, %e, %m, %y, %Y, %H, %k, %h, %l, %i, %s, %p
	'Mini_Cal_date_format'		=> '%b %e',
	'Mini_Cal_date_format_Time'	=> '%H:%i',

// if you change the first day of the week in constants.php, you should change values for the short day names accordingly
// e.g. FDOW = Sunday -> $lang['mini_cal']['day'][1] = 'Su'; ... $lang['mini_cal']['day'][7] = 'Sa'; 
//      FDOW = Monday -> $lang['mini_cal']['day'][1] = 'Mo'; ... $lang['mini_cal']['day'][7] = 'Su'; 
	'mini_cal'	=> array(
		'day'	=> array(
			'1'	=> 'Вс',
			'2'	=> 'Пн',
			'3'	=> 'Вт',
			'4'	=> 'Ср',
			'5'	=> 'Чт',
			'6'	=> 'Пт',
			'7'	=> 'Сб',
		),

		'month'	=> array(
			'1'	=> 'Янв',
			'2'	=> 'Фев',
			'3'	=> 'Мар',
			'4'	=> 'Апр',
			'5'	=> 'Май',
			'6'	=> 'Июн',
			'7'	=> 'Июл',
			'8'	=> 'Авг',
			'9'	=> 'Сен',
			'10'=> 'Окт',
			'11'=> 'Ноя',
			'12'=> 'Дек',
		),

		'long_month'=> array(
			'1'	=> 'Январь',
			'2'	=> 'Февраль',
			'3'	=> 'Март',
			'4'	=> 'Апрель',
			'5'	=> 'Май',
			'6'	=> 'Июнь',
			'7'	=> 'Июль',
			'8'	=> 'Август',
			'9'	=> 'Сентябрь',
			'10'=> 'Октябрь',
			'11'=> 'Ноябрь',
			'12'=> 'Декабрь',
		),
	),
));

?>
