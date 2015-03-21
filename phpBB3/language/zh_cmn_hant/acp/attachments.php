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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> '在這裡，您可以執行關於附加檔案以及相關特殊類別的主要設定。',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> '在這裡，您可以新增、刪除、修改、或停用副檔名群組。更進一步選項，包括設定特殊類別、變更下載機制、和定義展示在附加檔案前面的副檔名群組上傳圖示。',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> '在這裡，您可以管理您所允許的副檔名。要啟用某個副檔名，請到副檔名群組管理面板。我們強烈建議您，不要允許 Scripting 副檔名 (例如 <code>php</code>、<code>php3</code>、<code>php4</code>、<code>phtml</code>、<code>pl</code>、<code>cgi</code>、<code>py</code>、<code>rb</code>、<code>asp</code>、<code>aspx</code>、...等等)。',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> '在這裡，您可以看見存在附加檔案上傳資料夾中，但是沒有發表在文章中的檔案。這很可能因為會員新增了附加檔案，但是最後並沒送出文章。您可以刪除這些檔案，或者將其新增到存在的文章中。新增附加檔案到文章中需要一個有效的文章 ID，您必須自己決定這個 ID。這個功能可以將已經上傳的附加檔案分配到您所指定的文章中。',
	'ADD_EXTENSION'						=> '新增副檔名',
	'ADD_EXTENSION_GROUP'				=> '新增副檔名群組',
	'ADMIN_UPLOAD_ERROR'				=> '當試著上傳附加檔案「%s」時出錯。',
	'ALLOWED_FORUMS'					=> '允許的版面',
	'ALLOWED_FORUMS_EXPLAIN'			=> '能夠在所選擇的版面中，上傳允許的附加檔案。',
	'ALLOWED_IN_PM_POST'				=> '允許的',
	'ALLOW_ATTACHMENTS'					=> '允許上傳附加檔案',
	'ALLOW_ALL_FORUMS'					=> '所有的版面都允許',
	'ALLOW_IN_PM'						=> '在私人訊息中允許',
	'ALLOW_PM_ATTACHMENTS'				=> '在私人訊息中允許上傳附加檔案',
	'ALLOW_SELECTED_FORUMS'				=> '只允許以下所選擇的版面',
	'ASSIGNED_EXTENSIONS'				=> '指定的副檔名',
	'ASSIGNED_GROUP'					=> '指定的副檔名群組',
	'ATTACH_EXTENSIONS_URL'				=> '副檔名',
	'ATTACH_EXT_GROUPS_URL'				=> '副檔名群組',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> '檔案大小的最大值',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> '每個附加檔案其檔案大小的最大值。如果設定 0，那麼可以上傳的檔案大小，將只受限於您的 PHP 設定。',
	'ATTACH_MAX_PM_FILESIZE'			=> '在私人訊息中檔案大小的最大值',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> '可以使用在私人訊息中的附加檔案，其每個檔案之最大容量，設定 0 表示沒有限制。',
	'ATTACH_ORPHAN_URL'					=> '幽靈檔案',
	'ATTACH_POST_ID'					=> '文章 ID',
	'ATTACH_POST_TYPE'					=> '文章類型',
	'ATTACH_QUOTA'						=> '總計的附加檔案空間',
	'ATTACH_QUOTA_EXPLAIN'				=> '整個討論區可用的附加檔案之最大的磁碟空間，設定 0 表示沒有限制。',
	'ATTACH_TO_POST'					=> '新增附加檔案到文章',

	'CAT_FLASH_FILES'			=> 'Flash 檔案',
	'CAT_IMAGES'				=> '圖片檔',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime 媒體檔案',
	'CAT_RM_FILES'				=> 'RealMedia 媒體檔案',
	'CAT_WM_FILES'				=> 'Windows Media 媒體檔案',
	'CHECK_CONTENT'				=> '檢查附加檔案',
	'CHECK_CONTENT_EXPLAIN'		=> '某些瀏覽器對於錯誤的已上傳檔案之假裝型式會被騙。啟用這個選項可以確保拒絕上傳此類的檔案。',
	'CREATE_GROUP'				=> '建立新群組',
	'CREATE_THUMBNAIL'			=> '建立縮圖',
	'CREATE_THUMBNAIL_EXPLAIN'	=> '在所有可能的位置建立縮圖。',

	'DEFINE_ALLOWED_IPS'			=> '設定允許的 IP/主機',
	'DEFINE_DISALLOWED_IPS'			=> '設定拒絕的 IP/主機',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> '設定多個 IP/主機，請每一行輸入一個。設定 IP 位址範圍，請用連字號 <strong>-</strong> 分隔開始和結束，請用 <strong>*</strong> 做為萬用字元。',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> '您可以在瀏覽器中，使用合適的鍵盤和滑鼠組合，移除 (或取消排除) 多個 IP 位址，已經排除的 IP 有藍色的背景。',
	'DISPLAY_INLINED'				=> '文章中顯示圖檔',
	'DISPLAY_INLINED_EXPLAIN'		=> '如果設定為否，圖檔將顯示為一個連結。',
	'DISPLAY_ORDER'					=> '附加檔案顯示順序',
	'DISPLAY_ORDER_EXPLAIN'			=> '按時間顯示附加檔案順序。',

	'EDIT_EXTENSION_GROUP'			=> '編輯副檔名群組',
	'EXCLUDE_ENTERED_IP'			=> '使用這個選項以排除輸入的 IP/主機。',
	'EXCLUDE_FROM_ALLOWED_IP'		=> '從允許的 IP/主機中排除 IP',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> '從拒絕的 IP/主機中排除 IP',
	'EXTENSIONS_UPDATED'			=> '副檔名更新完成',
	'EXTENSION_EXIST'				=> '副檔名 %s 已經存在',
	'EXTENSION_GROUP'				=> '副檔名群組',
	'EXTENSION_GROUPS'				=> '副檔名群組',
	'EXTENSION_GROUP_DELETED'		=> '副檔名群組刪除完成。',
	'EXTENSION_GROUP_EXIST'			=> '副檔名群組 %s 已經存在',

	'EXT_GROUP_ARCHIVES'         => '壓縮檔',
	'EXT_GROUP_DOCUMENTS'         => '文件檔',
	'EXT_GROUP_DOWNLOADABLE_FILES'   => '可下載的檔案',
	'EXT_GROUP_FLASH_FILES'         => 'Flash 檔案',
	'EXT_GROUP_IMAGES'            => '圖片檔',
	'EXT_GROUP_PLAIN_TEXT'         => '純文字檔',
	'EXT_GROUP_QUICKTIME_MEDIA'      => 'Quicktime 多媒體檔',
	'EXT_GROUP_REAL_MEDIA'         => 'Real Media 多媒體檔',
	'EXT_GROUP_WINDOWS_MEDIA'      => 'Windows Media 多媒體檔',

	'FILES_GONE'			=> '您選擇要刪除的一些附加檔案並不存在。它們可能都已被刪除。確實存在附加檔案已被刪除。',
	'FILES_STATS_WRONG'		=> '您的檔統計數字可能不準確，需進行重新整理。實際值：附加檔案的數量 = %1$d，附加檔案的大小 = %2$s。<br />點選 %3$s這裡%4$s 進行重新整理。',

	'GO_TO_EXTENSIONS'		=> '前往副檔名管理界面',
	'GROUP_NAME'			=> '群組名稱',

	'IMAGE_LINK_SIZE'			=> '圖檔連結尺寸',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> '當圖檔大於這個設定值時，在文章中插入的圖檔會顯示為一個連結。要停用這個功能，請將值設為 0 x 0。',
	'IMAGICK_PATH'				=> 'Imagemagick 路徑',
	'IMAGICK_PATH_EXPLAIN'		=> 'Imagemagick 程式的完整路徑，例如 <samp>/usr/bin/</samp>。',

	'MAX_ATTACHMENTS'				=> '每篇文章的附加檔案之最大數量',
	'MAX_ATTACHMENTS_PM'			=> '每則私人訊息的附加檔案之最大數量',
	'MAX_EXTGROUP_FILESIZE'			=> '最大檔案大小',
	'MAX_IMAGE_SIZE'				=> '最大圖檔尺寸',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> '圖檔的最大尺寸。設為 0 x 0 將停用這個功能。',
	'MAX_THUMB_WIDTH'				=> '縮圖的最大寬度 (像素)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> '產生的縮圖將不會超過這裡設定的寬度。',
	'MIN_THUMB_FILESIZE'			=> '最小縮圖尺寸',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> '當圖檔尺寸小於這個設定值時不會建立縮圖。',
	'MODE_INLINE'					=> '直列',
	'MODE_PHYSICAL'					=> '物理',

	'NOT_ALLOWED_IN_PM'			=> '只允許在一般文章中使用附加檔案',
	'NOT_ALLOWED_IN_PM_POST'	=> '不允許',
	'NOT_ASSIGNED'				=> '未指定',	
	'NO_ATTACHMENTS'			=> '在這段期間並無附加檔案',
	'NO_EXT_GROUP'				=> '沒有',
	'NO_EXT_GROUP_NAME'			=> '沒有輸入群組名稱',
	'NO_EXT_GROUP_SPECIFIED'	=> '沒有指定副檔名群組。',
	'NO_FILE_CAT'				=> '沒有',
	'NO_IMAGE'					=> '沒有圖檔',
	'NO_THUMBNAIL_SUPPORT'		=> '縮圖功能無法使用。因為此功能需要安裝 GD 模組或 Imagemagick 軟體。而兩者都沒有被發現。',
	'NO_UPLOAD_DIR'				=> '您指定的上傳資料夾不存在。',
	'NO_WRITE_UPLOAD'			=> '您指定的上傳資料夾不可寫入。請變更資料夾權限允許網站伺服器可以寫入。',

	'ONLY_ALLOWED_IN_PM'	=> '只允許在私人訊息中使用附加檔案',
	'ORDER_ALLOW_DENY'		=> '允許',
	'ORDER_DENY_ALLOW'		=> '拒絕',

	'REMOVE_ALLOWED_IPS'		=> '移除或取消排除 <em>允許的</em> IP/主機',
	'REMOVE_DISALLOWED_IPS'		=> '移除或取消排除 <em>拒絕的</em> IP/主機',
	'RESYNC_FILES_STATS_CONFIRM'	=> '您確認要重新同步檔案統計嗎？',

	'SEARCH_IMAGICK'				=> '搜尋 Imagemagick',
	'SECURE_ALLOW_DENY'				=> '允許/拒絕 列表',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> '當安全下載功能啟用時，更改預設動作於一份 <strong>允許列表</strong> 或 <strong>拒絕列表</strong>。',
	'SECURE_DOWNLOADS'				=> '啟用安全下載功能',
	'SECURE_DOWNLOADS_EXPLAIN'		=> '當啟用此功能後，下載將僅限於您所指定的 IP/主機。',
	'SECURE_DOWNLOAD_NOTICE'		=> '安全下載沒有啟用。下面的設定將在啟用安全下載功能後適用。',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP 列表更新完成。',
	'SECURE_EMPTY_REFERRER'			=> '允許空的回傳',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> '安全下載乃基於回傳。您希望允許省略回傳的下載嗎？',
	'SETTINGS_CAT_IMAGES'			=> '圖檔類別設定',
	'SPECIAL_CATEGORY'				=> '特殊類別',
	'SPECIAL_CATEGORY_EXPLAIN'		=> '特殊類別不同於在文章中顯示的方式。',
	'SUCCESSFULLY_UPLOADED'			=> '上傳成功',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> '副檔名群組新增完成',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> '副檔名群組更新完成',

	'UPLOADING_FILES'				=> '上傳檔案中',
	'UPLOADING_FILE_TO'				=> '上傳「%1$s」檔案到文章 ID %2$d...',
	'UPLOAD_DENIED_FORUM'			=> '您沒有上傳檔案到「%s」版面的權限',
	'UPLOAD_DIR'					=> '上傳資料夾',
	'UPLOAD_DIR_EXPLAIN'			=> '附加檔案的儲存路徑。請注意！假如您更改了已經上傳檔案的目錄，那麼您必須將檔案複製到新的位置。',
	'UPLOAD_ICON'					=> '上傳圖示',
	'UPLOAD_NOT_DIR'				=> '您指定的上傳位置不是一個資料夾。',
));
