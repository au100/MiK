<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: info_acp_blogs.php 493 2008-08-28 17:43:39Z exreaction@gmail.com $
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
        'ACP_BLOGS'                            => 'Блоги',
        'ACP_BLOG_CATEGORIES'                  => 'Категории',
        'ACP_BLOG_PLUGINS'                     => 'Plugin-ы',
        'ACP_BLOG_SEARCH'                      => 'Поиск',
        'ACP_BLOG_SETTINGS'                    => 'Настройки блогов',

	    'IMG_BUTTON_BLOG_NEW'			       => 'Создать новый блог',

        'LOG_BLOG_CATEGORY_ADD'                => '<strong>Добавлена новая категория блогов</strong><br />В» %s',
        'LOG_BLOG_CATEGORY_DELETE'             => '<strong>Удалена категория блогов</strong><br />В» %s',
        'LOG_BLOG_CATEGORY_EDIT'               => '<strong>Изменена категория блогов</strong><br />В» %s',
        'LOG_BLOG_CONFIG'                      => '<strong>Изменены настройки блогов</strong>',
        'LOG_BLOG_CONFIG_SEARCH'               => '<strong>Изменены настройки поиска блогов</strong>',
        'LOG_BLOG_PLUGIN_DISABLED'             => '<strong>Отключен plugin блога</strong><br />В» %s',
        'LOG_BLOG_PLUGIN_ENABLED'              => '<strong>Включен plugin блога</strong><br />В» %s',
        'LOG_BLOG_PLUGIN_INSTALLED'            => '<strong>Инсталлирован plugin блога</strong><br />В» %s',
        'LOG_BLOG_PLUGIN_UNINSTALLED'          => '<strong>Деинсталлирован plugin блога</strong><br />В» %s',
        'LOG_BLOG_PLUGIN_UPDATED'              => '<strong>Обновлен plugin блога</strong><br />В» %s',
        'LOG_BLOG_SEARCH_INDEX_CREATED'        => '<strong>Перестроен поисковый индекс блога</strong>',
        'LOG_BLOG_SEARCH_INDEX_REMOVED'        => '<strong>Удален поисковый индекс блога</strong>',
));

?>
