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
    <!-- ICON -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/perfil.css">
    <link rel="stylesheet" href="../../css/calendar.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!-- First Section -->
    <section class="container-fluid p-0 m-0"> 
                        <div class="row w-100 m-0 p-0">
                            <div class="col-12 text-center p-0">
                                <!-- Fond-->
                                <div class="font-up"></div>
                                <!-- Avatar -->
                                <div class="avatar avatar-profile">
                                    <div class="mask">
                                        <img src="../../img/user.png" class="rounded-circle"
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
                            <h4>JUAN BUSTOS</h4>
                        </div>
                        <!-- Role user -->
                        <div class="col-12 text-center title-second">
                            <span>Administrador</span>
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
                        <div class="container-fluid-form">
                            <!-- row -->
                            <div class="row w-100 pl-md-5 pl-3">
                                <!-- Column -->
                                <div class="col-md-6 p-0">
                                    <div class="md-form form-group row mx-0">
                                        <div class="col-11 px-4">
                                            <input type="email" class="form-control inputs" name="email" id="email" value="sebas@montechelo.com" disabled>
                                        </div>         
                                    </div>
                                </div>
                                <!--./ Column -->

                                <!-- Column -->
                                <div class="col-md-6">
                                    <div class="md-form form-group row">
                                        <div class="col-11 px-4">
                                            <input type="number" class="form-control inputs" name="cel" id="cel" value="3223232332" disabled maxlength="10" pattern="[0-9]+" tittle="Esto no parece ser un número de celular válido">
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
                                                    <option value="">Masculino</option>
                                                </select>
                                        </div>       
                                    </div>
                                </div>
                                <!--./ Column -->

                                <!-- Column -->
                                <div class="col-md-6">
                                    <div class="md-form form-group row">
                                        <div class="col-11 px-4">
                                            <select type="text" class="seleccionar inputs md-form w-100" name="municipality" id="municipality" value="" disabled>         
                                                <option disabled>Elija una opción</option>
                                                <option selected value=""></option>
                                            </select>
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
                                            <select class="seleccionar md-form w-100 inputs" name="deparment" id="deparment" disabled value="">         
                                                <option disabled>Elija una opción</option>
                                                <option selected value=""></option>
                                            </select>
                                        </div>            
                                    </div>
                                </div>
                                <!--./ Column -->

                                <!-- Column -->
                                <div class="col-md-6">
                                    <div class="md-form form-group row">
                                        <div class="col-11 px-4">
                                            <input type="text" class="form-control inputs" id="address" name="address" value="Centro" disabled required minlength="3" maxlength="50">
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
                                            <input type="text" class="form-control inputs" name="charge" id="charge" value="" disabled pattern="[A-Za-z]+" placeholder="Programador">
                                        </div>            
                                    </div>
                                </div>
                                <!-- ./ Column -->

                                <!-- Column -->
                                <div class="col-md-6 p-0">
                                    <div class="md-form form-group row mx-0">
                                        <div class="col-11 px-4">
                                            <select class="seleccionar md-form w-100 " name="type_contract"  required disabled>
                                                <option value="" selected disabled >Elija una opción</option>
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
                                            <input type="number" class="form-control" id="salary" name="salary" value="30303030" disabled>
                                        </div>         
                                    </div>
                                </div>
                            <!-- ./ div containe -->
                            </div>
                        </div>
                        <!--./ row -->
                    <hr>
                    <div class="title-section W-100"><h4 class="mb-0  mt-4 ml-lg-5 text-center text-lg-left">Fecha de Cumpleaños</h4> </div> 
                    <div class="row w-100 d-flex m-0" >
                        <div class="root text-center m-auto">
                            <!--  -->
                            <div class="calendar-container calendar">
                                <header>
                                    <div id="month" class="d-none"></div>
                                    <div id="day" class="d-none"></div>
                                    <div class="day">3 de Septiembre</div>
                                </header>
                                <div class="calendar" id="calendar"></div>
                            </div> 
                        </div> 
                    </div> 
                </section>';
    <!--./ Secondth Section -->
    <!-- Third Section -->
    <!-- <section class="container-fluid w-100 p-0 m-0">
    <hr>
        <div class="row w-100 p-0 m-0">
            <div class="col-12 title-section">
                <h4 class="ml-lg-5 text-center text-lg-left">Mi Historial</h4>
            </div>
        </div>
    </section> -->
    <!--./ Third Section -->


    <!-- MODAL -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Cambio de Contraseña</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../controller/admin/update/updatePass.php" method="POST">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <p data-error="wrong" data-success="right" for="orangeForm-name" class="text-primary">Contraseña actual <span class="text-danger">*</span></p>
                            <i class="fas fa-lock prefix grey-text mt-5"></i>
                            <input type="password" class="form-control validate input" name="passAct" minlength="8" title="La contraseña debe tener 8 caracteres">
                        </div>
                        <div class="md-form mb-5">
                            <p data-error="wrong" data-success="right" for="orangeForm-name" class="text-primary">Nueva contraseña <span class="text-danger">*</span></p>
                            <i class="fas fa-lock prefix grey-text mt-5"></i>
                            <input type="password" id="orangeForm-pass" class="form-control validate input" name="newPass" minlength="8" title="La contraseña debe tener 8 caracteres">
                        </div>
                        <div class="md-form mb-5">
                            <p data-error="wrong" data-success="right" for="orangeForm-email" class="tite text-primary">Repita su contraseña <span class="text-danger">*</span></p>
                            <i class="fas fa-lock prefix grey-text mt-5"></i>
                            <input type="password" id="orangeForm-repass" class="form-control seleccionar input validate" name="rePass" minlength="8" title="La contraseña debe tener 8 caracteres">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-col2 text-white">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <!--FOOTER-->
    <footer class="footer-login container-fluid p-0 m-0"-->   
        <?php include('../footer.html')?>
    </footer>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- JQERY UI -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!-- MOMENTS JS -->
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <!-- CALENDAR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <!-- ES CALENDAR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/es.js" integrity="sha512-WQ3+XB6VumHQXES6Nlrktsmlr7P3WCPISNdUGQqQJR2L+MGobiZbhvo2DKzbhh7RR3iDamME8hIBgAgm8oY1XQ==" crossorigin="anonymous"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/calendar.js"></script>
    <script src="../../js/perfil.js" type="module"></script>
    <script src="../../js/updateSelect.js" type="module"></script>
</body>
</html>