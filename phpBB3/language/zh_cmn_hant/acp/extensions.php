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
	'EXTENSION'                 => '擴充功能',
	'EXTENSIONS'                => '擴充功能',
	'EXTENSIONS_ADMIN'          => '擴充功能管理',
	'EXTENSIONS_EXPLAIN'        => '在您的論壇中，這個工具允許您管理所有的擴充功能情況，以及檢視其相關資訊。',
	'EXTENSION_INVALID_LIST'    => '這「%s」擴充功能是無效的。<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'   => '所選擇的擴充功能無法在這個論壇使用，請確認您的 phpBB 和 PHP 版本是允許的（見詳細內容頁）。',
	'EXTENSION_DIR_INVALID'     => '所選擇的擴充功能具有無效的目錄結構，並不能被啟用。',
	'EXTENSION_NOT_ENABLEABLE'  => '所選擇的擴充功能不能被啟用，請確認擴充功能的需求。',

	'DETAILS'               => '詳細內容',

	'EXTENSIONS_DISABLED'   => '停用的擴充功能',
	'EXTENSIONS_ENABLED'    => '啟用的擴充功能',

	'EXTENSION_DELETE_DATA' => '刪除資料',
	'EXTENSION_DISABLE'     => '停用',
	'EXTENSION_ENABLE'      => '啟用',

	'EXTENSION_DELETE_DATA_EXPLAIN' => '刪除擴充功能將移除其所有的資料和設定。擴充功能檔案仍被保留，因此它可以被再次啟用。',
	'EXTENSION_DISABLE_EXPLAIN'     => '停用擴充功能會保留它的檔案、資料和設定，只是移除其任何新增的功能。',
	'EXTENSION_ENABLE_EXPLAIN'      => '啟用擴充功能允許您在論壇使用它。',

	'EXTENSION_DELETE_DATA_IN_PROGRESS' => '擴充功能的資料正在被刪除。請不要離開或重新整理此頁面，直到完成。',
	'EXTENSION_DISABLE_IN_PROGRESS' => '擴充功能正在被停用。請不要離開或重新整理此頁面，直到完成。',
	'EXTENSION_ENABLE_IN_PROGRESS'  => '擴充功能正在被啟用。請不要離開或重新整理此頁面，直到完成。',

	'EXTENSION_DELETE_DATA_SUCCESS' => '擴充功能的資料已經刪除成功',
	'EXTENSION_DISABLE_SUCCESS'     => '擴充功能已經停用成功',
	'EXTENSION_ENABLE_SUCCESS'      => '擴充功能已經啟用成功',

	'EXTENSION_NAME'            => '擴充功能名稱',
	'EXTENSION_ACTIONS'         => '作用',
	'EXTENSION_OPTIONS'         => '選項',
	'EXTENSION_UPDATE_HEADLINE' => '更新擴充功能',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>停用擴充功能</li>
			<li>從檔案系統中刪除該擴充功能的檔案</li>
			<li>上傳新檔案</li>
			<li>啟用擴充功能</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE' => '從您的論壇完全地移除擴充功能',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>停用擴充功能</li>
			<li>刪除擴充功能的資料</li>
			<li>從檔案系統中刪除該擴充功能的檔案</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM' => '您確定要刪除與「%s」相關的資料？<br /><br />這將刪除其所有資料和設定，而且不能回復！',
	'EXTENSION_DISABLE_CONFIRM'     => '您確定要停用「%s」擴充功能？',
	'EXTENSION_ENABLE_CONFIRM'      => '您確定要啟用「%s」擴充功能？',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'  => '您確定要強制使用不穩定的版本？',

	'RETURN_TO_EXTENSION_LIST'  => '返回擴充功能列表',

	'EXT_DETAILS'           => '擴充功能詳細內容',
	'DISPLAY_NAME'          => '顯示名稱',
	'CLEAN_NAME'            => '簡潔名稱',
	'TYPE'                  => '類型',
	'DESCRIPTION'           => '描述',
	'VERSION'               => '版本',
	'HOMEPAGE'              => '首頁',
	'PATH'                  => '檔案路徑',
	'TIME'                  => '釋出時間',
	'LICENSE'               => '許可',

	'REQUIREMENTS'          => '需求',
	'PHPBB_VERSION'         => 'phpBB 版本',
	'PHP_VERSION'           => 'PHP 版本',
	'AUTHOR_INFORMATION'    => '作者資訊',
	'AUTHOR_NAME'           => '姓名',
	'AUTHOR_EMAIL'          => '電子郵件',
	'AUTHOR_HOMEPAGE'       => '首頁',
	'AUTHOR_ROLE'           => '角色',

	'NOT_UP_TO_DATE'        => '%s 不是最新的',
	'UP_TO_DATE'            => '%s 是最新的',
	'ANNOUNCEMENT_TOPIC'    => '釋出公告',
	'DOWNLOAD_LATEST'       => '下載版本',
	'NO_VERSIONCHECK'       => '沒有提供版本檢查的資訊。',

	'VERSIONCHECK_FORCE_UPDATE_ALL'     => '重新檢查所有版本',
	'FORCE_UNSTABLE'                    => '總是檢查不穩定版本',
	'EXTENSIONS_VERSION_CHECK_SETTINGS' => '版本檢查設定',

	'META_FIELD_NOT_SET'    => '必填欄位 %s 沒有設定。',
	'META_FIELD_INVALID'    => '欄位 %s 是無效的。',
));
