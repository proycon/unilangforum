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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Hier kan je de indexen van de zoekachtergrond beheren. Aangezien je normaal maar één achtergrond gebruikt, kan je alle indexen die je niet gebruikt verwijderen. Na het wijzigen van enkele zoekinstellingen (bijv. het minimum/maximum aantal tekens) kan het waard zijn om de index opnieuw aan te maken zodat deze veranderingen effect hebben.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Hier kan je definiëren welke zoekachtergrond gebruikt zal worden voor het indexeren van berichten en het uitvoeren van zoekopdrachten. Je kan verschillende opties instellen die van invloed zijn hoeveel verwerkingskracht deze acties mogen benutten. Sommige instellingen zijn hetzelfde voor alle zoekachtergronden.',

	'COMMON_WORD_THRESHOLD'					=> 'Drempel voor vaak voorkomende woorden',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Woorden die een groter percentage bevatten van alle berichten zullen worden gezien als vaak voorkomend. Vaak voorkomende woorden worden genegeerd in zoekopdrachten. Stel dit in op 0 om dit uit te schakelen. Dit heeft alleen effect als er meer dan 100 berichten zijn. Als je wilt dat woorden die momenteel gezien worden als vaak voorkomend alsnog worden opgenomen, zal je de index moeten herbouwen.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Weet je zeker dat je wilt overstappen op een andere zoekachtergrond? Na het veranderen van de zoekachtergrond zal je een index moeten aanmaken voor de nieuwe zoekachtergrond. Als je niet van plan bent om terug te gaan naar de oude zoekachtergrond, kan je ook de oude zoekachtergrond index verwijderen om systeembronnen vrij te maken.',
	'CONTINUE_DELETING_INDEX'				=> 'Doorgaan met vorige index verwijderingsproces',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Een index verwijderingsproces is gestart. Om toegang te krijgen tot de zoekindexpagina zal je dit moeten voltooien of afbreken.',
	'CONTINUE_INDEXING'						=> 'Doorgaan met vorige indexproces',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Een indexproces is gestart. Om toegang te krijgen tot de zoekindexpagina zal je dit moeten voltooien of afbreken.',
	'CREATE_INDEX'							=> 'Index aanmaken',

	'DELETE_INDEX'							=> 'Index verwijderen',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Het verwijderen van de index is bezig',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'De zoekachtergrond is momenteel zijn index aan het opschonen. Dit kan enkele minuten duren.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'De “MySQL fulltext”-achtergrond kan alleen gebruikt worden met MySQL4 en hoger.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext indexen kunnen alleen gebruikt worden met MyISAM of InnoDB tabellen. MySQL 5.6.4 of hoger is vereist voor fulltext indexen op InnoDB tabellen.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Totaal aantal geïndexeerde berichten',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Woorden met tenminste dit aantal tekens zullen worden geïndexeerd in de zoekindex. Jij of je host kan alleen deze instelling wijzigen door de MySQL-configuratie te wijzigen.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Woorden met niet meer dan dit aantal tekens zullen worden geïndexeerd in de zoekindex. Jij of je host kan alleen deze instelling wijzigen door de MySQL-configuratie te wijzigen.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'De PostgreSQL fulltext achtergrond kan alleen gebruikt worden met PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Totaal aantal geïndexeerde berichten',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL versie',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Tekst zoek configuratieprofiel:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimum woordlengte voor trefwoorden',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximum woordlengte voor trefwoorden',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Deze zoekachtergrond heeft PostgreSQL versie 8.3 en hoger nodig.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'De Tekst zoek configuratieprofiel dat gebruikt wordt om de verwerker en woordenboek te bepalen.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Woorden met meer dan dit aantal tekens zullen worden geïndexeerd in de query van de database.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Woorden met niet meer dan dit aantal tekens zullen worden geïndexeerd in de query van de database.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Configureer de volgende instellingen om het sphinx config bestand aan te maken.',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Pad naar datamap',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Het zal gebruikt worden om de indexen en logbestanden op te slaan. Je kan deze map aanmaken buiten de webtoegankelijke mappen (moet een backslash hebben)', //trailling slash is volgens mij backslash toch?
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Aantal berichten in de vaak bijgewerkte delta index',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx zoek daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host waarop de sphinx zoek daemon (searchd) luistert. Laat leeg om de standaard localhost te gebruiken',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer geheugenlimiet',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Dit aantal moet ten alle tijden lager zijn dan de RAM die beschikbaar is op je server. Als je periodieke prestatie problemen ondervindt kan dit komen doordat de indexer te veel bronnen gebruikt. Het kan helpen om de hoeveelheid geheugen te verlagen die beschikbaar is voor de indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Aantal berichten in de hoofdindex',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx zoek daemon poort',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Poort waarop de sphinx zoek daemon (searchd) luistert. Laat leeg om de standaard Sphinx API poort 9312 te gebruiken',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'De sphinx zoekfunctie voor phpBB ondersteunt alleen MySQL en PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx config bestand',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'De gegenereerde inhoud van het sphinx config bestand. Deze data zal geplakt moeten worden in de sphinx.conf welke gebruikt wordt door de sphinx zoek daemon. Vervang de [dbuser] en [dbpassword] met je eigen databasegegevens.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Het pad naar de sphinx data map is niet opgegeven. Geef het pad op en verstuur het om een config-bestand te generen.',	

	'GENERAL_SEARCH_SETTINGS'				=> 'Algemene zoekinstellingen',
	'GO_TO_SEARCH_INDEX'					=> 'Ga naar zoekindexpagina',

	'INDEX_STATS'							=> 'Index-statistieken',
	'INDEXING_IN_PROGRESS'					=> 'Indexering is bezig',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'De zoekachtergrond is momenteel alle berichten op het forum aan het indexeren. Dit kan van enkele minuten tot een aantal uur duren afhankelijk van je forums grootte.',

	'LIMIT_SEARCH_LOAD'						=> 'Beperking van de systeembelasting voor de zoekpagina',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Als de 1 minuut systeembelasting deze waarde overschrijft dan zal de zoekpagina offline gaan, 1.0 is gelijk aan ~100% van het gebruik van één processor. Dit zal alleen effect hebben op UNIX gebaseerde servers.',

	'MAX_SEARCH_CHARS'						=> 'Maximum aantal tekens die geïndexeerd kunnen worden',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Woorden met niet meer dan dit aantal tekens zullen geïndexeerd worden voor zoekopdrachten.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maximum aantal toegestane trefwoorden',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maximum aantal woorden waarmee de gebruiker kan zoeken. Een waarde van 0 betekent een onbeperkt aantal woorden.',
	'MIN_SEARCH_CHARS'						=> 'Minimum aantal tekens die geïndexeerd kunnen worden',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Woorden met tenminste dit aantal tekens zullen geïndexeerd worden voor zoekopdrachten.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimum aantal tekens auteursnaam',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Gebruikers moeten tenminste dit aantal tekens invoeren van de naam bij het uitvoeren van een zoekopdracht naar een auteur met een jokerv(*). Als de auteur’s gebruikersnaam korter is dan dit aantal, dan kan je nog steeds zoeken naar de auteur’s berichten door de complete gebruikersnaam in te vullen.',

	'PROGRESS_BAR'							=> 'Progressie bar',

	'SEARCH_GUEST_INTERVAL'					=> 'Wachttijd voor gasten tussen zoekopdrachten',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Aantal secondes dat gasten moeten wachten tussen zoekopdrachten. Als één gast aan het zoeken is, zullen anderen moeten wachten totdat deze tijd voorbij is gegaan.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Alle berichten tot berichten-ID %2$d zijn nu geïndexeerd, waarvan er %1$d berichten waren in deze stap.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Het huidge tempo van indexeren is ongeveer %1$.1f berichten per seconde.<br />Indexeren is nog bezig…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Alle berichten tot berichten-ID %2$d zijn verwijderd van de zoekindex.<br />Verwijderen is nog bezig…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Alle berichten in de database succesvol geïndexeerd.',
	'SEARCH_INDEX_REMOVED'					=> 'De zoekindex voor deze achtergrond succesvol verwijderd.',
	'SEARCH_INTERVAL'						=> 'Wachttijd voor gebruikers tussen zoekopdrachten',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Aantal secondes dat gebruikers moeten wachten tussen zoekopdrachten. Deze interval wordt onafhankelijk voor iedere gebruiker gecontroleerd.',
	'SEARCH_STORE_RESULTS'					=> 'Zoekresultaat cache-lengte',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Gecachte zoekresultaten zullen verlopen na deze tijd, in secondes. Stel in op 0 als je de zoekbuffer wilt uitschakelen.',
	'SEARCH_TYPE'							=> 'Zoekachtergrond',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB staat je toe om de achtergrond te kiezen die gebruikt zal worden voor het zoeken van tekst in berichten. Standaard zal het zoeken gebruik maken van phpBB’s eigen fulltext zoeken.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Je hebt van zoekachtergrond gewisseld. Om gebruik te kunnen maken van de nieuwe zoekachtergrond, moet je er zeker van zijn dat er een index is voor de achtergrond die je hebt gekozen.',

	'TOTAL_WORDS'							=> 'Totaal aantal geïndexeerde woorden',
	'TOTAL_MATCHES'							=> 'Totaal aantal geïndexeerde relaties tussen woord en een bericht',

	'YES_SEARCH'							=> 'Zoekfunctie inschakelen',
	'YES_SEARCH_EXPLAIN'					=> 'Schakelt het gebruik van de zoekfunctie inclusief leden zoeken in voor gebruikers.',
	'YES_SEARCH_UPDATE'						=> 'Fulltext bijwerken inschakelen',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Het bijwerken van fulltext-indexen tijdens het plaatsen, overschrijven wanneer zoeken is uitgeschakeld.',
));
