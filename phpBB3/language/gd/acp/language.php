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
	'ACP_FILES'	=> 'Faidhlichean rianachd',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '’S urrainn dhut pacaidean cànain a stàladh/a thoirt air falbh an-seo. Tha comharra (*) ris a’ phacaid cànain thùsail.',
	'DELETE_LANGUAGE_CONFIRM'		=> 'An e ’s gu bheil thu airson “%s” a sguabadh às?',
	'INSTALLED_LANGUAGE_PACKS'	=> 'Pacaidean cànain stàlaichte',
	'LANGUAGE_DETAILS_UPDATED'	=> 'Tha thu air fiosrachadh a’ chànain ùrachadh.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Chaidh a’ phacaid cànain seo a stàladh mar-thà.',
	'LANGUAGE_PACK_DELETED'	=> 'Tha thu air a’ phacaid cànain “%s” a thoirt air falbh. Chaidh an roghainn aig gach ball a bha ’ga cleachdadh ath-shuidheachadh air cànan tùsail a’ bhùird.',
	'LANGUAGE_PACK_DETAILS'	=> 'Fiosrachadh na pacaide cànain',
	'LANGUAGE_PACK_INSTALLED'	=> 'Tha thu air a’ phacaid cànain “%s” a stàladh.',
	'LANGUAGE_PACK_CPF_UPDATE'	=> 'Chaidh lethbhreac dhe na sreangan cànain aig na raointean pròifil gnàthaichte a dhèanamh on chànan tùsail. Feuch an atharraich thu iad ma bhios seo a dhìth.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Ainm ionadail',
	'LANGUAGE_PACK_NAME'	=> 'Ainm',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Chan eil a’ phacaid cànain a thagh thu ann.',
	'LANGUAGE_PACK_USED_BY'	=> 'Cleachdadh (buill ⁊ botaichean)',
	'LANGUAGE_VARIABLE'	=> 'Caochladair cànain',
	'LANG_AUTHOR'	=> 'Ùghdar na pacaide cànain',
	'LANG_ENGLISH_NAME'	=> 'Ainm sa Bheurla',
	'LANG_ISO_CODE'	=> 'Còd ISO',
	'LANG_LOCAL_NAME'	=> 'Ainm ionadail',
	'MISSING_LANG_FILES'	=> 'Tha faidhlichean cànain a dhìth',
	'MISSING_LANG_VARIABLES'	=> 'Tha caochladairean cànain a dhìth',
	'NO_FILE_SELECTED'	=> 'Cha do shònraich thu faidhle cànain.',
	'NO_LANG_ID'	=> 'Cha do shònraich thu pacaid cànain.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Chan urrainn dhut a’ phacaid cànain tùsail a thoirt air falbh.<br />Ma tha thu airson a’ phacaid cànain seo a thoirt air falbh, feumaidh tu cànan tùsail a’ bhùird atharrachadh an toiseach.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Chan eil pacaid cànain gun stàladh ann',
	'THOSE_MISSING_LANG_FILES'	=> 'Tha na faidhlichean cànain seo a dhìth on phasgan cànain “%s”',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'Tha na caochladairean cànain seo a dhìth on phacaid cànain “%s”',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pacaidean cànain gun stàladh',
));
