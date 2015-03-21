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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Denne delen lar deg slette eller deaktivere brukere på systemet. Kontoer kan filtreres på mange måter: Etter innleggsantall, nylig aktivitet osv. Kriteriene kan kombineres for å spesifisere nøyere hvilke kontoer som påvirkes. Du kan for eksempel slette brukere med færre enn 10 innlegg, som også har vært inaktive siden 01.01.2002. Bruk * som jokertegn i tekstfelt. Alternativt kan du hoppe helt over kriterieutvalget ved å angi en liste over brukere (en på hver sin linje) i tekstfeltet. Bruk denne muligheten med varsomhet! Når en bruker er slettet, er det ikke mulig å gjøre om handlingen.',

	'CRITERIA'				=> 'Kriterier',

	'DEACTIVATE_DELETE'			=> 'Deaktiver eller slett',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Velg om du vil deaktivere brukere eller slette dem helt. Merk at slettede brukere ikke kan gjenopprettes!',
	'DELETE_USERS'				=> 'Slett',
	'DELETE_USER_POSTS'			=> 'Slett fjernede brukerinnlegg',
	'DELETE_USER_POSTS_EXPLAIN' => 'Fjerner innlegg fra slettede brukere. Har ingen effekt hvis brukerne er deaktivert.',

	'JOINED_EXPLAIN'			=> 'Skriv inn en dato på formatet <kbd>ÅÅÅÅ-MM-DD</kbd>. Du kan bruke begge felt til å angi et intervall, eller du kan la ett av dem stå tomme for et åpent datointervall.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Skriv inn en dato på formatet <kbd>ÅÅÅÅ-MM-DD</kbd>. Skriv inn <kbd>0000-00-00</kbd> for å slette brukere som aldri har logget inn, <em>Før</em>- og <em>Etter</em>-betingelsene vil bli ignorert.',

	'POSTS_ON_QUEUE'			=> 'Innlegg som venter på godkjenning',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Begrens til brukere i valgte gruppe.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Alle grupper',
	'PRUNE_USERS_LIST'				=> 'Brukere som skal slettes',
	'PRUNE_USERS_LIST_DELETE'		=> 'Med de valgte kriteriene for sletting av brukere, vil følgende kontoer bli fjernet. Du kan fjerne enkeltbrukere fra slettingslisten ved å fjerne haken ved siden av brukernavnene.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Med de valgte kriteriene for sletting av brukere, vil følgende kontoer bli deaktivert. Du kan fjerne enkeltbrukere fra slettingslisten ved å fjerne haken ved siden av brukernavnene.',

	'SELECT_USERS_EXPLAIN'		=> 'Angi spesifikke brukernavn her. De brukes i stedet for kriteriene ovenfor. Grunnleggere kan ikke slettes.',

	'USER_DEACTIVATE_SUCCESS'	=> 'De valgte brukerne er deaktivert.',
	'USER_DELETE_SUCCESS'		=> 'De valgte brukerne er slettet.',
	'USER_PRUNE_FAILURE'		=> 'Ingen brukere samsvarer med de valgte kriteriene.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Den angitte datoen er feil, den forventes på formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Dette vil slette alle emner som det ikke er skrevet innlegg i eller vist i løpet av det antallet dager du angi. Hvis du ikke angir noe tall, vil alle emner bli slettet. Som standard fjernes ikke emner med avstemminger som fortsatt går, ei heller festede emner og kunngjøringer.',

	'FORUM_PRUNE'		=> 'Forumopprydding',

	'NO_PRUNE'			=> 'Ingen fora ryddet.',

	'SELECTED_FORUM'	=> 'Valgt forum',
	'SELECTED_FORUMS'	=> 'Valgte fora',

	'POSTS_PRUNED'					=> 'Innlegg slettet',
	'PRUNE_ANNOUNCEMENTS'			=> 'Slett kunngjøringer',
	'PRUNE_FINISHED_POLLS'			=> 'Slett avsluttede avstemminger',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Fjerner emner hvor avstemminger er avsluttet.',
	'PRUNE_FORUM_CONFIRM'			=> 'Er du sikker på at du vil rydde opp i de valgte foraene med de angitte innstillingene? Når de først er fjernet, kan innlegg og emner ikke gjenopprettes.',
	'PRUNE_NOT_POSTED'				=> 'Dager siden forrige innlegg',
	'PRUNE_NOT_VIEWED'				=> 'Dager siden forrige visning',
	'PRUNE_OLD_POLLS'				=> 'Slett gamle avstemminger',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Fjerner emner med avstemminger som ikke har mottatt stemmer siden forrige innlegg.',
	'PRUNE_STICKY'					=> 'Slett festede emner',
	'PRUNE_SUCCESS'					=> 'Foraene er ryddet opp i.',

	'TOPICS_PRUNED'		=> 'Emner slettet',
));
