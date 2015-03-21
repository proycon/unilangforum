<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: cli.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Vælg denne mulighed hvis konfigurationen ændres så ofte at den ikke bliver korrekt cached.',
	'CLI_CONFIG_CURRENT'				=> 'Nuværende konfigurationsværdi, brug 0 og 1 til at specificere boolean værdier',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigurationen %s blev slettet.',
	'CLI_CONFIG_NEW'					=> 'Ny konfigurationsværdi, brug 0 og 1 til at specificere boolean værdier',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurationen %s eksisterer ikke',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfigurationmulighedens navn',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Anvend denne option hvis værdien skal printes uden ny linie ved afslutningen.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Værdi optælling øges med',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Optælling af konfigurationen %s blev gennemført',
	'CLI_CONFIG_SET_FAILURE'			=> 'Kunne ikke indstille konfigurationen %s',

	'CLI_CONFIG_SET_SUCCESS'			=> 'Successfully set config %s',
	'CLI_DESCRIPTION_CRON_LIST'				=> 'Print parate og ikke parate cron-opgaver.',
	'CLI_DESCRIPTION_CRON_RUN'				=> 'Afvikler alle definerede cron-opgaver.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'	=> 'Navnet på den opgave der skal afvikles',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Databasen opdateres ved at tilføre migrationer.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Sletter en konfigurationmulighed',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Deaktiverer anførte udvidelser.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiverer anførte udvidelser.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Finder migrationer som ikke er afhængig af.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Finder en konfigurationmuligheds værdi',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Foretag optælling af en konfigurationmuligheds værdi',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Viser alle udvidelser i databasen og filsystemet.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'		=> 'Afvikler i Safe Mode (uden udvidelser).',
	'CLI_DESCRIPTION_OPTION_SHELL'			=> 'Start kommandofortolker.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Tømmer den angivne udvidelse.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Genberegner kolonnen user_email_hash i tabellen users.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Indstiller kun værdien på en konfigurationmulighed hvis den tidligere værdi svarer til den nuværende',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Indstiller værdien på en konfigurationmulighed',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Udvidelsen %s kunne ikke deaktiveres',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Udvidelsen %s blev deaktiveret',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Udvidelsen %s kunne ikke aktiveres',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Udvidelsen %s blev aktiveret',
	'CLI_EXTENSION_NAME'				=> 'Udvidelsens navn',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Udvidelsen %s kunne ikke slettes',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Udvidelsen %s blev slettet',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ingen udvidelser fundet.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tilgængelig',
	'CLI_EXTENSIONS_DISABLED'			=> 'Deaktiveret',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiveret',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Genberegning af alle email-hashes gennemført.',
));
