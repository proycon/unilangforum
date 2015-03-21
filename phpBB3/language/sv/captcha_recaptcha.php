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
	'RECAPTCHA_LANG'				=> 'en',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Du behöver ett konto på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> för att kunna använda reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Den visuella konfirmationskoden som du angav är felaktig',

	'RECAPTCHA_PUBLIC'				=> 'Public reCaptcha key',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din publika reCaptcha nyckel. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Private reCaptcha key',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din privata reCaptcha nyckel. Nycklar kan erhållas på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>',

	'RECAPTCHA_EXPLAIN'				=> 'För att förhindra automatiska registreringar så kräver forumet att du skriver in en verifieringskod. Koden visas i bilden nedan.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Det var ett problem med att kontakta RECAPTCHA-tjänsten: kunde inte öppna anslutning. Försök igen senare.',
));
