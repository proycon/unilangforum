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
	'ALL_AVAILABLE'			=> 'Alle tilgjengelige',
	'ALL_RESULTS'			=> 'Alle resultater',

	'DISPLAY_RESULTS'		=> 'Vis resultater som',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Søket gav %d treff',
		2	=> 'Søket gav %d treff',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Søket gav flere enn %d treff',
		2	=> 'Søket gav flere enn %d treff',
	),

	'GLOBAL'				=> 'Global kunngjøring',

	'IGNORED_TERMS'			=> 'ignorert',
	'IGNORED_TERMS_EXPLAIN'	=> 'Følgende ord i søkeordene ble ignorert fordi de er for vanlige: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Hopp til innlegg',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Systemet krever at du er registrert og innlogget for å vise egne innlegg.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Systemet krever at du er registrert og innlogget for å vise uleste innlegg.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Systemet krever at du er registrert og innlogget for å vise nye innlegg siden forrige besøk.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Du har angitt for mange søkeord. Ikke angi flere enn %1$d ord.',
		2	=> 'Du har angitt for mange søkeord. Ikke angi flere enn %1$d ord.',
	),

	'NO_KEYWORDS'			=> 'Du må angi minst ett søkeord. Hvert av ordene på bestå av minst %s og ikke flere enn %s tegn, unntatt jokertegn.',
	'NO_RECENT_SEARCHES'	=> 'Ingen nylige søk.',
	'NO_SEARCH'				=> 'Beklager, men du har ikke tillatelse til å bruke søkesystemet.',
	'NO_SEARCH_RESULTS'		=> 'Fant ingen treff.',
	'NO_SEARCH_LOAD'		=>	'Beklager, men du kan ikke bruke søket nå. Serveren har høy belastning. Prøv igjen senere.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Beklager, men du kan ikke bruke søket nå. Prøv igjen om %d sekund.',
		2	=> 'Beklager, men du kan ikke bruke søket nå. Prøv igjen om %d sekunder.',
	),
	'NO_SEARCH_UNREADS'		=> 'Beklager, men søk etter uleste innlegg er deaktivert på dette systemet.',
	'WORD_IN_NO_POST'		=> 'Fant ingen innlegg fordi ordet <strong>%s</strong> ikke finnes i noen innlegg.',
	'WORDS_IN_NO_POST'		=> 'Fant ingen innlegg fordi ordene <strong>%s</strong> ikke finnes i noen innlegg.',

	'POST_CHARACTERS'		=> 'tegn i innlegget',
	'PHRASE_SEARCH_DISABLED'	=> 'Søk etter nøyaktig frase støttes ikke på dette systemet.',

	'RECENT_SEARCHES'		=> 'Nylige søk',
	'RESULT_DAYS'			=> 'Begrens treffene til forrige',
	'RESULT_SORT'			=> 'Sorter resultater etter',
	'RETURN_FIRST'			=> 'Tilbake til første',
	'GO_TO_SEARCH_ADV'	=> 'Gå til avansert søk',

	'SEARCHED_FOR'				=> 'Søkeord brukt',
	'SEARCHED_TOPIC'			=> 'Søkte i emne',
	'SEARCHED_QUERY'			=> 'Søkte med spørring',
	'SEARCH_ALL_TERMS'			=> 'Søk etter alle ord eller bruk spørringen slik den er angitt',
	'SEARCH_ANY_TERMS'			=> 'Søk etter ethvert ord',
	'SEARCH_AUTHOR'				=> 'Søk etter forfatter',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Bruk * som jokertegn for deltreff.',
	'SEARCH_FIRST_POST'			=> 'Bare første innlegg i emner',
	'SEARCH_FORUMS'				=> 'Søk i fora',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Velg hvilket forum eller hvilke fora du vil søke i. Det søkes automatisk i underfora hvis du ikke deaktiverer «Søk i underfora» nedenfor.',
	'SEARCH_IN_RESULTS'			=> 'Søk i disse resultatene',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Skriv <strong>+</strong> foran ord som skal finnes og <strong>-</strong> foran ord som ikke skal finnes. Skriv en liste over ord atskilt med <strong>|</strong> i hakeparenteser hvis bare ett av ordene må finnes. Bruk * som jokertegn for deltreff.',
	'SEARCH_MSG_ONLY'			=> 'Bare meldingstekst',
	'SEARCH_OPTIONS'			=> 'Søkealternativer',
	'SEARCH_QUERY'				=> 'Søkespørring',
	'SEARCH_SUBFORUMS'			=> 'Søk i underfora',
	'SEARCH_TITLE_MSG'			=> 'Innleggstitler og meldingstekst',
	'SEARCH_TITLE_ONLY'			=> 'Bare emnetitler',
	'SEARCH_WITHIN'				=> 'Søk inni',
	'SORT_ASCENDING'			=> 'Stigende',
	'SORT_AUTHOR'				=> 'Forfatter',
	'SORT_DESCENDING'			=> 'Synkende',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Innleggstittel',
	'SORT_TIME'					=> 'Innleggsklokkeslett',
	'SPHINX_SEARCH_FAILED'		=> 'Søket mislyktes: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Beklager, men søket kan ikke utføres. Du finner mer informasjon om denne feilen i feilloggen.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Du må angi minst %d tegn av forfatterens navn.',
		2	=> 'Du må angi minst %d tegn av forfatterens navn.',
	),
));
