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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Her kan du sikkerhetskopiere alle phpBB-relaterte data. Du kan lagre arkivfilen som blir generert, i mappen <samp>store/</samp> eller laste den ned med en gang. Avhengig av serverkonfigurasjonen, vil du kunne komprimere filen i ulike formater.',
	'ACP_RESTORE_EXPLAIN'	=> 'Dette gjennomfører en fullstendig gjenoppretting av alle phpBB-tabeller fra en lagret fil. Hvis serveren din støtter det, kan du bruke en gzip- eller bzip2-komprimert tekstfile, og den vil bli dekomprimert automatisk. <strong>ADVARSEL!</strong> Dette overskriver alle eksisterende data. Gjenopprettingen kan ta lang tid, så ikke forlat denne siden før den er fullført. Sikkerhetskopier lagres i mappen <samp>store/</samp> og antas å være generert av sikkerhetskopieringsfunksjonen i phpBB. Gjenoppretting av sikkerhetskopier som ikke ble opprettet av det innebygde systemet, vil kanskje ikke fungere.',

	'BACKUP_DELETE'		=> 'Sikkerhetskopifilen er slettet.',
	'BACKUP_INVALID'	=> 'Filen som er valgt for sikkerhetskopiering, er ugyldig.',
	'BACKUP_OPTIONS'	=> 'Alternativer for sikkerhetskopiering',
	'BACKUP_SUCCESS'	=> 'Sikkerhetskopifilen er opprettet.',
	'BACKUP_TYPE'		=> 'Sikkerhetskopieringstype',

	'DATABASE'			=> 'Databaseverktøy',
	'DATA_ONLY'			=> 'Bare data',
	'DELETE_BACKUP'		=> 'Slett sikkerhetskopi',
	'DELETE_SELECTED_BACKUP'	=> 'Er du sikker på at du vil slette den valgte sikkerhetskopien?',
	'DESELECT_ALL'		=> 'Fjern all merking',
	'DOWNLOAD_BACKUP'	=> 'Last ned sikkerhetskopi',

	'FILE_TYPE'			=> 'Filtype',
	'FILE_WRITE_FAIL'	=> 'Kan ikke skrive fil til lagringsmappe.',
	'FULL_BACKUP'		=> 'Full',

	'RESTORE_FAILURE'		=> 'Sikkerhetskopifilen kan være skadet.',
	'RESTORE_OPTIONS'		=> 'Alternativer for gjenoppretting',
	'RESTORE_SELECTED_BACKUP'	=> 'Er du sikker på at du vil gjenopprette den valgte sikkerhetskopien?',
	'RESTORE_SUCCESS'		=> 'Databasen er gjenopprettet.<br /><br />Systemet skal nå være i samme tilstand som da sikkerhetskopien ble laget.',

	'SELECT_ALL'			=> 'Merk alle',
	'SELECT_FILE'			=> 'Velg en fil',
	'START_BACKUP'			=> 'Start sikkerhetskopiering',
	'START_RESTORE'			=> 'Start gjenoppretting',
	'STORE_AND_DOWNLOAD'	=> 'Lagre og last ned',
	'STORE_LOCAL'			=> 'Lagre filen lokalt',
	'STRUCTURE_ONLY'		=> 'Bare struktur',

	'TABLE_SELECT'		=> 'Tabellvalg',
	'TABLE_SELECT_ERROR'=> 'Du må velge minst én tabell.',
));
