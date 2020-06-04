<!DOCTYPE html>
<html>
	<head>
		<title>contact us</title>
		<?php
			include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
		<?php
			include('includes/navbars/mainnav.php');
			?>
		<div class="container" >
			<div class="feedbackform">
				<div class=" feedhead text-center text-white text-uppercase"><h4 class="animated heartBeat " id="contactus">Contact us</h4></div>
				<div class="formcontent">
					<form action="mail.php" method="post" class="needs validation">
						
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="name" required class="form-control" placeholder="Enter Name" >
						</div>
						<div class="form-group">
							
							<label>Email</label>
							<input type="email" name="email" required class="form-control" placeholder="Your e-mail" >
						</div>
						<div class="form-group">
							
							<label>Subject</label>
							<input type="text" name="subject" required class="form-control" placeholder="Enter Subject" >
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea name="message" rows="6" cols="64" placeholder="write your message" required class="form-control"></textarea>
						</div>
						<button type="submit" class="btn btn-block btn-danger" name="submit">SEND MAIL</button>
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
		<?php
			include('includes/links/scriptlinks.php');
			?>
		
		
	</body>
</html>

