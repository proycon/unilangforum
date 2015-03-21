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
	'ACP_STYLES_EXPLAIN'	=> '’S urrainn dhut na stoidhlichean a tha ri làimh air a’ bhòrd agad a stiùireadh an-seo. Faodaidh tu stoidhlichean a tha ann atharrachadh, sguabadh às, cur à gnìomh no gnìomhachadh agus feadhainn ùra ion-phortadh. Gheibh thu ro-shealladh cuideachd air a’ choltas a bhiodh air stoidhle. Chì thu cuideachd co mheud ball a chleachdas gach stoidhle ach chan thoir an aire nach nochd na stoidhlichean ann a thar-àithneas roghainn cleachdaiche.',
	'CANNOT_BE_INSTALLED'	=> 'Cha ghabh a stàladh',
	'CONFIRM_UNINSTALL_STYLES'	=> 'An e ’s  gu bheil thu airson na stoidhlichean a thagh thu a dhì-stàladh?',
	'COPYRIGHT'	=> 'Còir-lethbhreac',
	'DEACTIVATE_DEFAULT'	=> 'Chan urrainn dhut am bun-stoidhle a sguabadh às.',
	'DELETE_FROM_FS'	=> 'Sguab às on t&#8209;siostam fhaidhlichean',
	'DELETE_STYLE_FILES_FAILED'	=> 'Mearachd le sguabadh às nam faidhlichean airson an stoidhle “%s”.',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Tha thu air na faidhlichean airson an stoidhle “%s” a sguabadh às.',
	'DETAILS'	=> 'Fiosrachadh',
	'INHERITING_FROM'	=> '’Na dhìleab aig',
	'INSTALL_STYLE'	=> 'Stàlaich stoidhle',
	'INSTALL_STYLES'	=> 'Stàlaich stoidhlichean',
	'INSTALL_STYLES_EXPLAIN'	=> '’S urrainn dhut stoidhlichean ùra a stàladh an-seo.<br />Mura faic thu stoidhle shònraichte air an liosta gu h-ìosal, dearbhaich an deach a stàladh mar-thà. Mur deach a stàladh, dearbhaich gun deach a luchdadh suas mar bu chòir.',
	'INVALID_STYLE_ID'	=> 'ID stoidhle mì-dhligheach.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Chan fhreagair stoidhle sam bith ris a’ cheist agad.',
	'NO_UNINSTALLED_STYLE'	=> 'Cha deach stoidhle gun stàladh a lorg.',
	'PURGED_CACHE'	=> 'Chaidh an tasgadan fhalamhachadh.',
	'REQUIRES_STYLE'	=> 'Tha e riatanach gun stàlaich thu an stoidhle “%s” airson na stoidhle seo.',
	'STYLE_ACTIVATE'	=> 'Gnìomhaich',
	'STYLE_ACTIVE'	=> 'Gnìomhach',
	'STYLE_DEACTIVATE'	=> 'Cuir à gnìomh',
	'STYLE_DEFAULT'	=> 'Suidhich mar bhun-stoidhle',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Feumaidh tu an stoidhle a ghnìomhachadh mur dèan thu am bun-stoidhle dhith.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Stoidhle pàraint mhì-dhligheach.',
	'STYLE_ERR_NAME_EXIST'	=> 'Tha stoidhle air a bheil an t&#8209;ainm seo ann mar-thà.',
	'STYLE_ERR_STYLE_NAME'	=> 'Feumaidh tu ainm airson na stoidhle a chur seachad.',
	'STYLE_INSTALLED'	=> 'Chaidh an stoidhle “%s” a stàladh.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Till dhan liosta dhe na stoidhlichean air an stàladh.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Stàlaich barrachd stoidhlichean.',
	'STYLE_NAME'	=> 'Ainm na stoidhle',
	'STYLE_NAME_RESERVED'		=> 'Cha ghabh an stoidhle “%s” stàladh on a tha an t-ainm glèidhte.',
	'STYLE_NOT_INSTALLED'	=> 'Cha deach an stoidhle “%s” a stàladh.',
	'STYLE_PATH'	=> 'Slighe na stoidhle',
	'STYLE_UNINSTALL'	=> 'Dì-stàlaich',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Cha ghabh an stoidhle “%s” dì-stàladh on a tha clann aice.',
	'STYLE_UNINSTALLED'	=> 'Tha thu air an stoidhle “%s” a dhì-stàladh.',
	'STYLE_USED_BY'	=> 'Cleachdadh (buill ⁊ botaichean)',
	'UNINSTALL_DEFAULT'	=> 'Chan urrainn dhut a’ bhun-stoidhle a dhì-stàladh.',
));
