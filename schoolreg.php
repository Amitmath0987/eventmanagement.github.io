

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
		<div class="container">
			<div class="schlmain-div">
				<div class="schl-reg-heading text-center text-white text-uppercase"><h4 class="animated heartBeat">School Registration</h4></div>
				<form action="schinfo.php" method="post" class="needs validation">
					<div class="form-group">
						<label for="schoolname">School name</label>
						<select class="form-control custom-select" name="schooloption" required>
							
							<option selected="selected" value="--Select School--">--Select School--</option>
							
							<option value="Dssd Sr .Sec. School">Dssd Sr .Sec. School</option>
							<option value="R.P Memorial Public School">R.P Memorial Public School</option>
							<option value="Jullunder Model School">Jullunder Model School</option>
							<option value="Kanya Maha Vidhayalaya">Kanya Maha Vidhayalaya</option>
							<option value="H.M.V School">H.M.V School</option>
							<!-- <option value="Bachelor of Design">Bachelor of Design</option>
							<option value="Bachelor of Laws">Bachelor of Laws</option>
							<option value="Bachelor of Multimedia">Bachelor of Multimedia</option>
							<option value="Bachelor of Journalism and Mass Communication">Bachelor of Journalism and Mass Communication</option>
							<option value="BBA LL.B.">BBA LL.B.</option> -->
						</select>
					</div>
					<div class="row">
	<div class="col">
		<div class="form-group">
			<label for="priname">Principal name</label>
			<input type="text" name="priname" placeholder="Enter principal name" value=""  class="form-control" required>
		</div>
	</div>
		
		<div class="col">
			<div class="form-group">
				<label for="pricontact">Principal contact</label>
				<input type="tel"  maxlength="10" name="pricontact" placeholder="Enter contact" value=""  class="form-control" required>
			</div>
		</div>
	</div>

	<div class="row">
	<div class="col">
		<div class="form-group">
			<label for="inchname">Incharge name</label>
			<input type="text" name="inchname" placeholder="Enter Incharge name" value=""  class="form-control" required>
		</div>
	</div>
		
		<div class="col">
			<div class="form-group">
				<label for="inchcontact">Incharge contact</label>
				<input type="tel" maxlength="10" name="inchcontact" placeholder="Enter contact" value=""  class="form-control" required>
			</div>
		</div>
	</div>
<div class="row">
	<div class="col">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" placeholder="Enter email" value=""  class="form-control" required>
		</div>
	</div>
		
		<div class="col">
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Enter password" value=""  class="form-control" required>
			</div>
		</div>
	</div>
					
					<div class="forregister">
						<div class="form-group">
							<label>Already have an account</label>
							<a href="schoollogin.php">click here</a>
						</div>
					</div>
					<button type="submit" name="submit" class="btn btn-danger">Register</button>
					
				</form>
				
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</body>
</html>