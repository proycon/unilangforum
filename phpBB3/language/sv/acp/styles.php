<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_STYLES_EXPLAIN'	=> 'Här kan du skapa en ny stil. Beroende på din serverkonfiguration och filbehörigheter så kan du ha ytterligare alternativ här. Till exempel kan det gå att basera denna stil på en redan existerande. Det kan också gå att ladda upp eller importera (från store-katalogen) ett stilarkiv. Om du laddar upp eller importerar ett arkiv så kommer stilnamnet att avgöras automatiskt.',
	'CANNOT_BE_INSTALLED'			=> 'Kan inte bli installerad',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Är du säker på att du vill avinstallera valda stilar?',
	'COPYRIGHT'						=> 'Copyright',	
	'DEACTIVATE_DEFAULT'		=> 'Du kan inte inaktivera standardstilen.',
	'DELETE_FROM_FS'			=> 'Ta bort från filsystemet',
	'DELETE_STYLE_FILES_FAILED'	=> 'Det gick inte att ta bort stilen "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Filer till stilen "%s" har tagits bort.',
	'DETAILS'					=> 'Detaljer',
	'INHERITING_FROM'			=> 'Ärver malluppsättnig av',
	'INSTALL_STYLE'				=> 'Installera stil',
	'INSTALL_STYLES'			=> 'Installera stilar',
	'INSTALL_STYLES_EXPLAIN'	=> 'Här kan du installera en ny stil och om lämpligt de motsvarande stilelementen. Om du redan har de relevanta stilelementen installerade så kommer de inte skrivas över. Vissa stilar kräver att vissa stilelement redan ska finnas installerade. Om du försöker installera en sådan stil och inte har de krävda elementen så kommer du att informeras om det.',
	'INVALID_STYLE_ID'			=> 'Invalid stil-ID.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Inga stilar stämmer in.',
	'NO_UNINSTALLED_STYLE'		=> 'Inga oinstallerade stilar hittades.',
	'PURGED_CACHE'				=> 'Cachen tömdes.',
	'REQUIRES_STYLE'			=> 'Denna stilen kräver att stilen "%s" är installerad.',
	'STYLE_ACTIVATE'			=> 'Aktivera',
	'STYLE_ACTIVE'				=> 'Aktiv',
	'STYLE_DEACTIVATE'			=> 'Inaktivera',
	'STYLE_DEFAULT'				=> 'Gör till standardstil',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Du måste aktivera stilen innan du gör den till standardstil.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Invalid föräldrarstil.',	
	'STYLE_ERR_NAME_EXIST'		=> 'En stil med det namnet finns redan.',
	'STYLE_ERR_STYLE_NAME'		=> 'Du måste ange ett namn för denna stil.',
	'STYLE_NAME_RESERVED'		=> 'Stilen "%s" kan inte installeras, för att den är reserverad.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Return to installed styles list',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Install more styles',
	'STYLE_NAME'				=> 'Stilnamn',
	'STYLE_NOT_INSTALLED'		=> 'Style "%s" was not installed.',
	'STYLE_PATH'				=> 'Stilsökväg',
	'STYLE_UNINSTALL'			=> 'Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Används av (inklusive robotar)',
	'UNINSTALL_DEFAULT'		=> 'Du kan inte avinstallera standardstilen.',

));
