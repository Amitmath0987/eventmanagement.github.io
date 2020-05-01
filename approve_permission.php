<?php


include('connection.php');

$sch_id=$_GET['sch_id'];
// echo $sch_id;

$qy="update school_info set status=1 where sch_id=$sch_id";
mysqli_query($con,$qy);

header('location:view_permission.php');
?>