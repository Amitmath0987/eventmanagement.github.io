<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>uplaod origin results</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
		<header>
			<?php
				include('includes/navbars/admin_tophead2.php');
			?>
			<!-- sidenav start -->
			<?php
				include('includes/navbars/admin_sidenav.php');
			?>
			<!-- end of sidenav -->
		</header>
		<div class="maincontent">
			<div class="container">
				<div class="maindiv-form mt-5">
					<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">upload Result</h4></div>
					<form action="" method="post" enctype="multipart/form-data" class="needs validation">
						
						<div class="form-group">
							<label><i class="far fa-file-pdf"></i><i class="far fa-file-word"></i>Upload Origin Result</label>
							<input type="file" name="file" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-danger" name="submit">Submit</button>
					</form>
					
				</div>
			</div>
		</div><br>
		<?php
		include('admin_footer.php');
		?>
		<?php
		include('includes/links/scriptlinks.php');
		?>
		<?php
		include('includes/links/js/adsidenav_script.js');
		?>
	</body>
</html>
<?php
include("connection.php");
if(isset($_POST["submit"]))
{
$files=$_FILES["file"];
// if ($con) {
	// 	echo "connection successful";
	// 	echo $sch_id;
// } else {
	// 	echo "no connection";
// }
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
	$destinationfile=
	'originresults_file/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);
	
	$qy="INSERT INTO `origin_results`(`file`) VALUES ('$destinationfile')";
		
	$result1=mysqli_query($con,$qy);
if($result1)
{
	echo "values inserted succesfully";
}
}
}
?>