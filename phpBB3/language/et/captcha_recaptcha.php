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
	'RECAPTCHA_LANG'				=> 'et',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Et kasutada reCaptcha funktsiooni, pead looma omale kasutajakonto <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> veebilehel.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Sisestatud visuaalkinnitus oli ebakorrektne',

	'RECAPTCHA_PUBLIC'				=> 'Avalik reCaptcha võti',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Sinu avalik reCaptcha võti. Võtmeid on võimalik saada <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> veebilehelt.',
	'RECAPTCHA_PRIVATE'				=> 'Privaatne reCaptcha võti',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Sinu privaatne reCaptcha võti. Võtmeid on võimalik saada <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> veebilehelt.',

	'RECAPTCHA_EXPLAIN'				=> 'Et ennetada automaatseid teateid, nõuame, et sisestaksid mõlemad sõnad tekstivälja.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Teenuse RECAPTCHA ühendamisel tekkis viga: ei saa avada socket. Palun proovi hiljem uuesti.',
));
