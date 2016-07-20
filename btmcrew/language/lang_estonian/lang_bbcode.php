<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
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
  
$faq[] = array("--","Tutvustus");
$faq[] = array("Mis on BBCode?", "BBCode on HTMLi lihtsustatud versioon. Administraator saab otsustada, kas BBCode on foorumis lubatud v�i mitte.Postituse lehel saab ka ise otsustada, kas su postituses BBCode t��tab. Kood ise on HTMLile sarnane: tagid ��ristatakse kandiliste sulgudega  [ ja ]. BBCodei saab lisada ka nuppude abil postitusalakohal.");

$faq[] = array("--","Teksti Formaadid");
$faq[] = array("Kuidas luua boldi, kursiivis ja allajoonitud teksti?", "BBBCodei abil saad kiiresti muuta oma teksti v�limust. Seda tehakse j�rgnevalt: <ul><li>Et teha tekst boldiks, kirjuta see <b>[b]</b> ja <b>[/b]</b> vahele, n�iteks <br /><br /><b>[b]</b>Tere<b>[/b]</b><br /><br />kuvab <b>Tere</b></li><li>Allajoonimiseks kasuta <b>[u][/u]</b>, n�iteks:<br /><br /><b>[u]</b>Hommikust<b>[/u]</b><br /><br />muutub <u>Hommikust</u></li><li>Kursiivi jaoks kasuta <b>[i][/i]</b>, n�iteks<br /><br />See on <b>[i]</b>Tore!<b>[/i]</b><br /><br />kuvab See on <i>Tore!</i></li></ul>");
$faq[] = array("Kuidas muuta teksti v�rvi ja suurust?", "Selleks tuleb kasutada j�rgnevaid tage. Pea meeles, et tulemus v�ib erinevate brauserite ja s�steemide vahel erineda.: <ul><li>V�rvi muutmiseks kasutatakse <b>[color=][/color]</b>. Sa v�id kasutada v�rvi nimetust (n�iteks red, blue, yellow, jne) v�i selle t�pset v��rtust, n�iteks #FFFFFF, #000000. Punase teksti loomiseks kasuta:<br /><br /><b>[color=red]</b>Tere!<b>[/color]</b><br /><br />v�i<br /><br /><b>[color=#FF0000]</b>Tere!<b>[/color]</b><br /><br />tulemus on m�lemal juhul <span style=\"color:red\">Tere!</span></li><li>Teksti suurust saab muuta samamoodi, kasutades <b>[size=][/size]</b>. Soovitatav on v��rtusena kasutada numbreid, mis m�rgivad pikslite arvu alates �hest (nii v�ike et sa ei n�e seda) kuni 29-ni (vv�ga suur). N�iteks:<br /><br /><b>[size=9]</b>V�IKE<b>[/size]</b><br /><br />on tavaliselt <span style=\"font-size:9px\">V�IKE</span><br /><br />samas:<br /><br /><b>[size=24]</b>SUUR!<b>[/size]</b><br /><br />on <span style=\"font-size:24px\">SUUR!</span></li></ul>");
$faq[] = array("Kas ma saan tage kombineerida?", "Jah, muidugi; n�iteks kellegi t�helepanu �ratamiseks v�id kirjutada:<br /><br /><b>[size=18][color=red][b]</b>VAATA SIIA!<b>[/b][/color][/size]</b><br /><br />see kuvab <span style=\"color:red;font-size:18px\"><b>VAATA SIIA!</b></span><br /><br />WMe ei soovita siiski palju sellist teksti kirjutada! Pea melles, et sa pead j�lgima, et tagid oleksid korralikult suletud:<br /><br /><b>[b][u]</b>See on vale<b>[/b][/u]</b>");

$faq[] = array("--","Tsiteerimine ja kindlaksm��ratud laiusega teksti kuvamine");
$faq[] = array("Tsiteerimine ehk viitamine", "Tsiteerida saab viitega autorile v�i mitte.<ul><li>Kui sa kasutad foorumis viitamise nuppu, siis pannakse postituse tekst nende tagide vahele: <b>[quote=\"\"][/quote]</b>. See lubab sul m��rata, kes on teksti autor. N�iteks kui sa tahad tsiteerida midagi, mida J�mm kirjutas, siis kasutad koodi:<br /><br /><b>[quote=\"J�mm\"]</b>Tekst, mida J�mm kirjutas<b>[/quote]</b><br /><br />Tulemuses kuvatakse automaatselt juurde: J�mm kirjutas: enne �iget teksti. Sa <b>pead</b> panema jutum�rgid \"\" autori nime �mber.</li><li>Teise meetodiga saad sa pimesi kedagi tsiteerida. Selleks pane tekst <b>[quote]</b> ja <b>[/quote]</b> tagide vahele. Teadet vaadates on lihtsalt n�ha: Tsitaat: enne �iget teadet.</li></ul>");
$faq[] = array("Koodi kuvamine", "Kui sa tahad kuvada koodi v�i midagi muud, mis n�uab kindlaksm��ratud tekstilaiust, kasuta <b>[code]</b> ja <b>[/code]</b> tage, n�iteks<br /><br /><b>[code]</b>echo \"siin on natuke koodi\";<b>[/code]</b><br /><br />Teksti formaat <b>[code][/code]</b> tagide vahe s�ilitatakse.");

$faq[] = array("--","Nimekirjade tegemine");
$faq[] = array("Tavalise nimekirja tegemine", "Tavalise nimekirja loomiseks kasuta <b>[list][/list]</b> ja defineeri iga osa kasutades <b>[*]</b>. N�iteks v�rvide nimekirja tegemiseks kasuta:<br /><br /><b>[list]</b><br /><b>[*]</b>Punane<br /><b>[*]</b>Sinine<br /><b>[*]</b>Kollane<br /><b>[/list]</b><br /><br />See teeb j�rgneva nimekirja:<ul><li>Punane</li><li>Sinine</li><li>Kollane</li></ul>");
$faq[] = array("Sorteeritud nimekirja tegemine", "Sellega saad kontrollida, mis on iga nimekirja punkti ees. Kasuta <b>[list=1][/list]</b> et nimekiri nummerdada v�i <b>[list=a][/list]</b>, et seda t�htedega t�histada. Iga punkti ette peab samuti panema <b>[*]</b>. N�iteks:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Poodi<br /><b>[*]</b>Uue arvuti ostmine<br /><b>[*]</b>Arvuti s�imamine, kui see kokku jookseb<br /><b>[/list]</b><br /><br />kuvab j�rgneva:<ol type=\"1\"><li>Poodi</li><li>Uue arvuti ostmine</li><li>Arvuti s�imamine, kui see kokku jookseb</li></ol>T�hetdega nimekirja puhul kasutaksid sa:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Vastus1<br /><b>[*]</b>Vastus2<br /><b>[*]</b>Vastus3<br /><b>[/list]</b><br /><br /> ning selle tulemus oleks <ol type=\"a\"><li>Vastus1</li><li>Vastus2</li><li>Vastus3</li></ol>");

$faq[] = array("--", "Linkide tegemine");
$faq[] = array("Teisele lehele linkimine", "pbpbb toetab mitmeid viise linkide ja URLide tegemiseks.<ul><li>Esiteks on v�imalik kasutada <b>[url=][/url]</b> tagi; k�ik, mis sa peale = tr�kid, kuvatakse URLina.N�iteks link phpBB kodulehele n�eks v�lja:<br /><br /><b>[url=http://www.phpbb.com/]</b>phpBB<b>[/url]</b><br /><br />See looks j�rgneva lingi: <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB</a>. Lingid avanevad uues aknas, et see ei segaks foorumi lugemist.</li><li>URLi enda n�itamist lingina tuleb seda teha nii:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />See kuvab j�rgneva lingi: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>phpBB oskab ka ise korrektselt kirjutatud aadresse linkideks muuta. N�iteks kirjutades www.phpbb.com teatesse, kuvatakse see automaatselt <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.</li><li>Sama asi kehtib ka mailiaadresside kohta; sa saad ise maili t�psustada, n�iteks:<br /><br /><b>[email]</b>no.one@domain.adr<b>[/email]</b><br /><br />mille tulemus on <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> ovv�i siis kirjuta lihtsalt no.one@domain.adr oma postitusse ja see muudetakse automaatselt.</li></ul>Linke saab vabalt panna ka piltide �mber (loe j�rgmist paragrahvi). Ka siin pead ise kontrollima, et tagid oleksid korrektselt suletud. N�iteks:<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /> <u>ei</u> ole �ige!");

$faq[] = array("--", "Piltide kuvamine postitusse");
$faq[] = array("Pildi lisamine teatele", "BBCodei abil saad automaatselt oma postitusse pilte kuvada. Pilt peab juba olema kuskil serveris olemas (sa ei saa pilte kuvada oma arvutist). Pildi n�itamiseks pead sa URLi �mbritsema <b>[img][/img]</b> tagidega. N�iteks:<br /><br /><b>[img]</b>http://www.phpbb.com/images/mainlogo.gif<b>[/img]</b><br /><br />Nagu �leval m�rgitud saad sa pildist ka lingi teha, n�iteks<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/mainlogo.gif<b>[/img][/url]</b><br /><br />kuvab:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"http://www.phpbb.com/images/mainlogo.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Muud k�simused");
$faq[] = array("Kas ma saan oma tage lisada?", "Ei, see ei ole hetkel v�imalik. T�en�oliselt saab seda teha tulevastes phpBB versioonides.");

//
// This ends the BBCode guide entries
//

?>