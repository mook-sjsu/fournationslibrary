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
				<h1 class="title_one">Services</h1>
				<img src="images/services_header.png" class="top_banner" alt="FNPL Services" />
				<div class="four_options">
					<div class="flex-container">
						<div><a href="bookbison.php"><img src="images/services_book.png" class="top_banner" alt="FNPL Book Bison" /></a></div>
						<div><a href="counseling.php"><img src="images/services_counseling.png" class="top_banner" alt="FNPL Counseling" /></a></div>
						<div><a href="immigrant.php"><img src="images/services_immigrant.png" class="top_banner" alt="FNPL Immigrant and Refugee Services" /></a></div>
						<div><a href="petcare.php"><img src="images/services_pet.png" class="top_banner" alt="FNPL Pet Care" /></a></div>
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