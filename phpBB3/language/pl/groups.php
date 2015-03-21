<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
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
	'ALREADY_DEFAULT_GROUP'		=> 'Wybrana grupa jest już twoją domyślną grupą.',
	'ALREADY_IN_GROUP'			=> 'Jesteś już członkiem wybranej grupy.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Prośba o przyłączenie do wybranej grupy była już wysyłana.',

	'CANNOT_JOIN_GROUP'			=> 'Nie możesz przyłączyć się do tej grupy. Możesz przyłączyć się tylko do grup otwartych i ogólnodostępnych.',
	'CANNOT_RESIGN_GROUP'		=> 'Nie możesz opuścić tej grupy. Możesz opuszczać tylko grupy otwarte i ogólnodostępne.',
	'CHANGED_DEFAULT_GROUP'		=> 'Zmieniono domyślną grupę.',

	'GROUP_AVATAR'						=> 'Awatar grupy',
	'GROUP_CHANGE_DEFAULT'				=> 'Czy na pewno chcesz zmienić domyślną grupę na „%s”?',
	'GROUP_CLOSED'						=> 'Zamknięta',
	'GROUP_DESC'						=> 'Opis grupy',
	'GROUP_HIDDEN'						=> 'Ukryta',
	'GROUP_INFORMATION'					=> 'Informacje o grupie',
	'GROUP_IS_CLOSED'					=> 'To jest grupa zamknięta. Nowi użytkownicy mogą do niej przyłączyć się tylko na zaproszenie lidera grupy.',
	'GROUP_IS_FREE'						=> 'To jest grupa ogólnodostępna, każdy może się do niej przyłączyć.',
	'GROUP_IS_HIDDEN'					=> 'To jest grupa ukryta, tylko jej członkowie mogą przeglądać jej skład.',
	'GROUP_IS_OPEN'						=> 'To jest grupa otwarta. Możesz zgłosić chęć przyłączenia się do niej.',
	'GROUP_IS_SPECIAL'					=> 'To jest grupa specjalna. Grupy specjalne są zarządzane przez administratorów witryny.',
	'GROUP_JOIN'						=> 'Przyłącz się do grupy',
	'GROUP_JOIN_CONFIRM'				=> 'Czy na pewno chcesz przyłączyć się do wybranej grupy?',
	'GROUP_JOIN_PENDING'				=> 'Prośba o przyjęcie do grupy',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Czy na pewno chcesz przyłączyć się do wybranej grupy?',
	'GROUP_JOINED'						=> 'Przyłączyłeś/przyłączyłaś się do wybranej grupy.',
	'GROUP_JOINED_PENDING'				=> 'Prośba o przyjęcie do wybranej grupy została przekazana do lidera grupy. Poczekaj na jego decyzję.',
	'GROUP_LIST'						=> 'Zarządzaj członkami',
	'GROUP_MEMBERS'						=> 'Członkowie',
	'GROUP_NAME'						=> 'Nazwa',
	'GROUP_OPEN'						=> 'Otwarta',
	'GROUP_RANK'						=> 'Ranga',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Rezygnacja z członkostwa',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Czy na pewno chcesz zrezygnować z członkostwa w wybranej grupie?',
	'GROUP_RESIGN_PENDING'				=> 'Wycofaj prośbę o przyjęcie',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Czy na pewno chcesz wycofać prośbę o przyjęcie do wybranej grupy?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Usunięto cię z wybranej grupy.',
	'GROUP_RESIGNED_PENDING'			=> 'Twoja prośba o przyjęcie do grupy została wycofana.',
	'GROUP_TYPE'						=> 'Typ',
	'GROUP_UNDISCLOSED'					=> 'Ukryta',
	'FORUM_UNDISCLOSED'					=> 'Moderuje ukryte fora',

	'LOGIN_EXPLAIN_GROUP'	=> 'Musisz się zalogować, aby zobaczyć informacje o grupie.',

	'NO_LEADERS'					=> 'Nie jesteś liderem żadnej grupy.',
	'NOT_LEADER_OF_GROUP'			=> 'Nie można wykonać żądanej operacji, ponieważ nie jesteś liderem wybranej grupy.',
	'NOT_MEMBER_OF_GROUP'			=> 'Nie można wykonać żądanej operacji, ponieważ nie jesteś członkiem grupy lub twoje członkostwo nie zostało jeszcze zaakceptowane.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nie możesz zrezygnować z członkostwa w swojej domyślnej grupie.',
	
	'PRIMARY_GROUP'		=> 'Podstawowa grupa',

	'REMOVE_SELECTED'		=> 'Usuń zaznaczone',

	'USER_GROUP_CHANGE'			=> 'Z grupy „%1$s” do grupy „%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Rezygnacja z liderowania',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Czy na pewno chcesz zrezygnować z liderowania wybranej grupie?',
	'USER_GROUP_DEMOTED'		=> 'Twoja rezygnacja została przyjęta.',
));
