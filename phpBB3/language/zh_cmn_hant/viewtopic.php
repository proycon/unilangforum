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
	'APPROVE'								=> '同意',
	'ATTACHMENT'						=> '附加檔案',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> '附加檔案功能已經被關閉。',

	'BOOKMARK_ADDED'		=> '成功加入我的最愛主題成功。',
	'BOOKMARK_ERR'			=> '加入我的最愛主題失敗。請再嘗試一次。',
	'BOOKMARK_REMOVED'		=> '移除我的最愛主題成功。',
	'BOOKMARK_TOPIC'		=> '加入我的最愛',
	'BOOKMARK_TOPIC_REMOVE'	=> '從我的最愛中移除',
	'BUMPED_BY'				=> '最後是由 %1$s 於 %2$s 推文。',
	'BUMP_TOPIC'			=> '推文',

	'CODE'					=> '代碼',

	'DELETE_TOPIC'			=> '刪除主題',
	'DELETED_INFORMATION'	=> '由 %1$s 於 %2$s 刪除',
	'DISAPPROVE'					=> '不同意',
	'DOWNLOAD_NOTICE'		=> '您沒有權限檢視這篇文章所附加的檔案。',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '最後由 %2$s 於 %3$s 編輯，總共編輯了 %1$d 次。',
		2	=> '最後由 %2$s 於 %3$s 編輯，總共編輯了 %1$d 次。',
	),
	'EMAIL_TOPIC'			=> '寄給朋友',
	'ERROR_NO_ATTACHMENT'	=> '所選擇的附加檔案已經不存在。',

	'FILE_NOT_FOUND_404'	=> '檔案 <strong>%s</strong> 並不存在。',
	'FORK_TOPIC'			=> '複製主題',
	'FULL_EDITOR'			=> '完全編輯 &amp; 預覽',

	'LINKAGE_FORBIDDEN'		=> '您無權檢視、下載或連結此網站內容。',
	'LOGIN_NOTIFY_TOPIC'	=> '您被通知這個主題有新文章，請登入檢視。',
	'LOGIN_VIEWTOPIC'		=> '您必須註冊為會員並且登入後，才能檢視這個主題。',

	'MAKE_ANNOUNCE'				=> '變更為「公告」',
	'MAKE_GLOBAL'				=> '變更為「全域公告」',
	'MAKE_NORMAL'				=> '變更為「普通主題」',
	'MAKE_STICKY'				=> '變更為「置頂」',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '您只能選擇 <strong>%d</strong> 個選項',
		2	=> '您最多可以選擇 <strong>%d</strong> 個選項',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '這個附加檔案 <strong>%s</strong> 已經無效',
	'MOVE_TOPIC'				=> '移動文章',

	'NO_ATTACHMENT_SELECTED'=> '您尚未選擇想要下載或觀看的附加檔案。',
	'NO_NEWER_TOPICS'		=> '這個版面沒有更新的主題了。',
	'NO_OLDER_TOPICS'		=> '這個版面沒有更舊的主題了。',
	'NO_UNREAD_POSTS'		=> '這個主題沒有新的未閱讀文章。',
	'NO_VOTE_OPTION'		=> '您必須先選擇任一選項後才能投票。',
	'NO_VOTES'				=> '沒有投票',

	'POLL_ENDED_AT'			=> '投票活動將於 %s 結束',
	'POLL_RUN_TILL'			=> '投票活動直到 %s 結束',
	'POLL_VOTED_OPTION'		=> '您投給這個選項',
	'POST_DELETED_RESTORE'	=> '這篇文章已被刪除。它可以被還原。',
	'PRINT_TOPIC'			=> '列印模式',

	'QUICK_MOD'				=> '快速執行',
	'QUICKREPLY'			=> '快速回覆',
	'QUOTE'					=> '引言回覆',

	'REPLY_TO_TOPIC'		=> '回覆主題',
	'RESTORE'				=> '還原',
	'RESTORE_TOPIC'			=> '還原文章',
	'RETURN_POST'			=> '%s返回原來文章%s',

	'SUBMIT_VOTE'			=> '投票送出',

	'TOPIC_TOOLS'			=> '主題工具',
	'TOTAL_VOTES'			=> '總投票數',

	'UNLOCK_TOPIC'			=> '解除鎖定',

	'VIEW_INFO'				=> '文章詳述',
	'VIEW_NEXT_TOPIC'		=> '下一個主題',
	'VIEW_PREVIOUS_TOPIC'	=> '上一個主題',
	'VIEW_RESULTS'			=> '檢視結果',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d 篇文章',
		2	=> '%d 篇文章',
	),
	'VIEW_UNREAD_POST'		=> '第一篇未閱讀文章',
	'VOTE_SUBMITTED'		=> '您的投票已經送出。',
	'VOTE_CONVERTED'		=> '為了轉變票選結果而改變投票選項是不被支持的。',

));
