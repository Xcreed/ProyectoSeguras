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
            body { margin:0; padding:0; height: 100%;}
                
            #map { position:absolute; bottom:0; width:100%; height: 93%; }
            
            .navbar { margin-bottom: 0px; }
            
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
        
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="main.php">
                <img id="logo" src="logoSeg.PNG" width="30" height="30">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!--<ul class="nav navbar-nav">
                <li class="active"><a href="#">Reportar Incidente <span class="sr-only">(current)</span></a></li>
              </ul>-->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php">About</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
        
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