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

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        if (isset($_POST['login'])) {

                            $correo = mysql_real_escape_string($_POST['login-correo']);
                            $password = mysql_real_escape_string($_POST['login-password']);

                            $query = "SELECT id, id_rol, username, correo, password FROM usuario where correo = '$correo' and password = '$password'";

                            $res = mysqli_query($conn, $query);

                            if (mysqli_num_rows($res) > 0) {
                                $row = mysqli_fetch_row($res);
                                $_SESSION["username"] = $row[2];
                                $_SESSION["id_user"] = $row[0];
                                $_SESSION["id_rol"] = $row[1];
                                echo "<h1 class='display-4'>Bienvenido, " . $_SESSION['username'] . "</h1>
                                <p class='lead'>Inicio de sesion exitoso</p>";
                            } else {
                                echo "<h1 class='display-4'>Error</h1>
                                <p class='lead'>El usuario y contraseña son incorrectos o no existen</p>";
                            }
                        } else if (isset($_POST["register"])) {

                            $command = "INSERT INTO `usuario`(`id_rol`, `nombre`, `correo`, `username`, `password`, `fecha_nac`, `direccion`, `RUN`, `fono`) 
                            VALUES (1, \"" . $_POST["nombre"] . "\",\"" . $_POST["correo"] . "\",\"" . $_POST["usuario"] . "\",\"" . $_POST["register-password"] . "\",\"" . $_POST["fecha_nac"] . "\",\"" . $_POST["direccion"] . "\",\"" . $_POST["run"] . "\",\"+56" . $_POST["fono"] .  "\");";

                            $query = "SELECT correo, username FROM usuario where correo = \"" . $_POST["correo"] . "\" OR username = \"" . $_POST["usuario"] . "\";";
                            $res = mysqli_query($conn, $query);

                            if (mysqli_num_rows($res) > 0) {
                                echo "<h1 class='display-4'>Registro fallido:</h1>";

                                $row = mysqli_fetch_row($res);
                                if ($row[0] == $_POST["correo"]) {
                                    echo "<p class='lead'>El correo que ingresó ya está en uso</p>";
                                }
                                if($row[1] == strtolower($_POST["usuario"])){
                                    echo "<p class='lead'>El usuario que ingresó ya está en uso</p>";
                                }
                            }
                            else {
                                mysqli_query($conn, $command);
                                echo "<h1 class='display-4'>Registro exitoso</h1>
                                <p class='lead'>Te damos la bienvenida a nuestra plafaforma, " . $_POST["usuario"] .  ", ahora puedes iniciar sesion con tus datos</p>";
                            }

                        } else if (isset($_POST['logout'])) {
                            echo "<h1 class='display-4'>Adios, " . $_SESSION['username'] . "</h1>
                            <p class='lead'>Esperamos que vuelvas pronto!</p>";
                            unset($_SESSION["id_user"]);
                            unset($_SESSION["id_rol"]);
                        }
                    }

                    ?>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="../index.php" role="button">Volver</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>