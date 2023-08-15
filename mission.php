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
							<h1>Mission and Policies</h1>
							<hr class="solid">
							<h2>Mission</h2>
							<p>Provide knowledge and promote unity to the four nations through 
							library and information services and the profession of librarianship.</p>
							<h2>Policies</h2>
							<div class="long_paragraph">
								<p>The principles of this Code are expressed in broad statements to guide ethical decision making. 
								These statements provide a framework; they cannot and do not dictate conduct to cover particular situations.</p>
							</div>
							<ol>
								<li>We provide the highest level of service to all library users through appropriate and usefully organized resources; equitable service policies; equitable access; and accurate, unbiased, and courteous responses to all requests.</li>
								<li>We uphold the principles of intellectual freedom and resist all efforts to censor library resources.</li>
								<li>We protect each library user's right to privacy and confidentiality with respect to information sought or received and resources consulted, borrowed, acquired or transmitted.</li>
								<li>We respect intellectual property rights and advocate balance between the interests of information users and rights holders.</li>
								<li>We treat co-workers and other colleagues with respect, fairness, and good faith, and advocate conditions of employment that safeguard the rights and welfare of all employees of our institutions.</li>
								<li>We do not advance private interests at the expense of library users, colleagues, or our employing institutions.</li>
								<li>We distinguish between our personal convictions and professional duties and do not allow our personal beliefs to interfere with fair representation of the aims of our institutions or the provision of access to their information resources.</li>
								<li>We strive for excellence in the profession by maintaining and enhancing our own knowledge and skills, by encouraging the professional development of co-workers, and by fostering the aspirations of potential members of the profession.</li>
								<li>We affirm the inherent dignity and rights of every person. We work to recognize and dismantle systemic and individual biases; to confront inequity and oppression; to enhance diversity and inclusion; and to advance racial and social justice in our libraries, communities, profession, and associations through awareness, advocacy, education, collaboration, services, and allocation of resources and spaces.</li>
							</ol>
							<p>From the American Library Association Code of Ethics.</p>
							<p><i>Find full FNPL Policies <a href="https://www.ala.org/tools/ethics">here</a>.</i></p>
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