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
							<h1>Counseling</h1>
							<hr class="solid">
							<h2>Conflict Resolution with Avatar Aang</h2>
							<div class="float_left">
								<h3>Seek for advice, a listening ear, or mediator to help solve your conflicts:</h3>
								<img src="images/services_conflict.png" alt="Meditation">
								<h4>Avatar Aang has experience in:</h4>
								<ul>
									<li>Forgiving Others & Self</li>
									<li>Toxic & Abusive Relationships</li>
									<li>Anger & Depression</li>
									<li>Abandonment Issues</li>
									<li>One-Sided Love</li>
									<li>Self-Esteem Issues & Feelings of Inadequacy</li>
								</ul>
								<br>
								<hr class="solid_thin">
								<h2>Special Events</h2>
								<img src="images/event_wed.png" alt="Meditation">
								<br>
								<h3>Focus on Your Mental Health</h3>
								<p><b>Description</b></p>
								<p>Meditation is a practice that involves focusing or clearing your 
								mind using a combination of mental and physical techniques. Depending 
								on the type of meditation you choose, you can meditate to relax, reduce 
								anxiety and stress, and more.</p>
								<p><b>When:</b> Every Wednesday 5pm</p>
								<p><b>Program Partners:</b> Gutu Pathik</p>
							</div>
							<br>
							<hr class="solid_thin">
							<p>For exact Meditation dates see calendar <a href="events.php">here</a>.</p>
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