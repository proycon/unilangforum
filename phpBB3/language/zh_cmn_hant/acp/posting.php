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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode 是一種特殊的 HTML 簡易使用方式，它可以提供有效的控制各種頁面效果的顯示。在這裡，您可以增加/移除/編輯自行定義 BBCode。',
	'ADD_BBCODE'				=> '增加 BBCode',

	'BBCODE_DANGER'				=> '您嘗試新增的 BBCode 似乎是使用 {TEXT} 標記在 HTML 語法。這很有可能發生 XSS 安全問題。試試使用更多限制的 {SIMPLETEXT} 或 {INTTEXT} 型式取代。如果您瞭解潛在的風險，以及認為使用 {TEXT} 絕對無法避免的話，那麼繼續執行它。',
	'BBCODE_DANGER_PROCEED'		=> '繼續執行', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode 增加成功。',
	'BBCODE_EDITED'				=> 'BBCode 編輯成功。',
	'BBCODE_DELETED'			=> 'BBCode 刪除成功。',
	'BBCODE_NOT_EXIST'			=> '您所選擇的 BBCode 不存在。',
	'BBCODE_HELPLINE'			=> '線上說明',
	'BBCODE_HELPLINE_EXPLAIN'	=> '這個欄位的內容會在滑鼠移過 BBCode 文字時顯示。',
	'BBCODE_HELPLINE_TEXT'		=> '提示內容',
	'BBCODE_HELPLINE_TOO_LONG'	=> '您輸入的提示內容太長。',

	'BBCODE_INVALID_TAG_NAME'	=> '您所選擇的 BBCode 標籤名稱已經存在。',
	'BBCODE_INVALID'			=> '您的 BBCode 結構是無效的形式。',
	'BBCODE_OPEN_ENDED_TAG'		=> '您自行定義的 BBCode 必須包含開始和結束標籤。',
	'BBCODE_TAG'				=> '標籤',
	'BBCODE_TAG_TOO_LONG'		=> '您選擇的標籤名稱太長了。',
	'BBCODE_TAG_DEF_TOO_LONG'	=> '您輸入的標籤定義太長了，請盡量簡短。',
	'BBCODE_USAGE'				=> 'BBCode 使用方法',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> '在這裡，您可以定義 BBCode 的用法。使用相關的標誌符號替換相關的變數輸入 (%s如下所示%s)。',

	'EXAMPLE'						=> '例如：',
	'EXAMPLES'						=> '例如：',

	'HTML_REPLACEMENT'				=> 'HTML 替換代碼',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{TEXT1};"&gt;{TEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> '在這裡，您可以定義預設的 HTML 替換代碼。不要忘記放回您上面所使用的標誌符號！',

	'TOKEN'					=> '標誌符號',
	'TOKENS'				=> '標誌符號',
	'TOKENS_EXPLAIN'		=> '標誌符號是會員所輸入的佔位符號。只有當輸入者符合相關定義時才會生效。如果需要的話，您可以在最後一個字元後增加數字加以編號區隔，例如：{TEXT1}、{TEXT2}。<br /><br />在 HTML 替換代碼中，您可以使用目前在 /language/ 資料夾裡的任何字元串，例如：{L_<em>&lt;STRINGNAME&gt;</em>} 這裡的 <em>&lt;STRINGNAME&gt;</em> 就是您希望增加的翻譯後的字元串的名稱。例如，{L_WROTE} 將被顯示為「wrote」或者是會員的當地語言。<br /><br /><strong>請注意！自行定義 BBCodes 只有下面列表的標誌符號可以使用。</strong>',
	'TOKEN_DEFINITION'		=> '它能是什麼？',
	'TOO_MANY_BBCODES'		=> '您不能建立更多的 BBCodes。請先移除一個或更多個 BBCode 後再試試。',

	'tokens'	=>	array(
		'TEXT'			=> '任何文字，包括外國文字、數字、...等。您不該在 HTML 標籤中使用這個標誌符號，試試使用 IDENTIFIER、INTTEXT 或 SIMPLETEXT。',
		'SIMPLETEXT'	=> '包含拉丁文字母表 (A-Z)、數字、空格、逗點、小數點、減號、加號、連字號以及底線等字元。',
		'INTTEXT'		=> '萬國碼字母字元、數字、空格、逗點、小數點、減號、加號、連字號以及底線等字元。',
		'IDENTIFIER'	=> '包含拉丁文字母表 (A-Z)、數字、連字號以及底線等字元。',
		'NUMBER'		=> '任何數字序列',
		'EMAIL'			=> '有效的 e-mail 位址',
		'URL'			=> '使用任何通訊協議的有效的 URL (如 http、ftp、...等，但不能使用 javascript 功能)。如果沒有提供，將將自動以「http://」當作字符串的開頭。',
		'LOCAL_URL'		=> '本地的 URL。URL 必須和主題頁相關，並且不能包含伺服器名稱或通訊協議，以「%s」做為連結的前綴。',
		'RELATIVE_URL'	=> '相對的 URL。您可以用它來匹配為 URL 的一部分，但要小心：一個完整的 URL 是一個有效而相對的 URL。當您的論壇想使用相對的 URL，得使用本地的 URL 之標誌符號。',
		'COLOR'			=> 'HTML 顏色，可以是 3 組十六進位數格式，例如：<samp>#FF1234</samp>，或者是 <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS 顏色關鍵字</a>，例如：<samp>fuchsia</samp> 或 <samp>InactiveBorder</samp>。',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> '在這裡，您可以增加/刪除/編輯會員可以在主題和文章中使用的圖示。這些圖示一般顯示在版面的主題列旁或主題列的文章標題旁，您也可以安裝與建立新的圖示包。',
	'ACP_SMILIES_EXPLAIN'	=> '表情符號一般是較小的，有時可以是動畫的小圖檔，用於表達會員心情或感覺。在這裡，您可以增加/刪除/編輯表情符號。您也可以安裝與建立新的表情符號包。',
	'ADD_SMILIES'			=> '增加多樣的表情符號',
	'ADD_SMILEY_CODE'		=> '增加更多的表情代碼',
	'ADD_ICONS'				=> '增加多樣的圖示',
	'AFTER_ICONS'			=> '在 %s 之後',
	'AFTER_SMILIES'			=> '在 %s 之後',

	'CODE'						=> '代碼',
	'CURRENT_ICONS'				=> '目前的圖示',
	'CURRENT_ICONS_EXPLAIN'		=> '選擇如何處理目前安裝的圖示',
	'CURRENT_SMILIES'			=> '目前的表情符號',
	'CURRENT_SMILIES_EXPLAIN'	=> '選擇如何處理目前安裝的表情符號',

	'DISPLAY_ON_POSTING'		=> '顯示在發文時的頁面',
	'DISPLAY_POSTING'			=> '在發文時的頁面',
	'DISPLAY_POSTING_NO'		=> '不在發文時的頁面',

	'EDIT_ICONS'				=> '編輯圖示',
	'EDIT_SMILIES'				=> '編輯表情符號',
	'EMOTION'					=> '表情',
	'EXPORT_ICONS'				=> '匯出以及下載 icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%s點選這個連結，您安裝的圖示設定，將被打包輸出為 <samp>icons.pak</samp>；一旦要下載，可用於建立一個 <samp>.zip</samp> 或 <samp>.tgz</samp> 檔案，這個檔案包含所有您的圖示加上這個 <samp>icons.pak</samp> 設定檔案%s。',
	'EXPORT_SMILIES'			=> '匯出以及下載 smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%s點選這個連結，您安裝的表情符號設定，將被打包輸出為 <samp>smilies.pak</samp>；一旦要下載，可用於建立一個 <samp>.zip</samp> 或 <samp>.tgz</samp> 檔案，這個檔案包含所有您的表情符號加上這個 <samp>smilies.pak</samp> 設定檔案%s。',

	'FIRST'			=> '第一個',

	'ICONS_ADD'				=> '增加新圖示',
	'ICONS_ADDED'			=> array(
		0	=> '沒有圖示被增加。',
		1	=> '圖示增加成功。',
		2	=> '圖示增加成功。',
	),
	'ICONS_CONFIG'			=> '圖示設定',
	'ICONS_DELETED'			=> '圖示刪除成功。',
	'ICONS_EDIT'			=> '編輯圖示',
	'ICONS_EDITED'			=> array(
		0	=> '沒有圖示被更新。',
		1	=> '圖示更新成功。',
		2	=> '圖示更新成功。',
	),
	'ICONS_HEIGHT'			=> '圖示高度',
	'ICONS_IMAGE'			=> '圖示圖案',
	'ICONS_IMPORTED'		=> '圖示包安裝成功。',
	'ICONS_IMPORT_SUCCESS'	=> '圖示包匯入成功。',
	'ICONS_LOCATION'		=> '圖示位置',
	'ICONS_NOT_DISPLAYED'	=> '下面的圖示將不顯示在發文的頁面',
	'ICONS_ORDER'			=> '圖示順序',
	'ICONS_URL'				=> '圖示圖案',
	'ICONS_WIDTH'			=> '圖示寬度',
	'IMPORT_ICONS'			=> '安裝圖示包',
	'IMPORT_SMILIES'		=> '安裝表情符號包',

	'KEEP_ALL'			=> '全部保留',

	'MASS_ADD_SMILIES'	=> '增加多樣的表情符號',

	'NO_ICONS_ADD'		=> '沒有有用的圖示可增加。',
	'NO_ICONS_EDIT'		=> '沒有有用的圖示可修改。',
	'NO_ICONS_EXPORT'	=> '您沒有圖示可建立圖示包。',
	'NO_ICONS_PAK'		=> '沒有找到圖示包。',
	'NO_SMILIES_ADD'	=> '沒有有用的表情符號可增加。',
	'NO_SMILIES_EDIT'	=> '沒有有用的表情符號可修改。',
	'NO_SMILIES_EXPORT'	=> '您沒有表情符號可建立表情符號包。',
	'NO_SMILIES_PAK'	=> '沒有找到表情符號包。',

	'PAK_FILE_NOT_READABLE'		=> '無法讀取 <samp>.pak</samp> 檔案。',

	'REPLACE_MATCHES'	=> '取代符合者',

	'SELECT_PACKAGE'			=> '選擇一個表情符號包檔案',
	'SMILIES_ADD'				=> '增加一個新的表情符號',
	'SMILIES_ADDED'				=> array(
		0	=> '沒有表情符號被增加。',
		1	=> '表情符號增加成功。',
		2	=> '表情符號增加成功。',
	),
	'SMILIES_CODE'				=> '表情符號代碼',
	'SMILIES_CONFIG'			=> '表情符號設定',
	'SMILIES_DELETED'			=> '表情符號移除成功。',
	'SMILIES_EDIT'				=> '編輯表情符號',
	'SMILIE_NO_CODE'			=> '表情符號「%s」被忽略，因為沒有輸入代碼。',
	'SMILIE_NO_EMOTION'			=> '表情符號「%s」被忽略，因為沒有輸入表情。',
	'SMILIE_NO_FILE'			=> '表情符號「%s」被忽略，因為缺少這個檔案。',
	'SMILIES_EDITED'			=> array(
		0	=> '沒有表情符號被更新。',
		1	=> '表情符號更新成功。',
		2	=> '表情符號更新成功。',
	),
	'SMILIES_EMOTION'			=> '表情',
	'SMILIES_HEIGHT'			=> '表情符號高度',
	'SMILIES_IMAGE'				=> '表情符號圖檔',
	'SMILIES_IMPORTED'			=> '表情符號包安裝成功。',
	'SMILIES_IMPORT_SUCCESS'	=> '表情符號包匯入成功。',
	'SMILIES_LOCATION'			=> '表情符號位置',
	'SMILIES_NOT_DISPLAYED'		=> '下面的表情符號將不顯示在發文的頁面',
	'SMILIES_ORDER'				=> '表情符號順序',
	'SMILIES_URL'				=> '表情符號圖案',
	'SMILIES_WIDTH'				=> '表情符號寬度',

	'TOO_MANY_SMILIES'			=> array(
		1	=> '已達到 %d 個表情符號的限制。',
		2	=> '已達到 %d 個表情符號的限制。',
	),

	'WRONG_PAK_TYPE'	=> '指定的檔案包中沒有包含合適的資料。',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> '在這裡，您可以增加、編輯、移除在討論區將會自動過濾的字詞。人們仍舊可以使用這些已包含的字詞去註冊會員名稱。可以使用萬用字元 (*)，例如 *test* 將過濾 detestable、test* 將過濾 testing、*test 將過濾 detest。',
	'ADD_WORD'				=> '增加新的過濾字詞',

	'EDIT_WORD'		=> '編輯過濾字詞',
	'ENTER_WORD'	=> '您必須輸入過濾字詞和其替代字詞。',

	'NO_WORD'	=> '沒有選擇要編輯的過濾字詞。',

	'REPLACEMENT'	=> '替代字詞',

	'UPDATE_WORD'	=> '更新過濾字詞',

	'WORD'				=> '過濾字詞',
	'WORD_ADDED'		=> '過濾字詞增加成功。',
	'WORD_REMOVED'		=> '所選擇的過濾字詞移除成功。',
	'WORD_UPDATED'		=> '所選擇的過濾字詞更新成功。',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> '在這裡，您可以增加、編輯、檢視和刪除等級。您也可以建立特殊等級，以便在會員管理中使用。',
	'ADD_RANK'				=> '增加新的等級',

	'MUST_SELECT_RANK'		=> '您必須選擇一個等級。',

	'NO_ASSIGNED_RANK'		=> '沒有指定特殊等級。',
	'NO_RANK_TITLE'			=> '您沒有給這個等級指定頭銜。',
	'NO_UPDATE_RANKS'		=> '等級刪除成功。不過使用這個等級的會員帳號並沒有更新。您需要手工重設這些帳號的等級。',

	'RANK_ADDED'			=> '等級增加成功。',
	'RANK_IMAGE'			=> '等級圖示',
	'RANK_IMAGE_EXPLAIN'	=> '使用它闡釋代表等級的小圖檔。路徑為 phpBB 根目錄的相對路徑。',
	'RANK_IMAGE_IN_USE'		=> '(使用中)',
	'RANK_MINIMUM'			=> '最少文章數量',
	'RANK_REMOVED'			=> '等級刪除成功。',
	'RANK_SPECIAL'			=> '設定為特殊等級',
	'RANK_TITLE'			=> '等級頭銜',
	'RANK_UPDATED'			=> '等級更新成功。',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> '在這裡，您可以管理禁止使用的會員名稱。其中包含可以使用萬用字元 *。',
	'ADD_DISALLOW_EXPLAIN'	=> '您可以使用萬用字元 * 來禁用某個會員名稱。',
	'ADD_DISALLOW_TITLE'	=> '增加禁用的會員名稱',

	'DELETE_DISALLOW_EXPLAIN'	=> '您可以透過點選列表中的會員名稱，再點選送出，來移除一個禁用的會員名稱',
	'DELETE_DISALLOW_TITLE'		=> '移除一個禁用的會員名稱',
	'DISALLOWED_ALREADY'		=> '您輸入的會員名稱已經被禁用。',
	'DISALLOWED_DELETED'		=> '禁用的會員名稱移除成功。',
	'DISALLOW_SUCCESSFUL'		=> '禁用的會員名稱增加成功。',

	'NO_DISALLOWED'				=> '沒有禁用的會員名稱',
	'NO_USERNAME_SPECIFIED'		=> '您沒有選擇或輸入想要操作的會員名稱。',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> '在這裡，您可以管理用於檢舉和拒絕文章的理由。預設的理由 (標示 *) 您不能移除，這個理由通常使用於要自行定義訊息而沒有合適的理由時。',
	'ADD_NEW_REASON'		=> '增加新的理由',
	'AVAILABLE_TITLES'		=> '有用的本地語言化理由標題',

	'IS_NOT_TRANSLATED'			=> '理由 <strong>沒有</strong> 本地語言化。',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> '理由 <strong>沒有</strong> 被翻譯成本地的語言。如果您想要提供本地語言化的表單，那麼需要為語言檔案的檢舉理由部分設定正確的的關鍵字。',
	'IS_TRANSLATED'				=> '理由已經本地語言化。',
	'IS_TRANSLATED_EXPLAIN'		=> '理由已經本地語言化。如果你您輸入的標題在語言檔案的檢舉理由部分已經設定過，本地語言化的標題和描述將被使用。',

	'NO_REASON'					=> '無法找到理由。',
	'NO_REASON_INFO'			=> '您必須為這個理由設定標題和描述。',
	'NO_REMOVE_DEFAULT_REASON'	=> '您不能移除預設的理由-其他。',

	'REASON_ADD'				=> '增加檢舉/拒絕理由',
	'REASON_ADDED'				=> '檢舉/拒絕理由增加成功。',
	'REASON_ALREADY_EXIST'		=> '使用這個標題的理由已經存在，請輸入另一個標題。',
	'REASON_DESCRIPTION'		=> '理由描述',
	'REASON_DESC_TRANSLATED'	=> '顯示理由描述',
	'REASON_EDIT'				=> '編輯檢舉/拒絕理由',
	'REASON_EDIT_EXPLAIN'		=> '在這裡，您可以增加或編輯理由。如果理由有本地語言化的版本，那麼將自動顯示為當地語言。',
	'REASON_REMOVED'			=> '檢舉/拒絕移除成功。',
	'REASON_TITLE'				=> '理由標題',
	'REASON_TITLE_TRANSLATED'	=> '顯示的理由標題',
	'REASON_UPDATED'			=> '檢舉/拒絕理由更新成功。',

	'USED_IN_REPORTS'		=> '在檢舉中使用',
));
