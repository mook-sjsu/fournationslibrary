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
							<h1>Book-Bison</h1>
							<hr class="solid">
							<div class="float_left">
								<img src="images/event_sun.png" alt="Book-bison">
								<h2>Appa Brings Books To You</h2>
								<p><b>Description</b></p>
								<p>Book-Bison is like a bookmobile but with Appa, the air bison.
								Because our location is far from many, Appa will bring books 
								to you and your community so you can too enjoy reading the 
								books you love.</p>
								<p><b>When:</b> Every Sunday 10am - 5pm</p>
								<p><b>Where:</b> Various locations (follow us on social media to find out where we're going next!)</p>
								<p><b>Program Partners:</b> Appa & Aang</p>
							</div>
							<br>
							<hr class="solid_thin">
							<p>For exact Book-Bison dates see calendar <a href="events.php">here</a>.</p>
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