<?php
/***************************************************************************
 *                            lang_admin.php [Argentinean Spanish]
 *                              -------------------
 *     begin                : Wed Jul 24 2002
 *     copyright            : Angel Olivera
 *     e-mail               : aolivera@softhome.net
 *     location             : Mendoza, Argentina
 *
 *
 *     modified from Spanish language by:
 *
 *                          Daniel Gonz�lez Cuellar (webmaster@ba-k.com)
 *   			            Mariano Martene (correo@webfactory.com)
 *                          Patricio Mar�n (pmarin@hotmail.com)
 *
 *     $Id: lang_admin.php,v 1.1.2.1 2002/09/27 12:42:17 psotfx Exp $
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


// Gracias a los traductores al idioma Espa�ol, �ste es un archivo modificado para
// adecuar el lenguaje al Espa�ol utilizado en la Rep�blica Argentina.
// Cre� conveniente crear el lenguaje ya que phpBB es muy utilizado en mi pa�s.
//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = "Administraci�n General";
$lang['Users'] = "Administraci�n de los Usuarios";
$lang['Groups'] = "Administraci�n de los Grupos";
$lang['Forums'] = "Administraci�n de los Foros";
$lang['Styles'] = "Administraci�n de los Estilos";

$lang['Configuration'] = "Configuraci�n";
$lang['Permissions'] = "Permisos";
$lang['Manage'] = "Management";
$lang['Disallow'] = "Deshabilitar nombres de usuario";
$lang['Prune'] = "Purgar";
$lang['Mass_Email'] = "Correo Masivo";
$lang['Ranks'] = "Rangos";
$lang['Smilies'] = "Emoticons";
$lang['Ban_Management'] = "Control de Exclusion";
$lang['Word_Censor'] = "Palabras Censuradas";
$lang['Export'] = "Exportar";
$lang['Create_new'] = "Crear";
$lang['Add_new'] = "Agregar";
$lang['Backup_DB'] = "Backup de la Base de Datos";
$lang['Restore_DB'] = "Restaurar la Base de Datos";


//
// Index
//
$lang['Admin'] = "Administraci�n";
$lang['Not_admin'] = "No est�s autorizado para administrar este Foro";
$lang['Welcome_phpBB'] = "Bienvenido a phpBB";
$lang['Admin_intro'] = "Gracias por elegir phpBB como tu soluci�n para tu foro. Esta pantalla te dar� una s�ntesis de las principales estad�sticas de tu foro. Pod�s volver a esta p�gina clickeando en el link de <u>�ndice del Administrador</u> en el panel de la izquierda. Para regresar al �ndice de tu foro, clicke� el logo de phpBB tambi�n ubicado en el panel izquierdo. Los otros links ubicados a la izquierda de esta pantalla te permitir�n controlar todos los aspectos de este foro, cada pantalla tendr� instrucciones sobre c�mo utilizar las herramientas.";
$lang['Main_index'] = "�ndice del Foro";
$lang['Forum_stats'] = "Estad�sticas del Foro";
$lang['Admin_Index'] = "�ndice del Administrador";
$lang['Preview_forum'] = "Vista previa del Foro";

$lang['Click_return_admin_index'] = "click %sac�%s para volver al �ndice del Administrador";

$lang['Statistic'] = "Estad�sticas";
$lang['Value'] = "Valor";
$lang['Number_posts'] = "Cantidad de env�os";
$lang['Posts_per_day'] = "Env�os por d�a";
$lang['Number_topics'] = "Cantidad de topics";
$lang['Topics_per_day'] = "Topics por d�a";
$lang['Number_users'] = "Cantidad de usuarios";
$lang['Users_per_day'] = "Usuarios por d�a";
$lang['Board_started'] = "Fecha de inicio del Foro";
$lang['Avatar_dir_size'] = "Tama�o del directorio de Im�genes";
$lang['Database_size'] = "Tama�o de la Base de Datos";
$lang['Gzip_compression'] ="Tipo de Compresi�n Gzip";
$lang['Not_available'] = "No est� disponible";

$lang['ON'] = "ON"; // This is for GZip compression
$lang['OFF'] = "OFF"; 


//
// DB Utils
//
$lang['Database_Utilities'] = "Utilitarios de la Base de Datos";

$lang['Restore'] = "Restaurar";
$lang['Backup'] = "Backup";
$lang['Restore_explain'] = "Esto restaurar� todas las tablas de phpBB desde un archivo previamente guardado. Si tu servidor lo soporta, pod�s subir un archivo de texto comprimido mediante gzip y �ste ser� autom�ticamente descomprimido. <b>ATENCION</b> Esto sobre-escribir� la informaci�n existente. La restauraci�n puede durar unos minutos, por favor qued�te en esta p�gina hasta que el proceso se haya completado.";
$lang['Backup_explain'] = "Desde aqu� pod�s hacer una copia de seguridad (backup) de toda la informaci�n relacionada con phpBB. Si ten�s tablas adicionales en la misma Base de Datos de las que quisieras realizar un backup ingres� sus nombres separados por comas en el campo de Tablas Adicionales. Si tu servidor lo soporta pod�s utilizar gzip para comprimir el archivo y reducir su tama�o antes de descargarlo.";

$lang['Backup_options'] = "Opciones del Backup";
$lang['Start_backup'] = "Comenzar el Backup";
$lang['Full_backup'] = "Backup completo";
$lang['Structure_backup'] = "S�lo la Estructura";
$lang['Data_backup'] = "S�lo los Datos";
$lang['Additional_tables'] = "Tablas adicionales";
$lang['Gzip_compress'] = "Compresi�n en un archivo Gzip";
$lang['Select_file'] = "Seleccionar un archivo";
$lang['Start_Restore'] = "Comenzar la Restauraci�n";

$lang['Restore_success'] = "La Base de Datos ha sido Restaurada.<br /><br />Tu Foro deber�a volver a la normalidad una vez realizado el proceso.";
$lang['Backup_download'] = "Por favor esper� un momento hasta que empiece la descarga";
$lang['Backups_not_supported'] = "La opcion de backup de tu Base de Datos no est� soportada por tu sistema";

$lang['Restore_Error_uploading'] = "Error subiendo el archivo backup";
$lang['Restore_Error_filename'] = "Error en el nombre de archivo, por favor intent�lo con un archivo diferente";
$lang['Restore_Error_decompress'] = "No se puede descomprimir un archivo gzip, sub�lo en una version de texto";
$lang['Restore_Error_no_file'] = "Ning�n archivo ha sido subido";


//
// Auth pages
//
$lang['Select_a_User'] = "Seleccionar un Usuario";
$lang['Select_a_Group'] = "Seleccionar un Grupo";
$lang['Select_a_Forum'] = "Seleccionar un Foro";
$lang['Auth_Control_User'] = "Control de Permisos a los Usuario"; 
$lang['Auth_Control_Group'] = "Control de Permisos a los Grupos"; 
$lang['Auth_Control_Forum'] = "Control de Permisos a los Foros"; 
$lang['Look_up_User'] = "Observar un Usuario";
$lang['Look_up_Group'] = "Observar un Grupo"; 
$lang['Look_up_Forum'] = "Observar un Foro"; 

$lang['Group_auth_explain'] = "Desde ac� pod�s cambiar los permisos y el estado del moderador asignado a cada grupo de usuarios. Acord�te que cambiando los permisos del Grupo, los permisos individuales cambiar�n una vez que la persona ingrese al foro. Ser�s advertido en este caso.";
$lang['User_auth_explain'] = "Desde ac� pod�s cambiar los permisos y estado del moderador asignado a cada usuario. Ten� presente que cambiando los permisos de un usuario los permisos del grupo permanecer�n sin cambiar hasta que el usuario entre a los foros. Ser�s advertido en este caso.";
$lang['Forum_auth_explain'] = "Desde ac� pod�s cambiar los niveles de autorizaci�n de cada foro. Para realizar esto ten�s dos modos; uno simple y otro avanzado. Este �ltimo te brindar� mayor control para la operaci�n y el funcionamiento de cada foro. Ten� en cuenta que al cambiar los niveles de cada foro pod�s afectar el funcionamiento de cada usuario seg�n el foro y los permisos que tenga el usuario.";

$lang['Simple_mode'] = "Modalidad Simple";
$lang['Advanced_mode'] = "Modalidad Avanzada";
$lang['Moderator_status'] = "Estado del Moderador";

$lang['Allowed_Access'] = "Acseso Permitido";
$lang['Disallowed_Access'] = "Acseso no Permitido";
$lang['Is_Moderator'] = "con Moderador";
$lang['Not_Moderator'] = "sin Moderador";

$lang['Conflict_warning'] = "Advertencia de Conflicto en Autorizaci�n";
$lang['Conflict_access_userauth'] = "Este usuario todav�a tiene acceso a este foro debido al Grupo al cual pertenece. Ten�s que cambiar los permisos del grupo o borrar al usuario del Grupo para preveer que el usuario no tenga acceso a este foro. Los derechos del Grupo y el Usuario se explican abajo.";
$lang['Conflict_mod_userauth'] = "Este usuario todav�a tiene derechos de Moderador a trav�s de un Grupo al cual pertence. Ten�s que cambiar los permisos del grupo o borrar al usuario de dicho Grupo para estar seguro que este usuario no tenga acceso al foro con permisos de Moderar. Los derechos se explican abajo.";

$lang['Conflict_access_groupauth'] = "El siguiente usuario(s) todav�a tiene(n) acceso a este foro debido a los permisos que tiene(n) como Usuario. Para que no tenga(n) acceso a este foro ten�s que cambiar sus permisos. Los derechos de Usuarios se explican abajo.";
$lang['Conflict_mod_groupauth'] = "El siguiente usuario(s) todav�a tiene derechos de Moderador en este foro. Para que no tenga(n) acceso a este foro ten�s que cambiar sus permisos de usuario. Los derechos de Usuarios se explican abajo.";

$lang['Public'] = "P�blico";
$lang['Private'] = "Privado";
$lang['Registered'] = "Registrado";
$lang['Administrators'] = "Administrador";
$lang['Hidden'] = "Oculto";

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = "TODOS";
$lang['Forum_REG'] = "REG";
$lang['Forum_PRIVATE'] = "PRIVADOS";
$lang['Forum_MOD'] = "MOD";
$lang['Forum_ADMIN'] = "ADMIN";

$lang['View'] = "Ver";
$lang['Read'] = "Leer";
$lang['Post'] = "Envio";
$lang['Reply'] = "Respuesta";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Borrar";
$lang['Sticky'] = "PostIt";
$lang['Announce'] = "Anuncio";
$lang['Vote'] = "Votar";
$lang['Pollcreate'] = "Crear una encuesta";

$lang['Permissions'] = "Permisos";
$lang['Simple_Permission'] = "Permiso Simple";

$lang['User_Level'] = "Nivel de Usuario";
$lang['Auth_User'] = "Usuario";
$lang['Auth_Admin'] = "Administrador";
$lang['Group_memberships'] = "Grupo de Usuarios";
$lang['Usergroup_members'] = "Este Grupo contiene a los siguientes Usuarios";

$lang['Forum_auth_updated'] = "Permiso del Foro actualizado";
$lang['User_auth_updated'] = "Permiso del usuario actualizado";
$lang['Group_auth_updated'] = "Permiso del Grupo actualizado";

$lang['Auth_updated'] = "los permisos han sido cambiados";
$lang['Click_return_userauth'] = "Click %sac�%s para vovler a ver los Permisos de los Usuarios";
$lang['Click_return_groupauth'] = "Click %sac�%s para vovler a ver los Permisos del Grupo";
$lang['Click_return_forumauth'] = "Click %sac�%s para vovler a ver los Permisos del Foro";


//
// Banning
//
$lang['Ban_control'] = "Control de Exclusi�n";
$lang['Ban_explain'] = "Desde ac� pod�s banear a un usuario. Pod�s banear a los usuarios por su nombre, por su direcci�n IP, o por su Hostname. Este m�todo previene que un usuario tenga acceso a la p�gina principal del foro. Para prevenir que el Usuario se registre con una nueva cuenta tambi�n pod�s bannear su direcci�n de e-mail. Ten� en cuenta que baneando una direcci�n de email no evitar�s que el usuario pueda ingresar al foro ni que publique mensajes. Para hacer esto eso ten�s que usar uno de los dos m�todos explicados anteriormente.";
$lang['Ban_explain_warn'] = "Ten� en cuenta que colocando un RANGO de direcciones IP. bane�s a todas las direcciones que se encuentran dentro del Rango de la lista de bans.  Si realmente ten�s que usar un rango intent� usar uno peque�o para as� no banear a otros usuarios.";

$lang['Select_username'] = "Selecion� un Nombre de Usuario";
$lang['Select_ip'] = "Seleccion� una direcci�n IP";
$lang['Select_email'] = "Seleccion� una direcci�n de E-mail";

$lang['Ban_username'] = "Banear a uno o varios Usuarios";


$lang['Ban_IP'] = "Banear una o varias direcciones IP o HOSTNAMES";
$lang['IP_hostname'] = "Direcciones IP o HOSTNAMES";
$lang['Ban_IP_explain'] = "Para especificar diferentes IPs o Nombres de Dominio, separ�los con comas. Para especificar un rango de direcciones IP separ� el comienzo y el final utilizando un gui�n (-), para especificar un comod�n utiliz� *";

$lang['Ban_email'] = "Banear una o varias direcciones de email";
$lang['Ban_email_explain'] = "Para especificar m�s de un email, coloc�los separados por comas. Para especificar un comod�n de usarios us� *, por ejemplo *@hotmail.com";

$lang['Unban_username'] = "Quitar ban de uno o varios Usuarios";
$lang['Unban_username_explain'] = "Pod�s quitar el ban de m�ltiples Usuarios usando la correcta combinaci�n de mouse y teclado de su computadora y navegador";

$lang['Unban_IP'] = "Quitar ban de una o varias Direcciones IP";
$lang['Unban_IP_explain'] = "Pod�s quitar el ban a m�ltiples direcciones IP usando la correcta combinaci�n de mouse y teclado de su computadora y navegador";

$lang['Unban_email'] = "Quitar ban de una o varias direcciones de email";
$lang['Unban_email_explain'] = "Pod�s quitar el ban de m�ltiples direcciones de email usando la correcta combinaci�n del mouse y teclado de su computadora y navegador";

$lang['No_banned_users'] = "No hay Usuarios baneados";
$lang['No_banned_ip'] = "No hay direcciones de IP baneadas";
$lang['No_banned_email'] = "No hay direcciones de email baneadas";

$lang['Ban_update_sucessful'] = "La lista de BAN ha sido actualizada correctamente";
$lang['Click_return_banadmin'] = "Click %sac�%s para volver al Panel de Control de BANS";


//
// Configuration
//
$lang['General_Config'] = "Configuraci�n General";
$lang['Config_explain'] = "El siguiente formulario, te permite cambiar las opciones de tu foro. Para la configuraci�n de Usuarios y Foros us� los links de la izquierda.";

$lang['Click_return_config'] = "Click %sac�%s para volver a la Configuraci�n General";

$lang['General_settings'] = "Configuraci�n General del Foro";
$lang['Server_name'] = "Nombre de Dominio";
$lang['Server_name_explain'] = "El nombre de dominio en el que corre este Foro";
$lang['Script_path'] = "Path del Script";
$lang['Script_path_explain'] = "La ruta en donde phpBB2 est� ubicado, relativo al nombre de dominio";
$lang['Server_port'] = "Puerto del Servidor";
$lang['Server_port_explain'] = "El puerto en el que corre el servidor, generalmente 80. S�lo cambiar si difiere de este valor.";
$lang['Site_name'] = "Nombre del Sitio";
$lang['Site_desc'] = "Descripci�n del Sito";
$lang['Board_disable'] = "Desactivar Foro";
$lang['Board_disable_explain'] = "Esto har� que el los Usuarios no tengan acceso al Foro. No te desloguees mientras desactiva el Foro, ya que no podr�s volver a loguearte";
$lang['Acct_activation'] = "Activar cuenta";
$lang['Acc_None'] = "Ninguna"; // These three entries are the type of activation
$lang['Acc_User'] = "Usuario";
$lang['Acc_Admin'] = "Administrador";

$lang['Abilities_settings'] = "Configuraci�n B�sica de Usuario y del Foro";
$lang['Max_poll_options'] = "N�mero m�ximo de �tems en Encuentas";
$lang['Flood_Interval'] = "Intervalo de Flood";
$lang['Flood_Interval_explain'] = "Cantidad de segundos que el usuario debe esperar para publicar topicos";
$lang['Board_email_form'] = "E-mail de Usuarios a trav�s del Foro";
$lang['Board_email_form_explain'] = "Los usuarios se env�an emails mediante el Foro";
$lang['Topics_per_page'] = "Topics por Pagina";
$lang['Posts_per_page'] = "Respuestas por P�gina";
$lang['Hot_threshold'] = "Cantidad de respuestas para ser considerado Popular";
$lang['Default_style'] = "Estilo por defecto";
$lang['Override_style'] = "Ignorar el estilo del Usuario";
$lang['Override_style_explain'] = "Se utilizar� el estilo seleccionado por defecto sin importar la elecci�n del usuario";
$lang['Default_language'] = "Lenguaje por Defecto";
$lang['Date_format'] = "Formato de la Fecha";
$lang['System_timezone'] = "Zona Horaria";
$lang['Enable_gzip'] = "Activar la Compresion GZip";
$lang['Enable_prune'] = "Habilitar Pruning en el Foro";
$lang['Allow_HTML'] = "Permitir HTML";
$lang['Allow_BBCode'] = "Permitir BBCode";
$lang['Allowed_tags'] = "Permitir HTML tags";
$lang['Allowed_tags_explain'] = "Separare tags con comas";
$lang['Allow_smilies'] = "Permitir Emoticons";
$lang['Smilies_path'] = "Almacenaje de la ruta de los Emoticons";
$lang['Smilies_path_explain'] = "Ruta desde el directorio phpBB , ejemplo images/smilies";
$lang['Allow_sig'] = "Permitir Firmas";
$lang['Max_sig_length'] = "M�xima longitud de la Firma";
$lang['Max_sig_length_explain'] = "M�xima cantidad de caracteres de la Firma";
$lang['Allow_name_change'] = "Permitir cambio de Nombre de Usuario";

$lang['Avatar_settings'] = "Configuraci�n de los Avatars";
$lang['Allow_local'] = "Habilitar galer�as de Avatars";
$lang['Allow_remote'] = "Habilitar Avatars Remotos";
$lang['Allow_remote_explain'] = "Permitir mostrar Avatars guardados en otros sitios web";
$lang['Allow_upload'] = "Habilitar upload de Avatars";
$lang['Max_filesize'] = "Tama�o m�ximo para las im�genes";
$lang['Max_filesize_explain'] = "Limita la cantidad de bytes que puede tener un Avatar";
$lang['Max_avatar_size'] = "M�ximo Tama�o del Avatar";
$lang['Max_avatar_size_explain'] = "(Altura x Ancho en p�xeles)";
$lang['Avatar_storage_path'] = "Ruta del Avatar";
$lang['Avatar_storage_path_explain'] = "Ruta dentro de phpBB donde se encuentran los Avatars, ejemplo images/avatars";
$lang['Avatar_gallery_path'] = "Ruta de la Galer�a de Avatars";
$lang['Avatar_gallery_path_explain'] = "Ruta dentro de phpBB de la galer�a, e.g. images/avatars/gallery";

$lang['COPPA_settings'] = "Configuraciones COPPA";
$lang['COPPA_fax'] = "N�mero de Fax COPPA";
$lang['COPPA_mail'] = "Direcci�n de Correo COPPA";
$lang['COPPA_mail_explain'] = "Esta es la direcci�n de correo donde los padres deben enviar el formulario COPPA";

$lang['Email_settings'] = "Configuraci�n del Email";
$lang['Admin_email'] = "Direcci�n de email del Administrador";
$lang['Email_sig'] = "Firma";
$lang['Email_sig_explain'] = "Este texto se a�adir� al final de cada email";
$lang['Use_SMTP'] = "Usar servidor SMTP para Email";
$lang['Use_SMTP_explain'] = "Dec� si pod�s y/o ten�s que enviar los e-mails por un servidor SMTP";
$lang['SMTP_server'] = "Direcci�n SMTP del Servidor";
$lang['SMTP_username'] = "Nombre de usuario del SMTP";
$lang['SMTP_username_explain'] = "Ingres� un nombre de usuario solamente si su servidor SMTP lo requiere";
$lang['SMTP_password'] = "Contrase�a del SMTP";
$lang['SMTP_password_explain'] = "Ingres� una contrase�a solamente si su servidor SMTP lo requiere";

$lang['Disable_privmsg'] = "Mensaje Privado";
$lang['Inbox_limits'] = "M�xima cantidad de mensajes en la Bandeja de Entrada";
$lang['Sentbox_limits'] = "M�xima cantidad de mensajes en la Bandeja de Salida";
$lang['Savebox_limits'] = "M�xima cantidad de mensajes en La Carpeta para Guardar";

$lang['Cookie_settings'] = "Configuraci�n de las Cookies"; 
$lang['Cookie_settings_explain'] = "Esto controla como se env�an las cookies al Navegador, en la mayor�a de los casos la configuraci�n preestablecida sera m�s que suficiente. Si necesit�s cambiar esto ten� cuidado, ya que en caso de configurarlo mal podr�as hacer que tus Usuarios no puedan Ingresar al Foro";
$lang['Cookie_domain'] = "Dominio de la Cookie";
$lang['Cookie_name'] = "Nombre de la Cookie";
$lang['Cookie_path'] = "Ruta de la Cookie";
$lang['Cookie_secure'] = "Cookie segura [ https ]";
$lang['Cookie_secure_explain'] = "Si tu servidor est� funcionando v�a SSL marc� esta opci�n, de otra manera dej�lo deshabilitado";
$lang['Session_length'] = "Duraci�n de la sesi�n [ segundos ]";


//
// Forum Management
//
$lang['Forum_admin'] = "Administraci�n del Foro";
$lang['Forum_admin_explain'] = "Desde este panel pod�s a�adir, borrar, editar, y re-ordenar categor�as y Foros";
$lang['Edit_forum'] = "Editar el Foro";
$lang['Create_forum'] = "Crear un nuevo Foro";
$lang['Create_category'] = "Crear una nueva Categor�a";
$lang['Remove'] = "Quitar";
$lang['Action'] = "Acci�n";
$lang['Update_order'] = "Actualizar Orden";
$lang['Config_updated'] = "Configuraci�n del Foro actualizada satisfactoriamente";
$lang['Edit'] = "Editar";
$lang['Delete'] = "Borrar";
$lang['Move_up'] = "Hacia arriba";
$lang['Move_down'] = "Hacia abajo";
$lang['Resync'] = "sincronizar";
$lang['No_mode'] = "Ning�n modo ha sido seleccionado";
$lang['Forum_edit_delete_explain'] = "El siguiente formulario te permite personalizar las opciones del Foro. Para la configuraci�n de usuarios y Foros us� los links de la izquierda.";

$lang['Move_contents'] = "Mover todos los contenidos";
$lang['Forum_delete'] = "Borrar el Foro";
$lang['Forum_delete_explain'] = "El siguiente formulario te permite Borrar alg�n foro (o categor�a) y decir d�nde quer�s colocar todos los Topics y Categor�as.";

$lang['Forum_settings'] = "Configuraci�n General del Foro";
$lang['Forum_name'] = "Nombre del Foro";
$lang['Forum_desc'] = "Descripci�n";
$lang['Forum_status'] = "Estado del Foro";
$lang['Forum_pruning'] = "Auto-pruning";

$lang['prune_freq'] = 'Chequear topics y edad';//Ver Pruning!
$lang['prune_days'] = "Remover Topics que no tienen respuesta";
$lang['Set_prune_data'] = "Elegiste la opci�n de Auto-pruning para este foro pero no has seleccionado la frecuencia o cantidad de d�as para el PRUNE. Volv� y efectu� los cambios";

$lang['Move_and_Delete'] = "Mover y Borrar";

$lang['Delete_all_posts'] = "Borrar todos los Temas";
$lang['Nowhere_to_move'] = "Nowhere to move too";

$lang['Edit_Category'] = "Editar Categor�a";
$lang['Edit_Category_explain'] = "Us� este formulario para Editar categor�as";

$lang['Forums_updated'] = "La informaci�n del Foro y sus categor�as han sido actualizadas satisfactoriamente";

$lang['Must_delete_forums'] = "Necesit�s Borrar todos los foros antes de borrar una Categor�a";

$lang['Click_return_forumadmin'] = "Click %sac�%s para volver a la Administraci�n del Foro";


//
// Smiley Management
//
$lang['smiley_title'] = "Utilitario para la edici�n de Smilies";
$lang['smile_desc'] = "Desde esta p�gina usted pod�s a�adir, quitar o editar alg�n emoticon para que los Usuarios utilicen en el foro y en los mensajes Privados";

$lang['smiley_config'] = "Configuraci�n de Smiley";
$lang['smiley_code'] = "C�digo de Smiley";
$lang['smiley_url'] = "Archivo de Imagen del Smiley";
$lang['smiley_emot'] = "Smiley Emotion";
$lang['smile_add'] = "A�adir un nuevo Smiley";
$lang['Smile'] = "Smiley";
$lang['Emotion'] = "Emoci�n";

$lang['Select_pak'] = "Seleccione el archivo .pak";
$lang['replace_existing'] = "Reemplazar Smileys Existentes";
$lang['keep_existing'] = "Mantener Smileys Existentes";
$lang['smiley_import_inst'] = "Ten�s que descomprimir el paquete de Smileys y subir todos los archivos en el directorio de Smileys para as� lograr su correcta instalaci�n. Luego seleccion� la informaci�n correcta desde este formulario para as� poder importar los Smileys";
$lang['smiley_import'] = "Importar paquete de Smileys";
$lang['choose_smile_pak'] = "Escoger archivo de paquete (.pak)";
$lang['import'] = "Importar Smileys";
$lang['smile_conflicts'] = "Qu� se deber�a realizar en caso de conflicto";
$lang['del_existing_smileys'] = "Borrar los smileys existentes antes de importarlos";
$lang['import_smile_pack'] = "Importar Paquete de Smileys";
$lang['export_smile_pack'] = "Crear un paquete de Smileys";
$lang['export_smiles'] = "Para crear un paquete de Smilets desde sus smileys instalados, hac� click %sac�%s para bajar el archivo smiles.pak. Renombr� este archivo de forma apropiada pero asegur�te de mantener la extension .pak. Luego cre� un archivo zip que contenga todos los smileys m�s el archivo .pak.";

$lang['smiley_add_success'] = "Los Smileys han sido a�adidos satisfactoriamente";
$lang['smiley_edit_success'] = "Los Smileys han sido actualizados satisfactoriamente ";
$lang['smiley_import_success'] = "El paquete de Smileys ha sido importado correctamente.";
$lang['smiley_del_success'] = "Los Smileys han sido removidos satisfactoriamente.";
$lang['Click_return_smileadmin'] = "Click %sac�%s para volver al Panel de Smileys";


//
// User Management
//
$lang['User_admin'] = "Administraci�n de Usuarios";
$lang['User_admin_explain'] = "Desde ac� pod�s cambiar la informaci�n del usuario. Para modificar los permisos de un Usuario us� el Sistema de Permisos de usuarios y Grupos.";

$lang['Look_up_user'] = "Observar Usuario";

$lang['Admin_user_fail'] = "No se ha logrado actualizar el perfil del Usuario";
$lang['Admin_user_updated'] = "El perfil del Usuario ha sido actualizado satisfactoriamente";
$lang['Click_return_useradmin'] = "Click %sac�%s para volver al Panel de Administraci�n de Usuarios";

$lang['User_delete'] = "Borrar Usuario";
$lang['User_delete_explain'] = "Click ac� para borrar este Usuario. Ten� en cuenta que no vas a poder restaurarlo.";
$lang['User_deleted'] = "El Usuario ha sido borrado satisfactoriamente.";

$lang['User_status'] = "Usuario Activo";
$lang['User_allowpm'] = "Pod�s enviar mensajes privados";
$lang['User_allowavatar'] = "Pod�s mostrar tu Avatar";

$lang['Admin_avatar_explain'] = "Desde ac� pod�s ver y borrar el Avatar del Usuario";

$lang['User_special'] = "Campos especiales para Administradores";
$lang['User_special_explain'] = "Estos campos no est�n disponibles para que los Usuarios lo modifiquen. Desde ac� pod�s configurar el status y otras opciones que los Usuarios no pueden modificar.";


//
// Group Management
//
$lang['Group_administration'] = "Administraci�n de Grupos";
$lang['Group_admin_explain'] = "Desde este panel pod�s modificar los Grupos: borrar, crear y editar los Grupos existentes. Tambi�n pod�s elegir los Moderadores y cambiar el nombre del Grupo y su descripci�n";
$lang['Error_updating_groups'] = "Ha ocurrido un error actualizando el Grupo";
$lang['Updated_group'] = "El Grupo ha sido actualizado correctamente";
$lang['Added_new_group'] = "El Nuevo Grupo ha sido creado";
$lang['Deleted_group'] = "El Grupo ha sido borrado";
$lang['New_group'] = "Crear Nuevo Grupo";
$lang['Edit_group'] = "Editar Grupo";
$lang['group_name'] = "Nombre del Grupo";
$lang['group_description'] = "Descripci�n del Grupo";
$lang['group_moderator'] = "Moderador del Grupo";
$lang['group_status'] = "Status del Grupo";
$lang['group_open'] = "Grupo Abierto";
$lang['group_closed'] = "Grupo Cerrado";
$lang['group_hidden'] = "Grupo Oculto";
$lang['group_delete'] = "Borrar Grupo";
$lang['group_delete_check'] = "Borrar este Grupo";
$lang['submit_group_changes'] = "Aceptar Cambios";
$lang['reset_group_changes'] = "Anular Cambios";
$lang['No_group_name'] = "Ten�s que especificar un Nombre para este Grupo";
$lang['No_group_moderator'] = "Ten�s que especificar un Moderador para este Grupo";
$lang['No_group_mode'] = "Ten�s que especificar el modo de este Grupo, Abrierto o Cerrado";
$lang['delete_group_moderator'] = "�Borrar el antiguo moderador del Grupo?";
$lang['delete_moderator_explain'] = "Si est�s cambiando el moderador del Grupo, marc� esta casilla para eliminar al antiguo Moderador del Grupo. Si no, el Usuario se convertir� en un miembro regular.";
$lang['Click_return_groupsadmin'] = "Click %sac�%s para volver al Panel de Administraci�n de Grupos.";
$lang['Select_group'] = "Seleccion� un Grupo";
$lang['Look_up_group'] = "Observar un Grupo";
$lang['No_group_action'] = 'No se especific� una acci�n'; 


//
// Prune Administration
//
$lang['Forum_Prune'] = "Prune de Foros";
$lang['Forum_Prune_explain'] = "Esto borrar� todos los topics en los que no se hayan publicado nuevos men	sajes en los d�as que usted seleccion�. Si no ingres�s un n�mero entonces todos los topics ser�n borrados. No se borrar�n los topics en los que hay encuestas que est�n corriendo ni anuncios. Tendr�s que eliminar estos topics en forma manual.";
$lang['Do_Prune'] = "Realizar el Prune";
$lang['All_Forums'] = "Todos los Foros";
$lang['Prune_topics_not_posted'] = "Borrar topics sin respuestas de una antig�edad de estos d�as";
$lang['Topics_pruned'] = "topics borrados";
$lang['Posts_pruned'] = "Mensajes borrados";
$lang['Prune_success'] = "El Pruning de los foros fue exitoso";


//
// Word censor
//
$lang['Words_title'] = "Control de Palabras Censuradas";
$lang['Words_explain'] = "Desde ac� pod�s agregar, editar, y quitar palabras que autom�ticamente ser�n censuradas de tus foros. Estas palabras no podr�n ser elegidas como nombres de usuario. Los Asteriscos (*) son aceptados en los campos de las palabras, ejemplo *prueba* , prueba* (acaparar�a pruebalo), *test (acaparar�a enprueba).";
$lang['Word'] = "Palabra";
$lang['Edit_word_censor'] = "Editar el Censor de Palabras";
$lang['Replacement'] = "Reemplazar";
$lang['Add_new_word'] = "Agregar nueva palabra";
$lang['Update_word'] = "Actualizar censor de palabras";

$lang['Must_enter_word'] = "Ten�s que colocar una palabra y su otra palabra para el reemplazo";
$lang['No_word_selected'] = "No se ha seleccionado una palabra para el reemplazo";

$lang['Word_updated'] = "Se han realizado los cambios satisfactoriamente";
$lang['Word_added'] = "La nueva palabra ha sido a�adida con �xito";
$lang['Word_removed'] = "La palabra ha sido removida del Censurador de Palabras";

$lang['Click_return_wordadmin'] = "Click %sac�%s para volver al Administrador de Palabras Censuradas";


//
// Mass Email
//
$lang['Mass_email_explain'] = "Desde ac� pod�s enviar mensajes de e-mail a todos tus Usuarios y Grupos. Al hacer esto, un e-mail ser� enviado desde el email administrativo inidicado previamente. Si envi�s este e-mail a un Grupo numeroso, s� paciente y esper� a que termine de cargar la p�gina. Es normal que tarde unos cuantos minutos, ser�s notificado una vez finalizado el env�o.";
$lang['Compose'] = "Escribir"; 

$lang['Recipients'] = "E-mails"; 
$lang['All_users'] = "A todos los Usuarios";

$lang['Email_successfull'] = "Su e-mail ha sido enviado";
$lang['Click_return_massemail'] = "Click %sac�%s para volver al Panel para Enviar e-mails Masivos";


//
// Ranks admin
//
$lang['Ranks_title'] = "Administraci�n de Rangos";
$lang['Ranks_explain'] = "Usando este formulario pod�s a�adir, editar, ver y borrar rangos. Tambi�n pod�s crear rangos";

$lang['Add_new_rank'] = "A�adir Rango";

$lang['Rank_title'] = "T�tulo del Rango";
$lang['Rank_special'] = "Seleccionar como Rangp Especial";
$lang['Rank_minimum'] = "M�nima cantidad de Mensajes";
$lang['Rank_maximum'] = "M�xima cantidad de Mensajes";
$lang['Rank_image'] = "Im�gen del rango (tenga en cuenta la ruta del foro phpBB2)";
$lang['Rank_image_explain'] = "Us� esto para definir una peque�a imagen para este rango";

$lang['Must_select_rank'] = "Ten�s que seleccionar un Rango";
$lang['No_assigned_rank'] = "No se ha seleccionado un Rango";

$lang['Rank_updated'] = "El Rango ha sido actualizado";
$lang['Rank_added'] = "El nuevo Rango se ha a�adido";
$lang['Rank_removed'] = "El Rango ha sido borrado";

$lang['Click_return_rankadmin'] = "Click %sac�%s para volver al Panel de Adminstraci�n de Rangos";


//
// Disallow Username Admin
//
$lang['Disallow_control'] = "Control de Admisi�n de Usuario";
$lang['Disallow_explain'] = "Desde ac� pod�s controlar los nombres de usuario que no quer�s que sean utilizados. Para lograr esto ten�s que usar comodines (*). Acord�te que no pod�s prohibir nombres de usuario que ya est�n siendo utilizados. Antes de prohibir dichos nombres ten�s que borrar a los usuarios que los usen.";

$lang['Delete_disallow'] = "Borrar";
$lang['Delete_disallow_title'] = "Borrar un nombre de usuario no permitido";
$lang['Delete_disallow_explain'] = "Pod�s eliminar nombres de usuario no permitidos seleccionando el nombre de usuario de la lista y clickeando en Aceptar";

$lang['Add_disallow'] = "Agregar";
$lang['Add_disallow_title'] = "Agregar un nombre de usuario no permitido";
$lang['Add_disallow_explain'] = "Pod�s no permitir un nombre de usuario utilizando m�scaras con asteriscos(*)";

$lang['No_disallowed'] = "Nombres de usuarios no permitidos";

$lang['Disallowed_deleted'] = "El nombre de usuario no permitido ha sido borrado";
$lang['Disallow_successful'] = "El nombre de usuario no permitido ha sido agregado";
$lang['Disallowed_already'] = "El nombre de usuario no permitido que has seleccionado no puede ser agregado debido a que ya existe en la lista, o existe en la Lista de Palabras Censuradas, o bien ya se encuentra en la lista de usuarios no permitidos";

$lang['Click_return_disallowadmin'] = "Click %sac�%s para volver al Control de Admisi�n de Usuario";


//
// Styles Admin
//
$lang['Styles_admin'] = "Administraci�n de Estilos";
$lang['Styles_explain'] = "Desde ac� pod�s f�cilmente a�adir, quitar y administrar los estilos (plantillas y temas) disponibles para tus usuarios";
$lang['Styles_addnew_explain'] = "La siguiente lista contiene todos los temas que est�n disponibles para las plantillas. Los items de la lista no han sido instalados en la base de los foros phpBB. Para hacer eso simplemente hac� click en el link que figura al lado de cada opci�n";

$lang['Select_template'] = "Seleccion� una Plantilla";

$lang['Style'] = "Estilo";
$lang['Template'] = "Plantilla";
$lang['Install'] = "Instalar";
$lang['Download'] = "Descargar";

$lang['Edit_theme'] = "Editar Tema";
$lang['Edit_theme_explain'] = "En el siguiente formulario pod�s editar la configuraci�n del tema seleccionado";

$lang['Create_theme'] = "Crear Tema";
$lang['Create_theme_explain'] = "Us� este formulario para crear un tema nuevo para la plantilla seleccionada. Cuando ingreses los colores (los cuales ten�s ingresar de forma hexadecimal) no debe incluir el # . Ejemplo: CCCCCC es v�lido, no asi lo seria colocar #CCCCCC";

$lang['Export_themes'] = "Exportar Tema";
$lang['Export_explain'] = "Desde este panel pod�s exportar el tema para la plantilla seleccionada. Seleccion� la plantilla de la lista debajo y el programa crear� el archivo de configuraci�n del tema y asi podr�s guardarlo. Si no se puede grabar el archivo te va a preguntar si quer�s bajarlo. Para que el programa pueda guardarlo ten�s que dar permiso de escritura a la carpeta de plantillas (template). Para m�s informaci�n consult� la guia del foro phpBB 2";

$lang['Theme_installed'] = "El tema seleccionado ha sido instalado correctamente";
$lang['Style_removed'] = "El estilo seleccionado ha sido quitado de la base de datos. Para removerlo completamente ten�s borrar el directorio apropiado del directorio de plantillas (template)";
$lang['Theme_info_saved'] = "La informaci�n para la plantilla seleccionada ha sido guardada. Ahora ten�s que devolver los permisos en theme_info.cgf y poner el directorio de plantillas (template) en modo de s�lo lectura";
$lang['Theme_updated'] = "El tema seleccionado ha sido actualizado. Ahora ten�s que exportar la configuraci�n del nuevo tema";
$lang['Theme_created'] = "Tema Creado. Ahora ten�s que exportar el tema en el archivo de configuraci�n de temas para asi lograr mantenerlo seguro";

$lang['Confirm_delete_style'] = "Est�s seguro querer borrar este estilo";

$lang['Download_theme_cfg'] = "No se ha podido exportar el archivo ya que no se ha podido escribir en el archivo. Presion� el bot�n debajo para descargar este archivo con su navegador. Una vez que lo hayas bajado pod�s moverlo al directorio de las plantillas (template).";
$lang['No_themes'] = "La plantilla que has seleccionado no tiene temas adjuntos. Para crear un nuevo tema presion� en Crear Nuevo Tema en la izquierda del panel";
$lang['No_template_dir'] = "No se ha podido abrir la carpeta de plantillas. Esto puede deberse a que est� con permisos sin lectura, o que �sta no exista.";
$lang['Cannot_remove_style'] = "No pod�s quitar el estilo seleccionado ya que es el que est� por defecto en el foro. Cambi� el que se utiliza por defecto e intent�lo nuevamente";
$lang['Style_exists'] = "El nombre de estilo seleccionado ya existe, volv� atr�s y seleccion� otro distinto";

$lang['Click_return_styleadmin'] = "Click %sac�%s para volver a la Administraci�n de Estilos";

$lang['Theme_settings'] = "Configuraci�n de Temas";
$lang['Theme_element'] = "Elementos de Temas";
$lang['Simple_name'] = "Nombre simple";
$lang['Value'] = "Valor";
$lang['Save_Settings'] = "Guardar Configuraci�n";

$lang['Stylesheet'] = "CSS Stylesheet";
$lang['Background_image'] = "Imagen de Fondo";
$lang['Background_color'] = "Color de Fondo";
$lang['Theme_name'] = "Nombre de Tema";
$lang['Link_color'] = "Color de Link";
$lang['Text_color'] = "Color de Texto";
$lang['VLink_color'] = "Color de Link Visitado";
$lang['ALink_color'] = "Color de Link Activo";
$lang['HLink_color'] = "Color de Link Hoover";
$lang['Tr_color1'] = "Tabla Fila Color 1";
$lang['Tr_color2'] = "Tabla Fila Color 2";
$lang['Tr_color3'] = "Tabla Fila Color 3";
$lang['Tr_class1'] = "Tabla Fila Clase 1";
$lang['Tr_class2'] = "Tabla Fila Clase 2";
$lang['Tr_class3'] = "Tabla Fila Clase 3";
$lang['Th_color1'] = "Tabla Encabezado Color 1";
$lang['Th_color2'] = "Tabla Encabezado Color 2";
$lang['Th_color3'] = "Tabla Encabezado Color 3";
$lang['Th_class1'] = "Tabla Encabezado Clase 1";
$lang['Th_class2'] = "Tabla Encabezado Clase 2";
$lang['Th_class3'] = "Tabla Encabezado Clase 3";
$lang['Td_color1'] = "Tabla Celda Color 1";
$lang['Td_color2'] = "Tabla Celda Color 2";
$lang['Td_color3'] = "Tabla Celda Color 3";
$lang['Td_class1'] = "Tabla Celda Clase 1";
$lang['Td_class2'] = "Tabla Celda Clase 2";
$lang['Td_class3'] = "Tabla Celda Clase 3";
$lang['fontface1'] = "Fuente 1";
$lang['fontface2'] = "Fuente 2";
$lang['fontface3'] = "Fuente 3";
$lang['fontsize1'] = "Fuente 1";
$lang['fontsize2'] = "Fuente 2";
$lang['fontsize3'] = "Fuente 3";
$lang['fontcolor1'] = "Fuente Color 1";
$lang['fontcolor2'] = "Fuente Color 2";
$lang['fontcolor3'] = "Fuente Color 3";
$lang['span_class1'] = "Espacio Clase 1";
$lang['span_class2'] = "Espacio Clase 2";
$lang['span_class3'] = "Espacio Clase 3";
$lang['img_poll_size'] = "Imagen de la Encuesta [px]";
$lang['img_pm_size'] = "Tama�o de Mensajes Privados [px]";


//
// Install Process
//
$lang['Welcome_install'] = "Bienvenidos a la Instalaci�n de los foros phpBB 2";
$lang['Initial_config'] = "Configuraci�n Basica";
$lang['DB_config'] = "Configuraci�n de la Base de Datos";
$lang['Admin_config'] = "Configuraci�n del Administrador";
$lang['continue_upgrade'] = "Una vez que hayas bajado el archivo de configuraci�n hac� click en \"Continuar Actualizaci�n\" para continuar con el proceso. Esper� a que se suba el archivo de configuraci�n hasta que el proceso de actualizaci�n finalice";
$lang['upgrade_submit'] = "Continuar Actualizaci�n";

$lang['Installer_Error'] = "Un error ha ocurrido durante la Instalaci�n";
$lang['Previous_Install'] = "No se ha detectado una Instalaci�n previa";
$lang['Install_db_error'] = "Un error ha ocurrido actualizando la Base de Datos";

$lang['Re_install'] = "Tu instalaci�n previa todav�a est� activa. <br /><br />Si quer�s reinstalar los foros phpBB 2 hac� click en S� en el bot�n debajo. Por favor ten� en cuenta que al realizar esto se destruir� la informaci�n existente, no se har�n copias de seguridad. El usuario administrador y la contrase�a que usabas anteriormente ser�n creados nuevamente. <br /><br />�Pens� cuidadosamente �ntes de presionar SI!";

$lang['Inst_Step_0'] = "Gracias por elegir phpBB 2. Para finalizar la instalaci�n por favor complet� los datos requeridos debajo. Ten� en cuenta que la Base de Datos destinada a los foros ya deber�a existir. Si est�s instalando en una Base de Datos que utiliza OBDC, por ejemplo MS Access primero deber�s crear un DNS y despu�s continuar.";

$lang['Start_Install'] = "Comenzar Instalaci�n";
$lang['Finish_Install'] = "Finalizar Inatalaci�n";

$lang['Default_lang'] = "Lenguaje por defecto";
$lang['DB_Host'] = "Nombre de Dominio de la Base de Datos / DSN";
$lang['DB_Name'] = "Nombre de su base de Datos";
$lang['DB_Username'] = "Nombre de usuario de la base de datos";
$lang['DB_Password'] = "Contrase�a de la base de datos";
$lang['Database'] = "Su Base de Datos";
$lang['Install_lang'] = "Elija el Lenguaje de Instalaci�n";
$lang['dbms'] = "Tipo de Base de Datos";
$lang['Table_Prefix'] = "Prefijo para tablas en la Base de datos";
$lang['Admin_Username'] = "Nombre de Usuario del Administrador";
$lang['Admin_Password'] = "Contrase�a del Administrador";
$lang['Admin_Password_confirm'] = "Contrase�a de acceso del Administrador [ Confirma ]";

$lang['Inst_Step_2'] = "Tu usuario administrador y contrase�a han sido creados. En este punto el proceso de Instalaci�n B�sica ha sido completado. Ahora ser�s enviado a una pantalla que te permite administrar la nueva instalaci�n. Asegur�te de verificar la Configuraci�n General y de haber realizado los cambios requeridos. Gracias por elegir phpBB 2";

$lang['Unwriteable_config'] = "Tu archivo de configuraci�n est� en un modo de no-escritura. Una copia del archivo de configuraci�n podr� ser bajado cuando hagas click el bot�n siguiente. Ten�s que subir este fichero en el mismo directorio donde se encuentre el foro phpBB 2. Una vez que esto se haya realizado ten�s que ingresar usando el usuario de administrador y contrase�a que elegiste en el formulario anterior y as� visitar el Control de Administraci�n para ver la configuraci�n general. Gracias por escoger phpBB 2";
$lang['Download_config'] = "Bajar Configuraci�n";

$lang['ftp_choose'] = "Escoger M�todo de Descarga";
$lang['ftp_option'] = "<br />Ya que las extensiones FTP est�n disponibles en esta versi�n de PHP pod�s elegir si quer�s, mediante FTP, colocar el archivo en su lugar autom�ticamente.";
$lang['ftp_instructs'] = "Has seleccionado subir autom�ticamente por FTP el archivo en la cuenta que contiene el phpBB 2. Ingres� la informaci�n solicitada para facilitar el proceso. Ten� en cuenta que la ruta FTP debe ser la ruta exacta al PHPBB 2 como si fueras a subir los archivos usando cualquier cliente de ftp.";
$lang['ftp_info'] = "Ingres� la Informaci�n de su FTP";
$lang['Attempt_ftp'] = "Intentar subir archivo mediante ftp en forma autom�tica";
$lang['Send_file'] = "Env�enme el archivo a m� y yo lo subir� personalmente por FTP";
$lang['ftp_path'] = "Ruta FTP al phpBB 2";
$lang['ftp_username'] = "Nombre de Usuario FTP";
$lang['ftp_password'] = "Contrase�a FTP";
$lang['Transfer_config'] = "Iniciar Transferencia";
$lang['NoFTP_config'] = "El intento se subir por ftp el archivo de configuraci�n ha fallado. Por favor baj� el archivo de configuraci�n y sub�lo por FTP en forma manual.";

$lang['Install'] = "Instalar";
$lang['Upgrade'] = "Actualizar";


$lang['Install_Method'] = "Eleg� tu m�todo de Instalacion";

$lang['Install_No_Ext'] = "La configuraci�n de PHP en tu servidor no soporta el tipo de base de datos seleccionado";

$lang['Install_No_PCRE'] = "phpBB2 requiere el m�dulo de expresiones regulares compatible con Perl para php, que no figura como soportado en tu configuraci�n de php!";

//
// Eso es todo amigos!!!!
// -------------------------------------------------

?>