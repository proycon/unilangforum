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
	'CAPTCHA_QA'	=> 'C⁊F',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Tha a’ cheist seo ann ach nach cuir botaichean spama foirmean a-steach.',
	'CONFIRM_QUESTION_WRONG'	=> 'Chuir thu freagairt dhan cheist nach eil mar bu chòir.',
	'QUESTION_ANSWERS'	=> 'Freagairtean',
	'ANSWERS_EXPLAIN'	=> 'Cuir freagairtean cearta ann dhan cheist, tè gach loidhne.',
	'CONFIRM_QUESTION'	=> 'Ceist',
	'ANSWER'	=> 'Freagairt',
	'EDIT_QUESTION'	=> 'Deasaich ceist',
	'QUESTIONS'	=> 'Ceistean',
	'QUESTIONS_EXPLAIN'	=> 'Ma chuireas tu am plugan C⁊F air, thèid tè dhe na ceistean a shònraich thu an-seo a chur don luchd-cleachdaidh gach turas a chuireas iad foirm a-steach. Gus am plugan a chleachdadh, tha aon cheist air a char as lugha a dhìth ort sa chànan choitcheann. Bu chòir dha na ceistean seo a bhith furasta ri am freagairt dhan luchd-cleachdaidh agad ach ro dhoirbh do bot a nì rannsachadh Google™. Gheibh thu an toradh as fheàrr ma chleachdas tu àireamh mòr de cheistean a dh’atharraicheas gu tric. Cuir roghainn an dearbhaidh theann an comas ma tha an ceist agad a’ crochadh air litrichean mòra is beaga, puingeachadh no geal-spàs.',
	'QUESTION_DELETED'	=> 'Ceist air a sguabadh às',
	'QUESTION_LANG'	=> 'Cànan',
	'QUESTION_LANG_EXPLAIN'	=> 'An cànan sa bheil a’ cheist seo is a freagairtean sgrìobhte.',
	'QUESTION_STRICT'	=> 'Dearbhadh teann',
	'QUESTION_STRICT_EXPLAIN'	=> 'Cuir seo an comas gus litrichean mòra is beaga, puingeachadh is geal-spàs iarraidh.',
	'QUESTION_TEXT'	=> 'Ceist',
	'QUESTION_TEXT_EXPLAIN'	=> 'Thèid a’ cheist seo a shealltainn dhan neach-cleachdaidh.',
	'QA_ERROR_MSG'	=> 'Cuir rud a-steach sna h&#8209;uile raon agus aon fhreagairt air a char as lugha.',
	'QA_LAST_QUESTION'	=> 'Chan urrainn dhut gach uile ceist a sguabadh às nuair a bhios am plugan air.',
));
