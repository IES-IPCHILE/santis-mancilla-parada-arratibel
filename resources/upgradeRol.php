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

                $id_user = $_SESSION["id_user"];

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $query = 'UPDATE usuario SET id_rol=2 WHERE id='. $id_user .' ;';
                    $res = mysqli_query($conn, $query);

                    if ($res) {
                        echo "<h1 class='display-4'>Upgrade Exitoso!, </h1><p class='lead'>Ahora puedes hacer ingreso de Servicios en nuestra plataforma.";
                        $_SESSION["id_rol"] = 2;
                    } else {
                        echo "<h1 class='display-4'>Upgrade sin Exito!, </h1><p class='lead'>Ya eres usuario (VENDEDOR)!.";
                    }
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