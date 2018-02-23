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
	'ABOUT_USER'			=> 'Profiil',
	'ACTIVE_IN_FORUM'		=> 'Kõige aktiivsem foorum',
	'ACTIVE_IN_TOPIC'		=> 'Kõige aktiivsem teema',
	'ADD_FOE'				=> 'Lisa vaenlasena',
	'ADD_FRIEND'			=> 'Lisa sõbrana',
	'AFTER'					=> 'Pärast',

	'ALL'					=> 'Kõik',

	'BEFORE'				=> 'Enne',

	'CC_SENDER'				=> 'Saada sellest e-kirjast koopia omale e-posti aadressile.',
	'CONTACT_ADMIN'			=> 'Võta ühendust foorumi administraatoriga',

	'DEST_LANG'				=> 'Keel',
	'DEST_LANG_EXPLAIN'		=> 'Vali keel (kui saadaval) selle sõnumi saaja jaoks.',

	'EDIT_PROFILE'			=> 'Muuda profiili',

	'EMAIL_BODY_EXPLAIN'	=> 'Sõnum saadetakse tekstina, ära lisa HTML või BBkoodi. Tagasisaatmisaadressiks määratakse sinu e-posti aadress.',
	'EMAIL_DISABLED'		=> 'Vabandame, kuid kõik e-postiga seotud funktsioonid on keelatud.',
	'EMAIL_SENT'			=> 'E-kiri on saadetud.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Sõnum saadetakse tekstina, ära lisa HTML või BBkoodi. Teema info on juba sõnumis. Tagasisaatmisaadreassiks määratakse sinu e-posti aadress.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Pead sisestama korrektse saaja aadressi.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Pead sisestama sõnumi.',
	'EMPTY_MESSAGE_IM'		=> 'Pead sisestama sõnumi.',
	'EMPTY_NAME_EMAIL'		=> 'Pead sisestama saaja õige nime.',
	'EMPTY_SENDER_EMAIL'	=> 'Sa pead sisestama kehtiva e-posti aadressi.',
	'EMPTY_SENDER_NAME'		=> 'Sa pead sisestama oma nime.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Pead sisestama pealkirja.',
	'EQUAL_TO'				=> 'Võrdne',

	'FIND_USERNAME_EXPLAIN'	=> 'Kasuta seda vormi, et otsida kindlaid kasutajaid. Sa ei pea täitma kõiki välju. Osalise sobivuse jaoks kasuta * . Kui sisestad kuupäevi, kasuta formaati <kbd>YYYY-MM-DD</kbd>, näiteks <samp>2004-02-29</samp>. Kasuta märkimise kaste, et valida ühte või mitmeid kasutajanimesid ja vajuta Vali Märgitud nupule, et minna tagasi eelmisele vormile.',
	'FLOOD_EMAIL_LIMIT'		=> 'Praegu ei saa rohkem e-maile saata, proovi hiljem uuesti.',

	'GROUP_LEADER'			=> 'Grupi liider',

	'HIDE_MEMBER_SEARCH'	=> 'Peida kasutajate otsingust',

	'IM_ADD_CONTACT'		=> 'Lisa kontakt',
	'IM_DOWNLOAD_APP'		=> 'Laadi programm alla',
	'IM_JABBER'				=> 'Kasutajad võivad olla määranud võõrastelt sõnumite vastuvõtmise.',
	'IM_JABBER_SUBJECT'		=> 'Tegemist on automaatse sõnumiga süsteemi poolt, palun ära vasta sellele! Sõnum tuli kasutajalt %1$s, %2$s.',
	'IM_MESSAGE'			=> 'Sinu sõnum',
	'IM_NAME'				=> 'Sinu nimi',
	'IM_NO_DATA'			=> 'Sellel kasutajal pole sobivat kontakteerumisinfot.',
	'IM_NO_JABBER'			=> 'Vabandame, otsene sõnumite saatmine Jabberi kaudu siin serveris on keelatud. Sul peab olema Jabberi programm installeeritud, et võtta kasutajaga ühendust.',
	'IM_RECIPIENT'			=> 'Saaja',
	'IM_SEND'				=> 'Saada sõnum',
	'IM_SEND_MESSAGE'		=> 'Saada sõnum',
	'IM_SENT_JABBER'		=> 'Sinu sõnum kasutajale %1$s on edukalt saadetud.',
	'IM_USER'				=> 'Saada kiirsõnum',

	'LAST_ACTIVE'				=> 'Viimati foorumil',
	'LESS_THAN'					=> 'Vähem kui',
	'LIST_USERS'				=> array(
		1	=> '%d kasutaja',
		2	=> '%d kasutajat',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne meeskonna vaatamist.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne liikmete nimekirja vaatamist.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne liikme otsimist.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Foorum nõuab, et oleksid registreeritud ja sisse logitud enne profiilide vaatamist.',

	'MANAGE_GROUP'			=> 'Halda gruppe',
	'MORE_THAN'				=> 'Rohkem kui',

	'NO_CONTACT_FORM'		=> 'Kontaktvorm ei ole aktiveeritud.',
	'NO_CONTACT_PAGE'		=> 'Kontakt lehekülg ei ole aktiveeritud foorumis.',
	'NO_EMAIL'				=> 'Sul pole lubatud saata e-kirja sellele kasutajale.',
	'NO_VIEW_USERS'			=> 'Sul pole lubatud vaadata kasutajate nimekirja või profiile.',

	'ORDER'					=> 'Järjestus',
	'OTHER'					=> 'Muu',

	'POST_IP'				=> 'Postituse IP/domeen',

	'REAL_NAME'				=> 'Saaja nimi',
	'RECIPIENT'				=> 'Saaja',
	'REMOVE_FOE'			=> 'Eemalda vaenlane',
	'REMOVE_FRIEND'			=> 'Eemalda sõber',

	'SELECT_MARKED'			=> 'Vali märgitud',
	'SELECT_SORT_METHOD'	=> 'Vali sorteerimisviis',
	'SENDER_EMAIL_ADDRESS'	=> 'Sinu e-post',
	'SENDER_NAME'			=> 'Sinu nimi',
	'SEND_ICQ_MESSAGE'		=> 'Saada ICQ sõnum',
	'SEND_IM'				=> 'Kiirsuhtlus',
	'SEND_JABBER_MESSAGE'	=> 'Saada Jabberi sõnum',
	'SEND_MESSAGE'			=> 'Sõnum',
	'SEND_YIM_MESSAGE'		=> 'Saada YIM sõnum',
	'SORT_EMAIL'			=> 'e-postiaadressi järgi',
	'SORT_LAST_ACTIVE'		=> '"Viimati foorumil" kuupäeva järgi',
	'SORT_POST_COUNT'		=> 'Postituste arvu järgi',

	'USERNAME_BEGINS_WITH'	=> 'Kasutajanimi algab',
	'USER_ADMIN'			=> 'Administreeri kasutajat',
	'USER_BAN'				=> 'Keeld',
	'USER_FORUM'			=> 'Kasutaja statistika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Meeldetuletust pole saadetud',
		1		=> '%1$d meeldetuletus saadetud<br />» %2$s',
		2		=> '%1$d meeldetuletust saadetud<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Foorumil',
	'USER_PRESENCE'			=> 'Foorumil',
	'USERS_PER_PAGE'		=> 'Kasutajaid lehekülje kohta',

	'VIEWING_PROFILE'		=> 'Vaatan profiili - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Vaatan Facebook profiili',
	'VIEW_SKYPE_PROFILE'	=> 'Vaatan Skype profiili',
	'VIEW_TWITTER_PROFILE'	=> 'Vaatan Twitter profiili',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Vaatan YouTube kanalit',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Vaatan Google+ profiili',
));
