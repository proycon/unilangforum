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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> '假如這個組態會被頻繁地變更，請加上這個選項。',
	'CLI_CONFIG_CURRENT'				=> '目前組態的值，請使用 0 或 1 來表示布林值。',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '成功刪除組態 %s 。',
	'CLI_CONFIG_NEW'					=> '新的組態值，請使用 0 或 1 來表示布林值。',
	'CLI_CONFIG_NOT_EXISTS'				=> '組態 %s 不存在',
	'CLI_CONFIG_OPTION_NAME'			=> '組態名稱',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> '假如在輸出組態的值時，結尾不要輸出斷行字元，請加上這個選項。',
	'CLI_CONFIG_INCREMENT_BY'			=> '遞增量',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '遞增組態 %s 成功',
	'CLI_CONFIG_SET_FAILURE'			=> '無法設定組態 %s',
	'CLI_CONFIG_SET_SUCCESS'			=> '設定組態 %s 成功',

	'CLI_DESCRIPTION_CRON_LIST'					=> '列出所有排程工作。',
	'CLI_DESCRIPTION_CRON_RUN'					=> '執行所有已準備的排程任務。',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> '要執行的任務名稱',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> '透過 Migrations 來更新資料庫。',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> '刪除所有組態選項',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> '停用指定的擴充功能。',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> '啟用指定的擴充功能。',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> '搜尋未被繼承的資料庫變更組件。',
	'CLI_DESCRIPTION_GET_CONFIG'				=> '取得一個組態選項的值',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> '遞增一個組態選項的值',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> '所出所有在資料庫及檔案系統中的擴充功能。',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> '在安全模式中執行 (不使用擴充功能)。',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> '開啟命令列模式。',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> '清除指定的擴充功能。',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> '重新計算 Users 表格中 user_email_hash 欄位的值。',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> '只在目前的組態值等於舊的組態值時才設定組態的新值',
	'CLI_DESCRIPTION_SET_CONFIG'				=> '設定一個組態的值',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '無法停用擴充功能 %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '停用擴充功能 %s 成功',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '無法啟用擴充功能 %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '啟用擴充功能 %s 成功',
	'CLI_EXTENSION_NAME'				=> '擴充功能名稱',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '無法清除擴充功能 %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '清除擴充功能 %s 成功',
	'CLI_EXTENSION_NOT_FOUND'			=> '沒有找到任何擴充功能。',
	'CLI_EXTENSIONS_AVAILABLE'			=> '可安裝',
	'CLI_EXTENSIONS_DISABLED'			=> '已停用',
	'CLI_EXTENSIONS_ENABLED'			=> '已啟用',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> '成功重新計算所有 Email 雜湊值。',
));
