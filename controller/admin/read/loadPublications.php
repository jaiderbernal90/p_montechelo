<?php
        require_once('../../controller/sessions/security/securityAdmin.php');
        require_once('../../controller/translation/translation-publications.php');
        require_once('../../model/query/admin/queryPublications.php');
        require_once('../../model/conection/conexion.php');


        function loadPublications(){ //función para cargar publicaciones
            //Invocamos una clase para realizar consultas del administrador
            $queries = new publications();
            //Genera consulta en la tabla user para obtener las publicaciones
            $result=$queries->showPublications();

            if (!isset($result)) {//En caso de haya un error en la variable resultado
                echo '<h2> NO HAY PUBLICACIONES PARA MOSTRAR</h2>';
            }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar las publicaciones
               foreach ($result as $f){  
                if($f['type_publications'] == 1 ){
                    echo '<div class="row w-100 m-0 p-0 pb-3 border-bottom">
                    <div class="col-12">
                        <div class="w-100 row m-0 pl-2 d-flex pl-lg-5">
                            <header class="col-12 p-0 pb-4 pl-lg-5">
                                <a onclick="viewRepositorio(this)" id="'.$f["id_user"].'" class="m-auto">
                                    <div class="d-flex pt-3">
                                        <img src="../../img/'.$f['img_profile'].'" alt="" width="50px" height="50px" class="img-responsive rounded-circle mr-3" alt="Noticia">
                                        <div class="d-block mt-1">
                                            <span style="font-weight: 500;">'.$f['email'].'</span>
                                            <span class="font d-block">'.translationOurs($f['date_publication']).'</span>
                                        </div>
                                    </div>
                                </a>
                            </header>
                        </div>
                        <article class="card mb-5">
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
                                <div class="mb-2 col-7 text-right mt-2 pt-1">  
                                    <span>Comentarios:</span><span><strong> 55</strong></span>
                                </div>
                                <!--./Comments-->
                            </div>
                        </article>
                    </div>
                </div>';
                }    
                };//end foreach
            };//end if
        };
        // ./ cierre función para cargar publicaciones
        function loadAnuncios(){ //función para cargar anuncios
            //Invocamos una clase para realizar consultas del administrador
            $queries = new publications();
            //Genera consulta en la tabla user para obtener los anuncios
            $result=$queries->showPublications();

            if (!isset($result)) {//En caso de haya un error en la variable resultado
                echo '<h2> NO HAY ANUNCIOS PARA MOSTRAR</h2>';
            }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los anuncios
                foreach ($result as $f){
                    if($f['type_publications'] == 2 ){
                        echo '<div class="row w-100 m-0 p-0 d-flex mt-5">
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
                                                        <h3 class="mb-0">'.$f['title'].'</h3>
                                                    </a>
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
                                        <div class="mb-2 col-7 text-right mt-2 pt-1">  
                                            <span>Comentarios:</span><span><strong> 55</strong></span>
                                        </div>
                                        <!--./Comments-->
                                    </div>
                                </article>
                            </div>
                        </div>';
                    }
                };//end Foreach
            };//end if
        };
        // ./ cierre función para contar likes de una publicacion
        function countLikes($id){
             //Invocamos una clase para realizar consultas del administrador
             $queries = new publications();
             //Genera consulta en la tabla user para obtener los anuncios
             $result=$queries->showLikes($id);

            if (!isset($result)) {//En caso de haya un error en la variable resultado
                return 0;
            }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar las publicaciones
                return $result;
            }

        }
        // ./ cierre función para  contar likes de una publicacion
        function ifLikes($id,$publication){
            $resultado = null;
            //Invocamos una clase para realizar consultas del administrador
            $queries = new publications();
            //Genera consulta en la tabla user para obtener los anuncios
            $result=$queries->searchLike($id,$publication);

           if (!isset($result)) {//En caso de haya un error en la variable resultado
                 $resultado = '<button class="button like rounded-circle" id='.$publication.'><i class="fa fa-heart" id='.$publication.'></i></button>';
                return $resultado;
           }else{
                if($result > 0){
                    $resultado = '<button class="button like rounded-circle is-active" id='.$publication.'><i class="fa fa-heart" id='.$publication.'></i></button>';
                }else{
                    $resultado = '<button class="button like rounded-circle" id='.$publication.'><i class="fa fa-heart" id='.$publication.'></i></button>';
                }
                 return $resultado;
            }
       }

       function noticeInformation($id){
        //Invocamos una clase para realizar consultas
        $queries = new publications();
        //Genera consulta en la tabla publications para obtener las noticias
        $result=$queries->noticeInfo($id);

        if (!isset($result)) {
            echo '<h2> NO HAY NOTICIAS PARA MOSTRAR</h2>';
        } else {
            foreach ($result as $f) {
                echo '<section class="container-fluid w-100 p-0 m-0">
                        <div class="row w-100 m-0 p-0 ">
                            <div class="col-12 p-0 my-5 d-flex">
                                '.translationEditable($f['email'],$f['title'],$f['id_publications']).'
                            </div>
                        </div>
                        <div class="row w-100 m-0 p-0 ">
                            <div class="col-12">
                                <article class="card card-two">
                                    <!-- HEADER -->
                                    <header class="card-body-pub d-flex border-bottom">                                          
                                        <img src="../../img/'.$f['url_images'].'" alt="" class="rounded m-auto img-fluid img-plus">
                                    </header>
                                    <!-- BODY -->
                                    <div class="card-body-pub">
                                        <div class="desc-card px-5 pt-4 text-center">
                                            <p class="text-copy">'.nl2br(htmlspecialchars($f['content'])).'</p>
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
                                        <div class="mb-2 col-7 text-right mt-2 pt-1">  
                                            <span>Comentarios:</span><span><strong> 55</strong></span>
                                        </div>
                                        <!--./Comments-->                                            
                                    </div>
                                </article>
                            </div>
                            </div>
                    </section>';
            }
        }
    }
    function loadNoticiasHome(){

        $queries = new publications();
        //Genera consulta en la tabla user para obtener los anuncios
        $result=$queries->showPublicationsHome();


        if(!$result){
            echo '<h2>NO HAY NOTICIAS PARA MOSTRAR</h2>';
        }else{
            foreach($result as $f){
                echo '<!-- BODY NEWS -->
                    <div class="app">
                        <header>
                                <img src="../../img/'.$f['url_images'].'" alt="Earth News">
                        </header>
                        <article>
                            <h1>'.$f['title'].'</h1>
                            <p>'.nl2br(htmlspecialchars($f['content'])).'</p>
                            <a onclick="viewNotice(this)" id="'.$f['id_publications'].'">Ver más</a>
                        </article>
                    </div>';
            }
        }
    }
    function loadAnunciosHome(){

        $queries = new publications();
        //Genera consulta en la tabla user para obtener los anuncios
        $result=$queries->showAnunciosHome();


        if(!$result){
            echo '<h2>NO HAY NOTICIAS PARA MOSTRAR</h2>';
        }else{
            foreach($result as $f){
                echo ' <li>
                            <div class="card-anun shadow text-center m-auto">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top bg-dark text-center">
                                        <h3 class="uk-card-title text-white pt-3"  onclick="viewNotice(this)" id="'.$f['id_publications'].'">'.$f['title'].'</h3>
                                        <div class="w-100 text-right pr-3">
                                            <span class="mr-auto text-white">'.translationOurs($f['date_publication']).'</span>
                                        </div>
                                    </div>
                                    <div class="uk-card-body text-center">
                                        <p>'.nl2br(htmlspecialchars($f['content'])).'</p>
                                    </div>
                                </div>
                            </div>
                        </li>';
            }
        }
    }
    function numPub(){ //función para cargar usuarios
        $resultado=null;
        //Invocamos una clase para realizar consultas del administrador
        $queries = new publications();
        //Genera consulta en la tabla user para obtener los usuarios
        $result=$queries->numPub();

        return $result;
    }
?>
