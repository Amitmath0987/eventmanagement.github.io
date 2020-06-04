<?php
session_start();
if(!isset($_SESSION['name']))
	header('location:adminlogin_form.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>admin dashboard</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
	</head>
	<body>
			<?php
			include('includes/navbars/admin_tophead2.php');
			?>
			<!-- sidenav start -->
		<?php
			include('includes/navbars/admin_sidenav.php');
		?>
		<!-- end of sidenav -->
		<div class="container">
		<section class="admin_section">
			<h1>sidenav</h1>
			<p>open sidenav</p>
			
		</section>
	</div>
		<?php
		include('admin_footer.php');
		?>
		<a href="#" class="gotop">
			<i class="fas fa-arrow-up"></i>
		</a>
		<?php
		include('includes/links/scriptlinks.php');
		?>
		<?php
		include('includes/links/js/adsidenav_script.js');
		?>
<!-- <script type="text/javascript">
			$(function () {
$('#main_navbar').bootnavbar();
})
</script> -->
	</body>
</html>