<?php session_start() ?>
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
          <a class="nav-link" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Galeria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">Quiénes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">Contacto</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inicio">Iniciar Sesion</button>&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registro">Registrar</button>
      </form>
    </div>
    <div class="modal fade" id="inicio">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

          <!-- cabecera del diálogo -->
          <div class="modal-header">
            <h4 class="modal-title">Iniciar Sesion</h4>
            <button type="button" class="close" data-dismiss="modal">X</button>
          </div>

          <!-- cuerpo del diálogo -->
          <div class="modal-body">
            <div class="container-fluid">
              <form>
                <div class="form-group row">
                  <label for="usuario" class="col-lg-3 col-form-label">usuario:</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="usuario">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="clave" class="col-lg-3 col-form-label">Contraseña:</label>
                  <div class="col-lg-9">
                    <input type="password" class="form-control" id="clave">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-lg-3 col-lg-9">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>

        </div>
      </div>

    </div>
    <div class="modal fade" id="registro">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

          <!-- cabecera del diálogo -->
          <div class="modal-header">
            <h4 class="modal-title">Iniciar Sesion</h4>
            <button type="button" class="close" data-dismiss="modal">X</button>
          </div>

          <!-- cuerpo del diálogo -->
          <div class="modal-body">
            <div class="container-fluid">
              <form>
                <div class="form-group row">
                  <label for="usuario" class="col-lg-3 col-form-label">Usuario:</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="usuario">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="clave" class="col-lg-3 col-form-label">Contraseña:</label>
                  <div class="col-lg-9">
                    <input type="password" class="form-control" id="clave">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-lg-3 col-lg-9">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>

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

  <!-- galería -->

  <div class="album py-5 bg-light">
    <div class="container">


      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Kayak en los estuarios de la patagonia.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Alpinismo cordillerano.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">18 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv3.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Escalando las montañas de Chile.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">27 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv4.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Canopi en el bosque Valdiviano.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">36 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv5.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Senderismo en la Antártida.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">45 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv6.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Senderismo en Las Torres del Paine.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">59 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv7.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bicicleta por la carretera.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">89 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv8.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">¡Lo mejor del turismo aventura en Chile!</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">99 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="img/adv9.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Surfea las costas de Iquique.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">112 mins</small>
              </div>
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