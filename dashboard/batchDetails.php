<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	<p id="studentsList"><b>Student Batch Details:</b></p>
	<table >
		<tr>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
			<td>Batch</td>
		</tr>
		<?php
		//----- PostGRE SQL Commands -----
		// Printing 2018 Data:
		$psql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Batch\"!=0 ORDER BY \"Batch\" DESC";
		$result = pg_query($dbconn,$psql);
		if(pg_num_rows($result)>0){
			while ($row=pg_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Batch"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}

		// Printing 2017 Data:
		$psql = "SELECT * FROM $tablename_IMac WHERE \"Batch\"!=0 ORDER BY \"Batch\" DESC";
		$result = pg_query($dbconn,$psql);
		if(pg_num_rows($result)>0){
			while ($row=pg_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Batch"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		// -X-X-X- End of PostGRE SQL Commands -X-X-X-

		//----- SQL Commands -----
		/*
		$sql = "SELECT * FROM $tableName WHERE Batch!=0";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Batch"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		*/
		// -X-X-X- End of SQL Commands -X-X-X-
		?>
	</table>
</div>
<div id="operations">
	<p id="studentsList">Instructions:</p>
	<p>All Batch related information is available on the following tab.</p>
</div>