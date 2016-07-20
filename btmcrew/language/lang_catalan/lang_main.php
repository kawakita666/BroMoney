<?php
/***************************************************************************
 *                            lang_main.php [Catalan]
 *                              -------------------
 *     begin                : Wed Jul 10 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.1.2.2 2002/11/14 23:31:32 psotfx Exp $
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
// Traducci�                : Isaac Garcia Abrodos
// Nom d'usuari             : xEik

//
// El format del fitxer �s ---> $lang['message'] = "text";
//
// Tamb� hauries d'intentar configurar locale i la codificaci� de car�cters (m�s direcci�). La codificaci� i direcci� 
// seran enviats a la plantilla. El locale pot ser que funcioni o no, dep�n del suport del Sistema Operatiu i la sintaxi
// varia ... esculli com millor li sembli!
//

$lang['ENCODING'] = "iso-8859-1";
$lang['DIRECTION'] = "ltr";
$lang['LEFT'] = "left";
$lang['RIGHT'] = "right";
$lang['DATE_FORMAT'] =  "d M Y"; // Aix� s'hauria de canviar al format per defecte del seu idioma, format com el de php date()

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
 $lang['TRANSLATION_INFO'] = 'Traducci�: Isaac Garcia Abrodos';
 
//
// Comuns, aquests termes s'utilitzen de
// forma extensiva en diverses p�gines
//
$lang['Forum'] = "F�rum";
$lang['Category'] = "Categoria";
$lang['Topic'] = "Tema";
$lang['Topics'] = "Temes";
$lang['Replies'] = "Respostes";
$lang['Views'] = "Lectures";
$lang['Post'] = "Missatge";
$lang['Posts'] = "Missatges";
$lang['Posted'] = "Publicat";
$lang['Username'] = "Nom d'usuari";
$lang['Password'] = "Contrasenya";
$lang['Email'] = "Email";
$lang['Poster'] = "Autor";
$lang['Author'] = "Autor";
$lang['Time'] = "Hora";
$lang['Hours'] = "Hores";
$lang['Message'] = "Missatge";

$lang['1_Day'] = "1 Dia";
$lang['7_Days'] = "7 Dies";
$lang['2_Weeks'] = "2 Setmanes";
$lang['1_Month'] = "1 Mes";
$lang['3_Months'] = "3 Mesos";
$lang['6_Months'] = "6 Mesos";
$lang['1_Year'] = "1 Any";

$lang['Go'] = "Anar";
$lang['Jump_to'] = "Canviar a";
$lang['Submit'] = "Trametre";
$lang['Reset'] = "Desfer canvis";
$lang['Cancel'] = "Cancel�lar";
$lang['Preview'] = "Vista Preliminar";
$lang['Confirm'] = "Confirmar";
$lang['Spellcheck'] = "Ortografia";
$lang['Yes'] = "S�";
$lang['No'] = "No";
$lang['Enabled'] = "Habilitat";
$lang['Disabled'] = "Deshabilitat";
$lang['Error'] = "Error";

$lang['Next'] = "Seg�ent";
$lang['Previous'] = "Anterior";
$lang['Goto_page'] = "Anar a p�gina";
$lang['Joined'] = "Registrat";
$lang['IP_Address'] = "Direcci� IP";

$lang['Select_forum'] = "Selecciona un f�rum";
$lang['View_latest_post'] = "Veure l'�ltim missatge";
$lang['View_newest_post'] = "Veure el missatge m�s recent";
$lang['Page_of'] = "P�gina <b>%d</b> de <b>%d</b>"; // �s substitu�t per : P�gina 1 de 2 per exemple

$lang['ICQ'] = "N�mero ICQ";
$lang['AIM'] = "Direcci� AIM";
$lang['MSNM'] = "MSN Messenger";
$lang['YIM'] = "Yahoo Messenger";

$lang['Forum_Index'] = "�ndex del F�rum de %s";  // eg. �ndex del F�rum de Nom de la P�gina Web, %s es pot treure si ho prefereixes

$lang['Post_new_topic'] = "Publicar un tema nou";
$lang['Reply_to_topic'] = "Respondre al tema";
$lang['Reply_with_quote'] = "Respondre citant";

$lang['Click_return_topic'] = "Clica %saqu�%s per tornar al tema"; // %s's s�n pe als url, no els tregui!
$lang['Click_return_login'] = "Clica %saqu�%s per intentar-ho de nou";
$lang['Click_return_forum'] = "Clica %saqu�%s per tornar al f�rum";
$lang['Click_view_message'] = "Clica %saqu�%s per veure el teu missatge";
$lang['Click_return_modcp'] = "Clica %saqu�%s per tornar al Quadre de Control del Moderador";
$lang['Click_return_group'] = "Clica %saqu�%s per tornar a la Informaci� del Grup";

$lang['Admin_panel'] = "Anar al Quadre d'Administraci�";

$lang['Board_disable'] = "Ens sap greu per� aquest f�rum ara mateix no es troba disponible, si us plau intenti-ho de nou m�s tard";


//
// Cadenes de Cap�aleres Globals
//
$lang['Registered_users'] = "Usuaris Registrats:";
$lang['Browsing_forum'] = "Usuaris navegant aquest f�rum:";
$lang['Online_users_zero_total'] = "En total hi ha <b>0</b> usuaris connectats :: ";
$lang['Online_users_total'] = "En total hi ha <b>%d</b> usuaris connectats :: ";
$lang['Online_user_total'] = "En total hi ha <b>%d</b> usuari connectat :: ";
$lang['Reg_users_zero_total'] = "0 Registrats, ";
$lang['Reg_users_total'] = "%d Registrats, ";
$lang['Reg_user_total'] = "%d Registrat, ";
$lang['Hidden_users_zero_total'] = "0 Ocults i ";
$lang['Hidden_user_total'] = "%d Ocults i ";
$lang['Hidden_users_total'] = "%d Ocult i ";
$lang['Guest_users_zero_total'] = "0 Invitats";
$lang['Guest_users_total'] = "%d Invitats";
$lang['Guest_user_total'] = "%d Invitat";
$lang['Record_online_users'] = "El major nombre d'usuaris connectats fou <b>%s</b> el %s"; // primer %s = nombre d'usuaris, segon %s �s la data.

$lang['Admin_online_color'] = "%sAdministrador%s";
$lang['Mod_online_color'] = "%sModerador%s";

$lang['You_last_visit'] = "La teva darrera visita va ser el: %s"; // %s substitu�t per data i hora
$lang['Current_time'] = "Data i hora actual: %s"; // %s substitu�t per hora

$lang['Search_new'] = "Veure els missatges des de la teva darrera visita";
$lang['Search_your_posts'] = "Veure els teus missatges";
$lang['Search_unanswered'] = "Veure els missatges sense resposta";

$lang['Register'] = "Registrar-se";
$lang['Profile'] = "Perfil";
$lang['Edit_profile'] = "Editar el teu perfil";
$lang['Search'] = "Buscar";
$lang['Memberlist'] = "Llista de Membres";
$lang['FAQ'] = "FAQ";
$lang['BBCode_guide'] = "Guia BBCode";
$lang['Usergroups'] = "Grups d'Usuaris";
$lang['Last_Post'] = "Darrer Missatge";
$lang['Moderator'] = "Moderador";
$lang['Moderators'] = "Moderadors";


//
// Bloc de text d'estad�stiques
//
$lang['Posted_articles_zero_total'] = "Els nostres usuaris han publicat un total de <b>0</b> missatges"; // Nombre de missatges
$lang['Posted_articles_total'] = "Els nostres usuaris han publicat un total de <b>%d</b> missatges"; // Nombre de missatges
$lang['Posted_article_total'] = "Els nostres usuaris han publicat un total de <b>%d</b> missatge"; // Nombre de missatges
$lang['Registered_users_zero_total'] = "Tenim <b>0</b> usuaris registrats"; // # usuaris registrats
$lang['Registered_users_total'] = "Tenim <b>%d</b> usuaris registrats"; // # usuaris registrats
$lang['Registered_user_total'] = "Tenim <b>%d</b> usuari registrat"; // # usuaris registrats
$lang['Newest_user'] = "El darrer usuari registrat �s <b>%s%s%s</b>"; // un enlla� al nom d'usuari, /a 

$lang['No_new_posts_last_visit'] = "No hi ha missatges nous des de la teva darrera visita";
$lang['No_new_posts'] = "No hi ha missatges nous";
$lang['New_posts'] = "Hi ha missatges nous";
$lang['New_post'] = "Missatge nou";
$lang['No_new_posts_hot'] = "No hi ha missatges nous [ Popular ]";
$lang['New_posts_hot'] = "Hi ha missatges nous [ Popular ]";
$lang['No_new_posts_locked'] = "No hi ha missatges nous [ Bloquejat ]";
$lang['New_posts_locked'] = "Hi ha missatges nous [ Bloquejat ]";
$lang['Forum_is_locked'] = "El f�rum est� bloquejat";


//
// Inici de Sessi�
//
$lang['Enter_password'] = "Si us plau introdueix el teu nom d'usuari i contrasenya per iniciar la sessi�";
$lang['Login'] = "Iniciar Sessi�";
$lang['Logout'] = "Sortir";

$lang['Forgotten_password'] = "He oblidat la meva contrasenya";

$lang['Log_me_in'] = "Iniciar sessi� autom�ticament a cada visita";

$lang['Error_login'] = "Has escrit un nom d'usuari incorrecte o inactiu o b� una contrasenya incorrecta";


//
// P�gina d'�ndex
//
$lang['Index'] = "�ndex";
$lang['No_Posts'] = "No hi ha missatges";
$lang['No_forums'] = "Aquest tauler no t� f�rums";

$lang['Private_Message'] = "Missatge Privat";
$lang['Private_Messages'] = "Missatges Privats";
$lang['Who_is_Online'] = "Qui est� Connectat";

$lang['Mark_all_forums'] = "Marcar com a llegits tots els f�rums";
$lang['Forums_marked_read'] = "Tots els f�rums s'han marcat com a llegits";


//
// Veure f�rum
//
$lang['View_forum'] = "Veure F�rum";

$lang['Forum_not_exist'] = "El f�rum seleccionat no existeix";
$lang['Reached_on_error'] = "Has arribat per error a aquesta p�gina";

$lang['Display_topics'] = "Mostrar temes anteriors";
$lang['All_Topics'] = "Tots els Temes";

$lang['Topic_Announcement'] = "<b>Anunci:</b>";
$lang['Topic_Sticky'] = "<b>Permanent:</b>";
$lang['Topic_Moved'] = "<b>Mogut:</b>";
$lang['Topic_Poll'] = "<b>[ Enquesta ]</b>";

$lang['Mark_all_topics'] = "Marcar com a llegits tots els temes";
$lang['Topics_marked_read'] = "Els temes d'aquest f�rum s'han marcat com a llegits";

$lang['Rules_post_can'] = "<b>Pots</b> publicar nous temes en aquest f�rum";
$lang['Rules_post_cannot'] = "<b>No pots</b> publicar nous temes en aquest f�rum";
$lang['Rules_reply_can'] = "<b>Pots</b> respondre a temes en aquest f�rum";
$lang['Rules_reply_cannot'] = "<b>No pots</b> respondre a temes en aquest f�rum";
$lang['Rules_edit_can'] = "<b>Pots</b> editar els teus missatges en aquest f�rum";
$lang['Rules_edit_cannot'] = "<b>No pots</b> editar els teus missatges en aquest f�rum";
$lang['Rules_delete_can'] = "<b>Pots</b> esborrar els teus missatges en aquest f�rum";
$lang['Rules_delete_cannot'] = "<b>No pots</b> esborrar els teus missatges aquest f�rum";
$lang['Rules_vote_can'] = "<b>Pots</b> votar a les enquestes en aquest f�rum";
$lang['Rules_vote_cannot'] = "<b>No pots</b> votar a les enquestes en aquest f�rum";
$lang['Rules_moderate'] = "<b>Pots</b> %smoderar aquest f�rum%s"; // %s substitu�t per links a href, no treure! 

$lang['No_topics_post_one'] = "No hi ha temes en aquest f�rum<br />Clica sobre <b>Nou Tema</b> per publicar-ne un";


//
// Veure tema
//
$lang['View_topic'] = "Veure tema";

$lang['Guest'] = 'Invitat';
$lang['Post_subject'] = "Assumpte";
$lang['View_next_topic'] = "Veure tema seg�ent";
$lang['View_previous_topic'] = "Veure tema anterior";
$lang['Submit_vote'] = "Votar";
$lang['View_results'] = "Veure resultats";

$lang['No_newer_topics'] = "No hi ha temes posteriors en aquest f�rum";
$lang['No_older_topics'] = "No hi ha temes anteriors en aquest f�rum";
$lang['Topic_post_not_exist'] = "El tema o missatge sol�licitat no existeix";
$lang['No_posts_topic'] = "No existeix cap missatge per a aquest tema";

$lang['Display_posts'] = "Mostrar missatges d'anteriors";
$lang['All_Posts'] = "Tots els missatges";
$lang['Newest_First'] = "El m�s recent primer";
$lang['Oldest_First'] = "El m�s antic primer";

$lang['Back_to_top'] = "Tornar a dalt";

$lang['Read_profile'] = "Veure perfil de l'usuari"; 
$lang['Send_email'] = "Enviar email a l'usuari";
$lang['Visit_website'] = "Visitar p�gina web de l'autor";
$lang['ICQ_status'] = "Status ICQ";
$lang['Edit_delete_post'] = "Editar/Esborrar aquest missatge";
$lang['View_IP'] = "Veure IP de l'autor";
$lang['Delete_post'] = "Esborrar aquest missatge";

$lang['wrote'] = "escrigu�"; // precedeix al nom d'usuari i �s seguit pel text citat
$lang['Quote'] = "Cita"; // ve abans de la sortida de bbcode citar
$lang['Code'] = "Codi"; // ve abans de la sortida de bbcode codi

$lang['Edited_time_total'] = "Editat per darrera vegada per %s el %s, editat %d cop en total"; // Editat per darrera vegada per mi el 12 Oct 2001, editat 1 cop en total
$lang['Edited_times_total'] = "Editat per darrera vegada per %s el %s, editat %d cops en total"; // Editat per darrera vegada per mi el 12 Oct 2001, editat 2 cops en total

$lang['Lock_topic'] = "Bloquejar aquest tema";
$lang['Unlock_topic'] = "Desbloquejar aquest tema";
$lang['Move_topic'] = "Moure aquest tema";
$lang['Delete_topic'] = "Esborrar aquest tema";
$lang['Split_topic'] = "Separar aquest tema";

$lang['Stop_watching_topic'] = "Deixar d'observar aquest tema";
$lang['Start_watching_topic'] = "Observar aquest tema per respostes";
$lang['No_longer_watching'] = "Ja no est�s observant aquest tema";
$lang['You_are_watching'] = "Ara est�s observant aquest tema";

$lang['Total_votes'] = "Vots Totals";

//
// Publicar/Respondre (No missatges privats!)
//
$lang['Message_body'] = "Cos del missatge";
$lang['Topic_review'] = "Revisar tema";

$lang['No_post_mode'] = "No s'ha especificat mode de missatge"; // Si es crida posting.php sense un mode (newtopic/reply/delete/etc, no hauria de mostrar-se normalment)

$lang['Post_a_new_topic'] = "Publicar un nou tema";
$lang['Post_a_reply'] = "Publicar una resposta";
$lang['Post_topic_as'] = "Publicar tema com";
$lang['Edit_Post'] = "Editar missatge";
$lang['Options'] = "Opcions";

$lang['Post_Announcement'] = "Anunci";
$lang['Post_Sticky'] = "Permanent";
$lang['Post_Normal'] = "Normal";

$lang['Confirm_delete'] = "Est�s segur que vols esborrar aquest missatge?";
$lang['Confirm_delete_poll'] = "Est�s segur que vols esborrar aquesta enquesta?";

$lang['Flood_Error'] = "No pots publicar un altre missatge tan aviat despr�s del darrer, si us plau intenta-ho de nou en uns instants";
$lang['Empty_subject'] = "Has d'especificar un assumpte quan publiques un nou tema";
$lang['Empty_message'] = "Has d'escriure un missatge quan publiques";
$lang['Forum_locked'] = "Aquest f�rum est� bloquejat i no hi pots publicar, respondre o editar temes";
$lang['Topic_locked'] = "Aquest tema est� bloquejat i no hi pots editar temes ni publicar respostes";
$lang['No_post_id'] = "Has de seleccionar un missatge per editar";
$lang['No_topic_id'] = "Has de seleccionar un tema al qual respondre";
$lang['No_valid_mode'] = "Nom�s pots publicar, respondre editar o citar missatges, si us plau torni i intenti-ho de nou";
$lang['No_such_post'] = "No existeix tal missatge, si us plau torna i intenta-ho de nou";
$lang['Edit_own_posts'] = "Ho sentim per� nom�s pots editar els teus propis missatges";
$lang['Delete_own_posts'] = "Ho sentim per� nom�s pots esborrar els teus propis missatges";
$lang['Cannot_delete_replied'] = "Ho sentim per� no pots esborrar missatges als quals ja s'ahgi respost";
$lang['Cannot_delete_poll'] = "Ho sentim per� no pots esborrar una enquesta activa";
$lang['Empty_poll_title'] = "Has d'escriure un t�tol per a l'enquesta";
$lang['To_few_poll_options'] = "Has d'introduir almenys dues opcions per a l'enquesta";
$lang['To_many_poll_options'] = "Has provat d'introduir massa opcions a l'enquesta";
$lang['Post_has_no_poll'] = "Aquest missatge no t� enquesta";
$lang['Already_voted'] = "Ja has votat en aquesta enquesta";
$lang['No_vote_option'] = "Quan votes has d'especificar una opci�";

$lang['Add_poll'] = "Afegir una enquesta";
$lang['Add_poll_explain'] = "Si no vols afegir una enquesta al tema deixa els camps en blanc";
$lang['Poll_question'] = "Pregunta de l'enquesta";
$lang['Poll_option'] = "Opci� de l'enquesta";
$lang['Add_option'] = "Afegir opci�";
$lang['Update'] = "Actualitzar";
$lang['Delete'] = "Esborrar";
$lang['Poll_for'] = "Fer anar enquesta durant";
$lang['Days'] = "Dies"; // Aix� s'utilitza per Fer anar enquesta durant ... Dies + a admin_forums per netejar la taula
$lang['Poll_for_explain'] = "[ Escriu 0 o deixa-ho en blanc per que l'enquesta no tingui data l�mit ]";
$lang['Delete_poll'] = "Esborrar Enquesta";

$lang['Disable_HTML_post'] = "Deshabilitar HTML en aquest missatge";
$lang['Disable_BBCode_post'] = "Deshabilitar BBCode en aquest missatge";
$lang['Disable_Smilies_post'] = "Deshabilitar Smilies en aquest missatge";

$lang['HTML_is_ON'] = "l'HTML est� <u>ACTIU</u>";
$lang['HTML_is_OFF'] = "l'HTML est� <u>INACTIU</u>";
$lang['BBCode_is_ON'] = "el %sBBCode%s est� <u>ACTIU</u>"; // %s s�n substitu�ts per URL's que apunten al FAQ
$lang['BBCode_is_OFF'] = "el %sBBCode%s est� <u>INACTIU</u>";
$lang['Smilies_are_ON'] = "els Smileys estan <u>ACTIUS</u>";
$lang['Smilies_are_OFF'] = "els Smileys estan <u>INACTIUS</u>";

$lang['Attach_signature'] = "Adjuntar signatura (la signatura pot ser canviada al perfil)";
$lang['Notify'] = "Notifiqueu-me quan es publiqui una resposta";
$lang['Delete_post'] = "Esborrar aquest missatge";

$lang['Stored'] = "El teu missatge s'ha publicat correctament";
$lang['Deleted'] = "El teu missatge s'ha esborrat correctament";
$lang['Poll_delete'] = "La teva enquesta s'ha esborrat correctament";
$lang['Vote_cast'] = "El teu vot ha estat em�s";

$lang['Topic_reply_notification'] = "Notificaci� de Resposta al Tema";

$lang['bbcode_b_help'] = "Negreta: [b]text[/b]  (alt+b)";
$lang['bbcode_i_help'] = "Cursiva: [i]text[/i]  (alt+i)";
$lang['bbcode_u_help'] = "Subratllat: [u]text[/u]  (alt+u)";
$lang['bbcode_q_help'] = "Cita: [quote]text[/quote]  (alt+q)";
$lang['bbcode_c_help'] = "Codi: [code]codi[/code]  (alt+c)";
$lang['bbcode_l_help'] = "Llista: [list]text[/list] (alt+l)";
$lang['bbcode_o_help'] = "Llista ordenada: [list=]text[/list]  (alt+o)";
$lang['bbcode_p_help'] = "Inserir imatge: [img]http://url_imatge[/img]  (alt+p)";
$lang['bbcode_w_help'] = "Inserir URL: [url]http://url[/url] o [url=http://url]text URL[/url]  (alt+w)";
$lang['bbcode_a_help'] = "Tancar tots els marcadors de bbCode oberts";
$lang['bbcode_s_help'] = "Color: [color=red]text[/color]  Nota: Tamb� pots utilitzar color=#FF0000";
$lang['bbcode_f_help'] = "Mida: [size=x-small]text petit[/size]";

$lang['Emoticons'] = "Emoticons";
$lang['More_emoticons'] = "Veure m�s Emoticons";

$lang['Font_color'] = "Color de font";
$lang['color_default'] = "Predeterminat";
$lang['color_dark_red'] = "Roig Fosc";
$lang['color_red'] = "Roig";
$lang['color_orange'] = "Taronja";
$lang['color_brown'] = "Marr�";
$lang['color_yellow'] = "Groc";
$lang['color_green'] = "Verd";
$lang['color_olive'] = "Oliva";
$lang['color_cyan'] = "Cian";
$lang['color_blue'] = "Blau";
$lang['color_dark_blue'] = "Blau Fosc";
$lang['color_indigo'] = "�ndigo";
$lang['color_violet'] = "Violeta";
$lang['color_white'] = "Blanc";
$lang['color_black'] = "Negre";

$lang['Font_size'] = "Mida";
$lang['font_tiny'] = "Miniatura";
$lang['font_small'] = "Petita";
$lang['font_normal'] = "Normal";
$lang['font_large'] = "Gran";
$lang['font_huge'] = "Enorme";

$lang['Close_Tags'] = "Tancar marcadors";
$lang['Styles_tip'] = "Nota: Es poden aplicar estils r�pidament al text seleccionat";


//
// Missatgeria Privada
//
$lang['Private_Messaging'] = "Missatges Privats";

$lang['Login_check_pm'] = "Inicia una sessi� per veure els teus missatges privats";
$lang['New_pms'] = "Tens %d missatges nous"; // Tens 2 missatges nous
$lang['New_pm'] = "Tens %d missatge nou"; // Tens un missatge nou
$lang['No_new_pm'] = "No tens missatges nous";
$lang['Unread_pms'] = "Tens %d missatges sense llegir";
$lang['Unread_pm'] = "Tens %d missatge sense llegir";
$lang['No_unread_pm'] = "No tens missatges sense llegir";
$lang['You_new_pm'] = "Tens un missatge privat nou a la b�stia d'entrada";
$lang['You_new_pms'] = "Tens missatges nous a la b�stia d'entrada";
$lang['You_no_new_pm'] = "No tens missatges privats nous";

$lang['Unread_message'] = "Missatge no llegit";
$lang['Read_message'] = "Missatge llegit";

$lang['Read_pm'] = "Llegir missatge";
$lang['Post_new_pm'] = "Escriure missatge";
$lang['Post_reply_pm'] = "Respondre el missatge";
$lang['Post_quote_pm'] = "Citar el missatge";
$lang['Edit_pm'] = "Editar el missatge";

$lang['Inbox'] = "B�stia d'Entrada";
$lang['Outbox'] = "B�stia de Sortida";
$lang['Savebox'] = "Elements Guardats";
$lang['Sentbox'] = "Elements Enviats";
$lang['Flag'] = "Marca";
$lang['Subject'] = "Assumpte";
$lang['From'] = "De";
$lang['To'] = "Per";
$lang['Date'] = "Data";
$lang['Mark'] = "Marcar";
$lang['Sent'] = "Enviat";
$lang['Saved'] = "Guardat";
$lang['Delete_marked'] = "Esborrar Marcats";
$lang['Delete_all'] = "Esborrar Tots";
$lang['Save_marked'] = "Guardar Marcats"; 
$lang['Save_message'] = "Guardar Missatge";
$lang['Delete_message'] = "Esborrar Missatge";

$lang['Display_messages'] = "Mostrar missatges dels �ltims"; // Seguit pel # de dies/setmanes/mesos
$lang['All_Messages'] = "Tots els missatges";

$lang['No_messages_folder'] = "No tens missatges en aquesta carpeta";

$lang['PM_disabled'] = "Els Missatges Privats estan desactivats en aquest f�rum";
$lang['Cannot_send_privmsg'] = "Ho sentim per� l'administrador t'ha prohibit enviar missatges privats";
$lang['No_to_user'] = "Has d'especificar un nom d'usuari per enviar aquest missatge";
$lang['No_such_user'] = "Ho sentim per� aquest usuari no existeix";

$lang['Disable_HTML_pm'] = "Deshabilitar HTML en aquest missatge";
$lang['Disable_BBCode_pm'] = "Deshabilitar BBCode en aquest missatge";
$lang['Disable_Smilies_pm'] = "Deshabilitar Smilies en aquest missatge";

$lang['Message_sent'] = "El teu missatge ha estat enviat";

$lang['Click_return_inbox'] = "Clica %saqu�%s per tornar a la teva B�stia d'Entrada";
$lang['Click_return_index'] = "Clica %saqu�%s per tornar a l'�ndex";

$lang['Send_a_new_message'] = "Enviar un nou missatge privat";
$lang['Send_a_reply'] = "Respondre a un missatge privat";
$lang['Edit_message'] = "Editar missatge privat";

$lang['Notification_subject'] = "Ha arribat un missatge privat nou";

$lang['Find_username'] = "Trobar nom d'usuari";
$lang['Find'] = "Trobar";
$lang['No_match'] = "No s'ha trobat cap coincid�ncia";

$lang['No_post_id'] = "No s'ha especificat cap ID de missatge";
$lang['No_such_folder'] = "No existeix tal carpeta";
$lang['No_folder'] = "No s'ha especificat cap carpeta";

$lang['Mark_all'] = "Marcar tots";
$lang['Unmark_all'] = "Desmarcar tots";

$lang['Confirm_delete_pm'] = "Est�s segur que vols esborrar aquest missatge?";
$lang['Confirm_delete_pms'] = "Est�s segur que vols esborrar aquests missatges?";

$lang['Inbox_size'] = "La teva B�stia d'Entrada est� plena al %d%%"; // eg. La teva B�stia d'Entrada est� plena al 50%
$lang['Sentbox_size'] = "La teva B�stia d'Elements Enviats est� plena al %d%%"; 
$lang['Savebox_size'] = "La teva B�stia d'Elements Guardats est� plena al %d%%"; 

$lang['Click_view_privmsg'] = "Clica %saqu�%s per visitar la teva B�stia d'Entrada";


//
// Perfils/Registre
//
$lang['Viewing_user_profile'] = "Veient perfil :: %s"; // %s �s nom d'usuari 
$lang['About_user'] = "Tot sobre %s"; // %s �s nom d'usuari

$lang['Preferences'] = "Prefer�ncies";
$lang['Items_required'] = "Els camps marcats amb * s�n obligatoris si no �s que s'indica el contrari";
$lang['Registration_info'] = "Informaci� de Registre";
$lang['Profile_info'] = "Informaci� de Perfil";
$lang['Profile_info_warn'] = "Aquesta informaci� ser� p�blica";
$lang['Avatar_panel'] = "Quadre de Control de l'Avatar";
$lang['Avatar_gallery'] = "Galeria d'Avatars";

$lang['Website'] = "P�gina Web";
$lang['Location'] = "Ubicaci�";
$lang['Contact'] = "Contactar";
$lang['Email_address'] = "Adre�a electr�nica";
$lang['Email'] = "Email";
$lang['Send_private_message'] = "Enviar missatge privat";
$lang['Hidden_email'] = "[ Ocult ]";
$lang['Search_user_posts'] = "Buscar missatges d'aquest usuari";
$lang['Interests'] = "Interessos";
$lang['Occupation'] = "Ocupaci�"; 
$lang['Poster_rank'] = "Rang de l'Autor";

$lang['Total_posts'] = "Nombre total de missatges";
$lang['User_post_pct_stats'] = "%.2f%% del total"; // 1.25% del total
$lang['User_post_day_stats'] = "%.2f missatges per dia"; // 1.5 missatges per dia
$lang['Search_user_posts'] = "Trobar tots el missatges de %s"; // Trobar tots els missatges de nom d'usuari

$lang['No_user_id_specified'] = "Ho sentim per� aquest usuari no existeix";
$lang['Wrong_Profile'] = "No pots modificar un perfil que no sigui el teu";

$lang['Only_one_avatar'] = "Nom�s es pot especificar un tipus d'avatar";
$lang['File_no_data'] = "L'arxiu a l'URL proporcionat no cont� dades";
$lang['No_connection_URL'] = "No s'ha pogut establir connexi� amb l'URL proporcionat";
$lang['Incomplete_URL'] = "L'URL introdu�t est� incomplet";
$lang['Wrong_remote_avatar_format'] = "L'URL de l'avatar remot no �s v�lid";
$lang['No_send_account_inactive'] = "Ho sentim per� la teva contrasenya no pot ser recuperada perque el teu compte actualment est� desactivat. Si us plau contacta amb l'administrador del f�rum";

$lang['Always_smile'] = "Activar sempre els Smileys";
$lang['Always_html'] = "Permetre sempre l'HTML";
$lang['Always_bbcode'] = "Permetre sempre el BBCode";
$lang['Always_add_sig'] = "Adjuntar sempre la meva signatura";
$lang['Always_notify'] = "Ser avisat sempre de les respostes";
$lang['Always_notify_explain'] = "Envia un email quan alg� respon a un tema que tu has publicat. Aix� es pot canviar sempre que publiquis un tema";

$lang['Board_style'] = "Estil del F�rum";
$lang['Board_lang'] = "Idioma del F�rum";
$lang['No_themes'] = "No hi ha temes a la base de dades";
$lang['Timezone'] = "Fus horari";
$lang['Date_format'] = "Format de la Data";
$lang['Date_format_explain'] = "La sintaxi usada �s id�ntica a la funci� <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> de PHP";
$lang['Signature'] = "Signatura";
$lang['Signature_explain'] = "Aquest �s un bloc de text que pot ser afegit als missatges que publiquis. T� un l�mit de %d car�cters";
$lang['Public_view_email'] = "Mostrar sempre el meu email";

$lang['Current_password'] = "Contrasenya actual";
$lang['New_password'] = "Nova contrasenya";
$lang['Confirm_password'] = "Confirmar contrasenya";
$lang['Confirm_password_explain'] = "Has de confirmar la teva contrasenya actual si desitges canviar-la o cambiar la direcci� de correu electr�nic";
$lang['password_if_changed'] = "Nom�s cal que escriguis una contrasenya si vols canviar-la";
$lang['password_confirm_if_changed'] = "Nom�s cal que confirmis la contrasenya si l'has canviat a dalt";

$lang['Avatar'] = "Avatar";
$lang['Avatar_explain'] = "Mostra una petita imatge sota els teus detalls als missatges. Nom�s es pot mostrar una imatge cada vegada, la seva amplada no pot ser major que %d pixels, la seva al�ada no major que %d pixels i la mida de l'arxiu no m�s de %d kB"; $lang['Upload_Avatar_file'] = "Pujar Avatar des del teu PC";
$lang['Upload_Avatar_URL'] = "Pujar Avatar des d'un URL";
$lang['Upload_Avatar_URL_explain'] = "Introdueix l'URL on es troba l'arxiu d'imatge del teu Avatar i ser� copiat a aquesta p�gina web";
$lang['Pick_local_Avatar'] = "Seleccionar Avatar de la galeria";
$lang['Link_remote_Avatar'] = "Vincular a un Avatar fora de la p�gina web";
$lang['Link_remote_Avatar_explain'] = "Introdueix l'URL on es troba l'arxiu d'imatge del teu Avatar";
$lang['Avatar_URL'] = "URL de la imatge d'Avatar";
$lang['Select_from_gallery'] = "Seleccionar Avatar de la nostra galeria";
$lang['View_avatar_gallery'] = "Mostrar galeria";

$lang['Select_avatar'] = "Seleccionar avatar";
$lang['Return_profile'] = "Cancel�lar avatar";
$lang['Select_category'] = "Seleccionar categoria";

$lang['Delete_Image'] = "Esborrar imatge";
$lang['Current_Image'] = "Imatge Actual";

$lang['Notify_on_privmsg'] = "Ser notificat quan tingui Missatges Privats nous";
$lang['Popup_on_privmsg'] = "Desplegar una finestra nova quan tingui Missatges Privats nous";
$lang['Popup_on_privmsg_explain'] = "Algunes plantilles poden obrir una finestra nova per tal d'informar-te quan arriben Missatges Privats nous"; 
$lang['Hide_user'] = "Ocultar el meu estat de connexi�";

$lang['Profile_updated'] = "El teu perfil s'ha actualitzat";
$lang['Profile_updated_inactive'] = "El teu perfil s'ha actualitzat, no obstant, has canviat detalls importants i per aix� s'ha desactivat el teu compte. Revisa el teu email per esbrinar com reactivar el teu compte, o si �s necess�ria l'activaci� de l'administrador espera a que aquest reactivi el teu compte";

$lang['Password_mismatch'] = "Les contrasenyes que has introdu�t no coincideixen";
$lang['Current_password_mismatch'] = "La contrasenya que has escrit no coincideix amb la que est� emmagatzemada a la base de dades";
$lang['Password_long'] = "La teva contrasenya no ha de contenir m�s de 32 car�cters";
$lang['Username_taken'] = "Ho sentim per� aquest nom d'usuari ja est� agafat";
$lang['Username_invalid'] = "El nom d'usuari cont� un car�cter inv�lid com \"";
$lang['Username_disallowed'] = "Ho sentim per� aquest nom d'usuari ha estat deshabilitat";
$lang['Email_taken'] = "Ho sentim per� aquesta adre�a de correu electr�nic ja est� registrada per un usuari";
$lang['Email_banned'] = "Ho sentim per� aquesta direcci� de correu ha estat prohibida";
$lang['Email_invalid'] = "La direcci� de correu electr�nic �s inv�lida";
$lang['Signature_too_long'] = "La signatura �s massa llarga";
$lang['Fields_empty'] = "Has de completar els camps obligatoris";
$lang['Avatar_filetype'] = "El tipus d'imatge de l'avatar ha de ser .jpg, .gif o .png";
$lang['Avatar_filesize'] = "La mida de l'arxiu de l'avatar ha de ser menor de %d kB"; // El tamany de l'arxiu de l'avatar ha de ser menor de 6 kB
$lang['Avatar_imagesize'] = "L'avatar ha de ser de menys de %d pixels d'amplada per %d pixels d'al�ada"; 

$lang['Welcome_subject'] = "Benvingut als F�rums de %s"; // Benvingut als F�rums de Nom de la p�gina web
$lang['New_account_subject'] = "Nou compte d'usuari";
$lang['Account_activated_subject'] = "Compte Activat";

$lang['Account_added'] = "Gr�cies per registrar-te, el teu compte ha estat creat. Ara pots iniciar una sessi� amb el teu nom d'usuari i contrasenya";
$lang['Account_inactive'] = "El teu compte ha esta creat. No obstant, aquest f�rum requereix l'activaci� del compte una clau d'activaci� s'ha enviat a l'adre�a electr�nica que ens has proporcionat. Si us plau revisa el teu email per m�s informaci�";
$lang['Account_inactive_admin'] = "El teu compte ha esta creat. No obstant, aquest f�rum requereix l'activaci� de l'administrador. S'ha enviat un email a l'administrador i ser�s informat quan el teu compte sigui activat";
$lang['Account_active'] = "El teu compte ha estat activat. Gr�cies per registrar-te";
$lang['Account_active_admin'] = "El compte ha estat activat";
$lang['Reactivate'] = "Reactiva el teu compte!";
$lang['Already_activated'] = "ja has reactivat el teu compte";
$lang['COPPA'] = "El teu compte ha estat creat per� ha de ser aprovat, si us plau revisa el teu email per m�s detalls";

$lang['Registration'] = "Condicions de Registre";
$lang['Reg_agreement'] = "Tot i que els administradors i moderadors d'aquest f�rum faran tot el que sigui possible per eliminar o editar qualsevol material q�estionable tan r�pidament com sigui possible, �s impossible revisar cada missatge. Per tant, et dones per assabentat que tots els missatges publicats en aquests f�rums expressen els punts de vista i opinions dels seus respectius autors i no la dels administradors, moderadors o el webmaster (excepte els missatges publicats per ells mateixos) per la qual cosa no se'ls considerar� responsables.<br /><br />Est�s d'acord amb no publicar material insultant, obsc�, vulgar, d'odi, amena�ant, orientat sexualment, o cap altre que d'alguna manera violi les lleis vigents. Si publiques material d'aquesta �ndole, el teu compte ser� cancel�lat (i el teu prove�dor d'acc�s a internet avisat). La direcci� IP de tots els missatges es guarda per ajudar a complir aquestes normes. Est�s d'acord amb que el webmaster, administrador i moderadors d'aquest F�rum tenen dret a esborrar, editar, moure o tancar qualsevol tema en qualsevol moment si ho consideren convenient. Com a usuari acceptes que tota la informaci� que has introdu�t sigui emmagatzemada en una base de dades. Tot i que aquesta informaci� no ser� proporcionada a tercers sense el teu consentiment, el webmaster, l'administrador i els moderadors no poden responsabilitzar-se per intents de hackers que puguin portar a que aquesta informaci� es vegi compromesa.<br /><br />Aquest sistema de f�rums utilitza cookies per emmagatzemar informaci� al teu ordinador. Aquestes cookies no contenen la informaci� que has introdu�t, nom�s s'utilitzen per millorar la visualitzaci� dels f�rums. L'email nom�s s'utilitza per confirmar els detalls del teu registre i contrasenya (i per enviar-te una nova contrasenya si oblides la que tens actualment).<br /><br />En registrar-te acceptes totes aquestes condicions.";

$lang['Agree_under_13'] = "Estic d'acord amb aquestes condicions i tinc <b>menys</b> de 13 anys d'edat";
$lang['Agree_over_13'] = "Estic d'acord amb aquestes condicions i tinc <b>exactament</b> o <b>m�s</b> de 13 anys d'edat";
$lang['Agree_not'] = "No estic d'acord amb aquestes condicions";

$lang['Wrong_activation'] = "La clau d'activaci� subministrada no coincideix amb cap de les de la base de dades";
$lang['Send_password'] = "Envieu-me una nova contrasenya"; 
$lang['Password_updated'] = "S'ha creat una nova contrasenya, si us plau revisa el teu email pels detalles sobre com activar-la";
$lang['No_email_match'] = "L'email subministrat no coincideix amb el del teu nom d'usuari";
$lang['New_password_activation'] = "Activaci� de nova contrasenya";
$lang['Password_activated'] = "El teu compte ha esta reactivat. Per iniciar una sessi� utilitza la contrasenya proporcionada a l'email que has rebut";

$lang['Send_email_msg'] = "Enviar un email";
$lang['No_user_specified'] = "No s'ha especificat usuari";
$lang['User_prevent_email'] = "Aquest usuari no desitja rebre email. Intenta enviar-li un missatge privat";
$lang['User_not_exist'] = "Aquest usuari no existeix";
$lang['CC_email'] = "Enviar-te una c�pia d'aquest missatge a tu mateix";
$lang['Email_message_desc'] = "Aquest missatge ser� enviat com a text simple, no hi incloguis HTML ni BBCode. La direcci� de resposta per aquest missatge ser� el teu email";
$lang['Flood_email_limit'] = "No pots enviar un altre email en aquest moment, intenta-ho m�s tard";
$lang['Recipient'] = "Destinatari";
$lang['Email_sent'] = "L'email ha estat enviat";
$lang['Send_email'] = "Enviar email";
$lang['Empty_subject_email'] = "Has d'especificar un assumpte per a l'email";
$lang['Empty_message_email'] = "Has d'escriure un missatge per que sigui enviat";


//
// Llistat de membres
//
$lang['Select_sort_method'] = "Ordenar per";
$lang['Sort'] = "Ordenar";
$lang['Sort_Top_Ten'] = "Els 10 autors que m�s escriuen";
$lang['Sort_Joined'] = "Data de Registre";
$lang['Sort_Username'] = "Nom d'usuari";
$lang['Sort_Location'] = "Ubicaci�";
$lang['Sort_Posts'] = "Quantitat de missatges";
$lang['Sort_Email'] = "Email";
$lang['Sort_Website'] = "P�gina Web";
$lang['Sort_Ascending'] = "Ascendent";
$lang['Sort_Descending'] = "Descendent";
$lang['Order'] = "Ordre";


//
// Quadre de control de grups
//
$lang['Group_Control_Panel'] = "Quadre de Control de Grups";
$lang['Group_member_details'] = "Detalls d'Afiliaci� a Grups";
$lang['Group_member_join'] = "Unir-se al Grup";

$lang['Group_Information'] = "Informaci� del Grup";
$lang['Group_name'] = "Nom del Grup";
$lang['Group_description'] = "Descripci� del Grup";
$lang['Group_membership'] = "Afiliaci� del Grup";
$lang['Group_Members'] = "Membres del Grup";
$lang['Group_Moderator'] = "Moderador del Grup";
$lang['Pending_members'] = "Membres Pendents";

$lang['Group_type'] = "Tipus de Grup";
$lang['Group_open'] = "Grup Obert";
$lang['Group_closed'] = "Grup Tancat";
$lang['Group_hidden'] = "Grup Ocult";

$lang['Current_memberships'] = "Afiliacions actuals";
$lang['Non_member_groups'] = "Grups dels que no ets membre";
$lang['Memberships_pending'] = "Afiliacions pendents";

$lang['No_groups_exist'] = "No existeix cap Grup";
$lang['Group_not_exist'] = "Aquest grup no existeix";

$lang['Join_group'] = "Unir-se al Grup";
$lang['No_group_members'] = "Aquest grup no t� membres";
$lang['Group_hidden_members'] = "Aquest grup est� ocult, no en pots veure el membres";
$lang['No_pending_group_members'] = "Aquest grup no t� membres pendents";
$lang["Group_joined"] = "T'has subscrit amb �xit a aquest grup<br />Se't notificar� quan la teva subscripci� sigui aprovada pel moderador del grup";
$lang['Group_request'] = "Se ha realitzat una petici� per unir-se al grup";
$lang['Group_approved'] = "La teva petici� ha estat aprovada";
$lang['Group_added'] = "Se t'ha afegit a aquest grup d'usuaris"; 
$lang['Already_member_group'] = "Ja ets membre d'aquest grup";
$lang['User_is_member_group'] = "L'usuari ja �s membre d'aquest grup";
$lang['Group_type_updated'] = "El tipus de grup s'ha actualitzat correctament";

$lang['Could_not_add_user'] = "L'usuari seleccionat no existeix";
$lang['Could_not_anon_user'] = "No pots fer An�nim membre d'aquest grup";

$lang['Confirm_unsub'] = "Est�s segur que vols cancel�lar la subscripci� a aquest grup?";
$lang['Confirm_unsub_pending'] = "La teva subscripci� a aquest grup encara no ha estat aprovada, est�s segur que vols cancel�lar la subscripci�?";

$lang['Unsub_success'] = "La teva subscripci� a aquest grup ha estat cancel�lada";

$lang['Approve_selected'] = "Aprovar els Seleccionats";
$lang['Deny_selected'] = "Denegar els Seleccionats";
$lang['Not_logged_in'] = "Has d'haver iniciat una sessi� per unir-te al grup";
$lang['Remove_selected'] = "Esborrar els Seleccionats";
$lang['Add_member'] = "Afegir Membre";
$lang['Not_group_moderator'] = "No ets el moderador d'aquest grup i per tant no pots realitzar aquesta acci�";

$lang['Login_to_join'] = "Inicia una sessi� per unir-te a un grup o administrar les afiliacions de grup";
$lang['This_open_group'] = "Aquest �s un grup obert, clica per sol�licitar-ne l'afiliaci�";
$lang['This_closed_group'] = "Aquest �s un grup tancat, no s'accepten m�s usuaris";
$lang['This_hidden_group'] = "Aquest �s un grup ocult, no es permet l'addici� autom�tica d'usuaris";
$lang['Member_this_group'] = "Ets membre d'aquest grup";
$lang['Pending_this_group'] = "La teva afiliaci� a aquest grup est� pendent";
$lang['Are_group_moderator'] = "Ets el moderador del grup";
$lang['None'] = "Cap";

$lang['Subscribe'] = "Subscriure's";
$lang['Unsubscribe'] = "Cancel�lar Subscripci�";
$lang['View_Information'] = "Veure Informaci�";


//
// Cerca
//
$lang['Search_query'] = "Consulta de Cerca";
$lang['Search_options'] = "Opcions de Cerca";

$lang['Search_keywords'] = "Buscar per paraules clau";
$lang['Search_keywords_explain'] = "Pots utilitzar <u>AND</u> per definir paraules que han de ser als resultats, <u>OR</u> per definir paraules que poden ser als resultats i <u>NOT</u> per definir paraules que no han de ser als resultats. Utilitza * com a comod� per a coincid�ncies parcials";
$lang['Search_author'] = "Buscar per Autor";
$lang['Search_author_explain'] = "Utilitza * com a comod� per a coincid�ncies parcials";

$lang['Search_for_any'] = "Buscar qualsevol de les paraules o utilitzar consulta tal com s'ha escrit";
$lang['Search_for_all'] = "Buscar totes les paraules";
$lang['Search_title_msg'] = "Buscar  t�tols i text dels missatges";
$lang['Search_msg_only'] = "Buscar nom�s al text dels missatges";

$lang['Return_first'] = "Mostrar els primers"; // seguit de xxx car�cters en una llista desplegable
$lang['characters_posts'] = "car�cters dels missatges";

$lang['Search_previous'] = "Buscar en els anteriors"; // seguit per dies, setmanes, mesos, anys, en una llista desplegable

$lang['Sort_by'] = "Ordenar per";
$lang['Sort_Time'] = "Data de Publicaci�";
$lang['Sort_Post_Subject'] = "Assumpte del Missatge";
$lang['Sort_Topic_Title'] = "T�tol del Tema";
$lang['Sort_Author'] = "Autor";
$lang['Sort_Forum'] = "F�rum";

$lang['Display_results'] = "Mostrar resultats com";
$lang['All_available'] = "Tots els disponibles";
$lang['No_searchable_forums'] = "No tens perm�s per buscar en cap dels f�rums d'aquesta p�gina web";

$lang['No_search_match'] = "No hi ha temes o missatges que coincideixin amb els criteris de cerca";
$lang['Found_search_match'] = "S'ha trobat %d coincid�ncia"; // eg. S'ha trobat 1 coincid�ncia
$lang['Found_search_matches'] = "S'han trobat %d coincid�ncies"; // eg. S'han trobat 24 coincid�ncies

$lang['Close_window'] = "Tancar finestra";


//
// Entrades relacionades amb autoritzacions
//
// Els %s seran substitu�ts amb un dels seg�ents arrays d'usuari
$lang['Sorry_auth_announce'] = "Ho sentim per� nom�s els %s poden publicar anuncis en aquest f�rum";
$lang['Sorry_auth_sticky'] = "Ho sentim per� nom�s els %s poden publicar missatges permanents en aquest f�rum";
$lang['Sorry_auth_read'] = "Ho sentim per� nom�s els %s poden llegir temes en aquest f�rum";
$lang['Sorry_auth_post'] = "Ho sentim per� nom�s els %s poden publicar temes en aquest f�rum";
$lang['Sorry_auth_reply'] = "Ho sentim per� nom�s els %s poden respondre missatges en aquest f�rum";
$lang['Sorry_auth_edit'] = "Ho sentim per� nom�s els %s poden editar missatges en aquest f�rum";
$lang['Sorry_auth_delete'] = "Ho sentim per� nom�s els %s poden esborrar missatges en aquest f�rum";
$lang['Sorry_auth_vote'] = "Ho sentim per� nom�s els %s votar a les enquestes en aquest f�rum";

// Aquests substitueixen els %s en les cadenes de dalt
$lang['Auth_Anonymous_Users'] = "<b>usuaris an�nims</b>";
$lang['Auth_Registered_Users'] = "<b>usuaris registrats</b>";
$lang['Auth_Users_granted_access'] = "<b>usuaris amb acc�s especial</b>";
$lang['Auth_Moderators'] = "<b>moderadors</b>";
$lang['Auth_Administrators'] = "<b>administradors</b>";

$lang['Not_Moderator'] = "No ets moderador d'aquest f�rum";
$lang['Not_Authorised'] = "No Autoritzat";

$lang['You_been_banned'] = "Has estat excl�s d'aquest f�rum<br />Si us plau contacta amb el webmaster o l'administrador del f�rum per m�s informaci�";


//
// Veure usuaris connectats
//
$lang['Reg_users_zero_online'] = "Hi ha 0 usuaris Registrats i "; // Hi ha 0 usuaris Registrats i
$lang['Reg_users_online'] = "Hi ha %d usuaris Registrats i "; // Hi ha 5 usuaris Registrats i
$lang['Reg_user_online'] = "Hi ha 1 usuari Registrat i "; // Hi ha 1 usuari Registrat i
$lang['Hidden_users_zero_online'] = "0 usuaris Ocults connectats"; // 0 usuaris Ocults connectats
$lang['Hidden_users_online'] = "%d usuaris Ocults connectats"; // 6 usuaris Ocults connectats
$lang['Hidden_user_online'] = "%d usuari Ocult connectat"; // 1 usuari Ocult connectat
$lang['Guest_users_online'] = "Hi ha %d usuaris Invitats connectats"; // Hi ha 10 usuaris Invitats connectats
$lang['Guest_users_zero_online'] = "Hi ha 0 usuaris Invitats connectats"; // Hi ha 0 usuaris Invitats connectats
$lang['Guest_user_online'] = "Hi ha %d usuari Invitat connectat"; // Hi ha 1 usuari Invitat connectat
$lang['No_users_browsing'] = "No hi ha usuaris explorant aquest f�rum";

$lang['Online_explain'] = "Aquestes dades estan basades en els usuaris actius durant els darrers cinc minuts";

$lang['Forum_Location'] = "Ubicaci� del F�rum";
$lang['Last_updated'] = "Darrera Actualitzaci�";

$lang['Forum_index'] = "�ndex del F�rum";
$lang['Logging_on'] = "Iniciant Sessi�";
$lang['Posting_message'] = "Publicant missatge";
$lang['Searching_forums'] = "Buscant f�rums";
$lang['Viewing_profile'] = "Veient Perfil";
$lang['Viewing_online'] = "Veient qui est� connectat";
$lang['Viewing_member_list'] = "Veient llista de membres";
$lang['Viewing_priv_msgs'] = "Veient missatges privats";
$lang['Viewing_FAQ'] = "Veient FAQ";


//
// Quadre de Control del Moderador
//
$lang['Mod_CP'] = "Quadre de Control del Moderador";
$lang['Mod_CP_explain'] = "Utilitzant el seg�ent formulari pots realitzar operacions de moderaci� en aquest f�rum. Pots tancar, desbloquejar, moure, o esborrar qualsevol nombre de temes";

$lang['Select'] = "Seleccionar";
$lang['Delete'] = "Esborrar";
$lang['Move'] = "Moure";
$lang['Lock'] = "Bloquejar";
$lang['Unlock'] = "Desbloquejar";

$lang['Topics_Removed'] = "Els temes seleccionats s'han esborrat correctament de la base de dades";
$lang['Topics_Locked'] = "S'han bloquejat els temes seleccionats";
$lang['Topics_Moved'] = "S'han mogut els temes seleccionats";
$lang['Topics_Unlocked'] = "S'han desbloquejat els temes seleccionats";
$lang['No_Topics_Moved'] = "No s'ha mogut cap tema";

$lang['Confirm_delete_topic'] = "Est�s segur que vols eliminar els temes seleccionats?";
$lang['Confirm_lock_topic'] = "Est�s segur que vols bloquejar els temes seleccionats?";
$lang['Confirm_unlock_topic'] = "Est�s segur que vols desbloquejar els temes seleccionats?";
$lang['Confirm_move_topic'] = "Est�s segur que vols moure els temes seleccionats?";

$lang['Move_to_forum'] = "Moure al f�rum";
$lang['Leave_shadow_topic'] = "Deixar el tema sombrejat a l'antic f�rum";

$lang['Split_Topic'] = "Quadre de Control  de Divisi� de Temes";
$lang['Split_Topic_explain'] = "Utilitzant el seg�ent formulari pots dividir un tema en dos, ja sigui seleccionant els missatges individualment o dividint-lo  a partir d'un missatge determinat";
$lang['Split_title'] = "T�tol del nou tema";
$lang['Split_forum'] = "F�rum per al nou tema";
$lang['Split_posts'] = "Dividir missatges seleccionats";
$lang['Split_after'] = "Dividir des del missatge seleccionat";
$lang['Topic_split'] = "El tema seleccionat s'ha dividit correctament";

$lang['Too_many_error'] = "Has seleccionat massa missatges. Nom�s pots triar un missatge per dividir un tema a partir d'ell";

$lang['None_selected'] = "No has seleccionat cap tema para fer aquesta operaci�. Si us plau torna i selecciona'n almenys un";
$lang['New_forum'] = "Nou F�rum";

$lang['This_posts_IP'] = "IP per aquest missatge";
$lang['Other_IP_this_user'] = "Altres IP's des de les quals aquest usuari ha publicat missatges";
$lang['Users_this_IP'] = "Usuaris publicant des d'aquesta IP";
$lang['IP_info'] = "Informaci� IP";
$lang['Lookup_IP'] = "Buscar IP";


//
// Zones hor�ries ... per mostrar a cada p�gina
//
$lang['All_times'] = "Totes les hores s�n %s"; // eg. Totes les hores s�n GMT - 12 Hores 

$lang['-12'] = "GMT - 12 Hores";
$lang['-11'] = "GMT - 11 Hores";
$lang['-10'] = "GMT - 10 Hores";
$lang['-9'] = "GMT - 9 Hores";
$lang['-8'] = "GMT - 8 Hores";
$lang['-7'] = "GMT - 7 Hores";
$lang['-6'] = "GMT - 6 Hores";
$lang['-5'] = "GMT - 5 Hores";
$lang['-4'] = "GMT - 4 Hores";
$lang['-3.5'] = "GMT - 3.5 Hores";
$lang['-3'] = "GMT - 3 Hores";
$lang['-2'] = "GMT - 2 Hores";
$lang['-1'] = "GMT - 1 Hora";
$lang['0'] = "GMT";
$lang['1'] = "GMT + 1 Hora";
$lang['2'] = "GMT + 2 Hores";
$lang['3'] = "GMT + 3 Hores";
$lang['3.5'] = "GMT + 3.5 Hores";
$lang['4'] = "GMT + 4 Hores";
$lang['4.5'] = "GMT + 4.5 Hores";
$lang['5'] = "GMT + 5 Hores";
$lang['5.5'] = "GMT + 5.5 Hores";
$lang['6'] = "GMT + 6 Hores";
$lang['6.5'] = "GMT + 6.5 Hores";
$lang['7'] = "GMT + 7 Hores";
$lang['8'] = "GMT + 8 Hores";
$lang['9'] = "GMT + 9 Hores";
$lang['9.5'] = "GMT + 9.5 Hores";
$lang['10'] = "GMT + 10 Hores";
$lang['11'] = "GMT + 11 Hores";
$lang['12'] = "GMT + 12 Hores";

// Aquests es mostren al quadre de selecci� de fus horari
$lang['tz']['-12'] = "GMT -12 Hores";
$lang['tz']['-11'] = "GMT -11 Hores";
$lang['tz']['-10'] = "GMT -10 Hores";
$lang['tz']['-9'] = "GMT -9 Hores";
$lang['tz']['-8'] = "GMT -8 Hores";
$lang['tz']['-7'] = "GMT -7 Hores";
$lang['tz']['-6'] = "GMT -6 Hores";
$lang['tz']['-5'] = "GMT -5 Hores";
$lang['tz']['-4'] = "GMT -4 Hores";
$lang['tz']['-3.5'] = "GMT -3.5 Hores";
$lang['tz']['-3'] = "GMT -3 Hores";
$lang['tz']['-2'] = "GMT -2 Hores";
$lang['tz']['-1'] = "GMT -1 Hora";
$lang['tz']['0'] = "GMT";
$lang['tz']['1'] = "GMT +1 Hora";
$lang['tz']['2'] = "GMT +2 Hores";
$lang['tz']['3'] = "GMT +3 Hores";
$lang['tz']['3.5'] = "GMT +3.5 Hores";
$lang['tz']['4'] = "GMT +4 Hores";
$lang['tz']['4.5'] = "GMT +4.5 Hores";
$lang['tz']['5'] = "GMT +5 Hores";
$lang['tz']['5.5'] = "GMT +5.5 Hores";
$lang['tz']['6'] = "GMT +6 Hores";
$lang['tz']['6.5'] = "GMT +6.5 Hores";
$lang['tz']['7'] = "GMT +7 Hores";
$lang['tz']['8'] = "GMT +8 Hores";
$lang['tz']['9'] = "GMT +9 Hores";
$lang['tz']['9.5'] = "GMT +9.5 Hores";
$lang['tz']['10'] = "GMT +10 Hores";
$lang['tz']['11'] = "GMT +11 Hores";
$lang['tz']['12'] = "GMT +12 Hores";

$lang['datetime']['Sunday'] = "Diumenge";
$lang['datetime']['Monday'] = "Dilluns";
$lang['datetime']['Tuesday'] = "Dimarts";
$lang['datetime']['Wednesday'] = "Dimecres";
$lang['datetime']['Thursday'] = "Dijous";
$lang['datetime']['Friday'] = "Divendres";
$lang['datetime']['Saturday'] = "Dissabte";
$lang['datetime']['Sun'] = "Dg";
$lang['datetime']['Mon'] = "Dl";
$lang['datetime']['Tue'] = "Dt";
$lang['datetime']['Wed'] = "Dc";
$lang['datetime']['Thu'] = "Dj";
$lang['datetime']['Fri'] = "Dv";
$lang['datetime']['Sat'] = "Ds";
$lang['datetime']['January'] = "Gener";
$lang['datetime']['February'] = "Febrer";
$lang['datetime']['March'] = "Mar�";
$lang['datetime']['April'] = "Abril";
$lang['datetime']['May'] = "Maig";
$lang['datetime']['June'] = "Juny";
$lang['datetime']['July'] = "Juliol";
$lang['datetime']['August'] = "Agost";
$lang['datetime']['September'] = "Setembre";
$lang['datetime']['October'] = "Octubre";
$lang['datetime']['November'] = "Novembre";
$lang['datetime']['December'] = "Desembre";
$lang['datetime']['Jan'] = "Gen";
$lang['datetime']['Feb'] = "Feb";
$lang['datetime']['Mar'] = "Mar";
$lang['datetime']['Apr'] = "Abr";
$lang['datetime']['May'] = "Mai";
$lang['datetime']['Jun'] = "Jun";
$lang['datetime']['Jul'] = "Jul";
$lang['datetime']['Aug'] = "Ago";
$lang['datetime']['Sep'] = "Set";
$lang['datetime']['Oct'] = "Oct";
$lang['datetime']['Nov'] = "Nov";
$lang['datetime']['Dec'] = "Des";

//
// Errors (no relacionats amb una fallada 
// espec�fica en una p�gina)
//
$lang['Information'] = "Informaci�";
$lang['Critical_Information'] = "Informaci� Cr�tica";

$lang['General_Error'] = "Error General";
$lang['Critical_Error'] = "Error Cr�tic";
$lang['An_error_occured'] = "Un Error ha tingut lloc";
$lang['A_critical_error'] = "Un Error Cr�tic ha tingut lloc";

//
// Aix� �s tot amics!
// -------------------------------------------------

?>