<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
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
	'ALREADY_DEFAULT_GROUP'		=> 'Den valgte gruppen er allerede standardgruppen din.',
	'ALREADY_IN_GROUP'			=> 'Du er allerede medlem av den valgte gruppen.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Du har allerede bedt om å bli med i den valgte gruppen.',

	'CANNOT_JOIN_GROUP'			=> 'Du kan ikke bli med i denne gruppen. Du kan bare bli med i åpne og fritt åpne grupper.',
	'CANNOT_RESIGN_GROUP'		=> 'Du kan ikke forlate denne gruppen. Du kan bare forlate åpne og fritt åpne grupper.',
	'CHANGED_DEFAULT_GROUP'		=> 'Standardgruppe endret.',

	'GROUP_AVATAR'						=> 'Gruppeavatar',
	'GROUP_CHANGE_DEFAULT'				=> 'Er du sikker på at du vil endre standardmedlemskap til gruppen «%s»?',
	'GROUP_CLOSED'						=> 'Lukket',
	'GROUP_DESC'						=> 'Gruppebeskrivelse',
	'GROUP_HIDDEN'						=> 'Skjult',
	'GROUP_INFORMATION'					=> 'Brukergruppeinformasjon',
	'GROUP_IS_CLOSED'					=> 'Dette er en lukket gruppe, nye medlemmer kan bare bli med etter invitasjon fra en gruppeleder.',
	'GROUP_IS_FREE'						=> 'Dette er en fritt åpen gruppe, alle nye medlemmer er velkomne.',
	'GROUP_IS_HIDDEN'					=> 'Dette er en skjult gruppe, bare medlemmer av denne gruppen kan se hvem som er medlem.',
	'GROUP_IS_OPEN'						=> 'Dette er en åpen gruppe, brukere kan be om å få bli med.',
	'GROUP_IS_SPECIAL'					=> 'Dette er en spesialgruppe, som administreres av systemadministratorene.',
	'GROUP_JOIN'						=> 'Bli med i gruppe',
	'GROUP_JOIN_CONFIRM'				=> 'Er du sikker på at du vil bli med i den valgte gruppen?',
	'GROUP_JOIN_PENDING'				=> 'Be om å bli med i gruppen',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Er du sikker på at du vil be om å bli med i den valgte gruppen?',
	'GROUP_JOINED'						=> 'Du er nå med i den valgte gruppen.',
	'GROUP_JOINED_PENDING'				=> 'Du har nå bedt om å få bli med i gruppen. Vent til en gruppeleder godkjenner deg som gruppemedlem.',
	'GROUP_LIST'						=> 'Administrer brukere',
	'GROUP_MEMBERS'						=> 'Gruppemedlemmer',
	'GROUP_NAME'						=> 'Gruppenavn',
	'GROUP_OPEN'						=> 'Åpen',
	'GROUP_RANK'						=> 'Gruppegrad',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Forlat gruppen',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Er du sikker på at du vil forlate den valgte gruppen?',
	'GROUP_RESIGN_PENDING'				=> 'Annuller et ventende gruppemedlemskap',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Er du sikker på at du vil annullere det ventende medlemskapet i valgte gruppe?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Du er fjernet fra den valgte gruppen.',
	'GROUP_RESIGNED_PENDING'			=> 'Det ventende medlemskapet er fjernet fra den valgte gruppen.',
	'GROUP_TYPE'						=> 'Gruppetype',
	'GROUP_UNDISCLOSED'					=> 'Skjult gruppe',
	'FORUM_UNDISCLOSED'					=> 'Modererer skjulte fora',

	'LOGIN_EXPLAIN_GROUP'	=> 'Du må logge inn for å vise gruppedetaljer.',

	'NO_LEADERS'					=> 'Du er ikke leder i noen gruppe.',
	'NOT_LEADER_OF_GROUP'			=> 'Operasjonen kan ikke utføres fordi du ikke er gruppeleder i den valgte gruppen.',
	'NOT_MEMBER_OF_GROUP'			=> 'Operasjonen kan ikke utføres fordi du ikke er medlem i den valgte gruppen, eller så er du ikke godkjent som medlem ennå.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Du kan ikke forlate standardgruppen din.',

	'PRIMARY_GROUP'		=> 'Primærgruppe',

	'REMOVE_SELECTED'		=> 'Fjern valgte',

	'USER_GROUP_CHANGE'			=> 'Fra gruppen «%1$s» til «%2$s»',
	'USER_GROUP_DEMOTE'			=> 'Degrader lederskap',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Er du sikker på at du vil degraderes fra gruppeleder i valgte gruppe?',
	'USER_GROUP_DEMOTED'		=> 'Du er nå degradert fra gruppeleder.',
));
