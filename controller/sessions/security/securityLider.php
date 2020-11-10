<?php 
   require_once('../../controller/modales/modal.php');
session_start();
if (!isset($_SESSION['autenticado']) && $_SESSION['state'] != "1") {
     modalAlertSecurity("USTED TIENE QUE INICIAR SESIÓN PARA INGRESAR A ESTA PÁGINA","../../index.php","warning",2);
}else{
	if ($_SESSION['role']!=2) {
          modalAlertSecurity("USTED NO TIENE PERMISOS PARA INGRESAR A ESTA PÁGINA","../../index.php","warning",2);
          session_destroy();
	}
}
?>