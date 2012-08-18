<?php

/**
*
* @package - NV recent topics
* @version $Id: lang_install_rt.php 70 2008-01-06 11:10:11Z nickvergessen $
* @copyright (c) nickvergessen ( http://mods.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
		'INSTALLER_INTRO'					=> 'Введение',
	'INSTALLER_INTRO_WELCOME'				=> 'Вас приветствует мастер установки модуля',
	'INSTALLER_INTRO_WELCOME_NOTE'			=> 'Выберите в списке слева требуемое действие.',

	'INSTALLER_INSTALL'					=> 'Установить',
	'INSTALLER_INSTALL_MENU'			=> 'Установка',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Установка модуля версии %s успешно завершена. Не забудьте удалить с сервера папку install_altt.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Установка модуля версии %s не удалась.',
	'INSTALLER_INSTALL_VERSION'			=> 'Установить версию %s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Вас приветствует мастер установки модуля',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Во время установки данной модификации все изменения в базе данных от предыдущей версии будут удалены.',

	'INSTALLER_NEEDS_FOUNDER'			=> 'Необходимо войти на конференцию с правами основателя.',

	'INSTALLER_UPDATE'					=> 'Обновление',
	'INSTALLER_UPDATE_MENU'				=> 'Обновление',
	'INSTALLER_UPDATE_NOTE'				=> 'Обновление модуля от версии %s до версии %s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Обновление модуля от версии %s до версии %s успешно завершено. Не забудьте удалить с сервера папку install__altt.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Обновление модуля версии %s не удалось.',
	'INSTALLER_UPDATE_VERSION'			=> 'Обновить с версии ',
	'INSTALLER_UPDATE_WELCOME'			=> 'Вас приветствует мастер обновления модуля',


	'RT_UNSUPPORTED'					=> 'Извените, но тип Вашей базы данных не поддерживается.',

	'WARNING'							=> 'Внимание',
));

?>