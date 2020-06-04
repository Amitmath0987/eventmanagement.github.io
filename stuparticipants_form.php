<?php
session_start();
 if(!isset($_SESSION['username']))
 	header('location:stulogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Participants</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
		<div class="container">
			<div class="feedbackform mb-5 mt-5">
				<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">participant detail</h4></div>
				<div class="formcontent">
					<form action="stu_participants_submit.php" method="post" class="needs validation">
						<div class="form-group">
							<span>Full Name</span>
							<input type="text" maxlength="4" name="name" class="form-control" value="<?php echo $_SESSION['username'];?>"readonly>
						</div>
		
						<div class="form-group">
							<label for="class">Class</label>
							<input type="text" name="class" required class="form-control" value="<?php echo $_SESSION['class'];?>" readonly>
						</div>
						<div class="form-group">
							<span>Rollno</span>
							<input type="text" maxlength="4" name="rollno" value="<?php echo $_SESSION['rollno'];?>" class="form-control" placeholder="Enter Rollno" readonly required>
						</div>
						<!-- <div class="form-group">
							<span>Team No</span>
							<input type="number" name="teamnumber" class="form-control" placeholder="Enter Team number" required>
						</div> -->
						<div class="form-group">
							<label for="schoolname">Event type</label>
							<select class="form-control custom-select" name="eventoption" required>
							</select>
						</div>
						<div class="form-group">
							<label for="schoolname">Event theme</label>
							<select class="form-control custom-select" name="eventoption" required>
								
								<option selected="selected" value="--choose event--">--Choose event--</option>
								
								<option value="Collage Making">Collage Making</option>
								<option value="Poster Making">Poster Making</option>
								<option value="Quiz">Quiz</option>
								<option value="Net Savvy">Net Savvy</option>
								<option value="LAN Gaming">LAN Gaming</option>
								<option value="T- Shirt Painting">T- Shirt Painting</option>
								<option value="Best Out of Waste">Best Out of Waste</option>
								<option value="Chess">Chess</option>
								<option value="Badminton">Badminton</option>
								<option value="Photo Booth">Photo Booth</option>
								<option value="Fire on Keyboard">Fire on Keyboard</option>
								<option value="Rangoli">Rangoli</option>
								<option value="Group Dance">Group Dance</option>
								<option value="Extempore">Extempore</option>
								<option value="Solo Dance">Solo Dance</option>
								<option value="Step Up">Step Up</option>
								<option value="Ad Mad Show">Ad Mad Show</option>
								<option value="Temple Run">Temple Run</option>
								<option value="Tug of War">Tug of War</option>
							</select>
						</div>
						<div class="form-group">
							<span>Father Name</span>
							<input type="text" name="fathername" class="form-control" placeholder="Enter Father name" required>
						</div>
						<div class="form-group">
							<span>Contact</span>
							<input type="tel" maxlength="10" name="phnnumber" class="form-control" placeholder="Enter contact"  required>
						</div>
						<button type="submit" class="btn btn-block btn-danger justify-content-center" name="submit">submit</button>
					</form>
				</div>
			</div>
		</div>
			<?php
		include("footer.php");
		?>
			
		</body>
	</html>