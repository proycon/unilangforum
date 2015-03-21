<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Angi dette alternativet hvis konfigurasjonsalternativet endres for ofte til å bli bufret på en effektiv måte.',
	'CLI_CONFIG_CURRENT'				=> 'Gjeldende konfigurasjonsverdi, bruk 0 og 1 til å angi boolske verdier',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Slettet konfigurasjon %s.',
	'CLI_CONFIG_NEW'					=> 'Ny konfigurasjonsverdi, bruk 0 og 1 til å angi boolske verdier',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurasjon %s finnes ikke',
	'CLI_CONFIG_OPTION_NAME'			=> 'Navnet på konfigurasjonsalternativet',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Angi dette alternativet hvis verdien skal vises uten linjeskift på slutten.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Økes med',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfigurasjon %s er økt',
	'CLI_CONFIG_SET_FAILURE'			=> 'Kan ikke angi konfigurasjon %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfigurasjon %s angitt',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Viser en liste over klare og ikke-klare cron-jobber.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Kjør alle klare cron-oppgaver.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Navnet på oppgaven som skal kjøres',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Oppdaterer databasen ved å aktivere migreringer.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Sletter et konfigurasjonsalternativ',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Deaktiverer angitt utvidelse.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiverer angitt utvidelse.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Finner migreringer som ikke er avhengige.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Henter verdien til et konfigurasjonsalternativ',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Øker verdien til et konfigurasjonsalternativ',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Viser alle utvidelser i databasen og på filsystemet.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Kjør i Sikker modus (uten utvidelser).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Start shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Tømmer den angitte utvidelsen.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Rekalkulerer kolonnen user_email_hash i brukertabellen.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Angir verdien til et konfigurasjonsalternativ bare hvis gammel og gjeldende verdi er lik',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Angir verdien til et konfigurasjonsalternativ',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Kan ikke deaktivere utvidelsen %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Utvidelsen %s er deaktivert',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Kan ikke aktivere utvidelsen %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Utvidelsen %s er aktivert',
	'CLI_EXTENSION_NAME'				=> 'Navnet på utvidelsen',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Kan ikke tømme utvidelsen %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Utvidelsen %s er tømt',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Fant ingen utvidelser.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tilgjengelig',
	'CLI_EXTENSIONS_DISABLED'			=> 'Deaktivert',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktivert',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Alle e-posthasher er rekalkulert.',
));
