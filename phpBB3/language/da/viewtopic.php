<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: viewtopic.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'APPROVE'		=> 'Godkend',
	'ATTACHMENT'						=> 'Vedhæftet fil',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Vedhæftning af filer er slået fra.',

	'BOOKMARK_ADDED'		=> 'Bogmærke for emnet er tilføjet.',
	'BOOKMARK_ERR'			=> 'Det lykkedes ikke at bogmærke emnet. Forsøg venligst igen.',
	'BOOKMARK_REMOVED'		=> 'Bogmærke for emnet er fjernet.',
	'BOOKMARK_TOPIC'		=> 'Bogmærk emne',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Fjern fra bogmærker',
	'BUMPED_BY'				=> 'Senest placeret øverst af %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Placer emne øverst',

	'CODE'					=> 'Kode',

	'DELETE_TOPIC'			=> 'Slet emne',
	'DELETED_INFORMATION'  => 'Slettet af %1$s d. %2$s',
	'DISAPPROVE'			=> 'Afvis',
	'DOWNLOAD_NOTICE'		=> 'Du har ikke de nødvendige tilladelser til at se vedhæftede filer i dette indlæg.',

	'EDITED_TIMES_TOTAL' => array(
		1	=> 'Senest rettet af %2$s %3$s, rettet i alt %1$d gang.',
		2	=> 'Senest rettet af %2$s %3$s, rettet i alt %1$d gange.',
	),
	'EMAIL_TOPIC'			=> 'Email emne',
	'ERROR_NO_ATTACHMENT'	=> 'Den valgte vedhæftede fil eksisterer ikke længere.',

	'FILE_NOT_FOUND_404'	=> 'Filen <strong>%s</strong> eksisterer ikke.',
	'FORK_TOPIC'			=> 'Kopier emne',

	'FULL_EDITOR'			=> 'Komplet skrivefelt &amp; vis prøve',

	'LINKAGE_FORBIDDEN'		=> 'Du har ikke tilladelse til at se, downloade fra, eller linke til/fra denne side.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Du er blevet informeret om dette emne, log venligst ind for at se det.',
	'LOGIN_VIEWTOPIC'		=> 'Boardadministratoren kræver at du er tilmeldt og logget ind for at se dette emne.',

	'MAKE_ANNOUNCE'				=> 'Ændre til "Bekendtgørelse"',
	'MAKE_GLOBAL'				=> 'Ændre til "Global bekendtgørelse"',
	'MAKE_NORMAL'				=> 'Ændre til "Standardemne"',
	'MAKE_STICKY'				=> 'Ændre til "Opslag"',
	'MAX_OPTIONS_SELECT' => array(
		1	=> 'Du kan vælge <strong>%d</strong> mulighed',
		2	=> 'Du kan vælge op til <strong>%d</strong> muligheder',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Den vedhæftede fil <strong>%s</strong> er ikke længere tilgængelig',
	'MOVE_TOPIC'				=> 'Flyt emne',

	'NO_ATTACHMENT_SELECTED'=> 'Du har ikke valgt en vedhæftet fil at downloade eller se.',
	'NO_NEWER_TOPICS'		=> 'Der er ingen nyere emner i dette forum.',
	'NO_OLDER_TOPICS'		=> 'Der er ingen ældre emner i dette forum.',
	'NO_UNREAD_POSTS'		=> 'Der er ingen nye ulæste indlæg i dette emne.',
	'NO_VOTE_OPTION'		=> 'Du skal vælge en afstemningsmulighed når du stemmer.',
	'NO_VOTES'				=> 'Ingen stemmer',

	'POLL_ENDED_AT'			=> 'Afstemning sluttede %s',
	'POLL_RUN_TILL'			=> 'Afstemningen varer indtil %s',
	'POLL_VOTED_OPTION'		=> 'Du stemte på denne afstemningsmulighed',
	'POST_DELETED_RESTORE'  => 'Indlægget er skjult og kan gendannes.',
	'PRINT_TOPIC'			=> 'Udskriv emne',

	'QUICK_MOD'				=> 'Redigeringsværktøjer',
	'QUICKREPLY'				=> 'Skriv en kommentar',
	'QUOTE'					=> 'Citat',

	'REPLY_TO_TOPIC'		=> 'Svar på emne',
	'RESTORE'        => 'Gendan',
	'RESTORE_TOPIC'      => 'Gendan emne', 
	'RETURN_POST'			=> '%sTilbage til indlægget%s',

	'SUBMIT_VOTE'			=> 'Stem',

	'TOPIC_TOOLS'			=> 'Emneværktøjer',
	'TOTAL_VOTES'			=> 'Afgivne stemmer',

	'UNLOCK_TOPIC'			=> 'Lås emne op',

	'VIEW_INFO'				=> 'Indlægsinformation',
	'VIEW_NEXT_TOPIC'		=> 'Næste emne',
	'VIEW_PREVIOUS_TOPIC'	=> 'Forrige emne',
	'VIEW_RESULTS'			=> 'Vis resultater',
	'VIEW_TOPIC_POSTS' => array(
		1	=> '%d indlæg',
		2	=> '%d indlæg',
	),
	'VIEW_UNREAD_POST'		=> 'Første ulæste indlæg',
	'VOTE_SUBMITTED'		=> 'Din stemme er nu registreret.',
	'VOTE_CONVERTED'		=> 'Ændring af afgivne stemmer er ikke understøttet for konverterede afstemninger.',

));
