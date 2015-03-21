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
'ACP_FILES'=>'Jezične datoteke',
'ACP_LANGUAGE_PACKS_EXPLAIN'=>'Ovdje možeš instalirati/deinstalirati/izbrisati jezične pakete.<br />Zadani jezik označen je asteriskom (*).',
//'EMAIL_FILES'=>'Predlošci poruka elektroničke pošte',
//'FILE_CONTENTS'=>'Sadržaj datoteke',
//'FILE_FROM_STORAGE'=>'Datoteka iz pohranišne mape',
'DELETE_LANGUAGE_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati “%s”?',
//'HELP_FILES'=>'Uputne datoteke',
'INSTALLED_LANGUAGE_PACKS'=>'Instaliran(i) jezični paket(i)',
//'INVALID_LANGUAGE_PACK'=>'Izabran jezični paket je neispravan.<br />Provjeri što nije u redu s njime te ga, ukoliko je potrebno, ponovo pohrani.',
//'INVALID_UPLOAD_METHOD'=>'Izabrana metoda pohrane je neispravna, izaberi drugu metodu.',
'LANGUAGE_DETAILS_UPDATED'=>'Detalji su ažurirani.',
//'LANGUAGE_ENTRIES'=>'Jezični zapisi',
//'LANGUAGE_ENTRIES_EXPLAIN'=>'Ovdje možeš izmijeniti postojeće jezične zapise odnosno prevesti one koji nisu prevedeni.<br /><strong>Imaj na umu:</strong> kad izmijeniš jezični paket, promjene će biti pohranjene u posebnu mapu za preuzimanje. Promjene neće biti vidljive dok ne zamijeniš originalnu datoteku s novom [trebaš ju pohraniti].',
//'LANGUAGE_FILES'=>'Jezične datoteke',
//'LANGUAGE_KEY'=>'Jezični ključ',
'LANGUAGE_PACK_ALREADY_INSTALLED'=>'Jezični paket je već instaliran.',
'LANGUAGE_PACK_DELETED'=>'Jezični paket “%s” je izbrisan.<br />Svim korisnicima/ama, koji/e su izbrisani jezik imali/e kao zadani, kao zadani jezik postavljen je zadani jezik foruma.',
'LANGUAGE_PACK_DETAILS'=>'Detalji jezičnog paketa',
'LANGUAGE_PACK_INSTALLED'=>'Jezični paket “%s” je instaliran.',
'LANGUAGE_PACK_CPF_UPDATE'=>'Jezični nizovi prilagođenih korisnička polja kopirani su iz zadanog jezika.<br />Izmijeni ih ukoliko smatraš da je [to] potrebno.',
'LANGUAGE_PACK_ISO'=>'ISO',
'LANGUAGE_PACK_LOCALNAME'=>'Lokalni naziv',
// <!-- Kocka je hičena! -->
'LANGUAGE_PACK_NAME'=>'Naziv',
'LANGUAGE_PACK_NOT_EXIST'=>'Izabran jezični paket ne postoji.',
'LANGUAGE_PACK_USED_BY'=>'Koriste [uključujući robote]',
'LANGUAGE_VARIABLE'=>'Jezične varijable',
'LANG_AUTHOR'=>'Autor/ica jezičnog paketa',
'LANG_ENGLISH_NAME'=>'Engleski naziv',
'LANG_ISO_CODE'=>'ISO kod',
'LANG_LOCAL_NAME'=>'Lokalni naziv',
//'MISSING_LANGUAGE_FILE'=>'Nedostajuća jezična datoteka: <strong style="color:red">%s</strong>',
'MISSING_LANG_FILES'=>'Nedostajuća/e jezična/e datoteka/e',
'MISSING_LANG_VARIABLES'=>'Nedostajuća/e jezična/e varijabla/e',
//'MODS_FILES'=>'Jezične datoteke MODova',
'NO_FILE_SELECTED'=>'Nisi izabrao(la)/odredio(la) jezičnu datoteku.',
'NO_LANG_ID'=>'Nisi izabrao(la)/odredio(la) jezični paket.',
'NO_REMOVE_DEFAULT_LANG'=>'Ne možeš izbrisati zadani jezični paket.<br />Ukoliko želiš izbrisati ovaj jezični paket, postavi neki drugi jezik kao zadani jezik foruma.',
'NO_UNINSTALLED_LANGUAGE_PACKS'=>'Nema neinstaliranih jezičnih paketa.',
//'REMOVE_FROM_STORAGE_FOLDER'=>'Izbriši iz pohranišne mape',
//'SELECT_DOWNLOAD_FORMAT'=>'Izaberi format preuzimanja',
//'SUBMIT_AND_DOWNLOAD'=>'Pošalji i preuzmi datoteku',
//'SUBMIT_AND_UPLOAD'=>'Pošalji i pohrani datoteku',
'THOSE_MISSING_LANG_FILES'=>'Sljedeće jezične datoteke nedostaju u “%s” jezičnoj mapi.',
'THOSE_MISSING_LANG_VARIABLES'=>'Sljedeće jezične varijable nedostaju u “%s” jezičnom paketu.',
'UNINSTALLED_LANGUAGE_PACKS'=>'Neinstaliran(i) jezični paket(i)',
//'UNABLE_TO_WRITE_FILE'=>'Datoteka nije mogla biti za(u)pisana u %s.',
//'UPLOAD_COMPLETED'=>'Pohranjivanje je završeno.',
//'UPLOAD_FAILED'=>'Pohranjivanje nije uspjelo iz nepoznatog razloga.<br />Probaj zamijeniti datoteku ručno.',
//'UPLOAD_METHOD'=>'Metoda pohranjivanja',
//'UPLOAD_SETTINGS'=>'Postavke pohranjivanja',
//'WRONG_LANGUAGE_FILE'=>'Izabran jezik je neispravan.',
));
