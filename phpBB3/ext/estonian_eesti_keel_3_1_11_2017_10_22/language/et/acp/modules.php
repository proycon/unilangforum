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

$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Siin on sul võimalus hallata erinevaid mooduleid. AJP omab kolmejärgulist menüü struktuuri (Kategooria  -> Kategooria -> Moodul), teistel on aga kahejärguline menüü struktuur  (Kategooria -> Moodul). Jäta meelde, et sa võid ka ennast lukku panna, keelates või kustutades mooduleid, mis vastutavad moodulite haldamise eest.',
	'ADD_MODULE'					=> 'Lisa moodul',
	'ADD_MODULE_CONFIRM'			=> 'Kas oled kindel, et tahad valitud mooduli lisada valitud viisil?',
	'ADD_MODULE_TITLE'				=> 'Lisa moodul',

	'CANNOT_REMOVE_MODULE'	=> 'Mooduli kustutamine ebaõnnestus, sellel on alamooduleid. Palun kustuta enne alamoodulid selle mooduli sees.',
	'CATEGORY'				=> 'Kategooria',
	'CHOOSE_MODE'			=> 'Vali mooduli viis',
	'CHOOSE_MODE_EXPLAIN'	=> 'Vali moodulite viis, mida kasutatakse.',
	'CHOOSE_MODULE'			=> 'Vali moodul',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Vali fail, mida kasutatakse selle mooduliga.',
	'CREATE_MODULE'			=> 'Tee uus moodul',

	'DEACTIVATED_MODULE'	=> 'Deaktiveeritud moodul',
	'DELETE_MODULE'			=> 'Kustuta moodul',
	'DELETE_MODULE_CONFIRM'	=> 'Kas oled kindel, et tahad selle mooduli eemaldada?',

	'EDIT_MODULE'			=> 'Muuda moodulit',
	'EDIT_MODULE_EXPLAIN'	=> 'Siin saad sisestada moodulite seadeid.',

	'HIDDEN_MODULE'			=> 'Peidetud moodul',

	'MODULE'					=> 'Moodul',
	'MODULE_ADDED'				=> 'Moodul edukalt lisatud.',
	'MODULE_DELETED'			=> 'Moodul edukalt eemaldatud.',
	'MODULE_DISPLAYED'			=> 'Moodul kuvatakse',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Kui sa ei taha seda moodulit kuvada, aga tahad seda kasutada, vali "Ei".',
	'MODULE_EDITED'				=> 'Moodul edukalt muudetud.',
	'MODULE_ENABLED'			=> 'Moodul lubatud',
	'MODULE_LANGNAME'			=> 'Mooduli keelenimi',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Sisesta kuvatud mooduli nimi. Kasuta keelefaili konstanti, kui see nimi on keelefailis defineeritud.',
	'MODULE_TYPE'				=> 'Mooduli tüüp',

	'NO_CATEGORY_TO_MODULE'	=> 'Kategooria mooduliks muutmine ebaõnnestus. Palun kustuta/liiguta kõik alamoodulid enne.',
	'NO_MODULE'				=> 'Ühtegi moodulit ei leitud.',
	'NO_MODULE_ID'			=> 'Ühtegi mooduli ID´d ei tuvastatud.',
	'NO_MODULE_LANGNAME'	=> 'Ühtegi mooduli keelenime ei tuvastatud.',
	'NO_PARENT'				=> 'Pole peakausta',

	'PARENT'				=> 'Peakaust',
	'PARENT_NO_EXIST'		=> 'Peakausta ei eksisteeri.',

	'SELECT_MODULE'			=> 'Vali moodul',
));
