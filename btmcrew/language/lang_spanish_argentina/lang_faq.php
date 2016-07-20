<?php
/***************************************************************************
 *                          lang_faq.php [Argentinean Spanish]
 *                            -------------------
 *     begin                : Wed Jul 24 2002
 *     copyright            : Angel Olivera
 *     e-mail               : aolivera@softhome.net
 *     location             : Mendoza, Argentina
 *
 *     modified from Spanish language by:
 *
 *                          Daniel Gonz�lez Cuellar (webmaster@ba-k.com)
 *   			            Mariano Martene (correo@webfactory.com)
 *                          Patricio Mar�n (pmarin@hotmail.com)
 *
 *   $Id: lang_faq.php,v 0.9 2002/03/05 16:42:08 Pato[100%Q]
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   Esta es una aplicaci�n de software libre, puede re-distribuirla y/o modificarla
 *   bajo los terminos de la GNU (Licencia P�blica General), la cual fue publicada
 *   por la Free Software Foundation (Fundaci�n del Software Libre). Esto en la licencia
 *   de la versi�n 2 o posterior.
 *
 ***************************************************************************/
 
// 
// Para agregar una entrada a las FAQ solo agregue una linea con el siguiente formato:
// $faq[] = array("pregunta", "respuesta");
// Si quieres separar una seccion escribe $faq[] = array("--","Un texto de separaci�n puede ir aqui si lo deseas");
// Los enlaces se crean automaticamente :)
//
// NO OLVIDE poner ; al final de cada linea.
// NO PONGA dobles comillas (") en las entradas de sus FAQ, si es absolutamente necesario entonces escribalo asi: \"texto\"
//
// Los temas y entradas de las FAQ aparecer�n en el mismo orden en el que est�n en este archivo.
//

  
$faq[] = array("--","Acerca del ingreso (login) y registro");
$faq[] = array("�Por qu� no puedo ingresar?", "�Ya te registraste? Ten�s que registrarte en el sistema antes de poder acceder a �l. �Has sido bloquedado en el foro? (si es as�, un mensaje aparecer�). Si esto sucede envi� un mensaje al administrador del foro para encontrar la causa. Si te has registrado y no has sido bloquedado verific� que tu nombre de usuario y contrase�a coincidan, es el problema mas com�n. Si est�s seguro de que son correctos los datos, envi� un mensaje al administrador, es posible que el foro est� mal configurado y/o tenga fallos en la programaci�n.");
$faq[] = array("�Por qu� me tengo que registrar para todo?", "No est�s obligado a hacerlo, la decisi�n la toman los administradores y moderadores. Sin embargo estar registrado te da muchas ventajas que como usuario invitado no difrutar�as, como tener tu gr�fico personalizado (avatar), mensajes privados, suscripci�n a grupos de usuarios, etc.... S�lo te tomar� unos segundos, es muy recomendable.");
$faq[] = array("�Por qu� mi sesi�n de usuario expira automaticamente?", "Si no activ�s la casilla <i>Ingresar autom�ticamente</i> cuando ingres�s al foro, tus datos se guardan en una cookie que se elimina al salir de la p�gina o en cierto tiempo. Esto previene que tu cuenta pueda ser usada por alguien m�s. Para que el sistema te reconozca autom�ticamente s�lo activ� la casilla al ingresar. NO es recomendable si acced�s al foro desde una computadora compartida (caf�-internet, biblioteca, colegio ...)");
$faq[] = array("�C�mo evito aparecer en las listas de usuarios conectados?", "En tu perfil, encontrar�s la opci�n <i>Ocultar mi estado de conexi�n</i>, si activ�s esta opci�n aparecer�s s�lo para los administradores, moderadores y para vos mismo, para los dem�s ser�s un usuario oculto.");
$faq[] = array("�He perdido mi contrase�a!", "Calma, si tu contrase�a no puede ser recuperada pod�s desactivarla o cambiarla. Para hacer esto and� a la p�gina de registro y hac� click en <u>Olvid� mi contrase�a</u>, segu� las instrucciones y estar�s dentro en muy poco tiempo");
$faq[] = array("�Me he registrado y no puedo ingresar!", "Primeramente verific� tus datos (usuario y contrase�a). Si todo es correcto hay dos posibles razones. Si el Sistema de Protecci�n Infantil (COPPA) esta activado y cuando te registraste elegiste la opci�n <u>Soy menor de 13 a�os</u> entonces tendr�s que seguir algunas instrucciones que se te dar�n para activar la cuenta. En otros casos el administrador pide que las cuentas se activen mediante un correo electr�nico, as� que revis� tu correo y confirm� tu suscripci�n. Algunos foros necesitan confirmaci�n de registro. Si no sucede nada de esto contact� al administrador del foro.");
$faq[] = array("Hace un tiempo me registr�, pero ahora no puedo ingresar", "Las posibles razones son: ingresaste un nombre de usuario o contrase�a incorrectos (verific� el mensaje que se te envia al registrarte). Es posible que el administrador haya borrado tu cuenta, esto es muy frecuente, porque si no has escrito ningun mensaje en cierto tiempo el administrador puede borrar el usuario para que la base de datos no se sature de registros. Si es as� registr�te de nuevo y particip� :)");


$faq[] = array("--","Preferencias de usuario y configuraciones");
$faq[] = array("�C�mo puedo cambiar mi configuraci�n?", "Todos tus datos y configuraciones (si est�s registrado) est�n archivados en nuestra base de datos. Para modificarlos hac� click en el link <u>Perfil</u>, generalmente se encuentra arriba de cada p�gina.");
$faq[] = array("El tiempo en los foros no es correcto (horas)!", "Las horas son corectas, es posible que est�s viendo las horas correspondientes a otra zona horaria, si �ste es el caso, ingres� a tu perfil y defin� tu zona horaria de acuerdo a tu ubicaci�n (ej. Londres, Paris, New York, Sydney, etc.) Cambiando esto las horas deben aparecer de acuerdo a tu zona y tiempo. Si no te has registrado es tiempo de hacerlo :)");
$faq[] = array("He cambiado la zona horaria en mi perfil, pero el tiempo sigue siendo incorrecto", "Si estas segur@ de que la zona horaria es correcta es posible que se deba a los horarios de verano implementados por algunos paises.");
$faq[] = array("Mi idioma no est� en la lista!", "Esto se puede deber a que el administrador no ha instalado el paquete de tu lenguaje para el foro o nadie ha creado una traducci�n :(  si es as�, sent�te libre de hacer una traducci�n (miles de personas te lo agradecer�n), la informaci�n la encontr�s en el  phpBB Group website (Click en el link que se encuentra al final de la p�gina)");
$faq[] = array("C�mo puedo poner una imagen abajo de mi nombre de usuario?", "Hay dos tipos de im�genes debajo de tu nombre de usuario, la primera es el RANK, que est� asociada con el n�mero de mensajes que has escrito en el foro (generalmente son estrellas o bloques), la segunda es el AVATAR, que es un gr�fico generalmente �nico y personal, el administrador decide si se pueden usar o no, si es posible usarlos puedes introducirlo en tu perfil. En caso de que no exista esa opci�n, contact�te con el administrador y ped� que sea activada esa opci�n :)");
$faq[] = array("�Como puedo cambiar mi RANK?", "No puedes cambiar tu RANK directamente, ya que �ste es asociado directamente con el n�mero de mensajes posteados o tu estado de moderador, administrador o RANKs especiales. Por favor, no abuses de postear innecesariamente para incrementar tu RANK.");
$faq[] = array("Cuando hago click sobre el link de e-mail me pide que me registre", "Para poder enviar e-mail a un usuario v�a formulario (si el administrador lo tiene activado) necesit�s estar registrado, esto es para evitar SPAM o mensajes maliciosos de usuarios an�nimos.");


$faq[] = array("--","Publicaci�n de mensajes");
$faq[] = array("�Como puedo publicar un mensaje en el foro?", "Facil, registr�te como miembro del foro (haciendo click en el link de registro, generalmente arriba de cada p�gina), despu�s del registro hac�s click en <i>Enviar nuevo mensaje<i>, ah� se te presentar� un panel con el que facilmente publicar�s un mensaje :)");
$faq[] = array("�C�mo puedo editar o borrar un mensaje?", "Si no sos el administrador o moderador del foro, s�lo pod�s borrar los mensajes que hayas posteado vos mismo. Pod�s editar un mensaje haciendo click en <i>editar</i> si alguien ya ha respondido a tu mensaje, encontrar�s un peque�o texto en el tuyo diciendo que ha sido modificado y las veces que lo has hecho, no aparece si fue un moderador o el administrador el que lo edit� (la mayoria de las veces dejan un mensaje aclaratorio).");
$faq[] = array("�C�mo puedo agregar una firma a mi mensaje?", "Para insertar una firma en tu mensaje primero ten�s que crear una, esto se hace modificando tu perfil. Una vez creada activ�s la opci�n <i>Agregar firma</i> cuando postees un mensaje. Tambi�n pod�s hacer que todos tus mensajes tengan tu firma, activando la opci�n el tu perfil.");
$faq[] = array("�C�mo creo una encuesta?", "Crear una encuesta es f�cil, cuando inici�s un nuevo tema notar�s la opci�n <i>Crear una encuesta</i>, introduc�s los datos de la encuesta, como titulo y opciones, ten�s la posibilidad de poner limite al numero de participantes (0 es infinito)");
$faq[] = array("�C�mo edito o borro una encuesta?", "Si sos el que inici� la encuesta pod�s editarla de la misma manera que tu mensaje, sin embargo esto s�lo funcionar� si la encuesta a�n no tiene respuestas, de tenerlas, s�lo el administrador o moderadores podr�n editarla o borrarla");
$faq[] = array("�Por qu� no puedo accesar a alg�n foro?", "Algunos foros est�n limitados a ciertos grupos de usuarios, para verlos, postear, editar, etc, necesit�s tener ciertas autorizaciones, las cuales s�lo te puede dar un moderador o administrador del foro.");
$faq[] = array("�Por qu� no puedo votar en las encuestas?", "S�lo miembros registrados pueden votar en las encuestas (para prevenir resultados trucados), si te has registrado pero no pod�s votar, es posible que no tengas autorizaci�n para votar en esa encuesta :(.");


$faq[] = array("--","Formateo de mensajes y tipos de temas");
$faq[] = array("�Qu� es el c�digo BBCode?", "BBCode es una implementaci�n especial del HTM, la forma en la que el BBCode se usa es determinada por el administrador, es muy similar al HTML, las etiquetas van entre corchetes [ y ] para mas informaci�n puedes ver el manual de BBCode, el enlace aparece cada vez que vas a publicar un mensaje.");
$faq[] = array("�Puedo usar HTML?", "Depende de que el administrador tenga habilidata la opci�n y de cuales etiquetas HTML est�n activadas, ya que muchas etiquetas HTML podrian da�ar severamente la estructura del mensaje.");
$faq[] = array("�Qu� son los smileys?", "Smileys o emot�conos son peque�os gr�ficos que pueden ser usados para expresar emociones, aparecen introduciendo un pequelo c�digo, por ejemplo:  :) significa feliz, :( significa triste. La lista completa de smileys se despliega cuando envias un mensaje.");
$faq[] = array("�Puedo postear im�genes?", "Las imagenes pueden ser adheridas al mensaje, insertandolas al momento de redactarlo. No puede haber im�genes de sitios de correo, busqueda o cualquier autentificacion (Yahoo, Hotmail...).");
$faq[] = array("�Qu� son los anuncios?", "Los anuncios contienen informaci�n importante para los usuarios.");
$faq[] = array("�Qu� son los Temas Importantes?", "Los Temas Importantes aparecen debajo de los anuncios y solo en la primera p�gina, es informaci�n muy importante que deber�as leer :)");
$faq[] = array("�Qu� son los temas cerrados o bloquedados?", "Los temas cerrados o bloqueados son precidamente eso, temas en los que ya no se puede postear, esto lo decide el administrador o moderadores.");


$faq[] = array("--","Niveles de usuario y grupos");
$faq[] = array("�Qu� son los administradores?", "Los administradores son gente asignada con alto nivel de control sobre el foro entero, pueden controlar permisos, moderadores y todo tipo de configuraciones.");
$faq[] = array("�Qu� son los moderadores?", "Moderadores son personas que tienen el poder de editar o borrar foros, cerrarlos o abrirlos. Son designados por el administrador  tienen menos opciones que este.");
$faq[] = array("�Qu� son los grupos de usuarios?", "los Grupos de usuarios es una de las formas en las que el administrador del foro puede agrupar usuarios. Un usuario puede pertenecer a varios grupos. Esto se hace con el fin de conceder permisos solctivos sobre el foro (como volver a todo un grupo moderadores).");
$faq[] = array("�como puedo pertenecer a un Grupo de usuarios?", "Da click en Grupos de usuarios y pide tu inscripcion, recibiras un mail si eres aceptado. No todos los grupos son abiertos.");
$faq[] = array("�C�mo me convierto en el moderador de un grupo de usuarios?", "Solo el administrador puede asignar ese permiso, contacta con el :)");


$faq[] = array("--","Mensajer�a privada");
$faq[] = array("No puedo enviar mensajes privados!", "Hay tres posibles razones: No estas registrado o no has ingresado, el administrador deshabilito el sistema de mensajes privadoso el administrador ha desabilidato para ti la mensajer�a.");
$faq[] = array("Quiero evitar mensajes privados no deseados!", "En un futuro ser� agregada la caracter�stica de ignorar mensajes, por ahora solo envia un mensaje al administrador si recibes mensajes no deseados :(.");
$faq[] = array("He recibido spam o correos amaliciosos de alguien en este foro!", "Lo sentimos mucho, la caracteristica de mandar mails tiene amplios conceptos de seguridad y privacidad. Envia el mail al administrador, tal como venia, incluyendo headers y demas, el tomar� acciones.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Acerca de phpBB2");
$faq[] = array("�Quien program� este foro??", "Esta aplicaci�n (en su forma original) es producida, liberada y con derechos de autor pertenecientes al <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Est� hecho bajo la GNU (Licencia P�blica General) y es de libre distribuci�n (click en el enlace para conocer mas detalles)");
$faq[] = array("�Por qu� este foro no tiene X cosa?", "Este foro fue escrito y licenciado a trav�s de phpBB Group. Si cree que deberia tener alguna otra opci�n o caracter�stica visite phpbb.com y mire lo que el phpBB Group tiene que decir. Por favor, no publiques mensajes de ese tipo en los foros de phpBB.com, los miembros de Sourceforge estan llenos de ideas y en constante innovaci�n para agregarle mejoras a este foro.");
$faq[] = array("�A quien puedo contactar acerca de abusos o usos ilegales relacionados con este foro?", "Pod�s contactar al administrador del foro, si no encontr�s la forma de contactarlo intent� contactando a cualquiera de los moderadores. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.");

//
// Aqu� terminan las FAQ :)
//

?>