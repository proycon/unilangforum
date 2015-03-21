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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Verimli bir önbellek olması için yapılandırma seçeneği değişikliklerinin çok sık olmasını isterseniz bu seçeneği ayarlayın.',
	'CLI_CONFIG_CURRENT'				=> 'Şu anki yapılandırma değeri, belirli boolean değerleri için 0 ve 1 kullanın',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '%s yapılandırması başarıyla silindi.',
	'CLI_CONFIG_NEW'					=> 'Yeni yapılandırma değeri, belirli boolean değerleri için 0 ve 1 kullanın',
	'CLI_CONFIG_NOT_EXISTS'				=> '%s yapılandırması mevcut değil',
	'CLI_CONFIG_OPTION_NAME'			=> 'Yapılandırma seçeneği’nin adı',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Eğer değer en sonda yeni bir satır olmadan yazdırılmış olması gerekiyorsa bu seçeneği ayarlayın.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Arttırılacak miktar',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '%s yapılandırması başarıyla arttırıldı',
	'CLI_CONFIG_SET_FAILURE'			=> '%s yapılandırması ayarlanamamıyor',
	'CLI_CONFIG_SET_SUCCESS'			=> '%s yapılandırması başarıyla ayarlandı',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Hazır ve hazır olmayan kron işlerinin bir listesini yazdırır.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Tüm hazır kron görevlerini çalıştırır.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Çalıştırılacak görevin adı',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Taşınmaları uygulayarak veritabanını günceller.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Bir yapılandırma seçeneğini siler',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Belirtilen eklentiyi devre dışı bırakır.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Belirtilen eklentiyi etkinleştirir.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Bağlı olmayan taşınmaları bulur.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Bir yapılandırma seçeneğinin değerini alır',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Bir yapılandırma seçeneğinin değerini arttırır',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Dosya sistemi üzerinde ve veritabanı içerisindeki tüm eklentileri listeler.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Güvenli Mod’da çalıştır (eklentiler olmadan).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Shell’i başlat.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Belirtilen eklentiyi temizler.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Kullanıcı tablosunun user_email_hash sütununu yeniden hesaplar.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Eğer sadece eski eşleşen değer geçerliyse bir yapılandırma seçeneğinin değerini ayarlar',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Bir yapılandırma seçeneğinin değerini ayarlar',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '%s eklentisi devre dışı bırakılamadı',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '%s eklentisi başarıyla devre dışı bırakıldı',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '%s eklentisi etkinleştirilemedi',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '%s eklentisi başarıyla etkinleştirildi',
	'CLI_EXTENSION_NAME'				=> 'Eklentinin adı',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '%s eklentisi temizlenemedi',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '%s eklentisi başarıyla temizlendi',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Hiç bir eklenti bulunamadı.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Mevcut',
	'CLI_EXTENSIONS_DISABLED'			=> 'Devre dışı bırakıldı',
	'CLI_EXTENSIONS_ENABLED'			=> 'Etkinleştirildi',	

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Tüm e-posta hashleri başarıyla yeniden hesaplandı.',
));
