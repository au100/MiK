<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: acp.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
        'ACP_BLOG_CATEGORIES_EXPLAIN'           => 'Здесь Вы можете добавлять/редактировать/управлять категориями блогов.',
        'ACP_BLOG_PLUGINS_EXPLAIN'              => 'Здесь Вы можете включать/выключать/инсталлировать/деинсталлировать plugin-ы для User Blog Mod.<br /><br />Вы так же можете перемещать plugin-ы выше/ниже в списке, что переместит их выше/ниже по приоритету (какой будет показываться первым).',
        'ALLOWED_IN_BLOG'                       => 'Разрешено в User Blogs',
        'ALLOW_IN_BLOG'                         => 'Разрешить в User Blogs',

        'BLOG_ALWAYS_SHOW_URL'                  => 'Всегда показывать ссылку на блог в профиле',
        'BLOG_ALWAYS_SHOW_URL_EXPLAIN'          => 'Если это установлено на Нет, то ссылка на блог не будет показываться в профиле пользователя пока у него нет записей в блоге.',
        'BLOG_ATTACHMENT_SETTINGS'              => 'Настройки Вложений',
        'BLOG_ENABLE_ATTACHMENTS'               => 'Вложения',
        'BLOG_ENABLE_ATTACHMENTS_EXPLAIN'       => 'Включить или выключить систему вложений для записей блогов и комментариев',
        'BLOG_ENABLE_FEEDS'                     => 'RSS/ATOM/Javascript фиды',
        'BLOG_ENABLE_RATINGS'                   => 'Рейтинги блогов',
        'BLOG_ENABLE_RATINGS_EXPLAIN'           => 'Выключите чтобы запретить рейтинги блогов.',
        'BLOG_ENABLE_SEARCH'                    => 'Поиск',
        'BLOG_ENABLE_SEARCH_EXPLAIN'            => 'Включить поисковую систему для User Blog Mod (эта поисковая система работает отдельно от поисковой системы форума).',
        'BLOG_ENABLE_SEO'                       => 'SEO Url-ы',
        'BLOG_ENABLE_SEO_EXPLAIN'               => 'Вы ДОЛЖНЫ иметь включеный mod_rewrite чтобы это работало. Если URL-ы блогов не работают, отключите это.',
        'BLOG_ENABLE_USER_PERMISSIONS'          => 'Пользовательский доступ',
        'BLOG_ENABLE_USER_PERMISSIONS_EXPLAIN'  => 'Включите систему пользовательского доступа чтобы разрешить пользователям определять разрешения доступа к блогу (для гостей, зарегистрированных пользователей, врагов, и друзей).  Администраторам и модераторам всегда разрешено просматривать/отвечать в блогах.',
        'BLOG_ENABLE_ZEBRA'                                                => 'Разделений друзей/врагов',
        'BLOG_ENABLE_ZEBRA_EXPLAIN'             => 'Если Вы выключите это, пользователи не смогут устанавливать разрешения доступа для друзей/врагов, которые просматривают их блог, так же некоторые другие функции могут перестать работать.',
        'BLOG_GUEST_CAPTCHA'                    => 'Требовать, чтобы гости вводили код с captcha-картинки перед публикацией',
        'BLOG_INFORM'                           => 'Пользователи для оповещения через PM о записях и комментариях нуждающихся в одобрении',
        'BLOG_INFORM_EXPLAIN'                   => 'Введите user_id пользователей, который должны получить Личное Сообщение когда отправлен комментарий или запись в блог, или новая запись нуждается в одобрении.  Разделяйте нескольких пользователей запятой, не ставьте пробелы.',
        'BLOG_MAX_ATTACHMENTS'                  => 'Максимально разрешенное количество вложений для записи/комментария',
        'BLOG_MAX_ATTACHMENTS_EXPLAIN'          => 'Обратите внимание, что это может быть переопределено для каждого пользователя в правах доступа.',
        'BLOG_MAX_RATING'                       => 'Максимальный рейтинг блога',
        'BLOG_MAX_RATING_EXPLAIN'               => 'Максимальный рейтинг которого можно достичь.',
	    'BLOG_MESSAGE_FROM'						=> 'Сообщения присланные от',
    	'BLOG_MESSAGE_FROM_EXPLAIN'				=> 'Id пользователя о чьих сообщениях вы хотите получать уведомление.  Если такого пользователя не существует, то будет уведомление об ошибке.',
        'BLOG_MIN_RATING'                       => 'Минимальный рейтинг блога',
        'BLOG_MIN_RATING_EXPLAIN'               => 'Минимальный рейтинг которого можно достичь.',
        'BLOG_POST_VIEW_SETTINGS'               => 'Настройки просмотра и постинга блога',
        'BLOG_QUICK_REPLY'                      => 'Быстрый ответ',
        'BLOG_QUICK_REPLY_EXPLAIN'              => 'Включает отображение формы быстрого ответа при просмотре блога.',
        'BLOG_SETTINGS'                         => 'Настройки User Blog',
        'BLOG_SETTINGS_EXPLAIN'                 => 'Здесь Вы можете указать настройки для User Blog mod.',

        'CATEGORY_CREATED'                      => 'Категория успешно создана!',
        'CATEGORY_DELETE'                       => 'Удалить категорию',
        'CATEGORY_DELETED'                      => 'Категория успешно удалена!',
        'CATEGORY_DELETE_EXPLAIN'               => 'Вы уверены, что хотите удалить эту категорию?',
        'CATEGORY_DESCRIPTION_EXPLAIN'          => 'Описание, для чего предназначена категория.',
        'CATEGORY_EDIT_EXPLAIN'                 => 'Здесь Вы можете изменить настройки категории.',
        'CATEGORY_INDEX'                        => 'Индекс категорий',
        'CATEGORY_NAME_EMPTY'                   => 'Вы должны указать имя для категории',
        'CATEGORY_PARENT'                       => 'Родительская категория',
        'CATEGORY_RULES_EXPLAIN'                => 'Здесь Вы можете описать правила по которым будет показываться каждая категория.',
        'CATEGORY_SETTINGS'                     => 'Настройки категорий',
        'CATEGORY_UPDATED'                      => 'Категория успешно обновлена!',
        'CLICK_CHECK_NEW_VERSION'               => 'Кликните %sздесь%s чтобы проверить наличие свежей версии User Blog Mod',
        'CLICK_GET_NEW_VERSION'                 => 'Кликните %sздесь%s чтобы скачать последнюю версию User Blog Mod',
        'CLICK_UPDATE'                          => 'Кликните %sздесь%s чтобы обновить БД для User Blog Mod',
        'CONTINUE'                              => 'Продолжить',
        'COPYRIGHT'                             => 'Copyright',
        'CREATE_CATEGORY'                       => 'Создать категорию',

        'DATABASE_VERSION'                      => 'Версия БД',
        'DEFAULT_TEXT_LIMIT'                    => 'Текстовый лимит по-умолчанию для главных страниц блога',
        'DEFAULT_TEXT_LIMIT_EXPLAIN'            => 'Текст сверх этого лимита будет отрезан от сообщения (чтобы сократить его)',
        'DELETE_SUBCATEGORIES'                  => 'Удалить Подкатегории',

        'EDIT_CATEGORY'                         => 'Редактировать Категорию',
        'ENABLE_BLOG_CUSTOM_PROFILES'           => 'Отображать дополнительные поля профиля на страницах User Blog',
        'ENABLE_SUBSCRIPTIONS'                  => 'Пользовательские подписки',
        'ENABLE_SUBSCRIPTIONS_EXPLAIN'          => 'Разрешает зарегистрированным пользователям подписываться на блоги и получать уведомления о новых публикациях в блогах на которые они подписаны.',
        'ENABLE_USER_BLOG'                      => 'User Blog Mod',
        'ENABLE_USER_BLOG_EXPLAIN'              => 'Обратите внимание, что разделы ACP и UCP User Blog Mod-а будут всегда оставаться включеными, пока Mod инсталлирован (если Вы не выключаете или удаляете эти модули).',
        'ENABLE_USER_BLOG_PLUGINS'              => 'Система Plugin-ов',
        'ENABLE_USER_BLOG_PLUGINS_EXPLAIN'      => 'Если Вы включите это, все текущие установленные plugin-ы будут отключены, однако, обратите внимание, что раздел Plugins в ACP все еще будет отображаться.',

        'FILE_VERSION'                          => 'Версия Файлов',

        'INSTALLED_PLUGINS'                     => 'Инсталлированные plugin-ы',

        'LATEST_VERSION'                        => 'Последняя Версия',

        'MOVE_BLOGS_TO'                         => 'Переместить Блоги в',
        'MOVE_SUBCATEGORIES_TO'                 => 'Переместить подкатегории в',

        'NOT_ALLOWED_IN_BLOG'                   => 'Не разрешено в User Blogs',
        'NO_DESTINATION_CATEGORY'               => 'Нет Категории Назначения',
        'NO_INSTALLED_PLUGINS'                  => 'Нет инсталлированных Plugin-ов',
        'NO_PARENT'                             => 'Нет родителя',
        'NO_UNINSTALLED_PLUGINS'                => 'Нет неинсталлированных Plugin-ов',

        'OUTPUT_CPLINKS_BLOCK'                  => 'Ссылки блога внешнего профиля в дополнительных полях профиля',
        'OUTPUT_CPLINKS_BLOCK_EXPLAIN'          => 'Если это установлено на Нет то ссылка посмотреть блог в каждом профиле не будет отображаться используя дополнительные поля профиля.  Вам будет нужно вручную добавить ссылки в шаблон, если Вы хотите отображать их, когда это установлено на Нет.',

        'PARENT_NOT_EXIST'                      => 'Выбранные родитель не существуюет.',
        'PLUGINS_DISABLED'                      => 'Plugin-ы выключены.',
        'PLUGINS_NAME'                          => 'Название plugin-а',
        'PLUGIN_ACTIVATE'                       => 'Активировать',
        'PLUGIN_ALREADY_INSTALLED'              => 'Выбранный plugin уже был инсталлирован.',
        'PLUGIN_DEACTIVATE'                     => 'Деактивировать',
        'PLUGIN_INSTALL'                        => 'Инсталлировать',
        'PLUGIN_NOT_EXIST'                      => 'Выбранный plugin не существует.',
        'PLUGIN_NOT_INSTALLED'                  => 'Выбранный плагин не установлен.',
        'PLUGIN_UNINSTALL'                      => 'Деинсталлировать',
        'PLUGIN_UNINSTALL_CONFIRM'              => 'Вы уверены, что хотите деинсталлировать этот plugin?<br /><strong>Это удалит из БД все данные добавленные через этот мод (так что любые сохраненные данные будут утеряны)!</strong><br /><br />Вы должны вручную деинсталлировать любые изменения в файлах сделаные этим plugin-ом и удалить файлы plugin-а для полного удаления.',
        'PLUGIN_UPDATE'                         => 'Обновить БД',

        'REMOVE_ALL_BLOGS'                      => 'Удалить только категорию.',

        'SELECT_CATEGORY'                       => 'Выберите категорию',

        'UNINSTALLED_PLUGINS'                   => 'Деинсталлированные plugin-ы',
        'USER_TEXT_LIMIT'                       => 'Текстовый лимит по-умолчанию для страницы блога',
        'USER_TEXT_LIMIT_EXPLAIN'               => 'Тоже самое что текстовый лимит по-умолчанию, но это лимит для посмотреть страницу пользователя',

        'VERSION'                               => 'Версия',
));

?>
