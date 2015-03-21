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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'DELETE_SELECTED_BACKUP'	=> 'Ви впевнені, що хочете видалити обрану резервну копію?',
	'RESTORE_FAILURE'	=> 'Файл резервної копії пошкоджений.',
	'TABLE_SELECT_ERROR'	=> 'Ви повинні обрати хоча б одну таблицю.',
	'ACP_BACKUP_EXPLAIN'	=> 'Тут ви можете зробити резервне копіювання усіх даних, пов\'язаних з phpBB. Ви можете зберегти архів в вашій папці <samp>store/</samp> або просто завантажити його. Залежно від конфігурації вашого сервера ви можете стиснути файл в різні формати.',
	'ACP_RESTORE_EXPLAIN'	=> 'Це повністю відновить таблиці phpBB з збереженого файлу. Якщо ваш сервер має відповідну підтримку, ви можете використати стиснутий за допомогою архіватора gzip або bzip2 текстовий файл, його буде автоматично розархівовано. <strong>ЗАСТЕРЕЖЕННЯ</strong> Це перепише усі існуючі дані. Процес відновлення може тривати довго, будь-ласка, не переходьте на іншу сторінку, поки він не завершиться.',
	'BACKUP_DELETE'	=> 'Файл резервної копії успішно видалено.',
	'BACKUP_INVALID'	=> 'Обраний файл для резервної копії невірний.',
	'BACKUP_OPTIONS'	=> 'Налаштування резервного копіювання',
	'BACKUP_SUCCESS'	=> 'Резервну копію успішно створено.',
	'BACKUP_TYPE'	=> 'Резервувати',
	'DATABASE'	=> 'Утиліти баз даних',
	'DATA_ONLY'	=> 'Лише дані',
	'DELETE_BACKUP'	=> 'Видалити резервну копію',
	'DESELECT_ALL'	=> 'Зняти відмітки',
	'DOWNLOAD_BACKUP'	=> 'Завантажити резервну копію',
	'FILE_TYPE'	=> 'Тип файлу',
	'FILE_WRITE_FAIL' => 'Не вдалося зберегти файл у папку "store".',
	'FULL_BACKUP'	=> 'Усе',
	'RESTORE_OPTIONS'	=> 'Налаштування відновлення',
	'RESTORE_SUCCESS'	=> 'База даних успішно відновлена з резервної копії.<br /><br />Ваш форум повернувся в стан, в якому він був на момент створення резервної копії.',
	'RESTORE_SELECTED_BACKUP'	=> 'Ви впевнені, що хочете відновити базу даних з обраної резервної копії?',
	'SELECT_ALL'	=> 'Обрати усі',
	'SELECT_FILE'	=> 'Оберіть файл',
	'START_BACKUP'	=> 'Розпочати резервне копіювання',
	'START_RESTORE'	=> 'Розпочати відновлення з резервної копії',
	'STORE_AND_DOWNLOAD'	=> 'Зберегти та завантажити',
	'STORE_LOCAL'	=> 'Зберегти файл локально',
	'STRUCTURE_ONLY'	=> 'Лише структуру',
	'TABLE_SELECT'	=> 'Вибір таблиць',
));
