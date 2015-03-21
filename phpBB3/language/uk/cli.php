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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Увімкніть цю опцію, якщо значення параметра конфігурації змінюється занадто часто, для її кешування.',
	'CLI_CONFIG_CURRENT'				=> 'Поточне значення параметру конфігурації. Використовуйте 0 і 1, щоб задавати значення логічного типу (boolean)',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успішно видалено параметр конфігурації %s.',
	'CLI_CONFIG_NEW'					=> 'Нове значення параметра конфігурації. Використовуйте 0 і 1, щоб задавати значення логічного типу (boolean)',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Параметр конфігурації %s не існує',
	'CLI_CONFIG_OPTION_NAME'			=> 'Назва параметру конфігурації',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Увімкніть цю опцію, якщо значення повинні виводитись без перекладу рядка в кінці.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Збільшити на величину',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успішно збільшено параметр конфігурації %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не вдалося встановити параметр конфігурації %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успішно встановлено параметр конфігурації %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Вивести список готових і неготових до виконання завдань планувальника (cron).',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Запустити усі готові до виконання завдання планувальника (cron).',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Назва завдання планувальника, яка буде виконана',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Оновити базу даних шляхом застосування міграцій.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Видалити параметр конфігурації',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Вимкнути задане розширення.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Увімкнути задане розширення.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Знайти міграції, що не мають залежностей.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Отримати значення параметра конфігурації',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Збільшити значення параметра конфігурації',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Вивести список всіх розширень з бази даних і файлової системи.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Запустити командний рядок в безпечному режимі (без розширень).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Запустити командний рядок.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Видалити розширення разом з даними.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Перерахувати поле user_email_hash в таблиці користувачів.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Встановити значення параметра конфігурації в разі, якщо старе значення збігається з поточним',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Встановити значення параметра конфігурації',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Не вдалося вимкнути розширення %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Успішно відключено розширення %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Не вдалося увімкнути розширення %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Успішно увімкнено розширення %s',
	'CLI_EXTENSION_NAME'				=> 'Назва розширення',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не вдалося видалити файли і дані розширення %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успішно видалено файли і дані розширення %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Розширень не знайдено.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Доступні',
	'CLI_EXTENSIONS_DISABLED'			=> 'Вимкнені',
	'CLI_EXTENSIONS_ENABLED'			=> 'Увімкнені',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успішно перераховані всі значення хешів email',
));
