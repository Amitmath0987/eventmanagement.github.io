
<?php
header('location:adminlogin_form.php');
?>



<?php
// error_reporting(E_ALL); ini_set('display_errors', 1);
// session_start();
 // header('location:schoollogin.php');
	
// to connect with the database
include("connection.php");

if(isset($_POST["submit"]))
{
$name=$_POST["username"];
$email1=$_POST["email"];
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

$qy="INSERT INTO `admin_info`(`name`, `email`, `password`) VALUES('$name','$email1','$pass')"; 
	$result1=mysqli_query($con,$qy);

}
if($result1)
{
echo "value inserted";
}
else{
echo "not inserted";
}	

?>