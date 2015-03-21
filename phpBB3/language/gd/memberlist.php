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
	'ABOUT_USER'	=> 'Pròifil',
	'ACTIVE_IN_FORUM'	=> 'Am fòram as beòtha',
	'ACTIVE_IN_TOPIC'	=> 'An cuspair as beòtha',
	'ADD_FOE'	=> 'Cuir ris na h&#8209;eascaraidean',
	'ADD_FRIEND'	=> 'Cuir ris na caraidean',
	'AFTER'	=> 'As dèidh',
	'ALL'	=> 'Na h&#8209;uile',
	'BEFORE'	=> 'Ro',
	'CC_SENDER'	=> 'Cuir lethbhreac dhen phost-d seo thugad fhèin.',
	'CONTACT_ADMIN'			=> 'Cuir fios gu rianaire a’ bhùird',
	'DEST_LANG'	=> 'Cànan',
	'DEST_LANG_EXPLAIN'	=> 'Tagh cànan freagarrach (ma tha seo iomchaidh) dhan neach a gheibh an teachdaireachd seo.',
	'EDIT_PROFILE'			=> 'Deasaich a’ phròifil',
	'EMAIL_BODY_EXPLAIN'	=> 'Thèid an teachdaireachd seo a chur mar theacsa lom, na cuir a-steach còd HTML no BBCode. Thèid freagairtean ris an teachdaireachd seo a chur gun phost-d agad.',
	'EMAIL_DISABLED'	=> 'Tha sinn duilich ach chaidh a h&#8209;uile feart co-cheangailte ri post-d a chur dheth.',
	'EMAIL_SENT'	=> 'Chaidh am post-d a chur.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Thèid an teachdaireachd seo a chur mar theacsa lom, na cuir a-steach còd HTML no BBCode. Thoir an aire gu bheil fiosrachadh mun chuspair air fhilleadh a-steach san teachdaireachd mu thràth. Thèid freagairtean ris an teachdaireachd seo a chur gun phost-d agad.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Feumaidh tu seòladh puist-d dligheach a chur ann airson an neach a gheibh e.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Feumaidh tu teachdaireachd a chur ann.',
	'EMPTY_MESSAGE_IM'	=> 'Feumaidh tu teachdaireachd a chur ann.',
	'EMPTY_NAME_EMAIL'	=> 'Feumaidh tu fìor-ainm an neach a gheibh e a chur a-steach.',
	'EMPTY_SENDER_EMAIL'	=> 'Feumaidh tu seòladh puist-d dligheach a chur a-steach.',
	'EMPTY_SENDER_NAME'		=> 'Feumaidh tu ainm a chur a-steach.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Feumaidh tu cuspair a chur ris a’ phost-d.',
	'EQUAL_TO'	=> 'Co-ionnan ri',
	'FIND_USERNAME_EXPLAIN'	=> 'Cleachd am foirm seo gus buill shònraichte a lorg. Cha leig thu leas gach raon a lìonadh. Cleachd * mar shaorag gus pàirt de dh’fhacal a lorg. Cleachd am fòrmat <kbd>BBBB-MM-LL</kbd>, m.e. <samp>2004-02-29</samp> gus ceann-là a chur ann. Comharraich na bogsaichean beaga gus aon no barrachd fhar-ainmean a thaghadh (dh’fhaoidte gum bi barrachd air aon air a chomharradh co-dhiù) is cleachd am putan “Tagh an fheadhainn chomharraichte” gus tilleadh gun fhoirm roimhe.',
	'FLOOD_EMAIL_LIMIT'	=> 'Chan urrainn dhut post-d eile a chur an-dràsta fhèin. Feuch ris a-rithist an ceann greis.',
	'GROUP_LEADER'	=> 'Ceannard a’ bhuidhinn',
	'HIDE_MEMBER_SEARCH'	=> 'Cuir lorg nam ball am falach',
	'IM_ADD_CONTACT'	=> 'Cuir ris caraid',
	'IM_DOWNLOAD_APP'	=> 'Luchdaich a-nuas prògram',
	'IM_JABBER'	=> 'Thoir an aire gum faod buill eile bacadh a chur air teachdaireachdan pearsanta nach do dh’iarr iad.',
	'IM_JABBER_SUBJECT'	=> 'Seo teachdaireachd fhèin-obrachail, na thoir freagairt dha! Teachdaireachd o %1$s aig %2$s.',
	'IM_MESSAGE'	=> 'An teachdaireachd agad',
	'IM_NAME'	=> 'D’ ainm',
	'IM_NO_DATA'	=> 'Chan eil seòladh freagarrach ann airson a’ bhuill seo.',
	'IM_NO_JABBER'	=> 'Tha sinn duilich ach chan eil teachdaireachdan dìreach eadar buill Jabber comasach air a’ bhòrd-bhrath seo. Bidh agad ri cliant Jabber a stàladh air an t&#8209;siostam agad gus fios a leigeil dhan neach gu h&#8209;àrd.',
	'IM_RECIPIENT'	=> 'Faightear',
	'IM_SEND'	=> 'Cuir teachdaireachd',
	'IM_SEND_MESSAGE'	=> 'Cuir teachdaireachd',
	'IM_SENT_JABBER'	=> 'Tha thu air teachdaireachd a chur gu %1$s.',
	'IM_USER'	=> 'Cuir grad-theachdaireachd.',
	'LAST_ACTIVE'	=> 'Gnìomh mu dheireadh',
	'LESS_THAN'	=> 'Nas lugha na',
	'LIST_USERS'				=> array(
		1	=> '%d bhall',
		2	=> '%d bhall',
		3	=> '%d buill',
		4	=> '%d ball',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Feumaidh tu clàradh is logadh a-steach air a’ bhòrd-bhrath seo ach an seall thu liosta an sgioba.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Feumaidh tu clàradh is logadh a-steach air a’ bhòrd-bhrath seo mus faigh thu inntrigeadh gu liosta nam ball.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Feumaidh tu clàradh is logadh a-steach air a’ bhòrd-bhrath seo mus fhaod thu ball a lorg.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Feumaidh tu clàradh is logadh a-steach air a’ bhòrd-bhrath seo ach an seall thu na cunntasan.',
	'MORE_THAN'	=> 'Barrachd air',
	'NO_CONTACT_FORM'		=> 'Chaidh am foirm “Fios thugainn” airson rianairean a’ bhùird a chur à comas.',
	'NO_CONTACT_PAGE'		=> 'Chaidh an duilleag “Fios thugainn” airson rianairean a’ bhùird a chur à comas .',
	'NO_EMAIL'	=> 'Chan eil cead agad post-d a chur gun neach seo.',
	'NO_VIEW_USERS'	=> 'Chan eil cead agad coimhead air liosta nam ball no na cunntasan.',
	'ORDER'	=> 'Òrdugh',
	'OTHER'	=> 'Eile',
	'POST_IP'	=> 'Air a chur o IP/àrainn',
	'REAL_NAME'	=> 'Ainm an fhaighteir',
	'RECIPIENT'	=> 'Faightear',
	'REMOVE_FOE'	=> 'Thoir air falbh eascaraid',
	'REMOVE_FRIEND'	=> 'Thoir air falbh caraid',
	'SELECT_MARKED'	=> 'Tagh an fheadhainn chomharraichte',
	'SELECT_SORT_METHOD'	=> 'Tagh dòigh seòrsachaidh',
	'SENDER_EMAIL_ADDRESS'	=> 'An seòladh puist-d agad',
	'SENDER_NAME'			=> 'D’ ainm',
	'SEND_ICQ_MESSAGE'	=> 'Cuir teachdaireachd ICQ',
	'SEND_IM'	=> 'Grad-theachdaireachdan',
	'SEND_JABBER_MESSAGE'	=> 'Cuir teachdaireachd Jabber',
	'SEND_MESSAGE'	=> 'Teachdaireachd',
	'SEND_YIM_MESSAGE'	=> 'Cuir teachdaireachd YIM',
	'SORT_EMAIL'	=> 'Post-d',
	'SORT_LAST_ACTIVE'	=> 'Gnìomh mu dheireadh',
	'SORT_POST_COUNT'	=> 'Àireamh nam postaichean',
	'USERNAME_BEGINS_WITH'	=> 'Far-ainm a’ tòiseachadh le',
	'USER_ADMIN'	=> 'Rianaich ball',
	'USER_BAN'	=> 'Toirmeasg',
	'USER_FORUM'	=> 'Stadastaireachd a’ bhuill',
	'USER_LAST_REMINDED'	=> array(
		'0'	=> 'Gun chuimhneachadh gu ruige seo',
		'1'	=> 'Air a chuimhneachadh %1$d turas<br />» %2$s',
		'2'	=> 'Air a chuimhneachadh %1$d thuras<br />» %2$s',
		'3'	=> 'Air a chuimhneachadh %1$d tursan<br />» %2$s',
		'4'	=> 'Air a chuimhneachadh %1$d turas<br />» %2$s',
	),
	'USER_ONLINE'	=> 'Air loidhne',
	'USER_PRESENCE'	=> 'Aogas air a’ bhòrd-bhrath',
	'USERS_PER_PAGE'		=> 'Buill gach duilleag',
	'VIEWING_PROFILE'	=> 'A’ coimhead air pròifil - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Seall air pròifil Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Seall air pròifil Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Seall air pròifil Twitter',
	'VIEW_YOUTUBE_CHANNEL'  => 'Seall air seanail YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Seall air pròifil Google+',
));
