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
'ACP_GROUPS_MANAGE_EXPLAIN'=>'Odavde možeš administrirati sve grupe.<br />Možeš dodavati/izbrisati/uređivati grupe, dodjeljivati grupama vođe, mijenjati tipove grupa [otvorena/zatvorena/skrivena...] i dr.',
'ADD_GROUP_CATEGORY'=>'Dodaj kategoriju',
'ADD_USERS'=>'Dodavanje korisnika/ca',
'ADD_USERS_EXPLAIN'=>'Ovdje možeš dodavati nove korisnike/ce grupi.<br />Možeš izabrati hoće li [ova] grupa postati [nova] zadana grupa [odabranih] korisnika/ca.<br />Možeš postaviti korisnike/ce za vođe grupe.<br />Upiši svako korisničko ime u novi redak.',
'COPY_PERMISSIONS'=>'Kopiraj dopuštenja iz',
'COPY_PERMISSIONS_EXPLAIN'=>'Po kreiranju, grupa će dobiti [imati] ista dopuštenja kao izabrana.',
'CREATE_GROUP'=>'Kreiraj novu grupu',
'GROUPS_NO_MEMBERS'=>'Grupa nema članova.',
'GROUPS_NO_MODS'=>'Vođa grupe nije postavljen/a.',
'GROUP_APPROVE'=>'Odobri korisnika/cu',
'GROUP_APPROVED'=>'Odobri korisnike/ce',
'GROUP_AVATAR'=>'Avatar grupe',
'GROUP_AVATAR_EXPLAIN'=>'Slika će biti prikazana u odjeljku upravljanja grupama.',
'GROUP_CATEGORY_NAME'=>'Naziv kategorije',
'GROUP_CLOSED'=>'Zatvorena',
'GROUP_COLOR'=>'Boja grupe',
'GROUP_COLOR_EXPLAIN'=>'Definira boju kojom će biti prikazana korisnička imena članova/ica grupe.<br />Ukoliko želiš da se korisnička imena članova/ica grupe prikazuju u skladu sa zadanim [im] postavkama, ostavi praznim [nemoj upisati boju].',
//'GROUP_CONFIRM_ADD_USER'=>'Jesi li siguran/na da želiš dodati korisnika/cu %1$s grupi?',
//'GROUP_CONFIRM_ADD_USERS'=>'Jesi li siguran/na da želiš dodati korisnike/ce %1$s grupi?',
'GROUP_CONFIRM_ADD_USERS'=> array(
1=>'Jesi li siguran/na da želiš dodati korisnika/cu %2$s grupi?',
// <!-- Kocka je hičena! -->
2=>'Jesi li siguran/na da želiš dodati korisnike/ce %2$s grupi?',
3=>'Jesi li siguran/na da želiš dodati korisnike/ce %2$s grupi?',
),
'GROUP_CREATED'=>'Grupa je kreirana.',
'GROUP_DEFAULT'=>'Postavi grupu kao zadanu za člana/icu',
'GROUP_DEFS_UPDATED'=>'Grupa je postavljena kao zadana za sve odabrane članove/ice.',
'GROUP_DELETE'=>'Isključi člana/icu iz grupe',
'GROUP_DELETED'=>'Grupa je izbrisana te su zadane grupe korisnika/ca postavljene.',
'GROUP_DEMOTE'=>'Smijeni s položaja vođe grupe',
'GROUP_DESC'=>'Opis grupe',
'GROUP_DETAILS'=>'Detalji grupe',
'GROUP_EDIT_EXPLAIN'=>'Ovdje možeš urediti/uređivati postojeću grupu. <br />Možeš joj promijeniti naziv, opis, tip te niz drugih detalja.<br />Postavke grupe prepisuju [trenutne] postavke korisnika/ce.<br />Članovi/ce grupe mogu promijeniti avatar(e) grupe(a) osim ako im to onemogućiš [dopuštenjima].',
'GROUP_ERR_USERS_EXIST'=>'Određeni/e korisnici/e su već članovi/ce grupe.',
'GROUP_FOUNDER_MANAGE'=>'Upravljanje omogućeno samo osnivači(ca)ma',
'GROUP_FOUNDER_MANAGE_EXPLAIN'=>'Ograničava upravljanje grupom [samo] na osnivač(ic)e.<br />Korisnici/e s dopuštenjima grupa kao i članovi/ce grupe [i dalje] mogu vidjeti grupu.',
'GROUP_HIDDEN'=>'Skrivena',
'GROUP_LANG'=>'Jezik grupe',
'GROUP_LEAD'=>'Vođe grupe',
'GROUP_LEADERS_ADDED'=>'Novi/e vođe dodani/e su grupi.',
'GROUP_LEGEND'=>'Prikaži grupu u legendi',
'GROUP_LIST'=>'Trenutni/e članovi/ce',
'GROUP_LIST_EXPLAIN'=>'Ispod se nalazi kompletan popis svih članova/ica grupe.<br />Ovdje možeš dodavati nove članove/ice odnosno izbrisati stare [osim ukoliko se radi o određenoj specijalnoj grupi].',
'GROUP_MEMBERS'=>'Članovi/ce grupe',
'GROUP_MEMBERS_EXPLAIN'=>'Ispod se nalazi kompletan popis svih članova/ica grupe.<br />Uključuje odvojene odjeljke za vođe, članove/ice “na čekanju” i [stvarne] članove/ice.<br />Odavde možeš upravljati svim aspektima (a) vezano uz to tko je korisnik/ca grupe i koju ulogu [u grupi] ima. Ukoliko vođu grupe želiš smijeniti s položaja, ali ne i isključiti iz grupe, možeš to opcijom <em>Smijeni s položaja vođe grupe</em>. Želiš li člana/icu grupe imenovati vođom grupe, možeš to opcijom <em>Postavi za vođu grupe</em>.',
'GROUP_MESSAGE_LIMIT'=>'Privatnu(e) poruku(e) grupe ograniči na mapu(e)',
'GROUP_MESSAGE_LIMIT_EXPLAIN'=>'Ove postavke prepisuju [dotadašnje] postavke korisnika/ce (a) vezane uz ograničenje(a) mapa poruka.<br />Vrijednost 0 znači da će biti korištena zadana ograničenja korisnika/ce.',
'GROUP_MODS_ADDED'=>'Novi/e vođe dodani/e su grupi.',
'GROUP_MODS_DEMOTED'=>'Vođe grupe smijenjeni/e su s položaja.',
'GROUP_MODS_PROMOTED'=>'Članovi/ce grupe postavljeni su za [promovirani/e su u] vođe grupe.',
'GROUP_NAME'=>'Naziv grupe',
'GROUP_NAME_TAKEN'=>'Naziv grupe koje si upisao/la već postoji.<br />Izaberi alternativu.',
'GROUP_OPEN'=>'Otvorena',
'GROUP_PENDING'=>'Članovi/ce “na čekanju”',
'GROUP_MAX_RECIPIENTS'=>'Maksimalan broj dopuštenih primatelja/ica po privatnoj poruci',
'GROUP_MAX_RECIPIENTS_EXPLAIN'=>'Maksimalan broj dopuštenih primatelja/ica po svakoj privatnoj poruci.<br />Vrijednost 0 znači da će biti korištene postavke foruma.',
'GROUP_OPTIONS_SAVE'=>'Group wide options',
'GROUP_PROMOTE'=>'Postavi za vođu grupe',
'GROUP_RANK'=>'Status grupe',
'GROUP_RECEIVE_PM'=>'Grupa može primati privatne poruke',
'GROUP_RECEIVE_PM_EXPLAIN'=>'Bez obzira na omogućavanje primanja privatnih poruka grupi, ukoliko se radi o skrivenoj grupi, tada, grupi neće moći biti (po)slane poruke.',
'GROUP_REQUEST'=>'Na zahtjev',
'GROUP_SETTINGS_SAVE'=>'Globalne postavke grupe',
'GROUP_SKIP_AUTH'=>'Izuzmi vođu grupe od dopuštenja',
'GROUP_SKIP_AUTH_EXPLAIN'=>'Ukoliko je omogućeno, vođa grupe više neće nasljeđivati dopuštenja grupe.',
'GROUP_SPECIAL'=>'Predefinirano',
'GROUP_TEAMPAGE'=>'Prikaži grupu na stranici <em>Tima</em>',
//'GROUP_TIMEZONE'=>'Vremenska zona grupe',
'GROUP_TYPE'=>'Tip grupe',
'GROUP_TYPE_EXPLAIN'=>'Tip grupe određuje tko i kako može postati članom/icom grupe odnosno tko uopće smije/može vidjeti grupu.',
'GROUP_UPDATED'=>'Postavke grupe su ažurirane.',
'GROUP_USERS_ADDED'=>'Novi/e korisnici/e su dodani/e grupi.',
'GROUP_USERS_EXIST'=>'Određeni/e korisnici/e su već članovi/ce grupe.',
'GROUP_USERS_REMOVE'=>'Korisnici/e su isključeni/e iz grupe i nove zadane vrijednosti su postavljene.',
// <!-- Kocka je hičena! -->
'LEGEND_EXPLAIN'=>'Ovo su grupe [koje su] prikazane u legendi grupa:',
'LEGEND_SETTINGS'=>'Postavke legende',
'LEGEND_SORT_GROUPNAME'=>'Poredaj legendu po nazivima grupa',
'LEGEND_SORT_GROUPNAME_EXPLAIN'=>'Ukoliko je omogućeno, redoslijed ispod će biti ignoriran.',
'MANAGE_LEGEND'=>'Upravljanje legendom grupa',
'MANAGE_TEAMPAGE'=>'Upravljanje stranicom <em>Tima</em>',
'MAKE_DEFAULT_FOR_ALL'=>'Učini zadanom grupom za sve članove/ice',
'MEMBERS'=>'Članstvo',
'NO_GROUP'=>'Nije određena grupa.',
'NO_GROUPS_ADDED'=>'Nema dodanih grupa.',
'NO_GROUPS_CREATED'=>'Nema kreiranih grupa.',
'NO_PERMISSIONS'=>'Nemoj kopirati dopuštenja',
'NO_USERS'=>'Nisi upisao/la niti jednog/u korisnika/cu.',
'NO_USERS_ADDED'=>'Niti jedan/na korisnik/ca nije dodan/a grupi.',
'NO_VALID_USERS'=>'Nisi upisao/la niti jednog/u korisnika/cu izaberivog/u za izabranu radnju.',
'SELECT_GROUP'=>'Izaberi grupu',
'SPECIAL_GROUPS'=>'Preddefinirane grupe',
'SPECIAL_GROUPS_EXPLAIN'=>'Preddefinirane grupe su specijalne grupe koje ne mogu biti izbrisane odnosno direktno izmijenjene, [no], možeš dodavati korisnike/ce i uređivati osnovne postavke.',
'TEAMPAGE'=>'Stranica <em>Tima</em>',
'TEAMPAGE_DISP_ALL'=>'Svo članstvo',
'TEAMPAGE_DISP_DEFAULT'=>'Zadana grupa korisnika/ce',
'TEAMPAGE_DISP_FIRST'=>'Prvo članstvo',
'TEAMPAGE_EXPLAIN'=>'Ovo su grupe [koje su] prikazane na stranici <em>Tima</em>:',
'TEAMPAGE_FORUMS'=>'Prikaži moderirane forume',
'TEAMPAGE_FORUMS_EXPLAIN'=>'Ukoliko je omogućeno, moderatorima/cama će, na popisu Članstva, u retku pored njihovog korisničkog imena, biti izlistan popis svih tematskih foruma koje moderiraju, (a) što može biti (pre)zahtjevno za baze velikih foruma.',
'TEAMPAGE_MEMBERSHIPS'=>'Prikaži članstvo korisnika/ce',
'TEAMPAGE_SETTINGS'=>'Postavke stranice <em>Tima</em>',
'TOTAL_MEMBERS'=>'Članstvo',
'USERS_APPROVED'=>'Korisnici/e su odobreni/e.',
'USER_DEFAULT'=>'Korisnički zadano',
'USER_DEF_GROUPS'=>'Korisnički definirane grupe',
'USER_DEF_GROUPS_EXPLAIN'=>'Korisnički definirane grupe su grupe koje su kreirali/e [kreiraju] administratori/ce.<br />Možeš upravljati Članstvom, uređivati postavke grupa te [čak i] izbrisati grupe.',
'USER_GROUP_DEFAULT'=>'Postavi kao zadanu grupu',
'USER_GROUP_DEFAULT_EXPLAIN'=>'Izabereš li “Da”, [ova] grupa će postati zadana grupa za dodane članove/ice.',
'USER_GROUP_LEADER'=>'Postavi za vođu grupe',
));
