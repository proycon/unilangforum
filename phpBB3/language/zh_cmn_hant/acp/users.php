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
	'ADMIN_SIG_PREVIEW'		=> '簽名檔預覽',
	'AT_LEAST_ONE_FOUNDER'	=> '您不能將改變創始人為普通會員。這個討論區至少需要一位創始人。如果您要改變這個創始會員的地位，那麼請先提升另一位會員為創始人。',

	'BAN_ALREADY_ENTERED'	=> '封鎖在先前就已經輸入成功，封鎖列表沒有更新。',
	'BAN_SUCCESSFUL'		=> '封鎖輸入成功。',

	'CANNOT_BAN_ANONYMOUS'         => '您不被允許去封鎖匿名帳號。匿名使用者的權限可以在「權限」標籤底下設定。',
	'CANNOT_BAN_FOUNDER'			=> '您不被允許封鎖創始人帳號。',
	'CANNOT_BAN_YOURSELF'			=> '您不被允許封鎖自己的帳號。',
	'CANNOT_DEACTIVATE_BOT'			=> '您不被允許停用機器人建立的帳號。請改以管理機器人頁面停用機器人。',
	'CANNOT_DEACTIVATE_FOUNDER'		=> '您不被允許停用創始人帳號。',
	'CANNOT_DEACTIVATE_YOURSELF'	=> '您不被允許停用自己的帳號。',
	'CANNOT_FORCE_REACT_BOT'		=> '您不被允許強迫再啟用機器人建立的帳號。請改以管理機器人頁面再啟用機器人。',
	'CANNOT_FORCE_REACT_FOUNDER'	=> '您不被允許強迫再啟用創始人帳號。',
	'CANNOT_FORCE_REACT_YOURSELF'	=> '您不被允許強迫再啟用自己的帳號。',
	'CANNOT_REMOVE_ANONYMOUS'		=> '您不能移除訪客的會員帳號。',
	'CANNOT_REMOVE_FOUNDER'			=> '您不被允許移除創始人帳號。',
	'CANNOT_REMOVE_YOURSELF'		=> '您不被允許移除自己的帳號。',
	'CANNOT_SET_FOUNDER_IGNORED'	=> '您不能提升被忽略的會員為創始人。',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> '在提升會員為創始人之前您需要先啟用他們的帳號，只有已啟用的會員才能被提升。',
	'CONFIRM_EMAIL_EXPLAIN'			=> '您只有在改變會員的 e-mail 位址時才需要指定這個。',

	'DELETE_POSTS'	=> '刪除文章',
	'DELETE_USER'	=> '刪除會員',
	'DELETE_USER_EXPLAIN'	=> '請注意！ 刪除會員是最後的手段，他們不能恢復。該會員發送的未讀之私人信息將被刪除，並不會提供給收件者。',

	'FORCE_REACTIVATION_SUCCESS'	=> '強迫再啟用成功。',
	'FOUNDER'						=> '創始人',
	'FOUNDER_EXPLAIN'				=> '創始人擁有管理員的所有權限，並且永遠不會被非創始人封鎖，刪除和更改。',

	'GROUP_APPROVE'					=> '核准組員',
	'GROUP_DEFAULT'					=> '設定為會員預設群組',
	'GROUP_DELETE'					=> '刪除群組會員',
	'GROUP_DEMOTE'					=> '將群組組長降級',
	'GROUP_PROMOTE'					=> '提升為群組組長',

	'IP_WHOIS_FOR'	=> '%s 的 IP',

	'LAST_ACTIVE'	=> '最後訪問',

	'MOVE_POSTS_EXPLAIN'	=> '請選擇您想要移動這個會員發表的所有文章的版面。',

	'NO_SPECIAL_RANK'		=> '沒有指派特殊等級',
	'NO_WARNINGS'			=> '沒有警告。',
	'NOT_MANAGE_FOUNDER'	=> '您在嘗試管理具有創始人地位的會員。只有創始人被允許管理其他創始人。',

	'QUICK_TOOLS'			=> '快速工具',

	'REGISTERED'			=> '註冊日期',
	'REGISTERED_IP'			=> '註冊自 IP',
	'RETAIN_POSTS'			=> '保留文章',

	'SELECT_FORM'	=> '選擇表單',
	'SELECT_USER'	=> '選擇會員',

	'USER_ADMIN'	=> '會員控制台 (UCP)',
	'USER_ADMIN_ACTIVATE'	=> '啟用帳號',
	'USER_ADMIN_ACTIVATED'	=> '會員帳號啟用成功。',
	'USER_ADMIN_AVATAR_REMOVED'	=> '移除會員頭像成功。',
	'USER_ADMIN_BAN_EMAIL'	=> '以 e-mail 封鎖',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> '經由會員管理封鎖 e-mail 位址',
	'USER_ADMIN_BAN_IP'	=> '以 IP 封鎖',
	'USER_ADMIN_BAN_IP_REASON'	=> '經由會員管理封鎖 IP',
	'USER_ADMIN_BAN_NAME_REASON'	=> '經由會員管理封鎖會員名稱',
	'USER_ADMIN_BAN_USER'	=> '以會員名稱封鎖',
	'USER_ADMIN_DEACTIVATE'	=> '停用帳號',
	'USER_ADMIN_DEACTIVED'	=> '停用帳號成功。',
	'USER_ADMIN_DEL_ATTACH'	=> '刪除所有附加檔案',
	'USER_ADMIN_DEL_AVATAR'	=> '刪除頭像',
	'USER_ADMIN_DEL_OUTBOX'			=> '清空 PM 寄件夾',
	'USER_ADMIN_DEL_POSTS'	=> '刪除所有文章',
	'USER_ADMIN_DEL_SIG'	=> '刪除簽名檔',
	'USER_ADMIN_EXPLAIN'	=> '在這裡，您可以改變會員資訊以及某個特別的選項。要修改會員權限請使用會員以及群組的權限系統。',
	'USER_ADMIN_FORCE'	=> '強迫再啟用',
	'USER_ADMIN_LEAVE_NR'			=> '從新註冊會員移除',
	'USER_ADMIN_MOVE_POSTS'	=> '移動所有文章',
	'USER_ADMIN_SIG_REMOVED'	=> '刪除會員簽名檔成功。',
	'USER_ATTACHMENTS_REMOVED'	=> '移除這個會員發表的所有附加檔案成功。',
	'USER_AVATAR_NOT_ALLOWED'		=> '頭像無法顯示，因為頭像不被允許。',
	'USER_AVATAR_UPDATED'	=> '更新會員頭像細節成功。',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> '目前的頭像無法顯示，因為它的類型不被允許。',
	'USER_CUSTOM_PROFILE_FIELDS'	=> '自訂個人資料欄位',
	'USER_DELETED'	=> '會員刪除成功。',
	'USER_GROUP_ADD'	=> '增加會員到群組',
	'USER_GROUP_NORMAL'				=> '普通群組的會員',
	'USER_GROUP_PENDING'			=> '群組會員為等待審核模式',
	'USER_GROUP_SPECIAL'			=> '特殊群組的會員',
	'USER_LIFTED_NR'				=> '已成功移除會員的新註冊會員身份。',
	'USER_NO_ATTACHMENTS'			=> '沒有可顯示的附加檔案。',
	'USER_NO_POSTS_TO_DELETE'			=> '沒有文章要保留或刪除。',
	'USER_OUTBOX_EMPTIED'			=> '已成功清空會員的 PM 寄件夾。',
	'USER_OUTBOX_EMPTY'				=> '會員的 PM 寄件夾已經清空。',
	'USER_OVERVIEW_UPDATED'			=> '會員細節更新成功。',
	'USER_POSTS_DELETED'			=> '這個會員發表的所有文章移除成功。',
	'USER_POSTS_MOVED'				=> '移動會員的文章到目標版面成功。',
	'USER_PREFS_UPDATED'	=> '會員偏好設定已更新。',
	'USER_PROFILE'	=> '會員個人資料',
	'USER_PROFILE_UPDATED'	=> '會員資料已更新。',
	'USER_RANK'	=> '會員等級',
	'USER_RANK_UPDATED'	=> '會員等級已更新。',
	'USER_SIG_UPDATED'	=> '會員簽名檔更新成功。',
	'USER_WARNING_LOG_DELETED'		=> '沒有可用的資訊。很可能是記錄已經被刪除。',
	'USER_TOOLS'	=> '基本工具',
));
