<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>origin participants</title>
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
	<section class="maincontent">
		<div class="container">
			<!-- <div class="row"> -->
			<div class="col-lg-12 col-md-12 col-12">
				<h1 class="text-center text-danger text-uppercase">origin participants</h1>
				<table class=" table  table-striped table-bordered table-hover table-responsive-sm">
					<tr class="text-center bg-dark text-white">
						<th>School name</th>
						<th>Team no.</th>
						<th>Event name</th>
						<th>Father name</th>
						<th>Participant name</th>
						<th>Contact</th>
					</tr>
					<?php
						
					include("connection.php");
					$qy="select *from originparticipants";
						$result=mysqli_query($con,$qy);
						while ($row=mysqli_fetch_array($result)) {
							
					?>
					<tr class="text-center">
						<td><?php echo $row['school_name']?></td>
						<td><?php echo $row['team_no']?></td>
						<td><?php echo $row['event_name']?></td>
						<td><?php echo $row['father_name']?></td>
						<td><?php echo $row['participant_name']?></td>
						<td><?php echo $row['contact']?></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
			<button class="btn btn-danger float-right" onclick="window.print()">Print</button>
		</div><br><br>

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