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
    <!-- CAROUSEL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css" />
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
                            <div class="mask-black rounded-circle text-center">
                                <a href="changePhoto.php" class="link-text nav-link"><span>Modificar </span><i class="fas fa-pen"></i></a>
                            </div>
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
            <div class="col-12 p-0 m-0 title-name c-mask">
                <h4> PEPITO PEREZ </h4>
            </div>
            <!-- Role user -->
            <div class="col-12 text-center title-second">
                <span> Administrador </span>
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
                            <input type="email" class="form-control inputs" name="email" placeholder="Correo" id="email" disabled>
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
                            <input type="number" class="form-control inputs" name="cel" placeholder="Celular" id="cel" disabled>
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
                            <input type="text" class="form-control inputs" name="gender" placeholder="Género" id="genero" disabled>
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
                            <input type="text" class="form-control inputs" name="municipality" placeholder="Ciudad" id="city" disabled>
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
                            <input type="text" class="form-control inputs" name="department" placeholder="Departamento" id="department" disabled>
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
                            <input type="text" class="form-control inputs" name="address" placeholder="Dirección" id="address" disabled>
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
                            <select class="seleccionar md-form w-100" name="type_contract" required disabled>
                                <option value="" selected disabled>Tipo Contrato</option>
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
                            <input type="number" class="form-control" name="salary" placeholder="Salario" disabled>
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
                        <div class="day">18</div>
                        <div class="month">August</div>
                    </header>
                    <div class="calendar" id="calendar"></div>
                </div> 
            </div> 
        </div> 
    </section>
    <hr>
    <!--./ Secondth Section -->

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
   <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit-icons.min.js"></script>
    <!-- MOMENTS JS -->
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/calendar.js"></script>
    <script src="../../js/perfil.js"></script>
</body>
</html>