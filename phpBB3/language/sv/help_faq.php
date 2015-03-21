<?php
/**
*
* This file is part of Swedish phpBB translation.
* Copyright (c) 2010 - 2014 Swedish translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      phpBB Sweden
* @author       Simon Assgård <sassgard@gmail.com> (Sinom) http://www.phpbb.se/
* @copyright    phpBB Sweden
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
		1 => 'Inloggnings- och registreringsfrågor'
	),
	array(
		0 => 'Varför kan jag inte logga in?',
		1 => 'Det finns flera möjliga förklaringar till detta. Först och främst, försäkra dig om att ditt användarnamn och lösenord stämmer. Om du är säker på att de stämmer, kontakta administratören för att försäkra dig om att du inte har bannlysts från forumet. Det är också möjligt att administratören har gjort en felinställning och behöver åtgärda detta.'
	),
	array(
		0 => 'Varför måste jag ens registrera mig?',
		1 => 'Det är det inte säkert att du måste, det är upp till administratören att bestämma om du måste registrera dig eller inte för att kunna skriva och/eller läsa inlägg. Men registrering ger dig tillgång till utökade funktioner som inte finns för gäster som till exempel visningsbilder, personliga meddelanden, skicka e-post till andra användare, medlemskap i användargrupper, med mera. Det tar endast några minuter att registrera sig, så det rekommenderas.'
	),
	array(
		0 => 'Varför loggas jag ut automatiskt?',
		1 => 'Om du inte kryssar i <em>Logga in mig automatiskt</em> när du loggar in så kommer du endast att hållas inloggad för en viss tid. Detta förhindrar att någon annan använder sig av ditt konto. För att förbli inloggad, kryssa i rutan nästa gång du loggar in. Detta rekommenderas inte om du besöker forumet från en delad dator, t.ex. bibliotek, internetcafé, datorsal, osv. Om du inte ser denna kryssruta så har forumadministratören inaktiverat denna funktion.'
	),
	array(
		0 => 'Hur förhindrar jag att mitt användarnamn visas i listorna över vilka som är online?',
 		1 => 'I kontrollpanelen under “Inställningar” finns alternativet <em>Dölj att jag är online</em>. Om du sätter denna inställning till <samp>Ja</samp> så kommer du endast att visas för administratörer, moderatorer och dig själv. Du kommer att räknas som en dold användare.'

	),
	array(
		0 => 'Jag har glömt bort mitt lösenord!',
		1 => 'Ingen panik! Även om du inte kan återfå ditt nuvarande lösenord så kan du enkelt återställa det. Gå till inloggningssidan och klicka på <em>Jag har glömt mitt lösenord</em>. Följ instruktionerna och du kommer att kunna logga in igen inom kort.'
	),
	array(
		0 => 'Jag har registrerat mig men kan inte logga in!',
		1 => 'Försäkra dig först och främst om att du anger rätt användarnamn och lösenord. Om de stämmer så kan en av två saker ha hänt. Om COPPA-stöd är aktiverat och du under registreringen angav att du är under 13 år så måste du följa instruktionerna du fått. Vissa forum kräver också att nya registreringar aktiveras innan de kan användas, antingen av dig själv eller av an administratör; denna information visades under registreringen. Om du har fått ett e-postmeddelande, följ instruktionerna i det. Om du inte fått ett e-postmeddelande så kanske du angav en felaktig e-postadress eller så fastnade e-postmeddelandet i ett skräppostfilter. Om du är säker på att e-postadressen du angav var korrekt, kontakta en administratör.'
	),
	array(
		0 => 'Jag har registrerat mig men kan inte logga in längre?!',
		1 => 'Det är möjligt att en administratör har raderat eller inaktiverat ditt användarkonto av någon orsak. Dessutom rensar många forum då och då bort användare som inte postat på länge för att minska storleken på databasen. Om så har skett, registrera dig igen och försök involvera dig mer i diskussionerna.'
	),

	array(
		0 => 'Vad är COPPA?',
		1 => 'COPPA, eller <em>Child Online Privacy and Protection Act of 1998</em>, är en lag i USA som kräver att webbplatser som samlar in information från barn under 13 år har skriftligt tillstånd från föräldrarna. Om du är osäker på om detta rör dig som försöker att registrera dig, eller om det rör webbplatsen du försöker registrera dig på, kontakta ett juridiskt ombud för hjälp. Observera att phpBB inte kan ge juridisk rådgivning och inte kan kontaktas angående något som helst juridiskt.',
	),
	array(
		0 => 'Varför kan jag inte registrera mig?',
		1 => 'Det är möjligt att administratören har bannlyst din IP-adress eller förbjudit det användarnamn du försöker registrera dig med. Ägaren av webbplatsen kan också ha inaktiverat nyregistreringar för att förhindra att nya besökare blir medlemmar. Kontakta en administratör för hjälp.',
	),
	array(
		0 => 'Vad gör “Ta bort alla forumcookies”-länken?',
		1 => 'Genom att klicka på den länken så tas alla cookies som har skapats av phpBB3 bort. Dessa cookies innehåller information som håller dig inloggad på forumet och håller reda på vilka trådar du läst och inte läst. Om du har problem med att logga in eller logga ut så kan det hjälpa att ta bort alla forumcookies.',
	),
	array(
		0 => '--',
		1 => 'Alternativ och inställningar'
	),
	array(
		0 => 'Hur ändrar jag mina inställningar?',
		1 => 'Om du är registrerad så sparas alla dina inställningar i forumets databas. För att ändra inställningar, klicka på <em>Kontrollpanel</em>-länken (finns oftast längst upp på forumsidorna men så är inte alltid fallet). Här kan du ändra alla dina inställningar och alternativ.'
	),
	array(
		0 => 'Tiderna stämmer inte!',
		1 => 'Det kan vara så att tiderna som visas är för en annan tidszon än den du befinner dig i. Om så är fallet, gå till din kontrollpanel och ändra till rätt tidszon, t.ex. Stockholm, London, Paris, New York, Sydney, osv. Observera att endast registrerade användare kan byta tidszon, detta gäller även de flesta andra inställningar. Så om du inte har registrerat dig än, gör det nu!'
	),
	array(
		0 => 'Jag ändrade tidszon men tiderna stämmer fortfarande inte!',
		1 => 'Om du är säker på att du har valt rätt tidszon och att du har har ställt in sommartid korrekt och tiderna fortfarande inte stämmer så är serverns klocka felinställd. Underrätta en administratör om detta problem så att de kan åtgärda det.'
	),
	array(
		0 => 'Mitt språk finns inte med i listan!',
		1 => 'I så fall har förmodligen inte administratören installerat ditt språk eller så har ingen översatt forumet till ditt språk. Fråga administratören om de skulle kunna installera språkpaketet du vill ha. Om språkpaketet inte finns så är du välkommen att skapa en ny översättning. Mer information finns på phpBB Limiteds webbplats (använd länken längst ner på forumsidorna).'
	),
	array(
		0 => 'Hur kan jag visa en bild tillsammans med mitt användarnamn?',
		1 => 'Det finns två bilder som kan visas tillsammans med ett användarnamn i inlägg. Den ena är en titelbild, oftast är dessa bilder i form av stjärnor, prickar eller block som visar hur många inlägg du har gjort eller din status på forumet. Den andra bilden, oftast är den större, är känd som en visningsbild och är i allmänhet unik eller personlig för varje användare. Det är upp till forumadministratören att tillåta visningsbilder och välja vilka sätt visningsbilder kan användas på. Om du inte kan använda visningsbilder, kontakta en forumadministratör och fråga de om deras anledning till detta.'
		
	 ),
	array(
		0 => 'Hur ändrar jag min titel?',
		1 => 'Titlar, som visas under ditt användarnamn, visar hur många inlägg du har gjort eller identifierar speciella användare, t.ex. moderatorer eller administratörer. I allmänhet kan du inte ändra namnet på några forumtitlar eftersom de ställs in av forumadministratören. Missbruka inte forumet genom att posta i onödan bara för att ändra din titel. De flesta forum tolererar inte detta och en moderator eller administratör kommer helt enkelt att sänka ditt inläggsantal.'
	),
	array(
		0 => 'När jag försöker skicka e-post till en användare så kräver forumet att jag loggar in?',
		1 => 'Endast registrerade användare kan skicka e-post via det inbygga e-postformuläret till andra användare och endast om det har aktiverats av administratören. Detta för att förhindra att anonyma användare använder det för att skicka skräppost.'
	),
	array(
		0 => '--',
		1 => 'Tråd- och inläggsfrågor'
	),
	array(
		0 => 'Hur skapar jag en ny tråd i en kategori?',
		1 => 'För att skapa en ny tråd i en kategori, klicka på den relevanta knappen på antingen kategori- eller trådsidan. Möjligen så måste du registrera dig innan du kan skriva ett meddelande. En lista över vilka behörigheter som du har finns längst ner på kategori- och trådsidorna. Exempel: Du kan skapa nya trådar i denna kategori, Du kan bifoga filer i denna kategori, osv.'
	),
	array(
		0 => 'Hur ändrar och raderar jag inlägg?',
		1 => 'Såvida du inte är administratör eller moderator kan du endast redigera och ta bort dina egna inlägg. Du kan redigera ett inlägg (ibland bara under en begränsad tid från det att inlägget gjorts) genom att klicka på <em>redigera</em>-knappen för det relevanta inlägget. Om någon redan svarat på ditt inlägg så kommer det att finnas en liten textrad under ditt inlägg efter att du redigerat det, som visar hur många gånger och när du har redigerat inlägget. Detta kommer inte att visas om ingen har svarat på ditt inlägg. Det kommer inte heller att visas om det är en moderator eller administratör som redigerat inlägget. Dock kan de om de vill lämna ett meddelande om vad de ändrat och varför. Observera att vanliga användare inte kan ta bort ett inlägg om det redan besvarats.'
	),
	array(
		0 => 'Hur lägger jag till en signatur till mitt inlägg?',
		1 => 'För att lägga till en signatur till ett inlägg måste du först skapa en signatur, detta gör du via din kontrollpanel. När du väl skapat din signatur kan du kryssa i <em>Infoga min signatur</em>-rutan i inläggsformuläret för att lägga till din signatur till ditt inlägg. Du kan också automatiskt alltid infoga din signatur till alla dina inlägg genom att ändra inställningarna i din profil (du kan fortfarande förhindra att signaturen infogas i enskilda inlägg genom att klicka ur <em>Infoga min signatur</em>-rutan i inläggsformuläret).'
	),
	array(
		0 => 'Hur skapar jag en omröstning?',
		1 => 'Det är enkelt att skapa en omröstning. När du postar en ny tråd (eller redigerar det första inlägget i en tråd) så bör du se “Skapa omröstning”-fliken under inläggsformuläret (om du inte kan se detta har du inte behörighet att skapa omröstningar). Skriv in en fråga för omröstningen i “Omröstningsfråga”-rutan och sedan minst två alternativ i “Omröstningsalternativ”-rutan (hur många alternativ du får ha som mest bestäms av administratören) med varje alternativ separerat med en radbrytning. Du kan också välja det antal val användaren får välja under “Alternativ per användare”, en gräns för hur länge omröstningen ska vara (0 för en omröstning som aldrig tar slut) och till sist kan du välja om användarna får ändra sin röst.'
	),
	array(
		0 => 'Hur redigerar eller tar jag bort en omröstning?',
		1 => 'Som med inlägg kan omröstningar endast redigeras av inläggsskaparen, en moderator eller en administratör. För att redigera en omröstning klickar du på redigeringsknappen för det första inlägget i tråden. Om ingen har röstat så går det att ta bort omröstningen eller redigera alternativen. Om någon däremot har röstat så kan endast moderatorer och administratörer redigera eller ta bort omröstningen. Detta för att förhindra fusk.'
	),
	array(
		0 => 'Varför kan jag inte lägga till fler omröstningsalternativ?',
		1 => 'Gränsen för antal omröstningsalternativ ställs in av forumadministratören. Om du behöver lägga till fler alternativ till din omröstning än vad som tillåts, kontakta en forumadministratör.'
	),
	array(
		0 => 'Varför kan jag inte komma åt en kategori?',
		1 => 'Vissa kategorier kan vara begränsade till vissa användare eller grupper. För att visa, läsa, posta, osv. kan du behöva speciell tillåtelse som endast moderatorer och administratörer kan ge dig. Pröva att kontakta dem.'
	),
	array(
		0 => 'Varför kan jag inte rösta i omröstningar?',
		1 => 'Endast registrerade användare kan rösta i omröstningar (förhindrar fusk). Om du har registrerat dig och ändå inte kan rösta så har du förmodligen inte behörighet.'
	),
	array(
		0 => 'Varför kan jag inte bifoga filer?',
		1 => 'Möjligheten att bifoga filer kan aktiveras per kategori, per grupp och per användare. Administratören kanske inte tillåter bilagor i just den kategori du försöker posta i, eller så kan endast vissa grupper bifoga filer. Kontakta administratören om du är osäker på varför du inte kan bifoga filer.'
	),
	array(
		0 => 'Varför fick jag en varning?',
		1 => 'Alla administratörer har egna regler för sina webbplatser. Om de anser att du har brutit mot en regel så kan de utfärda en varning mot dig. Observera att detta är administratörens beslut, och att phpBB Limited inte har någonting att göra med varningar på andra webbplatser. Kontakta forumadministratören om du är osäker på varför du varnats.'
	),
	array(
		0 => 'Hur kan jag rapportera inlägg till en moderator?',
		1 => 'Om forumadministratören har tillåtit det så ska du se en bild som används för att rapportera inlägg bredvid inlägget som du vill rapportera. Klicka på denna bild och du kommer att guidas igenom stegen som krävs för att rapportera inlägget.'
	),
	array(
		0 => 'Vad är “Spara”-knappen i trådformuläret till för?',
		1 => 'Denna knapp låter dig spara utkast av meddelanden så att du kan skriva klart och posta de vid ett senare tillfälle. För att ladda in ett sparat utkast, gå till kontrollpanelen.'
	),
	array(
		0 => 'Varför måste mitt inlägg godkännas?',
		1 => 'Forumadministratören kan kräva att alla inlägg i kategorin du postar i granskas innan de visas. Det är också möjligt att administratören har placerat dig i en grupp av användare som han anser behöver få sina inlägg granskade innan de visas. Kontakta administratören för mer information.'
	),
	array(
		0 => 'Hur knuffar jag upp min tråd?',
		1 => 'Genom att klicka på “Knuffa upp tråd”-länken i tråden så kan du "knuffa upp" tråden överst på förstasidan i kategorin. Om du inte ser denna länk så kan uppknuffning av trådar vara inaktiverat, eller så har inte den krävda tidsgränsen uppnåts än. Det går också att knuffa upp en tråd genom att helt enkelt svara på den. Försäkra dig dock först om att du följer forumreglerna.'
	),
	array(
		0 => '--',
		1 => 'Formatering och trådtyper'
	),
	array(
		0 => 'Vad är BBCode?',
		1 => 'BBCode är en speciell variant av HTML som ger stor kontroll över formateringen av särskilda objekt i ett inlägg. Om du kan använda BBCode eller inte bestäms av administratören (du kan också inaktivera det i specifika inlägg via inläggsformuläret). BBCode liknar i mångt och mycket HTML, taggar innesluts av hakparanteser [ och ] istället för &lt; och &gt;. För mer information om BBCode se guiden som kan nås från inläggsformuläret.'
	),
	array(
		0 => 'Kan jag använda HTML?',
		1 => 'Nej. Det är inte möjligt att posta HTML på detta forum och få det tolkat som HTML. Den mesta formatering som kan göras med HTML kan istället göras med BBCode.'
	),
	array(
		0 => 'Vad är smilies?',
		1 => 'Smilies är små grafiska bilder som kan användas för att uttrycka en känsla genom att använda en kod, t.ex. :) för glad, eller :( för ledsen. En fullständig lista över alla smilies kan nås via inläggsformuläret. Försök att inte överanvända smilies, de kan fort göra ett inlägg oläsbart och en moderator kan ta bort de eller inlägget helt och hållet. Administratören kan också ha satt en gräns för hur många smilies ett inlägg får innehålla.'
	),
	array(
		0 => 'Kan jag infoga bilder?',
		1 => 'Ja, bilder kan visas i dina inlägg. Om administratören har aktiverat bilagor så kan du ladda upp bilderna direkt till forumet. Annars måste du länka till en bild som finns på en offentlig webbserver, t.ex. http://www.example.com/my-picture.gif. Du kan inte länka till bilder som bara finns på din PC (såvida den inte är en offentlig webbserver) eller till bilder som finns bakom autentiseringsmekanismer, som t.ex. Hotmail eller Yahoo, lösenorsskyddade sajter, m.m. För att infoga en bild, använd BBCode-taggen [img].'
	),
	array(
		0 => 'Vad är globala anslag?',
		1 => 'Globala anslag innehåller viktig information och du bör läsa de så fort som möjligt. Globala anslag visas överst på varje sida i varje kategori och i kontrollpanelen. Om du kan posta ett globalt anslag eller inte beror på vilken behörighet som krävs och detta ställs in av forumadministratören.'
	),
	array(
		0 => 'Vad är anslag?',
		1 => 'Anslag innehåller ofta viktig information om kategorin du för tillfället läser i och du bör läsa de så fort som möjligt. Anslag visas överst på varje sida i kategorin de postats i. Som med globala anslag så beror det på vilken behörighet som krävs om du kan posta anslag eller inte och detta ställs in av forumadministratören.'
	),
	array(
		0 => 'Vad är notiser?',
		1 => 'Notiser visas under eventuella anslag och endast på första sidan i kategorin de postats i. De är ofta rätt viktiga så du bör läsa de när du kan. Som med anslag och globala anslag så är det forumadministratören som bestämmer vilken behörighet som krävs för att kunna posta notiser.'
	),
	array(
		0 => 'Vad är låsta trådar?',
		1 => 'Låsta trådar är trådar där användare inte kan svara och omröstningar automatiskt avslutats. Trådar kan låsas av många anledningar och de låses av moderatorer eller forumadministratörer. Det är möjligt att du också kan låsa dina egna trådar om du har behörighet.'
	),
	array(
		0 => 'Vad är trådikoner?',
		1 => 'Trådikoner är användarvalda bilder som kan förknippas med inlägg för att markera dess innehåll. Om det går att använda trådikoner eller inte bestäms av forumadministratören.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Användarnivåer och grupper'
	),
	array(
		0 => 'Vad är administratörer?',
		1 => 'Administratörer är medlemmar tilldelade den högsta nivån av kontroll över hela forumet. Dessa medlemmar kan kontrollera alla aspekter av forumets drift, vilket inkluderar att ställa in behörigheter, bannlysa användare, skapa användargrupper och moderatorer, osv. De har också fullständiga moderationsbehörigheter i alla kategorier, om forumgrundaren tillåtit det.'
	),
	array(
		0 => 'Vad är moderatorer?',
		1 => 'Moderatorer är individer (eller grupper av individer) som sköter om de dagliga aktiviteterna på forumet. De kan redigera eller ta bort inlägg och låsa, låsa upp, flytta, ta bort och dela trådar i de forum de modererar. I allmänhet så finns moderatorerna där för att förhindra att användare kommer ifrån ämnet eller postar anstötligt material.'
	),
	array(
		0 => 'Vad är användargrupper?',
		1 => 'Användargrupper är grupper av medlemmar som delar in forumets medlemmar i lätthanterliga sektioner som forumadministratörerna kan arbeta med. Varje användar kan vara medlem i flera grupper och kan tilldelas individuella behörigheter. Detta gör det enkelt för administratörer att ändra behörigheter för många användare på samma gång, som till exempel att byta moderationsbehörigheter eller ge användare tillgång till ett privat forum.'
	),
	array(
		0 => 'Var hittar jag användargrupperna och hur går jag med i en?',
		1 => 'Du kan visa alla användargrupper via fliken “Användargrupper” i din kontrollpanel. Om du vill gå med i en grupp, klicka på lämplig knapp. Inte alla grupper är tillgängliga för alla, vissa kan kräva godkännande, vissa är stängda och andra kan till och med vara dolda. Om gruppen är öppen kan du gå med i den genom att klicka på lämplig knapp. Om gruppen kräver godkännande kan du ansöka om medlemskap genom att klicka på lämplig knapp. Gruppledaren måste godkänna din ansökan och de kan fråga dig varför du vill gå med i gruppen. Besvära inte en gruppledare om de inte godkänner din ansökan, de har sina anledningar.'
	),
	array(
		0 => 'Hur blir jag ledare för en användargrupp?',
		1 => 'Gruppledare utses oftast när användargrupper skapas initialt av en forumadministratör. Om du är intresserad av att skapa en användargrupp så är din första kontakt en administratör, försök med att skicka ett personligt meddelande till dem.'
	),
	array(
		0 => 'Varför visas vissa användargrupper i andra färger?',
		1 => 'Det är möjligt för administratören att tilldela en färg till medlemmar av en viss användargrupp för att göra det enkelt att känna igen medlemmar i den gruppen.'
	),
	array(
		0 => 'Vad är en “Standardgrupp”?',
		1 => 'Om du är medlem i fler än en användargrupp så bestämmer standardgruppen vilken gruppfärg och grupptitel som visas för dig. Administratören kan tillåta dig att byta standardgrupp via din kontrollpanel.'
	),
	array(
		0 => 'Vad är “Teamet”-länken för något?',
		1 => 'Denna sida innehåller en lista med alla i forumledningen, inklusive administratörer och moderatorer med uppgifter om vilka kategorier de modererar.'
	),
	array(
		0 => '--',
		1 => 'Personliga meddelanden'
	),
	array(
		0 => 'Jag kan inte skicka personliga meddelanden!',
		1 => 'Det finns tre möjliga anledningar till detta; du är inte registrerad och/eller inloggad, administratören har inaktiverat personliga meddelanden för hela forumet, eller så har administratören förhindrat just dig från att skicka personliga meddelanden. Fråga i så fall administratören varför.'
	),
	array(
		0 => 'Jag får oönskade personliga meddelanden!',
		1 => 'Du kan blockera en användare från att skicka personliga användare till dig genom att använda meddelanderegler som du ställer in i din kontrollpanel. Om du får anstötliga personliga meddelanden från en viss användare så bör du informera forumadministratören, de har makten att förhindra en användare från att skicka personliga meddelanden överhuvudtaget.'
	),
	array(
		0 => 'Jag har fått skräppost eller anstötliga e-postmeddelanden från någon på detta forum!',
		1 => 'Det var tråkigt att höra. E-postformuläret på detta forum innehåller säkerhetsrutiner för att kunna spåra användare som skickar sådana meddelanden, så du bör skicka ett e-postmeddelande till administratören med en fullständig kopia av e-postmeddelandet du fått. Det är väldigt viktigt att inkludera e-posthuvudet (detta innehåller detaljer om användaren som skickat e-postmeddelandet). Administratören kan därefter vidta åtgärder.'
	),
	array(
		0 => '--',
		1 => 'Vänner och ignorerade  användare'
	),
	array(
		0 => 'Vad är vän- och ignorerade  användarelistan för något?',
		1 => 'Du kan använda dessa listor för att organisera medlemmar på forumet. Medlemmar som läggs till i din vänskapslista kommer att visas i din kontrollpanel vilket låter dig snabbt och enkelt visa deras onlinestatus och skicka personliga meddelanden till dem. Om det stöds i mallen så kan inlägg från dessa användare också framhävas. Om du lägger till en användare till din lista över ignorerade  användare, så kommer alla inlägg de gör att döljas automatiskt.'
	),
	array(
		0 => 'Hur lägger jag till / tar jag bort användare från min vän- eller ignorerade  användareslista?',
		1 => 'Du kan lägga till användare till din lista på två sätt. På varje användares profilsida finns det en länk för att antingen lägga till dem till din vän- eller ignorerade  användareslista. Alternativt så kan du lägga till användare direkt genom att ange deras användarnamn i din kontrollpanel. Du kan också ta bort användare från din lista på samma sida.'
	),
	array(
		0 => '--',
		1 => 'Sökning på forumet'
	),
	array(
		0 => 'Hur söker jag på forumet?',
		1 => 'Ange en term i sökrutan som finns på indexsidan, forumsidor och trådsidor. Avancerad sökning kan nås genom att klicka på “Avancerad sökning”-länken som finns på alla sidor på forumet. Hur sökfunktionen nås kan variera beroende på vilken stil som används.'
	),
	array(
		0 => 'Varför får jag inga träffar på min sökning?',
		1 => 'Din sökning var förmodligen för vag och innehöll för många vanliga termer som inte indexeras av phpBB3. Var mer specifik och använd alternativen som finns i avancerad sökning.'
	),
	array(
		0 => 'Varför får jag en tom sida när jag försöker söka!?',
		1 => 'Din sökning resulterade i för många resultat för webbservern att hantera. Använd “Avancerad sökning” och var mer specifik med termerna och med vilka kategorier som ska sökas i.'
	),
	array(
		0 => 'Hur söker jag efter medlemmar?',
		1 => 'Gå till “Medlemmar”-sidan och klicka på “Hitta en medlem”-länken.'
	),
	array(
		0 => 'Hur hittar jag mina egna inlägg och trådar?',
		1 => 'Dina egna inlägg kan hittas antingen genom att klicka på “Visa dina inlägg” i kontrollpanelen eller via din egen profilsida. För att söka efter dina trådar, använd avancerad sökning och fyll i de olika alternativen på lämpligt sätt.'
	),
	array(
		0 => '--',
		1 => 'Bevakningar och bokmärken'
	),
	array(
		0 => 'Vad är skillnaden mellan bokmärkning och bevakning?',
		1 => 'Bokmärkning i phpBB3 är ganska likt bokmärkning (eller favoriter) i din webbläsare. Du uppmärksammas inte nödvändigtvis vid uppdateringar, men du kan senare enkelt återvända till tråden. Om du istället bevakar en tråd så kommer du meddelas via din valda metod eller metoder när tråden eller kategorin du bevakar uppdateras.'
	),
	array(
		0 => 'Hur bevakar jag specifika kategorier eller trådar?',
		1 => 'För att bevaka en specifik kategori, klicka på “Bevaka denna kategori”-länken när du befinner dig i kategorin som du vill bevaka. För att bevaka en tråd så kan du antingen svara på tråden och kryssa i rutan “Meddela mig när tråden besvaras” eller så kan du klicka på länken “Bevaka denna tråd” som finns på trådsidan.'
	),
	array(
		0 => 'Hur tar jag bort mina bevakningar?',
		1 => 'För att ta bort dina bevakningar, gå till kontrollpanelen och klicka på “Hantera bevakningar”).'
	),
	array(
		0 => '--',
		1 => 'Bilagor'
	),
	array(
		0 => 'Vilka bilagor tillåts på detta forum?',
		1 => 'Varje forumadministratör kan tillåta eller förbjuda vissa typer av bilagor. Om du är osäker på vad som får laddas upp, kontakta forumadministratören för hjälp.'
	),
	array(
		0 => 'Hur hittar jag alla mina bilagor?',
		1 => 'För att hitta listan över alla bilagor du laddat upp, gå till kontrollpanelen och klicka på “Hantera bilagor”.'
	),
	array(
		0 => '--',
		1 => 'Om phpBB3'
	),
	array(
		0 => 'Vem har gjort detta forum?',
		1 => 'Denna programvara (i sin oförändrade form) är producerad av, släppt av phpBB Limited, som innehar rättigheten. Den finns tillgänglig under GNU General Public Licence och får distribueras fritt. Se länken för mer information.'
	),
	array(
		0 => 'Varför finns inte funktionen X?',
		1 => 'Denna programvara har gjorts och licensierats av phpBB Limited. Om du anser att en funktion bör läggas till eller vill rapportera en bugg, var vänlig och besök phpBB Idécenter, där du kommer att hitta verktyg för att göra så.'
	),
	array(
		0 => 'Vem ska jag kontakta med juridiska ärenden angående detta forum?',
		1 => 'Vem som helst av administratörerna som listas på “Teamet”-sidan bör vara lämpliga att kontakta med dina klagomål. Om du inte får något svar på detta sätt så kan du kontakta ägaren av domänen eller, om detta forum ligger på en gratistjänst (såsom Yahoo!, free.fr, f2s.com, osv.), abuse-avdelningen för den tjänsten. Observera att phpBB Limited <strong>inte har någon som helst kontroll</strong> och kan inte på något sätt hållas ansvariga för hur, var eller av vem detta forum används. Kontakta inte phpBB Limited med anledning av något juridiskt ärende (“cease and desist”, ansvar, förtal, osv.) som <strong>inte direkt berör</strong> webbplatsen phpBB.com. Om du ändå kontaktar phpBB Limited om <strong>någon form av tredjepartsanvändning av denna mjukvara</strong> så förvänta dig ett fåordigt svar eller inget svar alls.'
	),
);
