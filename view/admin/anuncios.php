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
            <div class="w-25 ml-5">
                <select name="filtrer_selec" id="filtro" class="seleccionar md-form w-100" name="deparment" >
                    <option value="" selected >FILTRAR</option>
                    <option value="asc">A-Z</option>
                    <option value="desc">Z-A</option>
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
        <div class="row w-100 m-0 p-0 d-flex">
            <div class="col-12">
                <article class="card m-auto">
                        <!-- HEADER -->
                        <header class="card-body-anun d-flex  bg-dark text-white">
                            <div class="col-12 second-body">
                                    <div class="d-flex w-100">
                                        <span class="text-left mr-auto">juan@montechelo.com</span>
                                        <span class="text-right ml-auto">30/07/2020 8:00 AM</span>
                                    </div>
                                    <div class="title-card px-4 py-2 text-center text-white">
                                        <h3 class="mb-0">TITULO DEL ANUCIO</h3>
                                    </div>           
                            </div>
                        </header>
                        <!-- BODY -->
                        <div class="card-body-pub px-3">
                            <div class="desc-card px-4 pt-5 text-center">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?

                                </p>
                                <div class="text-img">
                                    <img src="../../img/infographics.jpg" alt="Anuncio">
                                </div>
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

            <div class="row w-100 m-0 p-0 d-flex mt-5">
                <div class="col-12">
                    <article class="card m-auto">
                        <!-- HEADER -->
                        <header class="card-body-anun d-flex  bg-dark text-white">
                            <div class="col-12 second-body">
                                    <div class="d-flex w-100">
                                        <span class="text-left mr-auto">juan@montechelo.com</span>
                                        <span class="text-right ml-auto">30/07/2020 8:00 AM</span>
                                    </div>
                                    <div class="title-card px-4 py-2 text-center text-white">
                                        <h3 class="mb-0">TITULO DEL ANUCIO</h3>
                                    </div>           
                            </div>
                        </header>
                        <!-- BODY -->
                        <div class="card-body-pub px-3">
                            <div class="desc-card px-4 pt-5 text-center">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, doloremque. Qui, iure laborum! Voluptates aliquid debitis laudantium nam quibusdam fuga ipsum ab delectus fugiat id ipsa officiis nemo, voluptas tempora?

                                </p>
                                <div class="text-img">
                                    <img src="../../img/diseno-plantilla-infografia_1270-51.jpg" alt="Anuncio">
                                </div>
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