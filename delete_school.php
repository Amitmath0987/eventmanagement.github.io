<?php


include('connection.php');

$sch_id=$_GET['sch_id'];

$qy="DELETE FROM `school_info` where sch_id=$sch_id";
mysqli_query($con,$qy);

header('location:view_registered_school.php');
?>