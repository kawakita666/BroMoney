<?php

/***************************************************************************
 *                            lang_admin.php [Croatian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.9 2003/06/10 00:31:19 psotfx Exp $
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//

$lang['General'] = 'Op�enito';
$lang['Users'] = 'Korisnici/e';
$lang['Groups'] = 'Grupe';
$lang['Forums'] = 'Forumi';
$lang['Styles'] = 'Stilovi';

$lang['Configuration'] = 'Konfiguracija';
$lang['Permissions'] = 'Dozvole';
$lang['Manage'] = 'Administracija';
$lang['Disallow'] = 'Nedopu�tena imena';
$lang['Prune'] = 'Izbrisivanje';
$lang['Mass_Email'] = 'Skupni e-mail';
$lang['Ranks'] = 'Statusi';
$lang['Smilies'] = 'Smajli�i';
$lang['Ban_Management'] = 'Isklju�ivanje';
$lang['Word_Censor'] = 'Cenzura rije�i';
$lang['Export'] = 'Eksport';
$lang['Create_new'] = 'Kreiranje';
$lang['Add_new'] = 'Dodavanje';
$lang['Backup_DB'] = 'Backup baze';
$lang['Restore_DB'] = 'Restore baze';

//
// Index
//

$lang['Admin'] = 'Izbornik';
$lang['Not_admin'] = 'Niste ovla�teni za administriranje foruma.';
$lang['Welcome_phpBB'] = 'Dobro do�li na phpBB';
$lang['Admin_intro'] = 'Hvala Vam �to ste izabrali phpBB kao rje�enje za Va� forum.<br />Na ovu stranicu se mo�ete vratiti klikom na <u>Index</u> link na lijevom izborniku.<br />Na po�etnu stranicu foruma se mo�ete vratiti klikom na <u>Forum</u> link na lijevom izborniku.<br />Ostali linkovi, s izbornika lijevo, Vas vode na stranice na kojima mo�ete podesiti sve aspekte ovog foruma.';
$lang['Main_index'] = 'Forum';
$lang['Forum_stats'] = 'Statistika';
$lang['Admin_Index'] = 'Index';
$lang['Preview_forum'] = 'Prikaz foruma';

$lang['Click_return_admin_index'] = 'Kliknite %sovdje%s za povratak na Index.';

$lang['Statistic'] = 'Statistika';
$lang['Value'] = 'Vrijednost';
$lang['Number_posts'] = 'Broj postova';
$lang['Posts_per_day'] = 'Postova dnevno';
$lang['Number_topics'] = 'Broj tema';
$lang['Topics_per_day'] = 'Tema dnevno';
$lang['Number_users'] = 'Broj korisnika/ca';
$lang['Users_per_day'] = 'Korisnika/ca dnevno';
$lang['Board_started'] = 'Forum pokrenut';
$lang['Avatar_dir_size'] = 'Veli�ina Avatar mape';
$lang['Database_size'] = 'Veli�ina baze';
$lang['Gzip_compression'] ='Gzip kompresija';
$lang['Not_available'] = 'Nedostupno';

$lang['ON'] = 'DA'; // This is for GZip compression
$lang['OFF'] = 'NE'; 


//
// DB Utils
//

$lang['Database_Utilities'] = 'Alati za bazu';

$lang['Restore'] = 'Restore';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Ovdje mo�ete izvr�iti potpuni povrat svih phpBB tabela iz [ranije] snimljene datoteke.<br />Ako Va� server podr�ava tu opciju, mo�ete uploadati gzip-kompresiranu tekst datoteku koja �e automatski biti dekompresirana.<br /><b>UPOZORENJE:</b> ovime �ete prepisati postoje�e podatke.<br />Proces mo�e [po]trajati podu�e, stoga, ostanite na ovoj stranici dok operacija ne bude zgotovljena.';
$lang['Backup_explain'] = 'Ovdje mo�ete backupirati [napraviti kopiju] sve Va�e phpBB podatke.<br />Ako imate bilo kakve dodatne tabele, u istoj bazi s phpBB, koje biste �eljeli backupirati, unesite njihova imena, odvojena zarezima, u <i>Dodatne tabele</i>.<br />Ako Va� server podr�ava tu opciju, mo�ete koristiti gzip kompresiju kako biste smanjili veli�inu datoteke prije downloadiranja.';

$lang['Backup_options'] = 'Backup opcije';
$lang['Start_backup'] = 'Zapo�nite Backup';
$lang['Full_backup'] = 'Potpun Backup';
$lang['Structure_backup'] = 'Strukturalni Backup';
$lang['Data_backup'] = 'Podatkovni Backup';
$lang['Additional_tables'] = 'Dodatne tabele';
$lang['Gzip_compress'] = 'Gzip kompresirana datoteka';
$lang['Select_file'] = 'Izaberite datoteku';
$lang['Start_Restore'] = 'Zapo�nite Restore';

$lang['Restore_success'] = 'Baza je uspje�no povra�ena.<br /><br />Forum bi sada trebao biti u stanju u kakvom je bio kada je napravljen Backup.';
$lang['Backup_download'] = 'Download �e po�eti ubrzo; pri�ekajte dok ne po�ne.';
$lang['Backups_not_supported'] = 'Backup baze trenutno nije sistemski podr�an.';

$lang['Restore_Error_uploading'] = 'Do�lo je do gre�ke prilikom uploadiranja Backup datoteke.';
$lang['Restore_Error_filename'] = 'Do�lo je do problema s imenom datoteke; probajte s alternativnom datotekom.';
$lang['Restore_Error_decompress'] = 'Nije mogu�e dekompresirati Gzip datoteku.<br />Poku�ajte s uploadom Plain Text verzije.';
$lang['Restore_Error_no_file'] = 'Nijedna datoteka nije uploadirana.';

//
// Auth pages
//

$lang['Select_a_User'] = 'Izaberite korisnika/cu';
$lang['Select_a_Group'] = 'Izaberite grupu';
$lang['Select_a_Forum'] = 'Izaberite forum';
$lang['Auth_Control_User'] = 'Kontrola dozvola korisnika/ca';
$lang['Auth_Control_Group'] = 'Kontrola dozvola grupa';
$lang['Auth_Control_Forum'] = 'Kontrola dozvola foruma';
$lang['Look_up_User'] = 'Potra�ite korisnika/cu';
$lang['Look_up_Group'] = 'Potra�ite grupu';
$lang['Look_up_Forum'] = 'Potra�ite forum';

$lang['Group_auth_explain'] = 'Ovdje mo�ete definirati dozvole i moderatorski status svake Korisni�ke grupe.<br />Obratite pa�nju na individualne postavke koje ste dodijelili korisniku/ci - ako su druga�ije od postavki koje ste dodijelili Korisni�koj grupi korisnik/ca �e i dalje mo�i koristiti dozvole koje ste mu/joj individualno dodijelili [ukoliko se dogodi da postavke ne budu identi�ne - bit �ete obavije�teni o tome].';
$lang['User_auth_explain'] = 'Ovdje mo�ete definirati dozvole i moderatorski status svakog/e korisnika/ce.<br />Obratite pa�nju na postavke koje ste dodijelili Korisni�koj grupi [ako je koje korisnik/ca �lan/ica] - ako su druga�ije od postavki koje ste dodijelili individualno korisniku/ci on/a �e i dalje mo�i koristiti dozvole koje ste dodijelili Korisni�koj grupi [ukoliko se dogodi da postavke ne budu identi�ne - bit �ete obavije�teni o tome].';
$lang['Forum_auth_explain'] = 'Ovdje mo�ete [jednostavnim ili naprednim su�eljem] definirati mogu�nosti pristupa forumima.<br />Obratite pa�nju na to da se promjenom dozvola pristupa odre�uje i koji/e korisnici/e �e imati prava kori�tenja/upravljanja forumima.';

$lang['Simple_mode'] = 'Jednostavno su�elje';
$lang['Advanced_mode'] = 'Napredno su�elje';
$lang['Moderator_status'] = 'Moderatorski status';

$lang['Allowed_Access'] = 'Dozvoljen pristup';
$lang['Disallowed_Access'] = 'Nedozvoljen pristup';
$lang['Is_Moderator'] = 'Je Moderator/ica';
$lang['Not_Moderator'] = 'Nije Moderator/ica';

$lang['Conflict_warning'] = 'Autorizacijski konflikt';
$lang['Conflict_access_userauth'] = 'Korisnik/ca jo� uvijek ima pristup forumu na konto prava Korisni�ke grupe koje je �lan/ica.<br />Ukoliko mu/joj �elite uskratiti pravo pristupa forumu: ili promijenite prava Korisni�ke grupe ili ga/ju izbri�ite iz �lanstva u toj Korisni�koj grupi. Prava Korisni�ke grupe vidljiva su ispod.';
$lang['Conflict_mod_userauth'] = 'Korisnik/ca jo� uvijek ima moderatorska prava na forumu na konto prava Korisni�ke grupe koje je �lan/ica.<br />Ukoliko mu/joj �elite uskratiti pravo pristupa forumu: ili promijenite prava Korisni�ke grupe ili ga/ju izbri�ite iz �lanstva u toj Korisni�koj grupi. Prava Korisni�ke grupe vidljiva su ispod.';

$lang['Conflict_access_groupauth'] = 'Korisnik(ci)/ca(e) jo� uvijek ima/ju pristup forumu na konto individualnih prava.<br />Ukoliko mu/joj/im �elite uskratiti pravo pristupa forumu: promijenite mu/joj/im individualna prava. Korisni�ka prava vidljiva su ispod.';
$lang['Conflict_mod_groupauth'] = 'Korisnik(ci)/ca(e) jo� uvijek moderatorska prava na forumu na konto individualnih prava.<br />Ukoliko mu/joj/im �elite uskratiti pravo pristupa forumu: promijenite mu/joj/im individualna prava. Korisni�ka prava vidljiva su ispod.';

$lang['Public'] = 'Javan/na';
$lang['Private'] = 'Privatan/na';
$lang['Registered'] = 'Registriran/a/e/i';
$lang['Administrators'] = 'Administratori/ce';
$lang['Hidden'] = 'Skriven/a';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!

$lang['Forum_ALL'] = 'SVI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRI';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADM';

$lang['View'] = 'Pogledajte';
$lang['Read'] = 'Pro�itajte';
$lang['Post'] = 'Postajte';
$lang['Reply'] = 'Odgovorite';
$lang['Edit'] = 'Uredite';
$lang['Delete'] = 'Izbri�ite';
$lang['Sticky'] = 'Va�no';
$lang['Announce'] = 'Obavijesti'; 
$lang['Vote'] = 'Glasujte';
$lang['Pollcreate'] = 'Kreiranje anketa';

$lang['Permissions'] = 'Dozvole';
$lang['Simple_Permission'] = 'Jednostavne dozvole';

$lang['User_Level'] = 'Korisni�ki status'; 
$lang['Auth_User'] = 'Korisnik/ca';
$lang['Auth_Admin'] = 'Administrator/ica';
$lang['Group_memberships'] = '�lanstvo Korisni�kih grupa';
$lang['Usergroup_members'] = '�lanstvo ove Korisni�ke grupe';

$lang['Forum_auth_updated'] = 'Dozvole foruma a�urirane.';
$lang['User_auth_updated'] = 'Korisni�ke dozvole a�urirane.';
$lang['Group_auth_updated'] = 'Dozvole Korisni�ke grupe a�urirane.';

$lang['Auth_updated'] = 'Dozvole su a�urirane.';
$lang['Click_return_userauth'] = 'Kliknite %sovdje%s za povratak na korisni�ke dozvole.';
$lang['Click_return_groupauth'] = 'Kliknite %sovdje%s za povratak na dozvole Korisni�kih grupa.';
$lang['Click_return_forumauth'] = 'Kliknite %sovdje%s za povratak na dozvole foruma.';

//
// Banning
//

$lang['Ban_control'] = 'Isklju�ivanje';
$lang['Ban_explain'] = 'Ovdje mo�ete isklju�iti [zabraniti pristup] korisnika/cu s foruma.<br />Mo�ete isklju�iti korisnika/cu, IP adresu pristupa, adresu pru�atelja usluga...<br />Ovime se isklju�enoj osobi mo�e zabraniti pristup �ak i na Po�etnu stranicu foruma.<br />Da biste sprije�ili isklju�enu osobu da se ponovo registrira, mo�ete isklju�iti i odre�enu e-mail adresu [isklju�ivanje samo e-mail adrese ne�e sprije�iti osobu da se loginira i posta].';
$lang['Ban_explain_warn'] = 'Uno�enje opsega IP adresa rezultira time da �e sve IP adrese, od po�etne do zadnje, biti dodane na listu isklju�enih [blokiranih] IP adresa.<br />Poku�ajte minimizirati broj dodatnih IP adresa uno�enjem zvjezdica (*) gdje god je to mogu�e.<br />Ako stvarno morate blokirati opseg adresa, pazite da bude �to manji.';

$lang['Select_username'] = 'Izaberite korisni�ko ime';
$lang['Select_ip'] = 'Izaberite IP adresu';
$lang['Select_email'] = 'Izaberite e-mail adresu';

$lang['Ban_username'] = 'Isklju�ite korisnika(e)/cu(e)';
$lang['Ban_username_explain'] = 'Mo�ete isklju�iti vi�e korisnika/ca odjednom koriste�i kombinaciju mi�a i tipkovnice za Va�e ra�unalo i preglednik.';

$lang['Ban_IP'] = 'Isklju�ite IP adresu(e)/adresu(e) pru�atelja usluga';
$lang['IP_hostname'] = 'IP adrese/adrese pru�atelja usluga';
$lang['Ban_IP_explain'] = 'Da biste specificirali vi�e razli�itih IP adresa/adresa pru�atelja usluga - odvojite ih zarezima.<br />Da biste specificirali opseg IP adresa - odvojite po�etak i kraj crticom (-); mo�ete koristiti i zvjezdice (*).';

$lang['Ban_email'] = 'Isklju�ite e-mail adresu/e';
$lang['Ban_email_explain'] = 'Da biste specificirali vi�e razli�itih e-mail adresa - odvojite ih zarezima; mo�ete koristiti i zvjezdice (*) [npr. *@hotmail.com].';

$lang['Unban_username'] = 'Odisklju�ite korisnika(e)/cu(e)';
$lang['Unban_username_explain'] = 'Mo�ete odisklju�iti vi�e korisnika/ca odjednom koriste�i kombinaciju mi�a i tipkovnice za Va�e ra�unalo i preglednik.';

$lang['Unban_IP'] = 'Odisklju�ite IP adresu/e';
$lang['Unban_IP_explain'] = 'Mo�ete odisklju�iti vi�e IP adresa odjednom koriste�i kombinaciju mi�a i tipkovnice za Va�e ra�unalo i preglednik.';

$lang['Unban_email'] = 'Odisklju�ite e-mail adresu/e';
$lang['Unban_email_explain'] = 'Mo�ete odisklju�iti vi�e e-mail adresa odjednom koriste�i kombinaciju mi�a i tipkovnice za Va�e ra�unalo i preglednik.';

$lang['No_banned_users'] = 'Nema isklju�enih korisnika/ca';
$lang['No_banned_ip'] = 'Nema isklju�enih IP adresa';
$lang['No_banned_email'] = 'Nema isklju�enih e-mail adresa';

$lang['Ban_update_sucessful'] = 'Isklju�na lista je a�urirana.';
$lang['Click_return_banadmin'] = 'Kliknite %sovdje%s za povratak na Isklju�ivanje.';

//
// Configuration
//

$lang['General_Config'] = 'Op�a konfiguracija';
$lang['Config_explain'] = 'Donja forma Vam omogu�ava pode�avanje svih op�ih postavki foruma.<br />Za konfiguriranje korisnika(ca)/foruma koristite linkove na izborniku lijevo.';

$lang['Click_return_config'] = 'Kliknite %sovdje%s za povratak na Op�u konfiguraciju.';

$lang['General_settings'] = 'Op�e postavke foruma';
$lang['Server_name'] = 'Naziv domene';
$lang['Server_name_explain'] = '<i>Naziv domene pokretanja foruma.</i>';
$lang['Script_path'] = 'Putanja skripta';
$lang['Script_path_explain'] = '<i>Putanja smje�taja phpBB-a u odnosu na naziv domene.</i>';
$lang['Server_port'] = 'Port servera';
$lang['Server_port_explain'] = '<i>Port na kojemu radi Va� server, obi�no 80 [promijenite samo ako je drugi].</i>';
$lang['Site_name'] = 'Naziv stranica';
$lang['Site_desc'] = 'Opis stranica';
$lang['Board_disable'] = 'Onemogu�ite forum';
$lang['Board_disable_explain'] = '<i>Ovo �e forum u�initi nedostupnim korisnicima/ama.<br />Nemojte se logoutirati [odjaviti] ako disableirate [onemogu�ite] forum jer se vi�e ne�ete mo�i loginirati.</i>';
$lang['Acct_activation'] = 'Omogu�ite aktivaciju korisni�kog ra�una';
$lang['Acc_None'] = '/'; // These three entries are the type of activation
$lang['Acc_User'] = 'Korisnik/ca';
$lang['Acc_Admin'] = 'Administrator/ica';

$lang['Abilities_settings'] = 'Osnovne korisni�ke i foruma postavke';
$lang['Max_poll_options'] = 'Max broj odgovora u anketama';
$lang['Flood_Interval'] = 'Interval �ekanja';
$lang['Flood_Interval_explain'] = '<i>Broj sekundi koje moraju pro�i izme�u postanja dvaju postova korisnika/ce.</i>'; 
$lang['Board_email_form'] = 'Forumski e-mail';
$lang['Board_email_form_explain'] = '<i>Mogu�nost korisni�kog me�usobnog slanja e-mailova putem forme foruma.</i>';
$lang['Topics_per_page'] = 'Tema po stranici';
$lang['Posts_per_page'] = 'Postova po stranici';
$lang['Hot_threshold'] = 'Popularni postovi';
$lang['Default_style'] = 'Defaultni stil';
$lang['Override_style'] = 'Onemogu�en korisni�ki stil';
$lang['Override_style_explain'] = '<i>Zamjenjuje korisni�ki stil defaultnim.</i>';
$lang['Default_language'] = 'Defaultni jezik';
$lang['Date_format'] = 'Format datuma';
$lang['System_timezone'] = 'Vremenska zona';
$lang['Enable_gzip'] = 'Omogu�ite GZip kompresiju';
$lang['Enable_prune'] = 'Omogu�ite izbrisivanje foruma';
$lang['Allow_HTML'] = 'Dozvolite HTML';
$lang['Allow_BBCode'] = 'Dozvolite BBCode';
$lang['Allowed_tags'] = 'Dozvolite HTML tagove';
$lang['Allowed_tags_explain'] = '<i>Tagove odvojite zarezima.</i>';
$lang['Allow_smilies'] = 'Dozvolite Smajli�e';
$lang['Smilies_path'] = 'Putanja spremanja Smajli�a';
$lang['Smilies_path_explain'] = '<i>Putanja smje�taja [mape] spremanja Smajli�a u odnosu na phpBB [npr. images/smiles].</i>';
$lang['Allow_sig'] = 'Dozvolite potpise';
$lang['Max_sig_length'] = 'Max du�ina potpisa';
$lang['Max_sig_length_explain'] = '<i>Max broj znakova u potpisu korisnika/ce.</i>';
$lang['Allow_name_change'] = 'Dozvolite promjene korisni�kih imena';

$lang['Avatar_settings'] = 'Postavke Avatara';
$lang['Allow_local'] = 'Omogu�ite galeriju Avatara';
$lang['Allow_remote'] = 'Omogu�ite linkane Avatare';
$lang['Allow_remote_explain'] = '<i>Avatari koji su smje�teni na drugim i pozivaju se s tih stranica.</i>';
$lang['Allow_upload'] = 'Omogu�ite uploadanje Avatara';
$lang['Max_filesize'] = 'Max veli�ina Avatara';
$lang['Max_filesize_explain'] = '<i>Za uploadane Avatare.</i>';
$lang['Max_avatar_size'] = 'Max dimenzije Avatara';
$lang['Max_avatar_size_explain'] = '<i>Visina x �irina u px.</i>';
$lang['Avatar_storage_path'] = 'Putanja spremanja Avatara';
$lang['Avatar_storage_path_explain'] = '<i>Putanja smje�taja [mape] spremanja Avatara u odnosu na phpBB [npr. images/avatars].</i>';
$lang['Avatar_gallery_path'] = 'Putanja galerije Avatara';
$lang['Avatar_gallery_path_explain'] = '<i>Putanja galerije Avatara u odnosu na phpBB [npr. images/avatars/gallery].</i>';

$lang['COPPA_settings'] = 'COPPA postavke';
$lang['COPPA_fax'] = 'COPPA broj faksa';
$lang['COPPA_mail'] = 'COPPA po�tanska adresa';
$lang['COPPA_mail_explain'] = '<i>Po�tanska adresa na koju roditelji/staratelji mogu poslati COPPA registracijski formular.</i>';

$lang['Email_settings'] = 'E-mail postavke';
$lang['Admin_email'] = 'E-mail adresa Administratora/ice';
$lang['Email_sig'] = 'E-mail potpis';
$lang['Email_sig_explain'] = '<i>Ovaj potpis �e biti dodan svakoj e-mail poruci koja bude poslana u ime foruma.</i>';
$lang['Use_SMTP'] = 'Kori�tenje SMTP servera za e-mail';
$lang['Use_SMTP_explain'] = '<i>Izaberite <i>Da</i> ukoliko �elite/morate slati e-mail poruke putem imenovanog servera umjesto lokalne e-mail funkcije.</i>';
$lang['SMTP_server'] = 'Adresa SMTP servera';
$lang['SMTP_username'] = 'SMTP korisni�ko ime';
$lang['SMTP_username_explain'] = '<i>Korisni�ko ime unesite samo ako to Va� SMTP server zahtjeva.</i>';
$lang['SMTP_password'] = 'SMTP zaporka';
$lang['SMTP_password_explain'] = '<i>Zaporku unesite samo ako to Va� SMTP server zahtjeva.</i>';

$lang['Disable_privmsg'] = 'Privatne poruke';
$lang['Inbox_limits'] = 'Max poruka u Inboxu';
$lang['Sentbox_limits'] = 'Max poruka u Sentboxu';
$lang['Savebox_limits'] = 'Max poruka u Saveboxu';

$lang['Cookie_settings'] = 'Cookie postavke'; 
$lang['Cookie_settings_explain'] = '<i>Ovi detalji definiraju kako se Cookies [Kola�i�i] �alju preglednicima Va�ih korisnika/ca. <br /> Naj�e��e su defaultne vrijednosti postavki Kola�i�a dostatne, no, ako ih morate mijenjati - pazite �to radite jer nepravilne postavke mogu dovesti do nemogu�nosti loginiranja.</i>';
$lang['Cookie_domain'] = 'Domena Kola�i�a';
$lang['Cookie_name'] = 'Naziv Kola�i�a';
$lang['Cookie_path'] = 'Putanja Kola�i�a';
$lang['Cookie_secure'] = 'Sigurnost Kola�i�a';
$lang['Cookie_secure_explain'] = '<i>Ako Va� server radi preko SSL-a - omogu�ite ovu opciju; u suprotnom ju onemogu�ite.</i>';
$lang['Session_length'] = 'Vremensko trajanje [sec]';

// Visual Confirmation

$lang['Visual_confirm'] = 'Vizualna potvrda';
$lang['Visual_confirm_explain'] = 'Zahtijeva unos koda, definiranog slikom, kod Registracije.';

//
// Forum Management
//

$lang['Forum_admin'] = 'Administracija foruma';
$lang['Forum_admin_explain'] = 'Ovdje mo�ete dodavati, izbrisati, ure�ivati, mijenjati redoslijed, te resinkronizirati kategorije/forume.';
$lang['Edit_forum'] = 'Uredite forum';
$lang['Create_forum'] = 'Kreirajte novi forum';
$lang['Create_category'] = 'Kreirajte novu kategoriju';
$lang['Remove'] = 'Uklonite';
$lang['Action'] = 'Akcija';
$lang['Update_order'] = 'Updateajte redoslijed';
$lang['Config_updated'] = 'Konfiguracija foruma je uspje�no updateana.';
$lang['Edit'] = 'Uredite';
$lang['Delete'] = 'Izbri�ite';
$lang['Move_up'] = 'Gore';
$lang['Move_down'] = 'Dolje';
$lang['Resync'] = 'ReSin';
$lang['No_mode'] = 'Nije pode�en mod';
$lang['Forum_edit_delete_explain'] = 'Donja forma Vam omogu�ava pode�avanje svih op�ih postavki foruma.<br />Za konfiguriranje korisnika(ca)/foruma koristite linkove na izborniku lijevo.';

$lang['Move_contents'] = 'Premjestite kompletan sadr�aj';
$lang['Forum_delete'] = 'Izbri�ite forum';
$lang['Forum_delete_explain'] = 'Donja forma Vam omogu�ava da izbri�ete forum(e)/kategoriju(e), te da odlu�ite kamo �elite premjestiti sadr�aj.';

$lang['Status_locked'] = 'Zaklju�ano';
$lang['Status_unlocked'] = 'Otklju�ano';
$lang['Forum_settings'] = 'Op�e postavke foruma';
$lang['Forum_name'] = 'Naziv foruma';
$lang['Forum_desc'] = 'Opis';
$lang['Forum_status'] = 'Status';
$lang['Forum_pruning'] = 'Auto-izbrisivanje';

$lang['prune_freq'] = 'Provjeri starost tema svakih';
$lang['prune_days'] = 'Ukloni teme u kojima nije bilo postanja';
$lang['Set_prune_data'] = 'Upalili ste opciju auto-izbrisivanja foruma ali niste podesili frekvenciju ili broj dana za izbrisivanje.<br />Vratite se i podesite [to].';

$lang['Move_and_Delete'] = 'Premjestite i izbri�ite';

$lang['Delete_all_posts'] = 'Izbri�ite sve postove';
$lang['Nowhere_to_move'] = 'Nema lokacije za premje�tanje';

$lang['Edit_Category'] = 'Uredite kategoriju';
$lang['Edit_Category_explain'] = 'Ovom formom mo�ete promijeniti naziv kategorije.';

$lang['Forums_updated'] = 'Informacije o forumu/ima i kategoriji/ama su uspje�no updateane.';

$lang['Must_delete_forums'] = 'Morate izbrisati sve forume da biste mogli izbrisati ovu kategoriju.';

$lang['Click_return_forumadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju foruma.';

//
// Smiley Management
//

$lang['smiley_title'] = 'Administracija Smajli�a';
$lang['smile_desc'] = 'Ovdje mo�ete dodavati, uklanjati i editirati Smajli�e koje korisnici/e mogu dodavati u svoje postove/privatne poruke.';

$lang['smiley_config'] = 'Konfiguracija Smajli�a';
$lang['smiley_code'] = 'Kod Smajli�a';
$lang['smiley_url'] = 'Datoteka Smajli�a';
$lang['smiley_emot'] = 'Emocija Smajli�a';
$lang['smile_add'] = 'Dodajte Smajli�a';
$lang['Smile'] = 'Smajli�';
$lang['Emotion'] = 'Emocija';

$lang['Select_pak'] = 'Izaberite paket (.pak) datoteku';
$lang['replace_existing'] = 'Zamijenite Smajli�a';
$lang['keep_existing'] = 'Zadr�ite Smajli�a';
$lang['smiley_import_inst'] = 'Odzipajte paket Smajli�a i uploadajte sve datoteke u odgovaraju�u mapu Smajli�a za Va�u instalaciju, te izaberite to�nu informaciju u ovoj formi da biste ubacili paket Smajli�a.';
$lang['smiley_import'] = 'Umetanje paketa Smajli�a';
$lang['choose_smile_pak'] = 'Izaberite paket .pak datoteku Smajli�a';
$lang['import'] = 'Importirajte Smajli�e';
$lang['smile_conflicts'] = '�to bi trebalo napraviti u slu�aju konflikata';
$lang['del_existing_smileys'] = 'Izbri�ite postoje�e Smajli�e prije importiranja';
$lang['import_smile_pack'] = 'Importirajte paket Smajli�a';
$lang['export_smile_pack'] = 'Kreirajte paket Smajli�a';
$lang['export_smiles'] = 'Da biste kreirali paket Smajli�a od trenutno instaliranih Smajli�a, kliknite %sovdje%s kako biste downloadirali smiles.pak datoteku.<br />Nazovite adekvatno ovu datoteku paze�i pri tome da sa�uvate .pak ekstenziju.<br />Zatim kreirajte zip datoteku koja sadr�i sve Va�e Smajli�e plus ovu .pak konfiguracijsku datoteku.';

$lang['smiley_add_success'] = 'Smajli� je uspje�no dodan.';
$lang['smiley_edit_success'] = 'Smajli� je uspje�no updateiran.';
$lang['smiley_import_success'] = 'Paket Smajli�a je uspje�no importiran.';
$lang['smiley_del_success'] = 'Smajli� je uspje�no uklonjen.';
$lang['Click_return_smileadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju Smajli�a.';

//
// User Management
//

$lang['User_admin'] = 'Administracija korisnika/ca';
$lang['User_admin_explain'] = 'Ovdje mo�ete promijeniti odre�ene postavke i informacije korisnika/ca.<br />Za modificiranje dozvola korisnika/ca koristite sistem dozvola za korisnike/ce i Korisni�ke grupe.';

$lang['Look_up_user'] = 'Prona�ite korisnika/cu';

$lang['Admin_user_fail'] = 'Nije bilo mogu�e updateati korisni�ki profil.';
$lang['Admin_user_updated'] = 'Korisni�ki profil je uspje�no updatean.';
$lang['Click_return_useradmin'] = 'Kliknite %sovdje%s za povratak na Administraciju korisnika/ca.';

$lang['User_delete'] = 'Izbrisivanje korisnika/ce';
$lang['User_delete_explain'] = '<i>Ozna�ite ku�icu ukoliko �elite izbrisati korisnika/cu; ova operacija ne mo�e biti poni�tena.</i>';
$lang['User_deleted'] = 'Korisnik/ca je uspje�no izbrisan/a.';

$lang['User_status'] = 'Korisnik/ca je aktivan/na';
$lang['User_allowpm'] = 'Mo�e slati privatne poruke';
$lang['User_allowavatar'] = 'Mo�e koristiti Avatara';

$lang['Admin_avatar_explain'] = 'Ovdje mo�ete vidjeti/izbrisati Avatara korisnika/ce.';

$lang['User_special'] = 'Posebna polja samo za administratore/ice';
$lang['User_special_explain'] = 'Ova polja ne mogu modificirati korisnici/e.<br />Ovdje mo�ete podesiti njihov status i druge opcije kojima korisnici/e nemaju pristup.';

//
// Group Management
//

$lang['Group_administration'] = 'Administracija Korisni�kih grupa';
$lang['Group_admin_explain'] = 'Ovdje mo�ete administrirati Korisni�ke grupe.<br />Mo�ete kreirati nove, te ure�ivati/izbrisati postoje�e Korisni�ke grupe.<br />Mo�ete odre�ivati moderatore/ice, status kao i nazive i opise Korisni�kih grupa.';
$lang['Error_updating_groups'] = 'Do�lo je do gre�ke prilikom updateanja Korisni�ke grupe.';
$lang['Updated_group'] = 'Korisni�ka grupa je uspje�no updateana.';
$lang['Added_new_group'] = 'Korisni�ka grupa je uspje�no kreirana.';
$lang['Deleted_group'] = 'Korisni�ka grupa je uspje�no izbrisana.';
$lang['New_group'] = 'Kreirajte novu Korisni�ku grupu';
$lang['Edit_group'] = 'Editirajte Korisni�ku grupu';
$lang['group_name'] = 'Naziv';
$lang['group_description'] = 'Opis';
$lang['group_moderator'] = 'Moderator/ica';
$lang['group_status'] = 'Status';
$lang['group_open'] = 'Otvorena';
$lang['group_closed'] = 'Zatvorena';
$lang['group_hidden'] = 'Skrivena';
$lang['group_delete'] = '�elite [li] izbrisati ovu Korisni�ku grupu?';
$lang['group_delete_check'] = 'Da';
$lang['submit_group_changes'] = 'Po�aljite promjene';
$lang['reset_group_changes'] = 'Izbri�ite promjene';
$lang['No_group_name'] = 'Morate specificirati naziv Korisni�ke grupe.';
$lang['No_group_moderator'] = 'Morate specificirati moderatora/icu Korisni�ke grupe.';
$lang['No_group_mode'] = 'Morate specificirati mod Korisni�ke grupe, otvorena ili zatvorena.';
$lang['No_group_action'] = 'Nije specificirana akcija.';
$lang['delete_group_moderator'] = '�elite [li] izbrisati trenutnog/u moderatora/icu ove Korisni�ke grupe?';
$lang['delete_moderator_explain'] = '<i>Ukoliko mijenjate moderatora/icu Korisni�ke grupe, ozna�ite ovu ku�icu kako biste izbrisali trenutnog moderatora/icu [ukoliko ne ozna�ite ku�icu, trenutni moderator/ica �e postati regularan �lan Korisni�ke grupe].</i>';
$lang['Click_return_groupsadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju Korisni�kih grupa.';
$lang['Select_group'] = 'Izaberite Korisni�ku grupu';
$lang['Look_up_group'] = 'Potra�ite Korisni�ku grupu';

//
// Prune Administration
//

$lang['Forum_Prune'] = 'Administracija izbrisivanja foruma';
$lang['Forum_Prune_explain'] = 'Ovdje mo�ete izbrisati svaku temu u kojoj nije bilo novih postova u rasponu dana kojeg odredite.<br />Ukoliko ne odredite broj dana - sve teme �e biti izbrisane.<br />Samo aktualne ankete [one koje jo� traju] i Obavijesti ne�e biti izbrisane [njih �ete morati izbrisati ru�no].';
$lang['Do_Prune'] = 'Pokrenite izbrisivanje';
$lang['All_Forums'] = 'Svi forumi';
$lang['Prune_topics_not_posted'] = 'Izbri�ite teme u kojima nije bilo novih postova dana';
$lang['Topics_pruned'] = 'Izbrisane teme';
$lang['Posts_pruned'] = 'Izbrisani postovi';
$lang['Prune_success'] = 'Izbrisivanje foruma je uspje�no obavljeno.';

//
// Word censor
//

$lang['Words_title'] = 'Administracija cenzure rije�i';
$lang['Words_explain'] = 'Ovdje mo�ete dodavati, ure�ivati i izbrisati rije�i koje �e automatski biti cenzurirane na forumu. <br />Automatski �e biti onemogu�eno i registriranje pod korisni�kim imenom koje sadr�i cenzuriranu rije�.<br />Mo�ete se koristiti i zvjezdicama (*) [npr.: *test* �e obuhvatiti sve rije�i koje u sebi sadr�e rije� test; test* sve koje po�inju sa test; *test sve koje zavr�avaju sa test].';
$lang['Word'] = 'Rije�';
$lang['Edit_word_censor'] = 'Uredite';
$lang['Replacement'] = 'Zamjena';
$lang['Add_new_word'] = 'Dodajte novu rije�';
$lang['Update_word'] = 'Updateajte';

$lang['Must_enter_word'] = 'Morate unijeti i rije� i zamjenu za nju.';
$lang['No_word_selected'] = 'Niste ozna�ili rije� koju �elite urediti.';

$lang['Word_updated'] = 'Rije� je uspje�no updateana.';
$lang['Word_added'] = 'Rije� je uspje�no dodana.';
$lang['Word_removed'] = 'Rije� je uspje�no izbrisana.';

$lang['Click_return_wordadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju cenzure rije�i.';

//
// Mass Email
//

$lang['Mass_email_explain'] = 'Ovdje mo�ete poslati e-mail svim korisnicima/ama foruma odnosno �lanovima/icama Korisni�kih grupa.<br />E-mail �e oti�i s e-mail adrese administratora/ice foruma; primatelji/ce �e biti navedeni/e u BCC [Na znanje] odjeljku.<br />Ukoliko je primatelja/ica puno, mo�da �e slanje e-maila potrajati neko vrijeme - bit �ete obavije�teni kada e-mail bude poslan.';
$lang['Compose'] = 'Compose'; 

$lang['Recipients'] = 'Primatelji/ce'; 
$lang['All_users'] = 'Kompletno �lanstvo';

$lang['Email_successfull'] = 'Va�a poruka je poslana.';
$lang['Click_return_massemail'] = 'Kliknite %sovdje%s za povratak na formu Skupnog e-maila.';

//
// Ranks admin
//

$lang['Ranks_title'] = 'Administracija statusa';
$lang['Ranks_explain'] = 'Ovdje mo�ete dodavati, ure�ivati, pregledavati i izbrisati statuse.<br />Mo�ete kreirati proizvoljne statuse koji mogu biti primijenjeni na korisnike/ce preko Administracije korisnika/ca.';

$lang['Add_new_rank'] = 'Dodajte novi status';

$lang['Rank_title'] = 'Status';
$lang['Rank_special'] = 'Specijalni status';
$lang['Rank_minimum'] = 'Min postova';
$lang['Rank_maximum'] = 'Max postova';
$lang['Rank_image'] = 'Slika statusa [u odnosu na phpBB]';
$lang['Rank_image_explain'] = '<i>Ova sli�ica �e se vidjeti ispod korisni�kog imena kod pregledavanja postova.</i>';

$lang['Must_select_rank'] = 'Morate izabrati status.';
$lang['No_assigned_rank'] = 'Nije dodijeljen specijalan status';

$lang['Rank_updated'] = 'Status je uspje�no updatean.';
$lang['Rank_added'] = 'Status je uspje�no dodan.';
$lang['Rank_removed'] = 'Status je uspje�no izbrisan.';
$lang['No_update_ranks'] = 'Status je uspje�no izbrisan.<br />Korisni�ki ra�uni koju su bili ozna�eni ovim statusom nisu updateani; to �ete morati napraviti ru�no.';

$lang['Click_return_rankadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju statusa.';

//
// Disallow Username Admin
//

$lang['Disallow_control'] = 'Administracija nedopu�tenih korisni�kih imena';
$lang['Disallow_explain'] = 'Ovdje mo�ete dodavati/izbrisati korisni�ka imena pod kojima se nitko ne�e mo�i registrirati.<br />Mo�ete koristiti i zvjezdice (*).<br />Naravno, ne�ete mo�i dodati niti jedno korisni�ko ime koje je ve� registrirano [ukoliko to �elite - morate prvo obrisati postoje�e korisni�ko ime].';

$lang['Delete_disallow'] = 'Izbri�ite';
$lang['Delete_disallow_title'] = 'Izbri�ite nedopu�teno korisni�ko ime';
$lang['Delete_disallow_explain'] = 'Korisni�ko ime mo�ete izbrisati tako da ga izaberete s liste i kliknete na gumb Izbri�ite.';

$lang['Add_disallow'] = 'Dodajte';
$lang['Add_disallow_title'] = 'Dodajte nedopu�teno korisni�ko ime';
$lang['Add_disallow_explain'] = 'Mo�ete koristiti i zvjezdice (*) - koje zamjenjuju bilo koji znak.';

$lang['No_disallowed'] = 'Nema nedopu�tenih korisni�kih imena';

$lang['Disallowed_deleted'] = 'Nedopu�teno korisni�ko ime je uspje�no izbrisano.';
$lang['Disallow_successful'] = 'Nedopu�teno korisni�ko ime je uspje�no dodano.';
$lang['Disallowed_already'] = 'Ime koje ste unijeli ne mo�e biti nedopu�teno.<br />Ili ve� postoji na listi, ili postoji na listi cenzuriranih rije�i ili postoji takvo korisni�ko ime.';

$lang['Click_return_disallowadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju nedopu�tenih korisni�kih imena.';

//
// Styles Admin
//

$lang['Styles_admin'] = 'Administracija stilova';
$lang['Styles_explain'] = 'Ovdje mo�ete dodavati, ure�ivati i izbrisati stilove [teme i predlo�ke].';
$lang['Styles_addnew_explain'] = 'Sljede�a lista sadr�i sve teme koje su dostupne za predlo�ke koje imate.<br />Stavke liste nisu instalirane u phpBB bazu.<br />Da biste instalirali temu, kliknite na gumb Instalirajte.';

$lang['Select_template'] = 'Izaberite predlo�ak';

$lang['Style'] = 'Stil';
$lang['Template'] = 'Predlo�ak';
$lang['Install'] = 'Instalirajte';
$lang['Download'] = 'Downloadirajte';

$lang['Edit_theme'] = 'Uredite temu';
$lang['Edit_theme_explain'] = 'Donjom formom mo�ete urediti postavke izabrane teme.';

$lang['Create_theme'] = 'Kreirajte temu';
$lang['Create_theme_explain'] = 'Donjom formom mo�ete kreirati novu temu za izabrani predlo�ak.<br />Kod uno�enja boja [za koje koristite heksadecimalni oblik] nemojte unositi znak ljestve (#) [npr.: CCCCCC je pravilno; #CCCCCC nije].';

$lang['Export_themes'] = 'Eksportirajte teme';
$lang['Export_explain'] = 'Ovdje mo�ete eksportirati podatke teme za izabrani predlo�ak.<br />Izaberite predlo�ak sa donje liste i skripta �e kreirati konfiguracijsku datoteku teme te ju poku�ati spremiti u izabranu mapu predlo�aka.<br />Ukoliko ju ne�e mo�i spremiti, predlo�it �e Vam da ju downloadirate.<br />Da bi skripta mogla spremiti datoteku, morate dati pravo pristupa webserveru za izabranu mapu predlo�aka.<br />Za vi�e informacija o ovome, pogledajte phpBB 2 vodi�.';

$lang['Theme_installed'] = 'Tema je uspje�no instalirana.';
$lang['Style_removed'] = 'Izabrani stil je izbrisan iz baze.<br />Da biste stil potpuno uklonili iz sistema morate izbrisati odgovaraju�i stil iz mape predlo�aka.';
$lang['Theme_info_saved'] = 'Informacije o temi za izabrani predlo�ak su spremljene.<br />Sada biste trebali vratiti dozvole za theme_info.cfg [ako je mogu�e i za izabranu mapu predlo�aka] u read-only [samo za �itanje].';
$lang['Theme_updated'] = 'Tema je uspje�no updateana.<br />Sada biste trebali eksportirati nove postavke teme.';
$lang['Theme_created'] = 'Tema je kreirana.<br />Sada biste trebali eksportirati temu u konfiguracijsku datoteku teme zbog backupa ili uporabe negdje drugdje.';

$lang['Confirm_delete_style'] = 'Jeste li sigurni da �elite izbrisati ovaj stil?';

$lang['Download_theme_cfg'] = 'Nije bilo mogu�e napisati konfiguracijsku datoteku teme.<br />Kliknite na donji gumb da biste downloadirali ovu datoteku preglednikom.<br />Kada ju downloadirate, mo�ete ju transferirati u mapu predlo�aka.<br />Tada mo�ete spakirati datoteke za distribuciju ili uporabe negdje drugdje.';
$lang['No_themes'] = 'Predlo�ak kojeg ste izabrali nema tema vezanih uz sebe.<br />Da biste kreirali novu temu, kliknite na link lijevo za kreiranje nove teme.';
$lang['No_template_dir'] = 'Nije bilo mogu�e otvoriti mapu predlo�aka.<br />Mo�da je ne�itljiva webserveru ili ne postoji.';
$lang['Cannot_remove_style'] = 'Ne mo�ete izbrisati izabrani stil jer je ozna�en kao defaultni za forum.<br />Promijenite defaultni stil foruma i poku�ajte ponovo.';
$lang['Style_exists'] = 'Izabrano ime stila ve� postoji; vratite se natrag i izaberite drugo ime.';

$lang['Click_return_styleadmin'] = 'Kliknite %sovdje%s za povratak na Administraciju stilova.';

$lang['Theme_settings'] = 'Postavke teme';
$lang['Theme_element'] = 'Elementi teme';
$lang['Simple_name'] = 'Jednostavan naziv';
$lang['Value'] = 'Vrijednost';
$lang['Save_Settings'] = 'Spremite postavke';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Slika pozadine';
$lang['Background_color'] = 'Boja pozadine';
$lang['Theme_name'] = 'Naziv teme';
$lang['Link_color'] = 'Boja linkova';
$lang['Text_color'] = 'Boja teksta';
$lang['VLink_color'] = 'Boja posje�enih linkova';
$lang['ALink_color'] = 'Boja aktivnih linkova';
$lang['HLink_color'] = 'Boja prelaze�ih linkova';
$lang['Tr_color1'] = 'Boja 1 redova tabela';
$lang['Tr_color2'] = 'Boja 2 redova tabela';
$lang['Tr_color3'] = 'Boja 3 redova tabela';
$lang['Tr_class1'] = 'Class 1 redova tabela';
$lang['Tr_class2'] = 'Class 2 redova tabela';
$lang['Tr_class3'] = 'Class 3 redova tabela';
$lang['Th_color1'] = 'Boja 1 zaglavlja tabela';
$lang['Th_color2'] = 'Boja 2 zaglavlja tabela';
$lang['Th_color3'] = 'Boja 3 zaglavlja tabela';
$lang['Th_class1'] = 'Class 1 zaglavlja tabela';
$lang['Th_class2'] = 'Class 2 zaglavlja tabela';
$lang['Th_class3'] = 'Class 3 zaglavlja tabela';
$lang['Td_color1'] = 'Boja 1 �elija tabela';
$lang['Td_color2'] = 'Boja 2 �elija tabela';
$lang['Td_color3'] = 'Boja 3 �elija tabela';
$lang['Td_class1'] = 'Class 1 �elija tabela';
$lang['Td_class2'] = 'Class 2 �elija tabela';
$lang['Td_class3'] = 'Class 3 �elija tabela';
$lang['fontface1'] = 'Vrsta fonta 1';
$lang['fontface2'] = 'Vrsta fonta 2';
$lang['fontface3'] = 'Vrsta fonta 3';
$lang['fontsize1'] = 'Veli�ina fonta 1';
$lang['fontsize2'] = 'Veli�ina fonta 2';
$lang['fontsize3'] = 'Veli�ina fonta 3';
$lang['fontcolor1'] = 'Boja fonta 1';
$lang['fontcolor2'] = 'Boja fonta 2';
$lang['fontcolor3'] = 'Boja fonta 3';
$lang['span_class1'] = 'Class 1 mjera';
$lang['span_class2'] = 'Class 2 mjera';
$lang['span_class3'] = 'Class 3 mjera';
$lang['img_poll_size'] = 'Veli�ina anketne slike [px]';
$lang['img_pm_size'] = 'Veli�ina statusa privatne poruke [px]';

//
// Install Process
//

$lang['Welcome_install'] = 'Dobro do�li u phpBB 2 instalaciju';
$lang['Initial_config'] = 'Osnovna konfiguracija';
$lang['DB_config'] = 'Konfiguracija baze';
$lang['Admin_config'] = 'Admin konfiguracija';
$lang['continue_upgrade'] = 'Kada downloadirate konfiguracijsku datoteku, mo�ete kliknuti na gumb \'Nastavite nadogradnju\' kako biste nastavili s nadogradnjom.<br />Pri�ekajte s uploadiranjem konfiguracijske datoteke dok proces nadogradnje ne zavr�i.';
$lang['upgrade_submit'] = 'Nastavite nadogradnju';

$lang['Installer_Error'] = 'Do�lo je do gre�ke prilikom instalacije.';
$lang['Previous_Install'] = 'Detektirana je prethodna instalacija.';
$lang['Install_db_error'] = 'Do�lo je do gre�ke prilikom poku�aja nadogradnje baze.';

$lang['Re_install'] = 'Prethodna instalacija je jo� uvijek aktivna.<br />Ukoliko �elite reinstalirati phpBB 2 kliknite na Da gumb ispod.<br />Obratite pa�nju na to da �e to dovesti do uni�tenja svih postoje�ih podataka i backupova.<br />Korisni�ko ime i zaporka administratora/ice, koje ste koristili za loginiranje, bit �e ponovo kreirani nakon reinstalacije; ostale postavke ne�e biti sa�uvane.<br />Dobro razmislite prije klika na Da.';

$lang['Inst_Step_0'] = 'Hvala Vam �to ste izabrali phpBB 2.<br />Da biste zavr�ili instalaciju, ispunite tra�ene podatke ispod.<br />Baza u koju instalirate bi ve� trebala postojati.<br />Ukoliko instalirate u bazu koja koristi ODBC, npr. MS Access, trebali biste prvo kreirati DSN za nju prije nastavka.';

$lang['Start_Install'] = 'Po�nite instalaciju';
$lang['Finish_Install'] = 'Zavr�ite instalaciju';

$lang['Default_lang'] = 'Defaultni jezik foruma';
$lang['DB_Host'] = 'Hostname servera baze / DSN';
$lang['DB_Name'] = 'Ime Va�e baze';
$lang['DB_Username'] = 'Korisni�ko ime baze';
$lang['DB_Password'] = 'Zaporka baze';
$lang['Database'] = 'Va�a baza';
$lang['Install_lang'] = 'Izaberite jezik instalacije';
$lang['dbms'] = 'Tip baze';
$lang['Table_Prefix'] = 'Prefiks za tabele u bazi';
$lang['Admin_Username'] = 'Korisni�ko ime administratora/ice';
$lang['Admin_Password'] = 'Zaporka administratora/ice';
$lang['Admin_Password_confirm'] = 'Zaporka administratora/ice [potvrdite]';

$lang['Inst_Step_2'] = 'Korisni�ko ime administratora/ice je kreirano.<br />Ovime je osnovna instalacija zavr�ena.<br />Otvorit �e Vam se stranica na kojoj �ete mo�i izadministrirati Va�u novu instalaciju.<br />Provjerite postavke Op�e konfiguracije i uredite sve �to treba.<br />Hvala Vam �to ste izabrali phpBB 2.';

$lang['Unwriteable_config'] = 'Konfiguracijsku datoteku nije mogu�e editirati.<br /> Kopija konfiguracijske datoteke bit �e downloadirana kada kliknete na donji gumb.<br />Uploadajte tu datoteku u istu mapu gdje ste uploadirali i phpBB 2.<br />Tada �ete se mo�i loginirati koriste�i korisni�ko ime i zaporku administratora/ice, koje ste unijeli u prethodnoj formi, te oti�i u AdministratorPanel da provjerite postavke Op�e konfiguracije.<br />Hvala Vam �to ste izabrali phpBB 2.';
$lang['Download_config'] = 'Downloadirajte konfiguracijsku datoteku';

$lang['ftp_choose'] = 'Izaberite metodu downloada';
$lang['ftp_option'] = '<br />S obzirom da su FTP ekstenzije omogu�ene u ovoj verziji PHP-a, bit �e Vam dana mogu�nost da prvo putem FTP-a postavite konfiguracijsku datoteku na mjesto.';
$lang['ftp_instructs'] = 'Izabrali ste FTP-iranje datoteke.<br />Unesite informacije ispod kako biste olak�ali proces.<br />FTP putanja mora biti to�no do phpBB 2 instalacije.';
$lang['ftp_info'] = 'Unesite FTP informacije';
$lang['Attempt_ftp'] = 'Poku�ajte FTP-irati konfiguracijsku datoteku';
$lang['Send_file'] = 'Po�aljite konfiguracijsku datoteku meni - ru�no �u je FTP-irati';
$lang['ftp_path'] = 'FTP putanja do phpBB 2';
$lang['ftp_username'] = 'Va�e FTP korisni�ko ime';
$lang['ftp_password'] = 'Va�a FTP zaporka';
$lang['Transfer_config'] = 'Zapo�nite transfer';
$lang['NoFTP_config'] = 'Poku�aj FTP-iranja konfiguracijske datoteke nije uspio<br />Downloadirajte konfiguracijsku datoteku i FTP-irajte ju ru�no.';

$lang['Install'] = 'Instaliranje';
$lang['Upgrade'] = 'Nadogradnja';

$lang['Install_Method'] = 'Izaberite metodu instalacije';

$lang['Install_No_Ext'] = 'PHP konfiguracija Va�eg servera ne podr�ava tip baze koji ste izabrali.';

$lang['Install_No_PCRE'] = 'phpBB2 zahtijeva <i>Perl-Compatible Regular Expressions Module</i> za PHP koji Va�a PHP konfiguracija, �ini se, ne podr�ava.';

//
// That's all Folks!
//

?>