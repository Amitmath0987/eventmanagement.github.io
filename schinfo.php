<?php

 header('location:schoollogin_form.php');
	
// to connect with the database
include("connection.php");
if(isset($_POST['submit']))
{
$schoolname=$_POST["schooloption"];
$principalname=$_POST["priname"];
$pricontact=$_POST["pricontact"];
$inchname=$_POST["inchname"];
$inchcontact1=$_POST["inchcontact"];
$email=$_POST["email"];
$pass=$_POST["password"];



// to check whether the email or password is already in database
// $query="select * from user_info where email = '$email' && password ='$pass' ";

// to fire the query

// $result= mysqli_query($con,$query);

// compare the enter data with the already entered from the table row

// $num=mysqli_num_rows($result);

// if($num==1){
// 	echo "email and password is already registered";
// }else{
	$qy="INSERT INTO `school_info`(`school_name`, `principal_name`, `principal_contact`, `incharg_name`, `incharge_contact`, `email`, `password`) VALUES('$schoolname','$principalname','$pricontact','$inchname','$inchcontact1','$email','$pass')"; 
	$result1=mysqli_query($con,$qy);

if($result1)
{
	echo "values inserted succesfully";
}
else
{
	echo " value  not inserted";
}
}
?>