<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Ово питање спречава аутоматизовано попуњавање образаца од спамботова.',
	'CONFIRM_QUESTION_WRONG'	=> 'Нисте пружили ваљан одговор на ово питање.',

	'QUESTION_ANSWERS'			=> 'Одговори',
	'ANSWERS_EXPLAIN'			=> 'Молимо унесите ваљане одговоре на питање, једно по линији.',
	'CONFIRM_QUESTION'			=> 'Питање',

	'ANSWER'					=> 'Одговор',
	'EDIT_QUESTION'				=> 'Учитај Питање',
	'QUESTIONS'					=> 'Питања',
	'QUESTIONS_EXPLAIN'			=> 'За свако попуњавање образаца где сте омогућили Q&amp;A прикључак, корисници ће бити питани једно од питања назначених овде. За коришћење овог прикључка бар једно питање мора бити постављено у подразумеваном језику. Ова питања би требало да буду лака за вашу циљну групу да одговори али ван домашаја ботова који могу да врше Google™ претраге. Коришћење великог и редовно мењаног комплета питања ће постићи најбоље резултате. Омогућите стриктну поставку уколико ваше питање указује на мешовита велика и мала слова, знакове интерпункције или празан простор.',
	'QUESTION_DELETED'			=> 'Питање обрисано',
	'QUESTION_LANG'				=> 'Језик',
	'QUESTION_LANG_EXPLAIN'		=> 'Језик на којем су ова питања и њихови одговори написани.',
	'QUESTION_STRICT'			=> 'Стриктна провера',
	'QUESTION_STRICT_EXPLAIN'	=> 'Омогући да примораш на мешовита велика и мала слова, знакове интерпункције и празне просторе.',

	'QUESTION_TEXT'				=> 'Питање',
	'QUESTION_TEXT_EXPLAIN'		=> 'Питање представљено кориснику.',

	'QA_ERROR_MSG'				=> 'Молимо попуните сва поља и унесите бар један одговор.',
	'QA_LAST_QUESTION'			=> 'Не можете да обришете сва питања док је прикључак активан.',

));
