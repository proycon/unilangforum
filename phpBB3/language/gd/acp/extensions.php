<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-05-30 - GunChleoc http://www.foramnagaidhlig.net is akerbeltz http://www.akerbeltz.org
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Tuilleadan',
	'EXTENSIONS'				=> 'Tuilleadain',
	'EXTENSIONS_ADMIN'			=> 'Manaidsear nan tuilleadan',
	'EXTENSIONS_EXPLAIN'		=> '’S e inneal a th’ ann an manaidsear nan tuilleadan sa bhòrd phpBB agad a leigeas leat staid nan tuilleadan uile agad a stiùireadh agus fiosrachadh mun dèidhinn a shealltainn.',
	'EXTENSION_INVALID_LIST'	=> 'Chan eil an tuilleadan “%s” dligheach.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Chan eil an tuilleadan a thagh thu ri fhaighinn airson a’ bhùird seo. Feuch an dearbhaich thu gu bheil na tionndaidhean de phpBB agus PHP agad ceadaichte (seall air an duilleag fiosrachaidh).',
	'EXTENSION_DIR_INVALID'		=> 'Tha structar phasganan mì-dhligheach aig an tuilleadan a thagh thu agus cha ghabh a chur an comas.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Cha ghabh an tuilleadan a thagh thu a chur an comas. Dearbhaich gun deach riatanasan an tuilleadain a choileanadh.',

	'DETAILS'				=> 'Fiosrachadh',

	'EXTENSIONS_DISABLED'	=> 'Tuilleadain à comas',
	'EXTENSIONS_ENABLED'	=> 'Tuilleadain an comas',

	'EXTENSION_DELETE_DATA'	=> 'Sguab às an dàta',
	'EXTENSION_DISABLE'		=> 'Cuir à comas',
	'EXTENSION_ENABLE'		=> 'Cuir an comas',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Ma sguabas tu dàta an tuilleadain as, bheir seo air falbh gach dàta ’s roghainn aige. Thèid faidhlichean an tuilleadain a chumail ach an gabh a chur an comas a-rithist.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Ma chuireas tu tuilleadan à comas, thèid gach faidhle, dàta ’s roghainn aige a chumail ach bha bhith na goireasan a chuir i ris ri làimh tuilleadh.',
	'EXTENSION_ENABLE_EXPLAIN'		=> '’S urrainn dhut tuilleadan a chleachdadh air a’ bhòrd agad ma chuireas tu an comas e.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Tha dàta an tuilleadain ’ga sguabadh às an-dràsta. Na fàg no ath-nuadhaich an duilleag seo gus am bi seo air a choileanadh.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Tha an tuilleadan ’ga chur à comas an-dràsta. Na fàg no ath-nuadhaich an duilleag seo gus am bi seo air a choileanadh.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Tha an tuilleadan ’ga chur an comas an-dràsta. Na fàg no ath-nuadhaich an duilleag seo gus am bi seo air a choileanadh.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Tha thu air dàta an tuilleadain a sguabadh às',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Tha thu air an tuilleadan a chur à comas',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Tha thu air an tuilleadan a chur an comas',

	'EXTENSION_NAME'			=> 'Ainm an tuilleadain',
	'EXTENSION_ACTIONS'			=> 'Gnìomhan',
	'EXTENSION_OPTIONS'			=> 'Roghainnean',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Mar a dh’ùraicheas tu tuilleadan',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Cuir an tuilleadan à comas</li>
			<li>Sguab às faidhlichean an tuilleadan on t-siostam-fhaidhlichean</li>
			<li>Luchdaich a-nuas na faidhlichean ùra</li>
			<li>Cuir an tuilleadan an comas</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Mar a bheir thu tuilleadan air falbh on bhòrd agad gu tur',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Cuir an tuilleadan à comas</li>
			<li>Sguab às dàta an tuilleadain</li>
			<li>Sguab às faidhlichean an tuilleadan on t-siostam-fhaidhlichean</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'An e ’s gu bheil thu airson an dàta co-cheangailte ri “%s” a sguabadh às?<br /><br />Bheir seo air falbh gach dàta ’s roghainn aige agus cha ghabh neo-dhèanamh!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'An e ’s gu bheil thu airson an tuilleadan “%s” a chur à comas?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'An e ’s gu bheil thu airson an tuilleadan “%s” a chur an comas?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'An e ’s gu bheil thu airson sparradh gun tèid an tionndadh neo-sheasmhach a chleachdadh?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Till gu liosta nan tuilleadan',

	'EXT_DETAILS'			=> 'Fiosrachadh an tuilleadain',
	'DISPLAY_NAME'			=> 'Ainm taisbeanaidh',
	'CLEAN_NAME'			=> 'Ainm glan',
	'TYPE'					=> 'Seòrsa',
	'DESCRIPTION'			=> 'Tuairisgeul',
	'VERSION'				=> 'Tionndadh',
	'HOMEPAGE'				=> 'Duilleag-dhachaigh',
	'PATH'					=> 'Slighe',
	'TIME'					=> 'Àm an sgaoilidh',
	'LICENSE'				=> 'Ceadachas',

	'REQUIREMENTS'			=> 'Riatanasan',
	'PHPBB_VERSION'			=> 'Tionndadh de phpBB',
	'PHP_VERSION'			=> 'Tionndadh de PHP',
	'AUTHOR_INFORMATION'	=> 'Fiosrachadh an ùghdair',
	'AUTHOR_NAME'			=> 'Ainm',
	'AUTHOR_EMAIL'			=> 'Post-d',
	'AUTHOR_HOMEPAGE'		=> 'Duilleag-dhachaigh',
	'AUTHOR_ROLE'			=> 'Dreuchd',

	'NOT_UP_TO_DATE'		=> 'Chan eil %s cho ùr ’s a ghabhas',
	'UP_TO_DATE'			=> 'Tha %s cho ùr ’s a ghabhas',
	'ANNOUNCEMENT_TOPIC'	=> 'Brath sgaoilidh',
	'DOWNLOAD_LATEST'		=> 'Tionndadh an luchdaidh a-nuas',
	'NO_VERSIONCHECK'		=> 'Cha deach fiosrachadh a thoirt seachad gus an tionndadh a dhearbhadh.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Dearbhaich gach tionndadh a-rithist',
	'FORCE_UNSTABLE'					=> 'Thoir sùil airson tionndaidhean neo-sheasmhach an-còmhnaidh',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Roghainnean airson dearbhadh an tionndaidh',
	'META_FIELD_NOT_SET'	=> 'Cha deach an raon meata riatanach “%s” a shuidheachadh.',
	'META_FIELD_INVALID'	=> 'Tha an raon meata “%s” mì-dhligheach.',
));
