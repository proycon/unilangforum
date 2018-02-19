<?php
/**
 * 
 * Prime Ban to Group [Spanish]
 * 
 * @copyright (c) 2014 Wolfsblut ( www.pinkes-forum.de )
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
	'PBTG_SETTINGS_ACP'				=> 'Ajustes',

	'PBTG_TITLE'					=> 'Prime Ban to Group',
	'PBTG_TITLE_EXPLAIN'			=> 'Mueve automáticamente a los usuarios a un grupo especial cuando están excluidos o suspendidos. Esto le permite indicar visualmente su estado a través del uso de atributos de grupo, como una imagen de rango personalizado. Los usuarios serán eliminados del grupo cuando ya no estén excluidos manualmente o cuando su exclusión temporal haya terminado. Los usuarios que ya están excluidos o suspendidos, si instala esta extensión se pueden mover al grupo si resincroniza los grupos.',

	'PBTG_SETTINGS'					=> 'Ajustes de Prime Ban to Group',

	'PBTG_RESYNC'					=> 'Resincronizar grupos',
	'PBTG_RESYNC_EXPLAIN'			=> 'Resincronizar los grupos de excluidos, suspendidos e inactivos de está extensión. Todos los usuarios que no pertenecen a estos grupos serán eliminados, todos los que lo hagan serán agregados. Haga esto después de la activación o desactivación del grupo inactivo y en un primer momento de la activación de esta extensión, o si se desactiva temporalmente.',
	'PBTG_CHECK'					=> 'Intervalo de tarea cron para verificar grupos',
	'PBTG_CHECK_EXPLAIN'			=> 'Establezca el intervalo de tarea cron que comprueba si un usuario excluido no está excluido ya, o debe ser excluido. (Por defecto: 600)',
	'PBTG_ACT_INACTIVE'				=> 'Activar grupo de usuarios inactivos',
	'PBTG_ACT_INACTIVE_EXPLAIN'		=> 'Activa el grupo de usuarios inactivos. Tenga en cuenta que si cambia esta configuración y desea hacer coincidir los usuarios actuales a ella, es necesario volver a resincronizar los grupos.',

	'PBTG_RESYNC_SUCCESS'			=> 'Resincronización completada correctamente.',
	'PBTG_INVALID'					=> 'Acción no válida.',

));
