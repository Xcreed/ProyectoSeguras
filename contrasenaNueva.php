<?php
    include "dbconnect.php";

    $correo = $_POST["correo"];
    $palabraUsuario = $_POST["palabraSeguridad"];

    echo $correo . $palabraUsuario;

    $palabraVerificacion = mysqli_query($bdc, "select palabraSeguridad from admins where usuario = '$correo'") or die(mysqli_error($bdc));

    $resultado = mysqli_fetch_array($palabraVerificacion);

    $palabraDB = $resultado{0};

    if ($palabraDB != $palabraUsuario) {
        
        #header("Location:reestablecerContrasena.php");
    } else {
        #header("Location:contrasenaNueva.php");
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
        <!--<h1>Login</h1>
        <form action="contrasenaNueva.php" method="post">
            <p>Ingrese su correo electrónico</p>
            <input type='text' name="Correo electrónico" placeholder="Correo electrónico">
            <br>
            <input type='text' name="Palabra de seguridad" placeholder="Palabra de seguridad">
            <br>
            <input type="submit" value="Reestablecer Contraseña">
        </form> -->
        
        <h1>Ingrese contraseña nueva:</h1>
        <h2><?php echo $correo . " Usuario<>Contrasena " . $palabraSeguridad;?></h2>
        <input type='text' name="contraseña nueva" placeholder="Contraseña nueva">
    </body>
</html>