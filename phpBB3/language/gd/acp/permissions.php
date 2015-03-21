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
	'ACP_PERMISSIONS_EXPLAIN'	=> '<p>Tha iomadh roghainn mhionaideach aig na ceadan ’s tha sinn ’gan seòrsachadh ann an ceithir mòr-earrannan ’s seo iad:</p>



<h2>Ceadan uile-choitcheann</h2>

<p>Cleachdaidh tu na ceadan seo gus inntrigeadh a stiùireadh air ìre uile-choitcheann is thèid an cur an sàs air feadh a’ bhùird-bhrath. Seo na fo-errannan a th’ aca: Ceadan nam ball, Ceadan nam buidhnean, Rianairean is Maoir uile-choitcheann.</p>



<h2>Ceadan nam fòraman</h2>

<p>Cleachdaidh tu na ceadan seo gus inntrigeadh do gach fòram a stiùireadh fa leth. Seo na fo-errannan a th’ aca: Ceadan nam fòraman, Maoir nam fòraman, Ceadan fòraim nam ball is Ceadan fòraim nam buidhnean.</p>

		

<h2>Ùghdarrasan nan ceadan</h2>

<p>Cleachdaidh tu ùghdarrasan gus diofar sheataichean de cheadan a chruthachadh as urrainn dhut a chur an sàs gu luath an uairsin. Tha sinn an dùil gum foghainn na h&#8209;ùghdarrasan a chruthaich sinn o thùs gus gach seòrsa bùird-bhrath a stiùireadh, ge b’ e beag no mòr e. Faodaidh tu ùghdarrasan a chur ris, a deasachadh no a sguabadh às mar a thogras tu co-dhiù.</p>



<h2>Masgan nan ceadan</h2>

<p>Cha b’ urrainn dhut na masgan a chleachdadh gus sùil a thoirt air na ceadan a chaidh a chur an sàs do bhuill, maoir (ionadail is uile-choitcheann), rianairean no fòraman.</p>



<br />



<p>Ma tha barrachd fiosrachaidh a dhìth ort mu rèiteachadh is stiùireadh nan ceadan air a’ bhòrd-bhrath phpBB3 agad, tadhail air <a href="https://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Chapter 1.5 of our Quick Start Guide</a>.</p>',
	'ACL_NEVER'	=> 'Chan fhaod idir',
	'ACL_SET'	=> 'A’ suidheachadh ceadan',
	'ACL_SET_EXPLAIN'	=> 'Tha ceadan stèidhichte air siostam simplidh <strong>FAODAIDH</strong>/<strong>CHAN FHAOD</strong>. Thèid luach sam bith eile airson roghainn a thar-àithneadh airson ball no buidheann ma shuidhicheas tu i air <strong>CHAN FHAOD IDIR</strong>. Tagh <strong>CHAN FHAOD</strong> mur eil thu airson luach a sònrachadh airson roghainn airson a’ bhuill no bhuidhinn seo. Ma tha thu a’ sònrachadh luachan airson na roghainn seo àiteigin eile, ’s e an luach ud a thèid a chleachdadh; mur eil, thèid <strong>CHAN FHAOD IDIR</strong> a chleachdadh ’na àite. Thèid gach oibseact le comharra (sa bhogsa-chromaige a tha romhpa) a shuidheachadh air lethbhreac de sheata nan ceadan a mhìnich thu.',
	'ACL_SETTING'	=> 'Roghainn',
	'ACL_TYPE_A_'	=> 'Ceadan rianachd',
	'ACL_TYPE_F_'	=> 'Ceadan fhòraman',
	'ACL_TYPE_M_'	=> 'Ceadan maorsainneachd',
	'ACL_TYPE_U_'	=> 'Ceadan buill',
	'ACL_TYPE_GLOBAL_A_'	=> 'Ceadan rianachd',
	'ACL_TYPE_GLOBAL_U_'	=> 'Ceadan buill',
	'ACL_TYPE_GLOBAL_M_'	=> 'Ceadan maorsainneachd uile-choitchinn',
	'ACL_TYPE_LOCAL_M_'	=> 'Ceadan maorsainneachd fhòraman',
	'ACL_TYPE_LOCAL_F_'	=> 'Ceadan fhòraman',
	'ACL_NO'	=> 'Chan fhaod',
	'ACL_VIEW'	=> 'A’ sealltainn air na ceadan',
	'ACL_VIEW_EXPLAIN'	=> 'Chì thu na ceadan a tha ’gan cur an sàs dhan bhall no bhuidheann an-seo. Seallaidh ceàrnag dhearg nach eil an cead aig a’ bhall no bhuidheann is tè uaine ’s ann gu bheil an cead aig a’ bhall no bhuidheann.',
	'ACL_YES'	=> 'Faodaidh',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> '’S urrainn dhut ceadan rianachd a thoirt do bhuill no buidhnean an-seo. Faodaidh gach ball aig a bheil ceadan rianachd “Gnìomhan nan rianairean” inntrigeadh.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> '’S urrainn dhut buill is buidhnean a shònrachadh mar maoir aig fòraman an-seo. Cleachd an duilleag iomchaidh gus inntrigeadh nam ball do dh’fhòraman, ceadan maorsainneachd uile-choitchinn no rianairean a shònrachadh.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> '’S urrainn dhut atharrachadh airson gach fòraim fa leth cò na buill is buidhnean a dh’fhaodas inntrigeadh an-seo. Cleachd an duilleag iomchaidh gus maoir no rianairean a shònrachadh.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'	=> '’S urrainn dhut lethbhreac dhe na ceadan aig an dàrna fòram a chur an sàs air an fhòram eile an-seo.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> '’S urrainn dhut ceadan maorsainneachd uile-choitchinn a shònrachadh do bhuill no buidhnean an-seo. Tha na maoir ud mar mhaoir àbhaisteach ach faodaidh iad maorsainneachd a dhèanamh air na h&#8209;uile fòram air a’ bhòrd agad.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> '’S urrainn dhut ceadan fòraim a shònrachadh do bhuidhnean an-seo.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> '’S urrainn dhut ceadan uile-choitcheann a shònrachadh do bhuidhnean an-seo – ceadan buill, maorsainneachd uile-choitchinn is rianachd. Gabhaidh ceadan buill comasan a-steach mar cleachdadh avataran, cur theachdaireachdan pearsanta agus msaa.; gabhaidh ceadan maorsainneachd uile-choitchinn comasan a-steach mar aontachadh ri postaichean, stiùireadh nan cuspairean, stiùireadh an toirmisg agus msaa. ’s gabhaidh ceadan rianachd comasan a-steach mar atharrachadh nan ceadan, mìneachadh thagaichean BBCode gnàthaichte, stiùireadh nam fòraman agus msaa. Cha bu chòir dhut na ceadan aig ball sònraichte atharrachadh fa leth ach ainneamh, ’s fheairrde thu na buill a chur ann am buidhnean is ceadan nam buidhnean a shònrachadh.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> '’S urrainn dhut na h&#8209;ùghdarrasan airson ceadan rianachd a stiùireadh an-seo. ’S e ceadan a tha ’gan cur an sàs a tha sna h&#8209;ùghdarrasan, mar sin thèid ceadan aig na nithean aig a bheil ùghdarras atharrachadh cuideachd ma dh’atharraicheas tu an t&#8209;ùghdarras.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> '’S urrainn dhut na h&#8209;ùghdarrasan airson ceadan fòraim a stiùireadh an-seo. ’S e ceadan  a tha ’gan cur an sàs a tha sna h&#8209;ùghdarrasan, mar sin thèid ceadan aig na nithean aig a bheil ùghdarras atharrachadh cuideachd ma dh’atharraicheas tu an t&#8209;ùghdarras.',
	'ACP_MOD_ROLES_EXPLAIN'	=> '’S urrainn dhut na h&#8209;ùghdarrasan airson ceadan maorsainneachd a stiùireadh an-seo. ’S e ceadan  a tha ’gan cur an sàs a tha sna h&#8209;ùghdarrasan, mar sin thèid ceadan aig na nithean aig a bheil ùghdarras atharrachadh cuideachd ma dh’atharraicheas tu an t&#8209;ùghdarras.',
	'ACP_USER_ROLES_EXPLAIN'	=> '’S urrainn dhut na h&#8209;ùghdarrasan airson ceadan buill a stiùireadh an-seo. ’S e ceadan  a tha ’gan cur an sàs a tha sna h&#8209;ùghdarrasan, mar sin thèid ceadan aig na nithean aig a bheil ùghdarras atharrachadh cuideachd ma dh’atharraicheas tu an t&#8209;ùghdarras.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> '’S urrainn dhut ceadan fòraim a shònrachadh do bhuill an-seo.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> '’S urrainn dhut ceadan uile-choitcheann a shònrachadh do bhuill an-seo – ceadan buill, maorsainneachd uile-choitchinn is rianachd. Gabhaidh ceadan buill comasan a-steach mar cleachdadh avataran, cur theachdaireachdan pearsanta agus msaa.; gabhaidh ceadan maorsainneachd uile-choitchinn comasan a-steach mar aontachadh ri postaichean, stiùireadh nan cuspairean, stiùireadh an toirmisg agus msaa. ’s gabhaidh ceadan rianachd comasan a-steach mar atharrachadh nan ceadan, mìneachadh thagaichean BBCode gnàthaichte, stiùireadh nam fòraman agus msaa. Feuch an cleachd thu siostam ceadan nam buidhnean gus na roghainnean seo atharrachadh airson uiread mhòr de chleachdaichean. Cha bu chòir dhut na ceadan aig ball sònraichte atharrachadh fa leth ach ainneamh, ’s fheairrde thu na buill a chur ann am buidhnean is ceadan nam buidhnean a shònrachadh.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Chì thu na ceadan rianachd a tha ’gan cur an sàs dhan bhall no bhuidheann a thagh thu an-seo.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Chì thu na ceadan maorsainneachd uile-choitchinn a tha ’gan cur an sàs dhan bhall no bhuidheann a thagh thu an-seo.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Chì thu na ceadan fòraim a tha ’gan cur an sàs dhan bhall no bhuidheann a thagh thu an-seo.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Chì thu na ceadan maorsainneachd fòraim a tha ’gan cur an sàs dhan bhall no bhuidheann a thagh thu an-seo.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Chì thu na ceadan buill a tha ’gan cur an sàs dhan bhall no bhuidheann a thagh thu an-seo.',
	'ADD_GROUPS'	=> 'Cuir buidhnean ris',
	'ADD_PERMISSIONS'	=> 'Cuir ceadan ris',
	'ADD_USERS'	=> 'Cuir buill ris',
	'ADVANCED_PERMISSIONS'	=> 'Ceadan adhartach',
	'ALL_GROUPS'	=> 'Tagh na h&#8209;uile buidheann',
	'ALL_NEVER'	=> '<strong>CHAN FHAOD IDIR</strong> air fheadh',
	'ALL_NO'	=> '<strong>CHAN FHAOD</strong> air fheadh',
	'ALL_USERS'	=> 'Tagh na h&#8209;uile ball',
	'ALL_YES'	=> '<strong>FAODAIDH</strong> air fheadh',
	'APPLY_ALL_PERMISSIONS'	=> 'Cuir na h&#8209;uile cead an sàs',
	'APPLY_PERMISSIONS'	=> 'Cuir na ceadan an sàs',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Cha dèid na ceadan is an t&#8209;ùghdarras a mhìnich thu airson an nì seo a chur an sàs air an nì seo is air a h&#8209;uile nì a chomharraich thu.',
	'AUTH_UPDATED'	=> 'Tha thu air na ceadan ùrachadh.',
	'COPY_PERMISSIONS_CONFIRM'	=> 'An e ’s gu bheil thu airson seo a dhèanamh? Thoir an aire gun sgrìobh seo thairis air gach cead a tha ann mar-thà air na nithean a thagh thu.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Am fòram tùsail ’s tu airson lethbhreac dhe na ceadan aige a dhèanamh.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'	=> 'Am fòram-uidhe ’s tu airson lethbhreac dhe na ceadan a chur an sàs air.',
	'COPY_PERMISSIONS_FROM'	=> 'Dèan lethbhreac dhe na ceadan o',
	'COPY_PERMISSIONS_TO'	=> 'Cuir na ceadan an sàs air',
	'CREATE_ROLE'	=> 'Cruthaich ùghdarras',
	'CREATE_ROLE_FROM'	=> 'Cleachd na roghainnean o…',
	'CUSTOM'	=> 'Gnàthaichte…',
	'DEFAULT'	=> 'Bun-roghainn',
	'DELETE_ROLE'	=> 'Sguab às an t&#8209;ùghdarras',
	'DELETE_ROLE_CONFIRM'	=> 'An e ’s gu bheil thu airson an t&#8209;ùghdarras seo a thoirt air falbh? Thoir an aire <strong>nach caill</strong> na nithean aig a bheil an t&#8209;ùghdarras seo roghainnean nan ceadan ca.',
	'DISPLAY_ROLE_ITEMS'	=> 'Seall na nithean a chleachdas an t&#8209;ùghdarras seo',
	'EDIT_PERMISSIONS'	=> 'Deasaich na ceadan',
	'EDIT_ROLE'	=> 'Deasaich an t&#8209;ùghdarras',
	'GROUPS_NOT_ASSIGNED'	=> 'Cha deach an t&#8209;ùghdarras seo a shònrachadh do bhuidheann sam bith',
	'LOOK_UP_GROUP'	=> 'Lorg buidheann',
	'LOOK_UP_USER'	=> 'Lorg ball',
	'MANAGE_GROUPS'	=> 'Stiùirich buidhnean',
	'MANAGE_USERS'	=> 'Stiùirich buill',
	'NO_AUTH_SETTING_FOUND'	=> 'Cha deach roghainnean nan ceadan a mhìneachadh.',
	'NO_ROLE_ASSIGNED'	=> 'Cha deach ùghdarras a shònrachadh…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Cha dèid na ceadan air an taobh deas atharrachadh m thaghas tu an t&#8209;ùghdarras seo. Bh chòir dhut an ceangal “<strong>CHAN FHAOD IDIR</strong> air fheadh” a chleachdadh ma tha thu airson gach cead a neo-shuidheachadh/a thoirt air falbh.',
	'NO_ROLE_AVAILABLE'	=> 'Chan eil ùghdarras ri làimh',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Thoir ainm air an ùghdarras seo.',
	'NO_ROLE_SELECTED'	=> 'Cha deach an t&#8209;ùghdarras a lorg.',
	'NO_USER_GROUP_SELECTED'	=> 'Cha do thagh thu ball no buidheann.',
	'ONLY_FORUM_DEFINED'	=> 'Cha do mhìnich thu ach fòraman san taghadh agad. Feuch an tagh thu ball no buidheann cuideachd.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Thèid na ceadan is an t&#8209;ùghdarras a chur an sàs air gach nì a chuir thu cromag ris cuideachd',
	'PLUS_SUBFORUMS'	=> '+Fo-fhòraman',
	'REMOVE_PERMISSIONS'	=> 'Thoir na ceadan air falbh',
	'REMOVE_ROLE'	=> 'Thoir an t&#8209;ùghdarras air falbh',
	'RESULTING_PERMISSION'	=> 'An cead-toraidh',
	'ROLE'	=> 'Ùghdarras',
	'ROLE_ADD_SUCCESS'	=> 'Tha thu air an t&#8209;ùghdarras a chur ris.',
	'ROLE_ASSIGNED_TO'	=> 'Buill/Buidhnean air an sònrachadh do %s',
	'ROLE_DELETED'	=> 'Tha thu air an t&#8209;ùghdarras a thoirt air falbh.',
	'ROLE_DESCRIPTION'	=> 'Tuairisgeul an ùghdarrais',
	'ROLE_ADMIN_FORUM'	=> 'Rianaire fòraim',
	'ROLE_ADMIN_FULL'	=> 'Rianaire slàn',
	'ROLE_ADMIN_STANDARD'	=> 'Rianaire àbhaisteach',
	'ROLE_ADMIN_USERGROUP'	=> 'Rianaire bhall ’s bhuidhnean',
	'ROLE_FORUM_BOT'	=> 'Inntrigeadh bot',
	'ROLE_FORUM_FULL'	=> 'Inntrigeadh slàn',
	'ROLE_FORUM_LIMITED'	=> 'Inntrigeadh cuingichte',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Inntrigeadh cuingichte ⁊ cunntasan-bheachd',
	'ROLE_FORUM_NOACCESS'	=> 'Gun inntrigeadh',
	'ROLE_FORUM_ONQUEUE'	=> 'Air a’ chiudha maorsainneachd',
	'ROLE_FORUM_POLLS'	=> 'Inntrigeadh àbhaisteach ⁊ cunntasan-bheachd',
	'ROLE_FORUM_READONLY'	=> 'Inntrigeadh leughaidh a-mhàin',
	'ROLE_FORUM_STANDARD'	=> 'Inntrigeadh àbhaisteach',
	'ROLE_FORUM_NEW_MEMBER'	=> 'Inntrigeadh nam ball ùra',
	'ROLE_MOD_FULL'	=> 'Maor slàn',
	'ROLE_MOD_QUEUE'	=> 'Maor ciudha',
	'ROLE_MOD_SIMPLE'	=> 'Maor simplidh',
	'ROLE_MOD_STANDARD'	=> 'Maor àbhaisteach',
	'ROLE_USER_FULL'	=> 'Na h&#8209;uile feart',
	'ROLE_USER_LIMITED'	=> 'Feartan cuingichte',
	'ROLE_USER_NOAVATAR'	=> 'Gun avatar',
	'ROLE_USER_NOPM'	=> 'Gun teachdaireachdan prìobhaideach',
	'ROLE_USER_STANDARD'	=> 'Feartan àbhaisteach',
	'ROLE_USER_NEW_MEMBER'	=> 'Feartan nam ball ùra',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Faodar stiùireadh ’s roghainnean ceadan nam fòraman inntrigeadh.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Faodar gach foincsean rianachd aig a’ bhòrd seo inntrigeadh.<br />Cha mholamaid seo.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Faodar a’ mhòrchuid dhe na feartan rianachd inntrigeadh ach chan faodar innealan co-cheangailte ris an fhrithealaiche no an t&#8209;siostam a chleachdadh.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Faodar buidhnean is buill a stiùireadh: ’s urrainnear ceadan ’s roghainnean atharrachadh agus an toirmeasg ’s na rangan a stiùireadh.',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'Mholamaid an t&#8209;ùghdarras seo airson botaichean is damhain-allaidh luirg.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Faodar gach feart fòraim a chleachdadh, a’ gabhail a-steach postadh bhrathan is fhleodrainnean. Faodar an t&#8209;eadaramh tuile a leigeil seachad cuideachd.<br />Cha mholamaid seo airson buill abhaisteach.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Faodar cuid a dh’fheartan fòraim a chleachdadh ach chan fhaodar ceanglachain a chur ris no ìomhaigheagan puist a chleachdadh.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Mar an t&#8209;inntrigeadh cuingichte ach faodar cunntasan-bheachd a chruthachadh cuideachd.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Chan fhaodar am fòram a shealltainn no inntrigeadh.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Faodar a’ mhòrchuid a dh’fheartan fòraim a chleachdadh a’ gabhail a-steach ceanglachain, ach feumaidh maor aontachadh ris na postaichean is cuspairean.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Mar an t&#8209;inntrigeadh àbhaisteach ach faodar cunntasan-bheachd a chruthachadh cuideachd.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Faodar am fòram a leughadh ach chan faodar cuspairean ùra a chruthachadh no postaichean a sgrìobhadh.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Faodar a’ mhòrchuid a dh’fheartan fòraim a chleachdadh a’ gabhail a-steach ceanglachain is sguabadh às chuspairean aige fhèin, ach chan fhaodar cuspairean aige fhèin a ghlasadh no cunntasan-bheachd a chruthachadh.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'	=> 'Seo an t&#8209;ùghdarras airson buill air an ùr-chlàradh a tha sa bhuidheann “Buill ùra”. Tha roghainnean cheadan <strong>CHAN FHAOD IDIR</strong> ann gus feartan a glasadh do bhuill ùra.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Faodar gach feart maorsainneachd a chleachdadh, a’ gabhail a-steach an toirmeasg.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Chan fhaodar ach ciudha nam maor a chleachdadh gus postaichean a dhearbhadh is a dheasachadh.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Chan fhaodar ach gnìomhan cuspair bunasach a chleachdadh. Chan fhaodar rabhaidhean a thoirt seachad no ciudha nam maor a chleachdadh.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Faodar a’ mhòrchuid a dh’innealan maorsainneachd a cleachdadh ach chan fhaodar ball a thoirmeasg no an t&#8209;ùghdar aig post atharrachadh.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Faodar gach feart a bhios ri làimh airson buill a chleachdadh, a’ gabhail a-steach atharrachadh an fhar-ainm no leigeil seachad an eadaraimh tuile.<br />Cha mholamaid seo.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Faodar cuid a dh’fheartan buill inntrigeadh. Chan fhaodar ceanglachain, puist-d no grad-theachdaireachdan a chleachdadh.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Chan eil ach feartan cuingichte ri làimh is chan fhaodar avatar a chleachdadh.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Chan eil ach feartan cuingichte ri làimh is chan fhaodar teachdaireachdan prìobhaideach a chleachdadh.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Faodar a’ mhòrchuid a dh’fheartan buill inntrigeadh. Chan fhaodar am far-ainm atharrachadh no an t&#8209;eadaramh tuile a leigeil seachad, mar eisimpleir.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'	=> 'Seo an t&#8209;ùghdarras airson buill air an ùr-chlàradh a tha sa bhuidheann “Buill ùra”. Tha roghainnean cheadan <strong>CHAN FHAOD IDIR</strong> ann gus feartan a glasadh do bhuill ùra.',
	'ROLE_DESCRIPTION_EXPLAIN'	=> '’S urrainn dhut mìneachadh goiridh a chur a-steach air dè nì an t&#8209;ùghdarras no dè as adhbhar dha. Thèid an teacsa a chuireas tu a-steach an-seo a shealltainn am broinn duilleagan nan ceadan cuideachd.',
	'ROLE_DESCRIPTION_LONG'	=> 'Tha tuairisgeul an ùghdarrais ro fhada, feuch nach cuir thu barrachd air 4000 caractar a-steach.',
	'ROLE_DETAILS'	=> 'Fiosrachadh an ùghdarrais',
	'ROLE_EDIT_SUCCESS'	=> 'Tha thu air an t&#8209;ùghdarras a dheasachadh.',
	'ROLE_NAME'	=> 'Ainm an ùghdarrais',
	'ROLE_NAME_ALREADY_EXIST'	=> 'Tha ùghdarras air a bheil <strong>%s</strong> ann mar-thà airson an t&#8209;seòrsa de chead a shònraich thu.',
	'ROLE_NOT_ASSIGNED'	=> 'Cha deach an t&#8209;ùghdarras seo a chur a sàs air nì sam bith.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'Chan eil am fòram/na fòraman a thagh thu ann.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'Chan eil am buidheann/na buidhneann a thagh thu ann.',
	'SELECTED_USER_NOT_EXIST'	=> 'Chan eil am ball/na buill a thagh thu ann.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Thèid gach fo-fhòram aig am fòram a thaghas tu an-seo a ghabhail a-steach san taghadh.',
	'SELECT_ROLE'	=> 'Tagh ùghdarras…',
	'SELECT_TYPE'	=> 'Tagh seòrsa',
	'SET_PERMISSIONS'	=> 'Suidhich na ceadan',
	'SET_ROLE_PERMISSIONS'	=> 'Suidhich ceadan an ùghdarrais',
	'SET_USERS_PERMISSIONS'	=> 'Suidhich ceadan nam ball',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Suidhich ceadan foram nam ball',
	'TRACE_DEFAULT'	=> 'Thèid gach cead a shuidheachadh air <strong>CHAN FHAOD</strong> o thùs (neo-shuidhichte). Mar sin, gabhaidh sgrìobhadh thairis air a’ chead le roghainnean eile.',
	'TRACE_FOR'	=> 'Tracaich airson',
	'TRACE_GLOBAL_SETTING'	=> '%s (uile-choitcheann)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>CHAN FHAOD IDIR</strong> mar an toradh iomlan, mar sin thèid an seann-toradh a chumail.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>CHAN FHAOD IDIR</strong> mar an toradh iomlan, mar sin thèid an seann-toradh a chumail.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>CHAN FHAOD IDIR</strong> a thèid na thoradh iomlan ùr o nach deach a suidheachadh roimhe (’s e <strong>CHAN FHAOD</strong> a bh’ ann)',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>CHAN FHAOD IDIR</strong> a thèid na thoradh iomlan ùr o nach deach a suidheachadh roimhe (’s e <strong>CHAN FHAOD</strong> a bh’ ann).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>CHAN FHAOD IDIR</strong> a sgrìobhas thairis air an roghainn <strong>FAODAIDH</strong> agus ’s e <strong>CHAN FHAOD</strong> a tha san roghainn iomlan airson a’ bhuill seo.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>CHAN FHAOD IDIR</strong> a sgrìobhas thairis air an roghainn <strong>FAODAIDH</strong> agus ’s e <strong>CHAN FHAOD</strong> a tha san roghainn iomlan airson a’ bhuill seo.',
	'TRACE_GROUP_NO'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>CHAN FHAOD</strong>, mar sin thèid an seann-toradh iomlan a chumail.',
	'TRACE_GROUP_NO_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>CHAN FHAOD</strong>, mar sin thèid an seann-toradh iomlan a chumail.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>FAODAIDH</strong> ach cha ghabh sgrìobhadh thairis air an <strong>CHAN FHAOD IDIR</strong> iomlan.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>FAODAIDH</strong> ach cha ghabh sgrìobhadh thairis air an <strong>CHAN FHAOD IDIR</strong> iomlan.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>FAODAIDH</strong> a thèid na thoradh iomlan ùr o nach deach a suidheachadh roimhe (’s e <strong>CHAN FHAOD</strong> a bh’ ann).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>FAODAIDH</strong> a thèid na thoradh iomlan ùr o nach deach a suidheachadh roimhe (’s e <strong>CHAN FHAOD</strong> a bh’ ann).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'Chaidh cead a’ bhuidhinn seo a shuidheachadh air <strong>FAODAIDH</strong> agus chaidh an cead iomlan a shuidheachadh air <strong>FAODAIDH</strong> mar-thà, mar sin thèid an toradh iomlan a chumail.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Chaidh cead a’ bhuidhinn seo airson an fhòraim seo a shuidheachadh air <strong>FAODAIDH</strong> agus chaidh an cead iomlan a shuidheachadh air <strong>FAODAIDH</strong> mar-thà, mar sin thèid an toradh iomlan a chumail.',
	'TRACE_PERMISSION'	=> 'Tracaich cead - %s',
	'TRACE_RESULT'	=> 'Toradh an tracaidh',
	'TRACE_SETTING'	=> 'Tracaich roghainn',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> '’S e <strong>FAODAIDH</strong> a tha san toradh airson cead a’ bhuill neo-eisimeileach on fhòram ach chaidh an cead iomlan a shuidheachadh air <strong>FAODAIDH</strong> mar-thà, mar sin thèid an toradh iomlan a chumail. %sTracaich an cead uile-coitcheann%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> '’S e <strong>FAODAIDH</strong> a tha san toradh airson cead a’ bhuill neo-eisimeileach on fhòram a sgrìobhas thairis air an toradh ionadail làithreach <strong>CHAN FHAOD IDIR</strong>. %sTracaich an cead uile-coitcheann%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a tha san toradh airson cead a’ bhuill neo-eisimeileach agus chan eil bhuaidh aige air a’ chead ionadail. %sTracaich an cead uile-coitcheann%s',
	'TRACE_USER_FOUNDER'	=> '’S ann gu bheil am ball ’na bhun-rianaire agus le sin thèid gach cead rianachd a shuidheachadh air <strong>FAODAIDH</strong> dha an-còmhnaidh.',
	'TRACE_USER_KEPT'	=> '’S e <strong>CHAN FHAOD</strong> a th’ ann an cead a’ bhuill agus mar sin thèid an seann-luach iomlan a chumail.',
	'TRACE_USER_KEPT_LOCAL'	=> '’S e <strong>CHAN FHAOD</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo agus mar sin thèid an seann-luach iomlan a chumail.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a th’ ann an cead a’ bhuill agus ’s e <strong>CHAN FHAOD IDIR</strong> a tha san luach iomlan, mar sin cha dèid dad sam bith atharrachadh.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo agus ’s e <strong>CHAN FHAOD IDIR</strong> a tha san luach iomlan, mar sin cha dèid dad sam bith atharrachadh.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a th’ ann an cead a’ bhuill agus thèid seo na luach iomlan oir ’s e <strong>CHAN FHAOD</strong> a bh’ ann roimhe.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo agus thèid seo na luach iomlan oir ’s e <strong>CHAN FHAOD</strong> a bh’ ann roimhe.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a th’ ann an cead a’ bhuill is sgrìobhaidh seo thairis air an seann-roghainn <strong>FAODAIDH</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> '’S e <strong>CHAN FHAOD IDIR</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo is sgrìobhaidh seo thairis air an seann-roghainn <strong>FAODAIDH</strong>.',
	'TRACE_USER_NO_TOTAL_NO'	=> '’S e <strong>CHAN FHAOD</strong> a th’ ann an cead a’ bhuill agus ’s e <strong>CHAN FHAOD</strong> a tha san luach iomlan, mar sin thèid a shuidheachadh air <strong>CHAN FHAOD IDIR</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> '’S e <strong>CHAN FHAOD</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo agus ’s e <strong>CHAN FHAOD</strong> a tha san luach iomlan, mar sin thèid a shuidheachadh air <strong>CHAN FHAOD IDIR</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> '’S e <strong>FAODAIDH</strong> a th’ ann an cead a’ bhuill ach cha ghabh sgrìobhadh thairis air an <strong>CHAN FHAOD IDIR</strong> iomlan.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> '’S e <strong>FAODAIDH</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo ach cha ghabh sgrìobhadh thairis air an <strong>CHAN FHAOD IDIR</strong> iomlan.',
	'TRACE_USER_YES_TOTAL_NO'	=> '’S e <strong>FAODAIDH</strong> a th’ ann an cead a’ bhuill agus ’s e seo a thèid ’na luach iomlan on a chaidh a shuidheachadh air <strong>CHAN FHAOD</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> '’S e <strong>FAODAIDH</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo agus ’s e seo a thèid ’na luach iomlan on a chaidh a shuidheachadh air <strong>CHAN FHAOD</strong>.',
	'TRACE_USER_YES_TOTAL_YES'	=> '’S e <strong>FAODAIDH</strong> a th’ ann an cead a’ bhuill agus chaidh an cead iomlan a shuidheachadh air <strong>FAODAIDH</strong> mar-thà, mar sin cha dèid dad atharrachadh.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> '’S e <strong>FAODAIDH</strong> a th’ ann an cead a’ bhuill airson an fhòraim seo agus chaidh an cead iomlan a shuidheachadh air <strong>FAODAIDH</strong> mar-thà, mar sin cha dèid dad atharrachadh.',
	'TRACE_WHO'	=> 'Cò',
	'TRACE_TOTAL'	=> 'Iomlan',
	'USERS_NOT_ASSIGNED'	=> 'Cha deach an t&#8209;ùghdarras seo a shònrachadh do bhall sam bith',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'a tha na bhall sna buidhnean ro-shocraichte seo',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'a tha na bhall sna buidhnean air an cruthachadh le rianaire seo',
	'VIEW_ASSIGNED_ITEMS'	=> 'Seall na nithean air an sònrachadh dha',
	'VIEW_LOCAL_PERMS'	=> 'Ceadan ionadail',
	'VIEW_GLOBAL_PERMS'	=> 'Ceadan uile-choitcheann',
	'VIEW_PERMISSIONS'	=> 'Seall na ceadan',
	'WRONG_PERMISSION_TYPE'	=> 'Chaidh seòrsa cearr a thaghadh airson a’ chead.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Chan eil am fòrmat ceart air roghainnean nan cead is chan urrainn do phpBB am pròiseasadh mar bu chòir.',
));
