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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Buradan mesaj panonuzun ana işleyişini belirleyebilirsiniz, uygun bir isim ve açıklama verin, ve diğer ayarlar arasında zaman dilimi ile dil için varsayılan değerleri ayarlayın.',
	'BOARD_INDEX_TEXT'				=> 'Mesaj panosu ana sayfa metni',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'Buraya yazacağınız metin mesaj panosu dahilindeki menü belirteçlerinde mesaj panosunun ana sayfa adı olarak gösterilecektir. Eğer hiç bir metin yazmazsanız, varsayılan olarak “Forum ana sayfa” metni gösterilecektir.',	
	'BOARD_STYLE'					=> 'Mesaj panosu stili',	
	'CUSTOM_DATEFORMAT'				=> 'Özel…',
	'DEFAULT_DATE_FORMAT'			=> 'Tarih formatı',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Tarih formatı PHP <code>tarih</code> özelliği ile aynıdır.',
	'DEFAULT_LANGUAGE'				=> 'Varsayılan dil',
	'DEFAULT_STYLE'					=> 'Varsayılan stil',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Yeni kullanıcılar için varsayılan stil.',	
	'DISABLE_BOARD'					=> 'Mesaj panosunu kullanıcılara kapat',
	'DISABLE_BOARD_EXPLAIN'			=> 'Bu özellik, mesaj panosunu yönetici ya da moderatör olmayan tüm kullanıcılara kapatacaktır. Ayrıca kapatma nedeni olarak gösterilmesini istediğiniz kısa bir mesaj (en fazla 255 karakter) yazabilirsiniz.',
	'DISPLAY_LAST_SUBJECT'			=> 'Son eklenen mesajın başlığını forum listesinde göster',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Son eklenen mesajın başlığı mesaja doğrudan bir bağlantı ile forum listesinde gösterilecektir. Şifre korumalı ve kullanıcıların okuma yetkisi olmayan forumlardaki başlıklar gösterilmez.',
	'GUEST_STYLE'					=> 'Misafir stili',
	'GUEST_STYLE_EXPLAIN'			=> 'Misafirler için mesaj panosu stili.',	
	'OVERRIDE_STYLE'				=> 'Kullanıcı stilini gözardı et',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Kullanıcıların (ve misafirlerin) stillerini "Varsayılan stil" altında belirlenen stil ile değiştirir.',
	'SITE_DESC'						=> 'Mesaj panosu açıklaması',
	'SITE_HOME_TEXT'				=> 'Ana website metni',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'Bu metin mesaj panosu dahilindeki menü belirteçlerinde websitenizin ana sayfasına bir bağlantı olarak gösterilecektir. Eğer hiç bir metin belirtmezseniz, varsayılan olarak “Ana sayfa” metni gösterilecektir.',
	'SITE_HOME_URL'					=> 'Ana website URL adresi',
	'SITE_HOME_URL_EXPLAIN'			=> 'Eğer bir URL adresi yazarsanız, mesaj panonuz dahilindeki menü belirteçlerinin önünde bu URL adresine bir bağlantı eklenecektir. Ayrıca mesaj panosu logosuna tıklandığında forum ana sayfa yerine bu URL adresine yönlendirilecektir. Tam bir URL adresi belirtmeniz gereklidir, ör. <samp>http://www.phpbb.com</samp>.',	
	'SITE_NAME'						=> 'Mesaj panosu ismi',
	'SYSTEM_TIMEZONE'            => 'Misafir zaman dilimi',
	'SYSTEM_TIMEZONE_EXPLAIN'         => 'Giriş yapmayan kullanıcılara (misafirler, botlar) gösterilmek için kullanılacak zaman dilimi. Giriş yapan kullanıcılar kendi zaman dilimlerini kayıt esnasında ayarlayabilirler ve kendi kullanıcı kontrol panellerinden değiştirebilirler.',
	'WARNINGS_EXPIRE'				=> 'Uyarı süresi',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Bir kullanıcının kaydından bir uyarının otomatik olarak sona ermesi için geçecek gün sayısı. Uyarıları sürekli yapmak için bu değeri 0 olarak ayarlayın.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Bu bölümde mesaj panosunun bazı özelliklerini aktif ve pasif yapabilirsiniz.',

	'ALLOW_ATTACHMENTS'			=> 'Dosya eklerine izin ver',
 	'ALLOW_BIRTHDAYS'			=> 'Doğum günlerine izin ver',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Doğum günleri girilmesine ve profillerde yaş görüntülenmesine izin verir. Not: Mesaj panosu anasayfasındaki doğum günü listesi ayrı bir yüklü ayar tarafından kontrol edilir.',
	'ALLOW_BOOKMARKS'			=> 'Başlık yer imlerine izni ver',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Kullanıcılar başlıkları yer imlerine kaydedebilirler.',
	'ALLOW_BBCODE'				=> 'BBCode kullanımına izin ver',
	'ALLOW_FORUM_NOTIFY'		=> 'Forumlara aboneliğe izin ver',
	'ALLOW_NAME_CHANGE'			=> 'Kullanıcı adlarının değiştirilmesine izin ver',
	'ALLOW_NO_CENSORS'			=> 'Kelime sansürünün kapatılmasına izin ver',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Kullanıcılar, mesajların ve özel mesajların otomatik kelime sansürünü kapatabilirler.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Özel mesajlarda dosya eklerine izin ver',
	'ALLOW_PM_REPORT'			=> 'Kullanıcıların özel mesajları bildirmesine izin ver',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Eğer bu özellik aktifse, kullanıcılar aldıkları bir özel mesajı bildirme ya da mesaj panosu moderatörlerine gönderme seçeneğine sahip olurlar. Bu özel mesajlar Moderatör Kontrol Panelinden görülebilecektir.',
	'ALLOW_QUICK_REPLY'			=> 'Hızlı cevaba izin ver',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Bu anahtar mesaj panosu çapında hızlı cevap özelliğini kapatmaya izin verir. Açık olduğu zaman, başlıbaşına forumlarda hızlı cevap özelliğinin gösterilip gösterilmeyeceğinin belirlenmesi için forum özel ayarları kullanılacaktır.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Gönder ve hızlı cevap özelliğini tüm forumlarda aç',
	'ALLOW_SIG'					=> 'İmzalara izin ver',
	'ALLOW_SIG_BBCODE'			=> 'Kullanıcı imzasında BBCode kullanımına izin ver',
	'ALLOW_SIG_FLASH'			=> 'Kullanıcı imzasında <code>[FLASH]</code> BBCode etiketi kullanımına izin ver',
	'ALLOW_SIG_IMG'				=> 'Kullanıcı imzasında <code>[IMG]</code> BBCode etiketi kullanımına izin ver',
	'ALLOW_SIG_LINKS'			=> 'Kullanıcı imzalarında bağlantıların kullanımına izin ver',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Eğer <code>[URL]</code> BBCode etiketine izin verilmediyse ve otomatik/sihirli URL\'ler kapatıldıysa.',
	'ALLOW_SIG_SMILIES'			=> 'Kullanıcı imzasında ifade kullanımına izin ver',
	'ALLOW_SMILIES'				=> 'İfadelere izin ver',
	'ALLOW_TOPIC_NOTIFY'		=> 'Başlıklara aboneliğe izin ver',
	'BOARD_PM'					=> 'Özel mesajlaşma',
	'BOARD_PM_EXPLAIN'			=> 'Tüm kullanıcılar için özel mesajlaşmayı aç.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarlar kullanıcıların kendilerine yakın hissedip seçtikleri genel olarak küçük, benzersiz resimlerden oluşur. Tema stiline göre çoğunlukla mesajlar görüntülenirken kullanıcı adının hemen altında gösterilir. Siz bu bölümde kullanıcılarınızın kendi avatarlarını nasıl tanımlayacağını belirleyebileceksiniz. Burada önemli bir hususa dikkat etmelisiniz, avatarlarınızın web sunucusunda yaratılmış kayıt klasörlerindeki, yazma işlemine karşı yetkilendirilmesi gerektiğini unutmayın. Lütfen şunu önemle hatırlayın, dosya boyutu sınırlaması sadece yüklenen avatarlar için geçerlidir, bu sınırlama uzak bağlantı verilen resimler için geçerli olmayacaktır.',
	
	'ALLOW_AVATARS'					=> 'Avatarları aç',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Avatarların genel kullanımına izin verir;<br />Eğer genel olarak avatarları kapattıysanız ya da kesin bir şekilde avatar kullanımına izin vermiyorsanız, bu ayarı kapalı yaptığınız takdirde avatarlar mesaj panosunda artık görüntülenmeyecektir, fakat kullanıcılara hala kendi avatarlarını Kullanıcı Kontrol Panelinden indirebilirler.',
	'ALLOW_GRAVATAR'				=> 'Gravatar avatarlarını aç',
	'ALLOW_LOCAL'					=> 'Galeri avatarlarını aç',
	'ALLOW_REMOTE'					=> 'Uzak avatarı aç',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarlar diğer web sitelerinden bağlantı alır.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Uzak avatar yüklemeyi aç',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Diğer bir siteden avatarların yüklenmesine izin verir.',
	'ALLOW_UPLOAD'					=> 'Avatar yüklemeyi aç',
	'AVATAR_GALLERY_PATH'			=> 'Avatar galerisinin klasörü',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Ön-yüklenmiş resimler için phpBB ana klasörünüzün alt yolu, örnek: <samp>images/avatars/gallery</samp>.<br />Güvenlik sebeplerinden dolayı klasör yoluna eklenen <samp>../</samp> gibi çift noktalar kaldırılacaktır.',
	'AVATAR_STORAGE_PATH'			=> 'Avatar kayıt klasörü',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'phpBB ana klasörünüzün alt yolu, örnek: <samp>images/avatars/upload</samp>.<br />Eğer bu dosya yolu yazılabilir değilse avatar yüklemesi <strong>yapılamayacaktır</strong>.<br />Güvenlik sebeplerinden dolayı klasör yoluna eklenen <samp>../</samp> gibi çift noktalar kaldırılacaktır.',
	'MAX_AVATAR_SIZE'				=> 'En yüksek avatar boyutları',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Piksel cinsinden Genişlik x Yükseklik.',
	'MAX_FILESIZE'					=> 'En yüksek avatar dosyası büyüklüğü',
	'MAX_FILESIZE_EXPLAIN'			=> 'Yüklenen avatar dosyaları için. Eğer bu değer 0 olursa, gönderilebilir dosya boyutu sadece PHP ayarlarınız tarafından sınırlanır.',
	'MIN_AVATAR_SIZE'				=> 'En düşük avatar boyutları',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Piksel cinsinden Genişlik x Yükseklik.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Buradan özel mesajlaşma için varsayılan ayarları belirleyebilirsiniz.',

	'ALLOW_BBCODE_PM'			=> 'Özel mesajlarda BBCode kullanımına izin ver',
	'ALLOW_FLASH_PM'			=> '<code>FLASH</code> BBCode kullanımına izin ver',
	'ALLOW_FLASH_PM_EXPLAIN'   => 'Not: Eğer bu özellik aktifse özel mesajlarda flash kullanımına izin verilir. Ayrıca bu, kullanıcı izinlerine bağlıdır.',
	'ALLOW_FORWARD_PM'			=> 'Özel Mesajların yanıtlanmasına izin ver',
	'ALLOW_IMG_PM'				=> '<code>IMG</code> BBCode kullanımına izin ver',
	'ALLOW_MASS_PM'				=> 'Çoklu kullanıcılara ve gruplara özel mesajların gönderilmesine izin ver',
	'ALLOW_MASS_PM_EXPLAIN'      => 'Gruplara gönderim, grup ayarları sayfasından her grup için ayarlanmış olabilir.',
	'ALLOW_PRINT_PM'			=> 'Özel mesajlarda yazdırma izlemesine izin ver',
	'ALLOW_QUOTE_PM'			=> 'Özel mesajlarda alıntı yapmaya izin ver',
	'ALLOW_SIG_PM'				=> 'Özel mesajlarda imzaya izin ver',
	'ALLOW_SMILIES_PM'			=> 'Özel mesajlarda ifadelere izin ver',
	'BOXES_LIMIT'				=> 'Her kutudaki en fazla özel mesaj sayısı',
	'BOXES_LIMIT_EXPLAIN'		=> 'Burada belirtilen miktar kadar kullanıcılar mesaj alırlar. Sınırsız mesaja izin vermek için bu değeri 0 olarak ayarlayın.',
	'BOXES_MAX'					=> 'En fazla özel mesaj klasörü',
	'BOXES_MAX_EXPLAIN'			=> 'Kullanıcılar özel mesajlarında burada belirtilen miktar kadar klasör yaratabilirler.',
	'ENABLE_PM_ICONS'			=> 'Özel mesajlarda başlık ikonlarının kullanımını aç',
	'FULL_FOLDER_ACTION'		=> 'Dolu klasör için varsayılan eylem',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Eğer bir kullanıcının klasörü dolarsa, kullanıcının klasörü için yapılacak varsayılan eylem, eğer tümü ayarlanırsa uygun olmaz. İstisna olarak sadece “Gönderilen Mesajlar” klasörü için her zaman varsayılan eylem eski mesajları sil şeklindedir.',
	'HOLD_NEW_MESSAGES'			=> 'Yeni mesajları tut',
	'PM_EDIT_TIME'				=> 'Mesajı düzenleme limiti',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Özel mesajlarda mesaj henüz alıcıya ulaşmadıysa, mesajı tekrar düzenlemek için izin verilen zaman limitini ayarlar. Bu eylemi kapatmak için değeri 0 olarak ayarlayın.',
	'PM_MAX_RECIPIENTS'         => 'İzin verilen en fazla alıcı sayısı',
	'PM_MAX_RECIPIENTS_EXPLAIN'   => 'Bir özel mesajda izin verilen en fazla alıcı sayısı. Eğer 0 sayısı girilirse, izin verilen sayı sınırsız olur. Bu ayar grup ayarları sayfasından her grup için ayarlanmış olabilir.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Bu bölümde varsayılan mesaj gönderme ayarlarını belirleyebilirsiniz.',
	'ALLOW_POST_LINKS'					=> 'Mesajlarda/özel mesajlarda bağlantılara izin ver',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Eğer <code>[URL]</code> BBCode etiketine izin verilmediyse ve otomatik/sihirli URL\'ler kapatıldıysa.',
	'ALLOW_POST_FLASH'               => 'Mesajlarda <code>[FLASH]</code> BBCode etiketi kullanımına izin ver',
	'ALLOW_POST_FLASH_EXPLAIN'         => 'Eğer mesajlarda <code>[FLASH]</code> BBCode etiketine izin verilmezse, bunun dışında izin sistemi kontrollerindeki kullanıcılar <code>[FLASH]</code> BBCode etiketi kullanabilir.',

	'BUMP_INTERVAL'					=> 'Darbeleme aralığı',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Bir başlıktaki son mesaj ile bu başlığı darbeleme arasında geçecek olan dakika, saat ya da gün sayısı. Darbelemeyi tamamen kapatmak için 0 değeri verin.',
	'CHAR_LIMIT'					=> 'Her mesajda en yüksek karakter sayısı',
	'CHAR_LIMIT_EXPLAIN'			=> 'Bir mesajda izin verilen karakter sayısı. Sınırsız karakter için 0 olarak ayarlayın.',
	'DELETE_TIME'					=> 'Silinme zamanı sınırı',
	'DELETE_TIME_EXPLAIN'			=> 'Yeni bir mesajı silmek için mevcut olan zaman sınırı. 0 değeri bu özelliği kapatır.',
	'DISPLAY_LAST_EDITED'			=> 'Son değiştirilme zamanı bilgisini göster',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Son değiştirilme zamanı seçili olursa mesajlarda bu bilgi gösterilecektir.',
	'EDIT_TIME'						=> 'Düzenleme zaman limiti',
	'EDIT_TIME_EXPLAIN'				=> 'Yeni bir mesajı düzenlemek için mevcut zaman limiti. Bu eylemi kapatmak için değeri 0 olarak ayarlayın.',
	'FLOOD_INTERVAL'				=> 'Flood aralığı',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Kullanıcının yeni mesajları arasında beklemesi gereken saniye sayısı. Değişik izinlerdeki kullanıcılar için bu yoksayılır.',
	'HOT_THRESHOLD'					=> 'Popüler başlık tanımı',
	'HOT_THRESHOLD_EXPLAIN'     => 'Popüler başlık tanımı için her bir başlıkta gerekli olan mesajlar. Popüler başlıkları kapatmak için 0 olarak ayarlayın.',
	'MAX_POLL_OPTIONS'				=> 'En yüksek anket seçeneği sayısı',
	'MAX_POST_FONT_SIZE'			=> 'Her mesajdaki en yüksek font büyüklüğü',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Bir mesajda izin verilen en yüksek font büyüklüğü. Sınırsız font boyutu için 0 olarak ayarların.',
	'MAX_POST_IMG_HEIGHT'			=> 'Her mesajdaki en fazla resim yüksekliği',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Mesajlardaki resim/flash dosyalarının en fazla yüksekliği. Sınırsız boyut için 0 olarak ayarların.',
	'MAX_POST_IMG_WIDTH'			=> 'Her mesajdaki en fazla resim genişliği',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Mesajlardaki resim/flash dosyalarının en fazla genişliği. Sınırsız boyut için 0 olarak ayarların.',
	'MAX_POST_URLS'					=> 'Her mesajdaki en fazla bağlantı sayısı',
	'MAX_POST_URLS_EXPLAIN'			=> 'Bir mesajda izin verilen en fazla URL sayısı. Sınırsız bağlantı için 0 olarak ayarlayın.',
	'MIN_CHAR_LIMIT'				=> 'Her mesajdaki en düşük karakter sayısı',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Kullanıcının bir mesaj/özel mesajda girmesi gereken en düşük karakter sayısı. Bu ayar için girilebilecek en küçük değer 1’dir.',
	'POSTING'						=> 'Mesajlaşma',
	'POSTS_PER_PAGE'				=> 'Her sayfadaki mesaj sayısı',
	'QUOTE_DEPTH_LIMIT'            	=> 'Alıntılar için en fazla iç içe geçmiş derinlik sayısı',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'     => 'Bir mesajdaki en fazla iç içe geçmiş alıntı derinliği sayısı. Sınırsız derinlik için 0 olarak ayarlayın.',
	'SMILIES_LIMIT'					=> 'Her mesajdaki en fazla ifade sayısı',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Bir mesajda izin verilen en fazla ifade sayısı. Sınırsız ifade için 0 olarak ayarlayın.',
	'SMILIES_PER_PAGE'				=> 'Her sayfadaki ifade sayısı',
	'TOPICS_PER_PAGE'				=> 'Her sayfadaki başlık sayısı',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Buradan imzalar için varsayılan tüm ayarları yapabilirsiniz.',

	'MAX_SIG_FONT_SIZE'				=> 'En yüksek imza font büyüklüğü',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Kullanıcı imzasında izin verilmiş en yüksek font büyüklüğü. Sınırsız büyüklük için 0 olarak ayarlayın.',
	'MAX_SIG_IMG_HEIGHT'			=> 'En fazla imza resim yüksekliği',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Kullanıcı imza kısmında resim/flash dosyalarının en fazla yüksekliği. Sınırsız yükselik için 0 olarak ayarlayın.',
	'MAX_SIG_IMG_WIDTH'				=> 'En fazla imza resim genişliği',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Kullanıcı imza kısmında resim/flash dosyalarının en fazla genişliği. Sınırsız genişlik için 0 olarak ayarlayın.',
	'MAX_SIG_LENGTH'				=> 'En yüksek imza uzunluğu',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Kullanıcı imzasındaki en fazla karakter sayısı.',
	'MAX_SIG_SMILIES'				=> 'Her imzada en fazla ifade sayısı',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Kullanıcı İmza kısmında izin verilen en fazla ifade sayısı. Sınırsız ifade için 0 olarak ayarlayın.',
	'MAX_SIG_URLS'					=> 'En fazla imza bağlantısı',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Kullanıcıya imza kısmında izin verilen en fazla bağlantı sayısı. 0 (Sıfır) olduğunda sınırsız bağlantı olur.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Buradan profil ve kayıtla ilgili ayarları düzenleyebilirsiniz.',

	'ACC_ACTIVATION'			=> 'Hesap aktivasyonu',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Buradaki ayarlar sayesinde kullanıcılar mesaj panosuna hemen giriş yapabilir ya da kullanıcılara hesap onaylama zorunluluğu getirilebilir. Arzu ederseniz yeni kayıt işlemini tamamıyla devre dışı bırakabilirsiniz. <em>Kullanıcı ya da yönetici aktivasyonunu kullanmak için “Mesaj panosu genelinde e-posta gönderimini aç” özelliği aktif olmalıdır.</em>',
	'ACC_ACTIVATION_WARNING'		=> 'Not: Şu anki seçili olan aktivasyon metotunu kullanabilmek için e-posta gönderiminin açık olması gerekiyor, aksi halde kayıt olma işlevi kapatılacaktır. Farklı bir aktivasyon metotu seçmenizi ya da e-posta gönderimini yeniden açmanızı öneririz.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Yeni üye mesaj sınırı',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Yeni üyeler burada belirtilen mesaj sayısına ulaşana kadar <em>Yeni Kayıtlı Kullanıcılar</em> grubunda kalırlar. Yeni üyelerin mesajlarını incelemek ya da ÖM sistemini kullanamamalarını sağlamak için bu grubu kullanabilirsiniz. <strong>0 değeri bu özelliği kapatır.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Yeni Kayıtlı Kullanıcılar grubunu varsayılan olarak ayarla',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Eğer evet olarak ayarlanırsa, ve yeni üye mesaj sınırı belirlenirse, yeni kayıt olan kullanıcılar sadece <em>Yeni Kayıtlı Kullanıcılar</em> grubuna yerleştirilmekle kalmaz, ayrıca bu grup onların varsayılan grubu da olur. Eğer varsayılan bir grup rütbesi ve/veya avatarı tanımlamak isterseniz bu özellik kullanışlı gelebilir.',
	'ACC_ADMIN'					=> 'Yönetici tarafından',
	'ACC_DISABLE'				=> 'Kayıt kapalı',
	'ACC_NONE'					=> 'Aktivasyon yok (anında erişim)',
	'ACC_USER'					=> 'Kullanıcı tarafından (e-posta doğrulama)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Aynı e-posta adresinin tekrar kullanılmasına izin ver',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Farklı kullanıcılar aynı e-posta adresiyle kayıt olabilirler.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA faks numarası',
	'COPPA_MAIL'				=> 'COPPA postalaşma adresi',
	'COPPA_MAIL_EXPLAIN'		=> 'COPPA kayıt formlarında gönderilecek olan esas posta adresleri.',
	'ENABLE_COPPA'				=> 'COPPA özelliğini aç',
	'ENABLE_COPPA_EXPLAIN'		=> 'Bu özellik U.S COPPA kurallarına uyum için kullanıcılardan 13 yaş veya üzerinde olduklarını ispat etmelerini ister. Eğer bu özellik kapalıysa COPPA belirli gruplara gösterilmeyecektir.',
	'MAX_CHARS'					=> 'En yüksek',
	'MIN_CHARS'					=> 'En düşük',
	'NO_AUTH_PLUGIN'			=> 'Hiç bir uygun yetki eklentisi bulunmadı.',
	'PASSWORD_LENGTH'			=> 'Şifre uzunluğu',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Şifrelerdeki en düşük ve en yüksek karakter sayısı.',
	'REG_LIMIT'					=> 'Kayıt girişimleri',
	'REG_LIMIT_EXPLAIN'         => 'Kullanıcıların kayıt işlemi sırasındaki anti-spambot görevini çözebilmeleri için oturumun kilitlenmesinden önce yapabilecekleri kayıt girişimlerinin sayısı.',
	'USERNAME_ALPHA_ONLY'		=> 'Sadece alfanümerik',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanümerik ve boşluklar',
	'USERNAME_ASCII'			=> 'ASCII (uluslararası unicode olmadan)',
	'USERNAME_LETTER_NUM'		=> 'Herhangi bir harf ve sayı',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Herhangi bir harf, sayı ve boşluk',
	'USERNAME_CHARS'			=> 'Kullanıcı adı karakter sınırı',
	'USERNAME_CHARS_ANY'		=> 'Herhangi bir karakter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Karakter kısıtlama tipini seçin. Ayrıca, bütün kullanıcı adlarında boşluk tuşlarıyla beraber şu karakterler de kullanılabilir: boşluk, -, +, _, [ ve ].',
	'USERNAME_LENGTH'			=> 'Kullanıcı adı uzunluğu',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Kullanıcı adlarındaki en düşük ve en yüksek karakter sayısı.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Genel özet akışı besleme ayarları',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Bu modül mevcut olan çeşitli ATOM beslemeleri yapar ve mesajlarda kullanılan herhangi BBCode etiketlerini ayrıştırarak harici beslemelerde kullanılabilir hale getirir.',

	'ACP_FEED_GENERAL'					=> 'Genel besleme ayarları',
	'ACP_FEED_POST_BASED'				=> 'Mesaj temelli besleme ayarları',
	'ACP_FEED_TOPIC_BASED'				=> 'Başlık temelli besleme ayarları',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Diğer beslemeler ve ayarlar',

	'ACP_FEED_ENABLE'					=> 'Beslemeleri aç',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Tüm mesaj panosu için ATOM beslemelerini açın ya da kapatın.<br />Kapatıldığında tüm beslemeler durdurulur, alttaki seçeneklerinin nasıl ayarlandığının önemi yoktur.',
	'ACP_FEED_LIMIT'					=> 'Ögelerin sayısı',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Gösterilecek en fazla besleme ögelerinin sayısı.',

	'ACP_FEED_OVERALL'					=> 'Mesaj panosu kapsamında beslemeyi aç',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Mesaj panosu kapsamında yeni mesajlar gösterilir.',
	'ACP_FEED_FORUM'					=> 'Her forum için beslemeleri aç',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Tek forum ve altforumların yeni mesajları gösterilir.',
	'ACP_FEED_TOPIC'					=> 'Her başlık için beslemeleri aç',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Tek başlıklardaki yeni mesajlar gösterilir.',

	'ACP_FEED_TOPICS_NEW'				=> 'Yeni başlıklar beslemesini aç',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> '“Yeni Başlıklar” beslemesi açıldığında son oluşturulan başlıklar içerdikleri ilk mesaj ile gösterilir.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Aktif başlıklar beslemesini aç',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> '“Aktif Başlıklar” beslemesi açıldığında son aktif başlıklar içerdikleri ilk mesaj ile gösterilir.',
	'ACP_FEED_NEWS'						=> 'Haber beslemesi',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Bu forumlardan ilk mesaj çekilir. Haber beslemesini kapatmak için hiç forum seçmeyin.<br />Çoklu forumlar seçmek için <samp>CTRL</samp> tuşuna basılı tutun ve tıklayın.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Forumlar beslemesini aç',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> '“Tüm forumlar” beslemesi açıldığında forumların bir listesi gösterilir.',

	'ACP_FEED_HTTP_AUTH'				=> 'HTTP Doğrulamasına izin ver',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'HTTP doğrulaması açıldığında, besleme URLsinin başına <samp>auth=http</samp> parametresi eklenerek misafir kullanıcılardan içerik gizlenip normal kullanıcıların içerik almasına izin verilir. Not: Bazı PHP ayarları .htaccess dosyasında ilave değişiklikler yapmayı zorunlu tutar. Açıklamalar o dosyanın içinde bulunabilir.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Öge istatistikleri',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Besleme ögelerinin altında özel istatistikler gösterilir<br />(ör. mesajı gönderen, tarih ve saat, cevaplar, görüntülemeler)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Bu forumları hariç tut',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Bunların içerikleri <strong>özet akışlarında gösterilmeyecektir</strong>. Tüm forumlardan veri çekmek için hiç forum seçmeyiniz.<br />Birden çok forumu Seçmek/Seçimi Kaldırmak için <samp>CTRL</samp> tuşuna basılı tutun ve tıklayın.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'            => 'Buradan spambotlar tarafından tasarlanan otomatik olarak form gönderimlerini engellemek için eklentileri seçebilir ve ayarlayabilirsiniz. Bu eklentiler genellikle bir <em>CAPTCHA</em> ile kullanıcıya sorulmak amacıyla çalışır ve bilgisayarlar için çözmesi zor olarak tasarlanan bir testtir.',
	'ACP_VC_EXT_GET_MORE'					=> 'İlave (ve belkide daha iyi) anti-spam eklentileri için, <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Uzantı Veritabanı</strong></a> sayfasını ziyaret edin. Mesaj panonuzda spam önleme ile ilgili daha fazla bilgi için, <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Bilgi Bankası</strong></a> sayfasını ziyaret edin.',	
	'AVAILABLE_CAPTCHAS'               => 'Mevcut eklentiler',
	'CAPTCHA_UNAVAILABLE'               => 'Gereksinimleri yerine getirilmediği için bu eklenti seçilemez.',
	'CAPTCHA_GD'                     => 'GD resmi',
	'CAPTCHA_GD_3D'                     => 'GD 3D resmi',
	'CAPTCHA_GD_FOREGROUND_NOISE'         => 'Ön plan paraziti',
	'CAPTCHA_GD_EXPLAIN'               => 'Daha gelişmiş bir anti-spambot resmi yapmak için GD kullanılır.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'   => 'Resmi zor okunur yapmak için ön plan paraziti kullanılır.',
	'CAPTCHA_GD_X_GRID'                  => 'Arka plan x-ekseni paraziti',
	'CAPTCHA_GD_X_GRID_EXPLAIN'            => 'Resmi zor okunur yapmak için bunun düşük ayarları kullanılır. 0 sayısı x-ekseni arka plan parazitini kapatacaktır.',
	'CAPTCHA_GD_Y_GRID'                  => 'Arka plan y-ekseni paraziti',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'            => 'Resmi zor okunur yapmak için bunun düşük ayarları kullanılır. 0 sayısı y-ekseni arka plan parazitini kapatacaktır.',
	'CAPTCHA_GD_WAVE'                  => 'Dalga çarpıtması',
	'CAPTCHA_GD_WAVE_EXPLAIN'            => 'Bu özellik resme bir dalga çarpıtması uygular.',
	'CAPTCHA_GD_3D_NOISE'               => '3D-ses objeleri ekle',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'         => 'Bu özellik resme harflerinde ötesinde ilave objeler ekler.',
	'CAPTCHA_GD_FONTS'                  => 'Farklı yazı tipleri kullan',
	'CAPTCHA_GD_FONTS_EXPLAIN'            => 'Bu ayar kaç tane farklı harf biçimi kullanılacağının kontrolünü yapar. Sadece varsayılan biçimleri kullanabilirsiniz ya da değiştirilmiş harfleri tanıtabilirsiniz. Ayrıca küçük harflerde eklemeniz mümkündür.',
	'CAPTCHA_FONT_DEFAULT'               => 'Varsayılan',
	'CAPTCHA_FONT_NEW'                  => 'Yeni biçimler',
	'CAPTCHA_FONT_LOWER'               => 'Ayrıca küçük harf kullanılsın',
	'CAPTCHA_NO_GD'                     => 'Sade resim',
	'CAPTCHA_PREVIEW_MSG'               => 'Değişiklikleriniz kaydedilmedi, bu sadece bir önizlemedir.',
	'CAPTCHA_PREVIEW_EXPLAIN'            => 'Eklenti, kullanılan geçerli seçiminiz gibi görünecektir.',

	'CAPTCHA_SELECT'                  => 'Kurulan eklentiler',
	'CAPTCHA_SELECT_EXPLAIN'            => 'Yandaki açılır menüde mesaj panosu tarafından desteklenen eklentiler belirtilmiştir. Gri kayıtlar şu anda kullanılabilir değildir ve kullanmadan önce ayarlama gerektirebilir.',
	'CAPTCHA_CONFIGURE'                  => 'Eklentileri ayarla',
	'CAPTCHA_CONFIGURE_EXPLAIN'            => 'Seçilen eklenti için ayarları değiştirir.',
	'CONFIGURE'                        => 'Ayarla',
	'CAPTCHA_NO_OPTIONS'               => 'Bu eklenti ayarlama seçeneklerine sahip değil.',

	'VISUAL_CONFIRM_POST'               => 'Misafir mesajları için spambot önlemini aç',
	'VISUAL_CONFIRM_POST_EXPLAIN'         => 'Otomatik mesajları önlemek amacıyla anti-spambot görevini geçmek için misafir kullanıcılardan yardım istenir.',
	'VISUAL_CONFIRM_REG'               => 'Kayıtlar için spambot önlemini aç',
	'VISUAL_CONFIRM_REG_EXPLAIN'         => 'Otomatik kayıtları önlemek amacıyla anti-spambot görevini geçmek için yeni kullanıcılardan yardım istenir.',
	'VISUAL_CONFIRM_REFRESH'            => 'Anti-spambot görevini yenilemek için kullanıcılara izin ver',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'      => 'Eğer kullanıcılar kayıt işlemi sırasında geçerli görevi çözemezlerse yeni bir anti-spambot görevi istemelerine izin verilir. Bazı eklentiler bu özelliği desteklemeyebilir.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Buradaki detaylar, kullanıcılarınızın tarayıcılarına gönderilen çerez verilerini tanımlar. Bir çok durumda çerez verileri için burada belirtilmiş varsayılan değerler yeterli olacaktır. Buradaki değerleri dikkatli bir şekilde değiştirmezseniz, yanlış değerler kullanıcılarınızın girişini engelleyebilir.',

	'COOKIE_DOMAIN'			=> 'Çerez domain adresi',
	'COOKIE_NAME'			=> 'Çerez adı',
	'COOKIE_PATH'			=> 'Çerez klasör adresi',
	'COOKIE_SECURE'			=> 'Çerez güvenliği',
	'COOKIE_SECURE_EXPLAIN'	=> 'Sunucunuz SSL modunda çalışıyorsa açın, aksi halde sakın açmayın',
	'ONLINE_LENGTH'				=> 'Çevrimiçi zamanı görüntüleme süresi',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Bu dakikadan sonra aktif olmayan kullanıcılar “Kimler Çevrimiçi” listesinde gözükmeyecektir. Bu değerin yüksekliği, listenin oluşturulması için çok sayıda işlem yapılmasını gerektirecektir.',
	'SESSION_LENGTH'			=> 'Oturum uzunluğu',
	'SESSION_LENGTH_EXPLAIN'	=> 'Bu zamandan sonra oturumlar sona erecektir, saniye cinsinden belirtilmelidir.',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Buradan iletişim sayfasını etkinleştirip devre dışı bırakabilirsiniz, ayrıca iletişim sayfasında gösterilecek bir metin ekleyebilirsiniz.',

	'CONTACT_US_ENABLE'				=> 'İletişim sayfasını etkinleştir',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Bu sayfa kullanıcıların mesaj panosu yöneticilerine e-posta göndermelerine olanak sağlar',

	'CONTACT_US_INFO'				=> 'İletişim bilgileri',
	'CONTACT_US_INFO_EXPLAIN'		=> 'İletişim sayfasında gösterilecek mesaj',
	'CONTACT_US_INFO_PREVIEW'		=> 'İletişim sayfası bilgileri - Önizleme',
	'CONTACT_US_INFO_UPDATED'		=> 'İletişim sayfası bilgileri güncellendi.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Buradan mesaj panosunun belirli fonksiyonlarını açıp kapatabilirsiniz, bu sayede işlem miktarını azaltabilirsiniz. Bir çok sunucuda herhangi bir fonksiyonu kapamanız gerekmez. Aslında, belirli sistemlerde ya da paylaşılmış hosting ekipmanlarında gerekli olmadığına inandığınız fonksiyonların kapatılması bazı kazançlar sağlayabilir. Ayrıca burada sistem yüklemesi ve aktif oturum durumundan çıkıldığında, -ki bu durumda mesaj panosu çevrimdışı olur, bunlar için bazı sınırlamalar belirleyebilirsiniz.',

	'ALLOW_CDN'						=> 'Üçüncü parti içerik dağıtım ağlarının kullanılmasına izin ver',
	'ALLOW_CDN_EXPLAIN'				=> 'Eğer bu ayar açılırsa, bazı dosyalar sunucunuzun yerine dış üçüncü parti sunuculardan hizmet veriyor olacaktır. Bu işlem sunucunuz tarafından istenen bant genişliği ağını azaltır, ancak bazı mesaj panosu yöneticileri için gizlilik sorunu ortaya çıkarabilir. Varsayılan bir phpBB kurulumu içerisinde, Google’ın içerik dağıtım ağından yüklenen “jQuery” ve “Open Sans” yazı tipi mevcuttur.',
	'ALLOW_LIVE_SEARCHES'			=> 'Canlı aramalara izin ver',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Eğer bu ayar açılırsa, mesaj panosu boyunca belirli alanlardaki yazılar kullanıcılara anahtar kelime önerisi olarak sunulacaktır.',	
	'CUSTOM_PROFILE_FIELDS'			=> 'Özel profil alanları',
	'LIMIT_LOAD'					=> 'Sistem yükleme sınırı',
	'LIMIT_LOAD_EXPLAIN'			=> 'Eğer sistem, 1-dakika içerisindeki yükleme ortalamasında burada belirtilen değeri geçerse mesaj panosu otomatik olarak çevrimdışı olacaktır, 1.0 değeri bir işlemcinin ~100% kullanımına eşittir. Bu özellik sadece UNIX tabanlı sunucularda ve bu bilgiye erişebilen yerlerde geçerlidir. Eğer phpBB, sistemin yükleme sınırını tespit edemezse buradaki değer kendini 0 değerine sıfırlar.',
	'LIMIT_SESSIONS'				=> 'Oturum sınırı',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Eğer oturumların sayısı birer dakika periyotlar içerisinde burada belirtilen değeri geçerse mesaj panosu çevrimdışı olacaktır. Sınırsız oturum için 0 olarak ayarlayın.',
	'LOAD_CPF_MEMBERLIST'			=> 'Üye listesinde özel profil alanları göstermek için stillere izin ver',
	'LOAD_CPF_PM'					=> 'Özel mesajlarda özel profil alanlarını göster',	
	'LOAD_CPF_VIEWPROFILE'			=> 'Kullanıcı profillerinde özel profil alanları göster',
	'LOAD_CPF_VIEWTOPIC'			=> 'Başlık sayfalarında özel profil alanları göster',
	'LOAD_USER_ACTIVITY'			=> 'Kullanıcıların faaliyetlerini göster',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Kullanıcı profillerinde ve kullanıcı kontrol panelinde aktif olunan başlık/forum bilgilerini göster. Bir milyon mesajdan fazla olan mesaj panolarında bu özelliği kapatmanız önerilir.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Okunan bildirimin silinme süresi',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Okunan bir bildirimin otomatik olarak silinmesinden önce geçecek gün sayısı. Bildirimlerin hiç silinmemesi için bu değeri 0 olarak ayarlayın.',
	'RECOMPILE_STYLES'			=> 'Bozulmuş stil bileşenlerini yeniden derle',
	'RECOMPILE_STYLES_EXPLAIN' => 'Dosya sisteminde bulunan stil bileşenlerinin güncelliğini kontrol eder ve duruma göre yeniden derler',
	'YES_ANON_READ_MARKING'			=> 'Misafirler için başlık işaretlenmesini aç',
	'YES_ANON_READ_MARKING_EXPLAIN'   => 'Misafirler için başlıkların ya da mesajların okunmuş/okunmamış durum bilgileri saklanacaktır. Eğer bu özellik kapalıysa, misafirler için mesajlar her zaman okunmuş olarak işaretlenecektir.',
	'YES_BIRTHDAYS'					=> 'Doğum günü listelemeyi aç',
 	'YES_BIRTHDAYS_EXPLAIN'			=> 'Eğer doğum günü listelemesi aktif değilse hiç bir yerde gösterilmeyecektir. Doğum günü özelliğini kullanmak içinde bu ayarı aktif etmeniz gerekmektedir.',
	'YES_JUMPBOX'					=> 'Hızlı geçiş kutusunun gösterilmesini aç',
	'YES_MODERATORS'				=> 'Moderatörlerin gösterilmesini aç',
	'YES_ONLINE'					=> 'Çevrimiçi kullanıcı listelemeyi aç',
	'YES_ONLINE_EXPLAIN'			=> 'Ana sayfa, forum, başlık sayfalarındaki çevrimiçi kullanıcı bilgisini gösterir.',
	'YES_ONLINE_GUESTS'				=> 'Çevrimiçi misafirlerin listelenmesini aç',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Misafir bilgilerinin çevrimiçi bölümünde görülmesini sağlar.',
	'YES_ONLINE_TRACK'				=> 'Kullanıcı çevrimiçi/çevrimdışı bilgisinin gösterilmesini aç',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Kullanıcı profillerinde ve başlık sayfalarında çevrimiçi bilgisini gösterir.',
	'YES_POST_MARKING'				=> 'Başlıklardaki noktalama özelliğini aç',
	'YES_POST_MARKING_EXPLAIN'		=> 'Kullanıcının bir başlığa mesaj gönderdiğini belirten siyah bir noktadır.',
	'YES_READ_MARKING'				=> 'Sunucu tabanlı başlık işaretlemeyi aç',
	'YES_READ_MARKING_EXPLAIN'		=> 'Okunmuş/Okunmamış durum bilgilerinin çerez yerine sunucuda depolanmasını sağlayan özelliktir.',
   	'YES_UNREAD_SEARCH'            => 'Okunmamış mesajlar için arama özelliğini aç',	
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB yapısı eklenti veya modüllerin doğrulanmasını destekler. Bunlar kullanıcılar mesaj panosuna giriş yaptıklarında nasıl doğrulanacaklarının belirlenmesine izin verir. Varsayılan olarak dört tane uyumlu eklenti sağlanmıştır; DB, LDAP ve Apache, ve OAuth. Hiç bir metot ilave bir bilgi istemez, yani eğer seçilen metot için uygun boş alanlar varsa sadece bu alanlar doldurulur.',

	'AUTH_METHOD'				=> 'Bir doğrulama yöntemi seçin',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Her etkin OAuth servis sağlayıcısının anahtar ve gizli parametreleri temin edilmiş olmalıdır. Bir OAuth servis sağlayıcısı için sadece bir tanesi temin edilmelidir.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Her bir OAuth sağlayıcısı, dış sunucu ile doğrulama yapmak için benzersiz bir gizli ve bir anahtar parametresi gerektirir. Bu parametreler OAuth servisine web siteniz ile kayıt olduğunuz zaman size verilir. Temin edilen bu parametreleri tam ve doğru olarak girmelisiniz.<br />Buraya girilen ve bir anahtar ile bir gizli parametresinin her ikisi de olmayan herhangi bir servisin forum kullanıcıları tarafından kullanımı uygun olmayacaktır. Ayrıca not: bu kullanıcılar hala veritabanı doğrulama eklentisi (DB authentication plug-in) kullanarak kayıt olabilir ve giriş yapabilirler.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Anahtar',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Gizli',

	'APACHE_SETUP_BEFORE_USE'	=> 'phpBB\'yi bu doğrulama metotuna geçirmeden önce apache doğrulama ayarını yapmalısınız. Apache doğrulaması için kullanılacak kullanıcı adı, phpBB kullanıcı adınız ile aynı olması gerektiğini unutmayın. Apache doğrulaması sadece mod_php ile kullanılabilir (bir CGI sürümü ile değil) ve safe_mode kapalı olmalıdır.',

	'LDAP'							=> 'LDAP',	
	'LDAP_DN'						=> 'LDAP tabanı <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Bu, kullanıcı bilgisinde yer gösteren Ayırt Edici Bir Addır (Distinguished Name), ör. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-posta özelliği',
	'LDAP_EMAIL_EXPLAIN'			=> 'Buradan yeni kullanıcılar için otomatik ayarlanacak olan kullanıcınızın e-posta girdisi özelliğinin (eğer bir tane varsa) adını ayarlayabilirsiniz. İlk defa giriş yapan kullanıcılara boş e-posta adresi vermek için burayı boş bırakın.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Belirtilen kullanıcı/şifre ile LDAP sunucusuna bağlanma başarısız oldu.',
	'LDAP_NO_EMAIL'					=> 'Belirtilen e-posta özelliği bulunmuyor.',
	'LDAP_NO_IDENTITY'				=> '%s için bir giriş kimliği bulunamadı.',
 	'LDAP_PASSWORD'					=> 'LDAP şifresi',
 	'LDAP_PASSWORD_EXPLAIN'			=> 'Anonim bağlayıcı kullanılıyorsa boş bırakın, aksi takdirde yukarıdaki kullanıcı için şifre belirtin. Aktif Dizin Sunucuları için gereklidir. <strong>DİKKAT:</strong> Bu şifre düz metin halinde veritabanına kaydedileceği için veritabanınıza erişebilen ya da bu ayar sayfasını görüntüleyebilen herkese görünecektir.',
	'LDAP_PORT'                  => 'LDAP sunucu portu',
	'LDAP_PORT_EXPLAIN'            => 'İsteğe bağlı olarak varsayılan port olan 389\'un yerine LDAP sunucusuna bağlanmak için kullanılması gereken bir port belirleyebilirsiniz.',
	'LDAP_SERVER'					=> 'LDAP sunucu adı',
	'LDAP_SERVER_EXPLAIN'			=> 'Eğer LDAP kullanıyorsanız bu, LDAP sunucusunun IP adresi ya da ana makine adıdır. Alternatif olarak ldap://anamakineadı:port/ gibi bir URL belirtebilirsiniz.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Bu, giriş kimliği kontrolü için arama, yani verilmiş bir anahtardır. örnek: <var>uid</var>, <var>sn</var>, v.b.',
 	'LDAP_USER'						=> 'LDAP kullanıcı <var>dn</var>',
 	'LDAP_USER_EXPLAIN'				=> 'Anonim bağlayıcı kullanılıyorsa boş bırakın. Eğer giriş denemelerinde doğru kullanıcıyı bulmak için seçkin isim belirtildiyse phpBB bu ismi kullanacaktır , ör. e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Aktif Dizin Sunucuları için gereklidir.',	
	'LDAP_USER_FILTER'            => 'LDAP kullanıcı filtresi',
	'LDAP_USER_FILTER_EXPLAIN'      => 'İsteğe bağlı olarak aranan objeler için ilave filtreler ile daha fazla limit belirleyebilirsiniz. Örneğin, <samp>objectClass=posixGroup</samp> şeklinde istenilen sonuçta <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> kullanılır.',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Buradan alan adı ile ilgili ayarları ve sunucu ayarlarını tanımlayabilirsiniz. Girdiğiniz verilerin doğrulundan kesin olarak emin olun. Hatalı olması durumunda e-postaların hatalı bilgiler içermesine sebep olunacaktır. Alan adını girdiğinizde şunu hatırlayın: mutlaka http:// veya diğer protokol terimlerini içermelidir. Sunucunuzun farklı bir değer kullandığını biliyorsanız ancak bu durumda port numaralarını değiştirin, port\'un 80 olması bir çok durumda doğrudur.',

	'ENABLE_GZIP'				=> 'GZip sıkıştırmasını aç',
	'ENABLE_GZIP_EXPLAIN'		=> 'Oluşturulan içerik kullanıcıya göndermek için öncelikle sıkıştırılacaktır. Bu, ağ trafiğini azaltabilir fakat ayrıca sunucu ve bağlantı tarafının her ikisinde CPU kullanımı artacaktır. Zlib PHP uzantısının yüklenmiş olması gereklidir.',
	'FORCE_SERVER_VARS'			=> 'Sunucu URL ayarlarını zorla',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Evet olarak seçilmesi durumunda sunucu ayarları buradaki otomatik olarak belirlenmiş değerlere tabi olacak ve kullanılacaktır.',
	'ICONS_PATH'				=> 'Mesaj ikonlarının bulunduğu yol',
	'ICONS_PATH_EXPLAIN'		=> 'phpBB ana klasörünüzün alt yolu, örnek: <samp>images/icons</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'URL Yeniden Yazmayı aç',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Bu ayarı açtığınız zaman, ’app.php’ şeklinde dosya adı içeren URL adresleri dosya adı silinerek yeniden yazılacaktır (örneğin: app.php/foo yeniden yazılarak /foo olacaktır). <strong>Bu özelliğin çalışması için Apache sunucusu’nun mod_rewrite modulü gereklidir; eğer mod_rewrite desteği olmadan bu özellik açılırsa, mesaj panonuzdaki URL adresleri bozulabilir.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Apache web sunucunuzdaki <strong>mod_rewrite</strong> modulü aktif değil. Eğer bu özelliği açmak istiyorsanız modülü aktifleştirin ya da web hosting sağlayıcınız ile iletişime geçin.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Bu sunucunun URL yeniden yazma desteğinin olup olmadığını belirleyemiyoruz. Bu ayar açılmış olabilir, fakat eğer URL yeniden yazma mevcut değilse, bu mesaj panosu tarafından oluşturulan yollar (bağlantıların kullanımı gibi) bozulmuş olabilir. Eğer bu özelliği güvenli bir şekilde açıp açmadığınızdan emin değilseniz web hosting sağlayıcınız ile iletişime geçin.',	
	'PATH_SETTINGS'				=> 'Yol ayarları',
	'RANKS_PATH'				=> 'Rütbe resimlerinin saklandığı yol',
	'RANKS_PATH_EXPLAIN'		=> 'phpBB ana klasörünüzün alt yolu, örnek: <samp>images/ranks</samp>.',
	'SCRIPT_PATH'          => 'Script yolu',
	'SCRIPT_PATH_EXPLAIN'   => 'Alan adına göre phpBB\'nin ilgili konum yolu, ör: <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain adı',
	'SERVER_NAME_EXPLAIN'		=> 'Bu mesaj panosunun çalıştığı alan adı (örnek: <samp>www.ornek.com</samp>).',
	'SERVER_PORT'				=> 'Sunucu portu',
	'SERVER_PORT_EXPLAIN'		=> 'Sunucunun üzerinde çalıştığı port, çoğunlukla 80 olur, farklı bir port numaranız varsa o zaman değiştirebilirsiniz.',
	'SERVER_PROTOCOL'			=> 'Sunucu Protokolü',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Bu ayarlar sunucu protokolü olarak kullanılır. Boş bırakılırsa protokol, çerez güvenlik ayarları tarafından belirlenir (<samp>http://</samp> veya <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Sunucu URL Ayarları',
	'SMILIES_PATH'				=> 'İfadelerin saklandığı klasör',
	'SMILIES_PATH_EXPLAIN'		=> 'phpBB ana klasörünüzün alt yolu, ör: <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Uzantı grup ikonlarının saklandığı klasör',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'phpBB ana klasörünüzün alt yolu, ör: <samp>images/upload_icons</samp>.',
	'USE_SYSTEM_CRON'		=> 'Sistem kronundan periyodik görevleri çalıştır',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Kapalı olduğu zaman, phpBB otomatik olarak çalışması için periyodik görevleri ayarlayacaktır. Açık olduğu zaman ise, phpBB kendisi tarafından herhangi bir periyodik görev zamanlaması yapmayacaktır; bir sistem yöneticisi düzenli aralıklarda (ör. her 5 dakikada bir) sistem kron aracı tarafından çalıştırılması için <code>bin/phpbbcli.php cron:run</code> ayarını yapmalıdır.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Buradan oturum ve giriş ile ilgili ayarları belirleyebilirsiniz.',

	'ALL'							=> 'Tümü',
	'ALLOW_AUTOLOGIN'				=> '"Beni Hatırla" girişlerine izin ver',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Kullanıcılara mesaj panosunu ziyaret ettiklerinde "Beni Hatırla" seçeneğinin verilip verilmeyeceğini belirler.',
	'ALLOW_PASSWORD_RESET'			=> 'Şifre sıfırlamasına izin ver ("Şifremi Unuttum")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Kullanıcılara hesaplarını kurtarmak için giriş sayfasında "Şifremi Unuttum" bağlantısının kullanılabilir olup olmayacağını belirler. Eğer bir dış doğrulama mekanizması kullanıyorsanız bu özelliği kapatmayı isteyebilirsiniz.',
	'AUTOLOGIN_LENGTH'				=> '"Beni Hatırla" giriş anahtarının sona erme uzunluğu (gün cinsinden)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '"Beni Hatırla" giriş anahtarları belirlenen gün sayısından sonra kaldırılmış olacaktır. 0 değeri bu özelliği kapatır.',
	'BROWSER_VALID'					=> 'Tarayıcı doğrulama',
	'BROWSER_VALID_EXPLAIN'			=> 'Her oturumdaki güvenliğini artırmak için, web tarayıcısı doğrulamayı açık hale getirir.',
	'CHECK_DNSBL'					=> 'DNS Kara Listesine karşı IP kontrolü',
	'CHECK_DNSBL_EXPLAIN'			=> 'Eğer aktifse, kullanıcıların kayıt ve mesajları sırasında DNSBL servislerini izleyerek buna karşı IP adresi kontrolü yapar: <a href="http://spamcop.net">spamcop.net</a> ve <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Bu inceleme sunucuların ayarlarına bağlı olarak biraz sürebilir. Eğer yavaşlama görülürse ya da çok fazla yanlış kesin bildiri varsa bu kontrolü kapatmanız önerilir.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Geçerli MX kaydı için e-posta alan adı kontrolü',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Eğer aktifse, e-posta alan adı sağlayıcısı kayıt ve profil değişikliklerinde geçerli bir MX kaydı için kontrol edilir.',
	'FORCE_PASS_CHANGE'				=> 'Zorunlu şifre değişimi',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Kullanıcıların şifrelerini değiştirmesi için geçecek gün sayısı. Bu eylemi kapatmak için 0 olarak ayarlayın.',
	'FORM_TIME_MAX'               => 'Formları göndermek için en yüksek zaman',
	'FORM_TIME_MAX_EXPLAIN'         => 'Bir kullanıcının bir formu göndereceği süre. Kapatmak için -1 yazın. Not: Bir form, eğer oturum süresi dolmuşsa bu ayara aldırmadan geçersiz olabilir.',
	'FORM_SID_GUESTS'            => 'Misafir oturumları için bağlayıcı formlar',
	'FORM_SID_GUESTS_EXPLAIN'      => 'Eğer aktifse, oturum-dışı tutulacak misafirlere form işaret gösterecektir. Bu, bazı ISSler için problemlere neden olabilir.',
	'FORWARDED_FOR_VALID'                   => '<var>X_FORWARDED_FOR</var> başlığını doğrula',
	'FORWARDED_FOR_VALID_EXPLAIN'   => 'Oturumlar sadece, eğer önceki istek ile aynı <var>X_FORWARDED_FOR</var> başlığı gönderilirse devam edecektir. Yasaklamalar <var>X_FORWARDED_FOR</var> içindeki IP adreslerine karşı da kontrol edilecektir.',
	'IP_VALID'						=> 'Oturum IP onaylama',
	'IP_VALID_EXPLAIN'				=> 'Bir oturumda ne kadar kullanıcı IP numarasının onaylandığını belirlemek için kullanılır. <samp>Tümü</samp> seçeneği tüm adresler ile karşılaştırılır, <samp>A.B.C</samp> ilk olarak x.x.x, <samp>A.B</samp> ilk olarak x.x, <samp>Yok</samp> seçeneği kontrolü kapatır. IPv6 adreslerinde <samp>A.B.C</samp> ilk 4 blok ile karşılaştırılır ve <samp>A.B</samp> ilk 3 blokla karşılaştırılır.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Her bir IP adresi için en fazla giriş deneme sayısı',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Bir anti-spambot görevini tetiklemeden önce tek bir IP adresinden izin verilen giriş denemelerinin sayısı. IP adresleri tarafından anti-spambot görevini tetiklemeyi önlemek için 0 değerini girin.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP adresi giriş denemesi sona erme süresi',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Giriş denemeleri bu periyoddan sonra sona erecektir.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> '<var>X_FORWARDED_FOR</var> başlığı tarafından giriş denemeleri sınırı',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'IP adresi tarafından giriş denemeleri sınırının yerine <var>X_FORWARDED_FOR</var> değerleri tarafından sınır konacaktır. <br /><em><strong>Uyarı:</strong> Sadece, eğer bir proxy sunucusu çalıştırıyorsanız ve güvenilir değerler için <var>X_FORWARDED_FOR</var> ayarlıysa bunu açın.</em>',	
	'MAX_LOGIN_ATTEMPTS'			=> 'Her bir kullanıcı için en fazla giriş denemeleri sayısı',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'   => 'Anti-spambot görevini tetiklemeden önce tek bir hesap için izin verilen giriş denemelerinin sayısı. Kullanıcı hesapları için ayrı ayrı anti-spambot görevini tetiklemeyi önlemek istiyorsanız 0 değerini girin.',
	'NO_IP_VALIDATION'				=> 'Yok',
	'NO_REF_VALIDATION'            => 'Yok',
	'PASSWORD_TYPE'					=> 'Şifre zorluk derecesi',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Bir şifre ayarlanırken ya da değiştirilirken gerekli olan zorluk derecesinin nasıl olacağını belirler, bu ayarda yapılacak herhangi bir değişiklik önceden belirlenmiş şifreleri de kapsar.',
	'PASS_TYPE_ALPHA'				=> 'Harfler ve sayılar içermelidir',
	'PASS_TYPE_ANY'					=> 'Gerek yok',
	'PASS_TYPE_CASE'				=> 'Karışık bir halde olmalıdır',
	'PASS_TYPE_SYMBOL'				=> 'Semboller içermelidir',
	'REF_HOST'                  => 'Sadece host’u doğrula',
	'REF_PATH'                  => 'Ayrıca yolu da doğrula',
	'REFERRER_VALID'				=> 'Yönlendirici Doğrulaması',
	'REFERRER_VALID_EXPLAIN'		=> 'Eğer bu ayar etkinleştirilirse, POST isteklerinin yapıldığı yönlendiriciler (referrer) (diğer web sitelerinden gelen istekler) host/script yolu (path) ayarlarına karşı kontrol edilecektir. Bu işlem bir kaç farklı alan adı ve / veya harici girişler kullanan mesaj panoları için sorunlara neden olabilir.',
	'TPL_ALLOW_PHP'					=> 'Şablonlarda php’ye izin ver',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Eğer bu özellik açılırsa, <code>PHP</code> ve <code>INCLUDEPHP</code> ifadeleri tanınacak ve tema şablonlarının içerisine işlenecektir.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Mesaj panosu üzerinden kullanıcılarınıza e-posta gönderdiğinizde bu bilgi kullanılacaktır. Lütfen belirlediğiniz e-posta adresinin doğruluğundan emin olunuz, herhangi bir şekilde geri dönen ve ulaşamayan mesajlar bu belirttiğiniz e-posta adresine gönderilecektir. Eğer sunucunuz kendi doğal yapısındaki mail gönderme sistemini (php temelli) barındırmıyorsa, bunun yerine SMTP yolunu kullanarak e-posta gönderebilirsiniz. Bu durumda sunucunuzun belirlediği bir adres gerekebilir (bu bilgi için hosting firmasına danışın). Sunucunuz bir doğrulama istiyorsa (ve eğer sadece bu yapılacaksa) gerekli olan kullanıcı adını, şifreyi ve yetki metotunu girin.',

	'ADMIN_EMAIL'					=> 'Dönüş e-posta adresi',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Bu, teknik iletişim adresi şeklinde tüm e-postaların dönüş adresi olarak kullanılacaktır. Bu adres, e-postalarda her zaman <samp>Dönüş-Yolu</samp> ve <samp>Gönderici</samp> adresi olarak kullanılacaktır.',
	'BOARD_EMAIL_FORM'				=> 'Kullanıcılar mesaj panosu aracılığıyla e-posta göndersin',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Kullanıcıların e-posta adreslerini göstermek yerine, e-posta gönderilerini mesaj panosu aracılığıyla gerçekleştirirler.',
	'BOARD_HIDE_EMAILS'				=> 'E-posta adreslerini gizle',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Bu özellik e-posta adreslerini tamamen gizli tutar.',
	'CONTACT_EMAIL'					=> 'İletişim e-posta adresi',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Bu e-posta adresi, özel bir iletişim konusu gerektiren zamanlarda kullanılacaktır, örnek: spam, hatalı çıktı, vb. Bu adres, e-postalarda daima <samp>Kimden</samp> ve <samp>Kime</samp> adresi olarak kullanılır.',	
	'CONTACT_EMAIL_NAME'			=> 'İletişim adı',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'Bu ad, e-posta alıcılarının göreceği iletişim adıdır. Eğer bir iletişim adı kullanmak istemiyorsanız, bu alanı boş bırakın.',
	'EMAIL_FUNCTION_NAME'			=> 'E-posta fonksiyon ismi',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'PHP aracılığıyla posta gönderiminde kullanılacak e-posta fonksiyonu.',
	'EMAIL_PACKAGE_SIZE'			=> 'E-posta paket boyutu',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Bu, bir paketin içerisinden gönderilecek olan en fazla e-posta sayısıdır. Bu ayar dahili mesaj sırasına uygulanır; eğer teslim edilmeyen bildiri e-postaları ile ilgili sorunlarınız varsa bu ayarı 0 yapın.',
	'EMAIL_SIG'						=> 'E-posta imzası',
	'EMAIL_SIG_EXPLAIN'				=> 'Mesaj panosu tarafından gönderilen tüm e-postalara bu yazı eklenir.',
	'ENABLE_EMAIL'					=> 'Mesaj panosu genelinde e-posta gönderimini aç.',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Bu özellik kapatılırsa, mesaj panosu genelinde hiçbir e-posta gönderilemeyecektir. <em>Not: Kullanıcı ve yönetici hesap aktivasyonu ayarları bu özelliğin aktif olmasını gerekli tutar. Eğer şu anda aktivasyon ayarlarında “kullanıcı” ya da “yönetici” aktivasyonunu kullanıyorsanız, bu ayarı kapattığınızda kayıt olma işlevi de kapatılacaktır.</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP için doğrulama metodu',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Ancak kullanıcı adı ve şifre girildiğinde kullanılır, Bu metodun nasıl kullanılacağından emin değilseniz hosting firmanıza danışınız.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'GİRİŞ',
	'SMTP_PASSWORD'					=> 'SMTP şifresi',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Eğer SMTP sunucunuz istiyorsa sadece bir şifre girin. <em><strong>Uyarı:</strong> Bu şifre düz metin olarak veritabanında saklanır.</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP sunucu portu',
	'SMTP_PORT_EXPLAIN'				=> 'Sadece SMTP sunucunuzun farklı bir kullandığını biliyorsanız değiştiriniz.',
	'SMTP_SERVER'					=> 'SMTP sunucu adresi',
	'SMTP_SETTINGS'					=> 'SMTP ayarları',
	'SMTP_USERNAME'					=> 'SMTP kullanıcı adı',
	'SMTP_USERNAME_EXPLAIN'			=> 'Sadece SMTP sunucunuz kullanıcı adı istiyorsa girin.',
	'USE_SMTP'						=> 'E-posta için SMTP sunucusu kullan',
	'USE_SMTP_EXPLAIN'				=> '“Evet” seçilmesi durumunda, sunucunuzun yerel posta fonksiyonu yerine, isim verilmiş sunucu ile e-posta göndermek isterseniz veya zorundaysanız kullanılır.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Buradan anlık mesaj gönderme ve mesaj panosu notları için Jabber kullanımını açabilir ve kontrol edebilirsiniz. Jabber açık kaynak kodlu protokoldür ve bu yüzden herhangi bir kimse tarafından kullanılabilir. Bazı Jabber Sunucuları transports ve gateways içerirler. Bu durum size diğer networkler üzerindeki kullanıcılarla iletişim kurmanıza izin verir. Tüm sunucular olmasada destekledikleri Transports ve protokoller üzerindeki değişim, işletim tarafından transports u engelleyebilir. Lütfen kayıtlı hesap bilgilerini daha önceden girdiğinize emin olun - phpBB buraya girdiğiniz bilgileri kullanacaktır.',

	'JAB_ENABLE'				=> 'Jabber\'i aç',
	'JAB_ENABLE_EXPLAIN'		=> 'Jabber mesajlaşma ve haberleşme kullanımını açar.',
	'JAB_GTALK_NOTE'         => 'Not: GTalk çalışmayacaktır, çünkü <samp>dns_get_record</samp> özelliği bulunamıyor. Bu özellik PHP4 içerisinde mevcut değildir, ve Windows platformlarında yürütülemez. Şimdilik BSD-tabanlı sistemlerde (Mac OS dahil) çalışmaz.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber paket boyutu',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Bu, bir paketin içine gönderilecek olan mesaj sayısıdır. Eğer 0 olarak ayarlanırsa mesaj hemen gönderilecektir ve daha sonra gönderim için sıraya konulmayacaktır.',
	'JAB_PASSWORD'				=> 'Jabber şifresi',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Uyarı:</strong> Bu şifre düz metin olarak veritabanında saklanacaktır.</em>',
	'JAB_PORT'					=> 'Jabber portu',
	'JAB_PORT_EXPLAIN'			=> 'Portun 5222 olmadığını biliyorsanız burayı boş bırakın.',
	'JAB_SERVER'				=> 'Jabber sunucusu',
	'JAB_SERVER_EXPLAIN'		=> 'Sunucunuzun bir listesi için %sjabber.org%s adresine bakın.',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber ayarları başarıyla değiştirildi.',
	'JAB_USE_SSL'            => 'Bağlantı için SSL kullan',
	'JAB_USE_SSL_EXPLAIN'      => 'Eğer bu özellik aktifse, kabul ettirmek için güvenli bağlantı denenecektir. Eğer belirlenen port 5222 ise Jabber portu 5223 olarak değiştirilecektir.',
	'JAB_USERNAME'            => 'Jabber kullanıcı adı ya da JID',
	'JAB_USERNAME_EXPLAIN'      => 'Bir kullanıcı adı ya da geçerli bir JID belirtin. Kullanıcı adı doğruluk için kontrol edilmeyecektir. Eğer sadece bir kullanıcı adı belirttiyseniz, o zaman JID hesabınız yukarıda belirlediğiniz kullanıcı adı ve sunucu olacaktır. Aksi takdirde geçerli bir JID belirtin, örneğin user@jabber.org.',
));
