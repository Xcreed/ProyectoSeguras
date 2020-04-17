<?php 
session_start();
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

        <label>Agregar usuario</label>
        <div class="container">
            <form action="insertarRegistro.php" method="post">
                <div class="form-group">

                    <label>Usuario</label>
                    <input type='text' name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">

                    <label>Nombre</label>
                    <input type='text' name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">

                    <label>Primer Apellido</label>
                    <input type="text" name="apellido1" placeholder="Primer Apellido">
                </div>
                <div class="form-group">

                    <label>Segundo Apellido</label>
                    <input type="text" name="apellido2" placeholder="Segundo Apellido">
                </div>
                <div class="form-group">

                    <label>Password</label>
                    <input type='password' name="password" placeholder="Contrasena">
                </div>
                <div class="form-group">

                    <label>Correo</label>
                    <input type=text name="correo" placeholder="Correo">
                </div>
                <div class="form-group">

                    <label>Palabra de seguridad</label>
                    <input type="text" name="palabraSeguridad" placeholder="Palabra de seguridad">
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>