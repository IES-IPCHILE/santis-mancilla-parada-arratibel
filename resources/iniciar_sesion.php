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

            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_row($res);
                $_SESSION["username"] = $row[2];
                $_SESSION["id_user"] = $row[0];
                $_SESSION["id_rol"] = $row[1];
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }

        }
        else if(isset($_POST['logout'])){
            unset($_SESSION["id_user"]);
            unset($_SESSION["id_rol"]);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

?>
