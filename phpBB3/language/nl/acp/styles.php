<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
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
	'ACP_STYLES_EXPLAIN'	=> 'Hier kan je de beschikbare stijlen van je forum beheren. Je kan bestaande stijlen wijzigen, verwijderen, deactiveren, heractiveren en nieuwe stijlen installeren. Je kan hier ook zien hoe je stijl eruit ziet door de voorbeeldfunctie te gebruiken. Hier wordt ook het aantal gebruikers weergegeven die de stijl gebruiken, let op: dat het overschrijven van de gebruikersstijl hier niet zal worden weergegeven.',
	
	'CANNOT_BE_INSTALLED'			=> 'Kan niet worden geïnstalleerd',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Weet je zeker dat je de geselecteerde stijlen wilt verwijderen?',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Je kan de standaard stijl niet deactiveren.',
	'DELETE_FROM_FS'			=> 'Verwijder uit bestandssysteem',
	'DELETE_STYLE_FILES_FAILED'	=> 'Fout bij het verwijderen van de bestanden van de stijl "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'De bestanden van de stijl "%s" zijn verwijderd.',
	'DETAILS'					=> 'Details',

	'INHERITING_FROM'			=> 'Erft van',
	'INSTALL_STYLE'				=> 'Installeer stijl',
	'INSTALL_STYLES'			=> 'Installeer stijlen',
	'INSTALL_STYLES_EXPLAIN'	=> 'Hier kan je nieuwe stijlen installeren.<br />Als je een bepaalde stijl niet in onderstaande lijst staat, controleer dan of de stijl al is geïnstalleerd. Als de stijl nog niet geïnstalleerd is, kijk dan of je hem op de goede manier hebt geüpload.',
	'INVALID_STYLE_ID'			=> 'Ongeldige stijl-ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Er komen geen stijlen overeen met je opdracht.',
	'NO_UNINSTALLED_STYLE'		=> 'Geen ongeïnstalleerde stijlen gevonden.',

	'PURGED_CACHE'				=> 'Cache is geleegd.',
	
	'REQUIRES_STYLE'			=> 'Deze stijl heeft de stijl "%s" nodig om geïnstalleerd te kunnen worden.',

	'STYLE_ACTIVATE'			=> 'Activeren',
	'STYLE_ACTIVE'				=> 'Actief',
	'STYLE_DEACTIVATE'			=> 'Deactiveren',
	'STYLE_DEFAULT'				=> 'Maak standaard stijl',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Je moet de stijl eerst activeren, voordat je dit je standaard stijl kan maken.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Ongeldige hoofdstijl.',
	'STYLE_ERR_NAME_EXIST'		=> 'Er bestaat al een stijl met dezelfde naam.',
	'STYLE_ERR_STYLE_NAME'		=> 'Er moet een naam voor de stijl worden ingevuld.',
	'STYLE_INSTALLED'			=> 'De stijl "%s" is geïnstalleerd.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES' => 'Ga terug naar de lijst met geïnstalleerde stijlen',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES' => 'Installeer meer stijlen',
	'STYLE_NAME'				=> 'Stijlnaam',
	'STYLE_NAME_RESERVED'		=> 'De stijl "%s" kan niet geïnstaleerd worden omdat deze naam gereserveerd is.',
	'STYLE_NOT_INSTALLED'		=> 'De stijl "%s" is niet geïnstalleerd.',
	'STYLE_PATH'				=> 'Stijlpad',	
	'STYLE_UNINSTALL'			=> 'Verwijderen',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'De stijl "%s" kan niet worden verwijderd omdat één of meer stijlen deze stijl nodig hebben om goed te kunnen functioneren.',
	'STYLE_UNINSTALLED'			=> 'De stijl "%s" is succesvol verwijderd.',
	'STYLE_USED_BY'				=> 'Gebruikt door (inclusief robots)',

	'UNINSTALL_DEFAULT'		=> 'Je kan de standaard stijl niet verwijderen.',
));
