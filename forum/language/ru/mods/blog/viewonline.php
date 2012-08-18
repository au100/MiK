<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: common.php 375 2008-04-22 16:43:42Z exreaction@gmail.com $
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
        'ADDING_BLOG_ENTRY'                        => 'Пишет новую запись',
        'ADDING_BLOG_REPLY'                        => 'Пишет комментарий',

        'VIEWING_BLOGS'                                => 'Просматривает блоги',
        'VIEWING_BLOG_ENTRY'                => 'Читает запись',
        'VIEWING_USERS_BLOG'                => 'Читает блог %s-а',
));

?>
