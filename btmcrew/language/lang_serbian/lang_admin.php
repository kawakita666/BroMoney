<?php

/***************************************************************************
 *                            lang_admin.php [Serbian]
 *                              -------------------
 *     begin                : Monday Sep 30 2002 
 *     copyright            : (C) 2002 Simic Vladan
 *     email                : vlada@cybercom.co.yu
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2002/11/13 23:04:54 psotfx Exp $
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

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Generalno';
$lang['Users'] = 'Korisnici';
$lang['Groups'] = 'Grupe';
$lang['Forums'] = 'Forumi';
$lang['Styles'] = 'Stilovi';

$lang['Configuration'] = 'Konfiguracija';
$lang['Permissions'] = 'Dozvole';
$lang['Manage'] = 'Menad�ment';
$lang['Disallow'] = 'Zabranjena imena';
$lang['Prune'] = 'Upro��avanje';
$lang['Mass_Email'] = 'Masovni Email';
$lang['Ranks'] = 'Pozicije';
$lang['Smilies'] = 'Smajliji';
$lang['Ban_Management'] = 'Kontrola zabrana';
$lang['Word_Censor'] = 'Cenzurisane re�i';
$lang['Export'] = 'Izvoz';
$lang['Create_new'] = 'Napravi';
$lang['Add_new'] = 'Dodaj';
$lang['Backup_DB'] = 'Bakapuj bazu';
$lang['Restore_DB'] = 'Povrati bazu';


//
// Index
//
$lang['Admin'] = 'Administracija';
$lang['Not_admin'] = 'Nemate ovla��enja da administrirate board';
$lang['Welcome_phpBB'] = 'Dobrodo�li na phpBB';
$lang['Admin_intro'] = 'Hvala vam �to ste izabrali phpBB kao re�enje za va� forum. Na ovom ekranu imate brz pregled raznih statistika va�eg boarda. Na ovu stranicu se mo�ete vratiti klikom na <u>Admin Indeks</u> link na levom panelu. Za povratak na indeks boarda, kliknite na phpBB logo tako�e na levom panelu. Ostali linkovi na levom panelu dozvoli�e vam da kontroli�ete svaki aspekt va�eg foruma, a svaki ekran ima uputstvo kako da koristite alatke.';
$lang['Main_index'] = 'Indeks foruma';
$lang['Forum_stats'] = 'Statistike foruma';
$lang['Admin_Index'] = 'Admin index';
$lang['Preview_forum'] = 'Pregled foruma';

$lang['Click_return_admin_index'] = 'Kliknite %sovde%s za povratak na Admin Indeks';

$lang['Statistic'] = 'Statistika';
$lang['Value'] = 'Vrednost';
$lang['Number_posts'] = 'Broj poruka';
$lang['Posts_per_day'] = 'Broj poruka dnevno';
$lang['Number_topics'] = 'Broj tema';
$lang['Topics_per_day'] = 'Broj tema dnevno';
$lang['Number_users'] = 'Broj korisnika';
$lang['Users_per_day'] = 'Broj korisnika dnevno';
$lang['Board_started'] = 'Board je po�eo';
$lang['Avatar_dir_size'] = 'Veli�ina direktorijuma Avatar';
$lang['Database_size'] = 'Veli�ina baze';
$lang['Gzip_compression'] ='Gzip kompresija';
$lang['Not_available'] = 'Nije dostupno';

$lang['ON'] = 'Uklju�eno'; // This is for GZip compression
$lang['OFF'] = 'Isklju�eno'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Alati za bazu';

$lang['Restore'] = 'Povrati';
$lang['Backup'] = 'Bekapuj';
$lang['Restore_explain'] = 'Ovim �ete izvr�iti potpun povra�aj svih phpBB tabela iz snimljnog fajla. Ako to va� server podr�ava mo�ete poslati gzip kompesovani tekst fajl koji �e biti automatski dekompresovan. <b>UPOZORENJE:</b> Ovim �ete prepisati postoje�e podatke. Proces mo�e potrajati dugo pa vas molimo da ostanete na ovoj stranici dok se operacija ne zavr�i.';
$lang['Backup_explain'] = 'Ovde mo�ete bekapovati sve va�e phpBB podatke. Ako imate bilo kakve dodatne tabele u istoj bazi sa phpBB koje biste �eleli da bekapujete, molimo vas da unesete njihova imena odvojena zarezima u polje Dodatne tabele ispod. Ako to va� server podr�ava mo�ete koristiti gzip kompresiju da biste smanjili veli�inu fajla pre downloada.';

$lang['Backup_options'] = 'Opcije za bekapovanje';
$lang['Start_backup'] = 'Startuj Bekap';
$lang['Full_backup'] = 'Potpun bekap';
$lang['Structure_backup'] = 'Bekapuj samo strukturu';
$lang['Data_backup'] = 'Bekapuj samo podatke';
$lang['Additional_tables'] = 'Dodatne tabele';
$lang['Gzip_compress'] = 'Gzip kopresovan fajl';
$lang['Select_file'] = 'Izaberite fajl';
$lang['Start_Restore'] = 'Startuj povratak';

$lang['Restore_success'] = 'Baza je uspe�no povra�ena.<br /><br />Va� board bi trebalo da je u stanju u kakvom je bio kada je napravljen bekap.';
$lang['Backup_download'] = 'Download �e po�eti brzo - molimo vas da sa�ekate da po�ne';
$lang['Backups_not_supported'] = 'Izvinjavamo se ali bekap baze trenutno nije podr�an za va� sistem baze.';

$lang['Restore_Error_uploading'] = 'Gre�ka pri slanju bekap fajla';
$lang['Restore_Error_filename'] = 'Problem sa imenom fajla, probajte neki drugi';
$lang['Restore_Error_decompress'] = 'Ne mogu da dekompresujem gzip fajl, molim vas da po�aljete klasi�nu tekst verziju';
$lang['Restore_Error_no_file'] = 'Nijedan fajl nije poslat';


//
// Auth pages
//
$lang['Select_a_User'] = 'Izaberi korisnika';
$lang['Select_a_Group'] = 'Izaberi grupu';
$lang['Select_a_Forum'] = 'Izaberi forum';
$lang['Auth_Control_User'] = 'Kontrola dozvola korisnika'; 
$lang['Auth_Control_Group'] = 'Kontrola dozvola grupa'; 
$lang['Auth_Control_Forum'] = 'Kontrola dozvola foruma'; 
$lang['Look_up_User'] = 'Potra�i korisnika'; 
$lang['Look_up_Group'] = 'Potra�i grupu'; 
$lang['Look_up_Forum'] = 'Potra�i forum'; 

$lang['Group_auth_explain'] = 'Ovde mo�ete izmeniti dozvole i ure�ivati status dodeljen svakoj grupi. Ne zaboravite da kad menjate dozvole grupama individualne dozvole korisnika jo� uvek omogu�uju korisniku ulaz na forume itd. Ako se to desi bi�ete upozoreni u svakom slu�aju.';
$lang['User_auth_explain'] = 'Ovde mo�ete izmeniti dozvole i ure�ivati status dodeljen svakom korisniku. Ne zaboravite da kad menjate dozvole korisnicima individualne dozvole grupama jo� uvek omogu�uju korisniku ulaz na forume itd. U tom slu�aju bi�ete upozoreni.';
$lang['Forum_auth_explain'] = 'Ovde mo�ete izmeniti nivoe pristupa svakom forumu. Imate i upro��en i pro�ireni metod, s tim da pro�ireni metod nudi ve�u kontrolu svake operacije na forumu. Zapamtite da �ete promenom livoa pristupa forumima odrediti koji korisnici mogu da izvr�e razne operacije sa njima.';

$lang['Simple_mode'] = 'Upro��en mod';
$lang['Advanced_mode'] = 'Pro�ireni mod';
$lang['Moderator_status'] = 'Status urednika';

$lang['Allowed_Access'] = 'Dozvoljen pristup';
$lang['Disallowed_Access'] = 'Zabranjen pristup';
$lang['Is_Moderator'] = 'Urednik';
$lang['Not_Moderator'] = 'Nije urednik';

$lang['Conflict_warning'] = 'Upozorenje o konfliktu dozvola';
$lang['Conflict_access_userauth'] = 'Ovaj korisnik ima pristupna prava u ovom forumu preko �lanstva u grupi. Mo�da �ete �eleti da izmenite dozvole grupa ili da izbacite korisnika iz grupe da bi mu u potpunosti ukinuli prava na pristup. Garantovana prava grupe (uklju�uju�i i ume�ane forume) su prikazana ispod.';
$lang['Conflict_mod_userauth'] = 'Ovaj korisnik ima pristupna prava urednika u ovom forumu preko �lanstva u grupi. Mo�da �ete �eleti da izmenite dozvole grupa ili da izbacite korisnika iz grupe da bi mu u potpunosti ukinuli prava na uredni�ki pristup. Garantovana prava grupe (uklju�uju�i i ume�ane forume) su prikazana ispod.';

$lang['Conflict_access_groupauth'] = 'Slede�i korisnik (ili korisnici) jo� uvek imaju pravo pristupa na ovaj forum putem korisni�kih dozvola. Mo�da �ete �eleti da izmenite dozvole korisnika da bi mu u potpunosti ukinuli prava na pristup. Garantovana prava korisnika (uklju�uju�i i ume�ane forume) su prikazana ispod.';
$lang['Conflict_mod_groupauth'] = 'Slede�i korisnik (ili korisnici) jo� uvek imaju pravo uredni�kog pristupa na ovaj forum putem korisni�kih dozvola. Mo�da �ete �eleti da izmenite dozvole korisnika da bi mu u potpunosti ukinuli uredni�ka prava. Garantovana prava korisnika (uklju�uju�i i ume�ane forume) su prikazana ispod.';

$lang['Public'] = 'Javni';
$lang['Private'] = 'Privatni';
$lang['Registered'] = 'Registrovani';
$lang['Administrators'] = 'Administratori';
$lang['Hidden'] = 'Skriveni';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'SVI';
$lang['Forum_REG'] = 'REGIISTROVANI';
$lang['Forum_PRIVATE'] = 'PRIVATNI';
$lang['Forum_MOD'] = 'MODERATORI';
$lang['Forum_ADMIN'] = 'ADMINISTRATORI';

$lang['View'] = 'Pogledaj';
$lang['Read'] = 'Pro�itaj';
$lang['Post'] = 'Po�alji';
$lang['Reply'] = 'Odgovori';
$lang['Edit'] = 'Izmeni';
$lang['Delete'] = 'Obri�i';
$lang['Sticky'] = 'Lepljiva';
$lang['Announce'] = 'Obave�tenje'; 
$lang['Vote'] = 'Glasaj';
$lang['Pollcreate'] = 'Napravi glasanje';

$lang['Permissions'] = 'Dozvole';
$lang['Simple_Permission'] = 'Prosta dozvola';

$lang['User_Level'] = 'Nivo korisnika'; 
$lang['Auth_User'] = 'Korisnik';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = '�lanstvo u grupi';
$lang['Usergroup_members'] = 'Ova grupa ima slede�e �lanove';

$lang['Forum_auth_updated'] = 'Dozvole foruma su izmenjene';
$lang['User_auth_updated'] = 'Dozvole korisnika su izmenjene';
$lang['Group_auth_updated'] = 'Dozvole grupa su izmenjene';

$lang['Auth_updated'] = 'Dozvole su izmenjene';
$lang['Click_return_userauth'] = 'Klikite %sovde%s za povratak na Dozvole korisnika';
$lang['Click_return_groupauth'] = 'Kliknite %sOvde%s za povratak na Dozvole grupa';
$lang['Click_return_forumauth'] = 'Kliknite %sovde%s za povratak na Dozvole foruma';


//
// Banning
//
$lang['Ban_control'] = 'Kontrola zabrane';
$lang['Ban_explain'] = 'Odavde mo�ete kontrolisati zabrane korisnicima. Mo�ete zabraniti pojedina�no ili zajedno pojedina�nog ili specifi�nog korisnika ili opseg IP adresa ili imena hostova. Ovi metodi spre�avaju korisnika da pristupi index stranici va�eg boarda. Da biste spre�ili korisnika da se registruje koriste�i drugo korisni�ko ime mo�ete odrediti zabranu putem email adrese. Znajte da blokiranjem email adrese ne�e spre�iti korisnika da se loguje ili �alje poruke na va� board, tako da bi trebalo da koristite jedno od prva dva metoda.';
$lang['Ban_explain_warn'] = 'Znajte da uno�enjem opsega IP adresa sve odrese od po�etne do krajnje �e biti dodate na listu blokiranih adresa. Poku�ajte da minimizujete broj dodatih adresa u bazu unose�i d�okera (*) gde god je to mogu�e. Ako stvarno morate blokirati opseg adresa gledajte da bude �to manja.';

$lang['Select_username'] = 'Izaberite korisni�ko imeme';
$lang['Select_ip'] = 'Izaberite IP';
$lang['Select_email'] = 'Izaberite email adresu';

$lang['Ban_username'] = 'Zabrani jednog ili vi�e korisnika';
$lang['Ban_username_explain'] = 'Mo�ete zabraniti vi�e korisnika u jednom prolazu koriste�i adekvatnu kombinaciju mi�a i tastature za va� kompjuter i browser.';

$lang['Ban_IP'] = 'Zabrani jednu ili vi�e IP adresa ili imena hostova';
$lang['IP_hostname'] = 'IP adrese ili ime hostova';
$lang['Ban_IP_explain'] = 'Da biste izabrali vi�e razli�itih IP-a ili imena hostova odvojite ih zarezima. Da bi ste odredili opseg IP adresa ovojite po�etnu i krajnju sa crticom (-), a za d�okera koristite *';

$lang['Ban_email'] = 'Zabrani jednu ili vi�e email adresa';
$lang['Ban_email_explain'] = 'Da biste iybrali vi�e od jedne email adrese odvojite ih zarezom. Za d�okera koristite *, na primer *@hotmail.com';

$lang['Unban_username'] = 'Ukloni zabranu za jednog ili vi�e korisnika';
$lang['Unban_username_explain'] = 'Mo�ete ukloniti zabranu vi�e korisnika u jednom prolazu koriste�i adekvatnu kombinaciju mi�a i tastature za va� kompjuter i browser';

$lang['Unban_IP'] = 'Ukloni zabranu za jednu ili vi�e IP adresa';
$lang['Unban_IP_explain'] = 'Mo�ete ukloniti zabranu vi�e IP adresa u jednom prolazu koriste�i adekvatnu kombinaciju mi�a i tastature za va� kompjuter i browser';

$lang['Unban_email'] = 'Ukloni zabranu za jednu ili vi�e email adresa';
$lang['Unban_email_explain'] = 'Mo�ete ukloniti zabranu vi�e email adresa u jednom prolazu koriste�i adekvatnu kombinaciju mi�a i tastature za va� kompjuter i browser';

$lang['No_banned_users'] = 'Nema zabranjenih korisnika';
$lang['No_banned_ip'] = 'Nema zabranjenih  IP adresa';
$lang['No_banned_email'] = 'Nema zabranjenih email adresa';

$lang['Ban_update_sucessful'] = 'Lista zabrana je uspe�no osve�ena';
$lang['Click_return_banadmin'] = 'Kliknite %sovde%s za povratak na Kontrolu zabrana';


//
// Configuration
//
$lang['General_Config'] = 'Generalna konfiguracija';
$lang['Config_explain'] = 'Forma ispod omogu�i�e vam da menjate sve generalne opcije boarda. Za konfiguracije korisnika i foruma koristite linkove na panelu sa leve strane.';

$lang['Click_return_config'] = 'Kliknite %sovde%s za povratak na Generalnu konfiguraciju';

$lang['General_settings'] = 'Generalna pode�avanja boarda';
$lang['Server_name'] = 'Naziv domena';
$lang['Server_name_explain'] = 'Naziv domena sa koga se pokre�e ovaj board';
$lang['Script_path'] = 'Putanja do skripta';
$lang['Script_path_explain'] = 'Putanja gde je phpBB2 lociran relativno od naziva domena';
$lang['Server_port'] = 'Port servera';
$lang['Server_port_explain'] = 'Port na kome radi va� server, obi�no 80, promenite samo ako je druga�ije';
$lang['Site_name'] = 'Naziv sajta';
$lang['Site_desc'] = 'Opis sajta';
$lang['Board_disable'] = 'Isklju�i board';
$lang['Board_disable_explain'] = 'Board ne�e biti dostupan korisnicima. Nemojte se odjavljivati kada isklju�ujete board, jer ne�ete biti u mogu�nosti da se ponovo prijavite!';
$lang['Acct_activation'] = 'Omogu�i aktivaciju naloga';
$lang['Acc_None'] = 'Bez aktivacije'; // These three entries are the type of activation
$lang['Acc_User'] = 'Korisnik';
$lang['Acc_Admin'] = 'Administrator';

$lang['Abilities_settings'] = 'Osnovna pode�avanja za korisnika i forum';
$lang['Max_poll_options'] = 'Maksimalni broj opcija za glasanje';
$lang['Flood_Interval'] = 'Interval flodovanja';
$lang['Flood_Interval_explain'] = 'Broj sekundi koje korisnik mora sa�ekati izme�u dve poruke'; 
$lang['Board_email_form'] = 'Korisnik pi�e putem boarda';
$lang['Board_email_form_explain'] = 'Mogu�nost da korisnici jedni drugima �alju email putem boarda';
$lang['Topics_per_page'] = 'Tema po stranici';
$lang['Posts_per_page'] = 'Poruka po stranici';
$lang['Hot_threshold'] = 'koliko poruka �uvati kao poularne';
$lang['Default_style'] = 'Podrazumevani stil';
$lang['Override_style'] = 'Pregazi korisni�ki stil';
$lang['Override_style_explain'] = 'Zamenjuje korisni�ki definisan stil sa podrazumevanim';
$lang['Default_language'] = 'Podrazumevani jezik';
$lang['Date_format'] = 'Format datuma';
$lang['System_timezone'] = 'Sistemska vremenska zona';
$lang['Enable_gzip'] = 'Omogu�i GZip kompresiju';
$lang['Enable_prune'] = 'Omogu�i smanjivanje foruma';
$lang['Allow_HTML'] = 'Dozvoli HTML';
$lang['Allow_BBCode'] = 'Dozvoli BBCode';
$lang['Allowed_tags'] = 'Dozvoljeni HTML tagovi';
$lang['Allowed_tags_explain'] = 'Odvojite tagove zarezima';
$lang['Allow_smilies'] = 'Dozvoli smajlije';
$lang['Smilies_path'] = 'Putanja za sme�tanje smajlija';
$lang['Smilies_path_explain'] = 'Putanja ispod va�eg phpBB root direktorijuma, npr. images/smiles';
$lang['Allow_sig'] = 'Dozvoli potpise';
$lang['Max_sig_length'] = 'Maksimalna du�ina potpisa';
$lang['Max_sig_length_explain'] = 'Maksimalni broj karaktera i u potisu korisnika';
$lang['Allow_name_change'] = 'Dozvoli promene korisni�kog imena';

$lang['Avatar_settings'] = 'Pode�avanje avatara';
$lang['Allow_local'] = 'Omogu�i galeriju avatara';
$lang['Allow_remote'] = 'Omogu�i udaljene avatare';
$lang['Allow_remote_explain'] = 'Avatari linkovani sa drugog web sajta';
$lang['Allow_upload'] = 'Omogu�i slanje avatara';
$lang['Max_filesize'] = 'Maksimalna veli�ina fajla za avatar';
$lang['Max_filesize_explain'] = 'Za poslate avatare';
$lang['Max_avatar_size'] = 'Maksimalne dimenzije avatara';
$lang['Max_avatar_size_explain'] = '(Visina x �irina u pikselima)';
$lang['Avatar_storage_path'] = 'Putanja za sme�tanje avatara';
$lang['Avatar_storage_path_explain'] = 'Putanja ispod va�eg phpBB root direktorijuma, npr. images/avatars';
$lang['Avatar_gallery_path'] = 'Putanja do avatar galerije';
$lang['Avatar_gallery_path_explain'] = 'Putanja ispod va�eg phpBB root direktorijuma za unapred u�itane slike, npr. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA pode�avanja';
$lang['COPPA_fax'] = 'COPPA Broj faksa';
$lang['COPPA_mail'] = 'COPPA po�tanska adresa';
$lang['COPPA_mail_explain'] = 'Ovo je po�tanska adresa gde �e roditelji slati COPPA registracione formulare';

$lang['Email_settings'] = 'Email pode�avanja';
$lang['Admin_email'] = 'Administratorova email adresa';
$lang['Email_sig'] = 'Email potpis';
$lang['Email_sig_explain'] = 'Ovaj tekst �e biti prika�en na sve emailove koje board po�alje';
$lang['Use_SMTP'] = 'Koristi SMTP server za email';
$lang['Use_SMTP_explain'] = 'Izaberite Da ukoliko �elite da �aljete poruke putem odre�enog servera umesto lokalne funkcije';
$lang['SMTP_server'] = 'Adresa SMTP servera';
$lang['SMTP_username'] = 'SMTP korisni�ko ime';
$lang['SMTP_username_explain'] = 'Korisni�ko ime unesite samo ako to va� SMTP server zahteva';
$lang['SMTP_password'] = 'SMTP �ifra';
$lang['SMTP_password_explain'] = '�ifru unesite samo ako to va� SMTP server zahteva';

$lang['Disable_privmsg'] = 'Privatne poruke';
$lang['Inbox_limits'] = 'Maksimalo poruka u Sandu�etu';
$lang['Sentbox_limits'] = 'Maksimalno poruka u Sandu�etu za slanje';
$lang['Savebox_limits'] = 'Maksimalno poruka u Snimljeno';

$lang['Cookie_settings'] = 'Pode�avanje kola�i�a'; 
$lang['Cookie_settings_explain'] = 'Ovi detalji defini�u kako se kola�i�i �alju va�im korisnicima. Naj�e��e je podrazumevana vrednost dovoljna ali ako trebate da ne�to menjate radite to pa�ljivo, jer neta�no pode�avanje mo�e spre�iti korisnike da se prijave';
$lang['Cookie_domain'] = 'Domen kola�i�a';
$lang['Cookie_name'] = 'Ime kola�i�a';
$lang['Cookie_path'] = 'Putanja kola�i�a';
$lang['Cookie_secure'] = 'Bezbednost kola�i�a';
$lang['Cookie_secure_explain'] = 'Ako va� server radi preko SSL-a podesite ovu opciju na Dozvoljeno a u suprotnom ostavite kao zabranjeno';
$lang['Session_length'] = 'Du�ina sesije [ sekunde ]';


//
// Forum Management
//
$lang['Forum_admin'] = 'Administracija foruma';
$lang['Forum_admin_explain'] = 'Odavde mo�ete dodati, brisati, izmeniti, preurediti i resinhronizovati kategorije i forume';
$lang['Edit_forum'] = 'Izmeni forum';
$lang['Create_forum'] = 'Napravi nov forum';
$lang['Create_category'] = 'Napravi novu kategoriju';
$lang['Remove'] = 'Ukloni';
$lang['Action'] = 'Akcija';
$lang['Update_order'] = 'Osve�i redosled';
$lang['Config_updated'] = 'Konfiguracija foruma je uspe�no osve�ena';
$lang['Edit'] = 'Izmeni';
$lang['Delete'] = 'Izbri�i';
$lang['Move_up'] = 'Pomeri gore';
$lang['Move_down'] = 'Pomeri dole';
$lang['Resync'] = 'Ponovo sinhronizuj';
$lang['No_mode'] = 'Nije pode�en mod';
$lang['Forum_edit_delete_explain'] = 'Forma ispod �e vam omogu�iti da izmenite sve generalne opcije foruma. Za konfiguracije korisnika i foruma koristite linkove na levom panelu';

$lang['Move_contents'] = 'Pomeri sav sadr�aj';
$lang['Forum_delete'] = 'Izbri�i forum';
$lang['Forum_delete_explain'] = 'Forma ispod �e vam omogu�iti da izbri�ete forum (ili kategoriju) i odlu�ite gde ho�ete da smestite sve teme (ili forume) koji su sadr�ani.';

$lang['Status_locked'] = 'Zaklju�an';
$lang['Status_unlocked'] = 'Otklju�an';
$lang['Forum_settings'] = 'Generalna pode�avanja foruma';
$lang['Forum_name'] = 'Naziv foruma';
$lang['Forum_desc'] = 'Opis';
$lang['Forum_status'] = 'Status foruma';
$lang['Forum_pruning'] = 'Automatsko smanjivanje';

$lang['prune_freq'] = 'Proveri starost teme svakih';
$lang['prune_days'] = 'Pomeri teme u kojima nije pisano';
$lang['Set_prune_data'] = 'Uklju�ili ste automatsko smanjivanje za ovaj forum ali niste podesili u�estalost ili broj dana do smanjivanja. Molim vas da se vratite i to u�inite';

$lang['Move_and_Delete'] = 'Pomeri i izbri�i';

$lang['Delete_all_posts'] = 'Izbri�i sve poruke';
$lang['Nowhere_to_move'] = 'Tako�e nemam kuda da pomerim';

$lang['Edit_Category'] = 'Izmeni kategoriju';
$lang['Edit_Category_explain'] = 'Koristite ovu formu da biste izmenili naziv kategorije.';

$lang['Forums_updated'] = 'Informacije o forumu i kategoriji su uspe�no osve�ene';

$lang['Must_delete_forums'] = 'Mora�ete da obri�ete sve forume pre nogo �to obri�ete kategoriju';

$lang['Click_return_forumadmin'] = 'Kliknite %sovde%s za povratak na Administraciju foruma';


//
// Smiley Management
//
$lang['smiley_title'] = 'Editovanje smajlija';
$lang['smile_desc'] = 'Odavde mo�ete dodati, izbrisati i editovati emotivne ikonice ili smajlije koje va�i korisnici mogu da koriste u porukama kao i privatnim porukama.';

$lang['smiley_config'] = 'Konfiguracija smajlija';
$lang['smiley_code'] = 'Kod smajlija';
$lang['smiley_url'] = 'Smajli fajl';
$lang['smiley_emot'] = 'Smajli emocija';
$lang['smile_add'] = 'Dodaj nov smajli';
$lang['Smile'] = 'Smajli';
$lang['Emotion'] = 'Emocija';

$lang['Select_pak'] = 'Izaberite paket (.pak) fajl';
$lang['replace_existing'] = 'Zameni postoje�i smajli';
$lang['keep_existing'] = 'Sa�uvaj postoje�i smajli';
$lang['smiley_import_inst'] = 'Trebalo bi da raspakujete pakovanje smajlija i po�aljete sve fajlove u adekvatni smajli direktorijum za va�u instalaciju.  Onda izaberite ta�nu informaciju u ovoj formi da bi ste ubacili pakovanje.';
$lang['smiley_import'] = 'Uvezi pakovanje smajlija';
$lang['choose_smile_pak'] = 'Izaberite smajli paket .pak fajl';
$lang['import'] = 'Uvezi smajlije';
$lang['smile_conflicts'] = '�ta bi trebalo uraditi u slu�aju konflikta';
$lang['del_existing_smileys'] = 'Obri�i postoje�e smajlije pre uvoza';
$lang['import_smile_pack'] = 'Uvezi pakovanje smajlija';
$lang['export_smile_pack'] = 'Napravi paket smajlija';
$lang['export_smiles'] = 'Da bi ste napravili paket smajlija od trenutno instaliranih, kliknite %sovde%s za download smiles.pak fajla. Nazovite adekvatno ovaj fajl paze�i da sa�uvate .pak fajl ekstenziju.  Onda napravite zip fajl koji sadr�i sve va�e smajlije plus ovaj .pak konfiguracioni fajl.';

$lang['smiley_add_success'] = 'Smajli je uspe�no dodat';
$lang['smiley_edit_success'] = 'Smajli je uspe�no osve�en';
$lang['smiley_import_success'] = 'Smajli pakovanje je uspe�no uvezeno!';
$lang['smiley_del_success'] = 'Smajli je uspe�no izbrisan';
$lang['Click_return_smileadmin'] = 'Kliknite %sovde%s za povratak na Administraciju smajlija';


//
// User Management
//
$lang['User_admin'] = 'Administracija korisnika';
$lang['User_admin_explain'] = 'Ovde mo�ete izmeniti informacije o korisnicima i odre�ene specifi�ne opcije. Da biste izmenili dozvole korisnika i grupa koristite sistem dozvola za korisnike i grupe.';

$lang['Look_up_user'] = 'Prona�i korisnika';

$lang['Admin_user_fail'] = 'Ne mogu osve�iti korisnikov-e profile.';
$lang['Admin_user_updated'] = 'Profil korisnika je uspe�no osve�en.';
$lang['Click_return_useradmin'] = 'Kliknite %sovde%s za povratak na Administraciju korisnika';

$lang['User_delete'] = 'Obri�i ovog korisnika';
$lang['User_delete_explain'] = 'Kliknite ovde da obri�ete ovog korisnika, ova operacija se ne mo�e povratiti.';
$lang['User_deleted'] = 'Korisnik je uspe�no obrisan.';

$lang['User_status'] = 'Korisnik je aktivan';
$lang['User_allowpm'] = 'Mo�e slati privattne poruke';
$lang['User_allowavatar'] = 'Mo�e prikazati avatar';

$lang['Admin_avatar_explain'] = 'Ovde mo�ete pogledati i obrisati korisnikov-e trenutni avatar.';

$lang['User_special'] = 'Specijalna polja samo za administratore';
$lang['User_special_explain'] = 'Ova polja ne mogu menjati korisnici. Ovde mo�ete podesiti njihov status i druge opcije kojima korisnici nemaju pristup.';


//
// Group Management
//
$lang['Group_administration'] = 'Administracija grupa';
$lang['Group_admin_explain'] = 'Sa ovog panela mo�ete administrirati sve va�e korisni�ke grupe, mo�ete: brisati, praviti i menjati postoje�e grupe. Mo�ete izabrati urednike, menjati status grupe (otvorena/zatvorena) i podesiti ime grupe i opis';
$lang['Error_updating_groups'] = 'Gre�ka pri osve�avanju grupa';
$lang['Updated_group'] = 'Grupa je uspe�no osve�ena';
$lang['Added_new_group'] = 'Nova grupa je uspe�no kreirana';
$lang['Deleted_group'] = 'Grupa je uspe�no obrisana';
$lang['New_group'] = 'Napravi novu grupu';
$lang['Edit_group'] = 'Izmeni grupu';
$lang['group_name'] = 'Naziv grupe';
$lang['group_description'] = 'Opis grupe';
$lang['group_moderator'] = 'Urednik grupe';
$lang['group_status'] = 'Status grupe';
$lang['group_open'] = 'Otvori grupu';
$lang['group_closed'] = 'Zatvorena grupa';
$lang['group_hidden'] = 'Skrivena grupa';
$lang['group_delete'] = 'Obri�i grupu';
$lang['group_delete_check'] = 'Obri�i ovu grupu';
$lang['submit_group_changes'] = 'Po�alji izmene';
$lang['reset_group_changes'] = 'Resetuj izmene';
$lang['No_group_name'] = 'Morate odrediti ime za ovu grupu';
$lang['No_group_moderator'] = 'Morate odrediti urednika za ovu grupu';
$lang['No_group_mode'] = 'Morate odrediti mod za ovu grupu, otvorena ili zatvorena';
$lang['No_group_action'] = 'Nije odre�ena akcija';
$lang['delete_group_moderator'] = 'Obrisati starog moderatora grupe?';
$lang['delete_moderator_explain'] = 'Ukoliko menjate urednika grupe, �tiklirajte ovu kutijicu da biste izbrisali starog moderatora iz grupe. U suprotnom, nemojte �tiklirati, i korisnik �e postati regularni �lan grupe.';
$lang['Click_return_groupsadmin'] = 'Kliknite %sovde%s za povratak na Administraciju grupa.';
$lang['Select_group'] = 'Izaberite grupu';
$lang['Look_up_group'] = 'Potra�i grupu';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Upro��avanje foruma';
$lang['Forum_Prune_explain'] = 'Ovim �ete izbrisati sve teme na koje nije odgovoreno za vreme (broj dana) koje ste izabrali. Ako ne izaberete broj sve teme �e biti izbrisane. Ne�e biti obrisane teme u kojima se glasa niti �e biti obrisana obave�tenja. Ove teme �ete morati da izbri�ete ru�no.';
$lang['Do_Prune'] = 'Pokreni upro��avanje';
$lang['All_Forums'] = 'Svi forumi';
$lang['Prune_topics_not_posted'] = 'Uprosti teme na koje nije odgovoreno u ovoliko dana';
$lang['Topics_pruned'] = 'Upro��ene teme';
$lang['Posts_pruned'] = 'Upro��ene poruke';
$lang['Prune_success'] = 'Upro��avanje foruma je uspe�no izvr�eno';


//
// Word censor
//
$lang['Words_title'] = 'Cenzurisane re�i';
$lang['Words_explain'] = 'Odavde mo�ete dodati, izmeniti i izbrisati re�i koje �e biti automatski cenzurisane na va�im forumima. Tako�e korisnici ne�e mo�i da se registruju sa korisni�kim imenom koje sadr�i ove re�i. D�okeri (*) su prihvatljivi u polju re�i, npr. *test* �e se poklopiti sa atestirano, test* �e se poklopiti sa testirano, *test �e se poklopiti sa atest.';
$lang['Word'] = 'Re�';
$lang['Edit_word_censor'] = 'Izmeni cenzuru re�i';
$lang['Replacement'] = 'Zamena';
$lang['Add_new_word'] = 'Dodaj novu re�';
$lang['Update_word'] = 'Osve�i cenzuru re�i';

$lang['Must_enter_word'] = 'Morate uneti re� i njenu zamenu';
$lang['No_word_selected'] = 'Nije izabrana re� za izmenu';

$lang['Word_updated'] = 'Cenzura za izabranu re� je uspe�no osve�ena';
$lang['Word_added'] = 'Cenzura re�u je uspe�no dodata';
$lang['Word_removed'] = 'Cenzura za izabranu re� je uspe�no izbrisana';

$lang['Click_return_wordadmin'] = 'Kliknite %sovde%s za povratak na Cenzurisane re�i';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Odavde mo�ete poslati email svim korisnicima, ili korisnicima iz specifi�ne grupe.  Da biste ovo uradili, email �e biti poslat na prilo�enu administrativnu adresu, sa blind carbon copijom poslatom svim primaocima. Ako �aljete email velikoj grupi ljudi molimo vas da budete strpljivi posle pritiska na dugme po�alji i nemojte zaustavljati stranicu na pola operacije. Normalono je da pri masovnom slanju emaila operacija traje dugo, i bi�ete obave�teni kada se izvr�i kompletan skript';
$lang['Compose'] = 'Napi�i'; 

$lang['Recipients'] = 'Primaoci'; 
$lang['All_users'] = 'Svi korisnici';

$lang['Email_successfull'] = 'Va�a poruka je poslata';
$lang['Click_return_massemail'] = 'Kliknite %sovde%s za povratak na Masovni email';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administracija pozicija';
$lang['Ranks_explain'] = 'Koriste�i ovu formu mo�ete dodati, izmeniti, pregledati i brisati pozicije. Tako�e mo�ete kreirati proizvoljne pozicije koje mogu biti primenjene na korisnika preko Administracije korisnika';

$lang['Add_new_rank'] = 'Dodaj novu poziciju';

$lang['Rank_title'] = 'Naziv pozicije';
$lang['Rank_special'] = 'Podesi specijalnu poziciju';
$lang['Rank_minimum'] = 'Minimum poruka';
$lang['Rank_maximum'] = 'Maksimum poruka';
$lang['Rank_image'] = 'Slika pozicije (relativna putanja od phpBB2 root-a)';
$lang['Rank_image_explain'] = 'Ovo koristite da biste definisali sli�icu koja asocira na poziciju';

$lang['Must_select_rank'] = 'Morate izabrati poziciju';
$lang['No_assigned_rank'] = 'Nije dodeljena specijalna pozicija';

$lang['Rank_updated'] = 'Pozicija je uspe�no osve�ena';
$lang['Rank_added'] = 'Pozicija je uspe�no dodata';
$lang['Rank_removed'] = 'Pozicija je uspe�no izbrisana';
$lang['No_update_ranks'] = 'Pozicija je uspe�no obrisana, mada korisni�ki nalozi koji koriste ovu poziciju nisu osve�eni. Mora�ete da ru�no resetujete poziciju takvih naloga';

$lang['Click_return_rankadmin'] = 'Kliknite %sovde%s za povratak na Administraciju pozicija';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Kontrola zabranjenih imena';
$lang['Disallow_explain'] = 'Odavde mo�ete kontrolisati korisni�ka imena koja se ne mogu koristiti. Zabranjena korisni�ka imena mogu da sadr�e d�okere *. Znajte da vam ne�e biti dozvoljeno da odredite bilo koje korisni�ko ime koje je ve� registrovano, pa �ete morati prvo da obri�ete to ime a tek onda ga zabranite';

$lang['Delete_disallow'] = 'Izbri�i';
$lang['Delete_disallow_title'] = 'Izbri�i zabranjeno korisni�ko ime';
$lang['Delete_disallow_explain'] = 'Mo�ete izbrisati zabranjeno korisni�ko ime tako �to �ete izabrati korisni�ko ime sa ove liste i kliknuti na dugme Izbri�i';

$lang['Add_disallow'] = 'Dodaj';
$lang['Add_disallow_title'] = 'Dodaj zabranjeno korisni�ko ime';
$lang['Add_disallow_explain'] = 'Mo�ete zabraniti korisni�ko ime koriste�i d�okera * kao zamenu za bilo koji karakter';

$lang['No_disallowed'] = 'Nema zabranjenih korisni�kih imena';

$lang['Disallowed_deleted'] = 'Zabranjeno korisni�ko ime je uspe�no izbrisano';
$lang['Disallow_successful'] = 'Zabranjeno korisni�ko ime je uspe�no dodato';
$lang['Disallowed_already'] = 'Ime koje ste uneli ne mo�e biti zabranjeno. Ve� postoji u listi, postoji u listi cenzurisanih re�i, ili to korisni�ko ime ve� postoji';

$lang['Click_return_disallowadmin'] = 'Kliknite %sovde%s za povratak na Kontrolu zabranjenih imena';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administracija stilova';
$lang['Styles_explain'] = 'Mo�ete dodati, izbrisati i upravljati stilovima (podlogama i temama) dostupnim va�im korisnicima';
$lang['Styles_addnew_explain'] = 'Slede�a lista sadr�i sve teme koje su dostupne za podloge koje trenutno imate. Stavke u listi jo� uvek nisu instalirane u phpBB bazu. Da biste instalirali temu jednostavno kliknite na link Install pored stavke';

$lang['Select_template'] = 'Izaberite podlogu';

$lang['Style'] = 'Stil';
$lang['Template'] = 'Podloga';
$lang['Install'] = 'Instiraj';
$lang['Download'] = 'Preuzmi';

$lang['Edit_theme'] = 'Izmeni temu';
$lang['Edit_theme_explain'] = 'U formi ispod mo�ete izmeniti pode�avanja za izabranu temu';

$lang['Create_theme'] = 'Napravi temu';
$lang['Create_theme_explain'] = 'Koristite donju formu da napravite novu temu za izabranu podlogu. Kada unosite boje (za koje koristite heksadecimalni oblik) ne smete uneti prefiks #, npr. CCCCCC je ispravno, a #CCCCCC nije';

$lang['Export_themes'] = 'Izvrzi teme';
$lang['Export_explain'] = 'U ovom panelu mo�i �ete da izvezete podatke za selektovanu podlogu. Izaberite podlogu iz liste ispod i skript �e napraviti konfiguracioni fajl za temu i poku�ati da ga snimi u izabrani direktorijum podloge. Ukoliko nije u mogu�nosti da snimi fajl ponudi�e vam opciju da ga preuzmete. Da bi skript bio u mogu�nosti da snimi fajl morate podesiti dozvoli za pisanje webserveru za izabrani direktorijum sa podlogama. Za vi�e informacija o ovome pogledajte phpBB 2 users guide.';

$lang['Theme_installed'] = 'Izabrana tema je uspe�no instalirana';
$lang['Style_removed'] = 'Izabrani stil je izbrisan iz baze. Da biste u potpunosti izbrisali stil sa va�eg sistema morate izbrisati odgovaraju�i stil iz va�eg direktorijuma sa podlogama.';
$lang['Theme_info_saved'] = 'Informacija o temi koju ste izabrali je snimljena. Sada bi trebalo da vratite dozvolu fajlu theme_info.cfg (i ako je to mogu�e i izabranom direktorijumu sa podlogama) na read-only';
$lang['Theme_updated'] = 'Izabrana tema je osve�ena. Sada bi trebalo da izvezete pode�avanja za novu temu';
$lang['Theme_created'] = 'Tema je napravljena. Trebalo bi da izvezete temu u konfiguracioni fajl teme zbog bezbednog �uvanja ili upotrebe na nekom drugom mestu';

$lang['Confirm_delete_style'] = 'Da li ste sigurni da �elite da obri�ete ovaj stil';

$lang['Download_theme_cfg'] = 'Izvoznik nije mogao da snimi informacioni fajl teme. Kliknite na dugme ispod da bi ste preuzeli fajl sa va�im browserom. Kada ga budete preuzeli mo�etee ga prebaciti u direktorijum koji sadr�i fajlove podloge. Tada mo�ete spakovati fajlove za distribuciju ili koristiti gde god po�elite';
$lang['No_themes'] = 'Podloga koju ste izabrali nema prika�enih tema. Da napravite novu temu kliknite na link Napravi na panelu sa leve strane';
$lang['No_template_dir'] = 'Ne mogu da otvorim direktorijum da temema. Mo�da je ne�itljiv web serveru ili ne postoji';
$lang['Cannot_remove_style'] = 'Ne mo�ete izbrisati izabrani stil jer je trenutno podrazumevan za forum. Molim vas da promenite podrazumevani stil i poku�ate ponovo.';
$lang['Style_exists'] = 'Ime stila koga ste izabrali ve� postoji, molim vas da se vratite i izaberete drugo ime.';

$lang['Click_return_styleadmin'] = 'Kliknite %sovde%s za povratak na Administraciju stilova';

$lang['Theme_settings'] = 'Pode�avanje teme';
$lang['Theme_element'] = 'Element teme';
$lang['Simple_name'] = 'Jednostavan naziv';
$lang['Value'] = 'Vrednost';
$lang['Save_Settings'] = 'Snimi pode�avanja';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Pozadinska slika';
$lang['Background_color'] = 'Boja pozadine';
$lang['Theme_name'] = 'Naziv teme';
$lang['Link_color'] = 'Boja linka';
$lang['Text_color'] = 'Boja teksta';
$lang['VLink_color'] = 'Boja pose�enog linka';
$lang['ALink_color'] = 'Boja aktivnog linka';
$lang['HLink_color'] = 'Boja linka kada je mi� iznad';
$lang['Tr_color1'] = 'Prva boja reda tabele';
$lang['Tr_color2'] = 'Druga boja reda tabele';
$lang['Tr_color3'] = 'Tre�a boja reda tabele';
$lang['Tr_class1'] = 'Prva klasa reda tabele';
$lang['Tr_class2'] = 'Druga klasa reda tabele';
$lang['Tr_class3'] = 'Tre�a klasa reda tabele';
$lang['Th_color1'] = 'Prva boja zaglavlja tabele';
$lang['Th_color2'] = 'Druga boja zaglavlja tabele';
$lang['Th_color3'] = 'Tre�a boja zaglavlja tabele';
$lang['Th_class1'] = 'Prva klasa zaglavlja tabele';
$lang['Th_class2'] = 'Druga klasa zaglavlja tabele';
$lang['Th_class3'] = 'Tre�a klasa zaglavlja tabele';
$lang['Td_color1'] = 'Prva boja �elije tabele';
$lang['Td_color2'] = 'Druga boja �elije tabele';
$lang['Td_color3'] = 'Tre�a boja �elije tabele';
$lang['Td_class1'] = 'Prva klasa �elije tabele';
$lang['Td_class2'] = 'Druga klasa �elije tabele';
$lang['Td_class3'] = 'Tre�a klasa �elije tabele';
$lang['fontface1'] = 'Lik fonta 1';
$lang['fontface2'] = 'Lik fonta 2';
$lang['fontface3'] = 'Lik fonta 3';
$lang['fontsize1'] = 'Veli�ina fonta 1';
$lang['fontsize2'] = 'Veli�ina fonta 2';
$lang['fontsize3'] = 'Veli�ina fonta 3';
$lang['fontcolor1'] = 'Boja fonta 1';
$lang['fontcolor2'] = 'Boja fonta 2';
$lang['fontcolor3'] = 'Boja fonta 3';
$lang['span_class1'] = '�irina klase 1';
$lang['span_class2'] = '�irina klase 2';
$lang['span_class3'] = '�irina klase 3';
$lang['img_poll_size'] = 'Veli�ina slike za glasanje [px]';
$lang['img_pm_size'] = 'Veli�ina statusa privatne poruke [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Dobrodo�li na phpBB 2 instalaciju';
$lang['Initial_config'] = 'Osnovna konfiguracija';
$lang['DB_config'] = 'Konfiguracija baze';
$lang['Admin_config'] = 'Konfiguracija administratora';
$lang['continue_upgrade'] = 'Kada preuzmete va� konfiguracioni fajl na va� ra�unar mo�ete kliknuti na \'Nastavi nadogradnju\' dugme da biste nastavili sa procesom nadogradnje. Molimo vas da sa�ekate dok se ne zavr�i proces slanja konfiguracionog fajl i ne zavr�i nadogradnja.';
$lang['upgrade_submit'] = 'Nastavi nadogradnju';

$lang['Installer_Error'] = 'Javila se gre�ka prilikom instalacije';
$lang['Previous_Install'] = 'Dekektovana je prethodna instalacija';
$lang['Install_db_error'] = 'Javila se gre�ka pri poku�aju osve�avanja baze';

$lang['Re_install'] = 'Va�a prethodna instalacija je jo� uvek aktivna. <br /><br />Ukoliko �elite da reinstalirate phpBB 2 kliknite na Yes dugme ispod. Znajte da �ete time uni�titi sve postoje�e podatke, i ne�e biti napravljen povra�aj! Korisni�ko ime i �ifra administratora koje ste koristili za prijavljivanje na board bi�e ponovo kreirani posle reinstalacije, nijedna druga pode�avanja ne�e biti sa�uvana. <br /><br /> Pa�ljivo razmislite pre nogo kliknete na Yes!';

$lang['Inst_Step_0'] = 'Hvala vam �to ste izabrali phpBB 2. Da biste zavr�ili instalaciju molimo vas da popunite detalje ispod koji su obavezni. Znajte da bi baza koju ho�ete da instalirate trebalo da postoji. Ako instalirate u bazu koja koristi ODBC, npr. MS Access trebalo bi da prvo kreirate DSN za nju pre nego �to nastavite dalje.';

$lang['Start_Install'] = 'Po�ni instalaciju';
$lang['Finish_Install'] = 'Zavr�i instalaciju';

$lang['Default_lang'] = 'Podrazumevani jezik na boardu';
$lang['DB_Host'] = 'Ime hosta servera sa bazom / DSN';
$lang['DB_Name'] = 'Ime va�e baze';
$lang['DB_Username'] = 'Korisni�ko ime baze';
$lang['DB_Password'] = '�ifra baze';
$lang['Database'] = 'Va�a baza';
$lang['Install_lang'] = 'Izaberite jezik za instalaciju';
$lang['dbms'] = 'Tip baze';
$lang['Table_Prefix'] = 'Prefiks za tabele u bazi';
$lang['Admin_Username'] = 'Korisni�ko ime administratora';
$lang['Admin_Password'] = '�ifra administratora';
$lang['Admin_Password_confirm'] = 'Potvrdite �ifru administratora [ Potvrdi ]';

$lang['Inst_Step_2'] = 'Korisni�ko ime administratora je napravljeno. U ovoj ta�ki va�a osnovna instalacija je zavr�ena. Sada �emo vas odvesti na ekran koji �e vam omogu�iti administraciju va�e nove instalacije. Obavzno proverite detalje u Generalnoj konfiguraciji i izvr�ite obavezne izmene. Hvala vam �to se izabrali phpBB 2.';

$lang['Unwriteable_config'] = 'Va� konfiguracioni fajl ne mogu da presnimim preko postoje�eg. Kopija konfiguracionog fajla �e biti preuzeta kada kliknete na dugme ispod. Po�aljite ovaj fajl u isti direktorijug gde se nalazi phpBB 2. Kada to uradite prijavite se koriste�i korisni�ko ime i �ifru administratora koje ste prilo�ili u prethodnom formularu i posetite kontrolni centar (pojavi�e se link na dnu svakog ekrana kada se budete prijavili) da biste proverili Generalnu konfiguraciju. Hvala vam �to ste izabrali phpBB 2.';
$lang['Download_config'] = 'Preuzmi konfiguraciju';

$lang['ftp_choose'] = 'Izaberite metod preuzimanja';
$lang['ftp_option'] = '<br />Obzirom da su FTP ekstenzije podr�ane u ovoj verziji PHP bi�e vam data opcija da prvo probam da automatski putem ftp-a smestim konfiguracioni fajl na svoje mesto.';
$lang['ftp_instructs'] = 'Izabrali ste da po�aljete fajl putem ftp-a na va� nalog na kome je phpBB 2 automatski. Molimo vas da unesete informacije ispod da biste olak�ali proces. Znajte da bi FTP putanja trebalo da bude ista kao i putanja preko ftp-a do va�e phpBB2 instalacije kao da pristupate ftp-u koriste�i bilo koji normalni klijent.';
$lang['ftp_info'] = 'Unesite va�e FTP informacije';
$lang['Attempt_ftp'] = 'Poku�aj da preko ftp-a smesti� konfiguracioni fajl na svoje mesto';
$lang['Send_file'] = 'Samo po�aljite fajl meni i ja �u ga ru�no poslati putem ftp-a';
$lang['ftp_path'] = 'FTP putanja do phpBB 2';
$lang['ftp_username'] = 'Va�e korisni�ko ime za FTP';
$lang['ftp_password'] = 'Va�a �ifra za FTP';
$lang['Transfer_config'] = 'Po�ni prenos';
$lang['NoFTP_config'] = 'Poku�aj postavljanja konfiguracionog fajla putem ftp-a na svoje mesto nije bio uspe�an. Molimo vas da preuzmete konfiguracioni fajl i putem ftp-a ga ru�no po�aljete i postavite na pravo mesto.';

$lang['Install'] = 'Instaliraj';
$lang['Upgrade'] = 'Nadogradi';


$lang['Install_Method'] = 'Izaberite metod instalacije';

$lang['Install_No_Ext'] = 'php konfiguracija na va�em serveru ne podr�ava tip baze koji ste izabrali';

$lang['Install_No_PCRE'] = 'phpBB2 zahteva Perl-kompatibilan modul regularnih ekstenzija za php koju va�a php konfiguracija izgleda ne podr�ava!';

//
// To je sve narode!
// -------------------------------------------------

?>