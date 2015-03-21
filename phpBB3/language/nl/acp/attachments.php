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

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Hier kan je de hoofdinstellingen voor bijlagen en bijbehorende speciale categorieën instellen.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Hier kan je extensiegroepen toevoegen, verwijderen, wijzigen of uitschakelen. Andere opties zijn onder andere het toewijzen van een speciale categorie voor ze, het veranderen van het downloadmechanisme en het definiëren van een upload-icoon welke zal worden weergegeven voor de bijlage, afhankelijk van de groep waartoe de bijlage behoort.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Hier kan je toegestane extensies beheren. Om de extensies te activeren, ga dan naar het extensiegroep-managementpaneel. We bevelen sterk aan de volgende scriptextensies (zoals <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, etc…) niet toe te staan.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Hier kan je berichtloze bestanden bekijken. Deze ontstaan meestal wanneer gebruikers bestanden bijvoegen maar het bericht niet versturen. Je kan de bestanden verwijderen of ze bijvoegen aan bestaande berichten. Bijvoegen aan een bericht vereist een geldig berichten-ID, je moet dit ID zelf bepalen. Dit zal de al geüploade bijlagen toewijzen aan het bericht dat je hebt ingevuld.',
	'ADD_EXTENSION'						=> 'Toevoegen extensie',
	'ADD_EXTENSION_GROUP'				=> 'Toevoegen extensiegroep',
	'ADMIN_UPLOAD_ERROR'				=> 'Fouten tijdens bijvoegen bestand: “%s”.',
	'ALLOWED_FORUMS'					=> 'Toegestane forums',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Kan de toegewezen extensie plaatsen in de geselecteerde (of alle indien geselecteerd) forums.',
	'ALLOWED_IN_PM_POST'				=> 'Toegestaan',
	'ALLOW_ATTACHMENTS'					=> 'Toestaan bijlagen',
	'ALLOW_ALL_FORUMS'					=> 'Toestaan alle forums',
	'ALLOW_IN_PM'						=> 'Toegestaan in privé berichten',
	'ALLOW_PM_ATTACHMENTS'				=> 'Toestaan bijlagen in privé berichten',
	'ALLOW_SELECTED_FORUMS'				=> 'Alleen forums hieronder geselecteerd',
	'ASSIGNED_EXTENSIONS'				=> 'Toegewezen extensies',
	'ASSIGNED_GROUP'					=> 'Toegewezen extensiegroep',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensies',
	'ATTACH_EXT_GROUPS_URL'				=> 'Extensiegroepen',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maximum bestandsgrootte',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maximum grootte van elk bestand. Als de waarde 0 is, dan wordt de geüploade bestandsgrootte alleen gelimiteerd door je PHP instellingen.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maximum bestandsgrootte privébericht',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maximum grootte van elk bestand, met 0 als ongelimiteerd, bijgevoegd aan een privébericht.',
	'ATTACH_ORPHAN_URL'					=> 'Berichtloze bijlagen',
	'ATTACH_POST_ID'					=> 'Bericht-ID',
	'ATTACH_POST_TYPE'					=> 'Berichttype',
	'ATTACH_QUOTA'						=> 'Totaal bijlage quota',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maximum schijfruimte beschikbaar voor bijlagen van het hele forum, met 0 als ongelimiteerd.',
	'ATTACH_TO_POST'					=> 'Bestand bijvoegen aan bericht',

	'CAT_FLASH_FILES'			=> 'Flash-bestanden',
	'CAT_IMAGES'				=> 'Afbeeldingen',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime media bestanden',
	'CAT_RM_FILES'				=> 'RealMedia media bestanden',
	'CAT_WM_FILES'				=> 'Windows Media media bestanden',
	'CHECK_CONTENT'				=> 'Controleer bijlage bestanden',
	'CHECK_CONTENT_EXPLAIN'		=> 'Sommige browsers kunnen een incorrecte mimetype voor geüploade bestanden aannemen. Deze optie verzekerd je er van dat zulke bestanden die dit veroorzaken worden afgewezen.',
	'CREATE_GROUP'				=> 'Nieuwe groep aanmaken',
	'CREATE_THUMBNAIL'			=> 'Miniatuur aanmaken',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Maakt een miniatuur aan in alle mogelijke situaties.',

	'DEFINE_ALLOWED_IPS'			=> 'Definieer toegestane IPs/hostnamen',
	'DEFINE_DISALLOWED_IPS'			=> 'Definieer verboden IPs/hostnamen',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Om meerdere IPs of hostnamen op te geven, voer dan ieder op een nieuwe regel in. Om een bereik van IP-adressen op te geven, scheid de start en het einde met een streepje (-), om een joker op te geven gebruik dan “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Je kan meerdere IP-adressen in één keer verwijderen (of weer insluiten) door gebruik te maken van de juiste combinatie van muis en toetsenbord van je computer en browser. Uitgesloten IPs hebben een blauwe achtergrond.',
	'DISPLAY_INLINED'				=> 'Afbeeldingen inline weergeven',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Indien ingesteld op “Geen afbeelding” dan zal de bijlage weergegeven worden als een koppeling.',
	'DISPLAY_ORDER'					=> 'Bijlage weergave volgorde',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Bijlagen weergeven gesorteerd op tijd.',

	'EDIT_EXTENSION_GROUP'			=> 'Extensiegroep wijzigen',
	'EXCLUDE_ENTERED_IP'			=> 'Schakel dit in om de ingevoerde IP/hostnaam uit te sluiten.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Sluit IP uit van toegestane IPs/hostnamen',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Sluit IP uit van verboden IPs/hostnamen',
	'EXTENSIONS_UPDATED'			=> 'Extensies succesvol bijgewerkt.',
	'EXTENSION_EXIST'				=> 'De extensie %s bestaat al.',
	'EXTENSION_GROUP'				=> 'Extensiegroep',
	'EXTENSION_GROUPS'				=> 'Extensiegroepen',
	'EXTENSION_GROUP_DELETED'		=> 'Extensiegroep succesvol verwijderd.',
	'EXTENSION_GROUP_EXIST'			=> 'De extensiegroep %s bestaat al.',

	'EXT_GROUP_ARCHIVES'			=> 'Archieven',
	'EXT_GROUP_DOCUMENTS'			=> 'Documenten',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Downloadbare bestanden',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash-bestanden',
	'EXT_GROUP_IMAGES'				=> 'Afbeeldingen',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Platte tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows media',
	
	'FILES_GONE'			=> 'Enkele van de bijlagen, die je hebt geselecteerd voor verwijdering, bestaan niet. Ze kunnen al verwijderd zijn. Bijlagen die wel bestonden zijn verwijderd.',
	'FILES_STATS_WRONG'		=> 'Je bestandsstatistieken zijn waarschijnlijk niet meer accuraat en zullen gesynchroniseerd moeten worden. Echte waarden: aantal bijlagen = %1$d, totale grootte van de bijlagen = %2$s.<br />Klik %3$shier%4$s om de statistieken te synchroniseren.',

	'GO_TO_EXTENSIONS'		=> 'Ga naar extensie management scherm',
	'GROUP_NAME'			=> 'Groepsnaam',

	'IMAGE_LINK_SIZE'			=> 'Afbeelding koppeling dimensie',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Geef afbeeldingsbijlage weer als een inline tekst koppeling als de afbeelding groter is dan dit. Om dit gedrag uit te schakelen, stel dan de waarde in op 0px bij 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick pad',
	'IMAGICK_PATH_EXPLAIN'		=> 'Volledig pad naar de imagemagick convertor applicatie, bijv. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maximum aantal bijlagen per bericht',
	'MAX_ATTACHMENTS_PM'			=> 'Maximum aantal bijlagen per privébericht',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maximum bestandsgrootte',
	'MAX_IMAGE_SIZE'				=> 'Maximum afbeelding dimensies',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maximum grootte van afbeelding bijlagen. Stel beide waardes in op 0px bij 0px om dimensie controle uit te schakelen.',
	'MAX_THUMB_WIDTH'				=> 'Maximum miniatuur breedte in pixel',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Een aangemaakte miniatuur zal de hier ingestelde breedte niet overschrijden.',
	'MIN_THUMB_FILESIZE'			=> 'Minimum miniatuur bestandsgrootte',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Maakt geen miniatuur aan voor afbeeldingen kleiner dan dit.',
	'MODE_INLINE'					=> 'Inline',
	'MODE_PHYSICAL'					=> 'Fysiek',

	'NOT_ALLOWED_IN_PM'			=> 'Alleen toegestaan in berichten',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Niet toegestaan',
	'NOT_ASSIGNED'				=> 'Niet toegewezen',
	'NO_ATTACHMENTS'			=> 'Geen bijlagen gevonden voor deze periode.',
	'NO_EXT_GROUP'				=> 'Geen',
	'NO_EXT_GROUP_NAME'			=> 'Geen groepsnaam ingevoerd',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Geen extensiegroep opgegeven.',
	'NO_FILE_CAT'				=> 'Geen',
	'NO_IMAGE'					=> 'Geen afbeelding',
	'NO_THUMBNAIL_SUPPORT'		=> 'Miniatuur ondersteuning is uitgeschakeld. Voor juiste functionaliteit moet of de GD-extensie beschikbaar zijn of imagemagick moet geïnstalleerd zijn. Beide zijn niet gevonden.',
	'NO_UPLOAD_DIR'				=> 'De uploadmap die je hebt opgegeven bestaat niet.',
	'NO_WRITE_UPLOAD'			=> 'De uploadmap die je hebt opgegeven kan niet beschreven worden. Wijzig de permissies om de webserver toe te staan om er naar te schrijven.',

	'ONLY_ALLOWED_IN_PM'	=> 'Alleen toegestaan in privéberichten',
	'ORDER_ALLOW_DENY'		=> 'Toestaan',
	'ORDER_DENY_ALLOW'		=> 'Afwijzen',
	
	'REMOVE_ALLOWED_IPS'			=> 'Verwijder of sluit uit <em>toegestane</em> IPs/hostnamen',
	'REMOVE_DISALLOWED_IPS'			=> 'Verwijder of sluit uit <em>verboden</em> IPs/hostnamen',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Weet je zeker dat je de bestandsstatistieken wilt synchroniseren?',	

	'SEARCH_IMAGICK'				=> 'Zoek naar Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Toegestaan/Verboden lijst',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Verandert het standaard gedrag, wanneer beveiligde downloads zijn ingeschakeld, van de toegestaan/verboden lijst naar die van een <strong>witte lijst</strong> (Toegestaan) of een <strong>zwarte lijst</strong> (Verboden).',
	'SECURE_DOWNLOADS'				=> 'Beveiligde downloads inschakelen',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Met deze optie ingeschakeld, zijn downloads gelimiteerd naar de IP’s/hostnamen die je definieert.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Beveiligde downloads zijn niet ingeschakeld. De instellingen hieronder zullen toegepast worden na het inschakelen van beveiligde downloads.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'De IP-lijst is succesvol bijgewerkt.',
	'SECURE_EMPTY_REFERRER'			=> 'Lege referentie toestaan',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Beveiligde downloads zijn gebaseerd op referenties. Wil je downloads toestaan voor diegene die de referentie weglaten?',
	'SETTINGS_CAT_IMAGES'			=> 'Afbeeldingscategorie instellingen',
	'SPECIAL_CATEGORY'				=> 'Speciale categorie',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Speciale categorieën verschillen in de manier waarop het gepresenteerd wordt in berichten.',
	'SUCCESSFULLY_UPLOADED'			=> 'Succesvol geüpload.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extensiegroep succesvol toegevoegd.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extensiegroep succesvol bijgewerkt.',

	'UPLOADING_FILES'				=> 'Uploaden bestanden',
	'UPLOADING_FILE_TO'				=> 'Uploaden bestand “%1$s” naar bericht-ID %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Je hebt niet de permissies om bestanden te uploaden naar forum “%s”.',
	'UPLOAD_DIR'					=> 'Upload map',
	'UPLOAD_DIR_EXPLAIN'			=> 'Opslagpad voor bijlagen. Let op dat wanneer je deze map verandert terwijl je al bestanden hebt geüpload, dat je dan handmatig de bestanden naar hun nieuwe locatie moet kopiëren.',
	'UPLOAD_ICON'					=> 'Uploadicoon',
	'UPLOAD_NOT_DIR'				=> 'De uploadlocatie die je hebt opgegeven lijkt geen map te zijn.',
));
