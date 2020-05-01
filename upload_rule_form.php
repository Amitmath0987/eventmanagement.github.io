<!DOCTYPE html>
<html>
	<head>
		<title>uplaod origin results</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
		<div class="container">
			<div class="maindiv-form mt-5">
				<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">upload Rules</h4></div>
				<form action="" method="post" enctype="multipart/form-data" class="needs validation">
					
					<div class="form-group">
						<label><i class="far fa-file-pdf"></i><i class="far fa-file-word"></i>Upload Rules</label>
						<input type="file" name="file" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-danger" name="submit">Submit</button>
				</form>
				
			</div>
		</div>
		<?php
		include('includes/links/scriptlinks.php');
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
	'originrules_file/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);
	
	$qy="INSERT INTO `origin_rules`(`file`) VALUES ('$destinationfile')";
		
	$result1=mysqli_query($con,$qy);


if($result1)
{
	echo "values inserted succesfully";
}

}
}

?>