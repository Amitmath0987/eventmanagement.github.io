<!-- php script for sending mail -->
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$fullname = $_POST['name'];
	$subject = $_POST['subject'];
	$mailfrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "amitmathur349@gmail.com";
	$headers = "From: ".$fullname.$mailfrom;
	$txt = "You have recieved an e-mail from ".$fullname.".\n\n".$message;

	if(mail($mailTo, $subject, $txt, $headers))
	{
		echo "thanks for contacting us";
	}
	else
	{
		echo "there is an problem to sending mail";
	}

	header("location:indexcontactus_form.php?mailsend");

}

?>