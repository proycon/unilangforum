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
	'APPROVE'			=> 'Схвалити',
	'ATTACHMENT'						=> 'Вкладення',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Функцію вкладень вимкнено.',

	'BOOKMARK_ADDED'		=> 'Тему успішно додано в закладки.',
	'BOOKMARK_ERR'         => 'Не вдалось додати в закладки тему. Повторіть вашу спробу.',
	'BOOKMARK_REMOVED'		=> 'Тему успішно видалено з закладок.',
	'BOOKMARK_TOPIC'		=> 'Додати в закладки',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Видалити з закладок',
	'BUMPED_BY'				=> 'Останній раз піднімалось %1$s на %2$s.',
	'BUMP_TOPIC'			=> 'Підняти тему',

	'CODE'					=> 'Код',
 
	'DELETE_TOPIC'			=> 'Видалити тему',
	'DELETED_INFORMATION'	=> 'Видалено %2$s користувачем %1$s',
	'DISAPPROVE'			=> 'Відхилити',
	'DOWNLOAD_NOTICE'		=> 'У вас недостатньо прав для перегляду приєднаних до цього повідомлення файлів.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Востаннє редагувалось %3$s користувачем %2$s, всього редагувалось %1$d раз.',
		2	=> 'Востаннє редагувалось %3$s користувачем %2$s, всього редагувалось %1$d разів.',
	),
	'EMAIL_TOPIC'			=> 'Надіслати тему e-mail',
	'ERROR_NO_ATTACHMENT'	=> 'Цей файл більше не існує',

	'FILE_NOT_FOUND_404'	=> 'Файл <strong>%s</strong> не існує.',
	'FORK_TOPIC'			=> 'Копіювати тему',
 	'FULL_EDITOR' => 'Стандартна відповідь і попередній перегляд',

	'LINKAGE_FORBIDDEN'		=> 'Ви не авторизовані для перегляду і завантаження файлів з цього сайту.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Для перегляду цієї теми вам необхідно авторизуватись.',
	'LOGIN_VIEWTOPIC'		=> 'Для перегляду цієї теми вам необхідно авторизуватись.',

	'MAKE_ANNOUNCE'				=> 'Змінити на “Оголошення”',
	'MAKE_GLOBAL'				=> 'Змінити на “Важливо”',
	'MAKE_NORMAL'				=> 'Змінити на “Звичайна”',
	'MAKE_STICKY'				=> 'Змінити на “Прикріплено”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Ви можете обрати  <strong>%d</strong> варіант відповіді',
		2	=> 'Ви можете обрати до <strong>%d</strong> варіантів відповіді',
	),

	'MISSING_INLINE_ATTACHMENT'	=> 'Вкладення <strong>%s</strong> більше недоступне',
	'MOVE_TOPIC'				=> 'Перенести тему',

	'NO_ATTACHMENT_SELECTED'=> 'Ви не вибрали файл для перегляду чи завантаження з сервера.',
	'NO_NEWER_TOPICS'		=> 'У цьому форумі немає новіших повідомлень.',
	'NO_OLDER_TOPICS'		=> 'У цьому форумі немає старіших повідомлень.',
	'NO_UNREAD_POSTS'		=> 'Немає нових непрочитаних повідомлень у цій темі.',
	'NO_VOTE_OPTION'		=> 'Ви повинні обрати варіант для голосування.',
	'NO_VOTES'				=> 'Немає голосів',

	'POLL_ENDED_AT'			=> 'Опитування закінчилось %s',
	'POLL_RUN_TILL'			=> 'Опитування проводиться до %s',
	'POLL_VOTED_OPTION'		=> 'Ви голосували за цей варіант',
	'POST_DELETED_RESTORE'	=> 'Це повідомлення було видалено, але його можна відновити.',
	'PRINT_TOPIC'			=> 'Версія для друку',

	'QUICK_MOD'				=> 'Швидкі дії',
 	'QUICKREPLY'			 => 	'Швидка відповідь',
	'QUOTE'					=> 'Цитата',

	'REPLY_TO_TOPIC'		=> 'Відповісти',
	'RESTORE'				=> 'Відновити',
	'RESTORE_TOPIC'			=> 'Відновити тему',
	'RETURN_POST'			=> '%sПовернутись до повідомлення%s',

	'SUBMIT_VOTE'			=> 'Проголосувати',

	'TOPIC_TOOLS'			=> 'Керування темою',
	'TOTAL_VOTES'			=> 'Всього голосів',

	'UNLOCK_TOPIC'			=> 'Відкрити тему',

	'VIEW_INFO'				=> 'Інформація про повідомлення',
	'VIEW_NEXT_TOPIC'		=> 'Наступна тема',
	'VIEW_PREVIOUS_TOPIC'	=> 'Попередня тема',
	'VIEW_RESULTS'			=> 'Переглянути результати',

	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d повідомлення',
		2	=> '%d повідомлень',
	),

	'VIEW_UNREAD_POST'		=> 'Перейти до першого непрочитаного повідомлення',
	'VOTE_SUBMITTED'		=> 'Ваш голос враховано.',
	'VOTE_CONVERTED' => 'Зміна голосу не підтримується для конвертованих опитувань.',
));
