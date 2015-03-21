<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
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
	'ALREADY_DEFAULT_GROUP'				=> 'Den valda gruppen är redan din standardgrupp',
	'ALREADY_IN_GROUP'					=> 'Du är redan medlem i den valda gruppen',
	'ALREADY_IN_GROUP_PENDING'			=> 'Du har redan ansökt om medlemskap i den valda gruppen.',

	'CHANGED_DEFAULT_GROUP'				=> 'Ändrade standardgrupp',
	'CANNOT_JOIN_GROUP'			=> 'Du kan inte gå med i denna grupp. Du kan endast gå med i öppna och fria grupper.',
	'CANNOT_RESIGN_GROUP'		=> 'Du kan inte lämna den här gruppen. Du kan endast lämna öppna och fria grupper.',

	'GROUP_AVATAR'						=> 'Gruppvisningsbild',
	'GROUP_CHANGE_DEFAULT'				=> 'Är du säker på att du vill byta din standardgrupp till “%s”?',
	'GROUP_CLOSED'						=> 'Stängd',
	'GROUP_DESC'						=> 'Gruppbeskrivning',
	'GROUP_HIDDEN'						=> 'Dold',
	'GROUP_INFORMATION'					=> 'Användargruppinformation', 
	'GROUP_IS_CLOSED'					=> 'Detta är en stängd grupp, nya medlemmar accepteras endast via inbjudan från gruppledaren.',
	'GROUP_IS_FREE'						=> 'Detta är en fri grupp, alla användare är välkomna att bli medlemmar.', 
	'GROUP_IS_HIDDEN'					=> 'Detta är en dold grupp, endast gruppmedlemmar kan se medlemslistan.',
	'GROUP_IS_OPEN'						=> 'Detta är en öppen grupp, användare kan ansöka om medlemskap.',
	'GROUP_IS_SPECIAL'					=> 'Detta är en specialgrupp, specialgrupper sköts av forumadministratörerna.', 
	'GROUP_JOIN'						=> 'Gå med i grupp',
	'GROUP_JOIN_CONFIRM'				=> 'Är du säker på att du vill gå med i den valda gruppen?',
	'GROUP_JOIN_PENDING'				=> 'Ansök om medlemskap i gruppen',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Är du säker på att du vill ansöka om medlemskap i den valda gruppen?',
	'GROUP_JOINED'						=> 'Gick med i den valda gruppen.',
	'GROUP_JOINED_PENDING'				=> 'Ansökte om medlemskap i gruppen. Vänta tills en gruppledare har godkänt ditt medlemskap.',
	'GROUP_LIST'						=> 'Hantera medlemmar',
	'GROUP_MEMBERS'						=> 'Gruppmedlemmar',
	'GROUP_NAME'						=> 'Gruppnamn',
	'GROUP_OPEN'						=> 'Öppen',
	'GROUP_RANK'						=> 'Grupptitel', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Säg upp gruppmedlemskap',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Är du säker på att du vill lämna den valda gruppen?',
	'GROUP_RESIGN_PENDING'				=> 'Säg upp väntande gruppmedlemskap',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Är du säker på att du vill ta tillbaka din ansökan till den valda gruppen?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Du togs bort från den valda gruppen.',
	'GROUP_RESIGNED_PENDING'			=> 'Din ansökan till den valda gruppen togs tillbaka.',
	'GROUP_TYPE'						=> 'Grupptyp',
	'GROUP_UNDISCLOSED'					=> 'Dold grupp',
	'FORUM_UNDISCLOSED'					=> 'Modererar dolda kategorier',

	'LOGIN_EXPLAIN_GROUP'	=> 'Du måste logga in för att visa gruppdetaljer.',

	'NO_LEADERS'					=> 'Du är inte ledare för några grupper.',
	'NOT_LEADER_OF_GROUP'			=> 'Den valda operationen kunde inte utföras eftersom du inte är ledare för den valda gruppen.',
	'NOT_MEMBER_OF_GROUP'			=> 'Den valda operationen kunde inte utföras eftersom du inte är medlem i den valda gruppen, eller så har din ansökan om medlemskap inte beviljats än.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Du kan inte lämna din standardgrupp.',

	'PRIMARY_GROUP'		=> 'Primärgrupp',

	'REMOVE_SELECTED'		=> 'Ta bort valda',

	'USER_GROUP_CHANGE'			=> 'Från “%1$s” gruppen till “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Säg upp ledarskap',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Är du säker på att du vill säga upp ditt ledarskap över den valda gruppen?',
	'USER_GROUP_DEMOTED'		=> 'Sa upp ditt ledarskap.',
));
