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
	'ACP_FILES'						=> 'Файли мов адміністратора',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Тут ви маєте можливість встановлювати/видаляти мовні пакети. Мовний пакет, який використовується за замовчуванням на форумі, позначений зірочкою (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Ви впевнені, що хочете видалити “%s”?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Встановлені мовні пакети',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Інформація про мову успішно оновлено.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Цей мовний пакет вже встановлено.',
	'LANGUAGE_PACK_DELETED'				=> 'Мовний пакет “%s” успішно видалено. Усім користувачам, які використовували цей мовний пакет, встановлено мовний пакет за замовчуванням.',
	'LANGUAGE_PACK_DETAILS'				=> 'Інформація про мовний пакет',
	'LANGUAGE_PACK_INSTALLED'			=> 'Мовний пакет “%s” успішно встановлено.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Змінні мови додаткових полів профілю було скопійовано з мови за замовчуванням. Змініть їх при необхідності.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Локальна назва',
	'LANGUAGE_PACK_NAME'				=> 'Назва',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Обраний мовний пакет не існує.',
	'LANGUAGE_PACK_USED_BY'				=> 'Використовується (включаючи роботів)',
	'LANGUAGE_VARIABLE'					=> 'Змінна',
	'LANG_AUTHOR'						=> 'Автор мовного пакету',
	'LANG_ENGLISH_NAME'					=> 'Англійська назва',
	'LANG_ISO_CODE'						=> 'Код ISO',
	'LANG_LOCAL_NAME'					=> 'Локальна назва',

	'MISSING_LANG_FILES'		=> 'Відсутні файли мови',
	'MISSING_LANG_VARIABLES'	=> 'Відсутні змінні мови',

	'NO_FILE_SELECTED'				=> 'Ви не вказали файл мови.',
	'NO_LANG_ID'					=> 'Ви не вказали мовний пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ви не можете видалити мовний пакет за замовчуванням.<br />Якщо ви хочете видалити цей мовний пакет, спочатку змініть мову за замовчуванням.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Немає невстановлених мовних пакетів',

	'THOSE_MISSING_LANG_FILES'			=> 'Наступні мовні файли відсутні у мовному пакеті "%s"',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Наступні мовні змінні відсутні у мовному пакеті "%s"',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Невстановлені мовні пакети',
));
