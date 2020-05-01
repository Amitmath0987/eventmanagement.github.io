<div class="tophead">
				<span class="menulines" onclick="openNav()">&#9776;</span>
				<div class="brandlogo">
					Admin panel
				</div>

				
				
				<div class="dropdown">
					<a class="dropdown-toggle text-white" data-toggle="dropdown">
						<i class="fas fa-user-friends"></i>participants by event
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item text-danger" href="view_collegemaking_participants.php">Collage Making</a>
						<a class="dropdown-item text-danger" href="view_postermaking_participants.php">Poster Making</a>
						<a class="dropdown-item text-danger" href="view_quiz_participants.php">Quiz</a>
						<a class="dropdown-item text-danger" href="view_netsavvy_participants.php">Net Savvy</a>
						<a class="dropdown-item text-danger" href="view_langaming_participants.php">LAN Gaming</a>
						<a class="dropdown-item text-danger" href="view_tshirtpainting_participants.php">T- Shirt Painting</a>
						<a class="dropdown-item text-danger" href="view_bestoutofwaste_participants.php">Best Out of Waste</a>
						<a class="dropdown-item text-danger" href="view_chess_participants.php">Chess</a>
						<a class="dropdown-item text-danger" href="view_badminton_participants.php">Badminton</a>
						<a class="dropdown-item text-danger" href="view_photobooth_participants.php">Photo Booth</a>
						<a class="dropdown-item text-danger" href="view_fireonkeyboard_participants.php">Fire on Keyboard</a>
						<a class="dropdown-item text-danger" href="view_rangoli_participants.php">Rangoli</a>
						<a class="dropdown-item text-danger" href="view_groupdance_participants.php">Group Dance</a>
						<a class="dropdown-item text-danger" href="view_extempore_participants.php">Extempore</a>
						<a class="dropdown-item text-danger" href="view_solodance_participants.php">Solo Dance</a>
						<a class="dropdown-item text-danger" href="view_stepup_participants.php">Step Up</a>
						<a class="dropdown-item text-danger" href="view_admadshow_participants.php">Ad Mad Show</a>
						<a class="dropdown-item text-danger" href="view_templerun_participants.php">Temple Run</a>
						<a class="dropdown-item text-danger" href="view_tugofwar_participants.php">Tug of War</a>
					</div>
				</div>
				<div class="dropdown">
					<a href="#" class="dropdown-toggle text-white" data-toggle="dropdown">
						Upload</a>
						<?php
						include('includes/modals/uploadresultmodal.php');
						?>
						
					<!-- result dropdown -->
					<div class="dropdown-menu">
						<a href="upload_origin_results.php" class="text-danger dropdown-item">Upload origin Results</a>
						<!-- <button class="btn btn-primary" data-target="#mymodal" data-toggle="modal">Signup</button> -->
						<a href="upload_rule_form.php" class="text-danger dropdown-item">Upload Rules</a>
				
					</div>
				</div>
				<a href="#"><button class="btn btn-danger">Reports</button></a>
				<div class="ml-lg-5">
					<a href="adminlogin.php"><i class="fas fa-sign-out-alt" style="color: #fff"></i><button class="btn btn-danger" type="submit">logout</button>
					</a>
				</div>
				
				
			</div>