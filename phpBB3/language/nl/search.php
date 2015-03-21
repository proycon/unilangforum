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
	'ALL_AVAILABLE'			=> 'Alle beschikbare',
	'ALL_RESULTS'			=> 'Alle resultaten',

	'DISPLAY_RESULTS'		=> 'Resultaten weergeven als',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Er is %d resultaat gevonden',
		2	=> 'Er zijn %d resultaten gevonden',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Er is meer dan %d resultaat gevonden',
		2	=> 'Er zijn meer dan %d resultaten gevonden',
	),

	'GLOBAL'				=> 'Algemene aankondiging',

	'IGNORED_TERMS'			=> 'genegeerd',
	'IGNORED_TERMS_EXPLAIN'	=> 'De volgende woorden in je zoekopdracht zijn genegeerd omdat ze te vaak voorkomen: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Spring naar bericht',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Het forum vereist dat je geregistreerd en aangemeld bent om je eigen berichten te bekijken.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Het forum vereist dat je geregistreerd en aangemeld bent om je ongelezen berichten te bekijken.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Het forum vereist dat je geregistreerd en aangemeld bent om nieuwe berichten sinds je laatste bezoek te bekijken.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Je hebt te veel woorden opgegeven voor de zoekopdracht. Vul niet meer dan %1$d woord in.',
		2	=> 'Je hebt te veel woorden opgegeven voor de zoekopdracht. Vul niet meer dan %1$d woorden in.',
	),

	'NO_KEYWORDS'			=> 'Je moet tenminste één woord specificeren om op te zoeken. Elk woord moet tenminste %s bevatten en mag niet meer dan %s bevatten exclusief jokers.',
	'NO_RECENT_SEARCHES'	=> 'Geen zoekopdrachten zijn recent uitgevoerd.',
	'NO_SEARCH'				=> 'Sorry maar je mag het zoeksysteem niet gebruiken.',
	'NO_SEARCH_RESULTS'		=> 'Er zijn geen resultaten gevonden die overeenkomen met je zoekopdracht..',
	'NO_SEARCH_LOAD'		=> 'Je kan de zoekfunctie niet gebruiken op dit moment. De server word te veel belast, probeer het op een later moment opnieuw.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Sorry, maar je kan het zoeksysteem momenteel niet gebruiken. Probeer het nogmaals over %d seconden.',
		2	=> 'Sorry, maar je kan het zoeksysteem momenteel niet gebruiken. Probeer het nogmaals over %d secondes.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sorry maar het zoeken naar ongelezen berichten is uitgeschakeld voor dit forum.',
	'WORD_IN_NO_POST'		=> 'Geen berichten zijn gevonden omdat het woord <strong>%s</strong> niet in een bericht voorkomt.',
	'WORDS_IN_NO_POST'		=> 'Geen berichten zijn gevonden omdat de woorden <strong>%s</strong> niet in een bericht voorkomen.',

	'POST_CHARACTERS'		=> 'karakters in berichten',
	'PHRASE_SEARCH_DISABLED'	=> 'Het doorzoeken op exacte zin wordt niet ondersteunt op dit forum.',

	'RECENT_SEARCHES'		=> 'Recente zoekopdrachten',
	'RESULT_DAYS'			=> 'Limiteer resultaten tot vorige',
	'RESULT_SORT'			=> 'Sorteer resultaten op',
	'RETURN_FIRST'			=> 'Geef eerste',
	'GO_TO_SEARCH_ADV'		=> 'Ga naar uitgebreid zoeken',

	'SEARCHED_FOR'				=> 'Zoekterm gebruikt',
	'SEARCHED_TOPIC'			=> 'Doorzochte onderwerp',
	'SEARCHED_QUERY'			=> 'Doorzochte query',
	'SEARCH_ALL_TERMS'			=> 'Zoek naar alle termen of gebruik de zoekopdracht zoals het is ingevuld',
	'SEARCH_ANY_TERMS'			=> 'Zoek naar iedere term',
	'SEARCH_AUTHOR'				=> 'Zoek naar auteur',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Gebruik * als een joker voor gedeelde overeenkomsten.',
	'SEARCH_FIRST_POST'			=> 'Alleen eerste bericht van onderwerp',
	'SEARCH_FORUMS'				=> 'Zoeken in forums',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecteer de forum of forums die je wilt doorzoeken. Subforums worden automatisch doorzocht als je “Doorzoek subforums“ hieronder niet uitschakeld.',
	'SEARCH_IN_RESULTS'			=> 'Doorzoek deze resultaten',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Plaats een <strong>+</strong> voor elk woord welke gevonden moet worden en een <strong>-</strong> voor elk woord welke niet gevonden moet worden. Plaats een lijst met woorden gescheiden door een <strong>|</strong> in haakjes als alleen één van de woorden gevonden moet worden. Gebruik * als een joker voor gedeeltelijke overeenkomsten.',
	'SEARCH_MSG_ONLY'			=> 'Alleen tekst',
	'SEARCH_OPTIONS'			=> 'Zoekopties',
	'SEARCH_QUERY'				=> 'Zoekopdracht',
	'SEARCH_SUBFORUMS'			=> 'Doorzoek subforums',
	'SEARCH_TITLE_MSG'			=> 'Alleen berichtonderwerpen en tekst',
	'SEARCH_TITLE_ONLY'			=> 'Alleen onderwerptitels',
	'SEARCH_WITHIN'				=> 'Zoek in',
	'SORT_ASCENDING'			=> 'Oplopend',
	'SORT_AUTHOR'				=> 'Auteur',
	'SORT_DESCENDING'			=> 'Aflopend',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Berichtonderwerp',
	'SORT_TIME'					=> 'Plaatsingstijd',
	'SPHINX_SEARCH_FAILED'		=> 'Zoeken gefaald: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sorry, de zoekopdracht kon niet worden uitgevoerd. Meer informatie over deze fout is opgeslagen in de foutenlog.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Je moet tenminste %d teken van de auteursnaam opgeven.',
		2	=> 'Je moet tenminste %d tekens van de auteursnaam opgeven.',
	),
));
