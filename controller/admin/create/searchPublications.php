<?php 
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/ajax/publications.php');
require_once('../../../model/query/admin/queryPublications.php');
require_once('../../translation/translation-Publications.php');
require_once('../../translation/likes-comments.php');
require_once('../../translation/roles.php');


function searchPublications(){
      $text = $_POST['input'];
      $repositorios = null;
    

      if(strlen($text) > 0){
        $queries = new ajaxPublications();
        //Genera consulta para buscar lo que el usuario escribio en el input
        $result=$queries->searchPublications($text);
      }else{
        $queries = new publications();
        //Genera consulta para buscar lo que el usuario escribio en el input
        $result=$queries->showPublications();
      }

      if (!isset($result)) {
        //En caso de haya un error en la variable resultado
        $repositorios = '<div class="w-100 p-0 m-0 d-flex">
                            <h2 class="m-auto text-primary p-5 font-bold">UPSS.. No hay resultados</h2>
                        </div>';
      }else{
          session_start();
        foreach ($result as $f){
                if($f['type_publications'] == 1 ){
                    $repositorios .= '<div class="row w-100 m-0 p-0 pb-3 border-bottom">
                    <div class="col-12 p-0 pl-3">
                        <div class="w-100 row m-0 d-flex pl-lg-5">
                            <header class="col-12 p-0 pb-4 pl-lg-5">
                                <a onclick="viewRepositorio(this)" id="'.$f["id_user"].'" class="m-auto">
                                    <div class="d-flex pt-3">
                                        <img src="../../img/'.$f['img_profile'].'" alt="" class="img-responsive avatar-pub rounded-circle mr-2 mr-md-3 " alt="Noticia">
                                        <div class="d-block mt-1">
                                            <span class="title-user">'.$f['email'].'</span>
                                            <span class="font d-block">'.translationOurs($f['date_publication']).'</span>
                                        </div>
                                    </div>
                                </a>
                            </header>
                        </div>
                        <article class="card mb-3">
                            <!-- HEADER -->
                            <header class="card-body-pub">
                                <a onclick="viewNotice(this)" id="'.$f['id_publications'].'">
                                    <img src="../../img/'.$f['url_images'].'" alt="NOTICE" class="rounded">
                                </a>
                            </header>
                            <!-- BODY -->
                            <div class="card-body-pub">
                                <div class="title-card px-4 py-2 text-center bg-light">
                                    <h3 class="mb-0">'.$f['title'].'</h3>
                                </div>
                                <div class="desc-card px-4 pt-3">
                                    <p class="text-center">'.nl2br(htmlspecialchars($f['content'])).'</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex border-top">
                                <div class=" mb-2 col-5 mt-1">  
                                '.ifLikes($_SESSION['id'],$f['id_publications']).'
                                    <span class="modal-span" data-toggle="modal" data-target="#modalLike" >'.countLikes($f['id_publications']).'</span>
                                </div>
                                <!--./LIKE-->
                                <!--Comments -->
                                <div class="mb-2 col-7 text-right mt-2 pt-1 cont-com">  
                                    <span class="modal-span-com" data-toggle="modal" data-target="#modalComment" id="'.$f['id_publications'].'" >Comentarios: </span><span><strong>'.countComments($f['id_publications']).'</strong></span>
                                </div>
                                <!--./Comments-->
                            </div>
                        </article>
                        <div class="d-flex w-100 text-center">
                            '.translationEditableButton($f['email'],$f['id_publications'],$f['type_publications']).'
                        </div>
                    </div>
                </div>';
                }    
            };//end if
    };
    return $repositorios;
}

echo searchPublications();
?>