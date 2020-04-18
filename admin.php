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

            <?php echo  "<h1>Bienvenido " . $_SESSION['nombre'] . "!</h1>"; ?>

            <a href="administrarAdmins.php"><label>Manejar Administradores</label></a>

            <a href="adminLogin.php"><label>Cerrar Sesión</label><?php $_SESSION['logout'] = '1';?></a>

            <table style="padding=2px;"  class="table table-hover">
                <thead>
                    <tr class="encabezado"> 
                        <th>Tiempo de creación</th>
                        <th>Descripción</th>
                        <th>Ubicación</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <?php

                include "dbconnect.php";

                $resultado = mysqli_query($bdc, "select idreportes, dateAndTime, descripcion, longitud, latitud from reportes where estado = '0'") or die(mysqli_error($bdc));

                while ($registros = mysqli_fetch_array($resultado)) {
                    $id = $registros{0};
                    echo "<tr>";
                    echo "<td>". $registros{1} . "</td> ";
                    echo "<td>". $registros{2} . "</td> ";
                    echo "<td class=detalle>". $registros[3] . ", " . $registros{4}. "</td> ";
                    echo "<td class=detalle><a href='aceptarReporte.php?id=$id'><img src=resources/aceptar.png width=20px></a><a href='rechazarReporte.php?id=$id'><img src=resources/eliminar.png width=20px></a>" ;
                    echo "</tr>";
                }

                ?>
            </table>

        </div>
    </body>
</html>

