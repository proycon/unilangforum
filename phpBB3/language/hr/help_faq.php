<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
*
*/
if (!defined('IN_PHPBB'))
{
exit;
}
$help = array(
array(
0=>'--',
1=>'Prijavljivanje i registracija'
),
array(
0=>'Zašto se trebam registrirati?',
1=>'Ne trebaš, ukoliko administrator/ica nije postavio/la uvjet da samo registrirane osobe mogu pregledavati forum/postati.<br />Bilo kako bilo, Registracijom ćeš dobiti pristup dodatnim opcijama koje nisu dostupne neregistriranim osobama [avatari, privatne poruke, elektronička pošta, korisničke grupe, itd.].<br />S obzirom da Registracija traje svega nekoliko minuta, preporučljivo je registrirati se.'
),
array(
0=>'Što je COPPA?',
1=>'COPPA [Child Online Privacy and Protection Act] je pravno pravilo, Sjedinjenih Američkih Država, doneseno 1998. godine, koje nalaže odobrenje od strane roditelja/staratelja za prikupljanje osobnih podataka [od] osoba mlađih od 13 godina.<br />Ukoliko nisi siguran/na odnosi li se spomenuto pravno pravilo na tebe, zatraži pravni savjet od stručne osobe.<br />phpBB Tim ne daje pravne savjete što će reći da je potpuno besmisleno kontaktirati phpBB Tim u vezi bilo kakve pravne stvari koja nije direktno vezana uz phpbb.com Web stranice odnosno phpBB software.',
),
array(
0=>'Zašto se ne mogu registrirati?',
1=>'Moguće je da je administrator/ica: onemogućio/la korisničko ime kojim se pokušavaš registrirati [ili isto već postoji], onemogućio/la adresu elektroničke pošte kojom se pokušavaš registrirati, isključio/la tvoju IP adresu odnosno onemogućio/la Registraciju da bi spriječio/la otvaranje novih korisničkih računa.<br />Bilo kako bilo, kontaktiraj administratora/icu za pomoć.',
),
array(
0=>'Zašto se ne mogu prijaviti na forum “po prvi put”?',
1=>'Jesi li upisao/la točno <em>korisničko ime</em> i <em>zaporku</em>.<br />Ukoliko jesi, dogodila se jedna od dvije moguće stvari: ako si prilikom Registracije, a COPPA podrška je bila omogućena, kliknuo/la na <em>Slažem se i imam manje od 13 godina</em> trebat ćeš slijediti upute koje su ti stigle elektroničkom poštom; ili je možda potrebna aktivacija tvojeg korisničkog računa [za što si vidio/la obavijest ili prilikom same Registracije ili ti je stigla elektroničkom poštom].<br />Ukoliko si eliminirao/la obje gornje mogućnosti, i još uvijek se ne možeš prijaviti, kontaktiraj administratora/icu [da provjeri što (ni)je u redu s tvojim korisničkim računom].'
),
array(
0=>'Zašto se ne mogu prijaviti na forum?',
1=>'Jesi li se <em>registrirao/la</em>? Da bi se mogao/la prijaviti na forum, trebaš se registrirati.<br />Jesi li upisao/la <em>točne podatke</em> za prijavljivanje? Provjeri korisničko ime i zaporku.<br />Jesi li <em>isključen/a</em> s foruma [zabranjen ti je pristup]? Ukoliko jesi, [kod prijavljivanja ćeš vidjeti poruku o tome], kontaktiraj administratora/icu [da saznaš razlog(e) isključenja].<br />Ukoliko si eliminirao/la sve tri gornje mogućnosti, i još uvijek se ne možeš prijaviti, kontaktiraj administratora/icu [da provjeri što (ni)je u redu s tvojim korisničkim računom].'
),
array(
0=>'Zašto se “više” ne mogu prijaviti na forum?',
1=>'Dva su moguća razloga: ili si upisao/la <em>netočno</em> korisničko ime i(li) zaporku; ili je administrator/ica <em>izbrisao/la</em> tvoj korisnički račun.<br />Ukoliko je u pitanju potonje: možda nikada nisi ništa postao/la, [uobičajeno je periodično izbrisivanje korisničkih računa korisnika/ca koji/e ništa ne postaju da bi se smanjila veličina baze], pa se pokušaj ponovo registrirati.'
),
array(
// <!-- Kocka je hičena! -->
0=>'Izgubio/la sam zaporku!',
1=>'Nije smak svijeta! Jest da je tvoja trenutna zaporka izgubljena [jer je kriptirana u bazi i ne može ti biti ponovo poslana], no, možeš zatražiti novu.<br />Klikneš na <em>Prijava</em> te na stranici koja će ti se otvoriti klikneš na <em>Zaboravio/la sam zaporku</em>. Upišeš tražene podatke... Daljnje upute će ti stići elektroničkom poštom.'
),
array(
0=>'Kako mogu onemogućiti automatsko odjavljivanje s foruma?',
1=>'Ukoliko ne upališ opciju <em>“Zapamti me”</em> kada se prijaviš, forum će te držati prijavljenim/om samo za tvojeg boravka na forumu [odjavit će te kad odeš s foruma]. To sprečava zlouporabu tvojeg korisničkog računa.<br />Da bi ostao/la prijavljen/a, upali(š) opciju <em>“Zapamti me”</em> prilikom prijavljivanja [što nije preporučljivo ako forumu pristupaš s tuđeg, a ne sa svojeg računala].<br />Spomenuta opcija je vidljiva samo ukoliko ju je administrator/ica omogućio/la.'
),
array(
0=>'Što “Izbriši sve kolačiće” radi?',
1=>'“Izbrisuje sve kolačiće koje je kreirao phpBB, a koji, inače, sadrže informacije o tvojem prijavljivanju, pregledanim/pročitanim forumima/temama/postovima i sl.<br />Ukoliko imaš problema s prijavljivanjem/odjavljivanjem, [obično] pomaže izbrisivanje kolačića.',
),
array(
0=>'--',
1=>'Korisničke postavke'
),
array(
0=>'Kako mogu promijeniti svoje postavke?',
1=>'Sve tvoje postavke, ako si registriran/a, pohranjene su u bazi.<br /><em>Prijaviš se</em> i klikneš na link <em>Profil/Postavke</em> što će te odvesti na stranicu na kojoj možeš promijenite sve svoje postavke.'
),
array(
0=>'Kako mogu onemogućiti pojavu mog korisničkog imena na online popisu?',
1=>'U korisničkom profilu [<em>Profil/Postavke</em>] upališ opciju <em>Sakrij moj online status</em> [čime ćeš (p)ostati vidljiv/a samo sebi i administratoru/ici, a za ostale ćeš postati skriven/a].'
),
array(
0=>'Zašto je vrijeme prikazano netočno?',
1=>'Zanemarimo li mogućnost, što se vrlo rijetko događa, da server nije dobro podešen, vrijeme je gotovo uvijek točno prikazano, no, može biti da je ono što vidiš vrijeme <em>druge vremenske zone</em>. Ukoliko je to slučaj, promijeni postavke svojeg korisničkog profila tako da izabereš onu vremensku zonu koja odgovara području u kojem se nalaziš, npr. Zagreb. Uzmi u obzir da mijenjanje vremenske zone, kao i većinu postavki, može napraviti samo registrirani/a korisnik/ca.'
),
array(
0=>'Zašto je vrijeme i dalje prikazano netočno iako sam promijenio/la vremensku zonu?',
//1=>'Ukoliko si siguran/na da si postavio/la točnu <em>vremensku zonu</em> te upalio/la opciju <em>ljetnog vremena</em>, ali je vrijeme i dalje netočno prikazano, najvjerojatniji razlog je da server nije dobro podešen. Ako je potonje u pitanju, molim(o), obavijesti administratora/icu [da bi ispravio/la grešku].'
1=>'Ukoliko si siguran/na da si postavio/la točnu <em>vremensku zonu</em>, ali je vrijeme i dalje netočno prikazano, najvjerojatniji razlog je da server nije dobro podešen. Ukoliko je potonje u pitanju, molim(o), obavijesti administratora/icu [da ispravi grešku].'
),
array(
0=>'Zašto mog jezika nema na popisu?',
1=>'Dva su moguća razloga: ili administrator/ica <em>nije instalirao/la</em> tvoj jezik ili forum <em>nije preveden</em> na tvoj jezik.<br />Pitaj administratora/icu foruma može li instalirati jezični paket koji želiš. Ukoliko ne postoji prijevod na tvoj jezik, slobodno ga napravi. Više informacija o tome možeš naći na <a href="https://www.phpbb.com/">phpBB</a>&reg; stranicama.'
),
array(
0=>'Što trebam napraviti da bi se vidjela slika ispod mojeg korisničkog imena?',
1=>'Prilikom pregledavanja postova moguće je vidjeti dvije slike ispod korisničkih imena.<br />Prva slika, statusnica, povezana je sa statusom korisnika/ce; obično su to zvjezdice/blokovi koji označavaju: koliko je postova postao/la korisnik/ca odnosno funkciju korisnika/ce na forumu [npr. administrator/ica].<br />Ispod nje se može nalaziti veća slika zvana avatar [obično jedinstvena/osobna za svakog/u korisnika/cu].<br />Dopuštenja o korištenju statusnica/avatara, kao i izbor dostupnosti istih, daje administrator/ica foruma [slobodno ga/ju kontaktiraj (sa) zamolbom o dopuštenju statusnica/avatara ukoliko isto/a nije dao/la].'
),
array(
0=>'Kako mogu promijeniti svoj status?',
1=>'Većina foruma koristi statuse za prikaz broja postova koje je postao/la određeni/a korisnik/ca, te za identifikaciju korisnika/ca koji/e obavljaju određene funkcije na forumu [obično oni/e imaju poseban status, npr. administratori/ce, moderatori/ce].<br />U pravilu, svoj status ne možeš direktno promijeniti.<br />Zloupotrebljavanje foruma, u smislu postanja puno postova samo zato da bi se dosegao što veći status, nema nikakvog smisla jer administratori(ce)/moderatori(ce) mogu <em>smanjiti</em> nečiji status [npr. smanjenjem broja postova...].'
),
array(
0 => 'Kako mogu dodati avatara?',
1 => 'Avatara možeš dodati u svom korisničkom profilu <em>[Profil/Postavke]</em> putem jedne od sljedeće četiri metode: korištenjem Gravatara, (iza)biranjem iz Galerije avatara, linkanjem na avatara odnosno pohranjivanjem avatara.',
),
array(
0=>'Zašto se trebam prijaviti ako želim korisniku/ci foruma poslati elektroničku poštu?',
1=>'Ukoliko je administrator/ica omogućio/la slanje elektroničke pošte korisnicima/ama foruma putem ugrađenog obrasca elektroničke pošte: tu opciju mogu koristiti samo registrirani/e korisnici/e [čime se sprečava zlouporaba forumova sistema elektroničke pošte od strane anonimnih osoba].'
),
array(
// <!-- Kocka je hičena! -->
0=>'--',
1=>'Postanje'
),
array(
0=>'Kako mogu postati [objaviti] temu/post na forum(u)?',
1=>'Klikneš na odgovarajući gumb na forumu/temi [npr. <em>nova tema</em>, <em>odgovori</em>...].<br />Radnje koje (ne)možeš raditi su uvijek prikazane na dnu ekrana foruma/teme [npr. <em>Možeš započinjati nove teme</em>, <em>Ne možeš započinjati nove teme</em>...].<br />Ovisno o tome kako je administrator/ica odredio/la, postanje može biti omogućeno svima ili, pak, samo registriranim korisnicima/ama.'
),
array(
0=>'Kako mogu urediti/izbrisati post?',
1=>'Post možeš urediti/uređivati, [bilo kada odnosno, ukoliko je administrator/ica tako odredio, samo određeno vremensko razdoblje nakon postanja posta odnosno uopće ne], klikom na gumb <em>uredi</em>.<br />Ukoliko je u međuvremenu netko odgovorio na tvoj post, a ti ga naknadno urediš, primijetit ćeš da se “u postu pojavila” rečenica koja govori o tome koliko si puta i kada zadnji put uredio/la post [rečenica se neće pojaviti ukoliko nije bilo odgovora na post].<br />Post možeš izbrisati klikom na gumb <em>izbriši</em>. Primijetit ćeš da neke postove nećeš moći izbrisati [npr. ako je u međuvremenu netko odgovorio na njih odnosno, ukoliko je administrator/ica tako odredio, uopće ne].<br />Postoji mogućnost da administrator(ica)/moderator(ica) izmijeni/izbriše tvoj post [u prvom slučaju bi svakako trebao/la napisati opasku što je i zašto izmijenio/la].'
),
array(
0=>'Kako mogu dodati potpis?',
1=>'Potpis možeš napraviti/uređivati u svom korisničkom profilu <em>[Profil/Postavke]</em>.<br />Ukoliko si upalio/la opciju da se potpis automatski dodaje svim tvojim postovima/porukama, a u neki post/poruku ne želiš dodati potpis, jednostavno za vrijeme pisanja samog posta/poruke odoznačiš opciju dodavanja potpisa.<br />Ukoliko nisi upalio/la opciju da se potpis automatski dodaje svim tvojim postovima/porukama, a u neki post/poruku želiš dodati potpis, jednostavno za vrijeme pisanja samog posta/poruke označiš opciju dodavanja potpisa.'
),
array(
0=>'Kako mogu kreirati anketu?',
1=>'Kada započneš [otvoriš] novu temu [ili izmijeniš prvi post postojeće teme - ako imaš dopuštenje] vidjet ćeš formu <em>Kreiranje ankete</em> ispod okvira za pisanje teksta posta [ako to ne vidiš, vjerojatno nemaš dopuštenje za kreiranje anketa]. Upišeš pitanje i [barem] dva moguća odgovora [svaki u zaseban redak], kojih maksimalan limit određuje administrator/ica. Možeš postaviti (i) vremensko ograničenje trajanja ankete [upišeš broj dana; 0=neograničeno], [broj] koliko opcija korisnik/ca može odabrati prilikom glasovanja te o(ne)mogućiti “predomišljanje” [“ponovljeno” glasovanje (poništenje danog/ih glasa/ova te glasovanje za drugu/e opciju/e)].'
),
array(
0=>'Zašto ne mogu dodati još [više] odgovora [opcija]?',
1=>'Maksimalan limit odgovora [opcija] određuje administrator/ica. Ukoliko smatraš da bi taj broj trebalo povećati, kontaktiraj administratora/icu.'
),
array(
0=>'Kako mogu urediti/izbrisati anketu?',
1=>'Ankete može urediti/uređivati/izbrisati samo ona/j koja/i ih je i kreirala/o, moderator/ica i(li) administrator/ica. Da bi izmijenio/la anketu, ako imaš dopuštenje, urediš prvi post u temi [ako je kreirana, anketa se uvijek nalazi u prvom postu u temi]. Ti anketu možeš izmijeniti samo ako nitko još nije glasovao, dok ju moderatori(ce)/administratori(ce), mogu mijenjati bilo kada.<br />Anketu možeš izbrisati samo ako nitko još nije glasovao.'
),
array(
0=>'Zašto ne mogu pristupiti tematskom forumu?',
1=>'Nekim tematskim forumima mogu pristupiti samo određeni/e korisnici/e i(li) korisničke grupe. Za pregledavanje, postanje... na takvim forumima treba ti posebna autorizacija koju možeš (za)tražiti/dobiti samo od moderatora(ice)/administratora(ice).'
),
array(
0=>'Zašto ne mogu dodavati privitke?',
1=>'Mogućnost dodavanja privitaka, na forumu(ima) za grupu(e)/korisnika(cu) daje administrator/ica foruma.<br />Ukoliko ne možeš doda(va)ti privitke, moguće je da je administrator/ica onemogućio/la dodavanje privitaka baš za taj određen forum na kojem si pokušao/la dodati privitak/ke odnosno da samo određeni/e korisnici(e)/grupe mogu dodavati privitke na tom forumu.<br />Ukoliko ti nije jasno zašto [baš] ti ne možeš doda(va)ti privitke, kontaktiraj administratora/icu.'
),
array(
0=>'Zašto sam dobio/la upozorenje?',
1=>'Svaki/a administrator/ica postavlja vlastita pravila koja vrijede na [njegovom(im)/njezinom(im)] forumu/ima. Ne vrijede na svim forumima ista pravila. Ukoliko misli da si prekršio/la [jedno od/više] pravila, može te upozoriti. Ukoliko dobiješ upozorenje, imaj na umu da je to odluka administratora/ice foruma te da phpBB Limited nema ništa s time.'
),
array(
0=>'Kako mogu prijaviti post?',
1=>'Mogućnost prijave post(ov)a daje administrator/ica foruma.<br />Ukoliko je prijavljivanje postova omogućeno, kod posta kojeg želiš prijaviti nalazi se gumb klik na kojeg će te provesti kroz postupak prijave posta.'
),
array(
0=>'Čemu služi gumb “Pohrani” prilikom postanja/pisanja poruke(a)?',
1=>'Omogućuje pohranjivanje [skice] posta/poruke, koji/a naknadno može biti završen/a i postan/poslana, a što je moguće iz korisničkog profila <em>[Profil/Postavke]</em> odnosno prilikom postanja [<em>Učitaj</em>].'
),
array(
0=>'Zašto [moj] post treba biti odobren?',
1=>'Administrator/ica može donijeti odluku prema kojoj je na [određenom(im)] forumu(ima) potrebno odobrenje da bi post(ovi) bio(li) postan(i) ili te je administrator/ica pridružio/la korisničkoj grupi članovima koje postove treba odobriti da bi bili objavljeni. Za detalje, kontaktiraj administratora/icu.'
),
array(
0=>'Kako mogu bumpirati temu?',
1=>'Klikom na link “Bumpiraj” što će temu postaviti na vrh prve stranice foruma. Ukoliko ne vidiš link, bumpiranje je ili onemogućeno ili treba proći određen vremenski period od zadnjeg posta(nja)/bumpiranja. Temu možeš bumpirati i postanjem posta, no, obrati pažnju na pravila foruma jer postoji mogućnost da je pravilima zabranjeno bumpiranje postanjem.'
),
array(
0=>'--',
1=>'Uređivanje i tipovi tema'
),
array(
0=>'Što je BBKod?',
1=>'BBKod je specijalna implementacija HTMLa.<br />Mogućnost korištenja BBKoda daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to što je administrator/ica odredio/la, opcionalno sam/a možeš (de)aktivirati korištenje BBKoda.<br />BBKod je sličan HTMLu u stilu; tagovi se umeću u vitičaste zagrade [i] [umjesto &lt;i&gt;] (a) što nudi veću kontrolu prikaza. Kod [tagovi] se može pisati ručno, no, ovisno o predlošku kojeg koristiš, vidjet ćeš da je dodavanje BBKoda postovima moguće i putem sučelja iznad prostora za post [poruku] na obrascu za pisanje postova.<br />Za više informacija o BBKodu pogledaj Vodič kojemu možeš pristupiti sa stranice za pisanje/uređivanje postova.'
),
array(
0=>'Mogu li koristiti HTML?',
1=>'Ne. Većinu onoga što je moguće dobiti/prikazati korištenjem HTMLa moguće je dobiti/prikazati i korištenjem BBKoda.'
),
array(
0=>'Što su smajlići?',
1=>'Smajlići [Smileys/Emoticons] su male sličice koje <em>prikazuju</em> emocije/razmišljanja osobe [koja ih je <em>ubacila</em> u post, npr. :) znači smijem se, sretan/na sam, :( znači plačem, tužan/na sam...].<br />Smajliće u post možeš <em>ubaciti</em> na dva načina: upisivanjem kratkog koda [ako je administrator/ica odobrio/la, svaki smajlić ima svoj vlastiti kod] i(li) klikom na smajlića [smajlići se nalaze u sklopu obrasca za pisanje postova; u pravilu se vidi samo <em>prvih</em> 20, a ostale možeš vidjeti (i <em>ubaciti</em>) klikom na <em>Ostali smajlići</em>].<br />Nije preporučljivo ubacivati/ubaciti puno smajlića u post jer se time gube čitljivost i preglednost.<br />Administrator/ica može odrediti maksimalan dopušten broj smajlića “po” postu.'
),
array(
0=>'Mogu li postati slike?',
1=>'Da. Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u postovima/porukama, i drugo, ukoliko je administrator/ica foruma onemogućio postanje privitaka, slika koju umećeš/umetneš treba biti dostupna na Internetu, npr. http://www.example.com/my-picture.gif [ne može postojati samo na tvojem računalu - osim ako imaš webserver odnosno na stranicama koje nisu dostupne javnosti, stranicama zaštićenima zaporkama i sl.].<br />Da bi postao/la sliku: trebaš obuhvatiti URL, na kojem se slika nalazi, sa BBKod [img][/img] tago(vi)m(a).'
),
array(
0=>'Što su globalne obavijesti?',
1=>'Globalne obavijesti su postovi koji sadrže važne informacije što će reći da bi ih bilo pametno pročitati čim ih uočiš.<br />Pojavljuju se na vrhu svakog foruma i u korisničkom profilu <em>[Profil/Postavke]</em>.<br />Administrator/ica određuje tko sve ima pravo postati globalne obavijesti.'
),
array(
0=>'Što su obavijesti?',
1=>'Obavijesti su postovi koji sadrže važne informacije što će reći da bi ih bilo pametno pročitati čim ih uočiš.<br />Pojavljuju se na vrhu svake stranice foruma na kojem su postane.<br />Administrator/ica određuje tko sve ima pravo postati obavijesti.'
),
array(
0=>'Što je “važno”?',
1=>'“Važno” su postovi koji često sadrže važne informacije što će reći da bi ih bilo pametno pročitati čim ih uočiš.<br />Pojavljuju se na vrhu prve stranice foruma [ispod eventualnih obavijesti] na kojem su postani.<br />Administrator/ica određuje tko ih sve ima pravo postati.'
),
array(
0=>'Što su zaključane teme?',
// <!-- Kocka je hičena! -->
1=>'Zaključane teme su teme koje je moderator(ica)/administrator(ica) [zbog nekog, a može ih biti puno, razloga] zaključao/la.<br />Moguće ih je samo pregledavati [dakle, nije moguće uređivati/izbrisati... postove...]. Ankete koje se nalaze u njima [ako nisu po određenju] završavaju istog trena kada moderator(ica)/administrator(ica) zaključa temu.<br />Ukoliko imaš dopuštenje, [ti] možeš zaključavati teme koje si pokrenuo/la.'
),
array(
0=>'Što su ikone tema?',
1=>'Ikona teme, [bira ju autor/ica], je sličica povezana s postom, a koja bi trebala ukazivati na sadržaj posta.<br />Mogućnost korištenja ikona tema daje administrator/ica foruma.'
),
array(
0=>'--',
1=>'--'
),
array(
0=>'--',
1=>'Stupnjevanje korisnika/ca i korisničke grupe'
),
array(
0=>'Što su administratori/ce?',
1=>'Administratori/ce su osobe s najvišom razinom kontrole nad cijelim forumom.<br />Mogu kontrolirati sve aspekte foruma [postavljanje dopuštenja, isključivanje korisnika/ca, stvaranje korisničkih grupa/moderatora(ica), moderiranje foruma itd.], [a sve] ovisno o tome koja im je prava dodijelio/la glavni/a administrator/ica.'
),
array(
0=>'Što su moderatori/ce?',
1=>'Moderatori/ce su osobe [osoba ili (korisnička) grupa osoba] čiji je <em>“posao”</em> održavanje foruma.<br />Imaju ovlasti mijenjanja/izbrisivanja postova, zaključavanja/otključavanja/premještanja/izbrisivanja/razdvajanja tema u forumima koje održavaju.<br />Tu su (i) da bi spriječili/e korisnike/ce od skretanja s tema/objavljivanja nedopuštenih sadržaja i sl.'
),
array(
0=>'Što su korisničke grupe?',
1=>'Korisničke grupe su grupe u koje administratori/ce grupiraju korisnike/ce.<br />Svaki/a korisnik/ca može pripadati većem broju grupa.<br />Svakoj grupi mogu biti dodijeljena individualna prava pristupa, što administratorima/cama olakšava dodjeljivanje određenih prava određenim korisnicima/ama [npr. proglašavanje više korisnika/ca moderatorima/cama foruma, pravo pristupa “privatnim” tematskim forumima itd.].'
),
array(
0=>'Kako mogu postati članom/icom korisničke grupe?',
1=>'Klikneš na <em>Korisničke grupe</em> u korisničkom profilu <em>[Profil/Postavke]</em> što će te odvesti na stranicu na kojoj ćeš vidjeti korisničke grupe.<br />Nemaju sve grupe <em>otvoren pristup</em> [neke su zatvorene, neke skrivene...].<br />Ukoliko imaš pristup korisničkoj grupi, za pristupanje klikneš na odgovarajuću naredbu [obično <em>Pristupi grupi</em>].<br />Ukoliko je grupa otvorenog tipa, automatski ćeš postati članom/icom, ukoliko je za pristupanje potrebno odobrenje, vođa grupe će odobriti/neodobriti zahtjev, ako neodobri zahtjev bilo bi lijepo da ga/ju ne gnjaviš traženjem objašnjenja, jer, ukoliko se zaista dogodilo da ti je neodobri/la zahtjev, sigurno je imao/la dobar razlog.'
),
array(
0=>'Kako mogu postati vođa korisničke grupe?',
1=>'Korisničke grupe inicijalno kreira administrator/ica pri čemu odmah određuje i vođu grupe.<br />Ukoliko želiš postati vođom već postojeće grupe ili, pak, (za)tražiti otvaranje nove grupe, kontaktiraj administratora/icu [npr. privatnom porukom].',
),
array(
0=>'Zašto su [neke] korisničke grupe prikazane različitim bojama?',
1=>'Administrator/ica foruma određuje boje [članova/ica] korisničkih grupa da bi ih bilo lakše identificirati/razlikovati.'
),
array(
0=>'Što je “zadana korisnička grupa”?',
1=>'Ukoliko si član/ica više od jedne grupe, postavke tvoje zadane grupe odnosit će se na prikaz tvojeg korisničkog imena u smislu kojom će bojom te s kojim statusom biti prikazano. Administrator/ica može odobriti promjenu zadane grupe putem korisničkog profila <em>[Profil/Postavke]</em>.'
),
array(
0=>'Što je “Tim” link?',
1=>'Link koji vodi na stranicu na kojoj se nalazi lista “osoblja” foruma [popis administratora/ica i moderatora/ica].'
),
array(
0=>'--',
1=>'Privatne poruke'
),
array(
0=>'Zašto ne mogu [po]slati privatne poruke?',
1=>'Tri su moguća razloga:<br /> - ili nisi registriran(a)/prijavljen(a);<br /> - ili je administrator/ica onemogućio/la privatne poruke za cijeli forum;<br /> - ili je administrator/ica tebi onemogućio/la slanje privatnih poruka.<br />U potonjem slučaju zatraži objašnjenje od administratora/ice.'
),
array(
0=>'Kako onemogućiti pojedine korisnike/ce da mi šalju privatne poruke?',
1=>'U korisničkom profilu <em>[Profil/Postavke]</em>, postavljanjem pravila, možeš blokirati/onemogućiti korisnika(e)/cu(e) da ti šalje(u) privatne poruke [poruke će automatski biti izbrisane].<br />Ukoliko dobivaš neželjene privatne poruke od određenog/e korisnika/ce, obavijesti administratora/icu [ima ovlasti spriječiti korisnika(e)/cu(e) u slanju privatnih poruka ikome].'
),
array(
0=>'Kome prijaviti spam odnosno uvredljive poruke dobivene od korisnika/ce foruma?',
1=>'Obrazac elektroničke pošte foruma uključuje osiguranje koje prati korisnike/ce koji/e šalju poruke. Obavijesti elektroničkom poštom administratora/icu o problemu [priloži čitavu poruku, uključujući i zaglavlje - ono sadrži detalje o korisniku/ci koji/a je poslao/la poruku]. Po primitku tvoje poruke, administrator/ica može poduzeti [za to predviđene] mjere.'
),
array(
0=>'--',
1=>'Prijatelji/ce i gnjavatori/ce'
),
array(
0=>'Što su liste prijatelja(ica)/gnjavatora(ica)?',
1=>'Liste prijatelja(ica)/gnjavatora(ica) služe “organiziranju ostalih korisnika/ca foruma”.<br />Osobe koje dodaš na listu prijatelja/ica bit će izlistane u korisničkom profilu <em>[Profil/Postavke]</em> da bi bez pretraživanja mogao/la vidjeti njihov online status te im poslati privatne poruke. Postovi i sl. tih osoba mogu biti posvijetljeni.<br />Postovi osoba koje dodaš na listu gnjavatora/ica bit će zadano skriveni.'
),
array(
0=>'Kako mogu dodati/izbrisati korisnika/cu na/s liste prijatelja(ica)/gnjavatora(ica)?',
1=>'Na dva načina:<br />- putem profila korisnika/ce [klikom na link dodaješ ga/ju na listu prijatelja(ica)/gnjavatora(ica)];<br />- putem korisničkog profila <em>[Profil/Postavke]</em> [upisivanjem korisničkog/ih imena u za to predviđeno polje].<br />Na isti način izbrisuješ korisnike/ce s lista.'
),
array(
0=>'--',
1=>'Pretraživanje foruma'
),
array(
0=>'Kako mogu pretraživati forum?',
1=>'Upisivanjem termina u kućicu za pretraživanje na početnoj stranici/forumu/temi odnosno klikom na <em>Pretražnik/Napredno pretraživanje</em> [link se nalazi na svim stranicama i vodi na formu naprednog pretraživanja].'
),
array(
0=>'Zašto pretraživanje nije dalo rezultat(a)e?',
1=>'Vjerojatno si upisao/la previše [uobičajenih] termina koje phpBB ne indeksira ili si bio/la previše nejasan(a)/neodređen(a). Budi određeniji/a te pokušaj [s] naprednim pretražnikom.'
),
array(
0=>'Zašto mi se pojavila prazna stranica?',
1=>'Pretraživanje je rezultiralo s previše rezultata koje server nije mogao obraditi. Budi određeniji/a te pokušaj [s] naprednim pretražnikom.'
),
array(
0=>'Kako mogu (pre)traži(va)ti korisnike/ce?',
1=>'Klikom na <em>Članstvo</em>, link se nalazi na svim stranicama, otvorit će se stranica, s popisom članova/ica foruma, na kojoj se nalazi forma za pretraživanje [<em>Pronađi korisničko ime</em>].'
),
array(
0=>'Kako mogu pronaći [sve] vlastite postove/teme?',
1=>'Klikom na link <em>Tvoji postovi</em>, koji se nalazi u korisničkom profilu <em>[Profil/Postavke] (na INFO dijelu Početne izborničke stranice)</em>, odnosno na stranici <em>Članstva</em>, koja prikazuje [tvoj] profil, odnosno izborom opcije <em>Tvoji postovi</em>, s padajućeg izbornika <em>Linki</em>, možeš pronaći vlastite postove, dok teme koje si pokrenuo/la možeš pronaći naprednim pretražnikom.'
),
array(
0=>'--',
1=>'Bookmarkiranje i pretplaćivanje'
),
array(
0=>'Koja je razlika između bookmarkiranja i pretplaćivanja?',
1=>'U starijim verzijama phpBBa, bookmarkiranje je bilo slično bookmarkiranju stranica preglednikom. Po bookmarkiranju teme, nisi bio/la obaviješten/a o novim postovima, ali si se [kasnije] mogao/la vratiti na temu bez traženja iste, dovoljno je bilo kliknuti na nju na popisu bookmarkiranih tema. Pretplaćivanje na temu/tematski forum omogućavalo ti je primanje obavijesti o novim postovima.<br />Od phpBBa 3.1, bookmarkiranje je slično pretplaćivanju u smislu da možeš biti obaviješten/a o ažuriranju teme. Pretplaćivanje ti [i dalje] omogućava primanje obavijesti o novim postovima u temama odnosno novima temama na tematskim forumima.<br />Opcije obavješćivanja bookmarkiranja i pretplaćivanja možeš postaviti u korisničkom profilu <em>[Profil/Postavke]</em> u <em>Postavkama obavijesti</em>.'
),
array(
0=>'Kako mogu bookmarkirati odnosno pretplatiti se na temu?',
1=>'Da bi bookmarkirao/la odnosno pretplatio/la se na temu, prilikom pregledavanja teme, dovoljno je izabrati s padajućeg izbornika teme odgovarajuću opciju odnosno, za pretplaćivanje, prilikom postanja posta, upaliti opciju <em>Obavijesti me kad odgovor bude postan</em>.'
),
array(
0=>'Kako se mogu pretplatiti na forum?',
1=>'Da bi se pretplatio/la na forum, prilikom pregledavanja foruma, dovoljno je kliknuti na link <em>Pretplati se</em>.'
),
array(
0=>'Kako se mogu odpretplatiti?',
1=>'U korisničkom profilu <em>[Profil/Postavke]</em> klikneš na link <em>Pretplate</em> i slijediš upute.'
),
array(
0=>'--',
1=>'Privitci'
),
// <!-- Kocka je hičena! -->
array(
0=>'Postanje kojih privitaka je dopušteno?',
1=>'Administrator/ica određuje postanje kojih privitaka je dopušteno.<br />
Ukoliko nisi siguran/na postanje kojih privitaka je dopušteno, kontaktiraj administratora/icu.'
),
array(
0=>'Kako mogu pronaći [sve] vlastite privitke?',
1=>'U korisničkom profilu <em>[Profil/Postavke]</em> klikneš na link <em>Privitci</em>.'
),
array(
0=>'--',
1=>'phpBB'
),
array(
0=>'Tko je napisao/la ovaj forum?',
1=>'Ovaj softver [u originalnom obliku] napravljen je i objavljen od strane <a href="https://www.phpbb.com/">phpBB Limited</a>. Dostupan je pod GNU General Public Licence verzija 2 (GPL-2.0) i može biti slobodno distribuiran. Za detalje posjeti: <a href="https://www.phpbb.com/about/">O phpBBu</a>. phpBB Limited zadržava sva autorska prava na ovaj softver.'
),
array(
0=>'Zašto X mogućnost nije dostupna?',
1=>'Ukoliko smatraš da neka mogućnost treba biti dodana, posjeti <a href="https://www.phpbb.com/ideas/">phpBB Centar Ideja</a>, (a) gdje možeš vidjeti [i glasovati za] već predložene ideje i(li) predložiti vlastite.'
),
array(
0=>'Koga kontaktirati u vezi zlouporabe/pravnih stvari vezanih uz forum?',
1=>'Kontaktiraj administratora(e)/icu(e) foruma. Ako ga/ju/ih ne možeš (pro)naći, kontaktiraj moderatora(e)/icu(e) foruma i njih pitaj koga bi trebao/la pitati. Ako i dalje ne dobiješ odgovor, kontaktiraj vlasnika/cu domene [<a href="http://www.google.com/search?q=whois">whois lookup</a>] ili pružatelja usluga. phpBB Limited nema apsolutno nikakvu kontrolu i ne može ni u kojem slučaju odgovarati za to kako, gdje i tko forum koristi. Potpuno je besmisleno kontaktirati phpBB Limited u vezi bilo kakve pravne stvari koja nije direktno vezana uz phpBB odnosno phpbb.com stranice. Ukoliko kontaktiraš phpBB Limited oko toga kako bilo koja treća stran(k)a koristi ovaj softver - ne očekuj odgovor.'
),
array(
0=>'Kako mogu kontaktirati administratora/icu?',
1=>'Ukoliko je administrator/ica omogućio/la “Kontakt” formu, putem iste, mogu ga/ju kontaktirati svi/e korisnici/e foruma.<br />Registrirani/e korisnici/e administratora/icu mogu kontaktirati (i) putem linka “Tim”.',
),
array(
/**
*
* <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Sukladno Zakonu o autorskom pravu i srodnim pravima,
* ostalim važećim propisima Republike Hrvatske,
* međunarodnim propisima i inim, jasno je, samo po sebi, da,
* nemaš, ama baš nikakvo, pravo izbrisati moje podatke
* iz ovog mog autorskog prijevoda.
* Nikakve "Internet" licence niti mogu, niti smiju niti jesu iznad zakona! 
* Ukoliko si "mislio/la" da te od povrede tuđih autorskih prava
* štiti nekakva licenca, dopuštenje, što li god, a što je ispod zakona,
* krivo si "mislio/la". 
* Nepoznavanje prava [ignorantia iuris] nikoga ne ispričava od odgovornosti
* već nepoznavanje prava škodi [ignorantia iuris nocet].
* Iz gornjeg je razvidno da ti zabranjujem da izbrišeš ikoji od mojih podataka,
* (a) koji se nalaze na ikojem mjestu, u ovom mom autorskom prijevodu.
* <!-- Danas će biti toplo i sunčano. -->
* </NE izbrisuj i NE mijenjaj!>
*
*/
0=>'--',
1=>'O prijevodu'
),
array(
0=>'Tko i kako do - original?',
1=>'Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je: <a href="http://ancica.sunceko.net/">Ančica Sečan</a>.<br />[U kompletu, s prijevodom, dolaze i lokalizirane sličke.]<br />Zadnju verziju ovog mog kompletnog prijevoda možeš preuzeti sa: <a href="http://ancica.sunceko.net">ancica.sunceko.net</a>.'
),
array(
0=>'Smijem li “preraditi”/“prerađivati” ovaj prijevod?',
1=>'Smiješ, uz uvjet: da mene, kao originalnu autoricu ovog mog kompletnog prijevoda, ne izbrišeš, (a) što znači da niti smiješ izbrisati moje podatke niti smiješ sebe odnosno ikoga/išta drugo potpisati kao autora/icu ovog mog kompletnog prijevoda.<br />Ukoliko napraviš ikakve izmjene ovog mog prijevoda, dužan/na si to naznačiti na sljedeći način:<br /> - u datoteci “common.php”, pod “translation_info”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ukoliko želiš, gornje (IiP odnosno P) može biti link], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu;<br /> - u datoteci “help_faq.php”, pod “Tko i kako do - prerade?”, bez interveniranja u ono što tamo piše, dakle, sve treba ostati u izvornom obliku, dodati novi redak sa svojim imenom i prezimenom odnosno pseudonimom, [ukoliko želiš (i) link do tebe odnosno kako te (pro)naći], uz opasku da se radi o, s tvoje strane, izmijenjenom prijevodu, [jasno je, samo po sebi, da: “Tko i kako do - original?”/“Smijem li “preraditi”/“prerađivati” ovaj prijevod?” (“naslove”/“sadržaj”) ne smiješ izbrisati/“preraditi”/“prerađivati”].<br />Iz gornjeg je razvidno da ne dopuštam uporabu/objavu, kako, ovog mog kompletnog prijevoda ukoliko izbrišeš moje podatke iz njega, tako (ni), preradu ovog mog kompletnog prijevoda ukoliko nije naznačeno, izričito (i to) u skladu s gornjom uputom, da se radi o preradi ovog mog kompletnog prijevoda [naime, tijekom godina, počev od 2003., do [(a), nažalost, i dalje (i)] danas, 2015., Netom su se počele pojavljivati razno razne “prerade” ovog mog kompletnog prijevoda, “izvitoperenog” do te mjere da se činilo kao da se radi o radu nepismene osobe, koja jedva natuca hrvatski jezik, a pravopis i gramatika su joj nepoznati pojmovi, (a) pri čemu nije bilo navedeno da se radilo o “prtljanju” po mom radu i tko ga je upropastio/la odnosno “moji originali”, ali, potpisani od strane osoba koje prstom nisu mrdnule osim što su moje podatke zamijenile svojima, plus minus “varijacije na temu”, (a) što je: nedopustivo(!)].<br />Danas će biti toplo i sunčano.'
),
array(
0=>'Tko i kako do - prerade?',
1=>'Clara pacta, boni amici! (;'
/**
*
* <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Sukladno Zakonu o autorskom pravu i srodnim pravima,
* ostalim važećim propisima Republike Hrvatske,
* međunarodnim propisima i inim, jasno je, samo po sebi, da,
* nemaš, ama baš nikakvo, pravo izbrisati moje podatke
* iz ovog mog autorskog prijevoda.
* Nikakve "Internet" licence niti mogu, niti smiju niti jesu iznad zakona! 
* Ukoliko si "mislio/la" da te od povrede tuđih autorskih prava
* štiti nekakva licenca, dopuštenje, što li god, a što je ispod zakona,
* krivo si "mislio/la". 
* Nepoznavanje prava [ignorantia iuris] nikoga ne ispričava od odgovornosti
* već nepoznavanje prava škodi [ignorantia iuris nocet].
* Iz gornjeg je razvidno da ti zabranjujem da izbrišeš ikoji od mojih podataka,
* (a) koji se nalaze na ikojem mjestu, u ovom mom autorskom prijevodu.
* <!-- Danas će biti toplo i sunčano. -->
* </NE izbrisuj i NE mijenjaj!>
*
*/
)
);
