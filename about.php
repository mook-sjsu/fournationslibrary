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
				<h1>About FNLP</h1>
				<p>Click on the pages below to learn more about FNLP!</p>
				<div class="four_options">
					<div class="flex-container">
						<div><a href="hours.php"><img src="images/about_hours.png" class="top_banner" alt="FNPL Hours and Locations" /></a></div>
						<div><a href="history.php"><img src="images/about_history.png" class="top_banner" alt="FNPL History" /></a></div>
						<div><a href="mission.php"><img src="images/about_mission.png" class="top_banner" alt="FNPL Mission and Policies" /></a></div>
						<div><a href="staff.php"><img src="images/about_staff.png" class="top_banner" alt="FNPL Staff" /></a></div>
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