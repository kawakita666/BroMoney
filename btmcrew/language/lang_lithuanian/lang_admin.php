<?php

/***************************************************************************
 *                            lang_admin.php [Lithuanian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2003/01/02 20:44:58 ProTON Exp $
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
$lang['General'] = 'Pagrindinis';
$lang['Users'] = 'Vartotojai';
$lang['Groups'] = 'Grup�s';
$lang['Forums'] = 'Diskusijos';
$lang['Styles'] = 'Stiliai';

$lang['Configuration'] = 'Konfig�racija';
$lang['Permissions'] = 'Teis�s';
$lang['Manage'] = 'Valdymas';
$lang['Disallow'] = 'Vard� draudimas';
$lang['Prune'] = 'Valymas';
$lang['Mass_Email'] = 'El. pa�to siuntimas';
$lang['Ranks'] = 'Rangai';
$lang['Smilies'] = '�ypsen�l�s';
$lang['Ban_Management'] = 'Blokavimas';
$lang['Word_Censor'] = 'Cenz�ra';
$lang['Export'] = 'Eksportuoti';
$lang['Create_new'] = 'Sukurti';
$lang['Add_new'] = 'Prid�ti';
$lang['Backup_DB'] = 'I�saugoti DB';
$lang['Restore_DB'] = 'Atstatyti DB';


//
// Index
//
$lang['Admin'] = 'Administravimas';
$lang['Not_admin'] = 'J�s neturite teis�s administruoti �ios diskusij� lentos';
$lang['Welcome_phpBB'] = 'Sveiki atvyk� � phpBB administravimo meniu';
$lang['Admin_intro'] = 'A�i�, kad naudojat�s �ia diskusij� lenta. �iame puslapyje rasite vis� dominan�i� informacij� ir diskusij� lentos statistik�. Bet kada galite sugr��ti � �� puslap� paspaud� <u>Prad�ia</u> kairiajame �one. Nor�dami sugr��ti � diskusij� lentos pagrindin� puslap� paspauskite phpBB logotip� (taip pat kair�je). Visos kitos nuorodos kairiajame meniu leis j�ms valdyti kiekvien� diskusij� lentos element�. Kiekviename puslapyje galite rasti ma�yt� apra�ym� apie konfig�ravimo �rankius.';
$lang['Main_index'] = 'Pagr. puslapis';
$lang['Forum_stats'] = 'Diskusij� statistika';
$lang['Admin_Index'] = 'Prad�ia';
$lang['Preview_forum'] = 'Per�i�r�ti diskusijas';

$lang['Click_return_admin_index'] = 'Paspauskite %s�ia%s, kad gr��tum�te � prad�i�';

$lang['Statistic'] = 'Duomuo';
$lang['Value'] = 'Reik�m�';
$lang['Number_posts'] = 'Prane�im� skai�ius';
$lang['Posts_per_day'] = 'Prane�im� per dien�';
$lang['Number_topics'] = 'Tem� skai�ius';
$lang['Topics_per_day'] = 'Tem� per dien�';
$lang['Number_users'] = 'Vartotoj� skai�ius';
$lang['Users_per_day'] = 'Nauj� vartotoj� per dien�';
$lang['Board_started'] = 'Diskusij� lenta startavo';
$lang['Avatar_dir_size'] = 'Avatar� katalogo dydis';
$lang['Database_size'] = 'Duomen� baz�s dydis';
$lang['Gzip_compression'] ='GZIP kompresija';
$lang['Not_available'] = 'N�ra duomen�';

$lang['ON'] = '�JUNGTA'; // This is for GZip compression
$lang['OFF'] = 'I�JUNGTA'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Duomen� baz�s �rankiai';

$lang['Restore'] = 'Atstatymas';
$lang['Backup'] = 'I�saugojimas';
$lang['Restore_explain'] = '�iuo �rankiu galite atstatyti visus phpBB diskusij� lentos duomenis i� i�saugoto failo. Taip pat galite nusi�sti � server� gzip metodu suspaust� tekstin� fail�. Diskusij� lentos �rankiai automati�kai j� i�archyvuos. <b>D�MESIO</b> �i operacija perra�ys visus esamus duomenis. Tai gali u�trukti pakankamai ilgai. Jokiu b�du nieko nespauskite kol atstatymas visi�kai nebaigtas.';
$lang['Backup_explain'] = '�ia j�s galite i�saugoti visus diskusij� lentos duomenis. Jeigu j�s� phpBB duomen� baz�je yra papildom� lenteli�, kurias taip pat norite i�saugoti, �ra�ykite jas � �emiau esan�i� form� atskirtas kableliais. Galite pasinaudoti gzip suspaudimu. Tai suma�ins failo dyd�.';

$lang['Backup_options'] = 'I�saugojimo parametrai';
$lang['Start_backup'] = 'Prad�ti proces�';
$lang['Full_backup'] = 'Pilnas i�saugojimas';
$lang['Structure_backup'] = 'I�saugoti tik strukt�r�';
$lang['Data_backup'] = 'I�saugoti tik duomenis';
$lang['Additional_tables'] = 'Papildomos lentel�s';
$lang['Gzip_compress'] = 'Panaudoti GZIP kompresij�';
$lang['Select_file'] = 'Pasirinkite fail�';
$lang['Start_Restore'] = 'Prad�ti proces�';

$lang['Restore_success'] = 'Atstatymo operacija s�kmingai baigta.<br /><br />Dabar j�s� diskusij� lenta tur�t� b�ti tokia, kokia ji buvo prie� i�saugojim�.';
$lang['Backup_download'] = 'Failas tuojau pat bus atsi�stas, palaukite...';
$lang['Backups_not_supported'] = 'I�saugojimas ne�manomas, d�l j�s� naudojamos duomen� baz�s sistemos tipo.';

$lang['Restore_Error_uploading'] = 'Failo nusi�sti nepavyko';
$lang['Restore_Error_filename'] = 'Neteisingas failo pavadinimas, pabandykite i� naujo';
$lang['Restore_Error_decompress'] = 'Negaliu i�koduoti suspausto failo, nusi�skite nesuspaust� tekstin� fail�';
$lang['Restore_Error_no_file'] = 'J�s nenusiunt�te jokio failo';


//
// Auth pages
//
$lang['Select_a_User'] = 'Pasirinkite vartotoj�';
$lang['Select_a_Group'] = 'Pasirinkite grup�';
$lang['Select_a_Forum'] = 'Pasirinkite forum�';
$lang['Auth_Control_User'] = 'Vartotoj� teisi� valdymas'; 
$lang['Auth_Control_Group'] = 'Grupi� teisi� valdymas'; 
$lang['Auth_Control_Forum'] = 'Diskusij� teisi� valdymas'; 
$lang['Look_up_User'] = 'Per�i�r�ti vartotoj�'; 
$lang['Look_up_Group'] = 'Per�i�r�ti grup�'; 
$lang['Look_up_Forum'] = 'Per�i�r�ti forum�'; 

$lang['Group_auth_explain'] = '�ia galite keisti grupi� teises ir j� moderatorius. Nepamir�kite, kad kei�iant grupi� teises, atskir� vartotoj� teis�s vistiek leis jiems prieiti prie forum� ir t.t. Tokiu atveju jus apie tai persp�s.';
$lang['User_auth_explain'] = '�ia galite keisti vartotoj� teises. Nepamir�kite, kad kei�iant vartotoj� teises, grupi� teis�s vistiek leis jiems prieiti prie forum� ir t.t. Tokiu atveju jus apie tai persp�s.';
$lang['Forum_auth_explain'] = '�ia galite nustatyti, kokias teises reikia tur�ti, norint patekti � atskirus forumus. Tai galite padaryti dvejais re�imais: paprastu ir i�pl�stu. I�pl�stas re�imas leis pasirinkti �ymiai daugiau nustatym�.';

$lang['Simple_mode'] = 'Paprastas re�imas';
$lang['Advanced_mode'] = 'I�pl�stas re�imas';
$lang['Moderator_status'] = 'Moderatoriaus teis�s';

$lang['Allowed_Access'] = '�leisti';
$lang['Disallowed_Access'] = 'Ne�leisti';
$lang['Is_Moderator'] = 'Taip';
$lang['Not_Moderator'] = 'Ne';

$lang['Conflict_warning'] = 'Persp�jimas apie teisi� konflikt�';
$lang['Conflict_access_userauth'] = '�is vartotojas vistiek turi pri�jim� prie �io forumo per savo grup�s teises. J�s galite pakeisti grup�s teises arba pa�alinti vartotoj� i� tos grup�s. Apa�ioje galite matyti grup�s teises � tam tikrus forumus.';
$lang['Conflict_mod_userauth'] = '�is vartotojas vistiek turi moderatoriaus teises per savo grup�s teises. J�s galite pakeisti grup�s teises arba pa�alinti vartotoj� i� tos grup�s. Apa�ioje galite matyti grup�s teises � tam tikrus forumus.';

$lang['Conflict_access_groupauth'] = 'Vienas i� grup�s vartotoj� vis dar turi pri�jim� prie �io forumo per savo vartotojo teisi� nustatymus. J�s turite pakeisti pa�io vartotojo teises. Apa�ioje galite matyti vartotojo teises � tam tikrus forumus.';
$lang['Conflict_mod_groupauth'] = 'Vienas i� grup�s vartotoj� vis dar turi moderatoriaus teises per savo vartotojo teisi� nustatymus. J�s turite pakeisti pa�io vartotojo teises. Apa�ioje galite matyti vartotojo teises � tam tikrus forumus.';

$lang['Public'] = 'Vie�as';
$lang['Private'] = 'Privatus';
$lang['Registered'] = 'Registruotiems vartotojams';
$lang['Administrators'] = 'Administratoriams';
$lang['Hidden'] = 'slaptas';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'VISI';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIV';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Matyti';
$lang['Read'] = 'Skaityti';
$lang['Post'] = 'Ra�yti';
$lang['Reply'] = 'Atsakin�ti';
$lang['Edit'] = 'Redaguoti';
$lang['Delete'] = 'I�trinti';
$lang['Sticky'] = 'Lipnus';
$lang['Announce'] = 'Anonsuoti'; 
$lang['Vote'] = 'Balsuoti';
$lang['Pollcreate'] = 'Kurti balsavimus';

$lang['Permissions'] = 'Teis�s';
$lang['Simple_Permission'] = 'Paprastos teis�s';

$lang['User_Level'] = 'Vartotojo tipas'; 
$lang['Auth_User'] = 'Paprastas vartotojas';
$lang['Auth_Admin'] = 'Administratorius';
$lang['Group_memberships'] = 'Vartotojas priklauso grup�ms';
$lang['Usergroup_members'] = '�iai grupei priklauso �ie vartotojai';

$lang['Forum_auth_updated'] = 'Forumo teis�s s�kmingai pakeistos';
$lang['User_auth_updated'] = 'Vartotojo teis�s s�kmingai pakeistos';
$lang['Group_auth_updated'] = 'Grup�s teis�s s�kmingai pakeistos';

$lang['Auth_updated'] = 'Teis�s s�kmingai pakeistos';
$lang['Click_return_userauth'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � vartotoj� teisi� nustatymo form�';
$lang['Click_return_groupauth'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � grupi� teisi� nustatymo form�';
$lang['Click_return_forumauth'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � forum� teisi� nustatymo form�';


//
// Banning
//
$lang['Ban_control'] = 'Blokavimas';
$lang['Ban_explain'] = '�ia galite blokuoti vartotojus. Blokuoti galima pagal vartotojo vard�, pagal vien� arba kelis IP adresus, arba pagal interneto adres�. Tokiu b�du netgi galite u�drausti vartotojams pasiekt� pagrindin� diskusij� lentos puslap�. Kad vartotojas neu�siregistruotu kitu vardu, galite netgi blokuoti jo el. pa�to adres�. Ta�iau, �sid�m�kite, kad blokuodami tikrai el. pa�to adres�, j�s neu�blokuosite pa�io vartotojo. Pa�to adreso blokavim� reikia derint su kuriuo nors i� pirm� blokavimo b�d�.';
$lang['Ban_explain_warn'] = '';

$lang['Select_username'] = 'Pasirinkite vartotoj�';
$lang['Select_ip'] = 'Pasirinkite IP adres�';
$lang['Select_email'] = 'Pasirinkite el. pa�to adres�';

$lang['Ban_username'] = 'Blokuoti vien� ar daugiau vartotoj� vard�';
$lang['Ban_username_explain'] = 'Daugiau vartotoj� vard� galite �vesti teisingai su�aid� su klaviar�ra ir pele';

$lang['Ban_IP'] = 'Blokuoti vien� ar daugiau IP adres� arba interneto vard�';
$lang['IP_hostname'] = 'IP adresai arba interneto vardai';
$lang['Ban_IP_explain'] = 'IP adresams ir internetiniams vardams atskirti naudokite kablel�. Taip pat galite pasirinkti blokuoti adres� grup�. Tai daroma taip: pirmas_ip_adresas-antras_ip_adresas. Dalin�ms reik�m�ms apib�dinti naudokite *';

$lang['Ban_email'] = 'Blokuoti vien� ar daugiau el. pa�to adres�';
$lang['Ban_email_explain'] = 'El. pa�to adresai vienas nuo kito skiriami kableliais. Dalin�ms reik�m�ms apib�dinti naudokite *, pvz *@hotmail.com';

$lang['Unban_username'] = 'Atblokuoti vien� ar daugiau vartotoj�';
$lang['Unban_username_explain'] = 'Galite atblokuoti daugiau nei vien� vartotoj� teisingai su�aid� su klaviat�ra ir pele';

$lang['Unban_IP'] = 'Atblokuoti vien� ar daugiau IP adres�';
$lang['Unban_IP_explain'] = 'Galite atblokuoti daugiau nei vien� IP adres� teisingai su�aid� su klaviat�ra ir pele';

$lang['Unban_email'] = 'Atblokuoti vien� ar daugiau el. pa�to adres�';
$lang['Unban_email_explain'] = 'Galite atblokuoti daugiau nei vien� el. pa�to adres� teisingai su�aid� su klaviat�ra ir pele';

$lang['No_banned_users'] = 'U�blokuot� vartotoj� vard� n�ra';
$lang['No_banned_ip'] = 'U�blokuot� IP adres� n�ra';
$lang['No_banned_email'] = 'U�blokuot� el. pa�to adres� n�ra';

$lang['Ban_update_sucessful'] = 'Blokuot� adres� s�ra�as s�kmingai pakeistas';
$lang['Click_return_banadmin'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � blokavimo valdymo form�';


//
// Configuration
//
$lang['General_Config'] = 'Pagrindiniai nustatymai';
$lang['Config_explain'] = 'Forma esanti �emiau leis jums keisti visus pagrindinius diskusij� lentos parametrus ir nustatymus. Atskir� vartotoj� ir forum� nustatymus galima pasiekti per kair�j� meniu.';

$lang['Click_return_config'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � pagrindin� nustatym� form�';

$lang['General_settings'] = 'Pagrindiniai diskusij� lentos nustatymai';
$lang['Server_name'] = 'Interneto vardas (domain)';
$lang['Server_name_explain'] = 'Pvz.: www.mano_firma.lt';
$lang['Script_path'] = 'Diskusij� lentos katalogas';
$lang['Script_path_explain'] = 'Pvz.: /diskusijos/';
$lang['Server_port'] = 'Serverio portas';
$lang['Server_port_explain'] = 'HTTP serverio portas, da�niausiai 80';
$lang['Site_name'] = 'Diskusij� lentos pavadinimas';
$lang['Site_desc'] = 'Diskusij� lentos apib�dinimas';
$lang['Board_disable'] = 'I�jungti diskusij� lent�';
$lang['Board_disable_explain'] = '�iuo parametru galite laikinai i�jungti diskusij� lent�. Neatsijunkite kol diskusijos yra i�jungtos, kitaip negal�site v�l prisijungti!';
$lang['Acct_activation'] = '�jungti vartotojo vardo ir slapta�od�io patvirtinim�';
$lang['Acc_None'] = 'Ne'; // These three entries are the type of activation
$lang['Acc_User'] = 'Taip, patvirtina vartotojas';
$lang['Acc_Admin'] = 'Taip, patvirtina administratorius';

$lang['Abilities_settings'] = 'Vartotoj� ir diskusij� nustatymai';
$lang['Max_poll_options'] = 'Maksimalus balsavimo punkt� skai�ius';
$lang['Flood_Interval'] = 'Laiko tarpas tarp �inu�i�';
$lang['Flood_Interval_explain'] = 'Naudojamas apsaugai nuo per didelio srauto (flood)'; 
$lang['Board_email_form'] = 'El. pa�to siuntimas diskusij� lentos sistema';
$lang['Board_email_form_explain'] = 'Vartotojai gali si�sti el. pa�t� integruota sistema';
$lang['Topics_per_page'] = 'Tem� viename puslapyje';
$lang['Posts_per_page'] = '�inu�i� viename puslapyje';
$lang['Hot_threshold'] = '�inu�i� populiariose temose';
$lang['Default_style'] = 'Pagrindinis stilius';
$lang['Override_style'] = 'I�jungti vartotoj� stilius';
$lang['Override_style_explain'] = 'Pakei�ia vartotoj� stilius pagrindiniu stiliumi';
$lang['Default_language'] = 'Pagrindin� kalba';
$lang['Date_format'] = 'Datos formatas';
$lang['System_timezone'] = 'Sistemos laiko juosta';
$lang['Enable_gzip'] = '�jungti GZIP kompresij�';
$lang['Enable_prune'] = '�jungti diskusij� valym�';
$lang['Allow_HTML'] = 'Leisti HTML';
$lang['Allow_BBCode'] = 'Leisti BBKod�';
$lang['Allowed_tags'] = 'Leistini HTML �ymenys (tags)';
$lang['Allowed_tags_explain'] = '�ymenys skiriami kableliais';
$lang['Allow_smilies'] = 'Leisti �ypsen�les';
$lang['Smilies_path'] = '�ypsen�li� katalogas';
$lang['Smilies_path_explain'] = 'Katalogas turi b�ti nurodytas po phpBB pagrindinio katalogo, pvz. images/smilies';
$lang['Allow_sig'] = 'Leisti para�us';
$lang['Max_sig_length'] = 'Maksimalus para�o ilgis';
$lang['Max_sig_length_explain'] = 'Maksimalus simboli� skai�ius vartotoj� para�uose';
$lang['Allow_name_change'] = 'Leisti keisti vartotojo vard�';

$lang['Avatar_settings'] = 'Avatar� nustatymai';
$lang['Allow_local'] = '�jungti avatar� galerij�';
$lang['Allow_remote'] = '�jungti nutolusius avatarus';
$lang['Allow_remote_explain'] = '�ie avatarai saugomi nutolusiame serveryje';
$lang['Allow_upload'] = '�jungti avatar� atsiuntim�';
$lang['Max_filesize'] = 'Maksimalus avataro dydis';
$lang['Max_filesize_explain'] = 'Galioja atsiun�iamiems avatarams';
$lang['Max_avatar_size'] = 'Maksimalus avataro paveiksl�lio dydis';
$lang['Max_avatar_size_explain'] = '(auk�tis x ilgis pikseliais)';
$lang['Avatar_storage_path'] = 'Avatar� saugojimo katalogas';
$lang['Avatar_storage_path_explain'] = 'Katalogas turi b�ti nurodytas po phpBB pagrindinio katalogo, pvz. images/avatars';
$lang['Avatar_gallery_path'] = 'Avatar� galerijos katalogas';
$lang['Avatar_gallery_path_explain'] = 'Katalogas turi b�ti nurodytas po phpBB pagrindinio katalogo, pvz. images/avatars/gallery';

$lang['COPPA_settings'] = 'Vaik� apsaugos (COPPA) nustatymai';
$lang['COPPA_fax'] = 'Fakso numeris';
$lang['COPPA_mail'] = 'Pa�to adresas';
$lang['COPPA_mail_explain'] = 'Paprasto pa�to adresas, kur vaik� t�vai gali si�sti u�pildytas registracijos anketas';

$lang['Email_settings'] = 'El. pa�to nustatymai';
$lang['Admin_email'] = 'Administratoriaus el. pa�to adresas';
$lang['Email_sig'] = 'Administratoriaus para�as';
$lang['Email_sig_explain'] = '�is para�as bus prikabintas prie vis� lai�k�, si�st� per administratoriaus meniu';
$lang['Use_SMTP'] = 'Lai�k� siuntimui naudoti SMTP server�';
$lang['Use_SMTP_explain'] = 'Jeigu �jungsite �� parametr�, lai�kai bus sun�iami per SMTP server�, o ne per standartin� PHP <a href="http://www.php.net/mail" target=\"_other\">mail()</a> funkcij�';
$lang['SMTP_server'] = 'SMTP serverio adresas';
$lang['SMTP_username'] = 'SMTP vartotojo vardas';
$lang['SMTP_username_explain'] = '�ra�ykite tik tada, jeigu j�s� SMTP serveris to reikalauja';
$lang['SMTP_password'] = 'SMTP slapta�odis';
$lang['SMTP_password_explain'] = '�ra�ykite tik tada, jeigu j�s� SMTP serveris to reikalauja';

$lang['Disable_privmsg'] = 'Asmenin�s �inut�s';
$lang['Inbox_limits'] = 'Maksimalus Inbox dydis';
$lang['Sentbox_limits'] = 'Maksimalus Sentbox dydis';
$lang['Savebox_limits'] = 'Maksimalus Savebox dydis';

$lang['Cookie_settings'] = 'Sausain�li� (cookie) nustatymai'; 
$lang['Cookie_settings_explain'] = '�ie parametrai nustato kaip sausain�liai bus sun�iami vartotojams. Pradiniai nustatymai tinka daugumai nar�ykli�, ta�iau jeigu vis d�lto nusprend�te juos keisti, darykite tai atsargiai. Neteisingi nustatymai gali neleisti vartotojams prisijungti.';
$lang['Cookie_domain'] = 'Internetinis vardas (domain)';
$lang['Cookie_name'] = 'Sausain�lio pavadinimas';
$lang['Cookie_path'] = 'Katalogas kur galioja sausain�lis';
$lang['Cookie_secure'] = 'Saugus sausain�lis';
$lang['Cookie_secure_explain'] = 'Galima �jungti tik jeigu j�s� HTTP serveris dirba su SSL';
$lang['Session_length'] = 'Sesijos galiojimo laikas [ sekund�mis ]';


//
// Forum Management
//
$lang['Forum_admin'] = 'Diskusij� administravimas';
$lang['Forum_admin_explain'] = '�iame puslapyje galite kurti, trinti, redaguoti, r��iuoti, ir sinchronizuoti diskusij� kategorijas bei forumus';
$lang['Edit_forum'] = 'Forumo redagavimas';
$lang['Create_forum'] = 'Sukurti nauj� forum�';
$lang['Create_category'] = 'Sukurti nauj� kategorij�';
$lang['Remove'] = 'I�trinti';
$lang['Action'] = 'Veiksmas';
$lang['Update_order'] = 'Keisti tvark�';
$lang['Config_updated'] = 'Forumo parametrai s�kmingai pakeisti';
$lang['Edit'] = 'Keisti';
$lang['Delete'] = 'I�trinti';
$lang['Move_up'] = 'Auk�tyn';
$lang['Move_down'] = '�emyn';
$lang['Resync'] = 'Sinchronizuoti';
$lang['No_mode'] = 'Ne�vestas re�imas';
$lang['Forum_edit_delete_explain'] = '';

$lang['Move_contents'] = 'Perkelti visus duomenis �';
$lang['Forum_delete'] = 'Forumo trynimas';
$lang['Forum_delete_explain'] = '';

$lang['Status_locked'] = 'U�rakintas';
$lang['Status_unlocked'] = 'Atrakintas';
$lang['Forum_settings'] = 'Pagrindiniai forumo nustatymai';
$lang['Forum_name'] = 'Forumo pavadinimas';
$lang['Forum_desc'] = 'Apib�dinimas';
$lang['Forum_status'] = 'B�sena';
$lang['Forum_pruning'] = 'Automatinis valymas';

$lang['prune_freq'] = 'Tikrinti tem� senum� kas';
$lang['prune_days'] = 'I�trinti temas, kuriose nebuvo ra�oma';
$lang['Set_prune_data'] = 'J�s �jung�te automatin� valym�, ta�iau nenustat�te valymo da�numo. Gr��kite atgal ir padarykite tai.';

$lang['Move_and_Delete'] = 'Perkelti ir/arba i�trinti';

$lang['Delete_all_posts'] = 'I�trinti visas �inutes';
$lang['Nowhere_to_move'] = 'N�ra kur perkelti';

$lang['Edit_Category'] = 'Kategorijos redagavimas';
$lang['Edit_Category_explain'] = '�ia galite pakeisti kategorijos pavadinim�.';

$lang['Forums_updated'] = 'Forumo ir/arba kategorijos parametrai pakeisti s�kmingai';

$lang['Must_delete_forums'] = 'Prie� trinant kategorij�, i� jos turi b�ti i�trinti visi forumai';

$lang['Click_return_forumadmin'] = 'Paspauskite %s�ia%s, nor�dami sugr��ti � diskusij� administravim�';


//
// Smiley Management
//
$lang['smiley_title'] = '�ypsen�li� administravimas';
$lang['smile_desc'] = '�ia galite prid�ti, trinti ir redaguoti �ypsen�les, kurias diskusij� dalyviai naudoja �inut�se.';

$lang['smiley_config'] = '�ypsen�l�s parametrai';
$lang['smiley_code'] = '�ypsen�l�s kodas';
$lang['smiley_url'] = 'Paveiksl�lis';
$lang['smiley_emot'] = 'Emocija';
$lang['smile_add'] = 'Prid�ti nauj� �ypsen�l�';
$lang['Smile'] = '�ypsen�l�';
$lang['Emotion'] = 'Emocija';

$lang['Select_pak'] = 'Pasirinkite fail� (.pak)';
$lang['replace_existing'] = 'Pakeisti egzistuojan�i� �ypsen�les';
$lang['keep_existing'] = 'Palikti egzistuojan�ias �ypsen�les';
$lang['smiley_import_inst'] = 'I�archyvuokite visas �ypsen�les ir nusi�skite jas � �ypsen�li� katalog�. Tada �ioje formoje pasirinkite teisingus parametrus ir �veskite naujas �ypsen�les � duomen� baz�.';
$lang['smiley_import'] = '�ypsen�li� paketo �vedimas';
$lang['choose_smile_pak'] = 'Pasirinkite �ypsen�li� paket� (.pak)';
$lang['import'] = '�vesti �ypsen�les';
$lang['smile_conflicts'] = 'K� daryti �ypsen�li� konflikto atveju?';
$lang['del_existing_smileys'] = 'I�trinkite egzistuojan�ias �ypsen�les prie� �vedim�';
$lang['import_smile_pack'] = '�vesti �ypsen�li� paket�';
$lang['export_smile_pack'] = 'Sukurti �ypsen�li� paket�';
$lang['export_smiles'] = 'Nor�dami sukurti �ypsen�li� paket� i� dabartini� �ypsen�li�, spauskite %s�ia%s. Failas turi b�ti su .pak gal�ne. Tada sukurkite zip fail�, � kur� �d�kite visas savo �ypsen�les bei �� .pak fail�.';

$lang['smiley_add_success'] = '�ypsen�l� s�kmingai prid�ta';
$lang['smiley_edit_success'] = '�ypsen�l� s�kmingai pakeista';
$lang['smiley_import_success'] = '�ypsen�li� paketas s�kmingai �ra�ytas!';
$lang['smiley_del_success'] = '�ypsen�l� s�kmingai pa�alinta';
$lang['Click_return_smileadmin'] = 'Paspauskite %s�ia%s, nor�dami sugr��ti � �ypsen�li� administravim�';


//
// User Management
//
$lang['User_admin'] = 'Vartotoj� valdymas';
$lang['User_admin_explain'] = '�iame puslapyje galite keisti vartotoj� informacij� ir specialius parametrus. Vartotoj� teis�s kei�iamos per <u>Vartotoj� teisi�</u> meniu.';

$lang['Look_up_user'] = 'Per�i�r�ti vartotoj�';

$lang['Admin_user_fail'] = 'Negaliu pakeisti vartotojo apra�ymo.';
$lang['Admin_user_updated'] = 'Vartotojo apra�ymas s�kmingai pakeistas.';
$lang['Click_return_useradmin'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � vartotoj� valdym�';

$lang['User_delete'] = 'I�trinti �� vartotoj�';
$lang['User_delete_explain'] = 'Gra�inti vartotojo nebus �manoma.';
$lang['User_deleted'] = 'Vartotojas s�kmingai i�trintas.';

$lang['User_status'] = 'Vartotojo vardas aktyvuotas';
$lang['User_allowpm'] = 'Gali si�sti priva�ias �inutes';
$lang['User_allowavatar'] = 'Gali tur�ti avatar�';

$lang['Admin_avatar_explain'] = '�ia galite matyti ir i�trinti vartotojo avatar�.';

$lang['User_special'] = 'Special�s laukai skirti tik administratoriams';
$lang['User_special_explain'] = '�iuos laikus mato tik administratoriai. �ia galite keisti vartotoj� b�sen� ir kitus specialius parametrus, kuri� negali modifikuoti pats vaartotojas.';
// Added for enhanced user management
$lang['User_lookup_explain'] = "�ia galite pasirinkti vartotojus, kuriuos norite administruoti.";
$lang['One_user_found'] = "Buvo rastas vienintelis vartotojas, puslapis tuojau pat persikraus";
$lang['Click_goto_user'] = "Paspauskite %s�ia%s, nor�dami redaguoti vartotojo apra�ym�";
$lang['User_joined_explain'] = "Sintaks� identi�ka PHP funkcijos <a href=\"http://www.php.net/strtotime\" target=\"_other\">strtotime()</a> sintaksei";


//
// Group Management
//
$lang['Group_administration'] = 'Grupi� valdymas';
$lang['Group_admin_explain'] = 'I� �ia galite valdyti visas varototj� grupes. Galite trinti, kurti, redaguoti esamas grupes. Taip pat galite pasirinkti grupi� moderatorius, atidaryti/u�daryti grup�, keisti grup�s pavadinim� ir apib�dinim�.';
$lang['Error_updating_groups'] = 'Klaida kei�iant grupi� informacij�';
$lang['Updated_group'] = 'Grup� s�kmingai pakeista';
$lang['Added_new_group'] = 'Nauja grup� s�kmingai sukurta';
$lang['Deleted_group'] = 'Grup� s�kmingai i�trinta';
$lang['New_group'] = 'Sukurti nauj� grup�';
$lang['Edit_group'] = 'Grup�s redagavimas';
$lang['group_name'] = 'Grup�s pavadinimas';
$lang['group_description'] = 'Grup�s apib�dinimas';
$lang['group_moderator'] = 'Grup�s moderatorius';
$lang['group_status'] = 'Grup�s b�sena';
$lang['group_open'] = 'Atvira grup�';
$lang['group_closed'] = 'U�dara grup�';
$lang['group_hidden'] = 'Slapta grup�';
$lang['group_delete'] = 'I�trinti grup�';
$lang['group_delete_check'] = 'I�trinti �i� grup�';
$lang['submit_group_changes'] = 'Keisti';
$lang['reset_group_changes'] = 'I�valyti';
$lang['No_group_name'] = '�ra�ykite grup�s pavadinim�';
$lang['No_group_moderator'] = '�ra�ykite grup�s moderatori�';
$lang['No_group_mode'] = 'Pasirinkite grup�s b�sen�';
$lang['No_group_action'] = 'Nepasirinktas veiksmas';
$lang['delete_group_moderator'] = 'Pa�alinti sen� grup�s moderatori�?';
$lang['delete_moderator_explain'] = 'Visi�kai pa�alina grup�s moderatori� i� grup�s. Jeigu nepa�ym�site �io parametro, senasis moderatorius taps eiliniu grup�s nariu.';
$lang['Click_return_groupsadmin'] = 'Paspauskite %s�ia%s, nor�dami sugr��ti � grupi� valdym�.';
$lang['Select_group'] = 'Pasirinkite grup�';
$lang['Look_up_group'] = 'Per�i�r�ti grup�';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Diskusij� valymas';
$lang['Forum_Prune_explain'] = 'Automatin� diskusij� valymo funkcija pa�alina �inutes senesnes nei nurodytas laikotarpis. Automatinis valymas nei�trina tem� kuriose yra vis dar aktyv�s balsavimai. Taip pat paliekami anonsavimai. �ias temas jums teks i�trinti patiems.';
$lang['Do_Prune'] = 'Valyti';
$lang['All_Forums'] = 'Visi forumai';
$lang['Prune_topics_not_posted'] = 'Valyti temas kuriose nebuvo atsakym�';
$lang['Topics_pruned'] = 'I�trint� tem�';
$lang['Posts_pruned'] = 'I�trint� �inu�i�';
$lang['Prune_success'] = 'Forum� valymas s�kmingai baigtas';


//
// Word censor
//
$lang['Words_title'] = 'Cenz�ra';
$lang['Words_explain'] = '�iame puslapyje galite prid�ti, redaguoti ir i�trinti �od�ius, kurie bus automati�kai cenz�ruojami. Be to bus neleid�iama registruotis vardais, kuriuose yra cenz�ruoti �od�iai. Keli� pana�i� reik�mi� apra�ymui naudokite *, pvz: *test* atitiks detestable, test* - testing, *test - detest.';
$lang['Word'] = '�odis';
$lang['Edit_word_censor'] = '�od�io cenz�ravimo redagavimas';
$lang['Replacement'] = 'Pakeisti �';
$lang['Add_new_word'] = 'Prid�ti �od�';
$lang['Update_word'] = 'Pakeisti �od�io cenz�ravim�';

$lang['Must_enter_word'] = '�ra�ykite ir �od� ir jo pakaital�';
$lang['No_word_selected'] = 'Nepasirinkote �od�io';

$lang['Word_updated'] = '�od�io cenz�ravimas s�kmingai pakeistas';
$lang['Word_added'] = 'Naujas cenz�ruotas �odis s�kmingai prid�tas';
$lang['Word_removed'] = '�odis pa�alintas i� cenz�ruojam� �od�i� s�ra�o';

$lang['Click_return_wordadmin'] = 'Paspauskite %s�ia%s, nor�dami sugr��ti � cenz�ros valdym�';


//
// Mass Email
//
$lang['Mass_email_explain'] = '�ia galite i�si�sti elektronin� lai�k� visiems diskusij� dalyviams arba tam tikrai dalyvi� grupei. Jeigu ra�ote didelei varototj� grupei, b�kite kantr�s, nes siuntimo procesas gali u�trukti ilgai. Nei�junkite nar�ykl�s lango kol sistema neparod�, kad siuntimas visi�kai baigtas.';
$lang['Compose'] = 'Lai�ko ra�ymas'; 

$lang['Recipients'] = 'Gav�jai'; 
$lang['All_users'] = 'Visi vartotojai';

$lang['Email_successfull'] = 'J�s� �inut� i�si�sta';
$lang['Click_return_massemail'] = 'Paspauskite %s�ia%s, nor�dami sugr��ti � el. pa�to siuntimo form�';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang� valdymas';
$lang['Ranks_explain'] = 'Pasinaudodami �ia forma galite prid�ti, trinti, per�i�r�ti, bei i�trinti esamus rangus. Taip pat galite kurti specialius rangus, kuriuos vartotojams priskirsite per vartotoj� valdymo form�.';

$lang['Add_new_rank'] = 'Sukurti nauj� rang�';

$lang['Rank_title'] = 'Rango pavadinimas';
$lang['Rank_special'] = 'Specialus rangas?';
$lang['Rank_minimum'] = 'Ma�iausiai �inu�i�';
$lang['Rank_maximum'] = 'Daugiausiai �inu�i�';
$lang['Rank_image'] = 'Rango paveiksl�lis (pvz: images/rank1.jpg)';
$lang['Rank_image_explain'] = 'Da�niausias ma�as paveiksl�lis';

$lang['Must_select_rank'] = 'Pasirinkite rang�';
$lang['No_assigned_rank'] = 'Pasirinkite ar rangas specialus';

$lang['Rank_updated'] = 'Rangas s�kmingai pakeistas';
$lang['Rank_added'] = 'Naujas rangas s�kmingai sukurtas';
$lang['Rank_removed'] = 'Rangas s�kmingai i�trintas';
$lang['No_update_ranks'] = 'Rangas s�kmingai i�trintas, ta�iau vartotoj� apra�ymai, naudojan�i� �� rang� nebuvo pakeisti. Tai jums teks padaryti patiems.';

$lang['Click_return_rankadmin'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � rang� valdymo form�';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Vartotoj� vard� draudimas';
$lang['Disallow_explain'] = '�iame puslapyje galite u�drausti nepageidautinus vartotoj� vardus. Pana�ioms reik�m�ms u�drausti naudokite *. Ta�iau j�s negal�site u�drausti vardo, kuris jau yra u�registruotas, tod�l i� prad�i� j� i�trinkite ir tik tada �traukite � draud�iam� vard� s�ra��.';

$lang['Delete_disallow'] = 'I�trinti';
$lang['Delete_disallow_title'] = 'U�drausto vardo pa�alinimas';
$lang['Delete_disallow_explain'] = 'Pasirinkite vard� i� meniu ir paspauskite <i>I�trinti</i>';

$lang['Add_disallow'] = 'Prid�ti';
$lang['Add_disallow_title'] = 'Naujas vardo draudimas';
$lang['Add_disallow_explain'] = 'Keletui pana�i� vard� apib�dinti naudokite *';

$lang['No_disallowed'] = 'Draud�iam� vard� n�ra';

$lang['Disallowed_deleted'] = 'U�draustas vardas s�kmingai pa�alintas i� draud�iam� vard� s�ra�o';
$lang['Disallow_successful'] = 'Naujas draud�iamas vardas s�kmingai sukurtas';
$lang['Disallowed_already'] = 'Toks vardas jau u�registruotas, arba u�drautas per cenz�r�, arba jis jau u�drautas.';

$lang['Click_return_disallowadmin'] = 'Paspauskite %s�ia%s, nor�dami gr��ti � vard� draudimo form�';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Stili� valdymas';
$lang['Styles_explain'] = '�iame puslapyje rasite visk� kas susij� su stiliais, j� k�rimu, trinimu, bei valdymu.';
$lang['Styles_addnew_explain'] = '�iame s�ra�e galite matyti visus stilius, kuriuos galite naudoti su savo trafaretais. Punktai s�ra�e dar n�ra �diegti. Nor�dami �diegti, paspauskite <i>�diegti</i> �alia norimo stiliaus.';

$lang['Select_template'] = 'Pasirinkite trafaret� (template)';

$lang['Style'] = 'Stilius';
$lang['Template'] = 'Trafaretas (template)';
$lang['Install'] = '�diegti';
$lang['Download'] = 'Parsisi�sti';

$lang['Edit_theme'] = 'Stiliaus redagavimas';
$lang['Edit_theme_explain'] = 'Formoje �emiau galite redaguoti stiliaus parametrus';

$lang['Create_theme'] = 'Sukurti stili�';
$lang['Create_theme_explain'] = 'Forma �emiau galite sukurti nauj� stili� pagal pasirinkt� trafaret�. �ra�ant spalvas naudokite �e�ioliktain� kod� be # �enklo, pvz.: CCCCCC, bet ne #CCCCCC';

$lang['Export_themes'] = 'Stiliaus eksportavimas';
$lang['Export_explain'] = '�iame skyriuje galite eksportuoti stiliaus duomenis pasirinktam trafaretui. Pasirinkite trafaret� i� s�ra�o apa�ioje ir sistema i�saugos visus nustatymus trafareto kataloge. Jeigu failo i�saugoti ne�manoma (HTTP serveris neturi ra�ymo teisi� � min�t� katalog�), sistem� leis jums j� parsisi�sti.';

$lang['Theme_installed'] = 'Pasirinktas stilius s�kmingai �diegtas';
$lang['Style_removed'] = 'Stilius pa�alintas i� duomen� baz�s. Nor�dami visi�kai pa�alinti �� stil� i� sistemos, i�trinkite stiliaus failus i� trafaret� katalogo.';
$lang['Theme_info_saved'] = 'Stiliaus informacija pasirinktam trafaretui i�saugota theme_info.cfg faile.';
$lang['Theme_updated'] = 'Stilius s�kmingai pakeistas. Dabar galite ekportuoti naujus stiliaus parametrus.';
$lang['Theme_created'] = 'Stilius sukurtas. Dabar galite ekportuoti stiliaus parametrus saugojimui.';

$lang['Confirm_delete_style'] = 'Ar tiktai norite i�trinti �� stili�?';

$lang['Download_theme_cfg'] = 'Sistema negal�jo i�saugoti failo. Parsisiuntimui paspauskite mygtuk� apa�ioje. Kai tik parsisi�site fail�, galite nusi�sti j� � server� tolesniam naudojimui.';
$lang['No_themes'] = 'Trafaretas kur� pasirinkote neturi susiet� stili�. Sukurkite nors vien� sili�.';
$lang['No_template_dir'] = 'Negaliu atidaryti trafaret� katalogo. HTTP serveris neturi skaitymo teisi� � j� arba jis papras�iausiai neegzistuoja.';
$lang['Cannot_remove_style'] = 'J�s negalite perkelti �io stiliaus, nes jis yra pagrindinis. Pakeiskite pagrindin� diskusij� lentos stili� ir pabandykite dar kart�.';
$lang['Style_exists'] = 'Stilius tokiu pavadinimu jau yra, gr��kite ir pasirinkite kit� pavadinim�.';

$lang['Click_return_styleadmin'] = 'Paspauskite %s�ia%s, nor�dami sugr��ti � stili� valdymo form�';

$lang['Theme_settings'] = 'Stiliaus parametrai';
$lang['Theme_element'] = 'Stiliaus elementas';
$lang['Simple_name'] = 'Pavadinimas';
$lang['Value'] = 'Reik�m�';
$lang['Save_Settings'] = 'I�saugoti pakeitimus';

$lang['Stylesheet'] = 'CSS stili� trafaretas';
$lang['Background_image'] = 'Fono paveiksl�lis';
$lang['Background_color'] = 'Fono spalva';
$lang['Theme_name'] = 'Stiliaus pavadinimas';
$lang['Link_color'] = 'Nuorodos spalva';
$lang['Text_color'] = 'Teksto spalva';
$lang['VLink_color'] = 'Aplankytos nuorodos spalva';
$lang['ALink_color'] = 'Aktyvios nuorodos spalva';
$lang['HLink_color'] = 'U�vestos pele nuorodos spalva';
$lang['Tr_color1'] = 'Lentel�s eilut�s spalva 1';
$lang['Tr_color2'] = 'Lentel�s eilut�s spalva 2';
$lang['Tr_color3'] = 'Lentel�s eilut�s spalva 3';
$lang['Tr_class1'] = 'Lentel�s eilut�s klas� 1';
$lang['Tr_class2'] = 'Lentel�s eilut�s klas� 2';
$lang['Tr_class3'] = 'Lentel�s eilut�s klas� 3';
$lang['Th_color1'] = 'Lentel�s vir�aus (header) spalva 1';
$lang['Th_color2'] = 'Lentel�s vir�aus (header) spalva 2';
$lang['Th_color3'] = 'Lentel�s vir�aus (header) spalva 3';
$lang['Th_class1'] = 'Lentel�s vir�aus (header) klas� 1';
$lang['Th_class2'] = 'Lentel�s vir�aus (header) klas� 2';
$lang['Th_class3'] = 'Lentel�s vir�aus (header) klas� 3';
$lang['Td_color1'] = 'Lentel�s cel�s spalva 1';
$lang['Td_color2'] = 'Lentel�s cel�s spalva 2';
$lang['Td_color3'] = 'Lentel�s cel�s spalva 3';
$lang['Td_class1'] = 'Lentel�s cel�s klas� 1';
$lang['Td_class2'] = 'Lentel�s cel�s klas� 2';
$lang['Td_class3'] = 'Lentel�s cel�s klas� 3';
$lang['fontface1'] = '�riftas 1';
$lang['fontface2'] = '�riftas 2';
$lang['fontface3'] = '�riftas 3';
$lang['fontsize1'] = '�rifto dydis 1';
$lang['fontsize2'] = '�rifto dydis 2';
$lang['fontsize3'] = '�rifto dydis 3';
$lang['fontcolor1'] = '�rifto spalva 1';
$lang['fontcolor2'] = '�rifto spalva 2';
$lang['fontcolor3'] = '�rifto spalva 3';
$lang['span_class1'] = 'Tarpo (span) klas� 1';
$lang['span_class2'] = 'Tarpo (span) klas� 2';
$lang['span_class3'] = 'Tarpo (span) klas� 3';
$lang['img_poll_size'] = 'Apklausos paveiksl�li� dydis [piksel.]';
$lang['img_pm_size'] = 'Priva�i� �inu�i� paveiksl�lio dydis [piksel.]';


//
// Install Process
//
$lang['Welcome_install'] = 'Sveiki atvyk� � phpBB �diegimo puslap�';
$lang['Initial_config'] = 'Pagrindiniai nustatymai';
$lang['DB_config'] = 'Duomen� baz�s nustatymai';
$lang['Admin_config'] = 'Administraciniai nustatymai';
$lang['continue_upgrade'] = 'Kai tik atsisi�site sen� konfig�racin� fail� spauskite \'T�sti atnaujinim�\' mygtuk�. �� fail� tur�site nusi�sti atgal � server� kai tik atnaujinimo procesas bus baigtas.';
$lang['upgrade_submit'] = 'T�sti atnaujinim�';

$lang['Installer_Error'] = 'Diegimo metu �vyko klaida';
$lang['Previous_Install'] = 'Aptiktas senas �diegimo procesas';
$lang['Install_db_error'] = 'Atnaujinant duomen� baz� �vyko klaida';

$lang['Re_install'] = 'J�s nebaig�te ankstesnio �diegimo proceso. <br /><br />Jeigu norite �diegti phpBB 2 i� naujo, paspauskite mygtuk� Yes apa�ioje. �sid�m�kite kad taip j�s sunaikinsite visus senus duomenis, bei nustatymus.<br /><br />Prie� paspausdami Yes dar kart� pagalvokite ar teisingai elgiat�s!';

$lang['Inst_Step_0'] = 'D�kojame kad naudojat�s phpBB 2. U�pildykite �emiau esan�ius laukus. �sid�m�kite, kad duomen� baz� � kuri� diegiate jau turi egzistuoti. Jeigu naudojate ODBC, pvz. MS Access, pats metas b�t� sukurti DSN savo duomen� bazei.';

$lang['Start_Install'] = 'Prad�ti �diegim�';
$lang['Finish_Install'] = 'Pabaigti �diegim�';

$lang['Default_lang'] = 'Pagrindin� diskusij� lentos kalba';
$lang['DB_Host'] = 'Duomen� baz�s serveris (DSN)';
$lang['DB_Name'] = 'Duomen� baz�s pavadinimas';
$lang['DB_Username'] = 'Duombaz�s vartotojo vardas';
$lang['DB_Password'] = 'Duombaz�s slapta�odis';
$lang['Database'] = 'Duomen� baz�';
$lang['Install_lang'] = 'Pasirinkite �diegimo kalb�';
$lang['dbms'] = 'Duomen� baz�s tipas';
$lang['Table_Prefix'] = 'Duomen� baz�s lenteli� prefiksas';
$lang['Admin_Username'] = 'Administratoriaus vartotojo vardas';
$lang['Admin_Password'] = 'Administratoriaus slapta�odis';
$lang['Admin_Password_confirm'] = 'Administratoriaus slapta�odis [ dar kart� ]';

$lang['Inst_Step_2'] = 'Administratoriaus vartotojo vardas sukurtas. Pagrindini� parametr� diegimas baigtas. Dabar galite pakeisti kai kuriuos papildomus pagrindinius parametrus. D�kojame kad naudojat�s phpBB 2.';

$lang['Unwriteable_config'] = 'J�s� konfig�racijos failas yra tik skaitymui. Paspaud� mygtuk� apa�ioje galite atsisi�sti jo kopij�. J�s turite nusi�sti j� � phpBB 2 pagrindin� katalog�. Tai padar� prisijunkite su administratoriaus slapta�od�iu prie diskusij� lentos ir aplankykite administratoriaus meniu, kur gal�site pakeisti kai kuriuos papildomus nustatymus. D�kojame kad naudojat�s phpBB 2.';
$lang['Download_config'] = 'Atsisi�sti konfig�racin� fail�';

$lang['ftp_choose'] = 'Pasirinkite atsisiuntimo b�d�';
$lang['ftp_option'] = '<br />Kadangi �ioje PHP versijoje yra �jungti FTP pl�tiniai, galite pabandyti automati�kai nusi�sti konfig�racin� fail� � jo viet�..';
$lang['ftp_instructs'] = 'J�s pasirinkote konfig�racinio failo siuntim� per FTP. U�pildykite reikiamus laukus �emiau.';
$lang['ftp_info'] = '�veskite savo FTP duomenis';
$lang['Attempt_ftp'] = 'Pabandyti nusi�sti konfig�racin� fail� � viet�';
$lang['Send_file'] = 'Tiesiog atsi�sti fail� man ir a� nusi�siu j� pats';
$lang['ftp_path'] = 'FTP kelias iki phpBB 2';
$lang['ftp_username'] = 'FTP vartotojo vardas';
$lang['ftp_password'] = 'FTP slapta�odis';
$lang['Transfer_config'] = 'Prad�ti proces�';
$lang['NoFTP_config'] = 'Nusi�sti failo nepavyko. Atsisi�skite konfig�racin� fail� ir nusi�skite j� � viet� patys.';

$lang['Install'] = '�diegti';
$lang['Upgrade'] = 'Atnaujinti';


$lang['Install_Method'] = 'Pasirinkite �diegimo b�d�';

$lang['Install_No_Ext'] = 'PHP konfig�racija nepalaiko j�s� pasirinkto duomen� baz�s tipo';

$lang['Install_No_PCRE'] = 'phpBB2 reikalauja PCRE PHP modulio. J�s� PHP konfig�racija nepalaiko �io modulio!';

//
// That's all Folks!
// -------------------------------------------------

?>