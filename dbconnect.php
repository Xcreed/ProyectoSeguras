<?php 
    $bdc = mysqli_connect('107.180.41.237:3306','segurasuser','seguras0822') or die(mysqli_error($bdc));
    mysqli_select_db($bdc, 'segurasdb') or die(mysqli_error($bdc));
?>
