<?php
/** 
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: search.php 478 2015-01-02 08:29:46Z jan_skovsgaard $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Her kan du ændre og vedligeholde søgningen i søgemotorens indeks. Da du normalt kun bruger en motor bør alle de indeks du ikke bruger slettes. Efter ændring i søgeindstillingerne (f.eks. antallet af minimum og maksimum antal tegn), kan det være værd at overveje at genskabe indekset, for at afspejle disse ændringer.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Her defineres hvilke metoder søgemotoren skal anvende for at indeksere indlæg og udføre søgninger. Du kan definere flere muligheder, som påvirker hvor meget behandling de enkelte søgninger kræver. Nogle af indstillingerne er identiske for alle søgemotorer.',

	'COMMON_WORD_THRESHOLD'					=> 'Grænse for definition af et alment ord',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Hvis et ord er indeholdt i en større procentdel af alle indlæg end det her angivne betragtes det som et alment ord der ignoreres i søgningen. Grænsen deaktiveres med 0. Virker først når der er over 100 indlæg at søge på. Ændres værdien, bør der foretages en fornyet indeksering, således ændringen får konsekvens for søgningen i allerede indsendte indlæg.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Er du sikker på at du vil skifte til en anden søgemotor? Når du har skiftet til en ny søgemotor, er du nødt at danne et nyt indeks til denne. Hvis ikke du har planer om at skifte tilbage til den tidligere anvendte søgemotor, kan du med fordel slette dennes indeks, det vil frigøre systemressourser.',
	'CONTINUE_DELETING_INDEX'				=> 'Fortsæt den tidligere startede sletteproces af søgeindekset',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Der er blevet startet en sletteproces for et indeks. For at kunne tilgå søgeindekssiden igen, skal denne proces færdiggøres eller afbrydes.',
	'CONTINUE_INDEXING'						=> 'Fortsæt tidligere indekseringsproces',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Der er blevet startet en indekseringsproces. For at kunne tilgå søgeindekssiden igen, skal denne proces færdiggøres eller afbrydes.',
	'CREATE_INDEX'							=> 'Opret indeks',

	'DELETE_INDEX'							=> 'Slet indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Sletning af indeks er i gang',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Søgemotoren er ved at slette indeks. Det kan tage nogle minutter.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL\'s fuldtekstsøgemotor kan kun bruges fra MySQL4 og nyere.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'MySQL\'s fuldtekstindeksering kan kun anvendes sammen med MyISAM- eller InnoDB-tabeller. MySQL 5.6.4 eller nyere kræves for at understøtte fuldtekstindeksering med InnoDB-tabeller.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Det totale antal indekserede indlæg',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Ord indeholdende mindst dette antal tegn indekseres til søgninger. Denne værdi kan kun ændres direkte i konfigurationen af mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Ord indeholdende mindre end dette antal tegn indekseres til søgninger. Denne værdi kan kun ændres direkte i konfigurationen af mysql.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL\'s fuldtekstsøgemotor kan kun anvendes sammen med PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'	=> 'Det totale antal indekserede indlæg',
	'FULLTEXT_POSTGRES_VERSION_CHECK'	=> 'PostgreSQL version',
	'FULLTEXT_POSTGRES_TS_NAME'	=> 'Tekstsøgnings konfigurationprofil:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'	=> 'Mindste ordlængde for nøgleord',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'	=> 'Største ordlængde for nøgleord',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'Denne søgemotor kræver PostgreSQL version 8.3 og nyere.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'	=> 'Konfigurationprofilen anvendes til at bestemme parsning og ordliste.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> 'Ord med mindst dette antal tegn inkluderes i databaseforespørgslen.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> 'Ord med højst dette antal tegn inkluderes i databaseforespørgslen.',

	'FULLTEXT_SPHINX_CONFIGURE'        => 'Udfyld de følgende indstillinger for at danne sphinx-konfigurationsfilen',
	'FULLTEXT_SPHINX_DATA_PATH'        => 'Sti til data-mappen',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'    => 'Anvendes til lagring af indekseringer og logfiler. Mappen bør oprettes så der ikke er offentlig adgang til den (bør have en afsluttende slash).',
	'FULLTEXT_SPHINX_DELTA_POSTS'      => 'Antal dataposter i hyppigt opdateret delta-index',
	'FULLTEXT_SPHINX_HOST'          => 'Vært for sphinx-søgedæmon',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'      => 'Den vært søgedæmon(searchd) lytter på. Udfyldes intet, anvendes localhost som stancard.',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'    => 'Memory-grænse for indeksering',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'  => 'Værdien bør altid valges lavere end den tilgængelige mængde RAM på din server. Oplever du periodiske problemer med serverens ydeevne, kan årsagen være at indekseringerne optager for mange ressourcer. Det kan afhjælpes ved at sænke den mængde RAM indekseringer har til rådighed.',
	'FULLTEXT_SPHINX_MAIN_POSTS'      => 'Antal indlæg i hovedindeks',
	'FULLTEXT_SPHINX_PORT'          => 'Sphinx søgedæmon-port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'      => 'Den port sphinx\'s søgedæmon (searchd) lytter på. Udfyldes ikke hvis Sphinx API port 9312, som er standard, ønskes benyttet.',
	'FULLTEXT_SPHINX_WRONG_DATABASE'    => 'phpBB\'s sphinx-søgning understøtter kun MySQL og PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'      => 'Sphinx konfigurationsfil',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'  => 'Det dannede indhold til brug for sphinx\'s konfigurationsfil. Data skal kopieres ind i sphinx.conf, som benyttes af søgedæmonen. Erstat værdierne [dbuser] og [dbpassword] med dine tilsvarende oplysninger for adgang til din database.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'    => 'Stien til sphinx datamappen er ikke defineret. Angiv venligst denne for at danne konfigurationsfilen.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Generelle søgeindstillinger',
	'GO_TO_SEARCH_INDEX'					=> 'Gå til søgeindekssiden',

	'INDEX_STATS'							=> 'Indeksstatistikker',
	'INDEXING_IN_PROGRESS'					=> 'Indeksering er under udførsel',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Søgemotoren er i øjeblikket ved at indeksere alle indlæg på boardet. Det kan tage fra nogle få minutter til flere timer afhængig af boardets størrelse.',

	'LIMIT_SEARCH_LOAD'						=> 'Grænse for søgningens belastning af systemet',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Hvis systemets belastning overskrider denne værdi i mere end 1 minut, vil søgesiden gå offline, 1.0 svarer til ~100% belastning af en processor. Denne funktion virker kun på UNIX-baserede servere.',

	'MAX_SEARCH_CHARS'						=> 'Maksimalt antal tegn for indeksering til søgninger',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Ord på højest dette antal tegn vil blive indekseret til brug for søgninger.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksimalt antal tilladte ord',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Det maksimalt antal tilladte ord i en søgning. Angives 0, tillades ubegrænset antal ord.',	
	'MIN_SEARCH_CHARS'						=> 'Minimalt antal tegn for indeksering til søgninger',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Ord på mindst dette antal tegn vil blive indekseret til brug for søgninger.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Mindste antal tegn for forfatternavn',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Brugere skal angive mindst dette antal tegn i navnet, for at udføre en søgning efter forfatter ved anvendelse af (*) som ubekendt. Hvis forfatterens brugernavn er kortere end dette antal tegn, kan der søges efter dennes indlæg ved at angive forfatterens fulde brugernavn.',

	'PROGRESS_BAR'							=> 'Statuslinie',

	'SEARCH_GUEST_INTERVAL'					=> 'Gæsters søgeinterval',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Det antal sekunder gæster skal vente mellem søgninger. Hvis en gæst søger, må alle andre gæster vente indtil dette tidsinterval er overskredet.',
	'SEARCH_INDEX_CREATE_REDIRECT'      => array(
		1  => 'Alle indlæg til og med indlægs-ID %2$d er nu indekseret, af disse %1$d indlæg i dette trin.<br />',
		2  => 'Alle indlæg til og med indlægs-ID %2$d er nu indekseret, af disse %1$d indlæg i dette trin.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'    => array(
		1  => 'I øjeblikket indekseres ca. %1$.1f 1f indlæg i sekundet.<br />Igangværende indeksering…',
		2  => 'I øjeblikket indekseres ca. %1$.1f 1f indlæg i sekundet.<br />Igangværende indeksering…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'      => array(
		1  => 'Alle indlæg til og med indlægs-ID %2$d er nu fjernet fra søgeindekset.<br />Igangværende fjernelse af indlæg…',
		2  => 'Alle indlæg til og med indlægs-ID %2$d er nu fjernet fra søgeindekset.<br />Igangværende fjernelse af indlæg…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Alle boardets indlæg er nu indekserede.',
	'SEARCH_INDEX_REMOVED'					=> 'Søgemotorens søgeindeks er nu slettet.',
	'SEARCH_INTERVAL'						=> 'Brugeres søgeinterval',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Det antal sekunder brugere skal vente mellem søgninger. Intervallet kontrolleres individuelt pr. bruger.',
	'SEARCH_STORE_RESULTS'					=> 'Antal sekunder søgningens mellemlager opretholdes',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Mellemlagrede søgeresultater slettes efter dette tidsinterval i sekunder. Sættes til 0 hvis du ønsker at deaktivere søgemellemlager.',
	'SEARCH_TYPE'							=> 'Valg af søgemotor',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB giver mulighed for at vælge den søgemotor som bruges til at søge i indlægsteksterne. I standardindstillingen anvendes phpBB\'s indbyggede fuldtekstsøgning.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Du har skiftet søgemotor. For at bruge den nye motor skal du sikre at denne har et indeks.',

	'TOTAL_WORDS'							=> 'Antal indekserede ord',
	'TOTAL_MATCHES'							=> 'Antal relationer mellem ord og indlæg',

	'YES_SEARCH'							=> 'Aktiver søgefaciliteter',
	'YES_SEARCH_EXPLAIN'					=> 'Aktiverer brugerfladen som giver søgemulighederne, inklusiv brugersøgninger.',
	'YES_SEARCH_UPDATE'						=> 'Aktiver fuldtekstopdatering',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Opdatering af fuldtekstindekset når der skrives nye indlæg, ignoreres hvis søgefaciliteter er deaktiverede.',
));
