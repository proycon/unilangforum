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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Sellel leheküljel saad administreerida kasutajagruppe. Sa saad kustutada, lisada ja muuta olemasolevaid gruppe. Veel saad valida grupi liidreid, valida grupi staatust (suletud/nähtamatu/avatud) ja muuta grupi nime/kirjeldust.',
	'ADD_GROUP_CATEGORY'			=> 'Lisa kategooria',
	'ADD_USERS'						=> 'Lisa kasutajaid',
	'ADD_USERS_EXPLAIN'				=> 'Siin saad lisada uusi kasutajaid gruppi. Sa võid valida, kas see grupp saab vaikimisi grupiks valitud kasutajatele. Samas võid sa kasutajatest teha ka grupi liidreid. Palun sisesta iga nimi erineval real.',

	'COPY_PERMISSIONS'				=> 'Kopeeri õigused',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Kui grupp tehakse, saab ta samad õigused kui sinu poolt valitud grupil.',
	'CREATE_GROUP'					=> 'Lisa uus grupp',

	'GROUPS_NO_MEMBERS'				=> 'Selles grupis pole liikmeids',
	'GROUPS_NO_MODS'				=> 'Ühtegi grupi liidrit pole',

	'GROUP_APPROVE'					=> 'Kinnita kasutaja',
	'GROUP_APPROVED'				=> 'Kinnita kasutajaid',
	'GROUP_AVATAR'					=> 'Grupi avatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'See pilt kuvatakse Grupi Juhtpaneelis.',
	'GROUP_CATEGORY_NAME'			=> 'Kategooria nimi',
	'GROUP_CLOSED'					=> 'Suletud',
	'GROUP_COLOR'					=> 'Grupi värv',
	'GROUP_COLOR_EXPLAIN'			=> 'Siin saad valida, mis värvi kuvatakse grupi liikmete kasutajanimed. Jäta tühjaks kui tahad vaikimisi värvi.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Kas oled kindel, et tahad lisada kasutaja %2$s gruppi?',
		2	=> 'Kas oled kindel, et tahad lisada kasutajad %2$s gruppi?',
	),
	'GROUP_CREATED'					=> 'Grupp on edukalt lisatud.',
	'GROUP_DEFAULT'					=> 'Määra grupp kasutaja vaikimisi grupiks',
	'GROUP_DEFS_UPDATED'			=> 'Vaikimisi grupp määratud kõigile valitud kasutajatele.',
	'GROUP_DELETE'					=> 'Eemalda kasutaja grupist',
	'GROUP_DELETED'					=> 'Grupp kustutatud ja kasutaja vaikimisi grupid määratud.',
	'GROUP_DEMOTE'					=> 'Taanda grupi liider',
	'GROUP_DESC'					=> 'Grupi kirjeldus',
	'GROUP_DETAILS'					=> 'Grupi detailid',
	'GROUP_EDIT_EXPLAIN'			=> 'Siin sa saad muuta olemasolevat gruppi. Sa saad muuta selle nime, kirjeldus ja staatust (avatud, suletud jne). Samuti on sul võimalus muuta grupi üldiseid seadeid nt värvi, kasutajakirjeldust vms. Siin tehtud muudatused kirjutavad üle kasutajate praegused seaded. Siin tehtud muudatused kirjutavad üle kasutaja hetke seaded',
	'GROUP_ERR_USERS_EXIST'			=> 'Valitud kasutajad on juba selle grupi liikmed.',
	'GROUP_FOUNDER_MANAGE'			=> 'Foorumi asutaja haldamine ainult',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Lubab gruppi muuta ainult foorumi asutajatel. Kindlate õigustega kasutajad saavad siiski gruppi ja selle liikmeid näha.',
	'GROUP_HIDDEN'					=> 'Nähtamatu',
	'GROUP_LANG'					=> 'Grupi keel',
	'GROUP_LEAD'					=> 'Grupi liidrid',
	'GROUP_LEADERS_ADDED'			=> 'Uued liidrid lisatud edukalt gruppi.',
	'GROUP_LEGEND'					=> 'Näita gruppi legendis',
	'GROUP_LIST'					=> 'Praegused liikmed',
	'GROUP_LIST_EXPLAIN'			=> 'See on täielik nimekiri selle grupi liikmetest. Võid kustutada liikmeid (välja arvatud mõnedes gruppides) või lisada uusi.',
	'GROUP_MEMBERS'					=> 'Grupi liikmed',
	'GROUP_MEMBERS_EXPLAIN'			=> 'See on siin nimekiri selle kasutajagrupi liikmetest. See sisaldab eraldi sektsiooni grupi liidritele, ootel olevatele ja olemasolevatele liikmetele. Siin saad hallata neid igast aspektist, kes on siin grupis liikmeks ja mis rollis nad on. Et eemaldada liider, aga säilitada liikmena, kasuta taandamist mitte kustutamist. Samamoodi saad kasutada edutamist, et teha olemasolevast kasutajast grupi liider.',
	'GROUP_MESSAGE_LIMIT'			=> 'Grupi privaatsõnumite arv kausta kohta',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'See valik kirjutab üle kasutajate privaatsõnumite talletamise määra. Väärtus 0 tähendab, et võetakse kasutaja vaikimisi määr.',
	'GROUP_MODS_ADDED'				=> 'Uued grupi liidrid edukalt lisatud.',
	'GROUP_MODS_DEMOTED'			=> 'Grupi liidrid taandatud edukalt.',
	'GROUP_MODS_PROMOTED'			=> 'Grupi liikmed edutatud.',
	'GROUP_NAME'					=> 'Grupi nimi',
	'GROUP_NAME_TAKEN'				=> 'Grupi nimi on juba kasutuses, palun vali mõni alternatiiv.',
	'GROUP_OPEN'					=> 'Avatud',
	'GROUP_PENDING'					=> 'Ootel olevad kasutajad',
	'GROUP_MAX_RECIPIENTS'			=> 'Maksimaalne arv saajaid privaatsõnumi kohta',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Kui seade on 0, kasutatakse ülefoorumilist seadet.',
	'GROUP_OPTIONS_SAVE'			=> 'Grupi valikud',
	'GROUP_PROMOTE'					=> 'Eduta grupi liidriks',
	'GROUP_RANK'					=> 'Grupi kasutajakirjeldus',
	'GROUP_RECEIVE_PM'				=> 'Grupp saab vastu võtta privaatsõnumeid',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Nähtamatutele gruppidele ei saa sõnumeid saata, nähtamatuse pärast.',
	'GROUP_REQUEST'					=> 'Taotlus',
	'GROUP_SETTINGS_SAVE'			=> 'Grupi üldised seaded',
	'GROUP_SKIP_AUTH'				=> 'Vabasta grupi liider õigustest',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Kui lubatud, ei päri grupi liider enam grupi õigusi.',
	'GROUP_SPECIAL'					=> 'Eelloodud grupp',
	'GROUP_TEAMPAGE'				=> 'Näita gruppi meeskonna lehel',
	'GROUP_TYPE'					=> 'Grupi tüüp',
	'GROUP_TYPE_EXPLAIN'			=> 'See näitab, millised kasutajad saavad liituda või vaadata seda gruppi.',
	'GROUP_UPDATED'					=> 'Grupi seaded uuendatud edukalt.',

	'GROUP_USERS_ADDED'				=> 'Uued kasutajad edukalt gruppi lisatud.',
	'GROUP_USERS_EXIST'				=> 'Valitud kasutajad on juba grupi liikmed.',
	'GROUP_USERS_REMOVE'			=> 'Kasutajad eemaldatud grupist ja uued vaikimisi grupid on omandatud.',

	'LEGEND_EXPLAIN'				=> 'Need on grupid, mis on ära nädatud ka legendis:',
	'LEGEND_SETTINGS'				=> 'Legendi seaded',
	'LEGEND_SORT_GROUPNAME'			=> 'Sorteeri legend gruppi nime järgi',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Allpool olevat järjestust ignoreeritakse, kui antud valik on sisse lülitatud.',

	'MANAGE_LEGEND'			=> 'Halda grupi legendi',
	'MANAGE_TEAMPAGE'		=> 'Halda meeskonna lehte',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Tee vaikimisi grupp igale kasutajale',
	'MEMBERS'				=> 'Liikmed',

	'NO_GROUP'					=> 'Pole ühtegi gruppi.',
	'NO_GROUPS_ADDED'			=> 'Ühtegi gruppi pole veel lisatud.',
	'NO_GROUPS_CREATED'			=> 'Ühtegi gruppi pole veel lisatud.',
	'NO_PERMISSIONS'			=> 'Ära kopeeri õiguseid',
	'NO_USERS'					=> 'Sa pole ühtegi kasutajat sisestanud.',
	'NO_USERS_ADDED'			=> 'Ühtegi kasutajat pole lisatud gruppi.',
	'NO_VALID_USERS'			=> 'Sa pole valinud ühtegi sobivat kasutajat sellele toimingule.',

	'SELECT_GROUP'				=> 'Vali grupp',
	'SPECIAL_GROUPS'			=> 'Eelloodud grupid',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Eelloodud grupid on spetsiaalsed grupid - neid ei saa kustutada ega otseselt muuta, aga sa saad siiski lisada nendesse kasutajaid ja muuta üldiseid seadeid.',

	'TEAMPAGE'					=> 'Meeskonna leht',
	'TEAMPAGE_DISP_ALL'			=> 'Kõigi kasutajagruppide järgi',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Kasutajate vaike gruppi järgi',
	'TEAMPAGE_DISP_FIRST'		=> 'Ainult esimese kasutajagruppi järgi',
	'TEAMPAGE_EXPLAIN'			=> 'Need on gruppid, mis on ära näidatud meeskonna lehel:',
	'TEAMPAGE_FORUMS'			=> 'Näita modereeritavaid foorumeid',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Kui valida "Jah", siis tuleb nimekiri foorumitest, mida moderaatorid saavad modereerida.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Näita kasutajaid gruppide järgi',
	'TEAMPAGE_SETTINGS'			=> 'Meeskonna lehe seaded',
	'TOTAL_MEMBERS'				=> 'Kasutajad',

	'USERS_APPROVED'				=> 'Kasutajad edukalt kinnitatud.',
	'USER_DEFAULT'					=> 'Kasutaja vaikimisi',
	'USER_DEF_GROUPS'				=> 'Kasutajate loodud grupid',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Need on grupid, mille oled loonud ise või mõni muu administraator siin foorumis. Sa saad hallata liikmeskonda nendes ja muuta nende gruppide seadeid või isegi neid kustutada.',
	'USER_GROUP_DEFAULT'			=> 'Vali vaikimisi grupiks',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Valides siin JAH muudad sa selle grupi vaikimisi grupiks lisatud kasutajatele.',
	'USER_GROUP_LEADER'				=> 'Eduta grupi liidriks',
));
