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

$id = $_POST['IrServicio'];

$conn = conectar();

if ($conn) {
  
$query = "SELECT servicio.imagen, servicio.nombre_servicio, servicio.descripcion, servicio.id_region, region.Nombre from servicio join region on region.id=servicio.id_region where servicio.id=$id";
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
    echo"<p>Ubicacion: " . $row['Nombre'] . "</p>";
    echo"</td>";
    echo"</tr>";
    echo"</table>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"</div>";

    echo "<br><br>";

    if($row['id_region'] == 0 ) {
    echo '
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d814894.8007391326!2d-70.12362147889034!3d-18.41724589373376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915a7e0ceeac0511%3A0x7e4efeaf6214fd1f!2sArica%20y%20Parinacota%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606699014959!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    ';
    } elseif ($row['id_region'] == 1 ){
    echo '
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1916155.6561880526!2d-70.48339503489592!3d-20.279912591815535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915165475beeeb15%3A0x33feb2b2ce6d8fc!2sTarapac%C3%A1%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700254925!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    ';
    } elseif ($row['id_region'] == 2 ){
    echo '
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862918.5980348806!2d-70.46987812041435!3d-24.223834082876746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96a58a71486af89d%3A0x6df135c2c263be29!2sAntofagasta%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606699983154!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    ';
    }elseif ($row['id_region'] == 3 ){
      echo '
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1813509.1499794396!2d-71.05137303891931!3d-27.40661564734916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9691379197ae255f%3A0x1e541d1af2f13834!2sAtacama%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700046168!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      ';
    }elseif ($row['id_region'] == 4 ){
      echo '
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757319.4412828898!2d-71.88429836891362!3d-30.65467861206593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96893835f8510297%3A0x85982eeec5cf03a1!2sCoquimbo%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700188669!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      ';
      }elseif ($row['id_region'] == 5 ){
        echo '
        <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26753.915305608145!2d-71.6285581164112!3d-33.05016325539587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689dde3de20cec7%3A0xeb0a3a8cbfe19b76!2sValpara%C3%ADso%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700561935!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        ';
        }elseif ($row['id_region'] == 6 ){
          echo '
          <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d850712.876334352!2d-71.29916623486923!3d-33.60278309583873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96626f6a7df81e51%3A0x60cdc26d444b83da!2sRegi%C3%B3n%20Metropolitana%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700705402!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          ';
          }elseif ($row['id_region'] == 7 ){
            echo '
            <div class="container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d842485.3788774585!2d-71.5995847027014!3d-34.42780895858839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9663435d63019d29%3A0x17dd0c185ae17ea9!2sO&#39;Higgins%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700767784!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            ';
            }elseif ($row['id_region'] == 8 ){
              echo '
              <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830222.137984543!2d-72.1092250352931!3d-35.626365011874604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966454a2af3b12a1%3A0xe46a957801599b80!2sMaule%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700824043!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              ';
              }elseif ($row['id_region'] == 9 ){
                echo '
                <div class="container">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d819982.392100986!2d-72.50720248027682!3d-36.60095501807452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966ed54c02a19871%3A0x71e1852dc0af03ae!2zw5F1YmxlLCBDaGlsZQ!5e0!3m2!1ses-419!2sus!4v1606700867858!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                ';
                }elseif ($row['id_region'] == 10 ){
                  echo '
                  <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1621525.3173260002!2d-73.59791797680474!3d-37.45973886243256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668484b3b386227%3A0xc8e553de0ce0c351!2zQsOtbyBCw61vLCBDaGlsZQ!5e0!3m2!1ses-419!2sus!4v1606700922041!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
                  ';
                  }elseif ($row['id_region'] == 11 ){
                    echo '
                    <div class="container">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1596372.478325348!2d-73.29560040205364!3d-38.60482667524282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9614b2c8d0e8c75d%3A0x31dd188520a10606!2sAraucan%C3%ADa%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606700997094!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    ';
                    }elseif ($row['id_region'] == 12 ){
                      echo '
                      <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d782637.6452116474!2d-73.21455391495134!3d-39.98212058735364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961681c9a5d1bf59%3A0x61b54b8fec2ecc8e!2sLos%20R%C3%ADos%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606701031973!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>
                      ';
                      }elseif ($row['id_region'] == 13 ){
                        echo '
                        <div class="container">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3030166.66441249!2d-75.45848097223778!3d-42.1257333131215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96183bae0865f2e9%3A0x6f9f31f813b3f88b!2sLos%20Lagos%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606701064704!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        ';
                        }elseif ($row['id_region'] == 14 ){
                          echo '
                          <div class="container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818901.199476557!2d-75.62755134130025!3d-46.37269722850565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbd8aa4fdb9176d11%3A0xcbfcbd94bac1fef3!2zQXlzw6luLCBDaGlsZQ!5e0!3m2!1ses-419!2sus!4v1606701110805!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                          </div>
                          ';
                          }elseif ($row['id_region'] == 15 ){
                            echo '
                            <div class="container">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1222213.2191527584!2d-72.70137795624412!3d-53.25127713497584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbc4d54a49b3481e7%3A0x5b953543d8c5c3d1!2sMagallanes%2C%20Magallanes%20y%20la%20Ant%C3%A1rtica%20Chilena%2C%20Chile!5e0!3m2!1ses-419!2sus!4v1606701149768!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                            ';
                            }


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