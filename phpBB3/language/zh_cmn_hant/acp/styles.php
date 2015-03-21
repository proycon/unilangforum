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
	'ACP_STYLES_EXPLAIN'	=> '在這裡，您可以管理在您討論區可用的風格。您可以更改存在的風格、刪除、停用、啟用、建立或匯入新的風格。您也可以使用預覽功能看看風格像甚麼樣子。這裡還列出了使用每個風格的會員總數，在此不考慮會員風格被覆蓋的情況。',

	'CANNOT_BE_INSTALLED'			=> '不能安裝',
	'CONFIRM_UNINSTALL_STYLES'		=> '您確定要卸載選定的風格？',
	'COPYRIGHT'						=> '版權',

	'DEACTIVATE_DEFAULT'		=> '您不能停用預設的風格。',
	'DELETE_FROM_FS'			=> '從檔案系統中刪除',
	'DELETE_STYLE_FILES_FAILED'	=> '刪除的風格「%s」檔案錯誤。',
	'DELETE_STYLE_FILES_SUCCESS'	=> '風格「%s」檔案已經被刪除。',
	'DETAILS'					=> '細節',

	'INHERITING_FROM'			=> '繼承',
	'INSTALL_STYLE'				=> '安裝風格',
	'INSTALL_STYLES'			=> '安裝風格',
	'INSTALL_STYLES_EXPLAIN'	=> '在這裡，您可以安裝新的風格。<br />如果您不能在底下列表找到一個特定的風格，檢查是否已安裝該風格。如果沒有安裝，請檢查是否已正確上傳。',
	'INVALID_STYLE_ID'			=> '無效的風格 ID。',

	'NO_MATCHING_STYLES_FOUND'	=> '沒有風格符合您的查詢。',
	'NO_UNINSTALLED_STYLE'		=> '沒有檢測到未安裝的風格',

	'PURGED_CACHE'				=> '快取已清除',

	'REQUIRES_STYLE'			=> '這個風格需要風格「%s」被安裝。',

	'STYLE_ACTIVATE'			=> '啟用',
	'STYLE_ACTIVE'				=> '啟用',
	'STYLE_DEACTIVATE'			=> '停用',
	'STYLE_DEFAULT'				=> '標示為預設風格',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> '使之成為預設風格之前，您必須啟用它。',
	'STYLE_ERR_INVALID_PARENT'	=> '無效的父風格。',
	'STYLE_ERR_NAME_EXIST'		=> '風格名稱已經存在。',
	'STYLE_ERR_STYLE_NAME'		=> '您必須為這個風格提供一個名稱。',
	'STYLE_INSTALLED'			=> '風格「%s」已經安裝。',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> '返回已安裝風格列表',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> '安裝更多的風格',
	'STYLE_NAME'				=> '風格名稱',
	'STYLE_NAME_RESERVED'		=> '風格「%s」無法安裝，因為名稱已被預訂。',
	'STYLE_NOT_INSTALLED'		=> '風格「%s」沒有安裝。',
	'STYLE_PATH'				=> '風格路徑',
	'STYLE_UNINSTALL'			=> '卸載',
	'STYLE_UNINSTALL_DEPENDENT'	=> '風格「%s」不能卸載，因為它有一個或多個子風格。',
	'STYLE_UNINSTALLED'			=> '風格「%s」卸載成功。',
	'STYLE_USED_BY'				=> '已使用 (包含機器人)',

	'UNINSTALL_DEFAULT'		=> '您不能卸載預設風格。',
));
