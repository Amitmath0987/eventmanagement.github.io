<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>admin dashboard</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!-- animate css link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
		<!-- font awesome link -->
		<script src="https://kit.fontawesome.com/dbfe79b526.js"></script>
	</head>
	<body>
		<header>
			<?php
			include('includes/navbars/admin_tophead.php');
			?>
		</header>
		<!-- sidenav start -->
		<?php
			include('includes/navbars/admin_sidenav.php');
			?>
	<!-- end of sidenav -->
	<section class="maincontent">
		<h1>sidenav</h1>
		<p>open sidenav</p>
		
	</section>
	<script>
	const openNav=()=>{
	document.getElementById('adminsidenav').style.width='250px';
	}
	const closeNav=()=>{
	document.getElementById('adminsidenav').style.width='0px';
	}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<!-- <a href="adminlogin.php"><button class="btn btn-success" type="submit">logout</button> -->