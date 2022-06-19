<!Doctype html>
<html>
<head>

<title>Nuevo registro php</title>
<style>

 .btn_volver{
    transform: translateX(450px) translateY(300px);
    width: 440px;
    height: 100px;
    background: blue;
    display: flex;
    justify-content: center;
    aling-items: center;
 }

 a{
    position: relative;
    width: 100%;
    font-size: 50px;
    color: white;
    display: flex;
    justify-content: center;
    aling-items: center;
    transform: translateY(20px);
 }

</style>

</head>

<body>

<?php

    require('Php/conexion.php');

    $nameP = $_POST['Nombre'];
    $correoP = $_POST['Correo'];
    $telefono1P = $_POST['Telefono1'];
    $tele2P = $_POST['Telefono2'];
    $contraP = $_POST['Contraseña2'];
    $ocupacionP = $_POST['Ocupacion'];
    $edadP = $_POST['Edad'];


    $consulta = "INSERT INTO usuarios (nombre, correo, telefono1, telefono2, contraseña, ocupacion, edad) VALUES ('$nameP','$correoP','$telefono1P','$tele2P','$contraP','$ocupacionP','$edadP')";

    $resultado = mysqli_query($conn,$consulta);

    if($resultado){
        echo '<script type="text/JavaScript">
        alert("Usuario registrado correctamente");
        </script>';

    }else{
        echo '<script type="text/JavaScript">
        alert("Ups algo fallo, intentelo de nuevo");
        </script>';
    }

?>

        <div class="btn_volver">
        <a href="index.html">volver</a>
        </div>

    
</body>

</html>