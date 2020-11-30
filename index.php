<?php
session_start();

require("./resources/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery-3.5.1.slim.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/bootstrap-social.css">
  <link rel="stylesheet" href="./css/font-awesome.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      	<li class="nav-item">
      		<img src="img/logo.png" alt="Logo" height="50px" width="150px">
      	</li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./gallery.php">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./services.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contactus.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./faq.php">FAQ</a>
        </li>
      </ul>

      <?php

      if (!isset($_SESSION["id_user"])) {
        echo
          "<form class='form-inline my-2 my-lg-0'>
          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#i'>Iniciar Sesion</button>
          </form>";
      } else {
        echo
          "<form method='post' class='form-inline my-2 my-lg-0' action='./resources/iniciar_sesion.php'>
          <button type='submit' class='btn btn-primary' name='logout'>Cerrar sesion</button>
        </form>";
      }

      ?>

    </div>
    <div class="modal fade" id="i">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- cabecera del diálogo -->
          <div class="modal-header">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#inicio" id="inicio-pills" data-toggle="pill" role="tab" aria-controls="inicio" aria-selected="true">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#registro" id="registro-pills" data-toggle="pill" role="tab" aria-controls="registro" aria-selected="false">Registrarse</a>
              </li>
            </ul>
            <button type="button" class="close" data-dismiss="modal">X</button>
          </div>
          <script>
            $(document).ready(function() {
              var password = $("#register-password"),
                confirm_password = $("#repeat-password");

              function validatePassword() {

                if (password.val() != confirm_password.val()) {
                  confirm_password[0].setCustomValidity("Las contraseñas no coinciden");
                  confirm_password[0].reportValidity()
                } else {
                  confirm_password[0].setCustomValidity('');
                }
              }
              password.change(validatePassword);
              confirm_password.keyup(validatePassword);

            })
          </script>
          <!-- cuerpo del diálogo -->
          <div class="modal-body">
            <div class="container-fluid">

              <div class="tab-content">
                <div class="tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="inicio-pills">
                  <form method="POST" action="./resources/iniciar_sesion.php">
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Correo</label>
                      <div class="col-lg-9">
                        <input type="email" class="form-control" name="login-correo">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="clave" class="col-lg-3 col-form-label">Contraseña:</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" name="login-password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-lg-3 col-lg-9">
                        <button type="submit" class="btn btn-primary" name="login">Ingresar</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="registro" role="tabpanel" aria-labelledby="registro-pills">
                  <form method="POST" action="./resources/iniciar_sesion.php">
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Nombre Completo:</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="nombre" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Correo:</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="correo">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Nombre de Usuario:</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="usuario" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="clave" class="col-lg-3 col-form-label">Contraseña:</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" name="register-password" id="register-password" require>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="clave" class="col-lg-3 col-form-label">Repetir Contraseña:</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" name="repeat-password" id="repeat-password" require>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Direccion:</label required>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="direccion" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">RUN:</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="run" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Fecha de nacimiento:</label>
                      <div class="col-lg-9">
                        <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usuario" class="col-lg-3 col-form-label">Fono (+56):</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="fono" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-lg-3 col-lg-9">
                        <button type="text" class="btn btn-primary" name="register" id="register">Registrar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>

        </div>
      </div>

  </nav>
  <!-- inicio carrusel -->
  <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" data-slide-to="1"></li>
      <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/alpinismo.jpg" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="img/trekking.jpg" data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="img/lancha.jpg" data-src="holder.js/900x500/auto/#666:#444/text:Third slide" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- fin carrusel -->
  <br><br>

   <br>

  <!-- título -->

  <div class="container">
    <div class="row">
      <div class="col-sm">
      </div>
      <div class="col-sm">
        <h1>Bienvenido a TurismoChile.</h1>
      </div>
      <div class="col-sm">
      </div>
    </div>
  </div>
  <br>

 <!-- primera fila de cartas -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service1.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Publicita tus servicios.</h5>
            <p class="card-text">Regístrate y publicita tu servicio.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service2.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Calidad</h5>
            <p class="card-text">Todos los servicios que ofrecemos cumplen con los estándares mínimos de calidad.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Disponibilidad</h5>
            <p class="card-text">Nuestros servicios están disponibles con los cuatro nueves: 99.99% del tiempo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <!-- fin primera fila de cartas -->

  <!-- segunda fila de cartas -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service4.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Seguridad</h5>
            <p class="card-text">Contamos con personal capacitado para mantener nuestro sitio seguro.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Integridad</h5>
            <p class="card-text">No perdemos ningún dato de los que nos entregues para comunicar a nuestros clientes.</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service6.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Confidencialidad</h5>
            <p class="card-text">Las identidades de nuestros prestadores de servicio permanecen en contacto únicamente en relación cliente-vendedor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <!-- fin segunda fila de cartas -->


  <!-- tercer fila de cartas -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service7.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Turismo Chile</h5>
            <p class="card-text">Somos un equipo comprometido con nuestros servicios.</p>
            <a href="aboutus.php" class="btn btn-primary">Quiénes sómos</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service8.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Servicios Integrales</h5>
            <p class="card-text">Revisa los servicios que nuestros vendedores tienen para tí.</p>
            <a href="services.php" class="btn btn-primary">Ver servicios</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <!-- carta -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/service9.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Contáctanos</h5>
            <p class="card-text">Envíanos una sugerencia, un reclamo o una felicitación.</p>
            <a href="contactus.php" class="btn btn-primary">Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <!-- fin tercer fila de cartas -->

  <!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <h6 class="text-muted lead">CONTACTO:</h6>
          <h6 class="text-muted">
            Casa Matriz N° 889<br>
            Geronimo de alderete #890.<br>
            Teléfonos: +56987526354 – 229765348.<br>
          </h6>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="pull-right">
            <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
            <div class="redes-footer">
              <a class="btn btn-social-icon btn-twitter" href="https://www.twitter.com">
                <span class="fa fa-twitter"></span>
              </a>
              <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com"> 
                <span class="fa fa-facebook"></span>
              </a>
              <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com">
                <span class="fa fa-instagram"></span>
              </a>
            </div>
          </div>
          <div class="row">
            <p class="text-muted small text-right">La Florida, Concha y Toro #660.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>