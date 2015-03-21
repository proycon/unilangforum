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
	'RECAPTCHA_LANG'				=> 'pl',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Aby używać reCAPTCHY, musisz utworzyć konto na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCAPTCHA',
	'RECAPTCHA_INCORRECT'			=> 'Wysłany kod potwierdzenia wizualnego jest nieprawidłowy',

	'RECAPTCHA_PUBLIC'				=> 'Klucz publiczny reCAPTCHA',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Twój klucz publiczny reCAPTCHA. Klucze można otrzymać na witrynie <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Klucz prywatny reCAPTCHA',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Twój klucz prywatny reCAPTCHA. Klucze można otrzymać na witrynie <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Jeśli chcesz zabezpieczyć się przed automatycznym publikowaniem postów, musisz wprowadzić oba widoczne słowa do znajdujących się tutaj pól tekstowych.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Wystąpił problem z połączeniem się z usługą reCAPTCHA – nie można otworzyć gniazda. Ponów próbę za chwilę.',
));
