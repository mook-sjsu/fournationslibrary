<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Four Nations Public Library</title>
		<meta name="viewport" content="initial-scale=1.0,width=device-width" />
		<link rel="stylesheet" href="print.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="grid-container">
			<div class="item1"> <!-- Header -->
				<?php include 'header.php';?>
			</div>
			<div class="item2"> <!-- Navigation Bar/Menu -->
				<?php include 'nav.php';?>
			</div>
			<div class="item3"> <!-- Main Content-->
				<div class="side_menu_flex">
					<div class="flex-container">
						<div style="flex-grow: 8">
							<h1>Hours and Locations</h1>
							<hr class="solid">
							<div class="flex-container-1">
								<div>
									<img src="images/location_1.png" alt="Ba Sing Se">
									<h2>Upper Ring - Ba Sing Se</h2>
									<p><b>Hours: Mon-Fri; 1pm - 9pm</b></p>
								</div>
								<div>
									<img src="images/location_2.png" alt="New Location 1">
									<h2>Coming Soon!</h2>
									<p><b>Hours: TBD</b></p>
								</div>
								<div>
									<img src="images/location_2.png" alt="New Location 2">
									<h2>Coming Soon!</h2>
									<p><b>Hours: TBD</b></p>
								</div>
							</div>						
						</div>
						<div style="flex-grow: 1">
							<div class="side_menu">
								<ul>
  									<li><a href="hours.php">Hours & Locations</a></li>
 									<li><a href="history.php">History</a></li>
  									<li><a href="mission.php">Mission & Policies</a></li>
  									<li><a href="staff.php">Staff</a></li>
								</ul>
							</div>
						</div>					
					</div>
				</div>
			</div>
			<div class="item4"> <!-- Footer -->
				<?php include 'footer.php';?>
			</div>
			<div class="item5">
				<p>Copyright &copy; 2023, Kelela Moo SJSU MLIS Candidate. All rights reserved.</p>
			</div>
		</div>
	</body>
</html>