<?php 
    include "dbconnect.php";

    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $correo = $_POST["correo"];


    mysqli_query($bdc, "update admins set usuario = '$usuario', email = '$correo', nombre = '$nombre', apellido1 = '$apellido1', apellido2 = '$apellido2' where id_admin = '$id'") or die(mysqli_error($bdc));

    header("Location: administrarAdmins.php");

?>