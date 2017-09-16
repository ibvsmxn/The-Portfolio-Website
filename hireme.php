<html>
	<head>
		<title>HIRE ME | D'Andr&eacute; Phillips </title>
		<link href="https://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,900" rel="stylesheet"> 
		<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
		<link rel="shortcut icon" href="/Images/Favicon3.ico" type="image/x-icon" />
		<link rel="icon" href="Images/Favicon3.ico" type="image/x-icon">
	</head>
	
	<body class="hire-me-page">
	<div class="background-div">
	</div> <!-- Ends Div Background Div -->
	<div class="background-tint">
	<header>
		<nav>
			<div class="menu-toggler" onclick="openNavSlide()">
				<ul>
					<li class="menu-bar-decoration"></li>
					<li class="menu-bar-decoration"></li>
					<li class="menu-bar-decoration"></li>
				</ul>
				<div class="open-prompt">
					<!-- <span>Click to open</span> -->
				</div> <!-- Ends Div Class Open Prompt -->
			</div><!-- Ends Div Class Menu Toggler -->
			<div id="mySidenav" class="sidenav">
				<div class="menu-overlay">
				</div><!-- Ends Div Class Menu Overlay -->
				<a href="javascript:void(0)" class="closebtn" onclick="closeNavSlide()">&times;</a>
				<div class="side-menu-items">
					<h2>Menu</h2>
					<a href="index.php">Home</a>
					<a href="about.php">About</a>
					<a href="mywork.php">My Work</a>
					<a href="contact.php">Contact Me</a>
					<a href="hireme.php">Hire Me</a>
					<hr>
					<!-- <a href="#">Website Build</a> -->
				</div><!-- Ends Div Class Side Menu Items -->
				<div class="footnotes">
					<span class="footnote-sp"> &copy;  <?php echo date("Y"); ?> Portfolio 4.0 by D'Andr&eacute; T Phillips </span>
				</div><!-- Ends Div Class Footnotes -->
			</div><!-- Ends Div Class & ID Side Nav -->
		</nav>
	</header>
	<div id="splash-screen">
		<div class="splash-screen-content">
			<img src="Images/brandinglight.png"><h4>D'Andr&eacute; <strong>PHILLIPS</strong></h4>
			<h5>The Portfolio.</h5>
			<br>
			<i class="fa fa-circle-o-notch" aria-hidden="true"></i>
		</div> <!-- Ends Div Class Splash Screen Content -->
	</div><!-- Ends Div ID Splash Screen -->
	<div class="container">
		<div class="top-section">
			<a href="index.php"><img src="Images/brandinglight.png"><h4>D'Andr&eacute; <strong>PHILLIPS</strong></h4></a>
		</div><!-- Ends Div Class Top Section -->
		<div class="cover-section col-xs-11 col-sm-8 col-md-6 col-lg-4">
			<h1><strong>Hire </strong>me.</h1>
			<h2>I won't disappoint.</h2>
			<br>
			<br>
			<a class="front-cta" href="mywork.php">View My Work</a>
			<a class="front-cta" href="about.php">Meet me</a>
		</div><!-- Ends Div Class Cover Secton -->
	</div> <!-- Ends Div Class Container -->
</div> <!-- Ends Div Class Background Tint -->
<div id="modal-background">
</div><!-- Ends Div ID Modal Background -->

<div id="download-window" class="download-window">
	<div class="download-window-tint">
	</div><!-- Ends Div Class Background Window Tint -->
	<div class="download-window-content">
		<a href="javascript:void(0)" class="closebtn" onclick="closeDownloadWindow()">&times;</a>
		<h2>Download Curriculum Vitae</h2>
		<h3>In what format would you like to download it?</h3>
		<ul>
			<li><a href="Downloads/Curriculum Vitae 2017 3.2.pdf">PDF</a></li>
			<li><a href="Downloads/Curriculum Vitae 2017 3.2.docx">Microsoft Word</a></li>
		</ul>
	</div><!-- Ends Div Class Download Window Content -->
</div><!-- Ends Class & ID Download Window -->

<div class="row">
	<div class="quarter-page cv-section">
		<div class="container">
			<div class="col-md-12">
				<h2>For the Employers</h2>
				<br>
				<a class="front-cta" onclick="openDownloadWindow()" href="#" >Download my Curriculum Vitae</a>
			</div> <!-- Ends Column -->
		</div> <!-- Ends Container -->
	</div> <!-- Ends Div Class Quarter Page, CV Section -->
</div> <!-- Ends Div Class Row -->
<footer>	
	<div id="footer-notification" class="footer-notification">
	<div class="container">
		<span>Please note, this website is still incomplete. By continuing, you acknowledge that some feautres of this site may not yet work.</span>
		<a href="javascript:void(0)" class="closeMsg" onclick="closeMsg()">Acknowledge & Dismiss</a>
	</div> <!-- Ends Div Class Container -->
	</div> <!-- Ends Div Class & ID Footer Notification -->
	<script type="text/javascript" src="scripts/the-scripts.js"></script>
</footer>

</body>
</html> 

