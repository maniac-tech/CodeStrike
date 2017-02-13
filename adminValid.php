<?php 
	require_once('interview2017Connect.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>CodeStrike</title>
 </head>
 <body>
	<h1><u>Registration 2017 Database</u></h1>
	<table>
		<?php 
		$query="SELECT Name FROM Interview2017";
		$result=$conn->query($query);

		if ($result->num_rows > 0){
			while ($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["Name"]."</td></tr>";
			}
		}
		else
			echo "No Results";
	 ?>
	</table>
 </body>
 </html>