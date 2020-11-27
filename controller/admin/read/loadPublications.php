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
                                <div class="d-flex w-100 text-center mt-4">
                                '.translationEditableButton($f['email'],$f['id_publications'],$f['type_publications']).'
                            </div>
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
        // ./ cierre función para contar likes de una publicacion
        function countComments($id){
            //Invocamos una clase para realizar consultas del administrador
            $queries = new publications();
            //Genera consulta en la tabla user para obtener los anuncios
            $result=$queries->showComments($id);

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
                                '.translationEditable($f['email'],$f['title'],$f['id_publications'],$f['type_publications']).'
                            </div>
                        </div>
                        <div class="row w-100 m-0 p-0 ">
                            <div class="col-12">
                                <article class="card card-two mb-5">
                                    <!-- HEADER -->
                                    <header class="card-body-pub d-flex border-bottom">                                          
                                        <img src="../../img/'.$f['url_images'].'" alt="" class="rounded m-auto img-fluid img-plus">
                                    </header>
                                    <!-- BODY -->
                                    <div class="card-body-pub">
                                        <div class="desc-card px-5 pt-4 text-center">
                                            <p class="">'.nl2br(htmlspecialchars($f['content'])).'</p>
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
                                        <div class="mb-2 col-7 text-right mt-2 pt-1 cont-coms" id="'.$f['id_publications'].'">  
                                            <span>Comentarios: </span><span><strong>'.countComments($f['id_publications']).'</strong></span>
                                        </div>
                                </article>
                                <!--./Comments-->
                                <div class="comment-container">
                                '.commentShow($f['id_publications']).'
                                </div>
                                </div>
                            </div>
                            </div>
                    </section>';
            }
        }
    }
     //MOSTRAR COMMENTARIOS DE UNA PUBLICACIÓN
     function commentShow($id){
         $resultado = null; 
        //Invocamos una clase para realizar consultas
        $queries = new publications();
        //Genera consulta en la tabla publications para obtener las noticias
        $result=$queries->searchComments($id);

       if(!isset($result)) {
           $resultado = '<div class="col-12 mt-5">
                            <div class="media-comment m-auto px-0 px-md-5 pt-0 w-50 text-center">
                                    <span class="text-center m-auto"> Esta publicación no tiene comentarios </span>
                            </div>  
                        </div>
                        <div class="col-12 mt-5">
                        <div class="media-comment m-auto px-0 px-md-5 pt-0 w-50 d-flex">
                            <img class="d-flex rounded-circle avatar-comment z-depth-1-half mr-3" src="../../img/'.$_SESSION['img_profile'].'"
                                alt="Avatar">
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold blue-text text-user">'.ucfirst($_SESSION['name']).' '.ucfirst($_SESSION['last_name']).'</h5>
                                <div class="w-100">
                                    <div class="md-form form-group green-border-focus my-0">
                                        <textarea name="" id="'.$id.'" cols="50" rows="1" class="textareaElement w-100 md-textarea form-control" required placeholder="Agregar comentario"  maxlength="4000"  contenteditable ></textarea>
                                    </div>
                                    <button class="btn btn-sm btn-primary m-0 btn-send" id="'.$id.'">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 text-center">
              <div class="spinner-grow text-primary text-center d-none" role="status">
                  <span class="sr-only">Loading...</span>
              </div>
        </div>';
       } else {
           foreach ($result as $f) {
               $resultado .= '<div class="col-12 mt-3">
                                <div class="media-comment m-auto px-0 px-md-5 pt-0 w-50 d-flex">
                                    <img class="d-flex rounded-circle avatar-comment z-depth-1-half mr-3" src="../../img/'.$f['img_profile'].'">
                                    <div class="media-body mb-3">
                                    <div class="d-flex">
                                        <h5 class="mt-2 font-weight-bold blue-text text-user">'.ucfirst($f['name']).' '.ucfirst($f['last_name']).'</h5><span class="ml-auto mt-2" style="font-size:15px">'.translationOurs($f['date']).'</span>
                                        </div>
                                        <div class="w-100">
                                            <p class="text-copy">'.nl2br(htmlspecialchars($f['content'])).'</p>
                                        </div>
                                        '.ifDeleteComment($_SESSION['email'], $f['email'],$f['id']).'
                                    </div>
                                </div>  
                            </div>';
           }
           $resultado.='<div class="col-12">
                            <div class="media-comment m-auto px-0 px-md-5 pt-0 w-50 d-flex">
                                <img class="d-flex rounded-circle avatar-comment z-depth-1-half mr-3" src="../../img/'.$_SESSION['img_profile'].'"
                                    alt="Avatar">
                                <div class="media-body mb-5">
                                    <h5 class="mt-0 font-weight-bold blue-text text-user">'.ucfirst($_SESSION['name']).' '.ucfirst($_SESSION['last_name']).'</h5>
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
                    </div>';
       }
       return $resultado;

  }
    function updateNotice($id){
        //Invocamos una clase para realizar consultas del administrador
        $queries = new publications();
        //Genera consulta en la tabla publications para obtener las noticias
        $result=$queries->noticeInfo($id);

        if (!isset($result)) {
            echo '<h2> NO HAY NOTICIA PARA MOSTRAR</h2>';
        } else {
            foreach ($result as $f) {
                echo '<div class="form-row">
                    <div class="col-12 text-left text-infor">
                        <span><span class="text-danger">*</span> Campos obligatorios</span>
                    </div>
                </div>
                <!-- Grid row -->
                <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                    <!-- Material input -->
                    <div class="md-form form-group">
                        <p class="tite text-primary">Título de la Noticia <span class="text-danger">*</span></p>
                        <input type="text" class="form-control inputs seleccionar" name="title" placeholder="Título" required maxlength="200" disabled value="'.$f['title'].'">
                    </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-6">
                        <!-- Material input -->
                        <div class="md-form form-group mt-2">
                            <p class="tite text-primary">Nivel de importancia <span class="text-danger">*</span></p>
                            <select class="seleccionar md-form w-100 selects" name="level_importance" disabled required>
                                <option value="" disabled>Elija una opción</option>'.
                                translationLevelImportance($f['level_importance']).'</select>   
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6">
                    <!-- Material input -->
                    <div class="md-form form-group mt-2">
                        <p class="tite text-primary">Estado <span class="text-danger">*</span></p>
                            <select class="seleccionar md-form w-100 selects" name="state" disabled required>
                                <option value="" disabled>Elija una opción</option>'.translationStat($f['state']).'</select>
                    </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <!-- Material input -->
                        <div class="md-form form-group green-border-focus">
                            <p class="tite text-primary">Contenido de la Noticia <span class="text-danger">*</span></p>
                            <textarea disabled name="content" id="comment" class="w-100 md-textarea form-control seleccionar " required>'.$f['content'].'</textarea>
                        </div>
                    </div>
                    <!-- Grid column -->   
                </div>
                 <!-- Grid row -->
                 <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <!-- Material input -->
                            <div class="md-form form-group rounded">
                                <p class="tite text-primary ">Imagen de la noticia</p>
                                    <div class="row w-100 m-0 p-0 mt-3">
                                        <div class="col-12 mt-3 text-center">
                                            <img src="../../img/'.$f['url_images'].'" alt="" id="mostrarimagen" class="img-change shadow">
                                        </div>
                                    </div>  
                                <input type="file" disabled name="url_images" id="url_images" class="mt-3 seleccionar " value="'.$f['url_images'].'" accept=".png, .jpeg, .jpg, .gif">
                                <input type="text" name="img_user" class="mt-3 d-none" value="'.$f['url_images'].'">
                            </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <!-- FORM -->
                <input type="number" value="'.$f['id_publications'].'" name="id" class="mt-3 seleccionar d-none">
                <div class="row m-0 p-0">
                <div class="col-12">               
                   <div class="form-row d-flex mt-5">
                           <div class="col-5 text-md-right text-center">
                               <button type="button" class="btn btn-info" onclick="viewNotice(this)" id="'.$id.'" ><a class="text-white" >Volver</a></button>
                           </div> 
                           <div class="col-1 text-md-right text-center">
                               <button type="button" class="btn btn-info" id="mod"><a class="text-white">Modificar</a></button>
                           </div> 
                           <div class="col-3  text-center">
                               <button type="submit" class="seleccionar btn btn-special btn-info" disabled id="save"><a class="text-white">Guardar</a></button>
                           </div>
                       </div>   
                </div>
            </div>    ';
            }
        }
    }
    // UPDATE ANUNCIO
    function updateAnuncio($id){
        //Invocamos una clase para realizar consultas del administrador
        $queries = new publications();
        //Genera consulta en la tabla publications para obtener las noticias
        $result=$queries->noticeInfo($id);

        if (!isset($result)) {
            echo '<h2> NO HAY NOTICIA PARA MOSTRAR</h2>';
        } else {
            foreach ($result as $f) {
                echo '<div class="form-row">
                    <div class="col-12 text-left text-infor">
                        <span><span class="text-danger">*</span> Campos obligatorios</span>
                    </div>
                </div>
                <!-- Grid row -->
                <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                    <!-- Material input -->
                    <div class="md-form form-group">
                        <p class="tite text-primary">Título del Anuncio <span class="text-danger">*</span></p>
                        <input type="text" class="form-control inputs seleccionar" name="title" placeholder="Título" required maxlength="200" disabled value="'.$f['title'].'">
                    </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-6">
                        <!-- Material input -->
                        <div class="md-form form-group mt-2">
                            <p class="tite text-primary">Nivel de importancia <span class="text-danger">*</span></p>
                            <select class="seleccionar md-form w-100 selects" name="level_importance" disabled required>
                                <option value="" disabled>Elija una opción</option>'.
                                translationLevelImportance($f['level_importance']).'</select>   
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6">
                    <!-- Material input -->
                    <div class="md-form form-group mt-2">
                        <p class="tite text-primary">Estado <span class="text-danger">*</span></p>
                            <select class="seleccionar md-form w-100 selects" name="state" disabled required>
                                <option value="" disabled>Elija una opción</option>'.translationStat($f['state']).'</select>
                    </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <!-- Material input -->
                        <div class="md-form form-group green-border-focus">
                            <p class="tite text-primary">Contenido del Anuncio <span class="text-danger">*</span></p>
                            <textarea disabled name="content" id="" cols="50" rows="3" class="w-100 md-textarea form-control seleccionar " required>'.$f['content'].'</textarea>
                        </div>
                    </div>
                    <!-- Grid column -->   
                </div>
                 <!-- Grid row -->
                 <div class="form-row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <!-- Material input -->
                            <div class="md-form form-group rounded">
                                <p class="tite text-primary ">Imagen del Anuncio</p>
                                    <div class="row w-100 m-0 p-0 mt-3">
                                        <div class="col-12 mt-3 text-center">
                                            <img src="../../img/'.$f['url_images'].'" alt="" id="mostrarimagen" class="img-change shadow">
                                        </div>
                                    </div>  
                                <input type="file" disabled name="url_images" id="url_images" class="mt-3 seleccionar " value="'.$f['url_images'].'" accept=".png, .jpeg, .jpg, .gif">
                                <input type="text" name="img_user" class="mt-3 d-none" value="'.$f['url_images'].'">
                            </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!-- Grid row -->
                <!-- FORM -->
                <input type="number" value="'.$f['id_publications'].'" name="id" class="mt-3 seleccionar d-none">';
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
