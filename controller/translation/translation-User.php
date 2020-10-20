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
            $gender = '<option selected value="'.$gender.'">Femenino</option>
            <option value="1">Masculino</option>
            <option value="3">Otro</option>';
        }else if ($genero === '3') {
            $gender = '<option selected value="'.$gender.'">Otro</option>
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
    function translationDate($date){
        addslashes($date);
        
        return $date;
    }

?>