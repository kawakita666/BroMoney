<?php

/***************************************************************************
 *               lang_admin.php [Bosnia-Croatia-Serbia-Montenegro]
 *                              -------------------
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *     $Id: lang_admin.php,v 1.4 2002/02/14 16:01:29 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/


/***************************************************************************
 *     Prevod s italijanske verzije phpBB Foruma: Golac �eljko, Alen Ruvic *
 *     pocetak prevoda      : Subota, 26. oktobar 2002                     *
 *     web                  : http://www.maglaj.info                       *
 *     e-mail               : mrmot@vizzavi.it, ruval@gmx.ch               *
 ***************************************************************************/
 
 
//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Osnovna pode�avanja";
$lang['Users'] = "Korisnici";
$lang['Groups'] = "Korisni�ke grupe";
$lang['Forums'] = "Forumi";
$lang['Styles'] = "Stilovi foruma";

$lang['Configuration'] = "<span style=\"color:#FF0000\">Osnovno pode�avanje</span>";
$lang['Permissions'] = "Dozvole";
$lang['Manage'] = "Administracija";
$lang['Disallow'] = "Rezervisanje nadimaka";
$lang['Prune'] = "Brisanje Forum�";
$lang['Mass_Email'] = "Masovni e-mail";
$lang['Ranks'] = "Rangovi korisnika";
$lang['Smilies'] = "Smjehuljci";
$lang['Ban_Management'] = "Ban kontrola";
$lang['Word_Censor'] = "Cenzura rije�i";
$lang['Export'] = "Eksportacija";
$lang['Create_new'] = "Kreiraj";
$lang['Add_new'] = "Dodaj";
$lang['Backup_DB'] = "Sigurnosne kopije (Backup)";
$lang['Restore_DB'] = "Povratak u prija�nje stanje";


//
// Index
//
$lang['Admin'] = "Administracija";
$lang['Not_admin'] = "Niste ovla�teni za administriranje foruma";
$lang['Welcome_phpBB'] = "Dobro do�li na phpBB Forum!";
$lang['Admin_intro'] = "Zahvaljujemo Vam na povjerenju koje ste nam ukazali izborom <b>phpBB foruma</b> kao na�ina komuniciranja va�ih posjetilaca.<br> U ovom dijelu administracijskog panela su prikazani razli�iti statisti�ki podaci Va�eg Foruma. Na ovaj dio se mo�ete prebaciti klikaju�i na link   <u>Statistika/Prisutnost</u> u lijevom meniju stranice. Klikanjem na logo phpBB (lijevi menu stranice; vrh) �ete biti preba�eni na index Foruma. U lijevom menuu stranice prikazani su linkovi koji �e Vas odvesti u razli�ite sekcije pomo�u kojih kontroli�ete Forum. <br>Nadamo se da �e sve prote�i bez mnogo stresova. U�ivajte i ne zaboravite: <span style=\"color:#CC3300\"><i>Sve ovo je samo jedna igra! <b>Nema tog Foruma koji je vrijedniji od va�ih �ivaca!</b></span></i>.";
$lang['Main_index'] = "Index";
$lang['Forum_stats'] = "Statistika";
$lang['Admin_Index'] = "Statistika/Prisutnost";
$lang['Preview_forum'] = "Izgled foruma";

$lang['Click_return_admin_index'] = "Klikni %sovdje%s za povratak na <i>Statistika/Prisutnost</i>";

$lang['Statistic'] = "Statistika foruma";
$lang['Value'] = "Vrijednost";
$lang['Number_posts'] = "Broj komentara";
$lang['Posts_per_day'] = "Poruke po danu";
$lang['Number_topics'] = "Broj tema";
$lang['Topics_per_day'] = "Teme po danu";
$lang['Number_users'] = "Broj korisnika";
$lang['Users_per_day'] = "Korisnici po danu";
$lang['Board_started'] = "Forum aktiviran";
$lang['Avatar_dir_size'] = "Dimenzija directory Avatar";
$lang['Database_size'] = "Dimenzija Database";
$lang['Gzip_compression'] = "Kompresija Gzip";
$lang['Not_available'] = "Nedostupno";

$lang['ON'] = "AKTIVIRANO"; // Ovo je za  GZip kompresiju
$lang['OFF'] = "ISKLJU�ENO"; 


//
// korisni instrumenti za databazu
//
$lang['Database_Utilities'] = "Korisni instrumenti databaze";

$lang['Restore'] = "Povrati prvobitno stanje";
$lang['Backup'] = "Sigurnosna kopija";
$lang['Restore_explain'] = "Posredstvom ovog instrumenta mogu�e je povratiti prvobitne tabele foruma phpBB (pod uslovom da ste ranije napravili jednu kopiju). Ukoliko server na kojem se nalazi va� phpBB forum podr�ava ovu opciju mogu�e je upload-ovat jedan tekstualni file (kompresovan u Gzip-u koji �e zatim automatski biti dekompresovan na serveru. <b>OPREZ!</b> Ovom operacijom �ete izbrisati sve podatke do tada prisutne u databazi foruma. <u>Mo�e se desiti da �itava operacija traje malo du�e te je zbog toga neophodno sa�ekati i ne izlaziti iz ove sekcije dok sve ne bude zavr�eno</u>.";
$lang['Backup_explain'] = "Posredstvom ovog instrumenta mogu�e je kreirati jednu kopiju kako strukture tabela koje �ine phpBB forum tako i podataka sadr�anih u njima. Ukoliko ste nakon instaliranja originalnog phpBB foruma dodali i neke druge elemente koji pro�iruju mogu�nosti foruma (npr.chat), neophodno je unijeti i nazive tabela koje �ine strukturu tih elemenata (upisati ih i <b>Dodatne tabele</b>; odvojiti zarezom). Ukoliko server na kojem je instaliran phpBB forum dozvoljava, mogu�e je kompresovati file-ove kori�tenjem Gzip-a kako bi se smanjile njihove dimenzije prije dowload-ovanja.";

$lang['Backup_options'] = "Opcije sigurnosne kopije (<b>Backup</b>)";
$lang['Start_backup'] = "Zapo�ni Backup";
$lang['Full_backup'] = "Kompletan Backup";
$lang['Structure_backup'] = "Backup strukture foruma (samo struktura tabela)";
$lang['Data_backup'] = "Backup podataka (samo podaci)";
$lang['Additional_tables'] = "Dodatne tabele";
$lang['Gzip_compress'] = "Gzip kompresija file-ova";
$lang['Select_file'] = "Izaberi file";
$lang['Start_Restore'] = "Zapo�ni povratak u prija�nje stanje";

$lang['Restore_success'] = "Prija�nje stanje databaze je uspje�no povra�eno.<br /><br />Forum bi sada treba da bude kakav je bio u momentu kreiranja sigurnosne kopije (Backup).";
$lang['Backup_download'] = "Download �e ubrzo zapo�eti. Molimo Vas za malo strpljenja.";
$lang['Backups_not_supported'] = "Na �alost Backup databaze nije mogu� jer ga sistem ne podr�ava.";

$lang['Restore_Error_uploading'] = "Pojavila se gre�ka prilikom upload-ovnja sigurnosne kopije.";
$lang['Restore_Error_filename'] = "Ime file-a nije ta�no. Poku�aj sa alternativnim imenom.";
$lang['Restore_Error_decompress'] = "Nije mogu�e dekompresovati Gzip file. MolimoVasda za upload tekstualnog file-a.";
$lang['Restore_Error_no_file'] = "Nijedan file nije upload-ovan.";


//
// dozvole i ovlastenja
//
$lang['Select_a_User'] = "Izaberi korisnika";
$lang['Select_a_Group'] = "Izaberi grupu korisnika";
$lang['Select_a_Forum'] = "Izaberi Forum";
$lang['Auth_Control_User'] = "Dozvole i ovla�tenja korisnika"; 
$lang['Auth_Control_Group'] = "Dozvole i ovla�tenja grupe korisnika"; 
$lang['Auth_Control_Forum'] = "Dozvole i ovla�tenja Foruma"; 
$lang['Look_up_User'] = "Na�i korisnika"; 
$lang['Look_up_Group'] = "Na�i grupu"; 
$lang['Look_up_Forum'] = "Idi na Forum (temu)"; 

$lang['Group_auth_explain'] = "Ovdje je mogu�e definisati dozvole i ovla�tenja moderatorima pojedinih grupa. Ne zaboravite da kada modifikujete dozvole jedne grupe, korisnik mo�e svakako pristupiti forumu zahvaljuju�i njegovim individualnim ovla�tenjima. U ovom slu�aju �ete biti svakako obavije�teni.";
$lang['User_auth_explain'] = "Ovdje je mogu�e modifikovati dozvole i ovla�tenja koje je administrator dodijelio svakom pojedinom korisniku.Ne zaboravite da kada to u�inite korisnik �e mo�i u�i na forum ukoliko mu to dozvoljavaju pravila (dozvole) pojedine grupe. U ovom slu�aju �ete biti svakako obavije�teni.";
$lang['Forum_auth_explain'] = "Ovdje je mogu�e definisati razli�ite vrste dozvola i ovla�tenja za svaki pojedina�ni forum (temu foruma). Pod <b>dozvolama</b> se podrazumijevaju razne operacije koje korisnici foruma mogu izvr�avati kao �to su: <i>upis komentara, brisanje ili modifikovanje <u>vlastitih</u> komentara</i> i sli�no. <b>Ovla�tenjima</b> raspola�u moderatori i to su uglavnom <u>pojedine</u> funkcije <b>kontrole</b> foruma (<i>razne vrste zabrana korisnicima, eventualna prepravka i brisanje <u>tudjih</u> komentara</i> itd.). <b>Administrator foruma</b> (kao najodgovornija osoba zbog svih kontrolnih funkcija koje mu dopu�ta phpBB forum) bi zbog toga trebao biti obazriv pri izboru osoba koje �e obavljati funkciju <b>Moderatora</b>.  Treba imati na umu da funkcije <b>Moderatora</b> zavise od toga koliko �e mu ovlasti dodijeliti <b>Administrator</b>, �to zna�i da jedan moderator ne mora imati kontrolu nad svim kategorijama ili temama Foruma.<br>  Na raspolaganju su dvije mogu�nosti kontrole foruma (ili neke njegove sekcije): <b>jednostavna</b> i <b>napredna</b>. <b>Napredni</b> na�in kontrole Vam nudi ve�e mogu�nosti pode�avanja kontrolnih nivoa unutar svake pojedina�ne sekcije foruma. Mijenjanjem dozvola i ovla�tenja bi�e Vam prikazano koja vrsta korisnika mo�e obavljati razli�ite operacije na forumu.<br><br>Kod jednostavne kontrole opcije su sljede�e:<br><br><b>Javan</b> - svi mogu u�estvovati u radu Foruma.<br><b>Registrovan</b> - samo registrovani �lanovi mogu u�estvovati u radu Foruma.<br><b>Registrovan [skriven]</b> - obi�nim posjetiocima takav Forum ne�e biti vidljiv<br><b>Privatan</b> - u radu Foruma mogu u�estvovati samo registrovani korisnici sa specijalnim pristupom (vidi menu <i>Korisnici - dozvole i ovla�tenja</i>).<br><b>Privatan [skriven]</b> - Forum je vidljiv samo registrovanim �lanovima sa specijalnim pristupom.<br><b>Moderatori</b> - Forum je dostupan samo korisnicima sa moderatorskim statusom.<br><b>Moderatori [skriven]</b> - Pristup je dozvoljen samo korisnicima sa moderatorskim statusom i nevidljiv je za ostale korisnike.";

$lang['Simple_mode'] = "Jednostavna kontrola";
$lang['Advanced_mode'] = "Napredna kontrola";
$lang['Moderator_status'] = "Moderatorski status";

$lang['Allowed_Access'] = "Dozvoljen pristup";
$lang['Disallowed_Access'] = "Nedozvoljen pristup";
$lang['Is_Moderator'] = "Jeste moderator";
$lang['Not_Moderator'] = "Nije moderator";

$lang['Conflict_warning'] = "Pa�nja, konflikt ovla�tenja";
$lang['Conflict_access_userauth'] = "Ovaj korisnik jo� uvijek ima pristup ovom Forumu posredstvom </i>grupe korisnika</i> �iji je �lan. Ukoliko �eli� u potpunosti eliminirati sva prava na pristup ovom korisniku, mogu�e je <li></li>modifikovati dozvole i ovla�tenja �itave grupe kojoj pripada<li></li>isklju�iti korisnika iz grupe te zatim ograni�iti njegova pristupna prava. Prava grupe (i Foruma u kojima u�estvuje) su navedeni ovdje:";
$lang['Conflict_mod_userauth'] = "Ovaj korisnik jo� uvijek ima moderatorski status u Forumu posredstvom <i>grupe korisnika</i> �iji je �lan. Ukoliko �eli� oduzeti moderatorski status ovom korisniku, mogu�e je <li></li>modifikovati dozvole i ovla�tenja �itave grupe kojoj pripada<li></li>isklju�iti korisnika iz grupe te zatim oduzeti njegov moderatorski status. Prava grupe (i Foruma u kojima u�estvuje) su navedeni ovdje:";

$lang['Conflict_access_groupauth'] = "Sljede�i korisnici jo� uvijek imaju pravo pristupa Forumu posredstvom dozvola koje imaju. Ukoliko �eli� u potpunosti eliminirati sva prava na pristup ovim korisnicima, mogu�e je <li></li>modifikovati dozvole i ovla�tenja  grupe kojoj pripada<li></li>isklju�iti korisnike iz grupe te zatim ograni�iti njihova pristupna prava. Prava grupe (i Foruma u kojima u�estvuju) su navedeni ovdje:";
$lang['Conflict_mod_groupauth'] = "Sljede�i korisnici jo� uvijek imaju moderatorski status u Forumu posredstvom dozvola koje imaju. Ukoliko �eli� oduzeti moderatorski status ovim korisnicima, mogu�e je <li></li>modifikovati dozvole i ovla�tenja grupe kojoj pripadaju<li></li>isklju�iti korisnike iz grupe te zatim oduzeti moderatorski status. Prava grupe (i Foruma u kojima u�estvuju) su navedeni ovdje:";

$lang['Public'] = "Javan";
$lang['Private'] = "Privatan";
$lang['Registered'] = "Registrovan";
$lang['Administrators'] = "Administratori";
$lang['Hidden'] = "skriven";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "SVI";
$lang['Forum_REG'] = "�LANOVI";
$lang['Forum_PRIVATE'] = "PRIVATNO";
$lang['Forum_MOD'] = "MODERATOR";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Vidjeti";
$lang['Read'] = "�itanje";
$lang['Post'] = "Pisanje poruka";
$lang['Reply'] = "Odgovoranje";
$lang['Edit'] = "Prepravka poruka";
$lang['Delete'] = "Brisanje poruka";
$lang['Sticky'] = "Pokretanje va�nih tema";
$lang['Announce'] = "Pisanje obavje�tenja"; 
$lang['Vote'] = "Glasanje";
$lang['Pollcreate'] = "Kreiranje anketa";

$lang['Permissions'] = "Dozvole i ovla�tenja";
$lang['Simple_Permission'] = "Permesso semplice";

$lang['User_Level'] = "Rang korisnika"; 
$lang['Auth_User'] = "Korisnik";
$lang['Auth_Admin'] = "Administrator";
$lang['Group_memberships'] = "�lanstvo grupe korisnika";
$lang['Usergroup_members'] = "Ovu grupu �ine sljede�i �lanovi";

$lang['Forum_auth_updated'] = "Dozvole Foruma A�urirane";
$lang['User_auth_updated'] = "Korisni�ke dozvole a�urirane";
$lang['Group_auth_updated'] = "Dozvole grupe a�urirane";

$lang['Auth_updated'] = "Dozvole su a�urirane";
$lang['Click_return_userauth'] = "Klikni %sovdje%s za povratak na panel <i>Dozvole i Ovla�tenja korisnika</i>";
$lang['Click_return_groupauth'] = "Klikni %sovdje%s za povratak na panel <i>Dozvole i Ovla�tenja grupe korisnika</i>";
$lang['Click_return_forumauth'] = "Klikni %sovdje%s za povratak na panel <i>Dozvole i Ovla�tenja Foruma</i>";


//
// Banovanje korisnika
//
$lang['Ban_control'] = "Kontrolni centar za blokiranje korisnika";
$lang['Ban_explain'] = "Po�to se na svakom forumu prije ili kasnije pojavi neko ko ne po�tuje pravila Foruma, administrator, kao lice odgovorno za ono �to se de�ava na forumu, ima potrebu za instrumentima koji �e mu omogu�iti da takve korisnike na neki na�in dr�i pod konrolom. U ovom odjeljku mogu�e je, posredstvom razli�itih instrumenata, zabraniti pristup <em>'nevaljalcima'</em> �ak i samom indexu foruma blokiranjem �itavog IP ili jednog njegovog segmenta. Treba, medjutim, voditi ra�una da ukoliko se radi o dinami�kim IP (tj.da provider pri svakoj novoj koneksiji na Internet odredi razli�it IP) bi�e vrlo te�ko sprije�iti ulazak korisniku. Zbog toga je potrebno biti pa�ljiv prilikom uvodjenja ovakvih mjera jer se mo�e desiti da neko dugi, kome je igrom slu�aja dodijeljen blokirani IP, ne�e mo�i u�i na Forum.<br>Takodje, blokiranjem e-mail mo�e se sprije�iti ponovna registracija korisnika pod nekim drugim nadimkom (naravno, pod uslovom da koristi isti e-mail kada se �eli ponovno registrovati). <br>Napomena:<br><u>Nemojte se zavaravati da na ovaj na�in mo�ete zaista zabraniti nekome da dodje na Forum, pogotovo ne onima koji poznaju principe funkcionisanja Interneta jer takvi �e sigurno na�i na�in da zaobi�u sve va�e zabrane.</u> Ovdje vrijedi pravilo da �to je neko manje vi�an svoj ovoj tehnologiji lak�e ga je blokirati. Takodje imajte na umu da svaka zloupotreba ili svojevoljno kori�tenje ovih instrumenata za posljedicu obicno ima revolt i napu�tanje foruma od strane njegovih korisnika.";
$lang['Ban_explain_warn'] = "Molimo Vas da obratite pa�nju prilikom blokiranja intervala IP adresa. Prilikom upisivanja jednog intervala IP adresa, bi�e blokirani svi IP izmedju po�etka i kraja intervala. Bi�e u�injeni poku�aji minimiziranja broja IP adresa uba�enih u data-bazu automatskim dodavanjem odgovaraju�ih jolly-a na odgovaraju�i na�in. Ukoliko je zaista neophodno blokiranje korisnika posredstvom IP nastojte biti �to precizniji u definisanju <i>'inkriminiranog'</i> IP.";

$lang['Select_username'] = "Izaberi korisnika";
$lang['Select_ip'] = "Izaberi IP";
$lang['Select_email'] = "Izaberi e-mail";

$lang['Ban_username'] = "Ograni�i pristup jednom ili vi�e u�esnika Foruma";
$lang['Ban_username_explain'] = "Mogu�e je ograni�iti pristup jednom ili vi�e u�esnika. Navesti nadimak (Username) korisnika i potvrditi.";

$lang['Ban_IP'] = "Blokiranje IP ili Hostname";
$lang['IP_hostname'] = "Adresa IP ili hostname";
$lang['Ban_IP_explain'] = "Navesti IP ili Hostname koji se �ele blokirati i odvojiti ih zarezom (,). Po�etak i kraj jednog intervala IP adresa ograni�iti sa crticom (-); koristiti simbol * kao jolly";

$lang['Ban_email'] = "Zabrana pristupa posredstvom blokiranja e-mail";
$lang['Ban_email_explain'] = "Navesti jedan ili vi�e e-mail koji se �ele blokirati i odvojiti ih zarezom (,). Koristiti simbol * kao jolly  npr. <i>*@hotmail.com</i>";

$lang['Unban_username'] = "Skidanje zabrane jednom ili vi�e korisnika";
$lang['Unban_username_explain'] = "Mogu�e je jednom operacijom izabrati vi�e korisnika kojima se �eli skinuti zabrana (kombinacija taster CTRL tastature i mi�a).";

$lang['Unban_IP'] = "Skidanje zabrane jednoj ili vi�e IP adresa";
$lang['Unban_IP_explain'] = "Mogu�e je jednom operacijom izabrati vi�e IP adresa kojima se �eli skinuti zabrana (kombinacija taster CTRL tastature i mi�a).";

$lang['Unban_email'] = "Deblokiranje e-mail adresa";
$lang['Unban_email_explain'] = "Mogu�e je jednom operacijom izabrati vi�e e-mail adresa koje se �ele deblokirati (kombinacija taster CTRL tastature i mi�a).";

$lang['No_banned_users'] = "Nema blokiranih korisnika";
$lang['No_banned_ip'] = "Nema blokiranih IP";
$lang['No_banned_email'] = "Nema blokiranih e-mail adresa";

$lang['Ban_update_sucessful'] = "Lista blokiranih korisnika je uspje�no a�urirana.";
$lang['Click_return_banadmin'] = "Klikni %sovdje%s za povratak na <i>Kontrolni centar za blokiranje korisnika</i>";


//
// osnovno podesavanje
//
$lang['General_Config'] = "Osnovno pode�avanje";
$lang['Config_explain'] = "Pomo�u ovog modula mogu�e je konfigurirati osnovnu postavku Foruma. Za konfiguraciju parametara vezanih za pojedine sekcije Foruma ili njegovih u�esnika koristiti odgovaraju�i link u lijevom menuu.";

$lang['Click_return_config'] = "Klikni %sovdje%s za povratak na Osnovno pode�avanje";

$lang['General_settings'] = "Glavna konfiguracija Foruma";
$lang['Server_name'] = "Ime Domain-a";
$lang['Server_name_explain'] = "Ime domain-a na kojem se nalazi Forum";
$lang['Script_path'] = "Pozicija Foruma";
$lang['Script_path_explain'] = "Pozicija na kojoj je instaliran phpBB2 u odnosu na ime domin-a";
$lang['Server_port'] = "Vrata Servera";
$lang['Server_port_explain'] = "Vrijednost je obi�no 80; promijeniti u slu�aju potrebe nakon konsultovanja administratora servera";
$lang['Site_name'] = "Ime Foruma (ili site-a)";
$lang['Site_desc'] = "Opis Foruma (ili site-a)";
$lang['Board_disable'] = "Blokiraj Forum";
$lang['Board_disable_explain'] = "OPREZ!! Ovom opcijom Forum postaje nedostupan korisnicima! Ne izlazi nakon blokiranja Foruma jer ne�e� mo�i u�i ponovo!!!!";
$lang['Acct_activation'] = "Osposobi aktivaciju account-a";
$lang['Acc_None'] = "Niko"; // These three entries are the type of activation
$lang['Acc_User'] = "Korisnik";
$lang['Acc_Admin'] = "Administrator";

$lang['Abilities_settings'] = "Osnovne postavke vezane za Forum i korisnike";
$lang['Max_poll_options'] = "Ankete - maksimalan broj mogu�ih odgovora";
$lang['Flood_Interval'] = "Flood-period";
$lang['Flood_Interval_explain'] = "Najmanja pauza neophodna izmedju upisivanja dva komentara istog autora (vrijeme u sekundama)";
$lang['Board_email_form'] = "Slanje e-mailova posredstvom Foruma";
$lang['Board_email_form_explain'] = "Korisnici mogu me�usobno razmijenjivati e-mailove posredstvom Foruma.";
$lang['Topics_per_page'] = "Broj argumenata po stranici";
$lang['Posts_per_page'] = "Broj poruka po stranici";
$lang['Hot_threshold'] = "Broj neophodnih poruka kako bi jedna tema bila klasifikovana kao <b>popularna</b>.";
$lang['Default_style'] = "Zvani�an stil Foruma";
$lang['Override_style'] = "Poni�ti stil Foruma kojeg koristi �lan posredstvom vlastitog profila.";
$lang['Override_style_explain'] = "Korisnik je prisiljen koristiti stil Foruma kojeg odredi Administrator.";
$lang['Default_language'] = "Glavni jezik Foruma";
$lang['Date_format'] = "Format datuma";
$lang['System_timezone'] = "Vremenska zona Foruma";
$lang['Enable_gzip'] = "Omogu�ena GZIP kompresija";
$lang['Enable_prune'] = "Omogu�i brisanje Forum�";
$lang['Enable_prune_explain'] = "Automatsko brisanje tema (foruma) ukoliko nije bilo odgovora nakon nekog odre�enog vremenskog perioda.";
$lang['Allow_HTML'] = "Dozvoli HTML";
$lang['Allow_BBCode'] = "Dozvoli BBCode";
$lang['Allowed_tags'] = "Dozvoljeni HTML tag-ovi";
$lang['Allowed_tags_explain'] = "Odvoji tag-ove zarezom";
$lang['Allow_smilies'] = "Dozvoli smjehuljke";
$lang['Smilies_path'] = "Pozicija za pohranjivanje smjehuljaka";
$lang['Smilies_path_explain'] = "Pozicija gdje se nalaze pohranjeni smjehuljci u odnosu na root direktorij phpBB, npr. <i>images/smilies</i>";
$lang['Allow_sig'] = "Dozvoli potpis";
$lang['Max_sig_length'] = "Maksimalna du�ina potpisa";
$lang['Max_sig_length_explain'] = "Najve�i broj karaktera dopu�ten za kreiranje potpisa korisnika";
$lang['Allow_name_change'] = "Dozvoli zamjenu nadimka (<i>username</i>)";

$lang['Avatar_settings'] = "Konfiguracija Avatara";
$lang['Allow_local'] = "Osposobi galeriju avatara";
$lang['Allow_remote'] = "Dozvoli vanjske avatare";
$lang['Allow_remote_explain'] = "Koriste se avatari koji se nalaze na nekoj drugoj internet stranici (<i>linkovanje</i>)";
$lang['Allow_upload'] = "Dozvoli upload avatara";
$lang['Allow_upload_explain'] = "Omogu�ava se korisnicima da u data-bazu Va�eg foruma ubace sliku po �elji. Ovo mo�e dovesti do pove�anja dimenzija data-baze";
$lang['Max_filesize'] = "Maksimalna veli�ina file-a avatar";
$lang['Max_filesize_explain'] = "Maksimalna veli�ina pojedina�nog file-a kojeg korisnik mo�e ubaciti u data-bazu foruma";
$lang['Max_avatar_size'] = "Maksimalne dimenzije avatara";
$lang['Max_avatar_size_explain'] = "(visina x �irina u pixelima)";
$lang['Avatar_storage_path'] = "Pozicija pohranjivanja avatara";
$lang['Avatar_storage_path_explain'] = "Pozicija gdje se nalaze pohranjeni avatari u odnosu na root direktorij phpBB, npr. <i>images/avatars</i>";
$lang['Avatar_gallery_path'] = "Pozicija galerije avatara";
$lang['Avatar_gallery_path_explain'] = "Pozicija u kojoj administrator pohranjuje  avatare u odnosu na root direktorija phpBB, npr. images/avatars/gallery";

$lang['COPPA_settings'] = "Konfiguracija COPPA - saglasnost roditelja za u�e��e maloljetnika na forumu";
$lang['COPPA_fax'] = "Broj FAX-a na koji poslati saglasnost";
$lang['COPPA_mail'] = "Adresa na koju poslati saglasnost";
$lang['COPPA_mail_explain'] = "Po�tanska adresa administratora na koju se mo�e poslati saglasnost";

$lang['Email_settings'] = "Konfiguracija E-mail";
$lang['Admin_email'] = "E-mail Admnistratora";
$lang['Email_sig'] = "E-mail potpis";
$lang['Email_sig_explain'] = "Ovo �e biti potpis u svakom e-mail poslanom sa Foruma";
$lang['Use_SMTP'] = "Koristi Server SMTP za e-mail";
$lang['Use_SMTP_explain'] = "Odgovori <i>da</i> ukoliko �eli� ili mora� poslati e-mail posredstvom jednog posebnog servera umjesto lokalnog e-mail sistema";
$lang['SMTP_server'] = "Adresa Server SMTP";
$lang['SMTP_username'] = "SMTP Username";
$lang['SMTP_username_explain'] = "Unijeti SMTP username ukoliko to Va� smtp server zahtijeva";
$lang['SMTP_password'] = "SMTP Password";
$lang['SMTP_password_explain'] = "Unijeti SMTP password ukoliko to Va� smtp server zahtijeva";

$lang['Disable_privmsg'] = "Privatne poruke";
$lang['Inbox_limits'] = "Maksimalan broj primljenih poruka";
$lang['Sentbox_limits'] = "Maksimalan broj poslanih poruka";
$lang['Savebox_limits'] = "Maksimalan broj spa�enih poruka";

$lang['Cookie_settings'] = "Konfiguracija Cookie"; 
$lang['Cookie_settings_explain'] = "Ovdje je mogu�e konfigurirati cookie koji se �alju browseru korisnika. U mnogim slu�ajevima originalna  instalacijska konfiguracija je dovoljna. U slu�aju da �elite izvr�iti prepravke, u�inite to pa�ljivo po�to pogre�na konfiguracija mo�e sprije�iti pristup korisnika forumu.";
$lang['Cookie_name'] = "Naziv Cookie";
$lang['Cookie_domain'] = "Domain Cookie";
$lang['Cookie_path'] = "Pozicija Cookie (<i>path</i>)";
$lang['Session_length'] = "Du�ina trajanja pojedina�ne sesije [ u sekundama ]";
$lang['Cookie_secure'] = "Cookie secure [ http ]";
$lang['Cookie_secure_explain'] = "Ukoliko Va� server koristi SSL, osposobite ovu fukciju. U protivnom, ostavite neaktivirano.";


//
// Kontrola Foruma
//
$lang['Forum_admin'] = "Administracija Foruma";
$lang['Forum_admin_explain'] = "Ovdje mo�ete organizovati (dodati, modifikovati, obrisati, preurediti, sinhronizovati) Forum po kategorijama i glavnim temama rasprave";
$lang['Edit_forum'] = "Modifikuj temu";
$lang['Create_forum'] = "Kreiraj novu temu (Forum)";
$lang['Create_category'] = "Kreiraj novu kategoriju Foruma";
$lang['Remove'] = "Rimuovi";
$lang['Action'] = "Akcija";
$lang['Update_order'] = "A�uriraj red";
$lang['Config_updated'] = "Konfiguracija Foruma uspje�no a�urirana.";
$lang['Edit'] = "Ispraviti";
$lang['Delete'] = "Obrisati";
$lang['Move_up'] = "Pomjeri gore";
$lang['Move_down'] = "Pomjeri dole";
$lang['Resync'] = "Sinhronizovati";
$lang['No_mode'] = "Nikakav na�in odre�en";
$lang['Forum_edit_delete_explain'] = "Pomo�u ovog formulara mogu�e je personalizirati glavne opcije Foruma.";

$lang['Move_contents'] = "Pomjeri sve komentare u:";
$lang['Forum_delete'] = "Obri�i Forum";
$lang['Forum_delete_explain'] = "Pomo�u ovog instrumenta mogu�e je obrisati bilo koji Forum (temu) ili kategoriju te odlu�iti gdje pomjeriti njegov sadr�aj.";

$lang['Forum_settings'] = "Generalno pode�avanje Foruma";
$lang['Forum_name'] = "Ime Foruma";
$lang['Forum_desc'] = "Opis Foruma";
$lang['Forum_status'] = "Status Foruma";
$lang['Forum_pruning'] = "Automatsko brisanje";

$lang['prune_freq'] = "Prekontroli�i starost argumenata svakih";
$lang['prune_days'] = "Obri�i argumente na koje nije odgovoreno u roku od";
$lang['Set_prune_data'] = "Aktivirna je opcija za automatsko brisanje argumenata ali nije odre�eno koliko �esto. MolimVasda se vrati� nazad i da odredi� broj dana za kontrolu ili brisanje argumenta.";

$lang['Move_and_Delete'] = "Pomjeranje i brisanje";

$lang['Delete_all_posts'] = "Obri�i sve komentare";
$lang['Nowhere_to_move'] = "Ne pomjeriti nigdje";

$lang['Edit_Category'] = "Prepravka kategorije";
$lang['Edit_Category_explain'] = "Ovdje je mogu�e prepraviti naziv pojedine kategorije Foruma.";

$lang['Forums_updated'] = "Informacije vezane za kategorije i Forume su uspje�no a�urirane.";

$lang['Must_delete_forums'] = "Potrebno je obrisati sve Forume ove kategorije kako bi i sama kategorija mogla biti obrisana.";

$lang['Click_return_forumadmin'] = "Klikni %sovdje%s za povratak na panel <i>Administracija Foruma</i>";


//
// administracija smjehuljaka
//
$lang['smiley_title'] = "Smjehuljci";
$lang['smile_desc'] = "Ovdje je mogu�e dodati, obrisati i modifikovati tzv. <i>emoticons</i> pomo�u kojih se mogu ilustrovati razna raspolo�enja u komentarima i privatnim porukama.";

$lang['smiley_config'] = "Konfiguracija smjehuljaka";
$lang['smiley_code'] = "Kod smjehuljka";
$lang['smiley_url'] = "Slika smjehuljka (File)";
$lang['smiley_emot'] = "Emocija smjehuljka";
$lang['smile_add'] = "Dodaj jedan novi smjehuljak";
$lang['Smile'] = "Smjehuljak";
$lang['Emotion'] = "Emocija";

$lang['Select_pak'] = "Izaberi paket Smjehuljaka (.pak)";
$lang['replace_existing'] = "Zamijeni postoje�e Smjehuljke.";
$lang['keep_existing'] = "Zadr�i postoje�e Smjehuljke.";
$lang['smiley_import_inst'] = "Potrebno je dekompresovati paket (.pak) Smjehuljaka i pohraniti file-ove u odgovaraju�i direktorij za instalaciju. Zatim posredstvom ovog formulara izaberi paket koji �elite dodati.";
$lang['smiley_import'] = "Instaliranje novog paketa Smjehuljaka";
$lang['choose_smile_pak'] = "Izaberi paket smjehuljaka (file.<i><b>pak</b></i>)";
$lang['import'] = "Dodaj Smjeuljke";
$lang['smile_conflicts'] = "�ta u�initi u slu�aju konflikta?";
$lang['del_existing_smileys'] = "Obri�i postoje�e Smjehuljke prije dodavanja novih";
$lang['import_smile_pack'] = "Dodaj novi paket Smjehuljaka";
$lang['export_smile_pack'] = "Kreiraj paket Smjehuljaka";
$lang['export_smiles'] = "Za kreiranje novog paketa Smjehuljaka klikni %sovdje%s za downloada file-a <b>.pak</b> smjehuljaka. Imenuj file kako �eli� zadr�avaju�i sufiks <i><b>.pak</b></i>.Zatim kreiraj jedan zip file koji �e sadr�avati sli�ice smjehuljaka i kreirani konfiguracijski <b><i>.pak</i></b> file.";

$lang['smiley_add_success'] = "Smjehuljci su uspje�no dodani.";
$lang['smiley_edit_success'] = "Smjehuljci su uspje�no a�urirani.";
$lang['smiley_import_success'] = "Paket Smjehuljaka je uspje�no instaliran!";
$lang['smiley_del_success'] = "Smjehuljci su uspje�no obrisani.";
$lang['Click_return_smileadmin'] = "Klikni %sovdje%s za povratak na <i>Administracija Smjehuljaka</i>";


//
// administracija korisnika
//
$lang['User_admin'] = "Administracija korisnika";
$lang['User_admin_explain'] = "Pomo�u ovog kontrolnog panela mogu�e je kontrolisati i eventualno modifikovati postavke koje je svaki korisnik odredio u momentu svoje registracije na Forum. <i>Za odre�ivanje dozvola korisnicima molimo Vas da koristite panele za Administraciju dozvola i ovla�tenja korisnika i grupa korisnika.</i>";

$lang['Look_up_user'] = "Izaberi korisnika";

$lang['Admin_user_fail'] = "A�uriranje profila korisnika nije bilo mogu�e obaviti.";
$lang['Admin_user_updated'] = "Profil korisnika je uspje�no a�uriran.";
$lang['Click_return_useradmin'] = "Klikni %sovdje%s za povratak na Administracija korisnika";

$lang['User_delete'] = "Obri�i ovog korisnika";
$lang['User_delete_explain'] = "Klikni ovdje za brisanje korisnika. <b><span style=\"color:#FF0000\">PA�NJA! Ova operacija nije reverzibilna!</span></b> ";
$lang['User_deleted'] = "Korisnik je uspje�no obrisan";

$lang['User_status'] = "Korisnik je aktivan";
$lang['User_allowpm'] = "Mo�e slati privatne poruke";
$lang['User_allowavatar'] = "Mo�e koristiti Avatare";

$lang['Admin_avatar_explain'] = "Ovdje je mogu�e modifikovati ili obrisati aktuelni avatar korisnika.";

$lang['User_special'] = "Specijalne opcije - samo za administratora";
$lang['User_special_explain'] = "Ove opcije korisnik ne mo�e modifikovati. Ovdje mo�ete odrediti njihov status i ostale opcije kojima korisnici nemaju pristupa.";


//
// administracija grupa korisnika
//
$lang['Group_administration'] = "Administracija grupa korisnika";
$lang['Group_admin_explain'] = "Posredstvom ovog panela mogu�e je administrirati sve grupe korisnika prisutne na Forumu. Mogu�e je kreirati,  modifikovati ili obrisati postoje�e grupe, odrediti njihove Moderatore, regulisati status grupe (otvoren tip/zatvoren tip), odrediti ime i opis.";
$lang['Error_updating_groups'] = "Pojavila se gre�ka prilikom a�uriranja korisni�kih grupa.";
$lang['Updated_group'] = "Grupa korisnika je uspje�no a�urirana.";
$lang['Added_new_group'] = "Nova grupa korisnika je uspje�no kreirana.";
$lang['Deleted_group'] = "Grupa korisnika je uspje�no obrisana.";
$lang['New_group'] = "Kreiraj novu grupu";
$lang['Edit_group'] = "Modifikuj grupu";
$lang['group_name'] = "Ime grupe";
$lang['group_description'] = "Opis grupe";
$lang['group_moderator'] = "Moderator grupe";
$lang['group_status'] = "Status grupe";
$lang['group_open'] = "Otvorena grupa";
$lang['group_closed'] = "Zatvorena grupa";
$lang['group_hidden'] = "Skrivena grupa";
$lang['group_delete'] = "Obri�i grupu";
$lang['group_delete_check'] = "Obri�i ovu grupu";
$lang['submit_group_changes'] = "Potvrdi modifike";
$lang['reset_group_changes'] = "Anuliraj modifike";
$lang['No_group_name'] = "Potrebno je odrediti ime za ovu grupu.";
$lang['No_group_moderator'] = "Porebno je odrediti moderatora ove grupe.";
$lang['No_group_mode'] = "Potrebno je odrediti status grupe (<i>otvoren/zatvoren</i>)";
$lang['delete_group_moderator'] = "Obri�i aktuelnog moderatora grupe?";
$lang['delete_moderator_explain'] = "Potvrdi ovaj box ukoliko �eli� zamijeniti moderatora grupe. U suprotnom (ukoliko ne potvrdi�) korisnik �e postati normalan �lan grupe.";
$lang['Click_return_groupsadmin'] = "Klikni %sovdje%s za povratak na <i>Administracija grupa korisnik</i>a";
$lang['Select_group'] = "Izaberi grupu";
$lang['Look_up_group'] = "Prekontroli�i grupu";


//
// Administracija autoamtskog brisanja (PRUNE)
//
$lang['Forum_Prune'] = "Brisanje Forum�";
$lang['Forum_Prune_explain'] = "Posredstvom ovog instrumenta mogu�e je automatsko brisanje tema ukoliko na njih nije odgovoreno u toku nekog vremenskog roka. Ukoliko ne upi�ete nikakav broj, a opcija <i><b>Omogu�i brisanje tema</b></i> u <b><i>Osnovnim pode�avanjima</i></b> je aktivirana, bi�e eliminirane sve teme. Ne�e biti obrisane teme s aktivnom anketom, kao ni <i>Obavje�tenja</i>. Eliminaciju ovih tema je potrebno izvesti manualno. Preporu�ujemo da prije ove operacije, za svaki slucaj, obavite jedan Backup podataka data-baze po�to je eliminacija definitivna. ";
$lang['Do_Prune'] = "Obri�i";
$lang['All_Forums'] = "Sve Forume";
$lang['Prune_topics_not_posted'] = "Obri�i teme na koje nije odgovorenu u roku od ";
$lang['Topics_pruned'] = "Obrisane teme";
$lang['Posts_pruned'] = "Obrisani komentari";
$lang['Prune_success'] = "Brisanje Forum� je uspje�no obavljeno.";


//
//Cenzura rije�i
//
$lang['Words_title'] = "Cenzura rije�i";
$lang['Words_explain'] = "Posredstvom ovog instrumenta mogu�e je kreirati listu cenzurisanih rije�i koje se u svakom momentu mogu prepraviti ili obrisati. Forum �e automatski rije� zamijeniti onim �to Vi odredite. Pored toga, nije mogu�a registracija nadimka (<i>username</i>) ukoliko je rije� cenzurisana. Mogu�e je koristiti jolly (*) u polju gdje se upisuje rije�, npr. <b>dan*</b> �e cenzurisati rije�i sa prefiksom <i><b>dan</b></i> kao <b>dan</b>as, <b>dan</b>a�nji, <b>dan</b>a�nja i sli�no." ;
$lang['Word'] = "Rije�";
$lang['Edit_word_censor'] = "Modifikuj listu";
$lang['Replacement'] = "Zamjena";
$lang['Add_new_word'] = "Dodaj novu rije�";
$lang['Update_word'] = "A�uriraj listu";

$lang['Must_enter_word'] = "Mora� ubaciti rije� i njenu zamjenu";
$lang['No_word_selected'] = "Nijedna rije� nije izabrana za modifiku";

$lang['Word_updated'] = "Izabrana rije� je uspje�no a�urirana";
$lang['Word_added'] = "Rije� je uspje�no upisana u listu";
$lang['Word_removed'] = "Izabrana rije� je uspje�no izbrisana";

$lang['Click_return_wordadmin'] = "Klikni %sovdje%s za povratak na Cenzura rije�i";


//
// Masovni e-mail
//
$lang['Mass_email_explain'] = "Posredstvom ovog formulara mogu�e je poslati e-mail svim �lanovima Foruma ili �lanovima pojedinih grupa korisnika. Bi�e poslana jedna kopija na e-mail adresu administratora i <b>BCC</b> (<i>Blind Carbon Copy</i>) svim ostalim primaocima. Ukoliko �aljete e-mail jednoj velikoj grupi korisnika molimo Vas da budete strpljivi i sa�ekate potvrdu da je e-mail poslan. Ovaj proces je malo du�i i to je normalno kod slanja masovnog e-maila.";
$lang['Compose'] = "Napi�i e-mail"; 

$lang['Recipients'] = "Primaoci"; 
$lang['All_users'] = "Svim �lanovima";

$lang['Email_successfull'] = "E-mail je uspje�no poslan ";
$lang['Click_return_massemail'] = "Klikni %sovdje%s za povratak na E-mail Generali";


//
// administracija rangova korisnika
//
$lang['Ranks_title'] = "Administracija rangova";
$lang['Ranks_explain'] = "Pomo�u ovog instrumenta mogu�e je odrediti, modifikovati, obrisati, kontrolisati rangove u�esnika. Mogu�e je i kreiranje personaliziranih rangova koji se kasnije mogu aplicirati posredstvom instrumenta <i>Administracija korisnika</i>.";

$lang['Add_new_rank'] = "Dodaj novi rang";

$lang['Rank_title'] = "Rang";
$lang['Rank_special'] = "Specijalan status";
$lang['Rank_minimum'] = "Najmanji broj komentara";
$lang['Rank_maximum'] = "Najve�i broj komentara";
$lang['Rank_image'] = "Slika koja predstavlja rang (pozicija u odnosu na Forum)";
$lang['Rank_image_explain'] = "Upisati poziciju i naziv file-a dodijeljenog rangu.";

$lang['Must_select_rank'] = "Potrebno je odabrati jedan rang";
$lang['No_assigned_rank'] = "Nije dodan nikakav specijalan status";

$lang['Rank_updated'] = "Rang je uspje�no a�uriran";
$lang['Rank_added'] = "Rang je uspje�no kreiran";
$lang['Rank_removed'] = "Rang je uspje�no obrisan";

$lang['Click_return_rankadmin'] = "Klikni %sovdje%s za povratak na <i>Administracija rangova</i>";


//
// kontrola nick-ova
//
$lang['Disallow_control'] = "Rezervisanje nadimaka";
$lang['Disallow_explain'] = "Ovdje je mogu�e odrediti <i>nadimke</i> (username) pod kojima se niko ne�e mo�i registrovati. Mogu�e je koristiti jolly (*). Imajte na umu da nadimci koji su ve� registrovani ne mogu biti uba�eni u ovu listu. Ukoliko to �elite, potrebno je prvo izbrisati tog korisnika pa tek onda onda onemogu�iti kori�tenje doti�nog nadimka.";

$lang['Delete_disallow'] = "Obri�i";
$lang['Delete_disallow_title'] = "Omogu�i kori�tenje nadimka";
$lang['Delete_disallow_explain'] = "Mogu�e je omogu�iti kori�tenje nadimka biraju�i ga sa liste i potvrditi.";

$lang['Add_disallow'] = "Dodaj";
$lang['Add_disallow_title'] = "Rezervi�i jedan nadimak";
$lang['Add_disallow_explain'] = "Mogu�e je rezervisati jedan nadimak koriste�i jolly (*) umjesto karaktera.";

$lang['No_disallowed'] = "Nema rezervisanih nadimaka";

$lang['Disallowed_deleted'] = "Rezervisani nadimak se mo�e ponovo koristiti";
$lang['Disallow_successful'] = "Uspje�no je registrovan rezervisani nadimak";
$lang['Disallowed_already'] = "Ne mo�ete rezervisati �eljeni nadimak jer: <li></li>ve� je na listi<li></li> nalazi se u listi cenzurisanih rije�i <li></li> ve� je u upotrebi.";

$lang['Click_return_disallowadmin'] = "Klikni %sovdje%s za povratak na <i>Rezervisanje nadimaka</i>";


//
// Administracija stilova foruma
//
$lang['Styles_admin'] = "Administracija tema foruma";
$lang['Styles_explain'] = "Koriste�i ove opcije mogu�e je dodati, eliminisati, modifikovati razli�ite teme Foruma (grafi�ki prikaz).";
$lang['Styles_addnew_explain'] = "Na listi se nalaze sve teme Foruma koje imate na raspolaganju. Obratite pa�nju da se teme samo nalaze u svom folderu unutar Foruma (<i>template</i>) ali da nisu instalirane u data-bazu. Ukoliko �elite omogu�iti njihovo kori�tenje korisnicima Foruma neophodno je izvr�iti instalaciju.";

$lang['Select_template'] = "Izaberi temu";

$lang['Style'] = "Stil";
$lang['Template'] = "Model";
$lang['Install'] = "Instaliraj";
$lang['Download'] = "Download";

$lang['Edit_theme'] = "Modifikuj Temu";
$lang['Edit_theme_explain'] = "Pomo�u donjeg formulara mogu�e je modifikovati opcije izabrane teme. Prilikom upisivanja heksadecimalnih vrijednosti za boje ne treba ubacivati simbol <b>#</b>, npr. <b>CCCCCC</b> je OK, dok <b>#CCCCCC</b> nije.
";

$lang['Create_theme'] = "Kreiraj Temu";
$lang['Create_theme_explain'] = "Pomo�u ovog formulara mogu�e je kreirati novu temu za izabrani model. Prilikom upisivanja heksadecimalnih vrijednosti za boje ne treba ubacivati simbol <b>#</b>, npr. <b>CCCCCC</b> je OK, dok <b>#CCCCCC</b> nije.";

$lang['Export_themes'] = "Eksportuj Temu";
$lang['Export_explain'] = "Posredstvom ovog kontrolnog panela mogu�e je eksportovati podatke teme za izabrani model. Izaberi model iz donje liste i skripta foruma �e kreirati konfiguracijski file teme te ga pohraniti u direktorij sa ostalim temama (<i>template</i>). Ukoliko ne uspije sa pohranjivanjem program �e Vam ponuditi mogu�nost da ga download-ujete. Da bi pohranjivanje file-a bilo mogu�e neophodno je omogu�iti dozvolu za pisanje (na serveru) direktoriju <i>template</i>. Vi�e informacija mogu�e je na�i na zvani�nom site-u phpBB grupe.";

$lang['Theme_installed'] = "Izabrana tema je uspje�no instalirana";
$lang['Style_removed'] = "Izabrani stil je izbrisan iz data-baze. Za potpuno eliminsanje stila potrebno je obrisati i istoimeni direktorij koji se nalazi u direktoriju <i>template</i>.";
$lang['Theme_info_saved'] = "Podaci teme za izabrani model su uspje�no pohranjenje. Sada je potrebno podesiti dozvole za file <i>theme_info.cfg</i> (na serveru) samo za �itanje";
$lang['Theme_updated'] = "Izabrana tema je a�urirana. Sada je otrebno eksportovati podatke nove teme.";
$lang['Theme_created'] = "Tema je kreirana. Sada je potrebno eksportovati temu u konfiguracijski file teme kako bi je neko drugi mogao koristiti.";

$lang['Confirm_delete_style'] = "Sigurno �elite obrisati ovaj stil?";

$lang['Download_theme_cfg'] = "Proces eksporatcije ne uspijeva kreirati konfiguracijski file teme. Klikni na donje dugme za download file pomo�u tvog browser-a. Nakon download-a prebaci ga u direktorij koji sadr�i fileo-ove modela. Naknadno je mogu�e kompresovati file ukoliko �eli� da ga distribuira� ili ponovo koristi�.";
$lang['No_themes'] = "Model koji ste izabrali nema temu. Za kreiranje nove teme klikni na link <i>Kreiraj temu</i>";
$lang['No_template_dir'] = "Nije mogu�e otvoriti direktorij modela. Mo�da server nije u stanju da ga pro�ita ili mo�da ne postoji.";
$lang['Cannot_remove_style'] = "Nije mogu�e eliminisati stil po�to je u upotrebi kao zvani�an stil Foruma. Potrebo je promijeniti zvani�an stil Foruma (<i>Osnovna pode�avanja</i>) i tek onda eliminisati stil.";
$lang['Style_exists'] = "Potrebno je dati neko drugo ime stilu po�to ve� postoji.";

$lang['Click_return_styleadmin'] = "Klikni %sovdje%s za povratak na <i>Administracija stilova foruma</i>";

$lang['Theme_settings'] = "Pode�avanje Teme";
$lang['Theme_element'] = "Element Teme";
$lang['Simple_name'] = "Ime (pojednostavljno)";
$lang['Value'] = "Vrijednost";
$lang['Save_Settings'] = "Spasi";

$lang['Stylesheet'] = "CSS stil";
$lang['Background_image'] = "Slika pozadine";
$lang['Background_color'] = "Boja pozadine";
$lang['Theme_name'] = "Naziv Teme";
$lang['Link_color'] = "Link - boja";
$lang['Text_color'] = "Tekst - boja";
$lang['VLink_color'] = "Posje�en link - boja";
$lang['ALink_color'] = "Aktivan link - boja";
$lang['HLink_color'] = "Hover link - boja";
$lang['Tr_color1'] = "Boja kolone tabele 1";
$lang['Tr_color2'] = "Boja kolone tabele 2";
$lang['Tr_color3'] = "Boja kolone tabele 3";
$lang['Tr_class1'] = "Kolona tabele - klasa (class) 1";
$lang['Tr_class2'] = "Kolona tabele - klasa (class) 2";
$lang['Tr_class3'] = "Kolona tabele - klasa (class) 3";
$lang['Th_color1'] = "Boja naslova tabele 1";
$lang['Th_color2'] = "Boja naslova tabele 2";
$lang['Th_color3'] = "Boja naslova tabele 3";
$lang['Th_class1'] = "Naslov tabele - klasa (class) 1";
$lang['Th_class2'] = "Naslov tabele - klasa (class) 2";
$lang['Th_class3'] = "Naslov tabele - klasa (class) 3";
$lang['Td_color1'] = "Boja �elije tabele 1";
$lang['Td_color2'] = "Boja �elije tabele 2";
$lang['Td_color3'] = "Boja �elije tabele 3";
$lang['Td_class1'] = "�elija tabele - klasa (class) 1";
$lang['Td_class2'] = "�elija tabele - klasa (class) 2";
$lang['Td_class3'] = "�elija tabele - klasa (class) 3";
$lang['fontface1'] = "Naziv karaktera (font face) 1";
$lang['fontface2'] = "Naziv karaktera (font face) 2";
$lang['fontface3'] = "Naziv karaktera (font face) 3";
$lang['fontsize1'] = "Veli�ina karaktera 1";
$lang['fontsize2'] = "Veli�ina karaktera 2";
$lang['fontsize3'] = "Veli�ina karaktera 3";
$lang['fontcolor1'] = "Boja karaktera 1";
$lang['fontcolor2'] = "Boja karaktera 2";
$lang['fontcolor3'] = "Boja karaktera 3";
$lang['span_class1'] = "Klasa Span (span class) 1";
$lang['span_class2'] = "Klasa Span (span class) 2";
$lang['span_class3'] = "Klasa Span (span class) 3";
$lang['img_poll_size'] = "Veli�ina slike za glasanje [px]";
$lang['img_pm_size'] = "Veli�ina slike za status privatnih poruka [px]";


//
//Instalacijski proces
//
$lang['Welcome_install'] = "Instalacija phpBB Foruma - Dobro nam do�li!";
$lang['Initial_config'] = "Osnovna konfiguracija";
$lang['DB_config'] = "Konfiguracija Data-baze";
$lang['Admin_config'] = "Konfiguracija administracije";
$lang['continue_upgrade'] = "Nakon �to ste download-ovali i pohranili Va� konfiguracijski file u kompjuter, mo�ete kliknuti na dugme \"Nastavi A�uriranje verzije\" ovdje dole za a�uriranje verzije Foruma. Molimo Vas da sa�ekate sa upload-om konfiguracijskog file-a dok ne bude zavr�en proces a�uriranja verzije foruma.";
$lang['upgrade_submit'] = "Nastavi A�uriranje verzije";

$lang['Installer_Error'] = "Pojavila se gre�ka prilikom instalacije";
$lang['Previous_Install'] = "Prona�ena je jedna prethodna instalacija ";
$lang['Install_db_error'] = "Pojavila se gre�ka prilikom a�uriranja Data-baze";

$lang['Re_install'] = "Jedan prethodni instalacijski proces je jo� uvijek aktivan.<br /><br />Ukoliko �elite ponovo instalirati phpBB potrebno je to potvrditi pomo�u donjeg dugmeta. <b>Imajte na umu da �e ova operacija automatski obrisati sve postoje�e podatke te da nikakav automatski backup ne�e biti obavljen!</b>. Username i password administratora koji je prethodno kori�ten �e biti ponovo rikreiran dok nijedna prethodna opcija raznih pode�avanja ne�e biti sa�uvana. <br /><br />Razmislite dobro prije nego �to potvrdite ovaj proces i za svaki slu�aj napravite sami jedan backup podataka! ";

$lang['Inst_Step_0'] = "Zahvaljujemo Vam na povjerenju koje ste nam ukazali izborom na�eg software-a phpBB kao na�ina komuniciranja posjetilaca Va�e stranice. Za uspje�no izvo�enjee instalacijskog procesa neophodno je popuniti donji formular.Molimo Vas da obratite pa�nju kako je za funkcionisanje Foruma neophodno na raspolaganju imati jednu Data-bazu. Ukoliko instalirate Forum najednu Data-bazu koja koristi ODBC (npr. MS Access), potrebno je prethodno kreirati joj jedan DSN prije instalacije.";

$lang['Start_Install'] = "Zapo�ni instalaciju";
$lang['Finish_Install'] = "Zavr�i instalaciju";

$lang['Default_lang'] = "Zvani�ni jezik Foruma";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "Ime databaze";
$lang['DB_Username'] = "Username databaze";
$lang['DB_Password'] = "Password databaze";
$lang['Database'] = "Data-baza";
$lang['Install_lang'] = "Izaberi jezik za instalaciju";
$lang['dbms'] = "Tip Databaze";
$lang['Table_Prefix'] = "Prefiks za tabele Foruma unutar databaze";
$lang['Admin_Username'] = "Username Administratora";
$lang['Admin_Password'] = "Password Administratora";
$lang['Admin_Password_confirm'] = "Password Administratora [ potvrdi ]";

$lang['Inst_Step_2'] = "Izabrani administracijski Username je kreiran. U ovom momentu je obavljena bazna instalacija. Sada �e se pojaviti  kontorolni panel pomo�u kojeg je mogu�e administrirati novu instalaciju. Molimo Vas da provjerite detalje glavne konfiguracije i da izmjenite ono �to bude neophodno. Jo� jednom, zahvaljujemo na izboru phpBB Foruma.";

$lang['Unwriteable_config'] = "Momentalno nije mogu�e pisati na Va� konfiguracijski file. Mogu�e je download-ovati jednu kopiju konfiguracijskog file-a klikaju�i na donje dugme. Potrebno je zatim upload-ovati ovaj file u isti direktorij gdje je lociran phpBB. Nakon toga je potrebno otvoriti Administracijski panel koriste�i prethodno kreirani Username i Password Administratora (pojavi�e se jedan link pri dnu stranice - <i>Administracija Foruma</i>). Pomo�u administracijskog panela mogu�e je vr�iti razna pode�avanja Foruma. Jo� jednom, zahvaljujemo na izboru phpBB Foruma.";
$lang['Download_config'] = "Download konfiguracijskog file-a";

$lang['ftp_choose'] = "Izaberi metod download-a";
$lang['ftp_option'] = "<br />Po�to su FTP ekstenzije su dostupne u ovoj verziji PHP, mo�e Vam takodje prvo biti data mogu�nost direktnog download-a konfiguracjskog file putem ftp.</i></b>  ";
$lang['ftp_instructs'] = "Izabrali ste automatski transfer file-a posredstvom FTP na account koji sadr�i phpBB 2. Molimo Vas da upi�ete neophodne informacije kako bi se proces obavio. FTP path mora biti ta�an za pristup poziciji phpBB 2.<br /> (Napomena autora: kako italijanska verzija phpBB Foruma (koja je kori�tena kao glavni tekst za ovaj prevod) odudara od originalne engleske verzije, navodimo i originalan tekst: <i><b>You have chosen to ftp the file to the account containing phpBB 2 automatically.  Please enter the information below to facilitate this process. Note that the FTP path should be the exact path via ftp to your phpBB2 installation as if you were ftping to it using any normal client.</b></i> ";
$lang['ftp_info'] = "Unesi podatke za FTP";
$lang['Attempt_ftp'] = "Poku�aj transfera konfiguracijskog file-a putem FTP.";
$lang['Send_file'] = "Po�aljite mi konfiguracijski file i prebaci�u ga manualno putem FTP.";
$lang['ftp_path'] = "Path FTP za phpBB 2";
$lang['ftp_username'] = "Va� Username FTP";
$lang['ftp_password'] = "Va�a Password FTP";
$lang['Transfer_config'] = "Po�etak transfera";

$lang['Install'] = "Instaliraj";
$lang['Upgrade'] = "A�uriraj";
$lang['Install_Method'] = "Izaberi metod instalacije";
$lang['Install_No_Ext'] = "PHP konfiguracija Va�eg servera ne podr�ava tip data-baze koji ste izabrali.";
$lang['Install_No_PCRE'] = "phpBB2 zahtijeva <i>Perl-Compatible Regular Expressions Module</i> za php a koji Va�a PHP konfiguracija servera, �ini se, ne podr�ava!"; 

$lang['Status_locked'] = "Zatvoreno";
$lang['Status_unlocked'] = "Otvoreno";

$lang['No_group_action'] = "Nije izabrana nikava akcija";
$lang['No_update_ranks'] = "Rang korisnika je uspjesno obrisan. Imajte na umu da korisnici sa ovim rangom nisu azurirani te je potrebno manualno podesiti njihove korisnicke account";
$lang['NoFTP_config'] = "Pokusaj FTP transfera konfiguracijskog  file-a nije uspio. Molimo Vas da download-ujete konfiguracijski file ta da ga manualno (FTP) dignete ponovo na server." ;


//
// To bi bilo sve.
// Za sada.
// -------------------------------------------------

?>