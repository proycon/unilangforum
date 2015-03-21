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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Deze sectie staat je toe om gebruikers te deactiveren of te verwijderen op je forum. Accounts kunnen gefilterd worden op verschillende manieren; op berichtenaantal, meest recente activiteit, etc. Criteria kunnen gecombineerd worden om het aantal accounts te verkleinen die hierdoor worden geraakt. Bijvoorbeeld, je kan gebruikers opschonen met minder dan 10 berichten, die ook nog inactief zijn na 2002-01-01. Gebruik * als een joker voor tekstvelden. Je kan echter ook de criteriaselectie compleet overslaan door een lijst van gebruikers in te voeren (elk op een aparte regel) in het tekstveld. Wees voorzichtig met deze mogelijkheden! Wanneer een gebruiker is verwijderd, is er geen manier om dit ongedaan te maken.',

	'CRITERIA'				=> 'Criteria',

	'DEACTIVATE_DELETE'			=> 'Deactiveren of verwijderen',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Kies of je gebruikers wilt deactiveren of compleet wilt verwijderen. Let op dat verwijderde gebruikers niet teruggehaald kunnen worden!',
	'DELETE_USERS'				=> 'Verwijder',
	'DELETE_USER_POSTS'			=> 'Verwijder berichten van opgeschoonde gebruikers',
	'DELETE_USER_POSTS_EXPLAIN' => 'Verwijdert berichten gemaakt door verwijderde gebruikers, heeft geen effect als gebruikers zijn gedeactiveerd.',

	'JOINED_EXPLAIN'			=> 'Voer een datum in in het volgende formaat <kbd>JJJJ-MM-DD</kbd>. Je kan beide velden gebruiken om een interval te specificeren, of er één leeg laten voor een open datumbereik.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Voer een datum in, in het volgende formaat <kbd>JJJJ-MM-DD</kbd>. Vul <kbd>0000-00-00</kbd> in om gebruikers die nooit zijn aangemeld op te schonen, <em>Voor</em> en <em>Na</em> condities zullen genegeerd worden.',

	'POSTS_ON_QUEUE'			=> 'Berichten wachtend op goedkeuring',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Limiteer naar gebruikers in de geselecteerde groep.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Alle groepen',
	'PRUNE_USERS_LIST'				=> 'Gebruikers om te worden opgeschoond',
	'PRUNE_USERS_LIST_DELETE'		=> 'Met de geselecteerde criteria voor het opschonen van gebruikers, zullen de volgende accounts verwijderd worden. Je kan individuele gebruikers van de opschoonlijst verwijderen door het vakje naast hun gebruikersnaam uit te zetten.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Met de geselecteerde criteria voor het opschonen van gebruikers, zullen de volgende accounts gedeactiveerd worden. Je kan individuele gebruikers van de deactivatielijst verwijderen door het vakje naast hun gebruikersnaam uit te zetten.',

	'SELECT_USERS_EXPLAIN'		=> 'Voer hier specifieke gebruikersnamen in. Ze zullen gebruikt worden in plaats van de bovenstaande criteria. Oprichters kunnen niet opgeschoond worden.',

	'USER_DEACTIVATE_SUCCESS'	=> 'De geselecteerde gebruikers zijn succesvol gedeactiveerd.',
	'USER_DELETE_SUCCESS'		=> 'De geselecteerde gebruikers zijn succesvol verwijderd.',
	'USER_PRUNE_FAILURE'		=> 'Geen gebruikers vallen onder de geselecteerde criteria.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'De ingevoerde datum is verkeerd, het gebruikte formaat moet <kbd>JJJJ-MM-DD</kbd> zijn.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Dit zal elk onderwerp, waarin geen berichten zijn geplaatst of bekeken is in het aantal dagen dat je selecteert, opschonen. Als je geen cijfer invult dan zullen alle onderwerpen verwijderd worden. Standaard zal het geen onderwerpen verwijderen waarin nog open peilingen zijn en zal het geen stickies en mededelingen verwijderen.',

	'FORUM_PRUNE'		=> 'Forum opschonen',

	'NO_PRUNE'			=> 'Geen forums opgeschoond.',

	'SELECTED_FORUM'	=> 'Geselecteerde forum',
	'SELECTED_FORUMS'	=> 'Geselecteerde forums',

	'POSTS_PRUNED'					=> 'Berichten opgeschoond',
	'PRUNE_ANNOUNCEMENTS'			=> 'Mededelingen opschonen',
	'PRUNE_FINISHED_POLLS'			=> 'Gesloten peilingen opschonen',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Verwijderd onderwerpen met peilingen die beëindigd zijn.',
	'PRUNE_FORUM_CONFIRM'			=> 'Weet je zeker dat je de geselecteerde forums wilt opschonen met de gespecificeerde instellingen? Wanneer het opgeschoond is, kunnen de opgeschoonde berichten en onderwerpen niet meer teruggehaald worden.',
	'PRUNE_NOT_POSTED'				=> 'Dagen sinds laatst bericht',
	'PRUNE_NOT_VIEWED'				=> 'Dagen sinds laatst bekeken',
	'PRUNE_OLD_POLLS'				=> 'Oude peilingen opschonen',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Verwijderd onderwerpen met peilingen waarin niet ingestemd is voor x aantal dagen.',
	'PRUNE_STICKY'					=> 'Stickies opschonen',
	'PRUNE_SUCCESS'					=> 'Opschonen van forums was succesvol.',

	'TOPICS_PRUNED'		=> 'Onderwerpen opgeschoond',
));
