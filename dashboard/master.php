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

		//----- PostGRE SQL Server Commands -----
		$servername=getenv('PostGRE_DB_Host');
		$databaseName=getenv('PostGRE_DB');
		$username=getenv('PostGRE_DB_User');
		$password=getenv('PostGRE_DB_Password');
		$tableNameImac=getenv('PostGRE_DB_IMac');

		//create connection
		$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
		if (!$dbconn){
			echo ('Could not connect: ' . pg_last_error().'<br>');
			echo pg_result_error($dbconn);
		}else{
			foreach($checkboxArray as $array) {
				// echo "$array";
				$psql = "UPDATE $tableNameImac SET \"Batch\"='$toInsert' WHERE \"Mobile\" IN ($array)";
				$result=pg_query($dbconn,$psql);
				if ($result) {
					echo "Batch Allocated:".$toInsert.". Refresh to see the Updated List.";
				}else{
					echo "QUERY FAILED for $array ".pg_result_error($result)."...";
					echo pg_result_error($dbconn);
				}
			}		
		}

		// -X-X-X- End of PostGRE SQL Server Commands -X-X-X-

		//----- SQL Server Commands -----
		/*
		$servername=getenv('DATABASE_SERVER_NAME_IMAC');
		$databaseName=getenv('DATABASE_NAME_IMAC');
		$tablename_IMac=getenv('DATABASE_TABLE_NAME_IMAC');
		$username=getenv('DATABASE_USERNAME_IMAC');
		$password=getenv('DATABASE_PASSWORD_IMAC');
		
		//create connection
		$conn=mysqli_connect($servername,$username,$password,$databaseName);
		if (!$conn){
			die('Connection failed:'.mysqli_connect_error());
		}else{
			foreach($checkboxArray as $array) {
				// echo "$array";
				$sql = "UPDATE $tablename_IMac SET Batch='$toInsert' WHERE Mobile IN ($array)";
				$result=mysqli_query($conn,$sql);
				if ($result) {
					echo "Batch Allocated:".$toInsert.". Refresh to see the Updated List.";
				}else{
					echo "QUERY FAILED for $array";
					echo mysqli_error($conn);
				}
			}		

			// foreach ($checkboxArray as $key) {
			// 	echo $key;
			// }

		}
		*/
		// -X-X-X- End of SQL Server Commands -X-X-X-
	}

	function otherOptions($status){
		$checkboxArray = array();
		$checkboxArray=$_POST['checkbox'];
		$servername=getenv('PostGRE_DB_Host');
		$databaseName=getenv('PostGRE_DB');
		$username=getenv('PostGRE_DB_User');
		$password=getenv('PostGRE_DB_Password');
		$tablename_IMac=getenv('PostGRE_DB_IMac');

		//create connection
		$dbconn = pg_connect("host=$servername dbname=$databaseName user=$username password=$password");
		if (!$dbconn){
			echo ('Could not connect: ' . pg_last_error().'<br>');
		}else{
			foreach($_POST['checkbox'] as $check) {
				if ($status=="statusComplete"){
					$query= "UPDATE $tablename_IMac SET \"Status\"='COMPLETED' WHERE \"Mobile\" IN ($check)";
					$result=pg_query($dbconn,$query);
				}else{
					if ($status=="statusPending"){
						$query = "UPDATE $tablename_IMac SET \"Status\"='PENDING' WHERE \"Mobile\" IN ($check)";
						$result=pg_query($dbconn,$query);
					}else{
						if ($status=="statusNA"){
							$query = "UPDATE $tablename_IMac SET \"Status\"='NOT ATTENDED' WHERE \"Mobile\" IN ($check)";
							$result=pg_query($dbconn,$query);
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
	}
	?>