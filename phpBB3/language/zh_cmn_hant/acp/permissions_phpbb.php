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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> '動作',
	'ACL_CAT_CONTENT'		=> '內容',
	'ACL_CAT_FORUMS'		=> '版面',
	'ACL_CAT_MISC'			=> '雜項',
	'ACL_CAT_PERMISSIONS'	=> '權限',
	'ACL_CAT_PM'			=> '私人訊息',
	'ACL_CAT_POLLS'			=> '投票',
	'ACL_CAT_POST'			=> '文章',
	'ACL_CAT_POST_ACTIONS'	=> '發表文章動作',
	'ACL_CAT_POSTING'		=> '發表',
	'ACL_CAT_PROFILE'		=> '個人資料',
	'ACL_CAT_SETTINGS'		=> '設定',
	'ACL_CAT_TOPIC_ACTIONS'	=> '發表主題動作',
	'ACL_CAT_USER_GROUP'	=> '會員 &amp; 群組',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> '可以檢視個人資料、會員列表、以及誰在線上列表',
	'ACL_U_CHGNAME'		=> '可以更改會員名稱',
	'ACL_U_CHGPASSWD'	=> '可以更改密碼',
	'ACL_U_CHGEMAIL'	=> '可以更改 e-mail 位址',
	'ACL_U_CHGAVATAR'	=> '可以更改頭像',
	'ACL_U_CHGGRP'		=> '可以更改預設會員群組',
	'ACL_U_CHGPROFILEINFO'	=> '可以更改個人資料欄位資訊',

	'ACL_U_ATTACH'		=> '可以發表附加檔案',
	'ACL_U_DOWNLOAD'	=> '可以下載附加檔案',
	'ACL_U_SAVEDRAFTS'	=> '可以保存文章草稿',
	'ACL_U_CHGCENSORS'	=> '可以停用語詞過濾',
	'ACL_U_SIG'			=> '可以使用簽名檔',

	'ACL_U_SENDPM'		=> '可以發送私人訊息',
	'ACL_U_MASSPM'		=> '可以發送私人訊息給多位會員',
	'ACL_U_MASSPM_GROUP'=> '可以發送私人訊息給群組',
	'ACL_U_READPM'		=> '可以閱讀私人訊息',
	'ACL_U_PM_EDIT'		=> '可以編輯自己的私人訊息',
	'ACL_U_PM_DELETE'	=> '可以移除自己的私人訊息',
	'ACL_U_PM_FORWARD'	=> '可以轉寄私人訊息',
	'ACL_U_PM_EMAILPM'	=> '可以 e-mail 私人訊息',
	'ACL_U_PM_PRINTPM'	=> '可以列印私人訊息',
	'ACL_U_PM_ATTACH'	=> '可以在私人訊息中發表附加檔案',
	'ACL_U_PM_DOWNLOAD'	=> '可以在私人訊息中下載附加檔案',
	'ACL_U_PM_BBCODE'	=> '可以在私人訊息中使用 BBCode',
	'ACL_U_PM_SMILIES'	=> '可以在私人訊息中使用表情符號',
	'ACL_U_PM_IMG'		=> '可以在私人訊息中使用 [img] BBCode 標籤',
	'ACL_U_PM_FLASH'	=> '可以在私人訊息中使用 [flash] BBCode 標籤',

	'ACL_U_SENDEMAIL'	=> '可以發送 e-mail',
	'ACL_U_SENDIM'		=> '可以發送即時訊息',
	'ACL_U_IGNOREFLOOD'	=> '可以不受灌水間隔限制',
	'ACL_U_HIDEONLINE'	=> '可以隱藏上線狀態',
	'ACL_U_VIEWONLINE'	=> '可以檢視隱藏上線會員',
	'ACL_U_SEARCH'		=> '可以搜尋討論區',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> '可以看見版面',
	'ACL_F_READ'		=> '可以閱讀版面',
	'ACL_F_SEARCH'		=> '可以搜尋版面',
	'ACL_F_SUBSCRIBE'	=> '可以訂閱版面',
	'ACL_F_PRINT'		=> '可以列印主題',
	'ACL_F_EMAIL'		=> '可以 e-mail 主題',
	'ACL_F_BUMP'		=> '可以推文',
	'ACL_F_USER_LOCK'	=> '可以鎖定自己的主題',
	'ACL_F_DOWNLOAD'	=> '可以下載附加檔案',
	'ACL_F_REPORT'		=> '可以檢舉文章',

	'ACL_F_POST'		=> '可以發表新的主題',
	'ACL_F_STICKY'		=> '可以發表置頂文章',
	'ACL_F_ANNOUNCE'	=> '可以發表公告文章',
	'ACL_F_REPLY'		=> '可以回覆主題',
	'ACL_F_EDIT'		=> '可以編輯自己的文章',
	'ACL_F_DELETE'		=> '可以刪除自己的文章',
	'ACL_F_SOFTDELETE'	=> '可以軟刪除自己的文章<br /><em>擁有同意文章的權限之版主，可以還原軟刪除的文章。</em>',
	'ACL_F_IGNOREFLOOD' => '可以不受灌水間隔限制',
	'ACL_F_POSTCOUNT'	=> '增加文章數量<br /><em>請注意！這個設定只對新文章有效。</em>',
	'ACL_F_NOAPPROVE'	=> '可以不經審核發表文章',

	'ACL_F_ATTACH'		=> '可以發表附加檔案',
	'ACL_F_ICONS'		=> '可以使用主題/文章圖示',
	'ACL_F_BBCODE'		=> '可以在文章中使用 BBCode',
	'ACL_F_FLASH'		=> '可以在文章中使用 [flash] BBCode 標籤',
	'ACL_F_IMG'			=> '可以在文章中使用 [img] BBCode 標籤',
	'ACL_F_SIGS'		=> '可以使用簽名檔',
	'ACL_F_SMILIES'		=> '可以在文章中使用表情符號',

	'ACL_F_POLL'		=> '可以建立投票',
	'ACL_F_VOTE'		=> '可以參與投票',
	'ACL_F_VOTECHG'		=> '可以更改已經存在的投票',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> '可以編輯文章',
	'ACL_M_DELETE'		=> '可以刪除文章',
	'ACL_M_SOFTDELETE'	=> '可以軟刪除自己的文章<br /><em>擁有同意文章的權限之版主，可以還原軟刪除的文章。</em>',
	'ACL_M_APPROVE'		=> '可以審核和還原文章',
	'ACL_M_REPORT'		=> '可以關閉和刪除檢舉',
	'ACL_M_CHGPOSTER'	=> '可以更改文章作者',

	'ACL_M_MOVE'	=> '可以移動主題',
	'ACL_M_LOCK'	=> '可以鎖定主題',
	'ACL_M_SPLIT'	=> '可以分割主題',
	'ACL_M_MERGE'	=> '可以合併主題',

	'ACL_M_INFO'	=> '可以檢視文章細節',
	'ACL_M_WARN'	=> '可以發出警告<br /><em>這個設定只影響全域版主。它不是版面要素。</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> '可以管理封鎖<br /><em>這個設定只影響全域版主。它不是版面要素。</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> '可以修改討論區設定/檢查更新',
	'ACL_A_SERVER'		=> '可以修改伺服器/通訊設定',
	'ACL_A_JABBER'		=> '可以修改 Jabber 設定',
	'ACL_A_PHPINFO'		=> '可以檢視 php 設定',

	'ACL_A_FORUM'		=> '可以管理版面',
	'ACL_A_FORUMADD'	=> '可以增加版面',
	'ACL_A_FORUMDEL'	=> '可以刪除版面',
	'ACL_A_PRUNE'		=> '可以修剪版面',

	'ACL_A_ICONS'		=> '可以修改主題/文章圖示和表情符號',
	'ACL_A_WORDS'		=> '可以修改過濾語詞',
	'ACL_A_BBCODE'		=> '可以設定 BBCode 標籤',
	'ACL_A_ATTACH'		=> '可以修改附加檔案的相關設定',

	'ACL_A_USER'		=> '可以管理會員<em>這也包含可以在「誰在線上」列表看見會員。</em>',
	'ACL_A_USERDEL'		=> '可以刪除/修剪會員',
	'ACL_A_GROUP'		=> '可以管理群組',
	'ACL_A_GROUPADD'	=> '可以增加群組',
	'ACL_A_GROUPDEL'	=> '可以刪除群組',
	'ACL_A_RANKS'		=> '可以管理等級',
	'ACL_A_PROFILE'		=> '可以管理自訂的個人資料',
	'ACL_A_NAMES'		=> '可以管理禁用的會員名稱',
	'ACL_A_BAN'			=> '可以管理封鎖',

	'ACL_A_VIEWAUTH'	=> '可以檢視權限遮罩',
	'ACL_A_AUTHGROUPS'	=> '可以修改個別群組權限',
	'ACL_A_AUTHUSERS'	=> '可以修改個別的會員權限',
	'ACL_A_FAUTH'		=> '可以修改版面權限階級',
	'ACL_A_MAUTH'		=> '可以修改版主權限階級',
	'ACL_A_AAUTH'		=> '可以修改管理員權限階級',
	'ACL_A_UAUTH'		=> '可以修改會員權限階級',
	'ACL_A_ROLES'		=> '可以管理角色',
	'ACL_A_SWITCHPERM'	=> '可以使用其他權限',

	'ACL_A_STYLES'		=> '可以管理風格',
	'ACL_A_EXTENSIONS'	=> '可以管理擴展',
	'ACL_A_VIEWLOGS'	=> '可以檢視記錄',
	'ACL_A_CLEARLOGS'	=> '可以清空記錄',
	'ACL_A_MODULES'		=> '可以管理模組',
	'ACL_A_LANGUAGE'	=> '可以管理語言包',
	'ACL_A_EMAIL'		=> '可以發送大量 e-mail',
	'ACL_A_BOTS'		=> '可以管理機器人',
	'ACL_A_REASONS'		=> '可以管理檢舉/否決理由',
	'ACL_A_BACKUP'		=> '可以備份/還原資料庫',
	'ACL_A_SEARCH'		=> '可以管理搜尋後端和設定',
));
