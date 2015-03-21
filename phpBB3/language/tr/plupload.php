<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'PLUPLOAD_ADD_FILES'		=> 'Dosyalar ekle',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Yükleme sırasına göre dosyalar ekleyin ve başla butonuna tıklayın.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s zaten sırada mevcut.',
	'PLUPLOAD_CLOSE'			=> 'Kapat',
	'PLUPLOAD_DRAG'				=> 'Dosyaları buraya sürükleyin.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Yinelenen dosya hatası.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Dosyaları mesaj kutusu içerisine sürükleyip bırakarak da ekleyebilirsiniz.',
	'PLUPLOAD_ERR_INPUT'		=> 'Girdi akışı açılamadı.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Yüklenen dosya taşınamadı.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Çıktı akışı açılamadı.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Dosya çok büyük:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Dosya sayım hatası.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Geçersiz dosya uzantısı:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Mevcut belleğin çalışma süresi sona erdi.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Yükleme URL adresi yanlış olabilir ya da mevcut değil.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Dosya uzantı hatası.',
	'PLUPLOAD_FILE'				=> 'Dosya: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Dosya: %s, boyut: %d, en yüksek dosya boyutu: %d',
	'PLUPLOAD_FILENAME'			=> 'Dosya adı',
	'PLUPLOAD_FILES_QUEUED'		=> '%d dosya sıraya alındı',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Genel hata.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP hatası.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Resim formatı hatalı ya da desteklenmiyor.',
	'PLUPLOAD_INIT_ERROR'		=> 'Birim hatası.',
	'PLUPLOAD_IO_ERROR'			=> 'IO hatası.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Uygulanabilir Değil',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Güvenlik hatası.',
	'PLUPLOAD_SELECT_FILES'		=> 'Dosya seç',
	'PLUPLOAD_SIZE'				=> 'Boyut',
	'PLUPLOAD_SIZE_ERROR'		=> 'Dosya boyutu hatası.',
	'PLUPLOAD_STATUS'			=> 'Durum',
	'PLUPLOAD_START_UPLOAD'		=> 'Yüklemeye başla',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Sıradan yüklemeye başla',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Yüklemeyi durdur',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Geçerli yüklemeyi durdur',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '%d/%d dosya yüklendi',
));
