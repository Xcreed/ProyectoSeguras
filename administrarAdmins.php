<?php 

session_start();

if (!isset($_SESSION['usuarioValido']) or $_SESSION['usuarioValido'] == 0) {
    #header("Location: adminLogin.php");
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

            <h1>Administradores Disponibles</h1>

            <div class="table-responsive">
                <table style="padding=7px;"  class="table table-hover">                <thead>
                    <tr class="encabezado"> 
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th >Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "dbconnect.php";

                        $resultado = mysqli_query($bdc, 'select id_admin, usuario, email, nombre, apellido1, apellido2 from admins order by nombre asc') or die(mysqli_error($bdc));

                        while ($registros = mysqli_fetch_array($resultado)) {
                            $id = $registros{0};
                            echo "<tr>";
                            echo "<td class=detalle>". $registros[3] . " " . $registros[4] . " " . $registros[5] . "</td> ";
                            echo "<td class=detalle>". $registros[1]. "</td> ";
                            echo "<td class=detalle>". $registros[2]. "</td> ";
                            echo "<td class=detalle><a href='modificar.php?id=$id'><img src=resources/modificar.png width=20px></a><a href='eliminar.php?id=$id'>     <img src=resources/eliminar.png width=20px></a></td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
                        <a href="agregar.php"><button class="btn btn-primary">Agregar</button></a>

            </div>
        </div>
    </body>
</html>