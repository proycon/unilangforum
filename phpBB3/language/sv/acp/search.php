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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Här kan du hantera söksystemens index. Eftersom du i vanliga fall endast använder ett system så bör du ta bort alla index som du inte använder. Efter ändring av vissa av sökinställningarna (t.ex. det maximala/minsta antalet tecken) så kan det vara värt att återskapa indexet för att reflektera dessa ändringar.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Här kan du definiera vilket söksystem som ska användas för att indexera inlägg och utföra sökningar. Du kan ställa in olika alternativ som kan påverka hur mycket behandling som dessa handlingar kräver. Vissa av dessa inställningar är samma för alla sökmotorsystem.',

	'COMMON_WORD_THRESHOLD'					=> 'Tröskel för vanliga ord',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Ord som finns i en större procent av alla inlägg kommer att anses vara vanliga. Vanliga ord ignoreras i sökfrågor. Sätt till 0 för att inaktivera. Fungerar endast om det finns fler än 100 inlägg. Om du vill att ord som anses vara vanliga ska omprovas, så måste du göra om sökindexeringen.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Är du säker på att du vill byta till ett annat söksystem? Efter att du har bytt söksystem måste du skapa ett index för det nya söksystemet. Om du inte planerar att gå tillbaka till det gamla söksystemet kan du ta bort det gamla systemets index för att frigöra systemresurser.',
	'CONTINUE_DELETING_INDEX'				=> 'Fortsätt tidigare indexborttagningsprocess',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'En indexborttagningsprocess har startats. För att komma åt sökindexsidan måste du antingen slutföra den eller avbryta den.',
	'CONTINUE_INDEXING'						=> 'Fortsätt tidigare indexeringsprocess',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'En indexeringsprocess har startats. För att komma åt sökindexsidan måste du antingen slutföra den eller avbryta den.',
	'CREATE_INDEX'							=> 'Skapa index',

	'DELETE_INDEX'							=> 'Ta bort index',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Indexborttagning pågår',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Söksystemet rensar för närvarande indexet. Detta kan ta några minuter.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltextsystemet kan endast användas med MySQL4 och senare.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltextindex kan endast användas med MyISAM eller InnoDB tabeller. MySQL 5.6.4 eller senare krävs för fulltext indexering på InnoDB tabeller.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Totalt antal indexerade inlägg',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Ord med minst så här många tecken kommer att indexeras som sökbara. Du eller din värd kan ändra detta enbart genom att ändra på MySQL-konfigurationen.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Maximalt antal tecken i ord som indexeras som sökbara. Du eller din värd kan ändra detta enbart genom att ändra på MySQL-konfigurationen.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'   => 'PostgreSQL fulltext backend kan endast användas med PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'         => 'Totalt antal indexerade inlägg',
	'FULLTEXT_POSTGRES_VERSION_CHECK'      => 'PostgreSQL version',
	'FULLTEXT_POSTGRES_TS_NAME'            => 'Konfigureringsprofil för textsökning:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'         => 'Minimal ordlängd för nyckelord',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'         => 'Maximal ordlängd för nyckelord',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'      => 'Denna sökningsbackend kräver PostgreSQL version 8.3 eller högre.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'            => 'Konfigureringsprofilen för textsökningen som används för att fastställa parser och ordbok.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'         => 'Ord med minst detta antal tecken kommer att användas vid sökning i databasen.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'         => 'Ord med högst detta antal tecken kommer att användas vid sökning i databasen.',

	'FULLTEXT_SPHINX_CONFIGURE'            => 'Konfigurera följande inställningar för att generera en sphinx-konfigureringsfil',
	'FULLTEXT_SPHINX_DATA_PATH'            => 'Sökväg till datakatalogen',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'      => 'Denna sökväg kommer att användas som mål för att spara index och loggfiler. Du bör skapa denna katalog utanför kataloger som kan kommas åt via webben (bör avslutas med en slash).',
	'FULLTEXT_SPHINX_DELTA_POSTS'         => 'Antal inlägg i ofta uppdaterade delta index',
	'FULLTEXT_SPHINX_HOST'               => 'Sphinx sökmotor daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'         => 'Host som sphinx sökmotor daemon (searchd) lyssnar av. Lämna tomt för att använda standard localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'      => 'Indexeringens minnesbegränsning',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'   => 'Detta värde bör alltid vara lägre än RAM-minnet som står till förfogande. Om du då och då lägger märke till performance-svackor så kan detta bero på att indexeringen förbrukar för mycket resurser. Det kan då hjälpa att reducera minnet som står indexeringen till förfogande.',
	'FULLTEXT_SPHINX_MAIN_POSTS'         => 'Antal inlägg i huvudindexet',
	'FULLTEXT_SPHINX_PORT'               => 'Sphinx sökmotor daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'         => 'Port som sphinx sökmotor daemon (searchd) lyssnar av. Lämna tomt för att använda standard Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'      => 'Sphinx sökmotor för phpBB stöder endast MySQL och PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'         => 'Sphinx konfigureringsfil',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'   => 'Innehållet som genererats för sphinx konfigureringsfil. Detta måste kopieras till filen sphinx.conf som används av sphinx sökmotor daemon.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'      => 'Sphinx data och konfigureringssökvägar har ej angivits. Ange dem för att generera konfigureringsfilen.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Allmänna sökinställningar',
	'GO_TO_SEARCH_INDEX'					=> 'Gå till sökindexsidan',

	'INDEX_STATS'							=> 'Indexstatistik',
	'INDEXING_IN_PROGRESS'					=> 'Indexering pågår',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Söksystemet indexerar för närvarande alla inlägg på forumet. Detta kan ta allt från några minuter till några timmar beroende på ditt forums storlek.',

	'LIMIT_SEARCH_LOAD'						=> 'Söksystemets belastningsgräns',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Om systembelastningen under 1 minut överskrider detta värde kommer söksidan inaktiveras, 1.0 är lika med ~100% användning av en processor. Detta fungerar endast på UNIX-baserade servrar.',

	'MAX_SEARCH_CHARS'						=> 'Maximalt antal tecken som indexeras av sökningen',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Ord som inte är längre än så här många tecken kommer att indexeras för sökning.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maximalt antal tillåtna nyckelord',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maximalt antal ord som en användare kan söka på. Värdet 0 tillåter obegränsad mängd nyckelord.',
	'MIN_SEARCH_CHARS'						=> 'Minimum antal tecken som indexeras av sökningen',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Ord med minst så här många tecken kommer att indexeras för sökning.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimum antal tecken för författarnamnssök',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Användare måste ange minst så här många tecken av namnet när de utför en sökning efter författare med jokertecken. Om författarens användarnamn är kortare är detta nummer så går det fortfarande att söka efter författarens inlägg genom att skriva in det fullständiga användarnamnet.',

	'PROGRESS_BAR'							=> 'Indexering pågår',

	'SEARCH_GUEST_INTERVAL'					=> 'Tid mellan gästsökningar',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Antal sekunder gäster måste vänta mellan sökningar. Om en gäst söker så måste alla andra vänta tills tidsintervallen passerats.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Alla inlägg fram till inlägg ID %2$d indexerades, av vilka %1$d inlägg var inom detta steg.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Den nuvarande hastigheten på indexeringen är ungefär %1$.1f inlägg per sekund.<br />Indexering pågår…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Alla inlägg fram till inlägg ID %2$d togs bort från sökindexet.<br />Borttagning pågår…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Indexerade alla inlägg i forumets databas.',
	'SEARCH_INDEX_REMOVED'					=> 'Tog bort sökindexet för detta system.',
	'SEARCH_INTERVAL'						=> 'Tid mellan användarsökningar',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Antal sekunder användare måste vänta mellan sökningar. Denna gräns kontrolleras oberoende för varje användare.',
	'SEARCH_STORE_RESULTS'					=> 'Sökresultatens cache-längd',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Cachade sökresultat kommer att förfalla efter denna tid, i sekunder. Sätt till 0 om du vill inaktivera sökcachning.',
	'SEARCH_TYPE'							=> 'Söksystem',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB låter dig välja systemet som används för att söka i inläggsinnehåll. Som standard används phpBBs egna fulltextsökning.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Du bytte söksystem. För att använda det nya söksystemet bör du försäkra dig om att det finns ett index för det system som du valde.',

	'TOTAL_WORDS'							=> 'Totalt antal indexerade ord',
	'TOTAL_MATCHES'							=> 'Totalt antal ord till inläggsrelationer indexerade',

	'YES_SEARCH'							=> 'Aktivera sökfunktioner',
	'YES_SEARCH_EXPLAIN'					=> 'Aktiverar sökfunktionalitet inklusive medlemssök.',
	'YES_SEARCH_UPDATE'						=> 'Aktivera fulltextuppdatering',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Uppdaterar fulltextindex när postning sker, åsidosätts om sökning är inaktiverat.',
));
