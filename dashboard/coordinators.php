<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	<p id="studentsList">Student Co-Ordinator List:</p>
	<table >
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Branch</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Unique ID</th>
			<th>RFID No</th>
		</tr>
		<?php

		//----- PostGRE SQL Commands -----
		$query = "SELECT * FROM $tablename_IMac_Coord";
		$result = pg_query($dbconn, $query);
		if (pg_result_status($result)==2) {
			while($row = pg_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Email ID"]."</td>";
				echo "<td>".$row["Mobile"]."</td>";
				echo "<td>".$row["Unique ID"]."</td>";
				echo "<td>".$row["RFID no"]."</td>";
				echo "</tr>";
			}
		}
		else{
			echo "Query Failed.";
		}
		// -X-X-X- End of PostGRE SQL Commands -X-X-X-

		//----- SQL Commands -----
		/*
		$sql = "SELECT * FROM $tableNameCo";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Email"]."</td>";
				echo "<td>".$row["Mobile"]."</td>";
				echo "<td>".$row["Unique ID"]."</td>";
				echo "<td>".$row["RFID No"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		*/
		// -X-X-X- End of SQL Commands -X-X-X-
		?>
	</table>
	<p id="studentsListT">Interview Registration List:</p>
	<table >
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Branch</th>
			<th>E-Mail</th>
			<th>Mobile</th>
			<th>Nominated</th>
			<th>Unique ID</th>
		</tr>
		<?php
		//----- PostGRE SQL Commands -----
		$query = "SELECT * FROM $tableName_IMac_interviews";
		$result = pg_query($dbconn,$query);
		if (pg_result_status($result)==2) {
			while($row = pg_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Email"]."</td>";
				echo "<td>".$row["Mobile"]."</td>";
				echo "<td>".$row["Nominated"]."</td>";
				echo "<td>".$row["Unique ID"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		// -X-X-X- End of PostGRE SQL Commands -X-X-X-
		?>
	</table>
</div>