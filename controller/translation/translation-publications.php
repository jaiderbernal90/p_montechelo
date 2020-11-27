<?php
    //FUNCION QUE EVALUA HACE CUANTO SE REALIZO LA PUBLICACION
    function translationDateAndHor($date){
        date_default_timezone_set('America/Bogota');
        $timestamp = strtotime($date);
        $diff = time() - intval($timestamp);

        if ($diff == 0){ 
            return 'Justo ahora';
        }else if ($diff > 604800){
            return date("d M Y",$timestamp);
        }else{
            $intervals = array
            (
            //1                   => array('año',    31556926),
            // $diff < 31556926    => array('mes',   2628000),
            // $diff < 2629744     => array('semana',    604800),
                $diff < 604800      => array('día',     86400),
                $diff < 86400       => array('hora',    3600),
                $diff < 3600        => array('minuto',  60),
                $diff < 60          => array('segundo',  1)
            );
            $value = floor($diff/$intervals[1][1]);
            return 'Hace '.$value.' '.$intervals[1][0].($value > 1 ? 's' : '');
        }
    }
    function translationOurs($our){
        $date = translationDateAndHor($our);     
        return $date;
    }

    function translationEditable($user,$title,$id,$type){
        $resultado= null;
        $userSession = $_SESSION['email'];
        
        if($userSession === $user){
            if($type === '1'){
                $resultado = '<h4 class="title-section m-auto text-copy text-center">'.$title.'<i class="fas fa-pen ml-3 fa-1x cursor" onclick="updateNotice(this)" id="'.$id.'"></i></h4>';
            }else{
                $resultado = '<h4 class="title-section m-auto text-copy text-center">'.$title.'<i class="fas fa-pen ml-3 fa-1x cursor" onclick="updateAnuncio(this)" id="'.$id.'"></i></h4>';
            }
        }else{
            $resultado = '<h4 class="title-section m-auto text-copy text-center">'.$title.'</h4>';
        }

        return $resultado;
    }
    //Traductor para el level_importance
    function translationLevelImportance($level_importance){
        $level = null;

        if ($level_importance === '1') {
            $level = '<option selected value="'.$level_importance.'">Alto</option>
            <option value="0">Medio</option>';
        }else if ($level_importance === '0') {
            $level = '<option selected value="'.$level_importance.'">Medio</option>
            <option value="1">Alto</option>';
        }

        return $level;
    }

    //Traductor para el state
    function translationStat($state){
        $stat = null;

        if ($state === '1') {
            $stat = '<option selected value="'.$state.'">Habilitada</option>
            <option value="0">Deshabilitada</option>';
        }else if ($state === '0') {
            $stat = '<option selected value="'.$state.'">Deshabilitada</option>
            <option value="1">Habilitada</option>';
        }

        return $stat;
    }

    // Determinar si un publicacion es de autoria del usuario con la actual session
    function ifDeleteComment($userLog, $userPub,$id){
       $resultado = null;

        if($userLog === $userPub){
            $resultado = '<span class="text-danger cursor delete-comment mb-5" id="'.$id.'">Eliminar</span>';
        }else{
            $resultado = null;
        }
        return $resultado;
    } 

    function translationEditableButton($user,$id,$type){
       $resultado = null;
       $userSession = $_SESSION['email'];

       if($userSession === $user){
            if($type === '1'){
                    $resultado = '<button type="button" class="btn btn-light m-auto p-2 btn-delete" id="'.$id.'">
                        <i class="fas fa-trash-alt m-auto icon-delete btn-delete" id="'.$id.'"></i>
                        </button>';
                }else{
                    $resultado = '<button type="button" class="btn btn-light m-auto p-2" id="'.$id.'">
                    <i class="fas fa-trash-alt m-auto icon-delete btn-delete" id="'.$id.'"></i>
                    </button>';
                }
            }

            return $resultado;
    
    }

?>