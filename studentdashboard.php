<?php
session_start();
 if(!isset($_SESSION['username']))
 	header('location:login.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>student dashboard</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- animate css link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
								<a class="nav-link" href="feedback.php">Event gallery</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="schoolresults.php">get results</a>
							</li>
							
							<li class="nav-item">
								<a  class="nav-link" href="#aboutorigin.php">About origin</a>
							</li>
							<li class="nav-link">
								<a href="#rules.php" class="text-white">Rules</a>
							</li>

							<li>
								<a href="login.php"><button type="submit">logout</button></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<?php
		include('includes/links/scriptlinks.php');
		?>



	


</body>
</html>