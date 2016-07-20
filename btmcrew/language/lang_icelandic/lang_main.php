<?php
/***************************************************************************
 *
 *	language/lang_icelandic/lang_main.php   [icelandic]
 *	------------------------------------------------------------------------
 *
 *	Created     Thu, 29 Aug 2002 18:49:56 +0200
 *
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
// Add your details here if wanted, e.g. Name, username, email address, website
// www.oreind.is/spjall - Baldur ��r Sveinsson: baldur@oreind.is
// ���ing �tg�fa 0.4 - 11 sept. 2002.

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

// setlocale(LC_ALL, 'English');

$lang['ENCODING'] = 'iso-8859-1';	// put the correct character set here!
$lang['DIRECTION'] = 'ltr';	// {ltr|rtl} -- DO NOT TRANSLATE!
$lang['LEFT'] = 'left';	// DO NOT TRANSLATE!
$lang['RIGHT'] = 'right';	// DO NOT TRANSLATE!
$lang['DATE_FORMAT'] = 'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = '���ing ger� af <a href="mailto:baldur@oreind.is">Baldur ��r Sveinsson</a> � 2002';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Umr��ur';
$lang['Category'] = 'Umr��uefni';
$lang['Topic'] = 'Spjall�r��ur';
$lang['Topics'] = 'Spjall�r��ir';
$lang['Replies'] = 'Sv�r';
$lang['Views'] = 'Sko�a�';
$lang['Post'] = 'Innlegg';
$lang['Posts'] = 'Innlegg';
$lang['Posted'] = 'Innlegg';
$lang['Username'] = 'Notendanafn';
$lang['Password'] = 'A�gangsor�';
$lang['Email'] = 'E-mail/netfang';
$lang['Poster'] = 'Poster';
$lang['Author'] = 'H�fundur';
$lang['Time'] = 'T�mi';
$lang['Hours'] = 'Klukkustundir';
$lang['Message'] = 'Skilabo�';

$lang['1_Day'] = '1 Dag';
$lang['7_Days'] = '7 Daga';
$lang['2_Weeks'] = '2 Vikur';
$lang['1_Month'] = '1 M�nu�';
$lang['3_Months'] = '3 M�nu�i';
$lang['6_Months'] = '6 M�nu�i';
$lang['1_Year'] = '1 �r';

$lang['Go'] = 'Fara';
$lang['Jump_to'] = 'Fara til';
$lang['Submit'] = 'Senda';
$lang['Reset'] = 'Hreinsa';
$lang['Cancel'] = 'H�tta vi�';
$lang['Preview'] = 'Sko�a';
$lang['Confirm'] = 'Sta�festa';
$lang['Spellcheck'] = 'Stafsetning';
$lang['Yes'] = 'J�';
$lang['No'] = 'Nei';
$lang['Enabled'] = 'Virkja�';
$lang['Disabled'] = '�virkt';
$lang['Error'] = 'Villa';

$lang['Next'] = 'N�sta';
$lang['Previous'] = 'Fyrra';
$lang['Goto_page'] = 'Fara � bla�s��u';
$lang['Joined'] = 'Skr��ur �ann';
$lang['IP_Address'] = 'IP Address';

$lang['Select_forum'] = 'Veldu umr��ur';
$lang['View_latest_post'] = 'Sko�a s��ustu innlegg';
$lang['View_newest_post'] = 'Sko�a n�justu innlegg';
$lang['Page_of'] = 'Bla�s��a <b>%d</b> af <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ N�mer';
$lang['AIM'] = 'AIM Address';
$lang['MSNM'] = 'MSN Skilabo�';
$lang['YIM'] = 'Yahoo Skilabo�';

$lang['Forum_Index'] = '%s umr��u h�pur';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Senda inn n�jan spjall�r��';
$lang['Reply_to_topic'] = 'Senda svar � spjall�r��';
$lang['Reply_with_quote'] = 'Svara me� tilv�sun';

$lang['Click_return_topic'] = '�ti� %sh�r%s til a� fara til baka � umr��ur'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '�ti� %sh�r%s til a� reyna aftur';
$lang['Click_return_forum'] = '�ti� %sh�r%s til a� fara aftur � umr��ur';
$lang['Click_view_message'] = '�ti� %sh�r%s til a� sj� �itt innlegg';
$lang['Click_return_modcp'] = '�ti� %sh�r%s til a� fara aftur til a� umr��u stj�ra stj�rnbor�';
$lang['Click_return_group'] = '�ti� %sh�r%s til a� fara � uppl�singar um h�p';

$lang['Admin_panel'] = 'Fara � stj�rnbor� fyrir umr��ubor�sstj�ra';

$lang['Board_disable'] = '�v� mi�ur er umr��ubor�i� �virkt sem stendur, reyndu seinna';

//
// Global Header strings
//
$lang['Registered_users'] = 'Innskr��ir notendur:';
$lang['Browsing_forum'] = 'Virkir notendur:';
$lang['Online_users_zero_total'] = '�a� eru samtals <b>0</b> notendur tengdir n�na :: ';
$lang['Online_users_total'] = '�a� eru samtals <b>%d</b> notendur tengdir n�na :: ';
$lang['Online_user_total'] = '�a� er <b>%d</b> notandi tengdur n�na :: ';
$lang['Reg_users_zero_total'] = '0 <>Skr��ir, ';
$lang['Reg_users_total'] = '%d Skr��ir, ';
$lang['Reg_user_total'] = '%d Skr��ir, ';
$lang['Hidden_users_zero_total'] = '0 Faldir og ';
$lang['Hidden_user_total'] = '%d Faldir og ';
$lang['Hidden_users_total'] = '%d Faldir og ';
$lang['Guest_users_zero_total'] = '0 Gestir';
$lang['Guest_users_total'] = '%d Gestir';
$lang['Guest_user_total'] = '%d Gestur';
$lang['Record_online_users'] = '�egar flestir notendur voru �� voru <b>%s</b> tengdir �ann %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sUmsj�narma�ur%s';
$lang['Mod_online_color'] = '%sStj�rnandi%s';

$lang['You_last_visit'] = '�� heims�ttir okkur s��ast �ann %s'; // %s replaced by date/time
$lang['Current_time'] = '�a� er n�na %s'; // %s replaced by time

$lang['Search_new'] = 'Sko�a innlegg s��an s��ast';
$lang['Search_your_posts'] = 'Sko�a ��n innlegg';
$lang['Search_unanswered'] = 'Sko�a �sv�ru�um innleggjum';

$lang['Register'] = 'N�skr�ning';
$lang['Profile'] = '��n uppsetning';
$lang['Edit_profile'] = 'Breyta �inni uppsetningu';
$lang['Search'] = 'Leita';
$lang['Memberlist'] = 'Listi yfir me�limi';
$lang['FAQ'] = 'Algengar spurningar (FAQ)';
$lang['BBCode_guide'] = 'BB k��a lei�beiningar';
$lang['Usergroups'] = 'Notendah�par';
$lang['Last_Post'] = 'S��asta innlegg';
$lang['Moderator'] = 'Stj�rnandi';
$lang['Moderators'] = 'Stj�rnendur';

//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Notendur okkar hafa sent inn samtals <b>0</b> innlegg'; // Number of posts
$lang['Posted_articles_total'] = 'Notendur okkar hafa sent inn samtals <b>%d</b> innlegg'; // Number of posts
$lang['Posted_article_total'] = 'Notendur okkar hafa sent inn samtals <b>%d</b> innlegg'; // Number of posts
$lang['Registered_users_zero_total'] = 'Vi� h�fum <b>0</b> skr��a notendur'; // # registered users
$lang['Registered_users_total'] = 'Vi� h�fum <b>%d</b> skr��a notendur'; // # registered users
$lang['Registered_user_total'] = 'Vi� h�fum <b>%d</b> skr��a notendur'; // # registered users
$lang['Newest_user'] = 'Okkar n�jasti skr��i notandi er <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'Engin n� innlegg eru s��an �� k�ktir inn s��ast';
$lang['No_new_posts'] = 'Engin n� innlegg';
$lang['New_posts'] = 'N� innlegg';
$lang['New_post'] = 'N� innlegg';
$lang['No_new_posts_hot'] = 'Engin n� innlegg [ Vins�last ]';
$lang['New_posts_hot'] = 'N� innlegg [ Vins�last ]';
$lang['No_new_posts_locked'] = 'Engin n� innlegg [ Loka� ]';
$lang['New_posts_locked'] = 'N� innlegg [ Loka� ]';
$lang['Forum_is_locked'] = 'Umr��urnar eru loka�ar';

//
// Login
//
$lang['Enter_password'] = 'Sl��u inn notendanafn og a�gangsor� til a� skr� �ig inn';
$lang['Login'] = 'Innskr�ning';
$lang['Logout'] = 'Aftengjast';

$lang['Forgotten_password'] = '�g hef gleymt a�gangsor�i m�nu';

$lang['Log_me_in'] = 'Skr��u mig inn sj�lfvirkt � hvert skipti sem �g kem inn';

$lang['Error_login'] = '�� hefur slegi� inn rangt e�a �virkt notendanafn e�a a�gangsor�';

//
// Index page
//
$lang['Index'] = 'Fors��a';
$lang['No_Posts'] = 'Engin innlegg';
$lang['No_forums'] = '�etta umr��ubor� hefur engar spjall�r��i';

$lang['Private_Message'] = 'Einka skilabo�';
$lang['Private_Messages'] = 'Einka skilabo�';
$lang['Who_is_Online'] = 'Hverjir er tengdir';

$lang['Mark_all_forums'] = 'Merkja allar umr��ur lesnar';
$lang['Forums_marked_read'] = 'Allar umr��ur hafa veri� merktar lesnar';

//
// Viewforum
//
$lang['View_forum'] = 'Sko�a umr��ur';

$lang['Forum_not_exist'] = 'Umr��ur sem �� valdir er ekki til';
$lang['Reached_on_error'] = '�� hefur komi� hinga� vegna villu';

$lang['Display_topics'] = 'S�na spjall�r��i fr� s��ustu/s��asta';
$lang['All_Topics'] = 'Allir spjall�r��ir';

$lang['Topic_Announcement'] = '<b>Tilkynning:</b>';
$lang['Topic_Sticky'] = '<b>L�ma:</b>';
$lang['Topic_Moved'] = '<b>F�rt:</b>';
$lang['Topic_Poll'] = '<b>[ K�nnun ]</b>';

$lang['Mark_all_topics'] = 'Merkja alla spjall�r��i lesna';
$lang['Topics_marked_read'] = 'Umr��ur � �essum spjall�r��i hafa allar veri� merktar lesnar';

$lang['Rules_post_can'] = '�� <b>getur</b> sent inn n�ja spjall�r��i � �essar umr��ur';
$lang['Rules_post_cannot'] = '�� <b>getur ekki</b> sent inn n�ja spjall�r��i � �essar umr��ur';
$lang['Rules_reply_can'] = '�� <b>getur</b> svara� spjall�r��um � �essum umr��um';
$lang['Rules_reply_cannot'] = '�� <b>getur ekki</b> svara� spjall�r��um � �essum umr��um';
$lang['Rules_edit_can'] = '�� <b>getur</b> breytt innleggi ��nu � �essum umr��um';
$lang['Rules_edit_cannot'] = '�� <b>getur ekki</b> breytt innleggi ��nu � �essum umr��um';
$lang['Rules_delete_can'] = '�� <b>getur</b> eytt ��num innleggjum � �essum umr��um';
$lang['Rules_delete_cannot'] = '�� <b>getur ekki</b> eytt innleggjum ��num � �essum umr��um';
$lang['Rules_vote_can'] = '�� <b>getur</b> teki� ��tt � kosningum � �essum umr��um';
$lang['Rules_vote_cannot'] = '�� <b>getur ekki</b> teki� ��tt � kosningum � �essum umr��um';
$lang['Rules_moderate'] = '�� <b>getur</b> %sstj�rna� �essum umr��um%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = '�a� eru engin innlegg � �essar umr��ur<br />�ttu � <b>N�jan spjall�r��/newtopic</b> hnapp � �essari s��u til a� senda inn';

//
// Viewtopic
//
$lang['View_topic'] = 'Sj� spjall�r��';

$lang['Guest'] = 'Gestur';
$lang['Post_subject'] = 'Efni innleggs';
$lang['View_next_topic'] = 'Sj� n�stu spjall�r��i';
$lang['View_previous_topic'] = 'Sj� s��ustu spjall�r��i';
$lang['Submit_vote'] = 'Senda inn kosningu';
$lang['View_results'] = 'Sj� �rslit kosninga';

$lang['No_newer_topics'] = '�a� eru engir n�jir spjall�r��ir � �essum umr��um';
$lang['No_older_topics'] = '�a� eru engir eldri spjall�r��ir � �essum umr��um';
$lang['Topic_post_not_exist'] = 'Spjall�r��ur e�a innlegg sem �� leitar a� er ekki til';
$lang['No_posts_topic'] = '�a� eru engin innlegg � �essum spjall�r��';

$lang['Display_posts'] = 'S�na innlegg fr� s��asta';
$lang['All_Posts'] = '�ll innlegg';
$lang['Newest_First'] = 'N�jasta fyrst';
$lang['Oldest_First'] = 'Elsta fyrst';

$lang['Back_to_top'] = 'Til baka efst � s��u';

$lang['Read_profile'] = 'Sj� uppsetningu notanda'; 
$lang['Send_email'] = 'Senda p�st';
$lang['Visit_website'] = 'Heims�kja heimas��u sendanda';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Breyta/Ey�a �essu innleggi';
$lang['View_IP'] = 'Sj� IP-t�lu sendanda';
$lang['Delete_post'] = 'Ey�a �essu innleggi';

$lang['wrote'] = 'skrifa�i'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Tilvitnun'; // comes before bbcode quote output.
$lang['Code'] = 'K��i'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'S��ast breytt af %s �ann %s, breytt %d sinni samtals'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'S��ast breytt af %s �ann %s, breytt %d sinnum samtals'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Loka �essum spjall�r��i';
$lang['Unlock_topic'] = 'Opna �ennan spjall�r��';
$lang['Move_topic'] = 'F�ra �ennan spjall�r��';
$lang['Delete_topic'] = 'Ey�a �essum spjall�r��i';
$lang['Split_topic'] = 'Skifta �essum spjall�r��i';

$lang['Stop_watching_topic'] = 'H�tta a� fylgjast me� �essum spjall�r��i';
$lang['Start_watching_topic'] = 'Fylgjast me� hvort komi sv�r vi� �essum spjall�r��i';
$lang['No_longer_watching'] = '�� ert ekki lengur a� fylgjast me� �essu spjall�r��i';
$lang['You_are_watching'] = '�� ert a� n�na a� fylgjast me� �essum spjall�r��i';

$lang['Total_votes'] = 'Samtals atkv��i';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Meginatri�i innleggs';
$lang['Topic_review'] = 'Spjall�r��a yfirlit';

$lang['No_post_mode'] = 'Engin a�fer� valin vi� innsendingu'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Senda inn n�jan spjall�r��';
$lang['Post_a_reply'] = 'Senda inn svar';
$lang['Post_topic_as'] = 'Senda spjall�r�� inn sem';
$lang['Edit_Post'] = 'Breyta innleggi';
$lang['Options'] = 'Valkostir';

$lang['Post_Announcement'] = 'Tilkynning';
$lang['Post_Sticky'] = 'L�ma';
$lang['Post_Normal'] = 'Venjuleg';

$lang['Confirm_delete'] = 'Ertu viss um a� �� viljir ey�a �essu innleggi?';
$lang['Confirm_delete_poll'] = 'Ertu viss um a� �� viljir ey�a �essari kosningu?';

$lang['Flood_Error'] = '�� getur ekki sent inn anna� innlegg svo flj�tt eftir s��asta, reyndu aftur seinna';
$lang['Empty_subject'] = '�� ver�ur a� sl� inn efni �egar �� ert a� senda inn n�jan spjall�r��';
$lang['Empty_message'] = '�� ver�ur a� skrifa inn skilabo� �egar �� ert a� senda inn innlegg';
$lang['Forum_locked'] = '�essar umr��ur eru loka�ar, �� getur ekki sent inn, svara� e�a breytt innleggi';
$lang['Topic_locked'] = '�essi spjall�r��ur er loka�ur, �� getur ekki breytt, e�a svara� innleggi';
$lang['No_post_id'] = 'Enginn p�stur merktur';
$lang['No_topic_id'] = '�� ver�ur a� velja spjall�r�� til a� svara';
$lang['No_valid_mode'] = '�� getur bara sent inn innlegg, svara�, breytt e�a v�sa� � innlegg. Vinsamlega fari� til baka og reyni� aftur';
$lang['No_such_post'] = '�a� er ekkert svona innlegg, fari� til baka og reyni� aftur';
$lang['Edit_own_posts'] = '�v� mi�ur �� getur �� bara breytt ��nu eigin innleggi';
$lang['Delete_own_posts'] = '�v� mi�ur getur �� bara eytt ��nu eigin innleggi';
$lang['Cannot_delete_replied'] = '�v� mi�ur m�tt �� bara ey�a innleggi sem b�i� er a� svara';
$lang['Cannot_delete_poll'] = '�v� mi�ur getur �� ekki eytt sko�anak�nnun sem er � gangi';
$lang['Empty_poll_title'] = '�� ver�ur a� setja inn nafn � sko�anak�nnunina';
$lang['To_few_poll_options'] = '�� ver�ur allavega a� setja inn tvo m�guleika';
$lang['To_many_poll_options'] = '�� hefur reynt a� setja inn of marga m�guleika';
$lang['Post_has_no_poll'] = '�etta innlegg er ekki me� sko�anak�nnun';
$lang['Already_voted'] = '�� hefur �egar teki� ��tt � �essari sko�anak�nnun';
$lang['No_vote_option'] = '�� ver�ur a� velja einn m�guleika �egar �� ert a� kj�sa';

$lang['Add_poll'] = 'B�ta vi� sko�anak�nnun';
$lang['Add_poll_explain'] = 'Ef �� vilt ekki hafa sko�anak�nnun me� innleggi ��nu, haf�u �� reitina t�ma';
$lang['Poll_question'] = 'Spurning � k�nnun';
$lang['Poll_option'] = 'M�guleikar � k�nnun';
$lang['Add_option'] = 'B�ta vi� m�guleika';
$lang['Update'] = 'Uppf�ra';
$lang['Delete'] = 'Ey�a';
$lang['Poll_for'] = 'Keyra k�nnun �';
$lang['Days'] = 'Daga'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Settu 0 e�a skildu reit eftir t�man fyrir endalausa sko�anak�nnun ]';
$lang['Delete_poll'] = 'Ey�a sko�anak�nnun';

$lang['Disable_HTML_post'] = 'Gera HTML �virkt � �essu innleggi';
$lang['Disable_BBCode_post'] = 'Gera BB k��a �virkan � �essu innleggi';
$lang['Disable_Smilies_post'] = 'Gera Broskalla �virka � �essu innleggi';

$lang['HTML_is_ON'] = 'HTML er <u>virkt</u>';
$lang['HTML_is_OFF'] = 'HTML er <u>�virkt</u>';
$lang['BBCode_is_ON'] = '%sBB k��i%s er <u>virkur</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBB k��i%s er <u>�virkur</u>';
$lang['Smilies_are_ON'] = 'Broskallar eru <u>virkir</u>';
$lang['Smilies_are_OFF'] = 'Broskallar eru <u>�virkir</u>';

$lang['Attach_signature'] = 'B�ta vi� undirskrift (undirskrift er h�gt a� breyta � �inni uppsetningu)';
$lang['Notify'] = 'L�ttu mig vita �egar svar er sent inn';
$lang['Delete_post'] = 'Ey�a �essu innleggi';

$lang['Stored'] = 'Innlegg �itt er komi� inn';
$lang['Deleted'] = 'Innleggi ��nu hefur veri� eytt';
$lang['Poll_delete'] = 'Sko�anak�nnun �inni hefur veri� eytt';
$lang['Vote_cast'] = 'Atkv��i �itt hefur veri� m�tteki�';

$lang['Topic_reply_notification'] = 'Sta�festing Spjall�r��a';

$lang['bbcode_b_help'] = 'Brei�ur texti: [b]texti[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Italic texti: [i]texti[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Skrifa undir texta: [u]texti[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Vitna � texta: [quote]texti[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'K��a skj�r: [code]k��i[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Listi: [list]texti[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Ra�a�ur listi: [list=]texti[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Setja inn mynd: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Setja inn URL: [url]http://url[/url] e�a [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Loka �llum opnum BB k��a merkjum';
$lang['bbcode_s_help'] = 'Litur � st�fum: [color=red]texti[/color]  Tip: �� getur l�ka nota� color=#FF0000';
$lang['bbcode_f_help'] = 'Stafast�r�: [size=x-small]sm�ir stafir[/size]';

$lang['Emoticons'] = 'Broskallar';
$lang['More_emoticons'] = 'Sj� fleiri Broskalla';

$lang['Font_color'] = 'Litur � st�fum';
$lang['color_default'] = 'Venjulegur';
$lang['color_dark_red'] = 'D�kk rau�ur';
$lang['color_red'] = 'Rau�ur';
$lang['color_orange'] = 'Rau�gulur';
$lang['color_brown'] = 'Br�nn';
$lang['color_yellow'] = 'Gulur';
$lang['color_green'] = 'Gr�nn';
$lang['color_olive'] = '�l�vu';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Bl�r';
$lang['color_dark_blue'] = 'D�kk Bl�r';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Fj�lubl�r';
$lang['color_white'] = 'Hv�tur';
$lang['color_black'] = 'Svartur';

$lang['Font_size'] = 'Stafast�r�';
$lang['font_tiny'] = 'Mj�g litlir';
$lang['font_small'] = 'Litlir';
$lang['font_normal'] = 'Venjulegir';
$lang['font_large'] = 'St�rir';
$lang['font_huge'] = 'Mj�g st�rir';

$lang['Close_Tags'] = 'Loka merki';
$lang['Styles_tip'] = 'Ath.: �a� er h�gt a� setja �tlit au�veldlega � merktan texta';

//
// Private Messaging
//
$lang['Private_Messaging'] = 'Einkap�stur';

$lang['Login_check_pm'] = 'Skr��u �ig inn til a� athuga me� einkap�st';
$lang['New_pms'] = '�� hefur fengi� %d n�jan p�st'; // You have 2 new messages
$lang['New_pm'] = '�� hefur fengi� %d n�jan p�st'; // You have 1 new message
$lang['No_new_pm'] = '�� hefur engan n�jan p�st';
$lang['Unread_pms'] = '�� �tt eftir %d �lesinn p�st';
$lang['Unread_pm'] = '�� �tt eftir %d �lesinn p�st';
$lang['No_unread_pm'] = '�� �tt engin �lesinn p�st';
$lang['You_new_pm'] = '�a� b��ur ��n einkap�stur � innh�lfinu ��nu';
$lang['You_new_pms'] = '�a� b��a ��n einkap�stur � innh�lfinu ��nu';
$lang['You_no_new_pm'] = 'Engin einkap�stur b��ur ��n';

$lang['Unread_message'] = '�lesinn p�stur';
$lang['Read_message'] = 'Lesa p�st';

$lang['Read_pm'] = 'Lesa p�st';
$lang['Post_new_pm'] = 'Senda inn p�st';
$lang['Post_reply_pm'] = 'Svara p�st';
$lang['Post_quote_pm'] = 'Tilv�sun � p�st';
$lang['Edit_pm'] = 'Breyta p�sti';

$lang['Inbox'] = 'Innh�lf';
$lang['Outbox'] = 'Sendur p�stur';
$lang['Savebox'] = 'Vista�ur p�stur';
$lang['Sentbox'] = 'Sendi p�st';
$lang['Flag'] = 'Au�kenni';
$lang['Subject'] = 'Efni';
$lang['From'] = 'Fr�';
$lang['To'] = 'Til';
$lang['Date'] = 'Dagsetning';
$lang['Mark'] = 'Merkja';
$lang['Sent'] = 'Sendur';
$lang['Saved'] = 'Vista�';
$lang['Delete_marked'] = 'Ey�a merktum';
$lang['Delete_all'] = 'Ey�a �llum';
$lang['Save_marked'] = 'Vista merkta'; 
$lang['Save_message'] = 'Vista p�st';
$lang['Delete_message'] = 'Ey�a p�sti';

$lang['Display_messages'] = 'S�na p�st fr� s��ustu'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Allur p�stur';

$lang['No_messages_folder'] = '�� �tt engan p�st � �essari m�ppu';

$lang['PM_disabled'] = 'Einkap�stur er �virkur � �essum umr��um';
$lang['Cannot_send_privmsg'] = '�v� mi�ur hefur stj�rnandi �tiloka� �ig � a� senda einkap�st � �essum umr��um';
$lang['No_to_user'] = '�� ver�ur a� sl� inn notandanafn til a� senda �ennan p�st';
$lang['No_such_user'] = '�v� mi�ur �� er enginn notandi me� �etta au�kenni';

$lang['Disable_HTML_pm'] = 'Gera HTML �virkt � �essum p�sti';
$lang['Disable_BBCode_pm'] = 'Gera BB k��a �virkan � �essum p�sti';
$lang['Disable_Smilies_pm'] = 'Gera Broskalla �virka � �essum p�sti';

$lang['Message_sent'] = 'P�sturinn hefur veri� sendur';

$lang['Click_return_inbox'] = '�ti� %sH�r%s til a� fara til baka � innh�lfi� �itt';
$lang['Click_return_index'] = '�ti� %sH�r%s til a� fara til baka � yfirlit';

$lang['Send_a_new_message'] = 'Senda n�jan einka p�st';
$lang['Send_a_reply'] = 'Svara einkap�sti';
$lang['Edit_message'] = 'Breyta einkap�sti';

$lang['Notification_subject'] = 'N�r einkap�stur er kominn til ��n';

$lang['Find_username'] = 'Finna notandanafn';
$lang['Find'] = 'Finna';
$lang['No_match'] = 'Ekkert fannst';

$lang['No_post_id'] = 'Enginn p�stur merktur';
$lang['No_such_folder'] = 'Engin mappa til me� �essu nafni';
$lang['No_folder'] = 'Engin mappa tilgreind';

$lang['Mark_all'] = 'Merkja alla';
$lang['Unmark_all'] = 'Taka merkingu af �llum';

$lang['Confirm_delete_pm'] = 'Ertu viss um a� �� vilt ey�a �essum p�sti?';
$lang['Confirm_delete_pms'] = 'Ertu viss um a� �� vilt ey�a �llum �essum p�sti?';

$lang['Inbox_size'] = 'P�sth�lf �itt er %d%% fullt'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'P�sth�lf me� sendum p�sti er %d%% fullt'; 
$lang['Savebox_size'] = 'P�sth�lf me� Vistu�um p�sti er %d%% fullt'; 

$lang['Click_view_privmsg'] = '�ti� %sH�r%s til a� fara � Innh�lfi�';

//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Sko�a uppsetningu :: %s'; // %s is username 
$lang['About_user'] = 'Allt um %s'; // %s is username

$lang['Preferences'] = 'Uppsetning';
$lang['Items_required'] = 'Reitir merktir me� * ver�ur a� fylla �t';
$lang['Registration_info'] = 'Uppl�singar um skr�ningu';
$lang['Profile_info'] = 'Uppl�singar um uppsetningu';
$lang['Profile_info_warn'] = '�essar uppl�singar sj� allir';
$lang['Avatar_panel'] = 'Stj�rnbor� fyrir myndir';
$lang['Avatar_gallery'] = 'Myndasafn';

$lang['Website'] = 'Vefs��a';
$lang['Location'] = 'Sta�setning';
$lang['Contact'] = 'Viltu samband vi�';
$lang['Email_address'] = 'E-mail/netfang';
$lang['Email'] = 'E-mail/netfang';
$lang['Send_private_message'] = 'Senda einkap�st';
$lang['Hidden_email'] = '[ Fali� ]';
$lang['Search_user_posts'] = 'Finna �ll innlegg eftir %s';
$lang['Interests'] = '�hugasvi�';
$lang['Occupation'] = 'Atvinna'; 
$lang['Poster_rank'] = 'Punkta flokkur';

$lang['Total_posts'] = 'Samtals innlegg';
$lang['User_post_pct_stats'] = '%.2f%% af �llum'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f innlegg � dag'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Finna �ll innlegg eftir %s'; // Find all posts by username

$lang['No_user_id_specified'] = '�v� mi�ur �� er �essi notandi ekki til';
$lang['Wrong_Profile'] = '�� getur ekki breytt uppsetningu annarra en �inni eigin.';

$lang['Only_one_avatar'] = 'Bara ein ger� af mynd er m�guleg';
$lang['File_no_data'] = 'URLi� fyrir skr�na sem �� settir inniheldur engin g�gn';
$lang['No_connection_URL'] = '�a� er ekkert samband vi� URLi� sem �� settir inn';
$lang['Incomplete_URL'] = 'URLi� sem �� settir inn er ekki r�tt';
$lang['Wrong_remote_avatar_format'] = 'URLi� sem �� settir inn v�sar � ranga skr�';
$lang['No_send_account_inactive'] = '�v� mi�ur er ekki h�gt a� n�lgast a�gangsor�i� �itt vegna �ess a� a�gangur �inn er �virkur. Haf�u samband vi� umr��ubor�sstj�ra ef �� vilt meiri uppl�singar';

$lang['Always_smile'] = 'Hafa broskalla alltaf virka';
$lang['Always_html'] = 'Hafa HTML alltaf virkt';
$lang['Always_bbcode'] = 'Hafa BB k��a alltaf virkan';
$lang['Always_add_sig'] = 'B�ta undiskrift alltaf vi� skilabo�';
$lang['Always_notify'] = 'L�ta alltaf vita ef sv�r berast';
$lang['Always_notify_explain'] = 'Sendir E-mail ef einhver svarar spjall�r��i sem �� hefur sent inn �. �essu er h�gt a� breyta er �� sendir inn innlegg';

$lang['Board_style'] = '�ema bor�s';
$lang['Board_lang'] = 'Tungum�l bor�s';
$lang['No_themes'] = 'Engir �emar � gagnagrunni';
$lang['Timezone'] = 'T�mabelti';
$lang['Date_format'] = 'Form � dagsetingu';
$lang['Date_format_explain'] = 'Formi� er eins og PHP notar: <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> ';
$lang['Signature'] = 'Undirskrift';
$lang['Signature_explain'] = '�etta er texti sem �� getur l�ti� b�ta sj�lfvirkt vi� innlegg sem �� sendir inn. �a� er h�mark %d stafir.';
$lang['Public_view_email'] = 'S�na alltaf E-mail/netfang';

$lang['Current_password'] = 'N�verandi a�gangsor�';
$lang['New_password'] = 'N�tt a�gangsor�';
$lang['Confirm_password'] = 'Sta�festa a�gangsor�';
$lang['Confirm_password_explain'] = '�� ver�ur a� sta�festa n�verandi a�gangsor� ef �� vilt breyta �v� e�a ef �� vilt breyta E-mail/netfangi ��nu';
$lang['password_if_changed'] = '�� �arft a� sl� inn a�gangsor� ef �� vilt breyta �v�';
$lang['password_confirm_if_changed'] = '�� �arft a� sta�festa n�ja a�gangsor�i� �itt ef ert a� breyta �v� ofan vi�';

$lang['Avatar'] = 'Mynd';
$lang['Avatar_explain'] = '�etta er til a� s�na litla mynd ne�an vi� uppl�singar um �ig � innleggjum ��num. Bara er h�gt a� s�na eina mynd � einu sem er ekki st�rri en %d punktar a� breidd, og ekki h�rri er %d punktar og skr�in m� ekki vera st�rri er %dkB.';
$lang['Upload_Avatar_file'] = 'N� � mynd fr� �inni t�lvu';
$lang['Upload_Avatar_URL'] = 'N� � mynd fr� URLi';
$lang['Upload_Avatar_URL_explain'] = 'Sl� inn URL �ar sem myndin er sta�sett og �a�an er h�n �� afritu� og sett � okkar vef�j�n.';
$lang['Pick_local_Avatar'] = 'Velja mynd �r myndasafni';
$lang['Link_remote_Avatar'] = 'Tengja � mynd � ��rum vef�j�n';
$lang['Link_remote_Avatar_explain'] = 'Sl� inn URL � mynd �ar sem h�n er sta�sett.';
$lang['Avatar_URL'] = 'URL myndar';
$lang['Select_from_gallery'] = 'Velja mynd �r myndasafni';
$lang['View_avatar_gallery'] = 'S�na myndasafn';

$lang['Select_avatar'] = 'Velja mynd';
$lang['Return_profile'] = 'H�tta me� mynd';
$lang['Select_category'] = 'Velja h�p';

$lang['Delete_Image'] = 'Ey�a mynd';
$lang['Current_Image'] = 'N�verandi mynd';

$lang['Notify_on_privmsg'] = 'L�ta vita um einkap�st';
$lang['Popup_on_privmsg'] = 'Opna l�tinn glugga �egar einkap�stur kemur'; 
$lang['Popup_on_privmsg_explain'] = '�a� g�ti opnast gluggi til a� l�ta �ig vita �egar �� f�r� einkap�st'; 
$lang['Hide_user'] = 'L�ta engan vita a� �� s�rt tengdur';

$lang['Profile_updated'] = 'Uppsetning ��n hefur veri� uppf�r�';
$lang['Profile_updated_inactive'] = 'Uppsetning ��n hefur veri� uppf�r� en �� hefur breytt mikilv�gum atri�um �annig a� �� hefur ekki lengur a�gang. Athuga�u p�stinn �inn til a� sj� hvernig �� �tt a� virkja a�gang �inn aftur e�a hvort �� �arft a� b��a eftir a� umr��ustj�ri lagar uppsetningu ��na.';

$lang['Password_mismatch'] = 'A�gangsor�in sem �� sl�st inn eru ekki eins';
$lang['Current_password_mismatch'] = 'N�verandi a�gangsor� sem �� sl�st inn passar ekki vi� �a� sem er � gagnagrunni okkar.';
$lang['Password_long'] = 'A�gangsor� �itt m� ekki vera lengra en 32 stafir';
$lang['Username_taken'] = '�v� mi�ur �� er �etta notandanafn �egar nota� hj� okkur';
$lang['Username_invalid'] = '�v� mi�ur �� inniheldur �etta notandanafn stafi sem eru ekki leyfilegir, svo sem \'';
$lang['Username_disallowed'] = '�v� mi�ur �� er �etta notandanafn ekki leyft';
$lang['Email_taken'] = '�v� mi�ur �� er �etta netfang �egar skr�� hj� okkur';
$lang['Email_banned'] = '�v� mi�ur er �etta netfang � banni ';
$lang['Email_invalid'] = '�v�  mi�ur er �etta netfang ekki r�tt';
$lang['Signature_too_long'] = 'Undiskrift ��n er of l�ng';
$lang['Fields_empty'] = '�� ver�ur a� sl� inn � reitina sem eru merktir';
$lang['Avatar_filetype'] = 'Myndirnar ver�a a� vera .jpg, .gif e�a .png';
$lang['Avatar_filesize'] = 'Myndirnar ver�a a� vera minni en %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Myndin ver�ur a� vera minni en %d puntar a� breidd og %d punkta h�'; 

$lang['Welcome_subject'] = 'Velkomin til umr��ubor�s hj� %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'N�r notandi';
$lang['Account_activated_subject'] = 'A�gangur virkur';

$lang['Account_added'] = 'Takk fyrir a� skr� �ig, a�gangur �inn er n� virkur. �� getur skr�� �ig inn me� notandanafni og a�gangsor�i';
$lang['Account_inactive'] = 'N� hefur �� fengi� reikning skr��an. �� �arft a� gera hann virkan og �a� hefur veri� sent E-mail til ��n � netfangi� sem �� sl�st inn og er �a� me� lykil til a� virkja hann. Sko�a�u p�stinn �inn til a� f� n�nari uppl�singar.';
$lang['Account_inactive_admin'] = 'Reikningur �inn hefur veri� �tb�inn. Hinsvegar �arf umsj�narma�ur h�psins a� gera hann virkann. Honum hefur n� veri� sendur E-mail og �� ver�ur l�tinn vita um lei� og reikningurinn er virkur.';
$lang['Account_active'] = 'A�gangur �inn er n� virkur. Takk fyrir a� skr� �ig.';
$lang['Account_active_admin'] = 'A�gangur �inn er n� virkur.';
$lang['Reactivate'] = 'Ger�u a�gang �inn aftur virkan!';
$lang['Already_activated'] = '�� hefur n� �egar gert a�gang �inn virkan';
$lang['COPPA'] = 'A�gangur �inn hefur veri� sam�ykktur. �� f�r� n�nari uppl�singar � E-mail.';

$lang['Registration'] = 'Skilm�lar fyrir skr�ningu';
$lang['Reg_agreement'] = '�� svo a� umsj�narma�ur og stj�rnendur �essa spjallr�sa munu reyna a� fjarl�gja e�a breyta �llum innleggjum sem eru �vi�eigandi efni eins flj�tt og m�gulegt er �� er �m�gulegt a� yfirfara hvert einasta innlegg fr� notendum. �ess vegna sam�ykkir �� a� �ll innlegg s�nir sko�un h�fundar en ekki umsj�narmanns, stj�rnanda spjallr�sanna e�a vefstj�ra(nema innlegg fr� �eim sj�lfum) og �ar af lei�andi er ekki h�gt a� gera �� �byrga fyrir �eim.<br /><br />�� sam�ykkir a� senda ekki inn nein innlegg �ar sem kemur fram m��gandi, s�randi, d�naleg, h�tanir, hatursfull, kynfer�isleg e�a anna� efni sem getur veri� banna� samkv�mt l�gum. Ef sl�kt kemur fyrir �� ver�ur vi�komandi �tiloka�ur fr� �llum samskiptum � �essum umr��um (�j�nustua�ili ver�ur l�tinn vita). IP tala allra innleggja er skr�� til a� sporna vi� svona misnotkun. �� sam�ykkir a� vefstj�ri, umsj�narma�ur e�a stj�rnandi �essara spjallr�sa hafa fullan r�tt til a� fjarl�gja, breyta, f�ra e�a loka einhverjum spjall�r��i hven�r sem er ef �eir sj� �st��u til. Sem notandi �� sam�ykkir �� a� allar ��r uppl�singar sem �� hefur sl�r� inn ver�i Vista�ar � gagnagrunni okkar. �� svo a� �essar uppl�singar ver�i ekki sendar til �ri�ja a�ila �n ��ns sam�ykkis �� geta vefstj�ri, umsj�narma�ur e�a stj�rnandi �essara spjallr�sa ekki veri� saks�ttir ef einhver br�st inn � gagnagrunninn sem ver�ur �ess valdandi a� uppl�singar eru teknar.<br /><br />�etta umr��u kerfi notar vefk�kur til a� geyma uppl�singar � �inni t�lvu. �essar vefk�kur innihalda ekki neinar ��r uppl�singar sem �� sl�r� inn h�r, ��r eru einungis til a� au�velda notkum h�psins. Netfangi� er einungis nota� til a� senda sta�festingu um a�gangsor� og uppl�singar um ��na skr�ningu (og til a� senda ��r n�tt a�gangsor� ef �� gleymir �v�).<br /><br />Me� �v� a� �ta � sam�ykkt h�r ne�anvi� �� sam�ykkir �� �etta.';

$lang['Agree_under_13'] = '�g sam�ykki �essa skilm�la og er <b>yngri</b> en 13 �ra';
$lang['Agree_over_13'] = '�g sam�ykki �essa skilm�la og er <b>eldri</b> en 13 �ra';
$lang['Agree_not'] = '�g sam�ykki ekki �essa skilm�la';

$lang['Wrong_activation'] = 'Virkjunar lykill sem �� settir inn passar ekki vi� �� sem vi� h�fum � gagnagrunni okkar';
$lang['Send_password'] = 'Sendi� m�r n�tt a�gangsor�'; 
$lang['Password_updated'] = 'N�tt a�gangsor� hefur veri� �tb�i�, athuga�u � E-maili� �itt til a� f� uppl�singar um hvernig � a� virkja �a�';
$lang['No_email_match'] = 'Netfangi� sem �� gafst upp passar ekki vi� �a� sem er skr�� vi� �etta notandanafn';
$lang['New_password_activation'] = 'Virkja n�tt a�gangsor�';
$lang['Password_activated'] = 'A�gangur �inn hefur veri� ger�ur aftur virkur. Til a� skr� �ig skaltu nota a�gangsor�i� sem �� f�kkst � p�sti til ��n';

$lang['Send_email_msg'] = 'Senda E-mail/p�st';
$lang['No_user_specified'] = 'Enginn notandi var valinn';
$lang['User_prevent_email'] = '�essi notandi vill ekki m�ttaka E-mail/p�st. Reyndu a� senda honum einkap�st';
$lang['User_not_exist'] = '�essi notandi er ekki til';
$lang['CC_email'] = 'Senda afrit af af p�sti til ��n l�ka';
$lang['Email_message_desc'] = '�essi p�stur ver�ur sendur sem venjulegur texti, ekki setja inn neinn HTML e�a BB K��a. Sem svar netfang er �itt netfang sett.';
$lang['Flood_email_limit'] = '�� getur ekki sent annan p�st n�na, reyndu aftur seinna';
$lang['Recipient'] = 'M�tttakandi';
$lang['Email_sent'] = 'P�sturinn hefur veri� sendur';
$lang['Send_email'] = 'Senda p�st';
$lang['Empty_subject_email'] = '�� ver�ur a� setja inn efni fyrir �ennan E-mail/p�st';
$lang['Empty_message_email'] = '�� ver�ur a� setja inn einhver skilabo� sem h�gt er a� senda';

//
// Memberslist
//
$lang['Select_sort_method'] = 'Veldu a�fer� vi� r��un';
$lang['Sort'] = 'Ra�a';
$lang['Sort_Top_Ten'] = 'Topp t�u me�limir';
$lang['Sort_Joined'] = 'Skr�ningar dagsetning';
$lang['Sort_Username'] = 'Notandanafn';
$lang['Sort_Location'] = 'Sta�setning';
$lang['Sort_Posts'] = 'Samtals innlegg';
$lang['Sort_Email'] = 'E-mail';
$lang['Sort_Website'] = 'Vefs��a';
$lang['Sort_Ascending'] = 'Fr� A til �';
$lang['Sort_Descending'] = 'Fr� � til A';
$lang['Order'] = 'R��';

//
// Group control panel
//
$lang['Group_Control_Panel'] = 'H�pa stj�rnbor�';
$lang['Group_member_details'] = 'Uppl�singar um h�p';
$lang['Group_member_join'] = 'Taka ��tt � h�p';

$lang['Group_Information'] = 'H�p uppl�singar';
$lang['Group_name'] = 'Nafn h�ps';
$lang['Group_description'] = 'L�sing � h�pi';
$lang['Group_membership'] = 'Taka ��tt � h�p';
$lang['Group_Members'] = '��tttakendur h�ps';
$lang['Group_Moderator'] = 'Stj�rnandi h�ps';
$lang['Pending_members'] = 'Vi�komandi ��tttakendur';

$lang['Group_type'] = 'Ger� h�ps';
$lang['Group_open'] = 'Opinn h�pur';
$lang['Group_closed'] = 'Loka�ur h�pur';
$lang['Group_hidden'] = 'Falinn h�pur';

$lang['Current_memberships'] = 'H�par sem �� tekur ��tt �:';
$lang['Non_member_groups'] = 'H�par �n �innar ��ttt�ku:';
$lang['Memberships_pending'] = '��tttakendur �skast';

$lang['No_groups_exist'] = 'Engir h�par eru til';
$lang['Group_not_exist'] = '�essi h�pur er ekki til';

$lang['Join_group'] = 'Taka ��tt � h�p';
$lang['No_group_members'] = '�essi h�pur hefur enga ��tttakendur';
$lang['Group_hidden_members'] = '�essi h�pur er falinn, �� getur ekki s�� ��tttakendur';
$lang['No_pending_group_members'] = '�essi h�pur hefur enga ��tttakendur';
$lang['Group_joined'] = '�� hefur skr�� �ig � �ennan h�p<br />�� ver�ur l�tin/n vita hvort ums�knin ver�i sam�ykkt af stj�rnanda h�psins';
$lang['Group_request'] = 'Bei�ni um ��ttt�ku � h�pnum hefur veri� ger�';
$lang['Group_approved'] = 'Bei�ni ��n hefur veri� sam�ykkt';
$lang['Group_added'] = '��r hefur veri� b�tt vi� �ennan notendah�p'; 
$lang['Already_member_group'] = '�� ert �egar ��tttakandi � �essum h�p';
$lang['User_is_member_group'] = 'Notandi er �egar ��tttakandi � �essum h�p';
$lang['Group_type_updated'] = 'Ger� h�ps var uppf�r�';

$lang['Could_not_add_user'] = 'Notandi sem �� valdir er ekki til';
$lang['Could_not_anon_user'] = '�� getur ekki veri� �skr��/ur sem ��tttakandi � h�p';

$lang['Confirm_unsub'] = 'Ertu viss um a� �� viljir skr� �ig �r �essum h�p?';
$lang['Confirm_unsub_pending'] = 'Ums�kn ��n um ��ttt�ku � hennan h�p er � vinnslu, ertu viss um a� �� viljir skr� �ig �r honum?';

$lang['Unsub_success'] = '�� hefur veri� skr��/ur �r �essum h�p.';

$lang['Approve_selected'] = 'Sam�ykkt vali�';
$lang['Deny_selected'] = 'Ekki sam�ykkt vali�';
$lang['Not_logged_in'] = '�� ver�ur a� vera skr��ur inn til a� skr� �ig � h�p.';
$lang['Remove_selected'] = 'Fjarl�gja merkta notendur';
$lang['Add_member'] = 'B�ta vi� ��tttakanda';
$lang['Not_group_moderator'] = '�� ert ekki stj�rnandi �essa h�ps �annig a� �� getur �� ekki gert �etta.';

$lang['Login_to_join'] = 'Skr� �ig inn til a� s�kja um a�ild e�a stj�rna h�p';
$lang['This_open_group'] = '�etta er opinn h�pur, �ti� til a� s�kja um ��ttt�ku';
$lang['This_closed_group'] = '�etta er loka�ur h�pur, �a� eru ekki teki� vi� fleiri ��tttakendum';
$lang['This_hidden_group'] = '�etta er loka�ur h�pur, sj�lfvirk m�tttaka n�rra ��tttakanda er ekki leyf�';
$lang['Member_this_group'] = '�� ert me�limur �essa h�ps';
$lang['Pending_this_group'] = 'Ums�kn um ��ttt�ku � �essum h�p er ekki loki�';
$lang['Are_group_moderator'] = '�� ert stj�rnandi �essa h�ps';
$lang['None'] = 'Enginn';

$lang['Subscribe'] = 'Gerast �skrifandi';
$lang['Unsubscribe'] = 'H�tta �skrift';
$lang['View_Information'] = 'Sko�a uppl�singar';

//
// Search
//
$lang['Search_query'] = 'Leita';
$lang['Search_options'] = 'Leitar skilyr�i';

$lang['Search_keywords'] = 'Leita a� or�um';
$lang['Search_keywords_explain'] = '�� getur nota� <u>AND</u> til a� hafa fleiri en eitt or� � �tkomunni, <u>OR</u> til a� hafa anna� hvort og <u>NOT</u> til a� �tiloka �kve�in or� � leit. Noti� * til a� hluti �r or�i passi';
$lang['Search_author'] = 'Leita a� h�fundi';
$lang['Search_author_explain'] = 'Noti� * til a� leita a� hluta �r or�i';

$lang['Search_for_any'] = 'Leita a� setningu e�a � s�mu r�� og slegi� inn';
$lang['Search_for_all'] = 'Leita a� �llum or�um';
$lang['Search_title_msg'] = 'Leita a� nafni a� spjall�r�� og texta � innleggi';
$lang['Search_msg_only'] = 'Leita � bara � texta innleggs';

$lang['Return_first'] = 'S�na fyrstu'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Stafir � innleggjum';

$lang['Search_previous'] = 'Leita s��ustu'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Ra�a eftir';
$lang['Sort_Time'] = 'Dagsetning innleggs';
$lang['Sort_Post_Subject'] = 'Efni innleggs';
$lang['Sort_Topic_Title'] = 'Titill spjall�r��s';
$lang['Sort_Author'] = 'H�fundur';
$lang['Sort_Forum'] = 'Umr��ur';

$lang['Display_results'] = 'S�na �tkomu sem';
$lang['All_available'] = 'Allt sem til er';
$lang['No_searchable_forums'] = '�� hefur ekki r�ttindi til a� leita � neinum umr��um � �essari s��u';

$lang['No_search_match'] = 'Engir spjall�r��ir e�a innlegg p�ssu�u vi� leitarskilyr�i';
$lang['Found_search_match'] = 'Leit skila�i %d �tkomu'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Leit skila�i %d �tkomum'; // eg. Search found 24 matches

$lang['Close_window'] = 'Loka glugga';

//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '�v� mi�ur �� getur bara %s sett inn tilkynningar � �essar umr��ur';
$lang['Sorry_auth_sticky'] = '�v� mi�ur �� getur bara %s l�mt inn � �essar umr��ur'; 
$lang['Sorry_auth_read'] = '�v� mi�ur �� getur bara %s lesi� spjall�r��i � �essum umr��um'; 
$lang['Sorry_auth_post'] = '�v� mi�ur �� getur bara %s sett inn spjall�r��i � �essar umr��ur'; 
$lang['Sorry_auth_reply'] = '�v� mi�ur �� getur bara %s svara� innleggjum � �essum umr��um'; 
$lang['Sorry_auth_edit'] = '�v� mi�ur �� getur bara %s breytt innleggjum � �essum umr��um'; 
$lang['Sorry_auth_delete'] = '�v� mi�ur �� getur bara %s eytt innleggjum � �essum umr��um'; 
$lang['Sorry_auth_vote'] = '�v� mi�ur �� getur bara %s teki� ��tt � sko�anak�nnunum � �essum umr��um'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>�skr��ur notandi</b>';
$lang['Auth_Registered_Users'] = '<b>skr��ur notandi</b>';
$lang['Auth_Users_granted_access'] = '<b>notandi me� s�rstakan a�gang</b>';
$lang['Auth_Moderators'] = '<b>stj�rnandi</b>';
$lang['Auth_Administrators'] = '<b>umr��ubor�sstj�ri</b>';

$lang['Not_Moderator'] = '�� ert ekki stj�rnandi � �essum umr��um';
$lang['Not_Authorised'] = 'Ekki heimila�';

$lang['You_been_banned'] = '�� hefur veri� banna�ur/b�nnu� fr� �essum umr��um.<br />Haf�u samband vi� vefstj�ra e�a umr��ubor�sstj�ra til a� f� meiri uppl�singar';

//
// Viewonline
//
$lang['Reg_users_zero_online'] = '�a� eru enginn skr��ur notandi og '; // There ae 5 Registered and
$lang['Reg_users_online'] = '�a� eru %d skr��ir notendur og '; // There ae 5 Registered and
$lang['Reg_user_online'] = '�a� eru %d skr��ir notendur og '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = 'enginn falinn notandi tengdur n�na'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d faldir notendur tengdir n�na'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d faldir notendur tengdir n�na'; // 6 Hidden users online
$lang['Guest_users_online'] = '�a� eru %d gestir tengdir n�na'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '�a� eru engir gestir tengdir n�na'; // There are 10 Guest users online
$lang['Guest_user_online'] = '�a� er %d gestur tengdur n�na'; // There is 1 Guest user online
$lang['No_users_browsing'] = '�a� er enginn notandi a� sko�a umr��urnar n�na';

$lang['Online_explain'] = '�essar uppl�singar eru bygg�ar � s��ustu fimm m�n�tum';

$lang['Forum_Location'] = 'Sta�setning umr��a';
$lang['Last_updated'] = 'S��ast uppf�rt';

$lang['Forum_index'] = 'Efnisyfirlit umr��a';
$lang['Logging_on'] = 'Tengi n�na';
$lang['Posting_message'] = 'Senda inn innlegg';
$lang['Searching_forums'] = 'Leita � umr��um';
$lang['Viewing_profile'] = 'Sko�a uppsetningu';
$lang['Viewing_online'] = 'Sj� hverjur eru tengdir n�na';
$lang['Viewing_member_list'] = 'Sko�a skr��a notendur';
$lang['Viewing_priv_msgs'] = 'Sko�a einkap�st';
$lang['Viewing_FAQ'] = 'Sko�a algengar spurningar';

//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Stj�rnbor� umr��u stj�rnanda';
$lang['Mod_CP_explain'] = 'Me� �v� a� nota formi� h�r ne�anvi� �� getur �� stj�rna� miklu samt�mis � �essum umr��um. �� getur loka�, opna�, f�rt e�a eytt spjall�r��um.';

$lang['Select'] = 'Merktu';
$lang['Delete'] = 'Ey�a';
$lang['Move'] = 'F�ra';
$lang['Lock'] = 'L�sa';
$lang['Unlock'] = 'Opna';

$lang['Topics_Removed'] = 'Merktir spjall�r��ir hafa veri� fjarl�g�ir �r gagnagrunninum.';
$lang['Topics_Locked'] = 'Merktum spjall�r��um hefur veri� loka�';
$lang['Topics_Moved'] = 'Merktir spjall�r��ir hafa veri� f�r�ir';
$lang['Topics_Unlocked'] = 'Merktir spjall�r��ir hafa veri� opna�ir';
$lang['No_Topics_Moved'] = 'Engir spjall�r��ir hafa veri� f�r�ir';

$lang['Confirm_delete_topic'] = 'Ertu viss um a� �� vilt ey�a merktum spjall�r��i?';
$lang['Confirm_lock_topic'] = 'Ertu viss um a� �� vilt loka merktum spjall�r��um?';
$lang['Confirm_unlock_topic'] = 'Ertu viss um a� �� vilt opna merkta spjall�r��i?';
$lang['Confirm_move_topic'] = 'Ertu viss um a� �� viljir f�ra merkta spjall�r��i?';

$lang['Move_to_forum'] = 'F�ra til umr��a';
$lang['Leave_shadow_topic'] = 'Skilja eftir skygg�a spjall�r��i � g�mlu umr��um.';

$lang['Split_Topic'] = 'Stj�rnbor� til a� skipta spjall�r��um';
$lang['Split_Topic_explain'] = 'Me� �v� a� nota formi� h�r ne�anvi� �� getur �� skipt spjall�r��um � tvennt me� �v� anna�hvort a� velja hvert og eitt innlegg e�a skipta vi� �kve�i� innlegg';
$lang['Split_title'] = 'Titill n�s spjall�r��s';
$lang['Split_forum'] = 'Umr��ur fyrir n�jan spjall�r��';
$lang['Split_posts'] = 'Skipta merktum innleggjum';
$lang['Split_after'] = 'Skipta fr� v�ldu innleggi';
$lang['Topic_split'] = 'V�ldum spjall�r��um hefur veri� skipt';

$lang['Too_many_error'] = '�� hefur vali� of m�rg innlegg. �� getur bara vali� eitt innlegg til a� skipta spjall�r��um eftir!';

$lang['None_selected'] = '�� hefur ekki vali� neinn spjall�r�� til a� gera �essa a�ger� n�. Far�u aftur og veldu allavega einn.';
$lang['New_forum'] = 'N�jar umr��ur';

$lang['This_posts_IP'] = 'IP fyrir �etta innlegg';
$lang['Other_IP_this_user'] = 'A�rar IP t�lur sem �essi notandi hefur sent innlegg fr�';
$lang['Users_this_IP'] = 'Notendur sem senda fr� �essari IP t�lu';
$lang['IP_info'] = 'IP uppl�singar';
$lang['Lookup_IP'] = 'Leita a� IP t�lu';

//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Allir t�mar eru %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Klst.';
$lang['-11'] = 'GMT - 11 Klst.';
$lang['-10'] = 'GMT - 10 Klst.';
$lang['-9'] = 'GMT - 9 Klst.';
$lang['-8'] = 'GMT - 8 Klst.';
$lang['-7'] = 'GMT - 7 Klst.';
$lang['-6'] = 'GMT - 6 Klst.';
$lang['-5'] = 'GMT - 5 Klst.';
$lang['-4'] = 'GMT - 4 Klst.';
$lang['-3.5'] = 'GMT - 3.5 Hours';
$lang['-3'] = 'GMT - 3 Klst.';
$lang['-2'] = 'GMT - 2 Klst.';
$lang['-1'] = 'GMT - 1 Klst.';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Klst.';
$lang['2'] = 'GMT + 2 Klst.';
$lang['3'] = 'GMT + 3 Klst.';
$lang['3.5'] = 'GMT + 3.5 Hours';
$lang['4'] = 'GMT + 4 Klst.';
$lang['4.5'] = 'GMT + 4.5 Hours';
$lang['5'] = 'GMT + 5 Klst.';
$lang['5.5'] = 'GMT + 5.5 Hours';
$lang['6'] = 'GMT + 6 Klst.';
$lang['6.5'] = 'GMT + 6.5 Hours';
$lang['7'] = 'GMT + 7 Klst.';
$lang['8'] = 'GMT + 8 Klst.';
$lang['9'] = 'GMT + 9 Klst.';
$lang['9.5'] = 'GMT + 9.5 Hours';
$lang['10'] = 'GMT + 10 Klst.';
$lang['11'] = 'GMT + 11 Klst.';
$lang['12'] = 'GMT + 12 Klst.';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Klst.';
$lang['tz']['-11'] = 'GMT - 11 Klst.';
$lang['tz']['-10'] = 'GMT - 10 Klst.';
$lang['tz']['-9'] = 'GMT - 9 Klst.';
$lang['tz']['-8'] = 'GMT - 8 Klst.';
$lang['tz']['-7'] = 'GMT - 7 Klst.';
$lang['tz']['-6'] = 'GMT - 6 Klst.';
$lang['tz']['-5'] = 'GMT - 5 Klst.';
$lang['tz']['-4'] = 'GMT - 4 Klst.';
$lang['tz']['-3.5'] = 'GMT - 3.5 Hours';
$lang['tz']['-3'] = 'GMT - 3 Klst.';
$lang['tz']['-2'] = 'GMT - 2 Klst.';
$lang['tz']['-1'] = 'GMT - 1 Klst.';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Klst.';
$lang['tz']['2'] = 'GMT + 2 Klst.';
$lang['tz']['3'] = 'GMT + 3.5 Klst.';
$lang['tz']['3.5'] = 'GMT + 3.5 Hours';
$lang['tz']['4'] = 'GMT + 4.5 Klst.';
$lang['tz']['4.5'] = 'GMT + 4.5 Hours';
$lang['tz']['5'] = 'GMT + 5.5 Klst.';
$lang['tz']['5.5'] = 'GMT + 5.5 Hours';
$lang['tz']['6'] = 'GMT + 6.5 Klst.';
$lang['tz']['6.5'] = 'GMT + 6.5 Hours';
$lang['tz']['7'] = 'GMT + 7 Klst.';
$lang['tz']['8'] = 'GMT + 8 Klst.';
$lang['tz']['9'] = 'GMT + 9.5 Klst.';
$lang['tz']['9.5'] = 'GMT + 9.5 Hours';
$lang['tz']['10'] = 'GMT + 10 Klst.';
$lang['tz']['11'] = 'GMT + 11 Klst.';
$lang['tz']['12'] = 'GMT + 12 Klst.';

$lang['datetime']['Sunday'] = 'Sunnudagur';
$lang['datetime']['Monday'] = 'M�nudagur';
$lang['datetime']['Tuesday'] = '�ri�judagur';
$lang['datetime']['Wednesday'] = 'Mi�vikudagur';
$lang['datetime']['Thursday'] = 'Fimmtudagur';
$lang['datetime']['Friday'] = 'F�studagur';
$lang['datetime']['Saturday'] = 'Laugardagur';
$lang['datetime']['Sun'] = 'Sun';
$lang['datetime']['Mon'] = 'M�n';
$lang['datetime']['Tue'] = '�ri';
$lang['datetime']['Wed'] = 'Mi�';
$lang['datetime']['Thu'] = 'Fim';
$lang['datetime']['Fri'] = 'F�s';
$lang['datetime']['Sat'] = 'Lau';
$lang['datetime']['January'] = 'Jan�ar';
$lang['datetime']['February'] = 'Febr�ar';
$lang['datetime']['March'] = 'Mars';
$lang['datetime']['April'] = 'Apr�l';
$lang['datetime']['May'] = 'Ma�';
$lang['datetime']['June'] = 'J�n�';
$lang['datetime']['July'] = 'J�l�';
$lang['datetime']['August'] = '�g�st';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Okt�ber';
$lang['datetime']['November'] = 'N�vember';
$lang['datetime']['December'] = 'Desember';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Ma�';
$lang['datetime']['Jun'] = 'J�n';
$lang['datetime']['Jul'] = 'J�l';
$lang['datetime']['Aug'] = '�g�';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'N�v';
$lang['datetime']['Dec'] = 'Des';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Uppl�singar';
$lang['Critical_Information'] = 'Mikilv�gar uppl�singar';

$lang['General_Error'] = '�a� var� villa';
$lang['Critical_Error'] = 'Alvarleg villa';
$lang['An_error_occured'] = '�a� var� Villa';
$lang['A_critical_error'] = '�a� var� alvarleg villa';

//Add on for Gender Mod 
$lang['Gender'] = 'Kyn';	//used in users profile to display witch gender he/she is 
$lang['Male'] = 'Karl'; 
$lang['Female'] = 'Kona'; 
$lang['No_gender_specify'] = 'Ekki tilgreint'; 

//
// MOD: Show Ranks in FAQ v1.0.2
//
$lang['RankFAQ_Block_Title'] = 'Stig';
$lang['RankFAQ_Link_Title'] = 'Stig � umr��um';
$lang['RankFAQ_Title'] = 'Stig';
$lang['RankFAQ_Min'] = 'Minnsti fj�ldi innleggja';
$lang['RankFAQ_Image'] = 'Mynd stigs';
$lang['RankFAQ_None'] = 'Ekki til';
//
// MOD: -END-
//

//
// MOD: Admin Link in User Profile v1.0.2
//
$lang['AdminLink_Label'] = 'Notenda umsj�n';
$lang['AdminLink_Manage'] = 'Stj�rnun';
$lang['AdminLink_Permissions'] = 'Heimildir';
//
// MOD: -END-
//

//
// MOD: Enlarge Subject v1.0.3
//
$lang['No_Subject'] = '(Ekki efni)';
//
// MOD: -END-
//

//
// MOD: View Recent Posts v1.0.2
//
$lang['View_posts_of_last'] = 'Sko�a innlegg fr� s��asta';
//
// MOD: -END-
//

//
// MOD: Birthday/Zodiac v1.0.2
//
$lang['birth_date'] = 'F��ingardagur';
$lang['years_of_age'] = '(%s �ra)';
$lang['zodiac_sign'] = 'Stj�rnumerki';
$lang['no_birth_date'] = 'Ekki tilgreint';
$lang['Aries'] = 'Hr�tur';
$lang['Taurus'] = 'Naut';
$lang['Gemini'] = 'Tv�burar';
$lang['Cancer'] = 'Krabbi';
$lang['Leo'] = 'Lj�n';
$lang['Virgo'] = 'Meyja';
$lang['Libra'] = 'Vogin';
$lang['Scorpio'] = 'Spor�dreki';
$lang['Sagittarius'] = 'Bogama�ur';
$lang['Capricorn'] = 'Steingeit';
$lang['Aquarius'] = 'Vatnsberi';
$lang['Pisces'] = 'Fiskur';
$lang['DATE_INPUT_FORMAT'] = 'd/m/Y';	// only use m, n, d, j, and Y (or y) here!
$lang['birth_date_explain'] = 'Sl��u inn f��ingardag �inn svona: <d>%s</b>. Fyrir daginn � dag er �a� <b>%s</b>.';	// Enter your birth date as <b>m/d/Y</b>. For today, that would be <b>06/18/2002</b>.
$lang['Invalid_birth_date'] = '�� hefur tilgreint �gildan f��ingardag.';
$lang['birth_date_required'] = '�� ver�ur a� sl� inn f��ingardag �inn til a� f� a�gang.';
$lang['You_are_too_young'] = '�� ver�ur a� vera allavega %d �ra til a� f� a�gang a� �essu umr��ubor�i.';
$lang['You_are_too_old'] = 'Vi� getum ekki tr�a� �v� a� �� s�rt raunverulega %d �ra! Vi� erum me� h�mark upp � %d �ra aldur, �v� mi�ur!';
//
// MOD: -END-
//

//
// MOD: Prune Inactive Users v1.2.0
//
$lang['User_prune_this_user'] = 'Ey�a notanda %s'; // ALT/TITLE text for memberlist delete button
//
// MOD: -END-
//

//
// MOD: Admin Shadow Topics v1.1.0
//
//$lang['Shadow_Topics'] = 'Shadow Topics';
//
// MOD: -END-
//

//
// MOD: Board Statistics v1.2.4
//
$lang['Statistics'] = 'T�lfr��i';	// for menu button
//
// MOD: -END-
//

//
// MOD: Simple User Last Visit v1.0.0
//
$lang['Last_visit'] = 'S��asta innskr�ning';
$lang['Never'] = 'Aldrei';
$lang['Sort_Last_visit'] = 'S��ast skr�� inn �ann';
//
// MOD: -END-
//

//
// MOD: Reduce Categories v1.1.0
//
$lang['Expand_this_category'] = 'St�kka �ennan flokk';
$lang['Reduce_this_category'] = 'Minnka �ennan flokk';
//
// MOD: -END-
//

//
// MOD: MyCalendar v2.2.4
//
// DATE_INPUT_FORMAT already defined in Birthday & Zodiac MOD!
//$lang['DATE_INPUT_FORMAT'] = 'd/m/Y';	// only use m, n, d, j, and Y (or y) here!
$lang['interval']['day'] = 'daga';
$lang['interval']['days'] = 'dagar';
$lang['interval']['week'] = 'vika';
$lang['interval']['weeks'] = 'vikur';
$lang['interval']['month'] = 'm�nu�';
$lang['interval']['months'] = 'm�nu�i';
$lang['interval']['year'] = '�r';
$lang['interval']['years'] = '�r';
$lang['Event_Start'] = 'Einu sinni e�a byrjun dags.';
$lang['Event_End'] = 'Enda dagsetning og millibil';
$lang['Calendar_advanced_form'] = 'yfirgripsmikil';
$lang['Calendar_repeat_forever'] = 'endurtaka alltaf';
$lang['Clear_Date'] = 'Ey�a dags';
$lang['Date_not_specified'] = 'Veldu -->';
$lang['Select_start_date'] = 'Veldu byrjunar dagsetningu'; // must escape ' as \\\' for javascript
$lang['Calendar_event_title'] = 'H�t��isdagar';
$lang['View_calendar'] = 'Dagatal';
$lang['View_previous_month'] = 'Sko�a s��asta m�nu�';
$lang['View_next_month'] = 'Sko�a n�sta m�nu�';
$lang['View_previous_year'] = 'Sko�a s��ast �r';
$lang['View_next_year'] = 'Sko�a n�sta �r';
$lang['Calendar_interval'] = 'Millibil';
$lang['Calendar_repeat'] = 'Endurtaka';
$lang['Calendar_start_monday'] = '{Calendar_start_monday}';	// FALSE
$lang['Date_selector'] = 'Val dagsetninga';   // title/header for Date Selector Window
//
// MOD: -END-
//

//
// MOD: Gallery - phpBB2 Integration v1.3.1
//
$lang['Gallery'] = 'Myndasafn';
//
// MOD: -END-
//

//
// That's all Folks!
// -------------------------------------------------

?>