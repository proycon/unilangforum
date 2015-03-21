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
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
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
	'CONFIRM_QUESTION_EXPLAIN'	=> 'To pytanie jest elementem zabezpieczającym przed automatycznym zamieszczaniem postów.',
	'CONFIRM_QUESTION_WRONG'	=> 'Udzielono nieprawidłowej odpowiedzi na pytanie.',

	'QUESTION_ANSWERS'			=> 'Odpowiedzi',
	'ANSWERS_EXPLAIN'			=> 'Wprowadź poprawne odpowiedzi na pytanie. Każda odpowiedź powinna znaleźć się w oddzielnym wierszu.',
	'CONFIRM_QUESTION'			=> 'Pytanie',

	'ANSWER'					=> 'Odpowiedź',
	'EDIT_QUESTION'				=> 'Edycja pytania',
	'QUESTIONS'					=> 'Pytania',
	'QUESTIONS_EXPLAIN'			=> 'Gdy jest włączona wtyczka Q&amp;A, podczas wysyłania czegokolwiek na forum, użytkownicy będą otrzymywać jedno z wyszczególnionych tutaj pytań. Aby używać tej wtyczki w domyślnym języku, musi być określone przynajmniej jedno pytanie. Pytania powinny być tak skonstruowane, aby użytkownicy mogli łatwo udzielić na nie odpowiedzi, a jednocześnie umożliwiały one botom uruchamianie wyszukiwania w Google™. Najlepsze rezultaty można osiągnąć, stosując duże i często zmieniane zestawy pytań. Włącz sprawdzanie dokładne, jeśli pytanie odnosi się do zagadnień związanych ze znakami interpunkcyjnymi, wielkością liter i tzw. „białymi znakami”.',
	'QUESTION_DELETED'			=> 'Pytanie zostało usunięte',
	'QUESTION_LANG'				=> 'Język',
	'QUESTION_LANG_EXPLAIN'		=> 'Język w jakim pytanie i odpowiedź są napisane.',
	'QUESTION_STRICT'			=> 'Sprawdzanie dokładne',
	'QUESTION_STRICT_EXPLAIN'	=> 'Jeśli funkcja ta zostanie zaznaczona, wielkość liter, znaki interpunkcyjne i tzw. „białe znaki” będą brane pod uwagę.',

	'QUESTION_TEXT'				=> 'Pytanie',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pytanie, jakie będzie zadawane użytkownikowi.',

	'QA_ERROR_MSG'				=> 'Wypełnij wszystkie pola i przynajmniej jedną odpowiedź.',
	'QA_LAST_QUESTION'			=> 'Gdy wtyczka jest aktywna nie można usuwać wszystkich pytań.',

));
