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
	'ADMIN_CONFIG'				=> 'Administraatori seaded',
	'ADMIN_PASSWORD'			=> 'Administraatori salasõna',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Kinnita administraatori salasõna',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Palun sisesta salasõna, mis on 6 kuni 30 sümbolit pikk.',
	'ADMIN_TEST'				=> 'Kontrolli administraatori seadeid',
	'ADMIN_USERNAME'			=> 'Administraatori kasutajanimi',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Palun sisesta kasutajanimi, mis on 3 kuni 20 sümbolit pikk.',
	'APP_MAGICK'				=> 'Imagemagick tugi [ Manused ]',
	'AUTHOR_NOTES'				=> 'Autori märge<br />» %s',
	'AVAILABLE'					=> 'Saadaval',
	'AVAILABLE_CONVERTORS'		=> 'Saadaval konverterid',

	'BEGIN_CONVERT'					=> 'Alusta konverteerimist',
	'BLANK_PREFIX_FOUND'			=> 'Tabeli skaneerimine, et ükski installatsioon ei kasutaks antud eesliidest.',
	'BOARD_NOT_INSTALLED'			=> 'Installatsiooni ei leitud',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'phpBB ühtne konverteerija raamistik vajab algset phpBB3\'e installatsiooni, palun <a href="%s">jätka phpBB3 installeerimisega</a>.',
	'BACKUP_NOTICE'					=> 'Enne foorumi uuendamist tee palun oma foorumist varukoopia, juhuks kui esineb mingeid vigu uuendamise jooksul.',

	'CATEGORY'					=> 'Kategooria',
	'CACHE_STORE'				=> 'Vahemälu tüüp',
	'CACHE_STORE_EXPLAIN'		=> 'Füüsiline asukoht, kuhu andmed on paigutatud, eelistatud on failisüsteem.',
	'CAT_CONVERT'				=> 'Konverteeri',
	'CAT_INSTALL'				=> 'Installeeri',
	'CAT_OVERVIEW'				=> 'Ülevaade',
	'CAT_UPDATE'				=> 'Uuendus',
	'CHANGE'					=> 'Muuda',
	'CHECK_TABLE_PREFIX'		=> 'Palun kontrolli tabeli eesliidet ja proovi uuesti.',
	'CLEAN_VERIFY'				=> 'Puhasta ja kontrolli viimast struktuuri',
	'CLEANING_USERNAMES'		=> 'Puhasta kasutajanimed',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> on puhas kasutajanimi:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Sinu vanalt foorumilt on leitud samade kasutajatenimedega kasutajaid. Et lõpetada konverteerimine, palun kustuta või nimeta ümber need kasutajad, et kõigil oleks omamoodi kasutajanimi.',
	'COLLIDING_USER'			=> '» kasutaja id: <strong>%d</strong> kasutajanimi: <strong>%s</strong> (%d postitusi)',
	'CONFIG_CONVERT'			=> 'Konverteerin konfiguratsiooni',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Konfiguratsiooni faili kirjutamine ebaõnnestus. Alternatiivsed võimalused selle faili loomiseks on näidatud allpool.',
	'CONFIG_FILE_WRITTEN'		=> 'Konfiguratsiooni fail on loodud. Sa võid nüüd minna järgmise installatsiooni etapi juurde.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 config muutuja “%s” on tühi.',
	'CONFIG_RETRY'				=> 'Uuesti',
	'CONTINUE_CONVERT'			=> 'Jätka konverteerimist',
	'CONTINUE_CONVERT_BODY'		=> 'On leitud varasem konverteerimise katse. Sa võid nüüd valida, kas alustad uut konverteerimist või jätkad varasemat.',
	'CONTINUE_LAST'				=> 'Jätka last statements',
	'CONTINUE_OLD_CONVERSION'	=> 'Jätka varasemalt alustatud konverteerimist',
	'CONVERT'					=> 'Konverteeri',
	'CONVERT_COMPLETE'			=> 'Konverteerimine lõpetatud',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Sa oled nüüd edukalt konverteerinud oma phpBB foorumi versioonile 3.1. Võid nüüd logida sisse oma <a href="../">foorumile</a>. Ühtlasi veendu, et kõik seaded oleksid ülekantud õigesti, enne kui kustutad oma serverist kausta "install". phpBB abi on saadaval läbi <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">dokumentatsiooni</a> ja <a href="https://www.phpbb.com/community/viewforum.php?f=466">tugifoorumi</a>.',
	'CONVERT_INTRO'				=> 'Tere tulemast phpBB Ühinenud Konverteerijate Raamistikku ( phpBB Unified Convertor Framework)',
	'CONVERT_INTRO_BODY'		=> 'Siin võid sa importida andmeid teistest installitud foorumisüsteemidest. Alumine nimekiri näitab saadaval konverteerimise mooduleid. Kui seal ei ole selle foorumi süsteemi konverteerijat, millelt tahad konverteerida, siis kontrolli meie veebilehte uute konverteerijate saamiseks.',
	'CONVERT_NEW_CONVERSION'	=> 'Uus konverteerimine',
	'CONVERT_NOT_EXIST'			=> 'Konkreetset konverteerijat ei eksisteeri.',
	'CONVERT_OPTIONS'			=> 'Valikud',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informatsioon, mille sisestasid on kinnitatud. Et alustada konverteerimist, vajuta nuppu siin all.',
	'CONV_ERR_FATAL'			=> 'Tõsine konverteerimise viga',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Manuse ftp kaudu üleslaadimine on lubatud vanal foorumil. Palun keela ftp üleslaadimine ja ole kindel, et üleslaadimis kaust on määratud, siis kopeeri kõik manused uude veebi kausta. Kui oled selle teinud, taaskäivita konvertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Konverdi jaoks ei ole seadete informatsiooni.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ei saa kätte foorumi ligipääsu informatsiooni.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ei saa kätte kategooriaid.',
	'CONV_ERROR_GET_CONFIG'				=> 'Foorumi konfiguratsiooni ei õnnestunud tagasi saada.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Faili “%s” lugemine ebaõnnestus.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ei saanud kätte gruppide ligipääsu informatsiooni.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Grupi tabelis add_bots() on tuvastatud ebakõla - Sa pead lisama kõik spetsiaalsed grupid, kui soovid teha seda manuaalselt.',
	'CONV_ERROR_INSERT_BOT'				=> 'Bot\'i ei saa kasutajatabelisse lisada.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Bot\'i ei saa botitabelisse lisada.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Kasutajat ei saa lisada kasutaja tabelisse user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Sõnum parseriga',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Teade arendajale: pead määrama $convertor[\'avatar_path\'], et kasutada %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Suhtelist teed algfoorumile ei määratud.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Teade arendajale: pead määrama $convertor[\'avatar_gallery_path\'], et kasutada %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Gruppi “%1$s” ei leitud kohast %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Teade arendajale: pead määrama $convertor[\'ranks_path\'] et kasutada %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Teade arendajale: pead määrama $convertor[\'smilies_path\'], et kasutada %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Teade arendajale: pead määrama $convertor[\'upload_path\'], et kasutada %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ei suudetud lisada/uuendada õiguste seadeid.',
	'CONV_ERROR_PM_COUNT'				=> 'Ei suudetud valida kausta ps kogust.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ei suudetud asendada vana kategooriat uue foorumiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ei suudetud asendada vana foorumit uue foorumiga.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ei suudetud saada kasutajate autentimisinfot.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Vale grupp “%1$s” määratud kohas %2$s.',
	'CONV_OPTIONS_BODY'					=> 'See leht kogub vajalikud andmed lähtefoorumile sisenemiseks. Sisene vana foorumi andmebaasi andmetesse; Konverteerija ei muuda midagi andmebaasis all. Lähtefoorum peaks olema keelatud paremaks konvertimiseks.',
	'CONV_SAVED_MESSAGES'				=> 'Salvestatud sõnumid',

	'COULD_NOT_COPY'			=> 'Ei suuda kopeerida fail <strong>%1$s</strong> kausta <strong>%2$s</strong><br /><br />Palun kontrolli, et sihtkaust oleks olemas ja et sinna saaks kirjutada.',
	'COULD_NOT_FIND_PATH'		=> 'Ei leia teed endisele foorumile. Palun kontrolli seadeid ja proovi uuesti.<br />» %s oli määratud lähteteena.',

	'DBMS'						=> 'Andmebaasi tüüp',
	'DB_CONFIG'					=> 'Andmebaasi konfiguratsioon',
	'DB_CONNECTION'				=> 'Andmebaasi ühendus',
	'DB_ERR_INSERT'				=> '<code>INSERT</code> käsku läbi viies ilmnes viga.',
	'DB_ERR_LAST'				=> '<var>query_last</var> käsku läbi viies ilmnes viga.',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> käsu lõpetamisel ilmnes viga.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var>  käsu lõpetamisel ilmnes viga, %s (“%s”).',
	'DB_ERR_SELECT'				=> '<code>SELECT</code> käsku jooksutades ilmnes viga..',
	'DB_HOST'					=> 'Andmebaasi serveri nimi e. DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN on pikendatult Data Source Name ja on oluline vaid ODBC installeerimiste puhul. PostgreSQL\'i puhul kasuta "localhost", et ühendude serverisse läbi UNIX\'i ja 127.0.0.1, et läbi TCP',
	'DB_NAME'					=> 'Andmebaasi nimi',
	'DB_PASSWORD'				=> 'Andmebaasi parool',
	'DB_PORT'					=> 'Andmebaasi serveri port',
	'DB_PORT_EXPLAIN'			=> 'Jäta tühjaks, kui ei tea, et server töötaks ebatavalise pordi peal.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Vabandame, kuid see skript ei toeta phpBB uuendamist, mille versioon eelneb versioonile “%1$s”. Versioon, mis on sul hetkel installeeritud, on “%2$s”. Palun uuenda vahepealsele versioonile enne selle skripti käivitamist. Abi saamiseks pöördu phpBB.com tugifoorumisse.',
	'DB_USERNAME'				=> 'Andmebaasi kasutajanimi',
	'DB_TEST'					=> 'Kontrolli ühendust',
	'DEFAULT_LANG'				=> 'Vaikimisi foorumi keel',
	'DEFAULT_PREFIX_IS'			=> 'Konvertija ei leidnud tabeleid määratud eesliitega. Palun ole kindel, et sisestasid konverteeritava foorumi õiged andmed. Vaikimisi eesliide %1$s tabelitel on <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'NVäärtust ei määratud testifaili muutujale konvertijas. Kui oled selle konvertija kasutaja, ei tohiks sa näha seda veateadet, palun teata sellest veast konvertija autorile. Kui oled konvertija autor, pead sisestama nime failile, mis on algfoorumis, et lubada tee selleni kinnitada.',
	'DIRECTORIES_AND_FILES'		=> 'Kausta ja faili seaded',
	'DISABLE_KEYS'				=> 'Võtmete keelamine',
	'DLL_FTP'					=> 'Kaug-FTP tugi [ Installeerimine ]',
	'DLL_GD'					=> 'GD graafika tugi [ Visuaalkinnitus ]',
	'DLL_MBSTRING'				=> 'Mitmebaidiste sümbolite tugi',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ läbi ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Kohalik ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL koos MySQLi Extension\'iga',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'XML tugi [ Jabber ]',
	'DLL_ZLIB'					=> 'zlib pakkimise tugi [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Laadi alla konfiguratsioon',
	'DL_CONFIG_EXPLAIN'			=> 'Võid laadida täieliku konfiguratsioonifaili oma arvutisse. YSiise pead üles laadima faili serverisse käsitsi, asendades juurkaustas oleva config.php faili. Palun pea meeles üles laadida fail ASCII formaadis (vaata oma FTP programmi abifaile, kui sa ei tea, kuidas seda aktiveerida). Kui oled üles laadinud config.php faili, vajuta "Valmis" nuppu, et minna edasi järgmisesse etappi.',
	'DL_DOWNLOAD'				=> 'Laadi alla',
	'DONE'						=> 'Valmis',

	'ENABLE_KEYS'				=> 'Võtmete taaslubamine. See võib võtta natuke aega.',

	'FILES_OPTIONAL'			=> 'Valikulised failid ja kaustad',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Valikuline</strong> - Need failid, kaustad ja õiguste seaded ei ole nõutud. Installeerimissüsteem üritab need luua, kui neid pole või neisse ei saa kirjutada. Nende olemasolu kiirendab installeerimist.',
	'FILES_REQUIRED'			=> 'Failid ja kaustad',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Nõutud</strong> - Et phpBB töötaks õigesti, on vaja mõningate kaustade olemasolu, kuhu saab ka kirjutada. Kui näed "Ei leitud" kirja, pead looma vajaliku faili või kausta. Kui näed "Pole kirjutatav" kirja, pead muutma õigusi kaustal või failil, et phpBB saaks sinna kirjutada.',
	'FILLING_TABLE'				=> 'Täidan tabelit <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Täidan tabeleid',

	'FINAL_STEP'				=> 'Mine viimasesse etappi',
	'FORUM_ADDRESS'				=> 'Foorumi aadress',
	'FORUM_ADDRESS_EXPLAIN'		=> 'See on URL sinu endisel foorumil, näiteks <samp>http://www.example.com/phpBB2/</samp>. Kui siia on sisestatud aadress, asendatakse kõik selle aadressi kaustad failid uue foorumiga, k.a. signatuurid, avatarid ja privaatsõnumid.',
	'FORUM_PATH'				=> 'Foorumi tee',
	'FORUM_PATH_EXPLAIN'		=> 'See on sinu vana foorumi <strong>suhteline</strong> tee serveris <strong>võrreldes phpBB3 installatsiooniga</strong>.',
	'FOUND'						=> 'Leitud',
	'FTP_CONFIG'				=> 'Vii üle konfiguratsioon FTP kaudu',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB on tuvastanud FTP mooduli olemasolu serveris. Võid üritada installeerida konfiguratsioonifaili läbi selle, kui soovid. Pead seljuhul sisestama nõutud informatsiooni. Kasutajanimeks ja parooliks on serveri kasutajanimi ja parool! (küsi teenuse pakkujalt, kui sa pole kindel, mis need on.)',
	'FTP_PATH'					=> 'FTP tee',
	'FTP_PATH_EXPLAIN'			=> 'See on tee juurkaustast phpBB kaustani, näiteks <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Laadi üles',

	'GPL'						=> 'Üldine avalik litsents',

	'INITIAL_CONFIG'			=> 'Baaskonfiguratsioon',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Nüüd, kui installatsioon on tuvastanud, et sinu server saab jooksutada phpBB\'d, pead sisestama seaded. Kui sa ei tea, kuidas andmebaasi ühendada, võta ühendust veebiteenuse pakkujaga või kasuta phpBB tugifoorumeid. Kui sisestad andmed, kontrolli nende õigsust enne jätkamist.',
	'INSTALL_CONGRATS'			=> 'Õnnitleme!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Oled nüüd edukalt installeerinud phpBB %1$s. Palun jätka, valides ühe järgnevaist valikuist:</p>
		<h2>Konverteeri olemasolev foorum phpBB3 tarkvarale</h2>
		<p>ThpBB ühtne konverteerija raamistik toetab phpBB versioonide 2.0.x ja teiste foorumitarkvarade konverteerimist phpBB3e. Kui sul on olemas tingimustele vastav konverteeritav foorum, palun <a href="%2$s">mine konverteerijasse</a>.</p>
		<h2>Avalda oma foorum internetis!</h2>
		<p>Vajutades nuppu all, viiakse sind statistilise info phpBB\'le saatmise vormi peale Administraatori juhtpaneelis (AJP). PhpBB on tänulik selle info edastamise eest. Pärast peaksid uurima sinule pakutavaid valikuid. Abi on saadaval läbi <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">dokumentatsiooni(inglise keeles)</a>, <a href="%3$s">README (inglise keeles)</a> ja <a href="https://www.phpbb.com/community/viewforum.php?f=466">tugifoorumite</a>.</p><p><strong>Palun kustuta, teisalda või nimeta ümber /install/ kaust enne foorumi kasutamist. Kui see kaust on olemas ja oma õige nimega, pääsed ligi vaid administratsioonile.</strong>',
	'INSTALL_INTRO'				=> 'Tere tulemast kasutama phpBB tarkvara!',

	'INSTALL_INTRO_BODY'		=> 'Selle valikuga on võimalik installeerida phpBB oma serverisse.</p><p>Et jätkata, pead teadma oma andmebaasi seadeid. Juhul, kui sa neid ei tea, siis võta ühendust oma veebimajutajaga ja küsi järgi. Sa ei saa jätkata ilma nendeta. Sa pead teadma järgmisi asju:</p>

	<ul>
		<li>Andmebaasi tüüp - millist andmebaasi sa kasutad.</li>
		<li>Andmebaasi serverinimi või DSN - andmebaasi serveri aadress.</li>
		<li>Andmebaasi serveri port - (enamikel juhtudel seda ei lähe vaja).</li>
		<li>Andmebaasi nimi - andmebaasi nimi, kuhu paigaldatakse tabelid.</li>
		<li>Andmebaasi kasutajanime ja parooli.</li>
	</ul>

	<p>phpBB3 toetab alljärgnevaid andmebaasi tüüpe:</p>
	<ul>
		<li>MySQL 3.23+ (MySQLi toega)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000+ (otse või läbi ODBC)</li>
		<li>MS SQL Server 2005+</li>
		<li>Oracle</li>
	</ul>

	<p>Andmebaasid mida toetab sinu server näidatakse ära järgmisel lehel.',
	'INSTALL_INTRO_NEXT'		=> 'Et alustada installeerimist, vajuta nuppu all.',
	'INSTALL_LOGIN'				=> 'Logi sisse',
	'INSTALL_NEXT'				=> 'Järgmine etapp',
	'INSTALL_NEXT_FAIL'			=> 'Mõned kontrollid ebaõnnestusid ja sa peaks need parandama enne jätkamist. Nende mitteparandamine võib lõppeda mittetäieliku installeerimisega.',
	'INSTALL_NEXT_PASS'			=> 'Kõik põhilised kontrollid õnnestusid ja saad nüüd jätkata installeerimise järgmisesse etappi. Kui oled muutnud mingeid õigusi, mooduleid vms ja soovid uuesti kontrollida, võid seda teha.',
	'INSTALL_PANEL'				=> 'phpBB paigaldamine',
	'INSTALL_SEND_CONFIG'		=> 'PhpBB ei suutnud konfiguratsiooniinfot kirjutada config.php faili. See võib juhtuda., kui faili ei eksisteeri või tal on valed õigused. Valikud, mida edasi teha, on all.',
	'INSTALL_START'				=> 'Alusta installeerimist',
	'INSTALL_TEST'				=> 'Kontrolli uuesti',
	'INST_ERR'					=> 'Installeerimise viga',
	'INST_ERR_DB_CONNECT'		=> 'Ei suuda ühenduda andmebaasi, vaata veateadet all.',
	'INST_ERR_DB_FORUM_PATH'	=> 'TValitud andmebaasifail on sinu foorumi kataloogipuus. Peaksid panema selle faili kohta, kuhuveebist ei pääse ligi.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Sisestatud eesliide on vigane. See peab algama alfanumeerilise sümboliga, samuti peab see sisaldama ainult alfanumeerilisi sümboleid, numbreid ja alljooni.',
	'INST_ERR_DB_NO_ERROR'		=> 'Veateadet ei antud.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Installeeritud MySQL versioon ei ühildu “MySQL koos MySQLi Laiendusega” valikuga, mille valisid. Proovi “MySQL” valikut.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Installeeritud SQLite versioon on liiga vana, See peab olema uuendatud vähemalt versioonile 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Installeeritud SQLite3 versioon on liiga vana, See peab olema uuendatud vähemalt versioonile 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Installeeritud Oracle\'i versioon nõuab sult <var>NLS_CHARACTERSET</var> parameetri muutmist väärtusele <var>UTF8</var>. Kas uuenda versoonile 9.2+ või muuda parameetrit.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Valitud andmebaasi ei loodud <var>UNICODE</var> või <var>UTF8</var> kodeeringus. Proovi installeerida andmebaasi <var>UNICODE</var> või <var>UTF8</var> kodeeringus.',
	'INST_ERR_DB_NO_NAME'		=> 'Andmebaasi nime ei sisestatud.',
	'INST_ERR_EMAIL_INVALID'	=> 'Sisestatud e-posti aadress pole korrektne.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'E-posti aadressid ei ole identsed.',
	'INST_ERR_FATAL'			=> 'Tõsine installeerimisviga',
	'INST_ERR_FATAL_DB'			=> 'Ilmnes tõsine ja parandamatu andmebaasi viga. See võib tuleneda sellest, e valitud kasutajal pole vajalikke õigusi <code>CREATE TABLES</code> või <code>INSERT</code> käskude täitmiseks. Edasine info võib olla antud all. Palun kontakteeru teenusepakkujaga või otsi abi phpBB tugifoorumitest.',
	'INST_ERR_FTP_PATH'			=> 'Ei suuda muuta antud kausta, palun kontrolli teed.',
	'INST_ERR_FTP_LOGIN'		=> 'Ei suuda logida FTP serverisse, kontrolli oma kasutajanime ja parooli.',
	'INST_ERR_MISSING_DATA'		=> 'Pead täitma kõik väljad selles osas.',
	'INST_ERR_NO_DB'			=> 'Ei suuda laadida PHP moodulit valitud andmebaasitüübile.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Sisestatud paroolid ei ole identsed.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Sisestatud parool on liiga pikk. Maksimumpikkus on 30 sümbolit.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Sisestatud parool on liiga lühike. Miinimumpikkus on 6 sümbolit.',
	'INST_ERR_PREFIX'			=> 'Tabelid valitud eesliitega on juba olemas, palun vali mõni muu eesliide.',
	'INST_ERR_PREFIX_INVALID'	=> 'Tabeli eesliide on ebakorrektne sinu andmebaasi puhul. Palun proovi muud, eemalda näiteks sidekriipsud.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Sisestatud tabeli eesliide on liiga pikk. Maksimumpikkus on %d sümbolit.',
	'INST_ERR_USER_TOO_LONG'	=> 'Sisestatud kasutajanimi on liiga pikk. Maksimumpikkus on 20 sümbolit.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Sisestatud kasutajanimi on liiga lühike. Miinimumpikkus on 3 sümbolit.',
	'INVALID_PRIMARY_KEY'		=> 'Ebakorrektne põhivõti: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Pane tähele, et see võib aega võtta... Palun ära peata skripti.',

	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> laiendi kontroll',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Nõutud</strong> - <samp>mbstring</samp> on PHP laiendus, mis pakub mitmebaidiseid stringide funktsioone. Mõned mbstring\'i võimalused ei ühildu phpBB\'ga ja need peab keelama.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Funktsiooni ülelaadimine',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> peab olema määratud nulliks või neljaks.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Läbipaistev kodeering.',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> peab olema määratud nulliks.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP sisendi sümbolite konvertimine',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> peab olema määratud valikule <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP väljundi sümbolite konvertimine',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> peab olema määratud valikule <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Palun tee kindlaks, et kaust oleks olemas sinu veebiserveris, ning kirjutatav ja proovi uuesti:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Palun tee kindlaks, et kasutad oleks olemas sinu veebiserveris, ning kirjutatavad ja siis proovi uuesti:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'MySQL andmebaasi skeem on vananenud. phpBB tuvastas skeemi versioonile 3.x/4.x, kuid server jookseb MySQL %2$s.<br /><strong>Enne foorumi uuendamist pead skeemi uuendama.</strong><br /><br />Palun külasta <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Teadmistebaasi artiklit, kuidas uuendada MySQL schemat</a>. Probleemide ilmemisel võid võtta ühendust meiega <a href="https://www.phpbb.com/community/viewforum.php?f=466">tugifoorumis</a>.',

	'NAMING_CONFLICT'			=> 'Nimede vastuolu: %s ja %s on mõlemad aliased väärtusele<br /><br />%s',
	'NEXT_STEP'					=> 'Edasi',
	'NOT_FOUND'					=> 'Ei leia',
	'NOT_UNDERSTAND'			=> 'Ei saa aru %s #%d, tabel %s (“%s”)',
	'NO_CONVERTORS'				=> 'Ühtegi konverteerijat pole kasutamiseks saadaval.',
	'NO_CONVERT_SPECIFIED'		=> 'Ühtegi konverteerijat ei määratud.',
	'NO_LOCATION'				=> 'Ei suuda määrata asukohta. Kui tead, et Imagemagick on installeeritud, võid valida asukoha ilmes Administraatori juhtpaneelis',
	'NO_TABLES_FOUND'			=> 'Tabeleid ei leitud.',

	'OVERVIEW_BODY'				=> 'Tere tulemast kasutama phpBB foorumitarkvara!<br /><br />phpBB® on avatud lähtekoodiga foorumitarkvara, mis on ülemaailma laialt levinud. phpBB3 alustas juba aastast 2000. Nagu tema eelkäijad on ka phpBB3 rohkete funktsioonide rikas, kasutajasõbralik ja täielikult toetatud phpBB meeskonna poolt. phpBB3 suuresti täiustab seda mis tegi phpBB2 populaarseks, ning on lisatud mitmed nõutuid funktsioone, mida ei ole saadaval eelmistes versioonides. Me loodame et see vastab Teie ootustele.<br /><br />See paigaldusviisard aitab sind installeerida oma serverisse phpBB3 tarkvara, uuendada oma vana versioon foorumist värskeima vastu, ning samuti konverteerida phpBB3-ks erinevad foorumid (samuti ka phpBB2). Me soovitame teil ka lugeda rohkema informatsiooni saamiseks <a href="../docs/INSTALL.html">paigaldusjuhendit</a> või külastada <a href="http://www.phpbbeesti.net/" target="_blank">www.phpbbeesti.net</a>.<br /><br />Et lugeda phpBB3 litsentsi või tugisüsteemi kohta rohkem teada saada, siis palun vali vastav valik lehekülje menüüst. phpBB3 paigaldamiseks või foorumi konverteerimiseks vali vastav vaheleht ülevalt.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 tugi',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>ei tööta</strong>, kui installeerimine pole läi viidud PCRE toega UTF-8 kodeeringus.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funktsioon getimagesize() onc saadaval',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Nõutud</strong>- Et phpBB funktsioneeriks korrektselt, peab getimagesize funktsioon olema saadaval.',
	'PHP_JSON_SUPPORT'				=> 'PHP JSON tugi',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Nõutud</strong>- Et phpBB funktsioneeriks korrektselt, peab PHP JSON funktsioon olema saadaval.',
	'PHP_OPTIONAL_MODULE'			=> 'Valikulised moodulid',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Valikuline</strong> - Need moodulid või programmid on valikulised. Kuid kui need on saadaval, annavad nad lisavõimalusi.',
	'PHP_SUPPORTED_DB'				=> 'Toetatud andmebaasid',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Nõutud</strong> - Pead toetama vähemalt ühte sobivat andmebaasi PHP\'s. Kui ühtegi andmebaasi pole saadaval, peaksid võtma ühendust oma teenusepakkujaga või üle vaatama seotud PHP installeerimisdokumendid.',
	'PHP_REGISTER_GLOBALS'			=> 'PHP seade <var>register_globals</var> on keelatud',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'PhpBB töötab ka siis, kui see seade on lubatud, , kuid kui võimalik, peaks see seade olema turvakaalutlustel keelatud.',
	'PHP_SAFE_MODE'					=> 'Turvarežiim',
	'PHP_SETTINGS'					=> 'PHP versioon ja seaded',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Nõutud</strong> - Pead jooksutama vähemalt PHP versiooni 5.3.3 (PHP 7 ei ole toetatud), et installeerida foorumit. Kui <var>turvarežiim</var> on kuvatud all, siis su PHP töötab selles režiimis. See seab piirangud kaugadministratsioonile ja sarnastele võimalustele.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP seade <var>allow_url_fopen</var> on lubatud',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Valikuline</strong> - See seade on valikuline, kuid mõned foorumi funktsioonid, näiteks lingitud avatarid ei tööta korralikult ilma selleta.',
	'PHP_VERSION_REQD'				=> 'PHP version: >= 5.3.3, < 7.0.0-dev',
	'POST_ID'						=> 'Postituse ID',
	'PREFIX_FOUND'					=> 'Sinu tabelite skaneering näitas kehtivat installatsiooni, kasutades <strong>%s</strong> tabeli eesliitena.',
	'PREPROCESS_STEP'				=> 'Lõpetan eeltöötlemise funktsioone/käske',
	'PRE_CONVERT_COMPLETE'			=> 'Kõik sammud, mis tuleb teha enne konvertimist, on nüüd lõpetatud. Võid nüüd alustada konverteerimisega. Pead võib-olla käsitsi tegema ja seadma mõningaid asju. Pärast konvertimist kontrolli määratud õigusi, tee uuesti otsingu indeks ning tee kindlaks, et failid said õigesti kopeeritud, näiteks avatarid ja emotikonid.',
	'PROCESS_LAST'					=> 'Töötlen viimaseid lauseid',

	'REFRESH_PAGE'				=> 'Värskenda lehekülge, et jätkata',
	'REFRESH_PAGE_EXPLAIN'		=> 'Kui lubatud, Konverteerija värskendab lehe ise, et jätkata. Kui see on su esimene konverteerimine testimiseks ja soovid avastada vigu, soovitame selle keelata.',
	'REQUIREMENTS_TITLE'		=> 'Installeerimise sobivus',
	'REQUIREMENTS_EXPLAIN'		=> 'Enne phpBB installeerimisega jätkamist peab tegema mõned kontrollid, et olla kindel, et sinu server suudab jooksutada phpBBd. Palun ole kindel, et sa ei jätka enne, kui kontrollid on edukad.',
	'RETRY_WRITE'				=> 'Proovi uuesti kirjutada konfiguratsiooni',
	'RETRY_WRITE_EXPLAIN'		=> 'Kui soovid muuta õigusi config.php failis, et lubada phpBBl sellesse kirjutada. Kui soovid seda teha, vajuta "Proovi uuesti" nuppu all. Pea meeles taastada õigused config.php failis peale installeerimist.',

	'SCRIPT_PATH'				=> 'Skripti tee',
	'SCRIPT_PATH_EXPLAIN'		=> 'Tee, kus phpBB asub suhtes domeeninimega, näiteks <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Vali keel',
	'SERVER_CONFIG'				=> 'Vali konfiguratsioon',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Otsingu indeksit ei konverditud',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Sinu vana otsingu indeksit ei konverditud. Otsimine ei anna kunagi tulemusi. Otsingu indekseid saab lisada juhtpaneelist.',
	'SELECT_FORUM_GA'			=> 'phpBB 3.1 üldteadeanded on lingitud foorumitega. Vali foorum oma üldteadaannete jaoks (saab hiljem liigutada):',
	'SOFTWARE'					=> 'Foorumi tarkvara',
	'SPECIFY_OPTIONS'			=> 'Vali konverteerimise valikud',
	'STAGE_ADMINISTRATOR'		=> 'Administraatori andmed',
	'STAGE_ADVANCED'			=> 'Täiendatud seaded',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Sellel lehel olevad seaded on vajalikud vaid siis, kui tead, et sul on vaja midagi erinevat vaikeseadetest. Kui sa pole kindel, mine järgmisesse etappi, sest neid seadeid saab muuta ka hiljem Administraatori juhtpaneelist',
	'STAGE_CONFIG_FILE'			=> 'Konfiguratsioonifail',
	'STAGE_CREATE_TABLE'		=> 'Loo andmebaasi tabelid',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Andmebaasi tabelid, mida kasutab phpBB 3.1, on loodud. Mine edasi järgmisesse etappi, et phpBB3 installeerimine lõpule viia.',
	'STAGE_DATABASE'			=> 'Andmebaasi seaded',
	'STAGE_FINAL'				=> 'Lõppetapp',
	'STAGE_INTRO'				=> 'Tutvustus',
	'STAGE_IN_PROGRESS'			=> 'Konverteerimine käib',
	'STAGE_REQUIREMENTS'		=> 'Nõuded',
	'STAGE_SETTINGS'			=> 'Seaded',
	'STARTING_CONVERT'			=> 'Alustan konverteerimist',
	'STEP_PERCENT_COMPLETED'	=> 'Etapp <strong>%d</strong> / <strong>%d</strong>',
	'SUB_INTRO'					=> 'Tutvustus',
	'SUB_LICENSE'				=> 'Litsents',
	'SUB_SUPPORT'				=> 'Tugi',
	'SUCCESSFUL_CONNECT'		=> 'Edukas ühendus',
	'SUPPORT_BODY'				=> 'Täistuge pakutakse alates viimasest phpBB3 väljalaskest - tasuta. See sisaldab:</p><ul><li>paigaldamisega seotud küsimused</li><li>seadistamisega seotud küsimused</li><li>tehnilised küsimused</li><li>tarkvaral esineval probleemid ja vead</li><li>uuendamine RC versioonilt viimasele stabiilsemaile versioonile</li><li>phpBB 2.0.x konventeerimine phpBB3</li><li>cMõne muu foorumitarkvara konventeerimine phpBB3-ks (vaata palun ka <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Kasutajad kes kasutavad mõnda beta versiooni julgustame uuendama selle mõnele stabiilsemale versioonile.</p><h2>Laiendused / Stiilid</h2><p>Laiendustega seotud küsimused palun postita <a href="https://www.phpbb.com/community/viewforum.php?f=451">Laienduste foorumisse</a>.<br />Stiilide, kujunduste ja pidifailidega seotud küsimused palun postita <a href="https://www.phpbb.com/community/viewforum.php?f=471">Stiilide foorumisse</a>.<br /><br />Kui sinu küsimus on seotud mõne spetsiifilise laienduse või stiili kohta, siis ava uus teema oma küsimusega antud laienduse / stiili foorumis.</p><h2>Toe saamine</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Tere tulemast phpBB kasutajaks</a><br /><a href="https://www.phpbb.com/support/">Tugifoorum</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Alustamisjuhend</a><br /><br />Kindlustamaks, et oleksite kursis kõige uuemate uudiste ja uuendustega, siis soovitame teil liituda <a href="https://www.phpbb.com/support/">phpBB.com uudiskirjaga</a>.<br /><br />',
	'SYNC_FORUMS'				=> 'Alustan foorumite sünkroniseerimist',
	'SYNC_POST_COUNT'			=> 'Sünkroniseerin postituste arvu',
	'SYNC_POST_COUNT_ID'		=> 'Sünkroniseerin tabelit post_counts <var>sissekannet</var> %1$s kuni %2$s.',
	'SYNC_TOPICS'				=> 'Alustan teemade sünkroniseerimist',
	'SYNC_TOPIC_ID'				=> 'Sünkroniseerin teemasid <var>topic_id</var> %1$s kuni %2$s.',

	'TABLES_MISSING'			=> 'Ei suutnud leida neid tabeleid<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Tabelite eesliide andmebaasis',
	'TABLE_PREFIX_EXPLAIN'		=> 'Eesliide peab algama alfanumeerilise sümboliga, samuti peab see sisaldama ainult alfanumeerilisi sümboleid, numbreid ja alljooni.',
	'TABLE_PREFIX_SAME'			=> 'Eesliide peab olema sama, mis konverditaval foorumil.<br />» Valitud eesliide oli %s.',
	'TESTS_PASSED'				=> 'Kontrollid õnnestusid',
	'TESTS_FAILED'				=> 'Kontrollid ebaõnnestusid',

	'UNABLE_WRITE_LOCK'			=> 'Ei suuda kirjutada lukufaili..',
	'UNAVAILABLE'				=> 'Pole saadaval',
	'UNWRITABLE'				=> 'Pole kirjutatav',
	'UPDATE_TOPICS_POSTED'		=> 'Genereerin teemade infot',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Teemade info genereerimisel ilmnes viga. Võid proovida seda uuesti teha AJPs peale konverteerimise lõpetamist.',
	'VERIFY_OPTIONS'			=> 'Kontrollin konversiooni valikuid',
	'VERSION'					=> 'Versioon',

	'WELCOME_INSTALL'			=> 'Tere tulemast phpBB installatsiooni',
	'WRITABLE'					=> 'Kirjutatav',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Kõik failid on uuendatud viimase phpBB versioonini.',
	'ARCHIVE_FILE'				=> 'Lähtefail arhiivis',

	'BACK'				=> 'Tagasi',
	'BINARY_FILE'		=> 'Binaarfail',
	'BOT'				=> 'Ämblik/robot',

	'CHANGE_CLEAN_NAMES'			=> 'Meetodit, millega tehakse kindlaks, et üks kasutajanimi on kasutusel vaid üks kord, on muudetud. On mõningaid kasutajaid, kelel on sama nimi uue meetodi järgi. Pead kustutama või ümber nimetama need kasutajad.',
	'CHECK_FILES'					=> 'Kontrolli faile',
	'CHECK_FILES_AGAIN'				=> 'Kontrolli faile uuesti',
	'CHECK_FILES_EXPLAIN'			=> 'Järgmises etapis võrreldakse kõiki faile uute failidega - See võib võtta aega, kui see on esimene kord.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Sinu andmebaasi järgi on versioon kõige värskem. Võid jätkata failide kontrolliga, et olla kindel, et phpBB versioon on kõige värskem.',
	'CHECK_UPDATE_DATABASE'			=> 'Jätka uuendamist',
	'COLLECTED_INFORMATION'			=> 'Faili informatsioon',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Allolev nimekiri nimetab failid, mis vajavad uuendamist. Palun loe iga osa järel olevat infot, et sooritada edukas uuendus.',
	'COLLECTING_FILE_DIFFS'			=> 'Kogun faili erinevusi',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Peaksid nüüd oma foorumile <a href="../ucp.php?mode=login">sisselogima</a> ja kontrollima kas kõik töötab korralikult. Ära unusta kustutada, nimetada ümber või mujale liigutada kausta install!',
	'CONTINUE_UPDATE_NOW'			=> 'Jätka uuendamisega',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Jätka uuendamisega',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Praeguse originaalfaili kood enne uuendust',
	'CURRENT_VERSION'				=> 'Praegune versioon',

	'DATABASE_TYPE'						=> 'Andmebaasi tüüp',
	'DATABASE_UPDATE_COMPLETE'			=> 'Andmebaasi uuendamine on lõpetatud!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Jätka andmebaasi uuendamist',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Andmebaasi uuendamise fail on vananenud. Palun ole kindel, et laadisid üles õige versiooni failist.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Andmebaasi uuendamine ei ole veel lõpule viidud.',
	'DATABASE_VERSION'					=> 'Andmebaasi versioon',
	'DELETE_USER_REMOVE'				=> 'Kustuta kasutaja ja eemalda postitused',
	'DELETE_USER_RETAIN'				=> 'Kustuta kasutaja, kuid säilita postitused',
	'DESTINATION'						=> 'Sihtfail',
	'DIFF_INLINE'						=> 'Teksti sees',
	'DIFF_RAW'							=> 'Toores ühesugune diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kasutatud koodiplokk uuendatud/uues failis',
	'DIFF_SIDE_BY_SIDE'					=> 'Külg külje kõrval',
	'DIFF_UNIFIED'						=> 'Ühesugune diff',
	'DO_NOT_UPDATE'						=> 'Ära uuenda seda faili',
	'DONE'								=> 'Valmis',
	'DOWNLOAD'							=> 'Laadi alla',
	'DOWNLOAD_AS'						=> 'Laadi alla',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Laadi alla muudetud failide arhiiv (soovitatav)',
	'DOWNLOAD_CONFLICTS'				=> 'Selle faili laadimise vastuolud',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Otsi &lt;&lt;&lt;, et peatada vastuolud',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Laadi alla muudetud failide arhiiv',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Pärast allalaadimist peaksid faili lahti pakkima.Arhiivi seest leiad muudetud failid, mille pead üles laadima FTP kaudu phpBB kausta. Pärast üleslaadimist kontrolli faile uuesti valikutega all.',

	'EDIT_USERNAME'	=> 'Muuda kasutajanime',
	'ERROR'			=> 'Viga',
	'EVERYTHING_UP_TO_DATE'		=> 'Kõik on ajakohane phpBB viimase versiooniga. Lõpetuseks peaksid nüüd oma foorumile <a href="%1$s">sisselogima</a> ja vaatama kas kõik töötab tavapäraselt. Ära unusta kustutada, nimetada ümber või liigutada kaust install oma serveri root kaustast! Palun saada meile uuendatud informatsioon oma serveri seadetest vajutades <a href="%2$s">saada statistika</a> nuppu AJPs.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fail on juba ajakohane.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Diff pole lubatud.',
	'FILE_USED'						=> 'Informatsiooni kasutatud',			// Single file
	'FILES_CONFLICT'				=> 'Vastuolulised failid',
	'FILES_CONFLICT_EXPLAIN'		=> 'Järgnevad failid on muudetud ja ei ole originaalfailiga samad. phpBB tegi kindlaks, et failid satuvad vastuollu, kui neid proovida ühendada. Palun uuri vastuolusid ja proovi ühendada manuaalselt või jätkata soovitud ühendamismeetodiga. Saad valida eelistatud ühendamismeetodi eraldi igale failile. Esimene meetod võrdub vana faili vastuolus osade kadumisega, teisel juhtub sama uue failiga.',
	'FILES_DELETED'					=> 'Kustutatud failid',
	'FILES_DELETED_EXPLAIN'			=> 'Järgnevad failid ei eksisteeri uues versioonis. Need failid tuleks kustutada oma serveri foorumi kaustast.',
	'FILES_MODIFIED'				=> 'Muudetud failid',
	'FILES_MODIFIED_EXPLAIN'		=> 'Järgnevad failid on muudetud ja ei esinda vanu faile. Uuendatud fail on ühendatud vanast ja uuest failist.',
	'FILES_NEW'						=> 'Uued failid',
	'FILES_NEW_EXPLAIN'				=> 'Järgnevad failid hetkel ei eksisteeri sinu installatsioonis. Need failid lisatakse sinna.',
	'FILES_NEW_CONFLICT'			=> 'Uued vastuolulised failid',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Järgnevad failid on uued, kuid on kindlaks tehtud, et juba sama nimega fail on olemas samas kohas. See fail kirjutatakse üle uue faili poolt.',
	'FILES_NOT_MODIFIED'			=> 'Muutmata failid',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Järgnevad failid on muutmata ja on praegu olemas sinu vanas phpBB installatsioonis.',
	'FILES_UP_TO_DATE'				=> 'Juba uuendatud failid',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Järgnevad failid on juba uuendatud ja neid ei pea enam uuendama.',
	'FILES_VERSION'					=> 'Failide versioon',
	'FTP_SETTINGS'					=> 'FTP seaded',
	'FTP_UPDATE_METHOD'				=> 'FTP üleslaadimine',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Uuendamise failid on sobimatud sinu praeguse installatsiooniga. Praegune versioon on %1$s ja uuendamise failid on phpBB versioonist %2$s %3$s uuendamiseks.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Uuendamise failid on mittetäielikud.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Andmebaasi uuendus oli edukas. Nüüd pead jätkama uuendamisprotsessiga.',

	'KEEP_OLD_NAME'		=> 'Jäta kasutajanimi',

	'LATEST_VERSION'		=> 'Viimane versioon',
	'LINE'					=> 'Rida',
	'LINE_ADDED'			=> 'Lisatud',
	'LINE_MODIFIED'			=> 'Muudetud',
	'LINE_REMOVED'			=> 'Eemaldatud',
	'LINE_UNMODIFIED'		=> 'Muutmata',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Et uuendada, pead esmalt sisse logima.',

	'MAPPING_FILE_STRUCTURE'	=> 'Et  kergendada üleslaadimist, on siin phpBB failide asukohakaart',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Ühenda muudatused',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Ära ühenda - kasuta uut faili.',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Ära ühenda - kasuta vana faili.',
	'MERGE_MOD_FILE_OPTION'		=> 'Ühenda muudatused (eemaldab uue phpBB koodi vastuolulises osas).',
	'MERGE_NEW_FILE_OPTION'		=> 'Ühenda muudatused (eemaldab muudetud koodi vastuolulises osas).',
	'MERGE_SELECT_ERROR'		=> 'Vastuolulise faili ühendamismeetodid pole korrektselt valitud.',
	'MERGING_FILES'				=> 'Ühendan erinevusi',
	'MERGING_FILES_EXPLAIN'		=> 'Hetkel kogun viimaseid failimuudatusi.<br /><br />Palun oota, kuni phpBB on lõpetanud kõik toimingud failidega.',

	'NEW_FILE'						=> 'Vastuolu lõpp',
	'NEW_USERNAME'					=> 'Uus kasutajanimi',
	'NO_AUTH_UPDATE'				=> 'Pole autoriseeritud uuendama',
	'NO_ERRORS'						=> 'Vigadeta',
	'NO_UPDATE_FILES'				=> 'Ei uuenda järgnevaid faile',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'TJärgnevad failid on uued või muudetud, kuid nende asukohakausta praeguses installatsioonis ei leitud. Kui see nimekiri sisaldab muid faile peale language/ või styles/ austade failide, siis oled võib-olla muutnud kataloogi struktuuri ja uuendamine võib olla mittetäielik.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Korrektset uuendamiskataloogi ei leitud, palun ole kindel, et uuendasid vajalikud failid.<br /><br />Sinu installatsioon <strong>ei paista</strong> olevat kõige värskem. Uuendused on saadaval sinu versioonile %1$s, palun külasta <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a>, et allalaadida õige foorumi pakk, uuendamiseks versioonilt %2$s versioonile %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Sinu versioon on värskeim. pole vajadust jooksutada uuendamisprotsessi. Kui soovid kontrollida faile, ole kindel, et laadisid üles õiged failid.',
	'NO_UPDATE_INFO'				=> 'Uuendamise faili infot ei leitud.',
	'NO_UPDATES_REQUIRED'			=> 'Uuendust pole vaja',
	'NO_VISIBLE_CHANGES'			=> 'Pole nähtavaid muutusi',
	'NOTICE'						=> 'Teade',
	'NUM_CONFLICTS'					=> 'Vastuolude arv',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Hetkel on erinevusi %1$d\'l %2$d\'st kontrollitud failidest.<br />Palun oota, kuni kogumine on lõpetatud.',

	'OLD_UPDATE_FILES'		=> 'Uuendamisfailid on vananenud. Leitud uuendamisfailid on mõeldud uuendamiseks versioonilt %1$s versioonile %2$s kuid viimane versioon on %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Praegused uuendused versioonile',
	'PACKAGE_VERSION'					=> 'Faili versioon paigaldatud',
	'PERFORM_DATABASE_UPDATE'			=> 'Soorita andmebaasi uuendus',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'All leiad nupu andmebaasi uuendamise skriptile. uuendus võib võtta aega, seega ära peata uuendust, kui tundub, et see on kinni jooksnud. Päras andmebaasi uuendamist järgi juhiseid edasi uuendamiseks.',
	'PREVIOUS_VERSION'					=> 'Eelmine versioon',
	'PROGRESS'							=> 'Edenemine',

	'RELEASE_ANNOUNCEMENT'		=> 'Teadaanne',
	'RESULT'					=> 'Tulemus',
	'RUN_DATABASE_SCRIPT'		=> 'Uuenda andmebaas nüüd',

	'SELECT_DIFF_MODE'			=> 'Vali diff\'i laad',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Vali arhiiviformaat',
	'SELECT_FTP_SETTINGS'		=> 'Vali FTP seaded',
	'SHOW_DIFF_CONFLICT'		=> 'Näita erinevusi/vastuolusid',
	'SHOW_DIFF_DELETED'			=> 'Näita faili sisu',
	'SHOW_DIFF_FINAL'			=> 'Näita lõppfaili',
	'SHOW_DIFF_MODIFIED'		=> 'Näita ühendatud erinevusi',
	'SHOW_DIFF_NEW'				=> 'Näita failide sisu',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Näita erinevusi',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Näita erinevusi',
	'SOME_QUERIES_FAILED'		=> 'Mõned käsud ebaõnnestusid, vead on toodud all.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Selle pärast ilmselt ei pea muretsema, uuendus jätkub. Kui see peaks ebaõnnestuma, pead abi otsima meie tugifoorumitest. Vaata samuti <a href="../docs/README.html">LOE MIND</a> faili.',
	'STAGE_FILE_CHECK'			=> 'Kontrolli faile',
	'STAGE_UPDATE_DB'			=> 'Uuenda andmebaasi',
	'STAGE_UPDATE_FILES'		=> 'Uuenda faile',
	'STAGE_VERSION_CHECK'		=> 'Versiooni kontroll',
	'STATUS_CONFLICT'			=> 'Muudetud fail loob vastuolusid',
	'STATUS_DELETED'			=> 'Kustutatud fail',
	'STATUS_MODIFIED'			=> 'Muudetud fail',
	'STATUS_NEW'				=> 'Uus fail',
	'STATUS_NEW_CONFLICT'		=> 'Vastuoludega uus fail',
	'STATUS_NOT_MODIFIED'		=> 'Muutmata fail',
	'STATUS_UP_TO_DATE'			=> 'Juba uuendatud fail',

	'TOGGLE_DISPLAY'			=> 'Vaata/peida failide nimekiri',
	'TRY_DOWNLOAD_METHOD'		=> 'Võid proovida muudetud failide allalaadimist.<br />See meetod toimib alati ja on lisaks ka soovitatav viis.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Proovi seda meetodit',

	'UPDATE_COMPLETED'				=> 'Uuendus lõpetatud',
	'UPDATE_DATABASE'				=> 'Uuenda andmebaasi',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Järgmises etapis uuendatakse andmebaas.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Uuendan andmebaasi skeemi',
	'UPDATE_FILES'					=> 'Uuenda faile',
	'UPDATE_FILES_NOTICE'			=> 'Palun ole kindel, et oled uuendanud foorumi faile ka, see fail uuendab vaid su andmebaasi.',
	'UPDATE_INCOMPLETE'				=> 'Sinu phpBB paigaldus ei ole korrektselt uuendatud.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Palun loe järgnevat informatsiooni all, et parandada antud veateade.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Puudulik uuendus</h1>

		<p>Märkasime, et sinu viimane phpBB uuendamise paigaldus on puudulik või lõpetamata. Palun külasta lehekülge <a href="%1$s" title="%1$s">database_update script</a>, ning käivita see. Kui seda lehekülge ei leia, siis palun <a href="https://www.phpbb.com/downloads/" title="phpBB downloads">laadi alla oma pakendi versioon</a>, ning laadi see üles kausta "install" oma phpBB peakausta (asukohta kus asub config.php fail) ja siis <a href="%1$s" title="%1$s">käivita andmebaasi uuendamise skript</a> uuesti.</p>',

	'UPDATE_INSTALLATION'			=> 'Uuenda phpBB installatsiooni',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Selle valikuga on võimalik uuendada installatsioon viimasele versioonile.<br />Selle ajal kontrollitakse failid terviklikkust. Saad vaadata üle kõik erinevused ja failid enne uuendamist.<br /><br />Failiuuendust saab teha kahte erinevat moodi.</p><h2>Käsitsi uuendus</h2><p>Selle viisiga saad alla laadida komplekti kõikide failidega, et olla kindel, et sa ei kaota ühtegi muudetud faili. Peale allalaadimist pead failid üles laadima kaustadesse. Kui see on tehtud, saad kontrollida, kas laadisid failid õigesse kohta.</p><h2>Automaatne uuendus FTP\'ga</h2><p>See meetod on sarnane, kuid sa ei pea faile alla laadima ega üles laadima. Seda tehakse sinu eest. Et kasutada seda meetodit, pead teadma oma FTP andmeid. Kui see on lõpetatud, suunatakse sind tagasi siia, et kontrollida, kas kõik läks õigesti.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Väljalaske teadaanne</h1>

		<p>Enne kui alustad uuendamist, loe palun väljalaske teadaannet.</p>

		<br />

		<h1>Kuidas uuendadada oma foorumit automaatse uuendusfailiga</h1>

		<p>Soovituslik ja ainukene viis, mis on ära toodud siin on teha uuendus automaatselt. Samas sul on võimalus uuendada oma foorumit ka muudel viisidel - lähemalt loe INSTALL.html dokumentatsioonist. Automaatse uuenduse sammud on järgnevad:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Mine <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com allalaadimiste lehele</a> ja laadi alla uuendusfail kategooriast "Automatic Update Package".<br /><br /></li>
			<li>Paki arhiveeritud fail lahti.<br /><br /></li>
			<li>Paki lahti allalaaditud fail, ning laadi see üles oma serveri root kausta, kus asub sinu phpBB foorum (sinna kus asub ka sinu config.php fail).<br /><br /></li>
		</ul>

		<p>Ajal mil failid on üleslaaditud ei ole Sinu foorum kättesaadav teistele, kuna serveris asub install kaust.<br /><br />
		<strong><a href="%1$s" title="%1$s">Nüüd alusta uuendamisega, suunates oma veebilehitseja install kausta</a>.</strong><br />
		<br />
		Sind juhendatakse terve uuendamise aeg. Kui uuendus on lõpenud, siis antakse sulle ka sellest teada.
		</p>
	',
	'UPDATE_METHOD'					=> 'Uuendamise meetod',
	'UPDATE_METHOD_EXPLAIN'			=> 'Saad nüüd valida soovitud uuendamismeetodi. Kasutades FTP meetodit pead sisestama FTP jaoks vajalikud andmed. Selle meetodiga viiakse failid automaatselt õigesse asukohta ja varukoopiad tehakse vanadest failidest, lisades nime lõppu ".bak". Kui valid failide allalaadimise, saad need pärast ise käsitsi õigesse kohta üles laadida.',
	'UPDATE_REQUIRES_FILE'			=> 'Uuendaja nõuab järgneva faili olemasolu: %s',
	'UPDATE_SUCCESS'				=> 'Uuendamine oli edukas',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Kõik failid uuendatud. Järgmine etapp on failide kontrollimine, et teha kindlaks, kas kõik sai korralikult uuendatud.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Uuendan versiooni ja optimiseerin tabeleid',
	'UPDATING_DATA'					=> 'Uuendan andmeid',
	'UPDATING_TO_LATEST_STABLE'		=> 'Uuendan andmebaasi viimasele väljalaske versioonile',
	'UPDATED_VERSION'				=> 'Uuendatud versioon',
	'UPGRADE_INSTRUCTIONS'			=> 'Uus funktsioon <strong>%1$s</strong> on saadaval. Ole hea, ning loe <a href="%2$s" title="%2$s"><strong>väljalaske teadaannet</strong></a>, et saada teada mida antud uuendus pakub, ning kuidas uuendada.',
	'UPLOAD_METHOD'					=> 'Üleslaadimise meetod',

	'UPDATE_DB_SUCCESS'				=> 'Andmebaasiuuendus oli edukas.',
	'UPDATE_FILE_SUCCESS'			=> 'Faili uuendamine oli edukas.',
	'USER_ACTIVE'					=> 'Aktiivne kasutaja',
	'USER_INACTIVE'					=> 'Passiivne kasutaja',

	'VERSION_CHECK'					=> 'Versiooni kontroll',
	'VERSION_CHECK_EXPLAIN'			=> 'Kontrollib, kas installeeritud phpBB versioon on kõige uuem.',
	'VERSION_NOT_UP_TO_DATE'		=> 'Sinu phpBB versioon pole kõige uuem. Palun jätka uuendamisega.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Sinu phpBB versioon pole kõige uuem.<br />Allpool leiad lingi viimase versiooni väljalaske teadaandele ja instruktsioonid uuendamiseks.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Sinu phpBB versioon pole kõige uuem',
	'VERSION_UP_TO_DATE'			=> 'Sinu versioon on kõige uuem, uuendusi pole saadaval. Võid jätkata, et teha failidele kehtivuskontroll.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Sinu versioon on kõige uuem, uuendusi pole saadaval. Sa ei pea versiooni uuendama.',
	'VIEWING_FILE_CONTENTS'			=> 'Vaatan failide sisu',
	'VIEWING_FILE_DIFF'				=> 'Vaatan failide erinevusi',

	'WRONG_INFO_FILE_FORMAT'	=> 'Vale infofaili formaat',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Täname, foorumi meeskond!',
	'CONFIG_SITE_DESC'				=> 'Lühike tekst foorumi kirjeldamiseks',
	'CONFIG_SITENAME'				=> 'sinudomeen.ee',

	'DEFAULT_INSTALL_POST'			=> 'See on näidispostitus sinu installatsioonis. Kõik paistab töötavat. Võid kustutada selle postituse, kui soovid ja jätkata foorumi ülesseadmisega. Installeerimise käigus määrati sinu esimesele kategooriale ja foorumile vajalik õiguste komplekt eelloodud kasutajagruppidele, administraatoritele, bottidele, moderaatoritele, registreeritud kasutajatele ja külalistele. Kui otsustad kustutada oma esimese foorumi ja kategooria, ära unusta õiguste määramist uutele foorumitele ja kategooriatele. On siiski soovitav nimetada ümber see kategooria ja foorum ja kopeerida õigused siit uute kategooriate ja foorumite jaoks. Edu!',

	'FORUMS_FIRST_CATEGORY'			=> 'Sinu esimene kategooria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Esimese foorumi kirjeldus',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Sinu esimene foorum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Veebilehe administraator',
	'REPORT_WAREZ'					=> 'Postitus sisaldab linke illegaalsele või piraattarkvarale.',
	'REPORT_SPAM'					=> 'Postituse ainus eesmärk on reklaamida mõnd toodet või veebilehte.',
	'REPORT_OFF_TOPIC'				=> 'Postitus on teemast mööda.',
	'REPORT_OTHER'					=> 'Raporteerimise põhjus ei mahu ühegi teise kategooria alla, palun kasuta järgnevat informatsioonivälja.',

	'SMILIES_ARROW'					=> 'Nool',
	'SMILIES_CONFUSED'				=> 'Segaduses',
	'SMILIES_COOL'					=> 'Lahe',
	'SMILIES_CRYING'				=> 'Nuttev või väga kurb',
	'SMILIES_EMARRASSED'			=> 'Punastav',
	'SMILIES_EVIL'					=> 'Kuri või väga vihane',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Nohik',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Naerev',
	'SMILIES_MAD'					=> 'Vihane',
	'SMILIES_MR_GREEN'				=> 'Mr. Roheline',
	'SMILIES_NEUTRAL'				=> 'Neutraalne',
	'SMILIES_QUESTION'				=> 'Küsimus',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Silmi pööritav',
	'SMILIES_SAD'					=> 'Kurb',
	'SMILIES_SHOCKED'				=> 'Jahmatatud',
	'SMILIES_SMILE'					=> 'Naeratav',
	'SMILIES_SURPRISED'				=> 'Üllatunud',
	'SMILIES_TWISTED_EVIL'			=> 'Imelikult kuri',
	'SMILIES_UBER_GEEK'				=> 'Übernohik',
	'SMILIES_VERY_HAPPY'			=> 'Väga rõõmus',
	'SMILIES_WINK'					=> 'Silma pilgutav',

	'TOPICS_TOPIC_TITLE'			=> 'Tere tulemast phpBB3\'e',
));
