<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: database.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'ACP_BACKUP_EXPLAIN'	=> 'Her kan du foretage backup af din phpBB-database. Du kan gemme den dannede backup i <samp>store/</samp>-mappen på serveren eller downloade den direkte. Afhængig af din serverkonfiguration vil du være i stand til at pakke filen med forskellige komprimeringsværktøjer.',
	'ACP_RESTORE_EXPLAIN'	=> 'Dette vil udføre en fuld gendannelse af alle phpBB-tabeller fra en gemt fil. Hvis din server understøtter det, kan du bruge en gzip eller bzip2-komprimeret tekstfil, den bliver automatisk udpakket. <strong>ADVARSEL</strong> Alle eksisterende data bliver overskrevet. Gendannelsen kan tage lang tid at gennemføre, forlad venligst ikke denne side før gendannelsen er fuldført. Backupfilerne gemmes i <samp>store/</samp>-mappen og forventes at være dannet med phpBB\'s indbyggede backupsystem. Ved forsøg på at gendanne databasen fra en backupfil der ikke er dannet med det interne backupsystem, kan du ikke være sikker på at gendannelsen bliver fuldført med succes.',

	'BACKUP_DELETE'		=> 'Backupfilen blev slettet.',
	'BACKUP_INVALID'	=> 'Den valgte fil for backup er ugyldig',
	'BACKUP_OPTIONS'	=> 'Valgmuligheder for backup',
	'BACKUP_SUCCESS'	=> 'Dannelsen af backupfilen lykkedes med den placering du angav.',
	'BACKUP_TYPE'		=> 'Backuptype',

	'DATABASE' => 'Databaseværktøjer',
	'DATA_ONLY'			=> 'Data alene',
	'DELETE_BACKUP'			=> 'Slet backup',
	'DELETE_SELECTED_BACKUP'	=> 'Er du sikker på at du ønsker at slette den valgte backup?',
	'DESELECT_ALL'		=> 'Fravælg alle',
	'DOWNLOAD_BACKUP'		=> 'Download backup',
	
	'FILE_TYPE'			=> 'Filtype',
	'FILE_WRITE_FAIL'	=> 'Der kan ikke skrives til store-mappen.',
	'FULL_BACKUP'		=> 'Fuld',
	
	'RESTORE_FAILURE'	=> 'Backupfilen kan være ødelagt.',
	'RESTORE_OPTIONS'		=> 'Valgmuligheder for gendannelse',
	'RESTORE_SELECTED_BACKUP'  => 'Er du sikker på at du ønsker at gendanne den valgte backup?',
	'RESTORE_SUCCESS'		=> 'Gendannelsen af databasen lykkedes.<br /><br />Dit board skulle være tilbage i den stand det var i da backup\'en blev taget.',

	'SELECT_ALL'	=> 'Vælg alle',
	'SELECT_FILE'			=> 'Vælg en fil',
	'START_BACKUP'		=> 'Start backup',
	'START_RESTORE'			=> 'Start gendannelse',
	'STORE_AND_DOWNLOAD'	=> 'Gem og download',
	'STORE_LOCAL'		=> 'Gem fil på server',
	'STRUCTURE_ONLY'	=> 'Struktur alene',

	'TABLE_SELECT'		=> 'Tabelvalg',
	'TABLE_SELECT_ERROR'=> 'Du skal vælge mindst en tabel.',
));
