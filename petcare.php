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
							<h1>Animal Care</h1>
							<hr class="solid">
							<div class="float_left">
								<img src="images/services_petcare.png" alt="Animal Care">
								<br>
								<h2>Save Our Animals & Stop Animal Cruelty</h2>
								<h3>FNPL provides the following services for animals:</h3>
								<ul>
									<li>Rehabilitation of Abused Animals</li>
									<li>Appropriate and Safe Rehoming (includes adoption)</li>
									<li>Shutting Down Animal Abuse Rings</li>
								</ul>
							</div>
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