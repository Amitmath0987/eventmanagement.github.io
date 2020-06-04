<?php
 
	
// to connect with the database
include("connection.php");


if(isset($_POST["submit"])){
// $stuname=$_POST["studentname"];
	$email1=$_POST["email"];
// $classoption=$_POST["classoption"];
// $rollno=$_POST["rollno"];
	$pass=$_POST["password"];

// to check whether the email or password is already in database
	$query="SELECT * FROM `admin_info` WHERE email='$email1' AND password='$pass'";
// $query = "SELECT email,password FROM `user_info`";
// to fire the query

	$result=mysqli_query($con,$query);
	while ($row = mysqli_fetch_array($result)) {
		$adminname = $row['name'];
	}

// compare the enter data with the already entered from the table row

	// $num=mysqli_num_rows($result);




if(mysqli_num_rows($result)>0){
	session_start();
	$_SESSION['name']=$adminname;
	header('location:admindashboard.php');

}else{
	 header('location:adminlogin_form.php');

}

}

?>