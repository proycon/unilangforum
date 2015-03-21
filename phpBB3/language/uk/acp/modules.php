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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Тут ви можете керувати усіма видами модулів. Зауважте, що Панель адміністратора має трирівневу структуру меню (Категорія -> Категорія -> Модуль), в результаті чого підрозділи мають дворівневу структуру (Категорія -> Модуль), якої необхідно дотримуватись. Будь-ласка, також врахуйте, що ви можете заблоковати доступ самому собі, якщо ви вимкнете або видалите модулі, які відповідають за керування модулів.',
	'ADD_MODULE'					=> 'Додати модуль',
	'ADD_MODULE_CONFIRM'			=> 'Ви впевнені, що хочете додати обраний модуль з вказаним методом?',
	'ADD_MODULE_TITLE'				=> 'Додавання модуля',

	'CANNOT_REMOVE_MODULE'	=> 'Неможливо видалити модуль, який має дочірні модулі. Будь-лакса, видаліть або перемістіть усі дочірні модулі перед виконанням цієї дії.',
	'CATEGORY'				=> 'Категорія',
	'CHOOSE_MODE'			=> 'Оберіть метод використання',
	'CHOOSE_MODE_EXPLAIN'	=> 'Оберіть методи використання модулів.',
	'CHOOSE_MODULE'			=> 'Оберіть модуль',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Оберіть файл, який буде викликатись цим модулем.',
	'CREATE_MODULE'			=> 'Створити новий модуль',

	'DEACTIVATED_MODULE'	=> 'Деактивувати модуль',
	'DELETE_MODULE'			=> 'Видалити модуль',
	'DELETE_MODULE_CONFIRM'	=> 'Ви впевнені, що хочете видалити цей модуль?',

	'EDIT_MODULE'			=> 'Редагувати модуль',
	'EDIT_MODULE_EXPLAIN'	=> 'Тут ви можете ввести параметри модуля.',

	'HIDDEN_MODULE'			=> 'Прихований модуль',

	'MODULE'					=> 'Модуль',
	'MODULE_ADDED'				=> 'Модуль успішно додано.',
	'MODULE_DELETED'			=> 'Модуль успішно видалено.',
	'MODULE_DISPLAYED'			=> 'Відображення модуля',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Якщо ви не хочете, щоб цей модуль відображався, але хочете використовувати його, оберіть "ні" .',
	'MODULE_EDITED'				=> 'Модуль успішно відредаговано.',
	'MODULE_ENABLED'			=> 'Модуль увімкнено',
	'MODULE_LANGNAME'			=> 'Назва мови модуля',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Введіть назву модуля. Використайте змінну мови, яка використовується в файлі мови.',
	'MODULE_TYPE'				=> 'Тип модулю',

	'NO_CATEGORY_TO_MODULE'	=> 'Неможливо перетворити категорію в модуль. Будь-ласка, видаліть/перемістіть усі дочірні модулі перед виконанням цієї дії.',
	'NO_MODULE'				=> 'Модуль не знайдено.',
	'NO_MODULE_ID'			=> 'Не задано ідентифікатор модуля.',
	'NO_MODULE_LANGNAME'	=> 'Не задана назва мови модуля.',
	'NO_PARENT'				=> 'Небатьківський',

	'PARENT'				=> 'Батьківський',
	'PARENT_NO_EXIST'		=> 'Батьківський модуль не існує.',

	'SELECT_MODULE'			=> 'Оберіть модуль',
));
