<?php
 header('location:login.php');
	
// to connect with the database
include("connection.php");
// if ($con) {
// 	echo "connection successful";
// } else {
// 	echo "no connection";
// }
// to select database from database
// $db=mysqli_select_db($con,'eventmanagement_db');
// to check that if user only clicks on submit,otherwise no need to run query
if(isset($_POST["submit"]))
{
$stuname=$_POST["studentname"];
$email1=$_POST["email"];
$classoption=$_POST["classoption"];
$rollno=$_POST["rollno"];
$pass=$_POST["password"];

// to check whether the email or password is already in database
// $query="select * from user_info where email = '$email1' && password ='$pass' ";

// to fire the query

// $result= mysqli_query($con,$query);

// compare the enter data with the already entered from the table row

// $num=mysqli_num_rows($result);

// if($num==1){
// 	echo "email and password is already registered";
// }else{
	$qy="insert into user_info(student_name,email,class,rollno,password)values('$stuname','$email1','$classoption','$rollno','$pass')";
	$result1=mysqli_query($con,$qy);

// }
if($result1)
{
	echo "values inserted succesfully";
}

}

?>