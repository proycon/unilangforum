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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> '在這裡，您可以管理所有的會員群組。您可以刪除、建立和編輯存在的會員群組。再者，您可以選擇群組組長、設定會員群組狀態為開放/隱藏/關閉、以及設定會員群組名稱與描述。',
	'ADD_GROUP_CATEGORY'			=> '增加類別',
	'ADD_USERS'						=> '增加會員',
	'ADD_USERS_EXPLAIN'				=> '在這裡，您可以增加新會員到會員群組。您可以選擇是否使用這個會員群組作為新會員的預設會員群組。此外，您可以指定會員群組組長。請在每一行輸入一個會員名稱。',

	'COPY_PERMISSIONS'				=> '複製權限自',
	'COPY_PERMISSIONS_EXPLAIN'		=> '一旦建立，此群組將擁有與您所選擇者相同的權限。',
	'CREATE_GROUP'					=> '建立新的群組',

	'GROUPS_NO_MEMBERS'				=> '這個群組沒有組員',
	'GROUPS_NO_MODS'				=> '沒有指定群組組長',

	'GROUP_APPROVE'					=> '核准組員',
	'GROUP_APPROVED'				=> '已核准的組員',
	'GROUP_AVATAR'					=> '群組頭像',
	'GROUP_AVATAR_EXPLAIN'			=> '這個圖片將顯示在群組控制台。',
	'GROUP_CATEGORY_NAME'			=> '類別名稱',
	'GROUP_CLOSED'					=> '關閉',
	'GROUP_COLOR'					=> '群組顏色',
	'GROUP_COLOR_EXPLAIN'			=> '指定群組組員其會員名稱顯示的顏色，如果使用會員預設請留空白。',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> '您確定要增加會員 %2$s 為群組組員嗎？',
		2	=> '您確定要增加會員 %2$s 為群組組員嗎？',
	),
	'GROUP_CREATED'					=> '會員群組已經建立成功。',
	'GROUP_DEFAULT'					=> '設定為會員的預設群組',
	'GROUP_DEFS_UPDATED'			=> '設定為所有選中會員的預設群組。',
	'GROUP_DELETE'					=> '從群組中刪除組員',
	'GROUP_DELETED'					=> '群組已經刪除以及會員的預設群組設定成功。',
	'GROUP_DEMOTE'					=> '群組組長降級',
	'GROUP_DESC'					=> '會員群組描述',
	'GROUP_DETAILS'					=> '會員群組細節',
	'GROUP_EDIT_EXPLAIN'			=> '在這裡，您可以編輯存在的會員群組。您可以更改群組名稱、描述和類型 (開放、關閉等)。您也可以設定一些會員群組的選項，例如顏色、等級等。所有的更改將凌駕會員目前的設定。請注意！群組組員可以更改群組頭像，除非您設定了適當的權限。',
	'GROUP_ERR_USERS_EXIST'			=> '指定的會員已經是這個會員群組的組員',
	'GROUP_FOUNDER_MANAGE'			=> '只能由創始人管理',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '限制會員群組管理為創始人才有。有群組權限的會員仍可看見此群組以及組員。',
	'GROUP_HIDDEN'					=> '隱藏',
	'GROUP_LANG'					=> '會員群組語言',
	'GROUP_LEAD'					=> '會員群組組長',
	'GROUP_LEADERS_ADDED'			=> '增加新群組組長成功。',
	'GROUP_LEGEND'					=> '在首頁「顏色說明」中顯示',
	'GROUP_LIST'					=> '目前的組員',
	'GROUP_LIST_EXPLAIN'			=> '會員群組目前所有的組員完整列表。您可以刪除組員 (除了一些特殊會員群組) 或增加您認為合適的新組員。',
	'GROUP_MEMBERS'					=> '會員群組組員',
	'GROUP_MEMBERS_EXPLAIN'			=> '會員群組所有的組員完整列表。包含了群組組長、等待核准的組員和存在的組員。在這裡，您可以管理這個群組中的組員角色。如果需要移除群組組長身份但是保留在組中，請使用群組組長降級而不是刪除。同樣的可以選擇一個存在的組員升級為群組組長。',
	'GROUP_MESSAGE_LIMIT'			=> '會員群組私人訊息數量限制',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> '這個設定會覆蓋會員的私人訊息數量限制。如果設成 0 將使用會員的預設設定。',
	'GROUP_MODS_ADDED'				=> '增加新群組組長成功。',
	'GROUP_MODS_DEMOTED'			=> '群組組長降級成功。',
	'GROUP_MODS_PROMOTED'			=> '群組組員升級成功。',
	'GROUP_NAME'					=> '會員群組名稱',
	'GROUP_NAME_TAKEN'				=> '您輸入的會員群組名稱已經被使用，請使用其他的群組名稱。',
	'GROUP_OPEN'					=> '開放',
	'GROUP_PENDING'					=> '待核准的組員',
	'GROUP_MAX_RECIPIENTS'			=> '每則私人訊息允許收件人的最大數量',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> '在每則私人訊息中，允許收件人的最大數量。如果輸入 0，那麼將以論壇的預設值為標準。',
	'GROUP_OPTIONS_SAVE'			=> '群組普遍的選項',
	'GROUP_PROMOTE'					=> '升級為群組組長',
	'GROUP_RANK'					=> '會員群組等級',
	'GROUP_RECEIVE_PM'				=> '會員群組可以接收私人訊息',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> '請注意！隱藏的會員群組不可以接收私人訊息，這裡的設定沒有用。',
	'GROUP_REQUEST'					=> '申請',
	'GROUP_SETTINGS_SAVE'			=> '會員群組範圍',
	'GROUP_SKIP_AUTH'				=> '免除群組組長的權限',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> '如果啟用，那麼群組組長不再繼承群組權限。',
	'GROUP_SPECIAL'					=> '預先定義',
	'GROUP_TEAMPAGE'				=> '在團隊頁面顯示群組',
	'GROUP_TYPE'					=> '會員群組類型',
	'GROUP_TYPE_EXPLAIN'			=> '這個設定決定了哪些會員可以加入或檢視這個會員群組。',
	'GROUP_UPDATED'					=> '會員群組參數更新成功。',

	'GROUP_USERS_ADDED'				=> '增加新群組組員成功。',
	'GROUP_USERS_EXIST'				=> '選中的會員已經是組員了。',
	'GROUP_USERS_REMOVE'			=> '會員已經移除以及新的預設會員群組設定成功。',

	'LEGEND_EXPLAIN'				=> '這些是顯示在首頁「顏色說明」中的群組：',
	'LEGEND_SETTINGS'				=> '在首頁「顏色說明」中的設定',
	'LEGEND_SORT_GROUPNAME'			=> '在首頁「顏色說明」中的群組按名稱排序',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> '當啟用此選項，下面的命令將被忽略。',

	'MANAGE_LEGEND'			=> '管理在首頁「顏色說明」中的群組',
	'MANAGE_TEAMPAGE'		=> '管理團隊頁面',
	'MAKE_DEFAULT_FOR_ALL'	=> '為每一個組員設定為預設的會員群組',
	'MEMBERS'				=> '組員',

	'NO_GROUP'					=> '沒有指定的會員群組。',
	'NO_GROUPS_ADDED'			=> '還沒有新增會員群組。',
	'NO_GROUPS_CREATED'			=> '還沒有已建立的會員群組。',
	'NO_PERMISSIONS'			=> '不要複製權限',
	'NO_USERS'					=> '您沒有輸入任何會員。',
	'NO_USERS_ADDED'			=> '沒有會員被加入此群組。',
	'NO_VALID_USERS'			=> '您沒有輸入任何符合那個動作的會員。',

	'SELECT_GROUP'				=> '選擇一個會員群組',
	'SPECIAL_GROUPS'			=> '預設的會員群組',
	'SPECIAL_GROUPS_EXPLAIN'	=> '預設的會員群組是特殊會員群組，它們不能刪除或直接修改。但是您可以增加會員和更改基本設定。',

	'TEAMPAGE'					=> '團隊頁面',
	'TEAMPAGE_DISP_ALL'			=> '所有會員',
	'TEAMPAGE_DISP_DEFAULT'		=> '只有使用者預設的會員群組',
	'TEAMPAGE_DISP_FIRST'		=> '只有第一個會員',
	'TEAMPAGE_EXPLAIN'			=> '這些是顯示在團隊頁面的會員群組：',
	'TEAMPAGE_FORUMS'			=> '顯示管理員版面',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> '如果設定為是，版主將有顯示其擁有版主權限的版面列表。對大型論壇而言，這是非常需要的資料庫。',
	'TEAMPAGE_MEMBERSHIPS'		=> '顯示使用者的會員身份',
	'TEAMPAGE_SETTINGS'			=> '團隊頁面設定',
	'TOTAL_MEMBERS'				=> '組員',

	'USERS_APPROVED'				=> '會員已經核准。',
	'USER_DEFAULT'					=> '會員預設',
	'USER_DEF_GROUPS'				=> '會員指定的會員群組',
	'USER_DEF_GROUPS_EXPLAIN'		=> '這些會員群組由您或者其他管理員建立。您可以管理組員和編輯其屬性或者刪除它。',
	'USER_GROUP_DEFAULT'			=> '設定為預設的會員群組',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '若選擇是，則此群組將設定為新增會員的預設群組。',
	'USER_GROUP_LEADER'				=> '設定為群組組長',
));
