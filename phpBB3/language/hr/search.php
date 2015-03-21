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
'ALL_AVAILABLE'=>'Svih',
'ALL_RESULTS'=>'Od početka',
'DISPLAY_RESULTS'=>'Prikaz rezultata',
//'FOUND_SEARCH_MATCH'=>'Pronađeno: %d',
//'FOUND_SEARCH_MATCHES'=>'Pronađeno: %d',
//'FOUND_MORE_SEARCH_MATCHES'=>'Pronađeno više od: ',
'FOUND_SEARCH_MATCHES'=> array(
1=>'Pronađen %d rezultat',
2=>'Pronađena %d rezultata',
3=>'Pronađeno %d rezultata',
),
'FOUND_MORE_SEARCH_MATCHES'=> array(
1=>'Pronađeno više od %d rezultata',
2=>'Pronađeno više od %d rezultata',
3=>'Pronađeno više od %d rezultata',
),
'GLOBAL'=>'Globalna obavijest',
'IGNORED_TERMS'=>'Ignorirano',
'IGNORED_TERMS_EXPLAIN'=>'Za pretraživanja, a zato što su (pre)učestale, ignorirane su sljedeće riječi: <strong>%s</strong>.',
'JUMP_TO_POST'=>'Idi na post',
'LOGIN_EXPLAIN_EGOSEARCH'=>'Za pregledavanje vlastitih postova, trebaš se prijaviti.',
'LOGIN_EXPLAIN_UNREADSEARCH'=>'Za pregledavanje nepročitanih postova, trebaš se prijaviti.',
// <!-- Kocka je hičena! -->
'LOGIN_EXPLAIN_NEWPOSTS'=>'Za pregledavanje novih postova, trebaš se prijaviti.',
//'MAX_NUM_SEARCH_KEYWORDS_REFINE'=>'Upisao/la si previše riječi za pretraživanje.<br />Možeš upisati maksimalno %1$d riječi.',
'MAX_NUM_SEARCH_KEYWORDS_REFINE'=> array(
1=>'Upisao/la si previše riječi za pretraživanje.<br />Možeš upisati maksimalno: %1$d riječ.',
2=>'Upisao/la si previše riječi za pretraživanje.<br />Možeš upisati maksimalno: %1$d riječi.',
3=>'Upisao/la si previše riječi za pretraživanje.<br />Možeš upisati maksimalno: %1$d riječi.',
),
'NO_KEYWORDS'=>'Upiši najmanje jednu riječ za pretraživanje.<br />Riječ(i) [isključujući zamjenske znakove]:<br />treba(ju) sadržavati najmanje %s znak(ov)a;<br />ne smije(u) sadržavati više od %s znak(ov)a.',
'NO_RECENT_SEARCHES'=>'Pretražnik nije nedavno korišten.',
'NO_SEARCH'=>'Nemaš dopuštenje za korištenje Pretražnika.',
'NO_SEARCH_RESULTS'=>'Ništa nije pronađeno.',
'NO_SEARCH_LOAD'=>'Trenutno ne možeš koristiti Pretražnik.<br />Server je preopterećen.<br />Pokušaj ponovo kasnije.',
//'NO_SEARCH_TIME'=>'Trenutno ne možeš koristiti Pretražnik.<br />Pokušaj ponovo kasnije.',
'NO_SEARCH_TIME'=> array(
1=>'Trenutno ne možeš koristiti Pretražnik.<br />Pokušaj ponovo za: %d sekundu.',
2=>'Trenutno ne možeš koristiti Pretražnik.<br />Pokušaj ponovo za: %d sekunde.',
3=>'Trenutno ne možeš koristiti Pretražnik.<br />Pokušaj ponovo za: %d sekundi.',
),
'NO_SEARCH_UNREADS'=>'Pretraživanje nepročitanih postova je onemogućeno.',
'WORD_IN_NO_POST'=>'Nije pronađen niti jedan post zato što riječ <strong>%s</strong> ne postoji u niti jednom postu.',
'WORDS_IN_NO_POST'=>'Nije pronađen niti jedan post zato što riječi <strong>%s</strong> ne postoje u niti jednom postu.',
'PHRASE_SEARCH_DISABLED'=>'Pretraživanje “po” određenoj frazi nije podržano.',
'POST_CHARACTERS'=>'znakova posta',
'RECENT_SEARCHES'=>'Nedavno traženo',
'RESULT_DAYS'=>'Pretraživanje [vrijeme]',
'RESULT_SORT'=>'Redanje',
'RETURN_FIRST'=>'Prikaz [prvih]',
//'RETURN_TO_SEARCH_ADV'=>'Napredno pretraživanje',
'GO_TO_SEARCH_ADV'=>'Napredno pretraživanje',
'SEARCHED_FOR'=>'Traženo',
'SEARCHED_TOPIC'=>'Pretražene teme',
'SEARCHED_QUERY'=>'Traženo',
'SEARCH_ALL_TERMS'=>'Sve riječi',
'SEARCH_ANY_TERMS'=>'Bilo koja riječ',
'SEARCH_AUTHOR'=>'Pretraživanje po autorima/cama',
'SEARCH_AUTHOR_EXPLAIN'=>'Možeš koristiti * kao zamjenski znak.',
'SEARCH_FIRST_POST'=>'Samo prvi post teme',
'SEARCH_FORUMS'=>'Pretraživanje foruma',
'SEARCH_FORUMS_EXPLAIN'=>'Označi forum/e unutar kojeg/ih želiš pretraživati.<br />Ukoliko ne onemogućiš “Pretraživanje podforuma”, podforumi će automatski biti uključeni u pretraživanje.',
'SEARCH_IN_RESULTS'=>'Pretraživanje u rezultatima',
'SEARCH_KEYWORDS_EXPLAIN'=>'Upiši <strong>+</strong> ispred riječi koja treba biti u rezultatima.<br />Upiši <strong>-</strong> ispred riječi koja ne smije biti u rezultatima.<br />Ukoliko samo jedna riječ može biti u rezultatima, niz riječi odvojenih sa <strong>|</strong> stavi u zagrade.<br />Možeš koristiti * kao zamjenski znak.',
'SEARCH_MSG_ONLY'=>'Samo tekstovi',
'SEARCH_OPTIONS'=>'Opcije pretraživanja',
'SEARCH_QUERY'=>'Pretražnik',
'SEARCH_SUBFORUMS'=>'Pretraživanje podforuma',
'SEARCH_TITLE_MSG'=>'Naslovi i tekstovi',
'SEARCH_TITLE_ONLY'=>'Samo naslovi',
'SEARCH_WITHIN'=>'Pretraživanje',
'SORT_ASCENDING'=>'A-Ž',
'SORT_AUTHOR'=>'Autor/ica',
'SORT_DESCENDING'=>'Ž-A',
'SORT_FORUM'=>'Forum',
'SORT_POST_SUBJECT'=>'Naslov posta',
'SORT_TIME'=>'Datum postanja',
// <!-- Kocka je hičena! -->
'SPHINX_SEARCH_FAILED'=>'Neuspjelo pretraživanje: %s',
'SPHINX_SEARCH_FAILED_LOG'=>'Pretraživanje nije [moglo biti] izvršeno.<br />Informacije o neuspjelom pretraživanju pohranjene su u “zapis(nik) grešaka”.',
//'TOO_FEW_AUTHOR_CHARS'=>'Upiši najmanje %d znakova korisničkog imena autora/ice.',
'TOO_FEW_AUTHOR_CHARS'=> array(
1=>'Upiši najmanje: %d znak [korisničkog] imena autora/ice.',
2=>'Upiši najmanje: %d znaka [korisničkog] imena autora/ice.',
3=>'Upiši najmanje: %d znakova [korisničkog] imena autora/ice.',
),
));
