<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: groups.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'ALREADY_DEFAULT_GROUP'	=> 'Den valgte gruppe er allerede din standardgruppe.',
	'ALREADY_IN_GROUP'		=> 'Du er allerede medlem af den valgte gruppe.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Du har allerede indsendt en anmodning om at blive medlem af den valgte gruppe.',

	'CANNOT_JOIN_GROUP'		=> 'Du kan ikke tilslutte dig denne gruppe. Du kan kun tilslutte dig åbne og frie åbne grupper.',
	'CANNOT_RESIGN_GROUP'	=> 'Du kan ikke melde dig ud af denne gruppe. Du kan kun melde dig ud af åbne og frie åbne grupper.', 
	'CHANGED_DEFAULT_GROUP'	=> 'Det lykkedes at skifte standardgruppe.',
	
	'GROUP_AVATAR'						=> 'Gruppeavatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Er du sikker på at du vil vælge "%s" som din nye standardgruppe?',
	'GROUP_CLOSED'						=> 'Lukket',
	'GROUP_DESC'						=> 'Gruppebeskrivelse',
	'GROUP_HIDDEN'						=> 'Skjult',
	'GROUP_INFORMATION'					=> 'Information om brugergruppe',
	'GROUP_IS_CLOSED'					=> 'Gruppen er lukket; kun en gruppeleder kan tilslutte nye gruppemedlemmer, sædvanligvis baseret på invitation fra en gruppeleder og accept fra brugeren.',
	'GROUP_IS_FREE'						=> 'Gruppen er åben; alle tilmeldte brugere er velkomne.',
	'GROUP_IS_HIDDEN'					=> 'Gruppen er skjult; kun medlemmer af gruppen kan se dens egenskaber og sammensætning.',
	'GROUP_IS_OPEN'						=> 'Gruppen er åben; tilmeldte brugere kan søge om medlemskab hos en gruppeleder.',
	'GROUP_IS_SPECIAL'					=> 'Særlig gruppe styret af boardets administratorer.',
	'GROUP_JOIN'						=> 'Slut dig til gruppen',
	'GROUP_JOIN_CONFIRM'				=> 'Er du sikker på du vil tilslutte dig den valgte gruppe?',
	'GROUP_JOIN_PENDING'				=> 'Anmod om optagelse i gruppen',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Er du sikker på du vil anmode om optagelse i den valgte gruppe?',
	'GROUP_JOINED'						=> 'Tilslutning til den valgte gruppe lykkedes.',
	'GROUP_JOINED_PENDING'				=> 'Anmodning om optagelse i gruppen lykkedes. Afvent venligst gruppelederens godkendelse af medlemskabet.',
	'GROUP_LIST'						=> 'Administrer brugere',
	'GROUP_MEMBERS'						=> 'Gruppemedlemmer',
	'GROUP_NAME'						=> 'Gruppenavn',
	'GROUP_OPEN'						=> 'Åben',
	'GROUP_RANK'						=> 'Grupperang',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Opgiv medlemskab af gruppe',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Er du sikker på du vil opgive medlemskab af den valgte gruppe?',
	'GROUP_RESIGN_PENDING'				=> 'Opgiv afventende gruppemedlemskab',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Er du sikker på du vil opgive dit afventende medlemskab af den valgte gruppe?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Det lykkedes at fjerne dig fra den valgte gruppe.',
	'GROUP_RESIGNED_PENDING'			=> 'Det lykkedes at fjerne dit afventende medlemskab af den valgte gruppe.',
	'GROUP_TYPE'						=> 'Gruppetype',
	'GROUP_UNDISCLOSED'					=> 'Skjult gruppe',
	'FORUM_UNDISCLOSED'					=> 'Redigerer skjulte fora',

	'LOGIN_EXPLAIN_GROUP'	=> 'Du skal være logget ind for at se gruppeinformation.',

	'NO_LEADERS'					=> 'Du er ikke leder af nogen gruppe.',
	'NOT_LEADER_OF_GROUP'			=> 'Den anmodede handling kan ikke finde sted, da du ikke er leder af den valgte gruppe.',
	'NOT_MEMBER_OF_GROUP'			=> 'Den anmodede handling kan ikke finde sted, da du ikke er medlem af den valgte gruppe, eller fordi dit medlemskab af gruppen endnu ikke er godkendt.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Du kan ikke melde dig fra din standardgruppe.',

	'PRIMARY_GROUP'		=> 'Primærgruppe',

	'REMOVE_SELECTED'		=> 'Fjern det valgte',

	'USER_GROUP_CHANGE'			=> 'Fra "%1$s" gruppe til "%2$s"',
	'USER_GROUP_DEMOTE'			=> 'Degrader lederskab',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Er du sikker på du vil degraderes som gruppeleder af den valgte gruppe?',
	'USER_GROUP_DEMOTED'		=> 'Det lykkedes at degradere dit lederskab.',
));
