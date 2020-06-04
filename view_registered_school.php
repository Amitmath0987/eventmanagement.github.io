<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registered schools</title>
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
				<!-- <div class="row"> -->
				<div class="col-lg-12 col-md-12 col-12">
					<h1 class="text-center text-danger text-uppercase">registered school</h1>
					<table class=" table  table-striped table-bordered table-hover table-responsive-sm">
						<tr class="text-center bg-dark text-white">
							<th>Sch_id</th>
							<th>School name</th>
							<th>Principal name</th>
							<th>Principal contact</th>
							<th>Incharge name</th>
							<th>Incharge contact</th>
							<th>Email</th>
							<th>Password</th>
							<th>Update school</th>
							<th>Delete School</th>
						</tr>
						<?php
							
						include("connection.php");
						$qy="select *from school_info";
							$result=mysqli_query($con,$qy);
							while ($row=mysqli_fetch_array($result)) {
								
						?>
						<tr class="text-center">
							<td><?php echo $row['sch_id']?></td>
							<td><?php echo $row['school_name']?></td>
							<td><?php echo $row['principal_name']?></td>
							<td><?php echo $row['principal_contact']?></td>
							<td><?php echo $row['incharg_name']?></td>
							<td><?php echo $row['incharge_contact']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['password']?></td>
							<td><button class="btn btn-danger"><a class="text-white" href="update_school.php?id=<?php echo $row['id']?>">Update</a></button></td>
							<td><button class="btn btn-danger"><a class="text-white"  href="delete_school.php?sch_id=<?php echo $row['sch_id']?>">Delete</a></button></td>
							
						</tr>
						<?php
						}
						?>
					</table>
				</div>
				<!-- </div>-->
			</div>
		</div>
		<?php
		include('admin_footer.php');
		?>
		<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
		<?php
		include('includes/links/scriptlinks.php');
		?>
		<?php 
include('includes/links/js/adsidenav_script.js');
		?>
	</body>
</html>