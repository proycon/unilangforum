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
	'EXTENSION'					=> 'Utvidelse',
	'EXTENSIONS'				=> 'Utvidelser',
	'EXTENSIONS_ADMIN'			=> 'Utvidelsesadministrasjon',
	'EXTENSIONS_EXPLAIN'		=> 'Utvidelsesadministrasjon er et verktøy på phpBB-nettstedet som lar deg administrere alle utvidelsesstatuser og vise informasjon om dem.',
	'EXTENSION_INVALID_LIST'	=> 'Utvidelsen «%s» er ikke gyldig.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Den valgte utvidelsen er ikke tilgjengelig for dette nettstedet, kontroller at phpBB- og PHP-versjonene er tillatt (se detaljsiden).',
	'EXTENSION_DIR_INVALID'		=> 'Den valgte utvidelsen har en ugyldig mappestruktur og kan ikke aktiveres.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Den valgte utvidelsen kan ikke aktiveres, kontroller utvidelsens krav.',

	'DETAILS'				=> 'Detaljer',

	'EXTENSIONS_DISABLED'	=> 'Deaktiverte utvidelser',
	'EXTENSIONS_ENABLED'	=> 'Aktiverte utvidelser',

	'EXTENSION_DELETE_DATA'	=> 'Slett data',
	'EXTENSION_DISABLE'		=> 'Deaktiver',
	'EXTENSION_ENABLE'		=> 'Aktiver',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Når du sletter dataene til en utvidelse, fjernes alle data og innstillinger. Utvidelsens filer beholdes, slik at den kan aktiveres på nytt.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Når du deaktiverer en utvidelse, beholdes filer, data og innstillinger, men alle funksjoner som utvidelsen gir, fjernes.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Når en utvidelse er aktivert, kan den brukes på systemet.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Utvidelsens data er i ferd med å bli slettet. Ikke forlat eller oppdater denne siden før dette er fullført.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Utvidelsen er i ferd med å bli deaktivert. Ikke forlat eller oppdater denne siden før dette er fullført.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Utvidelsen er i ferd med å bli aktivert. Ikke forlat eller oppdater denne siden før dette er fullført.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Utvidelsens data ble slettet',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Utvidelsen ble deaktivert',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Utvidelsen ble aktivert',

	'EXTENSION_NAME'			=> 'Navn på utvidelse',
	'EXTENSION_ACTIONS'			=> 'Handlinger',
	'EXTENSION_OPTIONS'			=> 'Alternativer',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Oppdatere en utvidelse',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Deaktiver utvidelsen</li>
			<li>Slett utvidelsens filer fra filsystemet</li>
			<li>Last opp de nye filene</li>
			<li>Aktiver utvidelsen</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Fjerne en utvidelse fullstendig fra systemet',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Deaktiver utvidelsen</li>
			<li>Slett utvidelsens data</li>
			<li>Slett utvidelsens filer fra filsystemet</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Er du sikker på at du vil slette dataene som er tilknyttet «%s»?<br /><br />Dette vil fjerne alle tilhørende data og innstillinger, og kan ikke omgjøres!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Er du sikker på at du vil deaktivere utvidelsen «%s»?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Er du sikker på at du vil aktivere utvidelsen «%s»?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Er du sikker på at du vil tvinge gjennom bruk av en ustabil versjon?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Gå tilbake til utvidelseslisten',

	'EXT_DETAILS'			=> 'Detaljer om utvidelse',
	'DISPLAY_NAME'			=> 'Visningsnavn',
	'CLEAN_NAME'			=> 'Rent navn',
	'TYPE'					=> 'Type',
	'DESCRIPTION'			=> 'Beskrivelse',
	'VERSION'				=> 'Versjon',
	'HOMEPAGE'				=> 'Hjemmeside',
	'PATH'					=> 'Filbane',
	'TIME'					=> 'Lanseringstidspunkt',
	'LICENSE'				=> 'Lisens',

	'REQUIREMENTS'			=> 'Krav',
	'PHPBB_VERSION'			=> 'phpBB-versjon',
	'PHP_VERSION'			=> 'PHP-versjon',
	'AUTHOR_INFORMATION'	=> 'Informasjon om forfatter',
	'AUTHOR_NAME'			=> 'Navn',
	'AUTHOR_EMAIL'			=> 'E-post',
	'AUTHOR_HOMEPAGE'		=> 'Hjemmeside',
	'AUTHOR_ROLE'			=> 'Rolle',

	'NOT_UP_TO_DATE'		=> '%s er ikke oppdatert',
	'UP_TO_DATE'			=> '%s er oppdatert',
	'ANNOUNCEMENT_TOPIC'	=> 'Lanseringskunngjøring',
	'DOWNLOAD_LATEST'		=> 'Last ned versjon',
	'NO_VERSIONCHECK'		=> 'Ingen informasjon for versjonssjekk er angitt.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Sjekk alle versjoner på nytt',
	'FORCE_UNSTABLE'					=> 'Sjekk alltid for ustabile versjoner',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Versjonssjekkinnstillinger',

	'META_FIELD_NOT_SET'	=> 'Det påkrevde metafeltet %s er ikke angitt.',
	'META_FIELD_INVALID'	=> 'Metafeltet %s er ugyldig.',
));
