<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>student login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- animate css link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	</head>
	<body>
		<?php
include('includes/navbars/mainnav.php')
		?>
		<div class="container py-2">
			<div class="maindiv-form">
				<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">student login</h4></div>
				<div class="formcontent">
				<form action="stuloginvalidation.php" method="post" class="needs validation">
					<div class="form-group">
						<label for="email" class="my-3">Email</label>
						<input type="email" name="email" placeholder="Enter email" value=""  class="form-control" required>
						
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Enter password" value="" class="form-control" required>
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
							<label class="custom-control-label" for="customControlValidation1">Remember me</label>
						</div>
					</div>
					<div class="forregister">
						<div class="form-group">
							<label>Student who have not register</label>
							<a href="regform.php">click here</a>
						</div>
					</div>
					<button type="submit" class="btn btn-danger" name="submit">login</button>
				</form>
			</div>
			</div>
		</div>

		<?php
		include("footers/footer.php");
		?>
		<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>
</html>