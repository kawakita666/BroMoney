<?php
/***************************************************************************
 *                            lang_main.php [Thai]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     Translation: SuperToy_nc < SuperToy_nc@yahoo.com > 
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
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
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'TIS-620';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Forum';
$lang['Category'] = '�����';
$lang['Topic'] = '��Ǣ��';
$lang['Topics'] = '��Ǣ��';
$lang['Replies'] = '�ͺ';
$lang['Views'] = '��ҹ';
$lang['Post'] = '�ͺ';
$lang['Posts'] = '�ͺ';
$lang['Posted'] = '�ͺ�����';
$lang['Username'] = 'Username';
$lang['Password'] = 'Password';
$lang['Email'] = 'Email';
$lang['Poster'] = '���ͺ';
$lang['Author'] = '�����';
$lang['Time'] = '����';
$lang['Hours'] = '�������';
$lang['Message'] = '��ͤ���';

$lang['1_Day'] = '1 �ѹ';
$lang['7_Days'] = '7 �ѹ';
$lang['2_Weeks'] = '2 �ѻ����';
$lang['1_Month'] = '1 ��͹';
$lang['3_Months'] = '3 ��͹';
$lang['6_Months'] = '6 ��͹';
$lang['1_Year'] = '1 ��';

$lang['Go'] = '�';
$lang['Jump_to'] = '价��';
$lang['Submit'] = '��(Submit)';
$lang['Reset'] = '��ҧ(Reset)';
$lang['Cancel'] = '¡��ԡ';
$lang['Preview'] = '�ʴ�������ҧ';
$lang['Confirm'] = '�׹�ѹ';
$lang['Spellcheck'] = '��Ǩ����С�';
$lang['Yes'] = '��';
$lang['No'] = '�����';
$lang['Enabled'] = '����';
$lang['Disabled'] = '�������';
$lang['Error'] = '�Դ��Ҵ';

$lang['Next'] = '�Ѵ�';
$lang['Previous'] = '��͹˹��';
$lang['Goto_page'] = '价��˹��';
$lang['Joined'] = '�������';
$lang['IP_Address'] = '�����Ţ IP';

$lang['Select_forum'] = '���͡ forum';
$lang['View_latest_post'] = '�٢�ͤ�������ش';
$lang['View_newest_post'] = '�٢�ͤ��������ش';
$lang['Page_of'] = '˹�� <b>%d</b> �ҡ <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = '�����Ţ ICQ';
$lang['AIM'] = '���˹� AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '���ҧ��Ǣ������';
$lang['Reply_to_topic'] = '�ͺ';
$lang['Reply_with_quote'] = '�ͺ����ҧ��ͤ���';

$lang['Click_return_topic'] = '��ԡ %s�����%s ���͡�Ѻ价����Ǣ��'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '��ԡ %s�����%s ���͡�Ѻ��ͧ����';
$lang['Click_return_forum'] = '��ԡ %s�����%s ���͡�Ѻ� forum';
$lang['Click_view_message'] = '��ԡ %s�����%s ���ʹ٢�ͤ����ͧ�س';
$lang['Click_return_modcp'] = '��ԡ %s�����%s ���͡�Ѻ� Moderator Control Panel';
$lang['Click_return_group'] = '��ԡ %s�����%s ���͡�Ѻ仴٢����š����';

$lang['Admin_panel'] = '� Administration Panel';

$lang['Board_disable'] = '������. ���촹����ҹ�������Ǥ��� �ô�ͧ����������ѧ';


//
// Global Header strings
//
$lang['Registered_users'] = '�������ŧ����¹:';
$lang['Browsing_forum'] = '�������ѧ��ҹ forum ���:';
$lang['Online_users_zero_total'] = '����� online ������ <b>0</b> �� :: ';
$lang['Online_users_total'] = '����� online ������ <b>%d</b> �� :: ';
$lang['Online_user_total'] = '����� online ������ <b>%d</b> �� :: ';
$lang['Reg_users_zero_total'] = 'ŧ����¹ 0 ��, ';
$lang['Reg_users_total'] = 'ŧ����¹ %d ��, ';
$lang['Reg_user_total'] = 'ŧ����¹ %d ��, ';
$lang['Hidden_users_zero_total'] = '��͹ 0 �� ��� ';
$lang['Hidden_user_total'] = '��͹ %d �� ��� ';
$lang['Hidden_users_total'] = '��͹ %d �� ��� ';
$lang['Guest_users_zero_total'] = '%d �����������';
$lang['Guest_users_total'] = '%d �����������';
$lang['Guest_user_total'] = '%d �����������';
$lang['Record_online_users'] = '�ռ���� online ������ѹ�٧�ش <b>%s</b> �� ����� %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';

$lang['You_last_visit'] = '�ӧҹ����ش %s'; // %s replaced by date/time
$lang['Current_time'] = '���Ң�й�� %s'; // %s replaced by time

$lang['Search_new'] = '�٢�ͤ�������ش�ҡ���駡�͹';
$lang['Search_your_posts'] = '�٢�ͤ����ͧ�س';
$lang['Search_unanswered'] = '�٢�ͤ�������ѧ�����ͺ';

$lang['Register'] = '��Ѥ���Ҫԡ(Register)';
$lang['Profile'] = '��������ǹ���(Profile)';
$lang['Edit_profile'] = '��䢢�������ǹ���';
$lang['Search'] = '����';
$lang['Memberlist'] = '��ª�����Ҫԡ';
$lang['FAQ'] = '���������';
$lang['BBCode_guide'] = '�Ը��� BBCode';
$lang['Usergroups'] = '����������';
$lang['Last_Post'] = '�ͺ����ش';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderators';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '�ѧ<b>�����</b>��� post ��Ǣ��'; // Number of posts
$lang['Posted_articles_total'] = 'Post ������ <b>%d</b> ��Ǣ��'; // Number of posts
$lang['Posted_article_total'] = 'Post ������ <b>%d</b> ��Ǣ��'; // Number of posts
$lang['Registered_users_zero_total'] = '�ѧ�������Ҫԡ'; // # registered users
$lang['Registered_users_total'] = '��Ҫԡ������ <b>%d</b> ��'; // # registered users
$lang['Registered_user_total'] = '��Ҫԡ������ <b>%d</b> ��'; // # registered users
$lang['Newest_user'] = '��Ҫԡ����ش��� <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = '����բ�ͤ�������ҡ���駡�͹';
$lang['No_new_posts'] = '����բ�ͤ�������';
$lang['New_posts'] = '�բ�ͤ�������';
$lang['New_post'] = '�բ�ͤ�������';
$lang['No_new_posts_hot'] = '����բ�ͤ����������� [ Popular ]';
$lang['New_posts_hot'] = '�բ�ͤ����������� [ Popular ]';
$lang['No_new_posts_locked'] = '����բ�ͤ���������١ [ Locked ]';
$lang['New_posts_locked'] = '�բ�ͤ���������١ [ Locked ]';
$lang['Forum_is_locked'] = 'Forum ���١��͡';


//
// Login
//
$lang['Enter_password'] = '��سһ�͹ username ��� password �����������к�';
$lang['Login'] = '�������к�(Log in)';
$lang['Logout'] = '�͡�ҡ�к�';

$lang['Forgotten_password'] = '���(forget) password';

$lang['Log_me_in'] = '�������к����ѵ��ѵԷء����(Log in automatically)';

$lang['Error_login'] = '�س��͡ username ���/���� password �Դ(Invalid username and/or password.)';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = '����բ�ͤ��� post';
$lang['No_forums'] = '���촹������� forum';

$lang['Private_Message'] = '��ͤ�����ǹ���';
$lang['Private_Messages'] = '��ͤ�����ǹ���';
$lang['Who_is_Online'] = '�������ѧ online';

$lang['Mark_all_forums'] = '�ѹ�֡�����ҹ�ء forum �������';
$lang['Forums_marked_read'] = '�ء forum �١�ѹ�֡�����ҹ�������';


//
// Viewforum
//
$lang['View_forum'] = '�� forum';

$lang['Forum_not_exist'] = '��辺 forum ���س���͡';
$lang['Reached_on_error'] = 'You have reached this page in error';

$lang['Display_topics'] = '�ʴ�੾����Ǣ�����������';
$lang['All_Topics'] = '�ء��Ǣ��';

$lang['Topic_Announcement'] = '<b>��С��::</b>';
$lang['Topic_Sticky'] = '<b>Sticky:</b>';
$lang['Topic_Moved'] = '<b>��������::</b>';
$lang['Topic_Poll'] = '<b>[ Ẻ���Ǩ ]</b>';

$lang['Mark_all_topics'] = '�ѹ�֡�����ҹ�ء��Ǣ������';
$lang['Topics_marked_read'] = '�ء��Ǣ�Ͷ١�ѹ�֡�����ҹ����';

$lang['Rules_post_can'] = '�س<b>����ö</b>���ҧ��Ǣ��������';
$lang['Rules_post_cannot'] = '�س<b>�������ö</b>���ҧ��Ǣ������';
$lang['Rules_reply_can'] = '�س<b>����ö</b>�����ͺ��';
$lang['Rules_reply_cannot'] = '�س<b>�������ö</b>�����ͺ';
$lang['Rules_edit_can'] = '�س<b>����ö</b>��䢢�ͤ����ͧ�س��';
$lang['Rules_edit_cannot'] = '�س<b>�������ö</b>��䢢�ͤ����ͧ�س';
$lang['Rules_delete_can'] = '�س<b>����ö</b>ź��ͤ����ͧ�س��';
$lang['Rules_delete_cannot'] = '�س<b>�������ö</b>ź��ͤ����ͧ�س';
$lang['Rules_vote_can'] = '�س<b>����ö</b>ŧ��ṹ��';
$lang['Rules_vote_cannot'] = '�س<b>�������ö</b>ŧ��ṹ';
$lang['Rules_moderate'] = '�س<b>����ö</b> %s�Ѵ��� forum ���%s ��'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = '����բ�ͤ���� forum ���<br />��ԡ��� <b>��Ǣ������</b>';


//
// Viewtopic
//
$lang['View_topic'] = '��ҹ';

$lang['Guest'] = '�����������';
$lang['Post_subject'] = '����ͧ';
$lang['View_next_topic'] = '��ҹ��Ǣ�ͶѴ�';
$lang['View_previous_topic'] = '��ҹ��Ǣ�͡�͹˹��';
$lang['Submit_vote'] = '����ṹ';
$lang['View_results'] = '�ټŤ�ṹ';

$lang['No_newer_topics'] = '�������Ǣ������';
$lang['No_older_topics'] = '�������Ǣ�����';
$lang['Topic_post_not_exist'] = '��辺��Ǣ�����͢�ͤ������س��ͧ���';
$lang['No_posts_topic'] = '����բ�ͤ����ͺ���Ǣ�͹��';

$lang['Display_posts'] = '�ʴ�੾�Т�ͤ������ͺ���������';
$lang['All_Posts'] = '�ʴ�������';
$lang['Newest_First'] = '���§�ҡ����-���';
$lang['Oldest_First'] = '���§�ҡ���-����';

$lang['Back_to_top'] = '���仢�ҧ��';

$lang['Read_profile'] = '�٢�������ǹ���'; 
$lang['Send_email'] = '�� Email';
$lang['Visit_website'] = '�������ǹ���';
$lang['ICQ_status'] = 'ʶҹ� ICQ';
$lang['Edit_delete_post'] = '���/ź��ͤ���';
$lang['View_IP'] = '�������Ţ IP';
$lang['Delete_post'] = 'ź��ͤ���';

$lang['wrote'] = '��������'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = '��ҧ�ԧ�ҡ'; // comes before bbcode quote output.
$lang['Code'] = 'Code'; // comes before bbcode code output.

$lang['Edited_time_total'] = '�������ش�� %s ����� %s, ������ %d ����'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = '�������ش�� %s ����� %s, ������ %d ����'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = '��͡��Ǣ��';
$lang['Unlock_topic'] = '�Ŵ��͡��Ǣ��';
$lang['Move_topic'] = '������Ǣ��';
$lang['Delete_topic'] = 'ź��Ǣ��';
$lang['Split_topic'] = '�¡��Ǣ��';

$lang['Stop_watching_topic'] = '��ش�����Ҵ���Ǣ�͹��';
$lang['Start_watching_topic'] = '��Ҵ١�õͺ���Ǣ�͹��';
$lang['No_longer_watching'] = '�س�������Ҵ���Ǣ�͹���ա����';
$lang['You_are_watching'] = '�س���������Ҵ١�õͺ���Ǣ�͹��';

$lang['Total_votes'] = '��ṹ������';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '��ǹ����Ѻ������ͤ���';
$lang['Topic_review'] = '��ͤ������';

$lang['No_post_mode'] = '������к��Ըա�� post'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = '���ҧ��Ǣ������';
$lang['Post_a_reply'] = '�ͺ';
$lang['Post_topic_as'] = '�ʴ���Ǣ�͹����';
$lang['Edit_Post'] = '��䢢�ͤ���';
$lang['Options'] = '������͡';

$lang['Post_Announcement'] = '��С��';
$lang['Post_Sticky'] = 'Sticky';
$lang['Post_Normal'] = '������';

$lang['Confirm_delete'] = '�س��ͧ���ź��ͤ�������������?';
$lang['Confirm_delete_poll'] = '�س��ͧ���źẺ���Ǩ����������?';

$lang['Flood_Error'] = '�س����觢�ͤ���� ��س����ѡ���� ���Ǥ���������';
$lang['Empty_subject'] = '�س��ͧ��͡��������ͧ����';
$lang['Empty_message'] = '�س��ͧ������ͤ�������';
$lang['Forum_locked'] = 'Forum ���١��͡ �س�������ö�ͺ ���������';
$lang['Topic_locked'] = '��Ǣ�͹��١��͡ �س�������ö��� ���͵ͺ��';
$lang['No_post_id'] = '�س��ͧ���͡��ͤ����������';
$lang['No_topic_id'] = '�س��ͧ���͡��Ǣ�ͷ��еͺ';
$lang['No_valid_mode'] = '�س����ö��������§�ͺ, ��� ������ҧ�ԧ��ͤ��� ��سҡ�Ѻ��ͧ����';
$lang['No_such_post'] = '��辺��ͤ������ ��سҡ�Ѻ��ͧ����';
$lang['Edit_own_posts'] = '������. �س����ö��䢢�ͤ����ͧ����ͧ��ҹ��';
$lang['Delete_own_posts'] = '������. �س����öź��ͤ����ͧ����ͧ��ҹ��';
$lang['Cannot_delete_replied'] = '������. �س�������öź��ͤ������١�ͺ�����';
$lang['Cannot_delete_poll'] = '������. �س�������öźẺ���Ǩ����ѧ�ӧҹ����';
$lang['Empty_poll_title'] = '�س��ͧ�����Ǣ��Ẻ���Ǩ';
$lang['To_few_poll_options'] = '�س��ͧ������ҧ���� 2 ������͡';
$lang['To_many_poll_options'] = '�س��������͡Ẻ���Ǩ�ҡ�Թ�';
$lang['Post_has_no_poll'] = '��ͤ�����������Ẻ���Ǩ';
$lang['Already_voted'] = '�س��ŧ��ṹẺ���Ǩ��������';
$lang['No_vote_option'] = '�س��ͧ���͡������͡����ŧ��ṹ����';

$lang['Add_poll'] = '����Ẻ���Ǩ�����Ǣ�͹��';
$lang['Add_poll_explain'] = '��Ҥس����ͧ�����Ẻ���Ǩ ���������ǹ�����ҧ���';
$lang['Poll_question'] = '�Ӷ��Ẻ���Ǩ';
$lang['Poll_option'] = '������͡Ẻ���Ǩ';
$lang['Add_option'] = '�ѹ�֡';
$lang['Update'] = '���';
$lang['Delete'] = 'ź';
$lang['Poll_for'] = '��Ẻ���Ǩ������';
$lang['Days'] = '�ѹ'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[��� 0 ���ͻ������ҧ��� ���������ͧ��á�˹���������]';
$lang['Delete_poll'] = 'źẺ���Ǩ';

$lang['Disable_HTML_post'] = '��������� HTML 㹢�ͤ������';
$lang['Disable_BBCode_post'] = '����� BBCode 㹢�ͤ������';
$lang['Disable_Smilies_post'] = '������ٻ�������㹢�ͤ������';

$lang['HTML_is_ON'] = '������ HTML <u>��</u>';
$lang['HTML_is_OFF'] = '������ HTML <u>�����</u>';
$lang['BBCode_is_ON'] = '�� %sBBCode%s <u>��</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '�� %sBBCode%s <u>�����</u>';
$lang['Smilies_are_ON'] = '���ٻ������� <u>��</u>';
$lang['Smilies_are_OFF'] = '���ٻ������� <u>�����</u>';

$lang['Attach_signature'] = 'Ṻ����� (����繢ͧ�س ����ö��������������ǹ���)';
$lang['Notify'] = '����͹������ռ��ͺ';
$lang['Delete_post'] = 'ź��ͤ������';

$lang['Stored'] = '���Ѻ��ͤ����ͧ�س����';
$lang['Deleted'] = 'ź��ͤ����ͧ�س����';
$lang['Poll_delete'] = 'źẺ���Ǩ�ͧ�س����';
$lang['Vote_cast'] = '���Ѻ���ŧ��ṹ�ͧ�س����';

$lang['Topic_reply_notification'] = '����͹������ռ��ͺ';

$lang['bbcode_b_help'] = '�ӵ��˹�: [b]��ͤ������˹�[/b]  (alt+b)';
$lang['bbcode_i_help'] = '�ӵ�����§: [i]��ͤ���������§[/i]  (alt+i)';
$lang['bbcode_u_help'] = '�մ�����: [u]��ͤ����մ�����[/u]  (alt+u)';
$lang['bbcode_q_help'] = '��ҧ�ԧ��ͤ���: [quote]��ͤ������١��ҧ�ԧ[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Code: [code]��ͤ���Ẻ Code[/code]  (alt+c)';
$lang['bbcode_l_help'] = '��¡��: [list]��ͤ���Ẻ��¡��[/list]  (alt+l)';
$lang['bbcode_o_help'] = '�ӴѺ��¡��: [list=]��ͤ���Ẻ�ӴѺ��¡��[/list]  (alt+o)';
$lang['bbcode_p_help'] = '�á�ٻ�Ҿ: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = '�á URL: [url]http://url[/url] ���� [url=http://url]��ͤ����ʴ�[/url]  (alt+w)';
$lang['bbcode_a_help'] = '�������Դ���·ء����� BBCode ������ѵ��ѵ� (¡��鹡�÷�����Т�Ҵ����ѡ��)';
$lang['bbcode_s_help'] = '���յ���ѡ��: [color=red]��ͤ�����ᴧ[/color] ���ͨ��� color=#FF0000 ����';
$lang['bbcode_f_help'] = '��˹���Ҵ����ѡ��: [size=x-small]��ͤ������С�˹���Ҵ[/size]';

$lang['Emoticons'] = '�ٻ�ʴ�������';
$lang['More_emoticons'] = '����������';

$lang['Font_color'] = '�յ���ѡ��';
$lang['color_default'] = '�ҵðҹ';
$lang['color_dark_red'] = 'ᴧ���';
$lang['color_red'] = 'ᴧ';
$lang['color_orange'] = '���';
$lang['color_brown'] = '��ӵ��';
$lang['color_yellow'] = '����ͧ';
$lang['color_green'] = '����';
$lang['color_olive'] = '�С͡';
$lang['color_cyan'] = '���';
$lang['color_blue'] = '����Թ';
$lang['color_dark_blue'] = '����Թ���';
$lang['color_indigo'] = '����';
$lang['color_violet'] = '��ǧ';
$lang['color_white'] = '���';
$lang['color_black'] = '��';

$lang['Font_size'] = '��Ҵ����ѡ��';
$lang['font_tiny'] = '����ҡ';
$lang['font_small'] = '���';
$lang['font_normal'] = '�á��';
$lang['font_large'] = '�˭�';
$lang['font_huge'] = '�˭��ҡ';

$lang['Close_Tags'] = '�Դ���¤����';
$lang['Styles_tip'] = '�������: �س����ö����ٻẺ������ѡ�÷���ա�û���ᶺ�� (Selected text) ��ѹ��';


//
// Private Messaging
//
$lang['Private_Messaging'] = '��ͤ�����ǹ���';

$lang['Login_check_pm'] = '�������к������礢�ͤ�����ǹ���';
$lang['New_pms'] = '�س�� %d ��ͤ�������'; // You have 2 new messages
$lang['New_pm'] = '�س�� %d ��ͤ�������'; // You have 1 new message
$lang['No_new_pm'] = '����բ�ͤ�������';
$lang['Unread_pms'] = '�س�� %d ��ͤ�������ѧ�������ҹ';
$lang['Unread_pm'] = '�س�� %d ��ͤ�������ѧ�������ҹ';
$lang['No_unread_pm'] = '�س����բ�ͤ�������ѧ�������ҹ';
$lang['You_new_pm'] = '�� 1 ��ͤ�������� Inbox';
$lang['You_new_pms'] = '�����¢�ͤ�������� Inbox';
$lang['You_no_new_pm'] = '����բ�ͤ�������';

$lang['Unread_message'] = '�ѧ�������ҹ';
$lang['Read_message'] = '��ҹ����';

$lang['Read_pm'] = '��ҹ';
$lang['Post_new_pm'] = '�觢�ͤ�����ǹ���';
$lang['Post_reply_pm'] = '�ͺ��Ѻ';
$lang['Post_quote_pm'] = '�ͺ����ҧ�ԧ��ͤ���';
$lang['Edit_pm'] = '���';

$lang['Inbox'] = 'Inbox';
$lang['Outbox'] = 'Outbox';
$lang['Savebox'] = 'Savebox';
$lang['Sentbox'] = 'Sentbox';
$lang['Flag'] = 'ʶҹ�';
$lang['Subject'] = '����ͧ';
$lang['From'] = '�ҡ';
$lang['To'] = '�֧';
$lang['Date'] = '�ѹ���';
$lang['Mark'] = '���͡';
$lang['Sent'] = '��';
$lang['Saved'] = '�ѹ�֡';
$lang['Delete_marked'] = 'ź੾�з�����͡';
$lang['Delete_all'] = 'ź������';
$lang['Save_marked'] = '��੾�з�����͡'; 
$lang['Save_message'] = '��';
$lang['Delete_message'] = 'ź';

$lang['Display_messages'] = '�ʴ�੾�Т�ͤ������������'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '��ͤ���������';

$lang['No_messages_folder'] = '����բ�ͤ���';

$lang['PM_disabled'] = '���촹��١��������ͤ�����ǹ���';
$lang['Cannot_send_privmsg'] = '������. Admin ���͹حҵ���س���ͤ�����ǹ���';
$lang['No_to_user'] = '�س��ͧ�к� username ����Ѻ';
$lang['No_such_user'] = '������. ��辺 username ���';

$lang['Disable_HTML_pm'] = '����� HTML 㹢�ͤ������';
$lang['Disable_BBCode_pm'] = '����� BBCode 㹢�ͤ������';
$lang['Disable_Smilies_pm'] = '������ٻ������� 㹢�ͤ������';

$lang['Message_sent'] = '�觢�ͤ�������';

$lang['Click_return_inbox'] = '��ԡ %s�����%s ���͡�Ѻ� Inbox';
$lang['Click_return_index'] = '��ԡ %s�����%s ���͡�Ѻ� Index';

$lang['Send_a_new_message'] = '�觢�ͤ�����ǹ���';
$lang['Send_a_reply'] = '�ͺ��ͤ�����ǹ���';
$lang['Edit_message'] = '��䢢�ͤ�����ǹ���';

$lang['Notification_subject'] = '�բ�ͤ��������觶֧�س';

$lang['Find_username'] = '���� username';
$lang['Find'] = '����';
$lang['No_match'] = '��辺 username ���';

$lang['No_post_id'] = '������к������Ţ�����';
$lang['No_such_folder'] = '��辺 folder ���';
$lang['No_folder'] = '������к� folder';

$lang['Mark_all'] = '���͡������';
$lang['Unmark_all'] = '������͡������';

$lang['Confirm_delete_pm'] = '�س��ͧ���ź��ͤ�������������?';
$lang['Confirm_delete_pms'] = '�س��ͧ���ź��ͤ�������ҹ���������?';

$lang['Inbox_size'] = '�س�� Inbox ����� %d%%'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '�س�� Sentbox ����� %d%%'; 
$lang['Savebox_size'] = '�س�� Savebox ����� %d%%'; 

$lang['Click_view_privmsg'] = '��ԡ %s�����%s ���͡�Ѻ� Inbox �ͧ�س';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '��������ǹ��Ǣͧ %s'; // %s is username 
$lang['About_user'] = '����ǡѺ %s'; // %s is username

$lang['Preferences'] = '��õ�駤�ҵ�ҧ�';
$lang['Items_required'] = '��ͧ��͡�ء��ͧ���������ͧ���� *. Items marked with a * are required unless stated otherwise.';
$lang['Registration_info'] = '�����š��ŧ����¹';
$lang['Profile_info'] = '��������ǹ���';
$lang['Profile_info_warn'] = '��������ǹ���ж١�ʴ�����Ҹ�ó��';
$lang['Avatar_panel'] = '��˹��ٻ��Шӵ��';
$lang['Avatar_gallery'] = '�ٻ��Шӵ�Ƿ�������';

$lang['Website'] = 'Website';
$lang['Location'] = '�������';
$lang['Contact'] = '�Դ���';
$lang['Email_address'] = 'Email address';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = '�觢�ͤ�����ǹ���';
$lang['Hidden_email'] = '[ ��͹ ]';
$lang['Search_user_posts'] = '���Ң�ͤ������������ͺ';
$lang['Interests'] = '����ʹ�';
$lang['Occupation'] = '�Ҫվ';
$lang['Poster_rank'] = '�дѺ��õͺ';

$lang['Total_posts'] = '�ӹǹ��õͺ';
$lang['User_post_pct_stats'] = '%.2f%% �ҡ������'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f ��ͤ�������ѹ'; // 1.5 posts per day
$lang['Search_user_posts'] = '���Ң�ͤ������ͺ�� %s'; // Find all posts by username

$lang['No_user_id_specified'] = '������. ��辺 username ���';
$lang['Wrong_Profile'] = '�س�������ö��䢢����Ţͧ��������';

$lang['Only_one_avatar'] = '�кت�Դ�ͧ�ٻ��Шӵ����������ҧ��ҹ��';
$lang['File_no_data'] = '��辺����������ҡ URL ���س�к�';
$lang['No_connection_URL'] = '�Դ��� URL ���س�к������';
$lang['Incomplete_URL'] = 'URL ���س�к����١��ͧ';
$lang['Wrong_remote_avatar_format'] = 'URL �ٻ�Ҿ�ҡ���������١��ͧ';
$lang['No_send_account_inactive'] = '������. �������ö�� password �� ���кѭ�բͧ�س�١�ЧѺ. ��سҵԴ��� administrator';

$lang['Always_smile'] = '���ٻ�����������';
$lang['Always_html'] = '�� HTML ����';
$lang['Always_bbcode'] = '�� BBCode ����';
$lang['Always_add_sig'] = 'Ṻ����繴�������';
$lang['Always_notify'] = '��͹������ռ��ͺ����';
$lang['Always_notify_explain'] = '�� Email ��͹������ռ��ͺ ����ö����¹��ء���駷��س������ͤ���';

$lang['Board_style'] = '�ٻẺ';
$lang['Board_lang'] = '����(Language)';
$lang['No_themes'] = '����� theme 㹰ҹ������';
$lang['Timezone'] = '��Ѻ���� timezone';
$lang['Date_format'] = '�ٻẺ�ѹ���';
$lang['Date_format_explain'] = '�����ʵ����ѡ�ͧ���� PHP 㹿ѧ��ѹ <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>';
$lang['Signature'] = '�����';
$lang['Signature_explain'] = '���ʴ����ͤ����ͧ�س �������Թ %d ����ѡ��';
$lang['Public_view_email'] = '�ʴ� Email ����';

$lang['Current_password'] = 'Password �Ѩ�غѹ';
$lang['New_password'] = 'Password ����';
$lang['Confirm_password'] = 'Password �����ա����(Again)';
$lang['Confirm_password_explain'] = '��͡੾�����������¹ password ��������¹ Email';
$lang['password_if_changed'] = '����͡ password ���� ����͵�ͧ�������¹��ҹ��';
$lang['password_confirm_if_changed'] = '����͡ password �����ա���� ����͵�ͧ�������¹��ҹ��';

$lang['Avatar'] = '�ٻ��Шӵ��';
$lang['Avatar_explain'] = '�ʴ��ٻ�Ҿ�����ҧ���ͧ͢�س �ٻ���ҧ����Թ %d pixels �٧����Թ %d pixels ��Т�Ҵ����Թ %dkB.';
$lang['Upload_Avatar_file'] = '���ٻ��������������ͧ�ͧ�س';
$lang['Upload_Avatar_URL'] = '�Ѵ�͡�ٻ�ҡ URL';
$lang['Upload_Avatar_URL_explain'] = '��͹ URL �ͧ�ٻ�Ҿ �����к��ФѴ�͡������������ͧ';
$lang['Pick_local_Avatar'] = '���͡�ҡ��������';
$lang['Link_remote_Avatar'] = '������§仹͡��纹��';
$lang['Link_remote_Avatar_explain'] = '��͹ URL �ͧ�ٻ�Ҿ���س��ͧ���';
$lang['Avatar_URL'] = 'URL �ͧ�ٻ�Ҿ';
$lang['Select_from_gallery'] = '���͡�ҡ��������';
$lang['View_avatar_gallery'] = '�ʴ��ٻ�Ҿ��������';

$lang['Select_avatar'] = '���͡';
$lang['Return_profile'] = '¡��ԡ';
$lang['Select_category'] = '���͡�����';

$lang['Delete_Image'] = 'ź�ٻ�Ҿ�Ѩ�غѹ';
$lang['Current_Image'] = '�ٻ�Ҿ�Ѩ�غѹ';

$lang['Notify_on_privmsg'] = '�� Email ��͹������բ�ͤ�����ǹ������������';
$lang['Popup_on_privmsg'] = '�Դ˹�ҵ�ҧ�����ѵ��ѵ� ������բ�ͤ�����ǹ������������';
$lang['Popup_on_privmsg_explain'] = '�ҧ template ���Դ˹�ҵ�ҧ����������������բ�ͤ�����ǹ������������'; 
$lang['Hide_user'] = '��͹ʶҹС�� online �ͧ�س';

$lang['Profile_updated'] = '�ѹ�֡��������ǹ��Ǣͧ�س���º��������';
$lang['Profile_updated_inactive'] = '��������ǹ��Ǣͧ�س�١�ѹ�֡���� ��س��ͧ�ӡ���׹�ѹ���ͺѭ������ ��سҡ�Ѻ仵�Ǩ�ͺ email �ͧ�س������ҹ�Ը��׹�ѹ���ͺѭ�� �������س�� ��� admin �繼��ӡ���׹�ѹ���ͺѭ�մ��µ���ͧ';

$lang['Password_mismatch'] = 'Password ���س��͹ ���ç�ѹ';
$lang['Current_password_mismatch'] = 'Password �Ѩ�غѹ���١��ͧ';
$lang['Password_long'] = 'Password �������Թ 32 ����ѡ��';
$lang['Too_many_registers'] = '�س��������Ѥ���Ҫԡ����Թ� �ô��������ѡ���� ���Ǥ����ͧ����';
$lang['Username_taken'] = '������. Username ���١��ҹ����';
$lang['Username_invalid'] = '������. Username ����յ���ѡ�õ�ͧ�������� ������ͧ���� \'';
$lang['Username_disallowed'] = '������. ���͹حҵ����� username ���';
$lang['Email_taken'] = '������. Email ���١�������';
$lang['Email_banned'] = '������. Email ���١������';
$lang['Email_invalid'] = '������. Email ���١��ͧ';
$lang['Signature_too_long'] = '���������Թ�';
$lang['Fields_empty'] = '�س��ͧ��͡��ͧ���������ú';
$lang['Avatar_filetype'] = '��Դ�ͧ�ٻ�Ҿ��ͧ�� .jpg, .gif ���� .png';
$lang['Avatar_filesize'] = '��Ҵ�ͧ�ٻ�Ҿ��ͧ���¡��� %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = '��Ҵ�ͧ�ٻ�Ҿ��ͧ���ҧ����Թ %d pixels ����٧����Թ %d pixels';

$lang['Welcome_subject'] = '�Թ�յ�͹�Ѻ��� Forum %s'; // Welcome to my.com forums
$lang['New_account_subject'] = '�ѭ�ռ��������';
$lang['Account_activated_subject'] = '�ѭ�ն١�׹�ѹ����';

$lang['Account_added'] = '�ͺ�س�����Ѥ� �ѭ�բͧ�س�١���ҧ���� �س����ö�������к������ username ��� password ���س��Ѥ�';
$lang['Account_inactive'] = '�ͺ�س�����Ѥ� �ѭ�բͧ�س�١���ҧ���� ��س��ͧ�ӡ���׹�ѹ��͹ ��سҡ�Ѻ��� Email ���س����Ѥ�';
$lang['Account_inactive_admin'] = '�ͺ�س�����Ѥ� �ѭ�բͧ�س�١���ҧ���� �س�����Ѻ Email �� ����� Admin ��͹حҵ����';
$lang['Account_active'] = '�ѭ�բͧ�س��١�׹�ѹ���� �ͺ�س�����Ѥ�';
$lang['Account_active_admin'] = '�ѭ�բͧ�س��١�׹�ѹ����';
$lang['Reactivate'] = '��س��׹�ѹ�ѭ�բͧ�س����!';
$lang['Already_activated'] = '�س���׹�ѹ�ѭ�բͧ�س�����';
$lang['COPPA'] = '�ѭ�բͧ�س�١���ҧ���� ���ͧ���Ѻ����׹�ѹ���¡�͹ ��سҡ�Ѻ��� Email ���ʹ���������´';

$lang['Registration'] = '���͹�(Registration Agreement Terms)';
$lang['Reg_agreement'] = '�س����Ѻ��� Administrator ��� moderator �ͧ forum ��� ���Է�����ҹ, ź ������䢷ء��ͤ���. ��� administrator, moderator ���� webmaster �������ö�Ѻ�Դ�ͺ��͢�ͤ������س���ʴ������Դ��� (¡�����Ҿǡ�Ҩ��繼���ʵ��ͧ).<br /><br />�س��ŧ��Ҩ�����ʵ��ͤ��������Һ���, ����, ����ʴ�������þ, ���蹻���ҷ, �繷���ѧ��¨, �����, ����㹷ҧ�� ����������Ѵ��͡�����. ��á�з��蹹���Ҩ�����س�١�ǧ�����ѹ�� ������ҧ���� (��м������ԡ�âͧ�س������Ѻ�������͹����). �����Ţ IP �ͧ�ء�ʵ�ж١�ѹ�֡����������ѡ�ҹ. �س�Թ������ webmaster, administrator ��� moderators �ͧ forum ������Է���ź, ���, ���� ���ͻԴ��Ǣ�������ʹ���ҷ�������. �س�Թ����������ŷء���ҧ�ͧ�س�١�����㹰ҹ������. ��觢���������ҹ������١�Դ�µ�ͼ�������������Ѻ����Թ����ҡ�س .Webmaster, administrator ��� moderator �������ö�Ѻ�Դ�ͺ��͡�ö١��Т����� ���ǹ�����ҧ������ʹ��͹��ҧ�.<br /><br />Forum ������к� cookies �����红��������㹤���������ͧ�س. Cookies ����ҹ�������բ����ŷ��س���͡�������͹��ҹ��; �����ͪ������س��ҹ����¢��. E-mail �ж١�������׹�ѹ�����š����Ѥ���Ҫԡ��� password �ͧ�س��ҹ�� (���������Ѻ�� password �ѹ��������ͤس��� password ���).<br /><br />��Ҥس��ԡ��Ѥ���Ҫԡ����ҹ��ҧ��� �����Ҥس������Ѻ�ء���͹䢷������������.<br /><br /><br/>While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above; they serve only to improve your viewing pleasure. The e-mail address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br />By clicking Register below you agree to be bound by these conditions.';

$lang['Agree_under_13'] = '����Ѻ���͹� ��Щѹ����<b>��ӡ���</b> 13 ��. I Agree to these terms and am <b>under</b> 13 years of age.';
$lang['Agree_over_13'] = '����Ѻ���͹� ��Щѹ����<b>�ҡ����</b>����<b>��ҡѺ</b> 13 ��. I Agree to these terms and am <b>over</b> or <b>exactly</b> 13 years of age.';
$lang['Agree_not'] = '�������Ѻ���͹�. I do not agree to these terms.';

$lang['Wrong_activation'] = '�����׹�ѹ���١��ͧ. The activation key you supplied does not match any in the database.';
$lang['Send_password'] = '�� password �ѹ����. Send me a new password.';
$lang['Password_updated'] = '���ҧ password �ѹ��������, ��سҡ�Ѻ��� Email ���ͷӡ���׹�ѹ. A new password has been created; please check your e-mail for details on how to activate it.';
$lang['No_email_match'] = 'E-mail ���س��͡���ç�Ѻ�����������. The e-mail address you supplied does not match the one listed for that username.';
$lang['New_password_activation'] = '�׹�ѹ password ��������. New password activation';
$lang['Password_activated'] = '�ѭ�բͧ�س��١��ҹ��������. ��س��� password ������Ѻ� Email �����������к�. Your account has been re-activated. To log in, please use the password supplied in the e-mail you received.';

$lang['Send_email_msg'] = '�� Email';
$lang['No_user_specified'] = '������к� username';
$lang['User_prevent_email'] = 'Username �������ͧ����Ѻ Email ��س�����¹���觢�ͤ�����ǹ���᷹';
$lang['User_not_exist'] = '��辺 username ���';
$lang['CC_email'] = '�Ѵ�͡ Email ����觡�Ѻ�Ҷ֧�س����';
$lang['Email_message_desc'] = '��ͤ����ж١���Ẻ����ѡ�ø�����, ��س����������� HTML ���� BBCode. ��ͤ�������觡�Ѻ�ж١���ҷ�� Email �ͧ�س';
$lang['Flood_email_limit'] = '�س�ѧ�������ö�� Email �����㹵͹��� ��س����ѡ���� ���Ǥ����ͧ����';
$lang['Recipient'] = '����Ѻ';
$lang['Email_sent'] = 'Email �١������';
$lang['Send_email'] = '�� Email';
$lang['Empty_subject_email'] = '�س��ͧ��͡��������ͧ����';
$lang['Empty_message_email'] = '�س��ͧ������ͤ�������';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = '�����׹�ѹ�ҡ�ٻ���١��ͧ';
$lang['Too_many_registers'] = '�س��������Ѥ���Ҫԡ����Թ� �ô��������ѡ���� ���Ǥ����ͧ����';
$lang['Confirm_code_impaired'] = '��Ҥس��ҹ������ٻ����͡ ��سҵԴ��ͤ͢�����������ͨҡ %sAdministrator%s';
$lang['Confirm_code'] = '�����׹�ѹ�ҡ�ٻ';
$lang['Confirm_code_explain'] = '��͹���ʷ��س�����ٻ. �ô��������ѡ�����-�˭����١��ͧ ����Ţ�ٹ�������鹵ç�մ�Ѻ�ç��ҧ';



//
// Memberslist
//
$lang['Select_sort_method'] = '���§�ӴѺ���';
$lang['Sort'] = '���§����';
$lang['Sort_Top_Ten'] = '�ͺ�ҡ�ش 10 ��';
$lang['Sort_Joined'] = '�ѹ����������';
$lang['Sort_Username'] = 'Username';
$lang['Sort_Location'] = '�������';
$lang['Sort_Posts'] = '�ӹǹ��õͺ';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Website';
$lang['Sort_Ascending'] = '����-�ҡ';
$lang['Sort_Descending'] = '�ҡ-����';
$lang['Order'] = '���§�ҡ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Group Control Panel';
$lang['Group_member_details'] = '��������´�������Ҫԡ�����';
$lang['Group_member_join'] = '������������';

$lang['Group_Information'] = '��������´�����';
$lang['Group_name'] = '���͡����';
$lang['Group_description'] = '��͸Ժ�¡����';
$lang['Group_membership'] = 'ʶҹС������Ҫԡ�����';
$lang['Group_Members'] = '��Ҫԡ�����';
$lang['Group_Moderator'] = 'Group Moderator';
$lang['Pending_members'] = '��Ҫԡ����͡�þԨ�ó�';

$lang['Group_type'] = '��Դ�����';
$lang['Group_open'] = '������Դ';
$lang['Group_closed'] = '������١�Դ';
$lang['Group_hidden'] = '������١��͹';

$lang['Current_memberships'] = '����Ҫԡ';
$lang['Non_member_groups'] = '���������Ҫԡ';
$lang['Memberships_pending'] = '�͡�þԨ�ó�';

$lang['No_groups_exist'] = '����ա���������';
$lang['Group_not_exist'] = '��辺������������';

$lang['Join_group'] = '������������';
$lang['No_group_members'] = '�������Ҫԡ㹡�������';
$lang['Group_hidden_members'] = '��������١��͹ �س�֧�������ö����ª�����Ҫԡ�����';
$lang['No_pending_group_members'] = '�������Ҫԡ����͡�þԨ�ó�㹡�������';
$lang['Group_joined'] = '���Ѻ�����Ѥ���Ҫԡ��������ͧ�س����<br />�س�����Ѻ�������͹����� moderator �ͧ����� ��͹حҵ���س����Ҫԡ����';
$lang['Group_request'] = '���Ѻ���Ѥ�����������ͧ�س����';
$lang['Group_approved'] = '�س���Ѻ͹حҵ�������������������';
$lang['Group_added'] = '�������ͧ͢�س��ҡ��������'; 
$lang['Already_member_group'] = '�س����Ҫԡ�ͧ����������������';
$lang['User_is_member_group'] = '�����������Ҫԡ�ͧ����������������';
$lang['Group_type_updated'] = '��Ѻ��ا��Դ��������º��������';

$lang['Could_not_add_user'] = '��辺���ͷ��س���͡';
$lang['Could_not_anon_user'] = '�س�������ö�������� Anonymous ����Ҫԡ';

$lang['Confirm_unsub'] = '�س������ͷ���¡��ԡ�������Ҫԡ��������?';
$lang['Confirm_unsub_pending'] = '�����Ѥ���Ҫԡ������ͧ�س�ѧ������Ѻ���͹حҵ �س������ͷ���¡��ԡ�����Ѥ�?';

$lang['Unsub_success'] = '�س��¡��ԡ�������Ҫԡ���������';

$lang['Approve_selected'] = '͹حҵ���ͷ�����͡���';
$lang['Deny_selected'] = '����ʸ���ͷ�����͡���';
$lang['Not_logged_in'] = '�س��ͧ�������к� ����������������';
$lang['Remove_selected'] = 'ź���ͷ�����͡���';
$lang['Add_member'] = '������Ҫԡ��ҡ����';
$lang['Not_group_moderator'] = '�س������� moderator �ͧ����� �֧������Է��������';

$lang['Login_to_join'] = '�������к� ��������������ͨѴ�����Ҫԡ�����';
$lang['This_open_group'] = '���������繡�����Դ ��ԡ������Ѥ���Ҫԡ�����';
$lang['This_closed_group'] = '��������١�Դ �֧�Դ�Ѻ��Ѥ���Ҫԡ�����';
$lang['This_hidden_group'] = '��������١��͹ �֧���͹حҵ�����Ѥ���Ҫԡ�����Ẻ�ѵ��ѵ�';
$lang['Member_this_group'] = '�س����Ҫԡ�ͧ��������';
$lang['Pending_this_group'] = '�����Ѥâͧ�س ���ѧ����������ҧ��þԨ�ó�';
$lang['Are_group_moderator'] = '�س�� moderator �ͧ�����';
$lang['None'] = '(�����)';

$lang['Subscribe'] = '��Ѥ���Ҫԡ';
$lang['Unsubscribe'] = '¡��ԡ�������Ҫԡ';
$lang['View_Information'] = '����������´';


//
// Search
//
$lang['Search_query'] = '�ӷ��Ф���';
$lang['Search_options'] = '������͡';

$lang['Search_keywords'] = '���Ҩҡ�����';
$lang['Search_keywords_explain'] = '�س����ö�� <u>AND</u> �����кؤӷ���ͧ��㹼��Ѿ��, <u>OR</u> �Ҩ����������դӹ����� ��� <u>NOT</u> �е�ͧ����դӹ������. �� * ���ͤ��Ҩҡ�ҧ��ǹ�ͧ��';
$lang['Search_author'] = '���Ҩҡ�����';
$lang['Search_author_explain'] = '�� * ���ͤ��Ҩҡ�ҧ��ǹ�ͧ��';

$lang['Search_for_any'] = '���Ҩҡ�ء��ǹ �������ͤ�������к�';
$lang['Search_for_all'] = '���Ҩҡ�ء��ǹ';
$lang['Search_title_msg'] = '���Ҩҡ������Ǣ�� �����ǹ�ͧ��ͤ���';
$lang['Search_msg_only'] = '���Ҩҡ��ǹ�ͧ��ͤ�����ҹ��';

$lang['Return_first'] = '�����ʴ�੾��'; // followed by xxx characters in a select box
$lang['characters_posts'] = '����ѡ���á��ҹ��';

$lang['Search_previous'] = '����㹪�ǧ����'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = '���§�ӴѺ���';
$lang['Sort_Time'] = '���ҷ�� post';
$lang['Sort_Post_Subject'] = '����ͧ��� post';
$lang['Sort_Topic_Title'] = 'Title �ͧ��Ǣ��';
$lang['Sort_Author'] = '�����';
$lang['Sort_Forum'] = 'Forum';

$lang['Display_results'] = '�ʴ�����';
$lang['All_available'] = '������';
$lang['No_searchable_forums'] = '�س������Է������ forum �����纹��';

$lang['No_search_match'] = '��辺��Ǣ�����͢�ͤ�������ͧ���';
$lang['Found_search_match'] = '�� %d ��¡��'; // eg. Search found 1 match
$lang['Found_search_matches'] = '�� %d ��¡��'; // eg. Search found 24 matches

$lang['Close_window'] = '�Դ˹�ҵ�ҧ���';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '������. ੾�� %s ��ҹ�� �������ö���ҧ��ͤ�����С��� forum ���';
$lang['Sorry_auth_sticky'] = '������. ੾�� %s ��ҹ�� �������ö���ҧ��ͤ��� sticky � forum ���'; 
$lang['Sorry_auth_read'] = '������. ੾�� %s ��ҹ�� �������ö��ҹ��Ǣ��� forum ���'; 
$lang['Sorry_auth_post'] = '������. ੾�� %s ��ҹ�� �������ö���ҧ��Ǣ��� forum ���'; 
$lang['Sorry_auth_reply'] = '������. ੾�� %s ��ҹ�� �������ö�ͺ� forum ���'; 
$lang['Sorry_auth_edit'] = '������. ੾�� %s ��ҹ�� �������ö��䢢�ͤ���� forum ���'; 
$lang['Sorry_auth_delete'] = '������. ੾�� %s ��ҹ�� �������öź��ͤ���� forum ���'; 
$lang['Sorry_auth_vote'] = '������. ੾�� %s ��ҹ�� �������öŧ��ṹẺ���Ǩ� forum ���'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>�����������кع��</b>';
$lang['Auth_Registered_Users'] = '<b>�������ŧ����¹</b>';
$lang['Auth_Users_granted_access'] = '<b>������Ѻ�Է�������</b>';
$lang['Auth_Moderators'] = '<b>moderators</b>';
$lang['Auth_Administrators'] = '<b>administrators</b>';

$lang['Not_Moderator'] = '�س������� moderator �ͧ forum ���';
$lang['Not_Authorised'] = '���͹حҵ';

$lang['You_been_banned'] = '�س�١������� forum ���<br />��سҵԴ��� webmaster ���� administrator �ͧ����';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '����ռ������ŧ����¹ ��� '; // There are 5 Registered and
$lang['Reg_users_online'] = '�� %d �������ŧ����¹ ��� '; // There are 5 Registered and
$lang['Reg_user_online'] = '�� %d �������ŧ����¹ ��� '; // There are 5 Registered and
$lang['Hidden_users_zero_online'] = '����ռ�������͹ ���ѧ online'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d ��������͹ ���ѧ online'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d ��������͹ ���ѧ online'; // 6 Hidden users online
$lang['Guest_users_online'] = '�� %d �������������� online'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '����ռ������������� online'; // There are 10 Guest users online
$lang['Guest_user_online'] = '�� %d �������������� online'; // There is 1 Guest user online
$lang['No_users_browsing'] = '����ռ������ѧ��ҹ forum ���';

$lang['Online_explain'] = '�����Ź���繡�÷ӧҹ����ش����� 5 �ҷա�͹';

$lang['Forum_Location'] = '���˹� forum';
$lang['Last_updated'] = '�ӧҹ����ش';

$lang['Forum_index'] = '��¡�� forum';
$lang['Logging_on'] = '���ѧ�������к�';
$lang['Posting_message'] = '���ѧ�ͺ��ͤ���';
$lang['Searching_forums'] = '���ѧ���� forum';
$lang['Viewing_profile'] = '���ѧ�٢�������ǹ���';
$lang['Viewing_online'] = '���ѧ����ª��ͼ���� online';
$lang['Viewing_member_list'] = '���ѧ����ª�����Ҫԡ';
$lang['Viewing_priv_msgs'] = '���ѧ��ҹ��ͤ�����ǹ���';
$lang['Viewing_FAQ'] = '���ѧ��ҹ�Ը���';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderator Control Panel';
$lang['Mod_CP_explain'] = 'Ẻ�������ҧ��ҧ��Ѵ��� forum ���. �س����ö��͡, �Ŵ��͡, ���� ����ź ��Ǣ�������Ţ㴡���';

$lang['Select'] = '���͡';
$lang['Delete'] = 'ź';
$lang['Move'] = '����';
$lang['Lock'] = '��͡';
$lang['Unlock'] = '�Ŵ��͡';

$lang['Topics_Removed'] = 'ź��Ǣ�ͷ��١���͡����';
$lang['Topics_Locked'] = '��͡��Ǣ�ͷ��١���͡����';
$lang['Topics_Moved'] = '������Ǣ�ͷ��١���͡����';
$lang['Topics_Unlocked'] = '�Ŵ��͡��Ǣ�ͷ��١���͡����';
$lang['No_Topics_Moved'] = '�������Ǣ��㴷��١����';

$lang['Confirm_delete_topic'] = '�س��ͧ���ź��Ǣ��(�����)����������?';
$lang['Confirm_lock_topic'] = '�س��ͧ�����͡��Ǣ��(�����)����������?';
$lang['Confirm_unlock_topic'] = '�س��ͧ��ûŴ��͡��Ǣ��(�����)����������?';
$lang['Confirm_move_topic'] = '�س��ͧ���������Ǣ��(�����)����������?';

$lang['Move_to_forum'] = '����价�� forum';
$lang['Leave_shadow_topic'] = '��駢�ͤ����͡���� forum �������';

$lang['Split_Topic'] = '����ͧ�������Ѻ�¡��Ǣ��';
$lang['Split_Topic_explain'] = 'Ẻ�������ҹ��ҧ������Ѻ�¡��Ǣ���͡�� 2 ��ǹ, �¡�����͡���Т�ͤ����������¢�ͤ�������';
$lang['Split_title'] = '������Ǣ������';
$lang['Split_forum'] = 'Forum ����Ѻ��Ǣ������';
$lang['Split_posts'] = '�¡�͡�੾�Т�ͤ���������͡';
$lang['Split_after'] = '�¡������ͤ���������͡�繵��';
$lang['Topic_split'] = '�¡��Ǣ�ͷ��١���͡���º��������';

$lang['Too_many_error'] = '�س���͡��ͤ����ҡ�Թ�. �س��ͧ���͡੾�Т�ͤ����ش������鹷����¡��ҹ��!';

$lang['None_selected'] = '�س��������͡��Ǣ��. ��سҡ�Ѻ����͡���ҧ���� 1 ��Ǣ��';
$lang['New_forum'] = 'Forum ����';

$lang['This_posts_IP'] = '�����Ţ IP �ͧ���ͺ';
$lang['Other_IP_this_user'] = '�����Ţ IP ����ͧ���ͺ';
$lang['Users_this_IP'] = '�ͺ�ҡ�����Ţ IP';
$lang['IP_info'] = '�����Ţͧ�����Ţ IP';
$lang['Lookup_IP'] = '����������´�ͧ�����Ţ IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = '��Ѻ���� %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 �������';
$lang['-11'] = 'GMT - 11 �������';
$lang['-10'] = 'GMT - 10 �������';
$lang['-9'] = 'GMT - 9 �������';
$lang['-8'] = 'GMT - 8 �������';
$lang['-7'] = 'GMT - 7 �������';
$lang['-6'] = 'GMT - 6 �������';
$lang['-5'] = 'GMT - 5 �������';
$lang['-4'] = 'GMT - 4 �������';
$lang['-3.5'] = 'GMT - 3.5 �������';
$lang['-3'] = 'GMT - 3 �������';
$lang['-2'] = 'GMT - 2 �������';
$lang['-1'] = 'GMT - 1 �������';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 �������';
$lang['2'] = 'GMT + 2 �������';
$lang['3'] = 'GMT + 3 �������';
$lang['3.5'] = 'GMT + 3.5 �������';
$lang['4'] = 'GMT + 4 �������';
$lang['4.5'] = 'GMT + 4.5 �������';
$lang['5'] = 'GMT + 5 �������';
$lang['5.5'] = 'GMT + 5.5 �������';
$lang['6'] = 'GMT + 6 �������';
$lang['6.5'] = 'GMT + 6.5 �������';
$lang['7'] = 'GMT + 7 �������';
$lang['8'] = 'GMT + 8 �������';
$lang['9'] = 'GMT + 9 �������';
$lang['9.5'] = 'GMT + 9.5 �������';
$lang['10'] = 'GMT + 10 �������';
$lang['11'] = 'GMT + 11 �������';
$lang['12'] = 'GMT + 12 �������';
$lang['13'] = 'GMT + 13 �������';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ������� (Eniwetok, Kwajalein)';
$lang['tz']['-11'] = 'GMT - 11 ������� (Midway Island, Samoa)';
$lang['tz']['-10'] = 'GMT - 10 ������� (Hawaii)';
$lang['tz']['-9'] = 'GMT - 9 ������� (Alaska)';
$lang['tz']['-8'] = 'GMT - 8 ������� (Pacific Time (US & Canada); Tijuana)';
$lang['tz']['-7'] = 'GMT - 7 ������� (Arizona)';
$lang['tz']['-6'] = 'GMT - 6 ������� (Central America, Mexico City, Saskatchewan)';
$lang['tz']['-5'] = 'GMT - 5 ������� (Bogota, Lima, Quito, Idiana (East))';
$lang['tz']['-4'] = 'GMT - 4 ������� (Atlantic Time (Canada), Caracas, La Paz, Santiago)';
$lang['tz']['-3.5'] = 'GMT - 3.5 ������� (Newfoundland)';
$lang['tz']['-3'] = 'GMT - 3 ������� (Brasilia, Beunos Aires, Georgetown, Greenland)';
$lang['tz']['-2'] = 'GMT - 2 ������� (Mid-Atlantic)';
$lang['tz']['-1'] = 'GMT - 1 ������� (Azores, Cape Verde Is.)';
$lang['tz']['0'] = 'GMT (Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London, Casablanca, Monrovia)';
$lang['tz']['1'] = 'GMT + 1 ������� (Amsterdam, Berlin, Rome, Stockholm, Vienna, Budapest, Madris, Paris)';
$lang['tz']['2'] = 'GMT + 2 ������� (Athens, Istanbul, Minsk, Bucharest, Cairo, Jerusalem)';
$lang['tz']['3'] = 'GMT + 3 ������� (Baghdad, Kuwait, Moscow)';
$lang['tz']['3.5'] = 'GMT + 3.5 ������� (Tehran)';
$lang['tz']['4'] = 'GMT + 4 ������� (Abu Dhabi, Muscat)';
$lang['tz']['4.5'] = 'GMT + 4.5 ������� (Kabul)';
$lang['tz']['5'] = 'GMT + 5 ������� (Islamabad, Karachi)';
$lang['tz']['5.5'] = 'GMT + 5.5 ������� (New Delhi)';
$lang['tz']['6'] = 'GMT + 6 ������� (Dhaka)';
$lang['tz']['6.5'] = 'GMT + 6.5 ������� (Rangoon)';
$lang['tz']['7'] = 'GMT + 7 ������� (Bangkok, Hanoi, Jakarta)';
$lang['tz']['8'] = 'GMT + 8 ������� (Hong Kong, Kuala Lumpur, Singapore, Taipei)';
$lang['tz']['9'] = 'GMT + 9 ������� (Osaka, Sapporo, Tokyo)';
$lang['tz']['9.5'] = 'GMT + 9.5 ������� (Adelaide, Darwin)';
$lang['tz']['10'] = 'GMT + 10 ������� (Melbourne, Sydney)';
$lang['tz']['11'] = 'GMT + 11 ������� (Magadan, Solomon Is., New Caledonia)';
$lang['tz']['12'] = 'GMT + 12 ������� (Auckland, Wellington, Fiji)';
$lang['tz']['13'] = 'GMT + 13 �������';

$lang['datetime']['Sunday'] = 'Sunday';
$lang['datetime']['Monday'] = 'Monday';
$lang['datetime']['Tuesday'] = 'Tuesday';
$lang['datetime']['Wednesday'] = 'Wednesday';
$lang['datetime']['Thursday'] = 'Thursday';
$lang['datetime']['Friday'] = 'Friday';
$lang['datetime']['Saturday'] = 'Saturday';
$lang['datetime']['Sun'] = 'Sun';
$lang['datetime']['Mon'] = 'Mon';
$lang['datetime']['Tue'] = 'Tue';
$lang['datetime']['Wed'] = 'Wed';
$lang['datetime']['Thu'] = 'Thu';
$lang['datetime']['Fri'] = 'Fri';
$lang['datetime']['Sat'] = 'Sat';
$lang['datetime']['January'] = 'January';
$lang['datetime']['February'] = 'February';
$lang['datetime']['March'] = 'March';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'May';
$lang['datetime']['June'] = 'June';
$lang['datetime']['July'] = 'July';
$lang['datetime']['August'] = 'August';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'October';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Oct';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = '��������´';
$lang['Critical_Information'] = '��������¢ͧ�����Դ��Ҵ';

$lang['General_Error'] = '�����Դ��Ҵ�����';
$lang['Critical_Error'] = '�����Դ��Ҵ�����ç';
$lang['An_error_occured'] = '�Դ�����Դ��Ҵ';
$lang['A_critical_error'] = '�Դ�����Դ��Ҵ�����ç';

//
// That's all, Folks!
// -------------------------------------------------

// Start add - Online/Offline/Hidden Mod
$lang['Online'] = 'Online';
$lang['Offline'] = 'Offline';
$lang['Hidden'] = '��͹';
$lang['is_online'] = '%s ���ѧ online ����';
$lang['is_offline'] = '%s ���ѧ offline ����';
$lang['is_hidden'] = '%s ���ѧ��͹����';
$lang['Online_status'] = 'ʶҹ�';
// End add - Online/Offline/Hidden Mod

// Start add - Validate email MOD
$lang['Client_not_verifyed']='The supplied client email address could NOT be verified, ��ԡ %s ������ҹ�������������';//%s are substituded with a link to the FAQ page
$lang['No_connect_server'] ="Could not connect to the email server, ��ԡ %s ������ҹ�������������";//%s are substituded with a link to the FAQ page
// End add - Validate email MOD

// Start add - Last visit MOD
$lang['Last_logon'] = '�ӧҹ����ش'; 
$lang['Hidde_last_logon'] = '�١��͹'; 
$lang['Never_last_logon'] = '�����'; 
$lang['Users_today_zero_total'] = '�ѹ����ռ��������ҷ����� <b>0</b> �� :: ';
$lang['Users_today_total'] = '�ѹ����ռ��������ҷ����� <b>%d</b> �� :: ';
$lang['User_today_total'] = '�ѹ����ռ��������ҷ����� <b>%d</b> �� :: ';
$lang['Users_lasthour_explain'] = ', %d ��� 1 �����������ҹ��'; 
$lang['Users_lasthour_none_explain'] = ''; //showen of none have visited the last hour, fill if you like

$lang['Years'] = '��';
$lang['Year'] = '��';
$lang['Weeks'] = '�ѻ����';
$lang['Week'] = '�ѻ����';
$lang['Day'] = '�ѹ';
$lang['Total_online_time'] = '����������� Online'; 
$lang['Last_online_time'] = '�������� Online ����ش'; 
$lang['Number_of_visit'] = '�ӹǹ�����Ҫ�'; 
$lang['Number_of_pages'] = '˹�ҷ���Դ��ҹ'; 
// End add - Last visit MOD

// Start add - Birthday MOD
$lang['Birthday'] = '�ѹ�Դ(�� �.�.)';
$lang['No_birthday_specify'] = '(����к�)';
$lang['Age'] = '����';
$lang['Wrong_birthday_format'] = '�س�к��ٻẺ�ѹ�Դ���١��ͧ';
$lang['Birthday_to_high'] = '������ ���촹�����͹حҵ������������ҡ���� %d ��';
$lang['Birthday_require'] = '�س��ͧ�к��ѹ�Դ����';
$lang['Birthday_to_low'] = '������ ���촹�����͹حҵ����������ع��¡��� %d ��';
$lang['Submit_date_format'] = 'd-m-Y'; // php date() format - Note: ONLY d, m and Y may be used and SHALL ALL be used (different seperators are accepted)
$lang['Birthday_greeting_today'] = '�آ�ѹ���ѹ�Դ�ú�ͺ���� %s �դ�Ѻ.<br /><br /> �ҡ����ҹ����'; // %s is substituted with the users age
$lang['Birthday_greeting_prev'] = '�آ�ѹ���ѹ�Դ��͹��ѧ�ú�ͺ���� %s �� ��ѹ��� %s ��Ѻ.<br /><br /> �ҡ����ҹ����'; // %s is substituted with the users age, and birthday
$lang['Greeting_Messaging'] ='���ʴ������Թ��';
$lang['Birthday_today'] = '��������Դ�ѹ���:';
$lang['Birthday_week'] = '��������Դ㹪�ǧ %d �ѹ �Ѻ�ҡ�ѹ���:';
$lang['Nobirthday_week'] = '����ռ�������Դ㹪�ǧ %d �ѹ �Ѻ�ҡ�ѹ���'; // %d is substitude with the number of days
$lang['Nobirthday_today'] = '����ռ�������Դ�ѹ���';
$lang['Year'] = '��';
$lang['Month'] = '��͹';
$lang['Day'] = '�ѹ';

// NOTE: Please do not translate the folowing 4 lines !
// They are automatically translated into your language
$lang['day_short'] = array ($lang['datetime']['Sun'],$lang['datetime']['Mon'],$lang['datetime']['Tue'],$lang['datetime']['Wed'],$lang['datetime']['Thu'],$lang['datetime']['Fri'],$lang['datetime']['Sat']);
$lang['day_long'] = array ($lang['datetime']['Sunday'],$lang['datetime']['Monday'],$lang['datetime']['Tuesday'],$lang['datetime']['Wednesday'],$lang['datetime']['Thursday'],$lang['datetime']['Friday'],$lang['datetime']['Saturday']);
$lang['month_short'] = array ($lang['datetime']['Jan'],$lang['datetime']['Feb'],$lang['datetime']['Mar'],$lang['datetime']['Apr'],$lang['datetime']['May'],$lang['datetime']['Jun'],$lang['datetime']['Jul'],$lang['datetime']['Aug'],$lang['datetime']['Sep'],$lang['datetime']['Oct'],$lang['datetime']['Nov'],$lang['datetime']['Dec']);
$lang['month_long'] = array ($lang['datetime']['January'],$lang['datetime']['February'],$lang['datetime']['March'],$lang['datetime']['April'],$lang['datetime']['May'],$lang['datetime']['June'],$lang['datetime']['July'],$lang['datetime']['August'],$lang['datetime']['September'],$lang['datetime']['October'],$lang['datetime']['November'],$lang['datetime']['December']);
// zodiacs used for birthday mod
$lang['Zodiac'] = '����';
$lang['Capricorn'] = 'Capricorn'; 
$lang['Aquarius'] = 'Aquarius'; 
$lang['Pisces'] = 'Pisces'; 
$lang['Aries'] = 'Aries'; 
$lang['Taurus'] = 'Taurus'; 
$lang['Gemini'] = 'Gemini'; 
$lang['Cancer'] = 'Cancer'; 
$lang['Leo'] = 'Leo'; 
$lang['Virgo'] = 'Virgo'; 
$lang['Libra'] = 'Libra'; 
$lang['Scorpio'] = 'Scorpio'; 
$lang['Sagittarius'] = 'Sagittarius';
// End add - Birthday MOD

// PJIRC MOD
$lang['Chat_Room'] = '��᪷ͧ';
$lang['IRC_commands'] = '����� IRC Chat';
$lang['IRC_commands_explain'] = '���������ҹ��зӧҹ����ͤس�������ԡ�����᪷ͧ. �¡���Ф���觴������-��͹. <br />������ҧ:<br /> /msg nickserv identify password;<br />/beep';
$lang['IRC_disabled'] = '<b>��᪷ͧ�ͧ��ҡ��ѧ�Դ����.</b> ��س������������ѧ.';

?>