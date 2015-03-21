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
	'ACL_CAT_ACTIONS'		=> 'Handlingar',
	'ACL_CAT_CONTENT'		=> 'Innehåll',
	'ACL_CAT_FORUMS'		=> 'Kategorier',
	'ACL_CAT_MISC'			=> 'Blandat',
	'ACL_CAT_PERMISSIONS'	=> 'Behörigheter',
	'ACL_CAT_PM'			=> 'Personliga meddelanden',
	'ACL_CAT_POLLS'			=> 'Omröstningar',
	'ACL_CAT_POST'			=> 'Inlägg',
	'ACL_CAT_POST_ACTIONS'	=> 'Inläggshandlingar',
	'ACL_CAT_POSTING'		=> 'Inlägg',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Inställningar',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Trådhandlingar',
	'ACL_CAT_USER_GROUP'	=> 'Användare &amp; grupper',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Kan visa profiler, medlemslista och onlinelista',
	'ACL_U_CHGNAME'		=> 'Kan ändra användarnamn',
	'ACL_U_CHGPASSWD'	=> 'Kan ändra lösenord',
	'ACL_U_CHGEMAIL'	=> 'Kan ändra e-postadress',
	'ACL_U_CHGAVATAR'	=> 'Kan ändra visningsbild',
	'ACL_U_CHGGRP'		=> 'Kan ändra standardgrupp',
	'ACL_U_CHGPROFILEINFO'	=> 'Kan ändra profilfälts information',

	'ACL_U_ATTACH'		=> 'Kan bifoga filer',
	'ACL_U_DOWNLOAD'	=> 'Kan ladda ner filer',
	'ACL_U_SAVEDRAFTS'	=> 'Kan spara utkast',
	'ACL_U_CHGCENSORS'	=> 'Kan inaktivera ordcensur',
	'ACL_U_SIG'			=> 'Kan använda signatur',

	'ACL_U_SENDPM'		=> 'Kan skicka personliga meddelanden',
	'ACL_U_MASSPM'		=> 'Kan skicka PM till flera användare samtidigt',
	'ACL_U_MASSPM_GROUP'=> 'Kan skicka PM till grupper',
	'ACL_U_READPM'		=> 'Kan läsa personliga meddelanden',
	'ACL_U_PM_EDIT'		=> 'Kan redigera egna personliga meddelanden',
	'ACL_U_PM_DELETE'	=> 'Kan ta bort personliga meddelanden från egen mapp',
	'ACL_U_PM_FORWARD'	=> 'Kan vidarebefordra personliga meddelanden',
	'ACL_U_PM_EMAILPM'	=> 'Kan e-posta personliga meddelanden',
	'ACL_U_PM_PRINTPM'	=> 'Kan skriva ut personliga meddelanden',
	'ACL_U_PM_ATTACH'	=> 'Kan bifoga filer i personliga meddelanden',
	'ACL_U_PM_DOWNLOAD'	=> 'Kan ladda ner filer i personliga meddelanden',
	'ACL_U_PM_BBCODE'	=> 'Kan använda BBCode i personliga meddelanden',
	'ACL_U_PM_SMILIES'	=> 'Kan använda smilies i personliga meddelanden',
	'ACL_U_PM_IMG'		=> 'Kan använda BBCode [img] i personliga meddelanden',
	'ACL_U_PM_FLASH'	=> 'Kan använda BBCode [flash] personliga meddelanden',

	'ACL_U_SENDEMAIL'	=> 'Kan skicka e-post',
	'ACL_U_SENDIM'		=> 'Kan skicka snabbmeddelanden',
	'ACL_U_IGNOREFLOOD'	=> 'Kan ignorera gräns för tid mellan inlägg',
	'ACL_U_HIDEONLINE'	=> 'Kan dölja onlinestatus',
	'ACL_U_VIEWONLINE'	=> 'Kan visa dolda användare',
	'ACL_U_SEARCH'		=> 'Kan söka på forumet',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Kan visa kategori',
	'ACL_F_READ'		=> 'Kan läsa kategori',
	'ACL_F_SEARCH'		=> 'Kan söka i kategori',
	'ACL_F_SUBSCRIBE'	=> 'Kan prenumenera på kategori',
	'ACL_F_PRINT'		=> 'Kan skriva ut kategori',
	'ACL_F_EMAIL'		=> 'Kan skicka trådar via e-post',
	'ACL_F_BUMP'		=> 'Kan bumpa trådar',
	'ACL_F_USER_LOCK'	=> 'Kan låsa egna trådar',
	'ACL_F_DOWNLOAD'	=> 'Kan ladda ner filer',
	'ACL_F_REPORT'		=> 'Kan rapportera inlägg',
	'ACL_F_POST'		=> 'Kan skapa nya trådar',
	'ACL_F_STICKY'		=> 'Kan posta notiser',
	'ACL_F_ANNOUNCE'	=> 'Kan posta anslag',
	'ACL_F_REPLY'		=> 'Kan svara på trådar',
	'ACL_F_EDIT'		=> 'Kan redigera egna inlägg',
	'ACL_F_DELETE'		=> 'Kan ta bort egna inlägg',
	'ACL_F_SOFTDELETE'	=> 'Kan ta bort egna inlägg, så att moderatorer kan ta tillbaka dom',
	'ACL_F_IGNOREFLOOD' => 'Kan ignorera gränsen för tid mellan inlägg',
	'ACL_F_POSTCOUNT'	=> 'Ökar inläggsräknaren<br /><em>Observera att detta endast påverkar nya inlägg.</em>',
	'ACL_F_NOAPPROVE'	=> 'Kan posta utan godkännande',
	'ACL_F_ATTACH'		=> 'Kan bifoga filer',
	'ACL_F_ICONS'		=> 'Kan använda tråd/inläggsikoner',
	'ACL_F_BBCODE'		=> 'Can use BBCode',
	'ACL_F_FLASH'		=> 'Kan använda BBCode [flash]',
	'ACL_F_IMG'			=> 'Kan använda BBCode [img]',
	'ACL_F_SIGS'		=> 'Kan använda signaturer',
	'ACL_F_SMILIES'		=> 'Kan använda smilies',
	'ACL_F_POLL'		=> 'Kan skapa omröstningar',
	'ACL_F_VOTE'		=> 'Kan rösta i omröstningar',
	'ACL_F_VOTECHG'		=> 'Kan ändra sin röst',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Kan redigera inlägg',
	'ACL_M_DELETE'		=> 'Kan ta bort inlägg',
	'ACL_M_SOFTDELETE'	=> 'Kan ta bort inlägg, så att moderatorer kan ta tillbaka dom',
	'ACL_M_APPROVE'		=> 'Kan godkänna och återställa inlägg',
	'ACL_M_REPORT'		=> 'Kan stänga och ta bort rapporter',
	'ACL_M_CHGPOSTER'	=> 'Kan byta inläggsförfattare',
	'ACL_M_MOVE'	=> 'Kan flytta trådar',
	'ACL_M_LOCK'	=> 'Kan låsa trådar',
	'ACL_M_SPLIT'	=> 'Kan dela trådar',
	'ACL_M_MERGE'	=> 'Kan sammanfoga trådar',
	'ACL_M_INFO'	=> 'Kan visa inläggsuppgifter',
	'ACL_M_WARN'	=> 'Kan utfärda varningar<br /><em>Denna inställning tilldelas endast globalt. Den är inte kategoribaserad.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Kan hantera bannlysningar<br /><em>Denna inställning tilldelas endast globalt. Den är inte kategoribaserad.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Kan ändra foruminställningar/kontrollera om det finns uppdateringar',
	'ACL_A_SERVER'		=> 'Kan ändra server/kommunikationsinställningar',
	'ACL_A_JABBER'		=> 'Kan ändra Jabber-inställningar',
	'ACL_A_PHPINFO'		=> 'Kan visa php-inställningar',
	'ACL_A_FORUM'		=> 'Kan hantera kategorier',
	'ACL_A_FORUMADD'	=> 'Kan lägga till nya kategorier',
	'ACL_A_FORUMDEL'	=> 'Kan ta bort kategorier',
	'ACL_A_PRUNE'		=> 'Kan rensa kategorier',
	'ACL_A_ICONS'		=> 'Kan ändra tråd/inläggsikoner och smilies',
	'ACL_A_WORDS'		=> 'Kan ändra ordcensuren',
	'ACL_A_BBCODE'		=> 'Kan definiera BBCode-taggar',
	'ACL_A_ATTACH'		=> 'Kan ändra bilagesrelaterade inställningar',
	'ACL_A_USER'		=> 'Kan hantera användare<br /><em>Detta inkluderar också visning av användarens webbläsaragent i onlinelistan.</em>',
	'ACL_A_USERDEL'		=> 'Kan ta bort/rensa användare',
	'ACL_A_GROUP'		=> 'Kan hantera grupper',
	'ACL_A_GROUPADD'	=> 'Kan lägga till nya grupper',
	'ACL_A_GROUPDEL'	=> 'Kan ta bort grupper',
	'ACL_A_RANKS'		=> 'Kan hantera titlar',
	'ACL_A_PROFILE'		=> 'Kan hantera egna profilfält',
	'ACL_A_NAMES'		=> 'Kan hantera otillåtna namn',
	'ACL_A_BAN'			=> 'Kan hantera bannlysningar',

	'ACL_A_VIEWAUTH'	=> 'Kan granska behörigheter',
	'ACL_A_AUTHGROUPS'	=> 'Kan ändra behörigheter för individuella grupper',
	'ACL_A_AUTHUSERS'	=> 'Kan ändra behörigheter för individuella användare',
	'ACL_A_FAUTH'		=> 'Kan ändra kategoribehörighetsklassen',
	'ACL_A_MAUTH'		=> 'Kan ändra moderationsbehörighetsklassen',
	'ACL_A_AAUTH'		=> 'Kan ändra administratörsbehörighetsklassen',
	'ACL_A_UAUTH'		=> 'Kan ändra användarbehörighetsklassen',
	'ACL_A_ROLES'		=> 'Kan hantera roller',
	'ACL_A_SWITCHPERM'	=> 'Kan använda andras behörigheter',

	'ACL_A_STYLES'		=> 'Kan hantera stilar',
	'ACL_A_EXTENSIONS'	=> 'Kan hantera tillägg',
	'ACL_A_VIEWLOGS'	=> 'Kan visa loggar',
	'ACL_A_CLEARLOGS'	=> 'Kan rensa loggar',
	'ACL_A_MODULES'		=> 'Kan hantera moduler',
	'ACL_A_LANGUAGE'	=> 'Kan hantera språkpaket',
	'ACL_A_EMAIL'		=> 'Kan skicka massutskick',
	'ACL_A_BOTS'		=> 'Kan hantera robotar',
	'ACL_A_REASONS'		=> 'Kan hantera rapport/avslagsanledningar',
	'ACL_A_BACKUP'		=> 'Kan säkerhetskopiera/återställa databasen',
	'ACL_A_SEARCH'		=> 'Kan hantera söksystemen och inställningar',
));
