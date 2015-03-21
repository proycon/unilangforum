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
'ACP_MODULE_MANAGEMENT_EXPLAIN'=>'Ovdje možeš upravljati svim vrstama modula.<br />AF ima trorazinsku izborničku strukturu [Kategorija -> Kategorija -> Modul] čime ostalo ima dvorazinsku izborničku strukturu [Kategorija -> Modul] koja treba biti zadržana.<br />Ukoliko onemogućiš odnosno izbrišeš module odgovorne za upravljanje modulima, nastat će problemi.',
'ADD_MODULE'=>'Dodaj modul',
'ADD_MODULE_CONFIRM'=>'Jesi li siguran/na da želiš dodati izabran modul izabranim modom?',
'ADD_MODULE_TITLE'=>'Dodaj modul',
'CANNOT_REMOVE_MODULE'=>'Modul nije moguće izbrisati jer sadrži podmodule.<br />Za izbrisivanje modula, trebaš izbrisati ili premjestiti sve [njegove] podmodule.',
'CATEGORY'=>'Kategorija',
'CHOOSE_MODE'=>'Izaberi mod modula',
'CHOOSE_MODE_EXPLAIN'=>'Izbor moda modula.',
'CHOOSE_MODULE'=>'Izaberi modul',
'CHOOSE_MODULE_EXPLAIN'=>'Izbor datoteke nazvane [ovim] modulom.',
'CREATE_MODULE'=>'Kreiraj novi modul',
'DEACTIVATED_MODULE'=>'Deaktiviraj/n modul',
'DELETE_MODULE'=>'Izbriši modul',
'DELETE_MODULE_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati modul?',
'EDIT_MODULE'=>'Uredi modul',
'EDIT_MODULE_EXPLAIN'=>'Ovdje možeš upisati posebne postavke modula.',
'HIDDEN_MODULE'=>'Skriven modul',
'MODULE'=>'Modul',
'MODULE_ADDED'=>'Modul je dodan.',
'MODULE_DELETED'=>'Modul je izbrisan.',
'MODULE_DISPLAYED'=>'Prikazivanje modula',
'MODULE_DISPLAYED_EXPLAIN'=>'Ukoliko ne želiš da ovaj modul bude prikazan, ali ga želiš koristiti, postavi [ovo] na “Ne”.',
// <!-- Kocka je hičena! -->
'MODULE_EDITED'=>'Modul je uređen.',
'MODULE_ENABLED'=>'Omogući modul',
'MODULE_LANGNAME'=>'Jezični naziv modula',
'MODULE_LANGNAME_EXPLAIN'=>'Upiši prikazani naziv modula.<br />Ukoliko je modul povezan s jezičnom datotekom, koristi jezičnu konstantu.',
'MODULE_TYPE'=>'Tip modula',
'NO_CATEGORY_TO_MODULE'=>'Nije bilo moguće pretvoriti kategoriju u modul.<br />Ukoliko želiš izvesti ovu radnju, trebaš izbrisati/premjestiti sve podmodule modula.',
'NO_MODULE'=>'Nije pronađen niti jedan modul.',
'NO_MODULE_ID'=>'Modul nije upisan.',
'NO_MODULE_LANGNAME'=>'Nije upisan jezični naziv modula.',
'NO_PARENT'=>'Bez krovnog modula',
'PARENT'=>'Krovni modul',
'PARENT_NO_EXIST'=>'Krovni modul ne postoji.',
'SELECT_MODULE'=>'Izaberi modul',
));
