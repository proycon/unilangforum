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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> '在這裡，您可以管理所有的模組。請注意！系統管理員控制台有三層選單結構 (類別 -> 類別 -> 模組) 而其他地方使用的是保持兩層選單結構 (類別 -> 模組)。也請注意的是，如果您刪除或停用了負責模組自身管理的模組，您有可能會把自己給鎖在模組外面。',
	'ADD_MODULE'					=> '增加模組',
	'ADD_MODULE_CONFIRM'			=> '您確定要用選擇的模式增加選擇的模組嗎？',
	'ADD_MODULE_TITLE'				=> '增加模組',

	'CANNOT_REMOVE_MODULE'	=> '無法刪除模組，因為它有分派下層的引用。執行此動作前，請先刪除或移除所有下層引用。',
	'CATEGORY'				=> '類別',
	'CHOOSE_MODE'			=> '選擇模組方式',
	'CHOOSE_MODE_EXPLAIN'	=> '選擇這個模組被使用的方式。',
	'CHOOSE_MODULE'			=> '選擇模組',
	'CHOOSE_MODULE_EXPLAIN'	=> '選擇這個模組所使用的檔案。',
	'CREATE_MODULE'			=> '建立新的模組',

	'DEACTIVATED_MODULE'	=> '停用模組',
	'DELETE_MODULE'			=> '刪除模組',
	'DELETE_MODULE_CONFIRM'	=> '您確定要移除這個模組嗎？',

	'EDIT_MODULE'			=> '編輯模組',
	'EDIT_MODULE_EXPLAIN'	=> '在這裡，您可以輸入模組特別的設定。',

	'HIDDEN_MODULE'			=> '隱藏模組',

	'MODULE'					=> '模組',
	'MODULE_ADDED'				=> '模組增加成功。',
	'MODULE_DELETED'			=> '模組移除成功。',
	'MODULE_DISPLAYED'			=> '顯示模組',
	'MODULE_DISPLAYED_EXPLAIN'	=> '如果您不想顯示這個模組又想使用它，那麼設定為否。',
	'MODULE_EDITED'				=> '模組編輯成功。',
	'MODULE_ENABLED'			=> '啟用模組',
	'MODULE_LANGNAME'			=> '模組語言名稱',
	'MODULE_LANGNAME_EXPLAIN'	=> '輸入顯示的模組名稱。如果名稱由語言檔案提供，那麼請使用語言常數。',
	'MODULE_TYPE'				=> '模組類型',

	'NO_CATEGORY_TO_MODULE'	=> '無法轉變類別為模組。執行此動作前，請先刪除或移除所有子模組。',
	'NO_MODULE'				=> '沒有發現模組。',
	'NO_MODULE_ID'			=> '沒有指定模組 ID。',
	'NO_MODULE_LANGNAME'	=> '沒有指定模組語言。',
	'NO_PARENT'				=> '沒有父類別',

	'PARENT'				=> '父類別',
	'PARENT_NO_EXIST'		=> '父類別不存在。',

	'SELECT_MODULE'			=> '選擇一個模組',
));
