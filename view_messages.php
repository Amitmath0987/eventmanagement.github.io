
<!DOCTYPE html>
<html>
<head>
	<title>Query</title>
	<?php
include('includes/links/stylelinks.php');
	?>
</head>

<body>
<div class="container">
<!-- <div class="row"> -->
<div class="col-lg-12 col-md-12 col-12">
	<h1 class="text-center text-danger text-uppercase"></h1>
	<table class=" table  table-striped table-bordered table-hover">
	<tr class="text-center bg-dark text-white">
		<th>Sch_id</th>
		<th>School Name</th>
		<th>Query</th>
		<th>Reply</th>
		<th>Send</th>
	</tr>

<?php
	

include("connection.php");


$qy="select *from query";
	$result=mysqli_query($con,$qy);

	while ($row=mysqli_fetch_array($result)) {
		
?>

<tr class="text-center">
		<td><?php echo $row['sch_id']?></td>
		<td><?php echo $row['school_name']?></td>
		<td><?php echo $row['query']?></td>
		<td><textarea placeholder="write answer"></textarea></td>
		<td><button class="btn btn-danger"><a class="text-white"  href="delete_student.php?id=<?php echo $row['id']?>">Send</a></button></td>
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