<?php
   require_once('../../../model/conection/conexion.php');
   require_once('../../../model/query/admin/queryRequest.php');
   require_once('../../modales/modal.php');
   require_once('../../sessions/security/verification.php');
   //DEFINIR ZONA HORARIA
   date_default_timezone_set('America/Bogota');

   session_start();
   //Variables
   $id_request=$_POST['id'];
   $date_request=date("Y-m-d H:i:s");
   $state=trim($_POST['state']);
   $response=trim($_POST['response']);
   $id_user_response=$_SESSION['id'];

   echo $state;

   $sqlInjection = $state;

   $acceptSql = sql_injection($sqlInjection);

   if ($acceptSql===true) {
      //Validation
      if (strlen($state)>0 && strlen($response)>0) {
         $consultas=new request();
         $result=$consultas->responseSolicitud($id_request, $date_request, $state, $response, $id_user_response);
      }else{
         modalAlert('LLENE TODOS LOS CAMPOS OBLIGATORIOS','../../../view/admin/solicitudes.php','warning',3);
         }
   }else{
      modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/solicitudes.php','warning',3);
   }
?>