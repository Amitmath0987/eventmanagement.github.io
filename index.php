<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
		<?php
		include('includes/links/stylelinks.php');
		?>
	</head>
	
	<body>
		<header>
			<?php
			include('includes/navbars/mainnav.php');
			?>
		</header>
			
			
						<!-- carousole -->
						<div id="demo" class="carousel slide" data-ride="carousel">
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/dance.jpg" alt="slider3">
									<div class="carousel-caption">
										<h1>Event management</h1>
										<p>We had such a great time to celebrate</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/doaba.jpg" alt="slider2">
									<div class="carousel-caption">
										<h3>come forward</h3>
										<p>lets celebrate Thank you!</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/sing.jpg" alt="slider123">
									<div class="carousel-caption">
										<h3>Events management</h3>
										<p>We love the Big Apple!</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</header>
					<!-- About section -->
					
					<section class="my-4 ">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<div class=" upcomingheading py-4 text-center">
									<h2 class="animated infinite heartBeat text-danger">Upcoming Events</h2>
								</div>
							</div>
							<div class="container">
								<div class="row">
									
									<?php
									
									include("connection.php");
									$qy="select *from upcoming_events";
									$result=mysqli_query($con,$qy);
									while ($row=mysqli_fetch_array($result)) {
									
									?>
									<div class="col-lg-4 col-md-4 col-12">
										
										<div class="card bg-light my-2" style="height: 236px">
											<img class="card-img-top" src="<?php echo $row['event_image']?>"alt="Card image" style="width: 100%;height: 130px">
											<div class="card-body">
												<h4 class="card-title text-center text-danger"><?php echo $row['event_name']?></h4>
												
												<p class="card-text"><i class="fas fa-map-marker-alt"></i>venue:<?php echo $row['venue']?><br>
													<i class="fas fa-calendar-alt"></i><?php echo $row['date']?>
													<i class="fas fa-clock"></i><?php echo $row['time']?>
												</p>
											</div>
										</div>
										</marquee>
									</div>
																	
								<?php
										}
									?>
								</div>
							</div>
						</section>
						<!-- Speakers -->
						<section>
							<div class="my-4">
								<h1 class="text-center">Speakers</h1>
							</div>
							<div class="container-fluid">
								<div class="d-flex justify-content-between">
									
									<div class="col-lg-4 col-md-4 col-12">
										<img src="images/new6.jpg" alt="new6" width="200" height="300" class="img-fluid rounded-circle py-4 ">
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<img src="images/new6.jpg" alt="new6" width="200" height="300" class="img-fluid rounded-circle py-4 ">
									</div>
									<div class="col-lg-4 col-md-4 col-12">
										<img src="images/new6.jpg" alt="new6" width="200" height="345" class="img-fluid rounded-circle py-4 ">
									</div>
									
								</div>
							</div>
						</section>
						
						<?php
						include('includes/links/scriptlinks.php');
						?>	
					</body>
				</html>