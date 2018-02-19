<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<meta name="theme-color" content="#2196F3">
	<title>CodeStrike</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" /> <!--Tab Icon-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<!-- Sweetalert stylesheet -->
	<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
	<!-- Sweetalert script src -->
	<script src='https://cdn.jsdelivr.net/npm/sweetalert2@7.7.0/dist/sweetalert2.all.min.js'></script>
	<!-- <script  src="js/sweetalert.js"></script> -->
</head>
<body>
	<!-- splash overlay -->
	<!-- <div id="overlay">
     <img src="img/loading.gif" alt="Loading" width="100%" height="100%" />
	</div> -->
	<!-- Pre Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>

	<!--Navigation-->
	<div class="navbar-fixed">
		<nav class="purple" role="navigation">
			<div class="container">
				<div class="nav-wrapper">
					<a href="index.php" id="logo-container" class="brand-logo">CODESTRIKE</a>

					<ul class="right hide-on-med-and-down">
						<li><a href="#intro">About us</a></li>
						<li><a href="#work">Events</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#contact">Contact</a></li>

					</ul>

					<ul id="nav-mobile" class="side-nav">
						<li><a href="#intro">About us</a></li>
						<li><a href="#work">Events</a></li>
						<li><a href="#team">Team</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>

					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	</div>


	<!--Hero-->
	<!-- <div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<h1 class="text_h center header cd-headline letters type">
				<span></span> 
				<span class="cd-words-wrapper waiting">
					<b class="is-visible">CODESTRIKE</b>
					<b>CODESTRIKE</b>
					<b>CODESTRIKE</b>
				</span>
			</h1>
		</div>
	</div> -->

	<!--Intro and service-->
	<!-- added class main from home.css for background -->
	<div id="intro" class="section scrollspy main" >
		<div class="container">
			<div class="row">
				<div  class="col s12">
					<h2 class="center header text_h2"><span class="span_h2"> Codestrike </span>is a Student run community at Atharva College of Engineering. They host contests, trainings and events for programmers around the world.</h2>
				</div>
				<div  class="col s12 m4 l4">
					<div class="center promo promo-example">
						<i class="mdi-image-flash-on"></i>
						<h5 class="promo-caption">AIM</h5>
						<p>To create a global community that fosters learning and encourages friendly competitions. Based in India, they take extra steps to encourage the programming culture here. They are co-working with colleges to promote programming and meetups.
						</p>
					</div>
				</div>
				<div class="col s12 m4 l4">
					<div class="center promo promo-example">
						<i class="mdi-social-group"></i>
						<h5 class="promo-caption">INITIATIVE</h5>
						<p>
							CodeStrike is a CodeChef Campus Chapter of Atharva College of Engineering.This initiative was taken on 27th January 2014, to spread the coding string. 
						</p>
					</div>
				</div>
				<div class="col s12 m4 l4">
					<div class="center promo promo-example">
						<i class="mdi-hardware-desktop-windows"></i>
						<h5 class="promo-caption">CODECHEF</h5>
						<p>A not-for-profit educational initiative by Directi, an Indian software company. It is a global programming community that fosters learning and friendly competition, built on top of the world’s largest competitive programming platform.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--team-->
	<div class="section scrollspy" id="team">
		<div class="container">
			<h2 class = "topic"	>TEAM</h2>
			<div class="row">
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="img/team/hod.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Prof. Mahendra Patil
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://www.facebook.com/mahendra.s.patil.5?fref=ts" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="" target="_blank">
									<i class="fa fa-twitter-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="img/team/tejas.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Tejas Nanaware
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://www.facebook.com/TejasNanaware" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://github.com/Tejas-Nanaware" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://plus.google.com/+TejasNanaware" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://in.linkedin.com/in/tejasnanaware" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="img/team/ravi.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Ravi Chandak
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://www.facebook.com/ravichandak1996" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://github.com/Ravi627" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://plus.google.com/+ravichandak627" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="img/team/pavan.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Pavankumar Kamath
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://m.facebook.com/pavankumar.kamath?ref=bookmarks" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://github.com/pavankamath1406" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://plus.google.com/117059402327542528472" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://www.linkedin.com/mwlite/me/edit" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="https://media-exp2.licdn.com/mpr/mpr/shrinknp_400_400/AAMAAwDuAAgAAQAAAAAAABAHAAAAJDhlZmYxOTNjLWRlNTQtNDZhMy1hMWM3LWEyZWNiNDlhMjIzMA.bin">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Harshit Shetty
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://www.facebook.com/profile.php?id=100009449610853" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://github.com/ShettyHarshit" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+HarshitShetty5" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/harshit-shetty-4846b8127/" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="img/team/burhanuddin.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Burhanuddin Rampurawala
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://www.facebook.com/burhanuddinzrampurawala" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://www.github.com/burhanuddinrampurawala" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://plus.google.com/u/1/109763198179383755792" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/burhanuddin-rampurawala-885882148/" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m3">
					<div class="card card-avatar" style="height:310px;">
						<div class="waves-effect waves-block waves-light">
							<img class="activator" src="img/team/ishani.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Ishani Parkar
								<br/>
							</span>
							<p>
								<a class="blue-text text-lighten-2" href="https://m.facebook.com/ishani.parkar?ref=bookmarks" target="_blank">
									<i class="fa fa-facebook-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="" target="_blank">
									<i class="fa fa-github-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="https://plus.google.com/+IshaniParkar" target="_blank">
									<i class="fa fa-google-plus-square"></i>
								</a>
								<a class="blue-text text-lighten-2" href="" target="_blank">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--float-->
<!-- 	<form action="team.php" class="inline">
		<div class="w3-container">
			<button class="w3-btn-block w3-teal">Meet the Prime movers!</button>
		</div>
	</form>
 -->
	<!--Parallax-->
	<!-- <div class="parallax-container">
		<div class="parallax"><img src="img/2.jpg"></div>
	</div> -->

	<!--work-->
	<div class="section scrollspy" id="work">
		<div class="container">
			<h2 class = "topic">Events and Projects </h2>
			<div class="row">
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								Induction 2017
								<i class="mdi-navigation-more-vert right"></i>
							</span>
							<p><a href="Events/induction_2017.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Induction 2017<i class="mdi-navigation-close right"></i></span>
							<p>
								CodeStrike organised an induction for the first year students on 7th September 2017.
							</p>
							<p> 
								Students attended : 240	
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">GIT Workshop <i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="Events/gitworkshop.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">GIT Workshop<i class="mdi-navigation-close right"></i></span>
							<p>
								Conducted on July 17, 2017

							</p>

							<p> Students attended : 34</p>
							<!-- <p> Certificates issued : 34</p> -->
						</div>
					</div>
				</div>
						
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								Chatbot
								<i class="mdi-navigation-more-vert right"></i>
							</span>
							<p><a href="Events/chatbot.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Chatbot<i class="mdi-navigation-close right"></i></span>
							<p>
								CodeStrike organized a workshop in ChatBots and its Integrations on 31st March , 2017.
							</p>
							<p> 
								Students attended : 35	
							</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								Inception
								<i class="mdi-navigation-more-vert right"></i>
							</span>
							<p><a href="Events/inception.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Inception<i class="mdi-navigation-close right"></i></span>
							<p>
								
							</p>
							<p> 
							</p>
						</div>
					</div>
				</div>

				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								Interview 2017
								<i class="mdi-navigation-more-vert right"></i>
							</span>
							<p><a href="Events/interview2017.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Interview 2017<i class="mdi-navigation-close right"></i></span>
							<p>
								Will be Conducted on 16th February 2017
							</p>
							<p> Interested students of ACE register at the below link.
								Registration link: <a href="Register2017.php" title="">Register Here</a>
							</p>
						</div>
					</div>
				</div>

			
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">
								Coding Workshop
								<i class="mdi-navigation-more-vert right"></i>
							</span>
							<p><a href="Events/codingworkshop.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Coding Workshop<i class="mdi-navigation-close right"></i></span>
							<p>
								Conducted on April 1, 2014
							</p>
							<p> Students attended : 35</p>
							<!-- <p> Certificates issued : 35</p> -->                 
						</div>
					</div>
				</div>

				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">C Programming<i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="Events/cprogramming.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">C Programming<i class="mdi-navigation-close right"></i></span>
							<p>
								Conducted on September 1, 2014

							</p>

							<p> Students attended : 33</p>
							<!-- <p> Certificates issued : 33</p> -->
						</div>
					</div>
				</div>

				
				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Java Workshop <i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="Events/javaworkshop.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Java Workshop<i class="mdi-navigation-close right"></i></span>         
							<p>
								Conducted on September 6,2014

							</p>

							<p> Students attended : 38</p>
							<p> Certificates issued : 38</p>
						</div>
					</div>
				</div>

				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Arduino Workshop <i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="Events/arduinoworkshop.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Arduino Workshop<i class="mdi-navigation-close right"></i></span>
							<p>
								Conducted on September 9, 2015
							</p>
							<p> Students attended : 12</p>
							<p> Certificates issued : 12</p>
						</div>
					</div>
				</div>

				<div class="col s12 m4 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/codestrikeLogo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Python Workshop<i class="mdi-navigation-more-vert right"></i></span>
							<p><a href="Events/pythonworkshop.php">More Details</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Python Workshop<i class="mdi-navigation-close right"></i></span>                  <p>
							Conducted on September 28, 2015
						</p>
						<p> Students attended : 30</p>
						<p> Certificates issued : 30</p>
					</div>
				</div>
			</div>
		</div>
	</div>



<!--Footer-->
<?php 
require 'footer.php';
?>

<!--  Scripts-->
<script async src="min/plugin-min.js"></script>
<script async src="min/custom-min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {


		swal({
			title: 'CodeChef Certified Data Structure & Algorithms Programme (CCDSAP)',
			text: 'Exam Date: 18 March 2018 ',
			html:
			'<p>'+'<a target="_blank" href="https://www.codechef.com/certification/about"><button style="  border-width: 0; padding: 15px; outline: none; border-radius: 2px; box-shadow: 0 1px 4px rgba(0, 0, 0, .6); background-color: #2ecc71; color: #ecf0f1;" return false;">More Details</button></a>',
			imageUrl: 'https://s3.amazonaws.com/codechef_shared/sites/all/themes/abessive/logo.png',
			imageWidth: 405,
			imageHeight: 157,
			imageAlt: 'Custom image',
			showCloseButton: true,
			showConfirmButton: false,
			animation: false,
			timer: 15000

		}).then((result) => {
  			if (result.dismiss === 'timer') {
				swal.close()
			}
		});
	});

</script>


</body>

<!-- CSS  -->
<link  href="min/plugin-min.css" type="text/css" rel="stylesheet">
<link  href="min/custom-min.css" type="text/css" rel="stylesheet" >
<link  href="home.css" type="text/css" rel="stylesheet" >

<!-- float -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link async rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-47253454-2', 'auto');
	ga('send', 'pageview');
</script>
</html>
