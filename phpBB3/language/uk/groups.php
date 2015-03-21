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
	'ALREADY_IN_GROUP_PENDING'	=> 'Ви вже відіслали запит на вступ до цієї групи.',
	'ALREADY_DEFAULT_GROUP'	=> 'Обрана група вже є групою за замовчуванням',
	'ALREADY_IN_GROUP'	=> 'Ви вже є членом обраної групи',
	'CHANGED_DEFAULT_GROUP'	=> 'Група за замовчуванням успішно змінена',
	'GROUP_AVATAR'	=> 'Аватар групи',
	'CANNOT_JOIN_GROUP'         => 'Ви не можете вступити до цієї групи. Ви можете вступати лише до відкритих та вільно відкритих груп.',
	'CANNOT_RESIGN_GROUP'      => 'Ви не можете вийти з цієї групи. Ви можете виходити лише з відкритих та вільно відкритих груп.',	
	'GROUP_CHANGE_DEFAULT'	=> 'Ви впевнені що бажаєте змінити вашу групу за замовчуванням на «%s»?',
	'GROUP_CLOSED'	=> 'Закрита група',
	'GROUP_DESC'	=> 'Опис групи',
	'GROUP_HIDDEN'	=> 'Прихована група',
	'GROUP_INFORMATION'	=> 'Інформація про групу',
	'GROUP_IS_CLOSED'	=> 'Це закрита група - вступ до неї неможливий без запрошення лідера групи.',
	'GROUP_IS_FREE'	=> 'Це загальнодоступна група - запрошуються усі нові члени.',
	'GROUP_IS_HIDDEN'	=> 'Це прихована група, лише її члени можуть бачити хто до неї входить.',
	'GROUP_IS_OPEN'	=> 'Це відкрита група, будь-хто може подати заявку на вступ.',
	'GROUP_IS_SPECIAL'	=> 'Це спеціальна група, керування нею здійснюється адміністраторами форуму.',
	'GROUP_JOIN'	=> 'Приєднатись до групи',
	'GROUP_JOIN_CONFIRM'	=> 'Ви впевнені що хочете вступити до даної групи?',
	'GROUP_JOIN_PENDING'	=> 'Заявка на вступ до групи',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Ви впевнені, що хочете подати заявку на вступ до даної групи?',
	'GROUP_JOINED'	=> 'Ви успішно вступили до даної групи',
	'GROUP_JOINED_PENDING'	=> 'Заявка на вступ успішно відправлена. Зачекайте підтвердження від лідеру групи.',
	'GROUP_LIST'	=> 'Керування користувачами',
	'GROUP_MEMBERS'	=> 'Члени групи',
	'GROUP_NAME'	=> 'Назва групи',
	'GROUP_OPEN'	=> 'Відкрита група',
	'GROUP_RANK'	=> 'Звання групи',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Вийти з групи',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ви впевнені, що хочете вийти з даної групи?',
	'GROUP_RESIGN_PENDING'	=> 'Відізвати заявку на вступ до групи',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Ви впевнені, що хочете відізвати вашу заявку на вступ до даної групи?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Ви успішно вийшли з даної групи',
	'GROUP_RESIGNED_PENDING'	=> 'Ваша заявка на вступ до групи успішно видалена',
	'GROUP_TYPE'	=> 'Тип групи',
	'GROUP_UNDISCLOSED'	=> 'Прихована група',
	'FORUM_UNDISCLOSED'	=> 'Модерування прихованого(их) форуму(ів)',
	'LOGIN_EXPLAIN_GROUP'	=> 'Вам необхідно увійти для перегляду інформації про групу',
	'NO_LEADERS'	=> 'Ви не є лідером жодної групи',
	'NOT_LEADER_OF_GROUP'	=> 'Дана операція не може бути виконана, оскільки ви не є лідером даної групи.',
	'NOT_MEMBER_OF_GROUP'	=> 'Дана операція не може бути виконана, оскільки ви не є членом даної групи.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Ви не можете вийти з групи за замовчуванням.',
	'PRIMARY_GROUP'	=> 'Основна група',
	'REMOVE_SELECTED'	=> 'Видалити обрані',
	'USER_GROUP_CHANGE'	=> 'З групи %1$s в групу %2$s',
	'USER_GROUP_DEMOTE'	=> 'Відмовитись від лідерства',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ви впевнені, що хочете відмовитись від лідерства в даній групі?',
	'USER_GROUP_DEMOTED'	=> 'Ви більше не є лідером даної групи.',
));
