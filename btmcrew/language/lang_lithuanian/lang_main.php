<?php
/***************************************************************************
 *                            lang_main.php [lithuanian]
 *                              -------------------
 *     begin                : Mon April 08 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1.2.1 2003/01/02 20:44:58 ProTON Exp $
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
// The format of this file is:
//
// ---> $lang['message'] = "text";
//
// You should also try to set a locale and a character
// encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may
// not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

//setlocale(LC_ALL, "en");
$lang['ENCODING'] = "windows-1257";
$lang['DIRECTION'] = "ltr";
$lang['LEFT'] = "left";
$lang['RIGHT'] = "right";
$lang['DATE_FORMAT'] =  "Y M d"; // This should be changed to the default date format for your language, php date() format

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = "Forumas";
$lang['Category'] = "Kategorija";
$lang['Topic'] = "Tema";
$lang['Topics'] = "Temos";
$lang['Replies'] = "Atsakymai";
$lang['Views'] = "Per�i�r�jo";
$lang['Post'] = "Prane�imas";
$lang['Posts'] = "Prane�imai";
$lang['Posted'] = "Para�ytas";
$lang['Username'] = "Vartotojo vardas";
$lang['Password'] = "Slapta�odis";
$lang['Email'] = "El. pa�tas";
$lang['Poster'] = "Prane�imo autorius";
$lang['Author'] = "Autorius";
$lang['Time'] = "Laikas";
$lang['Hours'] = "Valanda(�)";
$lang['Message'] = "Prane�imas";

$lang['1_Day'] = "1 dienos";
$lang['7_Days'] = "7 dien�";
$lang['2_Weeks'] = "2 savai�i�";
$lang['1_Month'] = "1 m�nesio";
$lang['3_Months'] = "3 m�nesi�";
$lang['6_Months'] = "6 m�nesi�";
$lang['1_Year'] = "1 met�";

$lang['Go'] = "Pirmyn";
$lang['Jump_to'] = "Pereiti �";
$lang['Submit'] = "Si�sti";
$lang['Reset'] = "I�valyti";
$lang['Cancel'] = "At�aukti";
$lang['Preview'] = "Per�i�r�ti";
$lang['Confirm'] = "Patvirtinti";
$lang['Spellcheck'] = "Gramatika";
$lang['Yes'] = "Taip";
$lang['No'] = "Ne";
$lang['Enabled'] = "�jungta";
$lang['Disabled'] = "I�jungta";
$lang['Error'] = "Klaida";

$lang['Next'] = "Toliau";
$lang['Previous'] = "Atgal";
$lang['Goto_page'] = "Pereiti prie";
$lang['Joined'] = "Prisijung�";
$lang['IP_Address'] = "IP adresas";

$lang['Select_forum'] = "Pasirinkite forum�";
$lang['View_latest_post'] = "Per�i�r�ti seniausi� prane�im�";
$lang['View_newest_post'] = "Per�i�r�ti naujausi� prane�im�";
$lang['Page_of'] = "Puslapis <b>%d</b> i� <b>%d</b>"; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = "ICQ numeris";
$lang['AIM'] = "AIM adresas";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "Pagrindinis puslapis";  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = "Prad�ti nauj� tem�";
$lang['Reply_to_topic'] = "Atsakyti � prane�im�";
$lang['Reply_with_quote'] = "Atsakyti su citata";

$lang['Click_return_topic'] = "Spauskite %s�ia%s, jei norite gr��ti prie prane�imo"; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = "Spauskite %s�ia%s, jei norite pabandyti dar kart�";
$lang['Click_return_forum'] = "Spauskite %s�ia%s, jei norite gr��ti prie forumo";
$lang['Click_view_message'] = "Spauskite %s�ia%s, jei norite per�i�r�ti savo prane�im�";
$lang['Click_return_modcp'] = "Spauskite %s�ia%s, jei norite gr��ti prie moderatoriaus valdymo formos";
$lang['Click_return_group'] = "Spauskite %s�ia%s, jei norite gr��ti prie grup�s informacijos";

$lang['Admin_panel'] = "Eiti � administratoriaus valdymo meniu";

$lang['Board_disable'] = "Atsipra�ome, diskusij� lenta laikinai nepasiekiama. Pabandykite v�liau.";


//
// Global Header strings
//
$lang['Registered_users'] = "Registruoti vartotojai:";
$lang['Browsing_forum'] = "Vartotojai, per�i�rintys �� forum�:";
$lang['Online_users_zero_total'] = "I� viso dabar vartotoj� <b>0</b>:: ";
$lang['Online_users_total'] = "I� viso dabar vartotoj� <b>%d</b>:: ";
$lang['Online_user_total'] = "I� viso dabar vartotoj� <b>%d</b>:: ";
$lang['Reg_users_zero_total'] = "0 registruot�, ";
$lang['Reg_users_total'] = "%d registruot�, ";
$lang['Reg_user_total'] = "%d registruot�, ";
$lang['Hidden_users_zero_total'] = "0 slapt� ir ";
$lang['Hidden_user_total'] = "%d slapt� ir ";
$lang['Hidden_users_total'] = "%d slapt� ir ";
$lang['Guest_users_zero_total'] = "0 sve�i�";
$lang['Guest_users_total'] = "%d sve�i�";
$lang['Guest_user_total'] = "%d sve�i�";
$lang['Record_online_users'] = "Daugiausia vartotoj� (<b>%s</b>) buvo %s"; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = "%s<b>Administratorius</b>%s";
$lang['Mod_online_color'] = "%s<b>Moderatorius</b>%s";

$lang['You_last_visit'] = "Paskutin� kart� J�s lank�t�s %s"; // %s replaced by date/time
$lang['Current_time'] = "Dabar yra %s"; // %s replaced by time

$lang['Search_new'] = "Per�i�r�ti naujus prane�imus nuo paskutinio apsilankymo";
$lang['Search_your_posts'] = "Per�i�r�ti j�s� prane�imus";
$lang['Search_unanswered'] = "Per�i�r�ti neatsakytus prane�imus";
$lang['View_last_24_hours'] = "Per�i�r�ti paskutini� 24 valand� prane�imus";

$lang['Register'] = "Registruotis";
$lang['Profile'] = "Apra�ymas";
$lang['Edit_profile'] = "Redaguoti j�s� apra�ym�";
$lang['Search'] = "Ie�koti";
$lang['Memberlist'] = "Nari� s�ra�as";
$lang['FAQ'] = "DUK";
$lang['BBCode_guide'] = "BBKodo apra�ymas";
$lang['Usergroups'] = "Vartotoj� grup�s";
$lang['Last_Post'] = "Paskutinis prane�imas";
$lang['Moderator'] = "Moderatorius";
$lang['Moderators'] = "Moderatoriai";


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = "M�s� vartotojai dar nepara�� prane�im�"; // Number of posts
$lang['Posted_articles_total'] = "M�s� vartotojai i� viso para�� <b>%d</b> prane�imus(�)"; // Number of posts
$lang['Posted_article_total'] = "M�s� vartotojai i� viso para�� <b>%d</b> prane�im�"; // Number of posts
$lang['Registered_users_zero_total'] = "Mes neturime registruot� vartotoj�"; // # registered users
$lang['Registered_users_total'] = "Mes turime <b>%d</b> registruotus(�) vartotojus(�)"; // # registered users
$lang['Registered_user_total'] = "Mes turime <b>%d</b> registruot� vartotoj�"; // # registered users
$lang['Newest_user'] = "Naujausias registruotas vartotojas yra %s%s%s"; // a href, username, /a

$lang['No_new_posts_last_visit'] = "Nauj� prane�im� po j�s� paskutinio apsilankymo n�ra";
$lang['No_new_posts'] = "Nauj� prane�im� n�ra";
$lang['New_posts'] = "Yra nauj� prane�im�";
$lang['New_post'] = "Naujas prane�imas";
$lang['No_new_posts_hot'] = "Nauj� prane�im� n�ra [ populiaru ]";
$lang['New_posts_hot'] = "Yra nauj� prane�im� [ populiaru ]";
$lang['No_new_posts_locked'] = "Nauj� prane�im� n�ra [ u�daryta ]";
$lang['New_posts_locked'] = "Yra nauj� prane�im� [ u�daryta ]";
$lang['Forum_is_locked'] = "Diskusija u�daryta";


//
// Login
//
$lang['Enter_password'] = "Pra�ome �ra�yti vartotojo vard� ir slapta�od�";
$lang['Login'] = "Prisijungti";
$lang['Logout'] = "Atsijungti";

$lang['Forgotten_password'] = "A� pamir�au savo slapta�od�";

$lang['Log_me_in'] = "Prijungti mane automati�kai kiekvieno apsilankymo metu";

$lang['Error_login'] = "J�s �ra��te neteising� ar neaktyv� vartotojo vard� arba neteising� slapta�od�";


//
// Index page
//
$lang['Index'] = "Pagrindinis puslapis";
$lang['No_Posts'] = "Prane�im� n�ra";
$lang['No_forums'] = "�ia n�ra forum�";

$lang['Private_Message'] = "Asmeninis prane�imas";
$lang['Private_Messages'] = "Asmeniniai prane�imai";
$lang['Who_is_Online'] = "�iuo metu forume";

$lang['Mark_all_forums'] = "Pa�ym�ti visus forumus kaip perskaitytus";
$lang['Forums_marked_read'] = "Visi forumai buvo pa�ym�ti kaip perskaityti";


//
// Viewforum
//
$lang['View_forum'] = "Per�i�r�ti forum�";

$lang['Forum_not_exist'] = "J�s� pasirinktas forumas neegzistuoja";
$lang['Reached_on_error'] = "�vyko klaida";

$lang['Display_topics'] = "Rodyti ankstesnius prane�imus";
$lang['All_Topics'] = "Visi prane�imai";

$lang['Topic_Announcement'] = "<b>Svarbu:</b>";
$lang['Topic_Sticky'] = "<b>Da�na tema:</b>";
$lang['Topic_Moved'] = "<b>Perkelta:</b>";
$lang['Topic_Poll'] = "<b>Apklausa:</b>";

$lang['Mark_all_topics'] = "Pa�ym�ti visas temas kaip perskaitytas";
$lang['Topics_marked_read'] = "Visos temos �iame forume pa�ym�tos kaip skaitytos";

$lang['Rules_post_can'] = "J�s <b>galite</b> ra�yti naujus prane�imus � �� forum�";
$lang['Rules_post_cannot'] = "J�s <b>negalite</b> ra�yti nauj� prane�im� � �� forum�";
$lang['Rules_reply_can'] = "J�s <b>galite</b> atsakin�ti � prane�imus �iame forume";
$lang['Rules_reply_cannot'] = "J�s <b>negalite</b> atsakin�ti � prane�imus �iame forume";
$lang['Rules_edit_can'] = "J�s <b>galite</b> redaguoti savo prane�imus �iame forume";
$lang['Rules_edit_cannot'] = "J�s <b>negalite</b> redaguoti savo prane�im� �iame forume";
$lang['Rules_delete_can'] = "J�s <b>galite</b> i�trinti savo prane�imus �iame forume";
$lang['Rules_delete_cannot'] = "J�s <b>negalite</b> i�trinti savo prane�im� �iame forume";
$lang['Rules_vote_can'] = "J�s <b>galite</b> dalyvauti apklausose �iame forume";
$lang['Rules_vote_cannot'] = "J�s <b>negalite</b> dalyvauti apklausose �iame forume";
$lang['Rules_moderate'] = "J�s <b>galite</b> %smoderuoti �� forum�%s"; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = "�iame forume n�ra tem�.<br />Spauskite mygtuk� <b>Nauja tema</b> �iame puslapyje";


//
// Viewtopic
//
$lang['View_topic'] = "Per�i�r�ti tem�";

$lang['Guest'] = "Sve�ias";
$lang['Post_subject'] = "Ra�yti tem�";
$lang['View_next_topic'] = "Rodyti kit� prane�im�";
$lang['View_previous_topic'] = "Rodyti ankstesn� prane�im�";
$lang['Submit_vote'] = "Balsuoti";
$lang['View_results'] = "Rodyti rezultatus";

$lang['No_newer_topics'] = "Naujesni� prane�im� �iame forume n�ra";
$lang['No_older_topics'] = "Senesni� prane�im� �iame forume n�ra";
$lang['Topic_post_not_exist'] = "Temos ar prane�imo, kurio ie�kote, n�ra";
$lang['No_posts_topic'] = "�ioje temoje prane�im� n�ra";

$lang['Display_posts'] = "Rodyti prane�imus nuo ankstesnio";
$lang['All_Posts'] = "Visi prane�imai";
$lang['Newest_First'] = "I� prad�i� naujesni";
$lang['Oldest_First'] = "I� prad�i� senesni";

$lang['Back_to_top'] = "Atgal � vir��";

$lang['Read_profile'] = "Per�i�r�ti vartotojo apra�ym�";
$lang['Send_email'] = "Nusi�sti vartotojui el. lai�k�";
$lang['Visit_website'] = "Apsilankyti vartotojo tinklapyje";
$lang['ICQ_status'] = "ICQ b�sena";
$lang['Edit_delete_post'] = "Redaguoti �� prane�im�";
$lang['View_IP'] = "Rodyti prane�imo autoriaus IP";
$lang['Delete_post'] = "I�trinti �� prane�im�";

$lang['wrote'] = "ra�o"; // proceeds the username and is followed by the quoted text
$lang['Quote'] = "Citata"; // comes before bbcode quote output.
$lang['Code'] = "Kodas"; // comes before bbcode code output.

$lang['Edited_time_total'] = "Paskutin� kart� redagavo %s, %s. Redaguota %d kart�"; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = "Paskutin� kart� redagavo %s, %s. Redaguota %d kartus(�)"; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = "U�daryti �i� tem�";
$lang['Unlock_topic'] = "Atidaryti �i� tem�";
$lang['Move_topic'] = "Perkelti �i� tem�";
$lang['Delete_topic'] = "I�trinti �i� tem�";
$lang['Split_topic'] = "I�skirti �i� tem�";

$lang['Stop_watching_topic'] = "Nustoti sekti �i� tem�";
$lang['Start_watching_topic'] = "Sekti �ios temos atsakymus";
$lang['No_longer_watching'] = "J�s daugiau nesekate �ios temos";
$lang['You_are_watching'] = "J�s dabar sekate �i� tem�";

$lang['Total_votes'] = "I� viso bals�";

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = "Prane�imo turinys";
$lang['Topic_review'] = "Temos ap�valga";

$lang['No_post_mode'] = "Ne�ved�te prane�imo tipo"; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = "Prad�ti nauj� tem�";
$lang['Post_a_reply'] = "Ra�yti atsakym�";
$lang['Post_topic_as'] = "Temos tipas";
$lang['Edit_Post'] = "Redaguoti prane�im�";
$lang['Options'] = "Nustatymai";

$lang['Post_Announcement'] = "Svarbi!";
$lang['Post_Sticky'] = "Da�na";
$lang['Post_Normal'] = "Standartin�";

$lang['Confirm_delete'] = "Ar tikrai norite i�trinti �� prane�im� ar tem�?";
$lang['Confirm_delete_poll'] = "Ar tikrai norite i�trinti �i� apklaus�?";

$lang['Flood_Error'] = "J�s negalite ra�yti naujo prane�imo taip greitai, pra�ome pabandyti �iek tiek v�liau";
$lang['Empty_subject'] = "Jei norite prad�ti nauj� tem� ar prane�im�, privalote �ra�yti pavadinim�";
$lang['Empty_message'] = "J�s turite k� nors para�yti";
$lang['Forum_locked'] = "�is forumas u�darytas. J�s negalite ra�yti, atsakyti ar redaguoti temos";
$lang['Topic_locked'] = "�i tema u�daryta. J�s negalite redaguoti prane�im� ar ra�yti atsakym�";
$lang['No_post_id'] = "J�s turite pasirinkti prane�im� redagavimui";
$lang['No_topic_id'] = "J�s turite pasirinkti tem� atsakymui";
$lang['No_valid_mode'] = "J�s galite tik ra�yti, atsakyti, redaguoti arba cituoti prane�imus. Pra�ome gr��ti atgal ir pabandyti dar kart�";
$lang['No_such_post'] = "Tokio prane�imo n�ra. Pra�ome gr��ti atgal ir pabandyti dar kart�";
$lang['Edit_own_posts'] = "Atsipra�ome, bet J�s galite redaguoti tik savo prane�imus";
$lang['Delete_own_posts'] = "Atsipra�ome, bet J�s galite i�trinti tik savo prane�imus";
$lang['Cannot_delete_replied'] = "Atsipra�ome, bet J�s negalite i�trinti prane�im�, � kuriuos jau atsakyta";
$lang['Cannot_delete_poll'] = "Atsipra�ome, bet J�s negalite i�trinti aktyvios apklausos";
$lang['Empty_poll_title'] = "J�s turite �vesti apklausos pavadinim�";
$lang['To_few_poll_options'] = "J�s turite �vesti nors du apklausos parametrus";
$lang['To_many_poll_options'] = "J�s nurod�te per daug apklausos parametr�";
$lang['Post_has_no_poll'] = "�is prane�imas neturi apklausos";
$lang['Already_voted'] = "J�s jau balsavote";
$lang['No_vote_option'] = "Prie� balduodami turite pasirinkti punkt� u� kur� balsuojate";


$lang['Add_poll'] = "Prid�ti apklaus�";
$lang['Add_poll_explain'] = "Jeigu J�s nenorite prijungti apklausos prie savo temos, palikite �iuos laukus neu�pildytus";
$lang['Poll_question'] = "Apklausos klausimas";
$lang['Poll_option'] = "Apklausos parametras";
$lang['Add_option'] = "Prid�ti parametr�";
$lang['Update'] = "Atnaujinti";
$lang['Delete'] = "I�trinti";
$lang['Poll_for'] = "T�sti apklaus�";
$lang['Days'] = "dien�"; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = "[ niekada nesibaigian�iai apklausai �veskite 0 arba palikite tu��ia ]";
$lang['Delete_poll'] = "I�trinti apklaus�";

$lang['Disable_HTML_post'] = "I�jungti HTML �iame prane�ime";
$lang['Disable_BBCode_post'] = "I�jungti BBKod� �iame prane�ime";
$lang['Disable_Smilies_post'] = "I�jungti �ypsen�les �iame prane�ime";

$lang['HTML_is_ON'] = "HTML yra <u>�JUNGTAS</u>";
$lang['HTML_is_OFF'] = "HTML yra <u>I�JUNGTAS</u>";
$lang['BBCode_is_ON'] = "%sBBKodas%s yra <u>�JUNGTAS</u>"; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = "%sBBKodas%s yra <u>I�JUNGTAS</u>";
$lang['Smilies_are_ON'] = "�ypsenel�s yra <u>�JUNGTOS</u>";
$lang['Smilies_are_OFF'] = "�ypsenel�s yra <u>I�JUNGTOS</u>";

$lang['Attach_signature'] = "Prid�ti para�� (para�ai redaguojami apra�yme)";
$lang['Notify'] = "Persp�ti, kai bus para�ytas atsakymas";
$lang['Delete_post'] = "I�trinti �� prane�im�";

$lang['Stored'] = "J�s� prane�imas buvo s�kmingai �d�tas";
$lang['Deleted'] = "J�s� prane�imas buvo s�kmingai i�trintas";
$lang['Poll_delete'] = "J�s� apklausa buvo s�kmingai i�trinta";
$lang['Vote_cast'] = "J�s� balsas �skai�iuotas";

$lang['Topic_reply_notification'] = "Atsakymo persp�jimas";

$lang['bbcode_b_help'] = "Pary�kintas (bold) tekstas: [b]tekstas[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Pasvir�s (italic) tekstas: [i]tekstas[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Pabrauktas (underline) tekstas: [u]tekstas[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Cituotas tekstas: [quote]tekstas[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Kodo rodymas: [code]kodas[/code]  (alt+c)";
$lang['bbcode_l_help'] = "S�ra�as: [list]tekstas[/list] (alt+l)";
$lang['bbcode_o_help'] = "Sur��iuotas s�ra�as: [list=]tekstas[/list]  (alt+o)";
$lang['bbcode_p_help'] = "�d�ti paveiksliuk�: [img]http://www.vieta_iki_paveiksliuko[/img]  (alt+p)";
$lang['bbcode_w_help'] = "�d�ti URL: [url]http://url[/url] arba [url=http://url]URL tekstas[/url]  (alt+w)";
$lang['bbcode_a_help'] = "U�daryti visas atidarytas BBKodo �ymes (tag)";
$lang['bbcode_s_help'] = "Teksto spalva: [color=red]tekstas[/color]  Patarimas: j�s galite naudoti color=#FF0000";
$lang['bbcode_f_help'] = "Teksto dydis: [size=x-small]ma�as tekstas[/size]";

$lang['Emoticons'] = "�ypsen�l�s";
$lang['More_emoticons'] = "Rodyti daugiau �ypsen�li�";

$lang['Font_color'] = "�rifto&nbsp;spalva";
$lang['color_default'] = "Pradin�";
$lang['color_dark_red'] = "Tamsiai raudona";
$lang['color_red'] = "Raudona";
$lang['color_orange'] = "Oran�in�";
$lang['color_brown'] = "Ruda";
$lang['color_yellow'] = "Geltona";
$lang['color_green'] = "�alia";
$lang['color_olive'] = "Alyvin�";
$lang['color_cyan'] = "�viesiai m�lyna";
$lang['color_blue'] = "M�lyna";
$lang['color_dark_blue'] = "Tamsiai m�lyna";
$lang['color_indigo'] = "Indigo";
$lang['color_violet'] = "Violetin�";
$lang['color_white'] = "Balta";
$lang['color_black'] = "Juoda";

$lang['Font_size'] = "�rifto&nbsp;dydis";
$lang['font_tiny'] = "Smulkus";
$lang['font_small'] = "Ma�as";
$lang['font_normal'] = "Normalus";
$lang['font_large'] = "Didelis";
$lang['font_huge'] = "Mil�ini�kas";

$lang['Close_Tags'] = "U�daryti �ymenis (tags)";
$lang['Styles_tip'] = "Patarimas: stiliai gali b�ti pritaikyti ir pa�ym�tam tekstui";


//
// Private Messaging
//
$lang['Private_Messaging'] = "Asmeninis susira�in�jimas";

$lang['Login_check_pm'] = "Tikrinti asmeninius prane�imus";
$lang['New_pms'] = "J�s turite nauj� prane�im� [ %d ]"; // You have 2 new messages
$lang['New_pm'] = "J�s turite nauj� prane�im� [ %d ]"; // You have 1 new message
$lang['No_new_pm'] = "J�s neturite nauj� prane�im�";
$lang['Unread_pms'] = "J�s turite neperskaityt� prane�im� %d";
$lang['Unread_pm'] = "J�s turite neperskaityt� prane�im� %d";
$lang['No_unread_pm'] = "J�s neturite neperskaityt� prane�im�";
$lang['You_new_pm'] = "Naujas asmeninis prane�imas laukia j�s� d��ut�je";
$lang['You_new_pms'] = "Nauji asmeniniai prane�imai laukia j�s� d��ut�je";
$lang['You_no_new_pm'] = "Nauj� asmenini� prane�im� n�ra";

$lang['Unread_message'] = 'Neperskaityta �inut�';
$lang['Read_message'] = 'Perskaityta �inut�';

$lang['Read_pm'] = 'Skaityti prane�im�';
$lang['Post_new_pm'] = 'Si�sti prane�im�';
$lang['Post_reply_pm'] = 'Atsakyti � prane�im�';
$lang['Post_quote_pm'] = 'Cituoti prane�im�';
$lang['Edit_pm'] = 'Redaguoti prane�im�';

$lang['Inbox'] = "Inbox";
$lang['Outbox'] = "Outbox";
$lang['Savebox'] = "Savebox";
$lang['Sentbox'] = "Sentbox";
$lang['Flag'] = "";
$lang['Subject'] = "Temos pavadinimas";
$lang['From'] = "Nuo";
$lang['To'] = "Kam";
$lang['Date'] = "Data";
$lang['Mark'] = "Pa�ym�ti";
$lang['Sent'] = "I�si�sta";
$lang['Saved'] = "I�saugota";
$lang['Delete_marked'] = "I�trinti pa�ym�tus";
$lang['Delete_all'] = "I�trinti visus";
$lang['Save_marked'] = "I�saugoti pa�ym�tus";
$lang['Save_message'] = "I�saugoti prane�im�";
$lang['Delete_message'] = "I�trinti prane�im�";

$lang['Display_messages'] = "Rodyti visus prane�imus i� paskutini�"; // Followed by number of days/weeks/months
$lang['All_Messages'] = "Visi prane�imai";

$lang['No_messages_folder'] = "Prane�im� �iame kataloge n�ra";

$lang['PM_disabled'] = "Asmeninis susira�in�jimas �ioje diskusij� lentoje i�jungtas";
$lang['Cannot_send_privmsg'] = "Atsipra�ome, bet administratorius u�draud� jums si�sti asmeninius prane�imus";
$lang['No_to_user'] = "J�s ne�ved�te vartotojo vardo, kuriam skirta �i �inut�";
$lang['No_such_user'] = "Atsipra�ome, bet toks vartotojas neegzistuoja";

$lang['Disable_HTML_pm'] = "I�jungti HTML �iame prane�ime";
$lang['Disable_BBCode_pm'] = "I�jungti BBKod� �iame prane�ime";
$lang['Disable_Smilies_pm'] = "I�jungti �ypsen�les �iame prane�ime";

$lang['Message_sent'] = "J�s� prane�imas i�si�stas";

$lang['Click_return_inbox'] = "Spauskite %s�ia%s, nor�dami gr��ti � d��ut�";
$lang['Click_return_index'] = "Spauskite %s�ia%s, nor�dami gr��ti � pagrindin� puslap�";

$lang['Send_a_new_message'] = "Si�sti nauj� asmenin� prane�im�";
$lang['Send_a_reply'] = "Atsakyti � asmenin� prane�im�";
$lang['Edit_message'] = "Redaguoti asmenin� prane�im�";

$lang['Notification_subject'] = "J�s gavote nauj� asmenin� prane�im�";

$lang['Find_username'] = "Ie�koti vartotojo vardo";
$lang['Find'] = "Ie�koti";
$lang['No_match'] = "Nieko nerasta";

$lang['No_post_id'] = "Nebuvo nurodytas prane�imo ID";
$lang['No_such_folder'] = "Toks katalogas neegzistuoja";
$lang['No_folder'] = "Nenurodytas katalogas";

$lang['Mark_all'] = "Pa�ym�ti visk�";
$lang['Unmark_all'] = "Nepa�ym�ti nieko";

$lang['Confirm_delete_pm'] = "Ar tikrai norite i�trinti �� prane�im�?";
$lang['Confirm_delete_pms'] = "Ar tikrai norite i�trinti �iuos prane�imus?";

$lang['Inbox_size'] = "J�s� Inbox yra %d%% u�pildyta"; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = "J�s� Sentbox yra %d%% u�pildyta";
$lang['Savebox_size'] = "J�s� Savebox yra %d%% u�pildyta";

$lang['Click_view_privmsg'] = "Spauskite %s�ia%s, jei norite pereiti prie Inbox";


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = "Apra�ymo per�i�ra :: %s"; // %s is username
$lang['About_user'] = "Viskas apie %s"; // %s is username

$lang['Preferences'] = "Nustatymai";
$lang['Items_required'] = "Laukus pa�ym�tus * b�tina u�pildyti";
$lang['Registration_info'] = "Registracijos informacija";
$lang['Profile_info'] = "Apra�ymo informacija";
$lang['Profile_info_warn'] = "�i� informacij� galima per�i�r�ti";
$lang['Avatar_panel'] = "Avataro valdymo pultas";
$lang['Avatar_gallery'] = "Avatar� galerija";

$lang['Website'] = "Interneto svetain�";
$lang['Location'] = "Miestas";
$lang['Contact'] = "Kontaktai";
$lang['Email_address'] = "El. pa�to adresas";
$lang['Email'] = "El. pa�tas";
$lang['Send_private_message'] = "Si�sti asmenin� prane�im�";
$lang['Hidden_email'] = "[ u�slaptinta ]";
$lang['Search_user_posts'] = "Ie�koti �io vartotojo prane�im�";
$lang['Interests'] = "Pom�giai";
$lang['Occupation'] = "Pareigos";
$lang['Poster_rank'] = "Vartotojo rangas";

$lang['Total_posts'] = "I� viso prane�im�";
$lang['User_post_pct_stats'] = "%.2f%% i� vis�"; // 1.25% of total
$lang['User_post_day_stats'] = "%.2f prane�im� per dien�"; // 1.5 posts per day
$lang['Search_user_posts'] = "Ie�koti vis� vartotojo %s prane�im�"; // Find all posts by username

$lang['No_user_id_specified'] = "Atsipra�ome, bet toks vartotojo vardas neegzistuoja";
$lang['Wrong_Profile'] = "J�s negalite redaguoti svetimo apra�ymo";

$lang['Only_one_avatar'] = "Gali b�ti nurodytas tik vienas avataro tipas";
$lang['File_no_data'] = "Failas j�s� pateiktu URL adresu neturi joki� duomen�";
$lang['No_connection_URL'] = "Prisijungti j�s� nurodyto URL adreso negalima";
$lang['Incomplete_URL'] = "URL adresas, kur� j�s �ved�te, yra nebaigtas";
$lang['Wrong_remote_avatar_format'] = "Neteisingas URL avataro adreso formatas";
$lang['No_send_account_inactive'] = "Atsipra�ome, bet j�s� slapta�odis neegzistuoja, nes j�s� apra�ymas i�jungtas/neaktyvuotas. Pra�ome kreiptis � diskusij� administratori�.";

$lang['Always_smile'] = "Visada �jungti �ypsen�les";
$lang['Always_html'] = "Visada �jungti HTML";
$lang['Always_bbcode'] = "Visada �jungti BBKod�";
$lang['Always_add_sig'] = "Visada prid�ti mano para��";
$lang['Always_notify'] = "Visada persp�ti mane apie atsakymus";
$lang['Always_notify_explain'] = "Jeigu � j�s� prane�im� bus atsakyta, sistema i�si�s jums lai�k�. Tai galima keisti, kai ra�ote prane�im�";

$lang['Board_style'] = "Lentos stilius";
$lang['Board_lang'] = "Lentos kalba";
$lang['No_themes'] = "Duomen� baz�je n�ra stili�.";
$lang['Timezone'] = "Laiko juosta";
$lang['Date_format'] = "Datos formatas";
$lang['Date_format_explain'] = "Naudojama sintaks� identi�ka PHP funkcijai <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> (jeigu nieko nesuprantate apie PHP, nekeiskite �io parametro)";
$lang['Signature'] = "Para�as";
$lang['Signature_explain'] = "�� teksto blok� j�s galite prid�ti prie savo prane�im�. Galioja %d simboli� limitas";
$lang['Public_view_email'] = "Visada rodyti mano el. pa�to adres�";

$lang['Current_password'] = "Dabartinis slapta�odis";
$lang['New_password'] = "Naujas slapta�odis";
$lang['Confirm_password'] = "Patvirtinti slapta�od�";
$lang['Confirm_password_explain'] = "J�s turite �vesti dabartin� slapta�od�, jei nor�site j� pasikeisti arba keisti savo el. pa�to adres�";
$lang['password_if_changed'] = "Jums reikia nurodyti slapta�od�, jeigu norite j� pakeisti";
$lang['password_confirm_if_changed'] = "Jums reikia patvirtinti slapta�od�, jeigu j� pakeit�te vir�uje";

$lang['Avatar'] = "Avataras";
$lang['Avatar_explain'] = "Rodo nedidel� paveiksliuk� �alia j�s� apra�ymo. Vienu metu gali b�ti rodomas tik vienas paveiksliukas, kurio plotis negali vir�yti %d ta�k�, o auk�tis - %d ta�k�. Failo dydis negali vir�yti %dKB."; $lang['Upload_Avatar_file'] = "Nusi�sti avataro fail� i� savo kompiuterio";
$lang['Upload_Avatar_URL'] = "Nusi�sti avataro fail� i� URL";
$lang['Upload_Avatar_URL_explain'] = "�veskite URL, kur yra j�s� avataro paveiksliukas. Jis bus nukopijuotas � �� tinklap�.";
$lang['Pick_local_Avatar'] = "Pasirinkti avataro paveiksliuk� i� galerijos";
$lang['Link_remote_Avatar'] = "URL adresas iki nutolusio avataro";
$lang['Link_remote_Avatar_explain'] = "�veskite puslapio, kurio avataro paveiksliuk� j�s norite susieti, URL adres�.";
$lang['Avatar_URL'] = "Avataro paveiksliuko URL";
$lang['Select_from_gallery'] = "Pasirinkti avatar� i� galerijos";
$lang['View_avatar_gallery'] = "Rodyti galerij�";

$lang['Select_avatar'] = "Pasirinkti avatar�";
$lang['Return_profile'] = "At�aukti avatar�";
$lang['Select_category'] = "Pasirinkti kategorij�";

$lang['Delete_Image'] = "I�trinti paveiksliuk�";
$lang['Current_Image'] = "Dabartinis paveiksliukas";

$lang['Notify_on_privmsg'] = "Persp�ti apie nauj� asmenin� prane�im�";
$lang['Popup_on_privmsg'] = "I��okantis langas apie nauj� asmenin� prane�im�";
$lang['Popup_on_privmsg_explain'] = "Kai kurie trafaretai (templates) gali atidaryti nauj� lang�, kad informuot� jus apie nauj� asmenin� prane�im�";
$lang['Hide_user'] = "Pasl�pti j�s� b�sen�";

$lang['Profile_updated'] = "J�s� apra�ymas atnaujintas";
$lang['Profile_updated_inactive'] = "J�s� apra�ymas atnaujintas. J�s pakeit�te svarbius parametrus, tod�l j�s� apra�ymas dabar deaktyvotas. El. pa�tu tur�tum�te gauti lai�k� apie aktyvavim�. Jeigu reikia administratoriaus aktyvavimo, laukite, kol administratorius patvirtins j�s� pakeitimus.";

$lang['Password_mismatch'] = "J�s� �vesti slapta�od�iai nesutapo";
$lang['Current_password_mismatch'] = "Dabartinis j�s� �vestas slapta�odis nesutampa su slapta�od�iu i� duomen� baz�s";
$lang['Password_long'] = "J�s� slapta�od� turi sudaryti ne daugiau kaip 32 simboliai";
$lang['Username_taken'] = "Atsipra�ome, toks vartotojo vardas jau egzistuoja.";
$lang['Username_invalid'] = "Atsipra�ome, bet �iame vartotojo varde yra draud�iamas simbolis, pvz., \'.";
$lang['Username_disallowed'] = "Atsipra�ome, bet toks vartotojo vardas buvo u�draustas";
$lang['Email_taken'] = "Atsipra�ome, bet toks el. pa�to adresas jau u�registruotas";
$lang['Email_banned'] = "Atsipra�ome, bet �is el. pa�to adresas buvo u�blokuotas (banned)";
$lang['Email_invalid'] = "Atsipra�ome, bet tai neteisingas el. pa�to adresas";
$lang['Signature_too_long'] = "J�s� para�as per ilgas";
$lang['Fields_empty'] = "J�s turite u�pildyti privalomus laukus";
$lang['Avatar_filetype'] = "Avataro failo tipas turi b�ti .jpg, .gif arba .png";
$lang['Avatar_filesize'] = "Avataro paveiksliuko failo dydis turi b�ti ma�esnis negu %d KB"; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = "Avataras turi b�ti ma�esnis negu %d ta�k� plo�io ir %d ta�k� auk��io";

$lang['Welcome_subject'] = "Sveiki atvyk� � %s diskusijas"; // Welcome to my.com forums
$lang['New_account_subject'] = "Naujo vartotojo apra�ymas";
$lang['Account_activated_subject'] = "Vartotojo vardas aktyvuotas";

$lang['Account_added'] = "A�i�, kad u�siregistravote. J�s� apra�ymas sukurtas. Dabar galite prisijungti su savo vartotojo vardu ir slapta�od�iu";
$lang['Account_inactive'] = "J�s� apra�ymas sukurtas. �ios diskusijos reikalauja vartotojo vardo aktyvavimo. Aktyvavimo raktas buvo i�si�stas el. pa�to adresu, kur� nurod�te. Pra�ome patikrinti savo el. pa�to d��ut�";
$lang['Account_inactive_admin'] = "J�s� apra�ymas sukurtas. Vartotojo vardus �iose diskusijose patvirtina administratorius. �iuo metu jam buvo i�si�stas el. lai�kas. J�s b�site informuotas, kada apra�ymas bus aktyvuotas";
$lang['Account_active'] = "J�s� vartotojo vardas aktyvuotas. A�i� u� registracij�";
$lang['Account_active_admin'] = "Vartotojo vardas aktyvuotas";
$lang['Reactivate'] = "Aktyvuokite savo vartotojo vard� i� naujo!";
$lang['Already_activated'] = "J�s jau aktyvavote savo vartotojo vard�";
$lang['COPPA'] = "J�s� vartotojo vardas aktyvuotas, bet turi b�ti dar patvirtintas. Daugiau informacijos rasite savo el. pa�to d��ut�je.";

$lang['Registration'] = "Registracijos s�lygos";
$lang['Reg_agreement'] = "�i� diskusij� administratoriai ir moderatoriai visais b�dais stengiasi pa�alinti netinkamas �inutes, ta�iau ne�manoma pa�alinti ir per�i�r�ti vis� �inu�i�, tod�l j�s turite suprasti, kad visos �inut�s �iose diskusijose yra j� autori�, o ne administratori� ar moderatori� nuomon� ir pa�i�ros (i�skyrus �i� �moni� �inutes). Taigi administratoriai ir/arba moderatoriai negali b�ti atsakingi u� j� turin�. <br /><br />J�s sutinkate nera�yti ��eid�ian�i�, ne�vanki�, vulgari�, �mei�ian�i�, grasinan�i� ir kitoki� vietinius �statymus pa�eid�ian�i� �inu�i�. Prie�ingu atveju tuojau pat b�site blokuotas (banned) ir apie tai prane�ta j�s� Interneto tiek�jui. Vis� �inu�i� IP adresas yra �ra�omas � duomen� baz�. J�s sutinkate, kad administratoriai ir/arba moderatoriai turi teis� i�trinti, redaguoti, perkelti arba u�daryti betkuri� tem�/�inut�, jeigu jie mano jog tai reikalinga. Kaip vartotojas sutinkate su tuo, kad bet kokia j�s� �vesta informacija b�t� saugoma duomen� baz�je. �i informacija nebus suteikta jokioms tre�ioms �alims, ta�iau administratoriai ir/arba moderatoriai negali u�tikrinti visi�ko informacijos saugumo.<br /><br />�i diskusij� lenta naudoja sausain�lius (cookies). Juose nesaugoma jokia j�s� �vesta informacija. Sausain�liai naudojami tik kaip pagalbin� dizaino ir strukt�ros priemon� suteikdama jums patogumo. J�s� el. pa�to adresas naudojamas tik patvirtinti j�s� registracijos detales (taip pat atsi�sti jums nauj� slapta�od�, jeigu kartais u�mir�ote sen�).";

$lang['Agree_under_13'] = "Sutinku su �iomis s�lygomis, man <b>ma�iau</b> nei 13 met�";
$lang['Agree_over_13'] = "Sutinku su �iomis s�lygomis, man <b>vir�</b> 13 met�";
$lang['Agree_not'] = "Nesutinku su s�lygomis";

$lang['Wrong_activation'] = "Aktyvavimo raktas, kur� j�s pateik�te, neatitinka jokio rakto m�s� duomen� baz�je";
$lang['Send_password'] = "I�si�sti nauj� slapta�od�";
$lang['Password_updated'] = "Naujas slapta�odis sukurtas, savo el. pa�to d��ut�je rasite lai�k� su informacija apie aktyvavim�";
$lang['No_email_match'] = "J�s� nurodytas el. pa�to adresas neatitinka �io vartotojo";
$lang['New_password_activation'] = "Naujo slapta�od�io aktyvavimas";
$lang['Password_activated'] = "J�s� apra�ymas buvo aktyvuotas. Prisijungdami naudokit�s slapta�od�iu, kur� gavote el. pa�tu";

$lang['Send_email_msg'] = "Nusi�sti prane�im� el. pa�tu";
$lang['No_user_specified'] = "Nurodykite vartotoj�";
$lang['User_prevent_email'] = "�is vartotojas nenori gauti el. pa�to �inu�i�. Pabandykite nusi�sti jam asmenin� prane�im�";
$lang['User_not_exist'] = "Toks vartotojas neegzistuoja";
$lang['CC_email'] = "Nusi�sti sau �ios el. pa�to �inut�s kopij�";
$lang['Email_message_desc'] = "�is prane�imas bus i�si�stas kaip paprastas tekstas, nera�ykite jame joki� HTML ar BBKod�.";
$lang['Flood_email_limit'] = "�iuo metu j�s negalite i�si�sti dar vienos el. �inut�s, pabandykite v�liau";
$lang['Recipient'] = "Gav�jas";
$lang['Email_sent'] = "El. lai�kas i�si�stas";
$lang['Send_email'] = "Si�sti el. lai�k�";
$lang['Empty_subject_email'] = "Nurodykite lai�ko tem�";
$lang['Empty_message_email'] = "Para�ykite lai�k�";


//
// Memberslist
//
$lang['Select_sort_method'] = "Pasirinkite r��iavimo b�d�";
$lang['Sort'] = "R��iuoti";
$lang['Sort_Top_Ten'] = "Aktyviausi�j� de�imtukas";
$lang['Sort_Joined'] = "�stojimo data";
$lang['Sort_Username'] = "Vartotojo vardas";
$lang['Sort_Location'] = "Vieta";
$lang['Sort_Posts'] = "Prane�im� skai�ius";
$lang['Sort_Email'] = "El. pa�tas";
$lang['Sort_Website'] = "Tinklapis";
$lang['Sort_Ascending'] = "Did�jimo tvarka";
$lang['Sort_Descending'] = "Ma��jimo tvarka";
$lang['Order'] = "Tvarka";


//
// Group control panel
//
$lang['Group_Control_Panel'] = "Grup�s valdymo pultas";
$lang['Group_member_details'] = "Grup�s nari� apra�ymas";
$lang['Group_member_join'] = "Prisijungti prie grup�s";

$lang['Group_Information'] = "Grup�s informacija";
$lang['Group_name'] = "Grup�s pavadinimas";
$lang['Group_description'] = "Grup�s apra�ymas";
$lang['Group_membership'] = "Naryst� grup�je";
$lang['Group_Members'] = "Grup�s nariai";
$lang['Group_Moderator'] = "Grup�s moderatorius";
$lang['Pending_members'] = "Laukiami nariai";

$lang['Group_type'] = "Grup�s tipas";
$lang['Group_open'] = "Atvira grup�";
$lang['Group_closed'] = "U�dara grup�";
$lang['Group_hidden'] = "Slapta grup�";

$lang['Current_memberships'] = "Dabartiniai nariai";
$lang['Non_member_groups'] = "Ne nariai";
$lang['Memberships_pending'] = "Naryst�s laukia";

$lang['No_groups_exist'] = "Grupi� n�ra";
$lang['Group_not_exist'] = "Tokios grup�s n�ra";

$lang['Join_group'] = "Prisijungti prie grup�s";
$lang['No_group_members'] = "�i grup� neturi nari�";
$lang['Group_hidden_members'] = "�i grup� yra slapta, j�s negalite matyti jos nari�";
$lang['No_pending_group_members'] = "�i grup� neturi laukian�i� nari�";
$lang["Group_joined"] = "J�s s�kmingai prisijung�te prie �ios grup�s<br />Jums bus prane�ta, kada j�s� �stojim� patvirtins grup�s moderatorius.";
$lang['Group_request'] = "Gavome u�klaus� d�l prisijungimo prie j�s� grup�s.";
$lang['Group_approved'] = "J�s� u�klausa buvo patvirtinta.";
$lang['Group_added'] = "J�s buvote prijungtas prie �ios grup�s.";
$lang['Already_member_group'] = "J�s jau esate �ios grup�s narys";
$lang['User_is_member_group'] = "Vartotojas jau yra �ios grup�s narys";
$lang['Group_type_updated'] = "Grup�s tipas s�kmingai pakeistas.";

$lang['Could_not_add_user'] = "J�s� pasirinktas vartotojas neegzistuoja";
$lang['Could_not_anon_user'] = "J�s negalite sve�io padaryti grup�s nariu";

$lang['Confirm_unsub'] = "Ar tikrai norite i�stoti i� grup�s?";
$lang['Confirm_unsub_pending'] = "J�s� �stojimas � �i� grup� dar nebuvo patvirtintas. Ar tikrai norite i�stoti i� grup�s?";

$lang['Unsub_success'] = "J�s buvote i�mestas i� �ios grup�s.";

$lang['Approve_selected'] = "Patvirtinti pasirinktus";
$lang['Deny_selected'] = "U�drausti pasirinktus";
$lang['Not_logged_in'] = "�ra�ykite savo vard� bei slapta�od�, jei norite prisijungti prie grup�s.";
$lang['Remove_selected'] = "I�trinti pasirinktus";
$lang['Add_member'] = "Prid�ti nar�";
$lang['Not_group_moderator'] = "J�s nesate �ios grup�s moderatorius, tod�l negalite atlikti �io veiksmo.";

$lang['Login_to_join'] = "�ra�ykite savo vard� bei slapta�od�, kad gal�tum�te prijungti arba redaguoti grup�s narius";
$lang['This_open_group'] = "Tai atvira grup�. J�s galite tapti jos nariu";
$lang['This_closed_group'] = "Tai u�dara grup�. Vartotojai nepriimami";
$lang['This_hidden_group'] = "Tai slapta grup�. Automati�kai prisijungti vartotojams draud�iama";
$lang['Member_this_group'] = "J�s esate �ios grup�s narys";
$lang['Pending_this_group'] = "J�s� pra�ymas �stoti � �i� grup� dar nepatvirtintas";
$lang['Are_group_moderator'] = "J�s esate �ios grup�s moderatorius";
$lang['None'] = "Nieko";

$lang['Subscribe'] = "�stoti";
$lang['Unsubscribe'] = "I�stoti";
$lang['View_Information'] = "Rodyti informacij�";


//
// Search
//
$lang['Search_query'] = "Paie�kos u�klausa";
$lang['Search_options'] = "Paie�kos parametrai";

$lang['Search_keywords'] = "Ie�koti raktini� �od�i�";
$lang['Search_keywords_explain'] = "Galite naudoti <u>AND</u>, nor�dami apib�dinti �od�ius, kurie privalo b�ti rezultate. Taip pat galite naudoti <u>OR</u>, nor�dami apib�dinti �od�ius kurie gali b�ti rezultate. Galite naudoti ir <u>NOT</u>. Juo apib�dinsite �od�ius kuri� netur�t� b�ti paie�kos rezultatuose. Simboliu * galima apibr��ti dalines reik�mes.";
$lang['Search_author'] = "Ie�koti autoriaus";
$lang['Search_author_explain'] = "Naudokite * dalin�ms reik�m�ms rasti";

$lang['Search_for_any'] = "Ie�koti bet koki� termin� arba naudoti u�klaus�";
$lang['Search_for_all'] = "Ie�koti vis� termin�";
$lang['Search_title_msg'] = "Ie�koti temos pavadinimo ir �inut�s teksto";
$lang['Search_msg_only'] = "Ie�koti �inut�s teksto";

$lang['Return_first'] = "Gra�inti tik pirmus"; // followed by xxx characters in a select box
$lang['characters_posts'] = "prane�im� simbolius";

$lang['Search_previous'] = "Ie�koti i� ankstesni�"; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = "R��iuoti pagal";
$lang['Sort_Time'] = "Prane�imo laik�";
$lang['Sort_Post_Subject'] = "Prane�imo pavadinim�";
$lang['Sort_Topic_Title'] = "Temos pavadinim�";
$lang['Sort_Author'] = "Autori�";
$lang['Sort_Forum'] = "Forum�";

$lang['Display_results'] = "Rodyti rezultatus kaip";
$lang['All_available'] = "Visi leistini";
$lang['No_searchable_forums'] = "J�s neturite teis�s ie�koti forum� �ioje diskusij� lentoje";

$lang['No_search_match'] = "J�s� u�klausa neatitinka joki� tem� arba prane�im� esan�i� duomen� baz�je";
$lang['Found_search_match'] = "Buvo rasta %d rezultatas"; // eg. Search found 1 match
$lang['Found_search_matches'] = "Buvo rasta %d rezultatai(�)"; // eg. Search found 24 matches

$lang['Close_window'] = "U�daryti lang�";


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = "Atsipra�ome, bet tik %s gali ra�yti svarbias temas �iame forume";
$lang['Sorry_auth_sticky'] = "Atsipra�ome, bet tik %s gali ra�yti da�nas temas �iame forume";
$lang['Sorry_auth_read'] = "Atsipra�ome, bet tik %s gali skaityti temas �iame forume";
$lang['Sorry_auth_post'] = "Atsipra�ome, bet tik %s gali kurti temas �iame forume";
$lang['Sorry_auth_reply'] = "Atsipra�ome, bet tik %s gali atsakyti � prane�imus �iame forume";
$lang['Sorry_auth_edit'] = "Atsipra�ome, bet tik %s gali redaguoti prane�imus �iame forume";
$lang['Sorry_auth_delete'] = "Atsipra�ome, bet tik %s gali trinti prane�imus �iame forume";
$lang['Sorry_auth_vote'] = "Atsipra�ome, bet tik %s gali balsuoti apklausose �iame forume";

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = "<b>sve�iai</b>";
$lang['Auth_Registered_Users'] = "<b>registruoti vartotojai</b>";
$lang['Auth_Users_granted_access'] = "<b>vartotojai, turintys special� pri�jim�</b>";
$lang['Auth_Moderators'] = "<b>moderatoriai</b>";
$lang['Auth_Administrators'] = "<b>administratoriai</b>";

$lang['Not_Moderator'] = "J�s nesate �io forumo moderatorius";
$lang['Not_Authorised'] = "Neautorizuota";

$lang['You_been_banned'] = "J�s buvote pa�alintas i� �io forumo.<br />D�l tolimesn�s informacijos, pra�ome kreiptis � administratori�.";


//
// Viewonline
//
$lang['Reg_users_zero_online'] = "Dabar diskusijose yra 0 registruot� ir "; // There ae 5 Registered and
$lang['Reg_users_online'] = "Dabar diskusijose yra %d registruoti(�) ir "; // There ae 5 Registered and
$lang['Reg_user_online'] = "Dabar diskusijose yra %d registruotas ir "; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = "0 slapt� vartotoj�"; // 6 Hidden users online
$lang['Hidden_users_online'] = "%d slapti(�) vartotojai(�)"; // 6 Hidden users online
$lang['Hidden_user_online'] = "%d slaptas vartotojas"; // 6 Hidden users online
$lang['Guest_users_online'] = "Dabar diskusijose yra %d sve�iai(�)"; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = "�iuo metu diskusijose n�ra sve�i�"; // There are 10 Guest users online
$lang['Guest_user_online'] = "Dabar diskusijose yra %d sve�ias"; // There is 1 Guest user online
$lang['No_users_browsing'] = "�iuo metu n�ra aktyvi� vartotoj�";

$lang['Online_explain'] = "�ie duomenys pateikti pagal pastar�j� 5 minu�i� diskusij� aktyvum�";

$lang['Forum_Location'] = "Forume";
$lang['Last_updated'] = "Paskutin� kart� atnaujinta";

$lang['Forum_index'] = "Diskusij� pagrindiniame puslapyje";
$lang['Logging_on'] = "Jungiasi";
$lang['Posting_message'] = "Ra�o prane�im�";
$lang['Searching_forums'] = "Ie�ko diskusijose";
$lang['Viewing_profile'] = "Per�i�ri apra�ym�";
$lang['Viewing_online'] = "Per�i�ri kas �iuo metu nar�o diskusijas";
$lang['Viewing_member_list'] = "Per�i�ri nari� s�ra��";
$lang['Viewing_priv_msgs'] = "Skaito asmeninius prane�imus";
$lang['Viewing_FAQ'] = "Skaito DUK";


//
// Moderator Control Panel
//
$lang['Mod_CP'] = "Moderatoriaus valdymo pultas";
$lang['Mod_CP_explain'] = "Naudodamiesi �ia forma, galite moderuoti forum�. Galite u�daryti, atidaryti, perkelti arba i�trinti bet kok� prane�im� skai�i�.";

$lang['Select'] = "Pasirinkti";
$lang['Delete'] = "I�trinti";
$lang['Move'] = "Perkelti";
$lang['Lock'] = "U�rakinti";
$lang['Unlock'] = "Atrakinti";

$lang['Topics_Removed'] = "Pasirinktos temos buvo s�kmingai i�trintos i� duomen� baz�s.";
$lang['Topics_Locked'] = "Pasirinktos temos buvo u�rakintos";
$lang['Topics_Moved'] = "Pasirinktos temos buvo perkeltos";
$lang['Topics_Unlocked'] = "Pasirinktos temos buvo atrakintos";
$lang['No_Topics_Moved'] = "Temos nebuvo perkeltos";

$lang['Confirm_delete_topic'] = "Ar tikrai norite i�trinti pasirinktas(�) temas(�)?";
$lang['Confirm_lock_topic'] = "Ar tikrai norite u�rakinti pasirinktas(�) temas(�)?";
$lang['Confirm_unlock_topic'] = "Ar tikrai norite atrakinti pasirinktas(�) temas(�)?";
$lang['Confirm_move_topic'] = "Ar tikrai norite perkelti pasirinktas(�) temas(�)?";

$lang['Move_to_forum'] = "Perkelti � forum�";
$lang['Leave_shadow_topic'] = "Palikti temos �e��l� sename forume.";

$lang['Split_Topic'] = "Temos i�skyrimo valdymo forma";
$lang['Split_Topic_explain'] = "Naudodamiesi �ia forma galite isskirstyti prane�imus � dvi dalis.";
$lang['Split_title'] = "Naujas temos pavadinimas";
$lang['Split_forum'] = "Forumas naujai temai";
$lang['Split_posts'] = "I�skirti pasirinktus prane�imus";
$lang['Split_after'] = "I�skirti i� pasirinkt� prane�im�";
$lang['Topic_split'] = "Pasirinkta temas buvo s�kmingai i�skirta";

$lang['Too_many_error'] = "J�s pasirinkote per daug prane�im�. Paskui gal�site pasirinkti tik vien� prane�im� i�skyrimui!";

$lang['None_selected'] = "J�s nepasirinkote n� vieno prane�imo �iai operacijai. Pra�ome gr��ti atgal ir pasirinkti bent vien�.";
$lang['New_forum'] = "Naujas forumas";

$lang['This_posts_IP'] = "�io prane�imo IP adresas";
$lang['Other_IP_this_user'] = "Kiti IP adresai, i� kuri� ra�� �is vartotojas";
$lang['Users_this_IP'] = "Vartotojai ra�� i� �io IP adreso";
$lang['IP_info'] = "IP adreso informacija";
$lang['Lookup_IP'] = "Per�i�r�ti IP";


//
// Timezones ... for display on each page
//
$lang['All_times'] = "Visos datos yra %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 valand�";
$lang['-11'] = "GMT - 11 valand�";
$lang['-10'] = "HST (Havajai)";
$lang['-9'] = "GMT - 9 valandos";
$lang['-8'] = "PST (JAV/Kanada)";
$lang['-7'] = "MST (JAV/Kanada)";
$lang['-6'] = "CST (JAV/Kanada)";
$lang['-5'] = "EST (JAV/Kanada)";
$lang['-4'] = "GMT - 4 valandos";
$lang['-3.5'] = "GMT - 3,5 valandos";
$lang['-3'] = "GMT - 3 valandos";
$lang['-2'] = "GMT - 2 valandos";
$lang['-1'] = "GMT - 1 valanda";
$lang['0'] = "GMT";
$lang['1'] = "CET (Europa)";
$lang['2'] = "GMT + 2 valandos";
$lang['3'] = "GMT + 3 valandos";
$lang['3.5'] = "GMT + 3,5 valandos";
$lang['4'] = "GMT + 4 valandos";
$lang['4.5'] = "GMT + 4,5 valandos";
$lang['5'] = "GMT + 5 valandos";
$lang['5.5'] = "GMT + 5,5 valandos";
$lang['6'] = "GMT + 6 valandos";
$lang['6.5'] = "GMT + 6,5 valandos";
$lang['7'] = "GMT + 7 valandos";
$lang['8'] = "WST (Australija)";
$lang['9'] = "GMT + 9 valandos";
$lang['9.5'] = "CST (Australija)";
$lang['10'] = "EST (Australija)";
$lang['11'] = "GMT + 11 valand�";
$lang['12'] = "GMT + 12 valand�";

// These are displayed in the timezone select box
$lang['tz']['-12'] = "(GMT -12:00 valand�) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT -11:00 valand�) Ramiojo vandenyno salos, Samoa";
$lang['tz']['-10'] = "(GMT -10:00 valand�) Havajai";
$lang['tz']['-9'] = "(GMT -9:00 valandos) Aliaska";
$lang['tz']['-8'] = "(GMT -8:00 valandos) Ramiojo vandenyno laikas (JAV ir Kanada), Tijuana";
$lang['tz']['-7'] = "(GMT -7:00 valandos) Kaln� laikas (JAV ir Kanada), Arizona";
$lang['tz']['-6'] = "(GMT -6:00 valandos) Centrinis laikas (JAV ir Kanada), Meksikas";
$lang['tz']['-5'] = "(GMT -5:00 valandos) Ryt� laikas (JAV ir Kanada), Bogota, Lima";
$lang['tz']['-4'] = "(GMT -4:00 valandos) Atlantinis laikas (Kanada), Karakasas, La Pazas";
$lang['tz']['-3.5'] = "(GMT -3:30 valandos) Niufaundlendas";
$lang['tz']['-3'] = "(GMT -3:00 valandos) Buenos Aires, D�ord�taunas, Folklendo salos";
$lang['tz']['-2'] = "(GMT -2:00 valandos) Vidurio Atlantas, �ventoji Elena";
$lang['tz']['-1'] = "(GMT -1:00 valanda) Azorai, Verd�io salos";
$lang['tz']['0'] = "(GMT) Kasablanka, Dublinas, Edinburgas, Londonas, Lisabona";
$lang['tz']['1'] = "(GMT +1:00 valanda) Amsterdamas, Berlynas, Briuselis, Madridas, Pary�ius, Roma";
$lang['tz']['2'] = "(GMT +2:00 valandos) Kairas, Helsinkis, Kaliningradas, Piet� Afrika, Vilnius";
$lang['tz']['3'] = "(GMT +3:00 valandos) Bagdadas, Maskva, Nairobis";
$lang['tz']['3.5'] = "(GMT +3:30 valandos) Teheranas";
$lang['tz']['4'] = "(GMT +4:00 valandos) Abu Dabis, Baku, Tbilisis";
$lang['tz']['4.5'] = "(GMT +4:30 valandos) Kabulas";
$lang['tz']['5'] = "(GMT +5:00 valandos) Jekaterinburgas, Islamabadas, Ta�kentas";
$lang['tz']['5.5'] = "(GMT +5:30 valandos) Bomb�jus, Kalkuta, Naujasis Delis";
$lang['tz']['6'] = "(GMT +6:00 valandos) Alma Ata, Kolombas, D�aka, Novosibirskas";
$lang['tz']['6.5'] = "(GMT +6:30 valandos) Rang�nas";
$lang['tz']['7'] = "(GMT +7:00 valandos) Bankokas, Hanojus, D�akarta";
$lang['tz']['8'] = "(GMT +8:00 valandos) Hong Kongas, Pertas, Singap�ras, Taip�jus";
$lang['tz']['9'] = "(GMT +9:00 valandos) Osaka, Seulas, Tokijas, Jakutskas";
$lang['tz']['9.5'] = "(GMT +9:30 valandos) Adelaid�, Darvinas";
$lang['tz']['10'] = "(GMT +10:00 valand�) Kanbera, Guama, Melburnas, Sidn�jus, Vladivostokas";
$lang['tz']['11'] = "(GMT +11:00 valand�) Magadanas, Naujoji Kaledonija, Solomono salos";
$lang['tz']['12'] = "(GMT +12:00 valand�) Ouklendas, Velingtonas, Fid�i, Mar�alo salos";

$lang['datetime']['Sunday'] = "Sekmadienis";
$lang['datetime']['Monday'] = "Pirmadienis";
$lang['datetime']['Tuesday'] = "Antradienis";
$lang['datetime']['Wednesday'] = "Tre�iadienis";
$lang['datetime']['Thursday'] = "Ketvirtadienis";
$lang['datetime']['Friday'] = "Penktadienis";
$lang['datetime']['Saturday'] = "�e�tadienis";
$lang['datetime']['Sun'] = "Sk.";
$lang['datetime']['Mon'] = "Pir.";
$lang['datetime']['Tue'] = "Antr.";
$lang['datetime']['Wed'] = "Tr.";
$lang['datetime']['Thu'] = "Kv.";
$lang['datetime']['Fri'] = "Pen.";
$lang['datetime']['Sat'] = "�t.";
$lang['datetime']['January'] = "Sausis";
$lang['datetime']['February'] = "Vasaris";
$lang['datetime']['March'] = "Kovas";
$lang['datetime']['April'] = "Balandis";
$lang['datetime']['May'] = "Gegu��";
$lang['datetime']['June'] = "Bir�elis";
$lang['datetime']['July'] = "Liepa";
$lang['datetime']['August'] = "Rugpj�tis";
$lang['datetime']['September'] = "Rugs�jis";
$lang['datetime']['October'] = "Spalis";
$lang['datetime']['November'] = "Lapkritis";
$lang['datetime']['December'] = "Gruodis";
$lang['datetime']['Jan'] = "01";
$lang['datetime']['Feb'] = "02";
$lang['datetime']['Mar'] = "03";
$lang['datetime']['Apr'] = "04";
$lang['datetime']['May'] = "05";
$lang['datetime']['Jun'] = "06";
$lang['datetime']['Jul'] = "07";
$lang['datetime']['Aug'] = "08";
$lang['datetime']['Sep'] = "09";
$lang['datetime']['Oct'] = "10";
$lang['datetime']['Nov'] = "11";
$lang['datetime']['Dec'] = "12";

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = "Informacija";
$lang['Critical_Information'] = "Kritin� informacija";

$lang['General_Error'] = "Pagrindin� klaida!";
$lang['Critical_Error'] = "Kritin� klaida!";
$lang['An_error_occured'] = "�vyko klaida!";
$lang['A_critical_error'] = "�vyko kritin� klaida!";

//
// That's all Folks!
// -------------------------------------------------
?>