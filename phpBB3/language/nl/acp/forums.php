<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'AUTO_PRUNE_DAYS'			=> 'Automatiche opschoning berichtenleeftijd',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Aantal dagen sinds laatste bericht waarna het onderwerp wordt verwijderd.',
	'AUTO_PRUNE_FREQ'			=> 'Automatische opschoningsfrequentie',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tijd in dagen tussen opschoningen.',
	'AUTO_PRUNE_VIEWED'			=> 'Automatische opschoning berichten bekekenleeftijd',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Aantal dagen sinds het onderwerp voor het laatst was bekeken waarna het onderwerp wordt verwijderd.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Automatische opschoningsfrequentie schaduwonderwerpen',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Automatische opschoning schaduwonderwerp-leeftijd',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Aantal dagen waarna het schaduwonderwerp wordt verwijderd.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Tijd in dagen tussen opschoningen.',

	'CONTINUE'						=> 'Doorgaan',
	'COPY_PERMISSIONS'				=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Om de permissie-instellingen voor je nieuwe forum te vergemakkelijken, kan je de permissies van een bestaande forum kopiëren.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Eenmaal aangemaakt zal het forum dezelfde permissies hebben als degene die je hier selecteert. Als er geen forum wordt geselecteerd, dan zal het nieuw aangemaakte forum niet zichtbaar zijn totdat de permissies ingesteld zijn.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Als je “Kopieer permissies” selecteert, dan zal het forum dezelfde permissies hebben als degene die je hier selecteert. Dit zal de bestaande permissies, die je de vorige keer hebt ingesteld voor dit forum, overschrijven met de permissies van het forum die je hier selecteert. Als er geen forum is geselecteerd, dan zullen de bestaande permissies intact blijven.',
	'COPY_TO_ACL'					=> 'Je kan ook %snieuwe permissies instellen%s voor dit forum.',
	'CREATE_FORUM'					=> 'Nieuw forum aanmaken',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Inhoud verwijderen of verplaatsen naar forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Subforums verwijderen of verplaatsen naar forum',
	'DEFAULT_STYLE'						=> 'Standaard stijl',
	'DELETE_ALL_POSTS'					=> 'Berichten verwijderen',
	'DELETE_SUBFORUMS'					=> 'Subforums en berichten verwijderen',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Actieve onderwerpen inschakelen',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Indien ingesteld op ja, dan zullen de actieve onderwerpen in de geselecteerde subforums weergegeven worden onder deze categorie.',

	'EDIT_FORUM'					=> 'Forum wijzigen',
	'ENABLE_INDEXING'				=> 'Zoekindexering inschakelen',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Indien ingesteld op ja, dan zullen de berichten die gemaakt worden in dit forum geïndexeerd worden voor het zoeksysteem.',
	'ENABLE_POST_REVIEW'			=> 'Bericht nakijken inschakelen',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Indien ingesteld op ja, dan kunnen gebruikers hun bericht nakijken als nieuwe berichten zijn geplaatst in het onderwerp terwijl gebruikers hun bericht schreven. Dit moet uitgeschakeld worden voor chat-forums.',
	'ENABLE_QUICK_REPLY'			=> 'Snelle reactie inschakelen',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Schakelt de snelle reactie in voor dit forum. Deze instelling wordt gebruikt als snelle reactie uitgeschakeld is op het gehele forum. De snelle reactie zal alleen weergegeven worden aan gebruikers die de permissies hebben om in dit forum berichten te plaatsen.',
	'ENABLE_RECENT'					=> 'Actieve onderwerpen weergeven',
	'ENABLE_RECENT_EXPLAIN'			=> 'Indien ingesteld op ja, dan zullen de onderwerpen die gemaakt worden in dit forum weergegeven worden in de actieve onderwerpenlijst.',
	'ENABLE_TOPIC_ICONS'			=> 'Onderwerpiconen inschakelen',

	'FORUM_ADMIN'						=> 'Forumbeheer',
	'FORUM_ADMIN_EXPLAIN'				=> 'In phpBB3 is alles forum-gebaseerd. Een categorie is gewoon een speciaal type forum. Elk forum kan een onbeperkt aantal subforums hebben en je kan beslissen of er berichten in geplaatst mogen worden of niet (bijvoorbeeld wanneer het zich voor doet als een oude categorie). Hier kan je individuele forums toevoegen, wijzigen, verwijderen, sluiten, openen en ook nog bepaalde extra instellingen instellen. Als je berichten en onderwerpen niet meer kloppen qua aantallen, kan je ook nog een forum synchroniseren. <strong>Je moet permissies kopiëren of instellen voor nieuw aangemaakte forums zodat ze zichtbaar zijn.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Automatisch opschonen inschakelen',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Schoont de forums of onderwerpen op, stel de frequentie/leeftijdsparameters hieronder in.',
	'FORUM_CREATED'						=> 'Forum succesvol aangemaakt.',
	'FORUM_DATA_NEGATIVE'				=> 'Opschoningsparameters kunnen niet negatief zijn.',
	'FORUM_DESC_TOO_LONG'				=> 'De forumbeschrijving is te lang, het mag maximaal 4000 karakters bevatten.',
	'FORUM_DELETE'						=> 'Forum verwijderen',
	'FORUM_DELETE_EXPLAIN'				=> 'Het formulier hieronder staat je toe om een forum te verwijderen. Als het forum schrijfbaar is, je kan dan beslissen waar je alle berichten (of forums) die het bevat heen wilt brengen.',
	'FORUM_DELETED'						=> 'Forum succesvol verwijderd.',
	'FORUM_DESC'						=> 'Beschrijving',
	'FORUM_DESC_EXPLAIN'				=> 'Enige HTML-opmaak die hier wordt ingevuld, zal worden weergegeven zoals het is.',
	'FORUM_EDIT_EXPLAIN'				=> 'Het formulier hieronder staat je toe om dit forum aan te passen. Let op dat moderatie en berichtenteller-controles ingesteld worden via forumpermissies voor iedere gebruiker of gebruikersgroep.',
	'FORUM_IMAGE'						=> 'Forumafbeelding',
	'FORUM_IMAGE_EXPLAIN'				=> 'Locatie, relatief aan de phpBB-hoofdmap, van een extra afbeelding om te associëren met dit forum.',
	'FORUM_IMAGE_NO_EXIST'				=> 'De opgegeven forumafbeelding bestaat niet',
	'FORUM_LINK_EXPLAIN'				=> 'Volledige URL (inclusief het protocol, bijvoorbeeld: <samp>http://</samp>) naar de doellocatie, waar de gebruiker heen gaat na het klikken op dit forum, bijv.: <samp>http://www.phpbbservice.nl/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Traceer linkdoorsturingen',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Slaat op hoeveel keer er op een forumlink is geklikt.',
	'FORUM_NAME'						=> 'Forumnaam',
	'FORUM_NAME_EMPTY'					=> 'Je moet een naam invoeren voor dit forum.',
	'FORUM_PARENT'						=> 'Hoofdforum',
	'FORUM_PASSWORD'					=> 'Forumwachtwoord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bevestig forumwachtwoord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Hoeft alleen ingevuld te worden als een forumwachtwoord is ingevoerd.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definieert een wachtwoord voor dit forum, gebruik bij voorkeur het permissiesysteem.',
	'FORUM_PASSWORD_UNSET'				=> 'Verwijder forumwachtwoord',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Zet hier het vinkje neer als je het forumwachtwoord wilt verwijderen.',
	'FORUM_PASSWORD_OLD'				=> 'Het forumwachtwoord gebruikt een oude hashing methode en moet veranderd worden.',
	'FORUM_PASSWORD_MISMATCH'			=> 'De wachtwoorden die je hebt ingevuld komen niet overeen.',
	'FORUM_PRUNE_SETTINGS'				=> 'Forum opschoningsinstellingen',
	'FORUM_PRUNE_SHADOW'				=> 'Automatisch opschonen van schaduwonderwerpen inschakelen',
	'FORUM_PRUNE_SHADOW_EXPLAIN'		=> 'Verwijderd de schaduwonderwerpen na een bepaalde tijd die hieronder is opgegeven.',
	'FORUM_RESYNCED'					=> 'Forum “%s” succesvol gesynchroniseerd',
	'FORUM_RULES_EXPLAIN'				=> 'Forumregels worden weergegeven op iedere pagina in het opgegeven forum.',
	'FORUM_RULES_LINK'					=> 'Link naar forumregels',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Je kan hier de URL van de pagina/bericht die je forumregels bevat hier invullen. Deze instelling overschrijft de forumregeltekst die je hebt gespecificeerd.',
	'FORUM_RULES_PREVIEW'				=> 'Forumregels voorbeeld',
	'FORUM_RULES_TOO_LONG'				=> 'De forumregels mogen niet meer dan 4000 karakters bevatten.',
	'FORUM_SETTINGS'					=> 'Foruminstellingen',
	'FORUM_STATUS'						=> 'Forumstatus',
	'FORUM_STYLE'						=> 'Forumstijl',
	'FORUM_TOPICS_PAGE'					=> 'Onderwerpen per pagina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Indien de waarde groter is dan nul, dan zal deze waarde de “standaard onderwerpen per pagina”-instelling overschrijven.',
	'FORUM_TYPE'						=> 'Forumtype',
	'FORUM_UPDATED'						=> 'Foruminformatie succesvol bijgewerkt.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Je wilt een schrijfbare forum met subforums veranderen naar een link. Verplaats eerst alle subforums uit dit forum voordat je door gaat, want na het veranderen naar een link kan je niet langer meer de subforums zien die momenteel verbonden zijn met dit forum.',

	'GENERAL_FORUM_SETTINGS'	=> 'Algemene foruminstellingen',

	'LINK'						=> 'Link',
	'LIST_INDEX'				=> 'Toon subforum in hoofdforum legenda',
	'LIST_INDEX_EXPLAIN'		=> 'Geeft dit forum weer op de indexpagina en op andere plekken als een link in de legenda, als de optie “Toon subforums in legenda” ingeschakeld is, van hoofdforums.',
	'LIST_SUBFORUMS'			=> 'Toon subforums in legenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Geeft de subforums van dit forum weer op de indexpagina en op andere plekken als een link in de legenda als hun optie “Toon subforums in hoofdforum legenda” is ingeschakeld.',
	'LOCKED'					=> 'Gesloten',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Het forum dat je hebt geselecteerd om de berichten naar toe te verplaatsen is niet schrijfbaar. Selecteer een schrijfbaar forum.',
	'MOVE_POSTS_TO'					=> 'Verplaats berichten naar',
	'MOVE_SUBFORUMS_TO'				=> 'Verplaats subforums naar',

	'NO_DESTINATION_FORUM'			=> 'Je hebt geen forum opgegeven om de inhoud naar toe te verplaatsen.',
	'NO_FORUM_ACTION'				=> 'Geen actie opgegeven voor wat er gebeurd met de foruminhoud.',
	'NO_PARENT'						=> 'Geen hoofd',
	'NO_PERMISSIONS'				=> 'Permissies niet kopiëren',
	'NO_PERMISSION_FORUM_ADD'		=> 'Je hebt niet de benodigde permissies om forums toe te voegen.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Je hebt niet de benodigde permissies om forum te verwijderen.',

	'PARENT_IS_LINK_FORUM'		=> 'Het hoofdforum die je hebt gespecificeerd is een forumlink. Link-forums kunnen geen andere forums bevatten, selecteer een categorie of een forum als hoofdforum.',
	'PARENT_NOT_EXIST'			=> 'Hoofdforum bestaat niet.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Aankondigingen opschonen',
	'PRUNE_STICKY'				=> 'Stickies opschonen',
	'PRUNE_OLD_POLLS'			=> 'Oude peilingen opschonen',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Verwijderd onderwerpen met peilingen waar niet in gestemd is voor berichtenleeftijd (in dagen).',

	'REDIRECT_ACL'	=> 'Nu kan je de %spermissies instellen%s voor dit forum.',

	'SYNC_IN_PROGRESS'			=> 'Forum synchroniseren',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Momenteel onderwerp %1$d van %2$d aan het synchroniseren.',

	'TYPE_CAT'			=> 'Categorie',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Link',

	'UNLOCKED'			=> 'Geopend',
));
