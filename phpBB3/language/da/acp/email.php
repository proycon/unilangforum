<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* @modified and translated by Olympus DK Team
* @version $Id: email.php 462 2014-10-25 10:48:26Z jan_skovsgaard $
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
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Her kan du sende en email til enten alle dine brugere, eller til de brugere i en specifik gruppe som <strong>har muligheden for at modtage masse-emails aktiveret</strong>. Når en masse-email afsendes bliver administrator sat som afsender, og afsendes med modtagere som blind kopi, som derfor ikke kan se øvrige modtagere. Som standard afsendes emailen til 20 brugere ad gangen. Vær tålmodig, når du sender email til en stor gruppe af personer og stop ikke siden halvvejs. Afsendelsen af en masse-email kan tage lang tid, men du bliver informeret når scriptet er fuldført.',
	'ALL_USERS'						=> 'Alle brugere',

	'COMPOSE'				=> 'Skriv email',

	'EMAIL_SEND_ERROR'		=> 'Der opstod en eller flere fejl under afsendelsen af emailen. Kontroller venligst %sfejlloggen%s for oplysninger om fejlårsagen.',
	'EMAIL_SENT'			=> 'Denne email er blevet sendt.',
	'EMAIL_SENT_QUEUE'		=> 'Denne email er nu placeret i afsendelseskøen.',

	'LOG_SESSION'			=> 'Log mailsession til kritisk log',

	'SEND_IMMEDIATELY'		=> 'Send straks',
	'SEND_TO_GROUP'			=> 'Send til gruppe',
	'SEND_TO_USERS'			=> 'Send til brugere',
	'SEND_TO_USERS_EXPLAIN'	=> 'Indtastning af navne her vil overskrive enhver gruppe valgt ovenfor. Indtast hvert brugernavn på en ny linie.',

	'MAIL_BANNED'      => 'Send også email til udelukkede brugere',
	'MAIL_BANNED_EXPLAIN'  => 'Når du sender en masse-email til en gruppe, kan du her vælge at også udelukkede brugere i gruppen, skal modtage emailen.',
	'MAIL_HIGH_PRIORITY'	=> 'Høj',
	'MAIL_LOW_PRIORITY'		=> 'Lav',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioritet for email',
	'MASS_MESSAGE'			=> 'Emailens tekst',
	'MASS_MESSAGE_EXPLAIN'	=> 'Bemærk venligst at du kun bør skrive ren tekst. Al formateringskode, HTML eller BBkode fremsendes som ren tekst.',

	'NO_EMAIL_MESSAGE'		=> 'Du skal skrive en besked.',
	'NO_EMAIL_SUBJECT'		=> 'Du skal angive en overskrift i din email.',
));
