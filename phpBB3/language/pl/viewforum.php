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
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
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
	'ACTIVE_TOPICS'			=> 'Aktywne tematy',
	'ANNOUNCEMENTS'			=> 'Ogłoszenia',

	'FORUM_PERMISSIONS'		=> 'Twoje uprawnienia na tym forum',

	'ICON_ANNOUNCEMENT'		=> 'Ogłoszenie',
	'ICON_STICKY'			=> 'Przyklejony',

	'LOGIN_NOTIFY_FORUM'	=> 'Poinformowano cię o tym forum. Zaloguj się, aby je przejrzeć.',

	'MARK_TOPICS_READ'		=> 'Oznacz jako przeczytane',

	'NEW_POSTS_HOT'			=> 'Nowe posty [ Popularne ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Nowe posty [ Zamknięte ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Brak nowych postów [ Popularne ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Brak nowych postów [ Zamknięte ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Nie masz uprawnień do czytania tematów na tym forum.',
	'NO_UNREAD_POSTS_HOT'		=> 'Nie ma nieprzeczytanych postów [ Popularne ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Nie ma nieprzeczytanych postów [ Zamknięte ]',

	'POST_FORUM_LOCKED'		=> 'To forum jest zamknięte',

	'TOPICS_MARKED'			=> 'Tematy na tym forum zostały oznaczone jako przeczytane.',

	'UNREAD_POSTS_HOT'		=> 'Nieprzeczytane posty [ Popularne ]',
	'UNREAD_POSTS_LOCKED'	=> 'Nieprzeczytane posty [ Zablokowane ]',

	'VIEW_FORUM'			=> 'Zobacz forum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> 'Tematy: %d',
		2	=> 'Tematy: %d',
		3	=> 'Tematy: %d',
	),
));
