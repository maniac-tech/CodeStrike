<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	<div id="sub-menu">
		<button id="Completed-button"><a href="pendingStudents">Completed</a></button>
		<button id="Pending-button"><a href="pendingStudents">Pending</a></button>
		<button id="Register-button"><a href="#registeredStudents">Registered</a></button>
		<button id="download-data-button" onclick="downloadData()"><img src="download_icon.png" alt="" id="download-icon" >Download Data</button>
	</div>
	<br>

	<input type="text" id="myInput" onkeyup="myFunction()" style="" placeholder="Search for names..">

	<!-- <p id="studentsList" class="searchbar">List of Students Registered:</p> -->

	<div id="tab-data">
		<table id="myTableRegister">
			<tr>
				<th>Name</th>
				<th>Year</th>
				<th>Branch</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Status</th>
				<!-- TO-DO: Print the Batch no alloted from the respective table -->
				<!-- <th>Batch</th> -->
			</tr>
			<?php
			//----- PostGRE SQL Commands -----
			// Printing 2018 Data:
			$query = "SELECT * FROM $tablename_IMac_2018";
			$result = pg_query($dbconn, $query);

			if (pg_result_status($result)==2) {
				while($row = pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row["Name"]."</td>";
					echo "<td>".$row["Year"]."</td>";
					echo "<td>".$row["Branch"]."</td>";
					echo "<td>".$row["Email"]."</td>";
					echo "<td>".$row["Mobile"]."</td>";
					echo "<td>".$row["Status"]."</td>";
					// echo "<td>".$row["Batch"]."</td>";
					echo "</tr>";
				}
			}
			else{
				echo "Query Failed.";
			}

			// Printing 2017 Data:
			$query = "SELECT * FROM $tablename_IMac";
			$result = pg_query($dbconn, $query);

			if (pg_result_status($result)==2) {
				while($row = pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row["Name"]."</td>";
					echo "<td>".$row["Year"]."</td>";
					echo "<td>".$row["Branch"]."</td>";
					echo "<td>".$row["Email"]."</td>";
					echo "<td>".$row["Mobile"]."</td>";
					echo "<td>".$row["Status"]."</td>";
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

		<table  id="myTablePending">
			<tr>
				<td>Name</td>
				<td>Year</td>
				<td>Branch</td>
				<td>Email</td>
				<td>Mobile</td>
				<!-- TO-DO: Print the Batch no alloted from the respective table -->
				<!-- <th>Batch</th> -->
			</tr>
			<?php
				//----- PostGRE SQL Commands -----
				// Printing 2018 Data:
			$result = pg_query_params($dbconn, "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"=$1",array('PENDING'));
			if (pg_result_status($result)==2) {
				while($row = pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row["Name"]."</td>";
					echo "<td>".$row["Year"]."</td>";
					echo "<td>".$row["Branch"]."</td>";
					echo "<td>".$row["Email"]."</td>";
					echo "<td>".$row["Mobile"]."</td>";
						// echo "<td>".$row["Status"]."</td>";
						// echo "<td>".$row["Batch"]."</td>";
					echo "</tr>";
				}
			}
			else{
				echo "Query Failed.";
			}

				// Printing 2017 Data:
				// $query = "SELECT * FROM $tablename_IMac WHERE \"Status\"='$1'";
			$result = pg_query_params($dbconn, "SELECT * FROM $tablename_IMac WHERE \"Status\"=$1",array('PENDING'));
			if (pg_result_status($result)==2) {
				while($row = pg_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>".$row["Name"]."</td>";
					echo "<td>".$row["Year"]."</td>";
					echo "<td>".$row["Branch"]."</td>";
					echo "<td>".$row["Email"]."</td>";
					echo "<td>".$row["Mobile"]."</td>";
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

			<table id="myTableCompleted">
				<tr>
					<td>Name</td>
					<td>Year</td>
					<td>Branch</td>
					<td>Email</td>
					<td>Mobile</td>
					<!-- TO-DO: Print the Batch no alloted from the respective table -->
					<!-- <th>Batch</th> -->
				</tr>
				<?php
				//----- PostGRE SQL Commands -----
				// Printing 2018 Data:
				$result = pg_query_params($dbconn, "SELECT * FROM $tablename_IMac_2018 WHERE \"Status\"=$1",array('COMPLETED'));
				if (pg_result_status($result)==2) {
					while($row = pg_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>".$row["Name"]."</td>";
						echo "<td>".$row["Year"]."</td>";
						echo "<td>".$row["Branch"]."</td>";
						echo "<td>".$row["Email"]."</td>";
						echo "<td>".$row["Mobile"]."</td>";
									// echo "<td>".$row["Status"]."</td>";
									// echo "<td>".$row["Batch"]."</td>";
						echo "</tr>";
					}
				}
				else{
					echo "Query Failed.";
				}
						// Printing 2017 Data:
				$result = pg_query_params($dbconn, "SELECT * FROM $tablename_IMac WHERE \"Status\"=$1",array('COMPLETED'));
				if (pg_result_status($result)==2) {
					while($row = pg_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>".$row["Name"]."</td>";
						echo "<td>".$row["Year"]."</td>";
						echo "<td>".$row["Branch"]."</td>";
						echo "<td>".$row["Email"]."</td>";
						echo "<td>".$row["Mobile"]."</td>";
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
				*/
				// -X-X-X- End of SQL Commands -X-X-X-
				?>
			</table>
		</div>

<script src="js/index.js"></script>
<script>
	function downloadData(){
		$('#tab-data').tableExport({
		// (Boolean), display table headers (th or td elements) in the <thead>, (default: true)
		headers: true, 
	    // (Boolean), display table footers (th or td elements) in the <tfoot>, (default: false)
	    footers: true, 
	    // (String[]), filetype(s) for the export, (default: ['xls', 'csv', 'txt'])
	    formats: ['xls', 'csv', 'txt'], 
    	// (id, String), filename for the downloaded file, (default: 'id')
    	filename: 'All Students', 
   		// (Boolean), style buttons using bootstrap, (default: true)
   		bootstrap: true, 
    	// (Boolean), automatically generate the built-in export buttons for each of the specified formats (default: true)
    	exportButtons: true, 
    	// (top, bottom), position of the caption element relative to table, (default: 'bottom')
    	position: 'bottom', 
    	// (Number, Number[]), row indices to exclude from the exported file(s) (default: null)
    	ignoreRows: null, 
    	// (Number, Number[]), column indices to exclude from the exported file(s) (default: null)
    	ignoreCols: null, 
    	// type: 'csv' 
    	trimWhitespace: true,
    }
    );
	}
</script>
</div>