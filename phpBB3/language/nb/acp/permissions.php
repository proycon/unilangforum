<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
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
		<p>Tillatelser er svært finkornet og gruppert inn i fire hoveddeler, som er følgende:</p>

		<h2>Globale tillatelser</h2>
		<p>Disse brukes til å kontrollere tilgang på globalt nivå og gjelder for hele systemet. Disse deles videre inn i Brukertillatelser, Gruppetillatelser, Administratorer og Globale moderatorer.</p>

		<h2>Forumbaserte tillatelser</h2>
		<p>Disse brukes til å kontrollere tilgang per forum. Disse deles videre inn i Forumtillatelser, Forummoderatorer, Brukerforumtillatelser og Gruppeforumtillatelser.</p>

		<h2>Tillatelsesroller</h2>
		<p>Disswe brukes til å opprette ulike tillatelsessett for ulike tillatelsestyper, som senere kan tilordnes per rolle. Standardrollene skal dekke administrasjonen av både store og små systemer, men innenfor de fire inndelingene kan du legge til/redigere/slette roller slik du ønsker.</p>

		<h2>Tillatelsesmasker</h2>
		<p>Disse brukes til å vise de effektive tillatelsene som tilordnes til Brukere, Moderatorer (lokale og globale), Administratorer eller Fora.</p>

		<br />

		<p>Hvis du vil ha mer informasjon om hvordan du konfigurerer og administrerer tillatelser på phpBB3-nettstedet, kan du lese om <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">konfigurasjon av tillatelser i hurtigstartveiledningen vår</a>.</p>
	',

	'ACL_NEVER'				=> 'Aldri',
	'ACL_SET'				=> 'Angir tillatelser',
	'ACL_SET_EXPLAIN'		=> 'Tillatelser er basert på et enkelt system med <strong>JA</strong>/<strong>NEI</strong>. Hvis du angir et alternativ til <strong>ALDRI</strong> for en bruker eller brukergruppe, overstyrer dette alle andre verdier som er tilordnet brukeren eller brukergruppen. Hvis du ikke ønsker å tilordne en verdi for et alternativ for denne brukeren eller gruppen, velger du <strong>NEI</strong>. Hvis verdier tilordnes for dette alternativet andre steder, vil heller de bli brukt, ellers antas <strong>ALDRI</strong>. Alle objekter som er merket (med en hake foran dem), vil få kopiert tillatelsessettet du definerte.',
	'ACL_SETTING'			=> 'Innstilling',

	'ACL_TYPE_A_'			=> 'Administrasjonstillatelser',
	'ACL_TYPE_F_'			=> 'Forumtillatelser',
	'ACL_TYPE_M_'			=> 'Modereringstillatelser',
	'ACL_TYPE_U_'			=> 'Brukertillatelser',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrasjonstillatelser',
	'ACL_TYPE_GLOBAL_U_'	=> 'Brukertillatelser',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale modereringstillatelser',
	'ACL_TYPE_LOCAL_M_'		=> 'Forummodereringstillatelser',
	'ACL_TYPE_LOCAL_F_'		=> 'Forumtillatelser',

	'ACL_NO'				=> 'Nei',
	'ACL_VIEW'				=> 'Viser tillatelser',
	'ACL_VIEW_EXPLAIN'		=> 'Her kan du se de effektive tillatelsene brukeren/gruppen har. Et rødt felt viser at brukeren/gruppen ikke har tillatelsen, et grønt felt at brukeren/gruppen har tillatelsen.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Her kan du tilordne administratortillatelser til brukere eller grupper. Alle brukere med administratortillatelser kan vise administrasjonskontrollpanelet.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Her kan du tilordne brukere og grupper som forummoderatorer. Hvis du vil tilordne brukere tilgang til fora, definere moderatortillatelser eller angi administratorer, bruker du de relevante sidene.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Her kan du endre hvilke brukere og grupper som har tilgang til hvilke fora. Hvis du vil tilordne moderatorer eller definere administratorer, bruker du de relevante sidene.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Her kan du kopiere forumtillatelser fra ett forum til ett eller flere andre fora.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Her kan du tilordne globale moderatortillatelser til brukere eller grupper. Disse moderatorene er som vanlige moderatorer, med det unntaket at de har tilgang til alle foraene på systemet.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du tilordne forumtillatelser til grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Her kan du tilordne globale tillatelser til grupper – brukertillatelser, globale moderatortillatelser og administratortillatelser. Brukertillatelser omfatter muligheter som bruk av avatarer, sending av private meldinger osv., globale moderatortillatelser ting som godkjenning av innlegg, administrasjon av emner og utestengelser osv., og til slutt administratortillatelser som å endre tillatelser, egendefinere BBCode, administrere fora osv. Individuelle brukertillatelser bør bare endres i enkelttilfeller, den foretrukne metoden er å plassere brukerne i grupper og gi gruppene tillatelser.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Her kan du administrere rollene for administasjonstillatelser. Rollene er effektive tillatelser – hvis du endrer en rolle, vil elementene som har denne rollen tilordnet seg, også få endre tillatelsene.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Her kan du administrere rollene for forumtillatelser. Rollene er effektive tillatelser – hvis du endrer en rolle, vil elementene som har denne rollen tilordnet seg, også få endre tillatelsene.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Her kan du administrere rollene for modereringstillatelser. Rollene er effektive tillatelser – hvis du endrer en rolle, vil elementene som har denne rollen tilordnet seg, også få endre tillatelsene.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Her kan du administrere rollene for brukertillatelser. Rollene er effektive tillatelser – hvis du endrer en rolle, vil elementene som har denne rollen tilordnet seg, også få endre tillatelsene.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du tilordne forumtillatelser til brukere.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Her kan du tilordne globale tillatelser til brukere – brukertillatelser, globale moderatortillatelser og administratortillatelser. Brukertillatelser omfatter muligheter som bruk av avatarer, sending av private meldinger osv., globale moderatortillatelser ting som godkjenning av innlegg, administrasjon av emner og utestengelser osv., og til slutt administratortillatelser som å endre tillatelser, egendefinere BBCode, administrere fora osv. Hvis du vil endre disse innstillingene for et stort antall brukere, er systemet for gruppetillatelser den foretrukne metoden. Brukertillatelser bør bare endres i enkelttilfeller, den foretrukne metoden er å plassere brukerne i grupper og gi gruppene tillatelser.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Her kan du vise de effektive administrasjonstillatelsene som er tilordnet de valgte brukerne/gruppene.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du vise de globale moderatortillatelsene som er tilordnet de valgte brukerne/gruppene.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du vise forumtillatelsene som er tilordnet de valgte brukerne/gruppene og foraene.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du vise forummoderatortillatelsene som er tilordnet de valgte brukerne/gruppene og foraene.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Her kan du vise de effektive brukertillatelsene som er tilordnet de valgte brukerne/gruppene.',

	'ADD_GROUPS'				=> 'Legg til grupper',
	'ADD_PERMISSIONS'			=> 'Legg til tillatelser',
	'ADD_USERS'					=> 'Legg til brukere',
	'ADVANCED_PERMISSIONS'		=> 'Avanserte tillatelser',
	'ALL_GROUPS'				=> 'Velg alle grupper',
	'ALL_NEVER'					=> 'Alle <strong>ALDRI</strong>',
	'ALL_NO'					=> 'Alle <strong>NEI</strong>',
	'ALL_USERS'					=> 'Velg alle brukere',
	'ALL_YES'					=> 'Alle <strong>JA</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Bruk alle tillatelser',
	'APPLY_PERMISSIONS'			=> 'Bruk tillatelser',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Tillatelsene og rollen som er definert for dette elementet, vil bare brukes på dette elementet og alle elementer som er haket av.',
	'AUTH_UPDATED'				=> 'Tillatelsene er oppdatert.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Er du sikker på at du vil utføre denne operasjonen? Merk at dette vil overskrive alle eksisterende tillatelser på de valgte målene.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forumet du vil kopiere tillatelser fra.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Foraene du vil kopiere tillatelsene til.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopier tillatelser fra',
	'COPY_PERMISSIONS_TO'					=> 'Bruk tillatelser på',

	'CREATE_ROLE'				=> 'Opprett rolle',
	'CREATE_ROLE_FROM'			=> 'Bruk innstillinger fra…',
	'CUSTOM'					=> 'Egendefinert…',

	'DEFAULT'					=> 'Standard',
	'DELETE_ROLE'				=> 'Slett rolle',
	'DELETE_ROLE_CONFIRM'		=> 'Er du sikker på at du vil fjerne denne rollen? Elementer som er tilordnet denne rollen vil <strong>ikke</strong> miste tillatelsesinnstillingene.',
	'DISPLAY_ROLE_ITEMS'		=> 'Vis elementer som bruker denne rollen',

	'EDIT_PERMISSIONS'			=> 'Rediger tillatelser',
	'EDIT_ROLE'					=> 'Rediger rolle',

	'GROUPS_NOT_ASSIGNED'		=> 'Ingen gruppe er tilordnet denne rollen',

	'LOOK_UP_GROUP'				=> 'Slå opp brukergruppe',
	'LOOK_UP_USER'				=> 'Slå opp bruker',

	'MANAGE_GROUPS'		=> 'Administrer grupper',
	'MANAGE_USERS'		=> 'Administrer brukere',

	'NO_AUTH_SETTING_FOUND'		=> 'Tillatelsesinnstillinger er ikke definert.',
	'NO_ROLE_ASSIGNED'			=> 'Ingen rolle er tilordnet…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Hvis du angir til denne rollen, endres ikke tillatelsene til høyre. Hvis du vil fjerne alle tillatelser, bruker du lenken «Alle <strong>NEI</strong>».',
	'NO_ROLE_AVAILABLE'			=> 'Ingen rolle tilgjengelig',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Gi et navn til rollen.',
	'NO_ROLE_SELECTED'			=> 'Finner ikke rollen.',
	'NO_USER_GROUP_SELECTED'	=> 'Du har ikke valgt noen bruker eller gruppe.',

	'ONLY_FORUM_DEFINED'	=> 'Du definerte bare fora i utvalget. Velg også minst én bruker eller én gruppe.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Tillatelser og rolle vil også gjelde for alle objekter som er haket av',
	'PLUS_SUBFORUMS'				=> '+Underfora',

	'REMOVE_PERMISSIONS'			=> 'Fjern tillatelser',
	'REMOVE_ROLE'					=> 'Fjern rolle',
	'RESULTING_PERMISSION'			=> 'Resulterende tillatelse',
	'ROLE'							=> 'Rolle',
	'ROLE_ADD_SUCCESS'				=> 'Rollen er lagt til.',
	'ROLE_ASSIGNED_TO'				=> 'Brukere/grupper tilordnet til %s',
	'ROLE_DELETED'					=> 'Rollen er fjernet.',
	'ROLE_DESCRIPTION'				=> 'Rollebeskrivelse',

	'ROLE_ADMIN_FORUM'			=> 'Forumadministrator',
	'ROLE_ADMIN_FULL'			=> 'Full administrator',
	'ROLE_ADMIN_STANDARD'		=> 'Standardadministrator',
	'ROLE_ADMIN_USERGROUP'		=> 'Bruker- og gruppeadministrator',
	'ROLE_FORUM_BOT'			=> 'Bot-tilgang',
	'ROLE_FORUM_FULL'			=> 'Full tilgang',
	'ROLE_FORUM_LIMITED'		=> 'Begrenset tilgang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Begrenset tilgang + avstemminger',
	'ROLE_FORUM_NOACCESS'		=> 'Ingen tilgang',
	'ROLE_FORUM_ONQUEUE'		=> 'På modereringskø',
	'ROLE_FORUM_POLLS'			=> 'Standardtilgang + avstemminger',
	'ROLE_FORUM_READONLY'		=> 'Bare lesetilgang',
	'ROLE_FORUM_STANDARD'		=> 'Standardtilgang',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Nylig registrerte brukere-tilgang',
	'ROLE_MOD_FULL'				=> 'Full moderator',
	'ROLE_MOD_QUEUE'			=> 'Kømoderator',
	'ROLE_MOD_SIMPLE'			=> 'Enkel moderator',
	'ROLE_MOD_STANDARD'			=> 'Standardmoderator',
	'ROLE_USER_FULL'			=> 'Alle funksjoner',
	'ROLE_USER_LIMITED'			=> 'Begrensede funksjoner',
	'ROLE_USER_NOAVATAR'		=> 'Ingen avatar',
	'ROLE_USER_NOPM'			=> 'Ingen private meldinger',
	'ROLE_USER_STANDARD'		=> 'Standardfunksjoner',
	'ROLE_USER_NEW_MEMBER'		=> 'Nylig registrerte brukere-funksjoner',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Har tilgang til forumadministrasjon og innstillinger for forumtillatelser.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Har tilgang til alle administrative funksjoner på dette systemet.<br />Anbefales ikke.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Har tilgang til de fleste administrative funksjoner, men kan ikke bruke server- eller systemrelaterte verktøy.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Kan administrere grupper og brukere: Kan endre tillatelser, innstillinger, administrere utestengelser og grader.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Denne rollen anbefales for boter.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Kan bruke alle forumfunksjoner, inkludert innlegging av kunngjøringer og festing. Kan også ignorere overhyppighetsgrensen.<br />Anbefales ikke for vanlige brukere.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Kan bruke enkelte forumfunksjoner, men kan ikke legge ved filer eller bruke innleggsikoner.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Som for Begrenset tilgang, men kan også opprette avstemminger.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Kan verken se eller få tilgang til forumet.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Kan bruke de fleste forumfunksjoner, inkludert vedlegg, men innlegg og emner må godkjennes av en moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Som Standardtilgang, men kan også opprette avstemminger.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Kan lese forumet, men kan ikke opprette nye emner eller svare på innlegg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Kan bruke de fleste forumfunksjoner, inkludert vedlegg og sletting av egne innlegg, men kan ikke låse egne emner, og kan ikke opprette avstemminger.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'En rolle for medlemmer av den spesielle gruppen for nylig registrerte brukere: Inneholder <strong>ALDRI</strong>-tillatelser for å låse funksjoner for nye brukere.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Kan bruke alle modereringsfunksjoner, inkludert utestengelser.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Kan bruke modereringskøen til å godkjenne og redigere innlegg, men intet annet.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Kan bare bruke grunnleggende emnehandlinger. Kan ikke sende advarsler eller bruke modereringskøen.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Kan bruke de fleste modereringsverktøy, men kan ikke stenge ute brukere eller endre innleggsforfatter.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Kan bruke alle forumfunksjoner som er tilgjengelig for brukere, inkludert endring av brukernavn eller ignorering av overhyppighetsgrensen.<br />Anbefales ikke.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Har tilgang til noen av brukerfunksjonene. Vedlegg, e-post og direktemeldinger tillates ikke.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Har et begrenset funksjonssett og tillates ikke å bruke Avatar-funksjonen.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Har et begrenset funksjonssett, og tillates ikke å bruke private meldinger.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Har tilgang til de fleste, men ikke alle brukerfunksjoner. Kan ikke endre brukernavn eller ignorere overhyppighetsgrensen, for eksempel.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'En rolle for medlemmer av den spesielle gruppen for nylig registrerte brukere. Inneholder <strong>ALDRI</strong>-tillatelser for å låse funksjoner for nye brukere.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Du kan angi en kort forklaring av hva rollen gjør eller er ment for. Teksten du angir her, vises på tillatelsesskjermene også.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rollebeskrivelsen er for lang, begrens den til 4000 tegn.',
	'ROLE_DETAILS'					=> 'Rolledetaljer',
	'ROLE_EDIT_SUCCESS'				=> 'Rollen er redigert.',
	'ROLE_NAME'						=> 'Rollenavn',
	'ROLE_NAME_ALREADY_EXIST'		=> 'En rolle med navnet <strong>%s</strong> finnes allerede for den angitte tillatelsestypen.',
	'ROLE_NOT_ASSIGNED'				=> 'Rollen er ikke tilordnet ennå.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'De valgte foraene finnes ikke.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'De valgte gruppene finnes ikke.',
	'SELECTED_USER_NOT_EXIST'		=> 'De valgte brukerne finnes ikke.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forumet du velger her, vil inkludere alle underfora i utvalget.',
	'SELECT_ROLE'					=> 'Velg rolle…',
	'SELECT_TYPE'					=> 'Velg type',
	'SET_PERMISSIONS'				=> 'Angi tillatelser',
	'SET_ROLE_PERMISSIONS'			=> 'Angi rolletillatelser',
	'SET_USERS_PERMISSIONS'			=> 'Angi brukertillatelser',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Angi forumtillatelser for bruker',

	'TRACE_DEFAULT'					=> 'Som standard er alle tillatelser <strong>NEI</strong> (ikke angitt). Så tillatelsen kan overstyres av andre innstillinger.',
	'TRACE_FOR'						=> 'Spor etter',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Tillatelsen for denne gruppen er angitt til <strong>ALDRI</strong> som totalresultatet, så det gamle resultatet beholdes.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Tillatelsen for denne gruppen for dette forumet er angitt til <strong>ALDRI</strong> som totalresultatet, så det gamle resultatet beholdes.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Tillatelsen for denne gruppen er angitt til <strong>ALDRI</strong>, som blir den nye totalverdien ettersom den ikke var angitt ennå (angitt til <strong>NEI</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Tillatelsen for denne gruppen for dette forumet er angitt til <strong>ALDRI</strong>, som blir den nye totalverdien ettersom den ikke var angitt ennå (angitt til <strong>NEI</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Tillatelsen for denne gruppen er angitt til <strong>ALDRI</strong>, som overstyrer den totale <strong>JA</strong> til <strong>ALDRI</strong> for denne brukeren.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Tillatelsen for denne gruppen for dette forumet er angitt til <strong>ALDRI</strong>, som overstyrer den totale <strong>JA</strong> til <strong>ALDRI</strong> for denne brukeren.',
	'TRACE_GROUP_NO'				=> 'Tillatelsen er <strong>NEI</strong> for denne gruppen, så den gamle totalverdien beholdes.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Tillatelsen er <strong>NEI</strong> for denne gruppen i dette forumet, så den gamle totalverdien beholdes.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Tillatelsen for denne gruppen er angitt til <strong>JA</strong>, men den totale <strong>ALDRI</strong> kan ikke overstyres.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Tillatelsen for denne gruppen for dette forumet er angitt til <strong>JA</strong>, men den totale <strong>ALDRI</strong> kan ikke overstyres.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Tillatelsen for denne gruppen er angitt til <strong>JA</strong>, som blir den nye totalverdien fordi den ikke var angitt (angitt til <strong>NEI</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Tillatelsen for denne gruppen for dette forumet er angitt til <strong>JA</strong>, som blir den nye totalverdien fordi den ikke var angitt ennå (angitt til <strong>NEI</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Tillatelsen for denne gruppen er angitt til <strong>JA</strong>, og den totale tillatelsen er allerede angitt til <strong>JA</strong>, så totalresultatet beholdes.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Tillatelsen for denne gruppen for dette forumet er angitt til <strong>JA</strong>, og den totale tillatelsen er allerede angitt til <strong>JA</strong>, så resultatet beholdes.',
	'TRACE_PERMISSION'				=> 'Spor tillatelse – %s',
	'TRACE_RESULT'					=> 'Sporingsresultat',
	'TRACE_SETTING'					=> 'Sporingsinnstilling',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'De forumuavhengige brukertillatelsene summeres til <strong>JA</strong>, men den totale tillatelsen er allerede angitt til <strong>JA</strong>, så totalresultatet beholdes. %sSpor globale tillatelser%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'De forumuavhengige brukertillatelsene summeres til <strong>JA</strong>, noe som overstyrer det gjeldende lokale resultatet <strong>ALDRI</strong>. %sSpor globale tillatelser%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'De forumuavhengige brukertillatelsene summeres til <strong>ALDRI</strong>, noe som ikke påvirker de lokale tillatelsene. %sSpor globale tillatelser%s',

	'TRACE_USER_FOUNDER'					=> 'Brukeren er en grunnlegger, og derfor er administrasjonstillatelsene alltid angitt til <strong>JA</strong>.',
	'TRACE_USER_KEPT'						=> 'Brukerens tillatelse is <strong>NEI</strong>, så den gamle totalverdien beholdes.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Brukerens tillatelse for dette forumet er <strong>NEI</strong>, så den gamle totalverdien beholdes.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Brukerens tillatelse er angitt til <strong>ALDRI</strong> og totalverdien er angitt til <strong>ALDRI</strong>, så ingenting endres.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Brukerens tillatelse for dette forumet er angitt til <strong>ALDRI</strong> og totalverdien er angitt til <strong>ALDRI</strong>, så ingenting endres.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Brukerens tillatelse er angitt til <strong>ALDRI</strong>, som blir totalverdien fordi den var angitt til NEI.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Brukerens tillatelse for dette forumet er angitt til <strong>ALDRI</strong>, som blir totalverdien fordi den var angitt til NEI.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Brukerens tillatelse er angitt til <strong>ALDRI</strong> og overstyrer tidligere <strong>JA</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Brukerens tillatelse for dette forumet er angitt til <strong>ALDRI</strong>, og overstyrer tidligere <strong>JA</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Brukerens tillatelse is <strong>NEI</strong>, og totalverdien ble angitt til NEI, så den blir til standardverdien <strong>ALDRI</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Brukerens tillatelse for dette forumet er <strong>NEI</strong>, og totalverdien ble angitt til NEI, så den blir til standardverdien <strong>ALDRI</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Brukerens tillatelse er angitt til <strong>JA</strong>,men totalen <strong>ALDRI</strong> kan ikke overstyres.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Brukerens tillatelse for dette forumet er angitt til <strong>JA</strong>, men totalen <strong>ALDRI</strong> kan ikke overstyres.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Brukerens tillatelse er angitt til <strong>JA</strong>, som blir totalverdien fordi den var angitt til<strong>NEI</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Brukerens tillatelse for dette forumet er angitt til <strong>JA</strong>, som blir totalverdien fordi den var angitt til <strong>NEI</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Brukerens tillatelse er angitt til <strong>JA</strong> og totalverdien er angitt til <strong>JA</strong>, så ingenting endres.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Brukerens tillatelse for dette forumet er angitt til <strong>JA</strong> og totalverdien er angitt til <strong>JA</strong>, så ingenting endres.',
	'TRACE_WHO'								=> 'Hvem',
	'TRACE_TOTAL'							=> 'Totalt',

	'USERS_NOT_ASSIGNED'			=> 'Ingen brukere er tilordnet til denne rollen',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'er medlem av følgende forhåndsdefinerte grupper',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'er medlem av følgende egendefinerte grupper',

	'VIEW_ASSIGNED_ITEMS'	=> 'Vis tilordnede elementer',
	'VIEW_LOCAL_PERMS'		=> 'Lokale tillatelser',
	'VIEW_GLOBAL_PERMS'		=> 'Globale tillatelser',
	'VIEW_PERMISSIONS'		=> 'Vis tillatelser',

	'WRONG_PERMISSION_TYPE'				=> 'Feil tillatelsestype er valgt.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Innstillingene for tillatelser er i feil format, phpBB kan ikke behandle dem på riktig måte.',
));
