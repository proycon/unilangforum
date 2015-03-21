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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Овде можете управљати свим врстама модула. Молимо знајте да АКП има тро-слојну структуру менија (Категорија -> Категорија -> Модул) док остали имају дво-слојну структуру менија (Категорија -> Модул) која мора бити сачувана. Молимо такође да будете пажљиви јер можете закључати сами себе уколико онемогућите или обришете модуле одговорне за управљање самим модулима.',
	'ADD_MODULE'					=> 'Додај модул',
	'ADD_MODULE_CONFIRM'			=> 'Да ли сигурно желите да додате изабрани модул са изабраним модом?',
	'ADD_MODULE_TITLE'				=> 'Додај модул',

	'CANNOT_REMOVE_MODULE'	=> 'Модул не може да се уклони, има додељене подмодуле. Молимо вас да уклоните или преместите све подмодуле пре извођења овог поступка.',
	'CATEGORY'				=> 'Категорија',
	'CHOOSE_MODE'			=> 'Изаберите мод модула',
	'CHOOSE_MODE_EXPLAIN'	=> 'Изаберите мод модула који се користи.',
	'CHOOSE_MODULE'			=> 'Изаберите модул',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Изаберите датотеку која се позива од овога модула.',
	'CREATE_MODULE'			=> 'Направи нов модул',

	'DEACTIVATED_MODULE'	=> 'Деактивиран модул',
	'DELETE_MODULE'			=> 'Обриши модул',
	'DELETE_MODULE_CONFIRM'	=> 'Да ли сигурно желите да обришете овај модул?',

	'EDIT_MODULE'			=> 'Учитај модул',
	'EDIT_MODULE_EXPLAIN'	=> 'Овде можете да унесете посебне поставке модула.',

	'HIDDEN_MODULE'			=> 'Скривен модул',

	'MODULE'					=> 'Модул',
	'MODULE_ADDED'				=> 'Модул је успешно додат.',
	'MODULE_DELETED'			=> 'Модул је успешно уклоњен.',
	'MODULE_DISPLAYED'			=> 'Приказани модул',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Уколико не желите да прикажете овај модул, али желите да га користите, поставите ово на не.',
	'MODULE_EDITED'				=> 'Модул је успешно учитан.',
	'MODULE_ENABLED'			=> 'Модул је омогућен',
	'MODULE_LANGNAME'			=> 'Име језика модула',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Унесите приказано име модула. Користите језичку непроменљиву уколико се име прослеђује из језичке датотеке.',
	'MODULE_TYPE'				=> 'Тип модула',

	'NO_CATEGORY_TO_MODULE'	=> 'Не могу да пребацим категорију у модул. Молимо вас да уклоните/преместите све подмодуле пре извођења овог поступка.',
	'NO_MODULE'				=> 'Нема пронађених модула.',
	'NO_MODULE_ID'			=> 'Није изабран id модула.',
	'NO_MODULE_LANGNAME'	=> 'Нема изабраног језичког имена модула.',
	'NO_PARENT'				=> 'Без Родитеља',

	'PARENT'				=> 'Родитељски',
	'PARENT_NO_EXIST'		=> 'Родитељ не постоји.',

	'SELECT_MODULE'			=> 'Изаберите модул',
));
