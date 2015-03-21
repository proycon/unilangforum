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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Her kan du administrere alle typer moduler. Merk at ACP har en menystruktur med tre nivåer (Kategori -> Kategori -> Modul), mens de andre har en struktur med to nivåer (Kategori -> Modul), noe som må respekteres. Pass også på at du ikke stenger deg selv ute ved å deaktivere eller slette modulene for moduladministrasjon.',
	'ADD_MODULE'					=> 'Legg til modul',
	'ADD_MODULE_CONFIRM'			=> 'Er du sikker på at du vil legge til den valgte modulen i valgte modus?',
	'ADD_MODULE_TITLE'				=> 'Legg til modul',

	'CANNOT_REMOVE_MODULE'	=> 'Kan ikke fjerne modulen, den har undermoduler tilordnet seg. Fjern eller flytt alle undermoduler før du gjør dette.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Velg modulmodus',
	'CHOOSE_MODE_EXPLAIN'	=> 'Velg modulmodusen som skal brukes.',
	'CHOOSE_MODULE'			=> 'Velg modul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Velg hvilken fil som kalles av denne modulen.',
	'CREATE_MODULE'			=> 'Opprett ny modul',

	'DEACTIVATED_MODULE'	=> 'Deaktiver modul',
	'DELETE_MODULE'			=> 'Slett modul',
	'DELETE_MODULE_CONFIRM'	=> 'Er du sikker på at du vil fjerne denne modulen?',

	'EDIT_MODULE'			=> 'Rediger modul',
	'EDIT_MODULE_EXPLAIN'	=> 'Her kan du angi modulspesifikke innstillinger.',

	'HIDDEN_MODULE'			=> 'Skjult modul',

	'MODULE'					=> 'Modul',
	'MODULE_ADDED'				=> 'Modul lagt til.',
	'MODULE_DELETED'			=> 'Modul fjernet.',
	'MODULE_DISPLAYED'			=> 'Modul synlig',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Hvis du ikke vil at denne modulen skal synes, men ønsker å bruke den, angi dette til Nei.',
	'MODULE_EDITED'				=> 'Modul redigert.',
	'MODULE_ENABLED'			=> 'Modul aktivert',
	'MODULE_LANGNAME'			=> 'Språknavn for modul',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Angi navnet som vises for modulen. Bruk en språkkonstant hvis navnet hentes fra en språkfil.',
	'MODULE_TYPE'				=> 'Modultype',

	'NO_CATEGORY_TO_MODULE'	=> 'Kan ikke gjøre kategorien om til modul. Fjern/flytt alle undermoduler før du gjør dette.',
	'NO_MODULE'				=> 'Finner ingen modul.',
	'NO_MODULE_ID'			=> 'Ingen modul-ID angitt.',
	'NO_MODULE_LANGNAME'	=> 'Intet språknavn på modulen er angitt.',
	'NO_PARENT'				=> 'Ingen overordnet',

	'PARENT'				=> 'Overordnet',
	'PARENT_NO_EXIST'		=> 'Overordnet finnes ikke.',

	'SELECT_MODULE'			=> 'Velg en modul',
));
