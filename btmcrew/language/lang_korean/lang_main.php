<?php
/***************************************************************************
 *                            lang_main.php [Korean]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
	2002-08-28	TankTonk
		FIrst Translation
	2002-12-17	Soon-Son Kwon(kss@kldp.org)
		Update
	2005-02-26	Seok-moon Jang(drssay@gmail.com)
		Update to 2.0.12
*/

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'euc-kr';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'Y�� n�� j��'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'Translated by kss & drssay';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = '�Խ���';
$lang['Category'] = '�з�';
$lang['Topic'] = '����';
$lang['Topics'] = '����';
$lang['Replies'] = '�亯';
$lang['Views'] = '��ȸ';
$lang['Post'] = '�ø���';
$lang['Posts'] = '�ø� ��';
$lang['Posted'] = '�÷���';
$lang['Username'] = '����� �̸�(id)';
$lang['Password'] = '��й�ȣ';
$lang['Email'] = '�̸���';
$lang['Poster'] = '�ø����';
$lang['Author'] = '�۾���';
$lang['Time'] = '�ð�';
$lang['Hours'] = '�ð�';
$lang['Message'] = '�޽���';

$lang['1_Day'] = '1��';
$lang['7_Days'] = '7��';
$lang['2_Weeks'] = '2��';
$lang['1_Month'] = '1��';
$lang['3_Months'] = '3��';
$lang['6_Months'] = '6��';
$lang['1_Year'] = '1��';

$lang['Go'] = '����';
$lang['Jump_to'] = '�ǳʶٱ�';
$lang['Submit'] = '����';
$lang['Reset'] = '����';
$lang['Cancel'] = '���';
$lang['Preview'] = '�̸�����';
$lang['Confirm'] = 'Ȯ��';
$lang['Spellcheck'] = '����üũ';
$lang['Yes'] = '��';
$lang['No'] = '�ƴϿ�';
$lang['Enabled'] = '��밡��';
$lang['Disabled'] = '�������';
$lang['Error'] = '����';

$lang['Next'] = '����';
$lang['Previous'] = '����';
$lang['Goto_page'] = '��������';
$lang['Joined'] = '����';
$lang['IP_Address'] = 'IP �ּ�';

$lang['Select_forum'] = '�Խ��� ����';
$lang['View_latest_post'] = '�ֱ� �� ����';
$lang['View_newest_post'] = '�� �� ����';
$lang['Page_of'] = '������ <b>%d</b> �� <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ ��ȣ';
$lang['AIM'] = 'AIM �ּ�';
$lang['MSNM'] = 'MSN �޽���';
$lang['YIM'] = 'Yahoo �޽���';

$lang['Forum_Index'] = '%s �Խ��� �ε���';   // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '�� ����';
$lang['Reply_to_topic'] = '�亯 �ޱ�';
$lang['Reply_with_quote'] = '�ο�� �Բ� �亯';

$lang['Click_return_topic'] = '������ ���ư����� %s����%s�� Ŭ���Ͻʽÿ�'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '�ٽ� �õ��Ͻ÷��� %s����%s�� Ŭ���Ͻʽÿ�';
$lang['Click_return_forum'] = '�Խ������� ���ư����� %s����%s�� Ŭ���Ͻʽÿ�';
$lang['Click_view_message'] = '������ �޽����� ������ %s����%s�� Ŭ���Ͻʽÿ�';
$lang['Click_return_modcp'] = '������ ���������� ���ư����� %s����%s�� Ŭ���Ͻʽÿ�';
$lang['Click_return_group'] = '�׷� ������ ���ư����� %s����%s�� Ŭ���Ͻʽÿ�';

$lang['Admin_panel'] = '��� ���������� ��';

$lang['Board_disable'] = '�˼��մϴٸ� ������ �Խ����� ����Ͻ� �� �����ϴ�. ���߿� �ٽ� �õ��� ���ʽÿ�.';


//
// Global Header strings
//
$lang['Registered_users'] = '��� �����:';
$lang['Browsing_forum'] = '�� �Խ����� ����ϰ� �ִ� �����:';
$lang['Online_users_zero_total'] = '�� <b>0</b>���� ����ڰ� ������ :: ';
$lang['Online_users_total'] = '�� <b>%d</b>���� ������ :: ';
$lang['Online_user_total'] = '�� <b>%d</b>���� ������ :: ';
$lang['Reg_users_zero_total'] = '��� ����� 0��, ';
$lang['Reg_users_total'] = '��� ����� %d��, ';
$lang['Reg_user_total'] = '��� ����� %d��, ';
$lang['Hidden_users_zero_total'] = '��� 0�� ��';
$lang['Hidden_user_total'] = '��� %d�� �� ';
$lang['Hidden_users_total'] = '��� %d�� �� ';
$lang['Guest_users_zero_total'] = '�մ� 0��';
$lang['Guest_users_total'] = '�մ� %d��';
$lang['Guest_user_total'] = '�մ� %d��';
$lang['Record_online_users'] = '���� ����� �ִٱ��: <b>%s</b>��(%s)'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%s���%s';
$lang['Mod_online_color'] = '%s������%s';

$lang['You_last_visit'] = '������ �湮�� %s'; // %s replaced by date/time
$lang['Current_time'] = '���� �ð��� %s'; // %s replaced by time

$lang['Search_new'] = '���� �ö�� �� ����';
$lang['Search_your_posts'] = '���� �ø� �� ã��';
$lang['Search_unanswered'] = '�亯�� ���� �� ã��';

$lang['Register'] = '����� ����ϱ�';
$lang['Profile'] = '���� ����';
$lang['Edit_profile'] = '���� ���� ����';
$lang['Search'] = '�˻�';
$lang['Memberlist'] = '�������Ʈ';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'BBCode ����';
$lang['Usergroups'] = '����� �׷�';
$lang['Last_Post'] = '������ ��';
$lang['Moderator'] = '������';
$lang['Moderators'] = '������';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '����ڰ� �ø� ���� <b>0</b>�� �Դϴ�'; // Number of posts
$lang['Posted_articles_total'] = '����ڰ� �ø� ���� �� <b>%d</b>�� �Դϴ�'; // Number of posts
$lang['Posted_article_total'] = '����ڰ� �ø� ���� �� <b>%d</b>�� �Դϴ�'; // Number of posts
$lang['Registered_users_zero_total'] = '��ϵ� ����ڴ� <b>0</b>�� �Դϴ�'; // # registered users
$lang['Registered_users_total'] = '��ϵ� ����ڴ� <b>%d</b>�� �Դϴ�'; // # registered users
$lang['Registered_user_total'] = '��ϵ� ����ڴ� <b>%d</b>�� �Դϴ�'; // # registered users
$lang['Newest_user'] = '�ֱٿ� ����� ����ڴ� <b>%s%s%s</b> �Դϴ�'; // a href, username, /a

$lang['No_new_posts_last_visit'] = '������ �湮 ���ķ� ���� �ö�� ���� �����ϴ�';
$lang['No_new_posts'] = '���ο� �� ����';
$lang['New_posts'] = '���ο� ��';
$lang['New_post'] = '���ο� ��';
$lang['No_new_posts_hot'] = '���ο� �� ���� [ �α� ]';
$lang['New_posts_hot'] = '���ο� �� [ �α� ]';
$lang['No_new_posts_locked'] = '���ο� �� ���� [ ��� ]';
$lang['New_posts_locked'] = '���ο� �� [ ��� ]';
$lang['Forum_is_locked'] = '��� �ִ� �Խ����Դϴ�.';

//
// Login
//
$lang['Enter_password'] = '�α����Ϸ��� ����� �̸��� ��й�ȣ�� �Է��ϼ���';
$lang['Login'] = '�α���';
$lang['Logout'] = '�α׾ƿ�';

$lang['Forgotten_password'] = '��й�ȣ�� �ؾ����';

$lang['Log_me_in'] = '�ڵ� �α���';

$lang['Error_login'] = '����� �̸��� Ʋ�Ȱų� ��й�ȣ�� Ʋ�Ƚ��ϴ�';


//
// Index page
//
$lang['Index'] = '�ε���';
$lang['No_Posts'] = '�� ����';
$lang['No_forums'] = '�� �Խ��ǿ��� �Խ����� �����ϴ�';

$lang['Private_Message'] = '����� �޽���';
$lang['Private_Messages'] = '����� �޽���';
$lang['Who_is_Online'] = '�¶��� �����';

$lang['Mark_all_forums'] = '��� �Խ����� ���� ���·� ǥ��';
$lang['Forums_marked_read'] = '��� �Խ����� ���� ���·� ǥ���߽��ϴ�';


//
// Viewforum
//
$lang['View_forum'] = '�Խ��� ����';

$lang['Forum_not_exist'] = '������ �Խ����� �������� �ʽ��ϴ�';
$lang['Reached_on_error'] = '������ �� �������� ���̽��ϴ�';

$lang['Display_topics'] = '���� ���� ǥ��';
$lang['All_Topics'] = '��� ����';

$lang['Topic_Announcement'] = '<b>��������:</b>';
$lang['Topic_Sticky'] = '<b>������:</b>';
$lang['Topic_Moved'] = '<b>�̵��Ǿ���:</b>';
$lang['Topic_Poll'] = '<b>[ ��ǥ ]</b>';

$lang['Mark_all_topics'] = '��� ���� ���� ���·� ǥ��';
$lang['Topics_marked_read'] = '�� �Խ����� ������ ���� ���·� ǥ�õǾ����ϴ�';

$lang['Rules_post_can'] = '���ο� ������ �ø� �� <b>�ֽ��ϴ�</b>';
$lang['Rules_post_cannot'] = '���ο� ������ �ø� �� <b>�����ϴ�</b>';
$lang['Rules_reply_can'] = '����� �ø� �� <b>�ֽ��ϴ�</b>';
$lang['Rules_reply_cannot'] = '����� �ø� �� <b>�����ϴ�</b>';
$lang['Rules_edit_can'] = '������ ������ �� <b>�ֽ��ϴ�</b>';
$lang['Rules_edit_cannot'] = '������ ������ �� <b>�����ϴ�</b>';
$lang['Rules_delete_can'] = '�ø� ���� ������ �� <b>�ֽ��ϴ�</b>';
$lang['Rules_delete_cannot'] = '�ø� ���� ������ �� <b>�����ϴ�</b>';
$lang['Rules_vote_can'] = '��ǥ�� �� �� <b>�ֽ��ϴ�</b>';
$lang['Rules_vote_cannot'] = '��ǥ�� �� �� <b>�����ϴ�</b>';
$lang['Rules_moderate'] = '%s�� �Խ����� ������ ��%s <b>�ֽ��ϴ�</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = '�� �Խ��ǿ��� �÷��� ���� �����ϴ�<br /><b>�� ����</b> ��ũ�� Ŭ���Ͽ� ���� �ø��ʽÿ�';

//
// Viewtopic
//
$lang['View_topic'] = '���� ����';

$lang['Guest'] = '�մ�';
$lang['Post_subject'] = '����';
$lang['View_next_topic'] = '���� ���� ����';
$lang['View_previous_topic'] = '���� ���� ����';
$lang['Submit_vote'] = '��ǥ �ϱ�';
$lang['View_results'] = '��� ����';

$lang['No_newer_topics'] = '�� �Խ��ǿ��� �� ���ο� ������ �����ϴ�';
$lang['No_older_topics'] = '�� �Խ��ǿ��� �� ������ ������ �����ϴ�';
$lang['Topic_post_not_exist'] = '��û�� ������ ���� �������� �ʽ��ϴ�';
$lang['No_posts_topic'] = '�� ���ȿ� ���� ���� �������� �ʽ��ϴ�';

$lang['Display_posts'] = '���� �� ǥ��';
$lang['All_Posts'] = '��� ��';
$lang['Newest_First'] = '���ο� �� ����';
$lang['Oldest_First'] = '������ �� ����';

$lang['Back_to_top'] = '����';

$lang['Read_profile'] = '����� ���� ����';
$lang['Send_email'] = '����ڿ��� �̸��� ������';
$lang['Visit_website'] = '�� �ø����� ������Ʈ �湮';
$lang['ICQ_status'] = 'ICQ ����';
$lang['Edit_delete_post'] = '�� ����/����';
$lang['View_IP'] = '�� �ø����� IP �ּ� ����';
$lang['Delete_post'] = '�� ����';

$lang['wrote'] = '��'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = '�ο�'; // comes before bbcode quote output.
$lang['Code'] = '�ڵ�'; // comes before bbcode code output.

$lang['Edited_time_total'] = '%s �� %s�� ������, �� %d �� ������'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = '%s �� %s�� ������, �� %d �� ������'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = '�� ������ ���';
$lang['Unlock_topic'] = '�� ������ ����� ����';
$lang['Move_topic'] = '�� ������ �̵���';
$lang['Delete_topic'] = '�� ������ ������';
$lang['Split_topic'] = '�� ������ �и���';

$lang['Stop_watching_topic'] = '�� ������ ���ø� ������';
$lang['Start_watching_topic'] = '�� ������ ���� ����� ������';
$lang['No_longer_watching'] = '�� ������ �� �̻� �������� �ʽ��ϴ�';
$lang['You_are_watching'] = '�� ������ �����ϰ� �ֽ��ϴ�';

$lang['Total_votes'] = '�� ��ǥ��';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '�޽��� ����';
$lang['Topic_review'] = '���� ����';

$lang['No_post_mode'] = '��尡 �������� �ʾҽ��ϴ�'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = '���ο� ���� �ø���';
$lang['Post_a_reply'] = '��� �ø���';
$lang['Post_topic_as'] = '���� �ø���';
$lang['Edit_Post'] = '�� ����';
$lang['Options'] = '�ɼ�';

$lang['Post_Announcement'] = '���� ����';
$lang['Post_Sticky'] = '������';
$lang['Post_Normal'] = '�Ϲ�';

$lang['Confirm_delete'] = '�� ���� �����Ͻðڽ��ϱ�?';
$lang['Confirm_delete_poll'] = '�� ��ǥ�� �����Ͻðڽ��ϱ�?';

$lang['Flood_Error'] = '�� �ٸ� ���� �ݹ� �ø� ���� �����Ƿ� ����Ŀ� ��õ� �Ͻʽÿ�';
$lang['Empty_subject'] = '���ο� ������ �ø����� ������ �����ؾ� �մϴ�';
$lang['Empty_message'] = '���� �ø����� ������ �Է��Ͻʽÿ�';
$lang['Forum_locked'] = '�� �Խ����� ������Ƿ� ���� �ø��ų�, �亯�� �ϰų� ������ �� �� �����ϴ�';
$lang['Topic_locked'] = '�� ������ ������Ƿ� �亯�� �ϰų� ������ �� �� �����ϴ�';
$lang['No_post_id'] = '�����Ϸ��� ���� ���� �����ؾ� �մϴ�';
$lang['No_topic_id'] = '�亯�Ϸ��� ������ ���� �����ؾ� �մϴ�';
$lang['No_valid_mode'] = '�� �ø���, ���� Ȥ�� �޽��� �ο븸 �� �� �����ϴ�, �ǵ��ư��� ��õ� �Ͻʽÿ�';
$lang['No_such_post'] = '�׷� ���� �����ϴ�, �ǵ��ư��� ��õ� �Ͻʽÿ�';
$lang['Edit_own_posts'] = '���� �ڽ��� �۸��� ������ �� �ֽ��ϴ�';
$lang['Delete_own_posts'] = '���� �ڽ��� �۸��� ������ �� �ֽ��ϴ�';
$lang['Cannot_delete_replied'] = '����� �ִ� �Խù��� ������ �� �����ϴ�';
$lang['Cannot_delete_poll'] = '���� �������� ��ǥ�� ������ �� �����ϴ�';
$lang['Empty_poll_title'] = '��ǥ�� ���� ������ �Է��ؾ� �մϴ�';
$lang['To_few_poll_options'] = '�ּ��� �ΰ��� ��ǥ �ɼ��� �Է��ؾ� �մϴ�';
$lang['To_many_poll_options'] = '�ɼ��� �ʹ� ���� �����Ͽ����ϴ�';
$lang['Post_has_no_poll'] = '�� �ۿ��� ��ǥ�� �����ϴ�';
$lang['Already_voted'] = '�̹� ��ǥ�ϼ̽��ϴ�';
$lang['No_vote_option'] = '��ǥ�� �� �ɼ��� �����ؾ� �մϴ�';

$lang['Add_poll'] = '��ǥ �ֱ�';
$lang['Add_poll_explain'] = '��ǥ �ֱ⸦ ������ ������ ��ĭ���� ����νʽÿ�';
$lang['Poll_question'] = '��ǥ ����';
$lang['Poll_option'] = '��ǥ �ɼ�';
$lang['Add_option'] = '�ɼ� �߰�';
$lang['Update'] = '����';
$lang['Delete'] = '����';
$lang['Poll_for'] = '��ǥ ����';
$lang['Days'] = '��'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ ������ ��ǥ�� ���ϸ� 0 Ȥ�� ��ĭ���� �Ͻʽÿ� ]';
$lang['Delete_poll'] = '��ǥ ����';

$lang['Disable_HTML_post'] = 'HTML ��� �Ұ�';
$lang['Disable_BBCode_post'] = 'BBCode ��� �Ұ�';
$lang['Disable_Smilies_post'] = '������ ��� �Ұ�';

$lang['HTML_is_ON'] = 'HTML <u>���</u>';
$lang['HTML_is_OFF'] = 'HTML <u>��� ����</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>���</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>��� ����</u>';
$lang['Smilies_are_ON'] = '������ <u>���</u>';
$lang['Smilies_are_OFF'] = '������ <u>��� ����</u>';

$lang['Attach_signature'] = '���� ���̱� (������ ���� �������� ����)';
$lang['Notify'] = '����� �ö���� �뺸��';
$lang['Delete_post'] = '�� ����';

$lang['Stored'] = '�޽����� ���������� �ԷµǾ����ϴ�';
$lang['Deleted'] = '�޽����� ���������� �����Ǿ����ϴ�';
$lang['Poll_delete'] = '��ǥ�� ���������� �����Ǿ����ϴ�';
$lang['Vote_cast'] = '��ǥ�� �ϼ̽��ϴ�';

$lang['Topic_reply_notification'] = '��� �뺸';

$lang['bbcode_b_help'] = '���� ����: [b]����[/b]  (alt+b)';
$lang['bbcode_i_help'] = '���Ÿ� ����: [i]����[/i]  (alt+i)';
$lang['bbcode_u_help'] = '���� ����: [u]����[/u]  (alt+u)';
$lang['bbcode_q_help'] = '�ο� ����: [quote]����[/quote]  (alt+q)';
$lang['bbcode_c_help'] = '�ڵ� ǥ��: [code]�ڵ�[/code]  (alt+c)';
$lang['bbcode_l_help'] = '����Ʈ: [list]����[/list] (alt+l)';
$lang['bbcode_o_help'] = '���� ����Ʈ: [list=]����[/list]  (alt+o)';
$lang['bbcode_p_help'] = '�̹��� �ֱ�: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL �ֱ�: [url]http://url[/url] �Ǵ� [url=http://url]URL ����[/url]  (alt+w)';
$lang['bbcode_a_help'] = '��� ���� BBCode �±� �ݱ�';
$lang['bbcode_s_help'] = '�۲û�: [color=red]����[/color]  ��: ����� color=#FF0000';
$lang['bbcode_f_help'] = '�۲�ũ��: [size=x-small]���� ����[/size]';

$lang['Emoticons'] = '�̸�Ƽ��';
$lang['More_emoticons'] = '�̸�Ƽ�� ����';

$lang['Font_color'] = '�۲û�';
$lang['color_default'] = '�ʱⰪ';
$lang['color_dark_red'] = '��ο� ����';
$lang['color_red'] = '����';
$lang['color_orange'] = '��������';
$lang['color_brown'] = '����';
$lang['color_yellow'] = '�����';
$lang['color_green'] = '���';
$lang['color_olive'] = '�ø����';
$lang['color_cyan'] = '�ϴû�';
$lang['color_blue'] = 'û��';
$lang['color_dark_blue'] = '��ο� û��';
$lang['color_indigo'] = '����';
$lang['color_violet'] = '���ֻ�';
$lang['color_white'] = '���';
$lang['color_black'] = '���';

$lang['Font_size'] = '�۲� ũ��';
$lang['font_tiny'] = '�����۰�';
$lang['font_small'] = '�۰�';
$lang['font_normal'] = '����';
$lang['font_large'] = 'ũ��';
$lang['font_huge'] = '����ũ��';

$lang['Close_Tags'] = '�±� �ݱ�';
$lang['Styles_tip'] = '��: ��Ÿ���� ���õ� ���ڿ� ��� ������ �����մϴ�';


//
// Private Messaging
//
$lang['Private_Messaging'] = '����� �޽���';

$lang['Login_check_pm'] = '����� �޽����� Ȯ���Ϸ��� �α����Ͻʽÿ�';
$lang['New_pms'] = '%d ���� ���ο� �޽����� �ֽ��ϴ�'; // You have 2 new messages
$lang['New_pm'] = '%d ���� ���ο� �޽����� �ֽ��ϴ�'; // You have 1 new message
$lang['No_new_pm'] = '���ο� �޽����� �����ϴ�';
$lang['Unread_pms'] = '%d ���� ���� ���� �޽����� �ֽ��ϴ�';
$lang['Unread_pm'] = '%d ���� ���� ���� �޽����� �ֽ��ϴ�';
$lang['No_unread_pm'] = '���� ���� �޽����� �����ϴ�';
$lang['You_new_pm'] = '���ο� ����� �޽����� �ֽ��ϴ�';
$lang['You_new_pms'] = '���ο� ����� �޽����� �ֽ��ϴ�';
$lang['You_no_new_pm'] = '���ο� ����� �޽����� �����ϴ�';

$lang['Unread_message'] = '���� ���� �޽���';
$lang['Read_message'] = '���� �޽���';

$lang['Read_pm'] = '�޽��� �б�';
$lang['Post_new_pm'] = '�޽��� �ø���';
$lang['Post_reply_pm'] = '�޽����� �亯�ϱ�';
$lang['Post_quote_pm'] = '�޽��� �ο��ϱ�';
$lang['Edit_pm'] = '�޽��� ����';

$lang['Inbox'] = '���� ������';
$lang['Outbox'] = '���� ������';
$lang['Savebox'] = '���� ������';
$lang['Sentbox'] = '���� ������';
$lang['Flag'] = '�÷���';
$lang['Subject'] = '����';
$lang['From'] = 'From';
$lang['To'] = 'To';
$lang['Date'] = '��¥';
$lang['Mark'] = 'ǥ��';
$lang['Sent'] = '������';
$lang['Saved'] = '�����';
$lang['Delete_marked'] = 'ǥ�õ� �� ����';
$lang['Delete_all'] = '���� ����';
$lang['Save_marked'] = 'ǥ�õ� �� ����';
$lang['Save_message'] = '�޽��� ����';
$lang['Delete_message'] = '�޽��� ����';

$lang['Display_messages'] = '���� �޽��� ǥ��'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '��� �޽���';

$lang['No_messages_folder'] = '�� �������� �޽����� �����ϴ�';

$lang['PM_disabled'] = '�� �Խ��ǿ����� ����� �޽����� ����Ҽ� ������ �����Ǿ� �ֽ��ϴ�';
$lang['Cannot_send_privmsg'] = '��ڰ� ������ �޽��� ������ ����� ���� ���ҽ��ϴ�';
$lang['No_to_user'] = '�޽����� �������� ����� �̸��� �����Ͻʽÿ�';
$lang['No_such_user'] = '�������� �ʴ� ������Դϴ�';

$lang['Disable_HTML_pm'] = '�� �޽����� HTML ������� ����';
$lang['Disable_BBCode_pm'] = '�� �޽����� BBCode ������� ����';
$lang['Disable_Smilies_pm'] = '�� �޽����� ������ ������� ����';

$lang['Message_sent'] = '�޽����� ���������ϴ�';

$lang['Click_return_inbox'] = '���� ���������� ������ %s����%s�� Ŭ���ϼ���';
$lang['Click_return_index'] = '�ε����� ������ %s����%s�� Ŭ���ϼ���';

$lang['Send_a_new_message'] = '���ο� ����� �޽��� ������';
$lang['Send_a_reply'] = '����� �޽����� ���� ���';
$lang['Edit_message'] = '����� �޽��� ����';

$lang['Notification_subject'] = '���ο� ����� �޽����� �����߽��ϴ�';

$lang['Find_username'] = '����� �̸� ã��';
$lang['Find'] = 'ã��';
$lang['No_match'] = '��ġ�ϴ� ���� ����';

$lang['No_post_id'] = '�� ID �� �������� �ʾҽ�';
$lang['No_such_folder'] = '�������� �ʴ� ����';
$lang['No_folder'] = '������ �������� �ʾ���';

$lang['Mark_all'] = '��� ǥ��';
$lang['Unmark_all'] = '��� ǥ�� ����';

$lang['Confirm_delete_pm'] = '�� �޽����� �����ϰڽ��ϱ�?';
$lang['Confirm_delete_pms'] = '�� �޽����� �����ϰڽ��ϱ�?';

$lang['Inbox_size'] = '���� �������� %d%% á���ϴ�'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '���� �������� %d%% á���ϴ�';
$lang['Savebox_size'] = '���� �������� %d%% á���ϴ�';

$lang['Click_view_privmsg'] = '���� ���������� ������ %s����%s�� Ŭ���Ͻʽÿ�';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '���� ����:: %s'; // %s is username
$lang['About_user'] = '%s�� ��� ����'; // %s is username

$lang['Preferences'] = '����';
$lang['Items_required'] = ' * �� ǥ�õ� �κ��� �ʼ� �׸��Դϴ�';
$lang['Registration_info'] = '��� ����';
$lang['Profile_info'] = '���� ����';
$lang['Profile_info_warn'] = '������ ����';
$lang['Avatar_panel'] = '�ƹ�Ÿ ������';
$lang['Avatar_gallery'] = '�ƹ�Ÿ ����';

$lang['Website'] = 'Ȩ������';
$lang['Location'] = '��ġ';
$lang['Contact'] = '�����ϱ�:';
$lang['Email_address'] = '�̸��� �ּ�';
$lang['Email'] = '�̸���';
$lang['Send_private_message'] = '��� �޽��� ������';
$lang['Hidden_email'] = '[ ���� ]';
$lang['Search_user_posts'] = '�� ������� �� ã��';
$lang['Interests'] = '���ɻ�';
$lang['Occupation'] = '����';
$lang['Poster_rank'] = '���';

$lang['Total_posts'] = '�� �ۼ�';
$lang['User_post_pct_stats'] = '������ %.2f%%'; // 1.25% of total
$lang['User_post_day_stats'] = '�Ϸ�� %.2f ��'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s���� �ø� �� ��� ã��'; // Find all posts by username

$lang['No_user_id_specified'] = '�������� �ʴ� ������Դϴ�';
$lang['Wrong_Profile'] = 'Ÿ���� ���� ������ ������ �� �����ϴ�.';

$lang['Only_one_avatar'] = '���� �� ������ �ƹ�Ÿ���� ������ �� �ֽ��ϴ�';
$lang['File_no_data'] = '������ URL���� �ƹ��� �����͵� �����ϴ�';
$lang['No_connection_URL'] = '������ URL�� ������ �� �����ϴ�';
$lang['Incomplete_URL'] = 'URL�� ��ȿ���� �ʽ��ϴ�';
$lang['Wrong_remote_avatar_format'] = '���� �ƹ�Ÿ�� URL�� ��ȿ���� �ʽ��ϴ�';
$lang['No_send_account_inactive'] = '������ ���� �������̱� ������ ��й�ȣ�� ������ �����ϴ�. �ڼ��� ������ ��ڿ��� �����Ͻʽÿ�';

$lang['Always_smile'] = '�׻� ������ ���';
$lang['Always_html'] = '�׻� HTML ���';
$lang['Always_bbcode'] = '�׻� BBCode ���';
$lang['Always_add_sig'] = '�׻� ���� ÷��';
$lang['Always_notify'] = '�׻� ��۽� �뺸';
$lang['Always_notify_explain'] = '���� �ø� ������ ���� ����� ������ �̸��� ������. ���� �ø� �� ���� ������';

$lang['Board_style'] = '�Խ��� ����';
$lang['Board_lang'] = '�Խ��� ���';
$lang['No_themes'] = '�����ͺ��̽��� ���� ����';
$lang['Timezone'] = '�ð���';
$lang['Date_format'] = '��¥ ����';
$lang['Date_format_explain'] = '���� ������ PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>�� ������ ����Դϴ�';
$lang['Signature'] = '����';
$lang['Signature_explain'] = '�̰��� �ø��� �ۿ� ÷�ε� ���� �����Դϴ�. ������ %d �����Դϴ�';
$lang['Public_view_email'] = '�׻� �� �̸��� �ּ� ���̱�';

$lang['Current_password'] = '���� ��й�ȣ';
$lang['New_password'] = '�� ��й�ȣ';
$lang['Confirm_password'] = '��й�ȣ Ȯ��';
$lang['Confirm_password_explain'] = '��й�ȣ�� �̸��� �ּҸ� �ٲٷ��� ���� ��й�ȣ�� Ȯ���ؾ� �մϴ�';
$lang['password_if_changed'] = '�� ��й�ȣ�� �Է��ϼ���';
$lang['password_confirm_if_changed'] = '���� �� ��й�ȣ�� �ٽ� �Է��ϼ���';

$lang['Avatar'] = '�ƹ�Ÿ';
$lang['Avatar_explain'] = '�ڽ��� ǥ���ϴ� ���� �׷��� �̹����� �����ݴϴ�. �ѹ��� �ϳ��� �̹����� ���ǰ� �������� %d �ȼ�, ���ѳ��̴� %d �ȼ��̸� ���� ũ�� ������  %dkB �Դϴ�.';
$lang['Upload_Avatar_file'] = '�� ��ǻ�ͷκ��� �ƹ�Ÿ ���ε�';
$lang['Upload_Avatar_URL'] = 'URL�� �ƹ�Ÿ ���ε�';
$lang['Upload_Avatar_URL_explain'] = '�ƹ�Ÿ �̹����� �ִ� URL�� �Է��ϼ���, �� ����Ʈ�� ����˴ϴ�.';
$lang['Pick_local_Avatar'] = '�ƹ�Ÿ �������� �����ϱ�';
$lang['Link_remote_Avatar'] = '�ٸ� ����Ʈ�� �ƹ�Ÿ ��ũ';
$lang['Link_remote_Avatar_explain'] = '��ũ�Ϸ��� �ƹ�Ÿ �̹����� �ִ� URL�� �Է��ϼ���.';
$lang['Avatar_URL'] = '�ƹ�Ÿ �̹��� URL';
$lang['Select_from_gallery'] = '�ƹ�Ÿ �������� ����';
$lang['View_avatar_gallery'] = '���� ���̱�';

$lang['Select_avatar'] = '�ƹ�Ÿ ����';
$lang['Return_profile'] = '�ƹ�Ÿ ���';
$lang['Select_category'] = 'ī�װ� ����';

$lang['Delete_Image'] = '�̹��� ����';
$lang['Current_Image'] = '���� �̹���';

$lang['Notify_on_privmsg'] = '���ο� ��� �޽����� ���� �̸��Ϸ� �뺸�ϱ�';
$lang['Popup_on_privmsg'] = '���ο� ��� �޽����� ���� �˾�â ����';
$lang['Popup_on_privmsg_explain'] = '���ο� ��� �޽����� ������ ������ ����Ʈ ���ӽ� �˾�â�� ��ϴ�';
$lang['Hide_user'] = '���� ���� �����';

$lang['Profile_updated'] = '���� ������ ������Ʈ�Ǿ����ϴ�';
$lang['Profile_updated_inactive'] = '���� ������ ������Ʈ�Ǿ����ϴٸ� �߿��� �������� ������ �����Ǿ����ϴ�. �̸����� Ȯ���Ͽ� ������ �ٽ� ����� �մϴ�. ���� ����� ��ġ�� �ʿ��� ���̶�� ��ڰ� �ʿ��� ��ġ�� ���� ������ ��ٸ��ʽÿ�';

$lang['Password_mismatch'] = '�Է��� ��й�ȣ�� ��ġ���� �ʽ��ϴ�';
$lang['Current_password_mismatch'] = '�Է��� ���� ��й�ȣ�� �����ͺ��̽��� ����� �Ͱ� ��ġ���� �ʽ��ϴ�';
$lang['Password_long'] = '��й�ȣ�� 32�� �̳����� �մϴ�';
$lang['Too_many_registers'] = '�ʹ� ���� ��Ͻõ��� �Ͽ����ϴ�. ����Ŀ� �ٽ� �õ��Ͽ� �ֽʽÿ�.';
$lang['Username_taken'] = '�̹� ������� ����� �̸��Դϴ�';
$lang['Username_invalid'] = '����� �̸��� ���� �� ���� ���ڸ� �����̽��ϴ�';
$lang['Username_disallowed'] = '������ �ʴ� ����� �̸��Դϴ�';
$lang['Email_taken'] = '�̸��� �ּҰ� �̹� ��ϵ� ������� ���Դϴ�';
$lang['Email_banned'] = '������ �̸��� �ּ��Դϴ�';
$lang['Email_invalid'] = '��ȿ���� ���� �̸��� �ּ��Դϴ�';
$lang['Signature_too_long'] = '������ �ʹ� ��ϴ�';
$lang['Fields_empty'] = '�ʼ������� �����Ͽ��� �մϴ�';
$lang['Avatar_filetype'] = '�ƹ�Ÿ�� .jpg, .gif Ȥ�� .png ���� �մϴ�';
$lang['Avatar_filesize'] = '�ƹ�Ÿ �̹����� ���� ũ��� %d kB ���� �۾ƾ� �մϴ�'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = '�ƹ�Ÿ�� ũ��� ���� %d �ȼ�, ���� %d �ȼ����� �۾ƾ� �մϴ�';

$lang['Welcome_subject'] = '%s �Խ��ǿ� ���Ű��� ȯ���մϴ�'; // Welcome to my.com forums
$lang['New_account_subject'] = '���ο� ����� ����';
$lang['Account_activated_subject'] = '������ Ȱ��ȭ�Ǿ���';

$lang['Account_added'] = '����� �ּż� �����մϴ�, ������ ���� ����������Ƿ� ����� �̸��� ��й�ȣ�� �̿��Ͽ� �α����Ͻʽÿ�';
$lang['Account_inactive'] = '������ ����������ϴٸ�, ���� ������ �ؾ� �մϴ�, ����Ű�� ������ �̸��� �ּҷ� ���������Ƿ� �̸����� Ȯ���Ͽ� ������ �������Ͻʽÿ�.';
$lang['Account_inactive_admin'] = '������ ����������ϴٸ�, �����ڰ� ������ �����ؾ� ����Ͻ� �� �ֽ��ϴ�. �����ڿ��� �̸����� ���������� ������ ���εǸ� �뺸�� �� ���Դϴ�';
$lang['Account_active'] = '������ �����Ǿ����ϴ�. ����� �ּż� �����մϴ�';
$lang['Account_active_admin'] = '������ �����Ǿ����ϴ�';
$lang['Reactivate'] = '������ �������Ͻʽÿ�!';
$lang['Already_activated'] = '�̹� ���� ������ �ϼ̽��ϴ�';
$lang['COPPA'] = '������ ����������� ������ �ʿ�� �ϹǷ� �ڼ��� ������ �̸����� Ȯ���� �ֽʽÿ�.';

$lang['Registration'] = '��� ���� ����';
$lang['Reg_agreement'] = '�̰��� ������ ���İ� ������ ��ȯ�ϱ� ���� ���Դϴ�. �̰��� ������ �����Ͻ� �� ������ ���Խ� �ʿ�� �ϴ� �ʼ� ������ �̰����� ����Ͻ� ID�� ��й�ȣ, �׸��� �̸��� �ּ��̰�, �� �̿��� �������� ������ ���ÿ� ���� �������� �����ŵ� �̿뿡 �ƹ��� ������ ������ Ư�� �������� <strong>�̸��� �ּҴ� ����Ʈ �� �������� ���� ������� �ʽ��ϴ�</strong>. <p>��� ����ڿ��Դ� �뷫 ������ ���� ����� �⺻������ �ο��ǹǷ� ����Ʈ�� �ξ� ȿ�����̰� ���ϰ� �̿��Ͻ� �� �ֽ��ϴ�.</p> <li><strong>��� �뺸 ���</strong>: ������ �ø� �ۿ� ����� �ö�� ��� �ٷ� �̸����� ���� �뺸���� �� �ֽ��ϴ�.</li><li><strong>���ο� �� ǥ�� ���</strong>: ������ �湮 ���� ���� �ö�� �۸� ��� ���� �� �ֽ��ϴ�.</li><li><strong>���� �� �ƹ�Ÿ</strong>: ������� ������ �츱 �� �ִ� ���� ��ɰ� �ƹ�Ÿ�� ���� ������ �� �ֽ��ϴ�.</li><li>�� �ܿ��� ����ڰ� �޽��� ��ȯ �� ����Ʈ �̿뿡 ���� �������� ���׵��� ������ �� �ֽ��ϴ�.</li> <p>������ ����ϴ� ���̳� ����, �弳 �� ��Ÿ ����Ʈ ���ݿ� ���� �ʴ� �۵��� ���� �뺸���� ��� Ȥ�� �� �Խ��� �����ڿ� ���� ������ ���� �ֽ��ϴ�. �̴� �̰��� ���� ���� ȯ������ ����� ���� �ּ����� ����̹Ƿ� ���� ���Ǹ� ���Ѽ� �ҹ̽����� ���� ������ �ʵ��� �Բ� ���� �ֽñ⸦ ��Ź�帳�ϴ�.</p>';

$lang['Agree_under_13'] = '������ 13�� <b>�̸�</b>�̸� ��� ���ǿ� �����մϴ�';
$lang['Agree_over_13'] = '������ 13�� <b>�̻�</b>�̸� ��� ���ǿ� �����մϴ�';
$lang['Agree_not'] = '���ǿ� �������� �ʽ��ϴ�';

$lang['Wrong_activation'] = '����Ű�� ��ġ���� �ʽ��ϴ�';
$lang['Send_password'] = '�� ��й�ȣ �ޱ�';
$lang['Password_updated'] = '�� ��й�ȣ�� ����������ϴ� �̸����� Ȯ���Ͽ� ���������ʽÿ�';
$lang['No_email_match'] = '������ �̸��� �ּҰ� ��ġ���� �ʽ��ϴ�';
$lang['New_password_activation'] = '�� ��й�ȣ ����';
$lang['Password_activated'] = '������ �������Ǿ����ϴ�. �̸��Ϸ� ���� ��й�ȣ�� �α����Ͻʽÿ�';

$lang['Send_email_msg'] = '�̸��� �޽��� ������';
$lang['No_user_specified'] = '����ڰ� �������� �ʾҽ��ϴ�';
$lang['User_prevent_email'] = '�� ����ڴ� �̸��� ������ �ź��ϰ� �ֽ��ϴ�. ����� �޽��� �����⸦ �õ��Ͻʽÿ�';
$lang['User_not_exist'] = '�������� �ʴ� ����� �Դϴ�';
$lang['CC_email'] = '�̸����� �ڽſ��Ե� ������';
$lang['Email_message_desc'] = '�� �޽����� ���� ���ڷ� �������� HTML�̳� BBCode�� �������� �ʽ��ϴ�. ȸ�� �ּҴ� ������ �̸��� �ּҷ� �˴ϴ�.';
$lang['Flood_email_limit'] = '���� �� �ٸ� �̸����� ���� �� �����ϴ�. ���߿� �ٽ� �õ��� ������';
$lang['Recipient'] = '������';
$lang['Email_sent'] = '�̸����� ���������ϴ�';
$lang['Send_email'] = '�̸��� ������';
$lang['Empty_subject_email'] = '�̸����� ������ �����ϼ���';
$lang['Empty_message_email'] = '�̸����� ������ �Է��ϼ���';

//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = '�Է��� Ȯ���ڵ尡 �ùٸ��� �ʽ��ϴ�.The confirmation code you entered was incorrect';
$lang['Too_many_registers'] = '�� ���ǿ��� �õ��� ���Ƚ���� �ʰ��Ǿ����ϴ�. ����Ŀ� �ٽ� �õ��Ͽ� �ֽʽÿ�.';
$lang['Confirm_code_impaired'] = 'If you are visually impaired or cannot otherwise read this code %s������%s�� ����Ͻʽÿ�';
$lang['Confirm_code'] = 'Ȯ���ڵ�';
$lang['Confirm_code_explain'] = '���� �״�� �Է��Ͻʽÿ�. �� �ڵ�� ��ҹ��ڸ� �����ϸ� 0�� ��ȿ�մϴ�.';



//
// Memberslist
//
$lang['Select_sort_method'] = '���� ��� ����';
$lang['Sort'] = '����';
$lang['Sort_Top_Ten'] = '�ۼ��� 10����';
$lang['Sort_Joined'] = '������';
$lang['Sort_Username'] = '����� �̸�';
$lang['Sort_Location'] = '��ġ';
$lang['Sort_Posts'] = '�ѱۼ�';
$lang['Sort_Email'] = '�̸���';
$lang['Sort_Website'] = '������Ʈ';
$lang['Sort_Ascending'] = '�ø�';
$lang['Sort_Descending'] = '����';
$lang['Order'] = 'Order';


//
// Group control panel
//
$lang['Group_Control_Panel'] = '�׷� ������';
$lang['Group_member_details'] = '�׷� ȸ�� ����';
$lang['Group_member_join'] = '�׷� ����';

$lang['Group_Information'] = '�׷� ����';
$lang['Group_name'] = '�׷� �̸�';
$lang['Group_description'] = '�׷� ����';
$lang['Group_membership'] = '�׷� ȸ����';
$lang['Group_Members'] = '�׷� ȸ��';
$lang['Group_Moderator'] = '�׷� ������';
$lang['Pending_members'] = '���� ȸ��';

$lang['Group_type'] = '�׷� ����';
$lang['Group_open'] = '���� �׷�';
$lang['Group_closed'] = '���� �׷�';
$lang['Group_hidden'] = '��� �׷�';

$lang['Current_memberships'] = '���� ȸ��';
$lang['Non_member_groups'] = '��ȸ�� �׷�';
$lang['Memberships_pending'] = 'ȸ���� ����';

$lang['No_groups_exist'] = '�����ϴ� �׷��� ����';
$lang['Group_not_exist'] = '�������� �ʴ� �׷�';

$lang['Join_group'] = '�׷� ����';
$lang['No_group_members'] = '�� �׷쿡�� ȸ���� �����ϴ�';
$lang['Group_hidden_members'] = '�� �׷��� ����߽��ϴ�, ȸ�� �ڰ��� �� �� �����ϴ�';
$lang['No_pending_group_members'] = '�� �׷��� ���� ȸ���� �����ϴ�';
$lang['Group_joined'] = '�� �׷쿡 ���������� ���� ��û�Ǿ����ϴ�.<br />�׷� �����ڰ� ������ �����ϸ� �뺸�� �� ���Դϴ�';
$lang['Group_request'] = '�׷� ���� ��û�� �����Ǿ����ϴ�';
$lang['Group_approved'] = '��û�� ���εǾ����ϴ�';
$lang['Group_added'] = '�� �׷쿡 ���ԵǼ̽��ϴ�';
$lang['Already_member_group'] = '�̹� �� �׷� ȸ���Դϴ�';
$lang['User_is_member_group'] = '����ڴ� �̹� �� �׷��� ȸ���Դϴ�';
$lang['Group_type_updated'] = '�׷� ���� ������Ʈ ����';

$lang['Could_not_add_user'] = '�������� �ʴ� �����';
$lang['Could_not_anon_user'] = '�������� �׷� ȸ������ �� �� ����';

$lang['Confirm_unsub'] = '�� �׷쿡�� Ż���ϰڽ��ϱ�?';
$lang['Confirm_unsub_pending'] = '���� ��û�� ���� ���ε��� �ʾҽ��ϴ�, ������ ����ϰڽ��ϱ�?';

$lang['Unsub_success'] = '�� �׷쿡�� Ż���ϼ̽��ϴ�.';

$lang['Approve_selected'] = '���õ� ����� ����';
$lang['Deny_selected'] = '���õ� ����� �ź�';
$lang['Not_logged_in'] = '�׷쿡 �����Ϸ��� �α����ؾ� �մϴ�.';
$lang['Remove_selected'] = '���õ� ����� ����';
$lang['Add_member'] = 'ȸ�� �߰�';
$lang['Not_group_moderator'] = '�� �׷��� �����ڰ� �ƴϹǷ� �� ����� ������ �� �����ϴ�.';

$lang['Login_to_join'] = '�׷쿡 �����ϰų� ȸ���� �����Ϸ��� �α����ϼ���';
$lang['This_open_group'] = '���� �׷��Դϴ�, �����Ϸ��� Ŭ���ϼ���';
$lang['This_closed_group'] = '���� �׷��̹Ƿ� ���̻� ȸ���� ���� �ʽ��ϴ�';
$lang['This_hidden_group'] = '��� �׷��̹Ƿ� �ڵ� ȸ���߰��� ���� �ʽ��ϴ�';
$lang['Member_this_group'] = '���ϴ� �� �׷��� ȸ���Դϴ�';
$lang['Pending_this_group'] = '������ ȸ�� �ڰ��� ���� ���Դϴ�';
$lang['Are_group_moderator'] = '���ϴ� �׷� �������Դϴ�';
$lang['None'] = '����';

$lang['Subscribe'] = '��û';
$lang['Unsubscribe'] = '���';
$lang['View_Information'] = '���� ����';


//
// Search
//
$lang['Search_query'] = '�˻�';
$lang['Search_options'] = '�˻� �ɼ�';

$lang['Search_keywords'] = 'Ű����� �˻�';
$lang['Search_keywords_explain'] = '<u>AND</u>�� ����Ͽ� �ݵ�� ���� �� �ܾ ������ �� �ְ�, <u>OR</u>�� ����Ͽ� ���� �Ǵ� �ܾ �����ϸ� <u>NOT</u>�� ����Ͽ� ������ �ȵǴ� �ܾ �����մϴ�. ���ϵ幮�ڷ� * �� ����� �� �ֽ��ϴ�';
$lang['Search_author'] = '�۾��̷� �˻�';
$lang['Search_author_explain'] = '�κ� ��ġ�� ���� ���ϵ� ���� ���';

$lang['Search_for_any'] = '�Էµ� ������ �̿��� �˻�';
$lang['Search_for_all'] = '��� ���� �˻�';
$lang['Search_title_msg'] = '������ �޽��� ���� �˻�';
$lang['Search_msg_only'] = '������ �˻�';

$lang['Return_first'] = '���� ������ ���ڼ�'; // followed by xxx characters in a select box
$lang['characters_posts'] = '�Խù��� ���ڼ�';

$lang['Search_previous'] = '�˻� �Ѱ� ��¥'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = '�˻� ����';
$lang['Sort_Time'] = '�ø� �ð�';
$lang['Sort_Post_Subject'] = '�ø� ����';
$lang['Sort_Topic_Title'] = '���� ����';
$lang['Sort_Author'] = '�۾���';
$lang['Sort_Forum'] = '�Խ���';

$lang['Display_results'] = '��� ���̱�';
$lang['All_available'] = '��� ���';
$lang['No_searchable_forums'] = '�� ����Ʈ�� �ִ� �Խ����� �˻��� ������ �����ϴ�';

$lang['No_search_match'] = '�˻� ���ǿ� �´� ����� �����ϴ�';
$lang['Found_search_match'] = '�˻� ��� %d �� ��ġ�մϴ�'; // eg. Search found 1 match
$lang['Found_search_matches'] = '�˻� ��� %d �� ��ġ�մϴ�'; // eg. Search found 24 matches

$lang['Close_window'] = 'â�ݱ�';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '�� �Խ��ǿ��� ���� %s �� ���������� �ø� �� �ֽ��ϴ�';
$lang['Sorry_auth_sticky'] = '�� �Խ��ǿ��� ���� %s �� ������ �޽����� �ø� �� �ֽ��ϴ�';
$lang['Sorry_auth_read'] = '�� �Խ��ǿ����� ���� %s �� ������ ���� �� �ֽ��ϴ�';
$lang['Sorry_auth_post'] = '�̰Խ��ǿ����� ���� %s �� ������ �ø� �� �ֽ��ϴ�';
$lang['Sorry_auth_reply'] = '�̰Խ��ǿ����� ���� %s �� ����� �ø� �� �ֽ��ϴ�';
$lang['Sorry_auth_edit'] = '�̰Խ��ǿ����� ���� %s �� �ø� ���� ������ �� �ֽ��ϴ�';
$lang['Sorry_auth_delete'] = '�̰Խ��ǿ����� ���� %s �� �ø� ���� ������ �� �ֽ��ϴ�';
$lang['Sorry_auth_vote'] = '�̰Խ��ǿ����� ���� %s �� ��ǥ�� ������ �� �ֽ��ϴ�';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>���� �����</b>';
$lang['Auth_Registered_Users'] = '<b>��� �����</b>';
$lang['Auth_Users_granted_access'] = '<b>Ư�� �㰡�� ���� �����</b>';
$lang['Auth_Moderators'] = '<b>������</b>';
$lang['Auth_Administrators'] = '<b>���</b>';

$lang['Not_Moderator'] = '���ϴ� �� �Խ����� �����ڰ� �ƴմϴ�';
$lang['Not_Authorised'] = '���� ����';

$lang['You_been_banned'] = '���ϴ� �� �Խ��ǿ��� ������߽��ϴ�<br />�ڼ��� ������ �������ͳ� �Խ��� ��ڿ��� �����ϼ���';



//
// Viewonline
//
$lang['Reg_users_zero_online'] = '��� ����ڰ� ������ '; // There ae 5 Registered and
$lang['Reg_users_online'] = '��� ����ڰ� %d ���̸� '; // There ae 5 Registered and
$lang['Reg_user_online'] = '��� ����ڰ� %d ���̸�'; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '������� �¶��� ����� ����'; // 6 Hidden users online
$lang['Hidden_users_online'] = '������� �¶��� ����� %d ��'; // 6 Hidden users online
$lang['Hidden_user_online'] = '������� �¶��� ����� %d ��'; // 6 Hidden users online
$lang['Guest_users_online'] = '�¶��� �մ� %d ��'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '�¶��� �մ� ����'; // There are 10 Guest users online
$lang['Guest_user_online'] = '�¶��� �մ� %d ��'; // There is 1 Guest user online
$lang['No_users_browsing'] = '�� �Խ��ǿ��� ���� ����ڰ� �����ϴ�';

$lang['Online_explain'] = '�� �����ʹ� ���� 5�� ���� Ȱ���ߴ� ����ڵ鿡 ���� ���Դϴ�';

$lang['Forum_Location'] = '�Խ��� ��ġ';
$lang['Last_updated'] = '������ ������Ʈ';

$lang['Forum_index'] = '�Խ��� �ε���';
$lang['Logging_on'] = '�α���';
$lang['Posting_message'] = '�޽��� �ø�����';
$lang['Searching_forums'] = '�Խ��� �˻���';
$lang['Viewing_profile'] = '�������� ������';
$lang['Viewing_online'] = '�¶��� ����� ������';
$lang['Viewing_member_list'] = 'ȸ�� ����Ʈ ������';
$lang['Viewing_priv_msgs'] = '����� �޽��� ������';
$lang['Viewing_FAQ'] = 'FAQ ������';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = '������ ������';
$lang['Mod_CP_explain'] = '�Ʒ� ����� �̿��Ͽ� �� �Խ��ǿ� ���� �뷮 ���� �۾��� �� �� �ֽ��ϴ�. ������ �������� ��װ�, �����ϰ�, �̵��ϰ� ������ �� �ֽ��ϴ�.';

$lang['Select'] = '����';
$lang['Delete'] = '����';
$lang['Move'] = '�̵�';
$lang['Lock'] = '���';
$lang['Unlock'] = '����';

$lang['Topics_Removed'] = '���õ� ������ ���������� �����ͺ��̽����� �����Ǿ����ϴ�.';
$lang['Topics_Locked'] = '���õ� ������ �����ϴ�';
$lang['Topics_Moved'] = '���õ� ������ �̵��Ǿ����ϴ�';
$lang['Topics_Unlocked'] = '���õ� ������ �����ϴ�';
$lang['No_Topics_Moved'] = '�̵��� ������ �����ϴ�';

$lang['Confirm_delete_topic'] = '���õ� ������ �����Ͻðڽ��ϱ�?';
$lang['Confirm_lock_topic'] = '���õ� ������  ��׽ðڽ��ϱ�?';
$lang['Confirm_unlock_topic'] = '���õ� ������ �����Ͻðڽ��ϱ�?';
$lang['Confirm_move_topic'] = '���õ� ������ �̵��Ͻðڽ��ϱ�?';

$lang['Move_to_forum'] = '�Խ������� �̵�';
$lang['Leave_shadow_topic'] = '���� �Խ��ǿ� �׸��� ���� �����.';

$lang['Split_Topic'] = '���� �и� ������';
$lang['Split_Topic_explain'] = '�Ʒ� ����� �̿��Ͽ�, �ø� ���� ���������� �����ϰų� ���� ��ġ���� �и���Ű�ų� �Ͽ� ������ �ѷ� �и��� �� �ֽ��ϴ�';
$lang['Split_title'] = '�� ���� ����';
$lang['Split_forum'] = '�� ������ ���� �Խ���';
$lang['Split_posts'] = '���õ� ���� �и�';
$lang['Split_after'] = '���õ� �۷� ���� �и�';
$lang['Topic_split'] = '���õ� ������ ���������� �и��Ǿ����ϴ�';

$lang['Too_many_error'] = '���� �ʹ� ���� �����߽��ϴ�. ������ �и��Ϸ��� ���� �ϳ��� �����ؾ� �մϴ�!';

$lang['None_selected'] = '�� �۾��� �ϱ� ���� ������ ���õ��� �ʾҽ��ϴ�. �ǵ��ư��� �ּ��� �ϳ��� �����Ͻʽÿ�.';
$lang['New_forum'] = '�� �Խ���';

$lang['This_posts_IP'] = '�� �ۿ� ���� IP';
$lang['Other_IP_this_user'] = '�� ����ڰ� ���� �ø� �ٸ� IP �ּ�';
$lang['Users_this_IP'] = '�� IP ���� ���� �ø��� �����';
$lang['IP_info'] = 'IP ����';
$lang['Lookup_IP'] = 'IP ã��';


//
// Timezones ... for display on each page
//
$lang['All_times'] = '�ð���: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 �ð�';
$lang['-11'] = 'GMT - 11 �ð�';
$lang['-10'] = 'GMT - 10 �ð�';
$lang['-9'] = 'GMT - 9 �ð�';
$lang['-8'] = 'GMT - 8 �ð�';
$lang['-7'] = 'GMT - 7 �ð�';
$lang['-6'] = 'GMT - 6 �ð�';
$lang['-5'] = 'GMT - 5 �ð�';
$lang['-4'] = 'GMT - 4 �ð�';
$lang['-3.5'] = 'GMT - 3.5 �ð�';
$lang['-3'] = 'GMT - 3 �ð�';
$lang['-2'] = 'GMT - 2 �ð�';
$lang['-1'] = 'GMT - 1 �ð�';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 �ð�';
$lang['2'] = 'GMT + 2 �ð�';
$lang['3'] = 'GMT + 3 �ð�';
$lang['3.5'] = 'GMT + 3.5 �ð�';
$lang['4'] = 'GMT + 4 �ð�';
$lang['4.5'] = 'GMT + 4.5 �ð�';
$lang['5'] = 'GMT + 5 �ð�';
$lang['5.5'] = 'GMT + 5.5 �ð�';
$lang['6'] = 'GMT + 6 �ð�';
$lang['6.5'] = 'GMT + 6.5 �ð�';
$lang['7'] = 'GMT + 7 �ð�';
$lang['8'] = 'GMT + 8 �ð�';
$lang['9'] = 'GMT + 9 �ð�(�ѱ�)';
$lang['9.5'] = 'GMT + 9.5 �ð�';
$lang['10'] = 'GMT + 10 �ð�';
$lang['11'] = 'GMT + 11 �ð�';
$lang['12'] = 'GMT + 12 �ð�';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 �ð�';
$lang['tz']['-11'] = 'GMT - 11 �ð�';
$lang['tz']['-10'] = 'GMT - 10 �ð�';
$lang['tz']['-9'] = 'GMT - 9 �ð�';
$lang['tz']['-8'] = 'GMT - 8 �ð�';
$lang['tz']['-7'] = 'GMT - 7 �ð�';
$lang['tz']['-6'] = 'GMT - 6 �ð�';
$lang['tz']['-5'] = 'GMT - 5 �ð�';
$lang['tz']['-4'] = 'GMT - 4 �ð�';
$lang['tz']['-3.5'] = 'GMT - 3.5 �ð�';
$lang['tz']['-3'] = 'GMT - 3 �ð�';
$lang['tz']['-2'] = 'GMT - 2 �ð�';
$lang['tz']['-1'] = 'GMT - 1 �ð�';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 �ð�';
$lang['tz']['2'] = 'GMT + 2 �ð�';
$lang['tz']['3'] = 'GMT + 3 �ð�';
$lang['tz']['3.5'] = 'GMT + 3.5 �ð�';
$lang['tz']['4'] = 'GMT + 4 �ð�';
$lang['tz']['4.5'] = 'GMT + 4.5 �ð�';
$lang['tz']['5'] = 'GMT + 5 �ð�';
$lang['tz']['5.5'] = 'GMT + 5.5 �ð�';
$lang['tz']['6'] = 'GMT + 6 �ð�';
$lang['tz']['6.5'] = 'GMT + 6.5 �ð�';
$lang['tz']['7'] = 'GMT + 7 �ð�';
$lang['tz']['8'] = 'GMT + 8 �ð�';
$lang['tz']['9'] = 'GMT + 9 �ð�(�ѱ�)';
$lang['tz']['9.5'] = 'GMT + 9.5 �ð�';
$lang['tz']['10'] = 'GMT + 10 �ð�';
$lang['tz']['11'] = 'GMT + 11 �ð�';
$lang['tz']['12'] = 'GMT + 12 �ð�';
$lang['tz']['13'] = 'GMT + 13 �ð�';

$lang['datetime']['Sunday'] = '�Ͽ���';
$lang['datetime']['Monday'] = '������';
$lang['datetime']['Tuesday'] = 'ȭ����';
$lang['datetime']['Wednesday'] = '������';
$lang['datetime']['Thursday'] = '�����';
$lang['datetime']['Friday'] = '�ݿ���';
$lang['datetime']['Saturday'] = '�����';
$lang['datetime']['Sun'] = '��';
$lang['datetime']['Mon'] = '��';
$lang['datetime']['Tue'] = 'ȭ';
$lang['datetime']['Wed'] = '��';
$lang['datetime']['Thu'] = '��';
$lang['datetime']['Fri'] = '��';
$lang['datetime']['Sat'] = '��';
$lang['datetime']['January'] = '1��';
$lang['datetime']['February'] = '2��';
$lang['datetime']['March'] = '3��';
$lang['datetime']['April'] = '4��';
$lang['datetime']['May'] = '5��';
$lang['datetime']['June'] = '6��';
$lang['datetime']['July'] = '7��';
$lang['datetime']['August'] = '8��';
$lang['datetime']['September'] = '9��';
$lang['datetime']['October'] = '10��';
$lang['datetime']['November'] = '11��';
$lang['datetime']['December'] = '12��';
$lang['datetime']['Jan'] = '1��';
$lang['datetime']['Feb'] = '2��';
$lang['datetime']['Mar'] = '3��';
$lang['datetime']['Apr'] = '4��';
$lang['datetime']['May'] = '5��';
$lang['datetime']['Jun'] = '6��';
$lang['datetime']['Jul'] = '7��';
$lang['datetime']['Aug'] = '8��';
$lang['datetime']['Sep'] = '9��';
$lang['datetime']['Oct'] = '10��';
$lang['datetime']['Nov'] = '11��';
$lang['datetime']['Dec'] = '12��';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = '����';
$lang['Critical_Information'] = '�߿��� ����';

$lang['General_Error'] = '�Ϲ� ����';
$lang['Critical_Error'] = 'ġ���� ����';
$lang['An_error_occured'] = '������ �߻��߽��ϴ�';
$lang['A_critical_error'] = 'ġ���� ������ �߻��߽��ϴ�';

//
// That's all, Folks!
// -------------------------------------------------

?>