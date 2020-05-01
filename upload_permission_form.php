<?php
session_start();
if(!isset($_SESSION['schname']))
{

	header('location:schoollogin.php');
}
elseif($_SESSION['status']==1) {
	header('location:schooldashboard.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		include('includes/links/stylelinks.php');
		?>
		<title>upload permission</title>
	</head>
	<body>
		<div class="schoolnav">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<a class="text-center text-white navbar-brand nav-link">welcome <?php echo $_SESSION['schname'];?></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav text-center ml-auto">
							
							<li>
								<a href="schoollogin.php"><button  class="btn btn-outline-success btn-sm btn-danger text-white" type="submit">logout</button></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>

		
		<div class="container mt-2">
	<div class="jumbotron pt-0 py-0">
		<a class="text-center text-danger navbar-brand nav-link">your status of approval is <?php echo $_SESSION['status'];?></a>
	<ul class="justify-content-center">
		<h6>Note:</h6>
		<li>first you have to upload your School permission Letter file.</li><br>
		<li>on the Approval of your permission Letter By our side.</li><br>
		<li>you will be redirected to participant in the ORIGIN EVENT page.(PG DEPARTMENT OF COMPUTER SCIENCE & IT)</li><br>
	    <li>uploaded file should be pdf and doc,docx only!</li><br>
	</ul>
</div>
<div class="maindiv-form mt-0">
				<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">upload permission</h4></div>
			<form action="" method="post" enctype="multipart/form-data" class="needs validation">
				<div class="form-group">
					<label>School Name</label>
					<input type="text" name="schoolname" required class="form-control" value="<?php echo $_SESSION['schname'];?>" readonly>
				</div>
				<div class="form-group">
					<!-- <label>School_ID</label> -->
					<input type="hidden" name="schoolid" required class="form-control" value="<?php echo $_SESSION['sch_id'];?>" readonly >
				</div>
				<div class="form-group">
					<label><i class="far fa-file-pdf"></i><i class="far fa-file-word"></i>Upload file</label>
					<input type="file" name="file" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-danger" name="submit">Submit</button>
			</form>
		</div>
			<?php
			include('includes/links/scriptlinks.php');
			?>
		</div>
	</body>
</html>


<?php 
include("connection.php");

if(isset($_POST["submit"]))
{
$sch_id=$_POST["schoolid"];
$schoolname=$_POST["schoolname"];
$files=$_FILES["file"];



if ($con) {
	echo "connection successful";
	echo $sch_id;

} else {
	echo "no connection";

}

// to accessing file
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];
$filetype=$files['type'];


// to validate
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('pdf','doc','docx');

if(in_array($filecheck,$fileextstored))
{
	$destinationfile='schoolpermissions/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);
	// $qy="INSERT INTO schoolpermission_letters(sch_id,school_name,permission_letter,filetype)VALUES('$sch_id',$schoolname','$destinationfile','$filetype')";
	$qy="INSERT INTO `schoolpermission_letters`(`sch_id`, `school_name`, `permission_letter`, `filetype`)VALUES('$sch_id','$schoolname','$destinationfile','$filetype')";
		
	$result1=mysqli_query($con,$qy);


if($result1)
{
	echo "values inserted succesfully";
}

}
}

?>