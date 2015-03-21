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
	'APPROVE'								=> 'Aontaich',
	'ATTACHMENT'	=> 'Ceanglachan',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Tha feart nan ceanglachan à comas.',
	'BOOKMARK_ADDED'	=> 'Tha thu air comharra-leabhair a chur ris a’ chuspair seo.',
	'BOOKMARK_ERR'	=> 'Dh’fhàillig ort comharra-leabhair a chur ris a’ chuspair seo. Feuch ris a-rithist.',
	'BOOKMARK_REMOVED'	=> 'Tha thu air comharra-leabhair a thoirt air falbh on chuspair seo.',
	'BOOKMARK_TOPIC'	=> 'Cuir comharra-leabhair ris a’ chuspair seo',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Thoir comharra-leabhair air falbh on chuspair ',
	'BUMPED_BY'	=> 'Air a bhreabadh an turas mu dheireadh le %1$s %2$s.',
	'BUMP_TOPIC'	=> 'Breab an cuspair seo',
	'CODE'	=> 'Còd',
	'DELETE_TOPIC'	=> 'Sguab às an cuspair',
	'DELETED_INFORMATION'	=> 'Air a sguabadh às le %1$s %2$s',
	'DISAPPROVE'					=> 'Easaontaich',
	'DOWNLOAD_NOTICE'	=> 'Chan eil na ceadan riatanach agad gus na faidhlichean ceangailte ris a’ phost seo a shealltainn.',
	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Air a dheasachadh an turas mu dheireadh le %2$s %3$s; air a dheasachadh %1$d turas uile gu lèir',
		2	=> 'Air a dheasachadh an turas mu dheireadh le %2$s %3$s; air a dheasachadh %1$d thuras uile gu lèir',
		3	=> 'Air a dheasachadh an turas mu dheireadh le %2$s %3$s; air a dheasachadh %1$d tursan uile gu lèir',
		4	=> 'Air a dheasachadh an turas mu dheireadh le %2$s %3$s; air a dheasachadh %1$d turas uile gu lèir',
	),
	'EMAIL_TOPIC'	=> 'Cuir an cuspair air a’ phost-d',
	'ERROR_NO_ATTACHMENT'	=> 'Chan eil an ceanglachan a thagh thu ann tuilleadh.',
	'FILE_NOT_FOUND_404'	=> 'Chan eil am faidhle <strong>%s</strong> ann.',
	'FORK_TOPIC'	=> 'Dèan lethbhreac dhen chuspair.',
	'FULL_EDITOR'	=> 'Roghainnean slàna &#x204A; ro-shealladh',
	'LINKAGE_FORBIDDEN'	=> 'Chan eil cead agad rud sam bith a leughadh, a’ luchdadh a-nuas no ceanglaichean a chruthachadh air an làrach-lìn seo.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Chaidh fios a chur thugad mun chuspair seo, log a-steach gus a leughadh.',
	'LOGIN_VIEWTOPIC'	=> 'Feumaidh tu clàradh is logadh a-steach sa bhòrd-bhrath seo mus leugh thu an cuspair seo.',
	'MAKE_ANNOUNCE'	=> 'Dèan "Brath" dheth',
	'MAKE_GLOBAL'	=> 'Dèan “Lèir-Bhrath” dheth',
	'MAKE_NORMAL'	=> 'Dèan “Cuspair cumanta” dheth',
	'MAKE_STICKY'	=> 'Dèan “Fleodrainn” dheth',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Faodaidh tu suas gu <strong>%d</strong>roghainn a thaghadh',
		2	=> 'Faodaidh tu suas gu <strong>%d</strong>roghainn a thaghadh',
		3	=> 'Faodaidh tu suas gu <strong>%d</strong>roghainnean a thaghadh',
		4	=> 'Faodaidh tu suas gu <strong>%d</strong>roghainn a thaghadh',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Chan eil an ceanglachan <strong>%s</strong> ann tuilleadh',
	'MOVE_TOPIC'	=> 'Gluais an cuspair',
	'NO_ATTACHMENT_SELECTED'	=> 'Chan eil thu air ceanglachan a thaghadh gus a luchdadh a-nuas no a shealltainn.',
	'NO_NEWER_TOPICS'	=> 'Chan eil cuspair nas ùire san fhòram seo.',
	'NO_OLDER_TOPICS'	=> 'Chan eil cuspair nas sine san fhòram seo.',
	'NO_UNREAD_POSTS'	=> 'Chan eil post ùr nach deach a leughadh sa chuspair seo.',
	'NO_VOTE_OPTION'	=> 'Feumaidh tu roghainn a thaghadh mus dèan thu bhòtadh.',
	'NO_VOTES'	=> 'Gun bhòta fhathast',
	'POLL_ENDED_AT'	=> 'Thàinig an cunntas-bheachd gu crìch %s',
	'POLL_RUN_TILL'	=> 'Thig an cunntas-bheachd gu crìch %s',
	'POLL_VOTED_OPTION'	=> 'Bhòt thu airson na roghainn seo',
	'POST_DELETED_RESTORE'	=> 'Chaidh am post seo a sguabadh às. Gabhaidh e aiseag.',
	'PRINT_TOPIC'	=> 'Sealladh clò-bhualaidh',
	'QUICK_MOD'	=> 'Grad-ghnìomhan nam maor',
	'QUICKREPLY'	=> 'Freagair gu luath',
	'QUOTE'	=> 'Iomradh',
	'REPLY_TO_TOPIC'	=> 'Freagair',
	'RESTORE'				=> 'Aisig',
	'RESTORE_TOPIC'			=> 'Aisig an cuspair',
	'RETURN_POST'	=> '%sTill dhan phost%s',
	'SUBMIT_VOTE'	=> 'Cuir do bhòta ann',
	'TOPIC_TOOLS'			=> 'Innealan a’ chuspair',
	'TOTAL_VOTES'	=> 'Bhòtaichean uile gu lèir',
	'UNLOCK_TOPIC'	=> 'Neo-ghlais an cuspair',
	'VIEW_INFO'	=> 'Fiosrachadh mun phost',
	'VIEW_NEXT_TOPIC'	=> 'An ath-chuspair',
	'VIEW_PREVIOUS_TOPIC'	=> 'An cuspair roimhe',
	'VIEW_RESULTS'	=> 'Seall na toraidhean',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d phost',
		2	=> '%d phost',
		3	=> '%d postaichean',
		4	=> '%d post',
	),
	'VIEW_UNREAD_POST'	=> 'Seall a’ chiad post nach deach a leughadh',
	'VOTE_SUBMITTED'	=> 'Chaidh a’ bhòta agad a thoirt seachad.',
	'VOTE_CONVERTED'	=> 'Chan eil taic ann do dh’atharrachadh bhòtaichean ann an cunntasan-beachd a chaidh iompachadh.',
));
