<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:stulogin_form.php');
}

$rollno=$_SESSION['rollno'];
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
		</header>
		<div class="container">

			<!-- <div class="row"> -->
			<div class="col-lg-12 col-md-12 col-12 pt-4">
				<h1 class="text-center text-danger text-uppercase">Event participation</h1>
				<table class=" table  table-striped table-bordered table-hover table-responsive-sm">
					<tr class="text-center bg-dark text-white">
						<th>full name</th>
						<th>Class</th>
						<th>Rollno</th>
						<th>Event name</th>
						<th>Father name</th>
						<th>Contact</th>
					</tr>
					<?php
						
					include("connection.php");
					$qy="select *from studentparticipants where rollno = '$rollno'";
						$result=mysqli_query($con,$qy);
						while ($row=mysqli_fetch_array($result)) {
							
					?>
					<tr class="text-center">
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['class']?></td>
						<td><?php echo $row['rollno']?></td>
						<td><?php echo $row['event_name']?></td>
						<td><?php echo $row['father_name']?></td>
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
		include("footers/footer.php");
		?>
		<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
		<?php
		include('includes/links/scriptlinks.php');
		?>
		</body>
</html>