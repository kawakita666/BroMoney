<?php
/***************************************************************************
 *                         lang_bbcode.php [lithuanian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 ProTON Exp $
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","�vadas");
$faq[] = array("Kas yra BBKodas?", "BBKodas - tai specialus kodas labai primenantis HTML. Skirtumas tas, kad BBKodas ra�omas tarp [ ir ] skliaust�, o HTML tarp &lt; ir &gt; . BBKodas suteikia papildom� apsaug� ir kontrol�, kad � diskusijas nepatekt� nereikalingas HTML kodas, kuris gali sudarkyti dizain�, strukt�r� ir t.t. Globaliai BBKod� gali i�jungti/�jungti administratorius. Jeigu BBKodas �jungtas, paprasti vartotojai gali j� �jungti ir i�jungti per savo nustatymus, arba tiesiog prie kiekvienos �inut�s nuimdami varnel� nuo <i>I�jungti BBKod� �iame prane�ime</i>.");

$faq[] = array("--","Teksto formavimas");
$faq[] = array("Kaip ra�yti pary�kintai, pasvirusiomis raid�mis, arba pabrauktai", "BBKodas turi �ymenis, kurie leis greitai keisti pradin� teksto stili�. Tai daroma taip: <ul><li>Nor�dami pary�kinti, apskliauskite savo tekst� taip <b>[b][/b]</b>, pvz. <br /><br /><b>[b]</b>Labas<b>[/b]</b><br /><br />tada tampa <b>Labas</b></li><li>Nor�dami pabraukti, apskliauskite tekst� �itaip <b>[u][/u]</b>, pavyzd�iui:<br /><br /><b>[u]</b>Labas rytas<b>[/u]</b><br /><br />tampa <u>Labas rytas</u></li><li>Nor�dami ra�yti pasvirusiomis raid�mis, naudokite <b>[i][/i]</b>, pvz.<br /><br />Tai yra <b>[i]</b>puiku!<b>[/i]</b><br /><br />tokiu atveju tampa Tai yra <i>puiku!</i></li></ul>");
$faq[] = array("Kaip pakeisti teksto spalv� ar dyd�", "Nor�dami keisti teksto spalv� ar dyd� naudokite �iuos �ymenis. Atsiminkite, kad �ie parametrai priklauso nuo vartotojo naudojamos nar�ykl�s ir operacin�s sistemos: <ul><li>Spalvos keitimui naudojami <b>[color=][/color]</b>. Galite �ra�yti angli�kus spalv� pavadinimus (pvz. red, blue, yellow, ir t.t.) arba �e�ioliktainius spalv� kodus, pvz. #FFFFFF, #000000. Pavyzd�iui, apib�dinti raudon� tekst� galima taip:<br /><br /><b>[color=red]</b>Labas!<b>[/color]</b><br /><br />arba �itaip<br /><br /><b>[color=#FF0000]</b>Labas!<b>[/color]</b><br /><br />Abiem atvejais gausite <span style=\"color:red\">Labas!</span></li><li>Teksto dydis kei�iamas pana�iu b�du, panaudojant �ymen� <b>[size=][/size]</b>. �is parametras priklauso nuo j�s� diskusij� lentos stiliaus, ta�iau rekomenduojamas skaitinis formatas, kur skai�ius atitinka teksto dyd� pikseliais, pradedant 1 (toks ma�as tekstas, kad vos ��velgsite) iki 29 (labai didelis tekstas). Pavyzd�iui:<br /><br /><b>[size=9]</b>MA�AS<b>[/size]</b><br /><br />tampa <span style=\"font-size:9px\">MA�AS</span><br /><br />o pavyzd�iui:<br /><br /><b>[size=24]</b>MIL�INI�KAS!<b>[/size]</b><br /><br />tada tampa <span style=\"font-size:24px\">MIL�INI�KAS!</span></li></ul>");
$faq[] = array("Ar galiu kombinuoti teksto formavimo �ymenis vien� su kitu?", "Taip, beabejo galite. Pavyzd�iui nor�dami atkreipti kieno nors d�mes� galite para�yti:<br /><br /><b>[size=18][color=red][b]</b>PA�I�R�KITE � MANE!<b>[/b][/color][/size]</b><br /><br />tai atrodys taip <span style=\"color:red;font-size:18px\"><b>PA�I�R�KITE � MANE!</b></span><br /><br />Ta�iau nerekomenduojame taip ra�yti viso teksto! Tai pat �sitikinkite, kad �ymenys u�daryti teisingai. Tarkim �is pavyzdys yra neteisingas:<br /><br /><b>[b][u]</b>Taip yra blogai<b>[/b][/u]</b>");

$faq[] = array("--","Citavimas ir fiksuoto dyd�io tekstas");
$faq[] = array("Teksto citavimas atsakymuose", "Yra du b�dai, kaip galima cituoti tekst�: su autoriaus vardu ir be jo.<ul><li>Kai paspaud�iate mygtuk� \"Cituoti\", galite pasteb�ti, kad citatos tekstas apskliaud�iamas <b>[quote=\"\"][/quote]</b> �ymeniu. �ia galite nurodyti citatos autori�, ar bet k� kit�, k� tik norite. Pavyzd�iui, nor�dami pacituoti gabal� Jono prane�imo ra�ykite taip:<br /><br /><b>[quote=\"Jonas\"]</b>Jono tekstas<b>[/quote]</b><br /><br />Prie� citat� sistema automati�kai prid�s �od�ius: Jonas ra�o. �sid�m�kite, kad vard� <b>turite</b> ra�yti dvigubose kabut�se \"\" -- jos b�tinos.</li><li>Antruoju b�du galite cituoti daugiau nei vieno autoriaus prane�im�. Tiesiog kiekvien� citat� apskliauskite <b>[quote][/quote]</b> �ymeniu. Tokiu b�du sistema prie�ais kiekvien� citat� prid�s �od�: Citata.</li></ul>");
$faq[] = array("Fiksuoto dyd�io tekstas", "Jeigu jums reikia para�yti gabal� kodo ar �iaip kok� tekst�, kuris turi b�ti fiksuoto dyd�io, galite naudoti <b>[code][/code]</b>, pvz.<br /><br /><b>[code]</b>echo \"�ia yra kodas\";<b>[/code]</b><br /><br />�ymuo <b>[code][/code]</b> parodo tekst� tok� koks jis ir buvo �ra�ytas.");

$faq[] = array("--","S�ra�ai");
$faq[] = array("Nesutvarkytas s�ra�as", "BBKodas turi dviej� tip� s�ra�us, sutvarkytus ir nesutvarkytus. Jie beveik tokie patys kaip ir j� HTML atitikmenys. Nesutvarkyto s�ra�o punktai i�d�stomi vienas po kito ir kiekvienas pa�ymimas ta�ku. Tai padaroma panaudojus �ymen� <b>[list][/list]</b> ir kiekvien� punkt� s�ra�e pradedant ra�yti <b>[*]</b>. Pavyzd�iui, j�s� m�gstamiausi� spalv� s�ra�� galite apra�yti taip:<br /><br /><b>[list]</b><br /><b>[*]</b>Raudona<br /><b>[*]</b>M�lyna<br /><b>[*]</b>Geltona<br /><b>[/list]</b><br /><br />Realiai prane�imas atrodys taip:<ul><li>Raudona</li><li>M�lyna</li><li>Geltona</li></ul>");
$faq[] = array("Sutvarkytas s�ra�as", "Sutvarkytuose s�ra�uose galite pasirinkti kaip numeruoti punktus. <b>[list=1][/list]</b> �ymi skai�iais, o <b>[list=a][/list]</b> raid�mis sunumeruot� s�ra��. Kaip ir nesutvarkytuose s�ra�uose kiekvienas punktas pradedamas ra�yti simboliais <b>[*]</b>. Pavyzd�iui:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Nueiti � parduotuv�<br /><b>[*]</b>Nupirkti nauj� kompiuter�<br /><b>[*]</b>Keikti kompiuter� kai jis sulu�<br /><b>[/list]</b><br /><br />sugeneruos tok� s�ra��:<ol type=\"1\"><li>Nueiti � parduotuv�</li><li>Nupirkti nauj� kompiuter�</li><li>Keikti kompiuter� kai jis sulu�</li></ol>O �tai pavyzd�iui toks BBKodas:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Pirmas galimas atsakymas<br /><b>[*]</b>Antras galimas atsakymas<br /><b>[*]</b>Tre�ias galimas atsakymas<br /><b>[/list]</b><br /><br />atrodys taip:<ol type=\"a\"><li>Pirmas galimas atsakymas</li><li>Antras galimas atsakymas</li><li>Tre�ias galimas atsakymas</li></ol>");

$faq[] = array("--", "Nuorodos");
$faq[] = array("Nuorodos � kit� puslap�", "phpBB BBKode yra keletas b�d� kaip galima sukurti nuorodas � kitus puslapius.<ul><li>Pirmasis b�das: naudokite �ymen� <b>[url=][/url]</b>; viskas k� �ra�ysite po = �enklo, pavirs � nuorod�. Pavyzd�iui, nor�dami sukurti nuorod� � phpBB.com galite ra�yti taip:<br /><br /><b>[url=http://www.phpbb.com/]</b>Aplankykite phpBB!<b>[/url]</b><br /><br />Realiai tai atrodys ma�daug taip: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Aplankykite phpBB!</a> Galite pasteb�ti, kad puslapis atsidaro naujame lange, taigi j�s ir toliau galite nar�yti diskusijose.</li><li>Jeigu jums reikia parodyti pat� URL adres� papra��iausiai ra�ykite taip:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Tokiu b�du gausite: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Taip pat phpBB turi toki� galimyb� kaip <i>Automatin�s nuorodos</i>, kuri kiekvien� �od� bent kiek pana�� � URL paver�ia nuoroda. Pavyzd�iui, prane�ime para�ius www.phpbb.com automati�kai gausite nuorod� <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Tie patys dalykai galioja ir el. pa�to adresams. J�s galite naudoti arba special� �ymen�:<br /><br /><b>[email]</b>niekas@adresas.lt<b>[/email]</b><br /><br />kuris automati�kai pavirsta �  <a href=\"emailto:niekas@adresas.lt\">niekas@adresas.lt</a> arba galite tiesiog para�yti niekas@adresas.lt ir automati�kai gauti t� pat� efekt�.</li></ul>Kaip ir kitus BBKodo �ymenimis, URL adresais galite apskliausti bet kok� kit� �ymen�, tokius kaip <b>[img][/img]</b>, <b>[b][/b]</b>, ir t.t. Svarbiausia, kad visi �ymenys b�t� u�daryti teisingai. Pavyzd�iui:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />u�daryta <u>neteisingai</u>.");

$faq[] = array("--", "Paveiksl�li� rodymas");
$faq[] = array("Paveiksl�lio rodymas prane�ime", "phpBB BBKodu galite � savo prane�imus �traukti paveiksl�lius. Naudojant �� �ymen� reikia atsiminti du dalykus: pirma; dauguma vartotoj� nem�gsta daugyb�s paveiksl�li� prane�imuose, ir antra; paveiksl�lis turi b�ti Internete (jis negali b�ti j�s� kompiuteryje, nebent �inoma j�s� kompiuteris yra kartu ir Interneto serveris!). �iuo metu phpBB negali saugoti paveiksl�li� lokaliai (�i galimyb� bus sekan�ioje phpBB versijoje). Nor�dami parodyti paveiksl�l�, turite panaudoti <b>[img][/img]</b> ir tarp j� �ra�yti paveiksl�lio adres�. Pavyzd�iui:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Kaip jau buvo ra�yta ank��iau, galite prid�ti dar ir �ymen� <b>[url][/url]</b>, pvz.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />sugeneruos:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Kita");
$faq[] = array("Ar galiu naudoti savo �ymenis?", "Ne, phpBB 2.0 versijoje to negalite. Ta�iau phpBB Grup� stengsis tai �gyvendinti sekan�ioje pagrindin�je phpBB versijoje.");

//
// This ends the BBCode guide entries
//

?>