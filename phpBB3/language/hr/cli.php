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
if (!defined('IN_PHPBB'))
{
exit;
}
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'CLI_CONFIG_CANNOT_CACHED'=>'Podesi ovu opciju ukoliko se opcije konfiguracije prečesto mijenjaju da bi bile učinkovito pohranjene u priručnu memoriju.',
'CLI_CONFIG_CURRENT'=>'Trenutna konfiguracijska vrijednost.<br />Za određivanje <em>boolean</em> vrijednosti, koristi 0 i 1.',
'CLI_CONFIG_DELETE_SUCCESS'=>'<em>Config</em> %s izbrisan/a.',
'CLI_CONFIG_NEW'=>'Nova konfiguracijska vrijednost.<br />Za određivanje <em>boolean</em> vrijednosti, koristi 0 i 1.',
'CLI_CONFIG_NOT_EXISTS'=>'<em>Config</em> %s ne postoji.',
'CLI_CONFIG_OPTION_NAME'=>'Naziv opcija konfiguracije',
'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'=>'Omogući ukoliko vrijednost treba biti prikazana bez novog redka na kraju.',
'CLI_CONFIG_INCREMENT_BY'=>'Povećanje vrijednosti za',
'CLI_CONFIG_INCREMENT_SUCCESS'=>'<em>Config</em> %s povećan/a.',
'CLI_CONFIG_SET_FAILURE'=>'Nije moguće postaviti <em>config</em> %s.',
'CLI_CONFIG_SET_SUCCESS'=>'<em>Config</em> %s postavljen/a.',
'CLI_DESCRIPTION_CRON_LIST'=>'Prikazuje listu spremnih i nespremnih <em>cron</em> poslova.',
'CLI_DESCRIPTION_CRON_RUN'=>'Pokreće sve spremne <em>cron</em> zadatke.',
'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'=>'Naziv zadatka za pokretanje.',
'CLI_DESCRIPTION_DB_MIGRATE'=>'Ažurira bazu primjenjujući migracije.',
'CLI_DESCRIPTION_DELETE_CONFIG'=>'Izbrisuje opciju konfiguracije.',
'CLI_DESCRIPTION_DISABLE_EXTENSION'=>'Onemogućava određenu ekstenziju.',
'CLI_DESCRIPTION_ENABLE_EXTENSION'=>'Omogućava određenu ekstenziju.',
'CLI_DESCRIPTION_FIND_MIGRATIONS'=>'Pronalazi neovisne migracije.',
'CLI_DESCRIPTION_GET_CONFIG'=>'Pronalazi vrijednost opcije konfiguracije.',
'CLI_DESCRIPTION_INCREMENT_CONFIG'=>'Povećava vrijednost opcije konfiguracije.',
'CLI_DESCRIPTION_LIST_EXTENSIONS'=>'Izlistava sve ekstenzije u bazi i sustavu datoteka.',
// <!-- Kocka je hičena! -->
'CLI_DESCRIPTION_OPTION_SAFE_MODE'=>'Pokreće [se] u sigurnosnom modu [bez ekstenzija].',
'CLI_DESCRIPTION_OPTION_SHELL'=>'Pokretanje ljuske.',
'CLI_DESCRIPTION_PURGE_EXTENSION'=>'Ispražnjuje određenu ekstenziju.',
'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'=>'Rekalkulira <em>user_email_hash</em> stupac korisničke tablice.',
'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'=>'Postavlja vrijednost opcije konfiguracije [samo] ukoliko se stara vrijednost poklapa s trenutnom vrijednošću.',
'CLI_DESCRIPTION_SET_CONFIG'=>'Postavlja vrijednost opcije konfiguracije.',
'CLI_EXTENSION_DISABLE_FAILURE'=>'Nije moguće onemogućiti %s ekstenziju.',
'CLI_EXTENSION_DISABLE_SUCCESS'=>'Ekstenzija %s onemogućena.',
'CLI_EXTENSION_ENABLE_FAILURE'=>'Nije moguće omogućiti %s ekstenziju.',
'CLI_EXTENSION_ENABLE_SUCCESS'=>'Ekstenzija %s omogućena.',
'CLI_EXTENSION_NAME'=>'Naziv ekstenzije',
'CLI_EXTENSION_PURGE_FAILURE'=>'Nije moguće isprazniti %s ekstenziju.',
'CLI_EXTENSION_PURGE_SUCCESS'=>'Ekstenzija %s ispražnjena.',
'CLI_EXTENSION_NOT_FOUND'=>'Nije pronađena niti jedna ekstenzija.',
'CLI_EXTENSIONS_AVAILABLE'=>'Dostupno',
'CLI_EXTENSIONS_DISABLED'=>'Onemogućeno',
'CLI_EXTENSIONS_ENABLED'=>'Omogućeno',
'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'=>'Rekalkulirani <em>user_email_hash</em> stupci korisničkih tablica.',
));
