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
    <link rel="stylesheet" href="../../css/estilos-home.css">
    <link rel="stylesheet" href="../../css/rep.css">
    <link rel="stylesheet" href="../../css/footer.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->

    <section class="first-section container-fluid p-0 m-0 mt-5">
        <!-- title -->
            <div class="row m-0 mt-4 p-0">
                <div class="col-12 mt-5">
                    <header>
                        <h4 class="title-section text-center cursor-default">Repositorios</h4>
                    </header>
                </div>
            </div>
        <!--./ title -->
    </section>
    <section class="container-fluid w-100 m-0 p-0 mt-5" >
        <div class="row m-0 w-100 p-0 d-flex">
            <div class="w-25 ml-5">
                <select name="filtrer_selec" id="filtro" class="seleccionar md-form w-100" name="deparment" >
                    <option value="" selected >FILTRAR</option>
                    <option value="asc">A-Z</option>
                    <option value="desc">Z-A</option>
                </select>
            </div>
            <div class="input-group md-form form-sm form-2 pl-0 w-25 ml-auto mr-5">
                <input class="form-control my-0 py-1 red-border text-white" type="text" placeholder="Search" aria-label="Search" name="input" id="anythingSearch">
                <div class="input-group-append">
                    <span class="input-group-text elegant-color" id="basic-text1"><i class="fas fa-search text-white"
                        aria-hidden="true"></i></span>
                </div>
            </div>;
        </div>

        <div id="myDIV">
            <?php
                //Invocacion de la función para cargar usuarios
                showRepositorios();
            ?>
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
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/viewRepositorio.js"></script>
    <script src="../../js/searchs.js"></script>
</body>
</html>