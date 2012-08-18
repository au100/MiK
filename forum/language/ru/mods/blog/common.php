<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
        'AVAILABLE_FEEDS'               => 'Доступные фиды',

        'BLOG'                          => 'Блог',
        'BLOGS'                         => 'Блоги',
        'BLOG_CONTROL_PANEL'            => 'Панель управления блогом',
        'BLOG_CREDITS'                  => 'Blogs powered by <a href="http://www.lithiumstudios.org/">User Blog Mod</a> &copy; EXreaction',
        'BLOG_DELETED_BY_MSG'           => 'Эта запись была удалена %1$s на %2$s.  Кликните <b>%3$sздесь%4$s</b> для восстановления этого блога.',
        'BLOG_DESCRIPTION'              => 'Описание блога',
        'BLOG_LINKS'                    => 'Ссылки блога',
        'BLOG_MCP'                      => 'Панель Модератора блога',
        'BLOG_NOT_EXIST'                => 'Запрошенная запись не существует.',
        'BLOG_SEARCH_BACKEND_NOT_EXIST' => 'Поисковй интерфейс не найден.  Пожалуйста обратитесь к администратору или модератору.',
        'BLOG_STATS'                    => 'Статистика блога',
        'BLOG_SUBJECT'                  => 'Тема блога',
        'BLOG_TITLE'                    => 'Заголовок блога',

        'CATEGORIES'                    => 'Категории',
        'CATEGORY'                      => 'Категория',
        'CATEGORY_DESCRIPTION'          => 'Описания категории',
        'CATEGORY_NAME'                 => 'Имя категории',
        'CATEGORY_RULES'                => 'Правила категории',
        'CLICK_INSTALL_BLOG'            => 'Кликните %sздесь%s чтобы инсталлировать User Blog Mod',
        'CNT_BLOGS'                     => '%s записей в блоге',
        'CNT_REPLIES'                   => '%s ответов',
        'CNT_VIEWS'                     => 'Просмотрено %s раз',
        'CONTINUE'                      => 'Продолжить',
        'CONTINUED'                     => 'Продолжено',

        'DELETE_BLOG'                   => 'Удалить запись',
        'DELETE_REPLY'                  => 'Удалить комментарий',

        'EDIT_BLOG'                     => 'Изменить запись',
        'EDIT_REPLY'                    => 'Изменить ответ',

        'FEED'                          => 'Фид',
        'FOE_PERMISSIONS'               => 'Разрешения врагов',
        'FRIEND_PERMISSIONS'            => 'Разрешения друзей',

        'GUEST_PERMISSIONS'             => 'Разрешения гостя',

        'LIMIT'                         => 'Лимит',

        'MUST_BE_FOUNDER'               => 'Вы должны быть администратором, чтобы получить доступ к этой странице.',
        'MY_BLOG'                       => 'Мой Блог',

        'NEW_BLOG'                      => 'Новая запись',
        'NO_BLOGS'                      => 'Записей нет.',
        'NO_BLOGS_USER'                 => 'Этот пользователь не публиковал записи.',
        'NO_BLOGS_USER_SORT_DAYS'       => 'Этот пользователь не публиковал записи последние %s дней',
        'NO_CATEGORIES'                 => 'Категорий нет',
        'NO_CATEGORY'                   => 'Выбранная категория не существует.',
        'NO_PERMISSIONS_READ'           => 'К сожалению, Вам не разрешено читать этот блог.',
        'NO_REPLIES'                    => 'Комментариев нет.',

        'ONE_BLOG'                      => '1 блог',
        'ONE_REPLY'                     => '1 комментарий',
        'ONE_VIEW'                      => 'Просмотрено 1 раз',

        'PERMANENT_LINK'                => 'Постоянная ссылка',
        'PLUGIN_TEMPLATE_MISSING'		=> 'Файл вставляемого шаблона отсутствует.',	
        'POPULAR_BLOGS'                 => 'Популярные записи',
        'POST_A_NEW_BLOG'               => 'Добавить запись',
        'POST_A_NEW_REPLY'              => 'Оставить комментарий',

        'RANDOM_BLOGS'                  => 'Случайные записи',
        'RECENT_BLOGS'                  => 'Недавние записи',
        'REGISTERED_PERMISSIONS'        => 'Разрешения пользователей',
        'REPLIES'                       => 'Комментарии',
        'REPLY'                         => 'Комментарий',
        'REPLY_COUNT'                   => 'Кол-во комментариев',
        'REPLY_DELETED_BY_MSG'          => 'Этот комментарий был удален %1$s на %2$s.  Кликните <b>%3$sздесь%4$s</b> чтобы восстановить этот комментарий.',
        'REPLY_NOT_EXIST'               => 'Запрошенный комментарий не существует.',
        'REPORT_BLOG'                   => 'Обжаловать запись',
        'REPORT_REPLY'                  => 'Обжаловать комментарий',
        'RETURN_BLOG_MAIN'              => '%1$sВернуться к %2блогу $s-а%3$s',
        'RETURN_BLOG_OWN'               => '%sВернуться к Вашему блогу%s',
        'RETURN_MAIN'                   => 'Кликните %sздесь%s чтобы вернуться на главную страницу блогов',

        'SEARCH_BLOGS'                  => 'Поиск блогов',
        'SUBSCRIBE'                     => 'Подписаться',
        'SUBSCRIBE_BLOG'                => 'Подписаться на этот блог',
        'SUBSCRIBE_USER'                => 'Подписаться на блоги этого пользователя',
        'SUBSCRIPTION'                  => 'Подписка',
        'SUBSCRIPTION_EXPLAIN'          => 'Выберите, как Вы хотите быть уведомлены о новых ответах в этом блоге.',
        'SUBSCRIPTION_EXPLAIN_REPLY'    => 'Если Вы уже подписаны на этот блог, будут показаны Ваши текущие опции подписки (и независимо от того, чтобы Вы выберите, это будет Ваш новый набор подписок).',

        'TOTAL_BLOG_ENTRIES'            => 'Всего записей',

        'UNSUBSCRIBE'                   => 'Отписаться',
        'UNSUBSCRIBE_BLOG'              => 'Отписаться от этого блога',
        'UNSUBSCRIBE_USER'              => 'Отписаться от этого пользователя',
        'USERNAMES_BLOGS'               => 'Блог %s-а',
        'USERNAMES_DELETED_BLOGS'       => 'Удаленные записи %s-а',
        'USER_BLOGS'                    => 'Блоги',
        'USER_BLOG_MOD_DISABLED'        => 'User Blog Mod был отключен.',
        'USER_BLOG_RATINGS_DISABLED'    => 'Система рейтинга была отключена.',

        'VIEW_BLOG'                     => 'Посмотреть блог',
        'VIEW_REPLY'                    => 'Посмотреть ответ',

        'WARNING'                       => 'Предупреждение',
));

?>
