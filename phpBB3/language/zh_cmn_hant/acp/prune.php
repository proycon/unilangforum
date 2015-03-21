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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> '在這裡，您可以將您討論區的會員刪除或停用。帳號可以由多種的規則加以過濾；由文章數量、最近活動情形、...等。這些規則都可以自由組合，例如：您可以選擇刪除在 2002-01-01 之前文章數量少於 10 篇的會員。使用 * 當作萬用字元。另外，您可以直接將會員名稱輸入欄位 (每一個會員名稱輸入一行) 中，任何已設定的規則都將被忽略。請小心使用此功能！一旦會員被刪除後將無法再回復。',

	'CRITERIA'				=> '準則',

	'DEACTIVATE_DELETE'			=> '停用或刪除',
	'DEACTIVATE_DELETE_EXPLAIN'	=> '請選擇是要停用會員或是整個刪除之。請注意！已刪除的會員無法回復！',
	'DELETE_USERS'				=> '刪除',
	'DELETE_USER_POSTS'			=> '被刪除會員所發表的文章也刪除',
	'DELETE_USER_POSTS_EXPLAIN' => '移除被刪除會員發表的文章，如果會員被停用，那麼他的文章將不會被移除。',

	'JOINED_EXPLAIN'			=> '輸入日期，使用 <kbd>YYYY-MM-DD</kbd> 格式。您可以使用兩個欄位指定一個時間間隔，或者留一個空白以開放日期範圍。',

	'LAST_ACTIVE_EXPLAIN'		=> '輸入日期，使用 <kbd>YYYY-MM-DD</kbd> 格式。輸入 <kbd>0000-00-00</kbd> 將刪除從未登入的會員，<em>之前</em> 和 <em>之後</em> 的條件將被忽略。',

	'POSTS_ON_QUEUE'			=> '文章正在等待核准',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> '限制在所選擇的群組內之用戶。',
	'PRUNE_USERS_GROUP_NONE'	=> '所有的群組',
	'PRUNE_USERS_LIST'				=> '將被裁減的會員',
	'PRUNE_USERS_LIST_DELETE'		=> '使用所選擇的規則裁減會員，下面的會員帳號將被移除。您可以透過取消會員名稱旁邊的勾選，從刪除列表中移除個別的用戶。',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '使用所選擇的規則裁減會員，下面的會員帳號將被停用。您可以透過取消會員名稱旁邊的勾選，從停用列表中移除個別的用戶。',

	'SELECT_USERS_EXPLAIN'		=> '在這裡輸入指定的會員名稱，裁減他們將忽略上述的準則。論壇創始人無法被刪除。',

	'USER_DEACTIVATE_SUCCESS'	=> '被選擇的會員已經停用成功',
	'USER_DELETE_SUCCESS'		=> '被選擇的會員已經刪除成功',
	'USER_PRUNE_FAILURE'		=> '沒有會員適合所選擇的規則。',

	'WRONG_ACTIVE_JOINED_DATE'	=> '輸入的日期錯誤，正確的格式是 <kbd>YYYY-MM-DD</kbd>。',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> '這將刪除所有在規定的天數內沒有被回覆或被檢視的主題。如果您沒有輸入數字，那麼所有的主題都將被刪除。(預設下，不會刪除仍然在進行投票的主題，也不會刪除置頂和公告的主題。)',

	'FORUM_PRUNE'		=> '版面修剪',

	'NO_PRUNE'			=> '沒有版面被修剪。',

	'SELECTED_FORUM'	=> '已經選擇的版面',
	'SELECTED_FORUMS'	=> '已經選擇的版面',

	'POSTS_PRUNED'					=> '文章已被刪除',
	'PRUNE_ANNOUNCEMENTS'			=> '刪除公告',
	'PRUNE_FINISHED_POLLS'			=> '刪除已結束的投票',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '移除已經結束的票選主題。',
	'PRUNE_FORUM_CONFIRM'			=> '您確定要以特別的設定修剪已經選擇的版面嗎？一旦移除掉，這些文章和主題將被沒有辦法回復。',
	'PRUNE_NOT_POSTED'				=> '從最後發表的天數算起',
	'PRUNE_NOT_VIEWED'				=> '從最後檢視的天數算起',
	'PRUNE_OLD_POLLS'				=> '刪除舊的投票',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '移除在設定的天數內沒有新投票的票選主題。',
	'PRUNE_STICKY'					=> '刪除置頂',
	'PRUNE_SUCCESS'					=> '版面修剪成功。',

	'TOPICS_PRUNED'		=> '主題已刪除',
));
