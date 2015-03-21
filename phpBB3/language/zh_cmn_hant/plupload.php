<?php
/**
*
* This file is part of the phpBB Forum Software package.
* @正體中文化 竹貓星球 <http://phpbb-tw.net/phpbb/>
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> '增加檔案',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> '增加檔案到等待上傳區並點選開始按鈕。',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s 已經在等待上傳區中。',
	'PLUPLOAD_CLOSE'			=> '關閉',
	'PLUPLOAD_DRAG'				=> '拖曳檔案到這裡。',
	'PLUPLOAD_DUPLICATE_ERROR'	=> '複製檔案錯誤。',
	'PLUPLOAD_DRAG_TEXTAREA'	=> '你也可以拖曳檔案至文字輸入框中來加入附件檔案。',
	'PLUPLOAD_ERR_INPUT'		=> '無法讀取上傳的檔案。',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> '移動上傳的檔案失敗。',
	'PLUPLOAD_ERR_OUTPUT'		=> '無法開啟寫入暫存檔。',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> '檔案大小太大：',
	'PLUPLOAD_ERR_FILE_COUNT'	=> '檔案數量錯誤。',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> '不支援的檔案附檔名：',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> '執行時超過了記憶體限制。',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> '檔案網址可能錯誤，或是不存在。',
	'PLUPLOAD_EXTENSION_ERROR'	=> '檔案副檔名錯誤。',
	'PLUPLOAD_FILE'				=> '檔案：%s',
	'PLUPLOAD_FILE_DETAILS'		=> '檔案：%s，檔案大小：%d，最大檔案大小：%d',
	'PLUPLOAD_FILENAME'			=> '檔案名稱',
	'PLUPLOAD_FILES_QUEUED'		=> '%d 個檔案在等待',
	'PLUPLOAD_GENERIC_ERROR'	=> '一般性錯誤。',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP 錯誤',
	'PLUPLOAD_IMAGE_FORMAT'		=> '不支援的圖片格式或圖片檔案格式錯誤。',
	'PLUPLOAD_INIT_ERROR'		=> '初始化錯誤。',
	'PLUPLOAD_IO_ERROR'			=> '讀寫錯誤。',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> '安全性錯誤。',
	'PLUPLOAD_SELECT_FILES'		=> '選擇檔案',
	'PLUPLOAD_SIZE'				=> '檔案大小',
	'PLUPLOAD_SIZE_ERROR'		=> '檔案大小錯誤。',
	'PLUPLOAD_STATUS'			=> '狀態',
	'PLUPLOAD_START_UPLOAD'		=> '開始上傳',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> '等待上傳的檔案開始上傳',
	'PLUPLOAD_STOP_UPLOAD'		=> '停止上傳',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> '停止目前上傳的檔案',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> '已上傳 %d/%d 個檔案',
));
