<?php 

require_once('../../model/query/admin/queryRequest.php');
require_once('../../model/conection/conexion.php');

function traslationSolicitudes($type){
    $solicitudes = null;

    if ($type === '1') {
        $solicitudes = '<option value="1">Solicitud Vacaciones</option>';
    }else if ($type === '2') {
        $solicitudes = '<option value="2">Solicitud Otra</option>';
    }

    return $solicitudes;
}

function traslationSolicitudesView($type){
    $solicitudes = null;

    if ($type === '1') {
        $solicitudes = 'Solicitud Vacaciones';
    }else if ($type === '2') {
        $solicitudes = 'Solicitud';
    }

    return $solicitudes;
}

function traslationState($state){
    $stat = null;

    if ($state === '0') {
        $stat = '<option value="0">Pendiente</option>';
    }else if ($state === '1') {
        $stat = '<option value="1">Aprobada</option>';
    }else if ($state === '2') {
        $stat = '<option value="2">Rechazada</option>';
    }

    return $stat;
}
function traslationStateView($state){
    $stat = null;

    if ($state === '0') {
        $stat = '<span class="state-span">Pendiente</span>';
    }else if ($state === '1') {
        $stat = '<span class="state-span">Aprobada</span>';
    }else if ($state === '2') {
        $stat = '<span class="state-span">Rechazada</span>';
    }

    return $stat;
}

function traslationRespuesta($state){
    $stat = null;

    if ($state === '0') {
        $stat = '<option selected value="">Elija una opción</option>
        <option value="1">Aprobada</option>
        <option value="2">Rechazada</option>';
    }else if ($state === '1') {
        $stat = '<option value="1">Aprobada</option>
        <option value="2">Rechazada</option>';
    }else if ($state === '2') {
        $stat = '<option value="2">Rechazada</option>
        <option value="1">Aprobada</option>';
    }

    return $stat;
}

function traslationResponse($response){
    $res = null;

    if (strlen($response) > 0) {
        $res = '<p class="tite text-primary">Observaciones <span class="text-danger">*</span></p>
            <textarea name="response" id="" cols="50" rows="1" class="w-100 md-textarea form-control seleccionar" required>'.$response.'</textarea>';
    }else{
        $res = '<p class="tite text-primary">Observaciones <span class="text-danger">*</span></p>
            <textarea name="response" id="" cols="50" rows="1" class="w-100 md-textarea form-control seleccionar" required></textarea>';
    }
    

    return $res;
}
function traslationResponseUser($response){
    $res = null;

    if (strlen($response) > 0) {
        $res = '<p class="tite text-primary">Respuesta de la Solicitud <span class="text-danger">*</span></p>
            <textarea name="response" id="" cols="50" rows="3" class="w-100 md-textarea form-control seleccionar" required disabled>'.$response.'</textarea>';
    }else{
        $res = '<p class="tite text-primary">Respuesta de la Solicitud <span class="text-danger">*</span></p>
            <textarea name="response" id="" cols="50" rows="3" class="w-100 md-textarea form-control seleccionar" required disabled></textarea>';
    }
    

    return $res;
}

function traslationResponse1($response,$id){
    $res = null;
    if (strlen($response) > 0) {
        //Invocamos una clase para realizar consultas
        $queries = new request();
        //Genera consulta en la tabla publications para obtener la solicitud
        $result=$queries->userResponse($id);

        if($result){
            foreach($result as $f){
                    $res = '<article class="m-auto card card-two bg-light mt-3">
                                <!-- BODY -->
                                <div class="card-body-pub">
                                    <div class="desc-card pt-3 pb-2 header-card">
                                        <h5 class="text-white text-center">Respuesta de la Solicitud por:</h5>
                                        <div class="d-flex"><span class="text-white text-center m-auto">'.$f['email'].'</span></div>
                                    </div>
                                    <p class="text-copy text-center mt-3">'.$response.'</p>
                                </div>
                            </article>';        
            }
        }
    }
    return $res;

}

function traslationResButton($state,$id,$user){
    $res = null;
    $userLogin = $_SESSION['id'];

    if ($state != 1 && $user != $userLogin) {
        $res = '<div class="w-100 d-flex"><button class="btn btn-primary btn-md m-auto mb-2 waves-effect waves-light" onclick="reponseSolicitud(this)" id="'.$id.'">RESPONDER</button></div>';
    }

    return $res;
}


?>