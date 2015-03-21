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

// Banning
$lang = array_merge($lang, array(

	'1_HOUR'	=> '1 година',
	'30_MINS'	=> '30 хвилин',
	'6_HOURS'	=> '6 годин',
	'ACP_BAN_EXPLAIN'	=> 'Тут ви можете контролювати заборону доступу користувачам по імені, IP або e-mail адресі. Ці методи не дозволяють попасти в жоден розділ форуму. Ви можете ввести коротку (255 символів) причину заборони доступу. Це відобразиться в логах адміністраторів. Також можна встановити тривалість заборони. Якщо ви хочете встановити заборону до якоїсь певної дати замість періоду часу, оберіть <u>До</u> для встановлення тривалості заборони і введіть дату в форматі рррр-мм-дд.',
	'BAN_EXCLUDE'	=> 'Виключити із чорного списку',
	'BAN_LENGTH'	=> 'Тривалість',
	'BAN_REASON'	=> 'Причина заборони доступу',
	'BAN_GIVE_REASON'	=> 'Причина, яку буде показано користувачу, якому заборонено доступ до форуму',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Чорний список успішно оновлено.',
  	'BANNED_UNTIL_DATE'		=> 'до %s', // Example: "until Mon 13.Jul.2009, 14:44"
  	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"
	'EMAIL_BAN'	=> 'Заборонити одну або декілька адрес e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Виключити адреси e-mail з чорного списку.',
	'EMAIL_BAN_EXPLAIN'	=> 'При заданні декількох адрес e-mail, вводьте кожну з нової стрічки. Для часткових співпадань використовуйте символ * в якості шаблону, наприклад <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'	=> 'Немає заборонених адрес e-mail',
	'EMAIL_UNBAN'	=> 'Розблокувати адреси e-mails',
	'EMAIL_UNBAN_EXPLAIN'	=> 'Ви можете розблокувати відразу декілька адрес e-mail, обравши їх за допомогою відповідної комбінації миші та клавіатури вашого комп\'ютера та браузера. Виключені адреси e-mail виділяються іншим кольором фону.',
	'IP_BAN'	=> 'Заборонити доступ з однієї або декількох IP-адрес',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Виключити введені IP з чорного списку.',
	'IP_BAN_EXPLAIN'	=> 'Для того, щоб задати відразу декілька різних IP-адрес або імен хостів, вводьте кожну з нової стрічки. Для того, щоб задати діапазон IP-адрес розділяйте початок і кінець дефісом (-), використовуйте значок * в якості шаблону',
	'IP_HOSTNAME'	=> 'IP-адреси або імена хостів',
	'IP_NO_BANNED'	=> 'Немає заборонених IP-адрес',
	'IP_UNBAN'	=> 'Зняти заборону на доступ з IP-адрес',
	'IP_UNBAN_EXPLAIN'	=> 'Ви можете розблокувати (виключити) декілька IP-адрес, обравши їх за допомогою відповідної комбінації миші та клавіатури вашого комп\'ютера та браузера. Виключені IP-адреси виділяються іншим кольором фону.',
	'LENGTH_BAN_INVALID'	=> 'Формат дати <kbd>РРРР-ММ-ДД</kbd>.',
	'OPTIONS_BANNED'			=> 'Заборонені',
	'OPTIONS_EXCLUDED'			=> 'Розблоковані',
	'PERMANENT'	=> 'Постійна',
	'UNTIL'	=> 'До',
	'USER_BAN'	=> 'Заблокувати доступ одному або декільком користувачам за іменем',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Виключити введених користувачів з чорного списку.',
	'USER_BAN_EXPLAIN'	=> 'Ви можете заблокувати відразу декількох користувачів, ввівши кожне ім\'я з нової стрічки. Використовуйте можливість <u>Знайти учасника</u> для пошуку і автоматичного додавання одного або декількох клористувачів.',
	'USER_NO_BANNED'	=> 'Немає заблокованих користувачів',
	'USER_UNBAN'	=> 'Відновити доступ користувачам за іменем',
	'USER_UNBAN_EXPLAIN'	=> 'Ви можете розблокувати відразу декількох користувачів,  обравши їх за допомогою відповідної комбінації миші та клавіатури вашого комп\'ютера та браузера. Виключені користувачі виділяються іншим кольором фону.',
));
