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
'ACP_PRUNE_USERS_EXPLAIN'=>'Ovdje možeš izbrisati [ili deaktivirati] korisničke račune i to na više načina: po broju postova, (ne)aktivnosti(ma) i sl, a možeš ih [načine] (i) kombinirati [npr. izbrisati korisničke račune s manje od 10 postova, a koji su zadnji put bili u uporabi npr. 01. veljače 2003.]. Za tekstualna polja možeš koristiti * kao zamjenski znak.<br />Ukoliko izbrišeš korisnički račun, imaj na umu da nema undo [povratne] funkcije što znači da ne možeš vratiti korisnički račun koji izbrišeš.',
'CRITERIA'=>'Kriterij(i)',
'DEACTIVATE_DELETE'=>'Deaktiviraj ili izbriši',
'DEACTIVATE_DELETE_EXPLAIN'=>'Izaberi želiš li samo deaktivirati ili [baš] izbrisati korisnički račun [nema undo (povratne) funkcije].',
'DELETE_USERS'=>'Izbriši',
'DELETE_USER_POSTS'=>'Izbriši (i) postove izbrisanog/ih korisničkog/ih računa',
'DELETE_USER_POSTS_EXPLAIN'=>'Izbrisat će (i) sve postove izbrisanog/ih korisničkog/ih računa [samo kod izbrisivanja korisničkog/ih računa, nema efekta kod deaktiviranja korisničkog/ih računa].',
'JOINED_EXPLAIN'=>'Upiši datum u <kbd>GGGG-MM-DD</kbd> formatu [možeš koristiti oba polja za određivanje intervala ili ostaviti jedno praznim za otvoren raspon datuma].',
'LAST_ACTIVE_EXPLAIN'=>'Upiši datum u <kbd>GGGG-MM-DD</kbd> formatu.<br />Upiši <kbd>0000-00-00</kbd> za izbrisivanje korisničkih računa koji nikada nisu bili u uporabi [<em>prije</em> i <em>poslije</em> uvjeti će biti ignorirani].',
'POSTS_ON_QUEUE'=>'Postovi koji čekaju odobrenje',
'PRUNE_USERS_GROUP_EXPLAIN'=>'Ograniči na korisnike/ce unutar izabrane grupe.',
'PRUNE_USERS_GROUP_NONE'=>'Sve grupe',
'PRUNE_USERS_LIST'=>'Korisnički računi koji će biti izbrisani odnosno deaktivirani',
'PRUNE_USERS_LIST_DELETE'=>'U skladu s odabranim kriterijima, sljedeći korisnički računi će biti izbrisani. <br />Pojedine korisnike/ce možeš maknuti s liste izbrisivanja odoznačavanjem kućice pored njihovih korisničkih imena.',
'PRUNE_USERS_LIST_DEACTIVATE'=>'U skladu s odabranim kriterijima, sljedeći korisnički računi će biti deaktivirani. <br />Pojedine korisnike/ce možeš maknuti s liste deaktivacije odoznačavanjem kućice pored njihovih korisničkih imena.',
'SELECT_USERS_EXPLAIN'=>'Upiši više korisničkih imena na koje će biti primijenjeni gornji kriteriji.<br />Osnivačko korisničko ime ne može biti izbrisano odnosno deaktivirano.',
'USER_DEACTIVATE_SUCCESS'=>'Korisnički račun/i je/su deaktiviran/i.',
'USER_DELETE_SUCCESS'=>'Korisnički račun/i je/su izbrisan/i.',
'USER_PRUNE_FAILURE'=>'Niti jedno korisničko ime ne odgovara odabranim kriterijima.',
'WRONG_ACTIVE_JOINED_DATE'=>'Datum je neispravno upisan, treba biti upisan u <kbd>GGGG-MM-DD</kbd> formatu.',
));
$lang = array_merge($lang, array(
// <!-- Kocka je hičena! -->
'ACP_PRUNE_FORUMS_EXPLAIN'=>'Ovdje možeš izbrisati teme u kojima nije bilo novih postova određen broj dana odnosno teme koje nisu pregledane određen broj dana.<br />Ukoliko ne upišeš broj, sve teme bit će izbrisane.<br />Zadano, neće biti izbrisane teme s [još] aktivnim anketama odnosno teme s “važnim” [“važno”] i “obavijesnim” [(globalna) obavijest] postovima.',
'FORUM_PRUNE'=>'Izbrisivanje foruma',
'NO_PRUNE'=>'Niti jedan/na post/tema/forum nije izbrisan.',
'SELECTED_FORUM'=>'Izabran forum',
'SELECTED_FORUMS'=>'Odabrani forumi',
'POSTS_PRUNED'=>'Izbrisano postova',
'PRUNE_ANNOUNCEMENTS'=>'Izbriši “obavijesne” postove/teme',
'PRUNE_FINISHED_POLLS'=>'Izbriši završene ankete',
'PRUNE_FINISHED_POLLS_EXPLAIN'=>'Izbrisuje teme s anketama koje su završile.',
'PRUNE_FORUM_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati odabrane forume? <br />Ukoliko izbrišeš odabrane forume, imaj na umu da nema undo [povratne] funkcije što znači da ne možeš vratiti teme/postove koje izbrišeš.',
'PRUNE_NOT_POSTED'=>'Dan/a od zadnjeg posta(nja)',
'PRUNE_NOT_VIEWED'=>'Dan/a od zadnjeg pregled(avanj)a',
'PRUNE_OLD_POLLS'=>'Izbriši stare ankete',
'PRUNE_OLD_POLLS_EXPLAIN'=>'Izbrisuje teme s anketama u kojima nije glasovano određen broj dana.',
'PRUNE_STICKY'=>'Izbriši “važne” postove/teme',
'PRUNE_SUCCESS'=>'Izbrisivanje foruma je izvršeno.',
'TOPICS_PRUNED'=>'Izbrisano tema',
));
