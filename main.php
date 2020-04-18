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
            body { margin:0; padding:0; background-color: black; height: 100%;}
                
            #map { position:absolute; bottom:0; width:100%; height: 93%; }
            
            .navbar { margin-bottom: 0px; }
            
        </style>
    </head>
    <body>
        <!--<iframe src="https://www.google.com/maps/d/embed?mid=1np_UKeIdE8ICR42xlgvi-ILX8TVAUYVx" width="30%" height="30%"></iframe>-->
        <nav class="navbar navbar-default" style="margin-bottom: 0px;">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="main.php">
                <img id="logo" src="logoSeg.PNG" width="30" height="30">
              </a>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a onclick="myfunction()">Reportar Incidente <span class="sr-only">(current)</span></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php">About</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
            </div>
        </nav>
        
        <div id='map'></div>
            <script>    
            var long;
            var lat;
                
            mapboxgl.accessToken = 'pk.eyJ1IjoiZGFtYXJjZTEzNSIsImEiOiJjazhiM255bjYwMWc5M2dwOTFrenZrdTZ5In0.koh1hVg015txPxgX-HjhLw';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/damarce135/ck8b3wsqi1nzi1ine1fbm4fvr', 
                    center: [-84.131491,9.994665], 
                    zoom: 5
                });
                console.log(map);
            // Add geolocate control to the map.
            var geolocate = new mapboxgl.GeolocateControl({
                positionOptions: {
                    enableHighAccuracy: true
                },
                trackUserLocation: true
                })
            
            map.addControl(geolocate);
                
            geolocate.on('geolocate', function(e) {
                long = e.coords.longitude;
                lat = e.coords.latitude;
                var position = [long, lat];
                
            })
                            
            function myfunction () {
                var url = window.location.href;
                url = url.replace("/main.php","/reportar.php");
                url+= "?longitud=" + long + "&latitud=" + lat;
                window.location.replace(url);
                localStorage.setItem("mapa", map);
            }
                
            </script>
       
    </body>
</html>

<!--<script>
    alert("Para visualizar reportes en su ubicación actual, hacer click en el botón de localización en la esquina superior derecha del mapa.")
</script>-->