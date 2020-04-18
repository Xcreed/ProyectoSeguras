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
        <nav class="navbar navbar-default" style="margin-bottom: 0px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">
                        <img id="logo" src="logoSeg.PNG" width="30" height="30">
                    </a>

                </div>
            </div>
        </nav>
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