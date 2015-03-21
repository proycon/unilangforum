<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
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
	'PLUPLOAD_ADD_FILES'		=> 'Legg til filer',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Legg til filer i opplastingskøen og klikk på startknappen.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s finnes allerede i køen.',
	'PLUPLOAD_CLOSE'			=> 'Lukk',
	'PLUPLOAD_DRAG'				=> 'Dra filer hit.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Feil: Duplikatfil.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Du kan også legge ved filer ved å dra og slippe dem i meldingsboksen.',
	'PLUPLOAD_ERR_INPUT'		=> 'Feil ved åpning av inndatastrøm.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Feil ved flytting av opplastet fil.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Feil ved åpning av utdatastrøm.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Filen er for stor:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Feil ved filantall.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ugyldig filetternavn:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Ikke nok minne tilgjengelig ved kjøring.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Opplastings-URL er kanskje feil eller finnes ikke.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Feil ved filetternavn.',
	'PLUPLOAD_FILE'				=> 'Fil: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Fil: %s, størrelse: %d, maks. filstørrelse: %d',
	'PLUPLOAD_FILENAME'			=> 'Filnavn',
	'PLUPLOAD_FILES_QUEUED'		=> '%d filer i kø',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Generell feil.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP-feil.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Bildeformatet er enten feil eller støttes ikke.',
	'PLUPLOAD_INIT_ERROR'		=> 'Initialiseringsfeil.',
	'PLUPLOAD_IO_ERROR'			=> 'I/U-feil.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'I/T',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Sikkerhetsfeil.',
	'PLUPLOAD_SELECT_FILES'		=> 'Velg filer',
	'PLUPLOAD_SIZE'				=> 'Størrelse',
	'PLUPLOAD_SIZE_ERROR'		=> 'Feil ved filstørrelse.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Start opplasting',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start opplastingskø',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Stopp opplasting',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Stopp pågående opplasting',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Lastet opp %d/%d filer',
));
