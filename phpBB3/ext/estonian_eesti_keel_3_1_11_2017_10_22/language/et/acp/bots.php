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

// Bot settings => Boti seaded
$lang = array_merge($lang, array(
	'BOTS'				=> 'Halda botte',
	'BOTS_EXPLAIN'		=> '“Botid”, “spiderid” või “crawlerid” on automaatsed agendid, mida kasutavad tavaliselt otsingusüsteemid, et oma andmebaasi uuendada. Kuna nad kasutavad ka mõnikord sessioone, siis võivad nad muuta külastuste arvu ja suurendada andmebaasimahtu. Siin saad nendele teha erilise kasutaja, et nende probleemidega toime tulla.',
	'BOT_ACTIVATE'		=> 'Aktiveeri',
	'BOT_ACTIVE'		=> 'Bot on aktiivne',
	'BOT_ADD'			=> 'Lisa bot',
	'BOT_ADDED'			=> 'Uus bot lisatud.',
	'BOT_AGENT'			=> 'Boti Agent',
	'BOT_AGENT_EXPLAIN'	=> 'Boti brauseri agent, poolikud vasted on lubatud.',
	'BOT_DEACTIVATE'	=> 'Deaktiveeri',
	'BOT_DELETED'		=> 'Bot kustutatud.',
	'BOT_EDIT'			=> 'Muuda botte',
	'BOT_EDIT_EXPLAIN'	=> 'Siin saad sa lisada ja muuta botide andmeid. Sa võid sisestada boti agendi või IP aadressi/aadresse või isegi IP aadresside vahemikku. Ole ettevaatlik nende sisestamisel. Sa võid ka valida stiili ja keele, millega bot foorumit sirvib. See võib vähendada andmeedastusmahtu, kui valid botidele lihtsa stiili. Ära unusta anna kindlaid õigusi ka Boti kasutajagrupile.',
	'BOT_LANG'			=> 'Boti keel',
	'BOT_LANG_EXPLAIN'	=> 'Keel, milles foorumit botile näidatakse.',
	'BOT_LAST_VISIT'	=> 'Viimane visiit',
	'BOT_IP'			=> 'Boti IP aadress',
	'BOT_IP_EXPLAIN'	=> 'Poolikud vasted on lubatud, eraldad aadresse komaga.',
	'BOT_NAME'			=> 'Boti nimi',
	'BOT_NAME_EXPLAIN'	=> 'Kasutatakse ainult sinule informatsiooniks.',
	'BOT_NAME_TAKEN'	=> 'See nimi on juba kasutusel sinu foorumis, seda ei saa kasutada boti peal.',
	'BOT_NEVER'			=> 'Mitte kunagi',
	'BOT_STYLE'			=> 'Boti stiil',
	'BOT_STYLE_EXPLAIN'	=> 'Stiil, mida kasutatakse foorumil, kui seda sirvib see bot.',
	'BOT_UPDATED'		=> 'Boti andmed uuendatud.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Boti agent on yoBoti agent, mille sisestasid on sarnane sellele, mida juba kasutad. Palun kohanda selle boti agenti.',
	'ERR_BOT_NO_IP'				=> 'IP aadress on vigane või hostinime ei suudetud tuvastada.',
	'ERR_BOT_NO_MATCHES'		=> 'Sa pead lisama vähemalt ühe agendi või IP sellele botile.',

	'NO_BOT'		=> 'Valitud ID´ga ei leitud ühtegi botti.',
	'NO_BOT_GROUP'	=> 'Boti gruppi ei leitud.',
));
