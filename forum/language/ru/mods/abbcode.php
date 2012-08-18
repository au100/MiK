<?php
/**
* @package: phpBB3 :: Advanced BBCode box 3 -> language [en][English]
* @version: $Id: abbcode.php, v 1.0.9 2008/05/01 05:01:00 leviatan21 Exp $
* @copyright: leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb3/
* @license: http://opensource.org/licenses/gpl-license.php GNU Public License
* @author: leviatan21 - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=345763
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
// Help page
        'ABBC3_HELP_TITLE'						=> 'Advanced BBCode box 3 :: Страница помощи',
        'ABBC3_HELP_DESC'                    	=> 'Описание',
        'ABBC3_HELP_WRITE' 						=> 'Ваш написанный формат',
        'ABBC3_HELP_VIEW' 						=> 'Наш показываемый формат',
        'ABBC3_HELP_ABOUT' 						=> 'Advanced BBCode Box 3 разработал <a href="http://www.mssti.com/phpbb3">mssti</a>',
        'ABBC3_HELP_ALT'						=> 'Advanced BBCode Box 3 (ABBC3)',

// Image Resizer JS - Start
        'ABBC3_RESIZE_SMALL'                	=> 'Нажмите на это поле, чтобы увидеть полное изображение.',
        'ABBC3_RESIZE_FILESIZE'                	=> 'Размер изображения изменен. Нажмите на это поле, чтобы увидеть полное изображение. Размер оригинального изображения %1$sx%2$s и весит %3$sKB.',
        'ABBC3_RESIZE_NOFILESIZE'        		=> 'Размер изображения изменен. Нажмите на это поле, чтобы увидеть полное изображение. Размер оригинального изображения %1$sx%2$s.',
        'ABBC3_RESIZE_FULLSIZE'            	    => 'Нажмите на это поле, чтобы увидеть уменьшенное изображение.',

// Text to be applied to the helpline & mouseover & help page & Wizard texts
        'BBCODE_STYLES_TIP'                        => 'Подсказка: Стили для выделенного текста могут быть быстро применены.',

        'ABBC3_ERROR'                         		=> 'Ошибка : ',
        'ABBC3_ERROR_TAG'                        	=> 'Неожиданная ошибка при использовании тэга : ',

        'ABBC3_ID'                                 	=> 'Введите индетификатор :',
        'ABBC3_NOID'                                => 'Вы не ввели индетификатор',
        'ABBC3_LINK'                                => 'Введите ссылку на ',
        'ABBC3_DESC'                                => 'Введите описание для ',
        'ABBC3_NAME'                                => 'Описание',
        'ABBC3_NOLINK'                      		=> 'Вы не ввели ссылку на ',
        'ABBC3_NODESC'                    			=> 'Вы не ввели описание для ',
        'ABBC3_WIDTH'                               => 'Введите ширину',
        'ABBC3_WIDTH_NOTE'                        	=> 'Заметка: Величина может быть в процентах',
        'ABBC3_NOWIDTH'          					=> 'Вы не ввели ширину',
        'ABBC3_HEIGHT'              				=> 'Введите высоту',
        'ABBC3_HEIGHT_NOTE'                        	=> 'Заметка: Величина может быть в процентах',
        'ABBC3_NOHEIGHT'                			=> 'Вы не ввели высоту',

        'ABBC3_NOTE'                                => 'Заметка',
        'ABBC3_EXAMPLE'                  			=> 'Пример',
        'ABBC3_EXAMPLES'                        	=> 'Примеры',

// bbcodes texts
        // Font Type Dropdown
        'ABBC3_FONT_MOVER'                        	=> 'Тип шрифта',
        'ABBC3_FONT_TIP'                        	=> '[font=Comic Sans MS]текст[/font]',
        'ABBC3_FONT_NOTE'                        	=> 'Заметка: Вы можете использовать ваше собственное семейство шрифтов',
        'ABBC3_FONT_VIEW'                        	=> '<span style="font-family:Comic Sans MS">Это пример</span>',

        // Font Size Dropdown
        'ABBC3_FONT_GIANT'                        	=> 'Гигантский',
        'ABBC3_SIZE_MOVER'                        	=> 'Размер шрифта',
        'ABBC3_SIZE_TIP'                        	=> '[size=150]большой текст[/size]',
        'ABBC3_SIZE_NOTE'                        	=> 'Заметка: Обрабатывается как проценты',
        'ABBC3_SIZE_VIEW'                        	=> '<span style="font-size: 150%; line-height: 116%;">Текст-пример</span>',

        // Highlight Font Color Dropdown
        'ABBC3_HIGHLIGHT_MOVER'                		=> 'Подсветка текста',
        'ABBC3_HIGHLIGHT_TIP'                		=> '[highlight=yellow]Текст[/highlight]',
        'ABBC3_HIGHLIGHT_NOTE'                		=> 'Заметка: Вы можете использовать цвета HTML (color=#FF0000 или color=red)',
        'ABBC3_HIGHLIGHT_VIEW'                		=> '<span style="background-color: yellow;">Текст-пример</span>',

        // Font Color Dropdown
        'ABBC3_COLOR_MOVER'                        	=> 'Цвет шрифта',
        'ABBC3_COLOR_TIP'                        	=> '[color=red]Текст[/color]',
        'ABBC3_COLOR_NOTE'                        	=> 'Заметка: Вы можете использовать цвета HTML (color=#FF0000 или color=red)',
        'ABBC3_COLOR_VIEW'                        	=> '<span style="color:red">Текст-пример</span>',

        // Cut selected text
        'ABBC3_CUT_MOVER'                        	=> 'Удаляет выделенный текст',
        // Copy selected text
        'ABBC3_COPY_MOVER'                        	=> 'Копирует выделенный текст',
        // Paste previously copy text
        'ABBC3_PASTE_MOVER'                        	=> 'Вставить копированный текст',
        'ABBC3_PASTE_ERROR'                        	=> 'Пожалуйста, сначала копируйте потом вставляйте ',
        // Remove BBCode (Removes all BBCode tags from selected text)
        'ABBC3_PLAIN_MOVER'                        	=> 'Удаляет заголовки BBCodes выделенного текста',
        'ABBC3_NOSELECT_ERROR'                		=> 'Пожалуйста, сначала выделите текст ',

        // Code
        'ABBC3_CODE_MOVER'                        	=> 'Код',
        'ABBC3_CODE_TIP'                        	=> '[code]codigo[/code]',
        'ABBC3_CODE_VIEW'                        	=> '<dl class="codebox"><dt>'. $lang['CODE'] .': <a href="#" onclick="selectCode(this); return false;">'. $lang['SELECT_ALL_CODE'] .'</a></dt><dd><code>Текст-пример</code></dd></dl>',

        // Quote
        'ABBC3_QUOTE_MOVER'                        	=> 'Цитата',
        'ABBC3_QUOTE_TIP'                        	=> '[quote]Текст[/quote] или [quote=\"member\"]текст[/quote]',
        'ABBC3_QUOTE_VIEW'                        	=> '<blockquote><div><cite>member '. $lang['WROTE'] .':</cite>Текст-пример</div></blockquote>',

        // Spoiler
        'ABBC3_SPOIL_MOVER'                        		=> 'Спойлер',
        'ABBC3_SPOIL_TIP'                        		=> '[spoil]Текст[/spoil]',
        'ABBC3_SPOIL_VIEW'                        		=> '<div class="spoilwrapper"><div class="spoiltitle"><input class="btnspoil" type="button" value="Show Spoiler" onclick="javascript:if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide Spoiler\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show Spoiler\'; }" onfocus="this.blur();" /></div><div class="spoilcontent"><div style="display: none;">This is a sample text</div></div></div>',
        'SPOILER_SHOW'                                	=> 'Показать спойлер',
        'SPOILER_HIDE'                                	=> 'Спрятать спойлер',

        // Hide tag
        'ABBC3_HIDE_MOVER'                        	=> 'Спрятать',
        'ABBC3_HIDE_TIP'                        	=> '[hide]текст[/hide]',
        'ABBC3_HIDE_VIEW'                        	=> '<dl class="hidebox"><dt class="hide">HIDE: ON</dt><dd>Вы должны в этой теме, чтобы увидеть текст</dd></dl>',

        // Moderator tag
        'ABBC3_MOD_MOVER'                        		=> 'Сообщение модератора',
        'ABBC3_MOD_TIP'                                	=> '[mod=name]текст[/mod]',
        'ABBC3_MOD_VIEW'                        		=> '<table id="ModTable" width="100%" cellspacing="5" cellpadding="0" border="0" align="center"><tr><td class="row1" rowspan="2" align="middle" vAlign="center" width="1%"><span class="exclamation" title="Moderator warning" style="font-size:25px">&nbsp;!&nbsp;</span></td><td class="row2"><span class="genmed"><b>Mod Name:</b></span></td></tr><tr><td>Текст-пример</td></tr></table>',

        // Off topic tag
        'OFFTOPIC'                                        	=> 'Offtopic',
        'ABBC3_OFFTOPIC_MOVER'                				=> 'Ввод текста не по теме',
        'ABBC3_OFFTOPIC_TIP'                				=> '[offtopic]текст[/offtopic]',
        'ABBC3_OFFTOPIC_VIEW'                				=> '<i><b><font color="#114499">Offtopic: </font></b><br/><font color="#2277DD">Текст-пример</font></i>',

        // NFO
        'ABBC3_NFO_MOVER'                        	=> 'NFO текст (лучше для Internet explorer)',
        'ABBC3_NFO_TIP'                          	=> '[nfo]NFO текст[/nfo]',
        'ABBC3_NFO_VIEW'                        	=> '<table cellspacing="0" cellpadding="0" border="0" ><tr><td><span class="genmed"><b>NFO:</b></span></td></tr><tr><td class="nfo">' . str_replace(" ", "&nbsp;", '    І ЫЫЫЫ ЫЫ±±°                                  °°°±±±±ІІІЫЫЫЫЫЫЫЫЫЫЫ  Ы   ЫЫ ЫЫЫ') . '</td></tr></table>',

        // Justify Align
        'ABBC3_ALIGNJUSTIFY_MOVER'        	=> 'Выравнивание',
        'ABBC3_ALIGNJUSTIFY_TIP'        	=> '[align=justify]текст[/align]',
        'ABBC3_ALIGNJUSTIFY_VIEW'        	=> '<div style="text-align:justify">Это <br/>пример</div>',

        // Right Align
        'ABBC3_ALIGNRIGHT_MOVER'        		=> 'Выравнивание по правому краю',
        'ABBC3_ALIGNRIGHT_TIP'                	=> '[align=right]текст[/align]',
        'ABBC3_ALIGNRIGHT_VIEW'                	=> '<div style="text-align:right">Текст-пример</div>',

        // Center Align
        'ABBC3_ALIGNCENTER_MOVER'        		=> 'Выравнивание по центру',
        'ABBC3_ALIGNCENTER_TIP'                	=> '[align=center]текст[/align]',
        'ABBC3_ALIGNCENTER_VIEW'        		=> '<div style="text-align:center">Текст-пример</div>',

        // Left Align
        'ABBC3_ALIGNLEFT_MOVER'                	=> 'Выравнивание по левому краю',
        'ABBC3_ALIGNLEFT_TIP'                	=> '[align=left]текст[/align]',
        'ABBC3_ALIGNLEFT_VIEW'                	=> '<div style="text-left:justify">Текст-пример</div>',

        // Preformat
        'ABBC3_PRE_MOVER'                        		=> 'Предварительное форматирование',
        'ABBC3_PRE_TIP'                                	=> '[pre]текст[/pre]',
        'ABBC3_PRE_VIEW'                        		=> '<pre>Текст-пример</pre>',

        // Tab
        'ABBC3_TAB_MOVER'                        		=> 'Создать абзац',
        'ABBC3_TAB_TIP'                                	=> '[tab=nn]',
        'ABBC3_TAB_NOTE'                        		=> 'Введите значение размера границы.',
        'ABBC3_TAB_VIEW'                        		=> '<span style="margin-left:20px;"></span>Текст-пример',

        // Superscript
        'ABBC3_SUP_MOVER'                        		=> 'Верхний индекс',
        'ABBC3_SUP_TIP'                                	=> '[sup]текст[/sup]',
        'ABBC3_SUP_VIEW'                        		=> '<sup>Текст-пример</sup>',

        // Subscript
        'ABBC3_SUB_MOVER'                        		=> 'Нижний индекс',
        'ABBC3_SUB_TIP'                                	=> '[sub]текст[/sub]',
        'ABBC3_SUB_VIEW'                        		=> '<sub>Текст-пример</sub>',

        // Bold
        'ABBC3_B_MOVER'                                	=> 'Жирный',
        'ABBC3_B_TIP'                                	=> '[b]текст[/b]',
        'ABBC3_B_VIEW'                                	=> '<strong>Текст-пример</strong>',

        // Italic
        'ABBC3_I_MOVER'                                	=> 'Наклонный',
        'ABBC3_I_TIP'                                	=> '[i]текст[/i]',
        'ABBC3_I_VIEW'                                	=> '<em>Текст-пример</em>',

        // Underline
        'ABBC3_U_MOVER'                                	=> 'Подчеркнутый',
        'ABBC3_U_TIP'                                	=> '[u]текст[/u]',
        'ABBC3_U_VIEW'                                	=> '<span style="text-decoration: underline">Текст-пример</span>',

        // Strikethrough
        'ABBC3_S_MOVER'                                	=> 'Зачеркнутый',
        'ABBC3_S_TIP'                                	=> '[s]текст[/s]',
        'ABBC3_S_VIEW'                                	=> '<span style="text-decoration: line-through;">Текст-пример</span>',

        // Text Fade
        'ABBC3_FADE_MOVER'                        		=> 'Затухающий',
        'ABBC3_FADE_TIP'                        		=> '[fade]текст[/fade]',
        'ABBC3_FADE_VIEW'                        		=> '<span class="fade_link">Текст-пример</span> <script type="text/javascript">fade_ontimer()</script>',

        // Text Gradient
        'ABBC3_GRAD_MOVER'                        		=> 'Градиент текста',
        'ABBC3_GRAD_TIP'                        		=> '',
        'ABBC3_GRAD_VIEW'                        		=> '<span style="color: #FF0000">T</span><span style="color: #F2000D">h</span><span style="color: #E6001A">i</span><span style="color: #D90026">s</span> <span style="color: #BF0040">i</span><span style="color: #B3004D">s</span> <span style="color: #990066">a</span> <span style="color: #800080">s</span><span style="color: #73008C">i</span><span style="color: #660099">m</span><span style="color: #5900A6">p</span><span style="color: #4D00B3">l</span><span style="color: #4000BF">e</span> <span style="color: #2600D9">t</span><span style="color: #1A00E6">e</span><span style="color: #0D00F2">x</span><span style="color: #0000FF">t</span>',
        'ABBC3_GRAD_MIN_ERROR'                			=> 'Пожалуйста, сначала выделите текст : ',
        'ABBC3_GRAD_MAX_ERROR'                			=> 'Только меньше 120 символов : ',

        // Glow text
        'ABBC3_GLOW_MOVER'                        		=> 'Свечение (только Internet explorer)',
        'ABBC3_GLOW_TIP'                        		=> '[glow=(color)]текст[/glow]',
        'ABBC3_GLOW_VIEW'                        		=> '<div style="filter:Glow(color=red,strength=4);color:#ffffff;height:110%">Текст-пример</div>',

        // Shadow text
        'ABBC3_SHADOW_MOVER'                			=> 'Тенистый текст (Только Internet explorer)',
        'ABBC3_SHADOW_TIP'                        		=> '[shadow=(color)]текст[/shadow]',
        'ABBC3_SHADOW_VIEW'                        		=> '<div style="filter:shadow(color=black,strength=4);color:blue;height:110%">Текст-пример</div>',

        // Dropshadow text
        'ABBC3_DROPSHADOW_MOVER'        				=> 'Текст отбрасывающий тень (Только Internet explorer)',
        'ABBC3_DROPSHADOW_TIP'                			=> '[dropshadow=(color)]текст[/dropshadow]',
        'ABBC3_DROPSHADOW_VIEW'                			=> '<div style="filter:dropshadow(color=#999999,strength=4);color:blue;height:110%">Текст-пример</div>',

        // Blur text
        'ABBC3_BLUR_MOVER'                        		=> 'Размытие (Только Internet explorer)',
        'ABBC3_BLUR_TIP'                        		=> '[blur=(color)]текст[/blur]',
        'ABBC3_BLUR_VIEW'                        		=> '<div style="filter:Blur(strength=7);color:blue;height:110%">Текст-пример</div>',

        // Wave text
        'ABBC3_WAVE_MOVER'                        		=> 'Волнистый (Только Internet explorer)',
        'ABBC3_WAVE_TIP'                        		=> '[wave=(color)]текст[/wave]',
        'ABBC3_WAVE_VIEW'                        		=> '<div style="filter:Wave(strength=2);color:blue;height:110%">Текст-пример</div>',

        // Unordered List
        'ABBC3_LISTB_MOVER'                        		=> 'Список с пулькой',
        'ABBC3_LISTB_TIP'                        		=> '[list]текст[/list]',
        'ABBC3_LISTB_NOTE'                        		=> 'Заметка: Используйте [*] to create bullets',
        'ABBC3_LISTB_VIEW'                        		=> '<ul><li>Item1</li><li>Item2</li><li>Item3</li></ul>',

        // Ordered List
        'ABBC3_LISTO_MOVER'                        		=> 'Нумерованный список',
        'ABBC3_LISTO_TIP'                        		=> '[list=1|a]текст[/list]',
        'ABBC3_LISTO_NOTE'                        		=> 'Заметка: используйте [1] для нумерованного списка',
        'ABBC3_LISTO_VIEW'                        		=> '<ol style="list-style-type: lower-alpha"><li>Item1</li><li>Item2</li><li>Item3</li></ol>',

        // List item
        'ABBC3_LISTITEM_MOVER'                			=> 'Список пунктов',
        'ABBC3_LISTITEM_TIP'                			=> '[*]',
        'ABBC3_LISTITEM_NOTE'                			=> 'Заметка: Создать пульки внутри списка',

        // Line Break
        'ABBC3_HR_MOVER'                        		=> 'Заголовок',
        'ABBC3_HR_TIP'                                	=> '[hr]',
        'ABBC3_HR_NOTE'                                	=> 'Заметка: Создает разделительный заголовок для резделения текста',
        'ABBC3_HR_VIEW'                                	=> '<hr noshade color="#000000" size="1px">',

        // Message Box text direction Left to right
        'ABBC3_DIRRTL_MOVER'                		=> 'Направление текста слева направо',
        'ABBC3_DIRRTL_TIP'                        	=> '[dir=rtl]текст[/dir]',
        'ABBC3_DIRRTL_VIEW'                        	=> '<BDO dir="rtl">Текст-пример</BDO>',

        // Message Box text direction right to Left
        'ABBC3_DIRLTR_MOVER'                		=> 'Направление текста справа на лево',
        'ABBC3_DIRLTR_TIP'                        	=> '[dir=ltr]текст[/dir]',
        'ABBC3_DIRLTR_VIEW'                        	=> '<BDO dir="ltr">Текст-пример</BDO>',

        // Marquee Down
        'ABBC3_MARQDOWN_MOVER'                	=> 'Перемотка текста вниз',
        'ABBC3_MARQDOWN_TIP'                	=> '[marq=down]текст[/marq]',
        'ABBC3_MARQDOWN_VIEW'                	=> '<marquee direction="down" scrolldelay="120" height="80px">Текст-пример</marquee>',

        // Marquee Up
        'ABBC3_MARQUP_MOVER'                		=> 'Перемотка текста вверх',
        'ABBC3_MARQUP_TIP'                        	=> '[marq=up]текст[/marq]',
        'ABBC3_MARQUP_VIEW'                        	=> '<marquee direction="up" scrolldelay="120" height="80px">Текст-пример</marquee>',

        // Marquee Right
        'ABBC3_MARQRIGHT_MOVER'                	=> 'Смещение текста направо',
        'ABBC3_MARQRIGHT_TIP'                	=> '[marq=right]текст[/marq]',
        'ABBC3_MARQRIGHT_VIEW'                	=> '<marquee direction="right" scrolldelay="120">Текст-пример</marquee>',

        // Marquee Left
        'ABBC3_MARQLEFT_MOVER'                	=> 'Смещение текста налево',
        'ABBC3_MARQLEFT_TIP'                	=> '[marq=left]текст[/marq]',
        'ABBC3_MARQLEFT_VIEW'                	=> '<marquee direction="left" scrolldelay="120">Текст-пример</marquee>',

        // Table row cell wizard
        'ABBC3_TABLE_MOVER'                        	=> 'Вставить таблицу',
        'ABBC3_TABLE_TIP'                        	=> '[table=(ccs style)][tr=(ccs style)][td=(ccs style)]текст[/td][/tr][/table]',
        'ABBC3_TABLE_VIEW'                        	=> '<table style="width:50%;border:1px solid #cccccc;" cellspacing="0" cellpadding="0"><tr style="text-align:center;"><td style="border:1px solid #cccccc;">Текст-пример</td></tr></table>',

        'ABBC3_TABLE_STYLE'                        	=> 'Введите стиль таблицы',
        'ABBC3_TABLE_EXAMPLE'                		=> 'width:50%;border:1px solid #cccccc;',

        'ABBC3_ROW_NUMBER'                        	=> 'Введите количество строк',
        'ABBC3_ROW_ERROR'                        	=> 'Вы не ввели количество строк',
        'ABBC3_ROW_STYLE'                        	=> 'Введите стиль строк',
        'ABBC3_ROW_EXAMPLE'                        	=> 'text-align:center;',

        'ABBC3_CELL_NUMBER'                        	=> 'Введите количество ячеек',
        'ABBC3_CELL_ERROR'                        	=> 'Вы не ввели количество ячеек',
        'ABBC3_CELL_STYLE'                        	=> 'Введите стиль ячеек',
        'ABBC3_CELL_EXAMPLE'                		=> 'border:1px solid #cccccc;',

        // Simple upload files
        'ABBC3_UPLOAD_TITLE'                		=> 'Advanced BBCode box 3 :: Загрузить файл страницы',
        'ABBC3_UPLOAD_MOVER'                		=> 'Загрузить файл ',
        'ABBC3_UPLOAD_LINK'                        	=> 'Это ссылка на загруженный файл',
        'ABBC3_UPLOAD_UPLOADED'                		=> 'Загрузка %s успешна!',
        'ABBC3_UPLOAD_NOT_UPLOADED'        			=> 'Загрузка %s не удалась',
        'ABBC3_UPLOAD_ALREADY'                		=> 'Вложение %s уже есть, пожалуйста возьмите другой или переименуйте и попробуйте снова',
        'ABBC3_UPLOAD_ERROR'                		=> 'Невозможно загрузить файл %s. Код ошибки : %d',
        'ABBC3_UPLOAD_EXTENSION'        			=> 'Разрешенные расширения',
        'ABBC3_UPLOAD_EXTENSION_EXPLAIN'        	=> 'Вы можете добавить/изменить/удалить разрешенный типы данных. Разделяйте запятой (,)',
        'ABBC3_UPLOAD_DISABLED'                		=> 'Загруженное расширение %s не разрешено',
        'ABBC3_UPLOAD_SIZE'                        	=> 'Максимальный размер',
        'ABBC3_UPLOAD_NOSIZE'                		=> 'Загружаемый размер %d слишком велик. Максимальный разрешенный размер %d KB',
        'ABBC3_UPLOAD_EMPTY'                		=> 'Файл для загрузки пустой, выберите другой',

        // Hyperlink Wizard
        'ABBC3_URL_TAG'                                	=> 'ссылка',
        'ABBC3_URL_MOVER'                        		=> 'Вэб адрес',
        'ABBC3_URL_TIP'                                	=> '[url]http://...[/url] или [url=http://...]название[/url]',
        'ABBC3_URL_EXAMPLE'                        		=> 'http://www.google.com',
        'ABBC3_URL_VIEW'                        		=> '<a href="http://www.google.com" class="postlink">Google</a>',

        // Email Wizard
        'ABBC3_EMAIL_TAG'                        	=> 'e-mail',
        'ABBC3_EMAIL_MOVER'                        	=> 'E-mail',
        'ABBC3_EMAIL_TIP'                        	=> '[email]user@server.ext[/email] или [email=user@server.ext]Мой e-mail[/email]',
        'ABBC3_EMAIL_EXAMPLE'                		=> 'user@server.ext',
        'ABBC3_EMAIL_VIEW'                        	=> '<a href="mailto:user@server.ext">user@server.ext</a>',

        // Ed2k link Wizard
        'ABBC3_ED2K_TAG'                        	=> 'ed2k',
        'ABBC3_ED2K_MOVER'                        	=> 'ссылка eD2K',
        'ABBC3_ED2K_TIP'                        	=> '[url]link ed2k[/url] или [url=link ed2k]Название ed2k[/url]',
        'ABBC3_ED2K_EXAMPLE'                		=> 'ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/',
        'ABBC3_ED2K_VIEW'                        	=> '<a href="ed2k://|file|The_Two_Towers-The_Purist_Edit-Trailer.avi|14997504|965c013e991ee246d63d45ea71954c4d|/" class="postlink">The_Two_Towers-The_Purist_Edit-Trailer.avi</a>',
        'ABBC3_ED2K_ADD'                        	=> 'Добавьте выбранные ссылки в Ваш ed2k client',

        // Web included by iframe
        'ABBC3_WEB_TAG'                                	=> 'web',
        'ABBC3_WEB_MOVER'                        		=> 'Вставить сайт в сообщение',
        'ABBC3_WEB_TIP'                                	=> '[web width=200 height=100]URL web[/web]',
        'ABBC3_WEB_EXAMPLE'                        		=> 'http://www.google.com',
        'ABBC3_WEB_VIEW'                        		=> '<iframe width="100%" height="100" src="http://www.google.com" style="font-size: 2px;"></iframe><br/>',

        // Image Wizard
        'ABBC3_IMG_TAG'                                	=> 'изображение',
        'ABBC3_IMG_MOVER'                        		=> 'Вставить изображение',
        'ABBC3_IMG_TIP'                                	=> '[img=(left|center|right)]http://...[/img]',
        'ABBC3_IMG_EXAMPLE'                        		=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
        'ABBC3_IMG_VIEW'                        		=> '<div align="center"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" /></div>',

        // Thumbnail
        'ABBC3_THUMBNAIL_TAG'                	=> 'иконка',
        'ABBC3_THUMBNAIL_MOVER'                	=> 'Вставить иконку',
        'ABBC3_THUMBNAIL_TIP'                	=> '[thumbnail(=left|right)]http://...[/thumbnail]',
        'ABBC3_THUMBNAIL_EXAMPLE'        		=> 'http://www.google.com/intl/en_com/images/logo_plain.png',
        'ABBC3_THUMBNAIL_VIEW'                	=> '<a href="http://www.google.com/intl/en_com/images/logo_plain.png" rel="gb_imageset[]" alt="http://www.google.com/intl/en_com/images/logo_plain.png" title="" class="hoverbox"><img src="http://www.google.com/intl/en_com/images/logo_plain.png" alt="" border="0" width="100px" align="right"/></a>',

        // Imgshack
        'ABBC3_IMGSHACK_MOVER'                	=> 'Вставить изображение с  imageshack',
        'ABBC3_IMGSHACK_TIP'                	=> '[url=http://imageshack.us][img=http://...][/img][/url]',
        'ABBC3_IMGSHACK_VIEW'                	=> '<a href="http://img207.imageshack.us/my.php?image=advancedbbcodebox3prosidd3.gif" class="postlink"><img src="http://img207.imageshack.us/img207/1773/advancedbbcodebox3prosidd3.th.gif" alt="Image" /></a>',

        // Rapid share checker
        'ABBC3_RAPIDSHARE_TAG'                	=> 'rapidshare',
        'ABBC3_RAPIDSHARE_MOVER'        		=> 'Вставить файл с rapidshare',
        'ABBC3_RAPIDSHARE_TIP'                	=> '[rapidshare]http://rapidshare.com/files/...[/rapidshare]',
        'ABBC3_RAPIDSHARE_EXAMPLE'        		=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
        'ABBC3_RAPIDSHARE_VIEW'                	=> '<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a> <font color="green" size="4" >File not found !</font><br />',
        'ABBC3_RAPIDSHARE_GOOD'                	=> 'Файл найден на сервере !',
        'ABBC3_RAPIDSHARE_WRONG'        		=> 'Файл не найден !',

        // testlink
        'ABBC3_TESTLINK_TAG'                	=> 'проверка ссылки',
        'ABBC3_TESTLINK_MOVER'                	=> 'Вставить файл размещенный на публичном сервере',
        'ABBC3_TESTLINK_TIP'                	=> '[testlink]http://rapidshare.com/files/...[/testlink]',
        'ABBC3_TESTLINK_NOTE'                	=> 'Доступные сервера:rapidshare,megaupload,megarotic,depositfiles,megashares .',
        'ABBC3_TESTLINK_EXAMPLE'        		=> 'http://rapidshare.com/files/86587996/ABBC3_v108.zip.html',
        'ABBC3_TESTLINK_VIEW'                	=> '<dl class="testlink"><dd><font color="red" size="4" >X</font>&nbsp;<a href="http://rapidshare.com/files/86587996/ABBC3_v108.zip.html" >http://rapidshare.com/files/86587996/ABBC3_v108.zip.html</a><br /></dd></dl>',
        'ABBC3_TESTLINK_GOOD'                	=> 'Файл найден на сервере !',
        'ABBC3_TESTLINK_WRONG'                	=> 'Файл не найден !',

        // Click counter
        'ABBC3_CLICK_TAG'                        	=> 'click',
        'ABBC3_CLICK_MOVER'                        	=> 'Вставить счетчик кликов',
        'ABBC3_CLICK_TIP'                        	=> '[click]http://...[/click] или [click=http://...]Название[/click] или [click][img]http://...[/img][/click]',
        'ABBC3_CLICK_EXAMPLE'                 		=> 'http://www.google.com ' . ' ' . 'http://www.google.com/intl/en_com/images/logo_plain.png' ,
        'ABBC3_CLICK_VIEW'                        	=> '<a href="./click.php?id=1" >http://www.phpbb.com</a> ( нажат 1 раз )<br />',
        'ABBC3_CLICK_TIME'                        	=> '( Кликнули %d раз )',
        'ABBC3_CLICK_TIMES'                        	=> '( Кликнули %d раза )',

        // Search tag
        'ABBC3_SEARCH_MOVER'                		=> 'Вставить слово поиска',
        'ABBC3_SEARCH_TIP'                        	=> '[search(=(msn|yahoo|google))]текст[/search]',
        'ABBC3_SEARCH_VIEW'                        	=> $lang['SEARCH_MINI'] . ' ' . $config['sitename'] . ' : <a href="search.php?keywords=Advanced BBcode box 3">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' msn : <a href="http://search.live.com/results.aspx?q=Advanced BBcode box 3&mkt=tr-TR&lf=1" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' .$lang['SEARCH_MINI'] . ' yahoo : <a href="http://search.yahoo.com/search?p=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a><br/><br/>' . $lang['SEARCH_MINI'] . ' google : <a href="http://www.google.com.tr/search?q=Advanced BBcode box 3" target="_blank">"Advanced BBcode box 3"</a>',

        // BBvideo Wizard
        'ABBC3_BBVIDEO_TAG'                        	=> 'BBvideo',
        'ABBC3_BBVIDEO_MOVER'                		=> 'Вставить вэб видео',
        'ABBC3_BBVIDEO_TIP'                        	=> '[BBvideo]Ссылка на видео[/BBvideo]',
        'ABBC3_BBVIDEO_EXAMPLE'                		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
        'ABBC3_BBVIDEO_VIEW'                		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',
        'ABBC3_BBVIDEO_FILE'                		=> 'Видео формат',
        'ABBC3_BBVIDEO_VIDEO'                		=> 'Видео от',

        // Flash (swf) Wizard
        'ABBC3_FLASH_TAG'                        	=> 'flash',
        'ABBC3_FLASH_MOVER'                        	=> 'Вставить флеш файл (swf)',
        'ABBC3_FLASH_TIP'                        	=> '[flash width=# height=#]URL flash[/flash] или [flash width,height]URL flash[/flash]',
        'ABBC3_FLASH_EXAMPLE'                		=> 'http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
        'ABBC3_FLASH_VIEW'                        	=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" /><param name="play" value="true" /><param name="loop" value="true" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://www.adobe.com/support/flash/ts/documents/test_version/version.swf" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="true" loop="true" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

        // Flash (flv) Wizard
        'ABBC3_FLV_TAG'                                	=> 'flash',
        'ABBC3_FLV_MOVER'                        		=> 'Вставить флеш видео (flv)',
        'ABBC3_FLV_TIP'                                	=> '[flv width=# height=#]URL flash video[/flv] или [flv width,height]URL flash video[/flv]',
        'ABBC3_FLV_EXAMPLE'                 			=> 'http://www.channel-ai.com/video/eyn/demo1.flv',
        'ABBC3_FLV_VIEW'                        		=> '<embed src="../images/flvplayer.swf" width="200" height="100" bgcolor="#FFFFFF" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="file=../files/demo1.flv&autostart=false" />',

        // Streaming Video Wizard
        'ABBC3_VIDEO_TAG'                        	=> 'видео',
        'ABBC3_VIDEO_MOVER'                        	=> 'Вставить видео',
        'ABBC3_VIDEO_TIP'                        	=> '[video width=# height=#]Ссылка на видео[/video]',
        'ABBC3_VIDEO_EXAMPLE'                		=> 'http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv',
        'ABBC3_VIDEO_VIEW'                        	=> '<object classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="player"  width="200" height="100"><param name="url" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="showcontrols" value="true" /><param name="autostart" value="false" /><!--[if !IE]>--><object type="video/x-ms-wmv" data="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" width="200" height="100" ><param name="src" value="http://www.sarahsnotecards.com/catalunyalive/fishstore.wmv" /><param name="autostart" value="false" /><param name="controller" value="true" /></object><!--<![endif]--></object>',

        // Streaming Audio Wizard
        'ABBC3_STREAM_TAG'                        	=> 'звук',
        'ABBC3_STREAM_MOVER'                		=> 'Вставить звук',
        'ABBC3_STREAM_TIP'                        	=> '[stream]Ссылка на звук[/stream]',
        'ABBC3_STREAM_EXAMPLE'                		=> 'http://realdev1.realise.com/rossa/mov/demo.mp3',
        'ABBC3_STREAM_VIEW'                        	=> '<object width="200" height="45" classid="CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6" id="wmstream_"><param name="url" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><!--[if !IE]>--><object width="200" height="45" type="video/x-ms-wmv" data="http://realdev1.realise.com/rossa/mov/demo.mp3"><param name="src" value="http://realdev1.realise.com/rossa/mov/demo.mp3" /><param name="controller" value="1" /><param name="showcontrols" value="1" /><param name="showdisplay" value="0" /><param name="showstatusbar" value="0" /><param name="autosize" value="1" /><param name="autostart" value="0" /><param name="visible" value="1" /><param name="animationstart" value="0" /><param name="loop" value="0" /></object><!--<![endif]--></object>',

        // Quick time
        'ABBC3_QUICKTIME_TAG'                	=> 'Quick time',
        'ABBC3_QUICKTIME_MOVER'                	=> 'Вставить Quick time',
        'ABBC3_QUICKTIME_TIP'                	=> '[quicktime width=# height=#]ссылка на Quick time[/quicktime]',
        'ABBC3_QUICKTIME_EXAMPLE'        		=> 'http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . ' ' . 'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
        'ABBC3_QUICKTIME_VIEW'                	=> '<object id="qtstream_" classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0" width="200" height="100"><param name="src" value="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" /><param name="controller" value="true" /><param name="autoplay" value="false" /><param name="type" value="video/quicktime" /><embed name="qtstream_" src="http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt" pluginspage="http://www.apple.com/quicktime/download/" enablejavascript="true" controller="true" width="200" height="100" type="video/quicktime" autoplay="false"></embed></object>',

        // Real Media Wizard
        'ABBC3_RAM_TAG'                                	=> 'Real Media',
        'ABBC3_RAM_MOVER'                        		=> 'Вставить Real Media',
        'ABBC3_RAM_TIP'                                	=> '[ram]URL Real Media[/ram]',
        'ABBC3_RAM_EXAMPLE'                        		=> 'http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram',
        'ABBC3_RAM_VIEW'                        		=> '<object id="rmstream_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="100"><param name="src" value="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" /><param name="autostart" value="false" /><param name="controls" value="ImageWindow" /><param name="console" value="ctrls_" /><param name="prefetch" value="false" /><embed name="rmstream_" type="audio/x-pn-realaudio-plugin" src="http://www.bbc.co.uk/scotland/radioscotland/media/radioscotland.ram" width="200" height="100" autostart="false" controls="ImageWindow" console="ctrls_" prefetch="false"></embed></object><br /><object id="ctrls_" classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="200" height="36"><param name="controls" value="ControlPanel" /><param name="console" value="ctrls_" /><embed name="ctrls_" type="audio/x-pn-realaudio-plugin" width="200" height="36" controls="ControlPanel" console="ctrls_"></embed></object>',

        // Stage6 video Wizard
        'ABBC3_STAGE6_TAG'                        	=> 'Stage6 видео',
        'ABBC3_STAGE6_MOVER'                		=> 'Вставить видео из Stage6', // from http://www.stage6.com/
        'ABBC3_STAGE6_TIP'                        	=> '[stage6]Stage6 ID[/stage6]',
        'ABBC3_STAGE6_EXAMPLE'                		=> '2068715',
        'ABBC3_STAGE6_VIEW'                        	=> '<object  classid="clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616" codebase="http://download.divx.com/player/DivXBrowserPlugin.cab" width="200" height="100" ><param name="src" value="http://video.stage6.com/2068715/.divx" /><param name="autoplay" value="false" /><param name="custommode" value="Stage6" /><param name="showpostplaybackad" value="false" /><embed type="video/divx" src="http://video.stage6.com/2068715/.divx" pluginspage="http://go.divx.com/plugin/download/" showpostplaybackad="false" custommode="Stage6" autoplay="false" width="200" height="100" /></object><br />',

        // Google video Wizard
        'ABBC3_GVIDEO_TAG'                        	=> 'Google видео',
        'ABBC3_GVIDEO_MOVER'                		=> 'Вставить видео из Google',
        'ABBC3_GVIDEO_TIP'                        	=> '[GVideo]Ссылка на видео[/GVideo]',
        'ABBC3_GVIDEO_EXAMPLE'                		=> 'http://video.google.com/videoplay?docid=-8351924403384451128',
        'ABBC3_GVIDEO_VIEW'                        	=> '<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0" width="200" height="100"><param name="movie" value="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" /><param name="play" value="false" /><param name="loop" value="false" /><param name="quality" value="high" /><param name="allowScriptAccess" value="never" /><param name="allowNetworking" value="internal" /><embed src="http://video.google.com/googleplayer.swf?docid=-8351924403384451128" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="200" height="100" play="false" loop="false" quality="high" allowscriptaccess="never" allownetworking="internal"></embed></object>',

        // Youtube video Wizard
        'ABBC3_YOUTUBE_TAG'                        	=> 'Youtube видео',
        'ABBC3_YOUTUBE_MOVER'                		=> 'Вставить видео из Youtube',
        'ABBC3_YOUTUBE_TIP'                        	=> '[youtube]Ссылка на видео[/youtube]',
        'ABBC3_YOUTUBE_EXAMPLE'                		=> 'http://www.youtube.com/watch?v=TA4hm97m494',
        'ABBC3_YOUTUBE_VIEW'                		=> '<object width="200" height="100"><param name="movie" value="http://www.youtube.com/v/TA4hm97m494" /><param name="wmode" value="transparent" /><embed src="http://www.youtube.com/v/TA4hm97m494" type="application/x-shockwave-flash" wmode="transparent" width="200" height="100"></embed></object>',

        // Veoh video
        'ABBC3_VEOH_TAG'                        	=> 'Veoh',
        'ABBC3_VEOH_MOVER'                        	=> 'Вставить видео из Veoh',
        'ABBC3_VEOH_TIP'                        	=> '[veoh]Ссылка на видео[/veoh]',
        'ABBC3_VEOH_EXAMPLE'                		=> 'http://www.veoh.com/videos/v1409404EqT5SJjM',
        'ABBC3_VEOH_VIEW'                        	=> '<embed src="http://www.veoh.com/videodetails2.swf?permalinkId=v1409404EqT5SJjM&id=anonymous&player=videodetailsembedded&videoAutoPlay=0" allowFullScreen="true" width="200" height="100" bgcolor="#000000" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>',

        // Collegehumor video
        'ABBC3_COLLEGEHUMOR_TAG'        		=> 'collegehumor',
        'ABBC3_COLLEGEHUMOR_MOVER'        		=> 'Вставить видео из collegehumor',
        'ABBC3_COLLEGEHUMOR_TIP'        		=> '[collegehumor]collegehumor ссылка[/collegehumor]',
        'ABBC3_COLLEGEHUMOR_EXAMPLE'			=> 'http://www.collegehumor.com/video:1802097',
        'ABBC3_COLLEGEHUMOR_VIEW'        		=> '<object type="application/x-shockwave-flash" data="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" width="200" height="100" ><param name="allowfullscreen" value="true" /><param name="movie" quality="best" value="http://www.collegehumor.com/moogaloop/moogaloop.swf?clip_id=1802097&fullscreen=1" /></object>',

        // Dailymotion video
        'ABBC3_DM_MOVER'                        		=> 'Вставить видео из dailymotion', // from http://www.dailymotion.com/
        'ABBC3_DM_TIP'                                	=> '[dm]Dailymotion ID[/dm]',
        'ABBC3_DM_EXAMPLE'                        		=> 'http://www.dailymotion.com/swf/x3hm7o',
        'ABBC3_DM_VIEW'                                	=> '<object width="200" height="100"><param name="movie" value="http://www.dailymotion.com/swf/x3hm7o" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="never" /><embed src="http://www.dailymotion.com/swf/x3hm7o" type="application/x-shockwave-flash" width="200" height="100" allowFullScreen="true" allowScriptAccess="never"></embed></object>',

        // Gamespot video
        'ABBC3_GAMESPOT_MOVER'                	=> 'Вставить видео из Gamespot',
        'ABBC3_GAMESPOT_TIP'                	=> '[gamespot]Gamespot видео ссылка[gamespot]',
        'ABBC3_GAMESPOT_EXAMPLE'        		=> 'http://www.gamespot.com/video/944074/6185798/tom-clancys-rainbow-six-vegas-2-official-trailer-3',
        'ABBC3_GAMESPOT_VIEW'                	=> '<embed id="mymovie" width="200" height="100" flashvars="paramsURI=http%3A%2F%2Fwww%2Egamespot%2Ecom%2Fpages%2Fvideo%5Fplayer%2Fproteus%5Fxml%2Ephp%3Fadseg%3D%26adgrp%3D%26sid%3D6185798%26pid%3D944074%26mb%3D%26onid%3D%26nc%3D1202626246593%26embedded%3D1%26showWatermark%3D0%26autoPlay%3D0" allowfullscreen="true" allowscriptaccess="never" quality="high" name="mymovie" src="http://image.com.com/gamespot/images/cne_flash/production/media_player/proteus/gs/proteus_embed.swf" type="application/x-shockwave-flash"/>',

        // Gametrailers video
        'ABBC3_GAMETRAILERS_MOVER'        		=> 'Вставить видео из Gametrailers',
        'ABBC3_GAMETRAILERS_TIP'        		=> '[gametrailers]Gametrailers ссылка на видео[/gametrailers]',
        'ABBC3_GAMETRAILERS_EXAMPLE'			=> 'http://www.gametrailers.com/player/30461.html',
        'ABBC3_GAMETRAILERS_VIEW'        		=> '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="gtembed" width="200" height="100"><param name="allowScriptAccess" value="never" /><param name="allowFullScreen" value="true" /><param name="movie" value="http://www.gametrailers.com/remote_wrap.php?mid=30461" /><param name="quality" value="high" /><embed src="http://www.gametrailers.com/remote_wrap.php?mid=30461" swLiveConnect="true" name="gtembed" align="middle" allowScriptAccess="never" allowFullScreen="true" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="100"></embed></object>',

        // IGN video
        'ABBC3_IGNVIDEO_MOVER'                	=> 'Вставить видео из Ign',
        'ABBC3_IGNVIDEO_TIP'                	=> '[ignvideo]ING видео ссылка[/ignvideo]',
        'ABBC3_IGNVIDEO_EXAMPLE'        		=> 'object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv',
        'ABBC3_IGNVIDEO_VIEW'                	=> '<embed src="http://videomedia.ign.com/ev/ev.swf" flashvars="object_ID=967025&downloadURL=http://tvmovies.ign.com/tv/video/article/850/850894/knightrider_trailer_020808_flvlow.flv" type="application/x-shockwave-flash" width="200" height="100" ></embed>',

        // LiveLeak video
        'ABBC3_LIVELEAK_MOVER'                	=> 'Вставить видео из Liveleak',
        'ABBC3_LIVELEAK_TIP'                	=> '[liveleak]Liveleak ссылка на видео[/liveleak]',
        'ABBC3_LIVELEAK_EXAMPLE'        		=> 'http://www.liveleak.com/view?i=413_1202590393',
        'ABBC3_LIVELEAK_VIEW'                	=> '<object type="application/x-shockwave-flash" width="200" height="100" wmode="transparent" data="http://www.liveleak.com/player.swf?autostart=false&token=i=413_1202590393"><param name="movie" value="http://www.liveleak.com/player.swf?autostart=false&token=$1" /><param name="wmode" value="transparent" /><param name="quality" value="high" /></object>',

        // Custom BBcodes
));

?>
