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
	'ACP_PRUNE_USERS_EXPLAIN'	=> '’S urrainn dhut buill a sguabadh às no a chur à gnìomh air a’ bhòrd agad san earrann seo. ’S urrainn dhut na cunntasan a chriathradh ann an iomadh dòigh; le uiread nam postaichean, an gnìom as ùire agus msaa. Faodaidh tu cuspairean-deuchainn a chur còmhla gus na cunntasan air am bi buaidh a chuingeachadh. Mar eisimpleir, ’s urrainn dhut buill le nas lugha na 10 postaichean a sgudadh nach robh gnìomhach às dèidh 2002-01-01. Cleachd * mar shaorag ann an raointean teacsa. Mar roghainn eile, ’s urrainn dhut leum a ghearradh air taghadh chuspairean-deuchainn ma chuireas tu liosta de bhuill a-steach san roinn teacsa (gach fear air loidhne fa leth). Bi cùramach leis a’ ghoireas seo! Nuair a bhios ball air a sguabadh às, chan eil dòigh fon ghrèin a gheibh thu air ais e.',
	'CRITERIA'				=> 'Cuspairean-deuchainn',
	'DEACTIVATE_DELETE'	=> 'Cuir à gnìomh no sguab às',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Tagh a bheil thu airson buill a chur à gnìomh no an sguabadh às gu tur. Thoir an aire nach urrainn dhut buill air an sguabadh às aiseag!',
	'DELETE_USERS'	=> 'Sguab às',
	'DELETE_USER_POSTS'	=> 'Sguab às postaichean nam ball air an sgudadh',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Bheir seo air falbh na postaichean a chaidh a sgrìobhadh leis na buill a thèid a sguabadh às. Cha dèan seo dad ma chuireas tu romhad na buill a chur à gnìomh a-mhàin.',
	'JOINED_EXPLAIN'	=> 'Cuir ceann-là a-steach san fhòrmat <kbd>BBBB-MM-LL</kbd>. Faodaidh tu an dà raon a chleachdadh gus eadaramh a shònrachadh no fear diubh fhàgail bàn airson rainse fosgailte.',
	'LAST_ACTIVE_EXPLAIN'	=> 'Cuir ceann-là a-steach san fhòrmat <kbd>BBBB-MM-LL</kbd>. Cuir a-steach <kbd>0000-00-00</kbd> gus buill a sgudadh nach do rinn logadh a-steach a-riamh is thèid na cumhachan <em>Ro</em> is <em>Às dèidh</em> a leigeil seachad.',
	'POSTS_ON_QUEUE'			=> 'Postaichean a’ feitheamh ri aontachadh',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Cuingich do chleachdaichean taobh a-staigh a’ bhuidhinn air a thaghadh.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Na h-uile buidheann',
	'PRUNE_USERS_LIST'	=> 'Buill ri an sgudadh',
	'PRUNE_USERS_LIST_DELETE'	=> 'Thèid na cunntasan a leanas a thoirt air falbh leis na cuspairean-deuchainn a thagh thu airson an sgudaidh. ’S urrainn dhut buill fa leth a thoirt far liosta na feadhna ri sguabadh às ’s tu a’ toirt a’ chromag far a’ bhogsa ri taobh am far-ainm.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Thèid na cunntasan a leanas a chur à gnìomh leis na cuspairean-deuchainn a thagh thu airson an sgudaidh. ’S urrainn dhut buill fa leth a thoirt far liosta na feadhna ri cur à gnìomh às ’s tu a’ toirt a’ chromag far a’ bhogsa ri taobh am far-ainm.',
	'SELECT_USERS_EXPLAIN'	=> 'Cuir a-steach far-ainmean sònraichte an-seo. Thèid an cleachdadh seach na cuspairean-deuchainn gu h&#8209;àrd. Chan urrainn dhut bun-rianairean a sgudadh.',
	'USER_DEACTIVATE_SUCCESS'	=> 'Tha thu air na buill a thagh thu a chur à gnìomh.',
	'USER_DELETE_SUCCESS'	=> 'Tha thu air na buill a thagh thu a sguabadh às.',
	'USER_PRUNE_FAILURE'	=> 'Cha fhreagair ball sam bith ris na cuspairean-deuchainn a thagh thu.',
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Chan eil an ceann-là a chuir thu a-steach mar bu chòir, thathar an dùil air an fhòrmat <kbd>BBBB-MM-LL</kbd>.',
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Sguabaidh seo às gach cuspair anns nach deach a sgrìobhadh no nach deach a shealltainn air rè na h&#8209;àireimh de làithean a thaghas tu. Thèid na h&#8209;uile cuspair a sguabadh às mur cuir thu a-steach àireamh. Cha dèid cuspairean sa bheil cunntas-bheachd a’ ruith fhathast no fleodrainnean is brathan a thoirt air falbh a ghnàth.',
	'FORUM_PRUNE'	=> 'Sgudadh fòraim',
	'NO_PRUNE'	=> 'Cha deach fòram a sgudadh.',
	'SELECTED_FORUM'	=> 'Am fòram air a thaghadh',
	'SELECTED_FORUMS'	=> 'Na fòraman air an taghadh',
	'POSTS_PRUNED'	=> 'Postaichean air an sgudadh',
	'PRUNE_ANNOUNCEMENTS'	=> 'Sgud brathan',
	'PRUNE_FINISHED_POLLS'	=> 'Sgud cunntasan-bhachd dùinte',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Bheir seo cuspairean aie falbh sa bheil cunntas-bheachd a thàinig gu crìch.',
	'PRUNE_FORUM_CONFIRM'	=> 'An e ’s gu bheil thu airson na fòraman a thagh thu a sgudadh leis na roghainnean a shònraich thu? Nuair a bhios iad air an toirt air falbh, cha bhi dòigh fon ghrèin a gheibh thu na postaichean is cuspairean air an sgudadh air ais.',
	'PRUNE_NOT_POSTED'	=> 'Làithean on phost mu dheireadh',
	'PRUNE_NOT_VIEWED'	=> 'Làithean on shealladh mu dheireadh',
	'PRUNE_OLD_POLLS'	=> 'Sgud seann chunntasan-bhachd',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Bheir seo cuspairean le cunntasan-bheachd air falbh anns nach deach a bhòtadh o chionn nan làithean on phost mu dheireadh.',
	'PRUNE_STICKY'	=> 'Sgud fleodrainnean',
	'PRUNE_SUCCESS'	=> 'Tha thu air na fòraman a sgudadh.',
	'TOPICS_PRUNED'	=> 'Na cuspairean air an sgudadh',
));
