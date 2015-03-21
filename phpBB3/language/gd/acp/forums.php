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
	'AUTO_PRUNE_DAYS'	=> 'Aois nam post ri an sgudadh gu fèin-obrachail',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'An àireamh de làithean às dèidh a’ phuist mu dheireadh ann an cuspair mus dèid a sgudadh.',
	'AUTO_PRUNE_FREQ'	=> 'Tricead an sgudaidh fhèin-obrachail',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Na làithean eadar tachartasan sgudaidh.',
	'AUTO_PRUNE_VIEWED'	=> 'Aois an t&#8209;seallaidh air post ri an sgudadh gu fèin-obrachail',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'An àireamh de làithean às dèidh an t&#8209;seallaidh mu dheireadh air cuspair mus dèid a sgudadh.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Tricead an sgudaidh fhèin-obrachail air na h-ath-stiùiridhean',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Aois nan ath-stiùiridhean a thèid a sgudadh gu fèin-obrachail',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'An àireamh de làithean mus dèid ath-stiùireadh a thoirt air falbh.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'An àireamh de làithean eadar tachartasan sgudaidh.',
	'CONTINUE'	=> 'Lean air adhart',
	'COPY_PERMISSIONS'	=> 'Dèan lethbhreac dhe na ceadan o',
	'COPY_PERMISSIONS_EXPLAIN'	=> '’S urrainn dhut lethbhreac dhe na ceadan fhaighinn o fhòram a tha ann mar-thà ach am bi suidheachadh nan ceadan nas fhasa airson an fhòraim ùir.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Bidh na h&#8209;aon ceadan aig an fhòram seo ’s a tha aig an fhòram a thaghas tu an-seo nuair a bhios e air a chruthachadh. Mur tagh thu fòram an-seo, cha ghabh am fòram ùr a shealltainn gus an deach na ceadan a shuidheachadh.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Bidh na h&#8209;aon ceadan aig an fhòram seo ’s a tha aig an fhear a thaghas tu an-seo ma chuireas tu romhad lethbhreac de cheadan a dhèanamh. Sgrìobhaidh seo thairis air cead sam bith a shuidhich tu airson an fhòraim seo roimhe leis na ceadan aig an fòram a thaghas tu an-seo. Mur tagh thu fòram, thèid na ceadan làithreach a chumail.',
	'COPY_TO_ACL'	=> '’S urrainn dhut cuideachd %sceadan ùra a shuidheachadh%s airson an fhòraim seo mar roghainn eile.',
	'CREATE_FORUM'	=> 'Cruthaich fòram ùr',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Sguab às an t&#8209;susbaint no gluais gu fòram i',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Sguab às na fo-fhòraman no gluais gu fòram iad',
	'DEFAULT_STYLE'	=> 'Stoidhle ghnàthach',
	'DELETE_ALL_POSTS'	=> 'Sguab às na postaichean',
	'DELETE_SUBFORUMS'	=> 'Sguab às na fo-fhòraman agus postaichean',
	'DISPLAY_ACTIVE_TOPICS'	=> 'Cuir cuspairean beòtha an comas',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Thèid na cuspairean beòtha sna fo-fhòraman a thagh thu a shealltainn fon roinn seo ma chuireas tu an roghainn seo air “Seadh”.',
	'EDIT_FORUM'	=> 'Deasaich am fòram',
	'ENABLE_INDEXING'	=> 'Cuir inneacs luirg an comas',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Thèid na postaichean san fhòram seo a chur ris an inneacs luirg ma chuireas tu an roghainn seo air “Seadh”.',
	'ENABLE_POST_REVIEW'	=> 'Ceadaich ath-sgrùdadh nam post',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Faodaidh na buill na postaichean aca fhèin ath-sgrùdadh ma chaidh postaichean ùra a chur a-null dhan chuspair fhad ’s a bha iad a’ sgrìobhadh ma chuireas tu an roghainn seo air “Seadh”. Bu chòir dhut seo a chur à comas airson fòraman cabadaich.',
	'ENABLE_QUICK_REPLY'	=> 'Cuir freagairt luath an comas',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Cuiridh seo feart nam freagairtean luatha an comas san fhòram seo. Thèid an roghainn seo a leigeil seachad mur an do chuir thu  freagairtean luatha an comas airson a’ bhùird-bhrath san fharsaingeachd. Cha dèid feart nam freagairtean luatha a shealltainn ach do chleachdaichean aig a bheil cead sgrìobhaidh san fhòram seo.',
	'ENABLE_RECENT'	=> 'Seall cuspairean beòtha',
	'ENABLE_RECENT_EXPLAIN'	=> 'Thèid cuspairean san fhòram seo a shealltainn air liosta nan cuspairean beòtha ma chuireas tu an roghainn seo air “Seadh”.',
	'ENABLE_TOPIC_ICONS'	=> 'Cuir ìomhaigheagan cuspair an comas',
	'FORUM_ADMIN'	=> 'Rianachd nam fòraman',
	'FORUM_ADMIN_EXPLAIN'	=> 'Tha a h&#8209;uile rud ann a’ phpBB3 stèidhichte air fòraman. Chan e ach seòrsa sònraichte de dh’fhòram a th’ ann an roinn. Faodaidh tu na thogras tu de fo-fhòraman a chur ri fòram is ’s urrainn dhut cur romhad am faodar postadh ris no nach fhaod (’s e seo a bheil e ’ga ghiùlan fhèin mar roinn no nach eil). ’S urrainn dhut fòraman sònraichte a chur ris, a dheasachadh, a sguabadh às no a ghlasadh an-seo cho math ri rud no dhà a bharrachd a stiùireadh. ’S urrainn dhut fòram ath-shioncronachadh cuideachd ma bhios na postaichean is cuspairean agad air an sioncronachadh a chall. <strong>Feumaidh tu lethbhreac de cheadan a dhèanamh no ceadan iomchaidh a suidheachadh airson fòraman air an ùr-chruthachadh mus dèid an sealltainn.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'Cuir sgudadh fèin-obrachail an comas',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'Sgudaidh seo cuspairean far an fòraim. Suidhich na roghainnean triceid/aoise gu h&#8209;ìosal.',
	'FORUM_CREATED'	=> 'Tha thu air an fhòram a chruthachadh.',
	'FORUM_DATA_NEGATIVE'	=> 'Chan urrainn dha roghainnean sgudaidh a bhith nas lugha na 0.',
	'FORUM_DESC_TOO_LONG'	=> 'Tha tuairisgeul an fhòraim ro fhada. Chan fhaod e a bhith ach gu ruige 4000 caractar.',
	'FORUM_DELETE'	=> 'Sguab às am fòram',
	'FORUM_DELETE_EXPLAIN'	=> 'Faodaidh tu fòram a sguabadh às leis an fhoirm gu h&#8209;ìosal. ’S urrainn dhut taghadh cuideachd càite a chuireas tu na cuspairean (no fòraman) ’na bhroinn ma ghabhas postadh san fhòram.',
	'FORUM_DELETED'	=> 'Tha thu air am fòram a sguabadh às.',
	'FORUM_DESC'	=> 'Tuairisgeul',
	'FORUM_DESC_EXPLAIN'	=> 'Thèid tagaichean HTML sam bith a chuireas tu ann an-seo a shealltainn mar a tha iad.',
	'FORUM_EDIT_EXPLAIN'	=> 'Faodaidh tu am fòram seo a ghnàthachadh leis an fhoirm gu h&#8209;ìosal. Thoir an aire gun stiùirich thu roghainnean na maorsainneachd is cunntadh nam postaichean le ceadan nam fòraman airson gach ball is buidheann.',
	'FORUM_IMAGE'	=> 'Dealbh an fhòraim',
	'FORUM_IMAGE_EXPLAIN'	=> 'Seo slighe dhàimheach ris a’ phasgan freumha aig phpBB airson dealbh a bharrachd a bhios co-cheangailte ris an fhòram seo.',
	'FORUM_IMAGE_NO_EXIST'	=> 'Chan eil dealbh an fhòraim a shònraich thu ann',
	'FORUM_LINK_EXPLAIN'	=> 'An URL slàn (a’ gabhail a-steach a’ phròtacail, ’s e seo: <samp>http://</samp>) dhan ionad-amais dhan a thèid an cleachdaiche a thoirt nuair a bhriogas e air an fhòram seo, m.e.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'	=> 'Tracaich ath-stiùiredhean a’ cheangail',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'Clàraichidh seo dè cho tric ’s a chaidh briogadh air ceangal fòraim.',
	'FORUM_NAME'	=> 'Ainm an fhòraim',
	'FORUM_NAME_EMPTY'	=> 'Feumaidh tu ainm airson an fhòraim seo a chur a-steach.',
	'FORUM_PARENT'	=> 'Fòram pàraint',
	'FORUM_PASSWORD'	=> 'Facal-faire an fhòraim',
	'FORUM_PASSWORD_CONFIRM'	=> 'Dearbhaich facal-faire an fhòraim',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Cha leig thu leas seo a shuidheachadh ach ma chuir thu facal-faire an fhòraim a-steach.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'Suidhichidh seo facal-faire airson an fhòraim seo. Feuch an cleachd thu siostam nan ceadan ’na àite,',
	'FORUM_PASSWORD_UNSET'	=> 'Thoir facal-faire an fhòraim air falbh',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'Cuir cromag an-seo ma tha thu airson facal-faire an fhòraim a thoirt air falbh.',
	'FORUM_PASSWORD_OLD'	=> 'Tha hais aig facal-faire an fhòram a’ cleachdadh seann-dòigh is bu chòir dhut atharrachadh.',
	'FORUM_PASSWORD_MISMATCH'	=> 'Chan eil an dà fhacal-faire a chuir thu a-steach co-ionnann.',
	'FORUM_PRUNE_SETTINGS'	=> 'Roghainnean sgudaidh an fhòraim',
	'FORUM_PRUNE_SHADOW'				=> 'Cuir sgudadh fèin-obrachail nan ath-stiùiridhean an comas',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Sgudaidh seo na h-ath-stiùiridhean san fhòram, suidhich dè cho tric ’s an aois gu h-ìosal.',
	'FORUM_RESYNCED'	=> 'Tha thu air an fhòram “%s” ath-shioncronachadh',
	'FORUM_RULES_EXPLAIN'	=> 'Thèid riaghailtean an fhòraim a shealltainn air gach duilleag am broinn an fhòraim seo.',
	'FORUM_RULES_LINK'	=> 'Ceangail ri riaghailtean an fhòraim',
	'FORUM_RULES_LINK_EXPLAIN'	=> '’S urrainn dhut URL dhan duilleag/post a chur a-steach an-seo sa bheil riaghailtean an fhòraim agad. Tar-àithnidh an roghainn seo teacsa riaghailtean an fhòraim a chuireadh tu ann an-seo.',
	'FORUM_RULES_PREVIEW'	=> 'Ro-shealladh air riaghailtean an fhòraim',
	'FORUM_RULES_TOO_LONG'	=> 'Faodaidh riaghailtean an fhòraim a bhith 4000 caractar air a char as fhaide.',
	'FORUM_SETTINGS'	=> 'Roghainnean an fhòraim',
	'FORUM_STATUS'	=> 'Staid an fhòraim',
	'FORUM_STYLE'	=> 'Stoidhle an fhòraim',
	'FORUM_TOPICS_PAGE'	=> 'Cuspairean air gach duilleag',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'Tar-àithnidh seo a’ bhun-roghainn airson an àireamh de chuspairean air gach duilleag mur e neoni a th’ ann.',
	'FORUM_TYPE'	=> 'Seòrsa an fhòraim',
	'FORUM_UPDATED'	=> 'Tha thu air fiosrachadh an fhòraim ùrachadh.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Tha thu a’ feuchainn ri fòram sa bheil fo-fhòram a thionndadh gu ceangal. Gluais gach fo-fhòram far an fhòraim seo mus lean thu air adhart on nach fhaic thu na fo-fhòraman a bhios co-cheangailte ris an fhòram seo an-dràsta tuilleadh às dèidh am fòram a thionndadh gu ceangal.',
	'GENERAL_FORUM_SETTINGS'	=> 'Roghainnean coitcheann an fhòraim',
	'LINK'	=> 'Ceangal',
	'LIST_INDEX'	=> 'Seall am fo-fhòram air tròir an fhòraim phàraint',
	'LIST_INDEX_EXPLAIN'	=> 'Seallaidh seo am fòram seo air a’ chlàr-innse is air àiteachan eile mar cheangal am broinn treòir fhòraim phàraint ma tha an roghainn “Seall fo-fhòraman san treòir” aig an fhòram phàraint an comas.',
	'LIST_SUBFORUMS'	=> 'Seall fo-fhòraman san treòir',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Seallaidh seo fo-fhòraman an fhòraim seo air a’ chlàr-innse is air àiteachan eile mar cheangal am broinn na treòir ma tha an roghainn “Seall am fo-fhòram air tròir an fhòraim phàraint” aig an fho-fhòram an comas.',
	'LOCKED'	=> 'Glaiste',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Chan fhaodar sgrìobhadh san fhòram a thagh thu gus na postaichean a ghluasad ann. Feuch an tagh thu fòram san fhaodar sgrìobhadh.',
	'MOVE_POSTS_TO'	=> 'Gluais na postaichean gu',
	'MOVE_SUBFORUMS_TO'	=> 'Gluais na fo-fhòraman gu',
	'NO_DESTINATION_FORUM'	=> 'Cha tagh thu fòram dhan a ghluaiseas tu an t&#8209;susbaint.',
	'NO_FORUM_ACTION'	=> 'Cha deach gnìomh a shònrachadh airson na thachras le susbaint an fhòraim.',
	'NO_PARENT'	=> 'Chan eil pàrant ann',
	'NO_PERMISSIONS'	=> 'Na dèan lethbhreac de cheadan',
	'NO_PERMISSION_FORUM_ADD'	=> 'Chan eil cead agad airson fòram a chur ris.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Chan eil cead agad airson fòram a sguabadh às.',
	'PARENT_IS_LINK_FORUM'	=> '’S e ceangal fòraim a tha sa phàrant a thagh thu. Chan urrainn do fhòram eile a bhith am broinn ceangal fòraim ’s mar sin an sònraich thu roinn no fòram mar an fhòram pàraint?',
	'PARENT_NOT_EXIST'	=> 'Chan eil am pàrant ann.',
	'PRUNE_ANNOUNCEMENTS'	=> 'Sgud na brathan',
	'PRUNE_STICKY'	=> 'Sgud na fleodrainnean',
	'PRUNE_OLD_POLLS'	=> 'Sgud seann chunntasan-bheachd',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Bheir seo cuspairean le cunntas-bheachd air falbh anns nach deach a bhòtadh fad “Aois nam post” làithean.',
	'REDIRECT_ACL'	=> '’S urrainn dhut %sceadan a shuidheachadh%s airson an fhòraim seo a-nis.',
	'SYNC_IN_PROGRESS'	=> 'A’ sioncronachadh an fhòraim',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'A’ sioncronachadh nan cuspairean san rainse %1$d/%2$d.',
	'TYPE_CAT'	=> 'Roinn',
	'TYPE_FORUM'	=> 'Fòram',
	'TYPE_LINK'	=> 'Ceangal',
	'UNLOCKED'	=> 'Neo-ghlaiste',
));
