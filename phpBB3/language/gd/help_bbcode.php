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
		1	=> 'Ro-ràdh',
	),
	array(
		0	=> 'Dè a tha sa BhBCode?',
		1	=> '’S e tionndadh sònraichte de HTML a tha ann am BBCode. Cuiridh an rianaire roimhe co-dhiù an urrainn dhut BBCode a chleachdadh sna postaichean agad air a’ bhùird-bhrath gus nach urrainn. A bharrachd air sin, ’s urrainn dhut fhèin a chur romhad co-dhiù an dèid BBCode ga chleachdadh nuair a sgrìobhas tu post gus nach dèid. Tha BBCode fhèin coltach ri HTML, tha camagan ceàrnach  [ agus ] mu na tagaichean seach &lt; agus &gt;, agus bheir e smachd nas motha dhut air na tha thu airson sealltainn agus cò ris a bhios e coltach. A’ crochadh air stoidhle a’ bhùird-bhrath, bidh e mòran nas fhasa dhut BBCode a chur ris na postaichean agad air sgàth ’s gum bi putanan os cionn an raon sgrìobhaidh a ghabhas cleachdadh. Dh’fhaoitde gum bi an stiùireadh a leanas feumail dhut co-dhiù.',
	),
	array(
		0	=> '--',
		1	=> 'Cruth an teacsa',
	),
	array(
		0	=> 'Mar a nì thu teacsa ann an clò trom no Eadailteach no le loidhne foidhe',
		1	=> 'Tha tagaichean ann am BBCode a leigeas leat bun-chruth an teacsa atharrachadh gu luath. Nì thu seo mar sin: <ul><li>Gus clò trom a chur air pìos teacsa, cuir eadar <strong>[b][/b]</strong> e, m.e. tionndaidhidh <br /><br /><strong>[b]</strong>Halò<strong>[/b]</strong><br /><br />gu <strong>Halò</strong></li><li>Gus loidhne a chur fo theacsa, cleachd <strong>[u][/u]</strong>, mar eisimpleir:<br /><br /><strong>[u]</strong>Sin thu<strong>[/u]</strong><br /><br />a nochdas mar <span style="text-decoration: underline">Sin thu</span></li><li>Gus clò Eadailteach a chur air pìos teacsa, cleachd <strong>[i][/i]</strong>, m.e. chithear<br /><br />Tha seo <strong>[i]</strong>taghta!<strong>[/i]</strong><br /><br />mar Tha seo <i>taghta!</i></li></ul>',
	),
	array(
		0	=> 'Mar a dh’atharraicheas tu dath no meud an teacsa',
		1	=> 'Gus dath no meud do theacsa atharrachadh, faodaidh tu na tagaichean a leanas a chleachdadh. Thoir an aire nach bi a choltas co-ionnann a-rèir siostaman is brabhsairean àraidh nan daoine a sheallas air. <ul><li>Gus dath an teacsa atharrachadh, cuairtich e le <strong>[color=][/color]</strong>. Feumaidh tu ainm dath aithnichte (m.e. red, blue, yellow, etc.) a shònrachadh no àireamh shia-dheicheach, m.e. #FFFFFF, #000000. Mar eisimpleir, gus teacsa dearg a chruthachadh, faodaidh tu :<br /><br /><strong>[color=red]</strong>Halò!<strong>[/color]</strong><br /><br />air neo<br /><br /><strong>[color=#FF0000]</strong>Halò!<strong>[/color]</strong> a chleachdadh.<br /><br />Nochdaidh an dà chuid mar <span style="color:red">Halò!</span></li><li>



Atharraichidh tu meud an teacsa air an dearbh dhòigh ach le <strong>[size=][/size]</strong>. Crochaidh an taga seo air stoidhle a’ bhùird-bhrath a thagh gach ball, ach mholamaid àireamh a riochdaicheas meud an teacsa mar cheudad, bho 20 (glè bheag) gu 200 (glè mhòr) a ghnàth. Mar eisimpleir, chithear<br /><br /><strong>[size=30]</strong>BEAG<strong>[/size]</strong><br /><br /> mar seo: <span style="font-size:30%;"> BEAG </span><br /><br />an-còmhnaidh agus:<br /><br /><strong>[size=200]</strong>GLÈ MHÒR!<strong>[/size]</strong><br /><br />mar seo: <span style="font-size:200%;"> GLÈ MHÒR!</span></li></ul>',
	),
	array(
		0	=> 'Am faod mi tagaichean fòrmataidh a chur ri chèile?',
		1	=> 'Faodaidh gu dearbh, mar eisimpleir ma bhios tu airson ’s gun doirear aire air rudeigin, ’s urrainn dhut na leanas a sgrìobhadh:<br /><br /><strong>[size=200][color=red][b]</strong>SEALL ORMSA!<strong>[/b][/color][/size]</strong><br /><br />is gheibhear <span style="color:red;font-size:200%;"><strong> SEALL ORMSA!</strong></span><br /><br />Cha mholamaid gun cuir thu mòran teacsa dhen seòrsa seo ris na postaichean agad co-dhiù! A bharrachd air seo, thoir an aire gur an agadsa a bhios uallach a dhèanamh cinnteach gum bi a h&#8209;uile taga air a dhùnadh san dòigh cheart. Mar eisimpleir, chan eil na leanas mar bu chòir:<br /><br /><strong>[b][u]</strong>Chan obraich seo<strong>[/b][/u]</strong>',
	),
	array(
		0	=> '--',
		1	=> 'Iomraidhean agus teacsa le leud socraichte',
	),
	array(
		0	=> 'A’ cur iomradh ri freagairt',
		1	=> 'Tha dà dhòigh ann gus iomradh a dhèanamh air teacsa, le às-earrann no às a h&#8209;aonais.<ul><li>Ma chleachdas tu an gnìomh “Iomradh” gus freagairt do phost air a’ bhùird-bhrath, bu chòir dhan teacsa a nochdadh am broinn na teachdaireachd a bhios tu a’ sgrìobhadh, ann am bloc <strong>[quote=&quot;&quot;][/quote]</strong>. Leigidh an dòigh seo leat iomradh a dhèanamh le às-earrann do chuideigin no dad sam bith eile a bu mhiann leat! Mar eisimpleir, gus iomradh a dhèanamh air pìos teacsa aig fear Mac a’ Bhriathair, b’ urrainn dhut na leanas a chur ann:<br /><br /><strong>[quote=&quot; Mac a’ Bhriathair &quot;]</strong>Chithear an teacsa aig Mac a’ Bhriathair an-seo<strong>[/quote]</strong><br /><br />agus cuiridh am bathar-bog &quot; Sgrìobh Mac a’ Bhriathair:&quot; os cionn an teacsa fhèin. Thoir an aire gum <strong>feum </strong> thu na comharran-labhairt &quot;&quot; a chur mun ainm, chan eil roghnadh is taghadh agad orra.</li><li>Leigidh an dòigh eile leat iomradh gun às-earrann a chur ris an teacsa agad. Cuir na tagaichean <strong>[quote][/quote]</strong> mun teacsa gus an dòigh seo a chleachdadh. Nuair a sheallas tu air an teacsa, chì thu gun do chuir thu a-steach earrann iomraidh gun duilgheadas sam bith.</li></ul>',
	),
	array(
		0	=> 'A’ sealltainn còd no teacsa le leud socraichte',
		1	=> 'Ma bhios tu airson pìos de chòd no dad sam bith eile a dh’fheumas leud socraichte a shealltainn, m.e. cruth-clò coltach ri Courier, bu chòir dhut an dà thaga <strong>[code][/code]</strong> a chur mun teacsa, m.e.<br /><br /><strong>[code]</strong>echo &quot;Seo còd air choireigin&quot;;<strong>[/code]</strong><br /><br />Glèidhear fòrmatadh sam bith a chleachdar eadar tagaichean <strong>[code][/code]</strong>. ’S urrainn dhut PHP syntax highlighting a chur ris le <strong>[code=php][/code]</strong> agus mholamaid gun dèan thu seo ma chuireas tu eisimpleir de chòd PHP ris na postaichean agad airson ’s gum bi an còd nas fhasa ri leughadh.',
	),
	array(
		0	=> '--',
		1	=> 'Liostaichean',
	),
	array(
		0	=> 'A’ cruthachadh liosta gun seòrsachadh',
		1	=> 'Leigidh BBCode leat dà sheorsa de liosta a chruthachadh, feadhainn gun seòrsachadh agus feadhainn le seòrsachadh. Tha iad co-ionnann ris an fheadhainn a tha ann an HTML. Nochdaidh gach nì air an liosta agad às dèidh a chèile ann an liosta gun seòrsachadh agus bidh peilear air beulaibh gach ball dhen liosta. Cleachd <strong>[list][/list]</strong> gus liosta gun seòrsachadh a chruthachadh agus sònraich gach ball dhen liosta le <strong>[*]</strong>. Mar eisimpleir, airson liosta dhe na dathan as fhearr leat a dhèanamh, ’s urrainn dhut:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>dearg<br /><strong>[*]</strong>uaine<br /><strong>[*]</strong>buidhe<br /><strong>[/list]</strong><br /><br /> a chleachdadh. Gheibh thu liosta mar seo an uairsin:<ul><li>dearg</li><li>uaine</li><li>buidhe</li></ul>',
	),
	array(
		0	=> 'A’ cruthachadh liosta le seòrsachadh',
		1	=> 'Leigidh liosta le seòrsachadh leat taghadh dè nochdas air beulaibh gach ball an liosta. Gus liosta le seòrsachadh a chruthachadh, cleachd <strong>[list=1][/list]</strong> airson liosta le àireamhan air neo <strong>[list=a][/list]</strong> airson liosta a-rèir na h&#8209;aibidil. Mar a nì thu le liosta gun seòrsachadh, cuir <strong>[*]</strong> air beulaibh gach buill. Mar eisimpleir, an cois seo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Rach dha na bùithtean<br /><strong>[*]</strong>Ceannaich coimpiutair ùr<br /><strong>[*]</strong>Mallachd dha mur dèan e mar bu chòir<br /><strong>[/list]</strong><br /><br /> gheibh thu na leanas:<ol style="list-style-type: decimal;"><li>Rach dha na bùithtean</li><li>Ceannaich coimpiutair ùr</li><li> Mallachd dha mur dèan e mar bu chòir </li></ol>Air an làimh eile, airson liosta a-rèir na h&#8209;aibidil a dhèanamh, cuir na leanas:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A’ chiad fhreagairt chomasach<br /><strong>[*]</strong>An dàrna freagairt chomasach<br /><strong>[*]</strong>An treas freagairt chomasach<br /><strong>[/list]</strong><br /><br />is gheibh thu<ol style="list-style-type: lower-alpha"><li>A’ chiad fhreagairt chomasach</li><li>An dàrna freagairt chomasach</li><li>An treas freagairt chomasach</li></ol>',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'Ceanglaichean',
	),
	array(
		0	=> 'A’ cruthachadh ceangal gu làrach-lìn eile',
		1	=> 'Tha diofar dòighean aig BBCode phpBB gus URIaichean (Uniform Resource Indicators) a chruthachadh. ’S dòcha gu bheil thu eòlach orra mar URLaichean.<ul><li>Cleachdaidh an dàrna dòigh dhiubh an taga <strong>[url=][/url]</strong>. Ge b’ e dè a sgrìobhas tu an dèidh an =, bidh giùlan URL air. Mar eisimpleir, gus ceangal gu phpBB.com a chur sa phost agad, b’ urrainn dhut:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Tadhail air phpBB!<strong>[/url]</strong><br /><br />a chleachdadh. Cruthaichidh seo an ceangal a leanas, <a href="http://www.phpbb.com/">Tadhail air phpBB!</a> Thoir an aire gun dèid an ceangal seo fhosgladh san aon uinneag air neo ann an uinneag ùr a-rèir roghainnean a’ bhrabhsair aig gach cleachdaiche.</li><li>Ma tha thu airson an URL fhèin a shealltainn mar cheangal, cha leig thu leas ach:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong> a chleachdadh.<br /><br />Cruthaichidh seo an ceangal a leanas, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>A bharrachd air sin, tha feart aig phpBB ris an canar <i>Ceanglaichean draoidheach</i>; nì seo ceangal de gach URL a bhios ceart a thaobh co-chàraidh. Cha leig thu leas taga sam bith a chur ris no fiù tòiseachadh le http://. Mar eisimpleir, ma sgrìobhas tu www.phpbb.com, nochdaidh e mar <a href="http://www.phpbb.com/">www.phpbb.com</a> nuair a sheallar air a’ phost agad.</li><li>Tachraidh an aon rud le seòlaidhean puist-d. ’S urrainn dhut seòladh a shònrachadh a dh’aona-ghnothach co-dhiù. Mar eisimpleir, cruthaichidh:<br /><br /><strong>[email]</strong>duine.nach.eil.ann@arainn.seo<strong>[/email]</strong><br /><br />na leanas: <a href=" duine.nach.eil.ann@arainn.seo "> duine.nach.eil.ann@arainn.seo </a> air neo foghnaidh e nuair a sgrìobhas tu duine.nach.eil.ann@arainn.seo san teachdaireachd agad agus nochdaidh e mar sin gu fèin-obrachail nuair a sheallas tu air a’ phost.</li></ul>Mar a thachras leis a h&#8209;uile taga BBCode eile, ’s urrainn dhut URL a chur mu thaga sam bith eile, <strong>[img][/img]</strong> (seall an ath earrann), <strong>[b][/b]</strong>, amsaa. ’S ann ort fhèin a bhios an t&#8209;uallach dèanamh cinnteach gum bi a h&#8209;uile taga air fhosgladh agus a dhùnadh san òrdugh cheart, mar eisimpleir, ’s ann <span style="text-decoration: underline">cearr</span> a tha na leanas:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> agus math dh’fhaoidte gun sguabar às dhan phost agad. Bi faiceallach leis ma-thà.',
	),
	array(
		0	=> '--',
		1	=> 'Dealbhan',
	),
	array(
		0	=> 'A’ cur dealbh ri post',
		1	=> 'Tha taga aig BBCode phpBB gus dealbhan a chur ris na postaichean agad. Thoir an aire air dà rud glè chudromach nuair a chleachdas tu an taga seo: air an dàrna làimh, chan eil a h&#8209;uile duine toilichte le grunn dhealbhan san aon phost agus air an làimh eile feumaidh na dealbhan a tha thu airson sealltainn a bhith ri fhaighinn air an eadar-lìon mu thràth (m.e. chan fhoghainn gum bi iad air a’ choimpiutair agad fhèin mur eil frithealaiche-lìn agad). Gus dealbh a shealltainn, feumaidh tu URL a chur mun dealbh leis an dà thaga <strong>[img][/img]</strong>. Mar eisimpleir:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Mar a thuirt sinn san roinn mu URLaichean gu h&#8209;àrd, faodaidh tu an taga <strong>[url][/url]</strong> a chur mun dealbh ma thogras tu, m.e. nochdaidh<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />dealbh a tha na cheangal:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	),
	array(
		0	=> 'A’ cur ceanglachan ri post',
		1	=> 'Faodaidh tu ceanglachain a shuidheachadh ann an àite sam bith ann am post. Cleachd am BBCode ùr <strong>[attachment=][/attachment]</strong> air an son. ’S urrainn dhut seo a dhèanamh ma bhios feart nan ceanglachan air agus ma thug rianaire a’ bhùird-bhrath cead dhut ceanglachain a chruthachadh. Nuair a’ bhios tu a’ sgrìobhadh post, chì thu bogsa teàrnaidh (air neo putan) gus ceanglachain a chur ris a’ phost agad am broinn na loidhne.',
	),
	array(
		0	=> '--',
		1	=> 'Cuspairean eile',
	),
	array(
		0	=> 'Am faod mi na tagaichean agam fhèin a chruthachadh?',
		1	=> 'Ma tha thu nad rianaire air a’ bhòrd-bhrath seo agus ma tha cead iomchaidh agad, ’s urrainn dhut BBCode ùr a chruthachadh ann an roinn nam BBCode gàthaichte.',
	),
);
