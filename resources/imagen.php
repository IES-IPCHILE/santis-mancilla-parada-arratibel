<!DOCTYPE html>
<html lang="en">

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

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        require_once("conexion.php");
                        $conn = conectar();

                        if (isset($_POST["agregarImagen"])) {

                            $check = getimagesize($_FILES["imagen"]["tmp_name"]);

                            if ($check !== false) {

                                $imagen = $_FILES['imagen']['tmp_name'];

                                $imgContent = addslashes(file_get_contents($imagen));

                                $command = 'INSERT into imagen(imagen, titulo, fecha) VALUES ("' . $imgContent . '", "' . $_POST["titulo"] . '", curdate())';

                                $insert = mysqli_query($conn, $command);

                                if ($insert) {

                                    echo "<h1 class='display-4'>Ejecucion exitosa:</h1>";
                                    echo "<p class='lead'>Se ha agregado la imagen correctamente!</p>";
                                } else {

                                    echo "<h1 class='display-4'>Ejecucion fallida:</h1>";
                                    echo "<p class='lead'>No ha sido posible agregar la imagen</p>";
                                }
                            } else {

                                echo "<h1 class='display-4'>Ejecucion fallida:</h1>";
                                echo "<p class='lead'>Por favor selecciona una imagen</p>";
                            }
                        } else if (isset($_POST["editarImagen"])) {

                            if (isset($_FILES["imagen"]["tmp_name"])) {

                                $check = getimagesize($_FILES["imagen"]["tmp_name"]);

                                if ($check !== false) {

                                    $imagen = $_FILES['imagen']['tmp_name'];

                                    $imgContent = addslashes(file_get_contents($imagen));

                                    $command = 'UPDATE imagen SET imagen = "' . $imgContent . '", titulo = "' . $_POST["titulo"] . '", fecha = curdate() where id = ' . $_POST["id"] . ';';
                                    
                                    $update = mysqli_query($conn, $command);

                                    if ($update) {

                                        echo "<h1 class='display-4'>Ejecucion exitosa:</h1>";
                                        echo "<p class='lead'>Se han actualizado los datos correctamente!</p>";
                                    } else {

                                        echo "<h1 class='display-4'>Ejecucion fallida:</h1>";
                                        echo "<p class='lead'>No se han podido actualizar los datos</p>";
                                    }
                                } else {

                                    echo "<h1 class='display-4'>Ejecucion fallida:</h1>";
                                    echo "<p class='lead'>Por favor selecciona una imagen</p>";
                                }
                            } else {

                                $command = 'UPDATE imagen SET titulo = "' . $_POST["titulo"] . '" where id = ' . $_POST["id"] . ';';

                                $update = mysqli_query($conn, $command);

                                if ($update) {

                                    echo "<h1 class='display-4'>Ejecucion exitosa:</h1>";
                                    echo "<p class='lead'>Se han actualizado los datos correctamente!</p>";
                                } else {

                                    echo "<h1 class='display-4'>Ejecucion fallida:</h1>";
                                    echo "<p class='lead'>No se han podido actualizar los datos</p>";
                                }
                            }
                        }
                    }
                    ?>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="../gallery.php" role="button">Volver</a>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>