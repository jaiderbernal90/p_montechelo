<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/admin/read/load.php');
    $email=$_SESSION['email'];
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
        <?php
            //Invocacion de la función para cargar usuarios
            info($email);
        ?>
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
                <form action="" method="POST">
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
    <script src="../../js/perfil.js"></script>
    <script src="../../js/updateSelect.js"></script>
</body>
</html>