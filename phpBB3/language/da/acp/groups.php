<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: groups.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Her administrerer du alle dine brugergrupper. Du kan slette, oprette og redigere eksisterende grupper, herunder ændre disses navn, og status til at være åben, skjult eller lukket. Desuden kan du her udpege gruppeledere.',
	'ADD_GROUP_CATEGORY'      => 'Tilføj kategori',
	'ADD_USERS'						=> 'Tilføj brugere',
	'ADD_USERS_EXPLAIN'				=> 'Her kan du tilføje nye brugere til gruppen. Du kan vælge om gruppen skal være ny standardgruppe for de valgte brugere. Du kan ydermere udpege dem som gruppeledere. Indtast venligst hvert brugernavn på en separat linie.',

	'COPY_PERMISSIONS'				=> 'Kopier tilladelser fra',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Når gruppen er oprettet vil den have samme tilladelser som den her valgte.',
	'CREATE_GROUP'					=> 'Opret ny gruppe',

	'GROUPS_NO_MEMBERS'				=> 'Denne gruppe har ingen medlemmer',
	'GROUPS_NO_MODS'				=> 'Ingen gruppeledere udpeget',
	
	'GROUP_APPROVE'					=> 'Godkend bruger',
	'GROUP_APPROVED'				=> 'Gruppemedlemmer',
	'GROUP_AVATAR'					=> 'Gruppeavatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Billedet vises i gruppekontrolpanelet.',
	'GROUP_CATEGORY_NAME'     		=> 'Kategorinavn',
	'GROUP_CLOSED'					=> 'Lukket',
	'GROUP_COLOR'					=> 'Gruppefarve',
	'GROUP_COLOR_EXPLAIN'			=> 'Definerer farven som gruppemedlemmers navne vises med, lad være tom for brugerstandard.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1  => 'Er du sikker på du vil tilføje brugeren %2$s til gruppen?',
		2  => 'Er du sikker på du vil tilføje brugerne %2$s til gruppen?',
	),
	'GROUP_CREATED'					=> 'Gruppen er oprettet.',
	'GROUP_DEFAULT'					=> 'Brugers standardgruppe',
	'GROUP_DEFS_UPDATED'			=> 'Standardgruppe sat for alle valgte medlemmer.',
	'GROUP_DELETE'					=> 'Slet bruger fra gruppe',
	'GROUP_DELETED'					=> 'Gruppe slettet og standardbrugergrupper indstillet.',
	'GROUP_DEMOTE'					=> 'Degrader gruppeleder',
	'GROUP_DESC'					=> 'Gruppebeskrivelse',
	'GROUP_DETAILS'					=> 'Gruppeinformation',
	'GROUP_EDIT_EXPLAIN'			=> 'Her har du mulighed for at ændre en eksisterende gruppe. Bl.a. navn, beskrivelse og type (åben, lukket, m.v.). Du kan også sætte indstillinger som omfatter hele gruppen, bl.a. den farve gruppemedlemmers brugernavne vises med, rang m.v. Ændringer her overskriver brugeres nuværende indstillinger. Bemærk venligst at gruppemedlemmer kan ændre deres gruppeavatar, medmindre du sætter passende brugertilladelser.',
	'GROUP_ERR_USERS_EXIST'			=> 'De angivne brugere er allerede medlemmer af denne gruppe.',
	'GROUP_FOUNDER_MANAGE'			=> 'Kan kun ændres af grundlæggere',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Gruppen kan kun ændres af grundlæggere. Brugere med tilladelse til at ændre i grupper og gruppens medlemmer vil stadig kunne se den.',
	'GROUP_HIDDEN'					=> 'Skjult',
	'GROUP_LANG'					=> 'Gruppesprog',
	'GROUP_LEAD'					=> 'Gruppeledere',
	'GROUP_LEADERS_ADDED'			=> 'Nye ledere tilføjet gruppe.',
	'GROUP_LEGEND'					=> 'Vis gruppe i farveforklaring',
	'GROUP_LIST'					=> 'Nuværende medlemmer',
	'GROUP_LIST_EXPLAIN'			=> 'Dette er en komplet liste over alle nuværende brugere med medlemskab af denne gruppe. Du kan slette medlemmer (undtaget i bestemte specialgrupper) eller tilføje nye som du vil.',
	'GROUP_MEMBERS'					=> 'Gruppemedlemmer',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dette er en komplet liste over alle medlemmer af denne brugergruppe. Den inkluderer separate sektioner for ledere, afventende og eksisterende medlemmer. Herfra kan du administrere alle aspekter af hvem der har medlemsskab af denne gruppe og hvad deres rolle er. For at fjerne en leder, men beholde vedkommende i gruppen, brug "Degrader" i stedet for at slette. Brug på tilsvarende måde "Forfrem" til at gøre et eksisterende medlem til leder.',
	'GROUP_MESSAGE_LIMIT'			=> 'Maksimalt antal private beskeder pr. mappe for medlemmer af gruppe',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denne indstilling overskriver indstillingerne for maksimalt antal private beskeder i en mappe. En værdi på 0 betyder at brugerens standardgrænse bruges.',
	'GROUP_MODS_ADDED'				=> 'Nye gruppeledere tilføjet.',
	'GROUP_MODS_DEMOTED'			=> 'Gruppeledere degraderet.',
	'GROUP_MODS_PROMOTED'			=> 'Gruppemedlemmer forfremmet.',
	'GROUP_NAME'					=> 'Gruppenavn',
	'GROUP_NAME_TAKEN'				=> 'Gruppenavnet bruges allerede, vælg venligst et andet.',
	'GROUP_OPEN'					=> 'Åben',
	'GROUP_PENDING'					=> 'Afventende brugere',
	'GROUP_OPTIONS_SAVE'		=> 'Gruppes overordnede muligheder',
	'GROUP_MAX_RECIPIENTS'		=> 'Maksimalt antal tilladte modtagere pr. private besked',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Det maksimale antal modtagere i private beskeder. Hvis 0 anvendes boardets overordnede indstillinger.',
	'GROUP_PROMOTE'					=> 'Forfrem til gruppeleder',
	'GROUP_RANK'					=> 'Grupperang',
	'GROUP_RECEIVE_PM'				=> 'Gruppe kan modtage private beskeder',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Bemærk venligst at skjulte grupper ikke kan tilsendes beskeder, uanset denne indstilling.',
	'GROUP_REQUEST'					=> 'Forespørgsel',
	'GROUP_SETTINGS_SAVE'		=> 'Gruppes overordnede indstillinger',
	'GROUP_SKIP_AUTH'				=> 'Undtag gruppeleder fra denne gruppes tilladelser',
	'GROUP_SKIP_AUTH_EXPLAIN'	=> 'Aktivering bestemmer at gruppeleder ikke tildeles gruppes tilladelser.',
	'GROUP_SPECIAL'          => 'Prædefineret',
	'GROUP_TEAMPAGE'        => 'Vis gruppe på holdsiden',
	'GROUP_TYPE'					=> 'Gruppetype',
	'GROUP_TYPE_EXPLAIN'			=> 'Dette afgør hvorvidt brugere kan tilmelde sig eller se denne gruppe.',
	'GROUP_UPDATED'					=> 'Gruppeindstillinger opdateret.',

	'GROUP_USERS_ADDED'				=> 'Nye brugere tilføjet gruppen.',
	'GROUP_USERS_EXIST'				=> 'De valgte brugere er allerede medlemmer.',
	'GROUP_USERS_REMOVE'			=> 'Brugere fjernet fra gruppe og nye standardindstillinger sat.',

	'LEGEND_EXPLAIN'        => 'Disse grupper vises i gruppeoversigten:',	//These are the groups which are displayed in the group legend:
	'LEGEND_SETTINGS'        => 'Gruppeoversigt',	//Legend settings
	'LEGEND_SORT_GROUPNAME'      => 'Sorter oversigt efter gruppenavn',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'  => 'Sorteringen herunder ignoreres, hvis denne aktiveres.',

	'MANAGE_LEGEND'      => 'Gruppeoversigt',	//Manage group legend
	'MANAGE_TEAMPAGE'    => 'Holdsiden',	//Manage teampage
	'MAKE_DEFAULT_FOR_ALL'	=> 'Sæt gruppe som alle medlemmers standardgruppe',
	'MEMBERS'				=> 'Medlemmer',

	'NO_GROUP'					=> 'Ingen gruppe angivet.',
	'NO_GROUPS_ADDED'      => 'Ingen grupper er tilføjet.',
	'NO_GROUPS_CREATED'			=> 'Endnu ingen gruppe oprettet.',
	'NO_PERMISSIONS'			=> 'Kopier ikke tilladelser',
	'NO_USERS' 					=> 'Du har ikke tilknyttet brugere.',
	'NO_USERS_ADDED'			=> 'Ingen brugere blev tilføjet gruppen.',
	'NO_VALID_USERS'			=> 'Du har ikke angivet nogle brugere der er berettiget til dette.',

	'SELECT_GROUP'        => 'Vælg en gruppe',
	'SPECIAL_GROUPS'			=> 'Prædefinerede grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Prædefinerede grupper er specielle grupper, de kan ikke slettes eller rettes direkte. Du kan dog stadig tilføje brugere og ændre basisindstillinger.',

	'TEAMPAGE'					=> 'Holdside',
	'TEAMPAGE_DISP_ALL'      => 'Alle medlemskaber',
	'TEAMPAGE_DISP_DEFAULT'    => 'Kun brugers standardgruppe',
	'TEAMPAGE_DISP_FIRST'    => 'Kun første medlemskab',
	'TEAMPAGE_EXPLAIN'      => 'Disse grupper vises på holdsiden:',
	'TEAMPAGE_FORUMS'      => 'Vis redigerbare fora',
	'TEAMPAGE_FORUMS_EXPLAIN'  => 'Vælges ja, vil de fora redaktører har redaktørstatus i, vises i deres række. Funktionen kan være databasetung for store boards.',
	'TEAMPAGE_MEMBERSHIPS'    => 'Vis brugers gruppemedlemskaber',
	'TEAMPAGE_SETTINGS'      => 'Indstillinger for holdside',	//Teampage settings
	'TOTAL_MEMBERS'				=> 'Medlemmer',

	'USERS_APPROVED'				=> 'Brugere godkendt.',
	'USER_DEFAULT'					=> 'Brugerstandard',
	'USER_DEF_GROUPS'				=> 'Brugerdefinerede grupper',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dette er grupper oprettet af dig eller en anden administrator af dette board. Du kan administrere medlemskaber såvel som rette gruppeegenskaber eller endda slette gruppen.',
	'USER_GROUP_DEFAULT'			=> 'Sæt som standardgruppe',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Hvis du svarer "Ja" her vil det sætte gruppen som standardgruppe for de tilføjede brugere.',
	'USER_GROUP_LEADER'				=> 'Sæt som gruppeleder',
));
