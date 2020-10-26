<?php 
        require_once('../../translation/translation-User.php');
        require_once('../../translation/roles.php');
        require_once('../../../model/query/admin/queryUser.php');
        require_once('../../../model/conection/conexion.php');

    function rememberProfile(){
        session_start();
        $resultado = null;
        $email = $_SESSION['email'];
        $queries = new consultas();
        $result = $queries -> user($email);
            //
            foreach ($result as $f){
                $resultado =  '<!-- row -->
                        <div class="row w-100 pl-md-5 pl-3">
                            <!-- Column -->
                            <div class="col-md-6 p-0">
                                <div class="md-form form-group row mx-0">
                                    <div class="col-11 px-4">
                                        <input type="email" class="form-control inputs" name="email" id="email" value="'.$f["email"].'" disabled>
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!--./ Column -->
            
                            <!-- Column -->
                            <div class="col-md-6">
                                <div class="md-form form-group row">
                                    <div class="col-11 px-4">
                                        <input type="number" class="form-control inputs" name="cel" id="cel" value="'.$f["num_cel"].'" disabled maxlength="10" pattern="[0-9]+" tittle="Esto no parece ser un número de celular válido">
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!-- ./ Column -->
                        </div>
                        <!--./ row -->
                        
                        <!-- row -->
                        <div class="row w-100 pl-md-5 pl-3">
                            <!-- Column -->
                            <div class="col-md-6 p-0">
                                <div class="md-form form-group row mx-0">
                                    <div class="col-11 px-4">
                                            <select type="text" class="seleccionar md-form inputs  w-100" name="gender" id="genero" value="'.translationGenders($f["gender"]).'" disabled>
                                            "'.translationGender($f["gender"]).'"
                                    </select>
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!--./ Column -->
            
                            <!-- Column -->
                            <div class="col-md-6">
                                <div class="md-form form-group row">
                                    <div class="col-11 px-4">
                                        <select type="text" class="seleccionar inputs md-form w-100" name="municipality" id="municipality" value="'.$f["city"].'" disabled>         
                                            <option disabled>Elija una opción</option>
                                            <option selected value="'.$f['city'].'">'.$f['city'].'</option>
                                        </select>
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!-- ./ Column -->
                        </div>
                        <!--./ row -->
            
                        <!-- row -->
                        <div class="row w-100 pl-md-5 pl-3">
                            <!-- Column -->
                            <div class="col-md-6">
                                <div class="md-form form-group row ">
                                    <div class="col-11 px-4">
                                        <select class="seleccionar md-form w-100 inputs" name="deparment" id="deparment" disabled value="'.$f['deparment'].'">         
                                            <option disabled>Elija una opción</option>
                                            <option selected value="'.$f['deparment'].'">'.$f['deparment'].'</option>
                                        </select>
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!--./ Column -->
            
                            <!-- Column -->
                            <div class="col-md-6">
                                <div class="md-form form-group row">
                                    <div class="col-11 px-4">
                                        <input type="text" class="form-control inputs" id="address" name="address" value="'.ucfirst($f["address"]).'" disabled required minlength="3" maxlength="50">
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!-- ./ Column -->
                        </div>

                        
                        <!--./ row -->
                        
                        <!-- row -->
                        <div class="row w-100 pl-md-5 pl-3">
                            <!-- Column -->
                            <div class="col-md-6">
                                <div class="md-form form-group row">
                                    <div class="col-11 px-4">
                                        <input type="text" class="form-control inputs" name="charge" id="charge" value="'.ucfirst($f["charge"]).'" disabled pattern="[A-Za-z]+">
                                    </div> 
                                    <div class="col-1 p-0">
                                        <div class="icon pt-3 mt-1">
                                            <i class="fas fa-pen"></i>
                                        </div>    
                                    </div>              
                                </div>
                            </div>
                            <!-- ./ Column -->

                            <!-- Column -->
                            <div class="col-md-6 p-0">
                                <div class="md-form form-group row mx-0">
                                    <div class="col-11 px-4">
                                        <select class="seleccionar md-form w-100 " name="type_contract"  required disabled>
                                            <option value="" selected disabled >'.traslationTypeContract($f["type_contract"]).'</option>
                                            <option value="1">Contrato Laboral</option>
                                            <option value="2">Contrato de Aprendizaje</option>
                                        </select>
                                    </div>           
                                </div>
                            </div>
                            <!--./ Column -->
            
                            <!-- Column -->
                            <div class="col-md-12 d-flex mb-3">
                            <div class="md-form form-group row w-50 m-auto">
                                <div class="col-11 mt-2 px-4 text-center">
                                    <input type="number" class="form-control" id="salary" name="salary" value="'.$f["salary"].'" disabled>
                                </div>         
                            </div>
                        </div>';
            }//end foreach
            return $resultado;
    }
        
    echo rememberProfile();
?>