<?php
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/admin/queryPublications.php');
require_once('../../../controller/translation/translation-publications.php');

function commentsAll(){
    session_start();
       $publication = $_POST['id_publications'];
       $resultado = null;
       //Invocamos una clase para realizar la consulta
       $queries = new publications();
       //Genera consulta de los likes de esta publicacion
       $result=$queries->searchComments($publication);

       if (!isset($result)) {//En caso de haya un error en la variable resultado
            $resultado = '<div class="row w-100 m-0 p-0 mt-3 content mb-3 scrollbar-light-blue-menu scrollbar-light-blue">
            <div class="col-12 border-bottom">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                 <h5 class="text-center"><strong>COMENTARIOS</strong></h5>
            </div> 
            <br>
            <div class="col-12 mt-5 mb-5">
                    <div class="m-auto px-0 pt-0 d-flex">
                        <h6 class="text-primary m-auto ">Nadie ha comentado todavía esta publicación</h6>
                    </div>  
               </div>
               <div class="col-12">
                <div class="media m-auto px-0 pt-0 w-100">
                    <img class="d-flex rounded-circle avatar-comment z-depth-1-half mr-3" src="../../img/'.$_SESSION['img_profile'].'"
                        alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold blue-text">'.ucfirst($_SESSION['name']).' '.ucfirst($_SESSION['last_name']).'</h5>
                        <div class="w-100">
                            <div class="md-form form-group green-border-focus my-0">
                                <textarea name="" id="'.$publication.'" cols="50" rows="1" class="textareaElement w-100 md-textarea form-control" required placeholder="Agregar comentario"  maxlength="4000"  contenteditable ></textarea>
                            </div>
                            <button class="btn btn-sm btn-primary m-0 btn-send" id="'.$publication.'">ENVIAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 text-center">
                        <div class="spinner-grow text-primary text-center d-none" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                  </div>';
       }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los anuncios
           $resultado = '<div class="row w-100 m-0 p-0 mt-3 content mb-3 scrollbar-light-blue-menu scrollbar-light-blue">
           <div class="col-12 border-bottom mb-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="text-center"><strong>COMENTARIOS</strong></h5>
           </div> 
           <br>';
           foreach ($result as $f){
                    $resultado .= '<div class="col-12 pb-3">
                    <div class="m-auto px-0 pt-0 d-flex">
                       <img class="d-flex rounded-circle avatar-comment z-depth-1-half mr-3" src="../../img/'.$f['img_profile'].'">
                       <div class="media-body">
                        <div class="d-flex">
                           <h5 class="mt-2 font-weight-bold blue-text">'.ucfirst($f['name']).' '.ucfirst($f['last_name']).'</h5><span class="ml-auto mt-2" style="font-size:15px">'.translationOurs($f['date']).'</span>
                           </div>
                           <div class="w-100">
                               <p class="text-copy">'.nl2br(htmlspecialchars($f['content'])).'</p>
                           </div>
                           '.ifDeleteComment($_SESSION['email'], $f['email'],$f['id']).'
                          
                       </div>
                    </div>  
               </div>';
           };//end Foreach
           $resultado .= '<div class="col-12">
                            <div class="media w-100">
                                <img class="d-flex rounded-circle avatar-comment z-depth-1-half mr-3" src="../../img/'.$_SESSION['img_profile'].'"
                                    alt="Avatar">
                                <div class="media-body">
                                    <h5 class="mt-0 font-weight-bold blue-text">'.ucfirst($_SESSION['name']).' '.ucfirst($_SESSION['last_name']).'</h5>
                                    <div class="w-100">
                                        <div class="md-form form-group green-border-focus my-0">
                                            <textarea cols="50" rows="1" class="textareaElement w-100 md-textarea form-control" required placeholder="Agregar comentario" maxlength="4000" contenteditable></textarea>
                                        </div>
                                        <button class="btn btn-sm btn-primary m-0 btn-send" id="'.$f['id_publications'].'">ENVIAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-center">
                        <div class="spinner-grow text-primary text-center d-none" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                  </div>
                 ';
       };//end if
       return  $resultado;
}

echo commentsAll();
?>