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
	'ACTIVE_TOPICS'			=> 'Активне теме',
	'ANNOUNCEMENTS'			=> 'Саопштења',

	'FORUM_PERMISSIONS'		=> 'Дозволе форума',

	'ICON_ANNOUNCEMENT'		=> 'Саопштење',
	'ICON_STICKY'			=> 'Лепљива',

	'LOGIN_NOTIFY_FORUM'	=> 'Обавештени сте о овом форуму, молимо вас да се пријавите како бисте га прегледали.',

	'MARK_TOPICS_READ'		=> 'Означи теме као прочитане',

	'NEW_POSTS_HOT'			=> 'Нове поруке [ Популарни ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Нове поруке [ Закључани ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Нема нових порука [ Популарни ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Нема нових порука [ Закључани ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Немате потребне дозволе да читате теме у овом форуму.',
	'NO_UNREAD_POSTS_HOT'		=> 'Нема непрочитаних порука [ Популарни ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Нема непрочитаних порука [ Закључани ]',

	'POST_FORUM_LOCKED'		=> 'Форум је закључан',

	'TOPICS_MARKED'			=> 'Теме за овај форум су сада означене као прочитане.',

	'UNREAD_POSTS_HOT'		=> 'Непрочитане поруке [ Популарни ]',
	'UNREAD_POSTS_LOCKED'	=> 'Непрочитане поруке [ Закључани ]',

	'VIEW_FORUM'			=> 'Преглед форума',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d тема',
		2	=> '%d тема',
	),
));
