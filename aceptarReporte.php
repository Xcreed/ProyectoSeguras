<?php 
include "dbconnect.php";


$id = $_GET["id"];

##########mysqli_query($bdc, "update reportes set estado = '1' where idreportes=$id") or die(mysqli_error($bdc));

$resultado = mysqli_query($bdc, "select longitud, latitud from reportes where idreportes = '$id'") or die(mysqli_error($bdc));
$registro = mysqli_fetch_array($resultado);
$longitud = $registro{0};
$latitud = $registro{1};
#header("Location: admin.php");

$apiKey = "sk.eyJ1IjoiZGFtYXJjZTEzNSIsImEiOiJjazk1MWFremgwNTFrM2dxOWp3NzRvdDhwIn0.UCBdhPLl23z2ZxMevVnY_Q";

$data = "{'field_name': 'field_value'}";
$url = "http://webservice.url";
$headers = array('Content-Type: application/json');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($curl);
curl_close($curl);


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
/*

*/
