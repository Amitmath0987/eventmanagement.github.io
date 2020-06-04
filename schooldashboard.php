<?php
session_start();
if(!isset($_SESSION['schname']))
	header('location:schoollogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>school dashboard</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
		
	</head>
	<body>
		<header>
			<?php include('includes/navbars/schoolnav.php');
			?>
		</header>
		<?php
		include('includes/links/scriptlinks.php');
		?>
		<section class="py-5">
			<div class="jumbotron">
				<h1 style="color: #8c221b" class="animated bounceInDown delay-0s duration-5s text-center">welcome to participant in origin Event  <br>ORGANISED BY PG DEPARTMENT OF COMPUTER SCIENCE & IT(Doaba College)</h1>
			</div>
			
		</section>
		<div class="notice">
				<marquee onmouseover="this.stop();" onmouseout="this.start();" style="font-size: 16px;font-weight: bold;" scrolldelay="5 sec">
				<a href="/image/final-logo.jpg" target="blank" style="color:#084279;">
					India Code Logo has been Modified, Click here to Download for updating the Logo in your Website.
				</a>
				</marquee>
			</div>
			<div>
				<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
			<?php
		include("footers/school_footer.php");
		?>
		<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
	</div>
	</body>
</html>