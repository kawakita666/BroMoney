<?php

/***************************************************************************
 *                            lang_admin.php [Thai]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     Translation: SuperToy_nc < SuperToy_nc@yahoo.com > 
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical mistakes
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'General Admin';
$lang['Users'] = 'User Admin';
$lang['Groups'] = 'Group Admin';
$lang['Forums'] = 'Forum Admin';
$lang['Styles'] = 'Styles Admin';

$lang['Configuration'] = '��õ�駤�ҷ����';
$lang['Permissions'] = '���͹حҵ';
$lang['Manage'] = '��õ�駤�ҵ�����͡';
$lang['Disallow'] = '���ͷ�����͹حҵ';
$lang['Prune'] = 'ź��Ǣ�ͷ������ա�õͺ';
$lang['Mass_Email'] = '�� Email �繡����';
$lang['Ranks'] = '����дѺ���';
$lang['Smilies'] = '�ٻ�������';
$lang['Ban_Management'] = '������������';
$lang['Word_Censor'] = '���ǧ����';
$lang['Export'] = '���͡';
$lang['Create_new'] = '���ҧ';
$lang['Add_new'] = '����';
$lang['Backup_DB'] = '���ͧ�ҹ������';
$lang['Restore_DB'] = '���׹�ҹ������';


//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = '�س������� administer �ͧ���촹��';
$lang['Welcome_phpBB'] = '�Թ�յ�͹�Ѻ��� phpBB';
$lang['Admin_intro'] = '�ͺ�س����� phpBB. ˹�ҹ����ʴ����ʶԵԵ�ҧ�ͧ����. �س����ö��Ѻ�ҷ��˹�ҹ�����¤�ԡ <u>Admin Index</u> ����觫���. ��ҵ�ͧ��á�Ѻ价����� ����ԡ���� phpBB ����觫���. ��ǹ�ԧ���������觫��� �йӤس�����äǺ������ǹ��ҧ� ����˹�Ҩ��դ��йӡ����͡������.';
$lang['Main_index'] = 'Forum Index';
$lang['Forum_stats'] = 'ʶԵԢͧ Forum';
$lang['Admin_Index'] = 'Admin Index';
$lang['Preview_forum'] = '�Դ Forum 㹽�觢��';

$lang['Click_return_admin_index'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� Admin Index';

$lang['Statistic'] = 'ʶԵ�';
$lang['Value'] = '���';
$lang['Number_posts'] = '�ӹǹ��ͤ���';
$lang['Posts_per_day'] = '��ͤ�������ѹ';
$lang['Number_topics'] = '�ӹǹ��Ǣ��';
$lang['Topics_per_day'] = '��Ǣ�͵���ѹ';
$lang['Number_users'] = '�ӹǹ�����';
$lang['Users_per_day'] = '��������ѹ';
$lang['Board_started'] = '����������';
$lang['Avatar_dir_size'] = '��Ҵ�ͧ directory �ٻ��Шӵ��';
$lang['Database_size'] = '��Ҵ�ͧ�ҹ������';
$lang['Gzip_compression'] ='��úպ�ѴẺ Gzip';
$lang['Not_available'] = '(����Һ)';

$lang['ON'] = '��'; // This is for GZip compression
$lang['OFF'] = '�����'; 


//
// DB Utils
//
$lang['Database_Utilities'] = '����ͧ�������Ѻ�ҹ������';

$lang['Restore'] = '���׹�ҹ������';
$lang['Backup'] = '���ͧ�ҹ������';
$lang['Restore_explain'] = '���׹�ҹ������ phpBB �������ҡ�����ѹ�֡���. ��� server ʹѺʹع��úպ�ѴẺ gzip ��ж١�������ѵ��ѵ�. <b>����͹</b> ��������Ҩж١��¹�Ѻ���. ��á��׹���������ѡ���� ��س���������¹˹�Ҩ����Ҩзӧҹ����';
$lang['Backup_explain'] = '�س����ö���ͧ�ҹ�����Ţͧ phpBB �������. ��Ҥس�յ��ҧ��ǹ���㹰ҹ������ phpBB ���س��ͧ������ͧ���� ��سһ�͹������Ф�蹴����١��� ŧ� \'���ҧ�������\' ����ҹ��ҧ. ��� server �ͧ�Ѻ��úպ�ѴẺ gzip �з����ӹǹ�����ŷ��س��ͧ download ����ŧ<br>���ҧ��ǹ��Ƿ���ͧ������� <b>attach_quota,attachments,attachments_config,attachments_desc,extension_groups,extensions,forbidden_extensions,quota_limits</b>';

$lang['Backup_options'] = '������͡������ͧ';
$lang['Start_backup'] = '������ӡ�����ͧ';
$lang['Full_backup'] = '���ͧ������';
$lang['Structure_backup'] = '���ͧ੾���ç���ҧ';
$lang['Data_backup'] = '���ͧ੾�Т�����';
$lang['Additional_tables'] = '���ҧ�������';
$lang['phpBB_only'] = '੾�е��ҧ�������ǡѺ phpBB ��ҹ��';
$lang['Gzip_compress'] = '��úպ�Ѵ���Ẻ Gzip';
$lang['Select_file'] = '���͡���';
$lang['Start_Restore'] = '������ӡ�á��׹';

$lang['Restore_success'] = '���׹�ҹ���������º��������<br /><br />���촨С�Ѻ����ʶҹ��ش���·��ӡ�����ͧ';
$lang['Backup_download'] = '��� download ��������������ǹ�� ��س����ѡ����';
$lang['Backups_not_supported'] = '������. �ҹ�����Ź������ͧ�Ѻ������ͧ������';

$lang['Restore_Error_uploading'] = '��� upload ��� �Դ��üԴ��Ҵ';
$lang['Restore_Error_filename'] = '��������ջѭ��, ��س��ͧ����¹�����������';
$lang['Restore_Error_decompress'] = '�������ö�������պ�ѴẺ gzip, ��س� upload ��쪹Դ����ѡ�ø�����';
$lang['Restore_Error_no_file'] = '����������١ upload';


//
// Auth pages
//
$lang['Select_a_User'] = '���͡�����';
$lang['Select_a_Group'] = '���͡�����';
$lang['Select_a_Forum'] = '���͡ forum';
$lang['Auth_Control_User'] = '�Ǻ������͹حҵ���������';
$lang['Auth_Control_Group'] = '�Ǻ������͹حҵ�����';
$lang['Auth_Control_Forum'] = '�Ǻ������͹حҵ forum';
$lang['Look_up_User'] = '��ŧ';
$lang['Look_up_Group'] = '��ŧ';
$lang['Look_up_Forum'] = '��ŧ';

$lang['Group_auth_explain'] = '�س����ö����¹�ŧ���͹حҵ ���ʶҹ� moderator �ͧ���С���������. ���������� ���������¹�ŧ���͹حҵ�ͧ��������� ����͹حҵ����Ѻ�������ºؤ���Ҩ�ѧ���� ����Ҩ������������ѧ����ö������� forum ���. 㹡óչ�� �س�����Ѻ�������͹.';
$lang['User_auth_explain'] = '�س����ö����¹�ŧ���͹حҵ ���ʶҹ� moderator �ͧ��������Ф�. ���������� ���������¹�ŧ���͹حҵ�ͧ��������� ����͹حҵ����Ѻ�����������Ҩ�ѧ���� ����Ҩ������������ѧ����ö������� forum ���. 㹡óչ�� �س�����Ѻ�������͹.';
$lang['Forum_auth_explain'] = '�س����ö����¹�ŧ�дѺ���͹حҵ�ͧ���� forum. �س����ö���͡Ẻ���ҧ���� ����Ẻ����٧����, �Ըժ���٧������äǺ��� forum ����С�÷ӧҹ��ա���.';

$lang['Simple_mode'] = 'Ẻ������';
$lang['Advanced_mode'] = 'Ẻ����٧';
$lang['Moderator_status'] = 'ʶҹ� Moderator';

$lang['Allowed_Access'] = '͹حҵ�����Ҷ֧��';
$lang['Disallowed_Access'] = '���͹حҵ�����Ҷ֧';
$lang['Is_Moderator'] = '�� Moderator';
$lang['Not_Moderator'] = '����� Moderator';

$lang['Conflict_warning'] = '���͹حҵ�Դ��âѴ��駡ѹ';
$lang['Conflict_access_userauth'] = '���������ѧ�����Է��������ѧ forum ��ҹ�ҧ��Ҫԡ�����. �س�Ҩ��ͧ����¹���͹حҵ����� ����ź��������͡�ҡ�����. ���͹حҵ�ͧ����� (��Тͧ forum �������Ǣ�ͧ) ��͸Ժ������ҧ��ҧ���';
$lang['Conflict_mod_userauth'] = '��������ѧ�����Է���ͧ moderator �����ѧ forum. �س�Ҩ��ͧ����¹���͹حҵ����� ����ź��������͡�ҡ����� ���ͻ�ͧ�ѹ�Է������� moderator. ���͹حҵ�ͧ����� (��Тͧ forum �������Ǣ�ͧ) ��͸Ժ������ҧ��ҧ���';

$lang['Conflict_access_groupauth'] = '�����(�����)����ѧ�����Է��������ѧ forum ��ҹ�ҧ��Ҫԡ�����. �س�Ҩ��ͧ����¹���͹حҵ����Ѻ�����. ���͹حҵ�ͧ����� (��Тͧ forum �������Ǣ�ͧ) ���ʴ�����ҹ��ҧ���';
$lang['Conflict_mod_groupauth'] = '�����(�����)����ѧ�����Է���ͧ moderator �����ѧ forum.  �س�Ҩ��ͧ����¹���͹حҵ����Ѻ����� ���ͻ�ͧ�ѹ�Է������� moderator. ���͹حҵ�ͧ����� (��Тͧ forum �������Ǣ�ͧ) ���ʴ�����ҹ��ҧ���';

$lang['Public'] = '�Ҹ�ó�';
$lang['Private'] = '��ǹ���';
$lang['Registered'] = 'ŧ����¹����';
$lang['Administrators'] = 'Administrators';
$lang['Hidden'] = '�١��͹';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = '������';
$lang['Forum_REG'] = 'ŧ����¹����';
$lang['Forum_PRIVATE'] = '��ǹ���';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = '����Ǣ��';
$lang['Read'] = '��ҹ��ͤ���';
$lang['Post'] = '�����Ǣ��';
$lang['Reply'] = '�ͺ';
$lang['Edit'] = '���';
$lang['Delete'] = 'ź';
$lang['Sticky'] = 'Sticky';
$lang['Announce'] = '���ҧ��С��'; 
$lang['Vote'] = 'ŧ��ṹ';
$lang['Pollcreate'] = '���ҧẺ�ͺ���';

$lang['Permissions'] = '���͹حҵ';
$lang['Simple_Permission'] = '���͹حҵ��鹰ҹ';

$lang['User_Level'] = '�дѺ�����'; 
$lang['Auth_User'] = '�����';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'ʶҹС������Ҫԡ�����';
$lang['Usergroup_members'] = '����ª��ͼ����㹡�����ѧ���';

$lang['Forum_auth_updated'] = '��Ѻ��ا���͹حҵ����Ѻ forum ����';
$lang['User_auth_updated'] = '��Ѻ��ا���͹حҵ����Ѻ���������';
$lang['Group_auth_updated'] = '��Ѻ��ا���͹حҵ����Ѻ���������';

$lang['Auth_updated'] = '��Ѻ��ا���͹حҵ����';
$lang['Click_return_userauth'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'���͹حҵ����Ѻ�����\'';
$lang['Click_return_groupauth'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'���͹حҵ����Ѻ�����\'';
$lang['Click_return_forumauth'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'���͹حҵ����Ѻ forum\'';


//
// Banning
//
$lang['Ban_control'] = '�Ǻ���������������';
$lang['Ban_explain'] = '�س����ö�Ǻ���������������������. �س����ö�����������ºؤ�� ���/���� ������ͧ IP address ���� hostnames. �Ըչ��л�ͧ�ѹ�������������Ҷ֧˹���á�ͧ����. ��Ҩл�ͧ�ѹ�����ҡ�����Ѥ���Ҫԡ������͵�ҧ� �س����ö�к� e-mail ����ͧ�������. �������� e-mail ��§���ҧ���Ǩ��������ö��ͧ�ѹ������鹨ҡ����������к� �����觢�ͤ���㹺��� �س�����˹����ͧ�Ը��á����Ѻ��䢻ѭ�ҹ��.';
$lang['Ban_explain_warn'] = '�ô���ѧ��� ����кء�����ͧ IP address ���ռšѺ�ء IP ������������ҧ IP ��������������ش. �����Ţ IP ���кѹ�֡ŧ�ҹ�����Ũ��� wildcards ���ѵ��ѵ�����Ŵ��Ҵ�ͧ IP. ��Ҥس��ͧ����кت�ǧ�ͧ IP ��ԧ� ��س��кت�ǧ���᤺����ش��ҷ��з���.';

$lang['Select_username'] = '���͡ username';
$lang['Select_ip'] = '���͡ IP';
$lang['Select_email'] = '���͡ Email';

$lang['Ban_username'] = '���������������� 1 �������ҡ����';
$lang['Ban_username_explain'] = '�س����ö������������¤�㹤������� �����������Ф�����������ѹ';

$lang['Ban_IP'] = '����������� IP 1 �����Ţ�����ҡ���� ���ͪ��� host';
$lang['IP_hostname'] = '�����Ţ IP ���ͪ�� host';
$lang['Ban_IP_explain'] = '�����к����������Ţ IP �������� hostname ��������Ъ��ʹ����١���. ��Ҩ��кت�ǧ�ͧ IP ����¡�����Ţ��������������ش���¢մ (-), ��Ҩ��к� wildcard ����� *';

$lang['Ban_email'] = '����������� 1 Email �����ҡ����';
$lang['Ban_email_explain'] = '��Ҩ��к��ҡ���� 1 email ����蹴����١���. ��Ҩ��к����� wildcard ����� * �� *@hotmail.com';

$lang['Unban_username'] = '¡��ԡ������������ 1 �������ҡ����';
$lang['Unban_username_explain'] = '�س����ö¡��ԡ����������ª���㹤������� �����������Ф�����������ѹ';

$lang['Unban_IP'] = '¡��ԡ������� IP 1 �����Ţ�����ҡ����';
$lang['Unban_IP_explain'] = '�س����ö¡��ԡ����������� IP 㹤������� �����������Ф�����������ѹ';

$lang['Unban_email'] = '¡��ԡ������� 1 Email �����ҡ����';
$lang['Unban_email_explain'] = '�س����ö¡��ԡ����������� email 㹤������� �����������Ф�����������ѹ';

$lang['No_banned_users'] = '����ա�����������';
$lang['No_banned_ip'] = '����ա�����������Ţ IP';
$lang['No_banned_email'] = '����ա������ Email';

$lang['Ban_update_sucessful'] = '��Ѻ��ا��ª��͡����������';
$lang['Click_return_banadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'�Ǻ���������������\'';


//
// Configuration
//
$lang['General_Config'] = '��õ�駤�ҷ����';
$lang['Config_explain'] = 'Ẻ�������ҹ��ҧ��� ��������س��Ѻ�觤�ҵ�ҧ�ͧ����. ��ҵ�ͧ��õ�駤������Ѻ��������� forum ������ԧ���������觫���᷹.';

$lang['Click_return_config'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'��õ�駤�ҷ����\'';

$lang['General_settings'] = '��駤�ҷ���仢ͧ����';
$lang['Server_name'] = 'Domain Name';
$lang['Server_name_explain'] = '���촹��١���¡�ҡ Domain Name';
$lang['Script_path'] = '���˹������';
$lang['Script_path_explain'] = '���˹觢ͧ phpBB2 ������ѹ��Ѻ Domain Name';
$lang['Server_port'] = 'Server Port';
$lang['Server_port_explain'] = '�����Ţ port �ͧ server, �á�Ԥ�� 80';
$lang['Site_name'] = '�������';
$lang['Site_desc'] = '��������´�ͧ���';
$lang['Board_disable'] = '¡��ԡ����';
$lang['Board_disable_explain'] = '����������ҹ�����. �����͡�ҡ�к�����ͤس¡��ԡ���� ���Фس���������ö�������к����ա!';
$lang['Acct_activation'] = '��ͧ�׹�ѹ�ѭ�մ���';
$lang['Acc_None'] = '����ͧ'; // These three entries are the type of activation
$lang['Acc_User'] = '�������׹�ѹ�ҡ�ԧ��� email';
$lang['Acc_Admin'] = 'Admin ���繼���׹�ѹ���';

$lang['Abilities_settings'] = '��õ�駤�Ҿ�鹰ҹ�ͧ�������� forum';
$lang['Max_poll_options'] = '�ӹǹ������͡����ѺẺ�ͺ��� ����Թ';
$lang['Flood_Interval'] = '�������һ�ͧ�ѹ����觢�ͤ�������ѹ';
$lang['Flood_Interval_explain'] = '�ӹǹ�Թҷշ�������ͧ�� �����ҧ����觢�ͤ����Դ�ѹ'; 
$lang['Board_email_form'] = '�� Email �����ҧ������ҹ����';
$lang['Board_email_form_explain'] = '͹حҵ��������� Email �֧�ѹ ��ҹ������ͧ���촹��';
$lang['Topics_per_page'] = '�ӹǹ��Ǣ�͵��˹��';
$lang['Posts_per_page'] = '�ӹǹ��ͤ������˹��';
$lang['Hot_threshold'] = '�ӹǹ��õͺ �����������Ѻ��������';
$lang['Default_style'] = '�ٻẺ�ҵðҹ';
$lang['Override_style'] = '�ѧ�Ѻ��Ѻ�����ء��';
$lang['Override_style_explain'] = '᷹����ٻẺ����������͡�ͧ �����ٻẺ�ҵðҹ';
$lang['Default_language'] = '�����ҵðҹ';
$lang['Date_format'] = '�ٻẺ�ѹ����ҵðҹ';
$lang['System_timezone'] = '��û�Ѻ���� timezone';
$lang['Enable_gzip'] = '���úպ�ѴẺ GZip';
$lang['Enable_prune'] = '����ź� forum �������ռ��ͺ�ҹ�Թ��������';
$lang['Allow_HTML'] = '�������� HTML';
$lang['Allow_BBCode'] = '�������� BBCode';
$lang['Allowed_tags'] = '������������ HTML';
$lang['Allowed_tags_explain'] = '������Ф���觴����١���';
$lang['Allow_smilies'] = '���������ٻ�������';
$lang['Smilies_path'] = '���˹觷�������ٻ�������';
$lang['Smilies_path_explain'] = '����� rood directory �ͧ phpBB �� images/smiles';
$lang['Allow_sig'] = '�������������';
$lang['Max_sig_length'] = '������������ ����Թ [ ����ѡ�� ]';
$lang['Max_sig_length_explain'] = '�ӹǹ����ѡ���٧�ش�ͧ�����';
$lang['Allow_name_change'] = '����������¹ username';

$lang['Avatar_settings'] = '��õ�駤���ٻ��Шӵ��';
$lang['Allow_local'] = '����ö���ٻ�ҵðҹ��������';
$lang['Allow_remote'] = '����ö���ٻ�ҡ URL ������';
$lang['Allow_remote_explain'] = '���ٻ�Ҿ������躹������ �������ٻ��Шӵ��';
$lang['Allow_upload'] = '����ö upload �ٻ��Шӵ����';
$lang['Max_filesize'] = '��Ҵ����ٻ��Шӵ�� ����Թ';
$lang['Max_filesize_explain'] = '����Ѻ��� upload ����ٻ��Шӵ��';
$lang['Max_avatar_size'] = '��Ҵ�ٻ��Шӵ�� ����Թ';
$lang['Max_avatar_size_explain'] = '(�٧ x ���ҧ �˹��� pixels)';
$lang['Avatar_storage_path'] = '���˹����ٻ��Шӵ��';
$lang['Avatar_storage_path_explain'] = '����� root directory �ͧ phpBB �� images/avatars';
$lang['Avatar_gallery_path'] = '���˹��ٻ��Шӵ�Ƿ�������';
$lang['Avatar_gallery_path_explain'] = '����� directory �ͧ��ҧ����� �� images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA Settings';
$lang['COPPA_fax'] = 'COPPA Fax Number';
$lang['COPPA_mail'] = 'COPPA Mailing Address';
$lang['COPPA_mail_explain'] = 'This is the mailing address where parents will send COPPA registration forms';

$lang['Email_settings'] = '��õ�駤�� Email';
$lang['Admin_email'] = 'Email �ͧ Admin';
$lang['Email_sig'] = '����繢ͧ Email';
$lang['Email_sig_explain'] = '��ͤ�������Ṻ仡Ѻ Email �ء��Ѻ ������觨ҡ����';
$lang['Use_SMTP'] = '�� SMTP Server 㹡���� Email';
$lang['Use_SMTP_explain'] = '�ͺ \'��\' ����ͤس��ͧ������ͨ��繵�ͧ�� Email ��ҹ SMTP server ᷹������ѧ��ѹ�� Email �ͧ���������ͧ';
$lang['SMTP_server'] = '�������ͧ SMTP Server';
$lang['SMTP_username'] = 'SMTP Username';
$lang['SMTP_username_explain'] = '����͹ username ����ͨ��繵�ͧ����ҹ��';
$lang['SMTP_password'] = 'SMTP Password';
$lang['SMTP_password_explain'] = '����͹ password ����ͨ��繵�ͧ����ҹ��';

$lang['Disable_privmsg'] = '��ͤ�����ǹ���';
$lang['Inbox_limits'] = '��ͤ���� Inbox ����Թ';
$lang['Sentbox_limits'] = '��ͤ���� Sentbox ����Թ';
$lang['Savebox_limits'] = '��ͤ���� Savebox ����Թ';

$lang['Cookie_settings'] = '��õ�駤�� Cookie'; 
$lang['Cookie_settings_explain'] = '��������´������Ѻ cookies ���١��价�� browsers �ͧ�س. �·���令���ҵðҹ����§������ ���Ҥس��ͧ�������¹�ŧ ��سҷӴ��¤������Ѵ���ѧ ��õ�駤�ҷ��Դ��Ҵ �з���������������ö�������к���';
$lang['Cookie_domain'] = 'Cookie Domain';
$lang['Cookie_name'] = '���� Cookie';
$lang['Cookie_path'] = '���˹觢ͧ Cookie';
$lang['Cookie_secure'] = '������ʹ��¢ͧ Cookie';
$lang['Cookie_secure_explain'] = '��� server �ͧ�س�� SSL ������Դ��ҹ';
$lang['Session_length'] = '�������� [ �Թҷ� ]';

// Visual Confirmation
$lang['Visual_confirm'] = '�Դ�����׹�ѹ�����ٻ�Ҿ';
$lang['Visual_confirm_explain'] = '�е�ͧ��͡���ʷ�������ٻ�Ҿ����ͷӡ����Ѥ���Ҫԡ';

//
// Forum Management
//
$lang['Forum_admin'] = '��èѴ��� forum';
$lang['Forum_admin_explain'] = '���ǹ���س����ö����, ź, ���, ���§�ӴѺ, �Ѵ���§�������� forum ����';
$lang['Edit_forum'] = '��� forum';
$lang['Create_forum'] = '���ҧ forum ����';
$lang['Create_category'] = '���ҧ���������';
$lang['Remove'] = 'ź';
$lang['Action'] = '��з�';
$lang['Update_order'] = '��Ѻ��ا�ӴѺ';
$lang['Config_updated'] = '��Ѻ��ا��õ�駤�Ңͧ forum ����';
$lang['Edit'] = '���';
$lang['Delete'] = 'ź';
$lang['Move_up'] = '����͹���';
$lang['Move_down'] = '����͹ŧ';
$lang['Resync'] = '�Ѵ����º����';
$lang['No_mode'] = '����ա�õ�� mode';
$lang['Forum_edit_delete_explain'] = 'Ẻ�������ҹ��ҧ��� ��������س��䢢�������������´�ͧ forum ��������͡���';

$lang['Move_contents'] = '���¢�ͤ���������';
$lang['Forum_delete'] = 'ź forum';
$lang['Forum_delete_explain'] = 'Ẻ�������ҹ��ҧ��� ��������سź forum (���͡����) ������س���͡��� �й���Ǣ�� (���� forum) ���������.';

$lang['Status_locked'] = '�١��͡';
$lang['Status_unlocked'] = '�١�Ŵ��͡';
$lang['Forum_settings'] = '��õ�駤�Ҿ�鹰ҹ�ͧ forum';
$lang['Forum_name'] = '���� forum';
$lang['Forum_desc'] = '��������´';
$lang['Forum_status'] = 'ʶҹТͧ forum';
$lang['Forum_pruning'] = 'ź�ѵ��ѵ�';

$lang['prune_freq'] = '�������Ǩ�ͺ��Ǣ�ͷ���������� forum ���ء�';
$lang['prune_days'] = 'ź��Ǣ�� ���������ա�õͺ�Թ';
$lang['Set_prune_data'] = '�س���Դ�к�ź��Ǣ���ѵ��ѵ� ���Ѻ forum ��� ��������������������ͨӹǹ�ѹ���͵�Ǩ�ͺ. ��سҤ�ԡ back ���͡�Ѻ����';

$lang['Move_and_Delete'] = '�������ź';

$lang['Delete_all_posts'] = 'ź��ͤ���������';
$lang['Nowhere_to_move'] = '������кػ��·ҧ��������';

$lang['Edit_Category'] = '��䢪��͡����';
$lang['Edit_Category_explain'] = '��Ẻ��������������䢪��͡����.';

$lang['Forums_updated'] = '��Ѻ��ا�����Ţͧ forum ��С��������';

$lang['Must_delete_forums'] = '�س�е�ͧź�ء forum ��͹����ź����������';

$lang['Click_return_forumadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'��èѴ��� Forum\'';


//
// Smiley Management
//
$lang['smiley_title'] = '����ͧ�������ٻ�������';
$lang['smile_desc'] = '���˹�ҹ�� �س����ö����, ź ������ �ٻ�ʴ������� �����ٻ������� �����������ö��㹢�ͤ����������Т�ͤ�����ǹ���.';

$lang['smiley_config'] = '��õ�駤���ٻ�������';
$lang['smiley_code'] = 'Code';
$lang['smiley_url'] = '�ٻ�Ҿ�������';
$lang['smiley_emot'] = '��͸Ժ��';
$lang['smile_add'] = '�����ٻ�������';
$lang['Smile'] = '�ٻ�������';
$lang['Emotion'] = '��͸Ժ��';

$lang['Select_pak'] = '���͡��� Pack (.pak)';
$lang['replace_existing'] = '᷹����ٻ����������������';
$lang['keep_existing'] = '���ٻ����������������';
$lang['smiley_import_inst'] = '�س��� unzip �礢ͧ�ٻ������� �����觷ء�����价�� directory ��������ٻ������� ��͹�ӡ�õԴ���. �ҡ���������͡�����ŷ��١��ͧ�Ẻ�������� ���͹�����ٻ�������.';
$lang['smiley_import'] = '������礢ͧ�ٻ�������';
$lang['choose_smile_pak'] = '���͡����� (.pak) �ͧ�ٻ�������';
$lang['import'] = '������ٻ�������';
$lang['smile_conflicts'] = '��èз����ҧ������;��ٻ����������';
$lang['del_existing_smileys'] = 'ź�ٻ���������ҡ�͹�����';
$lang['import_smile_pack'] = '������礢ͧ�ٻ�������';
$lang['export_smile_pack'] = '���ҧ�礢ͧ�ٻ�������';
$lang['export_smiles'] = '������ҧ�礢ͧ�ٻ��������ҡ�ٻ������������Դ������ ����ԡ %s�����%s ���� download ��� smiles.pak ��Ǩ�������͹��ҹ���ءŢͧ����� .pak �ҡ������ download ����ٻ�Ҿ������������� ����� smiles.pak ����ٻ�Ҿ������������� �����ҧ����������� zip';

$lang['smiley_add_success'] = '�����ٻ����������º��������';
$lang['smiley_edit_success'] = '��Ѻ��ا�ٻ����������º��������';
$lang['smiley_import_success'] = '������礢ͧ�ٻ����������º��������';
$lang['smiley_del_success'] = 'ź�ٻ����������º��������';
$lang['Click_return_smileadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'�ٻ�������\'';


//
// User Management
//
$lang['User_admin'] = '��õ�駤�Һѭ�ռ����';
$lang['User_admin_explain'] = '�س����ö����¹�ŧ��������´�ͧ����� ��е�����͡��ҧ�. ��Ҩ���䢡��͹حҵ ������к����͹حҵ����Ѻ�������С����';

$lang['Look_up_user'] = '��ŧ';

$lang['Admin_user_fail'] = '�������ö��Ѻ��ا��������ǹ��Ǣͧ�������';
$lang['Admin_user_updated'] = '��Ѻ��ا��������ǹ��Ǣͧ���������';
$lang['Click_return_useradmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'��õ�駤�Һѭ�ռ����\'';

$lang['User_delete'] = 'ź�������';
$lang['User_delete_explain'] = '��ԡ���������ź�������, �������ö¡��ԡ��';
$lang['User_deleted'] = 'ź�����������';

$lang['User_status'] = '�Դ��ҹ�������';
$lang['User_allowpm'] = '����ö�觢�ͤ�����ǹ��������';
$lang['User_allowavatar'] = '����ö���ٻ��Шӵ����';

$lang['Admin_avatar_explain'] = '�س����ö�����ź�ٻ��Шӵ�Ǣͧ�����������';

$lang['User_special'] = '��ǹ����� ����Ѻ admin ��ҹ��';
$lang['User_special_explain'] = '��ǹ����������ö������¼����. �س����ö���ʶҹ���е�����͡���� ��������������ö����';


//
// Group Management
//
$lang['Group_administration'] = '��õ�駤�ҡ���������';
$lang['Group_admin_explain'] = '�س����ö�Ѵ��á��������������� �س����ö ź, ���ҧ �����䢡����������������� �س�Ҩ���͡ moderator, ��Ѻʶҹ��Դ/�Դ����� ��е�駪��͡������Ф�͸Ժ��';
$lang['Error_updating_groups'] = '�Դ��ͼԴ��Ҵ�����ҧ��Ѻ��ا�����';
$lang['Updated_group'] = '��Ѻ��ا��������º��������';
$lang['Added_new_group'] = '���ҧ������������º��������';
$lang['Deleted_group'] = 'ź��������º��������';
$lang['New_group'] = '���ҧ���������';
$lang['Edit_group'] = '��䢡����';
$lang['group_name'] = '���͡����';
$lang['group_description'] = '��͸Ժ�¡����';
$lang['group_moderator'] = 'moderator �ͧ�����';
$lang['group_status'] = 'ʶҹС����';
$lang['group_open'] = '������Դ';
$lang['group_closed'] = '������١�Դ';
$lang['group_hidden'] = '������١��͹';
$lang['group_delete'] = 'ź�����';
$lang['group_delete_check'] = 'ź��������';
$lang['submit_group_changes'] = '�ѹ�֡�������¹�ŧ';
$lang['reset_group_changes'] = '¡��ԡ�������¹�ŧ';
$lang['No_group_name'] = '�س��ͧ�кت��͡����';
$lang['No_group_moderator'] = '�س��ͧ�кؼ������� moderator �ͧ�����';
$lang['No_group_mode'] = '�س��ͧ�к�ʶҹТͧ����� ����Դ ���Ͷ١�Դ';
$lang['No_group_action'] = '������кء�á�з�';
$lang['delete_group_moderator'] = 'ź moderator ��Ңͧ�����?';
$lang['delete_moderator_explain'] = '��Ҥس���ѧ����¹�ŧ moderator �ͧ����� ������͡���ͧ�������ź moderator ����͡�ҡ��������� ���Ͷ��������͡ �������С�������Ҫԡ�����Ңͧ�����';
$lang['Click_return_groupsadmin'] = '��ԡ %s�����%s ���͡�Ѻ� \'��õ�駤�ҡ���������\'';
$lang['Select_group'] = '���͡�����';
$lang['Look_up_group'] = '��ŧ';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'ź��Ǣ�ͷ������ա�õͺ';
$lang['Forum_Prune_explain'] = 'ź��Ǣ�ͷ������ռ��ͺ����ӹǹ�ѹ����˹�. ��Ҥس����кبӹǹ�ѹ, �ء��Ǣ�ͨж١ź���. ������ź��Ǣ�ͷ��Ẻ�ͺ������ѧ�ӧҹ���� ��Ш����ź��ͤ�����С��. �س�е�ͧź��Ǣ������ҹ����µ���ͧ.';
$lang['Do_Prune'] = '��ŧ';
$lang['All_Forums'] = '�ء forum';
$lang['Prune_topics_not_posted'] = 'ź��Ǣ�ͷ������ա�õͺ�ҹ�Թ';
$lang['Topics_pruned'] = '�ӹǹ��Ǣ�ͷ��١ź';
$lang['Posts_pruned'] = '�ӹǹ��ͤ������١ź';
$lang['Prune_success'] = '�ӡ��ź� forum ������º��������';


//
// Word censor
//
$lang['Words_title'] = '���ǧ����';
$lang['Words_explain'] = '�س����ö����, ���, ���ź�� ���������� forums. ��м������������öŧ����¹������ͷ���դ�����ҹ������. �س����ö�� Wildcards (*) ���㹤��� �� *test* ���ǧ���� detestable, test* ���ǧ���� testing, *test ���ǧ���� detest.';
$lang['Word'] = '���ǧ����';
$lang['Edit_word_censor'] = '��䢤��ǧ����';
$lang['Replacement'] = '�ӷ��ж١᷹���ŧ�';
$lang['Add_new_word'] = '����������';
$lang['Update_word'] = '��Ѻ��ا���ǧ����';

$lang['Must_enter_word'] = '�س��ͧ�кؤ��ǧ���� ��Фӷ��ж١᷹���ŧ�᷹';
$lang['No_word_selected'] = '��������͡�ӷ���ͧ������';

$lang['Word_updated'] = '��Ѻ��ا���ǧ�������١���͡���º��������';
$lang['Word_added'] = '�������ǧ�������º��������';
$lang['Word_removed'] = 'ź���ǧ�������١���͡���º��������';

$lang['Click_return_wordadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'���ǧ����\'';


//
// Mass Email
//
$lang['Mass_email_explain'] = '�س����ö�� e-mail ��������ء�� ���ͼ����ء�����㹡��������к�. Email �鹩�Ѻ�ж١��价�� email address �ͧ admin ����к���� ������� BCC (blind carbon copy) �����Ѻ�ء��. ��Ҥس�� email ��������������˭� ��س�ʹ������ѧ���� ������ҡ�������ش�����ҧ��÷ӧҹ. ���˵ء�ó�á�Է���ͧ�����ҹҹ �س�����Ѻ�����������к��ӧҹ�������º��������';
$lang['Compose'] = '��¹ email'; 

$lang['Recipients'] = '����Ѻ'; 
$lang['All_users'] = '�����ء��';

$lang['Email_successfull'] = '��ͤ����١������';
$lang['Click_return_massemail'] = '��ԡ %s�����%s ���͡�Ѻ�Ẻ����� \'�� Email �繡����\'';


//
// Ranks admin
//
$lang['Ranks_title'] = '����дѺ���';
$lang['Ranks_explain'] = '�س����ö����, ���, �� ���ź�дѺ���. ��Фس����ö���ҧ�дѺ����������������Ѻ��������� ��ҹ�ҧ��èѴ��ü����';

$lang['Add_new_rank'] = '�����дѺ�������';

$lang['Rank_title'] = '�����дѺ���';
$lang['Rank_special'] = '���������дѺ��鹾����';
$lang['Rank_minimum'] = '�ӹǹ post �����ش';
$lang['Rank_maximum'] = '�ӹǹ post �ҡ�ش';
$lang['Rank_image'] = '�ٻ�Ҿ�ͧ�дѺ��鹹�� (㹵��˹� root �ͧ phpBB2)';
$lang['Rank_image_explain'] = '��͸Ժ���ٻ���� ����Ѻ�����дѺ���';

$lang['Must_select_rank'] = '�س��ͧ���͡�дѺ���';
$lang['No_assigned_rank'] = '������˹��дѺ���';

$lang['Rank_updated'] = '��Ѻ��ا�дѺ������º��������';
$lang['Rank_added'] = '�����дѺ������º��������';
$lang['Rank_removed'] = 'ź�дѺ������º��������';
$lang['No_update_ranks'] = 'ź�дѺ������º�������� ����Ҽ��������ѧ���дѺ��鹹��������ѧ������Ѻ��û�Ѻ��ا. �س�е�ͧ������Ъ��ͺѭ�մ��µ���ͧ';

$lang['Click_return_rankadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'����дѺ���\'';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = '��äǺ��� username ������͹حҵ';
$lang['Disallow_explain'] = '�س����ö�Ǻ�������������͹حҵ�����ҹ. ������͹حҵ����� �Ҩ�����ѡ�� wildcard ��� *. �س�������ö���͹حҵ���ͼ���� �����ӡ��ŧ����¹����͹���� �س�е�ͧź������� ��͹�зӡ�����͹حҵ';

$lang['Delete_disallow'] = 'ź';
$lang['Delete_disallow_title'] = 'ź username ������͹حҵ';
$lang['Delete_disallow_explain'] = '�س����öź username ������͹حҵ �����͡ username �ҡ��¡�� ���Ǥ�ԡ���� ź';

$lang['Add_disallow'] = '����';
$lang['Add_disallow_title'] = '���� username ������͹حҵ';
$lang['Add_disallow_explain'] = '�س����ö�к���������ͧ���� * ᷹������ѡ�������';

$lang['No_disallowed'] = '�������ª��� username ������͹حҵ';

$lang['Disallowed_deleted'] = 'ź username ������͹حҵ����';
$lang['Disallow_successful'] = '���� username ������͹حҵ����';
$lang['Disallowed_already'] = '�������ö���� username ��. �Ҩ���� username ������¡��, ����㹡��������Һ, ��������� username �������';

$lang['Click_return_disallowadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'������������\'';


//
// Styles Admin
//
$lang['Styles_admin'] = '��õ�駤���ٻẺ';
$lang['Styles_explain'] = '�س����ö����, ź ��ШѴ����ٻẺ (template ��� theme) ����Ѻ���������';
$lang['Styles_addnew_explain'] = '��¡�ù������ٻẺ���������س��. �ҧ�ٻẺ�Ҩ�ѧ������Ѻ��õԴ���ŧ�ҹ������ phpBB. ����ԡ \'�Դ���\' ����ҹ��Ңͧ�����ٻẺ';

$lang['Select_template'] = '���͡ template';

$lang['Style'] = '�ٻẺ';
$lang['Template'] = 'Template';
$lang['Install'] = '�Դ���';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = '��� theme';
$lang['Edit_theme_explain'] = '��ҹ��ҧ���س����ö��䢡�õ�駤�ҵ�ҧ� �ͧ�ٻẺ���١���͡';

$lang['Create_theme'] = '���ҧ theme ����';
$lang['Create_theme_explain'] = '��ҹ��ҧ���س����ö���ҧ�ٻẺ����ҡ�ٻẺ���١���͡. ����кؤ���� (��觤س��������Ţ�ҹ 6) �س��ͧ����������ͧ���� # ��.. CCCCCC ��鹶١��ͧ, �� #CCCCCC ������١��ͧ';

$lang['Export_themes'] = '���͡ themes';
$lang['Export_explain'] = '�س����ö���͡�������ٻẺ �ͧ�ٻẺ���١���͡. ������͡�ٻẺ�ҡ��¡�ô�ҹ��ҧ��� �����к������ҧ����õ�駤������ٻẺ ����Ѻ�ѹ�֡������ directory �ͧ�ٻẺ. ���������������ö�ѹ�֡���µ���ͧ ����������س�ӡ�� download �ͧ. ��觶�Ҥس��ͧ������������ѹ�֡������س �س��ͧ��˹��Է�������¹�� webserver ���Ѻ directory �ͧ�ٻẺ���س���͡. �٢������������� phpBB 2 users guide.';

$lang['Theme_installed'] = '�Դ��� theme ������͡����';
$lang['Style_removed'] = 'ź�ٻẺ������͡�͡�ҡ�ҹ����������. ��Ҩ�ź���ҧ����ó� �س�е�ͧź����ٻẺ������ �͡�ҡ template directory ����.';
$lang['Theme_info_saved'] = '�ѹ�֡��������´�ͧ theme ����. �س��á�Ѻ�����¹��ҡ��͹حҵ�ͧ��� theme_info.cfg (��� template directory ���س���͡) ����� read-only';
$lang['Theme_updated'] = '��Ѻ��ا theme ���١���͡����. �س������͡��õ�駤�� theme ����';
$lang['Theme_created'] = '���ҧ theme ��������. �س������͡��õ�駤�� theme �������ͤ�����ʹ��� ����������������';

$lang['Confirm_delete_style'] = '�س��ͧ���ź�ٻẺ����������?';

$lang['Download_theme_cfg'] = '������͡�������ö���ҧ�����������´�ͧ theme. ��ԡ������ҹ��ҧ���� download ������ browser. ����ͤس download �������� �س����ö������ directory ����Ѻ����� template. �س����ö�觵�������������������������ͧ���';
$lang['No_themes'] = '����� theme ����� template ���س���͡. �ô��ԡ���� ���ҧ���� ��ᶺ��ҹ����';
$lang['No_template_dir'] = '�������ö�Դ template directory. �Ҩ�ж١�����������ҹ�� webserver �����Ҩ����������ԧ';
$lang['Cannot_remove_style'] = '�س�������öź�ٻẺ������͡ �����ѹ�١�����ٻẺ�ҵðҹ. ��س�����¹�ٻẺ�ҵðҹ�����ͧ����.';
$lang['Style_exists'] = '�ժ��ͧ͢�ٻẺ����������� ��سҡ�Ѻ�����¹��������.';

$lang['Click_return_styleadmin'] = '��ԡ %s�����%s ���͡�Ѻ�˹�� \'��õ�駤���ٻẺ\'';

$lang['Theme_settings'] = '��駤�� theme';
$lang['Theme_element'] = '��ǹ��Сͺ�ͧ theme';
$lang['Simple_name'] = '���;�鹰ҹ';
$lang['Value'] = '���';
$lang['Save_Settings'] = '�ѹ�֡���';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = '�ٻ�����ѧ';
$lang['Background_color'] = '�վ����ѧ';
$lang['Theme_name'] = '���� theme';
$lang['Link_color'] = '���ԧ��';
$lang['Text_color'] = '�յ���ѡ��';
$lang['VLink_color'] = '���ԧ�������������';
$lang['ALink_color'] = '���ԧ������ѧ��ҹ';
$lang['HLink_color'] = '���ԧ�좳�������ҧ�Ѻ';
$lang['Tr_color1'] = '�յ��ҧ��� 1';
$lang['Tr_color2'] = '�յ��ҧ��� 2';
$lang['Tr_color3'] = '�յ��ҧ��� 3';
$lang['Tr_class1'] = 'Class �ǵ��ҧ��� 1';
$lang['Tr_class2'] = 'Class �ǵ��ҧ��� 2';
$lang['Tr_class3'] = 'Class �ǵ��ҧ��� 3';
$lang['Th_color1'] = '�բͧ��ǵ��ҧ��� 1';
$lang['Th_color2'] = '�բͧ��ǵ��ҧ��� 2';
$lang['Th_color3'] = '�բͧ��ǵ��ҧ��� 3';
$lang['Th_class1'] = 'Class ��ǵ��ҧ��� 1';
$lang['Th_class2'] = 'Class ��ǵ��ҧ��� 2';
$lang['Th_class3'] = 'Class ��ǵ��ҧ��� 3';
$lang['Td_color1'] = '�բͧ������ҧ��� 1';
$lang['Td_color2'] = '�բͧ������ҧ��� 2';
$lang['Td_color3'] = '�բͧ������ҧ��� 3';
$lang['Td_class1'] = '�բͧ������ҧ��� 1';
$lang['Td_class2'] = '�բͧ������ҧ��� 2';
$lang['Td_class3'] = '�բͧ������ҧ��� 3';
$lang['fontface1'] = 'Ẻ����ѡ�÷�� 1';
$lang['fontface2'] = 'Ẻ����ѡ�÷�� 2';
$lang['fontface3'] = 'Ẻ����ѡ�÷�� 3';
$lang['fontsize1'] = '��Ҵ����ѡ�÷�� 1';
$lang['fontsize2'] = '��Ҵ����ѡ�÷�� 2';
$lang['fontsize3'] = '��Ҵ����ѡ�÷�� 3';
$lang['fontcolor1'] = '�յ���ѡ�÷�� 1';
$lang['fontcolor2'] = '�յ���ѡ�÷�� 2';
$lang['fontcolor3'] = '�յ���ѡ�÷�� 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = '��Ҵ�ٻ�ҾẺ���Ǩ [px]';
$lang['img_pm_size'] = '��ҴʶҹТ�ͤ�����ǹ��� [px]';


//
// Install Process
//
$lang['Welcome_install'] = '�Թ�յ�͹�Ѻ����õԴ��� phpBB 2';
$lang['Initial_config'] = '��õ�駤�Ҿ�鹰ҹ';
$lang['DB_config'] = '��õ�駤�Ұҹ������';
$lang['Admin_config'] = '��õ�駤�� Admin';
$lang['continue_upgrade'] = '����ͤس download ����õ�駤��ŧ����ͧ�ͧ�س ����ԡ���� \'�ӡ���ѻ�ô����\' ����ҹ��ҧ��� ������ѧ��кǹ����ѻ�ô. ��س��͢�зӡ��������õ�駤�� �����ҡ�кǹ����ѻ�ô���������.';
$lang['upgrade_submit'] = '�ӡ���ѻ�ô����';

$lang['Installer_Error'] = '�Դ��ͼԴ��Ҵ��������ҧ��õԴ���';
$lang['Previous_Install'] = '��Ǩ��������ա�õԴ����ҡ�͹';
$lang['Install_db_error'] = '�Դ��ͼԴ��Ҵ���㹡�þ�������Ѻ��ا�ҹ������';

$lang['Re_install'] = '��õԴ��駤��駡�͹�ѧ�������. <br /><br />��Ҥس��ͧ��õԴ��� phpBB 2 ���� �س��ä�ԡ���� Yes ��ҹ��ҧ���. �ô���ѧ��ҡ�÷��蹹�� �з���¢����ŷ������������� ��Ш�����ա�����ͧ�������������! ����������ʼ�ҹ�ͧ administrator ���س����ж١���ҧ���� ������ա�õ�駤�������ŧ����������ա<br /><br />��سҤԴ����ͺ�ͺ��͹��ԡ Yes!';

$lang['Inst_Step_0'] = '�ͺ�س����� phpBB 2. ��������õԴ�������ó� ��سҡ�͡��������´��ҹ��ҧ���. ��سҵ�Ǩ�ͺ��͹��Ҫ��Ͱҹ�����ŷ��س��������١���ҧ����͹����. ��Ҥس���ѧ�Դ���ŧ�ҹ������ ODBC �� MS Access �س��è����ҧ DSN ���¡�͹';

$lang['Start_Install'] = '������Դ���';
$lang['Finish_Install'] = '��õԴ�����������';

$lang['Default_lang'] = '�����ҵðҹ�ͧ����';
$lang['DB_Host'] = 'Database Server Hostname / DSN';
$lang['DB_Name'] = '���Ͱҹ�����Ţͧ�س';
$lang['DB_Username'] = 'Database Username';
$lang['DB_Password'] = 'Database Password';
$lang['Database'] = '�ҹ�����Ţͧ�س';
$lang['Install_lang'] = '���͡����������㹡�õԴ���';
$lang['dbms'] = '��Դ�ҹ������';
$lang['Table_Prefix'] = '��鹵鹪��͵��ҧ㹰ҹ�����Ŵ��¤����';
$lang['Admin_Username'] = 'Administrator Username';
$lang['Admin_Password'] = 'Administrator Password';
$lang['Admin_Password_confirm'] = 'Administrator Password [�׹�ѹ]';

$lang['Inst_Step_2'] = '���ҧ�ѭ�� admin �ͧ�س����. ��й���õԴ��駾�鹰ҹ����������ó�. �س�ж١����ѧ˹������Ѻ��õ�駤�ҷ����. ��سҵ�Ǩ�ͺ��������´�ͧ \'��õ�駤�ҷ����\' ����������ǹ����ͧ���. �ͺ�س����� phpBB 2.';

$lang['Unwriteable_config'] = '����õ�駤�Ңͧ�س �١��˹��Է�������������ö�����. ����ͤس��ԡ������ҹ��ҧ��� ����õ�駤�Ҩж١�������س download. �س��� upload ������Ѻ������� directory ���ǡѹ�Ѻ phpBB 2. ������������������к����ºѭ�բͧ administrator ����͡��� �ҡ������价�� Admin Control Panel (���ԧ�����ҹ��ҧ�ͧ����˹�� ������������к�����) ���͵�Ǩ�ͺ��õ�駤�ҷ����. �ͺ�س����� phpBB 2.';
$lang['Download_config'] = 'Download ����õ�駤��';

$lang['ftp_choose'] = '���͡�Ըա�� Download';
$lang['ftp_option'] = '<br />�ա�õԴ����к� FTP ŧ����� PHP ��蹹�� �س�Ҩ���к� FTP ������������������ѵ��ѵ�';
$lang['ftp_instructs'] = '�س�����͡���к� FTP ������������ѵ��ѵ�. ��سҡ�͡�����Ŵ�ҹ��ҧ���. ���˹� FTP ��èеç�Ѻ���˹� FTP ���ӡ�õԴ��� phpBB2 ����͹���ҧ���س������� FTP ������';
$lang['ftp_info'] = '��سҡ�͡������ FTP �ͧ�س';
$lang['Attempt_ftp'] = '��������駤�ҡ�� FTP ���������������';
$lang['Send_file'] = '������������ѹ ���ǩѹ��������� FTP ���� upload �׹���������µ���ͧ';
$lang['ftp_path'] = '���˹� FTP �ͧ phpBB 2';
$lang['ftp_username'] = 'FTP Username';
$lang['ftp_password'] = 'FTP Password';
$lang['Transfer_config'] = '����������';
$lang['NoFTP_config'] = '��þ�����������õ�駤�ҷҧ FTP �������. ��س� download ����õ�駤�� �������ҷҧ FTP ���µ�Ǥس�ͧ';

$lang['Install'] = '�Դ���';
$lang['Upgrade'] = '�ѻ�ô';


$lang['Install_Method'] = '��س����͡�Ըա�õԴ���';

$lang['Install_No_Ext'] = '��õ�駤������� php �� server �ͧ�س ���ʹѺʹع�ҹ�����ŷ��س���͡';

$lang['Install_No_PCRE'] = 'phpBB2 ��ͧ��� Perl-Compatible Regular Expressions Module ����Ѻ���� php. ��觻�ҡ���ҡ�õ�駤������� php �ͧ�س������ʹѺʹع!';

//
// That's all Folks!
// -------------------------------------------------

?>