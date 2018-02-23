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
	'ALREADY_DEFAULT_GROUP'		=> 'Valitud grupp on juba sinu vaikimisi grupp.',
	'ALREADY_IN_GROUP'			=> 'Sa oled juba valitud grupi liige.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Sa oled juba valitud grupiga liituda soovinud.',

	'CANNOT_JOIN_GROUP'			=> 'Sa ei saa selle grupiga liituda. Saad liituda vaid avatud gruppidega.',
	'CANNOT_RESIGN_GROUP'		=> 'Sa ei saa siit grupist lahkuda. Saad lahkuda vaid avatud gruppidest.',
	'CHANGED_DEFAULT_GROUP'		=> 'Vaikimis grupi vahetamine õnnestus.',

	'GROUP_AVATAR'						=> 'Grupi avatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Kas oled kindel, et soovid vahetada vaikimisi grupiks grupi “%s”?',
	'GROUP_CLOSED'						=> 'Suletud',
	'GROUP_DESC'						=> 'Grupi kirjeldus',
	'GROUP_HIDDEN'						=> 'Varjatud',
	'GROUP_INFORMATION'					=> 'Kasutajagrupi informatsioon',
	'GROUP_IS_CLOSED'					=> 'See on suletud grupp, uued liikmed saavad liituda vaid grupi liidri kutsel.',
	'GROUP_IS_FREE'						=> 'See on kõigile avatud grupp, uued liikmed saavad liituda.',
	'GROUP_IS_HIDDEN'					=> 'See on varjatud grupp, ainult selle grupi liikmed saavad vaadata oma liikmestaatust.',
	'GROUP_IS_OPEN'						=> 'See on avatud grupp, kasutajad võivad esitada liitumissoovi.',
	'GROUP_IS_SPECIAL'					=> 'See on erigrupp, erigruppe haldab foorumi administraator.',
	'GROUP_JOIN'						=> 'Liitu grupiga',
	'GROUP_JOIN_CONFIRM'				=> 'Oled kindel, et soovid ühineda valitud grupiga?',
	'GROUP_JOIN_PENDING'				=> 'Esita grupiga liitumissoov',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Oled kindel, et soovid esitada liitumissoovi sellele grupile?',
	'GROUP_JOINED'						=> 'Liitusid grupiga edukalt',
	'GROUP_JOINED_PENDING'				=> 'Esitasid liitumissoovi. Oota grupi liidri vastust.',
	'GROUP_LIST'						=> 'Halda kasutajaid',
	'GROUP_MEMBERS'						=> 'Grupi liikmed',
	'GROUP_NAME'						=> 'Grupi nimi',
	'GROUP_OPEN'						=> 'Avatud',
	'GROUP_RANK'						=> 'Grupi tase',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Loobu grupi liikmestaatusest.',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Oled sa kindel, et soovid loobuda grupi liikmestaatusest?',
	'GROUP_RESIGN_PENDING'				=> 'Loobu otsustamata grupi liikmestaatusest',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Oled kindel, et soovid loobuda otsustamata grupi liikmestaatusest?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Sind eemaldati edukalt valitud grupist.',
	'GROUP_RESIGNED_PENDING'			=> 'Sinu otsustamata liikmestaatus on edukalt eemaldatud.',
	'GROUP_TYPE'						=> 'Grupi tüüp',
	'GROUP_UNDISCLOSED'					=> 'Varjatud grupp',
	'FORUM_UNDISCLOSED'					=> 'Modereerib varjatud foorumit/foorumeid.',

	'LOGIN_EXPLAIN_GROUP'	=> 'Sa pead sisse logima, et vaadata grupi andmeid.',

	'NO_LEADERS'					=> 'Sa ei ole ühegi grupi liider.',
	'NOT_LEADER_OF_GROUP'			=> 'Valitud toimingut ei saa sooritada, sest sa ei ole valitud grupi liider',
	'NOT_MEMBER_OF_GROUP'			=> 'Valitud toimingut ei saa sooritada, sest sa ei ole valitud grupi liige.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Sul ei ole lubatud loobuda oma vaikimisi grupist.',

	'PRIMARY_GROUP'		=> 'Peagrupp',

	'REMOVE_SELECTED'		=> 'Eemalda valitud',

	'USER_GROUP_CHANGE'			=> '“%1$s” grupist “%2$s” gruppi.',
	'USER_GROUP_DEMOTE'			=> 'Loobu liidristaatusest',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Oled sa kindel, et soovid loobuda valitud grupi liidristaatusest?',
	'USER_GROUP_DEMOTED'		=> 'Oled grupi liidristaatusest edukalt loobunud.',
));
