<?php 
date_default_timezone_set('America/Bogota');
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/ajax/publications.php');
require_once('../../../model/query/admin/queryPublications.php');
require_once('../../translation/translation-Publications.php');
require_once('../../translation/likes-comments.php');
require_once('../../translation/roles.php');

echo filterPublications();

function filterPublications(){
    session_start();
      $resultado = null;
      $text = $_POST['comment'];
      $id_publications = $_POST['id_publications'];
      $user = $_SESSION['id'];
      $date = date("Y-m-d H:i:s");
    //QUERY
    $queries = new publications();
    //Genera consulta para buscar los usuarios más antiguos de la intranet
    $result=$queries->addCommentary($text,$id_publications,$user,$date);
    
}
?>