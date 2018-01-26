<?php 
require 'login_connect.php';
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
	<link rel="stylesheet" href="css/overview.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>google.charts.load('current', {'packages':['corechart']});</script>

	<!-- tableExport jQuery Plugin -->
	<!-- Note:
		*For proper functioning of tableExportPlugin,
		make sure 'FileSaver.js' script is included before 'tableexport.js'
	 -->
	<script type="text/javascript" src="tableExportPlugin/FileSaver.js"></script>
	<script type="text/javascript" src="tableExportPlugin/tableExport/js/tableexport.js"></script>
</head>
<body>
	<div id="navbar">
		<p>Welcome, <?php echo $_SESSION['username']; ?></p>
		<form action="logout.php" method="POST">
			<Button type="submit" name="Logout" value="Logout">Logout</Button>
		</form>
	</div>
	<div id="sidebar">
		<a href="http://www.codestrike.in">
			<img src="../img/dashboard_logo.png" alt="">
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
