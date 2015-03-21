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
'ACP_BACKUP_EXPLAIN'=>'Ovdje možeš backupirati [napraviti zaštitnu kopiju] sve phpBB podatke.<br />Datoteku možeš pohraniti lokalno [<samp>store/</samp>] ili ju direktno preuzeti.<br />Za smanjenje veličine datoteke prije preuzimanja, ukoliko server podržava tu opciju, možeš koristiti gzip odnosno bilo koju drugu ponuđenu kompresiju.',
'ACP_RESTORE_EXPLAIN'=>'Ovdje možeš izvršiti potpun povrat svih phpBB tablica iz [ranije] pohranjene datoteke.<br />Ukoliko server podržava tu opciju, možeš pohraniti gzip ili bzip2 kompresiranu tekst datoteku koja će automatski biti dekompresirana.<br /><strong>UPOZORENJE:</strong> ovime ćeš prepisati postojeće podatke.<br />Proces može (po)trajati poduže, stoga, ostani na ovoj stranici dok ne bude zgotovljen.<br />Zaštitne kopije [backupi] pohranjene su u <samp>store/</samp> mapi i pretpostavlja se da su generirane phpBB backup funkcijom.<br />Povrat zaštitnih kopija koje nisu kreirane ugrađenim sistemom kreiranja zaštitnih kopija može rezultirati njihovim funkcioniranjem, ali i ne mora.',
'BACKUP_DELETE'=>'Zaštitna kopija je izbrisana.',
'BACKUP_INVALID'=>'Datoteka izabrana za izradu zaštitne kopije je neispravna.',
'BACKUP_OPTIONS'=>'Postavke izrade zaštitne kopije',
'BACKUP_SUCCESS'=>'Zaštitna kopija je kreirana.',
'BACKUP_TYPE'=>'Vrsta izrade zaštitne kopije',
'DATABASE'=>'Alati za bazu',
'DATA_ONLY'=>'Samo podatci',
'DELETE_BACKUP'=>'Izbriši zaštitnu kopiju',
'DELETE_SELECTED_BACKUP'=>'Jesi li siguran/na da želiš izbrisati zaštitnu kopiju?',
'DESELECT_ALL'=>'Odoznači sve',
'DOWNLOAD_BACKUP'=>'Preuzmi zaštitnu kopiju',
'FILE_TYPE'=>'Vrsta datoteke',
'FILE_WRITE_FAIL'=>'Nije moguće zapisati datoteku u mapu za pohranu.',
'FULL_BACKUP'=>'Potpun',
'RESTORE_FAILURE'=>'Zaštitna kopija može biti/moguće je da je neispravna.',
'RESTORE_OPTIONS'=>'Postavke povrata zaštitne kopije',
'RESTORE_SELECTED_BACKUP'=>'Jesi li siguran/na da želiš izvršiti povrat izabrane zaštitne kopije?',
'RESTORE_SUCCESS'=>'Povrat izabrane zaštitne kopije baze je izvršen.<br />Forum bi sada trebao biti u stanju u kakvom je bio kada je napravljena zaštitna kopija.',
'SELECT_ALL'=>'Označi sve',
// <!-- Kocka je hičena! -->
'SELECT_FILE'=>'Označi datoteku',
'START_BACKUP'=>'Započni izradu zaštitne kopije',
'START_RESTORE'=>'Započni povrat zaštitne kopije',
'STORE_AND_DOWNLOAD'=>'Pohrani i preuzmi',
'STORE_LOCAL'=>'Pohrani datoteku lokalno',
'STRUCTURE_ONLY'=>'Samo struktura',
'TABLE_SELECT'=>'Izbor tablica',
'TABLE_SELECT_ERROR'=>'Izaberi/odaberi najmanje jednu tablicu.',
));
