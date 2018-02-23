<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
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
	'ACTIVE_TOPICS'			=> 'Aktiivsed teemad',
	'ANNOUNCEMENTS'			=> 'Teadaanded',

	'FORUM_PERMISSIONS'		=> 'Foorumi õigused',

	'ICON_ANNOUNCEMENT'		=> 'Teadaanne',
	'ICON_STICKY'			=> 'Kleebis',

	'LOGIN_NOTIFY_FORUM'	=> 'Sulle on teatatud sellest foorumist. Logi sisse, et seda vaadata.',

	'MARK_TOPICS_READ'		=> 'Märgi teemad loetuks',

	'NEW_POSTS_HOT'			=> 'Uued postitused [ Populaarne ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Uued postitused [ Suletud ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Pole uusi postitusi [ Populaarne ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Pole uusi postitusi [ Suletud ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Sul pole õigusi teemade lugemiseks selles foorumis.',
	'NO_UNREAD_POSTS_HOT'		=> 'Pole lugemata postitusi [ Populaarne ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Pole lugemata postitusi [ Suletud ]',

	'POST_FORUM_LOCKED'		=> 'Foorum on suletud',

	'TOPICS_MARKED'			=> 'Teemad selles foorumis on nüüd märgitud loetuks.',

	'UNREAD_POSTS_HOT'		=> 'Lugemata postitused [ Populaarne ]',
	'UNREAD_POSTS_LOCKED'	=> 'Lugemata postitused [ Suletud ]',

	'VIEW_FORUM'			=> 'Vaata foorumit',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d teema',
		2	=> '%d teemat',
	),
));
