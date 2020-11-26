<?php 
    //Traductor para el tipo de identidad
    function traslationTypeId($id){
        $result = null;
        $t_id = $id;

        if ($t_id === '1') {
            $result = "<option selected value='".$t_id."'>Cédula de Ciudadania</option>
            <option value='2'>Cédula de Extranjería</option>
            <option value='3'>Tarjeta de Identidad</option>";
        }else if ($t_id === '2') {
            $result = "<option selected value='".$t_id."'>Cédula de Extranjería</option>
            <option value='1'>Cédula de Ciudadania</option>
            <option value='3'>Tarjeta de Identidad</option>";
        }else if ($t_id === '3') {
            $result = "<option selected value='".$t_id."'>Tarjeta de Identidad</option>
            <option value='1'>Cédula de Ciudadania</option>
            <option value='2'>Cédula de Extranjería</option>";
        }
        return $result;
    }
    //Traductor para el tipo de identidad
    function traslationActive($id){
            $result = null;
            $state = $id;
    
            if ($state === '1') {
                $result = '<option selected value="'.$state.'">Activo</option>
                <option value="0">Inactivo</option>';
            }else {
                $result = '<option selected value="'.$state.'">Inactivo</option>
                <option value="1">Activo</option>';
            }
            return $result;
    }
    function translationGender($gener){
        $gender = null;
        $genero = $gener;

        if ($genero === '1') {
            $gender = '<option selected value="'.$genero.'">Masculino</option>
            <option value="2">Femenino</option>
            <option value="3">Otro</option>';
        }else if ($genero === '2') {
            $gender = '<option selected value="'.$genero.'">Femenino</option>
            <option value="1">Masculino</option>
            <option value="3">Otro</option>';
        }else if ($genero === '3') {
            $gender = '<option selected value="'.$genero.'">Otro</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>';
        }

        return $gender;
    }
    function translationRoles($role){
        $rol = null;

        if ($role === '1') {
            $rol = '<option selected value="'.$role.'">Administrador</option>
            <option value="2">Líder</option>
            <option value="3">Colaborador</option>';
        }else if ($role === '2') {
            $rol = '<option selected value="'.$role.'">Líder</option>
            <option value="1">Administrador</option>
            <option value="3">Colaborador</option>';
        }else if ($role === '3') {
            $rol = '<option selected value="'.$role.'">Colaborador</option>
            <option value="1">Administrador</option>
            <option value="2">Líder</option>';
        }

        return $rol;
    }

    function traslationTypeContract($contract){
        $type_contract = null;

        if ($contract === '1') {
            $type_contract = '<option selected value="'.$contract.'">Contrato Laboral</option>
            <option value="2">Contrato de Aprendizaje</option>';
        }else if ($contract === '2') {
            $type_contract = '<option selected value="'.$contract.'">Contrato de Aprendizaje</option>
            <option value="1">Contrato Laboral</option>';
        }

        return $type_contract;
    }
    //Traductor para el tipo de identidad
    function traslationTypeIdName($id){
        $result = null;
        $t_id = $id;

        if ($t_id === '1') {
            $result = "Cédula de Ciudadania";
        }else if ($t_id === '2') {
            $result = "Cédula de Extranjería";
        }else if ($t_id === '3') {
            $result = "Tarjeta de Identidad";
        }
        return $result;
    }
    //Traductor para el tipo de identidad
    function traslationActiveName($id){
            $result = null;
            $state = $id;
    
            if ($state === '1') {
                $result = 'Activo';
            }else {
                $result = 'Inactivo';
            }
            return $result;
    }
    function translationGenderName($gener){
        $gender = null;
        $genero = $gener;

        if ($genero === '1') {
            $gender = 'Masculino';
        }else if ($genero === '2') {
            $gender = 'Femenino';
        }else if ($genero === '3') {
            $gender = 'Otro';
        }

        return $gender;
    }
    function translationRolesName($role){
        $rol = null;

        if ($role === '1') {
            $rol = 'Administrador';
        }else if ($role === '2') {
            $rol = 'Líder';
        }else if ($role === '3') {
            $rol = 'Colaborador';
        }

        return $rol;
    }

    function traslationTypeContractName($contract){
        $type_contract = null;

        if ($contract === '1') {
            $type_contract = 'Contrato Laboral';
        }else if ($contract === '2') {
            $type_contract = 'Contrato de Aprendizaje';
        }

        return $type_contract;
    }
    function translationDate($date){
       //Month
       $day = substr($date, -2); 
       $month = substr($date, 5,2);
       $monthFinally = null;
       //Validation month
        switch($month){
            case '01': 
                $monthFinally = "Enero"; 
                break;
            case '02':
                $monthFinally = "Febrero"; 
                break;
            case '03':  
                $monthFinally = "Marzo"; 
                break;
            case '04':  
                $monthFinally = "Abril"; 
                break;
            case '05':  
                $monthFinally = "Mayo"; 
            break;
            case '06':  
                $monthFinally = "Junio"; 
            break;
            case '07':  
                $monthFinally = "Julio"; 
            break;
            case '08':  
                $monthFinally = "Agosto"; 
            break;
            case '09': 
                 $monthFinally = "Septiembre"; 
                break;
            case '10' : 
                $monthFinally = "Octubre"; 
                break;
            case '11': 
                $monthFinally = "Noviembre"; 
                break;
            case '12': 
                $monthFinally = "Diciembre"; 
                break;

        }
        $dateActuallity= date("Y-m-d");
        if($month === substr($dateActuallity, 5,2)){
            if($day === substr($dateActuallity, -2)){
                $dateFinally = '¡Hoy!';
            }else if($day == substr($dateActuallity, -2) + 1){
                $dateFinally = '¡Mañana!';
            }else{
                $dateFinally = $day.' de '.$monthFinally;
            }
        }else{
            //Date FInally for view
            $dateFinally = $day.' de '.$monthFinally;
        }
        return $dateFinally;
    }
    function translationMonth($date){
        //Month
        $month = substr($date, 5,2);
       
        return $month;
    }
?>