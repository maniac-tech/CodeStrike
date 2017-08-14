<?php 
	require 'imacConnect.php';
 ?>
<html>
	<head>
		<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="navbar">
			<p>CodeStrike</p>
		</div>
		<div id="sidebar">
			<ul>
				<li title="overview" onclick="loadPage(this.title)">
				<p>Overview</p>
				</li>
				<li title="data" onclick="loadPage(this.title)">
					<p>iMac</p>
				</li>
				<li>
					<a href="">Git</a>
				</li>
				<li>
					<a href="">Java</a>
				</li>
				<li>
					<a href="">C</a>
				</li>
			</ul>
		</div>
		<div id="content_body">
			<p>Display relevant data here</p>
			<?php 
				require 'data.php';
			 ?>
		</div>
	</body>
	<script>
		function loadPage(loadFile){
			$('#content_body').load(loadFile+".php");
		}
	</script>
	<style>
		body{
			margin: 0 0 0 0;
		}
		#navbar{
			background: blue;
			margin:0 0 0 0;
			width: 100%;
			height: 10%;
		}
		#sidebar{
			background: green;
			width: 20%;
			height: 90%;
			float: left;
			margin: 0 0 0 0 ;
		}
		#content_body{
			background: red;
			width: 80%;
			height: 90%;
			float: right;
			margin: 0 0 0 0;
		}
	</style>
</html>