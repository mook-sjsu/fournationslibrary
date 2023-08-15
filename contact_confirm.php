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
				<h1>Contact</h1>
				<p>Check out all the ways below to contact us or to keep in touch!</p>
				<div class="flex-container-1">
					<div>
						<img src="images/icon_phone.png" alt="Phone Number">
						<h2>Phone</h2>
						<h3>Call Us At:</h3>
						<p><b>1-800-123-4567</b></p>
					</div>
					<div>
						<img src="images/icon_address.png" alt="Address">
						<h2>Address</h2>
						<h3>Send Mail To:</h3>
						<p><b>Four Nations Public Library</b></p>
						<p>Upper Ring, Ba Sing Se</p>
						<p>Earth Kingdom, 12345</p>
					</div>
					<div>
						<img src="images/icon_email.png" alt="Email">
						<h2>Email</h2>
						<h3>Send E-mail To:</h3>
						<p><b>fournationslibrary@teamavatar.com</b></p>
					</div>
				</div>
				<hr class="solid">
				<h2>Keep in touch!</h2>	
				<form>
 					<div class="container">
   		 				<h3>Subscribe to our Newsletter</h3>
    					<p>Keep up to date with Four Nations Public Library by signing up for our
    					monthly email newsletter!<br>Be the first to know about library announcements, 
    					new additions to the collection, upcoming events and services.</p>
 					</div>
 					<div class="container" style="background-color:white">
   						<h4>Form submitted. Thank you for subscribing!</h4>
  					</div>
				</form>
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