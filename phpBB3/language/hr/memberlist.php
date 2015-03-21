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
'ABOUT_USER'=>'Profil',
'ACTIVE_IN_FORUM'=>'Najaktivniji/a na forumu',
'ACTIVE_IN_TOPIC'=>'Najaktivniji/a u temi',
'ADD_FOE'=>'Dodaj gnjavatora/icu',
'ADD_FRIEND'=>'Dodaj prijatelja/icu',
'AFTER'=>'Poslije',
//'AIM'=>'AIM',
'ALL'=>'Sva',
'BEFORE'=>'Prije',
//'CC_EMAIL'=>'Pošalji i meni kopiju poruke.',
'CC_SENDER'=> 'Pošalji i meni kopiju poruke.',
//'CONTACT_USER'=>'Kontakt',
'CONTACT_ADMIN'=>'Kontaktiraj administratora/icu',
'DEST_LANG'=>'Jezik',
'DEST_LANG_EXPLAIN'=>'Izaberi odgovarajući jezik [ukoliko je dostupan] za primatelja/icu poruke.',
'EMAIL_BODY_EXPLAIN'=>'Poruka će biti poslana kao običan tekst, stoga nemoj koristiti HTML/BBKod.<br />Kao povratna adresa za poruku bit će navedena tvoja adresa elektroničke pošte.',
'EDIT_PROFILE'=>'Uredi profil',
'EMAIL_DISABLED'=>'Funkcije vezane uz elektroničku poštu su onemogućene.',
'EMAIL_SENT'=>'Poruka je poslana.',
'EMAIL_TOPIC_EXPLAIN'=>'Poruka će biti poslana kao običan tekst, stoga nemoj koristiti HTML/BBKod.<br />Informacije o temi su uključene u poruku.<br />Kao povratna adresa za poruku bit će navedena tvoja adresa elektroničke pošte.',
'EMPTY_ADDRESS_EMAIL'=>'Upiši adresu elektroničke pošte primatelja/ice.',
'EMPTY_MESSAGE_EMAIL'=>'Upiši tekst [sadržaj] poruke.',
// <!-- Kocka je hičena! -->
'EMPTY_MESSAGE_IM'=>'Upiši tekst [sadržaj] poruke.',
'EMPTY_NAME_EMAIL'=>'Upiši ime primatelja/ice.',
'EMPTY_SENDER_EMAIL'=>'Upiši adresu elektroničke pošte pošiljatelja/ice.',
'EMPTY_SENDER_NAME'=>'Upiši ime pošiljatelja/ice.',
'EMPTY_SUBJECT_EMAIL'=>'Upiši naslov [predmet] poruke.',
'EQUAL_TO'=>'=',
'FIND_USERNAME_EXPLAIN'=>'Formu možeš koristiti za traženje određenih korisnika/ca.<br />Ne trebaš ispuniti sva polja.<br />Možeš koristiti * ukoliko tražiš različite oblike neke riječi [npr. slasti* će rezultirati kao, npr., slastičar, slastičarna, slastice...].<br />Kod upisivanja datuma koristi format <kbd>YYYY-MM-DD</kbd>, [npr. <samp>2012-12-21.</samp>].<br />Ukoliko forma omogućuje, koristi kućice za označavanje za odabir jednog/više korisničkih imena [klik na gumb “Odaberi označeno”].',
'FLOOD_EMAIL_LIMIT'=>'Trenutno ne možeš koristiti elektroničku poštu.<br />Pokušaj ponovo kasnije.',
'GROUP_LEADER'=>'Vođa',
'HIDE_MEMBER_SEARCH'=>'Sakrij pretraživanje članova/ica',
'IM_ADD_CONTACT'=>'Dodaj kontakt',
//'IM_AIM'=>'Za korištenje ovoga trebaš imati instaliran AOL Instant Messenger.',
//'IM_AIM_EXPRESS'=>'AIM Express',
'IM_DOWNLOAD_APP'=>'Preuzmi aplikaciju',
//'IM_ICQ'=>'Moguće je da je korisnik/ca upalio/la opciju o ne primanju nezatraženih/neželjenih poruka.',
'IM_JABBER'=>'Moguće je da je korisnik/ca upalio/la opciju o ne primanju nezatraženih/neželjenih poruka.',
'IM_JABBER_SUBJECT'=>'Ovo je automatska poruka na koju, molim(o), ne odgovaraj.<br />Poruka od korisnika/ce: %1$s - %2$s.',
'IM_MESSAGE'=>'Tvoja poruka',
//'IM_MSNM'=>'Za korištenje ovoga trebaš imati instaliran Windows Messenger.',
//'IM_MSNM_BROWSER'=>'Tvoj preglednik ovo/to ne podržava.',
//'IM_MSNM_CONNECT'=>'Nisi spojen/a na MSNM.\nZa nastavak se trebaš spojiti na MSNM.',
'IM_NAME'=>'Tvoje ime',
'IM_NO_DATA'=>'Kontakt informacija, za ovog/u korisnika/cu, nema.',
'IM_NO_JABBER'=>'Direktno slanje poruka korisnicima/ama Jabbera nije podržano.<br />Za kontaktiranje primatelja/ica, trebaš instalirati Jabber klijent.',
'IM_RECIPIENT'=>'Primatelj/ica',
'IM_SEND'=>'Pošalji poruku',
'IM_SEND_MESSAGE'=>'Pošalji poruku',
'IM_SENT_JABBER'=>'Poruka, osobi %1$s, je poslana.',
'IM_USER'=>'Pošalji poruku',
//'JABBER'=>'Jabber',
'LAST_ACTIVE'=>'Zadnji put aktivan/na',
'LESS_THAN'=>'<',
//'LIST_USER'=>'1 korisnik/ca',
//'LIST_USERS'=>'%d korisnika/ca',
'LIST_USERS'=> array(
1=>'%d korisnik/ca',
2=>'%d korisnika/ce',
3=>'%d korisnika/ca',
),
//'LOGIN_EXPLAIN_LEADERS'=>'Za pregledavanje popisa članova/ica Vođa, trebaš se prijaviti.',
'LOGIN_EXPLAIN_MEMBERLIST'=>'Za pregledavanje popisa Članstva, trebaš se prijaviti.',
'LOGIN_EXPLAIN_SEARCHUSER'=>'Za pretraživanje Članstva, trebaš se prijaviti.',
'LOGIN_EXPLAIN_TEAM'=>'Za pregledavanje popisa članova/ica Tima, trebaš se prijaviti.',
'LOGIN_EXPLAIN_VIEWPROFILE'=>'Za pregledavanje profila korisnika/ca, trebaš se prijaviti.',
'MORE_THAN'=>'>',
//'MSNM'=>'MSNM',
'NO_CONTACT_FORM'=>'Forma za kontaktiranje administratora/ica je onemogućena.',
'NO_CONTACT_PAGE'=>'Stranica za kontaktiranje administratora/ica je onemogućena.',
'NO_EMAIL'=>'Nemaš dopuštenje za slanje elektroničke pošte korisniku/ci.',
'NO_VIEW_USERS'=>'Nemaš dopuštenje za pristup popisu/profilima Članstva.',
'ORDER'=>'Redanje',
'OTHER'=>'Ostalo',
'POST_IP'=>'Postano s IP/domene',
// <!-- Kocka je hičena! -->
//'RANK'=>'Status',
'REAL_NAME'=>'Ime primatelja/ice',
'RECIPIENT'=>'Primatelj/ica',
'REMOVE_FOE'=>'Izbriši gnjavatora/icu',
'REMOVE_FRIEND'=>'Izbriši prijatelja/icu',
//'SEARCH_USER_POSTS'=>'Pronađi postove korisnika/ce',
'SELECT_MARKED'=>'Odaberi označeno',
'SELECT_SORT_METHOD'=>'Redanje',
//'SEND_AIM_MESSAGE'=>'AIM',
'SENDER_EMAIL_ADDRESS'=>'Tvoja adresa elektroničke pošte',
'SENDER_NAME'=>'Tvoje ime',
'SEND_ICQ_MESSAGE'=>'ICQ',
'SEND_IM'=>'IM',
'SEND_JABBER_MESSAGE'=>'Jabber',
'SEND_MESSAGE'=>'PP',
//'SEND_MSNM_MESSAGE'=>'MSNM/WLM',
'SEND_YIM_MESSAGE'=>'YIM',
'SORT_EMAIL'=>'Epošta',
'SORT_LAST_ACTIVE'=>'Zadnji put aktivan/na',
'SORT_POST_COUNT'=>'Broj postova',
'USERNAME_BEGINS_WITH'=>'Korisničko ime počinje s(a)',
'USER_ADMIN'=>'Administriranje',
'USER_BAN'=>'Isključivanje',
'USER_FORUM'=>'Statistika',
'USER_LAST_REMINDED'=> array(
0=>'Nema [poslanih] podsjetnika.',
1=>'%1$d podsjetnik poslan<br />» %2$s',
2=>'%1$d podsjetnika poslana<br />» %2$s',
3=>'%1$d podsjetnika poslano<br />» %2$s',
),
'USER_ONLINE'=>'Online',
'USER_PRESENCE'=>'Info',
'USERS_PER_PAGE'=>'Korisnika/ca po stranici',
'VIEWING_PROFILE'=>'Profil korisnika/ce ~ %s',
//'VISITED'=>'Zadnji put prijavljen/a',
//'WWW'=>'WWW',
'VIEW_FACEBOOK_PROFILE'=>'Pogledaj Facebook profil',
'VIEW_SKYPE_PROFILE'=>'Pogledaj Skype profil',
'VIEW_TWITTER_PROFILE'=>'Pogledaj Twitter profil',
'VIEW_YOUTUBE_CHANNEL'=>'Pogledaj YouTube kanal',
'VIEW_GOOGLEPLUS_PROFILE'=>'Pogledaj Google+ profil',
//'YIM'=>'YIM',
));
