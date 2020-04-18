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
        
    <nav class="navbar navbar-default" style="margin-bottom: 0px;">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="main.php">
                <img id="logo" src="logoSeg.PNG" width="30" height="30">
              </a>
              </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a onclick="reportar()">Reportar Incidente <span class="sr-only">(current)</span></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php">About</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
        
        
        <div id="map"></div>
        <script>
            var long = 0;
            var lati = 0;
            var map;
            var customLabel = {
                res: {
                  label: 'S'
                }
              };

            /*function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 9.991723, lng:-84.143453},
                    zoom: 15,
                    disableDefaultUI: true

                });
                infoWindow = new google.maps.InfoWindow;
                
                //http://localhost:8000/Ambiente/insertarLocaciones.php
                downloadUrl('http://localhost:8000/Ambiente/insertarLocaciones.php', function(data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName('marker');
                    Array.prototype.forEach.call(markers, function(markerElem) {
                      var id = markerElem.getAttribute('id');
                      var address = markerElem.getAttribute('address');
                      var type = markerElem.getAttribute('type');
                      var point = new google.maps.LatLng(
                          parseFloat(markerElem.getAttribute('lat')),
                          parseFloat(markerElem.getAttribute('long')));

                      var infowincontent = document.createElement('div');

                      var text = document.createElement('text');
                      text.textContent = address
                      infowincontent.appendChild(text);
                      var icon = customLabel || {};
                      var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        label: icon.label
                      });
                      marker.addListener('click', function() {
                        infoWindow.setContent(infowincontent);
                        infoWindow.open(map, marker);
                      });
                    });
                  });
            }*/

                // Try HTML5 geolocation.
               /* if (navigator.geolocation) {
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
            }*/
            
            function downloadUrl(url,callback) {
                 var request = window.ActiveXObject ?
                     new ActiveXObject('Microsoft.XMLHTTP') :
                     new XMLHttpRequest;

                 request.onreadystatechange = function() {
                   if (request.readyState == 4) {
                     request.onreadystatechange = doNothing;
                     callback(request, request.status);
                   }
                 };

                 request.open('GET', url, true);
                 request.send(null);
            }
            
            function initMap() {
                var uluru = {lat: 9.994665, lng: -84.131491}; 
                map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 8, center: uluru});
                
                //var marker = new google.maps.Marker({position: uluru, map: map});
                
                var script = document.createElement('script');
                
                
                
                script.src = 'http://localhost:8000/Ambiente/insertarJson.php';
                document.getElementsByTagName('head')[0].appendChild(script);
              }

              window.eqfeed_callback = function(results) {
                for (var i = 0; i < results.features.length; i++) {
                  var coords = results.features[i].geometry.coordinates;
                  var latLng = new google.maps.LatLng(coords[1],coords[0]);
                  var marker = new google.maps.Marker({
                    position: latLng,
                    map: map
                  });
                }
                
            }


            function reportar() {
                var url = window.location.href;
                url = url.replace("/main.php","/reportar.php");
                url+= "?longitud=" + long + "&latitud=" + lati;
                window.location.replace(url);
            }
                
            function doNothing() {}
        </script>   
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZoly_sMdqz9uuxrol9pu1EGzJLLLOfh8&callback=initMap"
                type="text/javascript"></script>
        
    </body>
</html>

<!--<script>
    alert("Para visualizar reportes en su ubicación actual, hacer click en el botón de localización en la esquina superior derecha del mapa.")
</script>-->