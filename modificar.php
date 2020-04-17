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
        <title>Proyecto: Seguras</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <style>
            body { margin:0; padding:0; }
            
            #menu { width: 100%; height: 10%; display: table; table-layout: fixed; background-color:aliceblue; border: 10px; }
            #option1 { display: table-cell; vertical-align: middle; }
            #option2 { height: 100%; display: table-cell; vertical-align: middle; }
            #reportar { float: right; }

            #reporteForm { position:absolute; bottom:0; width:100%; height: 90%; }
        </style>
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