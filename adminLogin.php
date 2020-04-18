<?php
session_start();
if(!isset($_SESSION['intentosFallidos']) and (!isset($_SESSION['logout']))) {
    $_SESSION['intentosFallidos'] = 0;
    $_SESSION['logout'] = 0;

}

if(isset($_POST['contrasenaNueva'])){
    $nuevaContrasena = md5($_POST['contrasenaNueva']);
    $correo = $_POST['correo'];
    if (isset($_POST['contrasenaNueva']) and $_POST['contrasenaNueva'] != "") {
        include "dbconnect.php";

        mysqli_query($bdc, "update admins set contrasena = '$nuevaContrasena' where email = '$correo'") or die(mysqli_error($bdc));

    }
    $_SESSION['intentosFallidos'] = 0;

}

if(isset($_SESSION['logout']) and $_SESSION['logout'] == 1){
    $_SESSION['intentosFallidos'] = 0;
    $_SESSION['logout'] = 0;

    session_destroy();
}



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
        <nav class="navbar navbar-default" style="margin-bottom: 0px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">
                        <img id="logo" src="logoSeg.PNG" width="30" height="30">
                    </a>
                    
                </div>
            </div>
        </nav>
        <div class="container">
            <h1>Login</h1>
            <form action="loginHelper.php" method="post">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="Usuario" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input class="form-control" type='password' name="Contraseña" placeholder="Contraseña" required>
                    <small id="passwordHelpBlock" class="form-text text-muted" style="color: #b20000;">
                        Usuario o contraseña incorrectos.
                    </small>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Ingresar">
                </div>
                <div class="form-group">
                    <a href="reestablecerContrasena.php">Restablecer Contraseña</a>
                    <br>
                    <label id='fallidos'>Intentos Fallidos: <?php echo $_SESSION['intentosFallidos'];?></label>
                </div>
            </form>
        </div>
    </body>
</html>

<script>
    if ($("#fallidos").text() == "Intentos Fallidos: 0") {
        $("#passwordHelpBlock").hide();
        $("#fallidos").hide();
    }
</script>
<!-- Agregar con JS que se requieran los campos con valores -->


