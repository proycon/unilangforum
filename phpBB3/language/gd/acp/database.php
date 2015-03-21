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
	'ACP_BACKUP_EXPLAIN'	=> '’S urrainn dhut lethbhreac-glèidhidh dhen dàta phpBB agad uile a dhèanamh an-seo. Faodaidh tu an tasglann a gheibh thu a chur sa phasgan <samp>store/</samp> no a luchdadh a-nuas gu dìreach. Dh’fhaoidte gum bi taghadh dhe fòrmatan dùmhlachaidh ri fhaighinn, a’ crochadh air rèiteachadh an fhrithealaiche agad.',
	'ACP_RESTORE_EXPLAIN'	=> 'Aisigidh seo gach clàr phpBB gu slàn o fhaidhle air a shàbhaladh. ’S urrainn dhut faidhle teacsa dùmhlaichte gzip no bzip2 a chleachdadh ma chuireas am frithealaiche agad taic dha is thèid a dhì-dhùmhlachadh gu fèin-obrachail. <strong>RABHADH</strong> Sgrìobhaidh seo thairis air a h&#8209;uile dàta a bhios ann mar-thà. Dh’fhaoidte gun toir an t&#8209;aiseag ùine mhòr, mar sin na gluais air falbh on duilleag seo gus am bi e coileanta. Tha lethbhreacan-glèidhidh ’gan cumail sa phasgan <samp>store/</samp> is thathar an dùil gun deach an gintinn leis an fheart lethbhreac-glèidhidh aig  phpBB. Dh’fhaoidte gun obraich no nach obraich lethbhreacan-glèidhidh nach deach a chruthachadh leis an t&#8209;siostam am broinn phpBB.',
	'BACKUP_DELETE'	=> 'Tha thu air an lethbhreac-glaidhidh a sguabadh às.',
	'BACKUP_INVALID'	=> 'Tha am faidhle a thagh thu airson lethbhreac-glèidhidh mì-dhligheach.',
	'BACKUP_OPTIONS'	=> 'Roghainnean an lethbhric-ghlèidhidh',
	'BACKUP_SUCCESS'	=> 'Tha thu air lethbhreac-glèidhidh a chruthachadh.',
	'BACKUP_TYPE'	=> 'Seòrsa an lethbhric-ghlèidhidh',
	'DATABASE'	=> 'Goireasan stòir-dhàta',
	'DATA_ONLY'	=> 'Dàta a-mhàin',
	'DELETE_BACKUP'	=> 'Sguab às an lethbhreac-glèidhidh',
	'DELETE_SELECTED_BACKUP'	=> 'An e ’s gu bheil thu airson an lethbhreac-glàidhidh a thagh thu a sguabadh às?',
	'DESELECT_ALL'	=> 'Neo-chomharraich na h&#8209;uile',
	'DOWNLOAD_BACKUP'	=> 'Luchdaich a-nuas lethbhreac-glèidhidh',
	'FILE_TYPE'	=> 'Seòrsa an fhaidhle',
	'FILE_WRITE_FAIL'	=> 'Cha ghabh sgrìobhadh sa phasgan stòrais.',
	'FULL_BACKUP'	=> 'Slàn',
	'RESTORE_FAILURE'	=> 'Dhfhaoidte gu bheil faidhle an lethbhric-ghlèidhidh coirbte.',
	'RESTORE_OPTIONS'	=> 'Roghainnean aisig',
	'RESTORE_SELECTED_BACKUP'	=> 'An e ’s gu bheil thu airson an lethbhreac-glèidhidh a thagh thu aiseag?',
	'RESTORE_SUCCESS'	=> 'Tha thu air stòr-dàta aiseag.<br /><br />Bu chòir dhan bhòrd agad a bhith san staid ’s a bha e nuair a chaidh an lethbhreac-glèidhidh a dhèanamh.',
	'SELECT_ALL'	=> 'Tagh na h&#8209;uile',
	'SELECT_FILE'	=> 'Tagh faidhle',
	'START_BACKUP'	=> 'Tòisich air lethbhreac-glèidhidh',
	'START_RESTORE'	=> 'Tòisich air aiseag',
	'STORE_AND_DOWNLOAD'	=> 'Stòr is luchdaich a&#8209;nuas',
	'STORE_LOCAL'	=> 'Stòr am faidhle gu h&#8209;ionadail',
	'STRUCTURE_ONLY'	=> 'Structar a-mhàin',
	'TABLE_SELECT'	=> 'Tagh clàir',
	'TABLE_SELECT_ERROR'	=> 'Feumaidh tu clàr no dhà a thaghadh.',
));
