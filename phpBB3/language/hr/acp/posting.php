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
'ACP_BBCODES_EXPLAIN'=>'BBKod je specijalna implementacija HTMLa.<br />Sličan je HTMLu u stilu; tagovi se umeću u vitičaste zagrade [i] [umjesto &lt; i &gt;] (a) što nudi veću kontrolu prikaza.<br />Ovdje možeš dodavati/izbrisati/uređivati BBKodove.',
'ADD_BBCODE'=>'Dodaj novi BBKod',
'BBCODE_DANGER'=>'BBKod koji pokušavaš dodati koristi {TEXT} unutar HTML atributa, (a) što predstavlja potencijalan sigurnosni problem.<br />Umjesto toga, pokušaj s restriktivnijim {SIMPLETEXT} ili {INTTEXT} tipovima.<br />Nastavni samo ako razumiješ o kolikom se sigurnosnom riziku radi te ako smatraš da je korištenje {TEXT}(a) apsolutno neizbježno.',
'BBCODE_DANGER_PROCEED'=>'Nastavi',
'BBCODE_ADDED'=>'BBKod je dodan.',
'BBCODE_EDITED'=>'BBKod je uređen.',
'BBCODE_DELETED'=>'BBKod je izbrisan.',
'BBCODE_NOT_EXIST'=>'BBKod ne postoji.',
'BBCODE_HELPLINE'=>'Pomoćni redak',
'BBCODE_HELPLINE_EXPLAIN'=>'Ovo polje sadrži <em>mouse over</em> tekst BBKod(ov)a.',
'BBCODE_HELPLINE_TEXT'=>'Tekst pomoćnog retka',
'BBCODE_HELPLINE_TOO_LONG'=>'Tekst pomoćnog retka je predugačak.',
'BBCODE_INVALID_TAG_NAME'=>'Naziv taga BBKoda već postoji.',
'BBCODE_INVALID'=>'BBKod je konstruiran u neispravnoj formi.',
'BBCODE_OPEN_ENDED_TAG'=>'BBKodovi trebaju sadržavati i otvarajući i zatvarajući tag.',
'BBCODE_TAG'=>'Tag',
'BBCODE_TAG_TOO_LONG'=>'Naziv taga BBKoda je predugačko.',
'BBCODE_TAG_DEF_TOO_LONG'=>'Definicija taga je predugačka, trebaš ju skratiti.',
'BBCODE_USAGE'=>'Primjena BBKod(ov)a',
'BBCODE_USAGE_EXAMPLE'=>'[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
'BBCODE_USAGE_EXPLAIN'=>'Ovdje definiraš kako koristiti BBKod(ov)e.<br />Zamijeni upise odgovarajućim [tokenima] znakovima [%sbaci pogled: ispod%s].',
'EXAMPLE'=>'Primjer:',
// <!-- Kocka je hičena! -->
'EXAMPLES'=>'Primjeri:',
'HTML_REPLACEMENT'=>'HTML zamjene',
'HTML_REPLACEMENT_EXAMPLE'=>'&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
'HTML_REPLACEMENT_EXPLAIN'=>'Ovdje definiraš zadane HTML zamjene.<br />Nemoj zaboraviti [tokene] znakove korištene iznad.',
'TOKEN'=>'Token',
'TOKENS'=>'Tokeni',
'TOKENS_EXPLAIN'=>'Tokeni su rezervirana mjesta za korisničke upise.<br />Upisi će biti potvrđeni samo ukoliko odgovaraju pratećoj definiciji. Ukoliko je potrebno, možeš ih pobrojati dodavanjem broja zadnjem znaku između vitičastih zagrada, npr. {TEXT1}, {TEXT2}.<br /><br />Može koristiti bilo koji jezični niz podataka koji postoji u tvojoj jezičnoj mapi, npr., kao: {L_<em>&lt;STRINGNAME&gt;</em>} gdje je <em>&lt;STRINGNAME&gt;</em> naziv prevedenog niza podataka koji želiš dodati. Na primjer: {L_WROTE} će biti prikazano kao &quot;wrote&quot; odnosno kao prijevod [toga] ovisno o kojem se jezičnom paketu radi.<br /><br /><strong>Samo ispod izlistani tokeni mogu biti korišteni.</strong>',
'TOKEN_DEFINITION'=>'Što [to] može biti?',
'TOO_MANY_BBCODES'=>'Ne možeš dod(av)ati više BBKodova.<br />Izbriši jednog ili više BBKodova i pokušaj ponovo.',
'tokens'=>array(
'TEXT'=>'Bilo koji/kakav tekst, uključujući strane znakove, brojeve itd.<br />Token nije preporučljivo koristiti u HTML tagovima. Umjesto tokena pokušaj s korištenjem IDENTIFIERa, INTTEXTa ili SIMPLETEXTa.',
'SIMPLETEXT'=>'Znakovi [latin] abecede [A-Z], brojevi, zarezi, točke, razmaci, -, +, − i _.',
'INTTEXT'=>'Unicode znakovi, brojevi, zarezi, točke, razmaci, -, +, −, _, i praznine.',
'IDENTIFIER'=>'Znakovi [latin] abecede [A-Z], brojevi, − i _.',
'NUMBER'=>'Bilo koji/kakav niz znamenki.',
'EMAIL'=>'Ispravna adresa elektroničke pošte.',
'URL'=>'Valjan URL koji koristi bilo koji protokol [http, ftp i sl. ne mogu biti korišteni za izvršavanje javascripta]. Ukoliko ništa nije postavljeno, &quot;http://&quot; će biti [stavljen ispred] dodan nizu podataka.',
'LOCAL_URL'=>'Lokalan URL. URL treba biti relativan u odnosu na stranicu teme i ne može sadržavati ime servera ili protokol, kao što linkovi sadrže prefiks “%s”.',
'RELATIVE_URL'	=>'Relativan URL. Možeš ih koristiti za djelomično podudaranje, ali budi oprezan/na: ispravan relativan URL je cijeli URL. Kada ih želiš koristiti, koristi LOCAL_URL token.',
'COLOR'=>'HTML boja može biti u numeričkoj formi [npr. <samp>#FF1234</samp>] ili kao <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS ključna riječ [boje]</a> [npr. <samp>fuchsia</samp>, <samp>InactiveBorder</samp> i sl.].',
),
));
$lang = array_merge($lang, array(
'ACP_ICONS_EXPLAIN'=>'Ikone su uobičajeno prikazane pored naslova tema [na forumskoj listi tema] odnosno pored naslova postova.<br />Odavde možeš dodavati/izbrisati/uređivati ikone, koje korisnici/e mogu dodavati/koristiti u temama/postovima, odnosno instalirati/kreirati nove pakete ikona.',
'ACP_SMILIES_EXPLAIN'=>'Smajlići [Smileys/Emoticons] su male sličice koje <em>prikazuju</em> emocije/razmišljanja osobe [koja ih je <em>ubacila</em> u post, npr. :) znači smijem se, sretan/na sam, :( znači plačem, tužan/na sam...].<br />Odavde možeš dodavati/izbrisati/uređivati smajliće, koje korisnici/e mogu koristiti u postovima/privatnim porukama, odnosno instalirati/kreirati nove pakete smajlića.',
'ADD_SMILIES'=>'Dodaj smajliće višestruko',
'ADD_SMILEY_CODE'=>'Dodaj dodatni kod smajlića',
'ADD_ICONS'=>'Dodaj ikone višestruko',
'AFTER_ICONS'=>'Iza %s',
'AFTER_SMILIES'=>'Iza %s',
'CODE'=>'Kod',
'CURRENT_ICONS'=>'Trenutne ikone',
'CURRENT_ICONS_EXPLAIN'=>'Izaberi što želiš napraviti s trenutno instaliranim ikonama.',
'CURRENT_SMILIES'=>'Trenutni smajlići',
'CURRENT_SMILIES_EXPLAIN'=>'Izaberi što želiš napraviti s trenutno instaliranim smajlićima.',
'DISPLAY_ON_POSTING'=>'Prikaži na stranici postanja',
'DISPLAY_POSTING'=>'Na stranici postanja',
'DISPLAY_POSTING_NO'=>'Ne na stranici postanja',
'EDIT_ICONS'=>'Uredi ikone',
'EDIT_SMILIES'=>'Uredi smajliće',
'EMOTION'=>'Emocija',
'EXPORT_ICONS'=>'Eksportiraj i preuzmi icons.pak',
'EXPORT_ICONS_EXPLAIN'=>'%sKlikom na [ovaj] link, konfiguracija instaliranih ikona bit će zapakirana u <samp>icons.pak</samp> datoteku, koja, preuzeta, može biti iskorištena za kreiranje <samp>.zip</samp> ili <samp>.tgz</samp> datoteke koja će sadržavati sve ikone plus ovu <samp>icons.pak</samp> konfiguracijsku datoteku%s.',
'EXPORT_SMILIES'=>'Eksportiraj i preuzmi smilies.pak',
'EXPORT_SMILIES_EXPLAIN'=>'%sKlikom na [ovaj] link, konfiguracija instaliranih smajlića bit će zapakirana u <samp>smilies.pak</samp> datoteku, koja, preuzeta, može biti iskorištena za kreiranje <samp>.zip</samp> ili <samp>.tgz</samp> datoteke koja će sadržavati sve smajliće plus ovu <samp>smilies.pak</samp> konfiguracijsku datoteku%s.',
'FIRST'=>'Prvi/a',
'ICONS_ADD'=>'Dodaj ikonu',
//'ICON_NONE_ADDED'=>'Nije dodana nijedna ikona.',
//'ICONS_NONE_ADDED'=>'Nije dodana nijedna ikona.',
//'ICONS_ONE_ADDED'=>'Ikona je dodana.',
//'ICONS_ADDED'=>'Ikone su dodane.',
'ICONS_ADDED'=> array(
0=>'Nije dodana nijedna ikona.',
// <!-- Kocka je hičena! -->
1=>'Ikona je dodana.',
2=>'Ikone su dodane.',
3=>'Ikone su dodane.',
),
'ICONS_CONFIG'=>'Konfiguracija ikone/a',
'ICONS_DELETED'=>'Ikona je uklonjena.',
'ICONS_EDIT'=>'Uredi ikonu',
//'ICONS_ONE_EDITED'=>'Ikona je ažurirana.',
//'ICON_NONE_EDITED'=>'Nije ažurirana nijedna ikona.',
//'ICONS_NONE_EDITED'=>'Nije ažurirana nijedna ikona.',
//'ICONS_EDITED'=>'Ikone su ažurirane.',
'ICONS_EDITED'=> array(
0=>'Nije ažurirana nijedna ikona.',
1=>'Ikona je ažurirana.',
2=>'Ikone su ažurirane.',
3=>'Ikone su ažurirane.',
),
'ICONS_HEIGHT'=>'Visina ikone',
'ICONS_IMAGE'=>'Slika ikone',
'ICONS_IMPORTED'=>'Paket ikona je instaliran.',
'ICONS_IMPORT_SUCCESS'=>'Paket ikona je importiran.',
'ICONS_LOCATION'=>'Lokacija ikone',
'ICONS_NOT_DISPLAYED'=>'Sljedeće ikone neće biti prikazane na stranici postanja',
'ICONS_ORDER'=>'Poredak ikona',
'ICONS_URL'=>'Datoteka slike ikone',
'ICONS_WIDTH'=>'Širina ikone',
'IMPORT_ICONS'=>'Instaliraj paket ikona',
'IMPORT_SMILIES'=>'Instaliraj paket smajlića',
'KEEP_ALL'=>'Zadrži sve',
'MASS_ADD_SMILIES'=>'Dodaj smajliće višestruko',
'NO_ICONS_ADD'=>'Nema dostupnih ikona za dodavanje.',
'NO_ICONS_EDIT'=>'Nema dostupnih ikona za uređivanje.',
'NO_ICONS_EXPORT'=>'Nema ikona pomoću kojih bi bilo moguće kreirati paket ikona.',
'NO_ICONS_PAK'=>'Nije pronađen niti jedan paket ikona.',
'NO_SMILIES_ADD'=>'Nema dostupnih smajlića za dodavanje.',
'NO_SMILIES_EDIT'=>'Nema dostupnih smajlića za uređivanje.',
'NO_SMILIES_EXPORT'=>'Nema smajlića pomoću kojih bi bilo moguće kreirati paket smajlića.',
'NO_SMILIES_PAK'=>'Nije pronađen niti jedan paket smajlića.',
'PAK_FILE_NOT_READABLE'=>'Nije moguće (pro)čitati <samp>.pak</samp> datoteku.',
'REPLACE_MATCHES'=>'Zamijeni podudarajuće',
'SELECT_PACKAGE'=>'Izaberi datoteku paketa',
'SMILIES_ADD'=>'Dodaj novog smajlića',
//'SMILIES_NONE_ADDED'=>'Nije dodan nijedan smajlić.',
//'SMILIES_ONE_ADDED'=>'Smajlić je dodan.',
//'SMILIES_ADDED'=>'Smajlići su dodani.',
'SMILIES_ADDED'=> array(
0=>'Nije dodan nijedan smajlić.',
1=>'Smajlić je dodan.',
2=>'Smajlići su dodani.',
3=>'Smajlići su dodani.',
),
'SMILIES_CODE'=>'Kod smajlića',
'SMILIES_CONFIG'=>'Konfiguracija smajlića',
'SMILIES_DELETED'=>'Smajlić je uklonjen.',
'SMILIES_EDIT'=>'Uredi smajlića',
'SMILIE_NO_CODE'=>'Smajlić je “%s” ignoriran jer nije upisan kod smajlića.',
'SMILIE_NO_EMOTION'=>'Smajlić je “%s” ignoriran jer nije upisana emocija smajlića.',
'SMILIE_NO_FILE'=>'Smajlić je “%s” ignoriran jer nedostaje datoteka.',
//'SMILIES_NONE_EDITED'=>'Nije ažuriran nijedan smajlić.',
//'SMILIES_ONE_EDITED'=>'Smajlić je ažuriran.',
//'SMILIES_EDITED'=>'Smajlići su ažurirani.',
'SMILIES_EDITED'=> array(
0=>'Nije ažuriran nijedan smajlić.',
1=>'Smajlić je ažuriran.',
2=>'Smajlići su ažurirani.',
3=>'Smajlići su ažurirani.',
),
'SMILIES_EMOTION'=>'Emocija',
'SMILIES_HEIGHT'=>'Visina smajlića',
'SMILIES_IMAGE'=>'Slika smajlića',
'SMILIES_IMPORTED'=>'Paket smajlića je instaliran.',
'SMILIES_IMPORT_SUCCESS'=>'Paket smajlića je instaliran.',
'SMILIES_LOCATION'=>'Lokacija smajlića',
'SMILIES_NOT_DISPLAYED'=>'<em>Sljedeći smajlići neće biti prikazani na stranici postanja</em>.',
'SMILIES_ORDER'=>'Poredak smajlića',
'SMILIES_URL'=>'Datoteka slike smajlića',
'SMILIES_WIDTH'=>'Širina smajlića',
//'TOO_MANY_SMILIES'=>'Limit od %d smajlića je dostignut.',
'TOO_MANY_SMILIES'=> array(
1=>'Limit od %d smajlića je dostignut.',
2=>'Limit od %d smajlića je dostignut.',
3=>'Limit od %d smajlića je dostignut.',
),
'WRONG_PAK_TYPE'=>'Paket ne sadrži odgovarajuće podatke.',
));
$lang = array_merge($lang, array(
'ACP_WORDS_EXPLAIN'=>'Ovdje možeš dodavati/izbrisati/uređivati riječi koje će automatski biti cenzurirane na forumu. <br />Automatski će biti onemogućeno i registriranje pod korisničkim imenom koje sadrži cenzuriranu/e riječ/i.<br />Možeš se koristiti i zvjezdicama (*) [npr.: *test* će obuhvatiti sve riječi koje u sebi sadrže riječ test; test* sve koje počinju sa test; *test sve koje završavaju sa test].',
'ADD_WORD'=>'Dodaj novu riječ',
'EDIT_WORD'=>'Uredi',
// <!-- Kocka je hičena! -->
'ENTER_WORD'=>'Upiši i riječ i zamjenu za nju.',
'NO_WORD'=>'Nisi označio/la riječ koju želiš urediti.',
'REPLACEMENT'=>'Zamjena',
'UPDATE_WORD'=>'Ažuriraj',
'WORD'=>'Riječ',
'WORD_ADDED'=>'Riječ je dodana.',
'WORD_REMOVED'=>'Riječ je izbrisana.',
'WORD_UPDATED'=>'Riječ je ažurirana.',
));
$lang = array_merge($lang, array(
'ACP_RANKS_EXPLAIN'=>'Ovdje možeš pregledavati/dodavati/izbrisati/uređivati statuse.<br />Možeš kreirati (i) specijalne statuse koji mogu biti dodijeljeni korisnicima/ama putem <em>Upravljanja korisnicima/ama</em>.',
'ADD_RANK'=>'Dodaj novi status',
'MUST_SELECT_RANK'=>'Izaberi status.',
'NO_ASSIGNED_RANK'=>'Nije dodijeljen specijalan status.',
'NO_RANK_TITLE'=>'Nisi upisao/la naziv statusa.',
'NO_UPDATE_RANKS'=>'Status je izbrisan.<br />Korisnički računi, kojima je bio dodijeljen [ovaj] status, nisu ažurirani što će reći da ćeš ih trebati ažurirati ručno.',
'RANK_ADDED'=>'Status je dodan.',
'RANK_IMAGE'=>'Statusnica',
'RANK_IMAGE_EXPLAIN'=>'Slika [koje će biti] povezana [prikazana] sa statusom.<br />Putanja je relativna u odnosu na vršnu phpBB mapu.',
'RANK_IMAGE_IN_USE'=>'[U uporabi]',
'RANK_MINIMUM'=>'Minimalno postova',
'RANK_REMOVED'=>'Status je izbrisan.',
'RANK_SPECIAL'=>'Specijalan status',
'RANK_TITLE'=>'Naziv statusa',
'RANK_UPDATED'=>'Status je ažuriran.',
));
$lang = array_merge($lang, array(
'ACP_DISALLOW_EXPLAIN'=>'Ovdje možeš kontrolirati korisnička imena kojima neće biti dopušteno korištenje.<br /> Možeš koristiti i zvjezdice (*) [koje zamjenjuju bilo koji znak].<br />Nećeš moći upisati niti jedno korisničko ime koje je već registrirano [ukoliko to želiš, trebaš prvo promijeniti/izbrisati postojeće korisničko ime].',
'ADD_DISALLOW_EXPLAIN'=>'Možeš koristiti (i) zvjezdice (*) [koje zamjenjuju bilo koji znak].',
'ADD_DISALLOW_TITLE'=>'Dodavanje nedopuštenog korisničkog imena',
'DELETE_DISALLOW_EXPLAIN'=>'Korisničko ime možeš izbrisati tako da ga izabereš s liste i klikneš na odgovarajući gumb/naredbu.',
'DELETE_DISALLOW_TITLE'=>'Izbrisivanje nedopuštenog korisničkog imena',
'DISALLOWED_ALREADY'=>'Ime koje si upisao/la ne može biti nedopušteno.<br />Ili već postoji na listi, ili postoji na listi cenzuriranih riječi ili je korisničko ime u uporabi.',
'DISALLOWED_DELETED'=>'Nedopušteno korisničko ime je izbrisano.',
'DISALLOW_SUCCESSFUL'=>'Nedopušteno korisničko ime je dodano.',
'NO_DISALLOWED'=>'Nema nedopuštenih korisničkih imena.',
'NO_USERNAME_SPECIFIED'=>'Nisi izabrao/la odnosno upisao/la korisničko ime.',
));
$lang = array_merge($lang, array(
'ACP_REASONS_EXPLAIN'=>'Ovdje možeš upravljati razlozima koji se koriste prilikom prijavljivanja postova odnosno u objašnjenjima prilikom neodobravanja postova.<br />Zadani razlog [označen zvjezdicom (*)] ne možeš izbrisati jer se njega koristi kada niti jedan drugi razlog nije primjeren/ne odgovara.',
'ADD_NEW_REASON'=>'Dodaj novi razlog',
'AVAILABLE_TITLES'=>'Dostupni lokalizirani nazivi razloga',
'IS_NOT_TRANSLATED'=>'Razlog nije lokaliziran.',
'IS_NOT_TRANSLATED_EXPLAIN'=>'Razlog <strong>nije</strong> lokaliziran.<br />Ukoliko želiš lokaliziran oblik, odredi točan ključ iz sekcije razloga prijave(a) jezičnih datoteka.',
'IS_TRANSLATED'=>'Razlog je lokaliziran.',
'IS_TRANSLATED_EXPLAIN'=>'Razlog <strong>je</strong> lokaliziran.<br />Ukoliko je naslov koji upišeš naveden u sekciji razloga prijave(a) jezičnih datoteka, bit će korišteni lokalizirani oblici naziva i opisa.',
'NO_REASON'=>'Razlog nije pronađen.',
'NO_REASON_INFO'=>'Upiši (i) naziv i opis razloga.',
'NO_REMOVE_DEFAULT_REASON'=>'Ne možeš izbrisati zadani razlog “Ostalo”.',
'REASON_ADD'=>'Dodaj prijavu/razlog odbijanja',
'REASON_ADDED'=>'Prijava/razlog odbijanja je dodan/a.',
'REASON_ALREADY_EXIST'=>'Razlog s ovim nazivom već postoji.<br />Upiši drugi naziv.',
'REASON_DESCRIPTION'=>'Opis razloga',
'REASON_DESC_TRANSLATED'=>'Prikazan opis razloga',
'REASON_EDIT'=>'Uredi prijavu/razlog odbijanja',
'REASON_EDIT_EXPLAIN'=>'Ovdje možeš dodati/uređivati razlog(e).<br />Ukoliko je razlog preveden, bit će korištena lokalizirana verzija umjesto opisa upisanog(ih) ovdje.',
'REASON_REMOVED'=>'Prijava/razlog odbijanja je izbrisan/a.',
'REASON_TITLE'=>'Naziv razloga',
'REASON_TITLE_TRANSLATED'=>'Prikazan naziv razloga',
'REASON_UPDATED'=>'Prijava/razlog odbijanja je ažuriran/a.',
'USED_IN_REPORTS'=>'Korišten(o) u prijavama',
));
