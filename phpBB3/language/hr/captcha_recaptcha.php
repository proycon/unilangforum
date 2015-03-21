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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, array(
'RECAPTCHA_LANG'=>'hr',
'RECAPTCHA_NOT_AVAILABLE'=>'Da bi mogao/la koristiti reCaptcha, trebaš kreirati korisnički račun na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
'CAPTCHA_RECAPTCHA'=>'reCaptcha',
'RECAPTCHA_INCORRECT'=>'Potvrdni kod kojeg si upisao/la je netočan.',
'RECAPTCHA_PUBLIC'=>'Javni reCaptcha ključ',
'RECAPTCHA_PUBLIC_EXPLAIN'=>'Tvoj javni reCaptcha ključ.<br />Ključ(eve) je moguće dobiti na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
'RECAPTCHA_PRIVATE'=>'Privatni reCaptcha ključ',
'RECAPTCHA_PRIVATE_EXPLAIN'=>'Tvoj privatni reCaptcha ključ.<br />Ključ(eve) je moguće dobiti na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
'RECAPTCHA_EXPLAIN'=>'S ciljem sprječavanja automatskog slanja, upisivanje obje prikazane riječi, u donje tekstualno polje, je obvezno.',
'RECAPTCHA_SOCKET_ERROR'=>'Došlo je do problema prilikom povezivanja s RECAPTCHA uslugom: nije bilo moguće otvoriti <em>socket</em>. Pokušaj ponovo kasnije.',
// <!-- Kocka je hičena! -->
));
