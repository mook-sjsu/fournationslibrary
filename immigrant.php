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
							<h1>Immigrant and Refugee Services</h1>
							<hr class="solid">
							<h2>Your One-Stop-Shop for Your Needs</h2>
							<div class="float_left">
								<h3>FNPL provides the following services for those displaced by the war:</h3>
								<ul>
									<li>Temporary Shelter</li>
									<li>Supplies (clothes, toiletries, bedding, etc.)</li>
									<li>Food</li>
									<li>Transportation</li>
									<li>Official Documentation (Identification Cards, Passports, etc.)</li>
								</ul>
								<hr class="solid_thin">
								<h2>Special Events</h2>
								<img src="images/event_sat.png" alt="Donation Drive">
								<br>
								<h3>Want to help? Donate!</h3>
								<p><b>Description</b></p>
								<p>Come to our monthly donation drive to donate clothes, food,
								and other supplies to help immigrants and refugees that were affected
								by the war. Your gift is much appreciated. </p>
								<p><b>When:</b> Every First Saturday 10am - 5pm</p>
								<p><b>Program Partners:</b> Team Avatar</p>
							</div>
							<br>
							<hr class="solid_thin">
							<p>For exact Donation Drive dates see calendar <a href="events.php">here</a>.</p>
						</div>
						<div style="flex-grow: 1">
							<div class="side_menu">
								<ul>
  									<li><a href="bookbison.php">Book-Bison</a></li>
 									<li><a href="counseling.php">Counseling</a></li>
  									<li><a href="immigrant.php">Immigrant & Refugee Services</a></li>
  									<li><a href="petcare.php">Animal Care</a></li>
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