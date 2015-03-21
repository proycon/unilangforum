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

// Bot settings
$lang = array_merge($lang, array(
	'BOT_NAME_TAKEN'	=> 'Ім\'я вже використовується на форумі і не може бути використане для бота.',
	'BOTS'	=> 'Керування ботами',
	'BOTS_EXPLAIN'	=> 'Роботи або боти - це автоматичні агенти, які переважно використовуються пошуковими системами для оновлення своїх баз даних. Оскільки вони рідко належним чином працюють з сесіями, вони можуть спотворити значення лічильника відвідувачів, збільшити навантаження на сервер і інколи некоректно проіндексувати сайт. Тут ви можете задати спеціальний тип користувачів для запобігання таким проблемам.',
	'BOT_ACTIVATE'	=> 'Активувати',
	'BOT_ACTIVE'	=> 'Бот активний',
	'BOT_ADD'	=> 'Додати бота',
	'BOT_ADDED'	=> 'Нового бота успішно додано.',
	'BOT_AGENT'	=> 'Відповідність стрічки Agent',
	'BOT_AGENT_EXPLAIN'	=> 'Стрічка, яка відповідає стрічці User-Agent бота. Дозволяється часткове співпадання.',
	'BOT_DEACTIVATE'	=> 'Деактивувати',
	'BOT_DELETED'	=> 'Бота успішно видалено.',
	'BOT_EDIT'	=> 'Редагувати',
	'BOT_EDIT_EXPLAIN'	=> 'Тут ви можете додавати або редагувати існуючі дані про ботів. Ви можете задати стрічку User-Agent і/або одну чи декілька IP-адрес (або діапазон адрес) для ідентифікації. Будьте уважні, встановлюючи User-Agent або IP-адреси бота! Ви можете також задати стиль і мову, які буде використовувати бот під час перегляду форуму. Це надає вам можливість зменшити трафік, встановивши простий стиль для ботів. Не забудьте встановити відповідні права для спеціальної групи Боти.',
	'BOT_LANG'	=> 'Мова бота',
	'BOT_LANG_EXPLAIN'	=> 'Мова, яка використовується при перегляді ботом форуму.',
	'BOT_LAST_VISIT'	=> 'Останнє відвідування',
	'BOT_IP'	=> 'IP-адреса бота',
	'BOT_IP_EXPLAIN'	=> 'Допускаються часткові співпадання, адреси розділяйте комами.',
	'BOT_NAME'	=> 'Назва бота',
	'BOT_NAME_EXPLAIN'	=> 'Використовується лише для інформації.',
	'BOT_NEVER'	=> 'Ніколи',
	'BOT_STYLE'	=> 'Стиль бота',
	'BOT_STYLE_EXPLAIN'	=> 'Стиль форуму, який використовується ботом.',
	'BOT_UPDATED'	=> 'Бота успішно оновлено.',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Вказана вами стрічка User-Agent співпадає з одною з тих, які використовуються. Будь-ласка, змініть стрічку User-Agent для цього бота.',
	'ERR_BOT_NO_IP'	=> 'IP-адреси, вказані вами, невірні або неможливо визначити ім\'я хосту.',
	'ERR_BOT_NO_MATCHES'	=> 'Вам необіхдно вказати хоча б одну стрічку User-Agent або IP для визначення бота.',
	'NO_BOT'	=> 'З таким ID не знайдено жодного бота.',
	'NO_BOT_GROUP'	=> 'Неможливо знайти спеціальної групи ботів.',
));
