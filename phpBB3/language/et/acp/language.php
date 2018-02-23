<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_FILES'						=> 'AJP keelefailid',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Siin leheküljel saad oma foorumile paigaldada, ning eemaldada keelefaile. Vaikimisi keelefail on märgitud tärniga (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Kas oled kindel, et soovid kustutada “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Paigaldatud keelefailid',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Keele detailid on edukalt uuendatud.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'See keelefail on juba paigaldatud.',
	'LANGUAGE_PACK_DELETED'				=> 'Keelefail “%s” on edukalt eemaldatud. Kõikide kasutajate keel, kellel oli valitud see keel, on asendatud vaikimisi keelega.',
	'LANGUAGE_PACK_DETAILS'				=> 'Keelefaili detailid',
	'LANGUAGE_PACK_INSTALLED'			=> 'Keelefail “%s” on edukalt paigaldatud.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Kohandatud profiiliväljade keelevalikud kopeeriti vaikimisi sätestatud keelest. Palun muuda neid kui vajalik.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokaalne nimi',
	'LANGUAGE_PACK_NAME'				=> 'Nimi',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Valitud keelefaili pole olemas.',
	'LANGUAGE_PACK_USED_BY'				=> 'Kasutatud: (k.a robotid)',
	'LANGUAGE_VARIABLE'					=> 'Keele muutuja',
	'LANG_AUTHOR'						=> 'Keelefaili autor',
	'LANG_ENGLISH_NAME'					=> 'Ingliskeelne nimi',
	'LANG_ISO_CODE'						=> 'ISO kood',
	'LANG_LOCAL_NAME'					=> 'Lokaalne nimi',

	'MISSING_LANG_FILES'		=> 'Puudub keelefail',
	'MISSING_LANG_VARIABLES'	=> 'Puuduvad keele muutujad',

	'NO_FILE_SELECTED'				=> 'Sa pole valinud keelefaili.',
	'NO_LANG_ID'					=> 'Sa pole valinud keelefaili.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Sa pole võimeline eemaldama vaikimisi seatud keelefaili.<br />Kui sa tahad eemaldada seda keelefaili, vaheta enne oma foorumi vaikimisi seatud keel.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Pole ühtegi eemaldatud keelefaili',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Sirvi keelefailide andmebaasi',

	'THOSE_MISSING_LANG_FILES'			=> 'Järgnevad keelefailid puuduvad kaustast “%s”',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Järgnevad keelelised muutujad puuduvad keelefailist “%s”',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Eemaldatud keelefailid',
));
