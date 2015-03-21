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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Adninistrasjon av språkfiler',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Her kan du installere/fjerne språkpakker. Standard språkpakke er merket med en asterisk (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Er du sikker på at du vil slette «%s»?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Installerte språkpakker',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Språkdetaljene er oppdatert.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Denne språkpakken er allerede installert.',
	'LANGUAGE_PACK_DELETED'				=> 'Språkpakken «%s» er fjernet. Alle brukere som brukte dette språket, har fått språket tilbakestilt til systemets standardspråk.',
	'LANGUAGE_PACK_DETAILS'				=> 'Språkpakkedetaljer',
	'LANGUAGE_PACK_INSTALLED'			=> 'Språkpakken «%s» er installert.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Språkstrengene til det egendefinerte profilfeltet ble kopiert fra standardspråket. Endre dem om nødvendig.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalt navn',
	'LANGUAGE_PACK_NAME'				=> 'Navn',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Den valgte språkpakken finnes ikke.',
	'LANGUAGE_PACK_USED_BY'				=> 'Brukes av (inkludert roboter)',
	'LANGUAGE_VARIABLE'					=> 'Språkvariabel',
	'LANG_AUTHOR'						=> 'Språkpakkeforfatter',
	'LANG_ENGLISH_NAME'					=> 'Engelsk navn',
	'LANG_ISO_CODE'						=> 'ISO-kode',
	'LANG_LOCAL_NAME'					=> 'Lokalt navn',

	'MISSING_LANG_FILES'		=> 'Manglende språkfiler',
	'MISSING_LANG_VARIABLES'	=> 'Manglende språkvariabler',

	'NO_FILE_SELECTED'				=> 'Du har ikke angitt noen språkfil.',
	'NO_LANG_ID'					=> 'Du har ikke angitt noen språkpakke.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Du kan ikke fjerne standard språkpakke.<br />Hvis du vil fjerne denne språkpakken, må du først endre systemets standardspråk.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ingen uinstallerte språkpakker',

	'THOSE_MISSING_LANG_FILES'			=> 'Følgende språkfiler mangler i språkmappen «%s»',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Følgende språkvariabler mangler i språkpakken «%s»',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Uinstallerte språkpakker',
));
