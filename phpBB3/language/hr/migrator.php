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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, array(
'CONFIG_NOT_EXIST'=>'Config postavka "%s" neočekivano ne postoji.',
'GROUP_NOT_EXIST'=>'Grupa "%s" neočekivano ne postoji.',
'MIGRATION_APPLY_DEPENDENCIES'=>'Primijeni zavisnosti od %s.',
'MIGRATION_DATA_DONE'=>'Instaliran/i podatak/ci: %1$s; vrijeme: %2$.2f sekundi.',
'MIGRATION_DATA_IN_PROGRESS'=>'Instaliranje podataka: %1$s; vrijeme: %2$.2f sekundi.',
'MIGRATION_DATA_RUNNING'=> 'Instaliranje podataka: %s.',
'MIGRATION_EFFECTIVELY_INSTALLED'=>'Migracija je [već] instalirana [preskočeno]: %s.',
'MIGRATION_EXCEPTION_ERROR'=>'Nešto je pošlo po zlu tijekom zahtjeva i iznimka je izbačena. Promjene napravljene prije negoli je došlo do pogreške su, u skladu s našim mogućnostima, vraćene u prethodno stanje, ali bi svejedno trebao/la provjeriti forum za slučaj da je došlo do (po)grešaka.',
'MIGRATION_NOT_FULFILLABLE'=>'Migracija "%1$s" nije u potpunosti “ispunjena” [izvršena]: nedostaje migracija "%2$s".',
'MIGRATION_NOT_VALID'=>'%s nije validna migracija.',
'MIGRATION_SCHEMA_DONE'=>'Instalirana shema: %1$s; vrijeme: %2$.2f sekundi.',
'MIGRATION_SCHEMA_RUNNING'=>'Instaliranje sheme: %s.',
'MODULE_ERROR'=>'Došlo je do pogreške tijekom kreiranja modula: %s.',
'MODULE_INFO_FILE_NOT_EXIST'=>'Nedostaje potrebna info datoteka modula: %2$s.',
'MODULE_NOT_EXIST'=>'Potreban modul "%s" ne postoji.',
'PERMISSION_NOT_EXIST'=>'Postavka dopuštenja "%s" neočekivano ne postoji.',
'ROLE_NOT_EXIST'=>'Set dopuštenja "%s" neočekivano ne postoji.',
// <!-- Kocka je hičena! -->
));
