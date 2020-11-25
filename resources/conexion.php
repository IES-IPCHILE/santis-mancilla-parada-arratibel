<?php 

    //CONEXION A BASE DE DATOS
    function conectar(){

        $conexion = mysqli_connect("localhost", "root", "");

        if(!$conexion){
            echo "Error de conexion...";
        }
    
        $database = mysqli_select_db($conexion, "epe3");
    
        if(!$database){
            echo "No se a podido seleccionar la base de datos";
            echo "Número de error de MySQL: " . mysqli_connect_errno();
        }

        return $conexion;
    }
