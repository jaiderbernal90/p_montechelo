<?php
   require_once('../../../model/conection/conexion.php');
   require_once('../../../model/query/admin/queryUser.php');
   require_once('../../translation/roles.php');
   require_once('../../modales/modal.php');

   error_reporting(0);

   session_start();
   $email=$_SESSION['email'];
    //INFO IMAGEN
    $img_profile=$_FILES['img_profile']['name'];

   if(strlen($img_profile)>0){
        $extension = pathinfo($img,PATHINFO_EXTENSION);
        $img=$doc.'.'.$extension;
        $tmp=$_FILES['img_profile']['tmp_name'];
        //UBICACIÓN DE LA IMAGEN
        $des='../../../img/'.$img_profile.'';
        $destino='../../../img/';
        //CARGAR IMAGEN
        move_uploaded_file($_FILES['img_profile']['tmp_name'],$destino.$img_profile);
        $_SESSION['img_profile']=$img_profile;

        $queries = new consultas();
        $queries->updatePhoto($img_profile,$email);
   }else{
        modalAlert('NO SE SUBIO NINGÚN ARCHIVO VALIDO' , '../../../view/admin/changePhoto.php' , 'warning' , '3');
   }
    
?>