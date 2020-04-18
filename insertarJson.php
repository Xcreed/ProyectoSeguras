<?php 
    include "dbconnect.php";

$data = array(); 

$query = "SELECT * FROM reportes WHERE 1 AND estado=1";

if($result = mysqli_query($bdc,$query)) {
  while ($row = mysqli_fetch_assoc($result))
  {
    $data[] = $row;
  }
}

$jsonData =json_encode($data);
$original_data = json_decode($jsonData, true);
$features = array();
foreach($original_data as $key => $value) {
    $features[] = array(
        'type' => 'Feature',
        'properties' => array('time' => $value['dateAndTime']),
        'geometry' => array(
             'type' => 'Point', 
             'coordinates' => array(
                  $value['longitud'], 
                  $value['latitud'], 
                  1
             ),
         ),
    );
}
$new_data = array(
    'type' => 'FeatureCollection',
    'features' => $features,
);

$new_data = json_encode($new_data, JSON_PRETTY_PRINT);
echo('eqfeed_callback(');
print_r($new_data);
echo(');');
?>