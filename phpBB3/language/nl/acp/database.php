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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Hier kan je alle phpBB-gerelateerde gegevens back-uppen. Je mag het bestand opslaan in je <samp>store/</samp>-map, of direct downloaden. Afhankelijk van je serverconfiguratie, kan je het bestand in een aantal verschillende formaten comprimeren.',
	'ACP_RESTORE_EXPLAIN'	=> 'Dit zorgt ervoor dat alle phpBB-tabellen teruggezet worden vanuit een opgeslagen bestand. Indien je server dit ondersteunt, kan je een gzip of bzip2 ingepakt tekstbestand gebruiken. Deze zal vervolgens automatisch uitgepakt worden. <strong>WAARSCHUWING:</strong> Hierdoor worden alle bestaande gegevens overschreven. Het terugzetten kan veel tijd in beslag nemen. Verlaat deze pagina niet tot het proces volledig afgewerkt is. Back-ups worden opgeslagen in de <samp>store/</samp>-map en worden gegenereerd door phpBB’s back-up functionaliteit. Terugplaatsen van back-ups die niet door dit systeem zijn gemaakt, werken wellicht niet.',

	'BACKUP_DELETE'		=> 'Het back-up bestand is succesvol verwijderd.',
	'BACKUP_INVALID'	=> 'Het geselecteerde back-up bestand is ongeldig.',
	'BACKUP_OPTIONS'	=> 'Back-up instellingen',
	'BACKUP_SUCCESS'	=> 'Het back-up bestand is succesvol aangemaakt.',
	'BACKUP_TYPE'		=> 'Back-up type',

	'DATABASE'			=> 'Database hulpmiddelen',
	'DATA_ONLY'			=> 'Alleen data',
	'DELETE_BACKUP'		=> 'Verwijder back-up',
	'DELETE_SELECTED_BACKUP'	=> 'Weet je zeker dat je de geselecteerde back-up wilt verwijderen?',
	'DESELECT_ALL'		=> 'Deselecteer alles',
	'DOWNLOAD_BACKUP'	=> 'Bestand downloaden',

	'FILE_TYPE'			=> 'Bestandstype',
	'FILE_WRITE_FAIL'	=> 'Kan niet naar de opslag-map schrijven.',
	'FULL_BACKUP'		=> 'Volledig',

	'RESTORE_FAILURE'		=> 'Het back-up bestand is mogelijk beschadigd.',
	'RESTORE_OPTIONS'		=> 'Herstel instellingen',
	'RESTORE_SELECTED_BACKUP'	=> 'Weet je zeker dat je de geselecteerde back-up wilt herstellen?',
	'RESTORE_SUCCESS'		=> 'De database is succesvol teruggezet.<br /><br />Je forum zou nu weer exact hetzelfde moeten zijn als wanneer de back-up gemaakt is.',

	'SELECT_ALL'			=> 'Selecteer alles',
	'SELECT_FILE'			=> 'Selecteer een bestand',
	'START_BACKUP'			=> 'Start de back-up',
	'START_RESTORE'			=> 'Start het herstel',
	'STORE_AND_DOWNLOAD'	=> 'Bestand opslaan en downloaden',
	'STORE_LOCAL'			=> 'Bestand opslaan',
	'STRUCTURE_ONLY'		=> 'Alleen de structuur',

	'TABLE_SELECT'		=> 'Selecteer tabel',
	'TABLE_SELECT_ERROR'=> 'Je moet minimaal één tabel selecteren.',
));
