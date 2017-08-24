<?php
require ('iMacConnect.php'); 
?>
<div id="content_table">
	<p id="studentsList"><b>List of Students Pending:</b></p>
	<table >
		<tr>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
			<td>Batch</td>
		</tr>
		<?php
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
		?>
	</table>
</div>
<div id="operations">
	<p id="studentsList">Instructions:</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus a corrupti libero ipsam unde. Impedit iure, deserunt odio! Eligendi beatae voluptatibus vel quo nostrum mollitia tenetur iusto, molestias quis! Non.</p>
</div>