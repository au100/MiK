<?php
/**
*
* @package phpBB3 User Blog
* @version $Id: setup.php 485 2008-08-15 23:33:57Z exreaction@gmail.com $
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
        'ALREADY_INSTALLED'                                => 'Вы уже инсталлировали User Blog Mod.<br /><br />Кликните %sздесь%s чтобы вернуться на главную страницу блогов.',
        'ALREADY_UPDATED'                                => 'Вы уже используете послуднюю версию User Blog Mod.<br /><br />Кликните %sздесь%s чтобы вернуться на главную страницу блогов.',

        'BACKUP_NOTICE'                                        => 'Удостоверьтесь, что сделали резервную копию ВСЕХ Ваших данных с ОБОИХ форумов ПРЕЖДЕ чем Вы попытаетесь сделать обновление.  Если что-то пойдет не так в процессе обновления, а Вы не сделаете резервную копию, Вы можете потерять всё.',

        'CLEANUP'                                                => 'Очистка',
        'CLEANUP_COMPLETE'                                => 'Таблицы были очищены успешно.',
        'CONVERTED_BLOG_IDS_MISSING'        => 'Конвертированные blog_id отсутствуют в кэше.  Пожалуйста восстановите Вашу резервную копию данных в БД и повторите попытку обновления.',
        'CONVERT_COMPLETE'                                => 'Процесс конвертирования успешно завершен.',
        'CONVERT_FOES'                                        => 'Конвертировать врагов',
        'CONVERT_FOES_EXPLAIN'                        => 'Конвертирует пользователей из weblog_blocked как врагов.',
        'CONVERT_FRIENDS'                                => 'Конвертировать друзей',
        'CONVERT_FRIENDS_EXPLAIN'                => 'Конвертирует пользователей из weblog_friends как друзей.',

        'DB_TABLE_NOT_EXIST'                        => '%s таблиц отсутствует в выбранной БД.',

        'FINAL'                                                        => 'Финал',

        'INDEX_COMPLETE'                                => 'Записи и комментарии были проиндексированы для системы поиска.',
        'INSTALL_BLOG_DB'                                => 'Инсталлировать User Blog Mod',
        'INSTALL_BLOG_DB_CONFIRM'                => 'Вы готовы приступить к внесению изменений этого мода в базу данных?',
        'INSTALL_BLOG_DB_FAIL'                        => 'Инсталляция User Blog Mod не удалась.<br />Пожалуйста сообщите EXreaction-у о следующих ошибках:<br />',
        'INSTALL_BLOG_DB_SUCCESS'                => 'Вы успешно внесли изменения в базу данных.<br /><br />Кликните %sздесь%s чтобы перейти к главной странице блогов.',

        'LIMIT_EXPLAIN'                                        => 'Number of items to do at one time.  If you set this too high you may have to redo the entire upgrade, but, the lower this is set the longer the upgrade will take.',
        'LIMIT_INCORRECT'                                => 'You must give a limit of at least 1.  It is highly recommended that you use at least 100 for this, but probably not more than 1000, depending on your PHP settings.',

        'NEXT_PART'                                                => 'Перейти к следующей части',
        'NOT_INSTALLED'                                        => 'Вы должны установить User Blog Mod прежде чем запускать скрипт модернизации.',
        'NO_STAGE'                                                => 'You have not given a stage to work on.',

        'PRE_UPGRADE_COMPLETE'                        => 'All pre-conversion steps have successfully been completed. You may now begin the actual conversion process. Please note that you may have to manually do and adjust several things after the automatic conversion, especially check the permissions assigned.',

        'REINDEX'                                                => 'Переиндексировать',
        'RESYNC'                                                => 'Ресинхронизировать',
        'RESYNC_COMPLETE'                                => 'User Blog Mod был ресинхронизирован.',
        'RETURN_LAST_STEP'                                => 'Щелкните здесь, чтобы вернуться к прошлому шагу.',

        'SCHEMA_NOT_EXIST'                                => 'The database install schema file is missing.  Please download a fresh copy of this mod and reupload all required files.  If that does not fix the problem, contact EXreaction.',
        'SEARCH_BREAK_CONTINUE_NOTICE'        => 'Section %1$s of %2$s, Part %3$s of %4$s has been completed, but there are more sections and/or parts that need to be finished before everything is finished.<br />Click continue below if you are not automatically redirected to the next page.',
        'SUCCESS'                                                => 'Успешно',
        'SUCCESSFULLY_UPDATED'                        => 'User blog mod has been updated to %1$s.<br /><br />Click %2$shere%3$s to return to the main blog page.',

        'TRUNCATE_TABLES'                                => 'Truncate existing tables',
        'TRUNCATE_TABLES_EXPLAIN'                => 'This will delete all of the data in the existing User Blog Mod tables.  If you select no the new data will be added along with your existing blogs and replies.',

        'UNINSTALL_BLOG_DB'                                => 'Деинсталлировать User Blog Mod',
        'UNINSTALL_BLOG_DB_CONFIRM'                => 'Are you sure you want to remove the User Blog Mod data?<br /><br /><strong>If you do this ALL data from the User Blog Mod will be lost.</strong>',
        'UNINSTALL_BLOG_DB_SUCCESS'                => 'The User Blog Mod data has been removed from the database.  To completely remove the User Blog Mod you must undo any edits and remove any files you added during the installation.',
        'UPDATE_INSTRUCTIONS'                        => 'Обновить',
        'UPDATE_INSTRUCTIONS_CONFIRM'        => 'Make sure you read the upgrade instructions in the MOD History section of the main mod install document first <b>before</b> you do this.<br /><br />Are you ready to upgrade the database for the User Blog Mod?',
        'UPGRADE_BLOGS'                                        => 'Модернизировать записи',
        'UPGRADE_BREAK_CONTINUE_NOTICE'        => 'Stage %1$s, Section %2$s of %3$s, Part %4$s of %5$s has been completed, but there are more sections and/or parts that need to be finished before the converter is finished for this stage.<br />Click continue below if you are not automatically redirected to the next page.',
        'UPGRADE_COMPLETE'                                => 'The upgrade process has completed successfully!<br />Please make sure you get backups of your finished conversion and check over the converted settings and data to be sure it is correct.',
        'UPGRADE_LIST'                                        => 'Модернизировать список',
        'UPGRADE_PHP'                                        => 'Вы пытаетесь запустить скрипт на неподдерживаемой версии PHP. Вы должны иметь PHP 5.1.0 или более новый, чтобы использовать эту модификацию.',
        'UPGRADE_REPLIES'                                => 'Модернизировать комментарии',

        'WELCOME_MESSAGE'                                => 'Добро пожаловать в User Blog Mod!

Обсуждение мода:
http://lithiumstudios.org/forum/viewtopic.php?f=41&t=433

Поддержка может быть получена только на lithiumstudios.org.  Если у Вас есть предложения или Вам нужна помощь, спрашивайте на этом форуме:
http://lithiumstudios.org/forum/viewforum.php?f=41',
        'WELCOME_SUBJECT'                                => 'Добро пожаловать в User Blog Mod!',
));

?>
