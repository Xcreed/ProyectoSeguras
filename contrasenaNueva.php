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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Seguras</title>
        <meta name="Seguras" content="Alertas hechas para ellas.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

        <h1>Ingrese contraseña nueva:</h1>
        <form method="post" action="adminLogin.php"> 
            <input type="hidden" name="correo" value="<?php echo $correo;?>">
            <input type='text' name="contrasenaNueva" placeholder="Contraseña nueva">

            <input type="submit" name="cambiar" value="Cambiar"/> 
        </form>


    </body>
</html>