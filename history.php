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
							<h1>History</h1>
							<hr class="solid">
							<div class="long_paragraph">
								<p>Water. Earth. Fire. Air. There was a story about 
								the old days, how the four nations once lived in harmony. How everything 
								changed once the Fire Nation attacked. Only the Avatar mastered all four 
								elements. Only he could stop the ruthless firebenders. But when the world 
								needed him most, he disappeared. Nobody had seen him for a hundred years, 
								until Sokka and Katara found him, an airbender named Aang. The problem is, 
								this Avatar was still a kid, and even though his airbending skills were great, 
								he had a lot to learn before he was ready to save anyone. The Fire Nation would have 
								done anything to capture Aang before he mastered all four elements, so Aang Gang had to 
								keep him safe until he was ready to fulfill his destiny. Sokka thought Katara was
								crazy, but she believed Aang could save the world....and he did. To once again 
								bring balance to the world, Team Avatar created Four Nations Public Library.</p>
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