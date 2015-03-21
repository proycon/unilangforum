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
if (!defined('IN_PHPBB'))
{
exit;
}
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'EXTENSION'=>'Ekstenzija',
'EXTENSIONS'=>'Ekstenzije',
'EXTENSIONS_ADMIN'=>'Upravitelj ekstenzijama',
'EXTENSIONS_EXPLAIN'=>'Upravitelj ekstenzijama je alat koji omogućava upravljanje svim statusima ekstenzija te prikazuje informacije o istima.',
'EXTENSION_INVALID_LIST'=>'Ekstenzija “%s” je neispravna.<br />%s<br /><br />',
'EXTENSION_NOT_AVAILABLE'=>'Ekstenzija nije dostupna za ovaj forum.<br />Potvrdi da su verzija “tvog” phpbba i verzija PHP dopuštene [baci oko na stranicu s detaljima].',
'EXTENSION_DIR_INVALID'=>'Izabrana ekstenzija ima neispravnu strukturu direktorija i ne može biti omogućena.',
'EXTENSION_NOT_ENABLEABLE'=>'Ekstenzija ne može biti omogućena.<br />Potvrdi zahtjeve ekstenzije.',
'DETAILS'=>'Detalji',
'EXTENSIONS_DISABLED'=>'Onemogućene ekstenzije',
'EXTENSIONS_ENABLED'=>'Omogućene ekstenzije',
'EXTENSION_DELETE_DATA'=>'Izbriši podatke',
'EXTENSION_DISABLE'=>'Onemogući',
'EXTENSION_ENABLE'=>'Omogući',
'EXTENSION_DELETE_DATA_EXPLAIN'=>'Izbrisivanje podataka o ekstenziji uklanja sve podatke o i postavke ekstenzije.<br />Datoteke ekstenzije ostaju netaknute da bi ista mogla biti, ponovo, omogućena.',
'EXTENSION_DISABLE_EXPLAIN'=>'Onemogućavanje ekstenzije ostavlja datoteke, podatke i postavke ekstenzije netaknutima, ali uklanja sve funkcionalnosti dodane, prethodnim, omogućavanjem ekstenzije.',
'EXTENSION_ENABLE_EXPLAIN'=>'Omogućavanje ekstenzije dopušta korištenje ekstenzije na forumu.',
'EXTENSION_DELETE_DATA_IN_PROGRESS'=>'U tijeku je izbrisivanje podataka o ekstenziji. Molim(o), ne napuštaj odnosno ne osvježavaj ovu stranicu dok isto ne bude izvršeno do kraja.',
'EXTENSION_DISABLE_IN_PROGRESS'=>'U tijeku je onemogućavanje ekstenzije. Molim(o), ne napuštaj odnosno ne osvježavaj ovu stranicu dok isto ne bude izvršeno do kraja.',
'EXTENSION_ENABLE_IN_PROGRESS'=>'U tijeku je omogućavanje ekstenzije. Molim(o), ne napuštaj odnosno ne osvježavaj ovu stranicu dok isto ne bude izvršeno do kraja.',
'EXTENSION_DELETE_DATA_SUCCESS'=>'Podatci o ekstenziji su izbrisani.',
'EXTENSION_DISABLE_SUCCESS'=>'Ekstenzija je onemogućena.',
// <!-- Kocka je hičena! -->
'EXTENSION_ENABLE_SUCCESS'=>'Ekstenzija je omogućena.',
'EXTENSION_NAME'=>'Naziv ekstenzije',
'EXTENSION_ACTIONS'=>'Radnje',
'EXTENSION_OPTIONS'=>'Opcije',
'EXTENSION_UPDATE_HEADLINE'=>'Ažuriranje ekstenzije',
'EXTENSION_UPDATE_EXPLAIN'=>'<ol>
<li>Onemogući ekstenziju</li>
<li>Izbriši datoteke ekstenzije iz sustava datoteka</li>
<li>Pohrani nove datoteke</li>
<li>Omogući ekstenziju</li>
</ol>',
'EXTENSION_REMOVE_HEADLINE'=>'Kompletno uklanjanje ekstenzije s foruma',
'EXTENSION_REMOVE_EXPLAIN'=>'<ol>
<li>Onemogući ekstenziju</li>
<li>Izbriši podatke o ekstenziji</li>
<li>Izbriši datoteke ekstenzije iz sustava datoteka</li>
</ol>',
'EXTENSION_DELETE_DATA_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati podatke povezane s “%s”?<br /><br />Izbrisivanje će, bez mogućnosti naknadnog povrata u prijašnje stanje, ukloniti sve podatke i postavke ekstenzije!',
'EXTENSION_DISABLE_CONFIRM'=>'Jesi li siguran/na da želiš onemogućiti “%s” ekstenziju?',
'EXTENSION_ENABLE_CONFIRM'=>'Jesi li siguran/na da želiš omogućiti “%s” ekstenziju?',
'EXTENSION_FORCE_UNSTABLE_CONFIRM'=>'Jesi li siguran/na da želiš isforsirati korištenje nestabilne verzije?',
'RETURN_TO_EXTENSION_LIST'=>'Povratak na listu ekstenzija',
'EXT_DETAILS'=>'Detalji ekstenzije',
'DISPLAY_NAME'=>'Prikaži naziv',
'CLEAN_NAME'=>'Izbriši naziv',
'TYPE'=>'Tip',
'DESCRIPTION'=>'Opis',
'VERSION'=>'Verzija',
'HOMEPAGE'=>'Početna',
'PATH'=>'Putanja datoteke',
'TIME'=>'Datum objave',
'LICENSE'=>'Licenca',
'REQUIREMENTS'=>'Uvjeti',
'PHPBB_VERSION'=>'phpBB verzija',
'PHP_VERSION'=>'PHP verzija',
'AUTHOR_INFORMATION'=>'Info o autoru/ici',
'AUTHOR_NAME'=>'Ime',
'AUTHOR_EMAIL'=>'E-pošta',
'AUTHOR_HOMEPAGE'=>'Početna',
'AUTHOR_ROLE'=>'Pravila',
'NOT_UP_TO_DATE'=>'%s nije <em>up to date</em> [neažurirano]',
'UP_TO_DATE'=>'%s <em>up to date</em> [ažurirano]',
'ANNOUNCEMENT_TOPIC'=>'Obavijest o objavi',
'DOWNLOAD_LATEST'=>'Verzija preuzimanja',
'NO_VERSIONCHECK'=>'Nema informacija o provjeri verzije.',
'VERSIONCHECK_FORCE_UPDATE_ALL'=>'Ponovo provjeri sve verzije',
'FORCE_UNSTABLE'=>'Uvijek provjeri [za] nestabilne verzije',
'EXTENSIONS_VERSION_CHECK_SETTINGS'=>'Postavke provjere verzije',
'META_FIELD_NOT_SET'=>'Potrebno meta polje %s has nije postavljeno.',
'META_FIELD_INVALID'=>'Meta polje %s je neispravno.',
));
