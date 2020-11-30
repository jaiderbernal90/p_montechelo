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
    <section class="container-fluid w-100 p-0 m-0 mt-5">
        <div class="row w-100 m-0 p-0 mt-5">
            <div class="col-12 p-0 mt-5 d-flex">
                <h4 class="title-section m-auto">Agregar Solicitud</h4>
            </div>
        </div>
    </section>
    <section class="container-fluid w-100 p-0 m-0">
        <div class="row w-100 m-0 p-0 ">
            <div class="col-12">
                <form action="../../controller/admin/create/registerSolicitud.php" method="POST" enctype="multipart/form-data" class="form m-4 m-md-5">
                <div class="form-row">
                        <div class="col-12 text-left text-infor">
                            <span><span class="text-danger">*</span> Campos obligatorios</span>
                        </div>
                    </div>
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <!-- Material input -->
                            <div class="md-form form-group mt-2">
                                <p class="tite text-primary">Tipo de Solicitud <span class="text-danger">*</span></p>
                                <select class="seleccionar md-form w-100" name="type" required>
                                    <option value="" >Elija una opción</option>
                                    <option value="1">Vacaciones</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <!-- Grid row -->
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <!-- Material input -->
                            <div class="md-form form-group green-border-focus">
                                <p class="tite text-primary">Contenido de la Solicitud <span class="text-danger">*</span></p>
                                <textarea name="content" cols="50" rows="1" class="w-100 md-textarea form-control textareaElement" required></textarea>
                            </div>
                        </div>
                        <!-- Grid column -->   
                    </div>
                     <!-- Grid row -->
                     <div class="form-row d-flex mt-5">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-md btn-info"><a href="solicitudes.php" class='text-white'>Volver</a></button>
                            <button type="submit" class="btn btn-md btn-info"><a class='text-white'>Agregar</a></button>                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    
    
    <!--FOOTER-->
    <footer class="footer-login container-fluid p-0 m-0">   
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
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/textarea.js"></script>

</body>
</html>