<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* @Polish locale 2014-07-07 18:24:32 Zespół Olympus.pl $
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
	'PLUPLOAD_ADD_FILES'		=> 'Dodaj pliki',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Dodaj pliki do kolejki wysyłania i naciśnij przycisk rozpoczęcia.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s już oczekuje w kolejce.',
	'PLUPLOAD_CLOSE'			=> 'Zamknij',
	'PLUPLOAD_DRAG'				=> 'Przeciągnij pliki tutaj.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Błąd! Zduplikowany plik.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Można także załączać pliki, przeciągając je do pola tekstowego wiadomości.',
	'PLUPLOAD_ERR_INPUT'		=> 'Nie udało się otworzyć strumienia wejścia.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Nie udało się przenieść przesłanego pliku.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nie udało się otworzyć strumienia wyjścia.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Plik jest za duży:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Błąd! Nieprawidłowa liczba plików.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Nieprawidłowe rozszerzenie pliku:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Zabrakło dostępnej pamięci.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Niepoprawny lub nie istnieje.adres URL serwera.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Złe rozszerzenie pliku.',
	'PLUPLOAD_FILE'				=> 'Plik: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Plik: %s, rozmiar: %d, maks. rozmiar pliku: %d',
	'PLUPLOAD_FILENAME'			=> 'Nazwa pliku',
	'PLUPLOAD_FILES_QUEUED'		=> '%d plików w kolejce',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Błąd ogólny.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Błąd HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Niepoprawny lub nieobsługiwany format pliku obrazka.',
	'PLUPLOAD_INIT_ERROR'		=> 'Błąd inicjowania.',
	'PLUPLOAD_IO_ERROR'			=> 'Błąd IO',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/D',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Błąd bezpieczeństwa.',
	'PLUPLOAD_SELECT_FILES'		=> 'Wybierz pliki',
	'PLUPLOAD_SIZE'				=> 'Rozmiar',
	'PLUPLOAD_SIZE_ERROR'		=> 'Niewłaściwy rozmiar pliku.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Rozpocznij przesyłanie',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Rozpocznij przesyłanie do kolejki',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Zatrzymaj przesyłanie',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Zatrzymaj przesyłanie',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Przesłano %d/%d plików',
));
