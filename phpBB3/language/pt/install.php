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
	'ADMIN_CONFIG'						=> 'Configuração de administração',
	'ADMIN_PASSWORD'					=> 'Senha do Administrador',
	'ADMIN_PASSWORD_CONFIRM'			=> 'Confirme a Senha do Administrador',
	'ADMIN_PASSWORD_EXPLAIN'			=> '(Escolha uma Senha que tenha entre 6 e 30 caracteres).',
	'ADMIN_TEST'						=> 'Verificar as configurações administrativas',
	'ADMIN_USERNAME'					=> 'Nome de Utilizador do Administrador',
	'ADMIN_USERNAME_EXPLAIN'			=> 'Escolha um nome de Utilizador que tenha de 3 a 20 caracteres).',
	'APP_MAGICK'						=> 'Suporte Imagemagick [ Anexos ]',
	'AUTHOR_NOTES'						=> 'Notas do Autor<br />» %s',
	'AVAILABLE'							=> 'Disponível',
	'AVAILABLE_CONVERTORS'				=> 'Conversores Disponíveis',

	'BEGIN_CONVERT'						=> 'Iniciar Conversão',
	'BLANK_PREFIX_FOUND'				=> 'Uma pesquisa nas suas tabelas mostrou uma instalação válida sem utilização de um prefixo para as tabelas.',
	'BOARD_NOT_INSTALLED'				=> 'Não foi encontrada nenhuma instalação',
	'BOARD_NOT_INSTALLED_EXPLAIN'		=> 'Para fazer a conversão tem que ter uma instalação padrão do phpBB3. Visite a página <a href="%s">Instalar o phpBB3 pela primeira vez</a>.',
	'BACKUP_NOTICE'						=> 'Por favor, faça Cópias de Segurança do seu Fórum (Base de Dados e Ficheiros) para a eventualidade de surgirem problemas durante a atualização',

	'CATEGORY'							=> 'Categoria',
	'CACHE_STORE'						=> 'Tipo de cache',
	'CACHE_STORE_EXPLAIN'				=> 'O local físico onde os dados são guardados, ficheiro de sistema é preferível.',
	'CAT_CONVERT'						=> 'Converter',
	'CAT_INSTALL'						=> 'Instalar',
	'CAT_OVERVIEW'						=> 'Visão Geral',
	'CAT_UPDATE'						=> 'Atualizar',
	'CHANGE'							=> 'Alterar',
	'CHECK_TABLE_PREFIX'				=> 'Por favor, verifique o prefixo das tabelas e tente novamente.',
	'CLEAN_VERIFY'						=> 'Limpando e verificando a estrutura final',
	'CLEANING_USERNAMES'				=> 'Limpar utilizadores',
	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> é o nome de utilizador limpo para:',
	'COLLIDING_USERNAMES_FOUND'			=> 'Foram encontrados nomes de utilizador duplicados no seu antigo painel. Para completar esta conversão, por favor, apague ou renomeie estes utilizadores.',
	'COLLIDING_USER'					=> '» ID do utilizador: <strong>%d</strong> nome de utilizador: <strong>%s</strong> (%d mensagens)',
	'CONFIG_CONVERT'					=> 'Convertendo a configuração',
	'CONFIG_FILE_UNABLE_WRITE'			=> 'Não foi possível escrever o ficheiro de configuração. Em baixo são exibidas formas alternativas para a criação deste ficheiro.',
	'CONFIG_FILE_WRITTEN'				=> 'O Ficheiro de configuração foi criado com sucesso. Pode avançar para o próximo passo da instalação.',
	'CONFIG_PHPBB_EMPTY'				=> 'A variável de configuração do phpBB3 para “%s” está vazia.',
	'CONFIG_RETRY'						=> 'Tentar novamente',
	'CONTINUE_CONVERT'					=> 'Continuar a conversão',
	'CONTINUE_CONVERT_BODY'				=> 'Foi detetada uma tentativa prévia de conversão. Deve escolher entre iniciar uma nova conversão ou continuar a conversão interrompida.',
	'CONTINUE_LAST'						=> 'Continuar com esta atualização',
	'CONTINUE_OLD_CONVERSION'			=> 'Continuar a atualização interrompida',
	'CONVERT'							=> 'Converter',
	'CONVERT_COMPLETE'					=> 'Conversão terminada',
	'CONVERT_COMPLETE_EXPLAIN'			=> 'O seu Fórum foi convertido com sucesso para o phpBB 3.1. Já pode <a href="../">Entrar no seu Fórum</a>. Por favor verifique se todas as configurações foram transferidas corretamente antes de ativar o seu Fórum apagando a diretoria install. Lembre-se que está disponível ajuda através do <a href="https://www.phpbb.com/support/documentation/3.0/">Documentação</a> e dos <a href="https://www.phpbb.com/community/viewforum.php?f=46">fóruns de suporte</a>.',
	'CONVERT_INTRO'						=> 'Bem-vindo à conversão unificada do phpBB',
	'CONVERT_INTRO_BODY'				=> 'Aqui é possível de importar dados de outros sistemas de Fóruns (instalados). A lista seguinte mostra os módulos de conversão disponíveis. Se não existe um conversor na lista para o código de Fórum que deseja converter, por favor, verifique no nosso sítio web onde podem estar disponíveis outros conversores.',
	'CONVERT_NEW_CONVERSION'			=> 'Nova conversão',
	'CONVERT_NOT_EXIST'					=> 'O Conversor selecionado não existe',
	'CONVERT_OPTIONS'					=> 'Opções',
	'CONVERT_SETTINGS_VERIFIED'			=> 'A informação que disponibilizou foi verificada. Para iniciar a conversão, clique no botão abaixo.',
	'CONV_ERR_FATAL'					=> 'Erro fatal na conversão',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O envio de anexos por FTP está ativo no seu painel antigo. Desative a opção de envio por FTP, crie uma diretoria válida e envie todos os ficheiros de anexos para a nova diretoria. Após concluir esta operação, reinicie o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não foram encontradas informações de configuração válidas para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não foi possível aceder às informações do Fórum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Não foi possível adquirir as categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível adquirir a configuração do Fórum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Não foi possível aceder/ler "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos Grupos.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Foi encontrada uma inconsistência na tabela de grupos em add_bots() - tem que adicionar todos os Grupos especiais manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir o Motor de Busca na tabela de utilizadores.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir o Motor de Busca na tabela de Motores de Busca.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Não foi possível inserir o utilizador na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mensagem de Erro',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota: tem que especificar $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Não foi indicado o local relativo aos ficheiros do Fórum.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota: tem que especificar $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupo "%1$s" não foi encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota: tem que especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota: tem que especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota: tem que especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Não foi possível inserir ou atualizar as configurações de Permissões.',
	'CONV_ERROR_PM_COUNT'				=> 'Não foi possível selecionar as pastas de MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir um novo Fórum substituindo uma categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir um novo Fórum substituindo um Fórum antigo.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos utilizadores.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no Grupo "%1$s" definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página precisa do acesso ao código do Fórum. Introduza os dados da Base de Dados; o conversor não irá mexer no código atual. O acesso ao código deve ser desativado para evitar erros.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens Guardadas',

	'COULD_NOT_COPY'					=> 'Não foi possível copiar o ficheiro <strong>%1$s</strong> para <strong>%2$s</strong><br /><br />Verifique se a diretoria de destino existe e tem permissão de escrita no Servidor.',
	'COULD_NOT_FIND_PATH'				=> 'Não foi possível encontrar o local para seu Fórum anterior. Por favor, verifique as suas configurações e tente novamente.<br />» O local especificado foi %s',

	'DBMS'								=> 'Tipo de Base de Dados',
	'DB_CONFIG'							=> 'Configuração da Base de Dados',
	'DB_CONNECTION'						=> 'Ligação da Base de Dados',
	'DB_ERR_INSERT'						=> 'Erro ao processar a query <code>INSERT</code>.',
	'DB_ERR_LAST'						=> 'Erro ao processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'				=> 'Erro ao executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'			=> 'Erro ao executar <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'						=> 'Erro ao executar a query <code>SELECT</code>.',
	'DB_HOST'							=> 'Nome do Servidor da Base de Dados / DSN',
	'DB_HOST_EXPLAIN'					=> 'DSN significa Data Source Name e somente é relevante para instalações ODBC. No PostgreSQL, use localhost para ligar ao servidor local através do domínio socket UNIX e 127.0.0.1 para conectar através do TCP. Para SQLite, insira o caminho completo para o ficheiro da sua Base de Dados.',
	'DB_NAME'							=> 'Nome da Base de Dados',
	'DB_PASSWORD'						=> 'Senha da Base de Dados',
	'DB_PORT'							=> 'Porta do Servidor da Base de Dados',
	'DB_PORT_EXPLAIN'					=> 'Só indique se o Servidor utilizar outra que não a porta padrão.',
	'DB_UPDATE_NOT_SUPPORTED'			=> 'Pedimos desculpa, mas esse script não suporta a atualização das versões do phpBB antes de “%1$s”. A versão que tem instalada é “%2$s”. Atualize para uma versão anterior antes de executar este script. Está disponível assistência Suporte Técnico em phpBB.com.',
	'DB_USERNAME'						=> 'Nome de Utilizador da Base de Dados',
	'DB_TEST'							=> 'Teste da ligação',
	'DEFAULT_LANG'						=> 'Idioma padrão do Fórum',
	'DEFAULT_PREFIX_IS'					=> 'O Conversor não encontrou as tabelas com o prefixo indicado. Verifique se as informações do Fórum estão corretas. O Prefixo Padrão para a tabela %1$s é <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'					=> 'Não foi especificado um valor para a variável ficheiro_teste no conversor. Se é utilizador deste conversor, e não deveria estar vendo este erro, por favor, contate o autor do conversor. Se é o autor do conversor, deve especificar o nome de um ficheiro que exista no Fórum de destino para que seja possível a verificação da diretoria.',
	'DIRECTORIES_AND_FILES'				=> 'Configuração de Ficheiro e Diretoria',
	'DISABLE_KEYS'						=> 'Desativando chaves',
	'DLL_FTP'							=> 'Suporte Remoto de FTP [ Instalação ]',
	'DLL_GD'							=> 'Suporte de GD graphics [ Confirmação Visual ]',
	'DLL_MBSTRING'						=> 'Suporte a caracteres Multi-byte',
	'DLL_MSSQL'							=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'					=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'					=> 'MSSQL Server 2005+ [ Nativo ]',
	'DLL_MYSQL'							=> 'MySQL 3.23.x/4.x',
	'DLL_MYSQLI'						=> 'MySQL 4.1.x/5.x com Extensão MySQLi',
	'DLL_ORACLE'						=> 'Oracle',
	'DLL_POSTGRES'						=> 'PostgreSQL',
	'DLL_SQLITE'						=> 'SQLite 2',
	'DLL_SQLITE3'						=> 'SQLite 3',
	'DLL_XML'							=> 'XML support [ Jabber ]',
	'DLL_ZLIB'							=> 'Suporte de compressão zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'							=> 'Transferência da configuração',
	'DL_CONFIG_EXPLAIN'					=> 'Deve descarregar o ficheiro config.php para o seu computador agora, e depois enviá-lo para o FTP, substituindo qualquer ficheiro config.php existente na diretoria raiz do seu phpBB 3.1. Lembre-se de enviar o ficheiro em formato ASCII (veja a documentação do seu software de FTP caso não saiba como fazer). Quando tiver enviado o ficheiro config.php, clique em "Pronto" para seguir para o próximo passo.',
	'DL_DOWNLOAD'						=> 'Transferência',
	'DONE'								=> 'Pronto',

	'ENABLE_KEYS'						=> 'Reativando chaves. Este processo pode demorar alguns minutos',

	'FILES_OPTIONAL'					=> 'Ficheiros opcionais e diretorias',
	'FILES_OPTIONAL_EXPLAIN'			=> '<strong>Opcional</strong> - Estes ficheiros, diretorias ou permissões não são necessários. O processo de instalação tentará usar outras técnicas caso eles não existam ou não tenham as permissões adequadas. No entanto, a presença destes ficheiros, diretorias e permissões irá acelerar o processo de instalação.',
	'FILES_REQUIRED'					=> 'Ficheiros e diretorias',
	'FILES_REQUIRED_EXPLAIN'			=> '<strong>Necessário</strong> - Para funcionar corretamente, o phpBB tem que ter acesso de leitura/escrita a vários ficheiros e diretorias. Se assinalado "Não Encontrado", tem que criar a diretoria ou ficheiro indicado. Se assinalado "Não Escrito", tem que alterar as permissões do ficheiro ou diretoria para permitir que o phpBB posso gravá-lo.',
	'FILLING_TABLE'						=> 'Filling table <strong>%s</strong>',
	'FILLING_TABLES'					=> 'Preenchendo Tabelas',

	'FINAL_STEP'						=> 'Etapa Final do Processo',
	'FORUM_ADDRESS'						=> 'Endereço do Fórum',
	'FORUM_ADDRESS_EXPLAIN'				=> 'Este é o endereço do seu Fórum, ex. <samp>http://www.exemplo.com/phpBB3/</samp>. Se algum endereço for escrito aqui e não deixar em branco, todas as instâncias deste serão substituídas pelo endereço de seu novo painel em mensagens, Mensagens Privadas e assinaturas.',
	'FORUM_PATH'						=> 'Pasta do Fórum',
	'FORUM_PATH_EXPLAIN'				=> 'Este é o caminho <strong>relativo</strong> no disco para o seu antigo fórum da <strong>raiz desta instalação do phpBB3</strong>.',
	'FOUND'								=> 'Encontrado',
	'FTP_CONFIG'						=> 'A transferir a configuração por FTP',
	'FTP_CONFIG_EXPLAIN'				=> 'O phpBB detetou a presença neste servidor dum módulo de FTP. Se desejar, pode tentar enviar o config.php por este método. Tem que introduzir os dados indicados em baixo. O nome de utilizador e senha são referentes ao FTP! (Estas informações devem ser fornecidas pelo seu fornecedor de hospedagem)',
	'FTP_PATH'							=> 'Diretoria no FTP',
	'FTP_PATH_EXPLAIN'					=> 'Este é o local da pasta raiz do seu phpBB, ex. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'						=> 'Enviar',

	'GPL'								=> 'General Public License',

	'INITIAL_CONFIG'					=> 'Configuração Básica',
	'INITIAL_CONFIG_EXPLAIN'			=> 'O instalador determinou o servidor pode executar o phpBB tem de fornecer algumas informações específicas. Se não sabe como se ligar à Base de Dados entre em contacto com o seu fornecedor de alojamento (em primeiro lugar) ou use os fóruns de suporte ao phpBB. Ao inserir os dados, certifique-se que estão corretos antes de continuar.',
	'INSTALL_CONGRATS'					=> 'Parabéns!',
	'INSTALL_CONGRATS_EXPLAIN'			=> '
		Instalou o phpBB %1$s com sucesso. Por favor, proceda à escolha de uma das seguintes opções:</p>
		<h2>Converter um Fórum existente para phpBB3</h2>
		<p>O phpBB Unified Framework Converter suporta a conversão do phpBB 2.0.x e outros sistemas de Fóruns para phpBB3. Se desejar converter um Fórum existente, por favor, <a href="%2$s">siga para o conversor</a>.</p>
		<h2>Parta à descoberta do seu phpBB3!</h2>
		<p>Clicando no botão abaixo acederá ao formulário de apresentação dos dados estatísticos do phpBB no seu Painel de Administração (ACP). Gostaríamos que nos ajudasse enviando essa informação. Depois, deve examinar as opções disponíveis. Lembre-se que existe ajuda online disponível: <a href="https://www.phpbb.com/support/documentation/3.0/">Documentação</a>, <a href="%3$s">Leia-me</a>, <a href="https://www.phpbb.com/community/viewforum.php?f=46">Fórum de Suporte em língua inglesa</a> e o phpBB Portugal.</p><p><strong>Não se esqueça de apagar, renomear ou mover a diretoria de instalação! Enquanto esta diretoria existir, só terá acesso ao Painel de Administração (ACP).</strong>',
	'INSTALL_INTRO'						=> 'Bem-vindo à instalação',

	'INSTALL_INTRO_BODY'				=> 'Esta opção permite instalar o phpBB.</p><p>Durante o processo de instalação necessitará de introduzir as configurações da sua Base de Dados. Se não as conhece, obtenha-as junto do fornecedor do Servidor de Alojamento. Necessitará igualmente de conhecer:</p>

	<ul>
		<li>Tipo da Base de Dados - a Base de Dados que irá utilizar.</li>
		<li>Endereço ou DNS do seu servidor de Base de Dados - o endereço do servidor da Base de Dados.</li>
		<li>Porta do servidor de Base de Dados - a porta do servidor da Base de Dados (geralmente não é necessário).</li>
		<li>Nome da Base de Dados - o nome da Base de Dados no servidor.</li>
		<li>Nome do utilizador e Senha da Base de Dados - os dados para aceder à Base de Dados.</li>
	</ul>

	<p><strong>Nota:</strong> Se a sua instalação utiliza SQLite, tem que indicar o endereço completo dos ficheiros da Base de Dados no campo DNS e deixar em branco o Nome de Utilizador e Senha. Por razões de segurança, deve certificar-se que este ficheiro da Base de Dados não esteja em locais acessíveis pela web.</p>

	<p>Bases de Dados suportadas pelo phpBB3:</p>
	<ul>
		<li>MySQL 3.23 ou superior (Suporte a MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Apenas as Bases de Dados suportadas pelo seu servidor estarão disponíveis.',
	'INSTALL_INTRO_NEXT'				=> 'Para iniciar a instalação, clique o botão abaixo.',
	'INSTALL_LOGIN'						=> 'Entrar',
	'INSTALL_NEXT'						=> 'Próximo passo',
	'INSTALL_NEXT_FAIL'					=> 'Alguns testes falharam, deve corrigir esses problemas antes de continuar para o próximo passo. Caso não o faça a instalação ficará incompleta.',
	'INSTALL_NEXT_PASS'					=> 'Todos os testes básicos foram concluídos, pode continuar para o próximo passo da instalação. Caso tenha modificado alguma permissão, módulo e etc, e deseja refazer os testes, pode refazê-los agora.',
	'INSTALL_PANEL'						=> 'Painel de Instalação',
	'INSTALL_SEND_CONFIG'				=> 'Infelizmente não foi possível escrever as informações de configuração no ficheiro config.php. Ou o ficheiro não existe ou não pode ser escrito. Algumas opções para concluir a instalação estão indicadas abaixo permitindo completar a instalação do config.php.',
	'INSTALL_START'						=> 'Dar inicio à instalação',
	'INSTALL_TEST'						=> 'Testar Novamente',
	'INST_ERR'							=> 'Erro na instalação',
	'INST_ERR_DB_CONNECT'				=> 'Não foi possível ligar à base de dados, leia a mensagem de erro em baixo',
	'INST_ERR_DB_FORUM_PATH'			=> 'O ficheiro da Base de Dados indicado está dentro da estrutura de diretorias do Fórum. Deveria pôr este ficheiro um local não acessível pela web.',
	'INST_ERR_DB_INVALID_PREFIX'		=> 'O prefixo digitado é inválido. Deve começar com uma letra e deve conter apenas letras, números e sublinhados.',
	'INST_ERR_DB_NO_ERROR'				=> 'Nenhuma mensagem de erro foi reportada.',
	'INST_ERR_DB_NO_MYSQLI'				=> 'A versão do Mysql instalado nesta máquina é incompativel com a “MySQL with MySQLi Extension” opção selecionada. Tente com uma outra opção “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'				=> 'A versão da extensão SQLite instalada é muito antiga, tem que atualizá-la para uma superior à 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'			=> 'A versão da extensão SQLite instalada é muito antiga, tem que atualizá-la para pelo menos 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'				=> 'A versão do Oracle instalada nesta máquina exige que sete a variável <var>NLS_CHARACTERSET</var> para o parâmetro <var>UTF8</var>. Pode atualizar a sua instalação para uma posterior à 9.2+ ou alterar o seu parâmetro.',
	'INST_ERR_DB_NO_POSTGRES'			=> 'A Base de Dados selecionada não foi criado na codificação <var>UNICODE</var> ou <var>UTF8</var>. Tente instalar com uma Base de Dados com codificação<var>UNICODE</var> ou <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'				=> 'Deve indicar uma Base de Dados',
	'INST_ERR_EMAIL_INVALID'			=> 'O endereço de email indicado é inválido',
	'INST_ERR_EMAIL_MISMATCH'			=> 'Os emails que escreveu não conferem.',
	'INST_ERR_FATAL'					=> 'Erro fatal de instalação',
	'INST_ERR_FATAL_DB'					=> 'Ocorreu um erro fatal e irrecuperável na Base de Dados. Isso pode ser porque o utilizador especificado não tem permissões adequadas para <code>CRIAR TABELAS</code> ou <code>INSERIR</code> dados, etc. Mais informações podem ser dadas abaixo. Para mais assistência, entre em contacto com seu fornecedor de alojamento, ou consulte os fóruns de suporte de phpBB.',
	'INST_ERR_FTP_PATH'					=> 'Não foi possível mudar para a diretoria indicada, por favor, verifique o caminho.',
	'INST_ERR_FTP_LOGIN'				=> 'Não foi possível ligar ao servidor de FTP. Por favor, verifique o nome de Utilizador e a Senha.',
	'INST_ERR_MISSING_DATA'				=> 'Tem que preencher todos os campos deste bloco.',
	'INST_ERR_NO_DB'					=> 'Não foi possível carregar o módulo PHP para o tipo de Base de Dados selecionado',
	'INST_ERR_PASSWORD_MISMATCH'		=> 'As senhas introduzidas não conferem.',
	'INST_ERR_PASSWORD_TOO_LONG'		=> 'A senha inserida é muito grande. O tamanho máximo é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'		=> 'A senha inserida é muito pequena. O tamanho mínimo é de 6 caracteres.',
	'INST_ERR_PREFIX'					=> 'Já existem tabelas com o prefixo indicado. Por favor, escolha outro prefixo.',
	'INST_ERR_PREFIX_INVALID'			=> 'O prefixo indicado é inválido para a sua Base de Dados. Tente outro, removendo caracteres, como por exemplo o hífen.',
	'INST_ERR_PREFIX_TOO_LONG'			=> 'O prefixo indicado é muito comprido. O comprimento máximo é %d caracteres.',
	'INST_ERR_USER_TOO_LONG'			=> 'O nome de Utilizador indicado é muito comprido. O comprimento máximo é 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'			=> 'O nome de Utilizador indicado é muito curto. O comprimento mínimo é 3 caracteres.',
	'INVALID_PRIMARY_KEY'				=> 'Chave primária inválida : %s',

	'LONG_SCRIPT_EXECUTION'				=> 'Aguarde um momento... Por favor, não interrompa este script.',

	// mbstring
	'MBSTRING_CHECK'					=> 'Verificação da extensão <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'			=> '<strong>Necessário</strong> - <samp>mbstring</samp> é uma extensão do PHP que fornece funções string multibyte. Certas caraterísticas mbstring são incompatíveis com o phpBB e devem ser desativadas.',
	'MBSTRING_FUNC_OVERLOAD'			=> 'Função overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'	=> '<var>mbstring.func_overload</var> deve ser 0 ou 4.',
	'MBSTRING_ENCODING_TRANSLATION'		=> 'Codificação de caracteres transparentes',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> deve ser 0.',
	'MBSTRING_HTTP_INPUT'				=> 'Conversão de caracteres de entrada HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'		=> '<var>mbstring.http_input</var> deve ser <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'				=> 'Conversão de caracteres de saída HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'		=> '<var>mbstring.http_output</var> deve ser <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'				=> 'Por Favor, certifique-se de que esta pasta existe e pode ser escrita pelo servidor e tente novamente:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'				=> 'Por Favor, certifique-se de que estas pastas existem e podem ser escritas pelo servidor e tente novamente:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'		=> 'O seu programa de Base de Dados MySQL está desatualizado. O phpBB detetou um programa para MySQL 3.x/4.x, mas o servidor é executado em MySQL %2$s.<br /><strong>Antes de proceder à sua atualização, tem que atualizar o programa.</strong><br /><br />Por favor, reporte para <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base article about upgrading the MySQL schema</a>. Se encontrar algum problema, use por favor, o <a href="https://www.phpbb.com/community/viewforum.php?f=46">Fórum de Suporte em língua inglesa</a> ou o phpBB Portugal.',
	
	'NAMING_CONFLICT'					=> 'Conflito de nomes: %s e %s são pseudónimos<br /><br />%s',
	'NEXT_STEP'							=> 'Avançar para o próximo passo',
	'NOT_FOUND'							=> 'Não foi possível encontrar',
	'NOT_UNDERSTAND'					=> 'Não foi possível entender %s #%d, tabela %s ("%s")',
	'NO_CONVERTORS'						=> 'Não está disponível nenhum conversor',
	'NO_CONVERT_SPECIFIED'				=> 'Não foi especificado nenhum conversor',
	'NO_LOCATION'						=> 'Não foi possível determinar o local. Se o Imagemagick estiver instalado, pode especificar o local mais tarde no seu Painel de Administração.',
	'NO_TABLES_FOUND'					=> 'Não foi encontrada nenhuma tabela.',

	'OVERVIEW_BODY'						=> 'Bem-vindo ao phpBB3!<br /><br />O phpBB® é a solução de código aberto mais utilizada para sistemas de fóruns. A versão 3 é a mais recente de uma série iniciada no ano 2000. Tal como os seus antecessores, tem uma enorme diversidade de ferramentas, uma interface amigável e de fácil compreensão e é suportado pelo phpBB Team. O phpBB3 reuniu o que de melhor havia para o phpBB2 adicionando as ferramentas mais populares e que não se encontravam presentes nas versões anteriores. Esperamos que esta nova versão exceda as suas expectativas.<br /><br />Este sistema de instalação vai conduzi-lo através de diversas ferramentas, como a instalação do phpBB3, atualização do sistema para a versão mais recente do phpBB3 a partir de versões anteriores, bem como a conversão para phpBB3 de sistemas de Fóruns diferentes, incluindo o phpBB 2.0.x. Para informações mais detalhadas, recomendamos a leitura do <a href="../docs/INSTALL.html">Guia de Instalação (em língua inglesa)</a>.<br /><br />Para conhecer a licença do phpBB3 ou saber como obter ajuda online, selecione as opções no menu lateral. Para continuar, selecione o separador apropriado.',

	'PCRE_UTF_SUPPORT'					=> 'Suporte a PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'O phpBB <strong>não</strong> funcionará se a sua instalação do PHP não for compilada com suporte a UTF-8 na extensão PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Função do PHP getimagesize() está disponível',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Essêncial</strong> - Para o funcionamento correto do phpBB, é necessário que esta função seja disponível.',
	'PHP_JSON_SUPPORT'					=> 'Suporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> '<strong>Necessário</strong> - para que o phpBB funcione corretamente, a extensão PHP JSON tem que estar ativa.',
	'PHP_OPTIONAL_MODULE'				=> 'Módulos Opcionais',
	'PHP_OPTIONAL_MODULE_EXPLAIN'		=> '<strong>Opcional</strong> - Estes módulos ou aplicações são opcionais, não sendo necessários para a utilização do phpBB 3.0. No entanto, se os tiver, obterá maiores funcionalidades.',
	'PHP_SUPPORTED_DB'					=> 'Bases de Dados suportadas',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> '<strong>Necessário</strong> - Deve ter pelo menos uma Base de Dados compatível com o phpBB. Se não há nenhuma Base de Dados disponível, contate o seu fornecedor de Alojamento ou reveja a documentação do phpBB relevante para obter ajuda.',
	'PHP_REGISTER_GLOBALS'				=> 'A configuração do PHP "register_globals" está desativada',
	'PHP_REGISTER_GLOBALS_EXPLAIN'		=> 'O phpBB irá funcionar com esta configuração ativada, mas se possível, recomendamos que a configuração register_globals seja desativada no PHP por motivos de segurança.',
	'PHP_SAFE_MODE'						=> 'Modo Seguro',
	'PHP_SETTINGS'						=> 'Versão do PHP e Configurações',
	'PHP_SETTINGS_EXPLAIN'				=> '<strong>Necessário</strong> - Deve possuír no mínimo a versão 5.3.3, do PHP para instalar o phpBB. Se o "modo seguro" está indicado em baixo, a instalação do PHP decorrerá neste modo. Daí resultarão limitações para a Administração remota e caraterísticas similares.',
	'PHP_URL_FOPEN_SUPPORT'				=> 'Configuração do PHP <var>allow_url_fopen</var> está ativada',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Opcional</strong> - Esta configuração é opcional, no entanto algumas funções, como o Avatar fora do site, não funcionarão.',
	'PHP_VERSION_REQD'					=> 'Versão do PHP >= 5.3.3',
	'POST_ID'							=> 'ID da mensagem',
	'PREFIX_FOUND'						=> 'Um scan às suas tabelas encontrou uma instalação válida utilizando o prefixo <strong>%s</strong> para as tabelas.',
	'PREPROCESS_STEP'					=> 'Executando as funções de pré-processamento',
	'PRE_CONVERT_COMPLETE'				=> 'Todos os passos da pré-conversão foram terminados com sucesso. Pode iniciar o processo de conversão. Por Favor, note que deve ajustar algumas coisas manualmente. Depois da conversão, verifique as permissões atribuídas, reconstrua o índice de Pesquisa se necessário e verifique se os ficheiros foram copiados corretamente, como por exemplo os Avatares as Emoções.',
	'PROCESS_LAST'						=> 'Executando as últimas instruções',

	'REFRESH_PAGE'						=> 'Atualize a página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'				=> 'Se clicar em "Sim", o conversor irá atualizar a página para continuar a conversão até à etapa final. Se esta é uma conversão apenas de teste e para determinação de erros, clique em "Não".',
	'REQUIREMENTS_TITLE'				=> 'Compatibilidade de Instalação',
	'REQUIREMENTS_EXPLAIN'				=> 'Antes de continuar com a instalação completa, o phpBB fará alguns testes à configuração do Servidor e aos ficheiros para garantir a sua instalação e utilização. Leia os resultados com atenção e não continue até que todos os testes necessários terminem. Se desejar selecionar alguma função listada nos testes opcionais, certifique-se que estes são concluídos.',
	'RETRY_WRITE'						=> 'Tentar escrever a configuração novamente',
	'RETRY_WRITE_EXPLAIN'				=> 'Pode alterar as Permissões do ficheiro config.php para permitir que o phpBB escreva nele. Caso modifique as permissões, clique em Tentar Novamente. Lembre-se de voltar às permissões originais do config.php após concluir a instalação.',

	'SCRIPT_PATH'						=> 'Pasta dos Ficheiros',
	'SCRIPT_PATH_EXPLAIN'				=> 'A pasta onde os ficheiros do phpBB estão localizados no seu servidor, (Exemplo: /phpBB3).',
	'SELECT_LANG'						=> 'Selecione o idioma',
	'SERVER_CONFIG'						=> 'Configuração do Servidor',
	'SEARCH_INDEX_UNCONVERTED'			=> 'Os Índices de pesquisa não foram convertidos',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Os antigos índices de pesquisa não foram convertidos. As pesquisas irão dar erro. Para criar um novo índice de pesquisa, vá ao Painel de Administrador, selecione Manutenção e escolha Índice de pesquisa no sub-menu.',
	'SELECT_FORUM_GA'					=> 'No phpBB 3.1 os anúncios globais estão ligados aos fóruns. Selecionar um fórum para os anúncios globais atuais (pode ser movido mais tarde):',
	'SOFTWARE'							=> 'Software do Fórum',
	'SPECIFY_OPTIONS'					=> 'Escolha as Opções de Conversão',
	'STAGE_ADMINISTRATOR'				=> 'Detalhes do Administrador',
	'STAGE_ADVANCED'					=> 'Configurações Avançadas',
	'STAGE_ADVANCED_EXPLAIN'			=> 'As configurações nesta página apenas são necessárias se desejar introduzir modificações à configuração padrão. Todas as configurações presentes nesta página podem ser efetuadas posteriormente no Painel de Administração.',
	'STAGE_CONFIG_FILE'					=> 'Ficheiro de Configuração',
	'STAGE_CREATE_TABLE'				=> 'Criação das Tabelas',
	'STAGE_CREATE_TABLE_EXPLAIN'		=> 'As Tabelas da Base de Dados utilizadas pelo phpBB 3.1 foram criadas com sucesso e atualizadas com as informações iniciais. Continue para o próximo passo para concluir a instalação do phpBB.',
	'STAGE_DATABASE'					=> 'Configuração da Base de Dados',
	'STAGE_FINAL'						=> 'Etapa Final',
	'STAGE_INTRO'						=> 'Introdução',
	'STAGE_IN_PROGRESS'					=> 'Conversão em andamento',
	'STAGE_REQUIREMENTS'				=> 'Exigências',
	'STAGE_SETTINGS'					=> 'Configurações',
	'STARTING_CONVERT'					=> 'Iniciando o Processo do Conversão',
	'STEP_PERCENT_COMPLETED'			=> 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'							=> 'Introdução',
	'SUB_LICENSE'						=> 'Licença',
	'SUB_SUPPORT'						=> 'Suporte',
	'SUCCESSFUL_CONNECT'				=> 'Ligação Completa',
	'SUPPORT_BODY'						=> 'Esta tradução é suportada pelo phpBB Portugal, onde é oferecida ajuda gratuita à comunidade phpBB que usa como língua materna o português de Portugal. No Fórum pode pedir ajuda, expondo as suas dúvidas relativas a:</p><ul><li>Instalação</li><li>Configuração</li><li>Questões técnicas</li><li>Todo o tipo de erros</li><li>Atualizações</li><li>Conversão do phpBB 2.0.x para o phpBB 3.0.x</li><li>Conversão de outros softwares para o phpBB 3.0.x</li><li>Modificações do phpBB</li><li>Estilos</li><li>Tradução do phpBB para português europeu</li><li>...</li></ul><p>O nosso objetivo maior é não deixar nenhum utilizador sem resposta<br /></p><h2>Tradução</h2><p>Todos os créditos deste trabalho são propriedade do phpBB Portugal.<br /> Todas as questões relativas a esta tradução devem ser dirigidas ao phpBB Portugal.<br /> Registe-se e aceda ao Fórum da tradução onde as suas opiniões são esperadas com agrado.</p><h2>Tutoriais</h2><p>Procuraremos disponibilizar tutoriais úteis aos nossos utilizadores</p><h2>Modificações</h2><p>As modificações disponibilizadas serão objeto de tradução, apoio na instalação e configuração.</p><h2>Fórum de suporte ao phpBB em português europeu</h2><p>Temos um Fórum exclusivo para apoio à nossa tradução. As suas sugestões, serão objeto de cuidadosa análise e resposta tão rápida quanto humanamente possível.<br /><br /> A tradução do phpBB para português europeu é a nossa Pedra Preciosa de maior valor.<br /><br /> Conheça-nos e, se gostar, traga um amigo consigo.<br /><br />A Equipa do phpBB Portugal.',
	'SYNC_FORUMS'						=> 'Sincronizar Fóruns',
	'SYNC_POST_COUNT'					=> 'Sincronizar contador de Mensagens',
	'SYNC_POST_COUNT_ID'				=> 'Sincronizar contador de Mensagens para <var>entry</var> %1$s to %2$s.',
	'SYNC_TOPICS'						=> 'Sincronizar Tópicos',
	'SYNC_TOPIC_ID'						=> 'Sincronizando Tópicos a partir do Tópico ID $1%s ao $2%s.',

	'TABLES_MISSING'					=> 'Não foi possível encontrar estas tabelas<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'						=> 'Prefixo das Tabelas na Base de Dados',
	'TABLE_PREFIX_EXPLAIN'				=> 'O prefixo deve começar com uma letra e deve conter apenas letras, números e sublinhados.',
	'TABLE_PREFIX_SAME'					=> 'O Prefixo das Tabelas tem que ser o usado pelo software que está convertendo.<br />» O prefixo de Tabela especificado foi %s',
	'TESTS_PASSED'						=> 'Os testes foram concluídos com sucesso',
	'TESTS_FAILED'						=> 'Testes não concluídos',

	'UNABLE_WRITE_LOCK'					=> 'Não foi possível escrever o ficheiro de bloqueio',
	'UNAVAILABLE'						=> 'Indisponível',
	'UNWRITABLE'						=> 'Não gravável',
	'UPDATE_TOPICS_POSTED'				=> 'Gerando informações de Tópicos enviados',
	'UPDATE_TOPICS_POSTED_ERR'			=> 'Algum erro ocorreu enquanto as informações dos Tópicos eram geradas. Pode tentar novamente esta etapa no Painel de Administração quando a conversão estiver completa.',
	'VERIFY_OPTIONS'					=> 'Verificando as opções da configuração',
	'VERSION'							=> 'Versão',

	'WELCOME_INSTALL'					=> 'Bem-vindo à Instalação do phpBB3',
	'WRITABLE'							=> 'Gravável',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'				=> 'Todos os ficheiros estão atualizados com a última versão do phpBB.',
	'ARCHIVE_FILE'						=> 'Código fonte dentro do ficheiro',

	'BACK'								=> 'Voltar',
	'BINARY_FILE'						=> 'Ficheiro binário',
	'BOT'								=> 'Motor de Busca',

	'CHANGE_CLEAN_NAMES'				=> 'O método utilizado para garantir que um nome de Utilizador não seja usado por múltiplos Utilizadores foi alterado. Existem alguns Utilizadores com o mesmo nome quando comparados com o novo método. Deve excluir ou renomear estes Utilizadores para certificar-se de que cada nome esteja sendo utilizado por apenas um Utilizador antes de continuar.',
	'CHECK_FILES'						=> 'Verificar ficheiros',
	'CHECK_FILES_AGAIN'					=> 'Verificar ficheiros novamente',
	'CHECK_FILES_EXPLAIN'				=> 'Na próxima etapa todos os ficheiros serão verificados com os da atualização - essa operação pode demorar algum tempo caso seja a primeira verificação.',
	'CHECK_FILES_UP_TO_DATE'			=> 'De acordo com a sua Base de Dados a sua versão do phpBB está atualizada. Pode continuar para a verificação dos ficheiros para ter a certeza de que todos os ficheiros estão realmente atualizados com a versão mais recente do phpBB.',
	'CHECK_UPDATE_DATABASE'				=> 'Continuar com o processo de Atualização',
	'COLLECTED_INFORMATION'				=> 'Informação dos ficheiros',
	'COLLECTED_INFORMATION_EXPLAIN'		=> 'Esta é uma lista dos ficheiros que precisam de ser atualizados. Leia as informações para saber o que tem de fazer para os atualizar.',
	'COLLECTING_FILE_DIFFS'				=> 'A verificar os diferentes ficheiros',
	'COMPLETE_LOGIN_TO_BOARD'			=> 'Agora deve <a href="../ucp.php?mode=login">entrar no seu Fórum</a> e verificar se tudo funciona bem. Não se esqueça de eliminar, mover ou apagar a diretoria install!',	
	'CONTINUE_UPDATE_NOW'				=> 'Continuar o processo de atualização agora',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'					=> 'Continue a atualização agora',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'						=> 'Inicio do Conflito - Ficheiro original atual antes da atualização',
	'CURRENT_VERSION'					=> 'Versão Atual',

	'DATABASE_TYPE'						=> 'Base de Dados',
	'DATABASE_UPDATE_COMPLETE'			=> 'A atualização da Base de Dados está completa!',
	'DATABASE_UPDATE_CONTINUE'			=> 'Continuar com a atualização da Base de Dados',
	'DATABASE_UPDATE_INFO_OLD'			=> 'O Ficheiro de atualização da Base de Dados na diretoria de instalação está desatualizado. Por favor, certifique-se de ter enviado a versão correta do Ficheiro.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'A atualização da base de Dados ainda não está completa.',
	'DELETE_USER_REMOVE'				=> 'Apagar Utilizador e as suas Mensagens',
	'DELETE_USER_RETAIN'				=> 'Apagar Utilizador mas deixar as suas Mensagens',
	'DESTINATION'						=> 'Ficheiro de destino',
	'DIFF_INLINE'						=> 'Na linha',
	'DIFF_RAW'							=> 'Diferenças unificadas puras',
	'DIFF_SEP_EXPLAIN'					=> 'Código bloco utilizado na atualização / novo arquivo',
	'DIFF_SIDE_BY_SIDE'					=> 'Lado a lado',
	'DIFF_UNIFIED'						=> 'Diferenças unificadas',
	'DO_NOT_UPDATE'						=> 'Não atualize este Ficheiro',
	'DONE'								=> 'Pronto',
	'DOWNLOAD'							=> 'Transferir',
	'DOWNLOAD_AS'						=> 'Transferir como',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Transferir o Ficheiro das modificações (recomendado)',
	'DOWNLOAD_CONFLICTS'				=> 'Transfira os valores em conflito para este ficheiro',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procure por &lt;&lt;&lt; para encontrar valores em conflito',	
	'DOWNLOAD_UPDATE_METHOD'			=> 'Transferir os Ficheiros modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Depois de transferir os Ficheiros deve descomprimi-los e enviá-los para a diretoria raiz do seu phpBB. Envie os Ficheiros para os seus respetivos locais. Depois de enviar todos os Ficheiros, confira-os novamente clicando no botão abaixo.',

	'EDIT_USERNAME'						=> 'Editar nome de utilizador',
	'ERROR'								=> 'Erro',
	'EVERYTHING_UP_TO_DATE'				=> 'Está concluída a atualização para a última versão do phpBB. Agora deve <a href="%1$s">Ligar-se no seu Fórum</a> e verificar se está tudo bem. Não se esqueça de apagar ou renomear a diretoria de instalação! Por favor envie-nos informações sobre as configurações do seu servidor e Fórum a partir do módulo <a href="%2$s">Enviar estatísticas</a> do ACP.',

	'FILE_ALREADY_UP_TO_DATE'			=> 'O ficheiro já foi atualizado',
	'FILE_DIFF_NOT_ALLOWED'				=> 'O ficheiro não se encontra disponível para ser verificado',
	'FILE_USED'							=> 'A informação foi utilizada de',			// Single file
	'FILES_CONFLICT'					=> 'Ficheiros em conflito',
	'FILES_CONFLICT_EXPLAIN'			=> 'Os ficheiros seguintes apresentam alterações relativamente à versão anterior. Eventuais tentativas de alteração aos ficheiros poderiam criar conflitos. Investigue os conflitos e tente resolvê-los manualmente ou continue a atualização selecionando o método desejado. Se resolver os conflitos manualmente, faça nova verificação aos ficheiros depois de modificados. Pode selecionar o método desejado para todos os Ficheiros. O primeiro irá resultar num Ficheiro onde as linhas em conflito do seu Ficheiro anterior serão perdidas, e o outro irá resultar na perda das modificações no novo ficheiro.',
	'FILES_DELETED'						=> 'Ficheiros apagados',
	'FILES_DELETED_EXPLAIN'				=> 'Os seguintes ficheiros não existem na nova versão. Esses ficheiros devem ser excluídos de sua instalação.',
	'FILES_MODIFIED'					=> 'Ficheiros modificados',
	'FILES_MODIFIED_EXPLAIN'			=> 'Os ficheiros seguintes apresentam alterações relativamente à versão anterior. O novo ficheiro atualizado, resultará da fusão das modificações com o ficheiro atual.',
	'FILES_NEW'							=> 'Novos ficheiros',
	'FILES_NEW_EXPLAIN'					=> 'Os ficheiros seguintes não existem atualmente na sua instalação.',
	'FILES_NEW_CONFLICT'				=> 'Novos Ficheiros em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'		=> 'Os ficheiros seguintes são novos na nova versão do phpBB, mas já existe um ficheiro com o mesmo nome na mesma posição. O ficheiro atual será substituído pelo novo.',
	'FILES_NOT_MODIFIED'				=> 'Ficheiros não modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'		=> 'Os ficheiros seguintes não necessitam de alterações.',
	'FILES_UP_TO_DATE'					=> 'Ficheiros já atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'			=> 'Os ficheiros seguintes já se encontram prontos e não precisam ser atualizados.',
	'FTP_SETTINGS'						=> 'Configurações de FTP',
	'FTP_UPDATE_METHOD'					=> 'Envio de FTP',

	'INCOMPATIBLE_UPDATE_FILES'			=> 'Os ficheiros de atualização encontrados são incompatíveis com a versão do phpBB instalada. A sua versão do phpBB é %1$s e o Ficheiro de atualização é da versão %2$s para %3$s.',
	'INCOMPLETE_UPDATE_FILES'			=> 'Os ficheiros de atualização estão incompletos',
	'INLINE_UPDATE_SUCCESSFUL'			=> 'A Base de Dados foi atualizada com sucesso. Pode continuar com o processo.',

	'KEEP_OLD_NAME'						=> 'Manter o nome de utilizador',

	'LATEST_VERSION'					=> 'Última Versão',
	'LINE'								=> 'Linha',
	'LINE_ADDED'						=> 'Adicionadas',
	'LINE_MODIFIED'						=> 'Alteradas',
	'LINE_REMOVED'						=> 'Apagadas',
	'LINE_UNMODIFIED'					=> 'Não Alteradas',
	'LOGIN_UPDATE_EXPLAIN'				=> 'Pronto para atualizar a sua Instalação. Primeiro tem que ligar-se.',

	'MAPPING_FILE_STRUCTURE'			=> 'Para facilitar a atualização aqui tem a lista dos ficheiros e a respetiva localização.',

	'MERGE_MODIFICATIONS_OPTION'		=> 'Fundir modificação',

	'MERGE_NO_MERGE_NEW_OPTION'			=> 'Não fundir - utilizar novos Ficheiros',
	'MERGE_NO_MERGE_MOD_OPTION'			=> 'Não fundir - utilizar Ficheiros instalados atualmente',
	'MERGE_MOD_FILE_OPTION'				=> 'Fundir modificações (Perde o novo código de phpBB dentro do bloco de conflito)',
	'MERGE_NEW_FILE_OPTION'				=> 'Fundir modificações (Perde código modificado dentro do bloco de conflito)',
	'MERGE_SELECT_ERROR'				=> 'Não selecionou corretamente o modo de unir Ficheiros em conflito.',
	'MERGING_FILES'						=> 'Fundir diferenças',
	'MERGING_FILES_EXPLAIN'				=> 'Modificações finais do ficheiro em atualização.<br /><br />Por favor, aguarde até que o phpBB termine todas as operações nos Ficheiros modificados.',

	'NEW_FILE'							=> 'Fim do Conflito',
	'NEW_USERNAME'						=> 'Novo Utilizador',
	'NO_AUTH_UPDATE'					=> 'Não está autorizado a atualizar este painel',
	'NO_ERRORS'							=> 'Sem Erros',
	'NO_UPDATE_FILES'					=> 'Sem atualização para os ficheiros seguintes',
	'NO_UPDATE_FILES_EXPLAIN'			=> 'Os ficheiros seguintes são novos ou modificados, mas a diretoria em que eles normalmente se encontram não foi encontrada na sua instalação. Se esta lista contém Ficheiros para as diretorias como /language ou /styles que tenha alterado, a sua estrutura de diretorias e a Atualização deverão ficar incompletas.',
	'NO_UPDATE_FILES_OUTDATED'			=> 'Nenhuma diretoria de atualização válida foi encontrada, por favor, certifique-se de ter enviado corretamente os Ficheiros.<br /><br />A sua Instalação <strong>não</strong> está pronta. As atualizações estão disponíveis para a sua Versão do phpBB %1$s, por favor, visite <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> para descarregar o pacote correto para atualizar da Versão %2$s para a Versão %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'		=> 'A sua versão está pronta. Não é necessário executar a ferramenta de atualização. Se deseja ter a absoluta certeza, verifique se enviou corretamente os Ficheiros de Atualização.',
	'NO_UPDATE_INFO'					=> 'A Informação do Ficheiro de atualização não foi encontrada',
	'NO_UPDATES_REQUIRED'				=> 'Não há alterações a fazer',
	'NO_VISIBLE_CHANGES'				=> 'Sem alterações visíveis',
	'NOTICE'							=> 'Aviso',
	'NUM_CONFLICTS'						=> 'Número de conflitos',
	'NUMBER_OF_FILES_COLLECTED'			=> 'Atualmente foram detetadas diferenças em %1$d de %2$d ficheiros.<br />Por favor, aguarde até que todos os ficheiros sejam analisados.',

	'OLD_UPDATE_FILES'					=> 'Os Ficheiros de atualização não estão prontos. Os Ficheiros de atualização encontrados são do phpBB %1$s para o phpBB %2$s, mas a Última Versão do phpBB é a %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'O pacote atual irá atualizar para a versão',
	'PERFORM_DATABASE_UPDATE'			=> 'A atualizar a Base de Dados',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Clique no botão para correr a atualização da Base de Dados. A atualização da Base de Dados tem que ser executada em separado para prevenir eventuais erros. Esta operação pode demorar alguns minutos, por favor, não a interrompa. Depois de finalizada a atualização da Base de Dados, feche a janela e continue o processo de atualização.',
	'PREVIOUS_VERSION'					=> 'Versão Anterior',
	'PROGRESS'							=> 'Progresso',

	'RELEASE_ANNOUNCEMENT'				=> 'Anúncio',
	'RESULT'							=> 'Resultado',
	'RUN_DATABASE_SCRIPT'				=> 'Atualizar Base de Dados',

	'SELECT_DIFF_MODE'					=> 'Selecionar Modo de Diferenciação',
	'SELECT_DOWNLOAD_FORMAT'			=> 'Selecionar Formato do Ficheiro para Transferência',
	'SELECT_FTP_SETTINGS'				=> 'Selecionar Configurações de FTP',
	'SHOW_DIFF_CONFLICT'				=> 'Exibir Diferenças/Conflitos',
	'SHOW_DIFF_DELETED'					=> 'Mostrar conteúdo do ficheiro',
	'SHOW_DIFF_FINAL'					=> 'Exibir Ficheiro Resultante',
	'SHOW_DIFF_MODIFIED'				=> 'Exibir Diferenças Alteradas',
	'SHOW_DIFF_NEW'						=> 'Exibir Conteúdo do Ficheiro',
	'SHOW_DIFF_NEW_CONFLICT'			=> 'Exibir Diferenças',
	'SHOW_DIFF_NOT_MODIFIED'			=> 'Exibir Diferenças',
	'SOME_QUERIES_FAILED'				=> 'Algumas consultas falharam. As declarações e os erros estão listados abaixo.',
	'SQL'								=> 'SQL',
	'SQL_FAILURE_EXPLAIN'				=> 'Provavelmente não há nada de preocupante, a atualização continuará. Para solucionar este problema, deve procurar ajuda no Fórum de Suporte. Veja o <a href="../docs/README.html">README</a> para detalhes em como obter ajuda.',
	'STAGE_FILE_CHECK'					=> 'Verificar Ficheiros',
	'STAGE_UPDATE_DB'					=> 'Atualizar Base de Dados',
	'STAGE_UPDATE_FILES'				=> 'Atualizar Ficheiros',
	'STAGE_VERSION_CHECK'				=> 'Verificação da versão',
	'STATUS_CONFLICT'					=> 'Ficheiro Modificado produzindo conflitos',
	'STATUS_DELETED'					=> 'Ficheiro apagado',
	'STATUS_MODIFIED'					=> 'Ficheiro Modificado',
	'STATUS_NEW'						=> 'Novo Ficheiro',
	'STATUS_NEW_CONFLICT'				=> 'Novo Ficheiro em Conflito',
	'STATUS_NOT_MODIFIED'				=> 'Ficheiro não Modificado',
	'STATUS_UP_TO_DATE'					=> 'O Ficheiro já foi atualizado',

	'TOGGLE_DISPLAY'					=> 'Mostrar/Esconder a Lista de Ficheiros',
	'TRY_DOWNLOAD_METHOD'				=> 'Pode tentar o método de transferência dos Ficheiros modificados.<br />Este método funciona sempre e é também o pacote de atualização recomendado.',
	'TRY_DOWNLOAD_METHOD_BUTTON'		=> 'Tente este método agora',

	'UPDATE_COMPLETED'					=> 'Atualização concluída',
	'UPDATE_DATABASE'					=> 'Atualizar Base de Dados',
	'UPDATE_DATABASE_EXPLAIN'			=> 'Na próxima etapa a Base de Dados será atualizada.',
	'UPDATE_DATABASE_SCHEMA'			=> 'Atualização da estrutura da Base de Dados',
	'UPDATE_FILES'						=> 'Atualizar Ficheiros',
	'UPDATE_FILES_NOTICE'				=> 'Por Favor, certifique-se de ter atualizado os Ficheiros do seu Fórum também, este Ficheiro apenas atualiza a Base de Dados.',
	'UPDATE_INSTALLATION'				=> 'Atualizar Instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'		=> 'Com esta opção, é possível atualizar a instalação do phpBB para a última versão.<br />Durante o processo, todos os ficheiros serão verificados. Pode rever todas as diferenças e ficheiros antes da atualização.<br /><br />A própria atualização do ficheiro pode ser realizada de duas maneiras.</p><h2>Atualização Manual</h2><p>Com esta atualização, apenas transfere a sua seleção pessoal dos ficheiros modificados, e para ter certeza de que não perderá as modificações do seu ficheiro, deve finalizar. Depois de ter transferido este pacote, deve manualmente enviar os ficheiros para as seus respetivas diretorias. Em seguida, pode fazer a verificação dos ficheiros novamente para ver se os moveu corretamente.</p><h2>Atualização automática com FTP</h2><p>Este método é similar ao primeiro, mas não precisa descarregar os ficheiros modificados e enviá-los para o servidor. Isto será executado de forma automática. Para utilizar este método, tem que saber os dados da sua conta no servidor de FTP se isso for pedido. Depois de pronto, será redirecionado para nova verificação dos ficheiros para ter a certeza de que tudo foi atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'				=> ' 

		<h1>Anúncio do Lançamento Oficial</h1> 

		<p>Por Favor, leia O Anúncio do Lançamento Oficial da Nova Versão antes de continuar o processo de atualização, poderá encontrar informações importantes. Também encontrará disponíveis os atalhos para transferência do pacote, bem como o registo das alterações.</p> 

		<br /> 

		<h1>Como Atualizar a sua Instalação</h1> 

		<p>O Método recomendado para a atualização da sua instalação apenas indica as seguintes etapas:</p> 

		<ul style="margin-left: 20px; font-size: 1.1em;"> 
			<li>Vá à <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">Página de Transferências do phpBB.com</a> e descarregue o "Pacote de Atualização do phpBB" correto.<br /><br /></li> 
			<li>Descompate o Ficheiro.<br /><br /></li> 
			<li>Envie as pastas "install" e "vendor" descompatadas para o Servidor (onde está o seu Ficheiro config.php).<br /><br /></li> 
		</ul> 

		<p>Depois de enviado, o seu Fórum ficará inacessível aos Utilizadores normais conforme a diretoria instalação que enviou agora.<br /><br />
		<strong><a href="%1$s" title="%1$s">Agora inicie o Processo de Instalação inserindo no seu navegador o endereço da pasta /install</a>.</strong><br />
		<br /> 
		Em seguida será conduzido ao longo do processo de atualização. Será avisado quando a atualização estiver concluída. 
		</p> 
	',
	'UPDATE_METHOD'						=> 'Método de atualização',
	'UPDATE_METHOD_EXPLAIN'				=> 'Pode escolher o método de atualização desejado. Utilizando o envio por FTP, deverá inserir os dados do seu registo no servidor de FTP. Com este método, os Ficheiros serão automaticamente movidos para o novo local e backups dos Ficheiros antigos serão criados com a extensão .bak ao nome do Ficheiro. Se escolher fazer a transferência dos Ficheiros modificados, poderá descompatá-los e enviá-los depois manualmente para os seus locais corretos.',
	'UPDATE_REQUIRES_FILE'				=> 'O sistema de atualização necessita dos seguintes Ficheiro: %s',
	'UPDATE_SUCCESS'					=> 'A atualização foi executada com sucesso',
	'UPDATE_SUCCESS_EXPLAIN'			=> 'Todos os Ficheiros foram atualizados com sucesso. A próxima etapa envolve verificar todos os Ficheiros novamente para ter certeza de que os Ficheiros foram atualizados corretamente.',
	'UPDATE_VERSION_OPTIMIZE'			=> 'Atualização da versão e optimização das Tabelas',
	'UPDATING_DATA'						=> 'Atualização dos Dados',
	'UPDATING_TO_LATEST_STABLE'			=> 'Atualização da Base de Dados para a nova versão',
	'UPDATED_VERSION'					=> 'Versão atualizada',
	'UPLOAD_METHOD'						=> 'Método de envio',

	'UPDATE_DB_SUCCESS'					=> 'A Base de Dados foi atualizada com sucesso',
	'UPDATE_FILE_SUCCESS'				=> 'Ficheiros atualizados com sucesso.',
	'USER_ACTIVE'						=> 'Utilizador ativo',
	'USER_INACTIVE'						=> 'Utilizador inativo',

	'VERSION_CHECK'						=> 'Verificação da versão',
	'VERSION_CHECK_EXPLAIN'				=> 'Verifica se a sua instalação do phpBB está atualizada.',
	'VERSION_NOT_UP_TO_DATE'			=> 'A sua instalação do phpBB não está atualizada. Por favor, continue com o processo de atualização.',
	'VERSION_NOT_UP_TO_DATE_ACP'		=> 'A sua instalação do phpBB não está atualizada. <br />Abaixo está um link para o anúncio do lançamento, que contém mais informações, bem como instruções sobre a atualização.',
	'VERSION_NOT_UP_TO_DATE_TITLE'		=> 'A sua instalação do phpBB não está atualizada.',
	'VERSION_UP_TO_DATE'				=> 'A sua instalação do phpBB está atualizada. Embora não existam atualizações disponíveis no momento, pode continuar a fim de realizar uma verificação da validade do arquivo.',
	'VERSION_UP_TO_DATE_ACP'			=> 'A sua instalação do phpBB está atualizada. Não há atualizações disponíveis no momento.',
	'VIEWING_FILE_CONTENTS'				=> 'Visualizando conteúdo dos Ficheiros',
	'VIEWING_FILE_DIFF'					=> 'Visualizando diferenças dos Ficheiros',

	'WRONG_INFO_FILE_FORMAT'			=> 'Informação incorreta do formato do Ficheiro',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'			=> 'Atenciosamente, A Administração',
	'CONFIG_SITE_DESC'					=> 'Escreva um pequeno texto a descrever o seu Fórum',
	'CONFIG_SITENAME'					=> 'oseudominio.com',

	'DEFAULT_INSTALL_POST'				=> 'Esta é uma Mensagem de exemplo, (criada automaticamente durante a instalação) do seu novo Fórum phpBB3x. Pode apagar esta Mensagem, o Tópico e o Fórum quando quiser! Se tiver alguma dúvida, sugestão ou comentário sobre esta tradução para português europeu do phpBB3x, consulte a comunidade phpBB Portugal. Da mesma forma, pode visitar-nos, se desejar fazer alguma observação sobre esta tradução e o acordo ortográfico da língua portuguesa Estamos a construir uma Comunidade phpBB em Portugal. O contributo de todos é importante. O nosso compromisso é ajudar quem nos procura. Responderemos a todos os contactos tão rápido quanto possível. A sua participação é o maior incentivo que pode dar-nos. A tradução deste Fórum respeita o acordo ortográfico da língua portuguesa em vigor desde Janeiro de 2009.',

	'FORUMS_FIRST_CATEGORY'				=> 'A minha primeira Categoria',
	'FORUMS_TEST_FORUM_DESC'			=> 'Este é um Fórum de Testes.',
	'FORUMS_TEST_FORUM_TITLE'			=> 'O meu primeiro Fórum',

	'RANKS_SITE_ADMIN_TITLE'			=> 'Administrador',
	'REPORT_WAREZ'						=> 'A mensagem denúnciada contém endereços ilegais ou de software pirateado.',
	'REPORT_SPAM'						=> 'A mensagem denúnciada tem apenas o propósito de anunciar um sítio web ou um produto.',
	'REPORT_OFF_TOPIC'					=> 'A mensagem denúnciada é desnecessária, e não faz sentido.',
	'REPORT_OTHER'						=> 'A mensagem denúnciada não se encaixa em nenhuma outra categoria, use o campo de descrição para especificar uma.',

	'SMILIES_ARROW'						=> 'Seta',
	'SMILIES_CONFUSED'					=> 'Confuso',
	'SMILIES_COOL'						=> 'Porreiro',
	'SMILIES_CRYING'					=> 'A chorar ou muito triste',
	'SMILIES_EMARRASSED'				=> 'Envergonhado',
	'SMILIES_EVIL'						=> 'Maligno ou muito mau',
	'SMILIES_EXCLAMATION'				=> 'Exclamação',
	'SMILIES_GEEK'						=> 'Cromo',
	'SMILIES_IDEA'						=> 'Ideia',
	'SMILIES_LAUGHING'					=> 'Alegre',
	'SMILIES_MAD'						=> 'Furioso',
	'SMILIES_MR_GREEN'					=> 'Sr. Verde',
	'SMILIES_NEUTRAL'					=> 'Neutro',
	'SMILIES_QUESTION'					=> 'Pergunta',
	'SMILIES_RAZZ'						=> 'Gargalhada',
	'SMILIES_ROLLING_EYES'				=> 'Olhos rolantes',
	'SMILIES_SAD'						=> 'Triste',
	'SMILIES_SHOCKED'					=> 'Chocado',
	'SMILIES_SMILE'						=> 'Sorridente',
	'SMILIES_SURPRISED'					=> 'Surpreendido',
	'SMILIES_TWISTED_EVIL'				=> 'Muito Mau',
	'SMILIES_UBER_GEEK'					=> 'Grande Cromo',
	'SMILIES_VERY_HAPPY'				=> 'Muito Feliz',
	'SMILIES_WINK'						=> 'Piscar o olho',

	'TOPICS_TOPIC_TITLE'				=> 'Bem-vindo ao phpBB3x',
));
