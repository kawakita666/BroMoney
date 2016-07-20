<?php
/***************************************************************************
 *                            lang_main.php [Serbian]
 *                              -------------------
 *     begin                : Monday Sep 30 2002
 *     copyright            : (C) 2002 Simic Vladan
 *     email                : vlada@cybercom.co.yu
 *
 *     $Id: lang_main.php,v 1.1.2.1 2002/11/13 23:04:54 psotfx Exp $
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

$lang['ENCODING'] = 'windows-1250';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] = 'd M Y'; // This should be changed to the default date format for your language, php date() format

$lang['TRANSLATION'] = 'Prevod by Simke';

$lang['Forum'] = 'Forum';
$lang['Category'] = 'Kategorija';
$lang['Topic'] = 'Tema';
$lang['Topics'] = 'Teme';
$lang['Replies'] = 'Odgovori';
$lang['Views'] = 'Pogledano';
$lang['Post'] = 'Poruka';
$lang['Posts'] = 'Poruke';
$lang['Posted'] = 'Poslao';
$lang['Username'] = 'Korisni�ko ime';
$lang['Password'] = '�ifra';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Poslao';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Vreme';
$lang['Hours'] = 'Sati';
$lang['Message'] = 'Poruka';

$lang['1_Day'] = '1 Dan';
$lang['7_Days'] = '7 Dana';
$lang['2_Weeks'] = '2 Nedelje';
$lang['1_Month'] = '1 Mesec';
$lang['3_Months'] = '3 Meseca';
$lang['6_Months'] = '6 Meseci';
$lang['1_Year'] = '1 Godina';

$lang['Go'] = 'Idi';
$lang['Jump_to'] = 'Sko�i na';
$lang['Submit'] = 'Po�alji';
$lang['Reset'] = 'Resetuj';
$lang['Cancel'] = 'Poni�ti';
$lang['Preview'] = 'Pregled poruke';
$lang['Confirm'] = 'Potvrdi';
$lang['Spellcheck'] = 'Gramati�ka provera';
$lang['Yes'] = 'Da';
$lang['No'] = 'Ne';
$lang['Enabled'] = 'Dozvoljeno';
$lang['Disabled'] = 'Zabranjeno';
$lang['Error'] = 'Gre�ka';

$lang['Next'] = 'Sledeci';
$lang['Previous'] = 'Prethodni';
$lang['Goto_page'] = 'Idi na stranu';
$lang['Joined'] = 'Pridru�io';
$lang['IP_Address'] = 'IP adresa';

$lang['Select_forum'] = 'Izaberi forum';
$lang['View_latest_post'] = 'Pogledaj zadnje poruke';
$lang['View_newest_post'] = 'Pogledaj najnovije poruke';
$lang['Page_of'] = 'Strana <b>%d</b> od <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ broj';
$lang['AIM'] = 'AIM Adresa';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s forum';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Napi�i novu temu';
$lang['Reply_to_topic'] = 'Odgovori na poruku';
$lang['Reply_with_quote'] = 'Odgovoriti sa citatom';

$lang['Click_return_topic'] = 'Klikni %sOvde%s za povratak na temu'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Klikni %sOvde%s da proba� ponovo';
$lang['Click_return_forum'] = 'Klikni %sOvde%s za povratak na forum';
$lang['Click_view_message'] = 'Klikni %sOvde%s da pogleda� tvoju poruku';
$lang['Click_return_modcp'] = 'Klikni %sOvde%s za povratak na urednikov kontrolni panel';
$lang['Click_return_group'] = 'Klikni %sOvde%s za povratak na informacije o grupi';

$lang['Admin_panel'] = 'Idi na administracioni panel';

$lang['Board_disable'] = 'Izvini ali ovaj board je trenutno nedostupan, poku�aj ponovo kasnije';


//
// Global Header strings
//
$lang['Registered_users'] = 'Registrovanih korisnika:';
$lang['Browsing_forum'] = 'Korisnici trenutno na forumu:';
$lang['Online_users_zero_total'] = 'Ukupno je <b>0</b> korisnika na forumu ::';
$lang['Online_users_total'] = 'Ukupno su <b>%d</b> korisnika na forumu ::';
$lang['Online_user_total'] = 'Ukupno je <b>%d</b> korisnik na forumu ::';
$lang['Reg_users_zero_total'] = '0 Registrovanih,';
$lang['Reg_users_total'] = '%d Registrovanih,';
$lang['Reg_user_total'] = '%d Registrovan,';
$lang['Hidden_users_zero_total'] = '0 Skrivenih i';
$lang['Hidden_user_total'] = '%d Skrivenih i';
$lang['Hidden_users_total'] = '%d Skriven i';
$lang['Guest_users_zero_total'] = '0 Gostiju';
$lang['Guest_users_total'] = '%d Gosta';
$lang['Guest_user_total'] = '%d Gost';
$lang['Record_online_users'] = 'Najvi�e korisnika na forumu ikad bilo je <b>%s</b> dana %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrator%s';
$lang['Mod_online_color'] = '%sUrednik%s';

$lang['You_last_visit'] = 'Zadnji put si posetio forum %s'; // %s replaced by date/time
$lang['Current_time'] = 'Sada je %s'; // %s replaced by time

$lang['Search_new'] = 'Pogledaj poruke od tvoje poslednje posete';
$lang['Search_your_posts'] = 'Pogledaj tvoje poruke';
$lang['Search_unanswered'] = 'Pogledaj neodgovorene poruke';

$lang['Register'] = 'Registruj se';
$lang['Profile'] = 'Profil';
$lang['Edit_profile'] = 'Izmeni svoj profil';
$lang['Search'] = 'Tra�i';
$lang['Memberlist'] = 'Lista �lanova';
$lang['FAQ'] = 'FAQ - �esto Postavljana Pitanja';
$lang['BBCode_guide'] = 'BBKod vodi�';
$lang['Usergroups'] = 'Korisni�ke grupe';
$lang['Last_Post'] = 'Poslednja poruka';
$lang['Moderator'] = 'Urednik';
$lang['Moderators'] = 'Urednici';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Na�i korisnici su poslali ukupno <b>0</b> �lanaka'; // Number of posts
$lang['Posted_articles_total'] = 'Na�i korisnici su poslali ukupno <b>%d</b> �lanaka'; // Number of posts
$lang['Posted_article_total'] = 'Na�i korisnici su poslali ukupno <b>%d</b> �lanak'; // Number of posts
$lang['Registered_users_zero_total'] = 'Imamo <b>0</b> registrovanih korisnika'; // # registered users
$lang['Registered_users_total'] = 'Imamo <b>%d</b> registrovanih korisnika'; // # registered users
$lang['Registered_user_total'] = 'Imamo <b>%d</b> registrovanog korisnika'; // # registered users
$lang['Newest_user'] = 'Najnoviji registrovani �lan je <b>%s%s%s</b>'; // a href, username, /a

$lang['No_new_posts_last_visit'] = 'Nema novih poruka od tvoje poslednje posete';
$lang['No_new_posts'] = 'Nema novih poruka';
$lang['New_posts'] = 'Nove poruke';
$lang['New_post'] = 'Nova poruka';
$lang['No_new_posts_hot'] = 'Nema novih poruka [ Popularne ]';
$lang['New_posts_hot'] = 'Nove poruke [ Popularne ]';
$lang['No_new_posts_locked'] = 'Nema novih poruka [ Zaklju�ane ]';
$lang['New_posts_locked'] = 'Nove poruke [ Zaklju�ane ]';
$lang['Forum_is_locked'] = 'Forum je zaklju�an';


//
// Login
//
$lang['Enter_password'] = 'Unesite va�e korisni�ko ime i �ifru za pristup';
$lang['Login'] = 'Pristupi';
$lang['Logout'] = 'Odjavi se';

$lang['Forgotten_password'] = 'Zaboravio sam �ifru';

$lang['Log_me_in'] = 'Pristupi automatski pri svakoj poseti';

$lang['Error_login'] = 'Uneli ste pogre�no ili neaktivno korisni�ko ime ili pogre�nu �ifru';


//
// Index page
//
$lang['Index'] = 'Indeks';
$lang['No_Posts'] = 'Nema poruka';
$lang['No_forums'] = 'Ovaj board nema nijedan forum';

$lang['Private_Message'] = 'Privatna Poruka';
$lang['Private_Messages'] = 'Privatne Poruke';
$lang['Who_is_Online'] = 'Ko je trenutno na forumu';

$lang['Mark_all_forums'] = 'Ozna�i sve forume kao pro�itane';
$lang['Forums_marked_read'] = 'Svi forumi su ozna�eni kao pro�itani';


//
// Viewforum
//
$lang['View_forum'] = 'Pogledaj Forum';

$lang['Forum_not_exist'] = 'Forum koji ste izabrali ne postoji';
$lang['Reached_on_error'] = 'Gre�ka kojom ste do�li do ove strane';

$lang['Display_topics'] = 'Prika�i teme iz prethodnih';
$lang['All_Topics'] = 'Sve teme';

$lang['Topic_Announcement'] = '<b>Obave�tenje:</b>';
$lang['Topic_Sticky'] = '<b>Lepljiva:</b>';
$lang['Topic_Moved'] = '<b>Pomerena:</b>';
$lang['Topic_Poll'] = '<b>[ Glasanje ]</b>';

$lang['Mark_all_topics'] = 'Ozna�i sve teme kao pro�itane';
$lang['Topics_marked_read'] = 'Tema ovog foruma je ozna�ena kao pro�itana';

$lang['Rules_post_can'] = '<b>Mo�ete</b> pisati nove teme u ovom forumu';
$lang['Rules_post_cannot'] = '<b>Ne mo�ete</b> pisati nove teme u ovom forumu';
$lang['Rules_reply_can'] = '<b>Mo�te</b> odgovarati na teme u ovom forumu';
$lang['Rules_reply_cannot'] = '<b>Ne mo�ete</b> odgovarati na teme u ovom forumu';
$lang['Rules_edit_can'] = '<b>Mo�ete</b> menjati va�e poruke u ovom forumu';
$lang['Rules_edit_cannot'] = '<b>Ne mo�ete</b> menjati va�e poruke u ovom forumu';
$lang['Rules_delete_can'] = '<b>Mo�ete</b> brisati va�e poruke u ovom forumu';
$lang['Rules_delete_cannot'] = '<b>Ne mo�ete</b> brisati va�e poruke u ovom forumu';
$lang['Rules_vote_can'] = '<b>Mo�ete</b> glasati u ovom forumu';
$lang['Rules_vote_cannot'] = '<b>Ne mo�ete</b> glasati u ovom forumu';
$lang['Rules_moderate'] = '<b>Mo�ete</b> %suredivati ovaj forum%s'; // %s replaced by a href links, do not remove!

$lang['No_topics_post_one'] = 'Nema poruka u ovom forumu<br />
Klikni na <b>Otvori novu temu</b> link na ovoj stranici da napi�e� poruku';


//
// Viewtopic
//
$lang['View_topic'] = 'Pogledaj teme';

$lang['Guest'] = 'Gost';
$lang['Post_subject'] = 'Naslov';
$lang['View_next_topic'] = 'Pogledaj slede�u temu';
$lang['View_previous_topic'] = 'Pogledaj prethodnu temu';
$lang['Submit_vote'] = 'Glasaj';
$lang['View_results'] = 'Pogledaj rezultate';

$lang['No_newer_topics'] = 'Nema novih tema u ovom forumu';
$lang['No_older_topics'] = 'Nema starijih tema u ovom forumu';
$lang['Topic_post_not_exist'] = 'Tema ili poruka koju ste tra�ili ne postoji';
$lang['No_posts_topic'] = 'Nema poruka u ovoj temi';

$lang['Display_posts'] = 'Prika�i poruke iz poslednjih';
$lang['All_Posts'] = 'Sve Poruke';
$lang['Newest_First'] = 'Prvo Najnovije';
$lang['Oldest_First'] = 'Prvo Najstarije';

$lang['Back_to_top'] = 'Nazad na vrh';

$lang['Read_profile'] = 'Pogledaj profil korisnika';
$lang['Send_email'] = 'Po�alji email';
$lang['Visit_website'] = 'Poseti sajt autora';
$lang['ICQ_status'] = 'ICQ status';
$lang['Edit_delete_post'] = 'Izmeni/Izbri�i poruku';
$lang['View_IP'] = 'Pogledaj IP autora';
$lang['Delete_post'] = 'Obri�i ovu poruku';

$lang['wrote'] = ':'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Citat'; // comes before bbcode quote output.
$lang['Code'] = 'Kod'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Poslednji izmenio %s dana %s, izmenjeno ukupno %d puta'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Poslednji put izmenio %s dana %s, izmenio ukupno %d puta'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Zaklju�aj ovu temu';
$lang['Unlock_topic'] = 'Otklju�aj ovu temu';
$lang['Move_topic'] = 'Pomeri ovu temu';
$lang['Delete_topic'] = 'Obri�i ovu temu';
$lang['Split_topic'] = 'Podeli ovu temu';

$lang['Stop_watching_topic'] = 'Isklju�i nadgledanje za ovu temu';
$lang['Start_watching_topic'] = 'Nadgledaj ovu temu za odgovore';
$lang['No_longer_watching'] = 'Vi�e ne nadgledate ovu temu';
$lang['You_are_watching'] = 'Od sada nadgledate ovu temu';

$lang['Total_votes'] = 'Ukupno Glasova';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Telo poruke';
$lang['Topic_review'] = 'Prikaz teme';

$lang['No_post_mode'] = 'Nije odre�en mod za pisanje poruke'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Otvori novu temu';
$lang['Post_a_reply'] = 'Odgovori';
$lang['Post_topic_as'] = 'Odgovori na temu kao';
$lang['Edit_Post'] = 'Izmeni poruku';
$lang['Options'] = 'Opcije';

$lang['Post_Announcement'] = 'Obave�tenje';
$lang['Post_Sticky'] = 'Lepljiva';
$lang['Post_Normal'] = 'Normalna';

$lang['Confirm_delete'] = 'Da li ste sigurni da �elite da izbri�ete ovu poruku?';
$lang['Confirm_delete_poll'] = 'Da li ste sigurni da �elite da izbri�ete ovo glasanje?';

$lang['Flood_Error'] = 'Ne mo�ete da napi�ete poruku odmah posle va�e poslednje, poku�ajte ponovo malo kasnije';
$lang['Empty_subject'] = 'Morate odrediti naslov kada postavljate novu temu';
$lang['Empty_message'] = 'Morate iskucati poruku';
$lang['Forum_locked'] = 'Ovaj forum je zaklju�an i ne mo�ete pisati, odgovoriti ili menjati teme';
$lang['Topic_locked'] = 'Ovaj forum je zaklju�an i ne mo�ete menjati teme ili odgovarati';
$lang['No_post_id'] = 'Niste izabrali poruku';
$lang['No_topic_id'] = 'Morate izabrati temu da bi odgovorili';
$lang['No_valid_mode'] = 'Mo�ete samo pisati, menjati ili citirati poruke, vratite se i poku�ajte ponovo';
$lang['No_such_post'] = 'Ne postoji takva poruka';
$lang['Edit_own_posts'] = 'Izmeni sopstvene poruke';
$lang['Delete_own_posts'] = 'Izbri�i sopstvene poruke';
$lang['Cannot_delete_replied'] = 'Ne mo�e� izbrisati poruku na koju je odgovoreno';
$lang['Cannot_delete_poll'] = 'Ne mo�e� izbrisati glasanje';
$lang['Empty_poll_title'] = 'Morate uneti naslov za glasanje';
$lang['To_few_poll_options'] = 'Morate upisati nekoliko opcija za glasanje';
$lang['To_many_poll_options'] = 'Previ�e opcija za glasanje';
$lang['Post_has_no_poll'] = 'Poruka nema glasanje';
$lang['Already_voted'] = 'Ve� glasano';
$lang['No_vote_option'] = 'Nema opcije za glasanje';

$lang['Add_poll'] = 'Dodaj glasanje';
$lang['Add_poll_explain'] = 'Dodaj obja�njenje glasanja';
$lang['Poll_question'] = 'Glasa�ko pitanje';
$lang['Poll_option'] = 'Glasa�ka opcija';
$lang['Add_option'] = 'Dodaj opciju';
$lang['Update'] = 'Osve�i';
$lang['Delete'] = 'Obri�i';
$lang['Poll_for'] = 'Glasaj za';
$lang['Days'] = 'dana'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = 'Glasaj za obja�njenje';
$lang['Delete_poll'] = 'Bri�i glas';

$lang['Disable_HTML_post'] = 'Isklju�i HTML u poruci';
$lang['Disable_BBCode_post'] = 'Isklju�i BBKod u poruci';
$lang['Disable_Smilies_post'] = 'Isklju�i smajlije u poruci';

$lang['HTML_is_ON'] = 'HTML je uklju�en';
$lang['HTML_is_OFF'] = 'HTML je isklju�en';
$lang['BBCode_is_ON'] = '%sBBCode%s je uklju�en'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s je isklju�en';
$lang['Smilies_are_ON'] = 'Smajliji su uklju�eni';
$lang['Smilies_are_OFF'] = 'Smajliji su isklju�eni';

$lang['Attach_signature'] = 'Prika�i potpis';
$lang['Notify'] = 'Obavesti me';
$lang['Delete_post'] = 'Obri�i ovu poruku';

$lang['Stored'] = 'Va�a poruka je upisana';
$lang['Deleted'] = 'Va�a poruka je izbrisana';
$lang['Poll_delete'] = 'Izbri�i glasanje';
$lang['Vote_cast'] = 'Glasali ste';

$lang['Topic_reply_notification'] = 'Obavesti me kad neko odgovori na temu';

$lang['bbcode_b_help'] = 'Podebljan tekst: [b]tekst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kurziv tekst: [i]tekst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Podvu�en tekst: [u]tekst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Citat: [quote]tekst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Prikaz koda: [code]code[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]tekst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Pore�ana lista: [list=]tekst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Ubacivanje slike: [img]http://url_slike[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Ubacivanje URLa: [url]http://url[/url] ili [url=http://url]URL tekst[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Zatvori sve otvorene BBKod tagove';
$lang['bbcode_s_help'] = 'Boja fonta: [color=red]tekst[/color]  Tip: mo�ete da koristite i color=#FF0000';
$lang['bbcode_f_help'] = 'Veli�ina fonta: [size=x-small]mali tekst[/size]';

$lang['Emoticons'] = 'Smajliji';
$lang['More_emoticons'] = 'Jo� smajlija';

$lang['Font_color'] = 'Boja fonta';
$lang['color_default'] = 'Standardna';
$lang['color_dark_red'] = 'Tamno crvena';
$lang['color_red'] = 'Crvena';
$lang['color_orange'] = 'Narand�asta';
$lang['color_brown'] = 'Braon';
$lang['color_yellow'] = '�uta';
$lang['color_green'] = 'Zelena';
$lang['color_olive'] = 'Oliv';
$lang['color_cyan'] = 'Cijan';
$lang['color_blue'] = 'Plava';
$lang['color_dark_blue'] = 'Tamno plava';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Ljubi�asta';
$lang['color_white'] = 'Bela';
$lang['color_black'] = 'Crna';

$lang['Font_size'] = 'Veli�ina fonta';
$lang['font_tiny'] = 'Si�u�ni';
$lang['font_small'] = 'Mali';
$lang['font_normal'] = 'Normalan';
$lang['font_large'] = 'Veliki';
$lang['font_huge'] = 'Ogromni';

$lang['Close_Tags'] = 'Zatvori tagove';
$lang['Styles_tip'] = 'Da li znate: Stilovi se mogu lako dodati na izabrani tekst';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privatne poruke';

$lang['Login_check_pm'] = 'Proveri privatne poruke';
$lang['New_pms'] = 'Broj novih poruka:<b>%d</b>'; // You have 2 new messages
$lang['New_pm'] = 'Ima� <b>%d</b> novu poruku'; // You have 1 new message
$lang['No_new_pm'] = 'Nemate novih poruka';
$lang['Unread_pms'] = 'Imate %d nepro�itane poruka';
$lang['Unread_pm'] = 'Imate %d nepro�itanu poruku';
$lang['No_unread_pm'] = 'Nemate nepro�itanih poruka';
$lang['You_new_pm'] = 'Nova privatna poruka vas �eka u sandu�etu';
$lang['You_new_pms'] = 'Nove privatne poruke vas �ekaju u sandu�etu';
$lang['You_no_new_pm'] = 'Nemate nove privatne poruke';

$lang['Unread_message'] = 'Nepro�itana poruka';
$lang['Read_message'] = 'Pro�itana poruka';

$lang['Read_pm'] = 'Pro�itaj privatnu poruku';
$lang['Post_new_pm'] = 'Po�alji novu privatnu poruku';
$lang['Post_reply_pm'] = 'Odgovori na privatnu poruku';
$lang['Post_quote_pm'] = 'Citiraj privatnu poruku';
$lang['Edit_pm'] = 'Izmeni privatnu poruku';

$lang['Inbox'] = 'Sandu�e';
$lang['Outbox'] = 'Za slanje';
$lang['Savebox'] = 'Snimljeno';
$lang['Sentbox'] = 'Poslato';
$lang['Flag'] = 'Zastavica';
$lang['Subject'] = 'Naslov';
$lang['From'] = 'Od';
$lang['To'] = 'Za';
$lang['Date'] = 'Datum';
$lang['Mark'] = 'Obele�i';
$lang['Sent'] = 'Poslato';
$lang['Saved'] = 'Snimljeno';
$lang['Delete_marked'] = 'Izbri�i obele�eno';
$lang['Delete_all'] = 'Izbri�i sve';
$lang['Save_marked'] = 'Snimi obele�ene';
$lang['Save_message'] = 'Snimi poruku';
$lang['Delete_message'] = 'Obri�i poruku';

$lang['Display_messages'] = 'Prika�i poruke u zadnjih'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Sve poruke';

$lang['No_messages_folder'] = 'Nema poruka u ovom direktorijumu';

$lang['PM_disabled'] = 'Privatne poruke isklju�ene';
$lang['Cannot_send_privmsg'] = 'Ne mo�e� da �alje� privatne poruke';
$lang['No_to_user'] = 'Morate upisati korisni�ko ime da biste poslali ovu poruku';
$lang['No_such_user'] = 'Korisnik ne postoji';

$lang['Disable_HTML_pm'] = 'Isklju�i HTML u privatnim porukama';
$lang['Disable_BBCode_pm'] = 'Isklju�i BBKod u privatnim porukama';
$lang['Disable_Smilies_pm'] = 'Isklju�i smajlije u privatnim porukama';

$lang['Message_sent'] = 'Poruka poslata';

$lang['Click_return_inbox'] = 'Klikni %sovde%s da se vrati� u sandu�e';
$lang['Click_return_index'] = 'Klikni %sovde%s da se vrati� na indeks';

$lang['Send_a_new_message'] = 'Po�alji novu privatnu poruku';
$lang['Send_a_reply'] = 'Odgovori na privatnu poruku';
$lang['Edit_message'] = 'Izmeni privatnu poruku';

$lang['Notification_subject'] = 'Nova privatna poruka je stigla';

$lang['Find_username'] = 'Na�i korisni�ko ime';
$lang['Find'] = 'Na�i';
$lang['No_match'] = 'Ni�ta nije na�eno';

$lang['No_post_id'] = 'Nije upisan ID poruke';
$lang['No_such_folder'] = 'Ne postoji takav direktorijum';
$lang['No_folder'] = 'Nije upisan direktorijum';

$lang['Mark_all'] = 'Obele�i sve';
$lang['Unmark_all'] = 'Poni�ti sve';

$lang['Confirm_delete_pm'] = 'Jeste li sigurni da �elite da obri�ete ovu poruku?';
$lang['Confirm_delete_pms'] = 'Jeste li sigurni da �elite da obri�ete ove poruke?';

$lang['Inbox_size'] = 'Va�e sandu�e je %d%% puno'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Va� direktorijum za slanje je %d%% pun';
$lang['Savebox_size'] = 'Va� direktorijum snimljenih poruka je %d%% pun';

$lang['Click_view_privmsg'] = 'Klikni %sovde%s da u�ete u va�e sandu�e';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Pregled profila :: %s'; // %s is username
$lang['About_user'] = 'Informacije o �lanu %s'; // %s is username

$lang['Preferences'] = 'Opcije';
$lang['Items_required'] = 'Stavke obele�ene za * (zvezdicom) su obavezne';
$lang['Registration_info'] = 'Informacije o registrovanju';
$lang['Profile_info'] = 'Informacije o profilu';
$lang['Profile_info_warn'] = 'Ova informacija �e biti javno dostupna svima';
$lang['Avatar_panel'] = 'Kontrolni panel avatara';
$lang['Avatar_gallery'] = 'Galerija avatara';

$lang['Website'] = 'Sajt';
$lang['Location'] = 'Lokacija';
$lang['Contact'] = 'Kontakt';
$lang['Email_address'] = 'Email adresa';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Po�alji privatnu poruku';
$lang['Hidden_email'] = '[ Sakriven ]';
$lang['Search_user_posts'] = 'Pretra�i poruke ovog �lana';
$lang['Interests'] = 'Interesi';
$lang['Occupation'] = 'Zanimanje';
$lang['Poster_rank'] = 'Rang autora';

$lang['Total_posts'] = 'Ukupno poruka';
$lang['User_post_pct_stats'] = '%.2f%% od ukupnog broja'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f poruka na dan'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Prona�i sve poruke autora %s'; // Find all posts by username

$lang['No_user_id_specified'] = '�ao nam je, ali �lan sa tim imenom ne postoji';
$lang['Wrong_Profile'] = 'Ne mo�ete da menjate profil koji nije va�.';

$lang['Only_one_avatar'] = 'Samo jedna vrsta avatara mo�e biti izabrana';
$lang['File_no_data'] = 'Fajl na adresi koju ste upisali ne sadr�i nikakve podatke';
$lang['No_connection_URL'] = 'Nije mogu�e ostvariti konekciju sa adresom koju ste upisali';
$lang['Incomplete_URL'] = 'Adresa koju ste upisali nije kompletna';
$lang['Wrong_remote_avatar_format'] = 'Adresa daljinskog avatara nije validna';
$lang['No_send_account_inactive'] = '�ao nam je, ali va�a �ifra nije dostupna jer va� nalog nije aktivan. Kontaktirajte administratora foruma za jo� informacija';

$lang['Always_smile'] = 'Uvek uklju�i smajlije';
$lang['Always_html'] = 'Uvek uklju�i HTML';
$lang['Always_bbcode'] = 'Uvek uklju�i BBKod';
$lang['Always_add_sig'] = 'Uvek dodaj moj potpis';
$lang['Always_notify'] = 'Uvek me obavesti na odgovore';
$lang['Always_notify_explain'] = 'Email �e vam biti poslat svaki put kada neko odgovori na temu u kojoj ste vi pisali. Ovo mo�e biti promenjeno uvek kada pi�ete.';

$lang['Board_style'] = 'Stil (izgled) foruma';
$lang['Board_lang'] = 'Jezik foruma';
$lang['No_themes'] = 'Ne postoji tema u bazi podataka';
$lang['Timezone'] = 'Vremenska zona';
$lang['Date_format'] = 'Format datuma';
$lang['Date_format_explain'] = 'Kori��ena sintaksa identi�na je PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funkciji';
$lang['Signature'] = 'Potpis';
$lang['Signature_explain'] = 'Ovo je kratak tekst koji mo�ete da dodate va�im porukama. Ograni�enje du�ine je na %d karaktera';
$lang['Public_view_email'] = 'Uvek prika�i moj email';

$lang['Current_password'] = 'Trenutna �ifra';
$lang['New_password'] = 'Nova �ifra';
$lang['Confirm_password'] = 'Potvrdi �ifru';
$lang['Confirm_password_explain'] = 'Morate potvrditi va�u trenutnu �ifru ukoliko �elite da je promenite, ili ako �elite da promenite va�u email adresu';
$lang['password_if_changed'] = 'Samo trebate da upi�ete lozinku ukoliko �elite da je promenite';
$lang['password_confirm_if_changed'] = 'Samo trebate da potvrdite va�u lozinku ako ste je promenili iznad';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Prikazuje malu sliku ispod va�ih detalja u poruci. Samo jedna slika mo�e biti prikazana istovremeno. �irina slike ne sme biti ve�a od %d piksela, a visina ne sme biti ve�a od %d piksela. Maksimalna veli�ina fajla je %dKB.';
$lang['Upload_Avatar_file'] = 'Upload avatara sa va�e ma�ine';
$lang['Upload_Avatar_URL'] = 'Upload avatara sa URL adrese';
$lang['Upload_Avatar_URL_explain'] = 'Upi�ite URL lokaciju koja sadr�i sliku avatara. Bi�e iskopirana na ovaj sajt.';
$lang['Pick_local_Avatar'] = 'Izaberite avatar iz galerije';
$lang['Link_remote_Avatar'] = 'Link ka avataru na drugoj stranici';
$lang['Link_remote_Avatar_explain'] = 'Upi�ite URL lokaciju koja sadr�i sliku avatara koju ho�ete da linkujete.';
$lang['Avatar_URL'] = 'URL slike avatara';
$lang['Select_from_gallery'] = 'Izaberite avatar iz galerije';
$lang['View_avatar_gallery'] = 'Prika�i galeriju';

$lang['Select_avatar'] = 'Izaberi avatar';
$lang['Return_profile'] = 'Poni�ti izbor';
$lang['Select_category'] = 'Izberi kategoriju';

$lang['Delete_Image'] = 'Obri�i sliku';
$lang['Current_Image'] = 'Trenutna slika';

$lang['Notify_on_privmsg'] = 'Obavesti me kada dobijem novu privatnu poruku';
$lang['Popup_on_privmsg'] = 'Otvori novi prozor kada dobijem novu privatnu poruku';
$lang['Popup_on_privmsg_explain'] = 'Otvori�e se novi pop-up prozor da vas obavesti kada primite novu privatnu poruku';
$lang['Hide_user'] = 'Sakrij se od "Ko je na forumu?" ';

$lang['Profile_updated'] = 'Va� profil je a�uriran';
$lang['Profile_updated_inactive'] = 'Va� profil je a�uriran, iako va� nalog nije aktivan. Proverite va� email da saznate kako da reaktivirate va� nalog';

$lang['Password_mismatch'] = '�ifre koje ste upisali nisu identi�ne';
$lang['Current_password_mismatch'] = 'Trenutna �ifra koju ste upisali nije ista kao �ifra u bazi podataka';
$lang['Password_long'] = 'Va�a �ifra ne sme biti du�a od 32 karaktera';
$lang['Username_taken'] = '�ao nam je, ali ovo korisni�ko ime je ve� uzeto';
$lang['Username_invalid'] = '�ao nam je, ali ovo korisni�ko ime koristi nevalidne karaktere, kao �to je \'';
$lang['Username_disallowed'] = '�ao nam je, ali ovo korisni�ko ime nije dopu�teno';
$lang['Email_taken'] = '�ao nam je, ali tu email adresu je iskoristio drugi �lan za registraciju';
$lang['Email_banned'] = '�ao nam je, ali ova email adresa je banovana';
$lang['Email_invalid'] = '�ao nam je, ali ova email adresa nije validna';
$lang['Signature_too_long'] = 'Va� potpis je preduga�ak';
$lang['Fields_empty'] = 'Morate ispuniti zahtevana polja';
$lang['Avatar_filetype'] = 'Ekstenzija fajla mora biti .jpg, .gif ili .png';
$lang['Avatar_filesize'] = 'Veli�ina fajla avatara ne sme biti ve�a od %d KB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'Avatar mora biti manji od %d piksela �irine i %d piksela visine';

$lang['Welcome_subject'] = 'Dobrodo�li na %s Forum'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Novi korisni�ki nalog';
$lang['Account_activated_subject'] = 'Nalog aktiviran';

$lang['Account_added'] = 'Hvala vam �to ste se registrovali, va� nalog je kreiran. Sada se mo�ete prijaviti sa va�im korisni�kim imenom i lozinkom.';
$lang['Account_inactive'] = 'Va� nalog je kreiran. Ipak, ovaj forum zahteva aktivaciju naloga. Klju� za aktivaciju je poslat na email adresu koju ste uneli prilikom registracije.';
$lang['Account_inactive_admin'] = 'Va� nalog je kreiran. Ipak, ovaj forum zahteva aktivaciju naloga od strane administratora. Bi�ete obave�teni kada se aktivira va� nalog.';
$lang['Account_active'] = 'Va� nalog je sada aktiviran. Hvala na registraciji.';
$lang['Account_active_admin'] = 'Va� nalog je aktiviran';
$lang['Reactivate'] = 'Reaktivirajte va� nalog!';
$lang['Already_activated'] = 'Ve� ste aktivirali va� nalog';
$lang['COPPA'] = 'Va� nalog je kreiran, ali treba da bude dopu�ten, pogledajte email za detalje.';

$lang['Registration'] = 'Uslovi registracije';
$lang['Reg_agreement'] = 'Dok administratori i urednici ovog foruma nastoje da obri�u ili izmene bilo koji dostupni materijal �to je br�e mogu�e, nemogu�e je pregledati svaku poruku. Prema tome, na Vama je da znate da sve poruke poslate na ove forume iskazuju stavove i opredeljenja autora, nikako administratora, urednika ili webmastera (osim, naravno, poruka poslatih li�no od ovih ljudi) i od sada se obavezujete uslovima.<br /><br />Sla�ete se da ne �aljete nikakve pogrdne, nepristojne, vulgarne, klevetni�ke, odvratne, prete�e, seksualno-orjentisane poruke ili bilo kakav materijal koji mo�e narusiti bilo koje od korisni�kih pravila. Postupaju�i druga�ije, mo�ete biti odmah i trajno isklju�eni (i Va� internet provajder �e biti obave�ten). IP adrese svih poruka su sa�uvane za pomo� u slucaju neprimene ovih uslova. Sla�ete se da webmaster, administrator i urednici ovog foruma imaju pravo da obri�u, izmene, pomere ili zatvore svaku temu u svako doba ako to smatraju potrebnim. Kao korisnik sla�ete se sa svim informacijama koje ste prethodno uneli i one ce biti sa�uvane u bazi podataka. Da ove informacije ne budu objavljene ni jednoj tre�oj osobi bez Va�eg dopu�tenja webmasteru, administratoru i urednicima, oni se ne mogu se dr�ati za odgovorne za bilo koji od hakerskih napada koji mogu preuzeti podatke koji mogu dovesti do neprilika.<br /><br />Ovaj forum koristi cookies da bi sa�uvao informacije na Va�em kompjuteru. Ovi cookies fajlovi ne sadr�e ni jednu od informacija koju ste iznad ubacili, oni slu�e samo da upotpune bolji izgled strane. Email adresa se koristi samo za potvrdu va�ih podataka registracije i �ifre.<br /><br />Kada kliknete na dugme za registraciju ispod, sla�ete se i obavezujete se sa svim ovim uslovima.';

$lang['Agree_under_13'] = 'Sla�em se sa ovim uslovima i ja sam <b>mla�i/a</b> od 13 godina';
$lang['Agree_over_13'] = 'Sla�em se sa ovim uslovima i ja sam <b>stariji/a od</b> ili imam ta�no 13 godina';
$lang['Agree_not'] = 'Ne sla�em se sa ovim uslovima';

$lang['Wrong_activation'] = 'Klju� za aktivaciju koji ste uneli ne poklapa se sa onim u na�oj bazi podataka';
$lang['Send_password'] = 'Po�alji mi novu �ifru';
$lang['Password_updated'] = 'Nova �ifra je napravljena, proverite va� email sa detaljima aktivacije';
$lang['No_email_match'] = 'Email adresa koju ste uneli ne poklapa se sa onom u va�em nalogu';
$lang['New_password_activation'] = 'Aktivacija nove �ifre';
$lang['Password_activated'] = 'Va� nalog je reaktiviran. Da biste se prijavili, koristite �ifur koju ste dobili u emailu';

$lang['Send_email_msg'] = 'Po�alji email';
$lang['No_user_specified'] = 'Nije izabran �lan';
$lang['User_prevent_email'] = 'Ovaj �lan ne �eli da prima email. Poku�ajte sa slanjem privatne poruke';
$lang['User_not_exist'] = 'Takav �lan ne postoji';
$lang['CC_email'] = 'Po�aljite kopiju ovog emaila sebi';
$lang['Email_message_desc'] = 'Ova poruka �e biti poslata kao obi�an tekst, nemojte pisati nikakav HTML ili BBKod. Povratna adresa za ovu poruku bi�e va�a email adresa.';
$lang['Flood_email_limit'] = 'Ne mo�ete da upi�ete drugi email sada, poku�ajte kasnije.';
$lang['Recipient'] = 'Primalac';
$lang['Email_sent'] = 'Email je poslat';
$lang['Send_email'] = 'Po�alji email';
$lang['Empty_subject_email'] = 'Morate upisati naslov emaila';
$lang['Empty_message_email'] = 'Morate upisati poruku';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Izaberite metodu soritranja';
$lang['Sort'] = 'Sortiraj';
$lang['Sort_Top_Ten'] = 'Glavnih 10 autora';
$lang['Sort_Joined'] = 'Datum registracije';
$lang['Sort_Username'] = 'Korisni�ko ime';
$lang['Sort_Location'] = 'Lokacija';
$lang['Sort_Posts'] = 'Ukupne poruke';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'Sajt';
$lang['Sort_Ascending'] = 'Rastu�em';
$lang['Sort_Descending'] = 'Opadaju�em';
$lang['Order'] = 'Niz';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Kontrol panel grupe';
$lang['Group_member_details'] = 'Detalji �lanstva';
$lang['Group_member_join'] = 'Pridru�i se grupi';

$lang['Group_Information'] = 'Informacije o grupi';
$lang['Group_name'] = 'Ime grupe';
$lang['Group_description'] = 'Opis grupe';
$lang['Group_membership'] = '�lanstvo';
$lang['Group_Members'] = '�lanovi grupe';
$lang['Group_Moderator'] = 'Urednici grupe';
$lang['Pending_members'] = '�lanovi koji �ekaju';

$lang['Group_type'] = 'Vrsta grupe';
$lang['Group_open'] = 'Otvorena grupa';
$lang['Group_closed'] = 'Zatvorena grupa';
$lang['Group_hidden'] = 'Skrivena grupa';

$lang['Current_memberships'] = 'Trenutna �lanstva';
$lang['Non_member_groups'] = 'Grupe bez �lanstava';
$lang['Memberships_pending'] = '�lanstva koja �ekaju';

$lang['No_groups_exist'] = 'Ne postoji ni jedna grupa';
$lang['Group_not_exist'] = 'Ta grupa �lanova ne postoji';

$lang['Join_group'] = 'Pridru�i se';
$lang['No_group_members'] = 'Ova glupa nema �lanova';
$lang['Group_hidden_members'] = 'Ova grupa je skrivena, ne mo�ete da vidite �lanstvo';
$lang['No_pending_group_members'] = 'Ova grupa nema �lanova koji �ekaju';
$lang['Group_joined'] = 'Uspe�no ste se upisali u ovu grupu<br />Bi�ete obave�teni kada va� upis dopusti urednik grupe';
$lang['Group_request'] = 'Zahtev za pridru�ivanje va�oj grupi je napravljen';
$lang['Group_approved'] = 'Va� zahtev je dopu�ten';
$lang['Group_added'] = 'Dodati ste u ovu grupu �lanova';
$lang['Already_member_group'] = 'Ve� ste �lan ove grupe';
$lang['User_is_member_group'] = 'Korisnik je ve� �lan ove grupe';
$lang['Group_type_updated'] = 'Uspe�no a�urirana vrsta grupe';

$lang['Could_not_add_user'] = 'Korisni�ko ime koje ste izabrali ne postoji';
$lang['Could_not_anon_user'] = 'Ne mo�ete da dodate anonimca za �lana';

$lang['Confirm_unsub'] = 'Jeste li sigurni da �elite da se ispi�ete iz ove grupe?';
$lang['Confirm_unsub_pending'] = 'Va� zahtev za upis u ovu grupu jo� nije pregledan, jeste li sigurni da �elite da se ispi�ete?';

$lang['Unsub_success'] = 'Uspe�no ste se ispisali iz ove grupe.';

$lang['Approve_selected'] = 'Dopusti';
$lang['Deny_selected'] = 'Ne dopu�taj';
$lang['Not_logged_in'] = 'Morate biti prijavljeni da biste se pridru�ili grupi.';
$lang['Remove_selected'] = 'Obri�i iz grupe';
$lang['Add_member'] = 'Dodaj �lana';
$lang['Not_group_moderator'] = 'Vi niste urednik ove grupe, i ne mo�ete da izvr�ite takve akcije.';

$lang['Login_to_join'] = 'Morate se prijaviti da biste modifikovali �lanstvo';
$lang['This_open_group'] = 'Ovo je otvorena grupa, kliknite za slanje zahteva za �lanstvo';
$lang['This_closed_group'] = 'Ovo je zatvorena grupa, nije dopu�teno �lanstvo';
$lang['This_hidden_group'] = 'Ovo je skrivena grupa, automatsko dodavanje �lanova nije dopu�teno';
$lang['Member_this_group'] = 'Vi ste �lan ove grupe';
$lang['Pending_this_group'] = 'Va� zahtev za �lanstvo je na �ekanju';
$lang['Are_group_moderator'] = 'Vi ste urednik grupe';
$lang['None'] = 'Nema';

$lang['Subscribe'] = 'Upi�ite se';
$lang['Unsubscribe'] = 'Ispi�ite se';
$lang['View_Information'] = 'Pogledaj informacije';


//
// Search
//
$lang['Search_query'] = 'Upit za pretragu';
$lang['Search_options'] = 'Opcije pretrage';

$lang['Search_keywords'] = 'Tra�i klju�ne re�i';
$lang['Search_keywords_explain'] = 'Mo�ete koristiti <u>AND</u> da defini�ete re�i koje moraju biti u rezultatu, <u>OR</u> da defini�ete re�i koje mogu biti u rezultatu i <u>NOT</u> da defini�ete re�i koje ne smeju biti u rezultatu. Koristite * (zvezdicu) za pojedine pogodke.';
$lang['Search_author'] = 'Tra�i autora';
$lang['Search_author_explain'] = 'Koristite * (zvezdicu) za pojedine pogodke';

$lang['Search_for_any'] = 'Pretra�i svaki izraz ili koristi upit onako kako je unet';
$lang['Search_for_all'] = 'Pretra�i sve izraze';
$lang['Search_title_msg'] = 'Pretra�i naslove teme i tekst poruke';
$lang['Search_msg_only'] = 'Pretra�i samo tekst poruke';

$lang['Return_first'] = 'Pretra�i prvih'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'karaktera poruke';

$lang['Search_previous'] = 'Pretra�i od pre'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sortiraj po';
$lang['Sort_Time'] = 'Post Time';
$lang['Sort_Post_Subject'] = 'Naslovu poruke';
$lang['Sort_Topic_Title'] = 'Naslovu teme';
$lang['Sort_Author'] = 'Autoru';
$lang['Sort_Forum'] = 'Forumu';

$lang['Display_results'] = 'Prika�i rezultat kao';
$lang['All_available'] = 'Svi dostupni';
$lang['No_searchable_forums'] = 'Nemate dozvolu da pretra�ujete bilo koji forum na ovom sajtu';

$lang['No_search_match'] = 'Ni jedna tema i ni jedna poruka ne sadr�i Va� kriterijum.';
$lang['Found_search_match'] = 'Na�en %d pogodak'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Na�eno %d pogodaka'; // eg. Search found 24 matches

$lang['Close_window'] = 'Zatvori prozor';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '�ao nam je, ali samo %s mogu da postavljaju obave�tenja u ovom forumu';
$lang['Sorry_auth_sticky'] = '�ao nam je ali samo %s mogu da postavljaju lepljive poruke u ovom forumu';
$lang['Sorry_auth_read'] = '�ao nam je, ali samo %s mogu da �itaju teme u ovom forumu';
$lang['Sorry_auth_post'] = '�ao nam je, ali samo %s mogu da postavljaju teme u ovom forumu';
$lang['Sorry_auth_reply'] = '�ao nam je, ali samo %s mogu da odgovaraju na teme u ovom forumu';
$lang['Sorry_auth_edit'] = 'Žao nam je, ali samo %s mogu da menjaju poruke u ovom forumu';
$lang['Sorry_auth_delete'] = '�ao nam je, ali samo %s mogu da bri�u poruke u ovom forumu';
$lang['Sorry_auth_vote'] = '�ao nam je, ali samo %s mogu da glasaju u ovom forumu';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anonimni korisnici</b>';
$lang['Auth_Registered_Users'] = '<b>registrovani �lanovi</b>';
$lang['Auth_Users_granted_access'] = '<b>korisnici sa specijalnom dozvolom</b>';
$lang['Auth_Moderators'] = '<b>urednici</b>';
$lang['Auth_Administrators'] = '<b>administratori</b>';

$lang['Not_Moderator'] = 'Vi niste urednik ovog foruma.';
$lang['Not_Authorised'] = 'Niste ovla��eni';

$lang['You_been_banned'] = 'Banovani ste sa ovog foruma<br />Kontaktirajte administratora za vi�e informacija';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Trenutno je 0 �lanova i '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'Trenutno je %d �lanova i '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'Trenutno je %d �lan i '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 skrivenih �lanova na forumu'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d skrivenih �lanova na forumu'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d skriven �lan na forumu'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Broj gostiju: %d'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Nema gostiju.'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Broj gostiju: %d'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Trenutno nema �lanova na ovom forumu';

$lang['Online_explain'] = 'Ovi podaci su bazirani na �lanovima aktivnim u poslednjih 5 minuta';

$lang['Forum_Location'] = 'Lokacija';
$lang['Last_updated'] = 'Poslednji put a�urirano';

$lang['Forum_index'] = 'Indeks foruma';
$lang['Logging_on'] = 'Prijavljuje se';
$lang['Posting_message'] = 'Pi�e poruku';
$lang['Searching_forums'] = 'Pretra�uje forume';
$lang['Viewing_profile'] = 'Pregled profila';
$lang['Viewing_online'] = 'Pregled - ko je na forumu';
$lang['Viewing_member_list'] = 'Pregled liste �lanova';
$lang['Viewing_priv_msgs'] = 'Pregled privatnih poruka';
$lang['Viewing_FAQ'] = 'Pomo�';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Kontrolni panel urednika';
$lang['Mod_CP_explain'] = 'Kori��enjem formulara ispod mo�ete da izvr�ite masovne operacije urednika na ovom forumu. Mo�ete da zaklju�ate, otklju�ate, premestite ili obri�ete bilo koji broj tema.';

$lang['Select'] = 'Izaberi';
$lang['Delete'] = 'Obri�i';
$lang['Move'] = 'Pomeri';
$lang['Lock'] = 'Zaklju�aj';
$lang['Unlock'] = 'Otklju�aj';

$lang['Topics_Removed'] = 'Izabrane teme su uspe�no obrisane iz baze podataka.';
$lang['Topics_Locked'] = 'Izabrane teme su zaklju�ane';
$lang['Topics_Moved'] = 'Izabrane teme su preme�tena';
$lang['Topics_Unlocked'] = 'Izabrane teme su otklju�ane';
$lang['No_Topics_Moved'] = 'Ni jedna tema nije preme�tena';

$lang['Confirm_delete_topic'] = 'Jeste li sigurni da �elite da obri�ete izabrane teme?';
$lang['Confirm_lock_topic'] = 'Jeste li sigurni da �elite da zaklju�ate izabrane teme?';
$lang['Confirm_unlock_topic'] = 'Jeste li sigurni da �elite da otklju�ate izabrane teme?';
$lang['Confirm_move_topic'] = 'Jeste li sigurni da �elite da premestite izabrane teme?';

$lang['Move_to_forum'] = 'Premesti u forum';
$lang['Leave_shadow_topic'] = 'Ostavi senku teme u starom forumu.';

$lang['Split_Topic'] = 'Podela teme';
$lang['Split_Topic_explain'] = 'Kori��enjem formulara ispod mo�ete da podelite jednu temu u dve.';
$lang['Split_title'] = 'Novi naslov teme';
$lang['Split_forum'] = 'Forum za novu temu';
$lang['Split_posts'] = 'Podeli izabrane poruke';
$lang['Split_after'] = 'Podeli OD izabranih poruka';
$lang['Topic_split'] = 'Izabrana tema je uspe�no podeljena';

$lang['Too_many_error'] = 'Izabrali ste previ�e poruka. Mo�ete izabrati samo jednu poruku da po njoj podelite temu!';

$lang['None_selected'] = 'Niste izabrali ni jednu temu za ovu operaciju. Vratite se nazad i izaberite bar jednu.';
$lang['New_forum'] = 'Novi forum';

$lang['This_posts_IP'] = 'IP za ovu poruku';
$lang['Other_IP_this_user'] = 'Ostale IP adrese sa kojih je ovaj �lan pisao';
$lang['Users_this_IP'] = '�lanovi koji pi�u sa ovog IPa';
$lang['IP_info'] = 'IP Informacija';
$lang['Lookup_IP'] = 'Pogledaj IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Sva vremena su %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 sati';
$lang['-11'] = 'GMT - 11 sati';
$lang['-10'] = 'GMT - 10 sati';
$lang['-9'] = 'GMT - 9 sati';
$lang['-8'] = 'GMT - 8 sati';
$lang['-7'] = 'GMT - 7 sati';
$lang['-6'] = 'GMT - 6 sati';
$lang['-5'] = 'GMT - 5 sati';
$lang['-4'] = 'GMT - 4 sata';
$lang['-3.5'] = 'GMT - 3.5 sata';
$lang['-3'] = 'GMT - 3 sata';
$lang['-2'] = 'GMT - 2 sata';
$lang['-1'] = 'GMT - 1 sat';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 sat';
$lang['2'] = 'GMT + 2 sata';
$lang['3'] = 'GMT + 3 sata';
$lang['3.5'] = 'GMT + 3.5 sati';
$lang['4'] = 'GMT + 4 sata';
$lang['4.5'] = 'GMT + 4.5 sata';
$lang['5'] = 'GMT + 5 sati';
$lang['5.5'] = 'GMT + 5.5 sati';
$lang['6'] = 'GMT + 6 sati';
$lang['6.5'] = 'GMT + 6.5 sati';
$lang['7'] = 'GMT + 7 sati';
$lang['8'] = 'GMT + 8 sati';
$lang['9'] = 'GMT + 9 sati';
$lang['9.5'] = 'GMT + 9.5 sati';
$lang['10'] = 'GMT + 10 sati';
$lang['11'] = 'GMT + 11 sati';
$lang['12'] = 'GMT + 12 sati';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 sati';
$lang['tz']['-11'] = 'GMT - 11 sati';
$lang['tz']['-10'] = 'GMT - 10 sati';
$lang['tz']['-9'] = 'GMT - 9 sati';
$lang['tz']['-8'] = 'GMT - 8 sati';
$lang['tz']['-7'] = 'GMT - 7 sati';
$lang['tz']['-6'] = 'GMT - 6 sati';
$lang['tz']['-5'] = 'GMT - 5 sati';
$lang['tz']['-4'] = 'GMT - 4 sata';
$lang['tz']['-3.5'] = 'GMT - 3.5 sata';
$lang['tz']['-3'] = 'GMT - 3 sata';
$lang['tz']['-2'] = 'GMT - 2 sata';
$lang['tz']['-1'] = 'GMT - 1 sata';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 sat';
$lang['tz']['2'] = 'GMT + 2 sata';
$lang['tz']['3'] = 'GMT + 3 sata';
$lang['tz']['3.5'] = 'GMT + 3.5 sata';
$lang['tz']['4'] = 'GMT + 4 sata';
$lang['tz']['4.5'] = 'GMT + 4.5 sati';
$lang['tz']['5'] = 'GMT + 5 sati';
$lang['tz']['5.5'] = 'GMT + 5.5 sati';
$lang['tz']['6'] = 'GMT + 6 sati';
$lang['tz']['6.5'] = 'GMT + 6.5 sati';
$lang['tz']['7'] = 'GMT + 7 sati';
$lang['tz']['8'] = 'GMT + 8 sati';
$lang['tz']['9'] = 'GMT + 9 sati';
$lang['tz']['9.5'] = 'GMT + 9.5 sati';
$lang['tz']['10'] = 'GMT + 10 sati';
$lang['tz']['11'] = 'GMT + 11 sati';
$lang['tz']['12'] = 'GMT + 12 sati';

$lang['datetime']['Sunday'] = 'Nedelja';
$lang['datetime']['Monday'] = 'Ponedeljak';
$lang['datetime']['Tuesday'] = 'Utorak';
$lang['datetime']['Wednesday'] = 'Sreda';
$lang['datetime']['Thursday'] = '�etvrtak';
$lang['datetime']['Friday'] = 'Petak';
$lang['datetime']['Saturday'] = 'Subota';
$lang['datetime']['Sun'] = 'Ned';
$lang['datetime']['Mon'] = 'Pon';
$lang['datetime']['Tue'] = 'Uto';
$lang['datetime']['Wed'] = 'Sre';
$lang['datetime']['Thu'] = '�et';
$lang['datetime']['Fri'] = 'Pet';
$lang['datetime']['Sat'] = 'Sub';
$lang['datetime']['January'] = 'Januar';
$lang['datetime']['February'] = 'Februar';
$lang['datetime']['March'] = 'Mart';
$lang['datetime']['April'] = 'April';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['June'] = 'Juni';
$lang['datetime']['July'] = 'Juli';
$lang['datetime']['August'] = 'Avgust';
$lang['datetime']['September'] = 'Septembar';
$lang['datetime']['October'] = 'Oktobar';
$lang['datetime']['November'] = 'Novembar';
$lang['datetime']['December'] = 'Decembar';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Maj';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Avg';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dec';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informacije';
$lang['Critical_Information'] = 'Kriti�ne informacije';

$lang['General_Error'] = 'Generalna gre�ka';
$lang['Critical_Error'] = 'Kriti�na gre�ka';
$lang['An_error_occured'] = 'Nastupila je gre�ka';
$lang['A_critical_error'] = 'Nastupila je kriti�na gre�ka';

//
// To je to. South park je zakon.
// -------------------------------------------------

?>