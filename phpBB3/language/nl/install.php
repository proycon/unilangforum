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
	'ADMIN_CONFIG'				=> 'Beheerdersconfiguratie',
	'ADMIN_PASSWORD'			=> 'Beheerderswachtwoord',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Bevestig beheerderswachtwoord',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Voer een gebruikersnaam in die tussen de 6 en 30 tekens lang is.',
	'ADMIN_TEST'				=> 'Controleer beheerdersinstellingen',
	'ADMIN_USERNAME'			=> 'Beheerdersgebruikersnaam',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Voer een gebruikersnaam in die tussen de 3 en 20 tekens lang is.',
	'APP_MAGICK'				=> 'Imagemagick ondersteuning [ bijlagen ]',
	'AUTHOR_NOTES'				=> 'Auteur notities<br />» %s',
	'AVAILABLE'					=> 'Beschikbaar',
	'AVAILABLE_CONVERTORS'		=> 'Beschikbare convertors',

	'BEGIN_CONVERT'					=> 'Begin conversie',
	'BLANK_PREFIX_FOUND'			=> 'Een scan van je tabellen heeft een geldige installatie gevonden met het gebruik van geen tabel prefix.',
	'BOARD_NOT_INSTALLED'			=> 'Geen installatie gevonden',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'De phpBB Unified Convertor Framework heeft een standaard phpBB3-installatie nodig om te kunnen functioneren, <a href="%s">ga door om eerst phpBB3 te installeren</a>.',
	'BACKUP_NOTICE'					=> 'Voordat je begint met het bijwerken van je forum raden we je aan om een back-up te maken, voor als er problemen komen tijdens het update proces.',

	'CATEGORY'					=> 'Categorie',
	'CACHE_STORE'				=> 'Cache-type',
	'CACHE_STORE_EXPLAIN'		=> 'De fysieke locatie waar de data is gecached, we raden aan om het bestandssysteem te gebruiken.',
	'CAT_CONVERT'				=> 'Converteren',
	'CAT_INSTALL'				=> 'Installeren',
	'CAT_OVERVIEW'				=> 'Overzicht',
	'CAT_UPDATE'				=> 'Bijwerken',
	'CHANGE'					=> 'Wijzigen',
	'CHECK_TABLE_PREFIX'		=> 'Controleer de tabel prefix en probeer opnieuw.',
	'CLEAN_VERIFY'				=> 'Opschonen en bevestigen van de uiteindelijke structuur',
	'CLEANING_USERNAMES'		=> 'Opschonen van gebruikersnamen',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> is de schone gebruikersnaam voor:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Er zijn dubbele gebruikersnamen gevonden op je oude forum. Om de conversie te voltooien zal je deze gebruikers moeten verwijderen of hernoemen, zodat er alleen één gebruiker is op je oude forum voor elke "schone" gebruikersnaam.',
	'COLLIDING_USER'			=> '» gebruikers-id: <strong>%d</strong> gebruikersnaam: <strong>%s</strong> (%d berichten)',
	'CONFIG_CONVERT'			=> 'Bezig met het converteren van de configuratie',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Het configuratiebestand kon niet worden geschreven. Alternatieve methodes om dit bestand te maken zijn hieronder weergegeven.',
	'CONFIG_FILE_WRITTEN'		=> 'Het configuratiebestand is geschreven. Je mag verder gaan naar de volgende stap van de installatie.',
	'CONFIG_PHPBB_EMPTY'		=> 'De phpBB3 configuratievariabele voor “%s” is leeg.',
	'CONFIG_RETRY'				=> 'Opnieuw',
	'CONTINUE_CONVERT'			=> 'Conversie hervatten',
	'CONTINUE_CONVERT_BODY'		=> 'Een vorige conversiepoging is gevonden. Je kan nu kiezen tussen het starten van een nieuwe conversie of doorgaan met de vorige conversie.',
	'CONTINUE_LAST'				=> 'Doorgaan met de laatste stappen',
	'CONTINUE_OLD_CONVERSION'	=> 'Doorgaan met vorige conversie',
	'CONVERT'					=> 'Converteer',
	'CONVERT_COMPLETE'			=> 'Conversie compleet',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Je hebt succesvol je forum geconverteerd naar phpBB 3.1. Je kan je nu <a href="../">aanmelden op je forum</a>. Voordat je de install-map verwijderd en je forum ingeschakeld, controleer of alle instellingen correct zijn overgezet. Online hulp is beschikbaar via de online <a href="http://www.phpbbservice.nl/docs/handleiding/3.0/">documentatie</a> en de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=2">supportforums</a>.',
	'CONVERT_INTRO'				=> 'Welkom bij de phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Vanuit hier kan je de data van andere geïnstalleerde forumsoftware overzetten. Hieronder zie je alle convertors die momenteel beschikbaar zijn. Als er geen convertor is weergegeven voor de forumsoftware die je wenst te gaan converteren, controleer dan op onze website of de modules beschikbaar zijn om te kunnen downloaden.',
	'CONVERT_NEW_CONVERSION'	=> 'Nieuwe conversie',
	'CONVERT_NOT_EXIST'			=> 'De opgegeven convertor bestaat niet.',
	'CONVERT_OPTIONS'			=> 'Opties',
	'CONVERT_SETTINGS_VERIFIED'	=> 'De informatie die je hebt ingevoerd is herkend. Om het conversieprocess te starten, klik je op de knop hieronder.',
	'CONV_ERR_FATAL'			=> 'Fatale conversiefout',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP-upload voor bijlagen is ingeschakeld op het oude forum. Schakel de FTP-upload optie uit en zorg ervoor dat je een geldige uploadmap opgeeft, kopieer daarna alle bijlagenbestanden naar de nieuwe web toegankelijke map. Wanneer je dit hebt gedaan, herstart je de convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Er is geen configuratie-informatie beschikbaar voor de conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Kan geen forum-toegangsinformatie verkrijgen.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Kan geen categorieën verkrijgen.',
	'CONV_ERROR_GET_CONFIG'				=> 'Kan niet je forumconfiguratie ophalen.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Onmogelijk om “%s” te openen/lezen.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Kan geen groepsauthenticatie-informatie verkijgen.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Onregelmatigheden in de “groups”-tabel gevonden in add_bots() - je moet alle speciale groepen handmatig toevoegen.',
	'CONV_ERROR_INSERT_BOT'				=> 'Kan de bot niet toevoegen aan de “user”-tabel.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Kan de bot niet toevoegen aan de “bots”-tabel.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kan de gebruiker niet toevoegen aan de “user_group”-tabel.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Bericht-parser fout',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'avatar_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Het relatieve pad naar het bronforum is niet opgegeven.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'avatar_gallery_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_GROUP'				=> 'Groep “%1$s” kan niet worden gevonden in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'ranks_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'smilies_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Bericht aan de ontwikkelaar: je moet $convertor[\'upload_path\'] opgeven door %s te gebruiken.',
	'CONV_ERROR_PERM_SETTING'			=> 'Kan de permissieinstellingen niet bijwerken of toevoegen.',
	'CONV_ERROR_PM_COUNT'				=> 'Kan de PB-teller map niet selecteren.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Kan het nieuwe forum niet toevoegen tijdens het vervangen van een oude categorie.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Kan het nieuwe forum niet vervangen met het oude forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Kan de gebruikersauthenticatie-informatie niet verkrijgen.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Verkeerde groep “%1$s” opgegeven in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Deze pagina verzameld alle nodigde gegevens die nodig zijn om toegang te hebben tot het bronforum. Voer de database-gegevens in van je vorige forum; de convertor zal niks veranderen in de database die je hieronder opgeeft. Het bronforum zal uitgeschakeld moeten zijn om een zo goed als mogelijke conversie te krijgen.',
	'CONV_SAVED_MESSAGES'				=> 'Opgeslagen berichten',

	'COULD_NOT_COPY'			=> 'Kan het bestand <strong>%1$s</strong> niet kopiëren naar <strong>%2$s</strong><br /><br />Controleer of de doelmap bestaat en schrijfbaar is door de webserver.',
	'COULD_NOT_FIND_PATH'		=> 'Kan het pad naar je oude forum niet vinden. Controleer je instellingen en probeer het opnieuw.<br />» %s was het opgegeven doelpad.',

	'DBMS'						=> 'Database-type',
	'DB_CONFIG'					=> 'Database-configuratie',
	'DB_CONNECTION'				=> 'Database-verbinding',
	'DB_ERR_INSERT'				=> 'Fout tijdens het verwerken van de <code>INSERT</code> query.',
	'DB_ERR_LAST'				=> 'Fout tijdens het verwerken van de <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Fout tijdens het verwerken van de <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Fout tijdens het verwerken van de <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Fout tijdens het uitvoeren van de <code>SELECT</code> query.',
	'DB_HOST'					=> 'Database-server hostnaam of DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN staat voor Data Source Name en is alleen relevant voor ODBC-installaties. Gebruik op PostgreSQL de localhost om verbinding te maken met de lokale server via de UNIX-domein socket en via 127.0.0.1 om verbinding te maken via TCP. Voor SQLite moet je het volledige pad invoeren van uw database-bestand.',
	'DB_NAME'					=> 'Database-naam',
	'DB_PASSWORD'				=> 'Database-wachtwoord',
	'DB_PORT'					=> 'Database-serverpoort',
	'DB_PORT_EXPLAIN'			=> 'Laat dit veld leeg tenzij de server op een niet-standaard poort werkt.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Sorry, maar dit script ondersteunt het updaten van versies van phpBB voorafgaand naar “%1$s” niet. De versie die je momenteel hebt geïnstalleerd is “%2$s”. Update naar een vorige versie voordat je dit script uitvoert. Assistentie voor dit is beschikbaar in onze supportforums op phpBB.com en op phpBBservice.nl.',
	'DB_USERNAME'				=> 'Database-gebruikersnaam',
	'DB_TEST'					=> 'Verbinding testen',
	'DEFAULT_LANG'				=> 'Standaard forumtaal',
	'DEFAULT_PREFIX_IS'			=> 'De convertor was niet in staat om de tabel te vinden met de opgegeven prefix. Wees er zeker van dat je de juiste gegevens hebt ingevuld van het forum waarvan je wilt converteren. De standaard tabel prefix voor %1$s is <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Geen waarde is er opgegeven voor de test_file variabele in de convertor. Als je een gebruiker bent van deze convertor hoor je deze foutmelding niet te zien, meld dit bericht aan de auteur van de convertor. Als je de convertor-auteur bent, moet je de naam of een bestand opgeven die bestaat in het bronforum om het pad te bevestigen.',
	'DIRECTORIES_AND_FILES'		=> 'Map en bestandssetup',
	'DISABLE_KEYS'				=> 'Onbruikbare sleutels',
	'DLL_FTP'					=> 'Remote FTP-ondersteuning [ Installatie ]',
	'DLL_GD'					=> 'GD afbeeldingen-ondersteuning [ Visuele bevestiging ]',
	'DLL_MBSTRING'				=> 'Multi-byte tekens ondersteuning',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Native ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL met MySQLi extensie',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'XML-ondersteuning [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib compressie ondersteuning [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Download config-bestand',
	'DL_CONFIG_EXPLAIN'			=> 'Je mag nu het complete config.php bestand downloaden naar je pc. Je moet dan het bestand handmatig uploaden en eventueel het bestaande config.php bestand overschrijven die in uw phpBB 3.1 hoofdmap staat, dus waar u het bestand memberlist.php, index.php, etc. ziet staan. Let op: vergeet niet om het bestand te uploaden in ASCII-formaat (raadpleeg je FTP-programma documentatie als je niet weet hoe je dit moet doen). Wanneer je het bestand hebt geüpload, klik je op de “Klaar” knop om verder te gaan naar de volgende stap.',
	'DL_DOWNLOAD'				=> 'Downloaden',
	'DONE'						=> 'Klaar',

	'ENABLE_KEYS'				=> 'Sleutels opnieuw toelaten. Dit kan even duren',

	'FILES_OPTIONAL'			=> 'Optionele bestanden en mappen',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optioneel</strong> - Deze bestanden, mappen of permissieinstellingen zijn niet verplicht. Het installatiesysteem zal proberen om diverse technieken te gebruiken om ze aan te maken als ze nog niet bestaan of als ze niet beschrijfbaar zijn. Alhoewel, de aanwezigheid ervan zal de installatie wel versnellen.',
	'FILES_REQUIRED'			=> 'Bestanden en mappen',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Verplicht</strong> - Om alles correct te laten functioneren, heeft phpBB toegang nodig om verschillende bestanden of mappen te beschrijven. Als je ziet staan “Niet gevonden”, zal je het betreffende bestand of map aan moeten maken. Als je ziet staan “Niet schrijfbaar”, wijzig dan de permissies van het bestand of van de map om te zorgen dat phpBB toegang heeft er na toe te schrijven.',
	'FILLING_TABLE'				=> 'Vullen van tabel <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Vullen van tabellen',

	'FINAL_STEP'				=> 'Doorgaan met de laatste stap',
	'FORUM_ADDRESS'				=> 'Forumadres',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Dit is de oude URL van je oude forum, bijvoorbeeld <samp>http://www.voorbeeld.nl/phpBB2/</samp>. Als een adres hier is ingevoerd en het is niet leeg gelaten, dan zal elk adres worden vervangen door je nieuwe forumadres in berichten, privéberichten en onderschriften.',
	'FORUM_PATH'				=> 'Forumpad',
	'FORUM_PATH_EXPLAIN'		=> 'Dit is het <strong>relatieve</strong> pad op de server naar je oude forum vanaf de <strong>root van je phpBB3-installatie</strong>.',
	'FOUND'						=> 'Gevonden',
	'FTP_CONFIG'				=> 'Config overbrengen via de FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB heeft de aanwezigheid van de FTP-module herkend op deze server. Je mag proberen om je config.php te installeren via deze module als je wilt. Je zal de informatie die hieronder staat nodig hebben. Onthoud je gebruikersnaam en wachtwoord, deze zijn van je server! (vraag je hostingprovider voor meer informatie als je onzeker bent wat deze zijn).',
	'FTP_PATH'					=> 'FTP-pad',
	'FTP_PATH_EXPLAIN'			=> 'Dit is het pad van de hoofdmap waar phpBB in staat, bijvoorbeeld <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Basisconfiguratie',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nu dat je installatie heeft bepaald dat je server phpBB3 kan draaien zal je wat specifieke informatie moeten opgeven. Als je niet weet hoe je moet verbinden met je database, neem dan contact op met je hostingprovider (in de eerste instantie) of gebruik de phpBB-supportforums. Wanneer je gegevens invoert, wees er dan zeker van dat je het controleert of het klopt voordat je verder gaat.',
	'INSTALL_CONGRATS'			=> 'Gefeliciteerd!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Je hebt phpBB %1$s succesvol geïnstalleerd. Ga verder door middel van één van de volgende opties te kiezen:</p>
		<h2>Een bestaand forum converteren naar phpBB3</h2>
		<p>De phpBB Unified Convertor Framework ondersteunt de conversie van phpBB 2.0.x en andere forumsystemen naar phpBB3. Als je een bestaand forum hebt dat je wilt converteren, <a href="%2$s">ga dan verder naar de convertor</a>.</p>
		<h2>On-line gaan met uw phpBB3!</h2>
		<p>Wanneer je op de knop klikt hieronder zal je worden doorgestuurd naar een formulier om statistische data te versturen naar phpBB in je beheerderspaneel. We zullen het erg waarderen als je ons kan helpen om die informatie te versturen. Daarna zal je wat tijd moeten nemen om de opties te onderzoeken die beschikbaar zijn voor je. Vergeet niet dat on-line hulp beschikbaar is via de <a href="http://www.phpbbservice.nl/docs/handleiding/3.0/">documentatie</a>, <a href="%3$s">LEESMIJ</a> en de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=6">supportforums</a>.</p><p><strong>Verwijder, verplaats of hernoem de install-map voordat je je forum gaat gebruiken. Wanneer deze map bestaat, zal alleen het beheerderspaneel toegankelijk zijn.</strong>',
	'INSTALL_INTRO'				=> 'Welkom bij de installatie',

	'INSTALL_INTRO_BODY'		=> 'Met deze optie, is het mogelijk om phpBB3 te kunnen installeren op je server.</p><p>Om verder te gaan heb je de database-instellingen nodig. Als je niet je database-instellingen weet, neem dan contact op met je host en vraag het aan hun. Je zal niet door kunnen gaan met de installatie zonder die gegevens. Je hebt nodig:</p>

		<ul>
			<li>Het Database-type - De database dat je wilt gebruiken.</li>
			<li>De Database-server hostnaam of DSN - Het adres van de database-server.</li>
			<li>De Database-serverpoort - De poort van de database-server (in de meeste gevallen is dit niet nodig).</li>
			<li>De Database-naam - De naam van de database op de server.</li>
			<li>De Database-gebruikersnaam en Database-wachtwoord - De aanmeldingsgegevens om toegang te hebben tot de database.</li>
		</ul>

		<p><strong>Opmerking:</strong> Als je de installatie uitvoert met SQLite, zal je het volledige pad moet invoeren van je database-bestand in het DSN-veld en het veld van de gebruikersnaam en wachtwoord leeglaten. Voor veiligheidsredenen, zal je er zeker van moeten zijn dat je database-bestand niet is opgeslagen in een openbare toegankelijke locatie die je kan bezoeken via het internet.</p>

		<p>phpBB3 ondersteunt de volgende databases:</p>
		<ul>
			<li>MySQL 3.23 of hoger (MySQLi ondersteuning)</li>
			<li>PostgreSQL 8.3+</li>
			<li>SQLite 2.8.2+</li>
			<li>SQLite 3.6.15+</li>
			<li>MS SQL Server 2000 of hoger (direct of met ODBC)</li>
			<li>MS SQL Server 2005 of hoger (native)</li>
			<li>Oracle</li>
		</ul>

		<p>Alleen deze databases die worden ondersteunt door uw server zullen worden weergegeven.',
	'INSTALL_INTRO_NEXT'		=> 'Om te beginnen met de installatie, klik je op de knop hieronder.',
	'INSTALL_LOGIN'				=> 'Aanmelden',
	'INSTALL_NEXT'				=> 'Volgende stap',
	'INSTALL_NEXT_FAIL'			=> 'Sommige testen zijn mislukt, je zal deze problemen eerst moeten oplossen voordat je verder gaat naar de volgende stap. Wanneer er testen mislukken kan het leiden naar een incomplete installatie.',
	'INSTALL_NEXT_PASS'			=> 'Als alle basis testen zijn gelukt mag je doorgaan naar de volgende stap van de installatie. Als je enige permissies, modules, enz. hebt veranderd en je wilt de testen opnieuw uitvoeren, dan kan je dat hier doen.',
	'INSTALL_PANEL'				=> 'Installatiepaneel',
	'INSTALL_SEND_CONFIG'		=> 'Helaas kon phpBB de configuratie-informatie niet meteen schrijven naar je config.php. Dit is mogelijk als het bestand niet bestaat of niet schrijfbaar is. Een aantal opties zullen hieronder worden weergegeven zodat je als nog de installatie van de config.php kan voltooien.',
	'INSTALL_START'				=> 'Installatie starten',
	'INSTALL_TEST'				=> 'Opnieuw testen',
	'INST_ERR'					=> 'Installatiefout',
	'INST_ERR_DB_CONNECT'		=> 'Kon geen verbinding leggen met de database, zie de foutmelding hieronder.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Het database-bestand dat is opgegeven bevindt zich in de forummappen-hiërarchie. Je zal dit bestand moeten plaatsen in een locatie die niet via het web toegankelijk is.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'De prefix die je hebt ingevoerd is onjuist. Het moet starten met een letter en mag alleen letters, getallen en onderstrepingen bevatten.',
	'INST_ERR_DB_NO_ERROR'		=> 'Geen foutmelding gegeven.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'De versie van MySQL die geïnstalleerd is op deze server werkt niet met de “MySQL met MySQLi-extensie”-optie die je hebt geselecteerd. Probeer in plaats daarvan de optie “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'De versie van de SQLite-extensie die je hebt geïnstalleerd is te oud, het moet bijgewerkt worden naar versie 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'De versie van de SQLite-extensie die je hebt geïnstalleerd is te oud, het moet bijgewerkt worden naar versie 3.6.15.',	
	'INST_ERR_DB_NO_ORACLE'		=> 'De versie van Oracle die geïnstalleerd is op deze server verplicht je om de <var>NLS_CHARACTERSET</var>-parameter te laten instellen naar <var>UTF8</var>. Je kan de installatie updaten naar 9.2+ of de parameter veranderen.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'De database die je hebt geselecteerd is niet aangemaakt in <var>UNICODE</var> of <var>UTF8</var>-codering. Probeer de database te installeren in <var>UNICODE</var> of <var>UTF8</var>-codering.',
	'INST_ERR_DB_NO_NAME'		=> 'Geen database-naam opgegeven.',
	'INST_ERR_EMAIL_INVALID'	=> 'Het e-mailadres dat je hebt ingevoerd is ongeldig.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'De e-mailadressen die je hebt ingevoerd komen niet overeen.',
	'INST_ERR_FATAL'			=> 'Fatale installatiefout',
	'INST_ERR_FATAL_DB'			=> 'Een fatale en een onherstelbare database-fout is er opgetreden. Dit kan gebeuren dat de opgegeven gebruiker niet de juiste rechten heeft voor <code>CREATE TABLES</code> of <code>INSERT</code> data, enz. Verdere informatie kan hieronder worden gegevonden. Neem contact op met je hostingprovider in de eerste instantie of de supportforums van phpBB voor verdere hulp.',
	'INST_ERR_FTP_PATH'			=> 'Kon de opgegeven map niet veranderen, controleer het pad.',
	'INST_ERR_FTP_LOGIN'		=> 'Kon niet aanmelden op de FTP-server, controleer je gebruikersnaam en wachtwoord.',
	'INST_ERR_MISSING_DATA'		=> 'Je moet alle velden van dit blok invullen.',
	'INST_ERR_NO_DB'			=> 'De PHP-module kon niet worden geladen voor het geselecteerde database-type.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'De wachtwoorden die je hebt ingevoerd komen niet overeen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Het wachtwoord dat je hebt ingevoerd is te lang. De maximale lengte is 30 tekens.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Het wachtwoord dat je hebt ingevoerd is te kort. De minimale lengte is 6 tekens.',
	'INST_ERR_PREFIX'			=> 'Tabellen met de opgegeven prefix bestaan al, kies een andere prefix als alternatief.',
	'INST_ERR_PREFIX_INVALID'	=> 'De tabelprefix die je hebt ingevoerd is niet geldig voor je database. Probeer een andere, verwijder één van de tekens bijvoorbeeld het koppelteken.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'De tabelprefix dat je hebt ingevoerd is te lang. De maximale lengte is %d tekens.',
	'INST_ERR_USER_TOO_LONG'	=> 'De gebruikersnaam die je hebt ingevoerd is te lang. De maximale lengte is 20 tekens.',
	'INST_ERR_USER_TOO_SHORT'	=> 'De gebruikersnaam die je hebt ingevoerd is te kort. De minimale lengte is 3 tekens.',
	'INVALID_PRIMARY_KEY'		=> 'Ongeldige hoofdsleutel : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Hou in de gaten dat dit enige tijd kan duren... Onderbreek het script niet.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> extensiecontrole',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Verplicht</strong> - <samp>mbstring</samp> is een PHP-extensie die zorgt voor multibyte string functies. Bepaalde functies van mbstring werken niet met phpBB en moeten worden uitgeschakeld.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Functie-overbelasting',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> moet ingesteld zijn op 0 of 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Transparante teken codering',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> moet ingesteld zijn op 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP-invoeringsteken conversie',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> moet ingesteld zijn op <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP-uitvoeringsteken conversie',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> moet ingesteld zijn op <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Wees er zeker van dat de map bestaat en schrijfbaar is voor de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Wees er zeker van dat deze mappen bestaan en schrijfbaar zijn voor de webserver en probeer het dan opnieuw:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Je MySQL-database schema voor phpBB is niet up-to-date. phpBB heeft een schema gevonden voor MySQL 3.x/4.x, maar de server draait op MySQL %2$s.<br /><strong>Voordat je verder gaat met het bijwerken van je forum raden wij je aan dat je het schema gaat bijwerken.</strong><br /><br />Bekijk het <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Kennisbank artikel ( Engelstalig ) over het bijwerken van het MySQL-schema</a> voor meer informatie. Als je problemen krijgt, gebruik dan <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=6">onze supportforums</a> voor verdere ondersteuning.',

	'NAMING_CONFLICT'			=> 'Benamingsconflict: %s en %s zijn beide aliasen<br /><br />%s',
	'NEXT_STEP'					=> 'Verder gaan naar volgende stap',
	'NOT_FOUND'					=> 'Kan niet vinden',
	'NOT_UNDERSTAND'			=> 'Kan het volgende niet begrijpen %s #%d, tabel %s (“%s”)',
	'NO_CONVERTORS'				=> 'Geen convertors zijn er beschikbaar om te gebruiken.',
	'NO_CONVERT_SPECIFIED'		=> 'Geen convertor opgegeven.',
	'NO_LOCATION'				=> 'Locatie kan niet worden bepaald. Als je weet dat Imagemagick is geïnstalleerd, geef dan later de locatie op in je beheerderspaneel',
	'NO_TABLES_FOUND'			=> 'Er zijn geen tabellen gevonden.',

	'OVERVIEW_BODY'				=> 'Welkom bij phpBB3!<br /><br />phpBB® is wereldwijd de meest gebruikte open source forumsoftware. phpBB3 is de laatste versie van een pakket dat is gestart met de ontwikkeling in 2000. Zoals zijn voorgangers is phpBB3 functie-rijk, het is gebruiksvriendelijk, en wordt volledig ondersteunt door het phpBB-team. phpBB3 verbeterd alles wat phpBB2 zo populair maakte, en voegt de meest gevraagde functies toe die nog niet aanwezig waren in vorige versies. Wij hopen dat het je verwachtingen overtreft.<br /><br />Het installatiesysteem doorloopt samen met je de stappen om phpBB3 te installeren, bij te werken van oudere versies naar de meest recente phpBB3-versie, en ook nog het converteren naar phpBB3 vanaf een andere forumsoftware (inclusief phpBB2). Voor meer informatie adviseren we je dat je de <a href="../docs/INSTALL.html">installatie handleiding</a> leest. Als je de phpBB3-licentie wilt lezen, of als je wilt weten hoe je ondersteuning kan krijgen, dan kies je de juiste optie in het zij-menu aan de linkerkant van deze pagina. Om verder te gaan selecteer je het juiste tabblad bovenaan de pagina.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 onderteuning',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB zal <strong>niet</strong> werken als je PHP-installatie niet is gecompileerd met UTF-8 ondersteuning in de PCRE-extensie.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-functie getimagesize() is beschikbaar',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om phpBB correct te laten functioneren, zal de getimagesize-functie beschikbaar moeten zijn.',
	'PHP_JSON_SUPPORT'				=> 'PHP-JSON ondersteuning',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Verplicht</strong> - Om phpBB correct te laten functioneren, zal de PHP-JSON extensie beschikbaar moeten zijn.',
	'PHP_OPTIONAL_MODULE'			=> 'Optionele modules',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Optioneel</strong> - Deze modules of applicaties zijn optioneel. Als deze beschikbaar zijn, dan zullen er extra functies worden ingeschakeld.',
	'PHP_SUPPORTED_DB'				=> 'Ondersteunende databases',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Verplicht</strong> - Er moet tenminste één type database-module worden ondersteund binnen PHP. Als er geen database-module beschikbaar is moet je contact opnemen met je webhost of de documentatie van de betreffende PHP-installatie bekijken voor advies.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP-instelling <var>register_globals</var> is uitgeschakeld',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB zal ook werken wanneer deze instellingen zijn ingeschakeld, maar indien mogelijk is het aanbevolen dat register_globals is uitgeschakeld op je PHP-installatie vanwege beveiligingsredenen.',
	'PHP_SAFE_MODE'					=> 'Safe mode',
	'PHP_SETTINGS'					=> 'PHP-versie en instellingen',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Verplicht</strong> - Je moet tenminste op PHP-versie 5.3.3 werken om phpBB te installeren. Als de <var>safe mode</var> wordt weergegeven onder je PHP-installatie, dan is deze mode ingeschakeld. Dit zorgt voor beperkingen met betrekking tot beheer (op afstand) en soort gelijke functies.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP-instelling <var>allow_url_fopen</var> is ingeschakeld',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Optioneel</strong> - Deze instelling is optioneel, maar bepaalde phpBB-functies zoals het gebruiken van een avatar van een andere site zal niet correct werken zonder deze functie.',
	'PHP_VERSION_REQD'				=> 'PHP-versie >= 5.3.3',
	'POST_ID'						=> 'Bericht-ID',
	'PREFIX_FOUND'					=> 'Een scan van al je tabellen heeft gezien dat je als tabel prefix <strong>%s</strong> gebruikt.',
	'PREPROCESS_STEP'				=> 'Bezig met het uitvoeren van de voorprocedure van functies/queries',
	'PRE_CONVERT_COMPLETE'			=> 'Alle voorbereidende conversie stappen zijn succesvol voltooid. Je mag nu beginnen met het werkelijke conversieproces. Hou in de gaten dat je waarschijnlijk diverse dingen handmatig moet aanpassen. Na de conversie, zal je vooral de toegewezen permissies moeten controleren, de zoekindex moeten herbouwen aangezien die niet mee wordt geconverteerd en wees er ook zeker van dat de bestanden correct zijn gekopieerd, bijvoorbeeld de avatars en smilies.',
	'PROCESS_LAST'					=> 'Bezig met de laatste stappen',

	'REFRESH_PAGE'				=> 'Vernieuw de pagina om door te gaan met de conversie',
	'REFRESH_PAGE_EXPLAIN'		=> 'Als je dit instelt op ja, dan zal de convertor de pagina vernieuwen om door te gaan met de conversie nadat er een stap is voltooid. Als dit je eerste conversie is voor test doeleinden en om te bepalen of er enige fouten optreden, raden wij je aan om deze optie op nee in te stellen.',
	'REQUIREMENTS_TITLE'		=> 'Installatiecompatibiliteit',
	'REQUIREMENTS_EXPLAIN'		=> 'Voordat je begint met de volledige installatie, zal phpBB eerst wat tests uitvoeren op je server-configuratie en bestanden om er zeker van te zijn dat je phpBB kan installeren en gebruiken. Vergeet niet om alle resultaten te goed door te lezen en ga niet verder totdat alle test zijn geslaagd. Als je wenst om enkele functies te gebruiken van de optionele testen, moet je er voor zorgen dat die testen ook slagen.',
	'RETRY_WRITE'				=> 'config opnieuw herschrijven',
	'RETRY_WRITE_EXPLAIN'		=> 'Als je wenst, kan je de permissies veranderen van config.php om toe te staan dat phpBB het kan beschrijven. Wanneer je dat wilt doen, dan kan je klikken op “opnieuw” hieronder om het opnieuw te proberen. Vergeet niet om de permissies van het config.php bestand weer terug te veranderen nadat de phpBB-installatie is voltooid.',
	
	'SCRIPT_PATH'				=> 'Scriptpad',
	'SCRIPT_PATH_EXPLAIN'		=> 'Het pad waar phpBB zich bevindt, relatief naar het domeinnaam, bijvoorbeeld <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Taal selecteren',
	'SERVER_CONFIG'				=> 'Server-configuratie',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Zoekindex is niet geconverteerd',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Je oude zoekindex is niet geconverteerd. Zoeken zal dan altijd resulteren in een leeg scherm. Om een nieuwe zoekindex te maken ga je naar je beheerderspaneel toe, selecteert dan onderhoud en daarna selecteer je zoekindex uit het submenu.',
	'SELECT_FORUM_GA'			=> 'In phpBB 3.1 zijn de globale aankondigingen gekoppeld aan forums. Selecteer een forum voor je bestaande globale aankondigingen (kan later verplaatst worden):',
	'SOFTWARE'					=> 'Forumsoftware',
	'SPECIFY_OPTIONS'			=> 'Opties opgeven voor de conversie',
	'STAGE_ADMINISTRATOR'		=> 'Gegevensbeheerder',
	'STAGE_ADVANCED'			=> 'Uitgebreide instellingen',
	'STAGE_ADVANCED_EXPLAIN'	=> 'De instellingen op deze pagina zijn alleen nodig om in te stellen als je weet dat je iets anders wilt dan standaard. Als je het niet zeker weet, ga dan verder naar de volgende pagina, aangezien je deze instellingen later nog kan aanpassen in het beheerderspaneel.',
	'STAGE_CONFIG_FILE'			=> 'Configuratiebestand',
	'STAGE_CREATE_TABLE'		=> 'Database-tabellen aanmaken',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'De database-tabellen die gebruikt worden door phpBB 3.1 zijn aangemaakt en zijn ingevoerd met basisgegevens. Ga verder naar het volgende scherm om de installatie te voltooien van phpBB.',
	'STAGE_DATABASE'			=> 'Database-instellingen',
	'STAGE_FINAL'				=> 'Laatste stap',
	'STAGE_INTRO'				=> 'Introductie',
	'STAGE_IN_PROGRESS'			=> 'Bezig met converteren',
	'STAGE_REQUIREMENTS'		=> 'Benodigdheden',
	'STAGE_SETTINGS'			=> 'Instellingen',
	'STARTING_CONVERT'			=> 'Conversieproces starten',
	'STEP_PERCENT_COMPLETED'	=> 'Stap <strong>%d</strong> van <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introductie',
	'SUB_LICENSE'				=> 'Licentie (Engelstalig)',
	'SUB_SUPPORT'				=> 'Ondersteuning',
	'SUCCESSFUL_CONNECT'		=> 'Succesvolle verbinding',
	'SUPPORT_BODY'				=> 'Volledige ondersteuning word gegegeven voor de huidige stabiele versie van phpBB3, helemaal gratis. Dit is inclusief:</p><ul><li>Installatie</li><li>Configuratie</li><li>Technische vragen</li><li>Problemen die zijn gerelateerd aan potentiële fouten in de software</li><li>Updaten van een Release Candidate (RC) versie naar de laatste stabiele versie</li><li>Converteren van phpBB 2.0.x naar phpBB3</li><li>Converteren van een ander discussie forumsoftware naar phpBB3 (bekijk het <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=6">SupportForum</a>)</li></ul><p>Wij moedigen gebruikers aan die nog steeds beta-versies hebben van phpBB3, dat ze hun installatie vervangen met een nieuwe kopie van de laatste versie.</p><h2>Extensies / Stijlen</h2><p>Voor problemen die zijn gerelateerd aan extensies kan je terecht in de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=12">Extensies Forums</a>.<br />Voor problemen die gerelateerd zijn aan stijlen, templates of afbeeldingensets, kan je terecht in de <a href="http://www.phpbbservice.nl/forum/viewforum.php?f=13">Stijlen Forums</a>.<br /><br />Als je vraag is gerelateerd aan een specifiek pakket, dan plaats je het direct in het onderwerp dat gaat over dat pakket.</p><h2>Verkijgen van support</h2><p><ul><li><a href="http://www.phpBBservice.nl/forum/">Supportforums</a></li><li><a href="http://www.phpBBservice.nl/docs/">Documentatie</a></li><li><a href="http://www.phpBBservice.nl/forum/viewforum.php?f=66">phpBB3 handleidingen</a></li><li><a href="http://www.phpbbservice.nl/docs/handleiding/3.0/snellestart/index.php">Snelle Start Handleiding</a></li></ul><br /><br />',
	'SYNC_FORUMS'				=> 'Synchronisatie van forums gestart',
	'SYNC_POST_COUNT'			=> 'Bezig met het synchroniseren van post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Bezig met het synchroniseren van post_counts van <var>entry</var> %1$s tot en met %2$s.',
	'SYNC_TOPICS'				=> 'Synchronisatie van onderwerpen gestart',
	'SYNC_TOPIC_ID'				=> 'Bezig met het synchroniseren van onderwerpen van <var>topic_id</var> %1$s tot %2$s.',

	'TABLES_MISSING'			=> 'De volgende tabellen kunnen niet worden gevonden<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix voor tabellen in de database',
	'TABLE_PREFIX_EXPLAIN'		=> 'De prefix moet starten met een letter en mag alleen letters, getallen en onderstrepingen bevatten.',
	'TABLE_PREFIX_SAME'			=> 'De tabelprefix moet hetzelfde zijn als de software waarvan je wilt converteren.<br />» Ingevoerde tabelprefix was %s.',
	'TESTS_PASSED'				=> 'Tests geslaagd',
	'TESTS_FAILED'				=> 'Tests mislukt',

	'UNABLE_WRITE_LOCK'			=> 'Onmogelijk om een sluitbestand te schrijven.',
	'UNAVAILABLE'				=> 'Niet beschikbaar',
	'UNWRITABLE'				=> 'Niet schrijfbaar',
	'UPDATE_TOPICS_POSTED'		=> 'Genereren van geplaatste onderwerpsinformatie',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Er is een fout ontstaan terwijl er geplaatse onderwerpsinformatie werd gegenereerd. Je kan deze stap opnieuw uitvoeren in het beheerderspaneel nadat het conversieproces is voltooid.',
	'VERIFY_OPTIONS'			=> 'Conversieopties bevestigen',
	'VERSION'					=> 'Versie',

	'WELCOME_INSTALL'			=> 'Welkom bij de phpBB3-installatie',
	'WRITABLE'					=> 'Schrijfbaar',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Alle bestanden zijn bijgewerkt met de laatste phpBB-versie.',
	'ARCHIVE_FILE'				=> 'Bronbestand binnen het archief',

	'BACK'				=> 'Terug',
	'BINARY_FILE'		=> 'Binairbestand',
	'BOT'				=> 'Spider/Bot',

	'CHANGE_CLEAN_NAMES'			=> 'De methode die wordt gebruikt om er zeker van te zijn dat een gebruikersnaam niet door meerdere gebruikers wordt gebruikt of zijn gewijzigd. Er zijn sommige gebruikers die dezelfde naam hebben wanneer je ze vergelijkt met de nieuwe methode. Je zal deze gebruikers moeten verwijderen of hernoemen om er zeker van te zijn dat elke naam door één gebruiker wordt gebruikt, voordat je verder kan gaan.',
	'CHECK_FILES'					=> 'Bestanden controleren',
	'CHECK_FILES_AGAIN'				=> 'Bestanden opnieuw controleren',
	'CHECK_FILES_EXPLAIN'			=> 'Met de volgende stap worden alle bestanden vergeleken met de update bestanden - dit kan enige tijd in beslag nemen als dit de eerste bestandscontrole is.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Volgens je database gebruik je nu de laatst recente versie. Je kan nu doorgaan met de bestandscontrole om er zeker van te zijn dat alle bestanden echt de laatste phpBB-versie gebruiken.',
	'CHECK_UPDATE_DATABASE'			=> 'Doorgaan met het updateproces',
	'COLLECTED_INFORMATION'			=> 'Bestandsinformatie',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'De lijst hieronder weergeeft de informatie over de bestanden die bijgewerkt moeten worden. Lees de informatie aan het begin van elk statusblok om te zien wat ze betekenen en wat je moet doen om een succesvolle update uit te voeren.',
	'COLLECTING_FILE_DIFFS'			=> 'Bezig met verzamelen van bestandsverschillen',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Je zal je nu moeten <a href="../ucp.php?mode=login">aanmelden op je forum</a> en controleren of alles correct werkt. Vergeet niet om de install-map te verwijderen, hernoemen of te verplaatsen!',
	'CONTINUE_UPDATE_NOW'			=> 'Nu doorgaan met het updateproces',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Doorgaan met de update',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Begin van het conflict - Orgineel bestandscode voor de update',
	'CURRENT_VERSION'				=> 'Huidige versie',
	
	'DATABASE_TYPE'						=> 'Database-type',
	'DATABASE_UPDATE_COMPLETE'			=> 'Het bijwerken van de database is voltooid!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Bijwerken van de database hervatten',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Het database-updatebestand in de install-map is niet up-to-date. Wees er zeker van dat je de correcte versie van het bestand hebt geüpload.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'The database update has not yet completed.',
	'DELETE_USER_REMOVE'				=> 'Gebruiker en berichten verwijderen',
	'DELETE_USER_RETAIN'				=> 'Gebruiker verwijderen maar behoud berichten',
	'DESTINATION'						=> 'Doelbestand',
	'DIFF_INLINE'						=> 'Inline',
	'DIFF_RAW'							=> 'Raw unified diff',
	'DIFF_SEP_EXPLAIN'					=> 'Code blok gebruikt binnen het bijgewerkt/nieuw bestand',
	'DIFF_SIDE_BY_SIDE'					=> 'Zij aan zij',
	'DIFF_UNIFIED'						=> 'Unified diff',
	'DO_NOT_UPDATE'						=> 'Dit bestand niet bijwerken',
	'DONE'								=> 'Klaar',
	'DOWNLOAD'							=> 'Downloaden',
	'DOWNLOAD_AS'						=> 'Downloaden als',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Aangepast bestandsarchief downloaden (aanbevolen)',
	'DOWNLOAD_CONFLICTS'				=> 'Conflicten voor dit bestand downloaden',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Zoek voor &lt;&lt;&lt; om te kijken voor conflicten',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Aangepast bestandsarchief downloaden',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Wanneer je het archief hebt gedownload, moet je het archief uitpakken. Je vindt de aangepaste bestanden die je moet uploaden naar je phpBB-hoofdmap (waar je o.a het bestand config.php, memberlist.php etc kan terugvinden) in het archief. Upload de bestanden dan naar de juiste locaties. Wanneer je alle bestanden hebt geüpload, controleer je alle bestanden opnieuw met de andere knop hieronder.',

	'EDIT_USERNAME'	=> 'Gebruikersnaam wijzigen',
	'ERROR'			=> 'Fout',
	'EVERYTHING_UP_TO_DATE'		=> 'Alles is nu bijgewerkt en je gebruikt de laatste phpBB-versie. Ga je nu <a href="%1$s">aanmelden op je forum</a> om te controleren of alles correct werkt. Vergeet niet om de installatie-map te verwijderen of te hernoemen. Stuur ons bijgewerkte informatie over je server en forumconfiguratie vanuit de <a href="%2$s">Verstuur statistische informatie</a> module in je beheerderspaneel.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Bestand is al bijgewerkt,',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Bestand niet toegestaan om gediffed te worden.',
	'FILE_USED'						=> 'Informatie gebruikt van',			// Single file
	'FILES_CONFLICT'				=> 'Conflicterende bestanden',
	'FILES_CONFLICT_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. phpBB heeft gevonden dat deze bestanden conflicten veroorzaken als ze worden samengevoegd. Onderzoek deze conflicten en probeer ze handmatig op te lossen, of hervat het bijwerkingsproces en kies dan de voorkeurs-samenvoegingsmethode. Wanneer je de conflicten handmatig oplost vergeet dan niet om de bestanden daarna opnieuw te controleren nadat je ze hebt aangepast. Je kan ook nog kiezen welke samenvoegingsmethode je wilt gebruiken voor elk bestand. De eerste methode zal het resultaat hebben dat de regels die een conflict veroorzaakten in het bestand zullen worden verwijderd, de andere manier zal als resultaat hebben dat je al je aanpassingen kwijtraakt van het nieuwere bestand.',
	'FILES_DELETED'					=> 'Verwijderde bestanden',
	'FILES_DELETED_EXPLAIN'			=> 'De volgende bestanden bestaan niet meer in de nieuwe versie. Deze bestanden zullen verwijderd moeten worden van je installatie.',
	'FILES_MODIFIED'				=> 'Aangepaste bestanden',
	'FILES_MODIFIED_EXPLAIN'		=> 'De volgende bestanden zijn aangepast en vertegenwoordigen niet de originele bestanden van de oude versie. Het bijgewerkte bestand zal worden samengevoegd met je aanpassingen en het nieuwe bestand.',
	'FILES_NEW'						=> 'Nieuwe bestanden',
	'FILES_NEW_EXPLAIN'				=> 'De volgende bestanden bestaan momenteel niet in je installatie. Deze bestanden zullen worden toegevoegd aan je installatie.',
	'FILES_NEW_CONFLICT'			=> 'Nieuwe conflicterende bestanden',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'De volgende bestanden zijn nieuw in de laatste versie, maar er is bepaald dat er al een bestand bestaat met dezelfde naam op dezelfde positie. Dit bestand zal worden overschreven door het nieuwe bestand.',
	'FILES_NOT_MODIFIED'			=> 'Niet aangepaste bestanden',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'De volgende bestanden zijn niet aangepast, en zijn gelijk aan de originele phpBB-bestanden van de versie die je wilt bijwerken.',
	'FILES_UP_TO_DATE'				=> 'Bestanden die al zijn bijgewerkt',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'De volgende bestanden zijn al up-to-date en hoeven niet te worden bijgewerkt.',
	'FTP_SETTINGS'					=> 'FTP-instellingen',
	'FTP_UPDATE_METHOD'				=> 'FTP-upload',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'De update-bestanden zijn onverenigbaar met de geïnstalleerde versie. De geïnstalleerde versie is %1$s en de update-bestanden zijn voor het bijwerken van phpBB %2$s naar %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'De bijgewerkte bestanden zijn niet compleet.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Het bijwerken van de database is succesvol voltooid. Nu kan je verder gaan met de update.',

	'KEEP_OLD_NAME'		=> 'Gebruikersnaam behouden',

	'LATEST_VERSION'		=> 'Laatste versie',
	'LINE'					=> 'Regel',
	'LINE_ADDED'			=> 'Toegevoegd',
	'LINE_MODIFIED'			=> 'Aangepast',
	'LINE_REMOVED'			=> 'Verwijderd',
	'LINE_UNMODIFIED'		=> 'Niet aangepast',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Om de installatie te kunnen bijwerken moet je eerst aangemeld zijn.',

	'MAPPING_FILE_STRUCTURE'	=> 'Om het uploaden te vereenvoudigen zijn hier de locaties waar de bestanden te vinden zijn in je phpBB-installatie.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Modificaties samenvoegen',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Niet samenvoegen - gebruik een nieuw bestand',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Niet samenvoegen - gebruik het huidig geïnstalleerde bestand',
	'MERGE_MOD_FILE_OPTION'		=> 'Modificaties samenvoegen (Verwijdert de nieuwe phpBB-code binnen het blok dat een conflict vormt)',
	'MERGE_NEW_FILE_OPTION'		=> 'Modificaties samenvoegen (Verwijdert de aangepaste code binnen het blok dat een conflict vormt)',
	'MERGE_SELECT_ERROR'		=> 'Conflicterende bestandssamenvoegings-mode is niet correct geselecteerd.',
	'MERGING_FILES'				=> 'Verschillen samenvoegen',
	'MERGING_FILES_EXPLAIN'		=> 'Momenteel bezig met het verzamelen van de uiteindelijke bestandswijzigingen.<br /><br />Wacht totdat phpBB alle acties heeft uitgevoerd op de gewijzigde bestanden.',

	'NEW_FILE'						=> 'Einde van het conflict',
	'NEW_USERNAME'					=> 'Nieuwe gebruikersnaam',
	'NO_AUTH_UPDATE'				=> 'Je hebt niet voldoende rechten om te kunnen updaten',
	'NO_ERRORS'						=> 'Geen fouten',
	'NO_UPDATE_FILES'				=> 'De volgende bestanden zijn niet bijgewerkt',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'De volgende bestanden zijn nieuw of aangepast maar de map waar ze zich normaal in bevinden kon niet worden gevonden in je installatie. Als deze lijst andere bestanden bevat van een andere map dan language/ of styles/ dan heb je waarschijnlijk de mappenstructuur aangepast en dan is de update waarschijnlijk incompleet.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Er is geen geldige update-map gevonden, wees er zeker van dat je de relevante bestanden hebt geüpload.<br /><br />Je installatie blijkt <strong>niet</strong> up-to-date te zijn. Update-pakketten zijn beschikbaar voor je versie van phpBB %1$s, bezoek daarvoor <a href="http://www.phpbbservice.nl/downloads/" rel="external">http://www.phpbbservice.nl/downloads/</a> om het correcte pakket te verkrijgen om te updaten van versie %2$s naar versie %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Je versie is up-to-date. Het is niet nodig om het update-hulpmiddel uit te voeren. Als je een integriteitscontrole wilt uitvoeren op de bestanden, wees er dan zeker van dat je de correcte update-bestanden upload.',
	'NO_UPDATE_INFO'				=> 'Het update-informatiebestand kan niet worden gevonden.',
	'NO_UPDATES_REQUIRED'			=> 'Er zijn geen updates nodig',
	'NO_VISIBLE_CHANGES'			=> 'Er zijn geen zichtbare wijzigingen',
	'NOTICE'						=> 'Opmerking',
	'NUM_CONFLICTS'					=> 'Aantal conflicten',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Momenteel zijn er %1$d van de %2$d bestanden gecontroleerd op verschillen.<br />Wacht totdat alle bestanden zijn gecontroleerd.',

	'OLD_UPDATE_FILES'		=> 'De update-bestanden zijn niet up-to-date. De update-bestanden die gevonden zijn, zijn voor een update van phpBB %1$s naar phpBB %2$s, maar de laatste versie van phpBB is %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Huidig pakket werkt versie bij naar',
	'PERFORM_DATABASE_UPDATE'			=> 'Start een database-update',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Hieronder vindt je een knop naar het update-database-script. De database-update kan eventjes duren, stop het script niet als het eventueel lijkt dat het vastloopt. Nadat de database-update succesvol is uitgevoerd, volg je de instructies om door te gaan met het update-proces.',
	'PREVIOUS_VERSION'					=> 'Vorige versie',
	'PROGRESS'							=> 'Vooruitgang',

	'RELEASE_ANNOUNCEMENT'		=> 'Aankondiging',
	'RESULT'					=> 'Resultaat',
	'RUN_DATABASE_SCRIPT'		=> 'Mijn database nu bijwerken',

	'SELECT_DIFF_MODE'			=> 'Diff-mode selecteren',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Bestandsformaat voor het archief kiezen',
	'SELECT_FTP_SETTINGS'		=> 'FTP-instellingen selecteren',
	'SHOW_DIFF_CONFLICT'		=> 'Verschillen/conflicten weergeven',
	'SHOW_DIFF_DELETED'			=> 'Bestandsinhoud weergeven',
	'SHOW_DIFF_FINAL'			=> 'Uiteindelijk bestand weergeven',
	'SHOW_DIFF_MODIFIED'		=> 'Samengevoegde verschillen weergeven',
	'SHOW_DIFF_NEW'				=> 'Bestandsinhoud weergeven',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Verschillen weergeven',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Verschillen weergeven',
	'SOME_QUERIES_FAILED'		=> 'Sommige queries zijn mislukt, welke dat zijn en de fouten zijn hieronder weergegeven.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Dit is mogelijk nergens om je zorgen over te maken, de update zal worden hervat. Mocht dit mislukken en je kan het update-proces niet voltooien dan zal je ondersteuning moeten vragen op onze <a href="http://www.phpBBservice.nl/forum/">supportforums</a>. Lees ook de <a href="../docs/README.html">README</a> voor verdere informatie over het verkrijgen van verdere hulp of bezoek de website van <a href="http://www.phpBBservice.nl">phpBBservice.nl</a>.',
	'STAGE_FILE_CHECK'			=> 'Bestanden controleren',
	'STAGE_UPDATE_DB'			=> 'Database bijwerken',
	'STAGE_UPDATE_FILES'		=> 'Bestanden bijwerken',
	'STAGE_VERSION_CHECK'		=> 'Versiecontrole',
	'STATUS_CONFLICT'			=> 'Aangepast bestand veroorzaakt conflicten',
	'STATUS_DELETED'			=> 'Verwijderd bestand',
	'STATUS_MODIFIED'			=> 'Aangepast bestand',
	'STATUS_NEW'				=> 'Nieuw bestand',
	'STATUS_NEW_CONFLICT'		=> 'Nieuw conflicterend bestand',
	'STATUS_NOT_MODIFIED'		=> 'Niet aangepast bestand',
	'STATUS_UP_TO_DATE'			=> 'Bestand is al bijgewerkt',

	'TOGGLE_DISPLAY'			=> 'Bestandslijst bekijken/verbergen',
	'TRY_DOWNLOAD_METHOD'		=> 'Je mag proberen om de aangepaste bestandsmethode te downloaden.<br />Deze methode werkt altijd, en het is ook de aanbevolen update-methode.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Probeer deze methode nu',

	'UPDATE_COMPLETED'				=> 'Update voltooid',
	'UPDATE_DATABASE'				=> 'Database bijwerken',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Met de volgende stappen zal de database worden bijgewerkt.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Bezig met het bijwerken van het database-schema',
	'UPDATE_FILES'					=> 'Bestanden bijwerken',
	'UPDATE_FILES_NOTICE'			=> 'Wees er ook zeker van dat je de forumbestanden ook bijgewerkt hebt, dit bestand werkt alleen de database bij.',
	'UPDATE_INSTALLATION'			=> 'phpBB-installatie bijwerken',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Met deze optie, is het mogelijk om je phpBB-installatie te updaten naar de laatste versie.<br />Tijdens het proces zullen alle bestanden gecontroleerd worden op hun aanwezigheid. Je kan ook alle verschillen bekijken van de bestanden voordat je gaat updaten.<br /><br />De bestandsupdate kan je op twee manieren doen.</p><h2>Handmatige update</h2><p>Met deze update download je alleen je persoonlijke set van gewijzigde bestanden om er zeker van te zijn dat je geen extensies kwijt raakt die je hebt geïnstalleerd. Nadat je dit pakket hebt gedownload, zal je de bestanden handmatig moeten uploaden naar hun correcte plaats in je phpBB-hoofdmap, dus waar je de bestanden config.php, memberlist.php, enz kan terugvinden. Wanneer je dat hebt gedaan, kan je een bestandscontrole doen dat je laat zien of de bestanden correct zijn geüpload naar de juiste locatie.</p><h2>Automatische update met de FTP</h2><p>Deze methode is bijna hetzelfde als de eerste, maar met deze methode hoef je niet de gewijzigde bestanden te downloaden naar je eigen computer. Dit wordt namelijk gedaan voor je. Om deze methode te gebruiken heb je de FTP-aanmeldgegevens nodig wanneer er naar wordt gevraagd. Wanneer dat klaar is, zal je worden herleidt naar de bestandscontrolemethode dat controleert of alles correct is bijgewerkt.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Versiemededeling</h1>

		<p>Lees de (Engelstalige) aankondiging voordat je begint met het updaten van je forum, het kan belangrijke informatie bevatten. Je vindt daar ook de volledige downloadlinks en een overzicht van de wijzigingen ( changelog ).</p>

		<br />

		<h1>Hoe kan ik mijn forum updaten met het Automatische update-pakket?</h1>

		<p>De aanbevolen manier van updaten die hieronder staat beschreven is alleen geldig voor het Automatische update-pakket. Je mag je forum ook updaten met de methodes die beschreven zijn in het <a href="../docs/INSTALL.html">INSTALL.html</a> document. De stappen om phpBB3 automatisch te updaten zijn als volgt:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Ga naar de downloadspagina van <a href="http://www.phpbb.nl/downloads/" title="http://www.phpbb.nl/downloads/">phpBB.nl</a> of <a href="http://www.phpBBservice.nl/downloads/" title="http://www.phpBBservice.nl/downloads/">phpBBservice.nl</a> en download het "Automatisch update-pakket".<br /><br /></li>
            <li>Pak het archiefbestand uit.<br /><br /></li>
			<li>Upload de uitgepakte "install" en "vendor" mappen naar je phpBB-hoofdmap (waar je config.php staat).<br /><br /></li>
		</ul>

		<p>Eenmaal geüpload, zal je forum, door het uploaden van de install-map, voor gewone gebruikers uitgeschakeld zijn.<br /><br />
		<strong><a href="%1$s" title="%1$s">Ga nu naar de install-map en begin met het updaten van je forum</a>.</strong><br />
		<br />
		Daar zal je geholpen worden met het updaten. Je wordt ook op de hoogte gebracht zodra alles geüpdatet is.
		</p>
	',
	'UPDATE_METHOD'					=> 'Update-methode',
	'UPDATE_METHOD_EXPLAIN'			=> 'Je kan hier de update-methode selecteren. Als je gebruikt maakt van de FTP-upload optie, dan zal er een formulier worden weergegeven waarbij je de FTP-accountgegevens moet invoeren. Met deze methode zullen alle bestanden automatisch worden verplaatst naar de nieuwe locatie en back-ups van de oude bestanden zullen ook worden gemaakt doormiddel van .bak in de bestandsnaam. Als je ervoor kiest om de aangepaste bestanden te downloaden moet je ze eerst uitpakken en later handmatig uploaden naar de juiste locatie.',
	'UPDATE_REQUIRES_FILE'			=> 'Voor het update-script moet het volgende bestand aanwezig zijn: %s',
	'UPDATE_SUCCESS'				=> 'Update is succesvol',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Alle bestanden zijn succesvol bijgewerkt. De volgende stap heeft betrekking op het controleren van al je bestanden, wees er dus zeker van dat je alle bestanden goed hebt geüpload.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Bezig met het bijwerken van de versie en optimaliseren van de tabellen',
	'UPDATING_DATA'					=> 'Gegevens aan het bijwerken',
	'UPDATING_TO_LATEST_STABLE'		=> 'Database bijwerken naar de laatst stabiele versie',
	'UPDATED_VERSION'				=> 'Bijgewerkte versie',
	'UPLOAD_METHOD'					=> 'Uploadmethode',

	'UPDATE_DB_SUCCESS'				=> 'Database-update was succesvol.',
	'UPDATE_FILE_SUCCESS'			=> 'Bestandsupdate was succesvol.',
	'USER_ACTIVE'					=> 'Actieve gebruiker',
	'USER_INACTIVE'					=> 'Inactieve gebruiker',

	'VERSION_CHECK'					=> 'Versiecontrole',
	'VERSION_CHECK_EXPLAIN'			=> 'Controleert je phpBB installatie of deze nog up-to-date is.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Je phpBB installatie is niet up-to-date. Ga door met het update-proces.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Je phpBB installatie is niet up-to-date.<br />Hieronder is een link naar de uitgave-aankondiging, wat meer informatie alsmede instructies over het updaten bevat.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Je phpBB installatie is niet up-to-date.',
	'VERSION_UP_TO_DATE'			=> 'Je phpBB installatie is up-to-date. Ook al zijn er momenteel geen updates beschikbaar, kan je doorgaan om een bestandsgeldigheidstest uit te voeren.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Je phpBB installatie is up-to-date. Er zijn momenteel geen updates beschikbaar.',
	'VIEWING_FILE_CONTENTS'			=> 'Bekijk bestandsinhoud',
	'VIEWING_FILE_DIFF'				=> 'Bekijk bestandsverschillen',

	'WRONG_INFO_FILE_FORMAT'	=> 'Verkeerde info bestandsformaat',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Bedankt, het beheer',
	'CONFIG_SITE_DESC'				=> 'Een korte beschrijving van je forum',
	'CONFIG_SITENAME'				=> 'jedomein.nl',

	'DEFAULT_INSTALL_POST'			=> 'Dit is een voorbeeldbericht van je phpBB3-installatie. Je mag dit bericht, dit onderwerp, en ook nog dit forum verwijderen als je wilt, aangezien alles correct werkt. Tijdens het installatieproces is je eerste categorie en je eerste forum ingesteld voor de voor-geïnstalleerde groepen; beheerders, zoekrobots, forummoderators, gasten, geregistreerde gebruikers en de geregistreerde COPPA-gebruikers. Als je je eerste categorie en je eerste forum wilt verwijderen, vergeet dan niet voor alle nieuwe categorieën en forums die je hebt aangemaakt de permissies voor alle gebruikersgroepen in te stellen. Het is aanbevolen om je eerste categorie en je eerste forum te hernoemen, en de permissies hiervan te kopiëren wanneer je nieuwe categorieën en forums aanmaakt. Veel plezier!',

	'FORUMS_FIRST_CATEGORY'			=> 'Je eerste categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Beschrijving van je eerste forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Je eerste forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Site Beheer',
	'REPORT_WAREZ'					=> 'Dit bericht bevat links naar illegale software.',
	'REPORT_SPAM'					=> 'Het gemelde bericht heeft als enig doel om te adverteren voor een website of ander product.',
	'REPORT_OFF_TOPIC'				=> 'Het gemelde bericht is off-topic.',
	'REPORT_OTHER'					=> 'Het gemelde bericht valt niet in een andere categorie, gebruik het informatieveld hieronder:',

	'SMILIES_ARROW'					=> 'Pijl',
	'SMILIES_CONFUSED'				=> 'Verward',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Huilen',
	'SMILIES_EMARRASSED'			=> 'Beschaamd',
	'SMILIES_EVIL'					=> 'Erg boos',
	'SMILIES_EXCLAMATION'			=> 'Uitroep',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Lachend',
	'SMILIES_MAD'					=> 'Gek',
	'SMILIES_MR_GREEN'				=> 'Mr. Groen',
	'SMILIES_NEUTRAL'				=> 'Neutraal',
	'SMILIES_QUESTION'				=> 'Vraag',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rollende Ogen',
	'SMILIES_SAD'					=> 'Bedroeft',
	'SMILIES_SHOCKED'				=> 'Geschokt',
	'SMILIES_SMILE'					=> 'Lach',
	'SMILIES_SURPRISED'				=> 'Verrast',
	'SMILIES_TWISTED_EVIL'			=> 'Kwaadaardig',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Erg Blij',
	'SMILIES_WINK'					=> 'Knipoog',

	'TOPICS_TOPIC_TITLE'			=> 'Welkom bij phpBB3',
));
