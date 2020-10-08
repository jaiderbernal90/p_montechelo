<?php  
	require_once('../../model/conection/conexion.php');
	require_once('../../model/sessions/validarSesion.php');
	//CALL TO FUNCTION
	$consultas = new validarSesion();
	$result = $consultas -> cerrarSesion();
?>