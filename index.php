<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.5.1.slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js" ></script>
</head>
<body>

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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#i">Iniciar Sesion</button>
            </form>            
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
			
			  
      
            <!-- cuerpo del diálogo -->
            <div class="modal-body">
                <div class="container-fluid">   
                    <form>
						<div class="tab-content">
			  				<div class="tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="inicio-pills">
								<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">Correo</label>
                          	<div class="col-lg-9">
                            	<input type="text" class="form-control" id="correo">
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
								</div>
							<div class="tab-pane fade" id="registro" role="tabpanel" aria-labelledby="registro-pills">
								<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">Nombre Completo:</label>
                          	<div class="col-lg-9">
                            	<input type="text" class="form-control" id="nombre">
                          	</div>
                        	</div>
								<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">Correo:</label>
                          	<div class="col-lg-9">
                            	<input type="text" class="form-control" id="correo">
                          	</div>
                        	</div>
							<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">Nombre de Usuario:</label>
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
                          	<label for="clave" class="col-lg-3 col-form-label">Repetir Contraseña:</label>
                          	<div class="col-lg-9">
                            	<input type="password" class="form-control" id="clave">
                          	</div>
                        	</div>
							<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">Direccion:</label>
                          	<div class="col-lg-9">
                            	<input type="text" class="form-control" id="direccion">
                          	</div>
                        	</div>
							<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">RUN:</label>
                          	<div class="col-lg-9">
                            	<input type="text" class="form-control" id="run">
                          	</div>
                        	</div>
							<div class="form-group row">
                          	<label for="usuario" class="col-lg-3 col-form-label">Fono (+56):</label>
                          	<div class="col-lg-9">
                            	<input type="text" class="form-control" id="fono">
                          	</div>
                        	</div>
                        	<div class="form-group row">
                          	<div class="offset-lg-3 col-lg-9">
                            	<button type="submit" class="btn btn-primary">Registrar</button>
                          	</div> 
                        	</div>
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
	<div class="row">
		<div class="col-sm-4 content1-left"></div>
		<div class="col-sm-4 content1-center">
			<a class="text-center font-weight-bold">Seleccionar una Region:</a>			
  			
  			<select name="regiones" id="regiones">
    			<option values="Arica">Arica</a>
				<option values="Tarapaca">Tarapacá</a>
				<option values="Antofagasta">Antofagasta</a>
				<option values="Atacama">Atacama</a>
				<option values="Coquimbo">Coquimbo</a>
				<option values="Valparaiso">Valparaiso</a>
				<option values="Santiago">Santiago</a>
				<option values="OHiggins">O'Higgins</a>
				<option values="ElMaule">El Maule</a>
				<option values="Nuble">Ñuble</a>
				<option values="Biobio">Biobio</a>
				<option values="LaAraucania">La Araucanía</a>
				<option values="LosRios">Los Ríos</a>
				<option values="LosLagos">Los Lagos</a>
				<option values="Aysen">Aysen</a>
				<option values="Magallanes">Magallanes</a>
  			</select>
		
		</div>
		<div class="col-sm-4 content1-right"></div>
	</div>
	<br>
	
  <!-- tabla -->
    
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre de servicio</th>
      <th scope="col">Descripción</th>
      <th scope="col">ID Región</th>
      <th scope="col">Fecha de creación</th>
      <th scope="col">Edición</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Soy</td>
      <td>Un</td>
      <td>Cuadrado</td>
      <td><button type ="button" class="btn btn-secondary">Editar</button>
      <button type ="button" class="btn btn-secondary">Eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Soy</td>
      <td>Un</td>
      <td>Rectángulo</td>
      <td><button type ="button" class="btn btn-secondary">Editar</button>
      <button type ="button" class="btn btn-secondary">Eliminar</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Soy</td>
      <td>Una</td>
      <td>Figura</td>
      <td><button type ="button" class="btn btn-secondary">Editar</button>
      <button type ="button" class="btn btn-secondary">Eliminar</button></td>
    </tr>
  </tbody>
</table>

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