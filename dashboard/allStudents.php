<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
<p id="studentsList">List of Students Registered:</p>
	<table id="allStudentsTable">
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Branch</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Status</th>
			<!-- TO-DO: Print the Batch no alloted from the respective table -->
			<!-- <th>Batch</th> -->
		</tr>
		<?php
		//----- PostGRE SQL Commands -----
		$query = "SELECT * FROM $tablename_IMac";
		$result = pg_query($dbconn, $query);

		if (pg_result_status($result)==2) {
			while($row = pg_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Email"]."</td>";
				echo "<td>".$row["Mobile"]."</td>";
				echo "<td>".$row["Status"]."</td>";
				// echo "<td>".$row["Batch"]."</td>";
				echo "</tr>";
			}
		}
		else{
			echo "Query Failed.";
		}
		// -X-X-X- End of PostGRE SQL Commands -X-X-X-

		//----- SQL Commands -----
		/*
		$sql = "SELECT * FROM $tableName ";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Email"]."</td>";
				echo "<td>".$row["Mobile"]."</td>";
				echo "<td>".$row["Status"]."</td>";
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
	<button onclick="$('#allStudentsTable').tableExport({type:'csv',escape:'false'});">Export to PDF</button>
</div>