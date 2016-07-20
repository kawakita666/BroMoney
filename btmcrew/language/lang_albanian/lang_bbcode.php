<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.1.2.1 2002/11/14 14:00:08 psotfx Exp $
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
/***************************************************************************/
 *
 *  Translation to Albanian done by alket ---> alkettttt@yahoo.com
 * http://www26.brinkster.com/alketttt/
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
  
$faq[] = array("--","Hyrje");
$faq[] = array("C'�sht� BBCode?", "BBCode �sht� nj� implementim special i HTML. P�rdorimi i BBCode tek forumi juaj varet nga konfigurimi q� ka b�r� administratori. P�r m� tep�r BBCode mund t� aktivizohet ose c'aktivizohet n� mesazhet individuale. BBCode �sht� shum� i ngjash�m me HTML, tags jan� mbyllur brenda kllapave katrore [ and ] n� vend t� &lt; and &gt; dhe ofron kontroll m� t� madh n� formatimin e teksteve. N� var�si t� shabllonit n� p�rdorim, shtimi i BBCode n� mesazhet tuaja �sht� shum� i leht� n�p�rmjet kodeve t� klikueshme mbi p�rmbajtjen e mesazhit n� formularin e postimit. Megjithat� guida e m�poshtme mund t'ju hyj� n� pun�.");

$faq[] = array("--","Formatimi i tekstit");
$faq[] = array("Si t� krijoni tekst bold, underlined dhe italic.", "BBCode ju lejon ta ndryshoni stilin e tekstit shum� thjesht�. Psh: <ul><li>P�r ta b�r� nj� tekst bold futeni midis <b>[b][/b]</b>, psh. <br /><br /><b>[b]</b>P�rsh�ndetje<b>[/b]</b><br /><br />b�het <b>P�rsh�ndetje</b></li><li>P�r n�nvizim p�rdor <b>[u][/u]</b>, psh:<br /><br /><b>[u]</b>Mir�m�ngjes<b>[/u]</b><br /><br />b�het <u>Mir�m�ngjes</u></li><li>P�r t� b�r� tekstin me italics p�rdor <b>[i][/i]</b>, psh.<br /><br />Si jeni <b>[i]</b>Sonte?<b>[/i]</b><br /><br />del:  Si jeni <i>Sonte?</i></li></ul>");
$faq[] = array("Si t� ndryshohet ngjyra ose madh�sia e tekstit.", "P�rdorni kodet e m�poshtme p�r k�t�, megjithat� kini parasysh q� paraqitja n� ekran varet nga sistemi dhe browser-i q� p�rdoret: <ul><li>Ndryshimi i ngjyr�s b�het duke e futur tekstin midis <b>[color=][/color]</b>. Ju mund t� specifikoni emrin e ngjyr�s (psh. red - kuq, blue - blu, yellow - verdh�, etj.) ose kodin hegzadeksimal, psh. #FFFFFF, #000000. Psh, p�r t� shkruar me t� kuqe p�rdorni:<br /><br  ><b>[color=red]</b>Hello!<b>[/color]</b><br /><br />ose<br /><br /><b>[color=#FF0000]</b>Hello!<b>[/color]</b><br /><br />dhe t� dyja kodet do nxjerrin <span style=\"color:red\">Hello!</span></li><li>Ndryshimi i madh�sis� s� tekstit b�het n� m�nyr� t� ngjashme duke p�rdorur<b>[size=][/size]</b>. Ky kod varet nga shablloni n� p�rdorim megjithat� formati i rekomanduar �sht� nj� vler� numerike q� prezanton madh�sin� e tekstit n� piksel, duke filluar nga 1 (aq i vog�l sa nuk e sheh dot) deri tek 29-ta (shum� i madh). Psh:<br /><br /><b>[size=9]</b>I vog�l<b>[/size]</b><br /><br />do jet� zakonisht <span style=\"font-size:9px\">I vog�l</span><br /><br />kurse:<br /><br /><b>[size=24]</b>I st�rmadh!<b>[/size]</b><br /><br />do jet� <span style=\"font-size:24px\">I st�rmadh!</span></li></ul>");
$faq[] = array("A mund ti kombinoj kodet e formatimit?", "Po, patjet�r, psh. nqs doni t� t�rhiqni v�mendjen mund t� shkruani:<br /><br /><b>[size=18][color=red][b]</b>Kujdes!<b>[/b][/color][/size]</b><br /><br />dhe kjo do nxjerr� <span style=\"color:red;font-size:18px\"><b>Kujdes!</b></span><br /><br />Kini parasysh q� �sht� p�rgjegj�sia juaj ti mbyllni kodet e formatimit n� m�nyr� korrekte. Shembulli i m�posht�m tregon nj� rast kur kodet nuk jan� mbyllur n� m�nyr� korrekte:<br /><br /><b>[b][u]</b>Kjo �sht� gabim<b>[/b][/u]</b>");

$faq[] = array("--","Si t� citoni dhe tekstet me gjer�si fikse");
$faq[] = array("Si t� citoni n� p�rgjigjet tuaja", "Ka dy m�nyra p�r t� cituar, me ose pa referenc�.<ul><li>Kur p�rdorni funksionin Cito n� p�rgjigjet tuaja do shikoni q� teksti i mesazhit shtohet n� dritaren ku do shkruani i p�rfshir� n� nj� bllok <b>[quote=\"\"][/quote]</b>. Kjo metod� ju lejon t� citoni duke iu refereruar nj� personi. Psh. p�r t� cituar dicka nga z.Arjan shkruani:<br /><br /><b>[quote=\"z.Arjan\"]</b>teksti q� po citoni shkon k�tu<b>[/quote]</b><br /><br />Kjo do rezultoj� n� shtimin e  z.Arjan shkroi: p�rpara tekstit q� po citoni. Ju <b>duhet</b> t� vini  \"\" rreth emrit; jan� t� domosdoshme.</li><li>Metoda e dyt� ju lejon t� citoni dicka pa specifikuar autorin. P�r t� b�r� k�t� rrethojeni tekstin mekodet <b>[quote][/quote]</b>. Kur t� shikoni mesazhin do v�reni q� do tregoj� vet�m Kuot�: p�rpara tekstit. </li></ul>");
$faq[] = array("Shkruarja e kodeve kompjuterike dhe teksteve me gjer�si fikse", "Nqs doni t� shkruani nj� pjes� me kod kompjuteri ose cdo lloj teksti q� k�rkon gjer�si fikse at�her� duhet ta rrethoni me kodet <b>[code][/code]</b>, psh.<br /><br /><b>[code]</b>echo \"Ky �sht� kod komputeri\";<b>[/code]</b><br /><br />Formatimi i p�rdorur br�nda kodeve <b>[code][/code]</b> ruhet kur p�rpunohet nga kompjuteri.");

$faq[] = array("--","Prodhimi i listave");
$faq[] = array("Krijimi i nj� liste t� pa-renditur", "BBCode lejon dy lloj listash, t� renditura dhe t� parenditura. N� thelb ato jan� t� nj�jta me ekuivalentet n� HTML. Nj� list� e parenditur tregon cdo send n� list�n tuaj n� m�nyr� t� nj�pasnj�shme t� paraprira nga nj� karakter pike. P�r t� krijuar nj� list� t� parenditur p�rdoret <b>[list][/list]</b> dhe p�rcakto cdo send t� list�s duke p�rdorur <b>[*]</b>. Psh. p�r t� renditur ngjyrat tuaja t� preferuara ju mund t� p�rdorni:<br /><br /><b>[list]</b><br /><b>[*]</b>E kuqe<br /><b>[*]</b>Blu<br /><b>[*]</b>E verdh�<br /><b>[/list]</b><br /><br />Kjo do prodhonte list�n<ul><li>E kuqe</li><li>Blu</li><li>E verdh�</li></ul>");
$faq[] = array("Krijimi i nj� liste t� renditur", "Lloji i dyt� i list�s, lista e renditur, ju mund�son t� kontrolloni se c'shkruhet para cdo sendi t� list�s. P�r t� krijuar nj� list� t� renditur p�rdoret <b>[list=1][/list]</b> p�r t� krijuar nj� list� me renditje numerike ose <b>[list=a][/list]</b> p�r nj� list� me renditje alfabetike. Nj�lloj si tek lista e parenditur cdo send p�rcaktohet nga <b>[*]</b>. Psh:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Shko n� dyqan<br /><b>[*]</b>Bli nj� kompjuter<br /><b>[*]</b>Shaje kompjuterin kur nuk punon<br /><b>[/list]</b><br /><br />do prodhoj�:<ol type=\"1\"><li>Shko n� dyqan</li><li>Bli nj� kompjuter</li><li>Shaje kompjuterin kur nuk punon</li></ol>kurse p�r nj� list� me renditje alfabetike:<br /><br /><b>[list=a]</b><br /><b>[*]</b>P�rgjigja e par� e mundshme<br /><b>[*]</b>P�rgjigja e dyt� e mundshme<br /><b>[*]</b>P�rgjigja e tret� e mundshme<br /><b>[/list]</b><br /><br />e cila jep<ol type=\"a\"><li>P�rgjigja e par� e mundshme</li><li>P�rgjigja e dyt� e mundshme</li><li>P�rgjigja e tret� e mundshme</li></ol>");

$faq[] = array("--", "Krijimi i lidhjeve");
$faq[] = array("Lidhje me nj� websit tjet�r", "BBCode i phpBB lejon disa m�nyra p�r krijimin e URI-ve, Uniform Resource Indicators q� njihen si URL.<ul><li>M�nyra e par� p�rdor kodin <b>[url=][/url]</b>, cdo gj� q� shkruani mbas shenj�s s� barazimit do shkaktoj� p�rmbajtjen e atij kodi t� sh�rbej� si nj� URL. Psh. p�r tu lidhur me phpBB.com me k�t� metod� shkruani:<br /><br /><b>[url=http://www.phpbb.com/]</b>Vizito phpBB!<b>[/url]</b><br /><br />kjo do prodhonte lidhjen q� vijon, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Vizito phpBB!</a> Do shikoni q� lidhja hapet n� nj� dritare t� re duke i lejuar p�rdoruesit t� vazhdojn� t� p�rdorin forumin.</li><li>Nqs doni q� adresa URL vet� t� tregohet si lidhje shkruani:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Kjo do tregoj� lidhjen q� vijon, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>P�r m� tep�r phpBB p�rdor dicka q� quhet <i>Lidhjet Magjike</i>, kjo do e kthej� cdo URL me sintaks� korrekte n� nj� lidhje pa patur nevoj� te shkruhet ndonj� kod, nuk ka nevoj� as p�r http://. Psh. shkruajtja e www.phpbb.com n� mesazhin tuaj do krijoj� nj� lidhje tek <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> n� m�nyr� automatike kur dikush lexon mesazhin. </li><li>E nj�jta gj� aplikohet me adresat e post�s elektronike, ju mund ta specifikoni adres�n me an� t� kodit, psh:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />e cila do tregoj� <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ose mund t� shtypni thjesht no.one@domain.adr n� mesazhin tuaj dhe adresa do konvertohet n� lidhje n� m�nyr� automatike.</li></ul>Ashtu si me t� gjitha kodet e tjera BBCode URL-t� mund t� mb�shtjellin cdo lloj kodi tjet�r BBCode, psh <b>[img][/img]</b> (lexo m� posht�), <b>[b][/b]</b>, etj. Ashtu si me kodet e formatimit �sht� n� dor�n tuaj q� kodet t� jen� hapur dhe mbyllur n� rradh�n e duhur, psh: <br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>nuk</u> �sht� korrekte gj� q� mund t� shkaktoj� fshirjen e mesazhit tuaj.");

$faq[] = array("--", "Tregimi i imazheve");
$faq[] = array("Shtimi i nj� imazhi n� mesazhin tuaj", "BBCode i phpBB p�rfshin nj� kod p�r tregimin e imazheve n� mesazhet tuaja. Duhet t� keni dy gj�ra parasysh kur p�rdorni k�t� kod; e para, shum� p�rdorues nuk e cmojn� vendosjen e shum� imazheve n�p�r poste dhe e dyta imazhi duhet t� jet� diku n� internet para se t� tregohet n� nj� mesazh (nuk mund t� ekzistoj� vet�m n� kompjuterin tuaj, p�rvec rastit kur keni nj� webserver). phpBB nuk e mund�son mbajtjen e imazheve n� nj� dosje lokale tashti p�r tashti (k�to c�shtje do adresohen n� versionin e m�vonsh�m t� phpBB). P�r t� treguar nj� imazh duhet ta rrethoni URL-n� (adres�n n� internet) e imazhit me kodet <b>[img][/img]</b>. Psh:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Sic u tregua n� seksionin e URL (m�sip�r) ju mund ta mb�shtillni nj� imazh me kodin <b>[url][/url]</b> nqs d�shironi q� imazhi t� sh�rbej� edhe si lidhje, psh.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />do prodhonte:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "C�shtje t� tjera");
$faq[] = array("A mund t� shtoj kodet e mia?", "Jo, nuk besojm� se �sht� e mundur n� phpBB 2.0 Po mundohemi t� shtojm� kode BBCode t� personalizueshme n� versionin tjet�r t� phpBB.");

//
// This ends the BBCode guide entries
//

?>