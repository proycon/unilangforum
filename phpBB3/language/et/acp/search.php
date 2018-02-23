<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-14 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Siin saad hallata otsingu indekseid. Kuna tavaliselt kasutada sa vaid ühte backend\'i, kustuta kõik teised indeksid, mida sa ei kasuta. Pärast mõnede otsinguseadete muutmist (näiteks miinimum/maksimum sümbolite arv) võib olla soovitav indeksi taasloomine.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Siin saad määrata, millist backend\'i kasutatakse postituste indekseerimisel ja otsimisel. Võid seada mitmeid valikuid. Mõned seaded on samad kõikidele backend\'idele.',

	'COMMON_WORD_THRESHOLD'					=> 'Tavalise sõnalävi',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Sõnad, mis sisalduvad suures protsendis kõikidest postitustest, loetakse tavalisteks. Tavalisi sõnu ignoreeritakse otsingutes. Kirjuta 0, et keelata. Toimib vaid üle 100 postituse korral. Kui soovid sõnu, mis on tavalised, muuta tagasi, pead uuesti indekseerima.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Kas oled kindel, et soovid vahetada otsingu backend\'i? Pärast selle muutmist pead looma uue indeksi sellele. Kui saei kavatse minna tagasi vana backend\'i peale, võid kustutada vana otsingu indeksi, et süsteemi ressursse vabastada.',
	'CONTINUE_DELETING_INDEX'				=> 'Jätka indeksi eemaldamist',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Indeksi eemaldamisprotsess on käivitatud. Et pääseda otsingu lehele, pead selle lõpule viima või katkestama.',
	'CONTINUE_INDEXING'						=> 'Jätka indekseerimist',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Indekseerimisprotsess on käivitatud. Et pääseda otsingu lehele, pead selle lõpule viima või katkestama.',
	'CREATE_INDEX'							=> 'Loo indeks',

	'DELETE_INDEX'							=> 'Kustuta indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Indeksi kustutamine käivitatud',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Otsingu backend puhastab hetkel oma indeksit. See võib võtta mõne minuti.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltext backend\'it saab kasutada ainult koos MySQL4 ja sellest kõrgemaga.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext indekseid saab kasutada ainult koos MyISAM või InnoDB tabelitega. MySQL 5.6.8 või sellest kõrgem on nõutud fulltext indeksite InnoDB tabelites.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Indekseeritud postituste koguarv',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Sõnad, milles on minimaalselt siinsisestatud arv sümboleid, kaastakse otsingusse. Sina või sinu host saab ainult neid seadeid muuta.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Sõnad, milles on maksimaalselt siinsisestatud arv sümboleid, kaastakse otsingusse. Sina või sinu host saab ainult neid seadeid muuta.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL fulltext backend\'it saab kasutada ainult koos PostgreSQL\'iga.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Indekseeritud postituste koguarv',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL versioon',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Teksti otsing konfiguratsiooni profiilis:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimaalne sõna pikkus märksõnade jaoks',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maksimaalne sõna pikkus märksõnade jaoks',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'See otsingu backend nõuab PostgreSQL versiooni 8.3 või sellest kõrgemat.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'The Text search configuration profile used to determine the parser and dictionary.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Words with at least this many characters will be included in the query to the database.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Words with no more than this many characters will be included in the query to the database.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Seadista järgmised seaded, et genereerida sphinx konfiguratsiooni fail',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Tee andmete kataloogi',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Kasutatakse, et salvestada indeksite ja logi faile. Sa peaksid looma antud kataloogi väljapoole veebi kättesaadavust. (peaks olema kaldkriipsuga)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Number of posts in frequently updated delta index',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx otsingu daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memory limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Postituste arv pealehel',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx otsingu daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'The sphinx search for phpBB supports MySQL and PostgreSQL only.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx konfiguratsiooni fail',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon. Replace the [dbuser] and [dbpassword] placeholders with your database credentials.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'The sphinx data directory path is not defined. Please define the path and submit to generate the config file.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Üldised otsingu seaded',
	'GO_TO_SEARCH_INDEX'					=> 'Mine otsingulehele',

	'INDEX_STATS'							=> 'Indeksi statistika',
	'INDEXING_IN_PROGRESS'					=> 'Indekserimine on töös',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Otsingu backend indekseerib hetkel kõiki foorumi postitusi. Selleks võib kuluda mitu minutit kuni mitu tundi, olenevalt foorumi suurusest.',

	'LIMIT_SEARCH_LOAD'						=> 'Otsingulehe süsteemi laadimise limiit',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Kui 1-minutiline süsteemi laadimine ületab selle väärtuse, läheb otsinguleht maha. 1.0 võrdub ~100% utilisatsiooni ühe protsessori kohta. See toimib vaid UNIX serverites.',

	'MAX_SEARCH_CHARS'						=> 'Maksimumarv sümboleid, mida otsingus indekseeritakse',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Sõnad, kus on vähem või võrdne arv sümboleid, mis siin valikus määratud, indekseeritakse otsimiseks',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksimumarv lubatud otsisõnu',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksimumarv sõnu, mille järgi kasutaja saab otsida. 0 lubab piiramatul arvul sõnu.',
	'MIN_SEARCH_CHARS'						=> 'Miinimumarv sümboleid, mida otsingus indekseeritakse',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Sõnad kus on rohkem või võrdne arv sümboleid, mis siin valikus määratud, indekseeritakse otsimiseks.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Miinimumarv autori nime sümboleid',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Kasutajad peavad sisestama vähemalt niipalju sümboleid nimesse, kui sooritavad wildcard\'iga autoriotsingut. Kui autori kasutajanimi on lühem, kui siinmääratud väärtus, saad teda otsida, sisestades tema kasutajanime.',

	'PROGRESS_BAR'							=> 'Edenemisriba',

	'SEARCH_GUEST_INTERVAL'					=> 'Külaliste otsingu intervall',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Arv sekundites, mis on otsingute intervall külalistele. Kui üks külaline otsib, peavad teised ootama selle aja möödumist.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Kõik postitused kuni ID\'ni %2$d on indekseeritud, millest %1$d postitust selles indekseerimises.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Praegune indekseerimissagedus on umbes %1$.1f postitust sekundis.<br />Indekseerimine on töös…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Kõik postitused kuni ID\'ni %2$d on eemaldatud otsingu indeksist.<br />Kustutamine on töös…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Kõik postitused andmebaasis indekseeritud.',
	'SEARCH_INDEX_REMOVED'					=> 'Otsinguindeks sellele backend\'ile kustutatud.',
	'SEARCH_INTERVAL'						=> 'Kasutaja otsingu intervall',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Arv sekundites, mis on otsingute intervall kasutjale. See intervall on eraldi igale kasutajale.',
	'SEARCH_STORE_RESULTS'					=> 'Otsingutulemite vahemälu pikkus',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Vahemällu salvestatud otsingutulemid aeguvad peale selle aja möödumist sekundites. Kirjuta 0, kui soovid keelata vahemälu otsingutulemitel.',
	'SEARCH_TYPE'							=> 'Otsingu backend',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB lubab sul valida ühe backend\'i, mida kasutatakse otsingul. Vaikimisi kasutab phpBB oma fulltext backend\'i.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Vahetasid otsingu backend\'i. Et kasutada seda, peaksid olema kindel, et sellele backend\'ile on indeks.',

	'TOTAL_WORDS'							=> 'Indekseeritud sõnade koguarv',
	'TOTAL_MATCHES'							=> 'Indekseeritud "Sõna-postituse" suhte koguarv.',

	'YES_SEARCH'							=> 'Luba mitmed otsinguvõimalused',
	'YES_SEARCH_EXPLAIN'					=> 'Lubada kasutada mitut täpset otsingut, sh kasutajate otsing.',
	'YES_SEARCH_UPDATE'						=> 'Luba fulltext uuendamine',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Fulltext uuendamine postitades, kirjutatakse üle, kui otsing on keelatud.',
));
