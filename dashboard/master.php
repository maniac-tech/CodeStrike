<?php 
require '../imacConnect.php';
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
		$servername=getenv('DATABASE_SERVER_NAME_IMAC');
	$databaseName=getenv('DATABASE_NAME_IMAC');
		$tableName=getenv('DATABASE_TABLE_NAME_IMAC');
	$username=getenv('DATABASE_USERNAME_IMAC');
	$password=getenv('DATABASE_PASSWORD_IMAC');
		//create connection
		$conn=mysqli_connect($servername,$username,$password,$databaseName);
		if (!$conn){
			die('Connection failed:'.mysqli_connect_error());
		}else{
			foreach($checkboxArray as $array) {
				// echo "$array";
				$sql = "UPDATE $tableName SET Batch='$toInsert' WHERE Mobile IN ($array)";
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
	}

	function otherOptions($status){
		$checkboxArray = array();
		$checkboxArray=$_POST['checkbox'];
		$servername="localhost";
		$databaseName="imac";
		$tableName="registrations2017";
		$username="root";
		$password="";
		//create connection
		$conn=mysqli_connect($servername,$username,$password,$databaseName);
		if (!$conn){
			die('Connection failed:'.mysqli_connect_error());
		}else{
			foreach($_POST['checkbox'] as $check) {
				if ($status=="statusComplete"){
				$sql = "UPDATE $tableName SET Status='COMPLETED' WHERE Mobile IN ($check)";
				$result=mysqli_query($conn,$sql);
			}else{
				$sql = "UPDATE $tableName SET Status='PENDING' WHERE Mobile IN ($check)";
				$result=mysqli_query($conn,$sql);
			}
				if ($result) {
					echo "QUERY COMPLETE";
				}else{
					echo "<p>QUERY FAILED</p>";
					echo mysqli_error($conn);
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
	}
	?>