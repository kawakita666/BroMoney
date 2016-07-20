<?php
/***************************************************************************
 *                         lang_bbcode.php [Slovak]
 *                         -----------------------
 *     characterset         : Windows-1250
 *     begin                : 08-08-2002
 *     copyright            : (c) 2002 The phpBB SK Group
 *     email                : kolenkas@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_bbcode.php,v 1.1.2.2 2002/11/14 14:00:15 psotfx Exp $
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
  
$faq[] = array("--","�vod");
$faq[] = array("�o s� zna�ky ?", "Zna�ky s� zvl�tne pr�kazy vlo�en� do HTML. Pou��vanie zna�iek vo va�ich pr�spevkoch vo f�re povo�uje administr�tor. M��ete si dodato�n� zak�za� pou��vanie zna�iek v jednotliv�ch pr�spevkoch vo formul�ri k zaslaniu pr�sp�vku. Zna�ky s� ve�mi podobn� �t�lu HTML, pr�kazy s� zap�san� v zlo�en�ch z�tvork�ch [] a uzavieraj� v�dy nejak� text, ktor� sa n�sledne chov� pod�a t�chto pr�kazov. Zna�ky v�m umo�nia r�chle form�tovanie p�san�ho textu. Sami sa teda m��ete rozhodn��, �i budete chcie� pou��va� tieto zna�ky, ktor� s� zahrnut� vo formul�ri pre odoslanie pr�spevku, �i budete pou��va� HTML.");

$faq[] = array("--","Form�tovanie textu");
$faq[] = array("Ako vytvori� text p�san� tu�ne, kurz�vou �i pod�iarknut�", "Zna�ky obsahuj� pr�kazy pre r�chlu zmenu �t�lu v�ho textu. M��ete sa pozrie� ako �ahko dosiahnu� po�adovan� v�sledok.<ul><li>Pre vytvorenie tu�ne p�san�ho textu, obklop�te text medzi <b>[b][/b]</b><br /><br /><p>pr�klad: <b>[b]</b>Ahoj<b>[/b]</b><br />V�sledkum je <b>Ahoj</b></li></p><p><li>Pre pod�iarknutie textu, obklop�te text medzi <b>[u][/u]</b><br /><br />pr�klad: <b>[u]</b>Dobr� de�<b>[/u]</b><br />V�sledkom je <u>Dobr� de�</u></li></p><p><li>Pre text p�san� kurz�vou, obklop�te text medzi <b>[i][/i]</b><br /><br />pr�klad: Toto je <b>[i]</b>uk�ka<b>[/i]</b><br />V�sledkom je Toto je <i>uk�ka</i></li></p></ul>");
$faq[] = array("Ako zmeni� farbu a ve�kos� p�sma", "Pre zmenu farby alebo ve�kosti textu je ur�en�ch nieko�ko pr�kazov. Dajte si pozor na to ako bude v�stup zobrazen� v z�vislosti na va�om prehliada�i a syst�me:<ul><li>pre zmenu farby textu, obklop�te po�adovan� text medzi <b>[color=][/color]</b>. M��ete pou�i� bu� n�zvy farieb (napr. red, blue, yellow, at�.) alebo odpovedaj�ce hexadecim�lne k�dy farby, napr. #FFFFFF, #000000. Na pr�klade si uk�eme ako vytvori� �erven� text:<br /><br /><b>[color=red]</b>Ahoj!<b>[/color]</b><br /><br />alebo<br /><br /><b>[color=#FF0000]</b>Ahoj!<b>[/color]</b><br /><br />V�sledkom bude <span style=\"color:red\">Ahoj!</span></li><li>Zmenu ve�kosti textu vykon�me podobne pou�it�m <b>[size=][/size]</b>. Tento pr�kaz m� p�eddefinovan� ��seln� hodnoty, kter� maj� p�i�azenu odpov�daj�c� velikosti p�sma v bodoch, za��naj�c od 1 (ve�mi mal� p�smo, nejmen�ie vidite�n�) a� po 29 (ve�mi ve�k�). Pre uk�ku:<br /><br /><b>[size=9]</b>MAL�<b>[/size]</b><br /><br />V�sledkom je <span style=\"font-size:9px\">MAL�</span><br /><br />zatia� �o:<br /><br /><b>[size=24]</b>VE�K�<b>[/size]</b><br /><br />zobraz� <span style=\"font-size:24px\">VE�K�</span></li></ul>");
$faq[] = array("Je mo�n� sp�ja� form�tovacie zna�ky ?", "�no, toto je mo�n�, na nasleduj�com pr�klade si uk�eme ako spr�vne tieto zna�ky zap�sa�. Je ve�mi d�le�it� dodr�a� aj ich postupnos�.<br /><br /><b>[size=18][color=red][b]</b>Pozri sa<b>[/b][/color][/size]</b><br /><br />V�sledkom je <span style=\"color:red;font-size:18px\"><b>Pozri sa</b></span><br /><br />Pokia� nedodr��te postupnos� ukon�en� zna�iek v porad� v akom boli vkladan�, bude text zobrazen� chybne! V�dy je potrebn� uzaviera� zna�ky v postupnosti v akej boli zadan�. Pozrite sa na nasleduj�cu uk�ku, kde s� zna�ky nekorektne uzavret�:<br /><br /><p><b>[b][u]</b>Toto je chyba!<b>[/b][/u]</b></p>");

$faq[] = array("--","Cit�cia a pevn� ��rka textu pri odoslan�");
$faq[] = array("Cit�cia textu v odpovedi", "S� dva sp�soby zadania citovan�ho textu, s pouk�zan�m a bez neho.<ul><li>Ke� je to vhodn� m��ete pou�i� cit�t k pr�spevku, ktor� prid� pouk�zanie a text do zvl�tneho boxu v pr�spevku. Text cit�cie uzavrite medzi <b>[quote=\"\"][/quote]</b>. Tento zp�sob prid� k cit�cii va�e pouk�zanie koho citujete alebo komu je ur�en�. V nasleduj�com pr�klade si uk�eme ako zad�me text, ktor� vyslovil Karol Nov�k:<br /><br /><b>[quote=\"Karol Nov�k\"]</b>Toto je text, ktor� vyslovil tento p�n.<b>[/quote]</b><br /><br /> V�sledkom bude automatick� pridanie pouk�zania Karol Nov�k nap�sal: a text cit�cie. Pokia� chcete zada� text ako svoj vlastn� cit�t, pr�padne nikoho neur�ova�, zad�te len z�tvorky \"\". T�to vo�ba nie je povinn�.</li><p><li>Druh�m sp�sobom je citova� text bez pouk�zania. Po�adovan� text, ktor� chcete citova� uzavrite medzi <b>[quote][/quote]</b>. Ke� si zobraz�te v�sledok takejto spr�vy, bude tu nejprv namiesto pouk�z�nia len nap�sal: a text cit�tu.</li></p></ul>");
 
$faq[] = array("V�stup k�du alebo pevn� ��rka d�t", "Ak chcete vlo�i� kus k�du alebo �oko�vek �o vy�aduje pevn� ��rku (font typu Courier), obklopte text medzi <b>[code][/code]</b><br /><br /><p>napr�klad: <b>[code]</b>echo \"Toto je k�d\";<b>[/code]</b></p>");

$faq[] = array("--","Generovanie zoznamu");
$faq[] = array("Vytv�ranie jednoduch�ho zoznamu", "Zna�ky obsahuj� aj pr�kazy pre vytv�ranie zoznamov. Podporovan� s� dva druhy zoznamov, jednoduch� a �trukturovan�. Jednoduch� zoznam zobraz� jednotliv� polo�ky zoznamu postupne pod sebou oddelen� odr�kou. Pre vytvorenie zoznamu pou�ite <b>[list][/list]</b> a definujte jednotliv� polo�ky pomocou <b>[*]</b>. Pozrite sa na nasleduj�cu uk�ku jednoduch�ho zoznamu:<br /><br /><b>[list]</b><br /><b>[*]</b>�erven�<br /><b>[*]</b>modr�<br /><b>[*]</b>zelen�<br /><b>[/list]</b><br /><br />V�sledkom by bolo:<ul><li>�erven�</li><li>modr�</li><li>zelen�</li></ul>");
$faq[] = array("Vytv�ranie �trukturovan�ho zoznamu", "Druh�m sp�sobom je vytv�ranie �trukturovan�ch zoznamov. Od predch�dzaj�ceho typu sa l�i znakom pred textom jednotliv�ch polo�iek, namiesto bodky je tu pou�it� niektor� z dvoch sp�sobov vzostupn�ho ozna�enia polo�iek zoznamu. Pre vytvorenie ��slovan�ho zoznamu pou�ite <b>[list=1][/list]</b> a pre abecedn� zoznam <b>[list=a][/list]</b>. Jednotliv� polo�ky zoznamu definujete pomocou <b>[*]</b>. Pozrite sa na nasleduj�cu uk�ku:<br /><br /><b>[list=1]</b><br /><b>[*]</b>�erven�<br /><b>[*]</b>modr�<br /><b>[*]</b>zelen�<br /><b>[/list]</b><br /><br />V�sledkom bude:<ol type=\"1\"><li>�erven�</li><li>modr�</li><li>zelen�</li></ol>Pre vytvorenie abecedn�ho zoznamu pou�ite:<br /><br /><b>[list=a]</b><br /><b>[*]</b>prv� mo�n� odpove�<br /><b>[*]</b>druh� mo�n� odpove�<br /><b>[*]</b>tretia mo�n� odpove�<br /><b>[/list]</b><br /><br />V�sledok:<ol type=\"a\"><li>prv� mo�n� odpove�</li><li>druh� mo�n� odpove�</li><li>tretia mo�n� odpove�</li></ol>");

$faq[] = array("--", "Vytvorenie odkazu");
$faq[] = array("Odkaz na in� webov� str�nky", "phpBB zna�ky podporuj� vytvorenie URL odkazov odkazuj�cich sa na in� internetov� str�nky �i emailov� adresy.<ul><li>Prv�m sp�sobom je pou�i� <b>[url=][/url]</b> zna�ky, za znak = p dopln�te URL adresu, na ktor� chcete odkazova�. Text medzi obomi zna�kami bude zv�raznen� a z�rove� bude sl��i� ako odkaz na uveden� URL adresu. Pozrite sa na nasleduj�c� pr�klad odkazuj�ci na server phpbb.com:<br /><br /><b>[url=http://www.phpbb.com/]</b>Str�nky phpBB<b>[/url]</b><br /><br />T�mto sa vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Str�nky phpBB</a> Pokia� kliknete na tento vytvoren� odkaz, otvor� sa v�m v novom okne prehliada�a odkaz na ktor� smerujete.</li><li>Ak chcete zobrazi� URL priamo ako odkaz pou�ite nasleduj�ci postup:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />T�mto sa vygeneruje odkaz, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>V pr�pade zadania syntakticky spr�vneho URL aj bez za�iato�n�ho http:// do textu pr�spevku automaticky odkaz na zadan� URL adresu. Pre uk�ku si m��ete sk�si� nap�sa� do pr�spevku www.phpbb.com a uvid�te, �e sa v�m text vo v�sledku zobraz� automaticky jako odkaz <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Obdobn�m zp�sobom sa daj� vytv�ra� aj odkazy na emailov� adresy, zadajte po�adovan� emailov� adresu pod�a pr�kladu:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />V�sledok potom bude <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> alebo m��ete zada� v texte pr�pspevku no.one@domain.adr a adresa sa op� automaticky premen� na odkaz.</li></ul>URL odkaz m��ete zada� medzi ktor�ko�vek �al�ie zna�ky: Ak uzavriete URL medzi <b>[img][/img]</b> (vi� nasleduj�ca kapitola) m��e by� odkazom aj obr�zok. Len potom nezabudnite na spr�vnu postupnos� uzatv�rania zna�iek.");

$faq[] = array("--", "Zobrazenie obr�zkov v pr�spevkoch");
$faq[] = array("Pridanie obr�zku do pr�spevku", "phpBB zna�ky �alej umo��uj� vkladanie obr�zkov do textu pr�spevku �i spr�vy. Toto je ve�mi u�ito�n� vlastnos�, v�aka ktorej nemus�te odkazova� na s�bory obr�zkov o ktor�ch napr�klad p�ete, ale v�etci u��vatelia ich hne� vidia vo va�om pr�spevku. Ako bolo uveden� vy��ie, m��ete vyu�i� obr�zok k vytvoreniu URL odkazu na v� server alebo napr�klad pre zv��eninu mal�ho obr�zku tu v pr�spevku. Obr�zok sa mus� v�ak v�dy nach�dza� na internete a by� tak dostupn� pre v�etk�ch u��vate�ov, nie je mo�n� sa teda odkazova� na s�bory, ktor� m�te napr�klad na lok�lnom disku v�ho po��ta�a, preto�e k nim by u��vatelia internetu nemali pr�stup. Pre zobrazenie obr�zku mus�te uzav�ie� URL obr�zku medzi <b>[img][/img]</b>.<br /><br />pr�klad: <b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Ak zad�te URL adresu obr�zku medzi <b>[url][/url]</b>, m��e by� odkazom obr�zok.<br /><br />pr�klad: <b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />V�sledkom bude:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

//
// This ends the BBCode guide entries
//

?>