<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: permissions_phpbb.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'ACL_CAT_CONTENT'		=> 'Indhold',
	'ACL_CAT_FORUMS'		=> 'Fora',
	'ACL_CAT_MISC'			=> 'Diverse',
	'ACL_CAT_PERMISSIONS'	=> 'Tilladelser',
	'ACL_CAT_PM'			=> 'Private beskeder',
	'ACL_CAT_POLLS'			=> 'Afstemninger',
	'ACL_CAT_POST'			=> 'Indlæg',
	'ACL_CAT_POST_ACTIONS'	=> 'Indlægshandlinger',
	'ACL_CAT_POSTING'		=> 'Indlæg',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Indstillinger',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Emnehandlinger',
	'ACL_CAT_USER_GROUP'	=> 'Brugere &amp; grupper',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Kan se profiler, listen med tilmeldte brugere og "Hvem er online"',
	'ACL_U_CHGNAME'		=> 'Kan ændre brugernavn',
	'ACL_U_CHGPASSWD'	=> 'Kan ændre kodeord',
	'ACL_U_CHGEMAIL'	=> 'Kan ændre emailadresse',
	'ACL_U_CHGAVATAR'	=> 'Kan ændre avatar',
	'ACL_U_CHGGRP'		=> 'Kan ændre standardbrugergruppe',
	'ACL_U_CHGPROFILEINFO'	=> 'Kan ændre information i profilfelt',

	'ACL_U_ATTACH'		=> 'Kan vedhæfte filer',
	'ACL_U_DOWNLOAD'	=> 'Kan downloade filer',
	'ACL_U_SAVEDRAFTS'	=> 'Kan gemme kladder',
	'ACL_U_CHGCENSORS'	=> 'Kan slå ordcensur fra',
	'ACL_U_SIG'			=> 'Kan bruge signatur',

	'ACL_U_SENDPM'		=> 'Kan sende private beskeder',
	'ACL_U_MASSPM'		=> 'Kan sende beskeder til flere brugere',
	'ACL_U_MASSPM_GROUP'=> 'Kan sende beskeder til grupper',
	'ACL_U_READPM'		=> 'Kan læse private beskeder',
	'ACL_U_PM_EDIT'		=> 'Kan redigere egne private beskeder',
	'ACL_U_PM_DELETE'	=> 'Kan fjerne private beskeder fra egen mappe',
	'ACL_U_PM_FORWARD'	=> 'Kan videresende private beskeder',
	'ACL_U_PM_EMAILPM'	=> 'Kan emaile private beskeder',
	'ACL_U_PM_PRINTPM'	=> 'Kan udskrive private beskeder',
	'ACL_U_PM_ATTACH'	=> 'Kan vedhæfte filer i private beskeder',
	'ACL_U_PM_DOWNLOAD'	=> 'Kan downloade filer i private beskeder',
	'ACL_U_PM_BBCODE'	=> 'Kan bruge BBkode i private beskeder',
	'ACL_U_PM_SMILIES'	=> 'Kan bruge smilies i private beskeder',
	'ACL_U_PM_IMG'		=> 'Kan bruge [img] BBkoden i private beskeder',
	'ACL_U_PM_FLASH'	=> 'Kan bruge [flash] BBkoden i private beskeder',

	'ACL_U_SENDEMAIL'	=> 'Kan sende emails',
	'ACL_U_SENDIM'		=> 'Kan sende beskeder ved hjælp af messengere',
	'ACL_U_IGNOREFLOOD'	=> 'Kan ignorere floodbegrænsning',
	'ACL_U_HIDEONLINE'	=> 'Kan skjule onlinestatus',
	'ACL_U_VIEWONLINE'	=> 'Kan se brugere med skjult onlinestatus',
	'ACL_U_SEARCH'		=> 'Kan søge i alle fora',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Kan se forum',
	'ACL_F_READ'		=> 'Kan læse forum',
	'ACL_F_SEARCH'		=> 'Kan søge i forummet',
	'ACL_F_SUBSCRIBE'	=> 'Kan overvåge forum',
	'ACL_F_PRINT'		=> 'Kan udskrive emner',
	'ACL_F_EMAIL'		=> 'Kan sende emner pr. email',
	'ACL_F_BUMP'		=> 'Kan placere emner øverst',
	'ACL_F_USER_LOCK'	=> 'Kan låse egne emner',
	'ACL_F_DOWNLOAD'	=> 'Kan downloade filer',
	'ACL_F_REPORT'		=> 'Kan rapportere indlæg',

	'ACL_F_POST'		=> 'Kan skrive i forum',
	'ACL_F_STICKY'		=> 'Kan skrive opslag',
	'ACL_F_ANNOUNCE'	=> 'Kan skrive bekendtgørelser',
	'ACL_F_REPLY'		=> 'Kan svare på indlæg',
	'ACL_F_EDIT'		=> 'Kan redigere egne indlæg',
	'ACL_F_DELETE'		=> 'Kan slette egne indlæg permanent',
	'ACL_F_SOFTDELETE'	=> 'Kan skjule egne indlæg<br /><em>Redaktører med tilladelse til at godkende indlæg, kan gendanne skjulte indlæg.</em>',
	'ACL_F_IGNOREFLOOD' => 'Kan ignorere floodbegrænsning',
	'ACL_F_POSTCOUNT'	=> 'Kan forøge indlægstæller<br /><em>Bemærk venligst at denne indstilling kun får betydning for nye indlæg.</em>',
	'ACL_F_NOAPPROVE'	=> 'Kan skrive indlæg uden godkendelse',

	'ACL_F_ATTACH'		=> 'Kan vedhæfte filer',
	'ACL_F_ICONS'		=> 'Kan bruge emne- og indlægsikoner',
	'ACL_F_BBCODE'		=> 'Kan bruge BBkode',
	'ACL_F_FLASH'		=> 'Kan bruge [flash] BBkoden',
	'ACL_F_IMG'			=> 'Kan bruge [img] BBkoden',
	'ACL_F_SIGS'		=> 'Kan bruge signaturer',
	'ACL_F_SMILIES'		=> 'Kan bruge smilies',

	'ACL_F_POLL'		=> 'Kan oprette afstemninger',
	'ACL_F_VOTE'		=> 'Kan stemme i afstemninger',
	'ACL_F_VOTECHG'		=> 'Kan ændre i afstemning',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Kan redigere indlæg',
	'ACL_M_DELETE'		=> 'Kan slette indlæg permanent',
	'ACL_M_SOFTDELETE'	=> 'Kan skjule indlæg<br /><em>Redaktører med tilladelse til at godkende indlæg, kan gendanne skjulte indlæg.</em>',
	'ACL_M_APPROVE'		=> 'Kan godkende og gendanne indlæg',
	'ACL_M_REPORT'		=> 'Kan lukke og slette rapporter',
	'ACL_M_CHGPOSTER'	=> 'Kan ændre indlægsforfatter',

	'ACL_M_MOVE'	=> 'Kan flytte emner',
	'ACL_M_LOCK'	=> 'Kan låse emner',
	'ACL_M_SPLIT'	=> 'Kan opdele emner',
	'ACL_M_MERGE'	=> 'Kan sammenlægge emner',

	'ACL_M_INFO'	=> 'Kan læse indlægsinformation',
	'ACL_M_WARN'	=> 'Kan udstede advarsler<br /><em>Tilladelsen er tildelt globalt og kan ikke defineres pr. forum.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Kan administrere udelukkelser<br /><em>Tilladelsen er tildelt globalt og kan ikke defineres pr. forum.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Kan ændre boardindstillinger og har adgang til automatisk versionskontrol',
	'ACL_A_SERVER'		=> 'Kan ændre server- og forbindelsesindstillinger',
	'ACL_A_JABBER'		=> 'Kan ændre konfiguration af Jabber',
	'ACL_A_PHPINFO'		=> 'Kan se PHP-indstillinger',

	'ACL_A_FORUM'		=> 'Kan administrere fora',
	'ACL_A_FORUMADD'	=> 'Kan tilføje nye fora',
	'ACL_A_FORUMDEL'	=> 'Kan slette fora',
	'ACL_A_PRUNE'		=> 'Kan beskære fora',

	'ACL_A_ICONS'		=> 'Kan ændre smilies, emne- og indlægsikoner',
	'ACL_A_WORDS'		=> 'Kan ændre ordcensur',
	'ACL_A_BBCODE'		=> 'Kan definere BBkode-tags',
	'ACL_A_ATTACH'		=> 'Kan ændre indstillinger for vedhæftede filer',

	'ACL_A_USER'		=> 'Kan administrere brugere<br /><em>Og kan i "Hvem er online" se hvilken browser brugeren anvender.</em>',
	'ACL_A_USERDEL'		=> 'Kan slette og beskære brugere',
	'ACL_A_GROUP'		=> 'Kan administrere grupper',
	'ACL_A_GROUPADD'	=> 'Kan tilføje nye grupper',
	'ACL_A_GROUPDEL'	=> 'Kan slette grupper',
	'ACL_A_RANKS'		=> 'Kan administrere rang',
	'ACL_A_PROFILE'		=> 'Kan administrere tilpassede profilfelter',
	'ACL_A_NAMES'		=> 'Kan administrere forbudte navne',
	'ACL_A_BAN'			=> 'Kan administrere udelukkelser',

	'ACL_A_VIEWAUTH'	=> 'Kan se tilladelsesmasker',
	'ACL_A_AUTHGROUPS'	=> 'Kan ændre tilladelser for individuelle grupper',
	'ACL_A_AUTHUSERS'	=> 'Kan ændre tilladelser for individuelle brugere',
	'ACL_A_FAUTH'		=> 'Kan ændre tilladelsesklasser for fora',
	'ACL_A_MAUTH'		=> 'Kan ændre tilladelsesklasser for redaktører',
	'ACL_A_AAUTH'		=> 'Kan ændre tilladelsesklasser for administratorer',
	'ACL_A_UAUTH'		=> 'Kan ændre tilladelsesklasser for brugere',
	'ACL_A_ROLES'		=> 'Kan administrere roller',
	'ACL_A_SWITCHPERM'	=> 'Kan afprøve andres tilladelser',

	'ACL_A_STYLES'		=> 'Kan administrere typografier',
	'ACL_A_EXTENSIONS'	=> 'Kan administrere udvidelser',
	'ACL_A_VIEWLOGS'	=> 'Kan se logs',
	'ACL_A_CLEARLOGS'	=> 'Kan rydde logs',
	'ACL_A_MODULES'		=> 'Kan administrere moduler',
	'ACL_A_LANGUAGE'	=> 'Kan administrere sprogpakker',
	'ACL_A_EMAIL'		=> 'Kan sende masseemails',
	'ACL_A_BOTS'		=> 'Kan administrere botter',
	'ACL_A_REASONS'		=> 'Kan administrere rapport- og afvisningsbegrundelser',
	'ACL_A_BACKUP'		=> 'Kan tage backup af database og gendanne denne',
	'ACL_A_SEARCH'		=> 'Kan administrere søgemotoren og dennes indstillinger',
));
