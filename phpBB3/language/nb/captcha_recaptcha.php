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
	'RECAPTCHA_LANG'				=> 'nb',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Du må opprette en konto på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> for å kunne bruke reCaptcha.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Den visuelle bekreftelseskoden du angav, var feil',

	'RECAPTCHA_PUBLIC'				=> 'Offenlig reCaptcha-nøkkel',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din offentlige reCaptcha-nøkkel. Nøkler kan du få tak i på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privat reCaptcha-nøkkel',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din private reCaptcha-nøkkel. Nøkler kan du få tak i på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'For å hindre automatisert innsending, krever vi at du skriver inn begge ordene som vises i tekstfeltet nedenfor.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'Feil ved tilkobling til RECAPTCHA-tjenesten: Kan ikke åpne socket. Prøv igjen senere.',
));
