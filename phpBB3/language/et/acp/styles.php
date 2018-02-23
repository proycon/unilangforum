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
	'ACP_STYLES_EXPLAIN'	=> 'Siin saad hallata saadaval olevaid stiile foorumis. Stiil koosneb teemast, templeidist ja pildikogust. Võid ka muuta olemasolevaid stiile, kustutada, deaktiveerida, reaktiveerida, luua või importida uusi. Saad näha, milline stiil välja näeb, kasutades eelvaate funktsiooni. Praegune vaikimisi stiil on märgitud tärniga (*). Lisaks on toodud ka stiili kasutavate kasutajate arv. Stiili ülekirjutamine siin ei kajastu.',

	'CANNOT_BE_INSTALLED'			=> 'Ei saa paigaldada',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Kas oled kindel, et soovid eemaldada valitud stiilid?',
	'COPYRIGHT'						=> 'Autoriõigus',

	'DEACTIVATE_DEFAULT'		=> 'Sa ei saa deaktiveerida vaikimisi teemat.',
	'DELETE_FROM_FS'			=> 'Kustuta failisüsteemist',
	'DELETE_STYLE_FILES_FAILED'	=> 'Stiili "%s" failide kustutamisel tekkis viga.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Failid, mis kuuluvad stiilile "%s" on kustutatud.',
	'DETAILS'					=> 'Andmed',

	'INHERITING_FROM'			=> 'Pärib',
	'INSTALL_STYLE'				=> 'Paigalda stiil',
	'INSTALL_STYLES'			=> 'Paigalda stiilid',
	'INSTALL_STYLES_EXPLAIN'	=> 'Siin saad paigaldada uusi stiile.<br />Juhul, kui sa ei leia mõnda spetsiifilist stiili, siis võibolla on see juba paigaldatud. Kui see ei ole paigaldatud, siis kontrolli et stiil oleks õigesti üleslaetud.',
	'INVALID_STYLE_ID'			=> 'Vigane stiili ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Ühtegi stiili ei vasta sellele päringule.',
	'NO_UNINSTALLED_STYLE'		=> 'Ühtegi paigaldamata stiili ei leitud.',

	'PURGED_CACHE'				=> 'Vahemälu on tühjendatud.',

	'REQUIRES_STYLE'			=> 'See stiil vajab stiili "%s" paigaldamist.',

	'STYLE_ACTIVATE'			=> 'Aktiveeri',
	'STYLE_ACTIVE'				=> 'Aktiivne',
	'STYLE_DEACTIVATE'			=> 'Deaktiveeri',
	'STYLE_DEFAULT'				=> 'Muuda vaikimisi stiiliks',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Sa pead aktiveerima stiili enne, kui saad teha selle vaikimisi stiiliks',
	'STYLE_ERR_INVALID_PARENT'	=> 'Vigane vanem stiil.',
	'STYLE_ERR_NAME_EXIST'		=> 'Sellise nimega stiil on juba olemas.',
	'STYLE_ERR_STYLE_NAME'		=> 'Pead sisestama stiilile nime.',
	'STYLE_INSTALLED'			=> 'Stiil "%s" on paigaldatud.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Tagasi paigaldatud stiilide nimekirja',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Paigalda rohkem stiile',
	'STYLE_NAME'				=> 'Stiili nimi',
	'STYLE_NAME_RESERVED'		=> 'Stiili "%s" ei saa paigaldada, kuna antud nimi on juba reserveeritud.',
	'STYLE_NOT_INSTALLED'		=> 'Stiil "%s" ei ole paigaldatud.',
	'STYLE_PATH'				=> 'Stiili teekond',
	'STYLE_UNINSTALL'			=> 'Eemalda',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Stiili "%s" ei saa eemaldada, kuna selles on üks või rohkem child styles.',
	'STYLE_UNINSTALLED'			=> 'Stiil "%s" on edukalt eemaldatud.',
	'STYLE_USED_BY'				=> 'Kasutajaid (koos robotitega)',
	'STYLE_VERSION'				=> 'Stiili versioon',

	'UNINSTALL_DEFAULT'		=> 'Sa ei saa eemaldada foorumi vaikimisi stiili.',

	'BROWSE_STYLES_DATABASE'	=> 'Sirvi stiilide andmebaasi',
));
