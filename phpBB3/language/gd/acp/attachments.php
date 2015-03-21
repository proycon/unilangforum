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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> '’S urrainn dhut na roghainnean bunasach airson nan ceanglachan is na seòrsaichean sònraichte co-cheangailte riutha a thaghadh an-seo.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> '’S urrainn dhut na buidhnean leudachan agad a chur ris, a sguabadh às , atharrachadh no a chur à comas an-seo. Mar roghainnean a bharrachd, ’s urrainn dhut seòrsa sònraichte a thaghadh dhaibh, an dòigh luchdaidh a-nuas atharrachadh is ìomhaigh luchdaidh suas a shònrachadh a thèid a shealltainn air beulaibh gach ceanglachain a bhuineas dhan bhuidheann.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> '’S urrainn na buidhnean leudachan a bhios ceadaichte a stiùireadh an-seo. Seall air “Gnìomhan nam buidhnean leudachain” gus na leudachain agad a ghnìomhachadh. Mholamaid gum bi thu faiceallach is nach ceadaich thu leudachain sgriobtaidh (mar <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> agus mar sin air adhart …).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Chì thu faidhlichean dìlleachdain an seo. Nochdaidh na faidhlichean seo gu h&#8209;àraidh nuair a luchdaicheas ball faidhle suas gun a bhith a’ cur am post ann. ’S urrainn dhut sguabadh às dha na faidhlichean air neo an cur ri post a tha ann mu thràth. Gus faidhle a chur na cheanglachan ri post, feumaidh tu fhèin faighinn a-mach an toiseach dè an àireamh aithne a th’ air a’ phost. ’S urrainn dhut sònrachadh an uairsin gu buin am faidhle ris a phost seo. Cha leig thu leas a luchdadh suas a-rithist air a shon.',
	'ADD_EXTENSION'	=> 'Cuir leudachan ris',
	'ADD_EXTENSION_GROUP'	=> 'Cuir buidheann leudachain ris',
	'ADMIN_UPLOAD_ERROR'	=> 'Tachair mearachd nuair a dh’fheuch thu am faidhle a chur ris na cheanglachan: “%s”.',
	'ALLOWED_FORUMS'	=> 'Ceadaichte ann am fòraman',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'Faodaidh buill leudachain a chur ri post sna fòraman comharraichte (no sna h&#8209;uile ma thaghas tu seo).',
	'ALLOWED_IN_PM_POST'	=> 'Ceadaichte',
	'ALLOW_ATTACHMENTS'	=> 'Ceadaich ceanglachain',
	'ALLOW_ALL_FORUMS'	=> 'Ceadaich sna h&#8209;uile fòram',
	'ALLOW_IN_PM'	=> 'Ceadaich ann an teachdaireachdan phearsanta',
	'ALLOW_PM_ATTACHMENTS'	=> 'Ceadaich ceanglachain ann an teachdaireachdan phearsanta',
	'ALLOW_SELECTED_FORUMS'	=> 'An fheadhainn comharraichte gu h&#8209;ìosal a-mhàin',
	'ASSIGNED_EXTENSIONS'	=> 'Leudachain sa bhuidheann seo',
	'ASSIGNED_GROUP'	=> 'Buidheann leudachan a’ cheanglachain',
	'ATTACH_EXTENSIONS_URL'	=> 'Leudachain',
	'ATTACH_EXT_GROUPS_URL'	=> 'Buidhnean leudachan',
	'ATTACH_ID'	=> 'Àireamh aithne',
	'ATTACH_MAX_FILESIZE'	=> 'Meud nam faidhlichean a bu mhotha',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'Am meud a bu mhotha aig gach faidhle. Ma chuireas tu 0 a-steach, cha dèid meud nam faidhlichean gan luchdadh suas a chuingealachadh ach leis an rèiteachadh PHP agad.',
	'ATTACH_MAX_PM_FILESIZE'	=> 'Meud nam faidhlichean a bu mhotha ann an teachdaireachdan pearsanta',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Am meud a bu mhotha aig gach faidhle ann an teachdaireachdan pearsanta. Ma chuireas tu 0 a-steach, cha dèid meud nam faidhlichean gan luchdadh suas a chuingealachadh ach leis an rèiteachadh PHP agad.',
	'ATTACH_ORPHAN_URL'	=> 'Ceanglachanan dìlleachdain',
	'ATTACH_POST_ID'	=> 'Àireamh aithne a’ phuist',
	'ATTACH_POST_TYPE'					=> 'Seòrsa a’ phuist',
	'ATTACH_QUOTA'	=> 'Cuota airson ceanglachain gu lèir',
	'ATTACH_QUOTA_EXPLAIN'	=> 'Àite as motha air an diosg airson ceanglachain a tha ri fhaighinn air a’ bhòrd-bhrath gu lèir, le 0 gun chuingealachadh.',
	'ATTACH_TO_POST'	=> 'Cuir faidhle na cheanglachan ri post',
	'CAT_FLASH_FILES'	=> 'Faidhlichean Flash',
	'CAT_IMAGES'	=> 'Dealbhan',
	'CAT_QUICKTIME_FILES'	=> 'Faidhlichean meadhan Quicktime',
	'CAT_RM_FILES'	=> 'Faidhlichean meadhan RealMedia',
	'CAT_WM_FILES'	=> 'Faidhlichean meadhan Windows Media',
	'CHECK_CONTENT'	=> 'Dearbhaich faidhlichean ceanglachain',
	'CHECK_CONTENT_EXPLAIN'	=> 'Gabh cuid de na bharbhsairean mealladh gus an gabh iad ri seòrsa Mime cearr airson faidhlichean a chaidh a luchdadh suas. Nì an roghainn seo cinnteach nach dèid faidhlichean mar sin a chur ann.',
	'CREATE_GROUP'	=> 'Cruthaich buidheann ùr',
	'CREATE_THUMBNAIL'	=> 'Cruthaich meanbh-dhealbh',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Cruthaich meanbh-dhealbh sna h&#8209;uile suidheachadh so-dhèanta.',
	'DEFINE_ALLOWED_IPS'	=> 'Sònraich IPan/ainmean-òstair ceadaichte',
	'DEFINE_DISALLOWED_IPS'	=> 'Sònraich neo-cheadaichte',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'Gus iomadh seòladh IP no ainm-òstair a shònrachadh, sgrìobh gach fear ann an loidhne ùr. Gus freagairt ri raon seòlaidhean IP, sgar an toiseach is a’ chrìoch le tathan (-) agus cleachd * mar shaorag.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Cleachd an luchag is meur-chlàir an dòigh iomachaidh airson a’ choimpiutair is brabhsair agad gus iomadh seòladh IP a thoirt far an liosta (no ceadachadh a-rithist) aig an aon àm. Tha cuideam air na IPan nach eil ceadaichte.',
	'DISPLAY_INLINED'	=> 'Seall dealbhan am broinn na teachdaireachd',
	'DISPLAY_INLINED_EXPLAIN'	=> 'Ma thaghas tu “Chan eadh”, nochdaidh na dealbhan mar cheanglaichean.',
	'DISPLAY_ORDER'	=> 'Òrdugh sealladh nan ceanglachan',
	'DISPLAY_ORDER_EXPLAIN'	=> 'Seòrsaich na ceanglachain a-rèir ama.',
	'EDIT_EXTENSION_GROUP'	=> 'Deasaich buidheann leudachan',
	'EXCLUDE_ENTERED_IP'	=> 'Tagh “Seadh” gus na IPan/ainmean-òstair a shònraich thu a chur ris an fheadhainn nach eil ceadaichte.',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'Cuir ri liosta nan IPan/ainmean-òstair nach eil ceadaichte.',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Cuir ri liosta nan IPan/ainmean-òstair a tha ceadaichte.',
	'EXTENSIONS_UPDATED'	=> 'Tha na leudachain air an ùrachadh',
	'EXTENSION_EXIST'	=> 'Tha an leudachan %s ann mar-thà.',
	'EXTENSION_GROUP'	=> 'Buidheann leudachan',
	'EXTENSION_GROUPS'	=> 'Buidhnean leudachan',
	'EXTENSION_GROUP_DELETED'	=> 'Tha am buidheann leudachan air a sguabadh às.',
	'EXTENSION_GROUP_EXIST'	=> 'Tha am buidheann leudachan %s ann mar-thà.',
	'EXT_GROUP_ARCHIVES'	=> 'Tasglannan',
	'EXT_GROUP_DOCUMENTS'	=> 'Sgrìobhainnean',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Faidhlichean ri an luchdadh a-nuas',
	'EXT_GROUP_FLASH_FILES'	=> 'Faidhlichean Flash',
	'EXT_GROUP_IMAGES'	=> 'Dealbhan',
	'EXT_GROUP_PLAIN_TEXT'	=> 'Teacsa lom',
	'EXT_GROUP_QUICKTIME_MEDIA'	=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'	=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'	=> 'Windows Media',
	'FILES_GONE'			=> 'Chan eil cuid dhe na ceanglachain ann a thagh thu airson sguabadh às. Dh’fhaoidte gun deach an sguabadh às mar-thà. Chaidh na ceanglachain a bha ann a sguabadh às.',
	'FILES_STATS_WRONG'		=> 'Chan eil stadastaireachd nam faidhle agad  pongail agus tha i feumach air sioncronachadh às ùr.  Na fìor-luachan: uiread de cheanglachain = %1$d, meud iomlan nan ceanglachan = %2$s.<br />Briog %3$san-seo%4$s gus an sioncronachadh às ùr.',
	'GO_TO_EXTENSIONS'	=> 'Gnìomhan nam buidhnean leudachan',
	'GROUP_NAME'	=> 'Ainm a’ bhuidhinn',
	'IMAGE_LINK_SIZE'	=> 'Meud airson dealbh ’na cheangal',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Seall ceanglachan deilbh ’na cheangail teacsa nuair a bhios dimeinseanan an deilbh nas motha na seo. Cuir a-steach 0px x 0px ma tha thu airson am feart seo a chur à comas.',
	'IMAGICK_PATH'	=> 'Slighe Imagemagick',
	'IMAGICK_PATH_EXPLAIN'	=> 'Slighe shlàn gu prògram iompachaidh imagemagick, m.e. <samp>/usr/bin/</samp>.',
	'MAX_ATTACHMENTS'	=> 'Uiread as motha de cheanglachain ann am post',
	'MAX_ATTACHMENTS_PM'	=> 'Uiread as motha de cheanglachain ann an teachdaireachd phearsanta',
	'MAX_EXTGROUP_FILESIZE'	=> 'Meud faidhle as motha',
	'MAX_IMAGE_SIZE'	=> 'Meud deilbh as motha',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'Dimeinseanan as motha aig ceanglachan deilbh. Suidhich an dà àireamh air 0px is 0px gus dearbhadh a’ meud a chur à comas',
	'MAX_THUMB_WIDTH'	=> 'Meud dealbhaig as motha ann am piogsailean',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'Cha dèid dealbhagan a ghintinn le leud nas motha na shuidhicheas tu an-seo.',
	'MIN_THUMB_FILESIZE'	=> 'Meud dealbhaig as lugha',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Na cruthaich dealbhag airson dealbhan a tha nas lugha na seo.',
	'MODE_INLINE'	=> 'Am broinn na teachdaireachd',
	'MODE_PHYSICAL'	=> 'Fiosaigeach',
	'NOT_ALLOWED_IN_PM'	=> 'Ceadaichte ann am postaichean a-mhàin',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Gun chead',
	'NOT_ASSIGNED'	=> 'Gun sònrachadh',
	'NO_ATTACHMENTS'			=> 'Cha deach ceanglachan a lorg airson an ùine seo.',
	'NO_EXT_GROUP'	=> 'Gun seòrsa sònraichte',
	'NO_EXT_GROUP_NAME'	=> 'Cha deach ainm a’ bhuidhinn a shònrachadh',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Cha deach buidheann leudachan a shònrachadh.',
	'NO_FILE_CAT'	=> 'Gun seòrsa sònraichte',
	'NO_IMAGE'	=> 'Gun dealbh',
	'NO_THUMBNAIL_SUPPORT'	=> 'Tha taic do dealbhagan à comas. Tha an tuilleadan GD air neo imagemagick a dhìth ort gus am feart seo a chur an cèill. Cha deach gin dhiubh a lorg.',
	'NO_UPLOAD_DIR'	=> 'Chan eil am pasgan luchdaidh suas a shònraich tu ann.',
	'NO_WRITE_UPLOAD'	=> 'Cha ghabh sgrìobhadh sa phasgan luchdaidh suas a shònraich thu. Atharraich ceadan a’ phasgain ach am faod am frithealaiche sgrìobhadh ann.',
	'ONLY_ALLOWED_IN_PM'	=> 'Gun chead ach ann an teachdaireachdan pearsanta',
	'ORDER_ALLOW_DENY'	=> 'Ceadaich',
	'ORDER_DENY_ALLOW'	=> 'Diùlt',
	'REMOVE_ALLOWED_IPS'	=> 'Sguab às no dì-bhac IPan/ainmean-òstair<em>ceadaichte</em>',
	'REMOVE_DISALLOWED_IPS'	=> 'Sguab às no dì-bhac IPan/ainmean-òstair<em>neo-cheadaichte</em>',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'An e ’s gu bheil thu airson stadastaireachd nam faidhle a shioncronachadh às ùr?',
	'SEARCH_IMAGICK'	=> 'Lorg Imagemagick',
	'SECURE_ALLOW_DENY'	=> 'Liosta an fheadhainn ceadaichte/neo-cheadaichte',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'Atharraich an giùlan bunaiteach air liosta an fheadhainn ceadaichte/neo-cheadaichte gu <strong>geal-liosta</strong> (ceadaichte) no <strong>dubh-liosta</strong> (neo-cheadaichte) nuair a bhios an luchdadh a-nuas tèarainte an comas.',
	'SECURE_DOWNLOADS'	=> 'Cuir an luchdadh a-nuas tèarainte an comas',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'Nuair a bhios an roghainn seo air, bidh luchdadh a-nuas cuingichte leis na IPan/ainmean-òstair a shònraicheas tu.',
	'SECURE_DOWNLOAD_NOTICE'	=> 'Chan eil luchdadh a-nuas tèarainte an comas. Thèid na roghainnean gu h&#8209;ìosal a chur an sàs nuair a chuireas tu an luchdadh a-nuas tèarainte an comas.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'Tha liosta nan IPan air a h&#8209;ùrachadh.',
	'SECURE_EMPTY_REFERRER'	=> 'Ceadaich referer falamh',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Tha an luchdadh a-nuas tèarainte stèidhichte air referers. An e ’s gu bheil thu airson luchdadh a-nuas a cheadachadh don fheadhainn a dh’fhàgas a-mach an referer?',
	'SETTINGS_CAT_IMAGES'	=> 'Roghainnean seòrsaichean nan dealbh',
	'SPECIAL_CATEGORY'	=> 'Seòrsa sònraichte',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'Thèid gach seòrsa sònraichte a shealltainn ann am postaichean ann an dòigh diofraichte.',
	'SUCCESSFULLY_UPLOADED'	=> 'Air a luchdadh suas gu soirbheachail.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Tha thu air buidheann leudachan a chur ris.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Tha thu air buidheann leudachan ùrachadh.',
	'UPLOADING_FILES'	=> 'A’ luchdadh suas faidhlichean',
	'UPLOADING_FILE_TO'	=> 'A’ luchdadh suas faidhle “%1$s” dhan phost leis an aithnichear %2$d…',
	'UPLOAD_DENIED_FORUM'	=> 'Chan fhaod thu faidhlichean a luchdadh suas dhan fhòram “%s”.',
	'UPLOAD_DIR'	=> 'Pasgan luchdaidh suas',
	'UPLOAD_DIR_EXPLAIN'	=> 'Pasgan sàbhalaidh airson nan ceanglachan. Thoir an aire gum feum thu fhèin faidhle sam bith a chaidh luchdadh suas mar-thà a ghluasad dhan phasgan ùr.',
	'UPLOAD_ICON'	=> 'Ìomhaigheag luchdaidh suas',
	'UPLOAD_NOT_DIR'	=> 'Than eil coltas pasgain air an ionad a shònraich thu mar cheann-uidhe luchdaidh suas.',
));
