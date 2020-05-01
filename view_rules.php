<?php
session_start();
if(!isset($_SESSION['schname']))
	header('location:schoollogin.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>School Results</title>
	<?php
include('includes/links/stylelinks.php');
	?>
</head>

<body>
	<?php include('includes/navbars/schoolnav.php');
			?>
<div class="container">
<!-- <div class="row"> -->
<div class="col-lg-12 col-md-12 col-12 pt-4">
	<h1 class="text-center text-danger text-uppercase">Origin Rules</h1>
	<table class=" table  table-striped table-bordered table-hover">
	<tr class="text-center bg-dark text-white">
		
		<th>Rules file</th>
	</tr>

<?php
	

include("connection.php");


$qy="select *from origin_rules";
	$result=mysqli_query($con,$qy);

	while ($row=mysqli_fetch_array($result)) {
		
?>

<tr class="text-center">
		
		<td><a href="<?php echo $row['file']?>" target="_blank">File</a></td>
</tr>

<?php
}
?>

	</table>

</div>

<!-- </div>
 --></div>
<?php
include('includes/links/scriptlinks.php');
?>
</body>
</html>