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
	'APPROVE'								=> 'Godkänn',
	'ATTACHMENT'						=> 'Bilaga',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Bilagefunktionen har inaktiverats.',
	'BOOKMARK_ADDED'		=> 'Tråden lades till som bokmärke.',
	'BOOKMARK_ERR'					=> 'Bokmärkningen av tråden misslyckades. Var god, försök igen', 
	'BOOKMARK_REMOVED'		=> 'Tråden togs bort från bokmärkena.',
	'BOOKMARK_TOPIC'		=> 'Lägg till som bokmärke',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Ta bort från bokmärken',
	'BUMPED_BY'				=> 'Senast uppknuffad av %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Knuffa upp tråden',
	'CODE'					=> 'Kod',

	'DELETE_TOPIC'			=> 'Ta bort tråden',
	'DELETED_INFORMATION'	=> 'Borttagen utav %1$s den %2$s',
	'DISAPPROVE'					=> 'Underkänn',
	'DOWNLOAD_NOTICE'		=> 'Du har inte behörighet att öppna de filer som bifogats till detta inlägg.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Senast redigerad av %1$s %2$s, redigerad totalt %3$d gånger.',
		2	=> 'Senast redigerad av %1$s %2$s, redigerad totalt %3$d gång.',
	),
	'EMAIL_TOPIC'			=> 'Skicka tråd via e-post',
	'ERROR_NO_ATTACHMENT'	=> 'Den valda bilagan finns inte längre.',

	'FILE_NOT_FOUND_404'	=> 'Filen <strong>%s</strong> finns inte.',
	'FORK_TOPIC'			=> 'Kopiera tråden',
	'FULL_EDITOR'			=> 'Fullständig redigerare',

	'LINKAGE_FORBIDDEN'		=> 'Du har inte tillåtelse att öppna, ladda ner eller länka från/till denna sida.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Du har underrättats om denna tråd, logga in för att visa den.',
	'LOGIN_VIEWTOPIC'		=> 'Forumet kräver att du registrerar dig och loggar in för att visa denna tråd.',

	'MAKE_ANNOUNCE'				=> 'Gör till “anslag”',
	'MAKE_GLOBAL'				=> 'Gör till “globalt anslag”',
	'MAKE_NORMAL'				=> 'Gör till “normal tråd”',
	'MAKE_STICKY'				=> 'Gör till “notis”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Du kan välja upp till <strong>%d</strong> alternativ',
		2	=> 'Du kan välja <strong>1</strong> alternativ',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Bilagan <strong>%s</strong> finns inte längre',
	'MOVE_TOPIC'				=> 'Flytta tråd',

	'NO_ATTACHMENT_SELECTED'=> 'Du valde inga bilagor att ladda ner eller öppna.',
	'NO_NEWER_TOPICS'		=> 'Det finns inga nyare trådar i denna kategori.',
	'NO_OLDER_TOPICS'		=> 'Det finns inga äldre trådar i denna kategori.',
	'NO_UNREAD_POSTS'		=> 'Det finns inga nya olästa inlägg i denna tråd.',
	'NO_VOTE_OPTION'		=> 'Du måste välja ett alternativ för att rösta.',
	'NO_VOTES'				=> 'Inga röster',

	'POLL_ENDED_AT'			=> 'Omröstningen slutade %s',
	'POLL_RUN_TILL'			=> 'Omröstningen varar till %s',
	'POLL_VOTED_OPTION'		=> 'Du röstade för detta alternativ',
	'POST_DELETED_RESTORE'	=> 'Detta inlägg har blivit borttaget. Det kan inte återställas.',
	'PRINT_TOPIC'			=> 'Utskriftsvänlig version',

	'QUICK_MOD'				=> 'Snabb-moderationsverktyg',
	'QUICKREPLY'			=> 'Snabbsvar',
	'QUOTE'					=> 'Citat',
	
	'REPLY_TO_TOPIC'		=> 'Svara på tråd',
	'RESTORE'				=> 'Återställ',
	'RESTORE_TOPIC'			=> 'Återställ tråd',
	'RETURN_POST'			=> '%sGå till inlägget%s',

	'SUBMIT_VOTE'			=> 'Rösta',

	'TOPIC_TOOLS'			=> 'Trådverktyg',
	'TOTAL_VOTES'			=> 'Antal röster',

	'UNLOCK_TOPIC'			=> 'Lås upp tråden',
	
	'VIEW_INFO'				=> 'Inläggsuppgifter',
	'VIEW_NEXT_TOPIC'		=> 'Nästa tråd',
	'VIEW_PREVIOUS_TOPIC'	=> 'Föregående tråd',
	'VIEW_RESULTS'			=> 'Visa resultat',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d inlägg',
		2	=> '%d inlägg',
	),
	'VIEW_UNREAD_POST'		=> 'Första olästa inlägg',
	'VOTE_SUBMITTED'		=> 'Din röst räknades.',
	'VOTE_CONVERTED'		=> 'Ändrng av röst stöds inte för konverterade omröstningar.',

));
