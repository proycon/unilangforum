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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Овде можете управљати индексима позадине претраге. Будући да обично користите само једну позадину требало би да обришете све индексе за које нисте направили да се користе. После мењања неких од поставки претраге (н.пр. броја најмање/највише знакова) може бити корисно да поново направите индекс тако да одражава ове промене.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Овде можете да одредите која ће позадина претраге бити коришћена за индексирање порука и извођење претраге. Можете да подесите различите поставке које могу утицати на количину обраде потребну за ове поступке. Неке од ових поставки су исте за све позадине претраге.',

	'COMMON_WORD_THRESHOLD'					=> 'Праг уобичајених речи',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Речи које су у великом проценту садржане у свим порукама биће сматране за уобичајене. Уобичајене речи су занемарене у упитима претраге. Поставите на нула да онемогућите. Има утицаја само уколико има више од 100 порука. Уколико желите да речи које се тренутно сматрају за уобичајене буду поново размотрене морате да преправите индекс.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Да ли сигурно желите да пребаците на другу позадину претраге? Након мењања позадине претраге мораћете да направите индекс за нову позадину претраге. Уколико не планирате да се враћате на стару позадину претраге можете такође да обришете индекс старе позадине како бисте растеретили системске ресурсе.',
	'CONTINUE_DELETING_INDEX'				=> 'Настави поступак уклањања претходног индекса',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Поступак уклањања индекса је покренут. Како бисте приступили главној страници за претрагу мораћете да га употпуните или откажете.',
	'CONTINUE_INDEXING'						=> 'Настави претходни поступак индексирања',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Поступак индексирања је покренут. Како бисте приступили главној страници за претрагу мораћете да га употпуните или откажете.',
	'CREATE_INDEX'							=> 'Направи индекс',

	'DELETE_INDEX'							=> 'Обриши индекс',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Брисање индекса је у току',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Позадина претраге тренутно брише свој индекс. Ово може узети неколико минута.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltext позадина може бити коришћена само са верзијом MySQL4 или јачом.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext индекси могу бити коришћени само са MyISAM или InnoDB табелама. MySQL 5.6.4 или новији је неопходан за fulltext индексе на InnoDB табелама.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Укупан број индексираних порука',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Речи са бар оволико знакова ће бити индексиране за претрагу. Ви или ваш провајдер можете променити ову поставку само мењањем mysql конфигурације.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Речи са не више од оволико знакова ће бити индексиране за претрагу. Ви или ваш провајдер можете променити ову поставку само мењањем mysql конфигурације.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL пуни текст позадина може бити коришћена само са PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Укупан број индексираних порука',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL верзија',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Претрага текста Конфигурациони Профил:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Најмања дужина речи за кључне речи',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Највећа дужина речи за кључне речи',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Ова позадина претраге захтева PostgreSQL 8.3 верзију или новију.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Конфигурациони профил Текст претраге коришћен за одређивање прослеђивача и речника.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Речи са бар оволико знакова ће бити укључене у упит за базу.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Речи са не више од оволико знакова ће бити укључене у упит за базу.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Подесите следеће поставке за прављење sphinx конфиг датотеке',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Путања до фасцикле са подацима',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Биће коришћена за похрањивање индекса и датотека записа. Требало би да ову фасциклу направите ван веб приступачних фасцикли. (требало би да има пратећу косу црту)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Број порука у често ажурираном делта индексу',
	'FULLTEXT_SPHINX_HOST'					=> 'Домаћин духа sphinx претраге',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Домаћин на коме дух sphinx претраге (searchd) ослушкује. Оставите празно да бисте користили подразумевани localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Ограничење меморије индексера',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Овај број треба стално да буде мањи од RAM меморије доступне на вашој машини. Уколико искусите повремене сметње у раду то може бити због тога што индексер користи превише ресурса. Може бити од помоћи да снизите количину меморије доступне индексеру.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Број порука у главном индексу',
	'FULLTEXT_SPHINX_PORT'					=> 'Порт духа sphinx претраге',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Порт на коме дух sphinx претраге (searchd) ослушкује. Оставите празно да бисте користили подразумевани Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx претрага за phpBB подржава MySQL и PostgreSQL само.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx конфиг датотека',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Изведени садржај sphinx конфиг датотеке. Ови подаци треба да буду налепљени у sphinx.conf који се користи од духа sphinx претраге. Замените [dbuser] и [dbpassword] држаче са одговарајућим подацима ваше базе.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Путања фасцикле sphinx података није одређена. Молимо одредите путању и пошаљите како би се направила конфиг датотека.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Опште поставке претраге',
	'GO_TO_SEARCH_INDEX'					=> 'Иди на почетну страницу претраге',

	'INDEX_STATS'							=> 'Статистика индекса',
	'INDEXING_IN_PROGRESS'					=> 'Индексирање је у току',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Позадина претраге тренутно индексира све поруке на форуму. Ово може узети од неколико минута до неколико сати у зависности од величине вашег форума.',

	'LIMIT_SEARCH_LOAD'						=> 'Ограничење оптерећења система странице за претрагу',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ако се систем не учита за 1 минут страница за претрагу неће бити на вези, 1.0 је ~100% искоришћености процесора. Ово ради само на UNIX основаним серверима.',

	'MAX_SEARCH_CHARS'						=> 'Највише знакова индексираних претрагом',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Речи са не више од оволико знакова ће бити индексиране за претрагу.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Највећи број дозвољених кључних речи',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Највећи број речи који корисник може да претражује. Вредност 0 омогућава неограничен број речи.',
	'MIN_SEARCH_CHARS'						=> 'Најмање знакова индексираних претрагом',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Речи са најмање оволико знакова ће бити индексиране за претрагу.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Најмање знакова за аутора',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Корисници морају унети најмање оволико знакова имена када изводе претрагу аутора са џокером. Уколико је корисничко име аутора краће од овог броја још увек можете да претражујете поруке аутора уношењем корисничког имена у потпуности.',

	'PROGRESS_BAR'							=> 'Показивач тока',

	'SEARCH_GUEST_INTERVAL'					=> 'Интервал поплаве претраге за госта',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Број секунди које гост мора да сачека између претрага. Уколико један гост претражује сви остали морају да чекају док временски интервал не прође.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Све поруке до поруке id %2$d су сада индексиране, од чега је %1$d порука било у овом кораку.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Тренутни износ индексирања је приближно %1$.1f порука по секунди.<br />Индексирање је у току…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Све поруке до поруке id %2$d су уклоњене из индекса претраге.<br />Брисање је у току…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Успешно су индексиране све поруке у бази форума.',
	'SEARCH_INDEX_REMOVED'					=> 'Успешно је обрисан индекс претраге за ову позадину.',
	'SEARCH_INTERVAL'						=> 'Интервал поплаве претраге за корисника',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Број секунди које корисник мора да сачека између претрага. Овај интервал се проверава независно за сваког корисника.',
	'SEARCH_STORE_RESULTS'					=> 'Дужина кеша резултата претраге',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Кеширани резултати претраге ће истећи после овог времена, у секундама. Подесите на 0 уколико желите да онемогућите кеширање претраге.',
	'SEARCH_TYPE'							=> 'Позадина претраге',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB вам омогућава да изаберете позадину која се користи за претрагу текста у садржају поруке. По подразумеваном претрага користи phpBB fulltext претрагу.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Променили сте позадину претраге. Како бисте користили нову позадину претраге требало би да проверите да ли постоји направљен индекс за позадину коју сте изабрали.',

	'TOTAL_WORDS'							=> 'Укупан број индексираних речи',
	'TOTAL_MATCHES'							=> 'Укупан број речи за слање индексираних односа',

	'YES_SEARCH'							=> 'Омогући олакшице претраге',
	'YES_SEARCH_EXPLAIN'					=> 'Омогућава кориснику функционалност претраге укључујући и претрагу чланова.',
	'YES_SEARCH_UPDATE'						=> 'Омогући fulltext ажурирање',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Ажурирање индекса fulltext када се шаљу поруке, поништава се уколико је претрага онемогућена.',
));
