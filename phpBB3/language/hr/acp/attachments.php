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
'ACP_ATTACHMENT_SETTINGS_EXPLAIN'=>'Ovdje možeš podesiti glavne postavke privitaka te pripadajućih im posebnih kategorija.',
'ACP_EXTENSION_GROUPS_EXPLAIN'=>'Ovdje možeš dodavati/izbrisivati/uređivati/o(ne)mogućavati grupe ekstenzija.<br />Možeš im dodjeljivati posebne kategorije, uređivati mehanizme preuzimanja, definirati ikone pohranjivanja [prikazane su ispred privitaka koji pripadaju grupi] i dr.',
'ACP_MANAGE_EXTENSIONS_EXPLAIN'=>'Ovdje možeš podesiti dopuštene ekstenzije.<br />Ekstenzije možeš aktivirati u odjeljku <em>Grupe ekstenzija</em>.<br />Preporučam(o) neodobrenje skriptirajućih ekstenzija [kao npr., <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> itd.].',
'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'=>'Ovdje možeš vidjeti bezpostne privitke koji obično nastaju kada korisnici/e dodaju datoteke ali ne pošalju post.<br />Datoteke možeš izbrisati ili ih dodati postojećem postu [za što trebaš znati valjan ID posta].',
'ADD_EXTENSION'=>'Dodaj ekstenziju',
'ADD_EXTENSION_GROUP'=>'Dodaj grupu ekstenzija',
'ADMIN_UPLOAD_ERROR'=>'Došlo je do greške prilikom pokušaja dodavanja datoteke: “%s”.',
'ALLOWED_FORUMS'=>'Dopušteni forumi',
'ALLOWED_FORUMS_EXPLAIN'=>'Dopušteno dodavanje dodijeljenih ekstenzija na izabranom/odabranim [ili svima ukoliko su svi odabrani] forumu/ima.',
'ALLOWED_IN_PM_POST'=>'Dopušteno',
'ALLOW_ATTACHMENTS'=>'Dopusti privitke',
'ALLOW_ALL_FORUMS'=>'Svi forumi',
'ALLOW_IN_PM'=>'Dopušteno u privatnim porukama',
'ALLOW_PM_ATTACHMENTS'=>'Dopusti privitke u privatnim porukama',
'ALLOW_SELECTED_FORUMS'=>'Samo forumi označeni ispod',
'ASSIGNED_EXTENSIONS'=>'Dodijeljene ekstenzije',
'ASSIGNED_GROUP'=>'Dodijeljena grupa ekstenzija',
'ATTACH_EXTENSIONS_URL'=>'Ekstenzije',
'ATTACH_EXT_GROUPS_URL'=>'Grupe ekstenzija',
'ATTACH_ID'=>'ID',
'ATTACH_MAX_FILESIZE'=>'Maksimalna veličina datoteke',
'ATTACH_MAX_FILESIZE_EXPLAIN'=>'Maksimalna veličina svake datoteke [0=veličina limitirana PHP konfiguracijom].',
// <!-- Kocka je hičena! -->
'ATTACH_MAX_PM_FILESIZE'=>'Maksimalna veličina datoteke',
'ATTACH_MAX_PM_FILESIZE_EXPLAIN'=>'Maksimalna veličina pojedinačne datoteke [privitka] dodane privatnoj poruci [0=neograničeno].',
'ATTACH_ORPHAN_URL'=>'Bezpostni privitci',
'ATTACH_POST_ID'=>'ID posta',
'ATTACH_POST_TYPE'=>'Vrsta posta',
'ATTACH_QUOTA'=>'Maksimalna kvota privitaka',
'ATTACH_QUOTA_EXPLAIN'=>'Maksimalna veličina dostupnog prostora [za cijeli forum] za privitke [0=neograničeno].',
'ATTACH_TO_POST'=>'Dodaj datoteku postu',
'CAT_FLASH_FILES'=>'Flash datoteke',
'CAT_IMAGES'=>'Slike',
'CAT_QUICKTIME_FILES'=>'Quicktime Media datoteke',
'CAT_RM_FILES'=>'RealMedia Media datoteke',
'CAT_WM_FILES'=>'Windows Media datoteke',
'CHECK_CONTENT'=>'Provjeri datoteke privitka',
'CHECK_CONTENT_EXPLAIN'=>'Neki preglednici mogu biti navedeni da pretpostave netočan <em>mimetype</em> za pohranjene datoteke.<br />Ovom opcijom osigurava se odbijanje datoteka koje mogu izazvati navedeno.',
'CREATE_GROUP'=>'Kreiraj novu grupu',
'CREATE_THUMBNAIL'=>'Kreiraj minijature',
'CREATE_THUMBNAIL_EXPLAIN'=>'Kreira minijature u svim mogućim situacijama.',
'DEFINE_ALLOWED_IPS'=>'Definiranje dopuštenih IP adresa/imena host(ov)a',
'DEFINE_DISALLOWED_IPS'=>'Definiranje nedopuštenih IP adresa/imena host(ov)a',
'DOWNLOAD_ADD_IPS_EXPLAIN'=>'Za upisivanje više različitih IP adresa/imena host(ov)a svaku/o upiši u novi redak.<br />Za određivanje raspona IP adresa, početak i kraj odvoji rastavnicom (-). Možeš koristiti * kao zamjenski znak.',
'DOWNLOAD_REMOVE_IPS_EXPLAIN'=>'Možeš izbrisati [ili odizuzeti] više IP adresa odjednom koristeći odgovarajuću kombinaciju miša+tipkovnice i preglednika.<br />Izuzete IP adrese bit će označene.',
'DISPLAY_INLINED'=>'Prikazuj slike u postu/poruci',
'DISPLAY_INLINED_EXPLAIN'=>'Ukoliko je postavljeno na “Ne”, privitci sa slikama bit će prikazani kao linkovi.',
'DISPLAY_ORDER'=>'Prikaz privitaka',
'DISPLAY_ORDER_EXPLAIN'=>'Redanje je ovisno o vremenu postanja.',
'EDIT_EXTENSION_GROUP'=>'Uređivanje grupe ekstenzija',
'EXCLUDE_ENTERED_IP'=>'Omogući ukoliko želiš izuzeti upisanu/o IP adresu/ime hosta.',
'EXCLUDE_FROM_ALLOWED_IP'=>'Izuzmi IP adresu iz dopuštenih IP adresa/imena host(ov)a',
'EXCLUDE_FROM_DISALLOWED_IP'=>'Izuzmi IP adresu iz nedopuštenih IP adresa/imena host(ov)a',
'EXTENSIONS_UPDATED'=>'Ekstenzija/e je/su ažurirana/e.',
'EXTENSION_EXIST'=>'Ekstenzija %s već postoji.',
'EXTENSION_GROUP'=>'Grupa ekstenzija',
'EXTENSION_GROUPS'=>'Grupe ekstenzija',
'EXTENSION_GROUP_DELETED'=>'Grupa ekstenzija je izbrisana.',
'EXTENSION_GROUP_EXIST'=>'Grupa ekstenzija %s već postoji.',
'EXT_GROUP_ARCHIVES'=>'Arhive',
'EXT_GROUP_DOCUMENTS'=>'Dokumenti',
'EXT_GROUP_DOWNLOADABLE_FILES'=>'Datoteke za preuzimanje',
'EXT_GROUP_FLASH_FILES'=>'Flash datoteke',
'EXT_GROUP_IMAGES'=>'Slike',
'EXT_GROUP_PLAIN_TEXT'=>'Običan tekst',
'EXT_GROUP_QUICKTIME_MEDIA'=>'Quicktime Media',
'EXT_GROUP_REAL_MEDIA'=>'Real Media',
'EXT_GROUP_WINDOWS_MEDIA'=>'Windows Media',
'FILES_GONE'=>'Neki od privitaka koje si odabrao/la za izbrisivanje ne postoje, moguće je da su [već prije] izbrisani, privitci koji su postojali su izbrisani.',
'FILES_STATS_WRONG'=>'Čini se da je statistika datoteka netočna i trebalo bi ju resinkronizirati. Trenutne vrijednosti: broj privitaka = %1$d, ukupna veličina privitaka = %2$s.<br />Klikni %3$sovdje%4$s za resinkronizaciju.',
'GO_TO_EXTENSIONS'=>'Uređivanje ekstenzija',
'GROUP_NAME'=>'Naziv grupe',
'IMAGE_LINK_SIZE'=>'Dimenzije slike privitka kao link',
'IMAGE_LINK_SIZE_EXPLAIN'=>'Ukoliko je veličina slike privitka veća od zadanih dimenzija, umjesto nje bit će prikazan [tekstualni] link.<br />Za onemogućavanje ove opcije, vrijednosti postavi na 0px x 0px.',
'IMAGICK_PATH'=>'Imagemagick putanja',
'IMAGICK_PATH_EXPLAIN'=>'Puna putanja do imagemagick konverzijske aplikacije, npr. <samp>/usr/bin/</samp>.',
// <!-- Kocka je hičena! -->
'MAX_ATTACHMENTS'=>'Maksimalan broj privitaka po postu',
'MAX_ATTACHMENTS_PM'=>'Maksimalan broj privitaka po privatnoj poruci',
'MAX_EXTGROUP_FILESIZE'=>'Maksimalna veličina datoteke',
'MAX_IMAGE_SIZE'=>'Maksimalne dimenzije slike',
'MAX_IMAGE_SIZE_EXPLAIN'=>'Maksimalna veličina slika privitaka.<br />Za onemogućavanje provjere dimenzija, vrijednosti postavi na 0px x 0px.',
'MAX_THUMB_WIDTH'=>'Maksimalna širina minijature u pikselima',
'MAX_THUMB_WIDTH_EXPLAIN'=>'Maksimalna širina generiranih minijatura ograničena je ovdje postavljenom vrijednošću.',
'MIN_THUMB_FILESIZE'=>'Minimalna veličina datoteke minijature',
'MIN_THUMB_FILESIZE_EXPLAIN'=>'Minijature neće biti kreirane za slike čija je veličina manja od postavljene.',
'MODE_INLINE'=>'U postu/poruci',
'MODE_PHYSICAL'=>'Za preuzimanje',
'NOT_ALLOWED_IN_PM'=>'Dopušteno samo u postovima',
'NOT_ALLOWED_IN_PM_POST'=>'Nedopušteno',
'NOT_ASSIGNED'=>'Nedodijeljeno',
'NO_ATTACHMENTS'=>'Nije pronađen niti jedan privitak za zadani period.',
'NO_EXT_GROUP'=>'/',
'NO_EXT_GROUP_NAME'=>'Upiši naziv grupe.',
'NO_EXT_GROUP_SPECIFIED'=>'Nije određena grupa ekstenzija.',
'NO_FILE_CAT'=>'/',
'NO_IMAGE'=>'Bez slike',
'NO_THUMBNAIL_SUPPORT'=>'Podrška za minijature je onemogućena.<br />Za ispravno funkcioniranje potrebni su ili dostupnost GD ekstenzije ili instaliran imagemagick. Nijedno nije pronađeno.',
'NO_UPLOAD_DIR'=>'Mapa određena za pohranjivanje ne postoji.',
'NO_WRITE_UPLOAD'=>'Određena mapa nije pre(za)pisljiva.<br />Za omogućavanje serveru pre(za)pisivanje mape, trebaš preinačiti dopuštenja.',
'ONLY_ALLOWED_IN_PM'=>'Dopušteno samo u privatnim porukama',
'ORDER_ALLOW_DENY'=>'Dopusti',
'ORDER_DENY_ALLOW'=>'Nedopusti',
'REMOVE_ALLOWED_IPS'=>'Izbriši ili odizuzmi <em>dopuštene</em> IP adrese/imena host(ov)a',
'REMOVE_DISALLOWED_IPS'=>'Izbriši ili odizuzmi <em>nedopuštene</em> IP adrese/imena host(ov)a',
'RESYNC_FILES_STATS_CONFIRM'=>'Jesi li siguran/na da želiš sinkronizirati statistiku datoteka?',
'SEARCH_IMAGICK'=>'Potraži Imagemagick',
'SECURE_ALLOW_DENY'=>'Lista (ne)dopuštenja',
'SECURE_ALLOW_DENY_EXPLAIN'=>'Kada je omogućeno sigurno preuzimanje, lista (ne)dopuštenja djeluje kao <strong>bijela lista </strong> [dopusti] odnosno <strong>crna lista</strong> [nedopusti].',
'SECURE_DOWNLOADS'=>'Omogući sigurno preuzimanje',
'SECURE_DOWNLOADS_EXPLAIN'=>'Omogućavanjem sigurnog preuzimanja, preuzimanje je ograničeno na IP adrese/imena host(ov)a koje definiraš.',
'SECURE_DOWNLOAD_NOTICE'=>'Sigurno preuzimanje je onemogućeno.<br />Donje postavke bit će primijenjene nakon omogućavanja sigurnog preuzimanja.',
'SECURE_DOWNLOAD_UPDATE_SUCCESS'=>'Lista IP adresa je ažurirana.',
'SECURE_EMPTY_REFERRER'=>'Omogući prazne referrer',
'SECURE_EMPTY_REFERRER_EXPLAIN'=>'Sigurno preuzimanje bazirano je na referrerima.<br />Želiš li omogućiti preuzimanje bez referrera, izaberi “Da”.',
'SETTINGS_CAT_IMAGES'=>'Postavke kategorije slika',
'SPECIAL_CATEGORY'=>'Posebna kategorija',
'SPECIAL_CATEGORY_EXPLAIN'=>'Specijalne kategorije razlikuju se po načinu prikaza u postovima.',
'SUCCESSFULLY_UPLOADED'=>'Pohranjivanje je uspjelo.',
'SUCCESS_EXTENSION_GROUP_ADD'=>'Grupa ekstenzija je dodana.',
'SUCCESS_EXTENSION_GROUP_EDIT'=>'Grupa ekstenzija je ažurirana.',
'UPLOADING_FILES'=>'Pohranjivanje datoteka',
'UPLOADING_FILE_TO'=>'Pohranjivanje datoteke “%1$s” u post broj %2$d...',
'UPLOAD_DENIED_FORUM'=>'Za pohranjivanje datoteka na forum “%s”, trebaš imati dopuštenje.',
'UPLOAD_DIR'=>'Mapa za pohranjivanje',
'UPLOAD_DIR_EXPLAIN'=>'Putanja do mape za pohranjivanje privitaka.<br />Ukoliko promijeniš mapu za pohranjivanje privitaka, a u prvotnoj [staroj mapi] su [u nju već] bili pohranjeni privitci, trebat ćeš ih ručno kopirati u drugu [novu mapu].',
'UPLOAD_ICON'=>'Ikona pohranjivanja',
'UPLOAD_NOT_DIR'=>'Lokacija za pohranjivanje koju si upisao/la ne vodi do mape.',
));
