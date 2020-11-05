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
        <div class="row w-100 m-0 p-0 pb-3 border-bottom">
            <div class="col-12">
                <div class="w-100 row m-0 pl-2 d-flex pl-lg-5">
                    <header class="col-12 p-0 pb-4 pl-lg-5">
                        <div class="d-flex pt-3">
                            <img src="../../img/user.png" alt="" width="50px" height="50px" class="img-responsive rounded-circle mr-3">
                            <div class="d-block mt-1">
                                <span style="font-weight: 500;">Juan@montechelo.com</span>
                                <span class="font d-block">09/07/2020 9:00 AM</span>
                            </div>
                        </div>
                    </header>
                </div>
                <article class="card mb-5">
                    <!-- HEADER -->
                    <header class="card-body-pub">
                        <a href="infoPublication.php">
                            <img src="../../img/sky-5114499_1920.jpg" alt="" class="rounded">
                        </a>
                    </header>
                    <!-- BODY -->
                    <div class="card-body-pub">
                        <div class="title-card px-4 py-2 text-center bg-light">
                            <h3 class="mb-0">TITULO DE LA PUBLICACIÓN </h3>
                        </div>
                        <div class="desc-card px-4 pt-3">
                            <p class="text-center">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?

                            </p>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <!--Like-->
                        <div class=" mb-2 col-5 mt-1">  
                            <button class="button like rounded-circle col-3">
                                <i class="fa fa-heart"></i>
                            </button>
                            <span>55</span>
                        </div>
                        <!--./LIKE-->
                         <!--Comments -->
                         <div class="mb-2 col-7 text-right mt-2 pt-1">  
                            <span>Comentarios:</span><span><strong> 55</strong></span>
                        </div>
                        <!--./Comments-->
                    </div>
                </article>
            </div>
        </div>
        <div class="row w-100 m-0 p-0 pb-3 border-bottom">
            <div class="col-12">
                <div class="w-100 row m-0 pl-2 d-flex pl-lg-5">
                    <header class="col-12 p-0 pb-4 pl-lg-5">
                        <div class="d-flex pt-3">
                            <img src="../../img/user.png" alt="" width="50px" height="50px" class="img-responsive rounded-circle mr-3">
                            <div class="d-block mt-1">
                                <span style="font-weight: 500;">Juan@montechelo.com</span>
                                <span class="font d-block">09/07/2020 9:00 AM</span>
                            </div>
                        </div>
                    </header>
                </div>
                <article class="card mb-5">
                    <!-- HEADER -->
                    <header class="card-body-pub">
                        <a href="infoPublication.php">
                            <img src="../../img/ofiice.jpg" alt="" class="rounded">
                        </a>
                    </header>
                    <!-- BODY -->
                    <div class="card-body-pub">
                        <div class="title-card px-4 py-2 text-center bg-light">
                            <h3 class="mb-0">TITULO DE LA PUBLICACIÓN </h3>
                        </div>
                        <div class="desc-card px-4 pt-3">
                            <p class="text-center">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?

                            </p>
                        </div>
                    </div>
                    <div class="col-12 d-flex border-top">
                        <!--Like-->
                        <div class=" mb-2 col-5 mt-1">  
                            <button class="button like rounded-circle col-3">
                                <i class="fa fa-heart"></i>
                            </button>
                            <span>55</span>
                        </div>
                        <!--./LIKE-->
                         <!--Comments -->
                         <div class="mb-2 col-7 text-right mt-2 pt-1">  
                            <span>Comentarios:</span><span><strong> 55</strong></span>
                        </div>
                        <!--./Comments-->
                    </div>
                </article>
            </div>
        </div>
        <div class="row w-100 m-0 p-0 pb-3 border-bottom">
            <div class="col-12">
                <div class="w-100 row m-0 pl-2 d-flex pl-lg-5">
                    <header class="col-12 p-0 pb-4 pl-lg-5">
                        <div class="d-flex pt-3">
                            <img src="../../img/user.png" alt="" width="50px" height="50px" class="img-responsive rounded-circle mr-3">
                            <div class="d-block mt-1">
                                <span style="font-weight: 500;">Juan@montechelo.com</span>
                                <span class="font d-block">09/07/2020 9:00 AM</span>
                            </div>
                        </div>
                    </header>
                </div>
                <article class="card mb-5">
                    <!-- HEADER -->
                    <header class="card-body-pub">
                        <a href="infoPublication.php">
                            <img src="../../img/sky-5114499_1920.jpg" alt="" class="rounded">
                        </a>
                    </header>
                    <!-- BODY -->
                    <div class="card-body-pub">
                        <div class="title-card px-4 py-2 text-center bg-light">
                            <h3 class="mb-0">TITULO DE LA PUBLICACIÓN </h3>
                        </div>
                        <div class="desc-card px-4 pt-3">
                            <p class="text-center">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?

                            </p>
                        </div>
                    </div>
                    <div class="col-12 d-flex border-top">
                        <!--Like-->
                        <div class=" mb-2 col-5 mt-1">  
                            <button class="button like rounded-circle col-3">
                                <i class="fa fa-heart"></i>
                            </button>
                            <span>55</span>
                        </div>
                        <!--./LIKE-->
                         <!--Comments -->
                         <div class="mb-2 col-7 text-right mt-2 pt-1">  
                            <span>Comentarios:</span><span><strong> 55</strong></span>
                        </div>
                        <!--./Comments-->
                    </div>
                </article>
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
   <!-- PAGINATION JS -->
   <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
   <script src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>

    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/like.js"></script>
</body>
</html>