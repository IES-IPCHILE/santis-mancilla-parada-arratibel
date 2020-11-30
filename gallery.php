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
  <br>

  <!-- Modal / Ventana / Overlay en HTML -->
  <div id="editar" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form enctype="multipart/form-data" method="POST" action="./resources/imagen.php">
          <div class="modal-header">
            <h4 class="modal-title">Editar imagen</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="usuario" class="col-lg-2 col-form-label">Imagen:</label>
              <div class="col-lg-10">
                <input type="file" class="form-control" name="imagen">
              </div>
            </div>
            <div class="form-group row">
              <label for="usuario" class="col-lg-2 col-form-label">Titulo:</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="titulo" id="tituloEditarImagen">
              </div>
            </div>
            <input type="hidden" name="id" id="idEditarImagen" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="editarImagen">Continuar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="agregar" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="./resources/imagen.php" enctype="multipart/form-data">
          <div class="modal-header">
            <h4 class="modal-title">Agregar imagen</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label for="usuario" class="col-lg-2 col-form-label">Imagen:</label>
              <div class="col-lg-10">
                <input type="file" class="form-control" name="imagen" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="usuario" class="col-lg-2 col-form-label">Titulo:</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="titulo" id="tituloAgregarImagen" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="agregarImagen">Continuar</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <div id="eliminar" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">¿Estás seguro?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <form method="POST" action="./resources/imagen.php">
          <div class="modal-body">
            <p>¿Seguro que quieres borrar esta imagen?</p>
            <p class="text-warning"><small>Si lo borras, puede que no se pueda volver a recuperar.</small></p>
            <input type="hidden" name="id" id="idEliminarImagen" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger" id="eliminarImagen" name="eliminarImagen">Eliminar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- galería -->




  <!-- Botón en HTML (lanza el modal en Bootstrap) -->

  <script>
    let editarImagen = (titulo, id) => {
      $("#idEditarImagen").val(id);
      $("#tituloEditarImagen").val(titulo);
    }

    let eliminarImagen = (id) => {
      $("#idEliminarImagen").val(id);
    }
  </script>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

        <?php

        $conn = conectar();

        $query = "SELECT * from imagen";

        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) > 0) {

          $index = 0;

          while ($row = mysqli_fetch_assoc($res)) {

            echo '
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="data:image/png;base64,' . base64_encode($row['imagen']) . '" alt="Card image cap" height="300px">
                <div class="card-body">
                  <p class="card-text">' . $row['titulo'] . '</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">';
            if (isset($_SESSION["id_rol"])) {
              if ($_SESSION["id_rol"] == 3) {
                echo '<a href="#editar" class="btn btn-sm btn-outline-secondary" data-toggle="modal" onclick="editarImagen(\'' . $row["titulo"] . '\',' . $row["id"] . ')">Editar</a>
                        <a href="#eliminar" class="btn btn-sm btn-outline-danger" data-toggle="modal" onclick="eliminarImagen(' . $row["id"] . ')">Eliminar</a>';
              }
            }

            echo ' </div>
                    <small class="text-muted">Subida el ' . explode(" ", $row["fecha"])[0] . '</small>
                  </div>
                </div>
              </div>
            </div>
  
            ';
          }
        }

        if (isset($_SESSION["id_rol"])) {
          if ($_SESSION["id_rol"] == 3) {

            echo '
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
    
                <a href="#agregar" role="button" data-toggle="modal" class="m-3">
                  <!-- ICONO SACADO DE BOOTSTRAP ICONS -->
                  <svg width="5em" height="10em" viewBox="0 0 16 16" class="card-img-top bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                  </svg>
                </a>
    
                <div class="card-body d-flex justify-content-center">
    
                  <p class="card-text pb-5">Agregar una nueva imagen</p>
    
                </div>
    
              </div>
            </div>
            
            ';
          }
        }

        ?>

      </div>
    </div>
  </div>
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