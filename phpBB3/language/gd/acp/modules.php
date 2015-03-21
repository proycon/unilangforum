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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> '’S urrainn dhut caochladh mhòidealan a stiùireadh an-seo. Thoir an aire gu bheil trì leibheilean air an structar clàr-taice aig gnìomhan nan rianairean (Roinn-seòrsa -> Roinn-seòrsa -> Mòideal) fhad ’s a tha dà leibheil air an fheadhainn eile (Roinn-seòrsa -> Mòideal) ’s feumaidh tu cumail ri seo. Thoir an aire cuideachd nach glais thu thu fhèin a-mach ’s faodaidh seo tachairt ma sguabas tu às no ma chuireas tu à comas na mòidealan a dhèiligeas ri stiùireadh nam mòidealan fhèin.',
	'ADD_MODULE'	=> 'Cuir mòideal ris',
	'ADD_MODULE_CONFIRM'	=> 'An e ’s gu bheil thu airson am mòideal a thagh thu a chur ris leis a’ mhodh a thagh thu?',
	'ADD_MODULE_TITLE'	=> 'A’ cur mòideal ris',
	'CANNOT_REMOVE_MODULE'	=> 'Cha b’ urrainn dhuinn am mòideal a thoirt air falbh on a tha clann aige. Thoir air falbh no gluais a’ chlann uile mus dèan thu an gnìomh seo.',
	'CATEGORY'	=> 'Roinn-seòrsa',
	'CHOOSE_MODE'	=> 'Tagh modh a’ mhòideil',
	'CHOOSE_MODE_EXPLAIN'	=> 'Tagh am modh a tha thu airson cleachdah leis a’ mhòideal.',
	'CHOOSE_MODULE'	=> 'Tagh mòideal',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Tagh am faidhle a ghairmeas am mòideal seo.',
	'CREATE_MODULE'	=> 'Cruthaich mòideal ùr',
	'DEACTIVATED_MODULE'	=> 'Cuir am mòideal à comas',
	'DELETE_MODULE'	=> 'Sguab às am mòideal',
	'DELETE_MODULE_CONFIRM'	=> 'An e ’s gu bheil thu airson am mòideal seo a thoirt air falbh?',
	'EDIT_MODULE'	=> 'A’ deasachadh mòideal',
	'EDIT_MODULE_EXPLAIN'	=> '’S urrainn dhut roghainnean sònraichte airson a’ mhòideil seo a chur a-steach an-seo.',
	'HIDDEN_MODULE'	=> 'Mòideal falaichte',
	'MODULE'	=> 'Mòideal',
	'MODULE_ADDED'	=> 'Tha thu air am mòideal a chur ris.',
	'MODULE_DELETED'	=> 'Tha thu air am mòideal a chur air falbh.',
	'MODULE_DISPLAYED'	=> 'Seall am mòideal',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Ma tha thu airson am mòideal seo a chleachdadh gun a bhith ’ga shealltainn, suidhich seo air “Chan eadh”.',
	'MODULE_EDITED'	=> 'Tha thu air am mòideal a dheasachadh.',
	'MODULE_ENABLED'	=> 'Cuir am mòideal an comas',
	'MODULE_LANGNAME'	=> 'Ainm cànain a’ mhòideil',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Cuir a-steach ainm a’ mhòideil a thèid a shealltainn. Cleachd cunbhalachan cànain ma tha thu airson eadar-theangachadh o fhaidhle cànain fhaighinn.',
	'MODULE_TYPE'	=> 'Seòrsa a’ mhòideil',
	'NO_CATEGORY_TO_MODULE'	=> 'Cha b’ urrainn dhuinn mòideal a dhèanamh dhen roinn-seòrsa. Feuch an toir thu air falbh no an gluais thu a chuid cloinne uile mus dèan thu an gnìomh seo.',
	'NO_MODULE'	=> 'Cha deach mòideal a lorg.',
	'NO_MODULE_ID'	=> 'Cha deach mòideal a shònrachadh.',
	'NO_MODULE_LANGNAME'	=> 'Cha deach ainm cànain a’ mhòideil a shònrachadh.',
	'NO_PARENT'	=> 'Gun phàrant',
	'PARENT'	=> 'Pàrant',
	'PARENT_NO_EXIST'	=> 'Chan eil am pàrant ann.',
	'SELECT_MODULE'	=> 'Tagh mòideal',
));
