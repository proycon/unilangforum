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
	'RECAPTCHA_LANG'				=> 'ca',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Per tal d’utilitzar reCaptcha heu de crear un compte al lloc web <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'El codi de confirmació visual que heu tramés és incorrecte',

	'RECAPTCHA_PUBLIC'				=> 'Clau pública reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'La vostra clau pública reCaptcha. Podeu aconseguir claus al lloc web <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Clau privada reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'La vostra clau privada reCaptcha. Podeu aconseguir claus al lloc web <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'Per prevenir les trameses automàtiques requerim que introduïu les dues paraules que es mostren al camp de text a continuació.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'S’ha produït un problema amb la connexió al servei RECAPTCHA: no s’ha pogut obrir el sòcol. Intenteu-ho més tard.',
));
