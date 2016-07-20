<?php
/***************************************************************************
 *                         lang_bbcode.php [Galician]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 0.9 2002/03/05 01:53:26 Pato[100%Q]
 *
 ***************************************************************************/

  /****************************************************************************
 * Translation by:
 * Sergio Ares Chao :: sergio@ciberagendas.com
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// Para engadir unha entrada de BBcode simplemente engada unha li�a a este arquivo es este formato:
// $faq[] = array("pregunta", "resposta");
// Se queres separar unha secci�n, pon $faq[] = array("--","Encabezado del bloque opcional");
// Los enlaces se crearan automaticamente
//
// NON ESQUEZA o ; o fin da li�a.
// NON PO�A COMI�AS DOBRES (") no BBCode que introduza, se e imprescindible utilice barras invertidas e dicir:  \"lo que sea\";
//
// Os items da guia BBCode apareceran na paxina da guia BBCode na mesma orde en que se listan neste arquivo
//
// Se soamente esta a traducir este arquivo, por favor non alteres o HTML a menos que sexa absolutemente innecesario
//
// Tampouco traduzca as cores referidas a BBCode en ningunha seccion, se o fai
// os usuarios que naveguen co seu idioma poderian confundirse � ver que o BBCode non funciona :D Si pode cambiar as
// referencias 'en li�a" no texto.
//
  
$faq[] = array("--","Introducci�n");
$faq[] = array("�Que � o c�digo BBCode?", "BBCode � unha implementaci�n especial do HTML, a forma na que BBCode se usa � determinada polo administrador, � moi similar � HTML, as etiquetas van entre corchetes [ e ]");

$faq[] = array("--","Formateo de texto");
$faq[] = array("�Como crear texto en negri�as, cursiva o subli�ado?", "BBCode inclue etiquetas para isto: [b][/b] para negri�as, [u][/u] para subli�ar y [i][/i] para cursivas, estas p�dense combinar entre si, � xenial! :)");
$faq[] = array("�Como cambia-la cor ou tama�o de texto?", "Para cambia-la cor: [color=][/color], pode escribi-lo nome da cor en ingl�s ou o c�digo hexadecimal pertencente a el, ej. #FFFFFF, #000000.  para crear vermello [color=red]Hola![/color]. Cambia-lo tama�o � similar: [size=][/size], utilizando n�meros d0 1 �29 (moi grande!)");
$faq[] = array("�Podo combinar as etiquetas de formato?", "Si :)");

$faq[] = array("--","Citar de texto ou c�digo");
$faq[] = array("Citar texto nas respostas", "Hai d�as formas de facelo: cunha referencia ou sen ela, para facelo con referencia utiliza a opci�n CITAR do foro � dar unha resposta, a mensaxe a citar � anexado � s�a autom�ticamente como: [quote=\"\"][/quote] O outro m�todo (sen referencia) � po�er unha etiqueta parecida, pero agregando o autor do texto citado, � dicir: [quote=\"Anita\"]</b>O que diga Anita debe ir aqu�, lembre incluir \"\" arredor do nome a citar, se non quere inclui-lo nome, s� peche o texto entre as etiquetas [quote][/quote]");
$faq[] = array("Escribindo c�digo ou texto de outro tama�o", "� escribir c�digo ser� posto nunha fonte tipo Typewriter, como Courier, s� peche � texto entre as etiquetas [code][/code] desta forma: [code]echo \"Esto suponse � c�digo\";[/code].");

$faq[] = array("--","Creando Listas");
$faq[] = array("Creando unha lista desordenada", "BBCode soporta dous tipos de listas, desordenadas e ordenadas, � exactamente coma en HTML, s� que coas seguientes etiquetas: Para unha desordenada [list][/list], definiendo cada parte da lista con [*]. Por exemplo, para enlistar os seus animales favoritos use [list][*]Vaca[*]Can[*]Coello[/list], esto xerar� algo como isto:<ul><li>Vaca</li><li>Can</li><li>coello</li></ul>");
$faq[] = array("Creando unha lista ordenada", "O segundo tipo de lista � a ordenada, para creala use [list=1][/list] para crear una lista con numeraci�n ou [list=a][/list] para unha con orden alfab�tica, cada parte da lista especi�case tam�n con [*] Por exemplo: [list=1][*]Vaca[*]Can[*]Coello[/list] xerar� algo coma: <ol><li>Vaca</li><li>Can</li><li>coello</li></ol>");

$faq[] = array("--", "Creando Enlaces");
$faq[] = array("Creando un enlace a outro sitio", "phpBB BBCode soporta varias formas de facer un enlace, a primeira � con [url=][/url], por exemplo, para facer un enlace a phpBB.com pode usar:[url=http://www.phpbb.com/]Visite phpBB![/url], os enlaces abriranse nunha nova fiestra, outra forma � [url]http://www.phpbb.com/[/url]. Este foro ten tam�n ENLACES M�XICOS, por exemplo, se teclea www.phpbb.com na s�a mensaxe aparecer� automaticamente como enlace. Para facer un enlace a un correo electr�nico deber� po�er: [email]alguen@seuenderezo.com[/email] ou simplemente teclea-lo enderezo e convertirase nun enlace. Pode combina-lo coa etiqueta [img][/img] para que o enlace sexa unha imaxe, as�: [url=http://www.phpbb.com/][img]http://www.phpbb.com/images/phplogo.gif[/url][/img].");

$faq[] = array("--", "Publicando imaxes nas mensaxes");
$faq[] = array("Engadindo unha imaxe � mensaxe", "Para po�er unha imaxe simplemente escriba [img]URL[/img] donde URL � o enderezo donde est� a s�a imaxe, por exemplo [img]http://www.phpbb.com/images/phplogo.gif[/img], tam�n pode xerar enlaces do seguinte xeito: [url=][/url] as� [url=http://www.phpbb.com/][img]http://www.phpbb.com/images/phplogo.gif[/img][/url]");

$faq[] = array("--", "Outros");
$faq[] = array("�Podo engadi-las mi�as propias etiquetas?", "Non, non nesta version de phpBB (2), seguramente ser� posible en versiones posteriores a esta");

//
// Outro arquivo fora :)
//

?>