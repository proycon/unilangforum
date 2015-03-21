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
	'APPROVE'								=> 'Onayla',
	'ATTACHMENT'						=> 'Dosya eki',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Dosya eki özelliği kapatıldı.',

	'BOOKMARK_ADDED'		=> 'Başlık sık kullanılanlara başarıyla eklendi.',
	'BOOKMARK_ERR'         => 'Sık kullanılanlara ekleme işlemi başarısız oldu. Lütfen tekrar deneyin.',
	'BOOKMARK_REMOVED'		=> 'Başlık sık kullanılanlardan başarıyla silindi.',
	'BOOKMARK_TOPIC'		=> 'Sık kullanılanlara ekle',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Sık kullanılanlardan sil',
	'BUMPED_BY'				=> 'En son %1$s tarafından %2$s tarihinde darbelendi.',
	'BUMP_TOPIC'			=> 'Başlığı darbele',

	'CODE'					=> 'Kod',

	'DELETE_TOPIC'			=> 'Başlığı sil',
	'DELETED_INFORMATION'	=> '%1$s tarafından %2$s tarihinde sildi',
	'DISAPPROVE'					=> 'Onaylama',
	'DOWNLOAD_NOTICE'		=> 'Bu mesaja eklenen dosyaları görüntülemek için gerekli izinlere sahip değilsiniz.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'En son %2$s tarafından %3$s tarihinde düzenlendi, toplamda %1$d kere düzenlendi.',
	),
	'EMAIL_TOPIC'			=> 'Başlığı e-posta ile gönder',
	'ERROR_NO_ATTACHMENT'	=> 'Seçilen dosya eki artık mevcut değil.',

	'FILE_NOT_FOUND_404'	=> '<strong>%s</strong> dosyası bulunamıyor.',
	'FORK_TOPIC'			=> 'Başlığı kopyala',
	'FULL_EDITOR'			=> 'Tam Editör &amp; Önizleme',

	'LINKAGE_FORBIDDEN'		=> 'Bu mesaj panosundan ya da bu mesaj panosuna görüntüleme, indirme veya bağlantı verme yetkiniz yok.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Bu başlık hakkında bildiriniz var, lütfen giriş yapıp görüntüleyin.',
	'LOGIN_VIEWTOPIC'		=> 'Mesaj panosu, bu başlığı görüntülemek için kayıt olmanızı veya giriş yapmanızı gerekli tutuyor.',

	'MAKE_ANNOUNCE'			=> '“Duyuru” olarak değiştir',
	'MAKE_GLOBAL'			=> '“Global” olarak değiştir',
	'MAKE_NORMAL'			=> '“Normal” olarak değiştir',
	'MAKE_STICKY'			=> '“Sabit” olarak değiştir',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'En fazla <strong>%d</strong> seçenek seçebilirsiniz',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '<strong>%s</strong> adlı dosya eki artık mevcut değil',
	'MOVE_TOPIC'			=> 'Başlığı taşı',

	'NO_ATTACHMENT_SELECTED'=> 'Görüntülemek veya indirmek için bir dosya eki seçmediniz.',
	'NO_NEWER_TOPICS'		=> 'Bu forumda daha yeni başlık yok.',
	'NO_OLDER_TOPICS'		=> 'Bu forumda daha eski başlık yok.',
	'NO_UNREAD_POSTS'		=> 'Bu başlıkta daha yeni okunmayan mesaj yok.',
	'NO_VOTE_OPTION'		=> 'Oy vermek için bir seçenek belirlemelisiniz.',
	'NO_VOTES'				=> 'Oy yok',

	'POLL_ENDED_AT'			=> 'Anket %s tarihinde bitecek',
	'POLL_RUN_TILL'			=> 'Anket %s tarihine kadar sürecek',
	'POLL_VOTED_OPTION'		=> 'Bu seçenek için oy verdiniz',
	'POST_DELETED_RESTORE'	=> 'Bu mesaj silindi. Geri getirilebilir.',	
	'PRINT_TOPIC'			=> 'Yazıcı görüntüsü',

	'QUICK_MOD'				=> 'Hızlı-yönetim araçları',
	'QUICKREPLY'			=> 'Hızlı Cevap',
	'QUOTE'					=> 'Alıntı',

	'REPLY_TO_TOPIC'		=> 'Başlığa cevap ver',
	'RESTORE'				=> 'Geri getir',
	'RESTORE_TOPIC'			=> 'Başlığı geri getir',	
	'RETURN_POST'			=> '%sMesaja geri dön%s',

	'SUBMIT_VOTE'			=> 'Oy ver',

	'TOPIC_TOOLS'			=> 'Başlık araçları',
	'TOTAL_VOTES'			=> 'Toplam oy',

	'UNLOCK_TOPIC'			=> 'Başlığın kilidini aç',

	'VIEW_INFO'				=> 'Mesaj ayrıntıları',
	'VIEW_NEXT_TOPIC'		=> 'Sonraki başlık',
	'VIEW_PREVIOUS_TOPIC'	=> 'Önceki başlık',
	'VIEW_RESULTS'			=> 'Sonuçları Görüntüle',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d mesaj',
	),
	'VIEW_UNREAD_POST'		=> 'Önce okunmamış mesaj',
	'VOTE_SUBMITTED'		=> 'Oyunuz ankete eklendi.',
	'VOTE_CONVERTED'      => 'Dönüştürülen anketler için oy değişiklikleri desteklenmiyor.',

));
