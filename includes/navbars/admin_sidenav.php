<div class="sidenav" id="adminsidenav">
			<a href="javascript:void(0)" class="closebutton" onclick="closeNav()"> <span class="menulines" onclick="openNav()">&#9776;</span>
		</a>
		<h2 class="text-center text-dnager">Hello! <?php echo $_SESSION['name'];?></h2>
		<hr>
		<a href="#"><i class="fas fa-home"></i>Home</a>
		<hr>
		<a href="#"><i class="fas fa-folder-plus"></i>Add  events</a>
		<a href="upcomingevent_form.php"><i class="fas fa-calendar-plus"></i>Add upcoming event</a>
		
		<div class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
				<i class="fas fa-user-plus"></i>Add users
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item text-danger" href="regform.php">Add Students</button></a>
				<a class="dropdown-item text-danger" href="schoolreg.php">Add School</a>
				<a class="dropdown-item text-danger ml-2" href="adminreg.php">Add admin</a>
			</div>
		</div>
		<hr>
		<a href="view_permission.php"><i class="far fa-envelope"></i>view permission letter</a>
		<a href="view_messages.php"><i class="far fa-envelope"></i>Messages</a>
		<hr>
		<a href="view_upcoming_events.php"><i class="fas fa-business-time"></i>view upcoming events</a>
		<a href="#"><i class="far fa-eye"></i>view events</a>
		<hr>
		<a href="#"><i class="fas fa-street-view"></i>View Participants</a>
		
		<a href="originparticipants.php"><i class="fas fa-people-carry"></i>view origin participants</a>
		
		<hr>
		<div class="dropdown">
			<a href="#"><i class="fas fa-flag"></i>View results</a>
			<a class="dropdown-toggle" data-toggle="dropdown">
				<i class="fas fa-users"></i>view users
			</a>
			<div class="dropdown-menu">
				<a class="dropdown-item text-danger" href="view_registered_school.php">View register Schools</a>
				<a class="dropdown-item text-danger" href="view_register_students.php">View register Students</a>
				<a class="dropdown-item text-danger ml-2" href="view_registered_admins.php">View Admins</a>
			</div>
		</div>
		<hr>
		
		
	</div>