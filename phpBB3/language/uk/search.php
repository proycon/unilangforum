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
	'ALL_AVAILABLE'			=> 'Усі доступні',
	'ALL_RESULTS'			=> 'Усі результати',

	'DISPLAY_RESULTS'		=> 'Відображати результати як',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Пошук дав %d результат',
		2	=> 'Пошук дав %d результатів',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Пошук дав більше ніж %d результат',
		2	=> 'Пошук дав більше ніж %d результатів',
	),

	'GLOBAL'				=> 'Загальне оголошення',

	'IGNORED_TERMS'			=> 'проігноровані',
	'IGNORED_TERMS_EXPLAIN'	=> 'Наступні слова в вашому пошуковому запиті було проігноровано: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Перейти до повідомлення',

	'LOGIN_EXPLAIN_EGOSEARCH'            => 'На форумі вимагається бути зареєстрованим і залогованим для перегляду ваших повідомлень.',
	'LOGIN_EXPLAIN_UNREADSEARCH' => 'Ви повинні бути зареєстровані та авторизовані в системі для перегляду непрочитаних повідомлень.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Ви повинні бути зареєстровані та авторизовані в системі для перегляду нових повідомлень з моменту вашого останнього візиту.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Ви вказали занадто багато слів для пошуку. Будь-ласка, не вводьте більше %1$d слова.',
		2	=> 'Ви вказали занадто багато слів для пошуку. Будь-ласка, не вводьте більше %1$d слів.',
	),

	'NO_KEYWORDS'			=> 'Ви повинні задати хоча б одне слово для пошуку. Кожне слово повинне складатись не менше ніж з %s і не більше %s, не включаючи символ шаблону *.',
	'NO_RECENT_SEARCHES'	=> 'Протягом останнього часу пошукових запитів не було.',
	'NO_SEARCH'				=> 'Вибачте, але вам заборонено користуватись пошуковою системою.',
	'NO_SEARCH_RESULTS'		=> 'Тем або повідомлень, які відповідають вашому запиту, не знайдено.',
	'NO_SEARCH_LOAD'		=> 'Вибачте, але ви не можете здійснити пошук зараз. Сервер дуже навантажений. Повторіть вашу спробу пізніше.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Вибачте, але ви не можете здійснити пошук відразу після попереднього. Повторіть вашу спробу через %d секунду.',
		2	=> 'Вибачте, але ви не можете здійснити пошук відразу після попереднього. Повторіть вашу спробу через %d секунд.',
	),
        'NO_SEARCH_UNREADS'      => 'Вибачте, пошук непрочитаних повідомлень вимкнено для цього форуму.',
	'WORD_IN_NO_POST'		=> 'Відповідних повідомлень не знайдено, тому що слово <strong>%s</strong> не зустрічається в жодному повідомленні на форумі.',
	'WORDS_IN_NO_POST'		=> 'Відповідних повідомлень не знайдено, тому що слова <strong>%s</strong> не зустрічаються в жодному повідомленні на форумі.',

	'POST_CHARACTERS'		=> 'символів повідомлень',
	'PHRASE_SEARCH_DISABLED'	=> 'Пошук за точним збігом не підтримується на цьому форумі.',

	'RECENT_SEARCHES'		=> 'Останні пошукові запити',
	'RESULT_DAYS'			=> 'Шукати повідомлення за останні',
	'RESULT_SORT'			=> 'Сортувати результати за',
	'RETURN_FIRST'			=> 'Відображати перші',
	'GO_TO_SEARCH_ADV'	=> 'Розширений пошук',

	'SEARCHED_FOR'				=> 'Пошуковий запит',
	'SEARCHED_TOPIC'			=> 'Пошук в темі',
	'SEARCHED_QUERY'			=> 'Пошуковий запит',
	'SEARCH_ALL_TERMS'			=> 'Шукати усі слова / Шукати використовуючи мову запитів',
	'SEARCH_ANY_TERMS'			=> 'Шукати будь-яке слово',
	'SEARCH_AUTHOR'				=> 'Шукати за автором',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Використовуйте * в якості шаблона',
	'SEARCH_FIRST_POST'			=> 'Тільки в першому повідомленні теми',
	'SEARCH_FORUMS'				=> 'Шукати в форумах',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Оберіть форум чи форуми, де ви хочете здійснювати пошук. Задля прискорення пошуку в підфорумах ви можете обрати батьківський форум і увімкнути пошук в підфорумах.',
	'SEARCH_IN_RESULTS'			=> 'Шукати в знайденому',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Ви можете використовувати <strong>+</strong> перед словами, які ви хочете знайти та <strong>-</strong> перед словами, які непотрібно шукати. Ви можете використовувати список слів, розділяючи їх символом <strong>|</strong> на частини, якщо потрібно знайти лише одне з цих слів. Використовуйте * в якості шаблона для часткового співпадання.',
	'SEARCH_MSG_ONLY'			=> 'Лише в текстах повідомлень',
	'SEARCH_OPTIONS'			=> 'Параметри пошуку',
	'SEARCH_QUERY'				=> 'Запит',
	'SEARCH_SUBFORUMS'			=> 'Шукати в підфорумах',
	'SEARCH_TITLE_MSG'			=> 'В назвах тем і в тексті повідомлень',
	'SEARCH_TITLE_ONLY'			=> 'Тільки в назвах тем',
	'SEARCH_WITHIN'				=> 'Шукати',
	'SORT_ASCENDING'			=> 'За зростанням',
	'SORT_AUTHOR'				=> 'Автор',
	'SORT_DESCENDING'			=> 'За спаданням',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Заголовок повідомлення',
	'SORT_TIME'					=> 'Час створення',

	'SPHINX_SEARCH_FAILED'		=> 'Помилка пошуку: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'На жаль, неможливо здійснити пошук. Додаткова інформація міститься в журналі помилок.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Ви повинні ввести як мінімум %d символ імені автора.',
		2	=> 'Ви повинні задати як мінімум %d символів імені автора.',
	),
));
