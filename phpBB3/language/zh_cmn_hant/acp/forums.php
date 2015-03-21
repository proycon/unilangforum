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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> '自動刪除未回覆文章的時間',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> '自從最後一篇文章發表後多少天，這個主題會被刪除。',
	'AUTO_PRUNE_FREQ'			=> '自動刪除頻率',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> '執行刪除動作的間隔天數。',
	'AUTO_PRUNE_VIEWED'			=> '自動刪除已檢視文章的時間',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> '自從主題被檢視後多少天，這個主題會被刪除。',
	'AUTO_PRUNE_SHADOW_FREQ'	=> '自動刪除影子主題的頻率',
	'AUTO_PRUNE_SHADOW_DAYS'	=> '自動刪除影子主題的時間',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> '在多少天之後，影子主題會被刪除。',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> '執行刪除動作的間隔天數。',

	'CONTINUE'						=> '繼續',
	'COPY_PERMISSIONS'				=> '複製權限自',
	'COPY_PERMISSIONS_EXPLAIN'		=> '為了便於安排您的新版面權限，您可以複製一個已存在的版面權限。',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> '一旦建立，這個版面將擁有您所選擇版面的同樣權限。如果沒有版面被選中，那麼新建版面在完成權限設定之前將是看不見的。',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> '如果您選擇了複製權限，版面將擁有您所選擇版面的同樣權限。這將覆蓋任何您之前設定的權限。如果沒有版面被選中，那麼將保留目前的權限。',
	'COPY_TO_ACL'					=> '另外，您也可以為此版面 %s設定新的權限%s。',
	'CREATE_FORUM'					=> '建立新版面',

	'DECIDE_MOVE_DELETE_CONTENT'		=> '刪除內容或移動到版面',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> '刪除子版面或移動到版面',
	'DEFAULT_STYLE'						=> '預設風格',
	'DELETE_ALL_POSTS'					=> '刪除文章',
	'DELETE_SUBFORUMS'					=> '刪除子版面和文章',
	'DISPLAY_ACTIVE_TOPICS'				=> '顯示最近討論的主題',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> '如果設定為是，那麼在已選擇的子版面中，最近討論的主題將會顯示在這個分區下。',

	'EDIT_FORUM'					=> '編輯版面',
	'ENABLE_INDEXING'				=> '能夠使用搜尋索引',
	'ENABLE_INDEXING_EXPLAIN'		=> '如果設定為是，這個版面的文章將被寫入搜尋索引。',
	'ENABLE_POST_REVIEW'			=> '能夠使用預覽文章',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> '如果設定為是，當會員在編寫新的文章時，可以預覽他們的文章。這功能在聊天版面中應該停用。',
	'ENABLE_QUICK_REPLY'			=> '啟用快速回覆',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> '在這個版面啟用快速回覆。如果整個論壇禁用快速回覆，那麼這個設定是無效的。只有在這個版面有發文權限的使用者，才可以使用快速回覆。',
	'ENABLE_RECENT'					=> '顯示最近討論的主題',
	'ENABLE_RECENT_EXPLAIN'			=> '如果設定為是，那麼這個版面的主題，將顯示在最近討論的主題列表中。',
	'ENABLE_TOPIC_ICONS'			=> '能夠使用主題圖示',

	'FORUM_ADMIN'						=> '版面管理',
	'FORUM_ADMIN_EXPLAIN'				=> '在 phpBB3 中的所有事物都是以版面為基礎。一個分區只是一個版面的特殊類型。每個版面可以擁有無限數量的子版面，並且您可以設定哪些能否發文。(例如：是否像是舊的分區)。在這裡，您能增加、編輯、刪除、鎖定、解鎖各個版面，並設定一些額外的控制。如果您版面的文章和主題統計失真，您可以重新統計一下。<strong>您需要為新建的版面複製或設定適當的權限才得以顯示。</strong>',
	'FORUM_AUTO_PRUNE'					=> '能夠使用自動刪除',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> '刪除版面的主題，在下面設定頻率/時間參數。',
	'FORUM_CREATED'						=> '版面建立成功。',
	'FORUM_DATA_NEGATIVE'				=> '刪除參數不能為負數。',
	'FORUM_DESC_TOO_LONG'				=> '版面描述太長，它必須少於 4000 個字元。',
	'FORUM_DELETE'						=> '刪除版面',
	'FORUM_DELETE_EXPLAIN'				=> '下面的表單允許您刪除一個版面。如果這個版面可以發表文章，您可以決定如何處置這個版面中所有的主題 (或子版面)。',
	'FORUM_DELETED'						=> '版面刪除成功。',
	'FORUM_DESC'						=> '描述',
	'FORUM_DESC_EXPLAIN'				=> '任何輸入的 HTML 標籤都會以原貌顯示。',
	'FORUM_EDIT_EXPLAIN'				=> '下面的表單允許您自行定義這個版面。請注意！版面管理和文章數控制要透過每個會員或群組會員的權限來控制。',
	'FORUM_IMAGE'						=> '版面圖示',
	'FORUM_IMAGE_EXPLAIN'				=> '版面關聯的圖示位置，使用 phpBB 根目錄的相對路徑。',
	'FORUM_IMAGE_NO_EXIST'				=> '所指定的版面圖示不存在。',
	'FORUM_LINK_EXPLAIN'				=> '完整的 URL (包含通訊協議，例如：<samp>http://</samp>)。會員點選這個版面後前往的目的位置，例如：<samp>http://www.phpbb.com/</samp>。',
	'FORUM_LINK_TRACK'					=> '追蹤連結指向',
	'FORUM_LINK_TRACK_EXPLAIN'			=> '記錄版面連結被點選的次數。',
	'FORUM_NAME'						=> '版面名稱',
	'FORUM_NAME_EMPTY'					=> '您必須為這個版面輸入一個名字。',
	'FORUM_PARENT'						=> '父 (上一層) 版面',
	'FORUM_PASSWORD'					=> '版面密碼',
	'FORUM_PASSWORD_CONFIRM'			=> '確認版面密碼',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> '如果您輸入了版面密碼，才需要再輸入一次確認。',
	'FORUM_PASSWORD_EXPLAIN'			=> '使用權限系統指定訪問這個版面的密碼。',
	'FORUM_PASSWORD_UNSET'				=> '移除版面密碼',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> '如果您要移除版面密碼，那麼請勾選這裡。',
	'FORUM_PASSWORD_OLD'				=> '這個版面密碼目前是使用舊的加密方式，應該進行變更。',
	'FORUM_PASSWORD_MISMATCH'			=> '您輸入的密碼不對。',
	'FORUM_PRUNE_SETTINGS'				=> '版面刪除設定',
	'FORUM_PRUNE_SHADOW'				=> '啟用自動刪除影子主題',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> '設定以下頻率或時間的參數，以刪除論壇上的影子主題。',
	'FORUM_RESYNCED'					=> '版面「%s」已經完成同步化',
	'FORUM_RULES_EXPLAIN'				=> '版面規則將顯示在這個版面的每個頁面。',
	'FORUM_RULES_LINK'					=> '連結版面規則',
	'FORUM_RULES_LINK_EXPLAIN'			=> '您可以在這裡輸入包含版面規則的頁面/文章連結。這個設定將覆蓋您所輸入的版面規則文字。',
	'FORUM_RULES_PREVIEW'				=> '版面規則預覽',
	'FORUM_RULES_TOO_LONG'				=> '版面規則必須少於 4000 個字元。',
	'FORUM_SETTINGS'					=> '版面設定',
	'FORUM_STATUS'						=> '版面狀態',
	'FORUM_STYLE'						=> '版面風格',
	'FORUM_TOPICS_PAGE'					=> '每頁主題數',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> '如果設定值不是 0，那麼這個數值將覆蓋預設的每頁主題數。',
	'FORUM_TYPE'						=> '版面類型',
	'FORUM_UPDATED'						=> '版面資訊已經更新成功。',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> '您要改變一個有子版面連結的版面。在執行前請移出該版面所有的子版面，因為改變之後您將再也看不到目前連結的子版面。',

	'GENERAL_FORUM_SETTINGS'	=> '一般版面設定',

	'LINK'					=> '連結',
	'LIST_INDEX'			=> '在父版面中顯示子版面列表',
	'LIST_INDEX_EXPLAIN'		=> '在首頁顯示此版面，以及如果父版面「顯示子版面列表」的選項啟用的話，那麼它會在其他的父版面被當作是一個連結。',
	'LIST_SUBFORUMS'			=> '顯示子版面列表',
	'LIST_SUBFORUMS_EXPLAIN'	=> '在首頁顯示此版面的子版面，以及如果它們的「在父版面中顯示子版面列表」的選項啟用的話，那麼它會在其他的地方被當作是一個連結。',
	'LOCKED'				=> '鎖定',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> '您選中移動的目標版面不可發表文章。請選擇其他的版面。',
	'MOVE_POSTS_TO'		=> '移動文章到',
	'MOVE_SUBFORUMS_TO'	=> '移動子版面到',

	'NO_DESTINATION_FORUM'			=> '您沒有指定移動的目的版面',
	'NO_FORUM_ACTION'				=> '沒有在目的版面中定義動作',
	'NO_PARENT'						=> '沒有父版面',
	'NO_PERMISSIONS'				=> '不複製權限',
	'NO_PERMISSION_FORUM_ADD'		=> '您沒有增加版面的權限。',
	'NO_PERMISSION_FORUM_DELETE'	=> '您沒有刪除版面的權限。',

	'PARENT_IS_LINK_FORUM'		=> '您指定的父版面是一個「連結」。連結的版面不能持有其他的版面，請指定其他分區或版面作為父版面。',
	'PARENT_NOT_EXIST'			=> '父版面不存在。',
	'PRUNE_ANNOUNCEMENTS'		=> '刪除公告',
	'PRUNE_STICKY'				=> '刪除置頂',
	'PRUNE_OLD_POLLS'			=> '刪除舊的投票',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> '移除沒有新投票的票選主題。',

	'REDIRECT_ACL'	=> '現在，您可以為這個版面 %s設定權限%s。',

	'SYNC_IN_PROGRESS'			=> '正在同步化版面',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> '正在同步化主題範圍 %1$d/%2$d。',

	'TYPE_CAT'			=> '分區',
	'TYPE_FORUM'		=> '版面',
	'TYPE_LINK'			=> '連結',

	'UNLOCKED'			=> '未鎖定',
));
