<!DOCTYPE html>
<html>
	<head>
		<title>student registration</title>
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
		<div class="container">
			<div class="formmain-div">
				<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">student registration</h4></div>
				<div class="formcontent">
				<form action="rstuinfo.php" method="post" class="needs validation">
					<div class="form-group">
						<label class="my-3">Student Name</label>
						<input type="text" name="studentname" placeholder="Enter name" value="" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" placeholder="Enter email" value=""  class="form-control" required>
					</div>
					<div class="form-group">
						<label for="class">class</label>
						<select class="form-control custom-select" name="classoption" required>
							
							<option selected="selected" value="--Select Class--">--Select Class--</option>
							
							<option value="B.SC. (Information Technology)">B.SC. (Information Technology)</option>
							<option value="Bachelor of Arts">Bachelor of Arts</option>
							<option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
							<option value="Bachelor of Commerce">Bachelor of Commerce</option>
							<option value="Bachelor of Computer Applications">Bachelor of Computer Applications</option>
							<option value="Bachelor of Design">Bachelor of Design</option>
							<option value="Bachelor of Laws">Bachelor of Laws</option>
							<option value="Bachelor of Multimedia">Bachelor of Multimedia</option>
							<option value="Bachelor of Journalism and Mass Communication">Bachelor of Journalism and Mass Communication</option>
							<option value="BBA LL.B.">BBA LL.B.</option>
						</select>
					</div>
					<div class="form-group">
						<label for="rollno">Rollno</label>
						<input type="text" name="rollno" placeholder="Enter rollno" value="" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" placeholder="Enter password" value="" class="form-control" required >
					</div>
					<div class="forregister">
						<div class="form-group">
							<label>Already have an account</label>
							<a href="stulogin_form.php">click here</a>
						</div>
					</div>
					<button type="submit" name="submit" class="btn btn-danger">Register</button>
					
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