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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Hier kan je een e-mail naar alle gebruikers of de leden van een specifieke groep sturen, <strong>die de ontvangst van massa e-mails toelaten</strong>. Hiervoor wordt een e-mail met alle ontvangers als onzichtbaar (bcc) ingesteld, naar het beheerders-e-mailadres gestuurd. Bij de standaard instellingen wordt de e-mail naar 20 mensen per pakket gestuurd. Indien er meer dan 50 ontvangers zijn, wordt de e-mail via meerdere pakketten verzonden. Indien je een e-mail naar een grote groep stuurt, wees dan geduldig en stop de pagina niet halverwege. Het is normaal dat het versturen van massa e-mails enige tijd in beslag neemt. Je wordt ervan op de hoogte gebracht zodra het script klaar is.',
	'ALL_USERS'			=> 'Alle gebruikers',

	'COMPOSE'			=> 'Opstellen',

	'EMAIL_SEND_ERROR'		=> 'Er zijn één of meerdere fouten opgetreden tijdens het verzenden. Controleer het %sfoutenlogboek%s voor een uitgebreide beschrijving.',
	'EMAIL_SENT'			=> 'Het bericht is verzonden.',
	'EMAIL_SENT_QUEUE'		=> 'Het bericht staat in de wachtrij om te worden verstuurd.',

	'LOG_SESSION'			=> 'Sessie opslaan',

	'SEND_IMMEDIATELY'		=> 'Verstuur direct',
	'SEND_TO_GROUP'			=> 'Verstuur naar groep',
	'SEND_TO_USERS'			=> 'Verstuur naar gebruikers',
	'SEND_TO_USERS_EXPLAIN'		=> 'Door het invullen van namen worden de hierboven geselecteerde groepen genegeerd. Elke gebruikersnaam moet op een nieuwe regel staan.',
	
	'MAIL_BANNED'			=> 'Mail verbannen gebruikers',
	'MAIL_BANNED_EXPLAIN'		=> 'Geef aan bij het versturen naar een groep of de verbannen gebruikers deze e-mail ook moeten ontvangen.',
	'MAIL_HIGH_PRIORITY'		=> 'Hoog',
	'MAIL_LOW_PRIORITY'		=> 'Laag',
	'MAIL_NORMAL_PRIORITY'		=> 'Normaal',
	'MAIL_PRIORITY'			=> 'Mailprioriteit',
	'MASS_MESSAGE'			=> 'Je bericht',
	'MASS_MESSAGE_EXPLAIN'		=> 'Het bericht wordt verzonden zonder tekst-opmaak. Alle opmaak wordt voor het verzenden verwijderd.',

	'NO_EMAIL_MESSAGE'		=> 'Het berichtveld is nog leeg.',
	'NO_EMAIL_SUBJECT'		=> 'Je hebt geen onderwerp opgegeven.',
));
