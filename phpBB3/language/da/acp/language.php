<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: language.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'ACP_FILES'						=> 'Administration af sprogfiler',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Her kan du installere og fjerne sprogpakker. Boardets standardsprog er mærket med en stjerne (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Er du sikker at du vil slette "%s"?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Installerede sprogpakker',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Sproginformationer korrekt opdateret.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Denne sprogpakke er allerede installeret.',
	'LANGUAGE_PACK_DELETED'				=> 'Sprogpakken "%s" er nu fjernet og alle brugere, der havde valgt dette sprog, er blevet sat til at bruge boardets standardsprog.',
	'LANGUAGE_PACK_DETAILS'				=> 'Sprogpakkeinformationer',
	'LANGUAGE_PACK_INSTALLED'			=> 'Sprogpakken "%s" er blevet installeret.',
	'LANGUAGE_PACK_CPF_UPDATE'      => 'De tilpassede profilfelters sprogspecifikke indstillinger blev kopieret fra standardsproget. Det er det muligt at oversætte feltet individuelt for hvert installeret sprog.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalt navn',
	'LANGUAGE_PACK_NAME'				=> 'Navn',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Den valgte sprogpakke findes ikke.',
	'LANGUAGE_PACK_USED_BY'				=> 'Bruges af (incl. botter)',
	'LANGUAGE_VARIABLE'					=> 'Sprogvariabel',
	'LANG_AUTHOR'						=> 'Sprogpakkens forfatter',
	'LANG_ENGLISH_NAME'					=> 'Engelsk navn',
	'LANG_ISO_CODE'						=> 'ISO kode',
	'LANG_LOCAL_NAME'					=> 'Lokalt navn',

	'MISSING_LANG_FILES'		=> 'Manglende sprogfiler',
	'MISSING_LANG_VARIABLES'	=> 'Manglende sprogvariabler',

	'NO_FILE_SELECTED'			=> 'Du har ikke angivet en sprogfil.',
	'NO_LANG_ID'					=> 'Du har ikke angivet en sprogpakke.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Du kan ikke fjerne standardsprogpakken.<br />Hvis du ønsker at fjerne denne sprogpakke, skal du ændre boardets standardsprog først.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ingen afinstallerede sprogpakker',

	'THOSE_MISSING_LANG_FILES'			=> 'Følgende sprogfiler mangler i "%s"-sprogmappen',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Følgende sprogvariabler mangler i "%s"-sprogpakken',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Afinstallerede sprogpakker',
));
