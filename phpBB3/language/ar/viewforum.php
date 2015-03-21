<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @translated 2014 phpBBArabia.com
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
	'ACTIVE_TOPICS'			=> 'مواضيع نشطة',
	'ANNOUNCEMENTS'			=> 'إعلانات',

	'FORUM_PERMISSIONS'		=> 'صلاحيات المنتدى',

	'ICON_ANNOUNCEMENT'		=> 'إعلان',
	'ICON_STICKY'			=> 'مثبت',

	'LOGIN_NOTIFY_FORUM'	=> 'لديك تنبيه حول هذا المنتدى رجاءً سجل الدخول للاطلاع عليه',

	'MARK_TOPICS_READ'		=> 'اعتبر المواضيع مقروءة',

	'NEW_POSTS_HOT'			=> 'مشاركات جديدة [ نشط ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'مشاركات جديدة [ مغلق ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'لا مشاركات جديدة [ نشط ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'لا مشاركات جديدة [ مغلق ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'ليس لديك الصلاحية للاطلاع على هذا المنتدى',
	'NO_UNREAD_POSTS_HOT'		=> 'لا مشاركات غير مقروءة [ نشط ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'لا مشاركات غير مقروءة [ مُغلق ]',

	'POST_FORUM_LOCKED'		=> 'هذا المنتدى مغلقة',

	'TOPICS_MARKED'			=> 'المواضيع كلها في هذا المنتدى عُدّت مقروءة',

	'UNREAD_POSTS_HOT'		=> 'مشاركات غير مقروءة [ نشط ]',
	'UNREAD_POSTS_LOCKED'	=> 'مشاركات غير مقروءة [ مُقفل ]',

	'VIEW_FORUM'			=> 'مشاهدة المنتدى',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> 'موضوع واحد',	// Plural Rule 1 - by TheIlluminative for phpBBArabia
		2	=> 'موضوعان',		// Plural Rule 2 - by TheIlluminative for phpBBArabia
		3	=> '%d مواضيع',		// Plural Rule 3 - by TheIlluminative for phpBBArabia
		4	=> '%d موضوعاً',		// Plural Rule 4 - by TheIlluminative for phpBBArabia
		5	=> '%d موضوع',		// Plural Rule 5 - by TheIlluminative for phpBBArabia
	),
));
