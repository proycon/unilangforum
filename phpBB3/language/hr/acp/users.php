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
'ADMIN_SIG_PREVIEW'=>'Prikaz potpisa',
'AT_LEAST_ONE_FOUNDER'=>'Ne možeš promijeniti ovog/u korisnika/cu iz osnivača/ice u običnog/u korisnika/cu.<br />Na forumu treba postajati najmanje jedno korisničko ime s osnivačkim statusom.<br />Ukoliko želiš promijeniti status [korisnika/ce] iz osnivača/ice u neki drugi, prvo trebaš promovirati [nekog/u] drugog/u korisnika/cu u osnivača/icu.',
'BAN_ALREADY_ENTERED'=>'Isključenje je već [bilo] izvršeno po ovom kriteriju poradi čega lista isključenja nije ažurirana.',
'BAN_SUCCESSFUL'=>'Isključenje je izvršeno.',
'CANNOT_BAN_ANONYMOUS'=>'Nemaš dopuštenje za isključivanje korisničkog/ih računa anonimaca/ki.<br />Dopuštenja za anonimne korisnike/ce možeš dodavati/izbrisati/uređivati u “Dopuštenjima”.',
'CANNOT_BAN_FOUNDER'=>'Nemaš dopuštenje za isključivanje korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_BAN_YOURSELF'=>'Nemaš dopuštenje za isključivanje korisničkog računa samog/e sebe.',
'CANNOT_DEACTIVATE_BOT'=>'Nemaš dopuštenje za deaktiviranje računa robota.<br />Umjesto toga, možeš deaktivirati samog/e robota/e sa/na stranici robota.',
'CANNOT_DEACTIVATE_FOUNDER'=>'Nemaš dopuštenje za deaktiviranje korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_DEACTIVATE_YOURSELF'=>'Nemaš dopuštenje za deaktiviranje korisničkog računa samog/e sebe.',
'CANNOT_FORCE_REACT_BOT'=>'Nemaš dopuštenje za forsiranje deaktivacije računa robota.<br />Umjesto toga, možeš reaktivirati samog/e robota/e sa/na stranici robota.',
'CANNOT_FORCE_REACT_FOUNDER'=>'Nemaš dopuštenje za forsiranje deaktivacije korisničkog/ih računa osnivača/ica foruma.',
'CANNOT_FORCE_REACT_YOURSELF'=>'Nemaš dopuštenje za forsiranje deaktivacije korisničkog računa samog/e sebe.',
'CANNOT_REMOVE_ANONYMOUS'=>'Ne možeš izbrisati korisničke račune gostiju.',
'CANNOT_REMOVE_FOUNDER'=>'Nemaš dopuštenje za izbrisivanje korisničkog računa osnivača/ica foruma.',
'CANNOT_REMOVE_YOURSELF'=>'Nemaš dopuštenje za izbrisivanje korisničkog računa samog/e sebe.',
'CANNOT_SET_FOUNDER_IGNORED'=>'Ne možeš promovirati ignorirane korisnik/ce u osnivače.',
'CANNOT_SET_FOUNDER_INACTIVE'=>'Za promoviranje korisnika/ce u osnivača/icu, aktiviraj njegov/njezin korisnički račun [samo aktivirani/e korisnici/e (njihovi korisnički računi) mogu biti promovirani].',
'CONFIRM_EMAIL_EXPLAIN'=>'Ukoliko si [iznad] promijenio/la adresu elektroničke pošte, potvrdi ju.',
'DELETE_POSTS'=>'Izbriši postove',
'DELETE_USER'=>'Izbriši korisnički račun',
'DELETE_USER_EXPLAIN'=>'Ova operacija ne može biti poništena što će reći da “nema povratka na prijašnje stanje” ukoliko izbrišeš [neki/nečiji] korisnički račun.<br />Nepročitane privatne poruke poslane od [tog/te] korisnika/ce bit će izbrisane [nepročitane] iz sandučića primatelja/ice(a).',
// <!-- Kocka je hičena! -->
'FORCE_REACTIVATION_SUCCESS'=>'Reaktivacija je (is)forsirana.',
'FOUNDER'=>'Osnivač/ica',
'FOUNDER_EXPLAIN'=>'Osnivač/ice imaju sve administratorske ovlasti, ne mogu biti isključeni/e te njihov korisnički račun ne može biti mijenjan od strane neosnivača/ica.',
'GROUP_APPROVE'=>'Odobri korisnika/cu',
'GROUP_DEFAULT'=>'Postavi grupu zadanom za korisnika/cu',
'GROUP_DELETE'=>'Isključi korisnika/cu iz grupe',
'GROUP_DEMOTE'=>'Smijeni s položaja vođe grupe',
'GROUP_PROMOTE'=>'Postavi za vođu grupe',
'IP_WHOIS_FOR'=>'IP whois za %s',
'LAST_ACTIVE'=>'Zadnji put aktivan/na',
'MOVE_POSTS_EXPLAIN'=>'Izaberi forum u koji želiš premjestiti sve postove korisnika/ce.',
'NO_SPECIAL_RANK'=>'Nije dodijeljen poseban status',
'NO_WARNINGS'=>'Nema upozorenja.',
'NOT_MANAGE_FOUNDER'=>'Pokušao/la si promijeniti korisnički račun osnivača/ice.<br />Samo osnivači/ce mogu mijenjati korisničke račune [ostalih] osnivača/ica.',
'QUICK_TOOLS'=>'Brz(o)Bir',
'REGISTERED'=>'Registriran/a',
'REGISTERED_IP'=>'Registriran/a s IP adresom',
'RETAIN_POSTS'=>'Zadrži postove',
'SELECT_FORM'=>'Izaberi formu',
'SELECT_USER'=>'Izaberi korisnika/cu',
'USER_ADMIN'=>'Upravljanje korisnicima/ama',
'USER_ADMIN_ACTIVATE'=>'Aktiviraj korisnički račun',
'USER_ADMIN_ACTIVATED'=>'Korisnički račun je aktiviran.',
'USER_ADMIN_AVATAR_REMOVED'=>'Avatar je uklonjen iz korisničkog računa.',
'USER_ADMIN_BAN_EMAIL'=>'Isključi po adresi elektroničke pošte',
'USER_ADMIN_BAN_EMAIL_REASON'=>'Adresa elektroničke pošte je isključena putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_IP'=>'Isključi po IP adresi',
'USER_ADMIN_BAN_IP_REASON'=>'IP adresa je isključena putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_NAME_REASON'=>'Korisničko ime je isključeno putem upravljanja korisnicima/ama.',
'USER_ADMIN_BAN_USER'=>'Isključi po korisničkom imenu',
'USER_ADMIN_DEACTIVATE'=>'Deaktiviraj korisnički račun',
'USER_ADMIN_DEACTIVED'=>'Korisnički račun je deaktiviran.',
'USER_ADMIN_DEL_ATTACH'=>'Izbriši sve privitke',
'USER_ADMIN_DEL_AVATAR'=>'Izbriši avatar',
'USER_ADMIN_DEL_OUTBOX'=>'Isprazni pohranik odlaznih poruka',
'USER_ADMIN_DEL_POSTS'=>'Izbriši sve postove',
'USER_ADMIN_DEL_SIG'=>'Izbriši potpis',
'USER_ADMIN_EXPLAIN'=>'Ovdje možeš mijenjati korisničke informacije te određene posebne postavke.',
'USER_ADMIN_FORCE'=>'Prinudi na reaktivaciju',
'USER_ADMIN_LEAVE_NR'=>'Izbriši s popisa nedavno registriranih korisnika/ca',
'USER_ADMIN_MOVE_POSTS'=>'Premjesti sve postove',
'USER_ADMIN_SIG_REMOVED'=>'Potpis je uklonjen iz korisničkog računa.',
'USER_ATTACHMENTS_REMOVED'=>'Izbrisani su svi privitci koje je korisnik/ca postao/la.',
'USER_AVATAR_NOT_ALLOWED'=>'Avatar ne može biti prikazan jer avatari nisu dopušteni.',
'USER_AVATAR_UPDATED'=>'Ažurirani su detalji avatara korisnika/ce.',
'USER_AVATAR_TYPE_NOT_ALLOWED'=>'Avatar ne može biti prikazan jer njegov tip nije dopušten.',
'USER_CUSTOM_PROFILE_FIELDS'=>'Prilagođena korisnička polja',
'USER_DELETED'=>'Korisnički račun je izbrisan.',
'USER_GROUP_ADD'=>'Dodaj korisnika/cu grupi',
'USER_GROUP_NORMAL'=>'Korisnik/ca je član/ica sljedećih korisnički definiranih grupa',
'USER_GROUP_PENDING'=>'Korisnik/ca je “na čekanju” u sljedećim korisničkim grupama',
'USER_GROUP_SPECIAL'=>'Korisnik/ca je član/ica sljedećih preddefiniranih grupa',
'USER_LIFTED_NR'=>'Status nedavno registriranog/e/ih korisnika/ce/ca je uklonjen.',
// <!-- Kocka je hičena! -->
'USER_NO_ATTACHMENTS'=>'Nema dodanih privitaka za prikaz.',
'USER_NO_POSTS_TO_DELETE'=>'Korisnik/ca nema postova za zadržati/izbrisati.',
'USER_OUTBOX_EMPTIED'=>'Pohranik odlaznih poruka je ispražnjen.',
'USER_OUTBOX_EMPTY'=>'Pohranik odlaznih poruka korisnika/ce je [već bio] ispražnjen.',
'USER_OVERVIEW_UPDATED'=>'Korisnički detalji su ažurirani.',
'USER_POSTS_DELETED'=>'Izbrisani su svi postovi korisnika/ce.',
'USER_POSTS_MOVED'=>'Postovi korisnika/ce premješteni su u odredišni forum.',
'USER_PREFS_UPDATED'=>'Korisničke postavke su ažurirane.',
'USER_PROFILE'=>'Korisnički profil',
'USER_PROFILE_UPDATED'=>'Korisnički profil je ažuriran.',
'USER_RANK'=>'Status korisnika/ce',
'USER_RANK_UPDATED'=>'Status korisnika/ce je ažuriran.',
'USER_SIG_UPDATED'=>'Potpis korisnika/ce je ažuriran.',
'USER_WARNING_LOG_DELETED'=>'Nema dostupnih informacija.<br />Najvjerojatnije su zapisi izbrisani.',
'USER_TOOLS'=>'Osnovne radnje',
));
