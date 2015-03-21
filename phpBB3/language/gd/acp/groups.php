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

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> '’S urrainn dhut na buidhnean agad uile a stiùireadh an-seo. ’S urrainn dhut buidhnean a sguabadh às is a chruthachadh is an fheadhainn a tha ann a dheasachadh. A bharrachd air sin, ’s urrainn dhut ceannardan bhuidhinn a thaghadh, staid fosgailte/falaichte/dùinte nam buidhnean a thoglachadh is ainm is tuairisgeul nam buidhnean a shuidheachadh.',
	'ADD_GROUP_CATEGORY'			=> 'Cuir roinn-seòrsa ris',
	'ADD_USERS'	=> 'Cuir buill ris',
	'ADD_USERS_EXPLAIN'	=> '’S urrainn dhut buill ùra a chur ris a’ bhuidheann an-seo. ’S urrainn dhut taghadh an dèid am buidheann seo ’na bhun-bhuidheann airson na cleachdaichean a thagh thu. ’S urrainn dhut buill a shònrachadh mar cheannardan buidhinn cuideachd. Cuir a-steach gach far-ainm air loidhne fa leth.',
	'COPY_PERMISSIONS'	=> 'Dèan lethbhreac dhe na ceadan o',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Nuair a bhios e air a chruthachadh, bidh na h&#8209;aon ceadan aig am buidheann ’s a tha aig am fear a thaghas tu an-seo.',
	'CREATE_GROUP'	=> 'Cruthaich buidheann ùr',
	'GROUPS_NO_MEMBERS'	=> 'Chan eil ball sa bhuidheann',
	'GROUPS_NO_MODS'	=> 'Cha deach ceannard a shònrachadh',
	'GROUP_APPROVE'	=> 'Aontaich ri ball',
	'GROUP_APPROVED'	=> 'Buill air an aontachadh riutha',
	'GROUP_AVATAR'	=> 'Avatar a’ bhuidhinn',
	'GROUP_AVATAR_EXPLAIN'	=> 'Thèid an dealbh seo a shealltainn air panail-smachd a’ bhuidhinn.',
	'GROUP_CATEGORY_NAME'			=> 'Ainm na roinne-seorsa',
	'GROUP_CLOSED'	=> 'Dùinte',
	'GROUP_COLOR'	=> 'Dath a’ bhuidhinn',
	'GROUP_COLOR_EXPLAIN'	=> 'Seo an dath sa nochdas far-ainmean nan cleachdaichean. Fàg bàn e airson dath tùsail nam ball.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'An e ’s gu bheil thu airson am ball %2$s a chur ris a’ bhuidheann?',
		2	=> 'An e ’s gu bheil thu airson na buill %2$s a chur ris a’ bhuidheann?',
		3	=> 'An e ’s gu bheil thu airson na buill %2$s a chur ris a’ bhuidheann?',
		4	=> 'An e ’s gu bheil thu airson na buill %2$s a chur ris a’ bhuidheann?',
	),
	'GROUP_CREATED'	=> 'Tha thu air am buidheann a chruthachadh.',
	'GROUP_DEFAULT'	=> 'Tagh seo mar bhun-bhuidheann a’ bhuill',
	'GROUP_DEFS_UPDATED'	=> 'Tha thu air am bun-bhuidheann a shuidheachadh airson nam ball a thagh thu.',
	'GROUP_DELETE'	=> 'Thoir am ball air falbh on bhuidheann',
	'GROUP_DELETED'	=> 'Tha thu air am buidheann a sguabadh às is chaidh bun-bhuidheann a’ bhuill a shuidheachadh.',
	'GROUP_DEMOTE'	=> 'Thoir an ceannardas air falbh',
	'GROUP_DESC'	=> 'Tuairisgeul a’ bhuidhinn',
	'GROUP_DETAILS'	=> 'Fiosrachadh a’ bhuidhinn',
	'GROUP_EDIT_EXPLAIN'	=> '’S urrainn dhut buidheann a tha ann mar-thà a dheasachadh an-seo. ’S urrainn dhut ainm, a thuairisgeul is a sheòrsa (fosgailte, dùinte agus msaa.) atharrachadh. ’S urrainn dhut roghainnean airson buill a’ bhuidhinn a shuidheachadh cuideachd a leithid dath, rang agus msaa. Tar-àithnidh na h&#8209;atharraichean a nì thu an-seo roghainnean làithreach a’ bhuill. Thoir an aire gur urrainn do bhuill roghainnean avatar a’ bhuidhinn a thar-àithneadh mur suidhich thu ceadan nam ball iomchaidh.',
	'GROUP_ERR_USERS_EXIST'	=> 'Tha na buill a shònraich thu sa bhuidheann seo mar-thà.',
	'GROUP_FOUNDER_MANAGE'	=> 'Stiùireadh le bun-rianaire a-mhàin',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Cuingich ceadan rianachd a’ bhuidhinn seo gus nach fhaod ach bun-rianairean a stiùireadh. ’S urrainn do na buill aig a bheil ceadan buidhinn am buidheann seo co math ri buill a’ bhuidhinn a shealltainn fhathast.',
	'GROUP_HIDDEN'	=> 'Falaichte',
	'GROUP_LANG'	=> 'Cànan a’ bhuidhinn',
	'GROUP_LEAD'	=> 'Ceannardan a’ bhuidhinn',
	'GROUP_LEADERS_ADDED'	=> 'Tha thu air ceannard a chur ris a’ bhuidheann.',
	'GROUP_LEGEND'	=> 'Seall am buidheann san treòir',
	'GROUP_LIST'	=> 'Na buill làithreach',
	'GROUP_LIST_EXPLAIN'	=> 'Seo liosta shlàn dhe na h&#8209;uile ball a tha sa bhuidheann seo an-dràsta. ’S urrainn dhut buill a thoirt air falbh (ach o chuid a bhuidhnean sònraichte) no feadhainn ùra a chur ris mar a thogras tu.',
	'GROUP_MEMBERS'	=> 'Buill a’ bhuidhinn',
	'GROUP_MEMBERS_EXPLAIN'	=> 'Seo liosta shlàn dhe na h&#8209;uile ball a tha sa bhuidheann seo. Tha roinnean sònraichte na broinn airson ceannardan, buill ri an dèiligeadh is buill a tha ann. ’S urrainn dhut a h&#8209;uile rud a stiùireadh an-seo a tha co-cheangailte ri ballrachd is dreuchdan sa bhuidheann seo. Thoir air falbh ceannardas seach am ball fhèin ma tha thu airson ’s nach bi ball ’na cheannard tuilleadh ach gum mair e sa bhuidheann. Cleachd àrdachadh sen aon dòigh gus ceannard a dhèanamh de bhall a tha ann mar-thà.',
	'GROUP_MESSAGE_LIMIT'	=> 'Uiread de theachdaireachdan pearsanta anns gach pasgan airson a’ bhuidhinn seo',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Tar-àithnidh an roghainn seo an cuingeachadh a chaidh a shuidheachadh airson gach ball. Thèid am bun-roghainn airson gach ball a chleachdadh ma shuidhicheas tu an luach seo air 0.',
	'GROUP_MODS_ADDED'	=> 'Tha thu air ceannardan ùra a’ bhuidhinn a chur ris.',
	'GROUP_MODS_DEMOTED'	=> 'Tha thu air ceannardas a thoirt air falbh.',
	'GROUP_MODS_PROMOTED'	=> 'Tha thu air buill a’ bhuidhinn àrdachadh.',
	'GROUP_NAME'	=> 'Ainm a’ bhuidhinn',
	'GROUP_NAME_TAKEN'	=> 'Tha ainm a’ bhuidhinn a chuir thu a-steach ’ga chleachdadh mar-thà. Feuch tagh thu fear eile.',
	'GROUP_OPEN'	=> 'Fosgailte',
	'GROUP_PENDING'	=> 'Buill ris an dèiligeadh',
	'GROUP_MAX_RECIPIENTS'	=> 'Uiread de dh’fhaightearan ann an teachdaireachd phearsanta',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'An àireamh as motha de dh’fhaightearan airson an aon teachdaireachd pearsanta. Thèid roghainn choitcheann a’ bhùird a chleachdadh ma chuireas tu 0 a-steach.',
	'GROUP_OPTIONS_SAVE'	=> 'Roghainnean coitcheann a’ bhuidhinn',
	'GROUP_PROMOTE'	=> 'Àrdaich gu ceannard a’ bhuidhinn',
	'GROUP_RANK'	=> 'Rang a’ bhuidhinn',
	'GROUP_RECEIVE_PM'	=> 'Faodaidh am buidheann teachdaireachdan pearsanta fhaighinn',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Thoir an aire nach gabh teachdaireachdan pearsanta a chur gu buidhnean falaichte ge b’ e dè an roghainn seo.',
	'GROUP_REQUEST'	=> 'Iarrtas',
	'GROUP_SETTINGS_SAVE'	=> 'Roghainnean buill a’ bhuidhinn',
	'GROUP_SKIP_AUTH'	=> 'Saor ceannard a’ bhuidhinn o na ceadan',
	'GROUP_SKIP_AUTH_EXPLAIN'	=> 'Ma tha seo an comas, chan fhaigh ceannard a’ bhuidhinn ceadan mar dhìleab on bhuidheann seo.',
	'GROUP_SPECIAL'					=> 'Ro-shocraichte',
	'GROUP_TEAMPAGE'				=> 'Nochd am buidheann air duilleag an sgioba',
	'GROUP_TYPE'	=> 'Seòrsa a’ bhuidhinn',
	'GROUP_TYPE_EXPLAIN'	=> 'Suidhichidh seo dè na buill a dh’ fhaodas am buidheann seo a shealltainn no a dhol nam bhall ann.',
	'GROUP_UPDATED'	=> 'Tha thu air roghainnean a’ bhuidhinn ùrachadh.',
	'GROUP_USERS_ADDED'	=> 'Tha thu air buill ùra a chur ris a’ bhuidheann.',
	'GROUP_USERS_EXIST'	=> 'Tha na buill a thagh thu sa bhuidheann seo mar-thà.',
	'GROUP_USERS_REMOVE'	=> 'Tha thu air na buill a thoirt air falbh on bhuidheann is chaidh na bun-roghainnean ùra a shuidheachadh.',
	'LEGEND_EXPLAIN'				=> 'Seo na buidhnean a nochdas ann an treòir nam buidhnean:',
	'LEGEND_SETTINGS'				=> 'Roghainnean na treòire',
	'LEGEND_SORT_GROUPNAME'			=> 'Seòrsaich an treòir le ainm a’ bhuidhinn',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Thèid an t-òrdugh gu h-ìosal a chur dhan dàrna taobh nuair a bhios an roghainn seo air.',
	'MANAGE_LEGEND'			=> 'Stiùirich treòir nam buidhnean',
	'MANAGE_TEAMPAGE'		=> 'Stiùirich duilleag an sgioba',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Cuir seo ’na bhun-bhuidheann airson na h&#8209;uile ball a’ bhudhinn',
	'MEMBERS'	=> 'Buill',
	'NO_GROUP'	=> 'Cha deach buidheann a shònrachadh.',
	'NO_GROUPS_ADDED'			=> 'Cha deach buidheann a chur ris fhathast.',
	'NO_GROUPS_CREATED'	=> 'Cha deach buidheann a chruthachadh fhathast.',
	'NO_PERMISSIONS'	=> 'Na dèan lethbhreac de cheadan',
	'NO_USERS'	=> 'Cha do chuir thu a-steach ball sam bith.',
	'NO_USERS_ADDED'	=> 'Cha deach ball a chur ris a’ bhuidheann seo.',
	'NO_VALID_USERS'	=> 'Cha do chuir thu ball iomchaidh a-steach airson a’ ghnìomha sin.',
	'SELECT_GROUP'				=> 'Tagh buidheann',
	'SPECIAL_GROUPS'	=> 'Buidhnean ro-shocraichte',
	'SPECIAL_GROUPS_EXPLAIN'	=> '’S e buidhnean sònraichte a tha sna buidhnean ro-shocraichte is chan urrainn dhut an sguabadh às no atharrachadh gu dìreach. ’S urrainn dhut buill a chur riutha co-dhiù is roghainnean bunasach atharrachadh.',
	'TEAMPAGE'					=> 'Duilleag an sgioba',
	'TEAMPAGE_DISP_ALL'			=> 'Na h-uile ballrachd',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Bun-bhuidheann a’ bhuill a-mhàin',
	'TEAMPAGE_DISP_FIRST'		=> 'A’ chiad ballrachd a-mhàin',
	'TEAMPAGE_EXPLAIN'			=> 'Seo na buidhnean a nochdas air duilleag an sgioba:',
	'TEAMPAGE_FORUMS'			=> 'Seall maorsainneachd nam fòraman',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Mas e “Seadh” a th’ ann, thèid liosta dhe na fòraman far a bheil ball ’na mhaor a shealltainn san ràgh aige. Dh’fhaoidte gun adhbharaich seo eallach mhòr air an stòr-dàta le bùird-bhrath mòra.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Seall ballrachdan a’ bhuill',
	'TEAMPAGE_SETTINGS'			=> 'Roghainnean aig duilleag an sgioba',
	'TOTAL_MEMBERS'	=> 'Buill',
	'USERS_APPROVED'	=> 'Tha thu air aontachadh ris na buill.',
	'USER_DEFAULT'	=> 'Bun-roghainn a’ chleachdaiche',
	'USER_DEF_GROUPS'	=> 'Buidhnean air an cruthachadh le rianaire',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'Seo buidhnean a chaidh a chruthachadh leat fhèin no le rianaire a’ bhùird eile. ’S urrainn dhut ballrachd a’ bhuidhinn a stiùireadh is na roghainnean a dheasachadh no eadhon am buidheann a sguabadh às.',
	'USER_GROUP_DEFAULT'	=> 'Suidhich mar bhun-bhuidheann',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Thèid am buidheann seo a shuidheachadh mar am bun-bhuidheann airson na buill a tha thu a’ cur ris ma thaghas tu “Seadh” an-seo.',
	'USER_GROUP_LEADER'	=> 'Suidhich mar cheannard a’ bhuidhinn',
));
