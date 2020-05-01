


<?php 
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
$files=$_FILES["file"];
$event_name=$_POST["eventname"];
$venue=$_POST["venue"];
$date=$_POST["date"];
$time=$_POST["time"];

// to accessing file
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];
$filetype=$files['type'];


// to validate
$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored))
{
	$destinationfile='images/eventimage/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);
		$qy="insert into upcoming_events(event_image,event_name,venue,date,time,filetype)values('$destinationfile','$event_name','$venue','$date','$time','$filetype')";
	$result1=mysqli_query($con,$qy);

if($result1)
{
	echo "values inserted succesfully";
}
}
}

?>