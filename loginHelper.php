<?php
    include "dbconnect.php";

    session_start();
    $usuario = $_POST["Usuario"];
    $contrasena = $_POST["Contraseña"]; 


    $contrasenaVerificacion = mysqli_query($bdc, "select contrasena from admins where usuario = '$usuario'") or die(mysqli_error($bdc));

    $resultado = mysqli_fetch_array($contrasenaVerificacion);

    $contrasenaDB = $resultado{0};



    echo "Usuario: " . $usuario . " pw: " . $contrasenaDB . " contrasena: " . $contrasena;

    if ($contrasenaDB == $contrasena) {
        $_SESSION['usuarioValido'] = 1;
        header('Location: admin.php');
    } else {
        $_SESSION['intentosFallidos'] = $_SESSION['intentosFallidos'] + 1;
        header('Location: adminLogin.php');
    }
?>