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
        </div>
            <div class="container-fluid mt-5">
                <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
                    <li role="presentation" class="active li-men" >
                        <a href="publicaciones.php" class="link-pub link-pub-reac">Noticias</a>
                    </li>
                    <li role="presentation" class="li-men">
                        <a href="anuncios.php" class="link-pub link-pub">Anuncios</a>
                    </li>
                </ul>
            </div>
            <div class="button-sec text-center mt-4">
                <button type="button" class="btn btn-primary p-2 mb-3">
                <a href="addAnuncio.php" class="text-white"><i class="fas fa-plus"></i></a></button>
            </div>
        <div class="row m-0 w-100 p-0 d-flex">
            <div class="input-group md-form form-sm form-2 w-25 mr-auto ml-5 res-search">
                <input class="form-control my-0 py-1 red-border text-white" type="text" placeholder="Buscar" aria-label="Buscar" name="anuncios" id="anythingSearch">
                <div class="input-group-append">
                    <span class="input-group-text elegant-color" id="basic-text1"><i class="fas fa-search text-white"
                        aria-hidden="true"></i></span>
                </div>
            </div>
            <div class="w-25 mr-5 res-search">
                <select name="anuncios" id="filtro" class="seleccionar md-form w-100" name="deparment" >
                    <option value="" selected>FILTRAR</option>
                    <option value="desc">Más Recientes</option>
                    <option value="asc">Más Antigüos</option>
                </select>
            </div>
        </div>
    </section>
    <!-- FIRST SECTION -->
    <section class="container-fluid w-100 p-0 m-0 mt-5" id="demo">
        <?php
            loadAnuncios();
        ?>
    </section>
    <!-- LIKES -->
    <div class="modal fade" id="modalLike" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
        <div class="modal-dialog scrollbar-light-blue" role="document">
            <div class="modal-content" id="like"></div>
        </div>
    </div>
    <!-- COMMENTS -->
    <div class="modal fade" id="modalComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-com scrollbar-light-blue" role="document">
            <div class="modal-content" id="comment"></div>
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
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/textarea.js"></script>
    <script src="../../js/btn-like.js"></script>
    <script src="../../js/commentsFetch.js" type="module"></script>
    <script src="../../js/searchPublications.js" type="module"></script>
    <script src="../../js/likesFetch.js" type="module"></script>
    <script src="../../js/viewNotice.js"></script>

</body>
</html>