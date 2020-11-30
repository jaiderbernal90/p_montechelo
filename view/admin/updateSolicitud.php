<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/admin/read/loadRequest.php');
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
    <link rel="stylesheet" href="../../css/publicaciones.css">

</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->
    <section class="container-fluid w-100 p-0 m-0 mt-5">
        <div class="row w-100 m-0 p-0 mt-5">
            <div class="col-12 p-0 mt-5 d-flex">
                <h4 class="title-section m-auto">Actualizar Solicitud</h4>
            </div>
        </div>
    </section>
    <section class="container-fluid w-100 p-0 m-0">
        <div class="row w-100 m-0 p-0 ">
            <div class="col-12">
                <form action="../../controller/admin/update/updateSolicitud.php" method="POST" enctype="multipart/form-data" class="form m-4 m-md-5">
                    <?php
                        $id=$_POST['id'];
                        //Invocacion de la función para cargar usuarios
                        updateSolicitudAdmin($id);
                    ?>
                    <div class="row m-0 p-0">
                        <div class="col-12">               
                           <div class="form-row d-flex mt-3">
                                   <div class="col-6 text-md-right text-center">
                                       <button type="button" class="btn btn-info" ><a class="text-white" href="solicitudes.php">Volver</a></button>
                                   </div> 
                                   <div class="col-6 text-md-left text-center">
                                       <button type="submit" class="seleccionar btn btn-special btn-info" id="save"><a class="text-white">Guardar</a></button>
                                   </div>
                               </div>   
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