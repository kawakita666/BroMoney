<?php
/***************************************************************************
 *                          lang_faq.php [asturian]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   
 *   traduci�n al asturianu : Mikel Gonz�lez (mikelglez@iespana.es)
 *
 *   $Id: lang_faq.php,v 0.9 2002/03/05 16:42:08 Pato[100%Q]
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   Esta ye una aplicaci�n de software llibre, pue re-distribuila y/o modificala
 *   enbaxu los terminos de la GNU (Llicencia P�blica Xeneral), la cual foy public�
 *   per la Free Software Foundation (Fundaci�n del Software Llibre). Esto en la llicencia
 *   de la versi�n 2 o posterior.
 *
 ***************************************************************************/
 
// 
// Pa enxertar una entrada a les Entrugues Frecuentes nam�s meta una llinea col siguiente formatu:
// $faq[] = array("entruga", "rempuesta");
// Si quier separar una secion plumie $faq[] = array("--","Un testu de separtaci�n pue dir equ� si quier");
// Los enllaces creanse automaticamente :)
//
// NUN OLVIDE poner ; al final de cada llinia.
// NUN PONGA dobles comilles (") enes entraes de sus Entrugues Frecuentes, si ye absolutamente necesariu entos plumielo asi: \"testu\";
//
// Los temas ya entraes de les Entrugues Frecuentes apaecer�n nel mesmu orden nel que tean n'esti archivu.
//

  
$faq[] = array("--","A prop�sito de la entrada (login) y rexistru");
$faq[] = array("�Por qu� nun soi quien a conectame?", "�Rexistr�rase primero? Tien que se rexistrar nel sistema primero de ser quien a entrar. �Bloque�ronlu de dalg�n foru? (Si ye esto, apaez un mensaxe dici�ndo-ylo). Si ye tal, contacte col alministrador del foru pa saber qu� pas�. Si y� ta rexistr�u y nun lu bloquearon, mire bien que la contrase�a y el nome d'usuariu t�n bien, ye'l problema mas corriente. Si ta seguru de que t�n bien, contacte col alministrador, pod�a ser que'l foru tea mal configur�u y/o con dalg�n fallu na programaci�n.");
$faq[] = array("�Por qu� tengo que me rexistrar pa too?", "Nun hai nenguna obligaci�n, la decisi�n ye de los alministradores y moderadores. Sicas�, rexistrase trai sinfinidi� de ventayes que nun t�n disponibles como invit�u, talo qe tener los gr�ficos personalizaos (avatar), mensaxes privaos, suscripci�n a grupos d'usuarios, etc.... Son nam�s unos segundinos, y ye mui recomendable.");
$faq[] = array("�Por qu� la sesi�n d'usuariu termina de manera autom�tico?", "Si nun s'activ� la caxella entrar de manera autom�tico de la que s'entra nun foru, los datos gu�rdense nuna cookie que s'elimina en saliendo de la p�xina o al cabu d'un tiempu. Esto evita qu'esa cuenta la emplegue dalgui�n m�s. Pa que'l sistema lu reconoza de manera autom�tico, nun tien m�s qu'activar la caxella mentada de la que se conecte. Sicas�, esto nun ye recomendable si aveza conectase al foru dende un ordinador p�blicu (cyber-caf�, biblioteca, facult� ...)");
$faq[] = array("�C�mo evito apaecer nes llistes de veceros conectaos?", "Nel so perfil, atopar� la opci�n ocultar est�u de conex�n, n'activando esta opci�n nam�s va apaecer pa los alministradores, moderadores y pa ust� mesmu, los demas usuarios nun tar�n al tanto de la so presencia.");
$faq[] = array("�Perdi�seme la contrase�a!", "Nun hai que se precupar, si nun da cola contrase�a, siempre puede desactivala o cambiala. Nun hai m�s que dir a la p�xina de rexistru y calcar n'<u>escaec� la contrase�a</u>, siga les instruciones y entrar� darr�u.");
$faq[] = array("�Rexistreme y nun son quien a conectame!", "Primero verifique los datos (alcu�u y contrase�a). Si ye correcto hai dos posibles razones. Si'l Sistema de Protecci�n Infantil (COPPA) ta activ�u y de la que se rexistr� elix� la opci�n <u>Soi menor de 13 a�os</u> ent�s hai que siguir les instrucciones que se-y dean p'activar la cuenta. N'otros casos l'alministrador rique activar les cuentes per acio d'un corr�u lletr�nicu, mir�'l correu y confirme la suscripci�n. Dellos foros precisen una confirmaci�n de rexistru. Si nun se tratara de neng�n d'estos casos, contacte col alministrador del foru.");
$faq[] = array("Va tiempu que me rexistrara, pero agora nun soi quien a conectame", "Hai delles desplicaciones: Enxert� un alcu�u o contrase�a incorrectos (verifique'l mensaxe que se-y unviara de la que se rexistr�). Tami�n pudo pasar que l'alministrador desaniciara la cuenta, esto ye corriente, si nun escribi� neng�n mensaxe l'alministrador esborra cuentes pa nun saturar la base datos. Si fuera asina, vuelva rexistrase y participe :)");


$faq[] = array("--","Preferencies d'usuariu y configuraci�n");
$faq[] = array("�C�mo puedo cambiar la configuraci�n?", "Tolos sos datos y configuraciones (si ta rexistr�u) t�n arquivaes na nuestra base datos. Pa cambialos calque nel enllaz Perfil, davezo ta darriba la p�xina.");
$faq[] = array("La hora nos foros ta mal.", "La hora ta bien, seique ta mirando la hora que correspuende a otra zona horaria, si fuera'l casu, con entrar nel perfil y elixir la zona horaria afayadiza (ex. Londres, Par�s, Nueva York, Sydney, etc.) En cambi�ndolo, la hora tien qu'apaecer d'acorde cola so zona horaria. Si nun tuviera rexistr�u y� ye hora de facelo :)");
$faq[] = array("Cambi� la zona horaria pa esti perfil, pero la hora sigue tando mal.", "Si ta seguru de que la zona horaria ye correcta puede ser que s�a por cuenta la hora de branu que s'aplica en dellos pa�ses.");
$faq[] = array("�La mio llingua nun apaez ente les opciones!", "Esto puede ser porque l'alministrador nun instalara'l paquete d�esa llingua pal foru o porque naide nun despachara la so traducci�n :( si fuera tal, bien la pod�a entamarfsto, (dexuro que muncha xente-ylo diba agradecer), hai informaci�n nel sitiu web del grupu phpBB (Cinque nel enllaz abaxo nesta p�xina).");
$faq[] = array("�C�mo poner una imaxe embaxo'l mio alcu�u?", "Hai dos clases d'imaxes embaxo l�alcu�u, la primera ye�l rangu, que ta relacionada col n�mberu mensaxes escritos nesti foru (davezo son estrellines o bloques), y la segunda ye l'AVATAR, que ye un gr�ficu xeneralmente �nicu y personal, l'alministrador decide si pueden usase o non, si se pueden usar puede a�idilu al so perfil. Si nun existiera esta opci�n, contacte col alministrador y p�da-y que la active :)");
$faq[] = array("�C�mo cambio'l rangu?", "Nun se puede cambiar la clasificaci�n directamente, y� que ta asoci�u directamente col n�mberu mensaxes mandaos o col so estatus de moderador, alministrador o rangos especiales. Por favor, nun abuse mandando mensaxes innecesarios pa espolletar nel rangu.");
$faq[] = array("De la que calco nel enllaz de corr�u, p�deme que me rexistre", "Pa ser quien a mandar un corr�u lletr�nicu a un veceru per acio d�un formulariu (si l'alministrador lu activ�) precisa rexistrase en ficies d�evitar correos basura o mensaxes maliciosos d'usuarios an�nimos.");


$faq[] = array("--","Publicamientu de mensaxes");
$faq[] = array("�C�mo asoleyo un mensaxe nel foru?", "F�cil, rex�strese como miembru del foru (calcando nel enllaz de rexistru, xeneralmente no cimero de cada p�xina), en rexistr�ndose, cinque onde diz <i>Unviar un mensaxe nuevu<i>, apaecer� un panel nel que puede publicar un mensaxe bien f�cil :)");
$faq[] = array("�C�mo edito o esborro un mensaxe?", "Si nun ye l'alministrador o�l moderador del foru, nam�s puede esborriar los mensaxes que mand�. Pa editar un mensaxe cinque n'editar, si dalgui�n y� contestara, apaecer� un textu menudu diciendo que cambi� y cu�ntes veces, esto nun apaez si lu editara un moderador o l�alministraor (sicas�, les m�s de les veces dexen un mensaxe aclari�ndolo).");
$faq[] = array("�Como a�ido una firma al mensaxe?", "P�axuntar una firma nos mensaxes, primero hai que la iguar; esto f�ise modificando�l perfil. En faci�ndolo, abasta con activar la opci�n <i>Axuntar firma</i> de la qu�escriba un mensaxe. Tami�n se puede facer que tolos mensaxes lleven firma, activando esta opci�n nel perfil.");
$faq[] = array("�C�mo facer una encuesta?", "Entamar una encuesta ye bien f�cil, n�escomenzando con un tema nuevu, apaez la opci�n �Entamar una encuesta�, enxerta los datos de la encuesta, coses como�l titulu y les opciones, tami�n existe la opci�n d�acutar el n�mberu de participantes (onde�l 0 ye illimit�u)");
$faq[] = array("�C�mo edito o esborro una encuesta?", "Si entam� la encueta, puede editala de la mesma manera qu�un mensaxe, pero nam�s funciona si ent� nun hai respuestes, si y� les hubiere, ent�ncenes, nam� l�alministrador o los moderadores pueden editar o esborrar.");
$faq[] = array("�Por qu� nun puedo entrar en dalg�n foru?", "Dellos foros t�n acutaos a dellos grupos d'usuarios nam�s, pa velos, participar, editar, etc, precisa delles autorizaciones que nam�s l�alministrador del foru o un moderador puede asignar.");
$faq[] = array("�Por qu� nun puedo votar nes encuestes?", "Nam�s los miembros rexistraos pueden votar nes encuestes (pa evitar manipulaci�n de resultaos), si tuviera rexistr�u pero nun puede votar, ye posible que nun tea autoriz�u a votar nesa encuesta :(");


$faq[] = array("--","D�ndo-yos forma a los mensaxes y temes distintos");
$faq[] = array("�Qu� ye'l c�digu BBCode?", "BBCode ye una implementaci�n especial del HTML, BBCode empl�gase d�acorde colo que determina l�alministrador, ye hermano al HTML, les etiquetes apaecen ete corchetes [ y ] pa m�s informaci�n puede restolar pel manual de BBCode, l'enllaz apaez de la que se publica un mensaxe.");
$faq[] = array("�Puedo usar HTML?", "Depende de que l'alministrador active la opci�n y de qu� etiquetes HTML tean activaes, munches etiquetes HTML pod�en tracamundiar la estructura del mensaxe.");
$faq[] = array("�Qu� son los smileys?", "Smileys, emoticonos o iconos xestuales son gr�ficos menudos que se pueden emplegar pa expresar emociones, apaecen enxertando un c�digu talo que: :) que quier dicir contentu, :( ye triste. La llista completa d�estos smileys apaez de la que se manda un mensaxe.");
$faq[] = array("�Puedo mandar imaxes?", "Pueden axuntase imaxes a un mensaxe, enxert�ndoles directamente de la que s�escribe. Sicas�, pueden axuntase imaxes guardaes en dalg�n servidor web, nun se pueden axuntar imaxes que tean guardaes nel so ordinador (a nun ser que s�a un servidor accesible) nin imaxes guardaes en servidores que precisen contrase�a p�acceder a ellos. Pa que se vea la imaxe, habr� emplegar [img] del c�digu BBCode o la etiqueta html afechisca (si nun ta acutada).");
$faq[] = array("�Qu� son les anuncies?", "Les anuncies contienen informaci�n importante pa los usuarios.");
$faq[] = array("�Qu� son los temes importantes?", "Los temes Importantes apaecen embaxo de les anuncies y nam�s na primer p�xina, ye informaci�n perimportante que convi�n lleer :)");
$faq[] = array("�Qu� son los temes trancaos o bloqueaos?", "Los temes trancaos o bloqueaos son puramente eso, temes nos que y� nun se pueden a�idir mensaxes, talo que lo deciden l�alministrador o los moderadores.");


$faq[] = array("--","Nivel d'usuariu y grupos");
$faq[] = array("�Qu� son los alministradores?", "Los alministradores son los que tienen control sobre de tol foru, controlen permisos, moderadores y tola configuraci�n.");
$faq[] = array("�Qu� son los moderadores?", "Los moderadores son la xente que tien el poder d'editar o esborrar foros, trancalos o abrilos. Ye l�alministrador el que los designa y tienen menos poder qu��sti.");
$faq[] = array("�Qu� son los grupos d'usuarios?", "Los grupos d'usuarios ye una de les maneres nes que l�alministrador del foru pue atropar usuarios. Un usuariu puede pertenecer a dellos grupos distintos. Esto faise en ficies de conceder permisos colectivos sobre del foru (como facer que tol grupu s�an moderadores).");
$faq[] = array("�C�mu puedo pertenecer a un grupu d'usuarios?", "Calque en Grupos d'usuarios pa solicitar la inscripci�n, si lu acepten y� recibir� un corr�u. Convi�n saber que non tolos grupos son abiertos.");
$faq[] = array("�C�mo me faigo moderador d'un grupu d'usuarios?", "Nam�s l'alministrador puede asignar esi permisu, contacte con �l :)");


$faq[] = array("--","Mensaxer�a privao");
$faq[] = array("�Nun soi quien a mandar mensaxes privaos!", "Puede haber tr�s desplicaciones pa esto: O nun ta rexistr�u, puede que nun tea conect�u o l�alministrador tranc�l sistema de mensaxer�a privao pa que nun s�a quien a mandar mensaxes d�estos.");
$faq[] = array("Quiero evitar mensaxes privaos inesperaos.", "Contamos a�idir la posibilid� d'ignorar mensaxes d�esti calter, pel momentu �nvie un mensaxe al alministrador si recibe mensaxes inesperaos :(.");
$faq[] = array("�Dalgui�n nesti foru recibi� spam o correos maliciosos?", "El formulariu nesti tableru d�anuncies incl�i delles opciones pa conocer qui�n manda los mensaxes. �nvie�l corr�u al alministrador, tal como-y lleg�, incluyendo�l testeru y tolo dem�s, pa que pueda actuar d�acorde.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","A prop�sito de phpBB22");
$faq[] = array("�Quien program� esti foru?", "Esta aplicaci�n (na forma orixinal) produci�la y asoley�la�l <a href=\"http://www.phpbb.com/\" target=\"_blank\">Grupu phpBB</a> que tien acutaos los derechos d�autor. Fecho como GNU (Llicencia P�blica Xeneral) ye de llibre distribuci�n (cinque nel v�nculu pa conocer m�s detalles)");
$faq[] = array("�Por qu� nun hai \"X\" nesti foru?", "Esti foru tien una llicencia del Grupu phpBB que lu escribi�. Si-y avulta que precisa dalguna opci�n o caracter�stica nueva, visite phpbb.com pa ver lo que'l grupu phpBB tien que decir. Faiga'l favor de nun publicar mensaxes d'esti calter nos foros de phpBB.com, la xente de Sourceforge tien idees a esgaya y t�n anovando la cosa tol tiempu en ficies d'ameyorar esti pres�u.");
$faq[] = array("�Con qui�n contacto a prop�sito d'abusos o usos illegales tocante a esti foru?", "L�alministrador del foru ye la persona con quien contactar nestos casos, si nun fuera quien a dar con �l, puede contactar con �n de los moderadores. Si nun contestaran, contacte col propietariu del dominiu (faiga una busca whois) y si tuviera nun servidor de balder (talo que Yahoo, free.fr, f2s.com, etc.), habr� contactar col departamentu d'abusos d'esi serviciu. Entienda que phpBB Group nun tien control dalu sobre del foru y nun se puede facer responsable nin del foru nin del conten�u. Nun val pa nada contactar col grupu phpBB toc�ntenes a cuestiones llegales (como comentarios difamatorios, etc.) que nun tengan que ver col software phpBB o col sitiu phpbb.com directamente. Nel casu de contactar col grupu phpBB puede recibir una respuesta orisca o nun tener respuesta dala.");

//
// Equ� finen les FAQ :)
//

?>