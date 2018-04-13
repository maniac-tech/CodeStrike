<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	<div class="card">
		<img src="team2.jpg" alt="John" style="width:100%">
		<h1>John Doe</h1>
		<p class="title">CEO & Founder, Example</p>
		<p>Harvard University</p>
		<div style="margin: 24px 0;">
			<a href="#"><i class="fa fa-dribbble"></i></a> 
			<a href="#"><i class="fa fa-twitter"></i></a>  
			<a href="#"><i class="fa fa-linkedin"></i></a>  
			<a href="#"><i class="fa fa-facebook"></i></a> 
		</div>
		<p><button>Contact</button></p>
	</div>	

	<div class="card">
		<img src="team2.jpg" alt="John" style="width:100%">
		<h1>John Doe</h1>
		<p class="title">CEO & Founder, Example</p>
		<p>Harvard University</p>
		<div style="margin: 24px 0;">
			<a href="#"><i class="fa fa-dribbble"></i></a> 
			<a href="#"><i class="fa fa-twitter"></i></a>  
			<a href="#"><i class="fa fa-linkedin"></i></a>  
			<a href="#"><i class="fa fa-facebook"></i></a> 
		</div>
		<p><button>Contact</button></p>
	</div>	

	<div class="card">
		<img src="team2.jpg" alt="John" style="width:100%">
		<h1>John Doe</h1>
		<p class="title">CEO & Founder, Example</p>
		<p>Harvard University</p>
		<div style="margin: 24px 0;">
			<a href="#"><i class="fa fa-dribbble"></i></a> 
			<a href="#"><i class="fa fa-twitter"></i></a>  
			<a href="#"><i class="fa fa-linkedin"></i></a>  
			<a href="#"><i class="fa fa-facebook"></i></a> 
		</div>
		<p><button>Contact</button></p>
	</div>	
</div>