<?php
//DEFINIR ZONA HORARIA
date_default_timezone_set('America/Bogota');
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');

function likeCount(){
      $publication = $_POST['id_publications'];

      if(strlen($publication) > 0){
        $queries = new publications();
        //Genera consulta 
        $result=$queries->showLikes($publication);
      }
      return $result;
}

echo likeCount();
?>
