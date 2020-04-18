<?php
    include "dbconnect.php";

function parseToXML($htmlStr)
    {
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
    }

    // Select all the rows in the markers table
    $result = mysqli_query($bdc, "SELECT * FROM reportes WHERE 1") or die(mysqli_error($bdc));

    header("Content-type: text/xml");
    // Start XML file, echo parent node
    echo "<?xml version='1.0' ?>";
    echo '<markers>';
    $ind=0;
    // Iterate through the rows, printing XML nodes for each
    while ($row = @mysqli_fetch_assoc($result)){
      // Add to XML document node
      echo '<marker ';
      echo 'id="' . $row['idreportes'] . '" ';
      echo 'address="' . parseToXML($row['descripcion']) . '" ';
      echo 'lat="' . $row['latitud'] . '" ';
      echo 'lng="' . $row['longitud'] . '" ';
    echo 'type="' . $row['tipo'] . '" ';
      echo '/>';
      $ind = $ind + 1;
    }

    // End XML file
    echo '</markers>';
?>