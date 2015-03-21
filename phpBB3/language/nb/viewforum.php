<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
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
	'ACTIVE_TOPICS'			=> 'Aktive emner',
	'ANNOUNCEMENTS'			=> 'Kunngjøringer',

	'FORUM_PERMISSIONS'		=> 'Forumtillatelser',

	'ICON_ANNOUNCEMENT'		=> 'Kunngjøring',
	'ICON_STICKY'			=> 'Festet',

	'LOGIN_NOTIFY_FORUM'	=> 'Du har blitt varslet om dette forumet, logg inn for å vise det.',

	'MARK_TOPICS_READ'		=> 'Merk emner som lest',

	'NEW_POSTS_HOT'			=> 'Nye innlegg [ populært ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Nye innlegg [ låst ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Ingen nye innlegg [ populært ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Ingen nye innlegg [ låst ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Du har ikke de nødvendige tillatelsene for å lese emner i dette forumet.',
	'NO_UNREAD_POSTS_HOT'		=> 'Ingen uleste innlegg [ populært ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Ingen uleste innlegg [ låst ]',

	'POST_FORUM_LOCKED'		=> 'Forumet er låst',

	'TOPICS_MARKED'			=> 'Emnene for dette forumet er nå merket som lest.',

	'UNREAD_POSTS_HOT'		=> 'Uleste innlegg [ populær ]',
	'UNREAD_POSTS_LOCKED'	=> 'Uleste innlegg [ låst ]',

	'VIEW_FORUM'			=> 'Vis forum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d emne',
		2	=> '%d emner',
	),
));
