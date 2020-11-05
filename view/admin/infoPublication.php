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
    <!-- DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- ICON -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/estilos-home.css">
    <link rel="stylesheet" href="../../css/publicaciones.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->
    <section class="container-fluid w-100 p-0 m-0 mt-5">
        <div class="font-up">
            <div>
                <button class="btn btn-color1 mt-5 ml-2"><a href="publicaciones.php" class="text-white">VOLVER</a></button>
            </div>
        </div>
        <div class="row w-100 m-0 p-0 ">
            <div class="col-12 p-0 my-5 d-flex">
                <h4 class="title-section m-auto">TITULO PUBLICACION</h4>
            </div>
        </div>
    </section>
    <section class="container-fluid w-100 p-0 m-0">
    <div class="row w-100 m-0 p-0 ">
            <div class="col-12">
                <article class="card">
                    <!-- HEADER -->
                    <header class="card-body-pub">
                        <a href="infoPublication.php">
                            <img src="../../img/sky-5114499_1920.jpg" alt="" class="rounded img-fluid ">
                        </a>
                    </header>
                    <!-- BODY -->
                    <div class="card-body-pub">
                        <div class="desc-card px-5 pt-4 text-center">
                            <p>
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
                            <span data-toggle="modal" data-target="#modalLike">55</span>
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
            <div class="col-12 mt-5">
                <div class="media m-auto px-0 px-md-5  pt-0">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"
                        alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold blue-text">Anna Smith</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                        fringilla. Donec lacinia congue felis in faucibus.

                        <div class="media mt-3 shadow-textarea">
                        <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 font-weight-bold blue-text">Danny Tatuum</h5>
                            <div class="form-group basic-textarea rounded-corners">
                                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea345" rows="3" placeholder="Write your comment..."></textarea>
                            </div>
                            <button class="btn btn-primary p-0 px-4 py-2"><i class="fas fa-paper-plane"></i> </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="media  m-auto p-5 pt-0">
                        <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg"
                            alt="Avatar">
                        <div class="media-body">
                            <h5 class="mt-0 font-weight-bold blue-text">Caroline Horwitz</h5>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis odit minima eaque dignissimos recusandae
                            officiis commodi nulla est, tempore atque voluptas non quod maxime, iusto, debitis aliquid? Iure ipsum,
                            itaque.
                        </div>
                    </div>
                </div>
            </div>
    </section>

     <!-- MODAL PHOTO -->
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
   <!-- DATATABLE JS -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!-- SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/like.js"></script>
</body>
</html>