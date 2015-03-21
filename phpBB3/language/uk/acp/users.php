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
	'ADMIN_SIG_PREVIEW'		=> 'Перегляд підпису',
	'AT_LEAST_ONE_FOUNDER'	=> 'Ви не можете понизити статус цього засновника до звичайного користувача. На форумі повинен бути хоча б один засновник. Якщо ви хочете змінити статус засновника цього користувача, спочатку зробіть засновником іншого користувача.',

	'BAN_ALREADY_ENTERED'	=> 'Користувача було раніше додано до чорного списку. Чорний список не оновився.',
	'BAN_SUCCESSFUL'		=> 'Користувача успішно додано в чорний список.',
        'CANNOT_BAN_ANONYMOUS'         => 'Ви не можете додати в чорний список анонімний обліковий запис. Права доступу для анонімних користувачів можна встановити в вкладці "Права доступу".',

	'CANNOT_BAN_FOUNDER'			=> 'Ви не можете закрити доступ обліковим записам засновників.',
	'CANNOT_BAN_YOURSELF'			=> 'Ви не можете закрити доступ самому собі.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Ви не можете деактивувати облікові записи ботів. Будь-ласка, деактивуйте спочатку бота на сторінці ботів.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Ви не можете деактивувати облікові записи засновників.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Ви не можете деактивувати свій власний обліковий запис.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Ви не можете  ініціювати повторну активацію облікових записів ботів. Будь-ласка, деактивуйте спочатку бота на сторінці ботів.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Ви не можете ініціювати повторну активацію облікових записів засновників.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Ви не можете ініціювати повторну активацію власного облікового запису.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Ви не можете видалити обліковий запис гостя.',
 	'CANNOT_REMOVE_FOUNDER'			=> 'Ви не можете видалити облікові записи засновника.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Ви не можете видалити свій власний обліковий запис.',
	'CANNOT_SET_FOUNDER_IGNORED'		=> 'Ви не можете зробити ігнорованих користувачів засновниками.',	
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Вам необхідно спочатку активувати користувачів, перед тим як зробити їх засновниками, лише активованим користувачам можна підвищити статус.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Це поле заповнюйте лише у тому випадку, якщо ви змінюєте e-mail адресу користувача.',

	'DELETE_POSTS'			=> 'Видалити повідомлення',
	'DELETE_USER'			=> 'Видалити користувача',
	'DELETE_USER_EXPLAIN'	=> 'Зауважте, що видалення користувача є беззворотнім, його не може бути відновлено. Непрочитані приватні повідомлення, надіслані цим користувачем, буде видалено і вони не будуть доступними їхнім отримувачам.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Повторну активацію успішно ініційовано.',
	'FOUNDER'						=> 'Засновник',
	'FOUNDER_EXPLAIN'				=> 'Засновники мають усі права адміністратора і ніколи не можуть бути заблоковані, видалені або понижені в статусі.',

	'GROUP_APPROVE'					=> 'Схвалити учасника',
	'GROUP_DEFAULT'					=> 'Задати групу за замовчуванням для учасника',
	'GROUP_DELETE'					=> 'Видалити учасника з групи',
	'GROUP_DEMOTE'					=> 'Зняти лідера групи',
	'GROUP_PROMOTE'					=> 'Призначити лідером групи',

	'IP_WHOIS_FOR'			=> 'IP whois для %s',

	'LAST_ACTIVE'			=> 'Останнє відвідування',

	'MOVE_POSTS_EXPLAIN'	=> 'Будь-ласка, оберіть форум, до якого ви хочете перемістити усі повідомлення, написані цим користувачем.',

	'NO_SPECIAL_RANK'		=> 'Спеціального звання не присвоєно',
	'NO_WARNINGS' => 	'Попередження відсутні.',
	'NOT_MANAGE_FOUNDER'	=> 'Ви намагались керувати користувачем з статусом засновника. Лише засновникам дозволяється керувати іншими засновниками.',

	'QUICK_TOOLS'			=> 'Швидкі налаштування',

	'REGISTERED'			=> 'Зареєстрований',
	'REGISTERED_IP'			=> 'Зареєстрований з IP-адреси',
	'RETAIN_POSTS'			=> 'Залишити повідомлення',

	'SELECT_FORM'			=> 'Обрати форму',
	'SELECT_USER'			=> 'Обрати користувача',

	'USER_ADMIN'					=> 'Адміністрування користувача',
	'USER_ADMIN_ACTIVATE'			=> 'Активувати обліковий запис',
	'USER_ADMIN_ACTIVATED'			=> 'Користувача успішно активовано.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Аватар успішно видалено з облікового запису користувача.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Бан за адресою e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Адреса e-mail заборонена через панелі керування користувачами',
	'USER_ADMIN_BAN_IP'				=> 'Бан за адресою IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'Адреса IP заборонена через панель керування користувачами',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Ім\'я користувача заборонене через панель керування користувачами',
	'USER_ADMIN_BAN_USER'			=> 'Бан за іменем користувача',
	'USER_ADMIN_DEACTIVATE'			=> 'Деактивувати обліковий запис',
	'USER_ADMIN_DEACTIVED'			=> 'Користувача успішно деактивовано.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Видалити усі вкладення',
	'USER_ADMIN_DEL_AVATAR'			=> 'Видалити аватар',
	'USER_ADMIN_DEL_OUTBOX' =>	 'Очистити папку "Вихідні"',
	'USER_ADMIN_DEL_POSTS'			=> 'Видалити усі повідомлення',
	'USER_ADMIN_DEL_SIG'			=> 'Видалити підпис',
	'USER_ADMIN_EXPLAIN'			=> 'Тут ви можете редагувати інформацію про користувачів і змінювати їхні деякі спеціальні налаштування. Для того, щоб змінити права доступу, будь-ласка, скористайтесь системою призначення прав доступу для користувачів та груп.',
	'USER_ADMIN_FORCE'				=> 'Ініціювати повторну активацію',
	'USER_ADMIN_LEAVE_NR' => 'Видалити з групи "Нові користувачі"',	
	'USER_ADMIN_MOVE_POSTS'			=> 'Перемістити усі повідомлення',
	'USER_ADMIN_SIG_REMOVED'		=> 'Підпис успішно видалено з облікового запису користувача.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Усі вкладення користувача успішно видалено.',
	'USER_AVATAR_NOT_ALLOWED' => 'Аватар не відображено, оскільки використання аватарів вимкнено.',	
	'USER_AVATAR_UPDATED'			=> 'Інформацію про аватар користувача успішно оновлено.',
	'USER_AVATAR_TYPE_NOT_ALLOWED' => 'Поточний аватар не відображено, оскільки такий тип аватарів вимкнено.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Додаткові поля профілю',
	'USER_DELETED'					=> 'Користувача успішно видалено.',
	'USER_GROUP_ADD'				=> 'Додати користувача до групи',
	'USER_GROUP_NORMAL'				=> 'Визначені користувачами групи, до яких входить користувач',
	'USER_GROUP_PENDING'			=> 'Групи, на вступ до яких очікує користувач',
	'USER_GROUP_SPECIAL'			=> 'Попередньо встановлені групи, до яких входить користувач',
	'USER_LIFTED_NR' => 'Користувача успішно видалено з групи нових користувачів.',
	'USER_NO_ATTACHMENTS'				=> 'Немає вкладень.', 
	'USER_NO_POSTS_TO_DELETE'			=> 'У користувача немає повідомлень, щоб зберегти або видалити.',
	'USER_OUTBOX_EMPTIED' => 'Папку "Вихідні" цього користувача успішно очищено.',
	'USER_OUTBOX_EMPTY' => 'Папка "Вихідні" цього користувача пуста.',
	'USER_OVERVIEW_UPDATED'			=> 'Інформацію про користувача оновлено.',
	'USER_POSTS_DELETED'			=> 'Усі повідомлення користувача успішно видалено.',
	'USER_POSTS_MOVED'				=> 'Усі повідомлення користувача успішно переміщено до вказаного форуму.',
	'USER_PREFS_UPDATED'			=> 'Налаштування користувача оновлено.',
	'USER_PROFILE'					=> 'Профіль користувача',
	'USER_PROFILE_UPDATED'			=> 'Профіль користувача оновлено.',
	'USER_RANK'						=> 'Звання користувача',
	'USER_RANK_UPDATED'				=> 'Звання користувача оновлено.',
	'USER_SIG_UPDATED'				=> 'Підпис користувача успішно оновлено.',
 	'USER_WARNING_LOG_DELETED' => 'Інформація недоступна. Можливо, даний запис вилучено з журналу.',
	'USER_TOOLS'					=> 'Основні інструменти',
));
