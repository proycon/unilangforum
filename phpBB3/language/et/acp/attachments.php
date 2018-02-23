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
* @author       2017-10-22 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti, #EV100
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Siin saad sa muuta manuste põhiseadeid ja nendega seotud kategooriaid.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Siin saad sa lisada, kustutada, muuta või keelata laiendigruppe. Edasistes valikutes saad lisada neile kategooriaid, muutes allalaadimise süsteemi ja määrates allalaadimise ikooni, mida näidatakse sellesse kategooriasse kuuluva manuse ees.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Siin saad sa hallata lubatud laiendeid. Et laiendid aktiveerida, palun mine laiendigruppida haldamise paneeli. Me ei soovita lubada skriptilaiendeid  (näiteks <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> ja nii edasi...).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Siin saad sa vaadata postituseta manuseid. Need tekivad, kui kasutajad lisavad manuse, kuid ei postita postitust. Saad need failid kustutada või lisada mõnda postitusse. Postitusse lisamine nõuab korrektset postituse ID\'d, Pead selle ID ise leidma. See lisab sellesse postitusse manuse.',
	'ADD_EXTENSION'						=> 'Lisa laiend',
	'ADD_EXTENSION_GROUP'				=> 'Lisa laiendigrupp',
	'ADMIN_UPLOAD_ERROR'				=> 'Vead, kui lisasid manuse: “%s”.',
	'ALLOWED_FORUMS'					=> 'Lubatud foorumid',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Lubatud postitada manuseid valitud (või kõikidesse, kui valitud) foorumitesse.',
	'ALLOWED_IN_PM_POST'				=> 'Lubatud',
	'ALLOW_ATTACHMENTS'					=> 'Luba manused',
	'ALLOW_ALL_FORUMS'					=> 'Luba kõikides foorumites',
	'ALLOW_IN_PM'						=> 'Luba privaatsõnumites',
	'ALLOW_PM_ATTACHMENTS'				=> 'Luba manused privaatsõnumites',
	'ALLOW_SELECTED_FORUMS'				=> 'Ainult all valitud foorumites',
	'ASSIGNED_EXTENSIONS'				=> 'Määratud laiendid',
	'ASSIGNED_GROUP'					=> 'Määratud laiendigrupp',
	'ATTACH_EXTENSIONS_URL'				=> 'Laiendid',
	'ATTACH_EXT_GROUPS_URL'				=> 'Laiendigrupid',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksimaalne failisuurus',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksimaalne failisuurus igale failile. 0 tähendab maksimumi puudumist.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksimaalne failisuurus sõnumites',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimaalne kettaruum, mis on igale kasutajale eraldatud privaatsõnumite manuste jaoks, 0 tähendab maksimumi puudumist.',
	'ATTACH_ORPHAN_URL'					=> 'Postituseta manused',
	'ATTACH_POST_ID'					=> 'Postituse ID',
	'ATTACH_POST_TYPE'					=> 'Postituse tüüp',
	'ATTACH_QUOTA'						=> 'Manuseid lubatud',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimaalne kettaruum, mis on eraldatud terve foorumi manustele. 0 tähendab maksimumi puudumist.',
	'ATTACH_TO_POST'					=> 'Lisa fail postitusse',

	'CAT_FLASH_FILES'			=> 'Flash failid',
	'CAT_IMAGES'				=> 'Pildid',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime meediafailid',
	'CAT_RM_FILES'				=> 'RealMedia meediafailid',
	'CAT_WM_FILES'				=> 'Windows Media meediafailid',
	'CHECK_CONTENT'				=> 'Kontrolli manuseid',
	'CHECK_CONTENT_EXPLAIN'		=> 'Mõndasid veebilehitsejaid saab petta, eeldades, et tegu on vale miimitüübiga. See valik kindlustab, et sellised failid keelatakse.',
	'CREATE_GROUP'				=> 'Loo uus grupp',
	'CREATE_THUMBNAIL'			=> 'Loo pisipilt',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Loo pisipilt igas võimalikus olukorras.',

	'DEFINE_ALLOWED_IPS'			=> 'Määra lubatud IP-d/hostinimed',
	'DEFINE_DISALLOWED_IPS'			=> 'Määra keelatud IP-d/hostinimed',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Et määrata mitu erinevat IP-d või hostinime, sisesta need eraldi reale. Et määrata terve IP-aadresside ulatus, eralda need alguses ja lõpus sidekriipsuga (-), Et määrata wildcardi, kasuta “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Võid eemaldada (või sisse jätta) mitu IP aadressi korraga, kasutades sina brauserile sobivat hiire ja klaviatuuri kombinatsiooni. Väljajäetud IP-d on sinise tagataustaga.',
	'DISPLAY_INLINED'				=> 'Näita pilte postituse sees',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Kui määratud “Ei”, näidatakse pilte lingina.',
	'DISPLAY_ORDER'					=> 'Manuste kuvamisjärjekord',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Näita manuseid aja järgi järjestatult.',

	'EDIT_EXTENSION_GROUP'			=> 'Muuda laiendigruppi',
	'EXCLUDE_ENTERED_IP'			=> 'Luba see, et välja jätta  IP/hostinimi.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Jäta välja IP lubatud IP-dest/hostinimedest',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Jäta välja IP keelatud IP-dest/hostinimedest',
	'EXTENSIONS_UPDATED'			=> 'Laiendid edukalt uuendatud.',
	'EXTENSION_EXIST'				=> 'Laiend %s on juba olemas.',
	'EXTENSION_GROUP'				=> 'Laiendigrupp',
	'EXTENSION_GROUPS'				=> 'Laiendigrupid',
	'EXTENSION_GROUP_DELETED'		=> 'Laiendigrupp edukalt kustutatud.',
	'EXTENSION_GROUP_EXIST'			=> 'Laiendigrupp %s on juba olemas.',

	'EXT_GROUP_ARCHIVES'			=> 'Arhiivifailid',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumendid',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Allalaaditavad failid',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash-failid',
	'EXT_GROUP_IMAGES'				=> 'Pildid',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FILES_GONE'			=> 'Mõned valitud failid ei eksisteeri. Võimalik et need on juba varasemalt kustutatud. Manused, mis eksisteerisid on kustutatud.',
	'FILES_STATS_WRONG'		=> 'Sinu failide statistika on ebatäpne, ning vajab uuesti sünkroonimist. Tegelik väärtus: Manuste arv = %1$d, manuste kogu suurus = %2$s.<br />Et uuesti sünkroniseerida statistikat vajuta %3$ssiia%4$s.',

	'GO_TO_EXTENSIONS'		=> 'Mine laiendahaldamise juurde',
	'GROUP_NAME'			=> 'Grupi nimi',

	'IMAGE_LINK_SIZE'			=> 'Pildilingi mõõtmed',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Näita pilti postituse sees lingina, kui pildi suurus ületab need mõõtmed. Et seda valikut keelata, pane mõõtmeteks 0px ja 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick tee',
	'IMAGICK_PATH_EXPLAIN'		=> 'Täistee imagemagick konvertimise programmi, nt. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maksimaalne lubatud arv manuseid postituse kohta',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimaalne lubatud arv manuseid sõnumi kohta',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksimaalne failisuurus',
	'MAX_IMAGE_SIZE'				=> 'Maksimaalsed pildimõõtmed',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maksimaalsed pildimõõtmed. Määra mõlemad väärtused 0px, et keelata mõõtmete kontroll.',
	'MAX_THUMB_WIDTH'				=> 'Maksimaalne pisipildi laius/kõrgus pikslites',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Loodud pisipilt ei ületa siin määratud laiust.',
	'MIN_THUMB_FILESIZE'			=> 'Minimaalne pisipildi failisuurus',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ära loo pisipilti piltidele, mis on sellest väiksemad.',
	'MODE_INLINE'					=> 'Postituse sees',
	'MODE_PHYSICAL'					=> 'Füüsiline',

	'NOT_ALLOWED_IN_PM'			=> 'Lubatud ainult postitustes',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Pole lubatud',
	'NOT_ASSIGNED'				=> 'Pole määratud',
	'NO_ATTACHMENTS'			=> 'Antud perioodil ei ole ühtegi manust.',
	'NO_EXT_GROUP'				=> 'Pole',
	'NO_EXT_GROUP_NAME'			=> 'Grupi nime ei sisestatud',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Grupi nime ei määratud.',
	'NO_FILE_CAT'				=> 'Pole',
	'NO_IMAGE'					=> 'Pole pilti',
	'NO_THUMBNAIL_SUPPORT'		=> 'Pisipildid on keelatud. Õigesti funktsioneerimiseks peab GD lisa olema saadaval või imagemagick installeeritud. Kumbagi ei leitud.',
	'NO_UPLOAD_DIR'				=> 'Valitud üleslaadimiskausta ei eksisteeri.',
	'NO_WRITE_UPLOAD'			=> 'Valitud üleslaadimiskausta ei saa midagi lisada. Palun muuda kausta õigusi, et server saaks sinna midagi lisada.',

	'ONLY_ALLOWED_IN_PM'	=> 'Ainult lubatud privaatsõnumites',
	'ORDER_ALLOW_DENY'		=> 'Luba',
	'ORDER_DENY_ALLOW'		=> 'Keela',

	'REMOVE_ALLOWED_IPS'			=> 'Eemalda või jäta sisse <em>lubatud</em> IP-d/hostinimed',
	'REMOVE_DISALLOWED_IPS'			=> 'Eemalda või jäta sisse <em>keelatud</em> IP-d/hostinimed',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Kas oled kindel, et soovid manuste statistika resünkroniseerida?',

	'SEARCH_IMAGICK'				=> 'Otsi Imagemagickut',
	'SECURE_ALLOW_DENY'				=> 'Lubatute/keelatute nimekiri',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Muuda vaikimisi käitumist, kui turvalised allalaadimised on lubatud, Lubatute/keelatute nimekirjas. Kas <strong>whitelist</strong> (Lubatud) või <strong>blacklist</strong> (Keelatud).',
	'SECURE_DOWNLOADS'				=> 'Luba turvalised  allalaadimised',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Kui see on lubatud, on allalaadimised limiteeritud vaid sinu poolt määratud IP-dele/hostinimedele.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Turvalised allalaadimised pole lubatud. Allolevad seaded käivitatakse, kui need on lubatud.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-de nimekiri on uuendatud..',
	'SECURE_EMPTY_REFERRER'			=> 'Luba tühja viitajat',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Turvalised allalaadimised on viitajatega. Kas sa soovid lubada allalaadimist, kui viiitajat pole määratud?',
	'SETTINGS_CAT_IMAGES'			=> 'Pildi kategooria seaded',
	'SPECIAL_CATEGORY'				=> 'Erikategooria',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Erikategooriad erinevad postituses kuvamise põhjal.',
	'SUCCESSFULLY_UPLOADED'			=> 'Üleslaadimine õnnestus.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Laiendigrupp lisatud.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Laiendigrupp uuendatud.',

	'UPLOADING_FILES'				=> 'Laadin faili üles',
	'UPLOADING_FILE_TO'				=> 'Laadin faili “%1$s” üles, postitusse number %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Sul pole õigusi failide üleslaadimiseks foorumisse “%s”.',
	'UPLOAD_DIR'					=> 'Üleslaadimiskaust',
	'UPLOAD_DIR_EXPLAIN'			=> 'Manuste hoidmise kaust. Kui seda kausta muudad, pead vanast kaustast tõstma manused ise uude kausta.',
	'UPLOAD_ICON'					=> 'Üleslaadimisikoon',
	'UPLOAD_NOT_DIR'				=> 'Valitud üleslaadimiskaust pole kataloog.',
));
