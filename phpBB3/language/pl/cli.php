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
* @Polish locale 2014-10-07 18:24:32 Zespół Olympus.pl $
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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ustaw tę opcję, jeśli opcja konfiguracji zmienia się zbyt często, aby być skutecznie buforowana.',
	'CLI_CONFIG_CURRENT'				=> 'Bieżąca wartość konfiguracyjna. Użyj 0 i 1, aby określić wartości logiczne.',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Usunięto konfigurację %s.',
	'CLI_CONFIG_NEW'					=> 'Nowa wartość konfiguracyjna. Użyj 0 i 1, aby określić wartości logiczne.',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Nie ma konfiguracji %s',
	'CLI_CONFIG_OPTION_NAME'			=> 'Nazwa opcji konfiguracyjnej',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Ustaw tę opcję, jeśli wartość powinna być drukowana bez nowej linii na końcu.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Zwiększaj wartość o',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Zwiększono konfigurację %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Nie można określić konfiguracji %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Określono konfigurację %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Drukuje listę gotowych i niegotowych zadań dla crona.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Uruchamia wszystkie gotowe zadania dla crona.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nazwa zadania do uruchomienia',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Aktualizuje bazę danych poprzez zastosowanie migracji.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Usuwa opcję konfiguracji',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Wyłącza Wyłącza określone rozszerzenie rozszerzenie.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Włącza wybrane rozszerzenie.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Znajduje niewymagane migracje',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Pobiera wartość konfiguracyjną opcji',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Zwiększa wartość konfiguracyjną opcji',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Wyświetla wszystkie rozszerzenia w bazie danych i w systemie plików.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Uruchom w trybie awaryjnym (bez rozszerzeń).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Uruchom powłokę.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Usuwa wybrane rozszerzenie.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Przelicza kolumnę user_email_hash w tabeli użytkowników.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Ustawia wartość opcji konfiguracyjnej tylko, jeśli stara wartość pasuje do nowej wartości',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Ustawia wartość opcji konfiguracyjnej',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nie można wyłączyć rozszerzenia %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Wyłączono rozszerzenie %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nie można włączyć rozszerzenia %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Włączono rozszerzenie %s',
	'CLI_EXTENSION_NAME'				=> 'Nazwa rozszerzenia',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nie można usunąć rozszerzenia %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Usunięto rozszerzenie %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nie znaleziono żadnych rozszerzeń.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Dostępne',
	'CLI_EXTENSIONS_DISABLED'			=> 'Wyłączone',
	'CLI_EXTENSIONS_ENABLED'			=> 'Włączone',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Przeliczono wszystkie numery wiadomości e-mail.',
));
