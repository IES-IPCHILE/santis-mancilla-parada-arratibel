<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    
    <script></script>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/santis-mancilla-parada-arratibel/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/santis-mancilla-parada-arratibel/gallery.php">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/santis-mancilla-parada-arratibel/services.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/santis-mancilla-parada-arratibel/aboutus.php">Quiénes somos</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="/santis-mancilla-parada-arratibel/aboutus.php">Contacto</a>
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
                <img src = "img/alpinismo.jpg" data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src = "img/trekking.jpg" data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src = "img/lancha.jpg"data-src="holder.js/900x500/auto/#666:#444/text:Third slide" alt="Third slide">
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
    
    <!-- primera fila de cartas -->
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <!-- carta -->
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 1</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-sm">
      <!-- carta -->
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 2</h5>
    <p class="card-text">Servicio que ofrecemos</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-sm">
    <!-- carta -->
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 3</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
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
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 4</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-sm">
      <!-- carta -->
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 5</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-sm">
    <!-- carta -->
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 6</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
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
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 7</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-sm">
      <!-- carta -->
      <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 8</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col-sm">
    <!-- carta -->
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Servicio 9</h5>
    <p class="card-text">Servicio que ofrecemos.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    </div>
 </div>
 <br><br>
<!-- fin tercer fila de cartas -->
    
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
        <div class="row"> <p class="text-muted small text-right">La Florida, Concha y Toro #660.</p></div>
    </div>
  </div>  
</div>
</footer>
</body>
</html>
