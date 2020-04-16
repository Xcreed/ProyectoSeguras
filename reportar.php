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
        <!--<iframe src="https://www.google.com/maps/d/embed?mid=1np_UKeIdE8ICR42xlgvi-ILX8TVAUYVx" width="30%" height="30%"></iframe>-->
        <div id="menu">
            <div id="option1">
                <h1>Seguras</h1>
            </div>
        </div>
        
        <div id=reporteForm>
            <div class="container">
                <form>
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" placeholder="Resumen de Incidente">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control" placeholder="Descripción detallada del Incidente">
                    </div>
                    <fieldset class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option1" checked>
                      <label class="form-check-label">
                        Utilizar ubicación actual
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option2">
                      <label class="form-check-label">
                        Ingresar coordenadas
                      </label>
                    </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Reportar</button>
                </form>
            </div>
        </div>
        
    </body>
</html>