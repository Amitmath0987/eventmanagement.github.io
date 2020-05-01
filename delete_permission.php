<?php


include('connection.php');

$id=$_GET['id'];

$qy="DELETE FROM `schoolpermission_letters` where id=$id";
mysqli_query($con,$qy);

header('location:view_permission.php');
?>