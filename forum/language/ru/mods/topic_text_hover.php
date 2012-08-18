<?php
/**
*
* topic_title_hover [English]
*
* @package language
* @version $Id: topic_text_hover.php,v 1.1 2008/12/09 22:26:52 rmcgirr83 Exp $
* @copyright (c) 2008 Richard McGirr 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
    'ALLOW_TOPIC_TITLE_HOVER'    => 'Показывает текст при наведении',
    'ALLOW_TOPIC_TITLE_HOVER_EXPLAIN' => 'Позволяет показывать во всплывающей подсказке при наведении на заголовок сообщения текст первого сообщения, или текст последнего (при наведении на иконку "показать последнее сообщение") или оба вместе.',
    'ALLOW_TOPIC_TITLE_HOVER_CHAR' => 'Количество символов для отображения',
    'CHARS'   => 'Символы',
    'TEXT_HOVER_OPTIONS' => 'Показывать при наведении',
    'TEXT_HOVER_OPTIONS_EXPLAIN' => 'Что будет разрешено',
    'TOPIC_TEXT_HOVER_FIRST' => 'Первое сообщение',
    'TOPIC_TEXT_HOVER_LAST' => 'Последнее сообщение',
    'TOPIC_TEXT_HOVER_BOTH' => 'Оба сообщения',
));

?>
