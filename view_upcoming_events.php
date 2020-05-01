<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>upcoming events</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
		<header>
			<?php
			include('includes/navbars/admin_tophead.php');
			?>
		</header>
		<!-- sidenav start -->
		<?php
			include('includes/navbars/admin_sidenav.php');
		?>
	<!-- end of sidenav -->
			<div class="container my-5">
				<!-- <div class="row"> -->
				<div class="col-lg-12 col-md-12 col-12">
					<h1 class="text-center text-danger text-uppercase">upcoming events</h1>
					<table class=" table  table-striped table-bordered table-hover">
						<tr class="text-center bg-dark text-white">
							<th>Event image</th>
							<th>Event Name</th>
							<th>Venue</th>
							<th>Date</th>
							<th>Time</th>
							<th>Delete upcoming event</th>
						</tr>
						<?php
							
						include("connection.php");
						$qy="select *from upcoming_events";
							$result=mysqli_query($con,$qy);
							while ($row=mysqli_fetch_array($result)) {
								
						?>
						<tr class="text-center">
							<td style="width: 200px"><img src="<?php echo $row['event_image']?>" style="width: 100%; height: 110px;"></td>
							<td><?php echo $row['event_name']?></td>
							<td><?php echo $row['venue']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['time']?></td>
							<td><button class="btn btn-danger"><a class="text-white"  href="delete_upcomingevent.php?id=<?php echo $row['id']?>">Delete</a></button></td>
							
						</tr>
						<?php
						}
						?>
					</table>
				</div>
				<!-- </div>-->
			</div>
			<?php
			include('includes/links/scriptlinks.php');
			?>
		</body>
	</html>