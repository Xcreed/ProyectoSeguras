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
        
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZoly_sMdqz9uuxrol9pu1EGzJLLLOfh8&callback=initMap"
            type="text/javascript"></script>
        
        <style>
            body { margin:0; padding:0; }
            
            #menu { width: 100%; height: 10%; display: table; table-layout: fixed; background-color:aliceblue; border: 10px; }
            #option1 { display: table-cell; vertical-align: middle; }
            #option2 { height: 100%; display: table-cell; vertical-align: middle; }
            #reportar { float: right; }
            
            #map { position:absolute; bottom:0; width:100%; height: 90%; }
        </style>
    </head>
    <body>
        <!--<iframe src="https://www.google.com/maps/d/embed?mid=1np_UKeIdE8ICR42xlgvi-ILX8TVAUYVx" width="30%" height="30%"></iframe>-->
        
        <div id="menu">
            <div id="option1">
                <h1>Seguras</h1>
            </div>
            <div id="option2">
                <button id="reportar" name="reportar" class="btn btn-primary" value="Reportar" onclick="myfunction()">Reportar</button>
            </div>
            <div id="option3">
                <a href="admin.php"><button id="adminLogin" name="adminLogin" class="btn btn-primary" value="Admin Login" onclick="adminLogin.php">Admin Login</button></a>
            </div>
        </div>
        
        <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
        </script>   
    </body>
</html>

<script>
    alert("Para visualizar reportes en su ubicación actual, hacer click en el botón de localización en la esquina superior derecha del mapa.")
</script>