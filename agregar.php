<?php 
    session_start();
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

        <p>Agregar usuario</p>

        <form action="insertarRegistro.php" method="post">
            <p>Usuario</p>
            <input type='text' name="usuario" placeholder="Usuario">
            <p>Nombre</p>
            <input type='text' name="nombre" placeholder="Nombre">
            <p>Primer Apellido</p>
            <input type="text" name="apellido1" placeholder="Primer Apellido">
            <p>Segundo Apellido</p>
            <input type="text" name="apellido2" placeholder="Segundo Apellido">
            <p>Password</p>
            <input type='password' name="password" placeholder="Contrasena">
            <br>
            <p>Correo</p>
            <input type=text name="correo" placeholder="Correo">
            <br>
            <p>Palabra de seguridad</p>
            <input type="text" name="palabraSeguridad" placeholder="Palabra de seguridad">
            <br>
            <input type="submit" value="Enviar">

        </form>

    </body>
</html>