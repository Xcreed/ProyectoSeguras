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
        
    </head>
    <body>
        <div class="container">

        <h1>Modificar usuario</h1>

        <form action="modificarRegistro.php" method="post">
            <div class="form-group">
            <label>Usuario</label>
            <input type='text' name="usuario" placeholder="Usuario" value="<?php echo $usuario;?>" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Nombre</label>
            <input type='text' name="nombre" placeholder="Nombre" value="<?php echo $nombre;?>" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Primer Apellido</label>
            <input type="text" name="apellido1" placeholder="Primer Apellido" value="<?php echo $apellido1;?>" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Segundo Apellido</label>
            <input type="text" name="apellido2" placeholder="Segundo Apellido" value="<?php echo $apellido2;?>" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Correo</label>
            <input type=text name="correo" placeholder="Correo" value="<?php echo $correo;?>" class="form-control" required>
            </div>
            
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">
            <input type="submit" value="Modificar" class="btn btn-primary">
            </div>
        </form>
        </div>
    </body>
</html>