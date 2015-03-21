<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: attachments.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Her kan du ændre og vedligeholde indstillingerne for vedhæftede filer og tilknyttede specialkategorier.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Her kan du ændre, slette, deaktivere og tilføje filtypegrupper, og tilføje en specialkategori til disse. Desuden kan downloadmulighederne ændres, og du kan definere et uploadikon, som vil blive vist foran en vedhæftet fil, som tilhører gruppen.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Her kan du administrere og kontrollere dine tilladte filtyper. For at aktivere dine filtyper, referer venligst til kontrolpanelet for filtypegrupper. Der advares kraftigt imod at tillade filtyper, der kan indeholde scripts (som <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>asp</code>, <code>aspx</code>...).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Her vises vildfarne filer. Det sker oftest, når brugere vedhæfter filer, men ikke får klikket "Udfør" på det endelige indlæg. Du kan slette filerne, eller knytte dem til eksisterende indlæg. For at knytte filerne til indlæg kræves et gyldigt indlægs-ID, du skal selv angive dette ID. Den allerede uploadede fil vil herefter blive tilknyttet dette indlæg.',
	'ADD_EXTENSION'						=> 'Tilføj filtype',
	'ADD_EXTENSION_GROUP'				=> 'Tilføj filtypegruppe',
	'ADMIN_UPLOAD_ERROR'				=> 'Fejl under forsøg på at vedhæfte fil: %s.',
	'ALLOWED_FORUMS'					=> 'Tilladte fora',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Filer i filtypegruppen kan vedhæftes i valgte fora.',
	'ALLOWED_IN_PM_POST'				=> 'Tilladt',
	'ALLOW_ATTACHMENTS'					=> 'Tillad at vedhæfte filer',
	'ALLOW_ALL_FORUMS'					=> 'Tillad i alle fora',
	'ALLOW_IN_PM'						=> 'Tillad i private beskeder',
	'ALLOW_PM_ATTACHMENTS'				=> 'Tillad at vedhæfte filer i private beskeder',
	'ALLOW_SELECTED_FORUMS'				=> 'Kun nedenstående valgte fora',
	'ASSIGNED_EXTENSIONS'				=> 'Valgte filtyper',
	'ASSIGNED_GROUP'					=> 'Valgte gruppe',
	'ATTACH_EXTENSIONS_URL'				=> 'Filtyper',
	'ATTACH_EXT_GROUPS_URL'				=> 'Filtypegrupper',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksimal filstørrelse',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Er størrelsen sat til 0, er det alene din interne PHP-konfiguration, der begrænser filstørrelsen.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksimal filstørrelse i private beskeder',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimal størrelse pr. fil vedhæftet i private beskeder, 0 betyder ubegrænset.',
	'ATTACH_ORPHAN_URL'					=> 'Vildfarne vedhæftede filer',
	'ATTACH_POST_ID'					=> 'Indlæggets ID',
	'ATTACH_POST_TYPE'          => 'Indlæggets type', //? - hmm
	'ATTACH_QUOTA'						=> 'Den totale kvote for vedhæftede filer',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimum drevplads tilgængelig for vedhæftede filer på hele boardet, 0 betyder ubegrænset.',
	'ATTACH_TO_POST'					=> 'Vedhæft fil til indlæg',

	'CAT_FLASH_FILES'			=> 'Flashfiler',
	'CAT_IMAGES'				=> 'Billeder',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media-filer',
	'CAT_RM_FILES'				=> 'RealMedia media-filer',
	'CAT_WM_FILES'				=> 'Windows Media media-filer',
	'CHECK_CONTENT'			=> 'Kontrol af vedhæftede filer',
	'CHECK_CONTENT_EXPLAIN'	=> 'Nogle browsere kan snydes og medfører fejlfortolkning af uploadede filers mimetype. Denne kontrol sikrer afvisning af filer der er årsag hertil.',
	'CREATE_GROUP'				=> 'Opret en ny gruppe',
	'CREATE_THUMBNAIL'			=> 'Opret miniature',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Der oprettes altid en miniature.',

	'DEFINE_ALLOWED_IPS'			=> 'Angiv hvidlistede IP-adresser eller værtsnavne',
	'DEFINE_DISALLOWED_IPS'			=> 'Angiv sortlistede IP-adresser eller værtsnavne',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'For at specificere flere forskellige IP-adresser eller værtsnavne, skrives de hver især på en ny linie. For at specificere et interval af IP-adresser adskilles starten og slutningen med en bindestreg (eks: 202.123.228.100-202.123.228.125). Brug * som ubekendt for ukendte tegn.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Du kan fjerne flere IP-adresser i en arbejdsgang, ved at bruge den rette kombination af mus og tastatur (computer- og browserafhængigt). Ekskluderede IP-adresser er anført med fed skrift.',
	'DISPLAY_INLINED'				=> 'Vis billeder inline',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Hvis indstillingen er sat til "Nej", vil vedhæftede billedfiler blive vist som et link.',
	'DISPLAY_ORDER'					=> 'Visningsorden for vedhæftede filer',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Vis vedhæftede filer sorteret efter dato og tid.',

	'EDIT_EXTENSION_GROUP'			=> 'Ændre filtypegruppe',
	'EXCLUDE_ENTERED_IP'			=> 'Vælg "Ja" for at ekskludere angivne IP-adresse eller vært fra listen.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Ekskluder fra hvidliste',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Ekskluder fra sortliste',
	'EXTENSIONS_UPDATED'			=> 'Filtyper er nu opdaterede.',
	'EXTENSION_EXIST'				=> 'Filtype %s eksisterer allerede.',
	'EXTENSION_GROUP'				=> 'Filtypegruppe',
	'EXTENSION_GROUPS'				=> 'Filtypegrupper',
	'EXTENSION_GROUP_DELETED'		=> 'Filtypegruppe er nu slettet.',
	'EXTENSION_GROUP_EXIST'			=> 'Filtypegruppen %s eksisterer allerede.',

	'EXT_GROUP_ARCHIVES'			=> 'Komprimerede filer',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenter',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare filer',
	'EXT_GROUP_FLASH_FILES'			=> 'Flashfiler',
	'EXT_GROUP_IMAGES'				=> 'Billeder',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Ren tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FILES_GONE'			=> 'Nogle af de filer du valgte til sletning findes ikke. De kan være slettet tidligere. De vedhæftede filer som eksisterede blev slettet.',
	'FILES_STATS_WRONG'		=> 'Dine filstatistikker er sandsynligvis ikke korrekte og bør synkroniseres. Aktuelle værdier: Antal vedhæftede filer = %1$d, Samlet størrelse af vedhæftede filer = %2$s.<br />Klik %3$sher%4$s for at synkronisere.',

	'GO_TO_EXTENSIONS'		=> 'Gå til indstillinger for filtyper',
	'GROUP_NAME'			=> 'Gruppenavn',

	'IMAGE_LINK_SIZE'			=> 'Grænse for dannelse af link',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Overskrider vedhæftede billeder disse dimensioner (pixelbredde x pixelhøjde), vises link til billeder i stedet. Sættes begge værdier til 0 deaktiveres kontrollen.',
	'IMAGICK_PATH'				=> 'Sti til imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Den fulde sti til konverteringsprogrammet imagemagick, f.eks. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maksimalt antal vedhæftede filer pr. indlæg',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimalt antal vedhæftede filer pr. privat besked',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksimal filstørrelse',
	'MAX_IMAGE_SIZE'				=> 'Maksimale billeddimensioner',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maksimale dimensioner for vedhæftede billeder. Kontrol af billededimensioner deaktiveres ved at angive begge værdier til 0.',
	'MAX_THUMB_WIDTH'				=> 'Maksimal bredde på miniature i pixels',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Miniaturer vil ikke blive oprettet bredere end værdien defineret her.',
	'MIN_THUMB_FILESIZE'			=> 'Grænse for oprettelse af miniature',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Opret ikke miniature for billeder der er mindre end',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Fysisk',

	'NOT_ALLOWED_IN_PM'			=> 'Kun tilladt i indlæg',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ikke tilladt',
	'NOT_ASSIGNED'				=> 'Ikke tildelt',
	'NO_ATTACHMENTS'			=> 'Ingen vedhæftede filer fundet i denne periode.',
	'NO_EXT_GROUP'				=> 'Ingen',
	'NO_EXT_GROUP_NAME'			=> 'Intet gruppenavn angivet',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Ingen filtypegruppe angivet.',
	'NO_FILE_CAT'				=> 'Ingen',
	'NO_IMAGE'					=> 'Intet billede',
	'NO_THUMBNAIL_SUPPORT'		=> 'Miniaturefunktionen er blevet deaktiveret. Denne funktionalitet forudsætter at enten GD-udvidelse er tilgængelig eller at imagemagick er installeret på serveren. Ingen af disse blev fundet.',
	'NO_UPLOAD_DIR'				=> 'Den angivne modtagemappe eksisterer ikke.',
	'NO_WRITE_UPLOAD'			=> 'Der kan ikke skrives til den specificerede modtagemappe. Korriger venligst tilladelser for mappen, så serveren kan skrive til den.',

	'ONLY_ALLOWED_IN_PM'    => 'Kun tilladt i private beskeder',
	'ORDER_ALLOW_DENY'		=> 'Tillad',
	'ORDER_DENY_ALLOW'		=> 'Afvis',

	'REMOVE_ALLOWED_IPS'			=> 'Fjern <em>hvidlistede</em> IP-adresser eller værtsnavne',
	'REMOVE_DISALLOWED_IPS'			=> 'Fjern <em>sortlistede</em> IP-adresser eller værtsnavne',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Er du sikker på at du vil synkronisere filstatistikker?',

	'SEARCH_IMAGICK'				=> 'Søg efter Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Tillad eller afvis',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Sikker download baseres på en <strong>hvidliste</strong> (tillad), hvor ingen andre end de angivne kan downloade, eller på en <strong>sortliste</strong> (afvis), hvor kun de angivne ikke kan downloade.',
	'SECURE_DOWNLOADS'				=> 'Aktiver sikker download',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Med denne mulighed aktiveret kan der kun downloades filer fra de definerede IP-adresser eller værtsnavne.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Sikker download er ikke aktiveret. Nedenstående indstillinger bliver først mulige, når du har aktiveret sikker download.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-adresselisten er nu opdateret.',
	'SECURE_EMPTY_REFERRER'			=> 'Tillad tomme henvisninger',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Sikker download er baseret på henvisninger (hvor kommer brugeren fra). Vil du tillade download for brugere uden henvisninger?',
	'SETTINGS_CAT_IMAGES'			=> 'Indstillinger for billedkategori',
	'SPECIAL_CATEGORY'				=> 'Specialkategori',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Specialkategorier bliver vist forskelligt i indlæggene.',
	'SUCCESSFULLY_UPLOADED'			=> 'Filen er modtaget.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Filtypegruppe er tilføjet.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Filtypegruppe er opdateret.',

	'UPLOADING_FILES'				=> 'Uploader filer',
	'UPLOADING_FILE_TO'				=> 'Uploader fil "%1$s" til indlæg nummer %2$d...',
	'UPLOAD_DENIED_FORUM'			=> 'Du har ikke tilladelse til at sende filer til forummet "%s".',
	'UPLOAD_DIR'					=> 'Modtagemappe',
	'UPLOAD_DIR_EXPLAIN'			=> 'Stien til modtagemappen, hvor vedhæftede filer gemmes. Hvis du ændrer modtagemappe og der allerede er uploadet filer i den oprindelige mappe, skal du manuelt flytte filerne fra denne til den nye mappe.',
	'UPLOAD_ICON'					=> 'Uploadikon',
	'UPLOAD_NOT_DIR'				=> 'Den specificerede modtagemappe lader ikke til at eksistere.',
));
