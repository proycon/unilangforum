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
	'PLUPLOAD_ADD_FILES'		=> 'Lägg till filer',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Lägg till filer till uppladdningskön och klicka på startknappen.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s finns redan i kön.',
	'PLUPLOAD_CLOSE'			=> 'Stäng',
	'PLUPLOAD_DRAG'				=> 'Dra filer hit.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Felmeddelande: Duplicerade filer.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Du kan också lägga till filer genom att dra och släppa dem i meddelanderutan.',
	'PLUPLOAD_ERR_INPUT'		=> 'Misslyckades med att öppna inputströmmen.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Misslyckades med att flytta uppladdade filer.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Misslyckades med att öppna outputströmmen.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Filen är för stor:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Felmeddelande: Antal filer stämmer inte.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ogiltig filändelse:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime fick slut på minne.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Uppladdnings-URL kanske är fel eller inte längre tillgänglig.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Felmeddelande: Felaktig filändelse.',
	'PLUPLOAD_FILE'				=> 'Fil: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Fil: %s, storlek: %d, max filstorlek: %d',
	'PLUPLOAD_FILENAME'			=> 'Filnamn',
	'PLUPLOAD_FILES_QUEUED'		=> '%d filer är köade',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Genericfelmeddelande.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTPfelmeddelande.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Filformat är antingen fel eller inte giltigt.',
	'PLUPLOAD_INIT_ERROR'		=> 'Initfelmeddelande.',
	'PLUPLOAD_IO_ERROR'			=> 'IOfelmeddelande.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Säkerhetsfel.',
	'PLUPLOAD_SELECT_FILES'		=> 'Välj filer',
	'PLUPLOAD_SIZE'				=> 'Storlek',
	'PLUPLOAD_SIZE_ERROR'		=> 'Filstorleksfel.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Börja uppladdning',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Börja uppladdningskön',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Avbryt uppladdning',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Avbryt pågående uppladdning',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Laddade upp %d/%d filer',
));
