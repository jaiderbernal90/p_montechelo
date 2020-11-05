<?php

require_once('security/urlSession.php');

function validation(){
    session_start();
    //  evitar salida al login mientras este logeado a menos que cierre sesion
     if (isset($_SESSION['autenticado'])) {
        //ejecutar redireccion de usuarios por rol	    	
        urlSessionUser();   
    }
}

?>