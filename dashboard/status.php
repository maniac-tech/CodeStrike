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
			xhttp.send("query=statusComplete&checkbox[]="+checkboxArray);
	}
	function loadAjax2(){
		
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
		xhttp.send("query=statusPending&checkbox[]="+checkboxArray);
		
		// alert ("Functionality Under development");
	}
	function loadAjax3(){
		
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
		xhttp.send("query=statusNA&checkbox[]="+checkboxArray);
		
		// alert ("Functionality Under development");
	}
	function loadAjax4(){
		
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
		xhttp.send("query=statusIncomplete&checkbox[]="+checkboxArray);
		
		// alert ("Functionality Under development");
	}

</script>
<div id="content_table">
	<input type="text" id="myInput" onkeyup="myFunctionS()" style="" placeholder="Search for names..">

	<p id="studentsList"><b>List of Students Pending:</b></p>
		<table id="myTable">
			<tr>
				<td></td>
				<td>Name</td>
				<td>Year</td>
				<td>Branch</td>
				<td>Batch</td>
			</tr>
			<?php
			//----- PostGRE SQL Commands -----
			// Printing 2018 Data:
			$psql = "SELECT * FROM $tablename_IMac_2018 WHERE \"Batch\"!=0 AND \"Status\"='PENDING'";
			$result = pg_query($dbconn,$psql);
			if(pg_num_rows($result)>0){
				while ($row=pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td><input type='checkbox' name='checkbox[]' value='".$row['Mobile']."'></td>";
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
			$psql = "SELECT * FROM $tablename_IMac WHERE \"Batch\"!=0 AND \"Status\"='PENDING'";
			$result = pg_query($dbconn,$psql);
			if(pg_num_rows($result)>0){
				while ($row=pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td><input type='checkbox' name='checkbox[]' value='".$row['Mobile']."'></td>";
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
			$sql = "SELECT * FROM $tableName WHERE Batch!=0 AND Status='Pending'";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td><input type='checkbox' name='checkbox[]' value='".$row['Mobile']."'></td>";
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
	<p id="studentsList">About:</p>
	<p>
		This section is used to change the status of the Students, after they have completed their training.
		
		Instructions:
		<ol>
			<li>Select Students to change Status.</li>
			<li>Click on <b>Complete Button</b> below, to change the status.</li>
		</ol>
	</p>
	<p>
		<button onclick="loadAjax()">Completed</button>
		<button onclick="loadAjax2()">Pending</button>
		<button onclick="loadAjax3()">Not Attended</button>
		<button onclick="loadAjax4()">Incomplete</button>
	</p>
</div>