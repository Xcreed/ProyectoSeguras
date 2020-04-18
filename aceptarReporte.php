<?php 
include "dbconnect.php";


$id = $_GET["id"];

mysqli_query($bdc, "update reportes set estado = '1' where idreportes=$id") or die(mysqli_error($bdc));

header("Location: admin.php");

?>
