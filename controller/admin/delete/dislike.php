<?php
//DEFINIR ZONA HORARIA
date_default_timezone_set('America/Bogota');
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');

function likeDelete(){
      session_start();
      $user = $_SESSION['id'];
      $publication = $_POST['id_publications'];

      if(strlen($publication) > 0){
        $queries = new publications();
        //Genera consulta para borrar el like
        $result=$queries->deleteLike($user,$publication);
      }
}

echo likeDelete();
?>
