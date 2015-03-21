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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permissies zijn heel gedetailleerd instelbaar en zijn onderverdeeld in vier grootte secties:</p>

		<h2>Globale Permissies</h2>
		<p>Deze permissies worden gebruikt om toegang op een globale niveau te controleren en zijn van toepassing op het gehele forum. Ze zijn verder opgedeeld in Gebruikerspermissies, Groepspermissies, Beheerderspermissies en Globale Moderatorpermissies.</p>

		<h2>Forum Gebaseerde Permissies</h2>
		<p>Deze permissies worden gebruikt om toegang per forum te controleren. Ze zijn verder opgedeeld in Forumpermissies, Forum Moderatorpermissies, Gebruiker Forumpermissies en Groep Forumpermissies.</p>

		<h2>Permissierollen</h2>
		<p>Deze rollen worden gebruikt om verschillende sets van permissies aan te maken van verschillende permissietypes om later toegewezen te kunnen worden op een rol-gebaseerde basis. De standaard rollen omvatten het beheer van het forum klein en groot, waarbinnen ieder van de vier divisies je rollen kan toevoegen/wijzigen/verwijderen naar gelang je eigen keuze.</p>

		<h2>Permissiemaskers</h2>
		<p>Deze maskers worden gebruikt om de effectieve permissies toegewezen aan Gebruikers, Moderators (Lokaal en Globaal), Beheerders of Forums te bekijken.</p>

		<br />

		<p>Voor meer informatie over het opzetten en beheren van permissies op je phpBB3 forum, lees dan <a href="http://www.phpbbservice.nl/docs/handleiding/3.0/snellestart/snel_permissies.php">Hoofdstuk 1.5 van onze Snelle Start Gids</a>.</p>
	',

	'ACL_NEVER'				=> 'Nooit',
	'ACL_SET'				=> 'Permissies instellen',
	'ACL_SET_EXPLAIN'		=> 'Permissies zijn gebaseerd op een simpele <strong>JA</strong>/<strong>NEE</strong> systeem. Door een optie in te stellen op <strong>NOOIT</strong> voor een gebruiker of gebruikersgroep, dan zal deze instelling iedere andere waarde, die daar aan wordt toegewezen, overschreven worden. Als je geen waarde wenst toe te wijzen voor een optie voor deze gebruiker of gebruikersgroep, selecteer dan <strong>NEE</strong>. Als waardes ergens anders worden toegewezen voor deze optie, zullen ze in plaats daarvoor gebruikt worden, anders wordt <strong>NOOIT</strong> verondersteld. Alle objecten gemarkeerd (met het afvinkvakje voor hen) zal de permissieset die je hebt gedefinieerd kopiëren.',
	'ACL_SETTING'			=> 'Instelling',

	'ACL_TYPE_A_'			=> 'Beheerderspermissies',
	'ACL_TYPE_F_'			=> 'Forumpermissies',
	'ACL_TYPE_M_'			=> 'Moderatorpermissies',
	'ACL_TYPE_U_'			=> 'Gebruikerspermissies',

	'ACL_TYPE_GLOBAL_A_'	=> 'Beheerderspermissies',
	'ACL_TYPE_GLOBAL_U_'	=> 'Gebruikerspermissies',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale Moderatorpermissies',
	'ACL_TYPE_LOCAL_M_'		=> 'Forum Moderatorpermissies',
	'ACL_TYPE_LOCAL_F_'		=> 'Forumpermissies',

	'ACL_NO'				=> 'Nee',
	'ACL_VIEW'				=> 'Permissies bekijken',
	'ACL_VIEW_EXPLAIN'		=> 'Hier kan je de effectieve permissies bekijken die de gebruiker/groep heeft. Een rood vierkantje geeft aan dat de gebruiker/groep de permissie niet heeft, een groen vierkantje geeft aan dat de gebruiker/groep de permissie heeft.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Hier kan je beheerderspermissies toewijzen aan gebruikers of groepen. Alle gebruikers met beheerderspermissies kunnen het beheerderspaneel bekijken.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Hier kan je gebruikers en groepen toewijzen als forummoderators. Om gebruikers toegang tot forums te geven, om globale moderatorpermissies of beheerders te definiëren, gebruik daarvoor de juiste pagina.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Hier kan je wijzigen welke gebruikers en groepen toegang hebben tot welke forums. Om moderators toe te wijzen of beheerders te definiëren, gebruik daarvoor de juiste pagina.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Hier kan je forumpermissies kopiëren van één forum naar één of meerdere andere forums.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Hier kan je globale moderatorpermissies toewijzen aan gebruikers of groepen. Deze moderators zijn net als gewone moderators, behalve dan dat ze toegang hebben tot ieder forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je forumpermissies toewijzen aan groepen.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Hier kan je globale permissies toewijzen aan groepen - gebruikerspermissies, globale moderatorpermissies en beheerderspermissies. Gebruikerspermissies bevatten ook mogelijkheden zoals het gebruik van avatars, het versturen van privéberichten, enzovoort; globale moderatorpermissies bevatten het goedkeuren van berichten, beheer van onderwerpen, beheer van verbanningen, enzovoort en als laatste beheerderspermissies bevatten het aanpassen van permissies, eigen BBCodes definiëren, beheer van forums, enzovoort. Individuele gebruikerspermissies zouden alleen veranderd moeten worden in uitzonderlijke gevallen, de voorkeursmethode is het plaatsen van gebruikers in groepen en dan het toewijzen van groepspermissies.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Hier kan je de rollen voor beheerderspermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Hier kan je de rollen voor forumpermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Hier kan je de rollen voor moderatorpermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Hier kan je de rollen voor gebruikerspermissies beheren. Rollen zijn effectieve permissies, als je een rol veranderd, zullen de gebruikers/groepen, waar deze rol aan toegewezen is, de permissies ook van veranderen.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je forumpermissies toewijzen aan gebruikers.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Hier kan je globale permissies toewijzen aan gebruikers - gebruikerspermissies, globale moderatorpermissies en beheerderspermissies. Gebruikerspermissies bevatten ook mogelijkheden zoals het gebruik van avatars, het versturen van privéberichten, enzovoort; globale moderatorpermissies bevatten het goedkeuren van berichten, beheer van onderwerpen, beheer van verbanningen, enzovoort en als laatste beheerderspermissies bevatten het aanpassen van permissies, eigen BBCodes definiëren, beheer van forums enzovoort. Om deze instellingen voor een groot aantal gebruikers te veranderen is het groepspermissiesysteem de voorkeursmethode. Gebruikerpermissies zouden alleen veranderd moeten worden in uitzonderlijke gevallen, de voorkeursmethode is het plaatsen van gebruikers in groepen en dan het toewijzen van groepspermissies.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Hier kan je de effectieve beheerderspermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Hier kan je de globale moderatorpermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Hier kan je de forumpermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen en forums.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Hier kan je de forum-moderatorpermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen en forums.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Hier kan je de effectieve gebruikerspermissies bekijken die toegewezen zijn aan de geselecteerde gebruikers/groepen.',

	'ADD_GROUPS'				=> 'Groepen toevoegen',
	'ADD_PERMISSIONS'			=> 'Permissies toevoegen',
	'ADD_USERS'					=> 'Gebruikers toevoegen',
	'ADVANCED_PERMISSIONS'		=> 'Uitgebreide Permissies',
	'ALL_GROUPS'				=> 'Selecteer alle groepen',
	'ALL_NEVER'					=> 'Alles <strong>NOOIT</strong>',
	'ALL_NO'					=> 'Alles <strong>NEE</strong>',
	'ALL_USERS'					=> 'Selecteer alle gebruikers',
	'ALL_YES'					=> 'Alles <strong>JA</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Alle permissies toepassen',
	'APPLY_PERMISSIONS'			=> 'Permissies toepassen',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'De permissies en de rol die opgegeven zijn voor dit item zullen alleen toegepast worden op dit item en alle geselecteerde items.',
	'AUTH_UPDATED'				=> 'Permissies zijn bijgewerkt.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Weet je zeker dat je deze operatie wilt uitvoeren? Let op dat dit alle bestaande permissies van de geselecteerde doelen zal overschrijven.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Het bronforum waar je de permissies van wilt kopiëren.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'De doelforums waar je de gekopieerde permissies op wilt toepassen.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_TO'					=> 'Pas permissies toe op',

	'CREATE_ROLE'				=> 'Rol aanmaken',
	'CREATE_ROLE_FROM'			=> 'Gebruik instellingen van…',
	'CUSTOM'					=> 'Eigen…',

	'DEFAULT'					=> 'Standaard',
	'DELETE_ROLE'				=> 'Rol verwijderen',
	'DELETE_ROLE_CONFIRM'		=> 'Weet je zeker dat je deze rol wilt verwijderen? Items met deze rol toegewezen zullen hun permissie instellingen <strong>niet</strong> verliezen.',
	'DISPLAY_ROLE_ITEMS'		=> 'Bekijk items die deze rol gebruiken',

	'EDIT_PERMISSIONS'			=> 'Permissies wijzigen',
	'EDIT_ROLE'					=> 'Rol wijzigen',

	'GROUPS_NOT_ASSIGNED'		=> 'Geen groep toegewezen aan deze rol',

	'LOOK_UP_GROUP'				=> 'Zoek gebruikersgroep op',
	'LOOK_UP_USER'				=> 'Zoek gebruiker op',

	'MANAGE_GROUPS'		=> 'Beheer groepen',
	'MANAGE_USERS'		=> 'Beheer gebruikers',

	'NO_AUTH_SETTING_FOUND'		=> 'Permissie-instellingen niet opgegeven.',
	'NO_ROLE_ASSIGNED'			=> 'Geen rol toegewezen…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Door het kiezen van deze rol veranderd er niks aan de permissies rechts. Als je alle permissies wilt verwijderen moet je gebruik maken van de “Alles <strong>NEE</strong>” link.',
	'NO_ROLE_AVAILABLE'			=> 'Geen rol beschikbaar',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Geef een naam op voor de rol.',
	'NO_ROLE_SELECTED'			=> 'Rol kan niet gevonden worden.',
	'NO_USER_GROUP_SELECTED'	=> 'Je hebt geen enkele gebruiker of groep geselecteerd.',

	'ONLY_FORUM_DEFINED'	=> 'Je hebt alleen forums opgegeven in je selectie. Selecteer ook tenminste één gebruiker of groep.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Permissies en rollen zullen ook toegepast worden aan alle geselecteerde objecten',
	'PLUS_SUBFORUMS'				=> '+ Subforums',

	'REMOVE_PERMISSIONS'			=> 'Permissies verwijderen',
	'REMOVE_ROLE'					=> 'Rol verwijderen',
	'RESULTING_PERMISSION'			=> 'Permissieresultaat',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol succesvol toegevoegd.',
	'ROLE_ASSIGNED_TO'				=> 'Gebruikers/Groepen toegewezen aan %s',
	'ROLE_DELETED'					=> 'Rol succesvol verwijderd.',
	'ROLE_DESCRIPTION'				=> 'Rolbeschrijving',

	'ROLE_ADMIN_FORUM'			=> 'Forumbeheerder',
	'ROLE_ADMIN_FULL'			=> 'Volledige beheerder',
	'ROLE_ADMIN_STANDARD'		=> 'Standaard beheerder',
	'ROLE_ADMIN_USERGROUP'		=> 'Gebruiker- en groepsbeheerder',
	'ROLE_FORUM_BOT'			=> 'Bot toegang',
	'ROLE_FORUM_FULL'			=> 'Volledige toegang',
	'ROLE_FORUM_LIMITED'		=> 'Beperkte toegang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Beperkte toegang en peilingen',
	'ROLE_FORUM_NOACCESS'		=> 'Geen toegang',
	'ROLE_FORUM_ONQUEUE'		=> 'Op Moderatiewachtrij',
	'ROLE_FORUM_POLLS'			=> 'Standaard toegang en peilingen',
	'ROLE_FORUM_READONLY'		=> 'Alleen lezen toegang',
	'ROLE_FORUM_STANDARD'		=> 'Standaard toegang',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Pas geregistreerde gebruikerstoegang',
	'ROLE_MOD_FULL'				=> 'Volledige moderator',
	'ROLE_MOD_QUEUE'			=> 'Wachtrijmoderator',
	'ROLE_MOD_SIMPLE'			=> 'Eenvoudige moderator',
	'ROLE_MOD_STANDARD'			=> 'Standaard moderator',
	'ROLE_USER_FULL'			=> 'Alle functies',
	'ROLE_USER_LIMITED'			=> 'Beperkte functies',
	'ROLE_USER_NOAVATAR'		=> 'Geen avatar',
	'ROLE_USER_NOPM'			=> 'Geen privéberichten',
	'ROLE_USER_STANDARD'		=> 'Standaard functies',
	'ROLE_USER_NEW_MEMBER'		=> 'Pas geregistreerde gebruikerfuncties',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Heeft toegang tot het forumbeheer en de instellingen van de forumpermissies.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Heeft toegang tot alle beheerdersfuncties van dit forum.<br />Niet aanbevolen.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Heeft toegang tot de meeste beheerdersfuncties, maar kan niet server of systeem gerelateerde functies gebruiken.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kan gebruikers en groepen beheren: kan permissies en instellingen veranderen, verbanningen en rangen beheren.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Deze rol is aanbevolen voor bots.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Kan alle forumfuncties gebruiken, inclusief het plaatsen van aankondigingen en stickies. Kan ook de vloedbeperking negeren.<br />Niet aanbevolen voor normale gebruikers.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Kan enkele forumfuncties gebruiken, maar kan geen bestanden bijvoegen of gebruik maken van berichticonen.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Hetzelfde als “Beperkte Toegang”, maar kan ook peilingen aanmaken.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Heeft geen toegang tot het forum en kan het forum niet zien.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Kan de meeste forumfuncties gebruiken, inclusief bijlagen, maar berichten en onderwerpen moeten eerst goedgekeurd worden door een moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Hetzelfde als “Standaard Toegang”, maar kan ook peilingen aanmaken.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Kan het forum lezen, maar kan geen nieuwe onderwerpen aanmaken of reageren op onderwerpen.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Kan de meeste forumfuncties gebruiken, inclusief bijlagen en het verwijderen van eigen onderwerpen, maar kan eigen onderwerpen niet sluiten en kan geen peilingen aanmaken.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Een rol voor leden van de speciale “Pas Geregistreerde Gebruikers”-groep; bevat <strong>NOOIT</strong> permissies om functies uit te sluiten voor nieuwe gebruikers.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Kan alle moderatorfuncties gebruiken, inclusief verbanningen.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Kan de moderatie-wachtrij gebruiken om berichten goed te keuren en te wijzigen, maar verder niks.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Kan alleen de basis onderwerpacties gebruiken. Kan geen waarschuwingen versturen of de moderatie-wachtrij gebruiken.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Kan de meeste moderatorfuncties gebruiken, maar kan geen gebruikers verbannen of de berichtenauteur veranderen.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kan alle beschikbare functies voor gebruikers gebruiken, inclusief het veranderen van gebruikersnaam of het negeren van de vloedbeperking.<br />Niet aanbevolen.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Kan enkele gebruikersfuncties gebruiken. Bijlagen, e-mails of instant messages zijn niet toegestaan.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Kan een beperkt aantal functies gebruiken, en kan niet de Avatar-functie gebruiken.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Kan een beperkt aantal functies gebruiken, en kan niet de Privéberichten-functie gebruiken.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Kan de meeste, maar niet alle functies gebruiken. Kan gebruikersnaam niet veranderen of de vloedbeperking negeren, bijvoorbeeld.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Een rol voor leden van de speciale “Pas Geregistreerde Gebruikers”-groep; bevat <strong>NOOIT</strong> permissies om functies uit te sluiten voor nieuwe gebruikers.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Je kan een korte beschrijving invoeren over wat de rol doet of waar het voor bedoeld is. De tekst die je hier invoert zal ook weergegeven worden in de permissieschermen.',
	'ROLE_DESCRIPTION_LONG'			=> 'De rolbeschrijving is te lang, beperk het tot 4000 karakters.',
	'ROLE_DETAILS'					=> 'Roldetails',
	'ROLE_EDIT_SUCCESS'				=> 'Rol succesvol gewijzigd.',
	'ROLE_NAME'						=> 'Rolnaam',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Een rol genaamd <strong>%s</strong> bestaat al voor de gespecificeerde permissietype.',
	'ROLE_NOT_ASSIGNED'				=> 'Rol is nog niet toegewezen.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Het geselecteerde forum(s) bestaat niet.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'De geselecteerde groep(en) bestaat niet.',
	'SELECTED_USER_NOT_EXIST'		=> 'De geselecteerde gebruiker(s) bestaat niet.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Het forum dat je hier selecteert, zal ook alle subforums bevatten in de selectie.',
	'SELECT_ROLE'					=> 'Selecteer rol…',
	'SELECT_TYPE'					=> 'Selecteer type',
	'SET_PERMISSIONS'				=> 'Permissies instellen',
	'SET_ROLE_PERMISSIONS'			=> 'Rolpermissies instellen',
	'SET_USERS_PERMISSIONS'			=> 'Gebruikerspermissies instellen',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Gebruiker forumpermissies instellen',

	'TRACE_DEFAULT'					=> 'Standaard staat iedere permissie op <strong>NEE</strong> (niet ingesteld). De permissie kan dus overschreven worden door andere instellingen.',
	'TRACE_FOR'						=> 'Tracering voor',
	'TRACE_GLOBAL_SETTING'			=> '%s (globaal)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Deze groepspermissie is ingesteld op <strong>NOOIT</strong> net zoals het totale resultaat, zodat het oude resultaat wordt behouden.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Deze groepspermissie voor dit forum is ingesteld op <strong>NOOIT</strong> net zoals het totale resultaat, zodat het oude resultaat behouden blijft.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Deze groepspermissie is ingesteld op <strong>NOOIT</strong>, wat de nieuwe totale waarde wordt, omdat het nog niet ingesteld was (ingesteld op <strong>NEE</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Deze groepspermissie voor dit forum is ingesteld op <strong>NOOIT</strong>, wat de nieuwe totale waarde wordt, omdat het nog niet ingesteld was (ingesteld op <strong>NEE</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Deze groepspermissie is ingesteld op <strong>NOOIT</strong> wat de totale <strong>JA</strong> zal overschrijven naar een <strong>NOOIT</strong> voor deze gebruiker.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Deze groepspermissie voor dit forum is ingesteld op <strong>NOOIT</strong> wat de totale <strong>JA</strong> zal overschrijven naar een <strong>NOOIT</strong> voor deze gebruiker.',
	'TRACE_GROUP_NO'				=> 'De permissie is <strong>NEE</strong> voor deze groep, zodat de oude totale waarde behouden blijft.',
	'TRACE_GROUP_NO_LOCAL'			=> 'De permissie is <strong>NEE</strong> voor deze groep in dit forum, zodat de oude totale waarde behouden blijft.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Deze groepspermissie is ingesteld op <strong>JA</strong>, maar de totale <strong>NOOIT</strong> kan niet overschreven worden.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Deze groepspermissie voor dit forum is ingesteld op <strong>JA</strong>, maar de totale <strong>NOOIT</strong> kan niet overschreven worden.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Deze groepspermissie is ingesteld op <strong>JA</strong> wat de nieuwe totale waarde wordt, omdat het nog niet ingesteld was (ingesteld op <strong>NEE</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Deze groepspermissie voor dit forum is ingesteld op <strong>JA</strong> wat de totale nieuwe waarde wordt, omdat het nog niet ingesteld was (ingsteld op <strong>NEE</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Deze groepspermissie is ingesteld op <strong>JA</strong> en de totale permissie is al ingesteld op <strong>JA</strong>, dus het totale resultaat blijft behouden.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Deze groepspermissie voor dit forum is ingesteld op <strong>JA</strong> en de totale permissie is al ingesteld op <strong>JA</strong>, dus het totale resultaat blijft behouden.',
	'TRACE_PERMISSION'				=> 'Traceer permissie - %s',
	'TRACE_RESULT'					=> 'Traceringsresultaat',
	'TRACE_SETTING'					=> 'Traceringsinstelling',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'De forum onafhankelijke gebruikerspermissie evalueert naar <strong>JA</strong> maar de totale permissies is al ingesteld op <strong>JA</strong>, dus wordt het totale resultaat behouden. %sTraceer globale permissie%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'De forum onafhankelijke gebruikerspermissie evalueert naar <strong>JA</strong> waardoor het lokale resultaat van <strong>NOOIT</strong> wordt overschreven. %sTraceer globale permissie%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'De forum onafhankelijke gebruikerspermissie evalueert naar <strong>NOOIT</strong> waardoor het geen invloed heeft op de lokale permissie. %sTraceer globale permissie%s',

	'TRACE_USER_FOUNDER'					=> 'De gebruiker is een oprichter, daarom zijn de beheerderspermissies altijd ingesteld op <strong>JA</strong>.',
	'TRACE_USER_KEPT'						=> 'De gebruikerspermissie is <strong>NEE</strong> dus de oude totale waarde wordt behouden.',
	'TRACE_USER_KEPT_LOCAL'					=> 'De gebruikerspermissie voor dit forum is <strong>NEE</strong> dus de oude totale waarde wordt behouden.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'De gebruikerspermissie is ingesteld op <strong>NOOIT</strong> en de totale waarde is ingesteld op <strong>NOOIT</strong>, er veranderd dus niks.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'De gebruikerspermissie voor dit forum is ingesteld op <strong>NOOIT</strong> en de totale waarde is ingesteld op <strong>NOOIT</strong>, er veranderd dus niks.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'De gebruikerspermissie is ingesteld op <strong>NOOIT</strong> wat de totale waard wordt, omdat deze ingesteld was op NEE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <strong>NOOIT</strong> wat de totale waarde wordt, omdat deze ingesteld was op NEE.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'De gebruikerspermissie is ingesteld op <strong>NOOIT</strong> en overschrijft daarmee de vorige <strong>JA</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <strong>NOOIT</strong> en overschrijft daarmee de vorige <strong>JA</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'De gebruikerspermissie is <strong>NEE</strong> en de totale waarde is ingesteld op NEE, dus wordt het standaard <strong>NOOIT</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'De gebruikerspermissie voor dit forum is <strong>NEE</strong> en de totale waarde is ingesteld op NEE, dus wordt het standaard <strong>NOOIT</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'De gebruikerspermissie is ingesteld op <strong>JA</strong> maar de totale <strong>NOOIT</strong> kan niet worden overschreven.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <strong>JA</strong> maar de totale <strong>NOOIT</strong> kan niet worden overschreven.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'De gebruikerspermissie is ingesteld op <strong>JA</strong> wat de totale waarde wordt, omdat het ingesteld was op <strong>NEE</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'De gebruikerspermissie voor dit forum is ingesteld op <strong>JA</strong> wat de totale waarde wordt, omdat het ingesteld was op <strong>NEE</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'De gebruikerspermissie is ingesteld op <strong>JA</strong> en de totale waarde is ingesteld op <strong>JA</strong>, er veranderd dus niks.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'De gebruikerspermissie voor dit forum is ingesteld op <strong>JA</strong> en de totale waarde is ingesteld op <strong>JA</strong>, er veranderd dus niks.',
	'TRACE_WHO'								=> 'Wie',
	'TRACE_TOTAL'							=> 'Totaal',

	'USERS_NOT_ASSIGNED'			=> 'Geen gebruikers toegewezen aan deze rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'is een lid van de volgende voorgedefinieerde groepen',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'is een lid van de volgende gebruikers-gedefinieerde groepen',

	'VIEW_ASSIGNED_ITEMS'	=> 'Bekijk toegewezen items',
	'VIEW_LOCAL_PERMS'		=> 'Lokale permissies',
	'VIEW_GLOBAL_PERMS'		=> 'Globale permissies',
	'VIEW_PERMISSIONS'		=> 'Bekijk permissies',

	'WRONG_PERMISSION_TYPE'				=> 'Verkeerde permissietype geselecteerd.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'De permissieinstellingen zijn in een verkeerd formaat, phpBB kan ze niet correct verwerken.',
));
