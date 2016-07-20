<?php

/***************************************************************************
 *                            lang_admin.php [Uighur_latin]
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

//
// Uyghurchigha Terjime qilghuchilar/Translation by:
//
// Muhemmed Erdem (M.Erdem)  :: webmaster@misran.com    :: http://www.misran.com
// Abdireyim (abdireyim)     :: abdireyim@yahoo.com     :: http://freeud.tripod.com
//
// Pikirler bolsa bu adresni ishliting/For questions and comments use: misran_erdem@hotmail.com
//
// Diqqet: Bu emgekning hormiti uchun bolsimu tekstlerni, chekitlik herplerni we 
// atalghularni xalighanche ozgertmeng. Pikirliringiz bolsa 
// terjime qilghuchilar bilen alaqe qiling.
//
// Release date: 2003-09-10
//
//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Uniw�rsal';
$lang['Users'] = ' Qollan\'ghuchilar';
$lang['Groups'] = 'Guruppa';
$lang['Forums'] = 'Sehipe';
$lang['Styles'] = 'Uslub/T�ma';

$lang['Configuration'] = 'Seplimiler';
$lang['Permissions'] = 'Hoquqlar';
$lang['Manage'] = 'Bashqurush';
$lang['Disallow'] = 'Isimlarni Cheklesh';
$lang['Prune'] = 'Aptomatik Qirqish';
$lang['Mass_Email'] = 'Top E-mail Yollash';
$lang['Ranks'] = 'Derije';
$lang['Smilies'] = 'Chiraylar';
$lang['Ban_Management'] = 'Cheklesh Kontroli';
$lang['Word_Censor'] = 'S�z S�nzorluqi';
$lang['Export'] = '�ksport Qilish';
$lang['Create_new'] = 'Qurush';
$lang['Add_new'] = 'Qoshush';
$lang['Backup_DB'] = 'Zapaslash';
$lang['Restore_DB'] = 'Sanliqambar Qachilash';




//


// Index
//
$lang['Admin'] = 'Bashqurush';
$lang['Not_admin'] = 'Sizning bu munberni bashqurush hoquqingiz yoq';
$lang['Welcome_phpBB'] = 'phpBB ge xush keldingiz';
$lang['Admin_intro'] = 'Munb�ringizge phpBB ni tallighanliqingiz �ch�n teshekk�r �ytimiz. Bu yerde munb�ringizdiki istatistikilargha nezer salalaysiz. Bu betning sol teripidiki <u>Bashqurush Bashb�ti</u> ulunushni ch�kip ayrilalaysiz. Bu yerdin munber bashb�tige �t�sh �ch�n soldiki phpBB tughini ch�kisiz. Betning sol teripidiki bashqa ulanmilar munberni her t�rl�k kontrol qilishingizgha ijazet bergen bolup, her bir t�r ichide uni ishlitish k�rsetmisi b�rilgen.';
$lang['Main_index'] = 'Munber Bashb�ti';
$lang['Forum_stats'] = 'Munber Istatistikiliri';
$lang['Admin_Index'] = 'Bashqurush Bashb�ti';
$lang['Preview_forum'] = 'Sehipe Sinash';

$lang['Click_return_admin_index'] = 'Bashqurush bashb�tige �t�sh �ch�n %sbu yerni%s ch�king.';

$lang['Statistic'] = 'Istatistika';
$lang['Value'] = 'Qimmiti';
$lang['Number_posts'] = 'Y�zilmilar Sani';

$lang['Posts_per_day'] = 'K�ndilik Y�zilma';
$lang['Number_topics'] = 'T�milar Sani';
$lang['Topics_per_day'] = 'K�ndilik T�ma';
$lang['Number_users'] = 'Qollan\'ghuchilar Sani';
$lang['Users_per_day'] = 'K�ndilik Qollan\'ghuchilar';
$lang['Board_started'] = 'Munber �chilghan waqit';
$lang['Avatar_dir_size'] = 'Awatar munderije sighimi';
$lang['Database_size'] = 'Sanliqambar Sighimi';
$lang['Gzip_compression'] ='Gzip Pr�slash';
$lang['Not_available'] = 'Mewjut emes';

$lang['ON'] = 'Ochuq'; // This is for GZip compression
$lang['OFF'] = '�tik'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Sanliqambar Iqtidarliri';

$lang['Restore'] = 'Eslige Kelt�r�sh';
$lang['Backup'] = 'Zapaslash';
$lang['Restore_explain'] = 'Bu iqtidar arqiliq phpBB jedwellirini <B>eslige kelt�r�shke</B> bolidu. Eger s�rw�r qollisa, u siz y�kligen GZip pr�slan\'ghan h�jjitini aptomatik pr�ssizlaydu. <B>Diqqet:</B> Bu arqiliq barliq kona h�jjetlerning ornigha y�ngisi y�zilidu. Eslige kelt�r�sh x�li uzun waqit dawamlishidu, tamamlinishtin burun bu bettini yapmang.';
$lang['Backup_explain'] = 'Bu yerde phpBB ning barliq sanliq melumatlirini zapasliyalaysiz. Eger phpBB ning sanliqambirigha �zingiz jedwel qoshqan bolsingiz hem uni zapaslimaqchi bolsingiz, uning namini \'Qoshumche Jedweller\' katekchisige kirg�z�ng(birdin artuq kirg�zgende, pesh bilen ayrip y�zing). Eger s�rw�r qollisa, h�jjetliringizni ch�sh�r�shtin burun ularni GZip bilen pr�sliyalaysiz.';

$lang['Backup_options'] = 'Zapaslash Tallimiliri';

$lang['Start_backup'] = 'Zapaslashni bashlash';
$lang['Full_backup'] = 'Toluq zapaslash';
$lang['Structure_backup'] = 'Qurulmisinila zapaslash';
$lang['Data_backup'] = 'Datanila zapaslash';
$lang['Additional_tables'] = 'Qoshumche Jedweller';
$lang['Gzip_compress'] = 'Gzip pr�slanma h�jjiti';
$lang['Select_file'] = 'Bir h�jjet tallash';
$lang['Start_Restore'] = 'Eslige kelt�r�shni bashlash';

$lang['Restore_success'] = 'Sanliqambar muweppeqiyetlik eslige kelt�r�ldi. <br /><br />Munb�ringiz zapaslighan waqittiki haletke kelt�r�ldi.';
$lang['Backup_download'] = 'Download hazirla bashlinidu; selpel texir qiling.';
$lang['Backups_not_supported'] = 'Kech�r�ng, sanliqambar sist�mingiz zapas h�jjetlerni qollimidi.';

$lang['Restore_Error_uploading'] = 'Zapas h�jjetlerni y�kleshta xataliq bar';
$lang['Restore_Error_filename'] = 'H�jjet namida mesile bar; bashqa birsini sinang';
$lang['Restore_Error_decompress'] = 'Gzip h�jjiti y�yilmidi; sap t�kst h�jjiti y�kleng';
$lang['Restore_Error_no_file'] = 'H�chqandaq h�jjet y�klenmidi';


//
// Auth pages
//
$lang['Select_a_User'] = 'Bir qollan\'ghuchi tallang';
$lang['Select_a_Group'] = 'Bir guruppa tallang';
$lang['Select_a_Forum'] = 'Bir sehipe tallang';
$lang['Auth_Control_User'] = 'Qollan\'ghuchi hoquqi kontroli'; 
$lang['Auth_Control_Group'] = 'Guruppa hoquqi kontroli'; 
$lang['Auth_Control_Forum'] = 'Sehipe ishlitish hoquqi kontroli'; 
$lang['Look_up_User'] = 'Qollan\'ghuchi tallash'; 
$lang['Look_up_Group'] = 'Guruppa tallash'; 
$lang['Look_up_Forum'] = 'Sehipe tallash'; 

$lang['Group_auth_explain'] = 'Bu yerde siz guruppining hoquqliri we nazaretchi halitini �zgerteleysiz. Untup qalmangki, guruppining hoquqlirini �zgertkendin k�yinmu musteqil qollan\'ghuchilarning hoquqi yenila k�chke ige. Eger bundaq ehwal bopqalsa, siz xewerlend�rilisiz.';
$lang['User_auth_explain'] = 'Bu yerde siz qollan\'ghuchilarning hoquqi we nazaretchilik haletlirini �zgerteleysiz. Untup qalmangki, qollan\'ghuchilarning hoquqini �zgertkendin k�yinmu guruppining hoquqi yenila k�chke ige. Eger bundaq ehwal bopqalsa, siz xewerlend�rilisiz.';
$lang['Forum_auth_explain'] = 'Bu yerde sehipini ishlitish hoquqini �zgerteleysiz. Addiy we aliydin ibaret ikki xil usul bolup, aliy usul arqiliq sehipilerni nahayti yaxshi kontrolliyalaysiz. Yeni qaysi xildiki qollanchilarning qandaq meshghulatlarni �lip baralaydighanliqini belgiliyeleysiz.  Bu �zg�r�shlerning qollan\'ghuchilarning sehipilerni ishlitishige tesir bolidighanliqini untup qalmang. <B>Eskertish: </B>\'Aliy Usul\' �ch�n qisqartilghan s�zler, Barl.--Barliq, Qoll.--Qollan\'ghuchi, Xusu.--Xususiy, Naza.�Nazaretchi, Bash.--Bashqurghuchi.';

$lang['Simple_mode'] = 'Addiy Usul';
$lang['Advanced_mode'] = 'Aliy Usul';
$lang['Moderator_status'] = 'Nazaretchi haliti';

$lang['Allowed_Access'] = 'Yol Ochuq';
$lang['Disallowed_Access'] = 'Yol Tosaq';
$lang['Is_Moderator'] = 'Nazaretchilik Bar';
$lang['Not_Moderator'] = 'Nazaretchilik Yoq';

$lang['Conflict_warning'] = 'Diqqet: Hoquq toqunushi k�r�ldi';
$lang['Conflict_access_userauth'] = 'Bu qollan\'ghuchi guruppa ezasi bolghanliq seweblik, yenila bu sehipige kirish hoquqi bar. Guruppining hoquqini �zgertish yaki bu qollan\'ghuchining guruppa ezaliq salahitini bikar qilish arqiliq uni bu sehipige kirishtin tosalaysiz. Guruppining hoquqliri (�z ichige alghan sehipiler) t�wendikidek.';
$lang['Conflict_mod_userauth'] = 'Bu qollan\'ghuchi guruppa ezasi bolghanliq seweblik, yenila bu sehipige nazaretchilik qilalaydu. Guruppining hoquqini �zgertish yaki bu qollan\'ghuchining hoquqini �lip tashlash arqiliq uni bu sehipige nazaretchililik qilishtin tosalaysiz. Guruppining hoquqliri (�z ichige alghan sehipiler) t�wendikidek.';


$lang['Conflict_access_groupauth'] = 'T�wendiki qollan\'ghuchilarning bashqa qollan\'ghuchilargha hoquq b�rish salahiti bolghanliq seweblik, yenila bu sehipige kireleydu. Ularning salahitini �zgertish arqiliq, ularning bu sehipige kirishini tosalaysiz. Qollan\'ghuchilarning hoquqliri (�z ichige alghan sehipiler) t�wendikidek.';
$lang['Conflict_mod_groupauth'] = ' T�wendiki qollan\'ghuchilarning bashqa qollan\'ghuchilargha hoquq b�rish salahiti bolghanliq seweblik, yenila bu sehipige nazaretchilik qilalaydu. Ularning salahitini �zgertish arqiliq, ularning bu sehipige nazaretchilik qilishini tosalaysiz. Qollan\'ghuchilarning hoquqliri (�z ichige alghan sehipiler) t�wendikidek.';

$lang['Public'] = 'Ashkare';
$lang['Private'] = 'Xususiy';
$lang['Registered'] = 'Tizimlatqan';
$lang['Administrators'] = 'Bashqurghuchilar';
$lang['Hidden'] = 'Yoshurun';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'Barl.';
$lang['Forum_REG'] = 'Qoll.';
$lang['Forum_PRIVATE'] = 'Xusu.';
$lang['Forum_MOD'] = 'Naza.';
$lang['Forum_ADMIN'] = 'Bash.';

$lang['View'] = 'K�r�sh';
$lang['Read'] = 'Oqush';
$lang['Post'] = 'Yollash';
$lang['Reply'] = 'Jawab Qayturush';
$lang['Edit'] = 'Tehrirlesh';

$lang['Delete'] = '�ch�r�sh';
$lang['Sticky'] = 'Muhim';

$lang['Announce'] = 'Uqturush'; 
$lang['Vote'] = 'B�let Tashlash';
$lang['Pollcreate'] = 'Ray-sinash Qurush';

$lang['Permissions'] = 'Hoquqlar';
$lang['Simple_Permission'] = 'Adettiki Hoquq';


$lang['User_Level'] = 'Qollan\'ghuchi Derjisi'; 
$lang['Auth_User'] = 'Qollan\'ghuchi';
$lang['Auth_Admin'] = 'Bashqurghuchi';
$lang['Group_memberships'] = 'Guruppa Ezaliri';
$lang['Usergroup_members'] = 'Bu guruppining ezaliri';

$lang['Forum_auth_updated'] = 'Sehipe ishlitish hoquqliri y�ngilandi';
$lang['User_auth_updated'] = 'Qollan\'ghuchilar hoquqi y�ngilandi';
$lang['Group_auth_updated'] = 'Guruppa hoquqliri y�ngilandi';

$lang['Auth_updated'] = 'Hoquqlar y�ngilandi';
$lang['Click_return_userauth'] = 'Qollan\'ghuchilar Hoquqigha qaytish �ch�n %sbu yerni%s ch�king.';
$lang['Click_return_groupauth'] = 'Guruppilar Hoquqigha qaytish �ch�n %sbu yerni%s ch�king.';
$lang['Click_return_forumauth'] = 'Sehipiler Hoquqigha qaytish �ch�n %sbu yerni%s ch�king.';


//
// Banning
//
$lang['Ban_control'] = 'Cheklesh Kontroli';
$lang['Ban_explain'] = 'Bu yerde qollan\'ghuchilarni chekliyeleysiz. Belgilen\'gen bir qollan\'ghuchini chekliyeleysiz weyaki melum bir dairidiki IP adr�sni yaki host naminimu chekliyeleysiz. Bu usul arqiliq cheklen\'gen qollan\'ghuchilarning munber bashb�tige kirishini tosqili bolidu. Belgilen\'gen e-mail adr�sini cheklesh arqiliq, u qollan\'ghuchining bashqa isim bilen tizimlitishini tosalaysiz. E-mail adr�sini cheklesh arqiliq peqet qayta tizimlitishini tosqili bolidu, biraq y�zilmilarni yollishini tosqili bolmaydu. Shunga aldinqi ikki usulning birsini ishlitip chekleng.';
$lang['Ban_explain_warn'] = 'Diqqet qilingki, birnechche IP adr�sni kirg�zginingizde, bu IP adr�slar arisidiki barliq IP adr�slar cheklesh dairisige kirip k�tidu. Adr�sning bek k�p qoshulup k�tishining aldini �lish �ch�n, maslashturush belgisi(*) ni ishliting. Eng yaxshisi konkr�t bir IP adr�si kirg�z�ng.';

$lang['Select_username'] = 'Qollanchi isimini tallang';
$lang['Select_ip'] = 'IP adr�sni tallang';
$lang['Select_email'] = 'E-mail adr�sini tallang';

$lang['Ban_username'] = 'Bir yaki birnechche qollan\'ghuchi isimini cheklesh';
$lang['Ban_username_explain'] = 'Birleshme konupka we maus arqiliq birnechche qollan\'ghuchini biraqla chekliyeleysiz.';

$lang['Ban_IP'] = 'Bir yaki birnechche IP adr�si yaki hostnamini cheklesh';
$lang['IP_hostname'] = 'IP adr�sliri yaki hostnamliri';
$lang['Ban_IP_explain'] = 'Oxshimighan birnechche IP adr�sini yaki hostnamini kirg�z�gende, ularni pesh bilen ayring. Bir dairidiki IP adr�sini kirg�zgende, bashlinishi we axiridikini siziqche(-) bilen ayring; (*) belgisini maslashturushta ishliting.';

$lang['Ban_email'] = 'Bir yaki birnechche e-mail adr�sini cheklesh';
$lang['Ban_email_explain'] = ' Oxshimighan birnechche e-mail kirg�z�gende, ularni pesh bilen ayring. (*) belgisini maslashturushta ishliting (meslen: *@hotmail.com).';

$lang['Unban_username'] = 'Qollanchi chekleshni qayturush';
$lang['Unban_username_explain'] = 'Birleshme konupka we maus arqiliq birnechche qollan\'ghuchini biraqla qayturalaysiz.';

$lang['Unban_IP'] = 'IP adr�sini chekleshni qayturush';
$lang['Unban_IP_explain'] = 'Birleshme konupka we maus arqiliq birnechche IP adr�sni biraqla qayturalaysiz.';

$lang['Unban_email'] = 'E-mail adr�si chekleshni qayturush';
$lang['Unban_email_explain'] = 'Birleshme konupka we maus arqiliq birnechche e-mail adr�sini biraqla chekliyeleysiz.';

$lang['No_banned_users'] = 'Cheklen\'gen qollan\'ghuchi isimi yoq';
$lang['No_banned_ip'] = 'Cheklen\'gen IP adr�si yoq';
$lang['No_banned_email'] = 'Cheklen\'gen e-mail adr�si yoq';

$lang['Ban_update_sucessful'] = 'Cheklesh tizimi muweppeqiyetlik y�ngilandi';
$lang['Click_return_banadmin'] = 'Cheklesh Kontroligha qaytish �ch�n %sbu yerni%s ch�king.';


//
// Configuration
//
$lang['General_Config'] = 'Omumiy Seplimiler';

$lang['Config_explain'] = 'Bu yerde munb�ringizdiki asasliq tallashlarni �zgerteleysiz. Qollan\'ghuchi we sehipe seplimiliri �ch�n sol tereptiki bashqurush ulunushlirini ishliting.';

$lang['Click_return_config'] = 'Omumiy Seplimilerge qaytish �ch�n %sbu yerni%s ch�king. ';

$lang['General_settings'] = 'Omumiy Tengshekler';
$lang['Server_name'] = 'Domain Nami';
$lang['Server_name_explain'] = 'Munber programmisi ijra bolidighan domain nami';
$lang['Script_path'] = 'Programma munderijisi';
$lang['Script_path_explain'] = 'phpBB2 programmisining domain adr�sidiki mas munderijisi';
$lang['Server_port'] = 'S�rw�r Porti';
$lang['Server_port_explain'] = 'S�rw�r ijra bolidighan port, u adette 80 bolidu. Mushundaq bolmighanda uni �zgerting';
$lang['Site_name'] = 'Munber Nami';
$lang['Site_desc'] = 'Munber Ch�shend�rlishi';

$lang['Board_disable'] = 'Munberni taqash';
$lang['Board_disable_explain'] = 'Bu munber barliq qollan\'ghuchilargha taqilidu. Bu iqtidarni ijra qilghandin k�yin munberdin chiqip k�tmeng, bolmisa qayta kirelmeysiz.';
$lang['Acct_activation'] = 'H�sab qozghutush';
$lang['Acc_None'] = 'Hajetsiz'; // These three entries are the type of activation
$lang['Acc_User'] = 'E-mail arqiliq';
$lang['Acc_Admin'] = 'Bashqurghuchi arqiliq';

$lang['Abilities_settings'] = 'Qollan\'ghuchi we Sehipe Tengshekliri';
$lang['Max_poll_options'] = 'Ray-sinash t�rlirining maksimum sani';
$lang['Flood_Interval'] = 'Tashqin Ariliqi';
$lang['Flood_Interval_explain'] = 'Qollan\'ghuchining ikki y�zilma ariliqidiki
saqlash waqit ch�ki[s�kont]'; 
$lang['Board_email_form'] = 'Qollan\'ghuchilar ara e-mail';
$lang['Board_email_form_explain'] = 'Qollan\'ghuchilar bu munber arqiliq �z ara
e-mail y�zishalaydu.';
$lang['Topics_per_page'] = 'Her bettiki t�milar sani';
$lang['Posts_per_page'] = 'Her bettiki y�zilmilar sani';
$lang['Hot_threshold'] = 'Qizziq t�migha aylinishtiki y�zilmilar sani';
$lang['Default_style'] = 'Asasiy Uslub';
$lang['Override_style'] = 'Qollan\'ghuchilar uslubini �zgertish';
$lang['Override_style_explain'] = 'Qollan\'ghuchilar tallighan uslubni asasiy
uslubqa �zgertidu.';
$lang['Default_language'] = 'Asasiy Til';

$lang['Date_format'] = 'Waqit Formati';
$lang['System_timezone'] = 'Sist�ma Waqit Rayoni';
$lang['Enable_gzip'] = 'GZip pr�slashqa ijazet b�rish';
$lang['Enable_prune'] = 'Qirqishqa ijazet b�rish';
$lang['Allow_HTML'] = 'HTML ge ijazet b�rish';


$lang['Allow_BBCode'] = 'BBCode ge ijazet b�rish';
$lang['Allowed_tags'] = 'HTML belgisige ijazet b�rish';
$lang['Allowed_tags_explain'] = 'Belgilerni pesh bilen ayring';
$lang['Allow_smilies'] = 'Chiraylargha ijazet b�rish';
$lang['Smilies_path'] = 'Chiraylar saqlan\'ghan munderije';
$lang['Smilies_path_explain'] = 'phpBB bash munderijisining astidiki chiraylar
saqlan\'ghan munderije, mesilen: images/smiles';
$lang['Allow_sig'] = 'Imzagha ijazet b�rish';
$lang['Max_sig_length'] = 'Imzaning maksimum uzunluqi';
$lang['Max_sig_length_explain'] = 'Qollan\'ghuchining imzasidiki eng k�p h�rpler
sanining ch�ki.';
$lang['Allow_name_change'] = 'Isimini �zgertishke ijazet b�rish';

$lang['Avatar_settings'] = 'Awatar Tengshekliri';
$lang['Allow_local'] = 'Awatar gal�riyesige ijazet b�rish';
$lang['Allow_remote'] = 'Yiraqtiki awatargha ijazet b�rish';
$lang['Allow_remote_explain'] = 'Bashqa torb�tidiki awatarni ulunush qilip
ishlitish';
$lang['Allow_upload'] = 'Awatar y�kleshke ijazet b�rish';
$lang['Max_filesize'] = 'Awatarning maksimum  sighimi';
$lang['Max_filesize_explain'] = 'Y�klimekchi bolghan awatar resimi �ch�n';
$lang['Max_avatar_size'] = 'Awatarning maksimum rezmisi';
$lang['Max_avatar_size_explain'] = '(Piks�l boyiche Igizlik x Kenglik)';
$lang['Avatar_storage_path'] = 'Awatar saqlan\'ghan munderije';
$lang['Avatar_storage_path_explain'] = ' phpBB bash munderijining astidiki
awatar saqlan\'ghan munderije, mesilen: images/avatars';
$lang['Avatar_gallery_path'] = 'Awatar gal�riyisi munderijisi';
$lang['Avatar_gallery_path_explain'] = ' phpBB bash munderijining astidiki
awatar-gal�riyisi saqlan\'ghan munderije, mesilen: images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Tengshekliri';
$lang['COPPA_fax'] = 'COPPA Faks Nomuri';
$lang['COPPA_mail'] = 'COPPA E-mail Adr�si';
$lang['COPPA_mail_explain'] = 'Bu e-mail adr�sigha ata-analar COPPA gha
tizimlitish iltimaslirini yollaydu';

$lang['Email_settings'] = 'E-mail Tengshekliri';


$lang['Admin_email'] = 'Bashqurghuchi E-mail Adr�si';
$lang['Email_sig'] = 'E-mail Imzasi';
$lang['Email_sig_explain'] = 'Bu imza bashqurghuchi yollighan barliq
e-maillargha qoshuludu';
$lang['Use_SMTP'] = 'SMTP S�rw�r arqiliq e-mail yollash';
$lang['Use_SMTP_explain'] = 'SMTP S�rw�r arqiliq e-mail yollimaqchi bolsingiz,
\'Hee\' ni tallang';
$lang['SMTP_server'] = 'SMTP S�rw�r Adr�si';
$lang['SMTP_username'] = 'SMTP qollan\'ghuchi isimi';
$lang['SMTP_username_explain'] = 'SMTP s�rw�r isimni telep qilghanda, andin uni 
kirg�z�ng';
$lang['SMTP_password'] = 'SMTP Paroli';
$lang['SMTP_password_explain'] = ' SMTP s�rw�r parolni telep qilghanda, andin
uni  kirg�z�ng';

$lang['Disable_privmsg'] = 'Xususiy Mes�j';
$lang['Inbox_limits'] = 'Xet sanduqining maksimum sighimi';
$lang['Sentbox_limits'] = 'Yollash sanduqining maksimum sighimi';
$lang['Savebox_limits'] = 'Saqlash sanduqining maksimum sighimi';

$lang['Cookie_settings'] = 'Cookie Tengshekliri'; 
$lang['Cookie_settings_explain'] = 'Bu yerde cookie �ch�n brows�rgha n�me
yollinidginaliqini belgiliyeleysiz. K�p ehwalda mushu esli qimmiti boyiche
belgilinidu, eger choqum �zgertish k�rek bolghanda �htiyatchanliq bilen ish
qiling. Xata b�kitilip qalsa h�chkim bu munberge kirelmesliki mumkin.';
$lang['Cookie_domain'] = 'Cookie domaini';
$lang['Cookie_name'] = 'Cookie nami';
$lang['Cookie_path'] = 'Cookie munderijisi';
$lang['Cookie_secure'] = 'Cookie bixeterliki';
$lang['Cookie_secure_explain'] = 'Eger s�rw�ringiz SSL da ijra bolsa, bu
iqtidarni qozghutung, bolmisa taqaq tursun';
$lang['Session_length'] = 'S�ssiye uzunluqi [s�kont]';

// Visual Confirmation
$lang['Visual_confirm'] = 'K�r�p �niqlashni Qozghutush';
$lang['Visual_confirm_explain'] = 'Tizimlatqanda qollan\'ghuchidin resim(teswir)
arqilik b�kitilgen bir kodni kirg�z�shi telep qilinidu.';


//
// Forum Management
//
$lang['Forum_admin'] = 'Sehipe Bashqurush';
$lang['Forum_admin_explain'] = 'Bu yerde kat�goriye we sehipe qoshush, �ch�r�sh,
tehrirlesh hem qaytidin retlesh �lip baralaysiz.';
$lang['Edit_forum'] = 'Sehipe tehrirlesh';
$lang['Create_forum'] = 'Y�ngi sehipe qurush';
$lang['Create_category'] = 'Y�ngi kat�goriye qurush';

$lang['Remove'] = 'Chiqiriw�tish';
$lang['Action'] = 'Meshghulat';
$lang['Update_order'] = 'Tertipni �zgertish';
$lang['Config_updated'] = 'Sehipe seplimiliri muweppiqiyetlik �zgertildi';
$lang['Edit'] = 'Tehrirlesh';
$lang['Delete'] = '�ch�r�sh';

$lang['Move_up'] = '�stige';
$lang['Move_down'] = 'Astigha';
$lang['Resync'] = 'Resync';
$lang['No_mode'] = 'H�chqandaq usul tallanmidi';
$lang['Forum_edit_delete_explain'] = 'Bu yerde siz munberge ait barliq
tengsheklerni belgiliyeleysiz. Qollan\'ghuchilar we sehipe tengsheklirini
belgilesh �ch�n sol tereptiki mas ulunushlarni ishliting';

$lang['Move_contents'] = 'Barliq mezmunlarni y�tkesh';
$lang['Forum_delete'] = 'Sehipe �ch�r�sh';
$lang['Forum_delete_explain'] = 'Bu yerde sehipe yaki kat�goriye �ch�releysiz,
hem sehipidiki barliq mezmunlarni �z ichige alghan t�milarni yaki sehipilerni
y�tkiyeleysiz.';

$lang['Status_locked'] = 'Quluplandi';
$lang['Status_unlocked'] = '�childi';
$lang['Forum_settings'] = 'Sehipe Tengshekliri';
$lang['Forum_name'] = 'Sehipe nami';
$lang['Forum_desc'] = 'Sehipe ch�shend�rlishi';
$lang['Forum_status'] = 'Sehipe haliti';
$lang['Forum_pruning'] = 'Aptomatik Qirqish';

$lang['prune_freq'] = 'Qererlik teksh�r�sh dewri';
$lang['prune_days'] = 'X�lidin b�ri jawab y�zilmighan t�milarni qirqish ';
$lang['Set_prune_data'] = 'Aptomatik qirqish iqtidarini qozghattingiz, emma
dewrilinidighan k�nning sanini bermidingiz. Qaytip k�n sanini belgileng.';


$lang['Move_and_Delete'] = 'Y�tkesh we �ch�r�sh';

$lang['Delete_all_posts'] = 'Barliq y�zilmilarni �ch�r�sh';
$lang['Nowhere_to_move'] = 'Y�tkeydighan yer yoq';

$lang['Edit_Category'] = 'Kat�goriye tehrirlesh';
$lang['Edit_Category_explain'] = 'Bu yerde bir kat�goriyening namini
�zgerteleysiz.';

$lang['Forums_updated'] = 'Sehipe we kat�goriye uchurliri muweppeqiyetlik
�zgertildi.';

$lang['Must_delete_forums'] = 'Bu kat�goriyeni �ch�r�shtin burun uningdiki
barliq sehipilerni �ch�r�shingiz k�rek.';

$lang['Click_return_forumadmin'] = 'Sehipe Bashqurushqa qaytish �ch�n %sbu
yerni%s ch�king.';


//
// Smiley Management
//
$lang['smiley_title'] = 'Chiraylar Tehrirlesh';
$lang['smile_desc'] = 'Bu yerde siz bu chiraylarni, yeni qollan\'ghuchilar
yazmiliri we xususiy mes�jlirida ishlitidighan chiraylarni qoshalaysiz,
�ch�releysiz weyaki tehrirliyeleysiz.';

$lang['smiley_config'] = 'Chiray Seplimiliri';
$lang['smiley_code'] = 'Chiray Kodi';
$lang['smiley_url'] = 'Chiray Resim H�jjiti';
$lang['smiley_emot'] = 'Chiray Resim Keypiyati';
$lang['smile_add'] = 'Y�ngi Chiray Qoshush';

$lang['Smile'] = 'Chiray';
$lang['Emotion'] = 'Keypiyati';

$lang['Select_pak'] = 'Pak (Pack) h�jjitini tallash';
$lang['replace_existing'] = 'Hazirqi chirayni almashturush';
$lang['keep_existing'] = 'Hazirqi chirayni saqlap q�lish';

$lang['smiley_import_inst'] = 'Siz chiray Pack (.pak) h�jjitini y�ying hem
barliq h�jjetlerni muwapiq munderijige y�kleng. Andin toghra buyruqni tallap
ularni qachilang.';

$lang['smiley_import'] = 'Chiraylar Paki Kirg�z�sh';
$lang['choose_smile_pak'] = 'Chiray pak h�jjitini tallash';
$lang['import'] = 'Chiraylar kirg�z�sh';
$lang['smile_conflicts'] = 'Toqunush bolghanda n�me qilish k�rek?';
$lang['del_existing_smileys'] = 'Chiraylarni import qilishtin burun, bar bolghan
chiraylarni �ch�r�ng';
$lang['import_smile_pack'] = 'Chiraylar Paki Kirg�z�sh';
$lang['export_smile_pack'] = 'Chiraylar Paki qurush';
$lang['export_smiles'] = 'Hazirqi chiraylardin bir pak qurush �ch�n, %sbu
yerni%s ch�kip smiles.pak h�jjitini ch�sh�releysiz. H�jjet k�ngeytilgen namining
.pak bolishigha diqqet qiling. Andin  barliq chiraylar resimliridin bir
pr�slan\'ghan .pak h�jjiti qurudu.';

$lang['smiley_add_success'] = 'Chiray muweppeqiyetlik qoshuldi!';
$lang['smiley_edit_success'] = 'Chiray muweppeqiyetlik �zgertildi!';
$lang['smiley_import_success'] = 'Chiraylar muweppeqiyetlik kirg�z�ldi!';
$lang['smiley_del_success'] = 'Chiraylar muweppeqiyetlik �ch�r�ldi!';
$lang['Click_return_smileadmin'] = 'Chiraylar Bashqurushqa qaytish �ch�n %sbu
yerni%s ch�king.';



//
// User Management
//
$lang['User_admin'] = 'Qollan\'ghuchi Bashqurush';
$lang['User_admin_explain'] = 'Bu yerde qollan\'ghuchilarning uchurini we bezi
tallashlarni �zgerteleysiz. Eger qollan\'ghuchining hoquqini �zgertmekchi
bolsingiz, qollan\'ghuchi hoquqi we guruppa hoquqi iqtidarini ishliting.';

$lang['Look_up_user'] = 'Qollan\'ghuchi tallash';

$lang['Admin_user_fail'] = 'Qollan\'ghuchi profili �zgertilelmidi.';
$lang['Admin_user_updated'] = 'Qollan\'ghuchi profile muweppeqiyetlik
�zgertildi.';
$lang['Click_return_useradmin'] = 'Qollan\'ghuchi Bashqurushqa qaytish �ch�n 
%sbu yerni%s ch�king.';

$lang['User_delete'] = 'Bu qollan\'ghuchini �ch�r�sh';
$lang['User_delete_explain'] = 'Qollanchini �ch�r�sh �ch�n bu yerni ch�king.
�ch�rgendin k�yin eslige kelt�r�lelmeydu.';
$lang['User_deleted'] = 'Qollan\'ghuchi muweppeqiyetlik �ch�r�ldi.';

$lang['User_status'] = 'Bu qollan\'ghuchi qozghutulghan halette';
$lang['User_allowpm'] = 'Xususiy mes�j iberteleydu';
$lang['User_allowavatar'] = 'Awatar ishliteleydu';

$lang['Admin_avatar_explain'] = 'Bu yerde qollan\'ghuchining hazirqi awatarini
k�releysiz hem �ch�releysiz.';

$lang['User_special'] = 'Alahide Tallashlar(bashqurghuchi �ch�n)';
$lang['User_special_explain'] = 'Bu tallashni qollan\'ghuchilar �zgertelmeydu. 
Siz bu yerde qollan\'ghuchilarning tallishigha b�rilmigen haletlerni we bashqa
tallashlirini �zgerteleysiz.';


//
// Group Management

//
$lang['Group_administration'] = 'Guruppa Bashqurush';
$lang['Group_admin_explain'] = 'Bu yerde siz barliq guruppilarni bashquralaysiz.
Siz hazir bar bolghan guruppilarni �ch�releysiz, tehrirliyeleysiz yaki y�ngi
guruppa quralaysiz. Siz guruppa bashqurghuchini tallap, guruppining
haletlirini(ochuq, taqaq, yoshurun) �zgerteleysiz hem guruppining nami we
ch�shend�rlishini �zgerteleysiz.';

$lang['Error_updating_groups'] = 'Guruppa y�ngilighanda xataliq k�r�ldi';
$lang['Updated_group'] = 'Guruppa muweppeqiyetlik �zgertildi';
$lang['Added_new_group'] = 'Y�ngi guruppa muweppeqiyetlik quruldi';
$lang['Deleted_group'] = 'Guruppa muweppeqiyetlik �ch�r�ldi';
$lang['New_group'] = 'Y�ngi guruppa qurush';
$lang['Edit_group'] = 'Guruppa tehrirlesh';

$lang['group_name'] = 'Guruppa nami';
$lang['group_description'] = 'Guruppa ch�shend�rlishi';
$lang['group_moderator'] = 'Guruppa bashqurghuchi';
$lang['group_status'] = 'Guruppa haliti';
$lang['group_open'] = 'Ochuq guruppa';
$lang['group_closed'] = 'Taqaq guruppa';

$lang['group_hidden'] = 'Yoshurun guruppa';
$lang['group_delete'] = '�ch�r�lgen guruppa';
$lang['group_delete_check'] = 'Bu guruppini �ch�r�sh';

$lang['submit_group_changes'] = '�zg�r�shlerni yollash';
$lang['reset_group_changes'] = 'Qaytilash';
$lang['No_group_name'] = 'Guruppigha bir nam b�ring';
$lang['No_group_moderator'] = 'Guruppa bashqurghuchi belgileng';
$lang['No_group_mode'] = 'Guruppining halitini (ochuq/taqaq) belgilishingz
k�rek';
$lang['No_group_action'] = 'H�chnerse tallanmidi';
$lang['delete_group_moderator'] = 'Kona guruppa bashliqini �ch�remsiz?';
$lang['delete_moderator_explain'] = 'Eger guruppa bashqurghuchini
almashturmaqchi bolsingiz, tallashni tallap kona bashqurghuchini �ch�r�ng. 
Uningdin bashqa tallashni tallimisingiz u qollan\'ghuchi mushu guruppining
ezaliqida turiw�ridu.';
$lang['Click_return_groupsadmin'] = 'Guruppa Bashqurushqa qaytish �ch�n %sbu
yerni%s ch�king.';
$lang['Select_group'] = 'Guruppa tallash';
$lang['Look_up_group'] = 'Guruppa izdesh';



//
// Prune Administration
//
$lang['Forum_Prune'] = 'Aptomatik Qirqish';
$lang['Forum_Prune_explain'] = 'Bu iqtidarda, belgilen\'gen melum waqit ichide
jawab y�zilmighan t�milarning hemmisi aptomatik �ch�r�lidu. Eger waqitni
belgilimisingiz barliq t�milar �ch�r�lidu. Ray sinash �lip b�riliwatqan t�ma we
uqturush �ch�r�lmeydu. Ularni qol bilen �ch�r�sh k�rek.';
$lang['Do_Prune'] = 'Aptomatik qirqish';
$lang['All_Forums'] = 'Barliq Sehipe';

$lang['Prune_topics_not_posted'] = 'Birnechche k�ngiche jawab y�zilmighan
t�milar qirqilidu';
$lang['Topics_pruned'] = 'Qirqilidighan T�milar';
$lang['Posts_pruned'] = 'Qirqilidighan Y�zilmilar';
$lang['Prune_success'] = 'Sehipini qirqish muweppeqiyetlik boldi';


//
// Word censor

//
$lang['Words_title'] = 'S�z S�z�sh';
$lang['Words_explain'] = 'Bu yerde y�zilmilardiki aptomatik s�z�lidighan
s�zlerni belgiliyeleysiz. Uningdin bashqa qollan\'ghuchilar bu s�zlerni �z ichige
alghan isimlarnimu ishlitelmeydu. Siz bu s�zlerde maslashturush belgisi (*) ni
ishletsingizmu bolidu. Mesilen: til* - tillash, tillidim tillaymen;  *til* -
alwastilar, ajritildi; *�z�m - t�z�m, k�nd�z�m qatarliqalarni �z ichige alidu.';
$lang['Word'] = 'S�z';
$lang['Edit_word_censor'] = 'Soz s�nzor Tehrirlesh';
$lang['Replacement'] = 'Almisdhidighan S�z';
$lang['Add_new_word'] = 'Y�ngi s�z qoshush';
$lang['Update_word'] = 'S�zni y�ngilash';

$lang['Must_enter_word'] = 'S�nzorlinidighan s�z we uning ornigha almishidighan
s�zni kirgh�z�ng';
$lang['No_word_selected'] = 'Tehrirleshke s�z tallanmidi';

$lang['Word_updated'] = 'S�nzorlinidighan s�z muweppeqiyetlik y�ngilandi';
$lang['Word_added'] = 'S�nzorlinidighan s�z muweppeqiyetlik qoshuldi';
$lang['Word_removed'] = 'Tallighan s�z muweppeqiyetlik �ch�r�ldi';

$lang['Click_return_wordadmin'] = 'S�z Chekleshni Bashqurushqa qaytish �ch�n
%sbu yerni%s ch�king.';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Bu yerde siz,  tizimlatqan barliq
qollan\'ghuchilargha mes�j yollapla qalmastin yene melum bir guruppidiki barliq
ezalargha mes�j yolliyalaysiz. Guruppqa yollighan mes�j  guruppa
bashqurghuchining e-mail adr�sigha yollinidu hem uning (karbon) kopiyesi
qarighularche barliq tapshurwalghuchi ezalargha yollinidu. Eger ezaliri k�p
bolghan chong bir guruppigha yollimaqchi bolsingiz, sewr-tawet bilen saqlang,
yollashni y�rim yolda toxtitiwetmeng. Toplap email ibertishke waqit kop k�tishi
normal hadise, programma ijra bolghan chaghda siz eskertishni bayqaysiz.';

$lang['Compose'] = 'Xet y�zish'; 

$lang['Recipients'] = 'Tapshurwalghuchi'; 

$lang['All_users'] = 'Barliq Qollan\'ghuchi';


$lang['Email_successfull'] = 'Mes�jingiz yollunup boldi';
$lang['Click_return_massemail'] = 'Top E-mail Yollashqa qaytish �ch�n %sbu
yerni%s ch�king. ';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Derije Bashqurush';
$lang['Ranks_explain'] = 'Bu yerde derijilerni qoshush, tehrirlesh, k�r�sh we
�ch�r�sh �lip baralaysiz. Siz oxshashla �zingiz derijilerni turghuzup
qollan\'ghuchi bashqurghuchisi arqiliq qollan\'ghuchilargha qollinalaysiz.';

$lang['Add_new_rank'] = 'Y�ngi derije qoshush';

$lang['Rank_title'] = 'Derije Nami';

$lang['Rank_special'] = 'Alahide Derije';


$lang['Rank_minimum'] = 'Minimum y�zilma sani';
$lang['Rank_maximum'] = 'Maksimum y�zilam sani';
$lang['Rank_image'] = 'Derije resimi(phpBB2 ning nisbiy munderijisi)';
$lang['Rank_image_explain'] = 'Herbir derijige mas bolghan resimni
belgiliyeleysiz';


$lang['Must_select_rank'] = 'Bir derije tallang';
$lang['No_assigned_rank'] = 'H�chqandaq alahide derije belgilenmidi';

$lang['Rank_updated'] = 'Derije muweppeqiyetlik y�ngilandi';
$lang['Rank_added'] = 'Derije muweppeqiyetlik qoshuldi';
$lang['Rank_removed'] = 'Derije muweppeqiyetlik �ch�r�ldi';
$lang['No_update_ranks'] = 'Bu derije muweppeqiyetlik �ch�r�ldi. Emma bu
derijidiki qollan\'ghuchilarning derijisi �zgermid. Bularning derijisini qol
arqiliq �zgertishingiz k�rek.';

$lang['Click_return_rankadmin'] = 'Derije Bashqurushqa qaytish �ch�n %sbu
yerni%s ch�king.';


//

// Disallow Username Admin
//
$lang['Disallow_control'] = 'Qollanchi Isimni Cheklesh';
$lang['Disallow_explain'] = 'Bu yerde siz qollan\'ghuchilar ishlitishke
bolmaydighan isimlarni chekliyeleysiz. Maslashturush belgisini(*) ishletsingiz
bolidu. Diqqet qilingki, tizimlitip bolghan qollan\'ghuchining isimini cheklesh
�ch�n, awwal u qollan\'ghuchini �ch�r�w�tishingiz k�rek.';

$lang['Delete_disallow'] = '�ch�r�sh';
$lang['Delete_disallow_title'] = 'Chekleydighan bir qollanchi isimini �ch�r�sh';
$lang['Delete_disallow_explain'] = 'Bu yerde cheklimekchi bolghan bir qollanchi
isimini tallap, �ch�r�shni ch�ksingiz u isim �ch�r�lidu.';

$lang['Add_disallow'] = 'Qoshush';
$lang['Add_disallow_title'] = 'Cheklinidighan qollanchi isimini qoshush';
$lang['Add_disallow_explain'] = 'Melum dairidiki qollanchi isimlirini cheklesh
�ch�n, maslashturush belgisini(*) ishletsingiz bolidu.';

$lang['No_disallowed'] = 'Cheklinidighan qollanchi isimi yoq';

$lang['Disallowed_deleted'] = 'Cheklinidighan qollanchi isimi muweppeqiyetlik
�ch�r�ldi';
$lang['Disallow_successful'] = 'Cheklinidighan qollanchi isimi muweppeqiyetlik
qoshuldi';

$lang['Disallowed_already'] = 'Kirg�zgen bu isim cheklenmidi. U cheklesh
tizimlikide bolishi mumkin, yaki u isim hazir ishlitiliwatqan bolishi mumkin.';

$lang['Click_return_disallowadmin'] = 'Qollanchi Isimini Chekleshke qaytish
�ch�n %sbu yerni%s ch�king. ';


//
// Styles Admin

//
$lang['Styles_admin'] = 'Uslub Bashqurush';
$lang['Styles_explain'] = 'Bu yerde uslublarni(endize we t�ma) qoshalaysiz,
�ch�releysiz we bashquralaysiz';
$lang['Styles_addnew_explain'] = 'T�wendiki tizimliktikisi hazirqi barliq
t�milardur. Bular t�xi phpBB ning sanliqambirigha qachilanmidi. T�midin birni
qachilash �ch�n, qachilash ulunushini ch�king.';

$lang['Select_template'] = 'Bir endize tallash';

$lang['Style'] = 'Uslub';
$lang['Template'] = 'Endize';
$lang['Install'] = 'Qachilash';
$lang['Download'] = 'Y�k Ch�sh�r�sh';

$lang['Edit_theme'] = 'T�ma Tehrirlesh';
$lang['Edit_theme_explain'] = 'Siz bu yerde, tallan\'ghan t�ma tengsheklirini
�zgerteleysiz';

$lang['Create_theme'] = 'T�ma Qurush';
$lang['Create_theme_explain'] = ' Bu yerde tallighan endizingizge bir t�ma
quralaysiz. R�ngini belgiligende(16lik reqem ishlitisiz), # belgisini
ishlitishke bolmaydu. Mesilen: CCCCCC ishlitish toghra, #CCCCCC bundaq ishlitish
xata.';


$lang['Export_themes'] = 'T�ma �ksport Qilish';
$lang['Export_explain'] = 'Bu yerde tallighan endizingiz �ch�n t�ma sanliq
melumatlirini chiqiralaysiz. Jedweldin bir endize tallighandin k�yin sist�ma
t�mining seplime uchurlirini qurup uni endize munderijisige saqlaydu. Eger
saqliyalmisa, bu h�jjetni ch�sh�rshingizge tallash b�ridu. Egre sist�ming bu
h�jjetlerni biwasite saqlishini �mid qilsingiz, yazghili bolidighan bir endize
munderijisi b�kitishingiz k�rek. Tepsili uchurgha �rishish �ch�n phpBB2
qollanmisini k�r�ng.';

$lang['Theme_installed'] = 'Tallan\'ghan t�ma muweppeqiyetlik qachilandi';
$lang['Style_removed'] = ' Tallan\'ghan uslub sanliqambardin �ch�r�w�tildi. Uni
sist�midin p�t�nley �ch�r�w�tish �chun, endize munderjisini �ch�r�shingiz
k�rek.';
$lang['Theme_info_saved'] = ' Tallan\'ghan t�ma �ch�rliri muweppeqiyetlik
saqlandi. Siz hazir  theme_info.cfg(eger tallan\'ghan endize munderijisige uyghun
bolsa) ning sheklini  peqet-oquludighan haletke �zgertishingiz k�rek.';

$lang['Theme_updated'] = 'Tallan\'ghan t�ma y�ngilandi. Siz hazir y�ngi t�ma
tengsheklirini �ksport qilishingiz k�rek.';

$lang['Theme_created'] = ' T�ma quruldi. Bixeterlikni saqlash we xataliq
bolmasliq �ch�n, hazir t�ma seplimilirini �ksport qilishingiz k�rek.';

$lang['Confirm_delete_style'] = 'Bu uslubni choqum �ch�remsiz';

$lang['Download_theme_cfg'] = ' Bu �ksport�r t�ma uchurliri h�jjitini yazalmidi.
Astidiki konupkini ch�kip, brows�r arqili bu h�jjetni ch�sh�r�ng. Ch�sh�rgendin
k�yin uni endize h�jjiti bar munderijige k�ch�rsingiz bolidu. Uni tarqitish yaki
bashqa yerde ishlitip q�lish �ch�n, pak h�jjiti qilip qoysingiz bolidu.';
$lang['No_themes'] = ' Tallan\'ghan endizide h�chqandaq t�ma yoq. Y�ngi t�ma
qurush �ch�n, sol tereptiki T�ma Qurush ulunushini ch�king.';
$lang['No_template_dir'] = ' Endize munderijisi �chilalmidi. U belkim
oqulmaydighan tengshilip qalghan yaki mewjut emes.';
$lang['Cannot_remove_style'] = ' Tallan\'ghan bu uslubni �ch�relmeysiz, ch�nki u
asasiy sehipige  tewe. Bashqa bir asasiy sehipini tallap, qayta sinang.';
$lang['Style_exists'] = 'Tallan\'ghan uslub nami mewjut, qaytip bashqa bir namni
tallang. ';

$lang['Click_return_styleadmin'] = 'Uslub Bashqurushqa qaytish �ch�n %sbu
yerni%s ch�king.';


$lang['Theme_settings'] = 'T�ma Tengshekliri';

$lang['Theme_element'] = 'T�ma �l�m�nti';
$lang['Simple_name'] = 'Addiy Nami';
$lang['Value'] = 'Qimmiti';
$lang['Save_Settings'] = 'Tengsheklerni Saqlash';

$lang['Stylesheet'] = 'CSS Uslubi Jedwili';
$lang['Background_image'] = 'Teglik Resimi';
$lang['Background_color'] = 'Teglik Renggi';


$lang['Theme_name'] = 'T�ma Nami';
$lang['Link_color'] = 'Ulunush Renggi';
$lang['Text_color'] = 'T�kst Renggi';
$lang['VLink_color'] = 'Ziyarettin K�yinki Ulunush Renggi';
$lang['ALink_color'] = 'Qozghutulghandiki Renggi';
$lang['HLink_color'] = 'Tallighandiki Ulunush Renggi';
$lang['Tr_color1'] = 'Jedwel Istoni Renggi 1';
$lang['Tr_color2'] = 'Jedwel Istoni Renggi 2';
$lang['Tr_color3'] = 'Jedwel Istoni Renggi 3';

$lang['Tr_class1'] = 'Jedwel Istoni Sinipi 1';
$lang['Tr_class2'] = 'Jedwel Istoni Sinipi 2';
$lang['Tr_class3'] = 'Jedwel Istoni Sinipi 3';
$lang['Th_color1'] = 'Jedwel B�shi Renggi 1';
$lang['Th_color2'] = 'Jedwel B�shi Renggi 2';
$lang['Th_color3'] = 'Jedwel B�shi Renggi 3';
$lang['Th_class1'] = 'Jedwel B�shi Sinipi 1';
$lang['Th_class2'] = 'Jedwel B�shi Sinipi 2';
$lang['Th_class3'] = 'Jedwel B�shi Sinipi 3';
$lang['Td_color1'] = 'Jedwel Katekchisi Renggi 1';
$lang['Td_color2'] = 'Jedwel Katekchisi Renggi 2';
$lang['Td_color3'] = 'Jedwel Katekchisi Renggi 3';
$lang['Td_class1'] = 'Jedwel Katekchisi Sinipi 1';
$lang['Td_class2'] = 'Jedwel Katekchisi Sinipi 2';
$lang['Td_class3'] = 'Jedwel Katekchisi Sinipi 3';
$lang['fontface1'] = 'Font Tipi 1';
$lang['fontface2'] = 'Font Tipi 2';
$lang['fontface3'] = 'Font Tipi 3';
$lang['fontsize1'] = 'Font Rezmisi 1';
$lang['fontsize2'] = 'Font Rezmisi 2';
$lang['fontsize3'] = 'Font Rezmisi 3';
$lang['fontcolor1'] = 'Font Renggi 1';
$lang['fontcolor2'] = 'Font Renggi 2';
$lang['fontcolor3'] = 'Font Renggi 3';

$lang['span_class1'] = 'Span Sinipi 1';
$lang['span_class2'] = 'Span Sinipi 2';
$lang['span_class3'] = 'Span Sinipi 3';
$lang['img_poll_size'] = 'Ray-sinash resimi rezmisi [px]';
$lang['img_pm_size'] = 'Xususiy mes�jlar halite resimi rezmisi [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'PhpBB 2 ni Qachilighanliqingizni Qarshi Alimiz';
$lang['Initial_config'] = 'Asasiy Seplime';
$lang['DB_config'] = 'Sanliqambar Seplimisi';
$lang['Admin_config'] = 'Bashqurush Seplimisi';
$lang['continue_upgrade'] = 'Seplime h�jjiti Config.php ni kompyut�ringizgha
ch�sh�r�p bolghandin k�yin \'Y�ngilashni Dawamlash\' konupkisini b�sip
dawamlashtursingiz bolidu.Y�ngilash tamamlan\'ghandin k�yin andin seplime
h�jjitini y�kleng. ';
$lang['upgrade_submit'] = 'Y�ngilashni Dawamlash';


$lang['Installer_Error'] = 'Qachilash dawamida bir xataliq k�r�ldi';
$lang['Previous_Install'] = 'Burun qachilighan bir phpBB2 bayqaldi';
$lang['Install_db_error'] = 'Sanliqambar y�ngiliniwatqanda xataliq k�r�ldi';


$lang['Re_install'] = 'Siz burun qachilighan munber qozghutughluq.<br /><br
/>Eger siz phpBB 2 ni qayta qachilimaqchi bolsingiz Hee konupkisini astidiki
ch�king. Diqqet qilingki, bundaq qilsingiz hazir bar bolghan barliq sanliq
melumatlar �ch�rl�p k�tidu hem h�chqandaqi zapaslanmaydu! Bashqurghuchining
hazir ishlitiwatqan h�sabi we paroli y�ngidin quruludu hem h�chqandaq
tengshekler saqlinip qalmaydu. <br /><br />Hee konupkisini b�sishtin burun obdan
oylunung!';



$lang['Inst_Step_0'] = 'phpBB 2 ni tallighiningiz �ch�cn teshekk�r. Qachilashni
tamamlash �ch�n, t�wendiki melumatlarni toldurung. Qachilashtin ilgiri,
sanliqambarning teyyarlan\'ghan bolishigha diqqet qiling. Eger ODBC ishlitidighan
sanliq ambar qachilimaqchi bolsingiz, mesilen: MS Access, dawamlashtin burun
ular �ch�n awwal bir  DSN qurushingiz k�rek.';

$lang['Start_Install'] = 'Qachilashni Bashlash';
$lang['Finish_Install'] = 'Qachilashn Tamamlandi';

$lang['Default_lang'] = 'Munber tili';
$lang['DB_Host'] = 'Sanliqambar s�rw�r adr�si';
$lang['DB_Name'] = 'Sanliqambar nami';
$lang['DB_Username'] = 'Sanliqambar Ishletk�chi nami';
$lang['DB_Password'] = 'Sanliqambar Paroli';
$lang['Database'] = 'Sanliqambiringiz';
$lang['Install_lang'] = 'Qachilash tilini tallash';
$lang['dbms'] = 'Sanliqambar tipi';
$lang['Table_Prefix'] = 'Sanliqambardiki jedwellerning aldi qoshulghuchisi';
$lang['Admin_Username'] = 'Bashqurghuchi Isimi';
$lang['Admin_Password'] = 'Bashqurghuchi Paroli';
$lang['Admin_Password_confirm'] = 'Bashqurghuchi Paroli [ Jezimlesh ]';

$lang['Inst_Step_2'] = 'Bashqurghuchingizning qollanchi isimi quruldi. Mushu
peytte asasiy qachilashmu tamamlandi. Siz hazir bir betke, yeni sizning y�ngi
qachilimini bashqurushingizgha ijazet b�rilgen bir betke kelt�rilisiz. Omumiy
seplimilerni hem z�r�r bolghan �zg�r�shler bolghanliqini teksh�r�p b�qing. phpBB
2 ni tallighiningizge teshekk�r �ytimiz.';

$lang['Unwriteable_config'] = 'Shu esnada seplime h�jjiti y�zilalmidi. Seplime
h�jjitini kompyut�ringizgha ch�sh�r�sh �ch�n astidiki konupkini ch�king. Andin
�zingiz bu h�jjetni phpBB 2 munderijisige y�kleng. Andin aldida teminligen
bashqurghuchi isimi we parolingiz bilen sist�ma bashqurush kontroligha(kirgendin
k�yin betning astida k�r�nidu) kirip omumiy seplimiliringizni teksh�r�ng. phpBB
2 ni tallighiningizge teshekk�r �ytimiz.';

$lang['Download_config'] = 'Seplime H�jjitini Ch�sh�r�sh';

$lang['ftp_choose'] = 'Ch�sh�r�sh Usulini Tallash';
$lang['ftp_option'] = '<br />PHP ning bu nusxisida FTP ning k�ngeytilgen
iqtidari qozghutulghan bolup, seplime h�jjitini FTP arqiliq ornigha yollash
mumkinchilikingiz bar.';
$lang['ftp_instructs'] = 'Seplime h�jjitini FTP arqiliq phpbb2 diki ornigha
aptomatik yollashni tallidingiz. T�wendiki uchurlarni kirg�z�p bu jeryanni
addiylashturung. Diqqet qilingki, FTP munderjisi bilen phpBB2 qachilinidighan
munderije oxshash bolishi k�rek.';
$lang['ftp_info'] = 'FTP uchurliringizni kirg�z�ng';
$lang['Attempt_ftp'] = 'FTP arqiliq seplime h�jjitini yollash';
$lang['Send_file'] = 'Bu h�jjetni �zemge ibertip, FTP arqiliq ornigha
yollaymen.';
$lang['ftp_path'] = 'phpBB2 ning FTP munderijisi';
$lang['ftp_username'] = 'FTP Qollanchi nami';
$lang['ftp_password'] = 'FTP Paroli';
$lang['Transfer_config'] = 'Yollashni bashlash';
$lang['NoFTP_config'] = 'Seplime h�jjitini ornigha yollash meghlup boldi. Uni
ch�sh�r�p qol arqiliq ornigha yollang.';

$lang['Install'] = 'Qachilash';
$lang['Upgrade'] = 'Y�ngilash';


$lang['Install_Method'] = 'Qachilash usulini tallang';

$lang['Install_No_Ext'] = 'S�rw�rdiki PHP seplimiliri siz tallighan sanliqambar
t�rige mas kelmidi.';

$lang['Install_No_PCRE'] = 'phpBB2 �ch�n k�reklik bolghan Perl ning
uyghunlashturush qaide mod�li PHP seplimilirige mas kelmidi!';

//
// That's all Folks!
// -------------------------------------------------

?>