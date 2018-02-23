<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
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
	'PLUPLOAD_ADD_FILES'		=> 'Lisa failid',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Lisa failid üleslaadimise järjekorda, ning vajuta alusta nuppu.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s on juba järjekorras.',
	'PLUPLOAD_CLOSE'			=> 'Sulge',
	'PLUPLOAD_DRAG'				=> 'Lohista failid siia.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Viga: Samasugune fail.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Sa võid samuti lisada faile lohistades need kasti.',
	'PLUPLOAD_ERR_INPUT'		=> 'VIGA: Ei suutnud avada input stream.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Ei õnnestunud liigutada üleslaaditud faili.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'VIGA: Ei suutnud avada output stream.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Fail on liiga suur:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Faili loenduse viga.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Vigane faili laiend:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Käitusfaasi ajal sai vaba mälu otsa.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Üleslaadimise URL on kas vale või ei eksisteeri.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Faili laiendi viga.',
	'PLUPLOAD_FILE'				=> 'Fail: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Fail: %s, suurus: %d, maksimum faili suurus: %d',
	'PLUPLOAD_FILENAME'			=> 'Failinimi',
	'PLUPLOAD_FILES_QUEUED'		=> '%d faili järjekorras',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Üldviga.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP viga.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Pildiformaat on vale või pole toetatud.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init viga.',
	'PLUPLOAD_IO_ERROR'			=> 'IO viga.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Mittekohaldatav',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Turbeviga.',
	'PLUPLOAD_SELECT_FILES'		=> 'Vali failid',
	'PLUPLOAD_SIZE'				=> 'Suurus',
	'PLUPLOAD_SIZE_ERROR'		=> 'Faili suuruse viga.',
	'PLUPLOAD_STATUS'			=> 'Staatus',
	'PLUPLOAD_START_UPLOAD'		=> 'Alusta üleslaadimist',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Alusta üleslaadimist järjekorras',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Peata üleslaadimine',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Peate viimane üleslaadimine',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Üles laaditud %d/%d faili',
));
