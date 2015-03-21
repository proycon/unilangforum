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
	'ACP_SEARCH_INDEX_EXPLAIN'	=> '’S urrainn dhut inneacsan backend an luirg a stiùireadh an-seo. On nach cleachd thu barrachd air aon dhiubh mar as trice, bu choir dhut gach inneacs nach cleachd thu a sguabadh às. B’ fhiach inneacs togail as ùr nuair a bhios tu air roghainnean an luirg atharrachadh (m.e. an àireamh as lugha/as motha de charactaran) ach an dèid na h&#8209;atharraichean seo a ghabhail a-steach.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> '’S urrainn dhut backend an luirg a shònrachadh an-seo a thèid a chleachdadh gus postaichean inneacsadh is an lorg a dhèanamh.’S urrainn dhut iomadh roghainn a shuidheachadh aig a bheil buaidh air an uiread de phròiseasadh air am bi feum gus na gnìomhan seo a choileanadh. Tha cuid a roghainnean co-ionnan leis gach backend inneal luirg.',
	'COMMON_WORD_THRESHOLD'	=> 'Stairsneach nam faclan cumanta',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> 'Beachdaichidh am feart seo air faclan a bhios am broinn ceudad mhòr de phostaichean mar fhaclan cumanta. Chan urrainnear lorg airson faclan cumanta. Suidhich seo air neoni gus a chur à comas. Cha dèid seo a chur an sàs ach ma tha barrachd air 100 post ann. Ma tha thu airson ’s gun toir am feart seo sùil a-rithist air faclan a tha ’nam faclan cumanta an-dràsta, feumaidh tu an t&#8209;inneacs a thogail as ùr.',
	'CONFIRM_SEARCH_BACKEND'	=> 'An e ’s gu bheil thu airson backend luirg eile a chleachdadh? Nuair a dh’atharraicheas tu backend an luirg, feumaidh tu inneacs a thogail dhan fhear ùr. ’S urrainn dhut inneacs an seann backend a sguabadh às cuideachd mur eil thu airson tilleadh dha ach an sàbhail thu goireasan an t&#8209;siostaim.',
	'CONTINUE_DELETING_INDEX'	=> 'Lean air adhart le toirt air falbh an inneics a thòisich thu roimhe',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Chaidh tòiseachadh air inneacs a thoirt air falbh. Feumaidh tu a choileanadh no sgur dheth mus fhaigh thu a-steach do dhuilleag nan inneacsan luirg a-rithist.',
	'CONTINUE_INDEXING'	=> 'Lean air adhart leis an inneacsadh a thòisich thu roimhe',
	'CONTINUE_INDEXING_EXPLAIN'	=> 'Chaidh tòiseachadh air inneacs a thogail. Feumaidh tu a choileanadh no sgur dheth mus fhaigh thu a-steach do dhuilleag nan inneacsan luirg a-rithist.',
	'CREATE_INDEX'	=> 'Tog inneacs',
	'DELETE_INDEX'	=> 'Sguab às an inneacs',
	'DELETING_INDEX_IN_PROGRESS'	=> 'A’ sguabadh às inneacs',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Tha backend an luirg a’ glanadh an inneics an-dràsta. Feumaidh gun toir seo mionaid no dhà.',
	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Chan urrainn dhut backend MySQL fulltext a cleachdadh ach le MySQL4 no as àirde.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'	=> 'Chan urrainn dhut inneacs MySQL fulltext a chleachdadh ach le clàran MyISAM no InnoDB. Tha MySQL 5.6.4 no tionndadh as ùire riatanach airson inneacsan fulltext air clàran InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'	=> 'Àireamh iomlan nam postaichean san inneacs',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Cha dèid ach faclan aig a bheil an àireamh seo de charactaran air a char as lugha a chur ri inneacs an luirg. Chan urrainn dhut fhèin no an t&#8209;òstair agad an roghainn seo atharrachadh ach san rèiteachadh mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Cha dèid ach faclan aig a bheil an àireamh seo de charactaran air a char as motha a chur ri inneacs an luirg. Chan urrainn dhut fhèin no an t&#8209;òstair agad an roghainn seo atharrachadh ach san rèiteachadh mysql.',
	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Cha ghabh am backend PostgreSQL fulltext cleachdadh ach le PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Àireamh iomlan de phostaichean air an inneacs',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Tionndadh PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Pròifil rèiteachaidh aig an lorg teacsa:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'An fhaide as giorra aig faclan-luirg',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'An fhaide as fhaide aig faclan-luirg',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Tha a’ backend luirg seo feumach air PostgreSQL tionndadh 8.3 no as ùire.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Am pròifil rèiteachaidh aig an lorg teacsa a thèid a chleachdadh gus am parsair ‘s am faclair a shònrachadh.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Thèid faclan aig a bheil an àireamh de charactaran seo air a char as lugha a ghabhail a-steach air ceist dhan stòr-dàta.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Thèid faclan aig a bheil an àireamh de charactaran seo air a char as motha a ghabhail a-steach air ceist dhan stòr-dàta.',
	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Rèitich na roghainnean a leanas gus faidhle rèiteachaidh sphinx a ghintinn',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Slighe gu phasgan an dàta',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Thèid a cleachdadh gus na h-inneacsan ’s faidhlichean loga a stòradh. Bu chòir dhut am pasgan seo a chruthachadh taobh a-muigh nam pasganan a ghabhas ruigsinn on lìon. (bu choir do “/” a bhith aig an deireadh)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'An àireamh de phostaichean san inneacs delta a tha ’ga ùrachadh gu tric',
	'FULLTEXT_SPHINX_HOST'					=> 'Òstair aig an daemon luirg Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'An t-òstair air an èist an daemon luirg sphinx (searchd). Fàg bàn e gus an òstair tùsail “localhost” a chleachdadh',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Crìochan cuimhne an inneal-inneacsaidh',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Bu chòir dhan àireamh seo a bhith nas lugha na an RAM a tha ri làimh air an uidheam agad an-còmhnaidh. Ma bhios duilgheadasan agad leis an dèanadas gu tric, ’s math dh’fhaoidte gun caith an t-inneal-inneacsaidh cus ghoireasan. Faodaidh e bhith ’na bhuannachd ma lùghdaicheas tu na tha a chuimhne ri làimh aig an inneal-inneacsaidh.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'An àireamh de phostaichean sa phrìomh inneacs',
	'FULLTEXT_SPHINX_PORT'					=> 'Port aig an daemon luirg sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Am port air an èist  an daemon luirg sphinx (searchd). Fàg bàn e gus am port tùsail “9312” aig a’ Sphinx API a chleachdadh',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Cha chuir an lorg sphinx airson phpBB taic ach do MySQL ’s PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Faidhle rèiteachaidh Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'An t-susbaint aig an fhaidhle rèiteachaidh sphinx a chaidh a ghintinn. Feumaidh tu an dàta seo a chur san fhaidhle sphinx.conf a chleachdas an daemon luirg sphinx. Cuir fiosrachadh dearbhaidh an stòir-dhàta agad fhèin an àite [dbuser] agus [dbpassword].',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Cha deach na slighean dha na pasganan dàta ’s rèiteachaidh aig sphinx a mhìneachadh. Sònraich iad ach an gabh am faidhle rèiteachaidh a ghintinn.',
	'GENERAL_SEARCH_SETTINGS'	=> 'Roghainnean coitcheann an luirg',
	'GO_TO_SEARCH_INDEX'	=> 'Till gu duilleag inneacs an luirg',
	'INDEX_STATS'	=> 'Stadaistearachd an inneics',
	'INDEXING_IN_PROGRESS'	=> 'Tha inneacs ’ga thogail',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Tha backend an luirg a’ togail inneacs airson na h&#8209;uile post air a’ bhòrd. Faodaidh seo toirt beagan mhionaidean no uairean a thìde a-rèir meud a’ bhùird agad.',
	'LIMIT_SEARCH_LOAD'	=> 'Crìoch eallach an t&#8209;siostaim airson duilleag an luirg',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Ma thèid eallach 1 mhionaid an t&#8209;siostaim thar an luach seo, thèid duilleag an luirg a thoirt far loidhne. Tha 1.0 co-ionnann ri cleachdadh de ~100% air aon phròiseasar. Chan obraich seo ach air frithealaichean stèidhichte air UNIX.',
	'MAX_SEARCH_CHARS'	=> 'An àireamh as motha de charactaran a thèid inneacsadh leis an lorg',
	'MAX_SEARCH_CHARS_EXPLAIN'	=> 'Thèid faclan inneacsadh airson an luirg anns nach eil barrachd charactaran na seo.',
	'MAX_NUM_SEARCH_KEYWORDS'	=> 'An àireamh as motha de dh’fhaclan-luirg a bhios ceadaichte',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'An àireamh as motha de dh’fhaclan airson a dh’fhaodas cleachdaiche a lorg. Cha bhi cuingeachadh aig an uiread a dh’fhaclan ma shuidhicheas tu an luach seo air 0.',
	'MIN_SEARCH_CHARS'	=> 'An àireamh as lugha de charactaran a thèid inneacsadh leis an lorg',
	'MIN_SEARCH_CHARS_EXPLAIN'	=> 'Thèid faclan inneacsadh airson an luirg sa bheil an àireamh seo de charactaran air a char as lugha.',
	'MIN_SEARCH_AUTHOR_CHARS'	=> 'An àireamh as lugha de charactaran ann an ainm an ùghdair',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Seo an àireamh de charactaran a dh’fheumas cleachdaiche a chur a-steach nuair a lorgas e airson ùghdar le saorag. Ma tha far-ainm an ùghdair nas giorra na seo, gabhaidh lorg airson postaichean an ùghdair fhathast le fhar-ainm slàn.',
	'PROGRESS_BAR'	=> 'Bàr an adhartais',
	'SEARCH_GUEST_INTERVAL'	=> 'Eadaramh tuile an luirg airson aoighean',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Co mheud diog a dh’fheumas aoighean feitheamh mus fhaod iad lorg a-rithist. Ma tha an dàrna aoigh a lorg, feumaidh càch a’ feitheamh gus an do dh’fhalbh an t&#8209;eadaramh.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Tha a h&#8209;uile post gu ruige id %2$d air an inneacs a-nis is %1$d dhiubh leis a’ cheum seo.<br />',
		2	=> 'Tha a h&#8209;uile post gu ruige id %2$d air an inneacs a-nis is %1$d dhiubh leis a’ cheum seo.<br />',
		3	=> 'Tha a h&#8209;uile post gu ruige id %2$d air an inneacs a-nis is %1$d dhiubh leis a’ cheum seo.<br />',
		4	=> 'Tha a h&#8209;uile post gu ruige id %2$d air an inneacs a-nis is %1$d dhiubh leis a’ cheum seo.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> '’S e mu %1$.1f phost gach diog a tha san reat inneacsaidh an-dràsta.<br />A’ togail inneacs…',
		2	=> '’S e mu %1$.1f phost gach diog a tha san reat inneacsaidh an-dràsta.<br />A’ togail inneacs…',
		3	=> '’S e mu %1$.1f postaichean gach diog a tha san reat inneacsaidh an-dràsta.<br />A’ togail inneacs…',
		4	=> '’S e mu %1$.1f post gach diog a tha san reat inneacsaidh an-dràsta.<br />A’ togail inneacs…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Tha a h&#8209;uile post gu ruige id %2$d air toirt air falbh on inneacs a-nis.<br />A’ sguabadh às an inneics…',
		2	=> 'Tha a h&#8209;uile post gu ruige id %2$d air toirt air falbh on inneacs a-nis.<br />A’ sguabadh às an inneics…',
		3	=> 'Tha a h&#8209;uile post gu ruige id %2$d air toirt air falbh on inneacs a-nis.<br />A’ sguabadh às an inneics…',
		4	=> 'Tha a h&#8209;uile post gu ruige id %2$d air toirt air falbh on inneacs a-nis.<br />A’ sguabadh às an inneics…',
	),
	'SEARCH_INDEX_CREATED'	=> 'Chaidh gach post ann an stòr-dàta a’ bhùird a chur san inneacs.',
	'SEARCH_INDEX_REMOVED'	=> 'Chaidh inneacs an luirg airson a’ backend seo a sguabadh às.',
	'SEARCH_INTERVAL'	=> 'Eadaramh tuile an luirg airson buill',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'Co mheud diog a dh’fheumas ball feitheamh mus fhaod e lorg a-rithist. Thèid an t&#8209;eadaramh a dhearbhadh gu sònraichte airson gach buill fa leth.',
	'SEARCH_STORE_RESULTS'	=> 'Faide an tasgadain aig toradh luirg',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Falbhaidh an ùine air toraidhean luirg san tasgadan às dèidh an àireamh de dhiogan seo. Suidhich seo air 0 ma tha thu airson tasgadan an luirg a chur à comas.',
	'SEARCH_TYPE'	=> 'Backend an luirg',
	'SEARCH_TYPE_EXPLAIN'	=> 'Leigidh phpBB leat gun tagh thu am backend a thèid a chleachdadh gus lorg airson teacsa sna postaichean. Thèid an lorg fulltext aig phpBB fhèin a chleachdadh a ghnàth.',
	'SWITCHED_SEARCH_BACKEND'	=> 'Dh’atharraich thu backend an luirg. Bu chòir dhut dèanamh cinnteach gu bheil inneacs ann airson a’ backend a thagh thu ach an gabh am backend luirg ùr a chleachdadh.',
	'TOTAL_WORDS'	=> 'Àireamh iomlan nam faclan san inneacs',
	'TOTAL_MATCHES'	=> 'Àireamh iomlan nan ceanglaichean eadar faclan is postaichean san inneacs',
	'YES_SEARCH'	=> 'Cuir feart an luirg an comas',
	'YES_SEARCH_EXPLAIN'	=> 'Faodaidh buill feart an luirg a chleachdadh, a’ gabhail a-steach lorg airson ball.',
	'YES_SEARCH_UPDATE'	=> 'Cuir ùrachadh fulltext an comas',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Thèid inneacsan fulltext ùrachadh leis gach postadh. Cha dèid seo a dhèanamh idir fhad ’s a bhios feart an luirg à comas.',
));
