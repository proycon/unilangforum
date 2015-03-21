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
	'ADMIN_CONFIG'				=> 'Configuració de l’administrador',
	'ADMIN_PASSWORD'			=> 'Contrasenya de l’administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmeu la contrasenya de l’administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Introduïu una contrasenya d’entre 6 i 30 caràcters de longitud.',
	'ADMIN_TEST'				=> 'Comprovació de la configuració de l’administrador',
	'ADMIN_USERNAME'			=> 'Nom d’usuari de l’administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Introduïu un nom d’usuari d’entre 3 i 20 caràcters de longitud.',
	'APP_MAGICK'				=> 'Compatibilitat amb Imagemagick [ Fitxers adjunts ]',
	'AUTHOR_NOTES'				=> 'Notes de l’autor<br />» %s',
	'AVAILABLE'					=> 'Disponible',
	'AVAILABLE_CONVERTORS'		=> 'Convertidors disponibles',

	'BEGIN_CONVERT'					=> 'Inicia la conversió',
	'BLANK_PREFIX_FOUND'			=> 'L’escaneig de les vostres taules ha mostrat una instal·lació vàlida que no utilitza prefix de taules.',
	'BOARD_NOT_INSTALLED'			=> 'No s’ha trobat cap instal·lació',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'L’Entorn unificat de conversió del phpBB necessita una instal·lació bàsica del phpBB3 per funcionar, si us plau <a href="%s">instal·leu abans el phpBB3</a>.',
	'BACKUP_NOTICE'					=> 'Feu una còpia de seguretat del vostre fòrum abans d’actualitzar-lo per si es produís algun problema durant el procés.',

	'CATEGORY'					=> 'Categoria',
	'CACHE_STORE'				=> 'Tipus de memòria cau',
	'CACHE_STORE_EXPLAIN'		=> 'La ubicació física on s’emmagatzema la memòria cau, preferentment el sistema de fitxers.',
	'CAT_CONVERT'				=> 'Converteix',
	'CAT_INSTALL'				=> 'Instal·la',
	'CAT_OVERVIEW'				=> 'Resum',
	'CAT_UPDATE'				=> 'Actualitza',
	'CHANGE'					=> 'Canvia',
	'CHECK_TABLE_PREFIX'		=> 'Si us plau, comproveu el prefix de la taula i torneu a provar-ho.',
	'CLEAN_VERIFY'				=> 'S’està netejant i verificant l’estructura final',
	'CLEANING_USERNAMES'		=> 'S’estan netejant els noms d’usuari',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> és el nom d’usuari net de:',
	'COLLIDING_USERNAMES_FOUND'	=> 'S’han trobat noms d’usuaris que col·lisionen en el vostre antic fòrum. Per tal de completar la conversió elimineu o canvieu el nom d’aquests usuaris per que només hi hagi un usuari al vostre antic fòrum per cada nom d’usuari net.',
	'COLLIDING_USER'			=> '» id d’usuari: <strong>%d</strong> nom d’usuari: <strong>%s</strong> (%d entrades)',
	'CONFIG_CONVERT'			=> 'S’està convertint la configuració',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'No s’ha pogut escriure el fitxer de configuració. A continuació us presentem mètodes alternatius per crear aquest fitxer.',
	'CONFIG_FILE_WRITTEN'		=> 'S’ha escrit el fitxer de configuració. Podeu continuar amb el pas següent de la instal·lació.',
	'CONFIG_PHPBB_EMPTY'		=> 'La variable de configuració del phpBB3 “%s” és buida.',
	'CONFIG_RETRY'				=> 'Reintenta-ho',
	'CONTINUE_CONVERT'			=> 'Continua la conversió',
	'CONTINUE_CONVERT_BODY'		=> 'S’ha trobat un intent de conversió anterior. Podeu triar entre començar una conversió nova o continuar la conversió existent.',
	'CONTINUE_LAST'				=> 'Continua les darreres declaracions',
	'CONTINUE_OLD_CONVERSION'	=> 'Continua la conversió iniciada anteriorment',
	'CONVERT'					=> 'Converteix',
	'CONVERT_COMPLETE'			=> 'S’ha acabat la conversió',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'S’ha convertit el vostre fòrum a phpBB 3.1 correctament. Ja podeu iniciar la sessió i <a href="../">accedir al vostre fòrum</a>. Assegureu-vos de que les configuracions s’han transferit correctament abans d’habilitar el fòrum eliminant el directori “install”. Recordeu que disposeu d’ajuda en línia sobre l’ús del phpBB a la <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">documentació</a> (en anglès), els <a href="https://www.phpbb.com/community/viewforum.php?f=466">fòrums d’assistència oficials</a> (en anglès).',
	'CONVERT_INTRO'				=> 'Benvingut a l’Entorn unificat de conversió del phpBB',
	'CONVERT_INTRO_BODY'		=> 'Aquí podeu importar dades d’altres sistemes de fòrums que tingueu instal·lats. La llista següent mostra tots els mòduls de conversió disponibles actualment. Si a la llista no es mostra el convertidor per al tipus de fòrum que voleu convertir, comproveu si al nostre lloc web hi ha mòduls de conversió nous disponibles per baixar.',
	'CONVERT_NEW_CONVERSION'	=> 'Conversió nova',
	'CONVERT_NOT_EXIST'			=> 'El convertidor especificat no existeix.',
	'CONVERT_OPTIONS'			=> 'Opcions',
	'CONVERT_SETTINGS_VERIFIED'	=> 'S’ha verificat la informació que heu introduït. Per començar el procés de conversió feu clic al botó a sota.',
	'CONV_ERR_FATAL'			=> 'Error fatal de conversió',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Les càrregues FTP per a fitxers adjunts estan habilitades al fòrum antic. Inhabiliteu l’opció de càrregues FTP i assegureu-vos de que hi ha un directori de càrregues vàlid especificat, llavors copieu tots els fitxers adjunts a aquest directori nou accessible des d’Internet. Un cop ho hagueu fet, reinicieu el convertidor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'No hi ha informació de configuració disponible per a la conversió.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'No s’ha pogut obtenir informació d’accés al fòrum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'No s’ha pogut obtenir les categories.',
	'CONV_ERROR_GET_CONFIG'				=> 'No s’ha pogut obtenir la configuració del vostre fòrum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'No s’ha pogut accedir/llegir “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'No s’ha pogut obtenir informació d’autenticació de grups.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'S’ha detectat una inconsistència en la taula de grups a add_bots() - heu d’afegir tots els grups especials si ho feu manualment.',
	'CONV_ERROR_INSERT_BOT'				=> 'No s’ha pogut insertar el robot a la taula users.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'No s’ha pogut insertar el robot a la taula bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'No s’ha pogut insertar l’usuari a la taula user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Error de l’analitzador de missatges',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota per al desenvolupador: heu d’especificar $convertor[\'avatar_path\'] per utilitzar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'No s’ha especificat el camí relatiu al fòrum origen.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota per al desenvolupador: heu d’especificar $convertor[\'avatar_gallery_path\'] per utilitzar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'No s’ha pogut trobar el grup “%1$s” a %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota per al desenvolupador: heu d’especificar $convertor[\'ranks_path\'] per utilitzar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota per al desenvolupador: heu d’especificar $convertor[\'smilies_path\'] per utilitzar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota per al desenvolupador: heu d’especificar $convertor[\'upload_path\'] per utilitzar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'No s’ha pogut inserir/actualitzar la configuració de permisos.',
	'CONV_ERROR_PM_COUNT'				=> 'No s’ha pogut seleccionar el compte de MP de la carpeta.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'No s’ha pogut inserir un fòrum nou per reemplaçar la categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'No s’ha pogut inserir un fòrum nou per reemplaçar el fòrum antic.',
	'CONV_ERROR_USER_ACCESS'			=> 'No s’ha pogut obtenir informació d’autenticació d’usuaris.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup erroni “%1$s” definit a %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Aquesta pàgina recull les dades necessàries per accedir al fòrum d’origen. Introduïu la informació de la base de dades del vostre fòrum antic; el convertidor no canviarà res de la base de dades proporcionada a continuació. És recomanable que el fòrum d’origen estigui inhabilitat per permetre una conversió consistent.',
	'CONV_SAVED_MESSAGES'				=> 'Missatges desats',

	'COULD_NOT_COPY'			=> 'No s’ha pogut copiar el fitxer <strong>%1$s</strong> a <strong>%2$s</strong><br /><br />Si us plau, comproveu que el directori destí existeix i que el servidor web hi té permisos d’escriptura.',
	'COULD_NOT_FIND_PATH'		=> 'No s’ha pogut trobar el camí de l’antic fòrum. Si us plau, comproveu les configuracions i torneu a provar-ho.<br />» El camí d’origen que heu especificat és %s.',

	'DBMS'						=> 'Tipus de base de dades',
	'DB_CONFIG'					=> 'Configuració de la base de dades',
	'DB_CONNECTION'				=> 'Connexió de la base de dades',
	'DB_ERR_INSERT'				=> 'S’ha produït un error en processar una consulta de tipus <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'S’ha produït un error en processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'S’ha produït un error en executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'S’ha produït un error en executar <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'S’ha produït un error en executar una consulta de tipus <code>SELECT</code>.',
	'DB_HOST'					=> 'Nom del servidor de la base de dades o DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN significa nom d’origen de dades (Data Source Name) i només es rellevant per a instal·lacions que utilitzen ODBC. Amb PostgreSQL, utilitzeu localhost per connectar amb el servidor local via UNIX domain socket i 127.0.0.1 per connectar via TCP. Si utilitzeu SQLite, introduïu el camí complet al fitxer de la base de dades.',
	'DB_NAME'					=> 'Nom de la base de dades',
	'DB_PASSWORD'				=> 'Contrasenya de la base de dades',
	'DB_PORT'					=> 'Port del servidor de la base de dades',
	'DB_PORT_EXPLAIN'			=> 'Deixeu-lo en blanc a no ser que el servidor utilitzi un port no estàndard.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Aquest script no permet l’actualització des de versions del phpBB anteriors a la “%1$s”. La versió que teniu instal·lada actualment és la “%2$s”. Si us plau, actualitzeu el phpBB a una versió anterior abans d’utilitzar aquest script. Podeu trobar ajuda sobre aquest tema al fòrum d’assistència (Support Forum) al lloc web phpBB.com.',
	'DB_USERNAME'				=> 'Nom d’usuari de la base de dades',
	'DB_TEST'					=> 'Prova la connexió',
	'DEFAULT_LANG'				=> 'Idioma per defecte del fòrum',
	'DEFAULT_PREFIX_IS'			=> 'El convertidor no ha pogut trobar taules amb el prefix especificat. Assegureu-vos de que heu introduït les dades correctes del fòrum que voleu convertir. El prefix per defecte per a les taules de %1$s és <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'No s’ha especificat cap valor per a la variable test_file al convertidor. Si sou un usuari del convertidor, no hauríeu de veure aquest error, si us plau comuniqueu aquest error a l’autor del convertidor. Si sou l’autor del convertidor, heu d’especificar el nom d’un fitxer que existeixi a la taula origen per que es pugui verificar-ne el camí.',
	'DIRECTORIES_AND_FILES'		=> 'Configuració de carpetes i fitxers',
	'DISABLE_KEYS'				=> 'S’estan desactivant les claus',
	'DLL_FTP'					=> 'Compatibilitat amb FTP remot [ Instal·lació ]',
	'DLL_GD'					=> 'Compatibilitat amb gràfics GD [ Confirmació visual ]',
	'DLL_MBSTRING'				=> 'Compatibilitat amb caràcters multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MSSQLNATIVE'			=> 'MSSQL Server 2005+ [ Natiu ]',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL amb extensió MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL',
	'DLL_SQLITE'				=> 'SQLite 2',
	'DLL_SQLITE3'				=> 'SQLite 3',
	'DLL_XML'					=> 'Compatibilitat amb XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Compatibilitat amb compressió zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Baixada de la configuració',
	'DL_CONFIG_EXPLAIN'			=> 'Podeu baixar el config.php complet al vostre ordinador. Cal que pengeu el fitxer manualment, reemplaçant qualsevol config.php que ja sigui al directori arrel del phpBB 3.1. Assegureu-vos de penjar el fitxer en format ASCII (llegiu la documentació del vostre client FTP si no esteu segur de com fer-ho). Quan hagueu penjat el fitxer config.php feu clic a “Fet” per continuar amb la fase següent.',
	'DL_DOWNLOAD'				=> 'Baixa',
	'DONE'						=> 'Fet',

	'ENABLE_KEYS'				=> 'S’estan reactivant les claus. El procés pot trigar una estona.',

	'FILES_OPTIONAL'			=> 'Fitxers i directoris opcionals',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcionals</strong> - Aquests fitxers, directoris o configuracions de permisos no són necessaris. El sistema d’instal·lació provarà d’utilitzar diverses tècniques per crear-los si no existeixen o no es poden escriure. Això no obstant, la seva presència accelerarà la instal·lació.',
	'FILES_REQUIRED'			=> 'Fitxers i directoris',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Necessaris</strong> - Per tal de funcionar correctament el phpBB ha de poder accedir o escriure determinats fitxers i directoris. Si veieu el missatge “No s’ha trobat” cal que creeu el fitxer o directori en qüestió. Si veieu el missatge “No es pot escriure” cal que canvieu els permisos del fitxer o directori per que el phpBB hi pugui escriure.',
	'FILLING_TABLE'				=> 'S’està omplint la taula <strong>%s</strong>',
	'FILLING_TABLES'			=> 'S’estan omplint les taules',

	'FINAL_STEP'				=> 'Processa el pas final',
	'FORUM_ADDRESS'				=> 'Adreça del fòrum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'És l’URL del vostre antic fòrum, epr exemple <samp>http://www.example.com/phpBB2/</samp>. Si introduïu una adreça en aquest camp i no el deixeu buit, cada aparició d’aquesta adreça serà reemplaçada per l’adreça del vostre fòrum nou als missatges, missatges privats i signatures.',
	'FORUM_PATH'				=> 'Camí del fòrum',
	'FORUM_PATH_EXPLAIN'		=> 'És el camí <strong>relatiu</strong> al disc del <strong>directori arrel d’aquesta instal·lació del phpBB3</strong> al vostre antic fòrum.',
	'FOUND'						=> 'Trobat',
	'FTP_CONFIG'				=> 'Transfereix la configuració per FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'El phpBB ha detectat la presència del mòdul FTP en aquest servidor. Si voleu, podeu intentar instal·lar el fitxer config.php a través d’aquest mòdul. Caldrà que proporcioneu la informació indicada a continuació. Recordeu que el nom d’usuari i la contrasenya són els que utilitzeu per connectar-vos al servidor! Demaneu-los al vostre proveïdor d’hostatge si no els sabeu.',
	'FTP_PATH'					=> 'Camí FTP',
	'FTP_PATH_EXPLAIN'			=> 'És el camí des del directori arrel fins al directori del phpBB, p.ex. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Penja',

	'GPL'						=> 'Llicència pública general',

	'INITIAL_CONFIG'			=> 'Configuració bàsica',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Ara que la instal·lació ha determinat que el vostre servidor és compatible amb el phpBB heu de proporcionar certa informació específica. Si no sabeu com connectar-vos amb la vostra base de dades poseu-vos en contacte amb el vostre proveïdor d’hostatge (en primera instància) o utilitzeu els fòrums de d’asistència del phpBB. En introduir les dades assegureu-vos de comprovar-la abans de continuar.',
	'INSTALL_CONGRATS'			=> 'Felicitats!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		Heu instal·lat correctament el phpBB %1$s. Trieu una de les següents opcions:</p>
		<h2>Convertir un fòrum existent a phpBB3</h2>
		<p>L’Entorn unificat de conversió del phpBB permet la conversió des de phpBB 2.0.x i altres sistemes de fòrums a phpBB3. Si ja teniu un fòrum que voleu convertir, <a href="%2$s">aneu al convertidor</a>.</p>
		<h2>Començar a utilitzar el phpBB3!</h2>
		<p>Si feu clic al botó següent, anireu a un formulari per trametre dades estadístiques per al web del phpBB al Tauler de control de l’administrador (TCA). Us ho agrairíem si ens podessiu ajudar enviant-nos aquesta informació. En acabat, preneu-vos un cert temps per estudiar les opcions que teniu disponibles. Recoreu que disposeu d’ajuda en línia a la <a href="https://www.phpbb.com/support/docs/en/3.1/ug/">documentació</a> (en anglès), el fitxer <a href="%3$s">LLEGIU-ME</a> i els <a href="https://www.phpbb.com/community/viewforum.php?f=466">fòrums d’assistència oficials</a> (en anglès).</p><p><strong>Si us plau elimineu, desplaceu o canvieu el nom del directori “install” abans d’utilitzar els fòrums. Mentre el directori existeixi, només es podrà accedir al Tauler de control de l’administrador (TCA).</strong>',
	'INSTALL_INTRO'				=> 'Benvinguts a la instal·lació',

	'INSTALL_INTRO_BODY'		=> 'Amb aquesta opció podeu instal·lar el phpBB3 en el vostre servidor.</p><p>Per continura necessitareu els paràmetres de configuració de la vostra base de dades. Si no els sabeu, contacteu amb el vostre proveïdor i demaneu-los-hi. Sense ells no podreu continuar. Necessiteu:</p>

	<ul>
		<li>El tipus de base de dades que utilitzareu.</li>
		<li>El nom (adreça) del servidor de la base de dades o DSN.</li>
		<li>El port del servidor de la base de dades (en la majoria de casos no us farà falta).</li>
		<li>El nom de la base de dades al servidor.</li>
		<li>L’usuari de la base de dades i la contrasenya utilitzats per iniciar-hi la sessió i accedir a les dades.</li>
	</ul>

	<p><strong>Nota:</strong> si utilitzeu SQLite per la instal·lació, cal que introduïu el camí complet fins al fitxer de la base de dades al camp DSN i deixeu els camps d’usuari i contrasenya en blanc. Per raons de seguretat, assegureu-vos de que el fitxer de la base de dades no sigui en una ubicació accessible des d’Internet.</p>

	<p>phpBB3 és compatible amb les següents bases de dades:</p>
	<ul>
		<li>MySQL 3.23 o superior (compatible amb MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 o superior (directament o via ODBC)</li>
		<li>MS SQL Server 2005 o superior (natiu)</li>
		<li>Oracle</li>
	</ul>

	<p>Només es mostraran les bases de dades disponibles al vostre servidor.',
	'INSTALL_INTRO_NEXT'		=> 'Per iniciar la instal·lació feu clic al botó següent.',
	'INSTALL_LOGIN'				=> 'Inici de sessió',
	'INSTALL_NEXT'				=> 'Fase següent',
	'INSTALL_NEXT_FAIL'			=> 'Algunes verificacions han fallat i cal que corregiu aquests problemes abans de procedir a la fase següent. Si no ho feu, és probable que la instal·lació quedi incompleta.',
	'INSTALL_NEXT_PASS'			=> 'Tots les verificacions bàsiques han tingut èxit i podeu procedir a la fase següent de la instal·lació. Si heu canviat algun permís, mòduls, etc. podeu refer la verificació.',
	'INSTALL_PANEL'				=> 'Tauler d’instal·lació',
	'INSTALL_SEND_CONFIG'		=> 'El phpBB no ha pogut escriure la informació de configuració directament al vostre fitxer config.php. Això es pot deure a que el fitxer no existeix o que no es pot escriure. A continuació se us indiquen una sèrie d’opcions que us pemeten completar la instal·lació del fitxer config.php.',
	'INSTALL_START'				=> 'Comença la instal·lació',
	'INSTALL_TEST'				=> 'Torna-ho a verificar',
	'INST_ERR'					=> 'Error d’instal·lació',
	'INST_ERR_DB_CONNECT'		=> 'No s’ha pogut connectar amb la base de dades, l’error es mostra a continuació.',
	'INST_ERR_DB_FORUM_PATH'	=> 'El fitxer de la base de dades que heu especificat es troba dintre de l’arbre de carpetes del fòrum. És molt recomanable que poseu aquest fitxer en una ubicació que no sigui accessible des d’Internet.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'El prefix que heu introduït no es vàlid. Ha de començar amb una lletra i només pot contenir lletres, números o el caràcter de subratllat.',
	'INST_ERR_DB_NO_ERROR'		=> 'No s’ha rebut el missatge d’error.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'La versió de MySQL instal·lada en aquesta màquina no és compatible amb l’opció “MySQL amb extensió MySQLi” que heu seleccionat. Proveu-ho amb l’opció “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'La versió de l’extensió SQLite que teniu instal·lada és massa antiga, cal que l’actualitzeu, com a mínim, a la versió 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'La versió de l’extensió SQLite que teniu instal·lada és massa antiga, cal que l’actualitzeu, com a mínim, a la versió 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'		=> 'La versió d’Oracle instal·lada en aquesta màquina requereix que fixeu el paràmetre <var>NLS_CHARACTERSET</var> a <var>UTF8</var>. Podeu actualitzar la base de dades a la versió 9.2+ o bé canviar el paràmetre.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'La base de dades que heu seleccionat no s’ha creat amb codificació <var>UNICODE</var> o <var>UTF8</var>. Feu la instal·lació sobre una base de dades amb codificació <var>UNICODE</var> o <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'No s’ha especificat el nom de la base de dades.',
	'INST_ERR_EMAIL_INVALID'	=> 'L’adreça electrònica que heu introduït no és vàlida.',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Les adreces electròniques que heu introduït no coincideixen.',
	'INST_ERR_FATAL'			=> 'Error fatal d’instal·lació',
	'INST_ERR_FATAL_DB'			=> 'S’ha produït un error fatal no recuperable de la base de dades. La causa pot ser que l’usuari especificat no tinguo els permisos adequats per utilitzar les comandes <code>CREATE TABLES</code> o <code>INSERT</code>, etc. Pot ser que se us doni més informació a continuació. Contacteu amb el vostre proveïdor d’hostatge en primera instància o els fòrums d’assistència del phpBB per obtenir ajuda addicional.',
	'INST_ERR_FTP_PATH'			=> 'No s’ha pogut anar al directori indicat, comproveu el camí.',
	'INST_ERR_FTP_LOGIN'		=> 'No s’ha pogut iniciar la sessió al servidor FTP, comproveu el nom d’usuari i la contrasenya.',
	'INST_ERR_MISSING_DATA'		=> 'Heu d’omplir tots els camps d’aquest bloc.',
	'INST_ERR_NO_DB'			=> 'No s’ha pogut carregar el mòdul del PHP per al tipus de base de dades seleccionat.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Les contrasenyes que heu introduït no coincideixen.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'La contrasenya que heu introduït és massa llarga. La longitud màxima és de 30 caràcters.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'La contrasenya que heu introduït és massa curta. La longitud mínima és de 6 caràcters.',
	'INST_ERR_PREFIX'			=> 'Ja existeixen taules amb el prefix especificat, trieu-ne un altre.',
	'INST_ERR_PREFIX_INVALID'	=> 'El prefix de taula que heu especificat no és vàlid per a la vostra base de dades. Trieu-ne un altre que no dugui caràcters com ara el guió.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'El prefix de taula que heu especificat és massa llarg. La longitud màxima és de %d caràcters.',
	'INST_ERR_USER_TOO_LONG'	=> 'El nom d’usuari que heu introduït és massa llarg. La longitud màxima és de 20 caràcters.',
	'INST_ERR_USER_TOO_SHORT'	=> 'El nom d’usuari que heu introduït és massa curt. La longitud mínima és de 3 caràcters.',
	'INVALID_PRIMARY_KEY'		=> 'Clau primària no vàlida: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Tingueu en compte que aquest procés pot trigar una estona... Si us plau no atureu l’script.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Comprovació de l’extensió <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Necessàri</strong> - <samp>mbstring</samp> és una extensió del PHP que proporciona funcions per a cadenes multibyte. Determinades característiques de mbstring no són compatibles amb el phpBB i cal desactivar-les.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Sobrecàrrega de funcions',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> ha de valer 0 o 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codificació de caràcters transparent',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> ha de valer 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Conversió de caràcters d’entrada HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> ha de valer <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversió de caràcters de sortida HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> ha de valer <samp>pass</samp>.',

	'MAKE_FOLDER_WRITABLE'		=> 'Asegureu-vos que el directori existeix i que el servidor web hi pot escriure abans de tornar-ho a provar:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Asegureu-vos que els directoris existeixen i que el servidor web hi pot escriure abans de tornar-ho a provar:<br />»<strong>%s</strong>.',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'El vostre esquema de base de dades MySQL per al phpBB és obsolet. El phpBB ha detectat un esquema per MySQL 3.x/4.x però el servidor utlitza MySQL %2$s.<br /><strong>Abans de continuar amb l’actualització del phpBB, cal que actualitzeu l’esquema de la base de dades.</strong><br /><br />Si us plau consulteu <a href="https://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">l’article de la Base de Coneixements sobre l’actualització de l’esquema de MySQL</a> (en anglès). Si us trobeu algun problema, utilitzeu <a href="https://www.phpbb.com/community/viewforum.php?f=466">els nostres fòrums d’assistència</a> (en anglès).',

	'NAMING_CONFLICT'			=> 'Conflicte de noms: %s i %s són àlies<br /><br />%s',
	'NEXT_STEP'					=> 'Procedeix al pas següent',
	'NOT_FOUND'					=> 'No s’ha trobat',
	'NOT_UNDERSTAND'			=> 'No s’ha comprès %s #%d, taula %s (“%s”)',
	'NO_CONVERTORS'				=> 'No hi ha cap convertidor disponible per utilitzar.',
	'NO_CONVERT_SPECIFIED'		=> 'No s’ha especificat cap convertidor.',
	'NO_LOCATION'				=> 'No s’ha pogut determinar la ubicació. Si sabeu que l’Imagemagick està instal·lat, podeu especificar la ubicació després des del Tauler de control de l’administrador',
	'NO_TABLES_FOUND'			=> 'No s’ha trobat cap taula.',

	'OVERVIEW_BODY'				=> 'Benvingut al phpBB3!<br /><br />El phpBB® és el programari lliure de fòrums més utilitzat del món. EL phpBB3 és la darrera versió d’un producte que va començar l’any 2000. Com els seus predecessors, el phpBB3 inclou moltes funcions, és amigable i disposa d’asistencia completa per part de l’equip del phppBB. El phpBB3 millora ampliament allò que va fer el phpBB2 popular i afegeix funcions sol·licitades freqüentment que no eren presents en versions anteriors. Esperem que sobrepassi les vostres espectatives.<br /><br />El sistema d’instal·lació us guiarà pel procés d’instal·lar el phpBB3, actualitzar des de versions anteriors a la versió més recent del phpBB3, o convertir al phpBB3 des de sistemes de fòrums diferents (el phpBB2 inclòs). Per obtenir més informació, us recomanem que llegiu <a href="../docs/INSTALL.html">la guia d’instal·lació</a>.<br /><br />Per llegir la llicència del phpBB3 o esbrinar com obtenir asistència i la nostra posició al respecte, seleccioneu les opcions adients del menú lateral. Per continuar, seleccioneu la pestanya adequada a sobre.',

	'PCRE_UTF_SUPPORT'				=> 'Compatibilita amb PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'El phpBB <strong>no</strong> s’executarà si la vostra instal·lació del PHP no ha estat compilada amb compatibilitat per UTF-8 i l’extensió PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'La funció getimagesize() del PHP està disponible',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Necessari</strong> - Per que el phpBB funcioni correctament, la funció getimagesize ha d’estar disponible.',
	'PHP_JSON_SUPPORT'				=> 'Compatibilitat PHP per JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'		=> '<strong>Necessari</strong> - Per que el phpBB funcioni correctament, l’extensió de PHP per JSON ha d’estar disponible.',
	'PHP_OPTIONAL_MODULE'			=> 'Mòduls opcionals',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Aquests mòduls o aplicacions són opcionals. Això no obstant, si estan disponibles s’habilitaran funcions addicionals.',
	'PHP_SUPPORTED_DB'				=> 'Bases de dades compatibles',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Necessari</strong> - El PHP ha de funcionar amb almenys una base de dades compatible. Si no es mostra cap mòdul de base de dades cal que contacteu amb el vostre proveïdor d’hostatge o revisar la documentació d’instal·lació relevant del PHP.',
	'PHP_REGISTER_GLOBALS'			=> 'El paràmetre <var>register_globals</var> del PHP està inhabilitat',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'El phpBB pot funcionar amb aquest paràmetre habilitat però, si és possible, és recomanable que es dehabiliti register_globals per raons de seguretat.',
	'PHP_SAFE_MODE'					=> 'Mode segur',
	'PHP_SETTINGS'					=> 'Versió del PHP i configuracions',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Necessari</strong> - Cal que tingueu com a mínim la versió 5.3.3 del PHP per instal·lar el phpBB. Si es mostra <var>mode segur</var> a sota, la vostra instal·lació del PHP s’està executant en aquest mode. Això imposa limitacions en l’administració remota i funcions similars.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'El paràmetre <var>allow_url_fopen</var> del PHP està habilitat',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Aquest parpàmetre és opcional, això no obstant, determinades funcions del phpBB com ara els avatars externs no funcionaran correctament si està inhabilitat.',
	'PHP_VERSION_REQD'				=> 'Versió del PHP >= 5.3.3',
	'POST_ID'						=> 'ID de l’entrada',
	'PREFIX_FOUND'					=> 'Un escaneig de les vostres taules ha mostrat una instal·lació vàlida que utilitza <strong>%s</strong> com a prefix de taula.',
	'PREPROCESS_STEP'				=> 'S’estan executant les funcions/consultes de preprocessament',
	'PRE_CONVERT_COMPLETE'			=> 'S’han completat correctament tots els passos previs a la conversió. Ja podeu començar el procés de conversió en sí. Tingueu en compte que és possible que hagueu fer diverses tasques i ajustaments de forma manual. Després de la conversió, comproveu especialment els permisos assignats, reconstruïu l’índex de cerca si fos necessari i assegureu-vos de que els fitxers com ara els avatars i les emoticones s’han copiat correctament.',
	'PROCESS_LAST'					=> 'S’estan processant les darreres comandes',

	'REFRESH_PAGE'				=> 'Refresca aquesta pàgina per continuar amb la conversio',
	'REFRESH_PAGE_EXPLAIN'		=> 'Si trieu Sí, el convertidor refrescará la pàgina per continuar amb la conversió després d’acabar un pas. Si aquesta és la vostra primera conversió per fer proves i determinar qualsevol error per endavant us recomanem que trieu No.',
	'REQUIREMENTS_TITLE'		=> 'Compatibilitat amb la instal·lació',
	'REQUIREMENTS_EXPLAIN'		=> 'Abans de procedir amb la instal·lació completa el phpBB farà algunes verificacions de la configuració i els fitxers del vostre servidor per assegurar-se que podeu instal·lar-lo i executar-lo. Assegureu-vos de llegir els resultats meticulosament i no continueu fins que totes les proves necessàries tinguin èxit. Si voleu utilitzar alguna de les funcions que depenen de les proves opcionals, cal assegurar-se que aquestes també tinguin èxit.',
	'RETRY_WRITE'				=> 'Reintenta escriure la configuració',
	'RETRY_WRITE_EXPLAIN'		=> 'Podeu canviar els permisos del fitxer config.php per permetre que el phpBB hi escrigui. Si és així, podeu fer clic sobre “Reintenta-ho”. Recordeu-vos de restaurar els permisos del fitxer config.php un cop el phpBB hagi acabat la instal·lació.',

	'SCRIPT_PATH'				=> 'Camí de l’script',
	'SCRIPT_PATH_EXPLAIN'		=> 'El camí on està ubicat el phpBB relatiu al nom de domini, p.ex. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Seleccioneu un idioma',
	'SERVER_CONFIG'				=> 'Configuració del servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> 'No s’ha convertit l’índex de cerques',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'No s’ha convertit el vostre índex de cerques antic. Les cerques tornaran sempre un resultat buit. Per crear un índex de cerques nou aneu al Tauler de control de l’administrador, seleccioneu Manteniment i trieu Índex de cerques del submenú.',
	'SELECT_FORUM_GA'			=> 'Al phpBB 3.1 els avisos globals estan enllaçats a fòrums. Seleccioneu un fòrum per a l’avís global actual (el podreu moure més tard):',
	'SOFTWARE'					=> 'Programari del fòrum',
	'SPECIFY_OPTIONS'			=> 'Especifiqueu les opcións de conversió',
	'STAGE_ADMINISTRATOR'		=> 'Informació de l’administrador',
	'STAGE_ADVANCED'			=> 'Configuracions avancades',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Les configuracions d’aquesta pàgina només són necessàries si sabeu que són diferents de les que hi ha per defecte. Si no esteu segur, simplement continueu a la següent pàgina ja que aquestes configuracions es poden canviar posteriorment des del Tauler de control de l’administrador.',
	'STAGE_CONFIG_FILE'			=> 'Fitxer de configuració',
	'STAGE_CREATE_TABLE'		=> 'Crea les taules de la base de dades',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Les taules de la base de dades utilitzades pel phpBB 3.1 s’han creat i s’han omplert amb algunes dades inicials. Continueu a la pantalla següent per finalitzar la instal·lació del phpBB.',
	'STAGE_DATABASE'			=> 'Configuració de la base de dades',
	'STAGE_FINAL'				=> 'Fase final',
	'STAGE_INTRO'				=> 'Introducció',
	'STAGE_IN_PROGRESS'			=> 'Conversió en curs',
	'STAGE_REQUIREMENTS'		=> 'Requisits',
	'STAGE_SETTINGS'			=> 'Configuracions',
	'STARTING_CONVERT'			=> 'S’està iniciant el procés de conversió',
	'STEP_PERCENT_COMPLETED'	=> 'Pas <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introducció',
	'SUB_LICENSE'				=> 'Llicència',
	'SUB_SUPPORT'				=> 'Assistència',
	'SUCCESSFUL_CONNECT'		=> 'Connexió correcta',
	'SUPPORT_BODY'				=> 'Es proporciona assistencia completa per a la verió estable actual del phpBB3, de forma gratuïta. Això inclou:</p><ul><li>instal·lació</li><li>configuració</li><li>preguntes tècniques</li><li>problemes relacionats amb possibles errades del programari</li><li>actualitzacions des de les versions candidates (RC) a la versió estable més recent</li><li>conversió des del phpBB 2.0.x al phpBB3</li><li>conversió des d’altres programaris de fòrums al phpBB3 (veieu el <a href="https://www.phpbb.com/community/viewforum.php?f=486">Fòrum de Conversors</a>)</li></ul><p>Recomanem als usuaris que encara estiguin utilitzant versions beta del phpBB3 que substitueixin la seva instalació amb una còpia neta de la versió més recent.</p><h2>Extensions / Estils</h2><p>Per questions relacionades amb les Extensions, dirigiu-vos al <a href="https://www.phpbb.com/community/viewforum.php?f=451">Fòrum d’Extensions</a>.<br />Per questions relacionades amb els estils, plantilles i temes gràfics, dirigiu-vos al <a href="https://www.phpbb.com/community/viewforum.php?f=471">Fòrum d’estils</a>.<br /><br />Si la vostra pregunta està relacionada amb un paquet determinat, feu-la directament al tema dedicat al paquet.</p><h2>Obtenció d’assistència</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">El paquet de benvinguda al phpBB</a><br /><a href="https://www.phpbb.com/support/">Secció d’assistència</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Guia d’inici ràpid</a><br /><br />Per assegurar-vos que us manteniu al dia amb les darreres notícies i versions, <a href="https://www.phpbb.com/support/">subscriviu-vos a la nostra llista de correu</a>.<br /><br />',
	'SYNC_FORUMS'				=> 'S’està iniciant la sincronització dels fòrums',
	'SYNC_POST_COUNT'			=> 'S’està sincronitzant post_counts',
	'SYNC_POST_COUNT_ID'		=> 'S’està sincronitzant post_counts des de <var>entry</var> %1$s a %2$s.',
	'SYNC_TOPICS'				=> 'S’està iniciant la sincronització dels temes',
	'SYNC_TOPIC_ID'				=> 'S’estan sincronitzant els temes del <var>topic_id</var> %1$s al %2$s.',

	'TABLES_MISSING'			=> 'No s’han pogut trobar les taules següents<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefix de les taules a la base de dades',
	'TABLE_PREFIX_EXPLAIN'		=> 'El prefix ha de començar amb una lletra i només pot contenir lletres, números o el caràcter de subratllat.',
	'TABLE_PREFIX_SAME'			=> 'El prefix de les taules ha de ser el que utilitza el fòrum quu esteu convertint.<br />» El prefix de taules que heu especificat és %s.',
	'TESTS_PASSED'				=> 'Les proves han tingut èxit',
	'TESTS_FAILED'				=> 'Les proves han fallat',

	'UNABLE_WRITE_LOCK'			=> 'No s’ha pogut escriure el fixter de bloqueig.',
	'UNAVAILABLE'				=> 'No disponible',
	'UNWRITABLE'				=> 'No escrivible',
	'UPDATE_TOPICS_POSTED'		=> 'S’està generant la informació dels temes publicats',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'S’ha produït un error mentre es generava la informació dels temes publicats. Podeu reintentar aquest pas al TCA quan acabi el procés de conversió.',
	'VERIFY_OPTIONS'			=> 'S’estan verificant les opcions de conversió',
	'VERSION'					=> 'Versió',

	'WELCOME_INSTALL'			=> 'Benvingut a la instal·lació del phpBB3',
	'WRITABLE'					=> 'Escrivible',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Tots els fitxers estan al dia amb la darrera versió del phpBB.',
	'ARCHIVE_FILE'				=> 'Fitxer font dintre de l’arxiu',

	'BACK'				=> 'Torna',
	'BINARY_FILE'		=> 'Fitxer binari',
	'BOT'				=> 'Aranya/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'El mètode per assegurar-se que un nom d’usuari no és utilitzat per múltiples usuaris ha canviat. Hi ha alguns usuaris que tenen el mateix nom quan se’ls compara amb el nou mètode. Abans de continuar, cal que elimineu o canvieu el nom d’aquests usuaris per assegurar-vos que cada nom només l’utilitza un usuari.',
	'CHECK_FILES'					=> 'Comprova els fitxers',
	'CHECK_FILES_AGAIN'				=> 'Torna a comprovar els fitxers',
	'CHECK_FILES_EXPLAIN'			=> 'En el pas següent tots els fitxers es comprovaran amb els fitxers actualitzats - això pot trigar una estona si es tracta de la primera comprovació de fitxers.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Segons la base de dades la vostra versió està al día. Podeu continuar amb la comprovació de fitxers per assegurar-vos de que tots els fitxers realment estan al dia amb la versió més recent del phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continua el procés d’actualització',
	'COLLECTED_INFORMATION'			=> 'Informació dels fitxers',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'La llista següent mostra informació dels fitxers que s’han d’actualitzar. LLegiu la informació al davant de cada bloc d’estat per veure que signifiquen i què cal que feu per realitzar l’actualització amb èxit.',
	'COLLECTING_FILE_DIFFS'			=> 'S’estan recollint les diferències dels fitxers',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'És recomanable que <a href="../ucp.php?mode=login">inicieu la sessió al vostre fòrum</a> i comproveu que tot funciona correctament. No oblideu eliminar, canviar el nom o desplaçar el directori “install”!',
	'CONTINUE_UPDATE_NOW'			=> 'Continua el procés d’actualització ara',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Continua l’actualització ara',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Començament del conflicte - Codi del fitxer original abans de l’actualització',
	'CURRENT_VERSION'				=> 'Versió actual',

	'DATABASE_TYPE'						=> 'Tipus de base de dades',
	'DATABASE_UPDATE_COMPLETE'			=> 'S’ha completat l’actualització de la base de dades.',
	'DATABASE_UPDATE_CONTINUE'			=> 'Continua amb l’actualització de la base de dades',
	'DATABASE_UPDATE_INFO_OLD'			=> 'El fitxer d’actualització de base de dades que hi ha al directori “install” és massa antic. Assegureu-vos de penjar la versió correcta del fitxer.',
	'DATABASE_UPDATE_NOT_COMPLETED'		=> 'Encara no s’ha completat l’actualització de la base de dades.',
	'DELETE_USER_REMOVE'				=> 'Elimina l’usuari i suprimeix-ne les entrades',
	'DELETE_USER_RETAIN'				=> 'Elimina l’usuari però conserva’n les entrades',
	'DESTINATION'						=> 'Fitxer de destí',
	'DIFF_INLINE'						=> 'En línia',
	'DIFF_RAW'							=> 'Diferència crua unificada',
	'DIFF_SEP_EXPLAIN'					=> 'Bloc de codi utilitzat al fitxer nou/actualitzat',
	'DIFF_SIDE_BY_SIDE'					=> 'Un al costat de l’altre',
	'DIFF_UNIFIED'						=> 'Diferència unificada',
	'DO_NOT_UPDATE'						=> 'No actualitzeu aquest fitxer',
	'DONE'								=> 'Fet',
	'DOWNLOAD'							=> 'Baixa',
	'DOWNLOAD_AS'						=> 'Baixa com',
	'DOWNLOAD_CONFLICTS'				=> 'Baixa els conflictes per aquest fitxer',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Cerqueu la cadena &lt;&lt;&lt; per localitzar els conflictes',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Baixa l’arxiu de fitxers modificats (recomanat)',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Baixa l’arxiu de fitxers modificats',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Quan l’hagueu baixat, heu de descomprimir l’arxiu. Hi trobareu els fitxers modificats que heu de penjar al directori arrel del phpBB. Pengeu els fitxers a les seves ubicacions respectives. Un cop hagueu penjat tots els fitxers, torneu a fer la comprovació de fitxers amb l’altre botó a sota.',

	'EDIT_USERNAME'	=> 'Edita el nom d’usuari',
	'ERROR'			=> 'Error',
	'EVERYTHING_UP_TO_DATE'		=> 'El fòrum està actualitzat amb la versió del phpBB més recent.  És recomanable que <a href="%1$s">inicieu la sessió al vostre fòrum</a> i comproveu que tot funciona correctament. No oblideu eliminar, canviar el nom o desplaçar el directori “install”! Si us plau, envieu-nos informació actualitzada sobre la configuració del vostre servidor i el vostre fòrum des del mòdul d’<a href="%2$s">Enviament d’estadístques</a> del TCA.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'El fitxer ja està al dia.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'No es poden buscar les diferències del fitxer.',
	'FILE_USED'						=> 'Informació usada de',			// Single file
	'FILES_CONFLICT'				=> 'Fitxers amb conflictes',
	'FILES_CONFLICT_EXPLAIN'		=> 'Els fitxers següents estan modificats i no representen els fitxers originals de la versió antiga. El phpBB ha determinat que aquests fitxers provocaran conflictes si s’intenta fusionar-los. Investigueu els conflictes i proveu de resoldre’ls manualment o continueu l’actualització triant el mètode de fusió que preferiu. Si resoleu els conflictes manualment, torneu a comprovar els fitxers després de modificar-los. Tambés és possible triar el mètode de fusió preferit per cada fitxer. El primer mètode tindrà com a resultat un fitxer en què les línies amb conflictes del vostre fitxer antic s’han perdut, l’altre tindrà com a resultat un fitxer on s’han perdut els canvis del fitxer nou.',
	'FILES_DELETED'					=> 'Fitxers eliminats',
	'FILES_DELETED_EXPLAIN'			=> 'Els fitxers següents no existeixen a la versió nova. Heu d’eliminar aquests fitxers.',
	'FILES_MODIFIED'				=> 'Fitxers modificats',
	'FILES_MODIFIED_EXPLAIN'		=> 'Els fitxers següents estan modificats i no representen els fitxers originals de la versió antiga. El fitxer actualitzat serà una fusió del les vostres modificacions i el fitxer nou.',
	'FILES_NEW'						=> 'Fitxers nous',
	'FILES_NEW_EXPLAIN'				=> 'Els fitxers següents no existeixen a la vostra instal·lació. Aquests fitxers s’afegiran a la vostra instal·lació.',
	'FILES_NEW_CONFLICT'			=> 'Fitxers nous amb conflictes',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Els fitxers següents són nous per a la versió més recent però s’ha determinat que ja hi ha un fitxer amb el mateix nom a la mateixa ubicació. Es sobreescriurà aquest fitxer amb la versió nova.',
	'FILES_NOT_MODIFIED'			=> 'Fitxers no modificats',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Els fitxers següents no s estan modificats i representen els fitxer originals de la versió del phpBB que esteu actualitzant.',
	'FILES_UP_TO_DATE'				=> 'Fitxers ja actualitzats',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Els fitxers següents ja estan al dia i no cal actualitzar-los.',
	'FTP_SETTINGS'					=> 'Configuracions FTP',
	'FTP_UPDATE_METHOD'				=> 'Penja per FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Els fitxers d’actualització trobats no són compatibles amb la versió que teniu instal·lada. La vostra versió és la %1$s i els fitxers d’actualització són per actualitzar del phpBB %2$s al %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Els fitxers actualitzats són incomplets.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'S’ha actualitzat la base de dades correctament. Ara cal que continueu amb el procés d’actualització.',

	'KEEP_OLD_NAME'		=> 'Conserva el nom d’usuari',

	'LATEST_VERSION'		=> 'Versió més recent',
	'LINE'					=> 'Línia',
	'LINE_ADDED'			=> 'Afegit',
	'LINE_MODIFIED'			=> 'Modificat',
	'LINE_REMOVED'			=> 'Eliminat',
	'LINE_UNMODIFIED'		=> 'No modificat',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Per actualitzar la vostra instal·lació primer cal que inicieu la sessió.',

	'MAPPING_FILE_STRUCTURE'	=> 'Per facilitar el procés de penjada aquí teniu les ubicacions dels fitxers per a la vostra instal·lació del phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Fusiona les modificacions',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'No el fusionis - utilitza el fitxer nou',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'No el fusionis - utilitza el fitxer instal·lat actualment',
	'MERGE_MOD_FILE_OPTION'		=> 'Fusiona les modificacions (suprimeix el codi nou del phpBB al bloc amb conflictes',
	'MERGE_NEW_FILE_OPTION'		=> 'Fusiona les modificacions (suprimeix el codi modificat al bloc amb conflictes',
	'MERGE_SELECT_ERROR'		=> 'Els modes de fusió dels fitxers amb conflicte no s’han seleccionat correctament.',
	'MERGING_FILES'				=> 'S’estan fusionant les diferències',
	'MERGING_FILES_EXPLAIN'		=> 'S’estan recollint els canvis finals de fitxers.<br /><br />Si us plau, espereu fins que el phpBB hagi acabat totes les operacions sobre els fitxers canviats.',

	'NEW_FILE'						=> 'Fi del conflicte',
	'NEW_USERNAME'					=> 'Nom d’usuari nou',
	'NO_AUTH_UPDATE'				=> 'No esteu autoritzat per realitzar l’actualització',
	'NO_ERRORS'						=> 'No hi ha hagut cap error',
	'NO_UPDATE_FILES'				=> 'No s’actualitzaran els fitxers següents',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Els fitxers següents són nous o modificats però no s’ha pogut trobar el directori on estan ubicats normalment en la vostra instal·lació. Si aquesta llista conté fitxers per a directoris que no siguin language/ o styles/ llavors és possible que hagueu modificat la vostra estructura de directoris i l’actualització pot ser incompleta.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'No s’ha trobat cap directori vàlid d’actualització, assegureu-vos de que heu penjat els fitxers rellevants.<br /><br />La vostra instal·lació <strong>no</strong> sembla estar al dia. Hi ha actualitzacions disponibles per a la vostra versió del phpBB %1$s, visiteu <a href="https://www.phpbb.com/downloads/" rel="external">https://www.phpbb.com/downloads/</a> per obtenir el paquet informàtic correcte per fer l’actualització de la versió %2$s a la versió %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'La vostra versió está al dia. No cal que executeu l’eina d’actualització. Si desitgeu fer una comprovació d’integritat dels vostres fitxers, assegureu-vos de que heu penjat els fitxers actualitzats correctes.',
	'NO_UPDATE_INFO'				=> 'Update file information could not be found.',
	'NO_UPDATES_REQUIRED'			=> 'No cal cap actualització',
	'NO_VISIBLE_CHANGES'			=> 'No hi ha canvis visibles',
	'NOTICE'						=> 'Avís',
	'NUM_CONFLICTS'					=> 'Nombre de conflictes',
	'NUMBER_OF_FILES_COLLECTED'		=> 'De moment, s’han comprovat les diferències de %1$d dels %2$d fitxers.<br />Si us plau, espereu fins que es comprovin tots els fitxers.',

	'OLD_UPDATE_FILES'		=> 'Els fitxers d’actualització no estan al dia. Els fitxers d’actualització que s’han trobat són per actualitzar del phpBB %1$s al phpBB %2$s però la versió més recent del phpBB és la %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Aquest paquest informàtic actualitza a la versió',
	'PERFORM_DATABASE_UPDATE'			=> 'Realitza l’actualització de la base de dades',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'A continuació trobareu un botó a l’script d’actualització de la base de dades. L’actualització de la base de dades pot trigar una estona, per tant, no n’atureu l’execució tot i que sembli que s’ha penjat. Després que s’hagi realitzat l’actualització de la base de dades, simplement seguiu les instruccions per continuar amb el procés d’actualització.',
	'PREVIOUS_VERSION'					=> 'Versió anterior',
	'PROGRESS'							=> 'Progrés',

	'RELEASE_ANNOUNCEMENT'		=> 'Avís',
	'RESULT'					=> 'Resultat',
	'RUN_DATABASE_SCRIPT'		=> 'Actualitza la base de dades ara',

	'SELECT_DIFF_MODE'			=> 'Seleccioneu el mode de diferències',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccioneu el format per baixar l’arxiu',
	'SELECT_FTP_SETTINGS'		=> 'Seleccioneu els paràmetres FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Mostra les diferències/conflictes',
	'SHOW_DIFF_DELETED'			=> 'Mostra el contingut del fitxer',
	'SHOW_DIFF_FINAL'			=> 'Mostra el fitxer resultant',
	'SHOW_DIFF_MODIFIED'		=> 'Mostra les diferències fusionades',
	'SHOW_DIFF_NEW'				=> 'Mostra els continguts del fitxer',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Mostra les diferències',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Mostra les diferències',
	'SOME_QUERIES_FAILED'		=> 'Algunes consultes han fallat, les comandes i els errors es llisten a continuació.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'És probable que no us en hagueu de preocupar, l’actualització continuarà normalment. Si no s’aconseguís acabar, podeu demanar ajuda als nostres fòrums d’assistència. Disposeu de més detalls sobre com obtenir ajuda al <a href="../docs/README.html">LLEGIU-ME</a>.',
	'STAGE_FILE_CHECK'			=> 'Comprovació dels fitxers',
	'STAGE_UPDATE_DB'			=> 'Actualització de la base de dades',
	'STAGE_UPDATE_FILES'		=> 'Actualització dels fitxers',
	'STAGE_VERSION_CHECK'		=> 'Comprovació de la versió',
	'STATUS_CONFLICT'			=> 'Fitxer modificat amb conflictes',
	'STATUS_DELETED'			=> 'Fitxer eliminat',
	'STATUS_MODIFIED'			=> 'Fitxer modificat',
	'STATUS_NEW'				=> 'Fitxer nou',
	'STATUS_NEW_CONFLICT'		=> 'Fitxer nou amb conflictes',
	'STATUS_NOT_MODIFIED'		=> 'Fitxer no modificat',
	'STATUS_UP_TO_DATE'			=> 'Fitxer ja actualitzat',

	'TOGGLE_DISPLAY'			=> 'Mostra/Oculta la llista de fitxers',
	'TRY_DOWNLOAD_METHOD'		=> 'Podeu intentar el mètode de baixar els fitxers modificats.<br />Aquest mètode sempre funciona i també és el procediment d’actualització recomanat.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Intenta aquest mètode',

	'UPDATE_COMPLETED'				=> 'S’ha acabat l’actualització',
	'UPDATE_DATABASE'				=> 'Actualitza la base de dades',
	'UPDATE_DATABASE_EXPLAIN'		=> 'En el pas següent s’actualitzarà la base de dades.',
	'UPDATE_DATABASE_SCHEMA'		=> 'S’està actualitzant l’esquema de la base de dades',
	'UPDATE_FILES'					=> 'Actualitza els fitxers',
	'UPDATE_FILES_NOTICE'			=> 'Assegureu-vos de que també heu actualitzat els fitxers del fòrum, aquest fitxer només actualitza la base de dades.',
	'UPDATE_INSTALLATION'			=> 'Actualitza la instal·lació del phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Amb aquesta opció és possible actualitzar la vostra instal·lació del phpBB a la versió més recent.<br />Durant el procés es comprovaran tots els vostres fitxers per verificar-ne la integritat. Podeu revisar totes les diferències i fitxers abans de l’actualització.<br /><br />L’actualització de fitxers en sí es pot fer de dues maneres diferents.</p><h2>Actualització manual</h2><p>Amb aquesta actualització només baixeu el vostre conjunt personal de fitxers modificats per assegurar-vos de que no perdeu les modificacions que hagueu fet als fitxers. Després de baixar aquest paquet informàtic cal que pengeu manualment els fitxers a la seva ubicació correcta dintre del directori arrel del phpBB. Quan hagueu acabat, podeu tornar a fer la comprovació de fitxers per veure si heu mogut els fitxers a la seva ubicació correcta.</p><h2>Actualització automàtica amb FTP</h2><p>Aquest mètode és similar al primer però no cal baixar els fitxers modificats i penjar-los manualment ja que es farà automàticament. Per utilitzar aquest mètode heu de saber la informació necessària per iniciar una sessió FTP ja que se us demanarà. Quan hagueu acabat se us redirigirà a la comprovació de fitxers una altra vegada per assegurar-vos de que s’ha actualitzat tot correctament.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Avís de llançament</h1>

		<p>Llegiu l’avís de llançament de la versió més recent abans de continuar amb el procés d’actualització, és possible que contingui informació útil. També conté enllaços a les baixades completes així com el registre de canvis.</p>

		<br />

		<h1>Com actualitzar la vostra instal·lació amb el Paquet d’actualització automàtica</h1>

		<p>La manera recomanada per actualitzar la vostra instal·lació indicada aquí només és vàlida per al Paquet d’actualització automàtica. També podeu actualitzar la vostra instal·lació utilitzant els mètodes indicats al document INSTALL.html. Els passos per actualitzar el phpBB3 automàticament són:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Aneu a la <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">pàgina de baixades de phpBB.com</a> i baixeu l’arxiu "Automatic Update Package".<br /><br /></li>
			<li>Descomprimiu l’arxiu.<br /><br /></li>
			<li>Pengeu els directoris “install” i"vendor" complets i descomprimits al directori arrel del phpBB (on es troba el fitxer config.php).<br /><br /></li>
		</ul>

		<p>Un cop penjat el fòrum els usuaris normals no podran accedir al fòrum degut a la presència del directori “install” que heu penjat.<br /><br />
		<strong><a href="%1$s" title="%1$s">Inicieu ara el procés d’actualització dirigint el vostre navegador al directori “install”</a>.</strong><br />
		<br />
		Llavors se us guiarà pel procés d’actualització. Rebreu un avís quan l’actualització hagi acabat.
		</p>
	',
	'UPDATE_METHOD'					=> 'Mètode d’actualització',
	'UPDATE_METHOD_EXPLAIN'			=> 'Podeu triar el vostre mètode d’actualització preferit. Utilitzar la penjada per FTP us mostrarà un formulari en el qual he d’introduir la informació del vostre compte. Amb aquest mètode els fitxers es desplaçaran automàticament a la nova ubicació i es crearan còpies de seguretat dels fitxers antics afegint l’extensió .bak al nom del fitxer. Si trieu baixar els fitxers modificats podeu descomprimir-los i penjar-los manualment a la seva ubicació correcta més tard.',
	'UPDATE_REQUIRES_FILE'			=> 'Per realitzar l’actualització cal que el següent fitxer estigui present: %s',
	'UPDATE_SUCCESS'				=> 'S’ha actualitzat el phpBB correctament',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'S’han actualitzat tots els fitxers correctament. El pas següent és tornar a comprovar tots els fitxers per assegurar-se de que els fitxers s’han actualitzat correctament.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'S’està actualitzant la versió i optimitzant les taules',
	'UPDATING_DATA'					=> 'S’estan actualitzant les dades',
	'UPDATING_TO_LATEST_STABLE'		=> 'S’està actualitzant la base de dades a la versió estable més recent',
	'UPDATED_VERSION'				=> 'Versió actualitzada',
	'UPLOAD_METHOD'					=> 'Mètode de penjada',

	'UPDATE_DB_SUCCESS'				=> 'S’ha actualitzat la base de dades correctament.',
	'UPDATE_FILE_SUCCESS'			=> 'S’ha actualitzat el fitxer correctament.',
	'USER_ACTIVE'					=> 'Usuari actiu',
	'USER_INACTIVE'					=> 'Usuari inactiu',

	'VERSION_CHECK'					=> 'Comprovació de versió',
	'VERSION_CHECK_EXPLAIN'			=> 'Comprova si la vostra instal·lació del phpBB està al dia.',
	'VERSION_NOT_UP_TO_DATE'		=> 'La vostra instal·lació del phpBB no està al dia. Continueu amb el procés d’actualització.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'La vostra instal·lació del phpBB no està al dia.<br />A continuació hi ha un enllaç a l’avís de llançament que conté més informació així com instruccions sobre el procés d’actualització.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'La vostra instal·lació del phpBB no està al dia.',
	'VERSION_UP_TO_DATE'			=> 'La vostra instal·lació del phpBB està al dia. Tot i que no hi ha cap actualització disponible actualment, podeu continuar per realitzar una comprovació de validesa dels fitxers.',
	'VERSION_UP_TO_DATE_ACP'		=> 'La vostra instal·lació del phpBB està al dia. No hi ha cap actualització disponible actualment.',
	'VIEWING_FILE_CONTENTS'			=> 'S’estan visualitzant els continguts del fitxer',
	'VIEWING_FILE_DIFF'				=> 'S’estan visualitzant les diferències del fitxer',

	'WRONG_INFO_FILE_FORMAT'	=> 'Format del fitxer d’informació erroni',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Gràcies, La direcció',
	'CONFIG_SITE_DESC'				=> 'Un text curt per descriure el fòrum',
	'CONFIG_SITENAME'				=> 'elvostredomini.cat',

	'DEFAULT_INSTALL_POST'			=> 'Aquesta és una entrada d’exemple per a la instal·lació del phpBB3. Sembla que tot funciona. Si voleu, podeu eliminar aquesta entrada i continuar amb la configuració del fòrum. Durant el procès d’instal·lació, s’ha assignat un grup adient de permisos a la primera categoria i el primer fòrum per als administradors de grups d’usuaris predefinits, robots, moderadors globals, visitants, usuaris registrats i usuaris COPPA registrats. Si també decidiu eliminar la primera categoria i el primer fòrum, no oblideu assignar permisos per tots els grups d’usuaris a totes les categories i fòrums nous que creeu. És aconsellable que canvieu el nom de la primera categoria i el primer fòrum i copieu els permisos des d’aquests mentre creeu noves categories i fòrums.',

	'FORUMS_FIRST_CATEGORY'			=> 'Primera categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descripció del primer fòrum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'El primer fòrum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador',
	'REPORT_WAREZ'					=> 'L’entrada conté enllaços a programari il·legal o piratejat.',
	'REPORT_SPAM'					=> 'L’entrada té com a únic fi anunciar un lloc web o algun producte.',
	'REPORT_OFF_TOPIC'				=> 'L’entrada és fora de tema.',
	'REPORT_OTHER'					=> 'L’entrada no encaixa en cap de les altres categories, si us plau utilitzeu el camp d’informació addicional.',

	'SMILIES_ARROW'					=> 'Fletxa',
	'SMILIES_CONFUSED'				=> 'Confós',
	'SMILIES_COOL'					=> 'Guai',
	'SMILIES_CRYING'				=> 'Plora o molt trist',
	'SMILIES_EMARRASSED'			=> 'Avergonyit',
	'SMILIES_EVIL'					=> 'Malvat o molt enfadat',
	'SMILIES_EXCLAMATION'			=> 'Exclamació',
	'SMILIES_GEEK'					=> 'Friqui',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Riu',
	'SMILIES_MAD'					=> 'Enfadat',
	'SMILIES_MR_GREEN'				=> 'Sr. Verd',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Pregunta',
	'SMILIES_RAZZ'					=> 'Treu la llengua',
	'SMILIES_ROLLING_EYES'			=> 'Gira els ulls',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Impressionat',
	'SMILIES_SMILE'					=> 'Somriu',
	'SMILIES_SURPRISED'				=> 'Sorprés',
	'SMILIES_TWISTED_EVIL'			=> 'Recargolat',
	'SMILIES_UBER_GEEK'				=> 'Super friqui',
	'SMILIES_VERY_HAPPY'			=> 'Molt content',
	'SMILIES_WINK'					=> 'Fa l’ullet',

	'TOPICS_TOPIC_TITLE'			=> 'Benvingut al phpBB3',
));
