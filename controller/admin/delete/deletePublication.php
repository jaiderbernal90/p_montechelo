<?php 
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');
function publicationDelete(){
    $id = $_POST['id'];
    //QUERY
    $queries = new publications();
    //Genera consulta para borrar el comentario seleccionado
    $result=$queries->deletePublications($id);
    
}

echo publicationDelete();
?>