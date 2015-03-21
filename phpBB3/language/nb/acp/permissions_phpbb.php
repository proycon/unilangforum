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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Handlinger',
	'ACL_CAT_CONTENT'		=> 'Innhold',
	'ACL_CAT_FORUMS'		=> 'Fora',
	'ACL_CAT_MISC'			=> 'Diverse',
	'ACL_CAT_PERMISSIONS'	=> 'Tillatelser',
	'ACL_CAT_PM'			=> 'Private meldinger',
	'ACL_CAT_POLLS'			=> 'Avstemminger',
	'ACL_CAT_POST'			=> 'Innlegg',
	'ACL_CAT_POST_ACTIONS'	=> 'Innleggshandlinger',
	'ACL_CAT_POSTING'		=> 'Innlegging',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Innstillinger',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Emnehandlinger',
	'ACL_CAT_USER_GROUP'	=> 'Brukere og grupper',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Kan vise profiler, brukerliste og online-liste',
	'ACL_U_CHGNAME'		=> 'Kan endre brukernavn',
	'ACL_U_CHGPASSWD'	=> 'Kan endre passord',
	'ACL_U_CHGEMAIL'	=> 'Kan endre e-postadresse',
	'ACL_U_CHGAVATAR'	=> 'Kan endre avatar',
	'ACL_U_CHGGRP'		=> 'Kan endre standard brukergruppe',
	'ACL_U_CHGPROFILEINFO'	=> 'Kan endre profilfeltinformasjon',

	'ACL_U_ATTACH'		=> 'Kan legge ved filer',
	'ACL_U_DOWNLOAD'	=> 'Kan laste ned filer',
	'ACL_U_SAVEDRAFTS'	=> 'Kan lagre kladder',
	'ACL_U_CHGCENSORS'	=> 'Kan deaktivere ordsensur',
	'ACL_U_SIG'			=> 'Kan bruke signatur',

	'ACL_U_SENDPM'		=> 'Kan sende private meldinger',
	'ACL_U_MASSPM'		=> 'Kan sende meldinger til flere brukere',
	'ACL_U_MASSPM_GROUP'=> 'Kan sende meldinger til grupper',
	'ACL_U_READPM'		=> 'Kan lese private meldinger',
	'ACL_U_PM_EDIT'		=> 'Kan redigere egne private meldinger',
	'ACL_U_PM_DELETE'	=> 'Kan fjerne private meldinger fra egen mappe',
	'ACL_U_PM_FORWARD'	=> 'Kan videresende private meldinger',
	'ACL_U_PM_EMAILPM'	=> 'Kan sende private meldinger som e-post',
	'ACL_U_PM_PRINTPM'	=> 'Kan skrive ut private meldinger',
	'ACL_U_PM_ATTACH'	=> 'Kan legge ved filer i private meldinger',
	'ACL_U_PM_DOWNLOAD'	=> 'Kan laste ned filer i private meldinger',
	'ACL_U_PM_BBCODE'	=> 'Kan bruke BBCode i private meldinger',
	'ACL_U_PM_SMILIES'	=> 'Kan bruke smilefjes i private meldinger',
	'ACL_U_PM_IMG'		=> 'Kan bruke BBCode-taggen [img] i private meldinger',
	'ACL_U_PM_FLASH'	=> 'Kan bruke BBCode-taggen [flash] i private meldinger',

	'ACL_U_SENDEMAIL'	=> 'Kan sende e-post',
	'ACL_U_SENDIM'		=> 'Kan sende direktemeldinger',
	'ACL_U_IGNOREFLOOD'	=> 'Kan ignorere overhyppighetsgrensen',
	'ACL_U_HIDEONLINE'	=> 'Kan skjule online-status',
	'ACL_U_VIEWONLINE'	=> 'Kan vise skjulte online-brukere',
	'ACL_U_SEARCH'		=> 'Kan søke på systemet',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Kan se forumet',
	'ACL_F_READ'		=> 'Kan lese i forumet',
	'ACL_F_SEARCH'		=> 'Kan søke i forumet',
	'ACL_F_SUBSCRIBE'	=> 'Kan abonnere på forumet',
	'ACL_F_PRINT'		=> 'Kan skrive ut emner',
	'ACL_F_EMAIL'		=> 'Kan sende emner som e-post',
	'ACL_F_BUMP'		=> 'Kan fremheve emner',
	'ACL_F_USER_LOCK'	=> 'Kan låse egne emner',
	'ACL_F_DOWNLOAD'	=> 'Kan laste ned filer',
	'ACL_F_REPORT'		=> 'Kan rapportere innlegg',

	'ACL_F_POST'		=> 'Kan starte nye emner',
	'ACL_F_STICKY'		=> 'Kan legge inn festede emner',
	'ACL_F_ANNOUNCE'	=> 'Kan legge inn kunngjøringer',
	'ACL_F_REPLY'		=> 'Kan svare på emner',
	'ACL_F_EDIT'		=> 'Kan redigere egne innlegg',
	'ACL_F_DELETE'		=> 'Kan slette egne innlegg permanent',
	'ACL_F_SOFTDELETE'	=> 'Kan delvis slette egne innlegg<br /><em>Moderatorer med tillatelse til å godkjenne innlegg, kan gjenopprette delvis slettede innlegg.</em>',
	'ACL_F_IGNOREFLOOD' => 'Kan ignorere overhyppighetsgrensen',
	'ACL_F_POSTCOUNT'	=> 'Øk innleggsteller<br /><em>Merk at denne innstillingen bare påvirker nye innlegg.</em>',
	'ACL_F_NOAPPROVE'	=> 'Kan skriv innlegg uten godkjenning',

	'ACL_F_ATTACH'		=> 'Kan legge ved filer',
	'ACL_F_ICONS'		=> 'Kan bruke emne-/innleggsikoner',
	'ACL_F_BBCODE'		=> 'Kan bruke BBCode',
	'ACL_F_FLASH'		=> 'Kan bruke BBCode-taggen [flash]',
	'ACL_F_IMG'			=> 'Kan bruke BBCode-taggen [img]',
	'ACL_F_SIGS'		=> 'Kan bruke signaturer',
	'ACL_F_SMILIES'		=> 'Kan bruke smilefjes',

	'ACL_F_POLL'		=> 'Kan opprette avstemminger',
	'ACL_F_VOTE'		=> 'Kan stemme i avstemminger',
	'ACL_F_VOTECHG'		=> 'Kan endre eksisterende stemme',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Kan redigere innlegg',
	'ACL_M_DELETE'		=> 'Kan slette innlegg permanent',
	'ACL_M_SOFTDELETE'	=> 'Kan delvis slette innlegg<br /><em>Moderatorer med tillatelse til å godkjenne innlegg, kan gjenopprette delvis slettede innlegg.</em>',
	'ACL_M_APPROVE'		=> 'Kan godkjenne og gjenopprette innlegg',
	'ACL_M_REPORT'		=> 'Kan lukke og slette rapporter',
	'ACL_M_CHGPOSTER'	=> 'Kan endre innleggsforfatter',

	'ACL_M_MOVE'	=> 'Kan flytte emner',
	'ACL_M_LOCK'	=> 'Kan låse emner',
	'ACL_M_SPLIT'	=> 'Kan splitte emner',
	'ACL_M_MERGE'	=> 'Kan slå sammen emner',

	'ACL_M_INFO'	=> 'Kan vise innleggsdetaljer',
	'ACL_M_WARN'	=> 'Kan utstede advarsler<br /><em>Denne innstillingen tilordnes bare globalt. Den er ikke forumbasert.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Kan administrere utestengelser<br /><em>Denne innstillingen tilordnes bare globalt. Den er ikke forumbasert.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Kan endre systeminnstillinger/se etter oppdateringer',
	'ACL_A_SERVER'		=> 'Kan endre innstillinger for server/kommunikasjon',
	'ACL_A_JABBER'		=> 'Kan endre innstillinger for Jabber',
	'ACL_A_PHPINFO'		=> 'Kan vise innstillinger for php',

	'ACL_A_FORUM'		=> 'Kan administrere fora',
	'ACL_A_FORUMADD'	=> 'Kan legge til nye fora',
	'ACL_A_FORUMDEL'	=> 'Kan slette fora',
	'ACL_A_PRUNE'		=> 'Kan rydde i fora',

	'ACL_A_ICONS'		=> 'Kan endre emne-/innleggsikoner og smilefjes',
	'ACL_A_WORDS'		=> 'Kan endre ordsensur',
	'ACL_A_BBCODE'		=> 'Kan definere BBCode-tagger',
	'ACL_A_ATTACH'		=> 'Kan endre innstillinger for vedlegg og beslektede elementer',

	'ACL_A_USER'		=> 'Kan administrere brukere<br /><em>Dette omfatter også å vise brukernes nettleseragent i listen over online-brukere.</em>',
	'ACL_A_USERDEL'		=> 'Kan slette/rydde i brukere',
	'ACL_A_GROUP'		=> 'Kan administrere grupper',
	'ACL_A_GROUPADD'	=> 'Kan legge til nye grupper',
	'ACL_A_GROUPDEL'	=> 'Kan slette grupper',
	'ACL_A_RANKS'		=> 'Kan administrere grader',
	'ACL_A_PROFILE'		=> 'Kan administrere egendefinerte profilfelt',
	'ACL_A_NAMES'		=> 'Kan administrere forbudte navn',
	'ACL_A_BAN'			=> 'Kan administrere utestengelser',

	'ACL_A_VIEWAUTH'	=> 'Kan vise tillatelsesmasker',
	'ACL_A_AUTHGROUPS'	=> 'Kan endre tillatelser for enkeltgrupper',
	'ACL_A_AUTHUSERS'	=> 'Kan endre tillatelser for enkeltbrukere',
	'ACL_A_FAUTH'		=> 'Kan endre forum-tillatelsesklassen',
	'ACL_A_MAUTH'		=> 'Kan endre moderator-tillatelsesklassen',
	'ACL_A_AAUTH'		=> 'Kan endre admin-tillatelsesklassen',
	'ACL_A_UAUTH'		=> 'Kan endre user-tillatelsesklassen',
	'ACL_A_ROLES'		=> 'Kan administrere roller',
	'ACL_A_SWITCHPERM'	=> 'Kan bruke andres tillatelser',

	'ACL_A_STYLES'		=> 'Kan administrere stiler',
	'ACL_A_EXTENSIONS'	=> 'Kan administrere utvidelser',
	'ACL_A_VIEWLOGS'	=> 'Kan vise logger',
	'ACL_A_CLEARLOGS'	=> 'Kan tømme logger',
	'ACL_A_MODULES'		=> 'Kan administrere moduler',
	'ACL_A_LANGUAGE'	=> 'Kan administrere språkpakker',
	'ACL_A_EMAIL'		=> 'Kan sende masse-e-post',
	'ACL_A_BOTS'		=> 'Kan administrere boter',
	'ACL_A_REASONS'		=> 'Kan administrere begrunnelser for rapport/avslag',
	'ACL_A_BACKUP'		=> 'Kan sikkerhetskopiere og gjenopprette database',
	'ACL_A_SEARCH'		=> 'Kan administrere søkemotorer og deres innstillinger',
));
