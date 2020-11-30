<html lang="es">

<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container d-flex h-100">
    <div class="row align-self-center w-100">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <?php

                session_start();
                require_once("conexion.php");
                $conn = conectar();

                if (isset($_POST['IngresarServicio'])) {

                    $nombre_servicio = $_POST["Nombre_Servicio"];
                    $id_user = $_SESSION["id_user"];
                    $descripcion = $_POST["Descripcion"];
                    $id_region = $_POST["Region"];
                    $fechaAct = date("Y,m,d");

                    $imagen = $_FILES['imagen']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($imagen));

                    $query = 'INSERT INTO servicio(nombre_servicio, id_usuario, descripcion, id_region, fecha_creacion, imagen) 
                        VALUES("'. $nombre_servicio .'", "'. $id_user .'", "'.  $descripcion .'", "'.  $id_region .'", "'.  $fechaAct .'", "'.  $imgContent .'");';

                    $resIngreso = mysqli_query($conn, $query);

                    if ($resIngreso) {
                        echo "<h1 class='display-4'>Registro de Servicio exitoso</h1><p class='lead'>Te damos la bienvenida a nuestra plafaforma.";
                    } else {
                        echo "<h1 class='display-4'>Registro de Servicio sin Exito</h1><p class='lead'>Intenta nuevamente porfavor!.";
                    }
                } 

                if (isset($_POST["EditarServicio"])) {

                $imagen = $_FILES['imagen']['tmp_name'];
                $imgContent = addslashes(file_get_contents($imagen));

                $query = 'UPDATE servicio SET nombre_servicio= "'. $_POST["Nombre_Servicio2"] .'", descripcion= "'. $_POST["Descripcion2"] .'", id_region= "'. $_POST["Region2"] .'", imagen= "'. $imgContent .'" WHERE servicio.id ='. $_POST['EditarServicio'] .';';
                $resEditar = mysqli_query($conn, $query);
                
                    if ($resEditar) {
                        echo "<h1 class='display-4'>Edicion de Servicio exitosamente</h1>";
                    } else {
                        echo "<h1 class='display-4'>Edicion de Servicio sin Exito</h1><p class='lead'>Intenta nuevamente porfavor!.";
                    }
                } 

                if (isset($_POST['EliminarServicio'])) {
         
                    $query = 'DELETE FROM servicio WHERE id="'.$_POST['EliminarServicio'].'";';

                    $resEliminar = mysqli_query($conn, $query);

                    if ($resEliminar) {
                        echo "<h1 class='display-4'>Eliminacion de Servicio exitoso</h1>";
                    } else {
                        echo "<h1 class='display-4'>Eliminacion de Servicio sin Exito</h1><p class='lead'>Intenta nuevamente porfavor!.";
                    }
                }

                if(isset($_POST['VolverServicio'])) {

                    echo "<h1 class='display-4'>Volviendo a Servicios</h1>";

                }
                
                ?>
                <p class="lead">
                <br>
                <a class="btn btn-primary btn-lg" href="../services.php" role="button">Volver</a>
                </p>
             </div>
        </div>
     </div>
</div>


</body>

</html>