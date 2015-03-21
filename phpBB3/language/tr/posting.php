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
	'ADD_ATTACHMENT'			=> 'Dosya eki yükle',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Bir veya daha fazla dosya eklemek istiyorsanız lütfen alttaki açıklamaları doldurun.',
	'ADD_FILE'					=> 'Dosya ekle',
	'ADD_POLL'					=> 'Anket oluştur',
	'ADD_POLL_EXPLAIN'			=> 'Eğer başlığa bir anket eklemek istemiyorsanız bu alanları boş bırakın.',
	'ALREADY_DELETED'			=> 'Üzgünüz fakat bu mesaj zaten silindi.',
	'ATTACH_DISK_FULL'			=> 'Bu dosya ekini gönderebilmek için yeterli boş disk alanı yok.',
	'ATTACH_QUOTA_REACHED'		=> 'Üzgünüz, mesaj panosu dosya eki kotası aşıldı.',
	'ATTACH_SIG'				=> 'İmza ekle (imzalar KKP yoluyla değiştirilebilir)',

	'BBCODE_A_HELP'				=> 'Satır içi dosya eki yükleme: [attachment=]dosyaadı.uzantı[/attachment]',
	'BBCODE_B_HELP'				=> 'Kalın yazı: [b]metin[/b]',
	'BBCODE_C_HELP'				=> 'Kod görüntüsü: [code]kod[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=yükseklik,genişlik]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Font boyutu: [size=85]küçük metin[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>KAPALI</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>AÇIK</em>',
	'BBCODE_I_HELP'				=> 'İtalik yazı: [i]metin[/i]',
	'BBCODE_L_HELP'				=> 'Liste: [list][*]metin[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Liste maddesi: [*]metin',
	'BBCODE_O_HELP'				=> 'Sıralı liste: örn. [list=1][*]İlk nokta[/list] ya da [list=a][*]a noktası[/list]',
	'BBCODE_P_HELP'				=> 'Resim ekle: [img]http://resim_url[/img]',
	'BBCODE_Q_HELP'				=> 'Alıntı yazısı: [quote]metin[/quote]',
	'BBCODE_S_HELP'				=> 'Font rengi: [color=red]metin[/color] ya da [color=#FF0000]metin[/color]',
	'BBCODE_U_HELP'				=> 'Altı çizgili yazı: [u]metin[/u]',
	'BBCODE_W_HELP'				=> 'URL Ekle: [url]http://url[/url] veya [url=http://url]URL metni[/url]',
	'BBCODE_Y_HELP'				=> 'Liste: Liste ögesi ekle',
	'BUMP_ERROR'				=> 'Son mesajınızdan bu kadar kısa bir süre içinde bu başlığı darbeleyemezsiniz.',

	'CANNOT_DELETE_REPLIED'		=> 'Üzgünüz, fakat sadece cevap gelmeyen mesajları silebilirsiniz.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Bu mesaj kilitlendi. Bu yüzden düzenleyemezsiniz.',
	'CANNOT_EDIT_TIME'			=> 'Bu mesajı düzenleyemez veya silemezsiniz.',
	'CANNOT_POST_ANNOUNCE'		=> 'Üzgünüz fakat duyurular gönderemezsiniz.',	
	'CANNOT_POST_STICKY'		=> 'Üzgünüz fakat sabit başlıklar gönderemezsiniz.',
	'CHANGE_TOPIC_TO'			=> 'Başlık tipini değiştir',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Mesajınız %1$d karakter içeriyor.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'İmzanız %1$d karakter içeriyor.',
	),	
	'CLOSE_TAGS'				=> 'Etiketleri kapat',
	'CURRENT_TOPIC'				=> 'Şu anki başlık',

	'DELETE_FILE'				=> 'Dosyayı sil',
	'DELETE_MESSAGE'			=> 'Mesajı sil',
	'DELETE_MESSAGE_CONFIRM'	=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_OWN_POSTS'			=> 'Üzgünüz fakat sadece kendi mesajlarınızı silebilirsiniz.',
	'DELETE_PERMANENTLY'		=> 'Kalıcı olarak sil',
	'DELETE_POST_CONFIRM'		=> 'Bu mesajı silmek istediğinize emin misiniz?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Bu mesajı <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DELETE_POST_PERMANENTLY'	=> 'Bu mesaj kalıcı olarak silinirse tekrar geri getirilemez',
	'DELETE_POSTS_CONFIRM'		=> 'Bu mesajları silmek istediğinize emin misiniz?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Bu mesajları <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DELETE_REASON'				=> 'Silme nedeni',
	'DELETE_REASON_EXPLAIN'		=> 'Silmek için belirlediğiniz bu sebep moderatörler tarafından görüntülenebilecektir.',
	'DELETE_POST_WARN'			=> 'Bu mesajı sil',
	'DELETE_TOPIC_CONFIRM'		=> 'Bu başlığı silmek istediğinize emin misiniz?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Bu başlık kalıcı olarak silinirse tekrar geri getirilemez',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Bu başlığı <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DELETE_TOPICS_CONFIRM'		=> 'Bu başlıkları silmek istediğinize emin misiniz?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Bu başlıkları <strong>kalıcı olarak</strong> silmek istediğinize emin misiniz?',
	'DISABLE_BBCODE'			=> 'BBCode kullanma',
	'DISABLE_MAGIC_URL'			=> 'Otomatik olarak belirlenen URL bağlantılarını kapat',
	'DISABLE_SMILIES'			=> 'İfadeleri kullanma',
	'DISALLOWED_CONTENT'      => 'Yükleme kabul edilmedi. Çünkü yüklenen dosya olası bir saldırı taşıyıcısı olarak belirlendi.',
	'DISALLOWED_EXTENSION'		=> '%s uzantısı izinli değil.',
	'DRAFT_LOADED'				=> 'Mesaj gönderme alanı içerisine taslak yüklendi, isterseniz mesajınızı şimdi sonlandırabilirsiniz.<br />Taslağınız bu mesajı gönderdikten sonra silinecektir.',
	'DRAFT_LOADED_PM'    => 'Mesaj gönderme alanı içerisine taslak yüklendi, isterseniz özel mesajınızı şimdi sonlandırabilirsiniz.<br />Taslağınız bu özel mesajı gönderdikten sonra silinecektir.',
	'DRAFT_SAVED'				=> 'Taslak başarıyla kaydedildi.',
	'DRAFT_TITLE'				=> 'Taslak başlığı',

	'EDIT_REASON'				=> 'Bu mesajı düzenleme sebebi',
	'EMPTY_FILEUPLOAD'			=> 'Yüklenilen dosya boş.',
	'EMPTY_MESSAGE'				=> 'Göndermek için bir mesaj girmelisiniz.',
	'EMPTY_REMOTE_DATA'			=> 'Dosya yüklenemedi, lütfen dosyayı elle tekrar yüklemeyi deneyin.',

	'FLASH_IS_OFF'				=> '[flash] <em>KAPALI</em>',
	'FLASH_IS_ON'				=> '[flash] <em>AÇIK</em>',
	'FLOOD_ERROR'				=> 'Son mesajınızdan bu kadar kısa süre içinde diğer bir mesaj gönderemezsiniz.',
	'FONT_COLOR'				=> 'Font rengi',
	'FONT_COLOR_HIDE'			=> 'Font rengini gizle',
	'FONT_HUGE'					=> 'Kocaman',
	'FONT_LARGE'				=> 'Büyük',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Font boyutu',
	'FONT_SMALL'				=> 'Küçük',
	'FONT_TINY'					=> 'Ufacık',

	'GENERAL_UPLOAD_ERROR'		=> 'Dosya eki %s dizinine yüklenemiyor.',

	'IMAGES_ARE_OFF'			=> '[img] <em>KAPALI</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>AÇIK</em>',
	'INVALID_FILENAME'			=> '%s hatalı bir dosya adı.',

	'LOAD'						=> 'Yükle',
	'LOAD_DRAFT'				=> 'Taslağı yükle',
	'LOAD_DRAFT_EXPLAIN'		=> 'Buradan taslak seçerek istediğiniz yazıma devam edebilirsiniz. Şu anki mesajınız iptal olacaktır, şu anki tüm mesaj içeriği silinecektir. Kullanıcı Kontrol Panelinizden taslakları görüntüleyebilir, düzenleyebilir ve silebilirsiniz.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Bu forumdaki başlıkları darbelemek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Bu forumdaki mesajları silmek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_POST'		=> 'Bu foruma mesaj göndermek için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Bu forumdaki mesajları alıntı yapmak için giriş yapmalısınız.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Bu forumdaki başlıklara cevap vermek için giriş yapmalısınız.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Fontları sadece en yüksek %d boyutuna kadar kullanabilirsiniz.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Flash dosyalarınız en fazla %d piksel yüksekliğinde olabilir.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Flash dosyalarınız en fazla %d piksel genişliğinde olabilir.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Resimleriniz en fazla %1$d piksel yüksekliğinde olabilir.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Resimleriniz en fazla %d piksel genişliğinde olabilir.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Buraya mesajınızı girin, mesajınız <strong>%d</strong> karakterden fazlasını içermemelidir.',
	),
	'MESSAGE_DELETED'			=> 'Bu mesaj başarıyla silindi.',
	'MORE_SMILIES'				=> 'Daha fazla ifade görüntüle',

	'NOTIFY_REPLY'				=> 'Mesaja cevap geldiğinde bana bildir',
	'NOT_UPLOADED'				=> 'Dosya yüklenemedi.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Var olan anket seçeneklerini silemezsiniz.',
	'NO_PM_ICON'				=> 'ÖM ikonu yok',
	'NO_POLL_TITLE'				=> 'Bir anket başlığı girmelisiniz.',
	'NO_POST'					=> 'İstenilen mesaj bulunmuyor.',
	'NO_POST_MODE'				=> 'Hiç bir mesaj modu belirtilmedi.',

	'PARTIAL_UPLOAD'			=> 'Yüklenilen dosya sadece kısmen yüklendi.',
	'PHP_SIZE_NA'				=> 'Dosya ekinin dosya boyutu çok büyük.<br />PHP tarafından php.ini dosyasında belirlenen en yüksek boyut aşılamıyor.',
	'PHP_SIZE_OVERRUN'			=> 'Dosya ekinin dosya boyutu çok büyük, en fazla yüklenebilen boyut %1$d %2$s.<br />Not: Bu ayar php.ini dosyasında yapılmıştır ve üzerine yazılamaz.',
	'PLACE_INLINE'				=> 'Satır içine yerleştir',
	'POLL_DELETE'				=> 'Anketi sil',
	'POLL_FOR'					=> 'Anketin çalışma süresi',
	'POLL_FOR_EXPLAIN'			=> 'Anket süresinin hiç bitmemesi için 0 yazın.',
	'POLL_MAX_OPTIONS'			=> 'Kullanıcı başına seçenek',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Bu, her bir kullanıcının oy verirken seçebileceği seçenek sayısıdır..',
	'POLL_OPTIONS'				=> 'Anket seçenekleri',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Her bir satıra bir seçenek yerleştirin. <strong>%d</strong> seçenek girebilirsiniz.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Her bir satıra bir seçenek yerleştirin. <strong>%d</strong> seçenek girebilirsiniz. Eğer seçenekler ekler ya da kaldırırsanız önceden kullanılan tüm oylar sıfırlanacaktır.',
	),
	'POLL_QUESTION'				=> 'Anket sorusu',
	'POLL_TITLE_TOO_LONG'		=> 'Anket başlığı 100 karakterden daha az karakter içermelidir.',
 	'POLL_TITLE_COMP_TOO_LONG'	=> 'Anket başlığınızın dilbilgisel olarak boyutu çok geniş, BBCode ya da ifadeleri kaldırmayı dikkate alın.',
	'POLL_VOTE_CHANGE'			=> 'Tekrar oylamaya izin ver',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Eğer bunu aktif ederseniz kullanıcılar kendi oylarını değiştirebileceklerdir.',
	'POSTED_ATTACHMENTS'		=> 'Gönderilen dosya ekleri',
	'POST_APPROVAL_NOTIFY'      => 'Mesajınız onaylandığı zaman bildiri alacaksınız.',
	'POST_CONFIRMATION'			=> 'Mesajı onayla',
	'POST_CONFIRM_EXPLAIN'		=> 'Otomatik mesajları engelleyebilmek için bu mesaj panosu bir onay kodu girmenizi istiyor. Alttaki resmin içerisinde gösterilen kodu görmelisiniz. Eğer kodu bozuk görüyor veya okuyamıyorsanız lütfen %sMesaj Panosu Yöneticisi%s ile iletişime geçin.',
	'POST_DELETED'				=> 'Bu mesaj başarıyla silindi.',
	'POST_EDITED'				=> 'Bu mesaj başarıyla düzenlendi.',
	'POST_EDITED_MOD'			=> 'Bu mesaj başarıyla düzenlendi, fakat görüntülenebilmesi için önce bir moderatör tarafından onaylanması gerekiyor.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Mesaj ikonu',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Mesaj incelemesi',
	'POST_REVIEW_EDIT'			=> 'Mesaj incelemesi',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Bu başlık sizin düzenlemeniz esnasında başka bir kullanıcı tarafından düzenlendi. Dilerseniz bu mesajın şu anki durumunu inceleyebilir ve düzenlemelerinizi ayarlayabilirsiniz.',
	'POST_REVIEW_EXPLAIN'		=> 'Bu başlığa en az bir yeni mesaj gönderildi. Bunun ışığında dilerseniz mesajınızı inceleyebilirsiniz.',
	'POST_STORED'				=> 'Bu mesaj başarıyla gönderildi.',
	'POST_STORED_MOD'			=> 'Bu mesaj başarıyla gönderildi, fakat görüntülenebilmesi için önce bir moderatör tarafından onaylanması gerekiyor.',
	'POST_TOPIC_AS'				=> 'Farklı başlık gönder',
	'PROGRESS_BAR'				=> 'İlerleme çubuğu',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Birbiri içine sadece %d alıntı yerleştirebilirsiniz.',
	),
	'QUOTE_NO_NESTING'			=> 'Birbiri içine alıntılar yerleştiremezsiniz.',	

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Belirtilen dosya yüklenemedi çünkü istek zaman aşımına uğradı.',
	'SAVE'						=> 'Kaydet',
	'SAVE_DATE'					=> 'Kaydedilen tarih',
	'SAVE_DRAFT'				=> 'Taslağı kaydet',
	'SAVE_DRAFT_CONFIRM'		=> 'Not: Kaydedilen taslaklar sadece mesajı ve konuyu içermektedir, başka diğer ögeler silinecektir. Taslağınızı şimdi kaydetmek istiyor musunuz?',
	'SMILIES'					=> 'İfadeler',
	'SMILIES_ARE_OFF'			=> 'İfadeler <em>KAPALI</em>',
	'SMILIES_ARE_ON'			=> 'İfadeler <em>AÇIK</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'		=> 'Sabit/Duyuru zaman limiti',
	'STICK_TOPIC_FOR'			=> 'Başlık sabitleme süresi',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Sabit/Duyuru süresinin hiç bitmemesi için 0 yazın. Not: Bu sayı mesajın tarihine göredir.',
	'STYLES_TIP'				=> 'Tip: Seçilmiş metine stiller daha kolay uygulanabilir.',

	'TOO_FEW_CHARS'				=> 'Mesajınız çok az karakter içeriyor.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'En az %1$d karakter girmelisiniz.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'En az iki anket seçeneği girmelisiniz.',
	'TOO_MANY_ATTACHMENTS'		=> 'Başka bir dosya eki eklenemiyor, en fazla %d tane eklenebilir.',
	'TOO_MANY_CHARS'			=> 'Mesajınız çok fazla karakter içeriyor.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		1	=> 'En fazla izin verilen karakter sayısı %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Çok fazla anket seçeneği girmeyi denediniz.',
	'TOO_MANY_SMILIES'			=> 'Mesajınız çok fazla ifade içeriyor. İzin verilen en fazla ifade sayısı %d.',
	'TOO_MANY_URLS'				=> 'Mesajınız çok fazla url içeriyor. İzin verilen en fazla URL sayısı %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Önceden var olan anket seçeneklerinden her kullanıcı için daha fazla seçenek belirleyemezsiniz.',
	'TOPIC_BUMPED'				=> 'Başlık başarıyla darbelendi.',

	'UNAUTHORISED_BBCODE'		=> 'Bazı BBCode’ları kullanamazsınız: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Bu başlığı globalden tekrar normal başlığa çevirmek için, bu başlığın görüntülenmesini istediğiniz forumu seçmelisiniz',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Mesajınız desteklenmeyen karakterler içeriyor:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Konunuz desteklenmeyen karakterler içeriyor:<br />%s',	
	'UPDATE_COMMENT'			=> 'Yorumu güncelle',
	'URL_INVALID'				=> 'Belirttiğiniz URL hatalı.',
	'URL_NOT_FOUND'				=> 'Belirtilen dosya bulunmuyor.',
	'URL_IS_OFF'				=> '[url] <em>KAPALI</em>',
	'URL_IS_ON'					=> '[url] <em>AÇIK</em>',
	'USER_CANNOT_BUMP'			=> 'Bu forumdaki başlıkları darbeleyemezsiniz.',
	'USER_CANNOT_DELETE'		=> 'Bu forumdaki mesajları silemezsiniz.',
	'USER_CANNOT_EDIT'			=> 'Bu forumdaki mesajları düzenleyemezsiniz.',
	'USER_CANNOT_REPLY'			=> 'Bu foruma cevap gönderemezsiniz.',
	'USER_CANNOT_FORUM_POST'	=> 'Bu forumda mesaj işlemlerini forum tipi desteklemediği için yapamazsınız.',

	'VIEW_MESSAGE'				=> '%sGönderdiğiniz mesajınızı görüntüleyin%s',
	'VIEW_PRIVATE_MESSAGE'      => '%sGönderdiğiniz özel mesajınızı görüntüleyin%s',

	'WRONG_FILESIZE'			=> 'Dosya çok büyük, en fazla izin verilen boyutlar %1$d %2$s.',
	'WRONG_SIZE'				=> 'Resim en düşük %1$s genişliğinde, %2$s yüksekliğinde ve en fazla %3$s genişliğinde ve %4$s yüksekliğinde olmalıdır. Eklenen resim %5$s genişliğinde ve %6$s yüksekliğindedir.',
));
