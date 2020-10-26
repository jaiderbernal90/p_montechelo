<?php
   require_once('../../../model/conection/conexion.php');
   require_once('../../../model/query/admin/queryUser.php');
   require_once('../../translation/roles.php');
   require_once('../../modales/modal.php');
   //VARIABLES
   session_start();

   $email=$_SESSION['email'];
   $passActual = $_SESSION['password'];
   $userPassAct = trim($_POST['passAct']);
   $EncryptPass=md5($userPassAct);
   $newPass = trim($_POST['newPass']);
   $confirmNewPass = trim($_POST['rePass']);

   
   if (strlen($EncryptPass)>0 && strlen($newPass)>0 && strlen($confirmNewPass)>0 ){
         if ($EncryptPass === $passActual) {
               if ($newPass === $confirmNewPass) {
                  $comprobarPass = strlen($newPass);
                  if ($comprobarPass>7) {
                     $password = md5($newPass);
                     if($password != $passActual){
                        $consultas = new consultas();
                        $result=$consultas->updatePass($password,$email);
                     }else{
                        modalAlert('LA NUEVA CONTRASEÑA NO PUEDE SER IGUAL QUE LA ANTERIOR' , '../../../view/admin/perfil.php' , 'warning' , '3');
                     }
                  }else{
                     modalAlert('LA CONTRASEÑA DEBE TENER AL MENOS 8 DIGITOS' , '../../../view/admin/perfil.php' , 'warning' , '3');
                  } 
               }else{
                  modalAlert('LAS CONTRASEÑAS NO COINCIDEN' , '../../../view/admin/perfil.php' , 'warning' , '3');
               }
         }else{
         	modalAlert('LA CONTRASEÑA ACTUAL ES INCORRECTA' , '../../../view/admin/perfil.php' , 'warning' , '3');
         }
         
   }else {
      modalAlert('LLENE TODOS LOS CAMPOS' , '../../../view/admin/perfil.php' , 'warning' , '3');
   };

 ?>