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

// Forum Admin => Foorumi haldamine
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Automaatne kärpimine postituste vanuse järgi',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Päevade arv peale viimase postituse vaatamisest, mil teema kustutatakse.',
	'AUTO_PRUNE_FREQ'			=> 'Automaatse kärpimise sagedus',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Aeg päevades, kui kiiresti toimub kärpimine.',
	'AUTO_PRUNE_VIEWED'			=> 'Automaatne kärpimine postituste vaatamiste järgi',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Päevade arv viimasest teema vaatamisest, peale mida teema kustutatakse.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Automaatse kärpimise sagedus vari teemades',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Automaatne kärpimine variteemade vanuse järgi',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Päevade arv, peale mida variteemad eemaldatakse.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Aeg päevades, kui kiiresti toimub kärpimine.',

	'CONTINUE'						=> 'Jätka',
	'COPY_PERMISSIONS'				=> 'Kopeeri õigused',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Et lihtsustada uue foorumi õiguste määramisi, võid kopeerida õigused olemasolevalt foorumilt.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Kui foorum on valmis, saab ta samad õigused, mis siin valitud. Kui ühtegi foorumit ei valita, ei näe uut foorumit seni, kuni õigused pole seatud.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Kui otsustad õigused kopeerida, saab foorum samad õigused, mis siin valitud. See kirjutab kõik eelnevad õigused üle. Kui ühtegi foorumit ei valita, jäetakse praegused õigused.',
	'COPY_TO_ACL'					=> 'Võid ka %sseada uued õigused%s sellele foorumile.',
	'CREATE_FORUM'					=> 'Tee uus foorum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Kustuta sisu või liiguta foorumisse',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Kustuta alafoorumid või liiguta foorumisse',
	'DEFAULT_STYLE'						=> 'Vaikimisi stiil',
	'DELETE_ALL_POSTS'					=> 'Kustuta postitused',
	'DELETE_SUBFORUMS'					=> 'Kustuta alafoorumid ja postitused',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Luba aktiivsed teemad',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Kui lubatud, kuvatakse aktiivsed valitud alafoorumitest selle kategooria all.',

	'EDIT_FORUM'					=> 'Muuda foorumit',
	'ENABLE_INDEXING'				=> 'Luba otsingu indekseerimine',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Kui lubatud, siis postitused, mis tehtud selles foorumis, indekseeritakse otsingu jaoks.',
	'ENABLE_POST_REVIEW'			=> 'Luba postituse ülevaade',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Kui lubatud, saab postituse üle vaadata, kui postitusi on juurde tulnud samal ajal, kui kasutaja oma postitust kirjutas.',
	'ENABLE_QUICK_REPLY'			=> 'Luba kiirvastamine',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Lubab kiirvastamise selles foorumis. See valik ei läe arvesse, kui kiirvastamine on ülefoorumiliselt keelatud. Kiirvastamien kuvatakse vaid neile, kel on õigus siin foorumis postitada.',
	'ENABLE_RECENT'					=> 'Kuva aktiivsed teemad',
	'ENABLE_RECENT_EXPLAIN'			=> 'Kui lubatud, kuvatakse siia foorumisse tehtud aktiivsed teema aktiivsete teemade nimekirjas..',
	'ENABLE_TOPIC_ICONS'			=> 'Luba teemaikoonid',

	'FORUM_ADMIN'						=> 'Foorumi administratsioon',
	'FORUM_ADMIN_EXPLAIN'				=> 'phpBB3\'s pole kategooriaid, kõik on foorumipõhine. Igal foorumil saab olla piiramatu arv alafoorumeid ja saad määrata, kas neisse saab postitada. Siin saad lisada, muuta, kustutada, sulgeda ja avada foorumeid koos teiste seadetega. *Kui sinu postitused ja teemad on sünkroonist välja läinud, saad resünkroniseerida foorumeid. <strong>Pead kopeerima või määrama foorumile õigused enne, kui foorum nähtavale ilmub.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Luba automaatne kärpimine',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Kärbib foorumid/teemad. Määra valikud all.',
	'FORUM_CREATED'						=> 'Foorum edukalt loodud',
	'FORUM_DATA_NEGATIVE'				=> 'Kärpimisvalikud ei saa olla negatiivsed.',
	'FORUM_DESC_TOO_LONG'				=> 'Foorumi kirjeldus on liiga pikk, see peab olema alla 4000 sümboli.',
	'FORUM_DELETE'						=> 'Kustuta foorum',
	'FORUM_DELETE_EXPLAIN'				=> 'Kasutades välju all, saad kustutada foorumi. Kui foorumisse saab postitada, saad valida, kuhu teemad (või alafoorumid) üle viia.',
	'FORUM_DELETED'						=> 'Foorum kustutatud.',
	'FORUM_DESC'						=> 'Kirjeldus',
	'FORUM_DESC_EXPLAIN'				=> 'Igasugune HTML kuvatakse, nagu siin kirjas.',
	'FORUM_EDIT_EXPLAIN'				=> 'Väljad all lubavad sul kohandada foorumit. Modereerimine ja postituse arvu seaded on määratud igale kasutajale või grupile eraldi.',
	'FORUM_IMAGE'						=> 'Foorumi pilt',
	'FORUM_IMAGE_EXPLAIN'				=> 'Asukoht, suhtes phpBB juurkaustaga, foorumit iseloomustavale pildile.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Valitud foorumi pilti ei eksisteeri',
	'FORUM_LINK_EXPLAIN'				=> 'Täispikk URL (koos protokolliga, näiteks: <samp>http://</samp>) lõppasukohta, kuhu foorumile vajutamine viib, näiteks: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Loenda edasisuunamisi',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Salvestab foorumile klikitavate kordade arvu.',
	'FORUM_NAME'						=> 'Foorumi nimi',
	'FORUM_NAME_EMPTY'					=> 'Pead sisestama foorumile nime.',
	'FORUM_PARENT'						=> 'Vanemfoorum',
	'FORUM_PASSWORD'					=> 'Foorumi parool',
	'FORUM_PASSWORD_CONFIRM'			=> 'Kinnita foorumi parool',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Peab sisestama vaid siis, kui soovid foorumile parooli.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Määrab foorumile parooli, kasuta eelistatuna kasutajate õigusi.',
	'FORUM_PASSWORD_UNSET'				=> 'Eemalda foorumilt parool',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Vali see, kui soovid foorumilt parooli eemaldada.',
	'FORUM_PASSWORD_OLD'				=> 'Foorumi parool kasutab vana krüpteerimist ja seda peaks muutma.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Sisestatud paroolid ei ühti.',
	'FORUM_PRUNE_SETTINGS'				=> 'Foorumi kärpimise seaded',
	'FORUM_PRUNE_SHADOW'				=> 'Aktiveeri automaatne kärpimine variteemades',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Kärbib foorumi vari teemasi teatud aja jooksul.',
	'FORUM_RESYNCED'					=> 'Foorum “%s” resünkroniseeritud',
	'FORUM_RULES_EXPLAIN'				=> 'Foorumi reeglid kuvatakse igal lehel foorumi sees.',
	'FORUM_RULES_LINK'					=> 'Link foorumi reeglitele',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Saad sisestada reeglite URL\'i. See valik kirjutab üle käsitsi kirjutatud foorumi reeglid.',
	'FORUM_RULES_PREVIEW'				=> 'Foorumi reeglite eelvaade',
	'FORUM_RULES_TOO_LONG'				=> 'Foorumi reeglid peavad olema lühemad kui 4000 sümbolit.',
	'FORUM_SETTINGS'					=> 'Foorumi seaded',
	'FORUM_STATUS'						=> 'Foorumi staatus',
	'FORUM_STYLE'						=> 'Foorumi stiil',
	'FORUM_TOPICS_PAGE'					=> 'Teemasid lehe kohta',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Kui see pole 0, kirjutatakse üle vaikimisi seade.',
	'FORUM_TYPE'						=> 'Foorumi tüüp',
	'FORUM_UPDATED'						=> 'Foorumi info uuendatud.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Tahad muuta postitatava foorumi lingiks. Palun liiguta kõik alafoorumid teise foorumisse enne jätkamist, sest pärast lingiks muutmist sa enam foorumeid ei näe.',

	'GENERAL_FORUM_SETTINGS'	=> 'Üldised foorumi seaded',

	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'Näita alafoorumeid vanemfoorumi legendis',
	'LIST_INDEX_EXPLAIN'		=> 'Näitab foorumeid avalehel ja mujal, kus on vanemfoorumi legend.',
	'LIST_SUBFORUMS'			=> 'Näita alafoorumeid legendis',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Näitab selle foorumi alafoorumeid pealehel ja mujal lingina legendis, kui nende "Kuva alafoorumid vanemfoorumi legendis" valik on lubatud.',
	'LOCKED'					=> 'Suletud',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Foorum, kuhu soovisid postitused üle viia, pole postitatav. Palun vali mõni muu.',
	'MOVE_POSTS_TO'					=> 'Liiguta postitused',
	'MOVE_SUBFORUMS_TO'				=> 'Liiguta alafoorumid',

	'NO_DESTINATION_FORUM'			=> 'Sa ei ole valnud foorumit, kuhu sisu üle viia.',
	'NO_FORUM_ACTION'				=> 'Ei ole määratud, mida teha foorumi sisuga.',
	'NO_PARENT'						=> 'Vanemfoorumit pole',
	'NO_PERMISSIONS'				=> 'Ära kopeeri õigusi',
	'NO_PERMISSION_FORUM_ADD'		=> 'Sul pole vajalikke õigusi foorumite lisamiseks.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Sul pole vajalikke õigusi foorumite kustutamiseks.',

	'PARENT_IS_LINK_FORUM'		=> 'Vanemfoorum, mille valisid, on link. Link, ei saa olla vanemfoorumiks, palun vli mõni muu foorum või kategooria.',
	'PARENT_NOT_EXIST'			=> 'Vanemfoorumit ei eksisteeri.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Kärbi teadaanded',
	'PRUNE_STICKY'				=> 'Kärbi kleebised',
	'PRUNE_OLD_POLLS'			=> 'Kärbi vanad hääletused',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Eemaldab teemad, kus on hääletus, millesse pole postitatud postitus vanuse arv päevi',

	'REDIRECT_ACL'	=> 'Nüüd saad %sseada foorumile õigused%s.',

	'SYNC_IN_PROGRESS'			=> 'Sünkroniseerin foorumit',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Hetkel resünkroniseerin teemade rühma %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategooria',
	'TYPE_FORUM'		=> 'Foorum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Avatud',
));
