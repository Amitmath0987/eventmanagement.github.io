
<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin.php');
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
		<div class="container">
			<div class="row">
			<div class="col-lg-12 col-md-12 col-12">

				<br><h1 class="text-center text-danger text-uppercase">Permission letters</h1>
				<br><br>
				<table class=" table  table-striped table-bordered table-hover">
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
					$qy="select *from schoolpermission_letters";
					$qy="select *from school_info";
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
						<!-- <td><?php echo $row['status']?></td> -->
						
						
					</tr>
					<?php
					}
					?>
				</table>
			</div>
			 </div>
		</div>
		<?php
		include('includes/links/scriptlinks.php');
		?>
	</body>
</html>