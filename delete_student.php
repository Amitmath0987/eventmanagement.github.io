<?php


include('connection.php');

$id=$_GET['id'];

$qy="DELETE FROM `user_info` where id=$id";
mysqli_query($con,$qy);

header('location:view_register_students.php');
?>