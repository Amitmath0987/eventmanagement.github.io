<?php
session_start();
if(!isset($_SESSION['schname']))
	header('location:schoollogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>feedback form</title>
		<?php
			include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
		<?php include('includes/navbars/schoolnav.php');
		?>
		<div class="container">
			<div class="feedbackform mt-5 mb-5">
				<div class=" heading text-center text-white text-uppercase"><h4 class="animated heartBeat">Contact us</h4></div>
				<div class="formcontent">
					<form action="mail.php" method="post" class="needs validation">
						<div class="form-group">
							<label>School Name</label>
							<input type="text" name="name" required class="form-control" value="<?php echo $_SESSION['schname'];?>" readonly>
						</div>
						<div class="form-group">
							<!-- <label>School_ID</label> -->
							<input type="hidden" name="schoolid" required class="form-control" value="<?php echo $_SESSION['sch_id'];?>" readonly>
						</div>
						<div class="form-group">
							
							<label>Email</label>
							<input type="email" name="email" required class="form-control" value="<?php echo $_SESSION['email']; ?>" readonly>
						</div>
						<div class="form-group">
							
							<label>Subject</label>
							<input type="text" name="subject" required class="form-control" placeholder="Enter Subject" >
						</div>
						<div class="form-group">
							<textarea name="message" rows="4" cols="64" placeholder="type your Query" class="form-control" required=""></textarea>
						</div>
						<button type="submit" class="btn btn-block btn-danger" name="submit">Submit</button>
						
					</form>
				</div>
			</div>
		</div>
		<?php
		include('includes/links/scriptlinks.php');
		?>
	</div>
	
	<?php
		include("footers/school_footer.php");
		?>
	<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
</body>
</html>
<?php
	
// to connect with the database
include("connection.php");
if(isset($_POST["submit"]))
{
$schoolname=$_POST["schoolname"];
$sch_id=$_POST["schoolid"];
$question=$_POST["query"];
	$qy="INSERT INTO `query`(`sch_id`,`school_name`,`query`) VALUES('$sch_id','$schoolname','$question')";
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