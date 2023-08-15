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
				<h1 class="title_one">Programs</h1>
				<img src="images/programs_header.png" class="top_banner" alt="FNPL Programs" />
				<div class="four_options">
					<div class="flex-container">
						<div><a href="games.php"><img src="images/programs_games.png" class="top_banner" alt="FNPL Games" /></a></div>
						<div><a href="arts.php"><img src="images/about_art.png" class="top_banner" alt="FNPL Arts and Innovation" /></a></div>
						<div><a href="entrepreneurship.php"><img src="images/programs_e.png" class="top_banner" alt="FNPL Entrepreneurship" /></a></div>
						<div><a href="recreation.php"><img src="images/about_recreation.png" class="top_banner" alt="FNPL Recreation" /></a></div>
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