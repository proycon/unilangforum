<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: extensions.php 444 2014-08-08 19:24:22Z jan_skovsgaard $
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/
/**
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
	'EXTENSION'					=> 'Udvidelse',
	'EXTENSIONS'				=> 'udvidelser',
	'EXTENSIONS_ADMIN'			=> 'Udvidelsemanager',
	'EXTENSIONS_EXPLAIN'		=> 'Udvidelsemanageren gør det muligt at se og administrere alle dit boards udvidelser, se status og informationer om disse. Deaktiveres en udvidelse, bevares data intakte, og den kan aktiveres med alle tidligere indstillinger. 
	Slettes data, slettes alle indstillinger og data tilknyttet udvidelsen.',
	'EXTENSION_INVALID_LIST'	=> 'Udvidelsen "%s" er ikke gyldig.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Den valgte udvidelse er ikke tilgængelig. Bekræft venligst at din phpBB- og PHP-version er tilladt (se siden med detailspecifikationerne).',
	'EXTENSION_DIR_INVALID'    => 'Den valgte udvidelse har en ugyldig mappestruktur og kan ikke aktiveres.',
	'EXTENSION_NOT_ENABLEABLE' => 'Den valgte udvidelse kan ikke aktiveres. Undersøg venligst om udvidelsens krav opfyldes.',

	'DETAILS'				=> 'Detaljer',
	
	'EXTENSIONS_DISABLED'	=> 'Inaktive udvidelser',
	'EXTENSIONS_ENABLED'	=> 'Aktive udvidelser',

	'EXTENSION_DELETE_DATA'	=> 'Slet data',
	'EXTENSION_DISABLE'		=> 'Deaktiver',
	'EXTENSION_ENABLE'		=> 'Aktiver',

	'EXTENSION_DELETE_DATA_EXPLAIN'		=> 'Når en udvidelses data slettes, fjernes alle dens data og indstillinger. Udvidelsens filer bevares, og den kan aktiveres igen.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Når en udvidelse deaktiveres, bibeholdes dens filer, data og indstillinger, men udvidelsens funktionalitet fjernes.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Når en udvidelse aktiveres får du mulighed for at anvende den på dit board.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'		=> 'Udvidelsens data er ved at blive slettet. Forlad venligst ikke denne side og undlad at genindlæse den, i mens processen er i gang.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Udvidelsen er under deaktivering. Forlad venligst ikke denne side og undlad at genindlæse den, i mens processen er i gang.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Udvidelsen er under aktivering. Forlad venligst ikke denne side og undlad at genindlæse den, i mens processen er i gang.',
	
	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Udvidelsens data blev slettet',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Udvidelsen blev deaktiveret',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Udvidelsen blev aktiveret',

	'EXTENSION_NAME'		=> 'Udvidelsens navn',
	'EXTENSION_ACTIONS'		=> 'Handlinger',
	'EXTENSION_OPTIONS'		=> 'Vis',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Opdater udvidelse',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Deaktiver udvidelsen</li>
			<li>Slet udvidelsens filer fra filsystemet</li>
			<li>Upload nye filer</li>
			<li>Aktiver udvidelsen</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Fjerne en udvidelse fra dit board',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Deaktiver udvidelsen</li>
			<li>Slet udvidelsens data</li>
			<li>Slet udvidelsens filer fra filsystemet</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Er du sikker på at du vil slette data tilknyttet udvidelsen "%s"?<br /><br />Herved fjernes alle data og indstillinger, og kan ikke fortrydes!',
	'EXTENSION_DISABLE_CONFIRM'			=> 'Er du sikker på at du vil deaktivere udvidelsen "%s"?',
	'EXTENSION_ENABLE_CONFIRM'			=> 'Er du sikker på at du vil aktivere udvidelsen "%s"?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Er du sikker på at du vil gøre brug af en ustabil version?',
	
	'RETURN_TO_EXTENSION_LIST'		=> 'Tilbage til listen over udvidelser',

	'EXT_DETAILS'			=> 'Detaljer for udvidelse',
	'DISPLAY_NAME'			=> 'Navn',
	'CLEAN_NAME'			=> 'Placering', //Clean Name?
	'TYPE'					=> 'Type',
	'DESCRIPTION'			=> 'Beskrivelse',
	'VERSION'				=> 'Version',
	'HOMEPAGE'				=> 'Hjemmeside',
	'PATH'					=> 'Sti til filen',
	'TIME'					=> 'Frigivet',
	'LICENSE'				=> 'Licens',

	'REQUIREMENTS'			=> 'Krav',
	'PHPBB_VERSION'			=> 'phpBB-version',
	'PHP_VERSION'			=> 'PHP-version',
	'AUTHOR_INFORMATION'	=> 'Udviklerinformation',
	'AUTHOR_NAME'			=> 'Navn',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Hjemmeside',
	'AUTHOR_ROLE'			=> 'Rolle',

	'NOT_UP_TO_DATE'		=> '%s er ikke up to date',
	'UP_TO_DATE'			=> '%s er up to date',
	'ANNOUNCEMENT_TOPIC'	=> 'Frigivelsebekendtgørelse',
	'DOWNLOAD_LATEST'		=> 'Download version',
	'NO_VERSIONCHECK'		=> 'Ingen information om versionkontrol.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Genkontroller alle versioner',
	'FORCE_UNSTABLE'					=> 'Kontroller altid efter ustabile versioner',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Indstillinger for versionkontrol',

	'META_FIELD_NOT_SET'	=> 'Obligatorisk metafelt %s er ikke udfyldt.',
	'META_FIELD_INVALID'	=> 'Metafeltet %s er ugyldigt.',
));
