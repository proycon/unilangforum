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
	'ALREADY_DEFAULT_GROUP'	=> '’S e am bun-bhuidheann agad a tha sa buidheann a thagh thu mar-thà.',
	'ALREADY_IN_GROUP'	=> 'Tha thu ’nad bhall sa bhuidheann seo mar-thà.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Dh’iarr thu ballrachd sa bhuidheann seo mar-thà.',
	'CANNOT_JOIN_GROUP'	=> 'Chan urrainn dhut dol ’nad bhall sa bhuidheann seo. Chan urrainn dhut pàirt a ghabhail ann ach ann am buidhnean fosgailte is saor-fhosgailte.',
	'CANNOT_RESIGN_GROUP'	=> 'Chan urrainn dhut am buidheann seo fhàgail. Chan urrainn dhut fàgail ach buidhnean fosgailte is saor-fhosgailte.',
	'CHANGED_DEFAULT_GROUP'	=> 'Tha thu air a’ bhun-bhuidheann atharrachadh.',
	'GROUP_AVATAR'	=> 'Avatar a’ bhuidhinn',
	'GROUP_CHANGE_DEFAULT'	=> 'An e ’s gu bheil thu airson a’ bhallrachd bhunaiteach agad atharrachadh dhan bhuidheann seo: “%s”?',
	'GROUP_CLOSED'	=> 'Dùinte',
	'GROUP_DESC'	=> 'Tuairisgeul a’ bhuidhinn',
	'GROUP_HIDDEN'	=> 'Falaichte',
	'GROUP_INFORMATION'	=> 'Fiosrachadh a’ bhuidhinn',
	'GROUP_IS_CLOSED'	=> '’S e buidheann dùinte a tha seo, feumaidh buill ùra cuireadh o cheannard a’ bhuidhinn mus urrainn dhaibh pàirt a ghabhail ann.',
	'GROUP_IS_FREE'	=> '’S e buidheann saor-fhosgailte a tha seo, tha fàilte air ball ùr sam bith.',
	'GROUP_IS_HIDDEN'	=> '’S e buidheann falaichte a tha seo, chan fhaic ach buill a’ bhuidhinn na buill eile.',
	'GROUP_IS_OPEN'	=> '’S e buidheann fosgailte a tha seo, cuiridh buill a-steach airson ballrachd.',
	'GROUP_IS_SPECIAL'	=> '’S e buidheann sònraichte a tha seo; tha buidhnean sònraichte ’gan rianachadh le rianairean a’ bhùird-bhrath.',
	'GROUP_JOIN'	=> 'Iarr ballrachd sa bhuidheann',
	'GROUP_JOIN_CONFIRM'	=> 'An e ’s gu bheil thu airson ballrachd iarraidh sa bhuidheann a thagh thu?',
	'GROUP_JOIN_PENDING'	=> 'Iarr ballrachd sa bhuidheann',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'An e ’s gu bheil thu airson ballrachd iarraidh sa bhuidheann a thagh thu?',
	'GROUP_JOINED'	=> 'Chaidh thu ’nad bhall sa bhuidheann a thagh thu.',
	'GROUP_JOINED_PENDING'	=> 'Tha thu air ballrachd iarraidh a-nis. Fuirich gus am faigh do bhallrachd aontachadh ceannard a’ bhuidhinn.',
	'GROUP_LIST'	=> 'Rianaich buill',
	'GROUP_MEMBERS'	=> 'Buill a’ bhuidhinn',
	'GROUP_NAME'	=> 'Ainm a’ bhuidhinn',
	'GROUP_OPEN'	=> 'Fosgailte',
	'GROUP_RANK'	=> 'Rang a’ bhuidhinn',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Fàg am buidheann',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'An e ’s gu bheil thu airson ballrachd sa bhuidheann a thagh thu a leigeil dhìot?',
	'GROUP_RESIGN_PENDING'	=> 'Sguir dhe iarrtas ballrachd ri aontachadh sa bhuidheann',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'An e ’s gu bheil thu airson ballrachd ri aontachadh sa bhuidheann a thagh thu a leigeil dhìot?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Tha thu air am buidheann a thagh thu fhàgail a-nis.',
	'GROUP_RESIGNED_PENDING'	=> 'Chaidh do bhallrachd ri aontachadh a thoirt air falbh on bhuidheann a thagh thu.',
	'GROUP_TYPE'	=> 'Seòrsa a’ bhuidhinn',
	'GROUP_UNDISCLOSED'	=> 'Buidheann falaichte',
	'FORUM_UNDISCLOSED'	=> 'Maorsainneachd nam fòraman falaichte',
	'LOGIN_EXPLAIN_GROUP'	=> 'Feumaidh tu logadh a-steach mus urrainn dhut fiosrachadh a’ bhuidhinn seo a shealltainn.',
	'NO_LEADERS'	=> 'Chan eil thu nad cheannard aig buidheann sam bith.',
	'NOT_LEADER_OF_GROUP'	=> 'Chan urrainn dhut sin a dhèanamh a chionn ’s nach eil thu nad cheannard sa bhuidheann a thagh thu.',
	'NOT_MEMBER_OF_GROUP'	=> 'Chan urrainn dhut sin a dhèanamh a chionn ’s nach eil thu nad bhall sa bhuidheann a thagh thu no  nach d’ fhuair a’ bhallrachd agad aontachadh fhathast.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Chan fhaod thu am bun-bhuidheann agad fhàgail.',
	'PRIMARY_GROUP'	=> 'Prìomh-bhuidheann',
	'REMOVE_SELECTED'	=> 'Thoir air falbh an fheadhainn chomharraichte',
	'USER_GROUP_CHANGE'	=> 'On bhuidheann “%1$s” gu “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'Thoir an ceannardas air falbh',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'An e ’s gu bheil thu airson ceannardas sa bhuidheann a thagh thu a thoirt air falbh?',
	'USER_GROUP_DEMOTED'	=> 'Tha an ceannardas air a thoirt air falbh.',
));
