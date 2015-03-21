<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, array(
'ACP_SEARCH_INDEX_EXPLAIN'=>'Ovdje možeš upravljati backendskim indeksima pretraživanja.<br />Obzirom je u uporabi obično samo jedan backend, trebao/la bi izbrisati sve indekse od kojih nemaš koristi.<br />Nakon mijenjanja pojedinih (po)stavki pretraživanja [npr. minimalan/maksimalan broj znakova] bilo bi pametno ponovo kreirati indeks.',
'ACP_SEARCH_SETTINGS_EXPLAIN'=>'Ovdje možeš definirati koji backend pretraživanja će biti korišten za indeksiranje postova i vršenje pretraživanja [neke od postavki iste su za sve backende pretraživanja].',
'COMMON_WORD_THRESHOLD'=>'Prag učestalih riječi',
'COMMON_WORD_THRESHOLD_EXPLAIN'=>'Riječi koje su sadržane u većem postotku svih postova smatraju se učestalim riječima te su ignorirane prilikom pretraživanja [vrijedi samo za slučaj kada forum sadrži najmanje 100 postova].<br /> Za onemogućavanje praga učestalih riječi, vrijednost postavi na 0.',
'CONFIRM_SEARCH_BACKEND'=>'Jesi li siguran/na da želiš prebaciti forum na drugi backend pretraživanja?<br />Nakon promjene backenda pretraživanja, trebat ćeš kreirati indeks za novi backend pretraživanja.<br />Ukoliko nemaš namjeru prebaciti forum na stari backend pretraživanja, možeš izbrisati indeks starog backenda.',
'CONTINUE_DELETING_INDEX'=>'Nastavi prethodan proces izbrisivanja indeksa',
'CONTINUE_DELETING_INDEX_EXPLAIN'=>'Započeo je proces izbrisivanja indeksa.<br />Ukoliko želiš pristupiti početnoj stranici pretraživanja, trebaš ili završiti proces ili ga prekinuti.',
'CONTINUE_INDEXING'=>'Nastavi prethodan proces indeksiranja',
'CONTINUE_INDEXING_EXPLAIN'=>'Započeo je proces indeksiranja.<br />Ukoliko želiš pristupiti početnoj stranici pretraživanja, trebaš ili završiti proces ili ga prekinuti.',
'CREATE_INDEX'=>'Kreiraj indeks',
'DELETE_INDEX'=>'Izbriši indeks',
'DELETING_INDEX_IN_PROGRESS'=>'U tijeku je izbrisivanje indeksa.',
'DELETING_INDEX_IN_PROGRESS_EXPLAIN'=>'Backend pretraživanja trenutno čisti/prazni indeks što bi moglo potrajati nekoliko minuta.',
//'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'=>'MySQL fulltext backend može biti korišten samo s MySQL4 i novijim verzijama.',
'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'=>'MySQL fulltext backend može biti korišten samo s MySQL4 i novijim verzijama.',
//'FULLTEXT_MYSQL_NOT_MYISAM'=>'MySQL fulltext indeksi mogu biti korišteni samo s MyISAM tablicama.',
'FULLTEXT_MYSQL_NOT_SUPPORTED'=>'MySQL fulltext indeksi mogu biti korišteni samo s MyISAM ili InnoDB [MySQL 5.6.4 i novije verzije] tablicama.',
'FULLTEXT_MYSQL_TOTAL_POSTS'=>'Broj ukupno indeksiranih postova',
//'FULLTEXT_MYSQL_MBSTRING'=>'Podrška za non-latin UTF-8 znakove (mbstring):',
//'FULLTEXT_MYSQL_PCRE'=>'Podrška za non-latin UTF-8 znakove (PCRE):',
//'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'=>'Ukoliko PCRE nema svojstva unicode znakova, backend pretraživanja će pokušati koristiti mbstringov regularni <em>expression engine</em>.',
// <!-- Kocka je hičena! -->
//'FULLTEXT_MYSQL_PCRE_EXPLAIN'=>'Ovaj backend pretraživanja zahtijeva PCRE svojstva unicode znakova, dostupno samo u PHP 4.4, 5.1 i novijim verzijama, ukoliko se želi (pre)traži(va)ti non-latin znakove.',
'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'=>'Riječi s najmanje “ovoliko” znakova će biti indeksirane za pretraživanje. <br />Samo hoster/ti može/š možete promijeniti ove postavke mijenjanjem postavki mysql konfiguracije.',
'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'=>'Riječi s ne više od “ovoliko” znakova će biti indeksirane za pretraživanje.<br />Samo hoster/ti može/š promijeniti ove postavke mijenjanjem postavki mysql konfiguracije.',
'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'=>'PostgreSQL fulltext backend može biti korišten samo s PostgreSQL.',
'FULLTEXT_POSTGRES_TOTAL_POSTS'=>'Broj ukupno indeksiranih postova',
'FULLTEXT_POSTGRES_VERSION_CHECK'=>'PostgreSQL verzija',
'FULLTEXT_POSTGRES_TS_NAME'=>'Konfiguracijski profil teksta pretraživanja:',
'FULLTEXT_POSTGRES_MIN_WORD_LEN'=>'Minimalna dužina riječi za ključne riječi',
'FULLTEXT_POSTGRES_MAX_WORD_LEN'=>'Maksimalna dužina riječi za ključne riječi',
'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'=>'Ovaj backend pretraživanja zahtijeva PostgreSQL verziju 8.3 ili noviju.',
'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'=>'Konfiguracijski profil teksta pretraživanja koji se koristi za određivanje i analizu rječnika.',
'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'=>'Riječi s najmanje toliko znakova bit će uključene u pretraživanje.',
'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'=>'Riječi s najviše toliko znakova bit će uključene u pretraživanje.',
'FULLTEXT_SPHINX_CONFIGURE'=>'Podesi sljedeće postavke za generiranje <em>sphinx config</em> datoteke',
'FULLTEXT_SPHINX_DATA_PATH'=>'Putanja do mape podataka',
'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'=>'Koristi se za pohranjivanje indeksa i zapisa datoteka. Trebala bi biti kreirana (iz)van Web dostupnih mapa i sadržavati kosu crtu (/).',
'FULLTEXT_SPHINX_DELTA_POSTS'=>'Broj postova u učestalo ažuriranom <em>delta</em> indeksu',
'FULLTEXT_SPHINX_HOST'=>'Sphinx daemon host za pretraživanje',
'FULLTEXT_SPHINX_HOST_EXPLAIN'=>'Host na kojem sphinx daemon [searchd] za pretraživanje “sluša”. Ostavi praznim za korištenje zadanog localhosta.',
'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'=>'Memorijski limit indeksiranja',
'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'=>'Ovaj broj bi cijelo vrijeme trebao biti niži od dostupnog RAMa na “mašini”. Ukoliko dođe/dolazi do problema s performansama, obrati pažnju na korištenje resursa od strane indeksa pretraživanja te snizi memorijski limit.',
'FULLTEXT_SPHINX_MAIN_POSTS'=>'Broj postova u glavnom indeksu',
'FULLTEXT_SPHINX_PORT'=>'Sphinx daemon port za pretraživanje',
'FULLTEXT_SPHINX_PORT_EXPLAIN'=>'Port na kojem sphinx daemon [searchd] za pretraživanje “sluša”. Ostavi praznim za korištenje zadanog Sphinx API 9312 porta.',
'FULLTEXT_SPHINX_WRONG_DATABASE'=>'Sphinx pretraživanje za phpBB podržava samo MySQL i PostgreSQL.',
'FULLTEXT_SPHINX_CONFIG_FILE'=>'Sphinx config datoteka',
'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'=>'Generirani sadržaj sphinx config datoteke. Ovi podatci trebaju biti preslikani u sphinx.conf poradi korištenja od strane sphinx daemona za pretraživanje.<br />Zamijeni [dbuser] i [dbpassword] rezervirana mjesta s korisničkim imenom i zaporkom tvoje baze podataka.',
'FULLTEXT_SPHINX_NO_CONFIG_DATA'=>'Putanja mape sphinx podataka nije određena.<br />Za generiranje config datoteke, trebaš odrediti putanju.',
'GENERAL_SEARCH_SETTINGS'=>'Opće postavke pretraživanja',
'GO_TO_SEARCH_INDEX'=>'Idi na početnu stranicu pretraživanja',
'INDEX_STATS'=>'Statistika',
'INDEXING_IN_PROGRESS'=>'Indeksiranje u tijeku',
'INDEXING_IN_PROGRESS_EXPLAIN'=>'Backend pretraživanje trenutno indeksira sve postove foruma.<br />Indeksiranje može potrajati od nekoliko minuta do nekoliko sati, ovisno o veličini foruma.',
'LIMIT_SEARCH_LOAD'=>'Ograničavanje opterećenja sustava tijekom pretraživanja',
'LIMIT_SEARCH_LOAD_EXPLAIN'=>'Ukoliko prosječno jednominutno opterećenje sustava premaši postavljenu vrijednost, stranica će automatski otići offline.<br />Vrijednost od 1.0 jednaka je ~100% iskorištenju [jednog] procesora. Ovo funkcionira samo na UNIX serverima.',
'MAX_SEARCH_CHARS'=>'Maksimalno znakova indeksirano pretraživanjem',
'MAX_SEARCH_CHARS_EXPLAIN'=>'Riječi s najviše toliko znakova bit će indeksirane za pretraživanje.',
'MAX_NUM_SEARCH_KEYWORDS'=>'Maksimalno dozvoljeno ključnih riječi',
'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'=>'Maksimalan broj riječi pretražljivih odjednom [0=neograničeno].',
'MIN_SEARCH_CHARS'=>'Minimalno znakova indeksirano pretraživanjem',
'MIN_SEARCH_CHARS_EXPLAIN'=>'Riječi s najmanje toliko znakova bit će indeksirane za pretraživanje.',
'MIN_SEARCH_AUTHOR_CHARS'=>'Minimalno znakova imena autora/ice',
'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'=>'Korisnici/e trebaju upisati najmanje toliko znakova imena kada pretražuju pomoću * [zamjenskog znaka].<br />Ukoliko je ime autora/ice kraće od toliko znakova, moguće je pretraživati upisivanjem kompletnog imena.',
'PROGRESS_BAR'=>'Postotakmjer',
'SEARCH_GUEST_INTERVAL'=>'Zadani razmak pretraživanja za goste',
'SEARCH_GUEST_INTERVAL_EXPLAIN'=>'Broj sekundi koji treba proći između 2 pretraživanja istog/e gosta/ice.<br />Interval se provjerava za sve goste zajedno što znači da ukoliko jedan gost pretražuje forum, svi ostali trebaju čekati dok ne prođe interval.',
//'SEARCH_INDEX_CREATE_REDIRECT'=>'Svi postovi do posta id %1$d su indeksirani, od čega %2$d postova je unutar ovog koraka.<br />Trenutna brzina indeksiranja je oko %3$.1f postova po sekundi.<br />Indeksiranje je u tijeku...',
//'SEARCH_INDEX_DELETE_REDIRECT'=>'Svi postovi do posta id %1$d su izbrisani iz indeksa pretraživanja.<br />Izbrisivanje je u tijeku...',
'SEARCH_INDEX_CREATE_REDIRECT'=> array(
2=>'Svi postovi do posta id %2$d su indeksirani, od čega %1$d postova je unutar ovog koraka.<br />',
),
'SEARCH_INDEX_CREATE_REDIRECT_RATE'=> array(
2=>'Trenutna stopa indeksiranja je otprilike %1$.1f posta/ova po sekundi.<br />Indeksiranje je u tijeku...',
// <!-- Kocka je hičena! -->
),
'SEARCH_INDEX_DELETE_REDIRECT'=> array(
2=>'Svi postovi do posta id %2$d su izbrisani iz indeksa pretraživanja.<br />Izbrisivanje je u tijeku...',
),
'SEARCH_INDEX_CREATED'=>'Svi postovi baze podataka foruma su indeksirani.',
'SEARCH_INDEX_REMOVED'=>'Indeks pretraživanja za backend je izbrisan.',
'SEARCH_INTERVAL'=>'Zadani razmak pretraživanja za korisnike/ce',
'SEARCH_INTERVAL_EXPLAIN'=>'Broj sekundi koji treba proći između 2 pretraživanja istog/e korisnika/ce.<br />Interval se provjerava posebno za svakog/u korisnika/cu.',
'SEARCH_STORE_RESULTS'=>'Dužina, u priručnu memoriju pohranjenih, rezultata pretraživanja',
'SEARCH_STORE_RESULTS_EXPLAIN'=>'Pohranjeni rezultati pretraživanja bit će izbrisani nakon isteka postavljenog vremena [u sekundama].<br /> Za onemogućavanje priručne memorije, vrijednost postavi na 0.',
'SEARCH_TYPE'=>'Backend pretraživanja',
'SEARCH_TYPE_EXPLAIN'=>'PhpBB daje mogućnost izbora backenda koji će biti korišten prilikom pretraživanja tekstova postova.<br />Zadano phpBB koristi vlastito fulltext pretraživanje.',
'SWITCHED_SEARCH_BACKEND'=>'Promijenio/la si backend pretraživanja.<br />Da bi mogao/la koristiti novi backend pretraživanja, treba postojati indeks za backend koji si izabrao/la.',
'TOTAL_WORDS'=>'Broj ukupno indeksiranih riječi',
'TOTAL_MATCHES'=>'Broj ukupno indeksiranih riječ-post relacija',
'YES_SEARCH'=>'Omogući pretraživanje',
'YES_SEARCH_EXPLAIN'=>'Omogućuje korisnicima/ama pretraživanje foruma [uključujući i Članstva].',
'YES_SEARCH_UPDATE'=>'Omogući fulltext ažuriranje',
'YES_SEARCH_UPDATE_EXPLAIN'=>'Ažuriranje fulltext indeksa prilikom postanja, zanemareno je ukoliko je pretraživanje onemogućeno.',
));
