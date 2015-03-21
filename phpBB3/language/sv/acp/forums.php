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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Inläggsålder för auto-rensning',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Antal dagar efter det senaste inlägget som en tråd ska tas bort efter.',
	'AUTO_PRUNE_FREQ'			=> 'Auto-rensningsfrekvens',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tid i dagar mellan rensningar.',
	'AUTO_PRUNE_VIEWED'			=> 'Inläggsvisningsålder för auto-rensning',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Antal dagar sen en tråd senast visades som tråden ska tas bort efter.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Auto-prune shadow topics frequency',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Auto-prune shadow topics age',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Number of days after which shadow topic is removed.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Time in days between pruning events.',

	'CONTINUE'						=> 'Fortsätt',
	'COPY_PERMISSIONS'				=> 'Kopiera behörigheter',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'För att göra det enklare att hantera behörigheterna, så kan du kopiera dem från en redan existerande kategori.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'När denna kategori väl skapat så kommer den att ha samma behörigheter som den kategori som du väljer här har. Om ingen kategori väljs här så  kommer den nya kategorin inte att synas förrän behörigheter ställts in för den.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Om du väljer att kopiera behörigheter så kommer kategorin att få samma behörigheter som den du väljer här har. Detta kommer att skriva över alla eventuella behörigheter du redan ställt in för denna kategori. Om ingen kategori väljs så kommer de nuvarande behörigheterna att behållas.',
	'COPY_TO_ACL'					=> 'Du kan också %sställa in nya behörigheter%s för denna kategori.',
	'CREATE_FORUM'					=> 'Skapa ny kategori',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Ta bort innehåll eller flytta till kategori',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Ta bort underkategorier eller flytta till kategori',
	'DEFAULT_STYLE'						=> 'Standardstil',
	'DELETE_ALL_POSTS'					=> 'Ta bort inlägg',
	'DELETE_SUBFORUMS'					=> 'Ta bort underkategorier och inlägg',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktivera aktiva trådar',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Om satt till ja kommer aktiva trådar i valda underkategorier visas under denna huvudkategori.',

	'EDIT_FORUM'					=> 'Redigera kategori',
	'ENABLE_INDEXING'				=> 'Aktivera sökindexering',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Om satt till ja så kommer inlägg i denna kategori att indexeras för sökning.',
	'ENABLE_POST_REVIEW'			=> 'Aktivera inläggsgranskning',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Om satt till ja så kommer användare att låtas granska sitt inlägg igen om nya inlägg gjorts i tråden under tiden användaren skrev sitt. Detta bör inaktiveras för chattkategorier.',
	'ENABLE_QUICK_REPLY'			=> 'Aktivera snabbsvar',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Aktiverar snabbsvar för denna kategori. Om den globala inställningen för snabbsvar är satt till Nej, så åsidosätts denna inställning. Snabbsvarsmöjligheten visas endast för de användare som har behörighet att posta inlägg i denna kategori.',
	'ENABLE_RECENT'					=> 'Visa aktiva trådar',
	'ENABLE_RECENT_EXPLAIN'			=> 'Om satt till ja så kommer trådar gjorda i denna kategori att visas i listan över aktiva trådar.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktivera trådikoner',

	'FORUM_ADMIN'						=> 'Kategoriadministration',
	'FORUM_ADMIN_EXPLAIN'				=> 'I phpBB3 är allt kategoribaserat. Varje kategori kan ha ett obegränsat antal underkategorier och du kan bestämma om de ska kunna postas i eller inte (alltså om de ska bete sig som en huvudkategori). Här kan du lägga till, redigera, ta bort, låsa och låsa upp individuella kategorier och ställa in andra inställningar. Om det behövs kan du också synkronisera en kategori här. <strong>Du måste kopiera eller ställa in lämpliga behörigheter för nyskapade kategorier för att de ska visas.</strong>',

	'FORUM_AUTO_PRUNE'					=> 'Aktivera auto-rensning',
	

	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Rensar kategorin på trådar, ställ in frekvens/åldersparametrar nedan.',
	'FORUM_CREATED'						=> 'Kategorin skapades.',
	'FORUM_DATA_NEGATIVE'				=> 'Rensningsparametrar kan inte vara negativa.',
	'FORUM_DESC_TOO_LONG'				=> 'Kategoribeskrivningen är för lång, den måste vara kortare än 4000 tecken.',
	'FORUM_DELETE'						=> 'Ta bort kategori',
	'FORUM_DELETE_EXPLAIN'				=> 'Formuläret nedan låter dig ta bort en kategori. Om kategorin går att posta i kan du bestämma vart du vill att alla trådar (eller kategorier) som det innehåller ska flyttas.',
	'FORUM_DELETED'						=> 'Kategorin togs bort.',
	'FORUM_DESC'						=> 'Beskrivning',
	'FORUM_DESC_EXPLAIN'				=> 'All HTML som skrivs in här kommer att visas som den är.',
	'FORUM_EDIT_EXPLAIN'				=> 'Formuläret nedan låter dig skräddarsy denna kategori. Kom ihåg att moderation och inläggsräkning ställs in via kategoribehörigheter för varje användare eller användargrupp.',
	'FORUM_IMAGE'						=> 'Kategoribild',
	'FORUM_IMAGE_EXPLAIN'				=> 'Sökväg, relativ till phpBBs rotkatalog, till en extra bild som ska visas tillsammans med denna kategori.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Den specificierade kategoribilden finns inte.',
	'FORUM_LINK_EXPLAIN'				=> 'Fullständig URL (inklusive protokollet, t.ex.: <samp>http://</samp>) till platsen som denna kategori ska ta användaren vid klick, t.ex.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Spåra vidarebefordringar',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Registrerar antal gånger en kategorilänk klickats på.',
	'FORUM_NAME'						=> 'Kategorinamn',
	'FORUM_NAME_EMPTY'					=> 'Du måste ange ett namn för denna kategori.',
	'FORUM_PARENT'						=> 'Ovanliggande kategori',
	'FORUM_PASSWORD'					=> 'Kategorilösenord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bekräfta kategorilösenord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Behöver endast anges om ett kategorilösenord angivits.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Ställer in ett lösenord för denna kategori, använd hellre behörighetssystemet.',
	'FORUM_PASSWORD_UNSET'				=> 'Ta bort kategorilösenord',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Kryssa i här om du vill ta bort kategorilösenordet.',
	'FORUM_PASSWORD_OLD'				=> 'The forum password is using an old hashing method and should be changed.',
	'FORUM_PASSWORD_OLD'				=> 'Kategorilösenordet använder en gammal hashningsmetod.hmm och bör ändras.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Lösenorden du angav stämde inte överens.',
	'FORUM_PRUNE_SETTINGS'				=> 'Kategorirensningsinställningar',
	'FORUM_PRUNE_SHADOW'				=> 'Enable auto-pruning of shadow topics',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Prunes the forum of shadow topics, set the frequency/age parameters below.',
	'FORUM_RESYNCED'					=> 'Kategorin “%s”  synkroniserades',
	'FORUM_RULES_EXPLAIN'				=> 'Kategoriregler visas på alla sidor inom given kategori.',
	'FORUM_RULES_LINK'					=> 'Länk till kategoriregler',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Du kan ange URL:en för sidan/inlägget som innehåller dina kategoriregler här. Denna inställning kommer att åsidosätta kategoriregelstexten du angivit.',
	'FORUM_RULES_PREVIEW'				=> 'Förhandsgranskning av kategoriregler',
	'FORUM_RULES_TOO_LONG'				=> 'Kategorireglerna måste vara kortare än 4000 tecken.',
	'FORUM_SETTINGS'					=> 'Kategoriinställningar',
	'FORUM_STATUS'						=> 'Kategoristatus',
	'FORUM_STYLE'						=> 'Kategoristil',
	'FORUM_TOPICS_PAGE'					=> 'Trådar per sida',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Om detta inte är satt till noll så kommer detta värde att åsidosätta den vanliga trådar per sida-inställningen.',
	'FORUM_TYPE'						=> 'Kategorityp',
	'FORUM_UPDATED'						=> 'Kategoriinformationen uppdaterades.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Du försöker ändra en kategori som det går att posta i till en länk. Flytta alla underkategorier från denna kategori innan du fortsätter, eftersom att när du ändrat till en länk så kommer du inte kunna se underkategorierna som nu är länkade till denna kategori.',

	'GENERAL_FORUM_SETTINGS'	=> 'Allmänna kategoriinställningar',

	'LINK'						=> 'Länk',
	'LIST_INDEX'				=> 'Lista underkategori i ovanliggande kategoris legend',
	'LIST_INDEX_EXPLAIN'		=> 'Visar denna kategori på indexidan och på andra ställen som en länk inom legenden för dess ovanliggande kategori om dess ovanliggande kategoris "Lista underkategori i legenden"-inställning är aktiverad.',
	'LIST_SUBFORUMS'			=> 'Lista underkategorier i legenden',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Visar denna kategoris underkategorier på indexsidan och på andra ställen som en länk i förklaringen om att inställningen "Lista underkategori i ovanliggande kategoris förklaring" är aktiverad.',
	'LIST_INDEX_EXPLAIN'	=> 'Visar denna kategori på indexsidan och på andra ställen som en länk i förklaringen för dess ovanliggande kategori.',
	'LOCKED'				=> 'Låst',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Kategorin som du valde att flytta inlägg till kan inte postas i. Välj en kategori som kan postas i.',
	'MOVE_POSTS_TO'					=> 'Flytta inlägg till',
	'MOVE_SUBFORUMS_TO'				=> 'Flytta underkategorier till',

	'NO_DESTINATION_FORUM'			=> 'Du angav ingen kategori att flytta innehållet till.',
	'NO_FORUM_ACTION'				=> 'Ingen handling angiven för vad som ska hända med foruminnehållet.',
	'NO_PARENT'						=> 'Ingen ovanliggande kategori',
	'NO_PERMISSIONS'				=> 'Kopiera inte behörigheter',
	'NO_PERMISSION_FORUM_ADD'		=> 'Du har inte behörighet att lägga till kategorier.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Du har inte behörighet att ta bort kategorier.',

	'PARENT_IS_LINK_FORUM'		=> 'Den ovanliggande kategorin som du valde är en kategorilänk. Länkkategorier kan inte innehålla andra kategorier, välj istället en huvudkategori eller en kategori som ovanliggande kategori.',
	'PARENT_NOT_EXIST'			=> 'Ovanliggande kategori finns inte.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Rensa anslag',
	'PRUNE_STICKY'				=> 'Rensa notiser',
	'PRUNE_OLD_POLLS'			=> 'Rensa gamla omröstningar',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Tar bort trådar med omröstningar som inte röstats i på det antal dagar som angavs ovan.',

	'REDIRECT_ACL'	=> 'Du kan nu %sställa in behörigheter%s för denna kategori.',

	'SYNC_IN_PROGRESS'			=> 'Synkroniserar kategori',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Synkroniserar trådkedja %1$d/%2$d.',

	'TYPE_CAT'			=> 'Huvudkategori',
	'TYPE_FORUM'		=> 'Kategori',
	'TYPE_LINK'			=> 'Länk',

	'UNLOCKED'			=> 'Olåst',
));
