<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: misc.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
        'ALREADY_SUBSCRIBED'                => 'Вы уже подписаны.',

        'BLOG_USER_NOT_PROVIDED'        => 'Вы должны указать user_id или blog_id того, на что Вы хотите подписаться.',

        'NOT_ALLOWED_CHANGE_VOTE'        => 'Вам не разрешено менять Ваш голос.',
        'NOT_SUBSCRIBED'                        => 'Вы не подписаны.',

        'RESYNC_BLOG'                        => 'Синхронизировать блог',
        'RESYNC_BLOG_CONFIRM'                => 'Вы уверены, что хотите ресинхронизировать все данные блога?  Это требует времени.',
        'RESYNC_BLOG_SUCCESS'                => 'User Blog Mod был успешно ресинхронизирован.',

        'SEARCH_BLOG_ONLY'                        => 'Искать только сообщения',
        'SEARCH_BLOG_TITLE_ONLY'        => 'Искать только заголовки',
        'SEARCH_TITLE_MSG'                        => 'Искать заголовки и сообщения',
        'SUBSCRIBE_BLOG_CONFIRM'        => 'Как Вы хотите быть уведомлены о новых комментариях в этом блоге?',
        'SUBSCRIBE_BLOG_TITLE'                => 'Подписка на блог',
        'SUBSCRIPTION_ADDED'                => 'Подписка успешно добавлена.',
        'SUBSCRIPTION_REMOVED'                => 'Ваша подписка успешно удалена',

        'UNSUBSCRIBE_BLOG_CONFIRM'        => 'Вы уверены, что хотите отписаться от этого блога?',
        'UNSUBSCRIBE_USER_CONFIRM'        => 'Вы уверены, что хотите отписаться от этого пользователя?',
));

?>
