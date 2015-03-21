<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: forums.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
*
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Autobeskær efter tid siden seneste indlæg',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Antal dage siden seneste indlæg, hvorefter emnet fjernes.',
	'AUTO_PRUNE_FREQ'			=> 'Frekvens for autobeskæring',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Antal dage mellem autobeskæring.',
	'AUTO_PRUNE_VIEWED'			=> 'Autobeskær efter tid siden seneste visning',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Antal dage siden emnet sidst blev vist, hvorefter emnet fjernes.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Frekvens for autobeskæring af skyggeemner',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Autobeskær skyggeemner efter alder',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Skyggeemnet slettes efter valgte antal dage.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Frekvens mellem autobeskæring i dage.',

	'CONTINUE'						=> 'Fortsæt',
	'COPY_PERMISSIONS'				=> 'Kopier tilladelser fra',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'For at lette konfigureringen af dit nye forums tilladelser, kan du vælge at kopiere tilladelser fra et eksisterende forum.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Når det nye forum er oprettet vil det have samme tilladelser som det her valgte. Hvis der ikke vælges et forum, vil forummet ikke være synligt før tilladelserne er indstillet.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Hvis du vælger at kopiere tilladelser vil forummet have samme tilladelser som det her valgte. Dette vil tilsidesætte alle tilladelser, der er sat for dette forum, med tilladelserne for det her valgte forum. Hvis der ikke vælges et forum vil forummet beholde sine nuværende tilladelser.',
	'COPY_TO_ACL'					=> 'Alternativt kan du vælge helt nye %snye tilladelseindstillinger%s for forummet.',
	'CREATE_FORUM'					=> 'Opret nyt forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Slet indhold eller flyt til forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Slet underfora eller flyt til forum',
	'DEFAULT_STYLE'						=> 'Standardtypografi',
	'DELETE_ALL_POSTS'					=> 'Slet indlæg',
	'DELETE_SUBFORUMS'					=> 'Slet underfora og indlæg',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktiver aktive emner',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Hvis sat til ja vil aktive emner i udvalgte underfora blive vist under denne kategori.',

	'EDIT_FORUM'					=> 'Ret forum',
	'ENABLE_INDEXING'				=> 'Aktiver søgeindeksering',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Hvis sat til ja, vil indlæg i dette forum blive indekseret til søgning.',
	'ENABLE_POST_REVIEW'			=> 'Aktiver indlægsgennemsyn',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Hvis sat til ja, vil brugerne få mulighed for at gennemgå deres indlæg igen, hvis der blev skrevet nye indlæg i emnet mens brugeren skrev sit indlæg. Dette bør deaktiveres for snik-snak-fora.',
	'ENABLE_QUICK_REPLY'					=> 'Aktiver kommentarfelt',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Der vises en simpel tekstboks under indlægget, hvor der kan skrives en hurtig kommentar. Denne aktivering har ingen betydning, hvis kommentarfunktionen er deaktiveret overordnet. Feltet vises kun for brugere, der har tilladelse til at skrive i forummet.',
	'ENABLE_RECENT'					=> 'Vis aktive emner',
	'ENABLE_RECENT_EXPLAIN'	=> 'Hvis sat til ja bliver emner skrevet i dette forum vist i listen over aktive emner.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktiver emneikoner',

	'FORUM_ADMIN'						=> 'Administrer fora',
	'FORUM_ADMIN_EXPLAIN'				=> 'I phpBB3 er alt forumbaseret. Du vælger mellem forumtyperne: Kategori (samling af fora), Forum (her kan indsendes indlæg), Link (til URL). Forumtyperne Kategori og Forum kan indeholde et ubegrænset antal underfora. Du har her mulighed for at tilføje, rette, slette, låse, oplåse individuelle fora og sætte bestemte andre indstillinger. Hvis antal indlæg og emner er kommet ud af synkronisering kan du også resynkronisere et forum. <strong>Nyoprettede fora skal tildeles de rette tilladelser for at vises på boardindekset. Når du opretter et nyt forum kan du kopiere tilladelser fra et eksisterende forum, alternativt skal du efterfølgende manuelt indstille disse.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktiver autobeskæring af forum',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Beskærer emner i forummet, sæt indstillinger for frekvens og alder herunder.',
	'FORUM_CREATED'						=> 'Forum korrekt oprettet.',
	'FORUM_DATA_NEGATIVE'				=> 'Beskæringsparametre kan ikke være negative.',
	'FORUM_DESC_TOO_LONG'				=> 'Forumbeskrivelsen er for lang, den skal være mindre end 4000 tegn.',
	'FORUM_DELETE'						=> 'Slet forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Formularen herunder lader dig slette et forum. Hvis man kan skrive indlæg i forummet, kan du vælge hvor du vil gøre af alle emnerne (eller foraene) det indeholdt.',
	'FORUM_DELETED'						=> 'Forum korrekt slettet.',
	'FORUM_DESC'						=> 'Beskrivelse',
	'FORUM_DESC_EXPLAIN'				=> 'HTML-kodetags i dette felt vil blive vist ubehandlet.',
	'FORUM_EDIT_EXPLAIN'				=> 'Formularen herunder lader dig tilpasse dette forum. Bemærk venligst at indstillinger for redaktører og indlægstæller sættes via forumtilladelserne for hver bruger eller brugergruppe.',
	'FORUM_IMAGE'						=> 'Forumbillede',
	'FORUM_IMAGE_EXPLAIN'				=> 'Placering, relativt til phpBB-rodmappen, af et ekstra billede der skal tilknyttes dette forum.',
	'FORUM_IMAGE_NO_EXIST'			=> 'Det angivne forumbillede eksisterer ikke', 
	'FORUM_LINK_EXPLAIN'				=> 'Fuld URL (inklusiv protokol, f.eks. <samp>http://</samp>) til det sted brugeren ledes hen ved klik på dette forum, for eksempel <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Registrer linkhenvisninger',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Tæller antallet af gange der er blevet klikket på et forumlink.',
	'FORUM_NAME'						=> 'Forumnavn',
	'FORUM_NAME_EMPTY'					=> 'Du skal indtaste et navn til dette forum.',
	'FORUM_PARENT'						=> 'Overordnet forum',
	'FORUM_PASSWORD'					=> 'Forumkodeord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bekræft forumkodeord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Skal kun udfyldes hvis der angives et forumkodeord.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definerer et kodeord for dette forum, brug tilladelsesystemet i indstillinger.',
	'FORUM_PASSWORD_UNSET'				=> 'Fjern forumkodeord',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Bekræft her at du ønsker at fjerne forumkodeordet.',
	'FORUM_PASSWORD_OLD'				=> 'Forumkodeordet er dannet med en gammel hash-funktion og bør ændres.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Kodeordene du indtastede matcher ikke.',
	'FORUM_PRUNE_SETTINGS'				=> 'Indstillinger for forumbeskæring',
	'FORUM_PRUNE_SHADOW'				=> 'Autobeskæring af skyggeemner',
	'FORUM_PRUNE_SHADOW_EXPLAIN'		=> 'Fjerner forummets skyggeemner efter frekvens/alder defineret herunder.',
	'FORUM_RESYNCED'					=> 'Forum "%s" korrekt synkroniseret',
	'FORUM_RULES_EXPLAIN'				=> 'Forumregler vises på alle sider i et givent forum.',
	'FORUM_RULES_LINK'					=> 'Link til forumregler',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Du kan her angive URL\'en for den side eller det indlæg der indeholder dine forumregler. Denne indstilling vil tilsidesætte de forumregler du har angivet.',
	'FORUM_RULES_PREVIEW'				=> 'Gennemse forumregler',
	'FORUM_RULES_TOO_LONG'				=> 'Forumreglerne må ikke overskride 4000 tegn.',
	'FORUM_SETTINGS'					=> 'Forumindstillinger',
	'FORUM_STATUS'						=> 'Forumstatus',
	'FORUM_STYLE'						=> 'Forumtypografi',
	'FORUM_TOPICS_PAGE'					=> 'Emner pr. side',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Hvis ikke nul vil denne værdi tilsidesætte standardindstillingen for antal emner pr. side.',
	'FORUM_TYPE'						=> 'Forumtype',
	'FORUM_UPDATED'						=> 'Foruminformation er korrekt opdateret',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Du forsøger at ændre et forum, der indeholder underfora, til et link. Flyt venligst alle underfora fra dette forum til et andet før du fortsætter, undlades dette vil du ikke længere være i stand til at se de tilknyttede underfora.',

	'GENERAL_FORUM_SETTINGS'	=> 'Generelle forumindstillinger',

	'LINK'					=> 'Link',
	'LIST_INDEX'			=> 'Vis underforum i overforummets forklaring',
	'LIST_INDEX_EXPLAIN'	=> 'Viser dette forum på boardindekset og i forklaringen for overforummet, hvis overforummet er indstillet til at vise underfora.',
	'LIST_SUBFORUMS'	=> 'Vis underfora i forklaring',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Viser dette forums underfora på boardindekset og i forumforklaringen, hvis disse er indstillet til at vise underfora i overforummets forklaring.',
	'LOCKED'				=> 'Låst',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Det valgte destinationsforum for indlæggene, der søges flyttet, modtager ikke indlæg. Vælg venligst et forum, der modtager indlæg.',
	'MOVE_POSTS_TO'		=> 'Flyt indlæg til',
	'MOVE_SUBFORUMS_TO'	=> 'Flyt underfora til',

	'NO_DESTINATION_FORUM'			=> 'Du har ikke angivet et forum hvortil indholdet skal flyttes.',
	'NO_FORUM_ACTION'				=> 'Ingen handling defineret for hvad der skal ske med forumindhold.',
	'NO_PARENT'						=> 'Intet overforum',
	'NO_PERMISSIONS'				=> 'Kopier ikke tilladelser',
	'NO_PERMISSION_FORUM_ADD'		=> 'Du har ikke de nødvendige tilladelser til at tilføje fora.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Du har ikke de nødvendige tilladelser til at slette fora.',

	'PARENT_IS_LINK_FORUM'		=> 'Det specificerede overforum er et link. Links kan ikke være overforum for andre fora. Specificer venligst en kategori eller et forum som overforum.',
	'PARENT_NOT_EXIST'			=> 'Overordnet forum findes ikke.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Beskær bekendtgørelser',
	'PRUNE_STICKY'				=> 'Beskær opslag',
	'PRUNE_OLD_POLLS'			=> 'Beskær gamle afstemninger',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Fjerner emner med afstemninger der ikke er stemt i, efter dette antal dage.',

	'REDIRECT_ACL'	=> 'Du kan nu %ssætte tilladelser%s for dette forum.',

	'SYNC_IN_PROGRESS'			=> 'Forum synkroniseres',
	'SYNC_IN_PROGRESS_EXPLAIN'      => 'Resynkroniserer i øjeblikket emner i intervallet ID %1$d - %2$d.',

	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Låst op',
));
