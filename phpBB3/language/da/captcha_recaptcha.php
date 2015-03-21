<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: captcha_recaptcha.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'RECAPTCHA_LANG'				=> 'da',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'For at tage reCaptcha i brug, skal du tilmelde dig på <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Den angivne bekræftelseskode var ikke korrekt',

	'RECAPTCHA_PUBLIC'				=> 'Offentlig reCaptcha-nøgle',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Din offentlige reCaptcha-nøgle. Nøgler udleveres fra <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Privat reCaptcha-nøgle',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Din private reCaptcha-nøgle. Nøgler udleveres fra <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'	=> 'Indtast venligst begge ord i teksfeltet umiddelbart herunder.',
	'RECAPTCHA_SOCKET_ERROR'    => 'Der var opstod et problem ved forsøg på at oprette forbindelse til RECAPTCHA: could not open socket. Try again later.', 
));
