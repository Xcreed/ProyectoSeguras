<?php 
include "dbconnect.php";


$id = $_GET["id"];

##########mysqli_query($bdc, "update reportes set estado = '1' where idreportes=$id") or die(mysqli_error($bdc));

$resultado = mysqli_query($bdc, "select longitud, latitud from reportes where idreportes = '$id'") or die(mysqli_error($bdc));
$registro = mysqli_fetch_array($resultado);
$longitud = $registro{0};
$latitud = $registro{1};
#header("Location: admin.php");

?>
<head>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.css" rel="stylesheet" />
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<div id="map"></div>
<input type="hidden" value="<?php echo $longitud;?>" id="long">
<input type="hidden" value="<?php echo $latitud;?>" id="lat">
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZGFtYXJjZTEzNSIsImEiOiJjazhiM255bjYwMWc5M2dwOTFrenZrdTZ5In0.koh1hVg015txPxgX-HjhLw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [-96, 37.8],
        zoom: 3
    });

    var long = Number($("#long").val());
    var lat = Number($("#lat").val());
    map.on('load', function() {
        map.addSource('points', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [
                    {
                        // feature for Mapbox DC
                        'type': 'Feature',
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [
                                long, lat

                            ]
                        },
                        'properties': {
                            'title': 'JP TEST'
                        }
                    }
                ]
            }
        });
        map.addLayer({
            'id': 'points',
            'type': 'symbol',
            'source': 'points',
            'layout': {
                // get the icon name from the source's "icon" property
                // concatenate the name to get an icon from the style's sprite sheet
                'icon-image': ['concat', ['get', 'icon'], '-15'],
                // get the title name from the source's "title" property
                'text-field': ['get', 'title'],
                'text-font': ['Open Sans Semibold', 'Arial Unicode MS Bold'],
                'text-offset': [0, 0.6],
                'text-anchor': 'top'
            }
        });
    });
</script>
