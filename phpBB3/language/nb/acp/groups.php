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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Fra dette panelet kan du administrere alle brukergrupper. Du kan slette, opprette og redigere eksisterende grupper. Videre kan du velge gruppeledere, endre gruppestatusen mellom åpen/skjult/lukket og angi navn på og beskrivelse av gruppen.',
	'ADD_GROUP_CATEGORY'			=> 'Legg til kategori',
	'ADD_USERS'						=> 'legg til brukere',
	'ADD_USERS_EXPLAIN'				=> 'Her kan du legge til nye brukere i gruppen. Du kan velge hvorvidt denne gruppen skal være ny standard for de valgte brukerne. I tillegg kan du definere dem som gruppeledere. Skriv inn hvert brukernvan på sin egen linje.',

	'COPY_PERMISSIONS'				=> 'Kopier tillatelser fra',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Når den er opprettet, vil gruppen ha de samme tillatelsene som den du velger her.',
	'CREATE_GROUP'					=> 'Opprett ny gruppe',

	'GROUPS_NO_MEMBERS'				=> 'Denne gruppen har ingen medlemmer',
	'GROUPS_NO_MODS'				=> 'Ingen gruppeledere er definert',

	'GROUP_APPROVE'					=> 'Godkjenn bruker',
	'GROUP_APPROVED'				=> 'Godkjente brukere',
	'GROUP_AVATAR'					=> 'Gruppeavatar',
	'GROUP_AVATAR_EXPLAIN'			=> 'Dette bildet vises i gruppekontrollpanelet.',
	'GROUP_CATEGORY_NAME'			=> 'Kategorinavn',
	'GROUP_CLOSED'					=> 'Lukket',
	'GROUP_COLOR'					=> 'Gruppefarge',
	'GROUP_COLOR_EXPLAIN'			=> 'Definerer hvilken farge gruppemedlemmenes brukernavn vil vises med, la stå tom for brukerstandard.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Er du sikker på at du vil legge til brukeren %2$s i gruppen?',
		2	=> 'Er du sikker på at du vil legge til brukerne %2$s i gruppen?',
	),
	'GROUP_CREATED'					=> 'Gruppen er opprettet.',
	'GROUP_DEFAULT'					=> 'Gjør gruppen til standard for bruker',
	'GROUP_DEFS_UPDATED'			=> 'Standardgruppe angitt for alle valgte medlemmer.',
	'GROUP_DELETE'					=> 'Fjern medlem fra gruppe',
	'GROUP_DELETED'					=> 'Gruppe er slettet og standardgruppe for brukere er angitt.',
	'GROUP_DEMOTE'					=> 'Degrader gruppeleder',
	'GROUP_DESC'					=> 'Gruppebeskrivelse',
	'GROUP_DETAILS'					=> 'Gruppedetaljer',
	'GROUP_EDIT_EXPLAIN'			=> 'Her kan du redigere en eksisterende gruppe. Du kan endre navn, beskrivelse og type (åpen, lukket osv.). Du kan også angi visse alternativer som gjelder for hele gruppen, som fargelegging, grad osv. Endringer som gjøres her, overstyrer brukernes gjeldende innstillinger. Merk at gruppemedlemmer kan overstyre innstillinger for gruppeavatar, med mindre du angir relevante brukertillatelser.',
	'GROUP_ERR_USERS_EXIST'			=> 'De angitte brukerne er allerede medlem i denne gruppen.',
	'GROUP_FOUNDER_MANAGE'			=> 'Bare grunnleggere kan administrere',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Begrens administrasjonen av denne gruppen til bare grunnleggere. Brukere som har gruppetillatelser kan fortsatt se gruppen, i tillegg til denne gruppens medlemmer.',
	'GROUP_HIDDEN'					=> 'Skjult',
	'GROUP_LANG'					=> 'Gruppespråk',
	'GROUP_LEAD'					=> 'Gruppeledere',
	'GROUP_LEADERS_ADDED'			=> 'Nye ledere er lagt til i gruppen.',
	'GROUP_LEGEND'					=> 'Vis gruppe i forklaring',
	'GROUP_LIST'					=> 'Medlemmer nå',
	'GROUP_LIST_EXPLAIN'			=> 'Dette er en fullstendig liste over alle brukere som er medlem i denne gruppen nå. Du kan slette medlemmer (unntatt i visse spesialgrupper) eller legge til nye, slik du ønsker det.',
	'GROUP_MEMBERS'					=> 'Gruppemedlemmer',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Dette er en fullstendig liste over alle brukere som er medlem i denne brukergruppen. Den er delt inn i ulike deler for ledere, ventende og eksisterende medlemmer. Herfra kan du administrere alle sider av gruppen, som hvem som er medlem i gruppen og hvilken rolle de har. Hvis du vil fjerne en leder men beholde vedkommende i gruppen, bruker du Degrader heller enn Slett. Tilsvarende bruker du Forfrem for å gjøre et eksisterende medlem til leder.',
	'GROUP_MESSAGE_LIMIT'			=> 'Grense for private meldinger per mappe for gruppen',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Denne innstillingen overstyrer mappemeldingsgrensen per bruker. Verdien 0 betyr at standardgrensen for bruker vil bli brukt.',
	'GROUP_MODS_ADDED'				=> 'Nye gruppeledere er lagt til.',
	'GROUP_MODS_DEMOTED'			=> 'Gruppeledere er degradert.',
	'GROUP_MODS_PROMOTED'			=> 'Gruppemedlemmer er forfremmet.',
	'GROUP_NAME'					=> 'Gruppenavn',
	'GROUP_NAME_TAKEN'				=> 'Gruppenavnet du angav, er allerede i bruk. Velg et alternativ.',
	'GROUP_OPEN'					=> 'Åpen',
	'GROUP_PENDING'					=> 'Ventende medlemmer',
	'GROUP_MAX_RECIPIENTS'			=> 'Maksimalt antall mottakere som tillates per private melding',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Det maksimale antallet mottakere som tillates for en privat melding. Hvis 0 angis, brukes innstillinger som gjelder for hele systemet.',
	'GROUP_OPTIONS_SAVE'			=> 'Gruppealternativer',
	'GROUP_PROMOTE'					=> 'Forfrem til gruppeleder',
	'GROUP_RANK'					=> 'Gruppegrad',
	'GROUP_RECEIVE_PM'				=> 'Gruppe kan motta private meldinger',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Merk at skjulte grupper ikke kan sendes melding til, uavhengig av denne innstillingen.',
	'GROUP_REQUEST'					=> 'Forespørsel',
	'GROUP_SETTINGS_SAVE'			=> 'Gruppeinnstillinger',
	'GROUP_SKIP_AUTH'				=> 'Unnta gruppeleder fra tillatelser',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Hvis aktivert, arver ikke lenger gruppelederen tillatelser fra gruppen.',
	'GROUP_SPECIAL'					=> 'Forhåndsdefinert',
	'GROUP_TEAMPAGE'				=> 'Vis gruppe på teamside',
	'GROUP_TYPE'					=> 'Gruppetype',
	'GROUP_TYPE_EXPLAIN'			=> 'Dette fastslår hvilke brukere som kan bli med i eller vise denne gruppen.',
	'GROUP_UPDATED'					=> 'Gruppepreferanser er oppdatert.',

	'GROUP_USERS_ADDED'				=> 'Nye brukere er lagt til i gruppen.',
	'GROUP_USERS_EXIST'				=> 'De valgte brukerne er allerede medlemmer.',
	'GROUP_USERS_REMOVE'			=> 'Brukere er fjernet fra gruppen og nye standarder er angitt.',

	'LEGEND_EXPLAIN'				=> 'Dette er gruppene som vises i gruppeforklaringen:',
	'LEGEND_SETTINGS'				=> 'Forklaringsinnstillinger',
	'LEGEND_SORT_GROUPNAME'			=> 'Sorter forklaring etter gruppenavn',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Rekkefølgen nedenfor ignoreres når dette alternativet aktiveres.',

	'MANAGE_LEGEND'			=> 'Administrer gruppeforklaring',
	'MANAGE_TEAMPAGE'		=> 'Administrer teamside',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Gjør gruppen til standard for alle medlemmer',
	'MEMBERS'				=> 'Medlemmer',

	'NO_GROUP'					=> 'Ingen grupper er angitt.',
	'NO_GROUPS_ADDED'			=> 'Ingen grupper er lagt til ennå.',
	'NO_GROUPS_CREATED'			=> 'Ingen grupper er opprettet ennå.',
	'NO_PERMISSIONS'			=> 'Ikke kopier tillatelser',
	'NO_USERS'					=> 'Du har ikke angitt noen brukere.',
	'NO_USERS_ADDED'			=> 'Ingen brukere ble lagt til i gruppen.',
	'NO_VALID_USERS'			=> 'Du har ikke angitt noen brukere som kvalifiserer for den handlingen.',

	'SELECT_GROUP'				=> 'Velg en gruppe',
	'SPECIAL_GROUPS'			=> 'Forhåndsdefinerte grupper',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Forhåndsdefinerte grupper er spesielle grupper. Disse kan ikke slettes eller endres direkte. Du kan imidlertid legge til brukere og endre grunnleggende innstillinger.',

	'TEAMPAGE'					=> 'Teamside',
	'TEAMPAGE_DISP_ALL'			=> 'Alle medlemskap',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Bare brukerens standardgruppe',
	'TEAMPAGE_DISP_FIRST'		=> 'Bare første medlemskap',
	'TEAMPAGE_EXPLAIN'			=> 'Dette er gruppene som vises på teamsiden:',
	'TEAMPAGE_FORUMS'			=> 'Vis modererte fora',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Hvis angitt til Ja, vil moderatorer ha en liste over alle foraene hvor moderatortillatelsene vises på den enkeltes rad. Dette kan være svært databaseintensivt på store systemer.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Vis brukermedlemskap',
	'TEAMPAGE_SETTINGS'			=> 'Teamsideinnstillinger',
	'TOTAL_MEMBERS'				=> 'Medlemmer',

	'USERS_APPROVED'				=> 'Brukere er godkjent.',
	'USER_DEFAULT'					=> 'Brukerstandard',
	'USER_DEF_GROUPS'				=> 'Brukerdefinerte grupper',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Dette er grupper som er opprettet av deg eller andre administratorer på dette systemet. Du kan både administrere medlemskap og redigere gruppeegenskaper, i tillegg til å slette gruppen.',
	'USER_GROUP_DEFAULT'			=> 'Angi som standardgruppe',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Hvis du angir Ja her, angis denne gruppen som standardgruppe for brukerne som legges til.',
	'USER_GROUP_LEADER'				=> 'Angi som gruppeleder',
));
