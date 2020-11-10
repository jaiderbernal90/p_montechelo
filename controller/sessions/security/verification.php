<?php
/**
 
 * Valida un email usando funciones de manejo de strings. 
 *  Devuelve true si es correcto o false en caso contrario

 * @param    string  $str la dirección a validar
 *@return   boolean
 
 */
function validationPassword($newPass)
{
  return (false === strpos($newPass, "'") &&  false === strpos($newPass, '"'));
}

function sql_injection($str)
{
	return (false === strpos($str, "'") &&  false === strpos($str, '"') &&  false === strpos($str, '`') &&  false === strpos($str, '?') &&  false === strpos($str, '¿') &&  false === strpos($str, '<') &&  false === strpos($str, '=') &&  false === strpos($str, '(') &&  false === strpos($str, ')'));
}

function validationEmail($str)
{
  return (false !== strpos($str, "@") && false !== strpos($str, ".") && false !== strpos($str, "montechelo") && false !== strpos($str, ".com"));
}

function imgValidation($tmp,$name){
  move_uploaded_file($tmp, '../../../img/'.$name);
}
?>