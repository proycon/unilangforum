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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Тут ви можете відправити e-mail повідомлення усім користувачам або користувачам конкретної групи, <strong>в котрих увімкнено функцію отримання масових розсилань e-mail</strong>. Для цього повідомлення e-mail буде надіслано на вказану адміністративну адресу e-mail, з BCC усім користувачам. Значення за замовчуванням - 50 користувачів для такого листа e-mail, для більшої кількості користувачів буде відіслано більше листів e-mail. Якщо ви надсилаєте листа великій групі, будь-ласка, будьте терпеливі і не зупиняйте процес відправки до його повного завершення. Довготривале відправлення є нормальним для масової розсилки, вас буде повідомлено про завершення даної операції.',
	'ALL_USERS'						=> 'Усім користувачам',

	'COMPOSE'				=> 'Створити',

	'EMAIL_SEND_ERROR'		=> 'Виникла одна чи більше помилок під час відсилання e-mail повідомлень. Будь-ласка, перегляньте %sЛог помилок%s для детальної інформації.',
	'EMAIL_SENT'			=> 'Повідомлення відправлене.',
	'EMAIL_SENT_QUEUE'		=> 'Це повідомлення готове для відправлення.',

	'LOG_SESSION'			=> 'Вести логування пошти як критичне',

	'SEND_IMMEDIATELY'		=> 'Відіслати негайно',
	'SEND_TO_GROUP'			=> 'Відіслати групі',
	'SEND_TO_USERS'			=> 'Відіслати учасникам',
	'SEND_TO_USERS_EXPLAIN'	=> 'Введення імен відмінить усі групи, обрані раніше. Вводьте кожне ім\'я з нової стрічки.',
   
  'MAIL_BANNED'			=> 'Надсилати e-mail забаненим користувачам',
	'MAIL_BANNED_EXPLAIN'	=> 'Дане налаштування визначає, чи будуть отримувати e-mail забанені користувачі при масовій розсилці e-mail.',
	'MAIL_HIGH_PRIORITY'	=> 'Високий',
	'MAIL_LOW_PRIORITY'		=> 'Низький',
	'MAIL_NORMAL_PRIORITY'	=> 'Звичайний',
	'MAIL_PRIORITY'			=> 'Приорітет пошти',
	'MASS_MESSAGE'			=> 'Ваше повідомлення',
	'MASS_MESSAGE_EXPLAIN'	=> 'Майте на увазі, ви можете ввести лише текст. Все форматування буде видалено перед відправленням.',
	
	'NO_EMAIL_MESSAGE'		=> 'Вам необхідно ввести текст повідомлення.',
	'NO_EMAIL_SUBJECT'		=> 'Вам необхідно ввести тему вашого повідомлення.',
));
