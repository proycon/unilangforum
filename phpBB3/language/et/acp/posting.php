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
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBkood on HTML koodi sisestamiseks lihtsam viis. Siin lehel saad lisada, muuta või eemaldada omaloodud BBkoode.',
	'ADD_BBCODE'				=> 'Lisa uus BBkood',

	'BBCODE_DANGER'				=> 'BBkood, mida üritad lisada, paistab kasutavat {TEXT}-vormi HTML-atribuudi sees. See on võimalik XSS-turvaliseuse probleem. Proovi kasutada rohkem piiravat {SIMPLETEXT} või {INTTEXT} vormi. Jätka vaid siis, kui oled riskidest aru saanud.',
	'BBCODE_DANGER_PROCEED'		=> 'Jätka', //'Ma saan aru ohust',

	'BBCODE_ADDED'  			=> 'BBkood lisatud.',
	'BBCODE_EDITED' 			=> 'BBkood muudetud.',
	'BBCODE_DELETED'			=> 'BBkood on edukalt eemaldatud.',
	'BBCODE_NOT_EXIST'      	=> 'Valitud BBkoodi ei eksisteeri.',
	'BBCODE_HELPLINE'       	=> 'Abirida',
	'BBCODE_HELPLINE_EXPLAIN'   => 'See väli sisaldab teksti, mis kuvatakse, kui kursor on BBkoodi sildi kohal.',
	'BBCODE_HELPLINE_TEXT'  	=> 'Abirea tekst',
	'BBCODE_HELPLINE_TOO_LONG'  => 'Sisestatud abirida on liiga pikk.',

	'BBCODE_INVALID_TAG_NAME'	=> 'BBkoodi sildi nimi on juba olemas.',
	'BBCODE_INVALID'			=> 'Sinu BBkood ei ole korrektne.',
	'BBCODE_OPEN_ENDED_TAG' 	=> 'BBkood peab sisaldama nii alustavat kui ka lõpetavat märgendit',
	'BBCODE_TAG'    			=> 'Märgend ehk tag',
	'BBCODE_TAG_TOO_LONG'   	=> 'Sisestatud nimi märgendile on liiga pikk.',
	'BBCODE_TAG_DEF_TOO_LONG'   => 'Sisestatud märgendi definitsioon on liiga pikk, palun lühenda seda.',
	'BBCODE_USAGE'  			=> 'BBkoodi kasutus',
	'BBCODE_USAGE_EXAMPLE'  	=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'  	=> 'Siin saad määrata, kuidas BBkoodi kasutada. Asenda iga muutuja vastava vormiga (%svaata alla%s).',

	'EXAMPLE'       				=> 'Näide:',
	'EXAMPLES'      				=> 'Näited:',

	'HTML_REPLACEMENT'      		=> 'HTML asendus',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Siin saad määrata vaikimisi HTML asenduse. Ära unusta panna tagasi vorme, mida kasutasid ülal!',

	'TOKEN'					=> 'Vorm',
	'TOKENS'				=> 'Vormid',
	'TOKENS_EXPLAIN'		=> 'Vormid on kohatäited kasutajale sisestamiseks. Sisestus on kehtiv vaid siis, kui see vastab vastavale vormile. Kui vaja, võid neid nummerdada, lisades numbri viimaseks sümboliks enne sulge, näiteks {TEXT1}, {TEXT2}.<br /><br />HTML asenduses võid ka kasutada iga keelestringi, mis on su language/ kaustas niimoodi: {L_<em>&lt;STRINGINIMI&gt;</em>} kus <em>&lt;STRINGINIMI&gt;</em> on nimi tõlgitud stringile, mida soovid lisada. näiteks, {L_WROTE} kuvatakse kui "kirjutas" või selle tõlge vastavalt kasutaja valitud keelele.<br /><br /><strong>Ainult allnimentatud vorme saab kasutada BBkoodis.</strong>',
	'TOKEN_DEFINITION'      => 'Mis see võib olla?',
	'TOO_MANY_BBCODES'      => 'Sa ei saa luua rohkem BBkoode. Palun eemalda üks või enam BBkood ja proovi uuesti.',

	'tokens'	=>	array(
		'TEXT'			=> 'Suvaline tekst, sisaldades võõraid sümboleid, numbreid jne. Sa ei tohiks seda vormi kasutada HTML siltides. Selle asemel proovi kasutada IDENTIFIER, INTTEXT või SIMPLETEXT vormi.',
		'SIMPLETEXT'	=> 'Sümbolid ladina tähestikust (A-Z), numbrid, tühikud, komad, punktid, plussmärgid, miinusmärgid, side- ja alakriipsud.',
		'INTTEXT'		=> 'Unicode tähesümbolid, numbrid, tühikud, komad, punktid, plussmärgid, miinusmärgid, side- ja alakriipsud.',
		'IDENTIFIER'	=> 'Sümbolid ladina tähestikust (A-Z), numbrid, side- ja alakriipsud.',
		'NUMBER'		=> 'Iga number',
		'EMAIL'			=> 'Kehtiv e-posti aadress',
		'URL'			=> 'Kehtiv URL suvalise protokolliga (http, ftp, jne. Ei saa kasutada javascripti jaoks). Kui ühtegi pole sisestatud, on määratud protokolliks “http://”.',
		'LOCAL_URL'		=> 'Kohalik URL. URL, mis on suhteline teema aadressiga ja ei tohi sisaldada serveri nime või protokolli “%s”',
		'RELATIVE_URL'	=> 'Relatiivne URL. You can use this to match parts of a URL, but be careful: a full URL is a valid relative URL. When you want to use relative URLs of your board, use the LOCAL_URL token.',
		'COLOR'			=> 'HTML värv, saab olla kas numbrilises <samp>#FF1234</samp> või <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS värvi fraasina</a>, näiteks <samp>fuchsia</samp> või <samp>InactiveBorder</samp>',
	),
));

// Smilies and topic icons => Emotikonid ja teemaikoonid
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Siin lehel saad sa muuta, lisada ja kustutada ikoone, mida kasutajad saavad kasutada postitamiseks. Need ikoonid on üldiselt kuvatud teema pealkirja kõrval või postituse pealkirjas teemade nimekirjas. Võid ka lisada ja luua uusi ikoonide pakke.',
	'ACP_SMILIES_EXPLAIN'   => 'Emotikonid on enamasti väiksed, mõnikord liikuvad pildid, mida kasutatakse tunde väljendamiseks. Siin lehel saad sa lisada, muuta ja eemaldada emotikone, mida kasutajad saavad kasutada. Võid ka lisada ja luua uusi emotikonide pakke.',
	'ADD_SMILIES'   		=> 'Lisa mitu emotikoni',
	'ADD_SMILEY_CODE'       => 'Lisa täiendav kood emotikonile',
	'ADD_ICONS'     		=> 'Lisa mitu ikooni',
	'AFTER_ICONS'   		=> 'Peale %s',
	'AFTER_SMILIES' 		=> 'Peale %s',

	'CODE'						=> 'Kood',
	'CURRENT_ICONS' 			=> 'Praegused ikoonid',
	'CURRENT_ICONS_EXPLAIN' 	=> 'Vali, mida teha praeguste ikoonidega',
	'CURRENT_SMILIES'       	=> 'Praegused emotikonid',
	'CURRENT_SMILIES_EXPLAIN'   => 'Vali, mida teha praeguste emotikonidega.',

	'DISPLAY_ON_POSTING'    	=> 'Näita postitamise lehel',
	'DISPLAY_POSTING'       	=> 'On postitamise lehel',
	'DISPLAY_POSTING_NO'    	=> 'Pole postitamise lehel',

	'EDIT_ICONS'    			=> 'Muuda ikoone',
	'EDIT_SMILIES'  			=> 'Muuda emotikone',
	'EMOTION'       			=> 'Emotsioon',
	'EXPORT_ICONS'  			=> 'Ekspordi ja laadi alla ikoonid.pak',
	'EXPORT_ICONS_EXPLAIN'  	=> '%sSelle lingi vajutamise korral pakitakse teie ikoonide konfiguratsioon kokku<samp>ikoonid.pak failiks</samp>, millest saab allalaadituna luua <samp>.zip</samp> või <samp>.tgz</samp> faili, mis sisaldab kõiki teie ikoone ja <samp>icons.pak</samp> konfiguratsioonifaili%s.',
	'EXPORT_SMILIES'			=> 'Ekspordi ja laadi alla smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sSelle lingi vajutamise korral pakitakse teie emotikonide konfiguratsioon kokku<samp>smailid.pak failiks</samp>, millest saab allalaadituna luua <samp>.zip</samp> või <samp>.tgz</samp> faili, mis sisaldab kõiki teie emotikone ja <samp>emotikonid.pak</samp> konfiguratsioonifaili%s.',

	'FIRST'			=> 'Esimene',

	'ICONS_ADD'				=> 'Lisa uus ikoon',
	'ICONS_ADDED'			=> array(
		0	=> 'Ühtegi ikooni ei lisatud.',
		1	=> 'Ikoon on edukalt lisatud.',
		2	=> 'Ikoonid on edukalt lisatud.',
	),
	'ICONS_CONFIG'			=> 'Ikoonide konfiguratsioon.',
	'ICONS_DELETED'			=> 'Ikoon eemaldatud.',
	'ICONS_EDIT'			=> 'Muuda ikooni',
	'ICONS_EDITED'			=> array(
		0	=> 'Ühtegi ikooni ei uuendatud.',
		1	=> 'Ikoon edukalt uuendatud.',
		2	=> 'Ikoonid edukalt uuendatud.',
	),
	'ICONS_HEIGHT'			=> 'Ikooni kõrgus',
	'ICONS_IMAGE'			=> 'Ikooni pilt',
	'ICONS_IMPORTED'		=> 'Ikoonide pakk installeeritud.',
	'ICONS_IMPORT_SUCCESS'	=> 'Ikoonide pakk imporditud.',
	'ICONS_LOCATION'		=> 'Ikooni asukoht',
	'ICONS_NOT_DISPLAYED'	=> 'Järgnevaid ikoone ei kuvata postitamise lehel',
	'ICONS_ORDER'			=> 'Ikoonide järjekord',
	'ICONS_URL'				=> 'Ikooni pildifail',
	'ICONS_WIDTH'			=> 'Ikooni laius',
	'IMPORT_ICONS'			=> 'Installeeri ikoonide pakk',
	'IMPORT_SMILIES'		=> 'Installeeri emotikonide pakk',

	'KEEP_ALL'			=> 'Jäta kõik',

	'MASS_ADD_SMILIES'	=> 'Lisa mitu emotikoni',

	'NO_ICONS_ADD'		=> 'Pole ikoone lisamiseks.',
	'NO_ICONS_EDIT'		=> 'Pole ikoone muutmiseks.',
	'NO_ICONS_EXPORT'	=> 'Pole ikoone, millest luua pakk.',
	'NO_ICONS_PAK'		=> 'Ikoonide pakke ei leitud.',
	'NO_SMILIES_ADD'	=> 'Pole emotikone lisamiseks.',
	'NO_SMILIES_EDIT'	=> 'Pole emotikoneid muutmiseks.',
	'NO_SMILIES_EXPORT'	=> 'Pole emotikoneid, millest luua pakk.',
	'NO_SMILIES_PAK'	=> 'Emotikonide pakke ei leitud.',

	'PAK_FILE_NOT_READABLE'		=> 'Ei õnnestu lugeda <samp>.pak</samp> faili.',

	'REPLACE_MATCHES'	=> 'Asenda võrdsed',

	'SELECT_PACKAGE'			=> 'Vali paki fail',
	'SMILIES_ADD'				=> 'Lisa uus emotikon',
	'SMILIES_ADDED'				=> array(
		0	=> 'Ühtegi emotikoni ei lisatud.',
		1	=> 'Emotikon on edukalt lisatud.',
		2	=> 'Emotikonid on edukalt lisatud.',
	),
	'SMILIES_CODE'				=> 'Emotikoni kood',
	'SMILIES_CONFIG'			=> 'Emotikonide konfiguratsioon',
	'SMILIES_DELETED'			=> 'Emotikon eemaldatud.',
	'SMILIES_EDIT'				=> 'Muuda emotikoni',
	'SMILIE_NO_CODE'			=> 'Emotikoni “%s” ignoreeriti, sest koodi ei sisestatud.',
	'SMILIE_NO_EMOTION'			=> 'Emotikoni “%s” ignoreeriti, sest emotsiooni ei sisestatud.',
	'SMILIE_NO_FILE'			=> 'Emotikoni “%s” ignoreeriti, sest fail on puudu.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Ühtegi emotikoni ei uuendatud.',
		1	=> 'Emotikon uuendatud.',
		2	=> 'Emotikonid uuendatud.',
	),
	'SMILIES_EMOTION'			=> 'Emotsioon',
	'SMILIES_HEIGHT'			=> 'Emotikoni kõrgus',
	'SMILIES_IMAGE'				=> 'Emotikoni pilt',
	'SMILIES_IMPORTED'			=> 'Emotikonide pakk installeeritud.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Emotikonide pakk improditud.',
	'SMILIES_LOCATION'			=> 'Emotikoni asukoht',
	'SMILIES_NOT_DISPLAYED'		=> 'Järgnevaid emotikone ei kuvata postitamise lehel',
	'SMILIES_ORDER'				=> 'Emotikonide järjekord',
	'SMILIES_URL'				=> 'Emotikoni pildifail',
	'SMILIES_WIDTH'				=> 'Emotikoni laius',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Emotikoni limiit %d on ületatud.',
		2	=> 'Emotikonide limiit %d on ületatud.',
	),

	'WRONG_PAK_TYPE'	=> 'Valitud pakk ei sisalda vajalikke andmeid.',
));

// Word censors => Sõnade tsensuur
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Siin lehel saad sa lisada, muuta ja eemaldada sõnu, mis automaatselt tsenseeritakse sinu foorumis. Kasutajad saavad siiski veel registreerida neid sõnu sisaldavate nimedega. Wildcard\'e (*) saab kasutada sõnade väljal, näiteks. *ont* tsenseerib ka sõna "kontroll", kont* tsenseerib ka sõna "kontroll", *troll tsenseerib ka sõna "kontroll".',
	'ADD_WORD'				=> 'Lisa uus sõna',

	'EDIT_WORD'		=> 'Muuda sõna tsensuuri',
	'ENTER_WORD'	=> 'Pead sisestama sõna ja selle asenduse.',

	'NO_WORD'       => 'Ühtegi sõna ei valitud muutmiseks.',

	'REPLACEMENT'   => 'Asendus',

	'UPDATE_WORD'   => 'Uuenda sõna tsensuuri',

	'WORD'				=> 'Sõna',
	'WORD_ADDED'		=> 'Sõna tsensuur lisatud.',
	'WORD_REMOVED'		=> 'Valitud sõna tsensuur eemaldatud.',
	'WORD_UPDATED'		=> 'Valitud sõna tsensuur uuendatud.',
));

// Ranks => Tiitlid
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Kasutades neid välja, saad lisada, muuta ja eemaldada tiitleid. võid ka luua eritiitleid, mida saab lisada kasutajale läbi kasutajate haldamise sektsiooni.',
	'ADD_RANK'				=> 'Lisa uus tiitel',

	'MUST_SELECT_RANK'      => 'Pead valima tiitli.',

	'NO_ASSIGNED_RANK'      => 'Pole eritiitlit määratud.',
	'NO_RANK_TITLE'			=> 'Sa ei määranud tiitlile nime.',
	'NO_UPDATE_RANKS'       => 'Tiitel kustutatud. Seda tiitlit omavate kasutajate profiili ei uuendatud, pead seda käsitsi tegema, et kustutada tiitel nende profiilist.',

	'RANK_ADDED'			=> 'Tiitel lisatud',
	'RANK_IMAGE'			=> 'Tiitli pilt',
	'RANK_IMAGE_EXPLAIN'    => 'Kasuta seda, et määrata väike pilt tiitlile lisaks. Tee on suhteline phpBB juurkaustaga.',
	'RANK_IMAGE_IN_USE'		=> '(kasutusel)',
	'RANK_MINIMUM'			=> 'Minimaalne arv postitusi',
	'RANK_REMOVED'			=> 'Tiitel kustutatud',
	'RANK_SPECIAL'			=> 'Määra eritiitlina',
	'RANK_TITLE'			=> 'Tiitli nimi',
	'RANK_UPDATED'			=> 'Tiitel uuendatud',
));

// Disallow Usernames => Mitte lubatud kasutajanimed
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Siin saad hallata kasutajanimesid, millega ei tohi registreerida. Blokeeritud kasutajanimed võivad sisaldada wildcard\'i sümbolit e. "*".Sa ei saa sisestada siin ühtegi kasutajanime, millega on juba registreeritud, pead esmalt kustutama selle nime ja siis keelama.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Võid blokeerida kasutajanime, kasutades wildcard\'i, mis vastab suvalisele sümbolile.',
	'ADD_DISALLOW_TITLE'	=> 'Lisa blokeeritud kasutajanimi',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Saad eemaldada kasutajanime nimekirjast, valides selle, ja vajutades "Sisesta".',
	'DELETE_DISALLOW_TITLE'		=> 'Eemalda blokeeritud kasutajanimi',
	'DISALLOWED_ALREADY'		=> 'Sisestatud kasutajanime ei saa blokeerida. See kas juba on nimekirjas, on tsensuuri nimekirjas või selle nimega kasutaja on registreeritud.',
	'DISALLOWED_DELETED'		=> 'Blokeeritud kasutajanimi on eemaldatud.',
	'DISALLOW_SUCCESSFUL'		=> 'Blokeeritud kasutajanimi on lisatud.',

	'NO_DISALLOWED'				=> 'Pole blokeeritud kasutajanimesid',
	'NO_USERNAME_SPECIFIED'		=> 'Sa pole valinud või sisestanud kasutajanime.',
));

// Reasons => Põhjused
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Siin saad hallata põhjuseid, mida kasutatakse raportites ja postituste keelamistes. On üks vaikimisi põhjus, (märgitud tärniga) mida ei saa eemaldada. Seda põhjust kasutatakse siis, kui ükski teine põhjus ei sobi.',
	'ADD_NEW_REASON'		=> 'Lisa uus põhjus',
	'AVAILABLE_TITLES'		=> 'Saadaval tõlgitud põhjuste pealkirjad',

	'IS_NOT_TRANSLATED'			=> 'Põhjus <strong>pole</strong> tõlgitud.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Põhjus <strong>pole</strong> tõlgitud. Kui soovid tõlkida, Määra sobiv võti keelefailides raporteerimispõhjuste sektsioonis.',
	'IS_TRANSLATED'				=> 'Põhjus on tõlgitud.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Põhjus on tõlgitud. Kui siin sisestatud pealkiri vastab keelefailis olevale, kasutatakse tõlgitud pealkirja ja kirjeldust.',

	'NO_REASON'					=> 'Põhjust ei leitud.',
	'NO_REASON_INFO'			=> 'Pead määrama pealkirja ja kirjelduse põhjusele.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Sa ei saa eemaldada vaikimisi põhjust “Muu”.',

	'REASON_ADD'				=> 'Lisa raporteerimis/keelamispõhjus',
	'REASON_ADDED'				=> 'Raporteerimis/keelamispõhjus lisatud.',
	'REASON_ALREADY_EXIST'		=> 'Põhjus selle pealkirjaga on juba olemas, Palun sisesta põhjusele teistsugune pealkiri.',
	'REASON_DESCRIPTION'		=> 'Põhjuse kirjeldus',
	'REASON_DESC_TRANSLATED'	=> 'Kuvatud põhjuse kirjeldus',
	'REASON_EDIT'				=> 'Muuda raporteerimis/keelamispõhjust',
	'REASON_EDIT_EXPLAIN'		=> 'Siin saad lisada või muuta põhjuseid. Kui põhjus on tõlgitud, kasutatakse tõlgitud versiooni siinsisestatud kirjelduse asemel.',
	'REASON_REMOVED'			=> 'Raporteerimis/keelamispõhjus eemaldatud.',
	'REASON_TITLE'				=> 'Põhjuse pealkiri',
	'REASON_TITLE_TRANSLATED'	=> 'Kuvatud põhjuse pealkiri',
	'REASON_UPDATED'			=> 'Raporteerimis/keelamispõhjus uuendatud.',

	'USED_IN_REPORTS'		=> 'Kasutatud raportites',
));
