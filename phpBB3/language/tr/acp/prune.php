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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Bu bölüm mesaj panonuzdaki kullanıcıları deaktif etmenize ya da silmenize izin verir. Hesaplar değişik yollarla filtre edilebilir; mesaj sayısına göre, en çok aktifliğe göre, v.b. gibi. Etkilenen kullanıcı sayısının daha da daraltılması için kriterler birleştirilebilir. Örneğin, 2002-01-01 tarihinden sonra hiç aktif olmamış, 10 mesajdan az göndermiş kullanıcıları budayabilirsiniz. Metin alanları için joker olarak * karakterini kullanabilirsiniz. Alternatif olarak, kullanıcıların listesini metin alanına girmek suretiyle (her kullanıcı adını ayrı bir satıra yerleştirerek) kriter seçimlerinin tamamen uygulanmasına engel olabilirsiniz. Bunu yaparken dikkat etmelisiniz! Bir kullanıcı silindiğinde, işlemin geri alınmasının hiçbir yolu yoktur.',

	'CRITERIA'				=> 'Kriter',

	'DEACTIVATE_DELETE'			=> 'Deaktif et ya da sil',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Deaktif edilecek veya tamamen silinecek kullanıcıları seçiniz. Not: Silinen kullanıcılar geri getirilemez.',
	'DELETE_USERS'				=> 'Sil',
	'DELETE_USER_POSTS'			=> 'Budanan kullanıcı mesajlarını sil',
	'DELETE_USER_POSTS_EXPLAIN' => 'Silinen kullanıcılar tarafından oluşturulan mesajları siler, eğer kullanıcılar aktif değilse bir etkisi olmaz.',

	'JOINED_EXPLAIN'			=> '<kbd>YYYY-AA-GG</kbd> formatında bir tarih girin. Bir tarih aralığı belirtmek için her iki alanı da kullanabilirsiniz, ya da açık bir tarih aralığı belirtmek için alanlardan birini boş bırakabilirsiniz.',

	'LAST_ACTIVE_EXPLAIN'		=> '<kbd>YYYY-AA-GG</kbd> formatında bir tarih girin. Hiç giriş yapmamış kullanıcıları budamak için <kbd>0000-00-00</kbd> girin, <em>Önce</em> ve <em>Sonra</em> koşulları yoksayılacaktır.',

	'POSTS_ON_QUEUE'			=> 'Onay Bekleyen Mesajlar',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Seçilen gruptaki kullanıcılar için sınır.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Tüm gruplar',
	'PRUNE_USERS_LIST'				=> 'Budanacak kullanıcılar',
	'PRUNE_USERS_LIST_DELETE'		=> 'Seçilen kritere göre kullanıcı budaması yapmak için alttaki hesaplar silinecektir. Silinme listesindeki belirli kullanıcıları, kendi kullanıcı adlarının yanındaki kutucuğun işaretini silerek kaldırabilirsiniz.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Seçilen kritere göre kullanıcı budaması yapmak için alttaki hesaplar deaktif edilecektir. Deaktif etme listesindeki belirli kullanıcıları, kendi kullanıcı adlarının yanındaki kutucuğun işaretini silerek kaldırabilirsiniz.',

	'SELECT_USERS_EXPLAIN'		=> 'Belirlenen kullanıcı adlarını buraya girin. Bunlar yukarıda tercih edilen kriteri kullanacaklardır. Kurucular budanamaz.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Seçilen kullanıcılar başarıyla deaktif edildi',
	'USER_DELETE_SUCCESS'		=> 'Seçilen kullanıcılar başarıyla silindi',
	'USER_PRUNE_FAILURE'		=> 'Seçilen kritere uygun hiç bir kullanıcı yok.',
	 
 	'WRONG_ACTIVE_JOINED_DATE'	=> 'Girilen tarih hatalı, tarih <kbd>YYYY-MM-DD</kbd> formatına aykırı girildi.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Bu seçtiğiniz gün sayısı kadar süre içerisinde mesaj gönderilmeyen herhangi bir başlık varsa silecektir. Eğer bir sayı girmezseniz o zaman bütün başlıklar silinecektir. Yayında olan anketlerin bulunduğu başlıklar silinmeyecek ve sabitler ile duyurular silinecektir. Bu başlıkları elle silmek zorundasınız.',

	'FORUM_PRUNE'		=> 'Forum budaması',

	'NO_PRUNE'			=> 'Hiç bir forum budanmadı.',

	'SELECTED_FORUM'	=> 'Seçilen forum',
	'SELECTED_FORUMS'	=> 'Seçilen forumlar',

	'POSTS_PRUNED'					=> 'Mesajlar budandı',
	'PRUNE_ANNOUNCEMENTS'			=> 'Duyuruları buda',
	'PRUNE_FINISHED_POLLS'			=> 'Kapatılan anketleri buda',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Süresi dolan anketlerin bulunduğu başlıkları siler.',
	'PRUNE_FORUM_CONFIRM'         => 'Belirtilen ayarlar ile seçilen forumları budamak istediğinize emin misiniz? Budanan mesajlar ve başlıklar kaldırıldığı zaman geri alınamaz.',
	'PRUNE_NOT_POSTED'				=> 'En son gönderilen mesajdan beri geçen gün sayısı',
	'PRUNE_NOT_VIEWED'				=> 'En son görüntülemeden beri geçen gün sayısı',
	'PRUNE_OLD_POLLS'				=> 'Eski anketleri buda',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Uzun zamandır oy verilmemiş anketlerin bulunduğu başlıkları siler.',
	'PRUNE_STICKY'					=> 'Sabit başlıkları buda',
	'PRUNE_SUCCESS'					=> 'Forumlar başarıyla budandı.',

	'TOPICS_PRUNED'		=> 'Başlıklar budandı',
));
