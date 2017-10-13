<?php
require ('../imacConnect.php'); 
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
		?>
	</table>
	<p id="studentsListT">Nominated Student Co-Ordinator List:</p>
	<table >
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Branch</th>
			<th>Mobile</th>
		</tr>
		<?php
		$sql = "SELECT * FROM $tableNameCoT";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "<td>".$row["Mobile"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		?>
	</table>
</div>