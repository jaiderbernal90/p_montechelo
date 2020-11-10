<?php
    require_once('../../controller/sessions/security/securityAdmin.php');
    require_once('../../controller/admin/read/loadPublications.php');
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
    <link rel="stylesheet" href="../../css/publicaciones.css">
</head>
<body class="scrollbar-light-blue bg-white">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->
    <section class="container-fluid w-100 p-0 m-0 mt-5">
        <div class="row w-100 m-0 p-0 mt-5">
            <div class="col-12 p-0 mt-5 d-flex">
                <h4 class="title-section m-auto">Publicaciones</h4>
            </div>
            <div class="container-fluid mt-5">
                <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
                    <li role="presentation" class="active li-men" >
                        <a href="publicaciones.php" class="link-pub">Noticias</a>
                    </li>
                    <li role="presentation" class="li-men">
                        <a href="anuncios.php" class="link-pub link-pub-reac">Anuncios</a>
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
    <!-- FIRST SECTION -->
    <section class="container-fluid w-100 p-0 m-0 mt-5" id="demo">
       <?php 
       loadPublications(); 
       ?>
    </section>
    <div class="modal fade" id="modalLike" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
        <div class="modal-dialog scrollbar-light-blue" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Reacciones</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row w-100 m-0 p-0 mt-3 content mb-3 scrollbar-light-blue-menu scrollbar-light-blue">
                    <div class="col-12">
                        <div class=" border-bottom mb-3 cont-like-mo border-danger d-flex">
                            <button class="button like-mod btn-danger rounded-circle col-3" disabled>
                                    <i class="fa fa-heart text-white"></i>
                            </button>
                            <span class="pt-2 mt-1" style="font-size: 14px;">55</span>
                        </div>    
                    </div> 
                    <br>
                    <div class="col-12">
                        <div class="card-modal">
                            <header class="d-flex">
                                <img src="../../img/user.png" alt="user image">
                                <span class="mt-2 pl-4"> Juan Carlos Bohorquez</span>
                                <span class="pl-5 ml-auto mr-2 mt-2">Ayer</span>
                            </header>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card-modal">
                            <header class="d-flex">
                                <img src="../../img/user.png" alt="user image">
                                <span class="mt-2 pl-4"> Juan Carlos Bohorquez</span>
                                <span class="pl-5 ml-auto mr-2 mt-2">Hoy</span>
                            </header>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card-modal">
                            <header class="d-flex">
                                <img src="../../img/user.png" alt="user image">
                                <span class="mt-2 pl-4"> Juan Carlos Bohorquez</span>
                                <span class="pl-5 ml-auto mr-2 mt-2">5/10/2020 8:00AM</span>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
   <!-- PAGINATION JS -->
   <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
   <script src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>

    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/like.js"></script>
    <script src="../../js/viewRepositorio.js"></script>
</body>
</html>