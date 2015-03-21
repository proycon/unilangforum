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
	'ACP_MASS_EMAIL_EXPLAIN'	=> '’S urrainn dhut post-d a chur an-seo gun a h&#8209;uile ball agad no gun a h&#8209;uile ball ann am buidheann sònraichte <strong>aig a bheil an roghainn an comas gum faigh iad a leithid de phost-d</strong>. Gus seo a chur an cèill, thèid post-d a chur gu post-d an rianaire a shònraich thu is puist-d tro BBC dha na faightearan. Cha dèid ach 20 faightear a ghabhail a-steach ann am post-d dhen leithid a ghnàth is thèid barrachd phuist-d a chur ma tha barrachd fhaightearan ann. Ma tha thu a’ cur post-d gu buidheann mòr de dhaoine, bi foighidneach às dèidh a chur a-null is na sguir dheth mus bi an duilleag air a luchdadh gu coileanta. Bheir mòr-sgaoileadh puist-d ùine fhada gu tric is gheibh thu fios nuair a bhios an sgriobt ullamh.',
	'ALL_USERS'	=> 'Na h&#8209;uile ball',
	'COMPOSE'	=> 'Sgrìobh',
	'EMAIL_SEND_ERROR'	=> 'Thachair mearachd no dhà le cur a’ phuist-d. Thoir sùil air %sLoga nam mearachdan%s airson barrachd fiosrachaidh.',
	'EMAIL_SENT'	=> 'Chaidh an teachdaireachd a chur.',
	'EMAIL_SENT_QUEUE'	=> 'Chaidh an teachdaireachd a chur air a’ chiudha airson a cur.',
	'LOG_SESSION'	=> 'Cuir seisean a’ phuist-d air an loga èiginneach',
	'SEND_IMMEDIATELY'	=> 'Cuir sa bhad',
	'SEND_TO_GROUP'	=> 'Cuir gun bhuidheann',
	'SEND_TO_USERS'	=> 'Cuir gu na buill',
	'SEND_TO_USERS_EXPLAIN'	=> 'Ma chuireas tu far-ainm sam bith a-steach an-seo, cha dèid am buidheann a thagh thu gu h&#8209;àrd a chleachdadh tuilleadh. Cuir a-steach gach far-ainm air loidhne fa leth.',
	'MAIL_BANNED'	=> 'Cuir gu buill air an toirmeasg',
	'MAIL_BANNED_EXPLAIN'	=> '’S urrainn dhut taghadh an-seo co dhiubh am faigh na buill air an toirmeasg am post-d cuideachd gus nach fhaigh nuair a chuireas tu mòr-sgaoileadh puist-d gu buidheann.',
	'MAIL_HIGH_PRIORITY'	=> 'Ìseal',
	'MAIL_LOW_PRIORITY'	=> 'Àrd',
	'MAIL_NORMAL_PRIORITY'	=> 'Àbhaisteach',
	'MAIL_PRIORITY'	=> 'Prìomhachas a’ phuist-d',
	'MASS_MESSAGE'	=> 'an teachdaireachd agad',
	'MASS_MESSAGE_EXPLAIN'	=> 'Thoir an aire nach urrainn dhut ach teacsa lom a chur a-steach. Thèid gach taga a thoirt air falbh mus dèid am post-d a chur.',
	'NO_EMAIL_MESSAGE'	=> 'Feumaidh tu teachdaireachd a chur a-steach.',
	'NO_EMAIL_SUBJECT'	=> 'Feumaidh tu cuspair na teachdaireachd a shònrachadh.',
));
