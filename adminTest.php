<?php 
	require 'imacConnect.php';
	session_start();
	if(!isset($_SESSION['userId'])){
		header('Location:login.php');
	}
 ?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/adminTest.css">
		<link rel="stylesheet" href="css/data.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="navbar">
			<p>Welcome, maniac-tech</p>
			<form action="logout.php" method="POST">
				<input type="submit" name="Logout" value="Logout">
			</form>
		</div>
		<div id="sidebar">
			<a href="http://www.codestrike.in">
				<img src="img/logo.png" alt="">
			</a>
			<ul>
				<li title="overview" onclick="loadPage(this.title)">
					<p>Overview</p>
				</li>
				<li title="data" onclick="loadPage(this.title)">
					<p>iMac</p>
				</li>
			</ul>
		</div>
		<div id="body">
			<?php 
				require 'overview.php';
			 ?>
		</div>
	</body>
	<script>
		function loadPage(loadFile){
			$('#body').load(loadFile+".php");
		}
		function loadContent(loadData){
			$('#content').load(loadData+".php");
		}
	</script>

</html>