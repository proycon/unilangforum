<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ACTIVE_TOPICS'			=> 'Actieve onderwerpen',
	'ANNOUNCEMENTS'			=> 'Aankondigingen',

	'FORUM_PERMISSIONS'		=> 'Forumpermissies',

	'ICON_ANNOUNCEMENT'		=> 'Aankondiging',
	'ICON_STICKY'			=> 'Sticky',

	'LOGIN_NOTIFY_FORUM'	=> 'Je bent op de hoogte gebracht van dit forum, meld je aan om het te bekijken.',

	'MARK_TOPICS_READ'		=> 'Markeer onderwerpen als gelezen',

	'NEW_POSTS_HOT'			=> 'Nieuwe berichten [ Populair ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Nieuwe berichten [ Gesloten ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Geen nieuwe berichten [ Populair ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Geen nieuwe berichten [ Gesloten ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Je hebt niet de benodigde permissies om onderwerpen in dit forum te lezen.',
	'NO_UNREAD_POSTS_HOT'		=> 'Geen ongelezen berichten [ Populair ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Geen ongelezen berichten [ Gesloten ]',

	'POST_FORUM_LOCKED'		=> 'Forum is gesloten',

	'TOPICS_MARKED'			=> 'De onderwerpen voor dit forum zijn nu gemarkeerd als gelezen.',

	'UNREAD_POSTS_HOT'		=> 'Ongelezen berichten [ Populair ]',
	'UNREAD_POSTS_LOCKED'	=> 'Ongelezen berichten [ Gesloten ]',

	'VIEW_FORUM'			=> 'Bekijk forum',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d onderwerp',
		2	=> '%d onderwerpen',
	),
));
