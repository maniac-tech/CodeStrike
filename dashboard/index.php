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
    <link rel="stylesheet" href="css/searchbar.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>google.charts.load('current', {'packages':['corechart']});</script>
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
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
</html>
