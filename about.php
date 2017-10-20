
<html>
	<head>
		<title>ABOUT | D'Andr&eacute; Phillips </title>
		<link href="https://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,900" rel="stylesheet"> 
		<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="FontAwesome/css/font-awesome.min.css">
		<script src="Angular/angular.min.js"></script>
		<link rel="shortcut icon" href="Images/Favicon3.ico" type="image/x-icon" />
		<link rel="icon" href="Images/Favicon3.ico" type="image/x-icon">
		<link rel="stylesheet" href="AnimateCSS/animate.css">
		<script type="text/javascript" src="scripts/the-scripts.js"></script>
	</head>
	
	<body class="about-page">
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
				
				<div class="social-section">
					<h2 class="menu-header">Menu</h2>
					<div class="icon-section">
						<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div> <!-- Ends Div Class Icon Section -->
				</div> <!-- Ends Div Class Social Section -->

				<div class="col-md-4 menu-left-section">
					<img src="Images/brandinglight.png"><h4>D'Andr&eacute; <strong>PHILLIPS</strong></h4>
					<h2>Other Ventures</h2>
					<a href="#"><li>Website Build</li></a>
					<a href="#"><li>The Blog</li></a>
					<a href="#"><li>London Busman</li></a>
					<a href="#"><li>Photography</li></a>
				</div> <!-- Ends Column and Menu Left Section -->
				<div class="col-md-4">
					
				</div> <!-- Ends Column -->
				<div class="col-md-4 side-menu-items">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNavSlide()">&times;</a>
					<div class="main-links">
						<h2>Main Links</h2>
						<a href="index.php">Home</a>
						<a href="about.php">About</a>
						<a href="mywork.php">My Work</a>
						<a href="contact.php">Contact Me</a>
						<a href="hireme.php">Hire Me</a>
						<br>
					</div> <!-- Ends Div Class Main Links -->

				</div> <!-- Ends Div Class Column and Side Menu Items -->
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
		<div class="top-section" data-0p="background-color:rgba(0,0,0,0); margin-top:5vh;" data-5p="background-color:rgba(0,0,0,0); margin-top:0vh; padding-top:0px;" data-6p="background-color:rgba(0,0,0,1); margin-top:0vh; padding-top:10px;">
			<a href="index.php"><img src="Images/brandinglight.png" data-0p="max-width:100px; margin-left:0px; margin-right:0px; margin-top:0px;" data-5p="max-width:50px; margin-left:15px; margin-right:15px; margin-top:-5px;"><h4>D'Andr&eacute; <strong>PHILLIPS</strong></h4></a>
		</div><!-- Ends Div Class Top Section -->
		<div class="cover-section col-xs-11 col-sm-8 col-md-6 col-lg-4">
			<h1>Hello.</h1>
			<h2>The name's <strong>Phillips.</strong> D'Andr&eacute; <strong>Phillips.</strong></h2>
			<br>
			<br>
			<a class="front-cta" href="mywork.php">View My Work</a>
			<a class="front-cta" href="about.php">Meet me</a>
		</div><!-- Ends Div Class Cover Secton -->
	</div> <!-- Ends Div Class Container -->
</div> <!-- Ends Div Class Background Tint -->

<div class="row">
	<div class="full-page introduce">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-delay="1.5s">
				<div class="content-text">
					<h2 class="wow fadeInLeft" data-wow-delay="0.5s">By the way, I don't think we've been properly introduced.</h2>
					<h3 class="wow fadeInRight" data-wow-delay="1.0s">What's your name?</h3>
				</div>
			</div> <!-- Ends Column -->
			<div class="col-md-6 wow fadeInDown">
				<div class="content-text-right">
					<div ng-app="">
					<input class="name-input" type="text" ng-model="name" placeholder="Enter name here">
					<h2>Hello {{name}}.</h2>
					<br>
					<p>{{name}}, this is me trying out AngularJS, so please <strong>bear with me, okay?</strong></p>
										</div>
				</div> <!-- Ends Div Class Content Text Right -->
			</div> <!-- Ends Column -->
		</div> <!-- Ends Container -->
	</div> <!-- Ends Div Class Full Page, Introduce -->
</div> <!-- Ends Div Class Row -->

<div class="row">
	<div class="full-page about-me">
		<div class="container">
			<div class="col-md-6">
				<img class="wow fadeInLeft" src="Images/celebrate.jpg" data-wow-delay="1.5s">
			</div> <!-- Ends Column -->
			<div class="col-md-6 wow fadeInRight " data-wow-delay="2.0s">
				<div class="content-text fadeInRight" >
					<h2>Nice to meet you.</h2>
					<br>
					<h3>Hi, I'm D'Andr&eacute;, but you already knew that, didn't you?</h3>
					<hr>
					<p><strong>First things first,</strong> I'm not your typical Web Developer. As you can see this lovely image of me, the way I'm dressed doesn't scream "Computer Nerd!" And there's some things which are less obvious from this website, I've got quite a colourful personality - which - if you compare to the colours on this website, I'm clearly contradicting myself.</p>

					<p>The impact IT has had on my life didn't start with my Apprentice Developer role at FX Digital in 2016; it in fact, started before I could even talk. I grew up on Windows 95, glued to Microsoft Paint. Through my years of education, IT had always been my favoured subject. I made my first live website in 2008, which then also lead me to make my first website from scratch in 2009. I picked up an 'A' grade in IT GCSE, then went on to pick up 16 distinctions in my BTEC Level 3 course at City of Westminster College.</p>

					<p>So, the career ladder. My life changed when I got hired in March 2016 by FX Digital, that was the beginning of my career. From there, I was trained up on everything I needed to know about web development, at that point, my knowledge had completely vanished! It was the single greatest year in my employment history, that job had enabled me to possess a passion for the Web Development industry.</p>

					<p>Which sort of brings me to here, really. Writing this page. Hope you enjoyed this awkward bio.</p>
				</div> <!-- Ends Div Class Content Text -->
			</div> <!-- Ends Column -->
		</div> <!-- Ends Container -->
	</div> <!-- Ends Div Class Full Page, About Me -->
</div> <!-- Ends Div Class Row -->
<footer>
	<script src="WOW-master/dist/wow.min.js"></script>
	<script type="text/javascript" src="scripts/wow-js-init.js"></script>	
	<div id="footer-notification" class="footer-notification">
	<div class="container">
		<span>Please note, this website is still incomplete. By continuing, you acknowledge that some feautres of this site may not yet work.</span>
		<a href="javascript:void(0)" class="closeMsg" onclick="closeMsg()">Acknowledge & Dismiss</a>
	</div> <!-- Ends Div Class Container -->
	</div> <!-- Ends Div Class & ID Footer Notification -->
	<script type="text/javascript" src="Skrollr/skrollr.min.js"></script>
	<script type="text/javascript" src="scripts/skrollr-init.js"></script>

	<div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="Images/brandinglight.png"><span><h4>D'Andr&eacute; <strong>PHILLIPS</strong></h4>The Online Portfolio.</span>
					
				</div> <!-- Ends Column -->
				<div class="col-md-2">
					<h2>Main Links</h2>
					<a href="index.php"><li>Home</li></a>
					<a href="about.php"><li>About</li></a>
					<a href="mywork.php"><li>My Work</li></a>
					<a href="contact.php"><li>Contact Me</li></a>
					<a href="hireme.php"><li>Hire Me</li></a>
				</div> <!-- Ends Column -->
				<div class="col-md-2">
					<h2>Other Ventures</h2>
					<a href="#"><li>Website Build</li></a>
					<a href="#"><li>The Blog</li></a>
					<a href="#"><li>London Busman</li></a>
					<a href="#"><li>Photography</li></a>
				</div> <!-- Ends Column -->
				<div class="col-md-4">
					<h2>Social Media</h2>
					<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/ibvsmxn_/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<br>
					<span class="footnote-sp"> &copy;  <?php echo date("Y"); ?> Portfolio 4.0 by D'Andr&eacute; T Phillips </span>
				</div> <!-- Div Class Ends Column -->
			</div> <!-- Ends Div Class Row -->
			<div class="row">
				<!-- <span class="footnote-sp"> &copy;  <?php echo date("Y"); ?> Portfolio 4.0 by D'Andr&eacute; T Phillips </span> -->
			</div> <!-- Ends Div Class Row -->
		</div> <!-- Ends Div Class Container -->
	</div> <!-- Ends Div Class Footer Section -->
</footer>

</body>
</html> 

