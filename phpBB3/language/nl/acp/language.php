<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ACP_FILES'						=> 'Taalbestanden beheren',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Hier kan je taalpakketten installeren/verwijderen. Het standaard taalpakket is gemarkeerd met een ster (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Weet je zeker dat je “%s” wilt verwijderen?',
	
	'INSTALLED_LANGUAGE_PACKS'		=> 'Geïnstalleerde taalpakketten',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Taaldetails succesvol bijgewerkt.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Dit taalpakket is al geïnstalleerd.',
	'LANGUAGE_PACK_DELETED'				=> 'Het taalpakket “%s” is succesvol verwijderd. Alle gebruikers die deze taal hebben ingesteld zijn omgezet naar de standaard forumtaal.',
	'LANGUAGE_PACK_DETAILS'				=> 'Taalpakket-details',
	'LANGUAGE_PACK_INSTALLED'			=> 'Het taalpakket “%s” is succesvol geïnstalleerd.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'De eigen profielvelden taalregels zijn gekopieerd van de standaardtaal. Verander ze indien nodig.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokale naam',
	'LANGUAGE_PACK_NAME'				=> 'Naam',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Het geselecteerde taalpakket bestaat niet.',
	'LANGUAGE_PACK_USED_BY'				=> 'Gebruikt door (inclusief robots)',
	'LANGUAGE_VARIABLE'					=> 'Taalvariabele',
	'LANG_AUTHOR'						=> 'Taalpakket-auteur',
	'LANG_ENGLISH_NAME'					=> 'Engelse naam',
	'LANG_ISO_CODE'						=> 'ISO-code',
	'LANG_LOCAL_NAME'					=> 'Lokale naam',

	'MISSING_LANG_FILES'		=> 'Ontbrekende taalbestanden',
	'MISSING_LANG_VARIABLES'	=> 'Ontbrekende taalvariabele',

	'NO_FILE_SELECTED'				=> 'Je hebt geen taalbestand gespecificeerd.',
	'NO_LANG_ID'					=> 'Je hebt geen taalpakket gespecificeerd.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Je kan het standaard taalpakket niet verwijderen.<br />Als je dit taalpakket wilt verwijderen moet je eerst de standaard forumtaal wijzigen.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Er zijn geen nog niet geïnstalleerde taalpakketten',

	'THOSE_MISSING_LANG_FILES'			=> 'De volgende taalbestanden ontbreken in de “%s” taalmap',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'De volgende taalvariabelen ontbreken in het “%s” taalpakket',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Niet geïnstalleerde taalpakketten',
));
