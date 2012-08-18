<?php

/**
*
* @package phpBB3 - who was here MOD
* @version $Id: info_acp_wwh.php 61 2007-12-17 20:15:23Z nickvergessen $
* @copyright (c) nickvergessen ( http://www.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Translated to Russian is Key <admin@alfaiomega.org> 2011
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
if (!isset($phpbb_root_path) && defined('IN_ADMIN'))
{
	$phpbb_root_path = '../';
}
else if (!isset($phpbb_root_path))
{
	$phpbb_root_path = './';
}

$lang = array_merge($lang, array(
	'WWH_CONFIG'				=> 'Конфигурирование "Кто сегодня был на конференции?"',
	'WWH_TITLE'					=> 'Кто сегодня был на конференции?',

	'WWH_DISP_SET'				=> 'Настройки',
	'WWH_DISP_BOTS'				=> 'Показывать ботов',
	'WWH_DISP_BOTS_EXP'			=> 'Некоторые пользователи могут задаваться вопросом, что есть боты и бояться их.',
	'WWH_DISP_GUESTS'			=> 'Показывать гостей',
	'WWH_DISP_GUESTS_EXP'		=> 'Показывать ли гостей в списке?',
	'WWH_DISP_HIDDEN'			=> 'Показывать скрытых пользователей',
	'WWH_DISP_HIDDEN_EXP'		=> 'Показывать ли скрытых гостей в списке (только в соответствии с правами доступа)?',
	'WWH_DISP_TIME'				=> 'Показывать время посещения',
	'WWH_DISP_TIME_FORMAT'		=> 'Формат времени',
	'WWH_DISP_HOVER'			=> 'Показать при наведении',
	'WWH_DISP_TIME_EXP'			=> 'Время посещения могут видеть все пользователи или никто. Для администраторов нет специальных функций.',
	'WWH_DISP_IP'				=> 'Показывать IP',
	'WWH_DISP_IP_EXP'			=> 'Только для пользователей с правами администратора, как в viewonline.php',

	'WWH_INSTALLED'				=> 'Установлен мод "Кто сегодня был на конференции?" v%s',

	'WWH_RECORD'				=> 'Запись пользователей',
	'WWH_RECORD_EXP'			=> 'Показать и сохранить записанных пользователей',
	'WWH_RECORD_TIMESTAMP'		=> 'Формат даты для записи пользователей',
	'WWH_RESET'					=> 'Сброс записи',
	'WWH_RESET_EXP'				=> 'Сброс времени и счетчика "Кто сегодня был на конференции".',
	'WWH_RESET_TRUE'			=> 'При отправке формы\nвсе записи будут сброшены',// \n is the beginning of a new line
									//no space after it

	'WWH_SAVED_SETTINGS'		=> 'Конфигурация успешно обновлена.',
	'WWH_SORT_BY'				=> 'Сортировать пользователей по',
	'WWH_SORT_BY_EXP'			=> 'Порядок отображения пользователей?',
	'WWH_SORT_BY_0'				=> 'Имя пользователя от A до Z',
	'WWH_SORT_BY_1'				=> 'Имя пользователя от Z до A',
	'WWH_SORT_BY_2'				=> 'Время визита (по возрастанию)',
	'WWH_SORT_BY_3'				=> 'Время визита (по убыванию)',
	'WWH_SORT_BY_4'				=> 'По возрастанию ID пользователя',
	'WWH_SORT_BY_5'				=> 'По убыванию ID пользователя',

	'WWH_UPDATE_NEED'			=> 'Обновление "Кто сегодня был на конференции?" . Для этого запустите <a style="font-weight: bold;" href="' . $phpbb_root_path . 'install/index.php">установку/index.php</a>.<br />Если вы уже установили мод, то удалите папку /install/.',

	'WWH_VERSION'				=> 'Показывать статистику за',
	'WWH_VERSION_EXP'			=> 'Показаны пользователи за сегодня или за срок, установленный в этой опции.',
	'WWH_VERSION1'				=> 'Сегодня',
	'WWH_VERSION2'				=> 'Период времени',
	'WWH_VERSION2_EXP'			=> 'установите 0, если вы хотите отобразить пользователей за последние 24 часа',
	'WWH_VERSION2_EXP2'			=> 'недоступно, если вы выбрали "Сегодня"',
	'WWH_VERSION2_EXP3'			=> 'секунд',

	'WWH_MOD'					=> 'мод "Кто сегодня был на конференции?" ',
	'INSTALL_WWH_MOD'			=> 'Установка мода "Кто сегодня был на конференции?"',
	'INSTALL_WWH_MOD_CONFIRM'	=> 'Вы уверены, что хотите установить мод "Кто сегодня был на конференции?"?',
	'UPDATE_WWH_MOD'			=> 'Обновление мода "Кто сегодня был на конференции?"',
	'UPDATE_WWH_MOD_CONFIRM'	=> 'Вы действительно хотите обносить мод "Кто сегодня был на конференции?"?',
	'UNINSTALL_WWH_MOD'			=> 'Удаление мода "Кто сегодня был на конференции?"',
	'UNINSTALL_WWH_MOD_CONFIRM'	=> 'Вы действительно хотите удалить мод "Кто сегодня был на конференции?"?',
));

?>