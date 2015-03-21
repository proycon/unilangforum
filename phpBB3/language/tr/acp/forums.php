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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Otomatik-budama mesaj yaşı',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Başlığın silinmesi için son mesajdan sonra geçecek gün sayısı.',
	'AUTO_PRUNE_FREQ'			=> 'Otomatik-budama sıklığı',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Budama olayları arasında geçecek, gün cinsinden zaman aralığı.',
	'AUTO_PRUNE_VIEWED'			=> 'Otomatik-budama mesaj görüntüleme yaşı',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Başlığın silinmesi için son mesajın görüntülenmesinden sonra geçecek gün sayısı.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Gölgeli başlıklar otomatik-budama sıklığı',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Otomatik-budama için gölgeli başlıkların yaşı',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Başlığın silinmesi için gölgeli başlık oluşumundan sonra geçecek gün sayısı.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Budama olayları arasında geçecek, gün cinsinden zaman aralığı.',	

	'CONTINUE'						=> 'Devam',
	'COPY_PERMISSIONS'				=> 'İzinleri şuradan kopyala',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Yeni forumunuz için izin ayarlama işlemini kolaylaştırır, varolan bir forumun izinlerini kopyalayabilirsiniz.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Bu yapıldığı zaman, forum buradan seçtiğiniz izinlerin aynısına sahip olacaktır. Eğer hiç forum seçilmediyse yeni oluşturulan forum, izinler ayarlanana kadar görünmeyecektir.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Eğer izinleri kopyalamayı seçtiyseniz, forum buradan seçtiğiniz izinlerin aynısına sahip olacaktır. Bu, buradan seçtiğiniz forumun izinleri ile bu forum için önceden ayarlanan var olan izinlerin üzerine yazacaktır. Eğer hiç forum seçmediyseniz şu anki izinler kalacaktır.',
	'COPY_TO_ACL'					=> 'Alternatif olarak, ayrıca bu forum için %syeni izin ayarlaması%s yapabilirsiniz.',
	'CREATE_FORUM'					=> 'Yeni forum oluştur',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'İçeriği sil ya da foruma taşı',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Alt forumları sil ya da foruma taşı',
	'DEFAULT_STYLE'						=> 'Varsayılan stil',
	'DELETE_ALL_POSTS'					=> 'Mesajları sil',
	'DELETE_SUBFORUMS'					=> 'Alt forumları ve mesajları sil',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktif başlıkları aç',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Eğer evet olarak ayarlanırsa, seçilen alt forumlar içindeki aktif başlıklar bu kategori altında gösterilecektir.',

	'EDIT_FORUM'				=> 'Forumu düzenle',
	'ENABLE_INDEXING'			=> 'Arama indekslemesini aç',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Evet olarak seçildiğinde, forumdaki mesajlaşmalar arama için indekslenecektir.',
	'ENABLE_POST_REVIEW'			=> 'Mesaj incelemesini aç',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Eğer evet olarak ayarlarsanız, kullanıcılar başlığa yeni mesajlar oluşturduğu zaman yazılarını önizleyebileceklerdir. Bu, sohbet forumları için kapalı olmalıdır.',
	'ENABLE_QUICK_REPLY'			=> 'Hızlı cevabı aç',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Bu forumda hızlı cevap özelliğini açar. Eğer hızlı cevap özelliği mesaj panosu çapında kapalıysa bu ayar dikkate alınmaz. Hızlı cevap sadece bu forumda mesaj gönderme izni olan kullanıcılar için gösterilecektir.',
	'ENABLE_RECENT'				=> 'Aktif başlıkları göster',
	'ENABLE_RECENT_EXPLAIN'		=> 'Evet olarak seçildiğinde, aktif başlıkların listesi içinde foruma açılmış olan başlıklar gösterilecektir.',
	'ENABLE_TOPIC_ICONS'		=> 'Başlık ikonlarını aç',

	'FORUM_ADMIN'						=> 'Forum Yönetimi',
	'FORUM_ADMIN_EXPLAIN'				=> 'phpBB3’te her şey forum bazlıdır. Bir kategori sadece forumun özel bir çeşididir. Her forum sınırsız sayıda alt-forumlara sahip olabilir ve bunların her birine mesaj gönderilip gönderilemeyeceğini (ör. eski phpBB sürümlerindekine benzer bir kategori gibi olup olmayacağını) belirleyebilirsiniz. Buradan belli başlı forumları ekleyebilir, düzenleyebilir, silebilir, kilitleyebilir, kilidini açabilir ve bunun gibi bazı ek kontrolleri ayarlayabilirsiniz. Ayrıca, eğer mesajlarınızın ve başlıklarınızın senkronizasyon ayarları bozulduysa, bir forumu yeniden senkronize edebilirsiniz. <strong>Yeni oluşturulan forumların görüntülenmesi için uygun izinleri kopyalamalı ya da ayarlamalısınız.</strong>',
	
	'FORUM_AUTO_PRUNE'					=> 'Otomatik budamayı aç',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Başlıklar forumunu otomatik temizlenme, frekans/devir parametrelerini aşağıda ayarlayınız.',
	'FORUM_CREATED'						=> 'Forum başarıyla oluşturuldu.',
	'FORUM_DATA_NEGATIVE'				=> 'Budama parametreleri negatif olamaz.',
	'FORUM_DESC_TOO_LONG'				=> 'Forum açıklaması çok uzun, 4000 karakterden daha az olmalıdır.',
	'FORUM_DELETE'						=> 'Forumu Sil',
	'FORUM_DELETE_EXPLAIN'				=> 'Alttaki form bir forumu silmenize izin verecektir. Eğer forumda mesaj varsa tüm başlıkların (veya forumların) içeriğini yerleştirmek istediğiniz yere karar verebilirsiniz.',
	'FORUM_DELETED'						=> 'Forum başarıyla silindi',
	'FORUM_DESC'						=> 'Açıklama',
	'FORUM_DESC_EXPLAIN'				=> 'Girilen herhangi bir HTML biçimi, burada olduğu gibi gösterilecektir.',
	'FORUM_EDIT_EXPLAIN'				=> 'Alttaki form, bu forumu özelleştirmenize izin verecektir. Not: Her kullanıcı veya kullanıcı grubu için yönetim ve mesaj sayacı kontrolleri forum izinleri yoluyla ayarlanır.',
	'FORUM_IMAGE'						=> 'Forum resmi',
	'FORUM_IMAGE_EXPLAIN'				=> 'phpBB ana klasörüne göre bu forum ile ilişkili olması için eklenecek bir resim.',
	'FORUM_IMAGE_NO_EXIST'            => 'Belirtilen forum resmi mevcut değil',
	'FORUM_LINK_EXPLAIN'				=> 'Bu foruma tıklandığında kullanıcının kaynağa ulaşacağı tam URL adresi (protokol içerir, ör: <samp>http://</samp>), örnek: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Adrese gönderilen bağlantıları takip et',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Forum bağlantılarına kaç kere tıklandığını takip etmenizi sağlayacak kayıtlardır.',
	'FORUM_NAME'						=> 'Forum adı',
	'FORUM_NAME_EMPTY'					=> 'Bu forum için bir isim girmelisiniz.',
	'FORUM_PARENT'						=> 'Ana forum',
	'FORUM_PASSWORD'					=> 'Forum şifresi',
	'FORUM_PASSWORD_CONFIRM'			=> 'Forum şifresini onayla',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Sadece forum şifresi girildiğinde ayarlanması gerekir.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Tercihlerdeki izin sistemini kullanarak bu forum için bir şifre tanımlar.',
	'FORUM_PASSWORD_UNSET'            => 'Forum şifresini kaldır',
	'FORUM_PASSWORD_UNSET_EXPLAIN'      => 'Forum şifresini kaldırmak istiyorsanız burayı kontrol edin.',
	'FORUM_PASSWORD_OLD'            => 'Forum şifresi, eski bir karmaşık şifreleme metodunu kullanıyor ve değiştirilmesi gerekiyor.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Girmiş olduğunuz şifreler birbibirini tutmuyor.',
	'FORUM_PRUNE_SETTINGS'				=> 'Forum budama ayarları',
	'FORUM_PRUNE_SHADOW'				=> 'Gölgeli başlıkların otomatik olarak budanmasını aç',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Forumlardaki gölgeli başlıkları budar, budama sıklığı/yaş parametrelerini aşağıdan ayarlayabilirsiniz.',	
	'FORUM_RESYNCED'					=> '“%s” isimli forum başarıyla yeniden senkronize edildi',
	'FORUM_RULES_EXPLAIN'				=> 'Forum kuralları, forumda belirtilmiş herhangi bir sayfa içinde görüntülenecektir.',
	'FORUM_RULES_LINK'					=> 'Forum kurallarına bağlantı',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Buraya forum kurallarınızı içeren sayfanın/mesajın URL adresini girebilirsiniz. Bu ayar, belirlediğiniz forum kuralları metninin üzerine yazacaktır.',
	'FORUM_RULES_PREVIEW'				=> 'Forum kuralları önizlemesi',
	'FORUM_RULES_TOO_LONG'				=> 'Forum kuralları 4000 karakterden daha az olmalıdır.',
	'FORUM_SETTINGS'					=> 'Forum ayarları',
	'FORUM_STATUS'						=> 'Forum durumu',
	'FORUM_STYLE'						=> 'Forum stili',
	'FORUM_TOPICS_PAGE'					=> 'Sayfa başına gösterilen başlıklar',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Bu değerin 0 olmaması durumunda, sayfa başına varsayılan başlık ayarlarının yerine geçecektir.',
	'FORUM_TYPE'						=> 'Forum tipi',
	'FORUM_UPDATED'						=> 'Forum bilgileri başarıyla güncellendi.',

 	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Dilerseniz mesaj gönderilebilen bir forumun sahip olduğu altforumları bir bağlantı olarak değiştirebilirsiniz. Lütfen işlemi uygulamadan önce tüm altforumları bu forumun dışarısına taşıyın, çünkü bir bağlantı olarak değiştirildikten sonra bu foruma şu anda bağlı olan altforumları göremeyeceksiniz.',

	'GENERAL_FORUM_SETTINGS'	=> 'Genel forum ayarları',

	'LINK'					=> 'Bağlantı',
	'LIST_INDEX'			=> 'Ana-forum’un açıklaması içerisinde altforumu listele',
	'LIST_INDEX_EXPLAIN'	=> 'Bu forum ana sayfada gösterilir ve eğer ana-forum’un “Açıklama içerisinde altforumları listele” özelliği aktifse altforumlar ana-forum’un açıklaması içerisinde başka bir yere bağlantı olarak gösterilir.',
	'LIST_SUBFORUMS'         => 'Açıklama içerisinde altforumları listele',
	'LIST_SUBFORUMS_EXPLAIN'   => 'Bu forumun altforumları ana sayfada gösterilir ve eğer altforumların “Ana-forum’un açıklaması içerisinde altforumu listele” özelliği aktifse ana-forum’un açıklaması içerisinde başka bir yere bağlantı olarak gösterilir.',
	'LOCKED'				=> 'Kilitli',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Mesajları taşımak için seçtiğiniz forum mesaj gönderilebilir değil. Lütfen mesaj gönderilebilir bir forum seçin.',
	'MOVE_POSTS_TO'		=> 'Mesajları taşı',
	'MOVE_SUBFORUMS_TO'	=> 'Alt forumları taşı',

	'NO_DESTINATION_FORUM'			=> 'İçeriği taşımak için bir forum belirlemediniz.',
	'NO_FORUM_ACTION'				=> 'Forum içeriği için herhangi bir eylem belirlemediniz.',
	'NO_PARENT'						=> 'Kaynak yok',
	'NO_PERMISSIONS'				=> 'İzinleri kopyalama',
	'NO_PERMISSION_FORUM_ADD'		=> 'Forumlara ekleme yapmak için gerekli yetkilere sahip değilsiniz',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Forumları silmek için gerekli yetkilere sahip değilsiniz',

	'PARENT_IS_LINK_FORUM'		=> 'Belirttiğiniz kaynak bir forum bağlantısı. Bağlantı forumları diğer forumları kontrol altına alamaz, lütfen kaynak forum olarak bir kategori veya forum belirleyin.',
	'PARENT_NOT_EXIST'			=> 'Kaynak bulunmuyor',
	'PRUNE_ANNOUNCEMENTS'		=> 'Duyuruları buda',
	'PRUNE_STICKY'				=> 'Sabit başlıkları buda',
	'PRUNE_OLD_POLLS'			=> 'Eski anketleri buda',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Mesaj yaşı günleri içinde oy gelmeyen anket başlıklarını siler.',
	
	'REDIRECT_ACL'	=> 'Şimdi, bu forum için %sizinleri ayarlayabilirsiniz%s.',
	
	'SYNC_IN_PROGRESS'			=> 'Forum senkronize ediliyor',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Şu anda yeniden senkronize edilen başlık sıra numarası %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Bağlantı',

	'UNLOCKED'			=> 'Kilitli Değil',
));
