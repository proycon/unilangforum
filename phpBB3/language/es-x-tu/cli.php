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

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Establece esta opción si la opción de configuración cambia con demasiada frecuencia para ser almacenado en caché de manera eficiente.',
	'CLI_CONFIG_CURRENT'				=> 'Valor de configuración actual, usa 0 y 1 para especificar los valores boolean',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Configuración %s borrada correctamente.',
	'CLI_CONFIG_NEW'					=> 'Nuevo valor de configuración, usa 0 y 1 para especificar los valores boolean',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Configuración %s no existe',
	'CLI_CONFIG_OPTION_NAME'			=> 'El nombre de la opción de configuración',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Establece esta opción si el valor debe imprimirse sin una nueva línea al final.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Cantidad a incrementar por',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Configuración incrementada correctamente %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'No se pudo establecer la configuración %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Configuración establecida correctamente %s',

 	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprime una lista de trabajos cron preparados y no preparados.',
 	'CLI_DESCRIPTION_CRON_RUN'					=> 'Ejecuta todas las tareas cron preparadas.',
 	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nombre de la tarea que se ejecutará',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualiza la base de datos mediante la aplicación de migración.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina una opción de configuración',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Deshabilita la extensión especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Habilita la extensión especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Encuentra las migraciones que no dependían.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtiene el valor de una opción de configuración',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Incrementa el valor de una opción de configuración',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista de todas las extensiones de la base de datos y del sistema de archivos.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Ejecutar en modo seguro (sin extensiones).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Iniciar el shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Purga la extensión especificada.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalcula la columna de user_email_hash de la tabla de usuarios.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Establece el valor de una opción de configuración solamente si el valor antiguo coincide con el valor actual',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Establece el valor de una opción de configuración',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'No se pudo deshabilitar la extensión %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Extensión %s deshabilitada correctamente',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'No se pudo habilitar la extensión %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensión %s habilitada correctamente',
	'CLI_EXTENSION_NAME'				=> 'Nombre de la extensión',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'No se pudo purgar la extensión %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Extensión %s purgada correctamente',
	'CLI_EXTENSION_NOT_FOUND'			=> 'No se encontraron extensiones.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponible',
	'CLI_EXTENSIONS_DISABLED'			=> 'Deshabilitada',
	'CLI_EXTENSIONS_ENABLED'			=> 'Habilitada',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Todos los hashes de correo se han recalculado correctamente.',
));
