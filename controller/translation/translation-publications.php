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
    function translationOur($our){
        $date = translationDateAndHor($our);     
        return $date;
    }

?>