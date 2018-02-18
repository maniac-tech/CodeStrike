<?php
require ('login_connect.php'); 
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
?>
<div id="content_table">
	
<input type="text" id="myInput" onkeyup="myFunction()" style="" placeholder="Search for names..">
    
<p id="studentsList" class="searchbar">List of Students Registered:</p>
	<table id="myTable">
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
		$query = "SELECT * FROM $tablename_JS_2018";
		$result = pg_query($dbconn, $query);

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
		?>
	</table>
	<button onclick="$('#myTable').tableExport({
		headers: true,                              // (Boolean), display table headers (th or td elements) in the <thead>, (default: true)
	    footers: true,                              // (Boolean), display table footers (th or td elements) in the <tfoot>, (default: false)
	    formats: ['xls', 'csv', 'txt'],             // (String[]), filetype(s) for the export, (default: ['xls', 'csv', 'txt'])
    	filename: 'All Students',                             // (id, String), filename for the downloaded file, (default: 'id')
   		bootstrap: true,                           // (Boolean), style buttons using bootstrap, (default: true)
    	exportButtons: true,                        // (Boolean), automatically generate the built-in export buttons for each of the specified formats (default: true)
    	position: 'bottom',                         // (top, bottom), position of the caption element relative to table, (default: 'bottom')
    	ignoreRows: null,                           // (Number, Number[]), row indices to exclude from the exported file(s) (default: null)
    	ignoreCols: null,                           // (Number, Number[]), column indices to exclude from the exported file(s) (default: null)
    	trimWhitespace: true,
    	// type: 'csv' 
    }
    );">
    Export
</button>
</div>