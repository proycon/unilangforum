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
'APPROVE'=>'Odobri',
'ATTACHMENT'=>'Privitak',
'ATTACHMENT_FUNCTIONALITY_DISABLED'=>'Privitak/ci je/su onemogućen/i.',
'BOOKMARK_ADDED'=>'Tema je dodana u Bookmarke.',
'BOOKMARK_ERR'=>'Bookmarkiranje teme nije uspjelo.<br />Pokušaj ponovo kasnije.',
'BOOKMARK_REMOVED'=>'Tema je izbrisana iz Bookmarka.',
'BOOKMARK_TOPIC'=>'Bookmarkiraj',
'BOOKMARK_TOPIC_REMOVE'=>'Odbookmarkiraj',
'BUMPED_BY'=>'Zadnji/a bumpirao/la %1$s u/na %2$s.',
'BUMP_TOPIC'=>'Bumpiraj',
'CODE'=>'Kod',
//'COLLAPSE_QR'=>'Sakrij Brzi odgovor',
'DELETE_TOPIC'=>'Izbriši temu',
'DELETED_INFORMATION'=>'Izbrisano od strane korisnika/ce %1$s na %2$s',
'DISAPPROVE'=>'Neodobri',
'DOWNLOAD_NOTICE'=>'Nemaš dopuštenje za pregledavanje privit(a)ka dodan(og)ih postu.',
//'EDITED_TIMES_TOTAL'=>'Zadnja izmjena: %1$s u/na %2$s, ukupno mijenjano %3$d put/a.',
//'EDITED_TIME_TOTAL'=>'Zadnja izmjena: %1$s u/na %2$s, ukupno mijenjano %3$d put/a.',
'EDITED_TIMES_TOTAL'=> array(
1=>'Zadnja izmjena: %2$s, dana/u %3$s, ukupno mijenjano %1$d put.',
2=>'Zadnja izmjena: %2$s, dana/u %3$s, ukupno mijenjano %1$d puta.',
3=>'Zadnja izmjena: %2$s, dana/u %3$s, ukupno mijenjano %1$d puta.',
// <!-- Kocka je hičena! -->
),
'EMAIL_TOPIC'=>'Pošalji elektroničkom poštom',
'ERROR_NO_ATTACHMENT'=>'Privitak više ne postoji.',
'FILE_NOT_FOUND_404'=>'Datoteka <strong>%s</strong> ne postoji.',
'FORK_TOPIC'=>'Kopiraj temu',
'FULL_EDITOR'=>'Napredno uređivanje i prikaz',
'LINKAGE_FORBIDDEN'=>'Nemaš dopuštenje za pregledavanje/preuzimanje/linkanje s/na ove stranice.',
'LOGIN_NOTIFY_TOPIC'=>'Za pregledavanje ove teme, [o kojoj ti je stigla obavijest], trebaš se prijaviti.',
'LOGIN_VIEWTOPIC'=>'Za pregledavanje ove teme, trebaš se prijaviti.',
'MAKE_ANNOUNCE'=>'Promijeni u “Obavijest”',
'MAKE_GLOBAL'=>'Promijeni u “Globalno”',
'MAKE_NORMAL'=>'Promijeni u “Normalno”',
'MAKE_STICKY'=>'Promijeni u “Važno”',
//'MAX_OPTIONS_SELECT'=>'Možeš odabrati <strong>%d</strong> opcija/e.',
//'MAX_OPTION_SELECT'=>'Možeš izabrati <strong>1</strong> opciju.',
'MAX_OPTIONS_SELECT'=> array(
1=>'Možeš izabrati: <strong>%d</strong> opciju.',
2=>'Možeš odabrati: <strong>%d</strong> opcije.',
3=>'Možeš odabrati: <strong>%d</strong> opcija.',
),
'MISSING_INLINE_ATTACHMENT'=>'Privitak <strong>%s</strong> više nije dostupan.',
'MOVE_TOPIC'=>'Premjesti temu',
'NO_ATTACHMENT_SELECTED'=>'Nisi izabrao/la privitak za preuzimanje/pregledavanje.',
'NO_NEWER_TOPICS'=>'Nema novijih tema.',
'NO_OLDER_TOPICS'=>'Nema starijih tema.',
'NO_UNREAD_POSTS'=>'Nema novih nepročitanih postova.',
'NO_VOTE_OPTION'=>'Označi opciju za koju glasuješ.',
'NO_VOTES'=>'Nema glasova.',
'POLL_ENDED_AT'=>'Anketa je završila: %s.',
'POLL_RUN_TILL'=>'Anketa traje do: %s.',
'POLL_VOTED_OPTION'=>'Glasovao/la si za ovu opciju.',
'POST_DELETED_RESTORE'=>'Post je izbrisan, ali može biti vraćen.',
'PRINT_TOPIC'=>'Prikaz ispisa',
'QUICK_MOD'=>'Brz(o)Bir',
'QUICKREPLY'=>'Brzi odgovor',
'QUOTE'=>'Citat',
'REPLY_TO_TOPIC'=>'Odgovori',
'RESTORE'=>'Vrati',
'RESTORE_TOPIC'=>'Vrati temu',
'RETURN_POST'=>'Klikni %sovdje%s za povratak na post.',
//'SHOW_QR'=>'Brzi odgovor',
'SUBMIT_VOTE'=>'Glasuj',
'TOPIC_TOOLS'=>'Alati tema',
'TOTAL_VOTES'=>'Ukupno glasova',
'UNLOCK_TOPIC'=>'Otključaj temu',
'VIEW_INFO'=>'Detalji o postu',
'VIEW_NEXT_TOPIC'=>'Sljedeća tema',
'VIEW_PREVIOUS_TOPIC'=>'Prethodna tema',
'VIEW_RESULTS'=>'Rezultati',
//'VIEW_TOPIC_POST'=>'1 post',
//'VIEW_TOPIC_POSTS'=>'%d post(ov)a',
'VIEW_TOPIC_POSTS'=> array(
1=>'%d post',
// <!-- Kocka je hičena! -->
2=>'%d posta',
3=>'%d postova',
),
'VIEW_UNREAD_POST'=>'Prvi nepročitan post',
//'VISIT_WEBSITE'=>'WWW',
'VOTE_SUBMITTED'=>'Glas je zabilježen.',
'VOTE_CONVERTED'=>'“Predomišljanje” odnosno mijenjanje glasov(anj)a nije podržano u konvertiranim anketama.',
));
