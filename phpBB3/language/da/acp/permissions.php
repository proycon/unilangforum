<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: permissions.php 476 2015-01-02 08:13:25Z jan_skovsgaard $
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
		<p>Tilladelsedefinitionerne er meget fintmaskede og grupperet i disse fire hovedsektioner:</p>

		<h2>Globale tilladelser</h2>
		<p>Kontrollerer tilladelser omfattende hele boardsystemet. Disse er underopdelt i tilladelser for brugere, grupper, administratorer og globale redaktører.</p>

		<h2>Forumbaserede tilladelser</h2>
		<p>Kontrollerer tilladelser pr. forum og er underopdelt i tilladelser for forum, forumredaktører, brugere og grupper.</p>

		<h2>Rollebaserede tilladelser</h2>
		<p>Anvendes til at tildele fast definerede sammensætninger af tilladelser, svarende til specifikke roller eller opgaver på boardet. Hermed kan brugere eller grupper hurtigt tildeles et ensartet sæt af tilladelser. Standardrollerne burde dække administrationen af små som store boardsystemer, men du har muligheden for at oprette helt specialtilpassede roller og kan i øvrigt tilpasse standardrollerne som det passer dig i de fire undersektioner.</p>

		<h2>Tilladelsemasker</h2>
		<p>Her vises de tildelte tilladelser for henholdsvis administratorer, brugere, redaktører (globale og lokale) og i fora.</p>

		<br />

		<p>Læs mere i den overordnede engelske beskrivelse <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">Indstil tilladelser i vores Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'Aldrig',
	'ACL_SET'				=> 'Indstilling af tilladelser',
	'ACL_SET_EXPLAIN'		=> 'Tilladelser er baseret på et simpelt <strong>JA</strong>/<strong>NEJ</strong> system. Brug af indstillingen <strong>ALDRIG</strong> for en bruger eller brugergruppe tilsidesætter alle andre værdier tildelt denne. Vælg <strong>NEJ</strong> hvis du ikke ønsker at tildele en værdi til en indstilling for denne bruger eller gruppe. Hvis værdierne for denne indstilling er angivet andre steder vil disse blive brugt fremfor denne, ellers antages <strong>ALDRIG</strong>. Alle valgte objekter (med afkrydsningsfeltet foran dem) vil få kopieret tilladelsesættet du angav.',
	'ACL_SETTING'			=> 'Indstilling',

	'ACL_TYPE_A_'			=> 'Administrative tilladelser',
	'ACL_TYPE_F_'			=> 'Forumtilladelser',
	'ACL_TYPE_M_'			=> 'Redaktørtilladelser',
	'ACL_TYPE_U_'			=> 'Brugertilladelser',

	'ACL_TYPE_GLOBAL_A_'	=> 'Administrative tilladelser',
	'ACL_TYPE_GLOBAL_U_'	=> 'Brugertilladelser',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globale redaktørtilladelser',
	'ACL_TYPE_LOCAL_M_'		=> 'Forumredaktørtilladelser',
	'ACL_TYPE_LOCAL_F_'		=> 'Forumtilladelser',

	'ACL_NO'				=> 'Nej',
	'ACL_VIEW'				=> 'Viser tilladelser',
	'ACL_VIEW_EXPLAIN'		=> 'Her kan du se de effektive tilladelser bruger eller gruppe er i besiddelse af. En rød firkant betyder at bruger eller gruppe ikke har tilladelsen, en grøn firkant at bruger eller gruppe har tilladelsen.',
	'ACL_YES'				=> 'Ja',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Her kan du tildele administratortilladelser til brugere eller grupper. Alle brugere med administratortilladelser kan se administratorkontrolpanelet.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Her kan du udpege brugere og grupper som forumredaktører. For at give brugere adgang til fora, for at definere globale redaktørtilladelser eller administratorer brug venligst den dertil indrettede side.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Her kan du ændre hvilke brugere og grupper der kan tilgå hvilke fora. For at udnævne redaktører eller administratorer brug venligst den dertil indrettede side.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'	=> 'Her kan du kopiere forumtilladelser fra et forum til et eller flere andre fora.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Her kan du tildele globale redaktørtilladelser til brugere eller grupper. Disse redaktører fungerer som almindelige redaktører bortset fra at de har adgang til alle fora i systemet.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du tildele forumtilladelser til grupper.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Her kan du tildele globale tilladelser til grupper - brugertilladelser, globale redaktør- og administratortilladelser. Brugertilladelser inkluderer muligheder som brug af avatars, private beskeder etc. Globale redaktørtilladelser; som at kunne godkende indlæg, administrere emner og udelukkelser. Og sidst men ikke mindst give tilladelse til hvem der må ændre i tilladelsessystemet, definere tilpassede BBkode-tags, administrere fora etc. Individuelle brugeres tilladelser bør kun i særlige tilfælde ændres, den foretrukne metode er at samle brugere i grupper og tildele gruppetilladelser.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Her kan du administrere rollerne for administrative tilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres tilladelserne for de elementer der har denne rolle også.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Her kan du administrere rollerne for forumtilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres tilladelserne for de elementer der har denne rolle også.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Her kan du administrere rollerne for redaktionelle tilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres tilladelserne for de elementer der har denne rolle også.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Her kan du administrere rollerne for brugertilladelser. Roller er effektive tilladelser, hvis du ændrer en rolle ændres tilladelserne for de elementer der har denne rolle også.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du tildele forumtilladelser til brugere.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Her kan du tildele globale tilladelser til brugere - brugertilladelser, globale redaktør- og administratortilladelser. Brugertilladelser inkluderer muligheder som brug af avatars, private beskeder etc. Globale redaktørtilladelser; som at kunne godkende indlæg, administrere emner og udelukkelser. Og sidst men ikke mindst give tilladelse til hvem der må ændre i tilladelsessystemet, definere tilpassede BBkode-tags, administrere fora etc. For at ændre disse indstillinger for et større antal brugere anbefales det at bruge gruppetilladelsessystemet. Brugeres tilladelser bør kun i særlige tilfælde ændres, den foretrukne metode er at samle brugere i grupper og tildele gruppetilladelser.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Her kan du se de effektive administrative tilladelser tildelt valgte brugere eller grupper.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du se de globale redaktionelle tilladelser tildelt de valgte brugere eller grupper.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Her kan du se forumtilladelser tildelt valgte brugere eller grupper og fora.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Her kan du se forumredaktørtilladelser tildelt valgte brugere eller grupper og fora.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Her kan du se de effektive brugertilladelser tildelt valgte brugere eller grupper.',

	'ADD_GROUPS'				=> 'Tilføj grupper',
	'ADD_PERMISSIONS'			=> 'Tilføj tilladelser',
	'ADD_USERS'					=> 'Tilføj brugere',
	'ADVANCED_PERMISSIONS'		=> 'Avancerede tilladelser',
	'ALL_GROUPS'				=> 'Vælg alle grupper',
	'ALL_NEVER'					=> 'Alle <strong>ALDRIG</strong>',
	'ALL_NO'					=> 'Alle <strong>NEJ</strong>',
	'ALL_USERS'					=> 'Vælg alle brugere',
	'ALL_YES'					=> 'Alle <strong>JA</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Anvend alle tilladelser',
	'APPLY_PERMISSIONS'			=> 'Anvend tilladelser',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Tilladelser og roller defineret for dette punkt vil kun blive anvendt for dette og andre valgte punkter.',
	'AUTH_UPDATED'				=> 'Tilladelser er blevet opdateret',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Er du sikker på at du vil udføre denne operation? Vær opmærksom på at denne handling overskriver valgte måls eksisterende tilladelser.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forummet du vil kopiere tilladelser fra.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Det eller de fora der skal have samme tilladelser som ovennævnte.',
	'COPY_PERMISSIONS_FROM'					=> 'Kopier tilladelser fra',
	'COPY_PERMISSIONS_TO'					=> 'Tildel samme tilladelser til',

	'CREATE_ROLE'				=> 'Opret rolle',
	'CREATE_ROLE_FROM'			=> 'Brug indstillinger fra...',
	'CUSTOM'					=> 'Brugerdefineret...',

	'DEFAULT'					=> 'Standard',
	'DELETE_ROLE'				=> 'Slet rolle',
	'DELETE_ROLE_CONFIRM'		=> 'Er du sikker på at du vil slette denne rolle? Elementer der er tildelt tilladelser via denne rolle vil <strong>ikke</strong> miste disse.',
	'DISPLAY_ROLE_ITEMS'		=> 'Se elementer der bruger denne rolle',

	'EDIT_PERMISSIONS'			=> 'Ret tilladelser',
	'EDIT_ROLE'					=> 'Ret rolle',

	'GROUPS_NOT_ASSIGNED'		=> 'Ingen grupper er tildelt tilladelser i henhold til denne rolle',

	'LOOK_UP_GROUP'				=> 'Slå brugergruppe op',
	'LOOK_UP_USER'				=> 'Slå bruger op',

	'MANAGE_GROUPS'		=> 'Administrer grupper',
	'MANAGE_USERS'		=> 'Administrer brugere',

	'NO_AUTH_SETTING_FOUND'		=> 'Tilladelsesindstillinger ikke defineret.',
	'NO_ROLE_ASSIGNED'			=> 'Ingen rolle tilknyttet...',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Indstilling til denne rolle ændrer ikke tilladelser i højre side. Hvis du vil nulstille/fjerne alle tilladelser bør du bruge "Alle <strong>NEJ</strong>"-linket.',
	'NO_ROLE_AVAILABLE'			=> 'Ingen rolle tilgængelig',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Giv venligst rollen et navn.',
	'NO_ROLE_SELECTED'			=> 'Denne rolle findes ikke.',
	'NO_USER_GROUP_SELECTED'	=> 'Du har ikke valgt nogen bruger eller gruppe.',

	'ONLY_FORUM_DEFINED'	=> 'Du definerede kun fora i dit valg. Vælg venligst også mindst en bruger eller en gruppe.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Tilladelser og roller tilknyttes også alle valgte objekter',
	'PLUS_SUBFORUMS'				=> '+ underfora',

	'REMOVE_PERMISSIONS'			=> 'Fjern tilladelser',
	'REMOVE_ROLE'					=> 'Fjern rolle',
	'RESULTING_PERMISSION'	=> 'Resulterende tilladelse',
	'ROLE'							=> 'Rolle',
	'ROLE_ADD_SUCCESS'				=> 'Rolle korrekt tilføjet.',
	'ROLE_ASSIGNED_TO'				=> 'Nedenstående har rollen %s',
	'ROLE_DELETED'					=> 'Rolle korrekt fjernet.',
	'ROLE_DESCRIPTION'				=> 'Rollebeskrivelse',
	
	'ROLE_ADMIN_FORUM'		=> 'Forumadministrator',
	'ROLE_ADMIN_FULL'		=> 'Fuldgyldig administrator',
	'ROLE_ADMIN_STANDARD'	=> 'Standardadministrator',
	'ROLE_ADMIN_USERGROUP'	=> 'Bruger- og gruppeadministrator',
	'ROLE_FORUM_BOT'		=> 'Bot adgang',
	'ROLE_FORUM_FULL'		=> 'Fuld adgang',
	'ROLE_FORUM_LIMITED'	=> 'Begrænset adgang',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Begrænset adgang + afstemninger',
	'ROLE_FORUM_NOACCESS'		=> 'Ingen adgang',
	'ROLE_FORUM_ONQUEUE'		=> 'Indlæg skal godkendes',
	'ROLE_FORUM_POLLS'			=> 'Standardadgang + afstemninger',
	'ROLE_FORUM_READONLY'		=> 'Kun læseadgang',
	'ROLE_FORUM_STANDARD'		=> 'Standardadgang',
	'ROLE_FORUM_NEW_MEMBER' => 'Nye brugeres adgang',
	'ROLE_MOD_FULL'				=> 'Fuldgyldig redaktør',
	'ROLE_MOD_QUEUE'		=> 'Køredaktør',
	'ROLE_MOD_SIMPLE'		=> 'Simpel redaktør',
	'ROLE_MOD_STANDARD'		=> 'Standardredaktør',
	'ROLE_USER_FULL'		=> 'Alle funktioner',
	'ROLE_USER_LIMITED'		=> 'Begrænsede funktioner',
	'ROLE_USER_NOAVATAR'	=> 'Ingen avatar',
	'ROLE_USER_NOPM'		=> 'Ingen private beskeder',
	'ROLE_USER_STANDARD'	=> 'Standardfunktioner',
	'ROLE_USER_NEW_MEMBER' => 'Nye brugeres funktioner',

	'ROLE_DESCRIPTION_ADMIN_FORUM'		=> 'Kan tilgå forumadministration og forumtilladelsesindstillinger.',
	'ROLE_DESCRIPTION_ADMIN_FULL'		=> 'Har adgang til alle administrative funktioner på dette board.<br />Anbefales ikke.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Har adgang til de fleste administrative indstillinger, men ikke til server- og systemrelaterede værktøjer.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Kan administrere grupper og brugere: Ændre tilladelser, indstillinger, administrere udelukkelser og administrere rang.',
	'ROLE_DESCRIPTION_FORUM_BOT'		=> 'Denne rolle anbefales til botter og søgespiders.',
	'ROLE_DESCRIPTION_FORUM_FULL'		=> 'Kan bruge alle forumfunktioner, inklusiv skrivning af bekendtgørelser og opslag. Kan også ignorere floodbegrænsninger.<br />Anbefales ikke til almindelige brugere.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Kan bruge nogle forumfunktioner, men kan ikke vedhæfte filer eller bruge indlægsikoner.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Som begrænset adgang, men kan også oprette afstemninger.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Kan hverken se eller tilgå dette forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Kan bruge de fleste forumfunktioner inklusiv vedhæftning af filer, men indlæg og emner skal godkendes af en redaktør.',
	'ROLE_DESCRIPTION_FORUM_POLLS'		=> 'Som standardadgang, men kan også oprette afstemninger.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Kan læse forummet, men kan ikke oprette nye emner eller svare på indlæg.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Kan bruge de fleste forumfunktioner, inklusiv vedhæftning af filer og sletning af egne emner, men kan ikke låse egne emner og ikke oprette afstemninger.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER' => 'Rolle for medlemmer af brugergruppen Nye brugere. Tilladelsen <strong>ALDRIG</strong> er indeholdt heri, med det formål at indskrænke nye brugeres muligheder.',
	'ROLE_DESCRIPTION_MOD_FULL'			=> 'Kan bruge alle redaktørfunktioner, inklusiv udelukkelse.',
	'ROLE_DESCRIPTION_MOD_QUEUE'		=> 'Kan bruge redigeringskøen til at validere og redigere indlæg, men intet andet.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'		=> 'Kan kun bruge de grundlæggende emnefunktioner. Kan ikke give advarsler eller bruge redigeringskøen.',
	'ROLE_DESCRIPTION_MOD_STANDARD'		=> 'Kan bruge de fleste redaktørværktøjer, men kan ikke udelukke brugere eller ændre indlægsforfatter.',
	'ROLE_DESCRIPTION_USER_FULL'		=> 'Kan bruge alle tilgængelige forumfunktioner for brugere, inklusiv ændring af brugernavn og ignorering af floodbegrænsning.<br />Anbefales ikke.',
	'ROLE_DESCRIPTION_USER_LIMITED'		=> 'Kan tilgå visse af brugerfunktionerne. Vedhæftede filer, emails eller brug af messengere er ikke tilladt.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Har et begrænset funktionssæt og kan ikke bruge avatarfunktionen.',
	'ROLE_DESCRIPTION_USER_NOPM'		=> 'Har et begrænset funktionssæt, og kan ikke bruge private beskeder.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Kan tilgå de fleste, men ikke alle brugerfunktioner. Kan for eksempel ikke ændre brugernavn eller ignorere floodbegrænsningen.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER' => 'Rolle for medlemmer af brugergruppen Nye brugere. Tilladelsen <strong>ALDRIG</strong> er indeholdt heri, med det formål at indskrænke nye brugeres muligheder.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Du kan indtaste en kort forklaring på hvad rollen gør eller er beregnet på. Den her indtastede tekst kan også læses på tilladelsessiderne.',
	'ROLE_DESCRIPTION_LONG'			=> 'Rollebeskrivelsen er for lang, afkort den venligst til maksimalt 4000 tegn.',
	'ROLE_DETAILS'					=> 'Rolleinformation',
	'ROLE_EDIT_SUCCESS'				=> 'Rolle redigeret.',
	'ROLE_NAME'						=> 'Rollenavn',
	'ROLE_NAME_ALREADY_EXIST'		=> 'En rolle med navnet <strong>%s</strong> findes allerede for den angivne tilladelsestype.',
	'ROLE_NOT_ASSIGNED'				=> 'Ingen er tildelt tilladelser i henhold til denne rolle.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Det eller de valgte fora findes ikke.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Den eller de valgte grupper findes ikke.',
	'SELECTED_USER_NOT_EXIST'		=> 'Den eller de valgte brugere findes ikke.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Det her valgte forum vil inkludere alle underfora i valget.',
	'SELECT_ROLE'					=> 'Vælg rolle...',
	'SELECT_TYPE'					=> 'Vælg type',
	'SET_PERMISSIONS'				=> 'Indstil tilladelser',
	'SET_ROLE_PERMISSIONS'			=> 'Se eller tilpas rolletilladelser',
	'SET_USERS_PERMISSIONS'			=> 'Se eller tilpas brugertilladelser',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Se eller tilpas forumtilladelser for brugere',

	'TRACE_DEFAULT'					=> 'Standard er alle tilladelser sat til <strong>NEJ</strong> (ikke sat), så tilladelsen kan tilsidesættes af andre indstillinger.',
	'TRACE_FOR'						=> 'Undersøg for',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Denne gruppes tilladelse er sat til <strong>ALDRIG</strong> som det totale resultat, så det gamle resultat bibeholdes.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Denne gruppes tilladelse for dette forum er sat til <strong>ALDRIG</strong> som det totale resultat, så det gamle resultat bibeholdes.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Denne gruppes tilladelse er sat til <strong>ALDRIG</strong> hvilket bliver den nye totalværdi da det endnu ikke var sat (sat til <strong>NEJ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Denne gruppes tilladelse for dette forum er sat til <strong>ALDRIG</strong> hvilket bliver den nye totalværdi da det endnu ikke var sat (sat til <strong>NEJ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Denne gruppes tilladelse er sat til <strong>ALDRIG</strong> hvilket tilsidesætter det totale <strong>JA</strong> til et <strong>ALDRIG</strong> for denne bruger.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Denne gruppes tilladelse for dette forum er sat til <strong>ALDRIG</strong> hvilket tilsidesætter det totale <strong>JA</strong> til et<strong>ALDRIG</strong> for denne bruger.',
	'TRACE_GROUP_NO'				=> 'Tilladelsen er <strong>NEJ</strong> for denne gruppe så den gamle totalværdi bibeholdes.',
	'TRACE_GROUP_NO_LOCAL'	=> 'Tilladelsen er <strong>NEJ</strong> for denne gruppe i dette forum så den gamle totalværdi bibeholdes.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Denne gruppes tilladelse er sat til <strong>JA</strong> men totalen <strong>ALDRIG</strong> kan ikke tilsidesættes.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Denne gruppes tilladelse i dette forum er sat til <strong>JA</strong> men totalen <strong>ALDRIG</strong> kan ikke tilsidesættes.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Denne gruppes tilladelse er sat til <strong>JA</strong> hvilket bliver den nye totalværdi da det endnu ikke var sat (sat til <strong>NEJ</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Denne gruppes tilladelse i dette forum er sat til <strong>JA</strong> hvilket bliver den nye totalværdi da det endnu ikke var sat (set til <strong>NEJ</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Denne gruppes tilladelse er sat til <strong>JA</strong> og de totale tilladelser er allerede sat til <strong>JA</strong>, så det totale resultat bibeholdes.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Denne gruppes tilladelse i dette forum er sat til <strong>JA</strong> og de totale tilladelser er allerede sat til <strong>JA</strong>, så det totale resultat bibeholdes.',
	'TRACE_PERMISSION'				=> 'Undersøg tilladelse - %s',
	'TRACE_RESULT'	=> 'Undersøg resultat',
	'TRACE_SETTING'					=> 'Undersøg indstilling',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Den forumuafhængige brugertilladelse evaluerer til <strong>JA</strong> men den totale tilladelse er allerede sat til <strong>JA</strong>, så det totale resultat bibeholdes. %sUndersøg global tilladelse%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Den forumuafhængige brugertilladelse evaluerer til <strong>JA</strong> hvilket tilsidesætter det nuværende lokale resultat <strong>ALDRIG</strong>. %sUndersøg global tilladelse%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Den forumuafhængige brugertilladelse evaluerer til <strong>ALDRIG</strong> hvilket ikke påvirker den lokale tilladelse. %sUndersøg global tilladelse%s',

	'TRACE_USER_FOUNDER'	=> 'Bruger er grundlægger, administratortilladelser er derfor sat til <strong>JA</strong>.',
	'TRACE_USER_KEPT'		=> 'Brugertilladelsen er <strong>NEJ</strong> så den oprindelige totalværdi bevares.',
	'TRACE_USER_KEPT_LOCAL'	=> 'Brugertilladelsen i dette forum er <strong>NEJ</strong> så den oprindelige totalværdi bevares.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Brugertilladelsen er sat til <strong>ALDRIG</strong> og den totale værdi er sat til <strong>ALDRIG</strong>, så intet er ændret.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <strong>ALDRIG</strong> og den totale værdi er sat til <strong>ALDRIG</strong>, så intet er ændret.',
	'TRACE_USER_NEVER_TOTAL_NO'		=> 'Brugertilladelsen er sat til <strong>ALDRIG</strong> hvilket bliver den totale værdi da den var sat til <strong>NEJ</strong>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <strong>ALDRIG</strong> hvilket bliver den totale værdi da den var sat til <strong>NEJ</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Brugertilladelsen er sat til <strong>ALDRIG</strong> og tilsidesætter det tidligere <strong>JA</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <strong>ALDRIG</strong> og tilsidesætter det tidligere <strong>JA</strong>.',
	'TRACE_USER_NO_TOTAL_NO'		=> 'Brugertilladelsen er <strong>NEJ</strong> og den totale værdi var sat til <strong>NEJ</strong> så den stilles standard på <strong>ALDRIG</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'Brugertilladelsen i dette forum er <strong>NEJ</strong> og den totale værdi var sat til <strong>NEJ</strong> så den stilles standard på <strong>ALDRIG</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Brugertilladelsen er sat til <strong>JA</strong> men totalen <strong>ALDRIG</strong> kan ikke tilsidesættes.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <strong>JA</strong> men totalen <strong>ALDRIG</strong> kan ikke tilsidesættes.',
	'TRACE_USER_YES_TOTAL_NO'		=> 'Brugertilladelsen er sat til <strong>JA</strong> hvilket vil blive den totale værdi da den var sat til <strong>NEJ</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <strong>JA</strong> hvilket bliver den totale værdi da den var sat til <strong>NEJ</strong>.',
	'TRACE_USER_YES_TOTAL_YES'		=> 'Brugertilladelsen er sat til <strong>JA</strong> og den totale værdi er sat til <strong>JA</strong>, så intet er ændret.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'Brugertilladelsen i dette forum er sat til <strong>JA</strong> og den totale værdi er sat til <strong>JA</strong>, så intet er ændret.',
	'TRACE_WHO'						=> 'Hvem',
	'TRACE_TOTAL'					=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Ingen brugere er tildelt tilladelser svarende til denne rolle',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'er medlem af følgende prædefinerede grupper',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'er medlem af følgende brugerdefinerede grupper',

	'VIEW_ASSIGNED_ITEMS'	=> 'Se rolleindehavere',
	'VIEW_LOCAL_PERMS'              => 'Lokale tilladelser',
	'VIEW_GLOBAL_PERMS'             => 'Globale tilladelser',
	'VIEW_PERMISSIONS'		=> 'Vis tilladelser',

	'WRONG_PERMISSION_TYPE'	=> 'Forkert tilladelsetype valgt',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Tilladelseindstillingerne er angivet i et forkert format, phpBB kan ikke udføre disse korrekt.',
));
