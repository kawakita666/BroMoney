<?php
/***************************************************************************
 *
 *	language/lang_icelandic/lang_admin.php   [icelandic]
 *	------------------------------------------------------------------------
 *
 *	Created     Thu, 29 Aug 2002 18:16:51 +0200
 *	Corrected   Mon, 23 dec 2002, baldur@oreind.is
 *	Copyright   (c) 2002 The phpBB Group
 *	Email       support@phpbb.com
 *
 *	Created by  C.O.L.T. v1.4.4 - The Cool Online Language Translation Tool
 *	            Fast like a bullet and available online!
 *	            (c) 2002 Matthias C. Hormann <matthias@hormann-online.net>
 *
 *	Visit       http://www.phpbb.kicks-ass.net/ to find out more!
 *
 ***************************************************************************/

/***************************************************************************
 *
 *	This program is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation; either version 2 of the License, or
 *	(at your option) any later version.
 *
 ***************************************************************************/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Almenn umsj�n';
$lang['Users'] = 'Notenda umsj�n';
$lang['Groups'] = 'H�p umsj�n';
$lang['Forums'] = 'Umr��u umsj�n';
$lang['Styles'] = '�ema umsj�n';

$lang['Configuration'] = 'Uppsetning';
$lang['Permissions'] = 'Heimildir';
$lang['Manage'] = 'Stj�rnun';
$lang['Disallow'] = 'Banna n�fn';
$lang['Prune'] = 'Ey�a g�mlu';
$lang['Mass_Email'] = 'Magnp�stur';
$lang['Ranks'] = 'Stig';
$lang['Smilies'] = 'Broskallar';
$lang['Ban_Management'] = 'Bann stj�rnun';
$lang['Word_Censor'] = 'Or�a eftirlit';
$lang['Export'] = 'Flytja �t';
$lang['Create_new'] = 'B�a til';
$lang['Add_new'] = 'B�ta vi�';
$lang['Backup_DB'] = 'Taka afrit';
$lang['Restore_DB'] = 'Setja inn gagnagrunn';

//
// Index
//
$lang['Admin'] = 'Ums�sla';
$lang['Not_admin'] = '�� ert ekki me� heimild til a� stj�rna �essu umr��ubor�i';
$lang['Welcome_phpBB'] = 'Velkomin til phpBB';
$lang['Admin_intro'] = '�akka ��r fyrir a� hafa vali� phpBB sem lausn fyrir ��nar umr��ur. �essi skj�r s�nir ��r uppl�singar um �msa ��tti umr��ubor�sins. �� getur fari� aftur til baka � �essa s��u me� �v� a� �ta � <u>Umsj�n, yfirlit</u> tengil efst � vinstri hluta skj�sins. Til a� fara � fors��u umr��ubor�sins, �� �tir�u � phpBB myndina l�ka efst � vinstri hluta skj�sins. A�rir tenglar � vinstri hluta skj�sins hj�lpa ��r vi� a� stj�rna �llum atri�um � umr��ubor�i ��nu, hver og einn skj�r er me� lei�beiningar um hva� � a� gera.';
$lang['Main_index'] = 'Umr��ur, fors��a';
$lang['Forum_stats'] = 'T�lfr��i bor�s';
$lang['Admin_Index'] = 'Umsj�n, yfirlit';
$lang['Preview_forum'] = 'Sko�a umr��ubor�';

$lang['Click_return_admin_index'] = '�ti� %sH�r%s til a� fara til baka � Umsj�n, yfirlit';

$lang['Statistic'] = 'T�lfr��i';
$lang['Value'] = 'Gildi';
$lang['Number_posts'] = 'Fj�ldi innleggja';
$lang['Posts_per_day'] = 'Innlegg � dag';
$lang['Number_topics'] = 'Fj�ldi spjall�r��a';
$lang['Topics_per_day'] = 'Spjall�r��ir � dag';
$lang['Number_users'] = 'Fj�ldi notenda';
$lang['Users_per_day'] = 'Notendur � dag';
$lang['Board_started'] = 'Umr��ubor� byrjar';
$lang['Avatar_dir_size'] = 'St�r� � myndam�ppu';
$lang['Database_size'] = 'St�r� � gagnagrunni';
$lang['Gzip_compression'] = 'Gzip gagna�j�ppun';
$lang['Not_available'] = 'Ekki til';

$lang['ON'] = '�'; // This is for GZip compression
$lang['OFF'] = 'AF';

//
// DB Utils
//
$lang['Database_Utilities'] = 'Gagnagrunns t�l';

$lang['Restore'] = 'N� � afrit';
$lang['Backup'] = 'Taka afrit';
$lang['Restore_explain'] = 'H�r n�r� �� aftur � �ll g�gn phpBB sem var ��ur b�i� a� geyma � skr� � �inni t�lvu. Ef �j�nustua�ili sty�ur �� getur �� sent gzip �j�ppa�a texta skr� og h�n ver�ur �� sj�lfvirkt af�j�ppu�. <b>VI�V�RUN</b> �etta skrifar yfir �ll n�verandi g�gn. �a� getur teki� langan t�ma a� n� � og setja upp �ll g�gnin. Ekki fara fr� �essari s��u fyrr en �a� er b�i�.';
$lang['Backup_explain'] = 'H�r tekur �� afrit af �llum g�gnum phpBB umr��uh�psins. Ef �� hefur einhverjar auka s�rhanna�ar t�flur � sama gagnagrunni og phpBB �� ver�ur �� a� skr� n�fnin � �eim s�rstaklega me� kommu � milli � Auka T�flu textah�lfi h�r ne�anvi�. Ef vef�j�nninn sty�ur �a� �� getur �� l�ka gzip �jappa� skr�na til a� minnka pl�ssi� sem h�n tekur ��ur en �� s�kir hana.';

$lang['Backup_options'] = 'Stillingar afrits';
$lang['Start_backup'] = 'Byrja afritun';
$lang['Full_backup'] = 'Afrita allt';
$lang['Structure_backup'] = 'Afrita bara uppsetningu';
$lang['Data_backup'] = 'Afrita bara g�gn';
$lang['Additional_tables'] = 'Auka t�flur';
$lang['Gzip_compress'] = 'Gzip �jappa skr�';
$lang['Select_file'] = 'Velja skr�';
$lang['Start_Restore'] = 'Byrja a� setja upp afrit';

$lang['Restore_success'] = 'Gagnagrunnurinn hefur veri� settur upp a� fullu aftur.<br /><br />Umr��ubor�i� � a� vera komi� upp eins og �a� var ��ur en �� t�kst afriti�.';
$lang['Backup_download'] = '�a� �tti a� byrja flj�tlega flutningur � skr�nni til ��n';
$lang['Backups_not_supported'] = '�v� mi�ur er stu�ningur vi� afritun � �essum gagnagrunni ekki fyrir hendi � vef�j�ninum.';

$lang['Restore_Error_uploading'] = 'Villa vi� flutning � skr�nni';
$lang['Restore_Error_filename'] = 'Villa � nafni, reyndu a�ra skr�';
$lang['Restore_Error_decompress'] = 'Get ekki af�jappa� gzip skr�, �� �arft a� flytja ��jappa�a skr�';
$lang['Restore_Error_no_file'] = 'Engin skr� var flutt';

//
// Auth pages
//
$lang['Select_a_User'] = 'Veldu notanda';
$lang['Select_a_Group'] = 'Veldu h�p';
$lang['Select_a_Forum'] = 'Veldu umr��ur';
$lang['Auth_Control_User'] = 'Heimilda stj�rnun'; 
$lang['Auth_Control_Group'] = 'Heimildir fyrir h�pa'; 
$lang['Auth_Control_Forum'] = 'Heimildir fyrir umr��ur'; 
$lang['Look_up_User'] = 'Leita a� notanda'; 
$lang['Look_up_Group'] = 'Leita a� h�p'; 
$lang['Look_up_Forum'] = 'Leita a� umr��um'; 

$lang['Group_auth_explain'] = 'H�r getur �� breytt heimild og umsj�narmanns st��u �ess sem er skr��ur fyrir hvern h�p. Ekki gleyma a� vi� a� breyta heimild hvers h�ps �� getur heimild hvers notanda hleypt honum a� umr��unum o.s.fv. �� munt vera vara�ur vi� ef �a� gerist.';
$lang['User_auth_explain'] = 'H�r getur �� breytt heimild og umsj�narmanns st��u fyrir hvern notanda fyrir sig. Ekki gleyma a� vi� a� breyta heimild hvers notanda �� getur heimild hvers h�ps hleypt honum a� umr��unum o.s.fv. �� munt vera vara�ur vi� ef �a� gerist.';
$lang['Forum_auth_explain'] = 'H�r getur �� breytt a�gangs stigum fyrir hverjar umr��ur. �� f�r� b��i einfalda og fl�kna a�fer� til a� framkv�ma �etta, fl�kin a�fer� gefur ��r meiri sveigjanleika � stillingum � umr��unum. Mundu a� me� �v� a� breyta a�gangi a� umr��um getur �a� haft �hrif hva�a notendur geta gert hva�.';

$lang['Simple_mode'] = 'Einf�ld a�fer�';
$lang['Advanced_mode'] = 'Fl�kin a�fer�';
$lang['Moderator_status'] = 'Sta�a umsj�narmanna';

$lang['Allowed_Access'] = 'A�gangur heimill';
$lang['Disallowed_Access'] = 'A�gangur �heimill';
$lang['Is_Moderator'] = 'Er stj�rnandi';
$lang['Not_Moderator'] = 'Ekki stj�rnandi';

$lang['Conflict_warning'] = 'Heimildir stangast �';
$lang['Conflict_access_userauth'] = '�essi notandi hefur enn�� a�gang a� �essum umr��um � gegnum h�p a�gang. �� getur breytt heimild h�psins e�a eytt �essum notenda h�p til a� �tiloka alveg a� �eir hafi a�gang. Heimildir h�pa (og umr��ur sem � vi�) eru lista�ar h�r ne�ar.';
$lang['Conflict_mod_userauth'] = '�essi notandi hefur enn r�ttindi stj�rnanda � gegnum h�p a�gang. �� getur breytt heimild h�psins e�a �� getur eytt �essum h�p til a� �tiloka alveg stj�rnunar heimild. Heimildir h�panna (og umr��u flokka sem � vi�) eru lista�ar h�r ne�an vi�.';

$lang['Conflict_access_groupauth'] = 'Eftirfarandi notandi (e�a notendur) hafa enn a�gang a� �essum umr��um me� stillingum � heimildum s�num. �� getur breytt heimildum �eirra til a� �tiloka �� fr� �v� sem vi� �. Heimildir notanda (notenda) og umr��ur sem � vi� eru lista�ar h�r ne�an vi�.';
$lang['Conflict_mod_groupauth'] = 'Eftirfarandi notandi (e�a notendur) hafa enn a�gang stj�rnanda a� �essum umr��um me� stillingum � heimildum �eirra. �� getur breytt heimildum �eirra til a� �tiloka �� fr� �v� a� hafa r�ttindi stj�rnanda. Heimildir notanda (notenda) og umr��ur sem � vi� eru lista�ar h�r ne�an vi�.';

$lang['Public'] = 'Almennt';
$lang['Private'] = 'Einka';
$lang['Registered'] = 'Skr��ur';
$lang['Administrators'] = 'Umsj�narma�ur';
$lang['Hidden'] = 'Falinn';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ALLIR';
$lang['Forum_REG'] = 'SKR��UR';
$lang['Forum_PRIVATE'] = 'EINKA';
$lang['Forum_MOD'] = 'STJ�RN';
$lang['Forum_ADMIN'] = 'UMSJ�N';

$lang['View'] = 'Sko�a';
$lang['Read'] = 'Lesa';
$lang['Post'] = 'Innlegg';
$lang['Reply'] = 'Svara';
$lang['Edit'] = 'Breyta';
$lang['Delete'] = 'Ey�a';
$lang['Sticky'] = 'L�ma';
$lang['Announce'] = 'Tilkynning'; 
$lang['Vote'] = 'Kj�sa';
$lang['Pollcreate'] = 'B�a til k�nnun';

$lang['Permissions'] = 'Heimildir';
$lang['Simple_Permission'] = 'Einf�ld heimild';

$lang['User_Level'] = 'Heimild notanda'; 
$lang['Auth_User'] = 'Notandi';
$lang['Auth_Admin'] = 'Umsj�narma�ur';
$lang['Group_memberships'] = 'Me�limir notendah�pa';
$lang['Usergroup_members'] = '�essi h�pur hefur eftirtalda me�limi';

$lang['Forum_auth_updated'] = 'Heimildir umr��a uppf�r�ar';
$lang['User_auth_updated'] = 'Heimildir notenda uppf�r�ar';
$lang['Group_auth_updated'] = 'Heimildir h�pa uppf�r�ar';

$lang['Auth_updated'] = 'Heimildir hafa veri� uppf�r�ar';
$lang['Click_return_userauth'] = '�ti� %sH�r%s til a� fara aftur � heimildir notanda';
$lang['Click_return_groupauth'] = '�ti� %sH�r%s til a� fara aftur � h�p heimildir';
$lang['Click_return_forumauth'] = '�ti� %sH�r%s til a� fara aftur � heimildir umr��ubor�s';

//
// Banning
//
$lang['Ban_control'] = 'Bann stj�rnun';
$lang['Ban_explain'] = 'H�r getur �� �tiloka� �kve�na notendur. �� getur n�� �v� me� �v� a� banna anna�hvort �kve�inn notanda og/e�a r�� af IP t�lum e�a net�j�num. �essi a�fer� �tilokar notanda fr� �v� jafnvel a� sj� fors��una � umr��ubor�inu. Til a� �tiloka notanda fr� �v� a� skr� sig undir ��ru notendanafni �� getur �� l�ka �tiloka� �kve�in netf�ng. Athuga�u a� �a� eitt a� banna netfang �tilokar ekki a� notandi geti ekki sent inn innlegg og skr�� sig inn, �� �arft a� nota a�ra fyrri a�fer�ina l�ka til �ess.';
$lang['Ban_explain_warn'] = 'Athuga�u a� me� �v� a� sl� inn r�� af IP t�lum veldur �v� a� allar t�lur fr� byrjun a� enda eru settar � bannlista. Reynt ver�ur a� minnka �ann fj�lda talna sem b�tt er � gagnagrunninn me� �v� a� nota * sj�lfvirkt eftir �v� sem vi� �. Ef �� �arft endilega a� setja inn r�� af t�lum haf�u ��r eins f�ar og h�gt er og enn betra er a� tilgreina �kve�nar t�lur.';

$lang['Select_username'] = 'Veldu notandanafn';
$lang['Select_ip'] = 'Veldu IP t�lu';
$lang['Select_email'] = 'Veldu netfang';

$lang['Ban_username'] = 'Banna fleiri en einn notanda';
$lang['Ban_username_explain'] = '�� getur banna� fleiri en einn notanda � einu me� �v� a� nota m�sina og lyklabor�i� eins og hentar fyrir ��na t�lvu og �inn vafra.';

$lang['Ban_IP'] = 'Banna eina e�a fleiri IP t�lur e�a vef�j�na';
$lang['IP_hostname'] = 'IP t�lur e�a vef�j�na';
$lang['Ban_IP_explain'] = 'Til a� tilgreina margar mismunandi IP t�lur e�a vef�j�na �� �arf a� hafa kommu � milli. Til a� tilgreina r�� af IP t�lum haf�u �� m�nus (-) � milli �eirra, til a� nota� s� * � skr�ningu';

$lang['Ban_email'] = 'Banna eitt e�a fleiri netf�ng';
$lang['Ban_email_explain'] = 'Til a� tilgreina fleiri en eitt netfang �� �arf a� hafa kommu � milli. Til a� tilgreina m�rg me� s�mu st�fum �� noti� *, til d�mis *@hotmail.com';

$lang['Unban_username'] = 'Leyfa aftur einn e�a fleiri notendur';
$lang['Unban_username_explain'] = '�� getur leyft marga notendur � einu me� �v� a� halda ni�ri ctrl takkanum um lei� og �� klikkar me� m�sinni';

$lang['Unban_IP'] = 'Leyfa aftur eina e�a fleiri IP t�lur';
$lang['Unban_IP_explain'] = '�� getur leyft margar IP t�lur � einu me� �v� a� halda ni�ri ctrl takkanum um lei� og �� klikkar me� m�sinni';

$lang['Unban_email'] = 'Leyfa eitt e�a fleiri netf�ng � einu';
$lang['Unban_email_explain'] = '�� getur leyft m�rg netf�ng � einu � einu me� �v� a� halda ni�ri ctrl takkanum um lei� og �� klikkar me� m�sinni';

$lang['No_banned_users'] = 'Engin b�nnu� notendan�fn';
$lang['No_banned_ip'] = 'Engar banna�ar IP t�lur';
$lang['No_banned_email'] = 'Engin b�nnu� netf�ng';

$lang['Ban_update_sucessful'] = 'Bannlistinn hefur veri� uppf�r�ur';
$lang['Click_return_banadmin'] = '�ti� %sH�r%s til a� fara aftur � Bann stj�rnun';

//
// Configuration
//
$lang['General_Config'] = 'Almenn uppsetning';
$lang['Config_explain'] = 'Formi� h�r ne�an vi� gefur kleift a� breyta �llum almennum stillingum � umr��ubor�inu. Fyrir Notenda og Umr��u bor�s stillingar �� skaltu nota vi�eigandi tengla � vinstri skj�num.';

$lang['Click_return_config'] = '�ti� %sH�r%s til a� fara aftur � Almenna uppsetningu';

$lang['General_settings'] = 'Almenn stilling � bor�i';
$lang['Server_name'] = 'Nafn l�ns';
$lang['Server_name_explain'] = 'Nafn l�ns �a�an sem �etta bor� er keyrt fr�';
$lang['Script_path'] = 'Sl�� � umr��ur';
$lang['Script_path_explain'] = 'Sl��in �ar sem phpBB2 er sta�sett s�� fr� l�ninu, ss. /spjall/';
$lang['Server_port'] = 'Port � vef�j�n';
$lang['Server_port_explain'] = 'Porti� sem vef�j�nn �inn er keyr�ur �, venjulegas 80, bara breyta ef �etta er anna� port';
$lang['Site_name'] = 'Nafn s��u';
$lang['Site_desc'] = 'L�sing � s��u';
$lang['Board_disable'] = 'Gera bor� �virkt';
$lang['Board_disable_explain'] = '�etta er til a� gera bor�i� �virkt fyrir notendur. Ekki skr� �ig �t �ar sem �� getur �� ekki skr�� �ig inn aftur!';
$lang['Acct_activation'] = 'Gera a�gangs virkjun virka';
$lang['Acc_None'] = 'Enginn'; // These three entries are the type of activation
$lang['Acc_User'] = 'Notandi';
$lang['Acc_Admin'] = 'Stj�rnandi';

$lang['Abilities_settings'] = 'Notanda og Umr��ubor�s grunnstillingar';
$lang['Max_poll_options'] = 'Mesti fj�ldi m�guleika � kosningum';
$lang['Flood_Interval'] = 'Millibil � milli innleggja';
$lang['Flood_Interval_explain'] = 'Fj�ldi sek�nda sem notandi ver�ur a� b��a � milli �ess sem hann sendir inn innlegg'; 
$lang['Board_email_form'] = 'Notandi getur sent P�st um bor�i�';
$lang['Board_email_form_explain'] = 'Notendur geta sent hvor ��rum P�st um bor�i�';
$lang['Topics_per_page'] = 'Spjall�r��ir � bla�s��u';
$lang['Posts_per_page'] = 'Innlegg � bla�s��u';
$lang['Hot_threshold'] = 'Fj�ldi innleggja til a� ver�a vins�l';
$lang['Default_style'] = 'Sj�lfvali� �ema';
$lang['Override_style'] = 'Taka yfir �ema sem notandi velur';
$lang['Override_style_explain'] = 'Tekur yfir �ema sem notandi velur';
$lang['Default_language'] = 'Sj�lfvali� tungum�l';
$lang['Date_format'] = 'Form � dagsetningu';
$lang['System_timezone'] = 'T�mabelti kerfis';
$lang['Enable_gzip'] = 'Virkja GZip gagna�j�ppun';
$lang['Enable_prune'] = 'Virkja ey�ingu � eldri innleggjum';
//
// MOD: Birthday/Zodiac v1.0.2
//
$lang['Require_birthday'] = '�urfa notendur a� gefa upp aldur?';
$lang['Require_birthday_explain'] = 'H�r getur �� vali� hvort notendur �urfa e�a f� m�guleika a� gefa upp aldur sinn.';
$lang['Min_user_age'] = 'Minnsti aldur notenda (�r)';
$lang['Max_user_age'] = 'Mesti aldur notenda (�r)';
$lang['Birthday_lookahead'] = '# daga sem � a� athuga me� afm�li';
$lang['Birthday_lookahead_explain'] = 'H�r getur �� vali� hve marga daga fram � t�mann � a� athuga me� afm�li. N�ll tekur �etta �r sambandi.';
$lang['Show_birthday_to_guests'] = '� a� leyfa gestum a� sj� afm�lisdaga notenda?';
$lang['Show_birthday_to_guests_explain'] = 'H�r getur �� vali� hvort gestir � s��unni geta s�� afm�lisdaga notenda, bara aldur, e�a ekkert af �essu.';
$lang['Show_birthday_to_guests_none'] = 'Nei';
$lang['Show_birthday_to_guests_age'] = 'Bara aldur';
$lang['Show_birthday_to_guests_all'] = 'Aldur+Afm�lisdagur';
$lang['Show_zodiac_sign'] = 'S�na stj�rnumerki og heiti?';
$lang['Show_zodiac_sign_explain'] = 'Ef aldur og/e�a afm�lisdagur er s�ndur, �� s�nir �etta stj�rnumerki og texta, til d�mis r�tt hj� uppl�singa d�lki h�fundar.';
//
// MOD: -END-
//
$lang['Allow_HTML'] = 'Leyfa HTML';
$lang['Allow_BBCode'] = 'Leyfa BB k��a';
$lang['Allowed_tags'] = 'Leyf� HTML t�g';
$lang['Allowed_tags_explain'] = 'Haf�u kommu � milli tagga';
$lang['Allow_smilies'] = 'Leyfa broskalla';
$lang['Smilies_path'] = 'Sl�� a� brosk�llum';
$lang['Smilies_path_explain'] = 'Sl�� undir phpBB r�tar m�ppur, t.d. images/smilies';
$lang['Allow_sig'] = 'Leyfa undirskrift';
$lang['Max_sig_length'] = 'Mesta lengd � undiskrift';
$lang['Max_sig_length_explain'] = 'Mesti fj�ldi � st�fum sem leyfilegur er � undirskrift';
$lang['Allow_name_change'] = 'Leyfa breytingu � notendanafni';

$lang['Avatar_settings'] = 'Stillingar � Myndum';
$lang['Allow_local'] = 'Virkja Mynda galler�';
$lang['Allow_remote'] = 'Heimila Myndir fr� ��rum vef�j�n';
$lang['Allow_remote_explain'] = 'Myndir sem eru v�sa� � � annarri heimas��u';
$lang['Allow_upload'] = 'Heimila a� Myndir eru s�ttar og geymdar � vef�j�n';
$lang['Max_filesize'] = 'Mesta skr�ar st�r� � Mynd';
$lang['Max_filesize_explain'] = 'Fyrir skr�r sem s�ttar eru';
$lang['Max_avatar_size'] = 'Mesta punkta st�r� Myndar';
$lang['Max_avatar_size_explain'] = '(H�� x Breidd � punktum)';
$lang['Avatar_storage_path'] = 'Sl�� a� Myndum';
$lang['Avatar_storage_path_explain'] = 'Sl�� undir phpBB r�tar m�ppu, t.d. images/avatars';
$lang['Avatar_gallery_path'] = 'Sl�� a� Myndasafni';
$lang['Avatar_gallery_path_explain'] = 'Sl�� undir phpBB r�tar m�ppu fyrir myndir sem eru settar inn fyrirfram, t.d. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Stilling';
$lang['COPPA_fax'] = 'COPPA Fax N�mer';
$lang['COPPA_mail'] = 'COPPA Netfang';
$lang['COPPA_mail_explain'] = '�etta er netfang sem foreldrar geta sent inn COPPA skr�ningar ey�ubla�i�';

$lang['Email_settings'] = 'Email/p�st stillingar';
$lang['Admin_email'] = 'Netfang umsj�narmanns';
$lang['Email_sig'] = 'Undirskrift � p�st';
$lang['Email_sig_explain'] = '�essi texti er settur aftan vi� allan p�st sem bor�i� sendir';
$lang['Use_SMTP'] = 'Nota SMTP p�st�j�n fyrir p�stsendingar';
$lang['Use_SMTP_explain'] = 'Virkja ef �� vilt senda p�st me� ��rum p�st�j�n en �eim sem er innbygg�ur � umr��ubor�i�';
$lang['SMTP_server'] = 'Vistfang SMTP p�st�j�ns';
$lang['SMTP_username'] = 'SMTP Notandanafn';
$lang['SMTP_username_explain'] = 'Bara setja inn nafn ef p�st�j�nn krefst �ess';
$lang['SMTP_password'] = 'A�gangsor� p�st�j�ns';
$lang['SMTP_password_explain'] = 'Bara setja inn a�gangsor� ef p�st�j�nn krefst �ess';

$lang['Disable_privmsg'] = 'Einkap�stur';
$lang['Inbox_limits'] = 'Mesta magn p�sts � Innh�lfi';
$lang['Sentbox_limits'] = 'Mesta magn p�sts � h�lfi fyrir Sendan p�st';
$lang['Savebox_limits'] = 'Mesta magn p�sts � h�lfi fyrir Vista�an p�st';

$lang['Cookie_settings'] = 'Stillingar � vefk�kum'; 
$lang['Cookie_settings_explain'] = '�essar stillingar segja til hvernig vefk�kur eru sendar til vefvafra notenda. � flestum tilfellum eru sj�lfgefin gildi best en ef �� �arft a� breyta �eim af einhverjum s�kum �� ger�u �a� me� var��, rangar stillingar geta valdi� a� notendur geti ekki skr�� sig inn';
$lang['Cookie_domain'] = 'L�n fyrir vefk�kur';
$lang['Cookie_name'] = 'Nafn � vefk�kum';
$lang['Cookie_path'] = 'Sl�� fyrir vefk�kur';
$lang['Cookie_secure'] = 'Vefk�kur � SSL';
$lang['Cookie_secure_explain'] = 'Ef vef�j�nninn �inn er keyr�ur yfir SSL �� � a� virkja �essa stillingu, annars ekki';
$lang['Session_length'] = 'Lengd innskr�ningar [ sek�ndur ]';

//
// Forum Management
//
$lang['Forum_admin'] = 'Stj�rnun Umr��ubor�s';
$lang['Forum_admin_explain'] = '� �essari s��u getur �� b�tt vi�, eytt, breytt, endur-ra�a� og endur-stillt umr��u flokka og umr��ur';
$lang['Edit_forum'] = 'Breyta umr��um';
$lang['Create_forum'] = 'B�ta vi� umr��um';
$lang['Create_category'] = 'B�ta vi� umr��uflokk';
$lang['Remove'] = 'Ey�a';
$lang['Action'] = 'A�ger�';
$lang['Update_order'] = 'Uppf�ra r��';
$lang['Config_updated'] = 'T�kst a� uppf�ra stillingar';
$lang['Edit'] = 'Breyta';
$lang['Delete'] = 'Ey�a';
$lang['Move_up'] = 'F�ra upp';
$lang['Move_down'] = 'F�ra ni�ur';
$lang['Resync'] = 'Endurstilla';
$lang['No_mode'] = 'Engin a�ger� stillt';
$lang['Forum_edit_delete_explain'] = 'Formi� h�r ne�anvi� er til a� breyta grunnstillingum fyrir umr��ubor�i�. Fyrir "notendur" og "umr��ur", noti� �� vi�eigandi tengla � vinstri hluta skj�sins';

$lang['Move_contents'] = 'F�ra allt innihald';
$lang['Forum_delete'] = 'Ey�a umr��um';
$lang['Forum_delete_explain'] = 'Formi� h�r ne�an vi� gefur kleyft a� ey�a umr��um (e�a umr��u flokka) e�a �kve�i� hvar �� vilt hafa spjall�r��ina (e�a umr��urnar).';

$lang['Status_locked'] = 'Loka�';
$lang['Status_unlocked'] = 'Opnar';
$lang['Forum_settings'] = 'Almennar stillingar fyrir umr��ur';
$lang['Forum_name'] = 'Nafn � umr��uh�pnum';
$lang['Forum_desc'] = 'L�sing';
$lang['Forum_status'] = 'Sta�a umr��ubor�s';
$lang['Forum_pruning'] = 'Sj�lfvirk ey�ing gagna';

$lang['prune_freq'] = 'Athuga me� aldur spjall�r��a alla daga';
$lang['prune_days'] = 'Ey�a spjall�r��um sem ekki hefur veri� sett innlegg';
$lang['Set_prune_data'] = '�� hefur sett sj�lfvirka ey�ingu � en �� settir ekki hversu oft e�a me� hva� margra daga millibili. Far�u aftur og stilltu �a�';

$lang['Move_and_Delete'] = 'F�ra og ey�a';

$lang['Delete_all_posts'] = 'Ey�a �llum innleggjum';
$lang['Nowhere_to_move'] = 'Ekki vali� hvert � a� f�ra';

$lang['Edit_Category'] = 'Breyta umr��uflokki';
$lang['Edit_Category_explain'] = 'Noti� �etta form til a� breyta nafni � umr��uh�pi.';

$lang['Forums_updated'] = 'Umr��ur og flokkar uppf�r�ir';

$lang['Must_delete_forums'] = '�� �arft a� ey�a �llum umr��um ��ur en �� getur eytt flokki';

$lang['Click_return_forumadmin'] = '�ti� %sH�r%s til a� fara til baka � "Umr��u stj�rnun"';

//
// Smiley Management
//
$lang['smiley_title'] = 'H�r er h�gt a� breyta brosk�llum';
$lang['smile_desc'] = '� �essari s��u getur �� b�tt vi�, eytt og breytt brosk�llum sem notendur geta nota� � innleggjum og einkap�sti.';

$lang['smiley_config'] = 'Broskalla stillingar';
$lang['smiley_code'] = 'Broskalla k��ar';
$lang['smiley_url'] = 'Skr� fyrir broskalla';
$lang['smiley_emot'] = 'Broskall';
$lang['smile_add'] = 'B�ta vi� n�jum broskalli';
$lang['Smile'] = 'Broskall';
$lang['Emotion'] = 'Svipbrig�i';

$lang['Select_pak'] = 'Veldu pakka (.pak) Skr�';
$lang['replace_existing'] = 'Skipta um n�verandi broskall';
$lang['keep_existing'] = 'Halda n�verandi broskalli';
$lang['smiley_import_inst'] = '�� �arft a� af�jappa broskalla skr�nni og senda hana svo � vi�eigandi m�ppu � vef�j�ninum ��num. Svo �arftu a� skr� r�ttar uppl�singar h�r � s��una til a� flytja inn broskallana.';
$lang['smiley_import'] = 'Broskalla innflutningur';
$lang['choose_smile_pak'] = 'Veldu broskalla pakka (.pak) skr�';
$lang['import'] = 'Flytja inn broskalla';
$lang['smile_conflicts'] = 'Hva� � a� gera ef ver�ur �rekstur';
$lang['del_existing_smileys'] = 'Ey�a n�verandi broskalli fyrir innflutning';
$lang['import_smile_pack'] = 'Flytja inn broskall';
$lang['export_smile_pack'] = 'B�a til broskalla Pakka skr�';
$lang['export_smiles'] = 'Til a� b�a til broskalla pakka skr� �r n�verandi brosk�llum, �ttu �� %sH�r%s til a� s�kja smiles.pak skr�. Nefndu �essa skr� me� vi�eigandi nafni og vertu viss um a� halda skr�ar endingunni (.pak). �� getur �� �tb�i� zip skr� sem inniheldur alla broskallana ��na �samt �essa .pak stillinga skr�.';

$lang['smiley_add_success'] = '�essum broskalli t�kst a� b�ta vi�';
$lang['smiley_edit_success'] = '�a� t�kst a� uppf�ra �ennan broskall';
$lang['smiley_import_success'] = '�a� t�kst a� flytja inn Broskalla pakkann';
$lang['smiley_del_success'] = '�a� t�kst a� ey�a �essum broskalli';
$lang['Click_return_smileadmin'] = '�ti� %sH�r%s til a� fara til baka � broskalla umsj�n';

//
// User Management
//
$lang['User_admin'] = 'Notenda Ums�sla';
$lang['User_admin_explain'] = 'H�r getur �� breytt notenda uppsetningu og auka uppsetningu var�andi ��. Til a� breyta heimildum notenda �� � a� nota �ar til ger�ar valmyndir.';

$lang['Look_up_user'] = 'Leita a� notanda';

$lang['Admin_user_fail'] = 'Gat ekki uppf�rt uppsetningu notanda.';
$lang['Admin_user_updated'] = '�a� t�kst a� uppf�ra uppsetningu notanda.';
$lang['Click_return_useradmin'] = '�ti� %sH�r%s til a� fara til baka � "Notenda Ums�slu"';

$lang['User_delete'] = 'Ey�a �essum notanda';
$lang['User_delete_explain'] = '�ti� h�r til a� ey�a �essum notanda, ekki er h�gt a� h�tta vi�.';
$lang['User_deleted'] = 'T�kst a� ey�a notanda.';

$lang['User_status'] = 'Notandi er virkur';
$lang['User_allowpm'] = 'Getur sent einkap�st';
$lang['User_allowavatar'] = 'Getur veri� me� myndir';

$lang['Admin_avatar_explain'] = 'H�r getur �� s�� og eytt mynd notanda';

$lang['User_special'] = 'S�rstakir reitir, bara fyrir stj�rnanda';
$lang['User_special_explain'] = '�essum reitum getur notandi ekki breytt. H�r getur �� breytt st��u og ��rum stillingum sem notandi s�r ekki.';

//
// Group Management
//
$lang['Group_administration'] = 'H�p umsj�n';
$lang['Group_admin_explain'] = 'Fr� �essu stj�rnbor�i getur �� stj�rna� �llum notenda h�pum, �� getur; eytt, b�i� til og breytt h�pum sem til eru. �� getur vali� umsj�narmenn, opna� e�a loka� h�p, nefnt h�p og sett l�singu';
$lang['Error_updating_groups'] = '�a� kom villa vi� a� uppf�ra h�pa';
$lang['Updated_group'] = '�a� t�kst a� uppf�ra h�pa';
$lang['Added_new_group'] = '�a� t�kst a� b�a til n�jan h�p';
$lang['Deleted_group'] = '�a� t�kst a� ey�a �essum h�p';
$lang['New_group'] = 'B�a til n�jan h�p';
$lang['Edit_group'] = 'Breyta h�p';
$lang['group_name'] = 'Nafn � h�p';
$lang['group_description'] = 'L�sing � h�p';
$lang['group_moderator'] = 'Umsj�narma�ur h�ps';
$lang['group_status'] = 'Sta�a h�ps';
$lang['group_open'] = 'Opinn h�pur';
$lang['group_closed'] = 'Loka�ur h�pur';
$lang['group_hidden'] = 'Falinn h�pur';
$lang['group_delete'] = 'Ey�a h�p';
$lang['group_delete_check'] = 'Ey�a �essum h�p';
$lang['submit_group_changes'] = 'Senda inn breytingar';
$lang['reset_group_changes'] = 'N�llsetja breytingar';
$lang['No_group_name'] = '�� ver�ur a� nefna �ennan h�p';
$lang['No_group_moderator'] = '�� ver�ur a� hafa umsj�narmann fyrir �ennan h�p';
$lang['No_group_mode'] = '�� ver�ur a� velja hvort h�pur � a� vera opinn e�a loka�ur';
$lang['No_group_action'] = 'Ekkert var vali�';
$lang['delete_group_moderator'] = 'Ey�a umsj�narmanni gamals h�ps?';
$lang['delete_moderator_explain'] = 'Ef �� ert a� breyta umsj�narmanni h�ps, veldu �� �etta box til a� ey�a eldri umsj�narmanni fr� �essum h�p. Ekki velja �etta box annars, �� ver�ur umsj�narma�ur sem venjulegur notandi h�psins.';
$lang['Click_return_groupsadmin'] = '�ti� %sH�r%s til a� fara til baka � "H�p umsj�n".';
$lang['Select_group'] = 'Veldu h�p';
$lang['Look_up_group'] = 'Leita a� h�p';

//
// Prune Administration
//
$lang['Forum_Prune'] = 'Ey�a eldra efni';
$lang['Forum_Prune_explain'] = '�etta ey�ir g�mlum spjall�r��um �ar sem ekki hefur komi� svar vi� eftir �ann  fj�lda daga sem �� velur. Ef �� setur ekki inn t�lu �� ver�ur �llum spjall�r��um eytt. �etta ey�ir ekki spjall�r��um sem eru me� virkar kosningar e�a tilkynningar. �� ver�ur a� ey�a �essum spjall�r��um handvirkt.';
$lang['Do_Prune'] = 'Ey�a eldra efni';
$lang['All_Forums'] = 'Allir umr��u flokkar';
$lang['Prune_topics_not_posted'] = 'Ey�a spjall�r��um sem ekki er svara� eftir �kve�i� marga daga';
$lang['Topics_pruned'] = 'Spjall�r��um eytt';
$lang['Posts_pruned'] = 'Innleggjum eytt';
$lang['Prune_success'] = '�a� t�kst a� ey�a g�mlum umr��um';

//
// Word censor
//
$lang['Words_title'] = 'Ritsko�un/or�a eftirlit';
$lang['Words_explain'] = 'H�r getur �� b�tt vi� or�um sem �arf a� ritsko�a. Einnig getur �� breytt og eytt or�um �r lista yfir or� sem sj�lfvirkt ver�a fjarl�g� �r umr��unum. A� auki geta notendur ekki skr�� sig undir nafni sem inniheldur �essi or�. Heimilt er a� nota stj�rnu (*) til vi�b�tar vi� or�, td. *p�st* passar vi� einkap�stur, p�st* passar vi� p�stur, *p�st passar vi� einkap�st.';
$lang['Word'] = 'Or�';
$lang['Edit_word_censor'] = 'Breyta ritsko�u�um or�um';
$lang['Replacement'] = 'Or� sem kemur � sta�inn';
$lang['Add_new_word'] = 'B�ta vi� or�i';
$lang['Update_word'] = 'Uppf�ra or�a skr�';

$lang['Must_enter_word'] = '�� ver�ur a� setja inn or� og anna� or� sem kemur � sta�inn';
$lang['No_word_selected'] = 'Ekkert or� vali� til a� breyta';

$lang['Word_updated'] = 'Vali� or� hefur veri� uppf�rt � gagnagrunn';
$lang['Word_added'] = 'Or�i hefur veri� b�tt vi� � ritsko�un';
$lang['Word_removed'] = 'V�ldu or�i hefur veri� eytt';

$lang['Click_return_wordadmin'] = '�ti� %sH�r%s til a� fara til baka � ritsko�a/or�a eftirlits stj�rnun';

//
// Mass Email
//
$lang['Mass_email_explain'] = 'H�r getur �� sent P�st til anna� hvort allra notenda �inna e�a allra notenda � �kve�num h�p. Til a� gera �a� �� er sendur p�stur til netfangs umsj�narmanns sem slegi� er inn og svo er sent afrit til allra valinna notenda. Ef �� ert a� senda � st�ran h�p �� �arft �� a� vera �olinm��/ur �v� a� �a� tekur langan t�ma a� senda m�rgum p�st og ekki stoppa eftir h�lfa s��u. �� ver�ur l�tinn vita �egar �etta er b�i�.';
$lang['Compose'] = 'Semja'; 

$lang['Recipients'] = 'M�tttakendur'; 
$lang['All_users'] = 'Allir notendur';

$lang['Email_successfull'] = 'Skilabo�in hafa veri� send';
$lang['Click_return_massemail'] = '�ti� %sH�r%s til a� fara til baka � Fj�lp�sts s��u';

//
// Ranks admin
//
$lang['Ranks_title'] = 'Umsj�n me� stigum';
$lang['Ranks_explain'] = 'H�r er h�gt a� b�ta vi�, breyta, sko�a og ey�a stigum. �� getur l�ka b�i� til stig sem h�gt er a� b�ta vi� notendur � umsj�nar s��u fyrir notendur';

$lang['Add_new_rank'] = 'B�ta vi� stigum';

$lang['Rank_title'] = 'Nafn stigs';
$lang['Rank_special'] = 'Hafa sem s�rstakt stig';
$lang['Rank_minimum'] = 'Minnsti fj�ldi innleggja';
$lang['Rank_maximum'] = 'Mesti fj�ldi innleggja';
$lang['Rank_image'] = 'Mynd stigs (Fr� r�tar m�ppu phpBB2)';
$lang['Rank_image_explain'] = 'H�r velur �� litla mynd sem fylgir me� stiginu';

$lang['Must_select_rank'] = '�� ver�ur a� velja stig';
$lang['No_assigned_rank'] = 'Ekkert s�rstakt stig vali�';

$lang['Rank_updated'] = '�a� t�kst a� uppf�ra stig';
$lang['Rank_added'] = '�a� t�kst a� b�ta vi� stigum';
$lang['Rank_removed'] = '�a� t�kst a� ey�a stigum';
$lang['No_update_ranks'] = '�a� t�kst a� ey�a stigunum, hinsvegar var ekki eytt fr� notendum sem nota �essi stig. �� �arft a� stilla �a� � uppsetningu notenda sem voru a� nota �etta stig';

$lang['Click_return_rankadmin'] = '�ti� %sH�r%s til a� fara til baka � "Stiga umsj�n"';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Banna notendan�fn';
$lang['Disallow_explain'] = 'H�r er h�gt a� banna notkun � �kve�num notendan�fnum. �a� er h�gt a� nota stj�rnu *.  Athuga�u a� �� getur ekki sett inn or� sem er �egar � notkun, �� ver�ur fyrst a� ey�a notendum sem nota �au til a� geta gert �a�';

$lang['Delete_disallow'] = 'Ey�a';
$lang['Delete_disallow_title'] = 'Fjarl�gja b�nnu� n�fn';
$lang['Delete_disallow_explain'] = '�� getur teki� �t n�fn sem eru b�nnu� me� �v� a� velja �r listanum';

$lang['Add_disallow'] = 'B�ta vi�';
$lang['Add_disallow_title'] = 'B�ta vi� nafni sem � a� banna';
$lang['Add_disallow_explain'] = '�� getur nota� * fyrir hva�a staf sem er � or�i sem � a� banna';

$lang['No_disallowed'] = 'Engin b�nnu� notendan�fn';

$lang['Disallowed_deleted'] = '�a� t�kst a� fjarl�gja nafn �r listanum yfir b�nnu� n�fn';
$lang['Disallow_successful'] = '�a� t�kst a� b�ta vi� nafni � listann yfir b�nnu� n�fn';
$lang['Disallowed_already'] = '�a� t�kst ekki a� b�ta �essu nafni vi� listann. �a� g�ti veri� � notkun,  �a� er fyrir � listanum yfir ritsko�u� or� e�a �a� er �egar til sem notenda nafn';

$lang['Click_return_disallowadmin'] = '�ti� %sH�r%s til a� fara til baka � "Banna notendan�fn"';

//
// Styles Admin
//
$lang['Styles_admin'] = '�ema stj�rnun';
$lang['Styles_explain'] = 'H�r getur �� b�tt vi�, eytt e�a haft umsj�n me� �ema (sni� og �ema) sem notendur geta nota�';
$lang['Styles_addnew_explain'] = 'Eftirfarandi listi inniheldur alla �ema sem eru til fyrir �itt sni�. �a� sem er � listanum hefur ekki veri� sett inn � gagnagrunn phpBB. Til a� setja inn �ema �� �arf bara a� �ta � "setja inn" tengil hj� nafninu';

$lang['Select_template'] = 'Veldu sni�';

$lang['Style'] = '�ema';
$lang['Template'] = 'Sni�';
$lang['Install'] = 'Setja inn';
$lang['Download'] = 'S�kja skr�';

$lang['Edit_theme'] = 'Breyta �ema';
$lang['Edit_theme_explain'] = 'H�r ne�an vi� getur �� breytt uppsetningu fyrir vali� �ema';

$lang['Create_theme'] = 'B�a til �ema';
$lang['Create_theme_explain'] = 'Noti� formi� h�r ne�anvi� til a� b�a til n�tt �ema fyrir vali� sni�. �egar �� ert a� setja inn liti (�� �arft �� a� nota t�lur � sext�nda kerfinu(hexadecimal notation)) ver�ur �� a� passa a� nota ekki #, t.d.. er CCCCCC � lagi en #CCCCCC ekki';

$lang['Export_themes'] = 'Flytja �t �ema';
$lang['Export_explain'] = 'H�r er h�gt a� flytja �t g�gn fyrir �ema � vali� sni�. Veldu sni� af listanum h�r ne�an vi� og �� ver�ur reynt a� �tb�a �ema skr� og h�n ver�ur vistu� � valda m�ppu. Ef ekki er h�gt a� vista skr�na sj�lfa �� getur �� vali� um a� f� skr�na senda til ��n. Til a� h�gt s� a� vista skr�na � vef�j�ninum �� �arf a� vera ritheimild � m�ppuna sem er valin. Fyrir meiri uppl�singar �� skaltu sko�a notenda lei�beiningar phpBB 2.';

$lang['Theme_installed'] = '�a� t�kst a� setja inn vali� �ema ';
$lang['Style_removed'] = '�a� t�kst a� fjarl�gja vali� �ema �r gagnagrunninum. Til a� fjarl�gja �a� alveg �r kerfinu �� �arf a� ey�a skr�num �r vi�eigandi sni� (template) m�ppu.';
$lang['Theme_info_saved'] = '�ema uppl�singar fyrir vali� sni� hafa veri� vista�ar. �� �ttir a� taka af ritheimild � theme_info.cfg skr� (og einnig valda sni� (template) m�ppu)';
$lang['Theme_updated'] = 'Vali� �ema hefur veri� uppf�rt. �� �ttir n� a� flytja �t n�ja uppsetningu � �ema';
$lang['Theme_created'] = '�ema hefur veri� �tb�i�. �� �ttir a� flytja �t �ema � skr� til a� hafa eintak � �ruggum sta� e�a til nota annarssta�ar';

$lang['Confirm_delete_style'] = 'Ertu viss um a� �� viljir ey�a �essu �ema';

$lang['Download_theme_cfg'] = '�a� gekk ekki a� skrifa �ema uppl�singa skr�na. �ttu � hnapp h�r ne�an vi� til a� s�kja skr�na me� vafranum ��num. �egar �� ert b�inn a� f� skr�na til ��n �� getur �� sent hana � m�ppuna me� �ema skr�num � vef�j�ninum. �� getur l�ka pakka� skr�num til a� dreifa �eim e�a til a� geyma � �ruggum sta�';
$lang['No_themes'] = '�a� sni� sem �� valdir inniheldur enga �ema uppl�singar. Til a� b�a til n�tt �ema �ti� �� � "B�a til" undir �ema � vinstri valmynd';
$lang['No_template_dir'] = 'Gat ekki opna� sni� m�ppu. Mappan g�ti veri� �l�sileg af vef�j�ni e�a h�n er ekki til';
$lang['Cannot_remove_style'] = '�� getur ekki fjarl�gt �ema �ar sem �a� er sj�lfvali� fyrir umr��uh�pinn.Skiptu um sj�lfvali� �ema og reyndi aftur.';
$lang['Style_exists'] = 'Nafn �ema sem �� valdir er �egar til, far�u til baka og veldu anna� nafn.';

$lang['Click_return_styleadmin'] = '�ti� %sH�r%s til a� fara tilbaka � �ema stj�rnun';

$lang['Theme_settings'] = '�ema stillingar';
$lang['Theme_element'] = '�ema hlutar';
$lang['Simple_name'] = 'Einfalt nafn';
$lang['Value'] = 'Gildi';
$lang['Save_Settings'] = 'Vista stillingar';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'Mynd � bakgrunni';
$lang['Background_color'] = 'Litur � bakgrunni';
$lang['Theme_name'] = 'Nafn � �ema';
$lang['Link_color'] = 'Litur � tengli';
$lang['Text_color'] = 'Litur � texta';
$lang['VLink_color'] = 'Litur � heims�ttum tengli';
$lang['ALink_color'] = 'Litur � virkum tengli';
$lang['HLink_color'] = 'Litur � link ef m�s er yfir';
$lang['Tr_color1'] = 'Table Row Colour 1';
$lang['Tr_color2'] = 'Table Row Colour 2';
$lang['Tr_color3'] = 'Table Row Colour 3';
$lang['Tr_class1'] = 'Table Row Class 1';
$lang['Tr_class2'] = 'Table Row Class 2';
$lang['Tr_class3'] = 'Table Row Class 3';
$lang['Th_color1'] = 'Table Header Colour 1';
$lang['Th_color2'] = 'Table Header Colour 2';
$lang['Th_color3'] = 'Table Header Colour 3';
$lang['Th_class1'] = 'Table Header Class 1';
$lang['Th_class2'] = 'Table Header Class 2';
$lang['Th_class3'] = 'Table Header Class 3';
$lang['Td_color1'] = 'Table Cell Colour 1';
$lang['Td_color2'] = 'Table Cell Colour 2';
$lang['Td_color3'] = 'Table Cell Colour 3';
$lang['Td_class1'] = 'Table Cell Class 1';
$lang['Td_class2'] = 'Table Cell Class 2';
$lang['Td_class3'] = 'Table Cell Class 3';
$lang['fontface1'] = 'Font Face 1';
$lang['fontface2'] = 'Font Face 2';
$lang['fontface3'] = 'Font Face 3';
$lang['fontsize1'] = 'Font Size 1';
$lang['fontsize2'] = 'Font Size 2';
$lang['fontsize3'] = 'Font Size 3';
$lang['fontcolor1'] = 'Font Colour 1';
$lang['fontcolor2'] = 'Font Colour 2';
$lang['fontcolor3'] = 'Font Colour 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Polling Image Size [px]';
$lang['img_pm_size'] = 'Einkap�stur - Sta�a, st�r� [px]';

//
// Install Process
//
$lang['Welcome_install'] = 'Velkomin til uppsetningur � phpBB 2';
$lang['Initial_config'] = 'Grunn stillingar';
$lang['DB_config'] = 'Stillingar � gagnagrunni';
$lang['Admin_config'] = 'Stillingar stj�rnanda';
$lang['continue_upgrade'] = '�egar �� hefur s�tt config skr�na � t�lvuna ��na �� m�ttu �ta � \\"Halda �fram a� uppf�ra\\" hnappinn h�r ne�an vi� til a� halda �fram me� uppf�rsluna. �� �arft a� b��a me� a� senda config skr�na �ar til eftir a� uppf�rslunni er loki�.';
$lang['upgrade_submit'] = 'Halda �fram a� uppf�ra';

$lang['Installer_Error'] = 'Villa var� vi� uppsetningu';
$lang['Previous_Install'] = '��ur uppsett bor� fannst';
$lang['Install_db_error'] = 'Villa var� vi� a� uppf�ra gagnagrunn';

$lang['Re_install'] = '��ur uppsett bor� er enn�� virkt. <br /><br />Ef �� vilt setja phpBB 2 inn upp � n�tt �� skaltu �ta � J� takkann h�r ne�an vi�. Athuga�u a� �� ey�ast �LL g�gn sem til eru, engin afrit eru tekin! A�gangsor� stj�rnanda sem �� hefur nota� ver�ur haldi� eftir uppsetningu en EKKI ��ru. <br /><br />Hugsa�u �ig vel um ��ur en �� �tir � J�!';

$lang['Inst_Step_0'] = '�akka �e�r fyrir a� velja phpBB 2. Til a� lj�ka �essari uppsetningu �� �arftu a� fylla �t uppl�singar sem spurt er um h�r fyrir ne�an. Athuga�u a� gagnagrunnur sem �� kemur til me� a� nota ver�ur a� vera or�inn virkur. Ef �� ert a� tengja vi� gagnagrunn sem notar ODBC, s.s. MS Access �� �arftu fyrst a� b�a til DSN ��ur en �� heldur �fram.';

$lang['Start_Install'] = 'Byrja uppsetningu';
$lang['Finish_Install'] = 'Lj�ka uppsetningu';

$lang['Default_lang'] = 'Sj�lfvali� tungum�l bor�s';
$lang['DB_Host'] = 'Database Server Hostname / DSN';
$lang['DB_Name'] = 'Nafn � ��num gagnagrunni';
$lang['DB_Username'] = 'Database Username';
$lang['DB_Password'] = 'Database Password';
$lang['Database'] = '�inn gagnagrunnur';
$lang['Install_lang'] = 'Veldu tungum�l vi� uppsetningu';
$lang['dbms'] = 'Ger� gagnagrunns';
$lang['Table_Prefix'] = 'Prefix for tables in database';
$lang['Admin_Username'] = 'Notenda nafn stj�rnanda';
$lang['Admin_Password'] = 'A�gangsor� stj�rnanda';
$lang['Admin_Password_confirm'] = 'A�gangsor� stj�rnanda [ sta�festi� ]';

$lang['Inst_Step_2'] = 'Notenda nafn stj�rnanda hefur veri� b�i� til. N�na er grunnuppsetningu loki�. �� ver�ur n� sendur � skj� �ar sem �� getur stillt n�ju uppsetninguna ��na. Vertu viss um a� athuga stillingar � "Almennri uppsetningu". Takk fyrir a� velja phpBB 2.';

$lang['Unwriteable_config'] = 'Config skr�in er ritvarin sem stendur. Afrit af skr�nni ver�ur n� s�tt �egar �� �tir � takkann h�r fyrir ne�an. �� skalt �� senda skr�na aftur � s�mu m�ppu � vef�j�ninum sem phpBB 2 er �. �egar �etta er b�i� �� �ttu a� tengja �ig me� stj�rnenda nafninu ��nu og a�gangsor�inu sem �� valdir og fara �� � stj�rnbor� fyrir umr��ubor�sstj�ra (tengill kemur ne�st � skj�inn) og athuga "Almenna uppsetningu". �akka ��r fyrir a� velja phpBB 2.';
$lang['Download_config'] = 'S�kja config skr�';

$lang['ftp_choose'] = 'Veldu a�fer� vi� a� s�kja skr�';
$lang['ftp_option'] = '<br />�ar sem FTP m�guleiki er virkur � �essari �tg�fu af PHP �� getur veri� a� ��r ver�i bo�i� a� senda config skr�na me� ftp sj�lfvirkt � r�ttan sta�.';
$lang['ftp_instructs'] = '�� hefur vali� a� senda skr�na me� ftp sj�lfvirkt � vef�j�ninn sem er me� phpBB 2.  Sl��u inn uppl�singar sem spurt er um h�r ne�an vi� til a� �a� s� h�gt. Athugi� a� FTP sl��in ver�ur a� vera alveg eins og s� sl�� sem �� myndir nota me� venjulegum ftp.';
$lang['ftp_info'] = 'Sl��u inn FTP uppl�singar';
$lang['Attempt_ftp'] = 'Reyni a� senda config skr� � sinn sta�';
$lang['Send_file'] = 'Sendu skr�na til m�n og �g sendi hana sj�lfur';
$lang['ftp_path'] = 'FTP sl�� a� phpBB 2';
$lang['ftp_username'] = 'Notenda nafn FTP';
$lang['ftp_password'] = 'A�gangsor� FTP';
$lang['Transfer_config'] = 'Byrja sendingu';
$lang['NoFTP_config'] = '�a� t�kst ekki a� senda config skr�na � sinn sta�. S�ktu hana og sendu hana handvirkt � sinn sta� � vef�j�ninum.';

$lang['Install'] = 'Setja inn';
$lang['Upgrade'] = 'Uppf�ra';

$lang['Install_Method'] = 'Veldu a�fer� vi� uppsetningu';

$lang['Install_No_Ext'] = 'Uppsetning php � vef�j�ninum sty�ur ekki �� ger� af gagnagrunni sem �� ert b�inn a� velja.';

$lang['Install_No_PCRE'] = 'phpBB2 �arf Perl-Compatible Regular Expressions Module for php sem uppsetning php � vef�j�ni ��num sty�ur ekki!';

//
// MOD: Prune Inactive Users v1.2.0
//
$lang['User_prune_this_user'] = 'Ey�a notanda %s'; // ALT/TITLE text for memberlist delete button
$lang['Confirm_delete_users'] = 'Ertu viss um a� �� viljir ey�a %s? �etta er ekki aftur teki�.';
$lang['User_prune_none_explain'] = 'Engum notendum var eytt.';
$lang['User_prune_deleted_explain'] = '�essum %d notendum var eytt:';
$lang['Click_return_user_prune'] = '�ti� %sH�r%s til a� fara til baka � ey�ingar � g�mlu efni';
$lang['Click_return_caller'] = '�ti� %sH�r%s til a� fara til baka';

$lang['User_prune'] = 'Ey�a notendum';
$lang['User_prune_explain'] = 'H�r getur �� eytt notendum sem eru ekki lengur virkir. �� getur vali� um �rj�r a�fer�ir: �� getur eytt eldri notendum sem hafa aldrei sent inn innlegg, �� getur eytt notendum sem hafa aldrei skr�� sig inn, �� getur eytt notendum sem hafa aldrei gert a�gang sinn virkan.<p/><p>A� auki eru tv�r a�rar lei�ir a� ey�a notendum sem eru - a� nafninu til - virkir. �a� er a� ey�a �eim sem hafa ekki sent innlegg inn e�a skr�� sig inn lengi.<p/><p><b>Ath.:</b> �eim innleggjum sem eru send inn af notendum sem er eytt er <i>ekki</i> breytt. �au innlegg halda nafninu � h�fundi en eru �� merkt sem send inn af \'Gestur\'.<p/><p><b>Vi�v�run! �llum notendum ver�ur eytt endanlega.</b> �� svo a� s� hinn sami skr�i sig inn aftur undir sama nafni �� er �a� ekki tengt vi� fyrri innlegg!</p>'; 
$lang['User_prune_list'] = 'Notendur sem ver�ur eytt';
$lang['User_prune_scheme'] = 'A�fer� vi� a� ey�a';

// $lang['User_prune_action'] = array();
// $lang['User_prune_action_explain'] = array();
// More entries go here if needed. Entries #0 and #1 are 'hard coded';
$lang['User_prune_action']['0'] = 'Ey�a einum notanda (user_name)';
$lang['User_prune_action_explain']['0'] = 'Ey�a einum notanda eftir notenda nafni: admin/admin_user_prune?mode=delete&type=user_name&user={username}';
$lang['User_prune_action']['1'] = 'Ey�a einum notanda (user_id)';
$lang['User_prune_action_explain']['1'] = 'Ey�a einum notanda eftir nafni: admin/admin_user_prune?mode=delete&type=user_id&user={user id}';
$lang['User_prune_action']['2'] = 'Ey�a notendum sem ekki hafa gert a�gang virkan';
$lang['User_prune_action_explain']['2'] = 'Notendur sem hafa skr�� sig en hafa ekki gert a�gang sinn virkan, <b>utanvi�</b> n�skr�ningar s��ustu %d daga.';
$lang['User_prune_action']['3'] = 'Ey�a �virkum notendum';
$lang['User_prune_action_explain']['3'] = 'Notendur sem hafa aldrei skr�� sig inn, <b>utanvi�</b> n�ja notendur fr� s��ustu %d daga.';
$lang['User_prune_action']['4'] = 'Ey�a notendum sem ekki hafa sent inn innlegg';
$lang['User_prune_action_explain']['4'] = 'Notendur sem hafa ekki sent inn innlegg, <b>utanvi�</b> n�ja notendur fr� s��ustu %d daga.';
$lang['User_prune_action']['5'] = 'Ey�a notendum sem senda ekki inn innlegg (virkir notendur)';
$lang['User_prune_action_explain']['5'] = 'Notendur sem eru \'virkir\' en <b>hafa ekki sent inn innlegg s��ustu %d daga.</b>';
$lang['User_prune_action']['6'] = 'Ey�a notendum sem ekki hafa skr�� sig inn lengi';
$lang['User_prune_action_explain']['6'] = 'Notendur sem eru \'virkir\' en <b>hafa ekki skr�� sig inn s��ustu %d daga.</b>';
//
// MOD: -END-
//

//
// MOD: Rebuild Search Tables v1.1.0
//
$lang['Rebuild_Search'] = 'Endurbyggja leitar skr�'; // replaces Module Name
$lang['Rebuild_Search_Info'] = '<p><b>Athugi�:</b> A� endurbyggja leitar skr�na tekur langan t�ma!</p><p>Ekki klikka � neitt � vafranum ��num � me�an �etta er gert!</p>';
$lang['Rebuild_Search_Start'] = 'Byrja';
$lang['Rebuild_Search_Done'] = 'Endurbygging � leitar skr� er loki�.';
//
// MOD: -END-
//

//
// MOD: MyCalendar v2.1.6
//
$lang['Events_Forum'] = 'Leyfa h�t��isdaga? ';
//
// MOD: -END-
//

//
// That's all Folks!
// -------------------------------------------------

?>