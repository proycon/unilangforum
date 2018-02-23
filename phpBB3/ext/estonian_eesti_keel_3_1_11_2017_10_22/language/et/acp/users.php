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
	'ADMIN_SIG_PREVIEW'		=> 'Signatuuri eelvaade',
	'AT_LEAST_ONE_FOUNDER'	=> 'Sa ei või seda foorumi asutajat muuta tavaliseks kasutajaks, määra enne keegi teine foorumi asutajaks.',

	'BAN_ALREADY_ENTERED'	=> 'Keeld on sisestatud juba varem. Keeldude nimekirja ei uuendatud.',
	'BAN_SUCCESSFUL'		=> 'Keeld edukalt sisestatud.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Anonüümset kasutajat ei saa keelata foorumilt. Anonüümsele kasutajale saab määrata õigused vahelehelt "Õigused".',
	'CANNOT_BAN_FOUNDER'			=> 'Sa ei või anda keeldu foorumi asutajale.',
	'CANNOT_BAN_YOURSELF'			=> 'Sa ei või anda keeldu iseendale.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Sa ei või deaktiveerida bottide kontosid. Parem deaktiveerida bot ise läbi "botide" lehekülje AJP\'s.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Sa ei või deaktiveerida foorumi asutaja kasutajakontot.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Sa ei või deaktiveerida iseenda kasutajakontot.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Sa ei või sundida boti reaktivatsioonile. Palun kasuta selle tegevuseks botide lehekülge.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Sa ei või sundida foorumi asutajat reaktivatsioonile.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Sa ei või sundida iseenda kasutajakontot reaktivatsioonile.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Sa ei saa eemaldada külalise staatusega kasutajat.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Sa ei saa eemaldada foorumi asutajate kontosi.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Sa ei saa eemaldada iseenda kasutajakontot.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Sa ei saa ignoreeritud kasutajaid foorumi asutajaks teha.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Sa pead enne kasutaja aktiveerima, kui teda foorumi asutajaks määrad.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Sa pead selle sisestama ainult siis, kui tahad kasutaja e-posti aadressi muuta.',

	'DELETE_POSTS'			=> 'Kustuta postitused',
	'DELETE_USER'			=> 'Kustuta kasutaja',
	'DELETE_USER_EXPLAIN'	=> 'Pane tähele, et asutaja kustutamine on lõplik tegevus, ning seda ei saa taastada. Lugemata privaatsõnumid, mis on saadetud antud kasutaja poolt kustutatakse, ning need ei ole enam saadaval saajatele.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Edukalt sunnitud reaktivatsioonile.',
	'FOUNDER'						=> 'Foorumi asutaja',
	'FOUNDER_EXPLAIN'				=> 'Foorumi asutajatel on kõik administreerivad õigused ja neid ei saa kustutada, foorumilt keelata või hoiatada mitteasutajad.',

	'GROUP_APPROVE'					=> 'Kinnita kasutaja',
	'GROUP_DEFAULT'					=> 'Tee see grupp kasutajale vaikimisi grupiks',
	'GROUP_DELETE'					=> 'Eemalda kasutaja grupist',
	'GROUP_DEMOTE'					=> 'Taanda kasutaja grupi liidri kohalt',
	'GROUP_PROMOTE'					=> 'Eduta kasutaja grupi liidriks',

	'IP_WHOIS_FOR'			=> 'IP - %s',

	'LAST_ACTIVE'			=> 'Viimati aktiivne',

	'MOVE_POSTS_EXPLAIN'	=> 'Palun vali foorum, kuhu liigutatakse kõik selle kasutaja postitused.',

	'NO_SPECIAL_RANK'		=> 'Spetsiaalseid kasutajakirjeldusi ei ole omistatud',
	'NO_WARNINGS'			=> 'Hoiatusi pole.',
	'NOT_MANAGE_FOUNDER'	=> 'Sa tahtsid hallata kasutajat, kellel on foorumi asutaja staatus. Ainult foorumi asutajad saavad teisi foorumi asutajaid hallata.',

	'QUICK_TOOLS'			=> 'Kiirvalikud',

	'REGISTERED'			=> 'Registreerus',
	'REGISTERED_IP'			=> 'Registreerumise IP',
	'RETAIN_POSTS'			=> 'Säilita postitused',

	'SELECT_FORM'			=> 'Vali vorming',
	'SELECT_USER'			=> 'Vali kasutaja',

	'USER_ADMIN'					=> 'Kasutaja administratsioon',
	'USER_ADMIN_ACTIVATE'			=> 'Aktiveeri konto',
	'USER_ADMIN_ACTIVATED'			=> 'Kasutaja edukalt aktiveeritud.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar kasutajakontolt on eemaldatud.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Keela e-posti järgi',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-posti aadressile on lisatud keeld läbi kasutaja sektsiooni',
	'USER_ADMIN_BAN_IP'				=> 'Keela IP järgi',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP aadressile on lisatud keeld läbi kasutaja sektsiooni',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Kasutajanimele on lisatud keeld läbi kasutaja sektsiooni',
	'USER_ADMIN_BAN_USER'			=> 'Keela kasutajanime järgi',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktiveeri konto',
	'USER_ADMIN_DEACTIVED'			=> 'Kasutaja edukalt deaktiveeritud.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Kustuta kõik manused',
	'USER_ADMIN_DEL_AVATAR'			=> 'Kustuta avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Tühjenda PS saadetavate kirjade kaust',
	'USER_ADMIN_DEL_POSTS'			=> 'Kustuta kõik postitused',
	'USER_ADMIN_DEL_SIG'			=> 'Kustuta signatuur',
	'USER_ADMIN_EXPLAIN'			=> 'Siin saad muuta kasutajate informatsiooni ja erinevaid valikuid.',
	'USER_ADMIN_FORCE'				=> 'Sunni reaktivatsiooni',
	'USER_ADMIN_LEAVE_NR'			=> 'Eemalda vastregistreerunutest',
	'USER_ADMIN_MOVE_POSTS'			=> 'Liiguta kõik postitused',
	'USER_ADMIN_SIG_REMOVED'		=> 'Kasutaja signatuur on edukalt eemaldatud.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Kõik selle kasutaja manused on edukalt eemaldatud.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Avatari ei kuvata, sest need on keelatud.',
	'USER_AVATAR_UPDATED'			=> 'Kasutaja avatari detailid edukalt uuendatud.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Praegust avatari ei kuvata, sest selle tüüp on keelatud.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Kohandatud profiiliväljad',
	'USER_DELETED'					=> 'Kasutaja edukalt kustutatud.',
	'USER_GROUP_ADD'				=> 'Lisa kasutaja gruppi',
	'USER_GROUP_NORMAL'				=> 'Kasutajapõhised grupid, kus kasutaja liige on',
	'USER_GROUP_PENDING'			=> 'Grupid, kus kasutaja veel on ootel',
	'USER_GROUP_SPECIAL'			=> 'Põhigrupid, kus kasutaja liige on',
	'USER_LIFTED_NR'				=> 'Kasutaja vastregistreerunutest eemaldatud.',
	'USER_NO_ATTACHMENTS'			=> 'Pole ühtegi manust, mida näidata.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Kasutajal ei ole ühtegi postitust mitte jätta või kustutada.',
	'USER_OUTBOX_EMPTIED'			=> 'Kasutaja saadetavate sõnumite kaust tühjendatud.',
	'USER_OUTBOX_EMPTY'				=> 'Kasutaja saadetavate sõnumite kaust oli juba tühi.',
	'USER_OVERVIEW_UPDATED'			=> 'Kasutaja detailid uuendatud.',
	'USER_POSTS_DELETED'			=> 'Kõik selle kasutaja postitused kustutatud edukalt.',
	'USER_POSTS_MOVED'				=> 'Kasutaja postitused liigutatud edukalt.',
	'USER_PREFS_UPDATED'			=> 'Kasutaja seaded uuendatud.',
	'USER_PROFILE'					=> 'Kasutaja profiil',
	'USER_PROFILE_UPDATED'			=> 'Kasutaja profiil uuendatud.',
	'USER_RANK'						=> 'Kasutajakirjeldus',
	'USER_RANK_UPDATED'				=> 'Kasutajakirjeldus uuendatud.',
	'USER_SIG_UPDATED'				=> 'Kasutaja signatuur on uuendatud.',
	'USER_WARNING_LOG_DELETED'		=> 'Informatsiooni pole saadaval. Võimalik, et logi sissekanne on kustutatud.',
	'USER_TOOLS'					=> 'Tavalised töööriistad',
));
