<?php
/***************************************************************************
 *                         lang_bbcode.php [Uighur_latin]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
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
// Uyghurchigha Terjime qilghuchilar/Translation by:
//
// Muhemmed Erdem (M.Erdem)  :: webmaster@misran.com    :: http://www.misran.com
// Abdireyim (abdireyim)     :: abdireyim@yahoo.com     :: http://freeud.tripod.com
//
// Pikirler bolsa bu adresni ishliting/For questions and comments use: misran_erdem@hotmail.com
//
// Diqqet: Bu emgekning hormiti uchun bolsimu tekstlerni, chekitlik herplerni we 
// atalghularni xalighanche ozgertmeng. Pikirliringiz bolsa 
// terjime qilghuchilar bilen alaqe qiling.
//
// Release date: 2003-09-10
//
//
// Format is same as lang_main
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
  
$faq[] = array("--","Tonushturush");
$faq[] = array("BBCode d�gen n�me?", "BBCode bolsa HTML ning alahide bir xil
shekli, sizning BBCode ni ishlitelishingiz sist�ma bashqurghuchisigha baghliq.
Undin bashqa siz ayrim y�zilmilar �ch�n bu iqtidarni toxtutup qoyalaysiz. BBCode
ning shekli HTML ge oxshash, nishan [ we ]ning ichige �lindu. Uning bilen
n�mining qandaq k�rs�t�lidighanliqini t�ximu obdan kontrol qilghili bolidu. Siz
maqale yazmaqchi bolghan ramkining �stide BBCode ni qoshush �ch�n qoyulghan
konupkilar bar. T�wende t�ximu tepsili ch�shenche b�rimiz.");

$faq[] = array("--","T�kstni Formatlash");
$faq[] = array("Tom, yantu, asti sizilghan t�kstlerni qandaq chiqirimiz?",
"BBCode bezi t�kst belgilirini teminligen bolup, siz t�kstning sheklini asanla
�zgerteleysiz. Mesilen: <ul><li>Tom <b>[b][/b]</b>, yene alayluq: <br /><br
/><b>[b]</b>Yaxshimu siz?<b>[/b]</b><br /><br /><b>Yaxshimu siz?</b> bolup
k�r�nidu<br /><br /></li><li>Astigha sizish toghra kelse <b>[u][/u]</b>,
mesilen:<br /><br /><b>[u]</b>Yaxshimu siz?<b>[/u]</b><br /><br /><u>Yaxshimu
siz?</u> bolup k�r�nidu<br /><br /></li><li> T�kstni yantu qilmaqchi
bolsaq<b>[i][/i]</b>, mesilen: <br /><br />Bu bek <b>[i]</b>yayshi
boldi!<b>[/i]</b><br /><br />y�zilghanda, Bu bek <i>yaxshi boldi!</i> bolup
k�r�nidu.</li></ul>");

$faq[] = array("T�kstning renggini yaki rezmisini qandaq �zgertimiz?",
"Y�zilmidiki t�kstning renggini yaki rezmisini �zgertish �ch�n, t�wendiki
belgilerni ishlitisiz. Diqqet, k�rs�tish �n�mi sizning brows�ringiz hem
sist�mingizgha baghliq: <ul><li>T�kst renggini �zgertishte,
<b>[color=][/color]</b> ni ishlitimiz. �zingiz perq etkidek reng ismini
qoysingizmu bolidu (mesilen: red, blue, yellow...) yaki reng kodini
ishletsingizmu bolidu(misal: #FFFFFF, #000000). Misal alsaq, qizil t�kst
ishlitish �ch�n choqum mundaq bolshi k�rek:<br /><br
/><b>[color=red]</b>Yaxshimu siz?<b>[/color]</b><br /><br />yaki<br /><br
/><b>[color=#FF0000]</b>Yaxshimu siz?<b>[/color]</b><br /><br />hemmiside mundaq
k�r�nidu:<span style=\"color:red\">Yaxshimu siz?</span><br /><br
/></li><li>T�kst rezmisini �zgertishtimu xuddiy yuqurqigha oxshash, tagning
y�zilishi: <b>[size=][/size]</b>. Bu tag bolsa sizning ishletken endizingiz
bilen munasiwetlik, l�kin tewsiye qilin'ghan format bolsa t�kstning rezmisini
piks�l bilen ipadileydighan sanliq qimmet, yeni 1 (bek kichik, korelmeysiz) din
29 (alahide chong) ghiche. Misal alsaq:<br /><br
/><b>[size=9]</b>KICHIK<b>[/size]</b> bolghanda <br /><br /> <span
style=\"font-size:9px\">KICHIK</span> bolup k�r�nidu<br /><br /> <br /><br
/><b>[size=24]</b>B�Y�K<b>[/size]</b> bolghanda<br /><br /> <span
style=\"font-size:24px\">B�Y�K</span> bolup k�r�nidu</li></ul>");
$faq[] = array("Oxshashmighan taglerni birlikte ishletsem bolamdu?", "Elbette
bolidu. Jelip qilarliq bolsun �ch�n, mundaq ishletsingiz bolidu. mesilen:<br
/><br /><b>[size=18][color=red][b]</b>DIQQET!<b>[/b][/color][/size]</b><br /><br
/> buningda mundaq k�r�nidu: <span
style=\"color:red;font-size:18px\"><b>DIQQET!</b></span><br /><br />Bundaq
t�kstni k�p ishlitiwetmeng! Bularni �zingiz belgileysiz. BBCode ni ishletkende,
imkan bar toghra belge ishliting. T�wendikisi xata missal:<br /><br
/><b>[b][u]</b>Bu xata missal<b>[/b][/u]</b>");

$faq[] = array("--","Neqil Kelt�r�shte Ishlitilidighan Belgiler");
$faq[] = array("Neqil kelt�r�shte ishlitilidighan belgiler", "Ikki xil usulda
maqalidiki p�t�n t�kstni yaki qismen t�kstni neqil qilip ishlitishke bolidu.
Kelgen orunni k�rs�t�sh we biwasite neqil qilip ishlitish.<ul><li>Siz sehipide
neqil kelt�rgende, y�zilma  t�kstning   <b>[quote=\"\"][/quote]</b> tagining
ichige �lip kirilgenlikini k�risiz. Bu usul arqiliq siz tallighan melum
mat�riyallarni, yeni ular melum kishige qaritilamdu yaki bashqa nersilerge
qaritilamdu, neqil kelt�releysiz. Mesilen: Alimning maqalisini neqil
kelt�rmekchi bolsingiz, mundaq y�zishingiz k�rek:<br /><br
/><b>[quote=\"Alim\"]</b>Alimning yazmiliri... <b>[/quote]</b><br /><br />
Buning netijisi yeni, <b>Alim mundaq yazghan:(y�zilma)</b>, aptomatik halda
neqilning aldigha qoshulup qalidu. �singizde bolsunki,<b> choqum</b> \"\"esli
aptorning isimi \"we\" ning ichige �lip y�zilishi k�rek.<br /><br
/></li><li>Ikkinchi xil usulda, siz qarighularche neqil kelt�risiz. Buningda
neqil kelt�rmekchi bolghan t�kst  choqum <b>[quote][/quote]</b> ning ichige
�linishi kerek. Bu xil neqil kelt�r�shte, t�kstning aldida 'Neqil:' digen s�z
k�r�nidu. </li></ul>");
$faq[] = array("Programma kodi we turaqliq kengliktiki t�kst korsitish", "Eger bir
b�lek programma kodi we turaqliq kengliktiki t�kst k�rsetmekchi bolsingiz,
<b>[code][/code]</b> tagini ishlitishingiz k�rek. Mesilen:<br /><br
/><b>[code]</b>echo \"kod mezmuni\";<b>[/code]</b><br /><br />K�yin ijra
bolghanda, barliq <b>[code][/code]</b> ning ichige �lin'ghan t�kstler �z p�ti
k�r�nidu.");

$faq[] = array("--","Tizimlik Turghuzush");
$faq[] = array("Tertipsiz tizimlik turghuzush", "BBCode ikki xil tizimlik
sheklini qollaydu, tertiplik we tertipsiz. Tertipsiz tizimlikte t�rler birining
keynidin biri ulinip k�r�nidu, tizimlik turghuzushta <b>[list][/list]</b> ni, t�r
ipadileshte <b>[*]</b> ni ishlitimiz. Eger yaxshi k�ridighan renglerni tizip
chiqmaqhi bolsingiz, mundaq yazisiz. mesilen:<br /><br /><b>[list]</b><br
/><b>[*]</b>Qizil<br /><b>[*]</b>K�k<br /><b>[*]</b>S�riq<br /><b>[/list]</b><br
/><br />Buningda mundaq tizimlik barliqqa
k�lidu:<ul><li>Qizil</li><li>K�k</li><li>S�riq</li></ul>");
$faq[] = array("Tertiplik tizimlik turghuzush", "Ikkinchi xil tizimlik shekli,
tertiplik tizimlik turghuzush sizge her bir t�rning tizimlik nomurini
t�rghuzushni buyruydu,  <b>[list=1][/list]</b> bilen san tertiplik tizimlik
turghuzushqa, yaki <b>[list=a][/list]</b> bilen �lipbe tertipidiki tizimlik
turghuzushqa bolidu. Tertipsiz tizimlikke oxshash biz <b>[*]</b> bilen
tizimliktiki t�rlerni ipadileymiz. Mesilen:<br /><br /><b>[list=1]</b><br
/><b>[*]</b>Dukan'gha b�rish<br /><b>[*]</b>Bir kompyut�r s�tiw�lish<br
/><b>[*]</b>Kompyut�r buzulghanda uni tillash<br /><b>[/list]</b><br /><br
/>Buningda mundaq tizimlik barliqqa k�lidu:<ol type=\"1\"><li>Dukan'gha
b�rish</li><li>Bir kompyut�r s�tiw�lish</li><li>Kompyut�r buzulghanda uni
tillash</li></ol>Eger �lipbe tertipni ishletkende mundaq bolidu:<br /><br
/><b>[list=a]</b><br /><b>[*]</b>Birinchi mumkinchilik<br /><b>[*]</b>Ikkinchi
mumkinchilik<br /><b>[*]</b>�ch�nchi mumkinchilik<br /><b>[/list]</b><br /><br
/>Netije bolsa:<ol type=\"a\"><li>Brinchi mumkinchilik</li><li>Ikkinchi
mumkinchilik </li><li>�ch�nchi mumkinchilik</li></ol>");

$faq[] = array("--", "Ulanma Qurush");
$faq[] = array("Bashqa bir betlerge ulash", "phpBB BBCode da bir qanche xil URL
lar, Uniform Resource Indicators, qurush usulliri bar.<ul><li>Ularning ichide,
birinchisi bolsa <b>[url=][/url]</b> tagi arqiliq ulunush hasil qilish, yeni
tenglik belgisi ( = ) din k�yin, n�mila kirg�zmeng, tag ichidiki t�kstler URL
gha oxshash bolup k�r�nidu (yeni ulunush hasil qilidu). Mesilen, phpBB.com gha
ulunush qilishta, mundaq qilsingiz bolidu:<br /><br
/><b>[url=http://www.phpbb.com/]</b>phpBB ni ziyaret qiling!<b>[/url]</b><br
/><br />Buning netijisi bolsa, <a href=\"http://www.phpbb.com/\";
target=\"_blank\">phpBB ni ziyaret qiling!</a> Ulanmini chekkende y�ngi bir
k�znek �chilghanliqini k�r�siz, shuning bilen bundaq ulunush
qollan'ghuchining esli betni dawamliq k�r�shi �ch�n qolayliq.<br /><br
/></li><li>Eger URL �zlikidin ulanma bolup k�runsun d�singiz, mundaq addiy
belgilesh �lip b�ring:<br /><br
/><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Buningda mundaq
ulanma qurulidu, <a href=\"http://www.phpbb.com/\";
target=\"_blank\">http://www.phpbb.com/</a><br /><br /></li><li> phpBB ning 
qoshumche iqtidarliri ichide, bir <i>S�hirlik Ulanma</i>d�gen iqtidar bar bolup
herqandaq sintastikisi toghra bolghan URL larni ulanma qiliwetidu. Siz
h�chqandaq belge qoshmisingizmu hetta URL ni bashlaydighan http://ni
yazmisingizmu bolidu. Mesilen, maqalighizde www.phpbb.com y�zilsa ,bu,
�zlikidinla <a href=\"http://www.phpbb.com/\";
target=\"_blank\">www.phpbb.com</a> ge aylinidu.<br /><br /></li><li>Bu xil
iqtidar oxshashla e-mail adr�siqimu ishleydu. Siz melum adr�sni toluq
yazsingizmu bolidu, mesilen:<br /><br
/><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />bu mundaq k�r�nidu:
<a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> yaki addiyla
no.one@domain.adr dep kirg�zsingiz, sist�ma �zlikidin uni ulunushqa
aylanduridu.<br /><br /></li></ul>Siz BBCode we URL belgisini bashqa belgiler
bilen qoshup ishletsingizmu bolidu. Alayluq, <b>[img][/img]</b> (t�wendiki
ch�shend�r�shke qarang), <b>[b][/b]</b>...qatarliqlar, herqandaq belgini
arlashturup ishletsingiz bolidu, emma toghra bolsun yeni belgilerning �chilishi
we �tilishi tertipi toghra bolushi k�rek, mesilen:<br /><br
/><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br
/><br />bu toghra emes, namuwapiq ishlitishler maqalingizning yoqulup k�tishige
seweb bolishi mumkin, �htiyat qilarsiz.");

$faq[] = array("--", "Y�zilmilarda Resim K�rs�tish");
$faq[] = array("Y�zilmigha resim kirg�z�sh", "phpBB BBCode y�zilma ichige resim
qisturush belgisini teminligen. Ikki muhim ishqa diqqet qiling;  biri, nurghun
qollan'ghuchilar maqalirida bek k�p resimler bolushini yaxshi k�rmeydu, yene
biri, resimler choqum torda bolishi kerek (mesilen: kompyut�rdiki h�jjet
bolmaydu, kompyut�ringiz s�rw�r bolmisila). N�wette phpBB bolsa yerlik halda
resim saqlash iqtidarini hazirlimidi  (k�ler qetimqi phpBB nusxisida belkim bu
iqtidar qoshup qalar). Resim k�rsetmekchi bolsingiz choqum <b>[img][/img]</b>
belgisini hem resim ulan'ghan tor adr�sini y�zing.  mesilen:<br /><br
/><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br
/>Yuquridiki ulanma qurushta s�zlep �tken boyiche, <b>[url][/url]</b> tagi bilen
resimge ulanma qursingizmu bolidu. mesilen:<br /><br
/><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br
/><br />Buning netijisi bolsa:<br /><br /><a href=\"http://www.phpbb.com/\";
target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\";
border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Bashqa Iqtidarlar");
$faq[] = array("Men �zem t�zgen tagni ishletsem bolamdu?", "Yaq, n�wette phpBB
2.0 nusxisida bu iqtidar yoq. Biz ashundaq bir mumkinchilikni t�pip uni phpBB
ning k�yinki nusxisida teminlesh �ch�n tirishiwatimiz.");

//
// This ends the BBCode guide entries
//

?>