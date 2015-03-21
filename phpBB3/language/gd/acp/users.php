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
	'ADMIN_SIG_PREVIEW'	=> 'Ro-shealladh an earr-sgrìobhaidh',
	'AT_LEAST_ONE_FOUNDER'	=> 'Chan urrainn dhut ball àbhaisteach a dhèanamh dhen bhun-rianaire seo. Feumaidh bun-rianaire a bhith aig a’ bhòrd. Ma tha thua rsin inbhe bun-rianaire a’ bhuill seo atharrachadh, feumaidh tu bun-rianaire a dhèanamh de bhall eile an toiseach.',
	'BAN_ALREADY_ENTERED'	=> 'Chaidh an toirmeasg seo a chur ann mar-thà. Mar sin cha deach an liosta ùrachadh.',
	'BAN_SUCCESSFUL'	=> 'Tha thu air toirmeasg a chur ann.',
	'CANNOT_BAN_ANONYMOUS'	=> 'Chan fhaod thu an cunntas gun ainm a thoirmeasg. ’S urrainn dhut ceadan airson cleachdaichean gun ainm a shuidheachadh san taba “Ceadan”.',
	'CANNOT_BAN_FOUNDER'	=> 'Chan fhaod thu bun-rianairean a thoirmeasg.',
	'CANNOT_BAN_YOURSELF'	=> 'Chan fhaod thu thu fhèin a thoirmeasg.',
	'CANNOT_DEACTIVATE_BOT'	=> 'Chan fhaod thu cunntas aig bot a chur à gnìomh. Cleachd duilleag nam botaichean an àite seo gus bot a chur à gnìomh.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'Chan fhaod thu cunntas aig bun-rianaire a chur à gnìomh.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Chan fhaod thu an cunntas agad fhèin a chur à gnìomh.',
	'CANNOT_FORCE_REACT_BOT'	=> 'Chan fhaod thu ath-ghnìomhachadh a sparradh air cunntas aig bot. Cleachd duilleag nam botaichean an àite seo gus am bot a ghnìomhachadh a-rithist.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Chan fhaod thu ath-ghnìomhachadh a sparradh air cunntas aig bun-rianaire.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Chan fhaod thu ath-ghnìomhachadh a sparradh ort fhèin.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'Chan fhaod thu cunntas nan aoighean a thoirt air falbh.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Chan fhad thu cunntas aig bun-rianaire a thoirt air falbh.',
	'CANNOT_REMOVE_YOURSELF'	=> 'Chan fhaod thu an cunntas agad fhèin a thoirt air falbh.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Chan fhaod thu bun-rianaire a dhèanamh de dh’eascaraid.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Feumaidh tu am ball a ghnìomhachadh mus dèan thu bun-rianairean dheth on nach urrainn ach buill ghnìomhach a bhith nam bun-rianairean.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'Feumaidh tu seo a shònrachadh ma tha thu ag atharrachadh seòladh puist-d a’ bhuill.',
	'DELETE_POSTS'	=> 'Sguab às na postaichean',
	'DELETE_USER'	=> 'Sguab às am ball',
	'DELETE_USER_EXPLAIN'	=> 'Thoir an aire gu bheil sguabadh às buill maireannach is cha ghabh an aiseag. Thèid gach teachdaireachd phrìobhaideach gun leughadh a chaidh a chur leis a’ bhall a sguabadh às is chan fhaigh na faightearan iad tuilleadh.',
	'FORCE_REACTIVATION_SUCCESS'	=> 'Tha thu air ath-ghnìomhachadh a sparradh air.',
	'FOUNDER'	=> 'Bun-rianaire',
	'FOUNDER_EXPLAIN'	=> 'Tha gach cead rianachd air bun-rianairean is cha ghabh an toirmeasg, sguabadh às no atharrachadh le ball nach eil ’na bhun-rianaire fhèin.',
	'GROUP_APPROVE'	=> 'Aontaich ris a’ bhall',
	'GROUP_DEFAULT'	=> 'Dèan am bun-bhuidheann dheth airson a’ bhuill',
	'GROUP_DELETE'	=> 'Thoir am ball air falbh on bhuidheann',
	'GROUP_DEMOTE'	=> 'Thoir air falbh ceannardas',
	'GROUP_PROMOTE'	=> 'àrdaich gu ceannard a’ bhuidhinn',
	'IP_WHOIS_FOR'	=> 'IP whois airson %s',
	'LAST_ACTIVE'	=> 'An gnìomh mu dheireadh',
	'MOVE_POSTS_EXPLAIN'	=> 'Tagh am fòram dhan a thèid a h&#8209;uile post a rinn am ball seo a ghluasad.',
	'NO_SPECIAL_RANK'	=> 'Gun rang sònraichte',
	'NO_WARNINGS'	=> 'Gun rabhadh.',
	'NOT_MANAGE_FOUNDER'	=> 'Dh’fheuch thu ri ball a stiùireadh a tha ’na bhun-rianaire. Chan fhaod ach bun-rianaire bun-rianaire eile a stiùireadh.',
	'QUICK_TOOLS'	=> 'Grad-innealan',
	'REGISTERED'	=> 'Ceann-là a’ chlàraidh',
	'REGISTERED_IP'	=> 'IP là a’ chlàraidh',
	'RETAIN_POSTS'	=> 'cum na postaichean',
	'SELECT_FORM'	=> 'Tagh foirm',
	'SELECT_USER'	=> 'Tagh ball',
	'USER_ADMIN'	=> 'Rianachd nam ball',
	'USER_ADMIN_ACTIVATE'	=> 'Gnìomhaich an cunntas',
	'USER_ADMIN_ACTIVATED'	=> 'Tha thu air am ball a ghnìomhachadh.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Tha thu air an t&#8209;avatar a thoirt air falbh o chunntas a’ bhuill.',
	'USER_ADMIN_BAN_EMAIL'	=> 'Toirmisg trìd puist-d',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Chaidh am post-d a thoirmeasg le stiùireadh nam ball',
	'USER_ADMIN_BAN_IP'	=> 'Toirmisg trìd IP',
	'USER_ADMIN_BAN_IP_REASON'	=> 'Chaidh an IP a thoirmeasg le stiùireadh nam ball',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Chaidh am far-ainm a thoirmeasg le stiùireadh nam ball',
	'USER_ADMIN_BAN_USER'	=> 'Toirmisg trìd far-ainm',
	'USER_ADMIN_DEACTIVATE'	=> 'Cuir an cunntas à gnìomh',
	'USER_ADMIN_DEACTIVED'	=> 'Tha thu air am ball a chur à gnìomh.',
	'USER_ADMIN_DEL_ATTACH'	=> 'Sguab às gach ceanglachan',
	'USER_ADMIN_DEL_AVATAR'	=> 'Sguab às an t&#8209;avatar',
	'USER_ADMIN_DEL_OUTBOX'	=> 'Falamhaich na teachdaireachdan a-mach',
	'USER_ADMIN_DEL_POSTS'	=> 'Sguab às gach post',
	'USER_ADMIN_DEL_SIG'	=> 'Sguab às an t&#8209;earr-sgrìobhadh',
	'USER_ADMIN_EXPLAIN'	=> '’S urrainn dhut am fiosrachadh aig ball ’s cuid a roghainnean atharrachadh an-seo.',
	'USER_ADMIN_FORCE'	=> 'Sparr ath-ghnìomhachadh air',
	'USER_ADMIN_LEAVE_NR'	=> 'Thoir air falbh o “Buill ùra”',
	'USER_ADMIN_MOVE_POSTS'	=> 'Gluais gach post',
	'USER_ADMIN_SIG_REMOVED'	=> 'Tha thu air an t&#8209;earr-sgrìobhadh a thoirt air falbh o chunntas a’ bhuill.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Tha thu air gach ceanglachan a chuir am ball ris a thoirt air falbh.',
	'USER_AVATAR_NOT_ALLOWED'	=> 'Cha ghabh an t&#8209;avatar sealltainn on nach eil avataran ceadaichte an-dràsta.',
	'USER_AVATAR_UPDATED'	=> 'Tha thu air am fiosrachadh aig avatar a’ bhuill ùrachadh.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Cha ghabh an t&#8209;avatar làithreach sealltainn on nach eil a sheòrsa ceadaichte an-dràsta.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Raointean pròifil gnàthaichte',
	'USER_DELETED'	=> 'Tha thu air am ball a sguabadh às.',
	'USER_GROUP_ADD'	=> 'Cuir am ball ris a’ buidheann',
	'USER_GROUP_NORMAL'	=> '’Na bhall sna buidhnean seo air an cruthachadh le rianaire',
	'USER_GROUP_PENDING'	=> 'A’ feitheamh ri ballrachd sna buidhnean seo',
	'USER_GROUP_SPECIAL'	=> '’Na bhall sna buidhnean ro-shocraichte seo',
	'USER_LIFTED_NR'	=> 'Tha thu air staid a’ bhuill ùir a thoirt air falbh on bhall.',
	'USER_NO_ATTACHMENTS'	=> 'Chan eil ceanglachan ri shealltainn ann.',
	'USER_NO_POSTS_TO_DELETE'	=> 'Chan eil post aig a’ bhall airson cumail no sguabadh às.',
	'USER_OUTBOX_EMPTIED'	=> 'Tha thu air gach teachdaireachd a-mach aig a’ bhall a thoirt air falbh.',
	'USER_OUTBOX_EMPTY'	=> 'Cha robh teachdaireachd a-mach aig a’ bhall.',
	'USER_OVERVIEW_UPDATED'	=> 'Tha thu air fiosrachadh a’ bhuill ùrachadh.',
	'USER_POSTS_DELETED'	=> 'Tha thu air gach post a chaidh a sgrìobhadh leis a’ bhall a thoirt air falbh.',
	'USER_POSTS_MOVED'	=> 'Tha thu air postaichean a’ bhuill a ghluasad dhan fhòram-uidhe.',
	'USER_PREFS_UPDATED'	=> 'Tha thu air roghainnean a’ bhuill ùrachadh.',
	'USER_PROFILE'	=> 'Pròifil a’ bhuill',
	'USER_PROFILE_UPDATED'	=> 'Tha thu air pròifil a’ bhuill ùrachadh.',
	'USER_RANK'	=> 'Rang a’ bhuill',
	'USER_RANK_UPDATED'	=> 'Tha thu air rang a’ bhuill ùrachadh.',
	'USER_SIG_UPDATED'	=> 'Tha thu air earr-sgrìobhadh a’ bhuill ùrachadh.',
	'USER_WARNING_LOG_DELETED'	=> 'Chan eil fiosrachadh ri làimh. Dh’fhaoidte gun deachd innteart an loga a sguabadh às.',
	'USER_TOOLS'	=> 'Innealan bunasach',
));
