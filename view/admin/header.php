<?php include('../../controller/translation/roles.php') ?>
<!--Navbar-->
<nav class="navbar navbar-dark amber menu-bar fixed-top">
    <!-- Navbar brand -->
    <a href="home.php" class="ml-md-5"><img src="../../img/Brandcolor-little-menu.png" alt="" class="logo-menu"></a>
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
                    <a href="perfil.php"><img src="../../img/<?php echo $_SESSION['img_profile']; ?>" class="rounded-circle z-depth-0 avatar-xs"
                    alt="avatar image"></a>
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
        <a href="perfil.php"><img src="../../img/<?php echo $_SESSION['img_profile']; ?>" alt="" class="mb-3 shadow rounded-circle avatar-md"></a>
            <div class="mb-3">
                <p class="text-menu mb-0"> <?php echo $_SESSION['name'].' '.$_SESSION['last_name']?> </p>
                <div class="sub-text">
                    <span> <?php echo translationRole($_SESSION['role']);?></span>
                </div>      
            </div>
        </div>
        <!-- Links -->
        <?php include('links.html') ?>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>