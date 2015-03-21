<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
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
	'CAPTCHA_QA'            => '問答集',
	'CONFIRM_QUESTION_EXPLAIN'   => '這個問題是防止廣告機器人自動表單提交的一種手段。',
	'CONFIRM_QUESTION_WRONG'   => '對於此問題，您提供了一個無效的答案。',

	'QUESTION_ANSWERS'			=> '答案',
	'ANSWERS_EXPLAIN'			=> '請輸入問題之有效的答案，每一個一行。',
	'CONFIRM_QUESTION'			=> '問題',

	'ANSWER'					=> '答案',
	'EDIT_QUESTION'				=> '編輯問題',
	'QUESTIONS'					=> '問題',
	'QUESTIONS_EXPLAIN'         => '對於每個表單提交，您已經啟用了問答集外掛，使用者將被問及在此所指定的問題。要使用這個外掛，至少要有一個問題被設定在預設的語言中。這些問題也許對您的使用者來說很容易回答，但是它超出機器人能夠運用 Google™ 搜尋的能力。使用大量的以及經常改變的問題之設定，將可達到最佳效果。如果您的問題回覆，需要混和大小寫、標點符號或空格，那麼啟用嚴格的設定。',
	'QUESTION_DELETED'         => '問題已刪除',
	'QUESTION_LANG'            => '語言',
	'QUESTION_LANG_EXPLAIN'      => '寫入這個問題和它的答案的語言。',
	'QUESTION_STRICT'         => '嚴格檢查',
	'QUESTION_STRICT_EXPLAIN'   => '啟用以強制執行混和大小寫、標點符號和空格',

	'QUESTION_TEXT'            => '問題',
	'QUESTION_TEXT_EXPLAIN'      => '提交給使用者的問題。',

	'QA_ERROR_MSG'				=> '請填滿所有的欄位，以及至少輸入一個答案。',
	'QA_LAST_QUESTION'			=> '當這個外掛啟用時，您不能刪除所有的問題。',

));
