<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>quiz participants</title>
	<?php
include('includes/links/stylelinks.php');
	?>
</head>

<body>
<div class="container">
<!-- <div class="row"> -->
<div class="col-lg-12 col-md-12 col-12">
	<h1 class="text-center text-danger text-uppercase">Quiz participants</h1>
	<table class=" table  table-striped table-bordered table-hover">
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


$qy="select *from originparticipants where event_name='quiz'";
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

<!-- </div>
 --></div>
<?php
include('includes/links/scriptlinks.php');
?>
</body>
</html>