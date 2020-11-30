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
   $type=trim($_POST['type']);
   $date_request=date("Y-m-d H:i:s");
   $state=$_POST['state'];
   $content=trim($_POST['content']);
   $id_user=$_SESSION['id'];

   $sqlInjection = $type . $state;

   $acceptSql = sql_injection($sqlInjection);

   if ($acceptSql===true) {
      //Validation
      if (strlen($type)>0 && strlen($content)>0 ) {
         $consultas=new request();
         $result=$consultas->updateSolicitud($id_request, $type, $date_request, $state, $content, $id_user);
      }else{
         modalAlert('LLENE TODOS LOS CAMPOS OBLIGATORIOS','../../../view/admin/solicitudes.php','warning',3);
         }
   }else{
       modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/solicitudes.php','warning',3);
   }
?>