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

            <h1>Restablezca su contraseña</h1>
            <form action="contrasenaNueva.php" method="post">
                <div class="form-group">
                    <label>Ingrese su correo electrónico</label>
                    <input type='text' name="Correo" placeholder="Correo electrónico" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ingrese su palabra de seguridad</label>
                    <input type='text' name="Palabra" placeholder="Palabra de seguridad" class="form-control">
                </div>
                <input type="submit" value="Restablecer Contraseña" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>