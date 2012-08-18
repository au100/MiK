<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: ucp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
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

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
        'BLOG_CSS'                                                                => 'CSS блога',
        'BLOG_CSS_EXPLAIN'                                                => 'Здесь Вы можете ввести любой CSS код, чтобы изменить формат и стиль Вашего блога так, как Вам хочется.',
        'BLOG_INSTANT_REDIRECT'                                        => 'Моментальное перенаправление',
        'BLOG_INSTANT_REDIRECT_EXPLAIN'                        => 'Это заставит User Blog Mod немедленно переадресовать к следующей странице вместо того, чтобы отображать страницу Информация.',
        'BLOG_STYLE'                                                        => 'Стиль блога',
        'BLOG_STYLE_EXPLAIN'                                        => 'Выберите стиль, который будет использоваться для Вашего блога.<br />Если стиль имеет символ * после имени, Вы можете ввести свой CSS код чтобы разнообразить стиль (если Вы имеете разрешение).',

        'NONE'                                                                        => 'Нет',
        'NO_PERMISSIONS'                                                => 'Не может читать и отвечать на Ваши записи.',

        'REPLY_PERMISSIONS'                                                => 'Может читать и отвечать на Ваши записи.',
        'RESYNC_PERMISSIONS'                                        => 'Ресинхронизировать разрешения',
        'RESYNC_PERMISSIONS_EXPLAIN'                        => 'Отметьте это, если Вы хотите ресинхронизировать все записи в блоге, чтобы они получили разрешения установленные выше.',

        'SUBSCRIPTION_DEFAULT'                                        => 'Подписка по-умолчанию',
        'SUBSCRIPTION_DEFAULT_EXPLAIN'                        => 'Выберите типы подписки, которые хотели бы получать по-умолчанию, когда кто-то комментирует Вашу запись, или запись которую уже комментировали Вы.  Вы можете установить это для каждой записи, которую Вы создаете.',

        'UCP_BLOG_PERMISSIONS_EXPLAIN'                        => 'Здесь Вы можете изменять настройки разрещений для Вашего блога.<br />Обратите внимание, что глобальные разрешения форума имеют приоритет над разрешениями установленными здесь.',
        'UCP_BLOG_SETTINGS_EXPLAIN'                                => '',
        'UCP_BLOG_TITLE_DESCRIPTION_EXPLAIN'        => 'Здесь Вы можете указать заголовок и описание для Вашего блога.',
        'USER_PERMISSIONS_DISABLED'                                => 'Система Пользовательских Разрешений была отключена Администратором.',

        'VIEW_PERMISSIONS'                                                => 'Может читать Ваши записи.',
));

?>
