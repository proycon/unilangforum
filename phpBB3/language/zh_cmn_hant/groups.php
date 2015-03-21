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
    'ALREADY_DEFAULT_GROUP' => '這個群組已經是您的預設會員群組。',
    'ALREADY_IN_GROUP'      => '您已經是這個會員群組的組員了。',
    'ALREADY_IN_GROUP_PENDING'  => '您已經申請加入指定的群組了。',

    'CANNOT_JOIN_GROUP'         => '您不能加入這個群組。您只能加入自由與開放的群組。',
    'CANNOT_RESIGN_GROUP'       => '您不能退出這個群組。您只能退出自由與開放的群組。',
    'CHANGED_DEFAULT_GROUP' => '成功更改預設會員群組。',

    'GROUP_AVATAR'                      => '群組頭像', 
    'GROUP_CHANGE_DEFAULT'              => '您確定您要將自己的預設會員群組改成「%s」嗎？',
    'GROUP_CLOSED'                      => '封閉的',
    'GROUP_DESC'                        => '會員群組描述',
    'GROUP_HIDDEN'                      => '隱藏的',
    'GROUP_INFORMATION'                 => '會員群組訊息', 
    'GROUP_IS_CLOSED'                   => '這是一個封閉的會員群組，新組員不能自由加入，只能由群組組長邀請加入。',
    'GROUP_IS_FREE'                     => '這是一個自由開放的會員群組，歡迎任何新組員。', 
    'GROUP_IS_HIDDEN'                   => '這是一個隱藏的會員群組，只允許群組內組員檢視。',
    'GROUP_IS_OPEN'                     => '這是一個開放的會員群組，會員可以申請加入。',
    'GROUP_IS_SPECIAL'                  => '這是一個特殊的會員群組，特殊群組由管理員維護。', 
    'GROUP_JOIN'                        => '加入會員群組',
    'GROUP_JOIN_CONFIRM'                => '您確定要加入已選擇的會員群組嗎？',
    'GROUP_JOIN_PENDING'                => '申請加入會員群組',
    'GROUP_JOIN_PENDING_CONFIRM'        => '您確定要申請加入已選擇的會員群組嗎？',
    'GROUP_JOINED'                      => '您已成功加入此會員群組',
    'GROUP_JOINED_PENDING'              => '申請已經送出。請等待會員群組組長核准。',
    'GROUP_LIST'                        => '管理會員',
    'GROUP_MEMBERS'                     => '會員群組組員',
    'GROUP_NAME'                        => '會員群組名稱',
    'GROUP_OPEN'                        => '開放的',
    'GROUP_RANK'                        => '會員群組等級',
    'GROUP_RESIGN_MEMBERSHIP'           => '退出會員群組',
    'GROUP_RESIGN_MEMBERSHIP_CONFIRM'   => '您確定要退出此會員群組嗎？',
    'GROUP_RESIGN_PENDING'              => '放棄對此會員群組的申請',
    'GROUP_RESIGN_PENDING_CONFIRM'      => '您確定要放棄對此會員群組的申請嗎？',
    'GROUP_RESIGNED_MEMBERSHIP'         => '您已經成功退出此會員群組',
    'GROUP_RESIGNED_PENDING'            => '您已成功放棄對此會員群組的申請',
    'GROUP_TYPE'                        => '會員群組類型',
    'GROUP_UNDISCLOSED'                 => '隱藏的會員群組',
    'FORUM_UNDISCLOSED'                 => '管理隱藏的版面',

    'LOGIN_EXPLAIN_GROUP'   => '您需要登入後才能檢視群組細節。',

    'NO_LEADERS'                    => '您不是任何會員群組的組長',
    'NOT_LEADER_OF_GROUP'           => '您不是此會員群組的組長，無法執行此操作。',
    'NOT_MEMBER_OF_GROUP'           => '您不是此會員群組的組員，無法執行此操作。',
    'NOT_RESIGN_FROM_DEFAULT_GROUP' => '您不能退出您的預設會員群組。',

    'PRIMARY_GROUP'     => '主要會員群組',

    'REMOVE_SELECTED'       => '刪除選取',

    'USER_GROUP_CHANGE'         => '從會員群組「%1$s」到會員群組「%2$s」',
    'USER_GROUP_DEMOTE'         => '辭去組長職務',
    'USER_GROUP_DEMOTE_CONFIRM' => '您確定要辭去此會員群組的組長職務嗎？',
    'USER_GROUP_DEMOTED'        => '您已成功辭去組長職務。',
));
