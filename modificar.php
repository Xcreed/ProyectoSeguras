<?php
    session_start();
        
    include "dbconnect.php";

    $id = $_GET["id"];

    $resultado = mysqli_query($bdc, "select usuario, email, nombre, apellido1, apellido2 from admins where id_admin = '$id'") or die(mysqli_error($bdc));

    $registro = mysqli_fetch_array($resultado);

    $usuario = $registro{0};
    $nombre = $registro{2};
    $apellido1 = $registro{3};
    $apellido2 = $registro{4};
    $correo = $registro{1};

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

        <form action="modificarRegistro.php" method="post">
            <p>Usuario</p>
            <input type='text' name="usuario" placeholder="Usuario" value="<?php echo $usuario;?>">
            <p>Nombre</p>
            <input type='text' name="nombre" placeholder="Nombre" value="<?php echo $nombre;?>">
            <p>Primer Apellido</p>
            <input type="text" name="apellido1" placeholder="Primer Apellido" value="<?php echo $apellido1;?>">
            <p>Segundo Apellido</p>
            <input type="text" name="apellido2" placeholder="Segundo Apellido" value="<?php echo $apellido2;?>">
            <p>Correo</p>
            <input type=text name="correo" placeholder="Correo" value="<?php echo $correo;?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <br>
            <input type="submit" value="Enviar">

        </form>

    </body>
</html>