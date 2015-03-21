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
	'ACP_FILES'						=> '控制台語言檔案',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '在這裡，您可以安裝/移除語言包。預設的語言包有標記星號 (*)。',

	'DELETE_LANGUAGE_CONFIRM'		=> '您確定要刪除「%s」嗎？',

	'INSTALLED_LANGUAGE_PACKS'		=> '已安裝的語言包',

	'LANGUAGE_DETAILS_UPDATED'			=> '語言細節更新成功。',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '這份語言包已經安裝完畢。',
	'LANGUAGE_PACK_DELETED'				=> '這份語言包「%s」已經移除完畢。所有使用此語言包的會員將會重設為系統預設語言。',
	'LANGUAGE_PACK_DETAILS'				=> '語言包細節',
	'LANGUAGE_PACK_INSTALLED'			=> '該語言包「%s」已經安裝完畢。',
	'LANGUAGE_PACK_CPF_UPDATE'			=> '自訂個人資料欄位的語言字串已經被預設的語言複製。如果需要的話，那麼請改變它們。',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> '當地名稱',
	'LANGUAGE_PACK_NAME'				=> '檔名',
	'LANGUAGE_PACK_NOT_EXIST'			=> '您選擇的語言包不存在。',
	'LANGUAGE_PACK_USED_BY'				=> '已使用 (包含機器人)',
	'LANGUAGE_VARIABLE'					=> '語言變數',
	'LANG_AUTHOR'						=> '語言包作者',
	'LANG_ENGLISH_NAME'					=> '英文檔名',
	'LANG_ISO_CODE'						=> 'ISO 代碼',
	'LANG_LOCAL_NAME'					=> '當地名稱',

	'MISSING_LANG_FILES'		=> '找不到語言檔案',
	'MISSING_LANG_VARIABLES'	=> '找不到語言變數',

	'NO_FILE_SELECTED'				=> '您沒有指定語言檔。',
	'NO_LANG_ID'					=> '您沒有指定語言包。',
	'NO_REMOVE_DEFAULT_LANG'		=> '您不可以移除預設的語言包。<br />如果您要移除這個語言包，那麼請先變更您的討論區預設的語言。',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '沒有解除安裝的語言包',

	'THOSE_MISSING_LANG_FILES'			=> '從「%s」語言資料夾中找不到下面的語言檔',
	'THOSE_MISSING_LANG_VARIABLES'		=> '從「%s」語言包中找不到下面的語言變數',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '解除安裝的語言包',
));
