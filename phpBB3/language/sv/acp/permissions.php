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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Behörigheter går att ställa in mycket detaljerat och delas in i fyra större grupper, dessa är:</p>

		<h2>Globala behörigheter</h2>
		<p>Dessa används för att kontrollera åtkomst på en global nivå och tillämpas på hela forumet. De är vidare indelade i användarbehörigheter, gruppbehörigheter, administratörer och globala moderatorer.</p>

		<h2>Kategoribaserade behörigheter</h2>
		<p>Dessa används för att kontrollera åtkomst per kategori. De är vidare indelade i kategoribehörigheter, kategorimoderatorer, användares kategoribehörigheter och gruppers kategoribehörigheter.</p>

		<h2>Behörighetsroller</h2>
		<p>Dessa används för att skapa olika uppsättningar med behörigheter för de olika behörighetstyperna som senare kan tilldelas på en roll-baserad basis. Standardrollerna bör täcka administrationen för forum både stora och små, men inom varje av de fyra grupperna går det att lägga till/redigera/ta bort roller.</p>

		<h2>Behörighetsgranskning</h2>
		<p>Dessa används för att visa vilka behörigheter som gäller för tilldelade användare, moderatorer (lokala och globala), administratörer och kategorier.</p>

		<br />

		<p>För mer information om hur man ställer in och hanterar behörigheter på ditt phpBB3-forum, se <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">kapitel 1.5 i vår Snabbstartsguide</a>.</p>',

	'ACL_NEVER'				=> 'Aldrig',
	'ACL_SET'				=> 'Ställer in behörigheter',
	'ACL_SET_EXPLAIN'		=> 'Behörigheter är baserade på ett enkelt <strong>JA</strong>/<strong>NEJ</strong>-system. Om du sätter ett alternativ till <strong>ALDRIG</strong> för en användare eller användargrupp så åsidosätter det alla andra värden som tilldelats. Om du inte vill tilldela ett värde för ett alternativ för denna användare eller grupp välj <strong>NEJ</strong>. Om värden är tilldelade för detta alternativ någon annan stans så kommer de att användas istället, annars kommer <strong>ALDRIG</strong> att antas. Alla markerade objekt (med kryssrutan framför de) kommer att kopiera den behörighetsuppsättning du definierat.',
	'ACL_SETTING'			=> 'Inställning',

	'ACL_TYPE_A_'			=> 'Administrativa behörigheter',
	'ACL_TYPE_F_'			=> 'Kategoribehörigheter',
	'ACL_TYPE_M_'			=> 'Moderationsbehörigheter',
	'ACL_TYPE_U_'			=> 'Användarbehörigheter',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrativa behörigheter',
	'ACL_TYPE_GLOBAL_U_'	=> 'Användarbehörigheter',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globala moderationsbehörigheter',
	'ACL_TYPE_LOCAL_M_'		=> 'Kategorimoderationsbehörigheter',
	'ACL_TYPE_LOCAL_F_'		=> 'Kategoribehörigheter',
	
	'ACL_NO'				=> 'Nej',
	'ACL_VIEW'				=> 'Visar behörigheter',
	'ACL_VIEW_EXPLAIN'		=> 'Här kan du se de verksamma behörigheterna som användaren/gruppen har. En röd ruta indikerar att användaren/gruppen inte har den behörigheten, en grön ruta indikerar att användaren/gruppen har den behörigheten.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Här kan du tilldela administrativa behörigheter till användare eller grupper. Alla användare med administrativa behörigheter kan visa administrationspanelen.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Här kan du göra användare eller grupper till kategorimoderatorer. För att tilldela användare åtkomst till kategorier, för att definiera globala moderationsbehörigheter eller administratörer använd lämplig sida.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Här kan du ändra vilka användare och grupper som kan komma åt vilka kategorier. För att tilldela moderatorer eller definiera administratörer använd lämplig sida.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Här kan du kopiera kategoribehörigheter från en kategori till en annan.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Här kan du tilldela globala moderationsbehörigheter till användare eller grupper. Dessa moderatorer är som vanliga moderatorer förutom att de har tillgång till alla kategorier på ditt forum.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Här kan du tilldela kategoribehörigheter till grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Här kan du tilldela globala behörigheter till grupper - användarbehörigheter, globala moderationsbehörigheter och administrativa behörigheter. Användarbehörigheter inkluderar funktioner så som visningsbilder, personliga meddelanden, osv.; globala moderationsbehörigheter så som godkännande av inlägg, trådhantering, bannlysningar, osv. och till slut administrativa behörigheter så som ändring av behörigheter, egna BBCodes, kategorihantering, osv. Individuella användarbehörigheter bör endast ändras vid sällsynta tillfällen, den föredragna metoden är att placera användare i grupper och sedan tilldela gruppbehörigheter.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Här kan du hantera rollerna för administrativa behörigheter. Roller är verksamma behörigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Här kan du hantera rollerna för kategoribehörigheter. Roller är verksamma behörigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Här kan du hantera rollerna för moderationsbehörigheter. Roller är verksamma behörigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Här kan du hantera rollerna för användarbehörigheter. Roller är verksamma behörigheter, om du ändrar en roll så ändras de poster som har rollen tilldelad sig också.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Här kan du tilldela kategoribehörigheter för användare.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Här kan du tilldela globala behörigheter till användare - användarbehörigheter, globala moderationsbehörigheter och administrativa behörigheter. Användarbehörigheter inkluderar funktioner så som visningsbilder, personliga meddelanden, osv.; globala moderationsbehörigheter inkluderar funktioner så som godkännande av inlägg, trådhantering, bannlysningar, osv. och slutligen administrativa behörigheter inkluderar funktioner så som ändring av behörigheter, egna BBCodes, kategorihantering, osv. För att ändra dessa inställningar för ett stort antal användare eller användare så är gruppbehörighetssystemet att föredra. Användares behörigheter bör endast ändras vid sällsynta tillfällen, den föredragna metoden är att sätta användare i grupper och sen tilldela gruppbehörigheter.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Här kan du visa de verksamma administrativa behörigheterna tilldelade till de valda användarna/grupperna.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Här kan du visa de verksamma globala moderationsbehörigheterna tilldelade till de valda användarna/grupperna.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Här kan du visa de verksamma kategoribehörigheterna tilldelade de valda användarna/grupperna och kategorierna.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Här kan du visa de verksamma kategorimoderationsbehörigheterna tilldelade till de valda användarna/grupperna och kategorierna.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Här kan du visa de verksamma användarbehörigheterna tilldelade till de valda användarna/grupperna.',

	'ADD_GROUPS'				=> 'Lägg till grupper',
	'ADD_PERMISSIONS'			=> 'Lägg till behörigheter',
	'ADD_USERS'					=> 'Lägg till användare',
	'ADVANCED_PERMISSIONS'		=> 'Avancerade behörigheter',
	'ALL_GROUPS'				=> 'Välj alla grupper',
	'ALL_NEVER'					=> 'Alla <strong>ALDRIG</strong>',
	'ALL_NO'					=> 'Alla <strong>NEJ</strong>',
	'ALL_USERS'					=> 'Välj alla användare',
	'ALL_YES'					=> 'Alla <strong>JA</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Tillämpa alla behörigheter',
	'APPLY_PERMISSIONS'			=> 'Tillämpa behörigheter',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Behörigheterna och rollen definierad för denna post kommer endast tilldelas till denna post och alla ikryssade poster.',
	'AUTH_UPDATED'				=> 'Behörigheterna uppdaterades.',
	'COPY_PERMISSIONS_CONFIRM'				=> 'Är du säker på att du vill fortsätta? Dett akommer att skriva över alla tidigare behörigheter för målet.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Kategorin du ska kopiera behörigheter från.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Målkategori dit behörigheterna ska kopieras.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopiera från',
	'COPY_PERMISSIONS_TO'					=> 'Kopiera till',

	'CREATE_ROLE'				=> 'Skapa roll',
	'CREATE_ROLE_FROM'			=> 'Använd inställningar från…',
	'CUSTOM'					=> 'Eget…',

	'DEFAULT'					=> 'Standard',
	'DELETE_ROLE'				=> 'Ta bort roll',
	'DELETE_ROLE_CONFIRM'		=> 'Är du säker på att du vill ta bort denna roll? Poster som har denna roll tilldelad till sig kommer <strong>inte</strong> att tappa sina behörighetsinställningar.',
	'DISPLAY_ROLE_ITEMS'		=> 'Visa poster som använder denna roll',

	'EDIT_PERMISSIONS'			=> 'Redigera behörigheter',
	'EDIT_ROLE'					=> 'Redigera roll',

	'GROUPS_NOT_ASSIGNED'		=> 'Ingen grupp tilldelad denna roll',

	'LOOK_UP_GROUP'				=> 'Kolla upp användargrupp',
	'LOOK_UP_USER'				=> 'Kolla upp användare',

	'MANAGE_GROUPS'		=> 'Hantera grupper',
	'MANAGE_USERS'		=> 'Hantera användare',

	'NO_AUTH_SETTING_FOUND'		=> 'Behörighetsinställningar inte definierade.',
	'NO_ROLE_ASSIGNED'			=> 'Ingen roll tilldelad…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Tilldelning av denna roll kommer inte att ändra behörigheterna till höger. Om du vill nollställa eller ta bort alla behörigheter bör du använda “Alla <strong>NEJ</strong>”-länken.',
	'NO_ROLE_AVAILABLE'			=> 'Ingen roll tillgänglig',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Ge rollen ett namn.',
	'NO_ROLE_SELECTED'			=> 'Rollen kunde inte hittas.',
	'NO_USER_GROUP_SELECTED'	=> 'Du valde ingen användare eller grupp.',

	'ONLY_FORUM_DEFINED'	=> 'Du definierade endast kategorier i ditt val. Välj också minst en användare eller grupp.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Behörigheter och roll kommer också tilldelas till alla ikryssade objekt',
	'PLUS_SUBFORUMS'				=> '+Underkategorier',

	'REMOVE_PERMISSIONS'			=> 'Ta bort behörigheter',
	'REMOVE_ROLE'					=> 'Ta bort roll',
	'RESULTING_PERMISSION'			=> 'Resulterande behörighet',
	'ROLE'							=> 'Roll',
	'ROLE_ADD_SUCCESS'				=> 'Roll lades till.',
	'ROLE_ASSIGNED_TO'				=> 'Användare/grupper tilldelade %s',
	'ROLE_DELETED'					=> 'Roll togs bort.',
	'ROLE_DESCRIPTION'				=> 'Rollbeskrivning',

	'ROLE_ADMIN_FORUM'			=> 'Kategoriadministratör',
	'ROLE_ADMIN_FULL'			=> 'Fullständig administratör',
	'ROLE_ADMIN_STANDARD'		=> 'Standardadministratör',
	'ROLE_ADMIN_USERGROUP'		=> 'Användare- och gruppadministratör',
	'ROLE_FORUM_BOT'			=> 'Robotåtkomst',
	'ROLE_FORUM_FULL'			=> 'Fullständig åtkomst',
	'ROLE_FORUM_LIMITED'		=> 'Begränsad åtkomst',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Begränsad åtkomst + omröstningar',
	'ROLE_FORUM_NOACCESS'		=> 'Ingen åtkomst',
	'ROLE_FORUM_ONQUEUE'		=> 'Inlägg modereras',
	'ROLE_FORUM_POLLS'			=> 'Standardåtkomst + omröstningar',
	'ROLE_FORUM_READONLY'		=> 'Endast läsåtkomst',
	'ROLE_FORUM_STANDARD'		=> 'Standardåtkomst',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Nyregistrerad',
	'ROLE_MOD_FULL'				=> 'Fullständig moderator',
	'ROLE_MOD_QUEUE'			=> 'Kömoderator',
	'ROLE_MOD_SIMPLE'			=> 'Enkel moderator',
	'ROLE_MOD_STANDARD'			=> 'Standardmoderator',
	'ROLE_USER_FULL'			=> 'Alla funktioner',
	'ROLE_USER_LIMITED'			=> 'Begränsade funktioner',
	'ROLE_USER_NOAVATAR'		=> 'Ingen visningsbild',
	'ROLE_USER_NOPM'			=> 'Inga personliga meddelanden',
	'ROLE_USER_STANDARD'		=> 'Standardfunktioner',
	'ROLE_USER_NEW_MEMBER'		=> 'Nyregistrerad',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Har tillgång till kategorihantering och kategoribehörighetsinställningar.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Har tillgång till alla administrativa funktioner på detta forum.<br />Rekommenderas inte.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Har tillgång till de flesta administrativa funktioner men kan inte använda server- eller systemrelaterade verktyg.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kan hantera grupper och användare: Kan ändra behörigheter, inställningar, hantera bannlysningar och hantera titlar.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Denna roll rekommenderas för robotar och sökspindlar.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Kan använda alla kategorifunktioner, inklusive anslag och notiser. Kan också ignorera gräns för tid mellan inlägg.<br />Rekommenderas inte för normala användare.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Kan använda några kategorifunktioner, men kan inte bifoga filer eller använda inläggsikoner.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Som begränsad åtkomst men kan också skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Kan varken se eller komma åt kategorin.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Kan använda de flesta kategorifunktioner inklusive bilagor, men inlägg och trådar måste godkännas av en moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Som standardåtkomst men kan också skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Kan läsa i kategorin, men kan inte skapa nya trådar eller svara på inlägg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Kan använda de flesta kategorifunktioner inklusive bilagor och borttagning av egna trådar, men kan inte låsa egna trådar och kan inte skapa omröstningar.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'En roll för gruppen Ny medlem; Innehåller behörighetsklass <strong>ALDRIG</strong> för att hindra nyregistrerade från att använda vissa funktioner.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Kan använda alla moderationsfunktioner, inklusive bannlysning.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Kan använda moderationskön för att kontrollera och redigera inlägg, men ingenting annat.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Kan endast använda grundläggande trådhandlingar. Kan inte utfärda varningar eller använda moderatorkön.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Kan använda de flesta moderationsverktyg, men kan inte bannlysa användare eller ändra inläggsförfattare.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kan använda alla tillgängliga kategorifunktioner för användare, inklusive byte av användarnamn och ignorering av gräns för tid mellan inlägg.<br />Rekommenderas inte.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Kan komma åt vissa användarfunktioner. Bilagor, e-post och snabbmeddelanden är inte tillåtna.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Har en begränsad uppsättning funktioner och kan inte använda visningsbilder.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Har en begränsad uppsättning funktioner, och kan inte använda personliga meddelanden.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Kan komma åt de flesta men inte alla användarfunktioner. Kan inte byta användarnamn eller ignorera gräns för tid mellan inlägg, till exempel.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'En roll för gruppen Ny medlem; Innehåller behörighetsklass <strong>ALDRIG</strong> för att hindra nyregistrerade från att använda vissa funktioner.',
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Du kan skriva in en kort förklaring till vad rollen gör eller vad den är till för. Texten du skriver in här kommer också att visas på behörighetssidorna.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rollbeskrivningen är för lång, den får inte vara länge än 4000 tecken.',
	'ROLE_DETAILS'					=> 'Rolldetaljer',
	'ROLE_EDIT_SUCCESS'				=> 'Rollen ändrades.',
	'ROLE_NAME'						=> 'Rollnamn',
	'ROLE_NAME_ALREADY_EXIST'		=> 'En roll med namnet <strong>%s</strong> finns redan för den angivna behörighetstypen.',
	'ROLE_NOT_ASSIGNED'				=> 'Rollen har inte tilldelats några poster än.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Den/de valda kategorin/kategorierna finns inte.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Den/de valda gruppen/grupperna finns inte.',
	'SELECTED_USER_NOT_EXIST'		=> 'Den/de valda användaren/användarna finns inte.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Kategorin du väljer här kommer att inkludera alla underkategorier i valet.',
	'SELECT_ROLE'					=> 'Välj roll…',
	'SELECT_TYPE'					=> 'Välj typ',
	'SET_PERMISSIONS'				=> 'Ställ in behörigheter',
	'SET_ROLE_PERMISSIONS'			=> 'Ställ in rollbehörigheter',
	'SET_USERS_PERMISSIONS'			=> 'Ställ in användarbehörigheter',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Ställ in användares kategoribehörigheter',

	'TRACE_DEFAULT'					=> 'Som standard är alla behörigheter satta till <strong>NEJ</strong> (ej inställda). Så behörigheten kan åsidosättas av andra inställningar.',
	'TRACE_FOR'						=> 'Spårning för',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Denna grupps behörighet är satt till <strong>ALDRIG</strong> liksom det totala resultatet så det gamla resultatet behålls.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Denna grupps behörighet för denna kategori är satt till <strong>ALDRIG</strong> liksom det totala resultatet så det gamla resultatet behålls.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Denna grupps behörighet är satt till <strong>ALDRIG</strong> vilket blir det nya totala värdet eftersom det inte var inställt än (satt till <strong>NEJ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Denna grupps behörighet för denna kategori är satt till <strong>ALDRIG</strong> vilket blir det nya totala värdet eftersom det inte ställts in än (satt till <strong>NEJ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Denna grupps behörighet är satt till <strong>ALDRIG</strong> vilket åsidosätter det totala <strong>JA</strong> till <strong>ALDRIG</strong> för denna användare.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Denna grupps behörighet för denna kategori är satt till <strong>ALDRIG</strong> vilket åsidosätter det totala <strong>JA</strong> till ett <strong>NEJ</strong> för denna användare.',
	'TRACE_GROUP_NO'				=> 'Behörigheten är <strong>NEJ</strong> för denna grupp så det gamla värdet behålls.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Behörigheten är <strong>NEJ</strong> för denna grupp i denna kategori så det gamla värdet behålls.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Denna grupps behörighet är satt till <strong>JA</strong> men det totala <strong>ALDRIG</strong> kan inte åsidosättas.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Denna grupps behörighet för denna kategori är satt till <strong>JA</strong> men det totala <strong>ALDRIG</strong> kan inte åsidosättas.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Denna grupps behörighet är satt till <strong>JA</strong> vilket blir det nya totala värdet eftersom det inte var inställt än (satt till <strong>NEJ</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Denna grupps behörighet för denna kategori är satt till <strong>JA</strong> vilket blir det nya totala värdet eftersom det inte var inställt än (satt till <strong>NEJ</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Denna grupps behörighet är satt till <strong>JA</strong> och den totala behörigheten är redan satt till <strong>JA</strong>, så det totala resultatet behålls.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Denna grupps behörighet för denna kategori är satt till <strong>JA</strong> och den totala behörigheten är redan satt till <strong>JA</strong>, så det totala resultatet behålls.',
	'TRACE_PERMISSION'				=> 'Spåra behörighet - %s',
	'TRACE_RESULT'					=> 'Spåra resultat',
	'TRACE_SETTING'					=> 'Spåra inställning',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Den kategorioberoende användarbehörigheten utvärderas till <strong>JA</strong> men den totala behörigheten är redan satt till <strong>JA</strong>, så det totala resultatet behålls. %sSpåra globala behörigheter%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Den kategorioberoende användarbehörigheten utvärderas till <strong>JA</strong> vilket åsidosätter det nuvarande lokala resultatet <strong>ALDRIG</strong>. %sSpåra globala behörigheter%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Den kategorioberoende användarbehörigheten utvärderas till <strong>ALDRIG</strong> vilket inte påverkar den lokala behörigheten. %sSpåra globala behörigheter%s',

	'TRACE_USER_FOUNDER'					=> 'Användaren är en grundare, därför är alla administrationsbehörigheter alltid satta till <strong>JA</strong>.',
	'TRACE_USER_KEPT'						=> 'Användarbehörigheten är <strong>NEJ</strong> så det gamla totala värdet behålls.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Användarbehörigheten för denna kategori är <strong>NEJ</strong> så det gamla totala värdet behålls.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Användarbehörigheten är satt till <strong>ALDRIG</strong> och det totala värdet är satt till <strong>ALDRIG</strong>, så ingenting ändras.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Användarbehörigheten för denna kategori är satt till <strong>ALDRIG</strong> och det totala värdet är satt till <strong>ALDRIG</strong>, så ingenting ändras.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Användarbehörigheten är satt till <strong>ALDRIG</strong> vilket blir det totala värdet eftersom det var satt till NEJ.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Användarbehörigheten för denna kategori är satt till <strong>ALDRIG</strong> vilket blir det totala värdet eftersom det var satt till NEJ.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Användarbehörigheten är satt till <strong>ALDRIG</strong> och åsidosätter det tidigare <strong>JA</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Användarbehörigheten för denna kategori är satt till <strong>ALDRIG</strong> och åsidosätter det föregående <strong>JA</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Användarbehörigheten är <strong>NEJ</strong> och det totala värdet var satt till NEJ så det blir per standard <strong>ALDRIG</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Användarbehörigheten för denna kategori är <strong>NEJ</strong> och det totala värdet var satt till NEJ så det blir per standard <strong>ALDRIG</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Användarbehörigheten är satt till <strong>JA</strong> men det totala <strong>ALDRIG</strong> kan inte åsidosättas.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Användarbehörigheten för denna kategori är satt till <strong>JA</strong> men det totala <strong>ALDRIG</strong> kan inte åsidosättas.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Användarbehörigheten är satt till <strong>JA</strong> vilket blir det totala värdet eftersom det var satt till <strong>NEJ</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Användarbehörigheten för denna kategori är satt till <strong>JA</strong> vilket blir det totala värdet eftersom det var satt till <strong>NEJ</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Användarbehörigheten är satt till <strong>JA</strong> och det totala värdet är satt till <strong>JA</strong>, så ingenting ändras.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Användarbehörigheten för denna kategori är satt till <strong>JA</strong> och det totala värdet är satt till <strong>JA</strong>, så ingenting ändras.',
	'TRACE_WHO'								=> 'Vem',
	'TRACE_TOTAL'							=> 'Totalt',

	'USERS_NOT_ASSIGNED'			=> 'Ingen användare är tilldelad denna roll',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'är medlem i följande för-definierade grupper',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'är medlem i följande användardefinierade grupper',

	'VIEW_ASSIGNED_ITEMS'	=> 'Visa tilldelade poster',
	'VIEW_LOCAL_PERMS'		=> 'Lokala behörigheter',
	'VIEW_GLOBAL_PERMS'		=> 'Globala behörigheter',
	'VIEW_PERMISSIONS'		=> 'Visa behörigheter',

	'WRONG_PERMISSION_TYPE'				=> 'Felaktig behörighetstyp vald.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Behörighetsinställningarna är i ett felaktigt format, phpBB kan inte tolka dem korrekt.',
));
