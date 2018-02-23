<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
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
		0 => '--',
		1 => 'Sisselogimise ja registreerimise küsimused'
	),
	array(
		0 => 'Miks ma ei saa sisse logida?',
		1 => 'Sellel probleemil on mitmeid võimalikke põhjusi. Esiteks ole kindel, et sisestasid kasutajanime ja parooli korrektselt. Kui on korrektsed, võta ühendust foorumi omanikuga, et teada saada, kas oled saanud keelu foorumile. Ka on võimalik, et omanikul on veebiserveri konfiguratsioonis viga ja ta peab selle ise lahendama.'
	),
	array(
		0 => 'Mis on COPPA?',
		1 => 'Kuna me tunneme muret laste online - turvalisuse pärast, siis täidame me 1998.a. laste online-turvalisuse kaitse seadust. COPPA ja sellega kaasneva FTC regulatsiooniga kehtestatakse USA föderaalseadus, mis kaitseb alla 13 aasta vanuste laste privaatsust. Meie veebileht ei ole ette nähtud alla 13 aasta vanustelt lastelt andmete väljameelitamiseks ning meie kodulehed on üles ehitatud nii, et blokeerida andmete teadlik vastuvõtt alla 13 aasta vanustelt lastelt alati, kui nõutakse vanusandmeid.',
	),
	array(
		0 => 'Miks ma ei saa registreeruda?',
		1 => 'On võimalik, et foorumi omanik on blokeerinud su IP aadressi või kasutajanime, millega üritasid registreeruda. Omanik võib olla keelustanud üldse uute kasutajate registreerimise. Võta ühendust foorum administraatoriga, et saada abi.',
	),
	array(
		0 => 'Ma registreerusin, aga ei saa sisse logida!',
		1 => 'Kõigepealt kontrolli oma kasutajanime ja parooli. Kui need on kindlasti õiged, siis võib-olla registreerusid COPPA tingimustega - jälgi sulle saadetud juhiseid. On veel võimalik, et su konto vajab aktiveerimist või administraator on su konto sulgenud.'
	),
	array(
		0 => 'Miks ma ei saa sisse logida?',
		1 => 'Sellel probleemil on mitmeid võimalikke põhjusi. Esiteks ole kindel, et sisestasid kasutajanime ja parooli korrektselt. Kui on korrektsed, võta ühendust foorumi omanikuga, et teada saada, kas oled saanud keelu foorumile. Ka on võimalik, et omanikul on veebiserveri konfiguratsioonis viga ja ta peab selle ise lahendama.',
	),
	array(
		0 => 'Kunagi ammu liitusin, aga nüüd ei saa enam sisse?!',
		1 => 'Kõigepealt kontrolli oma kasutajanime ja paroole. Teine võimalus on, et administraator on su konto kustutanud. Foorumitel on tavaks kustutada ebaaktiivseid kasutajaid, et vähendada andmebaasi suurust.'
	),
	array(
		0 => 'Kaotasin parooli!',
		1 => 'Parooli ei saa küll taastada, aga selle saab uue panna. Selleks mine sisselogimise lehele ja vajuta linki <em>Unustasin parooli</em>. Jälgi juhiseid ja peaksidki taas saama sisse logida.',
	),
	array(
		0 => 'Miks mind automaatselt välja logitakse?',
		1 => 'Kui sa ei märgi <em>Logi mind sisse automaatselt igal külastusel</em> kasti, siis sa jääd sisselogituks ainult foorumi kasutamise ajaks. Kui tahad alati sisse logitud olla, märgi see kastike sisselogimisel. Seda ei ole soovitatav teha avalikes arvutites. Kui sa ei näe seda kastikest, on administraator selle keelanud.',
	),
	array(
		0 => 'Mida teeb nupp "Kustuta kõik foorumi küpsised"?',
		1 => 'See nupp kustutab kõik andmed, mida phpBB on saatnud sinu arvutisse, näiteks sinu kasutajanime ja parooli. Kui sul on sisselogimis- või väljalogimisprobleeme, võib see nupp aidata.',
	),
	array(
		0 => '--',
		1 => 'Kasutaja eelistused ja seaded'
	),
	array(
		0 => 'Kuidas saan ma oma seadeid muuta?',
		1 => 'Sinu andmed on salvestatud andmebaasi ja nende muutmiseks kasuta <em>Juhtpaneel</em> linki foorumis',
	),
	array(
		0 => 'Kuidas saan keelata oma kasutajanime ilmumist foorumilolijate nimekirja?',
		1 => 'Oma profiilist leiad sa valiku <em>Peida mu foorumil olek</em>; Kui sa selle aktiveerid, näevad sind ainult administraator ja sa ise. Sa oled varjatud kasutaja.'
	),
	array(
		0 => 'Ajad on valed!',
		1 => 'Tõenäoliselt on ajad õiged, aga sa oled lihtsalt teises ajavööndis. Profiili alt saad sättida enda ajavööndi.'
	),
	array(
		0 => 'Muutsin oma ajatsooni, aga ajad on ikka valed!',
		1 => 'Sellisel juhul on tõenäoliselt tegemist suveajale üleminekuga. Teatud kuudel võivad esineda selle tõttu väiksed nihked kellaajas. Palun teavita probleemist administraatorit.'
	),
	array(
		0 => 'Minu keelt ei ole nimekirjas!',
		1 => 'Tõenäoliselt ei installeerinud administraator seda keelt või ei ole keegi seda veel tõlkinud. Võta temaga ühendust ja palu tal see installeerida. Või kui seda tõlgitud pole, siis võid muidugi ka ise tõlkida. Rohkem informatsiooni leiad <a href="https://www.phpbb.com/">phpBB</a>&reg; veebilehelt.',
	),
	array(
		0 => 'Kuidas ma panen kasutajanime juurde omale pildi?',
		1 => 'Kasutajanime juures saab olla kaks pilti. Esimene on seotud tiitliga ja selle määrab administraator. Teine on avatar ja selle saad ise panna <em>Juhtpaneel</em>i alt (kui avataride kasutamine pole foorumis keelatud).',
	),
	array(
		0 => 'Kuidas ma saan lisada avatari?',
		1 => 'Sinu kasutaja juhtpaneeli “Profiili” lehel saad kasutada ühte neljast meetodist, et lisada omale avataripilt: Gravatar, Gallery, mujalt veebilehelt või laadides üles. Samuti foorumi administraatorid saavad ise otsustada, kas nad lubavad avatare ja millisel viisil nad lubavad. Kui sa ei saa kasutada avatare, siis võta ühendust foorumi administraatoriga.',
	),
	array(
		0 => 'Mis on mu tiitel ja kuidas ma seda muudan?',
		1 => 'Tiitlid näitavad, mitu postitust oled teinud või identfitseerivad kindlaid kasutajaid, näiteks moderaatoreid ja administraatoreid. Enamasti ei saa tiitleid muuta, kuna need määrab administraator. Palun ära riku foorumit, tehes mõttetuid postitusi, et tiitlit kõrgemaks saada. Enamik foorumite administraatoreid seda ei kannata ja nad madaldavad su postituste arvu.'
	),
	array(
		0 => 'Kui ma vajutan kasutaja e-posti lingi peale, siis küsib foorum minult sisselogimist.',
		1 => 'Ainult registreeritud kasutajad saavad foorumi kaudu e-maile saata. Ja sedagi ainult siis, kui administraator on selle võimaluse lubanud.'
	),
	array(
		0 => '--',
		1 => 'Postitamine'
	),
	array(
		0 => 'Kuidas ma foorumisse uue teema teen?',
		1 => 'Uue teema postitamiseks kasuta mingis alafoorumis vastavat nuppu "Uus teema". Vastuse lisamiseks teemasse, vajuta "Vasta" nuppu. Võimalik, et sul on esmalt vaja registreerida kasutajaks, et saaksid seda toimi. Nimekirja oma õigustest igas alafoorumis näed all olevas jaluses, näiteks: Sa saad teha uusi teemasid siin foorumis, Sa saad postitada siin foorumis manuseid, jne.',
	),
	array(
		0 => 'Kuidas ma muudan/kustutan postitusi?',
		1 => 'Kui sa pole moderaator, saad sa kustutada ja muuta ainult oma postitusi. Muutmiseks kasuta postituse kõrval olevat nuppu. Kui keegi on su teatele vastanud, sa seda enam kustutada ei saa ja muutes tuleb teate alla kiri selle kohta, millal sa seda viimati muutsid. Moderaatorite muutmisest enamasti märki ei jää, kuid nad võivad selle omal soovil lisada.'
	),
	array(
		0 => 'Kuidas ma panen oma postitusele signatuuri juurde?',
		1 => 'Et lisada signatuuri postitusele, pead kõigepealt selle sisestama Juhtpaneelis. Peale seda kui signatuur on loodud, siis postituse valikutes määrama valiku <em>"Lisa signatuur"</em>.'
	),
	array(
		0 => 'Kuidas ma hääletuse teen?',
		1 => 'Hääletuste tegemine on lihte - kui postitad teema (või muudad teema esimest postitust) peaksid nägema <em>Hääletuse lisamine</em> sakki, mis asub kirjutamisvälja all (kui seda ei näe, siis arvatavasti puuduvad sul õigused hääletuse algatamiseks). Peaksid sisestama hääletuse pealkirja ja vähemalt kaks vastusevarianti (selleks, et määrata vastusevarianti,  sisesta see vastavale reale. Hääletusele saab ka määrata ajalimiidi, 0 tähendab piiramatut aega. Valikvastuste arv võib olla piiratud, selle määrab foorumi administraator.'
	),
	array(
		0 => 'Miks ma ei saa lisada hääletuse valikuid?',
		1 => 'Hääletuse valikute limiidi määrab administraator. Kui tunned vajadust ületada seda limiiti, kontakteeru administraatoriga'
	),
	array(
		0 => 'Kuidas ma muudan või kustutan hääletuse?',
		1 => 'Hääletusi saab muuta, muutes esimest postitust. Kui keegi on juba hääletanud, saavad seda muuta ainult moderaatorid ja administraatorid.'
	),
	array(
		0 => 'Miks ma ei pääse alafoorumisse?',
		1 => 'Mõndadesse alafoorumitesse on ligipääs ainult teatud kasutajatel või gruppidel. Võta ühendust administraatoriga, et saada ligipääs.'
	),
	array(
		0 => 'Miks ma ei saa lisada manuseid?',
		1 => 'Manuse lisamine võib olla piiratud  vaid mõnele grupile või kasutajatele eraldi.'
	),
	array(
		0 => 'Miks ma hoiatuse sain?',
		1 => 'Igal administraatoril on oma saidil omad reeglid. Kui oled reeglit rikkunud, võid saada hoiatuse. See on administraatori otsus ja phpBB pole sellega seotud. Võta ühendust administraatoriga, kui sa ei tea, mille eest hoiatuse said.'
	),
	array(
		0 => 'Kuidas ma saan raporteerida postitusest?',
		1 => 'Kui administraator on selle lubanud, saad raporteerida postituse paremas ülaääres oleva nupuga.'
	),
	array(
		0 => 'Milleks on "Salvesta" nupp postitamise juures?',
		1 => 'See nupp lubab sul salvestada postituse seise. Et laadida mõni postituse seis, kasuta <em>Juhtpaneel</em>i.'
	),
	array(
		0 => 'Miks peab mu postitust heaks kiitma?',
		1 => 'Administraator võib olla määranud, et foorumis peab postituse enne avaldamist moderaator üle vaatama. Ka on võimalik, et administraator on pannud sind sellesse kasutajate gruppi, kelle postitusi peab enne avaldamist üle vaatama. Palun võta ühendust administraatoriga edasiste küsimuste jaoks.'
	),
	array(
		0 => 'Kuidas ma tõstatan oma teemat?',
		1 => 'Vajutades "Tõstata teemat" linki teemat vaadates, saad sa "tõstatada" teema foorumi esimesele lehele. Kui sa seda linki ei näe, on see moodus ilmselt keelatud või tõstatamiste intervall on veel liiga väike. Samuti on võimalik teemat tõstatada sellele vastates, kuid jälgi foorumi reegleid seda tehes.'
	),
	array(
		0 => '--',
		1 => 'Vormindamine ja teemade tüübid'
	),
	array(
		0 => 'Mis on BBkood?',
		1 => 'BBkood on kood, mis põhineb HTMLil ning mis on abiks postitamisel. Seda saab postitustes keelata. Täpsemad juhised saab lingilt postitamise lehel.'
	),
	array(
		0 => 'Kas ma HTMLi saan kasutada?',
		1 => 'Ei. Siin foorumis ei ole võimalik postitada käske HTML\'is. Enamus vormindamist saab ka BBkood abil teha.'
	),
	array(
		0 => 'Mis on emotikonid?',
		1 => 'Emotikonid on väiksed pildikesed, mis aitavad sul postituses oma emotsioone väljendada. Neid saad teatesse lisada postitamise lehelt. Katsu nendega mitte liialdada. Administraator on võib-olla ka määranud emotikonide limiidi potituse kohta.'
	),
	array(
		0 => 'Kas ma saan pilte postitada?',
		1 => 'Pilte saab postitusse kuvada, aga selleks peavad nad olema avalikus serveris, näiteks  http://www.mingidomeeninimi.com/minu-pilt.gif. või sa pead need üles laadima siia lehele. Neid ei saa kuvada oma arvutist (kui see pole server) ja samuti parooliga kaitstud kohtadest. Piltide lisamiseks kasuta BBkood\'i.'
	),
	array(
		0 => 'Mis on üldteadaanded?',
		1 => 'Üldteadaanded sisaldavad tähtsat informatsiooni ja sa peaksid neid lugema. Nad ilmuvad iga foorumi päisesse ja juhtpaneeli. Üldteadaannete õigused määrab administraator.'
	),
	array(
		0 => 'Mis on teadeanded?',
		1 => 'Teadeanded ilmuvad alafoorumis teiste postituste kohale ja sisaldavad tähtsat informatsiooni, mida sa peaksid lugema.'
	),
	array(
		0 => 'Mis on kleepsud?',
		1 => 'Kleepsud ilmuvad teadaannete all ja vaid esimesel lehel foorumis. Nad sisaldavad tihti tähtsat informatsiooni, mida sa peaksid lugema.'
	),
	array(
		0 => 'Mis on suletud teemad?',
		1 => 'Suletud teemad on sellised teemad, kuhu kasutaja ei saa enam postitada. Teemasid võidakse sulgeda mitmetel põhjustel. Ka võid sa saada sulgeda omaenda teemasid, kui selleks on sul õigused.'
	),
	array(
		0 => 'Mis on teemaikoonid?',
		1 => 'Teemaikoonid on autori poolt valitud pildikesed, mis ilmuvad teema nime kõrval foorumis ja näitavad, mis sisuga teema on.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Kasutajad ja grupid'
	),
	array(
		0 => 'Kes on administraatorid?',
		1 => 'Administraatorid on auastmelt foorumis kõige kõrgemal. Nad saavad sättida foorumi väljanägemist ja seadeid ning määrata moderaatoreid. Neil võivad olla ka moderaatoriõigused kõigis alafoorumites.'
	),
	array(
		0 => 'Kes on moderaatorid?',
		1 => 'Moderaatorite ülesanne on hoolitseda korra eest foorumis. Nad saavad kustutada, muuta ja liigutada teemasid.'
	),
	array(
		0 => 'Mis on kasutajagrupid?',
		1 => 'Kasutajagrupid on võimalus liikmeid gruppidesse jagada. Üks inimene saab kuuluda mitmesse gruppi ning gruppidel saab olla eriõiguseid. Nii saab näiteks anda mõnele grupile õiguse mõnda alafoorumite kasutada, kuigi teised seda teha ei saa.'
	),
	array(
		0 => 'Kus on kasutajagrupid ja kuidas nendega liituda?',
		1 => 'Olemasolevaid gruppe saad vaadata menüüst Kasutajagruppide alt. Seal saad ka oma liitumisavalduse esitada. Grupid võivad olla ka varjatud.'
	),
	array(
		0 => 'Kuidas kasutajagrupi moderaatoriks saada?',
		1 => 'Kasutajagruppe loovad administraatorid. Kui oled huvitatud grupi loomisest, siis võta temaga ühendust.',
	),
	array(
		0 => 'Miks mõndade kasutajagruppide liikmete nimed on värvilised?',
		1 => 'On võimalik, et administraator on määranud gruppidele omad värvid, et neid kergemini eristada.'
	),
	array(
		0 => 'Mis on “Vaikimisi grupp”?',
		1 => 'Kui sa oled liige enamas kui ühes kasutajagrupis, on vaikimisi grupp see, millise grupi värvi sinu nimi ilmub ja mille tiitel sul profiilis on. Administraator on võib-olla lubanud sul vaikimisi gruppi muuta.'
	),
	array(
		0 => 'Mis on “Meeskond” link?',
		1 => 'See lehekülg sisaldab infot, näiteks kes on administraatorid ja moderaatorid ning mis foorumeid nad modereerivad.'
	),
	array(
		0 => '--',
		1 => 'Privaatsõnumid'
	),
	array(
		0 => 'Ma ei saa privaatsõnumeid saata!',
		1 => 'Sa ei ole kas sisse loginud või administraator on keelanud foorumis privaatsõnumite saatmise. Võib ka olla, et sinul individuaalselt on mingil põhjusel teadete saatmine keelatud.'
	),
	array(
		0 => 'Ma saan soovimatuid privaatsõnumeid!',
		1 => 'Saad blokeerida kasutajaid privaatsõnumid, kasutades reegleid. Kui saad privaatsõnumeid mingilt kindlalt kasutajalt, teavita administraatorit; Nemad võivad keelata sellel kasutajal sõnumite saatmise.'
	),
	array(
		0 => 'Sain spämmi või solvava kirja foorumi vahendusel!',
		1 => 'Meil on kahju kuulda seda, edasiseks tegevuseks saada foorumi administraatorile koopia kogu kirjast ja loodetavasti kasutab ta enda käsutuses olevaid meetmeid selle lõpetamiseks.'
	),
	array(
		0 => '--',
		1 => 'Sõbrad ja vaenlased'
	),
	array(
		0 => 'Mis on sõprade ja vaenlaste nimekiri?',
		1 => 'Sa võid kasutada neid nimekirju, et saada parem ülevaade foorumi kasutajatest. Kasutajate, kes on su sõprade nimekirjas, foorumiloleku staatust näed oma juhtpaneelis ja seal saad ka neile kiiresti privaatsõnumi saata. Olenevalt stiilist on võimalik nende kasutajate postitusi ka esile tõsta. Kui lisad kasutaja vaenlaste nimekirja, peidetakse nende postitused.'
	),
	array(
		0 => 'Kuidas lisada/eemaldada kasutajaid nimekirjast?',
		1 => 'Selleks on kaks moodust. Iga kasutaja profiilis on link ühte nimekirja lisamiseks. Lisaks saad ka juhtpaneelis nime sisestades lisada nimekirja. Saad samalt lehelt ka eemaldada'
	),
	array(
		0 => '--',
		1 => 'Foorumitest otsimine'
	),
	array(
		0 => 'Kuidas saan otsida foorumist või foorumitest?',
		1 => 'Sisesta sõna otsinguväljale teemas, foorumis või esilehel. Täiendatud otsingu saad teemas või foorumis "Täiendatud otsingu" linki vajutades.'
	),
	array(
		0 => 'Miks mu otsingul pole vasteid?',
		1 => 'Su otsing oli ilmselt liiga ebamäärane või sisaldas palju tihtikasutatavaid (nt. "ja" või "ei") sõnu.',
	),
	array(
		0 => 'Miks saan ma otsingu vastuseks tühja lehe?',
		1 => 'Sinu otsingul oli veebiserveri jaoks liiga palju vasteid. Kasutaja “täiendatud otsing” funktsiooni, et olla rohkem täpsem.'
	),
	array(
		0 => 'Kuidas ma otsin kasutajaid?',
		1 => 'Vajuta “Liikmed” ja siis “Leia kasutaja” linki.'
	),
	array(
		0 => 'Kuidas ma leian omaenda postitused?',
		1 => 'Enda postitusi saad sa vaadata, klikkides lingil "Vaata oma postitusi". Et leida oma teemasid, kasuta täiendatud otsingut ja määra valikud  sobivaks.',
	),
	array(
		0 => '--',
		1 => 'Teemade tellimised ja järjehoidjad',
	),
	array(
		0 => 'Mis vahe on tellimisel ja järjehoidjal?',
		1 => 'Järjehoidja phpBB3\'s on peaaegu nagu järjehoidjad brauseris. Sind ei teavitata uuendusest, kuid saad tulla kiiresti teema juurde tagasi. Tellimise korral sind teavitatakse uuendusest teemas või foorumis sinu valitud viisil.',
	),
	array(
		0 => 'Kuidas ma saan lisada järjehoidjasse või tellida teemat?',
		1 => 'Lisada järjehoidjasse või tellida teemat saad kui vajutad "Teema sätted" menüüd otsingulahtri kõrval.',
	),
	array(
		0 => 'Kuidas ma tellin teemasid või foorumeid?',
		1 => 'Et tellida foorumit, vajuta "Telli foorum" lingile. Et tellida teemat, vasta teemale, kui tellimise valik on valitud  postituse seadetes või vajuta nuppu "Telli teema".',
	),
	array(
		0 => 'Kuidas ma eemaldan tellimusi?',
		1 => 'Et eemaldada tellimusi, mine juhtpaneeli ja järgi juhiseid.'
	),
	array(
		0 => '--',
		1 => 'Manused'
	),
	array(
		0 => 'Mis manused on siin foorumil lubatud?',
		1 => 'Iga administraator võib määrata ise, milliseid tüüpe manuseid ta lubab ja milliseid mitte. Kui pole kindel, millised on lubatud, võta ühendust administraatoriga.'
	),
	array(
		0 => 'Kuidas ma leian oma manused?',
		1 => 'Et leida nimekiri sinu üleslaetud manustest, mine juhtpaneeli ja järgi juhiseid.'
	),
	array(
		0 => '--',
		1 => 'phpBB küsimused',
	),
	array(
		0 => 'Kes kirjutas selle foorumitarkvara?',
		1 => 'Selle foorumi (muutmata kujul) on tootnud, avaldanud ja õigustega kaitsnud <a href="https://www.phpbb.com/">phpBB Grupp</a>. Foorumitarkvara on väljalastud GNU Üldise Avaliku Litsentsi, versioon 2 (GPL-2.0) alusel ja on täiesti tasuta kasutatav kõigile. Rohkem informatsiooni phpBB kohta leiad <a href="https://www.phpbb.com/about/">phpBB.com</a> veebilehelt. Eestikeelse tõlke on kirjutanud ja avaldanud phpBBeesti.',
	),
	array(
		0 => 'Miks ei ole siin X võimalust?',
		1 => 'Oma soove tulevaste versioonide suhtes saad avaldada <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a> keskkonnas, kus saad hääletada juba olemas olevate ideede eest, ning lisada oma. Eestikeelse tõlke kohta saad oma ettepanekuid esitada phpBBeesti kaudu.'
	),
	array(
		0 => 'Kellega ma ühendust võtan solvava materjali ja/või juriidilise küsimuse osas?',
		1 => 'Iga administraatoriga võid kontakteeruda kes on “Meeskond” leheküljel välja toodud. Kui ikka ei saa vastust, võta ühendust domeeninime omanikuga (tee <a href="http://www.google.com/search?q=whois">whois käsk</a>) või kui foorum jookseb tasuta teenusel, võta ühendust teenuse pakkujaga. Palun pane tähele, phpBB grupil ei ole   <strong>absoluutselt midagi pistmist nendes küsimustes</strong> ja teda ei saa vastutusele võtta. Ära võta ühendust nendega küsimuses, mis pole otseselt phpBB saidiga seotud. Kui siiski saadad neile sedasorti probleemi, võid mitte vastust saada'
	),
	array(
		0 => 'Kuidas ma saan ühendust võtta selle foorumi haldajaga?',
		1 => 'Kõik kasutajad saavad kasutada foorumi funktsiooni “Kontakt” vormi, juhul kui see valik on lubatud foorumi haldajal.<br />Foorumi liikmed saavad ka näha “Meeskond” linki.',
	),
);
