<?php


include('connection.php');

$id=$_GET['id'];

$qy="DELETE FROM `upcoming_events` where id=$id";
mysqli_query($con,$qy);

header('location:view_upcoming_events.php');
?>