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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Buradan bütün modül türlerini yönetebilirsiniz. Not: Yönetim Kontrol Paneli modülü üç seviyeli menü yapısına sahiptir (Kategori -> Kategori -> Modül) buna nazaran Kullanıcı Kontrol Paneli ve Moderatör Kontrol Paneli modülleri iki seviyeli menü yapısına sahiptir (Kategori -> Modül). Ayrıca, eğer modül yönetimi sayfasından sorumlu olan modülleri kapatırsanız ya da silerseniz bu sayfaya tekrar ulaşmanın zor olabileceğini lütfen unutmayın.',
	'ADD_MODULE'					=> 'Modül ekle',
	'ADD_MODULE_CONFIRM'			=> 'Belirttiğiniz şekil ile seçilen modülü eklemek istediğinizden emin misiniz?',
	'ADD_MODULE_TITLE'				=> 'Modül ekle',

	'CANNOT_REMOVE_MODULE'	=> 'Modül kaldırılamadı, çünkü bu modüle tanımlanmış başka alt modüller var. Lütfen bu işlemi yapmadan önce modüle bağlı tüm alt modülleri kaldırın ya da taşıyın.',
	'CATEGORY'				=> 'Kategori',
	'CHOOSE_MODE'			=> 'Modül şekli seç',
	'CHOOSE_MODE_EXPLAIN'	=> 'Kullanılacak modül şeklini seçin.',
	'CHOOSE_MODULE'			=> 'Modül seç',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Bu modül tarafından çağırılacak olan dosyayı seçin.',
	'CREATE_MODULE'			=> 'Yeni modül oluştur',

	'DEACTIVATED_MODULE'	=> 'Modül aktif edilmedi',
	'DELETE_MODULE'			=> 'Modülü sil',
	'DELETE_MODULE_CONFIRM'	=> 'Bu modülü kaldırmak istediğinizden emin misiniz?',

	'EDIT_MODULE'			=> 'Modülü düzenle',
	'EDIT_MODULE_EXPLAIN'	=> 'Buradan belirli modül ayarlarını girebilirsiniz.',

	'HIDDEN_MODULE'			=> 'Gizli modül',

	'MODULE'					=> 'Modül',
	'MODULE_ADDED'				=> 'Modül başarıyla eklendi',
	'MODULE_DELETED'			=> 'Modül başarıyla kaldırıldı',
	'MODULE_DISPLAYED'			=> 'Modül görüntülensin',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Bu modülün görüntülenmesini istemiyor fakat kullanmak istiyorsanız, burayı Hayır olarak ayarlayın.',
	'MODULE_EDITED'				=> 'Modül başarıyla düzenlendi',
	'MODULE_ENABLED'			=> 'Modül etkin',
	'MODULE_LANGNAME'			=> 'Modül dil adı',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Görüntülenecek modül adını girin. Eğer modül adını dil dosyasından alıyorsa uygun dil değişkeni kullanın.',
	'MODULE_TYPE'				=> 'Modül tipi',

	'NO_CATEGORY_TO_MODULE'	=> 'Modül kategoriye çevrilemedi. Bu işlemi gerçekleştirmeden önce lütfen tüm alt modülleri kaldırın/taşıyın.',
	'NO_MODULE'				=> 'Hiç bir modül bulunamadı',
	'NO_MODULE_ID'			=> 'Hiç bir modül id numarası belirlenmedi',
	'NO_MODULE_LANGNAME'	=> 'Hiç bir modül dil adı belirlenmedi',
	'NO_PARENT'				=> 'Üst modül yok',

	'PARENT'				=> 'Üst modül',
	'PARENT_NO_EXIST'		=> 'Üst modül mevcut değil',

	'SELECT_MODULE'			=> 'Bir modül seçin',
));
