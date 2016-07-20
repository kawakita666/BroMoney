<?php
/***************************************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
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

/* CONTRIBUTORS:
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Sisselogimine ja Liitumine");
$faq[] = array("Miks ma ei saa sisse logida?", "Oled sa ikka registreerinud? Sisse logimiseks peab olema registreeritud liige. V�ib-olla oled foorumilt bannitud (kui jah, siis kuvatakse sulle vastavat teadet). Igaks juhuks kontrolli �le ka oma kasutajanimi ja parool. Ja kui miski ei aita, siis v�ta �hendust foorumi administraatoriga - tal v�ib olla foorumil vigane konfiguratsioon.");
$faq[] = array("Miks ma �ldse pean registreeruma?", "V�ib-olla ei peagi. Foorumi administraator otsustab, kas teadete postitamiseks on vaja eelnevalt registreeruda v�i mitte. Igal juhul annab liitumine sulle lisav�imalusi, mida k�lastajatel ei ole. N�iteks avatari ja signatuuri panemine, kasutajagruppidesse liitumine, eras�numite saatmine jne. Registreerumine v�tab ainult paar minutit aega.");
$faq[] = array("Miks ma automaatselt v�lja login?", "Kui sa ei m�rgi <i>Automaatse Sisselogimise</i> kasti, siis sa j��d sisselogituks ainult foorumi kasutamise ajaks. Kui tahad alati sisse logitud olla, m�rgi see kastike sisselogimisel. Seda ei ole soovitatav teha avalikes arvutites.");
$faq[] = array("Kuidas saan keelata oma kasutajanime ilmumist foorumil olijate nimekirja?", "Oma profiilist leiad sa valiku <i>Varja oma foorumilolekut</i>; Kui sa selle aktiveerid, n�evad sind ainult administraator ja sa ise. Sa oled varjatud kasutaja.");
$faq[] = array("Kaotasin parooli!", "Parooli ei saa k�ll taastada aga selle saab uue panna. Selleks mine sisselogimise lehele ja vajuta linki <u>Unustasin parooli</u>. J�lgi juhiseid ja peaksidki taas saama sisse logida.");
$faq[] = array("Ma registreerusin aga ei saa sisse logida!", "K�igepealt kontrolli oma kasutajanime ja parooli. Kui need on kindlasti �iged, siis v�ib-olla registreerusid COPPA tingimustega - j�lgi sulle saadetud juhiseid. On veel v�imalik, et su konto vajab aktiveerimist v�i administraator on su konto sulgenud.");
$faq[] = array("Kunagi ammu liitusin aga n��d ei saa enam sisse!", "K�igepealt kontrolli oma kasutajanime ja paroole. Teine v�imalus on, et administraator on su konto kustutanud. Foorumitel on tavaks kustutada ebkaaktiivseid kasutajaid, et v�hendada andmebaasi suurust.");


$faq[] = array("--","Kasutaja eelistused ja seaded");
$faq[] = array("Kuidas saan ma oma seadeid muuta?", "Sinu andmed on salvestatud andmebaasi ja nende muutmiseks kasuta <u>Profiil</u> linki foorumis.");
$faq[] = array("Ajad on valed!", "T�en�oliselt on ajad�iged aga sa oled lihtsalt teises ajav��ndis. Profiili alt saad s�ttida enda ajav��ndi.");
$faq[] = array("Muutsin oma ajatsooni aga ajad on ikka valed!", "Sellisel juhul on t�en�oliselt tegemist suveajale �leminekuga. Teatud kuudel v�ivad esineda selle t�ttu v�iksed nihked kellaajas.");
$faq[] = array("Minu keelt ei ole nimekirjas!", "T�en�oliselt ei installeerinud administraator seda keelt v�i ei ole keegi seda veel t�lkinud. V�ta temaga �hendust ja palu tal see installeerida. V�i kui seda t�lgitud pole, siis v�id muidugi ka ise t�lkida.");
$faq[] = array("Kuidas ma panen kasutajanime alla omale pildi?", "Kasutajanime all saab omma kaks pilti. Esimene on seotud kasutajakirjeldusega ja selle paneb administraator. Teise on avatar ja selle saad ise panna Profiili alt (kui avataride kasutamine pole foorumis kelatud).");
$faq[] = array("Kuidas ma muudan oma kasutajakirjeldust?", "Tavaliselt ei saagi seda muuta ja kasutajakirjeldus muutub koos sinu postituste arvuga. M�ndadel kasutajatel (n�iteks moderaatoritel) v�ivad olla ka erikirjeldused.");
$faq[] = array("Kui ma vajutan kasutaja maili lingi peale, siis k�sib foorum mult sisselogimist.", "Ainult registreeritud kasutajad saavad foorumi kaudu e-maile saata.");


$faq[] = array("--","Postitamine");
$faq[] = array("Kuidas ma foorumisse uue teema teen?", "Lihtsalt kasuta vastavat nuppu mingis alateemas. Sul v�ib olla tarvis eelnevalt registreerida.");
$faq[] = array("Kuidas ma muudan/kustutan postitusi?", "Kui sa pole moderaator, saad sa kustutada ja muuta ainult oma postitusi. Muutmiseks kasuta postituse k�rval olevat nuppu. Kui keegi on su teatele vastanud, sa seda enam kustutada ei saa ja muutes tuleb teate alla kiri selle kohta, millal sa seda viimati muutsid.");
$faq[] = array("Kuidas ma panen oma postitusele signatuuri juurde?", "Signatuuri saad sa panna Profiili alt.");
$faq[] = array("Kuidas ma k�sitlust teen?", "K�sitluste tegemine on lihte - kui postitad teema (v�i muudad teema esimest teadet) peaksite te n�gema Lisa k�sitlus vormi, mis asu p�hi postitusvormi all (kui te seda ei n�e, siis arvatavasti puuduvad teil �igused k�sitluse algatamiseks). Te peaksite sisestama k�sitluse pealkirja ja v�hemalt kaks vastusevarianti (selleks, et m��rata vastusevarianti sisestage see vastavale reale ja kasutage <i>Lisa vastusevariant</i> nuppu. K�sitlusele saab ka m��rata ajalimiidi, 0 t�hendab piiramatut aega. Valikvastuste arv v�ib olla piiratud, selle m��rab foorumi administraator.");
$faq[] = array("Kuidas ma muudan v�i kustutan k�sitlust?", "K�sitlusi saab muuda, muutes esimest postitust. Kui keegi on juba h��letanud, saavad seda muuta ainult moderaatorid ja administraatorid.");
$faq[] = array("Miks ma ei p��se alafoorumisse?", "M�ndadesse alafoorumitesse on ligip��s ainult teatud kasutajatel v�i gruppidel.");
$faq[] = array("Miks ma h��letada ei saa?", "Ainult registreeritud kasutajad saavad h��letada. Kui sa oled registreeritud ja ikka h��letada ei saa, siis pole sul selleks lihtsalt volitusi.");


$faq[] = array("--","Formaadid ja teemade t��bid");
$faq[] = array("What is BBCode?", "BBCode on kood, mis p�hineb HTMLil ning mis on abiks postitamisel. Seda saab postitustes keelata. T�psemad juhised saab lingilt postitamise lehel.");
$faq[] = array("Kas ma HTMLi saan kasutada?", "See oleneb administraatori otsusest. Kui HTML on lubatud, siis ilmselt ainult m�ned tagid, et k�lastajad ei saaks htmliga foorumi v�limust rikkuda.");
$faq[] = array("Mis on smailid?", "Smailid ehk emotikonid on v�iksed pildikesed, mis aitavad sul postituses oma emotsioone v�ljendada. Neid saad teatesse lisada postitamise lehelt. Katsu nendega mitte liialdada.");
$faq[] = array("Kas ma saan pilte postitada?", "Pilte saab postitusse kuvada aga selleks peavad nad olema avalikus serveris. Neid ei saa kuvada oma arvutist (kui see pole server) ja samuti parooliga kaitstud kohtadest. Piltide lisamiseks kasuta BBCodei v�i HTMLi (kui see on lubatud).");
$faq[] = array("Mis on teadeanded?", "Teadeanded ilmuvad alafoorumis teiste postituste kohale ja sisaldavad t�htsat informatsiooni, mida sa peaksid lugema.");
$faq[] = array("Mis on kleepsud?", "Kleepsud on teemade liik, mille puhul kleeps asub alafoorumis teadeannete all. Need sisaldavad tihti t�htsat informatsiooni.");
$faq[] = array("Mis on suletud teemad?", "Teemasid saavad sulgeda administraatorid ja moderaatorid. Suletud teemasse ei saa enam postitada.");


$faq[] = array("--","Kasutajad ja grupid");
$faq[] = array("Kes on administraatorid?", "Administraatorid on auastmelt forumis k�ige k�rgemal. Nad saavad s�ttida foorumi v�ljan�gemist ja seadeid ning m��rata moderaatoreid. Neil on moderaatori�igused k�igis alafoorumis.");
$faq[] = array("Kes on moderaatorid?", "Moderaatorite �lesanne on hoolitseda korra eest foorumis. Nad saavad kustutada, muuta ja liigutada teemasid.");
$faq[] = array("Mis on kasutajagrupid?", "Kasutajagrupid on v�imalus liikmeid gruppidesse jagada. �ks inimene saab kuuluda mitmesse gruppi ning gruppidel saab olla eri�iguseid. Nii saab n�iteks anda m�nele grupile �iguse m�nda alafoorumite kasutada, kuigi teised seda teha ei saa.");
$faq[] = array("Kuidas kasutajagrupiga liituda?", "Olemasolevaid gruppe saad vaadata men��st Gruppide alt. Seal saad ka oma liitumisavalduse esitada. Grupid v�ivad olla ka varjatud.");
$faq[] = array("Kuidas kasutajagrupi moderaatoriks saada?", "Kasutajagruppe loovad administraatorid. Kui oled huvitatud grupi loomisest, siis v�ta temaga �hendust.");


$faq[] = array("--","Privaats�numid");
$faq[] = array("Ma ei saa privaats�numeid saata!", "Sa ei ole kas sisse loginud v�i administraator on keelanud foorumis privaats�numite saatmise. V�ib ka olla, et sinul individuaalselt on mingil p�hjusel teadete saatmine keelatud.");
$faq[] = array("Ma saan soovimatuid privaats�numeid!", "Tulevastes versioonides on plaanis lisada ka eiramise funktsioon. Praegu aga lihtsalt teavita sellest administraatorilt. Ta saab keelata teatud inimestel privaats�numite saatmise.");
$faq[] = array("Sain sp�mmi v�i solvava kirja foorumi vahendusel!", "Saada foorumi administraatorile koopia kogu kirjast ja loodetavasti kasutab ta enda k�sutuses olevaid meetmeid selle l�petamiseks.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2 Info");
$faq[] = array("Kes kirjutas selle foorumi?", "See tarkvara on autorikaitse seaduse all saadaval <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Groupi kodulehel</a>. See on tasuta saadavalt GNU litsentsi all.");
$faq[] = array("Miks siin ei ole X v�imalust?", "Oma soove tulvaste versioonide suhtes saad avaldata phpBB kodulehel ametlikus foorumis.");
$faq[] = array("Kellega ma v�tan �hendust seoses solvavate v�i legaalsete asjaoludega?", "Proovi �hendust v�tta administraatori v�i moderaatoriga. Kui see tulemusi ei anna, v�ta �hendust teenusepakkujaga (serveri omanikuga). pbpBB autorid ei saa kontrollida foorumitesse postitatud teadete sisu ja seet�ttu ei ole nemad selle eest vastutavad.");

//
// This ends the FAQ entries
//

?>