<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
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
	'ACP_FILES'						=> 'Administrationsspråkfiler',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Här kan du installera/ta bort språkpaket. Standardspråket är stjärnmärkt.',
	'DELETE_LANGUAGE_CONFIRM'		=> 'Är du säker på att du vill ta bort “%s”?',
	'INSTALLED_LANGUAGE_PACKS'		=> 'Installerade språkpaket',
	'LANGUAGE_DETAILS_UPDATED'			=> 'Språkdetaljer uppdaterades.',

	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Detta språkpaket är redan installerat.',
	'LANGUAGE_PACK_DELETED'				=> 'Språkpaketet "%s" togs bort. Alla användare som använde detta språk har återställts till forumets standardspråk.',
	'LANGUAGE_PACK_DETAILS'				=> 'Språkpaketsdetaljer',
	'LANGUAGE_PACK_INSTALLED'			=> 'Språkpaketet "%s" installerades.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Det egna profilfältets språksträngar kopierades från standardspråket. Var god ändra dessa strängar efter behov.',

	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalt namn',
	'LANGUAGE_PACK_NAME'				=> 'Namn',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Det valda språkpaketet finns inte.',
	'LANGUAGE_PACK_USED_BY'				=> 'Används av (inklusive robotar)',
	'LANGUAGE_VARIABLE'					=> 'Språkvariabel',
	'LANG_AUTHOR'						=> 'Språkpaketsförfattare',
	'LANG_ENGLISH_NAME'					=> 'Engelskt namn',
	'LANG_ISO_CODE'						=> 'ISO-kod',
	'LANG_LOCAL_NAME'					=> 'Lokalt namn',
	'MISSING_LANG_FILES'				=> 'Saknade språkfiler',
	'MISSING_LANG_VARIABLES'			=> 'Saknade språkvariablar',
	'NO_FILE_SELECTED'					=> 'Du angav ingen språkfil.',
	'NO_LANG_ID'						=> 'Du angav inget språkpaket.',
	'NO_REMOVE_DEFAULT_LANG'			=> 'Du kan inte ta bort standardspråkpaketet.<br />Om du vill ta bort detta språkpaket, byt forumets standardspråk först.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'		=> 'Inga oinstallerade språkpaket.',
	'THOSE_MISSING_LANG_FILES'			=> 'Följande språkfiler saknas i språket "%s" mapp.',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Följande språkvariabler saknas i språkpaketet "%s".',
	'UNINSTALLED_LANGUAGE_PACKS'		=> 'Ej installerade språkpaket',

));
