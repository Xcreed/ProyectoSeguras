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

            <?php echo  "<h1>Bienvenido " . $_SESSION['username'] . "!</h1>"; ?>

            <a href="administrarAdmins.php"><label>Manejar Administradores</label></a>

            <a href="adminLogin.php"><label>Cerrar Sesión</label><?php $_SESSION['logout'] = '1';?></a>

            <table style="padding=2px;" border=1>
                <tr class="encabezado"> 
                    <td>Tiempo de creacion</td>
                    <td>Descripcion</td>
                    <td>Ubicacion</td>
                    <td>Aceptar</td>
                </tr>

                <?php

                include "dbconnect.php";

                $resultado = mysqli_query($bdc, "select idreportes, dateAndTime, descripcion, longitud, latitud from reportes where estado = '0'") or die(mysqli_error($bdc));

                while ($registros = mysqli_fetch_array($resultado)) {
                    $id = $registros{0};
                    echo "<tr>";
                    echo "<td>". $registros{1} . "</td> ";
                    echo "<td>". $registros{2} . "</td> ";
                    echo "<td class=detalle>". $registros[3] . ", " . $registros{4}. "</td> ";
                    echo "<td class=detalle><a href='aceptarReporte.php?id=$id'><img src=resources/modificar.png width=20px></a>";
                    echo "</tr>";
                }
                
                ?>
            </table>

        </div>
    </body>
</html>

