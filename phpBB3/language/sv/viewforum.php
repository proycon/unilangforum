<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACTIVE_TOPICS'			=> 'Aktiva trådar',
	'ANNOUNCEMENTS'			=> 'Anslag',

	'FORUM_PERMISSIONS'		=> 'Kategoribehörigheter',

	'ICON_ANNOUNCEMENT'		=> 'Anslag',
	'ICON_STICKY'			=> 'Notis',

	'LOGIN_NOTIFY_FORUM'	=> 'Du har underrättats om denna kategori, logga in för att visa den.',

	'MARK_TOPICS_READ'		=> 'Markera alla trådar som lästa',

	'NEW_POSTS_HOT'			=> 'Nya inlägg [ Populär ]', // Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Nya inlägg [ Låst ]', // Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Inga nya inlägg [ Populär ]', // Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Inga nya inlägg [ Låst ]', // Not used anymore
	'NO_READ_ACCESS'		=> 'Du har inte behörighet att läsa trådar i denna kategori.',
	'NO_UNREAD_POSTS_HOT'		=> 'Olästa inlägg [ Populär ]',
	'NO_UNREAD_POSTS_LOCKED'		=> 'Olästa inlägg [ Låst ]',

	'POST_FORUM_LOCKED'		=> 'Kategorin är låst',

	'UNREAD_POSTS_HOT'		=> 'Olästa inlägg [ Populär ]',
	'UNREAD_POSTS_LOCKED'	=> 'Olästa inlägg [ Låst ]',

	'TOPICS_MARKED'			=> 'Trådarna i denna kategori märktes som lästa.',

	'VIEW_FORUM'			=> 'Visa kategori',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tråd',
		2	=> '%d trådar',
	),
));
