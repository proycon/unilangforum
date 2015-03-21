<?php
/**
*
* This file is part of the American English Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) Maël Soucaze <https://www.maelsoucaze.com>
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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Her kan du sende en e-postmelding til enten alle brukere eller alle brukere i en bestemt gruppe <strong>som har aktivert alternativet for å motta masse-e-post</strong>. Dette gjøres ved at en e-post sendes til den angitte administrative adressen, og alle mottakerne som blindkopi. Standardinnstillingen er å ta med bare 20 mottakere i hver slik e-post, dersom det er flere mottakere, vil e-posten bli sendt flere ganger. Hvis du sender e-post til mange personer, må du være tålmodig etter innsending og ikke stoppe siden mens den er midt i sendingen. Det er vanlig at massesending av e-post tar lang tid. Du vil bli varslet når skriptet er ferdig.',
	'ALL_USERS'						=> 'Alle brukere',

	'COMPOSE'				=> 'Skriv',

	'EMAIL_SEND_ERROR'		=> 'Det oppstod én eller flere feil ved sending av e-posten. Se i %sfeilloggen%s for detaljerte feilmeldinger.',
	'EMAIL_SENT'			=> 'Denne meldingen er sendt.',
	'EMAIL_SENT_QUEUE'		=> 'Denne meldingen er lagt i køen for sending.',

	'LOG_SESSION'			=> 'Loggfør e-postøkten i kritisk logg',

	'SEND_IMMEDIATELY'		=> 'Send umiddelbart',
	'SEND_TO_GROUP'			=> 'Send til gruppe',
	'SEND_TO_USERS'			=> 'Send til brukere',
	'SEND_TO_USERS_EXPLAIN'	=> 'Hvis du skriver inn navn her, vil dette overstyre grupper som er valgt ovenfor. Skriv inn hvert brukernavn på sin egen linje.',

	'MAIL_BANNED'			=> 'Send e-post til utestengte brukere',
	'MAIL_BANNED_EXPLAIN'	=> 'Når du sender masse-e-post til en gruppe, kan du velge her om også utestengte brukere skal motta e-posten.',
	'MAIL_HIGH_PRIORITY'	=> 'Høy',
	'MAIL_LOW_PRIORITY'		=> 'Lav',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'E-postprioritet',
	'MASS_MESSAGE'			=> 'Meldingstekst',
	'MASS_MESSAGE_EXPLAIN'	=> 'Merk at du bare kan bruke ren tekst. Alle tagger vil bli fjernet før sending.',

	'NO_EMAIL_MESSAGE'		=> 'Du må angi en meldingstekst.',
	'NO_EMAIL_SUBJECT'		=> 'Du må angi et emne for meldingen.',
));
