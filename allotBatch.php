<?php
require ('iMacConnect.php'); 
?>
<div id="content_table">
	<p id="studentsList"><b>List of Students Pending:</b></p>
	<form action="allotTaskScript.php" method="POST" id="willAllotTaskForm">
	<table >
		<tr>
		<td></td>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
		</tr>
		<?php
		$sql = "SELECT * FROM $tableName WHERE Status='Pending'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td><input type='checkbox' name='checkbox[]' value='".$row['Mobile']."'></td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "NO DATA";
		}
		?>
	</table>
	</form>
</div>
<div id="operations">
	<p id="studentsList">Instructions:</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus a corrupti libero ipsam unde. Impedit iure, deserunt odio! Eligendi beatae voluptatibus vel quo nostrum mollitia tenetur iusto, molestias quis! Non.</p>
	<p>
			<input type="text" form="willAllotTaskForm" name="batchAllotedInput">
			<button type="submit" value="submit" form="willAllotTaskForm">Submit</button>
	</p>
</div>