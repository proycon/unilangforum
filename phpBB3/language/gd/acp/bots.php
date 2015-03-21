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
	'BOTS'	=> 'Rianaich botaichean',
	'BOTS_EXPLAIN'	=> '’S e àidseant fèin-obrachail a th’ ann am “bot” no “damhan-allaidh” is thèid an cleachdadh mar as trice le innealan rannsachaidh gus na stòir-dhàta aca ùrachadh. Air sgàth ’s nach cleachd iad seiseanan mar bu chòir mar as trice, ’s urrainn dhaibh àireamh an luchd-tadhail a mhì-dhealbhachadh, an eallach a mheudachadh no aig amannan fàilligeadh le inneacs ceart an làraich a chruthachadh. ’S urrainn dhut seòrsa buill sònraichte a shuidheachadh an-seo gus na duilgheadasan seo a sheachnadh.',
	'BOT_ACTIVATE'	=> 'Gnìomhaich',
	'BOT_ACTIVE'	=> 'Tha am bot gnìomhach',
	'BOT_ADD'	=> 'Cuir bot ris',
	'BOT_ADDED'	=> 'Tha thu air bot a chur ris.',
	'BOT_AGENT'	=> 'Maidse àidseint',
	'BOT_AGENT_EXPLAIN'	=> 'Seo sreang a nì seise ri àidseant-bhrabhsair a’ bhot, tha maidse neo-iomlan ceadaichte.',
	'BOT_DEACTIVATE'	=> 'Cuir à gnìomh',
	'BOT_DELETED'	=> 'Tha thu air am bot a sguabadh às.',
	'BOT_EDIT'	=> 'Deasaich botaichean',
	'BOT_EDIT_EXPLAIN'	=> '’S urrainn dhut innteart bot a tha ann mar-thà a dheasachadh no innteart ùr a chur ris an-seo. Faodaidh tu sreang àidseint agus/no caochladh seòlaidhean IP ri maidseadh a shònrachadh. Bi cùramach nuair a shònraicheas tu sreangan no seòlaidhean maidse an àidseint. A bharrachd air sin, ’s urrainn dhut stoidhle ’s cànan a shònrachadh a chleachdas am bot nuair a sheallas e air a’ bhòrd-bhrath. Dh’fhaoidte gun sàbhail thu leud-banna na thaghas tu stoidhle simplidh dha na botaichean. Na dìochuimhnich ceadan iomchaidh a shuidheachadh don bhuidheann sònraichte nam Botaichean.',
	'BOT_LANG'	=> 'Cànan a’ bhot',
	'BOT_LANG_EXPLAIN'	=> 'An cànan a thèid a shealltainn dhan bhot nuair a nì e brabhsadh.',
	'BOT_LAST_VISIT'	=> 'An tadhal mu dheireadh',
	'BOT_IP'	=> 'Seòladh IP a’ bhot',
	'BOT_IP_EXPLAIN'	=> 'Tha maidse neo-iomlan ceadaichte, sgar na seòlaidhean le cromagan.',
	'BOT_NAME'	=> 'Ainm a’ bhot',
	'BOT_NAME_EXPLAIN'	=> 'Seo fiosrachadh a thèid a chleachdadh air do shon-sa a-mhàin.',
	'BOT_NAME_TAKEN'	=> 'Chan fhaod thu an t&#8209;ainm seo a thoirt air a’ bhot air sgàth ’s gun dèid a chleachdadh air a’ bhùird-bhrath mar-thà.',
	'BOT_NEVER'	=> 'Gun tadhal',
	'BOT_STYLE'	=> 'Stoidhle a’ bhot',
	'BOT_STYLE_EXPLAIN'	=> 'An stoidhle a chleachdas am bot air a’ bhòrd-bhrath.',
	'BOT_UPDATED'	=> 'Tha thu air am bot ùrachadh.',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Tha an àidseant bot a shònraich thu coltach ris an fhear a tha thu a’ cleachdadh an-dràsta. Dèan ceartachadh air àidseant a’ bhot seo.',
	'ERR_BOT_NO_IP'	=> 'Tha na seòlaidhean IP a shònraich tu mì-dhligheach no cha ghabh ainm an òstair rèiteachadh.',
	'ERR_BOT_NO_MATCHES'	=> 'Feumaidh tu “Maidse àidseint” no “Seòladh IP” a’ bhot a shònrachadh air a char as lugha.',
	'NO_BOT'	=> 'Cha deach bot a lorg leis an aithnichear shònraichte.',
	'NO_BOT_GROUP'	=> 'Cha deach am buidheann sònraichte “Botaichean” a lorg.',
));
