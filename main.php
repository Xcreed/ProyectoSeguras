<html>
    <head>
        <meta charset="utf-8">
        <title>Proyecto: Seguras</title>
        <script src='https://api.mapbox.com/mapbox.js/v3.3.0/mapbox.js'></script>
        <link href='https://api.mapbox.com/mapbox.js/v3.3.0/mapbox.css' rel='stylesheet' />
        <style>
            body { margin:0; padding:0; }
            
            #menu { width: 100%; height: 10%; display: table; table-layout: fixed; background-color:aliceblue; border: 10px; }
            #option1 { display: table-cell; vertical-align: middle; }
            #option2 { height: 100%; display: table-cell; vertical-align: middle; }
            #reportar { float: right; }
            
            /*#reportar { width: 10%; height: 100%; float: right; }*/
            #map { position:absolute; bottom:0; width:100%; height: 90%; }
            /*#map { position:absolute; top:0; bottom:0; width:100%; height: 85%; }*/
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
            L.mapbox.accessToken = 'pk.eyJ1IjoiZGFtYXJjZTEzNSIsImEiOiJjazhiM255bjYwMWc5M2dwOTFrenZrdTZ5In0.koh1hVg015txPxgX-HjhLw';
            var map = L.mapbox.map('map')
                .setView([9.994665, -84.131491], 9)
                .addLayer(L.mapbox.styleLayer('mapbox://styles/damarce135/ck8b3wsqi1nzi1ine1fbm4fvr'));
            </script>
    
    </body>
</html>