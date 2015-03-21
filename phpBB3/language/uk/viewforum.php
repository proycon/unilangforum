<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
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
	'ACTIVE_TOPICS'	=> 'Активні теми',
	'ANNOUNCEMENTS'	=> 'Оголошення',
	'FORUM_PERMISSIONS'	=> 'Права доступу',
	'ICON_ANNOUNCEMENT'	=> 'Оголошення',
	'ICON_STICKY'	=> 'Прикріплено',
	'LOGIN_NOTIFY_FORUM'	=> 'Ви отримали повідомлення про нове повідомлення на форумі, будь-ласка, авторизуйтесь для перегляду.',
	'MARK_TOPICS_READ'	=> 'Позначити теми прочитаними',
	'NEW_POSTS_HOT'	=> 'Нові повідомлення [ Популярна тема ]', // Not used anymore
	'NEW_POSTS_LOCKED'	=> 'Нові повідомлення [ Тема закрита ]', // Not used anymore
	'NO_NEW_POSTS_HOT'	=> 'Немає нових повідомлень [ Популярна тема ]', // Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Немає нових повідомлень [ Тема закрита ]', // Not used anymore
	'NO_READ_ACCESS'	=> 'Ви не маєте прав доступу для читання повідомлень у цьому форумі.',
        'NO_UNREAD_POSTS_HOT'      => 'Немає непрочитаних повідомлень [ Популярна тема ]',
        'NO_UNREAD_POSTS_LOCKED'   => 'Немає непрочитаних повідомлень  [ Тема закрита ]',
	'POST_FORUM_LOCKED'	=> 'Форум закрито',
	'TOPICS_MARKED'	=> 'Усі повідомлення цього форуму позначено прочитаними',
	'UNREAD_POSTS_HOT'      => 'Непрочитані повідомлення [ Популярна тема ]',
	'UNREAD_POSTS_LOCKED'   => 'Непрочитані повідомлення [ Тема закрита ]',
	'VIEW_FORUM'	=> 'Перегляд форуму',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d тема',
		2	=> '%d тем',
	),
));
