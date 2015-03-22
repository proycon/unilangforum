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
	'APPROVE_TOPIC'	=> 'Aontaich ris a’ chuspair',
	'APPROVE_TOPIC_CONFIRM'	=> 'An e ’s  gu bheil thu airson aontachadh ris a’ chuspair seo?',
	'APPROVE_TOPICS'	=> 'Aontaich ris na cuspairean',
	'APPROVE_TOPICS_CONFIRM'	=> 'An e ’s  gu bheil thu airson aontachadh ris na cuspairean a thagh thu?',
	'MCP_QUEUE_DELETED_POSTS'	=> 'Postaichean air an sguabadh às',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'	=> 'Seo liosta de a h-uile post a chaidh a sguabadh às gu bog. ’S urrainn dhut postaichean aiseag no a sguabadh às gu buan air an duilleag seo.',
	'MCP_QUEUE_DELETED_TOPICS'	=> 'Cuspairean air an sguabadh às',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'	=> 'Seo liosta de a h-uile cuspair a chaidh a sguabadh às gu bog. ’S urrainn dhut cuspairean aiseag no a sguabadh às gu buan air an duilleag seo.',
	'NO_POSTS_DELETED'	=> 'Chan eil post air a sguabadh às ann.',
	'NO_POSTS_QUEUE'	=> 'Chan eil post a’ feitheamh ri aontachadh.',
	'NO_TOPICS_DELETED'	=> 'Chan eil cuspair air a sguabadh às ann.',
	'QUICKMOD_ACTION_NOT_ALLOWED'	=> 'Chan eil %s ceadaichte mar ghrad-mhaorsainneachd',
	'POSTS_RESTORED_SUCCESS'	=> 'Tha na postaichean a thagh thu air an aiseag.',
	'POST_RESTORED_SUCCESS'	=> 'Tha am post seo air aiseag.',
	'RESTORE'	=> 'Aisig',
	'RESTORE_POST'	=> 'Aisig am post',
	'RESTORE_POST_CONFIRM'	=> 'An e ’s gu bheil thu airson am post seo aiseag?',
	'RESTORE_POSTS'	=> 'Aisig na postaichean',
	'RESTORE_POSTS_CONFIRM'	=> 'An e ’s gu bheil thu airson na postaichean a thagh thu aiseag?',
	'RESTORE_TOPIC'	=> 'Aisig an cuspair',
	'RESTORE_TOPIC_CONFIRM'	=> 'An e ’s gu bheil thu airson an cuspair seo aiseag?',
	'RESTORE_TOPICS'	=> 'Aisig na cuspairean',
	'RESTORE_TOPICS_CONFIRM'	=> 'An e ’s gu bheil thu airson na cuspairean a thagh thu aiseag?',
	'TOPICS_RESTORED_SUCCESS'	=> 'Tha na cuspairean a thagh thu air an aiseag.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Tha an cuspair a thagh thu air aiseag.',
	'NO_WARNINGS'	=> 'Chan eil rabhadh ann.',
	'ALREADY_REPORTED_PM'	=> 'Chaidh gearan a dhèanamh mun teachdaireachd seo mar-thà.',
	'CLOSE_PM_REPORT'	=> 'Air dèiligeadh ris',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'An e ’s gun do dhèilig thu ris a’ ghearan mun teachdaireachd chomharraichte?',
	'CLOSE_PM_REPORTS'	=> 'Air dèiligeadh riutha',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'An e ’s gun do dhèilig thu ris na gearanan mu na teachdaireachdan comharraichte?',
	'DELETE_PM_REPORT'	=> 'Sguab às',
	'DELETE_PM_REPORT_CONFIRM'	=> 'An e ’s gu bheil thu airson an gearan mun teachdaireachd chomharraichte a sguabadh às?',
	'DELETE_PM_REPORTS'	=> 'Sguab às',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'An e ’s gu bheil thu airson na gearanan mu na teachdaireachdan comharraichte a sguabadh às?',
	'LATEST_REPORTED_PMS'	=> 'Na 5 teachdaireachdan as ùire',
	'MCP_PM_REPORTS'	=> 'Gearanan mu theachdaireachdan pearsanta',
	'MCP_PM_REPORT_DETAILS'	=> 'Fiosrachadh air gearan mu theachdaireachd phearsanta',
	'MCP_PM_REPORTS_CLOSED'	=> 'Mu theachdaireachd – dùinte',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Seo liosta dhe na gearanan mu theachdaireachdan pearsanta ris a chaidh dèiligeadh mar-thà.',
	'MCP_PM_REPORTS_OPEN'	=> 'Mu theachdaireachd – fosgailte',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Seo liosta dhe na gearanan mu theachdaireachdan pearsanta ris a dh’fheumas sinn dèiligeadh fhathast.',
	'PM_REPORT_CLOSED_SUCCESS'	=> 'Chaidh comharrachadh gun do dhèilig thu ris a’ ghearan mun teachdaireachd chomharraichte.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Tha thu air a’ ghearan mun teachdaireachd seo a sguabadh às.',
	'PM_REPORTED_SUCCESS'	=> 'Tha thu air gearan a dhèanamh mun teachdaireachd seo.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Tha thu air comharrachadh gun do dhèilig thu ris na gearanan mu na teachdaireachdan comharraichte.',
	'PM_REPORTS_DELETED_SUCCESS'	=> 'Tha thu air na gearanan mu na teachdaireachdan seo a sguabadh às.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Chan eil gearan mu theachdaireachdan pearsanta ri dhèiligeadh ann.',
		1	=> 'Tha <strong>%d </strong> ghearan mu theachdaireachdan pearsanta ri dhèiligeadh ann.',
		2	=> 'Tha <strong>%d </strong> ghearan mu theachdaireachdan pearsanta ri an dèiligeadh ann.',
		3	=> 'Tha <strong>%d </strong> gearanan mu theachdaireachdan pearsanta ri an dèiligeadh ann.',
		4	=> 'Tha <strong>%d </strong> gearan mu theachdaireachdan pearsanta ri an dèiligeadh ann.',
	),
	'PM_REPORT_DETAILS'	=> 'Fiosrachadh air gearan mu theachdaireachd phearsanta',
	'RETURN_PM'	=> '%sThill dhan teachdaireachd phearsanta%s',
	'THIS_PM_IP'	=> 'IP na teachdaireachd phearsanta seo',
	'VIEW_PM'	=> 'Seall an teachdaireachd phearsanta',
	'ACTION'	=> 'Gnìomh',
	'ACTION_NOTE'	=> 'Gnìomh/Nòta',
	'ADD_FEEDBACK'	=> 'Cuir nòta ris',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ma tha thu airson nòta a chur ris, nach lìon thu am foirm a leanas? Na cleachd ach teagsa lom; chan eil HTML no BBCode agus msaa. ceadaichte.',
	'ADD_WARNING'	=> 'Cuir rabhadh ris',
	'ADD_WARNING_EXPLAIN'	=> 'Gus rabhadh a thoirt dhan bhall seo, lìon am foirm a leanas. Na cleachd ach teagsa lom; chan eil HTML no BBCode amsaa. ceadaichte.',
	'ALL_ENTRIES'	=> 'Nòta sam bith',
	'ALL_NOTES_DELETED'	=> 'Sguab thu às gach nota.',
	'ALL_REPORTS'	=> 'Gearan sam bith',
	'ALREADY_REPORTED'	=> 'Chaidh gearan a dhèanamh mun phost seo mu thràth.',
	'ALREADY_WARNED'	=> 'Chaidh rabhadh a thoirt seachad air sàilleabh a’ phuist seo mu thràth.',
	'APPROVE'	=> 'Aontaich',
	'APPROVE_POST'	=> 'Aontaich ris a’ post seo',
	'APPROVE_POST_CONFIRM'	=> 'An e ’s gun bheil thu airson aontachadh ris a’ post seo?',
	'APPROVE_POSTS'	=> 'Aontaich ris na postaichean seo',
	'APPROVE_POSTS_CONFIRM'	=> 'An e ’s gun bheil thu airson aontachadh ris na postaichean comharraichte?',
	'CANNOT_MOVE_SAME_FORUM'	=> 'Chan urrainn dhut cuspair a ghluasad gu fòram sa bheil e mar-thà.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Chan urrainn dhut rabhadh a thoirt seachad gu aoigh nach eil clàraichte.',
	'CANNOT_WARN_SELF'	=> 'Chan urrainn dhut rabhadh a thoirt seachad thugad fhèin.',
	'CAN_LEAVE_BLANK'	=> 'Faodaidh tu seo fhàgail bàn.',
	'CHANGE_POSTER'	=> 'Atharraich ùghdar',
	'CLOSE_REPORT'	=> 'Air dèiligeadh ris',
	'CLOSE_REPORT_CONFIRM'	=> 'An e ’s gun do dhèilig thu ris a’ ghearan chomharraichte?',
	'CLOSE_REPORTS'	=> 'Air dèiligeadh riutha',
	'CLOSE_REPORTS_CONFIRM'	=> 'An e ’s gun do dhèilig thu ris na gearanan comharraichte?',
	'DELETE_POSTS'	=> 'Sguab às',
	'DELETE_REPORT'	=> 'Sguab às',
	'DELETE_REPORT_CONFIRM'	=> 'An e ’s gu bheil thu airson an gearan comharraichte a sguabadh às?',
	'DELETE_REPORTS'	=> 'Sguab às',
	'DELETE_REPORTS_CONFIRM'	=> 'An e ’s gu bheil thu airson na gearanan comharraichte a sguabadh às?',
	'DELETE_SHADOW_TOPIC'	=> 'Sguab às an ath-stiùireadh',
	'DELETE_TOPICS'	=> 'Sguab às na cuspairean comharraichte',
	'DISAPPROVE'	=> 'Easaontaich',
	'DISAPPROVE_REASON'	=> 'Adhbhar an easaontachaidh',
	'DISAPPROVE_POST'	=> 'Easaontaich ri post',
	'DISAPPROVE_POST_CONFIRM'	=> 'An e ’s gu bheil thu airson easaontachadh ris a’ phost seo?',
	'DISAPPROVE_POSTS'	=> 'Easaontaich ri postaichean',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'An e ’s gu bheil thu airson easaontachadh ris na postaichean comharraichte?',
	'DISPLAY_LOG'	=> 'Seall nòtaichean',
	'DISPLAY_OPTIONS'	=> 'Roghainnean seallaidh',
	'EMPTY_REPORT'	=> 'Feumaidh tu mìneachadh a thoirt seachad nuair a thaghas tu an t&#8209;adhbhar seo.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Thoir an aire gun deach cuspair no dhà a sguabadh às an stòr-dàta air sgàth ’s gun robh e falamh.',
	'FEEDBACK'	=> 'Nòta',
	'FORK'	=> 'Dèan lethbhreac',
	'FORK_TOPIC'	=> 'Dèan lethbhreac dhen chuspair',
	'FORK_TOPIC_CONFIRM'	=> 'An e ’s gu bheil thu airson lethbhreac dhen chuspair seo a dhèanamh?',
	'FORK_TOPICS'	=> 'Dèan lethbhreac dhe na cuspairean comharraichte',
	'FORK_TOPICS_CONFIRM'	=> 'An e ’s gu bheil thu airson lethbhreac dhe na cuspairean comharraichte a dhèanamh?',
	'FORUM_DESC'	=> 'Tuairisgeul',
	'FORUM_NAME'	=> 'Ainm an fhòraim',
	'FORUM_NOT_EXIST'	=> 'Chan eil am fòram a thagh thu ann.',
	'FORUM_NOT_POSTABLE'	=> 'Chan urrainnear postaichean a chur ris an fhòram a thagh thu.',
	'FORUM_STATUS'	=> 'Staid an fhòraim',
	'FORUM_STYLE'	=> 'Stoidhle an fhòraim',
	'GLOBAL_ANNOUNCEMENT'	=> 'Lèir-bhrath',
	'IP_INFO'	=> 'Fiosrachadh air seòladh IP',
	'IPS_POSTED_FROM'	=> 'Seòlaidhean IP a chleachd am ball seo airson postaichean',
	'LATEST_LOGS'	=> 'Na 5 gnìomhan san loga as ùire',
	'LATEST_REPORTED'	=> 'Na 5 gearanan as ùire',
	'LATEST_UNAPPROVED'	=> 'Na 5 postaichean gun aontachadh as ùire',
	'LATEST_WARNING_TIME'	=> 'An rabhadh as ùire',
	'LATEST_WARNINGS'	=> 'Na 5 rabhaidhean as ùire',
	'LEAVE_SHADOW'	=> 'Fàg ath-striùiridh an seo',
	'LIST_REPORTS'				=> array(
		1	=> '%d ghearan',
		2	=> '%d ghearan',
		3	=> '%d gearanan',
		4	=> '%d gearan',
	),
	'LOCK'	=> 'Glais',
	'LOCK_POST_POST'	=> 'Glais am post',
	'LOCK_POST_POST_CONFIRM'	=> 'An e ’s gu bheil thu airson bacadh a chur air deasachadh a’ phuist seo?',
	'LOCK_POST_POSTS'	=> 'Glais na postaichean comharraichte',
	'LOCK_POST_POSTS_CONFIRM'	=> 'An e ’s gu bheil thu airson bacadh a chur air deasachadh nam postaichean comharraichte?',
	'LOCK_TOPIC_CONFIRM'	=> 'An e ’s gu bheil thu airson an cuspair seo a ghlasadh?',
	'LOCK_TOPICS'	=> 'Glais na cuspairean comharraichte',
	'LOCK_TOPICS_CONFIRM'	=> 'An e ’s gu bheil thu airson na cuspairean comharraichte a ghlasadh?',
	'LOGS_CURRENT_TOPIC'	=> 'A’ sealltainn air loga airson:',
	'LOGIN_EXPLAIN_MCP'	=> 'Feumaidh tu logadh a-steach gus gnìomhan nam maor a chleachdadh.',
	'LOGVIEW_VIEWTOPIC'	=> 'Seall an cuspair',
	'LOGVIEW_VIEWLOGS'	=> 'Seall loga a’ chuspair',
	'LOGVIEW_VIEWFORUM'	=> 'Seall am fòram',
	'LOOKUP_ALL'	=> 'Lorg a h&#8209;uile seòladh IP',
	'LOOKUP_IP'	=> 'Lorg seòladh IP',
	'MARKED_NOTES_DELETED'	=> 'Chuir thu às na nòtaichean comharraichte.',
	'MCP_ADD'	=> 'Thoir rabhadh seachad',
	'MCP_BAN'	=> 'Toirmeasg',
	'MCP_BAN_EMAILS'	=> 'Seòlaidhean puist-d',
	'MCP_BAN_IPS'	=> 'Seòlaidhean IP',
	'MCP_BAN_USERNAMES'	=> 'Far-ainmean',
	'MCP_LOGS'	=> 'Loga nam maor',
	'MCP_LOGS_FRONT'	=> 'Prìomh-dhuilleag',
	'MCP_LOGS_FORUM_VIEW'	=> 'Loga nam fòraman',
	'MCP_LOGS_TOPIC_VIEW'	=> 'Loga nan cuspairean',
	'MCP_MAIN'	=> 'Foir-shealladh',
	'MCP_MAIN_FORUM_VIEW'	=> 'Seall fòram',
	'MCP_MAIN_FRONT'	=> 'Prìomh-dhuilleag',
	'MCP_MAIN_POST_DETAILS'	=> 'Fiosrachadh air post',
	'MCP_MAIN_TOPIC_VIEW'	=> 'Seall an cuspair',
	'MCP_MAKE_ANNOUNCEMENT'	=> 'Atharraich gu “Brath”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'An e ’s gu bheil thu airson brath a dhèanamh dhen chuspair seo?',
	'MCP_MAKE_ANNOUNCEMENTS'	=> 'Atharraich gu “Brath”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'An e ’s gu bheil thu airson brathan a dhèanamh dhe na cuspairean comharraichte?',
	'MCP_MAKE_GLOBAL'	=> 'Atharraich gu “Lèir-bhrath”',
	'MCP_MAKE_GLOBAL_CONFIRM'	=> 'An e ’s gu bheil thu airson lèir-bhrath a dhèanamh dhen chuspair seo?',
	'MCP_MAKE_GLOBALS'	=> 'Atharraich gu “Lèir-bhrath”',
	'MCP_MAKE_GLOBALS_CONFIRM'	=> 'An e ’s gu bheil thu airson lèir-bhrathan a dhèanamh dhe na cuspairean comharraichte?',
	'MCP_MAKE_STICKY'	=> 'Atharraich gu “Fleodrainn”',
	'MCP_MAKE_STICKY_CONFIRM'	=> 'An e ’s gu bheil thu airson fleodrainn a dhèanamh dhen chuspair seo?',
	'MCP_MAKE_STICKIES'	=> 'Atharraich gu “Fleodrainn”',
	'MCP_MAKE_STICKIES_CONFIRM'	=> 'An e ’s gu bheil thu airson fleodrainnean a dhèanamh dhe na cuspairean comharraichte?',
	'MCP_MAKE_NORMAL'	=> 'Atharraich gu “Coitcheann”',
	'MCP_MAKE_NORMAL_CONFIRM'	=> 'An e ’s gu bheil thu airson cuspair coitcheann a dhèanamh dhen cuspair seo?',
	'MCP_MAKE_NORMALS'	=> 'Atharraich gu “Coitcheann”',
	'MCP_MAKE_NORMALS_CONFIRM'	=> 'An e ’s gu bheil thu airson cuspairean coitcheann a dhèanamh dhe na cuspairean comharraichte?',
	'MCP_NOTES'	=> 'Nòtaichean',
	'MCP_NOTES_FRONT'	=> 'Prìomh-dhuilleag',
	'MCP_NOTES_USER'	=> 'Fiosrachadh air ball',
	'MCP_POST_REPORTS'	=> 'Gearanan mun phost seo',
	'MCP_REPORTS'	=> 'Gearanan',
	'MCP_REPORT_DETAILS'	=> 'Fiosrachadh air gearan',
	'MCP_REPORTS_CLOSED'	=> 'Mu phost no cuspair – dùinte',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Seo liosta dhe na gearanan ris a chaidh dèiligeadh mar-thà.',
	'MCP_REPORTS_OPEN'	=> 'Mu phost no cuspair – fosgailte',
	'MCP_REPORTS_OPEN_EXPLAIN'	=> 'Seo liosta dhe na gearanan ris a dh’fheumas sinn dèiligeadh fhathast.',
	'MCP_QUEUE'	=> 'Ciudha nam maor',
	'MCP_QUEUE_APPROVE_DETAILS'	=> 'Fiosrachadh air aontachadh',
	'MCP_QUEUE_UNAPPROVED_POSTS'	=> 'Postaichean gun aontachadh',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Seo liosta shlàn dhe na postaichean nach nochd mus dèid aontachadh riutha.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'	=> 'Cuspairean gun aontachadh',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Seo liosta shlàn dhe na cuspairean nach nochd mus dèid aontachadh riutha.',
	'MCP_VIEW_USER'	=> 'Seall rabhaidhean airson ball sònraichte',
	'MCP_WARN'	=> 'Rabhaidhean',
	'MCP_WARN_FRONT'	=> 'Prìomh-dhuilleag',
	'MCP_WARN_LIST'	=> 'Rabhaidhean',
	'MCP_WARN_POST'	=> 'Thoir rabhadh seachad air sàilleibh puist shònraichte',
	'MCP_WARN_USER'	=> 'Thoir rabhadh seachad do bhall',
	'MERGE_POSTS_CONFIRM'	=> 'An e ’s gu bheil thu airson na postaichean comharraichte co-aontachadh?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Cleachd am foirm gu h&#8209;ìosal gus na postaichean comharraichte a ghluasad gu cuspair eile. Thèid na postaichean seo a chur air falbh on chuspair seo agus thèid iad co-aontachadh leis a’ chuspair eile. Cha dèid òrdugh ùr a chur ris na postaichean seo is thèid gan sealltainn mar gun do sgrìobh na buill sa chuspair ùr iad.<br />Sònraich aithnichear a’ chuspair-uidhe no briog air “Tagh cuspair” gus fear a lorg.',
	'MERGE_TOPIC_ID'	=> 'Aithnichear a’ chuspair-uidhe',
	'MERGE_TOPICS'	=> 'Co-aontaich na cuspairean',
	'MERGE_TOPICS_CONFIRM'	=> 'An e ’s gu bheil thu airson na cuspairean comharraichte co-aontachadh?',
	'MODERATE_FORUM'	=> 'Dèan maorsainneachd air fòram',
	'MODERATE_TOPIC'	=> 'Dèan maorsainneachd air cuspair',
	'MODERATE_POST'	=> 'Dèan maorsainneachd air post',
	'MOD_OPTIONS'	=> 'Roghainnean nam maor',
	'MORE_INFO'	=> 'Barrachd fiosrachaidh',
	'MOST_WARNINGS'	=> 'Buill leis an àireamh as motha de rabhaidhean',
	'MOVE_TOPIC_CONFIRM'	=> 'An e ’s gu bheil thu airson an cuspair seo a ghluasad gu fòram ùr?',
	'MOVE_TOPICS'	=> 'Gluais na cuspairean comharraichte',
	'MOVE_TOPICS_CONFIRM'	=> 'An e ’s gu bheil thu airson na cuspairean comharraichte a ghluasad gu fòram ùr?',
	'NOTIFY_POSTER_APPROVAL'	=> 'Cuir fios dhan ùghdar mun aontachadh.',
	'NOTIFY_POSTER_DISAPPROVAL'	=> 'Cuir fios dhan ùghdar mun easaontachadh.',
	'NOTIFY_USER_WARN'	=> 'Cuir fios dhan bhall mun rabhadh.',
	'NOT_MODERATOR'	=> 'Chan eil thu nad mhaor san fhòram seo.',
	'NO_DESTINATION_FORUM'	=> 'Tagh fòram-uidhe.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Chan eil fòram-uidhe ri fhaighinn.',
	'NO_ENTRIES'	=> 'Cha deach càil a chur ris an loga.',
	'NO_FEEDBACK'	=> 'Chan eil nòta airson a’ bhuill seo ann.',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Feumaidh tu cuspair-uidhe a thaghadh gus postaichean a cho-aontachadh.',
	'NO_MATCHES_FOUND'	=> 'Cha deach freagairt a lorg.',
	'NO_POST'	=> 'Feumaidh tu post a thaghadh gus rabhadh air sàilleibh puist a thoirt seachad dhan bhall.',
	'NO_POST_REPORT'	=> 'Cha deach gearan a dhèanamh mun phost seo.',
	'NO_POST_SELECTED'	=> 'Feumaidh tu post no dhà a thaghadh gus seo a dhèanamh.',
	'NO_REASON_DISAPPROVAL'	=> 'Sònraich adhbhar freagarrach airson an easaonta.',
	'NO_REPORT'	=> 'Cha deach gearan a lorg.',
	'NO_REPORTS'	=> 'Cha deach gearan a lorg.',
	'NO_REPORT_SELECTED'	=> 'Feumaidh tu gearan o dhà a thaghadh gus seo a dhèanamh.',
	'NO_TOPIC_ICON'	=> 'Gun ìomhaigheag',
	'NO_TOPIC_SELECTED'	=> 'Feumaidh tu cuspair no dhà a thaghadh gus seo a dhèanamh.',
	'NO_TOPICS_QUEUE'	=> 'Chan eil cuspairean a’ feitheamh ri aontachadh.',
	'ONLY_TOPIC'	=> 'An cuspair “%s” a-mhàin',
	'OTHER_USERS'	=> 'Buill eile a chleachd an seòladh IP seo airson postaichean',
	'POSTER'	=> 'Ùghdar',
	'POSTS_APPROVED_SUCCESS'	=> 'Tha thu air aontachadh ris na postaichean comharraichte.',
	'POSTS_DELETED_SUCCESS'	=> 'Tha thu air na postaichean comharraichte a sguabadh às.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Tha thu air easaontachadh ris na postaichean comharraichte.',
	'POSTS_LOCKED_SUCCESS'	=> 'Tha thu air na postaichean comharraichte a ghlasadh.',
	'POSTS_MERGED_SUCCESS'	=> 'Tha thu air na postaichean comharraichte a cho-aontachadh.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Tha thu air na postaichean comharraichte fhosgladh.',
	'POSTS_PER_PAGE'	=> 'Postaichean air gach duilleig',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Sònraich 0 gus a h&#8209;uile post a shealltainn.)',
	'POST_APPROVED_SUCCESS'	=> 'Tha thu air aontachadh ris a’ phost comharraichte.',
	'POST_DELETED_SUCCESS'	=> 'Tha thu air am post comharraichte a sguabadh às.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Tha thu air easaontachadh ris a’ phost comharraichte.',
	'POST_LOCKED_SUCCESS'	=> 'Tha thu air am post comharraichte a ghlasadh.',
	'POST_NOT_EXIST'	=> 'Chan eil am post a thagh thu ann.',
	'POST_REPORTED_SUCCESS'	=> 'Tha thu air gearan mun phost seo a dhèanamh.',
	'POST_UNLOCKED_SUCCESS'	=> 'Tha thu air am post comharraichte fhosgladh.',
	'READ_USERNOTES'	=> 'Nòtaichean a’ bhuill',
	'READ_WARNINGS'	=> 'Rabhaidhean a’ bhuill',
	'REPORTER'	=> 'Neach-gearain',
	'REPORTED'	=> 'Le gearan',
	'REPORTED_BY'	=> 'Gearan dèanta le',
	'REPORTED_ON_DATE'	=> 'aig',
	'REPORTS_CLOSED_SUCCESS'	=> 'Tha thu air na gearanan comharraichte a dhùnadh.',
	'REPORTS_DELETED_SUCCESS'	=> 'Tha thu air na gearanan comharraichte a sguabadh às.',
	'REPORTS_TOTAL'			=> array(
		0	=> 'Chan eil gearan ri dhèiligeadh ann.',
		1	=> 'Tha <strong>%d </strong> ghearan ri dhèiligeadh ann.',
		2	=> 'Tha <strong>%d </strong> ghearan ri an dèiligeadh ann.',
		3	=> 'Tha <strong>%d </strong> gearanan ri an dèiligeadh ann.',
		4	=> 'Tha <strong>%d </strong> gearan ri an dèiligeadh ann.',
	),
	'REPORT_CLOSED'	=> 'Chaidh an gearan seo a dhùnadh mar-thà.',
	'REPORT_CLOSED_SUCCESS'	=> 'Tha thu air an gearan comharraichte a dhùnadh.',
	'REPORT_DELETED_SUCCESS'	=> 'Tha thu air an gearan comharraichte a sguabadh às.',
	'REPORT_DETAILS'	=> 'Fiosrachadh air a’ ghearan',
	'REPORT_MESSAGE'	=> 'Dèan gearan mun teachdaireachd seo',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Cleachd am foirm seo gus gearan a dhèanamh mun teachdaireachd a thagh thu. Feuch nach cur thu gearan a-steach mur eil i a’ briseadh riaghailtean a’ bhùird.',
	'REPORT_NOTIFY'	=> 'Cuir fios thugam',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Gheibh thu fios nuair a chaidh dèiligeadh ris a’ ghearan agad.',
	'REPORT_POST_EXPLAIN'	=> 'Cleachd am foirm seo gus gearan a chur gu maoir nam fòraman is rianairean a’ bhùird mun phost a thagh thu. Feuch nach cur thu gearan a-steach mur eil am post a’ briseadh riaghailtean a’ bhùird.',
	'REPORT_REASON'	=> 'Adhbhar a’ ghearain',
	'REPORT_TIME'	=> 'Ùine a’ ghearain',
	'RESYNC'	=> 'Ath-shioncronaich',
	'RETURN_MESSAGE'	=> '%sTill dhan teachdaireachd%s',
	'RETURN_NEW_FORUM'	=> '%sSeall am fòram ùr%s',
	'RETURN_NEW_TOPIC'	=> '%sSeall an cuspair ùr%s',
	'RETURN_POST'	=> '%sTill dhan phost%s',
	'RETURN_QUEUE'	=> '%sTill dhan chiudha%s',
	'RETURN_REPORTS'	=> '%sTill dha na gearanan%s',
	'RETURN_TOPIC_SIMPLE'	=> '%sTill dhan chuspair%s',
	'SEARCH_POSTS_BY_USER'	=> 'Lorg postaichean le',
	'SELECT_ACTION'	=> 'Tagh gnìomh',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Tagh fòram gus an lèir-bhrath seo a shealltainn.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> '’S e lèir-bhrathan a th’ ann cuid dhe na cuspairean a thagh thu. Tagh fòram gus an sealltainn.',
	'SELECT_MERGE'	=> 'Tagh airson co-aontachadh',
	'SELECT_TOPICS_FROM'	=> 'Tagh cuspairean o',
	'SELECT_TOPIC'	=> 'Tagh cuspair',
	'SELECT_USER'	=> 'Tagh ball',
	'SORT_ACTION'	=> 'Gnìomh',
	'SORT_DATE'	=> 'Ceann-là',
	'SORT_IP'	=> 'Seòladh IP',
	'SORT_WARNINGS'	=> 'Rabhaidhean',
	'SPLIT_AFTER'	=> 'Roinn cuspair on phost chomharraichte a-mach',
	'SPLIT_FORUM'	=> 'Fòram airson a’ chuspair ùir',
	'SPLIT_POSTS'	=> 'Roinn na postaichean comharraichte',
	'SPLIT_SUBJECT'	=> 'Ainm a’ chuspair ùir',
	'SPLIT_TOPIC_ALL'	=> 'Roinn cuspair o na postaichean comharraichte a-mach',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'An e ’s gu bheil thu airson an cuspair seo a roinn?',
	'SPLIT_TOPIC_BEYOND'	=> 'Roinn cuspair on phost chomharraichte a-mach',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'An e ’s gu bheil thu airson an cuspair seo a roinn on phost chomharraichte a-mach?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Cleachd am foirm gu h&#8209;ìosal gus cuspair a roinn ann an dà phàirt. ’S urrainn dhut gach post sònraichte a thaghadh air neo roinn on phost chomharraichte a-mach.',
	'THIS_POST_IP'	=> 'Seòladh IP a’ phuist seo',
	'TOPICS_APPROVED_SUCCESS'	=> 'Tha thu air aontachadh ris na cuspairean comharraichte.',
	'TOPICS_DELETED_SUCCESS'	=> 'Tha thu air na cuspairean comharraichte a sguabadh às.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Tha thu air easaontachadh ris na cuspairean comharraichte.',
	'TOPICS_FORKED_SUCCESS'	=> 'Tha thu air lethbhreac dhe na cuspairean comharraichte a dhèanamh.',
	'TOPICS_LOCKED_SUCCESS'	=> 'Tha thu air na cuspairean comharraichte a ghlasadh.',
	'TOPICS_MOVED_SUCCESS'	=> 'Tha thu air na cuspairean comharraichte a ghluasad.',
	'TOPICS_RESYNC_SUCCESS'	=> 'Tha thu air na cuspairean comharraichte ath-shioncronachadh.',
	'TOPICS_TYPE_CHANGED'	=> 'Tha thu air seòrsa nan cuspairean comharraichte atharrachadh.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Tha thu air na cuspairean comharraichte fhosgladh.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Tha thu air aontachadh ris a’ chuspair chomharraichte.',
	'TOPIC_DELETED_SUCCESS'	=> 'Tha thu air an cuspair comharraichte a sguabadh às.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Tha thu air easaontachadh ris a’ chuspair chomharraichte.',
	'TOPIC_FORKED_SUCCESS'	=> 'Tha thu air lethbhreac dhen chuspair chomharraichte a dhèanamh.',
	'TOPIC_LOCKED_SUCCESS'	=> 'Tha thu air an cuspair comharraichte a ghlasadh.',
	'TOPIC_MOVED_SUCCESS'	=> 'Tha thu air an cuspair comharraichte a ghluasad.',
	'TOPIC_NOT_EXIST'	=> 'Chan eil an cuspair a thagh thu ann.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Tha thu air an cuspair comharraichte ath-shioncronachadh.',
	'TOPIC_SPLIT_SUCCESS'	=> 'Tha thu air an cuspair comharraichte a roinn.',
	'TOPIC_TIME'	=> 'Ùine a’ cuspair',
	'TOPIC_TYPE_CHANGED'	=> 'Tha thu air seòrsa a’ cuspair comharraichte atharrachadh.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Tha thu air an cuspair comharraichte fhosgladh.',
	'TOTAL_WARNINGS'	=> 'Rabhaidhean gu lèir',
	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Chan eil post a’ feitheamh ri aontachadh.',
		1	=> 'Tha <strong>%d</strong> phost a’ feitheamh ri aontachadh.',
		2	=> 'Tha <strong>%d</strong> phost a’ feitheamh ri aontachadh.',
		3	=> 'Tha <strong>%d</strong> postaichean a’ feitheamh ri aontachadh.',
		4	=> 'Tha <strong>%d</strong> post a’ feitheamh ri aontachadh.',
	),
	'UNLOCK'	=> 'Fosgail',
	'UNLOCK_POST'	=> 'Fosgail post',
	'UNLOCK_POST_EXPLAIN'	=> 'Ceadaich deasachadh',
	'UNLOCK_POST_POST'	=> 'Fosgail post',
	'UNLOCK_POST_POST_CONFIRM'	=> 'An e ’s gu bheil thu airson deasachadh a cheadachadh airson a’ phuist seo?',
	'UNLOCK_POST_POSTS'	=> 'Fosgail na postaichean comharraichte',
	'UNLOCK_POST_POSTS_CONFIRM'	=> 'An e ’s gu bheil thu airson deasachadh a cheadachadh airson nam postaichean comharraichte?',
	'UNLOCK_TOPIC'	=> 'Fosgail cuspair',
	'UNLOCK_TOPIC_CONFIRM'	=> 'An e ’s gu bheil thu airson an cuspair seo fhosgladh?',
	'UNLOCK_TOPICS'	=> 'Fosgail cuspairean comharraichte',
	'UNLOCK_TOPICS_CONFIRM'	=> 'An e ’s gu bheil thu airson na cuspairean comharraichte fhosgladh?',
	'USER_CANNOT_POST'	=> 'Chan urrainn dhut sgrìobhadh san fhòram seo.',
	'USER_CANNOT_REPORT'	=> 'Chan urrainn dhut gearan mu phost a dhèanamh san fhòram seo.',
	'USER_FEEDBACK_ADDED'	=> 'Tha thu air nòta mu bhall a chur ann.',
	'USER_WARNING_ADDED'	=> 'Tha thu air rabhadh a thoirt seachad dhan bhall.',
	'VIEW_DETAILS'	=> 'Fiosrachadh',
	'VIEW_POST'	=> 'Seall am post',
	'WARNED_USERS'	=> 'Buill air an rabhadh',
	'WARNED_USERS_EXPLAIN'	=> 'Seo liosta dhe na bhuill a fhuair rabhadh nach dàinig gu crìch fhathast.',
	'WARNING_PM_BODY'	=> 'Seo rabhadh a thug rianaire no maor an làraich-lìn seo dhut.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Fhuair thu rabhadh',
	'WARNING_POST_DEFAULT'	=> 'Seo rabhadh air sàilleibh nam postaichean a leanas a sgrìobh thu: %s .',
	'YOU_SELECTED_TOPIC'	=> 'Thagh thu an cuspair leis an àireamh %d: %s.',
	'report_reasons'	=> array(
		'TITLE'	=> array(
			'WAREZ'	=> 'Bathar-bog mì-laghail no air a ghoid',
			'SPAM'	=> 'Spama',
			'OFF_TOPIC'	=> 'Air an ràmh chearr',
			'OTHER'	=> 'Eile',
		),
		'DESCRIPTION'	=> array(
			'WAREZ'	=> 'Tha ceanglaichean gu bathar-bog mì-laghail no air a ghoid sa phost seo.',
			'SPAM'	=> 'Chan e ach sanasachd às leth làraich-lìn eile no bathair air choireigin as adhbhar airson a’ phuist seo.',
			'OFF_TOPIC'	=> 'Tha am post seo air an ràmh chearr.',
			'OTHER'	=> 'Tha adhbhar eile ann airson a’ ghearain. Lìonaidh mi am foirm airson barrachd fiosrachaidh.',
		),
	),
));