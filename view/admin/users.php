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
    <link rel="shortcut icon" href="../../img/logo-montechelo.png" type="image/x-icon">
    <title>MONTECHELO</title>
    <!--Local CSS -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/estilos-home.css">
    <link rel="stylesheet" href="../../css/table.css">
    <link rel="stylesheet" href="../../css/footer.css">
</head>
<body class="scrollbar-light-blue">
   <!--Navbar-->
        <?php include('header.php') ?>
    <!--/.Navbar-->
    <!--First section-->

    <section class="first-section container-fluid p-0 m-0 mt-5">
            <div class="row m-0 mt-4 p-0">
                <div class="col-12 mt-5">
                    <header>
                        <h4 class="title-section text-center">Usuarios</h4>
                    </header>
                </div>
            </div>
            <div class="row w-100 m-0 mt-5">
                <div class="text-center m-auto">
                    <table id="example" class="display table dataTable table-striped table-sm" cellspacing="0" width="100%">
                        <thead class="header-table">
                            <tr class="text-center">
                                <th class="th-sm">DOCUMENTO</th>
                                <th class="th-sm">NOMBRE</th>
                                <th class="th-sm">EMAIL</th>
                                <th class="th-sm">ROL</th>
                                <th class="th-sm">ACTIVO</th>
                                <th class="th-sm"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">Juan Sebastian Bustos</td>
                                <td class="colum3">sebastianbustos1509@montechelo.com</td>
                                <td class="colum4">Administrador</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye" title="Ver más"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">1003588111</td>
                                <td class="colum2">Jaider Alejandro Bernal Camacho</td>
                                <td class="colum3">jaider.bernal90@montechelo.com</td>
                                <td class="colum4">Administrador</td>
                                <td class="colum5">No</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">1003056258</td>
                                <td class="colum2">Pepiro Perez</td>
                                <td class="colum3">pepito12@montechelo.com</td>
                                <td class="colum4">Lider</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">No</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">No</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                            <tr>
                                <td class="colum1">205125181</td>
                                <td class="colum2">System Architect</td>
                                <td class="colum3">Edinburgh</td>
                                <td class="colum4">61</td>
                                <td class="colum5">Si</td>
                                <td class="colum6 text-center"><i class="fas fa-eye"></i></td>
                            </tr>
                        </tbody>
                    </table>
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
   <!-- DATATABLE JS -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="../../js/menu.js"></script>
    <script src="../../js/table.js"></script>
</body>
</html>