<?php
    session_start();

    include "dbconnect.php";

    $usuario = $_POST["Usuario"];
    $contrasena = $_POST["Contraseña"]; 


    $contrasenaVerificacion = mysqli_query($bdc, "select contrasena from admins where usuario = '$usuario'") or die(mysqli_error($bdc));

    $resultado = mysqli_fetch_array($contrasenaVerificacion);

    $contrasenaDB = $resultado{0};

    if ($contrasenaDB == md5($contrasena) && $contrasena != "") {
        session_start();
        $_SESSION['usuarioValido'] = 1;
        $_SESSION['username'] = $usuario;
        header('Location: admin.php');
    } else {
        $_SESSION['intentosFallidos'] = $_SESSION['intentosFallidos'] + 1;
        header('Location: adminLogin.php');
    }
?>