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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Hier kan je alle gebruikersgroepen beheren. Je kan nieuwe groepen aanmaken, bestaande groepen verwijderen en wijzigen. Verder kan je hier groepsleiders kiezen, schakelen tussen open/verborgen/gesloten groepsstatus en de groepsnaam en beschrijving instellen.',
	'ADD_GROUP_CATEGORY'			=> 'Categorie toevoegen',
	'ADD_USERS'						=> 'Gebruikers toevoegen',
	'ADD_USERS_EXPLAIN'				=> 'Hier kan je nieuwe gebruikers toevoegen aan de groep. Je kan selecteren of deze groep de nieuwe standaard groep wordt voor de geselecteerde gebruikers. Je kan ze ook aanstellen als groepsleiders. Vul iedere gebruikersnaam in op een aparte regel.',

	'COPY_PERMISSIONS'				=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Eenmaal aangemaakt zal de groep dezelfde permissies hebben als de groep die je hier selecteert.',
	'CREATE_GROUP'					=> 'Nieuwe groep aanmaken',

	'GROUPS_NO_MEMBERS'				=> 'Deze groep heeft geen leden',
	'GROUPS_NO_MODS'				=> 'Geen groepsleiders opgegeven',

	'GROUP_APPROVE'					=> 'Lid goedkeuren',
	'GROUP_APPROVED'				=> 'Goedgekeurde Leden',
	'GROUP_AVATAR'					=> 'Groepsavatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Deze afbeelding zal weergegeven worden in het groepspaneel.',
	'GROUP_CATEGORY_NAME'			=> 'Categorienaam',
	'GROUP_CLOSED'					=> 'Gesloten',
	'GROUP_COLOR'					=> 'Groepskleur',
	'GROUP_COLOR_EXPLAIN'			=> 'Definieert de kleur waarin de gebruikersnamen van de leden weergegeven zal worden, laat leeg voor gebruikers standaard.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Weet je zeker dat je de gebruiker %2$s wilt toevoegen aan de groep?',
		2	=> 'Weet je zeker dat je de gebruikers %2$s wilt toevoegen aan de groep?',
	),
	'GROUP_CREATED'					=> 'Groep is aangemaakt.',
	'GROUP_DEFAULT'					=> 'Maak groep standaard voor lid',
	'GROUP_DEFS_UPDATED'			=> 'Standaard groep ingesteld voor alle geselecteerde leden.',
	'GROUP_DELETE'					=> 'Verwijder lid van groep',
	'GROUP_DELETED'					=> 'Groep verwijderd en gebruiker standaard groep ingesteld.',
	'GROUP_DEMOTE'					=> 'Groepsleider degraderen',
	'GROUP_DESC'					=> 'Groepsbeschrijving',
	'GROUP_DETAILS'					=> 'Groepsdetails',
	'GROUP_EDIT_EXPLAIN'			=> 'Hier kan je een bestaande groep wijzigen. Je kan de naam, beschrijving en type (open, gesloten, etc.) veranderen. Je kan ook bepaalde groepswijde opties instellen zoals kleur, rang, etc. Veranderingen die hier worden gemaakt, overschrijven de instellingen van de gebruiker. Let op dat groepsleden de groepsavatar instellingen kunnen overschrijven, tenzij je de juiste gebruikerspermissies instelt.',
	'GROUP_ERR_USERS_EXIST'			=> 'De gespecificeerde gebruikers zijn al lid van deze groep.',
	'GROUP_FOUNDER_MANAGE'			=> 'Alleen oprichter kan de groep beheren',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Het beheren van deze groep beperken naar alleen de oprichters. Gebruikers met groepspermissies kunnen deze groep nog steeds zien alsmede de groepsleden.',
	'GROUP_HIDDEN'					=> 'Verborgen',
	'GROUP_LANG'					=> 'Groepstaal',
	'GROUP_LEAD'					=> 'Groepsleiders',
	'GROUP_LEADERS_ADDED'			=> 'Nieuwe leiders toegevoegd aan de groep.',
	'GROUP_LEGEND'					=> 'Groep weergeven in de legenda',
	'GROUP_LIST'					=> 'Bestaande leden',
	'GROUP_LIST_EXPLAIN'			=> 'Dit is een complete lijst van alle bestaande gebruikers met lidmaatschap van deze groep. Je kan leden verwijderen (behalve in bepaalde speciale groepen) of nieuwe leden toevoegen als je dat wilt.',
	'GROUP_MEMBERS'					=> 'Groepsleden',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dit is een complete lijst van alle leden van deze groep. Het bevat aparte gedeeltes voor leiders, wachtende en bestaande leden. Vanuit hier kan je alle aspecten beheren van wie lidmaatschap heeft van deze groep en wat hun rol is. Om een leider te verwijderen maar ze wel in de groep te laten gebruik “Degradeer” in plaats van verwijder. Gebruik “Promoveer” om van een bestaand lid een groepsleider te maken.',
	'GROUP_MESSAGE_LIMIT'			=> 'Groeps-privéberichten limiet per map',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Deze instelling overschrijft de per-gebruiker berichtenlimiet. Een waarde van 0 betekend dat de gebruikers standaard limiet gebruikt wordt.',
	'GROUP_MODS_ADDED'				=> 'Nieuwe groepsleiders succesvol toegevoegd.',
	'GROUP_MODS_DEMOTED'			=> 'Groepsleiders succesvol gedegradeerd.',
	'GROUP_MODS_PROMOTED'			=> 'Groepsleden succesvol gepromoveerd.',
	'GROUP_NAME'					=> 'Groepsnaam',
	'GROUP_NAME_TAKEN'				=> 'De groepsnaam die je hebt ingevuld is al in gebruik, kies een alternatieve naam.',
	'GROUP_OPEN'					=> 'Open',
	'GROUP_PENDING'					=> 'Wachtende leden',
	'GROUP_MAX_RECIPIENTS'			=> 'Maximum aantal toegestane ontvangers per privébericht',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Het maximum aantal toegestane ontvangers in een privébericht. Als 0 is ingevuld, zal de forum-wijde instelling gebruikt worden.',
	'GROUP_OPTIONS_SAVE'			=> 'Groepswijde opties',
	'GROUP_PROMOTE'					=> 'Promoveer naar groepsleider',
	'GROUP_RANK'					=> 'Groepsrang',
	'GROUP_RECEIVE_PM'				=> 'Groep kan privéberichten ontvangen',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Let op dat verborgen groepen geen berichten kunnen ontvangen, ongeacht deze instelling.',
	'GROUP_REQUEST'					=> 'Aanvraag',
	'GROUP_SETTINGS_SAVE'			=> 'Groepswijde instellingen',
	'GROUP_SKIP_AUTH'				=> 'Sluit groepsleider uit van permissies',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Wanneer ingeschakeld zal de groepsleider niet de permissies van de groep erven.',
	'GROUP_SPECIAL'					=> 'Voor-gedefinieerd',
	'GROUP_TEAMPAGE'				=> 'Geef groep weer op teampagina',
	'GROUP_TYPE'					=> 'Groepstype',
	'GROUP_TYPE_EXPLAIN'			=> 'Dit bepaalt of gebruikers lid kunnen worden of deze groep kunnen zien.',
	'GROUP_UPDATED'					=> 'Groepsvoorkeuren succesvol geüpdate.',

	'GROUP_USERS_ADDED'				=> 'Nieuwe gebruikers succesvol toegevoegd aan groep.',
	'GROUP_USERS_EXIST'				=> 'De geselecteerde gebruikers zijn al lid.',
	'GROUP_USERS_REMOVE'			=> 'Gebruikers verwijderd van groep en nieuwe standaards succesvol ingesteld.',

	'LEGEND_EXPLAIN'				=> 'Dit zijn de groepen die weergegeven worden op de groepslegenda:',
	'LEGEND_SETTINGS'				=> 'Legenda-instellingen',
	'LEGEND_SORT_GROUPNAME'			=> 'Sorteer legenda op groepsnaam',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'De volgorde hieronder wordt genegeerd als deze optie ingeschakeld is.',

	'MANAGE_LEGEND'			=> 'Beheer groepslegenda',
	'MANAGE_TEAMPAGE'		=> 'Beheer teampagina',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Maak groep standaard voor ieder groepslid',
	'MEMBERS'				=> 'Leden',

	'NO_GROUP'					=> 'Geen groep opgegeven.',
	'NO_GROUPS_ADDED'			=> 'Nog geen groepen toegevoegd.',
	'NO_GROUPS_CREATED'			=> 'Nog geen groepen aangemaakt.',
	'NO_PERMISSIONS'			=> 'Permissies niet kopiëren',
	'NO_USERS'					=> 'Je hebt geen gebruikers ingevuld.',
	'NO_USERS_ADDED'			=> 'Geen gebruikers toegevoegd aan de groep.',
	'NO_VALID_USERS'			=> 'Je hebt geen gebruikers ingevuld die geschikt zijn voor die actie.',

	'SELECT_GROUP'				=> 'Selecteer een groep',
	'SPECIAL_GROUPS'			=> 'Voorgedefinieerde groepen',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Voorgedefinieerde groepen zijn speciale groepen, ze kunnen niet verwijderd worden of direct aangepast worden. Je kan echter nog steeds gebruikers toevoegen en de basisinstellingen aanpassen.',

	'TEAMPAGE'					=> 'Teampagina',
	'TEAMPAGE_DISP_ALL'			=> 'Alle lidmaatschappen',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Alleen standaardgroep van gebruiker',
	'TEAMPAGE_DISP_FIRST'		=> 'Alleen eerste lidmaatschap',
	'TEAMPAGE_EXPLAIN'			=> 'Dit zijn de groepen welke weergegeven worden op de teampagina:',
	'TEAMPAGE_FORUMS'			=> 'Gemodereerde forums weergeven',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Indien ingesteld op ja, dan zal een lijst met alle forums waar de mderators moderatorpermissies hebben, weergegeven worden in hun rij. Dit kan vrij intensief zijn voor de database bij grote forums.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Gebruikerslidmaatschap weergeven',
	'TEAMPAGE_SETTINGS'			=> 'Teampagina-instellingen',
	'TOTAL_MEMBERS'				=> 'Leden',

	'USERS_APPROVED'				=> 'Gebruikers succesvol goedgekeurd.',
	'USER_DEFAULT'					=> 'Gebruiker standaard',
	'USER_DEF_GROUPS'				=> 'Gebruikers-gedefinieerde groepen',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dit zijn groepen aangemaakt door jezelf of een andere beheerder op dit forum. Je kan lidmaatschappen beheren alsmede groepsinstellingen wijzigen of zelfs de groep verwijderen.',
	'USER_GROUP_DEFAULT'			=> 'Instellen als standaard groep',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Door dit op ja in te stellen, zal deze groep de standaard groep worden van de toegevoegde gebruikers.',
	'USER_GROUP_LEADER'				=> 'Instellen als groepsleider',
));
