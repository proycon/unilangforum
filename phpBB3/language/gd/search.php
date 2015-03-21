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
	'NO_SEARCH_UNREADS'	=> 'Tha sinn duilich ach chaidh lorg airson postaichean gun leughadh a chur a comas air a’ bhòrd-bhrath seo.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Feumaidh tu a bhith clàraichte is air logadh a-steach mus urrainn dhut sùil a thoirt air na postaichean gun leughadh agad.',
	'ALL_AVAILABLE'	=> 'Na h&#8209;uile a tha ann',
	'ALL_RESULTS'	=> 'Na h&#8209;uile toradh',
	'DISPLAY_RESULTS'	=> 'Seall na toraidhean mar',
	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Chaidh %d toradh a lorg',
		2	=> 'Chaidh %d thoradh a lorg',
		3	=> 'Chaidh %d toraidhean a lorg',
		4	=> 'Chaidh %d toradh a lorg',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Chaidh corr is %d toradh a lorg',
		2	=> 'Chaidh corr is %d thoradh a lorg',
		3	=> 'Chaidh corr is %d toraidhean a lorg',
		4	=> 'Chaidh corr is %d toradh a lorg',
	),
	'GLOBAL'	=> 'Lèir-bhrath',
	'IGNORED_TERMS'	=> 'air fhàgail a-muigh',
	'IGNORED_TERMS_EXPLAIN'	=> 'Chaidh na faclan a leanas air fhàgail a-muigh ’nad lorg air sgàth ’s gu bheil iad ro chumanta: <strong>%s</strong>.',
	'JUMP_TO_POST'	=> 'Gearr leum gun phost',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Feumaidh tu clàradh is logadh a-steach air a’ bhòrd-bhrath seo mus urrainn dhut na postaichean agad a shealltainn.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Iarraidh am bòrd-brath gu bheil thu air clàradh is air logadh a-steach gus postaichean gun leughadh a shealltainn dhut.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Shònraich thu cus fhaclan-luirg. Feuch nach cuir thu a-steach barrachd air %1$d fhacal.',
		2	=> 'Shònraich thu cus fhaclan-luirg. Feuch nach cuir thu a-steach barrachd air %1$d fhacal.',
		3	=> 'Shònraich thu cus fhaclan-luirg. Feuch nach cuir thu a-steach barrachd air %1$d faclan.',
		4	=> 'Shònraich thu cus fhaclan-luirg. Feuch nach cuir thu a-steach barrachd air %1$d facal.',
	),
	'NO_KEYWORDS'	=> 'Feumaidh tu facal-luirg a chur ann. Feumaidh %s a bhith anns gach facal air a’ char as lugha agus chan fhaod barrachd air %s a bhith ann, taobh a-muigh nan saoragan.',
	'NO_RECENT_SEARCHES'	=> 'Cha deach lorg a dhèanamh o chionn ghoirid.',
	'NO_SEARCH'	=> 'Tha sinn duilich ach chan eil cead agad gus an siostam luirg a chleachdadh.',
	'NO_SEARCH_RESULTS'	=> 'Cha deach toradh freagarrach a lorg.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Tha sinn duilich ach chan urrainn dhut lorg an-dràsta fhèin. Feuch ris a-rithist an ceann %d diog.',
		2	=> 'Tha sinn duilich ach chan urrainn dhut lorg an-dràsta fhèin. Feuch ris a-rithist an ceann %d dhiog.',
		3	=> 'Tha sinn duilich ach chan urrainn dhut lorg an-dràsta fhèin. Feuch ris a-rithist an ceann %d diogan.',
		4	=> 'Tha sinn duilich ach chan urrainn dhut lorg an-dràsta fhèin. Feuch ris a-rithist an ceann %d diog.',
	),
	'WORD_IN_NO_POST'	=> 'Cha deach post a lorg a chionn ’s nach nochd am facal <strong>%s</strong> ann am post sam bith.',
	'WORDS_IN_NO_POST'	=> 'Cha deach post a lorg a chionn ’s nach nochd na faclan <strong>%s</strong> ann am post sam bith.',
	'POST_CHARACTERS'	=> 'litrichean de gach post',
	'PHRASE_SEARCH_DISABLED'	=> 'Cha chuirear taic ri abairt mhionaideach a lorg air a’ bhòrd-bhrath seo.',
	'RECENT_SEARCHES'	=> 'Lorgan o chionn ghoirid',
	'RESULT_DAYS'	=> 'Na thoir dhomh ach toraidhean o',
	'RESULT_SORT'	=> 'Seòrsaich na toraidhean le',
	'RETURN_FIRST'	=> 'Thoir dhomh a’ chiad',
	'GO_TO_SEARCH_ADV'	=> 'Rach dhan lorg adhartach',
	'SEARCHED_FOR'	=> 'Am facal-luirg a chaidh a chleachdadh',
	'SEARCHED_QUERY'	=> 'Chaidh lorg airson',
	'SEARCHED_TOPIC'	=> 'An cuspair sa chaidh a lorg',
	'SEARCH_ALL_TERMS'	=> 'Lorg a h&#8209;uile facal-luirg no cleachd an t&#8209;iarrtas mar a chaidh a chur a-steach',
	'SEARCH_ANY_TERMS'	=> 'Lorg facal-luirg sam bith',
	'SEARCH_AUTHOR'	=> 'Lorg ùghdar',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Cleachd * mar shaorag gus pàirt de dh’fhacal a lorg.',
	'SEARCH_FIRST_POST'	=> 'A’ chiad phost aig gach cuspair a-mhàin',
	'SEARCH_FORUMS'	=> 'Lorg am broinn nam fòraman',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Tagh am fòram no na fòraman a thèid a rùrachadh. Thèid na fo-fhòraman a rùrachadh cuideachd mur cuir thu dheth “lorg sna fo-fhòraman“ gu h&#8209;ìosal.',
	'SEARCH_IN_RESULTS'	=> 'Lorg am broinn nan toraidhean seo',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Cuir <strong>+</strong> air beulaibh facail a tha riatanach san lorg agus <strong>-</strong> air beulaibh facail nach bu chòir a bhith san lorg. Ma tha thu ag iarraidh gun dèid facal a-mhàin de shreath fhaclan a lorg, cuir <strong>|</strong> eatorra is camagan ceàrnagach <strong>[ ]</strong> mun cuairt orra. Cleachd *&nbsp;mar shaorag ma tha thu a’ lorg airson pàirt de dh’fhacal.',
	'SEARCH_MSG_ONLY'	=> 'Teacsa na teachdaireachd a-mhàin',
	'SEARCH_OPTIONS'	=> 'Roghainnean an luirg',
	'SEARCH_QUERY'	=> 'Iarrtas luirg',
	'SEARCH_SUBFORUMS'	=> 'Lorg sna fo-fhòraman',
	'SEARCH_TITLE_MSG'	=> 'Cuspairean nam postaichean is teacsa nan teachdaireachdan',
	'SEARCH_TITLE_ONLY'	=> 'Ainmean nan cuspairean a-mhàin',
	'SEARCH_WITHIN'	=> 'Lorg am broinn',
	'SORT_ASCENDING'	=> 'A’ dìreadh',
	'SORT_AUTHOR'	=> 'Ùghdar',
	'SORT_DESCENDING'	=> 'A’ teàrnadh',
	'SORT_FORUM'	=> 'Fòram',
	'SORT_POST_SUBJECT'	=> 'Cuspair a’ phuist',
	'SORT_TIME'	=> 'Àm a’ phuist',
	'SPHINX_SEARCH_FAILED'		=> 'Dh’fhàillig leis an lorg: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Tha sinn duilich ach dha b’ urrainn dhuinn an lorg a dhèanamh. Chuir sinn barrachd fiosrachaidh mun fhàilligeadh seo ann an loga nam mearachd.',
	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Feumaidh tu %d charactar de dh’ainm an ùghdair a chur a-steach air a’ char as lugha.',
		2	=> 'Feumaidh tu %d charactar de dh’ainm an ùghdair a chur a-steach air a’ char as lugha.',
		3	=> 'Feumaidh tu %d caractaran de dh’ainm an ùghdair a chur a-steach air a’ char as lugha.',
		4	=> 'Feumaidh tu %d caractar de dh’ainm an ùghdair a chur a-steach air a’ char as lugha.',
	),
));
