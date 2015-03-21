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
		0 => '--',
		1 => 'Innloggings- og registreringsproblemer'
	),
	array(
		0 => 'Hvorfor må jeg registrere meg?',
		1 => 'Det er ikke alltid nødvendig, det er opp til systemadministratoren hvorvidt du må registrere deg for å legge inn meldinger. Ved å registrere deg får du imidlertid tilgang til flere funksjoner som gjestebrukere ikke har, som egendefinerbare avatarbilder, private meldinger, e-postsending til andre brukere, deltakelse i brukergrupper osv. Det tar bare noen få øyeblikk å registrere seg, så det anbefales at du gjør det.'
	),
	array(
		0 => 'Hva er COPPA?',
		1 => 'COPPA står for «Children’s Online Privacy Protection Act», som er en lov som ble vedtatt i USA i 1998, og krever at nettsteder som potensielt kan innhente informasjon fra mindreårige under 13 år, krever skriftlig samtykke fra foreldre eller en annen form for bekreftelse fra en verge, som tillater at personlig identifiserbar informasjon innhentes fra en mindreårig under 13 år. Hvis du er usikker på om dette gjelder for deg som en person som prøver å registrere seg, eller for nettstedet du prøver å registrere deg på, må du oppsøke juridisk bistand. Merk at phpBB Limited og eierne av dette nettstedet ikke kan yte juridisk bistand og er ikke et kontaktpunkt for juridiske vurderinger av noe slag, unntatt slik det er angitt i spørsmålet «Hvem kontakter jeg om misbruk og/eller juridiske vurderinger som har med dette nettstedet å gjøre?».',
	),
	array(
		0 => 'Hvorfor kan jeg ikke registrere meg?',
		1 => 'Det er mulig at en systemadministrator har deaktivert registrering for å hindre at nye besøkende registrerer seg. En systemadministrator kan også ha utestengt IP-adressen din eller forbudt brukernavnet du prøver å registrere. Kontakt systemadministratoren for å få hjelp.',
	),
	array(
		0 => 'Jeg har registrert meg, men kan ikke logge inn!',
		1 => 'Kontroller først brukernavnet og passordet. Hvis de er riktige, kan en av to ting ha skjedd. Hvis COPPA-støtte er aktivert og du oppgav alderen din til under 13 ved registreringen, må du følge instruksjonene du fikk. Enkelte systemer vil også kreve at nye registreringer aktiveres, enten av deg selv eller av en administrator, før du kan logge inn. Denne informasjonen ble gitt under registreringen. Hvis du mottok en e-post, følger du instruksjonene. Hvis du ikke mottok noen e-post, har du kanskje oppgitt feil e-postadresse, eller så har e-posten havnet i et spamfilter. Hvis du er sikker på at den angitte e-postadressen er korrekt, kan du kontakte en administrator.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke logge inn?',
		1 => 'Det er flere grunner til at dette kan skje. Først må du kontrollere at brukernavnet og passordet er korrekt. Hvis de er det, kontakter du en systemadministrator for å forsikre deg om at du ikke har blitt utestengt. Det er også mulig at systemets eier har en konfigurasjonsfeil på sin side, og at de må løse den.',
	),
	array(
		0 => 'Jeg har registrert meg tidligere, men kan ikke lenger logge på?!',
		1 => 'Det er mulig at en administrator har deaktivert eller slettet kontoen din av en eller annen grunn. Mange systemer fjerner også fra tid til annen brukere som ikke har skrevet innlegg på lenge, for å redusere størrelsen på databasen. Hvis dette har skjedd, kan du prøve å registrere deg på nytt og delta mer i diskusjonene.'
	),
	array(
		0 => 'Jeg har mistet passordet!',
		1 => 'Ingen grunn til panikk! Passordet ditt kan ikke hentes ut, men det er enkelt å angi et nytt. Gå til innloggingssiden og klikk <em>Jeg har glemt passordet</em>. Følg instruksjonene, så vil du snart kunne logge inn igjen.<br />Hvis du imidlertid ikke får til å angi nytt passord, kontakter du en systemadministrator.',
	),
	array(
		0 => 'Hvorfor blir jeg logget ut automatisk?',
		1 => 'Hvis du ikke haker av i boksen <em>Husk meg</em> når du logger inn, vil systemet bare holde deg innlogget i en viss tid. Dette forhindrer at kontoen din blir misbrukt av andre. Hvis du vil forbli innlogget, haker du av i boksen <em>Husk meg</em> ved innlogging. Dette anbefales ikke hvis du bruker systemet fra en delt datamaskin, f.eks. på et bibliotek, en Internett-kafé eller en datastue på en skole eller et universitet. Hvis du ikke ser denne avhakingsboksen, betyr det at en systemadministrator har deaktivert denne funksjonen.',
	),
	array(
		0 => 'Hva gjør «Slett alle systemets informasjonskapsler»?',
		1 => '«Slett alle systemets informasjonskapsler» sletter informasjonskapslene som er opprettet av phpBB, og som holder deg autentisert og innlogget på systemet. Informasjonskapsler har også funksjoner som lesesporing dersom dette er aktivert av en systemadministrator. Hvis du har problemer med inn- eller utlogging, kan det av og til hjelpe å slette systemets informasjonskapsler.',
	),
	array(
		0 => '--',
		1 => 'Brukerpreferanser og innstillinger'
	),
	array(
		0 => 'Hvordan endrer jeg innstillingene mine?',
		1 => 'Hvis du er en registrert bruker, lagres alle innstillingene i systemets database. Hvis du vil endre dem, går du til brukerkontrollpanelet. Du finner vanligvis en lenke til dette ved å klikke på brukernavnet ditt øverst på sidene på systemet. Dette systemet lar deg endre alle innstillinger og preferanser.',
	),
	array(
		0 => 'Hvordan forhindrer jeg at brukernavnet mitt vises i listen med brukere som er online?',
		1 => 'I brukerkontrollpanelet, under «Systempreferanser», finner du alternativet <em>Skjul online-statusen din</em>. Aktiver dette alternativet, så vil du bare være synlig for administratorer, moderatorer og deg selv. Du vil bli talt som en skjult bruker.'
	),
	array(
		0 => 'Klokkeslettene stemmer ikke!',
		1 => 'Det er mulig at klokkeslettet som vises, er fra en annen tidssone enn den du befinner deg i. Hvis dette er tilfelle, kan du gå til brukerkontrollpanelet og endre tidssoneinnstillingen slik at den samsvarer med hvor du befinner deg, f.eks. Oslo, København, New York, Sydney, osv. Merk at endring av tidssone, i likhet med de fleste andre innstillinger, bare er mulig for registrerte brukere. Hvis du ikke har registrert deg, er dette en grunn til å gjøre akkurat det.'
	),
	array(
		0 => 'Jeg har endret tidssone, men klokkeslettet er fortsatt feil!',
		1 => 'Hvis du er sikker på at du har angitt riktig tidssone og klokkeslettet fortsatt er feil, går serverklokken feil. Be en administrator om å løse problemet.'
	),
	array(
		0 => 'Språket mitt finnes ikke i listen!',
		1 => 'Enten har ikke administratoren installert språket ditt, eller så har ingen oversatt dette systemet til språket ditt. Be en systemadministrator om å installere språkpakken du trenger. Hvis språkpakken ikke finnes, kan du bidra med en ny oversettelse selv. Du finner mer informasjon på nettstedet til <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	),
	array(
		0 => 'Hva er bildene ved siden av brukernavnet mitt?',
		1 => 'Det finnes to bilder som kan bli vist sammen med et brukernavn når man ser på innlegg. Et av dem kan være et bilde som er tilknyttet graden din, vanligvis i form av stjerner, firkanter eller prikker, som viser hvor mange innlegg du har skrevet, eller hvilken status du har på systemet. Et annet, vanligvis større bilde, er kjent som en avatar, og er vanligvis unikt eller personlig for hver enkelt bruker.',
	),
	array(
		0 => 'Hvordan viser jeg en avatar?',
		1 => 'I brukerkontrollpanelet, under «Profil», kan du legge til en avatar med en av følgende fire metoder: Gravatar, Galleri, Ekstern eller Opplasting. Det er opp til systemadministratoren å aktivere avatarer og velge hvilke måter avatarene kan gjøres tilgjengelig på. Hvis du ikke kan bruke avatarer, kan du kontakte en systemadministrator.',
	),
	array(
		0 => 'Hva er graden min, og hvordan kan jeg endre den?',
		1 => 'Graden, som vises under brukernavnet ditt, viser hvor mange innlegg du har skrevet eller identifiserer visse brukere, for eksempel moderatorer og administratorer. Vanligvis kan du ikke endre ordlyden i systemgrader, ettersom disse angis av systemadministratoren. Ikke misbruk systemet ved å skrive innlegg bare med den hensikt å øke graden din. De fleste systemer vil ikke akseptere dette, og moderatoren eller administratoren kan ganske enkelt redusere innleggstallet ditt.'
	),
	array(
		0 => 'Når jeg klikker på e-postlenken til en bruker, blir jeg bedt om å logge inn?',
		1 => 'Bare registrerte brukere kan sende e-post til andre brukere gjennom det innebygde e-postskjemaet, og bare hvis administratoren har aktivert denne funksjonen. Dette er for å forhindre ondsinnet bruk av e-postsystemet fra anonyme brukere.'
	),
	array(
		0 => '--',
		1 => 'Innleggsproblemer'
	),
	array(
		0 => 'Hvordan oppretter jeg et nytt emne eller skriver et svar?',
		1 => 'Hvis du vil opprette et nytt emne i et forum, klikker du «Nytt emne». Hvis du vil svare på et emne, klikker du «Svar». Du må kanskje registrere deg før du kan skrive innlegg. En listen over tillatelser i hvert enkelt forum finnes nederst på forum- og emneskjermene. For eksempel: Du kan opprette nye emner, Du kan laste opp vedlegg, osv.',
	),
	array(
		0 => 'Hvordan redigerer eller sletter jeg et innlegg?',
		1 => 'Med mindre du er en systemadministrator eller en moderator, kan du bare redigere eller slette dine egne innlegg. Du kan redigere et innlegg ved å klikke på redigeringsknappen for det aktuelle innlegget, i noen tilfeller innenfor en viss tid etter at innlegget ble skrevet. Hvis noen allerede har besvart innlegget, vil du finne en liten tekstsnutt under innlegget når du går tilbake til emnet, som viser antall ganger du har redigert det, sammen med dato og klokkeslett. Dette vises bare hvis noen har besvart innlegget. Det vises ikke hvis en moderator eller en administrator har redigert innlegget, men de kan imidlertid velge å skrive inn en merknad om endringene de har gjort. Merk at vanlige brukere ikke kan slette et innlegg etter at noen har besvart det.'
	),
	array(
		0 => 'Hvordan legger jeg til en signatur i innlegget mitt?',
		1 => 'Hvis du vil legge til en signatur i et innlegg, må du først lage en i brukerkontrollpanelet. Når du har laget den, kan du hake av i boksen <em>Legg ved signatur</em>på innleggsskjemaet for å legge til signaturen din. Du kan også legge til en signatur som standard i alle innleggene dine ved å hake av i den aktuelle radioknappen i brukerkontrollpanelet. Hvis du gjør dette, kan du fortsatt hindre signaturen i å bli vist i enkeltinnlegg ved å fjerne haken for å legge ved signatur på innleggsskjemaet.'
	),
	array(
		0 => 'Hvordan oppretter jeg en avstemming?',
		1 => 'Når du skriver et nytt innlegg eller redigerer det første innlegget i et emne, klikker du på fanen «Avstemming» under hovedskjemaet for innlegget. Hvis du ikke ser dette, har du ikke de nødvendige tillatelser for å opprette avstemminger. Skriv inn en tittel og minst to alternativer i de aktuelle feltene, og sørg for at hvert alternativ skrives på sin egen linje i tekstfeltet. Du kan også angi hvor mange alternativer brukerne kan velge under avstemmingen, under «Alternativer per bruker», en tidsbegrensning for avstemmingen (0 for uendelig) og til slutt alternativet for å la brukerne endre sine stemmer.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke legge til flere alternativer i avstemmingen?',
		1 => 'Grensen for antall alternativer i avstemminger angis av systemadministratoren. Hvis du synes du trenger flere alternativer i avstemmingen enn det du får lov til, kan du kontakte systemadministratoren.'
	),
	array(
		0 => 'Hvordan redigerer eller sletter jeg en avstemming?',
		1 => 'På samme måte som med innlegg, kan avstemminger bare endres av den opprinnelige innleggsforfatteren, en moderator eller en administrator. Hvis du vil redigere en avstemming, klikker du for å redigere det første innlegget i emnet – avstemmingen er alltid tilknyttet dette. Hvis ingen har avgitt stemmer, kan man slette avstemmingen og redigere avstemmingsalternativene. Hvis noen imidlertid har avgitt stemmer, kan bare moderatorer og administratorer redigere eller slette den. Dette forhindrer at avstemmingsalternativene endres mens en avstemming pågår.'
	),
	array(
		0 => 'Hvorfor får jeg ikke tilgang til et forum?',
		1 => 'Enkelte fora kan være begrenset til visse brukere eller grupper. Hvis du vil se, lese, skrive eller gjøre andre ting, trenger du kanskje bestemte tillatelser. Kontakt en moderator eller en systemadministrator for å få dem til å gi deg tilgang.'
	),
	array(
		0 => 'Hvorfor kan jeg ikke legge til vedlegg?',
		1 => 'Vedleggstillatelser tildeles per forum, per gruppe eller per bruker. Systemadministratoren har kanskje ikke tillatt vedlegg i akkurat det forumet du skriver i, eller så kan kanskje bare enkelte grupper legge til vedlegg. Kontakt systemadministratoren hvis du er usikker på hvorfor du ikke kan legge til vedlegg.'
	),
	array(
		0 => 'Hvorfor har jeg mottatt en advarsel?',
		1 => 'Alle systemadministratorer har sine egne regler for sitt system. Hvis du har brutt en regel, kan du bli gitt en advarsel. Merk at dette er systemadministratorens avgjørelse, og phpBB Limited har ingenting å gjøre med advarsler på dette systemet. Kontakt systemadministratoren hvis du er usikker på hvorfor du ble gitt en advarsel.'
	),
	array(
		0 => 'Hvordan kan jeg rapportere innlegg til en moderator?',
		1 => 'Hvis systemadministratoren har tillatt det, skal du se en knapp for å rapportere innlegg, ved siden av innlegget du vil rapportere. Hvis du klikker på denne, tas du gjennom de nødvendige trinnene for å rapportere innlegget.'
	),
	array(
		0 => 'Hva er «Lagre»-knappen til i emneskjemaet?',
		1 => 'Denne lar deg lagre en kladd som skal fullføres og sendes inn senere. Du finner tilbake til lagrede kladder i brukerkontrollpanelet.'
	),
	array(
		0 => 'Hvorfor må innlegget mitt godkjennes?',
		1 => 'Systemadministratoren kan ha bestemt at innlegg i forumet du skriver i, må kontrolleres før det legges ut. Det er også mulig at administratoren har plassert deg i en brukergruppe hvor alle brukeres innlegg må kontrolleres før de legges ut. Kontakt systemadministratoren for flere detaljer.'
	),
	array(
		0 => 'Hvordan kan jeg fremheve emnet mitt?',
		1 => 'Ved å klikke «Fremhev emne» når du viser det, kan du fremheve emnet til øverst på forsiden. Hvis du imidlertid ikke ser denne knappen, er kanskje fremheving deaktivert, eller så er ikke minstetiden mellom fremhevinger nådd ennå. Det er også mulig å fremheve emnet ganske enkelt ved å svare på det. Husk imidlertid å følge systemets regler når du gjør dette.'
	),
	array(
		0 => '--',
		1 => 'Formatering og emnetyper'
	),
	array(
		0 => 'Hva er BBCode?',
		1 => 'BBCode er en spesiell implementering av HTML, som gir kontroll over formatering av visse objekter i innlegg. Om BBCode kan brukes, er bestemt av administratoren, men det er mulig å deaktivere dette per innlegg fra innleggsskjemaet. BBCode er i seg selv ganske likt HTML, men taggene omsluttes av firkantklammene [ og ] i stedet for &lt; og &gt;. Du finner mer informasjon om BBCode i veiledningen som du får tilgang til fra innleggssiden.'
	),
	array(
		0 => 'Kan jeg bruke HTML?',
		1 => 'Nei. Det er ikke mulig å skrive HTML på dette systemet og få det vist som HTML. Det meste av formatering som kan utføres med HTML, kan utføres med BBCode i stedet.'
	),
	array(
		0 => 'Hva er smilefjes?',
		1 => 'Smilefjes, eller emotikoner, er små bilder som kan brukes til å uttrykke følelser med en kort kode, f.eks. angir :) at man smiler, mens :( viser at man er lei seg. Du kan se alle emotikonene i innleggsskjemaet. Unngå å bruke smilefjes for mye, ettersom det raskt kan gjøre et innlegg uleselig, og dermed bli redigert bort av en moderator, om ikke hele innlegget blir fjernet. Systemadministratoren kan også ha angitt en grense for hvor mange smiljefjes du kan bruke i et innlegg.'
	),
	array(
		0 => 'Kan jeg legge inn bilder?',
		1 => 'Ja, bilder kan vises i innleggene dine. Hvis administratoren har tillatt vedlegg, kan det hende du kan laste opp bildet til systemet. Hvis ikke, må du lage en lenke til et bilde som er lagret på en offentlig tilgjengelig webserver, f.eks. http://www.example.com/mitt-bilde.gif. Du kan ikke lenke til bilder som er lagret på din egen PC (med mindre den er en offentlig tilgengelig server) eller bilder som er lagret bak autentiseringsmekanismer, f.eks. Hotmail- eller Yahoo-e-postbokser, passordbeskyttede nettsteder osv. Bruk BBCode-taggen [img].'
	),
	array(
		0 => 'Hva er globale kunngjøringer?',
		1 => 'Globale kunngjøringer inneholder viktig informasjon, og bør alltid leses. De vises øverst i alle fora og i brukerkontrollpanelet. Tillatelse til globale kunngjøringer gis av systemadministratoren.'
	),
	array(
		0 => 'Hva er kunngjøringer?',
		1 => 'Kunngjøringer inneholder ofte viktig informasjon for forumet du leser i, og du bør lese dem når du kan. Kunngjøringer vises øvrste på alle sider i forumene de er lagt inn i. På samme måte som for globale kunngjøringer, er det systemadministratoren som gir tillatelse til å bruke dette.'
	),
	array(
		0 => 'Hva er festede emner?',
		1 => 'Festede emner i et forum vises under kunngjøringene og bare på første side. Disse er ofte ganske viktige, så du bør lese dem når du kan. På samme måte som for kunngjøringer og globale kunngjøringer, er det systemadministratoren som gir tillatelse til å bruke festede emner.'
	),
	array(
		0 => 'Hva er låste emner?',
		1 => 'Låste emner er emner hvor brukerne ikke lenger kan svare og eventuelle avstemminger avsluttes automatisk når et emne låses. Det kan være mange grunner til å låse et emne, og det kan gjøres av moderatorer og systemadministratorer. Du kan kanskje også låse dine egne emner, avhengig av hvilke tillatelser systemadministratoren har gitt deg.'
	),
	array(
		0 => 'Hva er emneikoner?',
		1 => 'Emneikoner er bilder som forfatteren velger for å gi en ide om innholdet i innlegg. Hvorvidt man kan bruke emneikoner, avhenger av hvilke tillatelser systemadministratoren har angitt.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Brukernivåer og grupper'
	),
	array(
		0 => 'Hva er administratorer?',
		1 => 'Administratorer er brukere som er gitt det høyeste kontrollnivå for systemet. Disse brukerne kan styre alle aspekter ved driften av systemet, inkludert å gi tillatelser, stenge ute brukere, opprette brukergrupper, utnevne moderatorer osv., avhengig av hvilke tillatelser systemets eier har gitt de andre administratorene. De kan også ha fullverdige moderatorrettigheter i alle fora, avhengig av hvilke innstillinger systemets eier har gitt.'
	),
	array(
		0 => 'Hva er moderatorer?',
		1 => 'Moderatorer er enkeltpersoner (eller grupper med enkeltpersoner) som passer på forumene i det daglige. De har autoritet til å redigere eller slette innlegg og låse, låse opp, flytte, slette og splitte emner i forumet de modererer. Vanligvis finnes moderatorer for å hindre brukere i å spore av emner eller skrive støtende eller injurierende innhold.'
	),
	array(
		0 => 'Hva er brukergrupper?',
		1 => 'Brukergrupper er grupper av brukere som deler brukermassen inn i håndterbare størrelser som systemadministratorene kan arbeide med. Brukere kan tilhøre flere grupper, og alle grupper kan være tilordnet et sett med tillatelser. Dette gjør det enklere for administratorene å endre tillatelser for mange brukere på én gang, for eksempel å endre moderatortilganger eller gi brukere tilgang til et privat forum.'
	),
	array(
		0 => 'Hvor er brukergruppene, og hvordan blir jeg med i en?',
		1 => 'Du kan vise alle brukergrupper med lenken «Brukergrupper» i brukerkontrollpanelet. Hvis du vil bli med i en av dem, fortsetter du ved å klikke på den aktuelle knappen. Alle grupper er imidlertid ikke åpne. Enkelte kan kreve godkjenning for å bli med, andre kan være lukket og atter andre kan til og med være skjulte. Hvis bruppen er åpen, kan du bli med i den ved å klikke på den aktuelle knappen. Hvis gruppen krever godkjenning for å bli mer, kan du be om å få bli med ved å klikke påd en aktuelle knappen. En brukergruppeleder må godkjenne forespørselen og kan spørre deg om hvorfor du ønsker å bli med i gruppen. Ikke plag en gruppeleder hvis de avviser forespørselen din – de har nok sine grunner.'
	),
	array(
		0 => 'Hvordan blir jeg en brukergruppeleder?',
		1 => 'En brukergruppeleder tilordnes vanligvis når brukergruppene først opprettes av en systemadministrator. Hvis du ønsker å opprette en brukergruppe, bør du aller først kontakte en administrator - prøv å sende en privat melding.',
	),
	array(
		0 => 'Hvorfor vises enkelte brukergrupper med en annen farge?',
		1 => 'Systemadministratoren kan tilordne en farge til brukerne i en brukergruppe for å gjøre det enklere å identifisere brukerne i denne gruppen.'
	),
	array(
		0 => 'Hva er en «Standard brukergruppe»?',
		1 => 'Hvis du er med i flere enn én brukergruppe, brukes standarden til å fastslå hvilken gruppefarge og gruppegrad som skal vises for deg som standard. Systemadministratoren kan gi deg tillatelse til å endre standard brukergruppe i brukerkontrollpanelet.'
	),
	array(
		0 => 'Hva er «Teamet»-lenken?',
		1 => 'Denne siden gir deg en liste over systemets personale, inkludert systemadministratorer og moderatorer i tillegg til andre detaljer, som hvilke fora de modererer.'
	),
	array(
		0 => '--',
		1 => 'Private meldinger'
	),
	array(
		0 => 'Jeg kan ikke sende private meldinger!',
		1 => 'Det kan være tre årsaker til dette: Du er ikke registrert og/eller logget inn, systemadministratoren har deaktivert private meldinger på systemet eller så har administratoren hindret deg i å sende meldinger. Kontakt en systemadministrator for mer informasjon.'
	),
	array(
		0 => 'Jeg får stadig uønskede private meldinger!',
		1 => 'Du kan slette private meldinger fra en bruker automatisk ved hjelp av meldingsregler i brukerkontrollpanelet. Hvis du mottar plagsomme private meldinger fra en bestemt bruker, kan du rapportere meldingene til moderatorene – de har mulighet til å hindre en bruker i å sende private meldinger.'
	),
	array(
		0 => 'Jeg har mottatt spam eller plagsom e-post fra noen på dette systemet!',
		1 => 'Dette er vi lei for. Funksjonen med e-postskjema på dette systemet har mekanismer for å prøve å spore brukere som sender slikt, så send en e-post til systemadministratoren med en fullstendig kopi av e-posten du mottok. Det er svært viktig at denne inneholder alle meldingshodene som gir detaljer om brukeren som sendte e-posten. Systemadministratoren kan deretter treffe tiltak.'
	),
	array(
		0 => '--',
		1 => 'Venner og uvenner'
	),
	array(
		0 => 'Hva er Venner- og Uvenner-listene mine?',
		1 => 'Du kan bruke disse listene til å organisere andre brukere på systemet. Brukere du legger til på vennelisten, vil bli vist for hurtigtilgang i brukerkontrollpanelet, slik at du raskt kan se online-statusen deres og sende dem private meldinger. Avhengig av om malene støtter det, kan også innlegg fra disse brukerne bli uthevet. Hvis du legger til en bruker i Uvenner-listen, vil alle innlegg fra dem være skjult som standard.'
	),
	array(
		0 => 'Hvordan legger jeg til eller fjerner brukere fra Venner- eller Uvenner-listene mine?',
		1 => 'Du kan legge til brukere på listen på to måter. Når du viser brukerens profil, er det en lenke der for å legge dem til på enten Venner- eller Uvenner-listen. Alternativt kan du fra brukerkontrollpanelet legge til brukere direkte ved å skrive inn brukernavnet deres. Du kan også fjerne brukere fra listen på samme side.'
	),
	array(
		0 => '--',
		1 => 'Søke i foraene'
	),
	array(
		0 => 'Hvordan kan jeg søke i et forum eller flere fora?',
		1 => 'Skriv inn en søketekst i søkeboksen på indeks-, forum- eller emnesidene. Du får tilgang til avanserte søk ved å klikke «Avansert søk», som er tilgjengelig FRA alle sider på forumet. Hvordan du finner søket, avhenger av stilen som brukes.'
	),
	array(
		0 => 'Hvorfor gav ikke søket mitt noen resultater?',
		1 => 'Søket ditt var sannsynligvis for vagt og inneholdt mange vanlige ord som ikke indekseres av phpBB. Vær mer spesifikk og bruk alternativene som er tilgjengelige under Avansert søk.',
	),
	array(
		0 => 'Hvorfor gav søket meg en tom side!?',
		1 => 'Søket gav flere resultater enn webserver kunne håndtere. Bruk «Avansert søk» og vær mer spesifikk med tanke på søkeordene og foraene det skal søkes i.'
	),
	array(
		0 => 'Hvordan søker jeg etter brukere?',
		1 => 'Gå til siden «Forumbrukere» og klikk lenken «Finn en forumbruker».'
	),
	array(
		0 => 'Hvordan finner jeg mine egne innlegg og emner?',
		1 => 'Du kan hente frem dine egne innlegg enten ved å klikke «Vis dine innlegg» i brukerkontrollpanelet, ved å klikke «Søk i brukes innlegg» på din egen profilside eller ved å klikke «Hurtiglenker» øverst i systemet. For å søke etter emnene dine, kan du bruke Avansert søk-siden og fylle ut de aktuelle alternativene.',
	),
	array(
		0 => '--',
		1 => 'Abonnementer og bokmerker',
	),
	array(
		0 => 'Hva er forskjellen mellom bokmerker og abonnering?',
		1 => 'I phpBB 3.0 fungerte bokmerking av emner ganske likt som bokmerking i en nettleser. Du ble ikke varslet når noe ble endret. I phpBB 3.1 er bokmerking mer som å abonnere på et emne. Du kan bli varslet når et bokmerket emne oppdateres. Abonnering vil imidlertid varsle deg når noe oppdateres i et emne eller et forum i systemet. Varslingsalternativene for bokmerker og abonnementer kan konfigureres i brukerkontrollpanelet, under «Systempreferanser».',
	),
	array(
		0 => 'Hvordan bokmerker jeg eller abonnerer på bestemte emner?',
		1 => 'Du kan bokmerke eller abonnere på bestemte emner ved å klikke på den aktuelle lenken på menyen «Emneverktøy», praktisk plassert både øverst og nederst i en diskusjonstråd.<br />Hvis du svarer på et emne og haker av for «Varsle meg når innlegget besvares», vil du også abonnere på emnet.',
	),
	array(
		0 => 'Hvordan abonnerer jeg på bestemte fora?',
		1 => 'Hvis du vil abonnere på et bestemt forum, klikker du på lenken «Abonner på forum» nederst på siden når du har gått inn i forumet.',
	),
	array(
		0 => 'Hvordan fjerner jeg abonnementene mine?',
		1 => 'Hvis du vil fjerne abonnementer, går du til brukerkontrollpanelet og følger lenkene til abonnementene.'
	),
	array(
		0 => '--',
		1 => 'Vedlegg'
	),
	array(
		0 => 'Hvilke vedlegg tillates på dette systemet?',
		1 => 'Alle systemadministratorer kan tillate eller forby visse vedleggstyper. Hvis du er usikker på hva du kan laste opp, kan du kontakte systemadministratoren for å få hjelp.'
	),
	array(
		0 => 'Hvordan finner jeg alle vedleggene mine?',
		1 => 'Hvis du vil se en liste over vedlegg du har lastet opp, går du til brukerkontrollpanelet og følger lenkene til vedleggsdelen.'
	),
	array(
		0 => '--',
		1 => 'phpBB-problemer',
	),
	array(
		0 => 'Hvem har laget dette forumsystemet?',
		1 => 'Denne programvaren (i sin umodifiserte form) er produsert, lansert og opphavsrettslig beskyttet av <a href="https://www.phpbb.com/">phpBB Limited</a>. Den er gjort tilgjengelig under GNU General Public License, versjon 2 (GPL-2.0), og kan distribueres fritt. Se <a href="https://www.phpbb.com/about/">Om phpBB</a> for flere detaljer.',
	),
	array(
		0 => 'Hvorfor er ikke funksjonen X tilgjengelig?',
		1 => 'Denne programvaren er skrevet og lisensiert gjennom phpBB Limited. Hvis du mener at en funksjon bør legges til, kan du gå til <a href="https://www.phpbb.com/ideas/">phpBB idésenter</a>, hvor du kan stemme frem eksisterende ideer og foreslå nye funksjoner.'
	),
	array(
		0 => '«Hvem kontakter jeg om misbruk og/eller juridiske vurderinger som har med dette systemet å gjøre?',
		1 => 'Alle administratorene som er oppført på «Teamet»-siden skal være rette kontaktpunkt for henvendelser. Hvis du ikke får noen respons derfra, bør du kontakte domenets eier (prøv et <a href="http://www.google.com/search?q=whois">whois-oppslag</a>) eller, dersom dette kjører på en gratistjeneste (f.eks. Yahoo!, free.fr, f2s.com, osv.), administrasjons- eller misbruksavdelingen for den tjenesten. Merk at phpBB Limited <strong>overhodet ikke har noen jurisdiksjon</strong>, og kan ikke på noen måte holdes ansvarlig for hvordan, hvor eller av hvem dette systemet brukes. Ikke kontakt phpBB Limited om juridiske spørsmål (oppsettende avgjørelser, ansvarsforhold, injurier osv.) som <strong>ikke er direkte relatert</strong> til nettstedet phpBB.com eller selve den faktiske phpBB-programvaren. Hvis du kontakter phpBB Limited <strong>om tredjepartsbruk</strong> av denne programvaren, kan du forvente enten et avvisende svar eller fravær av svar.'
	),
	array(
		0 => 'Hvordan kontakter jeg en systemadministrator?',
		1 => 'Alle brukere av systemet kan bruke «Kontakt oss»-skjemaet, dersom systemadministratoren har aktivert det alternativet.<br />Forumbrukere kan også bruke «Teamet»-lenken.',
	),
);
