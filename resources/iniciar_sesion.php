<?php 

    session_start();
    require_once("conexion.php");
    $conn = conectar();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        if (isset($_POST['login'])) {
            
            $correo = mysql_real_escape_string($_POST['login-correo']);
            $password = mysql_real_escape_string($_POST['login-password']);

            $query = "SELECT username, correo, password FROM usuario where correo = '$correo' and password = '$password'";

            $res = mysqli_query($conn, $query);

            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_row($res);
                $_SESSION["username"] = $row[0];
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }

        }
    }

?>
