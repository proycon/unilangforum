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
'BOTS'=>'Upravljanje robotima',
'BOTS_EXPLAIN'=>'“Roboti” [“pauci”, “puzači”...], automatizirani agenti, najčešće [su] korišteni od strane pretražnika, a poradi ažuriranja podataka [njihovih] baza.<br />Obzirom da mogu utjecati na niz faktora, poput “povećanja” broja posjetitelja/ica, preopterećivanja resursa, te nepotpuno/netočno indeksirati stranice, za izbjegavanje navedenih problema, ovdje možeš definirati specijalan korisnički tip.',
'BOT_ACTIVATE'=>'Aktiviraj',
'BOT_ACTIVE'=>'Aktivacija robota',
'BOT_ADD'=>'Dodaj robota',
'BOT_ADDED'=>'Robot je dodan.',
'BOT_AGENT'=>'Agentsko podudaranje',
'BOT_AGENT_EXPLAIN'=>'Niz podataka koji se podudara s robotovim agentom preglednika.',
'BOT_DEACTIVATE'=>'Deaktiviraj',
'BOT_DELETED'=>'Robot je izbrisan.',
'BOT_EDIT'=>'Uređivanje robota',
'BOT_EDIT_EXPLAIN'=>'Ovdje možeš dodati/uređivati robote.<br />Možeš definirati <em>agent string</em> [niz podataka agenta] i(li) jednu/više IP adresa [raspon adresa] za slaganje. Budi oprezan/na kod definiranja slaganja <em>agent strings</em> [niza podataka agenta] i(li) adresa.<br />Također možeš odrediti koji će stil i s kojim jezikom robot “vidjeti” [smanjit ćeš “bandwidth” (izraz je, nepreveden, ostavljen u izvornom obliku, poradi prečeste pogrešne uporabe ovog termina umjesto “data transfer rate” i srodnih pojmova, (a) da netko ne bi nešto krivo shvatio/la, op. a.) određivanjem nekog jednostavnog stila].<br />Ne zaboravi postaviti (određena) dopuštenja za korisničku grupu robota.',
'BOT_LANG'=>'Jezik robota',
'BOT_LANG_EXPLAIN'=>'Zadani jezik [za] robota.',
'BOT_LAST_VISIT'=>'Zadnji posjet',
'BOT_IP'=>'IP adresa robota',
'BOT_IP_EXPLAIN'=>'Adrese odvoji zarezom.<br />Dopušteno je parcijalno slaganje.',
'BOT_NAME'=>'Naziv robota',
'BOT_NAME_EXPLAIN'=>'Služi samo tebi kao informacija.',
'BOT_NAME_TAKEN'=>'Naziv je [već] u uporabi te ne može biti korišten za robota.',
'BOT_NEVER'=>'Nikad',
'BOT_STYLE'=>'Stil robota',
// <!-- Kocka je hičena! -->
'BOT_STYLE_EXPLAIN'=>'Zadani stil [za] robota.',
'BOT_UPDATED'=>'Robot je ažuriran.',
'ERR_BOT_AGENT_MATCHES_UA'=>'Agent robota je sličan jednome kojeg trenutno koristiš, podesi agenta za [ovog] robota.',
'ERR_BOT_NO_IP'=>'IP adresa(e) je(su) neispravna(e) ili je greška kod/s imenom hosta.',
'ERR_BOT_NO_MATCHES'=>'Upiši barem agenta ili IP adresu.',
'NO_BOT'=>'Nije pronađen niti jedan robot s određenim IDem.',
'NO_BOT_GROUP'=>'Nije bilo moguće pronaći grupu robota.',
));
