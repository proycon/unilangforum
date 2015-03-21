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
* @Polish locale 2014-10-28 18:24:32 Zespół Olympus.pl $
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
	'CONFIG_NOT_EXIST'					=> 'Nie ma ustawienia „%s”.',

	'GROUP_NOT_EXIST'					=> 'Nie ma grupy „%s”.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Zastosuj zależności z %s.',
	'MIGRATION_DATA_DONE'				=> 'Zainstalowano dane: %1$s; Czas: %2$.2f s',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalowanie danych: %1$s; Czas: %2$.2f s',
	'MIGRATION_DATA_RUNNING'			=> 'Instalowanie danych: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migracja została już dokonana (pominięta): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Nie udało się poprawnie wykonać zadania i informacje dotyczące tego błędu zostały zapisane. Zmiany wykonane przed wystąpieniem błędu zostały anulowane, ale należy sprawdzić czy na witrynie nie ma błędów.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migracja „%1$s” jest niezadowalająca, brakuje „%2$s”.',
	'MIGRATION_NOT_VALID'				=> 'Migracja %s nie jest prawidłową migracją.',
	'MIGRATION_SCHEMA_DONE'				=> 'Zainstalowano strukturę fizyczną bazy: %1$s; Czas: %2$.2f s',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Instalowanie struktury fizycznej bazy: %s.',

	'MODULE_ERROR'						=> 'W trakcie tworzenia modułu %s wystąpił błąd',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Brakuje wymaganego pliku informacyjnego: %2$s',
	'MODULE_NOT_EXIST'					=> 'Nie ma wymaganego modułu: %s',

	'PERMISSION_NOT_EXIST'				=> 'Nie istnieje ustawienie „%s”.',

	'ROLE_NOT_EXIST'					=> 'Nie istnieje rola „%s”.',
));
