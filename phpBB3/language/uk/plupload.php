<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Додати файли',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Додайте файли в чергу і натисніть кнопку "Завантажити".',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s вже присутній в черзі.',
	'PLUPLOAD_CLOSE'			=> 'Закрити',
	'PLUPLOAD_DRAG'				=> 'Перемістіть файли сюди.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Помилка: вказаний файл вже існує.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Можна прикріплювати файли, перетягуючи їх у вікно повідомлення.',
	'PLUPLOAD_ERR_INPUT'		=> 'Неможливо відкрити вхідний потік.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Неможливо перемістити завантажений файл.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Неможливо відкрити вихідний потік.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Помилка: файл занадто великий:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Помилка підрахунку кількості файлів.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Помилка: невірне розширення файлу:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Недостатньо пам\'яті для виконання операції.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Посилання на файл для завантаження невірна, або адреса не існує.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Помилка розширення файлу.',
	'PLUPLOAD_FILE'				=> 'Файл: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Файл: %s, розмір: %d, максимальний розмір файла: %d',
	'PLUPLOAD_FILENAME'			=> 'Ім\'я файла.',
	'PLUPLOAD_FILES_QUEUED'		=> 'Файлів в черзі: %d',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Загальна помилка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Помилка HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Невірний або непідтримуваний формат зображення.',
	'PLUPLOAD_INIT_ERROR'		=> 'Помилка ініціалізації.',
	'PLUPLOAD_IO_ERROR'			=> 'Помилка введення-виведення',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Помилка безпеки.',
	'PLUPLOAD_SELECT_FILES'		=> 'Вибрати файли',
	'PLUPLOAD_SIZE'				=> 'Розмір',
	'PLUPLOAD_SIZE_ERROR'		=> 'Помилка розміру файлу.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Завантажити',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Почати завантаження файлів.',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Зупинити завантаження',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Зупинити поточне завантаження',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Завантажено файлів: %d/%d',
));
