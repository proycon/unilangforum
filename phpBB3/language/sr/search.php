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
	'ALL_AVAILABLE'			=> 'Сви доступни',
	'ALL_RESULTS'			=> 'Сви резултати',

	'DISPLAY_RESULTS'		=> 'Прикажи резултате као',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Пронађен је %d резултат',
		2	=> 'Пронађено је %d резултата',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Пронађено је више од %d резултата',
		2	=> 'Пронађено је више од %d резултата',
	),

	'GLOBAL'				=> 'Опште саопштење',

	'IGNORED_TERMS'			=> 'занемарених',
	'IGNORED_TERMS_EXPLAIN'	=> 'Следеће речи у вашој претрази су занемарене јер су превише уобичајене: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Скочи на поруку',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Форум захтева да будете регистровани и пријављени како бисте прегледали ваше поруке.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Форум захтева да будете регистровани и пријављени да бисте могли да видите ваше непрочитане поруке.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Форум захтева да будете регистровани и пријављени да бисте могли да видите нове поруке од ваше последње посете.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Изабрали сте превише речи за претрагу. Молимо немојте уносити више од %1$d речи.',
		2	=> 'Изабрали сте превише речи за претрагу. Молимо немојте уносити више од %1$d речи.',
	),

	'NO_KEYWORDS'			=> 'Морате унети најмање једну реч за претрагу. Свака реч мора да садржи бар %s а не сме више од %s искључујући џокере.',
	'NO_RECENT_SEARCHES'	=> 'Није било претрага у скорије време.',
	'NO_SEARCH'				=> 'Жао нам је али немате дозволу да користите систем претраге.',
	'NO_SEARCH_RESULTS'		=> 'Нема резултата.',
	'NO_SEARCH_LOAD'		=> 'Жао нам је али не можете тренутно користити претрагу. Сервер је врло оптерећен. Молимо пробајте поново касније.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Жао нам је али тренутно не можете користити претрагу. Молимо вас да пробате поново за %d секунду.',
		2	=> 'Жао нам је али тренутно не можете користити претрагу. Молимо вас да пробате поново за %d секунди.',
	),
	'NO_SEARCH_UNREADS'		=> 'Жао нам је али претрага за непрочитане поруке је онемогућена на овом форуму.',
	'WORD_IN_NO_POST'		=> 'Није пронађена ниједна порука јер се реч <strong>%s</strong> не појављује ни у једној поруци.',
	'WORDS_IN_NO_POST'		=> 'Није пронађена ниједна порука јер се речи <strong>%s</strong> не појављују ни у једној поруци.',

	'POST_CHARACTERS'		=> 'знакова поруке',
	'PHRASE_SEARCH_DISABLED'	=> 'Претрага по тачном изразу није подржана на овом форуму.',

	'RECENT_SEARCHES'		=> 'Скорашње претраге',
	'RESULT_DAYS'			=> 'Ограничи резултате на претходних',
	'RESULT_SORT'			=> 'Поређај резултате по',
	'RETURN_FIRST'			=> 'Покажи првих',
	'GO_TO_SEARCH_ADV'	=> 'Иди на напредну претрагу',

	'SEARCHED_FOR'				=> 'Тражени појам',
	'SEARCHED_TOPIC'			=> 'Тражена тема',
	'SEARCHED_QUERY'			=> 'Упит претраге',
	'SEARCH_ALL_TERMS'			=> 'Тражи све појмове или користи упит као што је написан',
	'SEARCH_ANY_TERMS'			=> 'Тражи било које појмове',
	'SEARCH_AUTHOR'				=> 'Претрага по корисничком имену',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Користите * као џокер за делимична поклапања.',
	'SEARCH_FIRST_POST'			=> 'Само прва порука тема',
	'SEARCH_FORUMS'				=> 'Претрага у форумима',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Изаберите форум или форуме које желите да претражујете. Подфоруми се претражују аутоматски уколико нисте онемогућили “претражи подфоруме“ испод.',
	'SEARCH_IN_RESULTS'			=> 'Претражи ове резултате',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Поставите <strong>+</strong> испред речи која мора бити пронађена и <strong>-</strong> испред речи која не сме бити пронађена. Поставите списак речи раздвојених <strong>|</strong> у заграде уколико само једна од речи мора бити пронађена. Користите * као џокер за делимична поклапања.',
	'SEARCH_MSG_ONLY'			=> 'Само текст поруке',
	'SEARCH_OPTIONS'			=> 'Поставке претраге',
	'SEARCH_QUERY'				=> 'Упит за претрагу',
	'SEARCH_SUBFORUMS'			=> 'Претражи подфоруме',
	'SEARCH_TITLE_MSG'			=> 'Наслови порука и текст порука',
	'SEARCH_TITLE_ONLY'			=> 'Само наслови тема',
	'SEARCH_WITHIN'				=> 'Претрага у',
	'SORT_ASCENDING'			=> 'Узлазно',
	'SORT_AUTHOR'				=> 'Аутор',
	'SORT_DESCENDING'			=> 'Силазно',
	'SORT_FORUM'				=> 'Форум',
	'SORT_POST_SUBJECT'			=> 'Наслов поруке',
	'SORT_TIME'					=> 'Време поруке',
	'SPHINX_SEARCH_FAILED'		=> 'Неуспешна претрага: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Жао нам је, али претрага не може бити изведена. Више података о овом неуспеху је записано у запису грешке.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Морате унети најмање %d знакова од имена аутора.',
		2	=> 'Морате унети најмање %d знакова од имена аутора.',
	),
));
