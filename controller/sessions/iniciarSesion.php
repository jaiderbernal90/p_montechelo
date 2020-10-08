<?php 
	require_once('../../model/conection/conexion.php');
	require_once('../../model/sessions/validarSesion.php');
    //VARIABLES
	$email = $_POST['email'];
	$pass1 = $_POST['password'];
	//ENCRIPT PASS
	$password = md5($pass1);

	//CALL TO FUNCTION
	$consultas = new validarSesion();
	$result = $consultas -> iniciarSesion($email, $password);
?>