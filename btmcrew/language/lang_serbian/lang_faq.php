<?php
/***************************************************************************
 *                          lang_faq.php [Serbian]
 *                            -------------------
 *     begin                : Monday Sep 30 2002 
 *     copyright            : (C) 2002 Simic Vladan
 *     email                : vlada@cybercom.co.yu
 *
 *   $Id: lang_faq.php,v 1.1.2.1 2002/11/13 23:04:54 psotfx Exp $
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
 
  
$faq[] = array("--","Problemi prilikom prijave i registracije");
$faq[] = array("Za�to ne mogu da se prijavim?", "Da li ste se registrovali? Morate se registrovati ukoliko �elite da se prijavite. Da li imate zabranu pristupa boardu (ako jeste bi�e prikazana poruka)? Ako je to u pitanju, trebalo bi da kontaktirate webmastera ili administratora i saznate �a�to je tako. Ako ste registrovani i nemate zabranu i jo� uvek ne mo�ete da se prijavite onda ponovo proverite va�e korisni�ko ime i �ifru. Obi�no je ovo problem, a ako nije onda kontaktirajte administratora jer mo�da ne�to nije u redu sa boardom.");
$faq[] = array("Za�to uop�te moram da se registrujem?", "Ne morate tako�e, na administratoru boarda je da odlu�i da li mo�ete slati poruke ako niste registrovani. U svakom slu�aju registracija vam omogu�uje pristu dodatnim mogu�nostima koje nisu dostupne gostima kao �to su biranje avatar slika, privatne poruke, slanje emaila drugim korisnicima, priklju�ivanje grupama itd. Potrebno je svega nekoliko minuta za registraciju pa vam preporu�ujemo da se registrujete.");
$faq[] = array("Za�to se odjavljujem automatski?", "Ako ne uklju�ite <i>Prijavi me automatski</i> kada se prijavljujete board �e vas pamtiti kao prijavljenog svo prisutno vreme. Ovo spre�ava da se neko drugi prijavi kao vi. Da biste ostali prijavljeni �tiklirajte kutijicu prilikom prijavljivanja, mada ovo ne preporu�ujemo ako boardu pristupate sa deljenog kompjutera, npr. biblioteke, internet cafea, fakulteta itd.");
$faq[] = array("Kako da spre�im da se moje ime ne pojavljuje na listi korisnika koji su trenutno na forumu?", "U va�em profilu �ete na�i opciju <i>Sakrij moj onlajn status</i>, ako ovo promenite na <i>Uklju�eno</i> bi�ete vidljivi samo administrators ili sami sebi. Bi�ete brojani kao skriveni korisnik.");
$faq[] = array("Izgubio sam �ifru!", "Ne pani�ite! Iako va�a �ifra ne mo�e biti vra�ena, ona mo�e biti resetovana. Da biste ovo uradili idite na stranicu za prijavu i kliknite na <u>Zaboravio sam �ifru</u>, pratite instrukcije i brzo �ete ponovo biti u mogu�nosti da se prijavite");
$faq[] = array("Registrovao sam se ali ne mogu da se prijavim!", "Prvo proverite da li ste uneli ta�no korisni�ko ime i �ifru. Ako je to u redu onda je mogu�a jedna od ove dve gre�ke. Ako je COPPA podr�ka uklju�ena i kliknuli ste na <u>Mla�i-a sam od 13 godina</u> prilikom registracije onda �ete morati da pratite uputstva koja ste dobili. Ukoliko i ovo ne pomogne proverite da li va� nalog treba reaktivirati? Neki boardi �e zahtevati da ponovo budete registrovani, ili sami ili od strane administratora pre nego [to budete u mogu�nosti da se prijavite. Kada se registrujete bi�e vam re�eno da li trebate da reaktivirate nalog. Ako vam je poslat email onda pratite instrukcije, a ako niste proverite da li je ta�an va� email? Jedan razlog za aktivacijom je da bi se smanjila mogu�nost da <i>korisnici koji varaju </i> anonimno vre�aju board. Ako ste sigurni da je email adresa koju ste koristili ta�na onda kontaktirajte administratora.");
$faq[] = array("Ranije sam se registrovao ali vi�e ne mogu da se prijavim?!", "Naj�e��i razlozo za ovo su; uneli ste pogre�no korisni�ko ime ili �ifru (proverite u mailu koji vam je poslat prilikom registracije) ili je administrator obrisao va� nalog iz nekog razloga. Ako je ovo drugo razlog onda mo�da niste pisali ni�ta? �esto boardi periodi�no bri�u korisnike koji ne pi�u da bi smanjili veli�inu baze. Probajte da se ponovo registrujete i uklju�ite u diskusije.");


$faq[] = array("--","Pode�avanja korisnika");
$faq[] = array("Kako da promenim moja pode�avanja?", "Sva va�a pode�avanja (ako ste registrovani) su sa�uvana u bazi. Da biste im pristupili kliknite na <u>Profil</u> link (obi�no je pri vrhu stranice ali mo�da to nije slu�aj). To �e vam omogu�iti da promenite pode�avanja");
$faq[] = array("Vreme je pogre�no!", "Vreme je obi�no ta�no, u svakom slu�aju ono �to vidite je vreme prikazano u vremenskoj zoni razli�itoj od va�e. U tom slu�aju trebalo bi da promenite va�a pode�avanja za vremensku zonu da bi se poklopila sa megtom gde se vi nalazite, npr. London, Pariz, Njujork, Sidnej, itd. Znajte da promena vremenske zone, kao i mnoga druga pode�avanja mogu promeniti samo registrovani korisnici. Ako niste registrovani sada je dobro vreme da to i u�inite!");
$faq[] = array("Promenio sam svoju vremensku zonu i sat je jo� uvek neta�an!", "Ukoliko ste sigurni da ste ta�no podesili vremensku zonu i vreme je jo� uvek pogre�no najverovatnije je problem u pomeranju vremena (ili letnje vreme kako je to poznato u UK i drugim mestima). Board nije dizajniran da razlikuje promene izme�u standardnog i pomerenog vremena pa �e u letnjim mesecima vreme biti za sat vremena razli�ito od stvarnog lokalnog vremena.");
$faq[] = array("Moj jezik nije na listi!", "Naj�e��i razlog ovome su ili administrator nije instalirao va� jezik ili neko jo� uvek nije preveo ovaj board na va� jezik. Pitajte administratora da li mo�e da instalira jezi�ki paket koji vam je potreban, a ako ne postoji ose�ajte se slobodnim da napravite prevod. Vi�e informacija mo�ete prona�i na sajtu phpBB grupe (pogledajte link pri dnu stranica)");
$faq[] = array("Kako da prika�em sliku pored mog korisni�kog imena?", "Mogu postojati dve slike ispod korisni�kog imena kada pregledate poruke. Prva slika je asocijacija na tvoju poziciju i izgleda kao skup zvezdica ili kvadrati�a koji pokazuju kojiko ste poruka napisali na forumu. Ispod ove mo�e biti ve�a slika poznatija kao avatar, ona je generalno unikatna ili li�na za svakog korisnika. Na administratoru je da omogu�i avatare i oni imaju izbor na koji na�in �e avatars biti dostupni. Ukoliko niste u mogu�nosti da koristite avatare onda je to odluka administratora, trebalo bi da ih upitate za razlog tome (sirurni smo da �e biti dobar!)");
$faq[] = array("Kako menjam svoju poziciju?", "Generalno ne mo�ete direktno menjati naziv bilo koje pozicije (pozicije se pojavljuju ispod korisni�kog imena u temama i u va�em profilu u zavisnosti od stila). Mnogi boardi koriste pozicije da prika�u broj poruka koje ste napisali i da bi identifikovali odre�ene korisnike, npr. urednici i administratori mogu imati specijalne pozicije. Molimo vas da ne zloupotrebljavate board pi�u�i nepotrep�tine samo da bi pove�ali svoju poziciju, verovatno �e vam urednik ili administrator jednostavno smanjiti rank.");
$faq[] = array("Kada kliknem na email link za korisnika tra�i se da se prijavim?", "�ao nam je ali samo registrovani korisnici mogu slati email drugima putem ugra�ene email forme (ako administrator omogu�i ovu opciju). Ovo je da bi se spre�ila zlonamerna upotreba email-a od strane anonimnih korisnika.");


$faq[] = array("--","Problemi prilikom pisanja");
$faq[] = array("Kako da napi�em poruku na forumu?", "Jednostavno, kliknite na relevantno dugme na bilo kojem ekranu foruma ili teme. Mo�da �ete morati da se registrujete pre nego �to �ete biti u mogu�nosti da �aljete poruke, mogu�nosti koje su vam dostupne su izlistane na dnu ekrana foruma i tema (to su <i>Mo�ete pisati nove teme, Mo�ete glasati, itd.</i>)");
$faq[] = array("Kako da izmenim ili izbri�em poruku?", "Ukoliko niste urednik ili moderator mo�ete samo menjati i brisati sopstvene poruke. Mo�ete izmrniti poruku  (ponekad za samo odre�eno vreme posle pisanja) tako �to �ete kliknuti na <i>izmeni</i> dugme za relevantnu poruku. Ako je neko ve� odgovorio na poruku primeti�ete mali tekst ispod poruke kada se vratite na teme, ovo pokazuje broj koliko puta ste menjali poruku. Ovo �e se pojaviti samo ako niko nije odgovorio, i tako�e se ne�e pojaviti ako urednici ili administratori izmene poruku (trebalo bi da ostave poruku �ta su menjali i za�to). Znajte i to da obi�ni korisnici ne mogu brisati poruke kada neko na njih odgovori.");
$faq[] = array("Kako da dodam potpis mojoj poruci?", "Da biste dodali potpis prvo ga morate napraviti, ovo �ete uratiti putem va�eg profila. Kada ga napravite mo�ete �tiklirati <i>Dodaj potpis</i> kutijicu na formi da bi dodali potpis. Mo�ete tako�e standardno dodati potpis svim va�im porukama uklju�ivanjem relevantnog radio dugmeta u va�em profilu (jo� uvek mo�ete spre�iti dodavanje potpisa pojedina�nim porukama tako �to �ete od�ekirati kutijicu na formi)");
$faq[] = array("Kako da napravim glasanje?", "Pravljenje glasanja je lako, kada �aljete novu poruku (ili editujete prvu poruku u temi, ako imate dozvolu) vide�ete <i>Dodaj glasanje</i> formu ispod glavne forme za poruke (ako je ne vidite onda verovatno nemate prava da napravite glasanje). Trebate da unesete naslov glasanja a onda i najmanje dve opcije (da biste dodali opcije upi�ite ime pitanja i kliknite na <i>Dodaj opciju</i> dugme. Tako�e mo�ete podesiti vremenski limit za glasanje, 0 je beskona�no glasanje. Postoji limit broja opcija koje odre�uje administrator");
$faq[] = array("Kako da izmenim ili izbri�em glasanje?", "Kao sa porukama, glasanje mo�e biti izmenjeno od onoga ko je napravio glasanje, urednika ili administratora boarda. Da biste izmenili glasanje kliknite na prvu poruku u temi (ona uvek ima pridru�eno glasanje). Ako niko nije glasao onda korisnici mogu izbrisati glasanje ili menjati bilo koju opciju glasanja, ali ako su korisnici ve� glasali samo urednici ili administratori mogu mogu izmeniti ili brisati glasanje. Ovo spre�ava name�tanje glasanja menjanjem opcija na pola glasanja");
$faq[] = array("Za�to ne mogu pristupiti forumu?", "Neki forumi mogu biti ograni�eni za odre�ene korisnike ili grupe. Da biste pregledali, �itali, pisali itd. treba�e vam posebna dozvola, samo urednik i administrator mogu garantovati ovakav pristup, trebalo bi da ih kontaktirate.");
$faq[] = array("Za�to ne mogu da glasam?", "Samo registrovani korisnici mogu glasati. Ako ste registrovani i jo� uvek ne mo�ete glasati onda verovatno nemate adekvatna prava pristupa.");


$faq[] = array("--","Formatiranje i tipovi tema");
$faq[] = array("�ta je BBKod?", "BBKod je specijalna implementacija HTML-a, a da li mo�ete da ga koristite zavisi od administratora (mo�ete ga tako�e isklju�iti na formi za slanje). BBKode je sli�an stilovima u HTML-u, tagovi su uba�eni izme�u viti�astih zagrada [ i ] pre nego &lt; i &gt; i nude ve�u kontrolu koko i �ta se prikazuje. Za vi�e informacija o BBKodu pogledajte uputstvo kome mo�ete pristupiti sa strane za pisanje.");
$faq[] = array("Da li mogu da koristim HTML?", "To zavisi od toga da li vam to administrator dozvoljava, imaju potpunu kontrolu nad njim. Ako vam je dozvoljeno da ga koristite vide�ete da samo neki tagovi rade. Ovo je <i>mera bezbednosti</i> da bi spre�ila ljude da uznemiravaju board koriste�i tagove koji mogu poremetiti izgled ili prouzrokovati probleme. Ako je HTML uklju�en mo�ete ga isklju�iti na formi za pisanje.");
$faq[] = array("�ta su smajliji?", "Smajliji ili emotivne ikonice su male sli�ice koje se koriste da bi iskazali ose�anja koriste�i kratak kod, npr. :) zna�i sre�an, :( zna�i tu�an. Kompletnu listu smajlija mo�ete videti na formi sa slanje poruke. Poku�ajte da ne preterujete sa smajlijima, mogu vrlo lako prouzrokovati da poruka postane ne�itljiva i urednik mo�e odlu�iti da ih izmeni ili izbri�e sve poruke zajedno");
$faq[] = array("Mogu li slati slike?", "Slike mo�ete zaista prikazati u va�im porukama. Ipak trenutno nema mogu�nosti da po�aljete sliku direktno na board. Morate linkovati sliku koja postoji na javno dostupno web serveru, npr. http://www.some-unknown-place.net/my-picture.gif. Ne mo�ete linkovati slike koje se nalaze na va�em PC-u (osim ako nije javno dostupan server) niti slike koje se nalaze iza authentifikacionih mehanizama, npr. hotmail ili yahoo sandu�i�i, �ifrom za�ti�eni sajtovi, itd. Da biste prikazali sliku koridtite ili BBKod [img] tag ili odgovaraju�i HTML (ako je dozvoljeno).");
$faq[] = array("�ta su obave�tenja?", "Obave�tenja �esto sadr�e va�nu informaciju i trebalo bi da ih �to pre pro�itate. Obave�tenja se pojavljuju na vrhu svake strane u forumu na kome su postavljene. Da li mo�ete ili ne mo�ete da �aljete obave�tenja zavisi od dozvola koje su pode�ene od strane administratora.");
$faq[] = array("�ta su lepljive teme?", "Lepljive teme se prikazuju ispod obave�tenja u pregledu foruma i samo na prvoj stranici. Obi�no su prili�no va�ne pa bi trebalo da ih pro�itate �to pre. Kao i sa obave�tenjima board administrator odlu�uje o dozvolama koje su potrebne da biste poslali lepljive teme u svakom forumu.");
$faq[] = array("�ta su zaklju�ane teme?", "Zaklju�ane teme su postavljene na ovaj na�in bilo od urednika ili administratora. Ne mo�ete odgovarati na zaklju�ane teme i bilo koje glasanje koje sadr�i je automatski zavr�eno. Teme mogu biti zaklju�ane iz mnogo razloga.");


$faq[] = array("--","Korisni�ki nivoi i grupe");
$faq[] = array("�ta su administratori?", "Administratori su ljudi kojima su dodeljeni najvi�i nivoi kontrole za ceo board. Ovi ljudi mogu da kontroli�u saki deli� i sve operacije boarda koje uklju�uju postavljanje dozvola, zabranjivanje pristupa korisnicima, pravljenje korisni�kih grupa ili urednika, itd. Tako�e imaju kompletne mogu�nosti ure�ivanja u svim forumima.");
$faq[] = array("�ta su urednici?", "Urednici su pojedinci (ili grupa pojedinaca) �iji je posao da prate rad foruma iz dana u dan. Imaju dozvole da menjaju ili bri�u poruke i zaklju�avaju ili oktlju�avaju, pomeraju, bri�u i dele teme u forumima koje ure�uju. Uop�te urednici su tu da spre�e ljude da <i>odlutaju sa teme</i> ili �alju uvredljiv ili neprikladan materijal.");
$faq[] = array("�ta su korisni�ke grupe?", "Korisni�ke grupe su na�im putem koga administratori mogu da grupi�u korisnike. Svaki korisnik mo�e pripadati u vi�e grupa (za razliku od ve�ine drugih boarda) i svakoj grupi mogu biti dodeljena individualna prava pristupa. Ovo olak�ava administratorima da podese vi�e korisnika kao urednike foruma, ili da im daju pristup privatnom forumu itd.");
$faq[] = array("Kako da se pridru�im korisni�koj grupi?", "Da biste se pridru�ili korisni�koj grupi kliknite na link Korisni�ke grupe u zaglavlju stranice (zavisi od dizajna podloge), i tada mo�ete videti sve korisni�ke grupe. Nisu sve grupe <i>otvorenog pristupa</i>, neke su zatvorene i neke mogu �ak imati skrivene �lanove. Ako je board otvren onda mo�ete zahtevati da se priklju�ite grupi klikom na odgovaraju�e dugme. Urednik grupe �e morati da vam odobri va� zahtev, mogu vas pitati i za�to �elite da se priklju�ite. Molimo vas da ne uznemiravate urednike ukoliko va� zahtev ne bude odobren, sigurno da za to imaju razloga.");
$faq[] = array("Kako da postanem urednik korisni�ke grupe?", "Korisni�ke grupe su prvobitno napravljene od administratora boarda, i tako�e imaju dodeljenog urednika. Ako ste zainteresovani za stvaranje korisni�ke grupe onda prvo trebata da kontaktirate administratora, probajte da mu po�aljete privatnu poruku.");


$faq[] = array("--","Privatne poruke");
$faq[] = array("Ne mogu da �aljem privatne poruke!", "Za ovo postoji tri razloga; niste registrovani i/ili niste prijavljeni, administrator je isklju�io privatne poruke za ceo board ili vas je spre�io da �aljete poruke. Ako je ovo poslednje u pitanju, trebali biste da pitate administratora za�to je tako.");
$faq[] = array("Uporno dobijam ne�eljene privatne poruke!", "U budu�e �emo dodati listu ignorisanja za privatne poruke. Za sada ako i dalje dobijate ne�eljene privatne poruke od nekog obavestite administratora, oni imaju mogu�nost da spre�e korisnika da uop�te �alje privatne poruke.");
$faq[] = array("Dobio sam spam ili uvredljiv materijal od nekog sa ovog boarda!", "�ao nam je �to to �ujemo. email forma ovog boarda ima mere bezbednosti da poku�a i prati korisnike koji �alju takve poruke. Trebalo bi da po�aljete email administratoru sa punom kopijom email-a kojeg ste dobili, vrlo je va�no da mail po�aljete sa zaglavljem (ovde se nalaze detalji o korisniku koji je poslao email). Onda oni mogu stupiti u akciju.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","O phpBB 2");
$faq[] = array("Ko je napisao ovaj bilten board?", "Ovaj softver (u svojoj nemodifikovanoj formi) je proizveden, pu�ten i ima kopirajt <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Grupe</a>. Dostupan je pod GNU General Public Licence i mo�e se slobodno distribuirati, pogledajte link za vi�e detalja");
$faq[] = array("Za�to nije dostupna mogu�nost X-a?", "Ovaj softver je napisan i licenciran kroz phpBB Grupu. Ako verujete da bi ova mogu�nost trebala biti dodata onda vas molimo da posetite phpbb.com web sajt i pogledate �ta phpBB Grupa ima da ka�e. Molimo vas da ne �aljete zahteve za mogu�nostima na board na phpbb.com, Grupa koristi izvore znanja za prihvatanje novih mogu�nosti. Molimo vas da progitate kroz forume i pogledate �ta, i koliko, na�a pozicija je mo�da ve� za tu mogu�nost i onda pratite procedutu da biste do�li dotle.");
$faq[] = array("Za�to da vas kontaktiram o uvredljivom materijalu i/ili legalnim stvarima pripisanim ovom boardu?", "Trebalo bi da kontaktirate administratora ovog boarda. Ukoliko neznate ko je on, trebalo bi da prvo kontaktirate jednog od urednika foruma i pitate ga kome da se obratite. Ako jo� uvek nema odgovora trebalo bi da kontaktirate vlasnika domena (uradite pretragu ko je) ili, ako je board na besplatnom serveru (npr. yahoo, free.fr, f2s.com, itd.), menad�era ili odeljenje za uvrede tog servisa. Znajte da phpBB Grupa apsolutno nema kontrolu i ne mo�e na bilo koji na�in da sazna kako, gde ili ko koristi ovaj board. Apsolutno je besmisleno kontaktirati phpBB Grupu i povezati je sa bilo kojim legalnim (stati i prestati, obavezan, klevetni�ki komentar, itd.) �injenicama koje nisu direktno povezane sa phpbb.com web sajtom ili softwerom phpBB-a. Ako po�aljete email phpBB Grupi o bilo kom tre�erazrednom kori��enju ovog softvera onda bi trebalo da o�ekujete sa�et odgovor ili nikakav odgovor uop�te.");

//
// This ends the FAQ entries
//

?>