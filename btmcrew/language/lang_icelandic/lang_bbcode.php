<?php
/***************************************************************************
 *
 *	language/lang_icelandic/lang_bbcode.php   [icelandic]
 *	------------------------------------------------------------------------
 *
 *	Created     Sun,  8 Sep 2002 01:12:56 +0200
 *
 *	Copyright   (c) 2002 The phpBB Group
 *	Email       support@phpbb.com
 *
 *	Created by  C.O.L.T. v1.4.4 - The Cool Online Language Translation Tool
 *	            Fast like a bullet and available online!
 *	            (c) 2002 Matthias C. Hormann <matthias@hormann-online.net>
 *
 *	Visit       http://www.phpbb.kicks-ass.net/ to find out more!
 *
 ***************************************************************************/

/***************************************************************************
 *
 *	This program is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *
 ***************************************************************************/

// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// 

//
// This ends the BBCode guide entries
//

/***************************************************************************
 *
 *	To add an entry to your FAQ simply add a line to this file in this format:
 *
 *		$faq[] = array("question", "answer");
 *
 *	If you want to separate a section enter:
 *
 *		$faq[] = array("--", "Block heading here if wanted");
 *
 *	Links will be created automatically.
 *
 *	DO NOT forget the ; at the end of the line.
 *	DO NOT put double quotes (") in your FAQ entries. If you absolutely
 *	must then escape them, i.e. \"something\";
 *
 *	The FAQ items will appear on the FAQ page in the same order as listed here.
 *
 ***************************************************************************/

$faq[] = array("--", "Kynning");
$faq[] = array("Hva� er BB k��i 'BBCode'?", "BB k��i er svipa�ur og HTML. Hvort �� getur nota� BB k��a � innleggjum ��num er undir umsj�narmanni umr��ubor�sins komi�. �� getur l�ka vali� hvort �� gerir BB k��ann �virkan � hverju innleggi fyrir sig � innleggss��unni. BB k��inn sj�lfur er svipa�ur og HTML, t�g eru me� hornklofa [ og ] frekar en < og > og �a� gefur �a� mikla stj�rn yfir �v� hvernig innleggin koma �t � skj�num. �ar sem k��arnir eru fyrir ofan innleggin �� er mj�g au�velt a� b�ta �eim vi� me� �v� a� klikka � ��. �etta er �� mismunandi eftir �ema bor�anna. �� svo a� �a� er svona au�velt �� g�tu �essar lei�beiningar reynst g��ar.");

$faq[] = array("--", "�tlitbreyting texta");
$faq[] = array("Hvernig er feitletra�, sk�letra� og undirstrika� ", "BB k��inn inniheldur t�g sem gerir au�velt a� breyta grunn �tliti texta. �etta er gert � eftirfarandi h�tt: <ul><li>Til a� gera hluta af texta feitletra�an settu hann innan <b>[b][/b]</b>, t.d. <br /><br /><b>[b]</b>Hall�<b>[/b]</b><br /><br />�etta gerir textann svona: <b>Hall�</b></li><li>Til a� strika undir texta settu hann �� innan <b>[u][/u]</b>, til d�mis:<br /><br /><b>[u]</b>G��an dag<b>[/u]</b><br /><br /> ver�ur <u>G��an dag</u></li><li>Til a� gera sk�letur �� � a� nota <b>[i][/i]</b>, t.d.<br /><br />�etta er <b>[i]</b>flott!<b>[/i]</b><br /><br />Myndi gera: �etta er <i>flott!</i></li></ul>");

$faq[] = array("Hvernig � a� breyta lit og st�r� � texta", "Til a� breyta lit og texta �� er h�gt a� nota eftirfarandi t�g.  Athuga�u �� a� �tkoman fer eftir vafra �ess sem sko�ar hann og kerfi: <ul><li>Til a� breyta lit � texta �� � a� setja hann innan <b>[color=][/color]</b>. �� getur anna� hvort skilgreint nafn � lit (s.s. red, blue, yellow, o.s.frv.) e�a �� getur sett inn �refalda sext�nda t�lu, s.s. #FFFFFF, #000000. Til d�mis a� gera rau�an texta �� getur �� nota�:<br /><br /><b>[color=red]</b>Hall�!<b>[/color]</b><br /><br />e�a<br /><br /><b>[color=#FF0000]</b>Hall�!<b>[/color]</b><br /><br />B��ar a�fer�ir gefa s�mu �tkomu: <span style=\"color:red\">Hall�!</span></li><li>Til a� breyta st�r� � texta er gert samskonar me� �v� a� nota <b>[size=][/size]</b>. �essi t�g eru h�� �ema bor�sins en �a� sem vi� m�lum me� er tala sem segir til um punkta st�r� � stafnum. H�n byrjar � 1 (sem er svo l�till a� �� s�st ekki neitt) og endar � 29 (mj�g st�rir). Til d�mis:<br /><br /><b>[size=9]</b>L�TILL<b>[/size]</b><br /><br />mun b�a til <span style=\"font-size:9px\">LITLA</span><br /><br />en hins vegar:<br /><br /><b>[size=24]</b>RISAST�R!<b>[/size]</b><br /><br />mun ver�a: <span style=\"font-size:24px\">RISAST�R!</span></li></ul>");
$faq[] = array("Get �g nota� t�g saman?", "J�, au�vita� getur �� �a�, til d�mis til a� n� athygli einhvers getur �� gert svona:<br /><br /><b>[size=18][color=red][b]</b>SJ�I� MIG!<b>[/b][/color][/size]</b><br /><br />�etta myndi koma svona �t:  <span style=\"color:red;font-size:18px\"><b>SJ�I� MIG!</b></span><br /><br />Vi� m�lum samt ekki me� a� nota miki� texta sem l�tur svona �t!<br />Mundu svo a� �� �arft a� sj� um a� loka t�gum r�tt. Til d�mis �� er eftirfarandi rangt:<br /><br /><b>[b][u]</b>�etta er rangt<b>[/b][/u]</b>");


$faq[] = array("--", "Vitna � texta og f�st breidd � texta");
$faq[] = array("Vitna � texta � innleggjum", "�a� eru tv�r lei�ir til �ess, me� tilv�sun e�a �n.<ul><li>�egar �� notar tilv�sun til a� svara innleggi �� s�r�u a� textinn kemur inn � kassann �ar sem �� �tt a� setja �itt innlegg me� <b>[quote=\"\"][/quote]</b> framan og aftan vi�. �essi a�fer� veitir m�guleika � a� v�sa til innleggs e�a annars sem a� einhver annar hefur sent inn! Til d�mis a� vitna � texta sem J�hann skrifa�i �� �ttu a� setja:<br /><br /><b>[quote=\"J�hann\"]</b>H�r � textinn a� koma sem J�hann skrifa�i<b>[/quote]</b><br /><br />�tkoman er s� a� �a� b�tist sj�lfvirkt vi�, J�hann skrifa�i: � undan sj�lfum textanum. Mundu a� �� <b>ver�ur</b> a� hafa g�salappirnar \"\" sitthvoru megin vi� �a� sem �� ert a� vitna �, �a� er ekki val um �a�.</li><li>Hin a�fer�in er s� a� blindandi vitna til einhvers. Til a� gera �a� �� �arftu a� setja<b>[quote][/quote]</b> t�g sitt hvorumegin vi� textann. �egar �� sko�ar innleggi� �� s�r�u bara, Tilv�sun: � undan textanum sj�lfum.</li></ul>");


$faq[] = array("--", "B�a til lista");
$faq[] = array("B�a til �n�mera�an lista", "BB k��i sty�ur tv�r ger�ir af listum, �n�mera�a�an og n�mera�an. �etta er eins gert og � HTML. �n�mera�ur listi setur fram lista � r�� en �a� er sett stjarna e�a punktur undan hverju � listanum. Til a� b�a til �n�mera�an lista �� �tt a� nota <b>[list][/list]</b> og skilgreina hvern hlut innan listans me� �v� a� nota <b>[*]</b>. Til d�mis a� lista upp�halds litina ��na �� gerir�u svona:<br /><br /><b>[list]</b><br /><b>[*]</b>Rau�ur<br /><b>[*]</b>Bl�r<br /><b>[*]</b>Gulur<br /><b>[/list]</b><br /><br />�etta b�r til eftirfarandi lista:<ul><li>Rau�ur</li><li>Bl�r</li><li>Gulur</li></ul>");
$faq[] = array("B�a til n�mera�an lista", "�nnur a�fer� vi� a� b�a til lista er s� a� stj�rna hva� kemur fyrir framan hvern hlut � honum. Til a� b�a til n�mera�an lista �� gerir �� svona: <b>[list=1][/list]</b> til a� b�a til lista me� b�kst�fum � sta� n�mera: <b>[list=a][/list]</b>. Eins og me� �n�mera�an lista �� er hver hlutur � listanum tilgreindur me� �v� a� nota <b>[*]</b>. Til d�mis:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Fara � b��ir<br /><b>[*]</b>Kaupa n�ja t�lvur<br /><b>[*]</b>Skammast yfir t�lvunni �egar h�n fr�s<br /><b>[/list]</b><br /><br />�etta kemur svona fram::<ol type=\"1\"><li>Fara � b��ir</li><li>Kaupa n�ja t�lvu</li><li>Skammast yfir t�lvunni �egar h�n fr�s</li></ol>Fyrir lista me� b�kst�fum fyrir framan �� gerir�u svona:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Fyrsta m�gulega svar<br /><b>[*]</b>Anna� m�gulega svar<br /><b>[*]</b>�ri�ja m�gulega svar<br /><b>[/list]</b><br /><br />gerir:<ol type=\"a\"><li>Fyrsta m�gulega svar</li><li>Anna� m�gulega svar</li><li>�ri�ja m�gulega svar</li></ol>");


$faq[] = array("--", "A� b�a til tengla/links");
$faq[] = array("Tengill � a�ra vefs��u", "phpBB BB k��i sty�ur nokkrar lei�ir til a� b�a tengla � a�rar vefs��ur.<ul><li>Fyrsta a�fer�in er a� nota <b>[url=][/url]</b> tag, hva� sem �� setur � eftir = merkinu mun valda �v� a� �a� heg�ar s�r eins og tengill. Til d�mis a� setja tengil til phpBB.com �� �ttu a� nota:<br /><br /><b>[url=http://www.phpbb.com/]</b>Sko�a�u phpBB!<b>[/url]</b><br /><br />�etta myndi b�a til eftirfarandi tengil, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Sko�a�u phpBB!</a> �� munt taka eftir �v� a� �a� opnast n�r gluggi svo a� notandi getur haldi� �fram a� sko�a umr��u bor�i� �ar sem fr� er horfi�.</li><li>Ef �� vilt a� veffangi� (URLi�) sj�lft s� s�nt sem tengill �� getur �� einfaldlega gert svona:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />�etta myndi b�a til eftirfarandi tengil, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>A� auki er phpBB me� svol�ti� sem kallast <i>T�fra tengill</i>, �etta breytir �llu sem er skrifa� eins og veffang (URL) � tengil sj�lfvirkt jafnvel �� svo �� skrifir ekki http://. Til d�mis me� �v� a� skrifa www.phpbb.com inn � innleggi �� lei�ir �a� til �ess a� �a� myndast tengill, <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> er b�inn til um lei� og �� sko�ar innleggi�.</li><li>�a� sama gerist me� netf�ng, �� getur anna�hvort b�i� til netfangi� t.d. n�kv�mlega svona:<br /><br /><b>[email]</b>enginn@veffang.is<b>[/email]</b><br /><br />�etta ver�ur a� <a href=\"emailto:no.one@domain.adr\">enginn@veffang.is</a> e�a �� getur einfaldlega skrifa� enginn@veffang.is inn � innleggi� og �v� er svo breytt sj�lfvirkt �egar �� sko�ar �a�.</li></ul>Eins og me� �ll BB k��a t�g �� getur �� sett veff�ng utanum �nnur t�g svo sem <b>[img][/img]</b> (Sj��u �a� n�sta), <b>[b][/b]</b>, o.s.frv. Eins og og me� �ll �nnur t�g �� �arft �� a� sj� um a� loka �eim � r�ttri r��, til d�mis:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />er <u>ekki</u> r�tt en �a� g�ti valdi� �v� a� innlegginu ver�i eytt �annig a� passa�u �ig.");

$faq[] = array("--", "S�na myndir � innleggjum");
$faq[] = array("B�ta vi� mynd � innleggjum", "phpBB BB k��i inniheldur tag sem er til a� setja inn myndir � innleggin ��n. �� �arft a� hafa tvennt � huga �egar �� notar �essi t�g; m�rgum notendum l�kar ekki a� �a� s�u settar margar myndir inn � innlegg og myndin ver�ur a� vera �egar til � vefnum (h�n getur ekki bara veri� � �inni t�lvu til d�mis, nema h�n s� vef�j�nn!). �a� er n�na ekki m�guleiki � �v� a� vista myndir � vef�j�ninum �ar sem phpBB er(allt �etta kemur a� �llum l�kindum � n�stu �tg�fu af phpBB). Til a� s�na myndir �� �arftu a� setja veffangi� sem inniheldur myndina innan: <b>[img][/img]</b> taga. Til d�mis:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Eins og kemur fram kemur � veffanga �tsk�ringunum a� ofan getur �� sett mynd innan <b>[url][/url]</b> taga ef �� vilt, t.d.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />myndi gera svona:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "�nnur m�l");
$faq[] = array("Get �g b�tt vi� m�num eigin t�gum?", "Nei, �a� er �g hr�ddur um ekki. Vi� erum athuga me� a� bj��a upp � m�guleika � �v� � �tg�fu 3.0");

?>