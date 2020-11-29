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
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
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
      <!-- fin panel de sesiones -->

  </nav>
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
  <br>
 <!-- tabla -->
 <div class="container">
 <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre de servicio</th>
        <th scope="col">Descripción</th>
        <th scope="col">Región</th>
        <th scope="col">Fecha de creación</th>
        <th scope="col" style="display:none">Edición</th>
      </tr>
    </thead>
  <?php

      $conn = conectar();

      if ($conn) {
        $query = "SELECT servicio.id, servicio.nombre_servicio, servicio.descripcion, region.Nombre, servicio.fecha_creacion, servicio.id_usuario from servicio join region on region.id= servicio.id_region join usuario on servicio.id_usuario= usuario.id ORDER BY servicio.id ASC";

        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) > 0) {

          while ($row = mysqli_fetch_assoc($res)) {

            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<th scope='row'>" . $row['nombre_servicio'] . "</th>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['fecha_creacion'] . "</td>";
            echo "<td><form action='servicioDetalle.php' method='POST'><button type='submit' class='btn btn-success' name='botonIr' value='". $row['id'] ."'>IR</button></form></td>";
            if (isset($_SESSION["id_user"]) && isset($_SESSION["id_rol"])) {
              if ($_SESSION["id_user"] == $row['id_usuario'] or $_SESSION["id_rol"] == 3) {
                echo "<td><button type ='button' class='btn btn-secondary'>Editar</button></td>";
                echo "<td><button type ='button' class='btn btn-secondary'>Eliminar</button></td>";
              }
            }
            echo "<tr>";
          }
        } else {
          echo "<h1>NO HAY SERVICIOS EN ESTA REGION</H1>";
        }
      }

      ?>
    </tbody>
  </table>
  </div>
  <!--fin tabla -->

  <br><br>

  <?php 
  
  if(empty($_SESSION["id_user"])){

    echo "<div class='container'>";
    echo "<div class='col-sm'>";
    echo "<div class='card border-default'>";
    echo "<div class='card-header' style='text-align: center;'>";      
    echo "Para Comprar o Ingresar servicio, Inicia sesion!";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

  }elseif(isset($_SESSION["id_user"])){
    if($_SESSION["id_rol"] == 1){

      echo "<div class='container'>";
      echo "<div class='col-sm'>";
      echo "<div class='card border-default'>";
      echo "<div class='card-header' style='text-align: center;'>";      
      echo "Para ingresar un servicio, Upgradea tu cuenta <button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal2'>-> Aqui <-</button>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "<form action='./resources/upgradeRol.php' method='POST' enctype='multipart/form-data'>";
      echo "<div id='myModal2' class='modal fade' role='dialog'>";
      echo "<div class='modal-dialog'>";
      echo "<div class='modal-content'>";
      echo "<div class='modal-header'>";
      echo "<h4 class='modal-title'>Hacer click en Upgrade para comenzar a promocionar tus servicios</h4>";
      echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
      echo "</div>";
      echo "<div class='modal-footer justify-content-center'>";
      echo "<button type='submit' class='btn btn-success data='modal'>Upgrade</button>";
      echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</form>";
    }
    if($_SESSION["id_rol"] == 2 or $_SESSION["id_rol"] == 3){

      echo "<div class='container'>";
      echo "<div class='col-sm'>";
      echo "<div class='card border-default'>";
      echo "<div class='card-header' style='text-align: center;'>";
      echo "Ingresa un nuevo Servicio <button type='button' class='btn btn-info' data-toggle='modal' data-target='#myModal'>-> Aqui <-</button>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "<form action='./resources/ingresoServicio.php' method='POST' enctype='multipart/form-data'>";
      echo "<div id='myModal' class='modal fade' role='dialog'>";
      echo "<div class='modal-dialog'>";
      echo "<div class='modal-content'>";
      echo "<div class='modal-header'>";
      echo "<h4 class='modal-title'>Ingresar Nuevo Servicio:</h4>";
      echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
      echo "</div>";
      echo "<div class='modal-body'>";
      echo "<div class='form-group row'>";
      echo "<label for='usuario' class='col-lg-6 col-form-label'>Nombre del Servicio:</label>";
      echo "<div class='col-lg-12'>";
      echo "<input type='text' class='form-control' required='' name='Nombre_Servicio'>";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row'>";
      echo "<label for='usuario' class='col-lg-6 col-form-label'>Descripcion:</label>";
      echo "<div class='col-lg-12'>";
      echo "<textarea class='form-control' required='' rows='7' cols='63' style='resize: none;' id='Descripcion' name='Descripcion' placeholder='Descripcion....'></textarea>";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row'>";
      echo "<label for='usuario' class='col-lg-6 col-form-label'>Region:</label>";
      echo "<div class='col-lg-12'>";
      echo "<select name='Region'>";
      echo "<option value='0'>Arica</option>";
      echo "<option value='1'>Tarapacá</option>";
      echo "<option value='2'>Antofagasta</option>";
      echo "<option value='3'>Atacama</option>";
      echo "<option value='4'>Coquimbo</option>";
      echo "<option value='5'>Valparaiso</option>";
      echo "<option value='6'>Santiago</option>";
      echo "<option value='7'>O'Higgins</option>";
      echo "<option value='8'>El Maule</option>";
      echo "<option value='9'>Ñuble</option>";
      echo "<option value='10'>Biobio</option>";
      echo "<option value='11'>La Araucanía</option>";
      echo "<option value='12'>Los Ríos</option>";
      echo "<option value='13'>Los Lagos</option>";
      echo "<option value='14'>Aysen</option>";
      echo "<option value='15'>Magallanes</option>";
      echo "</select>";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row'>";
      echo "<label for='usuario' class='col-lg-6 col-form-label'>Imagen del Servicio:</label>";
      echo "<div class='col-lg-12'>";
      echo "<input type='file' class='form-control' required='' name='imagen' accept='image/jpeg'>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "<div class='modal-footer'>";
      echo "<button type='submit' class='btn btn-success data='modal'>Ingresar</button>";
      echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</form>";
    }
  }
  
   
    
  ?>

<br><br>
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
              <a href="https://www.facebook.com/"><img src="img/facebook.jpg" width="38"></a>
              <a href="https://twitter.com/"><img src="img/twitter.jpg" width="50"></a>
              <a href="https://www.instagram.com/"><img src="img/instagram.jpg" width="50"></a>
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