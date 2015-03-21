<?php
/** 
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: styles.php 472 2014-11-22 07:21:27Z jan_skovsgaard $
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
// All language files should use UTF-8 as their encoding and the files must not contain a BOM
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_STYLES_EXPLAIN'	=> 'Her kan du vedligeholde de tilgængelige typografier på dit board. En typografi består af en skabelon og et tema. Du kan ændre, slette, deaktivere og genaktivere eksisterende typografier eller installere nye. Du kan også se hvordan en typografi vil se ud, ved at bruge muligheden "vis prøve". Der er også listet hvor mange brugere, der har valgt at bruge hver af de tilgængelige typografier. Hvis du har valgt at tilsidesætte brugerens valg af typografi, er det ikke afspejlet her.',

	'CANNOT_BE_INSTALLED'		=> 'Kan ikke installeres',
	'CONFIRM_UNINSTALL_STYLES'	=> 'Er du sikker på at du vil afinstallere valgte typografier?',
	'COPYRIGHT'					=> 'Copyright',
	
	'DEACTIVATE_DEFAULT'		=> 'Du kan ikke deaktivere standardindstillingens typografi.',
	'DELETE_FROM_FS'			=> 'Slet fra filsystemet',
	'DELETE_STYLE_FILES_FAILED'	=> 'Der opstod fejl under forsøget på at slette filer tilhørende typografien "%s".',
	'DELETE_STYLE_FILES_SUCCESS' => 'Filer tilhørende typografien "%s" blev slettet.',
	'DETAILS'					=> 'Oplysninger',

	'INHERITING_FROM'			=> 'Arvet fra',
	'INSTALL_STYLE'				=> 'Installer typografi',
	'INSTALL_STYLES'			=> 'Installer typografier',
	'INSTALL_STYLES_EXPLAIN'	=> 'Her kan du installere nye typografier.<br />Kan du ikke finde en specifik typografi i nedenstående liste, bør du kontrollere om den allerede er installeret. Er den ikke installeret, kontrolleres om den blev uploadet korrekt.',
	'INVALID_STYLE_ID'			=> 'Ugyldig typografi-ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Ingen typografier matcher din forespørgsel.',
	'NO_UNINSTALLED_STYLE'		=> 'Ingen typografier.',

	'PURGED_CACHE'				=> 'Cachen blev tømt.',

	'REQUIRES_STYLE'			=> 'Denne typografi kræver at typografien "%s" også er installeret.',

	'STYLE_ACTIVATE'			=> 'Aktiver',
	'STYLE_ACTIVE'				=> 'Aktiv',
	'STYLE_DEACTIVATE'			=> 'Deaktiver',
	'STYLE_DEFAULT'				=> 'Standardtypografi for boardet',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Du skal aktivere typografien før den kan vælges som standardtypografi.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Ugyldig forælder-typografi.',
	'STYLE_ERR_NAME_EXIST'		=> 'Der eksisterer allerede en typografi med dette navn.',
	'STYLE_ERR_STYLE_NAME'		=> 'Du skal angive et navn til denne typografi.',
	'STYLE_INSTALLED'			=> 'Typografien "%s" blev installeret.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Retur til listen over installere typografier',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Installer flere typografier',
	'STYLE_NAME'				=> 'Typografiens navn',
	'STYLE_NAME_RESERVED'		=> 'Typografien "%s" kan ikke installeres, fordi typografinavn er reserveret.',
	'STYLE_NOT_INSTALLED'		=> 'Typografien "%s" blev ikke installeret.',
	'STYLE_PATH'				=> 'Sti til typografi',
	'STYLE_UNINSTALL'			=> 'Afinstaller',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Typografien "%s" kan ikke afinstalleres, da en eller flere andre typografier anvender egenskaber fra den.',
	'STYLE_UNINSTALLED'			=> 'Typografien "%s" blev afinstalleret.',
	'STYLE_USED_BY'				=> 'Bruges af (inklusive botter)',

	'UNINSTALL_DEFAULT'		=> 'Du kan ikke afinstallere standardtypografien.',
));
