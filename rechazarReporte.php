<?php 
include "dbconnect.php";


$id = $_GET["id"];

mysqli_query($bdc, "update reportes set estado = '-1' where idreportes=$id") or die(mysqli_error($bdc));


$resultado = mysqli_query($bdc, "select longitud, latitud from reportes where idreportes = '$id'") or die(mysqli_error($bdc));
$registro = mysqli_fetch_array($resultado);
$longitud = $registro{0};
$latitud = $registro{1};
header("Location: admin.php");


?>