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
	'ADD_ATTACHMENT'			=> 'Ladda upp en bilaga',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Använd följande formulär om du vill bifoga en eller flera filer till ditt inlägg.',
	'ADD_FILE'					=> 'Bifoga filen',
	'ADD_POLL'					=> 'Skapa omröstning',
	'ADD_POLL_EXPLAIN'			=> 'Lämna dessa fält tomma om du inte vill ha en omröstning i din tråd.',
	'ALREADY_DELETED'			=> 'Detta meddelande har redan tagits bort.',
	'ATTACH_DISK_FULL'			=> 'Det finns inte tillräkligt ledigt diskutrymme for att posta denna bilaga.',
	'ATTACH_QUOTA_REACHED'		=> 'Detta forums bilagekvot har uppnåtts, du kan inte ladda upp några filer.',
	'ATTACH_SIG'				=> 'Infoga min signatur (signaturen kan ändras via kontrollpanelen)',

	'BBCODE_A_HELP'				=> 'Placera bilaga inom inlägget: [attachment=]filnamn.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Fet text: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Kodvisning: [code]kod[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Textstorlek: [size=85]liten text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s är <em>AV</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s är <em>PÅ</em>',
	'BBCODE_I_HELP'				=> 'Kursiv text: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list][*]text[/list]',
 	'BBCODE_LISTITEM_HELP'		=> 'Post i lista: [*]text',
	'BBCODE_O_HELP'				=> 'Ordnad lista: [list=1]Del ett[/list] eller [list=a][*]Del a[/list]',
	'BBCODE_P_HELP'				=> 'Infoga bild: [img]http://bild_url[/img]',
	'BBCODE_Q_HELP'				=> 'Citera text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Textfärg: [color=red]text[/color]  eller color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'Understruken text: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Infoga länk: [url]http://url[/url] eller [url=http://url]Länktext[/url]',
	'BBCODE_Y_HELP'				=> 'Lista: Lägg till listelement',
	'BUMP_ERROR'				=> 'Du kan inte knuffa upp denna tråd ännu.',

	'CANNOT_DELETE_REPLIED'		=> 'Du kan endast ta bort inlägg som inte har besvarats.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Detta inlägg har låsts. Du kan inte längre redigera det.',
	'CANNOT_EDIT_TIME'			=> 'Du kan inte längre redigera eller ta bort detta inlägg.',
	'CANNOT_POST_ANNOUNCE'		=> 'Du kan inte skapa anslagstrådar.',
	'CANNOT_POST_STICKY'		=> 'Du kan inte skapa notistrådar.',
	'CHANGE_TOPIC_TO'			=> 'Ändra trådtyp till',

	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Ditt meddelande innehåller %1$d tecken.',
		2	=> 'Ditt meddelande innehåller %1$d tecken.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Din signatur innehåller %1$d tecken.',
		2	=> 'Din signatur innehåller %1$d tecken.',
	),
	'CLOSE_TAGS'				=> 'Stäng taggar',
	'CURRENT_TOPIC'				=> 'Aktuell tråd',
	
	'DELETE_FILE'				=> 'Ta bort fil',
	'DELETE_MESSAGE'			=> 'Ta bort meddelande',
	'DELETE_MESSAGE_CONFIRM'	=> 'Är du säker på att du vill ta bort detta meddelande?',
	'DELETE_OWN_POSTS'			=> 'Du kan bara ta bort dina egna inlägg.',
	'DELETE_PERMANENTLY'		=> 'Ta bort permanent',
	'DELETE_POST_CONFIRM'		=> 'Är du säker på att du vill ta bort detta inlägget?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Är du säker på att du vill ta bort detta inlägget <strong>permanent</strong>?',
	'DELETE_POST_PERMANENTLY'	=> 'Tar bort detta inlägget permanent så att det inte går att återställa',
	'DELETE_POSTS_CONFIRM'		=> 'Är du säker på att du vill ta bort dessa inlägg?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Är du säker på att du vill ta bort dessa inlägg <strong>permanent</strong>?',
	'DELETE_REASON'				=> 'Anledning till borttagning',
	'DELETE_REASON_EXPLAIN'		=> 'Den angivna anledningen till borttagningen kommer att vara synlig för moderatorer.',
	'DELETE_POST_WARN'			=> 'När inlägget väl tagits bort kan det inte återställas',
	'DELETE_TOPIC_CONFIRM'		=> 'Är du säker på att du vill ta bort denna tråden?',
	'DELETE_TOPIC_PERMANENTLY'	=> 'Är du säker på att du vill ta bort denna tråden permanent?',
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Är du säker på att du vill ta bort denna tråd <strong>permanent</strong>',
	'DELETE_TOPICS_CONFIRM'		=> 'Är du säker på att du vill ta bort dessa trådar?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Är du säker på att du vill ta bort dessa trådar <strong>permanent</strong>',
	'DISABLE_BBCODE'			=> 'Inaktivera BBCode',
	'DISABLE_MAGIC_URL'			=> 'Inaktivera automatisk länkning av URL:er',
	'DISABLE_SMILIES'			=> 'Inaktivera smilies',
	'DISALLOWED_CONTENT'		=> 'Uppladdningen nekades eftersom den uppladdade filen identifieras som en möjlig smittspridare.',
	'DISALLOWED_EXTENSION'		=> 'Filtypen %s är inte tillåten.',
	'DRAFT_LOADED'				=> 'Utkastet laddades in, du kan nu slutföra ditt inlägg.<br />Utkastet kommer att tas bort när du sparat detta inlägg.',
	'DRAFT_LOADED_PM'			=> 'Utkastet laddades in, du kan nu slutföra ditt personliga meddelande.<br />Utkastet kommer att tas bort när du skickat detta personliga meddelande.',
	'DRAFT_SAVED'				=> 'Utkastet sparades.',
	'DRAFT_TITLE'				=> 'Utkasttitel',

	'EDIT_REASON'				=> 'Skäl för ändring av detta inlägg',
	'EMPTY_FILEUPLOAD'			=> 'Den uppladdade filen är tom.',
	'EMPTY_MESSAGE'				=> 'Du måste skriva ett meddelande att posta.',
	'EMPTY_REMOTE_DATA'			=> 'Filen kunde inte laddas upp, försök ladda upp den manuellt.',

	'FLASH_IS_OFF'				=> '[flash] är <em>AV</em>',
	'FLASH_IS_ON'				=> '[flash] är <em>PÅ</em>',
	'FLOOD_ERROR'				=> 'Du kan inte göra ett nytt inlägg så snart inpå ditt förra.',
	'FONT_COLOR'				=> 'Textfärg',
 	'FONT_COLOR_HIDE'			=> 'Dölj textfärger',
	'FONT_HUGE'					=> 'Enorm',
	'FONT_LARGE'				=> 'Stor',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Textstorlek',
	'FONT_SMALL'				=> 'Liten',
	'FONT_TINY'					=> 'Minimal',
	
	'GENERAL_UPLOAD_ERROR'		=> 'Kunde inte ladda upp bilaga till %s.',
	
	'IMAGES_ARE_OFF'			=> '[img] är <em>AV</em>',
	'IMAGES_ARE_ON'				=> '[img] är <em>PÅ</em>',
	'INVALID_FILENAME'			=> '%s är ett felaktigt filnamn.',
	
	'LOAD'						=> 'Ladda',
	'LOAD_DRAFT'				=> 'Ladda utkast',
	'LOAD_DRAFT_EXPLAIN'		=> 'Här kan du välja det utkast som du vill fortsätta skriva på. Allt innehåll i ditt nuvarande inlägg kommer att tas bort. Se, redigera och ta bort utkast i kontrollpanelen.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Du måste logga in för att knuffa upp trådar i denna kategori.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Du måste logga in för att ta bort inlägg i denna kategori.',
	'LOGIN_EXPLAIN_POST'		=> 'Du måste logga in för att posta i denna kategori.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Du måste logga in för att citera inlägg i denna kategori.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Du måste logga in för att svara på trådar i denna kategori.',
	
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Du får endast använda textstorlekar upp till storlek %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Dina flashfiler får inte vara högre än %d pixel hög',
		2	=> 'Dina flashfiler får inte vara högre än %d pixlar höga',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Dina Flashfiler får inte vara bredare än %1$d pixel breda.',
		2	=> 'Dina Flashfiler får inte vara bredare än %1$d pixlar breda.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Dina bilder får inte vara högre än %1$d pixel.',
		2	=> 'Dina bilder får inte vara högre än %1$d pixlar.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Dina bilder får inte vara bredare än %1$d pixel.',
		2	=> 'Dina bilder får inte vara bredare än %1$d pixlar.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Skriv ditt meddelande här, det får inte bestå av fler än <strong>%d</strong> tecken.',
		2	=> 'Skriv ditt meddelande här, det får inte bestå av fler än <strong>%d</strong> tecken.',
	),
	'MESSAGE_DELETED'			=> 'Meddelandet togs bort.',
	'MORE_SMILIES'				=> 'Visa fler smilies',
	
	'NOTIFY_REPLY'				=> 'Meddela mig när tråden besvaras',
	'NOT_UPLOADED'				=> 'Filen kunde inte laddas upp.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Du kan inte ta bort existerande omröstningsalternativ.',
 	'NO_PM_ICON'				=> 'Ingen PM-ikon',
	'NO_POLL_TITLE'				=> 'Du måste ange en omröstningsfråga.',
	'NO_POST'					=> 'Det valda inlägget finns inte.',
	'NO_POST_MODE'				=> 'Inget postningsalternativ specificerades.',
	
	'PARTIAL_UPLOAD'			=> 'Filen laddades endast upp delvis.',
	'PHP_SIZE_NA'				=> 'Bilagans är för stor.<br />Kunde inte hitta maximalstorleken definierad av PHP i php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Bilagan är för stor, maximalstorleken är %1$d %2$s.<br />Detta har definierats i php.ini och kan inte överskridas.',
	'PLACE_INLINE'				=> 'Placera inom inlägget',
	'POLL_DELETE'				=> 'Ta bort omröstning',
	'POLL_FOR'					=> 'Omröstningen varar i',
	'POLL_FOR_EXPLAIN'			=> 'Ange 0 eller lämna tomt för att skapa en omröstning som aldrig tar slut.',
	'POLL_MAX_OPTIONS'			=> 'Alternativ per användare',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Detta är det antal alternativ varje användare kan välja när de röstar.',
	'POLL_OPTIONS'				=> 'Omröstningsalternativ',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Placera varje alternativ på en ny rad. Du kan ange upp till <strong>%d</strong> alternativ.',
		2	=> 'Placera varje alternativ på en ny rad. Du kan ange upp till <strong>%d</strong> alternativ.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Placera varje alternativ på en ny rad. Du kan ange upp till <strong>%d</strong> alternativ. Om du tar bort eller lägger till alternativ så kommer alla nuvarande röster återställas.',
		2	=> 'Placera varje alternativ på en ny rad. Du kan ange upp till <strong>%d</strong> alternativ. Om du tar bort eller lägger till alternativ så kommer alla nuvarande röster återställas.',
	),
	'POLL_QUESTION'				=> 'Omröstningsfråga',
 	'POLL_TITLE_TOO_LONG'		=> 'Omröstningsfrågan får inte innehålla fler än 100 tecken',
 	'POLL_TITLE_COMP_TOO_LONG'	=> 'Den omtolkade storleken på din omröstningsfråga är för stor, försök ta bort BBCode eller smilies.',
	'POLL_VOTE_CHANGE'			=> 'Tillåt ändring av röst',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Om detta är aktiverat så kan användare ändra sitt val senare.',
	'POSTED_ATTACHMENTS'		=> 'Bifogade filer',
	'POST_APPROVAL_NOTIFY'		=> 'Du kommer att underrättas när ditt inlägg har godkänts.',
	'POST_CONFIRMATION'			=> 'Verifiera inlägg',
	'POST_CONFIRM_EXPLAIN'		=> 'För att förhindra automatiska inlägg så kräver forumet att du här anger en verifieringskod. Koden visas i bilden nedan. Om du ser dåligt eller av annan anledning inte kan läsa koden nedan, kontakta %sforumadministratörerna%s.',
	'POST_DELETED'				=> 'Inlägget togs bort.',
	'POST_EDITED'				=> 'Inlägget ändrades.',
	'POST_EDITED_MOD'			=> 'Inlägget ändrades, men måste godkännas av en moderator innan det visas offentligt.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Inläggsikon',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Granska inlägg',
	'POST_REVIEW_EDIT'			=> 'Granska inlägg',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Detta inlägg har blivit ändrat av en annan användare medan du gjorde ändringar. Du vill kanske granska det nuvarande inlägget och jämka dina ändringar.',
	'POST_REVIEW_EXPLAIN'		=> 'Ett eller flera nya inlägg har gjorts till tråden du besvarar sedan du senast läste den. Du kanske vill läsa igenom ditt inlägg en gång till i och med dessa nya inlägg.',
	'POST_STORED'				=> 'Meddelandet sparades.',
	'POST_STORED_MOD'			=> 'Meddelandet sparades, men måste godkännas av en moderator innan det visas offentligt.',
	'POST_TOPIC_AS'				=> 'Skapa tråd som',
	'PROGRESS_BAR'				=> 'Uppladdningsprocess',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Du kan endast ha %1$d citat inom varandra.',
		2	=> 'Du kan endast ha upp till %1$d citat inom varandra.',
	),
	'QUOTE_NO_NESTING'			=> 'Du kan inte citera inuti ett annat citat.',
	
	'REMOTE_UPLOAD_TIMEOUT'		=> 'Denna filen kunde inte laddas upp för förfrågan tog för lång tid.',
	'SAVE'						=> 'Spara',
	'SAVE_DATE'					=> 'Sparat',
	'SAVE_DRAFT'				=> 'Spara utkast',
	'SAVE_DRAFT_CONFIRM'		=> 'Kom ihåg att sparade utkast endast innehåller ämne och meddelande, alla andra element (t.ex. bilagor och omröstningar) tas bort. Vill du spara ditt utkast nu?',
	'SMILIES'					=> 'Smilies',
	'SMILIES_ARE_OFF'			=> 'Smilies är <em>AV</em>',
	'SMILIES_ARE_ON'			=> 'Smilies är <em>PÅ</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tidsgräns för notis/anslag',
	'STICK_TOPIC_FOR'			=> 'Håll som notis/anslag i',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Ange 0 eller lämna tomt för att skapa en permanent notis/anslag. Detta nummer är relativt till trådens datering.',
	'STYLES_TIP'				=> 'Tips: Markera ett textstycke och klicka på den BBCode du vill använda.',

	'TOO_FEW_CHARS'				=> 'Ditt meddelande innehåller för få tecken.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Ditt meddelande måste innehålla minst %1$d tecken.',
		2	=> 'Ditt meddelande måste innehålla minst %1$d tecken.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Du måste ange minst två omröstningsalternativ.',
	'TOO_MANY_ATTACHMENTS'		=> 'Kan inte lägga till en till bilaga, %d är det maximala antalet bilagor per meddelande.',
	'TOO_MANY_CHARS'			=> 'Ditt meddelande innehåller för många tecken.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Det maximala antalet tecken tillåtet är %1$d.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Du angav för många omröstningsalternativ.',
	'TOO_MANY_SMILIES'			=> 'Ditt meddelande innehåller för många smilies. Det maximala antalet tillåtna smilies är %d.',
	'TOO_MANY_URLS'				=> 'Ditt meddelande innehåller för många länkar. Det maximala antalet tillåtna länkar är %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Du kan inte tillåta fler val per användare än vad det finns omröstningalternativ.',
	'TOPIC_BUMPED'				=> 'Tråden knuffades upp.',
	
	'UNAUTHORISED_BBCODE'		=> 'Du kan inte använda vissa BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'För att ändra tillbaka denna tråd från global till normal så måste du välja i vilken kategori som den ska visas.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Ditt meddelande innehåller följande otillåtna tecken:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Ditt ämne innehåller följande otillåtna tecken:<br />%s',
	'UPDATE_COMMENT'			=> 'Uppdatera kommentar',
	'URL_INVALID'				=> 'URL:en du angav är felaktig.',
	'URL_NOT_FOUND'				=> 'Filen hittades inte.',
	'URL_IS_OFF'				=> '[url] är <em>AV</em>',
	'URL_IS_ON'					=> '[url] är <em>PÅ</em>',
	'USER_CANNOT_BUMP'			=> 'Du kan inte knuffa upp trådar i denna kategori.',
	'USER_CANNOT_DELETE'		=> 'Du kan inte ta bort inlägg i denna kategori.',
	'USER_CANNOT_EDIT'			=> 'Du kan inte redigera inlägg i denna kategori.',
	'USER_CANNOT_REPLY'			=> 'Du kan inte svara på trådar i denna kategori.',
	'USER_CANNOT_FORUM_POST'	=> 'Du kan inte posta i denna kategori eftersom kategoritypen inte stödjer det.',

	'VIEW_MESSAGE'				=> '%sVisa ditt meddelande%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVisa ditt skickade personliga meddelande%s',

	'WRONG_FILESIZE'			=> 'Filen är för stor, den maximala filstorleken är %1$d %2$s.',
	'WRONG_SIZE'				=> 'Bilden måste vara minst %1$s pixlar bred, %2$s pixlar hög och får inte vara större än %3$s pixlar bred och %4$s pixlar hög. Den valda bilden är %5$s pixlar bred och %6$s pixlar hög.',
));
