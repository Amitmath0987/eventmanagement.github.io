<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>view permission letters</title>
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
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<br><h1 class="text-center text-danger text-uppercase">Permission letters</h1>
					<table class=" table  table-striped table-bordered table-hover table-responsive-sm">
						<tr class="text-center bg-dark text-white">
							<th>sch_id</th>
							<th>School name</th>
							<th>permission letter</th>
							<th>file type</th>
							<th>Delete permission</th>
							<th>Grant</th>
							<th>Status</th>
						</tr>
						<?php
							
						include("connection.php");
						$qy="select id,schoolpermission_letters.sch_id,schoolpermission_letters.school_name,permission_letter,filetype,status from schoolpermission_letters JOIN school_info ON schoolpermission_letters.sch_id=school_info.sch_id";
						
							$result=mysqli_query($con,$qy);
							while ($row=mysqli_fetch_array($result)) {
								
						?>
						<tr class="text-center">
							<td><?php echo $row['sch_id']?></td>
							<td><?php echo $row['school_name']?></td>
							<td><a href="<?php echo $row['permission_letter']?>" target="_blank">File</a></td>
							<td><?php echo $row['filetype']?></td>
							<td><button class="btn btn-danger"><a class="text-white"  href="delete_permission.php?id=<?php echo $row['id']?>">Delete</a></button></td>
							<td><button class="btn btn-danger"><a class="text-white"  href="approve_permission.php?sch_id=<?php echo $row['sch_id']?>">Approved</a></button></td>
							<td><?php echo $row['status']?></td>
							
							
						</tr>
						<?php
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</section>
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