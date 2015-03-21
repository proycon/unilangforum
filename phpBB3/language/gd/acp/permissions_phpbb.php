<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
* @author 2014-05-30 - GunChleoc http://www.foramnagaidhlig.net is akerbeltz http://www.akerbeltz.org
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
	'ACL_CAT_ACTIONS'		=> 'Gnìomhan',
	'ACL_CAT_CONTENT'		=> 'Susbaint',
	'ACL_CAT_FORUMS'		=> 'Fòraman',
	'ACL_CAT_MISC'			=> 'Measgaichte',
	'ACL_CAT_PERMISSIONS'	=> 'Ceadan',
	'ACL_CAT_PM'			=> 'Teachdaireachdan prìobhaideach',
	'ACL_CAT_POLLS'			=> 'Cunntasan-bheachd',
	'ACL_CAT_POST'			=> 'Postaichean',
	'ACL_CAT_POST_ACTIONS'	=> 'Gnìomhan puist',
	'ACL_CAT_POSTING'		=> 'Postadh',
	'ACL_CAT_PROFILE'		=> 'Pròifil',
	'ACL_CAT_SETTINGS'		=> 'Roghainnean',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Gnìomhan cuspair',
	'ACL_CAT_USER_GROUP'	=> 'Buill ⁊ Buidhnean',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Faodar pròifilean, liosta nam ball is cò tha air loidhne a shealltainn',
	'ACL_U_CHGNAME'		=> 'Faodar am far-ainm atharrachadh',
	'ACL_U_CHGPASSWD'	=> 'Faodar am facal-faire atharrachadh',
	'ACL_U_CHGEMAIL'	=> 'Faodar an seòladh puist-d atharrachadh',
	'ACL_U_CHGAVATAR'	=> 'Faodar an t&#8209;avatar atharrachadh',
	'ACL_U_CHGGRP'		=> 'Faodar am bun-bhuidheann atharrachadh',
	'ACL_U_CHGPROFILEINFO'	=> 'Faodar fiosrachadh ann an raon na pròifil atharrachadh',
	'ACL_U_ATTACH'		=> 'Faodar ceanglachain a cur ris',
	'ACL_U_DOWNLOAD'	=> 'Faodar faidhlichean a luchdadh a-nuas',
	'ACL_U_SAVEDRAFTS'	=> 'Faodar dreachdan a shàbhaladh',
	'ACL_U_CHGCENSORS'	=> 'Faodar a’ ceansarachd fhaclan a chur à comas',
	'ACL_U_SIG'			=> 'Faodar earr-sgrìobhadh a chleachdadh',
	'ACL_U_SENDPM'		=> 'Faodar teachdaireachdan pearsanta a chur',
	'ACL_U_MASSPM'		=> 'Faodar an aon teachdaireachd pearsanta a chur gu iomadh ball',
	'ACL_U_MASSPM_GROUP'=> 'Faodar an aon teachdaireachd pearsanta a chur gu buidheann',
	'ACL_U_READPM'		=> 'Faodar teachdaireachdan pearsanta a leughadh',
	'ACL_U_PM_EDIT'		=> 'Faodar teachdaireachdan pearsanta aige fhèin a dheasachadh',
	'ACL_U_PM_DELETE'	=> 'Faodar teachdaireachdan pearsanta a thoirt air falbh o phasgan aige fhèin',
	'ACL_U_PM_FORWARD'	=> 'Faodar teachdaireachdan pearsanta a shìneadh air adhart',
	'ACL_U_PM_EMAILPM'	=> 'Faodar teachdaireachdan pearsanta a chur le post-d',
	'ACL_U_PM_PRINTPM'	=> 'Faodar teachdaireachdan pearsanta a chlò-bhualadh',
	'ACL_U_PM_ATTACH'	=> 'Faodar ceanglachain a chur ri teachdaireachdan pearsanta',
	'ACL_U_PM_DOWNLOAD'	=> 'Faodar faidhlichean ann an teachdaireachdan pearsanta a luchdadh a-nuas',
	'ACL_U_PM_BBCODE'	=> 'Faodar BBCode a chleachdadh ann an teachdaireachdan pearsanta',
	'ACL_U_PM_SMILIES'	=> 'Faodar samhlaidhean-gnùis a chleachdadh ann an teachdaireachdan pearsanta',
	'ACL_U_PM_IMG'		=> 'Faodar taga BBCode [img] a chleachdadh ann an teachdaireachdan pearsanta',
	'ACL_U_PM_FLASH'	=> 'Faodar taga BBCode [flash] a chleachdadh ann an teachdaireachdan pearsanta',
	'ACL_U_SENDEMAIL'	=> 'Faodar puist-d a chur',
	'ACL_U_SENDIM'		=> 'Faodar grad-theachdaireachdan a chur',
	'ACL_U_IGNOREFLOOD'	=> 'Faodar an t&#8209;eadaramh tuile a leigeil seachad',
	'ACL_U_HIDEONLINE'	=> 'Faodar an staid air loidhne fhalach',
	'ACL_U_VIEWONLINE'	=> 'Faodar buill fhalaichte air loidhne a shealltainn',
	'ACL_U_SEARCH'		=> 'Faodar lorg sa bhòrd-bhrath',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Faodar am fòram a shealltainn',
	'ACL_F_READ'		=> 'Faodar am fòram a leughadh',
	'ACL_F_SEARCH'		=> 'Faodar lorg san fhòram',
	'ACL_F_SUBSCRIBE'	=> 'Faodar sùil a chumail air fòram',
	'ACL_F_PRINT'		=> 'Faodar cuspairean a chlò-bhualadh',
	'ACL_F_EMAIL'		=> 'Faodar cuspairean a chur le post-d',
	'ACL_F_BUMP'		=> 'Faodar cuspairean a bhreabadh',
	'ACL_F_USER_LOCK'	=> 'Faodar na cuspairean aige fhèin a ghlasadh',
	'ACL_F_DOWNLOAD'	=> 'Faodar faidhlichean a luchdadh a-nuas',
	'ACL_F_REPORT'		=> 'Faodar gearan mu phost a dhèanamh',
	'ACL_F_POST'		=> 'Faodar cuspairean ùra a thòiseachadh',
	'ACL_F_STICKY'		=> 'Faodar fleodrainnean a phostadh',
	'ACL_F_ANNOUNCE'	=> 'Faodar brathan a phostadh',
	'ACL_F_REPLY'		=> 'Faodar freagairt do chuspairean',
	'ACL_F_EDIT'		=> 'Faodar na cuspairean aige fhèin a dheasachadh',
	'ACL_F_DELETE'		=> 'Faodar na postaichean aige fhèin a sguabadh às gu buan',
	'ACL_F_SOFTDELETE'	=> 'Faodar na postaichean aige fhèin a sguabadh às gu bog<br /><em>’S urrainn do mhaor post air a sguabadh às gu bog aiseag ma tha cumhachd aontachadh ri postaichean aige.</em>',
	'ACL_F_IGNOREFLOOD' => 'Faodar an t&#8209;eadaramh tuile a leigeil seachad',
	'ACL_F_POSTCOUNT'	=> 'Cuir ri cunntadh nam postaichean<br /><em>Thoir an aire nach eil buaidh aig an roghainn seo ach air postaichean ri teachd.</em>',
	'ACL_F_NOAPPROVE'	=> 'Faodar postadh gun aontachadh',
	'ACL_F_ATTACH'		=> 'Faodar ceanglachain a chur ris',
	'ACL_F_ICONS'		=> 'Faodar ìomhaigheagan cuspair/puist a chleachdadh',
	'ACL_F_BBCODE'		=> 'Faodar BBCode a chleachdadh',
	'ACL_F_FLASH'		=> 'Faodar taga BBCode [flash] a chleachdadh',
	'ACL_F_IMG'			=> 'Faodar taga BBCode [img] a chleachdadh',
	'ACL_F_SIGS'		=> 'Faodar earr-sgrìobhadh a chleachdadh',
	'ACL_F_SMILIES'		=> 'Faodar samhlaidhean-gniùis a chleachdadh',
	'ACL_F_POLL'		=> 'Faodar cunntasan-bheachd a chruthachadh',
	'ACL_F_VOTE'		=> 'Faodar bhòtadh ann an cunntasan-bheachd',
	'ACL_F_VOTECHG'		=> 'Faodar bhòt atharrachadh',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Faodar postaichean a dheasachadh',
	'ACL_M_DELETE'		=> 'Faodar postaichean a sguabadh às gu buan',
	'ACL_M_SOFTDELETE'	=> 'Faodar postaichean a sguabadh às gu bog<br /><em>’S urrainn do mhaor post air a sguabadh às gu bog aiseag ma tha cumhachd aontachadh ri postaichean aige.</em>',
	'ACL_M_APPROVE'		=> 'Faodar aontachadh ri postaichean ’s an aiseag',
	'ACL_M_REPORT'		=> 'Faodar gearanan a dhùnadh is a sguabadh às',
	'ACL_M_CHGPOSTER'	=> 'Faodar ùghdar puist atharrachadh',
	'ACL_M_MOVE'	=> 'Faodar cuspairean a ghluasad',
	'ACL_M_LOCK'	=> 'Faodar cuspairean a ghlasadh',
	'ACL_M_SPLIT'	=> 'Faodar cuspairean a roinneadh',
	'ACL_M_MERGE'	=> 'Faodar cuspairean a cho-aontachadh',
	'ACL_M_INFO'	=> 'Faodar fiosrachadh nam postaichean a shealltainn',
	'ACL_M_WARN'	=> 'Faodar rabhaidhean a thoirt seachad<br /><em>Tha buaidh uile-choitcheann aig an roghainn seo ’s chan eil i stèidhichte air fòraman fa leth.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Faodar toirmeasg a stiùireadh<br /><em>Tha buaidh uile-choitcheann aig an roghainn seo ’s chan eil i stèidhichte air fòraman fa leth.</em>', // This moderator setting is only global (and not local)
));


// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Faodar roghainnean a’ bhùird atharrachadh is sùil a thoirt airson ùrachaidhean',
	'ACL_A_SERVER'		=> 'Faodar roghainnean an fhrithealaiche is a’ chonaltraidh atharrachadh',
	'ACL_A_JABBER'		=> 'Faodar roghainnean Jabber atharrachadh',
	'ACL_A_PHPINFO'		=> 'Faodar an rèiteachadh aig php a shealltainn',
	'ACL_A_FORUM'		=> 'Faodar na fòraman a stiùireadh',
	'ACL_A_FORUMADD'	=> 'Faodar fòraman ùra a chur ris',
	'ACL_A_FORUMDEL'	=> 'Faodar fòraman a sguabadh às',
	'ACL_A_PRUNE'		=> 'Faodar fòraman a sgudadh',
	'ACL_A_ICONS'		=> 'Faodar ìomhaigheagan cuspair/puist is samhlaidhean-gniùis atharrachadh',
	'ACL_A_WORDS'		=> 'Faodar a’ cheansarachd fhaclan atharrachadh',
	'ACL_A_BBCODE'		=> 'Faodar tagaichean BBCode a mhìneachadh',
	'ACL_A_ATTACH'		=> 'Faodar roghainnean nan ceanglachan atharrachadh',
	'ACL_A_USER'		=> 'Faodar buill a stiùireadh<br /><em>Gabhaidh seo a-steach gum faicear àidseant brabhsair a’ chleachdaiche air an liosta cò tha air loidhne.</em>',
	'ACL_A_USERDEL'		=> 'Faodar buill a sguabadh às no a sgudadh',
	'ACL_A_GROUP'		=> 'Faodar buidhnean a stiùireadh',
	'ACL_A_GROUPADD'	=> 'Faodar buidhnean ùra a chur ris',
	'ACL_A_GROUPDEL'	=> 'Faodar buidhenan a sguabadh às',
	'ACL_A_RANKS'		=> 'Faodar rangan a stiùireadh',
	'ACL_A_PROFILE'		=> 'Faodar raointean pròifil gnàthaichte a stiùireadh',
	'ACL_A_NAMES'		=> 'Faodar far-ainmean ’gan diùltadh a stiùireadh',
	'ACL_A_BAN'			=> 'Faodar toirmeasg a stiùireadh',
	'ACL_A_VIEWAUTH'	=> 'Faodar masgan nan ceadan a shealltainn',
	'ACL_A_AUTHGROUPS'	=> 'Faodar ceadan airson buidhnean fa leth atharrachadh',
	'ACL_A_AUTHUSERS'	=> 'Faodar ceadan airson buill fa leth atharrachadh',
	'ACL_A_FAUTH'		=> 'Faodar clas ceadan fòraim atharrachadh',
	'ACL_A_MAUTH'		=> 'Faodar clas ceadan maorsainneachd atharrachadh',
	'ACL_A_AAUTH'		=> 'Faodar clas ceadan rianachd atharrachadh',
	'ACL_A_UAUTH'		=> 'Faodar clas ceadan buill atharrachadh',
	'ACL_A_ROLES'		=> 'Faodar ùghdarrasan a stiùireadh',
	'ACL_A_SWITCHPERM'	=> 'Faodar ceadan càch a chleachdadh',
	'ACL_A_STYLES'		=> 'Faodar stoidhlichean a stiùireadh',
	'ACL_A_EXTENSIONS'	=> 'Faodar tuilleadain a stiùireadh',
	'ACL_A_VIEWLOGS'	=> 'Faodar logaichean a shealltainn',
	'ACL_A_CLEARLOGS'	=> 'Faodar logaichean fhalamhachadh',
	'ACL_A_MODULES'		=> 'Faodar mòidealan a stiùireadh',
	'ACL_A_LANGUAGE'	=> 'Faodar pacaidean cànain a stiùireadh',
	'ACL_A_EMAIL'		=> 'Faodar mòr-sgaoileadh puist-d a chur',
	'ACL_A_BOTS'		=> 'Faodar botaichean a stiùireadh',
	'ACL_A_REASONS'		=> 'Faodar adhbharan gearain/diùltaidh a stiùireadh',
	'ACL_A_BACKUP'		=> 'Faodar lethbhreac-glèidhidh dhen stòr-dàta a dhèanamh is an stòr-dàta aiseag',
	'ACL_A_SEARCH'		=> 'Faodar backends is roghainnean an luirg a stiùireadh',
));
