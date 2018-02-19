<?php
/**
 * 
 * Prime Ban to Group [English]
 * 
 * @copyright (c) 2014 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 * 
 * Original code by primehalo (https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=183323)
 * Thanks to him for let me convert his MOD.
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'PBTG_TITLE_ACP'				=> 'Prime Ban to Group',
	'PBTG_SETTINGS_ACP'				=> 'Einstellungen',

	'PBTG_TITLE'					=> 'Prime Ban to Group',
	'PBTG_TITLE_EXPLAIN'			=> 'Fügt Benutzer automatisch in Spezialgruppen hinzu, wenn sie temporär oder dauerhaft gebannt werden. Dies ermöglicht die visuelle Hervorhebung ihres Status durch Gruppen-Eigenschaften, wie zum Beispiel ein eigenes Rang-Bild. User werden aus dieser Gruppe entfernt, wenn sie manuell entbannt werden oder wenn ihr Bann endet. Benutzer, die zum Zeitpunkt der Installation dieser Erweiterung von schon gebannt sind, können ganz einfach den entsprechenden Gruppen zugewiesen werden, wenn du die Gruppen resynchronisierst.',

	'PBTG_SETTINGS'					=> 'Prime Ban to Group Einstellungen',

	'PBTG_RESYNC'					=> 'Resynchronisiere Gruppen',
	'PBTG_RESYNC_EXPLAIN'			=> 'Resynchronisiert die Grouppen der gebannten, suspendierten und inaktiven Benutzer. Alle User, die nicht in diese Gruppen gehören werden entfernt, und alle, die dort hineingehören, werden hinzugefügt. Führe diese Aktion aus nachdem du die Gruppe der inaktiven Benutzer aktivierst oder deaktiviert hast, und beim ersten Aktivieren dieser Erweiterung, oder nachdem du sie temporär deaktiviert hast.',
	'PBTG_CHECK'					=> 'Intervall des Cron Tasks zur Gruppenüberprüfung',
	'PBTG_CHECK_EXPLAIN'			=> 'Setzt das Intervall des Cron Tasks, der überprüft ob gebannte User aus der Gruppe entfernt oder hinzugefügt werden müssen. (Standard: 600)',
	'PBTG_ACT_INACTIVE'				=> 'Aktiviere Gruppe für inaktive User',
	'PBTG_ACT_INACTIVE_EXPLAIN'		=> 'Aktiviert die Gruppe für inaktive User. Bitte beachte, wenn du diese Einstellung geändert wird und die aktuellen User der Gruppe entsprechen sollen, so müssen die Gruppen neu synchronisiert werden.',

	'PBTG_RESYNC_SUCCESS'			=> 'Resynchronisierung wurde erfolgreich durchgeführt.',
	'PBTG_INVALID'					=> 'Ungültige Aktion.',
));
