<?php
session_start();
 if(!isset($_SESSION['username']))
 	header('location:stulogin_form.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>student dashboard</title>
	<?php
		include('includes/links/stylelinks.php');
		?>
</head>
<body><header>
			<div class="schoolnav">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<h2 class="text-center text-success">welcome <?php echo $_SESSION['username'];?></h2>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav text-center ml-auto">
							
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="stuevent.php">Events participation</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="schoolresults.php">get results</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="feedback.php">Rules</a>
							</li>

							<li>
								<a href="stulogin_form.php"><button  class="btn btn-outline-light btn-sm btn-danger" type="submit">logout</button></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<section>
			<?php
			include("stuparticipants_form.php");

			?>
			<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
		</section>
		<?php
		include('includes/links/scriptlinks.php');
		?>

</body>
</html>