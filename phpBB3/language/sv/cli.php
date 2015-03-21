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
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Ange det här alternativet om konfigurationsalternativ ändras alltför ofta för att kunna bli effektivt cachad.',
	'CLI_CONFIG_CURRENT'				=> 'Aktuella konfigurationsvärde, använd 0 och 1 för att ange booleska värden',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Lyckades ta bort konfigurationen %s.',
	'CLI_CONFIG_NEW'					=> 'Nytt konfigurationsvärde, använd 0 och 1 för att ange booleska värden',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Config %s finns inte',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfigurationsalternativets namn',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Ange det här alternativet om värdet ska skrivas ut utan en ny rad i slutet.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Belopp att öka med',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Lyckades öka config %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Det gick inte att ställa in config %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Lyckades ställa in config %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Skriver ut en lista med färdiga och icke-färdiga cron-jobb.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Kör alla färdiga cron-uppgifter.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Namn på den uppgift som skall köras',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uppdaterar databasen genom att tillämpa migreringar.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Tar bort ett konfigurationsalternativ',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Inaktiverar angivet tillägg.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Aktiverar angivet tillägg.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Hittar migrationer som forumet inte är beroende på.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Får ett konfigurationsalternativs värde',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Ökar ett konfigurationsalternativs värde',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Listar alla tillägg i databasen och i filsystemet.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Kör i felsäkert läge (utan tillägg).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Lansera skalet.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Rensar angivet tillägg.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Räknar om user_email_hash kolumnen i tabellen användare.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Ställer en konfigurationsalternativs värde endast om gamla matchar det aktuella värdet',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Ställer en konfigurationsalternativs värde',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Det gick inte att inaktivera tillägget %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Lyckades inaktivera tillägget %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Kunde inte aktivera tillägget %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Lyckades aktivera tillägget %s',
	'CLI_EXTENSION_NAME'				=> 'Namn på tillägget',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Kunde inte tömma tillägget %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Lyckades tömma tillägget %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Inga tillägg kunde hittas.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tillgänglig',
	'CLI_EXTENSIONS_DISABLED'			=> 'Inaktiverad',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktiverad',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Lyckades räkna om alla e-post hashes.',
));
