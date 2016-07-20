<?php
/***************************************************************************
 *                           lang_main.php [Portuguese]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_main.php,v 1.7.2.3 2002/07/14 17:09:47 psotfx Exp $
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

 /****************************************************************************
 * Translation by:
 * LuizCB (Pincel) LuizCB@pincel.net || http://pincel.net
 ****************************************************************************/

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'iso-8859-1';
$lang['DIRECTION'] = 'ltr'; // rtl for Arabic, Hebrew, etc.
$lang['LEFT'] = 'left'; // right for Arabic, Hebrew, etc.
$lang['RIGHT'] = 'right'; // left for Arabic, Hebrew, etc.
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

$lang['TRANSLATION'] = 'LuizCB \(Pincel\) LuizCB@pincel.net http://pincel.net';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'F�rum';
$lang['Category'] = 'Categoria';
$lang['Topic'] = 'T�pico';
$lang['Topics'] = 'T�picos';
$lang['Replies'] = 'Respostas';
$lang['Views'] = 'Vistos';
$lang['Post'] = 'Mensagem';
$lang['Posts'] = 'Mensagens';
$lang['Posted'] = 'Colocada';
$lang['Username'] = 'Utilizador';
$lang['Password'] = 'Senha';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Autor';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Data';
$lang['Hours'] = 'Horas';
$lang['Message'] = 'Mensagem';

$lang['1_Day'] = '1 Dia';
$lang['7_Days'] = '7 Dias';
$lang['2_Weeks'] = '2 Semanas';
$lang['1_Month'] = '1 M�s';
$lang['3_Months'] = '3 Meses';
$lang['6_Months'] = '6 Meses';
$lang['1_Year'] = '1 Ano';

$lang['Go'] = 'Premir';
$lang['Jump_to'] = 'Ir para';
$lang['Submit'] = 'Submeter';
$lang['Reset'] = 'Restaurar';
$lang['Cancel'] = 'Cancelar';
$lang['Preview'] = 'Prever';
$lang['Confirm'] = 'Confirmar';
$lang['Spellcheck'] = 'Corrigir';
$lang['Yes'] = 'Sim';
$lang['No'] = 'N�o';
$lang['Enabled'] = 'Activo';
$lang['Disabled'] = 'Inactivo';
$lang['Error'] = 'Erro';

$lang['Next'] = 'Seguinte';
$lang['Previous'] = 'Anterior';
$lang['Goto_page'] = 'Ir � p�gina';
$lang['Joined'] = 'Registo';
$lang['IP_Address'] = 'Endere�o de IP';

$lang['Select_forum'] = 'Seleccione um F�rum';
$lang['View_latest_post'] = 'Ver a �ltima mensagem';
$lang['View_newest_post'] = 'Ver a mensagem mais recente';
$lang['Page_of'] = 'P�gina <b>%d</b> de <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'N�mero de ICQ';
$lang['AIM'] = 'Endere�o de AIM';
$lang['MSNM'] = 'MSN Messenger';
$lang['YIM'] = 'Yahoo Messenger';

$lang['Forum_Index'] = '�ndice do F�rum %s';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Novo T�pico';
$lang['Reply_to_topic'] = 'Responder a Mensagem';
$lang['Reply_with_quote'] = 'Responder com Cita��o';

$lang['Click_return_topic'] = 'Premir %sAqui%s para voltar ao T�pico'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Premir %sAqui%s para tentar novamente';
$lang['Click_return_forum'] = 'Premir %sAqui%s para voltar ao F�rum';
$lang['Click_view_message'] = 'Premir %sAqui%s para ver a sua mensagem';
$lang['Click_return_modcp'] = 'Premir %sAqui%s para voltar ao Painel de Controle de Moderador';
$lang['Click_return_group'] = 'Premir %sAqui%s para voltar � informa��o do grupo';

$lang['Admin_panel'] = 'Ir ao Painel de Administra��o';

$lang['Board_disable'] = 'Este f�rum n�o se encontra dispon�vel de momento.';
$lang['Board_unavailable'] = 'Este f�rum est� temporariamente desligado. Por favor tentar novamente em alguns minutos.';

//
// Global Header strings
//
$lang['Registered_users'] = 'Utilizadores ligados';
$lang['Browsing_forum'] = 'Utilizadores a ler este f�rum:'; 
$lang['Online_users_zero_total'] = 'N�o h� <b>0</b> utilizadores ligados :: ';
$lang['Online_users_total'] = 'H� <b>%d</b> utilizadores ligados :: ';
$lang['Online_user_total'] = 'H� <b>%d</b> utilizador ligado :: ';
$lang['Reg_users_zero_total'] = 'Nenhum Registado, ';
$lang['Reg_users_total'] = '%d Registados, ';
$lang['Reg_user_total'] = '%d Registado, ';
$lang['Hidden_users_zero_total'] = 'Nenhum Invis�vel e ';
$lang['Hidden_user_total'] = '%d Invis�vel e ';
$lang['Hidden_users_total'] = '%d Invis�veis e ';
$lang['Guest_users_zero_total'] = 'Nenhum Visitante';
$lang['Guest_users_total'] = '%d Visitantes';
$lang['Guest_user_total'] = '%d Visitante';
$lang['Record_online_users'] = 'Total de utilizadores ligados ao mesmo tempo foi de <b>%s</b> em %s'; // first %s = number of users, second %s is the date.  

$lang['Legend'] = 'Legend';
$lang['Admin_online_color'] = '%sAdministrador%s';
$lang['Mod_online_color'] = '%sModerador%s';      
$lang['User_online_color'] = '%sUtilizador%s';

$lang['You_last_visit'] = 'A sua �ltima visita foi a %s'; // %s replaced by date/time
$lang['Current_time'] = 'Data: %s'; // %s replaced by time

$lang['Search_new'] = 'Ler mensagens desde a �ltima visita';
$lang['Search_your_posts'] = 'Verificar as suas mensagens';
$lang['Search_unanswered'] = 'Ler mensagens sem resposta';

$lang['Register'] = 'Registar';
$lang['Profile'] = 'Perfil';
$lang['Edit_profile'] = 'Editar o seu Perfil';
$lang['Search'] = 'Pesquisar';
$lang['Memberlist'] = 'Membros';
$lang['FAQ'] = 'FAQ';
$lang['BBCode_guide'] = 'Guia do BBcode';
$lang['Usergroups'] = 'Grupos';
$lang['Last_Post'] = '�ltima Mensagem';
$lang['Moderator'] = 'Moderador';
$lang['Moderators'] = 'Moderadores';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'H� presentemente um total de <b>0</b> mensagens'; // Number of posts
$lang['Posted_articles_total'] = 'Os nossos utilizadores colocaram um total de <b>%d</b> mensagens'; // Number of posts
$lang['Posted_article_total'] = 'Os nossos utilizadores colocaram um total de <b>%d</b> mensagens'; // Number of posts
$lang['Registered_users_zero_total'] = 'Temos <b>0</b> utilizadores registados'; // # registered users
$lang['Registered_users_total'] = 'Temos <b>%d</b> utilizadores registados'; // # registered users
$lang['Registered_user_total'] = 'Temos <b>%d</b> utilizadores registados'; // # registered users
$lang['Newest_user'] = 'O registo mais recente � de <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'N�o � novas mensagens desde a sua �ltima visita';
$lang['No_new_posts'] = 'N�o h� mensagens novas';
$lang['New_posts'] = 'Mensagens novas';
$lang['New_post'] = 'Mensagem nova';
$lang['No_new_posts_hot'] = 'N�o h� mensagens novas [ Popular ]';
$lang['New_posts_hot'] = 'Mensagens novas [ Popular ]';
$lang['No_new_posts_locked'] = 'N�o h� mensagens novas [ Bloqueadas ]';
$lang['New_posts_locked'] = 'Mensagens novas [ Bloqueadas ]';
$lang['Forum_is_locked'] = 'F�rum Bloqueado';


//
// Login
//
$lang['Enter_password'] = 'Por favor escrever o seu nome de utilizador e senha para entrar';
$lang['Login'] = 'Entrar';
$lang['Logout'] = 'Sair';

$lang['Forgotten_password'] = 'Esqueci-me da senha';

$lang['Log_me_in'] = 'Ligar-me automaticamente em cada visita';

$lang['Error_login'] = 'Especificou um nome de utilizador incorrecto ou inactivo ou uma senha inv�lida';


//
// Index page
//
$lang['Index'] = '�ndice';
$lang['No_Posts'] = 'N�o h� mensagens';
$lang['No_forums'] = 'Este painel n�o possui foruns';

$lang['Private_Message'] = 'Mensagem Privada';
$lang['Private_Messages'] = 'Mensagens Privadas';
$lang['Who_is_Online'] = 'Quem est� ligado';

$lang['Mark_all_forums'] = 'Assinalar todos os f�runs como lidos';
$lang['Forums_marked_read'] = 'Todos os f�runs foram seleccionados como lidos';


//
// Viewforum
//
$lang['View_forum'] = 'Ver o F�rum';

$lang['Forum_not_exist'] = 'O f�rum seleccionado n�o existe';
$lang['Reached_on_error'] = 'Alcan�ou esta p�gina por erro';

$lang['Display_topics'] = 'Mostrar t�picos anteriores';
$lang['All_Topics'] = 'Todos os t�picos';

$lang['Topic_Announcement'] = '<b>An�ncio:</b>';
$lang['Topic_Sticky'] = '<b>Inamov�vel:</b>';
$lang['Topic_Moved'] = '<b>Mudado:</b>';
$lang['Topic_Poll'] = '<b>[ Vota��o ]</b>';

$lang['Mark_all_topics'] = 'Seleccionar todos os t�picos como lidos';
$lang['Topics_marked_read'] = 'Todos os t�picos neste f�rum est�o agora seleccionados como lidos';

$lang['Rules_post_can'] = 'Neste f�rum, voc� <b>Pode</b> colocar mensagens novas';
$lang['Rules_post_cannot'] = 'Neste f�rum, voc� <b>N�o pode</b> colocar mensagens novas';
$lang['Rules_reply_can'] = '<b>Pode</b> responder a mensagens';
$lang['Rules_reply_cannot'] = '<b>N�o pode</b> responder a mensagens';
$lang['Rules_edit_can'] = '<b>Pode</b> editar as suas mensagens';
$lang['Rules_edit_cannot'] = '<b>N�o pode</b> editar as suas mensagens';
$lang['Rules_delete_can'] = '<b>Pode</b> remover as suas mensagens';
$lang['Rules_delete_cannot'] = '<b>N�o pode</b> remover as suas mensagens';
$lang['Rules_vote_can'] = 'Voc� <b>Pode</b> votar neste f�rum';
$lang['Rules_vote_cannot'] = 'Voc� <b>N�o pode</b> votar neste f�rum';
$lang['Rules_moderate'] = 'Voc� <b>Pode ser</b> %smoderador neste f�rum%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'N�o h� mensagens neste f�rum<br />Premir em <b>Novo T�pico</b> nesta p�gina para registar uma';

$lang['Stop_watching_forum'] = 'Parar de \"Observar\" este f�rum';
$lang['Start_watching_forum'] = '\"Observar\" este f�rum em mensagens novas';
$lang['No_longer_watching_forum'] = 'Voc� n�o se encontra mais a \"Observar\" este f�rum';
$lang['You_are_watching_forum'] = 'Voc� encontra-se a partir de agora a \"Observar\" este f�rum';


//
// Viewtopic
//
$lang['View_topic'] = 'Verificar t�pico';

$lang['Guest'] = 'Visitante';
$lang['Post_subject'] = 'Assunto';
$lang['View_next_topic'] = 'Ver mensagem seguinte';
$lang['View_previous_topic'] = 'Ver mensagem anterior';
$lang['Submit_vote'] = 'Submeter voto';
$lang['View_results'] = 'Ver resultados';

$lang['No_newer_topics'] = 'N�o h� t�picos novos neste f�rum';
$lang['No_older_topics'] = 'N�o h� t�picos antigos neste f�rum';
$lang['Topic_post_not_exist'] = 'O t�pico ou mensagem que pretende n�o existes';
$lang['No_posts_topic'] = 'N�o h� mensagens para este t�pico';

$lang['Display_posts'] = 'Mostrar os t�picos anteriores';
$lang['All_Posts'] = 'Todas as mensagens';
$lang['Newest_First'] = 'Recentes primeiro';
$lang['Oldest_First'] = 'Antigas primeiro';

$lang['Back_to_top'] = 'Voltar acima';

$lang['Read_profile'] = 'Ver o perfil de utilizadores'; 
$lang['Send_email'] = 'Enviar email ao utilizador';
$lang['Visit_website'] = 'Visitar a p�gina na web do utilizador';
$lang['ICQ_status'] = 'Estado do ICQ';
$lang['Edit_delete_post'] = 'Editar/Remover esta mensagem';
$lang['View_IP'] = 'Ver o IP do utilizador';
$lang['Delete_post'] = 'Remover esta mensagem';

$lang['wrote'] = 'escreveu'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Cita��o'; // comes before bbcode quote output.
$lang['Code'] = 'C�digo'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'Editado pela �ltima vez por %s em %s, num total de %d vez'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'Editado pela �ltima vez por %s em %s, num total de %d vezes'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'Bloquear este t�pico';
$lang['Unlock_topic'] = 'Desbloquear este t�pico';
$lang['Move_topic'] = 'Mover este t�pico';
$lang['Delete_topic'] = 'Remover este t�pico';
$lang['Split_topic'] = 'Subdividir este t�pico';

$lang['Stop_watching_topic'] = 'Parar de observar este t�pico';
$lang['Start_watching_topic'] = 'Observar as respostas a este t�pico';
$lang['No_longer_watching'] = 'N�o se encontra mais a observar este t�pico';
$lang['You_are_watching'] = 'Est� agora a observar este t�pico';

$lang['Total_votes'] = 'Total de Votos';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Corpo da messagem';
$lang['Topic_review'] = 'Rever o t�pico';

$lang['No_post_mode'] = 'N�o foi especificado a ac��o para esta mensagem'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Novo T�pico';
$lang['Post_a_reply'] = 'Responder';
$lang['Post_topic_as'] = 'Colocar o t�pico como';
$lang['Edit_Post'] = 'Editar a mensagem';
$lang['Options'] = 'Op��es';

$lang['Post_Announcement'] = 'An�ncio';
$lang['Post_Sticky'] = 'Inamov�vel';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = 'Tem a certeza que quer remover esta mensagem?';
$lang['Confirm_delete_poll'] = 'Tem a certeza que quer remover esta vota��o?';

$lang['Flood_Error'] = 'N�o pode colocar nova mensagem t�o rapidamente, por favor tentar novamente daqui a pouco';
$lang['Empty_subject'] = 'Deve ser especificado um assunto quando se coloca uma mensagem';
$lang['Empty_message'] = 'Deve ser escrita a mensagem';
$lang['Forum_locked'] = 'Este f�rum est� Bloqueado. N�o pode colocar, responder ou editar mensagens';
$lang['Topic_locked'] = 'Este t�pico est� Bloqueado. N�o pode editar mensagens ou responder';
$lang['No_post_id'] = 'Deve ser seleccionado a mensagem a ser editada';
$lang['No_topic_id'] = 'Deve ser seleccionado o t�pico a responder';
$lang['No_valid_mode'] = 'Apenas pode colocar, responder, editar ou citar mensagens, pr favor voltar e tentar novamente';
$lang['No_such_post'] = 'N�o existe essa mensagem, por favor voltar e tentar novamente';
$lang['Edit_own_posts'] = 'Apenas pode editar as suas pr�prias mensagens';
$lang['Delete_own_posts'] = 'Apenas pode remover as suas pr�prias mensagens';
$lang['Cannot_delete_replied'] = 'N�o pode remover mensagens que possuam respostas';
$lang['Cannot_delete_poll'] = 'N�o pode remover uma vota��o em curso';
$lang['Empty_poll_title'] = 'Deve escrever o t�tulo ou quest�o para vota��o';
$lang['To_few_poll_options'] = 'Dever� mencionar pelo menos duas op��es de escolha para a vota��o';
$lang['To_many_poll_options'] = 'Tentou seleccionar op��es a mais na vota��o';
$lang['Post_has_no_poll'] = 'Esta mensagem n�o possui vota��o';
$lang['Already_voted'] = 'Voc� j� votou';
$lang['No_vote_option'] = 'Deve especificar uma op��o quando vota';

$lang['Add_poll'] = 'Adicionar Vota��o';
$lang['Add_poll_explain'] = 'Se n�o pretende adicionar uma vota��o ao seu t�pico deixe os espa�os abaixo em branco';
$lang['Poll_question'] = 'Quest�o ou t�tulo para vota��o';
$lang['Poll_option'] = 'Op��o de escolha';
$lang['Add_option'] = 'Adicionar op��o de escolha para a vota��o';
$lang['Update'] = 'Actualizar';
$lang['Delete'] = 'Remover';
$lang['Poll_for'] = 'Activar a vota��o para';
$lang['Days'] = 'Dias'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Escrever 0 ou deixar em branco para uma vota��o sem tempo limite]';
$lang['Delete_poll'] = 'Remover Vota��o';

$lang['Disable_HTML_post'] = 'Desactivar HTML nesta mensagem';
$lang['Disable_BBCode_post'] = 'Desactivar BBCode nesta mensagem';
$lang['Disable_Smilies_post'] = 'Desactivar Smileys nesta mensagem';

$lang['HTML_is_ON'] = 'HTML est� <u>Activo</u>';
$lang['HTML_is_OFF'] = 'HTML est� <u>Inactivo</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s est� <u>Activo</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s est� <u>Inactivo</u>';
$lang['Smilies_are_ON'] = 'Smileys est�o <u>Activos</u>';
$lang['Smilies_are_OFF'] = 'Smileys est�o <u>Inactivos</u>';

$lang['Attach_signature'] = 'Adicionar Assinatura (as assinaturas podem ser mudadas em Perfil)';
$lang['Notify'] = 'Notificar-me quando for colocada uma resposta';
$lang['Delete_post'] = 'Remover esta mensagem';

$lang['Stored'] = 'A sua mensagem foi afixada com sucesso';
$lang['Deleted'] = 'A sua mensagem foi removida com sucesso';
$lang['Poll_delete'] = 'A sua vota��o foi removida com sucesso';
$lang['Vote_cast'] = 'O seu voto foi registado';

$lang['Topic_reply_notification'] = 'Notifica��o de Resposta a T�pico';

$lang['bbcode_b_help'] = 'Texto sobrecarregado: [b]texto[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Texto it�lico: [i]texto[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Texto sublinhado: [u]texto[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Texto citado: [quote]texto[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Marca de c�digo: [code]c�digo[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]texto[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Lista ordenada: [list=]texto[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Inserir imagem: [img]http://url_da_imagem[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Inserir URL: [url]http://url[/url] ou [url=http://url]URL texto[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Fechar todas as marcas de bbCode';
$lang['bbcode_s_help'] = 'Cor: [color=red]texto[/color]  Tip: pode tamb�m usar color=#FF0000';
$lang['bbcode_f_help'] = 'Fonte: [size=x-small]texto pequeno[/size]';

$lang['Emoticons'] = 'Emo��es';
$lang['More_emoticons'] = 'Ver mais icones de emo��es';

$lang['Font_color'] = 'Cor do texto';
$lang['color_default'] = 'Definido';
$lang['color_dark_red'] = 'Vermelho Escuro';
$lang['color_red'] = 'Vermelho';
$lang['color_orange'] = 'Laranja';
$lang['color_brown'] = 'Castanho';
$lang['color_yellow'] = 'Amarelo';
$lang['color_green'] = 'Verde';
$lang['color_olive'] = 'Azeitona';
$lang['color_cyan'] = 'Ciano';
$lang['color_blue'] = 'Azul';
$lang['color_dark_blue'] = 'Azul escuro';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violeta';
$lang['color_white'] = 'Branco';
$lang['color_black'] = 'Preto';

$lang['Font_size'] = 'Fonte';
$lang['font_tiny'] = 'Min�scula';
$lang['font_small'] = 'Pequena';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Grande';
$lang['font_huge'] = 'Enorme';

$lang['Close_Tags'] = 'Fechar marcas';
$lang['Styles_tip'] = 'Id�ia: Estilos podem ser aplicados rapidamente a texto seleccionado';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Mensagem Privada';

$lang['Login_check_pm'] = 'Ligar e ver Mensagens Privadas';
$lang['New_pms'] = 'Mensagens Privadas: %d novas'; // You have 2 new messages
$lang['New_pm'] = 'Mensagens Privadas: %d nova'; // You have 1 new message
$lang['No_new_pm'] = 'Mensagens Privadas novas: 0';
$lang['Unread_pms'] = 'Mensagens Privadas: %d n�o lidas';
$lang['Unread_pm'] = 'Mensagens Privadas: %d n�o lida';
$lang['No_unread_pm'] = 'Mensagens Privadas n�o lidas: 0';
$lang['You_new_pm'] = 'Mensagens Privadas nova na Caixa de Entrada: 1';
$lang['You_new_pms'] = 'H� Mensagens Privadas na Caixa de Entrada';
$lang['You_no_new_pm'] = 'Mensagens Privadas novas: 0';
$lang['Unread_message'] = 'Mensagem n�o lida';
$lang['Read_message'] = 'Ler mensagem';

$lang['Read_pm'] = 'Ler mensagem';
$lang['Post_new_pm'] = 'Escrever uma mensagem';
$lang['Post_reply_pm'] = 'Responder � mensagem';
$lang['Post_quote_pm'] = 'Citar mensagem';
$lang['Edit_pm'] = 'Editar mensagem';

$lang['Inbox'] = 'Caixa de Entrada';
$lang['Outbox'] = 'Caixa de Sa�da';
$lang['Savebox'] = 'Caixa de Reserva';
$lang['Sentbox'] = 'Caixa de Enviados';
$lang['Flag'] = 'Bandeira';
$lang['Subject'] = 'Assunto';
$lang['From'] = 'De';
$lang['To'] = 'Para';
$lang['Date'] = 'Data';
$lang['Mark'] = 'Marca';
$lang['Sent'] = 'Enviado';
$lang['Saved'] = 'Guardado';
$lang['Delete_marked'] = 'Remover os assinalados';
$lang['Delete_all'] = 'Remover Tudo';
$lang['Save_marked'] = 'Guardar os assinalados'; 
$lang['Save_message'] = 'Guardar a Mensagem';
$lang['Delete_message'] = 'Remover a Mensagem';

$lang['Display_messages'] = 'Per�odo'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Todas';

$lang['No_messages_folder'] = 'N�o h� mensagens nesta pasta';

$lang['PM_disabled'] = 'As Mensagens Privadas foram desactivadas neste painel';
$lang['Cannot_send_privmsg'] = 'O administrador suspendeu-lhe o envio de mensagens privadas';
$lang['No_to_user'] = 'Deve especificar um utilizador quando envia uma mensagem';
$lang['No_such_user'] = 'Esse utilizador n�o existe';

$lang['Disable_HTML_pm'] = 'Desactivar HTML nesta mensagem';
$lang['Disable_BBCode_pm'] = 'Desactivar BBCode nesta mensagem';
$lang['Disable_Smilies_pm'] = 'Desactivar Smileys nesta mensagem';

$lang['Message_sent'] = 'A sua mensagem foi enviada';

$lang['Click_return_inbox'] = 'Premir %sAqui%s para voltar � sua Caixa de Entrada';
$lang['Click_return_index'] = 'Premir %sAqui%s para voltar ao �ndice';

$lang['Send_a_new_message'] = 'Enviar nova Mensagem Privada';
$lang['Send_a_reply'] = 'Responder a uma Mensagem Privada';
$lang['Edit_message'] = 'Editar Mensagem Privada';

$lang['Notification_subject'] = 'Chegou uma Mensagem Privada nova';

$lang['Find_username'] = 'Encontrar um utilizador';
$lang['Find'] = 'Encontrar';
$lang['No_match'] = 'Nada encontrado';

$lang['No_post_id'] = 'N�o foi especificado o ID da mensagem';
$lang['No_such_folder'] = 'N�o existe essa pasta';
$lang['No_folder'] = 'N�o foi especificada a pasta';

$lang['Mark_all'] = 'Assinalar todas';
$lang['Unmark_all'] = 'Desmarcar todas';

$lang['Confirm_delete_pm'] = 'Tem a certeza que quer remover esta mensagem?';
$lang['Confirm_delete_pms'] = 'Tem a certeza que quer remover estas mensagens?';

$lang['Inbox_size'] = 'A sua Caixa de Entrada est� %d%% cheia'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'A sua Caixa de Envio est� %d%% cheia'; 
$lang['Savebox_size'] = 'A sua Caixa de Reserva est� %d%% cheia'; 

$lang['Click_view_privmsg'] = 'Premir %sAqui%s para ir � Caixa de Entrada';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Vendo perfil :: %s'; // %s is username 
$lang['About_user'] = 'Tudo acerca de %s'; // %s is username

$lang['Preferences'] = 'Prefer�ncias';
$lang['Items_required'] = 'Itens marcados com um * s�o necess�rios';
$lang['Registration_info'] = 'Informa��o de Registo';
$lang['Profile_info'] = 'Informa��o de Perfil';
$lang['Profile_info_warn'] = 'Esta informa��o ir� estar publicamente vis�vel';
$lang['Avatar_panel'] = 'Painel de controle de Avatar';
$lang['Avatar_gallery'] = 'Galeria de Avatar';

$lang['Website'] = 'P�gina/WWW';
$lang['Location'] = 'Local/Origem';
$lang['Contact'] = 'Contacto';
$lang['Email_address'] = 'Endere�o de Email';
$lang['Email'] = 'Email';
$lang['Send_private_message'] = 'Enviar Mensagem Privada';
$lang['Hidden_email'] = '[ Invis�vel ]';
$lang['Search_user_posts'] = 'Procurar mensagens deste utilizador';
$lang['Interests'] = 'Interesses';
$lang['Occupation'] = 'Ocupa��o'; 
$lang['Poster_rank'] = 'Escal�o de Afixa��o de Mensagens';

$lang['Total_posts'] = 'Total de Mensagens';
$lang['User_post_pct_stats'] = '%.2f%% do total'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f mensagens por dia'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Encontrar todas as mensagens de %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Esse utilizador n�o existe';
$lang['Wrong_Profile'] = 'N�o pode modificar um perfil que n�o lhe pertence.';

$lang['Only_one_avatar'] = 'Apenas pode ser especificado um tipo de avatar';
$lang['File_no_data'] = 'O ficheiro do URL que deu n�o possui dados';
$lang['No_connection_URL'] = 'N�o se pode fazer liga��o ao URL que forneceu';
$lang['Incomplete_URL'] = 'O URL que forneceu est� incompleto';
$lang['Wrong_remote_avatar_format'] = 'O URL do avatar remoto n�o � v�lido';
$lang['No_send_account_inactive'] = 'A sua senha n�o pode ser recuperada porque o seu registo encontra-se presentemente inactivo. Por favor contactar o administrador do f�rum para mais informa��es';

$lang['Always_smile'] = 'Activar sempre os Smileys';
$lang['Always_html'] = 'Permitir sempre HTML';
$lang['Always_bbcode'] = 'Permitir sempre BBCode';
$lang['Always_add_sig'] = 'Anexar sempre a minha assinatura';
$lang['Always_notify'] = 'Notificar-me sempre que haja respostas';
$lang['Always_notify_explain'] = 'Envia um email quando algu�m responda a uma mensagem que tenha colocado. Isto pode ser alterado sempre que escreva uma mensagem.';

$lang['Board_style'] = 'Estilo do Painel';
$lang['Board_lang'] = 'L�ngua do Painel';
$lang['No_themes'] = 'N�o h� temas na base de dados';
$lang['Timezone'] = 'Fuso Hor�rio';
$lang['Date_format'] = 'Formato da Data';
$lang['Date_format_explain'] = 'O sintaxe usado � id�ntico � fun��o PHP <a href=\"http://www.php.net/date\" target=\"_other\">date()</a> ';
$lang['Signature'] = 'Assinatura';
$lang['Signature_explain'] = 'Isto � um bloco de texto que pode ser adicionado �s mensagens que fa�a. H� um limite de %d caracteres';
$lang['Public_view_email'] = 'Mostrar sempre o meu endere�o de Email';

$lang['Current_password'] = 'Senha em uso';
$lang['New_password'] = 'Senha nova';
$lang['Confirm_password'] = 'Confirmar senha';
$lang['Confirm_password_explain'] = 'Tem que confirmar a sua senha corrente caso a pretenda mudar ou alterar o endere�o de email'; 
$lang['password_if_changed'] = 'Apenas necessita fornecer uma senha caso a pretenda mudar';
$lang['password_confirm_if_changed'] = 'Apenas necessita confirmar a sua senha caso a tenha mudado acima';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Mostra uma pequena imagem gr�fica por baixo dos seus detalhes nas mensagens. Apenas pode ser mostrada uma imagem de cada vez, a largura n�o exceder %d pixels, a altura n�o ser superior a %d pixels e o tamanho do ficheiro n�o ser superior a %dkB.'; $lang['Upload_Avatar_file'] = 'Carregar o Avatar a partir do seu computador';
$lang['Upload_Avatar_URL'] = 'Carregar o Avatar a partir de um URL';
$lang['Upload_Avatar_URL_explain'] = 'Escrever o URL do local contendo o Avatar, para ser copiado para a p�gina.';
$lang['Pick_local_Avatar'] = 'Seleccionar um Avatar da galeria';
$lang['Link_remote_Avatar'] = 'Ligar a um Avatar fora desta p�gina';
$lang['Link_remote_Avatar_explain'] = 'Escrever o URL do local contendo o Avatar que pretende que seja mostrado.';
$lang['Avatar_URL'] = 'URL da imagem Avatar';
$lang['Select_from_gallery'] = 'Seleccionar um Avatar da galeria';
$lang['View_avatar_gallery'] = 'Mostrar a galeria';

$lang['Select_avatar'] = 'Seleccionar um avatar';
$lang['Return_profile'] = 'Cancelar o avatar';
$lang['Select_category'] = 'Seleccionar uma categoria';

$lang['Delete_Image'] = 'Remover a imagem';
$lang['Current_Image'] = 'Imagem corrente';

$lang['Notify_on_privmsg'] = 'Notificar-me por email quando haja Mensagens Privadas novas';
$lang['Popup_on_privmsg'] = 'Avisar-me em janela destacada quando haja Mensagens Privadas novas'; 
$lang['Popup_on_privmsg_explain'] = 'Surgir� uma pequena janela a avisar caso uma Mensagem Privada lhe seja enviada.'; 
$lang['Hide_user'] = 'Esconder o meu indicador de Ligado';

$lang['Profile_updated'] = 'O seu perfil foi actualizado';
$lang['Profile_updated_inactive'] = 'O seu perfil foi actualizado, contudo alterou detalhes vitais e como tal o oseu registo est� inactivo. verificar o seu email para saber como reactivar o registo, ou se � necess�ria reactiva��o pelo administrador aguarde que tal seja feito';

$lang['Password_mismatch'] = 'As senhas que escreveu n�o s�o iguais';
$lang['Current_password_mismatch'] = 'A senha que forneceu n�o � igual � registada na base de dados';
$lang['Password_long'] = 'A sua senha n�o pode ter mais que 32 caracteres';
$lang['Username_taken'] = 'Este nome de utilizador j� est� em uso';
$lang['Username_invalid'] = 'Este nome de utilizador cont�m algum caracter inv�lido, tal como \'';
$lang['Username_disallowed'] = 'N�o � permitido o uso deste nome de utilizador';
$lang['Email_taken'] = 'Esse endere�o de email j� se encontra registado por outro utilizador';
$lang['Email_banned'] = 'Este endere�o de email encontra-se banido';
$lang['Email_invalid'] = 'Este endere�o de email � inv�lido';
$lang['Signature_too_long'] = 'A sua assinatura � muito extensa';
$lang['Fields_empty'] = 'Deve preencher os espa�os solicitados';
$lang['Avatar_filetype'] = 'O tipo de ficheiro do avatar dever� ser .jpg, .gif ou .png';
$lang['Avatar_filesize'] = 'O tamanho do ficheiro do avatar tem que ser inferior a %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'O avatar tem que ser inferior a %d pixels de largura e %d pixels de altura'; 

$lang['Welcome_subject'] = 'Bem-vindo ao F�rum %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Novo registo de utilizador';
$lang['Account_activated_subject'] = 'Registo activado';

$lang['Account_added'] = 'Obrigado por ter registado, o seu registo foi criado. Pode ligar-se com o seu nome de utilizador e respectiva senha';
$lang['Account_inactive'] = 'O seu registo foi criado. Contudo este f�rum requer que o mesmo seja activado, uma senha para o efeito foi enviada para o endere�o de email que forneceu. Por favor verificar o seu email para mais informa��es';
$lang['Account_inactive_admin'] = 'O seu registo foi criado. Contudo este f�rum requer que o mesmo seja activado pelo administrador. Foi-lhes enviado e voc� ser� informado quando o seu registo for activado';
$lang['Account_active'] = 'O seu registo foi activado. Obrigado por se ter registado';
$lang['Account_active_admin'] = 'O seu registo foi agora activado';
$lang['Reactivate'] = 'Reactivar o seu registo!';
$lang['Already_activated'] = 'Voc� j� activou a sua conta.';
$lang['COPPA'] = 'O seu registo foi criado mas tem que ser aprovado, por favor verificar o seu email para detalhes.';

$lang['Registration'] = 'Condi��es de Aceita��o de Registo';
$lang['Reg_agreement'] = 'Apesar dos administradores e moderadores deste f�rum tentarem remover ou editar qualquer material indesej�vel logo que detectado, � imposs�vel rever todas as mensagens. Como tal voc� reconhece por este meio que todas as mensagens colocadas nos f�runs expressam os pontos de vista e opini�es dos seus respectivos autores e n�o dos administradores, moderadores ou o encarregado das p�ginas (excepto mensagens colocadas por essas pessoas) n�o sendo por tal respons�veis.<br /><br />Voc� aceita n�o colocar qualquer mensagem abusiva, obscena, invulgar, insultuosa, de �dio, amea�adora, sexualmente tendenciosa ou qualquer outro material que possa violar qualquer lei em vigor. Tal acontecendo conduz � sua expuls�o imediata e permanente (al�m de ser notificado o seu provedor de Internet). Os endere�os de IP de todas as mensagens s�o registados para ajudar a implementar essas condi��es. Voc� concorda que quem faz e mant�m estas p�ginas, administradores e moderadores deste f�rum tem o direito de remover, editar, mover ou encerrar qualquer t�pico em qualquer altura que eles assim o entendam e seja impl�cito. Como utilizador voc� aceita que qualquer informa��o que forneceu acima seja guardada numa base de dados. Apesar dessa informa��o n�o ser fornecida a terceiros sem a sua autoriza��o, o encarregado das p�ginas, administradores ou moderadores n�o podem assumir a responsabilidade por qualquer tentativa de acto de \"hacking\", intromiss�o for�ada e ilegal que conduza a essa informa��o ser exposta.<br /><br />Este sistema de f�runs usa \"cookies\" para guardar informa��o no seu computador. Esses \"cookies\" n�o poss�em nenhuma da informa��o acima fornecida, apenas servem para melhorar o seu prazer aquando e enquanto visita estes f�runs. O endere�o de email � apenas usado para confirmar a informa��o do seu registo e a senha (bem como para enviar novas senhas caso se esque�a da que acabou de submeter).<br /><br />Ao premir abaixo para prosseguir com o registo voc� concorda em seguir estas condi��es.';

$lang['Agree_under_13'] = 'Aceito estes termos e tenho  <b>menos que</b> 13 anos de idade';
$lang['Agree_over_13'] = 'Aceito estes termos e tenho <b>mais que</b> 13 anos de idade';
$lang['Agree_not'] = 'N�o aceito estes termos';

$lang['Wrong_activation'] = 'A senha de activa��o que forneceu n�o � igual nenhuma que se encontra na base de dados';
$lang['Send_password'] = 'Envie-me uma nova senha'; 
$lang['Password_updated'] = 'Uma senha nova foi criada, por favor verifique o seu email para pormenores em como a activar';
$lang['No_email_match'] = 'O endere�o de email que forneceu n�o � igual ao que se encontra designado para esse nome de usu�rio';
$lang['New_password_activation'] = 'Activa��o de Senha Nova';
$lang['Password_activated'] = 'O seu registo foi reactivado. Para se ligar por favor use a senha que lhe foi fornecida no email que recebeu';

$lang['Send_email_msg'] = 'Enviar uma mensagem de email';
$lang['No_user_specified'] = 'N�o foi especificado um utilizador';
$lang['User_prevent_email'] = 'Este utilizador n�o pretende receber email. Tente enviar-lhe uma Mensagem Privada';
$lang['User_not_exist'] = 'Esse utilizador n�o existe';
$lang['CC_email'] = 'Enviar uma c�pia deste email a si proprio';
$lang['Email_message_desc'] = 'Esta mensagem ser� enviada em texto, por favor n�o incluir  qualquer HTML ou BBCode. Para o endere�o de devolu��o ser� colocado o seu endere�o de email.';
$lang['Flood_email_limit'] = 'N�o pode enviar outro email neste momento, tente novamente mais tarde';
$lang['Recipient'] = 'Recipiente';
$lang['Email_sent'] = 'O email foi enviado';
$lang['Send_email'] = 'Enviar email';
$lang['Empty_subject_email'] = 'Deve especificar um assunto para o email';
$lang['Empty_message_email'] = 'Deve escrever uma mensagem a ser enviada no email';


//
// Memberslist
//
$lang['Select_sort_method'] = 'Forma de listagem';
$lang['Sort'] = 'Seleccionar';
$lang['Sort_Top_Ten'] = 'Top 10 autores';
$lang['Sort_Joined'] = 'Data de registo';
$lang['Sort_Username'] = 'Utilizador';
$lang['Sort_Location'] = 'Local';
$lang['Sort_Posts'] = 'Total de mensagens';
$lang['Sort_Email'] = 'Email';
$lang['Sort_Website'] = 'P�gina na WWW';
$lang['Sort_Ascending'] = 'crescente';
$lang['Sort_Descending'] = 'decrescente';
$lang['Order'] = 'Ordem';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Painel de controle de Grupos';
$lang['Group_member_details'] = 'Detalhes de Membros de Grupos';
$lang['Group_member_join'] = 'Juntar-se a Grupo';

$lang['Group_Information'] = 'Informa��o de Grupo';
$lang['Group_name'] = 'Nome do Grupo';
$lang['Group_description'] = 'Descri��o do Grupo';
$lang['Group_membership'] = 'Registo de Membros';
$lang['Group_Members'] = 'Membros do Grupo';
$lang['Group_Moderator'] = 'Moderador do Grupo';
$lang['Pending_members'] = 'Registos pendentes';

$lang['Group_type'] = 'Tipo de Grupo';
$lang['Group_open'] = 'Grupo aberto';
$lang['Group_closed'] = 'Grupo fechado';
$lang['Group_hidden'] = 'Grupo invis�vel';

$lang['Current_memberships'] = 'Grupos existentes';
$lang['Non_member_groups'] = 'Grupos de n�o-membros';
$lang['Memberships_pending'] = 'Registo de membro pendente';

$lang['No_groups_exist'] = 'N�o existem Grupos';
$lang['Group_not_exist'] = 'Esse Grupo de utilizadores n�o existe';

$lang['Join_group'] = 'Juntar-se a Grupo';
$lang['No_group_members'] = 'Este Grupo n�o possui membros';
$lang['Group_hidden_members'] = 'Este Grupo encontra-se invis�vel, n�o pode ver os seus membros';
$lang['No_pending_group_members'] = 'Este Grupo n�o possui membros pendentes';
$lang['Group_joined'] = 'Voc� subscreveu com sucesso a este Grupo<br />Ser� notificado quando a sua subscrip��o for aprovada pelo Moderador de Grupo';
$lang['Group_request'] = 'Foi feito um pedido para se juntar ao seu Grupo';
$lang['Group_approved'] = 'O seu pedido foi aceite';
$lang['Group_added'] = 'Voc� foi adicionado a este Grupo de utilizadores'; 
$lang['Already_member_group'] = 'Voc� � j� membro deste Grupo';
$lang['User_is_member_group'] = 'O utilizador � j� membro deste grupo';
$lang['Group_type_updated'] = 'Tipo de Grupo actualizado com sucesso';

$lang['Could_not_add_user'] = 'O utilizador que seleccionou n�o existe';
$lang['Could_not_anon_user'] = 'N�o pode tornar An�nimo um membro de Grupo';

$lang['Confirm_unsub'] = 'Tem a certeza que quer remover a sua subscri��o deste Grupo?';
$lang['Confirm_unsub_pending'] = 'A sua subscri��o a este Grupo n�o foi ainda aprovada, tem a certeza que quer remover a sua subscri��o?';

$lang['Unsub_success'] = 'Foi retirada a sua subscri��o deste grupo.';

$lang['Approve_selected'] = 'Aprovar os assinalados';
$lang['Deny_selected'] = 'Recusar os assinalados';
$lang['Not_logged_in'] = 'Dever� estar ligado para entrar no grupo.';
$lang['Remove_selected'] = 'Remover os assinalados';
$lang['Add_member'] = 'Adicionar um membro';
$lang['Not_group_moderator'] = 'Voc� n�o � moderador deste Grupo e como tal n�o pode efectuar essa fun��o.';

$lang['Login_to_join'] = 'Ligar-se para entrar ou dar manuten��o � lista de membros do Grupo';
$lang['This_open_group'] = 'Este Grupo est� aberto, prima para solicitar ser membro';
$lang['This_closed_group'] = 'Este Grupo est� fechado, n�o s�o aceites mais utilizadores.';
$lang['This_hidden_group'] = 'Este Grupo est� invis�vel, n�o s�o permitidas adi��es autom�ticas.';
$lang['Member_this_group'] = 'Voc� � membro deste Grupo';
$lang['Pending_this_group'] = 'O seu registo de membro neste Grupo est� pendente';
$lang['Are_group_moderator'] = 'Voc� � moderador deste Grupo';
$lang['None'] = 'Nenhum';

$lang['Subscribe'] = 'Subscrever';
$lang['Unsubscribe'] = 'Remover Subscri��o';
$lang['View_Information'] = 'Ver Informa��o';


//
// Search
//
$lang['Search_query'] = 'Termos de Pesquisa';
$lang['Search_options'] = 'Op��es de Pesquisa';

$lang['Search_keywords'] = 'Pesquisar por palavras-chave';
$lang['Search_keywords_explain'] = 'Pode usar os operadores boleanos <u>AND</u> para definir palavras que tenham que constar no resultado, <u>OR</u> para definir palavras que possam constar no resultado e <u>NOT</u> para definir palavras que n�o devam constar no resultado. Pode usar asteriscos * para obter palavras por aproxima��o';
$lang['Search_author'] = 'Pesquisar por Autor';
$lang['Search_author_explain'] = 'Pode usar asteriscos * para obter palavras por aproxima��o';

$lang['Search_for_any'] = 'Pesquisar por qualquer dos termos ou como est� descrito';
$lang['Search_for_all'] = 'Pesquisar por todos termos';
$lang['Search_title_msg'] = 'Pesquisar em t�tulos de t�picos e texto de mensagens'; 
$lang['Search_msg_only'] = 'Pesquisar apenas em texto de mensagens';             

$lang['Return_first'] = 'Mostrar os primeiros'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'caracteres de mensagens';

$lang['Search_previous'] = 'Per�odo'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Seleccionar por';
$lang['Sort_Time'] = 'Data da Mensagem';
$lang['Sort_Post_Subject'] = 'Assunto';
$lang['Sort_Topic_Title'] = 'T�tulo do T�pico';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'F�rum';

$lang['Display_results'] = 'Mostrar resultados como';
$lang['All_available'] = 'Todos os dispon�veis';
$lang['No_searchable_forums'] = 'Voc� n�o possui autoriza��o para fazer pesquiza nestas p�ginas';

$lang['No_search_match'] = 'N�o h� t�picos ou mensagens englobados nos seus par�metros de pesquisa';
$lang['Found_search_match'] = 'Encontrado %d item'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Encontrados %d itens'; // eg. Search found 24 matches

$lang['Close_window'] = 'Fechar a janela';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Apenas %s podem anunciar neste f�rum';
$lang['Sorry_auth_sticky'] = 'Apenas %s podem colocar mensagens amov�veis neste f�rum'; 
$lang['Sorry_auth_read'] = 'Apenas %s podem ler t�picos neste f�rum'; 
$lang['Sorry_auth_post'] = 'Apenas %s podem colocar t�picos neste f�rum'; 
$lang['Sorry_auth_reply'] = 'Apenas %s podem responder a mensagens neste f�rum'; 
$lang['Sorry_auth_edit'] = 'Apenas %s podem editar mensagens neste f�rum'; 
$lang['Sorry_auth_delete'] = 'Apenas %s podem remover mensagens neste f�rum'; 
$lang['Sorry_auth_vote'] = 'Apenas %s podem votar neste f�rum'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>utilizadores an�nimos</b>';
$lang['Auth_Registered_Users'] = '<b>utilizadores registados</b>';
$lang['Auth_Users_granted_access'] = '<b>utilizadores com acesso especial</b>';
$lang['Auth_Moderators'] = '<b>moderadores</b>';
$lang['Auth_Administrators'] = '<b>administradores</b>';

$lang['Not_Moderator'] = 'Voc� n�o � moderador neste f�rum';
$lang['Not_Authorised'] = 'N�o autorizado';

$lang['You_been_banned'] = 'Voc� foi expulso deste f�rum<br />Contacte o gerente de p�ginas ou o administrador para mais informa��o';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'N�o h� utilizadores ligados e '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'H� %d utilizadores ligados e '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'H� %d utilizador ligado e '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = 'n�o h� utilizadores em modo invis�vel'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d utilizadores ligados em modo invis�vel'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d utilizador ligado em modo invis�vel'; // 6 Hidden users online
$lang['Guest_users_online'] = 'H� %d visitantes ligados'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'N�o h� visitantes ligados'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'H� %d visitante ligado'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'N�o h� presentemente qualquer utilizador a verificar este f�rum';

$lang['Online_explain'] = 'Esta informa��o � baseada em utilizadores activos nos �ltimos cinco minutos';

$lang['Forum_Location'] = 'Local do F�rum';
$lang['Last_updated'] = 'Actualizado pela �ltima vez';

$lang['Forum_index'] = '�ndice do F�rum';
$lang['Logging_on'] = 'Ligados';
$lang['Posting_message'] = 'Colocando mensagens';
$lang['Searching_forums'] = 'Pesquisando os F�runs';
$lang['Viewing_profile'] = 'Verificando Perfil';
$lang['Viewing_online'] = 'Vendo quem se encontra ligado';
$lang['Viewing_member_list'] = 'Vendo a lista de membros';
$lang['Viewing_priv_msgs'] = 'Vendo Mensagens Privadas';
$lang['Viewing_FAQ'] = 'Vendo FAQ - Quest�es Mais Frequentes';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Painel de Controle de Moderador';
$lang['Mod_CP_explain'] = 'Usando o formul�rio abaixo pode efectuar opera��es de modera��o maci�as neste f�rum. Pode bloquear, desbloquear, mover ou remover qualquer quantidade de t�picos.';

$lang['Select'] = 'Seleccionar';
$lang['Delete'] = 'Remover';
$lang['Move'] = 'Mover';
$lang['Lock'] = 'Bloquear';
$lang['Unlock'] = 'Desbloquear';

$lang['Topics_Removed'] = 'Os t�picos seleccionados foram removidos da base de dados com sucesso.';
$lang['Topics_Locked'] = 'Os t�picos seleccionados foram bloqueados';
$lang['Topics_Moved'] = 'Os t�picos seleccionados foram movidos';
$lang['Topics_Unlocked'] = 'Os t�picos seleccionados foram desbloqueados';
$lang['No_Topics_Moved'] = 'Nenhum t�pico foi movido';

$lang['Confirm_delete_topic'] = 'Tem a certeza que quer remover o/s t�pico/s seleccionado/s?';
$lang['Confirm_lock_topic'] = 'Tem a certeza que quer bloquear o/s t�pico/s seleccionado/s?';
$lang['Confirm_unlock_topic'] = 'Tem a certeza que quer desbloquear o/s t�pico/s seleccionado/s?';
$lang['Confirm_move_topic'] = 'Tem a certeza que quer mover o/s t�pico/s seleccionado/s?';

$lang['Move_to_forum'] = 'Mover para f�rum';
$lang['Leave_shadow_topic'] = 'Deixar uma imagem do t�pico no f�rum anterior.';

$lang['Split_Topic'] = 'Subdividor o painel do t�pico';
$lang['Split_Topic_explain'] = 'Usando o formul�rio abaixo pode subdividir um t�pico em dois, tanto seleccionando as mensagens individualmente como dividindo uma mensagem seleccionada';
$lang['Split_title'] = 'T�tulo de T�pico Novo';
$lang['Split_forum'] = 'F�rum para Novo T�pico';
$lang['Split_posts'] = 'Subdividir as mensagens seleccionadas';
$lang['Split_after'] = 'Subdividir pela mensagem seleccionada';
$lang['Topic_split'] = 'O t�pico seleccionado foi subdividido com sucesso';

$lang['Too_many_error'] = 'Voc� seleccionou demasiadas mensagens. Apenas pode seleccionar uma mensagem para depois subdividir um t�pico!';

$lang['None_selected'] = 'Voc� n�o seleccionou qualquer t�pico para efectuar esta opera��o. Por favor voltar atr�s e escolha pelo menos um.';
$lang['New_forum'] = 'F�rum Novo';

$lang['This_posts_IP'] = 'IP para esta mensagem';
$lang['Other_IP_this_user'] = 'Outros endere�os de IP que este utilizador usou para colocar mensagens';
$lang['Users_this_IP'] = 'Utilizadores a colocar mensagens a partir deste IP';
$lang['IP_info'] = 'Informa��o de IP';
$lang['Lookup_IP'] = 'Verificar IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Todos os tempos s�o %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Horas';
$lang['-11'] = 'GMT - 11 Horas';
$lang['-10'] = 'GMT - 10 Horas';
$lang['-9'] = 'GMT - 9 Horas';
$lang['-8'] = 'GMT - 8 Horas';
$lang['-7'] = 'GMT - 7 Horas';
$lang['-6'] = 'GMT - 6 Horas';
$lang['-5'] = 'GMT - 5 Horas';
$lang['-4'] = 'GMT - 4 Horas';
$lang['-3.5'] = 'GMT - 3.5 Horas';
$lang['-3'] = 'GMT - 3 Horas';
$lang['-2'] = 'GMT - 2 Horas';
$lang['-1'] = 'GMT - 1 Hora';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Hora';
$lang['2'] = 'GMT + 2 Horas';
$lang['3'] = 'GMT + 3 Horas';
$lang['3.5'] = 'GMT + 3.5 Horas';
$lang['4'] = 'GMT + 4 Horas';
$lang['4.5'] = 'GMT + 4.5 Horas';
$lang['5'] = 'GMT + 5 Horas';
$lang['5.5'] = 'GMT + 5.5 Horas';
$lang['6'] = 'GMT + 6 Horas';
$lang['6.5'] = 'GMT + 6.5 Horas';
$lang['7'] = 'GMT + 7 Horas';
$lang['8'] = 'GMT + 8 Horas';
$lang['9'] = 'GMT + 9 Horas';
$lang['9.5'] = 'GMT + 9.5 Horas';
$lang['10'] = 'GMT + 10 Horas';
$lang['11'] = 'GMT + 11 Horas';
$lang['12'] = 'GMT + 12 Horas';


// These are displayed in the timezone select box
$lang['tz']['-12'] = 'TMG - 12 Horas';
$lang['tz']['-11'] = 'TMG - 11 Horas';
$lang['tz']['-10'] = 'TMG - 10 Horas';
$lang['tz']['-9'] = 'TMG - 9 Horas';
$lang['tz']['-8'] = 'TMG - 8 Horas';
$lang['tz']['-7'] = 'TMG - 7 Horas';
$lang['tz']['-6'] = 'TMG - 6 Horas';
$lang['tz']['-5'] = 'TMG - 5 Horas';
$lang['tz']['-4'] = 'TMG - 4 Horas';
$lang['tz']['-3.5'] = 'TMG - 3.5 Horas';
$lang['tz']['-3'] = 'TMG - 3 Horas';
$lang['tz']['-2'] = 'TMG - 2 Horas';
$lang['tz']['-1'] = 'TMG - 1 Hora';
$lang['tz']['0'] = 'TMG';
$lang['tz']['1'] = 'TMG + 1 Hora';
$lang['tz']['2'] = 'TMG + 2 Horas';
$lang['tz']['3'] = 'TMG + 3 Horas';
$lang['tz']['3.5'] = 'TMG + 3.5 Horas';
$lang['tz']['4'] = 'TMG + 4 Horas';
$lang['tz']['4.5'] = 'TMG + 4.5 Horas';
$lang['tz']['5'] = 'TMG + 5 Horas';
$lang['tz']['5.5'] = 'TMG + 5.5 Horas';
$lang['tz']['6'] = 'TMG + 6 Horas';
$lang['tz']['6.5'] = 'TMG + 6.5 Horas';
$lang['tz']['7'] = 'TMG + 7 Horas';
$lang['tz']['8'] = 'TMG + 8 Horas';
$lang['tz']['9'] = 'TMG + 9 Horas';
$lang['tz']['9.5'] = 'TMG + 9.5 Horas';
$lang['tz']['10'] = 'TMG + 10 Horas';
$lang['tz']['11'] = 'TMG + 11 Horas';
$lang['tz']['12'] = 'TMG + 12 Horas';

$lang['datetime']['Sunday'] = 'Domingo';
$lang['datetime']['Monday'] = 'Segunda-Feira';
$lang['datetime']['Tuesday'] = 'Ter�a-Feira';
$lang['datetime']['Wednesday'] = 'Quarta-Feira';
$lang['datetime']['Thursday'] = 'Quinta-Feira';
$lang['datetime']['Friday'] = 'Sexta-Feira';
$lang['datetime']['Saturday'] = 'S�bado';
$lang['datetime']['Sun'] = 'Dom';
$lang['datetime']['Mon'] = 'Seg';
$lang['datetime']['Tue'] = 'Ter';
$lang['datetime']['Wed'] = 'Qua';
$lang['datetime']['Thu'] = 'Qui';
$lang['datetime']['Fri'] = 'Sex';
$lang['datetime']['Sat'] = 'S�b';

$lang['datetime']['January'] = 'Janeiro';
$lang['datetime']['February'] = 'Fevereiro';
$lang['datetime']['March'] = 'Mar�o';
$lang['datetime']['April'] = 'Abril';
$lang['datetime']['May'] = 'Maio';
$lang['datetime']['June'] = 'Junho';
$lang['datetime']['July'] = 'Julho';
$lang['datetime']['August'] = 'Agosto';
$lang['datetime']['September'] = 'Setembro';
$lang['datetime']['October'] = 'Outubro';
$lang['datetime']['November'] = 'Novembro';
$lang['datetime']['December'] = 'Dezembro';
$lang['datetime']['Jan'] = 'Jan';
$lang['datetime']['Feb'] = 'Fev';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Abr';
$lang['datetime']['May'] = 'Mai';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Ago';
$lang['datetime']['Sep'] = 'Set';
$lang['datetime']['Oct'] = 'Out';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dez';
$lang['datetime']['Dec'] = 'Dec';
//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informa��o';
$lang['Critical_Information'] = 'Informa��o Cr�tica';

$lang['General_Error'] = 'Erro Geral';
$lang['Critical_Error'] = 'Erro Cr�tico';
$lang['An_error_occured'] = 'Ocorreu um Erro';
$lang['A_critical_error'] = 'Ocorreu um Erro Cr�tico';

//
// That's all Folks!
// -------------------------------------------------

?>