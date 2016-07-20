<?php
/***************************************************************************
 *                         lang_bbcode.php [Catalan]
 *                            -------------------
 *   begin                : Sun Jul 14, 2002
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   
 *   $Id: lang_bbcode.php,v 1.1.2.3 2002/11/14 23:31:32 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Introducci�");
$faq[] = array("Qu� �s el codi BBCode?", "BBCode �s una implementaci� especial de l'HTML. Si pots o no utilitzar BBCode al f�rum dep�n de l'administrador. A m�s, pots deshabilitar el BBCode a trav�s del formulari de publicaci� cada cop que envi�s un missatge. El BBCode �s similar a l'HTML, els marcadors van entre claud�tors [ i ] i ofereix un major control sobre qu� es mostra. Depenent de la plantilla que utilitzis veur�s que afegir BBCode als teus missatges �s molt f�cil gr�cies a la interf�cie situada a sobre de l'�rea que cont� el missatge al formulari de publicaci�. Tot i aix�, segurament trobar�s �til la seg�ent guia.");

$faq[] = array("--","Formataci� de text");
$faq[] = array("Com crear text en negreta, cursiva o subratllat?", "BBCode inclou marcadors que et permeten canviar r�pidament l'estil b�sic del text. Aix� s'aconsegueix de les seg�ents maneres: <ul><li>Per fer que un fragment de text es vegi en negreta fica'l entre <b>[b][/b]</b>, eg. <br /><br /><b>[b]</b>Hola<b>[/b]</b><br /><br />canvia a <b>Hola</b></li><li>Per subratllar utilitza <b>[u][/u]</b>, per exemple :<br /><br /><b>[u]</b>Bon Dia<b>[/u]</b><br /><br />canvia a <u>Bon Dia</u></li><li>Per utilitzar text en cursiva utilitza <b>[i][/i]</b>, eg.<br /><br />�s <b>[i]</b>Genial!<b>[/i]</b><br /><br />canvia a �s <i>Genial!</i></li></ul>");
$faq[] = array("Com canviar el color o la mida del text?", "Per canviar el color i la mida es poden utilitzar els seg�ents marcadors. Tingues en compte que la manera com apareix el text dep�n del navegador i el sistema de l'usuari: <ul><li>Per canviar el color del text cal ficar-lo entre <b>[color=][/color]</b>. Pots especificar un nom de color reconegut (eg. red, blue, yellow, etc.) o l'alternativa del triplet hexadecimal, eg. #FFFFFF, #000000. Per exemple, per crear text roig pots utilitzar:<br /><br /><b>[color=red]</b>Hola!<b>[/color]</b><br /><br />o<br /><br /><b>[color=#FF0000]</b>Hola!<b>[/color]</b><br /><br />mostraran <span style=\"color:red\">Hola!</span></li><li>Canviar la mida del text s'aconsegueix de manera similar utilitzant <b>[size=][/size]</b>. Aquest marcador dependr� de la plantilla que estiguis utilitzant per� el format recomanat �s un valor num�ric que representa la mida del text en pixels, comen�ant per l'1 (tan petit que ni el veur�s) fins al 29 (enorme). Per exemple:<br /><br /><b>[size=9]</b>PETIT<b>[/size]</b><br /><br />ser�, generalment, <span style=\"font-size:9px\">PETIT</span><br /><br />mentre que:<br /><br /><b>[size=24]</b>ENORME!<b>[/size]</b><br /><br />ser� <span style=\"font-size:24px\">ENORME!</span></li></ul>");
$faq[] = array("Puc combinar marcadors de formataci�?", "Clar que pots, per exemple, per captar l'atenci� d'alg� pots escriure:<br /><br /><b>[size=18][color=red][b]</b>MIRA'M!<b>[/b][/color][/size]</b><br /><br />i obtindr�s <span style=\"color:red;font-size:18px\"><b>MIRA'M!</b></span><br /><br />Et recomanem, per�, que no escriguis molts texts amb aquest aspecte! I recorda que �s cosa teva assegurar-te que els marcadors es tanquen correctament. Per exemple, la seg�ent l�nia �s incorrecta:<br /><br /><b>[b][u]</b>Aix� est� malament<b>[/b][/u]</b>");

$faq[] = array("--","Citar text i mostrar codi tabulat");
$faq[] = array("Citar un text en una resposta", "Hi ha dues maneres de citar un text, amb una refer�ncia o sense.<ul><li>Quan utilitzes la funci� Citar per respondre a un missatge del f�rum, adona't que el missatge s'afegeix a la finestra de missatge dintre d'un bloc <b>[quote=\"\"][/quote]</b>. Aquest m�tode et permet escriure cites amb una refer�ncia a una persona o a qualsevol cosa que decideixis posar! Per exemple, per citar un fragment de text escrit per Mr Blobby hauries d'escriure:<br /><br /><b>[quote=\"Mr. Blobby\"]</b>El text escrit per Mr. Blobby aniria aqu�<b>[/quote]</b><br /><br />El missatge resultant afegir� autom�ticament, Mr. Blobby escrigu�: abans del text del teu missatge. Recorda que <b>has d'incloure</b> les cometes \" \" envoltant el nom de la persona que est�s citant, no s�n opcionals.</li><li>El segon m�tode et permet citar qualsevol cosa sense cap refer�ncia. Per fer-ho envolta el text amb els marcadors <b>[quote][/quote]</b>. Quan vegis el missatge, simplement mostrar� Cita: abans del text pr�piament dit.</li></ul>");
$faq[] = array("Escriure codi o dades tabulades", "Si vols escriure un fragment de codi o, de fet, qualsevol cosa que requereixi una amplada fixa, eg. font del tipus Courier, hauries de col�locar el text entre els marcadors <b>[code][/code]</b>, eg.<br /><br /><b>[code]</b>echo \"Aix� �s un fragment de codi\";<b>[/code]</b><br /><br />Tota la formataci� utilitzada dintre dels marcadors <b>[code][/code]</b> es conserva quan es visualitza despr�s.");

$faq[] = array("--","Generar Llistes");
$faq[] = array("Crear una llista desordenada", "BBCode suporta dos tipus de llistes, desordenades i ordenades. Fonamentalment s�n el mateix que els seus equivalents HTML. Una llista desordenada mostra cada element de la teva llista seq�encialment, un despr�s de l'altre, amb sagnia i un determinat car�cter. Per crear una llista desordenada utilitza <b>[list][/list]</b> i defineix cada element de la llista utilitzant <b>[*]</b>. Per exemple, per llistar els teus colors preferits pots utilitzar:<br /><br /><b>[list]</b><br /><b>[*]</b>Roig<br /><b>[*]</b>Blau<br /><b>[*]</b>Groc<br /><b>[/list]</b><br /><br />Es generar� la seg�ent llista:<ul><li>Roig</li><li>Blau</li><li>Groc</li></ul>");
$faq[] = array("Crear una llista ordenada", "El segon tipus de llista, una llista ordenada, et dona control sobre qu� es mostra abans de cada element. Per crear una llista ordenada utilitza <b>[list=1][/list]</b> per crear una llista numerada o, alternativament, <b>[list=a][/list]</b> per una llista alfab�tica. De la mateixa manera que amb les llistes desordenades, els elements s'especifiquen utilitzant <b>[*]</b>. Per exemple:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Anar a la botiga<br /><b>[*]</b>Comprar un ordinador nou<br /><b>[*]</b>Maleir l'ordinador quan es penja<br /><b>[/list]</b><br /><br />Generar� la seg�ent llista:<ol type=\"1\"><li>Anar a la botiga</li><li>Comprar un ordinador nou</li><li>Maleir l'ordinador quan es penja</li></ol>Mentre que per una llista alfab�tica hauries d'utilitzar:<br /><br /><b>[list=a]</b><br /><b>[*]</b>La primera resposta possible<br /><b>[*]</b>La segona resposta possible<br /><b>[*]</b>La tercera resposta possible<br /><b>[*]</b>Cap de les anteriors<br /><b>[/list]</b><br /><br />per obtenir<ol type=\"a\"><li>La primera resposta possible</li><li>La segona resposta possible</li><li>La tercera resposta possible</li><li>Cap de les anteriors</li></ol>");

$faq[] = array("--", "Crear Enlla�os");
$faq[] = array("Crear un enlla� a una altra p�gina web", "phpBB BBCode suporta diverses maneres de crear URLs.<ul><li>La primera utilitza el marcador <b>[url=][/url]</b>, qualsevol cosa que escriguis despr�s del signe = far� que el contingut d'aquest marcador actu� com un URL. Per exemple per ficar un enlla� a phpBB.com podries utilitzar:<br /><br /><b>[url=http://www.phpbb.com/]</b>Visita phpBB!<b>[/url]</b><br /><br />Es generaria el seg�ent enlla�, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visita phpBB!</a> T'adonar�s que l'enlla� s'obre en una finestra nova per tal que els usuaris puguin continuar navegant els f�rums si aix� ho desitgen.</li><li>Si vols que l'URL mateix es mostri com un enlla� pots fer-ho simplement utilitzant:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Es generaria el seg�ent enlla�, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Addicionalment phpBB permet una cosa anomenada <i>Magic Links</i> que fan que qualsevol URL sint�cticament correcta es converteixi en un enlla� sense necessitat d'especificar cap marcador ni l'entrada http://. Per exemple, escriure www.phpbb.com en el teu missatge far� autom�ticament que <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> es mostri en el teu missatge.</li><li>Amb les adreces electr�niques el procediment �s el mateix, pots especificar una adre�a de manera expl�cita, per exemple:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />que es mostrar� com <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> o pots escriure simplement no.one@domain.adr en el teu missatge i ser� convertit autom�ticament.</li></ul>Com amb tots els marcadors BBCode, pots modificar els URLs amb qualsevol dels altres marcadors com <b>[img][/img]</b> (veure seg�ent entrada), <b>[b][/b]</b>, etc. De la mateixa manera que amb els marcadors de formataci�, �s la teva responsabilitat assegurar-te que aquests s'obren i es tanquen correctament, per exemple:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>no</u> �s correcte, la qual cosa podria portar a que el teu missatge sigui esborrat, �s a dir ves amb cura.");

$faq[] = array("--", "Mostrar imatges en els missatges");
$faq[] = array("Afegir una imatge a un missatge", "phpBB BBCode incorpora un marcador per incloure imatges als teus missatges. Dues coses molt importants que cal recordar quan s'utilitzen marcadors s�n les seg�ents: a molts usuaris no els agrada que els missatges mostrin munts d'imatges i ,segon, la imatge que mostres ha d'estar disponible a internet (no pot existir nom�s al teu ordinador per exemple, a no ser que sigui un servidor web!). De moment no hi ha manera d'emmagatzemar imatges localment amb phpBB (totes aquestes peticions s'espera que siguin implementades a la seg�ent versi� de phpBB). Per mostrar una imatge has d'envoltar l'URL que indica l'adre�a de la imatge amb els marcadors <b>[img][/img]</b>. Per exemple:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Com s'ha explicat en la secci� anterior pots ficar una imatge dintre un marcador <b>[url][/url]</b> si ho desitges, eg.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />generaria:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Altres");
$faq[] = array("Puc afegir els meus propis marcadors?", "No, desafortunadament no de manera directa a phpBB 2.0. Estem mirant d'oferir marcadors BBCode configurables per a la pr�xima versi�.");

//
// Amb aix� s'acaben les entrades de la guia de BBCode
//

?>