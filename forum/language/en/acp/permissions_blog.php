<?php
/**
* @package language(permissions)
* @version $Id: permissions_blog.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
* @copyright (c) 2008 EXreaction, Lithium Studios
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Create a new category named Blog
$lang['permission_cat']['blog'] = 'Blog';

// User Permissions
$lang = array_merge($lang, array(
        'acl_u_blogview'                => array('lang' => 'Может видеть записи в блоге', 'cat' => 'blog'),
        'acl_u_blogpost'                => array('lang' => 'Может размещать записи в блоге', 'cat' => 'blog'),
        'acl_u_blogedit'                => array('lang' => 'Может редактировать свои записи', 'cat' => 'blog'),
        'acl_u_blogdelete'              => array('lang' => 'Может удалять свои записи', 'cat' => 'blog'),
        'acl_u_blognoapprove'           => array('lang' => 'Записи не нуждаются в одобрении перед размещением', 'cat' => 'blog'),
        'acl_u_blogreport'              => array('lang' => 'Может обжаловать записи и ответы', 'cat' => 'blog'),
        'acl_u_blogreply'               => array('lang' => 'Может оставлять комментарии к записям', 'cat' => 'blog'),
        'acl_u_blogreplyedit'           => array('lang' => 'Может редактировать свои комментарии', 'cat' => 'blog'),
        'acl_u_blogreplydelete'         => array('lang' => 'Может удалять свои комментарии', 'cat' => 'blog'),
        'acl_u_blogreplynoapprove'      => array('lang' => 'Комментарии не нуждаются в одобрении перед размещением', 'cat' => 'blog'),
        'acl_u_blogbbcode'              => array('lang' => 'Может использовать BBCode в записях и комментариях', 'cat' => 'blog'),
        'acl_u_blogsmilies'             => array('lang' => 'Может использовать смайлики в записях и комментариях', 'cat' => 'blog'),
        'acl_u_blogimg'                 => array('lang' => 'Может размещать изображения в записях и комментариях', 'cat' => 'blog'),
        'acl_u_blogurl'                 => array('lang' => 'Может размещать URL-ы в записях и комментариях', 'cat' => 'blog'),
        'acl_u_blogflash'               => array('lang' => 'Может размещать Flash в записях и комментариях', 'cat' => 'blog'),
        'acl_u_blogmoderate'            => array('lang' => 'Может модерировать (редактировать и удалять) комментарии в своем блоге.', 'cat' => 'blog'),
        'acl_u_blogattach'              => array('lang' => 'Может размещать аттачи в записях и комментариях', 'cat' => 'blog'),
        'acl_u_blognolimitattach'       => array('lang' => 'Может игнорировать ограничения на размер и количество аттачей', 'cat' => 'blog'),

        'acl_u_blog_create_poll'        => array('lang' => 'Может создавать опросы', 'cat' => 'blog'),
        'acl_u_blog_vote'               => array('lang' => 'Может голосовать в опросах', 'cat' => 'blog'),
        'acl_u_blog_vote_change'        => array('lang' => 'Может изменять существующий опрос', 'cat' => 'blog'),
        'acl_u_blog_style'              => array('lang' => 'Может выбирать стиль для использования в собственном блоге', 'cat' => 'blog'),
        'acl_u_blog_css'                => array('lang' => 'Может внедрять в них собственный CSS код, чтобы настроить стиль своего блога по своему вкусу.', 'cat' => 'blog'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
        'acl_m_blogapprove'             => array('lang' => 'Может видеть не одобренные записи и одобрять их для публикации', 'cat' => 'blog'),
        'acl_m_blogedit'                => array('lang' => 'Может редактировать записи', 'cat' => 'blog'),
        'acl_m_bloglockedit'            => array('lang' => 'Может блокировать редактирование записей', 'cat' => 'blog'),
        'acl_m_blogdelete'              => array('lang' => 'Может удалять и восстанавливать записи', 'cat' => 'blog'),
        'acl_m_blogreport'              => array('lang' => 'Может закрывать и удалять обжалования записей.', 'cat' => 'blog'),
        'acl_m_blogreplyapprove'        => array('lang' => 'Может видеть не одобренные комментарии и одобрять их для публикации', 'cat' => 'blog'),
        'acl_m_blogreplyedit'           => array('lang' => 'Может редактировать комментарии', 'cat' => 'blog'),
        'acl_m_blogreplylockedit'       => array('lang' => 'Может блокировать редактирование коментариев', 'cat' => 'blog'),
        'acl_m_blogreplydelete'         => array('lang' => 'Может удалять и восстанавливать комментарии', 'cat' => 'blog'),
        'acl_m_blogreplyreport'         => array('lang' => 'Может закрывать и удалять обжалования записей.', 'cat' => 'blog'),
));

// Administrator Permissions
$lang = array_merge($lang, array(
        'acl_a_blogmanage'              => array('lang' => 'Может менять настройки блога', 'cat' => 'blog'),
        'acl_a_blogdelete'              => array('lang' => 'Может непрерывно удалять записи', 'cat' => 'blog'),
        'acl_a_blogreplydelete'         => array('lang' => 'Может массово удалять комментарии к записям', 'cat' => 'blog'),
));
?>
