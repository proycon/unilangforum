<?php
/**
*
* This file is part of the Norwegian (bokmål) Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Lars Christian Schreiner
* @license GNU General Public License, version 2 (GPL-2.0)
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
		0	=> '--',
		1	=> 'Introduksjon',
	),
	array(
		0	=> 'Hva er BBCode?',
		1	=> 'BBCode er en spesiell implementering av HTML. Det er opptil administratoren å bestemme om du faktisk kan bruke BBCode i innlegg på forumet. I tillegg kan BBCode deaktiveres i enkeltinnlegg via innleggsskjemaet. BBCode ligner i seg selv på HTML, tagger er omsluttet av firkantklammene [ og ] i stedet for &lt; og &gt;, og dette gir langt bedre kontroll over hva som vises og hvordan. Avhengig av hvilken mal du bruker, kan det hende at du synes det er enklere å legge til BBCode i innlegg ved hjelp av de klikkbare knappene over meldingsområdet på innleggsskjemaet. Allikevel vil du kanskje få nytte av denne veiledningen.',
	),
	array(
		0	=> '--',
		1	=> 'Tekstformatering',
	),
	array(
		0	=> 'Slik lager du fet, kursiv og understreket tekst',
		1	=> 'BBCode inneholder tagger som enkelt lar deg endre den grunnleggende tekststilen. Det gjøres på denne måten: <ul><li>For å gjøre en del av teksten fet, omgis den med taggene <strong>[b][/b]</strong>, for eksempel vil<br /><br /><strong>[b]</strong>Hallo<strong>[/b]</strong><br /><br />bli til <strong>Hallo</strong></li><li>Til understreking brukes <strong>[u][/u]</strong>, for eksempel blir <br /><br /><strong>[u]</strong>God morgen<strong>[/u]</strong><br /><br /> til <span style="text-decoration: underline">God morgen</span></li><li>Bruk <strong>[i][/i]</strong> til å kursivere teksten. Eksempel:<br /><br />Dette er <strong>[i]</strong>bra<strong>[/i]</strong>!<br /><br />Sistnevnte eksempel vil bli til Dette er <i>bra</i>!</li></ul>',
	),
	array(
		0	=> 'Hvordan endre skrifttfarge og -størrelse',
		1	=> 'Hvis du vil endre fargen eller størrelsen på teksten, kan følgende tagger brukes. Husk at visningen avhenger av leserens nettleser og operativsystem:<ul><li>Du endrer fargen på tekst ved å omslutte den med <strong>[color=][/color]</strong>. Du kan enten angi et alminnelig, engelsk fargenavn (f.eks. red, blue, yellow osv.) eller heksadesimale tallverdier, f.eks. #FFFFFF, #000000. Hvis du vil lage rød tekst, kan du f.eks. bruke:<br /><br /><strong>[color=red]</strong>Hallo!<strong>[/color]</strong><br /><br />eller<br /><br /><strong>[color=#FF0000]</strong>Hallo!<strong>[/color]</strong><br /><br />Begge deler vises som <span style="color:red">Hallo!</span></li><li>Du endrer tekststørrelsen på en lignende måte, med <strong>[size=][/size]</strong>. Denne taggen avhenger av malen brukeren har valgt, men det anbefalte formatet er en tallverdi som representerer tekststørrelsen i prosent, fra 20 (svært liten) til 200 (svært stor) som standard. For eksempel:<br /><br /><strong>[size=30]</strong>LITE<strong>[/size]</strong><br /><br />vil vanligvis bli <span style="font-size:30%;">LITE</span><br /><br />mens:<br /><br /><strong>[size=200]</strong>ENORM!<strong>[/size]</strong><br /><br />blir <span style="font-size:200%;">ENORM!</span></li></ul>',
	),
	array(
		0	=> 'Kan jeg kombinere BBCode-tagger?',
		1	=> 'Ja, selvsagt kan du det! Du kan for eksempel skrive følgende for å fange oppmerksomheten til noen:<br /><br /><strong>[size=200][color=red][b]</strong>SE PÅ MEG!<strong>[/b][/color][/size]</strong><br /><br />Dette vil vises slik:<span style="color:red;font-size:200%;"><strong>SE PÅ MEG!</strong></span><br /><br />Vi anbefaler imidlertid ikke at du bruker mye tekst som dette! Husk at det er opp til deg – innleggsskribenten – å sikre at tagger er lukket på riktig måte. For eksempel er følgende feil:<br /><br /><strong>[b][u]</strong>Dette er feil<strong>[/b][/u]</strong>',
	),
	array(
		0	=> '--',
		1	=> 'Sitering og visning av tekst med fast tegnbredde',
	),
	array(
		0	=> 'Sitere tekst i svar',
		1	=> 'Du kan sitere tekst på to måter; med og uten referanse.<ul><li>Når du bruker Siter-funksjonen til å svare på et innlegg på forumet, bør du legge merke til at innleggsteksten blir lagt til i meldingsvinduet inni en <strong>[quote=&quot;&quot;][/quote]</strong>-blokk. Denne metoden lar deg sitere med referanse til en persone eller hva som helst annet du velger å bruke! Hvis du for eksempel vil sitere et utdrag av tekst som Ola Nordmann har skrevet, bruker du:<br /><br /><strong>[quote=&quot;Ola Nordmann&quot;]</strong>Teksten Ola Nordmann skrev, kommer her<strong>[/quote]</strong><br /><br />I det som vises, blir &quot;Ola Nordmann skrev:&quot; automatisk lagt til foran den faktiske teksten. Husk at du <strong>må</strong> ta med anførselstegnene &quot;&quot; før og etter navnet til den du siterer, disse er ikke valgfrie.</li><li>Den andre metoden lar deg sitere noe blindt. For å gjøre dette, bruker du taggene <strong>[quote][/quote]</strong> før og etter teksten. Når noen ser meldingen, fremstår den bare som tekst inni en sitatblokk.</li></ul>',
	),
	array(
		0	=> 'Vise kode eller data med fast tegnbredde',
		1	=> 'Hvis du vil vise en kodesnutt eller hva som helst som krever fast tegnbredde, altså en skrift av Courier-typen, omslutter du teksten med <strong>[code][/code]</strong>-tagger, f.eks.<br /><br /><strong>[code]</strong>echo &quot;Dette er en kodesnutt&quot;;<strong>[/code]</strong><br /><br />All formatering som brukes innenfor <strong>[code][/code]</strong>-tagger beholdes når du ser det senere. Syntaksmarkering i PHP kan aktiveres ved hjelp av <strong>[code=php][/code]</strong>, og dette anbefales for innlegg med PHP-kodeeksempler, ettersom lesbarheten økes.',
	),
	array(
		0	=> '--',
		1	=> 'Generere lister',
	),
	array(
		0	=> 'Opprette en punktliste',
		1	=> 'BBCode støtter to typer lister, både punktlister og nummererte lister. De er i utgangspunktet identiske med sine motstykker i HTML. En punktliste viser alle elementene i listen sekvensielt, etterfulgt av hvert sitt innrykkede punkttegn. Hvis du vil opprette en punktliste, bruker du <strong>[list][/list]</strong> og definerer enkeltelementene i listen med <strong>[*]</strong>. Du kan for eksempel liste opp favorittfargene dine med:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rød<br /><strong>[*]</strong>Blå<br /><strong>[*]</strong>Gul<br /><strong>[/list]</strong><br /><br />Dette vil gi følgende liste:<ul><li>Rød</li><li>Blå</li><li>Gul</li></ul>',
	),
	array(
		0	=> 'Opprette en nummerert liste',
		1	=> 'Den andre typen liste, en nummerert liste, gir deg kontroll over hva som vises foran hvert element. Du oppretter en nummerert liste med <strong>[list=1][/list]</strong> for å bruke tall, eller alternativt <strong>[list=a][/list]</strong> for å bruke bokstaver. Som for punktlister, merkes elementene med <strong>[*]</strong>. For eksempel:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Gå i butikken<br /><strong>[*]</strong>Kjøpe en ny datamaskin<br /><strong>[*]</strong>Forbanne datamaskinen når den krasjer<br /><strong>[/list]</strong><br /><br />Dette gir følgende:<ol style="list-style-type: decimal;"><li>Gå i butikken</li><li>Kjøpe en ny datamaskin</li><li>Forbanne datamaskinen når den krasjer</li></ol>For bokstaver bruker du imidlertid:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Det første mulige svaret<br /><strong>[*]</strong>Det andre mulige svaret<br /><strong>[*]</strong>Det tredje mulige svaret<br /><strong>[/list]</strong><br /><br />Dette gir<ol style="list-style-type: lower-alpha"><li>Det første mulige svaret</li><li>Det andre mulige svaret</li><li>Det tredje mulige svaret</li></ol>',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'Opprette lenker',
	),
	array(
		0	=> 'Lenker til andre nettsteder',
		1	=> 'BBCode i phpBB støtter flere måter å opprette URI-er (Uniform Resource Indicators) på. Disse er mer kjent som URL-er.<ul><li>Den første av disse bruker <strong>[url=][/url]</strong>-taggen – det du skriver etter =-tegnet vil få innholdet i den taggen til å vises som en URL. Du kan for eksempel lenke til phpBB.com med:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Besøk phpBB!<strong>[/url]</strong><br /><br />Dette gir følgende lenke: <a href="http://www.phpbb.com/">Besøk phpBB!</a> Merk at lenken åpnes i enten det samme eller et nytt vindu, avhengig av brukerens nettleserpreferanser.</li><li>Hvis du vil at selve URL-en skal vises som lenke, gjør du dette ganske enkelt slik:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Dette gir følgende lenke:<a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>I tillegg har phpBB en funksjon som kalles <i>Magiske lenker</i>, dette gjør enhvert syntaktisk korrekt URL til en lenke uten at man trenger å angi noen tagger eller til og med http:// i starten. Hvis du for eksempel skriver www.phpbb.com i meldingen, vil dette automatisk bli til <a href="http://www.phpbb.com/">www.phpbb.com</a> når noen ser meldingen.</li><li>Det samme skjer for e-postadresser – du kan enten angi en spesifikk e-postadresse, for eksempel:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />Dette gir <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> – eller så kan du bare skrive no.one@domain.adr i meldingen, så konverteres den automatisk når noen ser den.</li></ul>Som med alle BBCode-tagger, kan URL-er omsluttes av andre tagger, som <strong>[img][/img]</strong> (se neste oppføring), <strong>[b][/b]</strong> osv. Som med formateringstagger, er det opp til deg å sørge for at rett åpnings- og lukkingsrekkefølge blir fulgt – for eksempel er:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">ikke</span> korrekt, noe som kan føre til at innlegget slettes, så pass på.',
	),
	array(
		0	=> '--',
		1	=> 'Vise bilder i innlegg',
	),
	array(
		0	=> 'Legge til bilder i innlegg',
		1	=> 'BBCode i phpBB har en tagg for å vise bilder i innlegg. To ting det er svært viktig å huske når man bruker denne taggen, er for det første at mange brukere liker dårlig at det vises mange bilder i innlegg, og for det andre at bildet du viser, allerede må være tilgjengelig på Internett (det kan for eksempel ikke bare finnes på datamaskinen din, med mindre den er en webserver!). Du viser et bilde ved å omslutte URL-en til bildet med <strong>[img][/img]</strong>-tagger. For eksempel:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Som nevnt i URL-avsnittet over, kan du omslutte et bilde med <strong>[url][/url]</strong>-taggen hvis du ønsker det, f.eks. vil<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />gi:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	),
	array(
		0	=> 'Legge til vedlegg i et innlegg',
		1	=> 'Vedlegg kan nå plasseres hvor som helst i innlegget, med den nye BBCode-koden <strong>[attachment=][/attachment]</strong>, forutsatt at vedleggets funksjonalitet er aktivert av en systemadministrator og du har de nødvendige tilgangene til å opprette vedlegg. På innleggsskjermen finnes en nedtrekksboks (eller en knapp) for å plassere vedlegg i teksten.',
	),
	array(
		0	=> '--',
		1	=> 'Andre ting',
	),
	array(
		0	=> 'Kan jeg legge til mine egne tagger?',
		1	=> 'Hvis du er administrator på dette systemet og har tillatelsene som trengs, kan du legge til flere BBCode-koder i delen Egendefinert BBCode.',
	),
);
