<?php 
require_once('../../../model/conection/conexion.php');
require_once('../../../model/query/ajax/publications.php');
require_once('../../../model/query/admin/queryPublications.php');
require_once('../../translation/translation-Publications.php');
require_once('../../translation/likes-comments.php');
require_once('../../translation/roles.php');

echo filterPublications();

function filterPublications(){
      $text = $_POST['select'];
      $repositorios = null;
        //VALIDACION DE CUAL FILTRO ELIGIO EL USUARIO
        switch(strtolower($text)){
          case 'desc':
            $queries = new ajaxPublications();
            //Genera consulta para buscar los usuarios más antiguos de la intranet
            $result=$queries->filterSearchDesc();
            break;
          case 'asc':
            $queries = new ajaxPublications();
            //Genera consulta para buscar los usuarios de manera descendente
            $result=$queries->filterSearchAsc();
            break;
          case '': 
            $queries = new publications();
            //Genera consulta para buscar lo que el usuario escribio en el input
            $result=$queries->showPublications();
            break;
        }

      if (!isset($result)) {
        //En caso de haya un error en la variable resultado
        $repositorios = '<div class="w-100 p-0 m-0 d-flex">
                            <h2 class="m-auto text-primary p-5 font-bold">UPSS.. No hay resultados</h2>
                        </div>';
      }else{
        session_start();
        foreach ($result as $f){
           if($f['type_publications'] == 2 ){
              $repositorios .= '<div class="row w-100 m-0 p-0 d-flex mt-5">
              <div class="col-12">
                  <article class="card m-auto">
                          <!-- HEADER -->
                          <header class="card-body-anun d-flex  bg-dark text-white">
                              <div class="col-12 second-body">
                                      <div class="d-flex w-100">
                                          <span class="text-left mr-auto">'.$f['email'].'</span>
                                          <span class="text-right ml-auto">'.translationOurs($f['date_publication']).'</span>
                                      </div>
                                      <div class="title-card px-4 py-2 text-center text-white">
                                          <a class="link-like text-white"  onclick="viewNotice(this)" id="'.$f['id_publications'].'">
                                              <h3 class="mb-0 border-bottom pb-2">'.$f['title'].'</h3>
                                          </a>
                                      </div>
                                      <div class="new-info">
                                          <span class="date-anunce">'.$f['email'].'</span>
                                          <span class="date-anunce">'.translationOurs($f['date_publication']).'</span>
                                      </div>         
                              </div>
                          </header>
                          <!-- BODY -->
                          <div class="card-body-pub px-3">
                              <div class="desc-card px-4 pt-5 text-center">
                                  <p>'.nl2br(htmlspecialchars($f['content'])).'</p>
                                  <div class="text-img">
                                      <img src="../../img/'.$f['url_images'].'" alt="Anuncio">
                                  </div>
                              </div>
                          </div>
                          <div class="col-12 d-flex border-top">
                              <!--Like-->
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
                  </div>
              </div>';
        }//end if
      }//end forEach;
    };//Endif
    return $repositorios;
}
?>