<?php


include('connection.php');

$id=$_GET['id'];

$qy="DELETE FROM `admin_info` where id=$id";
mysqli_query($con,$qy);

header('location:view_registered_admins.php');
?>