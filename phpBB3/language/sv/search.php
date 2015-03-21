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
	'ALL_AVAILABLE'			=> 'Alla tillgängliga',
	'ALL_RESULTS'			=> 'Visa alla resultat',

	'DISPLAY_RESULTS'		=> 'Visa resultat som',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Sökningen fann %d träff',
		2	=> 'Sökningen fann %d träffar',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Sökningen fann fler än %d träff',
		2	=> 'Sökningen fann fler än %d träffar',
	),

	'GLOBAL'				=> 'Globalt anslag',

	'IGNORED_TERMS'			=> 'ignorerat',
	'IGNORED_TERMS_EXPLAIN'	=> 'Följande ord i din sökfråga ignorerades eftersom de är för vanliga: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Gå till inlägg',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Forumet kräver att du är registrerad och inloggad in för att visa dina egna inlägg.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Forumet kräver att du är registrerad och inloggad för att visa dina olästa inlägg.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Forumet kräver att du är registrerad och inloggad for att visa nya inlägg sedan ditt senaste besök.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Du har angett för många olika nyckelord. Var god försök på nytt med maximalt %1$d ord.',
		2	=> 'Du har angett för många olika nyckelord. Var god försök på nytt med maximalt %1$d ord.',
	),

	'NO_KEYWORDS'			=> 'Du måste ange minst ett ord att söka efter. Varje ord måste bestå av minst %s tecken och inte mer än %s tecken, exklusive jokertecken.',
	'NO_RECENT_SEARCHES'	=> 'Inga sökningar har gjorts nyligen.',
	'NO_SEARCH'				=> 'Du har inte tillåtelse att använda söksystemet.',
	'NO_SEARCH_RESULTS'		=> 'Inga träffar hittades.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Du kan inte söka just nu. Försök igen om %d sekund.',
		2	=> 'Du kan inte söka just nu. Försök igen om %d sekunder.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sökning efter olästa trådar är avslaget på detta forum',
	'WORD_IN_NO_POST'		=> 'Inga inlägg hittades eftersom ordet <strong>%s</strong> inte finns i något inlägg.',
	'WORDS_IN_NO_POST'		=> 'Inga inlägg hittades eftersom orden <strong>%s</strong> inte finns i något inlägg.',

	'POST_CHARACTERS'		=> 'tecknen av inlägget',
	'PHRASE_SEARCH_DISABLED'	=> 'Sökning utav exakta fraser är inte tillgängligt på detta forum.',

	'RECENT_SEARCHES'		=> 'Senaste sökningarna',
	'RESULT_DAYS'			=> 'Begränsa resultaten till inlägg nyare än',
	'RESULT_SORT'			=> 'Sortera resultat efter',
	'RETURN_FIRST'			=> 'Skriv ut första',
	'GO_TO_SEARCH_ADV'		=> 'Gå till avancerad sökning',

	'SEARCHED_FOR'				=> 'Sökterm använd',
	'SEARCHED_TOPIC'			=> 'Sökte inom tråd',
	'SEARCHED_QUERY'			=> 'Sökte efter inmatningen',
	'SEARCH_ALL_TERMS'			=> 'Sök efter resultat som matchar alla termer eller använd frågan som den är angiven',
	'SEARCH_ANY_TERMS'			=> 'Sök efter resultat som matchar någon av termerna',
	'SEARCH_AUTHOR'				=> 'Sök efter författare',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Använd * som jokertecken för partiella träffar.',
	'SEARCH_FIRST_POST'			=> 'Endast första inlägget i trådar',
	'SEARCH_FORUMS'				=> 'Sök i kategori',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Välj den kategori eller de kategorier som du vill söka i. Underkategorier söks igenom automatiskt om du inte inaktiverar “Sök i underkategorier” nedan.',
	'SEARCH_IN_RESULTS'			=> 'Sök bland dessa resultat',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Sätt <strong>+</strong> framför de ord som måste finnas med i resultaten och <strong>-</strong> framför de ord som inte får finnas med i resultaten. Skriv en lista med ord separerade med <strong>|</strong> i en parantes om endast ett av orden måste finnas med i resultaten, t.ex. <em>(ord|ord)</em>. Använd * som jokertecken för partiella träffar.',
	'SEARCH_MSG_ONLY'			=> 'Endast meddelandetext',
	'SEARCH_OPTIONS'			=> 'Sökalternativ',
	'SEARCH_QUERY'				=> 'Sökfråga',
	'SEARCH_SUBFORUMS'			=> 'Sök i underkategorier',
	'SEARCH_TITLE_MSG'			=> 'Inläggsämnen och meddelandetext',
	'SEARCH_TITLE_ONLY'			=> 'Endast trådämnen',
	'SEARCH_WITHIN'				=> 'Sök inom',
	'SORT_ASCENDING'			=> 'Stigande',
	'SORT_AUTHOR'				=> 'Författare',
	'SORT_DESCENDING'			=> 'Fallande',
	'SORT_FORUM'				=> 'Kategori',
	'SORT_POST_SUBJECT'			=> 'Inläggämne',
	'SORT_TIME'					=> 'Datum',

	'SPHINX_SEARCH_FAILED'		=> 'Sökningen misslyckades: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Ursäkta, sökningen lyckades inte. Mer information om detta finns att läsa i error loggen.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Du måste ange minst %d tecken av författarens namn.',
		2	=> 'Du måste ange minst %d tecken av författarens namn.',
	),
));
