
<!DOCTYPE html>
<html>
	<head>
		<title>Add upcoming events</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- animate css link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

		<!-- javascript UI style link -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

		<!-- jquery timepicker style cdn -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">

		
	</head>
	<body>
		<div class="container">
			<div class="formmain-div">
				<div class="heading text-center text-white text-uppercase"><h4 class="animated heartBeat">add upcoming events</h4></div>
				<form action="upcomingevent_submit.php" method="post" class="needs validation" enctype="multipart/form-data">
					<div class="form-group">
						<label class="my-3">event image</label>
						<input type="file" name="file" value="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Event name</label>
						<input type="text" name="eventname" placeholder="Enter event name" value=""  class="form-control text-uppercase" required>
					</div>
				
					<div class="form-group">
						<label>venue</label>
						<input type="text" name="venue" placeholder="Enter venue" value="" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="text" name="date" id="datepicker" value="" placeholder="select date" class="form-control" required >
					</div>

					<div class="form-group">
						<label>Time</label>
						<input type="text" name="time" id="timepicker" value="" placeholder="select time" class="form-control" required >
					</div>
					<button type="submit" name="submit" class="btn btn-danger">Submit</button>
					
				</form>
				
			</div>
		</div>
		
		
		
  <!-- <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
  integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
  crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<!-- javascript main link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- javascript UI link -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- jquery timepicker main cdn -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>

<!-- jquery timepicker cdn -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js" type="text/javascript"></script>
		<Script>
			$(document).ready(function(){
				$('#datepicker').datepicker({
					dateFormat:"dd-mm-yy",
					changeMonth:true,
					changeYear:true
				});
			})

		</Script>

		<Script>
			$(document).ready(function(){
				$('#timepicker').timepicker({
				interval:15
				});
			})

		</Script>

	</body>
</html>