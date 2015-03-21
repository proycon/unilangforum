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
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo Ortográfico
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
	'ACP_FILES'						=> 'Administração de idiomas',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'O gestor de idiomas permite instalar e desinstalar idiomas no Fórum. O Idioma pré-definido está marcado com um asterisco (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Tem certeza que deseja apagar “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Pacotes de idiomas instalados',

	'LANGUAGE_DETAILS_UPDATED'		=> 'A Configuração dos idiomas foi atualizada com sucesso.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'=> 'O Pacote de idiomas já se encontra instalado.',
	'LANGUAGE_PACK_DELETED'			=> 'O Pacote de idioma “%s” foi removido com sucesso. Foi atribuido o idioma padrão a todos os utilizadores que usavam essa linguagem.',
	'LANGUAGE_PACK_DETAILS'			=> 'Detalhes do Pacote de idiomas',
	'LANGUAGE_PACK_INSTALLED'		=> 'O Pacote de idiomas %s foi instalado com sucesso.',
	'LANGUAGE_PACK_CPF_UPDATE'		=> 'A informação dos campos do perfil personalizado foi copiada do idioma padrão. Altere se necessário.',
	'LANGUAGE_PACK_ISO'				=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'		=> 'Nome do Local',
	'LANGUAGE_PACK_NAME'			=> 'Nome',
	'LANGUAGE_PACK_NOT_EXIST'		=> 'O Pacote de idiomas selecionado não existe.',
	'LANGUAGE_PACK_USED_BY'			=> 'Utilizado por (incluindo robots)',
	'LANGUAGE_VARIABLE'				=> 'Variável de linguagem',
	'LANG_AUTHOR'					=> 'Autor do Pacote de idioma',
	'LANG_ENGLISH_NAME'				=> 'Nome Inglês',
	'LANG_ISO_CODE'					=> 'Código ISO',
	'LANG_LOCAL_NAME'				=> 'Nome local',

	'MISSING_LANG_FILES'			=> 'Ficheiros de linguagem em falta',
	'MISSING_LANG_VARIABLES'		=> 'Variáveis de linguagem em falta',

	'NO_FILE_SELECTED'				=> 'Não foi selecionado o Ficheiro de Linguagem.',
	'NO_LANG_ID'					=> 'Não foi selecionado um pacote de idioma.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Não pode excluir o pacote de idioma Oficial<br />Se deseja excluir este pacote, altere o idioma Oficial do Fórum.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Não há Pacotes de idiomas desinstalados',
	
	'THOSE_MISSING_LANG_FILES'		=> 'Os Ficheiros seguintes estão ausentes da pasta %s de idiomas',
	'THOSE_MISSING_LANG_VARIABLES'	=> 'As variáveis seguintes estão ausentes do %s pacote de idiomas',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pacote de idiomas desinstalados',
));
