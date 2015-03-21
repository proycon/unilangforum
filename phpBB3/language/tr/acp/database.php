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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Buradan tüm phpBB ile ilgili verileri yedekleyebilirsiniz. Veritabanını doğrudan bilgisayarınıza indirebilir ya da <samp>store/</samp> klasörünüze kaydederek arşivleyebilirsiniz. Sunucu yapılandırmanızın elverdiği ölçüde bu dosyaları çeşitli sıkıştırma biçimleriyle sıkıştırabilirsiniz.',
	'ACP_RESTORE_EXPLAIN'	=> 'Buradaki işlemle dosya içine kaydedilen phpBB tablolarının tam olarak geri yükleme işlemi gerçekleştirilir. Geri Yükleme işlemini iki şekilde yapabilirsiniz; buradaki form sayfası yoluyla yükleyebilir ya da manuel olarak sunucu üzerindeki yapı üzerinden yükleyebilirsiniz. Eğer sunucu sisteminiz izin verirse gzip veya bzip2 sıkıştırılmış yazı dosyaları otomatik olarak açılacaktır. <strong>DİKKAT</strong> Bu işlem var olan verilerin üzerine kayıt eder. Geri yükleme işlemi zaman alabilir, bu işlem bitene kadar sayfayı terk etmeyiniz. Yedekler <samp>store/</samp> klasörünün içerisine saklanacaktır ve phpBB’nin varsayılan yedekleme fonksiyonu tarafından oluşturulacaktır. Yedekler geri yüklenirken sistemin yapısı tarafından oluşturulmayabilir veya çalışmayabilir.',
	
	'BACKUP_DELETE'		=> 'Yedekleme dosyası başarıyla silindi',
	'BACKUP_INVALID'	=> 'Yedekleme için seçilen dosya geçersiz.',
	'BACKUP_OPTIONS'	=> 'Yedekleme ayarları',
	'BACKUP_SUCCESS'	=> 'Yedekleme dosyası başarıyla oluşturuldu',
	'BACKUP_TYPE'		=> 'Yedekleme tipi',
	
	'DATABASE' 			=> 'Veritabanı araçları',
	'DATA_ONLY'			=> 'Sadece veri',
	'DELETE_BACKUP'		=> 'Yedeği sil',
	'DELETE_SELECTED_BACKUP'	=> 'Seçilen yedeği silmek istediğinize emin misiniz?',
	'DESELECT_ALL'		=> 'Seçilenleri kaldır',
	'DOWNLOAD_BACKUP'	=> 'Yedeği indir',
	
	'FILE_TYPE'			=> 'Dosya tipi',
	'FILE_WRITE_FAIL'	=> 'Dosya depo klasörüne yazılamıyor.',
	'FULL_BACKUP'		=> 'Tam',
	
	'RESTORE_FAILURE'		=> 'Yedek dosyası bozulmuş olabilir.',
	'RESTORE_OPTIONS'		=> 'Geri yükleme seçenekleri',
	'RESTORE_SELECTED_BACKUP'	=> 'Seçilen yedeği geri yüklemek istediğinize emin misiniz?',	
	'RESTORE_SUCCESS'		=> 'Veritabanı başarıyla geri yüklendi.<br /><br />Mesaj panonuz yedekleme yaptığınız önceki durumuna getirilmiştir.',
	
	'SELECT_ALL'      => 'Tümünü seç',
	'SELECT_FILE'			=> 'Bir dosya seçin',
	'START_BACKUP'		=> 'Yedeklemeye başla',
	'START_RESTORE'			=> 'Geri yüklemeyi başlat',
	'STORE_AND_DOWNLOAD'	=> 'Depola ve indir',
	'STORE_LOCAL'		=> 'Dosyayı yerel olarak depola',
	'STRUCTURE_ONLY'	=> 'Sadece yapı',
	
	'TABLE_SELECT'		=> 'Tablo seçimi',
	'TABLE_SELECT_ERROR'	=> 'En az bir tablo seçmelisiniz.',
));
