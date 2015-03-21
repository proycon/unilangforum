<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ALREADY_DEFAULT_GROUP'		=> 'De geselecteerde groep is al je standaard groep.',
	'ALREADY_IN_GROUP'			=> 'Je bent al lid van de geselecteerde groep.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Je hebt al aangevraagd om lid te worden van de geselecteerde groep.',

	'CANNOT_JOIN_GROUP'			=> 'Je kan geen lid worden van deze groep. Je kan alleen lid worden van open groepen.',
	'CANNOT_RESIGN_GROUP'		=> 'Je kan je lidmaatschap van deze groep niet opzeggen. Je kan alleen je lidmaatschap opzeggen van open groepen.',
	'CHANGED_DEFAULT_GROUP'		=> 'Succesvol standaard groep veranderd.',

	'GROUP_AVATAR'						=> 'Groepsavatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Weet je zeker dat je je standaard lidmaatschap van de groep wilt veranderen naar“%s”?',
	'GROUP_CLOSED'						=> 'Gesloten',
	'GROUP_DESC'						=> 'Groepsbeschrijving',
	'GROUP_HIDDEN'						=> 'Verborgen',
	'GROUP_INFORMATION'					=> 'Gebruikersgroep informatie',
	'GROUP_IS_CLOSED'					=> 'Dit is een gesloten groep, nieuwe leden kunnen alleen lid worden op uitnodiging van een groepsleider.',
	'GROUP_IS_FREE'						=> 'Dit is een vrije open groep, alle nieuwe leden zijn welkom.',
	'GROUP_IS_HIDDEN'					=> 'Dit is een verborgen groep, alleen leden van deze groep kunnen hun lidmaatschap zien.',
	'GROUP_IS_OPEN'						=> 'Dit is een open groep, leden kunnen hun lidmaatschap aanvragen.',
	'GROUP_IS_SPECIAL'					=> 'Dit is een speciale groep, speciale groepen worden beheerd door de forumbeheerders.',
	'GROUP_JOIN'						=> 'Lid worden van groep',
	'GROUP_JOIN_CONFIRM'				=> 'Weet je zeker dat je lid wilt worden van de geselecteerde groep?',
	'GROUP_JOIN_PENDING'				=> 'Aanvraag om lid te worden van groep',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Weet je zeker dat je je lidmaatschap wilt aanvragen voor de geselecteerde groep?',
	'GROUP_JOINED'						=> 'Succesvol lid geworden van geselecteerde groep.',
	'GROUP_JOINED_PENDING'				=> 'Succesvol lidmaatschap aangevraagd. Wacht tot een groepsleider je aanvraag goedkeurt.',
	'GROUP_LIST'						=> 'Beheer gebruikers',
	'GROUP_MEMBERS'						=> 'Groepsleden',
	'GROUP_NAME'						=> 'Groepsnaam',
	'GROUP_OPEN'						=> 'Open',
	'GROUP_RANK'						=> 'Groepsrang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Groep lidmaatschap opzeggen',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Weet je zeker dat je je lidmaatschap voor de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGN_PENDING'				=> 'Een aangevraagde lidmaatschap opzeggen',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Weet je zeker dat je je aangevraagde lidmaatschap voor de geselecteerde groep wilt opzeggen?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Je bent succesvol verwijderd van de geselecteerde groep.',
	'GROUP_RESIGNED_PENDING'			=> 'Je aangevraagde lidmaatschap is succesvol verwijderd van de geselecteerde groep.',
	'GROUP_TYPE'						=> 'Groepstype',
	'GROUP_UNDISCLOSED'					=> 'Verborgen groep',
	'FORUM_UNDISCLOSED'					=> 'Modereer verborgen forum(s)',

	'LOGIN_EXPLAIN_GROUP'	=> 'Je moet aangemeld zijn om de groepsdetails te kunnen bekijken.',

	'NO_LEADERS'					=> 'Je bent geen leider van geen enkele groep.',
	'NOT_LEADER_OF_GROUP'			=> 'De gevraagde operatie kan niet uitgevoerd worden omdat je geen leider bent van de geselecteerde groep.',
	'NOT_MEMBER_OF_GROUP'			=> 'De gevraagde operatie kan niet uitgevoerd worden omdat je geen lid bent van de geselecteerde groep of je lidmaatschap moet nog goedgekeurd worden.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Je mag niet je lidmaatschap van je standaard groep opzeggen.',
	
	'PRIMARY_GROUP'		=> 'Hoofdgroep',

	'REMOVE_SELECTED'		=> 'Verwijder geselecteerde',

	'USER_GROUP_CHANGE'			=> 'Van “%1$s” groep naar “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Degradeer leiderschap',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Weet je zeker dat je wilt degraderen als groepsleider van de geselecteerde groep?',
	'USER_GROUP_DEMOTED'		=> 'Je hebt succesvol je leiderschap gedegradeerd.',
));
