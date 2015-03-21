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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Problemes d’inici de sessió i registre'
	),
	array(
		0 => 'Per què cal que em registri?',
		1 => 'És possible que no calgui, és decisió de l’administrador del fòrum si cal o no registrar-se per publicar missatges. Això no obstant, registrar-vos us dóna accés a característiques addicionals no disponibles per als usuaris visitants com ara definir avatars, missatgeria privada, enviament de correus electrònics a altres usuaris, subscripcions a grups d’usuaris, etc. Només cal un moment per registrar-se, per tant, és recomanable que ho feu.'
	),
	array(
		0 => 'Què és el COPPA?',
		1 => 'COPPA són les sigles en anglès del Decret de protecció de privadesa en línia infantil (Children’s Online Privacy Protection Act) del 1998. És una llei dels Estats Units que exigeix als llocs web que potencialment poden recollir dades de menors de 13 anys que obtinguin el consentiment escrit dels seus pares o d’un tutor legal per recollir dades personals identificables d’un menor de 13 anys. Si no esteu segur de si això us aplica com a persona que es registra o al lloc web en el qual voleu registrar-vos, busqueu assessorament legal. Tingueu en compte que phpBB Limited o el propietari d’aquest fòrum no us poden proporcionar assessorament legal i no és un punt de contacte per a dubtes legals de qualsevol tipus, a excepció del cas descrit a la pregunta “Amb qui m’he de posar en contacte per tractar temes legals o d’abús relacionats amb aquest fòrum?”.',
	),
	array(
		0 => 'Per què no em puc registrar?',
		1 => 'És possible que un administrador del fòrum hagi inhabilitat el registre per evitar que visitants nous es pugin donar d’alta. També pot ser que un administrador del fòrum hagi bandejat la vostra adreça IP o hagi prohibit el nom d’usuari que esteu intentant registrar. Poseu-vos en contacte amb un administrador del fòrum per rebre assistència.',
	),
	array(
		0 => 'M’he registrat però no puc iniciar la sessió!',
		1 => 'Primer comproveu el vostre nom d’usuari i contrasenya. Si són correctes, pot haver passat una d’aquestes dues coses. Si la funció COPPA està activada i heu especificat que sou menor de 13 anys durant el procés de registre, heu de seguir les instruccions que heu rebut. Alguns fòrums també requereixen l’activació dels comptes nous, ja sigui per l’usuari mateix o per un administrador abans de poder iniciar la sessió; aquesta informació es mostra durant el procés de registre. Si heu rebut un correu electrònic, seguiu les instruccions. Si no heu rebut cap correu electrònic, és possible que hagueu proporcionat una adreça electrònica incorrecta o que un filtre de correu brossa l’hagi descartat. Si esteu segur de que l’adreça electrònica que heu proporcionat és correcta, proveu de posar-vos en contacte amb l’administrador.'
	),
	array(
		0 => 'Per què no puc iniciar la sessió?',
		1 => 'Pot passar per diverses raons. Primer, assegureu-vos de que el vostre nom d’usuari i contrasenya són correctes. Si ho són, poseu-vos en contacte amb un administrador del fòrum per assegurar-vos que no us han expulsat. També és possible que l’administrador del fòrum tingui un error de configuració que hagi d’arreglar.',
	),
	array(
		0 => 'Vaig registrar-me fa temps però ja no puc iniciar la sessió!',
		1 => 'És possible que un administrador hagi desactivat o eliminat el vostre compte per alguna raó. També hi ha alguns fòrums que eliminen periòdicament els usuaris que no hagin publicat res en molt de temps per tal de reduir la mida de la base de dades. Si ha passat això, proveu de registrar-vos de nou i involucrar-vos més en les discussions del fòrum.'
	),
	array(
		0 => 'He perdut la meva contrasenya!',
		1 => 'No us poseu nerviós! Tot i que la contrasenya no es pot recuperar, es pot canviar fàcilment. Visiteu la pàgina d’inici de sessió i feu clic a <em>He oblidat la meva contrasenya</em>. Seguiu les instruccions i podreu tornar a iniciar la sessió aviat.'
	),
	array(
		0 => 'Per què finalitza la meva sessió automàticament?',
		1 => 'Si no seleccioneu la casella <em>Recorda’m</em> quan inicieu la sessió, el fòrum només mantindrà la sessió activa durant un període de temps predefinit. Això evita l’ús il·lícit del vostre compte per algú altre. Per mantenir la sessió activa, seleccioneu la casella “Recorda’m” en iniciar-la. Això no és recomanable si accediu al fòrum des d’un ordinador compartit p.ex. en una biblioteca, un cibercafè, una aula d’ordinadors a la universitat, etc. Si no podeu veure la casella, vol dir que un administrador del fòrum ha inhabilitat aquesta funció.',
	),
	array(
		0 => 'Què fa l’opció “Elimina totes les galetes del fòrum”?',
		1 => '“Elimina totes les galetes del fòrum” elimina les galetes creades pel phpBB que us mantenen autenticat i amb la sessió iniciada al fòrum. Les galetes també proporcionen funcions com ara el seguiment dels temes llegits si un administrador del fòrum les ha habilitat. Si experimenteu problemes d’inici i finalització de sessió, és possible que eliminar les galetes del fòrum ho solucioni.',
	),
	array(
		0 => '--',
		1 => 'Preferències i configuracions de l’usuari'
	),
	array(
		0 => 'Com puc canviar les meves configuracions?',
		1 => 'Si sou un usuari registrat, totes les vostres configuracions s’emmagatzemen a la base de dades del fòrum. Per modificar-les, visiteu el Tauler de control de l’usuari a través de l’enllaç que trobareu habitualment fent clic al vostre nom d’usuari a la part superior de les pàgines del fòrum. Aquest sistema us permet canviar totes les vostres configuracions i preferències.'
	),
	array(
		0 => 'Com puc evitar que el meu nom d’usuari aparegui a la llista d’usuaris connectats?',
		1 => 'Al Tauler de control de l’usuari, a la secció “Preferències del fòrum”, trobareu l’opció <em>Oculta la meva presència quan estic connectat</em>. Habiliteu aquesta opció i només apareixereu a la vostra llista, la dels administradors, i la dels moderadors. Se us comptarà com a usuari ocult.'
	),
	array(
		0 => 'Les hores són incorrectes!',
		1 => 'És possible que els temps es mostrin en un fus horari diferent del vostre. Si és així, visiteu el Tauler de control de l’usuari i canvieu el fus horari per que coincideixi amb el de la zona on us trobeu, p.ex. Londres, París, Nova York, Sydney, etc. Tingueu en compte que, com passa amb la majoria de configuracions, només els usuaris registrats poden canviar el fus horari. Si no esteu registrat, ara és un bon moment per fer-ho.'
	),
	array(
		0 => 'He canviat el fus horari i l’hora encara està malament!',
		1 => 'Si esteu segur de que heu triat correctament el fus horari i l’hora encara és incorrecta, llavors l’hora del servidor web és errònia. Si us plau, aviseu l’administrador per que arregli el problema.'
	),
	array(
		0 => 'El meu idioma no és a la llista!',
		1 => 'O bé l’administrador no ha instal·lat el vostre idioma o bé ningú ha traduït el phpBB al vostre idioma. Proveu de demanar-li a un administrador del fòrum si pot instal·lar el paquet d’idioma que necessiteu. Si el paquet d’idioma no existeix, podeu crear una traducció nova. Podeu trobar més informació al lloc web del <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	),
	array(
		0 => 'Què són les imatges que hi ha al costat del meu nom d’usuari?',
		1 => 'Hi ha dos tipus d’imatges que poden apareixer al costat del vostre nom d’usuari quan visualitzeu entrades. Una d’elles pot ser una imatge associada amb el vostre rang, generalment en forma d’estrelles, blocs o punts i indica quantes entrades heu publicat o el vostre estatus al fòrum. Un altre tipus d’imatge, habitualment més gran, es coneix com avatar i sol ser única i personal per cada usuari.',
	),
	array(
		0 => 'Com puc mostrar un avatar?',
		1 => 'Al tauler de Control de l’usuari, a la secció "Perfil", podeu afegir un avatar utilitzant un dels quatre mètodes següents: gravatar, galeria, remot o penjat. És l’administrador qui decideix si els avatars estan permesos i tria de quines maneres estan disponibles. Si no podeu utilitzar els avatars, poseu-vos en contacte amb l’administrador.'
	),
	array(
		0 => 'Què és el meu rang i com puc canviar-lo?',
		1 => 'Els rangs apareixen sota els noms d’usuari i indiquen el nombre d’entrades que heu publicat o identifiquen determinats usuaris com ara moderadors i administradors. En general no podeu canviar la nomenclatura dels rangs del fòrum ja que els estableix l’administrador. Si us plau, no abuseu del fòrum publicant entrades innecessàriament per incrementar el vostre rang. La majoría de fòrums no toleren aquest comportament i un moderador o un administrador simplement disminuiran el vostre comptador d’entrades publicades.'
	),
	array(
		0 => 'Quan faig clic sobre l’enllaç de correu electrònic d’un usuari se’m demana que iniciï la sessió?',
		1 => 'Només els usuaris registrats poden enviar correus electrònics a altres usuaris a través del formulari integrat de correu, i només si l’administrador ha habilitat aquesta funció. Això és per evitar l’ús malintencionat del sistema de correu electrònic per part d’usuaris anònims.'
	),
	array(
		0 => '--',
		1 => 'Problemes de publicació'
	),
	array(
		0 => 'Com publico un tema nou o una resposta?',
		1 => 'Per publicar un tema en un fòrum, feu clic al botó "Entrada nova". Per publicar una resposta en un tam, feu clic al botó "Publica resposta". És possible que us hagueu de registrar per poder publicar un missatge. Teniu una llista dels permisos de cada fòrum a la part inferior de les pàgines del fòrum i del tema. Per exemple: podeu publicar temes nous, podeu publicar fitxers adjunts, etc.',
	),
	array(
		0 => 'Com edito o elimino una entrada?',
		1 => 'Si no sou administrador o moderador del fòrum, només podeu editar o modificar les vostres pròpies entrades. Podeu editar una entrada fent clic al seu botó “Edita”, de vegades només durant un temps limitat després d’haver-la publicat. Si algú ja ha respost a l’entrada trobareu un petit text a la part inferior de l’entrada que mostra el nombre de vegades que l’heu editat així com la data i l’hora de modificació. Això només apareix si algú ja ha publicat una resposta; no apareixerà si és un moderador o un administrador qui ha editat l’entrada, tot i que si ho desitgen es possible que deixin una nota explicant perquè l’han editat. Tingueu en compte que els usuaris normals no poden eliminar una entrada si algú ja hi ha respost.'
	),
	array(
		0 => 'Com afegeixo una signatura a la meva entrada?',
		1 => 'Per afegir una signatura primer n’heu de crear una al Tauler de control de l’usuari. Un cop creada, podeu activar la casella <em>Inclou la signatura</em> del formulari de publicació. També podeu incloure per defecte la signatura en totes les vostres entrades seleccionant l’opció apropiada al Tauler de control de l’usuari. Si ho feu, encara podeu evitar que la signatura s’inclogui en entrades individuals desactivant la casella de selecció <em>Inclou la signatura</em> del formulari de publicació.'
	),
	array(
		0 => 'Com creo una enquesta?',
		1 => 'Quan publiqueu un tema nou o editeu la primera entrada d’un tema, feu clic sobre la pestanya “Creació d’una enquesta” a sota del formulari principal de publicació. Si no podeu veure aquesta pestanya, no teniu els permisos necessaris per crear enquestes. Introduïu un títol i dues opcions com a mínim en els camps apropiats, assegurant-vos que cada opció és en una línia diferent a l’àrea de text. També podeu especificar el nombre d’opcions que els usuaris podran seleccionar quan votin a “Opcions per usuari”, un límit de temps en dies per a l’enquesta (0 per una durada infinita) i per acabar l’opció que permet als usuaris canviar el seu vot.'
	),
	array(
		0 => 'Per què no puc afegir més opcions a l’enquesta?',
		1 => 'El límit d’opcions per a les enquestes l’estableix l’administrador. Si creieu que necessiteu afegir més opcions de les permeses a la vostra enquesta, poseu-vos en contacte amb l’administrador del fòrum.'
	),
	array(
		0 => 'Com puc editar o eliminar una enquesta?',
		1 => 'Igual com passa amb les entrades, una enquesta només pot editar-la el seu autor, un moderador o un administrador. Per editar una enquesta feu clic al botó “Edita” de la primera entrada del tema ja que sempre té associada l’enquesta. Si no s’ha emès cap vot, els usuaris poden eliminar l’enquesta o editar-ne les opcions. Això no obstant, si ja hi ha vots, només els moderadors i els administradors poden editar-la o eliminar-la. Això evita que es canvïin les opcions de l’enquesta al mig de la seva durada.'
	),
	array(
		0 => 'Per què no puc accedir a un fòrum?',
		1 => 'Alguns fòrums poden estar limitats a determinats usuaris o grups. És possible que per visualitzar-los, llegir-los, publicar-hi o realitzar-hi una altra acció necessiteu permisos especials. Poseu-vos en contacte amb un moderador o un administrador del fòrum per que us hi permeti l’accés.'
	),
	array(
		0 => 'Per què no puc afegir fitxers adjunts?',
		1 => 'Els permisos per a fitxers adjunts es poden concedir a determinats fòrums, grups o usuaris. L’administrador del fòrum pot haver inhabilitat els fitxers adjunts al fòrum concret en el que esteu publicant, o potser només determinats grups poden afegir-ne. Poseu-vos en contacte amb l’administrador del fòrum si no esteu segur de la raó per la qual no podeu afegir fitxers adjunts.'
	),
	array(
		0 => 'Per què he rebut un advertiment?',
		1 => 'Cada administrador té les seves regles per al seu fòrum. Si heu infringit una regla, és possible que rebeu un advertiment. Tingueu en compte que això és decisió de l’administrador del fòrum i que phpBB Limited no té res a veure amb els advertiments d’aquest lloc web. Poseu-vos en contacte amb l’administrador del fòrum si no esteu segur de la raó per la qual heu rebut l’advertiment.'
	),
	array(
		0 => 'Com puc informar d’una entrada a un moderador?',
		1 => 'Si l’administrador del fòrum ho permet, veureu un botó al costat de la propia entrada per informar-ne. Quan hi feu clic se us guiarà pels passos necessaris per informar de l’entrada.'
	),
	array(
		0 => 'Per a què serveix el botó “Desa” del formulari de publicació?',
		1 => 'Aquest botó us permet desar esborranys per completar-los i trametre’ls més tard. Per recarregar un esborrany desat visiteu el Tauler de control de l’usuari.'
	),
	array(
		0 => 'Per què cal que la meva entrada sigui aprovada?',
		1 => 'És possible que l’administrador del fòrum hagi decidit que les entrades del fòrum en el que esteu publicant han de ser revisades abans de ser publicades. També és possible que l’administrador us hagi situat en un grup d’usuaris les entrades dels quals s’han de revisar abans de ser publicades. Poseu-vos en contacte amb l’administrador del fòrum per obtenir més informació.'
	),
	array(
		0 => 'Com reactivo el meu tema?',
		1 => 'Si feu clic a l’enllaç “Reactiva el tema” que apareix quan el visualitzeu, podeu “reactivar-lo” fent que aparegui a la part superior del fòrum a la primera pàgina. Això no obstant, si no veieu l’enllaç, llavors és possible que la reactivació de temes estigui inhabilitada o que no hagi transcorregut el temps mínim entre reactivacions. També és possible reactivar el tema simplement escrivint-hi una resposta; assegureu-vos, però, que fent-ho no infringiu les regles del fòrum.'
	),
	array(
		0 => '--',
		1 => 'Formatació i tipus de tema'
	),
	array(
		0 => 'Què és el BBCode?',
		1 => 'El BBCode és una implementació especial de l’HTML que ofereix un gran control en la formatació de determinats elements d’una entrada. És l’administrador qui decideix si es permet l’ús del BBCode, però el podeu inhabilitar per a entrades individuals des del formulari de publicació. El BBCode té un estil similar al de l’HTML però les etiquetes estan delimitades per claudàtors [ i ] en lloc de &lt; i &gt;. Per obtenir més informació sobre el BBCode llegiu la guia a la que podeu accedir des de la pàgina de publicació.'
	),
	array(
		0 => 'Puc utilitzar HTML?',
		1 => 'No. No és possible publicar HTML en aquest fòrum per que es mostri com a tal. La major part del formatat que es pot fer amb l’HTML el podeu aplicar utilitzant el BBCode.'
	),
	array(
		0 => 'Què són les emoticones?',
		1 => 'Les emoticones són imatges petites que poden ser utilitzades per expressar una emoció mitjançant un codi curt, p.ex. :) indica felicitat, mentre que :( indica tristesa. Podeu veure la llista completa d’emoticones al formulari de publicació. No abuseu de les emoticones ja que poden fer fàcilment que una entrada es torni il·legible i és possible que un moderador les elimini o elimini l’entrada del tot. L’administrador del fòrum també pot establir un límit per al nombre d’emoticones permeses en una entrada.'
	),
	array(
		0 => 'Puc publicar imatges?',
		1 => 'Sí, podeu mostrar imatges en les vostres entrades. Si l’administrador permet els fitxers adjunts, podeu penjar la imatge al fòrum. Si no és així, cal que enllaçeu amb una imatge emmagatzemada en un servidor web accessible públicament, p.ex. http://www.exemple.cat/la-meva-foto.gif. No podeu enllaçar amb imatges emmagatzemades al vostre ordinador (a no ser de que es tracti d’un servidor web accessible públicament) ni imatges emmagatzemades darrera d’un mecanisme d’autenticació , p.ex. les bústies de hotmail o yahoo, llocs web protegits amb contrasenya, etc. Per mostrar la imatge, utilitzeu l’etiqueta del BBCode [img].'
	),
	array(
		0 => 'Què són els avisos globals?',
		1 => 'Els avisos globals contenen informació important i és recomanable que els llegiu sempre que sigui possible. Apareixen a la part superior de cada fòrum i al vostre Tauler de control de l’usuari. Els permisos per publicar avisos globals els concedeix l’administrador del fòrum.'
	),
	array(
		0 => 'Què són els avisos?',
		1 => 'Els avisos sovint contenen informació important sobre el fòrum que esteu llegint i és recomanable que els llegiu sempre que sigui possible. Els avisos apareixen a la part superior de de cada pàgina del fòrum on s’han publicat. Els permisos per publicar avisos els concedeix l’administrador del fòrum.'
	),
	array(
		0 => 'Què són els temes recurrents?',
		1 => 'els temes recurrents d’un fòrum apareixen sota els avisos i només en la primera pàgina. Habitualment, són força importants i és recomanable que els llegiu sempre que sigui possible. Els permisos per publicar temes recurrents els concedeix l’administrador del fòrum.'
	),
	array(
		0 => 'Què són els temes bloquejats?',
		1 => 'Els temes bloquejats són temes en què els usuaris ja no poden respondre i qualsevol enquesta que continguin finalitza automàticament. Els temes poden ser bloquejats per moltes raons per part d’un moderador o un administrador del fòrum. És possible que pugueu bloquejar els vostres temes depenent dels permisos que us hagi concedit l’administrador del fòrum.'
	),
	array(
		0 => 'Què són les icones de tema?',
		1 => 'Les icones de tema són imatges triades per l’autor i associades amb les entrades per indicar-ne el contingut. La possibilitat d’utilitzar icones de tema depèn del permisos concedits per l’administrador del fòrum.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Nivells  i grups d’usuaris'
	),
	array(
		0 => 'Què són els administradors?',
		1 => 'Els administradors són membres als quals se’ls ha assignat el nivell més alt de control sobre els fòrums. Aquests membres poden controlar tots els aspectes de gestió del fòrum, incloent-hi l’assignació de permisos, suspensió d’usuaris, creació de grups d’usuaris o moderadors, etc. depenent del creador del fòrum i dels permisos que aquest ha concedit als altres administradors. També poden tenir permisos de moderador en tots els fòrums, depenent de la configuració establida pel creador del fòrum.'
	),
	array(
		0 => 'Què són els moderadors?',
		1 => 'Els moderadors són individus (o grups d’individus) que tenen cura dels fòrums dia a dia. Tenen autoritat per editar o eliminar entrades i bloquejar, desbloquejar, desplaçar eliminar i dividir temes en els fòrums que moderen. Generalment, els moderadors hi són per evitar que les discussions acabin fora de tema o les entrades amb contingut insultant o ofensiu.'
	),
	array(
		0 => 'Què són els grups d’usuaris?',
		1 => 'Els grups d’usuaris divideixen la comunitat en seccions gestionables més fàcilment pels administradors. Cada usuari pot pertànyer a diversos grups i a cada grup se li poden assignar permisos individuals. Això permet als administradors canviar fàcilment els permisos de molts usuaris a la vegada, com ara canviar permisos dels moderadors o permetre a un grup d’usuaris l’accés a un fòrum privat.'
	),
	array(
		0 => 'On són els grups d’usuaris i com m’hi afilio?',
		1 => 'Podeu visualitzar tots els grups d’usuaris a través de l’enllaç “Grups d’usuaris” del Tauler de control de l’usuari. Si desitgeu afiliar-vos-hi feu clic al botó apropiat. Això no obstant, no tots els grups són oberts. Alguns poden requerir que s’aprovi la vostra sol·licitud d’afiliació, d’altres poden ser tancats i alguns fins i tot poden ser ocults. Si el grup és obert us hi podeu afiliar fent clic al botó apropiat. Si el grup requereix aprovació podeu sol·licitar l’afiliació fent clic al botó apropiat. Caldrà que el líder del grup d’usuaris aprovi la vostra sol·licitud i és possible que us pregunti per què us hi voleu afiliar. Si us plau, no assetgeu el líder del grup si rebutja la vostra sol·licitud ja que tindrà les seves raons.'
	),
	array(
		0 => 'Com puc convertir-me en líder d’un grup d’usuaris?',
		1 => 'Habitualment, el líder l’assigna l’administrador del fòrum quan crea el grup d’usuaris. Si esteu interessats a crear un grup d’usuaris, proveu de posar-vos en contacte amb l’administrador del fòrum enviant-li un missatge privat.',
	),
	array(
		0 => 'Per què alguns grups d’usuaris tenen un color diferent?',
		1 => 'L’administrador del fòrum pot assignar un color a un grup d’usuaris per fer que sigui més fàcil identificar-ne els membres.'
	),
	array(
		0 => 'Què és un “grup per defecte”?',
		1 => 'Si sou membre de més d’un grup d’usuaris, el vostre grup per defecte determina quin color de grup i quin rang de grup es mostra per defecte per al vostre usuari. L’administrador del fòrum us pot concedir permisos per canviar el vostre grup per defecte a través del Tauler de control de l’usuari.'
	),
	array(
		0 => 'Què és l’enllaç “L’equip”?',
		1 => 'Aquesta pàgina us proporciona una llista del personal del fòrum, incloent-hi els administradors i els moderadors i informació addicional com ara els fòrums que moderen.'
	),
	array(
		0 => '--',
		1 => 'Missatgeria privada'
	),
	array(
		0 => 'No puc enviar missatges privats!',
		1 => 'Hi ha tres raons possibles: no esteu registrat i amb la sessió iniciada, l’administrador del fòrum ha inhabilitat la missatgeria privada o no permet al vostre usuari enviar missatges. Poseu-vos en contacte amb l’administrador del fòrum per obtenir més informació.'
	),
	array(
		0 => 'No paro de rebre missatges privats no desitjats!',
		1 => 'Podeu eliminar automàticamen missatges d’un usuari concret utilitzant les regles de missatges del Tauler de control de l’usuari. Si rebeu missatges privats insultants per part d’un usuari en particular, informeu dels missatges als moderadors ja que poden inhabilitar l’enviament de missatges per part de l’usuari.'
	),
	array(
		0 => 'He rebut correu brossa o insultant per part d’algú en aquest fòrum!',
		1 => 'Lamentem aquesta situació. El formulari de correu electrònic d’aquest fòrum inclou mesures per localitzar els usuaris que envien aquest tipus de correus. Envieu a l’administrador del fòrum una còpia completa del correu electrònic que heu rebut. És molt important que inclogui les capçaleres que contenen la informació de l’usuari que ha enviat el correu. L’administrador del fòrum se’n pot ocupar.'
	),
	array(
		0 => '--',
		1 => 'Amics i enemics'
	),
	array(
		0 => 'Què són les llistes d’amics i enemics?',
		1 => 'Podeu utilitzar aquestes llistes per organitzar altres membres del fòrum. Els membres que afegiu a la llista d’amics es mostraran al Tauler de control de l’usuari per veure ràpidament si estan connectats i per enviar-los missatges privats. Depenent de si la plantilla ho admet, les entrades d’aquests usuaris poden estar ressaltades. Si afegiu un usuari a la llista d’enemics, per defecte les seves entrades estaran ocultes.'
	),
	array(
		0 => 'Com puc afegir o treure usuaris de la llista d’amics o enemics?',
		1 => 'Podeu afegir usuaris de dues maneres. Al perfil de cada usuari, hi ha un enllaç per afegir-lo o bé a la llista d’amics o bé a la d’enemics. Alternativament, des del Tauler de control de l’usuari, podeu afegir usuaris directament introduïnt el seu nom d’usuari. També podeu treure usuaris de la llista utilitzant la mateixa pàgina.'
	),
	array(
		0 => '--',
		1 => 'Cerca dels fòrums'
	),
	array(
		0 => 'Com puc cercar en un fòrum o fòrums?',
		1 => 'Introduïu el text al quadre de cerca situat a la pàgina d’índex, dels fòrums o dels temes. Podeu accedir a la cerca avançada fent clic a l’enllaç “Cerca avançada” disponible a totes les pàgines del fòrum. La manera com s’accedeix a la cerca pot dependre de l’estil utilitzat pel fòrum.'
	),
	array(
		0 => 'Per què la cerca no troba cap coincidència?',
		1 => 'És probable que la cerca sigui massa vaga i inclogui moltes paraules comunes que el phpBB no indexa. Sigueu més específic i utilitzeu les opcions disponibles a la cerca avançada.',
	),
	array(
		0 => 'Per què la cerca produeix una pàgina en blanc!?',
		1 => 'La cerca ha trobat més coincidències de les que el servidor web pot gestionar. Utilitzeu la cerca avançada i sigueu més especific amb les paraules utilitzades i els fòrums on cal cercar.'
	),
	array(
		0 => 'Com puc cercar membres?',
		1 => 'Visiteu la pàgina “Membres” i feu clic a l’enllaç “Cerca un membre”.'
	),
	array(
		0 => 'Com puc trobar els meus temes i entrades?',
		1 => 'Podeu recuperar les vostres entrades o bé fent clic a l’enllaç “Mostra les meves entrades” del Tauler de control de l’usuari o bé l’enllaç “Cerca les entrades d’aquest usuari” del vostre perfil o fent clic al menú “Enllaços ràpids” a la part de dalt del fòrum. Per cercar els vostres temes, utilitzeu la pàgina de cerca avançada introduïnt les opcions apropiades.',
	),
	array(
		0 => '--',
		1 => 'Subscripcions i adreces d’interès',
	),
	array(
		0 => 'Quina és la diferència entre les adreces d’interès i les subscripcions?',
		1 => 'Al phpBB 3,0 les adreces d’interès eren similars a les adreces d’interès d’un navegador web. No rebieu cap avís quan hi havia una resposta. Al phpBB 3,1 les adreces d’interès són més similars a subscriure’s a un tema. Se us pot notificar quan hi hagi una resposta al tema de l’adreça d’interès. D’altra banda, les subscripcions us notificaran quan hi hagi una resposta a qualsevol tema o fòrum a dintre de l’element subscrit. Les opcions de notificació per a les adreces d’interès i les subscripcions es poden configurar al Tauler de control de l’usuari, a l’apartat “Preferències del fòrum”.'
	),
	array(
		0 => 'Com puc subscriure’m  o afegir als enllaços d’interès un tema determinat?',
		1 => 'Us podeu subscriure o afegir un tema als enllaços d’interès fent clic a l’enllaç corresponent del menú “Eines del tema” ubicat a prop de la part superior i inferior de la discussió d’un tema. Publicar una resposta amb la casella “Avisa’m quan s’envïi una resposta” marcada també us subscriurà al tema.'
	),
	array(
		0 => 'Com puc subscriure’m a un fòrum determinat?',
		1 => 'Per subscriure-us a un fòrum determinat, feu clic a l’enllaç “Subscriu-me a aquest fòrum” quan hi entreu.',
	),
	array(
		0 => 'Com puc cancel·lar les meves subscripcions?',
		1 => 'Per cancel·lar les vostres subscripcions, aneu al Tauler de control de l’usuari i seguiu els enllaços a les vostres subscripcions.'
	),
	array(
		0 => '--',
		1 => 'Fitxers adjunts'
	),
	array(
		0 => 'Quin tipus de fitxers adjunts es permeten en aquest fòrum?',
		1 => 'L’administrador de cada fòrum pot permetre o no determinats tipus de fitxers adjunts. Si no esteu segur de què es permet penjar, poseu-vos en contacte amb l’administrador del fòrum.'
	),
	array(
		0 => 'Com puc trobar tots els meus fitxers adjunts?',
		1 => 'Per trobar la llista de tots els fitxers adjunts que heu penjat, aneu al Tauler de control de l’usuari i seguiu els enllaços fins a la secció de fitxers adjunts.'
	),
	array(
		0 => '--',
		1 => 'Incidències amb el phpBB',
	),
	array(
		0 => 'Qui ha escrit el programari d’aquest fòrum?',
		1 => 'Aquest programari (en la seva forma no modificada) és produït, llançat i és copyright <a href="https://www.phpbb.com/">phpBB Limited</a>. Es proporciona sota la GNU Llicència Pública General, versió 2 (GPL-2.0) i pot ser distribuït lliurement. Seguiu l’enllaç <a href="https://www.phpbb.com/about/">Sobre el phpBB</a> per obtenir més informació.'
	),
	array(
		0 => 'Per què no hi ha disponible la funció X?',
		1 => 'Aquest programari ha estat escrit i llicenciat a través de phpBB Limited. Si creieu que cal afegir una determinada funció, visiteu el <a href="https://www.phpbb.com/ideas/">Centre d’idees del phpBB</a>, on podreu donar el vostre suport a idees existents o suggerir funcions noves.'
	),
	array(
		0 => 'Amb qui m’he de posar en contacte per tractar temes legals o d’abús relacionats amb aquest fòrum?',
		1 => 'Qualsevols dels administradors de la llista que pareix a la pàgina “L’equip” serà un contacte apropiat per a les vostres queixes. Si tot i així no rebeu cap resposta, és recomanable que us poseu en contacte amb el propietari del domini (feu una <a href="http://www.google.com/search?q=whois">cerca whois</a>) o, si el fòrum s’executa sobre un servei gratuït (p.ex. Yahoo!, free.fr, f2s.com, etc.), la direcció o el departament d’abús del servei en questió. Tingueu en compte que el phpBB Group <strong>no té absolutament cap jurisdicció</strong> i no pot ser fet responsable de com, on i qui utilitza aquest fòrum. No us poseu en contacte amb el phpBB Group en relació a qualsevol tema legal (cessar i desistir, responsabilització, comentaris difamatoris, etc.) <strong>no relacionat directament</strong> amb el lloc web phpBB.com o el programari phpBB en sí mateix. Si envieu un correu electrònic al phpBB Group <strong>sobre l’ús per part de tercers</strong> d’aquest programari espereu-vos una resposta succinta o, fins i tot, cap resposta.'
	),
	array(
		0 => 'Com puc posar-me en contacte amb l’administrador del fòrum?',
		1 => 'Tots els usuaris del fòrum poden utilitzar el formulari “Contacta amb nosaltres”, si l’administrador del fòrum n’ha habilitat l’opció.<br />Els membres del fòrum també poden utilitzar l’enllaç “L’equip”.',
	),
);
