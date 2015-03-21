<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-05-30 - GunChleoc http://www.foramnagaidhlig.net is akerbeltz http://www.akerbeltz.org
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
	'PLUPLOAD_ADD_FILES'		=> 'Cuir faidhlichean ris',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Cuir faidhlichean ri ciutha an luchdaidh suas agus briog air a’ phutan tòiseachaidh.',
	'PLUPLOAD_ALREADY_QUEUED'	=> 'Tha %s sa chiutha mar-thà.',
	'PLUPLOAD_CLOSE'			=> 'Dùin',
	'PLUPLOAD_DRAG'				=> 'Slaod faidhlichean an-seo.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Mearachd le faidhle dùbailte.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> '’S urrainn dhut faidhlichean a shlaodadh ’ s a leigeil às ann am bogsa na teachdaireachd cuideachd gus an cur ris ’nan ceanglachan.',
	'PLUPLOAD_ERR_INPUT'		=> 'Dh’fhàillig le fosgladh sruth an ion-chuir.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Dh’fhàillig le gluasad an fhaidhle air a luchdadh suas.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Dh’fhàillig le fosgladh sruth an às-chuir.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Tha am faidhle ro mhòr:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Mearachd le cunntadh fhaidhlichean.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Leudachan faidhle mì-dhligheach:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Dh’fhalbh an cuimhne air a’ runtime.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Dh’fhaoidte gu bheil URL an luchdaidh suas cearr no nach eil e ann.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Mearachd le leudachan an fhaidhle.',
	'PLUPLOAD_FILE'				=> 'Faidhle: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Faidhle: %s, meud: %d, meud as motha aig faidhle: %d',
	'PLUPLOAD_FILENAME'			=> 'Ainm an fhaidhle',
	'PLUPLOAD_FILES_QUEUED'		=> '%d faidhlichean air a’ chiutha',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Mearachd choitcheann.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Mearachd HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Cha eil fòrmat an deilbh mar gu chòir no cha chur sinn taic ris.',
	'PLUPLOAD_INIT_ERROR'		=> 'Mearachd an tòiseachaidh.',
	'PLUPLOAD_IO_ERROR'			=> 'Mearachd IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Chan eil seo iomchaidh',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Mearachd tèarainteachd.',
	'PLUPLOAD_SELECT_FILES'		=> 'Tagh faidhlichean',
	'PLUPLOAD_SIZE'				=> 'Meud',
	'PLUPLOAD_SIZE_ERROR'		=> 'mearachd le meud an fhaidhle.',
	'PLUPLOAD_STATUS'			=> 'Staid',
	'PLUPLOAD_START_UPLOAD'		=> 'Tòisich air an luchdadh suas',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Tòisich air an ciutha a luchdadh suas',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Sguir dhen luchdadh suas',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Sguir dhen luchdadh làithreach',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Chaidh %d/%d faidhlichean a luchdadh suas',
));
