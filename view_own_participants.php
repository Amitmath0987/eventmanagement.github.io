<?php
session_start();
if(!isset($_SESSION['schname'])){
	header('location:schoollogin_form.php');
}

$schoolid=$_SESSION['sch_id'];
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
			<?php include('includes/navbars/schoolnav.php');
			?>
		</header>
		<div class="container">

			<!-- <div class="row"> -->
			<div class="col-lg-12 col-md-12 col-12 pt-4">
				<h1 class="text-center text-danger text-uppercase">origin participants</h1>
				<table class=" table  table-striped table-bordered table-hover table-responsive-sm">
					<tr class="text-center bg-dark text-white">
						<th>School name</th>
						<th>Team no.</th>
						<th>Event name</th>
						<th>Father name</th>
						<th>Participant name</th>
						<th>Contact</th>
						<th>sch_id</th>
					</tr>
					<?php
						
					include("connection.php");
					$qy="select *from originparticipants where p_sch_id = '$schoolid'";
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
						<td><?php echo $row['p_sch_id']?></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
			<button class="btn btn-danger float-right" onclick="window.print()">Print</button><br><br>
		</div>
		<?php
		include("footers/school_footer.php");
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