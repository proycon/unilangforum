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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Her kan du administrere indeksene for søkemotorene. Siden du normalt bare bruker én søkemotor, bør du slette alle indekser du ikke bruker. Når du har endret noen av søkeinnstillingene (f.eks. laveste/høyeste antall tegn), kan det være nyttig å regenerere indeksen slik at den gjenspeiler endringene.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Her kan du angi hvilke søkemotor som skal brukes til å indeksere innlegg og utføre søk. Du kan angi ulike alternativer som kan påvirke hvor mye prosessering handlingene krever. Enkelte av disse innstillingene er de samme for alle søkemotorene.',

	'COMMON_WORD_THRESHOLD'					=> 'Terskelverdi for vanlige ord',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Ord som finnes i en større andel av alle innlegg, vil bli ansett som vanlige. Vanlige ord ignoreres i søk. Angi til null for å deaktivere. Trer kun i kraft hvis det finnes flere enn 100 innlegg. Hvis du ønsker at ord som allerede anses som vanlige, vurderes på nytt, må du regenerere indeksen.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Er du sikker på at du vil bytte til en annen søkemotor? Etter endring av søkemotor vil du måtte opprette en indeks for den nye søkemotoren. Hvis du ikke har tenkt å bytte tilbake til den gamle søkemotoren, kan du også slette indeksen til den gamle søkemotoren for å frigjøre systemressurser.',
	'CONTINUE_DELETING_INDEX'				=> 'Fortsett den forrige prosessen med fjerning av indeks',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'En prosess med fjerning av indeks er startet. Du må fullføre denne eller avbryte den for å komme til søkeindekssiden.',
	'CONTINUE_INDEXING'						=> 'Fortsett den forrige indekseringsprosessen',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'En indekseringsprosess er startet. Du må fullføre denne eller avbryte den for å komme til søkeindekssiden.',
	'CREATE_INDEX'							=> 'Opprett indeks',

	'DELETE_INDEX'							=> 'Slett indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Sletting av indeks pågår',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Søkemotoren rydder opp i indeksen. Dette kan ta noen minutter.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL-fulltekstsøkemotoren kan bare brukes med MySQL4 eller høyere.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL-fulltekstindekser kan bare brukes med MyISAM- og InnoDB-tabeller. Det kreves MySQL 5.6.4 eller høyere for fulltekstindekser på InnoDB-tabeller.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Totalt antall indekserte innlegg',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Ord med minst dette antallet tegn vil bli indeksert for søk. Du eller tjenesteleverandøren kan bare endre denne innstillingen ved å endre MySQL-konfigurasjonen.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Ord med høyst dette antallet tegn vil bli indeksert for søk. Du eller tjenesteleverandøren kan bare endre denne innstillingen ved å endre MySQL-konfigurasjonen.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL-fulltekstsøkemotoren kan bare brukes med PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Totalt antall indekserte innlegg',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL-versjon',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Konfigurasjonsprofil for tekstsøk:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minste ordlengde for nøkkelord',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Største ordlengde for nøkkelord',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Denne søkemotoren krever PostgreSQL versjon 8.3 eller høyere.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Konfigurasjonsprofilen for tekstsøk brukes til å velge parser og ordbok.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Ord med minst dette antallet tegn vil bli inkludert i databasespørringen.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Ord med høyst dette antallet tegn vil bli inkludert i databasespørringen.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Konfigurer følgende innstillinger for å generere sphinx-konfigurasjonsfil',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Bane til datamappe',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Brukes til å lagre indekser og loggfiler. Du bør opprette denne mappen utenfor mapper som er tilgjengelige fra web. (Bør ha etterfølgende skråstrek)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Antall innlegg i hyppig oppdatert deltaindeks',
	'FULLTEXT_SPHINX_HOST'					=> 'Vert for Sphinx søke-«daemon»',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Verten som Sphinx søke-«daemon» (searchd) lytter på. La stå tom for å bruke standarden localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Minnegrense for indekserer',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Dette tallet må alltid være lavere enn mengden RAM som er tilgjengelig på maskinen. Hvis du opplever ytelsesproblemer, kan det være fordi indeksereren bruker for mange ressurser. Det kan hjelpe å redusere mengden minne som er tilgjengelig for indeksereren.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Antall innlegg i hovedindeks',
	'FULLTEXT_SPHINX_PORT'					=> 'Port for Sphinx søke-«daemon»',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Porten som Sphinx søke-«daemon» (searchd) lytter på. La stå tom for å bruke standard Sphinx API-port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx-søk for phpBB støtter bare MySQL og PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx-konfigurasjonsfil',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Det genererte innholdet i Sphinx-konfigurasjonsfilen. Disse dataene må limes inn i sphinx.conf, som brukes av Sphinx søke-«daemon». Erstatt plassholderne [dbuser] og [dbpassword] med påloggingsinformasjonen til databasen.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Datamappebane for Sphinx er ikke definert. Definer banen og send inn for å generere konfigurasjonsfilen.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Generelle søkeinnstillinger',
	'GO_TO_SEARCH_INDEX'					=> 'Gå til søkeindekssiden',

	'INDEX_STATS'							=> 'Indeksstatistikk',
	'INDEXING_IN_PROGRESS'					=> 'Indeksering pågår',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Søkemotoren indekserer alle innlegg på systemet. Dette kan ta fra noen få minutter til flere timer, avhengig av systemets størrelse.',

	'LIMIT_SEARCH_LOAD'						=> 'Belastningsgrense for søkesidesystemet',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Hvis systembelastningen i løpet av 1 minutt overskrider denne verdien, vil søkesiden bli offline. 1.0 tilsvarer ~100 % utnyttelse av én prosessor. Dette fungerer bare på UNIX-baserte servere.',

	'MAX_SEARCH_CHARS'						=> 'Maksimalt antall tegn som indekseres av søket',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Ord som inneholder maksimalt dette antallet tegn, vil bli indeksert for søk.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksimalt antall tillatte nøkkelord',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksimalt antall ord brukeren kan søke etter. Verdien 0 angir et ubegrenset antall ord.',
	'MIN_SEARCH_CHARS'						=> 'Minste antall tegn som indekseres av søket',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Ord som inneholder minst dette antallet tegn, vil bli indeksert for søk.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minste antall tegn i forfatternavn',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Brukere må angi minst dette antallet tegn i navn ved jokertegnsøk etter forfatter. Hvis forfatterens brukernavn er kortere enn dette, kan du fortsatt søke etter forfatterens innlegg ved å skrive inn hele brukernavnet.',

	'PROGRESS_BAR'							=> 'Fremdriftslinje',

	'SEARCH_GUEST_INTERVAL'					=> 'Overhyppighetsintervall for gjestesøk',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Antall sekunder gjester må vente mellom søk. Hvis én gjest søker, må alle andre vente til tidsintervallet er passert.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Alle innlegg opp til innleggs-ID %2$d er nå indeksert. %1$d av disse var i løpet av dette trinnet.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Gjeldende indekseringshastighet er omtrent %1$.1f innlegg per sekund.<br />Indeksering pågår …',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Alle innlegg opp til innleggs-ID %2$d er fjernet fra søkeindeksen.<br />Sletting pågår …',
	),
	'SEARCH_INDEX_CREATED'					=> 'Alle innlegg i nettstedsdatabasen er indeksert.',
	'SEARCH_INDEX_REMOVED'					=> 'Søkeindeksen for denne søkemotoren er slettet.',
	'SEARCH_INTERVAL'						=> 'Overhyppighetsintervall for brukersøk',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Antall sekunder brukere må vente mellom søk. Dette intervallet sjekkes uavhengig for hver enkelt bruker.',
	'SEARCH_STORE_RESULTS'					=> 'Buffervarighet for søkeresultat',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Bufrede søkeresultater utløper etter denne tiden, angitt i sekunder. Angi til 0 hvis du vil deaktivere søkebuffer.',
	'SEARCH_TYPE'							=> 'Søkemotor',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB lar deg velge hvilken søkemotor som brukes til å søke etter tekst i innlegg. Som standard brukes phpBBs eget fulltekstsøk.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Du byttet søkemotor. For å kunne bruke den nye søkemotoren, bør du sjekke at det finnes en indeks for søkemotoren du velger.',

	'TOTAL_WORDS'							=> 'Totalt antall ord indeksert',
	'TOTAL_MATCHES'							=> 'Totalt antall ord-til-innleggs-relasjoner indeksert',

	'YES_SEARCH'							=> 'Aktiver søkemuligheter',
	'YES_SEARCH_EXPLAIN'					=> 'Aktiverer søkemuligheter for brukere, inkludert brukersøk.',
	'YES_SEARCH_UPDATE'						=> 'Aktiver fulltekstoppdatering',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Oppdatering av fulltekstindekser ved innlegging, overstyres hvis søk er deaktivert.',
));
