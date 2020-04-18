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
                <button id="reportar" name="reportar" class="btn btn-primary" value="Reportar" onclick="reportar()">Reportar</button>
            </div>
            <div id="option3">
                <a href="admin.php"><button id="adminLogin" name="adminLogin" class="btn btn-primary" value="Admin Login" onclick="adminLogin.php">Admin Login</button></a>
            </div>
        </div>

        <div id="map"></div>
        <script>
            var long = 0;
            var lati = 0;
            
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 9.991723, lng:-84.143453},
                    zoom: 15,
                    disableDefaultUI: true

                });
                infoWindow = new google.maps.InfoWindow;

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        lati = position.coords.latitude;
                        long = position.coords.longitude;
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Ubicación Actual');
                        infoWindow.open(map);
                        map.setCenter(pos);
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                                      'Error: The Geolocation service failed.' :
                                      'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }
            
            function reportar() {
                var url = window.location.href;
                url = url.replace("/main.php","/reportar.php");
                url+= "?longitud=" + long + "&latitud=" + lati;
                window.location.replace(url);
                localStorage.setItem("mapa", map);
            }
                

        </script>   
    </body>
</html>
