<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	<?php 
		//----- PostGRE SQL Commands -----
		// Printing 2018 Data:
		$query = "SELECT * FROM $tablename_IMac_Coord";
		$result = pg_query($dbconn, $query);

		if (pg_result_status($result)==2) {
			while ($row = pg_fetch_assoc($result)){
			echo "<div class=\"card\">";
			echo "<img src=\"profile.jpg\" alt=\"John\" style=\"width:100%\">";
			echo "<h1>".$row["Name"]."</h1>";
			echo "<p class=\"title\">".$row["Year"]." - ".$row["Branch"]."</p>
			<p>".$row["Email ID"]."</p>
			<p>".$row["Mobile"]."</p>";
			echo "
				<div style=\"margin: 24px 0;\">
					<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>  
					<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>  
					<a href=\"#\"><i class=\"fa fa-facebook\"></i></a> 
				</div>";
			echo "
			<p><button>Contact</button></p>
			</div>";	
			}
		}
	 ?>
</div>