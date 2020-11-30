<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/translation/translation-request.php');
    require_once('../../controller/translation/translation-publications.php');
    require_once('../../model/query/admin/queryRequest.php');
    require_once('../../model/conection/conexion.php');

function loadSolicitudes(){ //función para cargar solicitudes
    $id = $_SESSION['id'];
    //Invocamos una clase para realizar consultas del administrador
    $queries = new request();
    //Genera consulta en la tabla user para obtener las publicaciones
    $result=$queries->showSolicitudes($id);

    if (!isset($result)) {//En caso de haya un error en la variable resultado
        echo '<h2 class="text-center">NO HAY SOLICITUDES PARA MOSTRAR</h2>';
    }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar las publicaciones
        foreach ($result as $f){
            echo '<div class="row w-100 m-0 p-0 pb-3 border-bottom">
            <div class="col-12">
                <div class="w-100 row m-0 pl-2 d-flex pl-lg-5">
                    <header class="col-12 p-0 pb-4 pl-lg-5">
                        <a onclick="viewRepositorio(this)" id="'.$f["id_user"].'" class="m-auto">
                            <div class="d-flex pt-3">
                                <img src="../../img/'.$f['img_profile'].'" alt="" width="50px" height="50px" class="img-responsive rounded-circle mr-3" alt="solicitid">
                                <div class="d-block mt-1">
                                    <span style="font-weight: 500;">'.$f['email'].'</span>
                                    <span class="font d-block">'.translationOurs($f['date_request']).'</span>
                                </div>
                            </div>
                        </a>
                    </header>
                </div>
                <article class="card mb-5">
                    <!-- BODY -->
                    <div class="card-body-pub">
                        <div class="title-card px-4 py-2 text-center bg-header">
                            <h3 onclick="viewSolicitud(this)" id="'.$f['id_request'].'" class="mb-0">'.traslationSolicitudes($f['type']).'</h3>
                        </div>
                        <div class="desc-card bg-light">
                            <div class="d-flex w-100">
                            '.traslationStateView($f['state']).'
                            </div>
                            <p class="text-center text-content-soli">'.nl2br(htmlspecialchars($f['content'])).'</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>';
        }    
    };//end foreach
};
// ./ cierre función para cargar solicitudes ADMIN
function loadSolicitudesAdmin(){ //función para cargar solicitudes
    //Invocamos una clase para realizar consultas del administrador
    $queries = new request();
    //Genera consulta en la tabla user para obtener las publicaciones
    $result=$queries->showSolicitudesAll();

    if (!isset($result)) {//En caso de haya un error en la variable resultado
        echo '<h2 class="text-center"> NO HAY SOLICITUDES PARA MOSTRAR</h2>';
    }else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar las publicaciones
        foreach ($result as $f){
            echo '<div class="row w-100 m-0 p-0 pb-3 border-bottom">
            <div class="col-12">
                <div class="w-100 row m-0 pl-2 d-flex pl-lg-5">
                    <header class="col-12 p-0 pb-4 pl-lg-5">
                        <a onclick="viewRepositorio(this)" id="'.$f["id_user"].'" class="m-auto">
                            <div class="d-flex pt-3">
                                <img src="../../img/'.$f['img_profile'].'" alt="" width="50px" height="50px" class="img-responsive rounded-circle mr-3" alt="solicitid">
                                <div class="d-block mt-1">
                                    <span style="font-weight: 500;">'.$f['email'].'</span>
                                    <span class="font d-block">'.translationOurs($f['date_request']).'</span>
                                </div>
                            </div>
                        </a>
                    </header>
                </div>
                <article class="card mb-3">
                    <!-- BODY -->
                    <div class="card-body-pub">
                        <div class="title-card px-4 py-2 text-center bg-header">
                            <h3 onclick="viewSolicitudAdmin(this)" id="'.$f['id_request'].'" class="mb-0">'.traslationSolicitudes($f['type']).'</h3>
                            </div>
                            <div class="desc-card bg-light">
                                <div class="d-flex w-100">
                                '.traslationStateView($f['state']).'
                                </div>
                                <p class="text-center text-content-soli">'.ucFirst(nl2br(htmlspecialchars($f['content']))).'</p>
                            </div>
                </article>
                <div class="m-auto d-flex">
                '.traslationResButton($f['state'],$f['id_request'],$f['id_user']).'
                    </div>
            </div>
        </div>';
        }    
    };//end foreach
};
// ./ cierre función para cargar solicitudes ADMIN

function solicitudInformation($id){
    //Invocamos una clase para realizar consultas
    $queries = new request();
    //Genera consulta en la tabla publications para obtener la solicitud
    $result=$queries->solicitudInfo($id);

    if (!isset($result)) {
        echo '<h2> NO HAY SOLICITUD PARA MOSTRAR</h2>';
    } else {
        foreach ($result as $f) {
            echo '<section class="container-fluid w-100 p-0 m-0">
                        <article class="card mb-3 mt-4">
                        <!-- BODY -->
                        <div class="card-body-pub">
                            <div class="title-card px-4 py-2 text-center bg-header d-flex">
                                <h3 class="mb-0 m-auto">'.traslationSolicitudesView($f['type']).'<i class="fas fa-pen ml-3 fa-1x cursor" onclick="updateSolicitud(this)" id="'.$id.'"></i></h3>
                                </div>
                                <div class="desc-card bg-light">
                                    <div class="d-flex w-100">
                                    '.traslationStateView($f['state']).'
                                    </div>
                                    <p class="text-center text-content-soli">'.ucFirst(nl2br(htmlspecialchars($f['content']))).'</p>
                                </div>
                    </article>
                    '.traslationResponse1($f['response'],$f['id_user_response']).'
                    '.traslationResButton($f['state'],$f['id_request'],$f['id_user']).'
                </section>';
        }
    }
}

function solicitudInformationAdmin($id){
    //Invocamos una clase para realizar consultas
    $queries = new request();
    //Genera consulta en la tabla publications para obtener la solicitud
    $result=$queries->solicitudInfo($id);

    if (!isset($result)) {
        echo '<h2> NO HAY SOLICITUD PARA MOSTRAR</h2>';
    } else {
        foreach ($result as $f) {
            echo '<section class="container-fluid w-100 p-0 m-0">
                        <article class="card mb-3 mt-4">
                        <!-- BODY -->
                        <div class="card-body-pub">
                            <div class="title-card px-4 py-2 text-center bg-header">
                                <h3 onclick="viewSolicitudAdmin(this)" id="'.$f['id_request'].'" class="mb-0">'.traslationSolicitudesView($f['type']).' por:</h3>
                                <span><strong>'.$f['email'].'</strong></span>
                                </div>
                                <div class="desc-card bg-light">
                                    <div class="d-flex w-100">
                                    '.traslationStateView($f['state']).'
                                    </div>
                                    <p class="text-center text-content-soli">'.ucFirst(nl2br(htmlspecialchars($f['content']))).'</p>
                                </div>
                    </article>
                    '.traslationResponse1($f['response'],$f['id_user_response']).'
                    '.traslationResButton($f['state'],$f['id_request'],$f['id_user']).'
                </section>';
        }
    }
}

function updateSolicitud($id){
    //Invocamos una clase para realizar consultas del administrador
    $queries = new request();
    //Genera consulta en la tabla publications para obtener las solicitud
    $result=$queries->solicitudInfo($id);

    if (!isset($result)) {
        echo '<h2> NO HAY SOLICITUD PARA MOSTRAR</h2>';
    } else {
        foreach ($result as $f) {
            echo '<article class="card mb-3 mt-4">
            <!-- BODY -->
            <div class="card-body-pub">
                <div class="title-card px-4 py-2 text-center bg-header">
                    <h3 onclick="viewSolicitudAdmin(this)" id="'.$f['id_request'].'" class="mb-0">'.traslationSolicitudesView($f['type']).'</h3>
                    </div>
                    <div class="desc-card bg-light">
                        <div class="d-flex w-100">
                        '.traslationStateView($f['state']).'
                        </div>
                        <p class="text-center text-content-soli">'.ucFirst(nl2br(htmlspecialchars($f['content']))).'</p>
                    </div>
        </article>
        <form action="../../controller/admin/update/responseSolicitud.php" method="POST" enctype="multipart/form-data" class="form mt-5">
            <div class="col-md-12 m-auto d-flex anch-res p-0 mb-4">
            <!-- Material input -->
            <div class="md-form form-group mt-2 ">
                <p class="mb-0 text-primary">Respuesta <span class="text-danger">*</span></p>
                <div class="custom-control custom-radio ml-4">
                    <input type="radio" class="custom-control-input " id="defaultGroupExample1" name="state" checked value="1">
                    <label class="custom-control-label" for="defaultGroupExample1">Aprobar</label>
                </div>

                <!-- Group of default radios - option 2 -->
                <div class="custom-control custom-radio ml-4 mt-2">
                    <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="state" value="0">
                    <label class="custom-control-label" for="defaultGroupExample2">Rechazar</label>
                </div>
                </div>
            </div>
            <div class="form-row">
            <!-- Grid column -->
            <div class="col-md-12">
                <!-- Material input -->
                <div class="md-form form-group green-border-focus anch-res m-auto ml-3" >
                    '.traslationResponse($f['response']).'
                </div>
            </div>
            <!-- Grid column -->   
        </div>
        <input type="number" value="'.$f['id_request'].'" name="id" class="mt-3 seleccionar d-none">
                <div class="row m-0 p-0">
                <div class="col-12">               
                <div class="form-row d-flex mt-3">
                        <div class="col-6 text-md-right text-center">
                            <button type="button" class="btn btn-info" ><a class="text-white" href="solicitudesAdmin.php">Volver</a></button>
                        </div>
                        <div class="col-6 text-md-left text-center">
                            <button type="submit" class="seleccionar btn btn-special btn-info" id="save"><a class="text-white">Enviar</a></button>
                        </div>
                    </div>   
                </div>
            </div>    
        </form>';
        }
    }
}
// UPDATE SOLICITUD
function updateSolicitudAdmin($id){
    //Invocamos una clase para realizar consultas del administrador
    $queries = new request();
    //Genera consulta en la tabla publications para obtener las solicitud
    $result=$queries->solicitudInfo($id);

    if (!isset($result)) {
        echo '<h2> NO HAY SOLICITUD PARA MOSTRAR</h2>';
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
                        <p class="tite text-primary">Tipo de Solicitud<span class="text-danger"></span></p>
                        <select class="seleccionar md-form w-100 selects" name="type" required>
                            '.traslationSolicitudes($f['type']).'</select>   
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group mt-2">
                    <p class="tite text-primary">Estado <span class="text-danger">*</span></p>
                        <select name="state" class="seleccionar md-form w-100 selects"  required>
                            '.traslationState($f['state']).'
                        </select>
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
                        <p class="tite text-primary">Contenido de la Solicitud<span class="text-danger"></span></p>
                        <textarea name="content" id="" cols="50" rows="3" class="w-100 md-textarea form-control seleccionar " required>'.$f['content'].'</textarea>
                    </div>
                </div>
                <!-- Grid column -->   
            </div>
            <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-12">
                    <!-- Material input -->
                    <div class="md-form form-group green-border-focus" disabled>
                        '.traslationResponse1($f['response'],$f['id_user_response']).'
                    </div>
                </div>
                <!-- Grid column -->   
            </div>
             <!-- Grid row -->
             <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-12">
                    <!-- Material input -->
                        
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <!-- Grid row -->
            <!-- FORM -->
            <input type="number" value="'.$f['id_request'].'" name="id" class="mt-3 seleccionar d-none">';
        }
    }
}
?>