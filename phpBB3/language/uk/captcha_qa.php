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
	'CAPTCHA_QA' => 'Запитання-відповідь',
	'CONFIRM_QUESTION_EXPLAIN' => 'Це запитання призначено для запобігання автоматичному заповненню форм спам-ботами.',
	'CONFIRM_QUESTION_WRONG' => 'Ви ввели неправильну відповідь на запитання.',

	'QUESTION_ANSWERS' => 'Відповіді',
	'ANSWERS_EXPLAIN' => 'Введіть, будь-ласка, правильні відповіді на запитання. Кожну відповідь на окремому рядку.',
	'CONFIRM_QUESTION' => 'Запитання',

	'ANSWER' => 'Відповідь',
	'EDIT_QUESTION' => 'Редагування запитання',
	'QUESTIONS' => 'Запитання',
	'QUESTIONS_EXPLAIN' => 'Під час кожного заповнення форми, для якої ви увімкнули додаток "Запитання-відповідь", користувачу буде задано одне з вказаних тут запитань. Для використання цього додатку повинно бути встановлене хоча б одне запитання на мові за замовчуванням. Ці запитання повинні бути легкими для вашої цільової аудиторії, але такими, щоб бот не зміг знайти на них відповідь за допомогою пошуку Google™. Використання великого і періодично змінного набору запитань дозволить досягнути найкращих результатів. Увімкніть параметр суворої відповідності, якщо ваше запитання базується на змінному регістрі, знаках пунктуації чи пробілах.',
	'QUESTION_DELETED' => 'Запитання видалено',
	'QUESTION_LANG' => 'Мова',
	'QUESTION_LANG_EXPLAIN' => 'Мова, на якій написані це запитання і відповідь.',
	'QUESTION_STRICT' => 'Сувора перевірка',
	'QUESTION_STRICT_EXPLAIN' => 'Увімкніть, щоб при перевірці відповідей враховувались регістр букв, знаки пунктуації та пробіли.',

	'QUESTION_TEXT' => 'Запитання',
	'QUESTION_TEXT_EXPLAIN' => 'Запитання, яке буде задано користувачу.',

	'QA_ERROR_MSG' => 'Заповніть усі поля, і введіть не менше однієї відповіді.',
	'QA_LAST_QUESTION'			=> 'Ви не можете видалити усі запитання, допоки плагін є активним.',
));
