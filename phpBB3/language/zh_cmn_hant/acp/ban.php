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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 小時',
	'30_MINS'		=> '30 分鐘',
	'6_HOURS'		=> '6 小時',

	'ACP_BAN_EXPLAIN'	=> '在這裡，您可以使用會員名稱、IP 或 e-mail 位址來進行封鎖控制。這些方法防止會員到達討論區的任何部分。如果您希望的話，那麼您可以給予一段簡短的 (最多 3000 個字元) 封鎖理由。這將會被顯示在管理記錄中。封鎖的時間期限也可以被指定。假如您要這個封鎖在特定日期結束的話，可以在封鎖期限的下拉選單選擇 <span style="text-decoration: underline;">直到 -&gt;</span> 並且依格式 <kbd>YYYY-MM-DD</kbd> 輸入日期就可以了。',

	'BAN_EXCLUDE'			=> '排除於封鎖列表',
	'BAN_LENGTH'			=> '封鎖期限',
	'BAN_REASON'			=> '封鎖理由',
	'BAN_GIVE_REASON'		=> '顯示封鎖理由',
	'BAN_UPDATE_SUCCESSFUL'	=> '封鎖列表更新成功',
	'BANNED_UNTIL_DATE'		=> '直到 %s', // 例如：「直到 Mon 13.Jul.2009, 14:44」
	'BANNED_UNTIL_DURATION'	=> '%1$s (直到 %2$s)', // 例如：「7 days (直到 Tue 14.Jul.2009, 14:44)」

	'EMAIL_BAN'					=> '封鎖一個或更多個 e-mail 位址',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> '啟用這個功能由所有目前的封鎖中排除已輸入的 e-mail 位址。',
	'EMAIL_BAN_EXPLAIN'			=> '要指定多個 e-mail 位址，請每一行輸入一個。可以使用 * 當作萬用字元，表示符合的部分位址，例如：<samp>*@hotmail.com</samp>、<samp>*@*.domain.tld</samp>、...等。',
	'EMAIL_NO_BANNED'			=> '沒有封鎖的 e-mail 位址',
	'EMAIL_UNBAN'				=> '解除封鎖或解除排除的 e-mail 位址',
	'EMAIL_UNBAN_EXPLAIN'		=> '您可以使用適當的滑鼠與鍵盤的結合，一次選擇多個 e-mail 位址，執行解除封鎖或解除排除的操作。排除的 e-mail 位址有特別背景標示。',

	'IP_BAN'					=> '封鎖一個或更多個 IP',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> '啟用這個功能由所有目前的封鎖中排除已輸入的 IP。',
	'IP_BAN_EXPLAIN'			=> '要指定多個不同的 IP 或主機，請每一行輸入一個。要指定 IP 位址的範圍，請用連字號 <strong>-</strong> 分隔開始和結束，請用 <strong>*</strong> 做為萬用字元。',
	'IP_HOSTNAME'				=> 'IP 位址或主機名稱',
	'IP_NO_BANNED'				=> '沒有封鎖的 IP',
	'IP_UNBAN'					=> '解除封鎖或解除排除的 IP',
	'IP_UNBAN_EXPLAIN'			=> '您可以使用適當的滑鼠與鍵盤的結合，一次選擇多個 IP，執行解除封鎖或解除排除的操作。排除的 IP 有特別背景標示。',

	'LENGTH_BAN_INVALID'		=> '日期格式必須是 <kbd>YYYY-MM-DD</kbd>。',

	'OPTIONS_BANNED'			=> '已封鎖',
	'OPTIONS_EXCLUDED'			=> '已排除',

	'PERMANENT'		=> '永久的',

	'UNTIL'						=> '直到',
	'USER_BAN'					=> '以會員名稱封鎖一個或更多個會員',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> '啟用這個功能由所有目前的封鎖中排除已輸入的會員名稱。',
	'USER_BAN_EXPLAIN'			=> '要指定多個不同的會員名稱，請每一行輸入一個。使用 <span style="text-decoration: underline;">搜尋會員</span> 功能，可自動地探訪以及增加一個或更多個會員。',
	'USER_NO_BANNED'			=> '沒有封鎖的會員名稱',
	'USER_UNBAN'				=> '以會員名稱解除封鎖或解除排除的會員',
	'USER_UNBAN_EXPLAIN'		=> '您可以使用適當的滑鼠與鍵盤的結合，一次選擇多個會員名稱，執行解除封鎖或解除排除的操作。排除的會員名稱有特別背景標示。',
));
