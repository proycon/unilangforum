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
	'ACTIVE_TOPICS'			=> 'Aktif başlıklar',
	'ANNOUNCEMENTS'			=> 'Duyurular',
	
	'FORUM_PERMISSIONS'		=> 'Forum izinleri',
	
	'ICON_ANNOUNCEMENT'		=> 'Duyuru',
	'ICON_STICKY'			=> 'Sabit',

	'LOGIN_NOTIFY_FORUM'	=> 'Bu forum hakkında bildiriniz var, lütfen giriş yapıp görüntüleyin.',

	'MARK_TOPICS_READ'		=> 'Başlıkları okunmuş işaretle',

	'NEW_POSTS_HOT'         => 'Yeni mesajlar [ Popüler ]',   // Not used anymore
	'NEW_POSTS_LOCKED'      => 'Yeni mesajlar [ Kilitli ]',   // Not used anymore
	'NO_NEW_POSTS_HOT'      => 'Yeni mesaj yok [ Popüler ]',   // Not used anymore
	'NO_NEW_POSTS_LOCKED'   => 'Yeni mesaj yok [ Kilitli ]',   // Not used anymore
	'NO_READ_ACCESS'      => 'Bu forumdaki başlıkları okumak için gerekli izinlere sahip değilsiniz.',
	'NO_UNREAD_POSTS_HOT'      => 'Okunmamış mesaj yok [ Popüler ]',
	'NO_UNREAD_POSTS_LOCKED'   => 'Okunmamış mesaj yok [ Kilitli ]',

	'POST_FORUM_LOCKED'      => 'Forum kilitli',

	'TOPICS_MARKED'         => 'Bu forumdaki başlıklar okunmuş sayıldı.',

	'UNREAD_POSTS_HOT'      => 'Okunmamış mesajlar [ Popüler ]',
	'UNREAD_POSTS_LOCKED'   => 'Okunmamış mesajlar [ Kilitli ]',

	'VIEW_FORUM'			=> 'Forum görüntüleniyor',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d başlık',
	),
));
