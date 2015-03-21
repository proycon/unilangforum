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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> '在這裡，您可以給所有的會員或者某個特別的<strong>能夠接收大量郵件</strong>的群組會員發送 e-mail。發送時，將會透過管理員的連絡郵件帳號進行發送，同時也發送副本到其他收信人的郵箱中。預設每份 e-mail 只能有 50 位收信人，要發送給更多收信人就需要發送更多的 e-mail。如果您要給一大群人發送 e-mail，當送出後請耐心等待不要中途停止這個頁面。一般而言，大量發送 e-mail 需要很長一段時間，當程序完成時會通知您。',
	'ALL_USERS'						=> '所有會員',

	'COMPOSE'				=> '撰寫',

	'EMAIL_SEND_ERROR'		=> '當發送這個郵件時出現了一個或多個錯誤。請檢查 %s錯誤記錄%s 以獲得詳細內容。',
	'EMAIL_SENT'			=> '訊息已經送出。',
	'EMAIL_SENT_QUEUE'		=> '訊息已經被加入發送排序中。',

	'LOG_SESSION'			=> '記錄 mail session 到重要記錄檔',

	'SEND_IMMEDIATELY'		=> '立即發送',
	'SEND_TO_GROUP'			=> '發送到群組',
	'SEND_TO_USERS'			=> '發送到會員',
	'SEND_TO_USERS_EXPLAIN'	=> '輸入的會員名稱將覆蓋上面選擇的群組。每一行輸入一個會員名稱。',

	'MAIL_BANNED'			=> '寄送郵件給被封鎖的會員',
	'MAIL_BANNED_EXPLAIN'	=> '當寄送大量郵件給群組時，您可以在此選擇是否被封鎖的會員也收得到郵件。',
	'MAIL_HIGH_PRIORITY'	=> '高',
	'MAIL_LOW_PRIORITY'		=> '低',
	'MAIL_NORMAL_PRIORITY'	=> '一般',
	'MAIL_PRIORITY'			=> '郵件優先等級',
	'MASS_MESSAGE'			=> '您的訊息',
	'MASS_MESSAGE_EXPLAIN'	=> '請注意！您只能使用純文字格式。所有的標籤註記都會在發送前被移除。',

	'NO_EMAIL_MESSAGE'		=> '您必須輸入訊息內容。',
	'NO_EMAIL_SUBJECT'		=> '您必須輸入信件主旨。',
));
