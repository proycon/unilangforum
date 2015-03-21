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
	'ADDED_PROFILE_FIELD'	=> 'Tha thu air raon pròifil gnàthaichte a chur ris.',
	'ALPHA_DOTS'			=> 'Àireamhan, litrichean gun sràc is puingean',
	'ALPHA_ONLY'	=> 'Àireamhan is litrichean gun sràc a-mhàin',
	'ALPHA_SPACERS'	=> 'Àireamhan, litrichean gun sràc is beàrnan',
	'ALPHA_UNDERSCORE'		=> 'Àireamhan, litrichean gun sràc is fo-loidhnichean',
	'ALPHA_PUNCTUATION'		=> 'Àireamhan ’s litrichean gun sràc le cromagan, puingean, fo- loidhnichean ’s sgrìoban a thòisicheas le litir',
	'ALWAYS_TODAY'	=> 'An ceann-là làitheach an-còmhnaidh',
	'BOOL_ENTRIES_EXPLAIN'	=> 'Cuir na roghainnean agad a-steach an-dràsta',
	'BOOL_TYPE_EXPLAIN'	=> 'Sònraich an seòrsa, seo bogsa-cromaige no putanan rèidio. Cha dèid bogsa-cromaige a shealltainn ach ma tha cromag ris airson ball sònraichte. Ma thachras seo, thèid an roghainn cànain <strong>eile</strong> a chleachdadh. Thèid putanan rèidio a shealltainn ge b’ e dè an luach a th’ orra.',
	'CHANGED_PROFILE_FIELD'	=> 'Tha thu air raon pròifil gnàthaichte atharrachadh.',
	'CHARS_ANY'	=> 'Caractar sam bith',
	'CHECKBOX'	=> 'Bogsa-cromaige',
	'COLUMNS'	=> 'Colbhan',
	'CP_LANG_DEFAULT_VALUE'	=> 'Luach tùsail',
	'CP_LANG_EXPLAIN'	=> 'Tuairisgeul an raoin',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Seo am mìneachadh a thèid a shealltainn dhan chleachdaiche airson an raoin seo.',
	'CP_LANG_NAME'	=> 'Ainm/Tiotal an raoin a thèid a shealltainn dhan chleachdaiche',
	'CP_LANG_OPTIONS'	=> 'Roghainnean',
	'CREATE_NEW_FIELD'	=> 'Cruthaich raon ùr',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Tha raon pròifil gnàthaichte no dhà ann nach deach eadar-theangachadh fhathast. Briog air a’ cheangal “Eadar-theangaich” gus am fiosrachadh riatanach a chur a-steach.',
	'DEFAULT_ISO_LANGUAGE'	=> 'Cànan tùsail [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Cha deach na h&#8209;innteartan cànain airson a’ chànain thùsail a lìonadh airson an raoin pròifil seo.',
	'DEFAULT_VALUE'	=> 'Luach tùsail',
	'DELETE_PROFILE_FIELD'	=> 'Thoir raon pròifil air falbh',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'An e ’s gu bheil thu airson an raon pròifil seo a sguabadh às?',
	'DISPLAY_AT_PROFILE'	=> 'Seall ann an gnìomhan nam ball',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> '’S urrainn dhan bhall an raon pròifil seo atharrachadh ann an gnìomhan nam ball.',
	'DISPLAY_AT_REGISTER'	=> 'Seall air duilleag a’ chlàraidh',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Thèid an raon a shealltainn leis a’ chlàradh ma bhios an roghainn seo an comas.',
	'DISPLAY_ON_MEMBERLIST'			=> 'Seall air liosta nam ball',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> 'Ma tha an roghainn seo an comas, thèid an raon a shealltainn air ràghan a’ chleachdaiche air liosta nam ball.',
	'DISPLAY_ON_PM'					=> 'Seall le teachdaireachdan pearsanta',
	'DISPLAY_ON_PM_EXPLAIN'			=> 'Ma tha an roghainn seo air, thèid an raon seo a shealltainn sa mheanbh-phròifil le teachdaireachdan pearsanta.',
	'DISPLAY_ON_VT'	=> 'Seall air duilleagan cuspair',
	'DISPLAY_ON_VT_EXPLAIN'	=> 'Thèid an raon a shealltainn sa phròifil bheag air duilleagan cuspair ma bhios an roghainn seo an comas.',
	'DISPLAY_PROFILE_FIELD'	=> 'Seall an raon pròifil gu poblach',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Thèid an raon pròifil a shealltainn anns gach àite far an deach a cheadachadh sna roghainnean luchdaidh. Ma chuireas tu seo air “Chan eadh”, cha dèid an raon a shealltainn air duilleagan cuspair, pròifilean no liosta nam ball.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Cuir na roghainnean agad an-steach an-dràsta, gach roghainn air loidhne fa leth.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Thoir an aire gum faod thu teacsa nan roghainnean atharrachadh is roghainnean ùra a chur ris an deireadh. Cha mholamaid gun cuir thu roghainnean ùra eadar dà roghainn a tha ann mar-thà – dh’fhaoidte gun dèid na roghainnean cearra a shònrachadh dha na buill agad mar thoradh air sin. Faodaidh a leithid rud tachair cuideachd ma bheir thu roghainn air falbh on mheadhan. Ma bheir thu roghainn air falbh on deireadh, thèid am bun-roghainn aiseag dha na buill a thagh an roghainn ud.',
	'EMPTY_FIELD_IDENT'	=> 'Tha aithnichear an raoin falamh',
	'EMPTY_USER_FIELD_NAME'	=> 'Cuir a-steach ainm/tiotal an raoin',
	'ENTRIES'	=> 'Innteartan',
	'EVERYTHING_OK'	=> 'A h&#8209;uile rud mar bu chòir',
	'FIELD_BOOL'	=> 'Boolean (Seadh/Chan eadh)',
	'FIELD_CONTACT_DESC'		=> 'Tuairisgeul a’ chonaltraidh',
	'FIELD_CONTACT_URL'			=> 'Ceangal a’ chonaltraidh',
	'FIELD_DATE'	=> 'Ceann-là',
	'FIELD_DESCRIPTION'	=> 'Tuairisgeul an raoin',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Seo am mìneachadh a thèid a shealltainn dhan chleachdaiche airson an raoin seo.',
	'FIELD_DROPDOWN'	=> 'Bogsa teàrnaidh',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'	=> 'Aithnichear an raoin',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Tha aithnichear an raoin a thagh thu ann mar-thà. Feuch an tagh thu ainm eile.',
	'FIELD_IDENT_EXPLAIN'	=> '’S e ainm a th’ ann an aithnichear an raoin a thèid a chleachdadh gus an raon pròifil aithneachadh san stòr-dàta agus sna teamplaidean.',
	'FIELD_INT'	=> 'Àireamhan',
	'FIELD_IS_CONTACT'			=> 'Seall an raon ’na raon conaltraidh',
	'FIELD_IS_CONTACT_EXPLAIN'	=> 'Thèid raointean conaltraidh a shealltainn ann an earrann conaltraidh aig pròifil a’ chleachdaiche ’s thèid an sealltainn ann an dòigh shònraichte sa mheanbh-phròifil ri taobh phostaichean ’s theachdaireachdan pearsanta. Faodaidh tu <samp>%s</samp> a chleachdadh ’na ghlèidheadair-àite ach an dèid na chuir an cleachdaiche ann a chur ’na àite.',
	'FIELD_LENGTH'	=> 'Faide a’ bhogsa ion-chuir',
	'FIELD_NOT_FOUND'	=> 'Cha deach an raon pròifil a lorg.',
	'FIELD_STRING'	=> 'Raon teacsa aon loidhne',
	'FIELD_TEXT'	=> 'Raon teacsa ioma-loidhne',
	'FIELD_TYPE'	=> 'Seòrsa an raoin',
	'FIELD_TYPE_EXPLAIN'	=> 'Chan urrainn dhut seòrsa an raoin atharrachadh an uairsin.',
	'FIELD_URL'					=> 'URL (ceangal)',
	'FIELD_VALIDATION'	=> 'Dearbhadh an raoin',
	'FIRST_OPTION'	=> 'A’ chiad roghainn',
	'HIDE_PROFILE_FIELD'	=> 'Falaich an raon pròifil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Na seall an raon pròifil ach dhan bhall fhèin, na rianairean is na maoir. Ma tha an roghainn “Seall ann an gnìomhan nam ball” à comas, chan fhaic an cleachdaiche fhèin an raon seo ’s chan urrainn dhan raon atharrachadh ach rianaire.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Chan fhaod ach litrichean beaga a-z is _ a bhith ann an aithnichear raoin',
	'INVALID_FIELD_IDENT_LEN'	=> 'Chan fhaod aithnichear raoin a bhith nas fhaide na 17 caractaran',
	'ISO_LANGUAGE'	=> 'Cànan [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'Roghainnean sònraichte dhan chànan [<strong>%s</strong>]',
	'LETTER_NUM_DOTS'			=> 'Litrichean, àireamhan ’s puingean',
	'LETTER_NUM_ONLY'			=> 'Litrichean ’s àireamhan',
	'LETTER_NUM_PUNCTUATION'	=> 'Litrichean, àireamhan, cromagan, puingean, fo-loidhnichean ’s sgrìoban a thòisicheas le litir',
	'LETTER_NUM_SPACERS'		=> 'Litrichean, àireamhan ’s beàrnan',
	'LETTER_NUM_UNDERSCORE'		=> 'Litrichean, àireamhan, ’s fo-loidhnichean',
	'MAX_FIELD_CHARS'	=> 'An àireamh as motha de charactaran',
	'MAX_FIELD_NUMBER'	=> 'An àireamh as àirde a tha ceadaichte',
	'MIN_FIELD_CHARS'	=> 'An àireamh as lugha de charactaran',
	'MIN_FIELD_NUMBER'	=> 'An àireamh as ìsle a tha ceadaichte',
	'NO_FIELD_ENTRIES'	=> 'Cha deach innteart a shònrachadh.',
	'NO_FIELD_ID'	=> 'Cha deach aithnichear raoin a shònrachadh.',
	'NO_FIELD_TYPE'	=> 'Cha deach seòrsa an raoin a shònrachadh.',
	'NO_VALUE_OPTION'	=> 'Roghainn nach eil ’na innteart',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Luach airson rud nach eil ’na innteart. Ma tha an raon riatanach, gheibh an cleachdaiche mearachd ma thaghas e an roghainn seo.',
	'NUMBERS_ONLY'	=> 'Àireamhan a-mhàin (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'Roghainnean bunasach',
	'PROFILE_FIELD_ACTIVATED'	=> 'Tha thu air an raon pròifil a ghnìomhachadh.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Tha thu air an raon pròifil a chur à gnìomh.',
	'PROFILE_LANG_OPTIONS'	=> 'Roghainnean sònraichte dhan chànan',
	'PROFILE_TYPE_OPTIONS'	=> 'Roghainnean sònraichte dhan t&#8209;seòrsa pròifil',
	'RADIO_BUTTONS'	=> 'Putanan rèidio',
	'REMOVED_PROFILE_FIELD'	=> 'Tha thu air an raon pròifil a thoirt air falbh.',
	'REQUIRED_FIELD'	=> 'Raon riatanach',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Sparr air a’ bhall no rianaire gun lìon e no gun sònraich e an raon pròifil. Ma tha “Seall air duilleag a’ chlàraidh” à comas, cha dèid an raon iarraidh ach nuair a dheasaicheas am ball a’ phròifil aige.',
	'ROWS'	=> 'Ràghan',
	'SAVE'	=> 'Sàbhail',
	'SECOND_OPTION'	=> 'Roghainn eile',
	'SHOW_NOVALUE_FIELD'	=> 'Seall an raon mur deach luach a thaghadh',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Sònraichidh seo an dèid an raon pròifil a shealltainn mur deach luach a thaghadh airson raon roghainneil no mur deach luach a thaghadh fhathast airson raon riatanach.',
	'STEP_1_EXPLAIN_CREATE'	=> '’S urrainn dhut na ciad paramadairean bunasach airson an raoin pròifil ùr agad a chur a-steach an-seo. Tha feum air am fiosrachadh seo san dàrna ceum far an urrainn dhut na roghainnean a tha air fhàgail a shuidheachadh is barrachd gleus a chur air an raon pròifil agad.',
	'STEP_1_EXPLAIN_EDIT'	=> '’S urrainn dhut na paramadairean bunasach airson an raoin pròifil agad atharrachadh an-seo. Thèid na roghainnean iomchaidh àireamhachadh dhut leis an dàrna ceum.',
	'STEP_1_TITLE_CREATE'	=> 'Cuir raon pròifil ris',
	'STEP_1_TITLE_EDIT'	=> 'Deasaich an raon pròifil',
	'STEP_2_EXPLAIN_CREATE'	=> '’S urrainn dhut roghainnean coitcheann a shònrachadh an-seo a bu toil leat gleus a chur orra, ’s dòcha.',
	'STEP_2_EXPLAIN_EDIT'	=> '’S urrainn dhut roghainnean coitcheann atharrachadh an-seo.<br /><strong>Thoir an aire nach bi buaidh aig na h&#8209;atharraichean aig raointean pròifil air na raointean pròifil a bhios na buill agad air lìonadh mar-thà.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Roghainnean sònraichte dhan t&#8209;seòrsa pròifil',
	'STEP_2_TITLE_EDIT'	=> 'Roghainnean sònraichte dhan t&#8209;seòrsa pròifil',
	'STEP_3_EXPLAIN_CREATE'	=> 'On a tha iomadh cànan agad stàlaichte air a’ bhòrd-bhrath, feumaidh tu na nithean cànain a bhios air am fàgail a lìonadh cuideachd. Obraichidh an raon pròifil leis a’ chànan tùsail an comas is faodaidh tu na nithean cànain eile air am fàgail a lìonadh uair sam bith eile.',
	'STEP_3_EXPLAIN_EDIT'	=> 'On a tha iomadh cànan agad stàlaichte air a’ bhòrd-bhrath, ’s urrainn dhut na nithean cànain a bhios air am fàgail atharrachadh no a chur ris cuideachd. Obraichidh an raon pròifil leis a’ chànan tùsail an comas.',
	'STEP_3_TITLE_CREATE'	=> 'Eadar-theangachaidhean air am fàgail',
	'STEP_3_TITLE_EDIT'	=> 'Eadar-theangachaidhean',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Cuir a-steach abairt thùsail a thèid a shealltainn mar bhun-roghainn. Fàg seo bàn ma tha thu airson a shealltainn falamh sa chiad dol a-mach.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Cuir a-steach teacsa tùsail a thèid a shealltainn mar bhun-roghainn. Fàg seo bàn ma tha thu airson a shealltainn falamh sa chiad dol a-mach.',
	'TRANSLATE'	=> 'Eadar-theangaich',
	'USER_FIELD_NAME'	=> 'Ainm/tiotal an raoin a thèid a shealltainn dhan chleachdaiche',
	'VISIBILITY_OPTION'	=> 'Roghainnean faicsinneachd',
));
