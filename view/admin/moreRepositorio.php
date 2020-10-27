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
    <link rel="stylesheet" href="../../css/perfil.css">
    <link rel="stylesheet" href="../../css/calendar.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!-- First Section -->
            <!-- First Section -->
    <section class="container-fluid p-0 m-0"> 
        <!-- row -->
            <?php
                $id=$_POST['id'];
                //Invocacion de la función para cargar usuarios
                repositorioMas($id);
            ?>            
    </section>;
    <!--./ Secondth Section -->


    <!-- Third Section -->
    <!-- <section class="container-fluid w-100 p-0 m-0">
    <hr>
        <div class="row w-100 p-0 m-0">
            <div class="col-12 title-section">
                <h4 class="ml-lg-5 text-center text-lg-left">Mi Historial</h4>
            </div>
        </div>
    </section> -->
    <!--./ Third Section -->

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
    <script src="../../js/updateSelect.js" type="module"></script>
</body>
</html>