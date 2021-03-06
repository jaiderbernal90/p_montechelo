<?php
   require_once('../../../model/conection/conexion.php');
   require_once('../../../model/query/admin/queryPublications.php');
   require_once('../../modales/modal.php');
   require_once('../../sessions/security/verification.php');
   //DEFINIR ZONA HORARIA
   date_default_timezone_set('America/Bogota');

   session_start();
   //Variables
   $type_publications=2;
   $title=trim($_POST['title']);
   $date_publication=date("Y-m-d H:i:s");
   $content=trim($_POST['content']);
   $id_user=$_SESSION['id'];
   $level_importance=trim($_POST['level_importance']);
   $url_images = $_FILES['images'];
   $state=trim($_POST['state']);
   //IMAGE
   if($url_images['name'] === '' || $url_images['name'] === null){
      $name_images='cup-of-coffee-1280537_640.jpg';
      $type_img = 'image/jpg';
      $tp_name = '';
    }else{
      $name_images=$_FILES['images']['name'];
      $type_img = $_FILES['images']['type'];
      $tp_name = $_FILES['images']['tmp_name'];
    }
   
   $id_area = NULL;

//   VALIDATION TYPE IMAGE AND UPLOAD IMAGE
   if($type_img === 'image/jpeg' || $type_img == 'image/jpg' || $type_img == 'image/png' || $type_img === 'image/gif'){
        $img = imgValidation($tp_name,$name_images);
   }
   $sqlInjection = $title . $level_importance . $state;

   $acceptSql = sql_injection($sqlInjection);

   if ($acceptSql===true) {
      //Validation
      if (strlen($title)>0 && strlen($level_importance)>0 && strlen($state)>0 && strlen($content)>0) {
         $consultas=new publications();
         $result=$consultas->registerAnuncio($type_publications,$title,$date_publication,$content,$id_user,$level_importance,$state,$name_images,$id_area);
      }else{
         modalAlert('LLENE TODOS LOS CAMPOS OBLIGATORIOS','../../../view/admin/addAnuncio.php','warning',3);
         }
   }else{
      modalAlert('ERROR, NO INGRESE CARACTERES ESPECIALES EN LOS CAMPOS','../../../view/admin/addAnuncio.php','warning',3);
   }

 ?>