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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Här kan du ta bort eller inaktivera användare i ditt forum. Konton kan filtreras på flera sätt: Enligt inläggsantal, senaste besöket, osv. Alla dessa kriterier kan kombineras, du kan tex rensa bort användare som inte vart aktiva sen 2002-01-01 och med färre inlägg än 10. Alternativt kan du skriva in en lista över användare direkt i rutan, eventuella kriterier som skrivits in kommer att ignoreras. Var försiktig! När en användare väl är borttagen finns det ingen väg tillbaka.',

	'CRITERIA'					=> 'Kriteria',
	'DEACTIVATE_DELETE'			=> 'Inaktivera eller ta bort',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Välj om användarna ska inaktiveras eller tas bort helt, observera att det inte går att ångra!',
	'DELETE_USERS'				=> 'Ta bort',
	'DELETE_USER_POSTS'			=> 'Ta bort utrensade användares inlägg',
	'DELETE_USER_POSTS_EXPLAIN' => 'Tar bort inlägg som gjorts av borttagna användare, har ingen effekt om användarna inaktiveras.',

	'JOINED_EXPLAIN'			=> 'Ange ett datum i formatet <kbd>ÅÅÅÅ-MM-DD</kbd> Du kan använda båda fälten för att ange en intervall, eller lämna tom för att ha ett öppet fält.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Ange ett datum i formatet <kbd>ÅÅÅÅ-MM-DD</kbd>. Mata in <kbd>0000-00-00</kbd> för att ta bort användare, som aldrig loggat in, <em>Före</em> and <em>Efter</em> kriterier ignoreras.',

	'POSTS_ON_QUEUE'			=> 'Inlägg i väntan på godkännande',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Begrända till användare i en specifik grupp.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Alla grupper',
 	'PRUNE_USERS_LIST'				=> 'Användare som kommer att rensas',
 	'PRUNE_USERS_LIST_DELETE'		=> 'Med de valda kriterierna för utrensning av användare kommer följande användare att tas bort.',
 	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Med de valda kriterierna för utrensning av användare kommer följande användarkonton inaktiveras.',

	'SELECT_USERS_EXPLAIN'		=> 'Skriv in specifika användarnamn här, de kommer att användas istället för kriterierna ovan. Användare med grundarstatus kan inte rensas.',

	'USER_DEACTIVATE_SUCCESS'	=> 'De valda användarna inaktiverades.',
	'USER_DELETE_SUCCESS'		=> 'De valda användarna togs bort.',
	'USER_PRUNE_FAILURE'		=> 'Inga användare stämde in med kriterierna.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Datumet angavs felaktigt, det ska stå i formatet <kbd>ÅÅÅÅ-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Detta kommer att ta bort alla trådar som inte har besvarats eller visats inom det antal dagar du väljer. Om du inte anger ett nummer kommer alla trådar tas bort. Som standard kommer detta inte ta bort anslag och notiser eller trådar som har aktiva omröstningar.',

	'FORUM_PRUNE'		=> 'Kategorirensning',

	'NO_PRUNE'			=> 'Inga kategorier rensades.',

	'SELECTED_FORUM'	=> 'Vald kategori',
	'SELECTED_FORUMS'	=> 'Valda kategorier',

	'POSTS_PRUNED'					=> 'Inlägg rensade',
	'PRUNE_ANNOUNCEMENTS'			=> 'Rensa anslag',
	'PRUNE_FINISHED_POLLS'			=> 'Rensa avslutade omröstningar',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Tar bort trådar med omröstningar som har avslutats.',
 	'PRUNE_FORUM_CONFIRM'			=> 'Är du säker på att du vill rensa de valda kategorierna med de angivna inställningarna? När rensningen väl utförts finns det inget sätt att återfå de borttagna inläggen och trådarna.',
	'PRUNE_NOT_POSTED'				=> 'Dagar sen senaste inlägget',
	'PRUNE_NOT_VIEWED'				=> 'Dagar sen senaste visningen',
	'PRUNE_OLD_POLLS'				=> 'Rensa gamla omröstningar',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Tar bort trådar med omröstningar som inte röstats i på det antal dagar som angavs ovan.',
	'PRUNE_STICKY'					=> 'Rensa notiser',
	'PRUNE_SUCCESS'					=> 'Rensningen utfördes.',

	'TOPICS_PRUNED'		=> 'Trådar rensade',
));
