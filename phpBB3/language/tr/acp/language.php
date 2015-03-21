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
	'ACP_FILES'						=> 'Yönetici dil dosyaları',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Buradan dil paketlerini yükleme/kaldırma işlemlerini yapabilirsiniz. Varsayılan dil paketi yıldız işareti (*) ile belirtilmiştir.',

	'DELETE_LANGUAGE_CONFIRM'		=> '“%s” dilini silmek istediğinize emin misiniz?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Kurulmuş dil paketleri',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Dil detayları başarıyla güncellendi',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Bu dil paketi zaten yüklü.',
	'LANGUAGE_PACK_DELETED'				=> '“%s” dil paketi başarıyla kaldırıldı. Bu dili kullanan tüm kullanıcıların dil seçeneği, mesaj panosunun varsayılan dili olarak ayarlandı.',
	'LANGUAGE_PACK_DETAILS'				=> 'Dil paketi detayları',
	'LANGUAGE_PACK_INSTALLED'			=> '“%s” dil paketi başarıyla kuruldu.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Özel profil alanlarının dil dizeleri varsayılan dilden kopyalandı. Eğer gerekliyse lütfen onları değiştirin.',	
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Yerel adı',
	'LANGUAGE_PACK_NAME'				=> 'Ad',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Seçilen dil paketi mevcut değil.',
	'LANGUAGE_PACK_USED_BY'				=> 'Kullananlar (robotlar dahil)',
	'LANGUAGE_VARIABLE'					=> 'Dil değişkenleri',
	'LANG_AUTHOR'						=> 'Dil paketi yapımcısı',
	'LANG_ENGLISH_NAME'					=> 'İngilizce adı',
	'LANG_ISO_CODE'						=> 'ISO kodu',
	'LANG_LOCAL_NAME'					=> 'Yerel adı',

	'MISSING_LANG_FILES'		=> 'Kayıp dil dosyaları',
	'MISSING_LANG_VARIABLES'	=> 'Kayıp dil değişkenleri',

	'NO_FILE_SELECTED'				=> 'Belirlenmiş bir dil dosyasına sahip değilsiniz.',
	'NO_LANG_ID'					=> 'Belirlenmiş bir dil paketiniz yok',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Varsayılan dil paketini kaldıramazsınız.<br />Bu dil paketini kaldırmak istiyorsanız, ilk önce mesaj panonuzun varsayılan dilini değiştirin.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Kaldırılmış dil paketleri yok',

	'THOSE_MISSING_LANG_FILES'			=> '“%s” dil klasöründe olması gereken alttaki dil dosyaları eksik',
	'THOSE_MISSING_LANG_VARIABLES'		=> '“%s” dil paketinde olması gereken alttaki dil değişkenleri eksik',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Kaldırılmış dil paketleri',
));
