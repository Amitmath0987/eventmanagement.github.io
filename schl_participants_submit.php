<?php
header('location:schooldashboard.php');
?>
<?php
// session_start();
 // header('location:schoollogin.php');
	
// to connect with the database
include("connection.php");

if(isset($_POST["submit"]))
{
$schoolname=$_POST["schoolname"];
$year=$_POST["year"];
$team_no=$_POST["teamnumber"];
$eventname=$_POST["eventoption"];
$father_name=$_POST["fathername"];
$name=$_POST["participantname"];
$phonenumber=$_POST["phnnumber"];
$schoolid=$_POST["schoolid"];




// to check whether the email or password is already in database
// $query="select * from user_info where email = '$email' && password ='$pass' ";

// to fire the query

// $result= mysqli_query($con,$query);

// compare the enter data with the already entered from the table row

// $num=mysqli_num_rows($result);

// if($num==1){
// 	echo "email and password is already registered";
// }else{
// $qy="INSERT INTO `eventsname`(`school_name`, `team_no`, `event_name`, `father_name`, `participant_name`, `contact`) VALUES('$schoolname','$team_no','$eventname','$father_name','$name','$phonenumber')";
$qy="INSERT INTO `originparticipants`(`school_name`,`year`,`team_no`, `event_name`, `father_name`, `participant_name`, `contact`, `p_sch_id`) VALUES ('$schoolname','$year','$team_no','$eventname','$father_name','$name','$phonenumber','$schoolid')";
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
