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
	'APPROVE'								=> 'Godkjenn',
	'ATTACHMENT'						=> 'Vedlegg',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Vedleggsfunksjonen er deaktivert.',

	'BOOKMARK_ADDED'		=> 'Emnet er bokmerket.',
	'BOOKMARK_ERR'			=> 'Bokmerking av emnet mislyktes. Prøv igjen.',
	'BOOKMARK_REMOVED'		=> 'Bokmerket emne fjernet.',
	'BOOKMARK_TOPIC'		=> 'Bokmerk emne',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjern fra bokmerker',
	'BUMPED_BY'				=> 'Sist fremhevet av %1$s den %2$s.',
	'BUMP_TOPIC'			=> 'Fremhev emne',

	'CODE'					=> 'Kode',

	'DELETE_TOPIC'			=> 'Slett emne',
	'DELETED_INFORMATION'	=> 'Slettet av %1$s den %2$s',
	'DISAPPROVE'					=> 'Avslå',
	'DOWNLOAD_NOTICE'		=> 'Du har ikke de nødvendige tillatelsene for å vise filene som er tilknyttet dette innlegget.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Sist redigert av %2$s den %3$s, redigert %1$d gang totalt.',
		2	=> 'Sist redigert av %2$s den %3$s, redigert %1$d ganger totalt.',
	),
	'EMAIL_TOPIC'			=> 'E-postemne',
	'ERROR_NO_ATTACHMENT'	=> 'Det valgte vedlegget finnes ikke lenger.',

	'FILE_NOT_FOUND_404'	=> 'Filen <strong>%s</strong> finnes ikke.',
	'FORK_TOPIC'			=> 'Kopier emne',
	'FULL_EDITOR'			=> 'Full redigering og forhåndsvisning',

	'LINKAGE_FORBIDDEN'		=> 'Du har ikke tillatelse til å vise, laste ned eller lenke fra/til dette systemet.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Du har blitt varslet om dette emnet, logg inn for å vise det.',
	'LOGIN_VIEWTOPIC'		=> 'Systemet krever at du er registrert og innlogget for å vise dette emnet.',

	'MAKE_ANNOUNCE'				=> 'Endre til «Kunngjøring»',
	'MAKE_GLOBAL'				=> 'Endre til «Global»',
	'MAKE_NORMAL'				=> 'Endre til «Standardemne»',
	'MAKE_STICKY'				=> 'Endre til «Festet»',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Du kan velge <strong>%d</strong> alternativ',
		2	=> 'Du kan velge opp til <strong>%d</strong> alternativer',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Vedlegget <strong>%s</strong> er ikke lenger tilgjengelig.',
	'MOVE_TOPIC'				=> 'Flytt emne',

	'NO_ATTACHMENT_SELECTED'=> 'Du har ikke valgt noen vedlegg å laste ned eller vise.',
	'NO_NEWER_TOPICS'		=> 'Det er ingen nyere emner i dette forumet.',
	'NO_OLDER_TOPICS'		=> 'Det er ingen eldre emner i dette forumet.',
	'NO_UNREAD_POSTS'		=> 'Det er ingen nye, uleste innlegg for dette emnet.',
	'NO_VOTE_OPTION'		=> 'Du må angi et alternativ når du stemmer.',
	'NO_VOTES'				=> 'Ingen stemmer',

	'POLL_ENDED_AT'			=> 'Avstemmingen ble avsluttet den %s',
	'POLL_RUN_TILL'			=> 'Avstemmingen avsluttes %s',
	'POLL_VOTED_OPTION'		=> 'Du stempte på dette alternativet',
	'POST_DELETED_RESTORE'	=> 'Dette innlegget er slettet. Det kan gjenopprettes.',
	'PRINT_TOPIC'			=> 'Utskriftsvisning',

	'QUICK_MOD'				=> 'Hurtigmodereringsverktøy',
	'QUICKREPLY'			=> 'Hurtigsvar',
	'QUOTE'					=> 'Siter',

	'REPLY_TO_TOPIC'		=> 'Svar på emne',
	'RESTORE'				=> 'Gjenopprett',
	'RESTORE_TOPIC'			=> 'Gjenopprett emne',
	'RETURN_POST'			=> '%sTilbake til innleggene%s',

	'SUBMIT_VOTE'			=> 'Send inn stemme',

	'TOPIC_TOOLS'			=> 'Emneverktøy',
	'TOTAL_VOTES'			=> 'Stemmer totalt',

	'UNLOCK_TOPIC'			=> 'Lås opp emne',

	'VIEW_INFO'				=> 'Innleggsdetaljer',
	'VIEW_NEXT_TOPIC'		=> 'Neste emne',
	'VIEW_PREVIOUS_TOPIC'	=> 'Forrige emne',
	'VIEW_RESULTS'			=> 'Vis resultater',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d innlegg',
		2	=> '%d innlegg',
	),
	'VIEW_UNREAD_POST'		=> 'Første uleste innlegg',
	'VOTE_SUBMITTED'		=> 'Stemmen din er avgitt.',
	'VOTE_CONVERTED'		=> 'Endring av stemmer støttes ikke for konverterte avstemminger.',

));
