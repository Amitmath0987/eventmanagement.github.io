<?php
 header('location:studentdashboard.php');
?>
<?php
// to connect with the database
include("connection.php");

if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$class=$_POST["class"];
$rollno=$_POST["rollno"];
$eventname=$_POST["eventoption"];
$fathername=$_POST["fathername"];
$phonenumber=$_POST["phnnumber"];

$qy="INSERT INTO `studentparticipants`(`name`,`class`,`rollno`,`event_name`, `father_name`, `contact`) VALUES ('$name','$class','$rollno','$eventname','$fathername','$phonenumber')";
	$result=mysqli_query($con,$qy);


if($result)
{
	echo "values inserted succesfully";
}
else
{
	echo " value  not inserted";
}
}
?>
