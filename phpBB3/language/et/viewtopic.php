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

$lang = array_merge($lang, array(
	'APPROVE'								=> 'Kiida heaks',
	'ATTACHMENT'						=> 'Manus',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Manuste lisamine on keelatud.',

	'BOOKMARK_ADDED'		=> 'Teemale järjehoidja lisatud.',
	'BOOKMARK_ERR'			=> 'Teemale järjehoidja lisamine ebaõnnestus. Palun proovi uuesti.',
	'BOOKMARK_REMOVED'		=> 'Teemalt järjehoidja eemaldatud.',
	'BOOKMARK_TOPIC'		=> 'Pane teemale järjehoidja',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Eemalda järjehoidja',
	'BUMPED_BY'				=> 'Viimati tõstatas %1$s, %2$s.',
	'BUMP_TOPIC'			=> 'Tõsta teemat',

	'CODE'					=> 'Kood',

	'DELETE_TOPIC'			=> 'Kustuta teema',
	'DELETED_INFORMATION'	=> 'Kustutas %1$s - %2$s',
	'DISAPPROVE'					=> 'Lükka tagasi',
	'DOWNLOAD_NOTICE'		=> 'Sul pole õigusi, et siin postituses manuseid näha.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Viimati muutis %2$s, %3$s, muudetud %1$d kord kokku.',
		2	=> 'Viimati muutis %2$s, %3$s, muudetud %1$d korda kokku.',
	),
	'EMAIL_TOPIC'			=> 'Saada sõbrale e-kiri',
	'ERROR_NO_ATTACHMENT'	=> 'Valitud manust ei ole enam.',

	'FILE_NOT_FOUND_404'	=> 'Faili <strong>%s</strong> ei eksisteeri.',
	'FORK_TOPIC'			=> 'Kopeeri teema',
	'FULL_EDITOR'			=> 'Täiendatud redigeerija',

	'LINKAGE_FORBIDDEN'		=> 'Sul ei ole õigusi vaadata, alla laadida ega linkida siit lehelt või siia lehele.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Sind on teatatud sellest teemast, logi sisse, et seda vaadata.',
	'LOGIN_VIEWTOPIC'		=> 'Sa pead olema registreeritud ja sisse logitud, et seda teemat vaadata.',

	'MAKE_ANNOUNCE'				=> 'Muuda “teadaandeks”',
	'MAKE_GLOBAL'				=> 'Muuda “üldteadaandeks”',
	'MAKE_NORMAL'				=> 'Muuda “tavaliseks teemaks”',
	'MAKE_STICKY'				=> 'Muuda “kleebiseks”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Sa võid valida kuni <strong>%d</strong> valiku',
		2	=> 'Sa võid valida kuni <strong>%d</strong> valikut',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Manus <strong>%s</strong> pole enam saadaval',
	'MOVE_TOPIC'				=> 'Liiguta teema',

	'NO_ATTACHMENT_SELECTED'=> 'Sa pole valinud manust, mida alla laadida või vaadata.',
	'NO_NEWER_TOPICS'		=> 'Siin foorumis pole uuemaid teemasid.',
	'NO_OLDER_TOPICS'		=> 'Siin foorumis pole vanemaid teemasid.',
	'NO_UNREAD_POSTS'		=> 'Selles teemas pole uusi lugemata postitusi.',
	'NO_VOTE_OPTION'		=> 'Sa pead valima valiku hääletamiseks.',
	'NO_VOTES'				=> 'Pole hääli',

	'POLL_ENDED_AT'			=> 'Hääletus lõppes %s',
	'POLL_RUN_TILL'			=> 'Hääletus kestab kuni %s',
	'POLL_VOTED_OPTION'		=> 'Sa hääletasid selle valiku poolt',
	'POST_DELETED_RESTORE'	=> 'See postitus on kustutatud, kuid seda on veel võimalik taastada.',
	'PRINT_TOPIC'			=> 'Printerivaade',

	'QUICK_MOD'				=> 'Kiire modereerimine',
	'QUICKREPLY'			=> 'Kiirvastamine',
	'QUOTE'					=> 'Tsiteeri',

	'REPLY_TO_TOPIC'		=> 'Vasta teemale',
	'RESTORE'				=> 'Taasta',
	'RESTORE_TOPIC'			=> 'Taasta teema',
	'RETURN_POST'			=> '%sTagasi postituse juurde%s',

	'SUBMIT_VOTE'			=> 'Anna hääl',

	'TOPIC_TOOLS'			=> 'Teema seaded',
	'TOTAL_VOTES'			=> 'Hääli kokku',

	'UNLOCK_TOPIC'			=> 'Ava teema',

	'VIEW_INFO'				=> 'Postituse andmed',
	'VIEW_NEXT_TOPIC'		=> 'Järgmine teema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Eelmine teema',
	'VIEW_RESULTS'			=> 'Vaata tulemusi',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d postitus',
		2	=> '%d postitust',
	),
	'VIEW_UNREAD_POST'		=> 'Esimene lugemata postitus',
	'VOTE_SUBMITTED'		=> 'Sinu hääl on arvesse võetud.',
	'VOTE_CONVERTED'		=> 'Häält ei saa muuta konverditud hääletuste puhul.',

));
