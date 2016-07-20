<?php
/***************************************************************************
 *                            lang_main.php [Slovak]
 *                            ---------------------
 *     characterset         : Windows-1250
 *     begin                : 10-08-2002
 *     copyright            : (c) 2002 The phpBB CZ Group
 *     translation          : kolenka@stonline.sk
 *     convert2iso          : Kukymann
 *     www                  : 
 *
 *     $Id: lang_main.php,v 1.1.2.1 2002/08/23 19:21:43 psotfx Exp $
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
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = "Windows-1250";
$lang['DIRECTION'] = "LTR";
$lang['LEFT'] = "LEFT";
$lang['RIGHT'] = "RIGHT";
$lang['DATE_FORMAT'] =  "d.m.Y"; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "F�rum";
$lang['Category'] = "Kateg�ria";
$lang['Topic'] = "T�ma";
$lang['Topics'] = "T�my";
$lang['Replies'] = "Odpovede";
$lang['Views'] = "Prezret�";
$lang['Post'] = "Pr�spevok";
$lang['Posts'] = "Pr�spevky";
$lang['Posted'] = "Zaslal";
$lang['Username'] = "U��vate�";
$lang['Password'] = "Heslo";
$lang['Email'] = "E-mail";
$lang['Poster'] = "Odosielate�";
$lang['Author'] = "Autor";
$lang['Time'] = "�as";
$lang['Hours'] = "Hod�n";
$lang['Message'] = "Spr�va";

$lang['1_Day'] = "1 de�";
$lang['7_Days'] = "1 t��de�";
$lang['2_Weeks'] = "2 t��dne";
$lang['1_Month'] = "1 mesiac";
$lang['3_Months'] = "3 mesiace";
$lang['6_Months'] = "6 mesiacov";
$lang['1_Year'] = "1 rok";

$lang['Go'] = "Zobraz";
$lang['Jump_to'] = "Prejdi na";
$lang['Submit'] = "Odosla�";
$lang['Reset'] = "P�vodn� hodnoty";
$lang['Cancel'] = "Storno";
$lang['Preview'] = "N�h�ad";
$lang['Confirm'] = "Potvrdi�";
$lang['Spellcheck'] = "Kontrola pravopisu";
$lang['Yes'] = "�no";
$lang['No'] = "Nie";
$lang['Enabled'] = "Povolen�";
$lang['Disabled'] = "Zak�zan�";
$lang['Error'] = "Chyba";

$lang['Next'] = "�al��";
$lang['Previous'] = "Predch�dzaj�ci";
$lang['Goto_page'] = "Cho� na str�nku";
$lang['Joined'] = "Zalo�en�";
$lang['IP_Address'] = "IP Adresa";

$lang['Select_forum'] = "Zvo�te f�rum";
$lang['View_latest_post'] = "Zobrazi� posledn� pr�spevok";
$lang['View_newest_post'] = "Zobraz najnov�ie pr�spevky";
$lang['Page_of'] = "Strana <b>%d</b> z <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ";
$lang['AIM'] = "AOL Instant Messenger";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "Obsah f�ra %s";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Odosla� nov� t�mu";
$lang['Reply_to_topic'] = "Odpoveda� na t�mu";
$lang['Reply_with_quote'] = "Odpoveda� s cit�tom";

$lang['Click_return_topic'] = "Kliknite %ssem%s pre n�vrat do zoznamu t�m"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Kliknite %ssem%s pre opakovanie vo�by";
$lang['Click_return_forum'] = "Kliknite %ssem%s pre n�vrat do f�ra";
$lang['Click_view_message'] = "Kliknite %ssem%s pre zobrazenie Va�ej spr�vy";
$lang['Click_return_modcp'] = "Kliknite %ssem%s pre n�vrat do moder�torsk�ho ovl�dacieho panelu";
$lang['Click_return_group'] = "Kliknite %ssem%s pre n�vrat do inform�ci� o skupin�ch";

$lang['Admin_panel'] = "Administr�cia f�ra";

$lang['Board_disable'] = "Prep��te, ale toto f�rum je moment�lne nedostupn�, sk�ste opakova� vo�bu nesk�r";


//
// Global Header strings
//
$lang['Registered_users'] = "Registrovan� u��vate�ia:";
$lang['Browsing_forum'] = "U��vatelia prezeraj�ci toto f�rum:";
$lang['Online_users_zero_total'] = "Celkom je tu pr�tomn�ch <b>0</b> u��vate�ov : ";
$lang['Online_users_total'] = "Celkom je tu pr�tomn�ch <b>%d</b> u��vate�ov : ";
$lang['Online_user_total'] = "Celkom je tu pr�tomn� <b>%d</b> u��vate� : ";
$lang['Reg_users_zero_total'] = "0 registrovan�ch, ";
$lang['Reg_users_total'] = "%d registrovan�ch, ";
$lang['Reg_user_total'] = "%d registrovan�, ";
$lang['Hidden_users_zero_total'] = "0 skryt�ch a ";
$lang['Hidden_user_total'] = "%d skryt� a ";
$lang['Hidden_users_total'] = "%d skryt�ch a ";
$lang['Guest_users_zero_total'] = "0 anonymn�ch";
$lang['Guest_users_total'] = "%d Anonymn�ch";
$lang['Guest_user_total'] = "%d Anonymn�";
$lang['Record_online_users'] = "Najviac tu bolo s��asne pr�tomn�ch <b>%s</b> u��vate�ov d�a %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%sAdministr�tori%s";
$lang['Mod_online_color'] = "%sModer�tori%s";

$lang['You_last_visit'] = "Naposledy ste tu bol(a) %s"; // %s replaced by date/time
$lang['Current_time'] = "Pr�ve je %s"; // %s replaced by time

$lang['Search_new'] = "Zobrazi� nov� pr�spevky od poslednej n�v�tevy";
$lang['Search_your_posts'] = "Zobrazi� va�e pr�spevky";
$lang['Search_unanswered'] = "Zobrazi� pr�spevky bez odpoved�";

$lang['Register'] = "Registr�cia";
$lang['Profile'] = "Nastavenia";
$lang['Edit_profile'] = "Zmena nastaven�";
$lang['Search'] = "H�ada�";
$lang['Memberlist'] = "Zoznam u��vate�ov";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "Sprievodca zna�kami";
$lang['Usergroups'] = "U��vate�sk� skupiny";
$lang['Last_Post'] = "Posledn� pr�spevok";
$lang['Moderator'] = "Moder�tor";
$lang['Moderators'] = "Moder�tori";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "U��vatelia zaslali celkom <b>0</b> pr�spevkov"; // Number of posts
$lang['Posted_articles_total'] = "U��vatelia zaslali celkom <b>%d</b> pr�spevkov"; // Number of posts
$lang['Posted_article_total'] = "U��vatelia zaslali celkom <b>%d</b> pr�spevok"; // Number of posts
$lang['Registered_users_zero_total'] = "Je tu <b>0</b> registrovan�ch u��vate�ov"; // # registered users
$lang['Registered_users_total'] = "Je tu <b>%d</b> registrovan�ch u��vate�ov"; // # registered users
$lang['Registered_user_total'] = "Je tu <b>%d</b> registrovan� u��vate�"; // # registered users
$lang['Newest_user'] = "Najnov��m registrovan�m u��vate�om je <b>%s%s%s</b>"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "�iadne nov� pr�spevky od Va�ej poslednej n�v�tevy";
$lang['No_new_posts'] = "�iadne nov� pr�spevky";
$lang['New_posts'] = "Nov� pr�spevky";
$lang['New_post'] = "Nov� pr�spevok";
$lang['No_new_posts_hot'] = "�iadne nov� pr�spevky [ ob��ben� ]";
$lang['New_posts_hot'] = "Nov� pr�spevky [ ob��ben� ]";
$lang['No_new_posts_locked'] = "�iadne nov� pr�spevky [ zamknut� ]";
$lang['New_posts_locked'] = "Nov� pr�spevky [ zamknut� ]";
$lang['Forum_is_locked'] = "F�rum je zamknut�";


//
// Login
//
$lang['Enter_password'] = "Zadajte pros�m Va�e u��vate�sk� meno a heslo";
$lang['Login'] = "Prihl�senie";
$lang['Logout'] = "Odhl�senie";

$lang['Forgotten_password'] = "Zabudli ste svoje heslo ?";

$lang['Log_me_in'] = "Prihl�si� automaticky pri �al�ej n�v�teve";

$lang['Error_login'] = "Bolo zadan� neplatn� u��vate�sk� meno alebo heslo";


//
// Index page
//
$lang['Index'] = "F�rum";
$lang['No_Posts'] = "�iadne pr�spevky";
$lang['No_forums'] = "�iadne f�ra";

$lang['Private_Message'] = "S�kromn� spr�va";
$lang['Private_Messages'] = "S�kromn� spr�vy";
$lang['Who_is_Online'] = "Kto je pr�tomn�";

$lang['Mark_all_forums'] = "Ozna�i� v�etky f�ra ako pre��tan�";
$lang['Forums_marked_read'] = "V�etky f�ra boli ozna�en� ako pre��tan�";


//
// Viewforum
//
$lang['View_forum'] = "Zobrazi� f�rum";

$lang['Forum_not_exist'] = "Zvolen� f�rum neexistuje";
$lang['Reached_on_error'] = "Do�lo k chybe na tejto str�nke";

$lang['Display_topics'] = "Zobrazi� t�my za predch�dzaj�ce";
$lang['All_Topics'] = "V�etky t�my";

$lang['Topic_Announcement'] = "<b>Ozn�menia:</b>";
$lang['Topic_Sticky'] = "<b>D�le�it�:</b>";
$lang['Topic_Moved'] = "<b>Presunut�:</b>";
$lang['Topic_Poll'] = "<b>[ Hlasovanie ]</b>";

$lang['Mark_all_topics'] = "Ozna�i� v�etky t�my ako pre��tan�";
$lang['Topics_marked_read'] = "T�my tohto f�ra boli ozna�en� ako pre��tan�";

$lang['Rules_post_can'] = "<b>M��ete</b> odosiela� nov� t�my do tohto f�ra";
$lang['Rules_post_cannot'] = "<b>Nem��ete</b> odosiela� nov� t�my do tohto f�ra";
$lang['Rules_reply_can'] = "<b>M��ete</b> odpoveda� na t�my v tomto f�re";
$lang['Rules_reply_cannot'] = "<b>Nem��ete</b> odpoveda� na t�my v tomto f�re";
$lang['Rules_edit_can'] = "<b>M��ete</b> upravova� svoje pr�spevky v tomto f�re";
$lang['Rules_edit_cannot'] = "<b>Nem��ete</b> upravova� svoje pr�spevky v tomto f�re";
$lang['Rules_delete_can'] = "<b>M��ete</b> maza� svoje pr�spevky v tomto f�re";
$lang['Rules_delete_cannot'] = "<b>Nem��ete</b> maza� svoje pr�spevky v tomto f�re";
$lang['Rules_vote_can'] = "<b>M��ete</b> hlasova� v tomto f�re";
$lang['Rules_vote_cannot'] = "<b>Nem��ete</b> hlasova� v tomto f�re";
$lang['Rules_moderate'] = "<b>M��ete</b> %smoderova� toto f�rum%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "Toto f�rum neobsahuje �iadne t�my<br />Kliknite na odkaz <b>Nov� t�ma</b> pre pridanie novej t�my.";


//
// Viewtopic
//
$lang['View_topic'] = "Zobrazi� t�mu";

$lang['Guest'] = 'Anonymn�';
$lang['Post_subject'] = "Predmet";
$lang['View_next_topic'] = "Zobrazi� nasleduj�cu t�mu";
$lang['View_previous_topic'] = "Zobrazi� predch�dzaj�cu t�mu";
$lang['Submit_vote'] = "Odosla� hlas";
$lang['View_results'] = "Zobrazi� v�sledok";

$lang['No_newer_topics'] = "V tomto f�re nie s� �iadne nov�ie t�my";
$lang['No_older_topics'] = "V tomto f�re nie s� �iadne star�ie t�my";
$lang['Topic_post_not_exist'] = "T�ma alebo pr�spevok, ktor� po�adujete, nebol n�jden�";
$lang['No_posts_topic'] = "Pre t�to t�mu neexistuj� �iadne pr�spevky";

$lang['Display_posts'] = "Zobrazi� pr�spevky z predch�dzaj�cich";
$lang['All_Posts'] = "V�etky pr�spevky";
$lang['Newest_First'] = "Najsk�r najnov�ie";
$lang['Oldest_First'] = "Najsk�r nejstar�ie";

$lang['Back_to_top'] = "N�vrat hore";

$lang['Read_profile'] = "Zobrazit inform�cie o autorovi";
$lang['Send_email'] = "Odosla� e-mail autorovi";
$lang['Visit_website'] = "Zobrazi� autorove WWW str�nky";
$lang['ICQ_status'] = "ICQ stav";
$lang['Edit_delete_post'] = "Upravi�/Odstr�ni� tento pr�spevok";
$lang['View_IP'] = "Zobrazit IP adresu odosielate�a";
$lang['Delete_post'] = "Odstr�ni� tento pr�spevok";

$lang['wrote'] = "Nap�sal"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Cit�cia"; // comes before bbcode quote output.
$lang['Code'] = "K�d"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Naposledy upravil %s d�a %s, celkom upraven� %d kr�t"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Naposledy upravil %s d�a %s, celkom upraven� %d kr�t"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "Zamkn�� t�to t�mu";
$lang['Unlock_topic'] = "Odomkn�� t�to t�mu";
$lang['Move_topic'] = "Presun�� t�to t�mu";
$lang['Delete_topic'] = "Odstr�ni� t�to t�mu";
$lang['Split_topic'] = "Rozdeli� t�to t�mu";

$lang['Stop_watching_topic'] = "Ukon�i� sledovanie tejto t�my";
$lang['Start_watching_topic'] = "Sledova� odpovede na t�to t�mu";
$lang['No_longer_watching'] = "Prestal(a) ste sledova� t�to t�mu";
$lang['You_are_watching'] = "Za�al(a) ste sledova� t�to t�mu";

$lang['Total_votes'] = "Celkom hlasov";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Telo spr�vy";
$lang['Topic_review'] = "Preh�ad t�my";

$lang['No_post_mode'] = "Nebol zvolen� typ odoslania"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Odosla� nov� t�mu";
$lang['Post_a_reply'] = "Odosla� odpove�";
$lang['Post_topic_as'] = "Odosla� t�mu ako";
$lang['Edit_Post'] = "Upravi� pr�spevok";
$lang['Options'] = "Predvo�by";

$lang['Post_Announcement'] = "Ozn�menie";
$lang['Post_Sticky'] = "D�le�it�";
$lang['Post_Normal'] = "Norm�lny";

$lang['Confirm_delete'] = "Skuto�ne chcete odstr�ni� tento pr�spevok ?";
$lang['Confirm_delete_poll'] = "Skuto�ne chcete odstr�ni� toto Va�e hlasovanie ?";

$lang['Flood_Error'] = "Nem��ete odosla� nov� pr�spevok takto skoro po predch�dzaj�com pr�spevku, chv�u po�kajte a sk�ste to znova";
$lang['Empty_subject'] = "Mus�te zada� text predmetu";
$lang['Empty_message'] = "Mus�te zada� text pr�spevku";
$lang['Forum_locked'] = "Toto f�rum je zamknut�, nem��ete tu p�sa� ani upravova� pr�spevky";
$lang['Topic_locked'] = "T�to t�ma je zamknut� bez mo�nost� �pravy pr�spevkov a p�sania odpoved�";
$lang['No_post_id'] = "Mus�te zvoli� pr�spevok pre �pravu";
$lang['No_topic_id'] = "Mus�te zvoli� t�mu na kter� chcete odpoveda�";
$lang['No_valid_mode'] = "M��ete len odosiela�, upravova� alebo citova� pr�spevky, vykonajte n�vrat sp� a sk�ste to znova";
$lang['No_such_post'] = "Tak�to pr�spevok neexistuje, vykovajte n�vrat sp� a sk�ste to znova";
$lang['Edit_own_posts'] = "Prep��te, ale m��ete upravova� len svoje pr�spevky";
$lang['Delete_own_posts'] = "Prep��te, ale m��ete maza� len svoje pr�spevky";
$lang['Cannot_delete_replied'] = "Prep��te, ale nem��ete maza� pr�spevky, na ktor� u� bola odpove�";
$lang['Cannot_delete_poll'] = "Prep��te, ale nem��ete vymaza� akt�vne hlasovanie";
$lang['Empty_poll_title'] = "Mus�te nap�sa� hlasovaciu ot�zku";
$lang['To_few_poll_options'] = "Mus�te nap�sa� aspo� dve hlasovacie mo�nosti";
$lang['To_many_poll_options'] = "Pok��ate sa nap�sa� pr�li� ve�a hlasovac�ch mo�nost�";
$lang['Post_has_no_poll'] = "Tento pr�spevok nem� hlasovanie";
$lang['Already_voted'] = "V tomto hlasovan� ste u� hlasoval(a)";
$lang['No_vote_option'] = "Pri hlasovan� mus�te zvoli� niektor� z mo�nost�";

$lang['Add_poll'] = "Prida� Hlasovanie";
$lang['Add_poll_explain'] = "Ak nechcete prida� mo�nos� hlasovania k tejto t�me, nechajte polia pr�zdne";
$lang['Poll_question'] = "Hlasovacia ot�zka";
$lang['Poll_option'] = "Mo�n� odpovede";
$lang['Add_option'] = "Prida� odpove�";
$lang['Update'] = "Aktualizova�";
$lang['Delete'] = "Odstr�ni�";
$lang['Poll_for'] = "D�ka trvania";
$lang['Days'] = "dn�"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "(zadajte 0 alebo nevypl�ujte pre neobmedzen� �as hlasovania)";
$lang['Delete_poll'] = "Vymaza� Hlasovanie";

$lang['Disable_HTML_post'] = "Zak�za� HTML v tomto pr�spevku";
$lang['Disable_BBCode_post'] = "Zak�za� zna�ky v tomto pr�spevku";
$lang['Disable_Smilies_post'] = "Zak�za� Smajl�ky v tomto pr�spevku";

$lang['HTML_is_ON'] = "HTML: <u>POVOLEN�O</u>";
$lang['HTML_is_OFF'] = "HTML: <u>VYPNUT�</u>";
$lang['BBCode_is_ON'] = "%sZna�ky%s: <u>POVOLEN�</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sZna�ky%s: <u>VYPNUT�</u>";
$lang['Smilies_are_ON'] = "Smajl�ky: <u>POVOLEN�</u>";
$lang['Smilies_are_OFF'] = "Smajl�ky: <u>VYPNUT�</u>";

$lang['Attach_signature'] = "Pripoji� podpis (podpis m��ete zmeni� ve Va�om nastaven�)";
$lang['Notify'] = "Upozorni� ma, ak pr�de odpove�";
$lang['Delete_post'] = "Odstr�ni� tento pr�spevok";

$lang['Stored'] = "Va�a spr�va bola �spe�ne odoslan�";
$lang['Deleted'] = "Va�a spr�va bola �spe�ne odstr�nen�";
$lang['Poll_delete'] = "V� hlas bol �spe�ne odstr�nen�";
$lang['Vote_cast'] = "V� hlas bol prijat�";

$lang['Topic_reply_notification'] = "Upozornenie na odpove�";

$lang['bbcode_b_help'] = "Tu�n�: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Kurz�va: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Po�iarknut�: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Cit�cia: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Zobrazenie k�du: [code]code[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Zoznam: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "Usporiadan� zoznam: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Vlo�i� obr�zok: [img]http://image_url[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Vlo�i� URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Zavrre v�etky otvoren� zna�ky";
$lang['bbcode_s_help'] = "Farba p�sma: [color=red]text[/color]  Typ: m��ete pou�i� tie� color=#FF0000";
$lang['bbcode_f_help'] = "Ve�kos� p�sma: [size=x-small]mal� text[/size]";

$lang['Emoticons'] = "Smajl�ky (emotikony)";
$lang['More_emoticons'] = "Zobrazi� �al�ie smajl�ky (emotikony)";

$lang['Font_color'] = "Farba p�sma";
$lang['color_default'] = "Predvolen�";
$lang['color_dark_red'] = "Ga�tanov�";
$lang['color_red'] = "�erven�";
$lang['color_orange'] = "Oran�ov�";
$lang['color_brown'] = "Hned�";
$lang['color_yellow'] = "�lt�";
$lang['color_green'] = "Zelen�";
$lang['color_olive'] = "Olivov�";
$lang['color_cyan'] = "Akvamar�nov�";
$lang['color_blue'] = "Modr�";
$lang['color_dark_blue'] = "Tmavomodr�";
$lang['color_indigo'] = "Fialov�";
$lang['color_violet'] = "Fuchsiov�";
$lang['color_white'] = "Biela";
$lang['color_black'] = "�ierna";

$lang['Font_size'] = "Ve�kos� p�sma";
$lang['font_tiny'] = "Drobn�";
$lang['font_small'] = "Mal�";
$lang['font_normal'] = "Predvolen�";
$lang['font_large'] = "Ve�k�";
$lang['font_huge'] = "Obrovsk�";

$lang['Close_Tags'] = "Zavrie� zna�ky";
$lang['Styles_tip'] = "Tip: �t�l m��ete aplikova� r�chlej�ie na ozna�enom texte";


//
// Private Messaging
//
$lang['Private_Messaging'] = "S�kronm� spr�vy";

$lang['Login_check_pm'] = "Prihl�si�, pre kontrolu s�kromn�ch spr�v";
$lang['New_pms'] = "M�te %d nov�ch spr�v"; // You have 2 new messages
$lang['New_pm'] = "M�te %d nov� spr�vu"; // You have 1 new message
$lang['No_new_pm'] = "Nem�te nov� spr�vy";
$lang['Unread_pms'] = "M�te %d nepre��tan� spr�vy";
$lang['Unread_pm'] = "M�te %d nepre��tan� spr�vu";
$lang['No_unread_pm'] = "Nem�te nepre��tan� spr�vy";
$lang['You_new_pm'] = "Nov� s�kromn� apr�va �ak� na pre��tanie v doru�en�ch spr�vach";
$lang['You_new_pms'] = "Nov� s�kromn� spr�vy �ekaj� na pre��tanie v doru�en�ch spr�vach";
$lang['You_no_new_pm'] = "�iadne nov� s�kromn� spr�vy ne�akaj�";

$lang['Unread_message'] = 'Nepre��tan� spr�va';
$lang['Read_message'] = '��ta� spr�vu';

$lang['Read_pm'] = '��ta� spr�vu';
$lang['Post_new_pm'] = 'Posla� spr�vu';
$lang['Post_reply_pm'] = 'Odpoveda� na spr�vu';
$lang['Post_quote_pm'] = 'Citova� zo spr�vy';
$lang['Edit_pm'] = 'Upravi� spr�vu';

$lang['Inbox'] = "Doru�en�";
$lang['Outbox'] = "Nedoru�en�";
$lang['Savebox'] = "Ulo�en�";
$lang['Sentbox'] = "Odoslan�";
$lang['Flag'] = "Pr�znak";
$lang['Subject'] = "Predmet";
$lang['From'] = "Od";
$lang['To'] = "Komu";
$lang['Date'] = "D�tum";
$lang['Mark'] = "Ozna�i�";
$lang['Sent'] = "Poslan�";
$lang['Saved'] = "Ulo�en�";
$lang['Delete_marked'] = "Odstr�ni� ozna�en�";
$lang['Delete_all'] = "Odstr�ni� v�etko";
$lang['Save_marked'] = "Ulo�i� ozna�en�";
$lang['Save_message'] = "Ulo�i� spr�vu";
$lang['Delete_message'] = "Odstr�nit spr�vu";

$lang['Display_messages'] = "Zobrazi� spr�vy za predch�dzaj�ce"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "V�etky spr�vy";

$lang['No_messages_folder'] = "Nem�te �iadne spr�vy v tejto zlo�ke";

$lang['PM_disabled'] = "S�kromn� spr�vy tu boli vypnut�";
$lang['Cannot_send_privmsg'] = "Prep��te, ale administr�tor V�m neumo�nil posielanie s�kromn�ch spr�v";
$lang['No_to_user'] = "Mus�te zada� u��vate�sk� meno aby ste mohol(a) odosla� t�to spr�vu";
$lang['No_such_user'] = "Tento u��vate� nie je zaregistrovan�";

$lang['Disable_HTML_pm'] = "Zak�za� HTML v tejto spr�ve";
$lang['Disable_BBCode_pm'] = "Zak�za� Zna�ky v tejto spr�ve";
$lang['Disable_Smilies_pm'] = "Zak�za� smajl�ky (emotikony) v tejto spr�ve";

$lang['Message_sent'] = "Va�a spr�va bola odoslan�";

$lang['Click_return_inbox'] = "Kliknite %ssem%s pre n�vrat do doru�en�ch";
$lang['Click_return_index'] = "Kliknete %ssem%s pre n�vrat na obsah";

$lang['Send_a_new_message'] = "Odosla� nov� s�kromn� spr�vu";
$lang['Send_a_reply'] = "Odpoveda� na s�kromn� spr�vu";
$lang['Edit_message'] = "Upravi� s�kromn� spr�vu";

$lang['Notification_subject'] = "Pri�la nov� s�kromn� spr�va";

$lang['Find_username'] = "H�ada� u��vate�a";
$lang['Find'] = "H�ada�";
$lang['No_match'] = "�iadny v�sledok";

$lang['No_post_id'] = "Nebolo zvolen� ID spr�vy";
$lang['No_such_folder'] = "Po�adovan� zlo�ka neexistuje";
$lang['No_folder'] = "Nebola zvolen� zlo�ka";

$lang['Mark_all'] = "Ozna�i� v�etko";
$lang['Unmark_all'] = "Odzna�i� v�etko";

$lang['Confirm_delete_pm'] = "Skuto�ne chcete odstr�ni� t�to spr�vu ?";
$lang['Confirm_delete_pms'] = "Skuto�ne chcete odstr�ni� tieto spr�vy ?";

$lang['Inbox_size'] = "Schr�nka je zaplnen� z %d%%"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "Schr�nka je zaplnen� z %d%%";
$lang['Savebox_size'] = "Schr�nka je zaplnen� z %d%%";

$lang['Click_view_privmsg'] = "Kliknite %ssem%s pre zobrazenie obsahu prich�dzaj�cich spr�v";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Inform�cie o u��vate�ovi: %s"; // %s is username
$lang['About_user'] = "V�etko o u��vate�ovi %s"; // %s is username

$lang['Preferences'] = "Mo�nosti";
$lang['Items_required'] = "Polia ozna�en� \"*\" s� povinn� a musia by� vyplnen�";
$lang['Registration_info'] = "Registra�n� �daje";
$lang['Profile_info'] = "Osobn� �daje";
$lang['Profile_info_warn'] = "Tieto inform�cie bud� verejne zobrazite�n�";
$lang['Avatar_panel'] = "Obr�zky postavi�iek";
$lang['Avatar_gallery'] = "Gal�rie postavi�iek";

$lang['Website'] = "WWW";
$lang['Location'] = "Bydlisko";
$lang['Contact'] = "Kontakt";
$lang['Email_address'] = "E-mailov� adresa";
$lang['Email'] = "E-mail";
$lang['Send_private_message'] = "Odosla� s�kromn� spr�vu";
$lang['Hidden_email'] = "[ skryt� ]";
$lang['Search_user_posts'] = "H�ada� pr�spevky tohto u��vate�ia";
$lang['Interests'] = "Z�ujmy";
$lang['Occupation'] = "Povolanie"; 
$lang['Poster_rank'] = "Odosilate�ovo hodnotenie";

$lang['Total_posts'] = "Pr�spevkov";
$lang['User_post_pct_stats'] = "%.2f%% zo v�etk�ch pr�spevkov"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f pr�spevkov za de�"; // 1.5 posts per day
$lang['Search_user_posts'] = "H�ada� v�etky pr�spevky od u��vate�a %s"; // Find all posts by username

$lang['No_user_id_specified'] = "Prep��te, ale tento u��vate� neexistuje";
$lang['Wrong_Profile'] = "Nem��ete modifikova� toto nastavenie, preto�e nie ste jeho vlastn�kom";

$lang['Only_one_avatar'] = "M��e by� vybrat� len jeden obr�zok postavi�ky";
$lang['File_no_data'] = "S�ubor na zadanej URL adrese neobsahuje �iadne d�ta";
$lang['No_connection_URL'] = "Nie je mo�n� naviaza� spojenie so zadanou URL adresou";
$lang['Incomplete_URL'] = "Vami zadan� URL adresa nie je kompletn�";
$lang['Wrong_remote_avatar_format'] = "URL adresa vzdialen�ho obr�zku postavi�ky nie je dostupn�";
$lang['No_send_account_inactive'] = "Prep��te, ale Va�e heslo nem��e by� n�jden�, preto�e je V� ��et moment�lne akt�vny. Pre viac inform�ci� kontaktujte administr�tora tohto f�ra";

$lang['Always_smile'] = "V�dy povoli� smajl�ky";
$lang['Always_html'] = "V�dy povoli� HTML";
$lang['Always_bbcode'] = "V�dy povoli� zna�ky";
$lang['Always_add_sig'] = "V�dy pripoji� m�j podpis";
$lang['Always_notify'] = "V�dy ma upozorni� na odpovede";
$lang['Always_notify_explain'] = "Posla� e-mail, ke� nikto odpovie na Vami poslan� t�mu. Toto m��e by� zmenen� kedyko�vek pred odoslan�m";

$lang['Board_style'] = "Vzh�ad f�ra";
$lang['Board_lang'] = "Jazyk f�ra";
$lang['No_themes'] = "Vzh�ad nie je v datab�ze";
$lang['Timezone'] = "�asov� p�smo";
$lang['Date_format'] = "Form�t d�tumu a �asu";
$lang['Date_format_explain'] = "Pou�it� syntax je zhodn� s PHP funkciou <a href=\"http://www.php.net/date\" target=\"_other\">date()</a>";
$lang['Signature'] = "Podpis";
$lang['Signature_explain'] = "Text, ktor� m��e by� prid�van� do Va�ich pr�spevkov<br>Maxim�lne %d znakov";
$lang['Public_view_email'] = "V�dy zobrazova� moju e-mailov� adresu";

$lang['Current_password'] = "Aktu�lne heslo";
$lang['New_password'] = "Nov� heslo";
$lang['Confirm_password'] = "Potvdenie hesla";
$lang['Confirm_password_explain'] = "Pokia� chcete zmeni� heslo alebo upravi� e-mailov� adresu, mus�te zada� Va�e aktu�lne heslo";
$lang['password_if_changed'] = "Vypl�te pokia� chcete zmeni� aktu�lne heslo";
$lang['password_confirm_if_changed'] = "Vypl�te pre potvrdenie, pokia� chcete zmeni� va�e aktu�lne heslo";

$lang['Avatar'] = "Obr�zok postavi�ky";
$lang['Avatar_explain'] = "Zobrazi� mal� obr�zok postavi�ky pod podrobnos�ami v pr�spevkoch. Len jeden obr�zok postavi�ky bude zobrazen�, jeho ��rka by nemala by� v��ia ako %d bodov a v��ka %d bodov a ve�kos� s�boru by nemala presahova� %dkB.";
$lang['Upload_Avatar_file'] = "Prihra� obr�zok postavi�ky zo svojho po��ta�a";
$lang['Upload_Avatar_URL'] = "Nahra� obr�zok postavi�ky z URL";
$lang['Upload_Avatar_URL_explain'] = "Zadajte URL umiestnenia obr�zku postavi�ky, pre skop�rovanie na tento server.";
$lang['Pick_local_Avatar'] = "Zvo�te obr�zok postavi�ky z gal�rie";
$lang['Link_remote_Avatar'] = "Odkaz na vzdialen� obr�zok postavi�ky";
$lang['Link_remote_Avatar_explain'] = "Zadajte URL umiestnenia obr�zku postavi�ky, na ktor� chcete odk�za�.";
$lang['Avatar_URL'] = "URL adresa obr�zku s postavi�kou";
$lang['Select_from_gallery'] = "Zvo�te obr�zok postavi�ky z gal�rie";
$lang['View_avatar_gallery'] = "Zobrazit gal�riu postavi�iek";

$lang['Select_avatar'] = "Zvo�te obr�zok postavi�ky";
$lang['Return_profile'] = "N�vrat do nastaven�";
$lang['Select_category'] = "Vo�ba kateg�rie";

$lang['Delete_Image'] = "Odstr�ni� obr�zok";
$lang['Current_Image'] = "Aktu�lny obr�zok";

$lang['Notify_on_privmsg'] = "Upozorni� na pr�chod novej s�kromnej spr�vy";
$lang['Popup_on_privmsg'] = "Otvori� nov� okno pri pr�chode novej s�kromnej spr�vy";
$lang['Popup_on_privmsg_explain'] = "Niektor� �abl�ny m��u otvori� nov� okno, aby V�s informovali o novej doru�enej s�kromnej spr�ve";
$lang['Hide_user'] = "Skry� Va�u pr�tomnos� vo f�re";

$lang['Profile_updated'] = "Va�e nastavenia boli aktualizovan�";
$lang['Profile_updated_inactive'] = "Va�e nastavenia boli aktualizovan�, ale ke�e ste zmenil(a) d�le�it� inform�cie, je teraz V� ��et neakt�vny. Skontrolujte V� e-mail pre inform�cie ako ho znova aktivova�, alebo pokia� je potrebn� administr�torsk� aktiv�cia, po�kajte a� administr�tor V� ��et znova aktivuje";

$lang['Password_mismatch'] = "Zadan� hesl� sa nezhoduj�";
$lang['Current_password_mismatch'] = "Vami zadan� aktu�lne heslo nie je spr�vne";
$lang['Password_long'] = "Va�e heslo nesmie presahova� 32 znakov";
$lang['Username_taken'] = "Prep��te, ale tento u��vate� je u� zaregistrovan�";
$lang['Username_invalid'] = "Prep��te, ale toto u��vate�sk� meno obsahuje nepovolen� znaky \"";
$lang['Username_disallowed'] = "Prep��te, ale toto u��vate�sk� meno je zak�zan�";
$lang['Email_taken'] = "Prep��te, ale t�to e-mailov� adresu m� u� registrovan� niektor� u��vate�";
$lang['Email_banned'] = "Prep��te, ale t�to e-mailov� adresa bola zak�zan�";
$lang['Email_invalid'] = "Prep��te, t�to e-mailov� adresa nie je platn�";
$lang['Signature_too_long'] = "V� podpis je pr�li� dlh�";
$lang['Fields_empty'] = "Mus�te zada� po�adovan� �daje";
$lang['Avatar_filetype'] = "Obr�zok postavi�ky mus� by� typu .jpg, .gif alebo .png";
$lang['Avatar_filesize'] = "S�bor obr�zku postavi�ky mus� by� men�� ako %d kB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Obr�zok postavi�ky mus� ma� ��rku maxim�lne %d bodov a v��ku %d bodov";

$lang['Welcome_subject'] = "V�tejte na %s f�re"; // Welcome to my.com forums
$lang['New_account_subject'] = "Nov� u��vate�sk� ��et";
$lang['Account_activated_subject'] = "��et aktivovan�";

$lang['Account_added'] = "�akujeme za registr�ciu, V� ��et bol vytvoren�. Teraz sa m��ete prihl�si� pod svoj�m menom a heslom";
$lang['Account_inactive'] = "V� u��vate�sk� ��et byl vytvoren�. Av�ak toto f�rum vy�aduje aktiv�ciu ��tu. Aktiva�n� k�u�, V�m bol zaslan� na Vami poskytnut� e-mailov� adresu. Bli��ie inform�cie obdr��te na Va�u e-mailov� adresu";
$lang['Account_inactive_admin'] = "V� u��vate�sk� ��et bol vytvoren�. Av�ak toto f�rum vy�aduje aktiv�ciu ��tu administr�torom. Po aktiv�cii administr�torom, budete vyrozumen�(�) na Va�u e-mailov� adresu";
$lang['Account_active'] = "V� ��et bol aktivovan�. �akujeme za registr�ciu";
$lang['Account_active_admin'] = "��et bol aktivovan�";
$lang['Reactivate'] = "Reaktivujte svoj ��et!";
$lang['Already_activated'] = 'V� ��et ste u� aktivoval';
$lang['COPPA'] = "V� ��et bol vytvoren�, ale nemus� by� e�te akceptovan�. Pre potvrdenie si pre��tajte bli��ie inform�cie v zaslanom e-maile";

$lang['Registration'] = "Registra�n� podmienky";
$lang['Reg_agreement'] = "Aj ke� sa administr�tori a moder�tori tohto f�ra pok�sia odstr�ni� alebo upravi� ak�ko�vek v�eobecne ne�iad�ci materi�l tak r�chlo ako je to len mo�n�, je nemo�n� kontrolova� ka�d� pr�spevok. Preto berte na vedomie, �e v�etky pr�spevky do tohto f�ra vyjadruj� poh�ady a n�zory autora pr�spevku a nie administr�torov, moder�torov a webmastera (okrem pr�spevkov od t�chto �ud�) a preto za ne nem��u by� zodpovedn�.<br><br>S�hlas�te s t�m, �e nebudete posiela� �iadne hanliv�, neslu�n�, vulg�rne, nen�vistn�, zastra�uj�ce, sexu�lne orientovan� alebo in� materi�ly, ktor� m��u poru�ova� z�kony. Posielanie tak�chto materi�lov V�m m��e privodi� okam�it� a trval� vyhostenie z f�ra (a V� ISP bude o Va�ej �innosti informovan�). IP adresa v�etk�ch pr�spevkov je zaznamen�van� pre pr�pad potreby vyn�tenia t�chto podmienok. S�hlas�te, �e webmaster, administr�tor a moder�tori tohto f�ra maj� pr�vo odstr�ni�, upravi�, presun�� alebo ukon�i� ak�ko�vek t�mu kedyko�vek zistia, �e odporuje t�mto podmienkam. Ako u��vate� s�hlas�te, �e ak�ko�vek inform�cie, ktor� vlo��te bud� ulo�en� v datab�ze. Dokia� nebud� tieto inform�cie prezraden� tretej strane bez V�ho povolenia nem��u by� webmaster, administr�tor a moder�tori pova�ovan� za zodpovedn�ch za ak�ko�vek hackersk� pokusy, ktor� m��u vies� k tomu, �e d�ta bud� kompromitovan�.<br><br>Syst�m tohto f�ra pou��va cookies k ukladaniu inform�ci� na Va�om po��ta�i. Tieto cookies neobsahuj� �iadne inform�cie, ktor� ste vlo�il(a), sl��ia len k zv��eniu V�ho pohodlia pri prehliadan�. E-mailov� adresa je pou��van� len pre potvrdenie Va�ich registra�n�ch detailov a hesla (a pre poslanie nov�ho hesla, pokia� ste zabudol aktu�lne).<br><br>Kliknut�m na Registr�ciu ni��ie s�hlas�te by� viazan� t�mito podmienkami.";

$lang['Agree_under_13'] = "S�hlas�m s t�mito podmienkami a je mi <b>menej</b> ako 13 rokov";
$lang['Agree_over_13'] = "S�hlas�m s t�mito podmienkami a je mi <b>viac</b> ako 13 rokov";
$lang['Agree_not'] = "Nes�hlas�m s t�mito podmienkami";

$lang['Wrong_activation'] = "Vami poskytnut� aktiva�n� k��� nezodpoved� �iadnemu z datab�zy";
$lang['Send_password'] = "Za�lite mi nov� heslo";
$lang['Password_updated'] = "Nov� heslo bolo vytvoren�, o�ak�vejte e-mail s inform�ciami ako ho aktivova�";
$lang['No_email_match'] = "E-mailov� adresa nes�hlas� s adresou priradenou k V�mu u��vate�sk�mu menu";
$lang['New_password_activation'] = "Aktiv�cia nov�ho hesla";
$lang['Password_activated'] = "V� ��et bol reaktivovan�. Pre prihl�senie pou�ite heslo, ktore V�m bolo zaslan� e-mailom";

$lang['Send_email_msg'] = "Odosla� e-mailov� spr�vu";
$lang['No_user_specified'] = "Nebol zvolen� �iadny u��vate�";
$lang['User_prevent_email'] = "Tento u��vate� si nepraje prij�ma� odpovede e-mailom. Sk�ste mu posla� s�kromn� spr�vu";
$lang['User_not_exist'] = "Tento u��vate� neexistuje";
$lang['CC_email'] = "Odosla� k�piu tohto e-mailu sebe";
$lang['Email_message_desc'] = "T�to spr�va bude zaslan� ako prost� text, nebude obsahova� �iadne HTML ani zna�ky. Adresa pre odpove� na t�to spr�vu bude nastaven� na Va�u e-mailov� adresu.";
$lang['Flood_email_limit'] = "Nem��ete teraz odosla� �al�� e-mail, sk�ste opakova� nesk�r";
$lang['Recipient'] = "Pr�jemca";
$lang['Email_sent'] = "E-mail bol odoslan�";
$lang['Send_email'] = "Odosla� e-mail";
$lang['Empty_subject_email'] = "Mus�te zada� predmet e-mailu";
$lang['Empty_message_email'] = "Mus�te zada� text spr�vy";


//
// Memberslist
//
$lang['Select_sort_method'] = "Zoradi� pod�a";
$lang['Sort'] = "Zoradi�";
$lang['Sort_Top_Ten'] = "Naj�astej�� prispievatelia";
$lang['Sort_Joined'] = "D�tumu registr�cie";
$lang['Sort_Username'] = "Mena u��vate�a";
$lang['Sort_Location'] = "Bydliska";
$lang['Sort_Posts'] = "Po�tu pr�spevkov";
$lang['Sort_Email'] = "E-mailu";
$lang['Sort_Website'] = "WWW str�nky";
$lang['Sort_Ascending'] = "Vzostupne";
$lang['Sort_Descending'] = "Zostupne";
$lang['Order'] = "Pod�a poradia";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Skupina - Ovl�dac� panel";
$lang['Group_member_details'] = "Detaily �lenstva v skupine";
$lang['Group_member_join'] = "Vst�pi� do skupiny";

$lang['Group_Information'] = "Inform�cie o skupine";
$lang['Group_name'] = "Meno skupiny";
$lang['Group_description'] = "Popis skupiny";
$lang['Group_membership'] = "Va�e �lenstvo";
$lang['Group_Members'] = "�lenovia skupiny";
$lang['Group_Moderator'] = "Moder�tor skupiny";
$lang['Pending_members'] = "�akaj�ci �lenovia";

$lang['Group_type'] = "Typ skupiny";
$lang['Group_open'] = "Otvoren� skupina";
$lang['Group_closed'] = "Uzavret� skupina";
$lang['Group_hidden'] = "Skryt� skupina";

$lang['Current_memberships'] = "Aktu�lne �lenstvo";
$lang['Non_member_groups'] = "Skupiny bez �lenov";
$lang['Memberships_pending'] = "�akacie �lenstvo";

$lang['No_groups_exist'] = "Neexistuje �iadna skupina";
$lang['Group_not_exist'] = "T�to skupina neexistuje";

$lang['Join_group'] = "Prihl�si� sa do skupiny";
$lang['No_group_members'] = "T�to skupina nem� �lenov";
$lang['Group_hidden_members'] = "T�to skupina je skryt�, nem��ete vidie� zoznam ich �lenov";
$lang['No_pending_group_members'] = "T�to skupina nem� �akaj�cich �lenov";
$lang["Group_joined"] = "�spe�ne ste vst�pil do tejto skupiny<br>Budete informovan� a� bude V� vstup moder�torom tejto skupiny ods�hlasen�";
$lang['Group_request'] = "Va�a �iados� o vstup do skupiny bola odoslan�";
$lang['Group_approved'] = "Va�a �iados� bola ods�hlasen�";
$lang['Group_added'] = "Bol ste prijat� do tejto skupiny";
$lang['Already_member_group'] = "U� ste �lenom tejto skupiny";
$lang['User_is_member_group'] = "U��vate� u� je �lenom tejto skupiny";
$lang['Group_type_updated'] = "Typ skupiny bol �spe�ne aktualizovan�";

$lang['Could_not_add_user'] = "Zvolen� u��vate� neexistuje";
$lang['Could_not_anon_user'] = "Anonymn� u��vate� nem��e by� �lenom skupiny";

$lang['Confirm_unsub'] = "Skuto�ne chcete ukon�i� �lenstvo v tejto skupine ?";
$lang['Confirm_unsub_pending'] = "Va�e �lenstvo v tejto skupine zatia� nebolo ods�hlasen�, skuto�ne ho chcete ukon�i� ?";

$lang['Unsub_success'] = "Prestal ste by� �lenom tejto skupiny";

$lang['Approve_selected'] = "Akceptova� zvolen�";
$lang['Deny_selected'] = "Zamietnu� zvolen�";
$lang['Not_logged_in'] = " Pre vstup do skupiny mus�te by� prihl�sen�.";
$lang['Remove_selected'] = "Odstr�ni� zvolen�";
$lang['Add_member'] = "Prida� �lena";
$lang['Not_group_moderator'] = "Nie ste moder�torom tejto skupiny, preto nem��ete vykona� t�to akciu";

$lang['Login_to_join'] = "Prihl�si� pre vstup do skupiny alebo �pravy �lenstva";
$lang['This_open_group'] = "Toto je otvoren� skupina, kliknite pre po�iadanie o �lenstvo";
$lang['This_closed_group'] = "Toto je uzavret� skupina, �iadni �al�� u��vatelia nie s� pr�j�man�";
$lang['This_hidden_group'] = "Toto je skryt� skupina, automatick� prid�vanie u��vate�ov nie je povolen�";
$lang['Member_this_group'] = "Ste �lenom tejto skupiny";
$lang['Pending_this_group'] = "Va�e �lenstvo v tejto skupine �ak� na ods�hlasenie";
$lang['Are_group_moderator'] = "Ste moder�torom skupiny";
$lang['None'] = "Nikto nie je pr�tomn�";

$lang['Subscribe'] = "Po�iada� o �lenstvo";
$lang['Unsubscribe'] = "Ukon�i� �lenstvo";
$lang['View_Information'] = "Zobrazi� inform�cie";


//
// Search
//
$lang['Search_query'] = "H�adan� re�azec";
$lang['Search_options'] = "Mo�nosti h�adania";

$lang['Search_keywords'] = "K���ov� slov�";
$lang['Search_keywords_explain'] = "M��ete pou�i� <u>AND</u> pre slov�, ktor� musia by� vo v�sledkoch, <u>OR</u> pre tak�, ktor� tam m��u by� a <u>NOT</u> pre tak�, ktor� by vo v�sledkoch nemali by�. Znak \"*\" nahrad� �as� re�azca pri vyh�ad�van�";
$lang['Search_author'] = "Autora";
$lang['Search_author_explain'] = "Znak \"*\" nahrad� �as� re�azca pri vyh�ad�van�";

$lang['Search_for_any'] = "H�ada� ktor�ko�vek slovo alebo v�raz ak je zadan�";
$lang['Search_for_all'] = "H�ada� v�etky slov�";
$lang['Search_title_msg'] = "H�ada� n�zov t�my a text spr�vy";
$lang['Search_msg_only'] = "H�ada� len text spr�vy";

$lang['Return_first'] = "Zobraz prv�ch"; // followed by xxx characters in a select box
$lang['characters_posts'] = "znakov z pr�spevku";

$lang['Search_previous'] = "Preh�adaj predch�dzaj�ce"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "Zotriedi� pod�a";
$lang['Sort_Time'] = "�as odoslania";
$lang['Sort_Post_Subject'] = "Predmetu";
$lang['Sort_Topic_Title'] = "Hlavi�ky t�my";
$lang['Sort_Author'] = "Autora";
$lang['Sort_Forum'] = "F�ra";

$lang['Display_results'] = "Zobrazi� v�sledok ako";
$lang['All_available'] = "V�etky dostupn�";
$lang['No_searchable_forums'] = "Pokia� nechcete povoli� vyh�ad�vanie v �ubovo�n�ch f�rach tohto serveru";

$lang['No_search_match'] = "�iadna t�ma alebo pr�spevok neboli n�jden� pod�a zvolen�ch krit�ri�";
$lang['Found_search_match'] = "Bol n�jden� %d v�sledok h�adania"; // eg. Search found 1 match
$lang['Found_search_matches'] = "Bolo n�jden�ch %d v�sledkov h�adania"; // eg. Search found 24 matches

$lang['Close_window'] = "Zavrie� okno";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Prep��te, ale len %s m��u posiela� ozn�menia do tohto f�ra";
$lang['Sorry_auth_sticky'] = "Prep��te, ale len %s m��u posiela� d�le�it� spr�vy do tohoto f�ra";
$lang['Sorry_auth_read'] = "Prep��te, ale len %s m��u ��ta� t�my v tomto f�re";
$lang['Sorry_auth_post'] = "Prep��te, ale len %s m��u posiela� t�my do tohto f�ra";
$lang['Sorry_auth_reply'] = "Prep��te, ale len %s m��u odpoveda� na pr�spevky v tomto f�re";
$lang['Sorry_auth_edit'] = "Prep��te, ale len %s m��u upravova� pr�spevky v tomto f�re";
$lang['Sorry_auth_delete'] = "Prep��te, ale len %s m��u maza� pr�spevky v tomto f�re";
$lang['Sorry_auth_vote'] = "Prep��te, ale len %s m��u hlasova� v hlasovan� tohto f�ra";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>Anonymn� u��vatelia</b>";
$lang['Auth_Registered_Users'] = "<b>Registrovan� u��vatelia</b>";
$lang['Auth_Users_granted_access'] = "<b>U��vatelia so zvl�tnym opr�vnen�m</b>";
$lang['Auth_Moderators'] = "<b>Moder�tori</b>";
$lang['Auth_Administrators'] = "<b>Administr�tori</b>";

$lang['Not_Moderator'] = "Nie ste moder�torom tohto f�ra";
$lang['Not_Authorised'] = "Neautorizovan�";

$lang['You_been_banned'] = "Bol jste vyk�zan� z tohto f�ra<br>Pros�m kontaktujte webmastera alebo administr�tora tohto f�ra pre z�sk�nie bli���ch inform�ci�";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Je tu 0 registrovan�ch u��vate�ov a "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Je tu %d registrovan�ch u��vate�ov a "; // There ae 5 Registered and
$lang['Reg_user_online'] = "Je tu %d registrovan� u��vate� a "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 skryt�ch u��vate�ov"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d skryt�ch u��vate�ov"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d skryt� u��vate�"; // 6 Hidden users online
$lang['Guest_users_online'] = "Je tu %d anonymn�ch u��vate�ov"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "Je tu 0 anonymn�ch u��vate�ov"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Je tu %d anonymn� u��vate�"; // There is 1 Guest user online
$lang['No_users_browsing'] = "Moment�lne tu nie s� �iadni u��vatelia";

$lang['Online_explain'] = "Tieto d�ta s� zalo�en� na aktivite u��vate�ov po�as posledn�ch 5 min�t";

$lang['Forum_Location'] = "Nach�dza sa";
$lang['Last_updated'] = "Posledn� aktualiz�cia";

$lang['Forum_index'] = "Obsah f�ra";
$lang['Logging_on'] = "Prihlasuje sa";
$lang['Posting_message'] = "Odosiela spr�vu";
$lang['Searching_forums'] = "Preh�ad�va f�ra";
$lang['Viewing_profile'] = "Prehliada nastavenia";
$lang['Viewing_online'] = "Prehliada zoznam pr�tomn�ch u��vate�ov";
$lang['Viewing_member_list'] = "Prehliada zoznam u��vate�ov";
$lang['Viewing_priv_msgs'] = "Prehliada s�kromn� spr�vy";
$lang['Viewing_FAQ'] = "Prehliada FAQ";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moder�tor - Ovl�dac� panel";
$lang['Mod_CP_explain'] = "Pomocou nasleduj�ceho formul�ra m��ete vykon�va� hromadn� z�sahy do tohto f�ra. M��ete zamyka�, odomyka�, pres�va� a maza� ak�ko�vek po�et t�m";

$lang['Select'] = "Zvoli�";
$lang['Delete'] = "Odstr�ni�";
$lang['Move'] = "Presun��";
$lang['Lock'] = "Zamkn��";
$lang['Unlock'] = "Odomkn��";

$lang['Topics_Removed'] = "Zvolen� t�my boli �spe�ne odstr�nen� z datab�zy.";
$lang['Topics_Locked'] = "Zvolen� t�my boli uzamknut�";
$lang['Topics_Moved'] = "Zvolen� t�my boli presunut�";
$lang['Topics_Unlocked'] = "Zvolen� t�my boli odomknut�";
$lang['No_Topics_Moved'] = "�iadne t�my neboli presunut�";

$lang['Confirm_delete_topic'] = "Skuto�ne chcete odstr�ni� zvolen� t�my ?";
$lang['Confirm_lock_topic'] = "Skuto�ne chcete zamkn�� zvolen� t�my ?";
$lang['Confirm_unlock_topic'] = "Skuto�ne chcete odomkn�� zvolen� t�my ?";
$lang['Confirm_move_topic'] = "Skuto�ne chcete presun�� zvolen� t�my ?";

$lang['Move_to_forum'] = "Presun�� do f�ra";
$lang['Leave_shadow_topic'] = "Ponecha� tie�ov� t�mu v starom f�re.";

$lang['Split_Topic'] = "Rozdelenie t�my - Ovl�dac� panel";
$lang['Split_Topic_explain'] = "Pomocou nasleduj�ceho formul�ra m��ete t�mu rozdeli� na dve, bu� vybrat�m pr�spevkov jednotlivo, alebo rozdelen�m od vybrat�ho pr�spevku";
$lang['Split_title'] = "Titulok novej t�my";
$lang['Split_forum'] = "F�rum pre nov� t�mu";
$lang['Split_posts'] = "Rozdeli� vybrat� pr�spevky";
$lang['Split_after'] = "Rozdeli� od vybrat�ho pr�spevku";
$lang['Topic_split'] = "Vybrat� t�ma bola �spe�ne rozdelen�";

$lang['Too_many_error'] = "Vybal(a) ste pr�li� ve�a pr�spevkov. M��ete vybra� len jeden pr�spevok, od ktor�ho chcete t�mu rozdeli�!";

$lang['None_selected'] = "Nebola vybrat� �iadna t�ma pre vykonanie tejto oper�cie. Vr�te sa sp� a zvo�te aspo� jednu t�mu";
$lang['New_forum'] = "Nov� f�rum";

$lang['This_posts_IP'] = "IP adresa pr�spevku";
$lang['Other_IP_this_user'] = "�al�ie IP adresy, z ktor�ch u��vate� odosielal pr�spevky";
$lang['Users_this_IP'] = "U��vatelia zasielaj�ci pr�spevok z tejto IP adresy";
$lang['IP_info'] = "Informace o IP adres�ch";
$lang['Lookup_IP'] = "H�ada� IP adresu";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "�asy uv�dzan� v %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 hod�n";
$lang['-11'] = "GMT - 11 hod�n";
$lang['-10'] = "GMT - 10 hod�n";
$lang['-9'] = "GMT - 9 hod�n";
$lang['-8'] = "GMT - 8 hod�n";
$lang['-7'] = "GMT - 7 hod�n";
$lang['-6'] = "GMT - 6 hod�n";
$lang['-5'] = "GMT - 5 hod�n";
$lang['-4'] = "GMT - 4 hodiny";
$lang['-3.5'] = "GMT - 3.5 hodiny";
$lang['-3'] = "GMT - 3 hodiny";
$lang['-2'] = "GMT - 2 hodiny";
$lang['-1'] = "GMT - 1 hodina";
$lang['0'] = "GMT";
$lang['1'] = "GMT + 1 hodina";
$lang['2'] = "GMT + 2 hodiny";
$lang['3'] = "GMT + 3 hodiny";
$lang['3.5'] = "GMT + 3.5 hodiny";
$lang['4'] = "GMT + 4 hodiny";
$lang['4.5'] = "GMT + 4.5 hodiny";
$lang['5'] = "GMT + 5 hod�n";
$lang['5.5'] = "GMT + 5.5 hodiny";
$lang['6'] = "GMT + 6 hod�n";
$lang['6.5'] = "GMT + 6.5 hodiny";
$lang['7'] = "GMT + 7 hod�n";
$lang['8'] = "GMT + 8 hod�n";
$lang['9'] = "GMT + 9 hod�n";
$lang['9.5'] = "GMT + 9.5 hod�n";
$lang['10'] = "GMT + 10 hod�n";
$lang['11'] = "GMT + 11 hod�n";
$lang['12'] = "GMT + 12 hod�n";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 hod�n) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 hod�n) Midway Island, Samoa";
$lang['tz']['-10'] = "(GMT -10:00 hod�n) Hawaii";
$lang['tz']['-9'] = "(GMT -9:00 hod�n) Alaska";
$lang['tz']['-8'] = "(GMT -8:00 hod�n) Pacific Time (US &amp; Canada), Tijuana";
$lang['tz']['-7'] = "(GMT -7:00 hod�n) Mountain Time (US &amp; Canada), Arizona";
$lang['tz']['-6'] = "(GMT -6:00 hod�n) Central Time (US &amp; Canada), Mexico City";
$lang['tz']['-5'] = "(GMT -5:00 hod�n) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$lang['tz']['-4'] = "(GMT -4:00 hodiny) Atlantic Time (Canada), Caracas, La Paz";
$lang['tz']['-3.5'] = "(GMT -3.5 hodiny) Newfoundland";
$lang['tz']['-3'] = "(GMT -3:00 hodiny) Brassila, Buenos Aires, Georgetown, Falkland Is";
$lang['tz']['-2'] = "(GMT -2:00 hodiny) Mid-Atlantic, Ascension Is., St. Helena";
$lang['tz']['-1'] = "(GMT -1:00 hodina) Azores, Cape Verde Islands";
$lang['tz']['0'] = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$lang['tz']['1'] = "(GMT +1:00 hodina) Prague, Amsterdam, Berlin, Brussels, Madrid, Paris";
$lang['tz']['2'] = "(GMT +2:00 hodiny) Cairo, Helsinki, Kaliningrad, South Africa";
$lang['tz']['3'] = "(GMT +3:00 hodiny) Baghdad, Riyadh, Moscow, Nairobi";
$lang['tz']['3.5'] = "(GMT +3.5 hodiny) Tehran";
$lang['tz']['4'] = "(GMT +4:00 hodiny) Abu Dhabi, Baku, Muscat, Tbilisi";
$lang['tz']['4.5'] = "(GMT +4.5 hodiny) Kabul";
$lang['tz']['5'] = "(GMT +5:00 hod�n) Ekaterinburg, Islamabad, Karachi, Tashkent";
$lang['tz']['5.5'] = "(GMT +5.5 hodiny) Bombay, Calcutta, Madras, New Delhi";
$lang['tz']['6'] = "(GMT +6:00 hod�n) Almaty, Colombo, Dhaka, Novosibirsk";
$lang['tz']['6.5'] = "(GMT +6.5 hodiny) Rangoon";
$lang['tz']['7'] = "(GMT +7:00 hod�n) Bangkok, Hanoi, Jakarta";
$lang['tz']['8'] = "(GMT +8:00 hod�n) Beijing, Hong Kong, Perth, Singapore, Taipei";
$lang['tz']['9'] = "(GMT +9:00 hod�n) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$lang['tz']['9.5'] = "(GMT +9.5 hodiny) Adelaide, Darwin";
$lang['tz']['10'] = "(GMT +10:00 hod�n) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$lang['tz']['11'] = "(GMT +11:00 hod�n) Magadan, New Caledonia, Solomon Islands";
$lang['tz']['12'] = "(GMT +12:00 hod�n) Auckland, Wellington, Fiji, Marshall Island";

$lang['datetime']['Sunday'] = "Nede�a";
$lang['datetime']['Monday'] = "Pondelok";
$lang['datetime']['Tuesday'] = "Utorok";
$lang['datetime']['Wednesday'] = "Streda";
$lang['datetime']['Thursday'] = "�tvrtok";
$lang['datetime']['Friday'] = "Piatok";
$lang['datetime']['Saturday'] = "Sobota";
$lang['datetime']['Sun'] = "Ne";
$lang['datetime']['Mon'] = "Po";
$lang['datetime']['Tue'] = "Ut";
$lang['datetime']['Wed'] = "St";
$lang['datetime']['Thu'] = "�t";
$lang['datetime']['Fri'] = "Pi";
$lang['datetime']['Sat'] = "So";
$lang['datetime']['January'] = "janu�ra";
$lang['datetime']['February'] = "febru�ra";
$lang['datetime']['March'] = "marca";
$lang['datetime']['April'] = "apr�la";
$lang['datetime']['May'] = "m�ja";
$lang['datetime']['June'] = "j�na";
$lang['datetime']['July'] = "j�la";
$lang['datetime']['August'] = "augusta";
$lang['datetime']['September'] = "septembra"; 
$lang['datetime']['October'] = "okt�bra";
$lang['datetime']['November'] = "novembra";
$lang['datetime']['December'] = "decembra";
$lang['datetime']['Jan'] = "Jan";
$lang['datetime']['Feb'] = "Feb";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Apr";
$lang['datetime']['May'] = "M�j";
$lang['datetime']['Jun'] = "J�n";
$lang['datetime']['Jul'] = "J�l";
$lang['datetime']['Aug'] = "Aug";
$lang['datetime']['Sep'] = "Sep";
$lang['datetime']['Oct'] = "Okt";
$lang['datetime']['Nov'] = "Nov";
$lang['datetime']['Dec'] = "Dec";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Inform�cia";
$lang['Critical_Information'] = "Kritick� inform�cia";

$lang['General_Error'] = "V�eobecn� chyba";
$lang['Critical_Error'] = "Kritick� chyba";
$lang['An_error_occured'] = "Vyskytla sa chyba";
$lang['A_critical_error'] = "Vyskytla sa kritick� chyba";

//
// That's all Folks!
// -------------------------------------------------

?>