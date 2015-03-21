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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Buradan arama uygulama indekslerini yönetebilirsiniz. Bir uygulamayı normal olarak kullanmadan önce kullanmadığınızın tüm indekslerini silmelisiniz. Arama ayarlarının bazılarını değiştirdikten sonra (ör. en düşük/en yüksek karakter sayısı) bu değişikliklere bağlı olarak indeks yeniden oluşturulabilir.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Buradan arama işlemleri ve mesaj indekslemesi için kullanılacak olan arama uygulaması belirleyebilirsiniz. Farklı seçenekler seçerek istenilen eylemlerin ne kadar işlem yapabileceğinin etkisini ölçebilirsiniz. Bu ayarların bazıları tüm arama motorları için aynıdır.',

 	'COMMON_WORD_THRESHOLD'					=> 'Genel kelime başlangıcı',
 	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Tüm mesajların içerdiği kelimelere önemli yüzdelik oranlarına göre genel olarak bakılacaktır. Genel kelimeler arama sorgularında yoksayılır. Kapatmak için sıfır olarak ayarlayın. Sadece eğer kelimeler 100 mesajdan fazla ise sonuç alınır. Eğer isterseniz genel olarak kabul edilen geçerli kelimeleri indeksinizi canlandırmak için yeniden gözden geçirebilirsiniz.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Farklı bir arama uygulaması seçmek istediğinize emin misiniz? Arama uygulaması değişikliğinden sonra yeni arama uygulaması için bir indeks oluşturacaksınız. Eğer eski arama uygulamasına dönmek gibi bir planınız yoksa ayrıca sistem kaynaklarından kazanmak için eski uygulamanın indeksini silebilirsiniz.',
	'CONTINUE_DELETING_INDEX'				=> 'Önceki indeks kaldırma işlemine devam et',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Bir indeks kaldırma işlemi başlatılmıştı. Arama indeks sayfasına erişim için bunu tamamlayacaksınız ya da iptal edeceksiniz.',
	'CONTINUE_INDEXING'						=> 'Önceki indeksleme işlemine devam et',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Bir indeksleme işlemi başlatılmıştı. Arama indeks sayfasına erişim için bunu tamamlayacaksınız ya da iptal edeceksiniz.',
	'CREATE_INDEX'							=> 'İndeks Oluştur',

	'DELETE_INDEX'							=> 'İndeksi Sil',
	'DELETING_INDEX_IN_PROGRESS'			=> 'İndeks silinmesi işlemde',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Arama uygulaması şu anda indeksleri siliyor. Bu işlem bir kaç dakika sürebilir.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL tam metin uygulaması sadece MySQL4 ve üzeri sürümlerde kullanılabilir.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL tam metin indekslemesi sadece MyISAM ya da InnoDB tabloları ile kullanılabilir. InnoDB tablolarında tam metin indekslemesi için MySQL 5.6.4 ya da sonraki sürümler gereklidir.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'İndekslenen mesajların toplam sayısı',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Arama yapmak için kelimeler en az bu kadar karakter ile indekslenecektir. Bu ayarı sadece siz veya hosting firmanız mysql ayarlarından değiştirebilir.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Arama yapmak için kelimeler bu kadar karakterden fazlasıyla indekslenmeyecektir. Bu ayarı sadece siz veya hosting firmanız mysql ayarlarından değiştirebilir.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL tam metin uygulaması sadece PostgreSQL ile kullanılabilir.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'İndekslenen mesajların toplam sayısı',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL sürümü',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Metin araması Yapılandırma Profili:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Anahtar kelimeler için en düşük kelime uzunluğu',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Anahtar kelimeler için ek yüksek kelime uzunluğu',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Bu arama uygulaması PostgreSQL 8.3 ve üzeri sürümleri gerektirir.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Metin araması yapılandırma profili ayrıştırıcıyı ve sözlüğü belirlemek için kullanılır.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'En az bu kadar karaktere sahip kelimeler veritabanı sorgusuna dahil edilecektir.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'En fazla bu kadar karaktere sahip kelimeler veritabanı sorgusuna dahil edilecektir.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Sphinx ayar dosyası oluşturmak için alttaki ayarları yapılandırın',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Veri dizinine giden yol',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Bu, indeksler ve kayıt dosyalarını depolamak için kullanılacaktır. Bu dizini web üzerinden erişilebilen dizinlerin dışındaki bir yerde oluşturmalısınız. (eğik çizgi (slaş) işareti içermelidir)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Sıkça güncellenen delta indeksindeki mesajların sayısı',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon hostu',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Sphinx search daemon (searchd) üzerinde dinleme yapılan host. Varsayılan localhost kullanmak için boş bırakın',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'İndekseliyici hafıza sınırı',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Bu sayı makinenizdeki mevcut hafızadan (RAMden) her zaman daha düşük olmalıdır. Eğer periyodik performans sorunları yaşıyorsanız, bu sorunlar çok fazla kaynak tüketen indeksleyici yüzünden kaynaklanıyor olabilir. Bu ayar indeksleyici için kullanılan mevcut hafıza miktarını azaltmaya yardımcı olabilir.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Ana indeks içerisindeki mesajların sayısı',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon portu',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Sphinx search daemon (searchd) üzerinde dinleme yapılan port. Varsayılan Sphinx API portu olan 9312\'yi kullanmak için boş bırakın',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'phpBB için sphinx search, sadece MySQL ve PostgreSQL veritabanlarını destekler.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx ayar dosyası',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Sphinx ayar dosyasının içeriği oluşturuldu. Bu veri, sphinx search deamon tarafından kullanılabilmesi için sphinx.conf dosyasnın içerisine yapıştırılmalıdır.[dbuser] ve [dbpassword] ile belirtilen yerleri veritabanınızın kimlik bilgileriyle değiştirin.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Sphinx veri dizin yolu belirlenmedi. Lütfen ayar dosyası oluşturmak için bu yolu belirleyin.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Genel Arama Ayarları',
	'GO_TO_SEARCH_INDEX'					=> 'Arama indeks sayfasına git',

	'INDEX_STATS'							=> 'İndeks İstatistikleri',
	'INDEXING_IN_PROGRESS'					=> 'İndeksleme işlemde',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Arama uygulaması panonuzdaki tüm mesajları şu an indeksliyor. Bu işlem panonuzun boyutuna bağlı olarak bir kaç dakika ya da bir kaç saat sürebilir.',

	'LIMIT_SEARCH_LOAD'						=> 'Arama sayfası sistem yüklenme sınırı',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Eğer 1 dakika boyunca sistem yüklenmesi aşılırsa bu değer arama sayfasını çevrimdışı bırakacaktır, bir işlemcinin ~100%\'lük kullanımı 1.0\'a eşitlenecektir. Bu özellik sadece UNIX tabanlı sunucularda bulunur.',

	'MAX_SEARCH_CHARS'						=> 'Aramada indekslenecek en yüksek karakter',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Aramada indekslenecek kelimeler bundan fazla olmayacaktır.',
	'MAX_NUM_SEARCH_KEYWORDS'            => 'En fazla izin verilen anahtar kelime sayısı',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => 'Kullanıcıların arama yaparken kullanabilecekleri en fazla kelime sayısı. 0 değeri sınırsız sayıda kelimelere izin verir.',
	'MIN_SEARCH_CHARS'						=> 'Aramada indekslenecek en düşük karakter',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Aramada indekslenecek kelimeler bundan düşük olmayacaktır.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'En düşük yazar adı karakteri',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Kullanıcılar bir joker kullanarak yazar arama işlemi yaptıklarında en düşük bu kadar fazla karakterde isim girebileceklerdir. Eğer yazarın kullanıcı adı bu sayıdan kısaysa, kullanıcının mesajlarını aramak için tam olarak kullanıcı adını girebilirsiniz.',

	'PROGRESS_BAR'							=> 'İlerleme çubuğu',

	'SEARCH_GUEST_INTERVAL'					=> 'Misafir arama flood aralığı',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Misafirlerin aramaları arasında beklemesi gereken saniye sayısı. Eğer bir misafir arama yaparsa diğer tüm misafirler zaman aralığı dolana kadar bekleyecektir.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Tüm mesajlar şimdi %2$d mesaj id numarasına kadar indekslendi, bu adımda %1$d mesaj indekslendi.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Şu anki indekslemenin değeri her saniyede %1$.1f mesaj.<br />İndeksleme işlemi devam ediyor…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Tüm mesajlar %2$d mesaj id numarasına kadar arama indeksinden kaldırıldı.<br />Silme işlemi devam ediyor…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Pano veritabanındaki tüm mesajlar başarıyla indekslendi',
	'SEARCH_INDEX_REMOVED'					=> 'Bu uygulama için arama indeksi başarıyla silindi',
	'SEARCH_INTERVAL'						=> 'Kullanıcı arama flood aralığı',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Kullanıcıların aramaları arasında beklemesi gereken saniye sayısı. Bu aralık her kullanıcı için birbirinden bağımsız kontrol edilir.',
	'SEARCH_STORE_RESULTS'					=> 'Arama sonucu önbellek süresi',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Önbelleklenen arama sonuçları saniye cinsinden belirtilecek ve bu zamandan sonra boşaltılacaktır. Eğer arama önbelleklemesini kapatmak istiyorsanız 0 yazın.',
	'SEARCH_TYPE'							=> 'Arama Uygulaması',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB mesaj içeriğindeki metinleri arayabilmek için bir uygulama seçmenize izin verir. Varsayılan arama olarak phpBB\'nin kendi tam metin aramasını kullanacaksınız.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Arama uygulaması seçtiniz. Yeni arama uygulamasını kullanmak için seçtiğiniz uygulamanın bir indeksini oluşturmalısınız.',

	'TOTAL_WORDS'							=> 'İndekslenen kelimelerin toplam sayısı',
	'TOTAL_MATCHES'							=> 'Mesaja bağlı indekslenen kelimenin toplam sayısı',

	'YES_SEARCH'							=> 'Arama imkanlarını aç',
	'YES_SEARCH_EXPLAIN'					=> 'Kullanıcı için arama özelliğini üye aramasınıda dahil ederek açar.',
	'YES_SEARCH_UPDATE'						=> 'Tam metin güncellemesini aç',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Mesaj gönderilirken tam metin indekslemesini günceller, eğer arama kapalıysa önemsemeden devam eder.',
));
