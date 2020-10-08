<!--Navbar-->
<nav class="navbar navbar-dark amber menu-bar fixed-top">
    <!-- Navbar brand -->
    <img src="../../img/Brandcolor-little-menu.png" alt="" class="logo-menu">
    <main class="navbar-toggler d-flex">
        <div class="group-cont navbar-toggler">
        <!-- Message and user -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <p class="text-dark pt-4 text-menu  d-none d-lg-block "><?php echo $_SESSION['name'].' '.$_SESSION['last_name']; ?> </p>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" id="btnn" >
                            <i class="fas fa-envelope icon-message px-3  dropdown-not"></i>
                        </a>
                    </li>
                <li class="nav-item avatar img-icon px-2 d-none d-lg-block">    
                    <img src="../../img/user.png" width="42" height="42" class="rounded-circle z-depth-0"
                    alt="avatar image">
                </li>
            </ul>
        </div>
        <!-- Collapse button -->
        <button class="navbar-toggler third-button text-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22"
        aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon3"><span></span><span></span><span></span></div>
        </button>
    </main>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse li-menu" id="navbarSupportedContent22">
        <!-- REPONSIVE MOBILE PERFIL -->
        <div class="text-center sec-respon pt-3 d-block d-lg-none">
            <img src="../../img/user.png" alt="" width="100" height="100" class="mb-3 shadow rounded-circle">
            <div class="mb-3">
                <p class="text-menu mb-0"> <?php echo $_SESSION['name'].' '.$_SESSION['last_name']?> </p>
                <div class="sub-text">
                    <span>Colaborador</span>
                </div>      
            </div>
        </div>
        <!-- Links -->
        <ul class="navbar-nav mr-auto text-center content-menu scrollbar-light-blue-menu scrollbar-light-blue">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item drop dropdown text-center">
                <a class="nav-link dropdown-toggle" aria-labelledby="navbarDropdownMenuLink-555" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Publicaciones</a>
                <main class="text-center content-drop dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                    <li class="dropdown-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="dropdown-item">
                        <a class="nav-link" href="#">Anuncios</a>
                    </li>
                    <li class="dropdown-item">
                        <a class="nav-link" href="#">Agregar Publicacion</a>
                    </li>
                </main>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Plan Estrategico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Solicitudes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Documentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Calendarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SIG</a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" href="../../controller/sessions/cerrarSesion.php">Cerrar Sesión</a>
            </li>
            <li class="nav-item pb-3">
                <a class="nav-link" href="#">Ayuda</a>
            </li>
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>