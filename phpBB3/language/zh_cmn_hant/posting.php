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
	'ADD_ATTACHMENT'			=> '上傳附加檔案',
	'ADD_ATTACHMENT_EXPLAIN'	=> '如果您要上傳一個或者是多個附加檔案，請填寫下方表單。',
	'ADD_FILE'					=> '增加檔案',
	'ADD_POLL'					=> '建立票選活動',
	'ADD_POLL_EXPLAIN'			=> '如果您要在主題內進行票選活動，請填寫下方表單。',
	'ALREADY_DELETED'			=> '很抱歉！內容已經被刪除了。',
	'ATTACH_DISK_FULL'			=> '沒有足夠的硬碟空間可以發表這個附加檔案。',
	'ATTACH_QUOTA_REACHED'		=> '很抱歉！您的附加檔案配額已滿。',
	'ATTACH_SIG'				=> '附上簽名 (簽名檔可以在會員控制台中更改)',

	'BBCODE_A_HELP'				=> '將附加檔案加入文章內：[attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> '粗體：[b]text[/b]',
	'BBCODE_C_HELP'				=> '顯示程式代碼：[code]code[/code]',
	'BBCODE_D_HELP'				=> '插入 Flash：[flash=寬度,高度]http://url[/flash]',
	'BBCODE_F_HELP'				=> '文字大小：[size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>禁止</em>使用',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>允許</em>使用',
	'BBCODE_I_HELP'				=> '斜體：[i]text[/i]',
	'BBCODE_L_HELP'				=> '列表：[list][*]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> '列表條目：[*]text',
	'BBCODE_O_HELP'				=> '有序列表：例如[list=1][*]第一點[/list] 或 [list=a][*]a 點[/list]',
	'BBCODE_P_HELP'				=> '插入圖片：[img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '引用文字：[quote]text[/quote]',
	'BBCODE_S_HELP'				=> '文字顏色：[color=red]text[/color] 或 [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> '底線：[u]text[/u]',
	'BBCODE_W_HELP'				=> '插入連結：[url]http://url[/url] 或 [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> '列表：增加一個列表元件',
	'BUMP_ERROR'				=> '您不能在發表後馬上進行推文。',

	'CANNOT_DELETE_REPLIED'		=> '很抱歉！您只能刪除尚無回覆的文章。',
	'CANNOT_EDIT_POST_LOCKED'	=> '這篇文章已經被鎖定，您不能編輯它。',
	'CANNOT_EDIT_TIME'			=> '您不能編輯或刪除這篇文章。',
	'CANNOT_POST_ANNOUNCE'		=> '很抱歉！您不能發表公告主題。',
	'CANNOT_POST_STICKY'		=> '很抱歉！您不能發表置頂主題。',
	'CHANGE_TOPIC_TO'			=> '將主題類型轉換成',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> '您的內容包含 %1$d 個字元。',
		2	=> '您的內容包含 %1$d 個字元。',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> '您的簽名檔包含 %1$d 個字元。',
		2	=> '您的簽名檔包含 %1$d 個字元。',
	),
	'CLOSE_TAGS'				=> '關閉標籤',
	'CURRENT_TOPIC'				=> '目前主題',

	'DELETE_FILE'				=> '刪除檔案',
	'DELETE_MESSAGE'			=> '刪除文章',
	'DELETE_MESSAGE_CONFIRM'	=> '您確認要刪除這篇文章嗎？',
	'DELETE_OWN_POSTS'			=> '很抱歉！您只能刪除自己的文章。',
	'DELETE_PERMANENTLY'		=> '永久刪除',
	'DELETE_POST_CONFIRM'		=> '您確認要刪除這篇文章嗎？',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> '您確認要 <strong>永久地</strong> 刪除這篇文章嗎？',
	'DELETE_POST_PERMANENTLY'	=> '永久刪除的文章將無法被還原',
	'DELETE_POSTS_CONFIRM'		=> '您確認要刪除這些文章嗎？',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> '您確認要 <strong>永久地</strong> 刪除這些文章嗎？',
	'DELETE_REASON'				=> '刪除的理由',
	'DELETE_REASON_EXPLAIN'		=> '指定的刪除理由將會被版主檢視。',
	'DELETE_POST_WARN'			=> '刪除這篇文章',
	'DELETE_TOPIC_CONFIRM'		=> '您確認要刪除這個主題？',
	'DELETE_TOPIC_PERMANENTLY'	=> '永久刪除的主題將無法被還原',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> '您確認要 <strong>永久地</strong> 刪除這個主題嗎？',
	'DELETE_TOPICS_CONFIRM'		=> '您確認要刪除這些主題嗎？',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> '您確認要 <strong>永久地</strong> 刪除這些主題嗎？',
	'DISABLE_BBCODE'			=> '關閉 BBCode 代碼功能',
	'DISABLE_MAGIC_URL'			=> '關閉自動產生網址功能',
	'DISABLE_SMILIES'			=> '關閉表情符號功能',
	'DISALLOWED_CONTENT'		=> '上傳被拒絕，因為上傳的檔案被認定具有可能的攻擊成分。',
	'DISALLOWED_EXTENSION'		=> '副檔名 %s 是禁止使用的。',
	'DRAFT_LOADED'				=> '草稿已經匯入編輯區域，您現在可以繼續完成編寫文章內容。<br />您的草稿將在送出文章後刪除。',
	'DRAFT_LOADED_PM'			=> '草稿已經匯入編輯區域，您現在可以繼續完成編寫私人訊息。<br />您的草稿將在送出私人訊息後刪除。',
	'DRAFT_SAVED'				=> '草稿儲存成功',
	'DRAFT_TITLE'				=> '草稿標題',

	'EDIT_REASON'				=> '編輯此篇文章的理由',
	'EMPTY_FILEUPLOAD'			=> '上傳的檔案是空的。',
	'EMPTY_MESSAGE'				=> '發表文章時必須要有文章內容。',
	'EMPTY_REMOTE_DATA'			=> '檔案上傳失敗，請嘗試手動上傳這個檔案。',

	'FLASH_IS_OFF'				=> '[flash] <em>禁止</em>使用',
	'FLASH_IS_ON'				=> '[flash] <em>允許</em>使用',
	'FLOOD_ERROR'				=> '您不能在這麼短的時間內再次發表文章。',
	'FONT_COLOR'				=> '顯示文字色盤',
	'FONT_COLOR_HIDE'			=> '隱藏文字色盤',
	'FONT_HUGE'					=> '最大',
	'FONT_LARGE'				=> '大',
	'FONT_NORMAL'				=> '普通',
	'FONT_SIZE'					=> '字型大小',
	'FONT_SMALL'				=> '小',
	'FONT_TINY'					=> '最小',

	'GENERAL_UPLOAD_ERROR'		=> '無法上傳附加檔案到 %s。',

	'IMAGES_ARE_OFF'			=> '[img] <em>禁止</em>使用',
	'IMAGES_ARE_ON'				=> '[img] <em>允許</em>使用',
	'INVALID_FILENAME'			=> '%s 是無效的檔案名稱。',

	'LOAD'						=> '匯入',
	'LOAD_DRAFT'				=> '匯入草稿',
	'LOAD_DRAFT_EXPLAIN'		=> '在這裡，您可以選擇繼續編輯您的草稿。您現在編寫中的文章將被取消，所有編寫中的內容將會刪除。您可以在會員控制台內檢視，編輯和刪除草稿。',
	'LOGIN_EXPLAIN_BUMP'		=> '您必須登入後才能在這個版面進行推文。',
	'LOGIN_EXPLAIN_DELETE'		=> '您必須登入後才能在這個版面刪除文章。',
	'LOGIN_EXPLAIN_POST'		=> '您必須登入後才能在這個版面發表文章。',
	'LOGIN_EXPLAIN_QUOTE'		=> '您必須登入後才能在這個版面引用文章。',
	'LOGIN_EXPLAIN_REPLY'		=> '您必須登入後才能在這個版面回覆文章。',

	'MAX_FONT_SIZE_EXCEEDED'	=> '您可以使用的最大字體大小是 %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> '您的 Flash 檔案的高度不可以超過 %d 像素。',
		2	=> '您的 Flash 檔案的高度不可以超過 %d 像素。',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> '您的 Flash 檔案的寬度不可以超過 %d 像素。',
		2	=> '您的 Flash 檔案的寬度不可以超過 %d 像素。',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> '您的圖檔的高度不可以超過 %1$d 像素。',
		2	=> '您的圖檔的高度不可以超過 %1$d 像素。',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> '您的圖檔的寬度不可以超過 %1$d 像素。',
		2	=> '您的圖檔的寬度不可以超過 %1$d 像素。',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // 0 表示沒有限制，所以我們在這裡不顯示資訊。
		1	=> '請在這裡輸入文章內容，總字數不得超過 <strong>%d</strong> 個字元。',
		2	=> '請在這裡輸入文章內容，總字數不得超過 <strong>%d</strong> 個字元。',
	),
	'MESSAGE_DELETED'			=> '文章已經成功刪除。',
	'MORE_SMILIES'				=> '顯示更多表情符號',

	'NOTIFY_REPLY'				=> '當有人回覆文章時通知我',
	'NOT_UPLOADED'				=> '檔案上傳失敗。',
	'NO_DELETE_POLL_OPTIONS'	=> '您不能刪除現有的票選項目',
	'NO_PM_ICON'				=> '沒有私人訊息圖示',
	'NO_POLL_TITLE'				=> '您必須設定票選標題。',
	'NO_POST'					=> '指定的文章不存在。',
	'NO_POST_MODE'				=> '沒有指定文章類型。',

	'PARTIAL_UPLOAD'			=> '上傳的檔案僅部分上傳成功。',
	'PHP_SIZE_NA'				=> '上傳的附加檔案太大了。<br />無法取得 php.ini 中設定的最大允許上傳檔案大小。',
	'PHP_SIZE_OVERRUN'			=> '上傳的附加檔案太大了，php.ini 中設定的最大允許上傳檔案大小是 %1$d %2$s。<br />請注意這個數值是在 php.ini 內設定的，無法在此修改。',
	'PLACE_INLINE'				=> '將附加檔案加入文章內',
	'POLL_DELETE'				=> '刪除票選活動',
	'POLL_FOR'					=> '票選活動期限',
	'POLL_FOR_EXPLAIN'			=> '輸入 0 表示沒有期限的票選活動。',
	'POLL_MAX_OPTIONS'			=> '會員複選設定',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> '每個會員在投票時可以選擇的最大選項數目。',
	'POLL_OPTIONS'				=> '票選項目',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> '請分別在每行輸入一個選項，您可以設定 <strong>%d</strong> 個選項。',
		2	=> '請分別在每行輸入一個選項，您最多可以設定 <strong>%d</strong> 個選項。',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> '請分別在每行輸入一個選項。您可以設定 <strong>%d</strong> 個選項。如果您移除或增加選項，所有之前的投票都將被重新設定。',
		2	=> '請分別在每行輸入一個選項。您最多可以設定 <strong>%d</strong> 個選項。如果您移除或增加選項，所有之前的投票都將被重新設定。',
	),
	'POLL_QUESTION'				=> '票選問題',
	'POLL_TITLE_TOO_LONG'		=> '票選的標題不能大於 100 個字元。',
	'POLL_TITLE_COMP_TOO_LONG'	=> '票選標題過長，請刪除一些 BBCode 或表情符號。',
	'POLL_VOTE_CHANGE'			=> '允許重新投票',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '如果允許，會員將可以更改他們的選擇。',
	'POSTED_ATTACHMENTS'		=> '已上傳的附加檔案',
	'POST_APPROVAL_NOTIFY'		=> '當您的文章在核准成功後將會通知您。',
	'POST_CONFIRMATION'			=> '發表確認',
	'POST_CONFIRM_EXPLAIN'		=> '為防止惡意灌水，本討論區要求您輸入一組確認代碼。確認代碼顯示在下面的圖檔中，如果您無法正常瀏覽這個圖檔，請聯絡 %s管理員 %s 尋求協助。',
	'POST_DELETED'				=> '這篇文章已經刪除成功。',
	'POST_EDITED'				=> '這篇文章已經修改成功。',
	'POST_EDITED_MOD'			=> '這篇文章已經修改成功，但是在公開顯示前需要經過版主的核准。',
	'POST_GLOBAL'				=> '全域公告',
	'POST_ICON'					=> '文章圖示',
	'POST_NORMAL'				=> '普通主題',
	'POST_REVIEW'				=> '文章預覽',
	'POST_REVIEW_EDIT'			=> '文章預覽',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '這篇文章當您在編輯它時，已經被其他的會員改變。您不妨檢視目前文章的版本，而適度修改您的編輯。',
	'POST_REVIEW_EXPLAIN'		=> '這個主題目前擁有至少有一篇的新回覆，您或許希望重新檢閱您的回覆。',
	'POST_STORED'				=> '這篇文章已經發表成功。',
	'POST_STORED_MOD'			=> '這篇文章已經發表成功，但是在公開顯示前需要經過版主的核准。',
	'POST_TOPIC_AS'				=> '發表主題為',
	'PROGRESS_BAR'				=> '進度列',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> '您最多允許使用 %1$d 層引用。',
		2	=> '您最多允許使用 %1$d 層引用。',
	),
	'QUOTE_NO_NESTING'			=> '您無法在其他引用中再嵌入引用。',

	'REMOTE_UPLOAD_TIMEOUT'		=> '因為上傳時間超過時間限制以致您的檔案無法成功上傳。',
	'SAVE'						=> '儲存',
	'SAVE_DATE'					=> '儲存時間為',
	'SAVE_DRAFT'				=> '儲存草稿',
	'SAVE_DRAFT_CONFIRM'		=> '儲存的草稿僅包含文章標題和內文，任何其他設定都將被刪除。您希望現在儲存草稿嗎？',
	'SMILIES'					=> '表情符號',
	'SMILIES_ARE_OFF'			=> '表情符號 <em>禁止</em>使用',
	'SMILIES_ARE_ON'			=> '表情符號 <em>允許</em>使用',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> '置頂或公告期限設定',
	'STICK_TOPIC_FOR'			=> '主題置頂期限',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '輸入 0 表示沒有期限的置頂/公告。請注意！這個數字是相對於該文章的發文日期。',
	'STYLES_TIP'				=> '提示：可以將風格快速地顯示在反白的文字上。',

	'TOO_FEW_CHARS'				=> '您的內容包含太少個字元。',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> '您最少需要輸入 %d 個字元。',
		2	=> '您最少需要輸入 %d 個字元。',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '您至少需要輸入兩個票選的項目。',
	'TOO_MANY_ATTACHMENTS'		=> '不能再增加更多的附加檔案了，允許的數量是 %d 個。',
	'TOO_MANY_CHARS'			=> '您的內容包含太多個字元。',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> '允許的最大字元數為 %1$d。',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '您輸入太多票選項目。',
	'TOO_MANY_SMILIES'			=> '您的內容包含太多表情符號，允許的最大表情符號數量是 %d。',
	'TOO_MANY_URLS'				=> '您的內容包含太多連結，允許的最大連結數量是 %d。',
	'TOO_MANY_USER_OPTIONS'		=> '您不能提供每位會員比目前票選項目還要多的選項。',
	'TOPIC_BUMPED'				=> '主題推文成功。',

	'UNAUTHORISED_BBCODE'		=> '您不能使用這些 BBCodes：%s。',
	'UNGLOBALISE_EXPLAIN'		=> '要將這個主題從全域公告轉換為普通主題前，您需要選擇一個版面放置它。',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> '您的內容包含以下不支援的字元：<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '您的標題包含以下不支援的字元：<br />%s',
	'UPDATE_COMMENT'			=> '更新評論',
	'URL_INVALID'				=> '您指定的連結是無效的。',
	'URL_NOT_FOUND'				=> '指定的檔案無法找到。',
	'URL_IS_OFF'				=> '[url] <em>禁止</em>使用',
	'URL_IS_ON'					=> '[url] <em>允許</em>使用',
	'USER_CANNOT_BUMP'			=> '您不能在這個版面進行推文。',
	'USER_CANNOT_DELETE'		=> '您不能在這個版面刪除文章。',
	'USER_CANNOT_EDIT'			=> '您不能在這個版面編輯文章。',
	'USER_CANNOT_REPLY'			=> '您不能在這個版面回覆文章。',
	'USER_CANNOT_FORUM_POST'	=> '您不能在這個版面進行發表的動作，因為這個版面類型不支援。',

	'VIEW_MESSAGE'				=> '%s檢視您送出的內容%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s檢視您送出的私人訊息%s',

	'WRONG_FILESIZE'			=> '檔案太大了，最大允許的檔案大小為 %1$d %2$s.',
	'WRONG_SIZE'				=> '圖檔最小限制為寬 %1$s，高 %2$s。最大限制為寬 %3$s，高 %4$s。您送出的圖檔為：寬 %5$s，高 %6$s。',
));
