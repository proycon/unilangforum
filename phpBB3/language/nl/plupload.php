<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES'		=> 'Bestanden toevoegen',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Bestanden toevoegen aan de wachtrij en klik op de startknop.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s staat al in de wachtrij.',
	'PLUPLOAD_CLOSE'			=> 'Sluit',
	'PLUPLOAD_DRAG'				=> 'Sleep bestanden hierheen.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Dubbele bestandsfout.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Je kan ook bestanden toevoegen door ze naar het tekstvak te slepen.',
	'PLUPLOAD_ERR_INPUT'		=> 'Mislukt om input stream te openen.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Mislukt om geüploade bestand te verplaatsen.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Mislukt om output stream te openen.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Bestand is te groot:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Bestandsteller fout.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ongeldig bestandsextensie:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime heeft geen geheugen meer over.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Upload URL kan verkeerd zijn of bestaat niet.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Bestandsextensie fout.',
	'PLUPLOAD_FILE'				=> 'Bestand: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Bestand: %s, grootte: %d, max bestandsgrootte: %d',
	'PLUPLOAD_FILENAME'			=> 'Bestandsnaam',
	'PLUPLOAD_FILES_QUEUED'		=> '%d bestanden in wachtrij',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Algemene fout.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP-fout.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Afbeeldingsformaat verkeerd of wordt niet ondersteund.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init fout.',
	'PLUPLOAD_IO_ERROR'			=> 'IO fout.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/B',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Beveiligingsfout.',
	'PLUPLOAD_SELECT_FILES'		=> 'Selecteer bestanden',
	'PLUPLOAD_SIZE'				=> 'Grootte',
	'PLUPLOAD_SIZE_ERROR'		=> 'Bestandsgrootte fout.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Start upload',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start wachtrij uploaden',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stop upload',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stop bestaande upload',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '%d/%d bestanden geüpload',
));
