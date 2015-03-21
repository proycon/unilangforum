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
	'ADMIN_SIG_PREVIEW'		=> 'Onderschriftvoorbeeld',
	'AT_LEAST_ONE_FOUNDER'	=> 'Je kan deze oprichter niet veranderen naar een normale gebruiker. Er moet tenminste één oprichter aanwezig zijn op dit forum. Als je de oprichterstatus van deze gebruiker wilt veranderen, promoveer een andere gebruiker dan eerst naar oprichter.',

	'BAN_ALREADY_ENTERED'	=> 'De verbanning is de vorige keer al succesvol ingevoerd. De banlijst is niet bijgewerkt.',
	'BAN_SUCCESSFUL'		=> 'Verbanning succesvol ingevoerd.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Je kan de gastaccount niet verbannen. Permissies voor anonieme gebruikers kunnen ingesteld worden onder de permissies tab.',
	'CANNOT_BAN_FOUNDER'			=> 'Je kan de oprichteraccounts niet verbannen.',
	'CANNOT_BAN_YOURSELF'			=> 'Je kan jezelf niet verbannen.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Je kan botaccounts niet deactiveren. Deactiveer de bot in plaats hiervan op de botpagina.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Je kan de oprichteraccount niet deactiveren.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Je kan je eigen account niet deactiveren.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Je kan geen heractivatie van botaccounts forceren. Heractiveer de bot in plaats hiervan op de botpagina.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Je kan geen heractivatie van oprichteraccounts forceren.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Je kan geen heractivatie van je eigen account forceren.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Je kan niet het gastaccount verwijderen.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Je kan geen oprichteraccounts verwijderen.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Je kan niet je eigen account verwijderen.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Je kan genegeerde gebruikers niet promoveren naar oprichters.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Je moet gebruikers eerst activeren voordat je ze naar oprichter kan promoveren, alleen geactiveerde gebruikers kunnen gepromoveerd worden.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Je hoeft dit alleen maar op te geven als je het e-mailadres van de gebruiker aan het wijzigen bent.',

	'DELETE_POSTS'			=> 'Verwijder berichten',
	'DELETE_USER'			=> 'Verwijder gebruiker',
	'DELETE_USER_EXPLAIN'	=> 'Let op dat het verwijderen van een gebruiker definitief is, dit kan niet meer ongedaan gemaakt worden. Ongelezen privéberichten verstuurd door deze gebruiker zullen worden verwijderd en zal niet beschikbaar zijn voor hun ontvangers.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Heractivatie succesvol geforceerd.',
	'FOUNDER'						=> 'Oprichter',
	'FOUNDER_EXPLAIN'				=> 'Oprichters hebben alle administratieve permissies en kunnen nooit verbannen, verwijderd of gewijzigd worden door niet-oprichter leden.',

	'GROUP_APPROVE'					=> 'Lid goedkeuren',
	'GROUP_DEFAULT'					=> 'Maak groep standaard voor lid',
	'GROUP_DELETE'					=> 'Verwijder lid van groep',
	'GROUP_DEMOTE'					=> 'Degradeer groepsleider',
	'GROUP_PROMOTE'					=> 'Promoveer naar groepsleider',

	'IP_WHOIS_FOR'			=> 'IP whois voor %s',

	'LAST_ACTIVE'			=> 'Laatst actief',

	'MOVE_POSTS_EXPLAIN'	=> 'Selecteer het forum waarnaar je alle berichten die deze gebruiker heeft gemaakt naar toe wilt verplaatsen.',

	'NO_SPECIAL_RANK'		=> 'Geen speciale rang toegewezen',
	'NO_WARNINGS'			=> 'Geen waarschuwingen.',
	'NOT_MANAGE_FOUNDER'	=> 'Je hebt geprobeerd om een gebruiker met oprichterstatus te beheren. Alleen oprichters zijn toegestaan om andere oprichters te beheren.',

	'QUICK_TOOLS'			=> 'Snelle hulpmiddelen',

	'REGISTERED'			=> 'Geregistreerd',
	'REGISTERED_IP'			=> 'Geregistreerd van IP',
	'RETAIN_POSTS'			=> 'Behoud berichten',

	'SELECT_FORM'			=> 'Selecteer formulier',
	'SELECT_USER'			=> 'Selecteer gebruiker',

	'USER_ADMIN'					=> 'Gebruikersbeheer',
	'USER_ADMIN_ACTIVATE'			=> 'Activeer account',
	'USER_ADMIN_ACTIVATED'			=> 'Gebruiker succesvol geactiveerd.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar succesvol verwijderd van gebruikersaccount.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Verban op e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mailadres verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_IP'				=> 'Verban op IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Gebruikersnaam verbannen via gebruikersbeheer',
	'USER_ADMIN_BAN_USER'			=> 'Verban op gebruikersnaam',
	'USER_ADMIN_DEACTIVATE'			=> 'Deactiveer account',
	'USER_ADMIN_DEACTIVED'			=> 'Gebruiker succesvol gedeactiveerd.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Verwijder alle bijlagen',
	'USER_ADMIN_DEL_AVATAR'			=> 'Verwijder avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Leeg PM uitbox',
	'USER_ADMIN_DEL_POSTS'			=> 'Verwijder alle berichten',
	'USER_ADMIN_DEL_SIG'			=> 'Verwijder onderschrift',
	'USER_ADMIN_EXPLAIN'			=> 'Hier kan je je gebruikersinformatie en bepaalde opties veranderen.',
	'USER_ADMIN_FORCE'				=> 'Forceer heractivatie',
	'USER_ADMIN_LEAVE_NR'			=> 'Verwijder van nieuw geregistreerd',
	'USER_ADMIN_MOVE_POSTS'			=> 'Verplaats alle berichten',
	'USER_ADMIN_SIG_REMOVED'		=> 'Onderschrift van gebruikersaccount succesvol verwijderd.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Alle bijlagen gemaakt door deze gebruiker succesvol verwijderd.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'De avatar kan niet weergegeven worden omdat avatars niet toegestaan zijn.',
	'USER_AVATAR_UPDATED'			=> 'Gebruikersavatar details succesvol bijgewerkt.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'De bestaande avatar kan niet weergegeven worden omdat dit type niet is toegestaan.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Eigen profielvelden',
	'USER_DELETED'					=> 'Gebruiker succesvol verwijderd.',
	'USER_GROUP_ADD'				=> 'Gebruiker toevoegen aan groep',
	'USER_GROUP_NORMAL'				=> 'Gebruikers-gedefinieerde groepen waar de gebruiker lid van is',
	'USER_GROUP_PENDING'			=> 'Groepen waar de gebruiker in afwachting van is',
	'USER_GROUP_SPECIAL'			=> 'Voor-gedefinieerde groepen waar de gebruiker lid van is',
	'USER_LIFTED_NR'				=> 'De gebruikers nieuw geregistreerde status succesvol verwijderd.',
	'USER_NO_ATTACHMENTS'			=> 'Er zijn geen bijgevoegde bestanden om weer te geven.',
	'USER_NO_POSTS_TO_DELETE'			=> 'De gebruiker heeft geen berichten om te behouden of om te verwijderen.',
	'USER_OUTBOX_EMPTIED'			=> 'Privéberichten uitbox van de gebruiker succesvol geleegd.',
	'USER_OUTBOX_EMPTY'				=> 'De privéberichten uitbox van de gebruiker was al leeg.',
	'USER_OVERVIEW_UPDATED'			=> 'Gebruikersdetails bijgewerkt.',
	'USER_POSTS_DELETED'			=> 'Alle berichten van deze gebruiker zijn succesvol verwijderd.',
	'USER_POSTS_MOVED'				=> 'Gebruikersberichten succesvol verplaatst naar doelforum.',
	'USER_PREFS_UPDATED'			=> 'Gebruikersvoorkeuren bijgewerkt.',
	'USER_PROFILE'					=> 'Gebruikersprofiel',
	'USER_PROFILE_UPDATED'			=> 'Gebruikersprofiel bijgewerkt.',
	'USER_RANK'						=> 'Gebruikersrang',
	'USER_RANK_UPDATED'				=> 'Gebruikersrang bijgewerkt.',
	'USER_SIG_UPDATED'				=> 'Gebruikersonderschrift bijgewerkt.',
	'USER_WARNING_LOG_DELETED'		=> 'Geen informatie beschikbaar. Waarschijnlijk is het logitem verwijderd.',
	'USER_TOOLS'					=> 'Basis hulpmiddelen',
));
