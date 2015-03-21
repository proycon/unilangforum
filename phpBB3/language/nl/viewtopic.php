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
	'APPROVE'							=> 'Goedkeuren',
	'ATTACHMENT'						=> 'Bijlage',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'De bijlagefunctie is uitgeschakeld.',

	'BOOKMARK_ADDED'		=> 'Onderwerp succesvol als bladwijzer gemaakt.',
	'BOOKMARK_ERR'			=> 'Onderwerp als bladwijzer maken mislukt. Probeer nogmaals.',
	'BOOKMARK_REMOVED'		=> 'De bladwijzer van dit onderwerp is succesvol verwijderd.',
	'BOOKMARK_TOPIC'		=> 'Onderwerp bladwijzeren',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Verwijder bladwijzer',
	'BUMPED_BY'				=> 'Laatst omhoog gehaald door %1$s op %2$s.',
	'BUMP_TOPIC'			=> 'Onderwerp omhoog halen',

	'CODE'					=> 'Code',

	'DELETE_TOPIC'			=> 'Onderwerp verwijderen',
	'DELETED_INFORMATION'	=> 'Verwijderd door %1$s op %2$s',
	'DISAPPROVE'			=> 'Afkeuren',
	'DOWNLOAD_NOTICE'		=> 'Je hebt niet voldoende permissies om de bijlagen te bekijken van dit bericht.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Laatst gewijzigd door %2$s op %3$s, %1$d keer totaal gewijzigd.',
		2	=> 'Laatst gewijzigd door %2$s op %3$s, %1$d keer totaal gewijzigd.',
	),
	'EMAIL_TOPIC'			=> 'E-mail onderwerp',
	'ERROR_NO_ATTACHMENT'	=> 'De geselecteerde bijlage bestaat niet meer.',

	'FILE_NOT_FOUND_404'	=> 'Het bestand <strong>%s</strong> kon niet worden gevonden.',
	'FORK_TOPIC'			=> 'Onderwerp kopiëren',
	'FULL_EDITOR'			=> 'Volledige bewerker &amp; Voorbeeld',

	'LINKAGE_FORBIDDEN'		=> 'Je hebt niet voldoende rechten om van of naar deze site te linken, downloaden of te kunnen bekijken.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Je bent op de hoogte gebracht van dit onderwerp, meld je aan om het te bekijken.',
	'LOGIN_VIEWTOPIC'		=> 'De site heeft besloten je dat je aangemeld en geregistreerd bent om dit onderwerp te kunnen bekijken.',

	'MAKE_ANNOUNCE'				=> 'Verander naar “Aankondiging”',
	'MAKE_GLOBAL'				=> 'Verander naar “Algemeen”',
	'MAKE_NORMAL'				=> 'Verander naar “standaard onderwerp”',
	'MAKE_STICKY'				=> 'Verander naar “Sticky”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Je mag <strong>%d</strong> optie selecteren',
		2	=> 'Je mag tot <strong>%d</strong> opties selecteren',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'De bijlage <strong>%s</strong> is niet meer beschikbaar',
	'MOVE_TOPIC'				=> 'Onderwerp verplaatsen',

	'NO_ATTACHMENT_SELECTED'=> 'Je hebt geen bijlage geselecteerd om te bekijken of om te downloaden.',
	'NO_NEWER_TOPICS'		=> 'Er zijn geen nieuwere onderwerpen in dit forum.',
	'NO_OLDER_TOPICS'		=> 'Er zijn geen oudere onderwerpen in dit forum.',
	'NO_UNREAD_POSTS'		=> 'Er zijn geen nieuwe ongelezen berichten voor dit onderwerp.',
	'NO_VOTE_OPTION'		=> 'Je moet een optie specificeren tijdens het stemmen.',
	'NO_VOTES'				=> 'Geen stemmen',

	'POLL_ENDED_AT'			=> 'Peiling eindigde op %s',
	'POLL_RUN_TILL'			=> 'Peiling loopt tot %s',
	'POLL_VOTED_OPTION'		=> 'Je hebt gestemd voor deze optie',
	'POST_DELETED_RESTORE'	=> 'Dit bericht is verwijderd. Het kan teruggebracht worden.',
	'PRINT_TOPIC'			=> 'Afdrukweergave',

	'QUICK_MOD'				=> 'Snelle moderatiehulpmiddelen',
	'QUICKREPLY'			=> 'Snelle reactie',
	'QUOTE'					=> 'Citeer',

	'REPLY_TO_TOPIC'		=> 'Reageer op onderwerp',
	'RESTORE'				=> 'Terugbrengen',
	'RESTORE_TOPIC'			=> 'Onderwerp terugbrengen',
	'RETURN_POST'			=> '%sGa terug naar bericht%s',

	'SUBMIT_VOTE'			=> 'Verstuur stem',

	'TOPIC_TOOLS'			=> 'Onderwerp gereedschap',
	'TOTAL_VOTES'			=> 'Totaal aantal stemmen',

	'UNLOCK_TOPIC'			=> 'Onderwerp openen',

	'VIEW_INFO'				=> 'Bericht details',
	'VIEW_NEXT_TOPIC'		=> 'Volgend onderwerp',
	'VIEW_PREVIOUS_TOPIC'	=> 'Vorig onderwerp',
	'VIEW_RESULTS'			=> 'Bekijk resultaten',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d bericht',
		2	=> '%d berichten',
	),
	'VIEW_UNREAD_POST'		=> 'Eerst ongelezen bericht',
	'VOTE_SUBMITTED'		=> 'Je stem is verwerkt.',
	'VOTE_CONVERTED'		=> 'Veranderen van stemmen wordt niet ondersteund voor geconverteerde peilingen.',

));
