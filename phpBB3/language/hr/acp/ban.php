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
'1_HOUR'=>'1 sat',
'30_MINS'=>'30 minuta',
'6_HOURS'=>'6 sati',
'ACP_BAN_EXPLAIN'=>'Ovdje možeš upravljati isključivanjem korisnika/ca i to preko korisničkih imena, IP odnosno adresa elektroničke pošte.<br />Time ćeš onemogućiti pristupanje korisniku/ci bilo kojem dijelu foruma.<br />Ukoliko želiš, možeš dati kratak [maksimalno 3000 znakova] razlog isključenja [što će biti evidentirano u administratorskim zapisima].<br />Možeš određivati dužinu isključenja, npr. ukoliko želiš isključiti korisnika/cu, ne na npr. 3 mjeseca, već npr. do određenog datuma, izabrat ćeš <span style="text-decoration: underline;">Do -&gt;</span> te upisati datum u <kbd>GGGG-MM-DD</kbd> formatu.',
'BAN_EXCLUDE'=>'Izuzmi od isključenja',
'BAN_LENGTH'=>'Trajanje isključenja',
'BAN_REASON'=>'Razlog isključenja',
'BAN_GIVE_REASON'=>'Razlog isključenja koji će biti dan isključenom/j',
'BAN_UPDATE_SUCCESSFUL'=>'Lista isključenih je ažurirana.',
'BANNED_UNTIL_DATE'=>'do %s',
'BANNED_UNTIL_DURATION'=>'%1$s [do %2$s]',
'EMAIL_BAN'=>'Isključivanje jedne ili više adresa elektroničke pošte',
'EMAIL_BAN_EXCLUDE_EXPLAIN'=>'Omogući ovu opciju ukoliko želiš izuzeti upisanu/e adresu/e elektroničke pošte od svih trenutnih isključenja.',
'EMAIL_BAN_EXPLAIN'=>'Ukoliko želiš upisati više adresa elektroničke pošte, upiši svaku u novi redak.<br />Možeš koristiti * kao zamjenski znak, npr. <samp>*@hotmail.com</samp>, <samp>*@*.domena.adr</samp>, itd.',
'EMAIL_NO_BANNED'=>'Nema isključenih adresa elektroničke pošte.',
'EMAIL_UNBAN'=>'Odisključi odnosno odizuzmi adrese elektroničke pošte',
'EMAIL_UNBAN_EXPLAIN'=>'Možeš odisključiti odnosno odizuzeti više adresa elektroničke pošte odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice i preglednika.<br />Izuzete adrese elektroničke pošte bit će označene.',
'IP_BAN'=>'Isključenje jedne ili više IP adresa',
'IP_BAN_EXCLUDE_EXPLAIN'=>'Omogući ovu opciju ukoliko želiš izuzeti upisanu/e IP adresu/e od svih trenutnih isključenja.',
'IP_BAN_EXPLAIN'=>'Ukoliko želiš upisati više IP adresa, upiši svaku u novi redak.<br />Za određivanje raspona IP adresa, početak i kraj odvoji rastavnicom (-). Možeš koristiti * kao zamjenski znak.',
'IP_HOSTNAME'=>'IP adrese/imena host(ov)a',
'IP_NO_BANNED'=>'Nema isključenih IP adresa.',
// <!-- Kocka je hičena! -->
'IP_UNBAN'=>'Odisključi odnosno odizuzmi IP adrese',
'IP_UNBAN_EXPLAIN'=>'Možeš odisključiti odnosno odizuzeti više IP adresa odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice i preglednika.<br />Izuzete IP adrese bit će označene.',
'LENGTH_BAN_INVALID'=>'Datum treba biti u formatu: <kbd>GGGG-MM-DD</kbd>.',
'OPTIONS_BANNED'=>'Isključen/a',
'OPTIONS_EXCLUDED'=>'Izuzet/a',
'PERMANENT'=>'Stalno',
'UNTIL'=>'Do',
'USER_BAN'=>'Isključenje korisnika/ce(a) po korisničkom/im imenu/ima',
'USER_BAN_EXCLUDE_EXPLAIN'=>'Omogući ovu opciju ukoliko želiš izuzeti upisano/e korisničko/a ime/na od svih trenutnih isključenja.',
'USER_BAN_EXPLAIN'=>'Ukoliko želiš upisati više korisničkih imena, upiši svako u novi redak.<br />Za automatsko dodavanje korisničkih imena možeš koristiti <span style="text-decoration: underline;">Pronađi korisničko ime</span> funkciju.',
'USER_NO_BANNED'=>'Nema isključenih korisničkih imena.',
'USER_UNBAN'=>'Odisključenje odnosno odizuzmianje korisnika/ce(a) po korisničkom/im imenu/ima',
'USER_UNBAN_EXPLAIN'=>'Možeš odisključiti odnosno odizuzeti više korisničkih imena odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice i preglednika.<br />Izuzeta korisnička imena bit će označena.',
));
