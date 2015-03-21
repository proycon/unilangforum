<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Овај одељак вам омогућава да бришете или деактивирате кориснике на вашем форуму. Налози могу бити пречишћени на више начина; по броју порука, најскоријој активности, итд. Мерила се могу комбиновати да би се видело који се налози каче. На пример, можете поткресати кориснике са мање од 10 порука, који су такође и неактивни од 2002-01-01. Користите * као џокер за текстуална поља. Други начин, можете заобићи мерила одабира у потпуности уносећи списак корисника (сваког у одвојен ред) непосредно у текстуално поље. Будите опрезни са овом опремом! Када једном обришете корисника, нема начина за враћање поступка.',

	'CRITERIA'				=> 'Мерила',

	'DEACTIVATE_DELETE'			=> 'Деактивирај или обриши',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Изаберите да ли желите да деактивирате кориснике или да их потпуно обришете. Молимо знајте да обрисани корисници не могу бити враћени!',
	'DELETE_USERS'				=> 'Обриши',
	'DELETE_USER_POSTS'			=> 'Обриши поруке поткресаног корисника',
	'DELETE_USER_POSTS_EXPLAIN' => 'Уклања поруке обрисаних корисника, нема никаквог утицаја ако су корисници деактивирани.',

	'JOINED_EXPLAIN'			=> 'Унесите датум у <kbd>ГГГГ-ММ-ДД</kbd> облику. Можете користити оба поља да назначите интервал, или оставите једно поље празно за отворен распон датума.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Унесите датум у <kbd>ГГГГ-ММ-ДД</kbd> облику. Унесите <kbd>0000-00-00</kbd> за поткресивање корисника који се никада нису пријавили, <em>Пре</em> и <em>После</em> услови ће бити занемарени.',

	'POSTS_ON_QUEUE'			=> 'Поруке Чекају Одобрење',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Ограничено на кориснике унутар одабране групе.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Све групе',
	'PRUNE_USERS_LIST'				=> 'Корисници за поткресивање',
	'PRUNE_USERS_LIST_DELETE'		=> 'Са изабраним мерилима за поткресивање корисника следећи налози ће бити уклоњени. Можете уклонити кориснике са списка за брисање одштиклирањем кућице поред њиховог корисничког имена.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Са изабраним мерилима за поткресивање корисника следећи налози ће бити деактивирани. Можете уклонити кориснике са списка за деактивирање одштиклирањем кућице поред њиховог корисничког имена.',

	'SELECT_USERS_EXPLAIN'		=> 'Унесите одређена корисничка имена овде. Она ће бити коришћена у предности према мерилима горе. Оснивачи не могу бити поткресани.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Одабрани корисници су успешно деактивирани.',
	'USER_DELETE_SUCCESS'		=> 'Одабрани корисници су успешно обрисани.',
	'USER_PRUNE_FAILURE'		=> 'Ниједан корисник не задовољава изабрана мерила.',

	'WRONG_ACTIVE_JOINED_DATE'	=> 'Унети датум је погрешан, очекиван је у <kbd>ГГГГ-ММ-ДД</kbd> облику.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ово ће обрисати све теме које нису послате или прегледане у изабраном броју дана. Уколико не унесете број онда ће све теме бити обрисане. По подразумеваном, неће уклонити теме у којима су гласања у току нити ће уклонити лепљиве и саопштења.',

	'FORUM_PRUNE'		=> 'Поткресивање форума',

	'NO_PRUNE'			=> 'Није поткресан ниједан форум.',

	'SELECTED_FORUM'	=> 'Одабрани форум',
	'SELECTED_FORUMS'	=> 'Одабрани форуми',

	'POSTS_PRUNED'					=> 'Поткресане поруке',
	'PRUNE_ANNOUNCEMENTS'			=> 'Поткресивање саопштења',
	'PRUNE_FINISHED_POLLS'			=> 'Поткресивање затворених гласања',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Уклања теме са гласањима која су окончана.',
	'PRUNE_FORUM_CONFIRM'			=> 'Да ли сигурно желите да поткрешете изабране форуме са изабраним поставкама? Једном уклоњени, не постоји начин да вратите поткресане поруке и теме.',
	'PRUNE_NOT_POSTED'				=> 'Дана од последње поруке',
	'PRUNE_NOT_VIEWED'				=> 'Дана од последњег прегледа',
	'PRUNE_OLD_POLLS'				=> 'Поткресивање старих гласања',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Уклања теме са гласањима у којима није гласано одређени број дана.',
	'PRUNE_STICKY'					=> 'Поткресивање лепљивих',
	'PRUNE_SUCCESS'					=> 'Поткресивање форума је било успешно.',

	'TOPICS_PRUNED'		=> 'Поткресане теме',
));
