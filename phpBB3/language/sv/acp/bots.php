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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Hantera robotar',
	'BOTS_EXPLAIN'		=> '“Robotar”, “spindlar” eller “crawlers” är automatiserade agenter som vanligtvis används av sökmotorer för att uppdatera sina databaser. Eftersom de sällan på ett korrekt sätt använder sig av sessioner så kan de förvanska besöksräknare, öka belastningen på servern, och ibland misslyckas med att indexera webbplatsen korrekt. Här kan du definiera en speciell typ av användare för att kunna övervinna dessa problem.',
	'BOT_ACTIVATE'		=> 'Aktivera',
	'BOT_ACTIVE'		=> 'Robot aktiv',
	'BOT_ADD'			=> 'Lägg till robot',
	'BOT_ADDED'			=> 'Den nya roboten lades till.',
	'BOT_AGENT'			=> '“User agent”-matchning',
	'BOT_AGENT_EXPLAIN'	=> 'En sträng som ska matchas mot robotens “user agent”, partiella matchningar är tillåtna.',
	'BOT_DEACTIVATE'	=> 'Inaktivera',
	'BOT_DELETED'		=> 'Roboten togs bort.',
	'BOT_EDIT'			=> 'Redigera robotar',
	'BOT_EDIT_EXPLAIN'	=> 'Här kan du lägga till eller redigera en existerande robot. Du kan definiera en “user agent”-sträng och/eller en eller flera IP-adresser (eller en kedja av adresser) som ska matchas. Var försiktig när du definierar “user agent”-strängar eller adresser. Du kan också specificera en stil eller ett språk som ska visas för roboten när den besöker ditt forum. Detta kan låta dig minska bandbreddsanväningen genom att ställa in en enklare forumstil för robotar. Kom ihåg att ställa in lämpliga behörigheter för den speciella Robot-användargruppen.',
	'BOT_LANG'			=> 'Robotens språk',
	'BOT_LANG_EXPLAIN'	=> 'Språket som visas för roboten när den besöker forumet.',
	'BOT_LAST_VISIT'	=> 'Senaste besöket',
	'BOT_IP'			=> 'Robotens IP-addres',
	'BOT_IP_EXPLAIN'	=> 'Partiella matchningar är tillåtna, separera IP-adresser med ett kommatecken.',
	'BOT_NAME'			=> 'Robotens namn',
	'BOT_NAME_EXPLAIN'	=> 'Används endast för din egen information.',
 	'BOT_NAME_TAKEN'	=> 'Namnet används redan på ditt forum och kan inte användas för roboten.',
	'BOT_NEVER'			=> 'Aldrig',
	'BOT_STYLE'			=> 'Robotens forumstil',
	'BOT_STYLE_EXPLAIN'	=> 'Forumstilen som kommer att visas för roboten när den besöker forumet.',
	'BOT_UPDATED'		=> 'Den existerande roboten uppdaterades.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Den “user agent” du angav liknar den du redan använder. Justera agenten för denna robot.',
	'ERR_BOT_NO_IP'				=> 'IP-adresserna du angav var felaktiga eller så kunde inte värdnamnet hittas.',
	'ERR_BOT_NO_MATCHES'		=> 'Du måste ange minst antingen en “user agent” eller en IP-adress som ska matchas mot denna robot.',

	'NO_BOT'		=> 'Hittade ingen robot med det angivna ID:t.',
	'NO_BOT_GROUP'	=> 'Hittade inte den speciella robotgruppen.',
));
