<!DOCTYPE html>
<html lang="en">
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
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/estilos-home.css">
    <link rel="stylesheet" href="../../css/footer.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('../header.html') ?>
    <!--/.Navbar-->
    <!--First section-->
    <section class="fond-item d-block" >
        <!--Mask-->
        <div class="view">
        <div class="full-bg-img flex-center mask mask-sec-one white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
            <li>
                <h1 class="font-weight-bold text-uppercase mt-5">Type Something here</h1>
            </li>
            <li>
                <p class="font-weight-bold text-uppercase py-4">Type Something here</p>
            </li>
            <li class="list-inline-item">
                <div class="input-group md-form form-sm form-2 pl-0">
                    <input class="form-control my-0 py-1 red-border text-white" type="text" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text white lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                            aria-hidden="true"></i></span>
                    </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
        <!--/.Mask-->
    </section>
    <!--/.First section-->
    <!--Second Section-->
    <section class="container-fluid w-100 text-center section-second">
        <div class="row">
            <h4 class="title-section m-auto">Proxima pausa activa en...</h4>
        </div>
        <div class="row d-block">
            <div class="wrap">
                <div class="widget">
                <div class="header-wrap"></div>
                    <div class="reloj shadow">
                        <span id="horas" class="horas"></span>
                        <span>:</span>
                        <span id="minutos" class="minutos"></span>
                        <span>:</span>
                        <span id="segundos" class="segundos"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.Second Section-->
    <!--Tird section-->
    <section class="full-reset text-center w-100 container-fluid mt-5 pb-5 d-block bg-white" >
            <div class="row text-center mt-5">
                <h4 class="m-auto title-section">Estadísticas</h4>
            </div>
            <div class="row mb-5 mt-5">
                <div class="col-12">
                    <a href="" class="mr-md-5">
                        <article class="tile">
                            <div class="tile-icon full-reset"><i class="zmdi fas fa-user-tie fa-xs"></i></div>
                            <div class="tile-name all-tittles">Usuarios</div>
                            <div class="tile-num full-reset">100</div>
                        </article>
                    </a>
                    <a href="" class="mr-md-5">
                        <article class="tile">
                            <div class="tile-icon full-reset"><i class="fas fa-folder-open fa-xs"></i></div>
                            <div class="tile-name all-tittles">Publicaciones</div>
                            <div class="tile-num full-reset">410</div>
                        </article>
                    </a>
                    <a href="">
                        <article class="tile">
                            <div class="tile-icon full-reset"><i class="fas fa-stamp fa-xs"></i></div>
                            <div class="tile-name all-tittles" style="width: 90%;">Solicitudes</div>
                            <div class="tile-num full-reset">30</div>
                        </article>
                    </a>
                </div> 
            </div>
        </section>
     <!--/.Tird section-->
    <!--fourth section-->
    <section class="w-100 section-fourth container-fluid p-0">
        <div class="my-5">
            <h4 class="title-section text-center">Publicaciones</h4>
        </div>
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                    alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Nueva Publicación 1</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, in id animi voluptatum, corrupti laboriosam veniam molestias rerum iure </p>
                </div>
            </div>
            <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Nueva Publicación 2</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, in id animi voluptatum, corrupti laboriosam veniam molestias rerum iure </p>
            </div>
            </div>
            <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Nueva Publicación 3</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, in id animi voluptatum, corrupti laboriosam veniam molestias rerum iure </p>
            </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
        <div class="button-sec text-center mt-4 mb-4">
            <button type="button" class="btn btn-primary p-2"><i class="fas fa-plus"></i></button>
        </div>
    </section>
    <!--/.fourth section-->
    <!--Fifth Section-->
    <section class="section-fifth full-reset container-fluid p-0 m-0 w-100">
        <div class="row p-0 m-0 w-100">
            <div class="col-12 col-md-6 col-lg-4 p-0">
                  <!-- Rotating card -->
                <div class="card-wrapper">
                <div id="card-1" class="card card-rotating text-center">

                    <!-- Front Side -->
                    <div class="face front">

                    <!-- Image-->
                    <div class="card-up">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                    </div>

                    <!-- Avatar -->
                    <div class="avatar avatar-card"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle"
                        alt="Sample avatar image.">
                    </div>

                    <!-- Content -->
                    <div class="card-body">
                        <h4 class="font-weight-bold mb-3">Marie Johnson</h4>
                        <p class="font-weight-bold blue-text">Web developer</p>
                        <!-- Triggering button -->
                        <div class="card-body-two">
                            <!-- Content -->
                            <h4 class="font-weight-bold mb-0">Fecha de cumpleaños</h4>
                            <hr>
                            <p>7 de Octubre</p>
                        </div>
                    </div>
                    </div>
                    <!-- Back Side -->
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 p-0">
                  <!-- Rotating card -->
                  <div class="card-wrapper">
                <div id="card-1" class="card card-rotating text-center">

                    <!-- Front Side -->
                    <div class="face front">

                    <!-- Image-->
                    <div class="card-up">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                    </div>

                    <!-- Avatar -->
                    <div class="avatar avatar-card"><img src="../../img/user.png" class="rounded-circle"
                        alt="Sample avatar image.">
                    </div>

                    <!-- Content -->
                    <div class="card-body">
                        <h4 class="font-weight-bold mb-3">Juan Johnson</h4>
                        <p class="font-weight-bold blue-text">Web developer</p>
                        <!-- Triggering button -->
                        <div class="card-body-two">
                            <!-- Content -->
                            <h4 class="font-weight-bold mb-0">Fecha de cumpleaños</h4>
                            <hr>
                            <p>8 de Octubre</p>
                        </div>
                    </div>
                    </div>
                    <!-- Back Side -->
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 p-0 m-auto">
                  <!-- Rotating card -->
                <div class="card-wrapper">
                <div id="card-1" class="card card-rotating text-center">

                    <!-- Front Side -->
                    <div class="face front">

                    <!-- Image-->
                    <div class="card-up">
                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo7.jpg" alt="Image with a photo of clouds.">
                    </div>

                    <!-- Avatar -->
                    <div class="avatar avatar-card"><img src="../../img/girl-919048_1280.jpg" class="rounded-circle"
                        alt="Sample avatar image.">
                    </div>

                    <!-- Content -->
                    <div class="card-body">
                        <h4 class="font-weight-bold mb-3">Juana Johnson</h4>
                        <p class="font-weight-bold blue-text">Web developer</p>
                        <!-- Triggering button -->
                        <div class="card-body-two">
                            <!-- Content -->
                            <h4 class="font-weight-bold mb-0">Fecha de cumpleaños</h4>
                            <hr>
                            <p> 9 de Octubre </p>
                        </div>
                    </div>
                    </div>
                    <!-- Back Side -->
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.Fifth Section-->
    
    
    
    
    
    
    
    
    
    <!--Like-->
    <!--div>     
        <button class="button like rounded">
            <i class="fa fa-heart"></i>
        </button>
        <button class="button thumb rounded">
            <i class="fa fa-thumbs-up"></i>
        </button> 
    </!--div-->
    <!--./LIKE-->
    <!--FOOTER
    <footer class="footer-login container-fluid p-0 m-0"-->   
        <!--?php include('../footer.html')?-->
    <!--footer-->
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
    <script src="../../js/cont.js"></script>
</body>
</html>