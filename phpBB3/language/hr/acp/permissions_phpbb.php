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
'ACL_CAT_ACTIONS'=>'Radnje',
'ACL_CAT_CONTENT'=>'Sadržaj',
'ACL_CAT_FORUMS'=>'Forumi',
'ACL_CAT_MISC'=>'Opcije',
'ACL_CAT_PERMISSIONS'=>'Dopuštenja',
'ACL_CAT_PM'=>'Privatne poruke',
'ACL_CAT_POLLS'=>'Ankete',
'ACL_CAT_POST'=>'Postovi/anje',
'ACL_CAT_POST_ACTIONS'=>'Radnje postanja',
'ACL_CAT_POSTING'=>'Postanje',
'ACL_CAT_PROFILE'=>'Profil',
'ACL_CAT_SETTINGS'=>'Postavke',
'ACL_CAT_TOPIC_ACTIONS'=>'Radnje tema',
'ACL_CAT_USER_GROUP'=>'Korisnici/e &amp; Grupe',
));
$lang = array_merge($lang, array(
'ACL_U_VIEWPROFILE'=>'Može (pre)gleda(va)ti profile, popis Članstva i online listu',
'ACL_U_CHGNAME'=>'Može mijenjati korisničko ime',
'ACL_U_CHGPASSWD'=>'Može mijenjati zaporku',
'ACL_U_CHGEMAIL'=>'Može mijenjati adresu elektroničke pošte',
'ACL_U_CHGAVATAR'=>'Može mijenjati avatara',
'ACL_U_CHGGRP'=>'Može mijenjati zadanu korisničku grupu',
// <!-- Kocka je hičena! -->
'ACL_U_CHGPROFILEINFO'=>'Može mijenjati informacije korisničkog/ih polja',
'ACL_U_ATTACH'=>'Može dodavati privitke',
'ACL_U_DOWNLOAD'=>'Može preuzimati datoteke',
'ACL_U_SAVEDRAFTS'=>'Može pohranjivati skice',
'ACL_U_CHGCENSORS'=>'Može onemogućiti cenzuru riječi',
'ACL_U_SIG'=>'Može koristiti potpis',
'ACL_U_SENDPM'=>'Može slati privatne poruke',
'ACL_U_MASSPM'=>'Može slati skupne privatne poruke',
'ACL_U_MASSPM_GROUP'=>'Može slati privatne poruke grupama',
'ACL_U_READPM'=>'Može čitati privatne poruke',
'ACL_U_PM_EDIT'=>'Može uređivati vlastite privatne poruke',
'ACL_U_PM_DELETE'=>'Može izbrisati privatne poruke iz vlastite mape',
'ACL_U_PM_FORWARD'=>'Može prosljeđivati privatne poruke',
'ACL_U_PM_EMAILPM'=>'Može slati privatne poruke elektroničkom poštom',
'ACL_U_PM_PRINTPM'=>'Može ispisivati privatne poruke',
'ACL_U_PM_ATTACH'=>'Može dodavati privitke privatnim porukama',
'ACL_U_PM_DOWNLOAD'=>'Može preuzimati datoteke iz privatnih poruka',
'ACL_U_PM_BBCODE'=>'Može koristiti BBKod(ove) u privatnim porukama',
'ACL_U_PM_SMILIES'=>'Može koristiti smajliće u privatnim porukama',
'ACL_U_PM_IMG'=>'Može umetati slike u privatne poruke ([img] BBCode)',
'ACL_U_PM_FLASH'=>'Može umetati Flash u privatne poruke ([flash] BBCode)',
'ACL_U_SENDEMAIL'=>'Može slati poruke elektroničkom poštom',
'ACL_U_SENDIM'=>'Može slati instant poruke',
'ACL_U_IGNOREFLOOD'=>'Može ignorirati zadani razmak postanja',
'ACL_U_HIDEONLINE'=>'Može sakriti svoj online status',
'ACL_U_VIEWONLINE'=>'Može vidjeti skrivene online korisnike/ce',
'ACL_U_SEARCH'=>'Može pretraživati forum',
));
$lang = array_merge($lang, array(
'ACL_F_LIST'=>'Može vidjeti forum',
'ACL_F_READ'=>'Može čitati forum',
'ACL_F_SEARCH'=>'Može pretraživati forum',
'ACL_F_SUBSCRIBE'=>'Može se pretplaćivati na forum(e)',
'ACL_F_PRINT'=>'Može ispisivati teme',
'ACL_F_EMAIL'=>'Može slati teme elektroničkom poštom',
'ACL_F_BUMP'=>'Može bumpirati teme',
'ACL_F_USER_LOCK'=>'Može zaključavati vlastite teme',
'ACL_F_DOWNLOAD'=>'Može preuzimati datoteke',
'ACL_F_REPORT'=>'Može prijavljivati postove',
'ACL_F_POST'=>'Može započinjati nove teme',
'ACL_F_STICKY'=>'Može postati “važno”',
'ACL_F_ANNOUNCE'=>'Može postati obavijesti',
'ACL_F_REPLY'=>'Može odgovarati na teme',
'ACL_F_EDIT'=>'Može uređivati vlastite postove',
'ACL_F_DELETE'=>'Može trajno izbrisati vlastite postove',
'ACL_F_SOFTDELETE'=>'Može “prividno” izbris(iv)ati vlastite postove<br /><em>Moderatori/ce, s ovlaštenjem odobravanja postova, mogu vratiti “prividno” izbrisane postove.</em>',
'ACL_F_IGNOREFLOOD'=>'Može ignorirati zadani razmak postanja',
'ACL_F_POSTCOUNT'=>'Može poveća(va)ti brojač postova<br /><em>Odnosi se samo na nove postove.</em>',
'ACL_F_NOAPPROVE'=>'Može postati bez odobrenja',
'ACL_F_ATTACH'=>'Može dodavati privitke',
'ACL_F_ICONS'=>'Može koristiti ikone tema/postova',
'ACL_F_BBCODE'=>'Može koristiti BBKod(ove)',
'ACL_F_FLASH'=>'Može umetati Flash ([flash] BBCode)',
// <!-- Kocka je hičena! -->
'ACL_F_IMG'=>'Može umetati slike ([img] BBCode)',
'ACL_F_SIGS'=>'Može koristiti potpis(e)',
'ACL_F_SMILIES'=>'Može koristiti smajliće',
'ACL_F_POLL'=>'Može kreirati ankete',
'ACL_F_VOTE'=>'Može glasovati u anketama',
'ACL_F_VOTECHG'=>'Može mijenjati glasovanje [poništiti dani(e) glas(ove) i glasovati za drugu(e) opciju(e)]',
));
$lang = array_merge($lang, array(
'ACL_M_EDIT'=>'Može uređivati postove',
'ACL_M_DELETE'=>'Može trajno izbrisati postove',
'ACL_M_SOFTDELETE'=>'Može “prividno” izbris(iv)ati vlastite postove<br /><em>Moderatori/ce, s ovlaštenjem odobravanja postova, mogu vratiti “prividno” izbrisane postove.</em>',
'ACL_M_APPROVE'=>'Može odobravati i vraćati postove',
'ACL_M_REPORT'=>'Može zaključivati i izbrisati prijave',
'ACL_M_CHGPOSTER'=>'Može promijeniti autora/icu posta',
'ACL_M_MOVE'=>'Može premještati teme',
'ACL_M_LOCK'=>'Može zaključavati teme',
'ACL_M_SPLIT'=>'Može podjeljivati teme',
'ACL_M_MERGE'=>'Može spajati teme',
'ACL_M_INFO'=>'Može (pre)gleda(va)ti detalje posta',
'ACL_M_WARN'=>'Može davati upozorenja<br /><em>Ova dopuštenja moguće je postaviti samo globalno, nisu forumski bazirana.</em>',
'ACL_M_BAN'=>'Može upravljati isključivanjem<br /><em>Ova dopuštenja moguće je postaviti samo globalno, nisu forumski bazirana.</em>',
));
$lang = array_merge($lang, array(
'ACL_A_BOARD'=>'Može mijenjati postavke foruma/provjeravati postoje li ažuriranja',
'ACL_A_SERVER'=>'Može mijenjati postavke servera/komunikacije',
'ACL_A_JABBER'=>'Može mijenjati Jabber postavke',
'ACL_A_PHPINFO'=>'Može (pre)gleda(va)ti php postavke',
'ACL_A_FORUM'=>'Može upravljati forumima',
'ACL_A_FORUMADD'=>'Može dodavati nove forume',
'ACL_A_FORUMDEL'=>'Može izbrisati forume',
'ACL_A_PRUNE'=>'Može izbrisivati forume',
'ACL_A_ICONS'=>'Može mijenjati ikone tema/postova i smajliće',
'ACL_A_WORDS'=>'Može upravljati cenzurom riječi',
'ACL_A_BBCODE'=>'Može definirati BBKod tagove',
'ACL_A_ATTACH'=>'Može mijenjati postavke vezane uz privitke',
'ACL_A_USER'=>'Može upravljati korisnicima/ama<br /><em>Uključuje i prikaz agenta preglednika korisnika/ce na online listi.</em>',
'ACL_A_USERDEL'=>'Može izbrisati/izbrisivati korisnike/ce',
'ACL_A_GROUP'=>'Može upravljati grupama',
'ACL_A_GROUPADD'=>'Može dodavati nove grupe',
'ACL_A_GROUPDEL'=>'Može izbrisati grupe',
'ACL_A_RANKS'=>'Može upravljati statusima',
'ACL_A_PROFILE'=>'Može upravljati prilagođenim korisničkim poljima',
'ACL_A_NAMES'=>'Može upravljati nedopuštenim imenima',
'ACL_A_BAN'=>'Može upravljati isključivanjem',
'ACL_A_VIEWAUTH'=>'Može (pre)gleda(va)ti maske dopuštenja',
'ACL_A_AUTHGROUPS'=>'Može mijenjati dopuštenja individualnih grupa',
'ACL_A_AUTHUSERS'=>'Može mijenjati dopuštenja individualnih korisnika/ca',
'ACL_A_FAUTH'=>'Može mijenjati klase forumskih dopuštenja',
'ACL_A_MAUTH'=>'Može mijenjati klase dopuštenja moderatora/ica',
'ACL_A_AAUTH'=>'Može mijenjati klase dopuštenja administratora/ica',
'ACL_A_UAUTH'=>'Može mijenjati klase dopuštenja korisnika/ca',
'ACL_A_ROLES'=>'Može upravljati setovima dopuštenja',
'ACL_A_SWITCHPERM'=>'Može koristiti ostala dopuštenja',
'ACL_A_STYLES'=>'Može upravljati stilovima',
'ACL_A_EXTENSIONS'=>'Može upravljati ekstenzijama',
'ACL_A_VIEWLOGS'=>'Može (pre)gleda(va)ti zapise',
'ACL_A_CLEARLOGS'=>'Može izbris(iv)ati zapise',
'ACL_A_MODULES'=>'Može upravljati modulima',
'ACL_A_LANGUAGE'=>'Može upravljati jezičnim paketima',
'ACL_A_EMAIL'=>'Može slati skupne poruke elektroničkom poštom',
'ACL_A_BOTS'=>'Može upravljati robotima',
'ACL_A_REASONS'=>'Može upravljati prijavama i odbijenicama',
'ACL_A_BACKUP'=>'Može raditi zaštitne kopije/povrat baze podataka',
'ACL_A_SEARCH'=>'Može upravljati postavkama pretraživanja i backendskim indeksima pretraživanja',
//Dopuštenja korisnika/ca
//Dopuštenja administratora/ica
//Dopuštenja moderatora/ica
//Forumska dopuštenja
//Dopuštenja globalnih moderatora/ica
));
