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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Här kan du skicka ett meddelande till antingen alla användare eller alla användare i en specifik grupp <strong>som har inställningen att ta emot massutskick aktiverad</strong>. Ett e-postmeddelande kommer att skickas ut till den angivna administrativa e-postadressen med en hemlig kopia till alla mottagare. Grundinställningen är att endast inkludera 50 mottagare i ett sådant e-postmeddelande, om det är fler mottagare än så kommer fler e-postmeddelanden att skickas ut. Ha tålamod om du skickar till ett stort antal användare och stoppa inte sidladdningen halvvägs igenom. Det är normalt att det tar lång tid för massutskick att skickas ut, du kommer att underrättas när skriptet har körts färdigt.',
	'ALL_USERS'						=> 'Alla användare',

	'COMPOSE'				=> 'Skriv',

	'EMAIL_SEND_ERROR'		=> 'Det uppstod ett eller fler fel när meddelandet skulle skickas. Titta i %sfelloggen%s för detaljerade felmeddelanden.',
	'EMAIL_SENT'			=> 'Meddelandet skickades.',
	'EMAIL_SENT_QUEUE'		=> 'Detta meddelande står i kö för att skickas.',

	'LOG_SESSION'			=> 'Logga e-postsessionen till den kritiska loggen',

	'SEND_IMMEDIATELY'		=> 'Skicka omedelbart',
	'SEND_TO_GROUP'			=> 'Skicka till grupp',
	'SEND_TO_USERS'			=> 'Skicka till användare',
	'SEND_TO_USERS_EXPLAIN'	=> 'Genom att skriva in namn här så åsidosätter du eventuellt val av grupp ovan. Skriv ett användarnamn per rad.',

	'MAIL_BANNED'			=> 'Användare, som är bannade via sin e-postadress',
	'MAIL_BANNED_EXPLAIN'	=> 'Då man sänder ett massutskick till en grupp, kan man välja ifall bannade användare också ska få e-postbrevet.',
	'MAIL_HIGH_PRIORITY'	=> 'Hög',
	'MAIL_LOW_PRIORITY'		=> 'Låg',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Meddelandeprioritet',
	'MASS_MESSAGE'			=> 'Ditt meddelande',
	'MASS_MESSAGE_EXPLAIN'	=> 'Kom ihåg att du här endast kan skriva oformaterad text. All formatering kommer att tas bort innan meddelandet skickas.',

	'NO_EMAIL_MESSAGE'		=> 'Du måste skriva ett meddelande.',
	'NO_EMAIL_SUBJECT'		=> 'Du måste ange ett ämne för ditt meddelande.',
));
