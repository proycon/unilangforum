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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Овде можете подешавати главне поставке за прилоге и додатне посебне категорије.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Овде можете да додате, бришете, измените или онемогућите ваше проширене групе. Даље поставке укључују додељивање посебних категорија групама, промену начина за преузимање и одређивање иконице за додавање која ће бити приказана испред прилога који припада групи.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Овде можете управљати вашим дозвољеним екстензијама. Да бисте активирали вашу екстензију, молимо вас да идете на панел управљање групама екстензија. Строго препоручујемо да не дозволите екстензије са скриптама (као што су <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, и тако даље…).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Овде можете видети неповезане прилоге односно орфане. Ово се углавном дешава када корисници додају прилог али не пошаљу поруку. Можете да обришете ове прилоге или да их додате постојећим порукама. Додавање порукама захтева ваљан ID поруке, који морате сами да утврдите. Ово ће доделити већ додат прилог поруци коју сте унели.',
	'ADD_EXTENSION'						=> 'Додај екстензију',
	'ADD_EXTENSION_GROUP'				=> 'Додај групу екстензија',
	'ADMIN_UPLOAD_ERROR'				=> 'Грешке у току покушаја да се дода датотека: “%s”.',
	'ALLOWED_FORUMS'					=> 'Дозвољени форуми',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Омогућава да пошаљете додељене екстензије на изабране (или на све уколико су изабрани) форуме.',
	'ALLOWED_IN_PM_POST'				=> 'Дозвољено',
	'ALLOW_ATTACHMENTS'					=> 'Дозволи прилоге',
	'ALLOW_ALL_FORUMS'					=> 'Дозволи све форуме',
	'ALLOW_IN_PM'						=> 'Дозвољено у приватним порукама',
	'ALLOW_PM_ATTACHMENTS'				=> 'Дозволи прилоге у приватним порукама',
	'ALLOW_SELECTED_FORUMS'				=> 'Само форуми изабрани испод',
	'ASSIGNED_EXTENSIONS'				=> 'Додељене екстензије',
	'ASSIGNED_GROUP'					=> 'Додељене групе екстензија',
	'ATTACH_EXTENSIONS_URL'				=> 'Екстензије',
	'ATTACH_EXT_GROUPS_URL'				=> 'Групе екстензија',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Највећа величина датотеке',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Највећа величина сваке датотеке. Уколико је ова вредност 0, величина датотеке за додавање је једино ограничена вашом PHP конфигурацијом.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Највећа величина датотеке у приватним порукама',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Највећа величина сваке датотеке, додате приватној поруци, са 0 постаје неограничено.',
	'ATTACH_ORPHAN_URL'					=> 'Неповезани прилози',
	'ATTACH_POST_ID'					=> 'ID поруке',
	'ATTACH_POST_TYPE'					=> 'Тип поруке',
	'ATTACH_QUOTA'						=> 'Укупна квота за прилоге',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Највише простора на хард диску доступно за све прилоге на форуму, са 0 постаје неограничено.',
	'ATTACH_TO_POST'					=> 'Додај датотеку поруци',

	'CAT_FLASH_FILES'			=> 'Flash датотеке',
	'CAT_IMAGES'				=> 'Слике',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime датотеке',
	'CAT_RM_FILES'				=> 'RealMedia датотеке',
	'CAT_WM_FILES'				=> 'Windows Media датотеке',
	'CHECK_CONTENT'				=> 'Провера датотека прилога',
	'CHECK_CONTENT_EXPLAIN'		=> 'Неки прегледачи могу бити преварени да преузму неисправан mimetype за додате датотеке. Ова поставка обезбеђује да такве датотеке које ово вероватно узрокују буду одбијене.',
	'CREATE_GROUP'				=> 'Направи нову групу',
	'CREATE_THUMBNAIL'			=> 'Направи изведену сличицу',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Направи изведену сличицу у свим могућим ситуацијама.',

	'DEFINE_ALLOWED_IPS'			=> 'Одреди дозвољене IP адресе/сервере',
	'DEFINE_DISALLOWED_IPS'			=> 'Одреди недозвољене IP адресе/сервере',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Да бисте одредили неколико различитих IP адреса или сервера унесите сваки од њих у нови ред. За одређивање опсега IP адреса одвојите почетак и крај цртицом (-), а за одређивање џокера користите “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Можете уклонити (или поново-укључити) вишеструке IP адресе одједном користећи одговарајућу комбинацију миша и тастатуре за ваш рачунар и прегледач. Искључене IP адресе имају плаву позадину.',
	'DISPLAY_INLINED'				=> 'Прикажи слике у једном реду',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Уколико је подешено на Не слике прилога ће се приказати као веза.',
	'DISPLAY_ORDER'					=> 'Редослед приказивања прилога',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Приказује прилоге поређане по времену.',

	'EDIT_EXTENSION_GROUP'			=> 'Учитај групу екстензија',
	'EXCLUDE_ENTERED_IP'			=> 'Омогућите ово за искључивање унесене IP адресе/сервера.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Искључи IP из дозвољених IP адреса/сервера',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Искључи IP из недозвољених IP адреса/сервера',
	'EXTENSIONS_UPDATED'			=> 'Екстензије су успешно ажуриране.',
	'EXTENSION_EXIST'				=> 'Екстензија %s већ постоји.',
	'EXTENSION_GROUP'				=> 'Група екстензија',
	'EXTENSION_GROUPS'				=> 'Групе екстензија',
	'EXTENSION_GROUP_DELETED'		=> 'Група екстензија је успешно обрисана.',
	'EXTENSION_GROUP_EXIST'			=> 'Група екстензија %s већ постоји.',

	'EXT_GROUP_ARCHIVES'			=> 'Архиве',
	'EXT_GROUP_DOCUMENTS'			=> 'Документи',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Преузимљиве Датотеке',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash Датотеке',
	'EXT_GROUP_IMAGES'				=> 'Слике',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Plain Text',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FILES_GONE'			=> 'Неки од прилога које сте изабрали за брисање не постоје. Можда су већ обрисани. Прилози који постоје су обрисани.',
	'FILES_STATS_WRONG'		=> 'Ваша статистика датотека изгледа није ажурна и треба да буде поново усклађена. Тренутне вредности: број прилога = %1$d, укупна величина прилога = %2$s.<br />Кликните на %3$shere%4$s да поново ускладите.',

	'GO_TO_EXTENSIONS'		=> 'Иди на плочу за управљање екстензијама',
	'GROUP_NAME'			=> 'Име групе',

	'IMAGE_LINK_SIZE'			=> 'Димензије везе слике',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Приказује слику прилога као текстуалну везу у једном реду уколико је слика већа од овога. За онемогућавање оваквог понашања, поставите вредности на 0px пута 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick путања',
	'IMAGICK_PATH_EXPLAIN'		=> 'Пуна путања до imagemagick апликације за пребацивање, н.пр. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Највећи број прилога по поруци',
	'MAX_ATTACHMENTS_PM'			=> 'Највећи број прилога по приватној поруци',
	'MAX_EXTGROUP_FILESIZE'			=> 'Највећа величина датотеке',
	'MAX_IMAGE_SIZE'				=> 'Највеће димензије слике',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Највећа димензија приложених слика. Поставите обе вредности на 0px пута 0px за онемогућавање провере димензија.',
	'MAX_THUMB_WIDTH'				=> 'Највећа ширина изведене сличице у пикселима',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Изведена сличица неће премашити ширину постављену овде.',
	'MIN_THUMB_FILESIZE'			=> 'Најмања величина датотеке изведене сличице',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Не прави изведену сличицу за слике мање од овога.',
	'MODE_INLINE'					=> 'У једном реду',
	'MODE_PHYSICAL'					=> 'Физички',

	'NOT_ALLOWED_IN_PM'			=> 'Није дозвољено у приватним порукама',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Није дозвољено',
	'NOT_ASSIGNED'				=> 'Није додељено',
	'NO_ATTACHMENTS'			=> 'Нису пронађени прилози за овај период.',
	'NO_EXT_GROUP'				=> 'Ниједна',
	'NO_EXT_GROUP_NAME'			=> 'Није унето име групе',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Није изабрана група екстензија.',
	'NO_FILE_CAT'				=> 'Ниједна',
	'NO_IMAGE'					=> 'Без слике',
	'NO_THUMBNAIL_SUPPORT'		=> 'Подршка за изведене сличице је онемогућена. За исправно функционисање треба да буде омогућена или GD екстензија или инсталиран imagemagick. Ниједно није пронађено.',
	'NO_UPLOAD_DIR'				=> 'Фасцикла за додавања коју сте изабрали не постоји.',
	'NO_WRITE_UPLOAD'			=> 'Фасцикла за додавања коју сте изабрали није уписљива. Молимо вас да промените дозволе како бисте омогућили серверу да уписује у њих.',

	'ONLY_ALLOWED_IN_PM'	=> 'Дозвољено само у приватним порукама',
	'ORDER_ALLOW_DENY'		=> 'Дозволи',
	'ORDER_DENY_ALLOW'		=> 'Забрани',

	'REMOVE_ALLOWED_IPS'			=> 'Уклони или поново-укључи <em>дозвољене</em> IP адресе/сервере',
	'REMOVE_DISALLOWED_IPS'			=> 'Уклони или поново-укључи <em>недозвољене</em> IP адресе/сервере',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Да ли сигурно желите да поново ускладите статистику датотека?',

	'SEARCH_IMAGICK'				=> 'Претрага за Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Списак Дозвола/Забрана',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Промени подразумевано понашање када су безбедна преузимања омогућена од списка Дозвола/Забрана у оно од <strong>бела листа</strong> (Дозвола) или <strong>црна листа</strong> (Забрана).',
	'SECURE_DOWNLOADS'				=> 'Омогући безбедна преузимања',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Са овом омогућеном поставком, преузимања су ограничена на IP адресе’s/сервере које сте ви одредили.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Безбедна Преузимања нису омогућена. Поставке испод ће бити примењене после омогућавања безбедних преузимања.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Списак IP адреса је успешно ажуриран.',
	'SECURE_EMPTY_REFERRER'			=> 'Дозволи празног препоручиоца',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Безбедна преузимања су основана на препоручиоцима. Да ли желите да омогућите преузимања за оне који занемарују препоручиоца?',
	'SETTINGS_CAT_IMAGES'			=> 'Поставке категорије слика',
	'SPECIAL_CATEGORY'				=> 'Посебна категорија',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Посебне категорије се разликују у начину приказивања у порукама.',
	'SUCCESSFULLY_UPLOADED'			=> 'Успешно додата.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Група екстензија је успешно додата.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Група екстензија је успешно ажурирана.',

	'UPLOADING_FILES'				=> 'Додавање датотека',
	'UPLOADING_FILE_TO'				=> 'Додавање датотеке “%1$s” у поруку број %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Немате дозволу да додајете датотеке на форум “%s”.',
	'UPLOAD_DIR'					=> 'Фасцикла за додавања',
	'UPLOAD_DIR_EXPLAIN'			=> 'Путања за складиштење прилога. Молимо знајте да уколико промените ову фасциклу а имате већ додате прилоге треба да ручно умножите датотеке на њихово ново место.',
	'UPLOAD_ICON'					=> 'Додај иконицу',
	'UPLOAD_NOT_DIR'				=> 'Место за додавање које сте назначили не изгледа да је фасцикла.',
));
