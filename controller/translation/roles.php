<?php 

function translationRole($role){
    $rol = null;

    if($role === '3'){
        $rol = 'Colaborador';
    }elseif( $role === '2'){
        $rol = 'Lider';
    }elseif( $role === '1'){
        $rol = 'Administrador';
    }

    return $rol;
}
function translationState($state){
    $estado = null;

    if($state === '1'){
        $estado = 'Activo';
    }else{
        $estado = 'Inactivo';
    }

    return $estado;
}
function translationGenders($gender){
    $genero = null;

    if($gender === '1'){
        $genero = 'Masculino';
    }else if($gender === '2'){
        $genero = 'Femenino';
    }else if($gender === '3'){
        $genero = 'Otro';
    }

    return $genero;
}

?>