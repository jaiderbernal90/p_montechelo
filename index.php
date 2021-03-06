<?php
  require_once('controller/sessions/remember.php');
  validation();
?>
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
     <!-- ICON -->
     <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>INTRANET MONTECHELO</title>
</head>
<body class="scrollbar-light-blue">
  <!--Header Logo / Laptop - PC -->
    <header class="cont-top">
          <img src="img/Brandcolor-positivo.png" alt="" class="" width="175" height="69">
          <div class="icon">
            <i class="fas fa-info-circle fa-2x pt-3"></i>
          </div>
    </header>
    <!--Header Logo / TABLET - MOVIL -->
    <header class="logo-sm text-center pt-4">
        <img src="img/logo-montechelo.png" alt="" class="log-sm">
    </header>
   <!--Principaly Section -->
     <section class="log-large">
      <main class="container-fluid">
          <div class="font-down">
            <header class="text-center text-bar">
              <!--PRINCIPALY TEXT-->
              <h3 class="title-info">Bienvenido a Montechelo</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo est vero numquam aut commodi et optio earum quibusdam? Voluptates, nesciunt aut! Perferendis maiores quia amet nam inventore dicta, exercitationem itaque</p>
            </header>
            <div class="form font-form font-form-sm">
              <header class="mt-5 ml-5 title-login">
                 <h4 class="title-login-h"><strong>Iniciar Sesión</strong></h4> 
              </header>
              <div>
                <div class="inside-form">
                     <!-- FORM LOGIN -->
                      <form action="controller/sessions/iniciarSesion.php" class="mt-0 form-init" method="POST">
                        <!-- Email -->
                        <div class="md-form">
                          <input type="email" name="email" id="materialLoginFormEmail" class="form-control material-tooltip-main email-log" pattern="[a-zA-Z0-9_.-]+([.][a-zA-Z0-9_]+)*@montechelo.com" oninvalid="setCustomValidity('Ingrese un formato de correo valido: nombre@montechelo.com')" oninput="setCustomValidity('')"  minlength="8" required>
                          <label for="materialLoginFormEmail">Correo</label>
                        </div>
                        <!-- Password -->
                        <div class="md-form">
                          <input type="password" name="password" id="materialLoginFormPassword" class="form-control pass-log">
                          <label for="materialLoginFormPassword" minlength="5" required>Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-around">
                          <div>
                            <!-- Remember me -->
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                              <label class="form-check-label" for="materialLoginFormRemember">Recordarme</label>
                            </div>
                          </div>
                          <div class="link-pass">
                            <!-- Forgot password -->
                            <a href="">Olvidaste la contraseña?</a>
                          </div>
                        </div>
                        <!-- Sign in button -->
                        <button class="btn btn-login waves-effect w-100 mt-5 z-depth-0">Ingresar</button>
                        <!--Big blue-->
                        <div class="w-100 text-center">
                          <div class="spinner-grow text-primary text-center" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>
                        </div>
                       
                      </form>
                    </div>
              </div>
            </div>
          </div>
      </main>
     </section>
      <!-- Footer--> 
      <footer class="footer-login container-fluid p-0 m-0">
        <?php include('view/footer.html') ?>
      </footer>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!--LOCAL JAVASCRIPT-->
    <script src="js/login.js" type="text/javascript"></script>
</body>
</html>