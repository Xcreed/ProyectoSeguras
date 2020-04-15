<?php 
    include "dbconnect.php";


    $id = $_GET["id"];

    mysqli_query($bdc, "delete from admins where id_admin=$id") or die(mysqli_error($bdc));

    header("Location: administrarAdmins.php");

?>