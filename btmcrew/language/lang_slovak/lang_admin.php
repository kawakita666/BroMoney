<?php
/***************************************************************************
 *                            lang_admin.php [Slovak]
 *                            ----------------------
 *     characterset         : Windows-1250
 *     begin                : 09-08-2002
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : kolenkas@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2002/08/23 19:21:43 psotfx Exp $
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
$lang['General'] = "V�eobecn�";
$lang['Users'] = "U��vatelia";
$lang['Groups'] = "Skupiny";
$lang['Forums'] = "F�rum";
$lang['Styles'] = "�t�ly";

$lang['Configuration'] = "Konfigur�cia";
$lang['Permissions'] = "Povolenia";
$lang['Manage'] = "Administr�cia";
$lang['Disallow'] = "Nepovolen� men�";
$lang['Prune'] = "Pre�istenie";
$lang['Mass_Email'] = "Hromadn� e-mail";
$lang['Ranks'] = "Hodnotenia";
$lang['Smilies'] = "Smajl�ky (emotikony)";
$lang['Ban_Management'] = "Zak�zanie vstupu";
$lang['Word_Censor'] = "Cenz�ra slov";
$lang['Export'] = "Exportova�";
$lang['Create_new'] = "Vytvori�";
$lang['Add_new'] = "Prida�";
$lang['Backup_DB'] = "Z�lohova� datab�zu";
$lang['Restore_DB'] = "Obnovi� datab�zu";


//
// Index
//
$lang['Admin'] = "Administr�cia";
$lang['Not_admin'] = "Nem�te opr�vnenie k administr�cii tohto f�ra";
$lang['Welcome_phpBB'] = "Vitajte na phpBB";
$lang['Admin_intro'] = "�akujeme, �e ste si zvolil(a) phpBB ako rie�enie pre Va�e f�rum. T�to str�nka sl��� k r�chlemu zobrazeniu r�znych �tatist�k V�ho f�ra. Pokia� sa budete chcie� vr�ti� sp� na t�to str�nku kliknite na odkaz <u>Obsah administr�cie</u> v �avom paneli. Pre n�vrat na obsah V�ho f�ra, kliknite na logo f�ra, ktor� je umiestnen� tie� na �avom paneli. Ostatn� odkazy na �avom paneli tejto str�nky V�s doved� k jednotliv�m polo�k�m mo�n�ho nastavenia f�ra pod�a Va�ich po�iadaviek, ka�d� str�nka obsahuje n�vod ako pou�i� dan� funkciu.";

$lang['Main_index'] = "Obsah f�ra";
$lang['Forum_stats'] = "�tatistiky f�ra";
$lang['Admin_Index'] = "Obsah administr�cie";
$lang['Preview_forum'] = "N�h�ad na f�rum";

$lang['Click_return_admin_index'] = "Kliknite %ssem%s pre n�vrat na obsah administr�cie";

$lang['Statistic'] = "�tatistiky";
$lang['Value'] = "Hodnota";
$lang['Number_posts'] = "Po�et pr�spevkov";
$lang['Posts_per_day'] = "Pr�spevkov za de�";
$lang['Number_topics'] = "Po�et t�m";
$lang['Topics_per_day'] = "T�m za de�";
$lang['Number_users'] = "Po�et u��vate�ov";
$lang['Users_per_day'] = "U��vate�ov za de�";
$lang['Board_started'] = "F�rum spusten�";
$lang['Avatar_dir_size'] = "Ve�kos� adres�ra s obr�zkami postavi�iek";
$lang['Database_size'] = "Ve�kos� datab�zy";
$lang['Gzip_compression'] ="GZIP kompresia";
$lang['Not_available'] = "Nedostupn�";

$lang['ON'] = "�no"; // This is for GZip compression
$lang['OFF'] = "Nie";


//
// DB Utils
//
$lang['Database_Utilities'] = "Datab�zov� n�stroje";

$lang['Restore'] = "Obnovenie";
$lang['Backup'] = "Z�lohovanie";
$lang['Restore_explain'] = "T�to funkcia je ur�en� k �pln�mu obnoveniu v�etk�ch datab�zov�ch tabuliek phpBB f�ra z ulo�en�ch s�borov. Ak to V� server podporuje, m��ete pou�i� GZIP komprimovan� textov� s�bory a tie potom bud� automaticky dekomprimovan�. <b>POZOR</b> T�mto bud� prep�san� v�etky existuj�ce d�ta. Obnovenie potrebuje dlh�� �as na spracovanie, preto pros�m neodch�dzajte z tejto str�nky pokia� nebude v�etko dokon�en�.";
$lang['Backup_explain'] = "T�to funkcia je ur�en� na kompletn� z�lohu d�t phpBB f�ra. Ak pou��vate niektor� �al�ie tabu�ky spolo�ne s phpBB datab�zou, doporu�ujeme ich tie� zaz�lohova�, zadajte preto pros�m n�zvy tabuliek a odde�te ich odde�ova�om (,). Ak to V� server podporuje, m��ete pou�i� GZIP kompresiu d�t pre zmen�enie ve�kosti s�borov pred ich stiahnut�m do V�ho po��ta�a.";

$lang['Backup_options'] = "Nastavenie z�lohy";
$lang['Start_backup'] = "Spusti� z�lohovanie";
$lang['Full_backup'] = "Kompletn� z�loha";
$lang['Structure_backup'] = "Z�lohova� len �trukt�ru";
$lang['Data_backup'] = "Z�lohova� len d�ta";
$lang['Additional_tables'] = "�al�ie tabu�ky";
$lang['Gzip_compress'] = "GZIP kompresia s�borov";
$lang['Select_file'] = "Zvoli� s�bor";
$lang['Start_Restore'] = "Spusti� obnovenie";

$lang['Restore_success'] = "Datab�za bola �spe�ne obnoven�.<br><br>Va�e f�rum by teraz malo by� v stave pred vykonan�m z�lohy.";
$lang['Backup_download'] = "Pros�m po�kajte na za�iatok s�ahovania";
$lang['Backups_not_supported'] = "�utujem, ale z�lohovanie datab�zy nie je v s��asnej dobe vo ve�om datab�zovom syst�me podporovan�";

$lang['Restore_Error_uploading'] = "Vyskytla sa chyba pri nahr�van� s�boru z�lohy";
$lang['Restore_Error_filename'] = "Vyskytol sa probl�m s menom s�boru, sk�ste in�";
$lang['Restore_Error_decompress'] = "Nebolo mo�n� dekomprimova� GZIP s�bor, pou�ite textov� s�bor";
$lang['Restore_Error_no_file'] = "Nebol nahrat� �iadny s�bor";


//
// Auth pages
//
$lang['Select_a_User'] = "Zvoli� u��vate�a";
$lang['Select_a_Group'] = "Zvoli� skupinu";
$lang['Select_a_Forum'] = "Zvoli� f�rum";
$lang['Auth_Control_User'] = "U��vate�sk� opr�vnenia";
$lang['Auth_Control_Group'] = "Opr�vnenia skupiny";
$lang['Auth_Control_Forum'] = "Opr�vnenia f�ra";
$lang['Look_up_User'] = "Zvoli� u��vate�a";
$lang['Look_up_Group'] = "Zvoli� skupinu";
$lang['Look_up_Forum'] = "Zvoli� f�rum";

$lang['Group_auth_explain'] = "Tu m��ete meni� opr�vnenia a priradi� moderovanie skupine u��vate�ov. Nezabudnite, aby pred zmenou opr�vnenia  skupina opr�vnen�ch mala st�le povolen� vstup u��vate�a na f�rum.";
$lang['User_auth_explain'] = "Tu m��ete meni� opr�vnenia a priradi� moderov�nie zvolen�mu u��vate�ovi. Nezabudnite pred zmenou opr�vnenia,,aby skupina opr�vnen�ch mala st�le povolen� vstup u��vate�a na f�rum.";
$lang['Forum_auth_explain'] = "Tu m��ete nastavi� �rove� zabezpe�enia f�ra. M��ete zvoli� z�kladn� alebo roz��ren� m�d pre t�to �innos�. Roz��ren� m�d pon�ka ove�a v��iu �k�lu mo�nost� pre nastavenie f�ra. Pam�tajte, �e pred zmenou zabezpe�enia f�ra by sa na f�re nemali vykon�va� in� oper�cie.";

$lang['Simple_mode'] = "Z�kladn� re�im";
$lang['Advanced_mode'] = "Roz��ren� re�im";
$lang['Moderator_status'] = "Moder�tor";

$lang['Allowed_Access'] = "Pr�stup povolen�";
$lang['Disallowed_Access'] = "Pr�stup zamietnut�";
$lang['Is_Moderator'] = "Je moder�torom";
$lang['Not_Moderator'] = "Nie je moder�torom";

$lang['Conflict_warning'] = "Varovanie, autoriza�n� konflikt";
$lang['Conflict_access_userauth'] = "Tento u��vate� m� po�adovan� pr�stupov� pr�va k tomuto f�re cez �lenstvo v skupine. M��ete povoli� opr�vnenie skupine alebo odstr�ni� tohto u��vate�a zo skupiny pre �pln� zabr�nenie po�adovan�ch pr�stupov�ch pr�v.";
$lang['Conflict_mod_userauth'] = "Tento moder�tor m� po�adovan� pr�va pre toto f�rum cez �lenstvo v skupine. M��ete povoli� opr�vnenie skupine alebo odstr�ni� tohto u��vate�a zo skupiny pre �pln� zabr�nenie po�adovan�ch pr�stupov�ch pr�v.";
$lang['Conflict_access_groupauth'] = "Nasledovn� u��vate� (u��vatelia) maj� po�adovan� pr�va pre toto f�rum cez ich nastaven� opr�vnenia. M��ete povoli� opr�vnenie skupine alebo odstr�ni� tohto u��vate�a zo skupiny pre �pln� zabr�nenie po�adovan�ch pr�stupov�ch pr�v.";
$lang['Conflict_mod_groupauth'] = "N�sledovn� u��vate� (u��vatelia) maj� po�adovan� pr�va pre toto f�rum cez ich nastaven� opr�vnenia. M��ete povoli� opr�vnenia skupine alebo odstr�ni� tohto u��vate�a zo skupiny pre �pln� zabr�nenie po�adovan�ch pr�stupov�ch pr�v.";

$lang['Public'] = "Verejn�";
$lang['Private'] = "S�kromn�";
$lang['Registered'] = "Registrovan�";
$lang['Administrators'] = "Administr�tor";
$lang['Hidden'] = "Skryt�";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "V�etci";
$lang['Forum_REG'] = "Registrovan�";
$lang['Forum_PRIVATE'] = "S�kromn�";
$lang['Forum_MOD'] = "Moder�tor";
$lang['Forum_ADMIN'] = "Administr�tor";

$lang['View'] = "Zobrazi�";
$lang['Read'] = "��ta�";
$lang['Post'] = "Odosla�";
$lang['Reply'] = "Odpoveda�";
$lang['Edit'] = "Upravi�";
$lang['Delete'] = "Odstr�ni�";
$lang['Sticky'] = "D�le�it�";
$lang['Announce'] = "Ozn�menia";
$lang['Vote'] = "Hlasovania";
$lang['Pollcreate'] = "Hlas pridan�";

$lang['Permissions'] = "Opr�vnenia";
$lang['Simple_Permission'] = "Z�kladn� opr�vnenie";

$lang['User_Level'] = "U��vate�sk� �rove�";
$lang['Auth_User'] = "U��vate�";
$lang['Auth_Admin'] = "Administr�tor";
$lang['Group_memberships'] = "�lenstvo u��vate�skej skupiny";
$lang['Usergroup_members'] = "T�to skupina m� nasledovn�ch �lenov";

$lang['Forum_auth_updated'] = "Opr�vnenia f�ra aktualizovan�";
$lang['User_auth_updated'] = "U��vate�sk� opr�vnenia aktualizovan�";
$lang['Group_auth_updated'] = "Opr�vnenia skupiny aktualizovan�";

$lang['Auth_updated'] = "Opr�vnenie bolo aktualizovan�";
$lang['Click_return_userauth'] = "Kliknite %ssem%s pre n�vrat do u��vate�sk�ho opr�vnenia";
$lang['Click_return_groupauth'] = "Kliknite %ssem%s pre n�vrat do opr�vnenia skupiny";
$lang['Click_return_forumauth'] = "Kliknite %ssem%s pre n�vrat do opr�vnenia f�ra";


//
// Banning
//
$lang['Ban_control'] = "Zak�zanie vstupu";

$lang['Ban_explain'] = "Tu m��ete zak�za� vstup zvolen�m u��vate�om. M��ete zak�za� konkr�tneho u��vate�a alebo rozsah IP adries alebo meno po��ta�a. Touto met�dou ochr�nite Va�e f�rum proti vstupu ne�iad�cich u��vate�ov na str�nky f�ra. Proti registr�cii u��vate�a pod in�m menom m��ete zak�za� jeho e-mailov� adresu.";
$lang['Ban_explain_warn'] = "D�vajte si pros�m pozor pri zad�van� rozsahu IP adries �i s� v�etky adresy od za�iatku do konca v zozname. Doporu�uje sa, aby bol zoznam ulo�en�ch IP adries v datab�ze �o najmen��, preto sa pok�ste rad�ej pou�i� znak \"*\" pre �pecifik�ciu namiesto zad�vania rozsahu IP adries. Pokia� je aj tak porebn� zada� rozsah IP adries, pok�ste sa aby bol zoznam �o najkrat��.";

$lang['Select_username'] = "Zvo�te u��vate�a";
$lang['Select_ip'] = "Zvo�te IP";
$lang['Select_email'] = "Zvo�te e-mailov� adresu";

$lang['Ban_username'] = "Zak�z�nie vstupu zadan�m u��vate�om";
$lang['Ban_username_explain'] = "Ak chcete prida� do zak�zan�ch niektor�ho u��vate�a, zadajte tu jeho meno, pr�padne ho vyh�adajte v zozname registrovan�ch u��vate�ov.";

$lang['Ban_IP'] = "Zak�zanie vstupu pod�a IP adresy alebo mena po��ta�a";
$lang['Ban_IP_explain'] = "Tu m��ete zada� n�zov po��ta�a, �i IP adresy, ktor�m chcete zak�za� vstup. Jednotliv� adresy �i men� od seba odde�te odde�ova�om. Ak chcete zada� rozsah IP adries, odde�te ich od seba znakom \"-\". M��ete pou�i� i znak\"*\" pre nahradenie �asti re�azca.";

$lang['IP_hostname'] = "IP adresa alebo meno po��ta�a";

$lang['Ban_email'] = "Zak�zanie vstupu pod�a e-mailov�ch adries";
$lang['Ban_email_explain'] = "Tu m��ete zada� zoznam e-mailov�ch adries, ktor�m chcete zamedzi� vstup, jednotliv� adresy od seba odde�te odde�ova�om. M��ete pou�i� i znak \"*\" pre nahradenie �asti adresy, napr. *@hotmail.com";

$lang['Unban_username'] = "Vy�atie u��vate�ov zo zoznamu zak�zan�ch";
$lang['Unban_username_explain'] = "Ak chcete vy�a� niekter�ch u��vate�ov z tohto zoznamu, ozna�te ich pomocou my�i �i kl�vesnice a potvr�te odoslan�m.";

$lang['Unban_IP'] = "Vy�atie IP adries zo zoznamu zak�zan�ch";
$lang['Unban_IP_explain'] = "Ak chcete vy�a� niektor� IP adresy z tohto zoznamu, ozna�te ich pomocou my�i �i kl�vesnice a potvr�te odoslan�m.";

$lang['Unban_email'] = "Vy�atie e-mailov�ch adries zo zoznamu zak�zan�ch";
$lang['Unban_email_explain'] = "Ak chcete vy�a� niektor� e-mailov� adresy z tohto zoznamu, ozna�te ich pomocou my�i �i kl�vesnice a potvr�te odoslan�m.";

$lang['No_banned_users'] = "�iadni zak�zan� u��vatelia";
$lang['No_banned_ip'] = "�iadne zak�zan� IP adresy";
$lang['No_banned_email'] = "�iadne zak�zan� e-mail adresy";

$lang['Ban_update_sucessful'] = "Zoznam zak�zan�ch u��vate�ov bol �spe�ne aktualizovan�";
$lang['Click_return_banadmin'] = "Kliknite %ssem%s pre n�vrat do ovl�dacieho panelu zak�zanie vstupu";


//
// Configuration
//
$lang['General_Config'] = "Konfigur�cia";
$lang['Config_explain'] = "Ni��ie uveden� polo�ky V�m umo�nia nastavi� f�rum pod�a Va�ich po�iadaviek. Pre nastavenie u��vate�ov f�ra pou��vajte odkazy v �avej �asti str�nky.";

$lang['Click_return_config'] = "Kliknite %ssem%s pre n�vrat do konfigur�cie";

$lang['General_settings'] = "V�eobecn� nastavenie f�ra";
$lang['Server_name'] = "Meno dom�ny";
$lang['Server_name_explain'] = "Dom�nov� meno tohto f�ra be�� na";
$lang['Script_path'] = "Cesta ku skriptom";
$lang['Script_path_explain'] = "Cesta ku skriptom phpBB, relat�vne umiestnenie v dom�ne";
$lang['Server_port'] = "Port servera";
$lang['Server_port_explain'] = "Port, na ktorom be�� V� server, �tandardne 80";
$lang['Site_name'] = "Meno f�ra";
$lang['Site_desc'] = "Popis f�ra";
$lang['Board_disable'] = "Zablokova� f�rum";
$lang['Board_disable_explain'] = "T�mto znepr�stupn�te f�rum pre u��vate�ov. Neodhlasujte sa pokia� ste znepr�stupnil f�rum, inak sa nebudete m�c� nalogova� sp�!";

$lang['Acct_activation'] = "Sp�sob aktiv�cie ��tu";
$lang['Acc_None'] = "�iadny"; // These three entries are the type of activation
$lang['Acc_User'] = "U��vate�om";
$lang['Acc_Admin'] = "Administr�torom";

$lang['Abilities_settings'] = "Z�kladn� nastavenie pre u��vate�a a f�rum";
$lang['Max_poll_options'] = "Maxim�lna hodnota pri hlasovan�";
$lang['Flood_Interval'] = "Ochrann� interval";
$lang['Flood_Interval_explain'] = "Po�et sek�nd, po�as ktor�ch mus� u��vate� po�ka� medzi pr�spevkami";
$lang['Board_email_form'] = "E-mail u��vate�a cez toto f�rum";
$lang['Board_email_form_explain'] = "Umo��uje zasielanie e-mailov in�m u��vate�om cez toto f�rum";
$lang['Topics_per_page'] = "T�m na str�nku";
$lang['Posts_per_page'] = "Pr�spevkov na str�nku";
$lang['Hot_threshold'] = "Pr�spevky do pr�pustnej hranice";
$lang['Default_style'] = "V�chodz� vzh�ad";
$lang['Override_style'] = "Nahradi� u��vate�om zvolen� vzh�ad";
$lang['Override_style_explain'] = "Pou�ije v�chodz� vzh�ad namiesto zvolen�ho u��vate�om";
$lang['Default_language'] = "V�chodz� jazyk";
$lang['Date_format'] = "Form�t d�tumu";
$lang['System_timezone'] = "�asov� p�smo f�ra";
$lang['Enable_gzip'] = "Povoli� GZIP kompresiu";
$lang['Enable_prune'] = "Povoli� pre�istenie f�ra";
$lang['Allow_HTML'] = "Povoli� HTML";
$lang['Allow_BBCode'] = "Povoli� zna�ky";
$lang['Allowed_tags'] = "Povolen� HTML zna�ky";
$lang['Allowed_tags_explain'] = "Odde�te zna�ky odde�ova�om (,)";
$lang['Allow_smilies'] = "Povoli� smajl�ky (emotikony)";
$lang['Smilies_path'] = "Cesta k umiestneniu smajl�kov";
$lang['Smilies_path_explain'] = "Cesta mimo V� phpBB kme�ov� adres�r, pr.: images/smilies";
$lang['Allow_sig'] = "Povoli� podpisy";
$lang['Max_sig_length'] = "Maxim�lna d�ka podpisu";
$lang['Max_sig_length_explain'] = "Maxim�lny po�et znakov u��vate�ovho podpisu";
$lang['Allow_name_change'] = "Povoli� zmenu u��vate�sk�ho mena";

$lang['Avatar_settings'] = "Nastavenia obr�zkov postavi�iek";
$lang['Allow_local'] = "Povoli� gal�riu postavi�iek";
$lang['Allow_remote'] = "Povoli� vzdialen� obr�zky postavi�iek";
$lang['Allow_remote_explain'] = "Obr�zok postavi�ky prepojen� na in� WWW server";
$lang['Allow_upload'] = "Povoli� prihr�vanie obr�zkov postavi�iek";
$lang['Max_filesize'] = "Maxim�lna ve�kos� s�boru s obr�zkom postavi�ky";
$lang['Max_filesize_explain'] = "Pre prihr�vanie s�borov obr�zkov postavi�iek";
$lang['Max_avatar_size'] = "Maxim�lne rozmery obr�zku postavi�ky";
$lang['Max_avatar_size_explain'] = "(v��ka x ��rka v bodoch)";
$lang['Avatar_storage_path'] = "Cesta na ukladanie obr�zkov postavi�iek";
$lang['Avatar_storage_path_explain'] = "Cesta mimo V� phpBB kme�ov� adres�r, pr.: images/avatars";
$lang['Avatar_gallery_path'] = "Cesta ku gal�rii obr�zkov postavi�iek";
$lang['Avatar_gallery_path_explain'] = "Cesta mimo V� phpBB kme�ov� adres�r pre prednastaven� obr�zky, pr.:images/avatars/gallery";

$lang['COPPA_settings'] = "COPPA nastavenia";
$lang['COPPA_fax'] = "COPPA faxov� ��slo";
$lang['COPPA_mail'] = "COPPA e-mailov� adresy";
$lang['COPPA_mail_explain'] = "Toto je zoznam adries na ktor� bud� rodi�ia zasiela� COPPA registra�n� formul�r";

$lang['Email_settings'] = "Nastavenia e-mailov";
$lang['Admin_email'] = "Administr�torova e-mailov� adresa:";
$lang['Email_sig'] = "Podpis e-mailu";
$lang['Email_sig_explain'] = "Tento text bude pripojen� ku v�etk�m e-mailom odoslan�m z tohto f�ra";

$lang['Use_SMTP'] = "Pou�i� SMTP Server pre e-mail";
$lang['Use_SMTP_explain'] = "Zvo�te �no ak chcete odosiela� e-maily cez meno servra namiesto lok�lnej mail funkcie.";
$lang['SMTP_server'] = "Adresa SMTP servera";
$lang['SMTP_username'] = "SMTP ��et";
$lang['SMTP_username_explain'] = "Zadajte len v pr�pade, �e to V� SMTP server vy�aduje";
$lang['SMTP_password'] = "SMTP heslo";
$lang['SMTP_password_explain'] = "Zadajte len v pr�pade, �e to V� SMTP server vy�aduje";

$lang['Disable_privmsg'] = "S�kromn� zpr�vy";
$lang['Inbox_limits'] = "Max. po�et pr�spevkov v zlo�ke doru�en�";
$lang['Sentbox_limits'] = "Max. po�et pr�spevkov v zlo�ke odoslan�";
$lang['Savebox_limits'] = "Max. po�et pr�spevkov v zlo�ke ulo�en�";

$lang['Cookie_settings'] = "Nastaven� Cookie";
$lang['Cookie_settings_explain'] = "Toto detailn� nastavenie definuje ako bud� zasielan� cookies vo Va�om prehliada�i. Doporu�ujeme ponecha� v�chodzie hodnoty nastaven� cookie ale je mo�n� zmeni� hodnoty pod�a Va�ich po�iadaviek, nastavenie sa prejev� a� po novom prihl�sen�.";
$lang['Cookie_domain'] = "Dom�na Cookie";
$lang['Cookie_name'] = "Meno Cookie";
$lang['Cookie_path'] = "Cesta k Cookie";
$lang['Cookie_secure'] = "Zabezpe�enie Cookie";
$lang['Cookie_secure_explain'] = "Ak v� server be�� cez SSL nastavte na povolen�, ak nie tak nastavte zak�zan�";
$lang['Session_length'] = "D�ka platnosti Session [ sek�nd ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Administr�cia f�ra";
$lang['Forum_admin_explain'] = "Z tohto panelu m��ete prid�va�, odstr�ni�, upravova�, triedi� a synchronizova� kateg�rie f�ra";
$lang['Edit_forum'] = "�prava f�ra";
$lang['Create_forum'] = "Vytvori� nov� f�rum";
$lang['Create_category'] = "Vytvori� nov� kateg�riu";
$lang['Remove'] = "Vy�a�";
$lang['Action'] = "Akcia";
$lang['Update_order'] = "Aktualizova� instrukcie";
$lang['Config_updated'] = "Zmena konfigur�cie f�ra bola �spe�ne dokon�en�";
$lang['Edit'] = "Upravi�";
$lang['Delete'] = "Odstr�ni�";
$lang['Move_up'] = "presun�� hore";
$lang['Move_down'] = "presun�� dole";
$lang['Resync'] = "Synchronizova�";
$lang['No_mode'] = "M�d nebol priraden�";
$lang['Forum_edit_delete_explain'] = "Ni��ie uveden� formul�r V�m umo�n� �pravy v�eobecn�ch nastaven� f�ra. Pre nastavenia u��vate�ov a f�ra pou��vajte odkazy v �avej �asti str�nky.";

$lang['Move_contents'] = "Presun�� cel� obsah";
$lang['Forum_delete'] = "Odstr�ni� f�rum";
$lang['Forum_delete_explain'] = "Ni��ie uveden� formul�r V�m umo�n� odstr�ni� f�ra �i kateg�rie a rozhodn�� kam chcete da� v�etky t�my, kter� s� v �om obsiahnut�.";

$lang['Forum_settings'] = "V�eobecn� nastavenia f�ra";
$lang['Forum_name'] = "Meno f�ra";
$lang['Forum_desc'] = "Popis";
$lang['Forum_status'] = "Stav f�ra";
$lang['Forum_pruning'] = "Automatick� pre�istenie";

$lang['prune_freq'] = "Kontrolova� star�ie t�my ka�d�ch";
$lang['prune_days'] = "Odstr�ni� t�my ktor� s� star�ie";
$lang['Set_prune_data'] = "Chcete nastavi� povolenie automatick�ho pre�istenia tohto f�ra, ale nem�te nastaven� po�etnos� alebo po�et dn�. Vr�te sa pros�m sp� a zadajte po�adovan� hodnoty.";

$lang['Move_and_Delete'] = "Presun�� a odstr�ni�";

$lang['Delete_all_posts'] = "Odstr�ni� v�etky pr�spevky";
$lang['Nowhere_to_move'] = "Sem sa to ned� presun��";

$lang['Edit_Category'] = "�prava kateg�rie";
$lang['Edit_Category_explain'] = "Pou�ite tento formul�r pre �pravu mena kateg�rie.";

$lang['Forums_updated'] = "F�rum a inform�cie o skupine boli aktualizovan�";

$lang['Must_delete_forums'] = "Mus�te odstr�ni� v�etky f�ra e�te pred odstr�nen�m tejto kateg�rie";

$lang['Click_return_forumadmin'] = "Kliknite %ssem%s pre n�vrat do administr�cie f�ra";


//
// Smiley Management
//
$lang['smiley_title'] = "�prava smajl�kov (emotikon)";
$lang['smile_desc'] = "Na tejto str�nke m��ete prid�va�, odobera� a upravova� smajl�ky (emotikony), ktor� m��u Va�i u��vatelia pou��va� v pr�spevkoch a s�kromn�ch spr�vach.";

$lang['smiley_config'] = "Nastavenia smajl�kov";
$lang['smiley_code'] = "K�d smajl�ka";
$lang['smiley_url'] = "Grafick� s�bor smajl�ka";
$lang['smiley_emot'] = "V�raz smajl�ka";
$lang['smile_add'] = "Pridaj nov� smajl�k";
$lang['Smile'] = "Smajl�k";
$lang['Emotion'] = "V�raz";

$lang['Select_pak'] = "Vyberte (.pak) s�bor";
$lang['replace_existing'] = "Nahradi� doteraj�� smajl�k";
$lang['keep_existing'] = "Ponecha� existuj�ci smajl�k";
$lang['smiley_import_inst'] = "Rozba�te kolekciu smajl�kov a nahrajte v�etky s�bory do pr�slu�n�ho adres�ra smajl�kov pre in�tal�ciu.  Potom vyberte spr�vnu inform�ciu v tomto formul�ri k importovaniu kolekcie smajl�kov.";
$lang['smiley_import'] = "Import kolekcie smajl�kov";
$lang['choose_smile_pak'] = "Vyberte s�bor smajl�kov (.pak)";
$lang['import'] = "Importuj smajl�kov";
$lang['smile_conflicts'] = "Co urobi� v pr�pade konfliktov ?";
$lang['del_existing_smileys'] = "Pred importovan�m zma�te doteraj��ch smajl�kov";
$lang['import_smile_pack'] = "Importova� kolekciu smajl�kov";
$lang['export_smile_pack'] = "Vytvori� kolekciiu smajl�kov";
$lang['export_smiles'] = "Pokia� chcete vytvori� kolekciu smajl�kov z dosia� pou��van�ch smajl�kov, kliknite %ssem%s a stiahnite s�bor smiles.pak. Pomenujte tento pr�slu�n� s�bor, ale nezabudnite zachova� pr�ponu (.pak). Potom vytvorte komprimovan� s�bor v�etk�ch Va�ich smajl�kov aj s Va�im s�borom nastaven� .pak";

$lang['smiley_add_success'] = "Smajl�k bol �spe�ne pridan� !";
$lang['smiley_edit_success'] = "Smajl�k bol �spe�ne zmenen� !";
$lang['smiley_import_success'] = "S�bor smajl�kov bol �spe�ne importovan� !";
$lang['smiley_del_success'] = "Smajl�k bol �spe�ne odstr�nen�";
$lang['Click_return_smileadmin'] = "Kliknite %ssem%s pre n�vrat do administr�cie smajl�kov";


//
// User Management
//
$lang['User_admin'] = "U��vate�sk� administr�cia";
$lang['User_admin_explain'] = "Tu m��ete zmeni� inform�ciu o u��vate�ovi a niektor� �pecifick� nastavenia. K �prave pr�v pou�ite u��vate�a a skupinov� povo�ovac� syst�m.";

$lang['Look_up_user'] = "Zvoli� u��vate�a";

$lang['Admin_user_fail'] = "Nie je mo�n� zmeni� nastavenia u��vate�a.";
$lang['Admin_user_updated'] = "Zmena nastaven� u��vate�a prebehla �spe�ne.";
$lang['Click_return_useradmin'] = "Kliknite %ssem%s pre n�vrat do U��vate�skej administr�cie";

$lang['User_delete'] = "Odstr�ni� tohto u��vate�a";
$lang['User_delete_explain'] = "Tu zma�ete tohto u��vate�a. Nemo�no vzia� sp� !";
$lang['User_deleted'] = "U��vate� �spe�ne odstr�nen�.";

$lang['User_status'] = "U��vate� je akt�vny";
$lang['User_allowpm'] = "M��e posiela� s�kromn� spr�vy";
$lang['User_allowavatar'] = "M��e zobrazova� postavi�ky";

$lang['Admin_avatar_explain'] = "Tu m��ete vidie� a odstr�ni� s��asn� u��vate�ovu postavi�ku.";

$lang['User_special'] = "Zvl�tne oblasti administr�torsk�ch nastaven�";
$lang['User_special_explain'] = "Tieto oblasti nem��u by� upravovan� u��vate�mi. Tu m��ete nastavi� ich zaradenie a �al�ie oblasti, ktor� nie s� u��vate�om priraden�.";



//
// Group Management
//
$lang['Group_administration'] = "Skupinov� administr�cia";
$lang['Group_admin_explain'] = "Z tohto panelu m��ete spravova� v�etky u��vate�sk� skupiny, m��ete odstr�ni�, vytvori� a meni� s��asn� skupiny, m��ete vybera� moder�torov, zamkn�� otvoren�/uzavret� skupiny a nastavi� meno a popis skupiny";
$lang['Error_updating_groups'] = "Pri nahr�v�n� skup�n do�lo k chybe";
$lang['Updated_group'] = "Skupina bola �spe�ne nahrat�";
$lang['Added_new_group'] = "Nov� skupina bola �spe�ne vytvoren�";
$lang['Deleted_group'] = "Skupina bola �spe�ne odstr�nen�";
$lang['New_group'] = "Vytvori� nov� skupinu";
$lang['Edit_group'] = "Zmeni� skupinu";
$lang['group_name'] = "Meno skupiny";
$lang['group_description'] = "Popis skupiny";
$lang['group_moderator'] = "Moder�tor skupiny";
$lang['group_status'] = "Nastavenia skupiny";
$lang['group_open'] = "Otvoren� skupina";
$lang['group_closed'] = "Uzavret� skupina";
$lang['group_hidden'] = "Skryt� skupina";
$lang['group_delete'] = "odstr�ni� skupinu";
$lang['group_delete_check'] = "odstr�ni� t�to skupinu";
$lang['submit_group_changes'] = "Odosla� zmeny";
$lang['reset_group_changes'] = "Obnovi� zmeny";
$lang['No_group_name'] = "Mus�te zada� meno pre t�to skupinu";
$lang['No_group_moderator'] = "Mus�te zada� moder�tora pre t�to skupinu";
$lang['No_group_mode'] = "Mus�te zada� nastavenie tejto skupiny, otvoren� alebo uzavret�.";
$lang['No_group_action'] = "Nebola vybrat� �iadna akcia";
$lang['delete_group_moderator'] = "odstr�ni� moder�tora p�vodnej skupiny ?";
$lang['delete_moderator_explain'] = "Pokia� men�te moder�tora skupiny, za�krtnite toto pol��ko k odstr�neniu p�vodn�ho moder�tora z tejto skupiny.  V opa�nom pr�pade sa tento u��vate� stane be�n�m �lenom tejto skupiny.";
$lang['Click_return_groupsadmin'] = "Kliknite %ssem%s pre n�vrat do Skupinovej administr�cie.";
$lang['Select_group'] = "Vyberte skupinu";
$lang['Look_up_group'] = "Vyh�adajte skupinu";


//
// Prune Administration
//
$lang['Forum_Prune'] = "Pre�istenie f�ra";
$lang['Forum_Prune_explain'] = "T�to funkcia odstr�ni v�etky t�my, ku ktor�m neboli pridan� pr�spevky za Vami zadan� po�et dn�. Pokia� nezad�te po�et dn�, potom bud� odstr�nen� v�etky t�my. Nebud� odstr�nen� t�my, v ktor�ch be�� hlasovanie a rovnako tak sa neodstr�nia ozn�menia. Tieto t�my budete musie� odstr�ni� ru�ne.";
$lang['Do_Prune'] = "Pre�isti�";
$lang['All_Forums'] = "V�etky f�ra";
$lang['Prune_topics_not_posted'] = "Pre�isti� t�my bez odpovede star�ie";
$lang['Topics_pruned'] = "T�my pre�isten�";
$lang['Posts_pruned'] = "Pr�spevky pre�isten�";
$lang['Prune_success'] = "Pre�istenie f�r prebehlo �spe�ne.";


//
// Word censor
//
$lang['Words_title'] = "Slovn� cenz�ra";
$lang['Words_explain'] = "Z tohto kontroln�ho panelu m��ete prida�, zmeni� a odstr�ni� slov�, ktor� bud� automaticky cenzurovan� na Va�ich f�rach. Rovnako tak nebude mo�n� zaregistrova� u��vate�sk� men� obsahuj�ce tieto v�razy. Hviezdi�ku (*) je mo�n� pou�i� za �as� slova, tak�e napr. v�raz 'test' vyh�ad� v�raz 'protestova�', test* potom 'testova�' a *test slovo 'protest'.";
$lang['Word'] = "Slovo";
$lang['Edit_word_censor'] = "Zmeni� slovn� cenz�ru";
$lang['Replacement'] = "N�hrada";
$lang['Add_new_word'] = "Pridajte nov� slovo";
$lang['Update_word'] = "Nahrajte slovn� cenz�ru";

$lang['Must_enter_word'] = "Mus�te vlo�i� slovo a jeho n�hradu";
$lang['No_word_selected'] = "K �prave nebolo vybrat� �iadne slovo";

$lang['Word_updated'] = "Vybrat� slovo bolo �spe�ne nahrat� do cenz�ry";
$lang['Word_added'] = "Slovo bolo �spe�ne pridan� do cenz�ry";
$lang['Word_removed'] = "Cenz�rovan� slovo bolo �spe�ne odstr�nen�";

$lang['Click_return_wordadmin'] = "Kliknite %ssem%s pre n�vrat do Administr�cie slovnej cenz�ry";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Odtia�to m��ete posla� spr�vu ak�muko�vek u��vate�ovi alebo v�etk�m z vybratej skupiny. Stane sa tak zaslat�m e-mailu na zadan� administr�torsk� adresu, pri�om u��vate�om bude zaslat� slep� k�pia. Pokia� posielate spr�vu v��ej skupine, pros�m, majte chv�ku strpenia a nezastavujte akciu, ke� sa vykon�va. Je celkom be�n�, �e hromadn� kore�pondencia trv� dlh�iu dobu a budete upozornen�, ke� sa akcia dokon��";
$lang['Compose'] = "Nap�sa�";

$lang['Recipients'] = "Pr�jemcovia";
$lang['All_users'] = "V�etci u��vatelia";

$lang['Email_successfull'] = "Va�a spr�va bola odoslan�";
$lang['Click_return_massemail'] = "Kliknite %ssem%s pre n�vrat na formul�r Hromadnej kore�pondencie";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administr�cia hodnoten�";
$lang['Ranks_explain'] = "T�mto formul�rom prid�vate, men�te, prehliadate a ma�ete hodnotenia. M��ete tie� vytvori� vlastn� nastavenia hodnoten�, ktor� m��u by� priraden� cez funkcie nastaven� u��vate�a.";

$lang['Add_new_rank'] = "Prida� nov� hodnotenie";

$lang['Rank_title'] = "N�zov hodnotenia";
$lang['Rank_special'] = "Nastavi� ako zvl�tne hodnotenie";
$lang['Rank_minimum'] = "Minim�lny po�et pr�spevkov";
$lang['Rank_maximum'] = "Maxim�lny po�et pr�spevkov";
$lang['Rank_image'] = "Obr�zok hodnotenia";
$lang['Rank_image_explain'] = "Pou�ite t�to funkciu na definovanie mal�ho obr�zku spojen�ho s dan�m hodnoten�m. Cesta mimo V� phpBB kme�ov� adres�r a n�zov s�boru, pr.: images/ranks/images1.gif";

$lang['Must_select_rank'] = "Mus�te vybra� hodnotenie";
$lang['No_assigned_rank'] = "Nebolo zadan� �iadne zvl�tne hodnotenie";

$lang['Rank_updated'] = "Hodnotenie bolo �spe�ne zmenen�";
$lang['Rank_added'] = "Hodnotenie bolo �spe�ne pridan�";
$lang['Rank_removed'] = "Hodnotenie bolo �spe�ne zru�en�";
$lang['No_update_ranks'] = "Hodnotenie bolo �spe�ne odstr�nen�, av�ak u��vate�sk� ��ty spojen� s t�mto hodnoten�m sa nezmenili. Bude potrebn� toto hodnotenie upravi� ru�ne";

$lang['Click_return_rankadmin'] = "Kliknite %ssem%s pre n�vrat do Administr�cia hodnocen�";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Spr�va nepovolen�ch u��vate�sk�ch mien";
$lang['Disallow_explain'] = "Tu m��ete spravova� u��vate�sk� men�, ktor� nebud� povoloen� k pou�itiu. Nepovolen� u��vate�sk� men� m��u obsahova� \*\.  Upozor�ujeme, �e nebudete m�c� ur�i� u� zaregistrovan� u��vate�sk� meno. Najsk�r ho mus�te odstr�ni� a n�sledne ho nepovoli�";

$lang['Delete_disallow'] = "odstr�ni�";
$lang['Delete_disallow_title'] = "odstr�ni� nepovolen� u��vate�sk� meno";
$lang['Delete_disallow_explain'] = "m��ete odstr�ni� nepovolen� u��vate�sk� meno tak, �e ho vyberiete zo zoznamu a stla�te tla��tko odstr�ni�";

$lang['Add_disallow'] = "Prida�";
$lang['Add_disallow_title'] = "Prida� nepovolen� u��vate�sk� meno";
$lang['Add_disallow_explain'] = "M��ete zak�za� niektor� nepovolen� u��vate�sk� men�. Tieto men� si nebude m�c� �iadny u��vate� zaregistrova�. M��ete pou�� aj znak \"*\" pre nahradenie �asti mena";

$lang['No_disallowed'] = "�iadne nepovolen� u��vate�sk� men�";

$lang['Disallowed_deleted'] = "Nepovolen� u��vate�sk� meno bolo �spe�ne odstr�nen�";
$lang['Disallow_successful'] = "Nepovolen� u��vate�sk� meno bolo �spe�ne priden�";
$lang['Disallowed_already'] = "Meno, ktor� ste zadali, nem��e by� zak�zan�. Bu� sa u� vyskytuje v tomto zozname alebo v zozname cenz�rovan�ch slov, alebo existuje rovnak� u��vate�sk� meno";

$lang['Click_return_disallowadmin'] = "Kliknite %ssem%s pre n�vrat do Administr�cie nastaven� nepovolen�ch u��vate�sk�ch mien";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administr�cia �t�lov";
$lang['Styles_explain'] = "Tu m��ete prid�va�, odobera� a spravova� �t�ly (vzory a mot�vy) dostupn� pre Va�ich u��vate�ov";
$lang['Styles_addnew_explain'] = "Tento zoznam obsahuje v�etky mot�vy, kter� s� dostupn� pre vzory, ktor� nyn�mate. �asti na tomto zozname e�te neboli nain�talovan� do zodpovedaj�cej datab�zy phpBB. Pre nain�talovanie kliknite na in�tala�n� odkaz ved�a zadania";

$lang['Select_template'] = "Vybra� vzor";

$lang['Style'] = "�t�l";
$lang['Template'] = "Vzor";
$lang['Install'] = "Nain�talova�";
$lang['Download'] = "Stiahnu�";

$lang['Edit_theme'] = "Upravi� mot�v";
$lang['Edit_theme_explain'] = "V spodnom formul�ri m��ete upravova� nastavenia pre zvolen� vzor";

$lang['Create_theme'] = "Vytvori� mot�v";
$lang['Create_theme_explain'] = "V spodnom formul�ri m��ete vytvori� nov� mot�v. Pri zad�v�n� farieb (pre ktor� pou�ijete hexadecim�lne hodnoty) neuv�dzajte znak #, tzn. hodnota CCCCCC je platn�, #CCCCCC nie";

$lang['Export_themes'] = "Exportova� mot�vy";
$lang['Export_explain'] = "V tomto paneli m��ete exportova� zadanie mot�vu pre zvolen� vzor. Vyberte vzor zo spodn�ho v�beru a skript vytvor� konfigura�n� s�bor pre mot�v a bude ho chcie� ulo�i� do vybrat�ho adres�ra vzorov. Pokia� sa mu to nepodar�, pon�kne V�m mo�nos� s�bor stiahnu� na disk. Aby sa mohol s�bor ulo�i�, je potrebn�, aby bol povolen� pr�stup na z�pis pre pr�slu�n� adres�r. Pre viac inform�ci� si pozrite u��vate�sk� manu�l k phpBB 2.";
$lang['Theme_installed'] = "Vybrat� mot�v bol �spe�ne nain�talovan�";
$lang['Style_removed'] = "Vybrat� �t�l bol odstr�nen� z datab�zy. K pln�mu odstr�neniu tohto st�lu zo syst�mu mus�te odstr�ni� pr�slu�n� st�l z adres�ra vzorov.";
$lang['Theme_info_saved'] = "Inform�cie k zvolen�mu vzoru boli ulo�en�. Teraz nastavte povolenie na theme_info.cfg (a tie� vybrat�ho adres�ra vzorov) na 'len na ��tanie'";
$lang['Theme_updated'] = "Vybrat� mot�v bol zmenen�. Vyexportujte teraz nastavenia nov�ho mot�vu";
$lang['Theme_created'] = "Mot�v vytvoren�. Vyexportujte teraz nov� mot�v do konfigura�n�ho s�boru kv�li bezpe�n�mu ulo�eniu alebo pou�itiu pre in� pr�pady";

$lang['Confirm_delete_style'] = "Ste si ist�, �e chcete odstr�ni� tento �t�l ?";

$lang['Download_theme_cfg'] = "Nie je mo�n� zapisova� do konfigura�n�ho s�boru. Kliknite na spodn� tla��tko na sttiahnutie s�boru Va�im prehliada�om. A� ho stiahnete, m��ete ho presun�� do adres�ra obsahuj�ceho s�bory vzorov. Potom m��ete zabali� s�bory pre distrib�ciu alebo pou�i� inde, ke� chcete";
$lang['No_themes'] = "Ku vzoru, ktor� ste vybrali, sa nevia�u �iadne mot�vy. Nov� mot�v vytvor�te kliknut�m na 'Vytvori� nov�' na �avej strane panelu";
$lang['No_template_dir'] = "Nie je mo�n� otvori� adres�r so vzormi. Mo�n� je, �e ho sa ned� cez server ��ta� alebo neexistuje";
$lang['Cannot_remove_style'] = "Nie je mo�n� odstr�ni� vybrat� �t�l, ak je ur�en� ako p�vodn� pre f�rum. Zme�te, pros�m, p�vodn� st�l a sk�ste to znova.";
$lang['Style_exists'] = "Meno st�lu u� existuje. Pros�m vr�te sa sp� a zvo�te in� meno.";

$lang['Click_return_styleadmin'] = "Kliknete %ssem%s pre n�vrat do Administr�cie �t�lov";

$lang['Theme_settings'] = "Nastavenia mot�vu";
$lang['Theme_element'] = "S��as� vzoru";
$lang['Simple_name'] = "Jednoduch� n�zov";
$lang['Value'] = "Hodnota";
$lang['Save_Settings'] = "Ulo� nastavenia";

$lang['Stylesheet'] = "Zadanie �t�lu CSS";
$lang['Background_image'] = "Obr�zok pozadia";
$lang['Background_color'] = "Farba pozadia";
$lang['Theme_name'] = "Meno mot�vu";
$lang['Link_color'] = "Farba odkazu";
$lang['Text_color'] = "Farba textu";
$lang['VLink_color'] = "Farba nav�t�ven�ho odkazu";
$lang['ALink_color'] = "Farba akt�vneho odkazu";
$lang['HLink_color'] = "Hover Link Colour";
$lang['Tr_color1'] = "Farba riadku tabu�ky 1";
$lang['Tr_color2'] = "Farba riadku tabu�ky 2";
$lang['Tr_color3'] = "Farba riadku tabu�ky 3";
$lang['Tr_class1'] = "Trieda riadku tabu�ky 1";
$lang['Tr_class2'] = "Trieda riadku tabu�ky 2";
$lang['Tr_class3'] = "Trieda riadku tabu�ky 3";
$lang['Th_color1'] = "Farba titulu tabu�ky 1";
$lang['Th_color2'] = "Farba titulu tabu�ky 2";
$lang['Th_color3'] = "Farba titulu tabu�ky 3";
$lang['Th_class1'] = "Table Header Class 1";
$lang['Th_class2'] = "Table Header Class 2";
$lang['Th_class3'] = "Table Header Class 3";
$lang['Td_color1'] = "Farba bunky tabu�ky 1";
$lang['Td_color2'] = "Farba bunky tabu�ky 2";
$lang['Td_color3'] = "Farba bunky tabu�ky 3";
$lang['Td_class1'] = "Table Cell Class 1";
$lang['Td_class2'] = "Table Cell Class 2";
$lang['Td_class3'] = "Table Cell Class 3";
$lang['fontface1'] = "Vzh�ad p�sma 1";
$lang['fontface2'] = "Vzh�ad p�sma 2";
$lang['fontface3'] = "Vzh�ad p�sma 3";
$lang['fontsize1'] = "Ve�kos� p�sma 1";
$lang['fontsize2'] = "Ve�kos� p�sma 2";
$lang['fontsize3'] = "Ve�kos� p�sma 3";
$lang['fontcolor1'] = "Farba p�sma 1";
$lang['fontcolor2'] = "Farba p�sma 2";
$lang['fontcolor3'] = "Farba p�sma 3";
$lang['span_class1'] = "Rozp�tie tried 1";
$lang['span_class2'] = "Rozp�tie tried 2";
$lang['span_class3'] = "Rozp�tie tried 3";
$lang['img_poll_size'] = "Ve�kos� obr�zku pre hlasovanie [v pixeloch]";
$lang['img_pm_size'] = "Ve�kos� obr�zku pre s�kromn� spr�vu [v pixeloch]";


//
// Install Process
//
$lang['Welcome_install'] = "Vitajte v in�tal�cii phpBB 2";
$lang['Initial_config'] = "Z�kladn� nastavenia";
$lang['DB_config'] = "Nastavenia datab�zy";
$lang['Admin_config'] = "Administr�torsk� nastavenia";
$lang['continue_upgrade'] = "Po tom, �o ste stiahli konfigura�n� s�bor na V� disk m��ete spodn�m tla��tkom 'Pokra�ova� v in�tal�cii nov�ej verzie'. Po�kajte s nahr�van�m konfigura�n�ho s�boru dokia� nie je ukon�en� in�tal�cia nov�ej verzie.";
$lang['upgrade_submit'] = "Pokra�ova� v in�tal�cii nov�ej verzie";

$lang['Installer_Error'] = "Po�as in�tal�cie sa vyskytla chyba";
$lang['Previous_Install'] = "Bola n�jden� prech�dzaj�ca in�tal�cia";
$lang['Install_db_error'] = "Po�as nahr�vania nov�ej in�tal�cie datab�zy sa vyskytla chyba";

$lang['Re_install'] = "Va�a predch�dzaj�ca in�tal�cia je st�le akt�vna. <br /><br />Pokia� si prajete prein�talova� phpBB 2,pokra�ujte tla��tkem '�no'. Uvedomte si, pros�m, �e v tomto pr�pade sa zni�ia v�etky d�ta; ned�jde k z�lohovaniu. Administr�torsk� u��vate�sk� meno a heslo, ktor� ste pou��vali k nalogovaniu bud� po rein�tal�cii preroben�, �iadne �al�ie nastavenia nebud� zachovan�.<br /><br />Zamyslite sa pozorne pred stla�en�m tla��tka '�no'!";

$lang['Inst_Step_0'] = "Thank you for choosing phpBB 2. In order to complete this install please fill out the details requested below. Please note that the database you install into should already exist. If you are installing to a database that uses ODBC, e.g. MS Access you should first create a DSN for it before proceeding.";

$lang['Start_Install'] = "Za�a� in�tal�ciu";
$lang['Finish_Install'] = "Ukon�i� in�tal�ciu";

$lang['Default_lang'] = "P�vodn� jazyk boardu";
$lang['DB_Host'] = "Database Server Hostname / DSN";
$lang['DB_Name'] = "N�zov Va�ej datab�zy";
$lang['DB_Username'] = "U��vate�sk� meno datab�zy";
$lang['DB_Password'] = "Heslo datab�zy";
$lang['Database'] = "Va�a datab�za";
$lang['Install_lang'] = "Vyberte jazyk pre in�tal�ciu";
$lang['dbms'] = "Typ datab�zy";
$lang['Table_Prefix'] = "Predpona pre tabu�ky v datab�zi";
$lang['Admin_Username'] = "Administr�torsk� u�iv. meno";
$lang['Admin_Password'] = "Administr�torsk� heslo";
$lang['Admin_Password_confirm'] = "Administr�torsk� heslo [ Potvrdi� ]";

$lang['Inst_Step_2'] = "Va�e u��vate�sk� meno bolo vytvoren�. V tomto momente je z�kladn� in�tal�cia ukon�en�. Teraz budete prepnut� do �al�ej �asti, ktor� V�m umo�n� �al�iu administr�ciu novej in�tal�cie. Skontrolujte, pros�m, detaily V�eobecn�ch nastaven� a urobte potrebn� zmeny. �akujeme, �e ste si vybrali phpBB 2.";

$lang['Unwriteable_config'] = "Do V�ho konfigura�n�ho s�boru nie je mo�n� zapisova�. K�pia tohto s�boru bude stiahnut�, ke� kliknete na tla��tko dole. Potom nahrajte tento s�bor do adres�ra phpBB 2. �alej sa prihl�ste ako administr�tor s heslom, ktor� ste zadali v predch�dzaj�com formul�ri a nav�t�vte administr�torsk� centrum (odkaz sa objav� v spodnej �asti ka�dej str�nky potom, �o sa nalogujete) a skontrolujte v�eobecn� konfigur�ciu. �akujeme, �e ste si vybrali phpBB 2.";
$lang['Download_config'] = "Stiahnu� konfigura�n� s�bor";

$lang['ftp_choose'] = "Vyberte si sp�sob stiahnutia";
$lang['ftp_option'] = "<br />Vzh�adom k tomu, �e je v tejto verzii umo�nen� roz��ren� prenos php m��e V�m by� dan� priestor najsk�r prenies� V� konfigura�n� s�bor automaticky.";
$lang['ftp_instructs'] = "Vybrali ste automatick� vo�bu prenosu. Zadajte, pros�m, inform�cie k uskuto�neniu tohto procesu. Pros�m, pam�tajte na to, �e cesta prenosu m� by� presne tak�, ak� by ste zad�vali cez ak�hoko�vek be�n�ho klienta.";
$lang['ftp_info'] = "Zadejte Va�e inform�cie prenosu FTP";
$lang['Attempt_ftp'] = "Pokus o prenos konfigura�n�ho s�boru na miesto";
$lang['Send_file'] = "Po�lite mi s�bor a ja ho prenesiem s�m";
$lang['ftp_path'] = "Cesta FTP na phpBB";
$lang['ftp_username'] = "Va�e u��vate�sk� meno FTP";
$lang['ftp_password'] = "Va�e heslo FTP";
$lang['Transfer_config'] = "Za�a� prenos";
$lang['NoFTP_config'] = "Pokus prenies� s�bor na miesto zlyhal. Pros�m, stiahnite a potom nahrajte konfigura�n� s�bor sami.";

$lang['Install'] = "In�talova�";
$lang['Upgrade'] = "Inovova� verziu";

$lang['Install_Method'] = "Vyberte druh in�tal�cie";

$lang['Install_No_Ext'] = "Nastavenia php na Va�om serveri nepodporuje datab�zu, ktor� ste zvolili";

$lang['Install_No_PCRE'] = "phpBB2 po�aduje the Perl-Compatible Regular Expressions Module pre php, �o Va�a konfigur�cia php pravdepodobne nepodporuje!";

//
// That's all Folks!
// -------------------------------------------------

$lang['Status_locked'] = 'Zamkn�t�'; 
$lang['Status_unlocked'] = 'Odomkn�t�';
?>