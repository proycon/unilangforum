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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'		=> 'Aqui pode fazer Cópias de Segurança da Base de Dados do Fórum. Os ficheiros podem ser guardados na diretoria <samp>/store</samp>, ou pode transferi-los para o seu computador. Dependendo das configurações do Servidor, o ficheiro poderá ser comprimido em diversos formatos.',
	'ACP_RESTORE_EXPLAIN'		=> 'Esta operação executa uma restauração completa de todas as tabelas do phpBB partir de um ficheiro gravado. Se o seu servidor suporta, pode usar gzip ou ficheiros de texto comprimido bzip2 que eles serão automaticamente descomprimidas. <strong>AVISO</strong> Isto irá substituir quaisquer dados existentes. A restauração pode demorar muito tempo para processar, por favor não saia desta página até que esteja completa. As Cópias de Segurança são armazenadas na diretoria <samp>store/</samp>e são criadas pela funcionalidade de Cópias de Segurança do phpBB. Pode não funcionar se tentar restaurar Cópias de Segurança que não foram criadas pelo phpBB.',

	'BACKUP_DELETE'				=> 'O Ficheiro da Cópia de Segurança foi apagado com sucesso.',
	'BACKUP_INVALID'			=> 'O Ficheiro selecionado para a Cópia de Segurança é inválido.',
	'BACKUP_OPTIONS'			=> 'Opções da Cópia de Segurança',
	'BACKUP_SUCCESS'			=> 'O Ficheiro da Cópia de Segurança foi criado com sucesso.',
	'BACKUP_TYPE'				=> 'Tipo de Cópia de Segurança',

	'DATABASE'					=> 'Ferramentas da Base de Dados',
	'DATA_ONLY'					=> 'Só Dados',
	'DELETE_BACKUP'				=> 'Apagar Cópia de Segurança',
	'DELETE_SELECTED_BACKUP'	=> 'Tem a certeza de que deseja apagar a Cópia de Segurança da Base de Dados selecionada?',
	'DESELECT_ALL'				=> 'Desmarcar todas',
	'DOWNLOAD_BACKUP'			=> 'Transferir Cópia de Segurança',

	'FILE_TYPE'					=> 'Tipo de Ficheiro',
	'FILE_WRITE_FAIL'	=> 'Incapaz de escrever ficheiro para a pasta de armazenamento.',
	'FULL_BACKUP'				=> 'Completa',

	'RESTORE_FAILURE'			=> 'O Ficheiro da Cópia de Segurança deve estar corrompido.',
	'RESTORE_OPTIONS'			=> 'Opções de restauração',
	'RESTORE_SELECTED_BACKUP'	=> 'Tem certeza que deseja restaurar a Cópia de Segurança selecionada?',
	'RESTORE_SUCCESS'			=> 'A Base de Dados foi restaurada com sucesso.<br /><br />O Fórum deverá estar de acordo com o momento em que a cópia de segurança foi feita.',

	'SELECT_ALL'				=> 'Marcar todas',
	'SELECT_FILE'				=> 'Selecionar o Ficheiro',
	'START_BACKUP'				=> 'Iniciar a Cópia de Segurança',
	'START_RESTORE'				=> 'Iniciar restauração',
	'STORE_AND_DOWNLOAD'		=> 'Armazenar e descarregar',
	'STORE_LOCAL'				=> 'Guardar na diretoria /store do Fórum',
	'STRUCTURE_ONLY'			=> 'Só estrutura',

	'TABLE_SELECT'				=> 'Seleção de Tabelas',
	'TABLE_SELECT_ERROR'		=> 'Deve selecionar pelo menos uma Tabela.',
));
