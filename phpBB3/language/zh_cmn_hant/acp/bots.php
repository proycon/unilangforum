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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> '管理機器人',
	'BOTS_EXPLAIN'		=> '「Bots (機器人)」、「Spiders (蜘蛛)」、「Crawlers (爬蟲)」是搜尋引擎最常用於更新其資料庫的自動化代理者。因為他們很少會適當地使用 Sessions，所以造成扭曲的訪客數量、增加討論區負擔、有時還會導致連結討論區失敗。在這裡，您可以定義特殊類型的會員來克服這些問題。',
	'BOT_ACTIVATE'		=> '啟用',
	'BOT_ACTIVE'		=> '啟用的機器人',
	'BOT_ADD'			=> '增加機器人',
	'BOT_ADDED'			=> '增加機器人已經成功。',
	'BOT_AGENT'			=> '符合的代理者',
	'BOT_AGENT_EXPLAIN'	=> '符合瀏覽機器人代理者的字元串，允許部分符合。',
	'BOT_DEACTIVATE'	=> '停用',
	'BOT_DELETED'		=> '刪除機器人已經成功。',
	'BOT_EDIT'			=> '編輯機器人',
	'BOT_EDIT_EXPLAIN'	=> '在這裡，您可以增加或編輯已經存在的機器人。您可以設定符合的一個代理者字元串和/或一個或多個 IP 位址 (範圍)。當設定符合的代理者字元串或位址時要小心。您也可以指定機器人瀏覽討論區時看到的風格和語言。設定一個簡單的風格可以減少機器人使用的頻寬。記得給機器人群組會員設定適當的權限。',
	'BOT_LANG'			=> '機器人語言',
	'BOT_LANG_EXPLAIN'	=> '當機器人瀏覽討論區時所顯示的語言。',
	'BOT_LAST_VISIT'	=> '最後訪問',
	'BOT_IP'			=> '機器人 IP',
	'BOT_IP_EXPLAIN'	=> '允許部份符合，用英文逗號分隔多個位址。',
	'BOT_NAME'			=> '機器人名稱',
	'BOT_NAME_EXPLAIN'	=> '僅用於您個人的資訊。',
	'BOT_NAME_TAKEN'	=> '這個名稱已經在您的討論區被使用，無法再給機器人使用。',
	'BOT_NEVER'			=> '從未',
	'BOT_STYLE'			=> '機器人風格',
	'BOT_STYLE_EXPLAIN'	=> '當機器人瀏覽討論區時所顯示的風格。',
	'BOT_UPDATED'		=> '機器人更新已經成功。',

	'ERR_BOT_AGENT_MATCHES_UA'	=> '您提供的機器人代理者和您目前使用的很相似。請調整這個機器人的代理者。',
	'ERR_BOT_NO_IP'				=> '您提供 IP 位址是無效的或這主機是無法理解的。',
	'ERR_BOT_NO_MATCHES'		=> '您必須為這個機器人至少提供一個符合的代理者或 IP 位址。',

	'NO_BOT'		=> '沒有找到特別 ID 的機器人。',
	'NO_BOT_GROUP'	=> '不能找到特別的機器人群組。',
));
