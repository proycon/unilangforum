<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Siin sa saad teha kõikide phpBB-ga seotud andmetest varukoopiaid. Sa saad salvestada tulemuse arhiivi sinu <samp>store/</samp> kausta(kataloogi) või otse allalaadida. Sinu serveri konfiguratsioonist sõltub, kas sa saad faili kokku pakkida erinevates formaatides.<br /><br />Varukoopia tüübiks on Sul võimalik valida kolme valiku vahel: täielik, ainult struktuur või ainult andmed. Kui valida tüübiks täielik, siis tehakse kogu andmebaasist varukoopia, kuid valides ainult struktuur, siis varukoopia sisaldab ainult hierarhiat millesse on andmed salvestatud. Valides ainult andmed, siis pead ettevalmistama samuti struktuuri enne andmete taastamist/importimist. Rohkem informatsiooni saad phpBB.com leheküljelt valides Support -> User Guide.',
	'ACP_RESTORE_EXPLAIN'	=> 'See teostab täistaastamise kõikidest phpBB tabelitesse salvestatud failidest. Kui sinu server toetab, saad kasutada gzip või bzip2 abil kokku pakitud teksti faili. <strong>Hoiatus</strong> See kirjutab üle olemasolevad andmed. Taastamise protsess võib võtta kaua aega, palun ära liigu sellelt lehelt minema enne, kui see on lõpetatud. Varukoopiad on salvestatud <samp>store/</samp> kausta. PhpBB eeldab, et varukoopiad on genereeritud phpBB varukoopia funktsiooniga. Varukoopiate taastamised, mis ei ole tehtud süsteemis sees võivad töötada ja võivad mitte.',

	'BACKUP_DELETE'		=> 'Varukoopia fail on edukalt kustutatud.',
	'BACKUP_INVALID'	=> 'Valitud varukoopia fail on vigane.',
	'BACKUP_OPTIONS'	=> 'Varukoopia valikud',
	'BACKUP_SUCCESS'	=> 'Varukoopia fail on edukalt tehtud.',
	'BACKUP_TYPE'		=> 'Varukoopia tüüp',

	'DATABASE'			=> 'Andmebaasi varud',
	'DATA_ONLY'			=> 'Ainult andmed',
	'DELETE_BACKUP'		=> 'Kustuta varukoopia',
	'DELETE_SELECTED_BACKUP'	=> 'Kas oled tõesti kindel, soovid kustutada valitud varukoopia?',
	'DESELECT_ALL'		=> 'Ära vali',
	'DOWNLOAD_BACKUP'	=> 'Laadi varukoopia alla',

	'FILE_TYPE'			=> 'Faili tüüp',
	'FILE_WRITE_FAIL'	=> 'Faili ei suudetud kausta kirjutada.',
	'FULL_BACKUP' 		=> 'Täielik',

	'RESTORE_FAILURE'		=> 'Varukoopia fail võib olla rikutud.',
	'RESTORE_OPTIONS'		=> 'Taastamise valikud',
	'RESTORE_SELECTED_BACKUP'	=> 'Kas oled kindel, et soovid taastada valitud varukoopia?',
	'RESTORE_SUCCESS'		=> 'Andmebaas on edukalt taastatud.<br /><br />Sinu foorum peaks olema tagasi selles staadiumis, mis ta oli varukoopia tegemise ajal.',

	'SELECT_ALL' 			=> 'Vali kõik',
	'SELECT_FILE' 			=> 'Vali fail',
	'START_BACKUP' 			=> 'Alusta varukoopia tegemist',
	'START_RESTORE' 		=> 'Alusta taastamist',
	'STORE_AND_DOWNLOAD' 	=> 'Salvesta ja laadi alla',
	'STORE_LOCAL' 			=> 'Salvesta fail serveris',
	'STRUCTURE_ONLY' 		=> 'Ainult struktuur',

	'TABLE_SELECT'		=> 'Tabeli valik',
	'TABLE_SELECT_ERROR'=> 'Sa pead valima vähemalt ühe tabeli.',
));
