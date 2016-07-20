<?php
/***************************************************************************
 *                            lang_main.php [Uighur_latin]
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
//
// Uyghurchigha Terjime qilghuchilar/Translation by:
//
// Muhemmed Erdem (M.Erdem) :: webmaster@misran.com  :: http://www.misran.com
// Abdireyim (abdireyim)    :: abdireyim@yahoo.com   :: http://freeud.tripod.com
//
// Pikirler bolsa bu adr�sni ishliting/For questions and comments use: misran_erdem@hotmail.com
//
// Diqqet: Bu emgekning hormiti uchun bolsimu tekstlerni, chekitlik herplerni we 
// atalghularni xalighanche ozgertmeng. Pikirliringiz bolsa 
// terjime qilghuchilar bilen alaqe qiling.
//
// Release date: 2003-09-10
//
//
//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'Y.d.M'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Sehipe';
$lang['Category'] = 'Kat�goriye';
$lang['Topic'] = 'T�ma';
$lang['Topics'] = 'T�milar';
$lang['Replies'] = 'Jawablar';
$lang['Views'] = 'Q�timi';
$lang['Post'] = 'Y�zilma';
$lang['Posts'] = 'Y�zilmilar';


$lang['Posted'] = 'Arxip';
$lang['Username'] = 'Qollanchi Isimi';
$lang['Password'] = 'Parol';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Yazghuchi';
$lang['Author'] = 'Aptor';
$lang['Time'] = 'Waqit';
$lang['Hours'] = 'Saet';
$lang['Message'] = 'Mes�j';

$lang['1_Day'] = '1 K�nl�k';
$lang['7_Days'] = '7 K�nl�k';
$lang['2_Weeks'] = '2 Heptilik';
$lang['1_Month'] = '1 Ayliq';
$lang['3_Months'] = '3 Ayliq';
$lang['6_Months'] = '6 Ayliq';
$lang['1_Year'] = '1 Yilliq';

$lang['Go'] = 'Bashlash';
$lang['Jump_to'] = 'Buninggha �t�sh';
$lang['Submit'] = 'Yollash';
$lang['Reset'] = 'Qaytilash';

$lang['Cancel'] = 'Inawetsiz';
$lang['Preview'] = 'Sinash';
$lang['Confirm'] = 'B�kitish';
$lang['Spellcheck'] = 'Teksh�r�sh';
$lang['Yes'] = 'Hee';
$lang['No'] = 'Yaq';
$lang['Enabled'] = 'Qozghutuldi';
$lang['Disabled'] = 'Taqaldi';
$lang['Error'] = 'Xata';

$lang['Next'] = 'K�yinki';
$lang['Previous'] = 'Aldinqi';
$lang['Goto_page'] = 'Baridighan Bet';
$lang['Joined'] = 'Tizimlatqan Waqit';
$lang['IP_Address'] = 'IP Adr�si';

$lang['Select_forum'] = 'Sehipe Tallash';
$lang['View_latest_post'] = 'Axirqi Y�zilmini K�r�sh';
$lang['View_newest_post'] = 'Y�ngi Y�zilmini K�r�sh';
$lang['Page_of'] =  '<b>%d</b>. bet  (jem\'iy <b>%d</b> bet)'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ Nomuri';
$lang['AIM'] = 'AIM Adr�si';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Bashbet';  // eg. sitename Forum Index, %s can be removed if you prefer


$lang['Post_new_topic'] = 'Y�ngi T�ma Y�zish';
$lang['Reply_to_topic'] = 'Jawab Y�zish';
$lang['Reply_with_quote'] = 'Neqillep Jawab Y�zish';

$lang['Click_return_topic'] = 'T�migha qaytish �ch�n %sbu yerni%s b�sing'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Yene bir sinash �ch�n %sbu yerni%s b�sing';
$lang['Click_return_forum'] = 'Sehipige qaytish �ch�n %sbu yerni%s b�sing';
$lang['Click_view_message'] = 'Mes�jingizni k�r�sh �ch�n %sbu yerni%s b�sing';
$lang['Click_return_modcp'] = 'Nazaretchi kontroligha  qaytish �ch�n %sbu yerni%s b�sing';
$lang['Click_return_group'] = 'Guruppa uchurigha qaytish �ch�n %sbu yerni%s b�sing';

$lang['Admin_panel'] = 'Bashqurghuchi Kontroli';

$lang['Board_disable'] = 'Kech�r�ng, sehipini hazirche ishletkili bolmaydu. Sel turup qayta sinap k�r�ng.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Tizimlatqan Qollan\'ghuchilar:';
$lang['Browsing_forum'] = 'Bu sehipidiki qollan\'ghuchilar:';
$lang['Online_users_zero_total'] = 'Jem\'iy <b>0</b> qollan\'ghuchilar torda :: ';
$lang['Online_users_total'] = 'Jem\'iy <b>%d</b> qollan\'ghuchilar torda :: ';
$lang['Online_user_total'] = 'Jem\'iy <b>%d</b> qollan\'ghuchi torda :: ';
$lang['Reg_users_zero_total'] = 'H�chkim tizimlatmidi, ';
$lang['Reg_users_total'] = '%d Qollan\'ghuchi tizimlatti, ';
$lang['Reg_user_total'] = '%d Qollan\'ghuchi tizimlatti, ';
$lang['Hidden_users_zero_total'] = 'yoshurunlar yoq we ';
$lang['Hidden_user_total'] = '%d yoshurun we ';
$lang['Hidden_users_total'] = '%d yoshurun we ';
$lang['Guest_users_zero_total'] = 'm�hmanmu yoq.';
$lang['Guest_users_total'] = '%d m�hman bar.';
$lang['Guest_user_total'] = '%d m�hman bar.';
$lang['Record_online_users'] = 'B�g�n\'ge qeder eng k�p bolghanda <b>%s</b> kishi %s de torda boldi.'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sBashqurghuchi%s';
$lang['Mod_online_color'] = '%sNazaretchi%s';

$lang['You_last_visit'] = 'Axirqi ziyaritingiz: %s'; // %s replaced by date/time
$lang['Current_time'] = 'Hazirqi waqit: %s'; // %s replaced by time

$lang['Search_new'] = 'Axirqi ziyarettin k�yinki y�zilmilar';
$lang['Search_your_posts'] = '�zining yazmiliri';
$lang['Search_unanswered'] = 'Jawab qayturulmighan y�zilmilar';

$lang['Register'] = 'Tizimlitish';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Profilni �zgertish';
$lang['Search'] = 'Izdesh';
$lang['Memberlist'] = 'Ezalar Tizimi';
$lang['FAQ'] = 'FAQ (Soal-Jawablar)';
$lang['BBCode_guide'] = 'BBCode Qollanmisi';
$lang['Usergroups'] = 'Guruppilar';
$lang['Last_Post'] = 'Axirqi Y�zilma';
$lang['Moderator'] = 'Nazaretchi';
$lang['Moderators'] = 'Nazaretchiler';



//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Qollan\'ghuchilirimiz t�xi <b>h�chnerse</b> yazmidi.'; // Number of posts
$lang['Posted_articles_total'] = 'Qollan\'ghuchilirimiz jem\'iy <b>%d</b> parche maqale yazdi.'; // Number of posts
$lang['Posted_article_total'] = 'Qollan\'ghuchilirimiz jem\'iy <b>%d</b> parche maqale yazdi.'; // Number of posts
$lang['Registered_users_zero_total'] = 'Bizge t�xi <b>h�chkim</b> tizimlatmidi.'; // # registered users
$lang['Registered_users_total'] = 'Munberde <b>%d</b> neper tizimlatqan qollan\'ghuchilar bar.'; // # registered users
$lang['Registered_user_total'] = 'Munberde <b>%d</b> neper tzimlatqan qollan\'ghuchilar bar.'; // # registered users
$lang['Newest_user'] = 'Eng y�ngi tizimlatqan qollan\'ghuchi: <b>%s%s%s</b>'; // a href, username, /a 


$lang['No_new_posts_last_visit'] = 'Axirqi ziyaritingizdin buyan y�ngi y�zilma yoq ';
$lang['No_new_posts'] = 'Y�ngi y�zilma yoq';
$lang['New_posts'] = 'Y�ngi y�zilmilar';
$lang['New_post'] = 'Y�ngi y�zilma';
$lang['No_new_posts_hot'] = 'Y�ngi y�zilma yoq [ Qizziq ]';
$lang['New_posts_hot'] = 'Y�ngi y�zilmilar [Qizziq ]';
$lang['No_new_posts_locked'] = 'Y�ngi y�zilma yoq [ Quluplan\'ghan ]';
$lang['New_posts_locked'] = 'Y�ngi y�zilmilar [ Quluplan\'ghan ]';
$lang['Forum_is_locked'] = 'Sehipe quluplandi';


//
// Login
//
$lang['Enter_password'] = 'Ismingiz we Parolingizni Kiqg�z�ng! ';
$lang['Login'] = 'Kirish';
$lang['Logout'] = 'Qaytip Chiqish';

$lang['Forgotten_password'] = 'Parolimni unutup qaptimen!';

$lang['Log_me_in'] = 'Her kelgende aptomatik kirish';

$lang['Error_login'] = 'Siz isimni yaki parolni xata kirg�z�p qoydingiz. ';


//
// Index page
//
$lang['Index'] = 'Bashbet';
$lang['No_Posts'] = 'Y�zilma Yoq';
$lang['No_forums'] = 'Bu bette sehipe yoq';

$lang['Private_Message'] = 'Xususiy Mes�j';
$lang['Private_Messages'] = 'Xususiy Mes�jlar';
$lang['Who_is_Online'] = 'Kim Torda?';

$lang['Mark_all_forums'] = 'Hemme sehipini oqup bolghan qilish';
$lang['Forums_marked_read'] = 'Hemme sehipe oqup bolunghan qilindi';



//
// Viewforum
//
$lang['View_forum'] = 'Sehipini K�r�sh';

$lang['Forum_not_exist'] = 'Siz tallighan sehipe mewjut emes.';
$lang['Reached_on_error'] = 'Bu bettka  xata k�lip qaldingiz';

$lang['Display_topics'] = 'Ilgiriki y�zilmilarni k�rs�t�sh';
$lang['All_Topics'] = 'Barliq T�milar';

$lang['Topic_Announcement'] = '<b>Uqturush:</b>';
$lang['Topic_Sticky'] = '<b>Muhim:</b>';
$lang['Topic_Moved'] = '<b>Y�tkelgen:</b>';

$lang['Topic_Poll'] = '<b>[ Ray-Sinash ]</b>';

$lang['Mark_all_topics'] = 'Barliq y�zilmilarni oqup bolghan qilish';
$lang['Topics_marked_read'] = 'Barliq y�zilmilar oqulghan qilindi.';

$lang['Rules_post_can'] = 'Bu sehipige y�ngi y�zilmilar <b>yazalaysiz.</b>';
$lang['Rules_post_cannot'] = 'Bu sehipige y�ngi y�zilmilar <b>yazalmaysiz.</b>';
$lang['Rules_reply_can'] = 'Bu sehipidiki y�zilmilargha jawab <b>yazalaysiz.</b>';
$lang['Rules_reply_cannot'] = 'Bu sehipidiki y�zilmilargha jawab <b>yazalmaysiz.</b>';
$lang['Rules_edit_can'] = 'Bu sehipidiki yazmiliringizni <b>tehrirliyeleysiz.</b>';
$lang['Rules_edit_cannot'] = 'Bu sehipidiki yazmiliringizni <b>tehrirliyelmeysiz.</b>';
$lang['Rules_delete_can'] = 'Bu sehipidiki yazmiliringizni <b>�ch�releysiz.</b>';
$lang['Rules_delete_cannot'] = ' Bu sehipidiki yazmiliringizni <b>�ch�relmeysiz.</b>';
$lang['Rules_vote_can'] = 'Bu sehipidiki ray sinashqa awaz <b>b�releysiz.</b>';
$lang['Rules_vote_cannot'] = 'Bu sehipidiki ray sinashqa awaz <b>b�relmeysiz.</b>';
$lang['Rules_moderate'] = 'Bu sehipige %snazaretchilik%s <b>qilalaysiz.</b>'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Bu sehipide y�zilma yoq. <br />Y�ngi t�ma y�zish �ch�n <b>Y�ngi T�ma</b> ni b�sing.';


//
// Viewtopic
//
$lang['View_topic'] = 'T�ma K�r�sh';

$lang['Guest'] = 'M�hman';
$lang['Post_subject'] = 'Mawzu';
$lang['View_next_topic'] = 'K�yinki T�ma';
$lang['View_previous_topic'] = 'Aldinqi T�ma';
$lang['Submit_vote'] = 'Awaz B�rish';
$lang['View_results'] = 'Netijilerni K�r�sh';

$lang['No_newer_topics'] = 'Bu sehipide t�xi y�ngi t�ma yoq.';
$lang['No_older_topics'] = 'Bu sehipide t�xi kona t�ma yoq.';
$lang['Topic_post_not_exist'] = 'Tallighan t�ma bu menberde emes.';
$lang['No_posts_topic'] = 'Bu t�migha jawab y�zilmighan.';

$lang['Display_posts'] = 'Ilgiriki y�zilmilarni k�rs�t�sh';
$lang['All_Posts'] = 'Barliq Y�zilmilar';
$lang['Newest_First'] = 'Y�ngisini awwal';
$lang['Oldest_First'] = 'Konisini awwal';

$lang['Back_to_top'] = 'Choqqigha qaytish';

$lang['Read_profile'] = 'Qollan\'ghuchi profilini k�r�sh'; 
$lang['Send_email'] = 'Qollan\'ghuchigha e-mail yollash';
$lang['Visit_website'] = 'Qollan\'ghuchining torb�tini ziyaret qilish';
$lang['ICQ_status'] = 'ICQ Haliti';
$lang['Edit_delete_post'] = 'Y�zilmini Tehrirlesh/�ch�r�sh';
$lang['View_IP'] = 'Bu qollan\'ghuchining IP adr�sini k�rs�t�sh';
$lang['Delete_post'] = 'Bu y�zilmini �ch�r�sh';

$lang['wrote'] = 't�wendikidek yazghan'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Neqil'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Eng axirqi q�tim %s teripidin %s da �zgertildi, jem\'iy %d q�tim �zgertildi.'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Eng axirqi q�tim %s teripidin %s da �zgertildi, jem\'iy %d q�tim �zgertildi.'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Bu t�mini quluplash';
$lang['Unlock_topic'] = 'Bu t�mini �chish';
$lang['Move_topic'] = 'Bu t�mini y�tkesh';
$lang['Delete_topic'] = 'Bu t�mini �ch�r�sh';
$lang['Split_topic'] = 'Bu t�mini ayrish';

$lang['Stop_watching_topic'] = 'Bu t�midiki jawablarni k�r�shni toxtitish';
$lang['Start_watching_topic'] = 'Bu t�midiki jawablarni dawamliq k�r�sh';
$lang['No_longer_watching'] = ' Siz bu t�mini emdi k�rmeysiz.';
$lang['You_are_watching'] = 'Siz hazir bu t�mini k�riwatisiz.';

$lang['Total_votes'] = 'Jem\'iy Awaz';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Mes�j T�ksti';
$lang['Topic_review'] = 'T�ma Teksh�r�sh';

$lang['No_post_mode'] = 'H�chqandaq y�zilma shekli tallanmidi'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Y�ngi t�ma y�zish';
$lang['Post_a_reply'] = 'Jawab Y�zish';
$lang['Post_topic_as'] = 'T�ma T�ri';
$lang['Edit_Post'] = 'Y�zilma �zgertish';
$lang['Options'] = 'Tallash';

$lang['Post_Announcement'] = 'Uqturush';
$lang['Post_Sticky'] = 'Muhim';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Bu y�zilmini �ch�r�shke jezim qilamsiz?';
$lang['Confirm_delete_poll'] = 'Bu ray-sinashni �ch�r�shke jezim qilamsiz?';

$lang['Flood_Error'] = 'Bayiqi y�zilmingizdin k�yin bundaq qisqa waqitta y�ngi bir y�zilma yolliyalmaysiz, biraz saqlang.';
$lang['Empty_subject'] = 'Y�ngi t�ma achqanda uningha bir mawzu b�rishingiz z�r�rdur. ';
$lang['Empty_message'] = 'T�ksti yoq y�zilmilarni yolliyalmaysiz.';
$lang['Forum_locked'] = 'Bu sehipe quluplanghan; siz y�zilma yollash, tehrirlesh yaki jawab y�zish �lip baralmaysiz.';
$lang['Topic_locked'] = 'Bu t�ma quluplanghan; siz y�zilma tehrirlesh yaki jawab b�rish �lip baralmaysiz.';
$lang['No_post_id'] = 'Tehrirlesh �ch�n y�zilmidin birni tallang.';
$lang['No_topic_id'] = 'Jawab y�zishingiz �ch�n t�midin birni tallang. ';
$lang['No_valid_mode'] = 'Siz peqet y�zilma yazalaysiz, jawab qayturalaysiz, uni tehrirliyeleysiz yaki neqil qilalaysiz. Yene bir q�tim sinap b�qing.';
$lang['No_such_post'] = 'Bundaq y�zilma yoq, yene bir q�tim sinap b�qing.';
$lang['Edit_own_posts'] = 'Kech�r�ng, peqet �zingizning yazmilirinila tehrirliyeleysiz.';
$lang['Delete_own_posts'] = 'Kech�r�ng, peqet �zingizning yazmilirinila �ch�releysiz.';
$lang['Cannot_delete_replied'] = 'Kech�r�ng, jawab qayturulghan y�zilmilarni �ch�relmeysiz.';
$lang['Cannot_delete_poll'] = 'Kech�r�ng, aktip haldiki ray-sinashni �ch�relmeysiz. ';
$lang['Empty_poll_title'] = 'Ray-sinash �ch�n bir mawzu b�ring.';
$lang['To_few_poll_options'] = 'Ray-sinash �ch�n az d�gende ikki tallash b�ring.';
$lang['To_many_poll_options'] = 'Ray-sinash �ch�n bek k�p tallash b�riwettingiz. ';
$lang['Post_has_no_poll'] = 'Bu y�zilmida ray-sinash yoq.';
$lang['Already_voted'] = 'Bu ray-sinashqa awaz qoshup boldingiz.';
$lang['No_vote_option'] = 'Awaz qoshush �ch�n birni tallishingiz z�r�r.';

$lang['Add_poll'] = 'Ray-Sinash Qoshush';
$lang['Add_poll_explain'] = 'Eger t�mingizgha ray-sinash qoshushni xalimisingiz, bu tallashni bosh qaldurung.';
$lang['Poll_question'] = 'Soal';
$lang['Poll_option'] = 'Ray-sinash T�ri';
$lang['Add_option'] = 'Ray-sinash T�ri Qoshush';
$lang['Update'] = 'Y�ngilash';
$lang['Delete'] = '�ch�r�sh';
$lang['Poll_for'] = 'Ray-Sinash Mudditi';



$lang['Days'] = 'K�n'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Muddetsiz ray sinash �ch�n 0 ni kirg�z�ng yaki bosh qaldurung ]';
$lang['Delete_poll'] = 'Ray-Sinashni �ch�r�sh';

$lang['Disable_HTML_post'] = 'Bu y�zilmida HTML ishlitishni cheklesh';
$lang['Disable_BBCode_post'] = 'Bu y�zilmida BBCode ishlitishni cheklesh';
$lang['Disable_Smilies_post'] = 'Bu y�zilmida chiraylar ishlitishni cheklesh';

$lang['HTML_is_ON'] = 'HTML <u>Ochuq</u>';
$lang['HTML_is_OFF'] = 'HTML <u>�tik</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>Ochuq</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s <u>�tik</u>';
$lang['Smilies_are_ON'] = 'Chiraylar <u>Ochuq</u>';
$lang['Smilies_are_OFF'] = 'Chiraylar <u>�tik</u>';

$lang['Attach_signature'] = 'Imza qoshush (imza profil ichide �zgertilidu)';
$lang['Notify'] = 'Jawab y�zilghanda manga xewer qilinsun';
$lang['Delete_post'] = 'Bu y�zilmini �ch�r�sh';

$lang['Stored'] = 'Mes�jingiz muweppeqiyetlik saqlandi.';
$lang['Deleted'] = ' Mes�jingiz muweppeqiyetlik �ch�rildi.';
$lang['Poll_delete'] = 'Ray-Sinash muweppeqiyetlik �ch�rildi.';
$lang['Vote_cast'] = 'B�litingiz muwappiqiyetlik tashlandi.';


$lang['Topic_reply_notification'] = 'Jawab Uqturushi';

$lang['bbcode_b_help'] = 'Tom y�zish: [b]t�kst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Chong xet: [i]t�kst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Asti siziqliq: [u]t�kst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Neqil kelt�r�sh: [quote]t�kst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kod k�rs�t�sh: [code]Kod[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Tertipsiz Ret: [list]t�kst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Tertiplik Ret: [list=]t�kst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Resim kirg�z�sh: [img]http://resim_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'URL kirg�z�sh: [url]http://url[/url] yaki [url=http://url]URL t�kst[/url]  (alt+w)';
$lang['bbcode_a_help'] = '�chilghan barliq BBCode lirini taqash';
$lang['bbcode_s_help'] = 'Xet renggi: [color=red]t�kst[/color]  Tewisiye: color=#FF0000 sheklide ishletsingizmu bolidu';
$lang['bbcode_f_help'] = 'Xet chongluqi: [size=x-small]kichik xet[/size]';

$lang['Emoticons'] = 'Chiraylar';
$lang['More_emoticons'] = 'T�ximu k�p';

$lang['Font_color'] = 'Xet renggi';
$lang['color_default'] = 'Esli';
$lang['color_dark_red'] = 'Toq Qizi';
$lang['color_red'] = 'Qizil';
$lang['color_orange'] = 'Eplisin';
$lang['color_brown'] = 'Qongur';
$lang['color_yellow'] = 'S�riq';
$lang['color_green'] = 'Y�shil';
$lang['color_olive'] = 'Zeytun';
$lang['color_cyan'] = 'K�k�sh y�shil';
$lang['color_blue'] = 'K�k';
$lang['color_dark_blue'] = 'Toq K�k';
$lang['color_indigo'] = 'K�k�sh';

$lang['color_violet'] = 'S�s�n';
$lang['color_white'] = 'Aq';
$lang['color_black'] = 'Qara';
$lang['Font_size'] = 'Xet Rezmisi';
$lang['font_tiny'] = 'Bek kichik';
$lang['font_small'] = 'Kichik';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Chong';
$lang['font_huge'] = 'Zor';

$lang['Close_Tags'] = 'Taglarni Y�pish';
$lang['Styles_tip'] = 'Eskertish: Uslublarni tallan\'ghan t�kstke tz�zla qoshulalaydu.';



//
// Private Messaging
//
$lang['Private_Messaging'] = 'Xususiy Mes�j';

$lang['Login_check_pm'] = 'Xususiy Mes�jni oqush �ch�n kirish';
$lang['New_pms'] = '%d parche y�ngi mes�jingiz bar'; // You have 2 new messages
$lang['New_pm'] = '%d parche y�ngi mes�jingiz bar'; // You have 1 new message
$lang['No_new_pm'] = 'Y�ngi mes�jingiz yoq';
$lang['Unread_pms'] = '%d parche oqumighan mes�jingiz bar';
$lang['Unread_pm'] = '%d parche oqumighan mes�jingiz bar';
$lang['No_unread_pm'] = 'Oqumighan mes�jingiz yoq';
$lang['You_new_pm'] = 'Y�ngi bir xususiy mes�j sizni saqlawatidu';
$lang['You_new_pms'] = 'Y�ngi xususiy mes�jlar sizni saqlawatidu';
$lang['You_no_new_pm'] = 'Saqlawatqan y�ngi mes�jingiz yoq';

$lang['Unread_message'] = 'Oqulmighan Mes�j';
$lang['Read_message'] = 'Oqulghan Mes�j';

$lang['Read_pm'] = 'Mes�j oqush';
$lang['Post_new_pm'] = 'Mes�j y�zish';
$lang['Post_reply_pm'] = 'Mes�jge jawab b�rish';
$lang['Post_quote_pm'] = 'Mes�jni neqillesh';
$lang['Edit_pm'] = 'Mes�jni tehrirlesh';

$lang['Inbox'] = 'Xet Sanduqi';
$lang['Outbox'] = 'Yollash Sanduqi';
$lang['Savebox'] = 'Arxip Sanduqi';
$lang['Sentbox'] = 'Yollanghan Xet';
$lang['Flag'] = 'Belge';
$lang['Subject'] = 'Mawzu';
$lang['From'] = 'Ibertk�chi';
$lang['To'] = 'Tapshuriwalghuchi';
$lang['Date'] = 'Chisla';
$lang['Mark'] = 'Tallandi';
$lang['Sent'] = 'Yollandi';
$lang['Saved'] = 'Saqlandi';
$lang['Delete_marked'] = 'Tallan\'ghanni �ch�r�sh';
$lang['Delete_all'] = 'Hemmini �ch�r�sh';
$lang['Save_marked'] = 'Tallan\'ghanni Saqlash'; 
$lang['Save_message'] = 'Mes�jni Saqlash';
$lang['Delete_message'] = 'Mes�jni �ch�r�sh';

$lang['Display_messages'] = 'Ilgirki mes�jlarni k�rs�t�sh'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Barliq Mes�jlar';

$lang['No_messages_folder'] = 'Bu munderijide mes�j yoq.';


$lang['PM_disabled'] = 'Bu sehipide xususiy mes�j taqiw�tildi. ';
$lang['Cannot_send_privmsg'] = 'Kech�r�ng, xususiy mes�j yollash bashqurghuchi teripidin taqiw�tildi.';
$lang['No_to_user'] = 'Bu mes�jni yollash �ch�n, yollighuchi ismini kirg�z�ng';
$lang['No_such_user'] = 'Kech�r�ng, bu isimdiki qollan\'ghuchi mewjut emes.';

$lang['Disable_HTML_pm'] = 'Bu mes�jda HTML ishlitishni cheklesh';
$lang['Disable_BBCode_pm'] = 'Bu mes�jda BBCode ishlitishni cheklesh';
$lang['Disable_Smilies_pm'] = 'Bu mes�jda chiraylar ishlitishni cheklesh';

$lang['Message_sent'] = 'Mes�jingiz yollandi.';

$lang['Click_return_inbox'] = 'Xet Sanduqigha qaytish �ch�n %sbu yerni%s ch�king.';
$lang['Click_return_index'] = 'Bashbetke qaytish �ch�n %sbu yerni%s ch�king.';

$lang['Send_a_new_message'] = 'Y�ngi xususiy mes�j yollash';
$lang['Send_a_reply'] = 'Xususiy mes�jge jawab qayturush';
$lang['Edit_message'] = 'Xususiy mes�jni tehrirlesh';

$lang['Notification_subject'] = 'Y�ngi bir xususiy mes�j keldi!';

$lang['Find_username'] = 'Izdesh';
$lang['Find'] = 'T�pildi';
$lang['No_match'] = 'Qollanchi isimi t�pilmidi.';

$lang['No_post_id'] = 'Y�zilma ID si b�rilmidi.';
$lang['No_such_folder'] = 'Bundaq munderije yoq.';
$lang['No_folder'] = 'Munderije tallanmidi ';


$lang['Mark_all'] = 'Hemmisini tallash';
$lang['Unmark_all'] = 'Hemmisini bikar qilish';

$lang['Confirm_delete_pm'] = 'Bu mes�jni choqum �ch�remsiz?';
$lang['Confirm_delete_pms'] = 'Bu mes�jlarni choqum �ch�remsiz?';

$lang['Inbox_size'] = 'Xet sanduqi %d%% toldi'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Yollanghan xet %d%% boldi'; 
$lang['Savebox_size'] = 'Arxip sanduqi %d%% toldi'; 

$lang['Click_view_privmsg'] = 'Xet Sanduqigha b�rish �ch�n %sbu yerni%s ch�king.';



//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Profil k�rs�t�sh :: %s'; // %s is username 
$lang['About_user'] = '%s heqqide'; // %s is username

$lang['Preferences'] = 'Tallashlar';

$lang['Items_required'] = '* belgisi barlirini toldurush z�r�rdur.';
$lang['Registration_info'] = 'Tizimlitish Uchurliri';
$lang['Profile_info'] = 'Profil Uchurliri';
$lang['Profile_info_warn'] = 'T�wendikiliri ashkare k�r�nidighan uchurlar';
$lang['Avatar_panel'] = 'Awatar Kontroli';
$lang['Avatar_gallery'] = 'Awatar Gal�riyisi';

$lang['Website'] = 'Torbet';
$lang['Location'] = 'Orni';
$lang['Contact'] = 'Alaqe';
$lang['Email_address'] = 'E-mail adr�si';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Xususiy mes�j yollash';
$lang['Hidden_email'] = '[ Yoshurnush ]';
$lang['Search_user_posts'] = 'Bu qollan\'ghuchining y�zilmilirini izdesh';
$lang['Interests'] = 'Qiziqishi';
$lang['Occupation'] = 'Kespi'; 
$lang['Poster_rank'] = 'Qollan\'ghuchi Derijisi';

$lang['Total_posts'] = 'Jem\'iy Y�zilma';
$lang['User_post_pct_stats'] = 'Jem\'iy y�zilmining %.2f%% '; // 1.25% of total
$lang['User_post_day_stats'] = 'K�nl�k y�zilmilar %.2f '; // 1.5 posts per day
$lang['Search_user_posts'] = '%s ning barliq y�zilmilirini izdesh'; // Find all posts by username

$lang['No_user_id_specified'] = 'Kech�r�ng, bundaq qollan\'ghuchi yoq.';
$lang['Wrong_Profile'] = '�zingizning bolmighan profilni �zgertelmeysiz.';

$lang['Only_one_avatar'] = 'Peqet birla awatar tallinidu';
$lang['File_no_data'] = 'Teminligen torb�tingizde data yoq';

$lang['No_connection_URL'] = 'Teminligen ulinish adr�si(URL) gha ulanmidi';
$lang['Incomplete_URL'] = 'Teminligen ulinish adr�si(URL) toluq emes';
$lang['Wrong_remote_avatar_format'] = 'Teminligen awatar ulinish adr�si(URL)toghra formatta emes';
$lang['No_send_account_inactive'] = 'Kech�r�ng, hazirche parol ibertilmidi, ch�nki sizning h�sabingiz t�xi qozghutulmighan. Sehipe bashqurghuchi bilen alaqilishing.';

$lang['Always_smile'] = 'Chiraylar daim ochuq';
$lang['Always_html'] = 'HTML daim ochuq';
$lang['Always_bbcode'] = 'BBCode daim ochuq';
$lang['Always_add_sig'] = 'Daim imzayimni qoshimen';
$lang['Always_notify'] = 'Daim m�ni jawablardin xewerlend�r';
$lang['Always_notify_explain'] = 'Sizning yazmiliringizgha jawab qayturulghanda e-mail arqiliq sizni xewerlend�ridu. Buni y�zilma yollighanda �zgerteleysiz.';

$lang['Board_style'] = 'Sehipe Uslubi';
$lang['Board_lang'] = 'Sehipe Tili';
$lang['No_themes'] = 'Sanliq Ambarda T�ma Yoq';
$lang['Timezone'] = 'Waqit Rayoni';

$lang['Date_format'] = 'Chisla formati';
$lang['Date_format_explain'] = 'Chisla formati ipadilesh tili PHP diki <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> bilen oxshash';
$lang['Signature'] = 'Imza';
$lang['Signature_explain'] = 'Bu imza yazmiliringizning axirigha qoshulup k�rs�tilidu. Imzaning %d herp cheklimisi bar.';
$lang['Public_view_email'] = 'E-mail adr�sim daim k�r�nsun';

$lang['Current_password'] = 'Hazirqi Parol';
$lang['New_password'] = 'Y�ngi Parol';
$lang['Confirm_password'] = 'Parolni Jezimlesh';
$lang['Confirm_password_explain'] = 'Parolingizni yaki e-mail adr�singizni �zgertish �ch�n hazirqi parolingizni kirg�zisiz.';
$lang['password_if_changed'] = 'Parolni �zgertmekchi bolsingiz, peqet y�ngi parolni kirg�z�ng.';
$lang['password_confirm_if_changed'] = 'Parolni �zgertmekchi bolsingiz, peqet y�ngi parolni kirg�z�p jezimlesht�r�ng.';

$lang['Avatar'] = 'Awatar';
$lang['Avatar_explain'] = 'Y�zilmingizning y�nigha kichik bir resim k�rs�tidu. Daim peqet birla resim k�rs�tilidu, resimning kengliki %d din, igizliki %d din we chongluqi %dKB din chong bolmisun.';
$lang['Upload_Avatar_file'] = 'Kompyut�ringizdin bir awatar yollash';
$lang['Upload_Avatar_URL'] = 'Bir URL din awatar k�ch�r�sh';
$lang['Upload_Avatar_URL_explain'] = 'Awatarning ulunush ornining URL ni kirg�zsingiz, awatar resimi bu yerge k�ch�r�lidu.';
$lang['Pick_local_Avatar'] = 'Gal�riyedin awatar tallash';
$lang['Link_remote_Avatar'] = 'Bashqa bettin awatar tallash';
$lang['Link_remote_Avatar_explain'] = ' Ulimaqchi bolghan awatar resimi ornining URL ni kirg�z�ng';
$lang['Avatar_URL'] = 'Awatar resimining URLsi';
$lang['Select_from_gallery'] = 'Gal�riyedin awatar tallash';
$lang['View_avatar_gallery'] = 'Gal�riye k�rs�t�sh';

$lang['Select_avatar'] = 'Awatar tallash';
$lang['Return_profile'] = 'Awatarni inawetsiz qilish';
$lang['Select_category'] = 'Kat�goriye tallash';

$lang['Delete_Image'] = 'Resim �ch�r�sh';
$lang['Current_Image'] = 'Hazirqi Resim';

$lang['Notify_on_privmsg'] = 'Xususiy mes�j kelgende m�ni xewerlendursun';
$lang['Popup_on_privmsg'] = 'Xususiy mes�j kelgende yene bir k�znek �chilsun'; 
$lang['Popup_on_privmsg_explain'] = 'Y�ngi mes�j kelgende, y�ngi bir k�znek �chilip xewerlend�rsun.';
$lang['Hide_user'] = 'Torda halitimni yoshursun';

$lang['Profile_updated'] = 'Profilingiz y�ngilandi';
$lang['Profile_updated_inactive'] = 'Profilingiz y�ngilandi. Emmam bezi haletliringizni �zgertiwettingiz, hem h�sabingiz hazir �tik halette. Uni qandaq qozghutushni bilish �ch�n e-mailngizni k�r�ng, yaki bashqurghuchining qozghutup b�rishini saqlang.';

$lang['Password_mismatch'] = 'Ikki q�timqda kirg�zgen parolingiz oxshash bolmidi.';
$lang['Current_password_mismatch'] = 'Hazirqi parolingiz sanliq ambardiki parolgha mas kelmidi.';
$lang['Password_long'] = 'Parolingiz 32 herptin �ship ketmesliki k�rek.';
$lang['Too_many_registers'] = 'Tizimlitishni bek tola sinidingiz. Sel turup qayta sinang.';
$lang['Username_taken'] = 'Kech�r�ng, bu isim ishlitip bolunghan.';
$lang['Username_invalid'] = 'Kech�r�ng, bu isim arisida inawetsiz belge( \') bar iken.';
$lang['Username_disallowed'] = 'Kech�r�ng, bu isim cheklengen.';
$lang['Email_taken'] = 'Kech�r�ng, bu e-mail adr�si bashqa bir qollan\'ghuchi teripidin ishlitilgen.';
$lang['Email_banned'] = 'Kech�r�ng, bu e-mail adr�si cheklengen. ';
$lang['Email_invalid'] = 'Kech�r�ng, bu e-mail adr�si inawetsiz.';
$lang['Signature_too_long'] = 'Imzayingiz bek uzun.';
$lang['Fields_empty'] = 'Z�r�r bolghan katekchilerni toldurushingiz k�rek.';
$lang['Avatar_filetype'] = 'Awatar h�jjitining formati .jpg, .gif or .png bolishi k�rek';
$lang['Avatar_filesize'] = 'Awatarning sighimi %d KB din kichik bolishi k�rek.'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Awatar kengliki %d din, igizliki %d din kichik bolishi k�rek.';

$lang['Welcome_subject'] = ' %s ge Xush Keldingiz'; // Welcome to my.com forums

$lang['New_account_subject'] = 'Y�ngi Qollan\'ghuchi H�sabi';
$lang['Account_activated_subject'] = 'H�sab Qozghutush';

$lang['Account_added'] = 'Tizimlatqiningizge teshekk�r, h�sabingiz quruldi. Isim we parolingiz bilen kirsingiz bolidu.';

$lang['Account_inactive'] = 'H�sabingiz quruldi. Bu sehipe h�sab qozghutushni telep qilidu, shunga e-mail adr�singizge qozghutush achquchi ibertildi. E-mailingizdin tepsiliy uchurgha �risheleysiz. ';
$lang['Account_inactive_admin'] = ' H�sabingiz quruldi. Bu sehipe bashqurghuchining h�sab qozghutushni telep qilidu, h�sabingiz qozghutulghnda, sizge e-mail ibertilip hewerlend�rlisiz. ';
$lang['Account_active'] = 'H�sabingiz qozghutuldi. Tizimlatqiningiz �ch�n teshekk�r �ytimiz. ';
$lang['Account_active_admin'] = 'H�sab hazir qozghutuldi';
$lang['Reactivate'] = 'H�sabingizni qaytidin qozghutung!';
$lang['Already_activated'] = 'H�sabingizni qozghutup boldingiz';
$lang['COPPA'] = 'H�sabingiz quruldi, emma teksh�r�shtin �t�sh k�rek. Tepsilatini e-mail arqiliq biling. ';

$lang['Registration'] = 'Tizimlitish K�lishimi';
$lang['Reg_agreement'] = 'Bashqurghuchilar we sehipe nazretchiliri bezi bolmughur y�zilmilarni imkan qeder qisqa waqit ichide birterep qilishqa yaki p�t�nley �ch�riw�tishke t�rishidu, emma ular barliq mes�jlarni teksh�r�p k�telishi natayin. Shunga bu sehipidiki barliq y�zilmilarning  qanuniy mesuliyiti uning yollighuchiliri ige bolidu, l�kin sehipe bashqurghuchilar mes\'ul bomaydu .<br /><br />Siz haqaret qilish, pitne-pasat tarqitish, qopal bolush, t�hmet qilish, �chmenlik qilish, tehdit s�lish xarektiridiki, shehwaniy bolghan we qanungha xilap materiallarni choqum yollimasliqqa qoshulishingiz k�rek. Bulargha diqqet qilmisingiz siz derhal we mengg�l�k yasaqqa (qoghlunisiz) uchraysiz (we sizning tor mulazimet wakaletchingizmu xewerdar qilinidu). Yuqarqi prinsiplarning y�rg�z�lishge yardimi bolishi �ch�n, yollanmilarning barliq IP adr�sliri xatirlinidu. Siz choqum nazaretchi, bashqurghuchi weyaki bet igisining herqandaq waqitta y�zilmilarni �zgertishi, y�tkishi we �churishige qoshulishingiz k�rek. Qollan\'ghuchichi bolush s�pitingiz bilen, siz teminligen mat�riyallarning sanliq ambarda saqlinishigha qoshulishingiz k�rek. Bu uchurlar sizning ruxsitingizsiz �chinchi bir shexiske ashkarlanmaydu, emma webmaster, bashqurghuchi we nazaretchiler hak�rler (hacker)ning hujum qilishi sewebidin mat�riyallarning ashkarlinip q�lishini tosushqa kapalet b�relmeydu.<br /><br />Bu munazire sist�misi uchurlarni kompyut�ringizda cookie arqiliq saqlaydu, bu cookielar siz yuqurida kirg�zgen uchurlarning h�chqaysisini �z ichige almaydu, cookie diki uchurlar peqet sizge munberni qolayliq k�r�shingiz �ch�nla. E-mail adr�singiz peqet sizning h�sabingizni we parolingizni ewetip b�rish hem parolni unutup qalghanda y�ngi parol ewetip b�rish �ch�n ishlitilidu. <br /><br />T�wendiki ulanmini cheksingiz bu k�lishimge qoshulghanliqingizni bild�ridu.';

$lang['Agree_under_13'] = 'Yuqirdiki k�lishimge qoshulimen hem men 13 yashtin <b>kichik</b> .';
$lang['Agree_over_13'] = 'Yuqirdiki k�lishimge qoshulimen hem men 13 yashtin <b>chong</b> .';
$lang['Agree_not'] = 'Bu k�lishimge qoshulmaymen.';

$lang['Wrong_activation'] = 'Kirg�zgen qozghutush kodi sanliq ambardikisi bilen mas kelmidi.';
$lang['Send_password'] = 'Manga bir y�ngi parol ibertsun'; 
$lang['Password_updated'] = 'Y�ngi parolngiz quruldi; bu toghrida bir tepsili k�rsetme e-mailingizgha ibertildi.';
$lang['No_email_match'] = 'Kirg�zgen e-mail adr�si sanliq ambardikisige maslashmidi. ';
$lang['New_password_activation'] = 'Y�ngi parolning qozghutulishi';

$lang['Password_activated'] = 'H�sabingiz qayta qozghutuldi. Kirish �ch�n e-mail arqiliq tapshurup alghan parolni ishliting.';

$lang['Send_email_msg'] = 'E-mail yollash';
$lang['No_user_specified'] = 'Qollanchi isimi tallanmidi';
$lang['User_prevent_email'] = 'Bu qollan\'ghuchi e-mail qobul qilishni xalimaydu. Xususiy mes�j yollap sinap b�qing.';
$lang['User_not_exist'] = 'Bundaq qollan\'ghuchi yoq';
$lang['CC_email'] = 'Bu e-mailning bir kopiyisini �zige yollash';

$lang['Email_message_desc'] = 'Mu mes�j t�kst h�jjiti p�ti yollandi, HTML yaki BBCode ni ishletmeng. Jawab qayturidighan adr�sqa sizning e-mail adr�singiz b�rildi. ';
$lang['Flood_email_limit'] = 'Mushu peytte bashqa e-mail yolliyalmaysiz, sel turup qayta sinang. ';
$lang['Recipient'] = 'Tapshurwalghuchi';
$lang['Email_sent'] = 'Bu e-mail yollandi.';
$lang['Send_email'] = 'E-mail yollash';
$lang['Empty_subject_email'] = 'E-mailgha bir mawzu qoyushingiz k�rek.';

$lang['Empty_message_email'] = 'E-mailning bir t�ksti bolishi k�rek.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Kirg�zgen jezimlesh kodi toghra bolmidi';
$lang['Too_many_registers'] = 'Sizning tizimlitishni sinash q�tim saningiz cheklimidin �sip ketti, sel turup qayta sinang.';
$lang['Confirm_code_impaired'] = 'Eger siz daim awarchilikke yoluqsingiz yaki bashqa sewebler t�peyli kodni oquyalmisingiz, %sBashqurghuchi%s din yardem sorang.';
$lang['Confirm_code'] = 'Jezimlesh Kodi';
$lang['Confirm_code_explain'] = 'K�rgen kodni toghra kirg�z�ng. Bu kodning chong-kichik y�zilishda perq bar, n�lning ichide bir diagonal siziq bar.';




//
// Memberslist
//
$lang['Select_sort_method'] = 'Sortlash usulini tallang';
$lang['Sort'] = 'Sortlash';
$lang['Sort_Top_Ten'] = 'Aldinqi 10 Qollan\'ghuchi';
$lang['Sort_Joined'] = 'Tizimlatqan Waqit';
$lang['Sort_Username'] = 'Qollanchi Isimi';
$lang['Sort_Location'] = 'Orni';
$lang['Sort_Posts'] = 'Y�zilma Sani';
$lang['Sort_Email'] = 'E-mail Adr�si';
$lang['Sort_Website'] = 'Torb�ti';
$lang['Sort_Ascending'] = 'Artma';
$lang['Sort_Descending'] = 'Azaytma';
$lang['Order'] = 'Tertipi';


//
// Group control panel

//
$lang['Group_Control_Panel'] = 'Guruppa Kontroli';
$lang['Group_member_details'] = 'Guruppa Ezaliri Tepsilati';
$lang['Group_member_join'] = 'Bir Guruppqa Q�tilish';

$lang['Group_Information'] = 'Guruppa Uchuri';
$lang['Group_name'] = 'Guruppa Nami';

$lang['Group_description'] = 'Guruppa Ch�shend�rlishi';
$lang['Group_membership'] = 'Guruppa Ezaliri';
$lang['Group_Members'] = 'Guruppa Ezaliri';

$lang['Group_Moderator'] = 'Guruppa Nazaretchisi';
$lang['Pending_members'] = 'Kandidat Ezalar';

$lang['Group_type'] = 'Guruppa t�ri';
$lang['Group_open'] = 'Ochuq Guruppa';
$lang['Group_closed'] = '�tik Guruppa';
$lang['Group_hidden'] = 'Yoshurun Guruppa';

$lang['Current_memberships'] = 'Hazirqi Ezalar';
$lang['Non_member_groups'] = 'Ezasiz Guruppilar';
$lang['Memberships_pending'] = 'Kandidat Ezalar';


$lang['No_groups_exist'] = 'Hazirche guruppa yoq';
$lang['Group_not_exist'] = 'Bundaq guruppa yoq';

$lang['Join_group'] = 'Guruppqa Q�tilish';
$lang['No_group_members'] = 'Bu guruppta eza yoq';
$lang['Group_hidden_members'] = 'Bu guruppa yoshurunghan, uning ezalirini k�relmeysiz.';
$lang['No_pending_group_members'] = 'Bu guruppta kandidat eza yoq';
$lang['Group_joined'] = 'Muweppeqiyetlik tizimlandingiz.<br />Nazaretchining teksh�rishidin �tkendin keyin sizni xewerlend�ridu.';
$lang['Group_request'] = 'Guruppqa q�tilish iltimasingiz quruldi.';
$lang['Group_approved'] = 'Iltimasingiz tapshuruldi.';
$lang['Group_added'] = 'Guruppqa q�tildingiz.'; 
$lang['Already_member_group'] = 'Siz bu gruppining ezasi boldingiz.';
$lang['User_is_member_group'] = 'Bu eza ezeldin mushu guppining ezasi.';
$lang['Group_type_updated'] = 'Guruppa t�ri muweppeqiyetlik y�ngilandi.';

$lang['Could_not_add_user'] = 'Siz tallighan qollan\'ghuchi mewjut emes.';
$lang['Could_not_anon_user'] = 'M�hman guruppa ezasi bolalmaydu.';

$lang['Confirm_unsub'] = 'Bu guruppa ezalirini emeldin qaldurushqa jezim qilamsiz?';
$lang['Confirm_unsub_pending'] = 'Iltimasingiz t�xi teksh�r�shtin �tmidi, uni qayturiwalamsiz?';

$lang['Unsub_success'] = 'Iltimasingizni qayturiwaldingiz.';

$lang['Approve_selected'] = 'Qobullash tallandi';
$lang['Deny_selected'] = 'Ret qilish tallandi';
$lang['Not_logged_in'] = 'Bu guruppqa q�tilish �ch�n kirgen bolishingiz k�rek.';
$lang['Remove_selected'] = 'Y�tkesh tallandi';
$lang['Add_member'] = 'Eza Qoshush';
$lang['Not_group_moderator'] = 'Siz bu guruppining nazaretchisi emes, shunga bu guruppini bashquralmaysiz.';

$lang['Login_to_join'] = 'Guruppqa q�tilish yaki bashqurush �ch�n, awwal kiring.';
$lang['This_open_group'] = 'Bu bir ochuq guruppa, ezaliqqa iltimas qilish �ch�n ch�king.';
$lang['This_closed_group'] = 'Bu bir �tik guruppa, y�ngi eza qobul qilinmaydu.';
$lang['This_hidden_group'] = 'Bu bir yoshurun guruppa, aptomatik tizimlitish qobul qilinmaydu.';
$lang['Member_this_group'] = 'Siz bu guruppining ezasi.';
$lang['Pending_this_group'] = 'Siz bu guruppining kandidat ezasi.';
$lang['Are_group_moderator'] = 'Siz bu gurppining nazaretchisi.';
$lang['None'] = 'Yoq';

$lang['Subscribe'] = 'Iltimas Qilish';
$lang['Unsubscribe'] = 'Qayturiw�lish';
$lang['View_Information'] = 'Guruppa Heqqide';


//
// Search
//
$lang['Search_query'] = 'Izdesh';
$lang['Search_options'] = 'Izdesh T�rliri';

$lang['Search_keywords'] = 'Achquchluq s�z boyiche';
$lang['Search_keywords_explain'] = '<u>AND</u> ni z�r�r bolghan s�zlerni izdeshte, <u>OR</u> ni t�pilsa bolidighan s�zlerni izdeshte we <u>NOT</u> ni  netijide k�r�shni xalimaydighan s�zlerde ishlitisiz. * belgisi bolsa izdeshte qismen mas kelt�r�shke ishlitilidu.';

$lang['Search_author'] = 'Aptor boyiche';
$lang['Search_author_explain'] = '* belgisi bolsa izdeshte qismen mas kelt�r�shke ishlitilidu.';

$lang['Search_for_any'] = 'Xalighan bir s�z boyiche izdesh';
$lang['Search_for_all'] = 'Barliq s�z boyiche izdesh';
$lang['Search_title_msg'] = 'Mawzu we t�kst boyiche izdesh';
$lang['Search_msg_only'] = 'Peqet t�kst boyiche izdesh';

$lang['Return_first'] = 'Eng aldidiki '; // followed by xxx characters in a select box
$lang['characters_posts'] = 'herplerni k�rs�t�sh';

$lang['Search_previous'] = 'Waqit dairisi'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortlash usuli';
$lang['Sort_Time'] = 'Waqit boyiche';
$lang['Sort_Post_Subject'] = 'T�ma boyiche';
$lang['Sort_Topic_Title'] = 'Mawzu boyiche';
$lang['Sort_Author'] = 'Aptor boyiche';
$lang['Sort_Forum'] = 'Sehipe boyiche';

$lang['Display_results'] = 'Netijisini k�r�sh';
$lang['All_available'] = 'Hemmisi';
$lang['No_searchable_forums'] = 'Sizning hemme sehipini izdesh hoquqingiz yoq.';

$lang['No_search_match'] = 'Shertingizge mas k�lidighan y�zilma yaki t�ma yoq iken. ';
$lang['Found_search_match'] = '%d Parche t�kst t�pildi.'; // eg. Search found 1 match
$lang['Found_search_matches'] = '%d Parche t�kst t�pildi. '; // eg. Search found 24 matches

$lang['Close_window'] = 'K�znekni y�pish';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Kech�r�ng, peqet %s bu sehipide uqturush yolliyalaydu.';
$lang['Sorry_auth_sticky'] = 'Kech�r�ng, peqet %s bu sehipide muhim mes�j yolliyalaydu.'; 
$lang['Sorry_auth_read'] = 'Kech�r�ng, peqet %s bu sehipidiki y�zilmilarni ouyalaydu.'; 
$lang['Sorry_auth_post'] = 'Kech�r�ng, peqet %s bu sehipide y�zilma yolliyalaydu.'; 
$lang['Sorry_auth_reply'] = 'Kech�r�ng, peqet %s bu sehipidiki y�zilmilirgha jawab qayturalaydu.';
$lang['Sorry_auth_edit'] = 'Kech�r�ng, peqet %s bu sehipidiki y�zilmilarni tehrirliyeleydu.'; 
$lang['Sorry_auth_delete'] = 'Kech�r�ng, peqet %s bu sehipidiki y�zilmilarni �ch�releydu.';
$lang['Sorry_auth_vote'] = 'Kech�r�ng, peqet %s bu sehipidiki ray-sinashqa awaz b�releydu.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>M�hmanlar</b>';
$lang['Auth_Registered_Users'] = '<b>Tizimlatqan Qollan\'ghuchilar</b>';
$lang['Auth_Users_granted_access'] = '<b>Alahide imtiyazliq qollan\'ghuchilar </b>';
$lang['Auth_Moderators'] = '<b>Nazaretchiler</b>';
$lang['Auth_Administrators'] = '<b>Bashqurghuchilar</b>';

$lang['Not_Moderator'] = 'Siz bu sehipining nazaretchisi emes.';
$lang['Not_Authorised'] = 'Hoquq b�rilmigen';

$lang['You_been_banned'] = 'Bu sehipidin qoghlandingiz.<br />Sewebini bet bashqurghuchi yaki nazaretchidin s�r�sht�r�ng.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '0 Neper tizimlatqan qollan\'ghuchi we '; // There are 5 Registered and
$lang['Reg_users_online'] = '%d Neper tizimlatqan qollan\'ghuchil we '; // There are 5 Registered and
$lang['Reg_user_online'] = '%d Neper tizimlatqan qollan\'ghuchi we '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 Neper yoshurn qollan\'ghuchi torda.'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Neper yoshurun qollan\'ghuchi torda.'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Neper yoshurun qollan\'ghuchi torda.'; // 6 Hidden users online
$lang['Guest_users_online'] = '%d Neper m�hmanlar torda.'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '0 Neper m�hmanlar torda.'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d Neper m�hman torda.'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Mushu peytte munberde qollan\'ghuchilar yoq.';

$lang['Online_explain'] = 'Bu yerde k�rs�tilgini, mushu axirqi 5 minutta torda bolghan qollan\'ghuchilarning ehwali';

$lang['Forum_Location'] = 'Munberdiki Orni';
$lang['Last_updated'] = 'Y�qinda y�ng�langhan';

$lang['Forum_index'] = 'Munber Bashb�ti';
$lang['Logging_on'] = 'Kirish';
$lang['Posting_message'] = 'Mes�j Y�zish';
$lang['Searching_forums'] = 'Sehipe Izdesh';
$lang['Viewing_profile'] = 'Profil K�rs�t�sh';
$lang['Viewing_online'] = 'Tordikilarni k�rs�t�sh';
$lang['Viewing_member_list'] = 'Ezalar tizimini k�rs�t�sh';
$lang['Viewing_priv_msgs'] = 'Xususiy mes�jni k�rs�t�sh';
$lang['Viewing_FAQ'] = 'FAQ (Qollanma)ni k�rs�t�sh';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Nazaretchi Kontroli';
$lang['Mod_CP_explain'] = 'T�wendiki iqtidarlar arqiliq bu sehipige nisbeten meshghulat qilalaysiz. Xalighan y�zilmilar �stide quluplash, �chish, y�tkesh yaki �ch�r�sh qilalaysiz.';

$lang['Select'] = 'Tallash';
$lang['Delete'] = '�ch�r�sh';
$lang['Move'] = 'Y�tkesh';
$lang['Lock'] = 'Quluplash';
$lang['Unlock'] = '�chish';

$lang['Topics_Removed'] = 'Tallighan t�milar muweppeqiyetlik �ch�r�ldi.';
$lang['Topics_Locked'] = 'Tallighan t�milar muweppeqiyetlik quluplandi.';
$lang['Topics_Moved'] = 'Tallighan t�milar muweppeqiyetlik y�tkeldi.';
$lang['Topics_Unlocked'] = 'Tallighan t�milar muweppeqiyetlik �childi.';
$lang['No_Topics_Moved'] = 'H�chqandaq t�ma y�tkelmidi.';

$lang['Confirm_delete_topic'] = 'Tallighan t�mini/t�milarni rastinla �ch�remsiz?';
$lang['Confirm_lock_topic'] = 'Tallighan t�mini/t�milarni rastinla quluplamsiz?';
$lang['Confirm_unlock_topic'] = 'Tallighan t�mini/t�milarni rastinla achamsiz?';
$lang['Confirm_move_topic'] = 'Tallighan t�mini/t�milarni rastinla y�tkemsiz?';

$lang['Move_to_forum'] = 'Y�tkeydighan sehipe';
$lang['Leave_shadow_topic'] = 'Kona sehipide kopiyesini qaldurush';

$lang['Split_Topic'] = 'T�ma B�l�sh Kontroli';
$lang['Split_Topic_explain'] = 'T�wendiki usul arqiliq bir t�mini ikkige ayriyalaysiz, uningdiki y�zilmilarni bir birlep tallisingiz yaki tallan\'ghan y�zilmini ayrisingiz bolidu.';
$lang['Split_title'] = 'Y�ngi t�mining mawzisi';

$lang['Split_forum'] = 'Y�ngi t�mining sehipisi';
$lang['Split_posts'] = 'Tallighan y�zilmilarni ayrish';
$lang['Split_after'] = 'Tallighan y�zilmdin ayrish';
$lang['Topic_split'] = 'Tallighan t�ma muweppeqiyetlik ayrildi.';

$lang['Too_many_error'] = 'Bek k�p y�zilma talliwettingiz. B�l�nmekchi bolghan t�midin k�yin peqet birla y�zilma talliyalaysiz!';

$lang['None_selected'] = 'Ayrish �ch�n h�chqandaq t�ma tallimidingiz, qaytip az d�gendimu birni tallang.';
$lang['New_forum'] = 'New forum';

$lang['This_posts_IP'] = 'Bu y�zilmini yollighan IP adr�s';
$lang['Other_IP_this_user'] = 'Bu qollan\'ghuchining bashqa IP adr�si';
$lang['Users_this_IP'] = 'Bu IP adr�sni ishletken bashqa qollan\'ghuchilar';
$lang['IP_info'] = 'IP Uchurliri';
$lang['Lookup_IP'] = 'IP adr�sini izdesh';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Barliq waqitlar: %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Saet';
$lang['-11'] = 'GMT - 11 Saet';
$lang['-10'] = 'HST (Hawaii)';
$lang['-9'] = 'GMT - 9 Saet';

$lang['-8'] = 'PST (U.S./Canada)';
$lang['-7'] = 'MST (U.S./Canada)';
$lang['-6'] = 'CST (U.S./Canada)';
$lang['-5'] = 'EST (U.S./Canada)';
$lang['-4'] = 'GMT - 4 Saet';
$lang['-3.5'] = 'GMT - 3.5 Saet';
$lang['-3'] = 'GMT - 3 Saet';
$lang['-2'] = 'Mid-Atlantic';
$lang['-1'] = 'GMT - 1 Saet';
$lang['0'] = 'GMT';
$lang['1'] = 'CET (Europe)';
$lang['2'] = 'EET (Europe)';
$lang['3'] = 'GMT + 3 Saet';
$lang['3.5'] = 'GMT + 3.5 Saet';
$lang['4'] = 'GMT + 4 Saet';
$lang['4.5'] = 'GMT + 4.5 Saet';

$lang['5'] = 'GMT + 5 Saet';
$lang['5.5'] = 'GMT + 5.5 Saet';
$lang['6'] = 'GMT + 6 Saet (�r�mchi Waqti)';
$lang['6.5'] = 'GMT + 6.5 Saet';
$lang['7'] = 'GMT + 7 Saet';
$lang['8'] = 'GMT + 8 Saet (Beijing Waqti)';
$lang['9'] = 'GMT + 9 Saet';
$lang['9.5'] = 'CST (Australia)';
$lang['10'] = 'EST (Australia)';
$lang['11'] = 'GMT + 11 Saet';
$lang['12'] = 'GMT + 12 Saet';
$lang['13'] = 'GMT + 13 Saet';

// These are displayed in the timezone select box
$lang['tz']['-12'] = '(GMT -12:00 Saet) Eniwetok, Kwajalein';
$lang['tz']['-11'] = '(GMT -11:00 Saet) Midway Island, Samoa';
$lang['tz']['-10'] = '(GMT -10:00 Saet) Haway';
$lang['tz']['-9'] = '(GMT -9:00 Saet) Alyaska';
$lang['tz']['-8'] = '(GMT -8:00 Saet) T�nch Okyan Waqti(Am�rika, Kanada), Tijuana';
$lang['tz']['-7'] = '(GMT -7:00 Saet) Taghliq Waqti(Am�rika, Kanada), Arizona';
$lang['tz']['-6'] = '(GMT -6:00 Saet) Ottura Rayon Waqti(Am�rika, Kanada), M�ksika Shehri';
$lang['tz']['-5'] = '(GMT -5:00 Saet) Sherqiy Qisim Waqti(Am�rika, Kanada), Bogota, Lima, Quito';
$lang['tz']['-4'] = '(GMT -4:00 Saet) Atlantik Okyan Waqti(Kanada), Karakas, La Paz';
$lang['tz']['-3.5'] = '(GMT -3:30 Saet) Newfoundland';
$lang['tz']['-3'] = '(GMT -3:00 Saet) Brazliye, Buenos Aires, Georgetown, Falkland Is';
$lang['tz']['-2'] = '(GMT -2:00 Saet) Ottura Atlantik Okyan, Ascension Is., St. Helena';
$lang['tz']['-1'] = '(GMT -1:00 Saet) Azores, Kape Verde Islands';
$lang['tz']['0'] = '(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia';
$lang['tz']['1'] = '(GMT +1:00 Saet) Amsterdam, B�rlin, Brussel, Madrid, Parij, Rim';
$lang['tz']['2'] = '(GMT +2:00 Saet) Qahire, Helsinki, Kaliningrad, Jenubiy Afriqa';
$lang['tz']['3'] = '(GMT +3:00 Saet) Baghdad, Riyadh, Moskowa, Nairobi';
$lang['tz']['3.5'] = '(GMT +3:30 Saet) T�hran';
$lang['tz']['4'] = '(GMT +4:00 Saet) Abu Dhabi, Baku, Muscat, Tbilisi';
$lang['tz']['4.5'] = '(GMT +4:30 Saet) Kabul';
$lang['tz']['5'] = '(GMT +5:00 Saet) Ekaterinburg, Islamabad, Karachi, Tashkent';
$lang['tz']['5.5'] = '(GMT +5:30 Saet) Bombay, Kalkutta, Madras, Y�ngi Delhi';
$lang['tz']['6'] = '(GMT +6:00 Saet) �r�mchi, Almata, Kolombo, Dhaka, Y�ngi Sib�riye';
$lang['tz']['6.5'] = '(GMT +6:30 Saet) Rangoon';
$lang['tz']['7'] = '(GMT +7:00 Saet) Bangkok, Hanoi, Jakarta';
$lang['tz']['8'] = '(GMT +8:00 Saet) Beijing, Hong Kong, Perth, Singapor, Taipei';
$lang['tz']['9'] = '(GMT +9:00 Saet) Osaka, Sapporo, Seoul, Tokyo, Yakutsk';
$lang['tz']['9.5'] = '(GMT +9:30 Saet) Adelaide, Darwin';
$lang['tz']['10'] = '(GMT +10:00 Saet) Kanberra, Guam, Melbourne, Sidn�y, Vladivostok';
$lang['tz']['11'] = '(GMT +11:00 Saet) Magadan, Y�ngi Kaledonia, Solomon Islands';
$lang['tz']['12'] = '(GMT +12:00 Saet) Auckland, Wellington, Fiji, Marshall Island';
$lang['tz']['13'] = 'GMT + 13 Saet';

$lang['datetime']['Sunday'] = 'Yekshenbe';
$lang['datetime']['Monday'] = 'D�shenbe';
$lang['datetime']['Tuesday'] = 'Seyshenbe';
$lang['datetime']['Wednesday'] = 'Charshenbe';
$lang['datetime']['Thursday'] = 'Peyshenbe';

$lang['datetime']['Friday'] = 'J�me';
$lang['datetime']['Saturday'] = 'Shenbe';
$lang['datetime']['Sun'] = 'Yek';
$lang['datetime']['Mon'] = 'D�s';
$lang['datetime']['Tue'] = 'Sey';
$lang['datetime']['Wed'] = 'Cha';
$lang['datetime']['Thu'] = 'Pey';
$lang['datetime']['Fri'] = 'J�m';
$lang['datetime']['Sat'] = 'She';
$lang['datetime']['January'] = 'Yanwar';
$lang['datetime']['February'] = 'F�wral';
$lang['datetime']['March'] = 'Mart';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'May';
$lang['datetime']['June'] = 'Iyun';
$lang['datetime']['July'] = 'Iyul';
$lang['datetime']['August'] = 'Awghust';
$lang['datetime']['September'] = 'S�nteb�r';
$lang['datetime']['October'] = 'Okteb�r';
$lang['datetime']['November'] = 'Noyab�r';
$lang['datetime']['December'] = 'D�kab�r';
$lang['datetime']['Jan'] = 'Yan';
$lang['datetime']['Feb'] = 'F�w';
$lang['datetime']['Mar'] = 'Mart';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'Iyun';
$lang['datetime']['Jul'] = 'Iyul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'S�n';
$lang['datetime']['Oct'] = '�kt';
$lang['datetime']['Nov'] = 'Noy';
$lang['datetime']['Dec'] = 'D�k';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Uchur';
$lang['Critical_Information'] = 'Hel qilghuch uchur';

$lang['General_Error'] = 'Adettiki xataliq';

$lang['Critical_Error'] = 'Hel qilghuch xataliq';
$lang['An_error_occured'] = 'Bir xataliq k�r�ldi.';
$lang['A_critical_error'] = 'Bir hel qilghuch xataliq k�r�ldi.';

// Translator credit
$lang['TRANSLATION_INFO'] = "Uyghurchigha terjime qilghuchilar: M.Erdem & Abdireyim";
//
// That's all, Folks!
// -------------------------------------------------

?>