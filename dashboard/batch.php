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
	<div id="sub-menu">
		<button id="Operations-button"><a href="">Operations</a></button>
		<button id="AllotBatch-button"><a href="pendingStudents">Allot Batch</a></button>
		<button id="BatchInfo-button"><a href="#registeredStudents">Batch Info</a></button>
	</div>
	
	<!--  Search Bar-->
	<input type="text" id="myInput" onkeyup="myFunctionS()" style="" placeholder="Search for names..">
	<!--  -->

	<!-- <p id="studentsList"><b>List of Students Pending:</b></p> -->
	<div id="tab-data">
		<div id="myTableAllotBatch">
			<form name="willAllotBatchForm" action="">
				<table id="myTableAllotBatch_details">
					<?php
					//----- PostGRE SQL Commands -----
					// Printing 2018 Data:
					$result = pg_query_params($dbconn,"SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"=$1 AND \"Batch\"=$2 ",array('PENDING','0'));
					if (pg_result_status($result)==2) {
						echo "<tr>
						<td></td>
						<td>Name</td>
						<td>Year</td>
						<td>Branch</td>
						</tr>";
						while($row = pg_fetch_assoc($result)){
							echo "<tr>";
							echo "<td><input type='checkbox' name='checkbox[]' id='checkbox' value='".$row['Mobile']."'></td>";
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
						echo pg_result_status($result);
					}
						// Printing 2017 Data:
					$result = pg_query_params($dbconn,"SELECT * FROM $tablename_IMac WHERE \"Status\"=$1 AND \"Batch\"=$2 ",array('PENDING','0'));
					if (pg_result_status($result)==2) {
						echo "<tr>
						<td></td>
						<td>Name</td>
						<td>Year</td>
						<td>Branch</td>
						</tr>";
						while($row = pg_fetch_assoc($result)){
							echo "<tr>";
							echo "<td><input type='checkbox' name='checkbox[]' id='checkbox' value='".$row['Mobile']."'></td>";
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
						echo pg_result_status($result);
					}
						// -X-X-X- End of PostGRE SQL Commands -X-X-X-
					?>
				</table>
			</form>
			<div id="myTableAllotBatch_operations">
				<p id="allotBatch_header">Allot Batch:</p>
				<p id="allotBatch_content">
					<p>
						Instructions:
						<ol>
							<li>Select Students to allot batch.</li>
							<li>Enter their Batch no in the field Below.</li>
							<li><b>NOTE:</b> No of Students selected at once, will be alloted the same Batch.</li>
						</ol>
					</p>
				</p>
				<p>Enter Batch No:</p>
				<input type="text" form="willAllotBatchForm" id="batchAllotedInput" required>
				<button onclick="loadAjax()">Allot Batch</button>
				<p>Total no. of students selected:</p>
			</div>
		</div>
		<table id="myTableOperations">
			<tr>
				<td>DEFINE USE OF THIS BUTTON</td>
			</tr>
		</table>
		<table id="myTableBatchInfo">
			<?php 
			//----- PostGRE SQL Commands -----
			// Printing 2018 Data:
			$query = "SELECT * FROM $tablename_IMac_2018_Batch";
			$result = pg_query($dbconn, $query);
			if (pg_result_status($result)==2){
				while($row = pg_fetch_assoc($result)){
					echo"<button class=\"accordion\">Batch No: ".$row['Batch No']."     Total Students: ".$row['Total Students']."/20</button>
					<div class=\"panel\">";
					$result2 = pg_query_params($dbconn, "SELECT * FROM $tablename_IMac WHERE \"Batch\"=$1",array($row['Batch No']));
					$result3 = pg_query_params($dbconn, "SELECT * FROM $tablename_IMac_2018 WHERE \"Batch\"=$1",array($row['Batch No']));
					if (pg_result_status($result2)==2){
						echo "<table border=1>
						<th colspan = 4>
							Atharva iMac Lab Batch:53 
						</th>
						<tr>
						<td>Sr. no</td>
						<td>Name of Student</td>
						<td>Year</td>
						<td>Branch</td>
						</tr>
						";
						while($row2 = pg_fetch_assoc($result2)){
							echo "<tr>
							<td></td>
							<td>".$row2['Name']."</td>
							<td>".$row2['Year']."</td>
							<td>".$row2['Branch']."</td>
							</tr>";
						}
						while($row3 = pg_fetch_assoc($result3)){
							echo "<tr>
							<td>".$row3['Name']."</td>
							<td>".$row3['Year']."</td>
							<td>".$row3['Branch']."</td>
							</tr>";
						}
						echo "</table>";
					}
					echo "</div>";
				}
			}
			?>
		</table>
	</div>	
	<form name="willAllotTaskForm" id="willAllotTaskForm">
		<table id="myTable">
		</table>
	</form>
</div>


<style>
.accordion {
	background-color: #eee;
	color: #444;
	cursor: pointer;
	padding: 18px;
	width: 100%;
	border: none;
	text-align: left;
	outline: none;
	font-size: 15px;
	transition: 0.4s;
}

.active, .accordion:hover {
	background-color: #ccc; 
}

.panel {
	padding: 0 18px;
	display: none;
	background-color: white;
	overflow: hidden;
}
</style>
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
	}
</script>
<script src="js/indexBatches.js"></script>