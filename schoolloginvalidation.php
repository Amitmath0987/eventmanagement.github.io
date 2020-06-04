<?php
include("connection.php");


if(isset($_POST["submit"])){
	$email1=$_POST["email"];

	$pass=$_POST["password"];

	$query="SELECT * FROM `school_info` WHERE email='$email1' AND password='$pass'";

 	$num=mysqli_num_rows($result);

 $result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result)) {
	$schoolname=$row['school_name'];
 		$status=$row['status'];
 		$sch_id=$row['sch_id'];
 		$email=$row['email'];
 	}


if(mysqli_num_rows($result)>0){
session_start();
$_SESSION['schname']=$schoolname;
$_SESSION['status']=$status;
$_SESSION['sch_id']=$sch_id;
$_SESSION['email']=$email;
header('location:upload_permission_form.php');
}

else{
header('location:schoollogin_form.php');
}
}
?>