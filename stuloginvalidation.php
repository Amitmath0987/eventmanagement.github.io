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
	$query="SELECT * FROM `user_info` WHERE email='$email1' AND password='$pass'";
// $query = "SELECT email,password FROM `user_info`";
// to fire the query

	$result=mysqli_query($con,$query);
	while ($row = mysqli_fetch_array($result)) {
		$stuname = $row['student_name'];
	}

// compare the enter data with the already entered from the table row

	// $num=mysqli_num_rows($result);




if(mysqli_num_rows($result)>0){
	session_start();
	$_SESSION['username']=$stuname;
	header('location:studentdashboard.php');

}else{
	echo "wrong email and password";
	 header('location:login.php');

}

}

?>