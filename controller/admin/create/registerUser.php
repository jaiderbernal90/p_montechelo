<?php
   require_once('../../../model/conection/conexion.php');
   require_once('../../../model/query/admin/queryUser.php');
   require_once('../../modales/modal.php');
   require_once('../../sessions/security/verification.php');

   error_reporting(0);
   //DEFINIR ZONA HORARIA
   date_default_timezone_set('America/Bogota');

   //Variables
   $name=trim($_POST['name']);
   $last_name=trim($_POST['last_name']);
   $type_id=trim($_POST['type_id']);
   $document=trim($_POST['document']);
   $estate=trim($_POST['estate']);
   $gender=trim($_POST['gender']);
   $email=trim($_POST['email']);
   $date_birth=trim($_POST['date_birth']);
   $num_cel=trim($_POST['num_cel']);
   $tel=trim($_POST['tel']);
   $pass = $document.substr($name, 0, 1).substr($last_name, 0, 1);
   $password=md5($pass);
   $role=trim($_POST['role']);
   $charge=trim($_POST['charge']);
   $salary=trim($_POST['salary']);
   $deparment=trim($_POST['deparment']);
   $city=trim($_POST['city']);
   $address=trim($_POST['address']);
   $type_contract=trim($_POST['type_contract']);
   $img = 'user.png';
   $fech = date("Y-m-d H:i:s");

   $sqlInjection = $name . $lastname . $type_id . $document . $estate . $gender . $email . $date_birth . $num_cel . $tel . $role . $charge . $salary . $deparment . $city . $address . $type_contract;

   $acceptSql = sql_injection($sqlInjection);

   $acceptEmail=validationEmail($email);

   if ($acceptEmail===true) {
      if ($acceptSql===true) {
         //Validation
         if (strlen($name)>0 && strlen($last_name)>0 && strlen($type_id)>0 && strlen($document)>0 && strlen($estate)>0 && strlen($gender)>0 && strlen($email)>0 && strlen($date_birth)>0 && strlen($num_cel)>0  && strlen($role)>0 && strlen($charge)>0 && strlen($salary)>0 && strlen($deparment)>0 && strlen($city)>0 && strlen($type_contract)>0 && strlen($img)>0 && strlen($fech)>0 && strlen($pass)>0) {
               $consultas=new consultas();
               $result=$consultas->registerUser($name,$last_name,$type_id,$document,$estate,$gender,$email,$date_birth,$num_cel,$tel,$role,$charge,$salary,$deparment,$city,$address,$type_contract,$password,$img,$fech);
         }else {
            modalAlert('LLENE TODOS LOS CAMPOS OBLIGATORIOS','../../../view/admin/addUser.php','warning',3);
         }
      }else{
         modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/addUser.php','warning',3);
      }
   }else{
      modalAlert('CORREO NO VALIDO','../../../view/admin/addUser.php','warning',3);
   }

 ?>