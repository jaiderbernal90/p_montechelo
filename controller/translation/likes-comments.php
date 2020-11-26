<?php 
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




?>