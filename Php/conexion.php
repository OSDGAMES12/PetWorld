<?php
    //VARIABLES NECESARIAS PARA LA CONEXION A LA BD
    $Server = 'localhost'; //SERVIDOR
    $Usuario = 'Oswaldo'; //USERNAME
    $password = ''; //CONTRASEÑA
    $BD = 'petworld'; //BASE DE DATOS

    
    $conn = mysqli_connect($Server, $Usuario, $password, $BD); //CONEXION

    //VERIFICAMOS SI HAY CONEXION

    if(!$conn){
        echo '<script type="text/JavaScript">
            console.log("conexion incorrecta");
        </script>';
    }else{
        echo '<script type="text/JavaScript">
            console.log("conexion correcta");
        </script>';
    }

?>