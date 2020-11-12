<?php
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');
require_once('../../../controller/translation/translation-publications.php');

function likeAll(){
       $publication = $_POST['id_publications'];
       $resultado = null;
       //Invocamos una clase para realizar la consulta
       $queries = new publications();
       //Genera consulta de los likes de esta publicacion
       $result=$queries->showAllLikes($publication);

       if (!isset($result)) {//En caso de haya un error en la variable resultado
            $resultado = '<h2> NO HAY LIKES PARA MOSTRAR</h2>';
       }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los anuncios
           $lenght = sizeof($result);
           $resultado = '<div class="row w-100 m-0 p-0 mt-3 content mb-3 scrollbar-light-blue-menu scrollbar-light-blue">
           <div class="col-12">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
               <div class=" border-bottom mb-3 cont-like-mo border-danger d-flex">
                   <button class="button like-mod btn-danger rounded-circle col-3" disabled>
                           <i class="fa fa-heart text-white"></i>
                   </button>
                   <span class="pt-2 mt-1" style="font-size: 14px;">'.$lenght.'</span>
               </div>    
           </div> 
           <br>';
           foreach ($result as $f){
                    $resultado .= '<div class="col-12 mb-4">
                       <div class="card-modal">
                           <header class="d-flex">
                               <img src="../../img/'.$f['img_profile'].'" alt="user image">
                               <span class="name">'.ucfirst(strtolower($f['name'])).' '.ucfirst(strtolower($f['last_name'])).'</span>
                               <span class="time">'.translationOurs($f['date']).'</span>
                           </header>
                       </div>
                   </div>';
           };//end Foreach
           $resultado .= '</div>';
       };//end if
       return  $resultado;
}

echo likeAll();
?>