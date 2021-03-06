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

        
    </head>
    <body>
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">
                        <img id="logo" src="logoSeg.PNG" width="30" height="30">
                    </a>
                </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="admin.php">Reportes</a></li>
                            <li class="active"><a href="administrarAdmins.php">Administrar administradores<span class="sr-only">(current)</span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a onclick="logout()">Cerrar Sesión</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
        </nav>
        
        <div class="container">

        <h1>Agregar administrador</h1>
            <form action="insertarRegistro.php" method="post">
                <div class="form-group">

                    <label>Usuario</label>
                    <input type='text' name="usuario" placeholder="Usuario" class="form-control" required>
                </div>
                <div class="form-group">

                    <label>Nombre</label>
                    <input type='text' name="nombre" placeholder="Nombre" class="form-control" required>
                </div>
                <div class="form-group">

                    <label>Primer Apellido</label>
                    <input type="text" name="apellido1" placeholder="Primer Apellido" class="form-control" required>
                </div>
                <div class="form-group">

                    <label>Segundo Apellido</label>
                    <input type="text" name="apellido2" placeholder="Segundo Apellido" class="form-control" required>
                </div>
                <div class="form-group">

                    <label>Contraseña</label>
                    <input type='password' name="password" placeholder="Contraseña" class="form-control" pattern=".{8,}"   required title="Mínimo 8 caracteres">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        La contraseña debe ser de 8 caracteres mínimo.
                    </small>
                </div>
                <div class="form-group">

                    <label>Correo</label>
                    <input type=text name="correo" placeholder="Correo" class="form-control" required>
                </div>
                <div class="form-group">

                    <label>Palabra de seguridad</label>
                    <input type="text" name="palabraSeguridad" placeholder="Palabra de seguridad" class="form-control" required>
                </div>
                <div class="form-group">
                <input type="submit" value="Agregar Usuario" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>