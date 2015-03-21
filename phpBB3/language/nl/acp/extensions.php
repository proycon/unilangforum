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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Extensie',
	'EXTENSIONS'				=> 'Extensies',
	'EXTENSIONS_ADMIN'			=> 'Extensiebeheer',
	'EXTENSIONS_EXPLAIN'		=> 'Het extensiebeheer is een gereedschap in je phpBB-forum die je in staat stelt om alle extensiestatussen en informatie te beheren.',
	'EXTENSION_INVALID_LIST'	=> 'De “%s” extensie is niet geldig.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'De geselecteerde extensie is niet beschikbaar voor dit forum, controleer of je phpBB en PHP-versies toegestaan zijn (zie de detailspagina).',
	'EXTENSION_DIR_INVALID'		=> 'De geselecteerde extensie heeft een ongeldige mapstructuur en kan niet ingeschakeld worden.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'De geselecteerde extensie kan niet worden ingeschakeld, controleer de extensie’s vereisten.',

	'DETAILS'				=> 'Details',

	'EXTENSIONS_DISABLED'	=> 'Uitgeschakelde Extensies',
	'EXTENSIONS_ENABLED'	=> 'Ingeschakelde Extensies',

	'EXTENSION_DELETE_DATA'	=> 'Verwijder data',
	'EXTENSION_DISABLE'		=> 'Uitschakelen',
	'EXTENSION_ENABLE'		=> 'Inschakelen',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Het verwijderen van extensiedata verwijderd alle data en instellingen. De extensiebestanden zullen behouden blijven zodat het weer ingeschakeld kan worden.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Het uitschakelen van een extensie behoud de bestanden, data en instellingen, maar verwijderd iedere functionaliteit toegevoegd door de extensie aan je forum.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Het inschakelen van een extensie staat je toe om deze te gebruiken op je forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'De extensiedata wordt momenteel verwijderd. Verlaat of ververs deze pagina niet tot dat dit gedaan is.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'De extensie wordt momenteel uitgeschakeld. Verlaat of ververs deze pagina niet tot dat dit gedaan is.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'De extensie wordt momenteel ingeschakeld. Verlaat of ververs deze pagina niet tot dat dit gedaan is.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'De extensiedata is succesvol verwijderd',
	'EXTENSION_DISABLE_SUCCESS'		=> 'De extensie is succesvol uitgeschakeld',
	'EXTENSION_ENABLE_SUCCESS'		=> 'De extensie is succesvol ingeschakeld',

	'EXTENSION_NAME'			=> 'Extensienaam',
	'EXTENSION_ACTIONS'			=> 'Acties',
	'EXTENSION_OPTIONS'			=> 'Opties',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Het bijwerken van een extensie',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>De extensie uitschakelen</li>
			<li>De extensiebestanden verwijderen van het bestandssysteem</li>
			<li>De nieuwe bestanden uploaden</li>
			<li>De extensie inschakelen</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Het compleet verwijderen van een extensie van je forum',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>De extensie uitschakelen</li>
			<li>De extensiedata verwijderen</li>
			<li>De extensiebestanden verwijderen van het bestandssysteem</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Weet je zeker dat je de data die geassocieerd wordt met  “%s” wilt verwijderen?<br /><br />Dit zal alle data en instellingen van de extensie verwijderen en kan niet ongedaan gemaakt worden!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Weet je zeker dat je de extensie “%s” wilt uitschakelen?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Weet je zeker dat je de extensie “%s” wilt inschakelen?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Weet je zeker dat je het gebruik van de onstabiele versie wilt forceren?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Terug naar de extensielijst',

	'EXT_DETAILS'			=> 'Extensiedetails',
	'DISPLAY_NAME'			=> 'Weergave naam',
	'CLEAN_NAME'			=> 'Schone naam',
	'TYPE'					=> 'Type',
	'DESCRIPTION'			=> 'Beschrijving',
	'VERSION'				=> 'Versie',
	'HOMEPAGE'				=> 'Homepage',
	'PATH'					=> 'Bestandpad',
	'TIME'					=> 'Publicatiedatum',
	'LICENSE'				=> 'Licentie',

	'REQUIREMENTS'			=> 'Benodigdheden',
	'PHPBB_VERSION'			=> 'phpBB-versie',
	'PHP_VERSION'			=> 'PHP-versie',
	'AUTHOR_INFORMATION'	=> 'Auteursinformatie',
	'AUTHOR_NAME'			=> 'Naam',
	'AUTHOR_EMAIL'			=> 'E-mail',
	'AUTHOR_HOMEPAGE'		=> 'Homepage',
	'AUTHOR_ROLE'			=> 'Rol',
	
	'NOT_UP_TO_DATE'		=> '%s is niet up-to-date',
	'UP_TO_DATE'			=> '%s is up-to-date',
	'ANNOUNCEMENT_TOPIC'	=> 'Versie aankondiging',
	'DOWNLOAD_LATEST'		=> 'Versie downloaden',
	'NO_VERSIONCHECK'		=> 'Er is geen versie informatie controle opgegeven.',
	
	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Controleer alle versies opnieuw',
	'FORCE_UNSTABLE'					=> 'Controleer altijd voor onstabiele versies',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Versie controle-instellingen',
	
	'META_FIELD_NOT_SET'            => 'Verplicht meta-veld %s is niet ingesteld.',
	'META_FIELD_INVALID'            => 'Meta-veld %s is ongeldig.',		
	
));
