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
		xhttp.send("query=allotTask&Batch="+$("#batchAllotedInput").val()+"&checkbox[]="+checkboxArray+"&checkboxLength="+checkboxArray.length);
		// xhttp.send("Batch="+$("#batchAllotedInput").val()+"&checkbox[]="+checkboxArray);
	}
	function checkboxUpdated(){
		$("#noOfStudentsSelected").text(document.querySelectorAll('input[type="checkbox"]:checked').length);
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
					// Printing Student Data of all Academic Years:
					$result = pg_query_params($dbconn,"SELECT * FROM $tablename_iMac WHERE \"Status\"=$1 AND \"Batch\"=$2 ",array('PENDING','0'));
					if (pg_result_status($result)==2) {
						echo "<tr>
						<td></td>
						<td>Name</td>
						<td>Year</td>
						<td>Branch</td>
						<td>Reg Year</td>
						</tr>";
						while($row = pg_fetch_assoc($result)){
							echo "<tr>";
							echo "<td><input type='checkbox' name='checkbox[]' id='checkbox' value='".$row['Mobile']."'onchange=checkboxUpdated()></td>";
							echo "<td>".$row["Name"]."</td>";
							echo "<td>".$row["Year"]."</td>";
							echo "<td>".$row["Branch"]."</td>";
							echo "<td>".$row["Reg Year"]."</td>";
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
				<div id="enterBatchNo">
					<p>Enter Batch No:</p>
					<input type="text" form="willAllotBatchForm" id="batchAllotedInput" required>
					<button onclick="loadAjax()">Allot Batch</button>
				</div>
				<p>Total no. of students selected: <span id="noOfStudentsSelected"></span></p>
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
			$query = "SELECT * FROM $tablename_iMacBatches ORDER BY \"Batch No\" ASC";
			$result = pg_query($dbconn, $query);
			if (pg_result_status($result)==2){
				while($row = pg_fetch_assoc($result)){
					echo"<button class=\"accordion\">Batch No: ".$row['Batch No']."     Total Students: ".$row['Total Students']."/20</button>
					<div class=\"panel\">";
					$result2 = pg_query_params($dbconn, "SELECT * FROM $tablename_iMac WHERE \"Batch\"=$1",array($row['Batch No']));
					if (pg_result_status($result2)==2){
						echo "<table border=1>
						<th colspan = 4>
						Atharva iMac Lab Batch:".$row['Batch No']."
						</th>
						<tr>
						<td>Sr. no</td>
						<td>Name of Student</td>
						<td>Year</td>
						<td>Branch</td>
						<td>Reg Year</td>
						</tr>
						";
						$temp=1;
						while($row2 = pg_fetch_assoc($result2)){
							echo "<tr>
							<td>$temp</td>
							<td>".$row2['Name']."</td>
							<td>".$row2['Year']."</td>
							<td>".$row2['Branch']."</td>
							<td>".$row2['Reg Year']."</td>
							</tr>";
							$temp++;
						}
						echo "</table>";
					}
					echo "</div>";
				}
			}
			?>
		</table>
	</div>
</div>

<link rel="stylesheet" href="css/accordion.css">
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