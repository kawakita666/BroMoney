<?php
/***************************************************************************
 *                            lang_main.php [Estonian]
 *                              -------------------
 *     begin                : Sun Aug 10 2003
 *     email                : admin@amphipolis.net
 *
 ****************************************************************************/

$lang['ENCODING'] = 'iso-8859-4';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'j M Y'; // Seda tuleb muuta vastavalt vajadustele. Formaat on php date().

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
$lang['TRANSLATION'] = 'T�lkinud: ';

//
// Tavalised v�ljendid, neid
// kasutatakse mitmetel lehtedel
//
$lang['Forum'] = 'Alafoorum';
$lang['Category'] = 'Kategooria';
$lang['Topic'] = 'Teema';
$lang['Topics'] = 'Teemasid';
$lang['Replies'] = 'Vastuseid';
$lang['Views'] = 'Vaatamisi';
$lang['Post'] = 'Postitus';
$lang['Posts'] = 'Postitusi';
$lang['Posted'] = 'Postitatud';
$lang['Username'] = 'Kasutajanimi';
$lang['Password'] = 'Parool';
$lang['Email'] = 'E-mail';
$lang['Poster'] = 'Postitaja';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Aeg';
$lang['Hours'] = 'Tundi';
$lang['Message'] = 'Teade';

$lang['1_Day'] = '1 P�ev';
$lang['7_Days'] = '7 P�eva';
$lang['2_Weeks'] = '2 N�dalat';
$lang['1_Month'] = '1 Kuu';
$lang['3_Months'] = '3 Kuud';
$lang['6_Months'] = '6 Kuud';
$lang['1_Year'] = '1 Aasta';

$lang['Go'] = 'Mine';
$lang['Jump_to'] = 'H�ppa';
$lang['Submit'] = 'Saada';
$lang['Reset'] = 'Taasta';
$lang['Cancel'] = 'Katkesta';
$lang['Preview'] = 'Eelvaade';
$lang['Confirm'] = 'Kinnita';
$lang['Spellcheck'] = '�igekirja kontroll';
$lang['Yes'] = 'Jah';
$lang['No'] = 'Ei';
$lang['Enabled'] = 'V�imaldatud';
$lang['Disabled'] = 'Mittav�imaldatud';
$lang['Error'] = 'Viga';

$lang['Next'] = 'J�rgmine';
$lang['Previous'] = 'Eelmine';
$lang['Goto_page'] = 'Mine lehele';
$lang['Joined'] = 'Liitunud';
$lang['IP_Address'] = 'IP Aadress';

$lang['Select_forum'] = 'Vali alafoorum';
$lang['View_latest_post'] = 'Vaata viimast postitust';
$lang['View_newest_post'] = 'Vaata uusimat postitust';
$lang['Page_of'] = 'Lehek�lg <b>%d</b>, lehek�lgi kokku <b>%d</b>'; // Asendub n�iteks: Lehek�lg 1, lehek�lgi kokku 2

$lang['ICQ'] = 'ICQ Number';
$lang['AIM'] = 'AIM Aadress';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '%s ';  // %s asendub sinu lehe nimega. N�iteks 'sinulehe Foorumi Index';

$lang['Post_new_topic'] = 'Uus teema';
$lang['Reply_to_topic'] = 'Vasta teemale';
$lang['Reply_with_quote'] = 'Vasta viitega';

$lang['Click_return_topic'] = 'Vajuta %sSiia%s, et teema juurde tagasi p��rduda'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Vajuta %sSiia%s, et uuesti proovida';
$lang['Click_return_forum'] = 'Vajuta %sSiia%s, et minna tagasi alafoorumile';
$lang['Click_view_message'] = 'Vajuta %sSiia%s, et vaadata oma postitust';
$lang['Click_return_modcp'] = 'Vajuta %sSiia%s, et minna tagasi Moderaatori Kontrollpaneeli';
$lang['Click_return_group'] = 'Vajuta %sSiia%s, et minna tagasi grupi info juurde';

$lang['Admin_panel'] = 'Mine Administratsioonipaneeli';

$lang['Board_disable'] = 'Vabandame, aga foorum on ajutiselt suletud. Proovige hiljem uuesti.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Foorumil olevad liitunud kasutajad:';
$lang['Browsing_forum'] = 'Kasutajad seda foorumit lugemas:';
$lang['Online_users_zero_total'] = 'Foorumil pole �htegi kasutajat :: ';
$lang['Online_users_total'] = 'Foorumis on hetkel kokku <b>%d</b> kasutajat :: ';
$lang['Online_user_total'] = 'Foorumis on hetkel <b>%d</b> kasutaja :: ';
$lang['Reg_users_zero_total'] = '0 Liitunud, ';
$lang['Reg_users_total'] = '%d Liitunud, ';
$lang['Reg_user_total'] = '%d Liitunud, ';
$lang['Hidden_users_zero_total'] = '0 Varjatud ja ';
$lang['Hidden_user_total'] = '%d Varjatud ja ';
$lang['Hidden_users_total'] = '%d Varjatud ja ';
$lang['Guest_users_zero_total'] = '0 K�lalist';
$lang['Guest_users_total'] = '%d K�lalist';
$lang['Guest_user_total'] = '%d K�lalist';
$lang['Record_online_users'] = 'Rekordarv k�lastajaid(<b>%s</b>) oli siin foorumil %s'; // Esimene %s asendub kasutajate arvuga, teine kuup�evaga

$lang['Admin_online_color'] = '%sAdministraator%s';
$lang['Mod_online_color'] = '%sModeraator%s';

$lang['You_last_visit'] = 'Viimati k�lastasid %s'; // %s asendub kuup�eva/ajaga
$lang['Current_time'] = '%s'; // %s asendub ajaga

$lang['Search_new'] = 'Vaata peale eelmist k�lastust postitatud teateid';
$lang['Search_your_posts'] = 'Vaata oma postitusi';
$lang['Search_unanswered'] = 'Vaata vastamata teateid';

$lang['Register'] = 'Registreeri';
$lang['Profile'] = 'Profiil';
$lang['Edit_profile'] = 'Muuda oma profiili';
$lang['Search'] = 'Otsi';
$lang['Memberlist'] = 'Liikmete nimekiri';
$lang['FAQ'] = 'KKK';
$lang['BBCode_guide'] = 'BBCode Juhend';
$lang['Usergroups'] = 'Kasutajagrupid';
$lang['Last_Post'] = 'Viimane postitus';
$lang['Moderator'] = 'Moderaator';
$lang['Moderators'] = 'Moderaatorid';


//
// Statistika tekst
//
$lang['Posted_articles_zero_total'] = 'Pole tehtud �htegi postitust'; // Postituste arv
$lang['Posted_articles_total'] = 'Kasutajad on postitanud <b>%d</b> teadet'; // Postituste arv
$lang['Posted_article_total'] = 'Kasutajad on postitanud <b>%d</b> teate'; // Postituste arv
$lang['Registered_users_zero_total'] = 'Pole �htegi liitunud kasutajat'; // # liitunud kasutajat
$lang['Registered_users_total'] = 'Kokku on <b>%d</b> liitunud kasutajat'; // # liitunud kasutajat
$lang['Registered_user_total'] = 'Kokku on <b>%d</b> liitunud kasutaja'; // # liitunud kasutajat
$lang['Newest_user'] = 'Uusim liitunud kasutaja on <b>%s%s%s</b>'; // a href, kasutajanimi, /a 

$lang['No_new_posts_last_visit'] = 'Sisu eelmisest k�lastusest pole �htegi uut teadet';
$lang['No_new_posts'] = 'Pole uusi teateid';
$lang['New_posts'] = 'Uued teated';
$lang['New_post'] = 'Uus teade';
$lang['No_new_posts_hot'] = 'Uusi postitusi pole [ Populaarne ]';
$lang['New_posts_hot'] = 'Uued postitused [ Populaarne ]';
$lang['No_new_posts_locked'] = 'Uusi postitusi pole [ Kinni ]';
$lang['New_posts_locked'] = 'Uued postitused [ Kinni ]';
$lang['Forum_is_locked'] = 'Alafoorum on suletud';


//
// Login
//
$lang['Enter_password'] = 'Palun sisestage oma kasutajanimi ja parool.';
$lang['Login'] = 'Logi sisse';
$lang['Logout'] = 'Logi v�lja';

$lang['Forgotten_password'] = 'Unustasin parooli';

$lang['Log_me_in'] = 'Automaatne sisselogimine';

$lang['Error_login'] = 'Sisestatud parool v�i kasutajanimi on vale.';


//
// Index page
//
$lang['Index'] = 'Esileht';
$lang['No_Posts'] = 'Postitusi pole';
$lang['No_forums'] = 'Sellel foorumil pole alafoorumeid';

$lang['Private_Message'] = 'Privaats�num';
$lang['Private_Messages'] = 'Privaats�numid';
$lang['Who_is_Online'] = 'Kes on foorumil';

$lang['Mark_all_forums'] = 'M�rgi k�ik alafoorumid loetuks';
$lang['Forums_marked_read'] = 'K�ik alafoorumid m�rgiti loetuks';


//
// Viewforum
//
$lang['View_forum'] = 'Vaata alafoorumit';

$lang['Forum_not_exist'] = 'Teie valitud alafoorumit ei eksisteeri.';
$lang['Reached_on_error'] = 'Olete siia lehele j�udnud vea t�ttu.';

$lang['Display_topics'] = 'Reasta teemad eelmise j�rgi';
$lang['All_Topics'] = 'K�ik teemad';

$lang['Topic_Announcement'] = '<b>Teadaanne:</b>';
$lang['Topic_Sticky'] = '<b>Kleeps:</b>';
$lang['Topic_Moved'] = '<b>Liigutatud:</b>';
$lang['Topic_Poll'] = '<b>[ K�sitlus ]</b>';

$lang['Mark_all_topics'] = 'M�rgi k�ik teemad loetuks';
$lang['Topics_marked_read'] = 'Selle alafoorumi teemad m�rgiti loetuks';

$lang['Rules_post_can'] = 'Sa <b>saad</b> teha siia alafoorumisse uusi teemasid';
$lang['Rules_post_cannot'] = 'Sa <b>ei saa</b> teha siia alafoorumisse uusi teemasid';
$lang['Rules_reply_can'] = 'Sa <b>saad</b> vastata siinsetele teemadele';
$lang['Rules_reply_cannot'] = 'Sa <b>ei saa</b> vastata siinsetele teemadele';
$lang['Rules_edit_can'] = 'Sa <b>saad</b> muuta oma postitusi';
$lang['Rules_edit_cannot'] = 'Sa <b>ei saa</b> muuta oma postitusi';
$lang['Rules_delete_can'] = 'Sa <b>saad</b> kustutada oma postitusi';
$lang['Rules_delete_cannot'] = 'Sa <b>ei saa</b> kustutada oma postitusi';
$lang['Rules_vote_can'] = 'Sa <b>saad</b> h��letada k�sitlustes';
$lang['Rules_vote_cannot'] = 'Sa <b>ei saa</b> h��letada k�sitlustes';
$lang['Rules_moderate'] = 'Sa <b>saad</b> %sseda alafoorumit modereerida%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'Selles alafoorumis pole postitusi.<br />Vajuta <b>Uus teema</b> lingile, et teha uus postitus.';


//
// Viewtopic
//
$lang['View_topic'] = 'Vaata teemat';

$lang['Guest'] = 'K�laline';
$lang['Post_subject'] = 'Teema';
$lang['View_next_topic'] = 'Vaata j�rgmist teemat';
$lang['View_previous_topic'] = 'Vaata eelmist teemat';
$lang['Submit_vote'] = 'H��leta';
$lang['View_results'] = 'Vaata tulemusi';

$lang['No_newer_topics'] = 'Selles alafoorumis pole uuemaid teateid';
$lang['No_older_topics'] = 'Selles alafoorumis pole vanemaid teateid';
$lang['Topic_post_not_exist'] = 'Sinu soovitud teated v�i teemat ei ole olemas';
$lang['No_posts_topic'] = 'Selles teemas pole postitusi';

$lang['Display_posts'] = 'Reasta teated';
$lang['All_Posts'] = 'K�ik teated';
$lang['Newest_First'] = 'Uuemad ees';
$lang['Oldest_First'] = 'Vanemad ees';

$lang['Back_to_top'] = 'Tagasi �les';

$lang['Read_profile'] = 'Vaata kasutaja profiili'; 
$lang['Send_email'] = 'Saada kasutajale e-mail';
$lang['Visit_website'] = 'Vaata liikme veebilehte';
$lang['ICQ_status'] = 'ICQ Staatus';
$lang['Edit_delete_post'] = 'Muuda/Kustuta postitus';
$lang['View_IP'] = 'Vaata postitaja IP aadressi';
$lang['Delete_post'] = 'Kustuta postitus';

$lang['wrote'] = 'kirjutas'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Tsiteerin:'; // comes before bbcode quote output.
$lang['Code'] = 'Kood'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Viimati muutis seda %s (%s). Kokku muudetud %d kord'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Viimati muutis seda %s (%s). Kokku muudetud %d korda'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Sulge teema';
$lang['Unlock_topic'] = 'Ava teema';
$lang['Move_topic'] = 'Liiguta teema';
$lang['Delete_topic'] = 'Kustuta teema';
$lang['Split_topic'] = 'Poolita teema';

$lang['Stop_watching_topic'] = 'L�peta teema j�lgimine';
$lang['Start_watching_topic'] = 'J�lgi sellesse teemasse postitatud vastuseid';
$lang['No_longer_watching'] = 'Sa ei j�lgi enam seda teemat';
$lang['You_are_watching'] = 'Sa j�lgid n��d seda teemat';

$lang['Total_votes'] = 'Kokku H��li';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Teate sisu';
$lang['Topic_review'] = 'Teema �levaade';

$lang['No_post_mode'] = '�htegi postitusviisi ei valitud'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Tee uus teema';
$lang['Post_a_reply'] = 'Vasta';
$lang['Post_topic_as'] = 'Tee teema';
$lang['Edit_Post'] = 'Muuda teadet';
$lang['Options'] = 'Valikud';

$lang['Post_Announcement'] = 'Teadaanne';
$lang['Post_Sticky'] = 'Kleeps';
$lang['Post_Normal'] = 'Tavaline';

$lang['Confirm_delete'] = 'Oled sa kindel, et soovid seda teadet kustutada?';
$lang['Confirm_delete_poll'] = 'Oled sa kindel, et soovid seda k�sitlust kustutada?';

$lang['Flood_Error'] = 'Nii v�ikese vahega ei saa j�rjestikuseid teateid postitada. Palun oodake natuke ja proovige uuesti.';
$lang['Empty_subject'] = 'Sa pead uuele teemale ka pealkirja panema.';
$lang['Empty_message'] = 'Uut teemat tehes pead sa ka mingi teate kirjutama.';
$lang['Forum_locked'] = 'See alafoorum on suletud: siia ei saa teha teemasid ega neile vastata.';
$lang['Topic_locked'] = 'See teema on suletud: sa ei saa postitusi lisada ega muuta.';
$lang['No_post_id'] = 'Sa pead muutmiseks valima postituse';
$lang['No_topic_id'] = 'Sa pead valima teema, millesse vastata';
$lang['No_valid_mode'] = 'Sa saad ainult postitada, tsiteerida, muuta ja vastata teadetele. Palun proovige uuesti.';
$lang['No_such_post'] = 'Sellist postitust ei ole. Palun proovige uuesti.';
$lang['Edit_own_posts'] = 'Vabandame aga te saate muuta ainult oma postitusi.';
$lang['Delete_own_posts'] = 'Vabandame aga te saate kustutada ainult oma postitusi.';
$lang['Cannot_delete_replied'] = 'Vabandame aga te ei saa kustutada teateid, millele on vastatud.';
$lang['Cannot_delete_poll'] = 'Vabandame aga te ei saa kustutada aktiivset k�sitlust.';
$lang['Empty_poll_title'] = 'Sa pead k�sitlusele ka pealkirja panema.';
$lang['To_few_poll_options'] = 'Sa pead sisestama v�hemalt kaks valikvastust.';
$lang['To_many_poll_options'] = 'Sa �ritasid sisestada liiga palju valikvastuseid.';
$lang['Post_has_no_poll'] = 'Selles postituses pole k�sitlust.';
$lang['Already_voted'] = 'Sa oled selles k�sitluses juba h��letanud.';
$lang['No_vote_option'] = 'Sa pead h��letades valima �he variandi.';

$lang['Add_poll'] = 'Lisa K�sitlus';
$lang['Add_poll_explain'] = 'Kui sa ei soovi teemasse k�sitlust lisada, j�ta see v�li t�hjaks.';
$lang['Poll_question'] = 'K�simus';
$lang['Poll_option'] = 'Valikvastus';
$lang['Add_option'] = 'Lisa valikvastus';
$lang['Update'] = 'Uuenda';
$lang['Delete'] = 'Kustuta';
$lang['Poll_for'] = 'K�sitlus on aktiivne';
$lang['Days'] = 'P�eva'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Sisesta 0 v�i j�ta t�hjaks mitteaeguva k�sitluse jaoks]';
$lang['Delete_poll'] = 'Kustuta K�sitlus';

$lang['Disable_HTML_post'] = 'Keela Postituses HTML';
$lang['Disable_BBCode_post'] = 'Keela Postituses BBCode';
$lang['Disable_Smilies_post'] = 'Keela Postituses Emotikonid';

$lang['HTML_is_ON'] = 'HTML on <u>SEES</u>';
$lang['HTML_is_OFF'] = 'HTML on <u>V�LJAS</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s on <u>SEES</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s on <u>V�LJAS</u>';
$lang['Smilies_are_ON'] = 'Emotikonid on <u>SEES</u>';
$lang['Smilies_are_OFF'] = 'Emotikonid on <u>V�LJAS</u>';

$lang['Attach_signature'] = 'Lisa signatuur (signatuure saab muuta oma profiilist)';
$lang['Notify'] = 'Teata, kui postitusele vastatakse';
$lang['Delete_post'] = 'Kustuta postitus';

$lang['Stored'] = 'Teade on edukalt sisestatud.';
$lang['Deleted'] = 'Teade on edukalt kustutatud.';
$lang['Poll_delete'] = 'K�sitlus on edukalt kustutatud.';
$lang['Vote_cast'] = 'H��l on arvesse v�etud.';

$lang['Topic_reply_notification'] = 'Teemale Vastamise Teatis';

$lang['bbcode_b_help'] = 'Bold tekst: [b]tekst[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Kursiivis tekst: [i]tekst[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Allajoonitud tekst: [u]tekst[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Tsitaat: [quote]tekst[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Kood: [code]kood[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Nimekiri: [list]tekst[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Korrastatud nimekiri: [list=]tekst[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Pilt: [img]http://pildi_aadress[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Sisesta link: [url]http://aadress[/url] or [url=http://aadress]Lingi Tekst[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Sulge k�ik avatud BBCode k�sud';
$lang['bbcode_s_help'] = 'Fondi v�rv: [color=red]tekst[/color]  Vihje: saab kasutada ka v�rve kujul=#FF0000';
$lang['bbcode_f_help'] = 'Fondi suurus: [size=x-small]v�ike tekst[/size]';

$lang['Emoticons'] = 'Emotikonid';
$lang['More_emoticons'] = 'Vaata k�iki emotikone';

$lang['Font_color'] = 'Fondi v�rv';
$lang['color_default'] = 'Tavaline';
$lang['color_dark_red'] = 'Tumepunane';
$lang['color_red'] = 'Punane';
$lang['color_orange'] = 'Oran�';
$lang['color_brown'] = 'Pruun';
$lang['color_yellow'] = 'Kollane';
$lang['color_green'] = 'Roheline';
$lang['color_olive'] = 'Oliiv';
$lang['color_cyan'] = 'Helesinine';
$lang['color_blue'] = 'Sinine';
$lang['color_dark_blue'] = 'Tumesinine';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'VLilla';
$lang['color_white'] = 'Valge';
$lang['color_black'] = 'Must';

$lang['Font_size'] = 'Fondi suurus';
$lang['font_tiny'] = 'Pisike';
$lang['font_small'] = 'V�ike';
$lang['font_normal'] = 'Tavaline';
$lang['font_large'] = 'Suur';
$lang['font_huge'] = 'Hiiglaslik';

$lang['Close_Tags'] = 'Sulge K�sud';
$lang['Styles_tip'] = 'Vihje: Valitud tekstile saab kiiresti stiile lisada.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Privaats�numid';

$lang['Login_check_pm'] = 'Privaats�numite lugemiseks logi sisse';
$lang['New_pms'] = 'Sul on %d uut teadet'; // You have 2 new messages
$lang['New_pm'] = 'Sul on %d uus teade'; // You have 1 new message
$lang['No_new_pm'] = 'Sul ei ole uusi s�numeid';
$lang['Unread_pms'] = 'Sul on %d lugemata teadet';
$lang['Unread_pm'] = 'Sul on %d lugemata teade';
$lang['No_unread_pm'] = 'Sul ei ole lugemata teateid';
$lang['You_new_pm'] = 'Uus privaats�num ootab sind Postkastis';
$lang['You_new_pms'] = 'Uued privaats�numid ootavad sind Postkastis';
$lang['You_no_new_pm'] = 'Sulle ei ole uusi privaats�numeid';

$lang['Unread_message'] = 'Lugemata s�num';
$lang['Read_message'] = 'Loetud s�num';

$lang['Read_pm'] = 'Loe s�numit';
$lang['Post_new_pm'] = 'Saada s�num';
$lang['Post_reply_pm'] = 'Vasta s�numile';
$lang['Post_quote_pm'] = 'Tsiteeri s�numit';
$lang['Edit_pm'] = 'Muuda teadet';

$lang['Inbox'] = 'Postkast';
$lang['Outbox'] = 'Outbox';
$lang['Savebox'] = 'Salvestatud';
$lang['Sentbox'] = 'Saadetud';
$lang['Flag'] = 'M�rgi';
$lang['Subject'] = 'Pealkiri';
$lang['From'] = 'Kellelt';
$lang['To'] = 'Kellele';
$lang['Date'] = 'Kuup�ev';
$lang['Mark'] = 'M�rgi';
$lang['Sent'] = 'Saadetud';
$lang['Saved'] = 'Salvestatud';
$lang['Delete_marked'] = 'Kustuta m�rgitud';
$lang['Delete_all'] = 'Kustuta K�ik';
$lang['Save_marked'] = 'Salvesta M�rgitud'; 
$lang['Save_message'] = 'Salvesta S�num';
$lang['Delete_message'] = 'Kustuta S�num';

$lang['Display_messages'] = 'N�ita teateid alates'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'K�ik teated';

$lang['No_messages_folder'] = 'Siin kaustas pole uusi s�numeid';

$lang['PM_disabled'] = 'S�numite saatmine on siin foorumil keelatud.';
$lang['Cannot_send_privmsg'] = 'Vabandame aga administraator on keelanud sul privaats�numite saatmise.';
$lang['No_to_user'] = 'Sa pead m�rkima saaja kasutajanime.';
$lang['No_such_user'] = 'Vabandame aga sellist kasutajat ei ole.';

$lang['Disable_HTML_pm'] = 'Keela HTML selles s�numis';
$lang['Disable_BBCode_pm'] = 'Keela BBCode selles s�numis';
$lang['Disable_Smilies_pm'] = 'Keela emotikonid selles s�numis';

$lang['Message_sent'] = 'Su s�num on saadetud.';

$lang['Click_return_inbox'] = 'Vajuta %sSiia%s, et minna oma Postkasti juurde';
$lang['Click_return_index'] = 'Vajuta %sSiia%s, et minna esilehele';

$lang['Send_a_new_message'] = 'Saada uus privaats�num';
$lang['Send_a_reply'] = 'Vasta privaats�numile';
$lang['Edit_message'] = 'Muuda s�numit';

$lang['Notification_subject'] = 'Uus Privaats�num Saabus!';

$lang['Find_username'] = 'Leia kasutajanimi';
$lang['Find'] = 'Leia';
$lang['No_match'] = 'Ei leitud �htegi.';

$lang['No_post_id'] = 'Postituse ID polnud m�rgitud';
$lang['No_such_folder'] = 'Sellist folderit ei ole';
$lang['No_folder'] = 'NFolderit ei t�psustatud';

$lang['Mark_all'] = 'M�rgi k�ik';
$lang['Unmark_all'] = 'Eemalda k�igilt m�rgistus';

$lang['Confirm_delete_pm'] = 'Oled sa kindel, et soovid seda teadet kustutada?';
$lang['Confirm_delete_pms'] = 'Oled sa kindel, et soovid neid teateid kustutada?';

$lang['Inbox_size'] = 'Su Postkast on %d%% t�is'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Su saadetud kirjade kaust on %d%% t�is'; 
$lang['Savebox_size'] = 'YSu salvestatud kirjade kaust on %d%% t�is'; 

$lang['Click_view_privmsg'] = 'Vajuta %sSiia%s et minna oma Postkasti juurde';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Kasutaja Profiil :: %s'; // %s is username 
$lang['About_user'] = 'K�ik kasutaja %s kohta'; // %s is username

$lang['Preferences'] = 'Eelistused';
$lang['Items_required'] = 'T�rniga * t�histatud lahtrid on kohustuslikud.';
$lang['Registration_info'] = 'Liitumisinfo';
$lang['Profile_info'] = 'Profiili info';
$lang['Profile_info_warn'] = 'See informatsioon on avalik';
$lang['Avatar_panel'] = 'Avatari kontrollpaneel';
$lang['Avatar_gallery'] = 'Avataride galerii';

$lang['Website'] = 'Koduleht';
$lang['Location'] = 'Asukoht';
$lang['Contact'] = 'V�ta �hendust kasutajaga';
$lang['Email_address'] = 'Mailiaadress';
$lang['Email'] = 'E-mail';
$lang['Send_private_message'] = 'Saada privaats�num';
$lang['Hidden_email'] = '[ VarjOtsi selle kasutaja postitusi';
$lang['Interests'] = 'Huvid';
$lang['Occupation'] = 'Amet'; 
$lang['Poster_rank'] = 'Tiitel';

$lang['Total_posts'] = 'Postitusi kokku';
$lang['User_post_pct_stats'] = '%.2f%% k�igist postitustest'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f postitust p�evas'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Leia k�ik kasutaja %s postitused'; // Find all posts by username

$lang['No_user_id_specified'] = 'Vabandame, aga sellist kasutajat ei ole.';
$lang['Wrong_Profile'] = 'YSa ei saa v��rast profiili muuta.';

$lang['Only_one_avatar'] = 'Ainult �hte liiki avatar on lubatud';
$lang['File_no_data'] = 'Sinu antud aadressil olev fail on t�hi';
$lang['No_connection_URL'] = 'Sinu antud aadressiga ei saadud �hendust';
$lang['Incomplete_URL'] = 'Sinu antud aadress on poolik';
$lang['Wrong_remote_avatar_format'] = 'Ebakorrektne avatari aadress';
$lang['No_send_account_inactive'] = 'Vabandame, aga sinu parooli ei saa taastada, kuna su konto ei ole aktiivne.';

$lang['Always_smile'] = 'Alati luba emotikone';
$lang['Always_html'] = 'Alati luba HTMLi';
$lang['Always_bbcode'] = 'Alati luba BBCode';
$lang['Always_add_sig'] = 'Alati lisa allkiri';
$lang['Always_notify'] = 'Teata mulle vastustest';
$lang['Always_notify_explain'] = 'Saada mulle kiri, kui keegi vastab teemadele, kuhu mina olen kirjutanud.';

$lang['Board_style'] = 'Foorumi Stiil';
$lang['Board_lang'] = 'Foorumi keel';
$lang['No_themes'] = 'Andmebaasis pole stiile';
$lang['Timezone'] = 'Ajatsoon';
$lang['Date_format'] = 'Kuup�eva formaat';
$lang['Date_format_explain'] = 'Kasuta samu s�mboleid mis PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> funktsiooni puhul.';
$lang['Signature'] = 'Allkiri';
$lang['Signature_explain'] = 'See on tekst, mis lisatakse su postitustele. Maksimaalselt %d s�mbolit';
$lang['Public_view_email'] = 'Alati n�ita mu e-maili';

$lang['Current_password'] = 'Praegune parool';
$lang['New_password'] = 'Uus parool';
$lang['Confirm_password'] = 'Parool uuesti';
$lang['Confirm_password_explain'] = 'Sa pead t�psustama oma praeguse parooli, kui sa soovid oma e-maili v�i parooli muuta';
$lang['password_if_changed'] = 'Parooli on vaja ainult selle muutmisel';
$lang['password_confirm_if_changed'] = 'Parooli on vaja korrata ainult siis, kui sa seda muutsid';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Saad kuvada v�ikse omavalitud pildi postituste k�rvale. Maksimaalne laius on %d pixlit, maksimaalne k�rgus on %d pixlit ja faili suurus peab j��ma alla %d KB.';
$lang['Upload_Avatar_file'] = 'Uploadi avatar oma arvutist';
$lang['Upload_Avatar_URL'] = 'Uploadi avatar internetiaadressilt';
$lang['Upload_Avatar_URL_explain'] = 'Sisesta avatari aadress. See kopeeritakse siia.';
$lang['Pick_local_Avatar'] = 'Vali avatar galeriist';
$lang['Link_remote_Avatar'] = 'Lingi lehev�lisele avatarile';
$lang['Link_remote_Avatar_explain'] = 'Sisesta avatari aadress.';
$lang['Avatar_URL'] = 'Avatari URL';
$lang['Select_from_gallery'] = 'Vali avatar galeriist';
$lang['View_avatar_gallery'] = 'N�ita galeriid';

$lang['Select_avatar'] = 'Vali avatar';
$lang['Return_profile'] = 'CKatkesta';
$lang['Select_category'] = 'Vali kategooria';

$lang['Delete_Image'] = 'Kustuta Pilt';
$lang['Current_Image'] = 'Praegune pilt';

$lang['Notify_on_privmsg'] = 'Teavita uue privaats�numi saabumisest';
$lang['Popup_on_privmsg'] = 'Uue privaats�numi saabudes avaneb pop-up'; 
$lang['Popup_on_privmsg_explain'] = 'M�nede stiilide puhul v�ib avaneda privaats�numi saabumise puhul pop-up aken.';
$lang['Hide_user'] = 'Varja oma foorumilolekut';

$lang['Profile_updated'] = 'Su profiil on uuendatud';
$lang['Profile_updated_inactive'] = 'Su profiil on uuendatud. Sa muutsid t�htsaid andmeid ja seet�ttu pole su konto enam aktiivne. Selle aktiveerimiseks kontrolli oma e-maili , et seda aktiveerida. Kui on vaja administraatori poolt aktiveerimist, siis oota kuni ta seda teeb.';

$lang['Password_mismatch'] = 'Sinu sisestatud paroolid ei kattunud.';

$lang['Current_password_mismatch'] = 'Sa sisestasid vale parooli.';
$lang['Password_long'] = 'Parool ei tohi olla pikem kui 32 t�hem�rki.';
$lang['Too_many_registers'] = 'Sa oled �ritanud liiga palju kordi registreeruda. Palun proovi hiljem uuesti.';
$lang['Username_taken'] = 'Vabandame, aga see kasutajanimi on juba kasutusel.';
$lang['Username_invalid'] = 'Vabandame, aga s�mbolid nagu \' on keelatud.';
$lang['Username_disallowed'] = 'Vabandame, aga see kasutajanimi on keelatud.';
$lang['Email_taken'] = 'Vabandame, aga see e-mail on juba kasutusel.';
$lang['Email_banned'] = 'Vabandame, aga see e-mail on bannitud.';
$lang['Email_invalid'] = 'Vabandame, aga teie sisestatud e-mail ei ole korrektne.';
$lang['Signature_too_long'] = 'Su signatuur on liiga pikk.';
$lang['Fields_empty'] = 'Sa pead vajalikud v�ljad �ra t�itma';
$lang['Avatar_filetype'] = 'Avatari failit��p peab olema .jpg, .gif v�i .png';
$lang['Avatar_filesize'] = 'Avatari failisuurus peab olema alla %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'Avatari peab olema v�hem kui %d pikslit lai ja %d pikslit k�rge'; 

$lang['Welcome_subject'] = 'Teretulemast %s Foorumisse'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Uus kasutaja';
$lang['Account_activated_subject'] = 'Konto aktiveeritud';

$lang['Account_added'] = 'Sinu konto on loodud. V�id n��d sisse logida.';
$lang['Account_inactive'] = 'Sinu konto on loodud. Selle aktiveerimiseks kontrolli oma e-maili. Sealt leiad t�psemad juhised.';
$lang['Account_inactive_admin'] = 'Sinu konto on loodud. See vajab administraatori poolt aktiveerimist, enne kui saad seda kasutada. Teda on sellest teavitatud.';
$lang['Account_active'] = 'Sinu konto on n��d aktiivne';
$lang['Account_active_admin'] = 'Konto on aktiveeritud';
$lang['Reactivate'] = 'Taasaktiveeri konto!';
$lang['Already_activated'] = 'Sa oled oma konto juba aktiveerinud';
$lang['COPPA'] = 'Sinu konto on loodud aga see tuleb heaks kiita. Palun kontrolli oma e-maili juhiste saamiseks.';

$lang['Registration'] = 'Registreerimise n�uded';
$lang['Reg_agreement'] = 'Selle foorumi administraatorid ja moderaatorid annavad oma parima, et eemaldada siit ebasobilik materjal. Siiski on v�imatu k�iki postitusi l�bi vaadata. Seep�rast pead sa n�ustuma, et administraatorid, moderaatorid ja webmasterid ei vastuta siinsete postituste sisu eest ja need ei esinda nende huve.<br /><br />Sul ei ole lubatud postitada s�ndusetuid, solvavaid, viha �hutavaid, �hvardavaid, seksuaalseid v�i muid materjale, mis v�ivad olla vastuolus kehtivate seadustega. Seda eirates v�id sa saada kohese ja alatise banni ja sinu interneti teenusepakkujat teavitatakse sellest. Iga postituse IP aadress salvestatakse, et aidata neid tingimusi t�ide viia. Sa n�ustud, et webmasteritel, administraatoritel ja moderaatoritel on igal ajal �igus eemaldada, muuta, liigutada v�i sulgeda iga teemat, kui nad seda vajalikuks peavad. Kasutajana n�ustud sa, et sinu informatsioon talletatakse andmebaasis. Ilma sinu n�usolekuta ei jagata seda informatsiooni k�rvalistele isikutele aga foorumi meeskond ei ole vastutav potentsiaalsete h�kkimiste eest, mille kaudu v�ib infot lekkida.<br /><br />See foorum kasutab k�psiseid, milles salvestatakse sinu arvutis informatsiooni. Need ei sisalda personaalset infot. E-maili aadressi kasutatakse ainult registreerimisel ja parooli muutmisel ning taastamisel.<br /><br />Registreerides n�ustud sa nende tingimustega.';

$lang['Agree_under_13'] = 'Ma n�ustun nende tingimustega ja olen <b>noorem</b> kui 13 aastat vana';
$lang['Agree_over_13'] = 'Ma n�ustun nende tingimustega ja olen <b>vanem</b> v�i <b>t�pselt</b> 13 aastat vana';
$lang['Agree_not'] = 'Ma ei n�ustu nende tingimustega';

$lang['Wrong_activation'] = 'Aktiveeriisnumber ei kattu �hegi andmebaasis olevaga.';
$lang['Send_password'] = 'Saada mulle uus parool'; 
$lang['Password_updated'] = 'Uus parool on loodud. T�psema info saamiseks kontrolli oma e-maili.';
$lang['No_email_match'] = 'Sinu antd e-mail ei kattu selle kasutaja e-mailiga.';
$lang['New_password_activation'] = 'Uue parooli aktiveerimine';
$lang['Password_activated'] = 'Sinu konto on taas aktiveeritud. Sisse logimiseks kasuta e-mailis saadud parooli.';

$lang['Send_email_msg'] = 'Saada e-mail';
$lang['No_user_specified'] = 'Kasutajat ei t�psustatud';
$lang['User_prevent_email'] = 'See kasutaja ei soovi saada e-maile. Proovi talle privaats�numit saata.';
$lang['User_not_exist'] = 'Sellist kasutajat ei ole';
$lang['CC_email'] = 'Saada koopia kirjast iseendale';
$lang['Email_message_desc'] = 'See teade saadetakse tavatekstina. �ra kirjuta sinna HTMLi v�i BBCode-i.';
$lang['Flood_email_limit'] = 'Sa ei saa hetkel uut e-maili saata. Proovi hiljem uuesti.';
$lang['Recipient'] = 'Saaja';
$lang['Email_sent'] = 'E-mail on saadetud.';
$lang['Send_email'] = 'Saada e-mail';
$lang['Empty_subject_email'] = 'Sa pead e-maili teema m�rkima.';
$lang['Empty_message_email'] = 'Sa pead sisestama s�numi.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'Sisestatud kood oli vale';
$lang['Too_many_registers'] = 'Sa oled �ritanud liiga palju kordi registreerida. Proovi hiljem uuesti.';
$lang['Confirm_code_impaired'] = 'Kui sul on n�gemisprobleemid v�i pole v�imeline seda koodi lugema, kontakteeru %sAdministraatoriga%s.';
$lang['Confirm_code'] = 'Kinnituskood';
$lang['Confirm_code_explain'] = 'Sisesta kood nii nagu sa seda n�ed. Suurtel ja v�ikestel t�htedel ei ole vahet ja nullil on diagonaalne kriips keskelt l�bi.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Vali sorteerimismeetod';
$lang['Sort'] = 'Sorteeri';
$lang['Sort_Top_Ten'] = 'Postitajate Top 10';
$lang['Sort_Joined'] = 'Liitumiskuup�ev';
$lang['Sort_Username'] = 'Kasutajanimi';
$lang['Sort_Location'] = 'Asukoht';
$lang['Sort_Posts'] = 'Postituste arv';
$lang['Sort_Email'] = 'E-mail';
$lang['Sort_Website'] = 'Koduleht';
$lang['Sort_Ascending'] = 'T�usev';
$lang['Sort_Descending'] = 'Kahanev';
$lang['Order'] = 'J�rjekord';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Grupi Kontrollpaneel';
$lang['Group_member_details'] = 'Grupi Liikmete Info';
$lang['Group_member_join'] = 'Liitu Grupiga';

$lang['Group_Information'] = 'Grupi Info';
$lang['Group_name'] = 'Grupi nimi';
$lang['Group_description'] = 'Grupi kirjeldus';
$lang['Group_membership'] = 'Grupi liikmeskond';
$lang['Group_Members'] = 'Grupi liikmed';
$lang['Group_Moderator'] = 'Grupi moderaator';
$lang['Pending_members'] = 'Ootavad liikmed';

$lang['Group_type'] = 'Grupi liik';
$lang['Group_open'] = 'Avatud';
$lang['Group_closed'] = 'Suletud';
$lang['Group_hidden'] = 'Varjatud';

$lang['Current_memberships'] = 'Grupid, kus sa oled liige';
$lang['Non_member_groups'] = 'Grupid, kus sa ei ole liige';
$lang['Memberships_pending'] = 'Ootel olevad grupid';

$lang['No_groups_exist'] = '�htegi gruppi ei ole';
$lang['Group_not_exist'] = 'Sellist kasutajagruppi ei ole';

$lang['Join_group'] = 'Liitu grupiga';
$lang['No_group_members'] = 'Selles grupis ei ole liikmeid';
$lang['Group_hidden_members'] = 'See grupp on peidetud; Sa ei saa selle liikmeid vaadata';
$lang['No_pending_group_members'] = 'Sellel grupil pole �htegi liiget ootel';
$lang['Group_joined'] = 'Sa oled edukalt selle grupiga liitunud.<br />Sulle teatatakse, kui su liitumine grupi moderaatori poolt heaks kiidetakse.';
$lang['Group_request'] = 'Sinu gruppi soovitakse liituda.';
$lang['Group_approved'] = 'Sind on gruppi vastu v�etud.';
$lang['Group_added'] = 'Sind on lisatud sellesse kasutajagruppi.'; 
$lang['Already_member_group'] = 'Sa juba oled selle grupi liige';
$lang['User_is_member_group'] = 'Kasutaja on juba selle grupi liige';
$lang['Group_type_updated'] = 'Su Grupi liik edukalt muudetud.';
$lang['Could_not_add_user'] = 'Sinu valitud kasutajat ei ole.';
$lang['Could_not_anon_user'] = 'Anon��mset inimest ei saa teha grupi liikmeks.';

$lang['Confirm_unsub'] = 'Oled sa kindel, et soovid sellest grupist lahkuda?';
$lang['Confirm_unsub_pending'] = 'Sinu liitumist pole veel heaks kiidetud; oled sa kindel, et soovid grupist lahkuda?';

$lang['Unsub_success'] = 'Sa lahkusid grupist.';

$lang['Approve_selected'] = 'V�ta valitud vastu';
$lang['Deny_selected'] = 'Keela valitud';
$lang['Not_logged_in'] = 'Grupiga liitumiseks pead olema sisse logitud.';
$lang['Remove_selected'] = 'Eemalda valitud';
$lang['Add_member'] = 'Lisa Liige';
$lang['Not_group_moderator'] = 'Sul ei ole selleks piisavalt volitusi.';

$lang['Login_to_join'] = 'Logi sisse et liituda v�i korrastada gruppe';
$lang['This_open_group'] = 'See on avatud grupp: kliki, et liituda';
$lang['This_closed_group'] = 'See on suletud grupp: uusi liikmeid ei v�eta';
$lang['This_hidden_group'] = 'See on varjatud grupp: kasutajate automaatne lisamine ei ole lubatud';
$lang['Member_this_group'] = 'Sa oled selle grupi liige';
$lang['Pending_this_group'] = 'Sa oled selles grupis ootel';
$lang['Are_group_moderator'] = 'Sa oled grupi moderaator';
$lang['None'] = 'Puudub';

$lang['Subscribe'] = 'Liitu';
$lang['Unsubscribe'] = 'Lahku';
$lang['View_Information'] = 'Vaata infot';


//
// Search
//
$lang['Search_query'] = 'Otsing';
$lang['Search_options'] = 'Otsingu valikud';

$lang['Search_keywords'] = 'Otsi M�rks�nu';
$lang['Search_keywords_explain'] = 'Sa saad kasutada <u>AND</u>, et defineerida s�nu, mis peavad vastuses olema. Kasuta <u>OR</u>, defineerimaks s�nu, mis v�ivad vastuses olla ja <u>NOT</u>, et m�rkida s�nu, mida ei tohi olla. Kasuta * , kui otsid osalisi vasteid';
$lang['Search_author'] = 'Otsi Autorit';
$lang['Search_author_explain'] = 'Kasuta *, kui otsid osalisi vasteid';

$lang['Search_for_any'] = 'Otsi k�iki s�nu v�i kasuta sisestust nii nagu see on';
$lang['Search_for_all'] = 'Otsi k�iki s�nu';
$lang['Search_title_msg'] = 'Otsi teemade pealkirjade ja postituste hulgast';
$lang['Search_msg_only'] = 'Otsi ainult postitustest';

$lang['Return_first'] = 'Kuva esimesed'; // followed by xxx characters in a select box
$lang['characters_posts'] = 't�hem�rki postitustest';

$lang['Search_previous'] = 'Otsi alates'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Sorteeri';
$lang['Sort_Time'] = 'Postituse Aeg';
$lang['Sort_Post_Subject'] = 'Pealjkiri';
$lang['Sort_Topic_Title'] = 'Teema';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'Alafoorum';

$lang['Display_results'] = 'Kuva vastused';
$lang['All_available'] = 'K�ik v�imalikud';
$lang['No_searchable_forums'] = 'Sul ei ole �igus k�igist alafoorumitest otsida.';

$lang['No_search_match'] = 'Ei leitud �htegi tulemust';
$lang['Found_search_match'] = 'Otsing leidis %d vastuse'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Otsing leidis %d vastust'; // eg. Search found 24 matches

$lang['Close_window'] = 'Sulge Aken';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Vabandame, aga ainult %s saavad siia alafoorumisse teatisi postitada.';
$lang['Sorry_auth_sticky'] = 'Vabandame, aga ainult %s saavad siia alafoorumisse kleepse postitada.'; 
$lang['Sorry_auth_read'] = 'Vabandame, aga ainult %s saavad seda alafoorumit lugeda.'; 
$lang['Sorry_auth_post'] = 'Vabandame, aga ainult %s saavad siia alafoorumisse teemasid teha.'; 
$lang['Sorry_auth_reply'] = 'Vabandame, aga ainult %s saavad siin alafoorumis postitstele vastata.';
$lang['Sorry_auth_edit'] = 'Vabandame, aga ainult %s saavad siin postitusi muuta.'; 
$lang['Sorry_auth_delete'] = 'Vabandame, aga ainult %s saavad siin postitusi kustutada.';
$lang['Sorry_auth_vote'] = 'Vabandame, aga ainult %s saavad siin alafoorumis h��letada.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>anon��msed kasutajad</b>';
$lang['Auth_Registered_Users'] = '<b>rliitunud kasutajad</b>';
$lang['Auth_Users_granted_access'] = '<b>eri�igustega kasutajad</b>';
$lang['Auth_Moderators'] = '<b>moderaatorid</b>';
$lang['Auth_Administrators'] = '<b>administraatorid</b>';

$lang['Not_Moderator'] = 'Sa ei ole selle alafoorumi moderaator.';
$lang['Not_Authorised'] = 'Ei ole volitusi seda teha';

$lang['You_been_banned'] = 'Sind on sellelt foorumilt bannitud.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Foorumil pole �htegi registreeritud kasutajat, '; // There are 0 Registered and
$lang['Reg_users_online'] = 'Foorumil on %d liitunud kasutajat, '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Foorumil on %d liitunud kasutaja, '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = 'pole �htegi varjatud kasutajat.'; // 0 Hidden users online
$lang['Hidden_users_online'] = '%d varjatud kasutajat.'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d varjatud kasutaja.'; // 1 Hidden users online
$lang['Guest_users_online'] = '%d k�lalist'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Pole �htegi k�lalist'; // There are 10 Guest users online
$lang['Guest_user_online'] = '%d k�laline'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'Hetkel pole �htegi kasutajat foorumil';

$lang['Online_explain'] = 'Andmed p�hinevad viimase viie minuti p�hjal';

$lang['Forum_Location'] = 'Alafoorumi Asukoht';
$lang['Last_updated'] = 'Viimati uuendatud';

$lang['Forum_index'] = 'Pealehel';
$lang['Logging_on'] = 'Logib sisse';
$lang['Posting_message'] = 'Postitab teadet';
$lang['Searching_forums'] = 'Kasutab Otsingut';
$lang['Viewing_profile'] = 'Vaatab Porfiili';
$lang['Viewing_online'] = 'Vaatab foorumil olijate nimekirja';
$lang['Viewing_member_list'] = 'Vaatab liikmete nimekirja';
$lang['Viewing_priv_msgs'] = 'Loeb privaats�numeid';
$lang['Viewing_FAQ'] = 'Loeb KKK';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Moderaatori Kontrollpaneel';
$lang['Mod_CP_explain'] = 'Siin saad sa teostada massmodereerimist - korraga kustutada, liigutada, sulgeda v�i avada suure hulga teemasid.';

$lang['Select'] = 'Vali';
$lang['Delete'] = 'Kustuta';
$lang['Move'] = 'Liiguta';
$lang['Lock'] = 'Sulge';
$lang['Unlock'] = 'Ava';

$lang['Topics_Removed'] = 'Valitud teemad on edukalt eemaldatud.';
$lang['Topics_Locked'] = 'Valitud teemad suleti.';
$lang['Topics_Moved'] = 'Valitud teemad liigutati.';
$lang['Topics_Unlocked'] = 'Valitud teemad avati.';
$lang['No_Topics_Moved'] = '�htegi teemat ei liigutatud.';

$lang['Confirm_delete_topic'] = 'Oled sa kindel, et soovid valitud teema(d) eemaldada?';
$lang['Confirm_lock_topic'] = 'Oled sa kindel, et soovid valitud teema(d) sulgeda?';
$lang['Confirm_unlock_topic'] = 'Oled sa kindel, et soovid valitud teema(d) avada?';
$lang['Confirm_move_topic'] = 'Oled sa kindel, et soovid valitud teema(d) liigutada?';

$lang['Move_to_forum'] = 'Liiguta alafoorumisse';
$lang['Leave_shadow_topic'] = 'J�ta link vanasse alafoorumisse.';

$lang['Split_Topic'] = 'Teema Poolitamise Kontrollpaneel';
$lang['Split_Topic_explain'] = 'Siin saad jagada teema pooleks. Selleks vali vastavad postitused v�i m�rgi �ks, mille juurest poolitatakse';
$lang['Split_title'] = 'Uue teema pealkiri';
$lang['Split_forum'] = 'Uue teema alafoorum';
$lang['Split_posts'] = 'Poolita valitud teated';
$lang['Split_after'] = 'Poolita valitud teate juurest';
$lang['Topic_split'] = 'Teema on edukalt poolitatud';

$lang['Too_many_error'] = 'Sa valisid liiga palju postitusi. �hest kohast poolitamiseks pead sa valima ainult �he!';

$lang['None_selected'] = 'Sa pead valima teema.';
$lang['New_forum'] = 'Uus alafoorum';

$lang['This_posts_IP'] = 'Selle postituse IP';
$lang['Other_IP_this_user'] = 'Teised IP aadressid, millelt see kasutaja on postitanud';
$lang['Users_this_IP'] = 'Teised kasutajad, kes on sellelt IP-lt postitanud';
$lang['IP_info'] = 'IP Info';
$lang['Lookup_IP'] = 'Otsi IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'K�ik ajad on %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Tundi';
$lang['-11'] = 'GMT - 11 Tundi';
$lang['-10'] = 'GMT - 10 Tundi';
$lang['-9'] = 'GMT - 9 Tundi';
$lang['-8'] = 'GMT - 8 Tundi';
$lang['-7'] = 'GMT - 7 Tundi';
$lang['-6'] = 'GMT - 6 Tundi';
$lang['-5'] = 'GMT - 5 Tundi';
$lang['-4'] = 'GMT - 4 Tundi';
$lang['-3.5'] = 'GMT - 3.5 Tundi';
$lang['-3'] = 'GMT - 3 Tundi';
$lang['-2'] = 'GMT - 2 Tundi';
$lang['-1'] = 'GMT - 1 Tundi';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Tund';
$lang['2'] = 'GMT + 2 Tundi';
$lang['3'] = 'GMT + 3 Tundi';
$lang['3.5'] = 'GMT + 3.5 Tundi';
$lang['4'] = 'GMT + 4 Tundi';
$lang['4.5'] = 'GMT + 4.5 Tundi';
$lang['5'] = 'GMT + 5 Tundi';
$lang['5.5'] = 'GMT + 5.5 Tundi';
$lang['6'] = 'GMT + 6 Tundi';
$lang['6.5'] = 'GMT + 6.5 Tundi';
$lang['7'] = 'GMT + 7 Tundi';
$lang['8'] = 'GMT + 8 Tundi';
$lang['9'] = 'GMT + 9 Tundi';
$lang['9.5'] = 'GMT + 9.5 Tundi';
$lang['10'] = 'GMT + 10 Tundi';
$lang['11'] = 'GMT + 11 Tundi';
$lang['12'] = 'GMT + 12 Tundi';
$lang['13'] = 'GMT + 13 Tundi';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Tundi';
$lang['tz']['-11'] = 'GMT - 11 Tundi';
$lang['tz']['-10'] = 'GMT - 10 Tundi';
$lang['tz']['-9'] = 'GMT - 9 Tundi';
$lang['tz']['-8'] = 'GMT - 8 Tundi';
$lang['tz']['-7'] = 'GMT - 7 Tundi';
$lang['tz']['-6'] = 'GMT - 6 Tundi';
$lang['tz']['-5'] = 'GMT - 5 Tundi';
$lang['tz']['-4'] = 'GMT - 4 Tundi';
$lang['tz']['-3.5'] = 'GMT - 3.5 Tundi';
$lang['tz']['-3'] = 'GMT - 3 Tundi';
$lang['tz']['-2'] = 'GMT - 2 Tundi';
$lang['tz']['-1'] = 'GMT - 1 Tundi';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Tund';
$lang['tz']['2'] = 'GMT + 2 Tundi';
$lang['tz']['3'] = 'GMT + 3 Tundi';
$lang['tz']['3.5'] = 'GMT + 3.5 Tundi';
$lang['tz']['4'] = 'GMT + 4 Tundi';
$lang['tz']['4.5'] = 'GMT + 4.5 Tundi';
$lang['tz']['5'] = 'GMT + 5 Tundi';
$lang['tz']['5.5'] = 'GMT + 5.5 Tundi';
$lang['tz']['6'] = 'GMT + 6 Tundi';
$lang['tz']['6.5'] = 'GMT + 6.5 Tundi';
$lang['tz']['7'] = 'GMT + 7 Tundi';
$lang['tz']['8'] = 'GMT + 8 Tundi';
$lang['tz']['9'] = 'GMT + 9 Tundi';
$lang['tz']['9.5'] = 'GMT + 9.5 Tundi';
$lang['tz']['10'] = 'GMT + 10 Tundi';
$lang['tz']['11'] = 'GMT + 11 Tundi';
$lang['tz']['12'] = 'GMT + 12 Tundi';
$lang['tz']['13'] = 'GMT + 13 Tundi';

$lang['datetime']['Sunday'] = 'P�hap�ev';
$lang['datetime']['Monday'] = 'Esmasp�ev';
$lang['datetime']['Tuesday'] = 'Teisp�ev';
$lang['datetime']['Wednesday'] = 'Kolmap�ev';
$lang['datetime']['Thursday'] = 'Neljap�ev';
$lang['datetime']['Friday'] = 'Reede';
$lang['datetime']['Saturday'] = 'Laup�ev';
$lang['datetime']['Sun'] = 'P�h';
$lang['datetime']['Mon'] = 'Esm';
$lang['datetime']['Tue'] = 'Teis';
$lang['datetime']['Wed'] = 'Kolm';
$lang['datetime']['Thu'] = 'Nelj';
$lang['datetime']['Fri'] = 'Reede';
$lang['datetime']['Sat'] = 'Laup';
$lang['datetime']['January'] = 'Jaanuar';
$lang['datetime']['February'] = 'Veebruar';
$lang['datetime']['March'] = 'M�rts';
$lang['datetime']['April'] = 'Aprill';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['June'] = 'Juuni';
$lang['datetime']['July'] = 'Juuli';
$lang['datetime']['August'] = 'August';
$lang['datetime']['September'] = 'September';
$lang['datetime']['October'] = 'Oktoober';
$lang['datetime']['November'] = 'November';
$lang['datetime']['December'] = 'Detsember';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Veeb';
$lang['datetime']['Mar'] = 'M�rts';
$lang['datetime']['Apr'] = 'Apr';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['Jun'] = 'Juun';
$lang['datetime']['Jul'] = 'Juul';
$lang['datetime']['Aug'] = 'Aug';
$lang['datetime']['Sep'] = 'Sept';
$lang['datetime']['Oct'] = 'Okt';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dets';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informatioon';
$lang['Critical_Information'] = 'T�htis Info';

$lang['General_Error'] = '�ldviga';
$lang['Critical_Error'] = 'Kriitiline Viga';
$lang['An_error_occured'] = 'Viga';
$lang['A_critical_error'] = 'Kriitiline Viga';

//
// That's all, Folks!
// -------------------------------------------------

?>