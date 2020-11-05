<?php
   require_once('../../../model/conection/conexion.php');
   require_once('../../../model/query/admin/queryUser.php');
   require_once('../../translation/roles.php');
   require_once('../../modales/modal.php');
   require_once('../../sessions/security/verification.php');

   error_reporting(0);

   //Variables
   $email = trim($_POST['email']);
   $num_cel = trim($_POST['cel']);
   $gender = trim($_POST['gender']);
   $city = trim($_POST['municipality']);
   $deparment = trim($_POST['deparment']);
   $address = trim($_POST['address']);
   $charge = trim($_POST['charge']);

   $sqlInjection = $email . $num_cel . $gender . $city . $deparment . $address . $charge;

   $acceptSql = sql_injection($sqlInjection);

   $acceptEmail=validationEmail($email);

   if ($acceptEmail===true) {
      if ($acceptSql===true) {
         if (strlen($email)>0 && strlen($num_cel)>0 && strlen($gender)>0  && strlen($city)>0 && strlen($deparment)>0 && strlen($address)>0 && strlen($charge)>0) {
            //
               $consultas=new consultas();
               $result=$consultas->updateInfo($email,$num_cel,$gender,$city,$deparment,$address,$charge);
         }else {
            modalAlert('LLENE TODOS LOS CAMPOS' , '../../../view/admin/perfil.php' , 'warning' , '3');
         }
      }else{
         modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/perfil.php','warning',3);
      }
   }else{
      modalAlert('CORREO NO VALIDO','../../../view/admin/perfil.php','warning',3);
   }

 ?>