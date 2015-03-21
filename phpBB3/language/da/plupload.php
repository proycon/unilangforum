<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: plupload.php 427 2014-06-26 19:33:26Z jan_skovsgaard $
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
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
	'PLUPLOAD_ADD_FILES'		=> 'Tilføj filer',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Tilføj filer til uploadkøen og klik på start.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s findes allerede i køen.',
	'PLUPLOAD_CLOSE'			=> 'Luk',
	'PLUPLOAD_DRAG'				=> 'Træk filer hertil.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Dubleret filfejl.',	
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Du har også mulighed for at vedhæfte filer ved at trække dem ind i tekstboksen og slippe.',
	'PLUPLOAD_ERR_INPUT'		=> 'Kunne ikke åbne input-stream.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Kunne ikke flytte uploadede fil.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Kunne ikke åbne output-stream.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Filen er for stor:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Filoptællingsfejl.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ugyldig filtype:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime løb tør for tilgængelig memory.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Upload-URL kan være forkert eller ikke-eksisterende.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Fejl i filtyper.',
	'PLUPLOAD_FILE'		=> 'Fil: %s',
	'PLUPLOAD_FILE_DETAILS'	=> 'File: %s, størrelse: %d, max filstørrelse: %d',
	'PLUPLOAD_FILENAME'			=> 'Filnavn',
	'PLUPLOAD_FILES_QUEUED'		=> '%d filer i kø',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Almen fejl.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP fejl.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Billedformatet er enten forkert eller ikke understøttet.',
	'PLUPLOAD_INIT_ERROR'		=> 'Opstartsfejl.',
	'PLUPLOAD_IO_ERROR'			=> 'IO fejl.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Sikkerhedsfejl.',
	'PLUPLOAD_SELECT_FILES'		=> 'Vælg filer',
	'PLUPLOAD_SIZE'				=> 'Størrelse',
	'PLUPLOAD_SIZE_ERROR'		=> 'Fejl i filstørrelse.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Start upload',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start upload af kø',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stop upload',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stop igangværende upload',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Uploadet %d/%d filer',
));
