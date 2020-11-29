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
                  confirm_password[0].reportValidity();
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

  <?php

$id = $_POST['botonIr'];

$conn = conectar();

if ($conn) {
  
$query = "SELECT servicio.imagen, servicio.nombre_servicio, servicio.descripcion from servicio where servicio.id=$id";
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) > 0) {

  while ($row = mysqli_fetch_assoc($res)) {

    echo"<div class='container'>";
    echo"<div class='col-md'>";
    echo"<div class='card border-default'>";
    echo"<div class='card-body'>";
    echo"<table>";
    echo"<tr>";
    echo"<td width='300px'>";
    ?>
    <img class="card-img-top img-thumbnail" style="height:300px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imagen']); ?>">
    <?php
    echo"</td>";
    echo"<td width='25px'></td>";
    echo"<td width='800px' style='vertical-align: top;'><h1>" . $row['nombre_servicio'] . "</h1>";
    echo"<hr>";
    echo"<p>" . $row['descripcion'] . "</p>";
    echo"</td>";
    echo"</tr>";
    echo"</table>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"<br>";

}
}else{
    echo"<h1>NO EXISTE REGISTRO.</h1>";
}
}

?>       
  
  <div class="container">
    <div>
        <h3>Selección Packs de Servicios.</h3><br>
    </div>
    <div class="row">
        <div class="col-sm">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Pack Basico</h3> <span class="plan-currency">$</span> <span class="value">9.990</span>
            </div>
            <div class="card-body">
                <ul>
                    <li>Transporte hacia el lugar.</li>
                    <li>Cantidad de personas Incluidas 2-3</li>
                    <li class="text-muted"><del>Guía Incluido</del></li>
                    <li class="text-muted"><del>Almuerzo Incluido</del></li>
                </ul>
                <button type="button" class="container btn btn-primary" data-toggle="modal" data-target="#pago">Pagar</button>
            </div>
        </div>
        </div>
        <div class="col-sm">
        <div class="card">
            <div class="card-header bg-success">
                <h3>Pack Normal</h3> <span class="plan-currency">$</span> <span class="value">16.990</span>
            </div>
            <div class="card-body">
                <ul>
                    <li>Transporte hacia el lugar.</li>
                    <li>Cantidad de personas Incluidas 3-4</li>
                    <li class="text-muted"><del>Guía Incluido</del></li>
                    <li class="text-muted"><del>Almuerzo Incluido</del></li>
                </ul>
                <button type="button" class="container btn btn-success" data-toggle="modal" data-target="#pago">Pagar</button>  
                             
            </div>
        </div>
        </div>    
        <div class="col-sm">
        <div class="card">
            <div class="card-header bg-warning">
                <h3>Pack Vip</h3> <span class="plan-currency">$</span> <span class="value">24.990</span>
            </div>
            <div class="card-body">
                <ul>
                    <li>Transporte hacia el lugar.</li>
                    <li>Cantidad de personas Incluidas 4-5</li>
                    <li>Guía Incluido</li>
                    <li class="text-muted"><del>Almuerzo Incluido</del></li>
                </ul>
                <button type="button" class="container btn btn-warning" data-toggle="modal" data-target="#pago">Pagar</button>
            </div>
        </div>
        </div>        
        <div class="col-sm">
        <div class="card">
            <div class="card-header bg-danger">
                <h3>Pack Premium</h3> <span class="plan-currency">$</span> <span class="value">32.990</span>
            </div>
            <div class="card-body">
                <ul>
                    <li>Transporte hacia el lugar.</li>
                    <li>Cantidad de personas Incluidas 4-5</li>
                    <li>Guía Incluido</li>
                    <li>Almuerzo Incluido</li>
                </ul>
                <button type="button" class="container btn btn-danger" data-toggle="modal" data-target="#pago">Pagar</button>
            </div>
        </div>
        </div>        
    </div>
</div>
<div class="modal fade" id="pago">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ingrese sus Datos</h4>
        <button type="button" class="close" data-dismiss="modal">X</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form>
            <div class="container">
              <div class="credit-card-div">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="form-group row">
                      <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Ingresar numero de tarjeta">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="help-block text-muted small-font">Mes</span> <input type="text" class="form-control" placeholder="MM">
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="help-block text-muted small-font">Año</span> <input type="text" class="form-control" placeholder="YY">
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                        <span class="help-block text-muted small-font">CCV</span> <input type="text" class="form-control" placeholder="CCV">
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-3"><img src="img/tarjeta.png" class="img-rounded"></div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12 pad-adjust">
                        <input type="text" class="form-control" placeholder="Nombre del titular">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-12 pad-adjust">
                        <div class="checkbox">
                          <label><input type="checkbox" checked="" class="text-muted"> Guardar detalles para pagos rapidos</label>
                        </div>
                      </div>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row container">
          <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <input type="button" class="btn btn-danger" value="Cancelar" data-dismiss="modal">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
            <input type="button" class="btn btn-warning btn-block" value="Pagar Ahora" data-dismiss="modal">
          </div>
        </div>
      </div>
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