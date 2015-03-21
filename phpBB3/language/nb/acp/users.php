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
	'ADMIN_SIG_PREVIEW'		=> 'Forhåndsvisning av signatur',
	'AT_LEAST_ONE_FOUNDER'	=> 'Du kan ikke endre denne grunnleggeren til en vanlig bruker. Det må være minst én grunnlegger på systemet. Hvis du vil endre denne brukerens grunnlegger-status, må du først endre en annen bruker til grunnlegger.',

	'BAN_ALREADY_ENTERED'	=> 'Utestengelsen er tidligere angitt. Utestengelseslisten er ikke oppdatert.',
	'BAN_SUCCESSFUL'		=> 'Utestengelsen er angitt.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Du har ikke tillatelse til å stenge ute den anonyme kontoen. Tillatelser for anonyme brukere kan angis under fanen Tillatelser.',
	'CANNOT_BAN_FOUNDER'			=> 'Du har ikke tillatelse til å stenge ute grunnleggerkontoer.',
	'CANNOT_BAN_YOURSELF'			=> 'Du har ikke tillatelse til å stenge deg selv ute.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Du har ikke tillatelse til å deaktivere bot-kontoer. Deaktiver boten fra boter-siden i stedet.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Du har ikke tillatelse til å deaktivere grunnleggerkontoer.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Du har ikke tillatelse til å deaktivere din egen konto.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Du har ikke tillatelse til å gjennomtvinge reaktivering av bot-kontoer. Reaktiver boten fra boter-siden i stedet.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Du har ikke tillatelse til å gjennomtvinge reaktivering av grunnleggerkontoer.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Du har ikke tillatelse til å gjennomtvinge reaktivering av din egen konto.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Du kan ikke fjerne gjestebrukerkontoen.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Du har ikke tillatelse til å fjerne grunnleggerkontoer.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Du har ikke tillatelse til å fjerne din egen brukerkonto.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Du kan ikke forfremme ignorerte brukere til grunnleggere.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Du må aktivere brukere før du forfremmer dem til grunnleggere. Bare aktiverte brukere kan forfremmes.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Du trenger bare å angi dette hvis du endrer brukerens e-postadresse.',

	'DELETE_POSTS'			=> 'Slett innlegg',
	'DELETE_USER'			=> 'Slett bruker',
	'DELETE_USER_EXPLAIN'	=> 'Merk at sletting av en bruker er endelig, de kan ikke gjenopprettes. Uleste private meldinger som er sendt av denne brukere, vil bli slettet og ikke tilgjengelig for mottakerne.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Reaktivering gjennomtvunget.',
	'FOUNDER'						=> 'Grunnlegger',
	'FOUNDER_EXPLAIN'				=> 'Grunnleggere har alle administrasjonstillatelser og kan aldri bli utestengt, slettet eller endret av brukere som ikke er grunnleggere.',

	'GROUP_APPROVE'					=> 'Godkjenn medlem',
	'GROUP_DEFAULT'					=> 'Gjør gruppen til standard for medlem',
	'GROUP_DELETE'					=> 'Fjern medlem fra gruppe',
	'GROUP_DEMOTE'					=> 'Degrader gruppeleder',
	'GROUP_PROMOTE'					=> 'Forfrem til gruppeleder',

	'IP_WHOIS_FOR'			=> 'IP-whois for %s',

	'LAST_ACTIVE'			=> 'Sist aktiv',

	'MOVE_POSTS_EXPLAIN'	=> 'Velg forumet du vil flytte alle innlegg av denne brukeren til.',

	'NO_SPECIAL_RANK'		=> 'Ingen spesialgrad er tilordnet',
	'NO_WARNINGS'			=> 'Ingen advarsler.',
	'NOT_MANAGE_FOUNDER'	=> 'Du prøvde å administrere en bruker med grunnleggerstatus. Bare grunnleggere kan administrere andre grunnleggere.',

	'QUICK_TOOLS'			=> 'Hurtigverktøy',

	'REGISTERED'			=> 'Registrert',
	'REGISTERED_IP'			=> 'Registrert fra IP',
	'RETAIN_POSTS'			=> 'Behold innlegg',

	'SELECT_FORM'			=> 'Velg skjema',
	'SELECT_USER'			=> 'Velg bruker',

	'USER_ADMIN'					=> 'Brukeradministrasjon',
	'USER_ADMIN_ACTIVATE'			=> 'Aktiver konto',
	'USER_ADMIN_ACTIVATED'			=> 'Bruker er aktivert.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar er fjernet fra brukerkonto.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Steng ute etter e-post',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-postadresse utestengt via brukeradministrasjon',
	'USER_ADMIN_BAN_IP'				=> 'Steng ute etter IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP utestengt via brukeradministrasjon',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Brukernavn utestengt via brukeradministrasjon',
	'USER_ADMIN_BAN_USER'			=> 'Steng ute etter brukernavn',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktiver konto',
	'USER_ADMIN_DEACTIVED'			=> 'Bruker er deaktivert.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Slett alle vedlegg',
	'USER_ADMIN_DEL_AVATAR'			=> 'Slett avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Tøm PM-utboks',
	'USER_ADMIN_DEL_POSTS'			=> 'Slett alle innlegg',
	'USER_ADMIN_DEL_SIG'			=> 'Slett signatur',
	'USER_ADMIN_EXPLAIN'			=> 'Her kan du endre brukerinformasjon og visse spesifikke alternativer.',
	'USER_ADMIN_FORCE'				=> 'Gjennomtving reaktivering',
	'USER_ADMIN_LEAVE_NR'			=> 'Fjern fra Nylig registrerte',
	'USER_ADMIN_MOVE_POSTS'			=> 'Flytt alle innlegg',
	'USER_ADMIN_SIG_REMOVED'		=> 'Signatur fjernet fra brukerkonto.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Alle vedlegg av denne brukeren er fjernet.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Kan ikke vise avataren fordi avatarer ikke tillates.',
	'USER_AVATAR_UPDATED'			=> 'Avatardetaljer for bruker er oppdatert.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Gjeldende avatar kan ikke vises fordi typen ikke tillates.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Egendefinerte profilfelt',
	'USER_DELETED'					=> 'Brukeren er slettet.',
	'USER_GROUP_ADD'				=> 'Legg til bruker i gruppe',
	'USER_GROUP_NORMAL'				=> 'Brukerdefinerte grupper brukeren er medlem av',
	'USER_GROUP_PENDING'			=> 'Grupper brukeren er i ventemodus for',
	'USER_GROUP_SPECIAL'			=> 'Forhåndsdefinerte grupper brukeren er medlem av',
	'USER_LIFTED_NR'				=> 'Brukerens status som nylig registrert, er fjernet.',
	'USER_NO_ATTACHMENTS'			=> 'Det er ingen vedlagte filer å vise.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Brukeren har ingen innlegg å beholde eller slette.',
	'USER_OUTBOX_EMPTIED'			=> 'Brukerens private meldings-utboks er tømt.',
	'USER_OUTBOX_EMPTY'				=> 'Brukerens private meldings-utboks var allerede tom.',
	'USER_OVERVIEW_UPDATED'			=> 'Brukerdetaljer oppdatert.',
	'USER_POSTS_DELETED'			=> 'Fjernet alle innlegg av denne brukeren.',
	'USER_POSTS_MOVED'				=> 'Flyttet alle brukerens innlegg til målforumet.',
	'USER_PREFS_UPDATED'			=> 'Brukerpreferanser oppdatert.',
	'USER_PROFILE'					=> 'Brukerprofil',
	'USER_PROFILE_UPDATED'			=> 'Brukerprofil oppdatert.',
	'USER_RANK'						=> 'Brukerens grad',
	'USER_RANK_UPDATED'				=> 'Brukerens grad oppdatert.',
	'USER_SIG_UPDATED'				=> 'Brukersignatur oppdatert.',
	'USER_WARNING_LOG_DELETED'		=> 'Ingen informasjon tilgjengelig. Loggoppføringen er kanskje slettet.',
	'USER_TOOLS'					=> 'Grunnleggende verktøy',
));
