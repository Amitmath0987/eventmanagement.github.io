<?php
session_start();
if(!isset($_SESSION['schname']))
	header('location:schoollogin.php');
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
				<div class=" feedhead text-center text-white bg-primary text-uppercase"><h4 class="animated heartBeat">Contact us</h4></div>
				<div class="formcontent">
			<form action="" method="post" class="needs validation">
				<div class="form-group">
					<label>School Name</label>
					<input type="text" name="schoolname" required class="form-control" value="<?php echo $_SESSION['schname'];?>" readonly>
				</div>
				<div class="form-group">
					<!-- <label>School_ID</label> -->
					<input type="hidden" name="schoolid" required class="form-control" value="<?php echo $_SESSION['sch_id'];?>" readonly >
				</div>
				<div class="form-group">
					<textarea name="query" rows="4" cols="64" placeholder="type your Query" required=""></textarea>
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
		<div class="answer">

<textarea class="answerarea" rows="4" cols="60" readonly>
<?php echo $row['answers']; ?></textarea>
		</div>

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