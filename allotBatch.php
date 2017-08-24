<?php
require ('iMacConnect.php'); 
?>

<script>
	function loadAjax(){
var checkboxArray = new Array();
		var xhttp = new XMLHttpRequest();
		
		$("input:checked").each(function(){
			checkboxArray.push($(this).val());
		});
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert(xhttp.responseText);
			}
		};
		xhttp.open("POST","master.php",true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// xhttp.send("query=allotTask&Batch="+$("#batchAllotedInput").val());
		xhttp.send("query=allotTask&Batch="+$("#batchAllotedInput").val()+"&checkbox[]="+checkboxArray);
	}

</script>
<div id="content_table">
	<p id="studentsList"><b>List of Students Pending:</b></p>

	<table >
		<tr>
			<td></td>
			<td>Name</td>
			<td>Year</td>
			<td>Branch</td>
		</tr>
		<?php
		$sql = "SELECT * FROM $tableName WHERE Status='Pending' AND Batch=0";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td><input type='checkbox' name='checkbox[]' id='checkbox' value='".$row['Mobile']."'></td>";
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

</div>
<div id="operations">
	<p id="studentsList">Instructions:</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus a corrupti libero ipsam unde. Impedit iure, deserunt odio! Eligendi beatae voluptatibus vel quo nostrum mollitia tenetur iusto, molestias quis! Non.</p>
	<p>
		<input type="text" form="willAllotTaskForm" id="batchAllotedInput">
		<button onclick="loadAjax()">Submit</button>
	</p>
</div>