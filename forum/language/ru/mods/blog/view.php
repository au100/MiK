<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: view.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
        'AVERAGE_OF_RATING'                                => 'Средний рейтинг %s',
        'AVERAGE_OF_RATINGS'                        => 'Средние рейтинги %s',

        'CLICK_HERE_SHOW_POST'                        => 'Кликните здесь, чтобы показать пост.',
        'CNT_COMMENTS'                                        => '%s комментариев',
        'COMMENTS'                                                => 'Комментарии',

        'DELETED_REPLY_SHOW'                        => 'Этот комментарий был временно удален.  Кликните здесь чтобы показать комментарий.',

        'LAST_VISIT_BLOGS'                                => 'Записи после последнего посещения',

        'MY_RATING'                                                => 'Мой рейтинг',

        'NO_DELETED_BLOGS'                                => 'Нет записей удаленных этим пользователем.',
        'NO_DELETED_BLOGS_SORT_DAYS'        => 'Нет удаленных записей, восстановленных этим пользователем в последние %s дней.',

        'ONE_COMMENT'                                        => '1 комментарий',

        'POSTED_BY_FOE'                                        => 'Этот пост был отправлен %s, который в настоящее время находится в Вашем списке игнорируемых.',

        'RANDOM_BLOG'                                        => 'Случайная запись',
        'RATE_ME'                                                => '%1$s из %2$s',
        'RECENT_COMMENTS'                                => 'Недавние комментарии',
        'REMOVE_RATING'                                        => 'Сбросить рейтинг',
        'REPLY_SHOW_NO_JS'                                => 'Вы должны включить Javascript чтобы посмотреть этот пост.',
        'REPORTED'                                        => 'Это сообщение было обжалованно. Кликните здесь, чтобы закрыть.',

        'SUBCATEGORIES'                                        => 'Подкатегории',
        'SUBCATEGORY'                                        => 'Подкатегория',

        'TOTAL_NUMBER_OF_BLOGS'                        => 'Всего записей',
        'TOTAL_NUMBER_OF_REPLIES'                => 'Всего комментариев',

        'UNAPPROVED'                                        => 'Это сообщение нуждается в проверке. Кликните здесь, чтобы одобрить это сообщение.',
));

?>
