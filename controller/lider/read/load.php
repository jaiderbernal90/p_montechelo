<?php
    require_once('../../controller/sessions/security/securityLider.php');
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
                                <td class="colum6 text-center"><a class="eye" ><i class="fas fa-eye eye-id" title="Ver más" onclick="viewUser(this)" id="'.$f["id_user"].'"></i></a></td>
                            </tr>';
            }//end foreach
            echo '</tbody>';
		};//end if
    };
    // ./ cierre función para cargar usuarios
    //
    function info(){ //función para ver perfil
        $email = $_SESSION['email'];
        $queries = new consultas();
        $result = $queries -> user($email);
            //
            foreach ($result as $f){
                echo '<section class="container-fluid p-0 m-0"> 
                        <div class="row w-100 m-0 p-0">
                            <div class="col-12 text-center p-0">
                                <!-- Fond-->
                                <div class="font-up"></div>
                                <!-- Avatar -->
                                <div class="avatar avatar-profile">
                                    <div class="mask">
                                        <div class="mask-black rounded-circle text-center">
                                            <a data-toggle="modal" data-target="#modalRegisterFormPhoto" class="link-text nav-link"><span>Modificar </span><i class="fas fa-pen"></i></a>
                                        </div>
                                        <img src="../../img/'.$_SESSION['img_profile'].'" class="rounded-circle"
                                        alt="Sample avatar image.">  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!--./ First Section -->
                <!-- Secondth Section -->
                <section class="container-fluid p-0 m-0 ">
                    <!-- row -->
                    <div class="row w-100 m-0 p-0">
                        <!-- Name User -->
                        <div class="col-12 p-0 m-0 title-name c-mask text-center">
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
                    <form action="../../controller/lider/update/updateInfo.php" class="form" method="POST">
                        <div class="container-fluid-form">
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
                                                <select type="text" class="seleccionar md-form inputs  w-100" name="gender" id="genero" disabled>
                                                '.translationGender($f["gender"]).'
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
                                </div>
                            <!-- ./ div containe -->
                            </div>
                        </div>
                            <!-- ./ Column -->
                            <div class="col-md-12 d-flex group-btn">
                                <button class="btn btn-primary m-auto update">Modificar</button>
                                <button type="submit" class="btn btn-primary mr-auto save">Guardar</button>
                            </div>
                            <div class="col-md-12 d-flex group-btn mt-3">
                                <button type="button" class="btn m-auto btn-col1 text-white" data-toggle="modal" data-target="#modalRegisterForm">Cambiar contraseña</button>
                            </div>
                        <div class="col-md-12 d-flex">
                            <div class="spinner-grow text-primary text-center m-auto" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <!--./ row -->
                    </form>
                    <hr>
                    <div class="title-section W-100"><h4 class="mb-0  mt-4 ml-lg-5 text-center text-lg-left">Fecha de Cumpleaños</h4> </div> 
                    <div class="row w-100 d-flex m-0" >
                        <div class="root text-center m-auto">
                            <!--  -->
                            <div class="calendar-container calendar">
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