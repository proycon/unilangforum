<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-05-30 - GunChleoc http://www.foramnagaidhlig.net is akerbeltz http://www.akerbeltz.org
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
	'CONFIG_NOT_EXIST'					=> 'Tha roghainn “%s” an rèiteachaidh a dhìth gun dùil.',

	'GROUP_NOT_EXIST'					=> 'Tha am buidheann “%s” a dhìth gun dùil.',

   'MIGRATION_APPLY_DEPENDENCIES'      => 'Cuir na h-eisimeileachdan aig %s an sàs.',
	'MIGRATION_DATA_DONE'				=> 'Dàta air a stàladh: %1$s; Ùine: %2$.2f diog',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'A’ stàladh dàta: %1$s; Ùine: %2$.2f diog',
   'MIGRATION_DATA_RUNNING'         => 'A’ stàladh dàta: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Tha an imrich air stàladh gu h-èifeachdach mar-thà (air a leigeil seachad): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Chaidh rudeigin cearr rè an iarrtais agus chaidh exception a thilgeil. Dh’aisig sinn na cùisean mar a bha iad ro na h-atharraichean cho math ’s a ghabhadh, ach bu chòir dhut sùil a thoirt air a’ bhòrd airson mearachdan.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Cha ghabh an imrich “%1$s” coileanadh, tha an imrich “%2$s” a dhìth.',
   'MIGRATION_NOT_VALID'            => 'Chan eil %s ’na imrich dhligheach.',
	'MIGRATION_SCHEMA_DONE'				=> 'Chaidh sgeama a stàladh: %1$s; Ùine: %2$.2f diog',
   'MIGRATION_SCHEMA_RUNNING'         => 'A’ stàladh sgeama: %s.',

	'MODULE_ERROR'						=> 'Thachair mearachd rè cruthachadh mòideil: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Tha faidhle fiosrachadh a’ mhòideil a dhìth a tha riatanach: %2$s',
	'MODULE_NOT_EXIST'					=> 'Tha mòideal riatanach a dhìth: %s',

	'PERMISSION_NOT_EXIST'				=> 'Tha roghainn cead “%s” a dhìth gun dùil.',

	'ROLE_NOT_EXIST'					=> 'Tha ùghdarras cead “%s” a dhìth gun dùil.',
));
