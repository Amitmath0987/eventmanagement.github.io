<!DOCTYPE html>
<html>
	<head>
		<title>Admin Registration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- animate css link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	</head>
	<body>
		<div class="container">
			<div class="ad-reg-maindiv-form">
				<div class="admin-reg-heading text-center text-white text-uppercase"><h4 class="animated heartBeat">admin registration</h4></div>
				<form action="admininfo.php" method="post" class="needs validation">
					<div class="form-group">
						<label for="text" class="my-3">Enter name</label>
						<input type="text" name="username" placeholder="Enter name" value="" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="email" >Email</label>
						<input type="email" name="email" placeholder="Enter email" value=""  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Enter password" value="" class="form-control" required>
					</div>
					
					<div class="forregister">
						
						<div class="form-group">
							<label>Already have an account</label>
							<a href="adminlogin.php">click here</a>
						</div>
					</div>
					<button type="submit" class="btn btn-danger" name="submit">register</button>
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>

</html>