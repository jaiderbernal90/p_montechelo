<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/translation/translation-User.php');
    require_once('../../model/query/admin/queryUser.php');
    require_once('../../model/conection/conexion.php');

    function loadUsers(){ //función para cargar usuarios
		//Invocamos una clase para realizar consultas del administrador
		$queries = new consultas();
		//Genera consulta en la tabla user para obtener los usuarios
		$result=$queries->showUsers();


		if (!isset($result)) {//En caso de haya un error en la variable resultado
			echo '<script>alert("NO HAY NADA");</script>';
			echo '<h2> NO HAY USUARIOS PARA MOSTRAR</h2>';
		}else{//Si no se encuentra un error se realizara la maquetacion de la tabla para visualizar los usuarios
            echo    '<thead class="header-table">
                        <tr class="text-center">
                            <th class="th-sm">DOCUMENTO</th>
                            <th class="th-sm">NOMBRE</th>
                            <th class="th-sm">EMAIL</th>
                            <th class="th-sm">ROL</th>
                            <th class="th-sm">ACTIVO</th>
                            <th class="th-sm">VER</th>
                        </tr>
                    </thead>
                    <tbody>';
                
            foreach ($result as $f){
                echo    '<tr>
                                <td class="colum1">'.$f["document"].'</td>
                                <td class="colum2">'.ucfirst($f['name']).' '.ucfirst($f['last_name']).'</td>
                                <td class="colum3">'.$f["email"].'</td>
                                <td class="colum4">'.translationRole($f["role"]).'</td>
                                <td class="colum5">'.translationState(ucfirst($f["estate"])).'</td>
                                <td class="colum6 text-center"><a href="infoUser.php?id='.$f["id_user"].'"><i class="fas fa-eye" title="Ver más"></i></a></td>
                            </tr>';
            }//end foreach
            echo '</tbody>';
		};//end if
    };
    // ./ cierre función para cargar usuarios
    //
    function info($email){ //función para ver perfil
        
        $queries = new consultas();
        $result = $queries -> user($email);
            //
            foreach ($result as $f){
                echo '<!-- Secondth Section -->
                <section class="container-fluid p-0 m-0 ">
                    <!-- row -->
                    <div class="row w-100 m-0 p-0">
                        <!-- Name User -->
                        <div class="col-12 p-0 m-0 title-name c-mask">
                            <h4>'.strtoupper($f['name']).' '.strtoupper($f['last_name']).'</h4>
                        </div>
                        <!-- Role user -->
                        <div class="col-12 text-center title-second">
                            <span>'.translationRole($f["role"]).'</span>
                        </div>
                    </div>
                    <!--./ row -->
                    <hr>
                    <!-- row -->
                    <div class="row w-100 m-0 p-0">
                        <div class="col-12 title-section">
                            <h4 class="ml-lg-5 text-center text-lg-left">Información</h4>
                        </div>
                    </div>
                    <!--./ row -->
                    <form action="" class="form" method="POST">
                        <!-- row -->
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
                                        <input type="number" class="form-control inputs" name="cel" id="cel" value="'.$f["num_cel"].'" disabled>
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
                                        <input type="text" class="form-control inputs" id="address" name="address" value="'.$f["address"].'" disabled>
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
                            <div class="col-md-6">
                                <div class="md-form form-group row">
                                    <div class="col-11 mt-2 px-4">
                                        <input type="number" class="form-control" id="salary" name="salary" value="'.$f["salary"].'" disabled>
                                    </div>         
                                </div>
                            </div>
                            <!-- ./ Column -->
                            <div class="col-md-12 d-flex group-btn">
                                <button class="btn btn-primary m-auto update">Modificar</button>
                                <button type="submit" class="btn btn-primary mr-auto save">Guardar</button>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex">
                            <div class="spinner-grow text-primary text-center m-auto" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <!--./ row -->
                    </form>
                    <hr>
                    <div class="row w-100 d-flex">
                        <div class="root text-center m-auto">
                            <!--  -->
                            <div class="calendar-container">
                                <header>
                                    <div id="month" class="d-none">'.translationMonth($f["date_birth"]).'</div>
                                    <div id="day" class="d-none">'.translationDate($f["date_birth"]).'</div>
                                    <div class="day">'.translationDate($f["date_birth"]).'</div>
                                </header>
                                <div class="calendar" id="calendar"></div>
                            </div> 
                        </div> 
                    </div> 
                </section>';
            }//end foreach
        };//end if
    // ./cierre función para ver perfil
    //
    function userInformation(){
        $id = $_GET['id'];
        //Invocamos una clase para realizar consultas del administrador
        $queries = new consultas();
        //Genera consulta en la tabla user para obtener las Subsedes
        $result=$queries->userInfo($id);

        if (!isset($result)) {
            echo '<h2> NO HAY USUARIOS PARA MOSTRAR</h2>';
        } else {
            foreach ($result as $f) {
                echo '<!-- Grid row -->
                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                    <!-- Material input -->
                                    <div class="md-form form-group">
                                        <p class="tite text-primary">Nombres</p>
                                        <input type="text" class="form-control inputs seleccionar" disabled name="name" value="'.$f['name'].'">
                                    </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                    <!-- Material input -->
                                    <div class="md-form form-group">
                                        <p class="tite text-primary">Apellidos</p>
                                        <input type="text" class="form-control inputs seleccionar" disabled name="last_name" value="'.$f['last_name'].'">
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
                                        <div class="md-form form-group rounded">
                                            <p class="tite text-primary">Tipo de Documento</p>
                                            <select class="seleccionar md-form w-100" name="type_id" disabled>
                                            <option value="" disabled>Elija una opción</option>';
                                            echo traslationTypeId($f['type_id']);

                                    echo ' </select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                    <!-- Grid column -->
                                     <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary pt-2">Número de Documento</p>
                                            <input type="text" class="form-control inputs seleccionar" name="document" value="'.$f['document'].'" disabled>
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
                                            <p class="tite text-primary">Estado</p>
                                            <select class="seleccionar md-form w-100" name="estate" disabled>
                                            <option value="" disabled>Elija una opción</option>';
                                            echo traslationActive($f['estate']);
                                               
                                        echo '</select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                    <!-- Material input -->
                                    <div class="md-form form-group mt-2">
                                        <p class="tite text-primary">Género</p>
                                        <select class="seleccionar md-form w-100" name="gender" disabled>
                                        <option value="" disabled>Elija una opción</option>';
                                        echo translationGender($f['gender']);
                                        echo '</select>
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
                                        <div class="md-form form-group">
                                            <p class="tite text-primary">Correo</p>
                                            <input type="email" class="form-control inputs correo seleccionar" name="email" value="'.$f['email'].'" disabled>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary">Fecha de Nacimiento </p>
                                            <input type="date" class="form-control inputs seleccionar" name="date_birth" value="'.$f['date_birth'].'" disabled>
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
                                        <div class="md-form form-group">
                                            <p class="tite text-primary mt-3">Celular</p>
                                            <input type="text" class="form-control inputs seleccionar" name="num_cel" value="'.$f['num_cel'].'" disabled>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary mt-3">Teléfono</p>
                                            <input type="text" class="form-control inputs seleccionar" name="tel" 
                                            value="'.$f['tel'].'" disabled>
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
                                        <div class="md-form form-group ">
                                            <p class="tite text-primary">Rol</p>
                                            <select class="seleccionar md-form w-100" name="role" disabled>
                                            <option value="" disabled>Elija una opción</option>';
                                            echo translationRoles($f['role']);
                                            echo '</select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary ar-input">Cargo</p>
                                            <input type="text" class="form-control inputs seleccionar" name="charge" 
                                            value="'.$f['charge'].'" disabled>
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
                                        <div class="md-form form-group ar-input">
                                            <p class="tite text-primary">Salario</p>
                                            <input type="text" class="form-control inputs seleccionar" name="salary" 
                                            value="'.$f['salary'].'" disabled>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                                <!-- Grid row -->
                                <div class="form-row">
                                   
                                </div>
                                <!-- Grid row -->
                                <!-- Grid row -->
                                <div class="form-row">
                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary">Departamento</p>
                                            <select class="seleccionar md-form w-100" name="deparment" id="deparment" disabled>
                                            
                                            <option selected value="'.$f['deparment'].'">'.$f['deparment'].'</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary">Ciudad</p>
                                            <select class="seleccionar md-form w-100" name="city" id="municipality" disabled> 
                                                <option value="" >Elija una opción</option>
                                            <option selected value="'.$f['city'].'">'.$f['city'].'</option>
                                            </select>
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
                                        <div class="md-form form-group ar-input">
                                            <p class="tite text-primary">Dirección</p>
                                            <input type="text" class="form-control inputs seleccionar" name="address" 
                                            value="'.$f['address'].'" disabled>
                                        </div>  
                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-6">
                                        <!-- Material input -->
                                        <div class="md-form form-group">
                                            <p class="tite text-primary">Tipo de contrato</p>
                                            <select class="seleccionar md-form w-100" name="type_contract" disabled>
                                            <option value="" disabled>Elija una opción</option>';
                                            echo traslationTypeContract($f['type_contract']);
                                           echo' </select>
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                ';
            }
        }
    }
    //./
    //
?>