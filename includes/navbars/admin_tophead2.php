<style>
.mainnav
{
background-color: #8c221b!important;
}
.openbtn
{
	margin-left: 16px;
}
</style>
<nav class="mainnav navbar navbar-expand-lg navbar-dark" id="main_navbar">
	<div class="openbtn">
		<span class="menulines" onclick="openNav()">&#9776;</span>
	</div>
	<a class="navbar-brand" href="#">Admin panel</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav text-center ml-auto">
			<!-- <li class="nav-item">
							<span class="menulines" onclick="openNav()">&#9776;</span>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="admindashboard.php">Home<span class="sr-only"></span></a>
			</li>
			<li class="nav-item dropdown">
				<a class=" nav-link dropdown-toggle text-white" data-toggle="dropdown">
					<i class="fas fa-user-friends"></i>participants by event
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item text-danger" href="view_collegemaking_participants.php">Collage Making</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_postermaking_participants.php">Poster Making</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_quiz_participants.php">Quiz</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_netsavvy_participants.php">Net Savvy</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_langaming_participants.php">LAN Gaming</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_tshirtpainting_participants.php">T- Shirt Painting</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_bestoutofwaste_participants.php">Best Out of Waste</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_chess_participants.php">Chess</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_badminton_participants.php">Badminton</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_photobooth_participants.php">Photo Booth</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_fireonkeyboard_participants.php">Fire on Keyboard</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_rangoli_participants.php">Rangoli</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_groupdance_participants.php">Group Dance</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_extempore_participants.php">Extempore</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_solodance_participants.php">Solo Dance</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_stepup_participants.php">Step Up</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_admadshow_participants.php">Ad Mad Show</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_templerun_participants.php">Temple Run</a>
					<div class="dropdown-divider text-danger"></div>
					<a class="dropdown-item text-danger" href="view_tugofwar_participants.php">Tug of War</a>
				</div>
			</li>
<!-- <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle "data-toggle="dropdown">Reports</a>
	<ul class="dropdown-menu">

	
	
	<li><a class="dropdown-item" href="">view participants</a></li>
	<div class="dropdown-divider"></div>
	<li><a class="dropdown-item" href="">view upcoming events </a></li>
	<div class="dropdown-divider"></div>
	<li class="dropdown"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown">view user</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="">School Users</a></li>
			<li><a class="dropdown-item" href="">Student Users</a></li>
			<li><a class="dropdown-item" href="">Admin Users</a></li>
		</ul>
	</li>
</ul>
</li> -->
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle "data-toggle="dropdown">Reports</a>
	<ul class="dropdown-menu">

	
	
	<li><a class="dropdown-item text-danger" href="view_register_students.php">Student Users</a></li>
	<div class="dropdown-divider text-danger"></div>
	<li><a class="dropdown-item text-danger" href="view_registered_school.php">School Users</a></li>
	<div class="dropdown-divider"></div>
	<li><a class="dropdown-item text-danger" href="view_registered_admins.php">Admin Users</a></li>
	<div class="dropdown-divider text-danger"></div>
	<li><a class="dropdown-item text-danger" href="view_upcoming_events.php">Upcoming Events </a></li>
	<div class="dropdown-divider text-danger"></div>
	<li><a class="dropdown-item text-danger" href="view_permission.php">Permission Letters</a></li>
	<div class="dropdown-divider text-danger"></div>
	<li><a class="dropdown-item text-danger" href="originparticipants.php">View Origin Participants</a></li>
	<div class="dropdown-divider text-danger"></div>
	<li><a class="dropdown-item text-danger" href="">View Participants</a></li>
	<div class="dropdown-divider text-danger"></div>
	<li><a class="dropdown-item text-danger" href="view_ad_result.php">View Results</a></li>

	</ul>
</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle "data-toggle="dropdown" href="#">Upload</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item text-danger" href="upload_origin_results.php">Upload origin Results</a></li>
					<div class="dropdown-divider"></div>
					<li><a class=" dropdown-item text-danger" href="upload_rule_form.php">Upload Rules</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="adminlogin_form.php"><button class="btn btn-light" type="submit">logout</button>
				</a>
			</li>
		</ul>
    </div>
</nav>