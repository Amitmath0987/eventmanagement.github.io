<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin_form.php');
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
	<?php
			include('includes/navbars/admin_tophead2.php');
			?>
			<!-- sidenav start -->
		<?php
			include('includes/navbars/admin_sidenav.php');
		?>
		<!-- end of sidenav -->
		<section class="maincontent">
<div class="container py-5">
<!-- <div class="row"> -->
<div class="col-lg-12 col-md-12 col-12 pt-4">
	<h1 class="text-center text-danger text-uppercase">Origin Results</h1>
	<table class=" table  table-striped table-bordered table-hover table-responsive-sm">
	<tr class="text-center bg-dark text-white">
		
		<th>Result file</th>
	</tr>

<?php
	

include("connection.php");


$qy="select *from origin_results";
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
</section>
 <?php
		include("/admin_footer.php");
		?>
<?php
include('includes/links/scriptlinks.php');
?>
<?php
include('includes/links/js/adsidenav_script.js');
?>
</body>
</html>