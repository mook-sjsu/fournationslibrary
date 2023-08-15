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
							<h1>Games</h1>
							<hr class="solid">
							<div class="float_left">
								<h2>Play Pai Sho with Uncle Iroh!</h2>
								<img src="images/event_mon.png" alt="Game Night">
								<br>
								<p><i>"I always tried to tell you that Pai Sho is more than just a game."</i></p>
								<p><b>Description</b></p>
								<p>Pai Sho is a two-player game dating back to the era of Raava.
								It is a game of both strategy and chance, with each culture having
								developed its own rules and variations of the game.</p>
								<p><b>When:</b> Every Monday at 7p</p>
								<p><b>Program Partner:</b> Uncle Iroh</p>
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