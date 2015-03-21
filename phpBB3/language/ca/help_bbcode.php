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
		1 => 'Introducció'
	),
	array(
		0 => 'Què és el BBCode?',
		1 => 'El BBCode és una implementació especial de l’HTML. Si podeu o no utilitzar el BBCode en les vostres entrades del fòrum, ho determina l’administrador. Addicionalment, podeu desactivar el BBCode per a una entrada en concret al formulari de publicació d’entrades. El BBCode té un estil similar al de l’HTML, les etiquetes estan delimitades per claudàtors [ i ] en lloc de &lt; i &gt; i ofereix més control sobre què es mostra i com. Depenent de la plantilla que utilitzeu és possible que afegir BBCode a les vostres entrades sigui molt més fàcil utilitzant la interfície de botons situada a sobre de l’àrea del missatge en el formulari de publicació d’entrades. Amb tot, és probable que aquesta guia us sigui útil.'
	),
	array(
		0 => '--',
		1 => 'Formatació del text'
	),
	array(
		0 => 'Com crear text en negreta, en cursiva o subratllat',
		1 => 'El BBCode inclou etiquetes que us permeten canviar ràpidament l’estil bàsic del text. Ho podeu aconseguir de les maneres següents: <ul><li>Per que un text aparegui en negreta fiqueu-lo entre <strong>[b][/b]</strong>, p.ex. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />es convertirà en <strong>Hola</strong></li><li>Per subratllar utilitzeu <strong>[u][/u]</strong>, p.ex.:<br /><br /><strong>[u]</strong>Bon dia<strong>[/u]</strong><br /><br />es convertirà en <span style="text-decoration: underline">Bon dia</span></li><li>Per que un text aparegui en cursiva utilitzeu <strong>[i][/i]</strong>, p.ex.<br /><br />És <strong>[i]</strong>genial!<strong>[/i]</strong><br /><br />es convertirà en És <i>genial!</i></li></ul>'
	),
	array(
		0 => 'Com canviar el color i la mida del text',
		1 => 'Per canviar el color o la mida del text podeu utilitzar les etiquetes següents. Tingueu en compte que la manera com apareix el resultat depèn del sistema i el navegador utilitzats pels usuaris: <ul><li>Per canviar el color d’un text, fiqueu-lo entre <strong>[color=][/color]</strong>. Podeu especificar el nom d’un color reconegut en anglès (p.ex. red, blue, yellow, etc.) o, alternativament, un triplet hexadecimal com ara #FFFFFF, #000000. Per exemple, per crear text de color roig podeu utilitzar:<br /><br /><strong>[color=red]</strong>Hola!<strong>[/color]</strong><br /><br />o bé<br /><br /><strong>[color=#FF0000]</strong>Hola!<strong>[/color]</strong><br /><br />Ambdós es convertiran en <span style="color:red">Hola!</span></li><li>Podeu canviar la mida del text de manera similar utilitzant <strong>[size=][/size]</strong>. Aquesta etiqueta depèn de la plantilla que l’usuari ha seleccionat però el format recomanat és un valor numèric que representa la mida del text amb un percentatge, començant pel 20 i acabant al 200 (enorme) per defecte. Per exemple:<br /><br /><strong>[size=30]</strong>PETIT<strong>[/size]</strong><br /><br />normalment serà <span style="font-size:30%;">PETIT</span><br /><br />mentre que:<br /><br /><strong>[size=200]</strong>ENORME!<strong>[/size]</strong><br /><br />serà <span style="font-size:200%;">ENORME!</span></li></ul>'
	),
	array(
		0 => 'Puc combinar etiquetes de formatació?',
		1 => 'És clar que sí. Per exemple, per atreure l’atenció d’algú podrieu escriure:<br /><br /><strong>[size=200][color=red][b]</strong>MIRA’M!<strong>[/b][/color][/size]</strong><br /><br /> que es convertiria en <span style="color:red;font-size:200%;"><strong>MIRA’M!</strong></span><br /><br />Això no obstant, us recomanem que no abuseu dels texts amb aquest estil! Quan escrigueu una entrada, assegureu-vos de que les etiquetes estan tancades correctament. L’exemple següent és incorrecte:<br /><br /><strong>[b][u]</strong>Això és incorrecte<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citar un text i mostrar text amb amplària fixa'
	),
	array(
		0 => 'Citar un text en una resposta',
		1 => 'Hi ha dues maneres per citar un text, amb una referència o sense.<ul><li>Quan utilitzeu la funció Cita per respondre a una entrada del fòrum fixeu-vos que el text de l’entrada s’afegeix a la finestra del missatge entre etiquetes <strong>[quote=&quot;&quot;][/quote]</strong>. Aquest mètode us permet citar un text fent referència a una persona o a qualsevol altra cosa que hi vulgueu posar! Per exemple, per citar un fragment de text escrit pel senyor Cordills heu d’introduir:<br /><br /><strong>[quote=&quot;El senyor Cordills&quot;]</strong>El text que ha escrit el senyor Cordills va aquí<strong>[/quote]</strong><br /><br />Al resultat se li afegirà automàticament &quot;El senyor Cordills ha escrit:&quot; abans del text pròpiament citat. Recordeu que <strong>cal</strong> posar el nom de la persona que esteu citant entre cometes &quot;&quot; i que no són opcionals.</li><li>El segon mètode us permet citar qualsevol cosa que vulgueu. Per utilitzar-lo, poseu el text entre les etiquetes <strong>[quote][/quote]</strong>. Quan visualitzeu el missatge, simplement es mostrarà dintre d’un bloc per a citacions.</li></ul>'
	),
	array(
		0 => 'Mostrar codi o dades amb amplària fixa',
		1 => 'Si voleu mostrar un fragment de codi o qualsevol altra cosa que necessiti amplària fixa com ara el tipus de lletra Courier, heu de posar el text entre les etiquetes <strong>[code][/code]</strong>. Per exemple:<br /><br /><strong>[code]</strong>echo &quot;Això és un fragment de codi&quot;;<strong>[/code]</strong><br /><br />Tota la formatació utilitzada dintre de les etiquetes <strong>[code][/code]</strong> es manté en visualitzar-se després. Podeu activar el realçament de sintaxi per al PHP utilitzant <strong>[code=php][/code]</strong> i és el més recomanable quan publiqueu mostres de codi en PHP ja que en millora la legibilitat.'
	),
	array(
		0 => '--',
		1 => 'Generació de llistes'
	),
	array(
		0 => 'Creació d’una llista desordenada',
		1 => 'El BBCode permet l’ús de dos tipus de llistes, ordenades i desordenades. Bàsicament són com el seu equivalent en HTML. Una llista desordenada mostra cada element de la llista de manera seqüencial un darrere l’altre sagnant cadascun d’ells amb un pic. Per crear una llista desordenada utilitzeu <strong>[list][/list]</strong> i definiu cada element de la llista utilitzant <strong>[*]</strong>. Per exemple, per llistar els vostres colors preferits podeu utilitzar:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Roig<br /><strong>[*]</strong>Blau<br /><strong>[*]</strong>Groc<br /><strong>[/list]</strong><br /><br />Això es convertirà en la llista següent:<ul><li>Roig</li><li>Blau</li><li>Groc</li></ul>'
	),
	array(
		0 => 'Creació d’una llista ordenada',
		1 => 'El segon tipus de llista, la llista ordenada, us permet controlar què apareix abans de cada element. Per crear una llista ordenada utilitzeu <strong>[list=1][/list]</strong> per crear una llista numerada o alternativament <strong>[list=a][/list]</strong> per una llista alfabètica. De la mateixa manera que amb la llista desordenada els elements de la llista s’especifiquen utilitzant <strong>[*]</strong>. Per exemple:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Anar a la botiga<br /><strong>[*]</strong>Comprar un ordinador nou<br /><strong>[*]</strong>Maleir l’ordinador quan es penja<br /><strong>[/list]</strong><br /><br />es convertirà en :<ol style="list-style-type: decimal;"><li>Anar a la botiga</li><li>Comprar un ordinador nou</li><li>Maleir l’ordinador quan es penja</li></ol>Mentre que per a una llista alfabètica:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>La primera resposta possible<br /><strong>[*]</strong>La segona resposta possible<br /><strong>[*]</strong>La tercera resposta possible<br /><strong>[*]</strong>Cap de les anteriors<br /><strong>[/list]</strong><br /><br />es convertirà en:<ol style="list-style-type: lower-alpha"><li>La primera resposta possible</li><li>La segona resposta possible</li><li>La tercera resposta possible</li><li>Cap de les anteriors</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Creació d’enllaços'
	),
	array(
		0 => 'Enllaços a altres llocs web',
		1 => 'El BBCode admet diverses maneres diferents de crear enllaços.<ul><li>La primera utilitza l’etiqueta <strong>[url=][/url]</strong>, qualsevol cosa que escrigueu despres del signe = farà que el contingut de l’etiqueta es tracti com un URL. Per exemple, per enllaçar amb phpBB.com podeu utilitzar:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visiteu el lloc web del phpBB!<strong>[/url]</strong><br /><br />Això es convertirà en l’enllaç següent, <a href="http://www.phpbb.com/">Visiteu el lloc web del phpBB!</a> Tingueu en compte que l’enllaç s’obrirà en la mateixa finestra o bé en una finestra nova depenent de la configuració del navegador de l’usuari.</li><li>Si voleu que el propi URL es mostri en el text de l’enllaç, simplement utilitzeu:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />que es convertirà en l’enllaç següent, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>A més, el phpBB us proporciona una funció anomenada <i>Enllaços Màgics</i>, que convertirà qualsevol URL sintàcticament correcte en un enllaç sense que us calgui especificar ni les etiquetes ni el prefix http://. Per exemple, si escriviu www.phpbb.com en un missatge, automàticament es convertirà en <a href="http://www.phpbb.com/">www.phpbb.com</a> quan el visualitzeu.</li><li>El mateix passa amb les adreces de correu electrònic, podeu especificar l’adreça explicitament:<br /><br /><strong>[email]</strong>ningu@domini.adr<strong>[/email]</strong><br /><br />la qual cosa es convertirà en <a href="mailto:ningu@domini.adr">ningu@domini.adr</a> o bé simplement escriviu ningu@domini.adr dintre del vostre missatge i es farà la conversió automàticament quan el visualitzeu.</li></ul>De la mateixa manera que les altres etiquetes del BBCode, podeu posar un enllaç dintre d’altres etiquetes com ara <strong>[img][/img]</strong> (vegeu l’entrada següent), <strong>[b][/b]</strong>, etc. Igual que amb les etiquetes de formatació, cal que respecteu l’ordre en què s’obren i es tanquen, per exemple:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">no</span> és correcte la qual cosa podria provocar que l’entrada sigui eliminada.'
	),
	array(
		0 => '--',
		1 => 'Mostrar imatges en una entrada'
	),
	array(
		0 => 'Afegir una imatge a una entrada',
		1 => 'El BBCode té una etiqueta per incloure imatges en les entrades. Les dues coses que cal recordar quan utilitzeu aquesta etiqueta són: les entrades on es mostren moltes imatges molesten a la majoria d’usuaris i, sobretot, cal que la imatge que voleu mostrar estigui disponible a Internet (això vol dir que no pot existir només en el vostre ordinador si no és que es tracta d’un servidor web!). Per mostrar una imatge heu de posar l’URL que l’identifica entre etiquetes <strong>[img][/img]</strong>. Per exemple:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Tal com s’ha explicat en la secció d’enllaços, podeu posar una imatge dintre de les etiquetes <strong>[url][/url]</strong>, per exemple:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />es convertirà en:<br /><br /><a href="http://www.phpbb.com/"><img src="http://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Afegir fitxers adjunts a una entrada',
		1 => 'Podeu afegir fitxers adjunts en qualsevol part d’una entrada utilitzant el nou BBCode <strong>[attachment=][/attachment]</strong>, si la funció de fitxers adjunts ha estat activada per l’administrador del fòrum i si us han assignat els permisos corresponents. A la finestra de creació d’entrades trobareu un desplegable (o bé un botó) que us permetrà situar els fitxer adjunts en línia.'
	),
	array(
		0 => '--',
		1 => 'Altres questions'
	),
	array(
		0 => 'Puc afegir les meves pròpies etiquetes?',
		1 => 'Si sou un administrador d’aquest fòrum i teniu els permisos adequats, podeu afegir BBCodes addicionals a la secció BBCodes Personalitzats.'
	),
);
