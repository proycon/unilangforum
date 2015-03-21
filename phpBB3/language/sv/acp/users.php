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
	'ADMIN_SIG_PREVIEW'		=> 'Förhandsvisning av signatur',
	'AT_LEAST_ONE_FOUNDER'	=> 'Du kan inte ändra denna grundare till normal användare. Det måste finnas minst en grundare aktiverad för detta forum. Om du vill ändra denna användares status, gör en annan användare till grundare först.',

 	'BAN_ALREADY_ENTERED'	=> 'Bannlysningen hade redan införts sen tidigare. Bannlysningslistan uppdaterades inte.',
	'BAN_SUCCESSFUL'		=> 'Bannlysningen infördes.',
	'CANNOT_BAN_ANONYMOUS'	=> 'Du kan inte bannlysa det anonyma kontot. Behörigheter för anonyma användare kan ställas in under behörighetsfliken.',

	'CANNOT_BAN_FOUNDER'			=> 'Du kan inte bannlysa grundare.',
	'CANNOT_BAN_YOURSELF'			=> 'Du kan inte bannlysa dig själv.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Du kan inte inaktivera robotkonton. Inaktivera roboten på robotsidan istället.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Du kan inte inaktivera grundare.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Du kan inte inaktivera ditt eget konto.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Du kan inte påtvinga återaktivering på robotkonton. Återaktivera roboten på robotsidan istället.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Du kan inte påtvinga återaktivering på grundare.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Du kan inte påtvinga återaktivering på ditt eget konto.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Du kan inte ta bort gästkontot.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Du har inte behörighet att ta bort grundarkonton.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Du kan inte ta bort ditt eget konto.',
	'CANNOT_SET_FOUNDER_IGNORED'		=> 'Du kan inte göra ignorerade användare till grundare.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Du måste aktivera användarna innan du kan göra de till grundare, endast aktiverade användare kan befordras.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Du behöver endast ange detta om du byter användarens e-postadress.',

	'DELETE_POSTS'			=> 'Ta bort inlägg',
	'DELETE_USER'			=> 'Ta bort användare',
	'DELETE_USER_EXPLAIN'	=> 'Observera att borttagande av användare är slutgiltigt, borttagna användare kan inte återställas. Olästa privata meddelanden skickade utav denna användaren kommer att bli borttagna och inte kunna läsas utav mottagaren',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Påtvingade återaktivering.',
	'FOUNDER'						=> 'Grundare',
	'FOUNDER_EXPLAIN'				=> 'Grundare har alla administrationsbehörigheter och kan aldrig bannlysas, tas bort eller ändras av användare som inte är grundare.',

	'GROUP_APPROVE'					=> 'Godkänn medlem',
	'GROUP_DEFAULT'					=> 'Gör till standardgrupp för medlem',
	'GROUP_DELETE'					=> 'Ta bort användaren från gruppen',
	'GROUP_DEMOTE'					=> 'Avsäg gruppledarskap',
	'GROUP_PROMOTE'					=> 'Befordra till gruppledare',

	'IP_WHOIS_FOR'			=> 'IP whois för %s',

	'LAST_ACTIVE'			=> 'Senast aktiv',

	'MOVE_POSTS_EXPLAIN'	=> 'Välj det forum som du vill att alla användarens inlägg ska flyttas till.',

	'NO_SPECIAL_RANK'		=> 'Ingen speciell titel tilldelad',
	'NO_WARNINGS'			=> 'Inga varningar.',
	'NOT_MANAGE_FOUNDER'	=> 'Du försökte hantera en användare med grundarstatus. Endast grundare får hantera andra grundare.',

	'QUICK_TOOLS'			=> 'Snabbverktyg',

	'REGISTERED'			=> 'Registrerad',
	'REGISTERED_IP'			=> 'Registrerad från IP',
	'RETAIN_POSTS'			=> 'Behåll inlägg',

	'SELECT_FORM'			=> 'Välj formulär',
	'SELECT_USER'			=> 'Välj användare',

	'USER_ADMIN'					=> 'Användaradministration',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivera konto',
	'USER_ADMIN_ACTIVATED'			=> 'Användaren aktiverades.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Tog bort visningsbilden från användarkontot.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Bannlys genom e-post',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-postadress bannlyst via användarhanteringen',
	'USER_ADMIN_BAN_IP'				=> 'Bannlys genom IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP bannlyst via användarhanteringen',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Användarnamn bannlyst via användarhanteringen',
	'USER_ADMIN_BAN_USER'			=> 'Bannlys genom användarnamn',
	'USER_ADMIN_DEACTIVATE'			=> 'Inaktivera konto',
	'USER_ADMIN_DEACTIVED'			=> 'Användaren inaktiverades.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Ta bort alla bilagor',
	'USER_ADMIN_DEL_AVATAR'			=> 'Ta bort visningsbild',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Töm PM-utkorgen',
	'USER_ADMIN_DEL_POSTS'			=> 'Ta bort alla inlägg',
	'USER_ADMIN_DEL_SIG'			=> 'Ta bort signatur',
	'USER_ADMIN_EXPLAIN'			=> 'Här kan du ändra dina användares information och vissa specifika inställningar.',
	'USER_ADMIN_FORCE'				=> 'Påtvinga återaktivering',
	'USER_ADMIN_LEAVE_NR'			=> 'Ta bort från gruppen “Nya medlemmar”',
	'USER_ADMIN_MOVE_POSTS'			=> 'Flytta alla inlägg',
	'USER_ADMIN_SIG_REMOVED'		=> 'Tog bort signaturen från användarkontot.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Tog bort alla filer användaren bifogat.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Visningsbilden kan inte visas, då de inte är tillåtna.',
	'USER_AVATAR_UPDATED'			=> 'Uppdaterade användarens visningsbild.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Den nuvarande visningsbilden kan inte visas, då filtypen inte är tillåten.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Egna profilfält',
	'USER_DELETED'					=> 'Användaren togs bort.',
	'USER_GROUP_ADD'				=> 'Lägg till användare till grupp',
	'USER_GROUP_NORMAL'				=> 'Användardefinierade grupper som användaren är medlem i',
	'USER_GROUP_PENDING'			=> 'Grupper som användaren väntar på godkännande för',
	'USER_GROUP_SPECIAL'			=> 'Fördefinierade grupper som användaren är medlem i',
	'USER_LIFTED_NR'				=> 'Tog bort användarens status som ny medlem.',
	'USER_NO_ATTACHMENTS'			=> 'Det finns inga bifogade filer att visa.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Användaren har inga inlägg att ta bort.',
	'USER_OUTBOX_EMPTIED'			=> 'Användarens utkorg har tömts.',
	'USER_OUTBOX_EMPTY'				=> 'Användarens utkorg var redan tom.',
	'USER_OVERVIEW_UPDATED'			=> 'Användardetaljer uppdaterade.',
	'USER_POSTS_DELETED'			=> 'Tog bort alla inlägg som denna användare gjort.',
	'USER_POSTS_MOVED'				=> 'Flyttade användarens inlägg till målforumet.',
	'USER_PREFS_UPDATED'			=> 'Användarens inställningar uppdaterades.',
	'USER_PROFILE'					=> 'Användarprofil',
	'USER_PROFILE_UPDATED'			=> 'Användarens profil uppdaterades.',
	'USER_RANK'						=> 'Användartitel',
	'USER_RANK_UPDATED'				=> 'Användarens titel uppdaterades.',
	'USER_SIG_UPDATED'				=> 'Användarens signatur uppdaterades.',
	'USER_WARNING_LOG_DELETED'		=> 'Det finns ingen tillgänglig information, loggen har kanske raderats.',
	'USER_TOOLS'					=> 'Grundläggande verktyg',
));
