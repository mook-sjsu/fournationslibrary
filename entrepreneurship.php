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
							<h1>Entrepreneurship</h1>
							<hr class="solid">
							<div class="float_left">
								<h2>Become A Business Owner</h2>
								<img src="images/event_tues.png" alt="Business 101">
								<br>
								<p><i>"My cabbages!"</i></p>
								<p><b>Description</b></p>
								<p>An Entrepreneur is a person who organizes and operates a 
								business or businesses, taking on greater than normal financial 
								risks in order to do so.</p>
								<p><b>When:</b> Every second Tuesday at 6</p>
								<p><b>Program Partner:</b> The Cabbage Man</p>
							</div>
							<br>
							<hr class="solid_thin">
							<p>For exact program dates see calendar <a href="events.php">here</a>.</p>
						</div>
						<div style="flex-grow: 1">
							<div class="side_menu">
								<ul>
  									<li><a href="games.php">Games</a></li>
 									<li><a href="arts.php">Arts & Innovation</a></li>
  									<li><a href="entrepreneurship.php">Entrepreneurship</a></li>
  									<li><a href="recreation.php">Recreation</a></li>
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