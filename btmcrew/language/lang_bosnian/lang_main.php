<?php
/***************************************************************************
 *                lang_main.php [Bosnia-Croatia-Serbia-Montenegro]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *     $Id: lang_main.php,v 1.85.2.3 2002/05/12 17:57:34 psotfx Exp $
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
 
/***************************************************************************
 *     Prevod s italijanske verzije phpBB Foruma: Golac �eljko, Alen Ruvic *
 *     pocetak prevoda      : Petak, 06. septembar 2002                    *
 *     web                  : http://www.maglaj.info                       *
 *     e-mail               : mrmot@vizzavi.it, ruval@gmx.ch               *
 ***************************************************************************/


$lang['ENCODING'] = 'windows-1250';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'lijevo';
$lang['RIGHT'] = 'desno';
$lang['DATE_FORMAT'] =  'd M Y'; 

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION_INFO'] = 'bosansko-srpsko-hrvatski <a href="http://www.maglaj.info/download/lang_bosnia.zip">prevod</a> obezbjedio <a href="http://www.maglaj.info" class="copyright">www.maglaj.info</a>';



// Ovdje su definisani zajedni�ki termini
// koji se javljaju svugdje u forumu
//
$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategorija';
$lang['Topic'] = 'Tema';
$lang['Topics'] = 'Teme';
$lang['Replies'] = 'Odgovori';
$lang['Views'] = 'Vi�eno';
$lang['Post'] = 'Komentar';
$lang['Posts'] = 'Komentari';
$lang['Posted'] = 'Upisano';
$lang['Username'] = '�lan';
$lang['Password'] = 'Password';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Poster';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Vrijeme';
$lang['Hours'] = 'Sati';
$lang['Message'] = 'Poruka';

$lang['1_Day'] = '1 dan';
$lang['7_Days'] = '7 dana';
$lang['2_Weeks'] = '2 sedmice';
$lang['1_Month'] = '1 mjesec';
$lang['3_Months'] = '3 mjeseca';
$lang['6_Months'] = '6 mjeseci';
$lang['1_Year'] = '1 godina';

$lang['Go'] = 'Idi';
$lang['Jump_to'] = 'Idi na';
$lang['Submit'] = 'Potvrdi';
$lang['Reset'] = 'Resetuj';
$lang['Cancel'] = 'Obri�i';
$lang['Preview'] = 'Vidi kako �e izgledati poruka';
$lang['Confirm'] = 'Potvrdi';
$lang['Spellcheck'] = 'Kontrola ortografije';
$lang['Yes'] = 'Da';
$lang['No'] = 'Ne';
$lang['Enabled'] = 'Aktivirano';
$lang['Disabled'] = 'Neaktivirano';
$lang['Error'] = 'Gre�ka';

$lang['Next'] = 'Naprijed';
$lang['Previous'] = 'Nazad';
$lang['Goto_page'] = 'Idi na stranicu';
$lang['Joined'] = '�lan od';
$lang['IP_Address'] = 'IP Adresa';

$lang['Select_forum'] = 'Izaberi diskusiju';
$lang['View_latest_post'] = 'Vidi zadnji komentar';
$lang['View_newest_post'] = 'Vidi novije komentare';
$lang['Page_of'] = 'Stranica <b>%d</b>/<b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s Forum Indeks';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Otvori novu diskusiju';
$lang['Reply_to_topic'] = 'Odgovori na temu';
$lang['Reply_with_quote'] = 'Citiraj ovaj komentar';

$lang['Click_return_topic'] = 'Klikni %sovdje%s za povratak na temu'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klikni %sovdje%s za novi poku�aj';
$lang['Click_return_forum'] = 'Klikni %sovdje%s za povratak na forum';
$lang['Click_view_message'] = 'Klikni %sovdje%s da vidi� poruku';
$lang['Click_return_modcp'] = 'Klikni %sovdje%s za kontrolni panel Moderatora';
$lang['Click_return_group'] = 'Klikni %sovdje%s za povratak na kontrolni panel grupe';

$lang['Admin_panel'] = 'Administracija foruma';

$lang['Board_disable'] = '�ao mi je, ali trenutno forum nije dostupan. Poku�ajte ponovo kasnije';


//
// statistika prisutnosti + naslovi
//
$lang['Registered_users'] = 'Registrovani �lanovi trenutno na forumu:';
$lang['Browsing_forum'] = 'Trenutno su ovdje:';
$lang['Online_users_zero_total'] = 'Ukupno <b>0</b> korisnika online: ';
$lang['Online_users_total'] = 'Ukupno <b>%d</b> korisnika online: ';
$lang['Online_user_total'] = 'Ukupno korisnika online <b>%d</b>: ';
$lang['Reg_users_zero_total'] = '0 registrovanih, ';
$lang['Reg_users_total'] = '%d registrovanih, ';
$lang['Reg_user_total'] = '%d registrovan, ';
$lang['Hidden_users_zero_total'] = '0 skriven, ';
$lang['Hidden_user_total'] = '%d skrivenih, ';
$lang['Hidden_users_total'] = '%d skrivenih, ';
$lang['Guest_users_zero_total'] = '0 gost';
$lang['Guest_users_total'] = '%d gostiju';
$lang['Guest_user_total'] = '%d gost';
$lang['Record_online_users'] = 'Najvi�e korisnika koji su istovremeno bili na forumu do sada bilo je <font color="#cc0066"><b>%s</b></font> dana: <b>%s</b>'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sModerator%s';
$lang['You_last_visit'] = 'Va�a zadnja posjeta bila je  %s'; // %s replaced by date/time
$lang['Current_time'] = 'Danas je %s '; // %s replaced by time

$lang['Search_new'] = 'Pogledaj nove komentare od zadnje posjete';
$lang['Search_your_posts'] = 'Vidi vlastite komentare';
$lang['Search_unanswered'] = 'Vidi komentare bez odgovora';

$lang['Register'] = 'Registracija';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Vidi vlastiti profil';
$lang['Search'] = 'Tra�i';
$lang['Memberlist'] = 'Lista �lanova';
$lang['FAQ'] = 'Kako koristiti ovaj Forum?';
$lang['BBCode_guide'] = 'BBCode vodi�';
$lang['Usergroups'] = 'Grupe korisnika';
$lang['Last_Post'] = 'Zadnji komentar';
$lang['Moderator'] = 'Moderator';
$lang['Moderators'] = 'Moderatori';


//
// tekst vezan za statistiku foruma
//
$lang['Posted_articles_zero_total'] = 'Ukupan broj komentara na�ih �lanova je <b>0</b>' ; // broj komentara
$lang['Posted_articles_total'] = 'Ukupan broj komentara na�ih �lanova je <b>%d</b>'; // broj komentara
$lang['Posted_article_total'] = 'Ukupan broj komentara na�ih �lanova je <b>%d</b>' ; // broj komentara
$lang['Registered_users_zero_total'] = 'Registrovani �lanovi <b>0</b>' ; // # Registrovani �lanovi
$lang['Registered_users_total'] = 'Registrovani �lanovi <b>%d</b>' ; // # Registrovani �lanovi
$lang['Registered_user_total'] = 'Registrovani �lanovi <b>%d</b>' ; // # Registrovani �lanovi
$lang['Newest_user'] = 'Najnoviji �lan foruma <b>%s%s%s</b>'; // a href, username, /a 
$lang['No_new_posts_last_visit'] = 'Nema novih komentara od Va�e zadnje posjete';
$lang['No_new_posts'] = 'Nema novih komentara';
$lang['New_posts'] = 'Novi komentari';
$lang['New_post'] = 'Novi komentar';
$lang['No_new_posts_hot'] = 'Nema novih komentara [ Popularna tema ]';
$lang['New_posts_hot'] = 'Novi komentari [ Popularna tema ]';
$lang['No_new_posts_locked'] = 'Nema novih komentara [ zatvoreno ]';
$lang['New_posts_locked'] = 'Novi komentari [ zatvoreno ]';
$lang['Forum_is_locked'] = 'Zatvorena diskusija';


//
// Login
//
$lang['Enter_password'] = 'Unesi vlastiti nadimak i password';
$lang['Login'] = 'Login';
$lang['Logout'] = 'Logout';
$lang['Forgotten_password'] = 'Zaboravljen password';
$lang['Log_me_in'] = 'Prijavi me automatski';
$lang['Error_login'] = 'Ne�to nije ta�no: ili password ili nadimak! Molim te da poku�a� ponovo';


//
// Index strana
//
$lang['Index'] = 'Indeks';
$lang['No_Posts'] = 'Nema komentara';
$lang['No_forums'] = 'Trenutno nema diskusija u ovom dijelu foruma';
$lang['Private_Message'] = 'Privatna poruka';
$lang['Private_Messages'] = 'Privatne poruke';
$lang['Who_is_Online'] = 'Ko je prisutan na forumu';
$lang['Mark_all_forums'] = 'Ozna�i sve diskusije kao pro�itane';
$lang['Forums_marked_read'] = 'Sve diskusije su ozna�ene kao pro�itane';


//
// Vidi forum
//
$lang['View_forum'] = 'Vidi forum';

$lang['Forum_not_exist'] = 'Forum koji ste tra�ili ne postoji';
$lang['Reached_on_error'] = 'Gre�kom ste dospjeli na ovu stranicu.';

$lang['Display_topics'] = 'Poka�i prethodne komentare';
$lang['All_Topics'] = 'Svi komentari';

$lang['Topic_Announcement'] = '<b>Obavje�tenje:</b>';
$lang['Topic_Sticky'] = '<b>Ne propusti:</b>';
$lang['Topic_Moved'] = '<i><font color="#cccccc">Tema je pomjerena:</font></i>';
$lang['Topic_Poll'] = '<b>[Anketa]</b>';

$lang['Mark_all_topics'] = 'Ozna�i sve komentare kao pro�itane';
$lang['Topics_marked_read'] = 'Komentari u ovom dijelu foruma su ozna�eni kao pro�itani';

$lang['Rules_post_can'] = '<b>Mo�ete</b> ostaviti svoj komentar u ovom forumu ';
$lang['Rules_post_cannot'] = '<b>Ne mo�ete</b> ostavljati nove komentare u ovom forumu';
$lang['Rules_reply_can'] = '<b>Mo�ete</b> odgovoriti na teme ili komentare u ovom forumu';
$lang['Rules_reply_cannot'] = '<b>Ne mo�ete</b> odgovoriti na teme ili komentare u ovom forumu';
$lang['Rules_edit_can'] = '<b>Mo�ete</b> prepraviti vlastite poruke';
$lang['Rules_edit_cannot'] = '<b>Ne mo�ete</b> prepraviti vlastite poruke';
$lang['Rules_delete_can'] = '<b>Mo�ete</b> obrisati vlastite komentare u ovom forumu';
$lang['Rules_delete_cannot'] = '<b>Ne mo�ete</b> obrisati vlastite komentare u ovom forumu';
$lang['Rules_vote_can'] = '<b>Mo�ete</b> glasati u anketama foruma';
$lang['Rules_vote_cannot'] = '<b>Ne mo�ete</b> glasati u anketama foruma';
$lang['Rules_moderate'] = '<b>Mo�ete</b> %smoderirati ovaj forum%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Nema komentara u ovoj diskusiji<br />Klikni<b> Nova tema</b> ako �eli� otvoriti diskusiju';


//
// Vidi diskusiju (temu; topic)
//
$lang['View_topic'] = 'Vidi temu';

$lang['Guest'] = 'Gost';
$lang['Post_subject'] = 'Naslov komentara';
$lang['View_next_topic'] = 'Vidi sljede�u temu';
$lang['View_previous_topic'] = 'Vidi prethodnu temu';
$lang['Submit_vote'] = 'Glasaj';
$lang['View_results'] = 'Rezultati';

$lang['No_newer_topics'] = 'Nema novijih topic-a u ovom forumu';
$lang['No_older_topics'] = 'Nema starijih topic-a u ovom forumu';
$lang['Topic_post_not_exist'] = 'Tema ili komentar koju tra�i� ne postoji';
$lang['No_posts_topic'] = 'Nema komentara na ovu temu';

$lang['Display_posts'] = 'Poka�i ranije komentare';
$lang['All_Posts'] = 'Sve poruke';
$lang['Newest_First'] = 'Prvo novije';
$lang['Oldest_First'] = 'Prvo starije';

$lang['Back_to_top'] = 'Na vrh';

$lang['Read_profile'] = 'Vidi profil korisnika'; 
$lang['Send_email'] = 'Po�alji e-mail ovom korisniku';
$lang['Visit_website'] = 'Posjeti web-site';
$lang['ICQ_status'] = 'ICQ Status';
$lang['Edit_delete_post'] = 'Prepravi ili obi�i ovaj komentar';
$lang['View_IP'] = 'Pogledaj IP korisnika';
$lang['Delete_post'] = 'Obri�i komentar';

$lang['wrote'] = '(citat)'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citat'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = '<b>%s</b>: komentar modifikovan dana: <u>%s</u>; <i>prepravljeno ukupno %d puta</i> '; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = '<b>%s</b>: komentar modifikovan dana: <u>%s</u>; <i>prepravljeno ukupno %d puta</i>'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Zatvori temu';
$lang['Unlock_topic'] = 'Otvori temu';
$lang['Move_topic'] = 'Pomjeri ovu temu';
$lang['Delete_topic'] = 'Obri�i ovu temu';
$lang['Split_topic'] = 'Podijeli temu';

$lang['Stop_watching_topic'] = 'Ne prati vi�e ovu temu';
$lang['Start_watching_topic'] = 'Prati komentare na ovu temu';
$lang['No_longer_watching'] = 'Ne prati� vi�e komentare na ovu temu';
$lang['You_are_watching'] = 'Sada prati� komentare na ovu temu';

$lang['Total_votes'] = 'Ukupno glasova';

//
// Komentari/odgovori - generalno (ovo se ne odnosi na privatne poruke medju ucesnicima foruma!)
//
$lang['Message_body'] = 'Poruka';
$lang['Topic_review'] = 'Pregled teme';

$lang['No_post_mode'] = 'Na�in ostavljanja komentara nedefinisan'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Otvori novu temu';
$lang['Post_a_reply'] = 'Napi�i komentar';
$lang['Post_topic_as'] = 'Otvori temu kao';
$lang['Edit_Post'] = 'Modifikuj temu';
$lang['Options'] = 'Opcije';

$lang['Post_Announcement'] = 'Obavje�tenje';
$lang['Post_Sticky'] = 'Ne propusti!';
$lang['Post_Normal'] = 'Normalan';

$lang['Confirm_delete'] = 'Zaista �eli� obrisati ovaj komentar?';
$lang['Confirm_delete_poll'] = 'Zaista �eli� obrisati ovu anketu?';

$lang['Flood_Error'] = 'Sa�ekaj koju sekundu prije upisivanja novog komentara.';
$lang['Empty_subject'] = 'Potrebno je dati neki naslov komentaru';
$lang['Empty_message'] = 'Poruka nema nikakvog sadr�aja!';
$lang['Forum_locked'] = 'Forum je zatvoren';
$lang['Topic_locked'] = 'Tema je zatvorena od strane administratora';
$lang['No_post_id'] = 'Mora� izabrati komentar koji �eli� modifikovati';
$lang['No_topic_id'] = 'Izaberi komentar na koji �eli� odgovarati';
$lang['No_valid_mode'] = 'Mo�e� samo ostaviti komentar, odgovoriti, modifikovati ili citirati poruku. Molim te da se vrati� nazad i poku�a� ponovo';
$lang['No_such_post'] = 'Nema takovog komentara, molim te da se vrati� i poku�a� ponovo';
$lang['Edit_own_posts'] = 'Mo�e� modifikovati samo svoje poruke';
$lang['Delete_own_posts'] = 'Mo�e� obrisati samo svoje poruke';
$lang['Cannot_delete_replied'] = 'Ne mo�e� obrisati odgovore';
$lang['Cannot_delete_poll'] = 'Ne mo�e� obrisati anketu u toku';
$lang['Empty_poll_title'] = 'Potreban je neki naslov za anketu';
$lang['To_few_poll_options'] = 'Mora� definirati makar dva odgovora na pitanje ankete';
$lang['To_many_poll_options'] = 'Une�eno je previ�e mogu�ih odgovora za ovu anketu';
$lang['Post_has_no_poll'] = 'Ovaj komentar ne sadr�i anketu';
$lang['Already_voted'] = 'Ne mo�e� glasati vi�e puta!';
$lang['No_vote_option'] = 'Potrebno je izabrati jedan odgovor';

$lang['Add_poll'] = 'Anketa';
$lang['Add_poll_explain'] = 'Ukoliko ne �eli� napraviti anketu ostavi ova polja prazna';
$lang['Poll_question'] = 'Pitanje';
$lang['Poll_option'] = 'Odgovor';
$lang['Add_option'] = 'Ubaci odgovor';
$lang['Update'] = 'A�uriraj';
$lang['Delete'] = 'Obri�i';
$lang['Poll_for'] = 'Anketa �e biti aktivna';
$lang['Days'] = 'dana'; // Ovo se koristi za odre�ivanja roka ankete kao i za odre�ivanje broja dan u administraciji brisanja tema.
$lang['Poll_for_explain'] = '[ Ako �eli� da anketa stalno traje ostavi prazno ovo polje ili upi�i nulu ]';
$lang['Delete_poll'] = 'Obri�i anketu';

$lang['Disable_HTML_post'] = 'Isklju�i <b>HTML-kod</b> u ovoj poruci';
$lang['Disable_BBCode_post'] = 'Isklju�i <b>BB-kod</b> u ovoj poruci';
$lang['Disable_Smilies_post'] = 'Isklju�i <b>smjehuljke</b> u ovoj poruci';

$lang['HTML_is_ON'] = 'HTML je <u>aktivan</u>';
$lang['HTML_is_OFF'] = 'HTML je <u>blokiran</u>';
$lang['BBCode_is_ON'] = '%sBB-kod%s je <u>aktivan</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBB-kod%s is <u>blokiran</u>';
$lang['Smilies_are_ON'] = 'Smilies su <u>aktivirani</u>';
$lang['Smilies_are_OFF'] = 'Smilies su <u>blokirani</u>';

$lang['Attach_signature'] = 'Dodaj potpis';
$lang['Notify'] = 'Obavijesti me u slu�aju odgovora na komentar';
$lang['Delete_post'] = 'Obri�i ovaj komentar';

$lang['Stored'] = 'Komentar je uspje�no registrovan';
$lang['Deleted'] = 'Va� komentar je uspje�no obrisan';
$lang['Poll_delete'] = 'Va�a anketa je uspje�no obrisana';
$lang['Vote_cast'] = 'Va� glas je registrovan';

$lang['Topic_reply_notification'] = 'Topic Reply Notification';

$lang['bbcode_b_help'] = 'Podebljaj tekst: [b]�eljeni text do�e ovdje[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Nakosi tekst: [i]�eljeni text do�e ovdje[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Podvuci tekst: [u]�eljeni text do�e ovdje[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citiraj: [quote]�eljeni text do�e ovdje[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Poka�i kod: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'List: [list]�eljeni text do�e ovdje[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Ure�ena lista: [list=]�eljeni text do�e ovdje[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Ubaci sliku(URL-slike):[img] http://www.primjer.com/mojaslika.jpg[/img](alt+p)';
$lang['bbcode_w_help'] = 'Ubaci URL: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Zatvori sve otvorene BB-tagove';
$lang['bbcode_s_help'] = 'Boja slova: [color=red]text[/color]  Tip: you can also use color=#FF0000';
$lang['bbcode_f_help'] = 'Veli�ina slova: [size=x-small]small text[/size]';

$lang['Emoticons'] = 'Smjehuljci';
$lang['More_emoticons'] = 'Pogledaj ostale smjehuljke';

$lang['Font_color'] = 'Boja slova';
$lang['color_default'] = 'Default';
$lang['color_dark_red'] = 'tamno crvena';
$lang['color_red'] = 'crvena';
$lang['color_orange'] = 'narand�asta';
$lang['color_brown'] = 'sme�a';
$lang['color_yellow'] = '�uta';
$lang['color_green'] = 'zelena';
$lang['color_olive'] = 'maslinasta';
$lang['color_cyan'] = 'svijetlo plava';
$lang['color_blue'] = 'plava';
$lang['color_dark_blue'] = 'tamno plava';
$lang['color_indigo'] = 'indigo';
$lang['color_violet'] = 'ljubi�asta';
$lang['color_white'] = 'bijela';
$lang['color_black'] = 'crna';

$lang['Font_size'] = 'Veli�ina slova';
$lang['font_tiny'] = 'tanka';
$lang['font_small'] = 'mala';
$lang['font_normal'] = 'normalna';
$lang['font_large'] = 'velika';
$lang['font_huge'] = 'ogromna';

$lang['Close_Tags'] = 'Zatvori tag-ove';
$lang['Styles_tip'] = 'Mogu�e je aktivirati razli�ite stilove za tekst';


//
// Privatne poruke
//
$lang['Private_Messaging'] = 'Privatne poruke';

$lang['Login_check_pm'] = 'Provjeri privatne poruke';
$lang['New_pms'] = 'Ima� %d nove privatne poruke'; // You have 2 new messages
$lang['New_pm'] = 'Ima� %d novu privatnu poruku'; // You have 1 new message
$lang['No_new_pm'] = 'Nema novih privatnih poruka';
$lang['Unread_pms'] = 'Ima� %d nepro�itanih poruka';
$lang['Unread_pm'] = 'Ima� %d nepro�itanu poruku';
$lang['No_unread_pm'] = 'Sve poruke su pro�itane';
$lang['You_new_pm'] = 'Nova poruka je u tvom pretincu';
$lang['You_new_pms'] = 'Nove poruke su u tvom pretincu';
$lang['You_no_new_pm'] = 'Nema� novih poruka u tvom pretincu';

$lang['Unread_message'] = 'Nepro�itane poruke';
$lang['Read_message'] = 'Pr�itaj poruku';

$lang['Read_pm'] = 'Pro�itaj poruku';
$lang['Post_new_pm'] = 'Napi�i poruku';
$lang['Post_reply_pm'] = 'Odgovori na poruku';
$lang['Post_quote_pm'] = 'Citiraj poruku';
$lang['Edit_pm'] = 'Modifikuj poruku';

$lang['Inbox'] = 'Primljene poruke';
$lang['Outbox'] = 'Poruke u izlazu';
$lang['Savebox'] = 'Spa�ene poruke';
$lang['Sentbox'] = 'Poslane poruke';
$lang['Flag'] = 'Znak';
$lang['Subject'] = 'Naslov komentara';
$lang['From'] = 'Od';
$lang['To'] = 'Za';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Ozna�i';
$lang['Sent'] = 'Poslano';
$lang['Saved'] = 'Spa�eno';
$lang['Delete_marked'] = 'Obri�i ozna�eno';
$lang['Delete_all'] = 'Obri�i sve';
$lang['Save_marked'] = 'Spa�i ozna�eno'; 
$lang['Save_message'] = 'Spasi poruku';
$lang['Delete_message'] = 'Obri�i poruku';

$lang['Display_messages'] = 'Poka�i ranije poruke'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Sve poruke';

$lang['No_messages_folder'] = 'Nema poruka u ovoj sekciji';

$lang['PM_disabled'] = 'Administrator nije aktivirao opciju slanja privatnih poruka';
$lang['Cannot_send_privmsg'] = '�ao mi je ali administrator nije aktivirao ovu opciju';
$lang['No_to_user'] = 'Mora� izabrati kome poslati poruku';
$lang['No_such_user'] = '�ao mi je ali taj korisnik ne postoji';

$lang['Disable_HTML_pm'] = 'Blokiraj HTML-kod u ovoj poruci';
$lang['Disable_BBCode_pm'] = 'Blokiraj BB-kod u ovoj poruci';
$lang['Disable_Smilies_pm'] = 'Blokiraj SMILIES u ovoj poruci ';

$lang['Message_sent'] = 'Va�a poruka je poslana';

$lang['Click_return_inbox'] = '%sVrati%s se na poruke';
$lang['Click_return_index'] = '%sVrati%s se na Indeks';

$lang['Send_a_new_message'] = 'Po�alji privatnu poruku';
$lang['Send_a_reply'] = 'Odogovori na poruku';
$lang['Edit_message'] = 'Modifikuj poruku';

$lang['Notification_subject'] = 'Stigla je nova poruka';

$lang['Find_username'] = 'Prona�i korisnika';
$lang['Find'] = 'Na�i';
$lang['No_match'] = 'Bez rezultata';

$lang['No_post_id'] = 'Nije odr�een ID komentara';
$lang['No_such_folder'] = 'Ne postoji takav direktorij';
$lang['No_folder'] = 'Nije odre�en direktorij';

$lang['Mark_all'] = 'Ozna�i sve';
$lang['Unmark_all'] = 'Neozna�eno';

$lang['Confirm_delete_pm'] = '�eli� obrisati ovu poruku?';
$lang['Confirm_delete_pms'] = '�eli� obrisati ove poruke?';

$lang['Inbox_size'] = 'Va� pretinac je %d%% pun'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Pretinac poslanih poruka je %d%% pun'; 
$lang['Savebox_size'] = 'Pretinac spa�enih poruka je %d%% pun'; 

$lang['Click_view_privmsg'] = 'Vidi %sovdje%s svoj pretinac';


//
// Profil/Registracija
//
$lang['Viewing_user_profile'] = 'Profil korisnika: %s'; // %s is username 
$lang['About_user'] = 'Sve o <i>%s</i>'; // %s is username

$lang['Preferences'] = 'Preference';
$lang['Items_required'] = 'Podaci ozna�eni sa  * obavezni';
$lang['Registration_info'] = 'Osnovni podaci';
$lang['Profile_info'] = 'Profil korisnika';
$lang['Profile_info_warn'] = 'Ove informacije �e biti vidljive';
$lang['Avatar_panel'] = 'Avatar - kontrolni panel';
$lang['Avatar_gallery'] = 'Avatar galerija';

$lang['Website'] = 'WWW';
$lang['Location'] = 'Mjesto';
$lang['Contact'] = 'Kontakt';
$lang['Email_address'] = 'E-mail';
$lang['Email'] = 'E-mail'; //u administaciji foruma, pod menuom MASOVNI E-MAIL
$lang['Send_private_message'] = 'Po�alji privatnu poruku';
$lang['Hidden_email'] = '[ Sakriven ]';
$lang['Search_user_posts'] = 'Na�i komentare ovogo korisnika';
$lang['Interests'] = 'Interesovanja';
$lang['Occupation'] = 'Zanimanje'; 
$lang['Poster_rank'] = 'Rang u forumu';

$lang['Total_posts'] = 'Ukupno komentara';
$lang['User_post_pct_stats'] = '%.2f%% od ukupno'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f komentara na dan'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Na�i sve komentare korisnika: %s'; // Find all posts by username

$lang['No_user_id_specified'] = '�ao mi je ali nemamo takvog korisnika';
$lang['Wrong_Profile'] = 'Mo�e� modifikovati samo svoj profil';

$lang['Only_one_avatar'] = 'Mo�e� izabrati samo jedan avatar';
$lang['File_no_data'] = 'Nema tog file-a na navedenom URL';
$lang['No_connection_URL'] = 'Nije mogu�e konektovati navedeni URL';
$lang['Incomplete_URL'] = 'Upisani URL nije kompletan';
$lang['Wrong_remote_avatar_format'] = 'URL za navedeni avatar nije validan';
$lang['No_send_account_inactive'] = '�ao mi je ali ne mogu prona�i password po�to ovaj account rezultira neaktivan.Molim te da kontaktira� administratora foruma';

$lang['Always_smile'] = 'Dozvoli uvijek kori�tenje Smilies ';
$lang['Always_html'] = 'Dozvoli uvijek HTML';
$lang['Always_bbcode'] = 'Dozvoli uvijek BB-kod';
$lang['Always_add_sig'] = 'Dodaj uvijek moj potpis';
$lang['Always_notify'] = 'Obavijesti me uvijek o odgovorima';
$lang['Always_notify_explain'] = 'Dobi�e� e-mail uvijek kada neko odgovori na temu u kojoj i ti u�estvuje�. Ovu opciju mo�e� uvijek modifikovati kad �eli� ostaviti svoj komentar';

$lang['Board_style'] = 'Moj stil foruma';
$lang['Board_lang'] = '�elim koristiti ovaj jezik za lak�e snala�enje na forumu';
$lang['No_themes'] = 'Nemamo tu temu u databazi';
$lang['Timezone'] = 'Vremenska zona u kojoj se nalazim';
$lang['Date_format'] = 'Datum (format datuma)';
$lang['Date_format_explain'] = 'Format datuma odgovara PHP definiciji datuma: <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a>';
$lang['Signature'] = 'Potpis';
$lang['Signature_explain'] = 'Mo�e� imati potpis duga�ak najvi�e %d karaktera';
$lang['Public_view_email'] = '�elim da moj e-mail bude javan';

$lang['Current_password'] = 'Trenutna password';
$lang['New_password'] = 'Nova password';
$lang['Confirm_password'] = 'Potvrdi password';
$lang['Confirm_password_explain'] = 'Potvrdi tvoju trenutnu password ukoliko �eli� unijeti novu e-mail adresu ili �eli� novi password';
$lang['password_if_changed'] = 'Upi�i novu password';
$lang['password_confirm_if_changed'] = 'Potvrdi novu password';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Avatari su sli�ice kojima mo�ete personalizirati va� profil. Maksimalna �irina je %d pixela, maksimalna visina %d pixela.Veli�ina file-a ne smije biti ve�a od %dkB.'; $lang['Upload_Avatar_file'] = 'Koristi avatar koji se nalazi u tvom kompjuteru';
$lang['Upload_Avatar_URL'] = 'Koristi avatar na sljede�em URL';
$lang['Upload_Avatar_URL_explain'] = 'Unesi URL na kojem se nalazi �eljeni avatar, bi�e kopiran na ovu stranicu.';
$lang['Pick_local_Avatar'] = 'Pogledaj galeriju avatara';
$lang['Link_remote_Avatar'] = 'Link �eljenog avatara';
$lang['Link_remote_Avatar_explain'] = 'Unesi URL avatara koji �eli� koristiti.';
$lang['Avatar_URL'] = 'URL of Avatar Image';
$lang['Select_from_gallery'] = 'Izaberi avatar iz galerije';
$lang['View_avatar_gallery'] = 'Vidi galeriju';

$lang['Select_avatar'] = 'Izaberi avatar';
$lang['Return_profile'] = 'Obri�i avatar';
$lang['Select_category'] = 'Izaberi kategoriju';

$lang['Delete_Image'] = 'Obri�i sliku';
$lang['Current_Image'] = 'Trenutno koristim ovaj avatar';

$lang['Notify_on_privmsg'] = 'Obavijesti me kada dobijem li�nu poruku';
$lang['Popup_on_privmsg'] = 'Kada stigne nova privatna poruka poka�i obavijest u zasebnom prozoru'; 
$lang['Popup_on_privmsg_explain'] = 'Pojedini template mogu otvoriti zaseban prozor koji sadr�i obavijest o novoj primljenoj privatnoj poruci'; 
$lang['Hide_user'] = 'Sakrij moje prisustvo na Forumu';

$lang['Profile_updated'] = 'Va� profil je a�uriran';
$lang['Profile_updated_inactive'] = 'Va� profil je a�uriran, gdje si unio va�ne izmjene iako ja account neaktivan.Pogledaj e-mail kako reaktivirati Va� account, a ako je potrebno Va� account ce reaktivirati administrator';

$lang['Password_mismatch'] = 'Une�ena password ne odgovara';
$lang['Current_password_mismatch'] = 'Password koju si dao ne odgovara onoj pohranjenoj u bazi podataka, ili nije upisana.';
$lang['Password_long'] = 'Password je previ�e duga�ka. ne smije biti du�a od 32 karaktera';
$lang['Username_taken'] = '�ao mi je ali �eljeni nadimak je ve� u upotrebi';
$lang['Username_invalid'] = 'Ovaj nadimak sadr�i pogre�an karakter kao \'';
$lang['Username_disallowed'] = '�ao mi je ali ovaj nadimak je rezervisan';
$lang['Email_taken'] = '�ao mi je ali ova e-mail adresa je ve� registrovana';
$lang['Email_banned'] = '�ao mi je ali pristup vlasniku ovog e-maila je onemogu�en. Kontaktirati administratora foruma';
$lang['Email_invalid'] = '�ao mi je ali ovaj e-mail nije validan';
$lang['Signature_too_long'] = 'Potpis je preduga�ak';
$lang['Fields_empty'] = 'Potrebno je popuniti sva  obavezna polja';
$lang['Avatar_filetype'] = 'Avatar mora biti tipa .jpg, .gif ili .png';
$lang['Avatar_filesize'] = 'Veli�ina avatara mora biti manja od %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Avatar ne smije biti �iri od %d pixela i  vi�i od %d pixela'; 

$lang['Welcome_subject'] = 'Dobrodo�ao na %s Forum'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Novi korisni�ki account';
$lang['Account_activated_subject'] = 'Account Aktiviran';

$lang['Account_added'] = 'Hvala na registraciji kojom postajete �lan foruma. Ukoliko �eli� mo�e� u�i koriste�i izabrani nadimak i password';
$lang['Account_inactive'] = 'Hvala na registraciji kojom postajete �lan foruma.Va� account je kreiran ali za njegovu aktivaciju potrebno je konsultujete e-mail koji ste nam dali.Tamo se nalaze instrukcije kako aktivirati account';
$lang['Account_inactive_admin'] = 'Hvala na registraciji kojom postajete �lan foruma.Va� account je kreiran i njegovo aktiviranje zavisi od administratora foruma koji �e Vam odgovoriti e-mailom';
$lang['Account_active'] = 'Va� account je aktiviran. Hvala na registraciji';
$lang['Account_active_admin'] = 'Administrator je aktivirao Va� account. Dobro nam do�li!';
$lang['Reactivate'] = 'Reaktiviraj account!';
$lang['Already_activated'] = 'Ve� ste aktivirali account';
$lang['COPPA'] = 'Va� account je kreiran ali je potrebno sa�ekati odobrenje administratora. konsultovati e-mail za dalje instrukcije.';

$lang['Registration'] = 'Par pravila o uslovima kori�tenja Foruma';
$lang['Reg_agreement'] = 'Po�tovani gosti,<br><br>Prije svega �elimo Vam dobrodo�licu na ovaj Forum gdje �ete mo�i, zajedno s ostalim u�esnicima, razmijeniti ideje, stavove, mi�ljenja i sve ono �to mislite da bi trebalo da se zna.<br>
Teme za diskusiju kojima �ete prisustvovati kao i sve one koje �e biti otvorene zavise samo od posjetilaca ovog foruma. Sloboda va�eg mi�ljenja bit �e po�tovana, ali Vas molimo da to ne zloupotrebljavate. Ukoliko ne �elite, ne morate odgovarati na ni�ija pitanja i komentare.<br>

Va�a anonimnost, bez obzira koliko to ona virtualna bila, bi�e garantovana jer to nam nala�u kako zakoni o privatnosti tako i �injenica da svako ima svoje razloge za�to ne�e da se predstavi punim imenom i prezimenom. Dovoljni su samo jedan va�e�i <b>e-mail pretinac</b> i <b>nadimak</b> koji �ete koristiti u korispondenciji sa ostalim �lanovima Foruma. <font color="#cc0066"><br><u><b>Nikakvi podaci li�ne prirode (kao npr. ime i prezime, adresa, brojevi telefona, brojevi kreditnih kartica i sli�no) nisu obavezni za registraciju.</b></u></font><br>U slu�aju da takvi podaci budu eventualno zahtijevani od strane osoba  koje u�estvuju u upravljanju Foruma (<i>Moderatori</i>), znajte da za tako ne�to nisu ovla�teni te Vas molimo da nas o tome odmah obavijestite. <br><b>Preporu�ujemo Vam izbjegavanje virtualnih okupljanja na kojima se tra�e informacije li�ne prirode i pozivamo roditelje da obavezno povedu ra�una o na�inu na koji njihova maloljetna djeca koriste razne Forume i Internet surfanje uop�te.</b>

<br><br>Skre�emo Vam pa�nju da je za funkcionisanje ovog Foruma neophodno da program koji kontroli�e Forum instalira jedan mali tekstualni file u Va� kompjuter tzv.<font color="#cc0066"> "cookie".</font> Ova operacija je automatska tako da je ne�ete ni primjetiti. Prvenstveno, cookie ovog foruma slu�i za njegovu statistiku, za kontrolu glasanja u eventualnim anketama kao i da "prepozna" njegove u�esnike i njihovu prisutnost na ovom forumu. To ne zna�i da mo�e  identificirati osobe koje se koriste forumom ve� da na osnovu par parametara mo�e pru�iti informacije za vodjenje statistike.  Pozivamo Vas, ipak, da se informi�ete o funkcionisanju cooki-a kao i sigurnosti Va�eg komjutera (obi�no se takve teme nadju na stranicama �asopisa o kompjuteru, stranica posve�enih web-masterima i sl.).<br>
Nakon �to izadjete iz foruma cookie mo�ete izbrisati iz Va�eg kompjutera i to ne�e kreirati nikakve probleme.Obi�no je lociran u direktoriju <b>Cookies</b> ili <b>Temporary Internet Files</b> Va�eg operativnog sistema (ovo zavisi od operativnog sistema Va�eg kompjutera).<br><br></b> 
 
�elimo napomenuti da je Forum dostupan svima i da cenzure nema.
Ono �to administrator Foruma ne�e dopustiti je vulgarno i nasilno pona�anje te vrije�anje njegovih posjetilaca bez obzira na to kakve ideje, stavove i mi�ljenja zastupaju. Rasisti�ke poruke bilo kog tipa ne�e biti tolerisane.<br>

<strong><u><cite><font color="#cc0066">Administrator foruma, ne prihvata odgovornost za sadr�aj komentara �iji nije autor.</font></strong></u></cite <br><br>
 
Dobro nam do�li i ljuti ne oti�li!';

$lang['Agree_under_13'] = 'Prihvatam pravila o kori�tenju pravila i imam <b>manje</b> od 13 godina';
$lang['Agree_over_13'] = 'Prihvatam pravila o kori�tenju pravila i imam <b>vi�e</b> od 13 godina';
$lang['Agree_not'] = 'Ne prihvatam pravila';

$lang['Wrong_activation'] = 'Aktivacijski pasword ne odgovara onom koji je pohranjen u databazi';
$lang['Send_password'] = 'Po�alji mi novi password'; 
$lang['Password_updated'] = 'Novi password je kreiran i poslan e-mailom.';
$lang['No_email_match'] = 'E-mail koji ste dali ne odgovara navedenom korisniku';
$lang['New_password_activation'] = 'Aktivacija novog password';
$lang['Password_activated'] = 'Va� account je reaktiviran. Za ulazak na forum koristiti password koji Vam je poslan e-mailom';

$lang['Send_email_msg'] = 'Po�alji e-mail poruku';
$lang['No_user_specified'] = 'Kome?';
$lang['User_prevent_email'] = 'Korisnik ne �eli primiti e-mail poruku. Poku�aj poslati privatnu poruku';
$lang['User_not_exist'] = 'Taj korisnik nije registrovan';
$lang['CC_email'] = 'Po�alji jednu kopiju ovog e-maila na vlastitu e-mail adresu';
$lang['Email_message_desc'] = 'Ne koristiti BB-kod ili HTML-kod u ovoj poruci.Kao adresa po�iljaoca bit �e naveden Va� e-mail.';
$lang['Flood_email_limit'] = 'Sa�ekaj momenat prije nego �to po�alje� jo� jedan e-mail.Flood za�tita aktivirana';
$lang['Recipient'] = 'Primalac';
$lang['Email_sent'] = 'E-mail je poslan';
$lang['Send_email'] = 'Po�alji e-mail';
$lang['Empty_subject_email'] = 'Nedostaje subjekt za e-mail';
$lang['Empty_message_email'] = 'E-mail nema sadr�aja';


//
// Lista clanova
//
$lang['Select_sort_method'] = 'Poredaj po';
$lang['Sort'] = 'Poredaj';
$lang['Sort_Top_Ten'] = 'TOP 10';
$lang['Sort_Joined'] = 'Datumu registracije';
$lang['Sort_Username'] = 'Nadimku';
$lang['Sort_Location'] = 'Mjestu';
$lang['Sort_Posts'] = 'Broju komentara';
$lang['Sort_Email'] = 'E-mail';
$lang['Sort_Website'] = 'WWW';
$lang['Sort_Ascending'] = 'A-�';
$lang['Sort_Descending'] = '�-A';
$lang['Order'] = 'Poredaj od';


//
// Kontrolni panel grupe korisnika
//
$lang['Group_Control_Panel'] = 'Kontrolni panel grupe';
$lang['Group_member_details'] = 'Detalji o �lanstvu grupe';
$lang['Group_member_join'] = 'Pridru�i se jednoj grupi';

$lang['Group_Information'] = 'Opis grupe korisnika';
$lang['Group_name'] = 'Ime grupe';
$lang['Group_description'] = 'Opis grupe';
$lang['Group_membership'] = 'Status';
$lang['Group_Members'] = '�lanovi grupe';
$lang['Group_Moderator'] = 'Moderator grupe';
$lang['Pending_members'] = 'Lista �ekanja za ulazak u grupu';

$lang['Group_type'] = 'Tip grupe';
$lang['Group_open'] = 'Otvorena grupa';
$lang['Group_closed'] = 'Zatvorena grupa';
$lang['Group_hidden'] = 'Skrivena grupa';

$lang['Current_memberships'] = 'Grupe �iji sam �lan';
$lang['Non_member_groups'] = 'Grupe �iji nisam �lan';
$lang['Memberships_pending'] = '"�ekaonica"';

$lang['No_groups_exist'] = 'Nisu kreirane grupe korisnika';
$lang['Group_not_exist'] = 'Ta grupa ne postoji';

$lang['Join_group'] = 'Pridru�i se ovoj grupi';
$lang['No_group_members'] = 'Ova grupa nema �lanova';
$lang['Group_hidden_members'] = 'Ne mo�ete vidjeti informacije o �lanstvu';
$lang['No_pending_group_members'] = 'Ova grupa nema �lanova koji �ekaju za prijem';
$lang['Group_joined'] = 'Uspje�no ste se prijavili za �lanstvo u ovoj grupi.<br />Moderator grupe �e Vas obavijestiti e-mailom kada zahtijev bude prihva�en.';
$lang['Group_request'] = 'Stigao je novi zahtijev za �lanstvo u grupi';
$lang['Group_approved'] = 'Va�a molba za prijem u grupu je prihva�ena';
$lang['Group_added'] = 'U�li ste u ovu grupu'; 
$lang['Already_member_group'] = 'Ve� ste �lan ove grupe';
$lang['User_is_member_group'] = 'Korisnik je ve� �lan grupe';
$lang['Group_type_updated'] = 'Tip grupe je uspje�no a�uriran';

$lang['Could_not_add_user'] = 'Izabrani korisnik ne postoji';
$lang['Could_not_anon_user'] = 'Anonimni �lanovi ne mogu biti primljeni u �lnstvo. Neophodna registracija ';

$lang['Confirm_unsub'] = 'Sigurno �eli� napustiti ovu grupu?';
$lang['Confirm_unsub_pending'] = 'Vi ili neko u Va�e ime je podnio zahtijev za �lanstvo u ovoj grupi a o kojem se odlu�uje.Sigurno ne �eli� biti �lan?';

$lang['Unsub_success'] = 'Niste vi�e �lan ove grupe.';

$lang['Approve_selected'] = 'Odobri ulazak';
$lang['Deny_selected'] = 'Negiraj ulazak';
$lang['Not_logged_in'] = 'Niste se prijavili (login)';
$lang['Remove_selected'] = 'Bri�i izabrano';
$lang['Add_member'] = 'Dodaj �lana';
$lang['Not_group_moderator'] = 'Po�to niste moderator ove grupe ne mo�ete izvesti navedenu akciju';

$lang['Login_to_join'] = 'Login za ulazak ili administraciju grupe';
$lang['This_open_group'] = 'Grupa otvorenog tipa, klikni za prijem u �lanstvo';
$lang['This_closed_group'] = 'Grupa zatvorenog tipa, ne primaju se novi �lanovi';
$lang['This_hidden_group'] = 'Skrivena grupa, automatsko u�lanjenje nije mogu�e';
$lang['Member_this_group'] = '�lan si ove grupe';
$lang['Pending_this_group'] = 'O tvom �lanstvu u ovoj grupi se odlu�uje';
$lang['Are_group_moderator'] = 'Vi ste moderator ove grupe';
$lang['None'] = 'niko';

$lang['Subscribe'] = 'Subscribe';
$lang['Unsubscribe'] = 'Ne�u vi�e da budem �lan ove grupe';
$lang['View_Information'] = 'Vi�e informacija';


//
// pretraga foruma
//
$lang['Search_query'] = 'Pretra�iva�';
$lang['Search_options'] = 'Opcije pretra�ivanja';

$lang['Search_keywords'] = 'Pretraga klju�nih rije�i';

$lang['Search_keywords_explain'] = 'U pretrazi mo�ete koristiti operatore <b> AND, OR, NOT,</b> na sljede�e na�ine:<br><br>Primjer 1: <br><i>grad</i> <b><u>AND</u></b> <i>Maglaj</i> - pronadji komentare koji sadr�e obe rije�i tj. i <b><i>grad</i></b> i <b><i>Maglaj</i></b></b><br><br>  Primjer 2: <i>grad</i> <b><u>OR</u></b> <i>Maglaj</i> �e vam prona�i komentare koji sadr�e ili jednu ili drugu rije� tj.<b><i>ili jedno-ili drugo</i></b><br><br>Primjer 3: <b><u>NOT</u></b> <i>Maglaj</i> �e iz prerage isklju�iti sve one komentare koji sadr�e rije� <b><b>Maglaj</b></b>.<br><br> Karakter * se mo�e koristiti kao jolly za parciajlne pretrage.<br>Primjer: <b><i>Magl*</i></b> �e prona�i sve one komentare koje sadr�e rije�i sa prefiksom <i><b>Magl</b></i> kao npr.: <i><b>Magl</b>aj,<b>Magl</b>aja,<b>Magl</b>aju,<b>magl</b>ajski,</i> itd...';
$lang['Search_author'] = 'Prona�i autora';
$lang['Search_author_explain'] = 'Karakter * se mo�e koristiti kao jolly.';

$lang['Search_for_any'] = 'Prona�i navedene rije�i';
$lang['Search_for_all'] = 'Prona�i sve navedene rije�i';
$lang['Search_title_msg'] = 'Pretra�i naslove komentara i komentare';
$lang['Search_msg_only'] = 'Pretra�i samo tekst komentara';

$lang['Return_first'] = 'Prika�i'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karaktera komentara';

$lang['Search_previous'] = 'Pretra�i forum od prije'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Poredaj';
$lang['Sort_Time'] = 'Datumu pisanja';
$lang['Sort_Post_Subject'] = 'Subjektu komentara';
$lang['Sort_Topic_Title'] = 'Naslovu diskusije';
$lang['Sort_Author'] = 'Autoru';
$lang['Sort_Forum'] = 'Diskusiji';

$lang['Display_results'] = 'Prika�i rezultate kao';
$lang['All_available'] = 'Sve';
$lang['No_searchable_forums'] = 'Niste ovla�teni da vr�ite bilo kakva pretra�ivanja na ovom forumu';

$lang['No_search_match'] = 'Ne postoji tema, komentar ili korisnik sa zadanim kriterijima pretrage';
$lang['Found_search_match'] = 'Prona�en  %d komentar'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Prona�eni komentari: %d '; // eg. Search found 24 matches

$lang['Close_window'] = 'Zatvori';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '�ao mi je ali samo %s mo�e postavljati obavje�tenja na ovom forumu';
$lang['Sorry_auth_sticky'] = '�ao mi je ali samo %s mo�e postavljati va�na obavje�tenja na ovom forumu'; 
$lang['Sorry_auth_read'] = '�ao mi je ali samo %s mogu �itati komentare na ovom forumu'; 
$lang['Sorry_auth_post'] = '�ao mi je ali samo %s mo�e otvoriti temu na ovom forumu'; 
$lang['Sorry_auth_reply'] = '�ao mi je ali samo %s mo�e odgovoriti na komentare na ovom forumu'; 
$lang['Sorry_auth_edit'] = '�ao mi je ali samo %s mo�e modifikovati komentare na ovom fourumu'; 
$lang['Sorry_auth_delete'] = '�ao mi je ali samo %s mo�e brisati komentare na ovom forumu'; 
$lang['Sorry_auth_vote'] = '�ao mi je ali samo %s mo�e glasati na ovom forumu'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonimni korisnici</b>';
$lang['Auth_Registered_Users'] = '<b>registrovani �lanovi</b>';
$lang['Auth_Users_granted_access'] = '<b>privilegovani korisnici</b>';
$lang['Auth_Moderators'] = '<b>moderatori</b>';
$lang['Auth_Administrators'] = '<b>administratori</b>';

$lang['Not_Moderator'] = 'Vi niste moderator';
$lang['Not_Authorised'] = 'Nije Vam dozvoljen pristup ovom dijelu foruma';

$lang['You_been_banned'] = '�ao nam je, ali Vam je sprije�en ulazak na forum<br />Za obja�njenja molimo Vas da kontaktirate administratora foruma.';


//
// ko je on-line
//
$lang['Reg_users_zero_online'] = 'Trenutno je 0 �lanova i '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Trenutno je %d �lanova i '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Trenutno je %d �lanova i '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 skrivenih korisnika on-line'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d skrivenih korisnika on-line'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d skriven korisnik on-line'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Trenutno je %d  gostiju on-line'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Trenutno je 0 gostiju on-line'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Trenutno je %d gost on-line'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Trenutno nema drugih korisnika na forumu';

$lang['Online_explain'] = 'Statisti�ki podaci o posje�enosti foruma a�uriraju se svakih 5 minuta ';

$lang['Forum_Location'] = 'Forum-lokacija';
$lang['Last_updated'] = 'Prethodno a�uriranje';

$lang['Forum_index'] = 'Forum Indeks';
$lang['Logging_on'] = 'Logging on';
$lang['Posting_message'] = 'Pisanje komentara';
$lang['Searching_forums'] = 'Pretraga diskusija';
$lang['Viewing_profile'] = 'Konsultovanje profila';
$lang['Viewing_online'] = 'Pogledaj ko je prisutan';
$lang['Viewing_member_list'] = 'Konsultovanje liste �lanova ';
$lang['Viewing_priv_msgs'] = 'Konsultovanje privatnih poruka';
$lang['Viewing_FAQ'] = 'FAQ - vrlo �esta pitanja';


//
// Kontrolni panel moderatora
//
$lang['Mod_CP'] = 'Moderator kontrolni panel';
$lang['Mod_CP_explain'] = 'Kori�tenjem donjeg formulara mo�e� obaviti masovne moderatorske operacije na forumu.Mo�e� zatvoriti, otvoriti, pomjeriti, obrisati bilo koji broj komentara.';

$lang['Select'] = 'Izaberi';
$lang['Delete'] = 'Obri�i';
$lang['Move'] = 'Pomjeri';
$lang['Lock'] = 'Zatvori';
$lang['Unlock'] = 'Otvori';

$lang['Topics_Removed'] = 'Izabrana tema je uspje�no izbrisana iz baze podataka.';
$lang['Topics_Locked'] = 'Izabrana tema je zatvorena';
$lang['Topics_Moved'] = 'Izabrana tema je pomjerena na drugo mjesto';
$lang['Topics_Unlocked'] = 'Izabrana tema je otvorena';
$lang['No_Topics_Moved'] = 'Tema nije pomjerena';

$lang['Confirm_delete_topic'] = 'Zaista �eli� obrisati ovu temu?';
$lang['Confirm_lock_topic'] = 'Zaista �eli� zatvoriti temu?';
$lang['Confirm_unlock_topic'] = 'Zaista �eli� otvoriti temu?';
$lang['Confirm_move_topic'] = 'Zaista �eli� pomjeriti temu?';

$lang['Move_to_forum'] = 'Idi na forum';
$lang['Leave_shadow_topic'] = 'Ostavi obavijest da je tema pomjerena';

$lang['Split_Topic'] = 'Podjela teme';
$lang['Split_Topic_explain'] = 'Kori�tenjem ovog kontrolnog panela mogu�e je podijeliti temu na dvije druge, biranjem odre�enih komentara ili dijeljenjem na posebnom komentaru.';
$lang['Split_title'] = 'Novi naslov teme';
$lang['Split_forum'] = 'Forum za novu temu';
$lang['Split_posts'] = 'Odvoji izabrane komentare';
$lang['Split_after'] = 'Odvoji od izabranih komentara';
$lang['Topic_split'] = 'Izabrana tema je uspje�no odvojena';

$lang['Too_many_error'] = 'Izabrano je previ�e komentara. Mo�e se izabrati samo jedan za odvajanje!';

$lang['None_selected'] = 'Nije izabran nijedan komentar. Potrebno je izabrati makar jedan .';
$lang['New_forum'] = 'Novi forum';

$lang['This_posts_IP'] = 'IP ovog komentara';
$lang['Other_IP_this_user'] = 'Koje sve IP koristi ovaj korisnik';
$lang['Users_this_IP'] = 'U�esnici koji koriste ovaj IP';
$lang['IP_info'] = 'IP Informacije';
$lang['Lookup_IP'] = 'Tra�i IP';


//
// Vremenske zone.....za svaku stranicu foruma
//
$lang['All_times'] = "Vremenska zona: %s"; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = "GMT - 12 sati";
$lang['-11'] = "GMT - 11 sati";
$lang['-10'] = "HST (Hawaii)";
$lang['-9'] = "GMT - 9 sati";
$lang['-8'] = "PST (U.S./Canada)";
$lang['-7'] = "MST (U.S./Canada)";
$lang['-6'] = "CST (U.S./Canada)";
$lang['-5'] = "EST (U.S./Canada)";
$lang['-4'] = "GMT - 4 sata";
$lang['-3.5'] = "GMT - 3.5 sata";
$lang['-3'] = "GMT - 3 sata";
$lang['-2'] = "Mid-Atlantic";
$lang['-1'] = "GMT - 1 sat";
$lang['0'] = "GMT";
$lang['1'] = "CET (Evropa)";
$lang['2'] = "EET (Evropa)";
$lang['3'] = "GMT + 3 sata";
$lang['3.5'] = "GMT + 3.5 sata";
$lang['4'] = "GMT + 4 sata";
$lang['4.5'] = "GMT + 4.5 sata";
$lang['5'] = "GMT + 5 sati";
$lang['5.5'] = "GMT + 5.5 sati";
$lang['6'] = "GMT + 6 sati";
$lang['6.5'] = 'GMT + 6.5 sati';
$lang['7'] = "GMT + 7 sati";
$lang['8'] = "WST (Australia)";
$lang['9'] = "GMT + 9 sati";
$lang['9.5'] = "CST (Australia)";
$lang['10'] = "EST (Australia)";
$lang['11'] = "GMT + 11 sati";
$lang['12'] = "GMT + 12 sati";

// Vremenske zone prikazane u box-u (kao opcije)
$lang['tz']['-12'] = "(GMT - 12:00 sati) Eniwetok, Kwajalein";
$lang['tz']['-11'] = "(GMT - 11:00 sati) Midway Island, Samoa";
$lang['tz']['-10'] = "(GMT - 10:00 sati) Hawaii";
$lang['tz']['-9'] = "(GMT - 9:00 sati) Alaska";
$lang['tz']['-8'] = "(GMT - 8:00 sati) Pacific Time (US &amp; Canada), Tijuana";
$lang['tz']['-7'] = "(GMT - 7:00 sati) Mountain Time (US &amp; Canada), Arizona";
$lang['tz']['-6'] = "(GMT - 6:00 sati) Central Time (US &amp; Canada), Mexico City";
$lang['tz']['-5'] = "(GMT - 5:00 sati) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$lang['tz']['-4'] = "(GMT - 4:00 sata) Atlantic Time (Canada), Caracas, La Paz";
$lang['tz']['-3.5'] = "(GMT - 3.5 sata) Newfoundland";
$lang['tz']['-3'] = "(GMT - 3:00 sata) Brassila, Buenos Aires, Georgetown, Falkland Is";
$lang['tz']['-2'] = "(GMT - 2:00 sata) Mid-Atlantic, Ascension Is., St. Helena";
$lang['tz']['-1'] = "(GMT - 1:00 sat) Azores, Cape Verde Islands";
$lang['tz']['0'] = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$lang['tz']['1'] = "(GMT + 1:00 sat) Maglaj, Doboj, Sarajevo, Zagreb, Beograd, Paris, Rome";
$lang['tz']['2'] = "(GMT + 2:00 sata) Cairo, Helsinki, Kaliningrad, South Africa";
$lang['tz']['3'] = "(GMT + 3:00 sata) Baghdad, Riyadh, Moscow, Nairobi";
$lang['tz']['3.5'] = "(GMT + 3.5 sata) Tehran";
$lang['tz']['4'] = "(GMT + 4:00 sata) Abu Dhabi, Baku, Muscat, Tbilisi";
$lang['tz']['4.5'] = "(GMT + 4.5 sata) Kabul";
$lang['tz']['5'] = "(GMT + 5:00 sati) Ekaterinburg, Islamabad, Karachi, Tashkent";
$lang['tz']['5.5'] = "(GMT + 5.5 sati) Bombay, Calcutta, Madras, New Delhi";
$lang['tz']['6'] = "(GMT + 6:00 sati) Almaty, Colombo, Dhaka, Novosibirsk";
$lang['tz']['6.5'] = "(GMT + 6.5 sati) Rangoon";
$lang['tz']['7'] = "(GMT + 7:00 sati) Bangkok, Hanoi, Jakarta";
$lang['tz']['8'] = "(GMT + 8:00 sati) Beijing, Hong Kong, Perth, Singapore, Taipei";
$lang['tz']['9'] = "(GMT + 9:00 sati) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$lang['tz']['9.5'] = "(GMT + 9.5 sati) Adelaide, Darwin";
$lang['tz']['10'] = "(GMT + 10:00 sati) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$lang['tz']['11'] = "(GMT + 11:00 sati) Magadan, New Caledonia, Solomon Islands";
$lang['tz']['12'] = "(GMT + 12:00 sati) Auckland, Wellington, Fiji, Marshall Island";


$lang['datetime']['Sunday'] = 'Nedelja';
$lang['datetime']['Monday'] = 'Ponedeljak';
$lang['datetime']['Tuesday'] = 'Utorak';
$lang['datetime']['Wednesday'] = 'Srijeda';
$lang['datetime']['Thursday'] = '�etvrtak';
$lang['datetime']['Friday'] = 'Petak';
$lang['datetime']['Saturday'] = 'Subota';
$lang['datetime']['Sun'] = 'Nedelja';
$lang['datetime']['Mon'] = 'Ponedeljak';
$lang['datetime']['Tue'] = 'Utorak';
$lang['datetime']['Wed'] = 'Srijeda';
$lang['datetime']['Thu'] = '�etvrtak';
$lang['datetime']['Fri'] = 'Petak';
$lang['datetime']['Sat'] = 'Subota';
$lang['datetime']['January'] = 'Januar/Sije�anj';
$lang['datetime']['February'] = 'Februar/Velja�e';
$lang['datetime']['March'] = 'Mart/O�ujak';
$lang['datetime']['April'] = 'April/Travanj';
$lang['datetime']['May'] = 'Maj/Svibanj';
$lang['datetime']['June'] = 'Juni/Lipanj';
$lang['datetime']['July'] = 'Jul/Srpanj';
$lang['datetime']['August'] = 'August/Kolovoz';
$lang['datetime']['September'] = 'Septembar/Rujan';
$lang['datetime']['October'] = 'Oktobar/Listopad';
$lang['datetime']['November'] = 'Novembar/Studeni';
$lang['datetime']['December'] = 'Decembar/Prosinac';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Juli'] = 'Jul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Oct';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';

//
// Greske (uopsteno)
//
$lang['Information'] = 'Informacije';
$lang['Critical_Information'] = 'Alarm';

$lang['General_Error'] = 'Gre�ka-generalno';
$lang['Critical_Error'] = 'Kriti�na gre�ka';
$lang['An_error_occured'] = 'Gre�ka';
$lang['A_critical_error'] = 'Kriti�na gre�ka';

//
// Smartor's ezPortal
//
$lang['Home'] = 'Home';
$lang['Board_navigation'] = 'Forum navigacija';
$lang['Statistics'] = 'Statistika';
$lang['Welcome'] = 'Dobro do�li';
$lang['Comments'] = 'Komentari';
$lang['View_comments'] = 'Pogledaj komentare';
$lang['Remember_me'] = 'Podsjeti me';
$lang['View_completed_list'] = 'Vidi kompletnu listu';
$lang['Poll'] = 'Anketa';
$lang['Login_to_vote'] = 'Morate se logirati za glasanje';
$lang['Vote'] = 'Glasaj';
$lang['No_poll'] = 'Trenutno nema ankete';


//
// To bi bilo to!
// Prevod mo�da i nije ba� najprecizniji ali ne mo�e se svakoj babi ba� sve ugoditi.
// Kritike, prijedlozi i sve ostalo �to je vezano za ovaj prevod mo�ete poslati na:
// mrmot@vizzavi.it
// -------------------------------------------------

?>