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
	'EXTENSION'					=> 'Tillägg',
	'EXTENSIONS'				=> 'Tillägg',
	'EXTENSIONS_ADMIN'			=> 'Tilläggshanteraren',
	'EXTENSIONS_EXPLAIN'		=> 'Tilläggshanteraren är ett verktyg i ditt phpBB forum som tillåter dig att hantera alla dina tilläggs status och visa information om dem.',
	'EXTENSION_INVALID_LIST'	=> '“%s” tillägget är inte giltigt.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Det valda tillägget är inte tillgängligt för detta forumet, vänligen verifiera att din phpBB-version samt din php-version är tillåtna (se detaljsidan).',
	'EXTENSION_DIR_INVALID'		=> 'Det valda tillägget har en ogiltig mappstruktur och kan inte aktiveras.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Det valda tillägget kan inte aktiveras, vänligen kontrollera tilläggets krav.',

	'DETAILS'				=> 'Detaljer',

	'EXTENSIONS_DISABLED'	=> 'Inaktiverad tillägg',
	'EXTENSIONS_ENABLED'	=> 'Aktiverade tillägg',

	'EXTENSION_DELETE_DATA'	=> 'Ta bort data',
	'EXTENSION_DISABLE'		=> 'Inaktivera',
	'EXTENSION_ENABLE'		=> 'Aktivera',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Genom att ta bort ett tilläggs data tar du bort all data och inställningar. Tilläggets filerna behålls så att det kan aktiveras på nytt.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Inaktivera ett tillägg behåller dess filer, data och inställningar, men tar bort all funktionalitet som lagts till av tillägget.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Genom att aktivera ett tillägg så kommer du att kunna använda det på ditt forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Tilläggets data håller på att tas bort. Lämna inte eller uppdatera sidan förrän den är klar.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Tilläggets håller på att bli inaktiverat. Lämna inte eller uppdatera sidan förrän den är klar.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Tilläggets håller på att bli aktiverat. Lämna inte eller uppdatera sidan förrän den är klar.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Tilläggets data är borttaget',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Tillägget blev inaktiveat',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Tillägget blev aktiverat',

	'EXTENSION_NAME'			=> 'Tilläggets namn',
	'EXTENSION_ACTIONS'			=> 'Åtgärder',
	'EXTENSION_OPTIONS'			=> 'Inställningar',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Uppdatera ett tillägg',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Inaktivera tillägget</li>
			<li>Ta bort tilläggets filer från filsystemet</li>
			<li>Ladda upp de nya filerna</li>
			<li>Aktivera tillägget</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Tar bort ett tillägg helt och hållet från ditt forum',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Inaktivera tillägget</li>
			<li>Ta bort tilläggets data</li>
			<li>Ta bort tillägget helt och hållet från ditt filsystem</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Är du säker på att du vill radera den data som är associerade med “%s”?<br /><br />Detta tar bort alla sina data och inställningar, och kan inte göras ogjort!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Är du säker på att du vill inaktivera “%s” tillägget?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Är du säker på att du vill aktivera “%s” tillägget?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Är du säker på att du vill påtvinga användande utav en instabil version?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Återgå till tilläggslistan',

	'EXT_DETAILS'			=> 'Tilläggsdetaljer',
	'DISPLAY_NAME'			=> 'Visa namn',
	'CLEAN_NAME'			=> 'Töm namn',
	'TYPE'					=> 'Typ',
	'DESCRIPTION'			=> 'Beskrivning',
	'VERSION'				=> 'Version',
	'HOMEPAGE'				=> 'Framsida',
	'PATH'					=> 'Sökväg',
	'TIME'					=> 'Utgavs',
	'LICENSE'				=> 'Licens',

	'REQUIREMENTS'			=> 'Krav',
	'PHPBB_VERSION'			=> 'phpBB-version',
	'PHP_VERSION'			=> 'PHP-version',
	'AUTHOR_INFORMATION'	=> 'Skapareinformation',
	'AUTHOR_NAME'			=> 'Namn',
	'AUTHOR_EMAIL'			=> 'E-post',
	'AUTHOR_HOMEPAGE'		=> 'Hemsida',
	'AUTHOR_ROLE'			=> 'Roll',

	'NOT_UP_TO_DATE'		=> '%s är inte uppdaterad',
	'UP_TO_DATE'			=> '%s är uppdaterad',
	'ANNOUNCEMENT_TOPIC'	=> 'Tillkännagivande',
	'DOWNLOAD_LATEST'		=> 'Hämta version',
	'NO_VERSIONCHECK'		=> 'Ingen versionskontroll är angiven.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Kolla om alla versioner',
	'FORCE_UNSTABLE'					=> 'Kolla alltid efter instabila versioner',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Versionsinställningar',

	'META_FIELD_NOT_SET'	=> 'Krävd meta data %s har inte ställts in.',
	'META_FIELD_INVALID'	=> 'Meta data %s är ogiltig.',
));
