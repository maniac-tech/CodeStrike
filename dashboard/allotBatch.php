<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
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
		// xhttp.send("Batch="+$("#batchAllotedInput").val()+"&checkbox[]="+checkboxArray);
	}
</script>
<div id="content_table">
	<p id="studentsList"><b>List of Students Pending:</b></p>
	<form name="willAllotTaskForm" id="willAllotTaskForm">
		<table >

			<?php
			//----- PostGRE SQL Commands -----
			$query = "SELECT * FROM $tablename_IMac WHERE Status=$1 AND Batch=$2";
			$result = pg_query_params($connect,$query,array('PENDING','0'));
			if (pg_result_status($result)==2) {
				echo "<tr>
						<td></td>
						<td>Name</td>
						<td>Year</td>
						<td>Branch</td>
					</tr>";
				while($row = pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row["Name"]."</td>";
					echo "<td>".$row["Year"]."</td>";
					echo "<td>".$row["Branch"]."</td>";
					// echo "<td>".$row["Email"]."</td>";
					// echo "<td>".$row["Mobile"]."</td>";
					// echo "<td>".$row["Status"]."</td>";
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
			$sql = "SELECT * FROM $tableName WHERE Status='PENDING' AND Batch=0";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				echo "<tr>
						<td></td>
						<td>Name</td>
						<td>Year</td>
						<td>Branch</td>
					</tr>";
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td><input type='checkbox' name='checkbox[]' id='checkbox' value='".$row['Mobile']."'></td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "ALL REGISTRATIONS HAVE BEEN ALLOTED A BATCH.";
		}
		*/
		// -X-X-X- End of SQL Commands -X-X-X-
		?>
	</table>
</form>
</div>
<div id="operations">
	<p id="studentsList">Instructions:</p>
	<p><ol>
		<li>Select Students to allot batch.</li>
		<li>Enter their Batch no in the field Below.</li>
		<li><b>NOTE:</b> No of Students selected at once, will be alloted the same Batch.</li>
	</ol></p>
	<p>
		<input type="text" form="willAllotTaskForm" id="batchAllotedInput" required>
		<button onclick="loadAjax()" >Submit</button>
	</p>
</div>