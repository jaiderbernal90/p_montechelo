<?php
error_reporting(0);
//Configuración del algoritmo de encriptación
//Debes cambiar esta cadena, debe ser larga y unica

 /*
 Encripta el contenido de la variable, enviada como parametro.
  */
function encriptar($valor) {
	//nadie mas debe conocerla
	$clave  = 'QAZWSXEDCRFVTGBYHNUJMIK,OL.PÑ-+}{qazwsxedcrfvtgbyhnujmikpñ#$%&/()789456123.70';
	//Metodo de encriptación
	$method = 'aes-256-cbc';
	// Puedes generar una diferente usando la funcion $getIV()
	$iv = base64_decode("C9fBfrseEWtYTL1/M8jfstw==");

	$result = openssl_encrypt($valor, $method, $clave, false, $iv);
    echo "<script>alert(".$result.")</script>";

    return $result; 
 };
 /*
 Desencripta el texto recibido
 */
 function desencriptar($str) {

 	//nadie mas debe conocerla
	$clave  = 'QAZWSXEDCRFVTGBYHNUJMIK,OL.PÑ-+}{qazwsxedcrfvtgbyhnujmikpñ#$%&/()789456123.70';
	//Metodo de encriptación
	$method = 'aes-256-cbc';
	// Puedes generar una diferente usando la funcion $getIV()
	$iv = base64_decode("C9fBfrseEWtYTL1/M8jfstw==");

     $encrypted_data = base64_decode($str);
     $resultado= openssl_decrypt($str, $method, $clave, false, $iv);
     return$resultado;
 };
 /*
 Genera un valor para IV
 */

?>