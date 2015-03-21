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
	'CONFIG_NOT_EXIST'					=> 'Параметр конфігурації "%s" не існує.',

	'GROUP_NOT_EXIST'					=> 'Група "%s" не існує.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Встановлення залежностей оновлення %s.',
	'MIGRATION_DATA_DONE'				=> 'Оновлено дані: %1$s; Час: %2$.2f секунд',
	'MIGRATION_DATA_IN_PROGRESS'                => 'Оновлення даних: %1$s; Час: %2$.2f секунд',
	'MIGRATION_DATA_RUNNING'			=> 'Додавання даних: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Оновлення вже було виконано (пропущено): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'В процесі оновлення виникла помилка, яка викликала виключення. Зміни, вироблені до появи помилки, були скасовані. Проте, рекомендується перевірити форум на відсутність помилок в роботі.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Неможливо виконати оновлення "%1$s", пропущено оновлення "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s не є коректним оновленням.',
	'MIGRATION_SCHEMA_DONE'				=> 'Оновлено​ схему: %1$s; Час: %2$.2f секунд',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Оновлення схем: %s.',

	'MODULE_ERROR'						=> 'Помилка при створенні модуля: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Обов\'язковий компонент модуля не існує: %2$s',
	'MODULE_NOT_EXIST'					=> 'Обов\'язковий модуль існує: %s',

	'PERMISSION_NOT_EXIST'				=> 'Право доступа "%s" не існує.',

	'ROLE_NOT_EXIST'					=> 'Роль "%s" в системі прав доступа не існує.',
));
