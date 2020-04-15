<?php 
    include "dbconnect.php";


    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $clave = md5($_POST["password"]);
    $correo = $_POST["correo"];
    $palabraSeguridad = $_POST["palabraSeguridad"];

    

    mysqli_query($bdc, "insert into admins (usuario, contrasena, email, nombre, apellido1, apellido2, palabraSeguridad) values ('$usuario', '$clave', '$correo', '$nombre', '$apellido1', '$apellido2', '$palabraSeguridad')") or die(mysqli_error($bdc));

    header("Location: administrarAdmins.php");

?>