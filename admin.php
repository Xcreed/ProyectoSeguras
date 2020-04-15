<?php

session_start();

if (!isset($_SESSION['usuarioValido']) or $_SESSION['usuarioValido'] == 0) {
    header("Location: adminLogin.php");
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
        
        <?php echo  "<h1>Bienvenido " . $_SESSION['username'] . "!</h1>"; ?>

        <a href="administrarAdmins.php"><p>Manejar Administradores</p></a>

        <a href="adminLogin.php"><p>Cerrar Sesión</p><?php $_SESSION['logout'] = '1';?></a>
        
        <table style="padding=2px;" border=1>
            <tr class="encabezado"> 
                <td>Tiempo de creacion</td>
                <td>Descripcion</td>
                <td>Aceptar</td>
            </tr>
        
        <?php
            /*
            include "dbconnect.php";
            
            $resultado = mysqli_query($bdc, 'select id_admin, usuario, email, nombre, apellido1, apellido2 from admins order by nombre asc') or die(mysqli_error($bdc));
        
            while ($registros = mysqli_fetch_array($resultado)) {
                $id = $registros{0};
                echo "<tr>";
                echo "<td class=detalle>". $registros[3] . " " . $registros[4] . " " . $registros[5] . "</td> ";
                echo "<td class=detalle>". $registros[1]. "</td> ";
                echo "<td class=detalle>". $registros[2]. "</td> ";
                echo "<td class=detalle><a href='modificar.php?id=$id'><img src=resources/modificar.png width=20px></a><a href='eliminar.php?id=$id'><img src=resources/eliminar.png width=20px></a></td>";
                echo "</tr>";
            }
            */
        ?>
            </table>


    </body>
</html>

