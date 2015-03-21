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
$help = array(
	array(
		0	=> '--',
		1	=> 'Trioblaidean le clàradh ⁊ logadh a-steach',
	),
	array(
		0	=> 'Carson a dh’fheumas mi clàradh?',
		1	=> '’S mathaid nach fheum, tha seo a’ crochadh air roghainnean a rinn an rianaire ma tha agad ri clàradh mus urrainn dhut post a sgrìobhadh. Gheibh thu cothrom air barrachd feartan a leithid avatar, teachdaireachdan persanta, post-d gu buill eile, a’ dol ’nad bhall ann am buidheann, agus msaa. Cha leig thu leas ach greiseag a chur seachad airson clàradh agus mholamaid gun dèan thu seo.',
	),
	array(
		0	=> 'Dè th’ ann an COPPA?',
		1	=> '’S e lagha sna Stàitean Aonaichte a th’ ann an COPPA, no <em>Child Online Privacy and Protection Act</em> o 1998, a dh’iarras do làraichean-lìn a bhios comasach air fiosrachadh a chruinneachadh mu mhion-aoisich a tha nas òige na 13 bliadhna a dh’aois aontachadh sgrìobhte fhaighinn o am pàrantan air neoho seòrsa eile de neach-dìona laghail a cheadaicheas cruinneachadh fiosrachaidh leis a ghabhas cuideigin aithneachadh bho mhion-aoiseach fo 13 bliadhna a dh’aois. Ma tha thu mì-chinnteach co dhiubh a bhuineas seo riut no nach buin nuair a nì thu clàradh, faigh taic o neach-lagha mu dheidhinn. Thoir an aire nach urrainn do phpBB Limited no an fheadhainn leis a bheil am bòrd-brath seo stiùireadh laghail a thoirt dhut agus chan eil e freagarrach ceistean a thoirt dhaibh mu chùisean laghail sam bith seach ann an dòigh a thathar a’ mìneachadh sa cheist “Cò dha a chuireas mi fios mu chùisean laghail no droch-chainnt co-cheangailte ris a’ bhòrd seo?”.',
	),
	array(
		0	=> 'Carson nach urrainn dhomh clàradh?',
		1	=> '’S mathaid gun do chuir rianaire a’ bhùird clàradh à comas ach nach faigh saoine ùra cunntas. ’S mathaid cuideachd gun deach an seòladh IP agad a thoirmeasg leis an rianaire air neo nach eil am far-ainm a tha thu a’ feuchainn ri clàradh ceadaichte. Cuir fios gu rianaire airson taic fhaighinn.',
	),
	array(
		0	=> 'Rinn mi clàradh ach chan urrainn dhomh logadh a-steach!',
		1	=> 'Air a’ chiad dol a-mach, dearbh am far-ainm is am facal-faire agad. Ma tha iad ceart, ’s dòcha gu bheil aon dhen dà rud a leanas a’ tachairt: Ma tha taic COPPA an comas is ma shònraich thu gu bheil thu nas òige na 13 bliadhna a dh’aois nuair a rinn thu clàradh, feumaidh tu leantainn air adhart leis na mìneachaidhean a fhuair thu. A bharrachd air sin, tha bùird-brath ann far am feum an cunntas agad a bhith air a ghnìomhachadh le rianaire air neo leatsa fhèin mus urrainn dhut logadh a-steach; fhuair thu fiosrachadh mu seo nuair a chlàraich thu. Ma fhuair thu post-d, lean air adhart leis na mìneachaidhean ann. Mur d’ fhuair thu post-d, ’s dòcha gun do shònraich thu seòladh puist-d cearr air neo gun deach a ghlacadh le criathrag spama. Ma tha thu cinnteach gun do shònraich thu an seòladh puist-d mar bu chòir, feuch an cuir thu fios gu rianaire.',
	),
	array(
		0	=> 'Carson nach urrainn dhomh logadh a-steach?',
		1	=> '’S urrainn dhan trioblaid seo a nochdadh air adhbharan diofraichte. Air an darna làimh, dèan cinnteach gun do chleachd thu am far-ainm agus am facal-faire ceart. Ma chleachd, cuir fios gu rianaire a’ bhùird gus faighinn a-mach nach deach do thoirmeasg. ’S mathaid gun do rinn rianaire mearachd rian-coimpiutair a dh’fheumas e fhèin a chàradh.',
	),
	array(
		0	=> 'Chlàraich mi o chionn greis ach chan urrainn dhomh logadh a-steach tuilleadh?!',
		1	=> '’S mathaid gun do chuir rianaire an cunntas agad à gnìomh air neo gun do sguab e às air adhbhar air choreigin. A bharrachd air sin, sguabaidh mòran bhòrd-bhrath às buill nach eil air sgrìobhadh o chionn fhada gus meud an stòr-dàta a chumail beag. Ma thachair seo, feuch gun clàraich thu a-rithist is gun gabh thu pàirt sna deasbadan nas cunbhalaiche.',
	),
	array(
		0	=> 'Chaill mi am facal-faire agam!',
		1	=> 'Air do shocair! Ged nach gabh am facal-faire agad fhaighinn on stòr-dàta, gheibh thu fear ùr gun trioblaid sam bith. Rach dhan duilleag logaidh a-steach agus tagh <em>Dhìochuimhnich mi am facal-faire agam</em>. Lean air a’ mhìneachadh is nach fhada gus am faigh thu a-steach a-rithist.<br />Co-dhiù, mur dèid leat am facal-faire agad ath-shuidheachadh, cuir fios gu rianaire a’ bhùird',
	),
	array(
		0	=> 'Carson a thèid mo logadh a-mach gu fèin-obrachail?',
		1	=> 'Mur cuir thu cromag sa bhogsa <em>Cuimhne orm</em> nuair a logas tu a-steach, cha chum am bòrd-brath logte a-steach thu ach airson ùine ro-shuidhichte. Cuiridh seo bacadh air mì-chleachdadh a’ chunntais agad. Ma tha thu airson ’s nach dèid do logadh a-mach, cuir cromag sa bhogsa <em>Cuimhne orm</em> aig an àm a bhios tu a’ logadh a-steach. Cha mholamaid seo idir ma tha thu a’ co-phàirteachadh an coimpiutair agad le daoine eile, m.e. ann an leabharlann, cafaidh eadar-lìn, complann oilthigh, agus msaa. Mur faic thu am bogsa-cromaige seo, is ciall dha seo gun do chuir an rianaire am feart seo à comas.',
	),
	array(
		0	=> 'Dè nì “Sguab às gach briosgaid a’ bhùird”?',
		1	=> 'Sguabaidh “Sguab às gach briosgaid a’ bhùird” às na briosgaidean a chaidh a chruthachadh le phpBB ach am mair an logadh a-steach agad air a’ bhùird-bhrath. A bharrachd air sin, bheir na briosgaidean seachad feartan mar cuimhneachadh dè na postaichean a tha thu air leughadh ma chuir rianaire a’ bhùird an comas iad. Ma tha trioblaidean agad le logadh a-steach no a-mach, ’s mathaid gun ghabh seo a chàradh le sguabadh às nam briosgaidean.',
	),
	array(
		0	=> '--',
		1	=> 'Roghainnean ⁊ Gnìomhan nam ball',
	),
	array(
		0	=> 'Ciamar a dh’atharraicheas mi na roghainnean agam?',
		1	=> 'Ma tha thu nad bhall clàraichte, thèid a h&#8209;uile roghainn agad a chumail ann an stòr-dàta a’ bhùird. Rach gu “Gnìomhan nam ball” gus an atharrachadh; gheibh thu ceangal air an son fo d’ fhar-ainm air ceann na duilleige. Faodaidh tu na h&#8209;uile roghainn agad atharrachadh an-siud.',
	),
	array(
		0	=> 'Ciamar a chumas mi m’ fhar-ainm far na liostaichean cò tha air loidhne?',
		1	=> 'Rach gu “Gnìomhairean nam ball” is “Roghainnean a’ bhùird” is chì thu an roghainn <em>Cuir m’ inbhe air loidhne am falach</em>. Cuir an roghainn seo air agus chan fhaic duine sam bith thu ach na rianairean, na maoir agus thu fhèin. Thèid do chunntadh nad bhall falaichte.',
	),
	array(
		0	=> 'Tha na h&#8209;amannan cearr!',
		1	=> '’S mathaid gun dèid àm a shealltainn nach eil a’ freagairt ris an roinn-tìde sa bheil thu. Mas e seo a tha a’ tachairt, rach gu “Gnìomhan nam ball” – “Roghainnean a’ bhùird” agus tagh an roinn-tìde a fhreagras ris an àite far a bheil thu, m.e. Lunnainn, Paras, Nuadh Eabhrach, Sidni, agus msaa. Thoir an aire nach urrainn dhut an roghainn seo atharrachadh  – a leithid cheudna leis a’ mhòrchuid de na roghainnean eile – mur eil thu nad bhall clàraichte. Mur eil thu air do chlàradh fhathast, seo deagh àm gus seo a dhèanamh.',
	),
	array(
		0	=> 'Tha mi air an roinn-tìde atharrachadh agus tha na h&#8209;ammanan cearr fhathast!',
		1	=> 'Ma tha thu cinnteach gun do thagh thu an roinn-tìde agad mar bu chòir agus ma tha na h&#8209;amannan cearr fhathast, tha tìde gleoc an fhrithealaiche cearr. Cuir fios gu rianaire ach an cuir esan gu ceart e.',
	),
	array(
		0	=> 'Chan fhaic mi an cànan agam air an liosta!',
		1	=> 'Cha do stàlaich rianaire an cànan agad air neo cha deach am bòrd seo eadar-theangachadh gun chànan agad. Feuch iarraidh do rianaire pacaid a’ chànain a tha a dhìth ort a stàladh. Mur eil pacaid a’ chànain agad ri fhaighinn, faodaidh tu fhèin eadar-theangachadh a dhèanamh ma thogras tu. Gheibh thu barrachd fiosrachaidh mu dheidhinn air làrach-lìn <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	),
	array(
		0	=> 'Dè tha san dà dhealbh ri taobh m’ fhar-ainm?',
		1	=> 'Tha dà dhealbh ann as urrainn nochdadh fo fhar-ainm nuair a choimheadas tu air postaichean. A-rèir stoidhle a’ bhùird a chleachdas tu, ’s mathaid gur e dealbh co-cheangailte ris an rang agad a tha san dàrna fear, mar as trice ann an cruth rionnagan, bhogsaichean neo phuingean, a riochdaicheas co mheud postaichean a tha thu air sgrìobhadh air neo dè an rang a th’ agad air a’ bhùird. ’S e dealbh as motha a tha san fhear eile mar as trice agus canar avatar ris. ’S e dealbh sònraichte a bhuineas ri gach ball gu pearsanta a th’ ann an avatar.',
	),
	array(
		0 => 'Ciamar a sheallas mi avatar?',
		1 => 'San earran “Pròifil” ann an “Gnìomhan nam ball”, ’s urrainn dhut avatar a chur ris ann an aon de na ceithir dòighean seo: Gravatar, gailearaidh, cèin no luchdadh suas. Tha e a’ crochadh air rianaire a’ bhùird co dhiubh a bheil avataran ann no nach eil agus dè an dòigh sam faigh thu iad. Mur urrainn dhut avatar a chleachdadh, cuir fios gu rianaire a’ bhùird.',
 	),
	array(
		0	=> 'Dè an rang agam agus ciamar a dh’atharraicheas mi e?',
		1	=> 'Nochdaidh rangan fo fhar-ainmean agus riochdaichidh iad co mheud post a tha thu air sgrìobhadh air neo suaicheantas buill sònraichte, m.e. maoir agus rianairean. San fharsaingeachd, chan urrainn dhut fhèin briathran raing sam bith atharrachadh air a’ bhòrd o chionn ’s gun stèidhichidh rianaire a’ bhùird iad. Na dèan mì-chleachdadh a’ bhùird a’ sgrìobhadh postaichean gun fheum a dh’aona-ghnothach gus an rang agad a mheudachadh. Chan fhulaing a’ mhòrchuid de bhùird e agus nì maor no rianaire lughdachadh àireamh nam postaichean agad gu simplidh.',
	),
	array(
		0	=> 'Nuair a thèid mi air ceangal gu post-d buill, carson a thèid iarraidh orm gun log mi a-steach?',
		1	=> 'Chan fhaod ach buill clàraichte post-d a chur gu buill eile tro fhoirm post-d a’ bhùird fhèin agus chan fhaodar seo a dhèanamh idir mur an do chuir an rianaire am feart seo an comas. Tha na cuingeachaidhean seo ann gus bacadh a chur air mì-chleachdadh puist-d le luchd-tadhail neo-ainmichte.',
	),
	array(
		0	=> '--',
		1	=> 'A’ sgrìobhadh postaichean',
	),
	array(
		0	=> 'Ciamar a chruthaicheas mi cuspair ann am fòram ’s ciamar a sgrìobhas mi freagairt ann?',
		1	=> 'Gus cuspair ùr a thòiseachadh ann am fòram, briog air “Cuspair ùr”. cur freagairt do chuspair, briog air “Freagair”. ’S mathaid gum bi agad ri clàradh mus urrainn dhut postaichean a sgrìobhadh. Chì thu liosta nan ceadan a th’ agad anns gach fòram air bonn duilleag fòraim no cuspair: “’S urrainn dhut postaichean ùra a chruthachadh san fhòram seo”, “’S urrainn dhut freagairt ri cuspairean san fhòram seo”, agus msaa., mar eisimpleir.',
	),
	array(
		0	=> 'Ciamar a dheasaicheas mi post no sguabas mi às?',
		1	=> 'Mur eil thu nad rianaire no maor, chan fhaod thu ach na postaichean agad fhèin a dheasachadh no a chur às. Airson post a dheasachadh, brùth air a’ phutan “Deasaich” aig a’ phost sin; ’s mathaid nach eil am putan seo ri fhaighinn ach greis sònraichte an dèidh an t&#8209;àm a sgrìobh thu am post. Ma tha cuideigin air freagairt am post agad mu thràth, nuair a thilleas tu dhan chuspair chì thu teacsa beag aig bonn a’ phuist agad a mhìnicheas co mheud turas a chaidh a dheasachadh le ceann-là is ùine ’na chois. Cha nochd seo ach nuair a bhios cuideigin air freagairt agus mur an deach a dheasachadh le rianaire no maor ged as urrainn dhaibhsan teachdaireachd fhàgail carson a dheasaich iad am post ma thogras iad. Thoir an aire nach urrainn dho bhuill chumanta post a sguabadh às ma fhreagair cuideigin mu thràth.',
	),
	array(
		0	=> 'Ciamar a chuireas mi earr-sgrìobhadh ris a’ phost agam?',
		1	=> 'Gus earr-sgrìobhadh a chur ris na postaichean agad, feumaidh tu fear a chruthachadh an toiseach ann an “Gnìomhan nam ball”. Nuair a tha thu air fear a chruthachadh, cuir cromag ann am bogsa <em>Cuir earr-sgrìobhadh ris</em> nuair a bhios tu a’ sgrìobhadh post gus an t&#8209;earr-sgrìobhadh agad a chur ris. A bharrachd air sin, ’s urrainn dhut earr-sgrìobhadh a chur ris na postaichean agad a ghnàth. Dèan taghadh leis a’ phutan-rèidio iomchaidh ann an “Roghainnean a’ bhùird” gus seo a dhèanamh. Ma rinn thu seo, faodaidh tu bacadh a chur air earr-sgrìobhaidh fhathast nuair a sgrìobhas tu post ma bheir thu an cromag air falbh on bhogsa-chromaige.',
	),
	array(
		0	=> 'Ciamar a chruthaicheas mi cunntas-bheachd?',
		1	=> 'Nuair a chruthaicheas tu cuspair ùr air neo a dheasaicheas tu a’ chiad phost ann an cuspair, tagh an taba “Cruthaich cunntas-bheachd” fon uinneag-sgrìobhaidh; mur faic thu seo chan eil na ceadan iomchaidh agad gus cunntas-bheachd a chruthachadh. Sònraich tiotal is dà roghainn air a char as lugha ’s dèan cinnteach gu bheil gach roghainn ann an loidhne fa leth san raon teacsa. A bharrachd air sin, ’s urrainn dhut àireamh nan roghainnean a dh’fhaodas gach ball a thaghadh nuair a bhòtas e a shònrachadh fo “Roghainnean a’ buill”. Cuideachd, ’s urrainn dhut cuingeachadh ùine a thaghadh (bidh 0 gun chuingeachadh) is co mheud turas a dh’fhaodas buill na roghainnean aca atharrachadh.',
	),
	array(
		0	=> 'Carson nach urrainn dhomh barrachd roghainnean a chur ri cunntas-bheachd?',
		1	=> 'Suidhichidh rianaire a’ bhùird cuingeachadh nan roghainnean ann an cunntas-bheachd. Ma tha thu dhen bheachd gu bheil feum agad air barrachd roghainnean na tha ceadaichte, cuir fios gu rianaire a’ bhùird.',
	),
	array(
		0	=> 'Ciamar a dheasaicheas mi cunntas-bheachd no sguabas mi às?',
		1	=> 'Mar phost, cha ghabh cunntas-bheachd deasachadh ach le ùghdar, maor no rianaire. Gus cunntas-bheachd a dheasachadh, deasaich a’ chiad phost aig a’ chuspair; bi an cunntas-bheachd an-còmhnaidh co-cheangailte ris. Mura deach a bhòtadh fhathast, faodaidh buill roghainn sam bith a’ chunntais-bheachd a dheasachadh no a sguabadh às. Co-dhiù, ma chaidh bhòtadh mar-thà, chan fhaod ach maoir is rianairean a dheasachadh no sguabadh às. Cuiridh seo bacadh air atharrachadh nan roghainnean air leth-shlighe nuair a bhios an cunntas-bheachd air a thòiseachadh mar-thà.',
	),
	array(
		0	=> 'Carson nach fhaigh mi a-steach a dh’fhòram?',
		1	=> '’S mathaid nach fhaigh a-steach dhan fhòram a tha thu ag iarraidh ach buill no buidhnean sònraichte. ’S mathaid gu bheil ceadan sònraichte a dhìth ort gus am fòram a shealltainn, postaichean a leughadh no a sgrìobhadh no dad sam bith eile a dhèanamh. Cuir fios gu maor no rianaire ma tha thu airson cead iarraidh.',
	),
	array(
		0	=> 'Carson nach urrainn dhomh ceanglachan a chur ri post?',
		1	=> 'Bheir na rianairean seachad ceadan sònraichte a thaobh cheanglachan airson gach fòram, buidheann no ball. ’S dòcha nach dug an rianaire cead do bhall sam bith ceanglachan a chur ri post san fòram shònraichte far a bheil thu a’ sgrìobhadh air neo chan fhaod ach buidhnean no buill sònraichte ceanglachan a chur ris na postaichean aca. Cuir fios gu rianaire a’ bhùird ma tha thu mì-chinnteach carson nach urrainn dhut ceanglachan a chur ris na postaichean agad.',
	),
	array(
		0	=> 'Carson a fhuair mi rabhadh?',
		1	=> 'Tha riaghailtean sònraichte aig gach rianaire bùird air an làrach-lìn aige. Ma tha thu air riaghailt a bhriseadh, ’s mathaid gum faigh thu rabhadh. Thoir an aire gur e co-dhùnadh an rianaire a th’ ann seo ’s nach eil gnothach aig phpBB Limited ri rabhaidhean air an làrach-lìn seo ann an dòigh sam bith. Cuir fios gu rianaire a’ bhùird ma tha thu mì-chinnteach carson a fhuair thu rabhadh.',
	),
	array(
		0	=> 'Ciamar nì mi gearan mu phost?',
		1	=> 'Ma thug rianaire a’ bhùird cead seachad air a shon, thèid putan a shealltainn dhut gus gearan a dhèanamh leis an dearbh phost seo. Cleachd am putan seo agus lean air adhart leis na mìneachaidhean na chois.',
	),
	array(
		0	=> 'Dè as fheum air a’ phutan “Sàbhail dreachd” nuair a sgrìobhas mi post?',
		1	=> 'Bheir seo cothrom dhut na tha thu a’ sgrìobhadh a shàbhaladh is a’ leantainn air adhart uair sam bith eile. Gus na shàbhail thu fhaighinn, rach gu taba “Foir-shealladh” ann an “Gnìomhan nam ball” is tagh “Dreachdan”.',
	),
	array(
		0	=> 'Carson a tha aontachadh a dhìth air a’ phost agam?',
		1	=> 'Rinn rianaire a’ bhùird an co-dhùnadh gum bi sgrùdadh a dhìth air gach post san fhòram far a bheil thu a’ sgrìobhadh mus dèid fhoillseachadh. A bharrachd air sin, ’s mathaid gun do chuir an rianaire thu ann am buidheann far an dèid gach post a sgrùdadh mus dèid fhoillseachadh. Faodaidh tu barrachd fiosrachaidh iarraidh on rianaire.',
	),
	array(
		0	=> 'Ciamar a bhreabas mi an cuspair agam?',
		1	=> 'Nuair a sheallas tu air cuspair, ’s urrainn dhut ceangal “Breab an cuspair seo” a chleachdadh gus an cuspair agad a “bhreabadh” gu ceann ciad duilleag an fhòraim. Co-dhiù, mur faic thu an ceangal seo, ’s mathaid nach eil am feart seo an comas air neo gu bheil e ro thràth an dèidh an ama a sgrìobh cuideigin sa chuspair no a chaidh a bhreabadh an turas mu dheireadh. ’S e dòigh eile airson breabaidh a th’ ann a bhith a’ sgrìobhadh post ùr sa chuspair. Bi faiceallach co-dhiù gu bheil thu a’ freagairt ri riaghailtean a’ bhùird ma nì thu seo.',
	),
	array(
		0	=> '--',
		1	=> 'Fòrmatadh ⁊ seòrsaichean cuspair',
	),
	array(
		0	=> 'Dè a tha sa BBCode?',
		1	=> '’S e tionndadh sònraichte de HTML a tha sa BBCode a bheir smachd mhionaideach dhut air fòrmatadh phàirtean dhe na postaichean agad. Cuiridh an rianaire roimhe co-dhiù an urrainn dhut BBCode a chleachdadh sna postaichean agad air a’ bhùird-bhrath gus nach urrainn. A bharrachd air sin, ’s urrainn dhut fhèin taghadh an cleachd thu BBCode gus nach cleachd nuair a sgrìobhas tu post sònraichte. Tha BBCode fhèin coltach ri HTML, tha camagan ceàrnach [ agus ] mu na tagaichean seach &lt; agus &gt;. Gus barrachd fiosrachaidh fhaighinn mu BBCode, seall air an treòraiche a gheibh thu air an duilleag sgrìobhaidh.',
	),
	array(
		0	=> 'An urrainn dhomh HTML a chleachdadh?',
		1	=> 'Chan urrainn. Cha ghabh HTML a sgrìobhadh air a’ bhùird seo gus a nochdadh e air a reandaradh mar HTML. Gheibh thu a’ mhòr chuid dhen fhòrmatadh a bhiodh tu a’ dèanamh le HTML nuair a chleachdas tu BBCode an àite seo.',
	),
	array(
		0	=> 'Dè tha sna samhlaidhean-gnùis?',
		1	=> '’S e dealbhan beaga a tha sna samhlaidhean-gnùis as urrainn dhut cleachdadh gus faireachdainnean a riochdachadh. Cleachdaidh tu còd goirid air an son, m.e. riochdaichidh :) toilichte is :( brònach agus msaa. Chì thu liosta shlàn dhe na samhlaidhean-gnùis air an duilleig sgrìobhaidh. Co-dhiù, feuch nach cleachd thu cus dhaibh air sgàth ’s gu bheil an cunnart ann gum fàs am post agad doirbh ri leughadh is ’s mathaid gun deasaich maor am post agad gus an cur air falbh air neo sguabaidh e am post às gu tur. A bharrachd air sin, ’s dòcha gun do chuingich rianaire a’ bhùird co mheud samhla-gnùis as urrainn dhut cleachdadh anns gach post.',
	),
	array(
		0	=> 'An urrainn dhomh dealbhan a chur ris na postaichean agam?',
		1	=> '’S urrainn. Ma thug an rianaire cead seachad gus ceanglachain a chleachdadh, ’s urrainn dhut an dealbh a luchdadh suas dhan bhòrd fhèin. Mura dug, feumaidh tu ceangal a dhèanamh ri dealbh a tha ri fhaighinn gu poblach air an eadar-lìn mar-thà, m.e. http://www.eisimpleir.co.uk/an-dealbh-agam.gif. Cha ghabh ceangal a dhèanamh ri dealbh a tha air a’ choimpiutair agad fhèin (mur e frithealaiche poblach a th’ ann) air neo ri dealbhan far a iarrar logadh a-steach, m.e. bogsa-puist hotmail no yahoo, làraichean-lìn a tha gan dìon le facal-faire, agus msaa. Cleachd taga BBCode [img] gus an dealbh a shealltainn.',
	),
	array(
		0	=> 'Dè th’ ann an lèir-bhrath?',
		1	=> 'Gheibh thu fiosrachadh cudromach sna lèir-bhrathan is bu chòir dhut an leughadh ma ghabhas seo dèanamh idir. Nochdaidh iad air ceann na duilleige anns gach fòram is ann an “Grìomhan nam ball”. Bidh ceadan a thaobh lèir-bhrathan fo smachd rianaire a’ bhùird.',
	),
	array(
		0	=> 'Dè th’ ann am brath?',
		1	=> 'Mar as trice, gheibh thu fiosrachadh cudromach mun fhòram a tha thu a’ leughadh ann am brath is bu chòir dhut a leughadh ma ghabhas seo dèanamh idir. Nochdaidh brathan air ceann gach duilleag an fhòraim ris a bhuineas iad. Co-ionnan ri lèir-bhrathan, bidh ceadan a thaobh brathan fo smachd rianaire a’ bhùird.',
	),
	array(
		0	=> 'Dè th’ ann am fleodrainn?',
		1	=> 'Nochdaidh fleodrainnean fo bhrathan air fòram is air a’ chiad duilleag a-mhàin. Mar as trice, bidh iad cudromach is bu chòir dhut an leughadh ma ghabhas seo dèanamh idir. Co-ionnan ri brathan is lèir-bhrathan, bidh ceadan a thaobh fhleodrainnean fo smachd rianaire a’ bhùird.',
	),
	array(
		0	=> 'Dè th’ ann an cuspair glaiste?',
		1	=> 'Nuair a tha cuspair air a ghlasadh, chan fhaod buill freagairt is ma tha cunntas-bheachd co-cheangailte ris, thàinig e gu crìoch gu fèin-obrachail. Tha iomadach adhbhar ann carson a rachadh cuspair a ghlasadh is mar as trice ’s e maor no rianaire a ghlais e. Tha e a’ crochadh air na ceadan a thug rianaire a’ bhùird dhut am faod thu na cuspairean agad fhèin a ghlasadh gus nach fhaod.',
	),
	array(
		0	=> 'Dè th’ ann an ìomhaigheag cuspair?',
		1	=> '’S e dealbh a thagh ùghdar a chuspair gus an seòrsa susbaint nam postaichean a riochdachadh a th’ ann an ìomhaigheag cuspair. Tha e a crochadh air na ceadan a thug rianaire a’ bhùird dhut am faod thu dealbh a’ chuspair a thaghadh gus nach fhaod.',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'Rangan nam ball ⁊ buidhnean',
	),
	array(
		0	=> 'Cò tha sna rianairean?',
		1	=> 'Is na rianairean na buill aig a bheil smachd as motha air a’ bhùird gu lèir. Riaghlaidh iad a h&#8209;uile rud co-cheangailte ri rianachd a’ bhùird, a’ gabhail a-steach ceadan, toirmeasg bhall, cruthachadh bhuidhnean is maoir agus msaa. Tha nas urrainn dhaibh dèanamh a’ crochadh air na ceadan a thug bun-rianaire a’ bhùird dhaibh. ’S mathaid gu bheil iad nam maor sna h&#8209;uile fòram, a leithid cheudna a’ crochadh air na ceadan a thug bun-rianaire a’ bhùird dhaibh.',
	),
	array(
		0	=> 'Cò tha sna maoir?',
		1	=> 'Is na maoir daoine air neo buidhnean de dhaoine a bheir an aire dha na fòraman gu làitheil. Sna fòraman far a bheil iad nam maor, tha comas aca postaichean a dheasachadh no a sguabadh às is cuspairean a ghlasadh, a ghluasad, a roinn no a sguabadh às. San fharsaingeachd, is an dleastanas aca bacadh a chur air postaichean a bhios air an ràmh chearr air neo sa bheil droch-chainnt no oilbheum.',
	),
	array(
		0	=> 'Dè th’ ann am buidheann?',
		1	=> '’S e buidheann de bhuill a th’ ann am buidheann a sheòrsaicheas coimhearsnachd a’ bhùird ann an roinnean gus am bi e nas fhasa dha na rianairean dèiligeadh riutha. Faodaidh gach ball buntainn ri barrachd air aon bhuidheann is ’s urrainnear ceadan sònraichte a thoirt dha gach buidheann. ’S e dòigh furasta a th’ ann dha na rianairean gus ceadan aig grunn bhall atharrachadh aig an aon àm a leithid ceadan maoir no ceadan inntrigidh gu fòram sònraichte.',
	),
	array(
		0	=> 'Càite a bheil na buidhnean agus ciamar a gheibh mi ballrachd?',
		1	=> 'Chì thu na h&#8209;uile buidheann ann an taba “Buidhnean” ann an “Gnìomhan nam ball”. Ma tha thu airson ballrachd fhaighinn ann am buidheann, tagh am putan-rèidio iomchaidh is “Cuir a-null”. Co-dhiù, chan eil inntrigeadh fosgailte aig a h&#8209;uile buidheann. Feumaidh ceannard a’ bhuidhinn aontachadh airson cuid dhaibh is ’s mathaid gu bheil am buidheann dùinte air neo fiù ’s falaichte. Mas e buidheann fosgailte a th’ ann, gheibh thu ballrachd cho luath ’s a thaghas tu am putan iomchaidh. Nuair a bhios aontachadh a dhìth ort airson ballrachd fhaighinn, ’s urrainn dhut seo iarraidh a leithid cheudna leis a’ phutan iomchaidh. Feumaidh ceannard a’ bhuidhinn aontachadh ris an iarrtas agad is ’s mathaid gun iarr e ort mìneachadh carson a tha thu airson ballrachd fhaighinn. Na sàraich ceannard a’ bhuidhinn ma tha e air an iarrtas agad a dhiùltadh, bidh adhbhar aige airson an diùltaidh.',
	),
	array(
		0	=> 'Ciamar a thèid mi nam cheannard buidhinn?',
		1	=> 'Mar as trice, thèid ceannard buidhinn a thaghadh nuair a chruthaicheas rianaire a’ bhùird e. Ma tha ùidh agad ann an cruthachadh buidhinn, bu chòir dhut fios a chur gu rianaire sa chiad dol a-mach. Feuch gun cuir thu teachdaireachd phearsanta thuige.',
	),
	array(
		0	=> 'Carson a tha dàth sònraichte air cuid dhe na buidhnean?',
		1	=> '’S urrainn do rianaire a’ bhùird dath sònraichte a chur air buill buidhinn gus am bi iad nas fhasa ri aithneachadh mar bhuill dhen bhuidheann ud.',
	),
	array(
		0	=> 'Dè th’ ann am “bun-bhuidheann”?',
		1	=> 'Ma tha thu nad bhall ann am barrachd air aon bhuidheann, sònraichidh am bun-bhuidheann agad dè an rang a th’ agad is dè an dath a thèid a chleachdadh air do shon. ’S mathaid gun dug rianaire a’ bhùird cead dhut am bun-bhuidheann agad atharrachadh ann an “Gnìomhan nam ball” agad.',
	),
	array(
		0	=> 'Dè th’ ann an ceangal “An sgioba”?',
		1	=> 'Gheibh thu fiosrachadh mu sgioba a’ bhùird air an duilleag seo, a’ gabhail a-steach liosta rianairean a’ bhùird is nam maoir le fiosrachadh na cois a leithid dè na fòraman ris a’ dhèiligeas iad.',
	),
	array(
		0	=> '--',
		1	=> 'Teachaireachdan pearsanta',
	),
	array(
		0	=> 'Chan urrainn dhomh teachdaireachdan pearsanta a chur!',
		1	=> 'Tha trì adhbharan ann carson a thachradh seo: chan eil thu air clàradh no logadh a-steach, chuir rianaire a’ bhùird teachdaireachdan pearsanta à comas airson a’ bhùird gu lèir air neo cha dug e cead dhut gus teachdaireachdan pearsanta a chur. Cuir fios gu rianaire a’ bhùird airson barrachd fiosrachaidh.',
	),
	array(
		0	=> 'Gheibh mi teachdaireachdan pearsanta nach eil mi ag iarraidh!',
		1	=> '’S urrainn dhut riaghailtean a stèidheachadh ann an “Gnìomhan nam ball” a sguabas às teachdaireachdan pearsanta o bhall sònraichte gu fèin-obrachail. Cuir gearan dha na maoir ma gheibh thu teachdaireachdan le droch-chainnt o bhall sònraichte; ’s urrainn dhasan cead gus teachdaireachdan pearsanta a chur a thoirt air fhalbh on bhall ud.',
	),
	array(
		0	=> 'Fhuair mi post-d le droch-chainnt no spama o chuideigin air a’ bhòrd seo!',
		1	=> 'Tha sinn duilich seo a chluinntinn. Tha feartan-dìona aig feart post-d a’ bhùird seo gus buill a lorg a chuireas puist-d dhen leithid. Cuir post-d gu rianaire a’ bhùird leis a’ phost-d shlàn a fhuair thu na chois. Tha e tuilleadh is cudromach gun gabh seo a-steach na h&#8209;uile bann-cinn a bheir seachad fiosrachadh mun bhall a chuir am post-d. ’S urrainn dhan rianaire rudeigin a dhèanamh an uairsin.',
	),
	array(
		0	=> '--',
		1	=> 'Caraidean ⁊ eascaraidean',
	),
	array(
		0	=> 'Dè th’ ann an liostaichean charaidean ⁊ eascaraidean agam?',
		1	=> '’S urrainn dhut na liostaichean seo a chleachdach gus rian a chur air buill eile a’ bhùird. Gheibh thu na buill a tha ’nan caraidean agad ann an liosta ann an “Gnìomhan nam ball” is mar sin gheibh thu greim orra gu luath gus sealltainn a bheil iad air loidhne air neo gus teachdaireachd phearsanta a chur thuca. ’S mathaid gun dèid an soillseachadh ma chuireas stoidhle a’ bhùird taic dha seo. Ma chuireas tu ball ann an liosta nan eascaraidean agad, thèid na postaichean uile aige fhalach.',
	),
	array(
		0	=> 'Ciamar a chuireas mi buill ri no far liosta nan caraidean no eascaraidean agam?',
		1	=> 'Tha dà dhòigh ann gus ball a chur ri liosta. Nuair a sheallas tu air cunntas buill, chì thu ceangal gus a chur ri liosta nan caraidean no eascaraidean agad. Air neo thèid gu “Gnìomhan nam ball” is cuir far-ainm a’ bhuill ri liosta an-siud. Siud an àite cuideachd gus buill a thoirt far an liosta agad.',
	),
	array(
		0	=> '--',
		1	=> 'A’ lorg sna fòraman',
	),
	array(
		0	=> 'Ciamar a lorgas mi ann am fòram no fòraman?',
		1	=> 'Cuir an abairt a tha thu a’ sireadh ann am bogsa “Lorg” air clàr-innse a’ bhùird, duilleag fòraim no duilleag cuspair. Tha lorg adhartach ri fhaighinn nuair a thaghas tu an ceangal “Lorg adhartach” a nochdas air gach duilleag a’ bhùird. Tha e a’ crochadh air stoidhle a’ bhùird càite am faigh thu a-steach do dhuilleag an luirg.',
	),
	array(
		0	=> 'Carson nach fhaigh mi toraidhean airson na lorg mi?',
		1	=> '’S dòcha nach robh an abairt a lorg thu mionaideach gu leòr air neo gun do ghabh e a-staigh cus faclan cumanta nach deach a chur ris an clàr-luirg le phpBB. Feuch am bi thu nas mionaidiche ’s gun cleachd thu na goireasan aig an “Lorg adhartach”.',
	),
	array(
		0	=> 'Carson nach fhaigh mi ach duilleag bàn airson na lorg mi!?',
		1	=> 'Tha àireamh nan toraidhean airson na lorg thu cho àrd nach dèan am frithealaiche-lìn a’ chùis air. Feuch an cleachd thu an “Lorg adhartach” gus abairt as mionaidiche a chleachdadh is gus àireamh nam fòraman a thèid a lorg annta a chuingeachadh.',
	),
	array(
		0	=> 'Ciamar a lorgas mi buill?',
		1	=> 'Rach dhan duilleag “Buill” agus cleachd an ceangal “Lorg ball”.',
	),
	array(
		0	=> 'Ciamar a lorgas mi na cuspairean is postaichean agam fhèin?',
		1	=> 'Gheibh thu lorg air na postaichean agad fhèin an dà chuid ma thèid thu air “Seall na postaichean agam fhèin” ann an “Gnìomhan nam ball” no air “Lorg postaichean leis a’ bhall” air duilleag a’ phròifil agad no air “Na postaichean agam fhèin” sa Ghrad-inntrigeadh. Gus na cuspairean agad a lorg, cleachd “Lorg adhartach” agus lìon na roghainnean mas as iomchaidh.',
	),
	array(
		0	=> '--',
		1	=> 'Cumail sùil ⁊ comharran-leabhair',
	),
	array(
		0	=> 'Dè an diofar eadar sùil a chumail air cuspair agus comharra-leabhair?',
		1	=> 'Ann an phpBB 3.0, bhiodh comharran-leabhair coltach ris na comharran-leabhair aig a’ bhrabhsair agad. Chan fhaigheadh tu brath nuair a bhiodh dad as ùr ann. Le phpBB 3.1, tha comharran-leabhair nas coltaiche ris an roghainn gus sùil a chumail air. ’S urrainn dhut brath fhaighinn nuair a bhios dad as ùr ann an cuspair ris a bheil comharra-leabhair. Air an làimh eile, nuair a chumas tu sùil air cuspair no fòram, gheibh thu brath nuair a bhios dad as ùr sa chuspair no fhòram. ’S urrainn dhur na roghainnean airson comharran-leabhair agus na tha thu a’ cumail sùil air a shuidheachadh ann an “Gnìomhan nam ball” san earrann “Roghainnean a’ bhùird”',
	),
	array(
		0	=> 'Ciamar a chumas mi sùil air cuspair sònraichte no chuireas mi comharra-leabhair ris?',
		1	=> 'Gus sùil a chumail air cuspair sònraichte no comharra-leabhair a chur ris, tagh an ceangal iomchaidh sa chlàr-taice “Innealan a’ chuspair” aig barr is bonn na deasbaide.<br />Mar roghainn eile, cuir cromag sa bhogsa “Cuir fios thugam nuair a thèid freagairt a sgrìobhadh ann” nuair a sgrìobhas tu freagairt airson sùil a chumail air a’ chuspair.',
	),
	array(
		0	=> 'Ciamar a chumas mi sùil air fòram sònraichte?',
		1	=> 'Gus sùil a chumail air fòram sònraichte, rach a-steach dhan fhòram agus briog air a’ cheangal “cum sùil air an fhòram” aig bonn na duilleige.',
	),
	array(
		0	=> 'Ciamar a sguireas mi de chumail sùil air cuspair no fòram?',
		1	=> 'Mur eil thu airson sùil a chumail air cuspair no fòram tuilleadh, rach gu “Gnìomhan nam ball”, tagh “Na tha mi a’ cumail sùil air”, tagh na fòraman no cuspairean iomchaidh agus tagh “Na cum sùil air tuilleadh”. A bharrachd air sin, ’s urrainn dhut “Na cum sùil air a’ chuspair / an fhòram tuilleadh” a thaghadh nuair a sheallas tu air a’ chuspair / an fhòram fhèin.',
	),
	array(
		0	=> '--',
		1	=> 'Ceanglachain',
	),
	array(
		0	=> 'Dè na seòrsaichean ceanglachain a tha ceadaichte air a’ bhùird seo?',
		1	=> 'Cuiridh rianaire a’ bhùird roimhe dè na seòrsaichean ceanglachain as urrainn dhut cleachdadh. Ma tha thu mì-chinnteach dè as urrainn dhut luchdadh suas, cuir fios gun rianaire airson taic.',
	),
	array(
		0	=> 'Ciamar a lorgas mi liosta shlàn de na ceanglachain agam?',
		1	=> 'Gus na ceanglachain a luchdaich thu suas a lorg, rach gu “Gnìomhan nam ball” is tagh “Ceanglachain”',
	),
	array(
		0	=> '--',
		1	=> 'Cùisean phpBB',
	),
	array(
		0	=> 'Cò sgrìobh am bòrd-brath seo?',
		1	=> 'Tha am bathar-bog seo (sa chruth gun atharrachadh) ga dhèanamh, ga fhoillseachadh agus fo chòir-lethbhreac aig <a href="https://www.phpbb.com/">phpBB Limited</a>. Tha e air a thoirt seachad fo cheadachas GNU General Public License tionndadh 2 (GPL-2.0) is faodar a sgaoileadh an-asgaidh. Faic <a href="https://www.phpbb.com/about/">About phpBB</a>  airson barrachd fiosrachaidh.',
	),
	array(
		0	=> 'Carson nach eil am feart X ri fhaighinn?',
		1	=> 'Chaidh am bathar-bog seo a sgrìobhadh is a cheadachadh le phpBB Limited. Ma tha thu dhen bheachd gu bheil feart sònraichte a dhìth air, tadhail air an làrach-lìn <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a> far an urrainn dhut bhòtadh airson beachdan a tha ann no feartan ùra a mholadh.',
	),
	array(
		0	=> 'Cò dha a chuireas mi fios mu chùisean laghail no droch-chainnt co-cheangailte ris a’ bhòrd seo?',
		1	=> 'Bhiodh e freagarrach dhut nan cuireadh tu fios gu aon dhe na rianairean a nochdas air liosta “An sgioba” gus gearran a thoirt a-steach. Mur faigh thu freagairt, bu chòir dhut fios a chur gu sealbhadair an àrainn (dèan <a href="http://www.google.com/search?q=whois"> lorg whois</a>) air neo, ma tha seirbheis an-asgaidh a’ frithealadh seo (m.e. Yahoo!, free.fr, f2s.com, amsaa.), cuir fios gu luchd-stiùiridh no roinn droch-chainnt na seirbheise ud. Thoir an aire nach eil <strong>uachdranas laghail sam bith</strong> aig phpBB Limited is nach eil e fo bhuailteachd ann an dòigh sam bith a thaobh ciamar, càite agus cò leis a thèid am bòrd seo a chleachdadh. Na cuir fios gu phpBB Limited co-cheangailte ri cùisean laghail (<em>cease and desist, liable, defamatory comment</em>, agus msaa.) sam bith <strong>nach eil a’ buntainn gu dìreach</strong> ri làrach-lìn phpBB.com no ri bathar-bog phpBB fhèin. Ma chuireas tu post-d gu phpBB Limited mu chleachdadh air choireigin a’ bhathair-bhuig seo <strong>le treas neach</strong>, bi an dùil gum faigh thu freagairt ghoirid air neo nach fhaigh thu freagairt sam bith idir.',
	),
	array(
		0 => 'Ciamar a chuireas mi fios gu rianaire a’ bhùird?',
		1 => '’S urrainn do gach cleachdaiche a’ bhùird am foirm “Fios thugainn” a chleachdadh ma chaidh an roghainn seo a chur an comas le rianaire a’ bhùird.<br />Faodaidh buill a’ bhùird an ceangal “An sgioba” a chleachdadh cuideachd.',
	)
);
