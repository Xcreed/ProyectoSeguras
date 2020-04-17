<?php
include "dbconnect.php";

$correo = $_POST["Correo"];
$palabraUsuario = $_POST["Palabra"];

$palabraVerificacion = mysqli_query($bdc, "select palabraSeguridad from admins where email = '$correo'") or die(mysqli_error($bdc));

$resultado = mysqli_fetch_array($palabraVerificacion);

$palabraDB = $resultado{0};

if ($palabraDB != $palabraUsuario) {

    header("Location:reestablecerContrasena.php");
} else {

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

        <div class="container">
            <h1>Ingrese contraseña nueva:</h1>

            <form method="post" action="adminLogin.php" name="form"> 
                <div class="form-group">
                    <input type="hidden" name="correo" value="<?php echo $correo;?>" class="form-control">
                </div>
                <div class="form-group">

                    <input type='text' name="contrasenaNueva" placeholder="Contraseña nueva" class="form-control" pattern=".{8,}"   required title="Minimo 8 caracteres" m>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        La contrasena debe ser de 8 caracteres minimo.
                    </small>
                </div>

                <input type="submit" name="cambiar" value="Cambiar Contraseña" class="btn btn-primary"> 
            </form>
        </div>

    </body>
</html>
