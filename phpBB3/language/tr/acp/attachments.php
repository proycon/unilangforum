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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Buradan dosya ekleri ve ilişkili özel kategoriler için başlıca ayarları düzenleyebilirsiniz.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Buradan uzantı grupları ekleyebilir, silebilir ve düzenleyebilirsiniz, yine Uzantı Gruplarını kaldırabilir onları özel kategorilere ayırabilirsiniz, indirme mekanizmasını değiştirebilir ve dosya eklerinin önünde gösterilecek olan gruba ait yükleme simgesini tanımlayabilirsiniz.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Buradan izin verdiğiniz uzantıları yönetebilirsiniz. Uzantılarınızı etkinleştirmek için, lütfen uzantı grupları yönetim paneline bakınız. Script uzantılarına (<code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> v.b. gibi…) kesinlikle izin vermemenizi öneriyoruz.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'        => 'Buradan boşta kalan dosyaları görebilirsiniz. Bu, genellikle kullanıcıların dosya eklediklerinde fakat mesaj göndermediklerinde meydana gelir. Bu dosyaları silebilir ya da onların var olan mesajlarına ekleyebilirsiniz. Mesajlara eklemek için geçerli bir mesaj ID numarası gereklidir, bu ID numarasını kendiniz belirlemelisiniz. Bu durum girdiğiniz mesaja daha önceden yüklenmiş dosya ekini atayacaktır.',
	'ADD_EXTENSION'						=> 'Uzantı ekle',
	'ADD_EXTENSION_GROUP'				=> 'Uzantı grubu ekle',
	'ADMIN_UPLOAD_ERROR'				=> 'Dosya eklemeyi denerken hatalar oluştu: “%s”.',
	'ALLOWED_FORUMS'					=> 'İzin verilen forumlar',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Seçilen (ya da eğer tümü seçiliyse) forumlarda tanımlanan uzantılar ile mesaj gönderilebilir.',
	'ALLOWED_IN_PM_POST'        => 'İzinli',
	'ALLOW_ATTACHMENTS'					=> 'Dosya eklerine izin ver',
	'ALLOW_ALL_FORUMS'					=> 'Tüm forumlara izin ver',
	'ALLOW_IN_PM'						=> 'Özel mesajlaşmaya izin verildi.',
	'ALLOW_PM_ATTACHMENTS'				=> 'Özel mesajlarda dosya eklerine izin ver',
	'ALLOW_SELECTED_FORUMS'				=> 'Sadece aşağıda seçilmiş forumlar',
	'ASSIGNED_EXTENSIONS'				=> 'Tanımlanmış uzantılar',
	'ASSIGNED_GROUP'					=> 'Tanımlanmış gruplar',
	'ATTACH_EXTENSIONS_URL'				=> 'Uzantılar',
	'ATTACH_EXT_GROUPS_URL'				=> 'Uzantı grupları',
	'ATTACH_ID'                => 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'En yüksek dosya boyutu',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Her bir dosyanın en yüksek boyutu. Eğer bu değer 0 olursa, gönderilebilir dosya boyutu sadece PHP ayarlarınız tarafından sınırlanır.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Mesajlaşmada en yüksek dosya boyutu',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'   => 'Bir özel mesaj dosya ekinde her bir dosyanın en yüksek boyutu, 0 ile sınırsız olur.',
	'ATTACH_ORPHAN_URL'					=> 'Boşta kalan dosya ekleri',
	'ATTACH_POST_ID'					=> 'Mesaj ID',
	'ATTACH_POST_TYPE'					=> 'Mesaj türü',	
	'ATTACH_QUOTA'						=> 'Toplam dosya eki kotası',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Mesaj panosunun tümü için dosya eklerine ayrılan en fazla sürücü alanı, sınırsız olması için 0 yazın.',
	'ATTACH_TO_POST'					=> 'Mesaja dosya ekle',

	'CAT_FLASH_FILES'			=> 'Flash dosyaları',
	'CAT_IMAGES'				=> 'Resimler',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime ortam dosyaları',
	'CAT_RM_FILES'				=> 'Real Media ortam dosyaları',
	'CAT_WM_FILES'				=> 'Windows Media ortam dosyaları',
	'CHECK_CONTENT'            => 'Dosya eklerini kontrol et',
	'CHECK_CONTENT_EXPLAIN'      => 'Bazı tarayıcılar yüklenen dosyalar için geçersiz bir dosya tipi (mimetype) varsayarak aldatabilirler. Bu seçenek kabul edilmeyen bunun gibi olası dosyalardan emin olmanızı sağlar.',
	'CREATE_GROUP'				=> 'Yeni grup oluştur',
	'CREATE_THUMBNAIL'			=> 'Resim önizlemesi oluştur',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Olası tüm durumlarda bir resim önizlemesi oluşturur.',

	'DEFINE_ALLOWED_IPS'			=> 'İzin verilen IP/Sunucu isimlerini tanımla',
	'DEFINE_DISALLOWED_IPS'			=> 'Yasaklanan IP/Sunucu isimlerini tanımla.',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Farklı IP/Sunucu isimlerini açıkça belirtmek için herbirini bir satıra yazın. Sınıflandırılmış bir IP adresini açıkça belirtmek için başlangıç ve bitişleri kısa çizgi (-) ile ayırın, joker olarak belirtmek için “*” işaretini kullanın.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Mouse ve klavye kombinasyonu kullanarak tarayıcınız ve bilgisayarınız yardımıyla daha fazla IP adresi seçebilirsiniz. Dahil edilmeyen IP adresleri mavi bir arkaplan rengine sahip olacaktır.',
	'DISPLAY_INLINED'				=> 'Resimleri sıralı göster.',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Resim dosya ekleri hayır olarak ayarlanırsa, bir bağlantı şeklinde gözükecektir.',
	'DISPLAY_ORDER'					=> 'Dosya eki görüntüleme sırası',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Dosya eklerini zamana göre sıralayarak göster.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Uzantı grubunu düzenle.',
	'EXCLUDE_ENTERED_IP'			=> 'Aktif yaptığınızda girilen IP/Sunucu isimleri bu işleme dahil olmayacaktır.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'İzin verilmiş IP/Sunucu isimlerini diğer IP adreslerinden ayırın',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'İzin verilmemiş IP/Sunucu isimlerini diğer IP adreslerinden ayırın',
	'EXTENSIONS_UPDATED'			=> 'Uzantılar başarıyla güncellendi.',
	'EXTENSION_EXIST'				=> '%s adlı uzantı zaten var.',
	'EXTENSION_GROUP'				=> 'Uzantı grubu',
	'EXTENSION_GROUPS'				=> 'Uzantı grupları',
	'EXTENSION_GROUP_DELETED'		=> 'Uzantı grubu başarıyla silindi',
	'EXTENSION_GROUP_EXIST'			=> '%s adlı uzantı grubu zaten var.',

	'EXT_GROUP_ARCHIVES'         => 'Arşivler',
	'EXT_GROUP_DOCUMENTS'         => 'Belgeler',
	'EXT_GROUP_DOWNLOADABLE_FILES'   => 'İndirilebilir Dosyalar',
	'EXT_GROUP_FLASH_FILES'         => 'Flash Dosyaları',
	'EXT_GROUP_IMAGES'            => 'Resimler',
	'EXT_GROUP_PLAIN_TEXT'         => 'Düz Metin',
	'EXT_GROUP_QUICKTIME_MEDIA'      => 'Quicktime Ortam Dosyaları',
	'EXT_GROUP_REAL_MEDIA'         => 'Real Media Ortam Dosyaları',
	'EXT_GROUP_WINDOWS_MEDIA'      => 'Windows Media Ortam Dosyaları',
 
	'FILES_GONE'			=> 'Silmek için seçtiğiniz dosya eklerinin bazıları mevcut değil. Bunlar daha önce zaten silinmiş olabilir. Mevcut olan dosya ekleri ise silindi.',
	'FILES_STATS_WRONG'		=> 'Dosya istatistiklerinizde büyük olasılıkla yanlışlık var ve yeniden senkronize edilmeleri gerekiyor. Güncel değerler: dosya eklerinin sayısı = %1$d, dosya eklerinin toplam boyutu = %2$s.<br />Bunları yeniden senkronize etmek için %3$sburaya%4$s tıklayın.',

	'GO_TO_EXTENSIONS'		=> 'Uzantı yönetim paneline git',
	'GROUP_NAME'			=> 'Grup adı',

	'IMAGE_LINK_SIZE'			=> 'Resim bağlantısı boyutları',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Resim dosya eki belirtilen miktardan büyükse satır içinde bir metin bağlantısı olarak gösterilecektir. Bu eylemi kapatmak için, değeri 0 piksel - 0 piksel olarak ayarlayın.',
	'IMAGICK_PATH'				=> 'Imagemagick yolu',
	'IMAGICK_PATH_EXPLAIN'		=> 'Imagemagick dönüştürme uygulamasının tam yolu, örnek <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Her bir mesajdaki en fazla dosya eki sayısı',
	'MAX_ATTACHMENTS_PM'			=> 'Her bir özel mesajdaki en fazla dosya eki sayısı',
	'MAX_EXTGROUP_FILESIZE'			=> 'En yüksek dosya boyutu',
	'MAX_IMAGE_SIZE'				=> 'En yüksek resim boyutları',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Resim dosya eklerinin en yüksek boyutu. Boyut kontrolünü kapatmak için her iki değeri 0piksel - 0piksel olarak ayarlayın.',
	'MAX_THUMB_WIDTH'				=> 'En yüksek resim önizlemesi genişliği (piksel cinsinden)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Oluşturulan resim önizlemesi burada ayarlanan genişlikten yüksek olmayacaktır.',
	'MIN_THUMB_FILESIZE'			=> 'En düşük resim önizlemesi dosya boyutu',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Bu miktardan küçük resimler için resim önizlemesi oluşturulmayacaktır.',
	'MODE_INLINE'					=> 'Sıralı',
	'MODE_PHYSICAL'					=> 'Fiziksel',

	'NOT_ALLOWED_IN_PM'			=> 'Sadece mesajlarda izinli',
	'NOT_ALLOWED_IN_PM_POST'    => 'İzinli değil',
	'NOT_ASSIGNED'				=> 'Tanımlanmadı',
	'NO_ATTACHMENTS'			=> 'Bu dönem için hiç bir dosya eki bulunamadı.',	
	'NO_EXT_GROUP'				=> 'Yok',
	'NO_EXT_GROUP_NAME'			=> 'Grup ismi girilmedi',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Belirli bir uzantı grubu yok',
	'NO_FILE_CAT'				=> 'Yok',
	'NO_IMAGE'					=> 'Resim yok',
	'NO_THUMBNAIL_SUPPORT'		=> 'Resim önizleme desteği kapatıldı. Doğru şekilde çalışması için GD uzantısı mevcut olmalı ya da imagemagick kurulmuş olmalıdır. Her ikisi de bulunamadı.',
	'NO_UPLOAD_DIR'				=> 'Belirlediğiniz yükleme klasörü yok.',
	'NO_WRITE_UPLOAD'			=> 'Belirlediğiniz yükleme klasörü üzerine yazılamıyor. Lütfen sunucunuza, ftp yoluyla bağlanarak yazma iznini dosyaya veriniz.',

	'ONLY_ALLOWED_IN_PM'	=> 'Sadece özel mesajlarda izinli',
	'ORDER_ALLOW_DENY'		=> 'İzin ver',
	'ORDER_DENY_ALLOW'		=> 'Reddet',

	'REMOVE_ALLOWED_IPS'			=> '<em>İzin verilen</em> IP/sunucu adlarını kaldır ya da hariç tutulanlardan çıkar',
	'REMOVE_DISALLOWED_IPS'			=> '<em>İzin verilmeyen</em> IP/sunucu adlarını kaldır ya da hariç tutulanlardan çıkar',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Dosya istatistiklerini yeniden senkronize etmek istediğinize emin misiniz?',

	'SEARCH_IMAGICK'				=> 'Imagemagick için ara',
	'SECURE_ALLOW_DENY'				=> 'İzinli/Yasaklı listesi',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Güvenli indirmeler açık olduğu zaman İzinli/Yasaklı listesinde bir <strong>beyaz liste</strong> (İzinli) veya bir <strong>kara liste</strong> (Yasaklı) için varsayılan eylemi değiştirin.',
	'SECURE_DOWNLOADS'				=> 'Güvenli indirmeye izin ver',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Bu özellik açıldığında, indirme işlemleri belirlediğiniz IP/Sunucu isimleri ile sınırlı olacaktır.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Güvenli indirme işlemi aktif değil. Güvenli indirme işlemleri aşağıdaki ayarları aktif yaptığınızda uygulanabilecektir.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP listesi başarıyla güncellendi',
	'SECURE_EMPTY_REFERRER'			=> 'Boş referansa izin ver',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Güvenli indirme işlemleri referanslar üzerine kurulmuştur. İndirme işleminde bu referanslara izin vermek istiyor musunuz?',
	'SETTINGS_CAT_IMAGES'			=> 'Resim kategori ayarları',
	'SPECIAL_CATEGORY'				=> 'Özel kategori',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Özel kategoriler cevaplar içinde gösterilmiş yollardan farklıdır.',
	'SUCCESSFULLY_UPLOADED'			=> 'Başarıyla yüklendi.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Uzantı grubu başarıyla eklendi.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Uzantı grubu başarıyla güncellendi.',

	'UPLOADING_FILES'				=> 'Yüklenen dosyalar',
	'UPLOADING_FILE_TO'				=> '%2$d numaralı mesaja “%1$s” dosyası yükleniyor…',
	'UPLOAD_DENIED_FORUM'			=> 'Foruma dosya yükleme izniniz yok “%s”.',
	'UPLOAD_DIR'					=> 'Yükleme klasörü',
	'UPLOAD_DIR_EXPLAIN'			=> 'Dosya ekleri için depolama yolu. Not: Eğer bu klasörü değiştirecekseniz, daha önceden sahip olduğunuz yüklenmiş dosya eklerini yeni konumlarına elle kopyalamalısınız.',
	'UPLOAD_ICON'					=> 'Yükleme resmi',
	'UPLOAD_NOT_DIR'				=> 'Belirtmiş olduğunuz yükleme konumu bir klasör gibi görünmüyor.',
));
