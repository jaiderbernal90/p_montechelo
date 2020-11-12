<?php
//DEFINIR ZONA HORARIA
date_default_timezone_set('America/Bogota');
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');

function likeAdd(){
      session_start();
      $user = $_SESSION['id'];
      $publication = $_POST['id_publications'];
      $date = date("Y-m-d H:i:s");

      if(strlen($publication) > 0){
        $queries = new publications();
        //Genera consulta para añadir el like
        $result=$queries->addLike($user,$publication,$date);
      }
}

echo likeAdd();
?>
