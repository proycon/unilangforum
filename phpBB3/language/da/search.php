<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: search.php 475 2014-12-09 19:05:56Z jan_skovsgaard $
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
	'ALL_AVAILABLE'			=> 'Alle',
	'ALL_RESULTS'			=> 'Alle søgeresultater',

	'DISPLAY_RESULTS'		=> 'Vis resultater som',

	'FOUND_SEARCH_MATCHES' => array(
		1	=> 'Søgningen gav %d træffer',
		2	=> 'Søgningen gav %d træffere',
	),
	
	'FOUND_MORE_SEARCH_MATCHES' => array(
		1 => 'Søgningen gav mere end %d træf',
		2 => 'Søgningen gav mere end %d træffere',
	),

	'GLOBAL'				=> 'Global bekendtgørelse',

	'IGNORED_TERMS'			=> 'ignoreret',
	'IGNORED_TERMS_EXPLAIN'	=> 'Følgende ord: <strong>%s</strong> - er for alment anvendt og blev ignoreret i søgningen.',

	'JUMP_TO_POST'			=> 'Hop til indlæg',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Du skal være tilmeldt som bruger og logget ind for at få vist egne indlæg.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Du skal være tilmeldt som bruger og logget ind for at få vist dine ulæste indlæg.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Du skal være tilmeldt som bruger og logget ind for at få vist nye indlæg siden dit seneste log ind.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1  =>	'Du angav for mange søgeord, en søgning må maksimalt indeholde %1$d ord.',
		2  =>	'Du angav for mange søgeord, en søgning må maksimalt indeholde %1$d ord.',
	),

	'NO_KEYWORDS'			=> 'Du skal angive mindst et søgeord. Hvert ord skal bestå af mindst %s og højst %s tegn (eksklusiv ubekendte).',
	'NO_RECENT_SEARCHES'	=> 'Ingen søgning er foretaget for nylig.',
	'NO_SEARCH'				=> 'Beklager, du har ikke tilladelse til at benytte søgefunktionen.',
	'NO_SEARCH_RESULTS'		=> 'Intet emne eller indlæg passer til dine søgekriterier.',
	'NO_SEARCH_LOAD'		=> 'Beklager, men du kan ikke anvende søgning i øjeblikket. Serveren er overbelastet. Prøv venligst igen senere.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Beklager, søgefunktionen kan ikke bruges lige nu. Prøv venligst igen om %d sekund.',
		2	=> 'Beklager, søgefunktionen kan ikke bruges lige nu. Prøv venligst igen om %d sekunder.',
	),
	'NO_SEARCH_UNREADS'    => 'Beklager, søgning efter ulæste indlæg er deaktiveret på boardet.',
	'WORD_IN_NO_POST'		=> 'Ingen indlæg blev fundet, ordet <strong>%s</strong> forekommer ikke i noget indlæg.',
	'WORDS_IN_NO_POST'		=> 'Ingen indlæg blev fundet, ordene <strong>%s</strong> forekommer ikke i noget indlæg.',

	'POST_CHARACTERS'		=> 'tegn i indlæg',
	'PHRASE_SEARCH_DISABLED'  => 'Søgning efter eksakt ordgruppe understøttes ikke på dette board.',

	'RECENT_SEARCHES'		=> 'Nylige søgninger',
	'RESULT_DAYS'			=> 'Afgræns resultater til forrige',
	'RESULT_SORT'			=> 'Sorter resultater efter',
	'RETURN_FIRST'			=> 'Vis første',
	'GO_TO_SEARCH_ADV'		=> 'Gå til avanceret søgning',

	'SEARCHED_FOR'			=> 'Anvendt søgeord',
	'SEARCHED_TOPIC'		=> 'Det søgte emne',
	'SEARCHED_QUERY'      => 'Søgningens forespørgsel',
	'SEARCH_ALL_TERMS'		=> 'Søg efter alle udtryk eller brug indtastet søgeparameter ',
	'SEARCH_ANY_TERMS'		=> 'Søg efter alle udtryk',
	'SEARCH_AUTHOR'			=> 'Søg efter en bestemt forfatter',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Brug * som ubekendt for ukendte tegn.',
	'SEARCH_FIRST_POST'		=> 'Kun første indlæg i emnet',
	'SEARCH_FORUMS'			=> 'Søg i fora',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Vælg det forum eller de fora du vil søge i. Der søges automatisk i underfora medmindre du fravælger "Søg i underfora" herunder.',
	'SEARCH_IN_RESULTS'		=> 'Søg i fundne træffere',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Sæt <strong>+</strong> foran et søgeord der skal findes og <strong>-</strong> foran et søgeord der skal udelukkes i søgningen.<br />Skriv mange søgeord adskilt med <strong>|</strong> og omgivet af parantes, når blot et af ordene skal findes.<br />Brug * som ubekendt for ukendte tegn.',
	'SEARCH_MSG_ONLY'		=> 'Søg kun i beskedfeltet',
	'SEARCH_OPTIONS'		=> 'Søgemuligheder',
	'SEARCH_QUERY'			=> 'Søgeord',
	'SEARCH_SUBFORUMS'		=> 'Søg i underfora',
	'SEARCH_TITLE_MSG'		=> 'Indlæggets overskrift og beskedfelt',
	'SEARCH_TITLE_ONLY'		=> 'Emnets overskrift',
	'SEARCH_WITHIN'			=> 'Søg i',
	'SORT_ASCENDING'		=> 'Stigende',
	'SORT_AUTHOR'			=> 'Forfatter',
	'SORT_DESCENDING'		=> 'Faldende',
	'SORT_FORUM'			=> 'Forum',
	'SORT_POST_SUBJECT'		=> 'Indlæggets overskrift',
	'SORT_TIME'				=> 'Indlæggets dato',
	'SPHINX_SEARCH_FAILED'    => 'Søgning fejlede. %s',
	'SPHINX_SEARCH_FAILED_LOG'        => 'Beklager, søgning kunne ikke udføres. Mere information er skrevet til fejlloggen.',

	'TOO_FEW_AUTHOR_CHARS' => array(
		1	=> 'Du skal angive mindst %d tegn af forfatterens navn.',
		2	=> 'Du skal angive mindst %d tegn af forfatterens navn.',
	),
));
