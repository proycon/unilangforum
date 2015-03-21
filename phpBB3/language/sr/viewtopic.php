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
	'APPROVE'								=> 'Одобри',
	'ATTACHMENT'						=> 'Прилог',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Могућност прилога је искључена.',

	'BOOKMARK_ADDED'		=> 'Успешно сте убацили тему у забелешке.',
	'BOOKMARK_ERR'			=> 'Бележење теме није успело. Молимо пробајте поново.',
	'BOOKMARK_REMOVED'		=> 'Успешно сте уклонили тему из забелешки.',
	'BOOKMARK_TOPIC'		=> 'Тему у забелешке',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Уклони из забелешки',
	'BUMPED_BY'				=> 'Последње погурана од %1$s у %2$s.',
	'BUMP_TOPIC'			=> 'Погурај тему',

	'CODE'					=> 'Код',

	'DELETE_TOPIC'			=> 'Обриши тему',
	'DELETED_INFORMATION'	=> 'Обрисана од %1$s дана %2$s',
	'DISAPPROVE'					=> 'Неодобри',
	'DOWNLOAD_NOTICE'		=> 'Немате потребне дозволе да прегледате прилоге у овој поруци.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Последње учитавање од %2$s дана %3$s, учитано %1$d пут укупно.',
		2	=> 'Последње учитавање од %2$s дана %3$s, учитано %1$d пута укупно.',
	),
	'EMAIL_TOPIC'			=> 'Тему на мејл',
	'ERROR_NO_ATTACHMENT'	=> 'Одабрани прилог више не постоји.',

	'FILE_NOT_FOUND_404'	=> 'Датотека <strong>%s</strong> не постоји.',
	'FORK_TOPIC'			=> 'Умножи тему',
	'FULL_EDITOR'			=> 'Пуни Уређивач &amp; Преглед',

	'LINKAGE_FORBIDDEN'		=> 'Нисте овлашћени да прегледате, преузмете или везујете од/до ове веб странице.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Обавештени сте о овој теми, молимо вас да се пријавите како бисте је прегледали.',
	'LOGIN_VIEWTOPIC'		=> 'Форум захтева да будете регистровани и пријављени како бисте прегледали ову тему.',

	'MAKE_ANNOUNCE'				=> 'Промени у “Саопштење”',
	'MAKE_GLOBAL'				=> 'Промени у “Глобално”',
	'MAKE_NORMAL'				=> 'Промени у “Обичну Тему”',
	'MAKE_STICKY'				=> 'Промени у “Лепљиву”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Можете изабрати <strong>%d</strong> понуду',
		2	=> 'Можете изабрати највише <strong>%d</strong> понуда',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Прилог <strong>%s</strong> више није доступан',
	'MOVE_TOPIC'				=> 'Премести тему',

	'NO_ATTACHMENT_SELECTED'=> 'Нисте изабрали прилог за преузимање или преглед.',
	'NO_NEWER_TOPICS'		=> 'Нема новијих тема у овом форуму.',
	'NO_OLDER_TOPICS'		=> 'Нема старијих тема у овом форуму.',
	'NO_UNREAD_POSTS'		=> 'Нема нових непрочитаних порука за ову тему.',
	'NO_VOTE_OPTION'		=> 'Морате изабрати понуду када гласате.',
	'NO_VOTES'				=> 'Нема гласова',

	'POLL_ENDED_AT'			=> 'Гласање се завршава %s',
	'POLL_RUN_TILL'			=> 'Гласање траје до %s',
	'POLL_VOTED_OPTION'		=> 'Гласали сте за ову понуду',
	'POST_DELETED_RESTORE'	=> 'Ова порука је обрисана. Може бити враћена.',
	'PRINT_TOPIC'			=> 'Преглед за штампу',

	'QUICK_MOD'				=> 'Брзи-мод алати',
	'QUICKREPLY'			=> 'Брзи Одговор',
	'QUOTE'					=> 'Цитирај',

	'REPLY_TO_TOPIC'		=> 'Одговори на тему',
	'RESTORE'				=> 'Врати',
	'RESTORE_TOPIC'			=> 'Врати тему',
	'RETURN_POST'			=> '%sПовратак на поруку%s',

	'SUBMIT_VOTE'			=> 'Гласај',

	'TOPIC_TOOLS'			=> 'Алати теме',
	'TOTAL_VOTES'			=> 'Укупно гласова',

	'UNLOCK_TOPIC'			=> 'Откључај тему',

	'VIEW_INFO'				=> 'Појединости поруке',
	'VIEW_NEXT_TOPIC'		=> 'Следећа тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Претходна тема',
	'VIEW_RESULTS'			=> 'Преглед резултата',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d порука',
		2	=> '%d порука',
	),
	'VIEW_UNREAD_POST'		=> 'Прва непрочитана порука',
	'VOTE_SUBMITTED'		=> 'Ваш глас је прихваћен.',
	'VOTE_CONVERTED'		=> 'Мењање гласова није подржано за пребачена гласања.',

));
