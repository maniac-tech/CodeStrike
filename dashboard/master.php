<?php 
require 'login_connect.php';
session_start();
if(!isset($_SESSION['userId'])){
	header('Location:login.php');
}
// Master PHP File
// This file should conatin all the Functional working code for all the buttons. All at one Place

/*
Buttons are:
1. All Students
2. Pending Students
3. Completed Students
4. Allot Batch
5. Co-Ordinators
6. Batch Details
7. Other Options
*/

/*
Button Roles:
1. All Students:
	Display details of all the students irrelevant of the Status and Batch.

2. Pending Students:
	Display details of all the Students whose status is 'Pending'

3. Completed Students:
	Display details of all the Students whose status is 'Completed'

4. Allot Batch:
	Display list of Pending Students, and also, provide an interface to Allocate Batch number to these Students.

5. Co-Ordinators:
	List of Co-Orinators.

6. Batch Details:
	List of Students along with their Batch number and Status.

7. Other Options:
	Provide and Interface to Change the Status of Students from 'Pending' to 'Completed', and Vice-versa.
*/

//To-Do:
/*
	Define a way to manage all button calls in one file.
*/

	
	$urlVariable=$_REQUEST["query"];

	function allStudents(){

	}

	function pendingStudents(){

	}

	function completedStudents(){

	}

	function alloTaskScript($toInsert){
		$checkboxArray = array();
		$checkboxArray=$_POST['checkbox'];
		$count_checkboxArray = $_POST['checkboxLength'];

		//----- PostGRE SQL Server Commands -----
		
		// Database Credentials:
		$servername=getenv('PostGRE_DB_Host');
		$databaseName=getenv('PostGRE_DB');
		$username=getenv('PostGRE_DB_User');
		$password=getenv('PostGRE_DB_Password');
		// iMac:
		$tablename_iMac=getenv('PostGRE_DB_imac');
		$tablename_iMacBatches=getenv('PostGRE_DB_imacBatches');
		
		//create connection
		$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
		
		if (!$dbconn){
			echo ('Could not connect: ' . pg_last_error().'<br>');
			echo pg_result_error($dbconn);
		}else{
			foreach($checkboxArray as $array) {
				
				/*
				Updating the Column of Batch No in the DB with the value provided in the Query.
				*/
				$psql = "UPDATE $tablename_iMac SET \"Batch\"='$toInsert' WHERE \"Mobile\" IN ($array)";
				$result=pg_query($dbconn,$psql);

				if ($result) {
					echo "Batch Allocated:".$toInsert.". Refresh to see the Updated List.";
				}else{
					echo "QUERY FAILED for $array ".pg_result_error($result).". for Batch No:".$toInsert;
				}
			}

			/*
			Updating the Batch DB on the following conditions:
			If the Batch no is not already present in the DB:
			Update the count of the batch by adding the size of the array provided in the query.
			else:
			Insert the Batch No as a new entry, with the size as the size of the array.
			*/
			$query_searchBatch = "SELECT \"Total Students\" FROM $tablename_iMacBatches WHERE \"Batch No\" = '$toInsert'";
			$result_searchBatch = pg_query($dbconn,$query_searchBatch);
			if ($result_searchBatch){
				$row_totalStudents = pg_fetch_assoc($result_searchBatch);
				if ($row_totalStudents){
					$update_totalStudents = $row_totalStudents["Total Students"] + $count_checkboxArray;
					$query_updateTotalStudents = "UPDATE $tablename_iMacBatches SET \"Total Students\" = '$update_totalStudents'
					WHERE \"Batch No\" = '$toInsert'";
					$result_updateTotalStudents=pg_query($dbconn,$query_updateTotalStudents);
					if ($result_updateTotalStudents){
						echo "Total Students updated";
					}else{
						echo "Total Students update failed";
					}
				}else{
					$query_insertBatch = "INSERT INTO $tablename_iMacBatches (\"Batch No\", \"Total Students\") VALUES ('$toInsert','$count_checkboxArray')";
					$result_insertBatch=pg_query($dbconn,$query_insertBatch);
					if ($result_insertBatch){
						echo "New Batch inserted";
					}else{
						echo "New Batch insert failed";
					}
				}
			}else{
				echo "Batch Database didn't Update";
			}
		}

		// -X-X-X- End of PostGRE SQL Server Commands -X-X-X-
	}

	function otherOptions($status){
		$checkboxArray = array();
		$checkboxArray=$_POST['checkbox'];
		
		$servername=getenv('PostGRE_DB_Host');
		$databaseName=getenv('PostGRE_DB');
		$username=getenv('PostGRE_DB_User');
		$password=getenv('PostGRE_DB_Password');
		// iMac:
		$tablename_iMac=getenv('PostGRE_DB_imac');
		$tablename_iMacBatches=getenv('PostGRE_DB_imacBatches');
		
		//create connection
		$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
		if (!$dbconn){
			echo ('Could not connect: ' . pg_last_error().'<br>');
		}else{
			foreach($_POST['checkbox'] as $check) {
				if ($status=="statusComplete"){
					$query= "UPDATE $tablename_iMac SET \"Status\"='COMPLETED' WHERE \"Mobile\" IN ($check)";
					$result=pg_query($dbconn,$query);
				}else{
					if ($status=="statusPending"){
						$query = "UPDATE $tablename_iMac SET \"Status\"='PENDING' WHERE \"Mobile\" IN ($check)";
						$result=pg_query($dbconn,$query);
					}else{
						if ($status=="statusNA"){
							$query = "UPDATE $tablename_iMac SET \"Status\"='NOT ATTENDED' WHERE \"Mobile\" IN ($check)";
							$result=pg_query($dbconn,$query);
						}else{
							if($status=="statusIncomplete"){
								$query = "UPDATE $tablename_iMac SET \"Status\"='INCOMPLETE' WHERE \"Mobile\" IN ($check)";
								$result=pg_query($dbconn,$query);
							}
						}					
					}
				}
				if ($result) {
					echo "QUERY COMPLETE";
				}else{
					echo "<p>QUERY FAILED</p>";
					// echo mysqli_error($conn);
				}
			}
		}
	}
	if($urlVariable=="allotTask"){
		$batch = $_POST['Batch'];
		// echo "$batch";
		alloTaskScript($batch);
	}elseif ($urlVariable=="statusComplete") {
		otherOptions("statusComplete");
	}elseif($urlVariable=="statusPending"){
		otherOptions("statusPending");
	}elseif($urlVariable=="statusNA"){
		otherOptions("statusNA");
	}elseif($urlVariable=="statusIncomplete"){
		otherOptions("statusIncomplete");
	}
	?>