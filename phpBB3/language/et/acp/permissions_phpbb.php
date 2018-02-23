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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Toimingud',
	'ACL_CAT_CONTENT'		=> 'Sisu',
	'ACL_CAT_FORUMS'		=> 'Foorumid',
	'ACL_CAT_MISC'			=> 'Muud',
	'ACL_CAT_PERMISSIONS'	=> 'Õigused',
	'ACL_CAT_PM'			=> 'Privaatsõnumid',
	'ACL_CAT_POLLS'			=> 'Hääletused',
	'ACL_CAT_POST'			=> 'Postitused',
	'ACL_CAT_POST_ACTIONS'	=> 'Postituste toimingud',
	'ACL_CAT_POSTING'		=> 'Postitamine',
	'ACL_CAT_PROFILE'		=> 'Profiil',
	'ACL_CAT_SETTINGS'		=> 'Seaded',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Teema toimingud',
	'ACL_CAT_USER_GROUP'	=> 'Kasutajad &amp; grupid',
));

// User Permissions => Kasutaja õigused
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Saab vaadata profiile, liikmete nimekirja ja foorumilolevate nimekirja',
	'ACL_U_CHGNAME'		=> 'Saab muuta kasutajanime',
	'ACL_U_CHGPASSWD'	=> 'Saab muuta parooli',
	'ACL_U_CHGEMAIL'	=> 'Saab muuta e-postiaadressi',
	'ACL_U_CHGAVATAR'	=> 'Saab muuta avatari',
	'ACL_U_CHGGRP'		=> 'Saab muuta vaikimisi kasutajagruppi',
	'ACL_U_CHGPROFILEINFO'	=> 'Saab muuta profiiliväljade informatsiooni',

	'ACL_U_ATTACH'		=> 'Saab lisada manuseid',
	'ACL_U_DOWNLOAD'	=> 'Saab allalaadida manuseid',
	'ACL_U_SAVEDRAFTS'	=> 'Saab salvestada mustandeid',
	'ACL_U_CHGCENSORS'	=> 'Saab keelata tsensuuri',
	'ACL_U_SIG'			=> 'Saab kasutada signatuuri',

	'ACL_U_SENDPM'		=> 'Saab saata privaatsõnumeid',
	'ACL_U_MASSPM'		=> 'Saab saata privaatsõnumeid korraga mitmele kasutajale.',
	'ACL_U_MASSPM_GROUP'=> 'Saab saata privaatsõnumeid gruppidele',
	'ACL_U_READPM'		=> 'Saab lugeda privaatsõnumeid',
	'ACL_U_PM_EDIT'		=> 'Saab muuta oma privaatsõnumeid',
	'ACL_U_PM_DELETE'	=> 'Saab eemaldada privaatsõnumeid oma kaustast',
	'ACL_U_PM_FORWARD'	=> 'Saab edastada privaatsõnumeid',
	'ACL_U_PM_EMAILPM'	=> 'Saab saata privaatsõnumeid e-postiga',
	'ACL_U_PM_PRINTPM'	=> 'Saab printida privaatsõnumeid',
	'ACL_U_PM_ATTACH'	=> 'Saab lisada manuseid privaatsõnumitesse',
	'ACL_U_PM_DOWNLOAD'	=> 'Saab allalaadida manuseid privaatsõnumites',
	'ACL_U_PM_BBCODE'	=> 'Saab kasutada BBkoodi privaatsõnumites',
	'ACL_U_PM_SMILIES'	=> 'Saab kasutada emotikone privaatsõnumites',
	'ACL_U_PM_IMG'		=> 'Saab kasutada [img]-koodi privaatsõnumites',
	'ACL_U_PM_FLASH'	=> 'Saab postitada [Flash]-koodi privaatsõnumites',

	'ACL_U_SENDEMAIL'	=> 'Saab saata e-kirju',
	'ACL_U_SENDIM'		=> 'Saab saata kiirsuhtluse sõnumeid',
	'ACL_U_IGNOREFLOOD'	=> 'Saab ignoreerida postituste intervalli',
	'ACL_U_HIDEONLINE'	=> 'Saab peita foorumiloleku',
	'ACL_U_VIEWONLINE'	=> 'Saab vaadata peidetud foorumilolevaid kasutajaid',
	'ACL_U_SEARCH'		=> 'Saab otsida foorumitest',
));

// Forum Permissions => Foorumi õigused
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Saab vaadata foorumeid',
	'ACL_F_READ'		=> 'Saab lugeda foorumeid',
	'ACL_F_SEARCH'		=> 'Saab otsida foorumist',
	'ACL_F_SUBSCRIBE'	=> 'Saab tellida foorumit',
	'ACL_F_PRINT'		=> 'Saab printida teemasi',
	'ACL_F_EMAIL'		=> 'Saab saata teemasi e-kirjaga',
	'ACL_F_BUMP'		=> 'Saab tõstatada teemasid',
	'ACL_F_USER_LOCK'	=> 'Saab sulgeda oma teemasi',
	'ACL_F_DOWNLOAD'	=> 'Saab allalaadida manuseid',
	'ACL_F_REPORT'		=> 'Saab raporteerida postitusi',

	'ACL_F_POST'		=> 'Saab teha uusi teemasi',
	'ACL_F_STICKY'		=> 'Saab postitada kleebiseid',
	'ACL_F_ANNOUNCE'	=> 'Saab postitada teadaandeid',
	'ACL_F_REPLY'		=> 'Saab vastata teemadele',
	'ACL_F_EDIT'		=> 'Saab muuta oma postitusi',
	'ACL_F_DELETE'		=> 'Saab jäädavalt kustutada oma postitusi',
	'ACL_F_SOFTDELETE'	=> 'Saab kustutada oma postitusi koos taastamis võimalusega<br /><em>Moderaatoritel, kellel on õigus postitusi heaks kiita, saavad ennistada postitusi, mis on kustutatud taastamise võimalusega.</em>',
	'ACL_F_IGNOREFLOOD' => 'Saab ignoreerida postituste intervalli',
	'ACL_F_POSTCOUNT'	=> 'Võimalda postituste loendamine<br /><em>Pane tähele, et see seade mõjub ainult uuetele postitustele.</em>',
	'ACL_F_NOAPPROVE'	=> 'Saab postitada ilma heakskiiduta',

	'ACL_F_ATTACH'		=> 'Saab lisada manuseid',
	'ACL_F_ICONS'		=> 'Saab kasutada teema / postituste ikoone',
	'ACL_F_BBCODE'		=> 'Saab kasutada BBKoode',
	'ACL_F_FLASH'		=> 'Saab kasutada [flash] BBkoodi märgendit',
	'ACL_F_IMG'			=> 'Saab kasutada [img] BBkoodi märgendit',
	'ACL_F_SIGS'		=> 'Saab kasutada signatuuri',
	'ACL_F_SMILIES'		=> 'Saab postitada emotikone',

	'ACL_F_POLL'		=> 'Saab luua hääletusi',
	'ACL_F_VOTE'		=> 'Saab hääletada',
	'ACL_F_VOTECHG'		=> 'Saab muuta oma hääletuse valikut',
));

// Moderator Permissions => Moderaatori õigused
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Saab muuta postitusi',
	'ACL_M_DELETE'		=> 'Saab jäädavalt kustutada postitusi',
	'ACL_M_SOFTDELETE'	=> 'Saab kustutada postitusi koos taastamis võimalusega<br /><em>Moderaatoritel, kellel on võimalus heaks kiita postitusi, saavad ka postitusi ennistada.</em>',
	'ACL_M_APPROVE'		=> 'Saab heaks kiita ja taastada postitusi',
	'ACL_M_REPORT'		=> 'Saab sulgeda ja kustutada raporteid',
	'ACL_M_CHGPOSTER'	=> 'Saab muuta postituse autorit',

	'ACL_M_MOVE'	=> 'Saab liigutada teemasi',
	'ACL_M_LOCK'	=> 'Saab sulgeda teemasi',
	'ACL_M_SPLIT'	=> 'Saab poolitada teemasi',
	'ACL_M_MERGE'	=> 'Saab ühendada teemasi',

	'ACL_M_INFO'		=> 'Saab vaadata postituse andmeid',
	'ACL_M_WARN'		=> 'Saab anda hoiatusi<br /><em>See jõustub kõigis foorumites korraga. Tegemist ei ole ühe foorumi põhisega.</em>', // See seade moderaatoritele on üldine, ning mitte ühe foorumi põhine
	'ACL_M_PM_REPORT'	=> 'Saab sulgeda ja kustutada privaatsõnumite raporteid<br /><em>Tegemist ei ole ühe foorumi põhisega. Tegemist ei ole ühe foorumi põhisega.</em>', // See seade moderaatoritele on üldine, ning mitte ühe foorumi põhine
	'ACL_M_BAN'			=> 'Saab ohjata keeldusi<br /><em>See jõustub kõigis foorumites korraga. Tegemist ei ole ühe foorumi põhise seadega.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions => Administraatori õigused
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Saab muuta foorumi seadeid, ning kontrollida uuendusi',
	'ACL_A_SERVER'		=> 'Saab muuta serveri/ühendumise seadeid',
	'ACL_A_JABBER'		=> 'Saab muuta Jabberi seadeid',
	'ACL_A_PHPINFO'		=> 'Saab vaadata PHP seadeid',

	'ACL_A_FORUM'		=> 'Saab hallata foorumeid',
	'ACL_A_FORUMADD'	=> 'Saab lisada foorumeid',
	'ACL_A_FORUMDEL'	=> 'Saab kustutada foorumeid',
	'ACL_A_PRUNE'		=> 'Saab kärpida foorumeid',

	'ACL_A_ICONS'		=> 'Saab muuta teema/postituse ikoone ja emotikone',
	'ACL_A_WORDS'		=> 'Saab muuta tsensuuri',
	'ACL_A_BBCODE'		=> 'Saab luua BBkoodi',
	'ACL_A_ATTACH'		=> 'Saab muuta manuste seadeid',

	'ACL_A_USER'		=> 'Saab hallata kasutajaid<br /><em>Sellega saab vaadata ka kasutajate brauserite agenti foorumilolevate kasutajate nimekirjas.</em>',
	'ACL_A_USERDEL'		=> 'Saab kustutada/kärpida kasutajaid',
	'ACL_A_GROUP'		=> 'Saab hallata gruppe',
	'ACL_A_GROUPADD'	=> 'Saab lisada uue grupi',
	'ACL_A_GROUPDEL'	=> 'Saab kustutada gruppe',
	'ACL_A_RANKS'		=> 'Saab hallata tiitleid',
	'ACL_A_PROFILE'		=> 'Saab hallata omaloodud profiilivälju',
	'ACL_A_NAMES'		=> 'Saab hallata mitte lubatuid kasutajanimesid',
	'ACL_A_BAN'			=> 'Saab hallata keeldusi',

	'ACL_A_VIEWAUTH'	=> 'Saab vaadata õiguste maske',
	'ACL_A_AUTHGROUPS'	=> 'Saab muuta õigusi igal grupil eraldi',
	'ACL_A_AUTHUSERS'	=> 'Saab muuta õigusi igal kasutajal eraldi',
	'ACL_A_FAUTH'		=> 'Saab muuta foorumi õiguste klassi',
	'ACL_A_MAUTH'		=> 'Saab muuta moderaatori õiguste klassi',
	'ACL_A_AAUTH'		=> 'Saab muuta administraatori õiguste klassi',
	'ACL_A_UAUTH'		=> 'Saab muuta kasutaja õiguse klassi',
	'ACL_A_ROLES'		=> 'Saab hallata rolle',
	'ACL_A_SWITCHPERM'	=> 'Saab kasutada teisi õigusi',

	'ACL_A_STYLES'		=> 'Saab hallata stiile',
	'ACL_A_EXTENSIONS'	=> 'Saab hallata laiendusi',
	'ACL_A_VIEWLOGS'	=> 'Saab vaadata logisid',
	'ACL_A_CLEARLOGS'	=> 'Saab tühjendada logisi',
	'ACL_A_MODULES'		=> 'Saab hallata mooduleid',
	'ACL_A_LANGUAGE'	=> 'Saab hallata keelepakke',
	'ACL_A_EMAIL'		=> 'Saab saata masskirju',
	'ACL_A_BOTS'		=> 'Saab hallata botte',
	'ACL_A_REASONS'		=> 'Saab hallata raporteerimise/keelamise põhjuseid',
	'ACL_A_BACKUP'		=> 'Saab teha koopie/taastada andmebaasi',
	'ACL_A_SEARCH'		=> 'Saab hallata otsingu seadeid',
));
