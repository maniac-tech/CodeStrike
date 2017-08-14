<?php
require 'imacConnect.php';
?>
	<p>List of Students Registered</p>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
			<td>Email</td>
			<td>Mobile</td>
			<td>Status</td>
		</tr>
		<?php
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
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		?>
	</table>
	<p>List of Students Completed</p>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
			<td>Email</td>
			<td>Mobile</td>
			<td>Status</td>
		</tr>
		<?php
		$sql = "SELECT * FROM $tableName WHERE Status='Complete'";
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
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		?>
	</table>
	<p>List of Students Pending</p>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
			<td>Email</td>
			<td>Mobile</td>
			<td>Status</td>
		</tr>
		<?php
		$sql = "SELECT * FROM $tableName WHERE Status='Pending'";
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
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		?>
	</table>