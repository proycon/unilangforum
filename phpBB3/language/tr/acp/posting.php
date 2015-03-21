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

// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode HTML yapısıyla neyin nasıl gösterileceği konusunda yapılan uygulamalardır. Bu sayfadan BBCode ekleyebilir, silebilir ve özel BBCode\'ları düzenleyebilirsiniz.',
	'ADD_BBCODE'				=> 'Yeni bir BBCode ekle',

	'BBCODE_DANGER'				=> 'Eklemeyi denediğiniz BBCode bir HTML niteliği içerisinde yanıltıcı bir {TEXT} tipi kullanıldığını gösteriyor. Bu XSS güvenlik sorunundan olabilir. Onun yerine daha başka tanımlayıcı {SIMPLETEXT} ya da {INTTEXT} tiplerini kullanmayı deneyin. Eğer ilgili riskleri anladıysanız ve kesinlikle kaçınılmaz olarak {TEXT} tipini kullanmayı düşünüyorsanız sadece ilerleyin.',
	'BBCODE_DANGER_PROCEED'		=> 'İlerle', //'I understand the risk',
	
	'BBCODE_ADDED'				=> 'BBCode başarıyla eklendi',
	'BBCODE_EDITED'				=> 'BBCode başarıyla düzenlendi',
	'BBCODE_DELETED'			=> 'BBCode başarıyla silindi.',	
	'BBCODE_NOT_EXIST'			=> 'Seçmiş olduğunuz BBCode mevcut değil',
	'BBCODE_HELPLINE'			=> 'Yardım satırı',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Bu alan BBcode üzerine fare ile gelindiğinde metin içerir.',
	'BBCODE_HELPLINE_TEXT'		=> 'Yardım satırı metni',
	'BBCODE_HELPLINE_TOO_LONG'   => 'Girdiğiniz yardım satırı çok uzun.',
	'BBCODE_INVALID_TAG_NAME'	=> 'Seçtiğiniz BBCode etiket adı zaten var.',
	'BBCODE_INVALID'         => 'BBCode\'unuz geçersiz bir form içinde yapıldı.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Özel BBCode\'unuz bir açık ve bir kapalı etiket içermelidir.', 
	'BBCODE_TAG'				=> 'Etiket',
	'BBCODE_TAG_TOO_LONG'		=> 'Seçtiğiniz etiket adı çok uzun.',
	'BBCODE_TAG_DEF_TOO_LONG'		=> 'Girdiğiniz etiket tanımı çok uzun, lütfen etiket tanımınızı kısaltın.',
	'BBCODE_USAGE'				=> 'BBCode kullanımı',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Buradan nasıl BBCode kullanılacağını belirleyebilirsiniz. Girmiş olduğunuz herhangi bir değişkene uygun gelen işareti değiştirin (%salta bakın%s).',

	'EXAMPLE'						=> 'Örnek:',
	'EXAMPLES'						=> 'Örnekler:',

	'HTML_REPLACEMENT'				=> 'HTML yenileme',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Buradan varsayılan HTML yenilemesini belirleyebilirsiniz. Yukarıda kullandığınız işaretleri geri koymayı unutmayın!',

	'TOKEN'					=> 'İşaret',
	'TOKENS'				=> 'İşaretler',
	'TOKENS_EXPLAIN'		=> 'İşaretler, kullanıcıların girdikleri kelimelerin mantıksal olarak anlamlandırılıp düzenlenmesidir. Örneğin mesajlarda kullanıcı tarafından girilen bir kelime bu kısımda tanımlanırsa kullanıcı bu kelimeyi yanlış yazsa bile, sistem öntanımlı olan bu kelime ile otomatik olarak düzeltir. Gerekli olduğunda aşağıdaki örnekte olduğu gibi çift tanımlılar arasından bir sayı eklenerekte kullanılabilir, örnek {TEXT1}, {TEXT2}.<br /><br />HTML yenileme sınırları içerisinde bu işaretleri herhangi bir dil dizisi olarakta language/ klasörü içerisinde kullanabilirsiniz. Mesela şu şekilde olabilir; {L_<em>&lt;STRINGNAME&gt;</em>} ve burada tanımlanan şekli <em>&lt;STRINGNAME&gt;</em> ise dil dosyasına eklenmesini istediğiniz yapıyla aynı olduğu görülür. Örneğin, {L_WROTE} “wrote” şeklinde gösterilecektir ya da yerel olarak kullanıcının tercümesine göre değişebilir.<br /><br /><strong>Not: Sadece aşağıda listelenen işaretler özel BBCode’lar dahilinde kullanılabilir.</strong>',
	'TOKEN_DEFINITION'		=> 'Bu ne olabilir?',
	'TOO_MANY_BBCODES'		=> 'Daha fazla BBCode yaratılamaz. Bir ya da daha fazla BBCode u kaldırarak tekrar deneyin',

	'tokens'	=>	array(
		'TEXT'			=> 'Herhangi bir metin, yabancı karakterler içerebilir, sayılar, vb… HTML etiketleri içerisinde bu işareti kullanmamalısınız. Bunun yerine IDENTIFIER, INTTEXT ya da SIMPLETEXT kullanmayı deneyin.',
		'SIMPLETEXT'   => 'Latin alfabesinden karakterler (A-Z), sayılar, boşluklar, virgüller, noktalar, eksi, artı, tire ve altçizgi',
		'INTTEXT'		=> 'Unicode harf karakterleri, sayılar, boşluklar, virgüller, noktalar, eksi, artı, tire, altçizgi ve boşluklar.',
		'IDENTIFIER'   => 'Latin alfabesinden karakterler (A-Z), sayılar, tire ve altçizgi',
		'NUMBER'		=> 'Sayı dizilerinin herhangi bir serisi',
		'EMAIL'			=> 'Geçerli e-posta adresi',
		'URL'			=> 'Herhangi bir protokolde geçerli URL kullanımı (http, ftp, gibi… javascript exploitleri için kullanılamaz). Hiç biri verilmezse, diziye “http://” ön adı verilir.',
		'LOCAL_URL'		=> 'Yerel bir URL adresi. URL adresi konu/başlık sayfasına bağlı olmalıdır ve sunucu ismi ya da protokolü içermemelidir, bağlantılar “%s” ön adı almalıdır.',
		'RELATIVE_URL'	=> 'Göreceli bir URL adresi. Bir URL adresinin eşleşen bölümleri için bunu kullanabilirsiniz, fakat dikkatli olun: tam URL adresi geçerli bir göreceli URL adresi olmalıdır. Mesaj panonuzun göreceli URL adreslerini kullanmak istediğiniz zaman, LOCAL_URL belirtecini kullanabilirsiniz.',
		'COLOR'			=> 'Bir HTML rengi, <samp>#FF1234</samp> şeklinde sayısal form içinde ya da bir <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS renk klavyesindeki</a> gibi olabilir, <samp>fuchsia</samp> veya <samp>InactiveBorder</samp> gibi de olabilir',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Bu sayfadan, kullanıcıların mesajlarına ve başlıklara koydukları ikonları ekleyebilecek, kaldırabilecek ve düzenleyebileceksiniz. Bu ikonlar forum listelenirken ya da başlıkları açarken görüntülenir. Yeni paket ikonları oluşturabilir ve yükleyebilirsiniz.',
	'ACP_SMILIES_EXPLAIN'	=> 'İfadeler bazen animasyonlu olarak duyguları gösteren küçük resimlerdir. Bu sayfada kullanıcıların mesajlarda ve özel mesajlarda kullandıkları ifadeleri ekleyebilir, kaldırabilir ya da düzenleyebilirsiniz. Yeni paket ifadelerini oluşturabilir ve yükleyebilirsiniz.',
	'ADD_SMILIES'			=> 'Çoklu ifadeler ekle',
	'ADD_SMILEY_CODE' => 'Ekstra ifade kodu ekle',
	'ADD_ICONS'				=> 'Çoklu ikonlar ekle',
	'AFTER_ICONS'			=> '%s sonrasında',
	'AFTER_SMILIES'			=> '%s sonrasında',

	'CODE'						=> 'Kod',
	'CURRENT_ICONS'				=> 'Var olan ikonlar',
	'CURRENT_ICONS_EXPLAIN'		=> 'Şu anki kurulu olan ikonlarla ne yapacağınızı seçin.',
	'CURRENT_SMILIES'			=> 'Var olan ifadeler',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Şu anki kurulu olan ifadelerle ne yapacağınızı seçin.',

	'DISPLAY_ON_POSTING'	=> 'Mesaj gönderme sayfasında göster',
	'DISPLAY_POSTING'         => 'Mesaj gönderme sayfasında',
	'DISPLAY_POSTING_NO'      => 'Mesaj gönderme sayfasında değil',

	'EDIT_ICONS'				=> 'İkonları Düzenle',
	'EDIT_SMILIES'				=> 'İfadeleri düzenle',
	'EMOTION'					=> 'Duygu',
	'EXPORT_ICONS'				=> 'icons.pak dosyası çıkar ve indir',
	'EXPORT_ICONS_EXPLAIN'		=> '%sBu bağlantıya tıkladığınızda, yüklediğiniz ikonlar için ayarlar <samp>icons.pak</samp> dosyası içerisinde paketlenecektir. Bu <samp>icons.pak</samp> ayar dosyası, ayrıca tüm ikonlarınızın bir <samp>.zip</samp> ya da <samp>.tgz</samp> dosyası kapsamında oluşturularak indirileceği zaman kullanılabilir%s.',
	'EXPORT_SMILIES'			=> 'smilies.pak dosyası çıkar ve indir',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sBu bağlantıya tıkladığınızda, yüklediğiniz ifadeler için ayarlar <samp>smilies.pak</samp> dosyası içerisinde paketlenecektir. Bu <samp>smilies.pak</samp> ayar dosyası, ayrıca tüm ifadelerinizin bir <samp>.zip</samp> ya da <samp>.tgz</samp> dosyası kapsamında oluşturularak indirileceği zaman kullanılabilir%s.', 

	'FIRST'			=> 'İlk',

	'ICONS_ADD'				=> 'Yeni bir ikon ekle',
	'ICONS_ADDED'			=> array(
		0	=> 'Hiç bir ikon eklenmedi.',
		1	=> 'İkon başarıyla eklendi.',
	),
	'ICONS_CONFIG'			=> 'İkon ayarları',
	'ICONS_DELETED'			=> 'İkon başarıyla kaldırıldı.',
	'ICONS_EDIT'			=> 'İkonu düzenle',
	'ICONS_EDITED'			=> array(
		0	=> 'Hiç bir ikon güncellenmedi.',
		1	=> 'İkon başarıyla güncellendi.',
	),
	'ICONS_HEIGHT'			=> 'İkon yüksekliği',
	'ICONS_IMAGE'			=> 'İkon resmi',
	'ICONS_IMPORTED'		=> 'İkon paketi başarıyla yüklendi.',
	'ICONS_IMPORT_SUCCESS'	=> 'İkon paketi başarıyla alındı',
	'ICONS_LOCATION'		=> 'İkon konumu',
	'ICONS_NOT_DISPLAYED'	=> 'Burada görülen ikonlar mesaj sayfasında gösterilmiyor',
	'ICONS_ORDER'			=> 'İkon düzeni',
	'ICONS_URL'				=> 'İkon resim dosyası',
	'ICONS_WIDTH'			=> 'İkon genişliği',
	'IMPORT_ICONS'			=> 'İkon paketi yükle',
	'IMPORT_SMILIES'		=> 'İfade paketi yükle',

	'KEEP_ALL'			=> 'Hepsini tut',

	'MASS_ADD_SMILIES'	=> 'Çoklu ifadeler ekle',

  'NO_ICONS_ADD'    => 'Eklemek için hiç bir ikon mevcut değil.', 
  'NO_ICONS_EDIT'   => 'Düzenlemek için hiç bir ikon mevcut değil.',
	'NO_ICONS_EXPORT'	=> 'Bir İkon paketi yaratmak için ikonlar yok.',
	'NO_ICONS_PAK'		=> 'Hiç bir ikon paketi bulunmuyor.',
	'NO_SMILIES_ADD'  => 'Eklemek için hiç bir ifade mevcut değil.', 
	'NO_SMILIES_EDIT'  => 'Düzenlemek için hiç bir ifade mevcut değil.',
	'NO_SMILIES_EXPORT'	=> 'Bir İfade paketi yaramak için ifadeler yok.',
	'NO_SMILIES_PAK'	=> 'İfade paketi bulunmuyor.',

	'PAK_FILE_NOT_READABLE'		=> '<samp>.pak</samp> dosyası okunamıyor',

	'REPLACE_MATCHES'	=> 'Benzerleri değiştir',

	'SELECT_PACKAGE'			=> 'Bir paket dosyası seçin',
	'SMILIES_ADD'				=> 'Yeni bir ifade ekle',
	'SMILIES_ADDED'				=> array(
		0	=> 'Hiç bir ifade eklenmedi.',
		1	=> 'İfade başarıyla eklendi.',
	),
	'SMILIES_CODE'				=> 'İfade Kodu',
	'SMILIES_CONFIG'			=> 'İfade ayarları',
	'SMILIES_DELETED'			=> 'İfade başarıyla kaldırıldı.',
	'SMILIES_EDIT'				=> 'İfadeyi düzenle',
	'SMILIE_NO_CODE'         => '“%s” ifadesi, hiç bir ifade kodu girilmediği için yoksayıldı.',
	'SMILIE_NO_EMOTION'         => '“%s” ifadesi, hiç bir ifade resmi girilmediği için yoksayıldı.',
	'SMILIE_NO_FILE'			=> '“%s” ifadesi, ifade dosyası kayıp olduğu için yoksayıldı.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Hiç bir ifade güncellenmedi.',
		1	=> 'İfade başarıyla güncellendi.',
	),
	'SMILIES_EMOTION'			=> 'Duygu',
	'SMILIES_HEIGHT'			=> 'İfade yüksekliği',
	'SMILIES_IMAGE'				=> 'İfade resmi',
	'SMILIES_IMPORTED'			=> 'İfade paketi başarıyla yüklendi.',
	'SMILIES_IMPORT_SUCCESS'	=> 'İfade paketi başarıyla alındı',
	'SMILIES_LOCATION'			=> 'İfade Konumu',
	'SMILIES_NOT_DISPLAYED'		=> 'Burada görülen ifadeler mesaj sayfasında gösterilmiyor',
	'SMILIES_ORDER'				=> 'İfade sıralaması',
	'SMILIES_URL'				=> 'İfade resim dosyası',
	'SMILIES_WIDTH'				=> 'İfade genişliği',
	'TOO_MANY_SMILIES'			=> array(
		1	=> '%d ifade sınırına ulaşıldı.',
	),

	'WRONG_PAK_TYPE'	=> 'Belirtilen paket uygun veriye sahip değil.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Buradan otomatik olarak sansürlenecek kelimeleri ekleyebilir, silebilir, değiştirebilirsiniz. Bu kelimeleri içeren kullanıcı adları ile kayıt olmaya izin verilmeye devam edilir. Joker olarak * karakterini kullanabilirsiniz, örn: *siklo* ansiklopedi kelimesini, siklo* siklon hecelerini, *siklo dersiklo hecelerini sansürleyecektir.',
	'ADD_WORD'				=> 'Yeni kelime ekle',

	'EDIT_WORD'		=> 'Kelime sansürü düzenle',
	'ENTER_WORD'	=> 'Bir kelime ve onun yerini alacak kelimeyi girmelisiniz',

	'NO_WORD'	=> 'Düzenlemek için kelime seçilmedi',

	'REPLACEMENT'	=> 'Yerine konulacak',

	'UPDATE_WORD'	=> 'Kelime sansürünü güncelle',

	'WORD'				=> 'Kelime',
	'WORD_ADDED'		=> 'Kelime sansürü başarıyla eklendi',
	'WORD_REMOVED'		=> 'Seçilen kelime sansürü başarıyla kaldırıldı',
	'WORD_UPDATED'		=> 'Seçilen kelime sansürü başarıyla güncellendi',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Bu formu kullanarak rütbeler üzerinde ekleme, düzenleme, izleme ve silme işlemi yapabilirsiniz. Ayrıca kendinize özel olarak rütbe oluşturabilirsiniz.',
	'ADD_RANK'				=> 'Yeni rütbe ekle',

	'MUST_SELECT_RANK'		=> 'Bir rütbe seçmelisiniz.',
	
	'NO_ASSIGNED_RANK'		=> 'Özel rütbe atanmadı.',
	'NO_RANK_TITLE'			=> 'Rütbe için bir başlık belirlenmedi.',
	'NO_UPDATE_RANKS'		=> 'Rütbe başarıyla silindi. Bu rütbeleri kullanan kullanıcıların hesapları henüz güncellenmedi. Bu hesaplar üzerindeki rütbeleri elle düzenlemelisiniz.',

	'RANK_ADDED'			=> 'Rütbe başarıyla eklendi.',
	'RANK_IMAGE'			=> 'Rütbe Resmi',
	'RANK_IMAGE_EXPLAIN'	=> 'Rütbeyi tanımlamak için bu küçük resmi kullanabilirsiniz. Dosyanın yolu phpBB klasörüne göre değişir.',
	'RANK_IMAGE_IN_USE'		=> '(Kullanımda)',
	'RANK_MINIMUM'			=> 'En Düşük Mesaj Sayısı',
	'RANK_REMOVED'			=> 'Rütbe başarıyla silindi.',
	'RANK_SPECIAL'			=> 'Özel rütbe olarak ayarla',
	'RANK_TITLE'			=> 'Rütbe başlığı',
	'RANK_UPDATED'			=> 'Rütbe başarıyla güncellendi.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Buradan kullanılmasına izin verilmeyecek kullanıcı adlarını kontrol edebilirsiniz. İzin verilmeyen kullanıcı adları joker olarak * karakteri içerebilir.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Bir kullanıcı adına izin vermeyeceğiniz zaman, kullanıcı adının içeriğindeki herhangi bir karakterle uyumlu olması için * karakterini joker olarak kullanabilirsiniz.',
	'ADD_DISALLOW_TITLE'	=> 'İzin verilmeyen bir kullanıcı adı ekle',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Bu listeden kullanıcı adı seçip gönder\'e tıklayarak izin verilmeyen bir kullanıcı adını kaldırabilirsiniz.',
	'DELETE_DISALLOW_TITLE'		=> 'İzin verilmeyen bir kullanıcı adını kaldır',
	'DISALLOWED_ALREADY'		=> 'Girdiğiniz kullanıcı adına zaten izin verilmiyor.',
	'DISALLOWED_DELETED'		=> 'Yasaklı kullanıcı adı başarıyla kaldırıldı',
	'DISALLOW_SUCCESSFUL'		=> 'Yasaklı kullanıcı adı başarıyla eklendi',

	'NO_DISALLOWED'				=> 'Yasaklı kullanıcı adı yok',
	'NO_USERNAME_SPECIFIED'		=> 'İşlemi gerçekleştirmek için bir kullanıcı ismi girmediniz ya da seçmediniz.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Burada raporlar içinde kullanılan sebepleri ve engellenmiş mesajları yönetebilirsiniz. Bir tane varsayılan sebep vardır(* işaretiyle gösterilmiş) ve bu kaldırılamaz. Uygun bir sebep yoksa bu sebep normal olarak özel mesajlarda kullanılır.',
	'ADD_NEW_REASON'		=> 'Yeni sebep ekle',
	'AVAILABLE_TITLES'		=> 'Yerleşik sebep başlıkları mevcut',
	
	'IS_NOT_TRANSLATED'		=> 'Sebebin yeri <strong>belirlenmedi</strong>',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Sebebin yeri <strong>belirlenmedi</strong>. Eğer yerel form belirlemek istiyorsanız, dil dosyaları bildiri sebepleri bölümünden doğru anahtar belirtin.',
	'IS_TRANSLATED'			=> 'Sebebin yeri belirlendi',
	'IS_TRANSLATED_EXPLAIN'		=> 'Sebebin yeri belirlendi. Eğer buraya girdiğiniz başlık dil dosyaları bildiri sebepleri bölümü içerisinde belirlendiyse, başlık ve açıklamanın yerel formu kullanılacaktır.',
	
	'NO_REASON'					=> 'Sebep bulunamadı',
	'NO_REASON_INFO'			=> 'Bir başlık belirlemeli ve bu sebebe uygun bir tanım yapılmalıdır.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Varsayılan sebep olan “Diğer” sebebini kaldıramazsınız.',

	'REASON_ADD'			=> 'Bildiri/yasaklama sebebi',
	'REASON_ADDED'			=> 'Bildiri/yasaklama sebebi başarıyla eklendi',
	'REASON_ALREADY_EXIST'	=> 'Bu sebep ile birlikte zaten böyle bir başlık var, lütfen bu sebep için başka bir başlık giriniz.',
	'REASON_DESCRIPTION'	=> 'Sebep Açıklaması',
	'REASON_DESC_TRANSLATED'	=> 'Gösterilecek sebep açıklaması',
	'REASON_EDIT'			=> 'Bildiri/yasaklama sebebini düzenle',
	'REASON_EDIT_EXPLAIN'	=> 'Buradan bir sebep ekleyebilir, düzenleyebilirsiniz. Sebep yerel sürüme tercüme edildiyse, burada girilen tanımlamanın yerine kullanılır.',
	'REASON_REMOVED'		=> 'Bildiri/yasaklama sebebi başarıyla kaldırıldı',
	'REASON_TITLE'			=> 'Sebep Başlığı',
	'REASON_TITLE_TRANSLATED'	=> 'Gösterilecek sebep başlığı',
	'REASON_UPDATED'		=> 'Bildiri/yasaklama sebebi başarıyla eklendi',

	'USED_IN_REPORTS'		=> 'Bildirilerde kullanılır',
));
