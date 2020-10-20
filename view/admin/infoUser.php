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
    <!-- DATATABLE -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- ICON -->
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/estilos-home.css">
    <link rel="stylesheet" href="../../css/user.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->

    <section class="first-section container-fluid p-0 m-0 mt-5">
        <!-- Title -->
            <div class="row m-0 mt-4 p-0">
                <div class="col-12 mt-5">
                    <header>
                        <h4 class="title-section text-center">Información Usuarios</h4>
                    </header>
                </div>
            </div>
        <!-- FORM -->
        <div class="row m-0 p-0">
            <div class="col-12">
                <form autocomplete="off" class="form m-4 m-md-5" action="../../controller/admin/update/updateUser.php" method="POST">
                    <?php
                        //Invocacion de la función para cargar usuarios
                        userInformation();
                    ?> 
                    <div class="form-row d-flex mt-5">
                            <div class="col-5 text-md-right text-center">
                                <label class="btn btn-md btn-info" ><a class='text-white' href="users.php">Volver</a></label>
                            </div> 
                            <div class="col-1 text-md-right text-center">
                                <label class="btn btn-md btn-info" onclick="unlockInfo()"><a class='text-white'>Modificar</a></label>
                            </div> 
                            <div class="col-3  text-center">
                                <button disabled type="submit" class="btn btn-md btn-info seleccionar"><a class='text-white'>  Guardar</a></button>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </section>

    
    <!--FOOTER-->
    <footer class="footer-login container-fluid p-0 m-0"-->   
        <?php include('../footer.html')?>
    </footer>
    <!--Funcion para desbloquear el boton guardar-->
    <script>
        function unlockInfo() {
                inputBlock= document.getElementsByClassName("blockInput");
                    for (var i=0;i<inputBlock.length;i++) {
                        inputBlock[i].removeAttribute("readonly");
                    }
                    selectBlock=document.getElementsByClassName("seleccionar");
                    for (var i=0;i<selectBlock.length;i++) {
                        selectBlock[i].removeAttribute("disabled");
                    }
        }
    </script>


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
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/updateSelect.js"></script>
</body>
</html>