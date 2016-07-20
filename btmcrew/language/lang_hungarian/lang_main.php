<?php
/***************************************************************************
 *                            lang_main.php [Magyar]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
 *
 *     translated by        : Szilard Andai
 *     email                : iranon@send.hu
 *     version              : 2.0.6
 *
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
//         Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-2';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'Y.m.d., l, G:i'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'Magyar ford�t�s &copy; 2003. <a class="copyright" href="mailto:iranon@send.hu">Andai Szil�rd</a>';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'F�rum';
$lang['Category'] = 'T�mak�r';
$lang['Topic'] = 'T�ma';
$lang['Topics'] = 'T�m�k';
$lang['Replies'] = 'V�laszok';
$lang['Views'] = 'Megtekintve';
$lang['Post'] = 'Hozz�sz�l�s';
$lang['Posts'] = 'Hozz�sz�l�sok';
$lang['Posted'] = 'Elk�ldve';
$lang['Username'] = 'Felhaszn�l�n�v';
$lang['Password'] = 'Jelsz�';
$lang['Email'] = 'Email';
$lang['Poster'] = 'K�ld�';
$lang['Author'] = 'Szerz�';
$lang['Time'] = 'Id�';
$lang['Hours'] = '�ra';
$lang['Message'] = '�zenet';

$lang['1_Day'] = '1 nap';
$lang['7_Days'] = '7 nap';
$lang['2_Weeks'] = '2 h�t';
$lang['1_Month'] = '1 h�nap';
$lang['3_Months'] = '3 h�nap';
$lang['6_Months'] = '6 h�nap';
$lang['1_Year'] = '1 �v';

$lang['Go'] = 'Mehet';
$lang['Jump_to'] = 'Ugr�s';
$lang['Submit'] = 'Elk�ld';
$lang['Reset'] = 'T�r�l';
$lang['Cancel'] = 'M�gsem';
$lang['Preview'] = 'El�n�zet';
$lang['Confirm'] = 'Elfogad';
$lang['Spellcheck'] = 'Helyes�r�s';
$lang['Yes'] = 'Igen';
$lang['No'] = 'Nem';
$lang['Enabled'] = 'Bekapcsolva';
$lang['Disabled'] = 'Kikapcsolva';
$lang['Error'] = 'Hiba';

$lang['Next'] = 'K�vetkez�';
$lang['Previous'] = 'El�z�';
$lang['Goto_page'] = 'Ugr�s az oldalra';
$lang['Joined'] = 'Csatlakozott';
$lang['IP_Address'] = 'IP-c�m';

$lang['Select_forum'] = 'F�rum kiv�laszt�sa';
$lang['View_latest_post'] = 'Legut�bbi hozz�sz�l�sok';
$lang['View_newest_post'] = 'Leg�jabb hozz�sz�l�sok';
$lang['Page_of'] = '<b>%d</b> / <b>%d</b> oldal'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = 'Tartalomjegyz�k';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '�j t�ma nyit�sa';
$lang['Reply_to_topic'] = 'Hozz�sz�l�s a t�m�hoz';
$lang['Reply_with_quote'] = 'Hozz�sz�l�s, az el�zm�ny id�z�s�vel';

$lang['Click_return_topic'] = '%sVisszat�r�s%s a t�m�hoz'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Kattints %side%s, hogy �jrapr�b�ld';
$lang['Click_return_forum'] = 'Kattints %side%s, hogy visszat�rj a f�rumba';
$lang['Click_view_message'] = 'Kattints %side%s, a hozz�sz�l�sod megtekint�s�hez';
$lang['Click_return_modcp'] = '%sVisszat�r�s%s a Moder�tor vez�rl�pulthoz';
$lang['Click_return_group'] = '%sVisszat�r�s%s a Csoporthoz';

$lang['Admin_panel'] = 'F�rum adminisztr�ci�';

$lang['Board_disable'] = 'A f�rum ideiglenesen sz�netel, k�rlek pr�b�ld k�s�bb.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Regisztr�lt felhaszn�l�k:';
$lang['Browsing_forum'] = 'Jelenl�v� f�rumoz�(k):';
$lang['Online_users_zero_total'] = 'Jelenleg �sszesen <b>0</b> felhaszn�l� van jelen :: ';
$lang['Online_users_total'] = 'Jelenleg �sszesen <b>%d</b> felhaszn�l� van jelen :: ';
$lang['Online_user_total'] = 'Jelenleg �sszesen <b>%d</b> felhaszn�l� van jelen :: ';
$lang['Reg_users_zero_total'] = '0 Regisztr�lt, ';
$lang['Reg_users_total'] = '%d Regisztr�lt, ';
$lang['Reg_user_total'] = '%d Regisztr�lt, ';
$lang['Hidden_users_zero_total'] = '0 Rejtett �s ';
$lang['Hidden_user_total'] = '%d Rejtett �s ';
$lang['Hidden_users_total'] = '%d Rejtett �s ';
$lang['Guest_users_zero_total'] = '0 Vend�g';
$lang['Guest_users_total'] = '%d Vend�g';
$lang['Guest_user_total'] = '%d Vend�g';
$lang['Record_online_users'] = 'A legt�bb felhaszn�l� (<b>%s</b> f�) %s (-�n/�n) volt itt.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdminisztr�tor%s';
$lang['Mod_online_color'] = '%sModer�tor%s';

$lang['You_last_visit'] = 'Legutols� l�togat�sod d�tuma: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Pontos id�: %s'; // %s replaced by time

$lang['Search_new'] = 'Hozz�sz�l�sok a legutols� l�togat�s �ta';
$lang['Search_your_posts'] = '�zeneteid megtekint�se';
$lang['Search_unanswered'] = 'Megv�laszolatlan �zenetek megtekint�se';

$lang['Register'] = 'Regisztr�ci�';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profil szerkeszt�se';
$lang['Search'] = 'Keres�s';
$lang['Memberlist'] = 'Taglista';
$lang['FAQ'] = 'Gy.I.K.';
$lang['BBCode_guide'] = 'BBCode Kalauz';
$lang['Usergroups'] = 'Csoportok';
$lang['Last_Post'] = 'Legutols� �zenet';
$lang['Moderator'] = 'Moder�tor';
$lang['Moderators'] = 'Moder�torok';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Eddig �sszesen <b>0</b> hozz�sz�l�s �r�dott'; // Number of posts
$lang['Posted_articles_total'] = 'Eddig �sszesen <b>%d</b> hozz�sz�l�s �r�dott'; // Number of posts
$lang['Posted_article_total'] = 'Eddig �sszesen <b>%d</b> hozz�sz�l�s �r�dott'; // Number of posts
$lang['Registered_users_zero_total'] = '�sszesen <b>0</b> regisztr�lt felhaszn�l�nk van'; // # registered users
$lang['Registered_users_total'] = '�sszesen <b>%d</b> regisztr�lt felhaszn�l�nk van'; // # registered users
$lang['Registered_user_total'] = '�sszesen <b>%d</b> regisztr�lt felhaszn�l�nk van'; // # registered users
$lang['Newest_user'] = 'Leg�jabb regisztr�lt tagunk <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Nincsen �j hozz�sz�l�s a legutols� l�togat�sod �ta';
$lang['No_new_posts'] = 'Nincsenek �j hozz�sz�l�sok';
$lang['New_posts'] = '�j hozz�sz�l�sok';
$lang['New_post'] = '�j hozz�sz�l�s';
$lang['No_new_posts_hot'] = 'Nincsenek �j hozz�sz�l�sok [ N�pszer� ]';
$lang['New_posts_hot'] = '�j hozz�sz�l�sok [ N�pszer� ]';
$lang['No_new_posts_locked'] = 'Nincsenek �j hozz�sz�l�sok [ Z�rt ]';
$lang['New_posts_locked'] = '�j hozz�sz�l�sok [ Z�rt ]';
$lang['Forum_is_locked'] = 'Lez�rt f�rum';


//
// Login
//
$lang['Enter_password'] = 'A bel�p�shez add meg a felhaszn�l�neved �s jelszavad.';
$lang['Login'] = 'Bel�p�s';
$lang['Logout'] = 'Kil�p�s';

$lang['Forgotten_password'] = 'Elfelejtettem a jelsz�t!';

$lang['Log_me_in'] = 'Automatikus bejelentkez�s';

$lang['Error_login'] = 'Hib�s, vagy inakt�v nevet, esetleg hib�s jelsz�t adt�l meg.';


//
// Index page
//
$lang['Index'] = 'Index';
$lang['No_Posts'] = 'Nincs hozz�sz�l�s';
$lang['No_forums'] = 'Nincsenek f�rumok';

$lang['Private_Message'] = 'Priv�t �zenet';
$lang['Private_Messages'] = 'Priv�t �zenetek';
$lang['Who_is_Online'] = 'Ki van itt?';

$lang['Mark_all_forums'] = '�sszes f�rum megjel�l�se olvasottk�nt';
$lang['Forums_marked_read'] = '�sszes f�rum megjel�lve olvasottk�nt';


//
// Viewforum
//
$lang['View_forum'] = 'F�rum megtekint�se';

$lang['Forum_not_exist'] = 'A kiv�lsztott f�rum nem l�tezik.';
$lang['Reached_on_error'] = 'Hiba.';

$lang['Display_topics'] = '�sszes t�ma mutat�sa';
$lang['All_Topics'] = '�sszes t�ma';

$lang['Topic_Announcement'] = '<b>K�zlem�ny:</b>';
$lang['Topic_Sticky'] = '<b>Kiemelt:</b>';
$lang['Topic_Moved'] = '<b>�thelyzett:</b>';
$lang['Topic_Poll'] = '<b>[ Szavaz�s ]</b>';

$lang['Mark_all_topics'] = '�sszes t�ma megjel�l�se olvasottk�nt';
$lang['Topics_marked_read'] = '�sszes t�ma megjel�lve olvasottk�nt';

$lang['Rules_post_can'] = '<b>K�sz�thetsz</b> �j t�m�kat ebben a f�rumban';
$lang['Rules_post_cannot'] = '<b>Nem</b> k�sz�thetsz �j t�m�kat ebben a f�rumban';
$lang['Rules_reply_can'] = '<b>V�laszolhatsz</b> egy t�m�ra ebben a f�rumban';
$lang['Rules_reply_cannot'] = '<b>Nem</b> v�laszolhatsz egy t�m�ra ebben a f�rumban';
$lang['Rules_edit_can'] = '<b>M�dos�thatod</b> a hozz�sz�l�saidat a f�rumban';
$lang['Rules_edit_cannot'] = '<b>Nem</b> m�dos�thatod a hozz�sz�l�saidat a f�rumban';
$lang['Rules_delete_can'] = '<b>T�r�lheted</b> a hozz�sz�l�saidat a f�rumban';
$lang['Rules_delete_cannot'] = '<b>Nem</b> t�r�lheted a hozz�sz�l�saidat a f�rumban';
$lang['Rules_vote_can'] = '<b>Szavazhatsz</b> ebben a f�rumban';
$lang['Rules_vote_cannot'] = '<b>Nem</b> szavazhatsz ebben f�rumban';
$lang['Rules_moderate'] = '<b>%sModer�lhatod%s</b> ezt a f�rumot'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Nincsenek t�m�k a f�rumban<br />Kattints az <b>�j T�ma k�sz�t�s�re</b>.';


//
// Viewtopic
//
$lang['View_topic'] = 'T�ma megtekint�se';

$lang['Guest'] = 'Vend�g';
$lang['Post_subject'] = 'Hozz�sz�l�s t�m�ja';
$lang['View_next_topic'] = 'K�vetkez� t�ma megtekint�se';
$lang['View_previous_topic'] = 'El�z� t�ma megtekint�se';
$lang['Submit_vote'] = 'Szavaz�s k�ld�se';
$lang['View_results'] = 'Eredm�ny megtekint�se';

$lang['No_newer_topics'] = 'Nincsenek �jabb t�m�k a f�rumban';
$lang['No_older_topics'] = 'Nincsenek r�gbbi t�m�k a f�rumban';
$lang['Topic_post_not_exist'] = 'A t�ma vagy hozz�sz�l�s nem l�tezik';
$lang['No_posts_topic'] = 'Nincs hozz�sz�l�s a t�m�ban';

$lang['Display_posts'] = 'Hozz�sz�l�sok megtekint�se el�lr�l';
$lang['All_Posts'] = '�sszes hozz�sz�l�s';
$lang['Newest_First'] = '�jak el�re';
$lang['Oldest_First'] = 'R�gebbiek el�re';

$lang['Back_to_top'] = 'Vissza az elej�re';

$lang['Read_profile'] = 'Felhaszn�l� profilj�nak megtekint�se';
$lang['Send_email'] = 'Email k�ld�se a felhaszn�l�nak';
$lang['Visit_website'] = 'Felhaszn�l� weblapj�nak megtekint�se';
$lang['ICQ_status'] = 'ICQ St�tusz';
$lang['Edit_delete_post'] = 'Hozz�sz�l�s szerkeszt�se/t�rl�se';
$lang['View_IP'] = 'Felhaszn�l� IP-c�me';
$lang['Delete_post'] = 'Hozz�sz�l�s t�rl�se';

$lang['wrote'] = '�rta'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Id�zet'; // comes before bbcode quote output.
$lang['Code'] = 'K�d'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Legut�bb %s szerkesztette (%s), �sszesen %d alkalommal'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Legut�bb %s szerkesztette (%s), �sszesen %d alkalommal'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'T�ma lez�r�sa';
$lang['Unlock_topic'] = 'T�ma megnyit�sa';
$lang['Move_topic'] = 'T�ma �thelyez�se';
$lang['Delete_topic'] = 'T�ma t�rl�se';
$lang['Split_topic'] = 'T�ma sz�tv�laszt�sa';

$lang['Stop_watching_topic'] = 'T�ma-figyel�s megsz�ntet�se';
$lang['Start_watching_topic'] = 'V�laszok figyel�se a t�m�ban';
$lang['No_longer_watching'] = 'T�ma figyel�se megsz�ntetve';
$lang['You_are_watching'] = 'Jelenleg figyeled a t�m�t';

$lang['Total_votes'] = '�sszes szavazat';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '�zenet tartalma';
$lang['Topic_review'] = 'T�ma el�n�zete';

$lang['No_post_mode'] = 'Nincs hozz�sz�l�s-t�pus kiv�lasztva'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = '�j t�ma k�ld�se';
$lang['Post_a_reply'] = '�j v�lasz k�ld�se';
$lang['Post_topic_as'] = 'T�ma k�ld�se mint';
$lang['Edit_Post'] = 'Hozz�sz�l�s szerkeszt�se';
$lang['Options'] = 'Be�ll�t�sok';

$lang['Post_Announcement'] = 'K�zlem�ny';
$lang['Post_Sticky'] = 'Kiemelt';
$lang['Post_Normal'] = 'Sima';

$lang['Confirm_delete'] = 'Biztosan t�r�lni akarod a hozz�sz�l�st?';
$lang['Confirm_delete_poll'] = 'Biztosan t�r�lni akarod a szavaz�st?';

$lang['Flood_Error'] = 'Nem k�ldhetsz r�vid id�n bel�l t�bb hozz�sz�l�st, v�rj egy kicsit.';
$lang['Empty_subject'] = '�j t�ma ind�t�s�n� meg kell hat�roznod a c�met.';
$lang['Empty_message'] = 'Nem k�ldhetsz �res hozz�sz�l�st.';
$lang['Forum_locked'] = 'Z�rt f�rum; nem k�ldhetsz hozz�sz�l�st, v�laszt, nem szerkesztheted a t�m�kat.';
$lang['Topic_locked'] = 'Z�rt t�ma; nem szerkesztheted a hozz�sz�l�sokat, vagy nem k�sz�thetsz v�laszt.';
$lang['No_post_id'] = 'A szerkeszt�shez v�lassz ki egy hozz�sz�l�st';
$lang['No_topic_id'] = 'V�lasz�zenet k�ld�s�hez v�lassz ki egy topicot';
$lang['No_valid_mode'] = 'Csak k�ldhetsz, szerkeszthetsz, vagy id�zhetsz hozz�sz�l�st, v�laszt. L�pj vissza, �s pr�b�ld �jra.';
$lang['No_such_post'] = 'Nincsen ilyen hozz�sz�l�s. L�pj vissza, �s pr�b�ld �jra.';
$lang['Edit_own_posts'] = 'Csak szerkesztheted a hozz�sz�l�saidat.';
$lang['Delete_own_posts'] = 'Csak t�r�lheted a hozz�sz�l�saidat.';
$lang['Cannot_delete_replied'] = 'Nem t�r�lhetsz a hozz�sz�l�st, melyre m�r �rkezett v�lasz.';
$lang['Cannot_delete_poll'] = 'Nem t�r�lhetsz akt�v szavaz�st.';
$lang['Empty_poll_title'] = 'Adj meg egy c�met a szavaz�snak.';
$lang['To_few_poll_options'] = 'Legal�bb k�t v�laszt�si lehet�s�get adj meg.';
$lang['To_many_poll_options'] = 'T�l sok v�laszt�si lehet�s�get adt�l meg.';
$lang['Post_has_no_poll'] = 'A hozz�sz�l�snak nincs szavaz�sa.';
$lang['Already_voted'] = 'Egyszer m�r szavazt�l.';
$lang['No_vote_option'] = 'V�lassz egy lehet�s�get a szavaz�sn�l.';

$lang['Add_poll'] = 'Szavaz�s hozz�ad�sa';
$lang['Add_poll_explain'] = 'Ha nem akarsz szavaz�st adni a t�m�hoz, hagyd �resen a mez�ket.';
$lang['Poll_question'] = 'A szavaz�s k�rd�se';
$lang['Poll_option'] = 'V�laszt�si lehet�s�g';
$lang['Add_option'] = 'Hozz�ad�s';
$lang['Update'] = 'Friss�t�s';
$lang['Delete'] = 'T�rl�s';
$lang['Poll_for'] = 'A szavaz�s �rv�nyes';
$lang['Days'] = 'napig'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Hagyd �resen, ha soha sem j�r le a szavaz�s ]';
$lang['Delete_poll'] = 'Szavaz�s t�rl�se';

$lang['Disable_HTML_post'] = 'HTML kikapcsol�sa a hozz�sz�l�sban';
$lang['Disable_BBCode_post'] = 'BBCode kikapcsol�sa a hozz�sz�l�sban';
$lang['Disable_Smilies_post'] = 'Emotikonok kikapcsol�sa a hozz�sz�l�sban';

$lang['HTML_is_ON'] = 'HTML <u>bekapcsolva</u>';
$lang['HTML_is_OFF'] = 'HTML <u>kikapcsolva</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>bekapcsolva</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>kikapcsolva</u>';
$lang['Smilies_are_ON'] = 'Emotikonok <u>bekapcsolva</u>';
$lang['Smilies_are_OFF'] = 'Emotikonok <u>kikapcsolva</u>';

$lang['Attach_signature'] = 'Al��r�s hozz�ad�sa (az al��r�s megv�ltoztathat� a Profilban)';
$lang['Notify'] = '�rtes�t�s, ha v�lasz �rkezik';
$lang['Delete_post'] = 'Hozz�sz�l�s t�rl�se';

$lang['Stored'] = 'A hozz�sz�l�s sikeresen beker�lt a f�rumba!';
$lang['Deleted'] = 'A hozz�sz�l�s t�rl�se siker�lt.';
$lang['Poll_delete'] = 'A szavaz�s t�rl�se siker�lt.';
$lang['Vote_cast'] = 'Szavaz�s elfogadva.';

$lang['Topic_reply_notification'] = 'T�ma-v�lasz eml�keztet�';

$lang['bbcode_b_help'] = 'F�lk�v�r: [b]sz�veg[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'D�lt: [i]sz�veg[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Al�h�z�s: [u]sz�veg[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Id�zet: [quote]sz�veg[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'K�d: [code]k�d[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]sz�veg[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Rendezett lista: [list=]sz�veg[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'K�p beilleszt�se: [img]http://k�p_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL beilleszt�se: [url]http://url[/url]vagy[url=http://url]URL sz�veg[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Nyitott bbCode tag-ek lez�r�sa';
$lang['bbcode_s_help'] = 'Bet�sz�n: [color=red]text[/color] \(a \"color=#FF0000 is haszn�lhat�\)';
$lang['bbcode_f_help'] = 'Bet�m�ret: [size=x-small]kis sz�veg[/size]';

$lang['Emoticons'] = 'Emotikonok';
$lang['More_emoticons'] = 'A t�bbi emotikon megtekint�se';

$lang['Font_color'] = 'Bet�sz�n';
$lang['color_default'] = 'Alap';
$lang['color_dark_red'] = 'S�t�tpiros';
$lang['color_red'] = 'Piros';
$lang['color_orange'] = 'Narancs';
$lang['color_brown'] = 'Barna';
$lang['color_yellow'] = 'S�rga';
$lang['color_green'] = 'Z�ld';
$lang['color_olive'] = 'Ol�va';
$lang['color_cyan'] = 'Ci�n';
$lang['color_blue'] = 'K�k';
$lang['color_dark_blue'] = 'S�t�tk�k';
$lang['color_indigo'] = 'Indig�';
$lang['color_violet'] = 'Ibolya';
$lang['color_white'] = 'Feh�r';
$lang['color_black'] = 'Fekete';

$lang['Font_size'] = 'Bet�m�ret';
$lang['font_tiny'] = 'Apr�';
$lang['font_small'] = 'Kicsi';
$lang['font_normal'] = 'Norm�l';
$lang['font_large'] = 'Nagy';
$lang['font_huge'] = '�ri�si';

$lang['Close_Tags'] = 'Tag-ek lez�r�sa';
$lang['Styles_tip'] = 'Tipp: st�lusok gyors alkalmaz�sa az adott sz�vegen.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Priv�t �zenet';

$lang['Login_check_pm'] = 'Priv�t �zeneteid olvas�s�hoz be kell jelentkezned';
$lang['New_pms'] = '%d �j priv�t �zeneted van'; // You have 2 new messages
$lang['New_pm'] = '%d �j priv�t �zeneted van'; // You have 1 new message
$lang['No_new_pm'] = 'Nincsen �j priv�t �zeneted';
$lang['Unread_pms'] = '%d olvasatlan priv�t �zeneted van';
$lang['Unread_pm'] = '%d olvasatlan priv�t �zeneted van';
$lang['No_unread_pm'] = 'Nincsen olvasatlan priv�t �zeneted';
$lang['You_new_pm'] = '�j priv�t �zenet �rkezett';
$lang['You_new_pms'] = '�j priv�t �zenet �rkezett';
$lang['You_no_new_pm'] = 'Nincs �j priv�t �zenet';

$lang['Unread_message'] = 'Olvasatlan �zenetek';
$lang['Read_message'] = 'Olvasott �zenetek';

$lang['Read_pm'] = '�zenet olvas�sa';
$lang['Post_new_pm'] = '�zenet k�ld�se';
$lang['Post_reply_pm'] = 'V�lasz az �zenetre';
$lang['Post_quote_pm'] = '�zenet id�z�se';
$lang['Edit_pm'] = '�zenet szerkeszt�se';

$lang['Inbox'] = '�rkezett fi�k';
$lang['Outbox'] = 'Kimen� fi�k';
$lang['Savebox'] = 'Ment�s fi�k';
$lang['Sentbox'] = 'Elk�ld�tt fi�k';
$lang['Flag'] = 'Jel�lt';
$lang['Subject'] = 'T�ma';
$lang['From'] = 'Felad�';
$lang['To'] = 'C�mzett';
$lang['Date'] = 'D�tum';
$lang['Mark'] = 'Megjel�l�s';
$lang['Sent'] = 'Elk�ld�tt';
$lang['Saved'] = 'Elmentett';
$lang['Delete_marked'] = 'Kijel�lt t�rl�se';
$lang['Delete_all'] = '�sszes t�rl�se';
$lang['Save_marked'] = 'Kijel�lt ment�se';
$lang['Save_message'] = '�zenet ment�se';
$lang['Delete_message'] = '�zenet t�rl�se';

$lang['Display_messages'] = '�zenetek megjelen�t�se'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '�sszes �zenet';

$lang['No_messages_folder'] = 'Nincs �zeneted ebben a fi�kban';

$lang['PM_disabled'] = 'Nincs lehet�s�g Priv�t �zenet k�ld�s�re.';
$lang['Cannot_send_privmsg'] = 'Sajnos nem k�ldhetsz Priv�t �zeneteket. L�pj kapcsolatba az Adminisztr�torral.';
$lang['No_to_user'] = 'Az �zenet k�ld�s�hez meg kell adnod a felad�nevet.';
$lang['No_such_user'] = 'Ilyen nev� felhaszn�l� nem l�tezik.';

$lang['Disable_HTML_pm'] = 'HTML kikapcsol�sa az �zenetben';
$lang['Disable_BBCode_pm'] = 'BBCode kikapcsol�sa az �zenetben';
$lang['Disable_Smilies_pm'] = 'Emotikonok kikapcsol�sa az �zenetben';

$lang['Message_sent'] = '�zenet elk�ldve.';

$lang['Click_return_inbox'] = 'Kattints %side%s, hogy visszat�rj az �rkezett �zenetekhez';
$lang['Click_return_index'] = 'Kattints %side%s, hogy visszat�rj a Tartalomjegyz�khez';

$lang['Send_a_new_message'] = '�j Priv�t �zenet k�ld�se';
$lang['Send_a_reply'] = 'V�lasz a Priv�t �zenetre';
$lang['Edit_message'] = 'Priv�te �zenet szerkeszt�se';

$lang['Notification_subject'] = '�j Priv�t �zenet �rkezett!';

$lang['Find_username'] = 'Felhaszn�l�n�v keres�se';
$lang['Find'] = 'Tal�lat';
$lang['No_match'] = 'Nincs tal�lat.';

$lang['No_post_id'] = 'No post ID was specified';
$lang['No_such_folder'] = 'Nem l�tezik ilyen fi�k';
$lang['No_folder'] = 'Nincs fi�k meghat�rozva';

$lang['Mark_all'] = '�sszes kijel�l�se';
$lang['Unmark_all'] = '�sszes kijel�l�s�nek megsz�ntet�se';

$lang['Confirm_delete_pm'] = 'Biztosan t�r�lni akarod az �zenetet?';
$lang['Confirm_delete_pms'] = 'Biztosan t�r�lni akarod az �zeneteket?';

$lang['Inbox_size'] = 'Az �rkezett fi�kod %d%%-ig tele van'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Az Elk�ld�tt fi�kod %d%%-ig tele van';
$lang['Savebox_size'] = 'A Ment�s fi�kod %d%%-ig tele van';

$lang['Click_view_privmsg'] = 'Kattints %side%s az �rkezett fi�kod megtekint�s�hez';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil megtekint�se :: %s'; // %s is username
$lang['About_user'] = 'Inform�ci�: %s'; // %s is username

$lang['Preferences'] = 'Be�ll�t�sok';
$lang['Items_required'] = 'A csillaggal megjel�lt mez�k kit�lt�se k�telez�.';
$lang['Registration_info'] = 'Regisztr�ci� inform�ci�';
$lang['Profile_info'] = 'Profil inform�ci�';
$lang['Profile_info_warn'] = 'Ezeket az inform�ci�kat mindenki l�tni fogja';
$lang['Avatar_panel'] = 'Avatar be�ll�t�s';
$lang['Avatar_gallery'] = 'Avatar gal�ria';

$lang['Website'] = 'Weboldal';
$lang['Location'] = 'Tart�zkod�si hely';
$lang['Contact'] = 'Kapcsolat';
$lang['Email_address'] = 'Email c�m';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Priv�t �zenet k�ld�se';
$lang['Hidden_email'] = '[ Rejtett ]';
$lang['Search_user_posts'] = 'Felhaszn�l� hozz�sz�l�sainak keres�se';
$lang['Interests'] = '�rdekl�d�si k�r';
$lang['Occupation'] = 'Foglalkoz�s';
$lang['Poster_rank'] = 'Rang';

$lang['Total_posts'] = '�sszes hozz�sz�l�sa';
$lang['User_post_pct_stats'] = 'Az �sszes %.2f%%-ka'; // 1.25% of total
$lang['User_post_day_stats'] = 'Naponta %.2f hozz�sz�l�s'; // 1.5 posts per day
$lang['Search_user_posts'] = '%s hozz�sz�l�sainak keres�se'; // Find all posts by username

$lang['No_user_id_specified'] = 'A felhaszn�l� nem l�tezik.';
$lang['Wrong_Profile'] = 'Nem m�dos�thatod m�s Profilj�t.';

$lang['Only_one_avatar'] = 'Csak egy Avatart v�lassz ki';
$lang['File_no_data'] = 'A megadott webc�m nem tartalmaz adatot';
$lang['No_connection_URL'] = 'A megadott webc�mhez nem lehet csatlakozni';
$lang['Incomplete_URL'] = 'A megadott webc�m hi�nyos';
$lang['Wrong_remote_avatar_format'] = 'A t�voli avatar webc�me nem �rv�nyes';
$lang['No_send_account_inactive'] = 'A jelsz� sajnos nem k�rhet� le, mivel a felhaszn�l�n�v jelenleg inakt�v. L�pj kapcsolatba az Adminisztr�torral.';

$lang['Always_smile'] = 'Mindig enged�lyezze a Emotikonokat';
$lang['Always_html'] = 'Mindig enged�lyezze a HTML-t';
$lang['Always_bbcode'] = 'Mindig enged�lyezze a BBCode-ot';
$lang['Always_add_sig'] = 'Mindig csatolja az al��r�somat';
$lang['Always_notify'] = 'Mindig �rtes�tsen, ha v�lasz �rkezik';
$lang['Always_notify_explain'] = 'K�ld egy emailt, ha hozz�sz�l�s �rkezik az adott t�m�ban. Ez b�rmikor megv�ltoztathat�, ha egy �jabb hozz�sz�l�st k�ldesz.';

$lang['Board_style'] = 'St�lus';
$lang['Board_lang'] = 'Nyelv';
$lang['No_themes'] = 'Nincsenek st�lust�m�k az adatb�zisban';
$lang['Timezone'] = 'Id�z�na';
$lang['Date_format'] = 'D�tum form�tum';
$lang['Date_format_explain'] = 'A PHP date() <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> szerint haszn�land�.';
$lang['Signature'] = 'Al��r�s';
$lang['Signature_explain'] = 'A hozz�sz�l�sok v�g�re ker�l� sz�veg. Maximum %d ckarakter lehet';
$lang['Public_view_email'] = 'Emailc�m megjelen�t�se';

$lang['Current_password'] = 'Jelenlegi jelsz�';
$lang['New_password'] = '�j jelsz�';
$lang['Confirm_password'] = 'Jelsz� megism�tl�se';
$lang['Confirm_password_explain'] = '�j jelsz�t kell megadnod, ha meg akarod v�ltoztatni a r�git, vagy ha az emailc�met akarsz cser�lni.';
$lang['password_if_changed'] = 'Csak akkor kell megadnod a jelsz�t, ha meg akarod v�ltoztatni';
$lang['password_confirm_if_changed'] = 'A fenti jelsz� �rv�nyes�t�s�hez sz�ks�ges';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Egy kis k�p, mely a hozz�sz�l�sban a nevedn�l l�that�. Egyszerre csak
egy k�p jelent�t�dik meg; nem lehet sz�lesebb, mint %d pixel, �s nem lehet magasabb, mint %d
pixel. A m�rete nem lehet nagyobb, mint %dkByte.';
$lang['Upload_Avatar_file'] = 'Avatar felt�lt�se a sz�m�t�g�pr�l';
$lang['Upload_Avatar_URL'] = 'Avatar felt�lt�se webc�mr�l';
$lang['Upload_Avatar_URL_explain'] = '�rd be az Avatar k�p�nek webc�m�t (a k�p �t lesz m�solva erre az oldalra).';
$lang['Pick_local_Avatar'] = 'Avatar kiv�laszt�sa a gal�ri�b�l';
$lang['Link_remote_Avatar'] = 'Avatar k�p belinkel�se';
$lang['Link_remote_Avatar_explain'] = '�rd be az Avatar k�p�nek webc�m�t, amelyet be szeretn�l linkelni (a k�p nem lesz �tm�solva erre az oldalra).';
$lang['Avatar_URL'] = 'Avatar k�p�nek webc�me';
$lang['Select_from_gallery'] = 'Avatar kiv�laszt�sa a gal�ri�b�l';
$lang['View_avatar_gallery'] = 'Gal�ria megmutat�sa';

$lang['Select_avatar'] = 'Avatar kiv�laszt�sa';
$lang['Return_profile'] = 'M�gsem';
$lang['Select_category'] = 'Kateg�ria v�laszt�sa';

$lang['Delete_Image'] = 'K�p t�rl�se';
$lang['Current_Image'] = 'Jelenlegi k�p';

$lang['Notify_on_privmsg'] = '�rtes�t�s �j Priv�t �zenet �rkez�sekor';
$lang['Popup_on_privmsg'] = 'Felugr� ablak �j Priv�t �zenet �rkez�sekor';
$lang['Popup_on_privmsg_explain'] = 'N�h�ny st�lus-t�ma �j ablakot nyit, ha �j �zeneted �rkezik.';
$lang['Hide_user'] = 'Jelenl�t elrejt�se';

$lang['Profile_updated'] = 'A Profil megv�ltozott';
$lang['Profile_updated_inactive'] = 'A Profil megv�ltozott, de mivel n�h�ny alapvet� inform�ci�n
v�ltoztatt�l, �gy a hozz�f�r�sed inakt�vra v�ltozott. Ellen�rizd az Emailedet, hogy hogyan tudod
reaktiv�lni, vagy ha ehhez Adminisztr�tor sz�ks�ges, v�rj m�g � reaktiv�lja a hozz�f�r�sedet.';

$lang['Password_mismatch'] = 'A be�rt jelszavak nem egyeznek meg.';
$lang['Current_password_mismatch'] = 'A jelenlegi jelsz� nem egyezik meg az adatb�zisban tal�lhat�val.';
$lang['Password_long'] = 'A jelsz� nem lehet t�bb mint 32 karakter.';
$lang['Too_many_registers'] = 'T�l sok regisztr�ci� t�rt�nt. Pr�b�ld k�s�bb.';
$lang['Username_taken'] = 'Ez a felhaszn�l�n�v m�r foglalt.';
$lang['Username_invalid'] = 'A felhaszn�l�n�v �rv�nytelen karaktert tartalmaz (mint pld. \).';
$lang['Username_disallowed'] = 'Ez a felhaszn�l�n�v nem enged�lyezett.';
$lang['Email_taken'] = 'Ezt az emailc�met m�r regisztr�lta egy m�sik felhaszn�l�.';
$lang['Email_banned'] = 'Ez az emailc�m le van tiltva.';
$lang['Email_invalid'] = '�rv�nytelen emailc�m.';
$lang['Signature_too_long'] = 'T�l hossz� al��r�s.';
$lang['Fields_empty'] = 'A csillaggal jel�lt mez�k kit�lt�se k�telez�.';
$lang['Avatar_filetype'] = 'Az avatar k�p t�pusa csak JPG, GIF vagy PNG lehet';
$lang['Avatar_filesize'] = 'Az avatar k�p nem lehet nagyobb mint %d KByte'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Az avatar nem lehet nagyobb mint %d pixel sz�les �s %d pixel magas';

$lang['Welcome_subject'] = '�dv�zl�nk a(z) %s f�rum�ban'; // Welcome to my.com forums
$lang['New_account_subject'] = '�j felhaszn�l�';
$lang['Account_activated_subject'] = 'Felhaszn�l� aktiv�lva';

$lang['Account_added'] = 'K�sz�nj�k a regisztr�ci�dat, a regisztr�ci� sikeres volt. Most m�r bejelentkezhetsz a neveddel, �s a hozz� tartoz� jelsz�val.';
$lang['Account_inactive'] = 'A regisztr�ci� sikeres volt, de biztons�gi okokb�l egy levelet k�ldt�nk az �ltalad megadott emailc�mre, mellyel ellen�rizz�k a regisztr�ci�t. Tov�bbi inform�ci�k az emailben.';
$lang['Account_inactive_admin'] = 'A regisztr�ci� sikeres volt, de a f�rum haszn�lat�hoz az Adminisztr�tor j�v�hagy�sa sz�ks�ges. R�videsen �rtes�t az regisztr�ci�d befejez�s�r�l, a felhaszn�l�neved aktiv�l�s�r�l.';
$lang['Account_active'] = 'A felhaszn�l�neved aktiv�lva van. K�sz�nj�k a regisztr�ci�t.';
$lang['Account_active_admin'] = 'A felhaszn�l� aktiv�lva van.';
$lang['Reactivate'] = 'Felhaszn�l�n�v reaktiv�l�sa!';
$lang['Already_activated'] = 'M�r aktiv�ltad a felhaszn�l�nevedet.';
$lang['COPPA'] = 'A felhaszn�l�n�v elk�sz�lt, de ellen�rz�s �gy�ben el�bb n�zd meg az emailc�medet.';

$lang['Registration'] = 'Felhaszn�l�i szab�lyzat';
$lang['Reg_agreement'] = 'Noha az Adminisztr�tor, �s a Moder�torok mindent megtesznek, hogy min�l hamarabb elt�vol�ts�k, vagy t�r�lj�k a F�rumb�l az �ltal�nosan kifog�solhat� anyagokat, lehetetlen, hogy minden egyes hozz�sz�l�st �tn�zzenek. Ebb�l ad�d�an elfogadom, hogy a F�rumon tal�lhat� �sszes hozz�sz�l�s a szerz� n�zeteit t�kr�zi, �s nem az Adminisztr�torok, Moder�torok, vagy a webmester �ll�spontj�t - �gy �k nem v�llalnak felel�ss�get a hozz�sz�l�sok tartalm��rt.<br /><br
/>Beleegyezek, hogy nem k�ld�k s�rteget�, obszc�n, vulg�ris, r�galmaz�, gy�l�letkelt�, t�mad�,
vagy b�rmely m�s olyan tartalmat, illetve anyagot, mely t�rv�nyt s�rt. Sem olyan anyagot, mely ellent�tes az
�ltal�nos k�z�zl�ssel, mivel ez egy nyilv�nos f�rum. A fentiek megs�rt�se azonnali �s v�gleges t�rl�st von maga ut�n.<br
/>Elfogadom, hogy a F�rum webmester�nek, az Adminisztr�tornak �s b�rmely Moder�tornak jog�ban �ll
elt�vol�tani, szerkeszteni a hozz�sz�l�saimat, vagy lez�rni az �ltalam nyitott t�m�kat,
amennyiben �gy �t�lik meg hogy ez sz�ks�ges. Mint felhaszn�l�, elfogadom, hogy n�h�ny, �ltalam
megadott inform�ci� t�rol�sra ker�l a F�rum adatb�zis�ban. Ezek az adatok semmilyen m�don nem ker�lnek ki egy
harmadik f�lhez, de sem az Adminisztr�tor sem a Moder�torok nem tudnak felel�ss�get v�llalni, egy esetleges "hacker-t�mad�sra".<br /><br />A F�rum "cookie"-kat
(s�tiket) haszn�l, hogy adatokat t�roljon a felhaszn�l� sz�m�t�g�p�n, de egyik sem tartalmaz szem�lyes
adatokat, melyek a regisztr�ci�n�l ker�ltek megad�sra: a cookie-k puszt�n technikai szempontb�l sz�ks�gesek. A megadott emailc�m csak a regisztr�ci� (�s �j jelsz�) �rv�nyes�t�s�n�l ker�l
felhaszn�l�sra.<br /><br />A Regisztr�ci�ra kattintva elfogadom a fenti felt�teleket.';

$lang['Agree_under_13'] = 'Elfogadom a felt�teleket, �s 13 �vesn�l <b>fiatalabb</b> vagyok';
$lang['Agree_over_13'] = 'Elfogadom a felt�teleket';
$lang['Agree_not'] = 'Nem fogadom el a felt�teleket';

$lang['Wrong_activation'] = 'Az aktiv�ci�s kulcs nem egyezik meg az adatb�zisban l�v�vel.';
$lang['Send_password'] = '�j jelsz� k�ld�se';
$lang['Password_updated'] = 'Az �j jelsz� elk�sz�lt, ellen�rizd az emailc�medet a tov�bbi inform�ci�k�rt.';
$lang['No_email_match'] = 'A megadott emailc�m nem egyezik meg a hozz� adott felhaszn�l�n�vhez.';
$lang['New_password_activation'] = '�j jelsz� aktiv�ci�';
$lang['Password_activated'] = 'A hozz�f�r�sedet reaktiv�ltuk. A bejelentkez�shez �rd be az emailben megadott jelsz�t.';

$lang['Send_email_msg'] = 'Email �zenet k�ld�se';
$lang['No_user_specified'] = 'Nem adt�l meg felhaszn�l�nevet';
$lang['User_prevent_email'] = 'A felhaszn�l� nem akar emailokat fogadni. Pr�b�lj Priv�t �zenetet k�ldeni.';
$lang['User_not_exist'] = 'Ilyen felhaszn�l� nem l�tezik';
$lang['CC_email'] = 'M�solat k�ld�se magadnak';
$lang['Email_message_desc'] = 'Az �zenet sima sz�vegk�nt lesz elk�ldve, ez�rt ne haszn�lj HTML-t vagy BBCode tageket. A v�laszc�m a te emailc�med lesz.';
$lang['Flood_email_limit'] = 'Most nem k�ldhetsz t�bb emailt, pr�b�ld k�s�bb.';
$lang['Recipient'] = 'C�mzett';
$lang['Email_sent'] = 'Email elk�ldve.';
$lang['Send_email'] = 'Email k�ld�se';
$lang['Empty_subject_email'] = 'K�telez� a t�ma megad�sa.';
$lang['Empty_message_email'] = '�res �zenet.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Az �rv�nyes�t�si k�d hib�s.';
$lang['Too_many_registers'] = 'Egyszerre t�l sok regisztr�ci�val pr�b�lkozt�l. Pr�b�ld k�s�bb.';
$lang['Confirm_code_impaired'] = 'Ha l�t�si (vagy egy�b) probl�m�k folyt�n nem tudn�d elolvasni a k�dot, vedd fel a kapcsolatot az %sAdminisztr�torral%s.';
$lang['Confirm_code'] = '�rv�nyes�t�si k�d';
$lang['Confirm_code_explain'] = 'A k�dot �gy kell beg�pelni, ahogy itt l�tod. �gyelj a kis �s nagybet�kre, a 0 pedig egy �tl�s vonallal van �th�zva.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Rendez�si m�d kiv�laszt�sa';
$lang['Sort'] = 'Rendez�s';
$lang['Sort_Top_Ten'] = 'A legt�bb hozz�sz�l�st k�ld� 10 felhaszn�l�';
$lang['Sort_Joined'] = 'Regisztr�ci� d�tuma';
$lang['Sort_Username'] = 'Felhaszn�l�n�v';
$lang['Sort_Location'] = 'Tart�zkod�si hely';
$lang['Sort_Posts'] = '�sszes hozz�sz�l�s';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Weboldal';
$lang['Sort_Ascending'] = 'N�vekv�';
$lang['Sort_Descending'] = 'Cs�kken�';
$lang['Order'] = 'Sorrend';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Csoport vez�rl�pult';
$lang['Group_member_details'] = 'Csoporttags�g R�szletek';
$lang['Group_member_join'] = 'Csatlakoz�s egy csoporthoz';

$lang['Group_Information'] = 'Csoport inform�ci�';
$lang['Group_name'] = 'Csoportn�v';
$lang['Group_description'] = 'Csoport le�r�s';
$lang['Group_membership'] = 'Csoporttags�g';
$lang['Group_Members'] = 'Csoporttagok';
$lang['Group_Moderator'] = 'Csoport Moder�tor';
$lang['Pending_members'] = 'K�relmezett tags�gok';

$lang['Group_type'] = 'Csoport�pus';
$lang['Group_open'] = 'Nyitott csoport';
$lang['Group_closed'] = 'Z�rt csoport';
$lang['Group_hidden'] = 'Rejtett csoport';

$lang['Current_memberships'] = 'Aktu�lis tags�gok';
$lang['Non_member_groups'] = 'Nem-tags�gos csoportok';
$lang['Memberships_pending'] = 'Tags�gi k�relmek';

$lang['No_groups_exist'] = 'Nem l�tez� csoport';
$lang['Group_not_exist'] = 'A megadott csoport nem l�tezik';

$lang['Join_group'] = 'Csatlakoz�s a csoporthoz';
$lang['No_group_members'] = 'A csoportnak nincsenek tagjai';
$lang['Group_hidden_members'] = 'A csoport rejtett, nem tudod megn�zni a tagjait';
$lang['No_pending_group_members'] = 'A csoportnak nincsenek f�gg� k�relmez�sben l�v� tagjai';
$lang['Group_joined'] = 'A jelentkez�sed sikeres ebbe a csoportba<br />a Csoport Moder�tor �rtes�t ha elfogadta a jelentkez�sedet.';
$lang['Group_request'] = 'A csatlakoz�si k�relmed elk�sz�lt.';
$lang['Group_approved'] = 'Csatlakoz�si k�relmed elfogadva.';
$lang['Group_added'] = 'Hozz� lett�l adva ehez a csoporthoz.';
$lang['Already_member_group'] = 'M�r tagja vagy ennek a csoportnak';
$lang['User_is_member_group'] = 'A felhaszn�l� m�r most is tagja ennek a csoportnak';
$lang['Group_type_updated'] = 'Sikeresen megv�ltozott a Csoport t�pusa.';

$lang['Could_not_add_user'] = 'A kiv�lasztott felhaszn�l� nem l�tezik.';
$lang['Could_not_anon_user'] = 'Nem k�sz�thetsz N�vtelen csoporttagot.';

$lang['Confirm_unsub'] = 'Biztos le akarod mondani ezt a csoporttags�got?';
$lang['Confirm_unsub_pending'] = 'A jelentkez�sed m�g nincs j�v�hagyva ehhez a csoporthoz, biztosan le akarod mondani?';

$lang['Unsub_success'] = 'Sikeresen lemondtad a Csoporttags�got.';

$lang['Approve_selected'] = 'Kiv�lasztottak elfogad�sa';
$lang['Deny_selected'] = 'Kiv�laszottak elutas�t�sa';
$lang['Not_logged_in'] = 'Be kell jelentkezned, hogy csatlakozhass egy csoporthoz.';
$lang['Remove_selected'] = 'Kijel�lt elt�vol�t�sa';
$lang['Add_member'] = 'Tag hozz�ad�sa';
$lang['Not_group_moderator'] = 'Nem vagy a Csoport Moder�tora, �gy nem v�gezheted el ezeket a m�dos�t�sokat.';

$lang['Login_to_join'] = 'Jelentkezz be hogy csatlakozhass egy csoporthoz, vagy hogy ir�ny�tsd a csoporttags�gokat';
$lang['This_open_group'] = 'Nyitott csoport, kattints a Tags�g k�relmez�s�shez';
$lang['This_closed_group'] = 'Z�rt csoport, t�bb felhaszn�l� nem enged�lyezett';
$lang['This_hidden_group'] = 'Enn�l a rejtett csoportn�l nem enged�lyezett az automatikus felhaszn�l�-hozz�ad�s';
$lang['Member_this_group'] = 'A csoport tagja vagy';
$lang['Pending_this_group'] = 'A csoporttags�god egyel�re f�gg�ben van';
$lang['Are_group_moderator'] = 'Csoport Moder�tor vagy';
$lang['None'] = 'senki';

$lang['Subscribe'] = 'Jelentkez�s';
$lang['Unsubscribe'] = 'Lemond�s';
$lang['View_Information'] = 'Inform�ci� megtekint�se';


//
// Search
//
$lang['Search_query'] = 'Keres�si felt�tel';
$lang['Search_options'] = 'Keres�si be�ll�t�sok';

$lang['Search_keywords'] = 'Keres�s kulcssz� �ltal';
$lang['Search_keywords_explain'] = 'Haszn�lhatod az <u>�S</u> sz�t, hogy a keres�sben megadott �sszes sz� benne legyen a tal�latban, a <u>VAGY</u> sz�t mellyel a \"benne lehet\" szavakat v�laszthatod el, �s a <u>NEM</u> sz�t, mellyel kiz�rhatsz szavakat. Haszn�lj *-ot a r�szleges szavakhoz.';
$lang['Search_author'] = 'Szerz� keres�se';
$lang['Search_author_explain'] = 'Haszn�lj *-ot a r�szleges szavakhoz';

$lang['Search_for_any'] = 'Keres�s b�rmely kifejez�sre';
$lang['Search_for_all'] = 'Keres�s az �sszes kifejez�sre';
$lang['Search_title_msg'] = 'Keres�s t�ma c�mre, �s sz�vegre';
$lang['Search_msg_only'] = 'Csak sz�vegben keresse';

$lang['Return_first'] = 'A tal�lt t�m�k els�'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karakter�nek megjelen�t�se';

$lang['Search_previous'] = 'R�gebbi keres�s'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Rendez�si felt�tel';
$lang['Sort_Time'] = 'K�ld�s ideje';
$lang['Sort_Post_Subject'] = 'T�ma';
$lang['Sort_Topic_Title'] = 'T�ma c�me';
$lang['Sort_Author'] = 'Szerz�';
$lang['Sort_Forum'] = 'F�rum';

$lang['Display_results'] = 'Tal�latok megjelen�t�se';
$lang['All_available'] = '�sszes tal�lat megjelen�t�se';
$lang['No_searchable_forums'] = 'Nincs jogod keresni a f�rumban.';

$lang['No_search_match'] = 'A keres�si felt�teleknek egy f�rum �s egy t�ma sem felelt meg.';
$lang['Found_search_match'] = '%d tal�lat'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d tal�lat'; // eg. Search found 24 matches

$lang['Close_window'] = 'Ablak bez�r�sa';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Csak %s k�ldhet K�zlem�nyt ebbe a f�rumba.';
$lang['Sorry_auth_sticky'] = 'Csak %s k�ldhet Kiemelt �zenetet ebbe a f�rumba.';
$lang['Sorry_auth_read'] = 'Csak %s olvashatja a f�rum t�m�it.';
$lang['Sorry_auth_post'] = 'Csak %s nyithat �j t�m�t ebben a f�rumban.';
$lang['Sorry_auth_reply'] = 'Csak %s v�laszolhat egy hozz�sz�l�sra ebben a f�rumban.';
$lang['Sorry_auth_edit'] = 'Csak %s szerkesztheti a hozz�sz�l�sokat ebben a f�rumban.';
$lang['Sorry_auth_delete'] = 'Csak %s t�r�lhet hozz�sz�l�sokat ebben a f�rumban.';
$lang['Sorry_auth_vote'] = 'Csak %s szavazhat ebben a f�rumban.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>n�vtelen felhaszn�l�k</b>';
$lang['Auth_Registered_Users'] = '<b>regisztr�lt felhaszn�l�k</b>';
$lang['Auth_Users_granted_access'] = '<b>felhaszn�l�k k�l�nleges enged�llyel</b>';
$lang['Auth_Moderators'] = '<b>moder�torok</b>';
$lang['Auth_Administrators'] = '<b>adminisztr�torok</b>';

$lang['Not_Moderator'] = 'Nem vagy a f�rum moder�tora.';
$lang['Not_Authorised'] = 'Nem vagy jogosult erre a m�veletre';

$lang['You_been_banned'] = 'Ki lett�l tiltva a F�rumr�l<br />Tov�bbi inform�ci��rt vedd fel a kapcsolatot a webmesterrel, vagy az Adminisztr�torral.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 Regisztr�lt felhaszn�l� �s  '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d Regisztr�lt felhaszn�l� �s '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d Regisztr�lt felhaszn�l� �s '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 Rejtett felhaszn�l� van jelen'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Rejtett felhaszn�l� van jelen'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Rejtett felhaszn�l� van jelen'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d Vend�g van jelen'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 Vend�g van jelen'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d Vend�g van jelen'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Jelenleg egy felhaszn�l� sem b�ng�szi a F�rum oldalait';

$lang['Online_explain'] = 'A fenti adat az elm�lt 5 perc alapj�n k�sz�lt';

$lang['Forum_Location'] = 'F�rum helye';
$lang['Last_updated'] = 'Legut�bb friss�tett';

$lang['Forum_index'] = 'F�rum index';
$lang['Logging_on'] = 'Bejelentkez�s';
$lang['Posting_message'] = '�zenet k�ld�se';
$lang['Searching_forums'] = 'F�rumok keres�se';
$lang['Viewing_profile'] = 'Profil megtekint�se';
$lang['Viewing_online'] = 'Jelenl�v� felhaszn�l�k megtekint�se';
$lang['Viewing_member_list'] = 'Taglista megtekint�se';
$lang['Viewing_priv_msgs'] = 'Priv�t �zenetek megtekint�se';
$lang['Viewing_FAQ'] = 'Gy.I.K. megtekint�se';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moder�tor vez�rl�pult';
$lang['Mod_CP_explain'] = 'Az al�bbi mez�k haszn�lat�val lehet kezelni a f�rumot, pld. lez�r�s, megnyit�s, �thelyez�s, t�rl�s.';

$lang['Select'] = 'Kiv�laszt';
$lang['Delete'] = 'T�r�l';
$lang['Move'] = '�thelyez';
$lang['Lock'] = 'Bez�r';
$lang['Unlock'] = 'Megnyit';

$lang['Topics_Removed'] = 'A kiv�laszott t�m�k sikeresen t�r�lve lettek az adatb�zisb�l.';
$lang['Topics_Locked'] = 'A kiv�laszott t�m�k le lettek z�rva.';
$lang['Topics_Moved'] = 'A kiv�laszott t�m�k �thelyez�dtek.';
$lang['Topics_Unlocked'] = 'A kiv�laszott t�m�k megny�ltak.';
$lang['No_Topics_Moved'] = 'Nem lett �thelyezve t�ma.';

$lang['Confirm_delete_topic'] = 'Biztosan el akarod t�vol�tani a kiv�laszott t�m�(ka)t?';
$lang['Confirm_lock_topic'] = 'Biztosan le akarod z�rni a kiv�lasztott t�m�(ka)t?';
$lang['Confirm_unlock_topic'] = 'Biztosan meg akarod nyitni a kiv�lasztott t�m�(ka)t?';
$lang['Confirm_move_topic'] = 'Biztosan �t akarod helyezni a kiv�lasztott t�m�(ka)t?';

$lang['Move_to_forum'] = '�thelyez�s a k�vetkez� f�rumba';
$lang['Leave_shadow_topic'] = '�rny�k-t�ma hagy�sa a r�gi f�rumban.';

$lang['Split_Topic'] = 'T�ma-sz�tv�laszt� vez�l�pult';
$lang['Split_Topic_explain'] = 'Az al�bbi mez�k haszn�lat�val egy t�m�t k�tf�lek�ppen v�laszthatsz sz�t: vagy az adott hozz�sz�l�sok kiemel�s�vel, vagy egy adott hozz�sz�l�st�l sz�m�tva';
$lang['Split_title'] = 'A t�ma �j c�me';
$lang['Split_forum'] = 'A t�ma �j f�ruma';
$lang['Split_posts'] = 'Kiv�lasztott hozz�sz�l�sok sz�tv�laszt�sa';
$lang['Split_after'] = 'Sz�tv�laszt�s az adott hozz�sz�l�st�l';
$lang['Topic_split'] = 'A t�ma sikeresen kett� lett osztva';

$lang['Too_many_error'] = 'T�l sok hozz�sz�l�st v�lasztott�l ki. Csak egy hozz�sz�l�st v�lassz ki, az ut�na k�vetkez�k is kiemel�dnek!';

$lang['None_selected'] = 'A m�velet v�grahajt�s�hoz t�m�t is ki kell v�lasztani. L�pj vissza, �s v�lassz ki legal�bb egyet.';
$lang['New_forum'] = '�j f�rum';

$lang['This_posts_IP'] = 'A hozz�sz�l�s IP-je';
$lang['Other_IP_this_user'] = 'A felhaszn�l�hoz tartoz� egy�b IP-c�mek';
$lang['Users_this_IP'] = 'Az IP-hez tartoz� felhaszn�l�k';
$lang['IP_info'] = 'IP inform�ci�';
$lang['Lookup_IP'] = 'IP keres�se';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Id�z�na: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = '(GMT -12 �ra)';
$lang['-11'] = '(GMT -11 �ra)';
$lang['-10'] = '(GMT -10 �ra)';
$lang['-9'] = '(GMT -9 �ra)';
$lang['-8'] = '(GMT -8 �ra)';
$lang['-7'] = '(GMT -7 �ra)';
$lang['-6'] = '(GMT -6 �ra)';
$lang['-5'] = '(GMT -5 �ra)';
$lang['-4'] = '(GMT -4 �ra)';
$lang['-3.5'] = '(GMT -3.5 �ra)';
$lang['-3'] = '(GMT -3 �ra)';
$lang['-2'] = '(GMT -2 �ra)';
$lang['-1'] = '(GMT -1 �ra)';
$lang['0'] = '(GMT 0) ';
$lang['1'] = '(GMT +1 �ra)';
$lang['2'] = '(GMT +2 �ra)';
$lang['3'] = '(GMT +3 �ra)';
$lang['3.5'] = '(GMT +3.5 �ra)';
$lang['4'] = '(GMT +4 �ra)';
$lang['4.5'] = '(GMT +4.5 �ra)';
$lang['5'] = '(GMT +5 �ra)';
$lang['5.5'] = '(GMT +5.5 �ra)';
$lang['6'] = '(GMT +6 �ra)';
$lang['6.5'] = '(GMT +6.5 �ra)';
$lang['7'] = '(GMT +7 �ra)';
$lang['8'] = '(GMT +8 �ra)';
$lang['9'] = '(GMT +9 �ra)';
$lang['9.5'] = '(GMT +9.5 �ra)';
$lang['10'] = '(GMT +10 �ra)';
$lang['11'] = '(GMT +11 �ra)';
$lang['12'] = '(GMT +12 �ra)';
$lang['13'] = 'GMT + 13 �ra';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12 �ra) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11 �ra) Midway-sziget, Szamoa';
$lang['tz']['-10'] = '(GMT -10 �ra) Hawaii';
$lang['tz']['-9'] = '(GMT -9 �ra) Alaszka';
$lang['tz']['-8'] = '(GMT -8 �ra) Csendes-�ce�ni id�, Tijuana';
$lang['tz']['-7'] = '(GMT -7 �ra) Arizona, Hegyi id�';
$lang['tz']['-6'] = '(GMT -6 �ra) Amerikai k�z�pid�, K�z�p-Amerika, Mexik�v�ros';
$lang['tz']['-5'] = '(GMT -5 �ra) Bogota, Lima, Quito, Indiana, Keleti id�';
$lang['tz']['-4'] = '(GMT -4 �ra) Atlanti-�ce�ni id�, Caracas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3.5 �ra) �j-Founland';
$lang['tz']['-3'] = '(GMT -3 �ra) Braz�lia, Buenos Aires, Georgetown, Gr�nland';
$lang['tz']['-2'] = '(GMT -2 �ra) K�z�p-atlanti id�z�na';
$lang['tz']['-1'] = '(GMT -1 �ra) Azori-szigetek, Z�ld-foki-szigetek';
$lang['tz']['0'] = '(GMT 0) Greenwich, London, Dublin, Lisszabon';
$lang['tz']['1'] = '(GMT +1 �ra) Belgr�d, Budapest, Ljubljana, Pozsony, Pr�ga';
$lang['tz']['2'] = '(GMT +2 �ra) Ath�n, Isztambul, Minszk, Helsinki';
$lang['tz']['3'] = '(GMT +3 �ra) Bagdad, Kuvait, Rij�d, Moszkva, Szentp�terv�r';
$lang['tz']['3.5'] = '(GMT +3.5 �ra) Teher�n';
$lang['tz']['4'] = '(GMT +4 �ra) Baku, Tbiliszi';
$lang['tz']['4.5'] = '(GMT +4.5 �ra) Kabul';
$lang['tz']['5'] = '(GMT +5 �ra) Iszl�mb�d, Karacsi, Taskent, Jekatyerinburg';
$lang['tz']['5.5'] = '(GMT +5.5 �ra) Chennai, Kalkutta, Mumbai, �j-Delhi';
$lang['tz']['6'] = '(GMT +6 �ra) Almaty, Novoszibirszk, Astana, Dhaka';
$lang['tz']['6.5'] = '(GMT +6.5 �ra) Rangun';
$lang['tz']['7'] = '(GMT +7 �ra) Bangkok, Dzsakarta, Hanoi, Krasznojarszk';
$lang['tz']['8'] = '(GMT +8 �ra) Hongkong, Peking, Irkutszk, Ul�nb�tor, Perth';
$lang['tz']['9'] = '(GMT +9 �ra) Jakutszk, Oszkara, Szapporo, Toki�, Sz�ul';
$lang['tz']['9.5'] = '(GMT +9.5 �ra) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10 �ra) Brisbane, Canberra, Melbourne, Sydney, Guam';
$lang['tz']['11'] = '(GMT +11 �ra) Magad�n, Salamon-szigetek, �j Kaled�nia';
$lang['tz']['12'] = '(GMT +12 �ra) Auckland, Wellington, Fidzsi-szigetek, Kamcsatka';
$lang['tz']['13'] = 'GMT + 13 Hours';

$lang['datetime']['Sunday'] = 'Vas�rnap';
$lang['datetime']['Monday'] = 'H�tf�';
$lang['datetime']['Tuesday'] = 'Kedd';
$lang['datetime']['Wednesday'] = 'Szerda';
$lang['datetime']['Thursday'] = 'Cs�t�rt�k';
$lang['datetime']['Friday'] = 'P�ntek';
$lang['datetime']['Saturday'] = 'Szombat';
$lang['datetime']['Sun'] = 'Vas.';
$lang['datetime']['Mon'] = 'H�tf.';
$lang['datetime']['Tue'] = 'Kedd.';
$lang['datetime']['Wed'] = 'Szer.';
$lang['datetime']['Thu'] = 'Cs�t.';
$lang['datetime']['Fri'] = 'P�nt.';
$lang['datetime']['Sat'] = 'Szomb.';
$lang['datetime']['January'] = 'Janu�r';
$lang['datetime']['February'] = 'Febru�r';
$lang['datetime']['March'] = 'M�rcius';
$lang['datetime']['April'] = '�prilis';
$lang['datetime']['May'] = 'M�jus';
$lang['datetime']['June'] = 'J�nius';
$lang['datetime']['July'] = 'J�lius';
$lang['datetime']['August'] = 'Augusztus';
$lang['datetime']['September'] = 'Szeptember';
$lang['datetime']['October'] = 'Okt�ber';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'December';
$lang['datetime']['Jan'] = 'Jan.';
$lang['datetime']['Feb'] = 'Feb.';
$lang['datetime']['Mar'] = 'M�rc.';
$lang['datetime']['Apr'] = '�pr.';
$lang['datetime']['May'] = 'M�j.';
$lang['datetime']['Jun'] = 'J�n.';
$lang['datetime']['Jul'] = 'J�l.';
$lang['datetime']['Aug'] = 'Aug.';
$lang['datetime']['Sep'] = 'Szept.';
$lang['datetime']['Oct'] = 'Okt.';
$lang['datetime']['Nov'] = 'Nov.';
$lang['datetime']['Dec'] = 'Dec.';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Inform�ci�';
$lang['Critical_Information'] = 'Kritikus inform�ci�';

$lang['General_Error'] = '�ltal�nos hiba';
$lang['Critical_Error'] = 'Kritikus hiba';
$lang['An_error_occured'] = 'Hiba ad�dott';
$lang['A_critical_error'] = 'Kritikus hiba ad�dott';

//
// That's all, Folks!
// -------------------------------------------------

?>