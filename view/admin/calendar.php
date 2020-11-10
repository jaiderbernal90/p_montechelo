<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/admin/read/load.php');
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
    <link rel="stylesheet" href="../../css/estilos-home.css">

</head> 
<body class="scrollbar-light-blue bg-white">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!-- First Section -->
    <section class="container-fluid w-100 p-0 m-0 mt-5">
        <div class="row w-100 m-0 p-0 mt-5">
            <div class="col-12 p-0 mt-5 d-flex">
                <h4 class="title-section m-auto">Cumpleaños</h4>
            </div>
            <div class="container-fluid mt-5">
                <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
                    <li role="presentation" class="li-men" >
                        <a href="birthday.php" class="link-pub link-pub-reac text-decoration-none">Lista</a>
                    </li>
                    <li role="presentation" class="active li-men">
                        <a href="calendar.php" class="link-pub">Calendario</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="button-sec text-center mt-4">
            <button type="button" class="btn btn-primary p-2 mb-3">
            <a href="addNotice.php" class="text-white"><i class="fas fa-plus"></i></a></button>
        </div>
        <div class="row m-0 w-100 p-0 d-flex">
            <div class="w-25 ml-5">
                <select name="filtrer_selec" id="filtro" class="seleccionar md-form w-100" name="deparment" >
                    <option value="" selected >FILTRAR</option>
                    <option value="rec">Más Recientes</option>
                    <option value="ant">Más Antigüos</option>
                </select>
            </div>
            <div class="input-group md-form form-sm form-2 pl-0 w-25 ml-auto mr-5">
                <input class="form-control my-0 py-1 red-border text-white" type="text" placeholder="Buscar" aria-label="Buscar" name="input" id="anythingSearch">
                <div class="input-group-append">
                    <span class="input-group-text elegant-color" id="basic-text1"><i class="fas fa-search text-white"
                        aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </section>
    <!--./ Secondth Section -->
    <!-- <section class="container-fluid w-100 p-0 m-0">
    <hr>
        <div class="row w-100 p-0 m-0">
            <div class="col-12 title-section">
                <h4 class="ml-lg-5 text-center text-lg-left">Mi Historial</h4>
            </div>
        </div>
    </section> -->
    <!--./ Third Section -->


    <!-- MODAL PASS -->
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
                            <input type="password" class="form-control validate input" name="passAct" minlength="8" title="La contraseña debe tener 8 caracteres" required> 
                        </div>
                        <div class="md-form mb-5">
                            <p data-error="wrong" data-success="right" for="orangeForm-name" class="text-primary">Nueva contraseña <span class="text-danger">*</span></p>
                            <i class="fas fa-lock prefix grey-text mt-5"></i>
                            <input type="password" id="orangeForm-pass" class="form-control validate input" name="newPass" minlength="8" title="La contraseña debe tener 8 caracteres" required>
                        </div>
                        <div class="md-form mb-5">
                            <p data-error="wrong" data-success="right" for="orangeForm-email" class="tite text-primary">Repita su contraseña <span class="text-danger">*</span></p>
                            <i class="fas fa-lock prefix grey-text mt-5"></i>
                            <input type="password" id="orangeForm-repass" class="form-control seleccionar input validate" name="rePass" minlength="8" title="La contraseña debe tener 8 caracteres" required>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-col2 text-white">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>

    <!-- MODAL PHOTO -->
    <div class="modal fade mt-5" id="modalRegisterFormPhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
        <div class="modal-dialog mt-5" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Actualizar Foto de Perfil</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row w-100 m-0 p-0 mt-3">
                        <div class="col-12 mt-3 text-center">
                            <img src="../../img/<?php echo $_SESSION['img_profile']; ?>" alt="" id="mostrarimagen" class="img-change shadow">
                        </div>
                </div>
                <br>
                <form action="../../controller/admin/update/updatePhoto.php" method="POST" enctype="multipart/form-data">
                    <div class="col-12 text-center"> 
                        <input type="file" name="img_profile" id="img_profile" required accept=".png, .jpeg, .jpg, image/gif">
                    </div>
                    <div class="row w-100 p-0 m-0 mt-3 mb-3">
                        <div class="col-md-12 p-0 m-0 d-flex">
                            <div class="cont-btn m-auto">
                                <button type="submit" class="btn btn-primary btn-md btn-cancel">Actualizar</button>
                            </div>
                        </div>
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
</body>
</html>