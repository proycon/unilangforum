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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Autoslett emne etter alder',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Antall dager etter siste innlegg før emnet fjernes.',
	'AUTO_PRUNE_FREQ'			=> 'Autoslettingsfrekvens',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Antall dager mellom slettingshendelser.',
	'AUTO_PRUNE_VIEWED'			=> 'Autoslett emner etter tid siden visning',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Antall dager siden emnet ble vist sist, før emnet fjernes.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Autoslettingsfrekvens for skyggeemner',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Autoslett skyggeemner etter alder',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Antall dager før skyggeemnet fjernes.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Tidsrom i dager mellom slettingshendelser.',

	'CONTINUE'						=> 'Fortsett',
	'COPY_PERMISSIONS'				=> 'Kopier tillatelser fra',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'For å gjøre tillatelsesoppsettet enklere for det nye forumet, kan du kopiere tillatelsene fra et eksisterende forum.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Straks det er opprettet, vil forumet ha de samme tillatelsene som det du velger her. Hvis intet forum er valgt, vil ikke det nylig opprettede forumet være synlig før tillatelsene er angitt.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Hvis du velger å kopiere tillatelser, vil forumet få de samme tillatelsene som det du velger her. Dette vil overskrive alle tillatelser du tidligere har angitt for dette forumet, med de som gjelder for forumet du velger her. Hvis intet forum er valgt, vil de gjeldende tillatelsene beholdes.',
	'COPY_TO_ACL'					=> 'Alternativt kan du også %skonfigurere nye tillatelser%s for dette forumet.',
	'CREATE_FORUM'					=> 'Opprett nytt forum',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Slett innhold eller flytt til forum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Slett underfora eller flytt til forum',
	'DEFAULT_STYLE'						=> 'Standardstil',
	'DELETE_ALL_POSTS'					=> 'Slett innlegg',
	'DELETE_SUBFORUMS'					=> 'Slett underfora og innlegg',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Aktiver aktive emner',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Hvis angitt til Ja, vil aktive emner i de valgte underforaene vises under denne kategorien.',

	'EDIT_FORUM'					=> 'Rediger forum',
	'ENABLE_INDEXING'				=> 'Aktiver søkeindeksering',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Hvis angitt til Ja, vil innlegg i dette forumet bli indeksert for søking.',
	'ENABLE_POST_REVIEW'			=> 'Aktiver innleggsredigering',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Hvis angitt til Ja, vil brukere kunne redigere innlegget hvis ingen nye innlegg er skrevet i emnet mens brukeren skrev sitt. Dette bør deaktiveres for pratefora.',
	'ENABLE_QUICK_REPLY'			=> 'Aktiver hurtigsvar',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Aktiverer hurtigsvar i dette forumet. Denne innstillingen tas ikke hensyn til hvis hurtigsvar er deaktivert på hele systemet. Hurtigsvar vil bare vises for brukere som har tillatelse til å skrive innlegg i dette forumet.',
	'ENABLE_RECENT'					=> 'Vis aktive emner',
	'ENABLE_RECENT_EXPLAIN'			=> 'Hvis angitt til Ja, vil emner som legges inn i dette forumet, vises i listen over aktive emner.',
	'ENABLE_TOPIC_ICONS'			=> 'Aktiver emneikoner',

	'FORUM_ADMIN'						=> 'Forumadministrasjon',
	'FORUM_ADMIN_EXPLAIN'				=> 'I phpBB3 er alt forumbasert. En kategori er bare en spesiell forumtype. Alle fora kan ha et ubegrenset antall underfora, og du kan bestemme om det kan skrives innlegg i dem eller ei (altså hvorvidt det fungerer som tidligere kategorier). Her kan du legge til, redigere, slette, låse og låse opp enkeltfora såvel som angi visse ekstra kontroller. Hvis innlegg og emner er kommet ut av synkronisering, kan du også resynkronisere et forum. <strong>Du må kopiere eller angi passende tillatelser for nylig opprettede fora for at de skal vises.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Aktiver autosletting',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Sletter emner i forumet, angi parametre for frekvens/alder nedenfor.',
	'FORUM_CREATED'						=> 'Forumet er opprettet.',
	'FORUM_DATA_NEGATIVE'				=> 'Parametre for sletting kan ikke være negative.',
	'FORUM_DESC_TOO_LONG'				=> 'Forumbeskrivelsen er for lang, den må være kortere enn 4000 tegn.',
	'FORUM_DELETE'						=> 'Slett forum',
	'FORUM_DELETE_EXPLAIN'				=> 'Forumet nedenfor vil la deg slette et forum. Hvis man kan skrive i forumet, vil du kunne velge hvor du vil gjøre av alle emnene (eller foraene) det inneholdt.',
	'FORUM_DELETED'						=> 'Forumet er slettet.',
	'FORUM_DESC'						=> 'Beskrivelse',
	'FORUM_DESC_EXPLAIN'				=> 'All HTML-kode du skriver inn her, vil bli vist slik den tilsier.',
	'FORUM_EDIT_EXPLAIN'				=> 'Skjemaet nedenfor lar deg tilpasse dette forumet. Merk at modererings- og innleggsantallskontrollene angis gjennom forumtillatelser for hver bruker eller brukergruppe.',
	'FORUM_IMAGE'						=> 'Forumbilde',
	'FORUM_IMAGE_EXPLAIN'				=> 'Plassering, relativ til phpBB-rotmappen, av et ekstra bilde som skal tilknyttes dette forumet.',
	'FORUM_IMAGE_NO_EXIST'				=> 'Det angitte forumbildet finnes ikke',
	'FORUM_LINK_EXPLAIN'				=> 'Fullstendig URL (inkludert protokollen, altså: <samp>http://</samp>) til målplasseringen som et klikk på dette forumet vil føre brukeren til, f.eks.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'Spor lenkevideresendinger',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Registrerer antall ganger en forumlenke klikkes.',
	'FORUM_NAME'						=> 'Forumnavn',
	'FORUM_NAME_EMPTY'					=> 'Du må angi et navn på dette forumet.',
	'FORUM_PARENT'						=> 'Overordnet forum',
	'FORUM_PASSWORD'					=> 'Forumpassord',
	'FORUM_PASSWORD_CONFIRM'			=> 'Bekreft forumpassord',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Trenger bare å angis hvis det angis et forumpassord.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Definerer et passord for dette forumet. Bruk heller tillatelsessystemet.',
	'FORUM_PASSWORD_UNSET'				=> 'Fjern forumpassord',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Merk av her hvis du vil fjerne forumpassordet.',
	'FORUM_PASSWORD_OLD'				=> 'Forumpassordet bruker en gammel hashmetode og bør byttes.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Passordene du angav, samsvarer ikke.',
	'FORUM_PRUNE_SETTINGS'				=> 'Forumoppryddingsinnstillinger',
	'FORUM_PRUNE_SHADOW'				=> 'Aktiver autosletting av skyggeemner',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Sletter skyggeemner fra forumet, angi parametre for frekvens/alder nedenfor.',
	'FORUM_RESYNCED'					=> 'Forumet «%s» er resynkronisert',
	'FORUM_RULES_EXPLAIN'				=> 'Forumregler vises på alle sider i et gitt forum.',
	'FORUM_RULES_LINK'					=> 'Lenke til forumregler',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Du kan angi URL-en til siden/innlegget som inneholder forumreglene her. Denne innstillingen overstyrer forumregelteksten du har angitt.',
	'FORUM_RULES_PREVIEW'				=> 'Forhåndsvisning av forumregler',
	'FORUM_RULES_TOO_LONG'				=> 'Forumreglene må bestå av mindre enn 4000 tegn.',
	'FORUM_SETTINGS'					=> 'Foruminnstillinger',
	'FORUM_STATUS'						=> 'Forumstatus',
	'FORUM_STYLE'						=> 'Forumstil',
	'FORUM_TOPICS_PAGE'					=> 'Emner per side',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Hvis ikke null, vil denne verdien overstyre standardinnstillingen for emner per side.',
	'FORUM_TYPE'						=> 'Forumtype',
	'FORUM_UPDATED'						=> 'Foruminformasjonen er oppdatert.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Du ønsker å endre et forum man kan skrive i, med underfora, til en lenke. Flytt alle underfora ut av dette forumet før du fortsetter. Når du har endret til en lenke, vil du ikke lenger kunne se underforaene som for øyeblikket er tilknyttet dette forumet..',

	'GENERAL_FORUM_SETTINGS'	=> 'Generelle foruminnstillinger',

	'LINK'						=> 'Lenke',
	'LIST_INDEX'				=> 'Vis underfora i forklaringer for det overordnede forumet',
	'LIST_INDEX_EXPLAIN'		=> 'Viser dette forumet på indeksen og andre steder som en lenke innenfor forklaringen til det overordnede forumet hvis det overordnede forumets alternativ «Vis underfora i forklaring»” er aktivert.',
	'LIST_SUBFORUMS'			=> 'Vis underfora i forklaring',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Viser dette forumets underfora på indeksen og andre steder som en lenke innenfor forklaringen, dersom alternativet «Vis underfora i forklaringer for det overordnede forumet» er aktivert.',
	'LOCKED'					=> 'Låst',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forumet du valgte å flytte innleggene til, kan det ikke skrives innlegg i. Velg et forum man kan skrive innlegg i.',
	'MOVE_POSTS_TO'					=> 'Flytt innlegg til',
	'MOVE_SUBFORUMS_TO'				=> 'Flytt underfora til',

	'NO_DESTINATION_FORUM'			=> 'Du har ikke angitt et forum som innholdet skal flyttes til.',
	'NO_FORUM_ACTION'				=> 'Ingen handling er definert for hva som skal skje med foruminnholdet.',
	'NO_PARENT'						=> 'Ingen overordnet',
	'NO_PERMISSIONS'				=> 'Ikke kopier tillatelser',
	'NO_PERMISSION_FORUM_ADD'		=> 'Du har ikke de nødvendige tillatelsene til å legge til fora.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Du har ikke de nødvendige tillatelsene til å slette fora.',

	'PARENT_IS_LINK_FORUM'		=> 'Det overordnede du angav, var en forumlenke. Lenkefora kan ikke inneholde andre fora. Angi en kategori eller et forum som overordnet forum.',
	'PARENT_NOT_EXIST'			=> 'Overordnet finnes ikke.',
	'PRUNE_ANNOUNCEMENTS'		=> 'Slett kunngjøringer',
	'PRUNE_STICKY'				=> 'Slett festede',
	'PRUNE_OLD_POLLS'			=> 'Slett gamle avstemminger',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Fjerner emner med avstemminger som ingen har stemt i siden innleggets alder.',

	'REDIRECT_ACL'	=> 'Nå kan du %sangi tillatelser%s for dette forumet.',

	'SYNC_IN_PROGRESS'			=> 'Synkroniserer forum',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Resynkroniserer for øyeblikket området %1$d/%2$d.',

	'TYPE_CAT'			=> 'Kategori',
	'TYPE_FORUM'		=> 'Forum',
	'TYPE_LINK'			=> 'Lenke',

	'UNLOCKED'			=> 'Låst opp',
));
