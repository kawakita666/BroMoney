<?php

/***************************************************************************
 *                          lang_faq.php [Croatian]
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

/***************************************************************************
 *   CONTRIBUTORS
 *   <NE bri�i i NE mijenjaj!>
 *   Danas �e biti toplo i sun�ano.
 *   [Hrvatski]
 *   Prevela s engleskog na hrvatski: An�ica Se�an [Ancica Secan].
 *   Vrijeme: 22. travnja 2003. godine [utorak].
 *   Updateano za 2.0.5: 19. lipnja 2003. godine [�etvrtak].
 *   Updateano za 2.0.11: 30. sije�nja 2005. godine [nedjelja].
 *   Verzija: 3.3.3.
 *   Url: http://ancica.sunceko.net.
 *   Danas �e biti toplo i sun�ano.
 *   Original ovog mog prijevoda mo�e� skinuti sa www.phpbb.com.
 *   Danas �e biti toplo i sun�ano.
 *   </NE bri�i i NE mijenjaj!>
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

$faq[] = array("--","Loginiranje i Registracija");
$faq[] = array("Za�to se ne mogu loginirati?", "<br />Jeste li se <i>registrirali</i>? Morate se registrirati kako biste se mogli prijaviti na forum.<br />Da li ste <i>isklju�eni</i> s foruma [zabranjen Vam je pristup]? Ako jeste, [kod loginiranja �ete vidjeti poruku o tome], kontaktirajte administratora/icu kako biste saznali razlog(e) isklju�enja.<br />Jeste li upisali <i>to�ne podatke</i> za loginiranje? Provjerite korisni�ko ime i zaporku.<br />Ukoliko ste eliminirali sve tri gornje mogu�nosti, i jo� uvijek se ne mo�ete loginirati, kontaktirajte administratora/icu [da provjeri �to (ni)je u redu s Va�im korisni�kim ra�unom].<br />");
$faq[] = array("Za�to se uop�e moram registrirati?", "<br />Ne morate ukoliko administrator/ica nije postavio/la uvjet da samo registrirane osobe mogu postati.<br />Bilo kako bilo, Registracijom �ete dobiti pristup dodatnim opcijama koje nisu dostupne neregistriranim osobama [Avatari, privatne poruke, e-mailovi, Korisni�ke grupe itd.].<br />S obzirom da Registracija traje svega nekoliko minuta, preporu�ljivo je da se registrirate.<br />");
$faq[] = array("Kako mogu onemogu�iti automatsko odjavljivanje s foruma?", "<br />Ako ne upalite opciju <i>Loginiraj me automatski</i> kada se loginirate, forum �e Vas dr�ati loginiranim/om samo za Va�eg boravka na forumu [odjavit �e Vas kad odete s foruma]. To sprje�ava zlouporabu Va�eg korisni�kog ra�una.<br />Da biste ostali loginirani, upalite opciju <i>Loginiraj me automatski</i> prilikom loginiranja [�to nije preporu�ljivo u slu�aju da forumu ne pristupate s Va�eg ve� s tu�eg ra�unala].<br />");
$faq[] = array("Kako mogu onemogu�iti pojavu mog korisni�kog imena na popisu online korisnika/ca?", "<br />U svom korisni�kom profilu upalite opciju <i> Sakrij moj online status</i> - �ime �ete [p]ostati vidljivi samo sebi i administratoru/ici, a za ostale �ete postati skriven/a.<br />");
$faq[] = array("Izgubih zaporku!", "<br />Ni�ta stra�no. Jest da je Va�a trenutna zaporka izgubljena [jer je kriptirana u na�oj bazi i ne mo�e Vam biti ponovo poslana], no, mo�ete zatra�iti novu.<br />Kliknete na <i>Login</i>, te na stranici koja �e Vam se otvoriti kliknete na <i>Zaboravih zaporku</i>.<br />Daljnje upute �e Vam sti�i e-mailom.<br />");
$faq[] = array("Registrirah se, ali se ne mogu loginirati!", "<br />Prvo provjerite da li ste unijeli pravilno <i>korisni�ko ime</i> i <i>zaporku</i>.<br />Ako jeste, dogodila se jedna od dvije mogu�e stvari: ako ste prilikom Registracije, a COPPA podr�ka je bila omogu�ena, kliknuli na <i>Sla�em se i imam manje od 13 godina</i>, morat �ete slijediti upute koje ste primili e-mailom; ili je mo�da potrebna aktivacija Va�eg korisni�kog ra�una [za �to ste obavijest vidjeli ili prilikom same Registracije ili Vam je stigla e-mailom].<br />Ukoliko ste eliminirali obje gornje mogu�nosti, i jo� uvijek se ne mo�ete loginirati, kontaktirajte administratora/icu [da provjeri �to (ni)je u redu s Va�im korisni�kim ra�unom].<br />");
$faq[] = array("Registrirah se davno, ali se sada vi�e ne mogu loginirati!", "<br />Dva su mogu�a razloga: ili ste upisali <i>pogre�no</i> korisni�ko ime i/ili zaporku; ili je administrator/ica <i>izbrisao/la</i> Va� korisni�ki ra�un.<br />");

$faq[] = array("--","Korisni�ke postavke");
$faq[] = array("Kako mogu promijeniti svoje postavke?", "<br />Sve Va�e postavke [ako ste registrirani] pohranjene su u bazi podataka.<br />Da biste promijenili Va�e postavke, kliknete na link <i>Profil</i> �to �e Vas odvesti na stranicu na kojoj mo�ete promijenite sve svoje postavke.<br />");
$faq[] = array("Ne�to ne valja s prikazom vremena!", "<br />Vrijeme je gotovo uvijek to�no prikazano, no, mo�e biti da je ono �to vidite vrijeme <i>druge vremenske zone</i>. Ako je to slu�aj, promijenite postavke svojega korisni�kog profila tako da izaberete onu vremensku zonu koja odgovara podru�ju u kojem se nalazite. Uzmite u obzir da mijenjanje vremenske zone, kao i ve�inu postavki, mo�e napraviti samo registrirani/a korisnik/ca.<br />");
$faq[] = array("Promijenih vremensku zonu, ali je vrijeme i dalje neto�no prikazano!", "<br />Ako ste sigurni da ste pravilno postavili vremensku zonu, ali je vrijeme i dalje neto�no prikazano, najvjerojatniji razlog je <i>ljetno vrijeme</i>. Forum nema postavke pra�enja prelaska izme�u standardnog i ljetnog vremena �to �e re�i da prilikom ljetnog vremena vrijeme prikazuje s razlikom od sat vremena u odnosu na pravo lokalno vrijeme.<br />");
$faq[] = array("Mog jezika nema na popisu!", "<br />Dva su mogu�a razloga: ili administrator/ica <i>nije instalirao/la</i> Va� jezik ili forum <i>nije preveden</i> na Va� jezik.<br />Pitajte administratora/icu foruma da li mo�e instalirati paket za jezik koji �elite. Ukoliko ne postoji prijevod na Va� jezik - bit �e nam drago ako ga napravite. Vi�e informacija o tome mo�ete na�i na sljede�em linku: <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>.<br />");
$faq[] = array("�to moram napraviti da bi se vidjela slika ispod mog korisni�kog imena?", "<br />Prilikom pregledavanja postova mogu�e je vidjeti dvije slike ispod Va�eg korisni�kog imena.<br />Prva slika je povezana s Va�im statusom; obi�no su to zvjezdice/blokovi koji ozna�avaju: koliko ste postova postali odnosno Va�u funkciju na forumu [npr. administrator/ica].<br />Ispod nje se mo�e nalaziti ve�a slika zvana Avatar [obi�no jedinstvena/osobna za svakog/u korisnika/cu].<br />Dopu�tenja o kori�tenju Statusnica/Avatara, kao i izbor dostupnosti istih, daje administrator/ica foruma [slobodno ga/ju kontaktirajte (sa) zamolbom o dopu�tenju Statusnica/Avatara ukoliko isto/a nije dao/la].<br />");
$faq[] = array("Kako mogu promijeniti svoj status?", "<br />U pravilu, svoj status ne mo�ete direktno promijeniti.<br />Ve�ina foruma koristi statuse da prika�e broj postova koje je postao/la odre�eni/a korisnik/ca, te da identificira korisnike/ce koji/e obavljaju odre�ene funkcije na forumu [obi�no oni/e imaju poseban status, npr. administratori/ce, moderatori/ce].<br />Zloupotrebljavanje foruma, u smislu postanja puno postova samo zato da bi se dosegao �to ve�i status, nema nikakvog smisla jer administratori(ce)/moderatori(ce) mogu <i>smanjiti</i> ne�iji status [npr. smanjenjem broja postova...].<br />");
$faq[] = array("Za�to se moram loginirati kada �elim korisniku/ci foruma poslati e-mail?", "<br />Ukoliko je administrator/ica omogu�io/la slanje e-mailova korisnicima/ama foruma preko ugra�enog e-mail obrasca - tu opciju mogu koristiti samo registrirani/e korisnici/e [�ime se sprje�ava zlouporaba forumova e-mail sistema od strane anonimnih osoba.]<br />");

$faq[] = array("--","Postanje");
$faq[] = array("Kako mogu postati [objaviti] temu/post na forumu?", "<br />Kliknete na odgovaraju�i gumb na forumu/temi [npr. <i>nova tema</i>, <i>odgovori</i>...].<br />Radnje koje (ne)mo�ete raditi su uvijek prikazane na dnu ekrana foruma/teme [npr. <i>Mo�ete otvarati nove teme</i>, <i>Ne mo�ete otvarati nove teme</i>...].<br />Ovisno o tome kako je administrator/ica odredio/la, postanje mo�e biti omogu�eno svima ili, pak, samo registriranim korisnicima/ama.<br />");
$faq[] = array("Kako mogu urediti/izbrisati post?", "<br />Post mo�ete urediti klikom na gumb <i>uredi</i>.<br />Primijetit �ete da neke postove ne�ete mo�i naknadno ure�ivati/urediti [npr. ako je u me�uvremenu tema ozna�ena kao zaklju�ana].<br />Post mo�ete izbrisati klikom na gumb <i>izbri�i</i>. Primijetit �ete da neke postove ne�ete mo�i izbrisati [npr. ako je u me�uvremenu netko odgovorio na njih].<br />Postoji mogu�nost i da administrator/ica izmijeni/izbri�e Va� post [u tom slu�aju bi svakako trebao/la napisati opasku �to je i za�to izmijenio/la].<br />");
$faq[] = array("Kako mogu dodati potpis?", "<br />Da biste dodali potpis - morate ga prvo napraviti.<br />Potpis mo�ete napraviti/urediti u Va�em korisni�kom profilu [pri �emu morate upaliti i opciju <i>Uvijek dodaj moj potpis</i> ukoliko �elite da bude dodan svakom postu/poruci].<br />Ako u neki post/poruku ne �elite dodati potpis, a upalili ste opciju <i>Uvijek dodaj moj potpis</i>, jednostavno za vrijeme pisanja samog posta/poruke odozna�ite opciju dodavanja potpisa.<br /> Ako u neki post/poruku �elite dodati potpis, a niste upalili opciju <i>Uvijek dodaj moj potpis</i>, jednostavno za vrijeme pisanja samog posta/poruke ozna�ite opciju dodavanja potpisa.<br />");
$faq[] = array("Kako mogu kreirati anketu?", "<br />Kada otvorite novu temu [ili izmijenite prvi post postoje�e teme - ako imate dopu�tenje] vidjet �ete formu <i>Anketa</i> ispod okvira za pisanje teksta posta [ako to ne vidite, vjerojatno nemate dopu�tenje za kreiranje anketa]. Unesete pitanje i [barem] dva mogu�a odgovora - kojih, unaprijed, za sve ankete, maksimalni limit odre�uje administrator/ica [da biste dodali odgovor kliknete na <i>Dodajte odgovor</i>]. Mo�ete postaviti i vremensko ograni�enje trajanja ankete [upi�ete broj dana; 0 = neograni�eno].<br />");
$faq[] = array("Kako mogu urediti/izbrisati anketu?", "<br />Ankete mo�e ure�ivati/urediti/izbrisati samo ona/j koja/i ih je i kreirala/o, moderator/ica i/ili administrator/ca. Da biste izmijenili anketu, ako imate dopu�tenje, odaberete ure�ivanje prvog posta u temi [ako je kreirana, anketa se uvijek nalazi u prvom postu u temi]. Vi anketu mo�ete izmijeniti samo ako nitko jo� nije glasovao, dok ju moderatori(ce)/administratori(ce), mogu mijenjati bilo kada. Anketu mo�ete izbrisati samo ako nitko jo� nije glasovao.<br />");
$faq[] = array("Za�to ne mogu pristupiti forumu?", "<br />Nekim forumima mogu pristupiti samo odre�eni(e) korisnici(e)/Korisni�ke grupe. Za pregledavanje, postanje... na takvim forumima Vam treba posebna autorizacija koju mo�ete (za)tra�iti/dobiti samo od moderatora(ice)/administratora(ice).<br />");
$faq[] = array("Za�to ne mogu glasovati u anketama?", "<br />Da bi se sprije�ilo namje�tanje rezultata, samo registrirani/e korisnici/e mogu glasovati u anketama. Ukoliko jeste registrirani/a korisnik/ca, a ipak ne mo�ete glasovati - nemate potrebita prava pristupa.<br />");
$faq[] = array("--","Ure�ivanje i tipovi tema");
$faq[] = array("�to je BBCode?", "<br />BBCode je specijalna implementacija HTML-a.<br />Mogu�nost kori�tenja BBCode-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to �to je administrator/ica odredio/la, Vi opcionalno sami mo�ete deaktivirati kori�tenje BBCode-a.<br />BBCode je sli�an HTML-u u stilu; tagovi se ume�u u viti�aste zagrade [ i ] (umjesto &lt; i &gt;) - �to nudi ve�u kontrolu prikaza. Kod [tagovi] se mo�e pisati ru�no, no, ovisno o predlo�ku kojeg koristite, vidjet �ete da je dodavanje BBCode-a Va�im postovima mogu�e i putem su�elja iznad prostora za post na obrascu za pisanje postova.<br />Za vi�e informacija o BBCode-u pogledajte Vodi� kojemu mo�ete pristupiti sa stranice za pisanje/editiranje postova.<br />");
$faq[] = array("Smijem li koristiti HTML?", "<br />Mogu�nost kori�tenja HTML-a daje administrator/ica foruma aktiviranjem/deaktiviranjem ove opcije. Bez obzira na to �to je administrator/ica odredio/la, Vi opcionalno sami mo�ete deaktivirati kori�tenje HTML-a.<br />Kod kori�tenja HTML-a, primijetit �ete da rade samo pojedini tagovi [oni koje je dopustio/la administrator/ica] - to je zbog onemogu�avanja zlouporabe foruma.<br />");
$faq[] = array("�to su Smajli�i?", "<br />Smajli�i su male sli�ice koje <i>prikazuju</i> emocije/razmi�ljanja osobe [koja ih je <i>ubacila</i> u post].<br />Smajli�e u post mo�ete <i>ubaciti</i> na dva na�ina: upisivanjem kratkog koda [ako je administrator/ica odobrio/la, svaki Smajli� ima svoj vlastiti kod] i/ili klikom na Smajli�a [Smajli�i se nalaze u sklopu obrasca za pisanje postova; u pravilu se vidi samo <i>prvih</i> 20, a ostale mo�ete vidjeti (i <i>ubaciti</i>) klikom na <i>Ostali Smajli�i</i>].<br />Nije preporu�ljivo ubacivati/ubaciti puno Smajli�a u post jer se time gube �itljivost i preglednost.<br />");
$faq[] = array("Kako mogu postati slike?", "<br />Postoje dvije bitne stvari koje treba zapamtiti kod postanja slika: prvo, mnogi/e korisnici/e ne vole puno slika u porukama, i drugo, slika koju umetnete mora biti dostupna na Internetu [Ne mo�e postojati samo na Va�em ra�unalu - osim ako imate webserver!]. Trenutno ne postoji na�in pohranjivanja slika lokalno pomo�u phpBB [o�ekuje se da �e sve ovo biti rije�eno u sljede�em phpBB izdanju].<br />Da biste postali sliku: morate obuhvatiti URL, na kojem se slika nalazi, sa BBCode [img][/img] tagovima; odnosno, ako je dopu�teno, upotrijebiti HTML tagove.<br />Npr.:<br />[img]http://ime_domene/ime_slike[/img]  ([img]http://www.ne�to.hr/slika.jpg[/img])<br />odnosno<br />&lt;img src=\"http://ime_domene/ime_slike\"&gt; (&lt;img src=\"http://www.ne�to.hr/slika.jpg\"&gt;).<br />");
$faq[] = array("�to su Obavijesti?", "<br />Obavijesti su postovi koji �esto sadr�e va�ne informacije �to �e re�i da bi ih bilo pametno pro�itati �im ih uo�ite.<br />Pojavljuju se na vrhu svake stranice foruma na kojem su postane.<br />Administrator/ica odre�uje tko sve ima pravo postati Obavijesti.<br />");
$faq[] = array("�to je \"Va�no\"?", "<br />\"Va�no\" su postovi koji �esto sadr�e va�ne informacije �to �e re�i da bi ih bilo pametno pro�itati �im ih uo�ite.<br />Pojavljuju se na vrhu stranice foruma [ispod eventualnih Obavijesti] na kojem su postani.<br />Administrator/ica odre�uje tko ih sve ima pravo postati.<br />");
$faq[] = array("�to su Zaklju�ane teme?", "<br />Zaklju�ane teme su teme koje je moderator(ica)/administrator(ica) [zbog nekog, a mo�e ih biti puno, razloga] zaklju�ao/la.<br />Mogu�e ih je samo pregledavati [dakle, nije mogu�e ure�ivati/izbrisati... postove...]. Ankete koje se nalaze u njima [ako nisu po odre�enju] zavr�avaju istog trena kada moderator(ica)/administrator(ica) zaklju�a temu.<br />");
$faq[] = array("--","Stupnjevanje korisnika/ca i Korisni�ke grupe");
$faq[] = array("�to su administratori/ce?", "<br />Administratori/ce su osobe s najvi�om razinom kontrole nad cijelim forumom.<br />Mogu kontrolirati sve aspekte foruma [postavljanje dopu�tenja, isklju�ivanje korisnika/ca, stvaranje Korisni�kih grupa/moderatora, itd.].<br />");
$faq[] = array("�to su moderatori/ce?", "<br />Moderatori/ce su osobe �iji je <i>posao</i> odr�avanje foruma.<br />Imaju ovlasti mijenjanja/izbrisivanja postova, zaklju�avanja/otklju�avanja/premje�tanja/izbrisivanja/razdvajanja tema u forumima koje odr�avaju.<br />Tu su i da bi sprije�ili/e korisnike/ce od skretanja s tema/objavljivanja nedozvoljenih sadr�aja...<br />");
$faq[] = array("�to su Korisni�ke grupe?", "<br />Korisni�ke grupe su grupe u koje administratori/ce grupiraju korisnike/ce.<br />Svaki/a korisnik/ca mo�e pripadati ve�em broju Korisni�kih grupa.<br />Svakoj Korisni�koj grupi mogu biti dodijeljena individualna prava pristupa, �to administratorima/cama olak�ava dodjeljivanje odre�enih prava odre�enim korisnicima/ama [npr. progla�avanje vi�e korisnika/ca moderatorima/cama foruma].<br />");
$faq[] = array("Kako se mogu pridru�iti Korisni�koj grupi?", "<br />Da biste se pridru�ili Korisni�koj grupi, kliknete na <i>Korisni�ke grupe</i> �to �e Vas odvesti na stranicu na kojoj �ete vidjeti Korisni�ke grupe.<br />Nemaju sve grupe <i>otvoren pristup</i>; neke su zatvorene, neke skrivene...<br />Ako imate pristup Korisni�koj grupi, za pridru�ivanje kliknete na odgovaraju�u naredbu [obi�no <i>Pridru�ite se grupi</i>].<br />Ako Vam moderator/ica odbije zahtjev bilo bi lijepo da ga/ju ne gnjavite tra�enjem obja�njenja - jer, ako se zaista dogodilo da Vam je odbio/la zahtjev - sigurno je imao/la dobar razlog.<br />");
$faq[] = array("Kako mogu postati moderator/ica Korisni�ke grupe?", "<br />Korisni�ke grupe inicijalno kreira administrator/ica pri �emu odmah odre�uje i moderatora(e)/icu(e).<br />Ukoliko �elite postati moderatorom/icom ve� postoje�e Korisni�ke grupe ili, pak, (za)tra�iti otvaranje nove Korisni�ke grupe koju �elite moderirati - kontaktirajte administratora/icu [npr. privatnom porukom].<br />");

$faq[] = array("--","Privatne poruke");
$faq[] = array("Ne mogu poslati privatnu poruku!", "<br />Tri su mogu�a razloga:<br /> - ili niste registrirani/loginirani;<br /> - ili je administrator/ca onesposobio/la privatne poruke za cijeli forum;<br /> - ili je administrator/ica Vas sprije�io/la u slanju privatnih poruka.<br />U potonjem slu�aju zatra�ite od administratora/ice obja�njenje.<br />");
$faq[] = array("Dobivam ne�eljene privatne poruke!", "<br />U planu je dodavanje liste za ignoriranje u sistemu privatnih poruka. Do tada, ako i dalje dobivate ne�eljene privatne poruke, obavijestite administratora/icu [ima ovlasti sprije�iti korisnika/ce u slanju privatnih poruka ikome].<br />");
$faq[] = array("Primih spamerski/uvredljiv e-mail od nekoga s ovog foruma!", "<br />E-mail obrazac ovog foruma uklju�uje osiguranje koje prati korisnike/ce koji/e �alju poruke. E-mailirajte administratora/icu s obavijesti o tome, pri �emu obavezno po�aljite i kopiju primljenog e-maila [uklju�uju�i zaglavlje - ono sadr�i detalje o korisniku/ci koji/a je poslao/la e-mail). Po primitku Va�eg e-maila, administrator/ica mo�e poduzeti za to predvi�ene mjere.<br />");

//
// These entries should remain in all languages and for all modifications
//

$faq[] = array("--","phpBB 2");
$faq[] = array("Tko je napisao ovaj forum?", "<br />Ovaj software [u njegovom originalnom obliku] produciran je i objavljen od strane <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Dostupan je pod GNU General Public Licence i mo�e se slobodno distribuirati [kliknite na <a href=\"http://www.phpbb.com/\" target=\"_blank\">link</a> za detalje]. <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> zadr�ava sva autorska prava na ovaj software.<br />");
$faq[] = array("Za�to X karakteristika nije dostupna?", "<br />Ako smatrate da neka karakteristika treba biti dodana, posjetite <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> i pogledajte �to o tome <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> ima za re�i [nemojte zahtjeve za ovime postati na <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> forumu]. Pro�itajte na forumima na�e stajali�te o ovome i pratite proceduru koja je tamo nazna�ena.<br />");
$faq[] = array("Koga kontaktirati u vezi zlouporabe/pravnih stvari vezanih uz ovaj forum?", "<br />Kontaktirajte administratora/icu ovog foruma. Ako ga/ju ne mo�ete na�i, kontaktirajte moderatore/ice ovog foruma i njih pitajte koga biste trebali pitati. Ako i dalje ne dobijete odgovor, kontaktirajte vlasnika/cu domene ili pru�atelja usluga. <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> nema apsolutno nikakvu kontrolu i ne mo�e ni u kojem slu�aju odgovarati za to kako se, gdje i od strane koga ovaj forum koristi. Potpuno je besmisleno kontaktirati <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> u vezi bilo kakve pravne stvari koja nije direktno vezana uz <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpbb.com</a> Web stranice ili <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB</a> software. Ako e-mailirate <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a> oko toga kako bilo koja tre�a stran(k)a koristi ovaj software - ne o�ekujte odgovor.<br />");

/***************************************************************************
  *   AN�I - START
  *   <NE bri�i i NE mijenjaj!>
  *   Danas �e biti toplo i sun�ano.
  *   Ne dopu�tam [!] da izbri�e�/dopi�e�/uredi� BILO �TO
  *   �to po�inje s retkom AN�I - START [4 retka iznad ovog retka]
  *   i zavr�ava sa 17 redaka ispod AN�I - START. [Prelamanje rije�i/Word wrap - uga�eno!]
  *   U protivnom: budi svjestan/na da kr�i� moja autorska prava.
  *   An�ica Se�an [Ancica Secan].
  *   Url: http://ancica.sunceko.net.
  *   Danas �e biti toplo i sun�ano.
  *   </NE bri�i i NE mijenjaj!>
 ***************************************************************************/
$faq[] = array("--","O prijevodu");
$faq[] = array("Tko?", "<br />Ovaj prijevod, s engleskog [originalna verzija] na hrvatski, u potpunosti, napravila je <a href=\"http://ancica.sunceko.net/\" target=\"_blank\">An�ica Se�an</a>.<br />[U kompletu, s prijevodom, dolaze i lokalizirane sli�ke.]<br />");
$faq[] = array("Verzija?", "<br />Verzija ovog prijevoda je: 3.3.3.<br />[Zadnju] Slu�benu verziju ovog prijevoda mo�ete skinuti sa <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>.<br />");
/***************************************************************************
  *   AN�I - END
 ***************************************************************************/

//
// This ends the FAQ entries...
//

?>