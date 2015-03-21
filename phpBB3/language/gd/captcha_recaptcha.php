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
	'RECAPTCHA_LANG'	=> 'gd',
	'RECAPTCHA_NOT_AVAILABLE'	=> 'Feumaidh tu cunntas a chruthachadh air <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> gus reCaptcha a chleachdadh.',
	'CAPTCHA_RECAPTCHA'	=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'	=> 'Chan eil an còd dearbhaidh lèirsinneach a chuir thu ann mar bu chòir.',
	'RECAPTCHA_PUBLIC'	=> 'Iuchair reCaptcha poblach',
	'RECAPTCHA_PUBLIC_EXPLAIN'	=> 'An iuchair reCaptcha poblach agad. Gheibh thu iuchraichean air <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'	=> 'Iuchair reCaptcha prìobhaideach',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'An iuchair reCaptcha prìobhaideach agad. Gheibh thu iuchraichean air <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_EXPLAIN'	=> 'Tha sinn ag iarraidh ort an dà fhacal a chì thu an-seo a chur a-steach dhan raon teacsa gu h&#8209;ìosal gus bacadh a chur air botaichean.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Thachair duilgheadas le ceangal ris an t-seirbheis RECAPTCHA: cha b’ urrainn dhuinn an t-socaid fhosgladh. Feuch ris a-rithist an ceann greis.',
));
