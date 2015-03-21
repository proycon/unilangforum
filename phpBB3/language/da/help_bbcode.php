<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: help_bbcode.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
		1 => 'Introduktion'
	),
	array(
		0 => 'Hvad er BBkode?',
		1 => 'BBkode er en speciel implementering af HTML. Hvorvidt du aktuelt har muligheden for at anvende BBkode i dine indlæg i dette forum, er defineret af administratoren. Du kan selv fravælge denne mulighed pr. emne når du skriver et indlæg. BBkode skrives på samme måde som HTML, hvor teksten omsluttes af en start- og en slutkode, koderne er omsluttet af hakparenteser [ og ] i stedet for &lt; og &gt; og de tilbyder større kontrol over hvor og hvordan teksten præsenteres. Afhængig af den skabelon der anvendes på forummet, er der direkte adgang til en guide, mens du skriver en besked. Selv med denne nyttige funktion, vil du sikkert finde nedenstående vejledning mere uddybende.'
	),
	array(
		0 => '--',
		1 => 'Tekstformatering'
	),
	array(
		0 => 'Hvordan formateres fed, kursiv og understreget tekst?',
		1 => 'BBkode indeholder tags som giver mulighed for hurtigt at ændre på tekstens basale udseende. Her er nogle eksempler:<ul><li>For at lave fed skrift, omsluttes teksten af <strong>[b][/b]</strong>, f.eks.: <br /><br /><strong>[b]</strong>Hej<strong>[/b]</strong><br /><br />bliver til: <strong>Hej</strong></li><li>For at lave en understregning, brug <strong>[u][/u]</strong>, f.eks.:<br /><br /><strong>[u]</strong>Godaften<strong>[/u]</strong><br /><br />bliver til: <span style="text-decoration: underline">Godaften</span></li><li>For at lave kursiv tekst, brug <strong>[i][/i]</strong>, f.eks.:<br /><br />Det er <strong>[i]</strong>smukt!<strong>[/i]</strong><br /><br />giver: Det er <i>smukt!</i></li></ul>'
	),
	array(
		0 => 'Hvordan ændres tekstens farve eller størrelse?',
		1 => 'For at ændre farven eller størrelsen på din tekst, kan følgende tags anvendes. Vær opmærksom på at tekstens udseende kan variere, afhængig af hvilken browser og det operativsystem du anvender: <ul><li>Ændring af tekstens farve opnås ved at omslutte den med <strong>[color=][/color]</strong>. Du kan definere farven, enten ved farvens navn (f.eks.: red, blue, yellow, osv og bemærk at du ikke kan anvende danske farvebetegnelser i denne sammenhæng), eller det hexadecimale alternativ, f.eks.: #FFFFFF, #000000. For at lave rød farve, kan du eksempelvis bruge:<br /><br /><strong>[color=red]</strong>Hej!<strong>[/color]</strong><br /><br />eller<br /><br /><strong>[color=#FF0000]</strong>Hej!<strong>[/color]</strong><br /><br />Begge muligheder vil komme til at se sådan ud: <span style="color:red">Hej!</span></li><li>For at ændre tekstens størrelse omsluttes den på samme måde, ved at bruge <strong>[size=][/size]</strong>. Denne tag afhænger af den skabelon brugeren har valgt, men det anbefalede format er en nummerisk værdi, som repræsenterer tekststørrelsen i procent, startende med 20 (meget lille) til og med 200 (meget stor). For eksempel:<br /><br /><strong>[size=30]</strong>LILLE<strong>[/size]</strong><br /><br />vil generelt blive til <span style="font-size:30%;">LILLE</span><br /><br />og:<br /><br /><strong>[size=200]</strong>ENORM!<strong>[/size]</strong><br /><br />vil se sådan ud: <span style="font-size:200%;">ENORM!</span></li></ul>'
	),
	array(
		0 => 'Kan jeg kombinere tags?',
		1 => 'Ja, selvfølgelig, for at få brugernes opmærksomhed kan du eksempelvis skrive:<br /><br /><strong>[size=200][color=red][b]</strong>SE PÅ MIG!<strong>[/b][/color][/size]</strong><br /><br />Det vil se sådan ud: <span style="color:red;font-size:200%;"><strong>SE PÅ MIG!</strong></span><br /><br />Imidlertid anbefaler vi at du ikke overdriver og skriver en masse tekst på denne måde! Og husk, det er op til dig, der skriver indlægget at sikre at tags afsluttes korrekt. F.eks. er det følgende forkert:<br /><br /><strong>[b][u]</strong>Dette er ikke korrekt<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citere og skrive tekst med fast bredde'
	),
	array(
		0 => 'Citere tekst i svar',
		1 => 'Der er to måder du kan citere tekst, med eller uden reference.<ul><li>Bemærk, når du anvender citer funktionen for at svare på et indlæg, bliver indlægget du citerer tilføjet i dit eget indlæg indrammet i en <strong>[quote=&quot;&quot;][/quote]</strong> blok. Denne metode giver dig mulighed for at citere en person eller hvad du ellers måtte vælge! For, for eksempel at citere en stump tekst skrevet af Skovsgaard, skal du skrive sådan:<br /><br /><strong>[quote=&quot;skovsgaard&quot;]</strong>Skovsgaards tekst skrives her<strong>[/quote]</strong><br /><br />"skovsgaard skrev:" bliver automatisk tilføjet som overskrift i tekstblokken. Husk at du <strong>skal</strong> sætte anførselstegnene udenom det navn du vil citere.</li><li>Den anden metode giver mulighed for at citere hvad eller hvem som helst. Her skal teksten bare omsluttes af <strong>[quote][/quote]</strong> tags. Når indlægget vises, ses det i en tekstblok med "Citat" som overskrift.</li></ul>'
	),
	array(
		0 => 'Skrive kode eller data med fast bredde',
		1 => 'Hvis du ønsker at skrive en stump kode, eller i det hele taget noget der kræver en fast bredde, f.eks. Courier skrifttypen, skal du omslutte teksten med <strong>[code][/code]</strong> tags,<br /><br /><strong>[code]</strong>echo &quot;Dette er en stump kode&quot;;<strong>[/code]</strong><br /><br />Al formatering inden for <strong>[code][/code]</strong> tags bevares intakt når den vises. PHP-syntakser kan fremhæves ved at anvende <strong>[code=php][/code]</strong>, det kan anbefales når PHP-kodeeksempler skal vises i et indlæg, det øger læsevenligheden.'
	),
	array(
		0 => '--',
		1 => 'Opstillinger/lister'
	),
	array(
		0 => 'Opstilling med punkttegn',
		1 => 'BBkode understøtter to typer lister, hhv. med punkttegn og med tal/bogstaver. En liste med punkttegn viser hver linie efter hinanden, hver linie starter med et identisk punkt/karakter. For at oprette denne liste skal du bruge <strong>[list][/list]</strong> og definere hver ny linie i listen med <strong>[*]</strong>. Hvis du for eksempel vil oprette en liste over dine favoritfarver kan du skrive::<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rød<br /><strong>[*]</strong>Blå<br /><strong>[*]</strong>Gul<br /><strong>[/list]</strong><br /><br />Det vil resultere i denne liste:<ul><li>Rød</li><li>Blå</li><li>Gul</li></ul>'
	),
	array(
		0 => 'Opstilling med tal/bogstaver',
		1 => 'Den anden type liste giver dig kontrol over hvad der angives for hver linie. For at oprette en nummereret liste du bruge <strong>[list=1][/list]</strong> og <strong>[list=a][/list]</strong> for en alfabetisk. Som med punkttegnslisten, defineres ny linie med <strong>[*]</strong>. For eksempel:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Gå på indkøb<br /><strong>[*]</strong>Køb en ny computer<br /><strong>[*]</strong>Band over computeren når den strejker<br /><strong>[/list]</strong><br /><br />vil resultere i denne opstilling:<ol style="list-style-type: decimal;"><li>Gå på indkøb</li><li>Køb en ny computer</li><li>Band over computeren når den strejker</li></ol>For den alfabetiske liste bruger du:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Den første mulighed<br /><strong>[*]</strong>Den anden mulighed<br /><strong>[*]</strong>Den tredje mulighed<br /><strong>[/list]</strong><br /><br />Bliver til<ol style="list-style-type: lower-alpha"><li>Den første mulighed</li><li>Den anden mulighed</li><li>Den tredje mulighed</li></ol>'
	),
	array(
	// This block will switch the FAQ-Questions to the second template column
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Oprette links'
	),
	array(
		0 => 'Linke til et andet site',
		1 => 'BBkode understøtter flere måder at oprette links på, eller Uniform Resource Locators, bedre kendt som URL\'er.<ul><li>Den første måde bruger <strong>[url=][/url]</strong> tag, uanset hvad du taster efter = (lighedstegnet), vil resultere i at indholdet vil opføre sig som et link. For at linke til eksempelvis www.phpBB.com, kan du bruge:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Besøg phpBB!<strong>[/url]</strong><br /><br />Resultatet giver dette link, <a href="http://www.phpbb.com/">Besøg phpBB!</a> Bemærk venligst at linket åbnes enten i samme, eller i et nyt browservindue, afhængig af brugerens browserindstillinger.</li><li>Hvis du ønsker selve URL\'en vist som et link, kan du gøre det bare ved at skrive:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Resultatet vil være dette link, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Derudover indeholder phpBB en facilitet kaldet <i>Magiske links</i>, den omsætter enhver URL med korrekt syntaks til et link, uden du behøver at specificere tags, heller ikke det startende http://. Hvis du eksempelvis skriver www.phpbb.com i dit indlæg, vil der automatisk blive linket til <a href="http://www.phpbb.com/">www.phpbb.com</a> når indlægget vises.</li><li>Magiske links fungerer på samme måde overfor emailadresser, du kan enten specificere en adresse, f.eks:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />som vil se sådan ud <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> eller du kan nøjes med at skrive no.one@domain.adr i din besked og den vil automatisk blive omsat.</li></ul><br />Som i alle andre sammenhænge kan du vælge at omslutte dine URL\'er med BBkode, som for eksempel <strong>[img][/img]</strong> (se næste punkt), <strong>[b][/b]</strong>, osv. Ganske som med HTML-tags, er det op til dig selv at sikre korrekt åbning og lukning af kodetags. Som eksempel:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br />er <span style="text-decoration: underline">íkke</span> korrekt, og kan resultere i at dit indlæg slettes, så vær omhyggelig.'
	),
	array(
		0 => '--',
		1 => 'Tilføje billeder og filer i indlæg'
	),
	array(
		0 => 'Tilføj et billede til et indlæg',
		1 => 'BBkode indeholder en tag som muliggør at indkludere et billede i dine indlæg. Der er to meget vigtige ting at huske, når denne tag bruges: For det første er der mange brugere, der ikke sætter pris på masser af billeder i indlæg og beskeder, og for det andet skal dette billede du ønsker at inkludere allerede være tilgængeligt på Internettet (det er ikke nok at det ligger lokalt på PC, medmindre du også bruger den som webserver!). For at vise et billede, skal du omfatte linket der peger på billedet med disse tags <strong>[img][/img]</strong>. For eksempel:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Som beskrevet under links ovenover, kan du omfatte et billede med en linktag <strong>[url][/url]</strong> hvis du vil, f.eks.<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />som vil se sådan ud:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Vedhæfte filer i et indlæg',
		1 => 'Filer kan vedhæftes alle steder i et indlæg ved at bruge <strong>[attachment=][/attachment]</strong> BBkoden, hvis boardadministratoren har åbnet for denne mulighed og du har de rette tilladelser til at vedhæfte filer. Når filen er vedhæftet dit indlæg, er der lige under dit indlæg, i samme skærmbillede, en boks hvor filens data kan ses. Her findes også en knap som anvendes hvis du vil placere filen inline, førnævnte BBkode tilføjes automatisk med denne.'
	),
	array(
		0 => '--',
		1 => 'Andet'
	),
	array(
		0 => 'Kan jeg tilføje mine egne tags?',
		1 => 'Hvis du er administrator på dette board og har de rette tilladelser, kan du tilføje yderligere BBkoder.'
	),
);
