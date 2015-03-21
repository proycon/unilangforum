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

	'ALL'	=> 'Усі',
	'ABOUT_USER'	=> 'Профіль',
	'ACTIVE_IN_FORUM'	=> 'Найбільша активність в форумі',
	'ACTIVE_IN_TOPIC'	=> 'Найбільша активність в темі',
	'ADD_FOE'	=> 'Додати в недруги',
	'ADD_FRIEND'	=> 'Додати в Друзі',
	'AFTER'	=> 'після',
	'BEFORE'	=> 'до',
	'CC_SENDER'	=> 'Вислати мені копію цього email повідомлення',
	'CONTACT_ADMIN'			=> 'Зв\'язок з адміністрацією',
	'DEST_LANG'	=> 'Мова',
	'DEST_LANG_EXPLAIN'	=> 'Оберіть мову отримувача повідомлення (якщо доступна).',
	'EDIT_PROFILE'			=> 'Редагувати профіль',
	'EMAIL_BODY_EXPLAIN'	=> 'Це повідомлення буде відправлене як звичайний текст, без коду HTML або BBCode. Зворотньою адресою цього повідомлення буде встановлена ваша адреса e-mail.',
	'EMAIL_DISABLED'	=> 'Вибачте, але усі функції, пов\'язані з e-mail вимкнено.',
	'EMAIL_SENT'	=> 'E-mail повідомлення відправлено.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Це повідомлення буде відправлене як звичайний текст, без коду HTML або BBCode. Зауважте, що інформація про тему вже включена в повідомлення. Зворотньою адресою для цього повідомлення буде вказана ваша адреса e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Ви повинні вказати правильну адресу e-mail одержувача.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Ви повинні ввести текст повідомлення для відправлення.',
	'EMPTY_MESSAGE_IM'	=> 'Ви повинні вказати повідомлення для відправлення.',
	'EMPTY_NAME_EMAIL'	=> 'Ви повинні ввести справжнє ім\'я одержувача.',
	'EMPTY_SENDER_EMAIL'	=> 'Ви повинні ввести правильну email адресу.',
	'EMPTY_SENDER_NAME'		=> 'Ви повинні вказати ім\'я.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Необхідно задати тему повідомлення e-mail.',
	'EQUAL_TO'	=> 'рівне',
	'FIND_USERNAME_EXPLAIN'	=> 'Скористайтесь цією формою для пошуку конкретних користувачів. Вам необов\'язково заповняти усі поля. Для часткового співпадання використовуйте * в якості шаблону. При введенні дат використовуйте формат <kbd>рррр-мм-дд</kbd>, наприклад <samp>2004-02-29</samp>. Поставте галочки для вибору одного чи кількох імен користувачів (якщо попередня форма дозволяє це) і натисніть Обрати відмічені для повернення до попередньої форми.',
	'FLOOD_EMAIL_LIMIT'	=> 'Ви не можете надіслати ще один лист так швидко. Будь-ласка, повторіть вашу спробу пізніше.',
	'GROUP_LEADER'	=> 'Лідер групи',
	'HIDE_MEMBER_SEARCH'	=> 'Приховати пошук учасників',
	'IM_ADD_CONTACT'	=> 'Додати в список контактів',
	'IM_DOWNLOAD_APP'	=> 'Завантажити програму',
	'IM_JABBER'	=> 'Зауважте, що ці користувачі могли вимкнути отримання миттєвих повідомлень від невідомих.',
	'IM_JABBER_SUBJECT'	=> 'Це повідомлення згенероване автоматично, будь-ласка, не відповідайте на нього! Повідомлення від користувача %1$s з %2$s',
	'IM_MESSAGE'	=> 'Ваше повідомлення',
	'IM_NAME'	=> 'Ваше ім\'я',
	'IM_NO_JABBER'	=> 'Вибачте, відправка безпосередньо Jabber-користувачам не підтримується цим форумом. Вам необхідно мати встановлений Jabber-клієнт на вашому комп\'ютері для того, щоб зв\'язатись з цим користувачем.',
	'IM_RECIPIENT'	=> 'Одержувач',
	'IM_SEND'	=> 'Відправити повідомлення',
	'IM_SEND_MESSAGE'	=> 'Відправити повідомлення',
	'IM_SENT_JABBER'	=> 'Ваше повідомлення для %1$s було успішно відправлене.',
	'IM_USER'	=> 'Відправити миттєве повідомлення',
	'LAST_ACTIVE'	=> 'Останнє відвідування',
	'LESS_THAN'	=> 'менше ніж',
	'LIST_USERS'				=> array(
		1	=> '%d користувач',
		2	=> '%d користувачів',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Ви повинні бути авторизовані для перегляду списку команди.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Ви повинні бути авторизовані для перегляду списку учасників.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Ви повинні бути авторизовані для пошуку учасників.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Ви повинні бути авторизовані для перегляду профілів.',
	'MORE_THAN'	=> 'більше за',

	'NO_CONTACT_FORM'		=> 'Форму для зв\'язку з адміністрацією відключено.',
	'NO_CONTACT_PAGE'		=> 'Сторінку для зв\'язку з адміністрацією відключено.',
	'NO_EMAIL'	=> 'Вам не дозволено надсилати e-mail повідомлення цьому учаснику.',
	'IM_NO_DATA'	=> 'Контактна інформація цього користувача відсутня.',
	'NO_VIEW_USERS'	=> 'Ви не маєте прав доступу для перегляду списку учасників або профілів.',
	'ORDER'	=> 'Сортувати',
	'OTHER'	=> 'Інший',
	'POST_IP'	=> 'Написане з IP/домену',
	'REAL_NAME'	=> 'Ім\'я одержувача',
	'RECIPIENT'	=> 'Одержувач',
	'REMOVE_FOE'	=> 'Видалити з списку недругів',
	'REMOVE_FRIEND'	=> 'Видалити з списку друзів',

	'SELECT_MARKED'	=> 'Обрати відмічені',
	'SELECT_SORT_METHOD'	=> 'Оберіть метод сортування',
	'SENDER_EMAIL_ADDRESS'	=> 'Ваша адреса email',
	'SENDER_NAME'			=> 'Ваше ім\'я',
	'SEND_IM'	=> 'Миттєві повідомлення',
	'SEND_MESSAGE'	=> 'Повідомлення',
	'SEND_ICQ_MESSAGE'	=> 'Відіслати ICQ-повідомлення',
	'SEND_JABBER_MESSAGE'	=> 'Відіслати Jabber-повідомлення',
	'SEND_YIM_MESSAGE'	=> 'Відіслати YIM-повідомлення',
	'SORT_EMAIL'	=> 'E-mail',
	'SORT_LAST_ACTIVE'	=> 'Останнє відвідування',
	'SORT_POST_COUNT'	=> 'Кількість повідомлень',
	'USERNAME_BEGINS_WITH'	=> 'Ім\'я починається з',
	'USER_ADMIN'	=> 'Адмініструвати',
	'USER_BAN'            => 'Заборона доступу',
	'USER_FORUM'	=> 'Статистика користувача',
 	'USER_LAST_REMINDED' => array (
 		0 => 'Немає надісланих нагадувань',
 		1 => 'Надіслано %1$d нагадування<br />» %2$s',
		2 => 'Надіслано %1$d нагадувань<br />» %2$s',
 	),
	'USER_ONLINE'	=> 'Онлайн',
	'USERS_PER_PAGE'		=> 'Користувачів на сторінці',
	'USER_PRESENCE'	=> 'Присутність на форумі',
	'VIEWING_PROFILE'	=> 'Перегляд профілю учасника %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Перегляд профілю Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Перегляд профілю Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Перегляд профілю Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Перегляд профілю YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Перегляд профілю Google+',
));
