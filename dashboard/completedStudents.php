<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	<p id="studentsList"><b>List of Students Completed:</b></p>
		<table >
			<tr>
				<td>Name</td>
				<td>Year</td>
				<td>Branch</td>
				<td>Email</td>
				<td>Mobile</td>
				<td>Status</td>
			</tr>
			<?php
			$sql = "SELECT * FROM $tableName WHERE Status='Completed'";
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
</div>