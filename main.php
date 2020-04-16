<html>
    <head>
        <meta charset="utf-8">
        <title>Proyecto: Seguras</title>
        <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.js"></script>
        <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.css" rel="stylesheet" />
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
                <button id="reportar" name="reportar" onclick="test">Reportar</button>
            </div>
        </div>
        
        <div id='map'></div>
            <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZGFtYXJjZTEzNSIsImEiOiJjazhiM255bjYwMWc5M2dwOTFrenZrdTZ5In0.koh1hVg015txPxgX-HjhLw';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/damarce135/ck8b3wsqi1nzi1ine1fbm4fvr', 
                    center: [-84.131491,9.994665], 
                    zoom: 5
                });
                
            // Add geolocate control to the map.
            var geolocate = new mapboxgl.GeolocateControl({
                positionOptions: {
                    enableHighAccuracy: true
                },
                trackUserLocation: true
                })
            
            map.addControl(geolocate);
                
            geolocate.on('geolocate', function(e) {
                var long = e.coords.longitude;
                var lat = e.coords.latitude;
                var position = [long, lat];
                console.log(position);
            })
            </script>
    
    </body>
</html>