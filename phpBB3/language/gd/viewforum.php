<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-05-30 - GunChleoc http://www.foramnagaidhlig.net is akerbeltz http://www.akerbeltz.org
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
	'ACTIVE_TOPICS'	=> 'Cuspairean beòtha',
	'ANNOUNCEMENTS'	=> 'Brathan',
	'FORUM_PERMISSIONS'	=> 'Ceadan nam fòraman',
	'ICON_ANNOUNCEMENT'	=> 'Brath',
	'ICON_STICKY'	=> 'Fleodrainn',
	'LOGIN_NOTIFY_FORUM'	=> 'Chaidh fios a chur thugad mun fhòram seo, log a-steach gus a leughadh.',
	'MARK_TOPICS_READ'	=> 'Comharraich gun deach na cuspairean a leughadh',
	'NEW_POSTS_HOT'	=> 'Postaichean ùra [ Fèill mhòr ]',
	'NEW_POSTS_LOCKED'	=> 'Postaichean ùra [ Glaiste ]',
	'NO_NEW_POSTS_HOT'	=> 'Gun phostaichean ùra [ Fèill mhòr ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Gun phostaichean ùra [ Glaiste ]',
	'NO_READ_ACCESS'	=> 'Tha cead riatanach a dhìth ort gus cuspairean a leughadh san fhòram seo.',
	'POST_FORUM_LOCKED'	=> 'Tha am fòram glaiste',
	'TOPICS_MARKED'	=> 'Tha thu air comharrachadh gu bheil thu air cuspairean an fhòraim seo a leughadh.',
	'VIEW_FORUM'	=> 'A’ leughadh fòram',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d chuspair',
		2	=> '%d chuspair',
		3	=> '%d cuspairean',
		4	=> '%d cuspair',
	),
	'NO_UNREAD_POSTS_HOT'	=> 'Gun phostaichean gun leughadh [ Fèill mhòr ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Gun phostaichean gun leughadh [ Glaiste ]',
	'UNREAD_POSTS_HOT'	=> 'Postaichean gun leughadh [ Fèill mhòr ]',
	'UNREAD_POSTS_LOCKED'	=> 'Postaichean gun leughadh [ Glaiste ]',
));
