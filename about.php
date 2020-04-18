<html>
    <head>
        <meta charset="utf-8">
        <title>Proyecto: Seguras</title>
        <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.js"></script>
        <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.css" rel="stylesheet" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <style>
            body { margin:0; padding:0; background-color: white; height: 100%; width: 100%}
                
            #map { position:absolute; bottom:0; width:100%; height: 93%; }
            
            .navbar { margin-bottom: 0px; }
            
            .container { background-color: white; 
                          padding: 70px 0;
                          text-align: center;
                            height: 50%;
                width: 50%;
            }}
            
        </style>
    </head>
    <body>
        
    <nav class="navbar navbar-default" style="margin-bottom: 0px;">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="main.php">
                <img id="logo" src="logoSeg.PNG" width="30" height="30">
              </a>
              </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="about.php">About</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
        
        <div class="container">
            <h1>Acerca de</h1>
        <div class="d-inline-flex justify-content-center align-items-center">
          <div class="flex-fill">
                    
                  <dl>
                    <dt>Universidad Fidélitas</dt>
                      <br>
                    <dt>Curso</dt>
                    <dd>Ambiente Web Cliente/Servidor</dd>
                      <br>
                    <dt>Estudiantes</dt>
                    <dd>Juan Pablo Mayorga</dd>
                    <dd>Marcela Ortega</dd>
                      <br>
                    <dt>Fecha</dt>
                    <dd id="datetime"></dd>
                    <dt>Versión 2.1</dt>
                    
                  </dl> 
            </div>
        </div>
    </div>
        <script>
            var dt = new Date();
            document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
        </script>
    </body>
</html>

<!--<script>
    alert("Para visualizar reportes en su ubicación actual, hacer click en el botón de localización en la esquina superior derecha del mapa.")
</script>-->