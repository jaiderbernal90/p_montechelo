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
    <!-- CAROUSEL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css" />
    <!-- ICON -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/perfil.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!-- Section one -->
    <section class="container-fluid w-100 m-0 p-0 mt-5">
        <div class="row w-100 m-0 p-0 mt-3">
            <div class="col-12 mt-5 text-center title-section">
                <h4>Cambiar foto de perfil</h4>
            </div>
        </div>
        <div class="row w-100 m-0 p-0">
                <div class="col-12 mt-3 text-center">
                    <img src="../../img/<?php echo $_SESSION['img_profile']; ?>" alt="" id="mostrarimagen" class="img-change shadow">
                </div>
        </div>
        <div class="row w-100 m-0 p-0 mt-5">
                <form action="../../controller/admin/update/updatePhoto.php" method="POST" enctype="multipart/form-data" class="form w-100 row">
                    <div class="col-12 text-center"> 
                        <input type="file" name="img_profile" id="img_profile" required accept=".png, .jpeg, .jpg, image/gif">
                    </div>
                    <div class="row w-100 p-0 m-0 mt-3 ">
                        <div class="col-md-6 p-0 m-0 d-flex">
                            <div class="cont-btn rigth">
                                <button type="submit" class="btn btn-primary btn-md btn-cancel">Enviar</button>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 m-0 d-flex w-100">
                            <div class="cont-btn left">
                                <button type="button" class="btn btn-danger btn-md btn-cancel"><a href="perfil.php" class="text-white text-decoration-none">Cancelar</a></button>
                            </div>
                        </div>
                    </div>
                </form>
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
   <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/js/uikit-icons.min.js"></script>
    <!-- MOMENTS JS -->
    <script src="https://momentjs.com/downloads/moment.js"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/photo.js"></script>
</body>
</html>