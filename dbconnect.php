<?php 
    $bdc = mysqli_connect('localhost','root','') or die(mysqli_error($bdc));
    mysqli_select_db($bdc, 'test') or die(mysqli_error($bdc));
?>
