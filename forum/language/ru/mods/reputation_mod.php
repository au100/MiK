<?php
/**
*
* groups [English]
*
* @author idiotnesia pungkerz@gmail.com - http://www.phpbbindonesia.com
*
* @package language
* @version 0.2.0a
* @copyright (c) 2008 phpbbindonesia.com
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	
	'ACP_REPUTATION_SETTINGS_EXPLAIN' => 'Настройки репутации пользователей.',
	'ACP_REP_RANKS_EXPLAIN'		=> 'Добавление, редактирование, просмотр и удаление рангов репутаций. ',
	'RP_BLOCK_PER_POINTS'		=> 'Блок за пункты',
	'RP_BLOCK_PER_POINTS_EXPLAIN'	=> 'Добавление одного блока за каждые x пунктов репутации.',
	'RP_COMMENTS'			=> 'Комментарии',
	'RP_DISABLED'			=> 'К сожалению данная опция отключена.',
	'RP_ENABLE'			=> 'Разрешение пользовательских пунктов репутации',
	'RP_FROM'			=> 'Кто изменил репутацию',
	'RP_SAME_POST'			=> 'Вы уже изменили репутации в этом сообщении',
	'RP_MAX_BLOCK'			=> 'Максимальное количество блоков',
	'RP_MAX_BLOCK_EXPLAIN'		=> 'Максимальное количестов графических блоков для отображения.',
	'RP_MAX_CHARS'			=> 'Максимальное количество символов в комментарии',
	'RP_MAX_CHARS_EXPLAIN'		=> 'Количество символов в комментарии. Для нелимитированного количества поставьте 0.',
	'RP_MAX_POWER'			=> 'Максимальный уровень репутации',
	'RP_MAX_POWER_EXPLAIN'		=> 'Разрешение максимального уровня репутации.',
	'RP_MEMBERSHIP_DAYS'		=> 'Репутация за количество дней ',
	'RP_MEMBERSHIP_DAYS_EXPLAIN'	=> 'Добавление пользователю 1 пункта репутации за каждые x дней.',
	'RP_MIN_POSTS'			=> 'Минимальное количество сообщений',
	'RP_MIN_POSTS_EXPLAIN'		=> 'Минимальное количество сообщений, прежде чем появится пункт репутации.',
	'RP_POINTS'			=> 'Пункты',
	'RP_POWER'			=> 'Уровень репутации',
	'RP_RECENT_POINTS'		=> 'Полученные пункты репутации',
	'RP_RECENT_POINTS_EXPLAIN'	=> 'Число пунктов репутации для отображения у пользователя.',
	'RP_SELF'			=> 'Вы не можете изменять репутацию самому себе',
	'RP_SENT'			=> 'Изменение репутации было проведено',
	'RP_TIMES_LIMIT'		=> 'Слишком короткий срок после последнего изменения репутации.',
	'RP_TIME_LIMITATION'		=> 'Ограниченное время',
	'RP_TIME_LIMITATION_EXPLAIN'	=> 'Минимальное время, после которого пользователь может менять репутацию.',
	'RP_TITLE'			=> 'Пользовательский пункт репутации',
	'RP_TOO_LONG_COMMENT'		=> 'Ваш комментарий содержит %1$d символов. Максимальное количество разрешенных символов %2$d.',
	'RP_TOTAL_POINTS'		=> 'Уровень репутации',
	'RP_TOTAL_POSTS'		=> 'Репутация за сообшения',
	'RP_TOTAL_POSTS_EXPLAIN'	=> 'Пользователь получает дополнительно 1 репутации за каждые x сообщений.',
	'RP_USER_DISABLED'		=> 'Вам не позволено менять репутацию.',
	'RP_USER_SELF_DISABLED'		=> 'Данный пользовательл отключил опцию по изменению репутации.',
	
	'RP_EMPTY_DATA'			=> 'Репутация этого пользователя не изменялась.',
	//------------------------------------------------------------------------------
	'RP_USER_SPREAD'		=> 'Временная задержка по изменению репутации',
	'RP_USER_SPREAD_EXPLAIN'	=> 'Временная задержка (в минутах) для других пользователей, после которой можно изменить репутацию.',
	'RP_USER_SPREAD_FIRST'  	=> 'Вам необходимо подождать, так как у этого пользователя уже была изменена репутация.',
	'RP_REG_BONUS'			=> 'Бонусная репутация',
	'RP_REG_BONUS_EXPLAIN'		=> 'Репутация после регистрации пользователя.',
	
	'RP_COMMENT'			=> 'Комментарий',
	'RP_POSITIVE'			=> 'Положительная',
	'RP_NEGATIVE'			=> 'Отрицательная',
	
	'RP_HIDE'			=> 'Скрыть мою репутацию',
	'RP_GROUP_POWER'		=> 'Репутация группы',
	
	'RP_ADD_POINTS'			=> 'Добавление репутации',
	'RP_SUBTRACT_POINTS'		=> 'Уменьшение репутации',
	'RP_DISPLAY'			=> 'Отображение репутации',
	'RP_DISPLAY_TEXT'		=> 'Текст',
	'RP_DISPLAY_BLOCK'		=> 'Графические блоки',
	'RP_DISPLAY_BOTH'		=> 'Текст и графические блоки',
	
	
	'RP_FORCE_COMMENT'		=> 'Обязать пользователя прокоментировать изменение репутации',
	'RP_DISABLE_COMMENT'		=> 'Запрет на комментирование изменения репутации',
	'RP_FORUM_EXCLUSIONS'		=> 'Исключения',
	'RP_FORUM_EXCLUSIONS_EXPLAIN'	=> 'Введите идентификаторы форумов или тем для исключения, разделяя их запятыми. Пример, 3,4,6.В них будет запрещено изменение репутации',
	'RP_POWER_REP_POINT'		=> 'Добавление репутации',
	'RP_POWER_REP_POINT_EXPLAIN'	=> 'Получение пользователю 1 блока репутации за каждые x пунктов.',
	
	'RP_RANK_TITLE'			=> 'Название репутации',
	'RP_RANK_MINIMUM'		=> 'Минимальное количество пунктов',
	'RP_ADD_RANK'			=> 'Добавление ранга',
	'RP_NO_RANK_TITLE'		=> 'Укажите название ранга репутации',
	'RP_RANK_UPDATED'		=> 'Ранг репутации изменен.',
	'RP_RANK_ADDED'			=> 'Ранг репутации добавлен.',
	'RP_MUST_SELECT_RANK'		=> 'Необходимо указать ранг',
	
	'RP_RESET'			=> 'Сброс всех пунктов репутаций',
	'RP_RESET_EXPLAIN'		=> 'Удаление всех пользовательских комментариев к репутациям и сброс всех репутаций.',
	'RP_RESET_CONFIRM'		=> 'Вы уверены, что хотите сбросить настройки и пункты репутаций. <br/>Примечание: все данные после выполнения будут потеряны безвозвратно.',
	
));

?>