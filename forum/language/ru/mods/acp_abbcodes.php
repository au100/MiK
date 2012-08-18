<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [ru][Rusian]
* @version: $Id: acp_abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
* @translater: Перевод сделал A.R.T. Translate by A.R.T.
*
**/

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
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

$lang = array_merge($lang, array(
	'ACP_ABBCODES'						=> 'Advanced BBcodes Box 3',
	'ACP_ABBCODES_EXPLAIN'				=> 'Здесь вы можете управлять стилями для <strong>[ <a href="http://www.mssti.com/phpbb3" target="_blank">ABBC3</a> ]</strong> на вашем форуме.<br/>Вы можете изменять, обновлять, выключать, включать существующие стили. Вы также можете посмотреть, как будет выглядеть Ваш форум, используя финкцию предпросмотра. <br/><em>Текущий стиль помечен звёздочкой (*). Также перечисляется общее количество пользователей использующих стиль.</em>',

	'ABBCODES_DISABLE'					=> 'ABBC3',
	'ABBCODES_DISABLE_EXPLAIN'			=> 'Вкл\Выкл <strong>Advanced BBodes Box 3</strong> для пользователей, и\или использовать phpbb3 клавиши сообщений.',
	'ABBCODES_BG'						=> 'Фоновое изображение',
	'ABBCODES_BG_EXPLAIN'				=> 'Это установит фоновое изображение для кнопок.<br/>Выберите <em>no image</em> для сохранения общего стиля.',
	'ABBCODES_TAB'						=> 'Показовать иконки для разделов тэгов',
	'ABBCODES_BOXRESIZE'				=> 'Изменить размер поля ввода текста',
	'ABBCODES_BOXRESIZE_EXPLAIN'		=> 'Показывать кнопки для изменения размера текстового поля.',

	'ABBCODES_GREYBOX'					=> 'Используйте GreyBox &reg;',
	'ABBCODES_GREYBOX_EXPLAIN'			=> 'GreyBox &reg; возможность использования <em>эскиза</em> и <em>измененного изображения</em> в полный размер. Если нет, новое окно браузера будет открыто.',
	'ABBCODES_RESIZE'					=> 'Изменять размер больших изображений',
	'ABBCODES_RESIZE_EXPLAIN'			=> 'Это исправляет ошибку с [img] bbcode, когда кто-то добавляет огромное изображение, которое больше содержания сообщения.',
	'ABBCODES_MAX_IMAGE_SIZE'			=> 'Максимальная ширина в пикселях',
	'ABBCODES_RESIZE_METHOD'			=> 'Метод изменения размера',
	'ABBCODES_RESIZE_METHOD_EXPLAIN'	=> 'Выберете способ изменения размера изображения.',
	//	for translate :							   don't 		Yes			don't		Yes			don't			yes				don't		yes
	'ABBCODES_RESIZE_METHODS'			=> array( 'greybox' => 'grey box', 'enlarge' => 'enlarge', 'samewindow' => 'same window', 'newwindow' => 'new window'),

	'ABBCODES_MAX_IMAGE_SIZE_EXPLAIN'	=> 'Размер изображения будет изменен, если его ширина превышает установленное здесь значение.',
	'ABBCODES_MAX_THUMB_WIDTH'			=> 'Максимальная ширина эскиза в пикселях',
	'ABBCODES_MAX_THUMB_WIDTH_EXPLAIN'	=> 'Созданный эскиз по ширине не будет превышать значение, установленное здесь.',

	'ABBCODES_CUSTOM_BBCODES'			=> 'Специальные bbcodes',
	'ABBCODES_CUSTOM_BBCODES_EXPLAIN'	=> 'Показывать иконки специальных bbcodes. Это включает совместимость с другими видео bbcodes как [youtube] и добавляет ваши собственные bbcodes (если есть).',
	'ABBCODES_VIDEO_SIZE'				=> 'Разрешение видео',
	'ABBCODES_VIDEO_SIZE_EXPLAIN'		=> 'Стандартные ширина и высота видео.',

));

$lang = array_merge($lang, array(
	'ABBCODES_SETINGS'					=> 'ABBC3 настройки',
	'ABBCODES_SETINGS_EXPLAIN'			=> 'Здесь вы можете определять стандарты <strong>ABBC3</strong>, вкл\выкл, и среди других настроек изменять стандартный фон.',

	'ABBCODES_CONFIG'					=> 'ABBC3 настройка компонентов',
	'ABBCODES_CONFIG_EXPLAIN'			=> 'На этой странице вы можете изменять порядок тэгов на странице сообщений или менять иконки,',

	'ABBCODES_NAME'						=> 'Имя тега',
	'ABBCODES_TAG'						=> 'Иконка тэга image',
	'ABBCODES_ORDER'					=> 'Порядок тэгов',
	'RESET_TO_DEFAULT'					=> 'Сброс на стандарт',
	'ABBCODES_BREAK_MOVER'				=> '<strong><i>Разрыв строки</i></strong>',
	'ABBCODES_DIVISION_MOVER'			=> '<strong><i>Разделение</i></strong>',

	'ABBCODES_MOD_DISABLE'				=> '<strong>Advanced BBcodes Box 3</strong> повреждён.<br/>',
	'ABBCODES_STATUS'					=> 'Статус',
	'ABBCODES_ACTIVATED'				=> 'Активен',
	'ABBCODES_DEACTIVATED'				=> 'Неактивен',

));
?>