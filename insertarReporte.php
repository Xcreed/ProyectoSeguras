<?php 
    include "dbconnect.php";


    $descripcion = $_POST["descripcion"];
    $dateAndTime = date("Y-m-d h:i:sa");
    $estado = 0;

    $radio = $_POST['exampleRadios'];
    if ($radio == "option1") {
        $longitud = $_POST["longitudObtenida"];
        $latitud = $_POST["latitudObtenida"]; 
    } if ($radio == "option2") {          
        $longitud = $_POST["longitudIngresada"];
        $latitud = $_POST["latitudIngresada"];     
    }
    else {

    }          

    mysqli_query($bdc, "insert into reportes (descripcion, longitud, latitud, dateAndTime, estado) values ('$descripcion', '$longitud', '$latitud', '$dateAndTime', '$estado')") or die(mysqli_error($bdc));

    header("Location: main.php");

?>