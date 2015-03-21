<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Подесите ову поставку уколико се конфигурациона поставка мења пречесто да би била делотворно кеширана.',
	'CLI_CONFIG_CURRENT'				=> 'Тренутна конфигурациона вредност, користите 0 и 1 да одредите вредности прекидача',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно обрисан конфиг %s.',
	'CLI_CONFIG_NEW'					=> 'Нова конфигурациона вредност, користите 0 и 1 да одредите вредности прекидача',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Конфиг %s не постоји',
	'CLI_CONFIG_OPTION_NAME'			=> 'Назив конфигурационе поставке',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Подесите ову поставку уколико вредност треба да буде одштампана без нове линије на крају.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Вредност за повећање од',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно повећан конфиг %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не може се подесити конфиг %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно подешен конфиг %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Штампа списак спремних и неспремних крон послова.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Извршава све спремне крон задатке.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Назив задатка који треба извршити',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Ажурира базу применом миграција.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Брише поставку конфигурације',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Онемогућава назначену екстензију.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Омогућава назначену екстензију.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Проналази миграције од којих не зависи.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Добија вредност конфигурационе поставке',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Повећава вредност конфигурационе поставке',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Приказује списак свих екстензија у бази и систему датотека.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Ради у Safe Mode (без екстензија).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Launch the shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Избаци назначену екстензију.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Прерачунава user_email_hash колону users табеле.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Подешава вредност конфигурационе поставке само уколико се стара поклапа са тренутном вредности',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Подешава вредност конфигурационе поставке',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не могу онемогућити екстензију %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успешно онемогућена екстензија %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не могу омогућити екстензију %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успешно омогућена екстензија %s',
	'CLI_EXTENSION_NAME'				=> 'Назив екстензије',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не могу избацити екстензију %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно избачена екстензија %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Нису пронађене екстензије.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступно',
	'CLI_EXTENSIONS_DISABLED'			=> 'Онемогућено',
	'CLI_EXTENSIONS_ENABLED'			=> 'Омогућено',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успешно прерачунате све email hashes.',
));
