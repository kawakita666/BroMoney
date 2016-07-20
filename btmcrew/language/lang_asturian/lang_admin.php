<?php
/***************************************************************************
 *                            lang_admin.php [Asturian]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     traduci�n al asturinu: Mikel Gonz�lez (mikelglez@iespana.es)
 *
 *     $Id: lang_admin.php,v 1.3.2.2 2002/05/20 13:44:19 psotfx Exp $
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
$lang['General'] = "Alministraci�n Xeneral";
$lang['Users'] = "Alministraci�n d'Usuarios";
$lang['Groups'] = "Alministraci�n de Grupos";
$lang['Forums'] = "Alministraci�n de Foros";
$lang['Styles'] = "Alministraci�n d'Estilos";

$lang['Configuration'] = "Configuraci�n";
$lang['Permissions'] = "Permisos";
$lang['Manage'] = "Xesti�n";
$lang['Disallow'] = "Deshabilitar nomes d'usuariu";
$lang['Prune'] = "Purgar";
$lang['Mass_Email'] = "Correu Masivu";
$lang['Ranks'] = "Rangos";
$lang['Smilies'] = "Smilies";
$lang['Ban_Management'] = "Control d'Exclusi�n";
$lang['Word_Censor'] = "Pallabres Censuraes";
$lang['Export'] = "Exportar";
$lang['Create_new'] = "Crear";
$lang['Add_new'] = "A�adir";
$lang['Backup_DB'] = "Copia de la Base Datos";
$lang['Restore_DB'] = "Restaurar la Base Datos";


//
// Index
//
$lang['Admin'] = "Alministraci�n";
$lang['Not_admin'] = "Ust� nun t� autorizau pa alministrar esti Foru";
$lang['Welcome_phpBB'] = "Bienveniu a phpBB";
$lang['Admin_intro'] = "Gracies por elexir phpBB comu soluci�n pa el su foru. Esta pantalla dar�-y un resumen de les principales estad�stiques del su foru. Pue tornar a esta p�xina calcando el enllace de <u>�ndiz del Alministraor</u> nel panel de la izquierda. Pa tornar al �ndiz del su foru, claque el llogu de phpBB tam�n ubicau nel panel izquierdu. Los otros enllaces ubicaos a la izquierda d'esta pantalla dexar�n-y controlar tolos aspeutus d'esti foru, cada pantalla tendr� instrucciones de comu usar les ferramientes.";
$lang['Main_index'] = "�ndiz del Foru";
$lang['Forum_stats'] = "Estad�stiques del Foru";
$lang['Admin_Index'] = "�ndiz del Alministraor";
$lang['Preview_forum'] = "Vista previa del Foru";

$lang['Click_return_admin_index'] = "Calque %sEqu�%s pa tornar al �ndiz del Alministraor";

$lang['Statistic'] = "Estad�stica";
$lang['Value'] = "Valor";
$lang['Number_posts'] = "N�mberu d'unv�os";
$lang['Posts_per_day'] = "Unv�os por d�a";
$lang['Number_topics'] = "Cantid� de t�picos";
$lang['Topics_per_day'] = "T�picos per d�a";
$lang['Number_users'] = "Cantid� d'usuarios";
$lang['Users_per_day'] = "Usuarios per d�a";
$lang['Board_started'] = "Fecha d'entamu del Foru";
$lang['Avatar_dir_size'] = "Tama�u del direutoriu d'Im�xenes";
$lang['Database_size'] = "Tama�u de la Base Datos";
$lang['Gzip_compression'] ="Tipu de Compresi�n Gzip";
$lang['Not_available'] = "Nun ta disponible";

$lang['ON'] = "PRENDIU"; // This is for GZip compression
$lang['OFF'] = "APAGAU"; 


//
// DB Utils
//
$lang['Database_Utilities'] = "Utilidaes de la Base Datos";

$lang['Restore'] = "Restaurar";
$lang['Backup'] = "Copia segurid�";
$lang['Restore_explain'] = "Esto restaurar� toles tables de phpBB dende un archivu previamente guardau. Si el su servior soportalo, ust� puede subir un archivu de textu comprimiu col gzip y �sti descomprimirase automaticamente. <b>ATENCI�N</b> Esto sobre-escribir� la informaci�n existente. La restauraci�n pue durar unos minutos, por favor qu�dese n'esta p�xina hasta que'l procesu fine.";
$lang['Backup_explain'] = "Dende equi ust� pue facer una copia de segurid� de toa la informaci�n relacion� con phpBB. Si usted tiene tables adicionales ena misma Base Datos de les que quisiera realizar una copia enxerte los sus nomes separtaos por comes nel campu de Tables Adicionales. Si el su servior soportalu pue utilizar el gzip pa comprimir el archivu y reducir el su tama�u enantes de descargarlu.";

$lang['Backup_options'] = "Opciones de la Copia";
$lang['Start_backup'] = "Entamar la Copia";
$lang['Full_backup'] = "Copia complet�";
$lang['Structure_backup'] = "Nam�s la Estructura";
$lang['Data_backup'] = "N�mas los Datos";
$lang['Additional_tables'] = "Tables adicionales";
$lang['Gzip_compress'] = "Compresi�n nun archivu Gzip";
$lang['Select_file'] = "Selecionar un archivu";
$lang['Start_Restore'] = "Entamar la Restauraci�n";

$lang['Restore_success'] = "La Base Datos Restaurose.<br /><br />El su Foru deberia volver a la normalid� una vez fechu el procesu.";
$lang['Backup_download'] = "La descarga entamar� darreu, por favor espere un moment�n";
$lang['Backups_not_supported'] = "Disculpe pero la opci�n de copia de la su Base Datos nun ta soport� po'l su sistema";

$lang['Restore_Error_uploading'] = "Error subiendo la copia segurid�";
$lang['Restore_Error_filename'] = "Error nel nome d'archivu, por favor intente con un archivu diferente";
$lang['Restore_Error_decompress'] = "Nun puese descomprimir un archivu gzip, por favor subalo n'una version de textu";
$lang['Restore_Error_no_file'] = "Nun subiose neng�n archivu";


//
// Auth pages
//
$lang['Select_a_User'] = "Selecionar un Usuariu";
$lang['Select_a_Group'] = "Selecionar un Grupu";
$lang['Select_a_Forum'] = "Selecionar un Foru";
$lang['Auth_Control_User'] = "Control de Permisos a los Usuarios"; 
$lang['Auth_Control_Group'] = "Control de Permisos a los Grupos"; 
$lang['Auth_Control_Forum'] = "Control de Permisos a los Foros"; 
$lang['Look_up_User'] = "Gueyar un Usuariu";
$lang['Look_up_Group'] = "Gueyar un Grupu"; 
$lang['Look_up_Forum'] = "Gueyar un Foru"; 

$lang['Group_auth_explain'] = "Dende equ� podr� camudar los permisos y l'estau del moderaor asignau a cada grupu d'usuarios. Recuerde que en camudando los permisos del Grupu, que los permisos individuales camudar�n en cuantes la persona entre al foru. Usted ser� alvertiu n'esti casu.";
$lang['User_auth_explain'] = "Dende equ� ust� pue camudar los permisos y estau del moderaor asignau a cada usuariu. Tea presente que camudando los permisos d'un usuariu los permisos del grupu permaneceran ensin camudar hasta qu'el usuariu entre a los foros. Ust� ser� alvertiu n'esti casu.";
$lang['Forum_auth_explain'] = "Dende equ� pue camudar los niveles d'autorizaci�n de cada foru. Pa facer esto tien dos menes; una simple y otra avanza. Esta �ltima dar�-y mayor control pa la operaci�n y el funcionamientu de cada foru. Tenga en cuenta que al camudar los niveles de cada foru pue afectar el funcionamientu de cada usuariu seg�n el foru y los permisos que tenga l'usuario.";



$lang['Simple_mode'] = "Mou Simple";
$lang['Advanced_mode'] = "Mou Avanzau";
$lang['Moderator_status'] = "Estau del Moderaor";

$lang['Allowed_Access'] = "Acesu Permitiu";
$lang['Disallowed_Access'] = "Acesu nun Permitiu";
$lang['Is_Moderator'] = "con Moderaor";
$lang['Not_Moderator'] = "ensin Moderaor";

$lang['Conflict_warning'] = "Advertencia de Conflictu ena Autorizaci�n";
$lang['Conflict_access_userauth'] = "Esti usuariu ent� nun tien acesu a esti foru debio al Grupu al cual pertenez. Ust� tien que camudar los permisos del grupu o esborriar al usuariu del Grupu pa preveer que l'usuariu no tea acesu a esti foru. Los drechos del Grupu y l'Usuariu explicanse abaxu.";
$lang['Conflict_mod_userauth'] = "Esti usuariu ent� tien drechos de Moderaor a travi�s d'un Grupu al cual pertenez. Ust� deber� camudar los permisos del grupu o esborriar al usuariu de dicho Grupu pa tar seguru que nun tea acesu al foru con permisos de Moderar. Los drechos explicanse abasu.";

$lang['Conflict_access_groupauth'] = "El siguiente usuariu (o usuarios) ent� tien acesu a esti foru debio a los permisos que tien como Usuariu. Pa que nun tea acesu ust� tien que camudar los sus permisos. Los drechos d'Usuarios explicanse abaxu.";
$lang['Conflict_mod_groupauth'] = "El siguiente usuariu (o usuarios) ent� tien drechos de Moderaor n'esti foru. Pa que nun tea acesu a esti foru ust� tien que camudar los sus permisos d'usuariu. Los drechos d'Usuarios explicanse abaxu.";

$lang['Public'] = "P�blicu";
$lang['Private'] = "Privau";
$lang['Registered'] = "Rexistrau";
$lang['Administrators'] = "Alministraor";
$lang['Hidden'] = "Ocultu";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "TOOS";
$lang['Forum_REG'] = "REX";
$lang['Forum_PRIVATE'] = "PRIVAOS";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ALMIN";

$lang['View'] = "G�eyar";
$lang['Read'] = "Lleer";
$lang['Post'] = "Unvio";
$lang['Reply'] = "Rempuesta";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Esborriar";
$lang['Sticky'] = "PostIt";
$lang['Announce'] = "Anunciu";
$lang['Vote'] = "Votar";
$lang['Pollcreate'] = "Facer una encuesta";

$lang['Permissions'] = "Permisos";
$lang['Simple_Permission'] = "Permisu Simple";

$lang['User_Level'] = "Nivel d'Usuariu";
$lang['Auth_User'] = "Usuariu";
$lang['Auth_Admin'] = "Alministraor";
$lang['Group_memberships'] = "Grupu d'Usuarios";
$lang['Usergroup_members'] = "Esti Grupu tien los siguientes Usuarios";

$lang['Forum_auth_updated'] = "Permisu del Foru actualizau";
$lang['User_auth_updated'] = "Permisu del usuariu actualizau";
$lang['Group_auth_updated'] = "Permisu del Grupu actualizau";

$lang['Auth_updated'] = "los permisos camudaronse";
$lang['Click_return_userauth'] = "Calque %sequi%s pa tornar a los Permisos de los Usuarios";
$lang['Click_return_groupauth'] = "Calque %sequi%s pa tornar a los Permisos del Grupu";
$lang['Click_return_forumauth'] = "Calque %sequi%s pa tornar a los Permisos del Foru";


//
// Banning
//
$lang['Ban_control'] = "Control d'Exclusi�n";
$lang['Ban_explain'] = "Dende equ� ust� pue banear a un usuariu. Pue banear a los usuarios pol su nome, pola so direci�n IP, o pol su Nome de Dominiu. Esti m�todu previen que un usuariu tea acesu a la p�xina principal del foru. Pa evitar que l'Usuariu se rexistre con una nuea cuenta tami�n pue bannear la su direci�n de correu. Tea en cuenta que baneau una direci�n de correu nun evitar� que'l usuariu puea ingresar al foru nin que publique mensaxes. Para facer eso tien que utilizar un de los dos m�todos esplicaos anteriormente.";
$lang['Ban_explain_warn'] = "Tea en cuenta que colocando un RANGU de direciones IP ust� banea a toles direciones que s'alcuentren dientru del Rangu de la llista de bans.  Si realmente tien que utilizar un rangu intente utilizar unu peque�u pa asi nun banear a otros usuarios.";

$lang['Select_username'] = "Selecione un Nome d'Usuariu";
$lang['Select_ip'] = "Selecione una direci�n IP";
$lang['Select_email'] = "Selecione una direci�n de Correu";

$lang['Ban_username'] = "Banear a un o varios Usuarios";
$lang['Ban_username_explain'] = 'Pues banear a varios usuarios d\'una veg� usandu la correuta combinaci�n de rat�n y teclau col tu navegaor';

$lang['Ban_IP'] = "Banear una o varies direciones IP o Nomes de Dominiu";
$lang['IP_hostname'] = "Direciones IP o HOSTNAMES";
$lang['Ban_IP_explain'] = "Pa especificar diferentes IPs o Nomes de Dominiu, sep�relos con comes. Pa especificar un rangu de direciones IP separe l'entamu y el final utilizando un gui�n (-), pa especificar un comod�n utilice el *";

$lang['Ban_email'] = "Banear una o varies direciones de correu";
$lang['Ban_email_explain'] = "Pa especificar m�s d'un correu, col�quelos separaos per comes. Pa especificar un comod�n d'usarios utilece *, por exemplu *@hotmail.com";

$lang['Unban_username'] = "Quitar ban d'un o varios Usuarios";
$lang['Unban_username_explain'] = "Ust� pue quitar el ban de m�ltiples Usuarios usando la correuta combinaci�n de rat�n y teclau del so ordenaor y navegaor";

$lang['Unban_IP'] = "Quitar ban d'una o varies Direciones IP";
$lang['Unban_IP_explain'] = "Ust� pue quitar el ban a m�ltiples direciones IP usando la correuta combinaci�n de rat�n y teclau del so ordenaor y navegaor";

$lang['Unban_email'] = "Quitar ban d'una o varies direciones de correu";
$lang['Unban_email_explain'] = "Ust� pue quitar el ban de varies direciones de correu usando la correuta combinaci�n del rat�m y teclau del so ordenaor y navegaor";

$lang['No_banned_users'] = "Nun hay Usuarios baneaos";
$lang['No_banned_ip'] = "Nun hay direciones IP baneaes";
$lang['No_banned_email'] = "Nun hay direciones de correu baneaes";

$lang['Ban_update_sucessful'] = "La llista de BAN foy actualiz� correutamente";
$lang['Click_return_banadmin'] = "Calque %sEqu�%s pa tornar al Panel de Control de BANS";


//
// Configuration
//
$lang['General_Config'] = "Configuraci�n Xeneral";
$lang['Config_explain'] = "El siguiente formulariu, permitir�-y camudar les opciones del su foru. Pa la configuraci�n d'Usuarios y Foros use los enllaces de la izquierda.";

$lang['Click_return_config'] = "Calque %sEqu�%s pa tornar a la Configuraci�n Xeneral";

$lang['General_settings'] = "Configuraci�n Xeneral del Foru";
$lang['Server_name'] = "Nome de Dominiu";
$lang['Server_name_explain'] = "El nome de dominiu nel que corre esti Foru";
$lang['Script_path'] = "Direutoriu del Script";
$lang['Script_path_explain'] = "El direutoriu au ta phpBB2, relativu al nome de dominiu";
$lang['Server_port'] = "Puertu del Servior";
$lang['Server_port_explain'] = "El puertu nel que corre el servior, xeneralmente 80. Camudar nam�s si ye distintu.";
$lang['Site_name'] = "Nome del Sitiu";
$lang['Site_desc'] = "Descrici�n del Situ";
$lang['Board_disable'] = "Desautivar Foru";
$lang['Board_disable_explain'] = "Esto fadr� que los Usuarios nun tean acesu al Foru. Nu se desconeute mientres desautiva'l Foru, ya que nun podri� volver a loguease nueamente";
$lang['Acct_activation'] = "Autivar cuenta";
$lang['Acc_None'] = "Nenguna"; // These three entries are the type of activation
$lang['Acc_User'] = "Usuariu";
$lang['Acc_Admin'] = "Alministraor";

$lang['Abilities_settings'] = "Configuraci�n B�sica d'Usuariu y del Foru";
$lang['Max_poll_options'] = "N�mberu m�ximu d'entrugues en Encuestes";
$lang['Flood_Interval'] = "Intervalu de Flood";
$lang['Flood_Interval_explain'] = "Cantid� de segundos que'l usuariu tien que esperar pa publicar temes";
$lang['Board_email_form'] = "Correu d'Usuariu a travi�s del Foru";
$lang['Board_email_form_explain'] = "Los usuarios podr�n unviase correos mediante'l Foru";
$lang['Topics_per_page'] = "Temes por P�xina";
$lang['Posts_per_page'] = "Rempuestes por P�xina";
$lang['Hot_threshold'] = "Cantid� de rempuestes pa ser considerau Popular";
$lang['Default_style'] = "Estilu por defeutu";
$lang['Override_style'] = "Ignorar l'estilu del Usuariu";
$lang['Override_style_explain'] = "Utilizarase'l estilu selecionado por defeutu ensin importar la eleci�n del usuariu";
$lang['Default_language'] = "Llingua por Defeutu";
$lang['Date_format'] = "Formatu de la Fecha";
$lang['System_timezone'] = "Zona Horaria";
$lang['Enable_gzip'] = "Activar la Compresion GZip";
$lang['Enable_prune'] = "Habilitar Pruning nel Foru";
$lang['Allow_HTML'] = "Permitir HTML";
$lang['Allow_BBCode'] = "Permitir BBCode";
$lang['Allowed_tags'] = "Permitir HTML tags";
$lang['Allowed_tags_explain'] = "Separare tags con comes";
$lang['Allow_smilies'] = "Permitir Emoticons";
$lang['Smilies_path'] = "Almacenaxe de la ruta de los Iconos xestuales (emoticons)";
$lang['Smilies_path_explain'] = "Ruta dende'l directoriu phpBB , exemplu images/smilies";
$lang['Allow_sig'] = "Permitir Firmes";
$lang['Max_sig_length'] = "Llargu m�ximu de la Firma";
$lang['Max_sig_length_explain'] = "M�ximu numberu de caracteres ena Firma";
$lang['Allow_name_change'] = "Permitir caudar el Nome d'Usuariu";

$lang['Avatar_settings'] = "Configuraci�n de los Avatars";
$lang['Allow_local'] = "Habilitar galer�es d'Avatars";
$lang['Allow_remote'] = "Habilitar Avatars Remotos";
$lang['Allow_remote_explain'] = "Amosar Avatars guardaos n'otros sitios web";
$lang['Allow_upload'] = "Habilitar upload d'Avatars";
$lang['Max_filesize'] = "Tama�u m�ximu pa les im�xenes";
$lang['Max_filesize_explain'] = "Llimita la cantid� de bytes que pue tener un Avatar";
$lang['Max_avatar_size'] = "M�ximu Tama�u del Avatar";
$lang['Max_avatar_size_explain'] = "(Altura x Anchu en pixels)";
$lang['Avatar_storage_path'] = "Ruta del Avatar";
$lang['Avatar_storage_path_explain'] = "Ruta dientru de phpBB au s'alcuentren los Avatars, exemplu images/avatars";
$lang['Avatar_gallery_path'] = "Ruta de la Galer�a d'Avatars";
$lang['Avatar_gallery_path_explain'] = "Ruta dientru de phpBB de la galer�a, ex. images/avatars/gallery";

$lang['COPPA_settings'] = "Configuraciones COPPA";
$lang['COPPA_fax'] = "N�mberu de Fax COPPA";
$lang['COPPA_mail'] = "Direci�n de Correu COPPA";
$lang['COPPA_mail_explain'] = "Esta ye la direci�n de correu pa que los padres unvien el formulariu COPPA";

$lang['Email_settings'] = "Configuraci�n del Correu";
$lang['Admin_email'] = "Direci�n de correu del Alministraor";
$lang['Email_sig'] = "Firma";
$lang['Email_sig_explain'] = "Esti textu a�adir�se al final de cada correu";
$lang['Use_SMTP'] = "Usar servior SMTP pa Correu";
$lang['Use_SMTP_explain'] = "Diga si ust� pue y/o debe unviar los correos por un servior SMTP";
$lang['SMTP_server'] = "Direci�n SMTP del Servior";
$lang['SMTP_username'] = "Nome d'usuariu del SMTP";
$lang['SMTP_username_explain'] = "Enxerte un nome d'usuariu nam�s si'l su servior SMTP requiere-ylo";
$lang['SMTP_password'] = "Contrase�a del SMTP";
$lang['SMTP_password_explain'] = "Enxerte una contrase�a nam�s si'l su servior SMTP requiere-ylo";

$lang['Disable_privmsg'] = "Mensaxe Privau";
$lang['Inbox_limits'] = "M�xima cantid� de mensaxes ena Bandexa d'Entrada";
$lang['Sentbox_limits'] = "M�xima cantid� de mensaxes ena Bandexa de Salida";
$lang['Savebox_limits'] = "M�xima cantid� de mensaxes ena Carpeta pa Guardar";

$lang['Cookie_settings'] = "Configuraci�n de les Cookies"; 
$lang['Cookie_settings_explain'] = "Esto controla comu s'unv�en les cookies al Navegaor, ena mayor�a de los casos la configuraci�n preestablecia sedra m�s que suficiente. Si necesita camudar esto tea cudiau, ya que si fora mal configurau pue que los sus Usuarios nun puean Coneutase al Foru";
$lang['Cookie_domain'] = "Dominiu de la Cookie";
$lang['Cookie_name'] = "Nome de la Cookie";
$lang['Cookie_path'] = "Ruta de la Cookie";
$lang['Cookie_secure'] = "Cookie segura [ https ]";
$lang['Cookie_secure_explain'] = "Si el so servior ta corriendu via SSL escueya esta opci�n d'otra mena d�xelu deshabilitau";
$lang['Session_length'] = "Duraci�n de la sesi�n [ segundos ]";

//
// Forum Management
//
$lang['Forum_admin'] = "Alministraci�n del Foru";
$lang['Forum_admin_explain'] = "Dende este panel ust� pue a�adir, esborriar, editar, y re-ordenar categor�es y Foros";
$lang['Edit_forum'] = "Editar el Foru";
$lang['Create_forum'] = "Facer un nueu Foru";
$lang['Create_category'] = "Crear una nuea Categor�a";
$lang['Remove'] = "Quitar";
$lang['Action'] = "Acci�n";
$lang['Update_order'] = "Autualizar Orden";
$lang['Config_updated'] = "La configuraci�n del Foru actualizose";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Esborriar";
$lang['Move_up'] = "P'arriba";
$lang['Move_down'] = "P'abaxu";
$lang['Resync'] = "sincronizar";
$lang['No_mode'] = "Neng�n mou fou selecionau";
$lang['Forum_edit_delete_explain'] = "El siguiente formulariu permitir�-y personalizar les opciones del Foru. Pa la configuraci�n d'usuarios y Foros utilice los enllaces de la izquierda.";

$lang['Move_contents'] = "Mover tolos contenios";
$lang['Forum_delete'] = "Esborriar el Foru";
$lang['Forum_delete_explain'] = "El siguiente formulariu permitir�-y Esborriar dalg�n foru (o categor�a) y dicir au quier poner tolos Temes y Categor�es.";

$lang['Status_locked'] = 'Trancau';
$lang['Status_unlocked'] = 'Abiertu';
$lang['Forum_settings'] = "Configuraci�n Xeneral del Foru";
$lang['Forum_name'] = "Nome del Foru";
$lang['Forum_desc'] = "Descripci�n";
$lang['Forum_status'] = "Estau del Foru";
$lang['Forum_pruning'] = "Auto-pruning";

$lang['prune_freq'] = 'Revisar temes y ed�';//Ver Pruning!
$lang['prune_days'] = "Esborriar temes que nun tienen rempuesta";
$lang['Set_prune_data'] = "Ust� selecionara la opci�n Auto-pruning pa esti foru pero nun selecionara la frecuencia o cantid� de d�es pa'l PRUNE. Por favor torne y faiga los camudaminetos";

$lang['Move_and_Delete'] = "Mover y Esborirar";

$lang['Delete_all_posts'] = "Esborriar tolos Temes";
$lang['Nowhere_to_move'] = "Nun hay sitiu au mover tou";

$lang['Edit_Category'] = "Editar Categor�a";
$lang['Edit_Category_explain'] = "Utilice esti formulariu pa Editar categor�es";

$lang['Forums_updated'] = "La informaci�n del Foru y les sus categor�es actulizaronse";

$lang['Must_delete_forums'] = "Tien qu'esborriar tolos foros enantes d'esborriar una Categor�a";

$lang['Click_return_forumadmin'] = "Calque %sEqu�%s pa tornar a l'Alministraci�n del Foru";


//
// Smiley Management
//
$lang['smiley_title'] = "Edici�n de Smilies";
$lang['smile_desc'] = "Dende esta p�xina ust� pue a�adir, quitar o editar dalg�n emoticon pa que los Usuarios utilicenlos nel foru y enos mensaxes Privaos";

$lang['smiley_config'] = "Configuraci�n de Smiley";
$lang['smiley_code'] = "C�digu de Smiley";
$lang['smiley_url'] = "Archivu d'Imaxen del Smiley";
$lang['smiley_emot'] = "Emoci�n o sentimiento del Smiley";
$lang['smile_add'] = "A�adir un nueu Smiley";
$lang['Smile'] = "Smile";
$lang['Emotion'] = "Emoci�n";

$lang['Select_pak'] = "Selecione l'archivu .pak";
$lang['replace_existing'] = "Reemplazar Smiles Existentes";
$lang['keep_existing'] = "Mantener Smiles Existentes";
$lang['smiley_import_inst'] = "Ust� tien que descomprimir el paquete de Smiles y subir tolos archivos nel directoriu de Smiles pa instalalos correutamente. Llueo selecione la informaci�n correuta dende este formulariu pa as� poer importar los Smiles";
$lang['smiley_import'] = "Importar paquete de Smiles";
$lang['choose_smile_pak'] = "Escoyer archivu de paquete (.pak)";
$lang['import'] = "Importar Smileys";
$lang['smile_conflicts'] = "Que deber�a facese en casu de conflictu";
$lang['del_existing_smileys'] = "Esborriar los smiles existentes enantes d'importarlos";
$lang['import_smile_pack'] = "Importar Paquete de Smileys";
$lang['export_smile_pack'] = "Facer un paquete de Smileys";
$lang['export_smiles'] = "Pa crear un paquete de Smiles, de los sus smileys instalaos, calque %sEqu�%s pa baxar l'archivu smiles.pak. Nome este archivu de forma correuta pero aseg�rese de mantener la extensi�n .pak. Lluego faiga un archivu zip que contenga tolos smileys am�s del archivu .pak.";

$lang['smiley_add_success'] = "Los Smileys foron a�adios";
$lang['smiley_edit_success'] = "Los Smileys foron autualizados";
$lang['smiley_import_success'] = "El paquete de Smileys importose.";
$lang['smiley_del_success'] = "Los Smileys esborriaronse.";
$lang['Click_return_smileadmin'] = "Calque %sEqu�%s pa tornar al Panel de Smiles";

//
// User Management
//
$lang['User_admin'] = "Alministraci�n d'Usuarios";
$lang['User_admin_explain'] = "Dende equ� ust� pu� camudar la informaci�n del usuariu. Pa modificar los permisos d'un Usuariu por favor utilice el Sistema de Permisos d'usuarios y Grupos.";

$lang['Look_up_user'] = "G�eyar Usuariu";

$lang['Admin_user_fail'] = "No se llograra autualizar el perfil del Usuariu";
$lang['Admin_user_updated'] = "El perfil del Usuariu autualizose";
$lang['Click_return_useradmin'] = "Calque %sEqu�%s pa tornar al Panel d'Alministraci�n d'Usuarios";

$lang['User_delete'] = "Esborriar Usuariu";
$lang['User_delete_explain'] = "Calque equ� pa esborriar esti Usuariu. Tea en cuenta que llueu nun podr� restauralo.";
$lang['User_deleted'] = "L'Usuariu esborriose.";

$lang['User_status'] = "Usuariu Autivu";
$lang['User_allowpm'] = "Pu� unviar mensaxes privaos";
$lang['User_allowavatar'] = "Pu� amosar el so Avatar";

$lang['Admin_avatar_explain'] = "Dende equ� pu� g�eyar y esborriar l'Avatar del Usuariu";

$lang['User_special'] = "Campos especiales pa Alministraores";
$lang['User_special_explain'] = "Estos campos nun tan disponibles pa que los Usuarios puean camudalos. Dende equ� ust� pue configurar el status y otres opciones que los Usuarios nun puen camudar.";


//
// Group Management
//
$lang['Group_administration'] = "Alministraci�n de Grupos";
$lang['Group_admin_explain'] = "Dende esti panel pu� modificar los Grupos, ust� pu� esborriar, crear y editar los Grupos existentes. Tami�n pu� escoyer los Moderaores y camudar el nome del Grupu y la so descripci�n";
$lang['Error_updating_groups'] = "Ocurriera un error autualizando el Grupu";
$lang['Updated_group'] = "El Grupu autualizose";
$lang['Added_new_group'] = "Fexose'l Nueu Grupu";
$lang['Deleted_group'] = "El Grupu esborriose";
$lang['New_group'] = "Facer Nueu Grupu";
$lang['Edit_group'] = "Editar Grupu";
$lang['group_name'] = "Nome del Grupu";
$lang['group_description'] = "Descrici�n del Grupu";
$lang['group_moderator'] = "Moderaor del Grupu";
$lang['group_status'] = "Status del Grupu";
$lang['group_open'] = "Grupu Abiertu";
$lang['group_closed'] = "Grupu Trancau";
$lang['group_hidden'] = "Grupu Ocultu";
$lang['group_delete'] = "Esborriar Grupu";
$lang['group_delete_check'] = "Esborriar esti Grupu";
$lang['submit_group_changes'] = "Aceutar Camudamientos";
$lang['reset_group_changes'] = "Anular Camudamientos";
$lang['No_group_name'] = "Tien qu'especificar un Nome pa esti Grupu";
$lang['No_group_moderator'] = "Tien qu'especificar un Moderaor pa esti Grupu";
$lang['No_group_mode'] = "Tien qu'especificar el mou d'esti Grupu, Abiertu o Trancau";
$lang['delete_group_moderator'] = "�Esborriar l'antig� moderaor del Grupu?";
$lang['delete_moderator_explain'] = "Si ta camudando'l moderaor del Grupu, marque esta casilla para esborriar l'antig� Moderaor del Grupu. Sinon l'Usuariu convertir�se nun miembru regular.";
$lang['Click_return_groupsadmin'] = "Calque %sEqu�%s pa tornar al Panel d'Alministraci�n de Grupos.";
$lang['Select_group'] = "Selecione un Grupu";
$lang['Look_up_group'] = "G�eyar un Grupu";
$lang['No_group_action'] = 'Nun s\'especificara una aci�n'; 


//
// Prune Administration
//
$lang['Forum_Prune'] = "Purga de Foros";
$lang['Forum_Prune_explain'] = "Esto esborriar� tolos temes enos que nun se publicaran nueos mensaxes enos d�es qu'ust� selecionara. Si nun enxerta un n�mberu entos esborriaranse tolos temes. Nun s'esborriar�n temes enos qu'heba encuestes que ten furrulando nin anuncios. Tendr� qu'esborriar estos temes de forma manual.";
$lang['Do_Prune'] = "Facer la purga";
$lang['All_Forums'] = "Tolos Foros";
$lang['Prune_topics_not_posted'] = "Esborriar temes ensin rempuestes d'una antig�ed� d'estos d�es";
$lang['Topics_pruned'] = "Temes esborriaos";
$lang['Posts_pruned'] = "Mensaxes esborriaos";
$lang['Prune_success'] = "Fexose la purga de los foros";


//
// Word censor
//
$lang['Words_title'] = "Control de Pallabres Censuraes";
$lang['Words_explain'] = "Dende equ� ust� pu� a�adir, editar, y quitar pallabres qu'autom�ticamente sedr�n censuraes de sus foros. Estes pallabras nun podr�n ser escoxies como nomes d'usuarios. Los Asteriscos (*) son aceutaos enos campos de les pallabres, exemplu *prueba* , prueba* (acaparar�a pruebalu), *prueba (acaparar�a enprueba).";
$lang['Word'] = "Pallabra";
$lang['Edit_word_censor'] = "Editar el pallabreru prohibiu";
$lang['Replacement'] = "Reemplazar";
$lang['Add_new_word'] = "Agregar nuea pallabra";
$lang['Update_word'] = "Autualizar el pallabreru prohibiu";

$lang['Must_enter_word'] = "Tien que plumiar una pallabra y su otra pallabra pa'l reemplazu";
$lang['No_word_selected'] = "Nun selecionara una pallabra pa'l reemplazu";

$lang['Word_updated'] = "Camudamientos fechos";
$lang['Word_added'] = "A�adiose la nuea pallabra";
$lang['Word_removed'] = "La pallabra esborriose del pallabreru prohibiu";

$lang['Click_return_wordadmin'] = "Calque %sEqu�%s pa tornar al Alministraor de Pallabres Censuraes";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Dende equ� ust� pu� unviar mensaxes de correu a tolos sus Usuarios y Grupos. Al facer esto un correu unviarase dende'l correu alministrativu inidicau previamente. Si unv�a esti correu a un Grupu numberosu por favor seya paciente y espere a que termine de cargar la p�xina. Ye normal que tarde unos cuantos minutos, notificaraise encuantes fine'l unvio.";
$lang['Compose'] = "Plumiar"; 

$lang['Recipients'] = "Correos"; 
$lang['All_users'] = "A tolos Usuarios";

$lang['Email_successfull'] = "El so correu unviose";
$lang['Click_return_massemail'] = "Calque %sEqu�%s pa tornar al Panel pa Unviar correos Masivos";


//
// Ranks admin
//
$lang['Ranks_title'] = "Alministraci�n de Rangos";
$lang['Ranks_explain'] = "Usando esti formulariu ust� pue a�adir, editar, ver y esborriar rangos. Ust� tami�n pu� facer rangos";

$lang['Add_new_rank'] = "Facer Rangu";

$lang['Rank_title'] = "T�tulu del Rangu";
$lang['Rank_special'] = "Selecionar como Rangu Especial";
$lang['Rank_minimum'] = "M�nima cantid� de Mensaxes";
$lang['Rank_maximum'] = "M�xima cantid� de Mensaxes";
$lang['Rank_image'] = "Im�xen del rangu (tea en cuenta la ruta del foru phpBB2)";
$lang['Rank_image_explain'] = "Faiga esto pa definir una peque�a imaxen pa esti rangu";

$lang['Must_select_rank'] = "Tien que selecionar un Rangu";
$lang['No_assigned_rank'] = "Nun selecionara un Rangu";

$lang['Rank_updated'] = "El Rangu autualizose";
$lang['Rank_added'] = "Fexose'l nueu Rangu";
$lang['Rank_removed'] = "El Rangu esborriose";
$lang['No_update_ranks'] = 'Esborriose\'l rangu, pero les cuentes d\'usuariu que taben usandu esi rangu nun s\'autualizaron. Deber� esborriar el rangu manualmente d\'eses cuentes';

$lang['Click_return_rankadmin'] = "Calque %sEqu�%s pa tornar al Panel d'Alminstraci�n de Rangos";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Control d'Almisi�n d'Usuariu";
$lang['Disallow_explain'] = "Dende equ� pu� controlar los nomes d'usuario que nun quier que s'empleguen. Pa llograr esto tien q'utilizar comodines con asteriscos (*). Recuerde que nun pu� prohibir nomes d'usuario que ya tean coyios. Enantes de prohibir dichos nomes tien qu'esborrialos.";

$lang['Delete_disallow'] = "Esborriar";
$lang['Delete_disallow_title'] = "Esborriar un nome d'usuariu nun permitiu";
$lang['Delete_disallow_explain'] = "Ust� pu� esborriar nomes d'usuariu nun permitios selecionando'l nome d'usuariu de la llista y calcando en Aceutar";

$lang['Add_disallow'] = "A�adir";
$lang['Add_disallow_title'] = "A�adir un nome d'usuariu nun permitiu";
$lang['Add_disallow_explain'] = "Ust� pu� nun permitir un nome d'usuariu utilizando m�scares con asteriscos(*)";

$lang['No_disallowed'] = "Nomes d'usuarios nun permitios";

$lang['Disallowed_deleted'] = "El nome d'usuariu nun permitiu esborriose";
$lang['Disallow_successful'] = "El nome d'usuariu nun permitiu agregose";
$lang['Disallowed_already'] = "El nome d'usuariu nun permitiu qu'elixera nun pu� selecionase. Debiu a que ya ta ena llista, o ta nel Pallabreru Prohibiu, o bien ya ta ena llista d'usuarios nun permitios";

$lang['Click_return_disallowadmin'] = "Calque %sEqui%s pa tornar al Control d'Almisi�n d'Usuariu";


//
// Styles Admin
//
$lang['Styles_admin'] = "Alministraci�n d'Estilos";
$lang['Styles_explain'] = "Dende equ� ust� pu� f�cilmente a�adir, quitar y alministrar los estilos (plantilles y temes) disponibles pa los sus usuarios";
$lang['Styles_addnew_explain'] = "La siguiente llista contien tolos temes que t�n disponibles pa les plantilles. Los items de la llista nun s'instalaren ena base de los foros phpBB. Pa facer esu nam�s calque nel enllace que figura al llau de cada opci�n";

$lang['Select_template'] = "Selecione una Plantilla";

$lang['Style'] = "Estilu";
$lang['Template'] = "Plantilla";
$lang['Install'] = "Instalar";
$lang['Download'] = "Descargar";

$lang['Edit_theme'] = "Editar Tema";
$lang['Edit_theme_explain'] = "Nel siguiente formulariu pu� editar la configuraci�n del tema selecionau";

$lang['Create_theme'] = "Facer Tema";
$lang['Create_theme_explain'] = "Utilice'l siguiente formulariu para facer un tema nueu pa la plantilla selecion�. Cuandu enxerte los collores (tien qu'ingresalos n'hexadecimal) nun debe incluir el # . Exemplu: CCCCCC ye v�lidu, pero #CCCCCC taria mal";

$lang['Export_themes'] = "Exportar Tema";
$lang['Export_explain'] = "Dende esti panel ust� podr� exportar el tema pa la plantilla selecion�. Selecione la plantilla de la llista d'abaxu y el programa fair� l'archivu de configuraci�n del tema y asina podr� guardalo. Si nun se pue� grabar l'archivu pu� Descargalu. Pa que'l programa puea guardalu ust� tien que dar permisu d'escritura a la carpeta de plantilles (template). Pa m�s informaci�n utilice la guia del foru phpBB 2";

$lang['Theme_installed'] = "El tema selecionau instalose";
$lang['Style_removed'] = "L'estilu selecionau quitose de la base datos. Pa quitalo del too tien qu'esborriar el direutoriu apropiau de la carpeta de plantilles (template)";
$lang['Theme_info_saved'] = "La informaci�n pa la plantilla selecion� guardose. Agora tien que camudar los permisos en theme_info.cgf y poner el direutoriu de plantilles (template) en mou de nam�s-llectura";
$lang['Theme_updated'] = "El tema selecionau autualizose. Agora tien qu'exportar la configuraci�n del nueu tema";
$lang['Theme_created'] = "Tema Creau. Agora tien qu'exportar el tema nel archivu de configuraci�n de temes pa asi llograr mantenelu seguru";

$lang['Confirm_delete_style'] = "Ta seguru que quier esborriar esti estilu";

$lang['Download_theme_cfg'] = "Nun pudose exportar l'archivu ya que nun se pudiera escribir nel archivu. Presione el bot�n d'abaxu pa descargar esti archivu col su navegaor. Una veg� que lo tea descargau pu� movelu al direutoriu de les plantilles (template).";
$lang['No_themes'] = "La plantilla que selecionara nun tien temes adxuntos. Pa facer un nueu tema calque en Facer Nueu Tema ena izquierda del panel";
$lang['No_template_dir'] = "No pudo abrise la carpeta de plantilles. Esto pu� ser porque te con permisos ensin llectura, o que nun exista.";
$lang['Cannot_remove_style'] = "Nun pu� quitase l'estilu selecionau porque ye el que ta por defeuto nel foru. Por favor camude'l que utilizase por defeuto e int�ntelu nueamente";
$lang['Style_exists'] = "El nome d'estilu selecionau ya existe, por favor torne patr�s y selecione otru distintu";

$lang['Click_return_styleadmin'] = "Calque %sEqu�%s pa tornar a l'Alministraci�n d'Estilos";

$lang['Theme_settings'] = "Configuraci�n de Temes";
$lang['Theme_element'] = "Ellementos de Temes";
$lang['Simple_name'] = "Nome simple";
$lang['Value'] = "Valor";
$lang['Save_Settings'] = "Guardar Configuraci�n";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Imaxen de Fondu";
$lang['Background_color'] = "Collor de Fondu";
$lang['Theme_name'] = "Nome de Tema";
$lang['Link_color'] = "Collor d'Enllace";
$lang['Text_color'] = "Collor de Testu";
$lang['VLink_color'] = "Collor d'Enllace Visitau";
$lang['ALink_color'] = "Collor d'Enllace Autivu";
$lang['HLink_color'] = "Collor d'Enllace Enriba";
$lang['Tr_color1'] = "Tabla Fila Collor 1";
$lang['Tr_color2'] = "Tabla Fila Collor 2";
$lang['Tr_color3'] = "Tabla Fila Collor 3";
$lang['Tr_class1'] = "Tabla Fila Clase 1";
$lang['Tr_class2'] = "Tabla Fila Clase 2";
$lang['Tr_class3'] = "Tabla Fila Clase 3";
$lang['Th_color1'] = "Tabla Encabezau Collor 1";
$lang['Th_color2'] = "Tabla Encabezau Collor 2";
$lang['Th_color3'] = "Tabla Encabezau Collor 3";
$lang['Th_class1'] = "Tabla Encabezau Clase 1";
$lang['Th_class2'] = "Tabla Encabezau Clase 2";
$lang['Th_class3'] = "Tabla Encabezau Clase 3";
$lang['Td_color1'] = "Tabla Celda Collor 1";
$lang['Td_color2'] = "Tabla Celda Collor 2";
$lang['Td_color3'] = "Tabla Celda Collor 3";
$lang['Td_class1'] = "Tabla Celda Clase 1";
$lang['Td_class2'] = "Tabla Celda Clase 2";
$lang['Td_class3'] = "Tabla Celda Clase 3";
$lang['fontface1'] = "Fuente 1";
$lang['fontface2'] = "Fuente 2";
$lang['fontface3'] = "Fuente 3";
$lang['fontsize1'] = "Fuente 1";
$lang['fontsize2'] = "Fuente 2";
$lang['fontsize3'] = "Fuente 3";
$lang['fontcolor1'] = "Fuente Collor 1";
$lang['fontcolor2'] = "Fuente Collor 2";
$lang['fontcolor3'] = "Fuente Collor 3";
$lang['span_class1'] = "Espaciu Clase 1";
$lang['span_class2'] = "Espaciu Clase 2";
$lang['span_class3'] = "Espaciu Clase 3";
$lang['img_poll_size'] = "Imaxen de la Encuesta [px]";
$lang['img_pm_size'] = "Tama�u de Mensaxes Privaos [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Bienvenios a l'Instalaci�n de los foros phpBB 2";
$lang['Initial_config'] = "Configuraci�n Basica";
$lang['DB_config'] = "Configuraci�n de la Base Datos";
$lang['Admin_config'] = "Configuraci�n del Alministraor";
$lang['continue_upgrade'] = "Una veg� descargau l'archivu de configuraci�n calque sobre \"Siguir Autualizaci�n\" pa continuar col procesu. Por favor espere que se suba l'archivu de configuraci�n hasta que'l procesu d'autualizaci�n fine";
$lang['upgrade_submit'] = "Siguir Autualizaci�n";

$lang['Installer_Error'] = "Hebo un ERROR ena Instalaci�n";
$lang['Previous_Install'] = "Nun detectose una Instalaci�n previa";
$lang['Install_db_error'] = "Hebo un ERROR autualizando la Base Datos";

$lang['Re_install'] = "La su instalaci�n previa ent� ta autiva. <br /><br />Si quier reinstalar los foros phpBB 2 calque Si nel bot�n d'abaxu. Por favor tea en cuenta que al realizar esto destruir�se la informaci�n existente, nun fairanse copies de segurid�. L'usuariu alministrador y la contrase�a qu'ust� usaba anteriormente ser�n creaos nueamente, pero nun otru tipo d'informaci�n <br /><br />�Piense cuidadosamente enantes de calcar SI!";

$lang['Inst_Step_0'] = "Gracies por ellexir phpBB 2. Pa finar la instalaci�n por favor complete los datos requerios abaxu. Tena en cuenta que la Base Datos destin� a los foros ya deber�a existir. Si ta instalando en una Base Datos q'utiliza OBDC, por exemplu MS Access primeru tien que crear un DNS y depu�s continuar.";

$lang['Start_Install'] = "Entamar Instalaci�n";
$lang['Finish_Install'] = "Finar Inatalaci�n";

$lang['Default_lang'] = "Llingua por defeutu";
$lang['DB_Host'] = "Nome de Dominiu de la Base Datos / DSN";
$lang['DB_Name'] = "Nome de la base Datos";
$lang['DB_Username'] = "Nome d'usuariu de la base datos";
$lang['DB_Password'] = "Contrase�a de la base datos";
$lang['Database'] = "Su Base Datos";
$lang['Install_lang'] = "Elixa la Llingua d'Instalaci�n";
$lang['dbms'] = "Tipu de Base Datos";
$lang['Table_Prefix'] = "Prefixu pa les tables ena Base datos";
$lang['Admin_Username'] = "Nome d'Usuariu del Alministraor";
$lang['Admin_Password'] = "Contrase�a del Alministraor";
$lang['Admin_Password_confirm'] = "Contrase�a d'accesu del Alministraor [ Confirma ]";

$lang['Inst_Step_2'] = "El su usuariu alministraor y contrase�a foron creaos. N'esti puntu el procesu d'Instalaci�n B�sica completose. Agora se-y unviar� a una pantalla que-y permitir� alministrar la nuea instalaci�n. Por favor asegurese de verificar la Configuraci�n Xeneral y de facer los camudamientos requerios. Gracies por escoyer phpBB 2";

$lang['Unwriteable_config'] = "El su archivu de configuraci�n ta nun mou de non-escritura. Una copia del archivu de configuraci�n podr� descargase cuandu calque el bot�n siguiente. Ust� tien que subir esti ficheru nel mesmu direutoriu au s'atope'l foru phpBB 2. Una veg� que faiga esto tien qu'ingresar usando'l usuariu d'alministraor y contrase�a q'ust� escoyi� nel formulariu anterior y as� visitar el Control d'Alministraci�n pa ver la configuraci�n xeneral. Gracies por escoyer phpBB 2";
$lang['Download_config'] = "Descargar Configuraci�n";

$lang['ftp_choose'] = "Escoyer M�todu de Descarga";
$lang['ftp_option'] = "<br />Ya que les extensiones FTP tan disponibles n'esta versi�n de PHP ust� podr� escoyer si quier, mediante FTP, colocar l'archivu nel so llugar autom�ticamente.";
$lang['ftp_instructs'] = "Ust� selecionara subir autom�ticamente por ftp l'archivu ena cuenta que contien el phpBB 2. Por favor ingrese l'informaci�n solicit� pa facilitar el procesu. Tea en cuenta que la ruta FTP tien que ser la ruta exacta al PHPBB 2 comu si fora a subir los archivos usando cualisquier cliente de ftp.";
$lang['ftp_info'] = "Enxerte l'Informaci�n del su FTP";
$lang['Attempt_ftp'] = "Intentar subir archivu mediante ftp en forma autom�tica";
$lang['Send_file'] = "Unv�enme l'archivu a min y yo subirelu personalmente por FTP";
$lang['ftp_path'] = "Ruta FTP al phpBB 2";
$lang['ftp_username'] = "Nome d'Usuariu FTP";
$lang['ftp_password'] = "Contrase�a FTP";
$lang['Transfer_config'] = "Entamar Transferencia";
$lang['NoFTP_config'] = "L'intentu de subir por ftp l'archivu de configuraci�n fallara. Por favor desc�rgue l'archivu de configuraci�n y s�balo por FTP en forma manual.";

$lang['Install'] = "Instalar";
$lang['Upgrade'] = "Autualizar";


$lang['Install_Method'] = "Elixa'l so m�todu d'Instalaci�n";

$lang['Install_No_Ext'] = "La configuraci�n de PHP nel so servior nun soporta el tipu de base datos selecionau";

$lang['Install_No_PCRE'] = "phpBB2 requier el m�dulu d'expresiones regulares compatible con Perl pa php, que nun figura comu soportau ens su configuraci�n de php!";

//
// FIIIIIIIIIIIIIIIIIIN!!!!
// -------------------------------------------------

?>