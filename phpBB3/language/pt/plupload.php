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
	'PLUPLOAD_ADD_FILES'		=> 'Adicionar ficheiros',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Adicione ficheiros à fila de envio e clique no botão Iniciar.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s já está na fila.',
	'PLUPLOAD_CLOSE'			=> 'Fechar',
	'PLUPLOAD_DRAG'				=> 'Arraste ficheiros para aqui.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Erro de ficheiro duplicado.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Pode anexar ficheiros arrastando-os e soltando-os na caixa de mensagem.',
	'PLUPLOAD_ERR_INPUT'		=> 'Falha ao abrir fluxo de entrada.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Falha ao mover o ficheiro enviado.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Falha ao abrir fluxo de saída.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Ficheiro muito grande:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Erro na contagem de ficheiros.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Extensão de ficheiro inválida:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Não há memória RAM disponível.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL carregado está errado ou não existe.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Extensão do ficheiro errada.',
	'PLUPLOAD_FILE'				=> 'Ficheiro: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Ficheiro: %s, tamanho: %d, tamanho máximo do ficheiro: %d',
	'PLUPLOAD_FILENAME'			=> 'Nome do ficheiro',
	'PLUPLOAD_FILES_QUEUED'		=> '%d ficheiros na fila',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Erro genérico.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Erro HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Formato da imagem errado ou não suportado.',
	'PLUPLOAD_INIT_ERROR'		=> 'Erro Init.',
	'PLUPLOAD_IO_ERROR'			=> 'Erro IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Erro de segurança.',
	'PLUPLOAD_SELECT_FILES'		=> 'Selecione os ficheiros',
	'PLUPLOAD_SIZE'				=> 'Tamanho',
	'PLUPLOAD_SIZE_ERROR'		=> 'Erro no tamanho do ficheiro.',
	'PLUPLOAD_STATUS'			=> 'Estado',
	'PLUPLOAD_START_UPLOAD'		=> 'Iniciar envio',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Iniciar o envio da fila atual',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Parar envio',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Parar envio atual',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Enviados %d/%d ficheros',
));
