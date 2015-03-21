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
'ACP_MASS_EMAIL_EXPLAIN'=>'Odavde možeš poslati poruku elektroničkom poštom [svim] korisnicima/ama foruma odnosno, <strong>ukoliko je omogućeno</strong>, članovima/icama korisničkih grupa.<br />Poruka će biti poslana s adrese elektroničke pošte administratora/ice foruma, (a) primatelji/ce će biti navedeni/e u BCC [Blind Carbon Copy ~ Na znanje] zaglavlju.<br />Zadano je postavljeno da u jednoj poruci može biti navedeno maksimalno 20 primatelja/ica, ukoliko ih je više, bit će poslano više poruka. Ukoliko šalješ poruku velikom broju primatelja/ica, trebat će [ti] malo strpljenja, nemoj prekinuti slanje “na pola puta”. Uobičajeno je da slanje skupne poruke elektroničkom poštom potraje neko vrijeme. Bit ćeš obaviješten/a kada poruka bude poslana.',
'ALL_USERS'=>'Svi/e korisnici/e',
'COMPOSE'=>'Pisanje/sastavljanje/slanje poruke',
'EMAIL_SEND_ERROR'=>'Prilikom slanja poruke elektroničkom poštom došlo je do jedne/više grešaka.<br />Provjeri %szapise grešaka%s za detaljne informacije.',
'EMAIL_SENT'=>'Poruka je poslana.',
'EMAIL_SENT_QUEUE'=>'Poruka je stavljena “na čekanje” i čeka slanje.',
'LOG_SESSION'=>'Zapisuj sesije elektroničke pošte u kritične zapise.',
'SEND_IMMEDIATELY'=>'Pošalji odmah',
'SEND_TO_GROUP'=>'Pošalji grupi',
'SEND_TO_USERS'=>'Pošalji korisnicima/ama',
'SEND_TO_USERS_EXPLAIN'=>'Upisivanjem korisničkog/ih imena, izbor grupe iznad bit će prepisan.<br />Upiši svako korisničko ime u novi redak.',
'MAIL_BANNED'=>'Pošalji poruku (i) isključenim korisnicima/ama',
'MAIL_BANNED_EXPLAIN'=>'Prilikom slanja poruke grupi [korisnika/ca], izborom ove opcije [(a) koja nije zadana)], poruka će biti poslana (i) isključenim korisnicima/ama.',
'MAIL_HIGH_PRIORITY'=>'Visok',
'MAIL_LOW_PRIORITY'=>'Nizak',
'MAIL_NORMAL_PRIORITY'=>'Običan',
'MAIL_PRIORITY'=>'Prioritet slanja',
'MASS_MESSAGE'=>'Poruka',
'MASS_MESSAGE_EXPLAIN'=>'Koristi običan [plain] tekst jer će sva eventualna formatiranja biti uklonjena prije slanja.',
'NO_EMAIL_MESSAGE'=>'Upiši poruku.',
'NO_EMAIL_SUBJECT'=>'Upiši naslov [predmet] poruke.',
// <!-- Kocka je hičena! -->
));
