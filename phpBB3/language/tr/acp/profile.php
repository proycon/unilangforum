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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Özel profil alanı başarıyla eklendi',
	'ALPHA_DOTS'			=> 'Alfanümerik ve noktalar (periyotlar)',
	'ALPHA_ONLY'			=> 'Sadece alfanümerik',
	'ALPHA_SPACERS'			=> 'Alfanümerik ve boşluk',
	'ALPHA_UNDERSCORE'		=> 'Alfanümerik ve alt çizgiler',
	'ALPHA_PUNCTUATION'		=> 'Alfanümerik ve virgül, noktalar, alt çizgi ve bir harf ile başlayan tireler',	
	'ALWAYS_TODAY'			=> 'Her zaman geçerli tarih',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Ayarlarınızı şimdi girin',
	'BOOL_TYPE_EXPLAIN'		=> 'Seçme kutusu veya radyo butonlarından birini seçerek tip belirleyin. Eğer bir kullanıcı için işaret verildiyse sadece bir seçme kutusu gösterilecektir. Bu durumda <strong>ikinci</strong> dil seçeneği kullanılacaktır. Radyo butonları onların değeri önemsenmeden gösterilecektir.',

	'CHANGED_PROFILE_FIELD'		=> 'Profil alanı başarıyla değiştirildi',
	'CHARS_ANY'					=> 'Herhangi bir karakter',
	'CHECKBOX'					=> 'Seçme kutusu',
	'COLUMNS'					=> 'Sütunlar',
	'CP_LANG_DEFAULT_VALUE'		=> 'Varsayılan değer',
	'CP_LANG_EXPLAIN'			=> 'Alan açıklaması',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Kullanıcıya sunulacak bu alan için açıklama.',
	'CP_LANG_NAME'				=> 'Kullanıcıya sunulacak alan adı/başlığı',
	'CP_LANG_OPTIONS'			=> 'Ayarlar',
	'CREATE_NEW_FIELD'			=> 'Yeni alan oluştur',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'En az bir özel profil alanı şu ana kadar tercüme edilmedi. Lütfen “Tercüme et” bağlantısına tıklayarak istenilen bilgileri girin.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Varsayılan dil [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Bu profil alanına göre varsayılan dil için dil girdileri doldurulmadı.',
	'DEFAULT_VALUE'					=> 'Varsayılan değer',
	'DELETE_PROFILE_FIELD'			=> 'Profil alanını sil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Bu profil alanını silmek istediğinize emin misiniz?',
	'DISPLAY_AT_PROFILE'			=> 'Kullanıcı kontrol panelinde göster',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Kullanıcı, kullanıcı kontrol panelinden bu profil alanını değiştirebilir.',
	'DISPLAY_AT_REGISTER'			=> 'Kayıt ekranında göster',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Eğer bu özellik açık olursa; alan, kayıt ekranında gösterilecektir.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Üye listesi ekranında göster',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Eğer bu özellik açık olursa; alan, üye listesi ekranındaki kullanıcı satırlarında gösterilecektir.',	
	'DISPLAY_ON_PM'					=> 'Özel mesaj görüntüleme ekranında göster',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Eğer bu özellik açık olursa alan, özel mesaj ekranındaki mini-profil içerisinde gösterilecektir.',
	'DISPLAY_ON_VT'					=> 'Başlık görüntüleme ekranında göster',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Eğer bu seçenek aktif edilirse, alan başlık ekranındaki mini-profil içerisinde gösterilecektir.',
	'DISPLAY_PROFILE_FIELD'			=> 'Profil alanını herkese göster',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Profil alanı, yüklü ayarların içerisinde izin verilen tüm yerlerde gösterilecektir. Bunu “hayır” olarak ayarlarsanız profil alanı, başlık sayfalarından, profillerden ve üye listesinden gizlenecektir.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Seçeneklerinizi şimdi girin, her satırda bir seçenek olmalıdır.',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Not: Seçeneklerinizin metnini değiştirebilirsiniz ve ayrıca sonuna yeni seçenekler ekleyebilirsiniz. Var olan seçeneklerin arasına yeni seçenekler eklenmesi tavsiye edilmez - bu, kullanıcılarınıza hatalı seçenekler tanımlanmasına yol açabilir. Ayrıca aralardaki seçenekleri silerseniz de bu hata meydana gelebilir. Kullanıcılara tanımlanan seçenekleri varsayılana geri çevirmek için bu maddeleri şimdi en sondan başlayarak silin.',
	'EMPTY_FIELD_IDENT'			=> 'Boş alan adı',
	'EMPTY_USER_FIELD_NAME'		=> 'Kullanıcıya sunulacak alan adı boş',
	'ENTRIES'					=> 'Girdiler',
	'EVERYTHING_OK'				=> 'Her şey TAMAM',

 	'FIELD_BOOL'				=> 'Bağlaçlar (Evet/Hayır)',
	'FIELD_CONTACT_DESC'		=> 'İletişim açıklaması',
	'FIELD_CONTACT_URL'			=> 'İletişim bağlantısı',
	'FIELD_DATE'				=> 'Tarih',
	'FIELD_DESCRIPTION'			=> 'Alan Açıklaması',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Kullanıcıya sunulacak bu alan için açıklama.',
	'FIELD_DROPDOWN'			=> 'Açılır liste kutusu',
	'FIELD_GOOGLEPLUS'			=> 'Google+',	
	'FIELD_IDENT'				=> 'Alan kimliği',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Seçilen alan kimliği zaten mevcut. Lütfen başka bir ad seçin.',
	'FIELD_IDENT_EXPLAIN'		=> 'Alan kimliği, veritabanı ve şablonlar içerisinde profil alanını tanımlamak için kullanılacak olan bir addır.',
	'FIELD_INT'					=> 'Sayılar',	
	'FIELD_IS_CONTACT'			=> 'Bir iletişim alanı olarak alanı göster',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'İletişim alanları, kullanıcı profilinin iletişim bölümünde; ve bundan farklı olarak mesajlar ile özel mesajlardan sonra mini profil içerisinde gösterilir. Kullanıcı tarafından sağlanan bir değer ile değiştirilmesi için yer tutucu bir değişken olarak <samp>%s</samp> kullanabilirsiniz.',
	'FIELD_LENGTH'				=> 'Girdi kutusunun uzunluğu',
	'FIELD_NOT_FOUND'			=> 'Profil alanı bulunamadı',
	'FIELD_STRING'				=> 'Tek yazı alanı',
	'FIELD_TEXT'				=> 'Yazı alanı',
	'FIELD_TYPE'				=> 'Alan tipi',
	'FIELD_TYPE_EXPLAIN'		=> 'Alan tipini daha sonra değiştiremezsiniz.',
	'FIELD_URL'					=> 'URL (Bağlantı)',	
	'FIELD_VALIDATION'			=> 'Alan doğrulaması',
	'FIRST_OPTION'				=> 'İlk seçenek',

	'HIDE_PROFILE_FIELD'			=> 'Gizli profil alanı',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Kullanıcının kendisi dışındaki tüm diğer kullanıcılardan profil alanı gizlenir, yöneticiler ve moderatörler bu alanı görebilirler. Eğer kullanıcı kontrol panelindeki Göster seçeneği kapalıysa, kullanıcı bu alanı göremeyecek, değiştiremeyecektir ve alan sadece yöneticiler tarafından değiştirilebilecektir.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Alan adı sadece a-z arası, tümü küçük harf ve _ işaretini içerebilir',
	'INVALID_FIELD_IDENT_LEN'	=> 'Alan tanımı sadece 17 karakter uzunluğunda olabilir',
	'ISO_LANGUAGE'				=> 'Dil [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Dil özel seçenekleri [<strong>%s</strong>]',
 
	'LETTER_NUM_DOTS'			=> 'Herhangi harfler, sayılar ve noktalar (dönemler)',
	'LETTER_NUM_ONLY'			=> 'Herhangi harfler ve sayılar',
	'LETTER_NUM_PUNCTUATION'	=> 'Herhangi harfler, sayılar, virgül, noktalar, alt çizgiler ve herhangi bir harfle başlayan tireler',
	'LETTER_NUM_SPACERS'		=> 'Herhangi harfler, sayılar ve boşluklar',
	'LETTER_NUM_UNDERSCORE'		=> 'Herhangi harfler, sayılar ve alt çizgiler',

	'MAX_FIELD_CHARS'		=> 'En yüksek karakter sayısı',
	'MAX_FIELD_NUMBER'		=> 'En yüksek izin verilen sayı',
	'MIN_FIELD_CHARS'		=> 'En düşük karakter sayısı',
	'MIN_FIELD_NUMBER'		=> 'En düşük izin verilen sayı',

	'NO_FIELD_ENTRIES'			=> 'Girdi belirtilmedi',
	'NO_FIELD_ID'				=> 'Alan ID\'si belirtilmedi',
	'NO_FIELD_TYPE'				=> 'Alan tipi belirtilmedi',
	'NO_VALUE_OPTION'			=> 'Girilmeyen değere eşit seçenek',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Belirtilmeyen bir girdi için değer. Eğer alan, doldurulması zorunlu bir alansa ve buradaki seçenek seçilirse kullanıcı bir hata alacaktır.',
	'NUMBERS_ONLY'				=> 'Sadece rakamlar (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Temel ayarlar',
	'PROFILE_FIELD_ACTIVATED'	=> 'Profil alanı başarıyla aktif edildi',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Profil alanı başarıyla deaktif edildi',
	'PROFILE_LANG_OPTIONS'		=> 'Dil özel ayarları',
	'PROFILE_TYPE_OPTIONS'		=> 'Profil tipi özel ayarları',

	'RADIO_BUTTONS'				=> 'Radyo butonları',
	'REMOVED_PROFILE_FIELD'		=> 'Profil alanı başarıyla silindi.',
	'REQUIRED_FIELD'			=> 'Gerekli alan',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Kullanıcı ya da yönetici tarafından belirlenen veya doldurulması gereken zorunlu profil alanı. Eğer kayıt ekranında göster seçeneği aktifse, alan sadece kullanıcı kendi profilini düzenlediğinde istenecektir.',
	'ROWS'						=> 'Satırlar',

	'SAVE'							=> 'Kaydet',
	'SECOND_OPTION'					=> 'İkinci seçenek',
	'SHOW_NOVALUE_FIELD'			=> 'Eğer hiç bir değer seçilmemişse alanı göster',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Eğer profil alanının gösterilmesi zorunluyken isteğe bağlı alanlar için hiç bir değer seçilmemişse ya da gerekli alanlar için hiç bir değer seçilmemişse, profil alanının gösterilip gösterilemeyeceğini belirler.',	
	'STEP_1_EXPLAIN_CREATE'			=> 'Buradan yeni profil alanınızın ilk temel parametrelerini girebilirsiniz. Bu bilgiler ikinci adımda kalan seçenekleri ayarlarken, profil alanınıza daha fazla ince ayar ve önizleme yaparken gereklidir.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Buradan profil alanınızın ilk temel parametrelerini değiştirebilirsiniz. İlgili seçenekler ikinci adımda yeniden hesaplanacaktır.',
	'STEP_1_TITLE_CREATE'			=> 'Profil alanı ekle',
	'STEP_1_TITLE_EDIT'				=> 'Profil alanı düzenle',
	'STEP_2_EXPLAIN_CREATE'			=> 'Buradan ayarlamak istediğiniz bazı özel seçenekleri belirleyebilirsiniz.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Buradan bazı özel seçenekleri değiştirebilirsiniz.<br /><strong>Not: Profil alanlarında yapılan değişiklikler kullanıcı tarafından daha önce girilen profil alanlarını etkilemeyecektir.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Profil tipi özel ayarları',
	'STEP_2_TITLE_EDIT'				=> 'Profil tipi özel ayarları',
	'STEP_3_EXPLAIN_CREATE'			=> 'Yüklenmiş bir mesaj panosu dilinden daha fazlasına sahip olduktan sonra, kalan dil ögelerinide doldurun. Profil alanı varsayılan aktif dil ile çalışacaktır, kalan dil ögelerini daha sonrada doldurabilirsiniz.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Yüklenmiş bir mesaj panosu dilinden daha fazlasına sahip olduktan sonra, kalan dil ögelerinide değiştirebilir ya da ekleyebilirsiniz. Profil alanı varsayılan aktif dil ile çalışacaktır.',
	'STEP_3_TITLE_CREATE'			=> 'Kalıcı dil tanımlamaları',
	'STEP_3_TITLE_EDIT'				=> 'Dil tanımlamaları',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Görüntülenecek varsayılan ifadeyi girin, bu bir varsayılan değerdir. İlk alanda boş görüntülenmesini istiyorsanız burayı boş bırakın.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Görüntülenecek varsayılan metni girin, bu bir varsayılan değerdir. İlk alanda boş görüntülenmesini istiyorsanız burayı boş bırakın.',
	'TRANSLATE'						=> 'Tercüme et',

	'USER_FIELD_NAME'	=> 'Kullanıcıya sunulacak alan adı/başlığı',

	'VISIBILITY_OPTION'				=> 'Görülebilir seçenekler',
));
