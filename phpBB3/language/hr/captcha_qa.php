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
'CAPTCHA_QA'=>'Q&amp;A',
'CONFIRM_QUESTION_EXPLAIN'=>'Cilj postavljanja pitanja jest sprječavanje automatskog slanja od strane robota.',
'CONFIRM_QUESTION_WRONG'=>'Odgovor, na pitanje, kojeg si upisao/la je netočan.',
'QUESTION_ANSWERS'=>'Odgovori',
'ANSWERS_EXPLAIN'=>'Točne odgovore, na pitanje, upiši, svakog, u novi redak.',
'CONFIRM_QUESTION'=>'Pitanje',
'ANSWER'=>'Odgovor',
'EDIT_QUESTION'=>'Uredi pitanje',
'QUESTIONS'=>'Pitanja',
'QUESTIONS_EXPLAIN'=>'Za izvršenje svake radnje, preduvjet izvršenja koje je uporaba Q&amp;A dodatka, korisnici/e će biti upitani jedno od, ovdje upisanih, pitanja.<br />Da bi ovaj dodatak uopće mogao biti uporabljen, na zadanom jeziku, treba biti postavljeno najmanje jedno pitanje.<br />Pitanja bi trebala biti lako razumljiva i odgovorljiva za ciljanu skupinu korisnika/ca [ovog, tvog] foruma, ali, opet, dovoljno teška da bi zlouporaba od strane robota, koji su u stanju izvršavati pretraživanje Google™, bila smanjena na najmanju moguću mjeru.<br />Korištenje i izmjenjivanje setova velikog broja pitanja će polučiti najbolje rezultate.<br />Ukoliko je za pitanja/odgovore na postavljena pitanja potrebna uporaba velikih/malih slova, interpunkcijskih znakova i praznina, trebaš omogućiti postavke stroge provjere.',
'QUESTION_DELETED'=>'Pitanje je izbrisano.',
'QUESTION_LANG'=>'Jezik',
'QUESTION_LANG_EXPLAIN'=>'Jezik na kojem će biti napisani pitanje i odgovori.',
'QUESTION_STRICT'=>'Stroga provjera',
'QUESTION_STRICT_EXPLAIN'=>'Ukoliko je omogućeno, velika/mala slova, interpunkcijski znakovi i praznine će [moći] biti uporabljeni.',
'QUESTION_TEXT'=>'Pitanje',
'QUESTION_TEXT_EXPLAIN'=>'Pitanje koje će biti postavljeno korisniku/ci.',
'QA_ERROR_MSG'=>'Ispuni sva polja i upiši barem jedan odgovor.',
'QA_LAST_QUESTION'=>'Ne može izbrisati sva pitanja dok je dodatak aktivan.',
// <!-- Kocka je hičena! -->
));
