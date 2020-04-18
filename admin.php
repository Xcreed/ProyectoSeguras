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


            .navbar { margin-bottom: 0px; }

        </style>

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
                            <li class="active"><a href="admin.php">Reportes<span class="sr-only">(current)</span></a></li>
                            <li class=""><a href="administrarAdmins.php">Administrar administradores<span class="sr-only"></span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a onclick="logout()">Cerrar Sesión<span class="sr-only"></span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
        </nav>

        <div class="container">

            <?php echo  "<h1>Bienvenido " . $_SESSION['nombre'] . "!</h1>"; ?>
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

<script>
    
function logout () {
               <?php $_SESSION['logout'] = 1;
        ?>
    var url = window.location.href;
                url = url.replace("/admin.php","/adminLogin.php");
                window.location.replace(url);
            }
</script>

