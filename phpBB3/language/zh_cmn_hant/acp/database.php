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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> '您可以利用備份來保存您所有的 phpBB 資料，並將結果儲存在您的 <samp>store/</samp> 資料夾內或直接下載到您指定的路徑下。依照您的伺服器組態，您或許能夠在壓縮檔案時加入一個編號。',
	'ACP_RESTORE_EXPLAIN'	=> '這將會從已儲存的檔案中完全還原所有的 phpBB 資料表，假如您的伺服器支援 gzip 或 bzip2 ，那麼您可以使用它們來壓縮 (或自動解壓縮) 純文字檔案。<strong>警告！</strong> 這將會覆蓋所有已存在的資料。在還原時會佔用較長的處理時間，請不要移動任何的頁面直到完成。備份檔會儲存於 <samp>store/</samp> 資料夾內得以產生 phpBB 的備份功能。還原的備份檔，如果不是由系統所建立，那麼可能無法正常運作。',

	'BACKUP_DELETE'		=> '這個備份檔已刪除完成',
	'BACKUP_INVALID'	=> '所選擇的檔案備份無效',
	'BACKUP_OPTIONS'	=> '備份選項',
	'BACKUP_SUCCESS'	=> '這個備份檔已建立完成',
	'BACKUP_TYPE'		=> '備份類型',

	'DATABASE'			=> '資料庫工具',
	'DATA_ONLY'			=> '只有資料',
	'DELETE_BACKUP'		=> '刪除備份',
	'DELETE_SELECTED_BACKUP'	=> '您確定要刪除已選擇的備份檔嗎？',
	'DESELECT_ALL'		=> '全部取消',
	'DOWNLOAD_BACKUP'	=> '下載備份檔',

	'FILE_TYPE'			=> '檔案類型',
	'FILE_WRITE_FAIL'	=> '無法將檔案寫入儲存資料夾。',
	'FULL_BACKUP'		=> '完整',

	'RESTORE_FAILURE'	=> '這個備份檔可能有錯誤',
	'RESTORE_OPTIONS'	=> '還原選項',
	'RESTORE_SELECTED_BACKUP'	=> '您確定要還原所選擇的備份嗎？',
	'RESTORE_SUCCESS'	=> '這個資料庫已經還原成功。<br /><br />您的討論版已經恢復到備份前的狀態',

	'SELECT_ALL'		=> '全部選擇',
	'SELECT_FILE'		=> '選擇一個檔案',
	'START_BACKUP'		=> '開始備份',
	'START_RESTORE'		=> '開始還原',
	'STORE_AND_DOWNLOAD'	=> '儲存並下載',
	'STORE_LOCAL'		=> '儲存在本地端',
	'STRUCTURE_ONLY'	=> '只有表單結構',

	'TABLE_SELECT'		=> '選擇資料表',
	'TABLE_SELECT_ERROR'=> '您必須選擇至少一個資料表',
));
