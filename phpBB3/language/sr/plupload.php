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
	'PLUPLOAD_ADD_FILES'		=> 'Додај датотеке',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Додај датотеке у ред за додавање и кликни на дугме за почетак.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s је већ присутно у реду за додавање.',
	'PLUPLOAD_CLOSE'			=> 'Затвори',
	'PLUPLOAD_DRAG'				=> 'Превуци датотеке овде.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Грешка удвојена датотека.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Можете такође да прилажете датотеке њиховим превлачењем и спуштањем у поље поруке.',
	'PLUPLOAD_ERR_INPUT'		=> 'Неуспешно отварање улазног тока.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Неуспешно премештање додате датотеке.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Неуспешно отварање излазног тока.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Датотека је превелика:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Грешка броја датотека.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Неисправна екстензија датотеке:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Почетак је протицао ван доступне меморије.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Адреса URL за додавање је или погрешна или не постоји.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Грешка екстензије датотека.',
	'PLUPLOAD_FILE'				=> 'Датотека: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Датотека: %s, величина: %d, највећа величина датотеке: %d',
	'PLUPLOAD_FILENAME'			=> 'Назив датотеке',
	'PLUPLOAD_FILES_QUEUED'		=> '%d датотека у реду за додавање',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Генеричка грешка.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP грешка.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Тип слике је или погрешан или није подржан.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init грешка.',
	'PLUPLOAD_IO_ERROR'			=> 'IO грешка.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Безбедносна грешка.',
	'PLUPLOAD_SELECT_FILES'		=> 'Одабери датотеке',
	'PLUPLOAD_SIZE'				=> 'Величина',
	'PLUPLOAD_SIZE_ERROR'		=> 'Грешка величине датотеке.',
	'PLUPLOAD_STATUS'			=> 'Статус',
	'PLUPLOAD_START_UPLOAD'		=> 'Почни додавање',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Почни додавање датотека на чекању',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Заустави додавање',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Заустави тренутно додавање',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Додато %d/%d датотека',
));
