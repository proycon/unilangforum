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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Her kan du konfigurere hovedinnstillingene for vedlegg og det tilknyttede spesialkategoriene.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Her kan du legge til, slette, endre eller deaktivere filetternavnsgrupper. Videre kan man tilordne spesialkategorier til dem, endre nedlastingsmekanismen og laste opp ikoner som vises foran vedlegg som tilhører gruppen.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Her kan du administrere hvilke filetternavn som tillates. Du aktiverer filetternavnene fra administrasjonspanelet for filetternavnsgrupper. Vi anbefaler på det sterkeste at du ikke tillater filetternavn til skript (som <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> osv.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Her kan du se ubrukte filer. Dette skjer vanligvis når brukere legger ved filer, men ikke sender inn innlegget. Du kan slette disse filene eller knytte dem til eksisterende innlegg. Tilknytning til innlegg krever en gyldig innleggs-ID, noe du må finne frem til selv. Dette knytter det allerede opplastede vedlegget til det angitte innlegget.',
	'ADD_EXTENSION'						=> 'Legg til filetternavn',
	'ADD_EXTENSION_GROUP'				=> 'Legg til filetternavnsgruppe',
	'ADMIN_UPLOAD_ERROR'				=> 'Feil ved forsøk på å tilknytte filen: «%s».',
	'ALLOWED_FORUMS'					=> 'Tillatte fora',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Mulighet for å legge inn de tilordnede filetternavnene i de valgte (eller alle, hvis valgt) fora.',
	'ALLOWED_IN_PM_POST'				=> 'Tillatt',
	'ALLOW_ATTACHMENTS'					=> 'Tillat vedlegg',
	'ALLOW_ALL_FORUMS'					=> 'Tillat i falle fora',
	'ALLOW_IN_PM'						=> 'Tillatt i private meldinger',
	'ALLOW_PM_ATTACHMENTS'				=> 'Tillat vedlegg i private meldinger',
	'ALLOW_SELECTED_FORUMS'				=> 'Bare foraene som er valgt nedenfor',
	'ASSIGNED_EXTENSIONS'				=> 'Tilordnede filetternavn',
	'ASSIGNED_GROUP'					=> 'Tilordnedt filetternavnsgruppe',
	'ATTACH_EXTENSIONS_URL'				=> 'Filetternavn',
	'ATTACH_EXT_GROUPS_URL'				=> 'Filetternavnsgrupper',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Maksimal filstørrelse',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Maksimal størrelse for hver fil. Hvis denne verdien er 0, begrenses den opplastbare filstørrelsen bare av PHP-konfigurasjonen.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Maksimal filstørrelse for private meldinger',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimal størrelse for hver fil, med 0 for ubegrenset, som legges ved en privat melding.',
	'ATTACH_ORPHAN_URL'					=> 'Ubrukte vedlegg',
	'ATTACH_POST_ID'					=> 'Innleggs-ID',
	'ATTACH_POST_TYPE'					=> 'Innleggstype',
	'ATTACH_QUOTA'						=> 'Total kvote for vedlegg',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Maksimal diskplass tilgjengelig for vedlegg for hele systemet, hvor 0 er ubegrenset.',
	'ATTACH_TO_POST'					=> 'Legg ved fil i innlegg',

	'CAT_FLASH_FILES'			=> 'Flash-filer',
	'CAT_IMAGES'				=> 'Bilder',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime-mediefiler',
	'CAT_RM_FILES'				=> 'RealMedia-mediefiler',
	'CAT_WM_FILES'				=> 'Windows Media-mediefiler',
	'CHECK_CONTENT'				=> 'Kontroller vedleggsfiler',
	'CHECK_CONTENT_EXPLAIN'		=> 'Enkelte nettlesere kan lures til å anta feil MIME-type for opplastede filer. Dette alternativet sikrer at filer som kan forårsake dette, avvises.',
	'CREATE_GROUP'				=> 'Opprett ny gruppe',
	'CREATE_THUMBNAIL'			=> 'Opprett miniatyrbilde',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Opprett et miniatyrbilde i alle mulige situasjoner.',

	'DEFINE_ALLOWED_IPS'			=> 'Definer tillatte IP-er/vertsnavn',
	'DEFINE_DISALLOWED_IPS'			=> 'Definer forbudte IP-er/vertsnavn',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Hvis du vil angi flere ulike IP-er eller vertsnavn, skriver du inn hvert på sin egen linje. Hvis du vil angi et intervall med IP-adresser, skiller du start og slutt med en bindestrek (-), bruk «*» som jokertegn.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Du kan fjerne (eller av-ekskludere) flere IP-adresser på én gang ved å bruke en passende kombinasjon av mus og tastatur på datamaskinen og nettleseren. Ekskluderte IP-er har blå bakgrunn.',
	'DISPLAY_INLINED'				=> 'Vis bilder i teksten',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Hvis angitt til Nei, vil bildevedlegg vises som en lenke.',
	'DISPLAY_ORDER'					=> 'Visningsrekkefølge for vedlegg',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Vis vedleggene i kronologisk rekkefølge.',

	'EDIT_EXTENSION_GROUP'			=> 'Rediger filetternavnsgruppe',
	'EXCLUDE_ENTERED_IP'			=> 'Aktiver dette for å ekskludere angitt IP/vertsnavn.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Ekskluder IP fra tillatte IP-er/vertsnavn',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Ekskluder IP fra forbudte IP-er/vertsnavn',
	'EXTENSIONS_UPDATED'			=> 'Filetternavn er oppdatert.',
	'EXTENSION_EXIST'				=> 'Filetternavnet %s finnes allerede.',
	'EXTENSION_GROUP'				=> 'Filetternavnsgruppe',
	'EXTENSION_GROUPS'				=> 'Filetternavnsgrupper',
	'EXTENSION_GROUP_DELETED'		=> 'Filetternavnsgruppen er slettet.',
	'EXTENSION_GROUP_EXIST'			=> 'Filetternanvsgruppen %s finnes allerede.',

	'EXT_GROUP_ARCHIVES'			=> 'Arkiver',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumenter',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Nedlastbare filer',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash-filer',
	'EXT_GROUP_IMAGES'				=> 'Bilder',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Ren tekst',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FILES_GONE'			=> 'Enkelte av vedleggene du har valgt for sletting, finnes ikke. De kan ha blitt slettet allerede. Vedlegg som fantes, ble slettet.',
	'FILES_STATS_WRONG'		=> 'Filstatistikken er sannsynligvis unøyaktig og må resynkroniseres. Faktiske verdier: Antall vedlegg = %1$d, total størrelse på vedlegg = %2$s.<br />Klikk %3$sher%4$s for å resynkronisere dem.',

	'GO_TO_EXTENSIONS'		=> 'Gå til skjermen for administrasjon av filetternavn',
	'GROUP_NAME'			=> 'Gruppenavn',

	'IMAGE_LINK_SIZE'			=> 'Størrelse før bildelenke',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Vis bildevedlegg som en tekstlenke hvis bildet er større enn dette. Du kan deaktivere dette ved å angi størrelsen 0px x 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick-bane',
	'IMAGICK_PATH_EXPLAIN'		=> 'Fullstendig bane til Imagemagick-konverteringsprogrammet, f.eks. <samp>/usr/bin/</samp>.',

	'MAX_ATTACHMENTS'				=> 'Maksimalt antall vedlegg per innlegg',
	'MAX_ATTACHMENTS_PM'			=> 'Maksimalt antall vedlegg per private melding',
	'MAX_EXTGROUP_FILESIZE'			=> 'Maksimal filstørrelse',
	'MAX_IMAGE_SIZE'				=> 'Maksimal bildestørrelse',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Maksimal størrelse på bildevedlegg. Angi begge verdier til 0px x 0px for å deaktivere kontroll av bildestørrelse.',
	'MAX_THUMB_WIDTH'				=> 'Maksimal bredde på miniatyrbilde, i piksler',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Et generert miniatyrbilde vil ikke overstige bredden som angis her.',
	'MIN_THUMB_FILESIZE'			=> 'Minste filstørrelse for miniatyrbilde',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Ikke opprett miniatyrbilde for bilder som er mindre enn dette.',
	'MODE_INLINE'					=> 'I teksten',
	'MODE_PHYSICAL'					=> 'Fysisk',

	'NOT_ALLOWED_IN_PM'			=> 'Tillat bare i innlegg',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Ikke tillatt',
	'NOT_ASSIGNED'				=> 'Ikke tilordnet',
	'NO_ATTACHMENTS'			=> 'Finner ingen vedlegg for dette tidsrommet.',
	'NO_EXT_GROUP'				=> 'Ingen',
	'NO_EXT_GROUP_NAME'			=> 'Ingen gruppenavn er angitt',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Ingen filetternavnsgrupper er angitt.',
	'NO_FILE_CAT'				=> 'Ingen',
	'NO_IMAGE'					=> 'Intet bilde',
	'NO_THUMBNAIL_SUPPORT'		=> 'Støtte for miniatyrbilder er deaktivert. Denne funksjonaliteten krever at enten GD-utvidelsen er tilgjengelig eller at Imagemagick er installert. Fant ingen av disse.',
	'NO_UPLOAD_DIR'				=> 'Opplastingsmappen du angav, finnes ikke.',
	'NO_WRITE_UPLOAD'			=> 'Opplastingsmappen du angav, kan ikke skrives til. Endre tillatelsene slik at webserveren kan skrive til den.',

	'ONLY_ALLOWED_IN_PM'	=> 'Bare tillatt i private meldinger',
	'ORDER_ALLOW_DENY'		=> 'Tillat',
	'ORDER_DENY_ALLOW'		=> 'Forby',

	'REMOVE_ALLOWED_IPS'			=> 'Fjern eller av-ekskluder <em>tillatte</em> IP-er/vertsnavn',
	'REMOVE_DISALLOWED_IPS'			=> 'Fjern eller av-ekskluder <em>forbudte</em> IP-er/vertsnavn',
	'RESYNC_FILES_STATS_CONFIRM'	=> 'Er du sikker på at du vil resynkronisere filstatistikken?',

	'SEARCH_IMAGICK'				=> 'Søk etter Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Tillat/forby-liste',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Endre standard virkemåte når sikre nedlastinger er aktivert, fra en tillat/forby-liste til <strong>hviteliste</strong> (tillat) eller <strong>svarteliste</strong> (forby).',
	'SECURE_DOWNLOADS'				=> 'Aktiver sikre nedlastinger',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Når dette alternativet er aktivert, begrenses nedlasting til IP-er/vertsnavn du definerer.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Sikre nedlastinger er ikke aktivert. Innstillingene nedenfor vil bli aktivert nå sikre nedlastinger er aktivert.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP-listen er oppdatert.',
	'SECURE_EMPTY_REFERRER'			=> 'Tillat tom referanse',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Sikre nedlastinger er basert på referanser. Vil du tillate nedlastinger for de som utelater referanse?',
	'SETTINGS_CAT_IMAGES'			=> 'Bildekategoriinnstillinger',
	'SPECIAL_CATEGORY'				=> 'Spesialkategori',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Spesialkategorier vises på ulik måte i innlegg.',
	'SUCCESSFULLY_UPLOADED'			=> 'Opplasting vellykket.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Filetternavnsgruppen er lagt til.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Filetternavnsgruppen er oppdatert.',

	'UPLOADING_FILES'				=> 'Laster opp filer',
	'UPLOADING_FILE_TO'				=> 'Laster opp filen «%1$s» til innlegg nummer %2$d …',
	'UPLOAD_DENIED_FORUM'			=> 'Du har ikke tillatelse til å laste opp filer til forumet «%s».',
	'UPLOAD_DIR'					=> 'Opplastingsmappe',
	'UPLOAD_DIR_EXPLAIN'			=> 'Lagringsbane for vedlegg. Merk at hvis du endrer denne mappen mens du allerede har opplastede vedlegg, må du manuelt kopiere filene til den nye plasseringen.',
	'UPLOAD_ICON'					=> 'Opplastingsikon',
	'UPLOAD_NOT_DIR'				=> 'Opplastingsplasseringen du angav, ser ikke ut til å være en mappe.',
));
