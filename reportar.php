<?php 
    $longitud = $_GET["longitud"];
    $latitud = $_GET["latitud"];
?>

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
        <script type="text/javascript">
            window.onload = function() {
                document.getElementById('divInputCoordenadas').style.display = 'none';
            }
            
            function coordenadasCheck() {
                if (document.getElementById("radioCoord").checked) {
                    document.getElementById("divInputCoordenadas").style.display = "block";
                } else {
                    document.getElementById("divInputCoordenadas").style.display = "none";
                }}
            
        </script>
        
        
        <div id="menu">
            <div id="option1">
                <h1>Seguras</h1>
            </div>
        </div>
        
        <div id=reporteForm>
            <div class="container">
                <form action="insertarReporte.php" method="post">
                    <h1>Reporte de Incidente</h1>
                    <!--<div class="form-group">
                        <label>Título</label>
                        <input name="titulo" type="text" class="form-control" placeholder="Resumen de Incidente">
                    </div>-->
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="descripcion" class="form-control" aria-label="Descripción detallada del Incidente"></textarea>
                        <!--<input type="text" class="form-control" placeholder="Descripción detallada del Incidente">-->
                    </div>
                    <fieldset class="form-group">
                    <div class="form-check">
                      <input onclick="javascript:coordenadasCheck();" class="form-check-input" type="radio" name="exampleRadios" value="option1" checked>
                      <label class="form-check-label">
                        Utilizar ubicación actual
                      </label>
                        <input type="hidden" name="longitudObtenida" value="<?php echo $longitud;?>">
                        <input type="hidden" name="latitudObtenida" value="<?php echo $latitud;?>">
                    </div>
                    <div class="form-check">
                      <input id="radioCoord" onclick="javascript:coordenadasCheck();" class="form-check-input" type="radio" name="exampleRadios" value="option2">
                      <label class="form-check-label">
                        Ingresar coordenadas
                      </label>
                    </div>
                    <div id="divInputCoordenadas" class="form-inline">
                      <input id="inputLongitud" name="longitudIngresada" class="form-control" type="text" placeholder="Longitud">
                      <label id="inputComa">
                          ,
                      </label>
                    <input id="inputLatitud" name="latitudIngresada" class="form-control" type="text" placeholder="Latitud">
                        <br>
                    </div>
                        
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Reportar</button>
                </form>
            </div>
        </div>
        
    </body>
</html>