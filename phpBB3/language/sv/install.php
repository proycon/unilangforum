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
	'ADMIN_CONFIG'				=> 'Konfiguration av administrationskontot',
	'ADMIN_PASSWORD'			=> 'Administratörens lösenord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bekräfta administratörens lösenord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Ange ett lösenord som består av 6 till 30 tecken.',
	'ADMIN_TEST'				=> 'Kontrollera konfigurationen av administrationskontot',
	'ADMIN_USERNAME'			=> 'Administratörens användarnamn',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Ange ett användarnamn som består av 3 till 20 tecken.',
	'APP_MAGICK'				=> 'Stöd för Imagemagick [ Bilagor ]',
	'AUTHOR_NOTES'				=> 'Författaranteckningar<br />» %s',
	'AVAILABLE'					=> 'Tillgänglig',
	'AVAILABLE_CONVERTORS'		=> 'Tillgängliga konverterare',

	'BEGIN_CONVERT'					=> 'Starta konverteringen',
	'BLANK_PREFIX_FOUND'			=> 'En analys av dina tabeller visar att du har en giltig installation som inte har något tabellprefix.',
	'BOARD_NOT_INSTALLED'			=> 'Ingen installation hittades',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB Unified Convertor Framework kräver en vanlig installation av phpBB3 för att fungera, <a href="%s">fortsätt genom att först installera phpBB3</a>.',
	'BACKUP_NOTICE'					=> 'Gör en säkerheetskopia på ditt forum före du uppgraderar för att försäkra dig om att kunna återställa ditt forum ifall det uppstår problem under uppgraderingsprocessen.',
	 
	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Cachetyp',
	'CACHE_STORE_EXPLAIN'		=> 'Den fysiska plats där data lagras tillfälligt, filsystem är att föredra.',
	'CAT_CONVERT'				=> 'Konvertera',
	'CAT_INSTALL'				=> 'Installera',
	'CAT_OVERVIEW'				=> 'Översikt',
	'CAT_UPDATE'				=> 'Uppdatera',
	'CHANGE'					=> 'Ändra',
	'CHECK_TABLE_PREFIX'		=> 'Kontrollera ditt tabellprefix och försök igen.',
	'CLEAN_VERIFY'				=> 'Städar upp och bekräftar den slutgiltiga strukturen',
	'CLEANING_USERNAMES'		=> 'Städar användarnamn',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> är det städade användarnamnet för:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Kolliderande användarnamn hittades på ditt gamla forum. För att slutföra konverteringen ta bort eller byt namn på dessa användare så att det endast finns en användare på ditt gamla forum för varje städade användarnamn.',
	'COLLIDING_USER'			=> '» användarid: <strong>%d</strong> användarnamn: <strong>%s</strong> (%d inlägg)',
	'CONFIG_CONVERT'			=> 'Konverterar konfigurationen',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Det gick inte att skapa konfigurationsfilen. Alternativa metoder för att skapa denna fil finns nedan.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfigurationsfilen har skapats. Du kan nu fortsätta till nästa steg av installationen.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3-konfigurationsvariabeln för “%s” är tom.',
	'CONFIG_RETRY'				=> 'Försök igen',
	'CONTINUE_CONVERT'			=> 'Fortsätt konverteringen',
	'CONTINUE_CONVERT_BODY'		=> 'Ett tidigare konverteringsförsök har upptäckts. Du kan nu välja mellan att starta en ny konvertering eller fortsätta med den påbörjade.',
	'CONTINUE_LAST'				=> 'Fortsätt med de sista uppgifterna',
	'CONTINUE_OLD_CONVERSION'	=> 'Fortsätt tidigare påbörjad konvertering',
	'CONVERT'					=> 'Konvertera',
	'CONVERT_COMPLETE'			=> 'Konvertering slutförd',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Du har nu konverterat ditt forum till phpBB 3.1! Du kan nu logga in på ditt forum. Försäkra dig om att inställningarna överförts korrekt innan du aktiverar ditt forum genom att ta bort install-katalogen. Kom ihåg att hjälp för hur man använder phpBB finns att få i <a href="https://www.phpbb.com/support/documentation/3.0/">dokumentationen</a>, på det <a href="https://www.phpbb.com/community/viewforum.php?f=46">engelska supportforumet</a> och på det svenska supportforumet.',
	'CONVERT_INTRO'				=> 'Välkommen till phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Härifrån kan du importera data från andra (installerade) forumsystem. Listan nedan visar alla konverteringsmoduler som finns för tillfället. Om det inte finns någon konverterare nedan för den forumprogramvara du vill konvertera från, besök vår webbplats där flera konverteringsmoduler kan finnas tillgängliga för nedladdning.',
	'CONVERT_NEW_CONVERSION'	=> 'Ny konvertering',
	'CONVERT_NOT_EXIST'			=> 'Den angivna konverteraren finns inte.',
	'CONVERT_OPTIONS'			=> 'Alternativ',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informationen du angivit har bekräftats. Klicka på knappen nedan för att starta konverteringsprocessen.',
	'CONV_ERR_FATAL'			=> 'Fatalt konverteringsfel',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-uppladdning av bilagor är aktiverat på det gamla forumet. Inaktivera FTP-uppladdning och försäkra dig om att ett giltig uppladdningskatalog är angiven. Kopiera sen alla bifogade filer till den nya katalogen som ska vara tillgänglig från webben. Starta om konverteraren efter att du har gjort detta.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Det finns ingen konfigurationsinformation tillgänglig för konverteringen.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kunde inte hämta information om kategoriåtkomst.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kunde inte hämta huvudkategorier.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kunde inte hämta din forumkonfiguration.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Kunde inte komma åt/läsa “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kunde inte hämta gruppautentiseringsinformation.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inkonsekvens i tabellen "groups" upptäcktes i add_bots() - du måste lägga till alla specialgrupper om du gör det manuellt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kunde inte infoga robot i tabellen users.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kunde inte infoga robot i tabellen bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kunde inte infoga användare i tabellen user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Meddelandetolkningsfel',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Påpekande till utvecklaren: du måste ange $convertor[\'avatar_path\'] för att använda %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Den relativa sökvägen till källforumet har inte angivits.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Påpekande till utvecklaren: du måste ange $convertor[\'avatar_gallery_path\'] för att använda %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppen “%1$s” kunde inte hittas i %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Påpekande till utvecklaren: du måste ange $convertor[\'ranks_path\'] för att använda %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Påpekande till utvecklaren: du måste ange $convertor[\'smilies_path\'] för att använda %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Påpekande till utvecklaren: du måste ange $convertor[\'upload_path\'] för att använda %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kunde inte infoga/uppdatera behörighetsinställningar.',
	'CONV_ERROR_PM_COUNT'				=> 'Kunde inte välja PM-antal för mapp.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kunde inte infoga ny kategori som skulle ersätta gammal huvudkategori.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kunde inte infoga ny kategori som skulle ersätta gammal kategori.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kunde inte hämta användarautentiseringsinformation.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Fel grupp “%1$s” definierad i %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Denna sida samlar in den data som krävs för att komma åt källforumet. Ange databasdetaljerna till ditt föregående forum; konverteraren kommer inte att ändra någonting i databasen som anges nedan. Källforumet bör inaktiveras för att konverteringen ska bli konsekvent.',
	'CONV_SAVED_MESSAGES'				=> 'Sparade meddelanden',
	'COULD_NOT_COPY'			=> 'Kunde inte kopiera filen <strong>%1$s</strong> till <strong>%2$s</strong><br /><br />Kontrollera att målkatalogen finns och kan skrivas till av webbservern.',
	'COULD_NOT_FIND_PATH'		=> 'Kunde inte hitta sökvägen till ditta förra forum. Kontrollera dina inställningar och försök igen.<br />» %s var den angivna källsökvägen.',

	'DBMS'						=> 'Databastyp',
	'DB_CONFIG'					=> 'Databaskonfiguration',
	'DB_CONNECTION'				=> 'Databasanslutning',
	'DB_ERR_INSERT'				=> 'Fel under behandling av <code>INSERT</code> fråga.',
	'DB_ERR_LAST'				=> 'Fel under behandling av <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fel under utförande av <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fel under utförande av <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Fel under körning av <code>SELECT</code> fråga.',
	'DB_HOST'					=> 'Värdnamn för databasserver eller DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN står för Data Source Name och är endast relevant för ODBC installationer. För PostgreSQL; Använd localhost för att ansluta till den lokala servern via UNIX  domain socket och 127.0.0.1 för att ansluta med TCP. För SQLite anger du hela sökvägen till din databasfil.',
	'DB_NAME'					=> 'Databasnamn',
	'DB_PASSWORD'				=> 'Databaslösenord',
	'DB_PORT'					=> 'Databasserverport',
	'DB_PORT_EXPLAIN'			=> 'Lämna detta tomt om du inte vet att servern opererar på en port som inte är standard.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Tyvärr så uppdaterar detta skript inte phpBB-versioner som är tidigare än “%1$s”. Du använder för tillfället version “%2$s”. Var god uppdatera till en tidigare version före du använder detta skript. Hjälp med detta fås på supportforumet på phpbb.com eller på svenska supportforumet.',
	'DB_USERNAME'				=> 'Databasanvändarnamn',
	'DB_TEST'					=> 'Testa anslutning',
	'DEFAULT_LANG'				=> 'Standardforumspråk',
	'DEFAULT_PREFIX_IS'			=> 'Konverteraren kunde inte hitta tabeller med det angivna prefixet. Försäkra dig om att du angav korrekt information för forumet du konverterar från. Standardtabellprefixet för %1$s är <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Inga värden angavs för test_file-variabeln i konverteraren. Om du är användaren av denna konverterare så ska du inte se detta fel, rapportera detta meddelande till författaren av konverteraren. Om du är författaren av konverteraren så måste du ange namnet för filen som finns i källforumet så att sökvägen kan bekräftas.',
	'DIRECTORIES_AND_FILES'		=> 'Katalog- och filinställning',
	'DISABLE_KEYS'				=> 'Inaktiverar nycklar',
	'DLL_FTP'					=> 'Stöd för fjärr-FTP [ Installation ]',
	'DLL_GD'					=> 'Stöd för GD-grafik [ Visuell bekräftelse ]',
	'DLL_MBSTRING'				=> 'Teckenstöd för Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000via ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'XML-stöd [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib komprimeringsstöd [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Ladda ner config.php',
	'DL_CONFIG_EXPLAIN'			=> 'Du kan ladda ner den fullständiga config.php till din egen PC. Du kan sedan ladda upp filen manuellt och ersätta eventuell redan existerande config.php i ditt phpBB 3.0 rot-katalog. Kom ihåg att ladda upp filen i ASCII-format (se dokumentationen till ditt FTP-program om du är osäker på hur man gör detta). När du har laddat upp config.php klicka på “Klar” för att gå till nästa sida.',
	'DL_DOWNLOAD'				=> 'Ladda ner',
	'DONE'						=> 'Klart',

	'ENABLE_KEYS'				=> 'Återaktiverar nycklar. Detta kan ta ett tag.',

	'FILES_OPTIONAL'			=> 'Frivilliga filer och kataloger',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Frivilligt</strong> - Dessa filer, kataloger eller behörighetsinställningar är inte obligatoriska. Installationssystemet kommer att försöka använda olika tekniker för att skapa dessa om dem inte finns eller inte kan skrivas till. Dock kommer installationen snabbas upp om dessa redan finns.',
	'FILES_REQUIRED'			=> 'Filer och kataloger',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obligatoriskt</strong> - För att phpBB ska fungera korrekt så måste phpBB kunna komma åt eller skriva till vissa filer och kataloger. Om du ser “Hittas inte” nedan så måste du skapa den relevanta filen eller katalogen. Om du ser “Ej skrivbar” nedan så måste du ändra behörigheterna på filen eller katalogen så att phpBB kan skriva till den.',
	'FILLING_TABLE'				=> 'Fyller tabell <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Fyller tabeller',
		
	'FINAL_STEP'				=> 'Utför sista steget',
	'FORUM_ADDRESS'				=> 'Forumadress',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Detta är URL:en till ditt föregående forum, till exempel <samp>http://www.example.com/phpBB2/</samp>. Om en adress skrivs in här och detta inte lämnas tomt så kommer varje förekomst av denna adress ersättas med din nya forumadress inom inlägg, personliga meddelanden och signaturer.',
	'FORUM_PATH'				=> 'Forumsökväg',
	'FORUM_PATH_EXPLAIN'		=> 'Detta är den <strong>relativa</strong> sökvägen till ditt föregående forum från <strong>roten av din phpBB3 installation</strong>.',
	'FOUND'						=> 'Hittades',
	'FTP_CONFIG'				=> 'Överför config.php via FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB har upptäckt FTP-modulen på denna server. Du kan försöka installera din config.php via detta om du vill. Du måste ange informationen nedan. Kom ihåg att användarnamnet och lösenordet är samma som till din server! (fråga ditt webbhotell om du är osäker på vad dessa är)',
	'FTP_PATH'					=> 'FTP-sökväg',
	'FTP_PATH_EXPLAIN'			=> 'Detta är sökvägen från din rotkatalog till phpBB, t.ex. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Ladda upp',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Grundläggande konfiguration',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nu när installationen har bekräftat att din server kan köra phpBB så måste du ange en del specifik information. Om du inte vet hur du ansluter till din databas kontakta först och främst ditt webbhoteell eller använd phpBBs supportforum. När du anger data kom ihåg att kontrollera den noggrant innan du fortsätter.',
	'INSTALL_CONGRATS'			=> 'Grattis!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Du har nu installerat phpBB %1$s. Var god, fortsätt genom att välja ett av följande alernativ:</p>
		<h2>Konvertera ett existerande forum till phpBB3.</h2>
		<p>phpBB Unified Convertor Framework stödjer konvertering av phpBB 2.0.x och andra forumsystem till phpBB3. Om du har ett existerande forum som du vill konvertera, <a href="%2$s">gå vidare till konverteraren</a>.</p>
		<h2>Börja använda ditt phpBB3!</h2>
		<p>Klicka på knappen nedan. Du kommer då att tas till ett formulär i administrationspanelen för ditt nya forum, formuläret tillåter dig att skicka statistik till phpBB. Vi uppskattar den hjälp du ger genom att fylla i dessa uppgifter. Ta dig sedan tid att utforska alla tillgängliga alternativ och inställningar. Kom ihåg att hjälp finns att få online i dokumentationen, på det <a href="https://www.phpbb.com/community/viewforum.php?f=46">engelska supportforumet</a> och på det svenska supportforumet Se även <a href="%3$s">README</a> för mer information.</p><p><strong>Ta nu bort, byt namn på eller flytta install-katalogen innan du använder ditt forum. Om denna katalog finns kvar kommer endast administrationspanelen att vara tillgänglig.</strong>',
	'INSTALL_INTRO'				=> 'Välkommen till installationen',
	
	'INSTALL_INTRO_BODY'		=> 'Med detta alternativ så kan du installera phpBB3 på sin server.</p><p>För att fortsätta så måste du ha dina databasinställningar till hands. Om du inte känner till dina databasinställningar, kontakta ditt webbhotell och fråga efter dem. Du kan inte fortsätta utan de. Du behöver:</p>
	<ul>
		<li>Databastypen - databasen som du kommer att använda.</li>
		<li>Databasens servervärdnamn eller DSN - adressen till databasservern.</li>
		<li>Databasens serverport - porten för databasservern (i de flesta fall behövs inte detta).</li>
		<li>Databasnamnet - namnet på databasen på servern.</li>
		<li>Databasens användarnamn och lösenord - inloggningsinformationen för att komma åt databasen.</li>
	</ul>
	<p><strong>Observera:</strong> om du installerar med SQLite ska du ange den fullständiga sökvägen till din databasfil i DSN-fältet och lämna användarnamn och lösenordsfälten tomma. Av säkerhetsskäl bör du se till att databasfilen inte är lagrad på en plats som kan nås från webben.</p>

	<p>phpBB3 stödjer följande databaser:</p>
	<ul>
		<li>MySQL 3.23 eller nyare (MySQLi stöds)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 eller nyare (direkt eller via ODBC)</li>
		<li>MS SQL Server 2005 eller nyare (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Endast de databaser som din server stödjer kommer att visas.',
	'INSTALL_INTRO_NEXT'		=> 'För att starta installationen, tryck på knappen nedan.',
	'INSTALL_LOGIN'				=> 'Logga in',
	'INSTALL_NEXT'				=> 'Nästa steg',
	'INSTALL_NEXT_FAIL'			=> 'Några tester misslyckades och du bör åtgärda dessa problem innan du fortsätter till nästa steg. Om du inte gör det så kan det resultera i en felaktig installation.',
	'INSTALL_NEXT_PASS'			=> 'Alla grundläggande tester lyckades och du kan nu fortsätta till nästa steg av installationen. Om du har ändrat några behörigheter, moduler, osv. och vill testa igen så kan du göra det.',
	'INSTALL_PANEL'				=> 'Installationspanel',
	'INSTALL_SEND_CONFIG'		=> 'Tyvärr kunde inte phpBB skriva konfigurationsinformationen direkt till config.php. Detta kan bero på att filen inte finns eller inte är skrivbar. Ett antal alternativ för att slutföra installationen av config.php visas nedan.',
	'INSTALL_START'				=> 'Starta installationen',
	'INSTALL_TEST'				=> 'Testa igen',
	'INST_ERR'					=> 'Installationsfel',
	'INST_ERR_DB_CONNECT'		=> 'Kunde inte ansluta till databasen, se felmeddelande nedan.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Databasfilen du angivit finns inom ditt forums katalogträd. Du bör placera denna fil i en plats som inte är tillgänglig från webben.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Prefixet du angav är felaktigt. Det får bara innehåll alfanumeriskt tecken (a-z + A-Z + 0-9) och understreck (_).',
	'INST_ERR_DB_NO_ERROR'		=> 'Inget felmeddelande gavs.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versionen av MySQL som är installerad på denna maskin är inte kompatibel med “MySQL with MySQLi Extension”-alternativet som du har valt. Försök med “MySQL”-alternativet istället.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Versionen av SQLite som du har installerad är för gammal, den måste uppgraderas till minst 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Versionen av SQLite tillägget som du har installerad är för gammal, den måste uppgraderas till minst 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Versionen av Oracle som är installerad på denna maskin kräver att du ställer in <var>NLS_CHARACTERSET</var>-parametern till <var>UTF8</var>. Uppgradera din installation till 9.2eller ändra parametern.',

	'INST_ERR_DB_NO_POSTGRES'	=> 'Databasen du har valt skapades inte med <var>UNICODE</var> eller <var>UTF8</var> kodning. Försök installera med en databas med <var>UNICODE</var> eller <var>UTF8</var> kodning.',
	'INST_ERR_DB_NO_NAME'		=> 'Inget databasnamn angavs.',
	'INST_ERR_EMAIL_INVALID'	=> 'E-postadressen du angav är ogiltig.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'E-postadresserna du angav stämmer inte överens.',
	'INST_ERR_FATAL'			=> 'Fatalt installationsfel',
	'INST_ERR_FATAL_DB'			=> 'Ett fatalt databasfel har uppstått. Detta kan bero på att den angivna användaren inte har den behörighet som krävs för att köra <code>CREATE TABLES</code> eller <code>INSERT</code>, osv. Mer information kan ges nedan. Kontakta först och främst ditt webbhotell eller supportforumen på phpBB.com för hjälp.',
	'INST_ERR_FTP_PATH'			=> 'Kunde inte ändra till den givna katalogen, kontrollera sökvägen.',
	'INST_ERR_FTP_LOGIN'		=> 'Kunde inte logga in på FTP-servern, kontrollera ditt användarnamn och lösenord.',
	'INST_ERR_MISSING_DATA'		=> 'Du måste fylla i alla fält i detta block.',
	'INST_ERR_NO_DB'			=> 'Kunde inte ladda PHP-modulen för den valda databastypen.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Lösenorden du angav stämmer inte överens.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Lösenordet du angav är för långt. Det får inte bestå av fler än 30 tecken.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Lösenordet du angav är för kort. Det måste bestå av minst 6 tecken.',
	'INST_ERR_PREFIX'			=> 'Tabeller med det angivna prefixet finns redan, välj ett annat alternativ.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabellprefixet du angav är felaktigt för din databas. Försök med ett annat, ta bort tecken som till exempel <em>-</em>.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Tabellprefixet du angav är för långt. Det får inte bestå av fler än %d tecken.',
	'INST_ERR_USER_TOO_LONG'	=> 'Användarnamnet du angav är för långt. Det får inte bestå av fler än 20 tecken.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Användarnamnet du angav är för kort. Det måste bestå av minst 3 tecken.',
	'INVALID_PRIMARY_KEY'		=> 'Felaktig primärnyckel : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Observera att det här kan ta ett tag... Stoppa inte skriptet.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Kontroll av <samp>mbstring</samp>-extension',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Obligatoriskt</strong> - <samp>mbstring</samp> är en PHP-extension som ger multibytesträngfunktioner. Vissa av mbstrings funktioner är inte kompatibla med phpBB och måste inaktiveras.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funktionen overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> måste vara satt till antingen 0 eller 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent teckenkodning',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> måste vara satt till 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP indata teckenkonvertering',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> måste vara satt till <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP utdata teckenkonvertering',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> måste vara satt till <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Försäkra dig om att denna mapp finns och kan skrivas till av webbservern och försök sedan igen:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Försäkra dig om att dessa mappar finns och kan skrivas till av webbservern och försök sedan igen:<br />»<strong>%s</strong>.',
	'MYSQL_SCHEMA_UPDATE_REQUIRED'		=> 'Ditt MySQL databasschema för phpBB är föråldrat. phpBB hittade ett schema för MySQL 3.x/4.x, men servern körs på MySQL %2$s.<br /><strong>Före du fortsätter med uppdateringen, så bör du uppgradera ditt schema.</strong><br /><br />Läs <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a>. Om du fortfarande har problem efter det, var god använd supportkategorierna på det officialla supportforumet eller för hjälp på svenska; Fråga på det svenska supportforumet.',

	'NAMING_CONFLICT'			=> 'Namnkonflikt: %s och %s är båda alias<br /><br />%s',
	'NEXT_STEP'					=> 'Fortsätt till nästa steg',
	'NOT_FOUND'					=> 'Kan inte hitta',
	'NOT_UNDERSTAND'			=> 'Kunde inte förstå %s #%d, tabell %s (“%s”)',
	'NO_CONVERTORS'				=> 'Inga konverterare finns tillgängliga för användning.',
	'NO_CONVERT_SPECIFIED'		=> 'Ingen konverterare angiven.',
	'NO_LOCATION'				=> 'Kan inte fastställa plats. Om du vet att Imagemagick är installerat kan du ange platsen senare i administrationspanelen',
	'NO_TABLES_FOUND'			=> 'Inga tabeller hittades.',

	'OVERVIEW_BODY'					=> 'Välkommen till phpBB3!<br /><br />phpBB® är den mest använda diskussionsforumlösningen med öppen källkod i världen. phpBB3 är den senaste delen i lång uppställning som började år 2000. Liksom dess föregångare är phpBB3 funktionsrikt, användarvänligt och fullständig support ges av phpBB-teamet. phpBB3 förbättrar starkt på det som gjorde phpBB2 populärt, och lägger till många efterfrågade funktioner som inte funnits i tidigare versioner. Vi hoppas att det kommer att överstiga dina förväntningar.<br /><br />Detta installationssystem kommer att guida dig genom installation av phpBB3, uppdatering till den senaste versionen av phpBB3 från tidigare versioner, samt konvertering till phpBB3 från ett annat diskussionsforumsystem (inklusive phpBB2). För mer information så rekommenderar vi att du läser <a href="../docs/INSTALL.html">installationsguiden</a>.<br /><br />För att läsa phpBB3s licens eller läsa mer om hur man får support och hur vi förhåller oss till det, välj respektive alternativ från sidomenyn. För att fortsätta, välj lämplig flik ovan.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 stöd',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB kommer <strong>inte</strong> att fungera om din PHP-installation inte kompilerats med UTF-8 stöd i PCRE-extension.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-funktionen getimagesize() finns tillgänglig',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obligatoriskt</strong> - För att phpBB ska fungera som det ska så måste getimagesize-funktionen finnas.',
	'PHP_JSON_SUPPORT'        		=> 'PHP JSON support',
	'PHP_JSON_SUPPORT_EXPLAIN'    	=> '<strong>Obligatorisk</strong> - För att phpBB skall fungera korrekt, så måste PHP JSON vara tillgänglig.',
	'PHP_OPTIONAL_MODULE'			=> 'Frivilliga moduler',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Frivilligt</strong> - Dessa moduler eller applikationer är frivilliga. Dock kommer de om de finns tillgängliga att aktivera extra funktioner.',
	'PHP_SUPPORTED_DB'				=> 'Databaser som stöds',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obligatoriskt</strong> - Du måste ha stöd för minst en kompatibel databas inom PHP. Om inga databasmoduler visas som tillgängliga bör du kontakta ditt webbhotell eller granska det relevanta PHP-installationsdokumentet för hjälp.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP-inställningen <var>register_globals</var> är inaktiverad',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB kommer att fungera om denna inställning är aktiverad, men om det är möjligt så är det rekommenderat att register_globals inaktiveras i din PHP-installation av säkerhetsskäl.',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'PHP-version och inställningar',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obligatoriskt</strong> - Du måste köra minst version 5.3.3 av PHP för att installera phpBB. Om <var>safe mode</var> visas nedan så körs din PHP-installation med denna inställning. Detta kommer att resultera i begränsningar på fjärradministration och liknande funktioner.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP-inställningen <var>allow_url_fopen</var> är aktiverad',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Frivilligt</strong> - Denna inställning är frivillig, men vissa phpBB-funktioner, såsom fjärrvisningsbilder, kommer inte att fungera korrekt utan den.',
	'PHP_VERSION_REQD'				=> 'PHP-version >= 5.3.3',
	'POST_ID'						=> 'Inläggs-ID',
	'PREFIX_FOUND'					=> 'En analys av dina tabeller visar att du har en giltig installation som använder <strong>%s</strong> som tabellprefix.',
	'PREPROCESS_STEP'				=> 'Kör för-processfunktioner/frågor',
	'PRE_CONVERT_COMPLETE'			=> 'Alla steg före konvertering har slutförts. Du kan nu starta den riktiga konverteringsprocessen. Kom ihåg att du kan behöva göra och ändra flera saker manuellt. Efter konverteringen, kontrollera framförallt behörigheter, bygg om sökindexet som inte konverterats och försäkra dig även om att filer kopierats korrekt, till exempel visningsbilder och smilies.',
	'PROCESS_LAST'					=> 'Utför sista steget',

	'REFRESH_PAGE'				=> 'Uppdatera sida för att fortsätta konverteringen',
	'REFRESH_PAGE_EXPLAIN'		=> 'Om satt till ja så kommer konverteraren uppdatera sidan för att fortsätta konverteringen automatiskt när ett steg slutförts. Om detta är din första konvertering för att testa och hitta evenutella fel i förväg så föreslår vi att du sätter detta till Nej.',
	'REQUIREMENTS_TITLE'		=> 'Installationskompabilitet',
	'REQUIREMENTS_EXPLAIN'		=> 'Innan du kan fortsätta med installationen kommer phpBB göra några tester på din serverkonfiguration och filer för att kontrollera att du kan installera och köra phpBB. Läs igenom resultaten noggrant och fortsätt inte förrän alla tester passerats. Om du vill använda några av funktionerna som är beroende av de frivilliga testerna så försäkra dig om att dessa tester också passerats.',
	'RETRY_WRITE'				=> 'Försök skriva config.php igen',
	'RETRY_WRITE_EXPLAIN'		=> 'Om du vill så kan du ändra behörigheterna på config.php för att tillåta phpBB att skriva till den. Vill du göra det så kan du klicka på "Försök igen" nedan. Kom ihåg att återställa behörigheterna på config.php när phpBB har installerats klart.',

	'SCRIPT_PATH'				=> 'Skriptsökväg',
	'SCRIPT_PATH_EXPLAIN'		=> 'Sökvägen där phpBB finns, relativt till domännamnet, t.ex. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Välj språk',
	'SERVER_CONFIG'				=> 'Serverkonfiguration',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Sökindexet konverterades inte',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Ditt gamla sökindex konverterades inte. Sökningar kommer alltid att resultera i ett tomt resultat. För att skapa ett nytt sökindex, gå till administrationspanelen, klicka på Underhåll och välj sedan Sökindex från undermenyn.',
	'SELECT_FORUM_GA'			=> 'I phpBB 3.1 är dom globala nyheterna länkade till forumen. Välj ett forum för din globala nyhet (kan ändras senare):',
	'SOFTWARE'					=> 'Forummjukvara',
	'SPECIFY_OPTIONS'			=> 'Ange konverteringsalternativ',
	'STAGE_ADMINISTRATOR'		=> 'Administratörskonfiguration',
	'STAGE_ADVANCED'			=> 'Avancerade inställningar',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Inställningarna på denna sida behövs endast om du vet att du behöver ställa in någonting annorlunda än i normala inställningar. Om du är osäker, fortsätt till nästa sida. Dessa inställningar kan ändras senare i administrationspanelen.',
	'STAGE_CONFIG_FILE'			=> 'Konfigurationsfil',
	'STAGE_CREATE_TABLE'		=> 'Skapar databastabeller',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Databastabellerna som används av phpBB 3.1 har skapats och fyllts med lite inledande data. Fortsätt till nästa sida för att slutföra installationen av phpBB.',
	'STAGE_DATABASE'			=> 'Databasinställningar',
	'STAGE_FINAL'				=> 'Slutskede',
	'STAGE_INTRO'				=> 'Introduktion',
	'STAGE_IN_PROGRESS'			=> 'Konvertering utförs',
	'STAGE_REQUIREMENTS'		=> 'Systemkrav',
	'STAGE_SETTINGS'			=> 'Inställningar',
	'STARTING_CONVERT'			=> 'Börjar konverteringsprocessen',
	'STEP_PERCENT_COMPLETED'	=> 'Steg <strong>%d</strong> av <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introduktion',
	'SUB_LICENSE'				=> 'Licens',
	'SUB_SUPPORT'				=> 'Support',
	'SUCCESSFUL_CONNECT'	=> 'Lyckad anslutning',
	'SUPPORT_BODY'				=> 'Fullständig support ges för den aktuella stabila versionen av phpBB3, utan kostnad. Detta inkluderar:</p><ul><li>installation</li><li>konfiguration</li><li>tekniska frågor</li><li>problem relaterade till potentiella buggar i mjukvaran</li><li>uppdatering från releasekandidater (RC) till den senaste stabila versionen</li><li>konvertering från phpBB 2.0.x till phpBB3</li><li>konvertering från andra diskussionsforummjukvaror till phpBB3 </li></ul><p>Vi rekommenderar användare som fortfarande använder betaversioner av phpBB3 att ersätta sina installationer med en fräsch kopia av den senaste versionen.</p><h2>MODdar / Stilar</h2><p>För problem relaterade till MODdar, posta i lämpligt modifikationsforum.<br />För problem relaterade till stilar, mallar och bildpaket, posta i lämpligt stilforum.<br /><br />Om din fråga är relaterad till ett specifikt paket, posta direkt i tråden dedikerad till paketet.</p><h2>Att få support</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Välkomstpaketet för phpBB</a><br /><a href="https://www.phpbb.com/support/">Supportsektionen</a><br />Snabbstartsguide<br /><br />För att försäkra dig själv om att du håller dig uppdaterad med de senaste nyheterna och versionerna, varför inte <a href="https://www.phpbb.com/support/">prenumerera på vårt nyhetsbrev</a>?<br /><br />',
	'SYNC_FORUMS'					=> 'Startar synkroniseringen av kategorier',
	'SYNC_POST_COUNT'			=> 'Synkroniserar inläggsräknaren',
	'SYNC_POST_COUNT_ID'	=> 'Synkroniserar inläggsräknaren från <var>inlägg</var> %1$s till %2$s.',
	'SYNC_TOPICS'					=> 'Startar synkroniseringen av trådar',
	'SYNC_TOPIC_ID'				=> 'Synkroniserar trådar från <var>topic_id</var> %1$s till %2$s.',

	'TABLES_MISSING'			=> 'Kunde inte hitta dessa tabeller<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix för tabeller i databasen',
	'TABLE_PREFIX_EXPLAIN'		=> 'Prefixet får bara innehåll alfanumeriskt tecken (a-z + A-Z + 0-9) och understreck (_). Det bör inte börja med ett understreck.',
	'TABLE_PREFIX_SAME'		=> 'Tabellprefixet måste vara samma som mjukvaran du konverterar från använder.<br />» Angivet tabellprefix var %s.',
	'TESTS_PASSED'				=> 'Testerna lyckades',
	'TESTS_FAILED'				=> 'Testerna misslyckades',

	'UNABLE_WRITE_LOCK'			=> 'Kunde inte skriva låsningsfil.',
	'UNAVAILABLE'				=> 'Ej tillgänglig',
	'UNWRITABLE'				=> 'Ej skrivbar',
	'UPDATE_TOPICS_POSTED'		=> 'Genererar trådpostningsinformation',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Ett fel uppstod när trådpostningsinformationen skulle genereras. Du kan försöka göra detta igen i administrationspanelen efter att  konverteringen slutförts.',
	'VERIFY_OPTIONS'			=> 'Bekräftar konverteringsinställningar',
	'VERSION'					=> 'Version',

	'WELCOME_INSTALL'			=> 'Välkommen till installationen av phpBB3',
	'WRITABLE'					=> 'Skrivbar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alla filer är av den senaste phpBB versionen. ',
	'ARCHIVE_FILE'				=> 'Källfil inom arkiv',

	'BACK'				=> 'Tillbaka',
	'BINARY_FILE'		=> 'Binär fil',
	'BOT'				=> 'Spindel/Robot',
  
	'CHANGE_CLEAN_NAMES'			=> 'Metoden som används för att försäkra om att ett användarnamn inte används av flera användare har ändrats. Det finns några användare som  har samma namn när de jämförs med denna nya metod. Du måste ta bort eller byta namn på dessa användare för att varje namn endast används av en användare innan du fortsätter.',
	'CHECK_FILES'					=> 'Kontrollera filer',
	'CHECK_FILES_AGAIN'				=> 'Kontrollera filer igen',
	'CHECK_FILES_EXPLAIN'			=> 'I nästa steg kommer alla filer kontrolleras mot uppdateringsfilerna - detta kan ta ett tag om detta är den första filkontrollen.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Enligt din databas är din version den senaste. Du kanske vill fortsätta med filkontrollen för att kontrollera att alla filer verkligen är av den senaste phpBB versionen.',
	'CHECK_UPDATE_DATABASE'			=> 'Fortsätt uppdateringsprocess',
	'COLLECTED_INFORMATION'			=> 'Filinformation',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Listan nedan visar information om filer som behöver uppdateras. Läs informationen innan varje block för att förstå vad de betyder och vad du kanske behöver göra för att utföra en lyckad uppdatering.',
	'COLLECTING_FILE_DIFFS'			=> 'Samlar filskillnader',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Du bör nu <a href="../ucp.php?mode=login">logga in på ditt forum</a> och kontrollera att allt fungerar som det ska. Glöm inte att ta bort, byta namn på eller flytta install-katalogen!',
	'CONTINUE_UPDATE_NOW'			=> 'Fortsätt uppdateringsprocessen nu',// Visas vid slutet av databasuppdateringskriptet ifall uppdateraren anropar.
	'CONTINUE_UPDATE'				=> 'Fortsätt nu uppdateringen',						// Visas efter att filerna laddas upp för att indikera att uppdateringen inte är klar.
	'CURRENT_FILE'					=> 'Början av konflikt - Original kod före updatering.',
	'CURRENT_VERSION'				=> 'Aktuell version',

	'DATABASE_TYPE'						=> 'Databastyp',
	'DATABASE_UPDATE_COMPLETE'			=> 'Databasuppdateraren är färdig!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Fortsätt databasuppdatering',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Databasuppdateringsfilen i install-katalogen är gammal. Försäkra dig om att du laddat upp rätt version av filen.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Databasuppdateringen är ännu inte färdig.',
	'DELETE_USER_REMOVE'				=> 'Ta bort användare och ta bort inlägg',
	'DELETE_USER_RETAIN'				=> 'Ta bort användare men behåll inlägg',
	'DESTINATION'						=> 'Destionationsfil',
	'DIFF_INLINE'						=> 'Inom filen',
	'DIFF_RAW'							=> 'Rå förenad diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kodblock som används i den uppdaterade/nya filen',
	'DIFF_SEP_EXPLAIN'					=> 'Code block used within the updated/new file',

	'DIFF_SEP_EXPLAIN'					=> 'Slut på aktuell originalfil / Början på ny uppdaterad fil',
	'DIFF_SIDE_BY_SIDE'					=> 'Sida vid sida',
	'DIFF_UNIFIED'						=> 'Förenad diff',
	'DO_NOT_UPDATE'						=> 'Uppdatera inte denna fil',
	'DONE'								=> 'Klar',
	'DOWNLOAD'							=> 'Ladda ner',
	'DOWNLOAD_AS'						=> 'Ladda ner som',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Ladda ner modifierat filarkiv (rekommenderas)',
	'DOWNLOAD_CONFLICTS'				=> 'Ladda ner konflikterna för denna fil',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Sök efter &lt;&lt;&lt; för att hitta konflikter',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Ladda ner modifierat filarkiv',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'När du laddat ner klart så packar du upp arkivet. Du kommer i den att hitta de ändrade filerna som du måste ladda upp till din phpBB-rotkatalog. Ladda upp filerna till deras respektive plats. När du laddat upp alla filerna, kontrollera filerna igen med knappen nedan.',

	'EDIT_USERNAME'						=> 'Redigera användarnamn',
	'ERROR'								=> 'Error',
	'EVERYTHING_UP_TO_DATE'				=> 'Allting är senaste versionen utav phpBB. Du borde nu <a href="%1$s">logga in på ditt forum</a>. Försäkra dig om att allting fungerar som det skall. Glöm inte att ta bort, eller byta namn på install-katalogen! <a href="%2$s">Skicka gärna statistik</a> via Administrationspanelen.',
	
	'FILE_ALREADY_UP_TO_DATE'		=> 'Filerna är redan uppdaterade.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Filerna får inte diffas.',
	'FILE_USED'						=> 'Information används från',			// Single file
	'FILES_CONFLICT'				=> 'Filer som resulterar i konflikt',
	'FILES_CONFLICT_EXPLAIN'		=> 'Följande filer har ändrats och representerar inte originalfilerna från den gamla versionen. phpBB har upptäckt att dessa kommer att skapa konflikter om de sammanfogas. Undersök dessa konflikter och försök att lösa det manuellt eller fortsätt med uppdateringsprocessen genom att använda föredragen sammanfogningsmetod. Om du löser konflikterna manuellt måste du kontrollera filerna igen efter att ha ändrat dem. Du kan också välja föredragen sammanfogningsmetod enskilt för varje fil. Den första kommer resultera i en fil där de rader som hamnat i konflikt från din gamla fil kommer att försvinna, den andra kommer resultera i att rader från den nyare filen försvinner.',
	'FILES_DELETED'					=> 'Borttagna filer',
	'FILES_DELETED_EXPLAIN'			=> 'Följande filer finns inte i nya versionen. Dessa filer måste tas bort ifrån din installation.',	
	'FILES_MODIFIED'				=> 'Ändrade filer',
	'FILES_MODIFIED_EXPLAIN'		=> 'Följande filer har ändrats och representerar inte originalfilerna från den gamla versionen. Den uppdaterade filen kommer att vara en sammanfogning av dina förändringar och den nya filen.',
	'FILES_NEW'						=> 'Nya filer',
	'FILES_NEW_EXPLAIN'				=> 'Följande filer finns inte i din installation. Dessa kommer att läggas till i din installation.',
	'FILES_NEW_CONFLICT'			=> 'Nya filer som resulterar i konflikter',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Följande filer är nya inom den senaste versionen men det har upptäckts en fil med samma namn på samma plats. Denna fil kommer att skrivas över med den nya filen.',
	'FILES_NOT_MODIFIED'			=> 'Ej ändrade filer',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Följande filer är inte ändrade och representerar originalfilerna från den phpBB-version som du vill uppdatera från.',
	'FILES_UP_TO_DATE'				=> 'Redan uppdaterade filer',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Följande filer är redan uppdaterade och behöver inte uppdateras.',
	'FTP_SETTINGS'					=> 'FTP-inställningar',
	'FTP_UPDATE_METHOD'				=> 'FTP-uppladdning',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Uppdateringsfilerna är inte kompatibla med din installerade version. Din nuvarande installerade version är %1$s och uppdateringsfilerna är till för att uppdatera phpBB %2$s till %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Uppdateringsfilerna är ofullständiga.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Databasuppdateringen lyckades. Du kan nu fortsätta uppdateringsprocessen.',

	'KEEP_OLD_NAME'		=> 'Behåll användarnamn',

	'LATEST_VERSION'		=> 'Senaste version',
	'LINE'					=> 'Rad',
	'LINE_ADDED'			=> 'Tillagd',
	'LINE_MODIFIED'			=> 'Ändrad',
	'LINE_REMOVED'			=> 'Borttagen',
	'LINE_UNMODIFIED'		=> 'Oförändrad',
	'LOGIN_UPDATE_EXPLAIN'	=> 'För att uppdatera din installation måste du logga in först.',

	'MAPPING_FILE_STRUCTURE'	=> 'För att underlätta uppladdningen så står här filplatserna som kartlägger din phpBB-installation.',
	'MERGE_MODIFICATIONS_OPTION'	=> 'Sammanfoga förändringar',
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Sammanfoga inte - använd ny fil',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Sammanfoga inte - använd nuvarande fil',
	'MERGE_MOD_FILE_OPTION'		=> 'Sammanfoga modifikationer (Ta bort ny phpBB-kod i block med konflikter)',
	'MERGE_NEW_FILE_OPTION'		=> 'Sammanfoga modifikationer (Ta bort modifierad kod i block med konflikter)',
	'MERGE_SELECT_ERROR'		=> 'Metod för att sammanfoga filkonflikter har inte valts korrekt.',
	'MERGING_FILES'				=> 'Sammanfogar skillnader',
	'MERGING_FILES_EXPLAIN'		=> 'Samlar för närvarande in de sista filändringarna.<br /><br />Vänta tills phpBB har slutfört alla operationer på ändrade filer.',

	'NEW_FILE'						=> 'Slut på konflikten',
	'NEW_USERNAME'					=> 'Nytt användarnamn',
	'NO_AUTH_UPDATE'				=> 'Inte tillåten att uppdatera',
	'NO_ERRORS'						=> 'Inga fel',
	'NO_UPDATE_FILES'				=> 'Uppdaterar inte följande filer',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Följande filer är nya eller ändrade men katalogen de ska ligga i kunde inte hittas i din installation. Om denna lista innehåller filer i andra kataloger än language/ och styles/ så har du kanske ändrat katalogstrukturen och uppdateringen kan vara ofullständig.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Ingen giltig uppdateringskatalog hittades, försäkra dig om att du laddat upp de rätta filerna.<br /><br />Din installation verkar <strong>inte</strong> vara av den senaste versionen. Uppdateringar finns tillgängliga för din version av phpBB %1$s, besök <a href="https://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> för att ladda ner det rätta paketet för att uppdatera från version %2$s till version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Din installation är av den senaste versionen. Det finns ingen anledning att köra uppdateringsverktyget. Om du vill göra en integritetskontroll på dina filer så försäkra dig om att du laddat upp de rätta uppdateringsfilerna.',
	'NO_UPDATE_INFO'				=> 'Uppdateringsfilinformation kunde inte hittas.',
	'NO_UPDATES_REQUIRED'			=> 'Inga uppdateringar krävs',
	'NO_VISIBLE_CHANGES'			=> 'Inga synliga ändringar',
	'NOTICE'						=> 'Meddelande',
	'NUM_CONFLICTS'					=> 'Antal konflikter',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Har för närvarande samlat in skillnader för ungefär %1$d av %2$d filer.<br />Vänta tills filinsamlingen slutförts.',

	'OLD_UPDATE_FILES'		=> 'Uppdateringsfilerna är gamla. Dessa uppdaterinsfiler är för att uppdatera från phpBB %1$s till phpBB %2$s men den senaste versionen av phpBB är %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Nuvarande paket uppdaterar till version',
	'PERFORM_DATABASE_UPDATE'			=> 'Utför databasuppdatering',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Nedan finns en knapp till databasuppdateringsskriptet. Databasuppdateringen kan ta ett tag, så stoppa inte körningen om den verkar hänga sig. Efter att databasuppdateringen har slutförts, följ bara instruktionerna för att fortsätta uppdateringsprocessen.',
	'PREVIOUS_VERSION'					=> 'Föregående version',
	'PROGRESS'							=> 'Process',

	'RELEASE_ANNOUNCEMENT'		=> 'Utgivingskungörelsen',
	'RESULT'					=> 'Resultat',
	'RUN_DATABASE_SCRIPT'		=> 'Uppdatera min databas nu',

	'SELECT_DIFF_MODE'			=> 'Välj diff metod',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Välj arkivformat',
	'SELECT_FTP_SETTINGS'		=> 'Välj FTP-inställningar',
	'SHOW_DIFF_CONFLICT'		=> 'Visa skillnader/konflikter',
	'SHOW_DIFF_DELETED'			=> 'Visa filinnehåll',
	'SHOW_DIFF_FINAL'			=> 'Visa resulterande fil',
	'SHOW_DIFF_MODIFIED'		=> 'Visa sammanfogade skillnader',
	'SHOW_DIFF_NEW'				=> 'Visa filinnehåll',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Visa skillnader',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Visa skillnader',
	'SOME_QUERIES_FAILED'		=> 'Några frågor misslyckades, felen listas nedan.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Detta är förmodligen inget att oroa sig för, uppdateringen kommer att fortsätta. Om uppdateringen inte kan slutföras så  kanske du be om hjälp på våra supportforum. Se <a href="../docs/README.html">README</a> för information om hur du kan få hjälp.',
	'STAGE_FILE_CHECK'			=> 'Kontrollera filer',
	'STAGE_UPDATE_DB'			=> 'Uppdatera databas',
	'STAGE_UPDATE_FILES'		=> 'Uppdatera filer',
	'STAGE_VERSION_CHECK'		=> 'Versionskontroll',
	'STATUS_CONFLICT'			=> 'Ändrad fil resulterade konflikter',
	'STATUS_DELETED'			=> 'Borttagen fil',
	'STATUS_MODIFIED'			=> 'Ändrad fil',
	'STATUS_NEW'				=> 'Ny fil',
	'STATUS_NEW_CONFLICT'		=> 'Konflikt för ny fil',
	'STATUS_NOT_MODIFIED'		=> 'Ej ändrad fil',
	'STATUS_UP_TO_DATE'			=> 'Redan uppdaterad fil',
	'TOGGLE_DISPLAY'			=> 'Visa/dölj fillista',
	'TRY_DOWNLOAD_METHOD'		=> 'Du vill kanske prova att ladda det modifierade filarkivet.<br />Denna metod fungerar alltid och är även den rekommenderade sökvägen vid uppdatering.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Pröva denna metod nu',

	'UPDATE_COMPLETED'				=> 'Uppdatering slutförd',
	'UPDATE_DATABASE'				=> 'Uppdatera databas',
	'UPDATE_DATABASE_EXPLAIN'		=> 'I nästa steg kommer databasen att uppdateras.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Uppdatera databasschema',
	'UPDATE_FILES'					=> 'Uppdatera filer',
	'UPDATE_FILES_NOTICE'			=> 'Försäkra dig om att du har uppdaterat dina forumfiler också, denna fil uppdaterar endast din databas.',
	'UPDATE_INSTALLATION'			=> 'Uppdatera phpBB-installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Med detta alternativ kan du uppdatera din phpBB-installation till den senaste versionen.<br />Under processen kommer alla dina filer integritetskontrolleras. Du kan granska alla skillnader och filer innan uppdateringen sker.<br /><br />Filuppdateringen kan göras på två olika sätt.</p><h2>Manuell uppdatering</h2><p>Med denna uppdatering så laddar du endast ner ditt personliga set av ändrade filer så att du kan försäkra dig om att du inte förlorar några förändringar du gjort i filerna. När du laddat ner detta paket så måste du ladda upp dessa filer manuellt till sina rätta platser under din phpBB-rotkatalog. När du är klar så kan du göra filkontrollen igen för att se om du flyttat filerna till sin rätta platser.</p><h2>Automatisk uppdatering via FTP</h2><p>Denna metod liknar den första men kräver inte att du laddar ner de ändrade filerna och laddar upp dem på egen hand. Detta kommer att göras åt dig. För att använda detnna metod måste du känna till dina inloggningsdetaljer för FTP. När du är klar kommer du omdirigeras till filkontrollen igen för att kolla att allt uppdaterades korrekt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '
		<h1>Utgivingskungörelsen</h1>
		<p>Läs utgivingskungörelsen för den senaste versionen innan du fortsätter uppdateringsprocessen, den kan innehålla användbar information. Den innehåller också länkar till nerladdningar och en logg över ändringar i den nya versionen.</p>
		<br />
		<h1>Hur du uppdaterar din installation med det automatiska uppdateringspaketet</h1>
		<p>Det rekommenderade sättet att uppdatera din installation som visas här är endast giltigt för det automatiska uppdateringspaketet. Du kan också uppdatera din installation genom sätten som visas i INSTALL.html-dokumentet. Stegen för att uppdatera phpBB3 automatiskt är:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Gå till <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com nerladdningssida</a> och ladda ner det rätta "Automatic Update Package" arkivet.<br /><br /></li>
			<li>Packa upp arkivet.<br /><br /></li>
			<li>Ladda upp hela den okomprimerade install-mappen till din phpBB-rotkatalog (där din config.php-fil ligger).<br /><br /></li>
		</ul>
		<p>När du laddat upp denna så kommer ditt forum att vara offline för vanliga användare eftersom install-katalogen du laddade upp nu finns där.<br /><br />
		<strong><a href="%1$s" title="%1$s">Börja nu uppdateringsprocessen genom att gå till install-katalogen i din webbläsare</a>.</strong><br />
		<br />
		Du kommer sedan att guidas genom uppdateringsprocessen. Du kommer meddelas när uppdateringen är slutförd.
		</p>
	',

	'UPDATE_METHOD'					=> 'Uppdateringsmetod',
	'UPDATE_METHOD_EXPLAIN'			=> 'Du kan nu välja den uppdateringsmetod du föredrar. Om du använder FTP-uppladdning kommer du få fylla i dina FTP-kontodetaljer i ett formulär. Med denna metod kommer filerna automatiskt att flyttas till sin nya plats och säkerhetskopior av de gamla filerna kommer att skapas genom att lägga till .bak till filnamnen. Om du väljer att ladda ner de ändrade filerna kommer du att kunna packa upp och ladda upp dem till sin rätta plats senare.',
	'UPDATE_REQUIRES_FILE'			=> 'Uppdateraren kräver att följande fil finns: %s',
	'UPDATE_SUCCESS'				=> 'Uppdateringen lyckades',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Uppdaterade alla filer. Nästa steg kommer att kontrollera alla filer igen för att kolla att alla filer uppdaterades korrekt.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Uppdaterar version och optimerar tabeller',
	'UPDATING_DATA'					=> 'Uppdaterar data',
	'UPDATING_TO_LATEST_STABLE'		=> 'Uppdaterar databasen till senaste versionen',
	'UPDATED_VERSION'				=> 'Uppdaterad version',
	'UPLOAD_METHOD'					=> 'Uppladdningsmetod',
	'UPDATE_DB_SUCCESS'				=> 'Databasen har uppdaterats.',
	'UPDATE_FILE_SUCCESS'			=> 'Filuppdateringen lyckades.',
	'USER_ACTIVE'					=> 'Aktiv användare',
	'USER_INACTIVE'					=> 'Inaktiverad användare',
	'VERSION_CHECK'				=> 'Versionskontroll',
	'VERSION_CHECK_EXPLAIN'		=> 'Kontrollerar om din nuvarande version av phpBB är den senaste versionen.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Din installation av phpBB är inte av den senaste versionen. Fortsätt uppdateringsprocessen.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Din installation av phpBB är inte av den senaste versionen.<br />Nedan hittar du en länk till information om den senaste versionen tillsammans med instruktioner om hur man uppdaterar.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Din version av phpBB är inte den senaste versionen.',
	'VERSION_UP_TO_DATE'		=> 'Din installation är av den senaste versionen. Det finns inga uppdateringar tillgängliga för din version av phpBB, men du kan fortsätta ändå för att göra en filgiltighetskontroll.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Din installation är av den senaste versionen, inga uppdateringar finns tillgängliga för din version av phpBB.',
	'VIEWING_FILE_CONTENTS'		=> 'Visar filinnehåll',
	'VIEWING_FILE_DIFF'			=> 'Visar filskillnader',

	'WRONG_INFO_FILE_FORMAT'	=> 'Felaktigt infofilformat',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Hälsningar forumledningen',
	'CONFIG_SITE_DESC'				=> 'En kort text som beskriver ditt forum',
	'CONFIG_SITENAME'				=> 'dindomän.com',

	'DEFAULT_INSTALL_POST'			=> 'Detta är ett exempelinlägg i din installation av phpBB3. Allting verkar fungera. Du kan ta bort detta inlägg om du vill och fortsätta konfigurera ditt forum. Under installationen så skapades din första huvudkategori och kategori och tilldelades en lämplig uppsättning behörigheter för de fördefinierade användargrupperna administratörer, robotar, globala moderatorer, gäster, registrerade användare och registrerade COPPA-användare. Om du väljer att ta bort din första huvudkategori och din första kategori, glöm inte att tilldela behörigheter till alla dessa användargrupper för alla nya huvudkategorier och kategorier du skapar. [b]Det är rekommenderat att byta namn på din första huvudkategori och din första kategori och kopiera behörigheter[/b] från dessa när du skapar nya huvudkategorier och kategorier. Ha det kul!',

	'FORUMS_FIRST_CATEGORY'			=> 'Din första huvudkategori',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beskrivning av din första kategori.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Din första kategori',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Webbplatsadministratör',
	'REPORT_WAREZ'					=> 'Inlägget innehåller länkar till olaglig eller piratkopierad programvara.',
	'REPORT_SPAM'					=> 'Inlägget innehåller reklam för en annan webbplats eller produkt.',
	'REPORT_OFF_TOPIC'				=> 'Inlägget håller sig inte till ämnet.',
	'REPORT_OTHER'					=> 'Inlägget passar inte in i någon av ovanstående kategorier, använd fältet för vidare information.',

	'SMILIES_ARROW'				=> 'Pil',
	'SMILIES_CONFUSED'		=> 'Förvirrad',
	'SMILIES_COOL'				=> 'Cool',
	'SMILIES_CRYING'			=> 'Gråter eller väldigt ledsen',
	'SMILIES_EMARRASSED'	=> 'Generad',
	'SMILIES_EVIL'				=> 'Ond eller väldigt arg',
	'SMILIES_EXCLAMATION'	=> 'Utrop',
	'SMILIES_GEEK'				=> 'Nörd',
	'SMILIES_IDEA'				=> 'Idé',
	'SMILIES_LAUGHING'		=> 'Skrattar',
	'SMILIES_MAD'					=> 'Arg',
	'SMILIES_MR_GREEN'		=> 'Herr Grön',
	'SMILIES_NEUTRAL'			=> 'Neutral',
	'SMILIES_QUESTION'		=> 'Fråga',
	'SMILIES_RAZZ'				=> 'Retas',
	'SMILIES_ROLLING_EYES'=> 'Rullar med ögonen',
	'SMILIES_SAD'					=> 'Ledsen',
	'SMILIES_SHOCKED'			=> 'Chockerad',
	'SMILIES_SMILE'				=> 'Ler',
	'SMILIES_SURPRISED'		=> 'Förvånad',
	'SMILIES_TWISTED_EVIL'=> 'Väldigt ond',
	'SMILIES_UBER_GEEK'		=> 'Ultranörd',
	'SMILIES_VERY_HAPPY'	=> 'Väldigt glad',
	'SMILIES_WINK'				=> 'Blink',

	'TOPICS_TOPIC_TITLE'	=> 'Välkommen till phpBB3',
));
