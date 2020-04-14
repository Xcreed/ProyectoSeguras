<?php
    session_start();
    if(!isset($_SESSION['intentosFallidos'])) {
        $_SESSION['intentosFallidos'] = 0;

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
         <h1>Login</h1>
        <form action="loginHelper.php" method="post">
            <p>Nombre</p>
            <input type='text' name="Usuario" placeholder="Usuario">
            <p>Password</p>
            <input type='password' name="Contraseña" placeholder="Contraseña">
            <br>
            <input type="submit" value="Ingresar">
            <br>
            <a href="reestablecerContrasena.php">Reestablecer Contraseña</a>
            <p>Intentos Fallidos: <?php echo $_SESSION['intentosFallidos'];?></p>
        </form>
    </body>
</html>