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
	'ADD_ATTACHMENT'			=> 'Laadi manus üles',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Kui sa soovid lisada ühe või mitu faili postitusele, siis sisesta andmed siia.',
	'ADD_FILE'					=> 'Lisa fail',
	'ADD_POLL'					=> 'Hääletuse loomine',
	'ADD_POLL_EXPLAIN'			=> 'Kui sa ei soovi hääletust lisada oma teemale, siis jäta need väljad tühjaks.',
	'ALREADY_DELETED'			=> 'Vabandame, kuid antud postitus on juba kustutatud.',
	'ATTACH_DISK_FULL'			=> 'Ei ole piisavalt vabaruumi, et postitada seda manust.',
	'ATTACH_QUOTA_REACHED'		=> 'Vabandame, kuid foorumi manuste limiit on täis.',
	'ATTACH_SIG'				=> 'Lisa signatuur (signatuure saab muuta juhtpaneelist)',

	'BBCODE_A_HELP'				=> 'Laaditud manus postituses: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Rasvane tekst: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Koodi kuvamine: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Fondi suurus: [size=85]väike tekst[/size]',
	'BBCODE_IS_OFF'				=> '%sBBkood%s on <em>VÄLJAS</em>',
	'BBCODE_IS_ON'				=> '%sBBkood%s on <em>SEES</em>',
	'BBCODE_I_HELP'				=> 'Kursiivtekst: [i]tekst[/i]',
	'BBCODE_L_HELP'				=> 'Nimekiri: [list][*]tekst[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Nimekirjaüksus: [*]tekst',
	'BBCODE_O_HELP'				=> 'Järjestatud nimekiri: e.g. [list=1][*]Esimene punkt[/list] või [list=a][*]Punkt a[/list]',
	'BBCODE_P_HELP'				=> 'Sisesta pilt: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Tsiteeri teksti: [quote]tekst[/quote]',
	'BBCODE_S_HELP'				=> 'Fondi värv: [color=red]tekst[/color]. Vihje: võid ka kasutada #FF0000 värvi',
	'BBCODE_U_HELP'				=> 'Allajoonitud tekst: [u]tekst[/u]',
	'BBCODE_W_HELP'				=> 'Sisesta URL: [url]http://url[/url] või [url=http://url]URL tekst[/url]',
	'BBCODE_Y_HELP'				=> 'Nimekiri: Lisa nimekirja element',
	'BUMP_ERROR'				=> 'Sa ei saa tõstatada teemat nii kiiresti peale viimast postitust.',

	'CANNOT_DELETE_REPLIED'		=> 'Vabandame, kuid sa võid kustutada postitusi, millele pole veel vastatud.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'See postitus on suletud. Sa ei saa enam seda muuta.',
	'CANNOT_EDIT_TIME'			=> 'Sa ei saa enam seda postitust muuta või kustutada.',
	'CANNOT_POST_ANNOUNCE'		=> 'Sa ei saa postitada teadaandeid.',
	'CANNOT_POST_STICKY'		=> 'Sa ei saa postitada kleebiseid.',
	'CHANGE_TOPIC_TO'			=> 'Muuda teema tüüpi:',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Sinu sõnum sisaldab %1$d sümbolit.',
		2	=> 'Sinu sõnum sisaldab %1$d sümbolit.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Sinu signatuur sisaldab %1$d sümbolit.',
		2	=> 'Sinu signatuur sisaldab %1$d sümbolit.',
	),
	'CLOSE_TAGS'				=> 'Sulge märgendid',
	'CURRENT_TOPIC'				=> 'Praegune teema',

	'DELETE_FILE'				=> 'Kustuta fail',
	'DELETE_MESSAGE'			=> 'Kustuta sõnum',
	'DELETE_MESSAGE_CONFIRM'	=> 'Kas oled kindel, et soovid selle sõnumi kustutada?',
	'DELETE_OWN_POSTS'			=> 'Saad ainult kustutada oma postitusi.',
	'DELETE_PERMANENTLY'		=> 'Kustuta jäädavalt',
	'DELETE_POST_CONFIRM'		=> 'Kas oled kindel, et soovid selle postituse kustutada?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada antud postituse <strong>jäädavalt</strong>?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Kustuta antud postitus jäädavalt, et seda ei oleks võimalik taastada',
		2	=> 'Kustuta antud %1$d postitust jäädavalt, et neid ei oleks võimalik taastada',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Kas oled kindel, et soovid need postitused kustutada?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada need postitused <strong>jäädavald</strong>?',
	'DELETE_REASON'				=> 'Kustutamise põhjus',
	'DELETE_REASON_EXPLAIN'		=> 'Kustutamise spetsiifiline põhjus on nähtav moderaatoritele.',
	'DELETE_POST_WARN'			=> 'Kustuta see postitus',
	'DELETE_TOPIC_CONFIRM'		=> 'Kas oled kindel, et soovid kustutada selle teema?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Kustuta antud teema jäädavalt, et seda ei oleks võimalik taastada',
		2	=> 'Kustuta antud %1$d teemat jäädavalt, et neid ei oleks võimalik taastada',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada selle teema <strong>jäädavalt</strong>?',
	'DELETE_TOPICS_CONFIRM'		=> 'Kas oled kindel, et soovid kustutada need teemad?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada need teemad <strong>jäädavalt</strong>?',
	'DISABLE_BBCODE'			=> 'Keela BB-koodi kasutamine',
	'DISABLE_MAGIC_URL'			=> 'Ära automaatselt näita URL\'i lingina',
	'DISABLE_SMILIES'			=> 'Keela emotikonid',
	'DISALLOWED_CONTENT'		=> 'Üleslaadimine keelati, sest üleslaaditav fail identifitseeriti rünnakuvektorina.',
	'DISALLOWED_EXTENSION'		=> 'Laiend %s pole lubatud.',
	'DRAFT_LOADED'				=> 'Mustand salvestatud, võid nüüd oma postituse lõpetada.<br />See mustand kustutatakse peale postituse lõpetamist.',
	'DRAFT_LOADED_PM'			=> 'Mustand salvestatud, võid nüüd privaatteate lõpetada.<br />See mustand kustutatakse peale privaatteate saatmist.',
	'DRAFT_SAVED'				=> 'Mustand edukalt salvestatud.',
	'DRAFT_TITLE'				=> 'Mustandi pealkiri',

	'EDIT_REASON'				=> 'Postituse muutmise põhjus',
	'EMPTY_FILEUPLOAD'			=> 'Üles laaditud fail on tühi.',
	'EMPTY_MESSAGE'				=> 'Postitamisel pead sisestama sõnumi.',
	'EMPTY_REMOTE_DATA'			=> 'Faili ei saa üles laadida, proovi laadida manuaalselt.',

	'FLASH_IS_OFF'				=> '[flash] on <em>VÄLJAS</em>',
	'FLASH_IS_ON'				=> '[flash] on <em>SEES</em>',
	'FLOOD_ERROR'				=> 'Sa ei saa postitada postitust nii kiiresti peale eelmist.',
	'FONT_COLOR'				=> 'Fondi värv',
	'FONT_COLOR_HIDE'			=> 'Peida fondi värv',
	'FONT_HUGE'					=> 'Väga suur',
	'FONT_LARGE'				=> 'Suur',
	'FONT_NORMAL'				=> 'Tavaline',
	'FONT_SIZE'					=> 'Fondi suurus',
	'FONT_SMALL'				=> 'Väike',
	'FONT_TINY'					=> 'Väga väike',

	'GENERAL_UPLOAD_ERROR'		=> 'Ei saa laadida manust %s kausta.',

	'IMAGES_ARE_OFF'			=> '[img] on <em>VÄLJAS</em>',
	'IMAGES_ARE_ON'				=> '[img] on <em>SEES</em>',
	'INVALID_FILENAME'			=> '%s on ebakorrektne failinimi.',

	'LOAD'						=> 'Laadi',
	'LOAD_DRAFT'				=> 'Laadi mustand',
	'LOAD_DRAFT_EXPLAIN'		=> 'Siin saad sa valida mustandi, mida jätkata soovid. Sinu praegune postitus tühistatakse, kogu postituse sisu kustutatakse. Vaata, muuda ja kustuta mustandeid juhtpaneelis.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Pead sisse logima, et siin foorumis teemat tõstatada.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Pead sisse logima, et siin foorumis postitusi kustutada.',
	'LOGIN_EXPLAIN_POST'		=> 'Pead sisse logima, et siin foorumis postitada.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Pead sisse logima, et siin foorumis postitusi tsiteerida.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Pead sisse logima, et siin foorumis teemadele vastata.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Võid vaid kasutada fonte suuruseni %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Sinu flash failid võivad olla maksimaalselt %d pikslit kõrge.',
		2	=> 'Sinu flash failid võivad olla maksimaalselt %d pikslit kõrged.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Sinu flash failid võivad olla maksimaalselt %d pikslit lai.',
		2	=> 'Sinu flash failid võivad olla maksimaalselt %d pikslit laiad.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Sinu pildid võivad olla maksimaalselt %1$d pikslit kõrge.',
		2	=> 'Sinu pildid võivad olla maksimaalselt %1$d pikslit kõrged.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Sinu pildid võivad olla maksimaalselt %d pikslit lai.',
		2	=> 'Sinu pildid võivad olla maksimaalselt %d pikslit laiad.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Sisesta sõnum siia, see ei tohi sisaldada üle <strong>%d</strong> sümboli.',
		2	=> 'Sisesta sõnum siia, see ei tohi sisaldada üle <strong>%d</strong> sümboli.',
	),
	'MESSAGE_DELETED'			=> 'Postitus on edukalt kustutatud.',
	'MORE_SMILIES'				=> 'Vaata veel emotikone',

	'NOTIFY_REPLY'				=> 'Teata mulle, kui vastus postitatakse',
	'NOT_UPLOADED'				=> 'Faili ei saa üles laadida.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Sa ei saa kustutada olemasolevaid hääletuse valikuid.',
	'NO_PM_ICON'				=> 'Pole PS ikooni',
	'NO_POLL_TITLE'				=> 'Pead sisestama hääletuse pealkirja.',
	'NO_POST'					=> 'Valitud postitust ei eksisteeri.',
	'NO_POST_MODE'				=> 'Postitusviisi ei valitud.',

	'PARTIAL_UPLOAD'			=> 'Üles laaditud fail laaditi üles vaid osaliselt.',
	'PHP_SIZE_NA'				=> 'Manuse failisuurus on liiga suur.<br />Ei suuda määrata maksimaalset failisuurust PHP poolt php.ini failis.',
	'PHP_SIZE_OVERRUN'			=> 'Manuse failisuurus on liiga suur, Maksimaalne lubatud suurus on %1$d %2$s.<br />See on seatud php.ini failis ja seda ei saa muuta.',
	'PLACE_INLINE'				=> 'Aseta postitusse',
	'POLL_DELETE'				=> 'Kustuta hääletus',
	'POLL_FOR'					=> 'Hääletus on üleval',
	'POLL_FOR_EXPLAIN'			=> 'Sisesta 0 või jäta tühjaks aegumatu hääletuse jaoks.',
	'POLL_MAX_OPTIONS'			=> 'Valikuid kasutaja kohta',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'See on valikute number, mida iga kasutaja võib valida.',
	'POLL_OPTIONS'				=> 'Hääletuse valikud',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Kirjuta iga valik uuele reale. Võid sisestada kuni <strong>%d</strong> valiku.',
		2	=> 'Kirjuta iga valik uuele reale. Võid sisestada kuni <strong>%d</strong> valikut.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Kirjuta iga valik uuele reale. Võid sisestada kuni <strong>%d</strong> valiku. Kui eemaldad või lisad valikuid, tühistatakse kõik eelmised hääled.',
		2	=> 'Kirjuta iga valik uuele reale. Võid sisestada kuni <strong>%d</strong> valikut. Kui eemaldad või lisad valikuid, tühistatakse kõik eelmised hääled.',
	),
	'POLL_QUESTION'				=> 'Hääletuse küsimus',
	'POLL_TITLE_TOO_LONG'		=> 'Hääletuse pealkiri ei tohi sisaldada üle 100 sümboli.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Su hääletuse pealkiri on liiga pikk, kaalu BB-koodi või emotikonide eemaldamist.',
	'POLL_VOTE_CHANGE'			=> 'Luba uuesti hääletamist',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Kui see on lubatud, võivad kasutajad oma häält muuta.',
	'POSTED_ATTACHMENTS'		=> 'Lisatud manused',
	'POST_APPROVAL_NOTIFY'		=> 'Sind teavitatakse, kui su postitus on heaks kiidetud.',
	'POST_CONFIRMATION'			=> 'Postituse kinnitus',
	'POST_CONFIRM_EXPLAIN'		=> 'Et ennetada automaatset postitamist, nõuab foorum postitusele kinnituskoodi. Kood on pildil, mida peaksid nägema all. Kui sa ei näe koodi, kontakteeru %sfoorumi administraatoriga%s.',
	'POST_DELETED'				=> 'Postitus edukalt kustutatud.',
	'POST_EDITED'				=> 'Postitus edukalt muudetud.',
	'POST_EDITED_MOD'			=> 'See postitus on edukalt muudetud, aga selle peab üle vaatama moderaator enne, kui see avaldatakse.',
	'POST_GLOBAL'				=> 'Üldine',
	'POST_ICON'					=> 'Postituse ikoon',
	'POST_NORMAL'				=> 'Tavaline',
	'POST_REVIEW'				=> 'Postituse vaade',
	'POST_REVIEW_EDIT'			=> 'Postituse ülevaade',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Sel ajal, kui sa postitust muutsid, muutis seda ka teine kasutaja. Võid soovida üle vaadata postituse praeguse versiooni ja teha oma muudatused.',
	'POST_REVIEW_EXPLAIN'		=> 'Sellel teemal on vähemalt üks uus vastus. Võiksid oma postituse selle valguses üle vaadata.',
	'POST_STORED'				=> 'Sõnum edukalt postitatud.',
	'POST_STORED_MOD'			=> 'See sõnum on edukalt postitatud, aga selle peab üle vaatama moderaator enne, kui see avaldatakse.',
	'POST_TOPIC_AS'				=> 'Postita teema kui',
	'PROGRESS_BAR'				=> 'Edenemine',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Sa võid ühendada vaid %d tsitaati.',
		2	=> 'Sa võid ühendada vaid %d tsitaati.',
	),
	'QUOTE_NO_NESTING'			=> 'Sa ei saa tsitaate ühendada teistega.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Faili ei laaditud üles, kuna päring aegus.',
	'SAVE'						=> 'Salvesta',
	'SAVE_DATE'					=> 'Salvestatud',
	'SAVE_DRAFT'				=> 'Salvesta mustand',
	'SAVE_DRAFT_CONFIRM'		=> 'Mustandid sisaldava ainult pealkirja ja sõnumit, kõik muu eemaldatakse. Kas sa soovid oma mustandit salvestada?',
	'SMILIES'					=> 'Emotikonid',
	'SMILIES_ARE_OFF'			=> 'Emotikonid on <em>VÄLJAS</em>',
	'SMILIES_ARE_ON'			=> 'Emotikonid on <em>SEES</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Kleebise/teadaande ajalimiit',
	'STICK_TOPIC_FOR'			=> 'Teemat hoitakse kleebisena',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Sisesta 0 või jäta tühjaks ajalimiidita kleebise/teadaande jaoks. See number määratakse suhtes postituse ajaga.',
	'STYLES_TIP'				=> 'Vihje: Stiile saab kiirelt rakendada valitud tekstile.',

	'TOO_FEW_CHARS'				=> 'Sinu sõnum sisaldab liiga vähe sümboleid.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Sa pead sisestama vähemalt %1$d sümboli.',
		2	=> 'Sa pead sisestama vähemalt %1$d sümbolit.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Pead sisestama vähemalt kaks hääletuse valikut.',
	'TOO_MANY_ATTACHMENTS'		=> 'Ei saa enam manust lisada, %d on maksimum.',
	'TOO_MANY_CHARS'			=> 'Sinu sõnum sisaldab liiga palju sümboleid.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Maksimum arv lubatuid sümboleid on %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Üritasid sisestada liiga palju hääletuse valikuid.',
	'TOO_MANY_SMILIES'			=> 'Sinu sõnum sisaldab liiga palju emotikone. Maksimum on %d emotikoni..',
	'TOO_MANY_URLS'				=> 'Sinu sõnum sisaldab liiga palju URL linke. Maksimum on %d URL linki.',
	'TOO_MANY_USER_OPTIONS'		=> 'Sa ei saa määrata rohkem valikuid kasutaja kohta, kui on hääletuse valikuid.',
	'TOPIC_BUMPED'				=> 'Teemat on edukalt tõstatatud.',

	'UNAUTHORISED_BBCODE'		=> 'Sa ei saa kasutada teatud BBkoodi silte: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Et vahetada see teema tagasi tavaliseks, pead valima foorumi, kus sa soovid, et teemat näidatakse.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Sinu sõnum sisaldab mitte toetatud sümbolit:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Sinu pealkiri sisaldab mitte toetatud sümbolit:<br />%s',
	'UPDATE_COMMENT'			=> 'Uuenda kommentaari',
	'URL_INVALID'				=> 'Sisestatud URL on ebakorrektne.',
	'URL_NOT_FOUND'				=> 'Faili ei leitud.',
	'URL_IS_OFF'				=> '[url] on <em>VÄLJAS</em>',
	'URL_IS_ON'					=> '[url] on <em>SEES</em>',
	'USER_CANNOT_BUMP'			=> 'Sa ei saa tõstatada teemasid siin foorumis.',
	'USER_CANNOT_DELETE'		=> 'Sa ei saa kustutada postitusi siin foorumis.',
	'USER_CANNOT_EDIT'			=> 'Sa ei saa muuta postitusi siin foorumis.',
	'USER_CANNOT_REPLY'			=> 'Sa ei saa vastata siin foorumis.',
	'USER_CANNOT_FORUM_POST'	=> 'Sa ei saa postitada, sest foorumi tüüp ei võimalda seda.',

	'VIEW_MESSAGE'				=> '%sVaata oma postitatud sõnumit%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVaata oma saadetud privaatsõnumit%s',

	'WRONG_FILESIZE'			=> 'Fail on liiga suur, maksimum lubatud suurus on %1$d %2$s.',
	'WRONG_SIZE'				=> 'Pilt peab olema minimaalselt %1$s lai, %2$s kõrge ja maksimaalselt %3$s pikslit lai ja %4$s pikslit kõrge. Sisestatud pilt on %5$s pikslit lai ja %6$s pikslit kõrge.',
));
