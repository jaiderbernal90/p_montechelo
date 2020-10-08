<?php 
session_start();
if (!isset($_SESSION['autenticado'])) {
     echo '<script>alert("USTED TIENE QUE INICIAR SESIÓN PARA INGRESAR A ESTA PÁGINA")</script>';
     //echo '<script>location.href="../../index.php"</script>';
}else{
	if ($_SESSION['role']!=1) {
        echo '<script>alert("USTED NO TIENE PERMISOS PARA INGRESAR A ESTA PÁGINA")</script>';
	    //echo '<script>location.href="../../index.php"</script>';
	}
}
?>