<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- ICON -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/estilos-home.css">
    <link rel="stylesheet" href="../../css/user.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->

    <section class="first-section container-fluid p-0 m-0 mt-5">
        <!-- Title -->
            <div class="row m-0 mt-4 p-0">
                <div class="col-12 mt-5">
                    <header>
                        <h4 class="title-section text-center">Información Usuarios</h4>
                    </header>
                </div>
            </div>
        <!-- FORM -->
        <div class="row m-0 p-0">
            <div class="col-12">
                <form action="" class="form m-4 m-md-5" method="POST">
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Grid column -->
                        <div class="col-md-6">
                        <!-- Material input -->
                        <div class="md-form form-group">
                            <p class="tite text-primary">Nombres</p>
                            <input type="text" class="form-control inputs" name="name" placeholder="Nombre">
                        </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                        <!-- Material input -->
                        <div class="md-form form-group">
                            <p class="tite text-primary">Apellidos</p>
                            <input type="text" class="form-control inputs" name="last_name" placeholder="Apellido">
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
                                <select class="seleccionar md-form w-100" name="type_id">
                                    <option value="" >Elija una opción</option>
                                    <option value="1">Cédula de Ciudadania</option>
                                    <option value="2">Cédula de Extranjería</option>
                                    <option value="3">Tarjeta de Identidad</option>
                                </select>
                            </div>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                         <div class="col-md-6">
                            <!-- Material input -->
                            <div class="md-form form-group">
                                <p class="tite text-primary pt-2">Número de Documento</p>
                                <input type="text" class="form-control inputs" name="document" placeholder="Número de Documento">
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
                                <select class="seleccionar md-form w-100" name="estate">
                                    <option value="" >Elija una opción</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                            </select>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                        <!-- Material input -->
                        <div class="md-form form-group mt-2">
                            <p class="tite text-primary">Género</p>
                            <select class="seleccionar md-form w-100" name="gender">
                                <option value="" >Elija una opción</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                                <option value="3">Otro</option>
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
                            <div class="md-form form-group">
                                <p class="tite text-primary">Correo</p>
                                <input type="email" class="form-control inputs correo" name="email" placeholder="Correo">
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <!-- Material input -->
                            <div class="md-form form-group">
                                <p class="tite text-primary">Fecha de Nacimiento </p>
                                <input type="date" class="form-control inputs" name="date_birth" value="">
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
                                <input type="text" class="form-control inputs" name="num_cel" placeholder="Número de Celular">
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <!-- Material input -->
                            <div class="md-form form-group">
                                <p class="tite text-primary mt-3">Teléfono</p>
                                <input type="text" class="form-control inputs" name="tel" 
                                placeholder="Número de Teléfono">
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
                                <select class="seleccionar md-form w-100" name="role">
                                    <option value="" disabled selected>Elija una opción</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Líder</option>
                                    <option value="3">Colaborador</option>
                                </select>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <!-- Material input -->
                            <div class="md-form form-group">
                                <p class="tite text-primary ar-input">Cargo</p>
                                <input type="text" class="form-control inputs" name="charge" 
                                placeholder="Cargo que desempeña">
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
                                <input type="text" class="form-control inputs" name="salary" 
                                placeholder="2'000.000">
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
                                <select class="seleccionar md-form w-100" name="deparment" id="deparment">

                                </select>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <!-- Material input -->
                            <div class="md-form form-group">
                                <p class="tite text-primary">Ciudad</p>
                                <select class="seleccionar md-form w-100" name="city" id="municipality"> 
                                    <option value="" >Elija una opción</option>
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
                                <input type="text" class="form-control inputs" name="address" 
                                placeholder="Dirección">
                            </div>  
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6">
                            <!-- Material input -->
                            <div class="md-form form-group">
                                <p class="tite text-primary">Tipo de contrato</p>
                                <select class="seleccionar md-form w-100" name="type_contract">
                                    <option value="" disabled selected>Elija una opción</option>
                                    <option value="1">Contrato Laboral</option>
                                    <option value="2">Contrato de Aprendizaje</option>
                                </select>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div> 
                    <!-- Grid row -->
                    <div class="form-row d-flex mt-5">
                        <div class="col-6 text-md-right text-center">
                            <label type="button" class="btn btn-md btn-info"><a class='text-white' href="users.php">Volver</a></label>
                        </div> 
                        <div class="col-6 text-md-left text-center">
                            <button type="submit" class="btn btn-md btn-info"><a class='text-white'>Modificar</a></button>
                        </div>
                    </div>
                   
                </form>
            </div>
        </div>
    </section>

    
    <!--FOOTER-->
    <footer class="footer-login container-fluid p-0 m-0"-->   
        <?php include('../footer.html')?>
    </footer>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
   <!-- DATATABLE JS -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
</body>
</html>