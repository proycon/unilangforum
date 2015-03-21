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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 сат',
	'30_MINS'		=> '30 минута',
	'6_HOURS'		=> '6 сати',

	'ACP_BAN_EXPLAIN'	=> 'Овде можете да контролишете забране корисника по имену, IP адреси или мејл адреси. Ови начини спречавају корисника да приступи било ком делу форума. Можете дати кратак (највише 3000 знакова) разлог за забрану уколико то желите. Ово ће бити приказано у админ запису. Трајање забране може такође бити назначено. Уколико желите забрану до краја одређеног датума пре него након постављеног временског периода изаберите <span style="text-decoration: underline;">Све до -&gt;</span> за трајање забране и унесите датум у <kbd>ГГГГ-ММ-ДД</kbd> облику.',

	'BAN_EXCLUDE'			=> 'Изузеће од забрана',
	'BAN_LENGTH'			=> 'Трајање забране',
	'BAN_REASON'			=> 'Разлог забране',
	'BAN_GIVE_REASON'		=> 'Разлог приказан кориснику под забраном',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Списак забрана је успешно ажуриран.',
	'BANNED_UNTIL_DATE'		=> 'до %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Забрани једну или више мејл адреса',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Омогућите ово да изузмете унесене мејл адресе од свих тренутних забрана.',
	'EMAIL_BAN_EXPLAIN'			=> 'Да бисте одредили више од једне мејл адресе унесите сваку од њих у нови ред. За делимично поклапање адреса користите * као џокер, н.пр. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, итд.',
	'EMAIL_NO_BANNED'			=> 'Нема забрањених мејл адреса',
	'EMAIL_UNBAN'				=> 'Уклони-забрану или из-узеће мејлова',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Можете уклонити забрану (или из-узеће) вишеструких мејл адреса одједном користећи одговарајућу комбинацију миша и тастатуре за ваш рачунар и прегледач. Изузете мејл адресе су задебљане.',

	'IP_BAN'					=> 'Забрани једну или више IP адреса',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Омогућите ово да изузмете унету IP адресу од свих тренутних забрана.',
	'IP_BAN_EXPLAIN'			=> 'Да бисте одредили неколико различитих IP адреса или сервера унесите свако у нови ред. Да бисте одредили опсег IP адреса одвојите почетак и крај цртицом (-), да бисте одредили џокер користите “*”.',
	'IP_HOSTNAME'				=> 'IP адресе или сервери',
	'IP_NO_BANNED'				=> 'Нема забрањених IP адреса',
	'IP_UNBAN'					=> 'Уклони-забрану или из-узеће IP адреса',
	'IP_UNBAN_EXPLAIN'			=> 'Можете уклонити забрану (или из-узеће) вишеструких IP адреса одједном користећи одговарајућу комбинацију миша и тастатуре за ваш рачунар и прегледач. Изузете IP адресе су задебљане.',

	'LENGTH_BAN_INVALID'		=> 'Датум мора бити у облику <kbd>ГГГГ-ММ-ДД</kbd>.',

	'OPTIONS_BANNED'			=> 'Под забраном',
	'OPTIONS_EXCLUDED'			=> 'Искључен',

	'PERMANENT'		=> 'Трајно',

	'UNTIL'						=> 'До',
	'USER_BAN'					=> 'Забрани једног или више корисника по корисничком имену',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Омогући ово за изузеће унетих корисника од свих тренутних забрана.',
	'USER_BAN_EXPLAIN'			=> 'Можете забранити вишеструке кориснике одједном уношењем сваког имена у нови ред. Користите <span style="text-decoration: underline;">Пронађи члана</span> да пронађете и додате једног или више корисника аутоматски.',
	'USER_NO_BANNED'			=> 'Нема забрањених корисничких имена',
	'USER_UNBAN'				=> 'Уклони-забрану или из-узеће корисника по корисничком имену',
	'USER_UNBAN_EXPLAIN'		=> 'Можете уклонити забрану (или из-узеће) вишеструких корисника одједном користећи одговарајућу комбинацију миша и тастатуре за ваш рачунар и прегледач. Изузети корисници су задебљани.',
));
