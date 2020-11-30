<?php 
require_once('../../translation/likes-comments.php');
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');
require_once('../../../controller/translation/translation-publications.php');

function countComm(){
      $id = $_POST['id_publications'];
      $contador = null;
    
      $contador = countComments($id);       
 
    return $contador;
}
echo countComm();
?>