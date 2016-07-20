<?php
/***************************************************************************
 *                            lang_admin.php [Galician]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1.2.2 2003/01/19 00:46:04 psotfx Exp $
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
 
/*****************************************************************************
 * Translation by:
 * Sergio Ares Chao :: sergio@ciberagendas.com
 ****************************************************************************/

//
// Mesmo formato que lang_main
//

//
// M�dulos, reemprazan as claves usadas en modules[][] en cada arquivo de m�dulo
//
$lang['General'] = "Administraci�n Xeral";
$lang['Users'] = "Administraci�n dos Usuarios";
$lang['Groups'] = "Administraci�n dos Grupos";
$lang['Forums'] = "Administraci�n dos Foros";
$lang['Styles'] = "Administraci�n dos Estilos";

$lang['Configuration'] = "Configuraci�n";
$lang['Permissions'] = "Permisos";
$lang['Manage'] = "Xesti�n";
$lang['Disallow'] = "Deshabilitar nomes de usuario";
$lang['Prune'] = "Purgar";
$lang['Mass_Email'] = "Correo Masivo";
$lang['Ranks'] = "Rangos";
$lang['Smilies'] = "Emoticonos";
$lang['Ban_Management'] = "Control de Exclusi�n";
$lang['Word_Censor'] = "Palabras Censuradas";
$lang['Export'] = "Exportar";
$lang['Create_new'] = "Crear";
$lang['Add_new'] = "Engadir";
$lang['Backup_DB'] = "Backup da Base de Datos";
$lang['Restore_DB'] = "Restaura-la Base de Datos";


//
// �ndice
//
$lang['Admin'] = "Administraci�n";
$lang['Not_admin'] = "Vostede non est� autorizado para administrar este Foro";
$lang['Welcome_phpBB'] = "Benvido a phpBB";
$lang['Admin_intro'] = "Gracias por elixir phpBB como a s�a soluci�n para o seu foro. Esta pantalla daralle unha s�ntese das principais estat�sticas do seu foro. Pode regresar a esta p�xina clickeando no link de <u>�ndice do Administrador</u> no panel da esquerda. Para regresar � �ndice do seu foro, clickee o logo de phpBB tam�n ubicado no panel esquerdo. Os outros links ubicados � esquerda desta pantalla permitiranlle controlar t�dolos aspectos deste foro, cada pantalla ter� instrucci�ns de c�mo utiliza-las ferramentas.";
$lang['Main_index'] = "�ndice do Foro";
$lang['Forum_stats'] = "Estat�sticas do Foro";
$lang['Admin_Index'] = "�ndice do Administrador";
$lang['Preview_forum'] = "Vista previa do Foro";

$lang['Click_return_admin_index'] = "Prema %saqu�%s para regresar � Indice do Administrador";

$lang['Statistic'] = "Estat�stica";
$lang['Value'] = "Valor";
$lang['Number_posts'] = "Cantidade de env�os";
$lang['Posts_per_day'] = "Env�os por d�a";
$lang['Number_topics'] = "Cantidade de temas";
$lang['Topics_per_day'] = "Temas por d�a";
$lang['Number_users'] = "Cantidade de usuarios";
$lang['Users_per_day'] = "Usuarios por d�a";
$lang['Board_started'] = "Data de inicio do Foro";
$lang['Avatar_dir_size'] = "Tama�o do directorio de Imaxes";
$lang['Database_size'] = "Tama�o da Base de Datos";
$lang['Gzip_compression'] ="Tipo de Compresi�n Gzip";
$lang['Not_available'] = "Non est� dispo�ible";

$lang['ON'] = "ON"; // Para a compresi�n GZip
$lang['OFF'] = "OFF"; 


//
// Utilidades da Base de Datos
//
$lang['Database_Utilities'] = "Utilidades da Base de Datos";

$lang['Restore'] = "Restaurar";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Isto restaurar� t�dalas t�boas de phpBB desde un arquivo previamente gardado. Se o seu servidor o soporta vostede pode subir un arquivo de texto comprimido mediante o gzip e este ser� automaticamente descomprimido. <b>ATENCION</b> Isto sobre-escribir� a informaci�n existente. A restauraci�n pode durar uns minutos, por favor fique nesta p�xina ata que o proceso sexa completado.";
$lang['Backup_explain'] = "Desde aqu� vostede pode facer unha copia de seguridade (backup) de toda a informaci�n relacionada con phpBB. Se vostede ten t�boas adicionais na mesma Base de Datos das que quixera realizar un backup ingrese os seus nomes separados por comas no campo de T�boas Adicionais. Se o seu servidor o soporta pode utilizar o gzip para comprimi-lo arquivo e reduci-lo seu tama�o antes de descargalo.";

$lang['Backup_options'] = "Opci�ns do Backup";
$lang['Start_backup'] = "Comenza-lo Backup";
$lang['Full_backup'] = "Backup completo";
$lang['Structure_backup'] = "S� a Estructura";
$lang['Data_backup'] = "S� os Datos";
$lang['Additional_tables'] = "T�boas adicionais";
$lang['Gzip_compress'] = "Compresi�n nun arquivo Gzip";
$lang['Select_file'] = "Seleccionar un arquivo";
$lang['Start_Restore'] = "Comezar a Restauraci�n";

$lang['Restore_success'] = "A Base de Datos foi Restaurada.<br /><br />O seu Foro deber�a voltar � normalidade unha vez realizado o proceso.";
$lang['Backup_download'] = "A descarga comezar� deseguio, por favor espere un intre";
$lang['Backups_not_supported'] = "Desculpe pero a opci�n de backup da s�a Base de Datos non est� soportada polo seu sistema";

$lang['Restore_Error_uploading'] = "Erro subindo o arquivo backup";
$lang['Restore_Error_filename'] = "Erro no nome de arquivo, por favor t�nteo cun arquivo diferente";
$lang['Restore_Error_decompress'] = "Non se pode descomprimir un arquivo gzip, por favor s�bao nunha version de texto";
$lang['Restore_Error_no_file'] = "Ning�n arquivo foi subido";


//
// P�xinas Auth
//
$lang['Select_a_User'] = "Seleccionar un Usuario";
$lang['Select_a_Group'] = "Seleccionar un Grupo";
$lang['Select_a_Forum'] = "Seleccionar un Foro";
$lang['Auth_Control_User'] = "Control de Permisos �s Usuarios";
$lang['Auth_Control_Group'] = "Control de Permisos �s Grupos"; 
$lang['Auth_Control_Forum'] = "Control de Permisos �s Foros"; 
$lang['Look_up_User'] = "Observar un Usuario";
$lang['Look_up_Group'] = "Observar un Grupo"; 
$lang['Look_up_Forum'] = "Observar un Foro"; 

$lang['Group_auth_explain'] = "Desde aqu� poder� cambia-los permisos e o estado do moderador asignado a cada grupo de usuarios. Lembre que cambiando os permisos do Grupo, que os permisos individuais cambiar�n unha vez que a persona ingrese � foro. Vostede ser� advertido neste caso.";
$lang['User_auth_explain'] = "Desde aqu� vostede pode cambia-los permisos e estado do moderador asignado a cada usuario. Te�a presente que cambiando os permisos dun usuario os permisos do grupo ficar�n sen cambiar ata que o usuario entre �s foros. Vostede ser� advertido neste caso.";
$lang['Forum_auth_explain'] = "Desde aqu� pode cambia-los niveis de autorizaci�n de cada foro. Para realizar isto ten dous modos; un simple e outro avanzado. Este �ltimo brindaralle maior control para a operaci�n e o funcionamento de cada foro. Te�a en conta que � cambia-los niveis de cada foro pode afectar � funcionamiento de cada usuario segundo o foro e os permisos que te�a o usuario.";

$lang['Simple_mode'] = "Modalidade Simple";
$lang['Advanced_mode'] = "Modalidade Avanzada";
$lang['Moderator_status'] = "Estado do Moderador";

$lang['Allowed_Access'] = "Acceso Permitido";
$lang['Disallowed_Access'] = "Acseso non Permitido";
$lang['Is_Moderator'] = "� Moderador";
$lang['Not_Moderator'] = "Non � Moderador";

$lang['Conflict_warning'] = "Advertencia de Conflicto en Autorizaci�n";
$lang['Conflict_access_userauth'] = "Este usuario a�nda pos�e acceso a este foro debido � Grupo � cal pertence. Vostede deber� cambia-los permisos do grupo ou borra-lo usuario do Grupo para facer que o usuario non te�a acceso a este foro. Os dereitos do Grupo e o Usuario explicanse abaixo.";
$lang['Conflict_mod_userauth'] = "Este usuario a�nda pos�e dereitos de Moderador debido � Grupo � cal pertence. Vostede deber� cambia-los permisos do grupo ou borra-lo usuario do Grupo para facer que o usuario non te�a acceso a este foro con permisos de Moderador. Os dereitos de moderador expl�canse abaixo.";

$lang['Conflict_access_groupauth'] = "O seguinte usuario (ou usuarios) a�nda ten acceso a este foro debido �s permisos que ten como Usuario. Para que non te�a acceso a este foro vostede deber� cambia-los seus permisos. Os dereitos de Usuarios expl�canse abaixo.";
$lang['Conflict_mod_groupauth'] = "O seguinte usuario (ou usuarios) a�nda pos�e dereitos de Moderador neste foro. Para que non te�a acceso a este foro con dereitos de Moderador vostede deber� cambia-los seus permisos. Os dereitos de Usuarios expl�canse abaixo.";

$lang['Public'] = "P�blico";
$lang['Private'] = "Privado";
$lang['Registered'] = "Rexistrado";
$lang['Administrators'] = "Administrador";
$lang['Hidden'] = "Oculto";

// Estes am�sanse nas t�boas do modo avanzado de auth.
// Tenteente mantelos curtos
$lang['Forum_ALL'] = "TODOS";
$lang['Forum_REG'] = "REX";
$lang['Forum_PRIVATE'] = "PRIVADOS";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Ver";
$lang['Read'] = "Ler";
$lang['Post'] = "Env�o";
$lang['Reply'] = "Resposta";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Borrar";
$lang['Sticky'] = "PostIt";
$lang['Announce'] = "Anuncio";
$lang['Vote'] = "Votar";
$lang['Pollcreate'] = "Crear unha enquisa";

$lang['Permissions'] = "Permisos";
$lang['Simple_Permission'] = "Permiso Simple";

$lang['User_Level'] = "Nivel de Usuario";
$lang['Auth_User'] = "Usuario";
$lang['Auth_Admin'] = "Administrador";
$lang['Group_memberships'] = "Grupo de Usuarios";
$lang['Usergroup_members'] = "Este Grupo cont�n os siguientes Usuarios";

$lang['Forum_auth_updated'] = "Permiso do Foro actualizado";
$lang['User_auth_updated'] = "Permiso do usuario actualizado";
$lang['Group_auth_updated'] = "Permiso do Grupo actualizado";

$lang['Auth_updated'] = "Os permisos foron cambiados";
$lang['Click_return_userauth'] = "Prema %saqu�%s para volver ve-los Permisos dos Usuarios";
$lang['Click_return_groupauth'] = "Prema %saqu�%s para volver ve-los Permisos do Grupo";
$lang['Click_return_forumauth'] = "Prema %saqu�%s para volver ve-los Permisos do Foro";


//
// Baneo
//
$lang['Ban_control'] = "Control de Exclusi�n";
$lang['Ban_explain'] = "Desde aqu� vostede pode banear a un usuario. Pode banear �s usuarios polo seu nome, pola s�a direcci�n IP, ou polo seu Hostname. Este m�todo prev�n que un usuario te�a acceso � p�xina principal do foro. Para previr que o Usuario se rexistre cunha nova conta tam�n pode bannear o seu enderezo de email. Te�a en conta que baneando unha direcci�n de email non evitar� que o usuario poda ingresar � foro nin que publique mensaxes. Para iso deber� utilizar un dos dous m�todos explicados anteriormente.";
$lang['Ban_explain_warn'] = "Te�a en conta que colocando un RANGO de direcci�ns IP vostede banea a t�dalas direcci�ns que se atopan dentro do Rango da lista de bans.  Se realmente debe utilizar un rango tente utilizar un pequeno para as� non banear a outros usuarios.";

$lang['Select_username'] = "Selecione un Nome de Usuario";
$lang['Select_ip'] = "Seleccione unha direcci�n IP";
$lang['Select_email'] = "Seleccione un enderezo de Email";

$lang['Ban_username'] = "Banear a un ou varios Usuarios";
$lang['Ban_username_explain'] = "Pode banear a m�ltiples usuarios dunha soa vez usando a combinaci�n apropiada de rato e teclado para o seu ordenador e navegador.";


$lang['Ban_IP'] = "Banear unha ou varias direcci�ns IP o HOSTNAMES";
$lang['IP_hostname'] = "Direcci�ns IP o HOSTNAMES";
$lang['Ban_IP_explain'] = "Para especificar diferentes IPs ou Nomes de Dominio, sep�reos con comas. Para especificar un rango de direcci�ns IP separe o comezo e o final utilizando un gui�n (-), para especificar un comod�n utilize o *";

$lang['Ban_email'] = "Banear un ou varios enderezos de email";
$lang['Ban_email_explain'] = "Para especificar m�is dun email, col�queos separados por comas. Para especificar un comod�n de usarios utilece *, por exemplo *@hotmail.com";

$lang['Unban_username'] = "Quitar ban dun ou varios Usuarios";
$lang['Unban_username_explain'] = "Pode quita-lo ban a m�ltiples usuarios dunha soa vez usando a combinaci�n apropiada de rato e teclado para o seu ordenador e navegador.";

$lang['Unban_IP'] = "Quitar ban dunha ou varias Direcci�ns IP";
$lang['Unban_IP_explain'] = "Vostede pode quita-lo ban a m�ltiples direcci�ns IP usando a correcta combinaci�n de mouse e teclado da s�a computadora e navegador";

$lang['Unban_email'] = "Quitar ban dun ou varios enderezos de email";
$lang['Unban_email_explain'] = "Vostede pode quita-lo ban a m�ltiples enderezos de email usando a correcta combinaci�n de mouse e teclado da s�a computadora e navegador";

$lang['No_banned_users'] = "Non hai Usuarios baneados";
$lang['No_banned_ip'] = "Non hai direcci�ns de IP baneadas";
$lang['No_banned_email'] = "Non hai enderezos de email baneados";

$lang['Ban_update_sucessful'] = "A lista de BAN foi actualizada correctamente";
$lang['Click_return_banadmin'] = "Prema %sAqu�%s para volver � Panel de Control de BANS";


//
// Configuraci�n
//
$lang['General_Config'] = "Configuraci�n Xeral";
$lang['Config_explain'] = "O seguiente formulario, permitiralle cambia-las opci�ns do seu foro. Para a configuraci�n de Usuarios e Foros use os enlaces da esquerda.";

$lang['Click_return_config'] = "Prema %sAqu�%s para volver � Configuraci�n Xeral";

$lang['General_settings'] = "Configuraci�n Xeral do Foro";
$lang['Server_name'] = "Nome de Dominio";
$lang['Server_name_explain'] = "O nome de dominio no que corre este Foro";
$lang['Script_path'] = "Ruta do Script";
$lang['Script_path_explain'] = "A ruta onde phpBB2 est� ubicado, relativo � nome de dominio";
$lang['Server_port'] = "Porto do Servidor";
$lang['Server_port_explain'] = "O porto no que corre o servidor, xeralmente 80. S� cambiar se difire deste valor.";
$lang['Site_name'] = "Nome do Sitio";
$lang['Site_desc'] = "Descrici�n do Sito";
$lang['Board_disable'] = "Desactivar Foro";
$lang['Board_disable_explain'] = "Esto far� que os Usuarios non te�an acceso � Foro. Non se desloguee mentres desactiva o Foro, xa que no poder� volver loguearse novamente";
$lang['Acct_activation'] = "Debe activa-las contas";
$lang['Acc_None'] = "Ningu�n"; // Os tres tipos de activaci�n
$lang['Acc_User'] = "O Usuario";
$lang['Acc_Admin'] = "O Administrador";

$lang['Abilities_settings'] = "Configuraci�n B�sica de Usuario e do Foro";
$lang['Max_poll_options'] = "N�mero m�ximo de items en Enquisas";
$lang['Flood_Interval'] = "Intervalo de Flood";
$lang['Flood_Interval_explain'] = "Cantidade de segundos que o usuario debe agardar para publicar temas";
$lang['Board_email_form'] = "Email de Usuarios a trav�s do Foro";
$lang['Board_email_form_explain'] = "Os usuarios env�anse emails mediante o Foro";
$lang['Topics_per_page'] = "Temas por P�xina";
$lang['Posts_per_page'] = "Respostas por P�xina";
$lang['Hot_threshold'] = "Cantidade de respostas para ser considerado Popular";
$lang['Default_style'] = "Estilo por defecto";
$lang['Override_style'] = "Ignora-lo estilo do Usuario";
$lang['Override_style_explain'] = "Utilizarase o estilo seleccionado por defecto sen importa-la elecci�n do usuario";
$lang['Default_language'] = "Linguaxe por Defecto";
$lang['Date_format'] = "Formato da Data";
$lang['System_timezone'] = "Zona Horaria";
$lang['Enable_gzip'] = "Activa-la Compresi�n GZip";
$lang['Enable_prune'] = "Habilitar Purgado no Foro";
$lang['Allow_HTML'] = "Permitir HTML";
$lang['Allow_BBCode'] = "Permitir BBCode";
$lang['Allowed_tags'] = "Permitir HTML tags";
$lang['Allowed_tags_explain'] = "Separar tags con comas";
$lang['Allow_smilies'] = "Permitir Emoticonos";
$lang['Smilies_path'] = "Ruta de almacenaxe dos Emoticonos";
$lang['Smilies_path_explain'] = "Ruta desde o directorio phpBB, por exemplo images/smiles";
$lang['Allow_sig'] = "Permitir Sinaturas";
$lang['Max_sig_length'] = "M�xima lonxitude da Sinatura";
$lang['Max_sig_length_explain'] = "M�xima cantidade de caracteres da Sinatura";
$lang['Allow_name_change'] = "Permiti-lo Cambio do Nome de Usuario";

$lang['Avatar_settings'] = "Configuraci�n dos Avatares";
$lang['Allow_local'] = "Habilitar galer�as Avatares";
$lang['Allow_remote'] = "Habilitar Avatares Remotos";
$lang['Allow_remote_explain'] = "Permitir amosar Avatares gardados noutros sitios web";
$lang['Allow_upload'] = "Habilitar upload de Avatares";
$lang['Max_filesize'] = "Tama�o m�ximo para as imaxes";
$lang['Max_filesize_explain'] = "Limita-la cantidade de bytes que pode ter un Avatar";
$lang['Max_avatar_size'] = "M�ximo Tama�o do Avatar";
$lang['Max_avatar_size_explain'] = "(Altura x Ancho en pixels)";
$lang['Avatar_storage_path'] = "Ruta do Avatar";
$lang['Avatar_storage_path_explain'] = "Ruta dentro de phpBB onde se atopan os Avatares, exemplo images/avatars";
$lang['Avatar_gallery_path'] = "Ruta da Galer�a de Avatares";
$lang['Avatar_gallery_path_explain'] = "Ruta dentro de phpBB da galer�a, ex: images/avatars/gallery";

$lang['COPPA_settings'] = "Configuraci�ns COPPA";
$lang['COPPA_fax'] = "N�mero de Fax COPPA";
$lang['COPPA_mail'] = "Enderezo de Correo COPPA";
$lang['COPPA_mail_explain'] = "Este � o enderezo de correo onde os pais deben envia-lo formulario COPPA";

$lang['Email_settings'] = "Configuraci�n do Email";
$lang['Admin_email'] = "Enderezo do email do Administrador";
$lang['Email_sig'] = "Sinatura";
$lang['Email_sig_explain'] = "Este texto engadirase � final de cada email";
$lang['Use_SMTP'] = "Usar servidor SMTP para Email";
$lang['Use_SMTP_explain'] = "Diga se vostede pode e/ou debe envia-los emails por un servidor SMTP";
$lang['SMTP_server'] = "Direcci�n SMTP do Servidor";
$lang['SMTP_username'] = "Nome de usuario do SMTP";
$lang['SMTP_username_explain'] = "Ingrese un nome de usuario s� se o seu servidor SMTP o require";
$lang['SMTP_password'] = "Contrasinal do SMTP";
$lang['SMTP_password_explain'] = "Ingrese un contrasinal s� se o seu servidor SMTP o require";

$lang['Disable_privmsg'] = "Mensaxe Privada";
$lang['Inbox_limits'] = "M�xima cantidade de mensaxes na Bandexa de Entrada";
$lang['Sentbox_limits'] = "M�xima cantidade de mensaxes na Bandexa de Sa�da";
$lang['Savebox_limits'] = "M�xima cantidade de mensaxes na Carpeta para Gardar";

$lang['Cookie_settings'] = "Configuraci�n das Cookies"; 
$lang['Cookie_settings_explain'] = "Isto controla como se env�an as cookies � Navegador, na meirande parte dos casos a configuraci�n preestablecida ser� m�is que suficiente. Se necesita cambiar isto te�a coidado, xa que en caso de configuralo mal poder�a facer que os seus Usuarios non podan Ingresar � Foro";
$lang['Cookie_domain'] = "Dominio da Cookie";
$lang['Cookie_name'] = "Nome da Cookie";
$lang['Cookie_path'] = "Ruta da Cookie";
$lang['Cookie_secure'] = "Cookie segura [ https ]";
$lang['Cookie_secure_explain'] = "Se o seu servidor est� correndo v�a SSL marque esta opci�n, se non d�ixeo deshabilitado";
$lang['Session_length'] = "Duraci�n da sesi�n [ segundos ]";


//
// Xesti�n do Foro
//
$lang['Forum_admin'] = "Administraci�n do Foro";
$lang['Forum_admin_explain'] = "Desde este panel vostede pode engadir, borrar, editar, e re-ordenar categor�as e Foros";
$lang['Edit_forum'] = "Edita-lo Foro";
$lang['Create_forum'] = "Crear un novo Foro";
$lang['Create_category'] = "Crear unha nova Categor�a";
$lang['Remove'] = "Quitar";
$lang['Action'] = "Acci�n";
$lang['Update_order'] = "Actualizar Orde";
$lang['Config_updated'] = "Configuraci�n do Foro actualizada satisfactoriamente";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Borrar";
$lang['Move_up'] = "Cara arriba";
$lang['Move_down'] = "Cara abaixo";
$lang['Resync'] = "Sincronizar";
$lang['No_mode'] = "Ning�n modo foi seleccionado";
$lang['Forum_edit_delete_explain'] = "O seguinte formulario permitiralle personalizar as opci�ns do Foro. Para a configuraci�n de usuarios e Foros utilice os enlaces da esquerda.";

$lang['Move_contents'] = "Mover t�dolos contidos";
$lang['Forum_delete'] = "Borra-lo Foro";
$lang['Forum_delete_explain'] = "O seguinte formulario permitiralle Borrar alg�n foro (ou categor�a) e dicir donde desexa colocar t�dolos T�picos e Categor�as.";
$lang['Status_locked'] = 'Pechado';
$lang['Status_unlocked'] = 'Aberto';

$lang['Forum_settings'] = "Configuraci�n Xeral do Foro";
$lang['Forum_name'] = "Nome do Foro";
$lang['Forum_desc'] = "Descrici�n";
$lang['Forum_status'] = "Estado do Foro";
$lang['Forum_pruning'] = "Auto-purgado";

$lang['prune_freq'] = 'Chequear temas e idade';//Ver Pruning!
$lang['prune_days'] = "Quitar Temas que non te�en resposta";
$lang['Set_prune_data'] = "Vostede seleccionou a opci�n Auto-purgado para este foro pero non seleccionou a frecuencia ou cantidade de d�as para o PURGADO. Por favor regrese e efect�e os cambios";

$lang['Move_and_Delete'] = "Mover e Borrar";

$lang['Delete_all_posts'] = "Borrar t�dolos Temas";
$lang['Nowhere_to_move'] = "Ning�n sitio a onde mover";

$lang['Edit_Category'] = "Editar Categor�a";
$lang['Edit_Category_explain'] = "Utilice este formulario para Editar categor�as";

$lang['Forums_updated'] = "A informaci�n do Foro e as s�as categor�as de foros actualizadas satisfactoriamente";

$lang['Must_delete_forums'] = "Necesita Borrar t�dolos foros antes de borrar unha Categor�a";

$lang['Click_return_forumadmin'] = "Prema %sAqu�%s para volver � Administraci�n do Foro";


//
// Xesti�n de Smileis
//
$lang['smiley_title'] = "Utilidade para a edici�n de Smileis";
$lang['smile_desc'] = "Desde esta p�xina vostede pode engadir, quitar ou editar alg�n emoticono para que os Usuarios utilicen no foro e nas mensaxes Privadas";

$lang['smiley_config'] = "Configuraci�n de Smilei";
$lang['smiley_code'] = "C�digo de Smilei";
$lang['smiley_url'] = "Arquivo de Imaxe do Smilei";
$lang['smiley_emot'] = "Emoci�n do Smilei";
$lang['smile_add'] = "Engadir un novo Smilei";
$lang['Smile'] = "Smilei";
$lang['Emotion'] = "Emoci�n";

$lang['Select_pak'] = "Seleccione o arquivo .pak";
$lang['replace_existing'] = "Reemprazar Smileis Existentes";
$lang['keep_existing'] = "Manter Smileis Existentes";
$lang['smiley_import_inst'] = "Vostede debe descomprimi-lo paquete de Smileis e subir t�dolos arquivos no directorio de Smileis para as� lograr a s�a correcta instalaci�n. Despois seleccione a informaci�n correcta desde este formulario para as� poder importa-los Smileis";
$lang['smiley_import'] = "Importar paquete de Smileis";
$lang['choose_smile_pak'] = "Escoller arquivo de paquete (.pak)";
$lang['import'] = "Importar Smileis";
$lang['smile_conflicts'] = "Que se deber�a realizar en caso de conflicto";
$lang['del_existing_smileys'] = "Borra-los smileis existentes antes de importalos";
$lang['import_smile_pack'] = "Importar Paquete de Smileis";
$lang['export_smile_pack'] = "Crear un paquete de Smileis";
$lang['export_smiles'] = "Para crear un paquete de Smileis dos seus smileis instalados, prema %sAqu�%s para baixa-lo arquivo smiles.pak. Nomee este arquivo de forma apropiada pero aseg�rese de manter a extension .pak. Despois cree un arquivo zip que conte�a t�dolos smileis mailo arquivo .pak.";

$lang['smiley_add_success'] = "Os Smileis foron engadidos satisfactoriamente";
$lang['smiley_edit_success'] = "Os Smileis foron actualizados satisfactoriamente ";
$lang['smiley_import_success'] = "O paquete de Smileis foi importado correctamente.";
$lang['smiley_del_success'] = "Os Smileis foron eliminados satisfactoriamente.";
$lang['Click_return_smileadmin'] = "Prema %sAqu�%s para volver � Panel de Smiles";


//
// Xesti�n de Usuarios
//
$lang['User_admin'] = "Administraci�n de Usuarios";
$lang['User_admin_explain'] = "Desde aqu� vostede pode cambia-la informaci�n do usuario. Para modifica-los permisos dun Usuario por favor utilice o Sistema de Permisos de usuarios e Grupos.";

$lang['Look_up_user'] = "Observar Usuario";

$lang['Admin_user_fail'] = "Non se logrou actualiza-lo perfil do Usuario";
$lang['Admin_user_updated'] = "O perfil do Usuario foi actualizado satisfactoriamente";
$lang['Click_return_useradmin'] = "Prema %sAqu�%s para voltar � Panel de Administraci�n de Usuarios";

$lang['User_delete'] = "Borrar Usuario";
$lang['User_delete_explain'] = "Prema aqu� para borrar este Usuario. Te�a en conta que logo non poder� restauralo.";
$lang['User_deleted'] = "O Usuario foi borrado satisfactoriamente.";

$lang['User_status'] = "Usuario Activo";
$lang['User_allowpm'] = "Pode enviar mensaxes privadas";
$lang['User_allowavatar'] = "Pode mostra-lo seu Avatar";

$lang['Admin_avatar_explain'] = "Desde aqu� pode ver e borrar-lo Avatar do Usuario";

$lang['User_special'] = "Campos especiais para Administradores";
$lang['User_special_explain'] = "Estos campos non est�n dispo�ibles para que os Usuarios os modifiquen. Desde aqu� vostede pode configura-lo status e outras opci�ns que os Usuarios non poden modificar.";


//
// Xesti�n de Grupos
//
$lang['Group_administration'] = "Administraci�n de Grupos";
$lang['Group_admin_explain'] = "Desde este panel pode modifica-los Grupos, vostede pode borrar, crear e edita-los Grupos existentes. Tam�n pode escolle-los Moderadores e cambia-lo nome do Grupo e a sua descrici�n";
$lang['Error_updating_groups'] = "Ocurreu un erro actualizando o Grupo";
$lang['Updated_group'] = "O Grupo foi actualizado correctamente";
$lang['Added_new_group'] = "O Novo Grupo foi creado";
$lang['Deleted_group'] = "O Grupo foi borrado";
$lang['New_group'] = "Crear Novo Grupo";
$lang['Edit_group'] = "Editar Grupo";
$lang['group_name'] = "Nome do Grupo";
$lang['group_description'] = "Descrici�n do Grupo";
$lang['group_moderator'] = "Moderador do Grupo";
$lang['group_status'] = "Estado do Grupo";
$lang['group_open'] = "Grupo Aberto";
$lang['group_closed'] = "Grupo Pechado";
$lang['group_hidden'] = "Grupo Oculto";
$lang['group_delete'] = "Borrar Grupo";
$lang['group_delete_check'] = "Borrar este Grupo";
$lang['submit_group_changes'] = "Aceptar Cambios";
$lang['reset_group_changes'] = "Anular Cambios";
$lang['No_group_name'] = "Debe especificar un Nome para este Grupo";
$lang['No_group_moderator'] = "Debe especificar un Moderador para este Grupo";
$lang['No_group_mode'] = "Debe especifica-lo modo deste Grupo, Aberto ou Pechado";
$lang['delete_group_moderator'] = "�Borrar-lo antigo moderador do Grupo?";
$lang['delete_moderator_explain'] = "Se est� cambiando o moderador do Grupo, seleccione esta cela para quita-lo antigo Moderador do Grupo. Se n�n o Usuario convertirase nun membro regular.";
$lang['Click_return_groupsadmin'] = "Prema %sAqu�%s para volver � Panel de Administraci�n de Grupos.";
$lang['Select_group'] = "Seleccione un Grupo";
$lang['Look_up_group'] = "Observar un Grupo";
$lang['No_group_action'] = 'Non se especificou unha acci�n'; 


//
// Administraci�n do Purgado
//
$lang['Forum_Prune'] = "Purgado de Foros";
$lang['Forum_Prune_explain'] = "Isto borrar� t�dolos t�picos nos que non se te�an publicado novas mensaxes nos d�as que vostede seleccionou. Se non ingresa un n�mero ent�n t�dolos temas ser�n borrados. No se borrar�n temas nos que haxa enquisas que estean activas nin anuncios. Ter� que quitar estes temas de xeito manual.";
$lang['Do_Prune'] = "Realiza-lo Purgado";
$lang['All_Forums'] = "T�dolos Foros";
$lang['Prune_topics_not_posted'] = "Borrar temas sen respostas dunha antig�idade destes d�as";
$lang['Topics_pruned'] = "T�picos borrados";
$lang['Posts_pruned'] = "Mensaxes borradas";
$lang['Prune_success'] = "O Purgado dos foros foi exitoso";


//
// Censor de palabras
//
$lang['Words_title'] = "Control de Palabras Censuradas";
$lang['Words_explain'] = "Desde aqu� vostede pode engadir, editar, e quitar palabras que automaticamente ser�n censuradas dos seus foros. Estas palabras non poder�n ser escollidas como nomes de usuarios. Os asteriscos (*) son aceptados nos campos das palabras, exemplo *proba* , proba* (coller�a probao), *proba (coller�a aproba).";
$lang['Word'] = "Palabra";
$lang['Edit_word_censor'] = "Edita-lo Censor de Palabras";
$lang['Replacement'] = "Reemprazar";
$lang['Add_new_word'] = "Engadir nova palabra";
$lang['Update_word'] = "Actualizar censor de palabras";

$lang['Must_enter_word'] = "Debe colocar unha palabra e o seu reemprazo";
$lang['No_word_selected'] = "Non se seleccionou unha palabra para o reemprazo";

$lang['Word_updated'] = "Realiz�ronse os cambios satisfactoriamente";
$lang['Word_added'] = "A nova palabra foi engadida con �xito";
$lang['Word_removed'] = "A palabra foi retirada do Censor de Palabras";

$lang['Click_return_wordadmin'] = "Prema %sAqu�%s para volver � Administrador de Palabras Censuradas";


//
// Email Masivo
//
$lang['Mass_email_explain'] = "Desde aqu� vostede pode enviar mensaxes de email a t�dolos seus Usuarios e Grupos. � facer isto enviarase un email desde o email administrativo inidicado previamente. Se env�a este email a un Grupo numeroso por favor sexa paciente e agarde a que remate de carga-la p�xina. � normal que tarde uns cantos minutos, vostede ser� notificado unha vez finalizado o env�o.";
$lang['Compose'] = "Escribir"; 

$lang['Recipients'] = "Emails"; 
$lang['All_users'] = "A t�dolos Usuarios";

$lang['Email_successfull'] = "O seu email foi enviado";
$lang['Click_return_massemail'] = "Prema %sAqu�%s para volver � Panel para Enviar emails Masivos";


//
// Administraci�n de Rangos
//
$lang['Ranks_title'] = "Administraci�n de Rangos";
$lang['Ranks_explain'] = "Usando este formulario vostede pode engadir, editar, ver e borrar rangos. Vostede tam�n pode crear rangos especiais que poden ser aplicados a un usuario a traves do panel de Administraci�n de Usuarios";

$lang['Add_new_rank'] = "Engadir Rango";

$lang['Rank_title'] = "T�tulo do Rango";
$lang['Rank_special'] = "Seleccionar como Rango Especial";
$lang['Rank_minimum'] = "M�nima cantidade de Mensaxes";
$lang['Rank_maximum'] = "M�xima cantidade de Mensaxes";
$lang['Rank_image'] = "Im�xe do rango (te�a en conta a ruta do foro phpBB2)";
$lang['Rank_image_explain'] = "Utilice isto para definir unha pequena imaxe para este rango";

$lang['Must_select_rank'] = "Debe seleccionar un Rango";
$lang['No_assigned_rank'] = "Non seleccionou un Rango";

$lang['Rank_updated'] = "O Rango foi actualizado";
$lang['Rank_added'] = "O novo Rango foi engadido";
$lang['Rank_removed'] = "O Rango foi borrado";
$lang['No_update_ranks'] = "O Rango foi borrado. Sin embargo, as contas de usuario que estivesen usando este rango non foron actualizadas. Necesitar� actualizar manualmente esas contas";


$lang['Click_return_rankadmin'] = "Prema %sAqu�%s para volver � Panel de Administraci�n de Rangos";


//
// Prohibir nome de usuario
//
$lang['Disallow_control'] = "Control de Admisi�n de Usuario";
$lang['Disallow_explain'] = "Desde aqu� pode controla-los nomes de usuario que desexa que non sexan utilizados. Para lograr isto debe utilizar asteriscos coma comod�ns (*). Lembre que non pode prohibir nomes de usuario que xa se estean a utilizar. Antes de prohibir eses nomes debe borra-los usuarios que os usen.";

$lang['Delete_disallow'] = "Borrar";
$lang['Delete_disallow_title'] = "Borrar un nome de usuario non permitido";
$lang['Delete_disallow_explain'] = "Vostede pode quitar nomes de usuario non permitidos seleccionando o nome de usuario da lista e facendo click en Aceptar";

$lang['Add_disallow'] = "Engadir";
$lang['Add_disallow_title'] = "Engadir un nome de usuario non permitido";
$lang['Add_disallow_explain'] = "Vostede pode non permitir un nome de usuario utilizando m�scaras con asteriscos(*)";

$lang['No_disallowed'] = "Nomes de usuarios non permitidos";

$lang['Disallowed_deleted'] = "O nome de usuario non permitido foi borrado";
$lang['Disallow_successful'] = "O nome de usuario non permitido foi engadido";
$lang['Disallowed_already'] = "O nome de usuario non permitido que seleccionou non pode ser seleccionado. Debido a que xa existe na lista, ou existe na Lista de Palabras Censuradas, ou ben xa se encontra na lista de usuarios non permitidos";

$lang['Click_return_disallowadmin'] = "Prema %saqu�%s para volver � Control de Admisi�n de Usuario";


//
// Administraci�n de Estilo
//
$lang['Styles_admin'] = "Administraci�n de Estilos";
$lang['Styles_explain'] = "Desde aqu� vostede pode doadamente engadir, quitar e administra-los estilos (plantillas e temas) dispo�ibles para os seus usuarios";
$lang['Styles_addnew_explain'] = "A seguinte lista cont�n t�dolos temas que est�n dispo�ibles para as plantillas. Os items da lista non foron instalados na base dos foros phpBB. Para facelo simplemente faga clic no enlace que figura � lado de cada opci�n";

$lang['Select_template'] = "Seleccione unha Plantilla";

$lang['Style'] = "Estilo";
$lang['Template'] = "Plantilla";
$lang['Install'] = "Instalar";
$lang['Download'] = "Descargar";

$lang['Edit_theme'] = "Editar Tema";
$lang['Edit_theme_explain'] = "No seguinte formulario pode edita-la configuraci�n do tema seleccionado";

$lang['Create_theme'] = "Crear Tema";
$lang['Create_theme_explain'] = "Utilice o seguinte formulario para crear un tema novo para a plantilla seleccionada. Cando ingrese as cores (as cales debe ingresar de forma hexadecimal) non debe inclui-la # . Exemplo: CCCCCC � v�lido, non as� #CCCCCC";

$lang['Export_themes'] = "Exportar Tema";
$lang['Export_explain'] = "Desde este panel vostede poder� exporta-lo tema para a plantilla seleccionada. Seleccione a plantilla da lista de abaixo e o programa crear� o arquivo de configuraci�n do tema e as� poder� gardalo. Se non se pode grava-lo arquivo brindar�selle a vostede a oportunidad de Descargalo. Para que o programa poda gardalo vostede debe dar permiso de escritura � carpeta de plantillas (template). Para m�is informaci�n utilice a gu�a do foro phpBB 2";

$lang['Theme_installed'] = "O tema seleccionado foi instalado correctamente";
$lang['Style_removed'] = "O estilo seleccionado foi borrado da base de datos. Para borralo completamente debe borra-lo directorio apropiado do directorio de plantillas (template)";
$lang['Theme_info_saved'] = "A informaci�n para a plantilla seleccionada foi gardada. Agora debe restablece-los permisos en theme_info.cgf e po�e-lo directorio de plantillas (template) en modo de s�-lectura";
$lang['Theme_updated'] = "O tema seleccionado foi actualizado. Agora debe exporta-la configuraci�n do novo tema";
$lang['Theme_created'] = "Tema Creado. Agora debe exporta-lo tema no arquivo de configuraci�n de temas para as� lograr mantelo seguro";

$lang['Confirm_delete_style'] = "Est� seguro que desexa borrar este estilo";

$lang['Download_theme_cfg'] = "Non se puido exportar-lo arquivo xa que non se puido escribir no arquivo. Prema o bot�n de embaixo para descargar este arquivo co seu navegador. Unha vez que o descargue pode movelo � directorio das plantillas (template).";
$lang['No_themes'] = "A plantilla que seleccionou non ten temas adxuntos. Para crear un novo tema prema en 'Crear Novo Tema' na esquerda do panel";
$lang['No_template_dir'] = "Non se logrou abri-la carpeta de plantillas. Isto pode deberse a que estea con permisos sen lectura, ou que esta non exista.";
$lang['Cannot_remove_style'] = "Non pode quita-lo estilo seleccionado xa que � o que est� por defecto no foro. Por favor cambie o que se utiliza por defecto e t�nteo novamente";
$lang['Style_exists'] = "O nome de estilo seleccionado xa existe, por favor volte atr�s e seleccione outro distinto";

$lang['Click_return_styleadmin'] = "Prema %sAqu�%s para volver � Administraci�n de Estilos";

$lang['Theme_settings'] = "Configuraci�n de Temas";
$lang['Theme_element'] = "Elementos de Temas";
$lang['Simple_name'] = "Nome simple";
$lang['Value'] = "Valor";
$lang['Save_Settings'] = "Gardar Configuraci�n";

$lang['Stylesheet'] = "Folla de estilos CSS";
$lang['Background_image'] = "Imaxe de Fondo";
$lang['Background_color'] = "Cor de Fondo";
$lang['Theme_name'] = "Nome de Tema";
$lang['Link_color'] = "Cor de Link";
$lang['Text_color'] = "Cor de Texto";
$lang['VLink_color'] = "Cor de Link Visitado";
$lang['ALink_color'] = "Cor de Link Activo";
$lang['HLink_color'] = "Cor de Link Hover";
$lang['Tr_color1'] = "T�boa Fila Cor 1";
$lang['Tr_color2'] = "T�boa Fila Cor 2";
$lang['Tr_color3'] = "T�boa Fila Cor 3";
$lang['Tr_class1'] = "T�boa Fila Clase 1";
$lang['Tr_class2'] = "T�boa Fila Clase 2";
$lang['Tr_class3'] = "T�boa Fila Clase 3";
$lang['Th_color1'] = "T�boa Encabezado Cor 1";
$lang['Th_color2'] = "T�boa Encabezado Cor 2";
$lang['Th_color3'] = "T�boa Encabezado Cor 3";
$lang['Th_class1'] = "T�boa Encabezado Clase 1";
$lang['Th_class2'] = "T�boa Encabezado Clase 2";
$lang['Th_class3'] = "T�boa Encabezado Clase 3";
$lang['Td_color1'] = "T�boa Cela Cor 1";
$lang['Td_color2'] = "T�boa Cela Cor 2";
$lang['Td_color3'] = "T�boa Cela Cor 3";
$lang['Td_class1'] = "T�boa Cela Clase 1";
$lang['Td_class2'] = "T�boa Cela Clase 2";
$lang['Td_class3'] = "T�boa Cela Clase 3";
$lang['fontface1'] = "Fonte 1";
$lang['fontface2'] = "Fonte 2";
$lang['fontface3'] = "Fonte 3";
$lang['fontsize1'] = "Fonte Tama�o 1";
$lang['fontsize2'] = "Fonte Tama�o 2";
$lang['fontsize3'] = "Fonte Tama�o 3";
$lang['fontcolor1'] = "Fonte Cor 1";
$lang['fontcolor2'] = "Fonte Cor 2";
$lang['fontcolor3'] = "Fonte Cor 3";
$lang['span_class1'] = "Espacio Clase 1";
$lang['span_class2'] = "Espacio Clase 2";
$lang['span_class3'] = "Espacio Clase 3";
$lang['img_poll_size'] = "Imaxe da Enquisa [px]";
$lang['img_pm_size'] = "Tama�o de imaxe de Mensaxes Privadas [px]";


//
// Proceso de Instalaci�n
//
$lang['Welcome_install'] = "Benvido � Instalaci�n dos foros phpBB 2";
$lang['Initial_config'] = "Configuraci�n B�sica";
$lang['DB_config'] = "Configuraci�n da Base de Datos";
$lang['Admin_config'] = "Configuraci�n do Administrador";
$lang['continue_upgrade'] = "Unha vez que descargue o arquivo de configuraci�n prema sobre \"Continuar Actualizaci�n\" para continuar co proceso. Por favor agarde para subi-lo arquivo de configuraci�n ata que o proceso de actualizaci�n finalice";
$lang['upgrade_submit'] = "Continuar Actualizaci�n";

$lang['Installer_Error'] = "Ocurreu un erro durante a Instalaci�n";
$lang['Previous_Install'] = "Non se detectou unha Instalaci�n previa";
$lang['Install_db_error'] = "Ocurreu un erro actualizando a Base de Datos";

$lang['Re_install'] = "A s�a instalaci�n previa a�nda se atopa activa. <br /><br />Se desexa reinstala-los foros phpBB 2 prema Si no boton de abaixo. Por favor te�a en conta que � realizar isto destruirase a informaci�n existente, non se far�n copias de seguridade. O usuario administrador e o contrasinal que vostede usaba anteriormente ser�n creados novamente, mais non outro tipo de informaci�n <br /><br />�P�nseo coidadosamente antes de premer SI!";

$lang['Inst_Step_0'] = "Gracias por elixir phpBB 2. Para finaliza-la instalaci�n por favor complete os datos requiridos embaixo. Te�a en conta que a Base de Datos destinada �s foros xa deber�a existir. Se est� instalando nunha Base de Datos que utiliza OBDC, por exemplo MS Access primeiro deber� crear un DNS e despois continuar.";

$lang['Start_Install'] = "Comezar Instalaci�n";
$lang['Finish_Install'] = "Finalizar Instalaci�n";

$lang['Default_lang'] = "Linguaxe por defecto";
$lang['DB_Host'] = "Nome de Dominio da Base de Datos / DSN";
$lang['DB_Name'] = "Nome da s�a base de Datos";
$lang['DB_Username'] = "Nome de usuario da base de datos";
$lang['DB_Password'] = "Contrasinal da base de datos";
$lang['Database'] = "A s�a Base de Datos";
$lang['Install_lang'] = "Elixa a Linguaxe de Instalaci�n";
$lang['dbms'] = "Tipo de Base de Datos";
$lang['Table_Prefix'] = "Prefixo para t�boas na Base de datos";
$lang['Admin_Username'] = "Nome de Usuario do Administrador";
$lang['Admin_Password'] = "Contrasinal do Administrador";
$lang['Admin_Password_confirm'] = "Contrasinal de acceso do Administrador [ Confirma ]";

$lang['Inst_Step_2'] = "O seu usuario administrador e contrasinal foron creados. Neste punto o proceso de Instalaci�n B�sica foi completado. Agora ser� enviado a unha pantalla que lle permitir� administra-la nova instalaci�n. Por favor aseg�rese de verifica-la Configuraci�n Xeral e de ter realizado os cambios requiridos. Gracias por escoller phpBB 2";

$lang['Unwriteable_config'] = "O seu arquivo de configuraci�n esta nun modo de non-escritura. Unha copia do arquivo de configuraci�n poder� ser descargada cando prema o bot�n seguinte. Vostede debe subir este arquivo no mesmo directorio onde se atope o foro phpBB 2. Unha vez que isto se realice debe ingresar usando o usuario de administrador e contrasinal que vostede escolleu no formulario anterior e as� visita-lo Control de Administraci�n para ve-la configuraci�n xeral. Gracias por escoller phpBB 2";
$lang['Download_config'] = "Descargar Configuraci�n";

$lang['ftp_choose'] = "Escoller M�todo de Descarga";
$lang['ftp_option'] = "<br />Xa que as extensi�ns FTP est�n dispo�ibles nesta versi�n de PHP vostede poder� escoller se quere, mediante FTP, colocar o arquivo no seu lugar automaticamente.";
$lang['ftp_instructs'] = "Vostede seleccionou subir automaticamente por ftp o arquivo na conta que cont�n o phpBB 2. Por favor ingrese a informaci�n solicitada para facilita-lo proceso. Te�a en conta que a ruta FTP debe se-la ruta exacta � PHPBB 2 como se fose a subi-los arquivos usando calquera cliente de ftp.";
$lang['ftp_info'] = "Ingrese a Informaci�n do su FTP";
$lang['Attempt_ftp'] = "Tentar subi-lo arquivo mediante ftp de forma autom�tica";
$lang['Send_file'] = "Env�enme o arquivo a min e eu o subireino persoalmente por FTP";
$lang['ftp_path'] = "Ruta FTP � phpBB 2";
$lang['ftp_username'] = "Nome de Usuario FTP";
$lang['ftp_password'] = "Contrasinal FTP";
$lang['Transfer_config'] = "Iniciar Transferencia";
$lang['NoFTP_config'] = "O intento de subir por ftp o arquivo de configuraci�n errou. Por favor descargue o arquivo de configuraci�n e s�bao por FTP de forma manual.";

$lang['Install'] = "Instalar";
$lang['Upgrade'] = "Actualizar";


$lang['Install_Method'] = "Escolla o seu m�todo de Instalacion";

$lang['Install_No_Ext'] = "A configuraci�n de PHP no seu servidor non soporta o tipo de base de datos seleccionado";

$lang['Install_No_PCRE'] = "phpBB2 require o m�dulo de expresi�ns regulares compatible con Perl para php, que non figura como soportado na s�a configuraci�n de php!";

//
// Xa chegou eh!!
// -------------------------------------------------

?>