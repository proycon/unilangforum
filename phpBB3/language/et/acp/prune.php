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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Siin saad sa kustutada (või deaktiveerida) kasutajaid oma foorumis. Neid saab teha erinevatel viisidel: postituse arvu, aktiivsuse jne järgi. Iga sellist kriteerium saab kombineerida, nt saad sa kärpida kasutajaid enne 2002-01-01, kellel on olnud vähem postitusi kui 10. Alternatiivselt saad sa kirjutada kasutajaid siia tekstikasti ja kõik kriteeriumid ignoreeritakse. Ole ettevaatlik siin. Kui kasutaja on kustutatud, siis teda tagasi enam ei saa.',

	'CRITERIA'				=> 'Kriteeriumid',

	'DEACTIVATE_DELETE'			=> 'Deaktiveeri või kustuta',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Vali kas deaktiveerida või kustutada kasutajaid, pea meeles - tagasiteed nendel toimingutel pole.',
	'DELETE_USERS'				=> 'Kustuta',
	'DELETE_USER_POSTS'			=> 'Kustuta kärbitud kasutaja postitused',
	'DELETE_USER_POSTS_EXPLAIN' => 'Kustutab postitusi, mille on teinud kustutatud kasutajad. Deaktiveeritud kasutajatel neid ei kustutata.',

	'JOINED_EXPLAIN'			=> 'Sisesta kuupäev <kbd>YYYY-MM-DD</kbd> formaadis.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Sisesta kuupäev <kbd>YYYY-MM-DD</kbd> formaadis. Sisesta <kbd>0000-00-00</kbd>, et kärpida kasutajad, kes ei ole kunagi sisse loginud <em>Enne</em> ja <em>Pärast</em> tingimusi ei arvestata.',

	'POSTS_ON_QUEUE'			=> 'Postitused, mis ootavad heaks kiitu',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Limiteeri kasutajad valitud grupis.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Kõik grupid',
	'PRUNE_USERS_LIST'				=> 'Kärbitavad kasutajad',
	'PRUNE_USERS_LIST_DELETE'		=> 'Valitud kriteeriumitega kustutatavad kasutajad on järgmised. Sa saad eemaldada üksikuid kasutajaid kustutamise nimekirjast eemaldades antud kasutaja juures olevast kastist linnukese.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Valitud kriteeriumitega deaktiveeritavad kasutajad on järgmised. Sa saad eemaldada üksikuid kasutajaid deaktiveeritavate nimekirjast võttes linnukese maha antud kasutaja juures olevast kastist.',

	'SELECT_USERS_EXPLAIN'		=> 'Sisesta siia kasutajanimesid, need võetakse ette kriteeriumitest olenemata. Asutajaid ei saa kärpida.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Valitud kasutajad deaktiveeriti edukalt.',
	'USER_DELETE_SUCCESS'		=> 'Valitud kasutajad kustutati edukalt.',
	'USER_PRUNE_FAILURE'		=> 'Ükski kasutaja ei sobi valitud kriteeriumisse.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Sisestatud kuupäev on vale, see peaks olema <kbd>YYYY-MM-DD</kbd> formaadis.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'See kustutab kõik teemad, millesse pole postitatud või vaadatud kindlate päevade jooksul, mille sa valid. Kui sa ei vali päevade arvu, siis kustutatakse kõik teemad. Vaikimisi ei kustutata teemasid, kus on veel aktiivseid küsitlusi ega ka ettepanekuid ja teadaandeid.',

	'FORUM_PRUNE'		=> 'Foorumi kärpimine.',

	'NO_PRUNE'			=> 'Ühtegi foorumit ei kärbitud.',

	'SELECTED_FORUM'	=> 'Valitud foorum',
	'SELECTED_FORUMS'	=> 'Valitud foorumid',

	'POSTS_PRUNED'					=> 'Postitused kärbitud',
	'PRUNE_ANNOUNCEMENTS'			=> 'Kärbi teadaandeid',
	'PRUNE_FINISHED_POLLS'			=> 'Kärbi suletud küsitlusi',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Kustutab teemad, mille on lõppenud küsitlused.',
	'PRUNE_FORUM_CONFIRM'			=> 'Kas oled kindel, et tahad valitud foorumeid kärpida nende valikutega? Kui need teemad/postitused on kustutatud, siis ei saa neid enam taastada.',
	'PRUNE_NOT_POSTED'				=> 'Päevi viimasest postitusest',
	'PRUNE_NOT_VIEWED'				=> 'Päevi viimasest sirvimisest',
	'PRUNE_OLD_POLLS'				=> 'Kärbi vanu küsitlusi',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Kustutab teemad, milles olevates küsitlustes pole hääletanud keegi postitamise ajast saadik.',
	'PRUNE_STICKY'					=> 'Kärbi ettepanekuid',
	'PRUNE_SUCCESS'					=> 'Foorumite kärpimine õnnestus.',

	'TOPICS_PRUNED'		=> 'Teemad kärbitud',
));
