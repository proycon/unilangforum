<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'CONFIG_NOT_EXIST'					=> '"%s" yapılandırma ayarı beklenmedik bir şekilde mevcut değil.',

	'GROUP_NOT_EXIST'					=> '"%s" grubu beklenmedik bir şekilde mevcut değil.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> '%s bağımlılıkları uygula.',
	'MIGRATION_DATA_DONE'				=> 'Yüklenen Veri: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Veri Yükleniyor: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_DATA_RUNNING'			=> 'Veri Yükleniyor: %s.',	
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migrasyon zaten etkin bir şekilde yüklendi (atlandı): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'İstek sırasında bazı şeyler ters gitti ve bir istisna atıldı. Güçlü yeteneklerimiz sayesinde hata oluşmadan önce yapılan değişiklikler geri alındı, ancak yine de mesaj panosunu hatalar için kontrol etmelisiniz.',
	'MIGRATION_NOT_FULFILLABLE'			=> '"%1$s" migrasyonu yerine getirilebilir değil, kayıp migrasyon "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s geçerli bir migrasyon değil.',	
	'MIGRATION_SCHEMA_DONE'				=> 'Yüklenen Şema: %1$s; Zaman: %2$.2f saniye',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Şema Yükleniyor: %s.',	

	'MODULE_ERROR'						=> 'Bir modül oluşturulurken bir hata oluştu: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Gereken bir modül bilgi dosyası eksik: %2$s',
	'MODULE_NOT_EXIST'					=> 'Gereken bir modül mevcut değil: %s',

	'PERMISSION_NOT_EXIST'				=> '"%s" izin ayarı beklenmedik bir şekilde mevcut değil.',

	'ROLE_NOT_EXIST'					=> '"%s" izin rolü beklenmedik bir şekilde mevcut değil.',
));
