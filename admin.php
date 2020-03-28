<?php

session_start();


if (!isset($_SESSION['usuarioValido']) or $_SESSION['usuarioValido'] == 0) {
    header("Location: adminLogin.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Seguras</title>
        <meta name="Seguras" content="Alertas hechas para ellas.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1>Nice Work</h1>

        <a href="administrarAdmins.php"><p>Administrar Administradores</p></a>

        <a href="adminLogin.php"><p>Cerrar Sesión</p><?php session_destroy();?></a>


    </body>
</html>