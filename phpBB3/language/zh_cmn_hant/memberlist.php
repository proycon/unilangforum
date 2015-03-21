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
	'ABOUT_USER'			=> '個人資料',
	'ACTIVE_IN_FORUM'		=> '最常討論的版面',
	'ACTIVE_IN_TOPIC'		=> '最常討論的主題',
	'ADD_FOE'				=> '加入黑名單',
	'ADD_FRIEND'			=> '加入好友',
	'AFTER'					=> '之後',

	'ALL'					=> '全部',

	'BEFORE'				=> '之前',

	'CC_SENDER'				=> '將這封 e-mail 的副本寄給自己。',
	'CONTACT_ADMIN'			=> '聯絡管理員',

	'DEST_LANG'				=> '語系設定',
	'DEST_LANG_EXPLAIN'		=> '選擇一個適合收件人的語系。',

	'EDIT_PROFILE'			=> '編輯個人資料',

	'EMAIL_BODY_EXPLAIN'	=> '這封電子郵件將以純文字的方式發送，請勿加入任何 HTML 或 BBCode 代碼。這封電子郵件的回信信箱將設定為您的電子郵件信箱。',
	'EMAIL_DISABLED'		=> '很抱歉！與電子郵件相關的功能都已經被關閉了。',
	'EMAIL_SENT'			=> '您的電子郵件已經發送給對方了。',
	'EMAIL_TOPIC_EXPLAIN'	=> '這封電子郵件將以純文字的方式發送，請勿加入任何 HTML 或 BBCode 代碼。請注意！主題的內容已經包含在電子郵件內。這封郵件的回信信箱將設定為您的電子郵件信箱。',
	'EMPTY_ADDRESS_EMAIL'	=> '您必須提供一個有效的收件者電子信箱。',
	'EMPTY_MESSAGE_EMAIL'	=> '您必須填入電子郵件內容。',
	'EMPTY_MESSAGE_IM'		=> '您必須填入信件內容。',
	'EMPTY_NAME_EMAIL'		=> '您必須填入收件者的會員名稱。',
	'EMPTY_SENDER_EMAIL'	=> '您的電子信箱必須是有效的信箱位址。',
	'EMPTY_SENDER_NAME'		=> '您必須提供您的名稱。',
	'EMPTY_SUBJECT_EMAIL'	=> '您必須填入電子郵件主旨。',
	'EQUAL_TO'				=> '等於',

	'FIND_USERNAME_EXPLAIN'	=> '您可以使用下列表格來搜尋特定會員。您不需輸入表格內所有的欄位。搜尋時可以使用萬用字元 * 符號做出部分比對。如果想搜尋特定日期時，請使用這個格式：<kbd>西元年份-月-日</kbd>，例如 <samp>2007-10-15</samp>。當想要同時選擇一位或是多位會員時，您可以標記多選核取方塊進行複選的動作，然後點選「選擇已標記會員」回到之前的表格。',
	'FLOOD_EMAIL_LIMIT'		=> '很抱歉！您現在無法再次發送電子郵件，請稍後再試。',

	'GROUP_LEADER'			=> '群組組長',

	'HIDE_MEMBER_SEARCH'	=> '隱藏會員搜尋',

	'IM_ADD_CONTACT'		=> '新增為聯絡人',
	'IM_DOWNLOAD_APP'		=> '下載程式',
	'IM_JABBER'				=> '請注意！會員可能已選擇不接受未經請求的訊息。',
	'IM_JABBER_SUBJECT'		=> '這是一個自動發出的訊息，請勿回覆！訊息是由會員 %1$s 於 %2$s 發出。',
	'IM_MESSAGE'			=> '您的訊息',
	'IM_NAME'				=> '您的名字',
	'IM_NO_DATA'			=> '這位會員並沒有合適的聯絡方式。',
	'IM_NO_JABBER'			=> '很抱歉！這個討論區不支援對 Jabber 會員直接傳送訊息。您需要在您的系統安裝一個 Jabber 的客戶端程式來連絡以上的接收者。',
	'IM_RECIPIENT'			=> '聯絡人',
	'IM_SEND'				=> '傳送訊息',
	'IM_SEND_MESSAGE'		=> '傳送訊息',
	'IM_SENT_JABBER'		=> '您寫給 %1$s 的訊息已經傳送成功。',
	'IM_USER'				=> '傳送一個即時訊息',

	'LAST_ACTIVE'				=> '最後訪問',
	'LESS_THAN'					=> '少於',
	'LIST_USERS'				=> array(
		1	=> '%d 位會員',
		2	=> '%d 位會員',
	),
	'LOGIN_EXPLAIN_TEAM'		=> '您必須註冊並且登入後才能檢視管理團隊列表。',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> '您必須註冊並且登入後才能使用會員列表。',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> '您必須註冊並且登入後才能搜尋會員。',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> '您必須註冊並且登入後才能檢視個人資料。',

	'MORE_THAN'				=> '多於',

	'NO_CONTACT_FORM'		=> '聯絡管理員表單已經停用。',
	'NO_CONTACT_PAGE'		=> '聯絡管理員頁面已經停用。',
	'NO_EMAIL'				=> '您沒有發送 e-mail 給這個會員的權限。',
	'NO_VIEW_USERS'			=> '您沒有檢視會員列表或個人資料的權限。',

	'ORDER'					=> '順序',
	'OTHER'					=> '其他',

	'POST_IP'				=> 'IP/網域名稱',

	'REAL_NAME'				=> '收件者名稱',
	'RECIPIENT'				=> '收件者',
	'REMOVE_FOE'			=> '移除黑名單',
	'REMOVE_FRIEND'			=> '移除好友',

	'SELECT_MARKED'			=> '選擇已標記會員',
	'SELECT_SORT_METHOD'	=> '選擇排列方式 ',
	'SENDER_EMAIL_ADDRESS'	=> '您的電子信箱',
	'SENDER_NAME'			=> '您的名稱',
	'SEND_ICQ_MESSAGE'		=> '傳送 ICQ 訊息',
	'SEND_IM'				=> '即時訊息',
	'SEND_JABBER_MESSAGE'	=> '傳送 Jabber 訊息',
	'SEND_MESSAGE'			=> '傳送訊息',
	'SEND_YIM_MESSAGE'		=> '傳送 YIM 訊息',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> '最後訪問',
	'SORT_POST_COUNT'		=> '文章總數',

	'USERNAME_BEGINS_WITH'	=> '帳號開始字母為 ',
	'USER_ADMIN'			=> '管理會員',
	'USER_BAN'				=> '封鎖中',
	'USER_FORUM'			=> '會員統計',
	'USER_LAST_REMINDED'	=> array(
		0		=> '此時沒有發送提醒',
		1		=> '已發送 %1$d 個提醒<br />» %2$s',
		2		=> '已發送 %1$d 個提醒<br />» %2$s',
	),
	'USER_ONLINE'			=> '線上',
	'USER_PRESENCE'			=> '個人頭像',
	'USERS_PER_PAGE'		=> '每頁會員數',

	'VIEWING_PROFILE'		=> '檢視個人資料 - %s',
	'VIEW_FACEBOOK_PROFILE'	=> '檢視 Facebook 個人資料',
	'VIEW_SKYPE_PROFILE'	=> '檢視 Skype 個人資料',
	'VIEW_TWITTER_PROFILE'	=> '檢視 Twitter 個人資料',
	'VIEW_YOUTUBE_CHANNEL'	=> '檢視 YouTube 頻道',
	'VIEW_GOOGLEPLUS_PROFILE' => '檢視 Google+ 個人資料',
));
