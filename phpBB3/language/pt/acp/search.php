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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aqui pode gerir os índices de pesquisa do Fórum. Desde que normalmente utilize apenas um modo de pesquisa deve apagar todos os outros. Depois de alterar algumas das configurações da pesquisa (e.g. o número mínimo/máximo de caracteres) é preciso recriar o índice para que as novas configurações se tornem efetivas.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aqui pode definir o modo de pesquisa que será utilizado para a execução deste Sistema. Pode configurar várias opções que podem influenciar em quantos processos estas ações serão solicitadas. Algumas destas configurações são as mesmas para todos os modos de pesquisa.',

	'COMMON_WORD_THRESHOLD'					=> 'Limite de palavras comuns',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Palavras que estão incluídas em grande percentagem em todas as Mensagens, são consideradas comuns. As palavras comuns são ignoradas nas pesquisas. Escreva zero para desativar esta opção. Apenas terá efeito se possuir mais de 100 Mensagens.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Deseja alterar o modo de pesquisa? Depois de modificar o seu modo de pesquisa, deverá criar um novo índice para o novo modo selecionado. Se não planeia voltar ao seu modo de pesquisa antigo, poderá excluí-lo.',
	'CONTINUE_DELETING_INDEX'				=> 'Continuar processo de exclusão de índice',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Um processo de exclusão de índice foi iniciado. Para aceder à página de índice da pesquisa novamente deve completar o processo ou cancelá-lo.',
	'CONTINUE_INDEXING'						=> 'Continuar com o processo de indexar anterior',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Um processo de criação de índice foi iniciado. Para aceder à página de índice da pesquisa novamente deve completar o processo ou cancelá-lo.',
	'CREATE_INDEX'							=> 'Criar Índice',

	'DELETE_INDEX'							=> 'Apagar Índice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Excluindo o Índice em progresso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'A pesquisa está a apagar os Índices. Esta ação pode levar alguns minutos.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'		=> 'O MySQL só permite modo de pesquisa de texto comleto a partir da versão MySQL4.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'Índices MySQL de texto comleto só podem ser usados com tabelas MyISAM ou InnoDB. É necessário MySQL 5.6.4 ou posterior para índices de texto comleto em tabelas InnoDB.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'				=> 'Número Total de Mensagens indexadas',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Número mínimo de caracteres das palavras que são indexados para pesquisa. A alteração desta configuração tem de ser feita no mysql por si ou pelo administrador do servidor.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Número máximo de caracteres das palavras que são indexados para pesquisa. A alteração desta configuração tem de ser feita no mysql por si ou pelo administrador do servidor.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'O PostgreSQL só permite modo de pesquisa de texto comleto com PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'				=> 'Número total de mensagens idexadas',
	'FULLTEXT_POSTGRES_VERSION_CHECK'			=> 'versão PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'					=> 'Configuração do Perfil de pesquisa de texto:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Comprimento mínimio da palavra chave',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Comprimento máximo da palavra chave',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'Este modo de pesquisa precisa de PostgreSQL versão 8.3 ou posterior.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'			=> 'Configuração do perfil do texto de pesquisa usado para definir o analisador e o dicionário.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> 'Palavras com pelo menos esta quantidade de caracteres serão incluídas na consulta à Base de Dados.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> 'Palavras que não ultrapassem este número de caracteres serão incluídas na consulta à Base de Dados.',

	'FULLTEXT_SPHINX_CONFIGURE'					=> 'Configure as definições seguintes para gerar o ficheiro sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'					=> 'Caminho para a diretoria de dados',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'			=> 'Será usado para armazenar os índices e ficheiros de log. Deve criar essa diretória fora das diretórias acessíveis na web. (tem de ter uma barra)',
	'FULLTEXT_SPHINX_DELTA_POSTS'				=> 'Número de mensagens atualizadas frequentemente no indice "delta" (ou diário)',
	'FULLTEXT_SPHINX_HOST'						=> 'Servidor de pesquisa Sphinx daemon',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'				=> 'Servidor onde funciona a pesquisa sphinx daemon. Deixe em branco para usar por defeito localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'			=> 'Limite de memória do indexador',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Deve ser sempre inferior à memória RAM disponível. Caso existam problemas regulares de desempenho, estes podem ser causados pelo indexador que poderá estar a consumir muitos recursos. Reduza a quantidade de memória disponível para o indexador.',
	'FULLTEXT_SPHINX_MAIN_POSTS'				=> 'Número de mensagens do índice principal',
	'FULLTEXT_SPHINX_PORT'						=> 'Porta da pesquisa Sphinx daemon',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'				=> 'Porta usada pela servidor onde funciona a pesquisa sphinx daemon. Deixe em branco para usar por defeito a porta 9312 da API Sphinx',
	'FULLTEXT_SPHINX_WRONG_DATABASE'			=> 'A pesquisa sphinx para phpBB apenas suporta MySQL e PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'				=> 'Ficheiro de configuração Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'		=> 'O conteúdo gerado pelo ficheiro de configuração sphinx. Estes dados têm que ser colados no sphinx.conf usado pela pesquisa sphinx daemon. Substitua os espaços em [dbuser] e [dbpassword], pelas credenciais de acesso à sua Base de Dados.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'			=> 'O caminho da diretoria de dados e configuração sphinx e não está definido. Por favor defina-o para gerar o ficheiro de configuração.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configurações Gerais da Pesquisa',
	'GO_TO_SEARCH_INDEX'					=> 'Ir à página inicial da Pesquisa',

	'INDEX_STATS'							=> 'Índice de Estatísticas',
	'INDEXING_IN_PROGRESS'					=> 'Indexação em processo',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'A pesquisa está a indexar todas as mensagens do Fórum. Esta ação pode levar de alguns minutos a várias horas, dependendo do tamanho do Fórum.',

	'LIMIT_SEARCH_LOAD'						=> 'Limite de carga do sistema da Página de Pesquisa',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema de 1 minuto exceder este valor, a página de pesquisa irá desligar-se, 1.0 igual ~100% utilização de um processador. Isto apenas funciona em Servidores UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Núm. Máximo de Caracteres indexados por pesquisa',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Palavras com não mais que estes pequenos caracteres serão indexadas para pesquisa.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo permitido de palavras-chave',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de palavras que o utilizador pode usar nas pesquisas. O valor 0 permite um número ilimitado de palavras.',
	'MIN_SEARCH_CHARS'						=> 'Núm. Mín. de Caracteres indexados por pesquisa',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Palavras com menos que estes pequenos caracteres serão indexadas para pesquisa.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Núm. Mínimo de Caracteres do Nome do Autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os Utilizadores terão que escrever mais do que estes caracteres do Nome enquanto executando uma pesquisa por autor. Se o Nome do Autor for menos que este número ainda pode pesquisar pelas mensagens do autor, escrevendo o nome de utilizador completo.',

	'PROGRESS_BAR'							=> 'Barra de Progresso',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de Segurança nas pesquisas dos Visitantes',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número em segundos que um Visitante tem que esperar entre pesquisas. Se um visitante pesquisar todos os outros têm esperar até que o Intervalo de Segurança termine.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Estão indexadas todas as mensagens até à mensagem id %2$d, %1$d das quais já estavam idexadas neste processo.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'A taxa de indexação é de aproximadamente %1$.1f mensagens por segundo.<br />Indexação em progresso…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Todas as mensagens até à mensagem id %2$d foram removidas do indice de pesquisa.<br />Eliminação em progresso…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Todas as Mensagens foram indexadas na Base de Dados com sucesso.',
	'SEARCH_INDEX_REMOVED'					=> 'O Índice de Pesquisa foi apagado com sucesso.',
	'SEARCH_INTERVAL'						=> 'Intervalo Segurança nas pesquisas para Utilizadores',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número em segundos que os utilizadores devem esperar entre uma pesquisa e outra. Este intervalo é controlado independentemente para cada utilizador.',
	'SEARCH_STORE_RESULTS'					=> 'Tamanho da Cache de resultados da pesquisa',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A Cache dos resultados da pesquisa irá expirar após este tempo, em segundos. Escreva 0 se deseja desativar esta opção.',
	'SEARCH_TYPE'							=> 'Modo de pesquisa',
	'SEARCH_TYPE_EXPLAIN'					=> 'O phpBB permite-lhe selecionar o modo que será utilizado para a pesquisa de textos nos conteúdos da mensagem. Por padrão, será utilizado apenas o próprio sistema de pesquisas por textos completos.',
	'SWITCHED_SEARCH_BACKEND'				=> 'O modo de pesquisa foi selecionado com sucesso. Agora, para utilizá-lo terá que certificar-se da existência de um índice para o modo escolhido.',

	'TOTAL_WORDS'							=> 'Número Total de Palavras indexadas',
	'TOTAL_MATCHES'							=> 'Número Total de Palavras indexadas para relações de Mensagens',

	'YES_SEARCH'							=> 'Ativar Facilidades para Pesquisa',
	'YES_SEARCH_EXPLAIN'					=> 'Ativar funcionalidades de pesquisa especiais incluindo a pesquisa de Membros.',
	'YES_SEARCH_UPDATE'						=> 'Ativar a atualização de textos completos',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Os índices de texto completo são atualizados ao enviar uma mensagem, mesmo se a pesquisa estiver desativada.',
));
