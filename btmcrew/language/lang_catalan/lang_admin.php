<?php

/***************************************************************************
 *                            lang_admin.php [Catalan]
 *                              -------------------
 *     begin                : Sun Jul 21 2002
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2002/09/27 10:31:03 psotfx Exp $
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Administraci� General";
$lang['Users'] = "Administraci� dels Usuaris";
$lang['Groups'] = "Administraci� dels Grups";
$lang['Forums'] = "Administraci� dels F�rums";
$lang['Styles'] = "Administraci� dels Estils";

$lang['Configuration'] = "Configuraci�";
$lang['Permissions'] = "Permisos";
$lang['Manage'] = "Gesti�";
$lang['Disallow'] = "Deshabilitar noms d'usuari";
$lang['Prune'] = "Podar";
$lang['Mass_Email'] = "Correu Massiu";
$lang['Ranks'] = "Rangs";
$lang['Smilies'] = "Smileys";
$lang['Ban_Management'] = "Control d'Exclusi�";
$lang['Word_Censor'] = "Paraules Censurades";
$lang['Export'] = "Exportar";
$lang['Create_new'] = "Crear";
$lang['Add_new'] = "Afegir";
$lang['Backup_DB'] = "C�pia de seguretat de la Base de Dades";
$lang['Restore_DB'] = "Restaurar la Base de Dades";


//
// �ndex
//
$lang['Admin'] = "Administraci�";
$lang['Not_admin'] = "No est�s autoritzat a administrar aquest f�rum";
$lang['Welcome_phpBB'] = "Benvingut a phpBB";
$lang['Admin_intro'] = "Gr�cies per triar phpBB com a soluci� per al teu f�rum. Aquesta pantalla et donar� una s�ntesi de totes les estad�stiques del teu f�rum. Pots tornar a aquesta p�gina clicant a l'enlla� <u>�ndex de l'Administrador</u> al quadre de l'esquerra. Per tornar a l'�ndex del teu f�rum, clica el logo de phpBB que tamb� es troba al quadre de l'esquerra. Els altres enlla�os ubicats a l'esquerra d'aquesta pantalla et permetran controlar cadascun dels aspectes del teu f�rum, cada pantalla tindr� instruccions sobre com utilitzar les eines.";
$lang['Main_index'] = "�ndex del F�rum";
$lang['Forum_stats'] = "Estad�stiques del F�rum";
$lang['Admin_Index'] = "�ndex de l'Administrador";
$lang['Preview_forum'] = "Vista pr�via del F�rum";

$lang['Click_return_admin_index'] = "Clica %sAqu�%s per tornar a l'�ndex de l'Administrador";

$lang['Statistic'] = "Estad�stica";
$lang['Value'] = "Valor";
$lang['Number_posts'] = "Nombre de missatges";
$lang['Posts_per_day'] = "Missatges per dia";
$lang['Number_topics'] = "Nombre de temes";
$lang['Topics_per_day'] = "Temes per dia";
$lang['Number_users'] = "Nombre d'usuaris";
$lang['Users_per_day'] = "Usuaris per dia";
$lang['Board_started'] = "Data d'inici del F�rum";
$lang['Avatar_dir_size'] = "Mida del directori d'Avatars";
$lang['Database_size'] = "Mida de la Base de Dades";
$lang['Gzip_compression'] ="Compressi� Gzip";
$lang['Not_available'] = "No disponible";

$lang['ON'] = "ON"; // Aix� �s per Compressi� Gzip
$lang['OFF'] = "OFF"; 


//
// Utilitats de la BD
//
$lang['Database_Utilities'] = "Utilitats de la Base de Dades";

$lang['Restore'] = "Restaurar";
$lang['Backup'] = "C�pia de seguretat";
$lang['Restore_explain'] = "Aix� restaurar� totes les taules de phpBB des d'un arxiu guardat. Si el teu servidor ho suporta pots pujar un arxiu de text comprimit amb gzip i es descomprimir� autom�ticament. <b>ATENCI�</b> Aix� sobreescriur� les dades existents. Restaurar la base de dades pot trigar una bona estona, si us plau no et moguis d'aquesta p�gina fins que s'hagi completat el proc�s.";
$lang['Backup_explain'] = "Aqu� pots fer una c�pia de seguretat de totes les teves dades relacionades amb phpBB. Si tens taules addicionals a la mateixa base de dades que tamb� volguessis guardar si us plau introdueix els seus noms separats per comes al quadre de text de Taules Addicionals que hi ha a sota. Si el teu servidor ho suporta tamb� pots comprimir l'arxiu amb gzip per reduir la seva mida abans de descarregar-lo.";

$lang['Backup_options'] = "Opcions de la c�pia de seguretat";
$lang['Start_backup'] = "Comen�ar la c�pia de seguretat";
$lang['Full_backup'] = "C�pia de seguretat completa";
$lang['Structure_backup'] = "Copiar nom�s l'estructura";
$lang['Data_backup'] = "Copiar nom�s les dades";
$lang['Additional_tables'] = "Taules addicionals";
$lang['Gzip_compress'] = "Comprimir l'arxiu amb gzip";
$lang['Select_file'] = "Seleccionar un arxiu";
$lang['Start_Restore'] = "Comen�ar a restaurar";

$lang['Restore_success'] = "La Base de Dades ha estat restaurada correctament.<br /><br />El teu f�rum hauria de tornar a ser en l'estat en que es trobava quan es va fer la c�pia de seguretat.";
$lang['Backup_download'] = "La desc�rrega comen�ar�  de seguida, si us plau espera uns instants";
$lang['Backups_not_supported'] = "Ho sentim per� el teu sistema de base de dades no suporta l'opci� de c�pia de seguretat";

$lang['Restore_Error_uploading'] = "Error en pujar l'arxiu amb la c�pia de seguretat";
$lang['Restore_Error_filename'] = "Problema de nom d'arxiu, si us plau intenta-ho amb un arxiu diferent";
$lang['Restore_Error_decompress'] = "No descomprimir un arxiu gzip, si us plau puja'n una versi� de text";
$lang['Restore_Error_no_file'] = "No s'ha pujat cap arxiu";


//
// P�gines d'autoritzaci�
//
$lang['Select_a_User'] = "Selecciona un Usuari";
$lang['Select_a_Group'] = "Selecciona un Grup";
$lang['Select_a_Forum'] = "Selecciona un F�rum";
$lang['Auth_Control_User'] = "Control dels Permisos de l'Usuari"; 
$lang['Auth_Control_Group'] = "Control dels Permisos del Grup"; 
$lang['Auth_Control_Forum'] = "Control dels Permisos dels F�rums"; 
$lang['Look_up_User'] = "Consultar les dades de l'Usuari";
$lang['Look_up_Group'] = "Consultar les dades del Grup"; 
$lang['Look_up_Forum'] = "Consultar les dades del F�rum"; 

$lang['Group_auth_explain'] = "Des d'aqu� pots modificar els permisos i l'estat del moderador assignat a cada grup d'usuaris. No oblidis que quan canvies permisos de grup, els permisos individuals d'un usuari poden permetre-li encara l'entrada a f�rums, etc. Se t'avisar� si es d�na el cas.";
$lang['User_auth_explain'] = "Des d'aqu� pots modificar els permisos i l'estat de moderador assignat a cada usuari individual. No oblidis que quan canvies permisos d'usuari, els permisos de grup poden permetre-li encara l'entrada a f�rums, etc. Se t'avisar� si es d�na el cas.";
$lang['Forum_auth_explain'] = "Des d'aqu� pots modificar els nivells d'autoritzaci� de cada f�rum. Per fer aix� disposar�s d'un m�tode simple i un d'avan�at. L'avan�at ofereix un major control sobre cadascuna de les operacions del f�rum. Recorda que canviar el nivell de permisos dels f�rums afectar� quins usuaris poden dur-hi a terme les diferents operacions.";

$lang['Simple_mode'] = "Modalitat Simple";
$lang['Advanced_mode'] = "Modalitat Avan�ada";
$lang['Moderator_status'] = "Estat del Moderador";

$lang['Allowed_Access'] = "Acc�s Perm�s";
$lang['Disallowed_Access'] = "Acc�s no Perm�s";
$lang['Is_Moderator'] = "N'�s Moderador";
$lang['Not_Moderator'] = "No n'�s Moderador";

$lang['Conflict_warning'] = "Advert�ncia de Conflicte d'Autoritzaci�";
$lang['Conflict_access_userauth'] = "Aquest usuari encara t� drets d'acc�s a aquest f�rum degut al grup al qual pertany. Potser vulguis modificar els permisos del grup o treure l'usuari del grup per evitar que tingui drets d'acc�s. Els drets que concedeix el grup (i els f�rums involucrats) estan llistats a sota.";
$lang['Conflict_mod_userauth'] = "Aquest usuari encara t� drets de moderador en aquest f�rum degut al grup al qual pertany. Potser vulguis modificar els permisos del grup o treure l'usuari del grup per evitar que tingui drets de moderador. Els drets que concedeix el grup (i els f�rums involucrats) estan llistats a sota.";

$lang['Conflict_access_groupauth'] = "El seg�ent usuari (o usuaris) encara t� drets d'acc�s a aquest f�rum degut als seus permisos d'usuari. Potser vulguis modificar els permisos d'usuaris per evitar que tingui drets d'acc�s. Els drets concedits a l'usuari (i els f�rums involucrats) estan llistats a sota.";
$lang['Conflict_mod_groupauth'] = "El seg�ent usuari (o usuaris) encara t� drets de moderador en aquest f�rum degut als seus permisos d'usuari. Potser vulguis modificar els permisos d'usuaris per evitar que tingui drets de moderador. Els drets concedits a l'usuari (i els f�rums involucrats) estan llistats a sota.";

$lang['Public'] = "P�blic";
$lang['Private'] = "Privat";
$lang['Registered'] = "Registrat";
$lang['Administrators'] = "Administradors";
$lang['Hidden'] = "Ocult";

// Aquests noms es mostren al men� desplegable de la modalitat
// avan�ada d'autoritzaci� de f�rums, intenta que siguin curts!
$lang['Forum_ALL'] = "TOTS";
$lang['Forum_REG'] = "REG";
$lang['Forum_PRIVATE'] = "PRIVAT";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Veure";
$lang['Read'] = "Llegir";
$lang['Post'] = "Publicar";
$lang['Reply'] = "Respondre";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Esborrar";
$lang['Sticky'] = "Permanent";
$lang['Announce'] = "Anunci";
$lang['Vote'] = "Votar";
$lang['Pollcreate'] = "Crear enquesta";

$lang['Permissions'] = "Permisos";
$lang['Simple_Permission'] = "Perm�s Simple";

$lang['User_Level'] = "Nivell d'Usuari";
$lang['Auth_User'] = "Usuari";
$lang['Auth_Admin'] = "Administrador";
$lang['Group_memberships'] = "Grups d'Usuaris als quals pertany";
$lang['Usergroup_members'] = "Aquest grup t� els seg�ents membres";

$lang['Forum_auth_updated'] = "Permisos del F�rum actualitzats";
$lang['User_auth_updated'] = "Permisos de l'Usuari actualitzats";
$lang['Group_auth_updated'] = "Permisos del Grup actualitzats";

$lang['Auth_updated'] = "S'han actualitzat els permisos";
$lang['Click_return_userauth'] = "Clica %saqu�%s per tornar als Permisos d'Usuari";
$lang['Click_return_groupauth'] = "Clica %saqu�%s per tornar als Permisos de Grup";
$lang['Click_return_forumauth'] = "Clica %saqu�%s per tornar als Permisos de F�rum";


//
// Exclusi�
//
$lang['Ban_control'] = "Control d'Exclusi�";
$lang['Ban_explain'] = "Des d'aqu� pots controlar l'exclusi� d'usuaris. Pots aconseguir-ho excloent un nom d'usuari espec�fic, una direcci� IP o un hostname o b� un rang d'aquests. Aquests m�todes fan que un usuari no pugui ni arribar a la p�gina d'�ndex del teu f�rum. Per evitar que un usuari es registri sota un nom d'usuari tamb� pots especificar que un email estigui excl�s. Si us plau has de ser conscient que nom�s excloure un email no evitar� que un usuari pugui iniciar una sessi� o publicar al teu f�rum, hauries d'utilitzar un dels dos primers m�todes per aconseguir-ho";
$lang['Ban_explain_warn'] = "Tingues en compte que introduir un rang de direccions IP t� com a resultat que totes les adreces compreses entre l'adre�a inicial i la final estiguin excloses. S'intentar� minimitzar el nombre d'adreces que s'afegeixen a la base de dades introduint comodins autom�ticament on sigui apropiat. Si realment has d'especificar un rang d'adreces intenta que sigui petit o millor encara introdueix les adreces especifiques.";

$lang['Select_username'] = "Selecciona un Nom d'Usuari";
$lang['Select_ip'] = "Selecciona una direcci� IP";
$lang['Select_email'] = "Selecciona una direcci� d'Email";

$lang['Ban_username'] = "Excloure un o m�s usuaris";
$lang['Ban_username_explain'] = "Pots excloure m�ltiples usuaris d'una tirada utilitzant la combinaci� apropiada de ratol� i teclat per al teu ordinador i navegador";

$lang['Ban_IP'] = "Excloure una o m�s direccions IP o hostnames";
$lang['IP_hostname'] = "Direccions IP o hostnames";
$lang['Ban_IP_explain'] = "Per especificar diverses IP's o hostnames diferents, separa'ls amb comes. Per especificar un rang de direccions IP separa el comen�ament i el final amb un gui� (-), per especificar un comod� utilitza *";

$lang['Ban_email'] = "Excloure una o diverses direccions email";
$lang['Ban_email_explain'] = "Per especificar m�s d'una direcci� email separa-les amb comes. Per especificar un comod� de noms d'usuaris utilitza *, per exemple *@hotmail.com";

$lang['Unban_username'] = "Treure l'exclusi� d'un o m�s usuaris";
$lang['Unban_username_explain'] = "Pots treure l'exclusi� de m�ltiples usuaris d'una tirada utilitzant la combinaci� apropiada de ratol� i teclat per al teu ordinador i navegador";

$lang['Unban_IP'] = "Treure l'exclusi� d'una o m�s direccions IP";
$lang['Unban_IP_explain'] = "Pots treure l'exclusi� de m�ltiples direccions IP d'una tirada utilitzant la combinaci� apropiada de ratol� i teclat per al teu ordinador i navegador";

$lang['Unban_email'] = "Treure l'exclusi� d'una o m�s direccions email";
$lang['Unban_email_explain'] = "Pots treure l'exclusi� de m�ltiples direccions email d'una tirada utilitzant la combinaci� apropiada de ratol� i teclat per al teu ordinador i navegador";

$lang['No_banned_users'] = "No hi ha noms d'usuari exclosos";
$lang['No_banned_ip'] = "No hi ha direccions IP excloses";
$lang['No_banned_email'] = "No hi ha direccions email excloses";

$lang['Ban_update_sucessful'] = "La llista d'exclusions s'ha actualitzat correctament";
$lang['Click_return_banadmin'] = "Clica %sAqu�%s per tornar al Control d'Exclusi�";


//
// Configuraci�
//
$lang['General_Config'] = "Configuraci� General";
$lang['Config_explain'] = "El seg�ent formulari, et permetr� configurar totes les opcions generals del f�rum. Per les configuracions d'usuari i f�rums individuals utilitza els enlla�os corresponents situats a l'esquerra.";

$lang['Click_return_config'] = "Clica %sAqu�%s per tornar a la Configuraci� General";

$lang['General_settings'] = "Configuraci� General del F�rum";
$lang['Server_name'] = "Nom de Domini";
$lang['Server_name_explain'] = "El nom de domini des d'on corre aquest f�rum";
$lang['Script_path'] = "Ruta del Script";
$lang['Script_path_explain'] = "La ruta on est� ubicat phpBB2, relativa al nom de domini";
$lang['Server_port'] = "Port del Servidor";
$lang['Server_port_explain'] = "El port en el que corre el servidor, normalment el 80. Canvia'l nom�s si �s diferent";
$lang['Site_name'] = "Nom  de la P�gina Web";
$lang['Site_desc'] = "Descripci� de la P�gina Web";
$lang['Board_disable'] = "Desactivar el F�rum";
$lang['Board_disable_explain'] = "Aix� far� que el f�rum no estigui disponible per als usuaris. No surtis de la sessi� mentre tinguis el f�rum desactivat, ja que no podries tornar a iniciar la sessi�!";
$lang['Acct_activation'] = "Habilitar l'activaci� de comptes";
$lang['Acc_None'] = "Cap"; // Aquestes tres entrades s�n el tipus d'activaci�
$lang['Acc_User'] = "Usuari";
$lang['Acc_Admin'] = "Administrador";

$lang['Abilities_settings'] = "Configuraci� B�sica d'Usuari i F�rum";
$lang['Max_poll_options'] = "Nombre m�xim d'opcions a les enquestes";
$lang['Flood_Interval'] = "Interval de desbordament";
$lang['Flood_Interval_explain'] = "Nombre de segons que s'ha d'esperar un usuari entre la publicaci� de dos missatges";
$lang['Board_email_form'] = "Email d'usuaris a trav�s del F�rum";
$lang['Board_email_form_explain'] = "Aix� permet que els usuaris s'envi�n emails entre ells a trav�s del F�rum";
$lang['Topics_per_page'] = "Temes per P�gina";
$lang['Posts_per_page'] = "Missatges per P�gina";
$lang['Hot_threshold'] = "Llindar de missatges  per ser considerat Popular";
$lang['Default_style'] = "Estil per defecte";
$lang['Override_style'] = "Ignorar l'estil de l'usuari";
$lang['Override_style_explain'] = "Substitueix l'estil escollit per l'usuari amb l'estil per defecte";
$lang['Default_language'] = "Idioma per Defecte";
$lang['Date_format'] = "Format de la Data";
$lang['System_timezone'] = "Zona Hor�ria";
$lang['Enable_gzip'] = "Habilitar la Compressi� GZip";
$lang['Enable_prune'] = "Habilitar la Poda del F�rum";
$lang['Allow_HTML'] = "Permetre l'HTML";
$lang['Allow_BBCode'] = "Permetre el BBCode";
$lang['Allowed_tags'] = "Permetre els marcadors HTML";
$lang['Allowed_tags_explain'] = "Separa els marcadors amb comes";
$lang['Allow_smilies'] = "Permetre els Smileys";
$lang['Smilies_path'] = "Ruta dels Smileys";
$lang['Smilies_path_explain'] = "Ruta des del directori phpBB on es troben els smileys, e.g. images/smiles";
$lang['Allow_sig'] = "Permetre les Signatures";
$lang['Max_sig_length'] = "Longitud m�xima de les signatures";
$lang['Max_sig_length_explain'] = "Nombre m�xim de car�cters de la signatura";
$lang['Allow_name_change'] = "Permetre el canvi de Nom d'Usuari";

$lang['Avatar_settings'] = "Configuraci� dels Avatars";
$lang['Allow_local'] = "Habilitar els avatars de la galeria";
$lang['Allow_remote'] = "Habilitar els avatars remots";
$lang['Allow_remote_explain'] = "Permetre mostrar avatars mitjan�ant un enlla� a altres p�gines web";
$lang['Allow_upload'] = "Permetre que es pugin avatars";
$lang['Max_filesize'] = "Mida m�xima dels fitxers d'avatar";
$lang['Max_filesize_explain'] = "Limita la quantitat de bytes que pot tenir un avatar";
$lang['Max_avatar_size'] = "Mida m�xima de l'avatar";
$lang['Max_avatar_size_explain'] = "(Al�ada x Amplada en pixels)";
$lang['Avatar_storage_path'] = "Ruta de l'Avatar";
$lang['Avatar_storage_path_explain'] = "Ruta des del directori de phpBB on es troben els avatars, e.g. images/avatars";
$lang['Avatar_gallery_path'] = "Ruta de la Galeria d'Avatars";
$lang['Avatar_gallery_path_explain'] = "Ruta des del directori de phpBB on es troba la galeria, e.g. images/avatars/gallery";

$lang['COPPA_settings'] = "Configuracions COPPA";
$lang['COPPA_fax'] = "N�mero de Fax COPPA";
$lang['COPPA_mail'] = "Direcci� de Correu COPPA";
$lang['COPPA_mail_explain'] = "Aquesta �s la direcci� de correu on els pares han d'enviar el formulari de registre COPPA";

$lang['Email_settings'] = "Configuraci� de l'Email";
$lang['Admin_email'] = "Direcci� Email de l'Administrador";
$lang['Email_sig'] = "Signatura de l'Email";
$lang['Email_sig_explain'] = "Aquest text s'afegir� al final de tots els emails que envi� el f�rum";
$lang['Use_SMTP'] = "Utilitzar un servidor SMTP per enviar Emails";
$lang['Use_SMTP_explain'] = "Selecciona s� si vols o has d'enviar els emails a trav�s d'un servidor SMTP en lloc de la funci� local de correu";
$lang['SMTP_server'] = "Direcci� del Servidor SMTP";
$lang['SMTP_username'] = "Nom d'usuari SMTP";
$lang['SMTP_username_explain'] = "Introdueix un nom d'usuari nom�s si el teu servidor SMTP ho requereix";
$lang['SMTP_password'] = "Contrasenya SMTP";
$lang['SMTP_password_explain'] = "Introdueix una contrasenya nom�s si el teu servidor ho requereix";

$lang['Disable_privmsg'] = "Missatgeria Privada";
$lang['Inbox_limits'] = "Nombre m�xim de missatges a la B�stia d'Entrada";
$lang['Sentbox_limits'] = "Nombre m�xim de missatges a la Carpeta d'Elements Enviats";
$lang['Savebox_limits'] = "Nombre m�xim de missatges a la Carpeta d'Elements Guardats";

$lang['Cookie_settings'] = "Configuraci� de les Cookies"; 
$lang['Cookie_settings_explain'] = "Aix� defineix com s'envien les cookies als navegadors dels usuaris. En la majoria dels casos els valors per defecte per a la configuraci� de les cookies hauria de ser suficient per� si necessites canviar-la fes-ho amb compte ja que una configuraci� incorrecta pot evitar que els usuaris inici�n la sessi�";
$lang['Cookie_domain'] = "Domini de la Cookie";
$lang['Cookie_name'] = "Nom de la Cookie";
$lang['Cookie_path'] = "Ruta de la Cookie";
$lang['Cookie_secure'] = "Cookie segura";
$lang['Cookie_secure_explain'] = "Si el teu servidor corre via SSL habilita aquesta opci�, si no �s aix�, deixa-la deshabilitada";
$lang['Session_length'] = "Duraci� de la sessi� en segons";


//
// Gesti� del F�rum
//
$lang['Forum_admin'] = "Administraci� de F�rums";
$lang['Forum_admin_explain'] = "Des d'aquest quadre pots afegir, esborrar, editar, reordenar i resincronitzar categories i f�rums";
$lang['Edit_forum'] = "Editar f�rum";
$lang['Create_forum'] = "Crear un nou f�rum";
$lang['Create_category'] = "Crear una nova categoria";
$lang['Remove'] = "Treure";
$lang['Action'] = "Acci�";
$lang['Update_order'] = "Actualitzar Ordre";
$lang['Config_updated'] = "Configuraci� del F�rum actualitzada correctament";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Esborrar";
$lang['Move_up'] = "Moure amunt";
$lang['Move_down'] = "Moure avall";
$lang['Resync'] = "Resincronitzar";
$lang['No_mode'] = "No s'ha seleccionat cap mode";
$lang['Forum_edit_delete_explain'] = "El seg�ent formulari et permetr� configurar totes les opcions generals del f�rum. Per les configuracions d'usuaris i f�rums individuals utilitza els enlla�os corresponents situats a l'esquerra.";

$lang['Move_contents'] = "Moure tots els continguts";
$lang['Forum_delete'] = "Esborrar el F�rum";
$lang['Forum_delete_explain'] = "El seg�ent formulari et permetr� esborrar un f�rum (o categoria) i decidir on vols posar tots els temes (o f�rums) que contenia.";

$lang['Status_locked'] = "Bloquejat";
$lang['Status_unlocked'] = "Desbloquejat";
$lang['Forum_settings'] = "Configuraci� General del F�rum";
$lang['Forum_name'] = "Nom del F�rum";
$lang['Forum_desc'] = "Descripci�";
$lang['Forum_status'] = "Estat del F�rum";
$lang['Forum_pruning'] = "Poda autom�tica";

$lang['prune_freq'] = "Revisar l'edat dels temes cada"; //Veure Poda!
$lang['prune_days'] = "Treure temes que no han tingut cap resposta en";
$lang['Set_prune_data'] = "Has activat la poda autom�tica per aquest f�rum per� no has establert una freq��ncia o nombre de dies per la poda. Si us plau torna enrera i fes-ho.";

$lang['Move_and_Delete'] = "Moure i esborrar";

$lang['Delete_all_posts'] = "Esborrar tots els missatges";
$lang['Nowhere_to_move'] = "No hi ha cap lloc on moure-ho";

$lang['Edit_Category'] = "Editar Categoria";
$lang['Edit_Category_explain'] = "Utilitza aquest formulari per modificar el nom d'una categoria";

$lang['Forums_updated'] = "La informaci� del F�rum i les Categories s'ha actualitzat correctament";

$lang['Must_delete_forums'] = "Cal esborrar tots els f�rums d'aquesta categoria abans d'esborrar-la";

$lang['Click_return_forumadmin'] = "Clica %sAqu�%s per tornar a l'Administraci� del F�rum";


//
// Gesti� de Smileys
//
$lang['smiley_title'] = "Utilitat per a l'Edici� de Smileys";
$lang['smile_desc'] = "Des d'aquesta p�gina pots afegir, treure i editar els emoticons que els teus usuaris poden utilitzar en els seus missatges";

$lang['smiley_config'] = "Configuraci� dels Smileys";
$lang['smiley_code'] = "Codi del Smiley";
$lang['smiley_url'] = "Arxiu d'Imatge del Smiley";
$lang['smiley_emot'] = "Emoci� del Smiley";
$lang['smile_add'] = "Afegir un Smiley nou";
$lang['Smile'] = "Smile";
$lang['Emotion'] = "Emoci�";

$lang['Select_pak'] = "Selecciona un arxiu .pak";
$lang['replace_existing'] = "Reempla�ar els Smileys Existents";
$lang['keep_existing'] = "Mantenir els Smileys Existents";
$lang['smiley_import_inst'] = "Hauries de descomprimir el paquet de Smileys i pujar tots els fitxers al directori de Smileys apropiat per instal�lar-lo. Llavors selecciona la informaci� correcta en aquest formulari per importar el paquet de Smileys.";
$lang['smiley_import'] = "Importar paquet de Smileys";
$lang['choose_smile_pak'] = "Selecciona un arxiu de paquet de Smileys .pak";
$lang['import'] = "Importar Smileys";
$lang['smile_conflicts'] = "Que s'hauria de fer en cas de conflictes";
$lang['del_existing_smileys'] = "Esborrar els smileys existents abans d'importar";
$lang['import_smile_pack'] = "Importar un Paquet de Smileys";
$lang['export_smile_pack'] = "Crear un Paquet de Smileys";
$lang['export_smiles'] = "Per crear un paquet de smileys a partir dels que tens instal�lats actualment, clica %sAqu�%s per descarregar l'arxiu smiles.pak. Fica-li el nom apropiat assegurant-te de mantenir l'extensi� .pak i crea un fitxer zip que contingui totes les teves imatges de smileys a m�s de l'arxiu de configuraci� .pak";

$lang['smiley_add_success'] = "El Smiley s'ha afegit correctament";
$lang['smiley_edit_success'] = "El Smiley s'ha actualitzat correctament";
$lang['smiley_import_success'] = "El Paquet de Smileys s'ha importat correctamente!";
$lang['smiley_del_success'] = "El Smiley s'ha tret correctament";
$lang['Click_return_smileadmin'] = "Clica %sAqu�%s per tornar a l'Administraci� de Smileys";


//
// Gesti� d'Usuaris
//
$lang['User_admin'] = "Administraci� d'Usuaris";
$lang['User_admin_explain'] = "Des d'aqu� pots canviar la informaci� dels teus usuaris i certes opcions espec�fiques. Per modificar els permisos dels usuaris utilitza el sistema de permisos d'usuaris i grups.";

$lang['Look_up_user'] = "Consultar les dades de l'Usuari";

$lang['Admin_user_fail'] = "No s'ha pogut actualitzar el perfil de l'Usuari";
$lang['Admin_user_updated'] = "El perfil de l'Usuari s'ha actualitzat correctament";
$lang['Click_return_useradmin'] = "Clica %sAqu�%s per tornar a l'Administraci� d'Usuaris";

$lang['User_delete'] = "Esborrar aquest usuari";
$lang['User_delete_explain'] = "Clica aqu� per esborrar aquest usuari. Tingues en compte que aquesta acci� no es pot desfer.";
$lang['User_deleted'] = "S'ha esborrat l'usuari correctament.";

$lang['User_status'] = "L'usuari �s actiu";
$lang['User_allowpm'] = "Pot enviar missatges privats";
$lang['User_allowavatar'] = "Pot mostrar el seu avatar";

$lang['Admin_avatar_explain'] = "Des d'aqu� pots veure i esborrar l'avatar actual de l'usuari.";

$lang['User_special'] = "Camps nom�s per Administradors";
$lang['User_special_explain'] = "Aquests camps no estan disponibles per que els usuaris els modifiquin. Des d'aqu� pots configurar el seu estat i altres opcions que no es donen als usuaris.";


//
// Gesti� de Grups
//
$lang['Group_administration'] = "Administraci� de Grups";
$lang['Group_admin_explain'] = "Des d'aquest quadre pots administrar tots els teus grups d'usuaris, pots esborrar, crear i editar els grups existents. Pots triar moderadors, canviar l'estat del grup a tancat o obert i definir el nom del grup i la seva descripci�";
$lang['Error_updating_groups'] = "Hi ha hagut un error mentre s'actualitzaven els grups";
$lang['Updated_group'] = "S'ha actualitzat el grup correctament";
$lang['Added_new_group'] = "El nou grup s'ha creat correctament";
$lang['Deleted_group'] = "S'ha esborrat el grup correctament";
$lang['New_group'] = "Crear un grup nou";
$lang['Edit_group'] = "Editar Grup";
$lang['group_name'] = "Nom del Grup";
$lang['group_description'] = "Descripci� del Grup";
$lang['group_moderator'] = "Moderador del Grup";
$lang['group_status'] = "Estat del Grup";
$lang['group_open'] = "Grup Obert";
$lang['group_closed'] = "Grup Tancat";
$lang['group_hidden'] = "Grup Ocult";
$lang['group_delete'] = "Esborrar el Grup";
$lang['group_delete_check'] = "Esborrar aquest Grup";
$lang['submit_group_changes'] = "Trametre Canvis";
$lang['reset_group_changes'] = "Anul�lar Canvis";
$lang['No_group_name'] = "Has d'especificar un nom per aquest grup";
$lang['No_group_moderator'] = "Has d'especificar un moderador per aquest grup";
$lang['No_group_mode'] = "Has d'especificar el mode d'aquest grup, obert o tancat";
$lang['No_group_action'] = "No s'ha especificat cap acci�";
$lang['delete_group_moderator'] = "Esborrar l'antic moderador del grup?";
$lang['delete_moderator_explain'] = "Si est�s canviant el moderador del grup, marca aquesta casella per treure l'antic moderador del grup. Si no, no la marquis, i l'usuari es convertir� en un membre normal del grup.";
$lang['Click_return_groupsadmin'] = "Clica %sAqu�%s per tornar a l'Administraci� de Grups.";
$lang['Select_group'] = "Selecciona un grup";
$lang['Look_up_group'] = "Consultar les dades del grup";


//
// Administraci� de Poda
//
$lang['Forum_Prune'] = "Poda de F�rums";
$lang['Forum_Prune_explain'] = "Aix� esborrar� tots els temes en els quals no s'hagi publicat cap resposta en el nombre de dies que tri�s. Si no introdueixes un n�mero llavors s'esborraran tots els temes. No s'esborraran temes en els quals hi hagi una enquesta que encara estigui activa ni anuncis. Haur�s de treure aquests temes manualment.";
$lang['Do_Prune'] = "Realitzar la Poda";
$lang['All_Forums'] = "Tots els F�rums";
$lang['Prune_topics_not_posted'] = "Esborrar temes sense respostes en aquesta quantitat de dies";
$lang['Topics_pruned'] = "Temes podats";
$lang['Posts_pruned'] = "Missatges podats";
$lang['Prune_success'] = "La poda dels f�rums ha tingut �xit";


//
// Censor de paraules
//
$lang['Words_title'] = "Censura de Paraules";
$lang['Words_explain'] = "Des d'aquest quadre de control pots afegir editar i treure paraules que seran censurades autom�ticament als teus f�rums. A m�s, no es permetr� que la gent es registri amb noms d'usuari que continguin aquestes paraules. S'accepten els comodins (*) al camp de paraules, e.g. *testa* coincideix amb detestable mentre que testa* coincideix amb testar i *testa amb detesta.";
$lang['Word'] = "Paraula";
$lang['Edit_word_censor'] = "Editar el censor de paraules";
$lang['Replacement'] = "Substitut";
$lang['Add_new_word'] = "Afegir una paraula nova";
$lang['Update_word'] = "Actualitzar el censor de paraules";

$lang['Must_enter_word'] = "Has d'introduir una paraula i la que la substituir�";
$lang['No_word_selected'] = "No s'ha seleccionat cap paraula a editar";

$lang['Word_updated'] = "El censor de paraules s'ha actualitzat correctament";
$lang['Word_added'] = "El censor de paraules s'ha afegit correctament";
$lang['Word_removed'] = "El censor de paraules seleccionat s'ha esborrat correctament";

$lang['Click_return_wordadmin'] = "Clica %sAqu�%s per tornar a l'Administraci� de Censura de Paraules";


//
// Email Massiu
//
$lang['Mass_email_explain'] = "Des d'aqu� pots enviar emails o b� a tots els teus usuaris o b� a tots els usuaris d'un grup espec�fic. Per fer aix� s'enviar� un email a l'adre�a administrativa d'email proporcionada i s'enviar� una c�pia a tots els destinataris. Si est�s enviant el missatge a un grup nombr�s de persones et preguem que tinguis paci�ncia i espera fins que es carregui la p�gina. Quan s'envien emails massius �s normal que es trigui una bona estona, se't notificar� quan el procediment s'hagi completat.";
$lang['Compose'] = "Redactar"; 

$lang['Recipients'] = "Destinataris"; 
$lang['All_users'] = "A tots els Usuaris";

$lang['Email_successfull'] = "S'ha enviat el teu missatge";
$lang['Click_return_massemail'] = "Clica %sAqu�%s per tornar al formulari d'Emails Massius";


//
// Administraci� de Rangs
//
$lang['Ranks_title'] = "Administraci� de Rangs";
$lang['Ranks_explain'] = "Utilitzant aquest formulari pots afegir, editar, veure i esborrar rangs. Tamb� pots crear rangs personalitzats que es poden aplicar a un usuari a trav�s de la utilitat de gesti� d'usuaris";

$lang['Add_new_rank'] = "Afegir Rang";

$lang['Rank_title'] = "T�tol del Rang";
$lang['Rank_special'] = "Seleccionar com a Rang Especial";
$lang['Rank_minimum'] = "Nombre m�nim de missatges";
$lang['Rank_maximum'] = "Nombre m�xim de missatges";
$lang['Rank_image'] = "Imatge del rang (relativa a la ruta arrel de phpBB2)";
$lang['Rank_image_explain'] = "Utilitza aix� per definir una petita imatge associada al rang";

$lang['Must_select_rank'] = "Has de seleccionar un rang";
$lang['No_assigned_rank'] = "No s'ha assignat un rang especial";

$lang['Rank_updated'] = "S'ha actualitzat el rang correctament";
$lang['Rank_added'] = "S'ha afegit el rang correctament";
$lang['Rank_removed'] = "S'ha esborrat el rang correctament";
$lang['No_update_ranks'] = "El rang s'ha esborrat correctament , no obstant, els comptes d'usuari que utilitzen aquest rang no s'han actualitzat. Haur�s de restablir manualment el rang d'aquests comptes";

$lang['Click_return_rankadmin'] = "Clica %sAqu�%s per tornar a l'Administraci� de Rangs";


//
// Administraci� de Prohibici� de Noms d'Usuari
//
$lang['Disallow_control'] = "Control de Prohibici� de Noms d'Usuari";
$lang['Disallow_explain'] = "Des d'aqu� pots controlar els noms d'usuari que no estar� perm�s utilitzar. Els noms d'usuari prohibits poden contenir el comod� *. Tingues en compte que no se't permetr� especificar un nom d'usuari que ja s'hagi registrat, primer l'has d'esborrar i llavors prohibir-lo";

$lang['Delete_disallow'] = "Esborrar";
$lang['Delete_disallow_title'] = "Esborrar un nom d'usuari no perm�s";
$lang['Delete_disallow_explain'] = "Pots esborrar un nom d'usuari no perm�s seleccionant-lo d'aquesta llista i clicant Esborrar";

$lang['Add_disallow'] = "Afegir";
$lang['Add_disallow_title'] = "Afegir un nom d'usuari no perm�s";
$lang['Add_disallow_explain'] = "Pots prohibir un nom d'usuari utilitzant el comod� * per que coincideixi amb qualsevol car�cter";

$lang['No_disallowed'] = "No hi ha noms d'usuari no permesos";

$lang['Disallowed_deleted'] = "S'ha esborrat el nom d'usuari no perm�s correctament";
$lang['Disallow_successful'] = "S'ha afegit el nom d'usuari no perm�s correctament";
$lang['Disallowed_already'] = "El nom d'usuari no perm�s que has introdu�t no pot ser prohibit. O b� ja existeix a la llista , existeix a la llista del censor de paraules o es correspon amb el nom d'un usuari registrat";

$lang['Click_return_disallowadmin'] = "Clica %sAqu�%s per tornar al Control de Prohibici� de Noms d'Usuari";


//
// Administraci� d'Estils
//
$lang['Styles_admin'] = "Administraci� d'Estils";
$lang['Styles_explain'] = "Utilitzant aquest servei pots afegir, treure, i gestionar els estils (plantilles i temes) disponibles per als teus usuaris";
$lang['Styles_addnew_explain'] = "La seg�ent llista cont� tots els temes que estan disponibles per a les plantilles que tens actualment. Els elements d'aquesta llista encara no s'han instal�lat a la base de dades de phpBB. Per instal�lar un tema simplement clica l'enlla� instal�lar que hi ha al costat de cada entrada";

$lang['Select_template'] = "Selecciona una Plantilla";

$lang['Style'] = "Estil";
$lang['Template'] = "Plantilla";
$lang['Install'] = "Instal�lar";
$lang['Download'] = "Descarregar";

$lang['Edit_theme'] = "Editar Tema";
$lang['Edit_theme_explain'] = "En el seg�ent formulari pots editar la configuraci� del tema seleccionat";

$lang['Create_theme'] = "Crear Tema";
$lang['Create_theme_explain'] = "Utilitza el seg�ent formulari per crear un tema nou per a una plantilla seleccionada. Quan introdueixis els colors (per als quals hauries d'utilitzar notaci� hexadecimal) no has d'incloure el # inicial, e.g. CCCCCC es v�lid mentre que #CCCCCC no ho �s";

$lang['Export_themes'] = "Exportar Temes";
$lang['Export_explain'] = "Des d'aquest quadre podr�s exportar les dades del tema per una plantilla seleccionada. Selecciona la plantilla de la llista de sota i es crear� l'arxiu de configuraci� del tema que s'intentar� guardar al directori de plantilles seleccionat. Si no es pot guardar l'arxiu se't donar� l'opci� de descarregar-lo. Per que es pugui guardar el fitxer cal que donis perm�s d'escriptura al servidor web per al directori de plantilles seleccionat. Per obtenir m�s informaci� veure la guia d'usuari de phpBB2";

$lang['Theme_installed'] = "El tema seleccionat s'ha instal�lat correctament";
$lang['Style_removed'] = "S'ha esborrat l'estil seleccionat de la base de dades. Per treure'l completament cal que esborris l'estil apropiat de la teva carpeta de plantilles.";
$lang['Theme_info_saved'] = "S'ha guardat la informaci� del tema per a la plantilla seleccionada. Ara hauries de tornar a ficar els permisos del theme_info.cfg (i si cal del directori de plantilles seleccionat) a nom�s lectura";
$lang['Theme_updated'] = "S'ha actualitzat el tema seleccionat. Ara hauries d'exportar la nova configuraci� del tema";
$lang['Theme_created'] = "Tema Creat. Ara hauries d'exportar el tema a l'arxiu de configuraci� de temes per mantenir-lo segur o utilitzar-lo en un altre lloc";

$lang['Confirm_delete_style'] = "Est�s segur que vols esborrar aquest estil?";

$lang['Download_theme_cfg'] = "No s'ha pogut exportar l'arxiu d'informaci� del tema. Clica sobre el bot� a sota per descarregar l'arxiu amb el teu navegador. Un cop descarregat el pots transferir al directori que cont� els fitxers de plantilles. Llavors podr�s empaquetar els fitxers per distribuir-los o utilitzar-los en un altre lloc si ho vols";
$lang['No_themes'] = "La plantilla que has seleccionat no t� temes adjunts. Per crear un tema nou clica l'enlla� Crear Tema al quadre de l'esquerra";
$lang['No_template_dir'] = "No s'ha pogut obrir la carpeta de plantilles. Pot ser que no tingui permisos de lectura o que no existeixi";
$lang['Cannot_remove_style'] = "No pots treure l'estil seleccionat ja que �s l'estil per defecte del f�rum. Si us plau canvia l'estil per defecte i intenta-ho de nou.";
$lang['Style_exists'] = "El nom d'estil seleccionat ja existeix, si us plau torna enrera i tria un nom diferent.";

$lang['Click_return_styleadmin'] = "Clica %sAqu�%s per tornar a l'Administraci� d'Estils";

$lang['Theme_settings'] = "Configuraci� del Tema";
$lang['Theme_element'] = "Element del Tema";
$lang['Simple_name'] = "Nom simple";
$lang['Value'] = "Valor";
$lang['Save_Settings'] = "Guardar la Configuraci�";

$lang['Stylesheet'] = "Full d'Estil CSS";
$lang['Background_image'] = "Imatge de Fons";
$lang['Background_color'] = "Color de Fons";
$lang['Theme_name'] = "Nom de Tema";
$lang['Link_color'] = "Color dels Enlla�os";
$lang['Text_color'] = "Color del Text";
$lang['VLink_color'] = "Color d'Enlla� Visitat";
$lang['ALink_color'] = "Color d'Enlla� Actiu";
$lang['HLink_color'] = "Color d'Enlla� Seleccionat";
$lang['Tr_color1'] = "Color 1 de les Files de la Taula";
$lang['Tr_color2'] = "Color 2 de les Files de la Taula";
$lang['Tr_color3'] = "Color 3 de les Files de la Taula";
$lang['Tr_class1'] = "Classe 1 de les Files de la Taula";
$lang['Tr_class2'] = "Classe 2 de les Files de la Taula";
$lang['Tr_class3'] = "Classe 3 de les Files de la Taula";
$lang['Th_color1'] = "Color 1 de la Cap�alera de la Taula";
$lang['Th_color2'] = "Color 2 de la Cap�alera de la Taula";
$lang['Th_color3'] = "Color 3 de la Cap�alera de la Taula";
$lang['Th_class1'] = "Classe 1 de la Cap�alera de la Taula";
$lang['Th_class2'] = "Classe 2 de la Cap�alera de la Taula";
$lang['Th_class3'] = "Classe 3 de la Cap�alera de la Taula";
$lang['Td_color1'] = "Color 1 de les Cel�les de la Taula";
$lang['Td_color2'] = "Color 2 de les Cel�les de la Taula";
$lang['Td_color3'] = "Color 3 de les Cel�les de la Taula";
$lang['Td_class1'] = "Classe 1 de les Cel�les de la Taula";
$lang['Td_class2'] = "Classe 2 de les Cel�les de la Taula";
$lang['Td_class3'] = "Classe 3 de les Cel�les de la Taula";
$lang['fontface1'] = "Tipus de Font 1";
$lang['fontface2'] = "Tipus de Font 2";
$lang['fontface3'] = "Tipus de Font 3";
$lang['fontsize1'] = "Mida de Font 1";
$lang['fontsize2'] = "Mida de Font 2";
$lang['fontsize3'] = "Mida de Font 3";
$lang['fontcolor1'] = "Color de Font 1";
$lang['fontcolor2'] = "Color de Font 2";
$lang['fontcolor3'] = "Color de Font 3";
$lang['span_class1'] = "Espaiat de la Classe 1";
$lang['span_class2'] = "Espaiat de la Classe 2";
$lang['span_class3'] = "Espaiat de la Classe 3";
$lang['img_poll_size'] = "Mida de la Imatge de l'Enquesta [px]";
$lang['img_pm_size'] = "Mida de l'Estat dels Missatges Privats [px]";


//
// Proc�s d'Instal�laci�
//
$lang['Welcome_install'] = "Benvinguts a la Instal�laci� de phpBB 2";
$lang['Initial_config'] = "Configuraci� B�sica";
$lang['DB_config'] = "Configuraci� de la Base de Dades";
$lang['Admin_config'] = "Configuraci� de l'Administrador";
$lang['continue_upgrade'] = "Un cop descarregat el teu arxiu de configuraci� a la teva m�quina local pots clicar el bot� \"Continuar Actualitzaci�\" per continuar amb el proc�s d'actualitzaci�. Si us plau espera que es completi el proc�s d'actualitzaci� abans de pujar l'arxiu de configuraci�";
$lang['upgrade_submit'] = "Continuar Actualitzaci�";

$lang['Installer_Error'] = "Hi ha hagut un error durant la instal�laci�";
$lang['Previous_Install'] = "S'ha detectat una instal�laci� pr�via";
$lang['Install_db_error'] = "Hi ha hagut un error actualitzant la Base de Dades";

$lang['Re_install'] = "La teva instal�laci� pr�via encara est� activa. <br /><br />Si vols reinstal�lar phpBB 2 clica el bot� S�. Tingues en compte que aix� destruir� totes les dades existents, no es faran c�pies de seguretat! El nom d'usuari i la contrasenya d'administrador que has utilitzat per iniciar la sessi� al f�rum tornaran a ser creades despr�s de la reinstal�laci� per� no es mantindr� cap altra configuraci�. <br /><br />Pensa-t'ho b� abans de pr�mer S�!";

$lang['Inst_Step_0'] = "Gr�cies per escollir phpBB 2. Per completar aquesta instal�laci� si us plau completa els detalls requerits a sota. Tingues en compte que la base de dades en qu� l'instal�lis ja hauria d'existir. Si est�s fent la instal�laci� sobre una base de dades que utilitza ODBC, e.g. MS Access primer hauries de crear un DSN per ella abans de procedir.";

$lang['Start_Install'] = "Comen�ar la Instal�laci�";
$lang['Finish_Install'] = "Acabar la Instal�laci�";

$lang['Default_lang'] = "Idioma per defecte del f�rum";
$lang['DB_Host'] = "Nom del Servidor de la Base de Dades / DSN";
$lang['DB_Name'] = "Nom de la teva Base de Dades";
$lang['DB_Username'] = "Nom d'Usuari de la Base de Dades";
$lang['DB_Password'] = "Contrasenya de la Base de Dades";
$lang['Database'] = "La teva Base de Dades";
$lang['Install_lang'] = "Tria l'Idioma d'Instal�laci�";
$lang['dbms'] = "Tipus de Base de Dades";
$lang['Table_Prefix'] = "Prefix per les taules a la base de dades";
$lang['Admin_Username'] = "Nom d'Usuari de l'Administrador";
$lang['Admin_Password'] = "Contrasenya de l'Administrador";
$lang['Admin_Password_confirm'] = "Contrasenya de l'Administrador [ Confirmaci� ]";

$lang['Inst_Step_2'] = "S'han creat el nom d'usuari i la contrasenya del teu administrador. En aquest punt la teva instal�laci� b�sica s'ha completat. Ara se't portar� a una pantalla que et permetr� administrar la teva nova instal�laci�. Si us plau assegura't de revisar el detalls de la Configuraci� General i fer els canvis oportuns. Gr�cies per triar phpBB 2.";

$lang['Unwriteable_config'] = "El teu arxiu de configuraci� est� en mode de no-escriptura. Una c�pia de l'arxiu de configuraci� ser� descarregada quan cliquis el seg�ent bot�. Hauries de pujar aquest fitxer al mateix directori on es troba phpBB 2. Un cop fet aix� hauries d'iniciar la sessi� utilitzant el nom i contrasenya de l'administrador que has proporcionat al formulari anterior i visita el centre de control de l'administrador (apareixer� un enlla� al fons de cada pantalla quan inici�s la sessi�) per revisar la configuraci� general. Gr�cies por triar phpBB 2";
$lang['Download_config'] = "Descarregar Configuraci�";

$lang['ftp_choose'] = "Tria el M�tode de Desc�rrega";
$lang['ftp_option'] = "<br />Ja que les extensions FTP estan habilitades en aquesta versi� de PHP potser tamb� se't doni l'opci� d'intentar primer pujar l'arxiu de configuraci� per FTP.";
$lang['ftp_instructs'] = "Has triat pujar l'arxiu per FTP al compte que cont� phpBB 2 autom�ticament. Si us plau introdueix la informaci� sol�licitada per facilitar el proc�s. Tingues en compte que la ruta FTP ha de ser la ruta exacta via FTP a la teva instal�laci� de phpBB2 com si estiguessis fent una sessi� FTP amb un client qualsevol.";
$lang['ftp_info'] = "Introdueix la Teva Informaci� de FTP";
$lang['Attempt_ftp'] = "Intentar pujar per FTP l'arxiu de configuraci�";
$lang['Send_file'] = "Envieu-me l'arxiu a mi i jo el pujar� per FTP manualment";
$lang['ftp_path'] = "Ruta FTP per phpBB 2";
$lang['ftp_username'] = "El Teu Nom d'Usuari FTP";
$lang['ftp_password'] = "La Teva Contrasenya FTP";
$lang['Transfer_config'] = "Iniciar Transfer�ncia";
$lang['NoFTP_config'] = "L'intent de pujar per FTP l'arxiu de configuraci� ha fallat. Si us plau descarrega l'arxiu de configuraci� i puja'l per FTP manualment.";

$lang['Install'] = "Instal�lar";
$lang['Upgrade'] = "Actualitzar";


$lang['Install_Method'] = "Escull el teu m�tode d'Instal�laci�";

$lang['Install_No_Ext'] = "La configuraci� de PHP al teu servidor no suporta el tipus de base de dades seleccionat";

$lang['Install_No_PCRE'] = "phpBB2 requereix el M�dul d'Expressions Regulars Compatibles amb Perl per php les quals sembla que la teva configuraci� de php no suporta!";

//
// Aix� �s tot amics!
// -------------------------------------------------

?>