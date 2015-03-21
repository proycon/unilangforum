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
	'ALL_AVAILABLE'			=> 'Tümü',
	'ALL_RESULTS'			=> 'Tüm sonuçlar',

	'DISPLAY_RESULTS'		=> 'Görüntülenecek sonuçlar',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> '%d uygun sonuç bulundu',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> '%d uygun sonuçtan fazlası bulundu',
	),

	'GLOBAL'				=> 'Global başlık',

	'IGNORED_TERMS'			=> 'yoksayıldı',
	'IGNORED_TERMS_EXPLAIN'	=> 'İzlenen kelimeler arama sorgunuzda yoksayıldı. Çünkü bunlar çok yaygın olarak kullanılan kelimelerdir: <strong>%s</strong>.',
	
	'JUMP_TO_POST'                  => 'Mesaja geçiş yap',

	'LOGIN_EXPLAIN_EGOSEARCH'   => 'Bu mesaj panosu kendi mesajlarınızı görüntülemek için kayıtlı olmanızı ve giriş yapmanızı gerekli tutuyor.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Bu mesaj panosu okunmamış mesajlarınızı görüntülemek için kayıtlı olmanızı ve giriş yapmanızı gerekli tutuyor.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Bu mesaj panosu son ziyaretinizden beri gönderilen yeni mesajları görüntülemek için kayıtlı olmanızı ve giriş yapmanızı gerekli tutuyor.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Aramak için çok fazla kelime belirlediniz. Lütfen %1$d kelimeden fazlasını girmeyin.',
 	),

	'NO_KEYWORDS'			=> 'Arama yapmak için en az bir kelime belirlemelisiniz. Her kelime, jokerler hariç en az %s ve en fazla %s içermelidir.',
	'NO_RECENT_SEARCHES'	=> 'En son herhangi bir arama yapılmadı.',
	'NO_SEARCH'				=> 'Üzgünüz fakat arama sistemini kullanma izniniz yok.',
	'NO_SEARCH_RESULTS'		=> 'Uygun sonuç bulunamadı.',
	'NO_SEARCH_LOAD'		=> 'Üzgünüz fakat arama özelliğini şu an kullanamazsınız. Sunucuda yüksek oranda yük var. Lütfen daha sonra tekrar deneyin.',	
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Üzgünüz fakat arama fonksiyonunu şu anda kullanamazsınız. Lütfen %d saniye sonra tekrar deneyin.',
	),
	'NO_SEARCH_UNREADS'     => 'Üzgünüz fakat bu mesaj panosunda okunmamış mesajlar için arama yapma özelliği kapatıldı.',
	'WORD_IN_NO_POST'		=> 'Hiç bir mesaj bulunamadı çünkü <strong>%s</strong> kelimesini içeren herhangi bir mesaj yok.',
	'WORDS_IN_NO_POST'		=> 'Hiç bir mesaj bulunamadı çünkü <strong>%s</strong> kelimelerini içeren herhangi bir mesaj yok.',

	'POST_CHARACTERS'		=> 'karakterini göster',
	'PHRASE_SEARCH_DISABLED'	=> 'Bu mesaj panosunda tam cümle araması desteklenmiyor.',	

	'RECENT_SEARCHES'		=> 'Son arananlar',
	'RESULT_DAYS'			=> 'Sonuçlar için gün limiti',
	'RESULT_SORT'			=> 'Sonuçları sırala',
	'RETURN_FIRST'			=> 'Mesajın ilk',
	'GO_TO_SEARCH_ADV'	=> 'Gelişmiş aramaya git',

	'SEARCHED_FOR'			=> 'Aranan terim',
	'SEARCHED_TOPIC'		=> 'Başlık arandı',
	'SEARCHED_QUERY'		=> 'Aranan sorgu',	
	'SEARCH_ALL_TERMS'		=> 'Bütün terimler için ara ya da girilen önermeyi kullan',
	'SEARCH_ANY_TERMS'		=> 'Herhangi bir terim için ara',
	'SEARCH_AUTHOR'			=> 'Yazar için ara',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Kısmen uyan sonuçlar için * işaretini joker olarak kullanabilirsiniz.',
	'SEARCH_FIRST_POST'		=> 'Sadece başlığın ilk mesajı',
	'SEARCH_FORUMS'			=> 'Forumlarda ara',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Arama yapmak istediğiniz forum veya forumları seçin. Eğer aşağıdaki “altforumlarda ara“ özelliğini kapatmazsanız altforumlar otomatik olarak aranacaktır.',
	'SEARCH_IN_RESULTS'		=> 'Bu sonuçlarda ara',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '<strong>+</strong> ile sonuçlarda ayrıca olmasını istediğiniz kelimeleri, <strong>-</strong> ile sonuçlarda ayrıca olmasını istemediğiniz kelimeleri ve <strong>|</strong> ile sonuçlarda sadece olması gereken kelimeleri tanımlayabilirsiniz. Kısmen uyan sonuçlar için * işaretini joker olarak kullanabilirsiniz.',
	'SEARCH_MSG_ONLY'		=> 'Sadece mesaj içeriği',
	'SEARCH_OPTIONS'		=> 'Arama seçenekleri',
	'SEARCH_QUERY'			=> 'Arama sorgusu',
	'SEARCH_SUBFORUMS'		=> 'Altforumlarda ara',
	'SEARCH_TITLE_MSG'		=> 'Başlıklar ve mesaj içeriği',
	'SEARCH_TITLE_ONLY'		=> 'Sadece konu başlıkları',
	'SEARCH_WITHIN'			=> 'Aranacak alan',
	'SORT_ASCENDING'		=> 'Artan',
	'SORT_AUTHOR'			=> 'Yazar',
	'SORT_DESCENDING'		=> 'Azalan',
	'SORT_FORUM'			=> 'Forum',
	'SORT_POST_SUBJECT'		=> 'Mesaj başlığı',
	'SORT_TIME'				=> 'Mesaj zamanı',
	'SPHINX_SEARCH_FAILED'		=> 'Arama başarısız oldu: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Üzgünüz, arama yapılamadı. Bu hata ile ilgili daha fazla bilgi hata kayıtlarına kaydedildi.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Yazar adını en az %d karakter olarak belirlemelisiniz.',
	),
));
