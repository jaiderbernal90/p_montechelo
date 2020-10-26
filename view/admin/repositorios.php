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
                        <h4 class="title-section text-center">Repositorios</h4>
                    </header>
                </div>
            </div>
        <!--./ title -->
    </section>
    <section class="container-fluid w-100 m-0 p-0 mt-5">
        <div class="row w-100 m-0 p-0">
            <div class="col-12 p-0">
                    <main class="cont-card-user shadow">
                        <div class="mask d-flex">
                            <header class="img-cont">
                                <a href=""><img src="../../img/adult-1868750_640.jpg" alt=""></a>
                            </header>
                            <div class="text-center title-card-rep fa-2x">
                                <a href="" class=""><i class="fas fa-plus hov"></i></a>
                                <h3>JUAN PEREZ</h3>
                            </div>
                        </div>
                    </main>
            </div>
        </div>
        <div class="row w-100 m-0 p-0 mt-5">
            <div class="col-12 p-0 mt-3">
                    <main class="cont-card-user shadow">
                        <div class="mask d-flex">
                            <header class="img-cont">
                                <a href=""><img src="../../img/user.png" alt=""></a>
                            </header>
                            <div class="text-center title-card-rep fa-2x">
                                <a href="" class=""><i class="fas fa-plus hov"></i></a>
                                <h3>SEBASTIAN BUSTOS</h3>
                            </div>
                        </div>
                    </main>
            </div>
        </div>
        <div class="row w-100 m-0 p-0 mt-5">
            <div class="col-12 p-0 mt-3">
                    <main class="cont-card-user shadow">
                        <div class="mask d-flex">
                            <header class="img-cont">
                                <a href=""><img src="../../img/beard-1845166_640.jpg" alt=""></a>
                            </header>
                            <div class="text-center title-card-rep fa-2x">
                                <a href="moreRepositorio.php" class=""><i class="fas fa-plus hov"></i></a>
                                <h3>PEPITO PEREZ</h3>
                            </div>
                        </div>
                    </main>
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
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
</body>
</html>